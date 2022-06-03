<!DOCTYPE html>
<html lang="en">

<head>
    <!-- title -->
    <link rel="icon" href="./img/contact_book_contacts.ico" type="image/icon type">
    <title>Contact</title>
    <!-- meta data  -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- icon and css file link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- for php file -->
    <style><?php include './css/navbar.css'; ?></style>
    <style><?php include './css/contact.css'; ?></style>

</head>

<body>
    <!-- navbar  -->
    <div class="navbar">
        <a href="index.php"><i class="fa fa-fw fa-home"></i> Home</a>
        <a href="shell.php"><i class="fa fa-fw fa-terminal"></i>Shell</a>
        <a class="active" href="contact.php"><i class="fa fa-fw fa-envelope"></i> Contact</a>
    </div>

    <!-- main body -->
    <div class="container">
        <div style="text-align:center">
            <h2>Contact Us</h2>
        </div>
        <div class="row">
                <div class="column">
                    <iframe width="800" height="450" frameborder="0" src="https://www.bing.com/maps/embed?h=800&w=800&cp=20.60985069453079~72.93036238230411&lvl=17.94697358750939&typ=d&sty=r&src=SHELL&FORM=MBEDV8" scrolling="no">
                    </iframe>
                </div>

                <div class="column col-1">
                    <form action="/action_page.php">
                            <label for="fname">First Name</label>
                            <input type="text" id="fname" name="firstname" placeholder="Your name..">
                            <label for="lname">Last Name</label>
                            <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                            <label for="gander">Gander</label>
                            <select id="gander" name="gander">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                            </select>
                            <label for="subject">Subject</label>
                            <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
                            <input type="submit" value="Submit" class="btn">
                    </form>
                </div>
        </div>
    </div>
    
    <!-- footer  -->
    <div class="footer">
        <span>Copyright 2022 by Refsnes Data. All Rights Reserved.</span>
    </div>
</body>

</html>