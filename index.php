<?php

$reservations = [
         [
            "name" => "Klant",
            "email" => "klant@gmail.com",
            "phone" => "06123456789",
            "time" => "12:00"
        ],
        [
            "name" => "klant1",
            "email" => "klant1@gmail.com",
            "phone" => "06123456789",
            "time" => "15:00"
        ],
        [
            "name" => "klant2",
            "email" => "klant2@gmail.com",
            "phone" => "06123456789",
            "time" => "19:00"
        ]

];



?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Amy thuiskapper</title>
</head>
<body>
    <h1>Amy's ThuisKapper</h1>

    <h2>Reserveringen scherm</h2>
    <table>
        <tr>
            <th>name</th>
            <th>email</th>
            <th>phone number</th>
            <th>time</th>
        </tr>
        <?php foreach ($reservations as $reservation): ?>
        <tr>
            <td><?= $reservation["name"] ?></td>
            <td><?= $reservation["email"] ?></td>
            <td><?= $reservation["phone"] ?></td>
            <td><?= $reservation["time"] ?></td>
        </tr>
        <?php endforeach; ?>

    </table>



</body>
</html>

