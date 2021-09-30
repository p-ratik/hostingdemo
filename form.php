<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <style>
        .divclass
        {
            border: 1px solid;
            width: 45%;
            margin: auto;
            margin-top: 2%;
        }
        .menu
        {
            margin-left: 2rem;
        }
        .heading
        {
            margin-top: 0;
            text-align: center;
            background-color: burlywood;
            padding-bottom: 6px;
            border-bottom: 1px solid;
        }
        .sub:hover
        {
            box-shadow: 4px 5px 6px #504b4b;
        }
        .ipwidth
        {
            height: 7%;
        }
        .myForm1:hover
        {
            box-shadow: 11px 11px 14px #565353;
        }

    </style>
</head>
<body>
    <div class="divclass">
        <form class="myForm1" action="./index1.php" name="myForm" method="POST" style="padding: 0 0 21px 0;">
            <h1 class="heading">Information</h1>

            <div class="row" style="padding-top: 3%;">
                <div class="col-lg-4">
                    <span class="menu">First Name :</span><br><br>
                    <span class="menu">Last Name :</span><br><br>
                    <span class="menu">Address :</span><br><br>
                    <div class="row" style="margin-bottom: -25px;">
                        <span class="menu" style="margin-top: 35%;">Email :</span><br><br>
                    </div>
                    <span class="menu">Birthdate :</span><br><br>
                    <span class="menu">Gender:</span><br><br>
                    <span class="menu">Mobile No :</span><br><br>
                    <span class="menu">Password :</span><br><br>
                   
                </div>
                <div class="col-lg-8">
                    <input class="ipwidth" type="text" name="fname" placeholder="First name"  method="post" required><br><br>
                    <input class="ipwidth" type="text" name="lname" placeholder="Last name" required><br><br>
                    <textarea type="text" placeholder="Address" name="address"  cols="30" rows="2"></textarea><br><br>
                    <input class="ipwidth" type="text" name="email" type="email" placeholder="Email"><br><br>
                    <input type="date" name="birthdate" required><br><br>
                    <input type="radio" id="male" name="gender" value="Male" required><span> Male</span>&nbsp;
                    <input type="radio" id="female" name="gender" value="Female" required ><span> Female</span><br><br>
                    <select name="cntrycode" style="height: 7%;" >
                        <option value="+91">+91</option>
                        <option value="+92">+92</option>
                        <option value="+93">+93</option>
                        <option value="+94">+94</option>
                        <option value="+95">+95</option>
                    </select>
                    <input class="ipwidth" type="text" name="mbno"  placeholder="Mobile No" pattern="[0-9]{10}" title="Please Enter 10 digit Mobile No "><br>
                    <input class="ipwidth" type="password" name="password" id="pass1" style="margin-top: 3%;" placeholder="Password" required><br>
                </div>
            </div>
            <input class="btn btn-success sub" style="margin-left: 5%; height: 37px;" type="submit" value="Submit" >

        </form>
    </div>
</body>
</html>