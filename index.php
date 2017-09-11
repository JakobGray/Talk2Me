<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include('model/database.php');
include('model/functions.php');
$phrase = filter_input(INPUT_GET, 'phrase');
?>


<html>
    <head>
        <meta charset="UTF-8">
        <title>Talk[x]2Me</title>
    </head>
    <body>
        <form action='.' method='GET'>
            <input type='text' name='phrase' placeholder="Put your phrase here">
            <input type='submit' value='submit'>            
        </form>
        <?php
        if (isset($phrase)) {
            echo "Your phrase is: {$phrase}" . "<br>";
            $words = explode(' ', $phrase);
            foreach ($words as $word) {
                echo $word . "<br>";
            }
            $missing = check_db($words);
            if(sizeof($missing) != 0) {
                echo "I'm sorry, these words are not in my vocaulary yet: <br>";
                foreach($missing as $miss) {
                    echo "&nbsp&nbsp&nbsp&nbsp" . $miss . "<br>";
                }
            }
        }
        ?>
        <?php
//        if (count($words) == 2) {
//            $command = "python /var/www/html/Talk2Me/soundbites/combine.py $words[0] $words[1] 2>&1";
////        shell_exec($command);
//            echo shell_exec($command);
//        }
        ?>
        <audio controls>
            <source src="soundbites/phrase.wav" type="audio/wav">
            Your browser does not support the audio element.
        </audio>
    </body>
</html>

