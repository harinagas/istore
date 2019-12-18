<?php
$name = $_POST['name'];
$id = $_POST['id'];
$price = $_POST['price'];
$quantity = $_POST['add'];

if(!empty($name)  || !empty($id) || !empty($price)  || !empty($quantity))
{
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword  = "";
    $dbname = "admin";
    $conn = new mysqli($host,$dbUsername,$dbPassword,$dbname);

    if(mysqli_connect_error()){
        die('Connect Error('.mysqli_connect_error().')'. mysqli_connect_error());

    }
    else{
        $INSERT = "INSERT Into  register(name,id,price,quantity) values(?,?,?,?)";
        echo "created";
    }

}
else{
    echo"incompleted";
    die();
}
?>