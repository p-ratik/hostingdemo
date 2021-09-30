<?php
$mysqli = new mysqli('sql6.freemysqlhosting.net','sql6441142','EmnudfUuyc','sql6441142'); 
  
    if($conn->connect_error)
    {
        die("Error in db connection".$conn->connect_error);
    }
   
    $sql = "SELECT * FROM logininfo"; 
    $result = $mysqli->query($sql); 
    $mysqli->close();
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</head>
<body>
    <center>
    <table style='width: 80%;' class='table table-bordered table stripped table-hover table-dark'> 
            <tr class='table-success'> 
                <th>First Name</th> 
                <th>Last Name</th> 
                <th>Address</th> 
                <th>Email</th> 
                <th>Birthdate</th> 
                <th>Gender</th> 
                <th>Mobile No</th> 
                <th>Password</th> 
            </tr> 
            <?php 
                while($rows=$result->fetch_assoc()) 
                { 
             ?> 
            <tr> 
                <td><?php echo $rows['fname'];?></td> 
                <td><?php echo $rows['lname'];?></td> 
                <td><?php echo $rows['address'];?></td> 
                <td><?php echo $rows['email'];?></td> 
                <td><?php echo $rows['birthdate'];?></td> 
                <td><?php echo $rows['gender'];?></td> 
                <td><?php echo $rows['mobileno'];?></td> 
                <td><?php echo $rows['password'];?></td> 
            </tr> 
            <?php 
                } 
             ?> 
        </table> 
    </center>

</body>
</html>
