<?php

namespace app\modules\admin\models;

use Yii;
use app\modules\admin\models\Category;
/**
 * This is the model class for table "category".
 *
 * @property integer $id
 * @property integer $pid
 * @property string $title
 * @property integer $order_id
 * @property integer $active
 */
class Category extends \yii\db\ActiveRecord
{
    public function getCategorytitle(){
        return $this->hasOne(self::className(),['id' => 'pid']);
    }
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pid', 'title'], 'required'],
            [['pid','order_id','active'], 'integer'],
            [['title'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'pid' => 'Родительская категория',
            'title' => 'Название',
            'order_id' => 'Порядок',
            'active' => 'Активная категория'
        ];
    }
}
