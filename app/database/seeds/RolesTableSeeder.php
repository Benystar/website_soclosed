<?php

class RolesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('roles')->delete();


        $roles = array(
                    array(
                        'label'         => 'Admin',
                        'description'   => 'Administrateur du site So-Closed',                      
                        'created_at'    => new DateTime,
                        'updated_at'    => new DateTime,
                    )
        );

        DB::table('roles')->insert( $roles );
    }
}