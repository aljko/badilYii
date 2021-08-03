<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Clienti2;

/**
 * Clienti2Search represents the model behind the search form of `app\models\Clienti2`.
 */
class Clienti2Search extends Clienti2
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'attiva'], 'integer'],
            [['nome', 'cliente', 'insegna', 'data_inizio', 'data_fine'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Clienti2::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'data_inizio' => $this->data_inizio,
            'data_fine' => $this->data_fine,
            'attiva' => $this->attiva,
        ]);

        $query->andFilterWhere(['like', 'nome', $this->nome])
            ->andFilterWhere(['like', 'cliente', $this->cliente])
            ->andFilterWhere(['like', 'insegna', $this->insegna]);

        return $dataProvider;
    }
}
