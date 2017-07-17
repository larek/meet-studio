<?
namespace app\components;

use yii;
use yii\base\Widget;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use app\modules\admin\models\Category;

class TreeViewAdmin extends Widget
{
    public $id;
    public $message;
    public $parent_id;
    public $model;
    public $guid;

    public function init()
    {
        parent::init();
        if ($this->message === null) {
            $this->message = 'Hello World';
        }
    }

    public function run()
    {
        $model = Category::find()->orderBy(['order_id' => SORT_ASC, 'title' => SORT_ASC])->all();
        $categoryArray = ArrayHelper::toArray($model, [
            'app\modules\admin\models\Category' => [
                'name' => function($model){
                    return Html::a($model->title,['index','ProductSearch[category_id]' => $model->id]);
                },
                'id' => 'id',
                'pid' => 'pid'
            ],
        ]);
        $currentCategoryId = isset($_GET['ProductSearch']['category_id']) ? $_GET['ProductSearch']['category_id'] : ''; 


        echo $this->get_tree($categoryArray, 0, $currentCategoryId);

        
    }




    protected function get_tree($tree, $pid, $currentCategoryId)
    {
        $html = '';
     
        foreach ($tree as $row)
        {
            if ($row['pid'] == $pid)
            {
                $classActive = $row['id'] == $currentCategoryId ? 'class="active"' : '';
                $html .= '<li '. $classActive . '>' . "\n";
                $html .= '    ' . $row['name'] . "\n";
                $html .= '    ' . $this->get_tree($tree, $row['id'], $currentCategoryId);
                $html .= '</li>' . "\n";
            }
        }
     
        return $html ? '<ul class="tree">' . $html . '</ul>' . "\n" : '';
    }
}
?>