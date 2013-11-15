<?php

class Rel_order_items extends Eloquent{
	public function order()	{
        
		return $this->belongsTo('Order', 'id_order');
	}

	public function item()	{
        
		return $this->belongsTo('Item', 'id_item');
	}
    
}