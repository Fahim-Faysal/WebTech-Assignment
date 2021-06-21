<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my website</title>
    <link rel="stylesheet" href="./style.css">
</head>


<body>
    <header id="main-header">
        <div class="container">
        <h1>my website</h1>
    </div>
</header>

    <nav id="navbar">
        <div class="container">
        <ul>
           <li><a href="">Home</a></li>
           <li><a href="">About</a></li>
            <li><a href="">Service</a></li>
            <li><a href="">Contact</a></li>
        </ul>
    </nav>
</div>

    <div id="showcase">
        <div class="container">
<h1>lorem ipsum carrots,enhanced rebates,but they do occaecat </h1>
</div>
    </div>

    <div class="container"> 
        <div id="main">
               
            <h2>Quiz App</h2>
             <form action="index.php" method = "get">
        1.<label for="num1">What is the capital city of Bangladesh?</label> <br>
              Dhaka <input type="radio" name = "num1" value = "Dhaka" required><br>
              Rangpur <input type="radio" name = "num1" value = "Rangpur" required><br>
              Rajshahi <input type="radio" name = "num1" value = "Rajshahi" required><br>
                 <br>
        2.<label for="num2">What is the currency of Bangladesh</label><br>
            Dollar <input type="radio" name = "num2" value = "Dollar" required><br>
            Taka <input type="radio" name = "num2" value = "Taka" required><br>
            Rupi <input type="radio" name = "num2" value = "Rupi" required><br>
            <br>

        3.<label for="num3">What is the addition of 8 + 3 ?</label><br>

           6 <input type="radio" name = "num3" value = "6" required><br>
           9 <input type="radio" name = "num3" value = "9" required><br>
           11 <input type="radio" name= "num3" value = "11" required><br>
           <br>
        4.<label for="num4">How many days in a year ?</label> <br>

          315 <input type="radio" name = "num4" value = "315" required><br>
          365  <input type="radio" name= "num4" value = "365" required><br>
          350 <input type="radio" name = "num4" value = "350" required><br>
           <br>
        5. <label for="num5">What is the capital of Australia</label><br>

          Canberra <input type="radio" name = "num5" value = "Canberra" required><br>
          Melbourne <input type="radio" name= "num5" value = "Melbourne" required><br>
          Perth    <input type="radio" name = "num5" value = "Perth" required><br>
         <br>
         <input type="submit">
             </form>
        </div>
       
            <div id="sidebar">
            <h1>Your Result</h1>
            <?php

            $counter = 0;

            if(isset($_GET["num1"])) {
                if($_GET["num1"] == "Dhaka") {
                    $counter++;
                }

                if($_GET["num2"] == "Taka") {
                    $counter++;
                }

                if($_GET["num3"] == "11") {
                    $counter++;
                }
                if($_GET["num4"] == "365") {
                    $counter++;
                }
                if($_GET["num5"] == "Canberra") {
                    $counter++;
                }
             
            

                echo "<h2>Total Score is : $counter  </h2>";
            }
           

              
              ?>
            </div>
     
   
    </div>
  
   
    <footer id="main-footer">
       <p>copyright @ 2017 My website</p>
    </footer>

</body>
</html>