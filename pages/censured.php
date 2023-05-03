<?php 
$paragraph = trim($_GET['paragraph']);
$badWord = trim($_GET['badWord']);
if((isset($paragraph) && isset($badWord)) && (!empty($paragraph) && !empty($badWord))){
    $paragraph = " $paragraph ";
    $badWord = " $badWord ";
    $censuredParagraph = str_replace($badWord, ' *** ', $paragraph);
} else {
$paragraph = 'Non hai inserito niente';
$censuredParagraph = 'Scrivi parola da censurare';
}
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