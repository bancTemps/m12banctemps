<?php

class GlobalTableSeeder extends Seeder {

    public function run()
    {
       DB::table('banctemps')->insert( array(
           array(
                'puntos_iniciales'              => 200,
                'puntos_minimos'                => 0,
                'dias_inactividad_servicio'     => 60,
                'dias_confirmacion_servicio'    => 15,
                'dias_inactividad_luser'        => 60,
            )      
       ));
    }

}
