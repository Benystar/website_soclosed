<?php

class Rel_user_role extends Eloquent{
	public function role()	{
        
		return $this->belongsTo('role', 'id');
	}

	public function user()	{
        
		return $this->belongsTo('user', 'id');
	}
    
}