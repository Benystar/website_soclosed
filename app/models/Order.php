<?php

class Order extends Eloquent{
	public function sale()
	{
        return $this->belongsTo('Sale','id_sale');
    }

   public function rel_order_items(){
        return $this->hasMany('Rel_order_items','id');
    }
}