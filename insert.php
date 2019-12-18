<?php
$iname = $_POST['lname'];
$id = $_POST['id'];
$price = $_POST['iprice'];
$quantity = $_POST['iadd'];

if(!empty($name)  || !empty($id) || !empty($price)  || !empty($quantity))
{
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword  = "";
    $dbname = "istore";
    $conn = new mysqli($host,$dbUsername,$dbPassword,$dbname);

    if(mysqli_connect_error()){
        die('Connect Error('.mysqli_connect_error().')'. mysqli_connect_error());

    }
    else{
        $INSERT = "INSERT Into register (iname,id,price,quantity) values(?,?,?,?)";
        echo "created";
    }

}
else{
    echo"incompleted";
    die();
}
?>