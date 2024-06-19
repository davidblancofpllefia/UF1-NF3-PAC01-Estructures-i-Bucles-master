<?php
$texto = isset($_POST['texto']) ? $_POST['texto'] : '';
$fuente = isset($_POST['fuente']) ? $_POST['fuente'] : 'Arial, sans-serif';
$color = isset($_POST['color']) ? $_POST['color'] : '#000000';
$size = isset($_POST['size']) ? $_POST['size'] : '16px';
?>
<html>
<head>
<style>
    .textoCss {
        font-size: <?php echo $size; ?>;
        color: <?php echo $color; ?>;
        font-family: <?php echo $fuente; ?>;
    }
</style>
</head>
<body>
<div>
<label>
<p class="textoCss">
<?php echo htmlspecialchars($texto, ENT_QUOTES, 'UTF-8'); ?>
</p>
</label>
<br/>
</div>
</body>
</html>
