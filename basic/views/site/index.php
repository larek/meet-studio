<?php
use yii\helpers\Html;
/* @var $this yii\web\View */
$this->title = 'Студия дизайна интерьера и мебели Юлии Сазоновой';
$this->registerJsFile('/bower_components/fotorama/fotorama.js',['depends' => [\yii\web\JqueryAsset::className()]]);
$this->registerCssFile('/bower_components/fotorama/fotorama.css');
$this->registerJs('
		$(".fotorama").fotorama({
			width: "100%",
			ratio: 2/1,
			data:[
				{img: "/images/meet-slider1-background.png", fit: "cover",html: "<img src=\"/images/meet-slider1-image1-reverse.png\" style=\"height:100%\"><img src=\"/images/meet-slider1-image2.png\" style=\"position: absolute;top: -40%;height: 140%;right: 0;\"><div class=\"\" style=\"position: absolute;top: 100px;width: 88%;text-align: center;font-size: 30px;\">ALABAMA / Стол*</div><div style=\"position: absolute;top: 200px;width: 50%;text-align: center;left: 19%;font-size:19px\">Современный, утонченный и изящный стол. Подходитдля классическогои современного интерьера. Идеально в писывается в любое пространство</div><div style=\"bottom: 15px;position: absolute;width: 50%;text-align: center;left: 19%;\">Это изделие ЛИДЕР ПРОДАЖ</div>"},
			],
		});
	');

?>
	
	<div id="row" class="first-slide home_mr-top">
		<!-- Flex Slide-->

<link rel="stylesheet" href="https://www.brabbu.com/en/js/FlexSlider/flexslider.css" type="text/css" media="screen" /> 


<div class="fotorama">

</div>

	</div>
	<div id="row" class="home_mr-top">
		<div class="second-slide align-left mr-right-2">
			<div class="flexslider">
				<ul class="slides">
					<li class="box-hover">
				    	<img src="/images/meet-finish.png" />
						<div class="hover-homepage background-color-hover invisible">
							<span class="name">
								<a >
									НАШИ ФИНИШИ
								</a>
							</span>
							
						</div>
					
				    </li>
					<li class="box-hover">
				    	<img src="https://www.brabbu.com/img/homepage/second-slide/ibis-armchair-aruna-wall-light-brabbu.jpg" />
						<div class="hover-homepage hm-extra background-color-hover invisible">
							<span class="name">
								<a href="/en/upholstery/ibis-armchair/">
									ibis | armchair
								</a>
							</span>
							<span class="name">
								<a href="/en/lighting/aruna-wall-light/">
									aruna | wall light
								</a>
							</span>
						</div>
						<div class="hover-homepage background-color-hover invisible">
							<span class="name">
								<a href="/en/casegoods/kayan-mirror/">
									kayan | mirror
								</a>
							</span>
<div class="share">
								<div class="share-facebook">
									<a href="http://www.facebook.com/share.php?u=http://brabbu.com/en/upholstery/ibis-armchair/" title="BRABBU" target="_blank" rel="nofollow" style="float:left;">
										<img alt="Facebook" title="Facebook" src="https://www.brabbu.com/img/homepage/product-social/facebook-homepage.png" onmouseover="this.src='/img/homepage/product-social/facebook-homepage-hover.png'" onmouseout="this.src='/img/homepage/product-social/facebook-homepage.png'">
									</a>
								</div>
								<div class="share-twitter">
									<a href="http://twitter.com/home?status=IBIS Armchair by @BRABBU http://goo.gl/F7Q0hN" title="BRABBU" target="_blank" rel="nofollow" style="float:left;">
										<img alt="TwitThis" src="https://www.brabbu.com/img/homepage/product-social/twitter-homepage.png" onmouseover="this.src='/img/homepage/product-social/twitter-homepage-hover.png'" onmouseout="this.src='/img/homepage/product-social/twitter-homepage.png'">
									</a>
								</div>
								<div id="pinterest-btn" class="share-pinterest">
									<a href="http://pinterest.com/pin/create/button/?url=http://brabbu.com/en/upholstery/ibis-armchair/&media=http://brabbu.com/img/homepage/second-slide/ibis-armchair-aruna-wall-light-brabbu.jpg&description=IBIS Armchair by @BRABBU http://goo.gl/F7Q0hN" class="pin-it-button" target="_blank" count-layout="horizontal">
									    <img border="0" src="https://www.brabbu.com/img/homepage/product-social/pinterest-homepage.png" title="Pin It" />
									</a>
								</div>
							</div>
						</div>
				    </li>

				    <li class="box-hover">
				    	<img src="https://www.brabbu.com/img/homepage/second-slide/andes-armchair-upholstery-brabbu.jpg" />
						<div class="hover-homepage hm-extra background-color-hover invisible">
							<span class="name">
								<a href="/en/lighting/kendo-floor-light/">
									kendo | floor light
								</a>
							</span>
						</div>
						<div class="hover-homepage background-color-hover invisible">
							<span class="name">
								<a href="/en/upholstery/andes-armchair/">
									andes | armchair
								</a>
							</span>
							<span class="name">
								<a href="/en/rugs/macushi-rug/">
									macushi | rug
								</a>
							</span>
							<div class="share">
								<div class="share-facebook">
									<a href="http://www.facebook.com/share.php?u=http://brabbu.com/en/upholstery/andes-armchair/" title="BRABBU" target="_blank" rel="nofollow" style="float:left;">
										<img alt="Facebook" title="Facebook" src="https://www.brabbu.com/img/homepage/product-social/facebook-homepage.png" onmouseover="this.src='/img/homepage/product-social/facebook-homepage-hover.png'" onmouseout="this.src='/img/homepage/product-social/facebook-homepage.png'">
									</a>
								</div>
								<div class="share-twitter">
									<a href="http://twitter.com/home?status=ANDES Armchair by @BRABBU http://goo.gl/8FDkBi" title="BRABBU" target="_blank" rel="nofollow" style="float:left;">
										<img alt="TwitThis" src="https://www.brabbu.com/img/homepage/product-social/twitter-homepage.png" onmouseover="this.src='/img/homepage/product-social/twitter-homepage-hover.png'" onmouseout="this.src='/img/homepage/product-social/twitter-homepage.png'">
									</a>
								</div>
								<div id="pinterest-btn" class="share-pinterest">
									<a href="http://pinterest.com/pin/create/button/?url=http://brabbu.com/en/&media=http://brabbu.com/img/homepage/second-slide/andes-armchair-upholstery-brabbu.jpg&description=ANDES Armchair by @BRABBU http://goo.gl/8FDkBi" class="pin-it-button" target="_blank" count-layout="horizontal">
									    <img border="0" src="https://www.brabbu.com/img/homepage/product-social/pinterest-homepage.png" title="Pin It" />
									</a>
								</div>
							</div>
						</div>
				    </li>

				    <li class="box-hover">
				    	<img src="https://www.brabbu.com/img/homepage/second-slide/koi-brass-console-table-contemporary-design-by-brabbu.jpg" />
						<div class="hover-homepage hm-extra background-color-hover invisible">
							<span class="name">
								<a href="/en/lighting/niku-floor-light/">
									niku | floor light
								</a>
							</span>
						</div>
						<div class="hover-homepage background-color-hover invisible">
							<span class="name">
								<a href="/en/casegoods/koi-console/">
									koi | console
								</a>
							</span>
							<span class="name">
								<a href="/en/rugs/bemba-rug/">
									bemba | rug
								</a>
							</span>
							<div class="share">
								<div class="share-facebook">
									<a href="http://www.facebook.com/share.php?u=http://brabbu.com/en/casegoods/koi-console/" title="BRABBU" target="_blank" rel="nofollow" style="float:left;">
										<img alt="Facebook" title="Facebook" src="https://www.brabbu.com/img/homepage/product-social/facebook-homepage.png" onmouseover="this.src='/img/homepage/product-social/facebook-homepage-hover.png'" onmouseout="this.src='/img/homepage/product-social/facebook-homepage.png'">
									</a>
								</div>
								<div class="share-twitter">
									<a href="http://twitter.com/home?status=KOI Console by @BRABBU http://goo.gl/8FDkBi" title="BRABBU" target="_blank" rel="nofollow" style="float:left;">
										<img alt="TwitThis" src="https://www.brabbu.com/img/homepage/product-social/twitter-homepage.png" onmouseover="this.src='/img/homepage/product-social/twitter-homepage-hover.png'" onmouseout="this.src='/img/homepage/product-social/twitter-homepage.png'">
									</a>
								</div>
								<div id="pinterest-btn" class="share-pinterest">
									<a href="http://pinterest.com/pin/create/button/?url=http://brabbu.com/en/&media=http://brabbu.com/img/homepage/second-slide/koi-brass-console-table-contemporary-design-by-brabbu.jpg&description=KOI Console by @BRABBU http://goo.gl/8FDkBi" class="pin-it-button" target="_blank" count-layout="horizontal">
									    <img border="0" src="https://www.brabbu.com/img/homepage/product-social/pinterest-homepage.png" title="Pin It" />
									</a>
								</div>
							</div>
						</div>
				    </li>
				    <li class="box-hover">
				    	<img src="https://www.brabbu.com/img/homepage/second-slide/inca-armchair-niku-floor-light-brabbu-3.jpg" />
						<div class="hover-homepage hm-extra background-color-hover invisible">
							<span class="name">
								<a href="/en/lighting/niku-floor-light/">
									niku | floor light
								</a>
							</span>
						</div>
						<div class="hover-homepage background-color-hover invisible">
							<span class="name">
								<a href="/en/upholstery/inca-armchair/">
									inca | armchair
								</a>
							</span>
							<span class="name">
								<a href="/en/casegoods/bryce-side-table/">
									bryce | side table
								</a>
							</span>
							<div class="share">
								<div class="share-facebook">
									<a href="http://www.facebook.com/share.php?u=http://brabbu.com/en/casegoods/koi-console/" title="BRABBU" target="_blank" rel="nofollow" style="float:left;">
										<img alt="Facebook" title="Facebook" src="https://www.brabbu.com/img/homepage/product-social/facebook-homepage.png" onmouseover="this.src='/img/homepage/product-social/facebook-homepage-hover.png'" onmouseout="this.src='/img/homepage/product-social/facebook-homepage.png'">
									</a>
								</div>
								<div class="share-twitter">
									<a href="http://twitter.com/home?status=KOI Console by @BRABBU http://goo.gl/8FDkBi" title="BRABBU" target="_blank" rel="nofollow" style="float:left;">
										<img alt="TwitThis" src="https://www.brabbu.com/img/homepage/product-social/twitter-homepage.png" onmouseover="this.src='/img/homepage/product-social/twitter-homepage-hover.png'" onmouseout="this.src='/img/homepage/product-social/twitter-homepage.png'">
									</a>
								</div>
								<div id="pinterest-btn" class="share-pinterest">
									<a href="http://pinterest.com/pin/create/button/?url=http://brabbu.com/en/&media=http://brabbu.com/img/homepage/second-slide/inca-armchair-niku-floor-light-brabbu-3.jpg&description=KOI Console by @BRABBU http://goo.gl/8FDkBi" class="pin-it-button" target="_blank" count-layout="horizontal">
									    <img border="0" src="https://www.brabbu.com/img/homepage/product-social/pinterest-homepage.png" title="Pin It" />
									</a>
								</div>
							</div>
						</div>
				    </li>
				</ul>
			</div>
		</div>
		<div class="second-slide align-right">
			<div class="flexslider">
				<ul class="slides">
					<li class="box-hover">
						<a href="/en/lighting/horus-suspension-light-2/">
							<img src="https://placeholdit.imgix.net/~text?txtsize=23&bg=f0ede8&txtclr=000000&txt=%D0%91%D0%B0%D0%BD%D0%BD%D0%B5%D1%80&w=500&h=500" class="zindex_bottom"/>
						</a>
						<div class="hover-homepage background-color-hover invisible" style='display:none'>
							<span class="name">
								<a>
									HORUS | SUSPENSION LIGHT II
								</a>
							</span>
							<div class="share">
								<div class="share-facebook">
									<a href="http://www.facebook.com/share.php?u=http://brabbu.com/en/lighting/horus-suspension-light-2/" title="BRABBU" target="_blank" rel="nofollow" style="float:left;">
										<img alt="Facebook" title="Facebook" src="https://www.brabbu.com/img/homepage/product-social/facebook-homepage.png" onmouseover="this.src='/img/homepage/product-social/facebook-homepage-hover.png'" onmouseout="this.src='/img/homepage/product-social/facebook-homepage.png'">
									</a>
								</div>
								<div class="share-twitter">
									<a href="http://twitter.com/home?status=NEW HORUS SUSPENSION LIGHT II by @BRABBU " title="BRABBU" target="_blank" rel="nofollow" style="float:left;">
										<img alt="TwitThis" src="https://www.brabbu.com/img/homepage/product-social/twitter-homepage.png" onmouseover="this.src='/img/homepage/product-social/twitter-homepage-hover.png'" onmouseout="this.src='/img/homepage/product-social/twitter-homepage.png'">
									</a>
								</div>
								<div id="pinterest-btn" class="share-pinterest">
									<a href="http://pinterest.com/pin/create/button/?url=http://www.brabbu.com/en/lighting/horus-suspension-light-2/&media=http://www.brabbu.com/img/homepage/new-pieces/calla-table-light.jpg&description=NEW HORUS SUSPENSION LIGHT II by @BRABBU " class="pin-it-button" target="_blank" count-layout="horizontal">
									    <img border="0" src="https://www.brabbu.com/img/homepage/product-social/pinterest-homepage.png" title="Pin It" />
									</a>
								</div>
							</div>
						</div>
				    </li>

					<li class="box-hover">
						<a href="/en/lighting/calla-table-light/">
							<img src="https://www.brabbu.com/img/homepage/new-pieces/calla-table-light.jpg" class="zindex_bottom"/>
						</a>
						<div class="hover-homepage background-color-hover invisible">
							<span class="name">
								<a href="/en/lighting/calla-table-light/">
									CALLA | TABLE LIGHT
								</a>
							</span>
							<div class="share">
								<div class="share-facebook">
									<a href="http://www.facebook.com/share.php?u=http://brabbu.com/en/lighting/calla-table-light/" title="BRABBU" target="_blank" rel="nofollow" style="float:left;">
										<img alt="Facebook" title="Facebook" src="https://www.brabbu.com/img/homepage/product-social/facebook-homepage.png" onmouseover="this.src='/img/homepage/product-social/facebook-homepage-hover.png'" onmouseout="this.src='/img/homepage/product-social/facebook-homepage.png'">
									</a>
								</div>
								<div class="share-twitter">
									<a href="http://twitter.com/home?status=NEW CALLA TABLE LIGHT by @BRABBU " title="BRABBU" target="_blank" rel="nofollow" style="float:left;">
										<img alt="TwitThis" src="https://www.brabbu.com/img/homepage/product-social/twitter-homepage.png" onmouseover="this.src='/img/homepage/product-social/twitter-homepage-hover.png'" onmouseout="this.src='/img/homepage/product-social/twitter-homepage.png'">
									</a>
								</div>
								<div id="pinterest-btn" class="share-pinterest">
									<a href="http://pinterest.com/pin/create/button/?url=http://www.brabbu.com/en/lighting/calla-table-light/&media=http://www.brabbu.com/img/homepage/new-pieces/calla-table-light.jpg&description=NEW CALLA TABLE LIGHT by @BRABBU " class="pin-it-button" target="_blank" count-layout="horizontal">
									    <img border="0" src="https://www.brabbu.com/img/homepage/product-social/pinterest-homepage.png" title="Pin It" />
									</a>
								</div>
							</div>
						</div>
				    </li>

					<li class="box-hover">
						<a href="/en/casegoods/manuka-center-table/">
							<img src="https://www.brabbu.com/img/homepage/new-pieces/1-manuka-center-table.jpg" class="zindex_bottom"/>
						</a>
						<div class="hover-homepage background-color-hover invisible">
							<span class="name">
								<a href="/en/casegoods/manuka-center-table/">
									MANUKA | CENTER TABLE
								</a>
							</span>
							<div class="share">
								<div class="share-facebook">
									<a href="http://www.facebook.com/share.php?u=http://brabbu.com/en/casegoods/manuka-center-table/" title="BRABBU" target="_blank" rel="nofollow" style="float:left;">
										<img alt="Facebook" title="Facebook" src="https://www.brabbu.com/img/homepage/product-social/facebook-homepage.png" onmouseover="this.src='/img/homepage/product-social/facebook-homepage-hover.png'" onmouseout="this.src='/img/homepage/product-social/facebook-homepage.png'">
									</a>
								</div>
								<div class="share-twitter">
									<a href="http://twitter.com/home?status=NEW MANUKA CENTER TABLE by @BRABBU http://goo.gl/PSL70d" title="BRABBU" target="_blank" rel="nofollow" style="float:left;">
										<img alt="TwitThis" src="https://www.brabbu.com/img/homepage/product-social/twitter-homepage.png" onmouseover="this.src='/img/homepage/product-social/twitter-homepage-hover.png'" onmouseout="this.src='/img/homepage/product-social/twitter-homepage.png'">
									</a>
								</div>
								<div id="pinterest-btn" class="share-pinterest">
									<a href="http://pinterest.com/pin/create/button/?url=http://www.brabbu.com/en/casegoods/manuka-center-table/&media=http://www.brabbu.com/img/homepage/new-pieces/1-manuka-center-table.jpg&description=NEW MANUKA CENTER TABLE by @BRABBU http://goo.gl/PSL70d" class="pin-it-button" target="_blank" count-layout="horizontal">
									    <img border="0" src="https://www.brabbu.com/img/homepage/product-social/pinterest-homepage.png" title="Pin It" />
									</a>
								</div>
							</div>
						</div>
				    </li>

					<li class="box-hover">
						<a href="/en/casegoods/belize-mirror/">
							<img src="https://www.brabbu.com/img/homepage/new-pieces/2-belize-mirror.jpg" class="zindex_bottom"/>
						</a>
						<div class="hover-homepage background-color-hover invisible">
							<span class="name">
								<a href="/en/casegoods/belize-mirror/">
									BELIZE | MIRROR
								</a>
							</span>
							<div class="share">
								<div class="share-facebook">
									<a href="http://www.facebook.com/share.php?u=http://brabbu.com/en/casegoods/belize-mirror/" title="BRABBU" target="_blank" rel="nofollow" style="float:left;">
										<img alt="Facebook" title="Facebook" src="https://www.brabbu.com/img/homepage/product-social/facebook-homepage.png" onmouseover="this.src='/img/homepage/product-social/facebook-homepage-hover.png'" onmouseout="this.src='/img/homepage/product-social/facebook-homepage.png'">
									</a>
								</div>
								<div class="share-twitter">
									<a href="http://twitter.com/home?status=NEW BELIZE MIRROR by @BRABBU http://goo.gl/PSL70d" title="BRABBU" target="_blank" rel="nofollow" style="float:left;">
										<img alt="TwitThis" src="https://www.brabbu.com/img/homepage/product-social/twitter-homepage.png" onmouseover="this.src='/img/homepage/product-social/twitter-homepage-hover.png'" onmouseout="this.src='/img/homepage/product-social/twitter-homepage.png'">
									</a>
								</div>
								<div id="pinterest-btn" class="share-pinterest">
									<a href="http://pinterest.com/pin/create/button/?url=http://www.brabbu.com/en/casegoods/belize-mirror/&media=http://www.brabbu.com/img/homepage/new-pieces/2-belize-mirror.jpg&description=NEW BELIZE MIRROR by @BRABBU http://goo.gl/PSL70d" class="pin-it-button" target="_blank" count-layout="horizontal">
									    <img border="0" src="https://www.brabbu.com/img/homepage/product-social/pinterest-homepage.png" title="Pin It" />
									</a>
								</div>
							</div>
						</div>
				    </li>
					<li class="box-hover">
						<a href="/en/upholstery/java-armchair/">
							<img src="https://www.brabbu.com/img/homepage/new-pieces/3-java-armchair.jpg" class="zindex_bottom"/>
						</a>
						<div class="hover-homepage background-color-hover invisible">
							<span class="name">
								<a href="/en/upholstery/java-armchair/">
									JAVA | ARMCHAIR
								</a>
							</span>
							<div class="share">
								<div class="share-facebook">
									<a href="http://www.facebook.com/share.php?u=http://brabbu.com/en/upholstery/java-armchair/" title="BRABBU" target="_blank" rel="nofollow" style="float:left;">
										<img alt="Facebook" title="Facebook" src="https://www.brabbu.com/img/homepage/product-social/facebook-homepage.png" onmouseover="this.src='/img/homepage/product-social/facebook-homepage-hover.png'" onmouseout="this.src='/img/homepage/product-social/facebook-homepage.png'">
									</a>
								</div>
								<div class="share-twitter">
									<a href="http://twitter.com/home?status=NEW JAVA ARMCHAIR by @BRABBU http://goo.gl/PSL70d" title="BRABBU" target="_blank" rel="nofollow" style="float:left;">
										<img alt="TwitThis" src="https://www.brabbu.com/img/homepage/product-social/twitter-homepage.png" onmouseover="this.src='/img/homepage/product-social/twitter-homepage-hover.png'" onmouseout="this.src='/img/homepage/product-social/twitter-homepage.png'">
									</a>
								</div>
								<div id="pinterest-btn" class="share-pinterest">
									<a href="http://pinterest.com/pin/create/button/?url=http://www.brabbu.com/en/upholstery/java-armchair/&media=http://www.brabbu.com/img/homepage/new-pieces/3-java-armchair.jpg&description=NEW JAVA ARMCHAIR by @BRABBU http://goo.gl/PSL70d" class="pin-it-button" target="_blank" count-layout="horizontal">
									    <img border="0" src="https://www.brabbu.com/img/homepage/product-social/pinterest-homepage.png" title="Pin It" />
									</a>
								</div>
							</div>
						</div>
				    </li>
				    <li class="box-hover">
						<a href="/en/upholstery/dukono-armchair/">
							<img src="https://www.brabbu.com/img/homepage/new-pieces/rare-edition/dukono-armchair-rare-edition.jpg"/>
						</a>
						<div class="hover-homepage background-color-hover invisible">
							<span class="name">
								<a href="/en/upholstery/dukono-armchair/">
									DUKONO | ARMCHAIR
								</a>
							</span>
							<div class="share">
								<div class="share-facebook">
									<a href="http://www.facebook.com/share.php?u=http://brabbu.com/en/upholstery/dukono-armchair/" title="BRABBU" target="_blank" rel="nofollow" style="float:left;">
										<img alt="Facebook" title="Facebook" src="https://www.brabbu.com/img/homepage/product-social/facebook-homepage.png" onmouseover="this.src='/img/homepage/product-social/facebook-homepage-hover.png'" onmouseout="this.src='/img/homepage/product-social/facebook-homepage.png'">
									</a>
								</div>
								<div class="share-twitter">
									<a href="http://twitter.com/home?status=Rare Edition DUKONO Armchair by @BRABBU http://goo.gl/eh2izp" title="BRABBU" target="_blank" rel="nofollow" style="float:left;">
										<img alt="TwitThis" src="https://www.brabbu.com/img/homepage/product-social/twitter-homepage.png" onmouseover="this.src='/img/homepage/product-social/twitter-homepage-hover.png'" onmouseout="this.src='/img/homepage/product-social/twitter-homepage.png'">
									</a>
								</div>
								<div id="pinterest-btn" class="share-pinterest">
									<a href="http://pinterest.com/pin/create/button/?url=http://www.brabbu.com/en/upholstery/dukono-armchair/&media=http://www.brabbu.com/img/homepage/new-pieces/rare-edition/dukono-armchair-rare-edition.jpg&description=Rare Edition DUKONO Armchair by @BRABBU http://goo.gl/eh2izp" class="pin-it-button" target="_blank" count-layout="horizontal">
									    <img border="0" src="https://www.brabbu.com/img/homepage/product-social/pinterest-homepage.png" title="Pin It" />
									</a>
								</div>
							</div>
						</div>
				    </li>
					<!-- Rare Edition -->
					<li class="box-hover">
						<a href="/en/upholstery/n20-bar-chair/">
							<img src="https://www.brabbu.com/img/homepage/new-pieces/5-n20-bar-chair.jpg" class="zindex_bottom"/>
						</a>
						<div class="hover-homepage background-color-hover invisible">
							<span class="name">
								<a href="/en/upholstery/n20-bar-chair/">
									Nº20 | BAR CHAIR
								</a>
							</span>
							<div class="share">
								<div class="share-facebook">
									<a href="http://www.facebook.com/share.php?u=http://brabbu.com/en/upholstery/n20-bar-chair/" title="BRABBU" target="_blank" rel="nofollow" style="float:left;">
										<img alt="Facebook" title="Facebook" src="https://www.brabbu.com/img/homepage/product-social/facebook-homepage.png" onmouseover="this.src='/img/homepage/product-social/facebook-homepage-hover.png'" onmouseout="this.src='/img/homepage/product-social/facebook-homepage.png'">
									</a>
								</div>
								<div class="share-twitter">
									<a href="http://twitter.com/home?status=NEW Nº20 BAR CHAIR by @BRABBU http://goo.gl/rkyo1B" title="BRABBU" target="_blank" rel="nofollow" style="float:left;">
										<img alt="TwitThis" src="https://www.brabbu.com/img/homepage/product-social/twitter-homepage.png" onmouseover="this.src='/img/homepage/product-social/twitter-homepage-hover.png'" onmouseout="this.src='/img/homepage/product-social/twitter-homepage.png'">
									</a>
								</div>
								<div id="pinterest-btn" class="share-pinterest">
									<a href="http://pinterest.com/pin/create/button/?url=http://www.brabbu.com/en/upholstery/n20-bar-chair/&media=http://www.brabbu.com/img/homepage/new-pieces/5-n20-bar-chair.jpg&description=NEW N20 BAR CHAIR by @BRABBU http://goo.gl/rkyo1B" class="pin-it-button" target="_blank" count-layout="horizontal">
									    <img border="0" src="https://www.brabbu.com/img/homepage/product-social/pinterest-homepage.png" title="Pin It" />
									</a>
								</div>
							</div>
						</div>
				    </li>
					<li class="box-hover">
						<a href="/en/lighting/phong-wall-light/">
							<img src="https://www.brabbu.com/img/homepage/new-pieces/6-phong-wall-light.jpg" class="zindex_bottom"/>
						</a>
						<div class="hover-homepage background-color-hover invisible">
							<span class="name">
								<a href="/en/lighting/phong-wall-light/">
									PHONG | WALL LIGHT
								</a>
							</span>
							<div class="share">
								<div class="share-facebook">
									<a href="http://www.facebook.com/share.php?u=http://brabbu.com/en/lighting/phong-wall-light/" title="BRABBU" target="_blank" rel="nofollow" style="float:left;">
										<img alt="Facebook" title="Facebook" src="https://www.brabbu.com/img/homepage/product-social/facebook-homepage.png" onmouseover="this.src='/img/homepage/product-social/facebook-homepage-hover.png'" onmouseout="this.src='/img/homepage/product-social/facebook-homepage.png'">
									</a>
								</div>
								<div class="share-twitter">
									<a href="http://twitter.com/home?status=NEW PHONG WALL LIGHT by @BRABBU http://goo.gl/PSL70d" title="BRABBU" target="_blank" rel="nofollow" style="float:left;">
										<img alt="TwitThis" src="https://www.brabbu.com/img/homepage/product-social/twitter-homepage.png" onmouseover="this.src='/img/homepage/product-social/twitter-homepage-hover.png'" onmouseout="this.src='/img/homepage/product-social/twitter-homepage.png'">
									</a>
								</div>
								<div id="pinterest-btn" class="share-pinterest">
									<a href="http://pinterest.com/pin/create/button/?url=http://www.brabbu.com/en/lighting/phong-wall-light/&media=http://www.brabbu.com//img/homepage/new-pieces/6-phong-wall-light.jpg&description=NEW PHONG WALL LIGHT by @BRABBU http://goo.gl/PSL70d" class="pin-it-button" target="_blank" count-layout="horizontal">
									    <img border="0" src="https://www.brabbu.com/img/homepage/product-social/pinterest-homepage.png" title="Pin It" />
									</a>
								</div>
							</div>
						</div>
				    </li>
					<li class="box-hover">
						<a href="/en/casegoods/kayan-mirror/">
							<img src="https://www.brabbu.com/img/homepage/new-pieces/7-kayan-mirror.jpg" class="zindex_bottom"/>
						</a>
						<div class="hover-homepage background-color-hover invisible">
							<span class="name">
								<a href="/en/casegoods/kayan-mirror/">
									KAYAN | MIRROR
								</a>
							</span>
							<div class="share">
								<div class="share-facebook">
									<a href="http://www.facebook.com/share.php?u=http://brabbu.com/en/casegoods/kayan-mirror/" title="BRABBU" target="_blank" rel="nofollow" style="float:left;">
										<img alt="Facebook" title="Facebook" src="https://www.brabbu.com/img/homepage/product-social/facebook-homepage.png" onmouseover="this.src='/img/homepage/product-social/facebook-homepage-hover.png'" onmouseout="this.src='/img/homepage/product-social/facebook-homepage.png'">
									</a>
								</div>
								<div class="share-twitter">
									<a href="http://twitter.com/home?status=NEW KAYAN MIRROR by @BRABBU http://goo.gl/PSL70d" title="BRABBU" target="_blank" rel="nofollow" style="float:left;">
										<img alt="TwitThis" src="https://www.brabbu.com/img/homepage/product-social/twitter-homepage.png" onmouseover="this.src='/img/homepage/product-social/twitter-homepage-hover.png'" onmouseout="this.src='/img/homepage/product-social/twitter-homepage.png'">
									</a>
								</div>
								<div id="pinterest-btn" class="share-pinterest">
									<a href="http://pinterest.com/pin/create/button/?url=http://www.brabbu.com/en/casegoods/kayan-mirror/&media=http://www.brabbu.com/img/homepage/new-pieces/7-kayan-mirror.jpg&description=NEW KAYAN MIRROR by @BRABBU http://goo.gl/PSL70d" class="pin-it-button" target="_blank" count-layout="horizontal">
									    <img border="0" src="https://www.brabbu.com/img/homepage/product-social/pinterest-homepage.png" title="Pin It" />
									</a>
								</div>
							</div>
						</div>
				    </li>
				    <li class="box-hover">
						<a href="/en/upholstery/sika-armchair/">
							<img src="https://www.brabbu.com/img/homepage/new-pieces/rare-edition/sika-armchair-rare-edition.jpg"/>
						</a>
						<div class="hover-homepage background-color-hover invisible">
							<span class="name">
								<a href="/en/upholstery/sika-armchair/">
									SIKA | ARMCHAIR
								</a>
							</span>
							<div class="share">
								<div class="share-facebook">
									<a href="http://www.facebook.com/share.php?u=http://brabbu.com/en/upholstery/sika-armchair/" title="BRABBU" target="_blank" rel="nofollow" style="float:left;">
										<img alt="Facebook" title="Facebook" src="https://www.brabbu.com/img/homepage/product-social/facebook-homepage.png" onmouseover="this.src='/img/homepage/product-social/facebook-homepage-hover.png'" onmouseout="this.src='/img/homepage/product-social/facebook-homepage.png'">
									</a>
								</div>
								<div class="share-twitter">
									<a href="http://twitter.com/home?status=Rare Edition SIKA Armchair by @BRABBU http://goo.gl/VKfJAx" title="BRABBU" target="_blank" rel="nofollow" style="float:left;">
										<img alt="TwitThis" src="https://www.brabbu.com/img/homepage/product-social/twitter-homepage.png" onmouseover="this.src='/img/homepage/product-social/twitter-homepage-hover.png'" onmouseout="this.src='/img/homepage/product-social/twitter-homepage.png'">
									</a>
								</div>
								<div id="pinterest-btn" class="share-pinterest">
									<a href="http://pinterest.com/pin/create/button/?url=http://www.brabbu.com/en/upholstery/sika-armchair/&media=http://www.brabbu.com/img/homepage/new-pieces/rare-edition/sika-armchair-rare-edition.jpg&description=Rare Edition SIKA Armchair by @BRABBU http://goo.gl/VKfJAx" class="pin-it-button" target="_blank" count-layout="horizontal">
									    <img border="0" src="https://www.brabbu.com/img/homepage/product-social/pinterest-homepage.png" title="Pin It" />
									</a>
								</div>
							</div>
						</div>
				    </li>
					<!-- Rare Edition -->
					<li class="box-hover">
						<a href="/en/lighting/syrad-wall-light/">
							<img src="https://www.brabbu.com/img/homepage/new-pieces/9-syrad-wall-light.jpg" class="zindex_bottom"/>
						</a>
						<div class="hover-homepage background-color-hover invisible">
							<span class="name">
								<a href="/en/lighting/syrad-wall-light/">
									SYRAD | WALL LIGHT
								</a>
							</span>
							<div class="share">
								<div class="share-facebook">
									<a href="http://www.facebook.com/share.php?u=http://brabbu.com/en/lighting/syrad-wall-light/" title="BRABBU" target="_blank" rel="nofollow" style="float:left;">
										<img alt="Facebook" title="Facebook" src="https://www.brabbu.com/img/homepage/product-social/facebook-homepage.png" onmouseover="this.src='/img/homepage/product-social/facebook-homepage-hover.png'" onmouseout="this.src='/img/homepage/product-social/facebook-homepage.png'">
									</a>
								</div>
								<div class="share-twitter">
									<a href="http://twitter.com/home?status=NEW SYRAD WALL LIGHT by @BRABBU http://goo.gl/PSL70d" title="BRABBU" target="_blank" rel="nofollow" style="float:left;">
										<img alt="TwitThis" src="https://www.brabbu.com/img/homepage/product-social/twitter-homepage.png" onmouseover="this.src='/img/homepage/product-social/twitter-homepage-hover.png'" onmouseout="this.src='/img/homepage/product-social/twitter-homepage.png'">
									</a>
								</div>
								<div id="pinterest-btn" class="share-pinterest">
									<a href="http://pinterest.com/pin/create/button/?url=http://www.brabbu.com/en/lighting/syrad-wall-light/&media=http://www.brabbu.com/img/homepage/new-pieces/9-syrad-wall-light.jpg&description=NEW SYRAD WALL LIGHT by @BRABBU http://goo.gl/PSL70d" class="pin-it-button" target="_blank" count-layout="horizontal">
									    <img border="0" src="https://www.brabbu.com/img/homepage/product-social/pinterest-homepage.png" title="Pin It" />
									</a>
								</div>
							</div>
						</div>
				    </li>
					<li class="box-hover">
						<a href="/en/lighting/cyrus-wall-light/">
							<img src="https://www.brabbu.com/img/homepage/new-pieces/10-cyrus-wall-light.jpg" class="zindex_bottom"/>
						</a>
						<div class="hover-homepage background-color-hover invisible">
							<span class="name">
								<a href="/en/lighting/cyrus-wall-light/">
									CYRUS | WALL LIGHT
								</a>
							</span>
							<div class="share">
								<div class="share-facebook">
									<a href="http://www.facebook.com/share.php?u=http://brabbu.com/en/lighting/cyrus-wall-light/" title="BRABBU" target="_blank" rel="nofollow" style="float:left;">
										<img alt="Facebook" title="Facebook" src="https://www.brabbu.com/img/homepage/product-social/facebook-homepage.png" onmouseover="this.src='/img/homepage/product-social/facebook-homepage-hover.png'" onmouseout="this.src='/img/homepage/product-social/facebook-homepage.png'">
									</a>
								</div>
								<div class="share-twitter">
									<a href="http://twitter.com/home?status=NEW CYRUS WALL LIGHT by @BRABBU http://goo.gl/PSL70d" title="BRABBU" target="_blank" rel="nofollow" style="float:left;">
										<img alt="TwitThis" src="https://www.brabbu.com/img/homepage/product-social/twitter-homepage.png" onmouseover="this.src='/img/homepage/product-social/twitter-homepage-hover.png'" onmouseout="this.src='/img/homepage/product-social/twitter-homepage.png'">
									</a>
								</div>
								<div id="pinterest-btn" class="share-pinterest">
									<a href="http://pinterest.com/pin/create/button/?url=http://www.brabbu.com/en/lighting/cyrus-wall-light/&media=http://www.brabbu.com/img/homepage/new-pieces/10-cyrus-wall-light.jpg&description=NEW CYRUS WALL LIGHT by @BRABBU http://goo.gl/PSL70d" class="pin-it-button" target="_blank" count-layout="horizontal">
									    <img border="0" src="https://www.brabbu.com/img/homepage/product-social/pinterest-homepage.png" title="Pin It" />
									</a>
								</div>
							</div>
						</div>
				    </li>
					<li class="box-hover">
						<a href="/en/upholstery/batak-armchair/">
							<img src="https://www.brabbu.com/img/homepage/new-pieces/11-batak-armchair.jpg" class="zindex_bottom"/>
						</a>
						<div class="hover-homepage background-color-hover invisible">
							<span class="name">
								<a href="/en/upholstery/batak-armchair/">
									BATAK | ARMCHAIR
								</a>
							</span>
							<div class="share">
								<div class="share-facebook">
									<a href="http://www.facebook.com/share.php?u=http://brabbu.com/en/upholstery/batak-armchair/" title="BRABBU" target="_blank" rel="nofollow" style="float:left;">
										<img alt="Facebook" title="Facebook" src="https://www.brabbu.com/img/homepage/product-social/facebook-homepage.png" onmouseover="this.src='/img/homepage/product-social/facebook-homepage-hover.png'" onmouseout="this.src='/img/homepage/product-social/facebook-homepage.png'">
									</a>
								</div>
								<div class="share-twitter">
									<a href="http://twitter.com/home?status=NEW BATAK ARMCHAIR by @BRABBU http://goo.gl/PSL70d" title="BRABBU" target="_blank" rel="nofollow" style="float:left;">
										<img alt="TwitThis" src="https://www.brabbu.com/img/homepage/product-social/twitter-homepage.png" onmouseover="this.src='/img/homepage/product-social/twitter-homepage-hover.png'" onmouseout="this.src='/img/homepage/product-social/twitter-homepage.png'">
									</a>
								</div>
								<div id="pinterest-btn" class="share-pinterest">
									<a href="http://pinterest.com/pin/create/button/?url=http://www.brabbu.com/en/upholstery/batak-armchair/&media=http://www.brabbu.com/img/homepage/new-pieces/11-batak-armchair.jpg&description=NEW BATAK ARMCHAIR by @BRABBU http://goo.gl/PSL70d" class="pin-it-button" target="_blank" count-layout="horizontal">
									    <img border="0" src="https://www.brabbu.com/img/homepage/product-social/pinterest-homepage.png" title="Pin It" />
									</a>
								</div>
							</div>
						</div>
				    </li>
				    <li class="box-hover">
						<a href="/en/upholstery/oka-armchair/">
							<img src="https://www.brabbu.com/img/homepage/new-pieces/rare-edition/oka-armchair-rare-edition.jpg"/>
						</a>
						<div class="hover-homepage background-color-hover invisible">
							<span class="name">
								<a href="/en/upholstery/oka-armchair/">
									OKA | ARMCHAIR
								</a>
							</span>
							<div class="share">
								<div class="share-facebook">
									<a href="http://www.facebook.com/share.php?u=http://brabbu.com/en/upholstery/oka-armchair/" title="BRABBU" target="_blank" rel="nofollow" style="float:left;">
										<img alt="Facebook" title="Facebook" src="https://www.brabbu.com/img/homepage/product-social/facebook-homepage.png" onmouseover="this.src='/img/homepage/product-social/facebook-homepage-hover.png'" onmouseout="this.src='/img/homepage/product-social/facebook-homepage.png'">
									</a>
								</div>
								<div class="share-twitter">
									<a href="http://twitter.com/home?status=Rare Edition OKA Armchair by @BRABBU http://goo.gl/RVL6Gt" title="BRABBU" target="_blank" rel="nofollow" style="float:left;">
										<img alt="TwitThis" src="https://www.brabbu.com/img/homepage/product-social/twitter-homepage.png" onmouseover="this.src='/img/homepage/product-social/twitter-homepage-hover.png'" onmouseout="this.src='/img/homepage/product-social/twitter-homepage.png'">
									</a>
								</div>
								<div id="pinterest-btn" class="share-pinterest">
									<a href="http://pinterest.com/pin/create/button/?url=http://www.brabbu.com/en/upholstery/oka-armchair/&media=http://www.brabbu.com/img/homepage/new-pieces/rare-edition/oka-armchair-rare-edition.jpg&description=Rare Edition OKA Armchair by @BRABBU http://goo.gl/RVL6Gt" class="pin-it-button" target="_blank" count-layout="horizontal">
									    <img border="0" src="https://www.brabbu.com/img/homepage/product-social/pinterest-homepage.png" title="Pin It" />
									</a>
								</div>
							</div>
						</div>
				    </li>
					<!-- Rare Edition -->
					<li class="box-hover">
						<a href="/en/upholstery/nuka-bar-chair/">
							<img src="https://www.brabbu.com/img/homepage/new-pieces/13-nuka-bar-chair.jpg" class="zindex_bottom"/>
						</a>
						<div class="hover-homepage background-color-hover invisible">
							<span class="name">
								<a href="/en/upholstery/nuka-bar-chair/">
									NUKA | BAR CHAIR
								</a>
							</span>
							<div class="share">
								<div class="share-facebook">
									<a href="http://www.facebook.com/share.php?u=http://brabbu.com/en/upholstery/nuka-bar-chair/" title="BRABBU" target="_blank" rel="nofollow" style="float:left;">
										<img alt="Facebook" title="Facebook" src="https://www.brabbu.com/img/homepage/product-social/facebook-homepage.png" onmouseover="this.src='/img/homepage/product-social/facebook-homepage-hover.png'" onmouseout="this.src='/img/homepage/product-social/facebook-homepage.png'">
									</a>
								</div>
								<div class="share-twitter">
									<a href="http://twitter.com/home?status=NEW NUKA BAR CHAIR by @BRABBU http://goo.gl/rkyo1B" title="BRABBU" target="_blank" rel="nofollow" style="float:left;">
										<img alt="TwitThis" src="https://www.brabbu.com/img/homepage/product-social/twitter-homepage.png" onmouseover="this.src='/img/homepage/product-social/twitter-homepage-hover.png'" onmouseout="this.src='/img/homepage/product-social/twitter-homepage.png'">
									</a>
								</div>
								<div id="pinterest-btn" class="share-pinterest">
									<a href="http://pinterest.com/pin/create/button/?url=http://www.brabbu.com/en/upholstery/nuka-bar-chair/&media=http://www.brabbu.com/img/homepage/new-pieces/11-nuka-bar-chair.jpg&description=NEW NUKA BAR CHAIR by @BRABBU http://goo.gl/rkyo1B" class="pin-it-button" target="_blank" count-layout="horizontal">
									    <img border="0" src="https://www.brabbu.com/img/homepage/product-social/pinterest-homepage.png" title="Pin It" />
									</a>
								</div>
							</div>
						</div>
				    </li>
					<li class="box-hover">
						<a href="/en/upholstery/como-armchair/">
							<img src="https://www.brabbu.com/img/homepage/new-pieces/14-como-armchair.jpg" class="zindex_bottom"/>
						</a>
						<div class="hover-homepage background-color-hover invisible">
							<span class="name">
								<a href="/en/upholstery/como-armchair/">
									COMO | ARMCHAIR
								</a>
							</span>
							<div class="share">
								<div class="share-facebook">
									<a href="http://www.facebook.com/share.php?u=http://brabbu.com/en/upholstery/como-armchair/" title="BRABBU" target="_blank" rel="nofollow" style="float:left;">
										<img alt="Facebook" title="Facebook" src="https://www.brabbu.com/img/homepage/product-social/facebook-homepage.png" onmouseover="this.src='/img/homepage/product-social/facebook-homepage-hover.png'" onmouseout="this.src='/img/homepage/product-social/facebook-homepage.png'">
									</a>
								</div>
								<div class="share-twitter">
									<a href="http://twitter.com/home?status=NEW COMO ARMCHAIR by @BRABBU http://goo.gl/TdwCCr" title="BRABBU" target="_blank" rel="nofollow" style="float:left;">
										<img alt="TwitThis" src="https://www.brabbu.com/img/homepage/product-social/twitter-homepage.png" onmouseover="this.src='/img/homepage/product-social/twitter-homepage-hover.png'" onmouseout="this.src='/img/homepage/product-social/twitter-homepage.png'">
									</a>
								</div>
								<div id="pinterest-btn" class="share-pinterest">
									<a href="http://pinterest.com/pin/create/button/?url=http://www.brabbu.com/en/upholstery/como-armchair/&media=http://www.brabbu.com/img/homepage/new-pieces/14-como-armchair.jpg&description=NEW COMO ARMCHAIR by @BRABBU http://goo.gl/TdwCCr" class="pin-it-button" target="_blank" count-layout="horizontal">
									    <img border="0" src="https://www.brabbu.com/img/homepage/product-social/pinterest-homepage.png" title="Pin It" />
									</a>
								</div>
							</div>
						</div>
				    </li>
					<li class="box-hover">
						<a href="/en/upholstery/stola-armchair/">
							<img src="https://www.brabbu.com/img/homepage/new-pieces/15-stola-armchair.jpg" class="zindex_bottom"/>
						</a>
						<div class="hover-homepage background-color-hover invisible">
							<span class="name">
								<a href="/en/upholstery/stola-armchair/">
									STOLA | ARMCHAIR
								</a>
							</span>
							<div class="share">
								<div class="share-facebook">
									<a href="http://www.facebook.com/share.php?u=http://brabbu.com/en/upholstery/stola-armchair/" title="BRABBU" target="_blank" rel="nofollow" style="float:left;">
										<img alt="Facebook" title="Facebook" src="https://www.brabbu.com/img/homepage/product-social/facebook-homepage.png" onmouseover="this.src='/img/homepage/product-social/facebook-homepage-hover.png'" onmouseout="this.src='/img/homepage/product-social/facebook-homepage.png'">
									</a>
								</div>
								<div class="share-twitter">
									<a href="http://twitter.com/home?status=NEW STOLA ARMCHAIR by @BRABBU http://goo.gl/JkFqGs" title="BRABBU" target="_blank" rel="nofollow" style="float:left;">
										<img alt="TwitThis" src="https://www.brabbu.com/img/homepage/product-social/twitter-homepage.png" onmouseover="this.src='/img/homepage/product-social/twitter-homepage-hover.png'" onmouseout="this.src='/img/homepage/product-social/twitter-homepage.png'">
									</a>
								</div>
								<div id="pinterest-btn" class="share-pinterest">
									<a href="http://pinterest.com/pin/create/button/?url=http://www.brabbu.com/en/upholstery/stola-armchair/&media=http://www.brabbu.com/img/homepage/new-pieces/15-stola-armchair.jpg&description=NEW STOLA ARMCHAIR by @BRABBU http://goo.gl/JkFqGs" class="pin-it-button" target="_blank" count-layout="horizontal">
									    <img border="0" src="https://www.brabbu.com/img/homepage/product-social/pinterest-homepage.png" title="Pin It" />
									</a>
								</div>
							</div>
						</div>
				    </li>
				    <li class="box-hover">
						<a href="/en/campaigns/rare-edition/">
							<img src="https://www.brabbu.com/img/homepage/new-pieces/rare-edition/daylan-armchair-rare-edition.jpg"/>
						</a>
						<div class="hover-homepage background-color-hover invisible">
							<span class="name">
								<a href="/en/campaigns/rare-edition/">
									DALYAN | ARMCHAIR
								</a>
							</span>
							<div class="share">
								<div class="share-facebook">
									<a href="http://www.facebook.com/share.php?u=http://brabbu.com/en/campaigns/rare-edition/" title="BRABBU" target="_blank" rel="nofollow" style="float:left;">
										<img alt="Facebook" title="Facebook" src="https://www.brabbu.com/img/homepage/product-social/facebook-homepage.png" onmouseover="this.src='/img/homepage/product-social/facebook-homepage-hover.png'" onmouseout="this.src='/img/homepage/product-social/facebook-homepage.png'">
									</a>
								</div>
								<div class="share-twitter">
									<a href="http://twitter.com/home?status=Rare Edition DALYAN Armchair by @BRABBU http://goo.gl/Vkcbz6" title="BRABBU" target="_blank" rel="nofollow" style="float:left;">
										<img alt="TwitThis" src="https://www.brabbu.com/img/homepage/product-social/twitter-homepage.png" onmouseover="this.src='/img/homepage/product-social/twitter-homepage-hover.png'" onmouseout="this.src='/img/homepage/product-social/twitter-homepage.png'">
									</a>
								</div>
								<div id="pinterest-btn" class="share-pinterest">
									<a href="http://pinterest.com/pin/create/button/?url=http://www.brabbu.com/en/campaigns/rare-edition/&media=http://www.brabbu.com/img/homepage/new-pieces/rare-edition/daylan-armchair-rare-edition.jpg&description=Rare Edition DALYAN Armchair by @BRABBU http://goo.gl/Vkcbz6" class="pin-it-button" target="_blank" count-layout="horizontal">
									    <img border="0" src="https://www.brabbu.com/img/homepage/product-social/pinterest-homepage.png" title="Pin It" />
									</a>
								</div>
							</div>
						</div>
				    </li>
					<!-- Rare Edition -->				    
				</ul>
			</div>
		</div>
	</div>
	<div id="middle-info">
		<div class="middle-info-box">
			<a href="">КОНТАКТЫ</a>
		</div>
		<div class="verticalLine"></div>
		<div class="middle-info-box">
			<a href="">ИНТЕРЬЕР</a>
		</div>
		<div class="verticalLine"></div>
		<div class="middle-info-box">
			<a href="">МЕБЕЛЬ</a>
		</div>
		<div class="verticalLine"></div>
		<div class="middle-info-box">
			<a href="" target="_blank">ДЕКОР</a>
		</div>
		<div class="clear"></div>
	</div>
	<div id="row" class="home_mr-top" style='display:none'>
		<div class="block align-left box-hover mr-right-2">
			<a href="/en/campaigns/rare-edition/">
		    	<img src="https://www.brabbu.com/img/homepage/category-area/large/rare-edition-unveil-more-by-brabbu1.jpg" />
		    </a>
			<div class="hover-homepage background-color-hover invisible">
				<span class="name">
					<a href="/en/campaigns/rare-edition/">
						sika | armchair
					</a>
				</span>
				<span class="name">
					<a href="/en/campaigns/rare-edition/">
						dukono | armchair
					</a>
				</span>
				<div class="share">
					<div class="share-facebook">
						<a href="http://www.facebook.com/share.php?u=http://brabbu.com/en/campaigns/rare-edition/" title="BRABBU" target="_blank" rel="nofollow" style="float:left;">
							<img alt="Facebook" title="Facebook" src="https://www.brabbu.com/img/homepage/product-social/facebook-homepage.png" onmouseover="this.src='/img/homepage/product-social/facebook-homepage-hover.png'" onmouseout="this.src='/img/homepage/product-social/facebook-homepage.png'">
						</a>
					</div>
					<div class="share-twitter">
						<a href="http://twitter.com/home?status=Rare Edition by @BRABBU http://goo.gl/B5JR2U" title="BRABBU" target="_blank" rel="nofollow" style="float:left;">
							<img alt="TwitThis" src="https://www.brabbu.com/img/homepage/product-social/twitter-homepage.png" onmouseover="this.src='/img/homepage/product-social/twitter-homepage-hover.png'" onmouseout="this.src='/img/homepage/product-social/twitter-homepage.png'">
						</a>
					</div>
					<div id="pinterest-btn" class="share-pinterest">
						<a href="http://pinterest.com/pin/create/button/?url=http://brabbu.com/en/campaigns/rare-edition/&media=http://brabbu.com/img/homepage/category-area/large/rare-edition-unveil-more-by-brabbu.jpg&description=Rare Edition by @BRABBU http://goo.gl/B5JR2U" class="pin-it-button" target="_blank" count-layout="horizontal">
						    <img border="0" src="https://www.brabbu.com/img/homepage/product-social/pinterest-homepage.png" title="Pin It" />
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="block align-right">
			<div class="block-top">
				<div class="align-left box-hover">
					<a href="/en/casegoods/koi-console/">
						<img src="https://www.brabbu.com/img/homepage/category-area/small/manuka-center-table-casegoods-brabbu-1.jpg"/>
					</a>
					<div class="hover-homepage hm-extra background-color-hover invisible">
						<span class="name">
							<a href="/en/casegoods/manuka-center-table/">
								manuka | center table
							</a>
						</span>
					</div>
					<div class="hover-homepage background-color-hover invisible">
						<span class="name">
							<a href="/en/upholstery/wales-sofa/">
								wales | sofa
							</a>
						</span>
						<div class="share">
							<div class="share-facebook">
								<a href="http://www.facebook.com/share.php?u=http://brabbu.com/en/casegoods/manuka-center-table/" title="BRABBU" target="_blank" rel="nofollow" style="float:left;">
									<img alt="Facebook" title="Facebook" src="https://www.brabbu.com/img/homepage/product-social/facebook-homepage.png" onmouseover="this.src='/img/homepage/product-social/facebook-homepage-hover.png'" onmouseout="this.src='/img/homepage/product-social/facebook-homepage.png'">
								</a>
							</div>
							<div class="share-twitter">
								<a href="http://twitter.com/home?status=MANUKA Center Table by @BRABBU http://goo.gl/E9j1yq" title="BRABBU" target="_blank" rel="nofollow" style="float:left;">
									<img alt="TwitThis" src="https://www.brabbu.com/img/homepage/product-social/twitter-homepage.png" onmouseover="this.src='/img/homepage/product-social/twitter-homepage-hover.png'" onmouseout="this.src='/img/homepage/product-social/twitter-homepage.png'">
								</a>
							</div>
							<div id="pinterest-btn" class="share-pinterest">
								<a href="http://pinterest.com/pin/create/button/?url=http://brabbu.com/en/&media=http://brabbu.com/img/homepage/category-area/small/manuka-center-table-casegoods-brabbu-1.jpg&description=KOI Console by @BRABBU http://goo.gl/E9j1yq" class="pin-it-button" target="_blank" count-layout="horizontal">
								    <img border="0" src="https://www.brabbu.com/img/homepage/product-social/pinterest-homepage.png" title="Pin It" />
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="align-right image-category">
					<p class="category-text">
						<a href="/en/casegoods/"> casegoods </a>
					</p>
					<p class="piece-text"><a href="/en/casegoods/manuka-center-table/"> manuka | center table </a></p>
					<a href="/en/casegoods/">
						<img src="https://www.brabbu.com/img/homepage/category-area/small/manuka-center-table-casegoods-brabbu-2.jpg"/>
					</a>
				</div>
				<div class="clear"></div>
			</div>
			<div class="block-bottom">
				<!--<div class="align-left image-category mr-right-2">-->
				<div class="align-left image-category">
					<p class="category-text">
						<a href="/en/upholstery/"> upholstery </a>
					</p>
					<p class="piece-text"><a href="/en/upholstery/andes-armchair/"> andes | armchair </a></p>
					<a href="/en/upholstery/">
						<img src="https://www.brabbu.com/img/homepage/category-area/small/andes-armchair-upholstery-brabbu-1.jpg" />
					</a>
				</div>
				<div class="align-right box-hover">
					<img src="https://www.brabbu.com/img/homepage/category-area/small/andes-armchair-upholstery-brabbu-2.jpg" />
					<div class="hover-homepage hm-extra background-color-hover invisible">
						<span class="name">
							<a href="/en/lighting/kendo-floor-light/">
								kendo | floor light
							</a>
						</span>
					</div>
					<div class="hover-homepage background-color-hover invisible">
						<span class="name">
							<a href="/en/upholstery/andes-armchair/">
								andes | armchair
							</a>
						</span>
						<div class="share">
							<div class="share-facebook">
								<a href="http://www.facebook.com/share.php?u=http://brabbu.com/en/upholstery/andes-armchair/" title="BRABBU" target="_blank" rel="nofollow" style="float:left;">
									<img alt="Facebook" title="Facebook" src="https://www.brabbu.com/img/homepage/product-social/facebook-homepage.png" onmouseover="this.src='/img/homepage/product-social/facebook-homepage-hover.png'" onmouseout="this.src='/img/homepage/product-social/facebook-homepage.png'">
								</a>
							</div>
							<div class="share-twitter">
								<a href="http://twitter.com/home?status=ANDES Armchair by @BRABBU http://goo.gl/tov0uD" title="BRABBU" target="_blank" rel="nofollow" style="float:left;">
									<img alt="TwitThis" src="https://www.brabbu.com/img/homepage/product-social/twitter-homepage.png" onmouseover="this.src='/img/homepage/product-social/twitter-homepage-hover.png'" onmouseout="this.src='/img/homepage/product-social/twitter-homepage.png'">
								</a>
							</div>
							<div id="pinterest-btn" class="share-pinterest">
								<a href="http://pinterest.com/pin/create/button/?url=http://brabbu.com/en/&media=http://brabbu.com/img/homepage/category-area/small/andes-armchair-upholstery-brabbu-2.jpg&description=ANDES Armhair by @BRABBU http://goo.gl/tov0uD" class="pin-it-button" target="_blank" count-layout="horizontal">
								    <img border="0" src="https://www.brabbu.com/img/homepage/product-social/pinterest-homepage.png" title="Pin It" />
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
	</div>
	<div id="row" class="home_mr-top" style='display:none'>
		<div class="block align-left mr-right-2">
			<div class="block-top">
				<div class="align-left image-category">
					<p class="category-text">
						<a href="/en/lighting/"> lighting </a>
					</p>
					<p class="piece-text"><a href="/en/lighting/vellum-wall-light/"> vellum | wall light </a></p>
					<a href="/en/lighting/">
						<img src="https://www.brabbu.com/img/homepage/category-area/small/vellum1-wall-light-lighting-brabbu-1.jpg" />
					</a>
				</div>
				<div class="align-right box-hover">
					<img src="https://www.brabbu.com/img/homepage/category-area/small/vellum1-wall-light-lighting-brabbu-2.jpg" />
					<div class="hover-homepage background-color-hover invisible">
						<span class="name">
							<a href="/en/lighting/vellum-wall-light/">
								vellum | wall light
							</a>
						</span>
						<div class="share">
							<div class="share-facebook">
								<a href="http://www.facebook.com/share.php?u=http://brabbu.com/en/lighting/vellum-wall-light/" title="BRABBU" target="_blank" rel="nofollow" style="float:left;">
									<img alt="Facebook" title="Facebook" src="https://www.brabbu.com/img/homepage/product-social/facebook-homepage.png" onmouseover="this.src='/img/homepage/product-social/facebook-homepage-hover.png'" onmouseout="this.src='/img/homepage/product-social/facebook-homepage.png'">
								</a>
							</div>
							<div class="share-twitter">
								<a href="http://twitter.com/home?status=VELLUM Wall Light by @BRABBU http://goo.gl/TUNRZm" title="BRABBU" target="_blank" rel="nofollow" style="float:left;">
									<img alt="TwitThis" src="https://www.brabbu.com/img/homepage/product-social/twitter-homepage.png" onmouseover="this.src='/img/homepage/product-social/twitter-homepage-hover.png'" onmouseout="this.src='/img/homepage/product-social/twitter-homepage.png'">
								</a>
							</div>
							<div id="pinterest-btn" class="share-pinterest">
								<a href="http://pinterest.com/pin/create/button/?url=http://brabbu.com/en/&media=http://brabbu.com/img/homepage/category-area/small/vellum1-wall-light-lighting-brabbu-2.jpg&description=VELLUM Wall Light by @BRABBU http://goo.gl/TUNRZm" class="pin-it-button" target="_blank" count-layout="horizontal">
								    <img border="0" src="https://www.brabbu.com/img/homepage/product-social/pinterest-homepage.png" title="Pin It" />
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="clear"></div>
			</div>
			<div class="block-bottom">
				<div class="align-left box-hover">
					<img src="https://www.brabbu.com/img/homepage/category-area/small/bemba-rug-brabbu-1.jpg" />
					<div class="hover-homepage hm-extra background-color-hover invisible">
						<span class="name">
							<a href="/en/casegoods/koi-console/">
								koi | console
							</a>
						</span>
					</div>
					<div class="hover-homepage background-color-hover invisible">
						<span class="name">
							<a href="/en/rugs/bemba-rug/">
								bemba | rug
							</a>
						</span>
						<div class="share">
							<div class="share-facebook">
								<a href="http://www.facebook.com/share.php?u=http://brabbu.com/en/rugs/bemba-rug/" title="BRABBU" target="_blank" rel="nofollow" style="float:left;">
									<img alt="Facebook" title="Facebook" src="https://www.brabbu.com/img/homepage/product-social/facebook-homepage.png" onmouseover="this.src='/img/homepage/product-social/facebook-homepage-hover.png'" onmouseout="this.src='/img/homepage/product-social/facebook-homepage.png'">
								</a>
							</div>
							<div class="share-twitter">
								<a href="http://twitter.com/home?status=BEMBA Rug by @BRABBU http://goo.gl/v09YrF" title="BRABBU" target="_blank" rel="nofollow" style="float:left;">
									<img alt="TwitThis" src="https://www.brabbu.com/img/homepage/product-social/twitter-homepage.png" onmouseover="this.src='/img/homepage/product-social/twitter-homepage-hover.png'" onmouseout="this.src='/img/homepage/product-social/twitter-homepage.png'">
								</a>
							</div>
							<div id="pinterest-btn" class="share-pinterest">
								<a href="http://pinterest.com/pin/create/button/?url=http://brabbu.com/en/&media=http://brabbu.com/img/homepage/category-area/small/bemba-rug-brabbu-1.jpg&description=BEMBA Rug by @BRABBU http://goo.gl/v09YrF" class="pin-it-button" target="_blank" count-layout="horizontal">
								    <img border="0" src="https://www.brabbu.com/img/homepage/product-social/pinterest-homepage.png" title="Pin It" />
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="align-right image-category">
					<p class="category-text">
						<a href="/en/rugs/"> rugs </a>
					</p>
					<p class="piece-text"><a href="/en/rugs/gobi-rug/"> bemba | rug </a></p>
					<a href="/en/rugs/">
						<img src="https://www.brabbu.com/img/homepage/category-area/small/bemba-rug-brabbu-2.jpg"/>
					</a>
				</div>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="block align-right box-hover">
			<img src="https://www.brabbu.com/img/homepage/category-area/large/bold-collection-upholstery.jpg" />
			<div class="hover-homepage background-color-hover invisible">
				<span class="name">
					<a href="/en/upholstery/">
						see here
					</a>
				</span>
			</div>
			
		</div>
		<div class="clear"></div>
	</div>
	<div id="row" class="home_mr-top" style='display:none'>
		<div class="general-partners b-catalogue "><a href="http://www.brabbu.com/en/catalogue.php"><img src="https://www.brabbu.com/img/general/more/download-catalogue-1_.jpg" onmouseover="this.src='/img/general/more/download-catalogue-2_.jpg'" onmouseout="this.src='/img/general/more/download-catalogue-1_.jpg'"></a></div>
	</div>

	<div id="middle-info" style='display:none'>
		<div class="middle-info-box">
			<a href="/en/news-events">NEWS AND EVENTS</a>
		</div>
		<div class="verticalLine"></div>
		<div class="middle-info-box">
			<a href="/en/video.php">BRAND VIDEOS</a>
		</div>
		<div class="verticalLine"></div>
		<div class="middle-info-box">
			<a href="/en/partners-products.php">PARTNERS PRODUCTS</a>
		</div>
		<div class="verticalLine"></div>
		<div class="middle-info-box">
			<a href="/en/inspiration-and-ideas/">INSPIRATION&IDEAS</a>
		</div>
		<div class="clear"></div>
	</div>
	<div id="row" class="home_mr-top" style='display:none'>
		<div class="align-left handmade-video">
			<iframe width="667" height="375" src="https://www.youtube.com/embed/videoseries?list=PL5oj4yERzQErZNyfjZGOUl3zKIQ4gYZOn&amp;hl=en_US&amp;autoplay=0" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="align-right">
			<a href="/en/ready-to-ship.php" target="_blank">
				<img src="https://www.brabbu.com/img/homepage/category-area/brabbu-download-stock-list.jpg">
			</a>
		</div>
	</div>
	<div id="row" class="home_mr-top" style='display:none'>
		<div class="art-area">
			<form id="newsletter-form" class="form-newsletter" action="/actions/brabbu_newsletter_subscribe.php" method="post" data-parsley-validate>
				<p><b>subscribe</b></p>
				<input type="email" class="field-input" name="inputEmail" placeholder="you@email.com" required>
				<button type="submit" name="submit" class="field-submit">send</button>
            </form>             
		</div>
	</div>
	<div id="row" class="home_mr-top" style='display:none'>
		<!-- Project -->
		<div class="portrait-wallpaper box-hover">
			<a href="/en/projects/">
				<img src="https://www.brabbu.com/img/homepage/projects-press_kit-covers/brabbu-in-projects.jpg" />
			</a>
			<div class="hover-homepage background-color-hover invisible">
				<span class="name">
					<a href="/en/projects/">
						see here our projects
					</a>
				</span>
				<div class="share">
					<div class="share-facebook">
						<a href="http://www.facebook.com/share.php?u=http://brabbu.com/en/projects/" title="BRABBU" target="_blank" rel="nofollow" style="float:left;">
							<img alt="Facebook" title="Facebook" src="https://www.brabbu.com/img/homepage/product-social/facebook-homepage.png" onmouseover="this.src='/img/homepage/product-social/facebook-homepage-hover.png'" onmouseout="this.src='/img/homepage/product-social/facebook-homepage.png'">
						</a>
					</div>
					<div class="share-twitter">
						<a href="http://twitter.com/home?status=@BRABBU in the most luxury project http://goo.gl/AquihY" title="BRABBU" target="_blank" rel="nofollow" style="float:left;">
							<img alt="TwitThis" src="https://www.brabbu.com/img/homepage/product-social/twitter-homepage.png" onmouseover="this.src='/img/homepage/product-social/twitter-homepage-hover.png'" onmouseout="this.src='/img/homepage/product-social/twitter-homepage.png'">
						</a>
					</div>
					<div id="pinterest-btn" class="share-pinterest">
						<a href="http://pinterest.com/pin/create/button/?url=http://brabbu.com/en/&media=http://www.brabbu.com/en/projects/img/first-slide/1-zhukovka-49.jpg&description=@BRABBU in the most luxury project http://goo.gl/AquihY" class="pin-it-button" target="_blank" count-layout="horizontal">
						    <img border="0" src="https://www.brabbu.com/img/homepage/product-social/pinterest-homepage.png" title="Pin It" />
						</a>
					</div>
				</div>
			</div>
		</div>
		<!-- Capas Press -->
		<div class="portrait-wallpaper box-hover">
			<div class="flexslider">
				<ul class="slides">
				    <li class="box-hover">
						<a href="/en/press/pressarea-login.php" target="_blank">
							<img src="https://www.brabbu.com/img/homepage/projects-press_kit-covers/covers/ad-architectural-digest-maya-armchair-front-cover.jpg" />
						</a>
						<div class="hover-homepage background-color-hover invisible">
							<span class="name">
								<a href="/en/press/pressarea-login.php" target="_blank">
									get your cover here
								</a>
							</span>
							<div class="share">
								<div class="share-facebook">
									<a href="http://www.facebook.com/share.php?u=http://brabbu.com/en/press/" title="BRABBU" target="_blank" rel="nofollow" style="float:left;">
										<img alt="Facebook" title="Facebook" src="https://www.brabbu.com/img/homepage/product-social/facebook-homepage.png" onmouseover="this.src='/img/homepage/product-social/facebook-homepage-hover.png'" onmouseout="this.src='/img/homepage/product-social/facebook-homepage.png'">
									</a>
								</div>
								<div class="share-twitter">
									<a href="http://twitter.com/home?status=@BRABBU at AD Architectural Digest http://goo.gl/BbHfP0" title="BRABBU" target="_blank" rel="nofollow" style="float:left;">
										<img alt="TwitThis" src="https://www.brabbu.com/img/homepage/product-social/twitter-homepage.png" onmouseover="this.src='/img/homepage/product-social/twitter-homepage-hover.png'" onmouseout="this.src='/img/homepage/product-social/twitter-homepage.png'">
									</a>
								</div>
								<div id="pinterest-btn" class="share-pinterest">
									<a href="http://pinterest.com/pin/create/button/?url=http://brabbu.com/en/press/&media=http://brabbu.com/img/homepage/projects-press_kit-covers/covers/ad-architectural-digest-maya-armchair-front-cover.jpg&description=@BRABBU at AD Architectural Digest http://goo.gl/BbHfP0" class="pin-it-button" target="_blank" count-layout="horizontal">
									    <img border="0" src="https://www.brabbu.com/img/homepage/product-social/pinterest-homepage.png" title="Pin It" />
									</a>
								</div>
							</div>
						</div>
				    </li>
				    <li class="box-hover">
						<a href="/en/press/pressarea-login.php" target="_blank">
							<img src="https://www.brabbu.com/img/homepage/projects-press_kit-covers/covers/the-most-hospitality-n20-bar-chair-front-cover.jpg" />
						</a>
						<div class="hover-homepage background-color-hover invisible">
							<span class="name">
								<a href="/en/press/pressarea-login.php" target="_blank">
									get your cover here
								</a>
							</span>
							<div class="share">
								<div class="share-facebook">
									<a href="http://www.facebook.com/share.php?u=http://brabbu.com/en/press/" title="BRABBU" target="_blank" rel="nofollow" style="float:left;">
										<img alt="Facebook" title="Facebook" src="https://www.brabbu.com/img/homepage/product-social/facebook-homepage.png" onmouseover="this.src='/img/homepage/product-social/facebook-homepage-hover.png'" onmouseout="this.src='/img/homepage/product-social/facebook-homepage.png'">
									</a>
								</div>
								<div class="share-twitter">
									<a href="http://twitter.com/home?status=@BRABBU at AD Architectural Digest http://goo.gl/BbHfP0" title="BRABBU" target="_blank" rel="nofollow" style="float:left;">
										<img alt="TwitThis" src="https://www.brabbu.com/img/homepage/product-social/twitter-homepage.png" onmouseover="this.src='/img/homepage/product-social/twitter-homepage-hover.png'" onmouseout="this.src='/img/homepage/product-social/twitter-homepage.png'">
									</a>
								</div>
								<div id="pinterest-btn" class="share-pinterest">
									<a href="http://pinterest.com/pin/create/button/?url=http://brabbu.com/en/press/&media=http://brabbu.com/img/homepage/projects-press_kit-covers/covers/the-most-hospitality-n20-bar-chair-front-cover.jpg&description=@BRABBU at AD Architectural Digest http://goo.gl/BbHfP0" class="pin-it-button" target="_blank" count-layout="horizontal">
									    <img border="0" src="https://www.brabbu.com/img/homepage/product-social/pinterest-homepage.png" title="Pin It" />
									</a>
								</div>
							</div>
						</div>
				    </li>
				    <li class="box-hover">
						<a href="/en/press/pressarea-login.php" target="_blank">
							<img src="https://www.brabbu.com/img/homepage/projects-press_kit-covers/covers/mfl-soleil-wall-light-front-cover.jpg" />
						</a>
						<div class="hover-homepage background-color-hover invisible">
							<span class="name">
								<a href="/en/press/pressarea-login.php" target="_blank">
									get your cover here
								</a>
							</span>
							<div class="share">
								<div class="share-facebook">
									<a href="http://www.facebook.com/share.php?u=http://brabbu.com/en/press/" title="BRABBU" target="_blank" rel="nofollow" style="float:left;">
										<img alt="Facebook" title="Facebook" src="https://www.brabbu.com/img/homepage/product-social/facebook-homepage.png" onmouseover="this.src='/img/homepage/product-social/facebook-homepage-hover.png'" onmouseout="this.src='/img/homepage/product-social/facebook-homepage.png'">
									</a>
								</div>
								<div class="share-twitter">
									<a href="http://twitter.com/home?status=@BRABBU at AD Architectural Digest http://goo.gl/BbHfP0" title="BRABBU" target="_blank" rel="nofollow" style="float:left;">
										<img alt="TwitThis" src="https://www.brabbu.com/img/homepage/product-social/twitter-homepage.png" onmouseover="this.src='/img/homepage/product-social/twitter-homepage-hover.png'" onmouseout="this.src='/img/homepage/product-social/twitter-homepage.png'">
									</a>
								</div>
								<div id="pinterest-btn" class="share-pinterest">
									<a href="http://pinterest.com/pin/create/button/?url=http://brabbu.com/en/press/&media=http://brabbu.com/img/homepage/projects-press_kit-covers/covers/mfl-soleil-wall-light-front-cover.jpg&description=@BRABBU at AD Architectural Digest http://goo.gl/BbHfP0" class="pin-it-button" target="_blank" count-layout="horizontal">
									    <img border="0" src="https://www.brabbu.com/img/homepage/product-social/pinterest-homepage.png" title="Pin It" />
									</a>
								</div>
							</div>
						</div>
				    </li>
				    <li class="box-hover">
						<a href="/en/press/pressarea-login.php" target="_blank">
							<img src="https://www.brabbu.com/img/homepage/projects-press_kit-covers/covers/vertu-maree-sofa-front-cover.jpg" />
						</a>
						<div class="hover-homepage background-color-hover invisible">
							<span class="name">
								<a href="/en/press/pressarea-login.php" target="_blank">
									get your cover here
								</a>
							</span>
							<div class="share">
								<div class="share-facebook">
									<a href="http://www.facebook.com/share.php?u=http://brabbu.com/en/press/" title="BRABBU" target="_blank" rel="nofollow" style="float:left;">
										<img alt="Facebook" title="Facebook" src="https://www.brabbu.com/img/homepage/product-social/facebook-homepage.png" onmouseover="this.src='/img/homepage/product-social/facebook-homepage-hover.png'" onmouseout="this.src='/img/homepage/product-social/facebook-homepage.png'">
									</a>
								</div>
								<div class="share-twitter">
									<a href="http://twitter.com/home?status=@BRABBU at AD Architectural Digest http://goo.gl/BbHfP0" title="BRABBU" target="_blank" rel="nofollow" style="float:left;">
										<img alt="TwitThis" src="https://www.brabbu.com/img/homepage/product-social/twitter-homepage.png" onmouseover="this.src='/img/homepage/product-social/twitter-homepage-hover.png'" onmouseout="this.src='/img/homepage/product-social/twitter-homepage.png'">
									</a>
								</div>
								<div id="pinterest-btn" class="share-pinterest">
									<a href="http://pinterest.com/pin/create/button/?url=http://brabbu.com/en/press/&media=http://brabbu.com/img/homepage/projects-press_kit-covers/covers/vertu-maree-sofa-front-cover.jpg&description=@BRABBU at AD Architectural Digest http://goo.gl/BbHfP0" class="pin-it-button" target="_blank" count-layout="horizontal">
									    <img border="0" src="https://www.brabbu.com/img/homepage/product-social/pinterest-homepage.png" title="Pin It" />
									</a>
								</div>
							</div>
						</div>
				    </li>
				    <li class="box-hover">
						<a href="/en/press/pressarea-login.php" target="_blank">
							<img src="https://www.brabbu.com/img/homepage/projects-press_kit-covers/covers/coveted-karoo-armchair-front-cover.jpg" />
						</a>
						<div class="hover-homepage background-color-hover invisible">
							<span class="name">
								<a href="/en/press/pressarea-login.php" target="_blank">
									get your cover here
								</a>
							</span>
							<div class="share">
								<div class="share-facebook">
									<a href="http://www.facebook.com/share.php?u=http://brabbu.com/en/press/" title="BRABBU" target="_blank" rel="nofollow" style="float:left;">
										<img alt="Facebook" title="Facebook" src="https://www.brabbu.com/img/homepage/product-social/facebook-homepage.png" onmouseover="this.src='/img/homepage/product-social/facebook-homepage-hover.png'" onmouseout="this.src='/img/homepage/product-social/facebook-homepage.png'">
									</a>
								</div>
								<div class="share-twitter">
									<a href="http://twitter.com/home?status=@BRABBU at Coveted Edition http://goo.gl/BbHfP0" title="BRABBU" target="_blank" rel="nofollow" style="float:left;">
										<img alt="TwitThis" src="https://www.brabbu.com/img/homepage/product-social/twitter-homepage.png" onmouseover="this.src='/img/homepage/product-social/twitter-homepage-hover.png'" onmouseout="this.src='/img/homepage/product-social/twitter-homepage.png'">
									</a>
								</div>
								<div id="pinterest-btn" class="share-pinterest">
									<a href="http://pinterest.com/pin/create/button/?url=http://brabbu.com/en/press/&media=http://brabbu.com/img/homepage/projects-press_kit-covers/covers/covetedition-karoo-armchair-front-cover.jpg&description=@BRABBU at AD Architectural Digest http://goo.gl/BbHfP0" class="pin-it-button" target="_blank" count-layout="horizontal">
									    <img border="0" src="https://www.brabbu.com/img/homepage/product-social/pinterest-homepage.png" title="Pin It" />
									</a>
								</div>
							</div>
						</div>
				    </li>
				    <li class="box-hover">
						<a href="/en/press/pressarea-login.php" target="_blank">
							<img src="https://www.brabbu.com/img/homepage/projects-press_kit-covers/covers/coveted-maya-armchair-front-cover.jpg" />
						</a>
						<div class="hover-homepage background-color-hover invisible">
							<span class="name">
								<a href="/en/press/pressarea-login.php" target="_blank">
									get your cover here
								</a>
							</span>
							<div class="share">
								<div class="share-facebook">
									<a href="http://www.facebook.com/share.php?u=http://brabbu.com/en/press/" title="BRABBU" target="_blank" rel="nofollow" style="float:left;">
										<img alt="Facebook" title="Facebook" src="https://www.brabbu.com/img/homepage/product-social/facebook-homepage.png" onmouseover="this.src='/img/homepage/product-social/facebook-homepage-hover.png'" onmouseout="this.src='/img/homepage/product-social/facebook-homepage.png'">
									</a>
								</div>
								<div class="share-twitter">
									<a href="http://twitter.com/home?status=@BRABBU at Coveted Edition http://goo.gl/BbHfP0" title="BRABBU" target="_blank" rel="nofollow" style="float:left;">
										<img alt="TwitThis" src="https://www.brabbu.com/img/homepage/product-social/twitter-homepage.png" onmouseover="this.src='/img/homepage/product-social/twitter-homepage-hover.png'" onmouseout="this.src='/img/homepage/product-social/twitter-homepage.png'">
									</a>
								</div>
								<div id="pinterest-btn" class="share-pinterest">
									<a href="http://pinterest.com/pin/create/button/?url=http://brabbu.com/en/press/&media=http://brabbu.com/img/homepage/projects-press_kit-covers/covers/covetedition-maya-armchair-front-cover.jpg&description=@BRABBU at AD Architectural Digest http://goo.gl/BbHfP0" class="pin-it-button" target="_blank" count-layout="horizontal">
									    <img border="0" src="https://www.brabbu.com/img/homepage/product-social/pinterest-homepage.png" title="Pin It" />
									</a>
								</div>
							</div>
						</div>
				    </li>
				    <li class="box-hover">
						<a href="/en/press/pressarea-login.php" target="_blank">
							<img src="https://www.brabbu.com/img/homepage/projects-press_kit-covers/covers/hpmkt-tellus-armchair-front-cover.jpg" />
						</a>
						<div class="hover-homepage background-color-hover invisible">
							<span class="name">
								<a href="/en/press/pressarea-login.php" target="_blank">
									get your cover here
								</a>
							</span>
							<div class="share">
								<div class="share-facebook">
									<a href="http://www.facebook.com/share.php?u=http://brabbu.com/en/press/" title="BRABBU" target="_blank" rel="nofollow" style="float:left;">
										<img alt="Facebook" title="Facebook" src="https://www.brabbu.com/img/homepage/product-social/facebook-homepage.png" onmouseover="this.src='/img/homepage/product-social/facebook-homepage-hover.png'" onmouseout="this.src='/img/homepage/product-social/facebook-homepage.png'">
									</a>
								</div>
								<div class="share-twitter">
									<a href="http://twitter.com/home?status=@BRABBU at AD Architectural Digest http://goo.gl/BbHfP0" title="BRABBU" target="_blank" rel="nofollow" style="float:left;">
										<img alt="TwitThis" src="https://www.brabbu.com/img/homepage/product-social/twitter-homepage.png" onmouseover="this.src='/img/homepage/product-social/twitter-homepage-hover.png'" onmouseout="this.src='/img/homepage/product-social/twitter-homepage.png'">
									</a>
								</div>
								<div id="pinterest-btn" class="share-pinterest">
									<a href="http://pinterest.com/pin/create/button/?url=http://brabbu.com/en/press/&media=http://brabbu.com/img/homepage/projects-press_kit-covers/covers/hpmkt-tellus-armchair-front-cover.jpg&description=@BRABBU at AD Architectural Digest http://goo.gl/BbHfP0" class="pin-it-button" target="_blank" count-layout="horizontal">
									    <img border="0" src="https://www.brabbu.com/img/homepage/product-social/pinterest-homepage.png" title="Pin It" />
									</a>
								</div>
							</div>
						</div>
				    </li>
				</ul>
			</div>
		</div>
		<!-- press kit -->
		<div class="portrait-wallpaper-last box-hover">
			<a href="/en/press_kit.php" target="_blank">
				<img src="https://www.brabbu.com/img/homepage/projects-press_kit-covers/brabbu-press-kit.jpg" />
			</a>
			<div class="hover-homepage background-color-hover invisible">
				<span class="name">
					<a href="/en/press_kit.php">
						download here
					</a>
				</span>
				<div class="share">
					<div class="share-facebook">
						<a href="http://www.facebook.com/share.php?u=http://brabbu.com/en/" title="BRABBU" target="_blank" rel="nofollow" style="float:left;">
							<img alt="Facebook" title="Facebook" src="https://www.brabbu.com/img/homepage/product-social/facebook-homepage.png" onmouseover="this.src='/img/homepage/product-social/facebook-homepage-hover.png'" onmouseout="this.src='/img/homepage/product-social/facebook-homepage.png'">
						</a>
					</div>
					<div class="share-twitter">
						<a href="http://twitter.com/home?status=Press Kit by @BRABBU http://goo.gl/QMEutd" title="BRABBU" target="_blank" rel="nofollow" style="float:left;">
							<img alt="TwitThis" src="https://www.brabbu.com/img/homepage/product-social/twitter-homepage.png" onmouseover="this.src='/img/homepage/product-social/twitter-homepage-hover.png'" onmouseout="this.src='/img/homepage/product-social/twitter-homepage.png'">
						</a>
					</div>
					<div id="pinterest-btn" class="share-pinterest">
						<a href="http://pinterest.com/pin/create/button/?url=http://brabbu.com/img/homepage/projects-press_kit-covers/brabbu-press-kit.jpg&description=Press Kit by @BRABBU http://goo.gl/QMEutd" class="pin-it-button" target="_blank" count-layout="horizontal">
						    <img border="0" src="https://www.brabbu.com/img/homepage/product-social/pinterest-homepage.png" title="Pin It" />
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="row" class="home_mr-top" style='display:none'>
		<div class="box-hover" style="margin-bottom: 20px;">
			<div class="flexslider">
				<ul class="slides">
				    <li class="box-hover">
						<a href="/en/upholstery/naj-dining-chair/">
							<img src="https://www.brabbu.com/img/homepage/grid-wallpaper/product-option/1-naj-dining-chair-product-option.png" />
						</a>
				    </li>
				    <li class="box-hover">
						<a href="/en/upholstery/ibis-bar-chair/">
							<img src="https://www.brabbu.com/img/homepage/grid-wallpaper/product-option/2-ibis-bar-chair-product-option.png" />
						</a>
				    </li>
				    <li class="box-hover">
						<a href="/en/upholstery/begonia-armchair/">
							<img src="https://www.brabbu.com/img/homepage/grid-wallpaper/product-option/3-begonia-armchair-product-option.png" />
						</a>
				    </li>
				    <li class="box-hover">
						<a href="/en/upholstery/como-sofa/">
							<img src="https://www.brabbu.com/img/homepage/grid-wallpaper/product-option/4-como-sofa-product-option.png" />
						</a>
				    </li>
				</ul>
			</div>
		</div>
	</div>
</div>
﻿<div id="side-ready-to-ship" class="side-ready-to-ship-hidden" style="display:none;">
	<div class="align-right">
		<div class="close-div">	
			<img src="https://www.brabbu.com/img/general/ready-to-ship/close-btn-1-new.png" onclick="showDiv()" onmouseover="this.src='/img/general/ready-to-ship/close-btn-2.png'" onmouseout="this.src='/img/general/ready-to-ship/close-btn-1-new.png'" alt="Close Botton" />
		</div>
		<div class="side-ready-to-ship-img">
			<a href="/en/in-stock.php" target="_blank">
				<img src="https://www.brabbu.com/img/general/ready-to-ship/brabbu-ready-to-ship-side-new.png" alt="BRABBU Ready to ship" />
			</a>
		</div>
	</div>
</div><div class="general-partners">
	
	<div class="clear"></div>

