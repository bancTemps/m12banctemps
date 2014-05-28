<?php

class ProvinciasTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('provincias')->truncate();
        
		\DB::table('provincias')->insert(array (
			0 => 
			array (
				'id_provincia' => 2,
				'provincia' => 'Albacete',
			),
			1 => 
			array (
				'id_provincia' => 3,
				'provincia' => 'Alicante/Alacant',
			),
			2 => 
			array (
				'id_provincia' => 4,
				'provincia' => 'Almería',
			),
			3 => 
			array (
				'id_provincia' => 1,
				'provincia' => 'Araba/Álava',
			),
			4 => 
			array (
				'id_provincia' => 33,
				'provincia' => 'Asturias',
			),
			5 => 
			array (
				'id_provincia' => 5,
				'provincia' => 'Ávila',
			),
			6 => 
			array (
				'id_provincia' => 6,
				'provincia' => 'Badajoz',
			),
			7 => 
			array (
				'id_provincia' => 7,
				'provincia' => 'Balears, Illes',
			),
			8 => 
			array (
				'id_provincia' => 8,
				'provincia' => 'Barcelona',
			),
			9 => 
			array (
				'id_provincia' => 48,
				'provincia' => 'Bizkaia',
			),
			10 => 
			array (
				'id_provincia' => 9,
				'provincia' => 'Burgos',
			),
			11 => 
			array (
				'id_provincia' => 10,
				'provincia' => 'Cáceres',
			),
			12 => 
			array (
				'id_provincia' => 11,
				'provincia' => 'Cádiz',
			),
			13 => 
			array (
				'id_provincia' => 39,
				'provincia' => 'Cantabria',
			),
			14 => 
			array (
				'id_provincia' => 12,
				'provincia' => 'Castellón/Castelló',
			),
			15 => 
			array (
				'id_provincia' => 51,
				'provincia' => 'Ceuta',
			),
			16 => 
			array (
				'id_provincia' => 13,
				'provincia' => 'Ciudad Real',
			),
			17 => 
			array (
				'id_provincia' => 14,
				'provincia' => 'Córdoba',
			),
			18 => 
			array (
				'id_provincia' => 15,
				'provincia' => 'Coruña, A',
			),
			19 => 
			array (
				'id_provincia' => 16,
				'provincia' => 'Cuenca',
			),
			20 => 
			array (
				'id_provincia' => 20,
				'provincia' => 'Gipuzkoa',
			),
			21 => 
			array (
				'id_provincia' => 17,
				'provincia' => 'Girona',
			),
			22 => 
			array (
				'id_provincia' => 18,
				'provincia' => 'Granada',
			),
			23 => 
			array (
				'id_provincia' => 19,
				'provincia' => 'Guadalajara',
			),
			24 => 
			array (
				'id_provincia' => 21,
				'provincia' => 'Huelva',
			),
			25 => 
			array (
				'id_provincia' => 22,
				'provincia' => 'Huesca',
			),
			26 => 
			array (
				'id_provincia' => 23,
				'provincia' => 'Jaén',
			),
			27 => 
			array (
				'id_provincia' => 24,
				'provincia' => 'León',
			),
			28 => 
			array (
				'id_provincia' => 27,
				'provincia' => 'Lugo',
			),
			29 => 
			array (
				'id_provincia' => 25,
				'provincia' => 'Lleida',
			),
			30 => 
			array (
				'id_provincia' => 28,
				'provincia' => 'Madrid',
			),
			31 => 
			array (
				'id_provincia' => 29,
				'provincia' => 'Málaga',
			),
			32 => 
			array (
				'id_provincia' => 52,
				'provincia' => 'Melilla',
			),
			33 => 
			array (
				'id_provincia' => 30,
				'provincia' => 'Murcia',
			),
			34 => 
			array (
				'id_provincia' => 31,
				'provincia' => 'Navarra',
			),
			35 => 
			array (
				'id_provincia' => 32,
				'provincia' => 'Ourense',
			),
			36 => 
			array (
				'id_provincia' => 34,
				'provincia' => 'Palencia',
			),
			37 => 
			array (
				'id_provincia' => 35,
				'provincia' => 'Palmas, Las',
			),
			38 => 
			array (
				'id_provincia' => 36,
				'provincia' => 'Pontevedra',
			),
			39 => 
			array (
				'id_provincia' => 26,
				'provincia' => 'Rioja, La',
			),
			40 => 
			array (
				'id_provincia' => 37,
				'provincia' => 'Salamanca',
			),
			41 => 
			array (
				'id_provincia' => 38,
				'provincia' => 'Santa Cruz de Tenerife',
			),
			42 => 
			array (
				'id_provincia' => 40,
				'provincia' => 'Segovia',
			),
			43 => 
			array (
				'id_provincia' => 41,
				'provincia' => 'Sevilla',
			),
			44 => 
			array (
				'id_provincia' => 42,
				'provincia' => 'Soria',
			),
			45 => 
			array (
				'id_provincia' => 43,
				'provincia' => 'Tarragona',
			),
			46 => 
			array (
				'id_provincia' => 44,
				'provincia' => 'Teruel',
			),
			47 => 
			array (
				'id_provincia' => 45,
				'provincia' => 'Toledo',
			),
			48 => 
			array (
				'id_provincia' => 46,
				'provincia' => 'Valencia/València',
			),
			49 => 
			array (
				'id_provincia' => 47,
				'provincia' => 'Valladolid',
			),
			50 => 
			array (
				'id_provincia' => 49,
				'provincia' => 'Zamora',
			),
			51 => 
			array (
				'id_provincia' => 50,
				'provincia' => 'Zaragoza',
			),
		));
	}

}
