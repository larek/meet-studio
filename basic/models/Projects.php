<?php

namespace app\models;

use Yii;
use app\models\Images;
/**
 * This is the model class for table "Projects".
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property string $image
 * @property string $meta_title
 * @property string $meta_keywords
 * @property string $meta_description
 */
class Projects extends \yii\db\ActiveRecord
{
    public function getImages(){
        return $this->hasMany(Images::className(),['project_id' => 'id'])->orderBy(['timeCreated' => SORT_ASC]);
    }
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Projects';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'image'], 'required'],
            [['description', 'meta_description'], 'string'],
            [['title', 'meta_title', 'meta_keywords','image'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'image' => 'Image',
            'meta_title' => 'Meta Title',
            'meta_keywords' => 'Meta Keywords',
            'meta_description' => 'Meta Description',
        ];
    }
}
