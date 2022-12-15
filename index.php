<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Php Strong Password Generator</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center text-secondary text-black">Strong Password Generator</h1>
        <h2 class="text-center text-grey">Genera una password sicura</h2>
        <div class="form-group my-3">
            <input type="text" class="form-control" id="text" placeholder="La tua password" value="<?php ?>">
        </div>
        <form action="index.pho" class="bg-white p-3" method="GET">
            <label for="password" class="w-50">Lunghezza password:</label>
            <input class="w-25" type="number" name="lunghezza" id="password">
            <div class="pt-3">
                <button class="btn btn-primary">Invia</button>
            </div>
        </form>
    </div>
</body>
</html>