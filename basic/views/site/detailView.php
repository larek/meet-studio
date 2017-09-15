<?
use yii\helpers\Html;
$this->title = $product->title;

// Title row
$html = Html::beginTag('div', ['class' => 'row']);
$html.= Html::beginTag('div', ['class' => 'col-md-12']);
$html.= Html::tag('h1', $product->title);
$html.= Html::endTag('div'); // end col-md-12
$html.= Html::endTag('div'); // end row
// End Title row

// Fotorama slider & description row
$html.= Html::beginTag('div', ['class' => 'row']);
$html.= Html::beginTag('div', ['class' => 'col-md-6']);
if(isset($product->images) && count($product->images) > 0){
	$html.= Html::beginTag('div', [
							'class' => 'fotorama', 
							'data-width' => '100%', 
							'data-nav-position' => 'bottom',
							'data-nav' => 'thumbs',
							'data-allowfullscreen' => 'true']);
	foreach($product->images as $item){
		$html.= Html::img($item);
	}
	$html.= Html::endTag('div');
}
$html.= Html::endTag('div'); // end col-md-6
$html.= Html::beginTag('div', ['class' => 'col-md-6']);
if(isset($product->description)){
	 $html.= $product->description;
}
$html.= Html::endTag('div'); // end col-md-6
$html.= Html::endTag('div'); // end row


// Video row
if(isset($product->video)){
	$html.= Html::beginTag('div', ['class' => 'row']);
	$html.= Html::beginTag('div', ['class' => 'col-md-12']);
	$html.= $product->video;
	$html.= Html::beginTag('div'); // end row
	$html.= Html::beginTag('div'); // end col-md-12
}
echo $html;
?>