<?
namespace app\models;

class Furniture{
	public function getData(){
		$data = [
			(object)[
				'id' => '1',
				'title' => 'Прикроватная тумба Classic',
				'image' => "/images/furniture/1/meet-studio-thumb-furniture-1.png",
				'link' => '/furniture/1'
			],
			(object)[
				'id' => '2',
				'title' => 'Прикроватная тумба',
				'image' => '/images/furniture/2/meet-studio-thumb-furniture-2.png',
				'link' => '/furniture/2'
			],
			(object)[
				'id' => '3',
				'title' => 'Банкетка',
				'image' => '/images/furniture/3/meet-studio-thumb-furniture-3.png',
				'link' => '/furniture/3'
			],
			(object)[
				'id' => '4',
				'title' => 'Вешалка для одежды',
				'image' => '/images/furniture/4/1.jpg',
				'link' => '/furniture/4'
			]
		];

		return (object)$data;
	}
}