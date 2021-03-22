<?php
$name = "Yroslav Mihailov";
$arr = [
    'Cat' => 1,
    'Dog' => 2,
    'Lynx' => 3,
    'Owl' => 4,
    'Wolf' => 5,
    'Crocodile' => 6,
    'Beaver' => 7,
    'Weasel' => 8,
    'Raccoon' => 9,
    'Giraffe' => 10
] ;
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="text">
    <p><?= $name ?></p>
</div>
<?php foreach ( $arr as $b => $v) { ?>
    <div><?php echo "[$b] =>$v.\n"; ?></div>

<?php } ?>
</body>
</html>