<?php
// namespace geo;
class Geo {
	protected function getCity () {
		$request = file_get_contents("http://api.sypexgeo.net/json/");
		$array = json_decode($request);
		return $array->city->name_ru;
	} 
	public function printCity () {
		if (!isset($_SESSION['user'])) { //Чтобы окно с городом показывалось только 1 раз. Пока недоработано. Ответ ни на что не влияет. При обновлении исчезает и без ответа.
			if(!isset($_SESSION['knowCity'])){
				$myCity = $this->getCity();
				echo "<div class=\"cityBox\">Ваш город - ".$myCity."?
				<div class=\"cityYes\">Да</div>
				<div class=\"cityNo\">Нет</div>
				</div>";
				$_SESSION['knowCity'] = $myCity;
			}
		
		}
	}
}
?>