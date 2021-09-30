<?php
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $address=$_POST["address"];
    $email=$_POST["email"];
    $birthdate=$_POST["birthdate"];
    $gender=$_POST["gender"];
    $countrycd=$_POST["cntrycode"];
    $mobileno=$_POST["mbno"];
    $password=$_POST["password"];
    $mobile=$countrycd.$mobileno;

    $conn=new mysqli('sql6.freemysqlhosting.net','sql6441142','EmnudfUuyc','sql6441142');
    if($conn->connect_error)
    {
        die("Error in db connection".$conn->connect_error);
    }
    else
    {
        $sql="INSERT INTO logininfo VALUES('$fname','$lname','$address','$email','$birthdate','$gender','$mobile','$password')";
        $result=$conn->query($sql);
        if($result)
        {
            $conn->commit();
            $conn->close();
            header("Location:./viewinfo.php"); 
        }
        
    }

?>



