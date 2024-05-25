<?PHP require_once "conn.php";

if (isset($_POST['submit'])) {

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $user = $_POST['username'];
    $pass = $_POST['pass'];
    $confirm = $_POST['confirm'];
    $city = $_POST['city'];
    $gender = $_POST['inlineRadioOptions'];
    $dob = $_POST['dob'];
    $age = $_POST['age'];
    $phno = $_POST['phonenum'];


    
    // $query= "INSERT INTO `stool`(`firstname`,`lastname`,`email`,`username`,`ppassword`,`confirmpassword`,`city`,`gender`,`birthdate`,`age`,`mobilenumber`)
    //                      VALUES('$fname','$lname','$email','$user','$pass','$confirm','$city','$gender',$dob,$age,'$phno')";

    
    $query= "INSERT INTO `stool`(`firstname`,`lastname`,`email`,`username`,`ppassword`,`confirmpassword`,`city`,`gender`,`birthdate`,`age`,`mobilenumber`)
                         VALUES('$fname','$lname','$email','$user','$pass','$confirm','$city','$gender','$dob',$age,'$phno')";

    $result = mysqli_query($conn, $query) or die("Query Failed..");

    if ($result) {

        ?>
                <script>
                        alert("Data Saved Successfully..");
                        window.location.href="index.php";
                </script>
                    
    
        <?php


    } else {
        ?>
        <script>
                alert("Data Not Saved ..");

        </script>
            

<?php

    }
} else {
?>
    <script>
        alert("You are invalide User!");
        window.location.href = "regestration1.php";
    </script>

<?php
}

?>