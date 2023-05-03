<?php 
$paragraph = $_GET['paragraph'];
$badWord = $_GET['badWord'];
$censuredParagraph = str_replace($badWord, '***', $paragraph);
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
                echo $paragraph. '. Numero di caratteri nel paragrafo: '.strlen($paragraph);
            ?>
        </p>
        <p>
            <?php 
                echo $censuredParagraph. '. Numero di caratteri nel paragrafo: '.strlen($censuredParagraph);
            ?>
        </p>
    </div>
</body>
</html>