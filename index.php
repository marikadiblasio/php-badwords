<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>PHP Badwords</title>
</head>
<body class="bg-info-subtle">
    <form class="container mt-5 mx-auto" action="./pages/censured.php" method="POST">
    <h1 class="display-4 text-info">PHP BadWords</h1>
        <label class="form-label mt-3" for="paragraph">Inserisci il tuo paragrafo</label>
        <textarea class="form-control w-75" type="text" name="paragraph" id="paragraph" placeholder="Inserisci qui il paragrafo"></textarea>
        <label class="form-label mt-3" for="badWord">Inserisci la parola da censurare</label>
        <input class="form-control w-25 border border-danger text-danger" type="text" name="badWord" id="badWord" placeholder="Inserisci qui la parola da censurare">
        <input class="btn mt-3 btn-info" type="submit" value="Invia">
    </form>
</body>
</html>