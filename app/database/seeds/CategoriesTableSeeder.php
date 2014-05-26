<?php

class CategoriesTableSeeder extends Seeder {

    
    public function run()
    {
        DB::table('categories')->delete();


        DB::table('categories')->insert( array(
            array(                
                'nom'      => 'Pintura',
                'descripcion'       => 'Pintar casas, fachadas, cuadros...',
                'slug' => 'pintura',
            ),
             array(                
                'nom'      => 'Servicios',
                'descripcion'       => 'Arreglar casas, fachadas, cosicas...',
                'slug' => 'pintura2',
             
            ),
             array(                
                'nom'      => 'Negros',
                'descripcion'       => 'Robar casas, fachadas, cuadros...',
                'slug' => 'pintura3',
                
            ),
          ));
    $this->command->info('Categorias añadidas, biches');
    }

}

