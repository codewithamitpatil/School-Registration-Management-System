<?php




if(isset($_POST['action'])&& $_POST['action']=='fetch')
{

$que=$_POST['que'];
$con= new mysqli("localhost", "root", "", "ems");


$sql="SELECT * FROM tblquestion WHERE question LIKE '%{$que}%' ";


$res=$con->query($sql);

$data=$res->fetch_assoc();

$num=$res->num_rows;
$res_array=array();


if($num !=0 )
{
	$res_array=$data;

	$res_array['status']="ok";
echo  json_encode($res_array);
}else{


	$res_array['status']="Notok";
echo  json_encode($res_array);

}



}







?>