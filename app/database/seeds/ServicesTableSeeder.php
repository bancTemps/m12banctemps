<?php

class ServicesTableSeeder extends Seeder {

    
    public function run()
    {
        DB::table('services')->delete();

        $user_id = User::first()->id;

        DB::table('services')->insert( array(
            array(
                'user_id'    => 1,
                'nom'      => 'Pinto paredes',
                'descripcio'       => 'lorem-ipsum-dolor-sit-amet',
                'categoria_id'  =>  1,
                'dataInici'    => '2014-01-01',
                'dataFinal' => '2014-01-01',
                'duracio' => 3,
                'municipi_id' => 2,
                'punts' => 125,
                'slug' => 'pinto-paredes',
            ),
            array(
                'user_id'    => 2,
                'nom'      => 'Cambio Puertas',
                'descripcio'       => 'lorem-ipsum-dolor-sit-amet',
                'categoria_id'  =>  2,
                'dataInici'    => '2014-01-01',
                'dataFinal' => '2014-01-01',
                'duracio' => 3,
                'municipi_id' => 1,
                'punts' => 125,
                'slug' => 'cambio-puertas',
            ),
            array(
                'user_id'    => 3,
                'nom'      => 'Pinto casuchas',
                'descripcio'       => 'lorem-penes-dolor-sit-amet',
                'categoria_id'  =>  3,
                'dataInici'    => '2014-01-01',
                'dataFinal' => '2014-01-01',
                'duracio' => 3,
                'municipi_id' => 1,
                'punts' => 125,
                'slug' => 'pinto-casuchas',
            ),
            array(
                'user_id'    => 4,
                'nom'      => 'Sueldo tuercas',
                'descripcio'       => 'lorem-ipsum-dolor-sit-amet',
                'categoria_id'  =>  4,
                'dataInici'    => '2014-01-01',
                'dataFinal' => '2014-01-01',
                'duracio' => 3,
                'municipi_id' => 1,
                'punts' => 125,
                'slug' => 'sueldo-tuercas',
            ))
        );
    $this->command->info('Servicios añadidos');
    }

}

