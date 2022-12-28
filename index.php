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
            margin: 0;
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
            margin-right: 32px;
            padding-top: 150px;
            height: 100vh;
        }

        .menu a {
            display: block;
            text-decoration: none;
            color: white;
            padding: 8px;
            display: flex;
            align-items: center;


        }

        .menu img {
            margin-right: 8px;
        }

        .menu a:hover {
            background-color: rgba(255, 255, 255, 0.1);

        }

        .content {
            width: 80%;
            margin-top: 120px;
            margin-right: 32px;
            background-color: white;
            border-radius: 8px;
            padding: 8px;
            box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.1);


        }

        .menubar {
            background-color: white;
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            height: 80px;
            box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.1);
            padding-left: 50px;
            display: flex;
            justify-content: space-between;


        }

        .avatar{
            border-radius: 100%;
            background-color: yellowgreen;
            padding: 16px;
            width: 24px;
            height: 24px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-right: 8px;

        }

        .myname{
            display: flex;
            margin-right: 50px;
            align-items: center;
        }

    </style>

    <!--End CSS Internal-->

</head>
<body>

<div class="menubar">
        <h1>My Contact Book</h1>

            <div class="myname">
               <div class="avatar">Z</div> Zlatko Jankovski
            </div>

</div>
    <div class="main">
    <!--Start Navigation-->
    <div class="menu">
        <a href="index.php?page=start"><img src="img/home.svg" alt="home button"> Start</a> 
        <a href="index.php?page=aboutus"><img src="img/aboutus.svg" alt="aboutus button">AboutUs</a> 
        <a href="index.php?page=products"><img src="img/products.svg" alt="products button">Products</a> 
        <a href="index.php?page=contacts"><img src="img/contacts.svg" alt="contacts button">Contacts</a> 
        <a href="index.php?page=addcontact"><img src="img/addcontact.svg" alt="addcontact button">Add Contact</a> 
        <a href="index.php?page=legal"><img src="img/imprint.svg" alt="imprint button">Imprint</a>
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


            echo "

            <div>
                add new contact
            </div>

            <form action='?page=contacts' method='POST'>
            <div>
                <input placeholder='Enter your Name' name='name'>
            </div>

            <div>
                <input placeholder='Phonenumber' name='phone'>
            </div>

            <button type='submit'>Send</button>

            </form>
            ";

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