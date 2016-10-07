<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Webinfo;

/**
 * WebinfoSearch represents the model behind the search form about `common\models\Webinfo`.
 */
class WebinfoSearch extends Webinfo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['web_name', 'web_logo', 'record_id', 'web_phone', 'web_mail', 'web_address'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Webinfo::find();

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
        ]);

        $query->andFilterWhere(['like', 'web_name', $this->web_name])
            ->andFilterWhere(['like', 'web_logo', $this->web_logo])
            ->andFilterWhere(['like', 'record_id', $this->record_id])
            ->andFilterWhere(['like', 'web_phone', $this->web_phone])
            ->andFilterWhere(['like', 'web_mail', $this->web_mail])
            ->andFilterWhere(['like', 'web_address', $this->web_address]);

        return $dataProvider;
    }
}
