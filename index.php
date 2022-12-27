<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!--Start Google Fonts Ubuntu Link-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">

      <!--End Google Fonts Ubuntu Link-->

    <!--Start CSS Internal-->
    <style>
        body {
            font-family: 'Ubuntu', sans-serif;
            background-color: #EAEDF8;
        }
        .footer {
            padding: 100px;
            text-align: center;
            background-color: #343434;
            color: white;
            margin-top: 300px;
        }

        .main{
            display: flex;
        }

        .menu {
            width: 20%;
            background-color: #746CF5;
        }
        .content {
            width: 80%;
        }
    </style>
    <!--End CSS Internal-->

</head>
<body>

    <div class="main">
    <!--Start Navigation-->
    <div class="menu">
        <a href="index.php?page=start">Start</a> |
        <a href="index.php?page=aboutus">AboutUs</a> |
        <a href="index.php?page=products">Products</a> |
        <a href="index.php?page=contacts">Contacts</a> |
        <a href="index.php?page=addcontact">Add Contact</a> |
        <a href="index.php?page=legal">Imprint</a>
    </div>
    <!--End Navigation-->
    <!--Start PHP-->
    <div class="content">

        <!--End Navigation-->

        <?php

            $headline = 'Welcome';

            if($_GET['page'] == 'contacts'){
                $headline = 'Your Contacts';
            }
            if($_GET['page'] == 'addcontact'){
                $headline = 'Add Contact';
            }
            if($_GET['page'] == 'legal'){
                $headline = 'Imprint';
            }

            if($_GET['page'] == 'aboutus'){
                $headline = 'AboutUs';
            }

            if($_GET['page'] == 'products'){
                $headline = 'Products';
            }

            echo '<h1>' . $headline . '</h1>';

            if($_GET['page'] == 'contacts'){

                echo "
                
                <p>On this site is a overview of your <b>contacts</b></p>
                
                ";

            } else  if ($_GET['page'] == 'aboutus'){

                echo 'get known who we are';

            } else  if ($_GET['page'] == 'addcontact'){

                echo 'add new contact';

            } else  if ($_GET['page'] == 'products'){

                echo 'our product site';

            } else  if ($_GET['page'] == 'legal'){

                echo 'here is the Imprint of our Site';


            } else {

                echo 'you are on our start site';


            }

        ?>

    </div>
    <!--End PHP-->
    </div>
    <!--Start Footer-->        
    <div class="footer">

       (c) 2022 Developer StreetMindz.com "the pro art inc"         

    </div>
    <!--End Footer-->

</body>
</html>