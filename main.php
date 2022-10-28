<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice </title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    
    <div class="flex-container">

        <div class="header">  
                <div class="logo">
                    <?php  echo '<img src="logo.jpg" alt="logo">'; ?>   
                    <?php  echo 'Сайт с капибарой'; ?>                    
                </div>      
        </div>       
     
        <div class="about_me">
         
          <h1>  <?php  echo $p  ?> </h1>

            <div class="data">
                <div class="myImg">
                    <?php  echo '<img src="photo.jpg" alt="Капибарка">'; ?>                    
                </div>

                <div class="fullname">
                    <p> Меня зовут 
                    <?php echo $name, ' ', $surname . '<br>'; 
                          echo 'город', ' ', $city; ?>                                      
                    </p> 
           
                    <p> Мне
                    <?php  echo $age;   ?>          
                    лет </p>
                    <p> Мы научились создавать переменные </p>
                    <p> Изучили простые операции с ними </p>
                </div>
            </div>

            <div class="knowledge">
                                   
                    <?php  include 'knowledge.inc.php'; ?>
                    <?php   echo $a, ' ', $b, ' ', $c; ?> <br>
                                       
                    <?php
                        echo $str, "<br>";
                        echo $x, ' это ', gettype($x), "<br>";
                        echo $y, ' это ', gettype($y);
                    ?>   <br>                
                     

            </div>
            <div class="operators">                   
                <?php
                    $a = 78;
                    $b = 34;
                    echo 'Пусть числа а и б равны соответственно ', $a, ' и ', $b, "<br>";
                    echo 'Тогда с помощью оператора > мы можем узнать, правда ли, что значение переменной а больше б: ';
                    echo ($a>$b), " - это соответствует истине";
                ?>   <br>                
                     

            </div>

        </div>

        <footer> Сайт делала Алина, октябрь 2022</footer>

    </div>

</body>
</html>