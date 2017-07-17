<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "property".
 *
 * @property integer $id
 * @property integer $product_id
 * @property string $width
 * @property string $depth
 * @property string $height
 * @property string $diameter
 * @property string $shade
 * @property string $plinth
 * @property string $power
 */
class Property extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'property';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_id'], 'required'],
            [['product_id'], 'integer'],
            [['width', 'depth', 'height', 'diameter', 'shade', 'plinth', 'power'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'product_id' => 'Product ID',
            'width' => 'Длина (Ширина)',
            'depth' => 'Глубина',
            'height' => 'Высота',
            'diameter' => 'Диаметр',
            'shade' => 'Абажур',
            'plinth' => 'Тип цоколя',
            'power' => 'Мощность',
        ];
    }
}
