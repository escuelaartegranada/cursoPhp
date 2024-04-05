<?php   
    const URL = "https://jsonplaceholder.typicode.com/posts";
    $resultados = file_get_contents(URL);
    $resultados = json_decode($resultados, true);
    // echo "<pre>";
    // var_dump($resultados);
    // echo "</pre>";

?>









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css"
/>
</head>
<body>

<ul>
    <?php foreach ($resultados as $clave => $valor) : ?>
    <li><?= $valor['title'] ?> </li>
    <?php endforeach ;?>

</ul>


</body>
</html>