<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>PHP  </title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    
    <div id="page">

        <div class="header">     
               <?php include 'logo.inc.php' ?>         
               <?php include 'menu.inc.php' ?>	   
        </div>       
     
        <div id="main">
         
          <h1>  <?php  echo $p  ?> </h1>


                    <h3> При создании сайта познакомились с основами PHP и разметкой HTML. </h3>
                    <h4> Создание переменных, простые операции с ними. <br>
                    На главной странице отображен  <a href="index.php">вывод переменных </a>.<br>
                    Ниже представлена игра. </h4>

                                   
                    <?php  include 'knowledge.inc.php'; ?>
                    <?php   echo $a, ' ', $b, ' ', $c; ?> <br>
                                       



                    <h3>Игра "Угадай число"</h3>
                     <?php
                     echo '<form action="knowledge.php" method="GET">';
                     echo '<input type="text" name="a">';
                     echo '<input type="submit" value="Попробовать">';
                     echo '</form>';
                     echo '<br>';


                        if($_GET["a"] > $mass[0]){ echo 'Ваше число больше';}
                        if($_GET["a"] < $mass[0]){ echo 'Ваше число меньше';}
                        if($_GET["a"] == $mass[0]){ echo 'Поздравляю вы угадали :)';}
                     echo '<br>';
                     echo '<br>';
                    ?> 




        </div>

    <?php include 'footer.inc.php' ?>

    </div>


</body>
</html>
