<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "clienti".
 *
 * @property int $id
 * @property string $nome
 * @property string $cliente
 * @property string $insegna
 * @property string|null $data_inizio
 * @property string|null $data_fine
 * @property int|null $attiva
 */
class Clienti2 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'clienti';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'cliente', 'insegna'], 'required'],
            [['data_inizio', 'data_fine'], 'safe'],
            [['attiva'], 'integer'],
            [['nome', 'cliente', 'insegna'], 'string', 'max' => 52],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'cliente' => 'Cliente',
            'insegna' => 'Insegna',
            'data_inizio' => 'Data Inizio',
            'data_fine' => 'Data Fine',
            'attiva' => 'Attiva',
        ];
    }
}
