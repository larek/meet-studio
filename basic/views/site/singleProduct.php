<?
use yii\helpers\Html;
$this->title = $model->title;

// Title row
$html = Html::beginTag('div', ['class' => 'row mt-3']);
$html.= Html::beginTag('div', ['class' => 'col-md-12']);
$html.= Html::tag('h1', $model->title);
$html.= Html::endTag('div'); // end col-md-12
$html.= Html::endTag('div'); // end row
// End Title row

// Fotorama slider & description row
$html.= Html::beginTag('div', ['class' => 'row']);
$html.= Html::beginTag('div', ['class' => 'col-md-6']);
if(isset($model->images) && count($model->images) > 0){
	$html.= Html::beginTag('div', [
							'class' => 'fotorama', 
							'data-width' => '100%', 
							'data-nav-position' => 'bottom',
							'data-nav' => 'thumbs',
							'data-allowfullscreen' => 'true']);
	foreach($model->images as $item){
		$html.= Html::img('/uploads/1000px/'.$item->image);
	}
	$html.= Html::endTag('div');
}
$html.= Html::endTag('div'); // end col-md-6
$html.= Html::beginTag('div', ['class' => 'col-md-6']);
if(isset($model->description)){
	 $html.= $model->description;
}
$html.= Html::endTag('div'); // end col-md-6
$html.= Html::endTag('div'); // end row

echo $html;
?>
