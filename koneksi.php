<?php
$server ="localhost";
$username="root";
$password="";
$dbname="dbmahasiswa";

$conn= new mysqli($server,$username,$password,$dbname);

if($conn->connect_error){

    die("koneksi failed".$conn->connect_error);

}
$sql="Select * from t_mahasiswa";
$result=$conn->query($sql);
$data=array();
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        $data[]=$row;
    }
}else{
        echo"data kosong";
    }
echo json_encode($data);
$conn->close();

?> 
