<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Clienti2Search */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="clienti2-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nome') ?>

    <?= $form->field($model, 'cliente') ?>

    <?= $form->field($model, 'insegna') ?>

    <?= $form->field($model, 'data_inizio') ?>

    <?php // echo $form->field($model, 'data_fine') ?>

    <?php // echo $form->field($model, 'attiva') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
