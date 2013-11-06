<?php

class HelperClass {

	public static function convertDate($sale_date){

		$Carbon = new Carbon\Carbon();
		$var = $Carbon->createFromTimestamp(strtotime($sale_date))->formatLocalized('%d %B %Y');

		return $var;
	}
}

?>