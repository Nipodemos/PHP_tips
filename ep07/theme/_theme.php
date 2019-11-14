<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="<?= url("/theme/style.css") ?>">
</head>

<body>
    <nav class="main_nav">
        <?php if ($v->section("sidebar")) : ?>
            <?= $v->section("sidebar") ?>

        <?php else : ?>
            <a href="<?= url(); ?>">Home</a>
            <a href="<?= url("contato"); ?>">Contato</a>
            <a href="<?= url("teste"); ?>">Teste</a>

        <?php endif; ?>
    </nav>
    <main class="main_content">
        <?= $v->section("content"); ?>
    </main>

    <footer class="main_footer">
        <?= SITE ?> Todos os direitos reservados
    </footer>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <?= $v->section("scripts"); ?>
</body>

</html>