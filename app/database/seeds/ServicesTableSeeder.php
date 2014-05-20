<?php

class ServicesTableSeeder extends Seeder {

    
    public function run()
    {
        DB::table('services')->delete();

        $user_id = User::first()->id;

        DB::table('services')->insert( array(
            array(
                'user_id'    => $user_id,
                'nom'      => 'Pinto paredes, coño',
                'descripcio'       => 'lorem-ipsum-dolor-sit-amet',
                'dataInici'    => new DateTime('2014-01-01'),
                'dataFinal' => new DateTime('2014-01-01'),
                'duracio' => 3,
                'localitzacio' => 'Barcelona',
                'punts' => 125,
                'slug' => 'pinto-paredes-cono',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ),
            array(
                'user_id'    => $user_id,
                'nom'      => 'Pinto penes, coño',
                'descripcio'       => 'lorem-ipsum-dolor-sit-amet',
                'dataInici'    => new DateTime('2014-01-01'),
                'dataFinal' => new DateTime('2014-01-01'),
                'duracio' => 3,
                'localitzacio' => 'Madrid',
                'punts' => 125,
                'slug' => 'pinto-paredes-cono',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ),
            array(
                'user_id'    => $user_id,
                'nom'      => 'Sueldo tuercas, coño',
                'descripcio'       => 'lorem-ipsum-dolor-sit-amet',
                'dataInici'    => new DateTime('2014-01-01'),
                'dataFinal' => new DateTime('2014-01-01'),
                'duracio' => 3,
                'localitzacio' => 'Finlandia',
                'punts' => 125,
                'slug' => 'sueldo-tuercas-cono',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ))
        );
    $this->command->info('Servicios añadidos, coño');
    }

}

