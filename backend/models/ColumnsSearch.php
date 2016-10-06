<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Columns;

/**
 * ColumnsSearch represents the model behind the search form about `backend\models\Columns`.
 */
class ColumnsSearch extends Columns
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'pid',  'column_sort', 'column_status', 'created_at', 'updated_at'], 'integer'],
            [['column_name', 'column_link', 'column_layout', 'column_image', 'column_content_layout'], 'safe'],
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
        $query = Columns::find()->where('id > 1');

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
            'pid' => $this->pid,
            'column_sort' => $this->column_sort,
            'column_status' => $this->column_status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'column_name', $this->column_name])
            ->andFilterWhere(['like', 'column_link', $this->column_link])
            ->andFilterWhere(['like', 'column_layout', $this->column_layout])
            ->andFilterWhere(['like', 'column_image', $this->column_image])
            ->andFilterWhere(['like', 'column_content_layout', $this->column_content_layout]);

        return $dataProvider;
    }
}
