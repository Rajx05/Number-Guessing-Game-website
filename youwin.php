<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>You Win</title>
</head>
<body>
    <div>
        <center>
            <h1>Congrats! You Guessed the number right <br><?php echo "The number was {$_COOKIE["number"]}" ."<br>You took {$_COOKIE["attempt"]} attempts"; ?></h1>
            <button onclick="window.location.href='index.php'">Restart</button>
            <audio src="youwin.mp3" autoplay="on"></audio>

            <?php 
            setcookie("number",null);
            setcookie("attempt",0);
            ?>

            
            
            <hr>
            <embed src ="https://media.giphy.com/media/sWEUITjh864uZyaiIs/giphy.gif?cid=790b76118ry45vuwz9npfiw1mkdfmd3m4ecdrltg0s8bk7ot&ep=v1_gifs_search&rid=giphy.gif&ct=g"></embed>
            <br>
            <br>
            <br>
            <br>
            <br>
            <h2>Our Sponsor</h2>
            <embed src="https://media.giphy.com/media/kaJy24UMEXmXwItgql/giphy.gif?cid=790b7611wurgyodvkqkool241v9eh9ldm3c11xzsmbwg5d3k&ep=v1_gifs_search&rid=giphy.gif&ct=g" >
            <h3>Vimal elaichi daane daane me kesar ka dum <br> BOLO ZUBAAN KESARI! UWU</h3>
        </center>
        
        
    </div>
</body>
</html>