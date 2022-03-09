<?php

$stringaOriginale = 'ciao a tutti belli e brutti !';

echo '<h1>Stringa originale:</h1>';
echo $stringaOriginale;

echo '<h2> lunghezza Stringa originale:</h2>';
echo strlen($stringaOriginale);

$badWord = $_GET['badWord'];

$stringaModificata = str_replace($badWord, '***', $stringaOriginale);

echo '<h1>Stringa modificata:</h1>';
echo $stringaModificata;

echo '<h2> lunghezza Stringa modificata:</h2>';
echo strlen($stringaModificata);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad-words</title>
</head>
<body>
<h1><?php echo $stringaModificata; ?></h1>
</body>
</html>