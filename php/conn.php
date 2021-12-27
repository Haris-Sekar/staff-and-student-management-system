<?php 
//clever cloud DB connect Details

$host='bzsqqkoag3xw1eu5hm2u-mysql.services.clever-cloud.com:3306';
$username='ujycol1ivb8aeozq';
$password='zrcpFiL1hkgoAsCsf0zx';
$database='bzsqqkoag3xw1eu5hm2u';

//infinty free DB connect Details

// $host='sql111.epizy.com:3306';
// $username='epiz_28492601';
// $password='M351OeVmZO';
// $database='epiz_28492601_avs_enter_online';

// localhost DB connect Details

// $host='localhost';
// $username='root';
// $password='';
// $database='staff_mgm';



$conn=mysqli_connect($host,$username,$password,$database);
if(mysqli_connect_error())
{   
    echo "cannot connect DB";
}
else{
    // echo "sus";
}

?>