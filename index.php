<?php
    
    
    // generate a random number btw 1-100

    if(isset($_COOKIE["number"]) && isset($_COOKIE["attempt"])){
        //echo $_COOKIE["number"];
        //echo $_COOKIE["attempt"];
    }
    else{
        //echo "cookie set";
        //echo "attempt set";
        $number = rand(0,100);
        setcookie("number",$number);
        setcookie("attempt",0);
        //echo $_COOKIE["attempt"];
    }
    
    function youwin(): void{
        
        echo "Congrats You Guessed the number right!";
        header(header: "Location: youwin.php");
        
        
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number guessing game</title>
    <audio autoplay loop>
        <source src="troll.mp3" type="audio/mpeg">
    </audio>
</head>
<body>
    <style>
        .left-troll{
            position: absolute;
            left: 150px;

        }
        .right-troll{
            position: absolute;
            right: 150px;
        }
    </style>
    <div>
        <center><h1>NUMBER GUESSING GAME</h1>
        <hr>
        <form method="post" action="index.php">
            <label><h2>Guess a number (btw 1-100):</h2></label><br>
            <input type="number" name="input" size="5" maxlength="5" min="1" max="100" ><br>
            <input type="submit" name="submit" value="Submit"> 
        </form>

        <?php
            if(isset($_POST["input"])&& $_POST["input"]!= ""){
                if($_POST["input"]>$_COOKIE["number"]){
                    echo "its too high";
                    setcookie("attempt",$_COOKIE["attempt"]+1);
                    //echo $_COOKIE["attempt"];


                }
                elseif($_POST["input"]<$_COOKIE["number"]){
                    echo "its too low";
                    setcookie("attempt",$_COOKIE["attempt"]+1);
                    
                     
                }
                if($_POST["input"]==$_COOKIE["number"]){
                    setcookie("attempt",$_COOKIE["attempt"]+1);
                    
                    youwin();
                }
                
            }
        ?>
        </center>
    </div>
    <div class="left-troll">
        <embed src="https://media.giphy.com/media/wcjtdRkYDK0sU/giphy.gif?cid=790b76117leo72w5fg0rjhsgh5bjxsio7zrzbhtlaycnw4v2&ep=v1_gifs_search&rid=giphy.gif&ct=g" >
    </div>

    <div class="right-troll">
        <embed src="https://media.giphy.com/media/wcjtdRkYDK0sU/giphy.gif?cid=790b76117leo72w5fg0rjhsgh5bjxsio7zrzbhtlaycnw4v2&ep=v1_gifs_search&rid=giphy.gif&ct=g" >
    </div>
</body>
</html>



