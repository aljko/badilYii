<?php
use yii\helpers\Html;
?>
<p>Vous avez entré</p>
<ul>
    <li><label>Nom</label>: <?= Html::encode($model->nom) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->email) ?></li>
</ul>