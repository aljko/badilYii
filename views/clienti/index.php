<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Clienti</h1>
<p>MVC sono fatti "From Scratch"</p>
<ul>
<?php foreach ($clienti as $cliente): ?>
    <li>
        <?= $cliente->id ?>
        <?= $cliente->nome ?>
        <?= $cliente->insegna ?>
        <?= $cliente->data_inizio ?>
        <?= $cliente->data_fine ?>
        <?= $cliente->attiva ?>

    </li>
<?php endforeach; ?>
</ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>