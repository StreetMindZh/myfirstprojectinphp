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

    <!--Start Bootstrap CDN CSS and JavaScript Link-->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <!--End Bootstrap CDN CSS and JavaScript Link-->

     <!--Start CSS External-->

    <link rel="stylesheet" href="css/styles.css">


    <!--End CSS External-->

</head>
<body>

    <!--Start Integrate Header PHP -->

    <?php include "includes/header.php"; ?>

    <!--End Integrate Header PHP -->




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
        $contacts = [];

        if(file_exists('contacts.txt')){
            $text = file_get_contents('contacts.txt', true);
            $contacts = json_decode($text, true);
        }else{
            $contacts = array();
        }
        

        //frage ist variable gesetzt?
        if(isset($_POST['name']) && isset($_POST['phone'])){
            echo 'Contact <b>' . $_POST['name'] . '</b> has been added';
            $newContact = [
                'name' => $_POST['name'],
                'phone' => $_POST['phone']
            ];

            array_push($contacts, $newContact);
            file_put_contents('contacts.txt', json_encode($contacts, JSON_PRETTY_PRINT));

        }


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

            foreach ($contacts as $row){
                $name = $row['name'];
                $phone = $row['phone'];

                echo "
                <div class='card'>
                    <img class='profile-picture' src='img/profile-picture.png'>
                    <b>$name</b><br>
                    $phone


                </div>
                ";
            }

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
        <?php include "includes/footer.php"; ?>

</body>
</html>