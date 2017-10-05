<?
namespace app\models;

class Decor{
	public function getData(){
		$data = [
			'1' => (object)[
				'id' => '1',
				'title' => 'Каменный шпон',
				'image' => "/images/meet-stone.jpg",
				'link' => '/decor/1',
			],
			'2' => (object)[
				'id' => '2',
				'title' => 'Финиши',
				'image' => '/images/decor/2/meet-studio-decor-2-thumb.jpg',
				'link' => '/decor-finish'
			]
		];

		return $data;
	}

}