<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;

class FchFichaRemissivaSearch extends FchFichaRemissiva
{
    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = FchFichaRemissiva::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'assinatura' => $this->assinatura,
            'nome_completo' => $this->nome_completo,
            'nome_mae' => $this->nome_mae,
            'data_nascimento' => $this->data_nascimento,
        ]);
                
        return $dataProvider;
    }
}
?>