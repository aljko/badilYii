<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Clienti2 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="clienti2-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cliente')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'insegna')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'data_inizio')->textInput() ?>

    <?= $form->field($model, 'data_fine')->textInput() ?>

    <?= $form->field($model, 'attiva')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
