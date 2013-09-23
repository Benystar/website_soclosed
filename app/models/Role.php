<?php

class Role extends Eloquent{
	public function rel_user_roles()	{
        
		return $this->hasMany('Rel_user_role', 'id_role');
	}
}