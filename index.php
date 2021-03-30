<?php
require_once 'func/duck.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    svg {
        transform: rotate(180deg);
    }
    </style>
    <script>
        function kill(id) {
            alert("Auvajs " + id);
        }
        </script>
</head>
<body>
<?php
define('DUCKS_COUNT', 9);
function rand_color() {
    return sprintf('#%06X', mt_rand(0, 0xFFFFFF));
}
for ($i=0; $i < DUCKS_COUNT; $i++) { 

    $size = rand(20, 150);
    $pLeft = rand(0, 95);
    $pTop = rand(0, 95);
    $color = rand_color();

    drawDuck($size, $pLeft, $pTop, $color, "duck-".$i); 
}
?>
</body>
</html>