<?
namespace app\models;

class Furniture{
	public function getData(){
		$data = [
			'1' => (object)[
				'id' => '1',
				'title' => 'Прикроватная тумба Classic',
				'image' => "/images/furniture/1/meet-studio-thumb-furniture-1.png",
				'link' => '/furniture/1',
				'images' => [
					'/images/furniture/1/tumba-classic-1.jpg',
					'/images/furniture/1/tumba-classic-2.jpg',
					'/images/furniture/1/tumba-classic-3.jpg',
					'/images/furniture/1/tumba-classic-4.jpg',
					'/images/furniture/1/tumba-classic-5.jpg',
					'/images/furniture/1/tumba-classic-6.jpg',
					'/images/furniture/1/tumba-classic-7.jpg'
				],
				'description' => '
						<table class="table">
							<tbody>
								<tr>
									<td>Размеры</td>
									<td>D 51 cm / 7,87” <br> H 60 сm / 11”</td>
								</tr>
			
							</tbody>
						</table>
						<br>
						<img src="/images/furniture/1/furniture-1-schema.png" class="img-fluid" />',
				'video' => '<iframe width="100%" height="315" src="https://www.youtube.com/embed/VpSIxnuhfz8" frameborder="0" allowfullscreen></iframe>'
			],
			'2' => (object)[
				'id' => '2',
				'title' => 'Прикроватная тумба',
				'image' => '/images/furniture/2/meet-studio-thumb-furniture-2.png',
				'link' => '/furniture/2',
				'images' => [
					'/images/furniture/2/1.jpg',
					'/images/furniture/2/2.jpg',
					'/images/furniture/2/3.jpg'
				]
			],
			'3' => (object)[
				'id' => '3',
				'title' => 'Банкетка',
				'image' => '/images/furniture/3/meet-studio-thumb-furniture-3.png',
				'link' => '/furniture/3',
				'images' => [
					'/images/furniture/3/1.jpg',
					'/images/furniture/3/2.jpg',
					'/images/furniture/3/3.jpg',
					'/images/furniture/meet-interriour.jpg'
				],
				'description' => '
						<table class="table">
							<tbody>
								<tr>
									<td>Размеры</td>
									<td>L 104 cm / 40,95”<br>D 41 cm / 16,15”<br>H 44 сm / 17,3”</td>
								</tr>
								<tr>
									<td>Описание изделия</td>
									<td>
										Банкетка в данном исполнении изготовлена из пищевой нержавеющей стали. Высокая степень полировки до зеркального отражения. Мягкое сиденье выполнено из светлого велюра серо- голубого цвета.
									</td>
								</tr>
								<tr>
									<td>Материал изделия</td>
									<td>Полированная нержавеющая сталь, велюр</td>
								</tr>
							</tbody>
						</table>
						<br>
						<img src="/images/furniture/3/furniture-3-schema.png" class="img-fluid" />'
			],
			'4' => (object)[
				'id' => '4',
				'title' => 'Вешалка для одежды',
				'image' => '/images/furniture/4/1.jpg',
				'link' => '/furniture/4',
				'images' => [
					'/images/furniture/4/1.jpg',
					'/images/furniture/4/2.jpg',
					'/images/furniture/4/3.jpg',
					'/images/furniture/4/4.jpg',
					'/images/furniture/4/5.jpg',
					'/images/furniture/4/6.jpg',
					'/images/furniture/4/7.jpg'
				],
				'description' => '
						<table class="table">
							<tbody>
								<tr>
									<td>Размеры</td>
									<td>L 58 cm / 22,83”<br>D 20 cm / 7,87” <br> H 28 сm / 11”</td>
								</tr>
								<tr>
									<td>Описание изделия</td>
									<td>
										Вешалка настенная. В данном исполнении выполнена из пищевой нержавеющей стали. Высокая степень полировки до зеркального отражения.
									</td>
								</tr>
								<tr>
									<td>Материал изделия</td>
									<td>Полированная нержавеющая сталь</td>
								</tr>
							</tbody>
						</table>
						<br>
						<img src="/images/furniture/4/furniture-4-schema.png" class="img-fluid" />'
			],
			'5' => (object)[
				'id' => '5',
				'title' => 'Шкаф',
				'image' => '/images/furniture/5/1-thumb.jpg',
				'link' => '/furniture/5',
				'images' => [
					'/images/furniture/5/1.jpg',
					'/images/furniture/5/2.jpg',
					'/images/furniture/5/3.jpg',
					'/images/furniture/5/4.jpg',
					'/images/furniture/5/5.jpg',
					'/images/furniture/5/6.jpg',
					'/images/furniture/5/7-1.jpg',
					'/images/furniture/5/8.jpg',
					'/images/furniture/5/9.jpg'
				],
				'description' => '
						<table class="table">
							<tbody>
								<tr>
									<td>Размеры</td>
                                                                        <td>L 125 cm / 49,21"<br/> D 39 cm  / 15,35"<br/> H 240 cm/ 94,5"</td>
                                                                  </tr>
                                                                  <tr>
                                                                          <td>Описание изделия</td>
                                                                          <td>
Обувной шкаф выполнен из HDF фанерованный натуральным шпоном клена сикамора с инкрустацией латуни полированной в зеркало. Внутреннее наполнение выполнено из натурального шпона Кото жемчужного цвета.
                                                                          </td>
                                                                  </tr>
                                                                  <tr>
                                                                          <td>Материал изделия</td>
                                                                          <td>Клен сикамора, латунь полированная, кото</td>
                                                                  </tr>
                                                          </tbody>
                                                  </table>
                                                  <br>
                                                  <img src="/images/furniture/5/furniture-5-schema.png" class="img-fluid" />'
                          ],
			'6' => (object)[
				'id' => '6',
				'title' => 'Зеркало и консоль',
				'image' => '/images/furniture/6/1-thumb.jpg',
				'link' => '/furniture/6',
				'images' => [
					'/images/furniture/6/1.jpg',
					'/images/furniture/6/2.jpg',
					'/images/furniture/6/3.jpg',
				],
				'description' => ''
                              ],
                              '7' => (object)[
                                'id' => '7',
                                'title' => 'Прикроватная тумбочка "Origami"',
                                'image' => '/images/furniture/7/1-thumb.jpg',
                                'link' => '/furniture/7',
                                'images' => [
                                  '/images/furniture/7/1.jpg',
                                  '/images/furniture/7/2.jpg',
                                  '/images/furniture/7/3.jpg',
                                  '/images/furniture/7/4.jpg',
                                ],
                                'description' => ''
                              ]
                  ];

                  return $data;
          }

  }
