<?php
include "connect.php";


if(isset($_POST['but_submit'])){

    $uname = mysqli_real_escape_string($con,$_POST['txt_uname']);
    $password = mysqli_real_escape_string($con,$_POST['txt_pwd']);


    if ($uname != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from users where username='".$uname."' and password='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['uname'] = $uname;
            header('Location: ./table.php');
        }else{
            echo "Invalid username and password";
        }

    }

}
?>
<!-- <html>
    <head>
        <title>Ghugelegal Admin</title>
        <link href="style1.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <br><br><br><br><br><br><br>
        <div class="container">
            <form method="post" action="">
                <div id="div_login">
                    <h1>Login</h1>
                    <div>
                        <input type="text" class="textbox" id="txt_uname" name="txt_uname" placeholder="Username" />
                    </div>
                    <div>
                        <input type="password" class="textbox" id="txt_uname" name="txt_pwd" placeholder="Password"/>
                    </div>
                    <div>
                        <input type="submit" value="Submit" name="but_submit" id="but_submit" />
                    </div>
                </div>
            </form>
        </div>
    </body>
</html> -->
<html>
<head>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


<script src="http://mymaplist.com/js/vendor/TweenLite.min.js"></script>
<!-- This is a very simple parallax effect achieved by simple CSS 3 multiple backgrounds, made by http://twitter.com/msurguy -->
</head>

 <style type="text/css">
        body{
    background: url(images/admin_bg.jpg);
    /*background-color: #444;*/
    /*background: url(images/admin_bg.webp),url(images/admin_bg.webp),url(images/admin_bg.webp);    */
}

.vertical-offset-100{
    padding-top:250px;
    /*padding-right: 1200px;*/
}
        
    </style>

<body>


<div class="container">
    <div class="row vertical-offset-100">
        <div class="col-md-6 col-md-offset-16">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Admin sign in</h3>
                </div>
                <div class="panel-body">
                    <form method="post" action="">
                    <fieldset>
                        <div class="form-group">
                             <input class="form-control" type="text" id="txt_uname" name="txt_uname" placeholder="Username" />
                            <!-- <input class="form-control" placeholder="E-mail" name="email" type="text"> -->
                        </div>
                        <div class="form-group">
                             <input class="form-control" type="password"  id="txt_uname" name="txt_pwd" placeholder="Password"/>
                            <!-- <input class="form-control" placeholder="Password" name="password" type="password" value=""> -->
                        </div>
                        <div class="checkbox">
                            <label>
                                <input class="btn btn-lg btn-block" style="background-color: #d15555 ; color:white "type="submit" value="Submit" name="but_submit" id="but_submit" />
                                <!-- <input name="remember" type="checkbox" value="Remember Me"> Remember Me -->
                            </label>
                        </div>
                        <!-- <input class="btn btn-lg btn-block" style="background-color: #d15555 ; color:white " type="submit" value="Login"> -->
                    </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>