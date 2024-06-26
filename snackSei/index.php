<!-- Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.
Create una cartella per ogni snack, nella stessa repo.
Buon lavoro a tutte e a tutti! -->

<?php
 
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
 
    // var_dump($db);

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style/style.css">
</head>
<body>

<main>

<?php

foreach ($db as $key => $names) {

    if ($key === 'teachers') {
        echo '<div class="gray">';

        foreach ($names as $name) {
            echo "<p>{$name['name']} {$name['lastname']}</p>";
        }

        echo '</div>';
    }
}

foreach ($db as $key => $names) {

    if ($key === 'pm') {
        echo '<div class="green">';

        foreach ($names as $name) {
            echo "<p>{$name['name']} {$name['lastname']}</p>";
        }

        echo '</div>';
    }
}




?>



</main>


</body>
</html>