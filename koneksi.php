<?php 
$SERVER="sql203.epizy.com";
$username ="epiz_28599925";
$password="Ox3wvYVAswA46by";
$dbname="epiz_28599925_dbmahasiswa";

$conn= new mysqli($SERVER,$username,$password,$dbname);
if ($conn->connect_error){
    die("koneksi gagal".$conn->connect_error);
}
$sql="select * from t_mahasiswa";
$result=$conn->query($sql);
$data=array();
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        $data[]=$row;
    }
    }else {
        echo"data kosong";

    }
    echo json_encode($data);
    $conn->close();

?>