<?php $v->layout("_theme") ?>
<div class="error">
    <h2>Oooops Erro <?= $error; ?></h2>
    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam, ad.
</div>

<?php $v->start("sidebar"); ?>
<a href="<?= url() ?>">Voltar</a>
<?php $v->end(); ?>