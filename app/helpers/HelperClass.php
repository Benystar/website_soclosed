<?php

class HelperClass {

	public static function convertDate($sale_date){

		//$Carbon = new Carbon\Carbon();
		//$var = $Carbon->createFromTimestamp(strtotime($sale_date))->formatLocalized('%d/%m/%Y');

		//str_replace("é", "&eacute;",$var);

		return strftime ('%d/%m/%Y', strtotime($sale_date));

		//return $var;
	}
}

?>