<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\Clienti2Search */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Clienti2s';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="clienti2-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <p>MVC sono fatti con il CRUD di Gii</p>
    <p>
        <?= Html::a('Create Clienti2', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nome',
            'cliente',
            'insegna',
            'data_inizio',
            'data_fine',
            'attiva',

            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
