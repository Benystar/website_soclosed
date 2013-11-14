<?php

class Item extends Eloquent{
	public function sale()
	{
        return $this->belongsTo('Sale','id_sale');
    }
}