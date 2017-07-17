<?php

namespace app\modules\admin\models;

use Yii;
use app\modules\admin\models\Category;
use app\modules\admin\models\Property;
use app\modules\admin\models\Cur;
use app\modules\admin\models\ProductImages;
/**
 * This is the model class for table "product".
 *
 * @property integer $id
 * @property string $import_id
 * @property integer $category_id
 * @property string $sku
 * @property string $vendor
 * @property string $title
 * @property string $quantity
 * @property double $price
 * @property double $mainprice
 * @property double $price_pro
 * @property integer $cur
 * @property string $description
 * @property string $size
 * @property string $sale
 * @property string $way
 * @property integer $active
 * @property integer $available
 * @property integer $new
 * @property integer $onfactory
 * @property string $photo
 */
class Product extends \yii\db\ActiveRecord
{
    public function getImages(){
        return $this->hasMany(ProductImages::className(),['pid' => 'id'])->orderBy(['main' => SORT_DESC]);
    }

    public function getImagesJSON(){
        $array = [];
        if($this->images){
            foreach($this->images as $item){
                if(count(explode("http",$item->image)) > 1){
                    $img = $item->image;
                    $thumb = $item->image;
                }else{
                    $img = "/uploads/".$item->image;
                    $thumb = "/uploads/300x200/".$item->image;
                }
                array_push($array, ["img" => $img, "thumb" => $thumb]);
            }
        }else{
            array_push($array,["img" => "https://placeholdit.imgix.net/~text?txtsize=40&txt=фото отсутствует&w=500&h=500"]);
        }
        return json_encode($array);
    }

    public function setImage($id,$image){
        $model = ProductImages::find()->where(['pid' => $id])->one();
        if(isset($model->id)){
            $model->image = $image;
            $model->save();
        }else{
            $new = new ProductImages;
            $new->pid = $id;
            $new->main = 1;
            $new->image = $image;
            $new->save();
        }
    }

    public function setProperty($id,$data = null){
        $model = Property::find()->where(['product_id' => $id])->one();
        if(!isset($model->id)){
            $new = new Property;
            if($data!=null){
                $new->width = $data['w'];
                $new->depth = $data['d'];
                $new->height = $data['h'];
            }
            $new->product_id = $id;
            $new->save();
            print_r($new->getErrors());
        }else{
          $modelProp = Property::find()->where(['product_id' => $id])->one();
          $modelProp->width = $data['w'];
          $modelProp->depth = $data['d'];
          $modelProp->height = $data['h'];
          $modelProp->save();
          print_r($modelProp->getErrors());
        }
    }

    public function getProperty(){
        return $this->hasOne(Property::className(), ['product_id' => 'id']);
    }

    public function getMainimage(){
        $model = ProductImages::find()->where(['pid' => $this->id])->andWhere(['main' => 1])->one();
        if(isset($model->id)){
            if(count(explode("http",$model->image)) > 1){
                return "//ck9dwxun.cloudimg.io/fit/300x200/cFFFFFF/".$model->image;
            }else{
                return "/uploads/300x200/".$model->image;
            }
        }else{
            return "http://placehold.it/300x200";
        }
        return $this->id;
        // $model = $this->hasOne(Images::className(),['pid' => 'id'])->orderBy(['main' => SORT_DESC]);
        // return $model->image;
        // $model->mainimage ? "/uploads/300x200/".$model->mainimage->image : 'http://placehold.it/300x200'
    }

    public function getMainImageBig(){
        $model = ProductImages::find()->where(['pid' => $this->id])->andWhere(['main' => 1])->one();
        if(isset($model->id)){
            if(count(explode("http",$model->image)) > 1){
                return $model->image;
            }else{
                return "/uploads/".$model->image;
            }
        }else{
            return "http://placehold.it/900x600";
        }
        return $this->id;
        // $model = $this->hasOne(Images::className(),['pid' => 'id'])->orderBy(['main' => SORT_DESC]);
        // return $model->image;
        // $model->mainimage ? "/uploads/300x200/".$model->mainimage->image : 'http://placehold.it/300x200'
    }

    public function getCategory(){
        return $this->hasOne(Category::className(),['id'=>'category_id']);
    }
    public function getCurency(){
        return $this->hasOne(Cur::className(),['id'=>'cur']);
    }


