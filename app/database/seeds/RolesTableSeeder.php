<?php

class RolesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('roles')->delete();

        $adminRole = new Role;
        $adminRole->name = 'admin';
        $adminRole->save();

        $commentRole = new Role;
        $commentRole->name = 'comment';
        $commentRole->save();

        $user = User::where('username','=','admin')->first();
        $user->attachRole( $adminRole );

        $user = User::where('username','=','natu')->first();
        $user->attachRole( $commentRole );
        
        $user = User::where('username','=','natu')->first();
        $user->attachRole( $commentRole );
        
        $user = User::where('username','=','oscar')->first();
        $user->attachRole( $commentRole );
        
        $user = User::where('username','=','isma')->first();
        $user->attachRole( $commentRole );
    }

}
