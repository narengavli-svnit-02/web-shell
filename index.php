<!DOCTYPE html>
<html lang="en">

<head>
    <!-- title -->
    <link rel="icon" href="./img/title_logo.png" type="image/icon type">
    <title>Fetch Data</title>
    <!-- meta data  -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- icon and css file link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style><?php include './css/index.css'; ?></style>
    <style><?php include './css/navbar.css'; ?></style>

</head>

<body>
    <!-- navbar  -->
    <div class="navbar">
        <a class="active" href="index.php"><i class="fa fa-fw fa-home"></i> Home</a>
        <a href="shell.php"><i class="fa fa-fw fa-terminal"></i> Shell</a>
        <a href="contact.php"><i class="fa fa-fw fa-envelope"></i> Contact</a>
    </div>

    <!-- main body -->
    <div class="main">
        <div class="row">
            <div class="col-1">
                <div class="con">
                    <?php
                        echo "<h3>SYSTEM INFORMATION</h3>";
                        $system_info = `systeminfo`;
                        echo "<pre>$system_info</pre>";
                    ?>
                </div>
            </div>
            <div class="col-2">
                <div class="con">
                    <?php
                        echo "<h3>IP INFORMATION</h3>";
                        $op = `ipconfig`;
                        echo "<pre>$op</pre>";
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- footer  -->
    <div class="footer">
        <span>Copyright 2022 by Refsnes Data. All Rights Reserved.</span>
    </div>
</body>

</html>