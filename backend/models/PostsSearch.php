<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Posts;

/**
 * PostsSearch represents the model behind the search form about `backend\models\Posts`.
 */
class PostsSearch extends Posts
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'post_is_top', 'post_column_id', 'post_status', 'post_sort', 'created_at', 'updated_at'], 'integer'],
            [['post_tiltle', 'post_subtitle', 'post_image', 'post_video', 'post_link', 'post_anthor', 'post_origin'], 'safe'],
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
        $query = Posts::find()->where('post_status>-1');

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
            'post_is_top' => $this->post_is_top,
            'post_column_id' => $this->post_column_id,
            'post_status' => $this->post_status,
            'post_sort' => $this->post_sort,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);
        //$query->

        $query->andFilterWhere(['like', 'post_tiltle', $this->post_tiltle])
            ->andFilterWhere(['like', 'post_subtitle', $this->post_subtitle])
            ->andFilterWhere(['like', 'post_image', $this->post_image])
            ->andFilterWhere(['like', 'post_video', $this->post_video])
            ->andFilterWhere(['like', 'post_link', $this->post_link])
            ->andFilterWhere(['like', 'post_anthor', $this->post_anthor])
            ->andFilterWhere(['like', 'post_origin', $this->post_origin]);

        return $dataProvider;
    }
}
