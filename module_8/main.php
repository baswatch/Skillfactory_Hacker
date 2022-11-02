<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Приветствие </title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    
    <div id="page">

        <div class="header">     
               <?php include 'logo.inc.php' ?>         
               <?php include 'menu.inc.php' ?>	   
        </div>       
     
        <div id="main">
         


            <div>


                    <h2>
                    <br>
                     Меня зовут
                    <?php echo $name, ' ', $surname . '<br>';
                          echo 'Возраст', ' ', $age,  '<br>';
                          echo 'город', ' ', $city; ?>
                    <br>
                    </h2>

                    <h1>
                     <?php  echo $p  ?>
                    <br>
                    <br>
                    <br>
                    <br>
                     </h1>

            </div>




        </div>

            <?php include 'footer.inc.php' ?>

    </div>


</body>
</html>
