<?php

namespace app\modules\admin\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Product;
use app\modules\admin\models\Category;

/**
 * ProductSearch represents the model behind the search form about `app\modules\admin\models\Product`.
 */
class ProductSearch extends Product
{
    public function rules()
    {
        return [
            [['id', 'category_id', 'cur', 'active'], 'integer'],
            [['sku', 'vendor', 'title', 'quantity', 'description', 'sale', 'way'], 'safe'],
            [['price'], 'number'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Product::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'category_id' => $this->getChilds($this->category_id ? $this->category_id : 0),
            'price' => $this->price,
            'cur' => $this->cur,
            'active' => $this->active,
        ]);

        $query->andFilterWhere(['like', 'sku', $this->sku])
            ->andFilterWhere(['like', 'vendor', $this->vendor])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'quantity', $this->quantity])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'sale', $this->sale])
            ->andFilterWhere(['like', 'way', $this->way]);

        return $dataProvider;
    }

    protected function getChilds($id){
        static $childs_array = [];
        array_push($childs_array, $id);
        $models = Category::find()->where(['pid' => $id])->all();
        foreach($models as $model){
            if(isset($model->id)) {
                    array_push($childs_array, $model->id);
                   $this->getChilds($model->id);
            }
        }
       
        return $childs_array;

    }
}
