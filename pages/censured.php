<?php 
$paragraph = $_GET['paragraph'];
$badWord = $_GET['badWord']
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Censured</title>
</head>
<body>
    <div>
       <p>
            <?php 
                echo $paragraph. ' '.$badWord;
            ?>
        </p>
    </div>
</body>
</html>