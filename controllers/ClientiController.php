<?php

namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\Clienti;

class ClientiController extends Controller
{
    public function actionIndex()
    {
        $query = Clienti::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

        $clienti = $query->orderBy('id')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'clienti' => $clienti,
            'pagination' => $pagination,
        ]);
    }
}