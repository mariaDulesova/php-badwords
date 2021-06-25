<?php
    $randomText = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, nobis. Praesentium voluptates eum molestias quia, ipsum harum iste ex dicta et iusto aperiam cupiditate itaque rem earum aut inventore accusantium!";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Random Text</h1>
    <p><?php echo $randomText; ?></p>

    <h2>Random Text legth</h2>
    <p><?php echo strlen($randomText); ?> characters</p>

    
</body>
</html>