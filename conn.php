<?php

$conn = mysqli_connect("localhost","root","","student") or die("Connetion Failed");


if($conn)
{
    // echo "Success";
}
else
{
    echo "failed"; 
}

?>