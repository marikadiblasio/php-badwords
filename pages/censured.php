<?php 
$paragraph = trim($_POST['paragraph']);
$badWord = trim($_POST['badWord']);
$censure = '***';
if((isset($paragraph) && isset($badWord)) && (!empty($paragraph) && !empty($badWord))){
    $paragraph = explode(' ', $paragraph);
    $censuredParagraph = (array_map(function ($v) use ($badWord, $censure) {
            return $v === $badWord ? $censure : $v;
            }, $paragraph));
    $paragraph = implode(' ', $paragraph);
    $censuredParagraph = implode(' ', $censuredParagraph);

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
            <?php echo $paragraph;?>
        </p>
        <span>Numero di caratteri nel paragrafo: <?php echo strlen($paragraph); ?> </span>
        <p>
            <?php echo $censuredParagraph; ?>
        </p>
        <span>Numero di caratteri nel paragrafo: <?php echo strlen($paragraph); ?> </span>
    </div>
</body>
</html>