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
            <button onclick="window.location.href='index.php'" >Restart</button>
            <audio src="youwin.mp3" autoplay="on"></audio>

            <?php 
            setcookie("number",null);
            setcookie("attempt",0);
            ?>

            
            
            <hr>
            <div class="tenor-gif-embed" data-postid="15852111" data-share-method="host" data-aspect-ratio="0.79375" data-width="20%">
                <a href="https://tenor.com/view/epic-sax-guy-sax-dance-dance-off-celebrate-gif-15852111">
                    Epic Sax Guy Sax GIF
                </a>
                <a href="https://tenor.com/search/epic+sax+guy-gifs"></a></div> <script type="text/javascript" async src="https://tenor.com/embed.js"></script>
                <h2>You Win!</h2>

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