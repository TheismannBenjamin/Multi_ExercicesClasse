<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Benjamin Theismann</title>
</head>
<body>
        <p>------------------------etape 0---------------------------</p>
        <p>Hello World</p>
        <p>------------------------etape 1---------------------------</p>
        <?php for ($i = 1; $i <= 10; $i++) : ?>
            <p>Le nombre vaut <?=$i ?></p>
        <?php endfor ?>
        <p>------------------------etape 2---------------------------</p>
        <?php for ($i = 1; $i <= 10; $i++) : ?>
            <?php if($i == 3) : ?>
                <p>Le nombre vaut <?=$i ?></p>
            <?php endif ?>
        <?php endfor ?>
        <p>------------------------etape 3---------------------------</p>
        <?php for ($i = 1; $i <= 10; $i++) : ?>
            <?php if(3< $i && $i < 8) : ?>
                <p>Le nombre vaut <?=$i ?></p>
            <?php endif ?>
        <?php endfor ?>
        <p>------------------------etape 4---------------------------</p>
        <?php
        $a = -5;
        $b = 10;
        ?>
        <p>la valeur absolue de <?=$a ?> vaut  <?=abs($a) ?> </p>
        <p>la valeur absolue de <?=$b ?> vaut  <?=abs($b) ?> </p>
</body>
</html>