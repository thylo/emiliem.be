<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= page()->title() ?> - <?= site()->title()->html() ?></title>

    <meta name="description"
          content="<?= page()->content()->get('excerpt')->exists() ? page()->content()->get('excerpt') : site()->description() ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?= vite()->css() ?>
</head>
<body>
<?= snippet('menu') ?>