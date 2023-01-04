<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>



</head>
<body>

      <!--Start Integrate Header PHP -->

      <?php include "includes/header.php"; ?>

<!--End Integrate Header PHP -->

            <!-- FORMULAR -->
            <form action="result.php" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name"><br>
                <label for="email">Email:</label>
                <input type="text" id="email" name="email"><br>
            
                <p>Geht es dir heute gut?</p>
                <input type="radio" id="ja" name="radio-mood" value="ja">
                <label for="ja">Ja</label><br>
                <input type="radio" id="nein" name="radio-mood" value="nein">
                <label for="nein">Nein</label><br><br>
            
                <p>Welche Farben hat die Schweizer Fahne?</p>
                <input type="checkbox" id="color1" name="color-red" value="rot">
                <label for="color1">Rot</label><br>
                <input type="checkbox" id="color2" name="color-yellow" value="gelb">
                <label for="color2">Gelb</label><br>
                <input type="checkbox" id="color3" name="color-blue" value="blau">
                <label for="color3">Blau</label><br>
                <input type="checkbox" id="color4" name="color-white" value="weiss">
                <label for="color4">Weiss</label><br><br>
            
                <input type="submit" value="Abschicken">
            </form>

                <!--Start Google Fonts Ubuntu Link-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">

      <!--End Google Fonts Ubuntu Link-->

        <!--Start Bootstrap CDN CSS and JavaScript Link-->
        
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

      <!--End Bootstrap CDN CSS and JavaScript Link-->

      <link rel="stylesheet" href="css/styles.css">


    <!--End CSS Internal-->
            <!-- END:FORMULAR -->
          
        <?php include "includes/footer.php"; ?>

</body>
</html>