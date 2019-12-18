<?php

if(isset($_POST['n'])){
	$n = $_POST['n'];
}
if(isset($_POST['d'])){
	$d = $_POST['d'];
}
if(isset($_POST['p'])){
	$p = $_POST['p'];
}
if(isset($_POST['q'])){
	$q = $_POST['q'];
}

if(!empty($n)  || !empty($d) || !empty($p)  || !empty($q))
{
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword  = "";
    $dbname = "itechstore";
    $conn = new mysqli($host,$dbUsername,$dbPassword,$dbname);

    if(mysqli_connect_error()){
        die('Connect Error('.mysqli_connect_error().')'. mysqli_connect_error());

    }
    else{
        $INSERT = "INSERT INTO `insertdataa`(`n`, `d`, `p`, `q`) VALUES ([value-1],[value-2],[value-3],[value-4])";
        $echo "created";
    }

}

?>