<?php

class CategoriesTableSeeder extends Seeder {

    
    public function run()
    {
        DB::table('categories')->delete();


        DB::table('categories')->insert( array(
            array(                
                'nom'      => 'Artes',
                'descripcion'       => 'Pintura, escultura, Música...',
                'slug' => 'artes',
            ),
             array(                
                'nom'      => 'Lenguas',
                'descripcion'       => 'Inglés, Alemán, Español...',
                'slug' => 'lenguas',
             
            ),
             array(                
                'nom'      => 'Informática',
                'descripcion'       => 'Páginas web, ofimática, 3D...',
                'slug' => 'informatica',
                
            ),
             array(                
                'nom'      => 'Costura',
                'descripcion'       => 'Coser, bordar, tejer...',
                'slug' => 'costura',
                
            ),
             array(                
                'nom'      => 'Cocina',
                'descripcion'       => 'Cocinar, recetas...',
                'slug' => 'cocina',
                
            ),
             array(                
                'nom'      => 'Fontaneria',
                'descripcion'       => 'Reparaciones...',
                'slug' => 'fontaneria',
                
            ),
             array(                
                'nom'      => 'Electrónica',
                'descripcion'       => 'Electrónica',
                'slug' => 'electronica',
                
            )
          ));
    $this->command->info('Categorias añadidas');
    }

}

