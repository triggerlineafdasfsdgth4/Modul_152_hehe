<?php require "GaleryController.php"?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="../js/Lazy-loading.js"></script>
</head>
<body>
<?php
    $postarray = GaleryController::getInstance()->allPosts();
    foreach ($postarray as $post):
?>
    <picture >
        <img src="../../Puctures/<?php echo $post["Bildpfad"]?>" style="width: 300px; margin-top: 5000px;" loading="lazy" onload="loadFullImage(event);" alt=">
    </picture>
<?php
endforeach;
?>

</body>
</html>