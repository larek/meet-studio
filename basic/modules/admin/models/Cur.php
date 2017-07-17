<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "cur".
 *
 * @property integer $id
 * @property string $title
 * @property string $value
 */
class Cur extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cur';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['value'], 'number'],
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
            'title' => 'Title',
            'value' => 'Value',
        ];
    }
}