    public function getExchange(){

        $session = Yii::$app->session;
        $session->open();
        $professional = isset($_SESSION['user']) ? true : false;
        $session->close();

        if($professional){
            $price = $this->price_pro * $this->curency->value;
            $markup = $this->vendor=="MY HOME" ? 0 : $price*0.03;
            $rawPrice = $price + $markup;
            $sale = 0;
        }else{
            $price = $this->price * $this->curency->value;
            $markup = $this->vendor == "MY HOME" ? 0 : $price*0.03;
            $rawPrice = $price + $markup;
            $price = $this->sale > 0 ? $rawPrice - ($rawPrice*$this->sale/100) : $rawPrice;
            $sale = $this->sale;
        }

        return [
            'price' => $price == null ? null : number_format($price,0,' ',' '),
            'intPrice' => $price,
            'rawPrice' => number_format($rawPrice,0,' ',' '),
            'sale' => $sale
            ];
    }

    public function getConvert(){
        $price = $this->price * $this->curency->value;
        $markup = $price*0.03;
        $rawPrice = $price + $markup;
        $price = $this->sale > 0 ? $rawPrice - ($rawPrice*$this->sale/100) : $rawPrice;

        return [
            'price' => number_format($price,0,' ',' '),
            'intPrice' => round($price),
            'rawPrice' => number_format($rawPrice,0,' ',' '),
            'sale' => $this->sale
            ];
    }


    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            if(!$this->id){
                $model = Product::find()->orderBy(['id' => SORT_DESC])->one();
                $id = $model->id + 1;
            }else{
                $id = $this->id;
            }
            $this->url = $this->parse($this->title." ".$id);
            $mainprice = $this->convert;
            $this->mainprice = $mainprice['intPrice'];
            return true;
        }
        return false;
    }

    protected function parse($str) {
        // переводим в транслит

           $converter = array(
            'а' => 'a',   'б' => 'b',   'в' => 'v',
            'г' => 'g',   'д' => 'd',   'е' => 'e',
            'ё' => 'e',   'ж' => 'zh',  'з' => 'z',
            'и' => 'i',   'й' => 'y',   'к' => 'k',
            'л' => 'l',   'м' => 'm',   'н' => 'n',
            'о' => 'o',   'п' => 'p',   'р' => 'r',
            'с' => 's',   'т' => 't',   'у' => 'u',
            'ф' => 'f',   'х' => 'h',   'ц' => 'ts',
            'ч' => 'ch',  'ш' => 'sh',  'щ' => 'sch',
            'ь' => '\'',  'ы' => 'y',   'ъ' => '\'',
            'э' => 'e',   'ю' => 'yu',  'я' => 'ya',

            'А' => 'A',   'Б' => 'B',   'В' => 'V',
            'Г' => 'G',   'Д' => 'D',   'Е' => 'E',
            'Ё' => 'E',   'Ж' => 'Zh',  'З' => 'Z',
            'И' => 'I',   'Й' => 'Y',   'К' => 'K',
            'Л' => 'L',   'М' => 'M',   'Н' => 'N',
            'О' => 'O',   'П' => 'P',   'Р' => 'R',
            'С' => 'S',   'Т' => 'T',   'У' => 'U',
            'Ф' => 'F',   'Х' => 'H',   'Ц' => 'TS',
            'Ч' => 'Ch',  'Ш' => 'Sh',  'Щ' => 'Sch',
            'Ь' => '\'',  'Ы' => 'Y',   'Ъ' => '\'',
            'Э' => 'E',   'Ю' => 'Yu',  'Я' => 'Ya',
        );

        $str = strtr($str, $converter);
        // в нижний регистр
        $str = strtolower($str);
        // заменям все ненужное нам на "-"
        $str = preg_replace('~[^-a-z0-9_]+~u', '-', $str);
        // удаляем начальные и конечные '-'
        $str = trim($str, "-");
        return $str;
    }
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_id', 'cur', 'active','way','available','new','sale','onfactory'], 'integer'],
            [['price','price_pro','mainprice'], 'number'],
            [['cur', 'active'], 'required'],
            [['description'], 'string'],
            [['import_id','sku', 'vendor', 'title', 'quantity','size','photo'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'import_id' => 'ID импорта',
            'category_id' => 'Категория',
            'sku' => 'Артикул',
            'vendor' => 'Производитель',
            'title' => 'Название',
            'quantity' => 'Количество',
            'price' => 'Цена',
            'price_pro' => 'Цена Профессионалов',
            'cur' => 'Валюта',
            'description' => 'Описание',
            'size' => 'Размеры',
            'sale' => 'Скидка',
            'way' => 'В пути',
            'active' => 'Отображать на сайте',
            'available' => 'На складе',
            'photo' => 'Изображение',
            'new' => 'Новинки',
            'onfactory' => 'На складе фабрики'
        ];
    }
}
