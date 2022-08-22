<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=1200px, initial-scale=1.0">
    <title>User View</title>
</head>
<body>
    <h1><?php
        foreach ($users as $object) {
            echo $object->username . "<br>";
        }
    ?></h1>
</body>
</html>