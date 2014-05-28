<?php

class MunicipiosTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('municipios')->truncate();
        
		\DB::table('municipios')->insert(array (
			0 => 
			array (
				'id' => 1,
				'id_provincia' => 1,
				'cod_municipio' => 1,
				'DC' => 4,
				'nombre' => 'Alegría-Dulantzi',
			),
			1 => 
			array (
				'id' => 2,
				'id_provincia' => 2,
				'cod_municipio' => 1,
				'DC' => 9,
				'nombre' => 'Abengibre',
			),
			2 => 
			array (
				'id' => 3,
				'id_provincia' => 3,
				'cod_municipio' => 1,
				'DC' => 5,
				'nombre' => 'Adsubia',
			),
			3 => 
			array (
				'id' => 4,
				'id_provincia' => 4,
				'cod_municipio' => 1,
				'DC' => 0,
				'nombre' => 'Abla',
			),
			4 => 
			array (
				'id' => 5,
				'id_provincia' => 5,
				'cod_municipio' => 1,
				'DC' => 3,
				'nombre' => 'Adanero',
			),
			5 => 
			array (
				'id' => 6,
				'id_provincia' => 6,
				'cod_municipio' => 1,
				'DC' => 6,
				'nombre' => 'Acedera',
			),
			6 => 
			array (
				'id' => 7,
				'id_provincia' => 7,
				'cod_municipio' => 1,
				'DC' => 2,
				'nombre' => 'Alaró',
			),
			7 => 
			array (
				'id' => 8,
				'id_provincia' => 8,
				'cod_municipio' => 1,
				'DC' => 8,
				'nombre' => 'Abrera',
			),
			8 => 
			array (
				'id' => 9,
				'id_provincia' => 9,
				'cod_municipio' => 1,
				'DC' => 1,
				'nombre' => 'Abajas',
			),
			9 => 
			array (
				'id' => 10,
				'id_provincia' => 10,
				'cod_municipio' => 1,
				'DC' => 5,
				'nombre' => 'Abadía',
			),
			10 => 
			array (
				'id' => 11,
				'id_provincia' => 11,
				'cod_municipio' => 1,
				'DC' => 2,
				'nombre' => 'Alcalá de los Gazules',
			),
			11 => 
			array (
				'id' => 12,
				'id_provincia' => 12,
				'cod_municipio' => 1,
				'DC' => 7,
				'nombre' => 'Atzeneta del Maestrat',
			),
			12 => 
			array (
				'id' => 13,
				'id_provincia' => 13,
				'cod_municipio' => 1,
				'DC' => 3,
				'nombre' => 'Abenójar',
			),
			13 => 
			array (
				'id' => 14,
				'id_provincia' => 14,
				'cod_municipio' => 1,
				'DC' => 8,
				'nombre' => 'Adamuz',
			),
			14 => 
			array (
				'id' => 15,
				'id_provincia' => 15,
				'cod_municipio' => 1,
				'DC' => 1,
				'nombre' => 'Abegondo',
			),
			15 => 
			array (
				'id' => 16,
				'id_provincia' => 16,
				'cod_municipio' => 1,
				'DC' => 4,
				'nombre' => 'Abia de la Obispalía',
			),
			16 => 
			array (
				'id' => 17,
				'id_provincia' => 17,
				'cod_municipio' => 1,
				'DC' => 0,
				'nombre' => 'Agullana',
			),
			17 => 
			array (
				'id' => 18,
				'id_provincia' => 18,
				'cod_municipio' => 1,
				'DC' => 6,
				'nombre' => 'Agrón',
			),
			18 => 
			array (
				'id' => 19,
				'id_provincia' => 19,
				'cod_municipio' => 1,
				'DC' => 9,
				'nombre' => 'Abánades',
			),
			19 => 
			array (
				'id' => 20,
				'id_provincia' => 20,
				'cod_municipio' => 1,
				'DC' => 3,
				'nombre' => 'Abaltzisketa',
			),
			20 => 
			array (
				'id' => 21,
				'id_provincia' => 21,
				'cod_municipio' => 1,
				'DC' => 0,
				'nombre' => 'Alájar',
			),
			21 => 
			array (
				'id' => 22,
				'id_provincia' => 22,
				'cod_municipio' => 1,
				'DC' => 5,
				'nombre' => 'Abiego',
			),
			22 => 
			array (
				'id' => 23,
				'id_provincia' => 23,
				'cod_municipio' => 1,
				'DC' => 1,
				'nombre' => 'Albanchez de Mágina',
			),
			23 => 
			array (
				'id' => 24,
				'id_provincia' => 24,
				'cod_municipio' => 1,
				'DC' => 6,
				'nombre' => 'Acebedo',
			),
			24 => 
			array (
				'id' => 25,
				'id_provincia' => 25,
				'cod_municipio' => 1,
				'DC' => 9,
				'nombre' => 'Abella de la Conca',
			),
			25 => 
			array (
				'id' => 26,
				'id_provincia' => 26,
				'cod_municipio' => 1,
				'DC' => 2,
				'nombre' => 'Ábalos',
			),
			26 => 
			array (
				'id' => 27,
				'id_provincia' => 27,
				'cod_municipio' => 1,
				'DC' => 8,
				'nombre' => 'Abadín',
			),
			27 => 
			array (
				'id' => 28,
				'id_provincia' => 28,
				'cod_municipio' => 1,
				'DC' => 4,
				'nombre' => 'Acebeda, La',
			),
			28 => 
			array (
				'id' => 29,
				'id_provincia' => 29,
				'cod_municipio' => 1,
				'DC' => 7,
				'nombre' => 'Alameda',
			),
			29 => 
			array (
				'id' => 30,
				'id_provincia' => 30,
				'cod_municipio' => 1,
				'DC' => 1,
				'nombre' => 'Abanilla',
			),
			30 => 
			array (
				'id' => 31,
				'id_provincia' => 31,
				'cod_municipio' => 1,
				'DC' => 8,
				'nombre' => 'Abáigar',
			),
			31 => 
			array (
				'id' => 32,
				'id_provincia' => 32,
				'cod_municipio' => 1,
				'DC' => 3,
				'nombre' => 'Allariz',
			),
			32 => 
			array (
				'id' => 33,
				'id_provincia' => 33,
				'cod_municipio' => 1,
				'DC' => 9,
				'nombre' => 'Allande',
			),
			33 => 
			array (
				'id' => 34,
				'id_provincia' => 34,
				'cod_municipio' => 1,
				'DC' => 4,
				'nombre' => 'Abarca de Campos',
			),
			34 => 
			array (
				'id' => 35,
				'id_provincia' => 35,
				'cod_municipio' => 1,
				'DC' => 7,
				'nombre' => 'Agaete',
			),
			35 => 
			array (
				'id' => 36,
				'id_provincia' => 36,
				'cod_municipio' => 1,
				'DC' => 0,
				'nombre' => 'Arbo',
			),
			36 => 
			array (
				'id' => 37,
				'id_provincia' => 37,
				'cod_municipio' => 1,
				'DC' => 6,
				'nombre' => 'Abusejo',
			),
			37 => 
			array (
				'id' => 38,
				'id_provincia' => 38,
				'cod_municipio' => 1,
				'DC' => 2,
				'nombre' => 'Adeje',
			),
			38 => 
			array (
				'id' => 39,
				'id_provincia' => 39,
				'cod_municipio' => 1,
				'DC' => 5,
				'nombre' => 'Alfoz de Lloredo',
			),
			39 => 
			array (
				'id' => 40,
				'id_provincia' => 40,
				'cod_municipio' => 1,
				'DC' => 9,
				'nombre' => 'Abades',
			),
			40 => 
			array (
				'id' => 41,
				'id_provincia' => 41,
				'cod_municipio' => 1,
				'DC' => 6,
				'nombre' => 'Aguadulce',
			),
			41 => 
			array (
				'id' => 42,
				'id_provincia' => 42,
				'cod_municipio' => 1,
				'DC' => 1,
				'nombre' => 'Abejar',
			),
			42 => 
			array (
				'id' => 43,
				'id_provincia' => 43,
				'cod_municipio' => 1,
				'DC' => 7,
				'nombre' => 'Aiguamúrcia',
			),
			43 => 
			array (
				'id' => 44,
				'id_provincia' => 44,
				'cod_municipio' => 1,
				'DC' => 2,
				'nombre' => 'Ababuj',
			),
			44 => 
			array (
				'id' => 45,
				'id_provincia' => 45,
				'cod_municipio' => 1,
				'DC' => 5,
				'nombre' => 'Ajofrín',
			),
			45 => 
			array (
				'id' => 46,
				'id_provincia' => 46,
				'cod_municipio' => 1,
				'DC' => 8,
				'nombre' => 'Ademuz',
			),
			46 => 
			array (
				'id' => 47,
				'id_provincia' => 47,
				'cod_municipio' => 1,
				'DC' => 4,
				'nombre' => 'Adalia',
			),
			47 => 
			array (
				'id' => 48,
				'id_provincia' => 48,
				'cod_municipio' => 1,
				'DC' => 0,
				'nombre' => 'Abadiño',
			),
			48 => 
			array (
				'id' => 49,
				'id_provincia' => 50,
				'cod_municipio' => 1,
				'DC' => 6,
				'nombre' => 'Abanto',
			),
			49 => 
			array (
				'id' => 50,
				'id_provincia' => 51,
				'cod_municipio' => 1,
				'DC' => 3,
				'nombre' => 'Ceuta',
			),
			50 => 
			array (
				'id' => 51,
				'id_provincia' => 52,
				'cod_municipio' => 1,
				'DC' => 8,
				'nombre' => 'Melilla',
			),
			51 => 
			array (
				'id' => 52,
				'id_provincia' => 1,
				'cod_municipio' => 2,
				'DC' => 9,
				'nombre' => 'Amurrio',
			),
			52 => 
			array (
				'id' => 53,
				'id_provincia' => 2,
				'cod_municipio' => 2,
				'DC' => 4,
				'nombre' => 'Alatoz',
			),
			53 => 
			array (
				'id' => 54,
				'id_provincia' => 3,
				'cod_municipio' => 2,
				'DC' => 0,
				'nombre' => 'Agost',
			),
			54 => 
			array (
				'id' => 55,
				'id_provincia' => 4,
				'cod_municipio' => 2,
				'DC' => 5,
				'nombre' => 'Abrucena',
			),
			55 => 
			array (
				'id' => 56,
				'id_provincia' => 5,
				'cod_municipio' => 2,
				'DC' => 8,
				'nombre' => 'Adrada, La',
			),
			56 => 
			array (
				'id' => 57,
				'id_provincia' => 6,
				'cod_municipio' => 2,
				'DC' => 1,
				'nombre' => 'Aceuchal',
			),
			57 => 
			array (
				'id' => 58,
				'id_provincia' => 7,
				'cod_municipio' => 2,
				'DC' => 7,
				'nombre' => 'Alaior',
			),
			58 => 
			array (
				'id' => 59,
				'id_provincia' => 8,
				'cod_municipio' => 2,
				'DC' => 3,
				'nombre' => 'Aguilar de Segarra',
			),
			59 => 
			array (
				'id' => 60,
				'id_provincia' => 10,
				'cod_municipio' => 2,
				'DC' => 0,
				'nombre' => 'Abertura',
			),
			60 => 
			array (
				'id' => 61,
				'id_provincia' => 11,
				'cod_municipio' => 2,
				'DC' => 7,
				'nombre' => 'Alcalá del Valle',
			),
			61 => 
			array (
				'id' => 62,
				'id_provincia' => 12,
				'cod_municipio' => 2,
				'DC' => 2,
				'nombre' => 'Aín',
			),
			62 => 
			array (
				'id' => 63,
				'id_provincia' => 13,
				'cod_municipio' => 2,
				'DC' => 8,
				'nombre' => 'Agudo',
			),
			63 => 
			array (
				'id' => 64,
				'id_provincia' => 14,
				'cod_municipio' => 2,
				'DC' => 3,
				'nombre' => 'Aguilar de la Frontera',
			),
			64 => 
			array (
				'id' => 65,
				'id_provincia' => 15,
				'cod_municipio' => 2,
				'DC' => 6,
				'nombre' => 'Ames',
			),
			65 => 
			array (
				'id' => 66,
				'id_provincia' => 16,
				'cod_municipio' => 2,
				'DC' => 9,
				'nombre' => 'Acebrón, El',
			),
			66 => 
			array (
				'id' => 67,
				'id_provincia' => 17,
				'cod_municipio' => 2,
				'DC' => 5,
				'nombre' => 'Aiguaviva',
			),
			67 => 
			array (
				'id' => 68,
				'id_provincia' => 18,
				'cod_municipio' => 2,
				'DC' => 1,
				'nombre' => 'Alamedilla',
			),
			68 => 
			array (
				'id' => 69,
				'id_provincia' => 19,
				'cod_municipio' => 2,
				'DC' => 4,
				'nombre' => 'Ablanque',
			),
			69 => 
			array (
				'id' => 70,
				'id_provincia' => 20,
				'cod_municipio' => 2,
				'DC' => 8,
				'nombre' => 'Aduna',
			),
			70 => 
			array (
				'id' => 71,
				'id_provincia' => 21,
				'cod_municipio' => 2,
				'DC' => 5,
				'nombre' => 'Aljaraque',
			),
			71 => 
			array (
				'id' => 72,
				'id_provincia' => 22,
				'cod_municipio' => 2,
				'DC' => 0,
				'nombre' => 'Abizanda',
			),
			72 => 
			array (
				'id' => 73,
				'id_provincia' => 23,
				'cod_municipio' => 2,
				'DC' => 6,
				'nombre' => 'Alcalá la Real',
			),
			73 => 
			array (
				'id' => 74,
				'id_provincia' => 24,
				'cod_municipio' => 2,
				'DC' => 1,
				'nombre' => 'Algadefe',
			),
			74 => 
			array (
				'id' => 75,
				'id_provincia' => 25,
				'cod_municipio' => 2,
				'DC' => 4,
				'nombre' => 'Àger',
			),
			75 => 
			array (
				'id' => 76,
				'id_provincia' => 26,
				'cod_municipio' => 2,
				'DC' => 7,
				'nombre' => 'Agoncillo',
			),
			76 => 
			array (
				'id' => 77,
				'id_provincia' => 27,
				'cod_municipio' => 2,
				'DC' => 3,
				'nombre' => 'Alfoz',
			),
			77 => 
			array (
				'id' => 78,
				'id_provincia' => 28,
				'cod_municipio' => 2,
				'DC' => 9,
				'nombre' => 'Ajalvir',
			),
			78 => 
			array (
				'id' => 79,
				'id_provincia' => 29,
				'cod_municipio' => 2,
				'DC' => 2,
				'nombre' => 'Alcaucín',
			),
			79 => 
			array (
				'id' => 80,
				'id_provincia' => 30,
				'cod_municipio' => 2,
				'DC' => 6,
				'nombre' => 'Abarán',
			),
			80 => 
			array (
				'id' => 81,
				'id_provincia' => 31,
				'cod_municipio' => 2,
				'DC' => 3,
				'nombre' => 'Abárzuza/Abartzuza',
			),
			81 => 
			array (
				'id' => 82,
				'id_provincia' => 32,
				'cod_municipio' => 2,
				'DC' => 8,
				'nombre' => 'Amoeiro',
			),
			82 => 
			array (
				'id' => 83,
				'id_provincia' => 33,
				'cod_municipio' => 2,
				'DC' => 4,
				'nombre' => 'Aller',
			),
			83 => 
			array (
				'id' => 84,
				'id_provincia' => 35,
				'cod_municipio' => 2,
				'DC' => 2,
				'nombre' => 'Agüimes',
			),
			84 => 
			array (
				'id' => 85,
				'id_provincia' => 36,
				'cod_municipio' => 2,
				'DC' => 5,
				'nombre' => 'Barro',
			),
			85 => 
			array (
				'id' => 86,
				'id_provincia' => 37,
				'cod_municipio' => 2,
				'DC' => 1,
				'nombre' => 'Agallas',
			),
			86 => 
			array (
				'id' => 87,
				'id_provincia' => 38,
				'cod_municipio' => 2,
				'DC' => 7,
				'nombre' => 'Agulo',
			),
			87 => 
			array (
				'id' => 88,
				'id_provincia' => 39,
				'cod_municipio' => 2,
				'DC' => 0,
				'nombre' => 'Ampuero',
			),
			88 => 
			array (
				'id' => 89,
				'id_provincia' => 40,
				'cod_municipio' => 2,
				'DC' => 4,
				'nombre' => 'Adrada de Pirón',
			),
			89 => 
			array (
				'id' => 90,
				'id_provincia' => 41,
				'cod_municipio' => 2,
				'DC' => 1,
				'nombre' => 'Alanís',
			),
			90 => 
			array (
				'id' => 91,
				'id_provincia' => 43,
				'cod_municipio' => 2,
				'DC' => 2,
				'nombre' => 'Albinyana',
			),
			91 => 
			array (
				'id' => 92,
				'id_provincia' => 44,
				'cod_municipio' => 2,
				'DC' => 7,
				'nombre' => 'Abejuela',
			),
			92 => 
			array (
				'id' => 93,
				'id_provincia' => 45,
				'cod_municipio' => 2,
				'DC' => 0,
				'nombre' => 'Alameda de la Sagra',
			),
			93 => 
			array (
				'id' => 94,
				'id_provincia' => 46,
				'cod_municipio' => 2,
				'DC' => 3,
				'nombre' => 'Ador',
			),
			94 => 
			array (
				'id' => 95,
				'id_provincia' => 47,
				'cod_municipio' => 2,
				'DC' => 9,
				'nombre' => 'Aguasal',
			),
			95 => 
			array (
				'id' => 96,
				'id_provincia' => 48,
				'cod_municipio' => 2,
				'DC' => 5,
				'nombre' => 'Abanto y Ciérvana-Abanto Zierbena',
			),
			96 => 
			array (
				'id' => 97,
				'id_provincia' => 49,
				'cod_municipio' => 2,
				'DC' => 8,
				'nombre' => 'Abezames',
			),
			97 => 
			array (
				'id' => 98,
				'id_provincia' => 50,
				'cod_municipio' => 2,
				'DC' => 1,
				'nombre' => 'Acered',
			),
			98 => 
			array (
				'id' => 99,
				'id_provincia' => 1,
				'cod_municipio' => 3,
				'DC' => 5,
				'nombre' => 'Aramaio',
			),
			99 => 
			array (
				'id' => 100,
				'id_provincia' => 2,
				'cod_municipio' => 3,
				'DC' => 0,
				'nombre' => 'Albacete',
			),
			100 => 
			array (
				'id' => 101,
				'id_provincia' => 3,
				'cod_municipio' => 3,
				'DC' => 6,
				'nombre' => 'Agres',
			),
			101 => 
			array (
				'id' => 102,
				'id_provincia' => 4,
				'cod_municipio' => 3,
				'DC' => 1,
				'nombre' => 'Adra',
			),
			102 => 
			array (
				'id' => 103,
				'id_provincia' => 6,
				'cod_municipio' => 3,
				'DC' => 7,
				'nombre' => 'Ahillones',
			),
			103 => 
			array (
				'id' => 104,
				'id_provincia' => 7,
				'cod_municipio' => 3,
				'DC' => 3,
				'nombre' => 'Alcúdia',
			),
			104 => 
			array (
				'id' => 105,
				'id_provincia' => 8,
				'cod_municipio' => 3,
				'DC' => 9,
				'nombre' => 'Alella',
			),
			105 => 
			array (
				'id' => 106,
				'id_provincia' => 9,
				'cod_municipio' => 3,
				'DC' => 2,
				'nombre' => 'Adrada de Haza',
			),
			106 => 
			array (
				'id' => 107,
				'id_provincia' => 10,
				'cod_municipio' => 3,
				'DC' => 6,
				'nombre' => 'Acebo',
			),
			107 => 
			array (
				'id' => 108,
				'id_provincia' => 11,
				'cod_municipio' => 3,
				'DC' => 3,
				'nombre' => 'Algar',
			),
			108 => 
			array (
				'id' => 109,
				'id_provincia' => 12,
				'cod_municipio' => 3,
				'DC' => 8,
				'nombre' => 'Albocàsser',
			),
			109 => 
			array (
				'id' => 110,
				'id_provincia' => 13,
				'cod_municipio' => 3,
				'DC' => 4,
				'nombre' => 'Alamillo',
			),
			110 => 
			array (
				'id' => 111,
				'id_provincia' => 14,
				'cod_municipio' => 3,
				'DC' => 9,
				'nombre' => 'Alcaracejos',
			),
			111 => 
			array (
				'id' => 112,
				'id_provincia' => 15,
				'cod_municipio' => 3,
				'DC' => 2,
				'nombre' => 'Aranga',
			),
			112 => 
			array (
				'id' => 113,
				'id_provincia' => 16,
				'cod_municipio' => 3,
				'DC' => 5,
				'nombre' => 'Alarcón',
			),
			113 => 
			array (
				'id' => 114,
				'id_provincia' => 17,
				'cod_municipio' => 3,
				'DC' => 1,
				'nombre' => 'Albanyà',
			),
			114 => 
			array (
				'id' => 115,
				'id_provincia' => 18,
				'cod_municipio' => 3,
				'DC' => 7,
				'nombre' => 'Albolote',
			),
			115 => 
			array (
				'id' => 116,
				'id_provincia' => 19,
				'cod_municipio' => 3,
				'DC' => 0,
				'nombre' => 'Adobes',
			),
			116 => 
			array (
				'id' => 117,
				'id_provincia' => 20,
				'cod_municipio' => 3,
				'DC' => 4,
				'nombre' => 'Aizarnazabal',
			),
			117 => 
			array (
				'id' => 118,
				'id_provincia' => 21,
				'cod_municipio' => 3,
				'DC' => 1,
				'nombre' => 'Almendro, El',
			),
			118 => 
			array (
				'id' => 119,
				'id_provincia' => 22,
				'cod_municipio' => 3,
				'DC' => 6,
				'nombre' => 'Adahuesca',
			),
			119 => 
			array (
				'id' => 120,
				'id_provincia' => 23,
				'cod_municipio' => 3,
				'DC' => 2,
				'nombre' => 'Alcaudete',
			),
			120 => 
			array (
				'id' => 121,
				'id_provincia' => 24,
				'cod_municipio' => 3,
				'DC' => 7,
				'nombre' => 'Alija del Infantado',
			),
			121 => 
			array (
				'id' => 122,
				'id_provincia' => 25,
				'cod_municipio' => 3,
				'DC' => 0,
				'nombre' => 'Agramunt',
			),
			122 => 
			array (
				'id' => 123,
				'id_provincia' => 26,
				'cod_municipio' => 3,
				'DC' => 3,
				'nombre' => 'Aguilar del Río Alhama',
			),
			123 => 
			array (
				'id' => 124,
				'id_provincia' => 27,
				'cod_municipio' => 3,
				'DC' => 9,
				'nombre' => 'Antas de Ulla',
			),
			124 => 
			array (
				'id' => 125,
				'id_provincia' => 28,
				'cod_municipio' => 3,
				'DC' => 5,
				'nombre' => 'Alameda del Valle',
			),
			125 => 
			array (
				'id' => 126,
				'id_provincia' => 29,
				'cod_municipio' => 3,
				'DC' => 8,
				'nombre' => 'Alfarnate',
			),
			126 => 
			array (
				'id' => 127,
				'id_provincia' => 30,
				'cod_municipio' => 3,
				'DC' => 2,
				'nombre' => 'Águilas',
			),
			127 => 
			array (
				'id' => 128,
				'id_provincia' => 31,
				'cod_municipio' => 3,
				'DC' => 9,
				'nombre' => 'Abaurregaina/Abaurrea Alta',
			),
			128 => 
			array (
				'id' => 129,
				'id_provincia' => 32,
				'cod_municipio' => 3,
				'DC' => 4,
				'nombre' => 'Arnoia, A',
			),
			129 => 
			array (
				'id' => 130,
				'id_provincia' => 33,
				'cod_municipio' => 3,
				'DC' => 0,
				'nombre' => 'Amieva',
			),
			130 => 
			array (
				'id' => 131,
				'id_provincia' => 34,
				'cod_municipio' => 3,
				'DC' => 5,
				'nombre' => 'Abia de las Torres',
			),
			131 => 
			array (
				'id' => 132,
				'id_provincia' => 35,
				'cod_municipio' => 3,
				'DC' => 8,
				'nombre' => 'Antigua',
			),
			132 => 
			array (
				'id' => 133,
				'id_provincia' => 36,
				'cod_municipio' => 3,
				'DC' => 1,
				'nombre' => 'Baiona',
			),
			133 => 
			array (
				'id' => 134,
				'id_provincia' => 37,
				'cod_municipio' => 3,
				'DC' => 7,
				'nombre' => 'Ahigal de los Aceiteros',
			),
			134 => 
			array (
				'id' => 135,
				'id_provincia' => 38,
				'cod_municipio' => 3,
				'DC' => 3,
				'nombre' => 'Alajeró',
			),
			135 => 
			array (
				'id' => 136,
				'id_provincia' => 39,
				'cod_municipio' => 3,
				'DC' => 6,
				'nombre' => 'Anievas',
			),
			136 => 
			array (
				'id' => 137,
				'id_provincia' => 40,
				'cod_municipio' => 3,
				'DC' => 0,
				'nombre' => 'Adrados',
			),
			137 => 
			array (
				'id' => 138,
				'id_provincia' => 41,
				'cod_municipio' => 3,
				'DC' => 7,
				'nombre' => 'Albaida del Aljarafe',
			),
			138 => 
			array (
				'id' => 139,
				'id_provincia' => 42,
				'cod_municipio' => 3,
				'DC' => 2,
				'nombre' => 'Adradas',
			),
			139 => 
			array (
				'id' => 140,
				'id_provincia' => 43,
				'cod_municipio' => 3,
				'DC' => 8,
				'nombre' => 'Albiol, L\'',
			),
			140 => 
			array (
				'id' => 141,
				'id_provincia' => 44,
				'cod_municipio' => 3,
				'DC' => 3,
				'nombre' => 'Aguatón',
			),
			141 => 
			array (
				'id' => 142,
				'id_provincia' => 45,
				'cod_municipio' => 3,
				'DC' => 6,
				'nombre' => 'Albarreal de Tajo',
			),
			142 => 
			array (
				'id' => 143,
				'id_provincia' => 46,
				'cod_municipio' => 3,
				'DC' => 9,
				'nombre' => 'Atzeneta d\'Albaida',
			),
			143 => 
			array (
				'id' => 144,
				'id_provincia' => 47,
				'cod_municipio' => 3,
				'DC' => 5,
				'nombre' => 'Aguilar de Campos',
			),
			144 => 
			array (
				'id' => 145,
				'id_provincia' => 48,
				'cod_municipio' => 3,
				'DC' => 1,
				'nombre' => 'Amorebieta-Etxano',
			),
			145 => 
			array (
				'id' => 146,
				'id_provincia' => 49,
				'cod_municipio' => 3,
				'DC' => 4,
				'nombre' => 'Alcañices',
			),
			146 => 
			array (
				'id' => 147,
				'id_provincia' => 50,
				'cod_municipio' => 3,
				'DC' => 7,
				'nombre' => 'Agón',
			),
			147 => 
			array (
				'id' => 148,
				'id_provincia' => 1,
				'cod_municipio' => 4,
				'DC' => 0,
				'nombre' => 'Artziniega',
			),
			148 => 
			array (
				'id' => 149,
				'id_provincia' => 2,
				'cod_municipio' => 4,
				'DC' => 5,
				'nombre' => 'Albatana',
			),
			149 => 
			array (
				'id' => 150,
				'id_provincia' => 3,
				'cod_municipio' => 4,
				'DC' => 1,
				'nombre' => 'Aigües',
			),
			150 => 
			array (
				'id' => 151,
				'id_provincia' => 4,
				'cod_municipio' => 4,
				'DC' => 6,
				'nombre' => 'Albánchez',
			),
			151 => 
			array (
				'id' => 152,
				'id_provincia' => 6,
				'cod_municipio' => 4,
				'DC' => 2,
				'nombre' => 'Alange',
			),
			152 => 
			array (
				'id' => 153,
				'id_provincia' => 7,
				'cod_municipio' => 4,
				'DC' => 8,
				'nombre' => 'Algaida',
			),
			153 => 
			array (
				'id' => 154,
				'id_provincia' => 8,
				'cod_municipio' => 4,
				'DC' => 4,
				'nombre' => 'Alpens',
			),
			154 => 
			array (
				'id' => 155,
				'id_provincia' => 10,
				'cod_municipio' => 4,
				'DC' => 1,
				'nombre' => 'Acehúche',
			),
			155 => 
			array (
				'id' => 156,
				'id_provincia' => 11,
				'cod_municipio' => 4,
				'DC' => 8,
				'nombre' => 'Algeciras',
			),
			156 => 
			array (
				'id' => 157,
				'id_provincia' => 12,
				'cod_municipio' => 4,
				'DC' => 3,
				'nombre' => 'Alcalà de Xivert',
			),
			157 => 
			array (
				'id' => 158,
				'id_provincia' => 13,
				'cod_municipio' => 4,
				'DC' => 9,
				'nombre' => 'Albaladejo',
			),
			158 => 
			array (
				'id' => 159,
				'id_provincia' => 14,
				'cod_municipio' => 4,
				'DC' => 4,
				'nombre' => 'Almedinilla',
			),
			159 => 
			array (
				'id' => 160,
				'id_provincia' => 15,
				'cod_municipio' => 4,
				'DC' => 7,
				'nombre' => 'Ares',
			),
			160 => 
			array (
				'id' => 161,
				'id_provincia' => 16,
				'cod_municipio' => 4,
				'DC' => 0,
				'nombre' => 'Albaladejo del Cuende',
			),
			161 => 
			array (
				'id' => 162,
				'id_provincia' => 17,
				'cod_municipio' => 4,
				'DC' => 6,
				'nombre' => 'Albons',
			),
			162 => 
			array (
				'id' => 163,
				'id_provincia' => 18,
				'cod_municipio' => 4,
				'DC' => 2,
				'nombre' => 'Albondón',
			),
			163 => 
			array (
				'id' => 164,
				'id_provincia' => 19,
				'cod_municipio' => 4,
				'DC' => 5,
				'nombre' => 'Alaminos',
			),
			164 => 
			array (
				'id' => 165,
				'id_provincia' => 20,
				'cod_municipio' => 4,
				'DC' => 9,
				'nombre' => 'Albiztur',
			),
			165 => 
			array (
				'id' => 166,
				'id_provincia' => 21,
				'cod_municipio' => 4,
				'DC' => 6,
				'nombre' => 'Almonaster la Real',
			),
			166 => 
			array (
				'id' => 167,
				'id_provincia' => 22,
				'cod_municipio' => 4,
				'DC' => 1,
				'nombre' => 'Agüero',
			),
			167 => 
			array (
				'id' => 168,
				'id_provincia' => 23,
				'cod_municipio' => 4,
				'DC' => 7,
				'nombre' => 'Aldeaquemada',
			),
			168 => 
			array (
				'id' => 169,
				'id_provincia' => 24,
				'cod_municipio' => 4,
				'DC' => 2,
				'nombre' => 'Almanza',
			),
			169 => 
			array (
				'id' => 170,
				'id_provincia' => 25,
				'cod_municipio' => 4,
				'DC' => 5,
				'nombre' => 'Alamús, Els',
			),
			170 => 
			array (
				'id' => 171,
				'id_provincia' => 26,
				'cod_municipio' => 4,
				'DC' => 8,
				'nombre' => 'Ajamil de Cameros',
			),
			171 => 
			array (
				'id' => 172,
				'id_provincia' => 27,
				'cod_municipio' => 4,
				'DC' => 4,
				'nombre' => 'Baleira',
			),
			172 => 
			array (
				'id' => 173,
				'id_provincia' => 28,
				'cod_municipio' => 4,
				'DC' => 0,
				'nombre' => 'Álamo, El',
			),
			173 => 
			array (
				'id' => 174,
				'id_provincia' => 29,
				'cod_municipio' => 4,
				'DC' => 3,
				'nombre' => 'Alfarnatejo',
			),
			174 => 
			array (
				'id' => 175,
				'id_provincia' => 30,
				'cod_municipio' => 4,
				'DC' => 7,
				'nombre' => 'Albudeite',
			),
			175 => 
			array (
				'id' => 176,
				'id_provincia' => 31,
				'cod_municipio' => 4,
				'DC' => 4,
				'nombre' => 'Abaurrepea/Abaurrea Baja',
			),
			176 => 
			array (
				'id' => 177,
				'id_provincia' => 32,
				'cod_municipio' => 4,
				'DC' => 9,
				'nombre' => 'Avión',
			),
			177 => 
			array (
				'id' => 178,
				'id_provincia' => 33,
				'cod_municipio' => 4,
				'DC' => 5,
				'nombre' => 'Avilés',
			),
			178 => 
			array (
				'id' => 179,
				'id_provincia' => 34,
				'cod_municipio' => 4,
				'DC' => 0,
				'nombre' => 'Aguilar de Campoo',
			),
			179 => 
			array (
				'id' => 180,
				'id_provincia' => 35,
				'cod_municipio' => 4,
				'DC' => 3,
				'nombre' => 'Arrecife',
			),
			180 => 
			array (
				'id' => 181,
				'id_provincia' => 36,
				'cod_municipio' => 4,
				'DC' => 6,
				'nombre' => 'Bueu',
			),
			181 => 
			array (
				'id' => 182,
				'id_provincia' => 37,
				'cod_municipio' => 4,
				'DC' => 2,
				'nombre' => 'Ahigal de Villarino',
			),
			182 => 
			array (
				'id' => 183,
				'id_provincia' => 38,
				'cod_municipio' => 4,
				'DC' => 8,
				'nombre' => 'Arafo',
			),
			183 => 
			array (
				'id' => 184,
				'id_provincia' => 39,
				'cod_municipio' => 4,
				'DC' => 1,
				'nombre' => 'Arenas de Iguña',
			),
			184 => 
			array (
				'id' => 185,
				'id_provincia' => 40,
				'cod_municipio' => 4,
				'DC' => 5,
				'nombre' => 'Aguilafuente',
			),
			185 => 
			array (
				'id' => 186,
				'id_provincia' => 41,
				'cod_municipio' => 4,
				'DC' => 2,
				'nombre' => 'Alcalá de Guadaíra',
			),
			186 => 
			array (
				'id' => 187,
				'id_provincia' => 42,
				'cod_municipio' => 4,
				'DC' => 7,
				'nombre' => 'Ágreda',
			),
			187 => 
			array (
				'id' => 188,
				'id_provincia' => 43,
				'cod_municipio' => 4,
				'DC' => 3,
				'nombre' => 'Alcanar',
			),
			188 => 
			array (
				'id' => 189,
				'id_provincia' => 44,
				'cod_municipio' => 4,
				'DC' => 8,
				'nombre' => 'Aguaviva',
			),
			189 => 
			array (
				'id' => 190,
				'id_provincia' => 45,
				'cod_municipio' => 4,
				'DC' => 1,
				'nombre' => 'Alcabón',
			),
			190 => 
			array (
				'id' => 191,
				'id_provincia' => 46,
				'cod_municipio' => 4,
				'DC' => 4,
				'nombre' => 'Agullent',
			),
			191 => 
			array (
				'id' => 192,
				'id_provincia' => 47,
				'cod_municipio' => 4,
				'DC' => 0,
				'nombre' => 'Alaejos',
			),
			192 => 
			array (
				'id' => 193,
				'id_provincia' => 48,
				'cod_municipio' => 4,
				'DC' => 6,
				'nombre' => 'Amoroto',
			),
			193 => 
			array (
				'id' => 194,
				'id_provincia' => 49,
				'cod_municipio' => 4,
				'DC' => 9,
				'nombre' => 'Alcubilla de Nogales',
			),
			194 => 
			array (
				'id' => 195,
				'id_provincia' => 50,
				'cod_municipio' => 4,
				'DC' => 2,
				'nombre' => 'Aguarón',
			),
			195 => 
			array (
				'id' => 196,
				'id_provincia' => 2,
				'cod_municipio' => 5,
				'DC' => 8,
				'nombre' => 'Alborea',
			),
			196 => 
			array (
				'id' => 197,
				'id_provincia' => 3,
				'cod_municipio' => 5,
				'DC' => 4,
				'nombre' => 'Albatera',
			),
			197 => 
			array (
				'id' => 198,
				'id_provincia' => 4,
				'cod_municipio' => 5,
				'DC' => 9,
				'nombre' => 'Alboloduy',
			),
			198 => 
			array (
				'id' => 199,
				'id_provincia' => 5,
				'cod_municipio' => 5,
				'DC' => 2,
				'nombre' => 'Albornos',
			),
			199 => 
			array (
				'id' => 200,
				'id_provincia' => 6,
				'cod_municipio' => 5,
				'DC' => 5,
				'nombre' => 'Albuera, La',
			),
			200 => 
			array (
				'id' => 201,
				'id_provincia' => 7,
				'cod_municipio' => 5,
				'DC' => 1,
				'nombre' => 'Andratx',
			),
			201 => 
			array (
				'id' => 202,
				'id_provincia' => 8,
				'cod_municipio' => 5,
				'DC' => 7,
				'nombre' => 'Ametlla del Vallès, L\'',
			),
			202 => 
			array (
				'id' => 203,
				'id_provincia' => 10,
				'cod_municipio' => 5,
				'DC' => 4,
				'nombre' => 'Aceituna',
			),
			203 => 
			array (
				'id' => 204,
				'id_provincia' => 11,
				'cod_municipio' => 5,
				'DC' => 1,
				'nombre' => 'Algodonales',
			),
			204 => 
			array (
				'id' => 205,
				'id_provincia' => 12,
				'cod_municipio' => 5,
				'DC' => 6,
				'nombre' => 'Alcora, l\'',
			),
			205 => 
			array (
				'id' => 206,
				'id_provincia' => 13,
				'cod_municipio' => 5,
				'DC' => 2,
				'nombre' => 'Alcázar de San Juan',
			),
			206 => 
			array (
				'id' => 207,
				'id_provincia' => 14,
				'cod_municipio' => 5,
				'DC' => 7,
				'nombre' => 'Almodóvar del Río',
			),
			207 => 
			array (
				'id' => 208,
				'id_provincia' => 15,
				'cod_municipio' => 5,
				'DC' => 0,
				'nombre' => 'Arteixo',
			),
			208 => 
			array (
				'id' => 209,
				'id_provincia' => 16,
				'cod_municipio' => 5,
				'DC' => 3,
				'nombre' => 'Albalate de las Nogueras',
			),
			209 => 
			array (
				'id' => 210,
				'id_provincia' => 17,
				'cod_municipio' => 5,
				'DC' => 9,
				'nombre' => 'Far d\'Empordà, El',
			),
			210 => 
			array (
				'id' => 211,
				'id_provincia' => 18,
				'cod_municipio' => 5,
				'DC' => 5,
				'nombre' => 'Albuñán',
			),
			211 => 
			array (
				'id' => 212,
				'id_provincia' => 19,
				'cod_municipio' => 5,
				'DC' => 8,
				'nombre' => 'Alarilla',
			),
			212 => 
			array (
				'id' => 213,
				'id_provincia' => 20,
				'cod_municipio' => 5,
				'DC' => 2,
				'nombre' => 'Alegia',
			),
			213 => 
			array (
				'id' => 214,
				'id_provincia' => 21,
				'cod_municipio' => 5,
				'DC' => 9,
				'nombre' => 'Almonte',
			),
			214 => 
			array (
				'id' => 215,
				'id_provincia' => 23,
				'cod_municipio' => 5,
				'DC' => 0,
				'nombre' => 'Andújar',
			),
			215 => 
			array (
				'id' => 216,
				'id_provincia' => 24,
				'cod_municipio' => 5,
				'DC' => 5,
				'nombre' => 'Antigua, La',
			),
			216 => 
			array (
				'id' => 217,
				'id_provincia' => 25,
				'cod_municipio' => 5,
				'DC' => 8,
				'nombre' => 'Alàs i Cerc',
			),
			217 => 
			array (
				'id' => 218,
				'id_provincia' => 26,
				'cod_municipio' => 5,
				'DC' => 1,
				'nombre' => 'Albelda de Iregua',
			),
			218 => 
			array (
				'id' => 219,
				'id_provincia' => 27,
				'cod_municipio' => 5,
				'DC' => 7,
				'nombre' => 'Barreiros',
			),
			219 => 
			array (
				'id' => 220,
				'id_provincia' => 28,
				'cod_municipio' => 5,
				'DC' => 3,
				'nombre' => 'Alcalá de Henares',
			),
			220 => 
			array (
				'id' => 221,
				'id_provincia' => 29,
				'cod_municipio' => 5,
				'DC' => 6,
				'nombre' => 'Algarrobo',
			),
			221 => 
			array (
				'id' => 222,
				'id_provincia' => 30,
				'cod_municipio' => 5,
				'DC' => 0,
				'nombre' => 'Alcantarilla',
			),
			222 => 
			array (
				'id' => 223,
				'id_provincia' => 31,
				'cod_municipio' => 5,
				'DC' => 7,
				'nombre' => 'Aberin',
			),
			223 => 
			array (
				'id' => 224,
				'id_provincia' => 32,
				'cod_municipio' => 5,
				'DC' => 2,
				'nombre' => 'Baltar',
			),
			224 => 
			array (
				'id' => 225,
				'id_provincia' => 33,
				'cod_municipio' => 5,
				'DC' => 8,
				'nombre' => 'Belmonte de Miranda',
			),
			225 => 
			array (
				'id' => 226,
				'id_provincia' => 34,
				'cod_municipio' => 5,
				'DC' => 3,
				'nombre' => 'Alar del Rey',
			),
			226 => 
			array (
				'id' => 227,
				'id_provincia' => 35,
				'cod_municipio' => 5,
				'DC' => 6,
				'nombre' => 'Artenara',
			),
			227 => 
			array (
				'id' => 228,
				'id_provincia' => 36,
				'cod_municipio' => 5,
				'DC' => 9,
				'nombre' => 'Caldas de Reis',
			),
			228 => 
			array (
				'id' => 229,
				'id_provincia' => 37,
				'cod_municipio' => 5,
				'DC' => 5,
				'nombre' => 'Alameda de Gardón, La',
			),
			229 => 
			array (
				'id' => 230,
				'id_provincia' => 38,
				'cod_municipio' => 5,
				'DC' => 1,
				'nombre' => 'Arico',
			),
			230 => 
			array (
				'id' => 231,
				'id_provincia' => 39,
				'cod_municipio' => 5,
				'DC' => 4,
				'nombre' => 'Argoños',
			),
			231 => 
			array (
				'id' => 232,
				'id_provincia' => 40,
				'cod_municipio' => 5,
				'DC' => 8,
				'nombre' => 'Alconada de Maderuelo',
			),
			232 => 
			array (
				'id' => 233,
				'id_provincia' => 41,
				'cod_municipio' => 5,
				'DC' => 5,
				'nombre' => 'Alcalá del Río',
			),
			233 => 
			array (
				'id' => 234,
				'id_provincia' => 43,
				'cod_municipio' => 5,
				'DC' => 6,
				'nombre' => 'Alcover',
			),
			234 => 
			array (
				'id' => 235,
				'id_provincia' => 44,
				'cod_municipio' => 5,
				'DC' => 1,
				'nombre' => 'Aguilar del Alfambra',
			),
			235 => 
			array (
				'id' => 236,
				'id_provincia' => 45,
				'cod_municipio' => 5,
				'DC' => 4,
				'nombre' => 'Alcañizo',
			),
			236 => 
			array (
				'id' => 237,
				'id_provincia' => 46,
				'cod_municipio' => 5,
				'DC' => 7,
				'nombre' => 'Alaquàs',
			),
			237 => 
			array (
				'id' => 238,
				'id_provincia' => 47,
				'cod_municipio' => 5,
				'DC' => 3,
				'nombre' => 'Alcazarén',
			),
			238 => 
			array (
				'id' => 239,
				'id_provincia' => 48,
				'cod_municipio' => 5,
				'DC' => 9,
				'nombre' => 'Arakaldo',
			),
			239 => 
			array (
				'id' => 240,
				'id_provincia' => 49,
				'cod_municipio' => 5,
				'DC' => 2,
				'nombre' => 'Alfaraz de Sayago',
			),
			240 => 
			array (
				'id' => 241,
				'id_provincia' => 50,
				'cod_municipio' => 5,
				'DC' => 5,
				'nombre' => 'Aguilón',
			),
			241 => 
			array (
				'id' => 242,
				'id_provincia' => 1,
				'cod_municipio' => 6,
				'DC' => 6,
				'nombre' => 'Armiñón',
			),
			242 => 
			array (
				'id' => 243,
				'id_provincia' => 2,
				'cod_municipio' => 6,
				'DC' => 1,
				'nombre' => 'Alcadozo',
			),
			243 => 
			array (
				'id' => 244,
				'id_provincia' => 3,
				'cod_municipio' => 6,
				'DC' => 7,
				'nombre' => 'Alcalalí',
			),
			244 => 
			array (
				'id' => 245,
				'id_provincia' => 4,
				'cod_municipio' => 6,
				'DC' => 2,
				'nombre' => 'Albox',
			),
			245 => 
			array (
				'id' => 246,
				'id_provincia' => 6,
				'cod_municipio' => 6,
				'DC' => 8,
				'nombre' => 'Alburquerque',
			),
			246 => 
			array (
				'id' => 247,
				'id_provincia' => 7,
				'cod_municipio' => 6,
				'DC' => 4,
				'nombre' => 'Artà',
			),
			247 => 
			array (
				'id' => 248,
				'id_provincia' => 8,
				'cod_municipio' => 6,
				'DC' => 0,
				'nombre' => 'Arenys de Mar',
			),
			248 => 
			array (
				'id' => 249,
				'id_provincia' => 9,
				'cod_municipio' => 6,
				'DC' => 3,
				'nombre' => 'Aguas Cándidas',
			),
			249 => 
			array (
				'id' => 250,
				'id_provincia' => 10,
				'cod_municipio' => 6,
				'DC' => 7,
				'nombre' => 'Ahigal',
			),
			250 => 
			array (
				'id' => 251,
				'id_provincia' => 11,
				'cod_municipio' => 6,
				'DC' => 4,
				'nombre' => 'Arcos de la Frontera',
			),
			251 => 
			array (
				'id' => 252,
				'id_provincia' => 12,
				'cod_municipio' => 6,
				'DC' => 9,
				'nombre' => 'Alcudia de Veo',
			),
			252 => 
			array (
				'id' => 253,
				'id_provincia' => 13,
				'cod_municipio' => 6,
				'DC' => 5,
				'nombre' => 'Alcoba',
			),
			253 => 
			array (
				'id' => 254,
				'id_provincia' => 14,
				'cod_municipio' => 6,
				'DC' => 0,
				'nombre' => 'Añora',
			),
			254 => 
			array (
				'id' => 255,
				'id_provincia' => 15,
				'cod_municipio' => 6,
				'DC' => 3,
				'nombre' => 'Arzúa',
			),
			255 => 
			array (
				'id' => 256,
				'id_provincia' => 16,
				'cod_municipio' => 6,
				'DC' => 6,
				'nombre' => 'Albendea',
			),
			256 => 
			array (
				'id' => 257,
				'id_provincia' => 17,
				'cod_municipio' => 6,
				'DC' => 2,
				'nombre' => 'Alp',
			),
			257 => 
			array (
				'id' => 258,
				'id_provincia' => 18,
				'cod_municipio' => 6,
				'DC' => 8,
				'nombre' => 'Albuñol',
			),
			258 => 
			array (
				'id' => 259,
				'id_provincia' => 19,
				'cod_municipio' => 6,
				'DC' => 1,
				'nombre' => 'Albalate de Zorita',
			),
			259 => 
			array (
				'id' => 260,
				'id_provincia' => 20,
				'cod_municipio' => 6,
				'DC' => 5,
				'nombre' => 'Alkiza',
			),
			260 => 
			array (
				'id' => 261,
				'id_provincia' => 21,
				'cod_municipio' => 6,
				'DC' => 2,
				'nombre' => 'Alosno',
			),
			261 => 
			array (
				'id' => 262,
				'id_provincia' => 22,
				'cod_municipio' => 6,
				'DC' => 7,
				'nombre' => 'Aisa',
			),
			262 => 
			array (
				'id' => 263,
				'id_provincia' => 23,
				'cod_municipio' => 6,
				'DC' => 3,
				'nombre' => 'Arjona',
			),
			263 => 
			array (
				'id' => 264,
				'id_provincia' => 24,
				'cod_municipio' => 6,
				'DC' => 8,
				'nombre' => 'Ardón',
			),
			264 => 
			array (
				'id' => 265,
				'id_provincia' => 25,
				'cod_municipio' => 6,
				'DC' => 1,
				'nombre' => 'Albagés, L\'',
			),
			265 => 
			array (
				'id' => 266,
				'id_provincia' => 26,
				'cod_municipio' => 6,
				'DC' => 4,
				'nombre' => 'Alberite',
			),
			266 => 
			array (
				'id' => 267,
				'id_provincia' => 27,
				'cod_municipio' => 6,
				'DC' => 0,
				'nombre' => 'Becerreá',
			),
			267 => 
			array (
				'id' => 268,
				'id_provincia' => 28,
				'cod_municipio' => 6,
				'DC' => 6,
				'nombre' => 'Alcobendas',
			),
			268 => 
			array (
				'id' => 269,
				'id_provincia' => 29,
				'cod_municipio' => 6,
				'DC' => 9,
				'nombre' => 'Algatocín',
			),
			269 => 
			array (
				'id' => 270,
				'id_provincia' => 30,
				'cod_municipio' => 6,
				'DC' => 3,
				'nombre' => 'Aledo',
			),
			270 => 
			array (
				'id' => 271,
				'id_provincia' => 31,
				'cod_municipio' => 6,
				'DC' => 0,
				'nombre' => 'Ablitas',
			),
			271 => 
			array (
				'id' => 272,
				'id_provincia' => 32,
				'cod_municipio' => 6,
				'DC' => 5,
				'nombre' => 'Bande',
			),
			272 => 
			array (
				'id' => 273,
				'id_provincia' => 33,
				'cod_municipio' => 6,
				'DC' => 1,
				'nombre' => 'Bimenes',
			),
			273 => 
			array (
				'id' => 274,
				'id_provincia' => 34,
				'cod_municipio' => 6,
				'DC' => 6,
				'nombre' => 'Alba de Cerrato',
			),
			274 => 
			array (
				'id' => 275,
				'id_provincia' => 35,
				'cod_municipio' => 6,
				'DC' => 9,
				'nombre' => 'Arucas',
			),
			275 => 
			array (
				'id' => 276,
				'id_provincia' => 36,
				'cod_municipio' => 6,
				'DC' => 2,
				'nombre' => 'Cambados',
			),
			276 => 
			array (
				'id' => 277,
				'id_provincia' => 37,
				'cod_municipio' => 6,
				'DC' => 8,
				'nombre' => 'Alamedilla, La',
			),
			277 => 
			array (
				'id' => 278,
				'id_provincia' => 38,
				'cod_municipio' => 6,
				'DC' => 4,
				'nombre' => 'Arona',
			),
			278 => 
			array (
				'id' => 279,
				'id_provincia' => 39,
				'cod_municipio' => 6,
				'DC' => 7,
				'nombre' => 'Arnuero',
			),
			279 => 
			array (
				'id' => 280,
				'id_provincia' => 40,
				'cod_municipio' => 6,
				'DC' => 1,
				'nombre' => 'Aldealcorvo',
			),
			280 => 
			array (
				'id' => 281,
				'id_provincia' => 41,
				'cod_municipio' => 6,
				'DC' => 8,
				'nombre' => 'Alcolea del Río',
			),
			281 => 
			array (
				'id' => 282,
				'id_provincia' => 42,
				'cod_municipio' => 6,
				'DC' => 3,
				'nombre' => 'Alconaba',
			),
			282 => 
			array (
				'id' => 283,
				'id_provincia' => 43,
				'cod_municipio' => 6,
				'DC' => 9,
				'nombre' => 'Aldover',
			),
			283 => 
			array (
				'id' => 284,
				'id_provincia' => 44,
				'cod_municipio' => 6,
				'DC' => 4,
				'nombre' => 'Alacón',
			),
			284 => 
			array (
				'id' => 285,
				'id_provincia' => 45,
				'cod_municipio' => 6,
				'DC' => 7,
				'nombre' => 'Alcaudete de la Jara',
			),
			285 => 
			array (
				'id' => 286,
				'id_provincia' => 46,
				'cod_municipio' => 6,
				'DC' => 0,
				'nombre' => 'Albaida',
			),
			286 => 
			array (
				'id' => 287,
				'id_provincia' => 47,
				'cod_municipio' => 6,
				'DC' => 6,
				'nombre' => 'Aldea de San Miguel',
			),
			287 => 
			array (
				'id' => 288,
				'id_provincia' => 48,
				'cod_municipio' => 6,
				'DC' => 2,
				'nombre' => 'Arantzazu',
			),
			288 => 
			array (
				'id' => 289,
				'id_provincia' => 49,
				'cod_municipio' => 6,
				'DC' => 5,
				'nombre' => 'Algodre',
			),
			289 => 
			array (
				'id' => 290,
				'id_provincia' => 50,
				'cod_municipio' => 6,
				'DC' => 8,
				'nombre' => 'Ainzón',
			),
			290 => 
			array (
				'id' => 291,
				'id_provincia' => 2,
				'cod_municipio' => 7,
				'DC' => 7,
				'nombre' => 'Alcalá del Júcar',
			),
			291 => 
			array (
				'id' => 292,
				'id_provincia' => 3,
				'cod_municipio' => 7,
				'DC' => 3,
				'nombre' => 'Alcocer de Planes',
			),
			292 => 
			array (
				'id' => 293,
				'id_provincia' => 4,
				'cod_municipio' => 7,
				'DC' => 8,
				'nombre' => 'Alcolea',
			),
			293 => 
			array (
				'id' => 294,
				'id_provincia' => 5,
				'cod_municipio' => 7,
				'DC' => 1,
				'nombre' => 'Aldeanueva de Santa Cruz',
			),
			294 => 
			array (
				'id' => 295,
				'id_provincia' => 6,
				'cod_municipio' => 7,
				'DC' => 4,
				'nombre' => 'Alconchel',
			),
			295 => 
			array (
				'id' => 296,
				'id_provincia' => 7,
				'cod_municipio' => 7,
				'DC' => 0,
				'nombre' => 'Banyalbufar',
			),
			296 => 
			array (
				'id' => 297,
				'id_provincia' => 8,
				'cod_municipio' => 7,
				'DC' => 6,
				'nombre' => 'Arenys de Munt',
			),
			297 => 
			array (
				'id' => 298,
				'id_provincia' => 9,
				'cod_municipio' => 7,
				'DC' => 9,
				'nombre' => 'Aguilar de Bureba',
			),
			298 => 
			array (
				'id' => 299,
				'id_provincia' => 10,
				'cod_municipio' => 7,
				'DC' => 3,
				'nombre' => 'Albalá',
			),
			299 => 
			array (
				'id' => 300,
				'id_provincia' => 11,
				'cod_municipio' => 7,
				'DC' => 0,
				'nombre' => 'Barbate',
			),
			300 => 
			array (
				'id' => 301,
				'id_provincia' => 12,
				'cod_municipio' => 7,
				'DC' => 5,
				'nombre' => 'Alfondeguilla',
			),
			301 => 
			array (
				'id' => 302,
				'id_provincia' => 13,
				'cod_municipio' => 7,
				'DC' => 1,
				'nombre' => 'Alcolea de Calatrava',
			),
			302 => 
			array (
				'id' => 303,
				'id_provincia' => 14,
				'cod_municipio' => 7,
				'DC' => 6,
				'nombre' => 'Baena',
			),
			303 => 
			array (
				'id' => 304,
				'id_provincia' => 15,
				'cod_municipio' => 7,
				'DC' => 9,
				'nombre' => 'Baña, A',
			),
			304 => 
			array (
				'id' => 305,
				'id_provincia' => 16,
				'cod_municipio' => 7,
				'DC' => 2,
				'nombre' => 'Alberca de Záncara, La',
			),
			305 => 
			array (
				'id' => 306,
				'id_provincia' => 17,
				'cod_municipio' => 7,
				'DC' => 8,
				'nombre' => 'Amer',
			),
			306 => 
			array (
				'id' => 307,
				'id_provincia' => 18,
				'cod_municipio' => 7,
				'DC' => 4,
				'nombre' => 'Albuñuelas',
			),
			307 => 
			array (
				'id' => 308,
				'id_provincia' => 19,
				'cod_municipio' => 7,
				'DC' => 7,
				'nombre' => 'Albares',
			),
			308 => 
			array (
				'id' => 309,
				'id_provincia' => 20,
				'cod_municipio' => 7,
				'DC' => 1,
				'nombre' => 'Altzo',
			),
			309 => 
			array (
				'id' => 310,
				'id_provincia' => 21,
				'cod_municipio' => 7,
				'DC' => 8,
				'nombre' => 'Aracena',
			),
			310 => 
			array (
				'id' => 311,
				'id_provincia' => 22,
				'cod_municipio' => 7,
				'DC' => 3,
				'nombre' => 'Albalate de Cinca',
			),
			311 => 
			array (
				'id' => 312,
				'id_provincia' => 23,
				'cod_municipio' => 7,
				'DC' => 9,
				'nombre' => 'Arjonilla',
			),
			312 => 
			array (
				'id' => 313,
				'id_provincia' => 24,
				'cod_municipio' => 7,
				'DC' => 4,
				'nombre' => 'Arganza',
			),
			313 => 
			array (
				'id' => 314,
				'id_provincia' => 25,
				'cod_municipio' => 7,
				'DC' => 7,
				'nombre' => 'Albatàrrec',
			),
			314 => 
			array (
				'id' => 315,
				'id_provincia' => 26,
				'cod_municipio' => 7,
				'DC' => 0,
				'nombre' => 'Alcanadre',
			),
			315 => 
			array (
				'id' => 316,
				'id_provincia' => 27,
				'cod_municipio' => 7,
				'DC' => 6,
				'nombre' => 'Begonte',
			),
			316 => 
			array (
				'id' => 317,
				'id_provincia' => 28,
				'cod_municipio' => 7,
				'DC' => 2,
				'nombre' => 'Alcorcón',
			),
			317 => 
			array (
				'id' => 318,
				'id_provincia' => 29,
				'cod_municipio' => 7,
				'DC' => 5,
				'nombre' => 'Alhaurín de la Torre',
			),
			318 => 
			array (
				'id' => 319,
				'id_provincia' => 30,
				'cod_municipio' => 7,
				'DC' => 9,
				'nombre' => 'Alguazas',
			),
			319 => 
			array (
				'id' => 320,
				'id_provincia' => 31,
				'cod_municipio' => 7,
				'DC' => 6,
				'nombre' => 'Adiós',
			),
			320 => 
			array (
				'id' => 321,
				'id_provincia' => 32,
				'cod_municipio' => 7,
				'DC' => 1,
				'nombre' => 'Baños de Molgas',
			),
			321 => 
			array (
				'id' => 322,
				'id_provincia' => 33,
				'cod_municipio' => 7,
				'DC' => 7,
				'nombre' => 'Boal',
			),
			322 => 
			array (
				'id' => 323,
				'id_provincia' => 35,
				'cod_municipio' => 7,
				'DC' => 5,
				'nombre' => 'Betancuria',
			),
			323 => 
			array (
				'id' => 324,
				'id_provincia' => 36,
				'cod_municipio' => 7,
				'DC' => 8,
				'nombre' => 'Campo Lameiro',
			),
			324 => 
			array (
				'id' => 325,
				'id_provincia' => 37,
				'cod_municipio' => 7,
				'DC' => 4,
				'nombre' => 'Alaraz',
			),
			325 => 
			array (
				'id' => 326,
				'id_provincia' => 38,
				'cod_municipio' => 7,
				'DC' => 0,
				'nombre' => 'Barlovento',
			),
			326 => 
			array (
				'id' => 327,
				'id_provincia' => 39,
				'cod_municipio' => 7,
				'DC' => 3,
				'nombre' => 'Arredondo',
			),
			327 => 
			array (
				'id' => 328,
				'id_provincia' => 40,
				'cod_municipio' => 7,
				'DC' => 7,
				'nombre' => 'Aldealengua de Pedraza',
			),
			328 => 
			array (
				'id' => 329,
				'id_provincia' => 41,
				'cod_municipio' => 7,
				'DC' => 4,
				'nombre' => 'Algaba, La',
			),
			329 => 
			array (
				'id' => 330,
				'id_provincia' => 42,
				'cod_municipio' => 7,
				'DC' => 9,
				'nombre' => 'Alcubilla de Avellaneda',
			),
			330 => 
			array (
				'id' => 331,
				'id_provincia' => 43,
				'cod_municipio' => 7,
				'DC' => 5,
				'nombre' => 'Aleixar, L\'',
			),
			331 => 
			array (
				'id' => 332,
				'id_provincia' => 44,
				'cod_municipio' => 7,
				'DC' => 0,
				'nombre' => 'Alba',
			),
			332 => 
			array (
				'id' => 333,
				'id_provincia' => 45,
				'cod_municipio' => 7,
				'DC' => 3,
				'nombre' => 'Alcolea de Tajo',
			),
			333 => 
			array (
				'id' => 334,
				'id_provincia' => 46,
				'cod_municipio' => 7,
				'DC' => 6,
				'nombre' => 'Albal',
			),
			334 => 
			array (
				'id' => 335,
				'id_provincia' => 47,
				'cod_municipio' => 7,
				'DC' => 2,
				'nombre' => 'Aldeamayor de San Martín',
			),
			335 => 
			array (
				'id' => 336,
				'id_provincia' => 48,
				'cod_municipio' => 7,
				'DC' => 8,
				'nombre' => 'Munitibar-Arbatzegi Gerrikaitz',
			),
			336 => 
			array (
				'id' => 337,
				'id_provincia' => 49,
				'cod_municipio' => 7,
				'DC' => 1,
				'nombre' => 'Almaraz de Duero',
			),
			337 => 
			array (
				'id' => 338,
				'id_provincia' => 50,
				'cod_municipio' => 7,
				'DC' => 4,
				'nombre' => 'Aladrén',
			),
			338 => 
			array (
				'id' => 339,
				'id_provincia' => 1,
				'cod_municipio' => 8,
				'DC' => 8,
				'nombre' => 'Arrazua-Ubarrundia',
			),
			339 => 
			array (
				'id' => 340,
				'id_provincia' => 2,
				'cod_municipio' => 8,
				'DC' => 3,
				'nombre' => 'Alcaraz',
			),
			340 => 
			array (
				'id' => 341,
				'id_provincia' => 3,
				'cod_municipio' => 8,
				'DC' => 9,
				'nombre' => 'Alcoleja',
			),
			341 => 
			array (
				'id' => 342,
				'id_provincia' => 4,
				'cod_municipio' => 8,
				'DC' => 4,
				'nombre' => 'Alcóntar',
			),
			342 => 
			array (
				'id' => 343,
				'id_provincia' => 5,
				'cod_municipio' => 8,
				'DC' => 7,
				'nombre' => 'Aldeaseca',
			),
			343 => 
			array (
				'id' => 344,
				'id_provincia' => 6,
				'cod_municipio' => 8,
				'DC' => 0,
				'nombre' => 'Alconera',
			),
			344 => 
			array (
				'id' => 345,
				'id_provincia' => 7,
				'cod_municipio' => 8,
				'DC' => 6,
				'nombre' => 'Binissalem',
			),
			345 => 
			array (
				'id' => 346,
				'id_provincia' => 8,
				'cod_municipio' => 8,
				'DC' => 2,
				'nombre' => 'Argençola',
			),
			346 => 
			array (
				'id' => 347,
				'id_provincia' => 10,
				'cod_municipio' => 8,
				'DC' => 9,
				'nombre' => 'Alcántara',
			),
			347 => 
			array (
				'id' => 348,
				'id_provincia' => 11,
				'cod_municipio' => 8,
				'DC' => 6,
				'nombre' => 'Barrios, Los',
			),
			348 => 
			array (
				'id' => 349,
				'id_provincia' => 12,
				'cod_municipio' => 8,
				'DC' => 1,
				'nombre' => 'Algimia de Almonacid',
			),
			349 => 
			array (
				'id' => 350,
				'id_provincia' => 13,
				'cod_municipio' => 8,
				'DC' => 7,
				'nombre' => 'Alcubillas',
			),
			350 => 
			array (
				'id' => 351,
				'id_provincia' => 14,
				'cod_municipio' => 8,
				'DC' => 2,
				'nombre' => 'Belalcázar',
			),
			351 => 
			array (
				'id' => 352,
				'id_provincia' => 15,
				'cod_municipio' => 8,
				'DC' => 5,
				'nombre' => 'Bergondo',
			),
			352 => 
			array (
				'id' => 353,
				'id_provincia' => 16,
				'cod_municipio' => 8,
				'DC' => 8,
				'nombre' => 'Alcalá de la Vega',
			),
			353 => 
			array (
				'id' => 354,
				'id_provincia' => 17,
				'cod_municipio' => 8,
				'DC' => 4,
				'nombre' => 'Anglès',
			),
			354 => 
			array (
				'id' => 355,
				'id_provincia' => 19,
				'cod_municipio' => 8,
				'DC' => 3,
				'nombre' => 'Albendiego',
			),
			355 => 
			array (
				'id' => 356,
				'id_provincia' => 20,
				'cod_municipio' => 8,
				'DC' => 7,
				'nombre' => 'Amezketa',
			),
			356 => 
			array (
				'id' => 357,
				'id_provincia' => 21,
				'cod_municipio' => 8,
				'DC' => 4,
				'nombre' => 'Aroche',
			),
			357 => 
			array (
				'id' => 358,
				'id_provincia' => 22,
				'cod_municipio' => 8,
				'DC' => 9,
				'nombre' => 'Albalatillo',
			),
			358 => 
			array (
				'id' => 359,
				'id_provincia' => 23,
				'cod_municipio' => 8,
				'DC' => 5,
				'nombre' => 'Arquillos',
			),
			359 => 
			array (
				'id' => 360,
				'id_provincia' => 24,
				'cod_municipio' => 8,
				'DC' => 0,
				'nombre' => 'Astorga',
			),
			360 => 
			array (
				'id' => 361,
				'id_provincia' => 25,
				'cod_municipio' => 8,
				'DC' => 3,
				'nombre' => 'Albesa',
			),
			361 => 
			array (
				'id' => 362,
				'id_provincia' => 26,
				'cod_municipio' => 8,
				'DC' => 6,
				'nombre' => 'Aldeanueva de Ebro',
			),
			362 => 
			array (
				'id' => 363,
				'id_provincia' => 27,
				'cod_municipio' => 8,
				'DC' => 2,
				'nombre' => 'Bóveda',
			),
			363 => 
			array (
				'id' => 364,
				'id_provincia' => 28,
				'cod_municipio' => 8,
				'DC' => 8,
				'nombre' => 'Aldea del Fresno',
			),
			364 => 
			array (
				'id' => 365,
				'id_provincia' => 29,
				'cod_municipio' => 8,
				'DC' => 1,
				'nombre' => 'Alhaurín el Grande',
			),
			365 => 
			array (
				'id' => 366,
				'id_provincia' => 30,
				'cod_municipio' => 8,
				'DC' => 5,
				'nombre' => 'Alhama de Murcia',
			),
			366 => 
			array (
				'id' => 367,
				'id_provincia' => 31,
				'cod_municipio' => 8,
				'DC' => 2,
				'nombre' => 'Aguilar de Codés',
			),
			367 => 
			array (
				'id' => 368,
				'id_provincia' => 32,
				'cod_municipio' => 8,
				'DC' => 7,
				'nombre' => 'Barbadás',
			),
			368 => 
			array (
				'id' => 369,
				'id_provincia' => 33,
				'cod_municipio' => 8,
				'DC' => 3,
				'nombre' => 'Cabrales',
			),
			369 => 
			array (
				'id' => 370,
				'id_provincia' => 35,
				'cod_municipio' => 8,
				'DC' => 1,
				'nombre' => 'Firgas',
			),
			370 => 
			array (
				'id' => 371,
				'id_provincia' => 36,
				'cod_municipio' => 8,
				'DC' => 4,
				'nombre' => 'Cangas',
			),
			371 => 
			array (
				'id' => 372,
				'id_provincia' => 37,
				'cod_municipio' => 8,
				'DC' => 0,
				'nombre' => 'Alba de Tormes',
			),
			372 => 
			array (
				'id' => 373,
				'id_provincia' => 38,
				'cod_municipio' => 8,
				'DC' => 6,
				'nombre' => 'Breña Alta',
			),
			373 => 
			array (
				'id' => 374,
				'id_provincia' => 39,
				'cod_municipio' => 8,
				'DC' => 9,
				'nombre' => 'Astillero, El',
			),
			374 => 
			array (
				'id' => 375,
				'id_provincia' => 40,
				'cod_municipio' => 8,
				'DC' => 3,
				'nombre' => 'Aldealengua de Santa María',
			),
			375 => 
			array (
				'id' => 376,
				'id_provincia' => 41,
				'cod_municipio' => 8,
				'DC' => 0,
				'nombre' => 'Algámitas',
			),
			376 => 
			array (
				'id' => 377,
				'id_provincia' => 42,
				'cod_municipio' => 8,
				'DC' => 5,
				'nombre' => 'Alcubilla de las Peñas',
			),
			377 => 
			array (
				'id' => 378,
				'id_provincia' => 43,
				'cod_municipio' => 8,
				'DC' => 1,
				'nombre' => 'Alfara de Carles',
			),
			378 => 
			array (
				'id' => 379,
				'id_provincia' => 44,
				'cod_municipio' => 8,
				'DC' => 6,
				'nombre' => 'Albalate del Arzobispo',
			),
			379 => 
			array (
				'id' => 380,
				'id_provincia' => 45,
				'cod_municipio' => 8,
				'DC' => 9,
				'nombre' => 'Aldea en Cabo',
			),
			380 => 
			array (
				'id' => 381,
				'id_provincia' => 46,
				'cod_municipio' => 8,
				'DC' => 2,
				'nombre' => 'Albalat de la Ribera',
			),
			381 => 
			array (
				'id' => 382,
				'id_provincia' => 47,
				'cod_municipio' => 8,
				'DC' => 8,
				'nombre' => 'Almenara de Adaja',
			),
			382 => 
			array (
				'id' => 383,
				'id_provincia' => 48,
				'cod_municipio' => 8,
				'DC' => 4,
				'nombre' => 'Artzentales',
			),
			383 => 
			array (
				'id' => 384,
				'id_provincia' => 49,
				'cod_municipio' => 8,
				'DC' => 7,
				'nombre' => 'Almeida de Sayago',
			),
			384 => 
			array (
				'id' => 385,
				'id_provincia' => 50,
				'cod_municipio' => 8,
				'DC' => 0,
				'nombre' => 'Alagón',
			),
			385 => 
			array (
				'id' => 386,
				'id_provincia' => 1,
				'cod_municipio' => 9,
				'DC' => 1,
				'nombre' => 'Asparrena',
			),
			386 => 
			array (
				'id' => 387,
				'id_provincia' => 2,
				'cod_municipio' => 9,
				'DC' => 6,
				'nombre' => 'Almansa',
			),
			387 => 
			array (
				'id' => 388,
				'id_provincia' => 3,
				'cod_municipio' => 9,
				'DC' => 2,
				'nombre' => 'Alcoy/Alcoi',
			),
			388 => 
			array (
				'id' => 389,
				'id_provincia' => 4,
				'cod_municipio' => 9,
				'DC' => 7,
				'nombre' => 'Alcudia de Monteagud',
			),
			389 => 
			array (
				'id' => 390,
				'id_provincia' => 6,
				'cod_municipio' => 9,
				'DC' => 3,
				'nombre' => 'Aljucén',
			),
			390 => 
			array (
				'id' => 391,
				'id_provincia' => 7,
				'cod_municipio' => 9,
				'DC' => 9,
				'nombre' => 'Búger',
			),
			391 => 
			array (
				'id' => 392,
				'id_provincia' => 8,
				'cod_municipio' => 9,
				'DC' => 5,
				'nombre' => 'Argentona',
			),
			392 => 
			array (
				'id' => 393,
				'id_provincia' => 9,
				'cod_municipio' => 9,
				'DC' => 8,
				'nombre' => 'Albillos',
			),
			393 => 
			array (
				'id' => 394,
				'id_provincia' => 10,
				'cod_municipio' => 9,
				'DC' => 2,
				'nombre' => 'Alcollarín',
			),
			394 => 
			array (
				'id' => 395,
				'id_provincia' => 11,
				'cod_municipio' => 9,
				'DC' => 9,
				'nombre' => 'Benaocaz',
			),
			395 => 
			array (
				'id' => 396,
				'id_provincia' => 12,
				'cod_municipio' => 9,
				'DC' => 4,
				'nombre' => 'Almazora/Almassora',
			),
			396 => 
			array (
				'id' => 397,
				'id_provincia' => 13,
				'cod_municipio' => 9,
				'DC' => 0,
				'nombre' => 'Aldea del Rey',
			),
			397 => 
			array (
				'id' => 398,
				'id_provincia' => 14,
				'cod_municipio' => 9,
				'DC' => 5,
				'nombre' => 'Belmez',
			),
			398 => 
			array (
				'id' => 399,
				'id_provincia' => 15,
				'cod_municipio' => 9,
				'DC' => 8,
				'nombre' => 'Betanzos',
			),
			399 => 
			array (
				'id' => 400,
				'id_provincia' => 16,
				'cod_municipio' => 9,
				'DC' => 1,
				'nombre' => 'Alcantud',
			),
			400 => 
			array (
				'id' => 401,
				'id_provincia' => 17,
				'cod_municipio' => 9,
				'DC' => 7,
				'nombre' => 'Arbúcies',
			),
			401 => 
			array (
				'id' => 402,
				'id_provincia' => 19,
				'cod_municipio' => 9,
				'DC' => 6,
				'nombre' => 'Alcocer',
			),
			402 => 
			array (
				'id' => 403,
				'id_provincia' => 20,
				'cod_municipio' => 9,
				'DC' => 0,
				'nombre' => 'Andoain',
			),
			403 => 
			array (
				'id' => 404,
				'id_provincia' => 21,
				'cod_municipio' => 9,
				'DC' => 7,
				'nombre' => 'Arroyomolinos de León',
			),
			404 => 
			array (
				'id' => 405,
				'id_provincia' => 22,
				'cod_municipio' => 9,
				'DC' => 2,
				'nombre' => 'Albelda',
			),
			405 => 
			array (
				'id' => 406,
				'id_provincia' => 23,
				'cod_municipio' => 9,
				'DC' => 8,
				'nombre' => 'Baeza',
			),
			406 => 
			array (
				'id' => 407,
				'id_provincia' => 24,
				'cod_municipio' => 9,
				'DC' => 3,
				'nombre' => 'Balboa',
			),
			407 => 
			array (
				'id' => 408,
				'id_provincia' => 25,
				'cod_municipio' => 9,
				'DC' => 6,
				'nombre' => 'Albi, L\'',
			),
			408 => 
			array (
				'id' => 409,
				'id_provincia' => 26,
				'cod_municipio' => 9,
				'DC' => 9,
				'nombre' => 'Alesanco',
			),
			409 => 
			array (
				'id' => 410,
				'id_provincia' => 27,
				'cod_municipio' => 9,
				'DC' => 5,
				'nombre' => 'Carballedo',
			),
			410 => 
			array (
				'id' => 411,
				'id_provincia' => 28,
				'cod_municipio' => 9,
				'DC' => 1,
				'nombre' => 'Algete',
			),
			411 => 
			array (
				'id' => 412,
				'id_provincia' => 29,
				'cod_municipio' => 9,
				'DC' => 4,
				'nombre' => 'Almáchar',
			),
			412 => 
			array (
				'id' => 413,
				'id_provincia' => 30,
				'cod_municipio' => 9,
				'DC' => 8,
				'nombre' => 'Archena',
			),
			413 => 
			array (
				'id' => 414,
				'id_provincia' => 31,
				'cod_municipio' => 9,
				'DC' => 5,
				'nombre' => 'Aibar/Oibar',
			),
			414 => 
			array (
				'id' => 415,
				'id_provincia' => 32,
				'cod_municipio' => 9,
				'DC' => 0,
				'nombre' => 'Barco de Valdeorras, O',
			),
			415 => 
			array (
				'id' => 416,
				'id_provincia' => 33,
				'cod_municipio' => 9,
				'DC' => 6,
				'nombre' => 'Cabranes',
			),
			416 => 
			array (
				'id' => 417,
				'id_provincia' => 34,
				'cod_municipio' => 9,
				'DC' => 1,
				'nombre' => 'Amayuelas de Arriba',
			),
			417 => 
			array (
				'id' => 418,
				'id_provincia' => 35,
				'cod_municipio' => 9,
				'DC' => 4,
				'nombre' => 'Gáldar',
			),
			418 => 
			array (
				'id' => 419,
				'id_provincia' => 36,
				'cod_municipio' => 9,
				'DC' => 7,
				'nombre' => 'Cañiza, A',
			),
			419 => 
			array (
				'id' => 420,
				'id_provincia' => 37,
				'cod_municipio' => 9,
				'DC' => 3,
				'nombre' => 'Alba de Yeltes',
			),
			420 => 
			array (
				'id' => 421,
				'id_provincia' => 38,
				'cod_municipio' => 9,
				'DC' => 9,
				'nombre' => 'Breña Baja',
			),
			421 => 
			array (
				'id' => 422,
				'id_provincia' => 39,
				'cod_municipio' => 9,
				'DC' => 2,
				'nombre' => 'Bárcena de Cicero',
			),
			422 => 
			array (
				'id' => 423,
				'id_provincia' => 40,
				'cod_municipio' => 9,
				'DC' => 6,
				'nombre' => 'Aldeanueva de la Serrezuela',
			),
			423 => 
			array (
				'id' => 424,
				'id_provincia' => 41,
				'cod_municipio' => 9,
				'DC' => 3,
				'nombre' => 'Almadén de la Plata',
			),
			424 => 
			array (
				'id' => 425,
				'id_provincia' => 42,
				'cod_municipio' => 9,
				'DC' => 8,
				'nombre' => 'Aldealafuente',
			),
			425 => 
			array (
				'id' => 426,
				'id_provincia' => 43,
				'cod_municipio' => 9,
				'DC' => 4,
				'nombre' => 'Alforja',
			),
			426 => 
			array (
				'id' => 427,
				'id_provincia' => 44,
				'cod_municipio' => 9,
				'DC' => 9,
				'nombre' => 'Albarracín',
			),
			427 => 
			array (
				'id' => 428,
				'id_provincia' => 45,
				'cod_municipio' => 9,
				'DC' => 2,
				'nombre' => 'Aldeanueva de Barbarroya',
			),
			428 => 
			array (
				'id' => 429,
				'id_provincia' => 46,
				'cod_municipio' => 9,
				'DC' => 5,
				'nombre' => 'Albalat dels Sorells',
			),
			429 => 
			array (
				'id' => 430,
				'id_provincia' => 47,
				'cod_municipio' => 9,
				'DC' => 1,
				'nombre' => 'Amusquillo',
			),
			430 => 
			array (
				'id' => 431,
				'id_provincia' => 48,
				'cod_municipio' => 9,
				'DC' => 7,
				'nombre' => 'Arrankudiaga',
			),
			431 => 
			array (
				'id' => 432,
				'id_provincia' => 49,
				'cod_municipio' => 9,
				'DC' => 0,
				'nombre' => 'Andavías',
			),
			432 => 
			array (
				'id' => 433,
				'id_provincia' => 50,
				'cod_municipio' => 9,
				'DC' => 3,
				'nombre' => 'Alarba',
			),
			433 => 
			array (
				'id' => 434,
				'id_provincia' => 1,
				'cod_municipio' => 10,
				'DC' => 5,
				'nombre' => 'Ayala/Aiara',
			),
			434 => 
			array (
				'id' => 435,
				'id_provincia' => 2,
				'cod_municipio' => 10,
				'DC' => 0,
				'nombre' => 'Alpera',
			),
			435 => 
			array (
				'id' => 436,
				'id_provincia' => 3,
				'cod_municipio' => 10,
				'DC' => 6,
				'nombre' => 'Alfafara',
			),
			436 => 
			array (
				'id' => 437,
				'id_provincia' => 4,
				'cod_municipio' => 10,
				'DC' => 1,
				'nombre' => 'Alhabia',
			),
			437 => 
			array (
				'id' => 438,
				'id_provincia' => 5,
				'cod_municipio' => 10,
				'DC' => 4,
				'nombre' => 'Aldehuela, La',
			),
			438 => 
			array (
				'id' => 439,
				'id_provincia' => 6,
				'cod_municipio' => 10,
				'DC' => 7,
				'nombre' => 'Almendral',
			),
			439 => 
			array (
				'id' => 440,
				'id_provincia' => 7,
				'cod_municipio' => 10,
				'DC' => 3,
				'nombre' => 'Bunyola',
			),
			440 => 
			array (
				'id' => 441,
				'id_provincia' => 8,
				'cod_municipio' => 10,
				'DC' => 9,
				'nombre' => 'Artés',
			),
			441 => 
			array (
				'id' => 442,
				'id_provincia' => 9,
				'cod_municipio' => 10,
				'DC' => 2,
				'nombre' => 'Alcocero de Mola',
			),
			442 => 
			array (
				'id' => 443,
				'id_provincia' => 10,
				'cod_municipio' => 10,
				'DC' => 6,
				'nombre' => 'Alcuéscar',
			),
			443 => 
			array (
				'id' => 444,
				'id_provincia' => 11,
				'cod_municipio' => 10,
				'DC' => 3,
				'nombre' => 'Bornos',
			),
			444 => 
			array (
				'id' => 445,
				'id_provincia' => 12,
				'cod_municipio' => 10,
				'DC' => 8,
				'nombre' => 'Almedíjar',
			),
			445 => 
			array (
				'id' => 446,
				'id_provincia' => 13,
				'cod_municipio' => 10,
				'DC' => 4,
				'nombre' => 'Alhambra',
			),
			446 => 
			array (
				'id' => 447,
				'id_provincia' => 14,
				'cod_municipio' => 10,
				'DC' => 9,
				'nombre' => 'Benamejí',
			),
			447 => 
			array (
				'id' => 448,
				'id_provincia' => 15,
				'cod_municipio' => 10,
				'DC' => 2,
				'nombre' => 'Boimorto',
			),
			448 => 
			array (
				'id' => 449,
				'id_provincia' => 16,
				'cod_municipio' => 10,
				'DC' => 5,
				'nombre' => 'Alcázar del Rey',
			),
			449 => 
			array (
				'id' => 450,
				'id_provincia' => 17,
				'cod_municipio' => 10,
				'DC' => 1,
				'nombre' => 'Argelaguer',
			),
			450 => 
			array (
				'id' => 451,
				'id_provincia' => 18,
				'cod_municipio' => 10,
				'DC' => 7,
				'nombre' => 'Aldeire',
			),
			451 => 
			array (
				'id' => 452,
				'id_provincia' => 19,
				'cod_municipio' => 10,
				'DC' => 0,
				'nombre' => 'Alcolea de las Peñas',
			),
			452 => 
			array (
				'id' => 453,
				'id_provincia' => 20,
				'cod_municipio' => 10,
				'DC' => 4,
				'nombre' => 'Anoeta',
			),
			453 => 
			array (
				'id' => 454,
				'id_provincia' => 21,
				'cod_municipio' => 10,
				'DC' => 1,
				'nombre' => 'Ayamonte',
			),
			454 => 
			array (
				'id' => 455,
				'id_provincia' => 23,
				'cod_municipio' => 10,
				'DC' => 2,
				'nombre' => 'Bailén',
			),
			455 => 
			array (
				'id' => 456,
				'id_provincia' => 24,
				'cod_municipio' => 10,
				'DC' => 7,
				'nombre' => 'Bañeza, La',
			),
			456 => 
			array (
				'id' => 457,
				'id_provincia' => 25,
				'cod_municipio' => 10,
				'DC' => 0,
				'nombre' => 'Alcanó',
			),
			457 => 
			array (
				'id' => 458,
				'id_provincia' => 26,
				'cod_municipio' => 10,
				'DC' => 3,
				'nombre' => 'Alesón',
			),
			458 => 
			array (
				'id' => 459,
				'id_provincia' => 27,
				'cod_municipio' => 10,
				'DC' => 9,
				'nombre' => 'Castro de Rei',
			),
			459 => 
			array (
				'id' => 460,
				'id_provincia' => 28,
				'cod_municipio' => 10,
				'DC' => 5,
				'nombre' => 'Alpedrete',
			),
			460 => 
			array (
				'id' => 461,
				'id_provincia' => 29,
				'cod_municipio' => 10,
				'DC' => 8,
				'nombre' => 'Almargen',
			),
			461 => 
			array (
				'id' => 462,
				'id_provincia' => 30,
				'cod_municipio' => 10,
				'DC' => 2,
				'nombre' => 'Beniel',
			),
			462 => 
			array (
				'id' => 463,
				'id_provincia' => 31,
				'cod_municipio' => 10,
				'DC' => 9,
				'nombre' => 'Altsasu/Alsasua',
			),
			463 => 
			array (
				'id' => 464,
				'id_provincia' => 32,
				'cod_municipio' => 10,
				'DC' => 4,
				'nombre' => 'Beade',
			),
			464 => 
			array (
				'id' => 465,
				'id_provincia' => 33,
				'cod_municipio' => 10,
				'DC' => 0,
				'nombre' => 'Candamo',
			),
			465 => 
			array (
				'id' => 466,
				'id_provincia' => 34,
				'cod_municipio' => 10,
				'DC' => 5,
				'nombre' => 'Ampudia',
			),
			466 => 
			array (
				'id' => 467,
				'id_provincia' => 35,
				'cod_municipio' => 10,
				'DC' => 8,
				'nombre' => 'Haría',
			),
			467 => 
			array (
				'id' => 468,
				'id_provincia' => 36,
				'cod_municipio' => 10,
				'DC' => 1,
				'nombre' => 'Catoira',
			),
			468 => 
			array (
				'id' => 469,
				'id_provincia' => 37,
				'cod_municipio' => 10,
				'DC' => 7,
				'nombre' => 'Alberca, La',
			),
			469 => 
			array (
				'id' => 470,
				'id_provincia' => 38,
				'cod_municipio' => 10,
				'DC' => 3,
				'nombre' => 'Buenavista del Norte',
			),
			470 => 
			array (
				'id' => 471,
				'id_provincia' => 39,
				'cod_municipio' => 10,
				'DC' => 6,
				'nombre' => 'Bárcena de Pie de Concha',
			),
			471 => 
			array (
				'id' => 472,
				'id_provincia' => 40,
				'cod_municipio' => 10,
				'DC' => 0,
				'nombre' => 'Aldeanueva del Codonal',
			),
			472 => 
			array (
				'id' => 473,
				'id_provincia' => 41,
				'cod_municipio' => 10,
				'DC' => 7,
				'nombre' => 'Almensilla',
			),
			473 => 
			array (
				'id' => 474,
				'id_provincia' => 42,
				'cod_municipio' => 10,
				'DC' => 2,
				'nombre' => 'Aldealices',
			),
			474 => 
			array (
				'id' => 475,
				'id_provincia' => 43,
				'cod_municipio' => 10,
				'DC' => 8,
				'nombre' => 'Alió',
			),
			475 => 
			array (
				'id' => 476,
				'id_provincia' => 44,
				'cod_municipio' => 10,
				'DC' => 3,
				'nombre' => 'Albentosa',
			),
			476 => 
			array (
				'id' => 477,
				'id_provincia' => 45,
				'cod_municipio' => 10,
				'DC' => 6,
				'nombre' => 'Aldeanueva de San Bartolomé',
			),
			477 => 
			array (
				'id' => 478,
				'id_provincia' => 46,
				'cod_municipio' => 10,
				'DC' => 9,
				'nombre' => 'Albalat dels Tarongers',
			),
			478 => 
			array (
				'id' => 479,
				'id_provincia' => 47,
				'cod_municipio' => 10,
				'DC' => 5,
				'nombre' => 'Arroyo de la Encomienda',
			),
			479 => 
			array (
				'id' => 480,
				'id_provincia' => 48,
				'cod_municipio' => 10,
				'DC' => 1,
				'nombre' => 'Arrieta',
			),
			480 => 
			array (
				'id' => 481,
				'id_provincia' => 49,
				'cod_municipio' => 10,
				'DC' => 4,
				'nombre' => 'Arcenillas',
			),
			481 => 
			array (
				'id' => 482,
				'id_provincia' => 50,
				'cod_municipio' => 10,
				'DC' => 7,
				'nombre' => 'Alberite de San Juan',
			),
			482 => 
			array (
				'id' => 483,
				'id_provincia' => 1,
				'cod_municipio' => 11,
				'DC' => 2,
				'nombre' => 'Baños de Ebro/Mañueta',
			),
			483 => 
			array (
				'id' => 484,
				'id_provincia' => 2,
				'cod_municipio' => 11,
				'DC' => 7,
				'nombre' => 'Ayna',
			),
			484 => 
			array (
				'id' => 485,
				'id_provincia' => 3,
				'cod_municipio' => 11,
				'DC' => 3,
				'nombre' => 'Alfàs del Pi, l\'',
			),
			485 => 
			array (
				'id' => 486,
				'id_provincia' => 4,
				'cod_municipio' => 11,
				'DC' => 8,
				'nombre' => 'Alhama de Almería',
			),
			486 => 
			array (
				'id' => 487,
				'id_provincia' => 6,
				'cod_municipio' => 11,
				'DC' => 4,
				'nombre' => 'Almendralejo',
			),
			487 => 
			array (
				'id' => 488,
				'id_provincia' => 7,
				'cod_municipio' => 11,
				'DC' => 0,
				'nombre' => 'Calvià',
			),
			488 => 
			array (
				'id' => 489,
				'id_provincia' => 8,
				'cod_municipio' => 11,
				'DC' => 6,
				'nombre' => 'Avià',
			),
			489 => 
			array (
				'id' => 490,
				'id_provincia' => 9,
				'cod_municipio' => 11,
				'DC' => 9,
				'nombre' => 'Alfoz de Bricia',
			),
			490 => 
			array (
				'id' => 491,
				'id_provincia' => 10,
				'cod_municipio' => 11,
				'DC' => 3,
				'nombre' => 'Aldeacentenera',
			),
			491 => 
			array (
				'id' => 492,
				'id_provincia' => 11,
				'cod_municipio' => 11,
				'DC' => 0,
				'nombre' => 'Bosque, El',
			),
			492 => 
			array (
				'id' => 493,
				'id_provincia' => 12,
				'cod_municipio' => 11,
				'DC' => 5,
				'nombre' => 'Almenara',
			),
			493 => 
			array (
				'id' => 494,
				'id_provincia' => 13,
				'cod_municipio' => 11,
				'DC' => 1,
				'nombre' => 'Almadén',
			),
			494 => 
			array (
				'id' => 495,
				'id_provincia' => 14,
				'cod_municipio' => 11,
				'DC' => 6,
				'nombre' => 'Blázquez, Los',
			),
			495 => 
			array (
				'id' => 496,
				'id_provincia' => 15,
				'cod_municipio' => 11,
				'DC' => 9,
				'nombre' => 'Boiro',
			),
			496 => 
			array (
				'id' => 497,
				'id_provincia' => 16,
				'cod_municipio' => 11,
				'DC' => 2,
				'nombre' => 'Alcohujate',
			),
			497 => 
			array (
				'id' => 498,
				'id_provincia' => 17,
				'cod_municipio' => 11,
				'DC' => 8,
				'nombre' => 'Armentera, L\'',
			),
			498 => 
			array (
				'id' => 499,
				'id_provincia' => 18,
				'cod_municipio' => 11,
				'DC' => 4,
				'nombre' => 'Alfacar',
			),
			499 => 
			array (
				'id' => 500,
				'id_provincia' => 19,
				'cod_municipio' => 11,
				'DC' => 7,
				'nombre' => 'Alcolea del Pinar',
			),
		));
		\DB::table('municipios')->insert(array (
			0 => 
			array (
				'id' => 501,
				'id_provincia' => 20,
				'cod_municipio' => 11,
				'DC' => 1,
				'nombre' => 'Antzuola',
			),
			1 => 
			array (
				'id' => 502,
				'id_provincia' => 21,
				'cod_municipio' => 11,
				'DC' => 8,
				'nombre' => 'Beas',
			),
			2 => 
			array (
				'id' => 503,
				'id_provincia' => 22,
				'cod_municipio' => 11,
				'DC' => 3,
				'nombre' => 'Albero Alto',
			),
			3 => 
			array (
				'id' => 504,
				'id_provincia' => 23,
				'cod_municipio' => 11,
				'DC' => 9,
				'nombre' => 'Baños de la Encina',
			),
			4 => 
			array (
				'id' => 505,
				'id_provincia' => 24,
				'cod_municipio' => 11,
				'DC' => 4,
				'nombre' => 'Barjas',
			),
			5 => 
			array (
				'id' => 506,
				'id_provincia' => 25,
				'cod_municipio' => 11,
				'DC' => 7,
				'nombre' => 'Alcarràs',
			),
			6 => 
			array (
				'id' => 507,
				'id_provincia' => 26,
				'cod_municipio' => 11,
				'DC' => 0,
				'nombre' => 'Alfaro',
			),
			7 => 
			array (
				'id' => 508,
				'id_provincia' => 27,
				'cod_municipio' => 11,
				'DC' => 6,
				'nombre' => 'Castroverde',
			),
			8 => 
			array (
				'id' => 509,
				'id_provincia' => 28,
				'cod_municipio' => 11,
				'DC' => 2,
				'nombre' => 'Ambite',
			),
			9 => 
			array (
				'id' => 510,
				'id_provincia' => 29,
				'cod_municipio' => 11,
				'DC' => 5,
				'nombre' => 'Almogía',
			),
			10 => 
			array (
				'id' => 511,
				'id_provincia' => 30,
				'cod_municipio' => 11,
				'DC' => 9,
				'nombre' => 'Blanca',
			),
			11 => 
			array (
				'id' => 512,
				'id_provincia' => 31,
				'cod_municipio' => 11,
				'DC' => 6,
				'nombre' => 'Allín/Allin',
			),
			12 => 
			array (
				'id' => 513,
				'id_provincia' => 32,
				'cod_municipio' => 11,
				'DC' => 1,
				'nombre' => 'Beariz',
			),
			13 => 
			array (
				'id' => 514,
				'id_provincia' => 33,
				'cod_municipio' => 11,
				'DC' => 7,
				'nombre' => 'Cangas del Narcea',
			),
			14 => 
			array (
				'id' => 515,
				'id_provincia' => 34,
				'cod_municipio' => 11,
				'DC' => 2,
				'nombre' => 'Amusco',
			),
			15 => 
			array (
				'id' => 516,
				'id_provincia' => 35,
				'cod_municipio' => 11,
				'DC' => 5,
				'nombre' => 'Ingenio',
			),
			16 => 
			array (
				'id' => 517,
				'id_provincia' => 36,
				'cod_municipio' => 11,
				'DC' => 8,
				'nombre' => 'Cerdedo',
			),
			17 => 
			array (
				'id' => 518,
				'id_provincia' => 37,
				'cod_municipio' => 11,
				'DC' => 4,
				'nombre' => 'Alberguería de Argañán, La',
			),
			18 => 
			array (
				'id' => 519,
				'id_provincia' => 38,
				'cod_municipio' => 11,
				'DC' => 0,
				'nombre' => 'Candelaria',
			),
			19 => 
			array (
				'id' => 520,
				'id_provincia' => 39,
				'cod_municipio' => 11,
				'DC' => 3,
				'nombre' => 'Bareyo',
			),
			20 => 
			array (
				'id' => 521,
				'id_provincia' => 41,
				'cod_municipio' => 11,
				'DC' => 4,
				'nombre' => 'Arahal',
			),
			21 => 
			array (
				'id' => 522,
				'id_provincia' => 42,
				'cod_municipio' => 11,
				'DC' => 9,
				'nombre' => 'Aldealpozo',
			),
			22 => 
			array (
				'id' => 523,
				'id_provincia' => 43,
				'cod_municipio' => 11,
				'DC' => 5,
				'nombre' => 'Almoster',
			),
			23 => 
			array (
				'id' => 524,
				'id_provincia' => 44,
				'cod_municipio' => 11,
				'DC' => 0,
				'nombre' => 'Alcaine',
			),
			24 => 
			array (
				'id' => 525,
				'id_provincia' => 45,
				'cod_municipio' => 11,
				'DC' => 3,
				'nombre' => 'Almendral de la Cañada',
			),
			25 => 
			array (
				'id' => 526,
				'id_provincia' => 46,
				'cod_municipio' => 11,
				'DC' => 6,
				'nombre' => 'Alberic',
			),
			26 => 
			array (
				'id' => 527,
				'id_provincia' => 47,
				'cod_municipio' => 11,
				'DC' => 2,
				'nombre' => 'Ataquines',
			),
			27 => 
			array (
				'id' => 528,
				'id_provincia' => 48,
				'cod_municipio' => 11,
				'DC' => 8,
				'nombre' => 'Arrigorriaga',
			),
			28 => 
			array (
				'id' => 529,
				'id_provincia' => 49,
				'cod_municipio' => 11,
				'DC' => 1,
				'nombre' => 'Arcos de la Polvorosa',
			),
			29 => 
			array (
				'id' => 530,
				'id_provincia' => 50,
				'cod_municipio' => 11,
				'DC' => 4,
				'nombre' => 'Albeta',
			),
			30 => 
			array (
				'id' => 531,
				'id_provincia' => 2,
				'cod_municipio' => 12,
				'DC' => 2,
				'nombre' => 'Balazote',
			),
			31 => 
			array (
				'id' => 532,
				'id_provincia' => 3,
				'cod_municipio' => 12,
				'DC' => 8,
				'nombre' => 'Algorfa',
			),
			32 => 
			array (
				'id' => 533,
				'id_provincia' => 4,
				'cod_municipio' => 12,
				'DC' => 3,
				'nombre' => 'Alicún',
			),
			33 => 
			array (
				'id' => 534,
				'id_provincia' => 5,
				'cod_municipio' => 12,
				'DC' => 6,
				'nombre' => 'Amavida',
			),
			34 => 
			array (
				'id' => 535,
				'id_provincia' => 6,
				'cod_municipio' => 12,
				'DC' => 9,
				'nombre' => 'Arroyo de San Serván',
			),
			35 => 
			array (
				'id' => 536,
				'id_provincia' => 7,
				'cod_municipio' => 12,
				'DC' => 5,
				'nombre' => 'Campanet',
			),
			36 => 
			array (
				'id' => 537,
				'id_provincia' => 8,
				'cod_municipio' => 12,
				'DC' => 1,
				'nombre' => 'Avinyó',
			),
			37 => 
			array (
				'id' => 538,
				'id_provincia' => 9,
				'cod_municipio' => 12,
				'DC' => 4,
				'nombre' => 'Alfoz de Santa Gadea',
			),
			38 => 
			array (
				'id' => 539,
				'id_provincia' => 10,
				'cod_municipio' => 12,
				'DC' => 8,
				'nombre' => 'Aldea del Cano',
			),
			39 => 
			array (
				'id' => 540,
				'id_provincia' => 11,
				'cod_municipio' => 12,
				'DC' => 5,
				'nombre' => 'Cádiz',
			),
			40 => 
			array (
				'id' => 541,
				'id_provincia' => 12,
				'cod_municipio' => 12,
				'DC' => 0,
				'nombre' => 'Altura',
			),
			41 => 
			array (
				'id' => 542,
				'id_provincia' => 13,
				'cod_municipio' => 12,
				'DC' => 6,
				'nombre' => 'Almadenejos',
			),
			42 => 
			array (
				'id' => 543,
				'id_provincia' => 14,
				'cod_municipio' => 12,
				'DC' => 1,
				'nombre' => 'Bujalance',
			),
			43 => 
			array (
				'id' => 544,
				'id_provincia' => 15,
				'cod_municipio' => 12,
				'DC' => 4,
				'nombre' => 'Boqueixón',
			),
			44 => 
			array (
				'id' => 545,
				'id_provincia' => 16,
				'cod_municipio' => 12,
				'DC' => 7,
				'nombre' => 'Alconchel de la Estrella',
			),
			45 => 
			array (
				'id' => 546,
				'id_provincia' => 17,
				'cod_municipio' => 12,
				'DC' => 3,
				'nombre' => 'Avinyonet de Puigventós',
			),
			46 => 
			array (
				'id' => 547,
				'id_provincia' => 18,
				'cod_municipio' => 12,
				'DC' => 9,
				'nombre' => 'Algarinejo',
			),
			47 => 
			array (
				'id' => 548,
				'id_provincia' => 20,
				'cod_municipio' => 12,
				'DC' => 6,
				'nombre' => 'Arama',
			),
			48 => 
			array (
				'id' => 549,
				'id_provincia' => 21,
				'cod_municipio' => 12,
				'DC' => 3,
				'nombre' => 'Berrocal',
			),
			49 => 
			array (
				'id' => 550,
				'id_provincia' => 22,
				'cod_municipio' => 12,
				'DC' => 8,
				'nombre' => 'Albero Bajo',
			),
			50 => 
			array (
				'id' => 551,
				'id_provincia' => 23,
				'cod_municipio' => 12,
				'DC' => 4,
				'nombre' => 'Beas de Segura',
			),
			51 => 
			array (
				'id' => 552,
				'id_provincia' => 24,
				'cod_municipio' => 12,
				'DC' => 9,
				'nombre' => 'Barrios de Luna, Los',
			),
			52 => 
			array (
				'id' => 553,
				'id_provincia' => 25,
				'cod_municipio' => 12,
				'DC' => 2,
				'nombre' => 'Alcoletge',
			),
			53 => 
			array (
				'id' => 554,
				'id_provincia' => 26,
				'cod_municipio' => 12,
				'DC' => 5,
				'nombre' => 'Almarza de Cameros',
			),
			54 => 
			array (
				'id' => 555,
				'id_provincia' => 27,
				'cod_municipio' => 12,
				'DC' => 1,
				'nombre' => 'Cervantes',
			),
			55 => 
			array (
				'id' => 556,
				'id_provincia' => 28,
				'cod_municipio' => 12,
				'DC' => 7,
				'nombre' => 'Anchuelo',
			),
			56 => 
			array (
				'id' => 557,
				'id_provincia' => 29,
				'cod_municipio' => 12,
				'DC' => 0,
				'nombre' => 'Álora',
			),
			57 => 
			array (
				'id' => 558,
				'id_provincia' => 30,
				'cod_municipio' => 12,
				'DC' => 4,
				'nombre' => 'Bullas',
			),
			58 => 
			array (
				'id' => 559,
				'id_provincia' => 31,
				'cod_municipio' => 12,
				'DC' => 1,
				'nombre' => 'Allo',
			),
			59 => 
			array (
				'id' => 560,
				'id_provincia' => 32,
				'cod_municipio' => 12,
				'DC' => 6,
				'nombre' => 'Blancos, Os',
			),
			60 => 
			array (
				'id' => 561,
				'id_provincia' => 33,
				'cod_municipio' => 12,
				'DC' => 2,
				'nombre' => 'Cangas de Onís',
			),
			61 => 
			array (
				'id' => 562,
				'id_provincia' => 34,
				'cod_municipio' => 12,
				'DC' => 7,
				'nombre' => 'Antigüedad',
			),
			62 => 
			array (
				'id' => 563,
				'id_provincia' => 35,
				'cod_municipio' => 12,
				'DC' => 0,
				'nombre' => 'Mogán',
			),
			63 => 
			array (
				'id' => 564,
				'id_provincia' => 36,
				'cod_municipio' => 12,
				'DC' => 3,
				'nombre' => 'Cotobade',
			),
			64 => 
			array (
				'id' => 565,
				'id_provincia' => 37,
				'cod_municipio' => 12,
				'DC' => 9,
				'nombre' => 'Alconada',
			),
			65 => 
			array (
				'id' => 566,
				'id_provincia' => 38,
				'cod_municipio' => 12,
				'DC' => 5,
				'nombre' => 'Fasnia',
			),
			66 => 
			array (
				'id' => 567,
				'id_provincia' => 39,
				'cod_municipio' => 12,
				'DC' => 8,
				'nombre' => 'Cabezón de la Sal',
			),
			67 => 
			array (
				'id' => 568,
				'id_provincia' => 40,
				'cod_municipio' => 12,
				'DC' => 2,
				'nombre' => 'Aldea Real',
			),
			68 => 
			array (
				'id' => 569,
				'id_provincia' => 41,
				'cod_municipio' => 12,
				'DC' => 9,
				'nombre' => 'Aznalcázar',
			),
			69 => 
			array (
				'id' => 570,
				'id_provincia' => 42,
				'cod_municipio' => 12,
				'DC' => 4,
				'nombre' => 'Aldealseñor',
			),
			70 => 
			array (
				'id' => 571,
				'id_provincia' => 43,
				'cod_municipio' => 12,
				'DC' => 0,
				'nombre' => 'Altafulla',
			),
			71 => 
			array (
				'id' => 572,
				'id_provincia' => 44,
				'cod_municipio' => 12,
				'DC' => 5,
				'nombre' => 'Alcalá de la Selva',
			),
			72 => 
			array (
				'id' => 573,
				'id_provincia' => 45,
				'cod_municipio' => 12,
				'DC' => 8,
				'nombre' => 'Almonacid de Toledo',
			),
			73 => 
			array (
				'id' => 574,
				'id_provincia' => 46,
				'cod_municipio' => 12,
				'DC' => 1,
				'nombre' => 'Alborache',
			),
			74 => 
			array (
				'id' => 575,
				'id_provincia' => 47,
				'cod_municipio' => 12,
				'DC' => 7,
				'nombre' => 'Bahabón',
			),
			75 => 
			array (
				'id' => 576,
				'id_provincia' => 48,
				'cod_municipio' => 12,
				'DC' => 3,
				'nombre' => 'Bakio',
			),
			76 => 
			array (
				'id' => 577,
				'id_provincia' => 49,
				'cod_municipio' => 12,
				'DC' => 6,
				'nombre' => 'Argañín',
			),
			77 => 
			array (
				'id' => 578,
				'id_provincia' => 50,
				'cod_municipio' => 12,
				'DC' => 9,
				'nombre' => 'Alborge',
			),
			78 => 
			array (
				'id' => 579,
				'id_provincia' => 1,
				'cod_municipio' => 13,
				'DC' => 3,
				'nombre' => 'Barrundia',
			),
			79 => 
			array (
				'id' => 580,
				'id_provincia' => 2,
				'cod_municipio' => 13,
				'DC' => 8,
				'nombre' => 'Balsa de Ves',
			),
			80 => 
			array (
				'id' => 581,
				'id_provincia' => 3,
				'cod_municipio' => 13,
				'DC' => 4,
				'nombre' => 'Algueña',
			),
			81 => 
			array (
				'id' => 582,
				'id_provincia' => 4,
				'cod_municipio' => 13,
				'DC' => 9,
				'nombre' => 'Almería',
			),
			82 => 
			array (
				'id' => 583,
				'id_provincia' => 5,
				'cod_municipio' => 13,
				'DC' => 2,
				'nombre' => 'Arenal, El',
			),
			83 => 
			array (
				'id' => 584,
				'id_provincia' => 6,
				'cod_municipio' => 13,
				'DC' => 5,
				'nombre' => 'Atalaya',
			),
			84 => 
			array (
				'id' => 585,
				'id_provincia' => 7,
				'cod_municipio' => 13,
				'DC' => 1,
				'nombre' => 'Campos',
			),
			85 => 
			array (
				'id' => 586,
				'id_provincia' => 8,
				'cod_municipio' => 13,
				'DC' => 7,
				'nombre' => 'Avinyonet del Penedès',
			),
			86 => 
			array (
				'id' => 587,
				'id_provincia' => 9,
				'cod_municipio' => 13,
				'DC' => 0,
				'nombre' => 'Altable',
			),
			87 => 
			array (
				'id' => 588,
				'id_provincia' => 10,
				'cod_municipio' => 13,
				'DC' => 4,
				'nombre' => 'Aldea del Obispo, La',
			),
			88 => 
			array (
				'id' => 589,
				'id_provincia' => 11,
				'cod_municipio' => 13,
				'DC' => 1,
				'nombre' => 'Castellar de la Frontera',
			),
			89 => 
			array (
				'id' => 590,
				'id_provincia' => 12,
				'cod_municipio' => 13,
				'DC' => 6,
				'nombre' => 'Arañuel',
			),
			90 => 
			array (
				'id' => 591,
				'id_provincia' => 13,
				'cod_municipio' => 13,
				'DC' => 2,
				'nombre' => 'Almagro',
			),
			91 => 
			array (
				'id' => 592,
				'id_provincia' => 14,
				'cod_municipio' => 13,
				'DC' => 7,
				'nombre' => 'Cabra',
			),
			92 => 
			array (
				'id' => 593,
				'id_provincia' => 15,
				'cod_municipio' => 13,
				'DC' => 0,
				'nombre' => 'Brión',
			),
			93 => 
			array (
				'id' => 594,
				'id_provincia' => 16,
				'cod_municipio' => 13,
				'DC' => 3,
				'nombre' => 'Algarra',
			),
			94 => 
			array (
				'id' => 595,
				'id_provincia' => 17,
				'cod_municipio' => 13,
				'DC' => 9,
				'nombre' => 'Begur',
			),
			95 => 
			array (
				'id' => 596,
				'id_provincia' => 18,
				'cod_municipio' => 13,
				'DC' => 5,
				'nombre' => 'Alhama de Granada',
			),
			96 => 
			array (
				'id' => 597,
				'id_provincia' => 19,
				'cod_municipio' => 13,
				'DC' => 8,
				'nombre' => 'Alcoroches',
			),
			97 => 
			array (
				'id' => 598,
				'id_provincia' => 20,
				'cod_municipio' => 13,
				'DC' => 2,
				'nombre' => 'Aretxabaleta',
			),
			98 => 
			array (
				'id' => 599,
				'id_provincia' => 21,
				'cod_municipio' => 13,
				'DC' => 9,
				'nombre' => 'Bollullos Par del Condado',
			),
			99 => 
			array (
				'id' => 600,
				'id_provincia' => 22,
				'cod_municipio' => 13,
				'DC' => 4,
				'nombre' => 'Alberuela de Tubo',
			),
			100 => 
			array (
				'id' => 601,
				'id_provincia' => 25,
				'cod_municipio' => 13,
				'DC' => 8,
				'nombre' => 'Alfarràs',
			),
			101 => 
			array (
				'id' => 602,
				'id_provincia' => 26,
				'cod_municipio' => 13,
				'DC' => 1,
				'nombre' => 'Anguciana',
			),
			102 => 
			array (
				'id' => 603,
				'id_provincia' => 27,
				'cod_municipio' => 13,
				'DC' => 7,
				'nombre' => 'Cervo',
			),
			103 => 
			array (
				'id' => 604,
				'id_provincia' => 28,
				'cod_municipio' => 13,
				'DC' => 3,
				'nombre' => 'Aranjuez',
			),
			104 => 
			array (
				'id' => 605,
				'id_provincia' => 29,
				'cod_municipio' => 13,
				'DC' => 6,
				'nombre' => 'Alozaina',
			),
			105 => 
			array (
				'id' => 606,
				'id_provincia' => 30,
				'cod_municipio' => 13,
				'DC' => 0,
				'nombre' => 'Calasparra',
			),
			106 => 
			array (
				'id' => 607,
				'id_provincia' => 31,
				'cod_municipio' => 13,
				'DC' => 7,
				'nombre' => 'Améscoa Baja',
			),
			107 => 
			array (
				'id' => 608,
				'id_provincia' => 32,
				'cod_municipio' => 13,
				'DC' => 2,
				'nombre' => 'Boborás',
			),
			108 => 
			array (
				'id' => 609,
				'id_provincia' => 33,
				'cod_municipio' => 13,
				'DC' => 8,
				'nombre' => 'Caravia',
			),
			109 => 
			array (
				'id' => 610,
				'id_provincia' => 35,
				'cod_municipio' => 13,
				'DC' => 6,
				'nombre' => 'Moya',
			),
			110 => 
			array (
				'id' => 611,
				'id_provincia' => 36,
				'cod_municipio' => 13,
				'DC' => 9,
				'nombre' => 'Covelo',
			),
			111 => 
			array (
				'id' => 612,
				'id_provincia' => 37,
				'cod_municipio' => 13,
				'DC' => 5,
				'nombre' => 'Aldeacipreste',
			),
			112 => 
			array (
				'id' => 613,
				'id_provincia' => 38,
				'cod_municipio' => 13,
				'DC' => 1,
				'nombre' => 'Frontera',
			),
			113 => 
			array (
				'id' => 614,
				'id_provincia' => 39,
				'cod_municipio' => 13,
				'DC' => 4,
				'nombre' => 'Cabezón de Liébana',
			),
			114 => 
			array (
				'id' => 615,
				'id_provincia' => 40,
				'cod_municipio' => 13,
				'DC' => 8,
				'nombre' => 'Aldeasoña',
			),
			115 => 
			array (
				'id' => 616,
				'id_provincia' => 41,
				'cod_municipio' => 13,
				'DC' => 5,
				'nombre' => 'Aznalcóllar',
			),
			116 => 
			array (
				'id' => 617,
				'id_provincia' => 42,
				'cod_municipio' => 13,
				'DC' => 0,
				'nombre' => 'Aldehuela de Periáñez',
			),
			117 => 
			array (
				'id' => 618,
				'id_provincia' => 43,
				'cod_municipio' => 13,
				'DC' => 6,
				'nombre' => 'Ametlla de Mar, L\'',
			),
			118 => 
			array (
				'id' => 619,
				'id_provincia' => 44,
				'cod_municipio' => 13,
				'DC' => 1,
				'nombre' => 'Alcañiz',
			),
			119 => 
			array (
				'id' => 620,
				'id_provincia' => 45,
				'cod_municipio' => 13,
				'DC' => 4,
				'nombre' => 'Almorox',
			),
			120 => 
			array (
				'id' => 621,
				'id_provincia' => 46,
				'cod_municipio' => 13,
				'DC' => 7,
				'nombre' => 'Alboraya',
			),
			121 => 
			array (
				'id' => 622,
				'id_provincia' => 47,
				'cod_municipio' => 13,
				'DC' => 3,
				'nombre' => 'Barcial de la Loma',
			),
			122 => 
			array (
				'id' => 623,
				'id_provincia' => 48,
				'cod_municipio' => 13,
				'DC' => 9,
				'nombre' => 'Barakaldo',
			),
			123 => 
			array (
				'id' => 624,
				'id_provincia' => 49,
				'cod_municipio' => 13,
				'DC' => 2,
				'nombre' => 'Argujillo',
			),
			124 => 
			array (
				'id' => 625,
				'id_provincia' => 50,
				'cod_municipio' => 13,
				'DC' => 5,
				'nombre' => 'Alcalá de Ebro',
			),
			125 => 
			array (
				'id' => 626,
				'id_provincia' => 1,
				'cod_municipio' => 14,
				'DC' => 8,
				'nombre' => 'Berantevilla',
			),
			126 => 
			array (
				'id' => 627,
				'id_provincia' => 2,
				'cod_municipio' => 14,
				'DC' => 3,
				'nombre' => 'Ballestero, El',
			),
			127 => 
			array (
				'id' => 628,
				'id_provincia' => 3,
				'cod_municipio' => 14,
				'DC' => 9,
				'nombre' => 'Alicante/Alacant',
			),
			128 => 
			array (
				'id' => 629,
				'id_provincia' => 4,
				'cod_municipio' => 14,
				'DC' => 4,
				'nombre' => 'Almócita',
			),
			129 => 
			array (
				'id' => 630,
				'id_provincia' => 5,
				'cod_municipio' => 14,
				'DC' => 7,
				'nombre' => 'Arenas de San Pedro',
			),
			130 => 
			array (
				'id' => 631,
				'id_provincia' => 6,
				'cod_municipio' => 14,
				'DC' => 0,
				'nombre' => 'Azuaga',
			),
			131 => 
			array (
				'id' => 632,
				'id_provincia' => 7,
				'cod_municipio' => 14,
				'DC' => 6,
				'nombre' => 'Capdepera',
			),
			132 => 
			array (
				'id' => 633,
				'id_provincia' => 8,
				'cod_municipio' => 14,
				'DC' => 2,
				'nombre' => 'Aiguafreda',
			),
			133 => 
			array (
				'id' => 634,
				'id_provincia' => 9,
				'cod_municipio' => 14,
				'DC' => 5,
				'nombre' => 'Altos, Los',
			),
			134 => 
			array (
				'id' => 635,
				'id_provincia' => 10,
				'cod_municipio' => 14,
				'DC' => 9,
				'nombre' => 'Aldeanueva de la Vera',
			),
			135 => 
			array (
				'id' => 636,
				'id_provincia' => 11,
				'cod_municipio' => 14,
				'DC' => 6,
				'nombre' => 'Conil de la Frontera',
			),
			136 => 
			array (
				'id' => 637,
				'id_provincia' => 12,
				'cod_municipio' => 14,
				'DC' => 1,
				'nombre' => 'Ares del Maestrat',
			),
			137 => 
			array (
				'id' => 638,
				'id_provincia' => 13,
				'cod_municipio' => 14,
				'DC' => 7,
				'nombre' => 'Almedina',
			),
			138 => 
			array (
				'id' => 639,
				'id_provincia' => 14,
				'cod_municipio' => 14,
				'DC' => 2,
				'nombre' => 'Cañete de las Torres',
			),
			139 => 
			array (
				'id' => 640,
				'id_provincia' => 15,
				'cod_municipio' => 14,
				'DC' => 5,
				'nombre' => 'Cabana de Bergantiños',
			),
			140 => 
			array (
				'id' => 641,
				'id_provincia' => 16,
				'cod_municipio' => 14,
				'DC' => 8,
				'nombre' => 'Aliaguilla',
			),
			141 => 
			array (
				'id' => 642,
				'id_provincia' => 17,
				'cod_municipio' => 14,
				'DC' => 4,
				'nombre' => 'Vajol, La',
			),
			142 => 
			array (
				'id' => 643,
				'id_provincia' => 18,
				'cod_municipio' => 14,
				'DC' => 0,
				'nombre' => 'Alhendín',
			),
			143 => 
			array (
				'id' => 644,
				'id_provincia' => 20,
				'cod_municipio' => 14,
				'DC' => 7,
				'nombre' => 'Asteasu',
			),
			144 => 
			array (
				'id' => 645,
				'id_provincia' => 21,
				'cod_municipio' => 14,
				'DC' => 4,
				'nombre' => 'Bonares',
			),
			145 => 
			array (
				'id' => 646,
				'id_provincia' => 22,
				'cod_municipio' => 14,
				'DC' => 9,
				'nombre' => 'Alcalá de Gurrea',
			),
			146 => 
			array (
				'id' => 647,
				'id_provincia' => 23,
				'cod_municipio' => 14,
				'DC' => 5,
				'nombre' => 'Begíjar',
			),
			147 => 
			array (
				'id' => 648,
				'id_provincia' => 24,
				'cod_municipio' => 14,
				'DC' => 0,
				'nombre' => 'Bembibre',
			),
			148 => 
			array (
				'id' => 649,
				'id_provincia' => 25,
				'cod_municipio' => 14,
				'DC' => 3,
				'nombre' => 'Alfés',
			),
			149 => 
			array (
				'id' => 650,
				'id_provincia' => 26,
				'cod_municipio' => 14,
				'DC' => 6,
				'nombre' => 'Anguiano',
			),
			150 => 
			array (
				'id' => 651,
				'id_provincia' => 27,
				'cod_municipio' => 14,
				'DC' => 2,
				'nombre' => 'Corgo, O',
			),
			151 => 
			array (
				'id' => 652,
				'id_provincia' => 28,
				'cod_municipio' => 14,
				'DC' => 8,
				'nombre' => 'Arganda del Rey',
			),
			152 => 
			array (
				'id' => 653,
				'id_provincia' => 29,
				'cod_municipio' => 14,
				'DC' => 1,
				'nombre' => 'Alpandeire',
			),
			153 => 
			array (
				'id' => 654,
				'id_provincia' => 30,
				'cod_municipio' => 14,
				'DC' => 5,
				'nombre' => 'Campos del Río',
			),
			154 => 
			array (
				'id' => 655,
				'id_provincia' => 31,
				'cod_municipio' => 14,
				'DC' => 2,
				'nombre' => 'Ancín/Antzin',
			),
			155 => 
			array (
				'id' => 656,
				'id_provincia' => 32,
				'cod_municipio' => 14,
				'DC' => 7,
				'nombre' => 'Bola, A',
			),
			156 => 
			array (
				'id' => 657,
				'id_provincia' => 33,
				'cod_municipio' => 14,
				'DC' => 3,
				'nombre' => 'Carreño',
			),
			157 => 
			array (
				'id' => 658,
				'id_provincia' => 35,
				'cod_municipio' => 14,
				'DC' => 1,
				'nombre' => 'Oliva, La',
			),
			158 => 
			array (
				'id' => 659,
				'id_provincia' => 36,
				'cod_municipio' => 14,
				'DC' => 4,
				'nombre' => 'Crecente',
			),
			159 => 
			array (
				'id' => 660,
				'id_provincia' => 37,
				'cod_municipio' => 14,
				'DC' => 0,
				'nombre' => 'Aldeadávila de la Ribera',
			),
			160 => 
			array (
				'id' => 661,
				'id_provincia' => 38,
				'cod_municipio' => 14,
				'DC' => 6,
				'nombre' => 'Fuencaliente de la Palma',
			),
			161 => 
			array (
				'id' => 662,
				'id_provincia' => 39,
				'cod_municipio' => 14,
				'DC' => 9,
				'nombre' => 'Cabuérniga',
			),
			162 => 
			array (
				'id' => 663,
				'id_provincia' => 40,
				'cod_municipio' => 14,
				'DC' => 3,
				'nombre' => 'Aldehorno',
			),
			163 => 
			array (
				'id' => 664,
				'id_provincia' => 41,
				'cod_municipio' => 14,
				'DC' => 0,
				'nombre' => 'Badolatosa',
			),
			164 => 
			array (
				'id' => 665,
				'id_provincia' => 42,
				'cod_municipio' => 14,
				'DC' => 5,
				'nombre' => 'Aldehuelas, Las',
			),
			165 => 
			array (
				'id' => 666,
				'id_provincia' => 43,
				'cod_municipio' => 14,
				'DC' => 1,
				'nombre' => 'Amposta',
			),
			166 => 
			array (
				'id' => 667,
				'id_provincia' => 44,
				'cod_municipio' => 14,
				'DC' => 6,
				'nombre' => 'Alcorisa',
			),
			167 => 
			array (
				'id' => 668,
				'id_provincia' => 45,
				'cod_municipio' => 14,
				'DC' => 9,
				'nombre' => 'Añover de Tajo',
			),
			168 => 
			array (
				'id' => 669,
				'id_provincia' => 46,
				'cod_municipio' => 14,
				'DC' => 2,
				'nombre' => 'Albuixech',
			),
			169 => 
			array (
				'id' => 670,
				'id_provincia' => 47,
				'cod_municipio' => 14,
				'DC' => 8,
				'nombre' => 'Barruelo del Valle',
			),
			170 => 
			array (
				'id' => 671,
				'id_provincia' => 48,
				'cod_municipio' => 14,
				'DC' => 4,
				'nombre' => 'Barrika',
			),
			171 => 
			array (
				'id' => 672,
				'id_provincia' => 49,
				'cod_municipio' => 14,
				'DC' => 7,
				'nombre' => 'Arquillinos',
			),
			172 => 
			array (
				'id' => 673,
				'id_provincia' => 50,
				'cod_municipio' => 14,
				'DC' => 0,
				'nombre' => 'Alcalá de Moncayo',
			),
			173 => 
			array (
				'id' => 674,
				'id_provincia' => 2,
				'cod_municipio' => 15,
				'DC' => 6,
				'nombre' => 'Barrax',
			),
			174 => 
			array (
				'id' => 675,
				'id_provincia' => 3,
				'cod_municipio' => 15,
				'DC' => 2,
				'nombre' => 'Almoradí',
			),
			175 => 
			array (
				'id' => 676,
				'id_provincia' => 4,
				'cod_municipio' => 15,
				'DC' => 7,
				'nombre' => 'Alsodux',
			),
			176 => 
			array (
				'id' => 677,
				'id_provincia' => 5,
				'cod_municipio' => 15,
				'DC' => 0,
				'nombre' => 'Arevalillo',
			),
			177 => 
			array (
				'id' => 678,
				'id_provincia' => 6,
				'cod_municipio' => 15,
				'DC' => 3,
				'nombre' => 'Badajoz',
			),
			178 => 
			array (
				'id' => 679,
				'id_provincia' => 7,
				'cod_municipio' => 15,
				'DC' => 9,
				'nombre' => 'Ciutadella de Menorca',
			),
			179 => 
			array (
				'id' => 680,
				'id_provincia' => 8,
				'cod_municipio' => 15,
				'DC' => 5,
				'nombre' => 'Badalona',
			),
			180 => 
			array (
				'id' => 681,
				'id_provincia' => 10,
				'cod_municipio' => 15,
				'DC' => 2,
				'nombre' => 'Aldeanueva del Camino',
			),
			181 => 
			array (
				'id' => 682,
				'id_provincia' => 11,
				'cod_municipio' => 15,
				'DC' => 9,
				'nombre' => 'Chiclana de la Frontera',
			),
			182 => 
			array (
				'id' => 683,
				'id_provincia' => 12,
				'cod_municipio' => 15,
				'DC' => 4,
				'nombre' => 'Argelita',
			),
			183 => 
			array (
				'id' => 684,
				'id_provincia' => 13,
				'cod_municipio' => 15,
				'DC' => 0,
				'nombre' => 'Almodóvar del Campo',
			),
			184 => 
			array (
				'id' => 685,
				'id_provincia' => 14,
				'cod_municipio' => 15,
				'DC' => 5,
				'nombre' => 'Carcabuey',
			),
			185 => 
			array (
				'id' => 686,
				'id_provincia' => 15,
				'cod_municipio' => 15,
				'DC' => 8,
				'nombre' => 'Cabanas',
			),
			186 => 
			array (
				'id' => 687,
				'id_provincia' => 16,
				'cod_municipio' => 15,
				'DC' => 1,
				'nombre' => 'Almarcha, La',
			),
			187 => 
			array (
				'id' => 688,
				'id_provincia' => 17,
				'cod_municipio' => 15,
				'DC' => 7,
				'nombre' => 'Banyoles',
			),
			188 => 
			array (
				'id' => 689,
				'id_provincia' => 18,
				'cod_municipio' => 15,
				'DC' => 3,
				'nombre' => 'Alicún de Ortega',
			),
			189 => 
			array (
				'id' => 690,
				'id_provincia' => 19,
				'cod_municipio' => 15,
				'DC' => 6,
				'nombre' => 'Aldeanueva de Guadalajara',
			),
			190 => 
			array (
				'id' => 691,
				'id_provincia' => 20,
				'cod_municipio' => 15,
				'DC' => 0,
				'nombre' => 'Ataun',
			),
			191 => 
			array (
				'id' => 692,
				'id_provincia' => 21,
				'cod_municipio' => 15,
				'DC' => 7,
				'nombre' => 'Cabezas Rubias',
			),
			192 => 
			array (
				'id' => 693,
				'id_provincia' => 22,
				'cod_municipio' => 15,
				'DC' => 2,
				'nombre' => 'Alcalá del Obispo',
			),
			193 => 
			array (
				'id' => 694,
				'id_provincia' => 23,
				'cod_municipio' => 15,
				'DC' => 8,
				'nombre' => 'Bélmez de la Moraleda',
			),
			194 => 
			array (
				'id' => 695,
				'id_provincia' => 24,
				'cod_municipio' => 15,
				'DC' => 3,
				'nombre' => 'Benavides',
			),
			195 => 
			array (
				'id' => 696,
				'id_provincia' => 25,
				'cod_municipio' => 15,
				'DC' => 6,
				'nombre' => 'Algerri',
			),
			196 => 
			array (
				'id' => 697,
				'id_provincia' => 26,
				'cod_municipio' => 15,
				'DC' => 9,
				'nombre' => 'Arenzana de Abajo',
			),
			197 => 
			array (
				'id' => 698,
				'id_provincia' => 27,
				'cod_municipio' => 15,
				'DC' => 5,
				'nombre' => 'Cospeito',
			),
			198 => 
			array (
				'id' => 699,
				'id_provincia' => 28,
				'cod_municipio' => 15,
				'DC' => 1,
				'nombre' => 'Arroyomolinos',
			),
			199 => 
			array (
				'id' => 700,
				'id_provincia' => 29,
				'cod_municipio' => 15,
				'DC' => 4,
				'nombre' => 'Antequera',
			),
			200 => 
			array (
				'id' => 701,
				'id_provincia' => 30,
				'cod_municipio' => 15,
				'DC' => 8,
				'nombre' => 'Caravaca de la Cruz',
			),
			201 => 
			array (
				'id' => 702,
				'id_provincia' => 31,
				'cod_municipio' => 15,
				'DC' => 5,
				'nombre' => 'Andosilla',
			),
			202 => 
			array (
				'id' => 703,
				'id_provincia' => 32,
				'cod_municipio' => 15,
				'DC' => 0,
				'nombre' => 'Bolo, O',
			),
			203 => 
			array (
				'id' => 704,
				'id_provincia' => 33,
				'cod_municipio' => 15,
				'DC' => 6,
				'nombre' => 'Caso',
			),
			204 => 
			array (
				'id' => 705,
				'id_provincia' => 34,
				'cod_municipio' => 15,
				'DC' => 1,
				'nombre' => 'Arconada',
			),
			205 => 
			array (
				'id' => 706,
				'id_provincia' => 35,
				'cod_municipio' => 15,
				'DC' => 4,
				'nombre' => 'Pájara',
			),
			206 => 
			array (
				'id' => 707,
				'id_provincia' => 36,
				'cod_municipio' => 15,
				'DC' => 7,
				'nombre' => 'Cuntis',
			),
			207 => 
			array (
				'id' => 708,
				'id_provincia' => 37,
				'cod_municipio' => 15,
				'DC' => 3,
				'nombre' => 'Aldea del Obispo',
			),
			208 => 
			array (
				'id' => 709,
				'id_provincia' => 38,
				'cod_municipio' => 15,
				'DC' => 9,
				'nombre' => 'Garachico',
			),
			209 => 
			array (
				'id' => 710,
				'id_provincia' => 39,
				'cod_municipio' => 15,
				'DC' => 2,
				'nombre' => 'Camaleño',
			),
			210 => 
			array (
				'id' => 711,
				'id_provincia' => 40,
				'cod_municipio' => 15,
				'DC' => 6,
				'nombre' => 'Aldehuela del Codonal',
			),
			211 => 
			array (
				'id' => 712,
				'id_provincia' => 41,
				'cod_municipio' => 15,
				'DC' => 3,
				'nombre' => 'Benacazón',
			),
			212 => 
			array (
				'id' => 713,
				'id_provincia' => 42,
				'cod_municipio' => 15,
				'DC' => 8,
				'nombre' => 'Alentisque',
			),
			213 => 
			array (
				'id' => 714,
				'id_provincia' => 43,
				'cod_municipio' => 15,
				'DC' => 4,
				'nombre' => 'Arbolí',
			),
			214 => 
			array (
				'id' => 715,
				'id_provincia' => 45,
				'cod_municipio' => 15,
				'DC' => 2,
				'nombre' => 'Arcicóllar',
			),
			215 => 
			array (
				'id' => 716,
				'id_provincia' => 46,
				'cod_municipio' => 15,
				'DC' => 5,
				'nombre' => 'Alcàsser',
			),
			216 => 
			array (
				'id' => 717,
				'id_provincia' => 47,
				'cod_municipio' => 15,
				'DC' => 1,
				'nombre' => 'Becilla de Valderaduey',
			),
			217 => 
			array (
				'id' => 718,
				'id_provincia' => 48,
				'cod_municipio' => 15,
				'DC' => 7,
				'nombre' => 'Basauri',
			),
			218 => 
			array (
				'id' => 719,
				'id_provincia' => 49,
				'cod_municipio' => 15,
				'DC' => 0,
				'nombre' => 'Arrabalde',
			),
			219 => 
			array (
				'id' => 720,
				'id_provincia' => 50,
				'cod_municipio' => 15,
				'DC' => 3,
				'nombre' => 'Alconchel de Ariza',
			),
			220 => 
			array (
				'id' => 721,
				'id_provincia' => 1,
				'cod_municipio' => 16,
				'DC' => 4,
				'nombre' => 'Bernedo',
			),
			221 => 
			array (
				'id' => 722,
				'id_provincia' => 2,
				'cod_municipio' => 16,
				'DC' => 9,
				'nombre' => 'Bienservida',
			),
			222 => 
			array (
				'id' => 723,
				'id_provincia' => 3,
				'cod_municipio' => 16,
				'DC' => 5,
				'nombre' => 'Almudaina',
			),
			223 => 
			array (
				'id' => 724,
				'id_provincia' => 4,
				'cod_municipio' => 16,
				'DC' => 0,
				'nombre' => 'Antas',
			),
			224 => 
			array (
				'id' => 725,
				'id_provincia' => 5,
				'cod_municipio' => 16,
				'DC' => 3,
				'nombre' => 'Arévalo',
			),
			225 => 
			array (
				'id' => 726,
				'id_provincia' => 6,
				'cod_municipio' => 16,
				'DC' => 6,
				'nombre' => 'Barcarrota',
			),
			226 => 
			array (
				'id' => 727,
				'id_provincia' => 7,
				'cod_municipio' => 16,
				'DC' => 2,
				'nombre' => 'Consell',
			),
			227 => 
			array (
				'id' => 728,
				'id_provincia' => 8,
				'cod_municipio' => 16,
				'DC' => 8,
				'nombre' => 'Bagà',
			),
			228 => 
			array (
				'id' => 729,
				'id_provincia' => 9,
				'cod_municipio' => 16,
				'DC' => 1,
				'nombre' => 'Ameyugo',
			),
			229 => 
			array (
				'id' => 730,
				'id_provincia' => 10,
				'cod_municipio' => 16,
				'DC' => 5,
				'nombre' => 'Aldehuela de Jerte',
			),
			230 => 
			array (
				'id' => 731,
				'id_provincia' => 11,
				'cod_municipio' => 16,
				'DC' => 2,
				'nombre' => 'Chipiona',
			),
			231 => 
			array (
				'id' => 732,
				'id_provincia' => 12,
				'cod_municipio' => 16,
				'DC' => 7,
				'nombre' => 'Artana',
			),
			232 => 
			array (
				'id' => 733,
				'id_provincia' => 13,
				'cod_municipio' => 16,
				'DC' => 3,
				'nombre' => 'Almuradiel',
			),
			233 => 
			array (
				'id' => 734,
				'id_provincia' => 14,
				'cod_municipio' => 16,
				'DC' => 8,
				'nombre' => 'Cardeña',
			),
			234 => 
			array (
				'id' => 735,
				'id_provincia' => 15,
				'cod_municipio' => 16,
				'DC' => 1,
				'nombre' => 'Camariñas',
			),
			235 => 
			array (
				'id' => 736,
				'id_provincia' => 16,
				'cod_municipio' => 16,
				'DC' => 4,
				'nombre' => 'Almendros',
			),
			236 => 
			array (
				'id' => 737,
				'id_provincia' => 17,
				'cod_municipio' => 16,
				'DC' => 0,
				'nombre' => 'Bàscara',
			),
			237 => 
			array (
				'id' => 738,
				'id_provincia' => 18,
				'cod_municipio' => 16,
				'DC' => 6,
				'nombre' => 'Almegíjar',
			),
			238 => 
			array (
				'id' => 739,
				'id_provincia' => 19,
				'cod_municipio' => 16,
				'DC' => 9,
				'nombre' => 'Algar de Mesa',
			),
			239 => 
			array (
				'id' => 740,
				'id_provincia' => 20,
				'cod_municipio' => 16,
				'DC' => 3,
				'nombre' => 'Aia',
			),
			240 => 
			array (
				'id' => 741,
				'id_provincia' => 21,
				'cod_municipio' => 16,
				'DC' => 0,
				'nombre' => 'Cala',
			),
			241 => 
			array (
				'id' => 742,
				'id_provincia' => 22,
				'cod_municipio' => 16,
				'DC' => 5,
				'nombre' => 'Alcampell',
			),
			242 => 
			array (
				'id' => 743,
				'id_provincia' => 23,
				'cod_municipio' => 16,
				'DC' => 1,
				'nombre' => 'Benatae',
			),
			243 => 
			array (
				'id' => 744,
				'id_provincia' => 24,
				'cod_municipio' => 16,
				'DC' => 6,
				'nombre' => 'Benuza',
			),
			244 => 
			array (
				'id' => 745,
				'id_provincia' => 25,
				'cod_municipio' => 16,
				'DC' => 9,
				'nombre' => 'Alguaire',
			),
			245 => 
			array (
				'id' => 746,
				'id_provincia' => 26,
				'cod_municipio' => 16,
				'DC' => 2,
				'nombre' => 'Arenzana de Arriba',
			),
			246 => 
			array (
				'id' => 747,
				'id_provincia' => 27,
				'cod_municipio' => 16,
				'DC' => 8,
				'nombre' => 'Chantada',
			),
			247 => 
			array (
				'id' => 748,
				'id_provincia' => 28,
				'cod_municipio' => 16,
				'DC' => 4,
				'nombre' => 'Atazar, El',
			),
			248 => 
			array (
				'id' => 749,
				'id_provincia' => 29,
				'cod_municipio' => 16,
				'DC' => 7,
				'nombre' => 'Árchez',
			),
			249 => 
			array (
				'id' => 750,
				'id_provincia' => 30,
				'cod_municipio' => 16,
				'DC' => 1,
				'nombre' => 'Cartagena',
			),
			250 => 
			array (
				'id' => 751,
				'id_provincia' => 31,
				'cod_municipio' => 16,
				'DC' => 8,
				'nombre' => 'Ansoáin/Antsoain',
			),
			251 => 
			array (
				'id' => 752,
				'id_provincia' => 32,
				'cod_municipio' => 16,
				'DC' => 3,
				'nombre' => 'Calvos de Randín',
			),
			252 => 
			array (
				'id' => 753,
				'id_provincia' => 33,
				'cod_municipio' => 16,
				'DC' => 9,
				'nombre' => 'Castrillón',
			),
			253 => 
			array (
				'id' => 754,
				'id_provincia' => 35,
				'cod_municipio' => 16,
				'DC' => 7,
				'nombre' => 'Palmas de Gran Canaria, Las',
			),
			254 => 
			array (
				'id' => 755,
				'id_provincia' => 36,
				'cod_municipio' => 16,
				'DC' => 0,
				'nombre' => 'Dozón',
			),
			255 => 
			array (
				'id' => 756,
				'id_provincia' => 37,
				'cod_municipio' => 16,
				'DC' => 6,
				'nombre' => 'Aldealengua',
			),
			256 => 
			array (
				'id' => 757,
				'id_provincia' => 38,
				'cod_municipio' => 16,
				'DC' => 2,
				'nombre' => 'Garafía',
			),
			257 => 
			array (
				'id' => 758,
				'id_provincia' => 39,
				'cod_municipio' => 16,
				'DC' => 5,
				'nombre' => 'Camargo',
			),
			258 => 
			array (
				'id' => 759,
				'id_provincia' => 40,
				'cod_municipio' => 16,
				'DC' => 9,
				'nombre' => 'Aldeonte',
			),
			259 => 
			array (
				'id' => 760,
				'id_provincia' => 41,
				'cod_municipio' => 16,
				'DC' => 6,
				'nombre' => 'Bollullos de la Mitación',
			),
			260 => 
			array (
				'id' => 761,
				'id_provincia' => 42,
				'cod_municipio' => 16,
				'DC' => 1,
				'nombre' => 'Aliud',
			),
			261 => 
			array (
				'id' => 762,
				'id_provincia' => 43,
				'cod_municipio' => 16,
				'DC' => 7,
				'nombre' => 'Arboç, L\'',
			),
			262 => 
			array (
				'id' => 763,
				'id_provincia' => 44,
				'cod_municipio' => 16,
				'DC' => 2,
				'nombre' => 'Alfambra',
			),
			263 => 
			array (
				'id' => 764,
				'id_provincia' => 45,
				'cod_municipio' => 16,
				'DC' => 5,
				'nombre' => 'Argés',
			),
			264 => 
			array (
				'id' => 765,
				'id_provincia' => 46,
				'cod_municipio' => 16,
				'DC' => 8,
				'nombre' => 'Alcàntera de Xúquer',
			),
			265 => 
			array (
				'id' => 766,
				'id_provincia' => 47,
				'cod_municipio' => 16,
				'DC' => 4,
				'nombre' => 'Benafarces',
			),
			266 => 
			array (
				'id' => 767,
				'id_provincia' => 48,
				'cod_municipio' => 16,
				'DC' => 0,
				'nombre' => 'Berango',
			),
			267 => 
			array (
				'id' => 768,
				'id_provincia' => 49,
				'cod_municipio' => 16,
				'DC' => 3,
				'nombre' => 'Aspariegos',
			),
			268 => 
			array (
				'id' => 769,
				'id_provincia' => 50,
				'cod_municipio' => 16,
				'DC' => 6,
				'nombre' => 'Aldehuela de Liestos',
			),
			269 => 
			array (
				'id' => 770,
				'id_provincia' => 1,
				'cod_municipio' => 17,
				'DC' => 0,
				'nombre' => 'Campezo/Kanpezu',
			),
			270 => 
			array (
				'id' => 771,
				'id_provincia' => 2,
				'cod_municipio' => 17,
				'DC' => 5,
				'nombre' => 'Bogarra',
			),
			271 => 
			array (
				'id' => 772,
				'id_provincia' => 3,
				'cod_municipio' => 17,
				'DC' => 1,
				'nombre' => 'Alqueria d\'Asnar, l\'',
			),
			272 => 
			array (
				'id' => 773,
				'id_provincia' => 4,
				'cod_municipio' => 17,
				'DC' => 6,
				'nombre' => 'Arboleas',
			),
			273 => 
			array (
				'id' => 774,
				'id_provincia' => 5,
				'cod_municipio' => 17,
				'DC' => 9,
				'nombre' => 'Aveinte',
			),
			274 => 
			array (
				'id' => 775,
				'id_provincia' => 6,
				'cod_municipio' => 17,
				'DC' => 2,
				'nombre' => 'Baterno',
			),
			275 => 
			array (
				'id' => 776,
				'id_provincia' => 7,
				'cod_municipio' => 17,
				'DC' => 8,
				'nombre' => 'Costitx',
			),
			276 => 
			array (
				'id' => 777,
				'id_provincia' => 8,
				'cod_municipio' => 17,
				'DC' => 4,
				'nombre' => 'Balenyà',
			),
			277 => 
			array (
				'id' => 778,
				'id_provincia' => 9,
				'cod_municipio' => 17,
				'DC' => 7,
				'nombre' => 'Anguix',
			),
			278 => 
			array (
				'id' => 779,
				'id_provincia' => 10,
				'cod_municipio' => 17,
				'DC' => 1,
				'nombre' => 'Alía',
			),
			279 => 
			array (
				'id' => 780,
				'id_provincia' => 11,
				'cod_municipio' => 17,
				'DC' => 8,
				'nombre' => 'Espera',
			),
			280 => 
			array (
				'id' => 781,
				'id_provincia' => 12,
				'cod_municipio' => 17,
				'DC' => 3,
				'nombre' => 'Ayódar',
			),
			281 => 
			array (
				'id' => 782,
				'id_provincia' => 13,
				'cod_municipio' => 17,
				'DC' => 9,
				'nombre' => 'Anchuras',
			),
			282 => 
			array (
				'id' => 783,
				'id_provincia' => 14,
				'cod_municipio' => 17,
				'DC' => 4,
				'nombre' => 'Carlota, La',
			),
			283 => 
			array (
				'id' => 784,
				'id_provincia' => 15,
				'cod_municipio' => 17,
				'DC' => 7,
				'nombre' => 'Cambre',
			),
			284 => 
			array (
				'id' => 785,
				'id_provincia' => 16,
				'cod_municipio' => 17,
				'DC' => 0,
				'nombre' => 'Almodóvar del Pinar',
			),
			285 => 
			array (
				'id' => 786,
				'id_provincia' => 18,
				'cod_municipio' => 17,
				'DC' => 2,
				'nombre' => 'Almuñécar',
			),
			286 => 
			array (
				'id' => 787,
				'id_provincia' => 19,
				'cod_municipio' => 17,
				'DC' => 5,
				'nombre' => 'Algora',
			),
			287 => 
			array (
				'id' => 788,
				'id_provincia' => 20,
				'cod_municipio' => 17,
				'DC' => 9,
				'nombre' => 'Azkoitia',
			),
			288 => 
			array (
				'id' => 789,
				'id_provincia' => 21,
				'cod_municipio' => 17,
				'DC' => 6,
				'nombre' => 'Calañas',
			),
			289 => 
			array (
				'id' => 790,
				'id_provincia' => 22,
				'cod_municipio' => 17,
				'DC' => 1,
				'nombre' => 'Alcolea de Cinca',
			),
			290 => 
			array (
				'id' => 791,
				'id_provincia' => 23,
				'cod_municipio' => 17,
				'DC' => 7,
				'nombre' => 'Cabra del Santo Cristo',
			),
			291 => 
			array (
				'id' => 792,
				'id_provincia' => 24,
				'cod_municipio' => 17,
				'DC' => 2,
				'nombre' => 'Bercianos del Páramo',
			),
			292 => 
			array (
				'id' => 793,
				'id_provincia' => 25,
				'cod_municipio' => 17,
				'DC' => 5,
				'nombre' => 'Alins',
			),
			293 => 
			array (
				'id' => 794,
				'id_provincia' => 26,
				'cod_municipio' => 17,
				'DC' => 8,
				'nombre' => 'Arnedillo',
			),
			294 => 
			array (
				'id' => 795,
				'id_provincia' => 27,
				'cod_municipio' => 17,
				'DC' => 4,
				'nombre' => 'Folgoso do Courel',
			),
			295 => 
			array (
				'id' => 796,
				'id_provincia' => 28,
				'cod_municipio' => 17,
				'DC' => 0,
				'nombre' => 'Batres',
			),
			296 => 
			array (
				'id' => 797,
				'id_provincia' => 29,
				'cod_municipio' => 17,
				'DC' => 3,
				'nombre' => 'Archidona',
			),
			297 => 
			array (
				'id' => 798,
				'id_provincia' => 30,
				'cod_municipio' => 17,
				'DC' => 7,
				'nombre' => 'Cehegín',
			),
			298 => 
			array (
				'id' => 799,
				'id_provincia' => 31,
				'cod_municipio' => 17,
				'DC' => 4,
				'nombre' => 'Anue',
			),
			299 => 
			array (
				'id' => 800,
				'id_provincia' => 32,
				'cod_municipio' => 17,
				'DC' => 9,
				'nombre' => 'Carballeda de Valdeorras',
			),
			300 => 
			array (
				'id' => 801,
				'id_provincia' => 33,
				'cod_municipio' => 17,
				'DC' => 5,
				'nombre' => 'Castropol',
			),
			301 => 
			array (
				'id' => 802,
				'id_provincia' => 34,
				'cod_municipio' => 17,
				'DC' => 0,
				'nombre' => 'Astudillo',
			),
			302 => 
			array (
				'id' => 803,
				'id_provincia' => 35,
				'cod_municipio' => 17,
				'DC' => 3,
				'nombre' => 'Puerto del Rosario',
			),
			303 => 
			array (
				'id' => 804,
				'id_provincia' => 36,
				'cod_municipio' => 17,
				'DC' => 6,
				'nombre' => 'Estrada, A',
			),
			304 => 
			array (
				'id' => 805,
				'id_provincia' => 37,
				'cod_municipio' => 17,
				'DC' => 2,
				'nombre' => 'Aldeanueva de Figueroa',
			),
			305 => 
			array (
				'id' => 806,
				'id_provincia' => 38,
				'cod_municipio' => 17,
				'DC' => 8,
				'nombre' => 'Granadilla de Abona',
			),
			306 => 
			array (
				'id' => 807,
				'id_provincia' => 39,
				'cod_municipio' => 17,
				'DC' => 1,
				'nombre' => 'Campoo de Yuso',
			),
			307 => 
			array (
				'id' => 808,
				'id_provincia' => 40,
				'cod_municipio' => 17,
				'DC' => 5,
				'nombre' => 'Anaya',
			),
			308 => 
			array (
				'id' => 809,
				'id_provincia' => 41,
				'cod_municipio' => 17,
				'DC' => 2,
				'nombre' => 'Bormujos',
			),
			309 => 
			array (
				'id' => 810,
				'id_provincia' => 42,
				'cod_municipio' => 17,
				'DC' => 7,
				'nombre' => 'Almajano',
			),
			310 => 
			array (
				'id' => 811,
				'id_provincia' => 43,
				'cod_municipio' => 17,
				'DC' => 3,
				'nombre' => 'Argentera, L\'',
			),
			311 => 
			array (
				'id' => 812,
				'id_provincia' => 44,
				'cod_municipio' => 17,
				'DC' => 8,
				'nombre' => 'Aliaga',
			),
			312 => 
			array (
				'id' => 813,
				'id_provincia' => 45,
				'cod_municipio' => 17,
				'DC' => 1,
				'nombre' => 'Azután',
			),
			313 => 
			array (
				'id' => 814,
				'id_provincia' => 46,
				'cod_municipio' => 17,
				'DC' => 4,
				'nombre' => 'Alzira',
			),
			314 => 
			array (
				'id' => 815,
				'id_provincia' => 47,
				'cod_municipio' => 17,
				'DC' => 0,
				'nombre' => 'Bercero',
			),
			315 => 
			array (
				'id' => 816,
				'id_provincia' => 48,
				'cod_municipio' => 17,
				'DC' => 6,
				'nombre' => 'Bermeo',
			),
			316 => 
			array (
				'id' => 817,
				'id_provincia' => 49,
				'cod_municipio' => 17,
				'DC' => 9,
				'nombre' => 'Asturianos',
			),
			317 => 
			array (
				'id' => 818,
				'id_provincia' => 50,
				'cod_municipio' => 17,
				'DC' => 2,
				'nombre' => 'Alfajarín',
			),
			318 => 
			array (
				'id' => 819,
				'id_provincia' => 1,
				'cod_municipio' => 18,
				'DC' => 6,
				'nombre' => 'Zigoitia',
			),
			319 => 
			array (
				'id' => 820,
				'id_provincia' => 2,
				'cod_municipio' => 18,
				'DC' => 1,
				'nombre' => 'Bonete',
			),
			320 => 
			array (
				'id' => 821,
				'id_provincia' => 3,
				'cod_municipio' => 18,
				'DC' => 7,
				'nombre' => 'Altea',
			),
			321 => 
			array (
				'id' => 822,
				'id_provincia' => 4,
				'cod_municipio' => 18,
				'DC' => 2,
				'nombre' => 'Armuña de Almanzora',
			),
			322 => 
			array (
				'id' => 823,
				'id_provincia' => 5,
				'cod_municipio' => 18,
				'DC' => 5,
				'nombre' => 'Avellaneda',
			),
			323 => 
			array (
				'id' => 824,
				'id_provincia' => 6,
				'cod_municipio' => 18,
				'DC' => 8,
				'nombre' => 'Benquerencia de la Serena',
			),
			324 => 
			array (
				'id' => 825,
				'id_provincia' => 7,
				'cod_municipio' => 18,
				'DC' => 4,
				'nombre' => 'Deyá',
			),
			325 => 
			array (
				'id' => 826,
				'id_provincia' => 8,
				'cod_municipio' => 18,
				'DC' => 0,
				'nombre' => 'Balsareny',
			),
			326 => 
			array (
				'id' => 827,
				'id_provincia' => 9,
				'cod_municipio' => 18,
				'DC' => 3,
				'nombre' => 'Aranda de Duero',
			),
			327 => 
			array (
				'id' => 828,
				'id_provincia' => 10,
				'cod_municipio' => 18,
				'DC' => 7,
				'nombre' => 'Aliseda',
			),
			328 => 
			array (
				'id' => 829,
				'id_provincia' => 11,
				'cod_municipio' => 18,
				'DC' => 4,
				'nombre' => 'Gastor, El',
			),
			329 => 
			array (
				'id' => 830,
				'id_provincia' => 12,
				'cod_municipio' => 18,
				'DC' => 9,
				'nombre' => 'Azuébar',
			),
			330 => 
			array (
				'id' => 831,
				'id_provincia' => 13,
				'cod_municipio' => 18,
				'DC' => 5,
				'nombre' => 'Arenas de San Juan',
			),
			331 => 
			array (
				'id' => 832,
				'id_provincia' => 14,
				'cod_municipio' => 18,
				'DC' => 0,
				'nombre' => 'Carpio, El',
			),
			332 => 
			array (
				'id' => 833,
				'id_provincia' => 15,
				'cod_municipio' => 18,
				'DC' => 3,
				'nombre' => 'Capela, A',
			),
			333 => 
			array (
				'id' => 834,
				'id_provincia' => 16,
				'cod_municipio' => 18,
				'DC' => 6,
				'nombre' => 'Almonacid del Marquesado',
			),
			334 => 
			array (
				'id' => 835,
				'id_provincia' => 17,
				'cod_municipio' => 18,
				'DC' => 2,
				'nombre' => 'Bellcaire d\'Empordà',
			),
			335 => 
			array (
				'id' => 836,
				'id_provincia' => 18,
				'cod_municipio' => 18,
				'DC' => 8,
				'nombre' => 'Alquife',
			),
			336 => 
			array (
				'id' => 837,
				'id_provincia' => 19,
				'cod_municipio' => 18,
				'DC' => 1,
				'nombre' => 'Alhóndiga',
			),
			337 => 
			array (
				'id' => 838,
				'id_provincia' => 20,
				'cod_municipio' => 18,
				'DC' => 5,
				'nombre' => 'Azpeitia',
			),
			338 => 
			array (
				'id' => 839,
				'id_provincia' => 21,
				'cod_municipio' => 18,
				'DC' => 2,
				'nombre' => 'Campillo, El',
			),
			339 => 
			array (
				'id' => 840,
				'id_provincia' => 22,
				'cod_municipio' => 18,
				'DC' => 7,
				'nombre' => 'Alcubierre',
			),
			340 => 
			array (
				'id' => 841,
				'id_provincia' => 23,
				'cod_municipio' => 18,
				'DC' => 3,
				'nombre' => 'Cambil',
			),
			341 => 
			array (
				'id' => 842,
				'id_provincia' => 24,
				'cod_municipio' => 18,
				'DC' => 8,
				'nombre' => 'Bercianos del Real Camino',
			),
			342 => 
			array (
				'id' => 843,
				'id_provincia' => 26,
				'cod_municipio' => 18,
				'DC' => 4,
				'nombre' => 'Arnedo',
			),
			343 => 
			array (
				'id' => 844,
				'id_provincia' => 27,
				'cod_municipio' => 18,
				'DC' => 0,
				'nombre' => 'Fonsagrada, A',
			),
			344 => 
			array (
				'id' => 845,
				'id_provincia' => 28,
				'cod_municipio' => 18,
				'DC' => 6,
				'nombre' => 'Becerril de la Sierra',
			),
			345 => 
			array (
				'id' => 846,
				'id_provincia' => 29,
				'cod_municipio' => 18,
				'DC' => 9,
				'nombre' => 'Ardales',
			),
			346 => 
			array (
				'id' => 847,
				'id_provincia' => 30,
				'cod_municipio' => 18,
				'DC' => 3,
				'nombre' => 'Ceutí',
			),
			347 => 
			array (
				'id' => 848,
				'id_provincia' => 31,
				'cod_municipio' => 18,
				'DC' => 0,
				'nombre' => 'Añorbe',
			),
			348 => 
			array (
				'id' => 849,
				'id_provincia' => 32,
				'cod_municipio' => 18,
				'DC' => 5,
				'nombre' => 'Carballeda de Avia',
			),
			349 => 
			array (
				'id' => 850,
				'id_provincia' => 33,
				'cod_municipio' => 18,
				'DC' => 1,
				'nombre' => 'Coaña',
			),
			350 => 
			array (
				'id' => 851,
				'id_provincia' => 34,
				'cod_municipio' => 18,
				'DC' => 6,
				'nombre' => 'Autilla del Pino',
			),
			351 => 
			array (
				'id' => 852,
				'id_provincia' => 35,
				'cod_municipio' => 18,
				'DC' => 9,
				'nombre' => 'San Bartolomé',
			),
			352 => 
			array (
				'id' => 853,
				'id_provincia' => 36,
				'cod_municipio' => 18,
				'DC' => 2,
				'nombre' => 'Forcarei',
			),
			353 => 
			array (
				'id' => 854,
				'id_provincia' => 37,
				'cod_municipio' => 18,
				'DC' => 8,
				'nombre' => 'Aldeanueva de la Sierra',
			),
			354 => 
			array (
				'id' => 855,
				'id_provincia' => 38,
				'cod_municipio' => 18,
				'DC' => 4,
				'nombre' => 'Guancha, La',
			),
			355 => 
			array (
				'id' => 856,
				'id_provincia' => 39,
				'cod_municipio' => 18,
				'DC' => 7,
				'nombre' => 'Cartes',
			),
			356 => 
			array (
				'id' => 857,
				'id_provincia' => 40,
				'cod_municipio' => 18,
				'DC' => 1,
				'nombre' => 'Añe',
			),
			357 => 
			array (
				'id' => 858,
				'id_provincia' => 41,
				'cod_municipio' => 18,
				'DC' => 8,
				'nombre' => 'Brenes',
			),
			358 => 
			array (
				'id' => 859,
				'id_provincia' => 42,
				'cod_municipio' => 18,
				'DC' => 3,
				'nombre' => 'Almaluez',
			),
			359 => 
			array (
				'id' => 860,
				'id_provincia' => 43,
				'cod_municipio' => 18,
				'DC' => 9,
				'nombre' => 'Arnes',
			),
			360 => 
			array (
				'id' => 861,
				'id_provincia' => 44,
				'cod_municipio' => 18,
				'DC' => 4,
				'nombre' => 'Almohaja',
			),
			361 => 
			array (
				'id' => 862,
				'id_provincia' => 45,
				'cod_municipio' => 18,
				'DC' => 7,
				'nombre' => 'Barcience',
			),
			362 => 
			array (
				'id' => 863,
				'id_provincia' => 46,
				'cod_municipio' => 18,
				'DC' => 0,
				'nombre' => 'Alcublas',
			),
			363 => 
			array (
				'id' => 864,
				'id_provincia' => 47,
				'cod_municipio' => 18,
				'DC' => 6,
				'nombre' => 'Berceruelo',
			),
			364 => 
			array (
				'id' => 865,
				'id_provincia' => 48,
				'cod_municipio' => 18,
				'DC' => 2,
				'nombre' => 'Berriatua',
			),
			365 => 
			array (
				'id' => 866,
				'id_provincia' => 49,
				'cod_municipio' => 18,
				'DC' => 5,
				'nombre' => 'Ayoó de Vidriales',
			),
			366 => 
			array (
				'id' => 867,
				'id_provincia' => 50,
				'cod_municipio' => 18,
				'DC' => 8,
				'nombre' => 'Alfamén',
			),
			367 => 
			array (
				'id' => 868,
				'id_provincia' => 1,
				'cod_municipio' => 19,
				'DC' => 9,
				'nombre' => 'Kripan',
			),
			368 => 
			array (
				'id' => 869,
				'id_provincia' => 2,
				'cod_municipio' => 19,
				'DC' => 4,
				'nombre' => 'Bonillo, El',
			),
			369 => 
			array (
				'id' => 870,
				'id_provincia' => 3,
				'cod_municipio' => 19,
				'DC' => 0,
				'nombre' => 'Aspe',
			),
			370 => 
			array (
				'id' => 871,
				'id_provincia' => 4,
				'cod_municipio' => 19,
				'DC' => 5,
				'nombre' => 'Bacares',
			),
			371 => 
			array (
				'id' => 872,
				'id_provincia' => 5,
				'cod_municipio' => 19,
				'DC' => 8,
				'nombre' => 'Ávila',
			),
			372 => 
			array (
				'id' => 873,
				'id_provincia' => 6,
				'cod_municipio' => 19,
				'DC' => 1,
				'nombre' => 'Berlanga',
			),
			373 => 
			array (
				'id' => 874,
				'id_provincia' => 7,
				'cod_municipio' => 19,
				'DC' => 7,
				'nombre' => 'Escorca',
			),
			374 => 
			array (
				'id' => 875,
				'id_provincia' => 8,
				'cod_municipio' => 19,
				'DC' => 3,
				'nombre' => 'Barcelona',
			),
			375 => 
			array (
				'id' => 876,
				'id_provincia' => 9,
				'cod_municipio' => 19,
				'DC' => 6,
				'nombre' => 'Arandilla',
			),
			376 => 
			array (
				'id' => 877,
				'id_provincia' => 10,
				'cod_municipio' => 19,
				'DC' => 0,
				'nombre' => 'Almaraz',
			),
			377 => 
			array (
				'id' => 878,
				'id_provincia' => 11,
				'cod_municipio' => 19,
				'DC' => 7,
				'nombre' => 'Grazalema',
			),
			378 => 
			array (
				'id' => 879,
				'id_provincia' => 13,
				'cod_municipio' => 19,
				'DC' => 8,
				'nombre' => 'Argamasilla de Alba',
			),
			379 => 
			array (
				'id' => 880,
				'id_provincia' => 14,
				'cod_municipio' => 19,
				'DC' => 3,
				'nombre' => 'Castro del Río',
			),
			380 => 
			array (
				'id' => 881,
				'id_provincia' => 15,
				'cod_municipio' => 19,
				'DC' => 6,
				'nombre' => 'Carballo',
			),
			381 => 
			array (
				'id' => 882,
				'id_provincia' => 16,
				'cod_municipio' => 19,
				'DC' => 9,
				'nombre' => 'Altarejos',
			),
			382 => 
			array (
				'id' => 883,
				'id_provincia' => 17,
				'cod_municipio' => 19,
				'DC' => 5,
				'nombre' => 'Besalú',
			),
			383 => 
			array (
				'id' => 884,
				'id_provincia' => 19,
				'cod_municipio' => 19,
				'DC' => 4,
				'nombre' => 'Alique',
			),
			384 => 
			array (
				'id' => 885,
				'id_provincia' => 20,
				'cod_municipio' => 19,
				'DC' => 8,
				'nombre' => 'Beasain',
			),
			385 => 
			array (
				'id' => 886,
				'id_provincia' => 21,
				'cod_municipio' => 19,
				'DC' => 5,
				'nombre' => 'Campofrío',
			),
			386 => 
			array (
				'id' => 887,
				'id_provincia' => 22,
				'cod_municipio' => 19,
				'DC' => 0,
				'nombre' => 'Alerre',
			),
			387 => 
			array (
				'id' => 888,
				'id_provincia' => 23,
				'cod_municipio' => 19,
				'DC' => 6,
				'nombre' => 'Campillo de Arenas',
			),
			388 => 
			array (
				'id' => 889,
				'id_provincia' => 24,
				'cod_municipio' => 19,
				'DC' => 1,
				'nombre' => 'Berlanga del Bierzo',
			),
			389 => 
			array (
				'id' => 890,
				'id_provincia' => 25,
				'cod_municipio' => 19,
				'DC' => 4,
				'nombre' => 'Almacelles',
			),
			390 => 
			array (
				'id' => 891,
				'id_provincia' => 26,
				'cod_municipio' => 19,
				'DC' => 7,
				'nombre' => 'Arrúbal',
			),
			391 => 
			array (
				'id' => 892,
				'id_provincia' => 27,
				'cod_municipio' => 19,
				'DC' => 3,
				'nombre' => 'Foz',
			),
			392 => 
			array (
				'id' => 893,
				'id_provincia' => 28,
				'cod_municipio' => 19,
				'DC' => 9,
				'nombre' => 'Belmonte de Tajo',
			),
			393 => 
			array (
				'id' => 894,
				'id_provincia' => 29,
				'cod_municipio' => 19,
				'DC' => 2,
				'nombre' => 'Arenas',
			),
			394 => 
			array (
				'id' => 895,
				'id_provincia' => 30,
				'cod_municipio' => 19,
				'DC' => 6,
				'nombre' => 'Cieza',
			),
			395 => 
			array (
				'id' => 896,
				'id_provincia' => 31,
				'cod_municipio' => 19,
				'DC' => 3,
				'nombre' => 'Aoiz/Agoitz',
			),
			396 => 
			array (
				'id' => 897,
				'id_provincia' => 32,
				'cod_municipio' => 19,
				'DC' => 8,
				'nombre' => 'Carballiño, O',
			),
			397 => 
			array (
				'id' => 898,
				'id_provincia' => 33,
				'cod_municipio' => 19,
				'DC' => 4,
				'nombre' => 'Colunga',
			),
			398 => 
			array (
				'id' => 899,
				'id_provincia' => 34,
				'cod_municipio' => 19,
				'DC' => 9,
				'nombre' => 'Autillo de Campos',
			),
			399 => 
			array (
				'id' => 900,
				'id_provincia' => 35,
				'cod_municipio' => 19,
				'DC' => 2,
				'nombre' => 'San Bartolomé de Tirajana',
			),
			400 => 
			array (
				'id' => 901,
				'id_provincia' => 36,
				'cod_municipio' => 19,
				'DC' => 5,
				'nombre' => 'Fornelos de Montes',
			),
			401 => 
			array (
				'id' => 902,
				'id_provincia' => 37,
				'cod_municipio' => 19,
				'DC' => 1,
				'nombre' => 'Aldearrodrigo',
			),
			402 => 
			array (
				'id' => 903,
				'id_provincia' => 38,
				'cod_municipio' => 19,
				'DC' => 7,
				'nombre' => 'Guía de Isora',
			),
			403 => 
			array (
				'id' => 904,
				'id_provincia' => 39,
				'cod_municipio' => 19,
				'DC' => 0,
				'nombre' => 'Castañeda',
			),
			404 => 
			array (
				'id' => 905,
				'id_provincia' => 40,
				'cod_municipio' => 19,
				'DC' => 4,
				'nombre' => 'Arahuetes',
			),
			405 => 
			array (
				'id' => 906,
				'id_provincia' => 41,
				'cod_municipio' => 19,
				'DC' => 1,
				'nombre' => 'Burguillos',
			),
			406 => 
			array (
				'id' => 907,
				'id_provincia' => 42,
				'cod_municipio' => 19,
				'DC' => 6,
				'nombre' => 'Almarza',
			),
			407 => 
			array (
				'id' => 908,
				'id_provincia' => 43,
				'cod_municipio' => 19,
				'DC' => 2,
				'nombre' => 'Ascó',
			),
			408 => 
			array (
				'id' => 909,
				'id_provincia' => 44,
				'cod_municipio' => 19,
				'DC' => 7,
				'nombre' => 'Alobras',
			),
			409 => 
			array (
				'id' => 910,
				'id_provincia' => 45,
				'cod_municipio' => 19,
				'DC' => 0,
				'nombre' => 'Bargas',
			),
			410 => 
			array (
				'id' => 911,
				'id_provincia' => 46,
				'cod_municipio' => 19,
				'DC' => 3,
				'nombre' => 'Alcúdia, l\'',
			),
			411 => 
			array (
				'id' => 912,
				'id_provincia' => 47,
				'cod_municipio' => 19,
				'DC' => 9,
				'nombre' => 'Berrueces',
			),
			412 => 
			array (
				'id' => 913,
				'id_provincia' => 48,
				'cod_municipio' => 19,
				'DC' => 5,
				'nombre' => 'Berriz',
			),
			413 => 
			array (
				'id' => 914,
				'id_provincia' => 49,
				'cod_municipio' => 19,
				'DC' => 8,
				'nombre' => 'Barcial del Barco',
			),
			414 => 
			array (
				'id' => 915,
				'id_provincia' => 50,
				'cod_municipio' => 19,
				'DC' => 1,
				'nombre' => 'Alforque',
			),
			415 => 
			array (
				'id' => 916,
				'id_provincia' => 1,
				'cod_municipio' => 20,
				'DC' => 3,
				'nombre' => 'Kuartango',
			),
			416 => 
			array (
				'id' => 917,
				'id_provincia' => 2,
				'cod_municipio' => 20,
				'DC' => 8,
				'nombre' => 'Carcelén',
			),
			417 => 
			array (
				'id' => 918,
				'id_provincia' => 3,
				'cod_municipio' => 20,
				'DC' => 4,
				'nombre' => 'Balones',
			),
			418 => 
			array (
				'id' => 919,
				'id_provincia' => 4,
				'cod_municipio' => 20,
				'DC' => 9,
				'nombre' => 'Bayárcal',
			),
			419 => 
			array (
				'id' => 920,
				'id_provincia' => 6,
				'cod_municipio' => 20,
				'DC' => 5,
				'nombre' => 'Bienvenida',
			),
			420 => 
			array (
				'id' => 921,
				'id_provincia' => 7,
				'cod_municipio' => 20,
				'DC' => 1,
				'nombre' => 'Esporles',
			),
			421 => 
			array (
				'id' => 922,
				'id_provincia' => 8,
				'cod_municipio' => 20,
				'DC' => 7,
				'nombre' => 'Begues',
			),
			422 => 
			array (
				'id' => 923,
				'id_provincia' => 9,
				'cod_municipio' => 20,
				'DC' => 0,
				'nombre' => 'Arauzo de Miel',
			),
			423 => 
			array (
				'id' => 924,
				'id_provincia' => 10,
				'cod_municipio' => 20,
				'DC' => 4,
				'nombre' => 'Almoharín',
			),
			424 => 
			array (
				'id' => 925,
				'id_provincia' => 11,
				'cod_municipio' => 20,
				'DC' => 1,
				'nombre' => 'Jerez de la Frontera',
			),
			425 => 
			array (
				'id' => 926,
				'id_provincia' => 12,
				'cod_municipio' => 20,
				'DC' => 6,
				'nombre' => 'Barracas',
			),
			426 => 
			array (
				'id' => 927,
				'id_provincia' => 13,
				'cod_municipio' => 20,
				'DC' => 2,
				'nombre' => 'Argamasilla de Calatrava',
			),
			427 => 
			array (
				'id' => 928,
				'id_provincia' => 14,
				'cod_municipio' => 20,
				'DC' => 7,
				'nombre' => 'Conquista',
			),
			428 => 
			array (
				'id' => 929,
				'id_provincia' => 15,
				'cod_municipio' => 20,
				'DC' => 0,
				'nombre' => 'Carnota',
			),
			429 => 
			array (
				'id' => 930,
				'id_provincia' => 16,
				'cod_municipio' => 20,
				'DC' => 3,
				'nombre' => 'Arandilla del Arroyo',
			),
			430 => 
			array (
				'id' => 931,
				'id_provincia' => 17,
				'cod_municipio' => 20,
				'DC' => 9,
				'nombre' => 'Bescanó',
			),
			431 => 
			array (
				'id' => 932,
				'id_provincia' => 18,
				'cod_municipio' => 20,
				'DC' => 5,
				'nombre' => 'Arenas del Rey',
			),
			432 => 
			array (
				'id' => 933,
				'id_provincia' => 19,
				'cod_municipio' => 20,
				'DC' => 8,
				'nombre' => 'Almadrones',
			),
			433 => 
			array (
				'id' => 934,
				'id_provincia' => 20,
				'cod_municipio' => 20,
				'DC' => 2,
				'nombre' => 'Beizama',
			),
			434 => 
			array (
				'id' => 935,
				'id_provincia' => 21,
				'cod_municipio' => 20,
				'DC' => 9,
				'nombre' => 'Cañaveral de León',
			),
			435 => 
			array (
				'id' => 936,
				'id_provincia' => 22,
				'cod_municipio' => 20,
				'DC' => 4,
				'nombre' => 'Alfántega',
			),
			436 => 
			array (
				'id' => 937,
				'id_provincia' => 23,
				'cod_municipio' => 20,
				'DC' => 0,
				'nombre' => 'Canena',
			),
			437 => 
			array (
				'id' => 938,
				'id_provincia' => 24,
				'cod_municipio' => 20,
				'DC' => 5,
				'nombre' => 'Boca de Huérgano',
			),
			438 => 
			array (
				'id' => 939,
				'id_provincia' => 25,
				'cod_municipio' => 20,
				'DC' => 8,
				'nombre' => 'Almatret',
			),
			439 => 
			array (
				'id' => 940,
				'id_provincia' => 26,
				'cod_municipio' => 20,
				'DC' => 1,
				'nombre' => 'Ausejo',
			),
			440 => 
			array (
				'id' => 941,
				'id_provincia' => 27,
				'cod_municipio' => 20,
				'DC' => 7,
				'nombre' => 'Friol',
			),
			441 => 
			array (
				'id' => 942,
				'id_provincia' => 28,
				'cod_municipio' => 20,
				'DC' => 3,
				'nombre' => 'Berzosa del Lozoya',
			),
			442 => 
			array (
				'id' => 943,
				'id_provincia' => 29,
				'cod_municipio' => 20,
				'DC' => 6,
				'nombre' => 'Arriate',
			),
			443 => 
			array (
				'id' => 944,
				'id_provincia' => 30,
				'cod_municipio' => 20,
				'DC' => 0,
				'nombre' => 'Fortuna',
			),
			444 => 
			array (
				'id' => 945,
				'id_provincia' => 31,
				'cod_municipio' => 20,
				'DC' => 7,
				'nombre' => 'Araitz',
			),
			445 => 
			array (
				'id' => 946,
				'id_provincia' => 32,
				'cod_municipio' => 20,
				'DC' => 2,
				'nombre' => 'Cartelle',
			),
			446 => 
			array (
				'id' => 947,
				'id_provincia' => 33,
				'cod_municipio' => 20,
				'DC' => 8,
				'nombre' => 'Corvera de Asturias',
			),
			447 => 
			array (
				'id' => 948,
				'id_provincia' => 34,
				'cod_municipio' => 20,
				'DC' => 3,
				'nombre' => 'Ayuela',
			),
			448 => 
			array (
				'id' => 949,
				'id_provincia' => 35,
				'cod_municipio' => 20,
				'DC' => 6,
				'nombre' => 'Aldea de San Nicolás, La',
			),
			449 => 
			array (
				'id' => 950,
				'id_provincia' => 36,
				'cod_municipio' => 20,
				'DC' => 9,
				'nombre' => 'Agolada',
			),
			450 => 
			array (
				'id' => 951,
				'id_provincia' => 37,
				'cod_municipio' => 20,
				'DC' => 5,
				'nombre' => 'Aldearrubia',
			),
			451 => 
			array (
				'id' => 952,
				'id_provincia' => 38,
				'cod_municipio' => 20,
				'DC' => 1,
				'nombre' => 'Güímar',
			),
			452 => 
			array (
				'id' => 953,
				'id_provincia' => 39,
				'cod_municipio' => 20,
				'DC' => 4,
				'nombre' => 'Castro-Urdiales',
			),
			453 => 
			array (
				'id' => 954,
				'id_provincia' => 40,
				'cod_municipio' => 20,
				'DC' => 8,
				'nombre' => 'Arcones',
			),
			454 => 
			array (
				'id' => 955,
				'id_provincia' => 41,
				'cod_municipio' => 20,
				'DC' => 5,
				'nombre' => 'Cabezas de San Juan, Las',
			),
			455 => 
			array (
				'id' => 956,
				'id_provincia' => 42,
				'cod_municipio' => 20,
				'DC' => 0,
				'nombre' => 'Almazán',
			),
			456 => 
			array (
				'id' => 957,
				'id_provincia' => 43,
				'cod_municipio' => 20,
				'DC' => 6,
				'nombre' => 'Banyeres del Penedès',
			),
			457 => 
			array (
				'id' => 958,
				'id_provincia' => 44,
				'cod_municipio' => 20,
				'DC' => 1,
				'nombre' => 'Alpeñés',
			),
			458 => 
			array (
				'id' => 959,
				'id_provincia' => 45,
				'cod_municipio' => 20,
				'DC' => 4,
				'nombre' => 'Belvís de la Jara',
			),
			459 => 
			array (
				'id' => 960,
				'id_provincia' => 46,
				'cod_municipio' => 20,
				'DC' => 7,
				'nombre' => 'Alcúdia de Crespins, l\'',
			),
			460 => 
			array (
				'id' => 961,
				'id_provincia' => 47,
				'cod_municipio' => 20,
				'DC' => 3,
				'nombre' => 'Bobadilla del Campo',
			),
			461 => 
			array (
				'id' => 962,
				'id_provincia' => 48,
				'cod_municipio' => 20,
				'DC' => 9,
				'nombre' => 'Bilbao',
			),
			462 => 
			array (
				'id' => 963,
				'id_provincia' => 49,
				'cod_municipio' => 20,
				'DC' => 2,
				'nombre' => 'Belver de los Montes',
			),
			463 => 
			array (
				'id' => 964,
				'id_provincia' => 50,
				'cod_municipio' => 20,
				'DC' => 5,
				'nombre' => 'Alhama de Aragón',
			),
			464 => 
			array (
				'id' => 965,
				'id_provincia' => 1,
				'cod_municipio' => 21,
				'DC' => 0,
				'nombre' => 'Elburgo/Burgelu',
			),
			465 => 
			array (
				'id' => 966,
				'id_provincia' => 2,
				'cod_municipio' => 21,
				'DC' => 5,
				'nombre' => 'Casas de Juan Núñez',
			),
			466 => 
			array (
				'id' => 967,
				'id_provincia' => 3,
				'cod_municipio' => 21,
				'DC' => 1,
				'nombre' => 'Banyeres de Mariola',
			),
			467 => 
			array (
				'id' => 968,
				'id_provincia' => 4,
				'cod_municipio' => 21,
				'DC' => 6,
				'nombre' => 'Bayarque',
			),
			468 => 
			array (
				'id' => 969,
				'id_provincia' => 5,
				'cod_municipio' => 21,
				'DC' => 9,
				'nombre' => 'Barco de Ávila, El',
			),
			469 => 
			array (
				'id' => 970,
				'id_provincia' => 6,
				'cod_municipio' => 21,
				'DC' => 2,
				'nombre' => 'Bodonal de la Sierra',
			),
			470 => 
			array (
				'id' => 971,
				'id_provincia' => 7,
				'cod_municipio' => 21,
				'DC' => 8,
				'nombre' => 'Estellencs',
			),
			471 => 
			array (
				'id' => 972,
				'id_provincia' => 8,
				'cod_municipio' => 21,
				'DC' => 4,
				'nombre' => 'Bellprat',
			),
			472 => 
			array (
				'id' => 973,
				'id_provincia' => 9,
				'cod_municipio' => 21,
				'DC' => 7,
				'nombre' => 'Arauzo de Salce',
			),
			473 => 
			array (
				'id' => 974,
				'id_provincia' => 10,
				'cod_municipio' => 21,
				'DC' => 1,
				'nombre' => 'Arroyo de la Luz',
			),
			474 => 
			array (
				'id' => 975,
				'id_provincia' => 11,
				'cod_municipio' => 21,
				'DC' => 8,
				'nombre' => 'Jimena de la Frontera',
			),
			475 => 
			array (
				'id' => 976,
				'id_provincia' => 12,
				'cod_municipio' => 21,
				'DC' => 3,
				'nombre' => 'Betxí',
			),
			476 => 
			array (
				'id' => 977,
				'id_provincia' => 13,
				'cod_municipio' => 21,
				'DC' => 9,
				'nombre' => 'Arroba de los Montes',
			),
			477 => 
			array (
				'id' => 978,
				'id_provincia' => 14,
				'cod_municipio' => 21,
				'DC' => 4,
				'nombre' => 'Córdoba',
			),
			478 => 
			array (
				'id' => 979,
				'id_provincia' => 15,
				'cod_municipio' => 21,
				'DC' => 7,
				'nombre' => 'Carral',
			),
			479 => 
			array (
				'id' => 980,
				'id_provincia' => 17,
				'cod_municipio' => 21,
				'DC' => 6,
				'nombre' => 'Beuda',
			),
			480 => 
			array (
				'id' => 981,
				'id_provincia' => 18,
				'cod_municipio' => 21,
				'DC' => 2,
				'nombre' => 'Armilla',
			),
			481 => 
			array (
				'id' => 982,
				'id_provincia' => 19,
				'cod_municipio' => 21,
				'DC' => 5,
				'nombre' => 'Almoguera',
			),
			482 => 
			array (
				'id' => 983,
				'id_provincia' => 20,
				'cod_municipio' => 21,
				'DC' => 9,
				'nombre' => 'Belauntza',
			),
			483 => 
			array (
				'id' => 984,
				'id_provincia' => 21,
				'cod_municipio' => 21,
				'DC' => 6,
				'nombre' => 'Cartaya',
			),
			484 => 
			array (
				'id' => 985,
				'id_provincia' => 22,
				'cod_municipio' => 21,
				'DC' => 1,
				'nombre' => 'Almudévar',
			),
			485 => 
			array (
				'id' => 986,
				'id_provincia' => 23,
				'cod_municipio' => 21,
				'DC' => 7,
				'nombre' => 'Carboneros',
			),
			486 => 
			array (
				'id' => 987,
				'id_provincia' => 24,
				'cod_municipio' => 21,
				'DC' => 2,
				'nombre' => 'Boñar',
			),
			487 => 
			array (
				'id' => 988,
				'id_provincia' => 25,
				'cod_municipio' => 21,
				'DC' => 5,
				'nombre' => 'Almenar',
			),
			488 => 
			array (
				'id' => 989,
				'id_provincia' => 26,
				'cod_municipio' => 21,
				'DC' => 8,
				'nombre' => 'Autol',
			),
			489 => 
			array (
				'id' => 990,
				'id_provincia' => 27,
				'cod_municipio' => 21,
				'DC' => 4,
				'nombre' => 'Xermade',
			),
			490 => 
			array (
				'id' => 991,
				'id_provincia' => 28,
				'cod_municipio' => 21,
				'DC' => 0,
				'nombre' => 'Berrueco, El',
			),
			491 => 
			array (
				'id' => 992,
				'id_provincia' => 29,
				'cod_municipio' => 21,
				'DC' => 3,
				'nombre' => 'Atajate',
			),
			492 => 
			array (
				'id' => 993,
				'id_provincia' => 30,
				'cod_municipio' => 21,
				'DC' => 7,
				'nombre' => 'Fuente Álamo de Murcia',
			),
			493 => 
			array (
				'id' => 994,
				'id_provincia' => 31,
				'cod_municipio' => 21,
				'DC' => 4,
				'nombre' => 'Aranarache/Aranaratxe',
			),
			494 => 
			array (
				'id' => 995,
				'id_provincia' => 32,
				'cod_municipio' => 21,
				'DC' => 9,
				'nombre' => 'Castrelo do Val',
			),
			495 => 
			array (
				'id' => 996,
				'id_provincia' => 33,
				'cod_municipio' => 21,
				'DC' => 5,
				'nombre' => 'Cudillero',
			),
			496 => 
			array (
				'id' => 997,
				'id_provincia' => 35,
				'cod_municipio' => 21,
				'DC' => 3,
				'nombre' => 'Santa Brígida',
			),
			497 => 
			array (
				'id' => 998,
				'id_provincia' => 36,
				'cod_municipio' => 21,
				'DC' => 6,
				'nombre' => 'Gondomar',
			),
			498 => 
			array (
				'id' => 999,
				'id_provincia' => 37,
				'cod_municipio' => 21,
				'DC' => 2,
				'nombre' => 'Aldeaseca de Alba',
			),
			499 => 
			array (
				'id' => 1000,
				'id_provincia' => 38,
				'cod_municipio' => 21,
				'DC' => 8,
				'nombre' => 'Hermigua',
			),
		));
		\DB::table('municipios')->insert(array (
			0 => 
			array (
				'id' => 1001,
				'id_provincia' => 39,
				'cod_municipio' => 21,
				'DC' => 1,
				'nombre' => 'Cieza',
			),
			1 => 
			array (
				'id' => 1002,
				'id_provincia' => 40,
				'cod_municipio' => 21,
				'DC' => 5,
				'nombre' => 'Arevalillo de Cega',
			),
			2 => 
			array (
				'id' => 1003,
				'id_provincia' => 41,
				'cod_municipio' => 21,
				'DC' => 2,
				'nombre' => 'Camas',
			),
			3 => 
			array (
				'id' => 1004,
				'id_provincia' => 42,
				'cod_municipio' => 21,
				'DC' => 7,
				'nombre' => 'Almazul',
			),
			4 => 
			array (
				'id' => 1005,
				'id_provincia' => 43,
				'cod_municipio' => 21,
				'DC' => 3,
				'nombre' => 'Barberà de la Conca',
			),
			5 => 
			array (
				'id' => 1006,
				'id_provincia' => 44,
				'cod_municipio' => 21,
				'DC' => 8,
				'nombre' => 'Allepuz',
			),
			6 => 
			array (
				'id' => 1007,
				'id_provincia' => 45,
				'cod_municipio' => 21,
				'DC' => 1,
				'nombre' => 'Borox',
			),
			7 => 
			array (
				'id' => 1008,
				'id_provincia' => 46,
				'cod_municipio' => 21,
				'DC' => 4,
				'nombre' => 'Aldaia',
			),
			8 => 
			array (
				'id' => 1009,
				'id_provincia' => 47,
				'cod_municipio' => 21,
				'DC' => 0,
				'nombre' => 'Bocigas',
			),
			9 => 
			array (
				'id' => 1010,
				'id_provincia' => 48,
				'cod_municipio' => 21,
				'DC' => 6,
				'nombre' => 'Busturia',
			),
			10 => 
			array (
				'id' => 1011,
				'id_provincia' => 49,
				'cod_municipio' => 21,
				'DC' => 9,
				'nombre' => 'Benavente',
			),
			11 => 
			array (
				'id' => 1012,
				'id_provincia' => 50,
				'cod_municipio' => 21,
				'DC' => 2,
				'nombre' => 'Almochuel',
			),
			12 => 
			array (
				'id' => 1013,
				'id_provincia' => 1,
				'cod_municipio' => 22,
				'DC' => 5,
				'nombre' => 'Elciego',
			),
			13 => 
			array (
				'id' => 1014,
				'id_provincia' => 2,
				'cod_municipio' => 22,
				'DC' => 0,
				'nombre' => 'Casas de Lázaro',
			),
			14 => 
			array (
				'id' => 1015,
				'id_provincia' => 3,
				'cod_municipio' => 22,
				'DC' => 6,
				'nombre' => 'Benasau',
			),
			15 => 
			array (
				'id' => 1016,
				'id_provincia' => 4,
				'cod_municipio' => 22,
				'DC' => 1,
				'nombre' => 'Bédar',
			),
			16 => 
			array (
				'id' => 1017,
				'id_provincia' => 5,
				'cod_municipio' => 22,
				'DC' => 4,
				'nombre' => 'Barraco, El',
			),
			17 => 
			array (
				'id' => 1018,
				'id_provincia' => 6,
				'cod_municipio' => 22,
				'DC' => 7,
				'nombre' => 'Burguillos del Cerro',
			),
			18 => 
			array (
				'id' => 1019,
				'id_provincia' => 7,
				'cod_municipio' => 22,
				'DC' => 3,
				'nombre' => 'Felanitx',
			),
			19 => 
			array (
				'id' => 1020,
				'id_provincia' => 8,
				'cod_municipio' => 22,
				'DC' => 9,
				'nombre' => 'Berga',
			),
			20 => 
			array (
				'id' => 1021,
				'id_provincia' => 9,
				'cod_municipio' => 22,
				'DC' => 2,
				'nombre' => 'Arauzo de Torre',
			),
			21 => 
			array (
				'id' => 1022,
				'id_provincia' => 10,
				'cod_municipio' => 22,
				'DC' => 6,
				'nombre' => 'Arroyomolinos de la Vera',
			),
			22 => 
			array (
				'id' => 1023,
				'id_provincia' => 11,
				'cod_municipio' => 22,
				'DC' => 3,
				'nombre' => 'Línea de la Concepción, La',
			),
			23 => 
			array (
				'id' => 1024,
				'id_provincia' => 12,
				'cod_municipio' => 22,
				'DC' => 8,
				'nombre' => 'Bejís',
			),
			24 => 
			array (
				'id' => 1025,
				'id_provincia' => 13,
				'cod_municipio' => 22,
				'DC' => 4,
				'nombre' => 'Ballesteros de Calatrava',
			),
			25 => 
			array (
				'id' => 1026,
				'id_provincia' => 14,
				'cod_municipio' => 22,
				'DC' => 9,
				'nombre' => 'Doña Mencía',
			),
			26 => 
			array (
				'id' => 1027,
				'id_provincia' => 15,
				'cod_municipio' => 22,
				'DC' => 2,
				'nombre' => 'Cedeira',
			),
			27 => 
			array (
				'id' => 1028,
				'id_provincia' => 16,
				'cod_municipio' => 22,
				'DC' => 5,
				'nombre' => 'Arcos de la Sierra',
			),
			28 => 
			array (
				'id' => 1029,
				'id_provincia' => 17,
				'cod_municipio' => 22,
				'DC' => 1,
				'nombre' => 'Bisbal d\'Empordà, La',
			),
			29 => 
			array (
				'id' => 1030,
				'id_provincia' => 18,
				'cod_municipio' => 22,
				'DC' => 7,
				'nombre' => 'Atarfe',
			),
			30 => 
			array (
				'id' => 1031,
				'id_provincia' => 19,
				'cod_municipio' => 22,
				'DC' => 0,
				'nombre' => 'Almonacid de Zorita',
			),
			31 => 
			array (
				'id' => 1032,
				'id_provincia' => 20,
				'cod_municipio' => 22,
				'DC' => 4,
				'nombre' => 'Berastegi',
			),
			32 => 
			array (
				'id' => 1033,
				'id_provincia' => 21,
				'cod_municipio' => 22,
				'DC' => 1,
				'nombre' => 'Castaño del Robledo',
			),
			33 => 
			array (
				'id' => 1034,
				'id_provincia' => 22,
				'cod_municipio' => 22,
				'DC' => 6,
				'nombre' => 'Almunia de San Juan',
			),
			34 => 
			array (
				'id' => 1035,
				'id_provincia' => 24,
				'cod_municipio' => 22,
				'DC' => 7,
				'nombre' => 'Borrenes',
			),
			35 => 
			array (
				'id' => 1036,
				'id_provincia' => 25,
				'cod_municipio' => 22,
				'DC' => 0,
				'nombre' => 'Alòs de Balaguer',
			),
			36 => 
			array (
				'id' => 1037,
				'id_provincia' => 26,
				'cod_municipio' => 22,
				'DC' => 3,
				'nombre' => 'Azofra',
			),
			37 => 
			array (
				'id' => 1038,
				'id_provincia' => 27,
				'cod_municipio' => 22,
				'DC' => 9,
				'nombre' => 'Guitiriz',
			),
			38 => 
			array (
				'id' => 1039,
				'id_provincia' => 28,
				'cod_municipio' => 22,
				'DC' => 5,
				'nombre' => 'Boadilla del Monte',
			),
			39 => 
			array (
				'id' => 1040,
				'id_provincia' => 29,
				'cod_municipio' => 22,
				'DC' => 8,
				'nombre' => 'Benadalid',
			),
			40 => 
			array (
				'id' => 1041,
				'id_provincia' => 30,
				'cod_municipio' => 22,
				'DC' => 2,
				'nombre' => 'Jumilla',
			),
			41 => 
			array (
				'id' => 1042,
				'id_provincia' => 31,
				'cod_municipio' => 22,
				'DC' => 9,
				'nombre' => 'Arantza',
			),
			42 => 
			array (
				'id' => 1043,
				'id_provincia' => 32,
				'cod_municipio' => 22,
				'DC' => 4,
				'nombre' => 'Castrelo de Miño',
			),
			43 => 
			array (
				'id' => 1044,
				'id_provincia' => 33,
				'cod_municipio' => 22,
				'DC' => 0,
				'nombre' => 'Degaña',
			),
			44 => 
			array (
				'id' => 1045,
				'id_provincia' => 34,
				'cod_municipio' => 22,
				'DC' => 5,
				'nombre' => 'Baltanás',
			),
			45 => 
			array (
				'id' => 1046,
				'id_provincia' => 35,
				'cod_municipio' => 22,
				'DC' => 8,
				'nombre' => 'Santa Lucía de Tirajana',
			),
			46 => 
			array (
				'id' => 1047,
				'id_provincia' => 36,
				'cod_municipio' => 22,
				'DC' => 1,
				'nombre' => 'Grove, O',
			),
			47 => 
			array (
				'id' => 1048,
				'id_provincia' => 37,
				'cod_municipio' => 22,
				'DC' => 7,
				'nombre' => 'Aldeaseca de la Frontera',
			),
			48 => 
			array (
				'id' => 1049,
				'id_provincia' => 38,
				'cod_municipio' => 22,
				'DC' => 3,
				'nombre' => 'Icod de los Vinos',
			),
			49 => 
			array (
				'id' => 1050,
				'id_provincia' => 39,
				'cod_municipio' => 22,
				'DC' => 6,
				'nombre' => 'Cillorigo de Liébana',
			),
			50 => 
			array (
				'id' => 1051,
				'id_provincia' => 40,
				'cod_municipio' => 22,
				'DC' => 0,
				'nombre' => 'Armuña',
			),
			51 => 
			array (
				'id' => 1052,
				'id_provincia' => 41,
				'cod_municipio' => 22,
				'DC' => 7,
				'nombre' => 'Campana, La',
			),
			52 => 
			array (
				'id' => 1053,
				'id_provincia' => 42,
				'cod_municipio' => 22,
				'DC' => 2,
				'nombre' => 'Almenar de Soria',
			),
			53 => 
			array (
				'id' => 1054,
				'id_provincia' => 43,
				'cod_municipio' => 22,
				'DC' => 8,
				'nombre' => 'Batea',
			),
			54 => 
			array (
				'id' => 1055,
				'id_provincia' => 44,
				'cod_municipio' => 22,
				'DC' => 3,
				'nombre' => 'Alloza',
			),
			55 => 
			array (
				'id' => 1056,
				'id_provincia' => 45,
				'cod_municipio' => 22,
				'DC' => 6,
				'nombre' => 'Buenaventura',
			),
			56 => 
			array (
				'id' => 1057,
				'id_provincia' => 46,
				'cod_municipio' => 22,
				'DC' => 9,
				'nombre' => 'Alfafar',
			),
			57 => 
			array (
				'id' => 1058,
				'id_provincia' => 47,
				'cod_municipio' => 22,
				'DC' => 5,
				'nombre' => 'Bocos de Duero',
			),
			58 => 
			array (
				'id' => 1059,
				'id_provincia' => 48,
				'cod_municipio' => 22,
				'DC' => 1,
				'nombre' => 'Karrantza Harana/Valle de Carranza',
			),
			59 => 
			array (
				'id' => 1060,
				'id_provincia' => 49,
				'cod_municipio' => 22,
				'DC' => 4,
				'nombre' => 'Benegiles',
			),
			60 => 
			array (
				'id' => 1061,
				'id_provincia' => 50,
				'cod_municipio' => 22,
				'DC' => 7,
				'nombre' => 'Almolda, La',
			),
			61 => 
			array (
				'id' => 1062,
				'id_provincia' => 1,
				'cod_municipio' => 23,
				'DC' => 1,
				'nombre' => 'Elvillar/Bilar',
			),
			62 => 
			array (
				'id' => 1063,
				'id_provincia' => 2,
				'cod_municipio' => 23,
				'DC' => 6,
				'nombre' => 'Casas de Ves',
			),
			63 => 
			array (
				'id' => 1064,
				'id_provincia' => 3,
				'cod_municipio' => 23,
				'DC' => 2,
				'nombre' => 'Beneixama',
			),
			64 => 
			array (
				'id' => 1065,
				'id_provincia' => 4,
				'cod_municipio' => 23,
				'DC' => 7,
				'nombre' => 'Beires',
			),
			65 => 
			array (
				'id' => 1066,
				'id_provincia' => 5,
				'cod_municipio' => 23,
				'DC' => 0,
				'nombre' => 'Barromán',
			),
			66 => 
			array (
				'id' => 1067,
				'id_provincia' => 6,
				'cod_municipio' => 23,
				'DC' => 3,
				'nombre' => 'Cabeza del Buey',
			),
			67 => 
			array (
				'id' => 1068,
				'id_provincia' => 7,
				'cod_municipio' => 23,
				'DC' => 9,
				'nombre' => 'Ferreries',
			),
			68 => 
			array (
				'id' => 1069,
				'id_provincia' => 8,
				'cod_municipio' => 23,
				'DC' => 5,
				'nombre' => 'Bigues i Riells',
			),
			69 => 
			array (
				'id' => 1070,
				'id_provincia' => 9,
				'cod_municipio' => 23,
				'DC' => 8,
				'nombre' => 'Arcos',
			),
			70 => 
			array (
				'id' => 1071,
				'id_provincia' => 10,
				'cod_municipio' => 23,
				'DC' => 2,
				'nombre' => 'Arroyomolinos',
			),
			71 => 
			array (
				'id' => 1072,
				'id_provincia' => 11,
				'cod_municipio' => 23,
				'DC' => 9,
				'nombre' => 'Medina-Sidonia',
			),
			72 => 
			array (
				'id' => 1073,
				'id_provincia' => 13,
				'cod_municipio' => 23,
				'DC' => 0,
				'nombre' => 'Bolaños de Calatrava',
			),
			73 => 
			array (
				'id' => 1074,
				'id_provincia' => 14,
				'cod_municipio' => 23,
				'DC' => 5,
				'nombre' => 'Dos Torres',
			),
			74 => 
			array (
				'id' => 1075,
				'id_provincia' => 15,
				'cod_municipio' => 23,
				'DC' => 8,
				'nombre' => 'Cee',
			),
			75 => 
			array (
				'id' => 1076,
				'id_provincia' => 16,
				'cod_municipio' => 23,
				'DC' => 1,
				'nombre' => 'Chillarón de Cuenca',
			),
			76 => 
			array (
				'id' => 1077,
				'id_provincia' => 17,
				'cod_municipio' => 23,
				'DC' => 7,
				'nombre' => 'Blanes',
			),
			77 => 
			array (
				'id' => 1078,
				'id_provincia' => 18,
				'cod_municipio' => 23,
				'DC' => 3,
				'nombre' => 'Baza',
			),
			78 => 
			array (
				'id' => 1079,
				'id_provincia' => 19,
				'cod_municipio' => 23,
				'DC' => 6,
				'nombre' => 'Alocén',
			),
			79 => 
			array (
				'id' => 1080,
				'id_provincia' => 20,
				'cod_municipio' => 23,
				'DC' => 0,
				'nombre' => 'Berrobi',
			),
			80 => 
			array (
				'id' => 1081,
				'id_provincia' => 21,
				'cod_municipio' => 23,
				'DC' => 7,
				'nombre' => 'Cerro de Andévalo, El',
			),
			81 => 
			array (
				'id' => 1082,
				'id_provincia' => 22,
				'cod_municipio' => 23,
				'DC' => 2,
				'nombre' => 'Almuniente',
			),
			82 => 
			array (
				'id' => 1083,
				'id_provincia' => 24,
				'cod_municipio' => 23,
				'DC' => 3,
				'nombre' => 'Brazuelo',
			),
			83 => 
			array (
				'id' => 1084,
				'id_provincia' => 25,
				'cod_municipio' => 23,
				'DC' => 6,
				'nombre' => 'Alpicat',
			),
			84 => 
			array (
				'id' => 1085,
				'id_provincia' => 26,
				'cod_municipio' => 23,
				'DC' => 9,
				'nombre' => 'Badarán',
			),
			85 => 
			array (
				'id' => 1086,
				'id_provincia' => 27,
				'cod_municipio' => 23,
				'DC' => 5,
				'nombre' => 'Guntín',
			),
			86 => 
			array (
				'id' => 1087,
				'id_provincia' => 28,
				'cod_municipio' => 23,
				'DC' => 1,
				'nombre' => 'Boalo, El',
			),
			87 => 
			array (
				'id' => 1088,
				'id_provincia' => 29,
				'cod_municipio' => 23,
				'DC' => 4,
				'nombre' => 'Benahavís',
			),
			88 => 
			array (
				'id' => 1089,
				'id_provincia' => 30,
				'cod_municipio' => 23,
				'DC' => 8,
				'nombre' => 'Librilla',
			),
			89 => 
			array (
				'id' => 1090,
				'id_provincia' => 31,
				'cod_municipio' => 23,
				'DC' => 5,
				'nombre' => 'Aranguren',
			),
			90 => 
			array (
				'id' => 1091,
				'id_provincia' => 32,
				'cod_municipio' => 23,
				'DC' => 0,
				'nombre' => 'Castro Caldelas',
			),
			91 => 
			array (
				'id' => 1092,
				'id_provincia' => 33,
				'cod_municipio' => 23,
				'DC' => 6,
				'nombre' => 'Franco, El',
			),
			92 => 
			array (
				'id' => 1093,
				'id_provincia' => 34,
				'cod_municipio' => 23,
				'DC' => 1,
				'nombre' => 'Venta de Baños',
			),
			93 => 
			array (
				'id' => 1094,
				'id_provincia' => 35,
				'cod_municipio' => 23,
				'DC' => 4,
				'nombre' => 'Santa María de Guía de Gran Canaria',
			),
			94 => 
			array (
				'id' => 1095,
				'id_provincia' => 36,
				'cod_municipio' => 23,
				'DC' => 7,
				'nombre' => 'Guarda, A',
			),
			95 => 
			array (
				'id' => 1096,
				'id_provincia' => 37,
				'cod_municipio' => 23,
				'DC' => 3,
				'nombre' => 'Aldeatejada',
			),
			96 => 
			array (
				'id' => 1097,
				'id_provincia' => 38,
				'cod_municipio' => 23,
				'DC' => 9,
				'nombre' => 'San Cristóbal de La Laguna',
			),
			97 => 
			array (
				'id' => 1098,
				'id_provincia' => 39,
				'cod_municipio' => 23,
				'DC' => 2,
				'nombre' => 'Colindres',
			),
			98 => 
			array (
				'id' => 1099,
				'id_provincia' => 41,
				'cod_municipio' => 23,
				'DC' => 3,
				'nombre' => 'Cantillana',
			),
			99 => 
			array (
				'id' => 1100,
				'id_provincia' => 42,
				'cod_municipio' => 23,
				'DC' => 8,
				'nombre' => 'Alpanseque',
			),
			100 => 
			array (
				'id' => 1101,
				'id_provincia' => 43,
				'cod_municipio' => 23,
				'DC' => 4,
				'nombre' => 'Bellmunt del Priorat',
			),
			101 => 
			array (
				'id' => 1102,
				'id_provincia' => 44,
				'cod_municipio' => 23,
				'DC' => 9,
				'nombre' => 'Allueva',
			),
			102 => 
			array (
				'id' => 1103,
				'id_provincia' => 45,
				'cod_municipio' => 23,
				'DC' => 2,
				'nombre' => 'Burguillos de Toledo',
			),
			103 => 
			array (
				'id' => 1104,
				'id_provincia' => 46,
				'cod_municipio' => 23,
				'DC' => 5,
				'nombre' => 'Alfauir',
			),
			104 => 
			array (
				'id' => 1105,
				'id_provincia' => 47,
				'cod_municipio' => 23,
				'DC' => 1,
				'nombre' => 'Boecillo',
			),
			105 => 
			array (
				'id' => 1106,
				'id_provincia' => 48,
				'cod_municipio' => 23,
				'DC' => 7,
				'nombre' => 'Artea',
			),
			106 => 
			array (
				'id' => 1107,
				'id_provincia' => 49,
				'cod_municipio' => 23,
				'DC' => 0,
				'nombre' => 'Bermillo de Sayago',
			),
			107 => 
			array (
				'id' => 1108,
				'id_provincia' => 50,
				'cod_municipio' => 23,
				'DC' => 3,
				'nombre' => 'Almonacid de la Cuba',
			),
			108 => 
			array (
				'id' => 1109,
				'id_provincia' => 2,
				'cod_municipio' => 24,
				'DC' => 1,
				'nombre' => 'Casas-Ibáñez',
			),
			109 => 
			array (
				'id' => 1110,
				'id_provincia' => 3,
				'cod_municipio' => 24,
				'DC' => 7,
				'nombre' => 'Benejúzar',
			),
			110 => 
			array (
				'id' => 1111,
				'id_provincia' => 4,
				'cod_municipio' => 24,
				'DC' => 2,
				'nombre' => 'Benahadux',
			),
			111 => 
			array (
				'id' => 1112,
				'id_provincia' => 5,
				'cod_municipio' => 24,
				'DC' => 5,
				'nombre' => 'Becedas',
			),
			112 => 
			array (
				'id' => 1113,
				'id_provincia' => 6,
				'cod_municipio' => 24,
				'DC' => 8,
				'nombre' => 'Cabeza la Vaca',
			),
			113 => 
			array (
				'id' => 1114,
				'id_provincia' => 7,
				'cod_municipio' => 24,
				'DC' => 4,
				'nombre' => 'Formentera',
			),
			114 => 
			array (
				'id' => 1115,
				'id_provincia' => 8,
				'cod_municipio' => 24,
				'DC' => 0,
				'nombre' => 'Borredà',
			),
			115 => 
			array (
				'id' => 1116,
				'id_provincia' => 9,
				'cod_municipio' => 24,
				'DC' => 3,
				'nombre' => 'Arenillas de Riopisuerga',
			),
			116 => 
			array (
				'id' => 1117,
				'id_provincia' => 10,
				'cod_municipio' => 24,
				'DC' => 7,
				'nombre' => 'Baños de Montemayor',
			),
			117 => 
			array (
				'id' => 1118,
				'id_provincia' => 11,
				'cod_municipio' => 24,
				'DC' => 4,
				'nombre' => 'Olvera',
			),
			118 => 
			array (
				'id' => 1119,
				'id_provincia' => 12,
				'cod_municipio' => 24,
				'DC' => 9,
				'nombre' => 'Benafer',
			),
			119 => 
			array (
				'id' => 1120,
				'id_provincia' => 13,
				'cod_municipio' => 24,
				'DC' => 5,
				'nombre' => 'Brazatortas',
			),
			120 => 
			array (
				'id' => 1121,
				'id_provincia' => 14,
				'cod_municipio' => 24,
				'DC' => 0,
				'nombre' => 'Encinas Reales',
			),
			121 => 
			array (
				'id' => 1122,
				'id_provincia' => 15,
				'cod_municipio' => 24,
				'DC' => 3,
				'nombre' => 'Cerceda',
			),
			122 => 
			array (
				'id' => 1123,
				'id_provincia' => 16,
				'cod_municipio' => 24,
				'DC' => 6,
				'nombre' => 'Arguisuelas',
			),
			123 => 
			array (
				'id' => 1124,
				'id_provincia' => 17,
				'cod_municipio' => 24,
				'DC' => 2,
				'nombre' => 'Bolvir',
			),
			124 => 
			array (
				'id' => 1125,
				'id_provincia' => 18,
				'cod_municipio' => 24,
				'DC' => 8,
				'nombre' => 'Beas de Granada',
			),
			125 => 
			array (
				'id' => 1126,
				'id_provincia' => 19,
				'cod_municipio' => 24,
				'DC' => 1,
				'nombre' => 'Alovera',
			),
			126 => 
			array (
				'id' => 1127,
				'id_provincia' => 20,
				'cod_municipio' => 24,
				'DC' => 5,
				'nombre' => 'Bidegoian',
			),
			127 => 
			array (
				'id' => 1128,
				'id_provincia' => 21,
				'cod_municipio' => 24,
				'DC' => 2,
				'nombre' => 'Corteconcepción',
			),
			128 => 
			array (
				'id' => 1129,
				'id_provincia' => 22,
				'cod_municipio' => 24,
				'DC' => 7,
				'nombre' => 'Alquézar',
			),
			129 => 
			array (
				'id' => 1130,
				'id_provincia' => 23,
				'cod_municipio' => 24,
				'DC' => 3,
				'nombre' => 'Carolina, La',
			),
			130 => 
			array (
				'id' => 1131,
				'id_provincia' => 24,
				'cod_municipio' => 24,
				'DC' => 8,
				'nombre' => 'Burgo Ranero, El',
			),
			131 => 
			array (
				'id' => 1132,
				'id_provincia' => 25,
				'cod_municipio' => 24,
				'DC' => 1,
				'nombre' => 'Alt Àneu',
			),
			132 => 
			array (
				'id' => 1133,
				'id_provincia' => 26,
				'cod_municipio' => 24,
				'DC' => 4,
				'nombre' => 'Bañares',
			),
			133 => 
			array (
				'id' => 1134,
				'id_provincia' => 27,
				'cod_municipio' => 24,
				'DC' => 0,
				'nombre' => 'Incio, O',
			),
			134 => 
			array (
				'id' => 1135,
				'id_provincia' => 28,
				'cod_municipio' => 24,
				'DC' => 6,
				'nombre' => 'Braojos',
			),
			135 => 
			array (
				'id' => 1136,
				'id_provincia' => 29,
				'cod_municipio' => 24,
				'DC' => 9,
				'nombre' => 'Benalauría',
			),
			136 => 
			array (
				'id' => 1137,
				'id_provincia' => 30,
				'cod_municipio' => 24,
				'DC' => 3,
				'nombre' => 'Lorca',
			),
			137 => 
			array (
				'id' => 1138,
				'id_provincia' => 31,
				'cod_municipio' => 24,
				'DC' => 0,
				'nombre' => 'Arano',
			),
			138 => 
			array (
				'id' => 1139,
				'id_provincia' => 32,
				'cod_municipio' => 24,
				'DC' => 5,
				'nombre' => 'Celanova',
			),
			139 => 
			array (
				'id' => 1140,
				'id_provincia' => 33,
				'cod_municipio' => 24,
				'DC' => 1,
				'nombre' => 'Gijón',
			),
			140 => 
			array (
				'id' => 1141,
				'id_provincia' => 34,
				'cod_municipio' => 24,
				'DC' => 6,
				'nombre' => 'Baquerín de Campos',
			),
			141 => 
			array (
				'id' => 1142,
				'id_provincia' => 35,
				'cod_municipio' => 24,
				'DC' => 9,
				'nombre' => 'Teguise',
			),
			142 => 
			array (
				'id' => 1143,
				'id_provincia' => 36,
				'cod_municipio' => 24,
				'DC' => 2,
				'nombre' => 'Lalín',
			),
			143 => 
			array (
				'id' => 1144,
				'id_provincia' => 37,
				'cod_municipio' => 24,
				'DC' => 8,
				'nombre' => 'Aldeavieja de Tormes',
			),
			144 => 
			array (
				'id' => 1145,
				'id_provincia' => 38,
				'cod_municipio' => 24,
				'DC' => 4,
				'nombre' => 'Llanos de Aridane, Los',
			),
			145 => 
			array (
				'id' => 1146,
				'id_provincia' => 39,
				'cod_municipio' => 24,
				'DC' => 7,
				'nombre' => 'Comillas',
			),
			146 => 
			array (
				'id' => 1147,
				'id_provincia' => 40,
				'cod_municipio' => 24,
				'DC' => 1,
				'nombre' => 'Ayllón',
			),
			147 => 
			array (
				'id' => 1148,
				'id_provincia' => 41,
				'cod_municipio' => 24,
				'DC' => 8,
				'nombre' => 'Carmona',
			),
			148 => 
			array (
				'id' => 1149,
				'id_provincia' => 42,
				'cod_municipio' => 24,
				'DC' => 3,
				'nombre' => 'Arancón',
			),
			149 => 
			array (
				'id' => 1150,
				'id_provincia' => 43,
				'cod_municipio' => 24,
				'DC' => 9,
				'nombre' => 'Bellvei',
			),
			150 => 
			array (
				'id' => 1151,
				'id_provincia' => 44,
				'cod_municipio' => 24,
				'DC' => 4,
				'nombre' => 'Anadón',
			),
			151 => 
			array (
				'id' => 1152,
				'id_provincia' => 45,
				'cod_municipio' => 24,
				'DC' => 7,
				'nombre' => 'Burujón',
			),
			152 => 
			array (
				'id' => 1153,
				'id_provincia' => 46,
				'cod_municipio' => 24,
				'DC' => 0,
				'nombre' => 'Alfara de la Baronia',
			),
			153 => 
			array (
				'id' => 1154,
				'id_provincia' => 47,
				'cod_municipio' => 24,
				'DC' => 6,
				'nombre' => 'Bolaños de Campos',
			),
			154 => 
			array (
				'id' => 1155,
				'id_provincia' => 48,
				'cod_municipio' => 24,
				'DC' => 2,
				'nombre' => 'Zeanuri',
			),
			155 => 
			array (
				'id' => 1156,
				'id_provincia' => 49,
				'cod_municipio' => 24,
				'DC' => 5,
				'nombre' => 'Bóveda de Toro, La',
			),
			156 => 
			array (
				'id' => 1157,
				'id_provincia' => 50,
				'cod_municipio' => 24,
				'DC' => 8,
				'nombre' => 'Almonacid de la Sierra',
			),
			157 => 
			array (
				'id' => 1158,
				'id_provincia' => 2,
				'cod_municipio' => 25,
				'DC' => 4,
				'nombre' => 'Caudete',
			),
			158 => 
			array (
				'id' => 1159,
				'id_provincia' => 3,
				'cod_municipio' => 25,
				'DC' => 0,
				'nombre' => 'Benferri',
			),
			159 => 
			array (
				'id' => 1160,
				'id_provincia' => 5,
				'cod_municipio' => 25,
				'DC' => 8,
				'nombre' => 'Becedillas',
			),
			160 => 
			array (
				'id' => 1161,
				'id_provincia' => 6,
				'cod_municipio' => 25,
				'DC' => 1,
				'nombre' => 'Calamonte',
			),
			161 => 
			array (
				'id' => 1162,
				'id_provincia' => 7,
				'cod_municipio' => 25,
				'DC' => 7,
				'nombre' => 'Fornalutx',
			),
			162 => 
			array (
				'id' => 1163,
				'id_provincia' => 8,
				'cod_municipio' => 25,
				'DC' => 3,
				'nombre' => 'Bruc, El',
			),
			163 => 
			array (
				'id' => 1164,
				'id_provincia' => 9,
				'cod_municipio' => 25,
				'DC' => 6,
				'nombre' => 'Arija',
			),
			164 => 
			array (
				'id' => 1165,
				'id_provincia' => 10,
				'cod_municipio' => 25,
				'DC' => 0,
				'nombre' => 'Barrado',
			),
			165 => 
			array (
				'id' => 1166,
				'id_provincia' => 11,
				'cod_municipio' => 25,
				'DC' => 7,
				'nombre' => 'Paterna de Rivera',
			),
			166 => 
			array (
				'id' => 1167,
				'id_provincia' => 12,
				'cod_municipio' => 25,
				'DC' => 2,
				'nombre' => 'Benafigos',
			),
			167 => 
			array (
				'id' => 1168,
				'id_provincia' => 13,
				'cod_municipio' => 25,
				'DC' => 8,
				'nombre' => 'Cabezarados',
			),
			168 => 
			array (
				'id' => 1169,
				'id_provincia' => 14,
				'cod_municipio' => 25,
				'DC' => 3,
				'nombre' => 'Espejo',
			),
			169 => 
			array (
				'id' => 1170,
				'id_provincia' => 15,
				'cod_municipio' => 25,
				'DC' => 6,
				'nombre' => 'Cerdido',
			),
			170 => 
			array (
				'id' => 1171,
				'id_provincia' => 16,
				'cod_municipio' => 25,
				'DC' => 9,
				'nombre' => 'Arrancacepas',
			),
			171 => 
			array (
				'id' => 1172,
				'id_provincia' => 17,
				'cod_municipio' => 25,
				'DC' => 5,
				'nombre' => 'Bordils',
			),
			172 => 
			array (
				'id' => 1173,
				'id_provincia' => 18,
				'cod_municipio' => 25,
				'DC' => 1,
				'nombre' => 'Beas de Guadix',
			),
			173 => 
			array (
				'id' => 1174,
				'id_provincia' => 20,
				'cod_municipio' => 25,
				'DC' => 8,
				'nombre' => 'Zegama',
			),
			174 => 
			array (
				'id' => 1175,
				'id_provincia' => 21,
				'cod_municipio' => 25,
				'DC' => 5,
				'nombre' => 'Cortegana',
			),
			175 => 
			array (
				'id' => 1176,
				'id_provincia' => 22,
				'cod_municipio' => 25,
				'DC' => 0,
				'nombre' => 'Altorricón',
			),
			176 => 
			array (
				'id' => 1177,
				'id_provincia' => 23,
				'cod_municipio' => 25,
				'DC' => 6,
				'nombre' => 'Castellar',
			),
			177 => 
			array (
				'id' => 1178,
				'id_provincia' => 24,
				'cod_municipio' => 25,
				'DC' => 1,
				'nombre' => 'Burón',
			),
			178 => 
			array (
				'id' => 1179,
				'id_provincia' => 25,
				'cod_municipio' => 25,
				'DC' => 4,
				'nombre' => 'Naut Aran',
			),
			179 => 
			array (
				'id' => 1180,
				'id_provincia' => 26,
				'cod_municipio' => 25,
				'DC' => 7,
				'nombre' => 'Baños de Rioja',
			),
			180 => 
			array (
				'id' => 1181,
				'id_provincia' => 27,
				'cod_municipio' => 25,
				'DC' => 3,
				'nombre' => 'Xove',
			),
			181 => 
			array (
				'id' => 1182,
				'id_provincia' => 28,
				'cod_municipio' => 25,
				'DC' => 9,
				'nombre' => 'Brea de Tajo',
			),
			182 => 
			array (
				'id' => 1183,
				'id_provincia' => 29,
				'cod_municipio' => 25,
				'DC' => 2,
				'nombre' => 'Benalmádena',
			),
			183 => 
			array (
				'id' => 1184,
				'id_provincia' => 30,
				'cod_municipio' => 25,
				'DC' => 6,
				'nombre' => 'Lorquí',
			),
			184 => 
			array (
				'id' => 1185,
				'id_provincia' => 31,
				'cod_municipio' => 25,
				'DC' => 3,
				'nombre' => 'Arakil',
			),
			185 => 
			array (
				'id' => 1186,
				'id_provincia' => 32,
				'cod_municipio' => 25,
				'DC' => 8,
				'nombre' => 'Cenlle',
			),
			186 => 
			array (
				'id' => 1187,
				'id_provincia' => 33,
				'cod_municipio' => 25,
				'DC' => 4,
				'nombre' => 'Gozón',
			),
			187 => 
			array (
				'id' => 1188,
				'id_provincia' => 34,
				'cod_municipio' => 25,
				'DC' => 9,
				'nombre' => 'Bárcena de Campos',
			),
			188 => 
			array (
				'id' => 1189,
				'id_provincia' => 35,
				'cod_municipio' => 25,
				'DC' => 2,
				'nombre' => 'Tejeda',
			),
			189 => 
			array (
				'id' => 1190,
				'id_provincia' => 36,
				'cod_municipio' => 25,
				'DC' => 5,
				'nombre' => 'Lama, A',
			),
			190 => 
			array (
				'id' => 1191,
				'id_provincia' => 37,
				'cod_municipio' => 25,
				'DC' => 1,
				'nombre' => 'Aldehuela de la Bóveda',
			),
			191 => 
			array (
				'id' => 1192,
				'id_provincia' => 38,
				'cod_municipio' => 25,
				'DC' => 7,
				'nombre' => 'Matanza de Acentejo, La',
			),
			192 => 
			array (
				'id' => 1193,
				'id_provincia' => 39,
				'cod_municipio' => 25,
				'DC' => 0,
				'nombre' => 'Corrales de Buelna, Los',
			),
			193 => 
			array (
				'id' => 1194,
				'id_provincia' => 40,
				'cod_municipio' => 25,
				'DC' => 4,
				'nombre' => 'Barbolla',
			),
			194 => 
			array (
				'id' => 1195,
				'id_provincia' => 41,
				'cod_municipio' => 25,
				'DC' => 1,
				'nombre' => 'Carrión de los Céspedes',
			),
			195 => 
			array (
				'id' => 1196,
				'id_provincia' => 42,
				'cod_municipio' => 25,
				'DC' => 6,
				'nombre' => 'Arcos de Jalón',
			),
			196 => 
			array (
				'id' => 1197,
				'id_provincia' => 43,
				'cod_municipio' => 25,
				'DC' => 2,
				'nombre' => 'Benifallet',
			),
			197 => 
			array (
				'id' => 1198,
				'id_provincia' => 44,
				'cod_municipio' => 25,
				'DC' => 7,
				'nombre' => 'Andorra',
			),
			198 => 
			array (
				'id' => 1199,
				'id_provincia' => 45,
				'cod_municipio' => 25,
				'DC' => 0,
				'nombre' => 'Cabañas de la Sagra',
			),
			199 => 
			array (
				'id' => 1200,
				'id_provincia' => 46,
				'cod_municipio' => 25,
				'DC' => 3,
				'nombre' => 'Alfara del Patriarca',
			),
			200 => 
			array (
				'id' => 1201,
				'id_provincia' => 47,
				'cod_municipio' => 25,
				'DC' => 9,
				'nombre' => 'Brahojos de Medina',
			),
			201 => 
			array (
				'id' => 1202,
				'id_provincia' => 48,
				'cod_municipio' => 25,
				'DC' => 5,
				'nombre' => 'Zeberio',
			),
			202 => 
			array (
				'id' => 1203,
				'id_provincia' => 49,
				'cod_municipio' => 25,
				'DC' => 8,
				'nombre' => 'Bretó',
			),
			203 => 
			array (
				'id' => 1204,
				'id_provincia' => 50,
				'cod_municipio' => 25,
				'DC' => 1,
				'nombre' => 'Almunia de Doña Godina, La',
			),
			204 => 
			array (
				'id' => 1205,
				'id_provincia' => 2,
				'cod_municipio' => 26,
				'DC' => 7,
				'nombre' => 'Cenizate',
			),
			205 => 
			array (
				'id' => 1206,
				'id_provincia' => 3,
				'cod_municipio' => 26,
				'DC' => 3,
				'nombre' => 'Beniarbeig',
			),
			206 => 
			array (
				'id' => 1207,
				'id_provincia' => 4,
				'cod_municipio' => 26,
				'DC' => 8,
				'nombre' => 'Benitagla',
			),
			207 => 
			array (
				'id' => 1208,
				'id_provincia' => 5,
				'cod_municipio' => 26,
				'DC' => 1,
				'nombre' => 'Bercial de Zapardiel',
			),
			208 => 
			array (
				'id' => 1209,
				'id_provincia' => 6,
				'cod_municipio' => 26,
				'DC' => 4,
				'nombre' => 'Calera de León',
			),
			209 => 
			array (
				'id' => 1210,
				'id_provincia' => 7,
				'cod_municipio' => 26,
				'DC' => 0,
				'nombre' => 'Eivissa',
			),
			210 => 
			array (
				'id' => 1211,
				'id_provincia' => 8,
				'cod_municipio' => 26,
				'DC' => 6,
				'nombre' => 'Brull, El',
			),
			211 => 
			array (
				'id' => 1212,
				'id_provincia' => 9,
				'cod_municipio' => 26,
				'DC' => 9,
				'nombre' => 'Arlanzón',
			),
			212 => 
			array (
				'id' => 1213,
				'id_provincia' => 10,
				'cod_municipio' => 26,
				'DC' => 3,
				'nombre' => 'Belvís de Monroy',
			),
			213 => 
			array (
				'id' => 1214,
				'id_provincia' => 11,
				'cod_municipio' => 26,
				'DC' => 0,
				'nombre' => 'Prado del Rey',
			),
			214 => 
			array (
				'id' => 1215,
				'id_provincia' => 12,
				'cod_municipio' => 26,
				'DC' => 5,
				'nombre' => 'Benasal',
			),
			215 => 
			array (
				'id' => 1216,
				'id_provincia' => 13,
				'cod_municipio' => 26,
				'DC' => 1,
				'nombre' => 'Cabezarrubias del Puerto',
			),
			216 => 
			array (
				'id' => 1217,
				'id_provincia' => 14,
				'cod_municipio' => 26,
				'DC' => 6,
				'nombre' => 'Espiel',
			),
			217 => 
			array (
				'id' => 1218,
				'id_provincia' => 15,
				'cod_municipio' => 26,
				'DC' => 9,
				'nombre' => 'Cesuras',
			),
			218 => 
			array (
				'id' => 1219,
				'id_provincia' => 16,
				'cod_municipio' => 26,
				'DC' => 2,
				'nombre' => 'Atalaya del Cañavate',
			),
			219 => 
			array (
				'id' => 1220,
				'id_provincia' => 17,
				'cod_municipio' => 26,
				'DC' => 8,
				'nombre' => 'Borrassà',
			),
			220 => 
			array (
				'id' => 1221,
				'id_provincia' => 20,
				'cod_municipio' => 26,
				'DC' => 1,
				'nombre' => 'Zerain',
			),
			221 => 
			array (
				'id' => 1222,
				'id_provincia' => 21,
				'cod_municipio' => 26,
				'DC' => 8,
				'nombre' => 'Cortelazor',
			),
			222 => 
			array (
				'id' => 1223,
				'id_provincia' => 23,
				'cod_municipio' => 26,
				'DC' => 9,
				'nombre' => 'Castillo de Locubín',
			),
			223 => 
			array (
				'id' => 1224,
				'id_provincia' => 24,
				'cod_municipio' => 26,
				'DC' => 4,
				'nombre' => 'Bustillo del Páramo',
			),
			224 => 
			array (
				'id' => 1225,
				'id_provincia' => 26,
				'cod_municipio' => 26,
				'DC' => 0,
				'nombre' => 'Baños de Río Tobía',
			),
			225 => 
			array (
				'id' => 1226,
				'id_provincia' => 27,
				'cod_municipio' => 26,
				'DC' => 6,
				'nombre' => 'Láncara',
			),
			226 => 
			array (
				'id' => 1227,
				'id_provincia' => 28,
				'cod_municipio' => 26,
				'DC' => 2,
				'nombre' => 'Brunete',
			),
			227 => 
			array (
				'id' => 1228,
				'id_provincia' => 29,
				'cod_municipio' => 26,
				'DC' => 5,
				'nombre' => 'Benamargosa',
			),
			228 => 
			array (
				'id' => 1229,
				'id_provincia' => 30,
				'cod_municipio' => 26,
				'DC' => 9,
				'nombre' => 'Mazarrón',
			),
			229 => 
			array (
				'id' => 1230,
				'id_provincia' => 31,
				'cod_municipio' => 26,
				'DC' => 6,
				'nombre' => 'Aras',
			),
			230 => 
			array (
				'id' => 1231,
				'id_provincia' => 32,
				'cod_municipio' => 26,
				'DC' => 1,
				'nombre' => 'Coles',
			),
			231 => 
			array (
				'id' => 1232,
				'id_provincia' => 33,
				'cod_municipio' => 26,
				'DC' => 7,
				'nombre' => 'Grado',
			),
			232 => 
			array (
				'id' => 1233,
				'id_provincia' => 35,
				'cod_municipio' => 26,
				'DC' => 5,
				'nombre' => 'Telde',
			),
			233 => 
			array (
				'id' => 1234,
				'id_provincia' => 36,
				'cod_municipio' => 26,
				'DC' => 8,
				'nombre' => 'Marín',
			),
			234 => 
			array (
				'id' => 1235,
				'id_provincia' => 37,
				'cod_municipio' => 26,
				'DC' => 4,
				'nombre' => 'Aldehuela de Yeltes',
			),
			235 => 
			array (
				'id' => 1236,
				'id_provincia' => 38,
				'cod_municipio' => 26,
				'DC' => 0,
				'nombre' => 'Orotava, La',
			),
			236 => 
			array (
				'id' => 1237,
				'id_provincia' => 39,
				'cod_municipio' => 26,
				'DC' => 3,
				'nombre' => 'Corvera de Toranzo',
			),
			237 => 
			array (
				'id' => 1238,
				'id_provincia' => 40,
				'cod_municipio' => 26,
				'DC' => 7,
				'nombre' => 'Basardilla',
			),
			238 => 
			array (
				'id' => 1239,
				'id_provincia' => 41,
				'cod_municipio' => 26,
				'DC' => 4,
				'nombre' => 'Casariche',
			),
			239 => 
			array (
				'id' => 1240,
				'id_provincia' => 42,
				'cod_municipio' => 26,
				'DC' => 9,
				'nombre' => 'Arenillas',
			),
			240 => 
			array (
				'id' => 1241,
				'id_provincia' => 43,
				'cod_municipio' => 26,
				'DC' => 5,
				'nombre' => 'Benissanet',
			),
			241 => 
			array (
				'id' => 1242,
				'id_provincia' => 44,
				'cod_municipio' => 26,
				'DC' => 0,
				'nombre' => 'Arcos de las Salinas',
			),
			242 => 
			array (
				'id' => 1243,
				'id_provincia' => 45,
				'cod_municipio' => 26,
				'DC' => 3,
				'nombre' => 'Cabañas de Yepes',
			),
			243 => 
			array (
				'id' => 1244,
				'id_provincia' => 46,
				'cod_municipio' => 26,
				'DC' => 6,
				'nombre' => 'Alfarp',
			),
			244 => 
			array (
				'id' => 1245,
				'id_provincia' => 47,
				'cod_municipio' => 26,
				'DC' => 2,
				'nombre' => 'Bustillo de Chaves',
			),
			245 => 
			array (
				'id' => 1246,
				'id_provincia' => 48,
				'cod_municipio' => 26,
				'DC' => 8,
				'nombre' => 'Dima',
			),
			246 => 
			array (
				'id' => 1247,
				'id_provincia' => 49,
				'cod_municipio' => 26,
				'DC' => 1,
				'nombre' => 'Bretocino',
			),
			247 => 
			array (
				'id' => 1248,
				'id_provincia' => 50,
				'cod_municipio' => 26,
				'DC' => 4,
				'nombre' => 'Alpartir',
			),
			248 => 
			array (
				'id' => 1249,
				'id_provincia' => 1,
				'cod_municipio' => 27,
				'DC' => 8,
				'nombre' => 'Iruraiz-Gauna',
			),
			249 => 
			array (
				'id' => 1250,
				'id_provincia' => 2,
				'cod_municipio' => 27,
				'DC' => 3,
				'nombre' => 'Corral-Rubio',
			),
			250 => 
			array (
				'id' => 1251,
				'id_provincia' => 3,
				'cod_municipio' => 27,
				'DC' => 9,
				'nombre' => 'Beniardá',
			),
			251 => 
			array (
				'id' => 1252,
				'id_provincia' => 4,
				'cod_municipio' => 27,
				'DC' => 4,
				'nombre' => 'Benizalón',
			),
			252 => 
			array (
				'id' => 1253,
				'id_provincia' => 5,
				'cod_municipio' => 27,
				'DC' => 7,
				'nombre' => 'Berlanas, Las',
			),
			253 => 
			array (
				'id' => 1254,
				'id_provincia' => 6,
				'cod_municipio' => 27,
				'DC' => 0,
				'nombre' => 'Calzadilla de los Barros',
			),
			254 => 
			array (
				'id' => 1255,
				'id_provincia' => 7,
				'cod_municipio' => 27,
				'DC' => 6,
				'nombre' => 'Inca',
			),
			255 => 
			array (
				'id' => 1256,
				'id_provincia' => 8,
				'cod_municipio' => 27,
				'DC' => 2,
				'nombre' => 'Cabanyes, Les',
			),
			256 => 
			array (
				'id' => 1257,
				'id_provincia' => 9,
				'cod_municipio' => 27,
				'DC' => 5,
				'nombre' => 'Arraya de Oca',
			),
			257 => 
			array (
				'id' => 1258,
				'id_provincia' => 10,
				'cod_municipio' => 27,
				'DC' => 9,
				'nombre' => 'Benquerencia',
			),
			258 => 
			array (
				'id' => 1259,
				'id_provincia' => 11,
				'cod_municipio' => 27,
				'DC' => 6,
				'nombre' => 'Puerto de Santa María, El',
			),
			259 => 
			array (
				'id' => 1260,
				'id_provincia' => 12,
				'cod_municipio' => 27,
				'DC' => 1,
				'nombre' => 'Benicarló',
			),
			260 => 
			array (
				'id' => 1261,
				'id_provincia' => 13,
				'cod_municipio' => 27,
				'DC' => 7,
				'nombre' => 'Calzada de Calatrava',
			),
			261 => 
			array (
				'id' => 1262,
				'id_provincia' => 14,
				'cod_municipio' => 27,
				'DC' => 2,
				'nombre' => 'Fernán-Núñez',
			),
			262 => 
			array (
				'id' => 1263,
				'id_provincia' => 15,
				'cod_municipio' => 27,
				'DC' => 5,
				'nombre' => 'Coirós',
			),
			263 => 
			array (
				'id' => 1264,
				'id_provincia' => 16,
				'cod_municipio' => 27,
				'DC' => 8,
				'nombre' => 'Barajas de Melo',
			),
			264 => 
			array (
				'id' => 1265,
				'id_provincia' => 17,
				'cod_municipio' => 27,
				'DC' => 4,
				'nombre' => 'Breda',
			),
			265 => 
			array (
				'id' => 1266,
				'id_provincia' => 18,
				'cod_municipio' => 27,
				'DC' => 0,
				'nombre' => 'Benalúa',
			),
			266 => 
			array (
				'id' => 1267,
				'id_provincia' => 19,
				'cod_municipio' => 27,
				'DC' => 3,
				'nombre' => 'Alustante',
			),
			267 => 
			array (
				'id' => 1268,
				'id_provincia' => 20,
				'cod_municipio' => 27,
				'DC' => 7,
				'nombre' => 'Zestoa',
			),
			268 => 
			array (
				'id' => 1269,
				'id_provincia' => 21,
				'cod_municipio' => 27,
				'DC' => 4,
				'nombre' => 'Cumbres de Enmedio',
			),
			269 => 
			array (
				'id' => 1270,
				'id_provincia' => 22,
				'cod_municipio' => 27,
				'DC' => 9,
				'nombre' => 'Angüés',
			),
			270 => 
			array (
				'id' => 1271,
				'id_provincia' => 23,
				'cod_municipio' => 27,
				'DC' => 5,
				'nombre' => 'Cazalilla',
			),
			271 => 
			array (
				'id' => 1272,
				'id_provincia' => 24,
				'cod_municipio' => 27,
				'DC' => 0,
				'nombre' => 'Cabañas Raras',
			),
			272 => 
			array (
				'id' => 1273,
				'id_provincia' => 25,
				'cod_municipio' => 27,
				'DC' => 3,
				'nombre' => 'Anglesola',
			),
			273 => 
			array (
				'id' => 1274,
				'id_provincia' => 26,
				'cod_municipio' => 27,
				'DC' => 6,
				'nombre' => 'Berceo',
			),
			274 => 
			array (
				'id' => 1275,
				'id_provincia' => 27,
				'cod_municipio' => 27,
				'DC' => 2,
				'nombre' => 'Lourenzá',
			),
			275 => 
			array (
				'id' => 1276,
				'id_provincia' => 28,
				'cod_municipio' => 27,
				'DC' => 8,
				'nombre' => 'Buitrago del Lozoya',
			),
			276 => 
			array (
				'id' => 1277,
				'id_provincia' => 29,
				'cod_municipio' => 27,
				'DC' => 1,
				'nombre' => 'Benamocarra',
			),
			277 => 
			array (
				'id' => 1278,
				'id_provincia' => 30,
				'cod_municipio' => 27,
				'DC' => 5,
				'nombre' => 'Molina de Segura',
			),
			278 => 
			array (
				'id' => 1279,
				'id_provincia' => 31,
				'cod_municipio' => 27,
				'DC' => 2,
				'nombre' => 'Arbizu',
			),
			279 => 
			array (
				'id' => 1280,
				'id_provincia' => 32,
				'cod_municipio' => 27,
				'DC' => 7,
				'nombre' => 'Cortegada',
			),
			280 => 
			array (
				'id' => 1281,
				'id_provincia' => 33,
				'cod_municipio' => 27,
				'DC' => 3,
				'nombre' => 'Grandas de Salime',
			),
			281 => 
			array (
				'id' => 1282,
				'id_provincia' => 34,
				'cod_municipio' => 27,
				'DC' => 8,
				'nombre' => 'Barruelo de Santullán',
			),
			282 => 
			array (
				'id' => 1283,
				'id_provincia' => 35,
				'cod_municipio' => 27,
				'DC' => 1,
				'nombre' => 'Teror',
			),
			283 => 
			array (
				'id' => 1284,
				'id_provincia' => 36,
				'cod_municipio' => 27,
				'DC' => 4,
				'nombre' => 'Meaño',
			),
			284 => 
			array (
				'id' => 1285,
				'id_provincia' => 37,
				'cod_municipio' => 27,
				'DC' => 0,
				'nombre' => 'Almenara de Tormes',
			),
			285 => 
			array (
				'id' => 1286,
				'id_provincia' => 38,
				'cod_municipio' => 27,
				'DC' => 6,
				'nombre' => 'Paso, El',
			),
			286 => 
			array (
				'id' => 1287,
				'id_provincia' => 39,
				'cod_municipio' => 27,
				'DC' => 9,
				'nombre' => 'Campoo de Enmedio',
			),
			287 => 
			array (
				'id' => 1288,
				'id_provincia' => 41,
				'cod_municipio' => 27,
				'DC' => 0,
				'nombre' => 'Castilblanco de los Arroyos',
			),
			288 => 
			array (
				'id' => 1289,
				'id_provincia' => 42,
				'cod_municipio' => 27,
				'DC' => 5,
				'nombre' => 'Arévalo de la Sierra',
			),
			289 => 
			array (
				'id' => 1290,
				'id_provincia' => 43,
				'cod_municipio' => 27,
				'DC' => 1,
				'nombre' => 'Bisbal de Falset, La',
			),
			290 => 
			array (
				'id' => 1291,
				'id_provincia' => 44,
				'cod_municipio' => 27,
				'DC' => 6,
				'nombre' => 'Arens de Lledó',
			),
			291 => 
			array (
				'id' => 1292,
				'id_provincia' => 45,
				'cod_municipio' => 27,
				'DC' => 9,
				'nombre' => 'Cabezamesada',
			),
			292 => 
			array (
				'id' => 1293,
				'id_provincia' => 46,
				'cod_municipio' => 27,
				'DC' => 2,
				'nombre' => 'Alfarrasí',
			),
			293 => 
			array (
				'id' => 1294,
				'id_provincia' => 47,
				'cod_municipio' => 27,
				'DC' => 8,
				'nombre' => 'Cabezón de Pisuerga',
			),
			294 => 
			array (
				'id' => 1295,
				'id_provincia' => 48,
				'cod_municipio' => 27,
				'DC' => 4,
				'nombre' => 'Durango',
			),
			295 => 
			array (
				'id' => 1296,
				'id_provincia' => 49,
				'cod_municipio' => 27,
				'DC' => 7,
				'nombre' => 'Brime de Sog',
			),
			296 => 
			array (
				'id' => 1297,
				'id_provincia' => 50,
				'cod_municipio' => 27,
				'DC' => 0,
				'nombre' => 'Ambel',
			),
			297 => 
			array (
				'id' => 1298,
				'id_provincia' => 1,
				'cod_municipio' => 28,
				'DC' => 4,
				'nombre' => 'Labastida/Bastida',
			),
			298 => 
			array (
				'id' => 1299,
				'id_provincia' => 2,
				'cod_municipio' => 28,
				'DC' => 9,
				'nombre' => 'Cotillas',
			),
			299 => 
			array (
				'id' => 1300,
				'id_provincia' => 3,
				'cod_municipio' => 28,
				'DC' => 5,
				'nombre' => 'Beniarrés',
			),
			300 => 
			array (
				'id' => 1301,
				'id_provincia' => 4,
				'cod_municipio' => 28,
				'DC' => 0,
				'nombre' => 'Bentarique',
			),
			301 => 
			array (
				'id' => 1302,
				'id_provincia' => 6,
				'cod_municipio' => 28,
				'DC' => 6,
				'nombre' => 'Campanario',
			),
			302 => 
			array (
				'id' => 1303,
				'id_provincia' => 7,
				'cod_municipio' => 28,
				'DC' => 2,
				'nombre' => 'Lloret de Vistalegre',
			),
			303 => 
			array (
				'id' => 1304,
				'id_provincia' => 8,
				'cod_municipio' => 28,
				'DC' => 8,
				'nombre' => 'Cabrera d\'Anoia',
			),
			304 => 
			array (
				'id' => 1305,
				'id_provincia' => 10,
				'cod_municipio' => 28,
				'DC' => 5,
				'nombre' => 'Berrocalejo',
			),
			305 => 
			array (
				'id' => 1306,
				'id_provincia' => 11,
				'cod_municipio' => 28,
				'DC' => 2,
				'nombre' => 'Puerto Real',
			),
			306 => 
			array (
				'id' => 1307,
				'id_provincia' => 12,
				'cod_municipio' => 28,
				'DC' => 7,
				'nombre' => 'Benicasim/Benicàssim',
			),
			307 => 
			array (
				'id' => 1308,
				'id_provincia' => 13,
				'cod_municipio' => 28,
				'DC' => 3,
				'nombre' => 'Campo de Criptana',
			),
			308 => 
			array (
				'id' => 1309,
				'id_provincia' => 14,
				'cod_municipio' => 28,
				'DC' => 8,
				'nombre' => 'Fuente la Lancha',
			),
			309 => 
			array (
				'id' => 1310,
				'id_provincia' => 15,
				'cod_municipio' => 28,
				'DC' => 1,
				'nombre' => 'Corcubión',
			),
			310 => 
			array (
				'id' => 1311,
				'id_provincia' => 17,
				'cod_municipio' => 28,
				'DC' => 0,
				'nombre' => 'Brunyola',
			),
			311 => 
			array (
				'id' => 1312,
				'id_provincia' => 18,
				'cod_municipio' => 28,
				'DC' => 6,
				'nombre' => 'Benalúa de las Villas',
			),
			312 => 
			array (
				'id' => 1313,
				'id_provincia' => 20,
				'cod_municipio' => 28,
				'DC' => 3,
				'nombre' => 'Zizurkil',
			),
			313 => 
			array (
				'id' => 1314,
				'id_provincia' => 21,
				'cod_municipio' => 28,
				'DC' => 0,
				'nombre' => 'Cumbres de San Bartolomé',
			),
			314 => 
			array (
				'id' => 1315,
				'id_provincia' => 22,
				'cod_municipio' => 28,
				'DC' => 5,
				'nombre' => 'Ansó',
			),
			315 => 
			array (
				'id' => 1316,
				'id_provincia' => 23,
				'cod_municipio' => 28,
				'DC' => 1,
				'nombre' => 'Cazorla',
			),
			316 => 
			array (
				'id' => 1317,
				'id_provincia' => 24,
				'cod_municipio' => 28,
				'DC' => 6,
				'nombre' => 'Cabreros del Río',
			),
			317 => 
			array (
				'id' => 1318,
				'id_provincia' => 26,
				'cod_municipio' => 28,
				'DC' => 2,
				'nombre' => 'Bergasa',
			),
			318 => 
			array (
				'id' => 1319,
				'id_provincia' => 27,
				'cod_municipio' => 28,
				'DC' => 8,
				'nombre' => 'Lugo',
			),
			319 => 
			array (
				'id' => 1320,
				'id_provincia' => 28,
				'cod_municipio' => 28,
				'DC' => 4,
				'nombre' => 'Bustarviejo',
			),
			320 => 
			array (
				'id' => 1321,
				'id_provincia' => 29,
				'cod_municipio' => 28,
				'DC' => 7,
				'nombre' => 'Benaoján',
			),
			321 => 
			array (
				'id' => 1322,
				'id_provincia' => 30,
				'cod_municipio' => 28,
				'DC' => 1,
				'nombre' => 'Moratalla',
			),
			322 => 
			array (
				'id' => 1323,
				'id_provincia' => 31,
				'cod_municipio' => 28,
				'DC' => 8,
				'nombre' => 'Arce/Artzi',
			),
			323 => 
			array (
				'id' => 1324,
				'id_provincia' => 32,
				'cod_municipio' => 28,
				'DC' => 3,
				'nombre' => 'Cualedro',
			),
			324 => 
			array (
				'id' => 1325,
				'id_provincia' => 33,
				'cod_municipio' => 28,
				'DC' => 9,
				'nombre' => 'Ibias',
			),
			325 => 
			array (
				'id' => 1326,
				'id_provincia' => 34,
				'cod_municipio' => 28,
				'DC' => 4,
				'nombre' => 'Báscones de Ojeda',
			),
			326 => 
			array (
				'id' => 1327,
				'id_provincia' => 35,
				'cod_municipio' => 28,
				'DC' => 7,
				'nombre' => 'Tías',
			),
			327 => 
			array (
				'id' => 1328,
				'id_provincia' => 36,
				'cod_municipio' => 28,
				'DC' => 0,
				'nombre' => 'Meis',
			),
			328 => 
			array (
				'id' => 1329,
				'id_provincia' => 37,
				'cod_municipio' => 28,
				'DC' => 6,
				'nombre' => 'Almendra',
			),
			329 => 
			array (
				'id' => 1330,
				'id_provincia' => 38,
				'cod_municipio' => 28,
				'DC' => 2,
				'nombre' => 'Puerto de la Cruz',
			),
			330 => 
			array (
				'id' => 1331,
				'id_provincia' => 39,
				'cod_municipio' => 28,
				'DC' => 5,
				'nombre' => 'Entrambasaguas',
			),
			331 => 
			array (
				'id' => 1332,
				'id_provincia' => 40,
				'cod_municipio' => 28,
				'DC' => 9,
				'nombre' => 'Bercial',
			),
			332 => 
			array (
				'id' => 1333,
				'id_provincia' => 41,
				'cod_municipio' => 28,
				'DC' => 6,
				'nombre' => 'Castilleja de Guzmán',
			),
			333 => 
			array (
				'id' => 1334,
				'id_provincia' => 42,
				'cod_municipio' => 28,
				'DC' => 1,
				'nombre' => 'Ausejo de la Sierra',
			),
			334 => 
			array (
				'id' => 1335,
				'id_provincia' => 43,
				'cod_municipio' => 28,
				'DC' => 7,
				'nombre' => 'Bisbal del Penedès, La',
			),
			335 => 
			array (
				'id' => 1336,
				'id_provincia' => 44,
				'cod_municipio' => 28,
				'DC' => 2,
				'nombre' => 'Argente',
			),
			336 => 
			array (
				'id' => 1337,
				'id_provincia' => 45,
				'cod_municipio' => 28,
				'DC' => 5,
				'nombre' => 'Calera y Chozas',
			),
			337 => 
			array (
				'id' => 1338,
				'id_provincia' => 46,
				'cod_municipio' => 28,
				'DC' => 8,
				'nombre' => 'Algar de Palancia',
			),
			338 => 
			array (
				'id' => 1339,
				'id_provincia' => 47,
				'cod_municipio' => 28,
				'DC' => 4,
				'nombre' => 'Cabezón de Valderaduey',
			),
			339 => 
			array (
				'id' => 1340,
				'id_provincia' => 48,
				'cod_municipio' => 28,
				'DC' => 0,
				'nombre' => 'Ea',
			),
			340 => 
			array (
				'id' => 1341,
				'id_provincia' => 49,
				'cod_municipio' => 28,
				'DC' => 3,
				'nombre' => 'Brime de Urz',
			),
			341 => 
			array (
				'id' => 1342,
				'id_provincia' => 50,
				'cod_municipio' => 28,
				'DC' => 6,
				'nombre' => 'Anento',
			),
			342 => 
			array (
				'id' => 1343,
				'id_provincia' => 2,
				'cod_municipio' => 29,
				'DC' => 2,
				'nombre' => 'Chinchilla de Monte-Aragón',
			),
			343 => 
			array (
				'id' => 1344,
				'id_provincia' => 3,
				'cod_municipio' => 29,
				'DC' => 8,
				'nombre' => 'Benigembla',
			),
			344 => 
			array (
				'id' => 1345,
				'id_provincia' => 4,
				'cod_municipio' => 29,
				'DC' => 3,
				'nombre' => 'Berja',
			),
			345 => 
			array (
				'id' => 1346,
				'id_provincia' => 5,
				'cod_municipio' => 29,
				'DC' => 6,
				'nombre' => 'Bernuy-Zapardiel',
			),
			346 => 
			array (
				'id' => 1347,
				'id_provincia' => 6,
				'cod_municipio' => 29,
				'DC' => 9,
				'nombre' => 'Campillo de Llerena',
			),
			347 => 
			array (
				'id' => 1348,
				'id_provincia' => 7,
				'cod_municipio' => 29,
				'DC' => 5,
				'nombre' => 'Lloseta',
			),
			348 => 
			array (
				'id' => 1349,
				'id_provincia' => 8,
				'cod_municipio' => 29,
				'DC' => 1,
				'nombre' => 'Cabrera de Mar',
			),
			349 => 
			array (
				'id' => 1350,
				'id_provincia' => 9,
				'cod_municipio' => 29,
				'DC' => 4,
				'nombre' => 'Atapuerca',
			),
			350 => 
			array (
				'id' => 1351,
				'id_provincia' => 10,
				'cod_municipio' => 29,
				'DC' => 8,
				'nombre' => 'Berzocana',
			),
			351 => 
			array (
				'id' => 1352,
				'id_provincia' => 11,
				'cod_municipio' => 29,
				'DC' => 5,
				'nombre' => 'Puerto Serrano',
			),
			352 => 
			array (
				'id' => 1353,
				'id_provincia' => 12,
				'cod_municipio' => 29,
				'DC' => 0,
				'nombre' => 'Benlloch',
			),
			353 => 
			array (
				'id' => 1354,
				'id_provincia' => 13,
				'cod_municipio' => 29,
				'DC' => 6,
				'nombre' => 'Cañada de Calatrava',
			),
			354 => 
			array (
				'id' => 1355,
				'id_provincia' => 14,
				'cod_municipio' => 29,
				'DC' => 1,
				'nombre' => 'Fuente Obejuna',
			),
			355 => 
			array (
				'id' => 1356,
				'id_provincia' => 15,
				'cod_municipio' => 29,
				'DC' => 4,
				'nombre' => 'Coristanco',
			),
			356 => 
			array (
				'id' => 1357,
				'id_provincia' => 16,
				'cod_municipio' => 29,
				'DC' => 7,
				'nombre' => 'Barchín del Hoyo',
			),
			357 => 
			array (
				'id' => 1358,
				'id_provincia' => 17,
				'cod_municipio' => 29,
				'DC' => 3,
				'nombre' => 'Boadella i les Escaules',
			),
			358 => 
			array (
				'id' => 1359,
				'id_provincia' => 18,
				'cod_municipio' => 29,
				'DC' => 9,
				'nombre' => 'Benamaurel',
			),
			359 => 
			array (
				'id' => 1360,
				'id_provincia' => 20,
				'cod_municipio' => 29,
				'DC' => 6,
				'nombre' => 'Deba',
			),
			360 => 
			array (
				'id' => 1361,
				'id_provincia' => 21,
				'cod_municipio' => 29,
				'DC' => 3,
				'nombre' => 'Cumbres Mayores',
			),
			361 => 
			array (
				'id' => 1362,
				'id_provincia' => 22,
				'cod_municipio' => 29,
				'DC' => 8,
				'nombre' => 'Antillón',
			),
			362 => 
			array (
				'id' => 1363,
				'id_provincia' => 23,
				'cod_municipio' => 29,
				'DC' => 4,
				'nombre' => 'Chiclana de Segura',
			),
			363 => 
			array (
				'id' => 1364,
				'id_provincia' => 24,
				'cod_municipio' => 29,
				'DC' => 9,
				'nombre' => 'Cabrillanes',
			),
			364 => 
			array (
				'id' => 1365,
				'id_provincia' => 25,
				'cod_municipio' => 29,
				'DC' => 2,
				'nombre' => 'Arbeca',
			),
			365 => 
			array (
				'id' => 1366,
				'id_provincia' => 26,
				'cod_municipio' => 29,
				'DC' => 5,
				'nombre' => 'Bergasillas Bajera',
			),
			366 => 
			array (
				'id' => 1367,
				'id_provincia' => 27,
				'cod_municipio' => 29,
				'DC' => 1,
				'nombre' => 'Meira',
			),
			367 => 
			array (
				'id' => 1368,
				'id_provincia' => 28,
				'cod_municipio' => 29,
				'DC' => 7,
				'nombre' => 'Cabanillas de la Sierra',
			),
			368 => 
			array (
				'id' => 1369,
				'id_provincia' => 29,
				'cod_municipio' => 29,
				'DC' => 0,
				'nombre' => 'Benarrabá',
			),
			369 => 
			array (
				'id' => 1370,
				'id_provincia' => 30,
				'cod_municipio' => 29,
				'DC' => 4,
				'nombre' => 'Mula',
			),
			370 => 
			array (
				'id' => 1371,
				'id_provincia' => 31,
				'cod_municipio' => 29,
				'DC' => 1,
				'nombre' => 'Arcos, Los',
			),
			371 => 
			array (
				'id' => 1372,
				'id_provincia' => 32,
				'cod_municipio' => 29,
				'DC' => 6,
				'nombre' => 'Chandrexa de Queixa',
			),
			372 => 
			array (
				'id' => 1373,
				'id_provincia' => 33,
				'cod_municipio' => 29,
				'DC' => 2,
				'nombre' => 'Illano',
			),
			373 => 
			array (
				'id' => 1374,
				'id_provincia' => 34,
				'cod_municipio' => 29,
				'DC' => 7,
				'nombre' => 'Becerril de Campos',
			),
			374 => 
			array (
				'id' => 1375,
				'id_provincia' => 35,
				'cod_municipio' => 29,
				'DC' => 0,
				'nombre' => 'Tinajo',
			),
			375 => 
			array (
				'id' => 1376,
				'id_provincia' => 36,
				'cod_municipio' => 29,
				'DC' => 3,
				'nombre' => 'Moaña',
			),
			376 => 
			array (
				'id' => 1377,
				'id_provincia' => 37,
				'cod_municipio' => 29,
				'DC' => 9,
				'nombre' => 'Anaya de Alba',
			),
			377 => 
			array (
				'id' => 1378,
				'id_provincia' => 38,
				'cod_municipio' => 29,
				'DC' => 5,
				'nombre' => 'Puntagorda',
			),
			378 => 
			array (
				'id' => 1379,
				'id_provincia' => 39,
				'cod_municipio' => 29,
				'DC' => 8,
				'nombre' => 'Escalante',
			),
			379 => 
			array (
				'id' => 1380,
				'id_provincia' => 40,
				'cod_municipio' => 29,
				'DC' => 2,
				'nombre' => 'Bercimuel',
			),
			380 => 
			array (
				'id' => 1381,
				'id_provincia' => 41,
				'cod_municipio' => 29,
				'DC' => 9,
				'nombre' => 'Castilleja de la Cuesta',
			),
			381 => 
			array (
				'id' => 1382,
				'id_provincia' => 42,
				'cod_municipio' => 29,
				'DC' => 4,
				'nombre' => 'Baraona',
			),
			382 => 
			array (
				'id' => 1383,
				'id_provincia' => 43,
				'cod_municipio' => 29,
				'DC' => 0,
				'nombre' => 'Blancafort',
			),
			383 => 
			array (
				'id' => 1384,
				'id_provincia' => 44,
				'cod_municipio' => 29,
				'DC' => 5,
				'nombre' => 'Ariño',
			),
			384 => 
			array (
				'id' => 1385,
				'id_provincia' => 45,
				'cod_municipio' => 29,
				'DC' => 8,
				'nombre' => 'Caleruela',
			),
			385 => 
			array (
				'id' => 1386,
				'id_provincia' => 46,
				'cod_municipio' => 29,
				'DC' => 1,
				'nombre' => 'Algemesí',
			),
			386 => 
			array (
				'id' => 1387,
				'id_provincia' => 47,
				'cod_municipio' => 29,
				'DC' => 7,
				'nombre' => 'Cabreros del Monte',
			),
			387 => 
			array (
				'id' => 1388,
				'id_provincia' => 48,
				'cod_municipio' => 29,
				'DC' => 3,
				'nombre' => 'Etxebarri',
			),
			388 => 
			array (
				'id' => 1389,
				'id_provincia' => 49,
				'cod_municipio' => 29,
				'DC' => 6,
				'nombre' => 'Burganes de Valverde',
			),
			389 => 
			array (
				'id' => 1390,
				'id_provincia' => 50,
				'cod_municipio' => 29,
				'DC' => 9,
				'nombre' => 'Aniñón',
			),
			390 => 
			array (
				'id' => 1391,
				'id_provincia' => 1,
				'cod_municipio' => 30,
				'DC' => 1,
				'nombre' => 'Lagrán',
			),
			391 => 
			array (
				'id' => 1392,
				'id_provincia' => 2,
				'cod_municipio' => 30,
				'DC' => 6,
				'nombre' => 'Elche de la Sierra',
			),
			392 => 
			array (
				'id' => 1393,
				'id_provincia' => 3,
				'cod_municipio' => 30,
				'DC' => 2,
				'nombre' => 'Benidoleig',
			),
			393 => 
			array (
				'id' => 1394,
				'id_provincia' => 4,
				'cod_municipio' => 30,
				'DC' => 7,
				'nombre' => 'Canjáyar',
			),
			394 => 
			array (
				'id' => 1395,
				'id_provincia' => 5,
				'cod_municipio' => 30,
				'DC' => 0,
				'nombre' => 'Berrocalejo de Aragona',
			),
			395 => 
			array (
				'id' => 1396,
				'id_provincia' => 6,
				'cod_municipio' => 30,
				'DC' => 3,
				'nombre' => 'Capilla',
			),
			396 => 
			array (
				'id' => 1397,
				'id_provincia' => 7,
				'cod_municipio' => 30,
				'DC' => 9,
				'nombre' => 'Llubí',
			),
			397 => 
			array (
				'id' => 1398,
				'id_provincia' => 8,
				'cod_municipio' => 30,
				'DC' => 5,
				'nombre' => 'Cabrils',
			),
			398 => 
			array (
				'id' => 1399,
				'id_provincia' => 9,
				'cod_municipio' => 30,
				'DC' => 8,
				'nombre' => 'Ausines, Los',
			),
			399 => 
			array (
				'id' => 1400,
				'id_provincia' => 10,
				'cod_municipio' => 30,
				'DC' => 2,
				'nombre' => 'Bohonal de Ibor',
			),
			400 => 
			array (
				'id' => 1401,
				'id_provincia' => 11,
				'cod_municipio' => 30,
				'DC' => 9,
				'nombre' => 'Rota',
			),
			401 => 
			array (
				'id' => 1402,
				'id_provincia' => 13,
				'cod_municipio' => 30,
				'DC' => 0,
				'nombre' => 'Caracuel de Calatrava',
			),
			402 => 
			array (
				'id' => 1403,
				'id_provincia' => 14,
				'cod_municipio' => 30,
				'DC' => 5,
				'nombre' => 'Fuente Palmera',
			),
			403 => 
			array (
				'id' => 1404,
				'id_provincia' => 15,
				'cod_municipio' => 30,
				'DC' => 8,
				'nombre' => 'Coruña, A',
			),
			404 => 
			array (
				'id' => 1405,
				'id_provincia' => 16,
				'cod_municipio' => 30,
				'DC' => 1,
				'nombre' => 'Bascuñana de San Pedro',
			),
			405 => 
			array (
				'id' => 1406,
				'id_provincia' => 17,
				'cod_municipio' => 30,
				'DC' => 7,
				'nombre' => 'Cabanes',
			),
			406 => 
			array (
				'id' => 1407,
				'id_provincia' => 18,
				'cod_municipio' => 30,
				'DC' => 3,
				'nombre' => 'Bérchules',
			),
			407 => 
			array (
				'id' => 1408,
				'id_provincia' => 20,
				'cod_municipio' => 30,
				'DC' => 0,
				'nombre' => 'Eibar',
			),
			408 => 
			array (
				'id' => 1409,
				'id_provincia' => 21,
				'cod_municipio' => 30,
				'DC' => 7,
				'nombre' => 'Chucena',
			),
			409 => 
			array (
				'id' => 1410,
				'id_provincia' => 23,
				'cod_municipio' => 30,
				'DC' => 8,
				'nombre' => 'Chilluévar',
			),
			410 => 
			array (
				'id' => 1411,
				'id_provincia' => 24,
				'cod_municipio' => 30,
				'DC' => 3,
				'nombre' => 'Cacabelos',
			),
			411 => 
			array (
				'id' => 1412,
				'id_provincia' => 25,
				'cod_municipio' => 30,
				'DC' => 6,
				'nombre' => 'Pont de Bar, El',
			),
			412 => 
			array (
				'id' => 1413,
				'id_provincia' => 26,
				'cod_municipio' => 30,
				'DC' => 9,
				'nombre' => 'Bezares',
			),
			413 => 
			array (
				'id' => 1414,
				'id_provincia' => 27,
				'cod_municipio' => 30,
				'DC' => 5,
				'nombre' => 'Mondoñedo',
			),
			414 => 
			array (
				'id' => 1415,
				'id_provincia' => 28,
				'cod_municipio' => 30,
				'DC' => 1,
				'nombre' => 'Cabrera, La',
			),
			415 => 
			array (
				'id' => 1416,
				'id_provincia' => 29,
				'cod_municipio' => 30,
				'DC' => 4,
				'nombre' => 'Borge, El',
			),
			416 => 
			array (
				'id' => 1417,
				'id_provincia' => 30,
				'cod_municipio' => 30,
				'DC' => 8,
				'nombre' => 'Murcia',
			),
			417 => 
			array (
				'id' => 1418,
				'id_provincia' => 31,
				'cod_municipio' => 30,
				'DC' => 5,
				'nombre' => 'Arellano',
			),
			418 => 
			array (
				'id' => 1419,
				'id_provincia' => 32,
				'cod_municipio' => 30,
				'DC' => 0,
				'nombre' => 'Entrimo',
			),
			419 => 
			array (
				'id' => 1420,
				'id_provincia' => 33,
				'cod_municipio' => 30,
				'DC' => 6,
				'nombre' => 'Illas',
			),
			420 => 
			array (
				'id' => 1421,
				'id_provincia' => 35,
				'cod_municipio' => 30,
				'DC' => 4,
				'nombre' => 'Tuineje',
			),
			421 => 
			array (
				'id' => 1422,
				'id_provincia' => 36,
				'cod_municipio' => 30,
				'DC' => 7,
				'nombre' => 'Mondariz',
			),
			422 => 
			array (
				'id' => 1423,
				'id_provincia' => 37,
				'cod_municipio' => 30,
				'DC' => 3,
				'nombre' => 'Añover de Tormes',
			),
			423 => 
			array (
				'id' => 1424,
				'id_provincia' => 38,
				'cod_municipio' => 30,
				'DC' => 9,
				'nombre' => 'Puntallana',
			),
			424 => 
			array (
				'id' => 1425,
				'id_provincia' => 39,
				'cod_municipio' => 30,
				'DC' => 2,
				'nombre' => 'Guriezo',
			),
			425 => 
			array (
				'id' => 1426,
				'id_provincia' => 40,
				'cod_municipio' => 30,
				'DC' => 6,
				'nombre' => 'Bernardos',
			),
			426 => 
			array (
				'id' => 1427,
				'id_provincia' => 41,
				'cod_municipio' => 30,
				'DC' => 3,
				'nombre' => 'Castilleja del Campo',
			),
			427 => 
			array (
				'id' => 1428,
				'id_provincia' => 42,
				'cod_municipio' => 30,
				'DC' => 8,
				'nombre' => 'Barca',
			),
			428 => 
			array (
				'id' => 1429,
				'id_provincia' => 43,
				'cod_municipio' => 30,
				'DC' => 4,
				'nombre' => 'Bonastre',
			),
			429 => 
			array (
				'id' => 1430,
				'id_provincia' => 45,
				'cod_municipio' => 30,
				'DC' => 2,
				'nombre' => 'Calzada de Oropesa',
			),
			430 => 
			array (
				'id' => 1431,
				'id_provincia' => 46,
				'cod_municipio' => 30,
				'DC' => 5,
				'nombre' => 'Algimia de Alfara',
			),
			431 => 
			array (
				'id' => 1432,
				'id_provincia' => 47,
				'cod_municipio' => 30,
				'DC' => 1,
				'nombre' => 'Campaspero',
			),
			432 => 
			array (
				'id' => 1433,
				'id_provincia' => 48,
				'cod_municipio' => 30,
				'DC' => 7,
				'nombre' => 'Etxebarria',
			),
			433 => 
			array (
				'id' => 1434,
				'id_provincia' => 49,
				'cod_municipio' => 30,
				'DC' => 0,
				'nombre' => 'Bustillo del Oro',
			),
			434 => 
			array (
				'id' => 1435,
				'id_provincia' => 50,
				'cod_municipio' => 30,
				'DC' => 3,
				'nombre' => 'Añón de Moncayo',
			),
			435 => 
			array (
				'id' => 1436,
				'id_provincia' => 1,
				'cod_municipio' => 31,
				'DC' => 8,
				'nombre' => 'Laguardia',
			),
			436 => 
			array (
				'id' => 1437,
				'id_provincia' => 2,
				'cod_municipio' => 31,
				'DC' => 3,
				'nombre' => 'Férez',
			),
			437 => 
			array (
				'id' => 1438,
				'id_provincia' => 3,
				'cod_municipio' => 31,
				'DC' => 9,
				'nombre' => 'Benidorm',
			),
			438 => 
			array (
				'id' => 1439,
				'id_provincia' => 4,
				'cod_municipio' => 31,
				'DC' => 4,
				'nombre' => 'Cantoria',
			),
			439 => 
			array (
				'id' => 1440,
				'id_provincia' => 6,
				'cod_municipio' => 31,
				'DC' => 0,
				'nombre' => 'Carmonita',
			),
			440 => 
			array (
				'id' => 1441,
				'id_provincia' => 7,
				'cod_municipio' => 31,
				'DC' => 6,
				'nombre' => 'Llucmajor',
			),
			441 => 
			array (
				'id' => 1442,
				'id_provincia' => 8,
				'cod_municipio' => 31,
				'DC' => 2,
				'nombre' => 'Calaf',
			),
			442 => 
			array (
				'id' => 1443,
				'id_provincia' => 10,
				'cod_municipio' => 31,
				'DC' => 9,
				'nombre' => 'Botija',
			),
			443 => 
			array (
				'id' => 1444,
				'id_provincia' => 11,
				'cod_municipio' => 31,
				'DC' => 6,
				'nombre' => 'San Fernando',
			),
			444 => 
			array (
				'id' => 1445,
				'id_provincia' => 12,
				'cod_municipio' => 31,
				'DC' => 1,
				'nombre' => 'Borriol',
			),
			445 => 
			array (
				'id' => 1446,
				'id_provincia' => 13,
				'cod_municipio' => 31,
				'DC' => 7,
				'nombre' => 'Carrión de Calatrava',
			),
			446 => 
			array (
				'id' => 1447,
				'id_provincia' => 14,
				'cod_municipio' => 31,
				'DC' => 2,
				'nombre' => 'Fuente-Tójar',
			),
			447 => 
			array (
				'id' => 1448,
				'id_provincia' => 15,
				'cod_municipio' => 31,
				'DC' => 5,
				'nombre' => 'Culleredo',
			),
			448 => 
			array (
				'id' => 1449,
				'id_provincia' => 16,
				'cod_municipio' => 31,
				'DC' => 8,
				'nombre' => 'Beamud',
			),
			449 => 
			array (
				'id' => 1450,
				'id_provincia' => 17,
				'cod_municipio' => 31,
				'DC' => 4,
				'nombre' => 'Cabanelles',
			),
			450 => 
			array (
				'id' => 1451,
				'id_provincia' => 19,
				'cod_municipio' => 31,
				'DC' => 3,
				'nombre' => 'Angón',
			),
			451 => 
			array (
				'id' => 1452,
				'id_provincia' => 20,
				'cod_municipio' => 31,
				'DC' => 7,
				'nombre' => 'Elduain',
			),
			452 => 
			array (
				'id' => 1453,
				'id_provincia' => 21,
				'cod_municipio' => 31,
				'DC' => 4,
				'nombre' => 'Encinasola',
			),
			453 => 
			array (
				'id' => 1454,
				'id_provincia' => 23,
				'cod_municipio' => 31,
				'DC' => 5,
				'nombre' => 'Escañuela',
			),
			454 => 
			array (
				'id' => 1455,
				'id_provincia' => 24,
				'cod_municipio' => 31,
				'DC' => 0,
				'nombre' => 'Calzada del Coto',
			),
			455 => 
			array (
				'id' => 1456,
				'id_provincia' => 25,
				'cod_municipio' => 31,
				'DC' => 3,
				'nombre' => 'Arres',
			),
			456 => 
			array (
				'id' => 1457,
				'id_provincia' => 26,
				'cod_municipio' => 31,
				'DC' => 6,
				'nombre' => 'Bobadilla',
			),
			457 => 
			array (
				'id' => 1458,
				'id_provincia' => 27,
				'cod_municipio' => 31,
				'DC' => 2,
				'nombre' => 'Monforte de Lemos',
			),
			458 => 
			array (
				'id' => 1459,
				'id_provincia' => 28,
				'cod_municipio' => 31,
				'DC' => 8,
				'nombre' => 'Cadalso de los Vidrios',
			),
			459 => 
			array (
				'id' => 1460,
				'id_provincia' => 29,
				'cod_municipio' => 31,
				'DC' => 1,
				'nombre' => 'Burgo, El',
			),
			460 => 
			array (
				'id' => 1461,
				'id_provincia' => 30,
				'cod_municipio' => 31,
				'DC' => 5,
				'nombre' => 'Ojós',
			),
			461 => 
			array (
				'id' => 1462,
				'id_provincia' => 31,
				'cod_municipio' => 31,
				'DC' => 2,
				'nombre' => 'Areso',
			),
			462 => 
			array (
				'id' => 1463,
				'id_provincia' => 32,
				'cod_municipio' => 31,
				'DC' => 7,
				'nombre' => 'Esgos',
			),
			463 => 
			array (
				'id' => 1464,
				'id_provincia' => 33,
				'cod_municipio' => 31,
				'DC' => 3,
				'nombre' => 'Langreo',
			),
			464 => 
			array (
				'id' => 1465,
				'id_provincia' => 34,
				'cod_municipio' => 31,
				'DC' => 8,
				'nombre' => 'Belmonte de Campos',
			),
			465 => 
			array (
				'id' => 1466,
				'id_provincia' => 35,
				'cod_municipio' => 31,
				'DC' => 1,
				'nombre' => 'Valsequillo de Gran Canaria',
			),
			466 => 
			array (
				'id' => 1467,
				'id_provincia' => 36,
				'cod_municipio' => 31,
				'DC' => 4,
				'nombre' => 'Mondariz-Balneario',
			),
			467 => 
			array (
				'id' => 1468,
				'id_provincia' => 37,
				'cod_municipio' => 31,
				'DC' => 0,
				'nombre' => 'Arabayona de Mógica',
			),
			468 => 
			array (
				'id' => 1469,
				'id_provincia' => 38,
				'cod_municipio' => 31,
				'DC' => 6,
				'nombre' => 'Realejos, Los',
			),
			469 => 
			array (
				'id' => 1470,
				'id_provincia' => 39,
				'cod_municipio' => 31,
				'DC' => 9,
				'nombre' => 'Hazas de Cesto',
			),
			470 => 
			array (
				'id' => 1471,
				'id_provincia' => 40,
				'cod_municipio' => 31,
				'DC' => 3,
				'nombre' => 'Bernuy de Porreros',
			),
			471 => 
			array (
				'id' => 1472,
				'id_provincia' => 41,
				'cod_municipio' => 31,
				'DC' => 0,
				'nombre' => 'Castillo de las Guardas, El',
			),
			472 => 
			array (
				'id' => 1473,
				'id_provincia' => 42,
				'cod_municipio' => 31,
				'DC' => 5,
				'nombre' => 'Barcones',
			),
			473 => 
			array (
				'id' => 1474,
				'id_provincia' => 43,
				'cod_municipio' => 31,
				'DC' => 1,
				'nombre' => 'Borges del Camp, Les',
			),
			474 => 
			array (
				'id' => 1475,
				'id_provincia' => 44,
				'cod_municipio' => 31,
				'DC' => 6,
				'nombre' => 'Azaila',
			),
			475 => 
			array (
				'id' => 1476,
				'id_provincia' => 45,
				'cod_municipio' => 31,
				'DC' => 9,
				'nombre' => 'Camarena',
			),
			476 => 
			array (
				'id' => 1477,
				'id_provincia' => 46,
				'cod_municipio' => 31,
				'DC' => 2,
				'nombre' => 'Alginet',
			),
			477 => 
			array (
				'id' => 1478,
				'id_provincia' => 47,
				'cod_municipio' => 31,
				'DC' => 8,
				'nombre' => 'Campillo, El',
			),
			478 => 
			array (
				'id' => 1479,
				'id_provincia' => 48,
				'cod_municipio' => 31,
				'DC' => 4,
				'nombre' => 'Elantxobe',
			),
			479 => 
			array (
				'id' => 1480,
				'id_provincia' => 49,
				'cod_municipio' => 31,
				'DC' => 7,
				'nombre' => 'Cabañas de Sayago',
			),
			480 => 
			array (
				'id' => 1481,
				'id_provincia' => 50,
				'cod_municipio' => 31,
				'DC' => 0,
				'nombre' => 'Aranda de Moncayo',
			),
			481 => 
			array (
				'id' => 1482,
				'id_provincia' => 1,
				'cod_municipio' => 32,
				'DC' => 3,
				'nombre' => 'Lanciego/Lantziego',
			),
			482 => 
			array (
				'id' => 1483,
				'id_provincia' => 2,
				'cod_municipio' => 32,
				'DC' => 8,
				'nombre' => 'Fuensanta',
			),
			483 => 
			array (
				'id' => 1484,
				'id_provincia' => 3,
				'cod_municipio' => 32,
				'DC' => 4,
				'nombre' => 'Benifallim',
			),
			484 => 
			array (
				'id' => 1485,
				'id_provincia' => 4,
				'cod_municipio' => 32,
				'DC' => 9,
				'nombre' => 'Carboneras',
			),
			485 => 
			array (
				'id' => 1486,
				'id_provincia' => 6,
				'cod_municipio' => 32,
				'DC' => 5,
				'nombre' => 'Carrascalejo, El',
			),
			486 => 
			array (
				'id' => 1487,
				'id_provincia' => 7,
				'cod_municipio' => 32,
				'DC' => 1,
				'nombre' => 'Maó',
			),
			487 => 
			array (
				'id' => 1488,
				'id_provincia' => 8,
				'cod_municipio' => 32,
				'DC' => 7,
				'nombre' => 'Caldes d\'Estrac',
			),
			488 => 
			array (
				'id' => 1489,
				'id_provincia' => 9,
				'cod_municipio' => 32,
				'DC' => 0,
				'nombre' => 'Avellanosa de Muñó',
			),
			489 => 
			array (
				'id' => 1490,
				'id_provincia' => 10,
				'cod_municipio' => 32,
				'DC' => 4,
				'nombre' => 'Brozas',
			),
			490 => 
			array (
				'id' => 1491,
				'id_provincia' => 11,
				'cod_municipio' => 32,
				'DC' => 1,
				'nombre' => 'Sanlúcar de Barrameda',
			),
			491 => 
			array (
				'id' => 1492,
				'id_provincia' => 12,
				'cod_municipio' => 32,
				'DC' => 6,
				'nombre' => 'Borriana/Burriana',
			),
			492 => 
			array (
				'id' => 1493,
				'id_provincia' => 13,
				'cod_municipio' => 32,
				'DC' => 2,
				'nombre' => 'Carrizosa',
			),
			493 => 
			array (
				'id' => 1494,
				'id_provincia' => 14,
				'cod_municipio' => 32,
				'DC' => 7,
				'nombre' => 'Granjuela, La',
			),
			494 => 
			array (
				'id' => 1495,
				'id_provincia' => 15,
				'cod_municipio' => 32,
				'DC' => 0,
				'nombre' => 'Curtis',
			),
			495 => 
			array (
				'id' => 1496,
				'id_provincia' => 16,
				'cod_municipio' => 32,
				'DC' => 3,
				'nombre' => 'Belinchón',
			),
			496 => 
			array (
				'id' => 1497,
				'id_provincia' => 17,
				'cod_municipio' => 32,
				'DC' => 9,
				'nombre' => 'Cadaqués',
			),
			497 => 
			array (
				'id' => 1498,
				'id_provincia' => 18,
				'cod_municipio' => 32,
				'DC' => 5,
				'nombre' => 'Bubión',
			),
			498 => 
			array (
				'id' => 1499,
				'id_provincia' => 19,
				'cod_municipio' => 32,
				'DC' => 8,
				'nombre' => 'Anguita',
			),
			499 => 
			array (
				'id' => 1500,
				'id_provincia' => 20,
				'cod_municipio' => 32,
				'DC' => 2,
				'nombre' => 'Elgoibar',
			),
		));
		\DB::table('municipios')->insert(array (
			0 => 
			array (
				'id' => 1501,
				'id_provincia' => 21,
				'cod_municipio' => 32,
				'DC' => 9,
				'nombre' => 'Escacena del Campo',
			),
			1 => 
			array (
				'id' => 1502,
				'id_provincia' => 22,
				'cod_municipio' => 32,
				'DC' => 4,
				'nombre' => 'Aragüés del Puerto',
			),
			2 => 
			array (
				'id' => 1503,
				'id_provincia' => 23,
				'cod_municipio' => 32,
				'DC' => 0,
				'nombre' => 'Espelúy',
			),
			3 => 
			array (
				'id' => 1504,
				'id_provincia' => 24,
				'cod_municipio' => 32,
				'DC' => 5,
				'nombre' => 'Campazas',
			),
			4 => 
			array (
				'id' => 1505,
				'id_provincia' => 25,
				'cod_municipio' => 32,
				'DC' => 8,
				'nombre' => 'Arsèguel',
			),
			5 => 
			array (
				'id' => 1506,
				'id_provincia' => 26,
				'cod_municipio' => 32,
				'DC' => 1,
				'nombre' => 'Brieva de Cameros',
			),
			6 => 
			array (
				'id' => 1507,
				'id_provincia' => 27,
				'cod_municipio' => 32,
				'DC' => 7,
				'nombre' => 'Monterroso',
			),
			7 => 
			array (
				'id' => 1508,
				'id_provincia' => 28,
				'cod_municipio' => 32,
				'DC' => 3,
				'nombre' => 'Camarma de Esteruelas',
			),
			8 => 
			array (
				'id' => 1509,
				'id_provincia' => 29,
				'cod_municipio' => 32,
				'DC' => 6,
				'nombre' => 'Campillos',
			),
			9 => 
			array (
				'id' => 1510,
				'id_provincia' => 30,
				'cod_municipio' => 32,
				'DC' => 0,
				'nombre' => 'Pliego',
			),
			10 => 
			array (
				'id' => 1511,
				'id_provincia' => 31,
				'cod_municipio' => 32,
				'DC' => 7,
				'nombre' => 'Arguedas',
			),
			11 => 
			array (
				'id' => 1512,
				'id_provincia' => 32,
				'cod_municipio' => 32,
				'DC' => 2,
				'nombre' => 'Xinzo de Limia',
			),
			12 => 
			array (
				'id' => 1513,
				'id_provincia' => 33,
				'cod_municipio' => 32,
				'DC' => 8,
				'nombre' => 'Laviana',
			),
			13 => 
			array (
				'id' => 1514,
				'id_provincia' => 34,
				'cod_municipio' => 32,
				'DC' => 3,
				'nombre' => 'Berzosilla',
			),
			14 => 
			array (
				'id' => 1515,
				'id_provincia' => 35,
				'cod_municipio' => 32,
				'DC' => 6,
				'nombre' => 'Valleseco',
			),
			15 => 
			array (
				'id' => 1516,
				'id_provincia' => 36,
				'cod_municipio' => 32,
				'DC' => 9,
				'nombre' => 'Moraña',
			),
			16 => 
			array (
				'id' => 1517,
				'id_provincia' => 37,
				'cod_municipio' => 32,
				'DC' => 5,
				'nombre' => 'Arapiles',
			),
			17 => 
			array (
				'id' => 1518,
				'id_provincia' => 38,
				'cod_municipio' => 32,
				'DC' => 1,
				'nombre' => 'Rosario, El',
			),
			18 => 
			array (
				'id' => 1519,
				'id_provincia' => 39,
				'cod_municipio' => 32,
				'DC' => 4,
				'nombre' => 'Hermandad de Campoo de Suso',
			),
			19 => 
			array (
				'id' => 1520,
				'id_provincia' => 40,
				'cod_municipio' => 32,
				'DC' => 8,
				'nombre' => 'Boceguillas',
			),
			20 => 
			array (
				'id' => 1521,
				'id_provincia' => 41,
				'cod_municipio' => 32,
				'DC' => 5,
				'nombre' => 'Cazalla de la Sierra',
			),
			21 => 
			array (
				'id' => 1522,
				'id_provincia' => 42,
				'cod_municipio' => 32,
				'DC' => 0,
				'nombre' => 'Bayubas de Abajo',
			),
			22 => 
			array (
				'id' => 1523,
				'id_provincia' => 43,
				'cod_municipio' => 32,
				'DC' => 6,
				'nombre' => 'Bot',
			),
			23 => 
			array (
				'id' => 1524,
				'id_provincia' => 44,
				'cod_municipio' => 32,
				'DC' => 1,
				'nombre' => 'Bádenas',
			),
			24 => 
			array (
				'id' => 1525,
				'id_provincia' => 45,
				'cod_municipio' => 32,
				'DC' => 4,
				'nombre' => 'Camarenilla',
			),
			25 => 
			array (
				'id' => 1526,
				'id_provincia' => 46,
				'cod_municipio' => 32,
				'DC' => 7,
				'nombre' => 'Almàssera',
			),
			26 => 
			array (
				'id' => 1527,
				'id_provincia' => 47,
				'cod_municipio' => 32,
				'DC' => 3,
				'nombre' => 'Camporredondo',
			),
			27 => 
			array (
				'id' => 1528,
				'id_provincia' => 48,
				'cod_municipio' => 32,
				'DC' => 9,
				'nombre' => 'Elorrio',
			),
			28 => 
			array (
				'id' => 1529,
				'id_provincia' => 49,
				'cod_municipio' => 32,
				'DC' => 2,
				'nombre' => 'Calzadilla de Tera',
			),
			29 => 
			array (
				'id' => 1530,
				'id_provincia' => 50,
				'cod_municipio' => 32,
				'DC' => 5,
				'nombre' => 'Arándiga',
			),
			30 => 
			array (
				'id' => 1531,
				'id_provincia' => 1,
				'cod_municipio' => 33,
				'DC' => 9,
				'nombre' => 'Lapuebla de Labarca',
			),
			31 => 
			array (
				'id' => 1532,
				'id_provincia' => 2,
				'cod_municipio' => 33,
				'DC' => 4,
				'nombre' => 'Fuente-Álamo',
			),
			32 => 
			array (
				'id' => 1533,
				'id_provincia' => 3,
				'cod_municipio' => 33,
				'DC' => 0,
				'nombre' => 'Benifato',
			),
			33 => 
			array (
				'id' => 1534,
				'id_provincia' => 4,
				'cod_municipio' => 33,
				'DC' => 5,
				'nombre' => 'Castro de Filabres',
			),
			34 => 
			array (
				'id' => 1535,
				'id_provincia' => 5,
				'cod_municipio' => 33,
				'DC' => 8,
				'nombre' => 'Blascomillán',
			),
			35 => 
			array (
				'id' => 1536,
				'id_provincia' => 6,
				'cod_municipio' => 33,
				'DC' => 1,
				'nombre' => 'Casas de Don Pedro',
			),
			36 => 
			array (
				'id' => 1537,
				'id_provincia' => 7,
				'cod_municipio' => 33,
				'DC' => 7,
				'nombre' => 'Manacor',
			),
			37 => 
			array (
				'id' => 1538,
				'id_provincia' => 8,
				'cod_municipio' => 33,
				'DC' => 3,
				'nombre' => 'Caldes de Montbui',
			),
			38 => 
			array (
				'id' => 1539,
				'id_provincia' => 9,
				'cod_municipio' => 33,
				'DC' => 6,
				'nombre' => 'Bahabón de Esgueva',
			),
			39 => 
			array (
				'id' => 1540,
				'id_provincia' => 10,
				'cod_municipio' => 33,
				'DC' => 0,
				'nombre' => 'Cabañas del Castillo',
			),
			40 => 
			array (
				'id' => 1541,
				'id_provincia' => 11,
				'cod_municipio' => 33,
				'DC' => 7,
				'nombre' => 'San Roque',
			),
			41 => 
			array (
				'id' => 1542,
				'id_provincia' => 12,
				'cod_municipio' => 33,
				'DC' => 2,
				'nombre' => 'Cabanes',
			),
			42 => 
			array (
				'id' => 1543,
				'id_provincia' => 13,
				'cod_municipio' => 33,
				'DC' => 8,
				'nombre' => 'Castellar de Santiago',
			),
			43 => 
			array (
				'id' => 1544,
				'id_provincia' => 14,
				'cod_municipio' => 33,
				'DC' => 3,
				'nombre' => 'Guadalcázar',
			),
			44 => 
			array (
				'id' => 1545,
				'id_provincia' => 15,
				'cod_municipio' => 33,
				'DC' => 6,
				'nombre' => 'Dodro',
			),
			45 => 
			array (
				'id' => 1546,
				'id_provincia' => 16,
				'cod_municipio' => 33,
				'DC' => 9,
				'nombre' => 'Belmonte',
			),
			46 => 
			array (
				'id' => 1547,
				'id_provincia' => 17,
				'cod_municipio' => 33,
				'DC' => 5,
				'nombre' => 'Caldes de Malavella',
			),
			47 => 
			array (
				'id' => 1548,
				'id_provincia' => 18,
				'cod_municipio' => 33,
				'DC' => 1,
				'nombre' => 'Busquístar',
			),
			48 => 
			array (
				'id' => 1549,
				'id_provincia' => 19,
				'cod_municipio' => 33,
				'DC' => 4,
				'nombre' => 'Anquela del Ducado',
			),
			49 => 
			array (
				'id' => 1550,
				'id_provincia' => 20,
				'cod_municipio' => 33,
				'DC' => 8,
				'nombre' => 'Elgeta',
			),
			50 => 
			array (
				'id' => 1551,
				'id_provincia' => 21,
				'cod_municipio' => 33,
				'DC' => 5,
				'nombre' => 'Fuenteheridos',
			),
			51 => 
			array (
				'id' => 1552,
				'id_provincia' => 23,
				'cod_municipio' => 33,
				'DC' => 6,
				'nombre' => 'Frailes',
			),
			52 => 
			array (
				'id' => 1553,
				'id_provincia' => 24,
				'cod_municipio' => 33,
				'DC' => 1,
				'nombre' => 'Campo de Villavidel',
			),
			53 => 
			array (
				'id' => 1554,
				'id_provincia' => 25,
				'cod_municipio' => 33,
				'DC' => 4,
				'nombre' => 'Artesa de Lleida',
			),
			54 => 
			array (
				'id' => 1555,
				'id_provincia' => 26,
				'cod_municipio' => 33,
				'DC' => 7,
				'nombre' => 'Briñas',
			),
			55 => 
			array (
				'id' => 1556,
				'id_provincia' => 27,
				'cod_municipio' => 33,
				'DC' => 3,
				'nombre' => 'Muras',
			),
			56 => 
			array (
				'id' => 1557,
				'id_provincia' => 28,
				'cod_municipio' => 33,
				'DC' => 9,
				'nombre' => 'Campo Real',
			),
			57 => 
			array (
				'id' => 1558,
				'id_provincia' => 29,
				'cod_municipio' => 33,
				'DC' => 2,
				'nombre' => 'Canillas de Aceituno',
			),
			58 => 
			array (
				'id' => 1559,
				'id_provincia' => 30,
				'cod_municipio' => 33,
				'DC' => 6,
				'nombre' => 'Puerto Lumbreras',
			),
			59 => 
			array (
				'id' => 1560,
				'id_provincia' => 31,
				'cod_municipio' => 33,
				'DC' => 3,
				'nombre' => 'Aria',
			),
			60 => 
			array (
				'id' => 1561,
				'id_provincia' => 32,
				'cod_municipio' => 33,
				'DC' => 8,
				'nombre' => 'Gomesende',
			),
			61 => 
			array (
				'id' => 1562,
				'id_provincia' => 33,
				'cod_municipio' => 33,
				'DC' => 4,
				'nombre' => 'Lena',
			),
			62 => 
			array (
				'id' => 1563,
				'id_provincia' => 34,
				'cod_municipio' => 33,
				'DC' => 9,
				'nombre' => 'Boada de Campos',
			),
			63 => 
			array (
				'id' => 1564,
				'id_provincia' => 35,
				'cod_municipio' => 33,
				'DC' => 2,
				'nombre' => 'Vega de San Mateo',
			),
			64 => 
			array (
				'id' => 1565,
				'id_provincia' => 36,
				'cod_municipio' => 33,
				'DC' => 5,
				'nombre' => 'Mos',
			),
			65 => 
			array (
				'id' => 1566,
				'id_provincia' => 37,
				'cod_municipio' => 33,
				'DC' => 1,
				'nombre' => 'Arcediano',
			),
			66 => 
			array (
				'id' => 1567,
				'id_provincia' => 38,
				'cod_municipio' => 33,
				'DC' => 7,
				'nombre' => 'San Andrés y Sauces',
			),
			67 => 
			array (
				'id' => 1568,
				'id_provincia' => 39,
				'cod_municipio' => 33,
				'DC' => 0,
				'nombre' => 'Herrerías',
			),
			68 => 
			array (
				'id' => 1569,
				'id_provincia' => 40,
				'cod_municipio' => 33,
				'DC' => 4,
				'nombre' => 'Brieva',
			),
			69 => 
			array (
				'id' => 1570,
				'id_provincia' => 41,
				'cod_municipio' => 33,
				'DC' => 1,
				'nombre' => 'Constantina',
			),
			70 => 
			array (
				'id' => 1571,
				'id_provincia' => 42,
				'cod_municipio' => 33,
				'DC' => 6,
				'nombre' => 'Bayubas de Arriba',
			),
			71 => 
			array (
				'id' => 1572,
				'id_provincia' => 43,
				'cod_municipio' => 33,
				'DC' => 2,
				'nombre' => 'Botarell',
			),
			72 => 
			array (
				'id' => 1573,
				'id_provincia' => 44,
				'cod_municipio' => 33,
				'DC' => 7,
				'nombre' => 'Báguena',
			),
			73 => 
			array (
				'id' => 1574,
				'id_provincia' => 45,
				'cod_municipio' => 33,
				'DC' => 0,
				'nombre' => 'Campillo de la Jara, El',
			),
			74 => 
			array (
				'id' => 1575,
				'id_provincia' => 46,
				'cod_municipio' => 33,
				'DC' => 3,
				'nombre' => 'Almiserà',
			),
			75 => 
			array (
				'id' => 1576,
				'id_provincia' => 47,
				'cod_municipio' => 33,
				'DC' => 9,
				'nombre' => 'Canalejas de Peñafiel',
			),
			76 => 
			array (
				'id' => 1577,
				'id_provincia' => 48,
				'cod_municipio' => 33,
				'DC' => 5,
				'nombre' => 'Ereño',
			),
			77 => 
			array (
				'id' => 1578,
				'id_provincia' => 49,
				'cod_municipio' => 33,
				'DC' => 8,
				'nombre' => 'Camarzana de Tera',
			),
			78 => 
			array (
				'id' => 1579,
				'id_provincia' => 50,
				'cod_municipio' => 33,
				'DC' => 1,
				'nombre' => 'Ardisa',
			),
			79 => 
			array (
				'id' => 1580,
				'id_provincia' => 1,
				'cod_municipio' => 34,
				'DC' => 4,
				'nombre' => 'Leza',
			),
			80 => 
			array (
				'id' => 1581,
				'id_provincia' => 2,
				'cod_municipio' => 34,
				'DC' => 9,
				'nombre' => 'Fuentealbilla',
			),
			81 => 
			array (
				'id' => 1582,
				'id_provincia' => 3,
				'cod_municipio' => 34,
				'DC' => 5,
				'nombre' => 'Benijófar',
			),
			82 => 
			array (
				'id' => 1583,
				'id_provincia' => 4,
				'cod_municipio' => 34,
				'DC' => 0,
				'nombre' => 'Cóbdar',
			),
			83 => 
			array (
				'id' => 1584,
				'id_provincia' => 5,
				'cod_municipio' => 34,
				'DC' => 3,
				'nombre' => 'Blasconuño de Matacabras',
			),
			84 => 
			array (
				'id' => 1585,
				'id_provincia' => 6,
				'cod_municipio' => 34,
				'DC' => 6,
				'nombre' => 'Casas de Reina',
			),
			85 => 
			array (
				'id' => 1586,
				'id_provincia' => 7,
				'cod_municipio' => 34,
				'DC' => 2,
				'nombre' => 'Mancor de la Vall',
			),
			86 => 
			array (
				'id' => 1587,
				'id_provincia' => 8,
				'cod_municipio' => 34,
				'DC' => 8,
				'nombre' => 'Calders',
			),
			87 => 
			array (
				'id' => 1588,
				'id_provincia' => 9,
				'cod_municipio' => 34,
				'DC' => 1,
				'nombre' => 'Balbases, Los',
			),
			88 => 
			array (
				'id' => 1589,
				'id_provincia' => 10,
				'cod_municipio' => 34,
				'DC' => 5,
				'nombre' => 'Cabezabellosa',
			),
			89 => 
			array (
				'id' => 1590,
				'id_provincia' => 11,
				'cod_municipio' => 34,
				'DC' => 2,
				'nombre' => 'Setenil de las Bodegas',
			),
			90 => 
			array (
				'id' => 1591,
				'id_provincia' => 12,
				'cod_municipio' => 34,
				'DC' => 7,
				'nombre' => 'Càlig',
			),
			91 => 
			array (
				'id' => 1592,
				'id_provincia' => 13,
				'cod_municipio' => 34,
				'DC' => 3,
				'nombre' => 'Ciudad Real',
			),
			92 => 
			array (
				'id' => 1593,
				'id_provincia' => 14,
				'cod_municipio' => 34,
				'DC' => 8,
				'nombre' => 'Guijo, El',
			),
			93 => 
			array (
				'id' => 1594,
				'id_provincia' => 15,
				'cod_municipio' => 34,
				'DC' => 1,
				'nombre' => 'Dumbría',
			),
			94 => 
			array (
				'id' => 1595,
				'id_provincia' => 16,
				'cod_municipio' => 34,
				'DC' => 4,
				'nombre' => 'Belmontejo',
			),
			95 => 
			array (
				'id' => 1596,
				'id_provincia' => 17,
				'cod_municipio' => 34,
				'DC' => 0,
				'nombre' => 'Calonge',
			),
			96 => 
			array (
				'id' => 1597,
				'id_provincia' => 18,
				'cod_municipio' => 34,
				'DC' => 6,
				'nombre' => 'Cacín',
			),
			97 => 
			array (
				'id' => 1598,
				'id_provincia' => 19,
				'cod_municipio' => 34,
				'DC' => 9,
				'nombre' => 'Anquela del Pedregal',
			),
			98 => 
			array (
				'id' => 1599,
				'id_provincia' => 20,
				'cod_municipio' => 34,
				'DC' => 3,
				'nombre' => 'Eskoriatza',
			),
			99 => 
			array (
				'id' => 1600,
				'id_provincia' => 21,
				'cod_municipio' => 34,
				'DC' => 0,
				'nombre' => 'Galaroza',
			),
			100 => 
			array (
				'id' => 1601,
				'id_provincia' => 23,
				'cod_municipio' => 34,
				'DC' => 1,
				'nombre' => 'Fuensanta de Martos',
			),
			101 => 
			array (
				'id' => 1602,
				'id_provincia' => 24,
				'cod_municipio' => 34,
				'DC' => 6,
				'nombre' => 'Camponaraya',
			),
			102 => 
			array (
				'id' => 1603,
				'id_provincia' => 25,
				'cod_municipio' => 34,
				'DC' => 9,
				'nombre' => 'Artesa de Segre',
			),
			103 => 
			array (
				'id' => 1604,
				'id_provincia' => 26,
				'cod_municipio' => 34,
				'DC' => 2,
				'nombre' => 'Briones',
			),
			104 => 
			array (
				'id' => 1605,
				'id_provincia' => 27,
				'cod_municipio' => 34,
				'DC' => 8,
				'nombre' => 'Navia de Suarna',
			),
			105 => 
			array (
				'id' => 1606,
				'id_provincia' => 28,
				'cod_municipio' => 34,
				'DC' => 4,
				'nombre' => 'Canencia',
			),
			106 => 
			array (
				'id' => 1607,
				'id_provincia' => 29,
				'cod_municipio' => 34,
				'DC' => 7,
				'nombre' => 'Canillas de Albaida',
			),
			107 => 
			array (
				'id' => 1608,
				'id_provincia' => 30,
				'cod_municipio' => 34,
				'DC' => 1,
				'nombre' => 'Ricote',
			),
			108 => 
			array (
				'id' => 1609,
				'id_provincia' => 31,
				'cod_municipio' => 34,
				'DC' => 8,
				'nombre' => 'Aribe',
			),
			109 => 
			array (
				'id' => 1610,
				'id_provincia' => 32,
				'cod_municipio' => 34,
				'DC' => 3,
				'nombre' => 'Gudiña, A',
			),
			110 => 
			array (
				'id' => 1611,
				'id_provincia' => 33,
				'cod_municipio' => 34,
				'DC' => 9,
				'nombre' => 'Valdés',
			),
			111 => 
			array (
				'id' => 1612,
				'id_provincia' => 34,
				'cod_municipio' => 34,
				'DC' => 4,
				'nombre' => 'Boadilla del Camino',
			),
			112 => 
			array (
				'id' => 1613,
				'id_provincia' => 35,
				'cod_municipio' => 34,
				'DC' => 7,
				'nombre' => 'Yaiza',
			),
			113 => 
			array (
				'id' => 1614,
				'id_provincia' => 36,
				'cod_municipio' => 34,
				'DC' => 0,
				'nombre' => 'Neves, As',
			),
			114 => 
			array (
				'id' => 1615,
				'id_provincia' => 37,
				'cod_municipio' => 34,
				'DC' => 6,
				'nombre' => 'Arco, El',
			),
			115 => 
			array (
				'id' => 1616,
				'id_provincia' => 38,
				'cod_municipio' => 34,
				'DC' => 2,
				'nombre' => 'San Juan de la Rambla',
			),
			116 => 
			array (
				'id' => 1617,
				'id_provincia' => 39,
				'cod_municipio' => 34,
				'DC' => 5,
				'nombre' => 'Lamasón',
			),
			117 => 
			array (
				'id' => 1618,
				'id_provincia' => 40,
				'cod_municipio' => 34,
				'DC' => 9,
				'nombre' => 'Caballar',
			),
			118 => 
			array (
				'id' => 1619,
				'id_provincia' => 41,
				'cod_municipio' => 34,
				'DC' => 6,
				'nombre' => 'Coria del Río',
			),
			119 => 
			array (
				'id' => 1620,
				'id_provincia' => 42,
				'cod_municipio' => 34,
				'DC' => 1,
				'nombre' => 'Beratón',
			),
			120 => 
			array (
				'id' => 1621,
				'id_provincia' => 43,
				'cod_municipio' => 34,
				'DC' => 7,
				'nombre' => 'Bràfim',
			),
			121 => 
			array (
				'id' => 1622,
				'id_provincia' => 44,
				'cod_municipio' => 34,
				'DC' => 2,
				'nombre' => 'Bañón',
			),
			122 => 
			array (
				'id' => 1623,
				'id_provincia' => 45,
				'cod_municipio' => 34,
				'DC' => 5,
				'nombre' => 'Camuñas',
			),
			123 => 
			array (
				'id' => 1624,
				'id_provincia' => 46,
				'cod_municipio' => 34,
				'DC' => 8,
				'nombre' => 'Almoines',
			),
			124 => 
			array (
				'id' => 1625,
				'id_provincia' => 47,
				'cod_municipio' => 34,
				'DC' => 4,
				'nombre' => 'Canillas de Esgueva',
			),
			125 => 
			array (
				'id' => 1626,
				'id_provincia' => 48,
				'cod_municipio' => 34,
				'DC' => 0,
				'nombre' => 'Ermua',
			),
			126 => 
			array (
				'id' => 1627,
				'id_provincia' => 49,
				'cod_municipio' => 34,
				'DC' => 3,
				'nombre' => 'Cañizal',
			),
			127 => 
			array (
				'id' => 1628,
				'id_provincia' => 50,
				'cod_municipio' => 34,
				'DC' => 6,
				'nombre' => 'Ariza',
			),
			128 => 
			array (
				'id' => 1629,
				'id_provincia' => 2,
				'cod_municipio' => 35,
				'DC' => 2,
				'nombre' => 'Gineta, La',
			),
			129 => 
			array (
				'id' => 1630,
				'id_provincia' => 3,
				'cod_municipio' => 35,
				'DC' => 8,
				'nombre' => 'Benilloba',
			),
			130 => 
			array (
				'id' => 1631,
				'id_provincia' => 4,
				'cod_municipio' => 35,
				'DC' => 3,
				'nombre' => 'Cuevas del Almanzora',
			),
			131 => 
			array (
				'id' => 1632,
				'id_provincia' => 5,
				'cod_municipio' => 35,
				'DC' => 6,
				'nombre' => 'Blascosancho',
			),
			132 => 
			array (
				'id' => 1633,
				'id_provincia' => 6,
				'cod_municipio' => 35,
				'DC' => 9,
				'nombre' => 'Castilblanco',
			),
			133 => 
			array (
				'id' => 1634,
				'id_provincia' => 7,
				'cod_municipio' => 35,
				'DC' => 5,
				'nombre' => 'Maria de la Salut',
			),
			134 => 
			array (
				'id' => 1635,
				'id_provincia' => 8,
				'cod_municipio' => 35,
				'DC' => 1,
				'nombre' => 'Calella',
			),
			135 => 
			array (
				'id' => 1636,
				'id_provincia' => 9,
				'cod_municipio' => 35,
				'DC' => 4,
				'nombre' => 'Baños de Valdearados',
			),
			136 => 
			array (
				'id' => 1637,
				'id_provincia' => 10,
				'cod_municipio' => 35,
				'DC' => 8,
				'nombre' => 'Cabezuela del Valle',
			),
			137 => 
			array (
				'id' => 1638,
				'id_provincia' => 11,
				'cod_municipio' => 35,
				'DC' => 5,
				'nombre' => 'Tarifa',
			),
			138 => 
			array (
				'id' => 1639,
				'id_provincia' => 13,
				'cod_municipio' => 35,
				'DC' => 6,
				'nombre' => 'Corral de Calatrava',
			),
			139 => 
			array (
				'id' => 1640,
				'id_provincia' => 14,
				'cod_municipio' => 35,
				'DC' => 1,
				'nombre' => 'Hinojosa del Duque',
			),
			140 => 
			array (
				'id' => 1641,
				'id_provincia' => 15,
				'cod_municipio' => 35,
				'DC' => 4,
				'nombre' => 'Fene',
			),
			141 => 
			array (
				'id' => 1642,
				'id_provincia' => 16,
				'cod_municipio' => 35,
				'DC' => 7,
				'nombre' => 'Beteta',
			),
			142 => 
			array (
				'id' => 1643,
				'id_provincia' => 17,
				'cod_municipio' => 35,
				'DC' => 3,
				'nombre' => 'Camós',
			),
			143 => 
			array (
				'id' => 1644,
				'id_provincia' => 18,
				'cod_municipio' => 35,
				'DC' => 9,
				'nombre' => 'Cádiar',
			),
			144 => 
			array (
				'id' => 1645,
				'id_provincia' => 20,
				'cod_municipio' => 35,
				'DC' => 6,
				'nombre' => 'Ezkio-Itsaso',
			),
			145 => 
			array (
				'id' => 1646,
				'id_provincia' => 21,
				'cod_municipio' => 35,
				'DC' => 3,
				'nombre' => 'Gibraleón',
			),
			146 => 
			array (
				'id' => 1647,
				'id_provincia' => 22,
				'cod_municipio' => 35,
				'DC' => 8,
				'nombre' => 'Arén',
			),
			147 => 
			array (
				'id' => 1648,
				'id_provincia' => 23,
				'cod_municipio' => 35,
				'DC' => 4,
				'nombre' => 'Fuerte del Rey',
			),
			148 => 
			array (
				'id' => 1649,
				'id_provincia' => 25,
				'cod_municipio' => 35,
				'DC' => 2,
				'nombre' => 'Sentiu de Sió, La',
			),
			149 => 
			array (
				'id' => 1650,
				'id_provincia' => 26,
				'cod_municipio' => 35,
				'DC' => 5,
				'nombre' => 'Cabezón de Cameros',
			),
			150 => 
			array (
				'id' => 1651,
				'id_provincia' => 27,
				'cod_municipio' => 35,
				'DC' => 1,
				'nombre' => 'Negueira de Muñiz',
			),
			151 => 
			array (
				'id' => 1652,
				'id_provincia' => 28,
				'cod_municipio' => 35,
				'DC' => 7,
				'nombre' => 'Carabaña',
			),
			152 => 
			array (
				'id' => 1653,
				'id_provincia' => 29,
				'cod_municipio' => 35,
				'DC' => 0,
				'nombre' => 'Cañete la Real',
			),
			153 => 
			array (
				'id' => 1654,
				'id_provincia' => 30,
				'cod_municipio' => 35,
				'DC' => 4,
				'nombre' => 'San Javier',
			),
			154 => 
			array (
				'id' => 1655,
				'id_provincia' => 31,
				'cod_municipio' => 35,
				'DC' => 1,
				'nombre' => 'Armañanzas',
			),
			155 => 
			array (
				'id' => 1656,
				'id_provincia' => 32,
				'cod_municipio' => 35,
				'DC' => 6,
				'nombre' => 'Irixo, O',
			),
			156 => 
			array (
				'id' => 1657,
				'id_provincia' => 33,
				'cod_municipio' => 35,
				'DC' => 2,
				'nombre' => 'Llanera',
			),
			157 => 
			array (
				'id' => 1658,
				'id_provincia' => 34,
				'cod_municipio' => 35,
				'DC' => 7,
				'nombre' => 'Boadilla de Rioseco',
			),
			158 => 
			array (
				'id' => 1659,
				'id_provincia' => 36,
				'cod_municipio' => 35,
				'DC' => 3,
				'nombre' => 'Nigrán',
			),
			159 => 
			array (
				'id' => 1660,
				'id_provincia' => 37,
				'cod_municipio' => 35,
				'DC' => 9,
				'nombre' => 'Armenteros',
			),
			160 => 
			array (
				'id' => 1661,
				'id_provincia' => 38,
				'cod_municipio' => 35,
				'DC' => 5,
				'nombre' => 'San Miguel de Abona',
			),
			161 => 
			array (
				'id' => 1662,
				'id_provincia' => 39,
				'cod_municipio' => 35,
				'DC' => 8,
				'nombre' => 'Laredo',
			),
			162 => 
			array (
				'id' => 1663,
				'id_provincia' => 40,
				'cod_municipio' => 35,
				'DC' => 2,
				'nombre' => 'Cabañas de Polendos',
			),
			163 => 
			array (
				'id' => 1664,
				'id_provincia' => 41,
				'cod_municipio' => 35,
				'DC' => 9,
				'nombre' => 'Coripe',
			),
			164 => 
			array (
				'id' => 1665,
				'id_provincia' => 42,
				'cod_municipio' => 35,
				'DC' => 4,
				'nombre' => 'Berlanga de Duero',
			),
			165 => 
			array (
				'id' => 1666,
				'id_provincia' => 43,
				'cod_municipio' => 35,
				'DC' => 0,
				'nombre' => 'Cabacés',
			),
			166 => 
			array (
				'id' => 1667,
				'id_provincia' => 44,
				'cod_municipio' => 35,
				'DC' => 5,
				'nombre' => 'Barrachina',
			),
			167 => 
			array (
				'id' => 1668,
				'id_provincia' => 45,
				'cod_municipio' => 35,
				'DC' => 8,
				'nombre' => 'Cardiel de los Montes',
			),
			168 => 
			array (
				'id' => 1669,
				'id_provincia' => 46,
				'cod_municipio' => 35,
				'DC' => 1,
				'nombre' => 'Almussafes',
			),
			169 => 
			array (
				'id' => 1670,
				'id_provincia' => 47,
				'cod_municipio' => 35,
				'DC' => 7,
				'nombre' => 'Carpio',
			),
			170 => 
			array (
				'id' => 1671,
				'id_provincia' => 48,
				'cod_municipio' => 35,
				'DC' => 3,
				'nombre' => 'Fruiz',
			),
			171 => 
			array (
				'id' => 1672,
				'id_provincia' => 49,
				'cod_municipio' => 35,
				'DC' => 6,
				'nombre' => 'Cañizo',
			),
			172 => 
			array (
				'id' => 1673,
				'id_provincia' => 50,
				'cod_municipio' => 35,
				'DC' => 9,
				'nombre' => 'Artieda',
			),
			173 => 
			array (
				'id' => 1674,
				'id_provincia' => 1,
				'cod_municipio' => 36,
				'DC' => 0,
				'nombre' => 'Laudio/Llodio',
			),
			174 => 
			array (
				'id' => 1675,
				'id_provincia' => 2,
				'cod_municipio' => 36,
				'DC' => 5,
				'nombre' => 'Golosalvo',
			),
			175 => 
			array (
				'id' => 1676,
				'id_provincia' => 3,
				'cod_municipio' => 36,
				'DC' => 1,
				'nombre' => 'Benillup',
			),
			176 => 
			array (
				'id' => 1677,
				'id_provincia' => 4,
				'cod_municipio' => 36,
				'DC' => 6,
				'nombre' => 'Chercos',
			),
			177 => 
			array (
				'id' => 1678,
				'id_provincia' => 5,
				'cod_municipio' => 36,
				'DC' => 9,
				'nombre' => 'Bohodón, El',
			),
			178 => 
			array (
				'id' => 1679,
				'id_provincia' => 6,
				'cod_municipio' => 36,
				'DC' => 2,
				'nombre' => 'Castuera',
			),
			179 => 
			array (
				'id' => 1680,
				'id_provincia' => 7,
				'cod_municipio' => 36,
				'DC' => 8,
				'nombre' => 'Marratxí',
			),
			180 => 
			array (
				'id' => 1681,
				'id_provincia' => 8,
				'cod_municipio' => 36,
				'DC' => 4,
				'nombre' => 'Calonge de Segarra',
			),
			181 => 
			array (
				'id' => 1682,
				'id_provincia' => 9,
				'cod_municipio' => 36,
				'DC' => 7,
				'nombre' => 'Bañuelos de Bureba',
			),
			182 => 
			array (
				'id' => 1683,
				'id_provincia' => 10,
				'cod_municipio' => 36,
				'DC' => 1,
				'nombre' => 'Cabrero',
			),
			183 => 
			array (
				'id' => 1684,
				'id_provincia' => 11,
				'cod_municipio' => 36,
				'DC' => 8,
				'nombre' => 'Torre Alháquime',
			),
			184 => 
			array (
				'id' => 1685,
				'id_provincia' => 12,
				'cod_municipio' => 36,
				'DC' => 3,
				'nombre' => 'Canet lo Roig',
			),
			185 => 
			array (
				'id' => 1686,
				'id_provincia' => 13,
				'cod_municipio' => 36,
				'DC' => 9,
				'nombre' => 'Cortijos, Los',
			),
			186 => 
			array (
				'id' => 1687,
				'id_provincia' => 14,
				'cod_municipio' => 36,
				'DC' => 4,
				'nombre' => 'Hornachuelos',
			),
			187 => 
			array (
				'id' => 1688,
				'id_provincia' => 15,
				'cod_municipio' => 36,
				'DC' => 7,
				'nombre' => 'Ferrol',
			),
			188 => 
			array (
				'id' => 1689,
				'id_provincia' => 16,
				'cod_municipio' => 36,
				'DC' => 0,
				'nombre' => 'Boniches',
			),
			189 => 
			array (
				'id' => 1690,
				'id_provincia' => 17,
				'cod_municipio' => 36,
				'DC' => 6,
				'nombre' => 'Campdevànol',
			),
			190 => 
			array (
				'id' => 1691,
				'id_provincia' => 18,
				'cod_municipio' => 36,
				'DC' => 2,
				'nombre' => 'Cájar',
			),
			191 => 
			array (
				'id' => 1692,
				'id_provincia' => 19,
				'cod_municipio' => 36,
				'DC' => 5,
				'nombre' => 'Aranzueque',
			),
			192 => 
			array (
				'id' => 1693,
				'id_provincia' => 20,
				'cod_municipio' => 36,
				'DC' => 9,
				'nombre' => 'Hondarribia',
			),
			193 => 
			array (
				'id' => 1694,
				'id_provincia' => 21,
				'cod_municipio' => 36,
				'DC' => 6,
				'nombre' => 'Granada de Río-Tinto, La',
			),
			194 => 
			array (
				'id' => 1695,
				'id_provincia' => 22,
				'cod_municipio' => 36,
				'DC' => 1,
				'nombre' => 'Argavieso',
			),
			195 => 
			array (
				'id' => 1696,
				'id_provincia' => 24,
				'cod_municipio' => 36,
				'DC' => 2,
				'nombre' => 'Candín',
			),
			196 => 
			array (
				'id' => 1697,
				'id_provincia' => 25,
				'cod_municipio' => 36,
				'DC' => 5,
				'nombre' => 'Aspa',
			),
			197 => 
			array (
				'id' => 1698,
				'id_provincia' => 26,
				'cod_municipio' => 36,
				'DC' => 8,
				'nombre' => 'Calahorra',
			),
			198 => 
			array (
				'id' => 1699,
				'id_provincia' => 28,
				'cod_municipio' => 36,
				'DC' => 0,
				'nombre' => 'Casarrubuelos',
			),
			199 => 
			array (
				'id' => 1700,
				'id_provincia' => 29,
				'cod_municipio' => 36,
				'DC' => 3,
				'nombre' => 'Carratraca',
			),
			200 => 
			array (
				'id' => 1701,
				'id_provincia' => 30,
				'cod_municipio' => 36,
				'DC' => 7,
				'nombre' => 'San Pedro del Pinatar',
			),
			201 => 
			array (
				'id' => 1702,
				'id_provincia' => 31,
				'cod_municipio' => 36,
				'DC' => 4,
				'nombre' => 'Arróniz',
			),
			202 => 
			array (
				'id' => 1703,
				'id_provincia' => 32,
				'cod_municipio' => 36,
				'DC' => 9,
				'nombre' => 'Xunqueira de Ambía',
			),
			203 => 
			array (
				'id' => 1704,
				'id_provincia' => 33,
				'cod_municipio' => 36,
				'DC' => 5,
				'nombre' => 'Llanes',
			),
			204 => 
			array (
				'id' => 1705,
				'id_provincia' => 34,
				'cod_municipio' => 36,
				'DC' => 0,
				'nombre' => 'Brañosera',
			),
			205 => 
			array (
				'id' => 1706,
				'id_provincia' => 36,
				'cod_municipio' => 36,
				'DC' => 6,
				'nombre' => 'Oia',
			),
			206 => 
			array (
				'id' => 1707,
				'id_provincia' => 37,
				'cod_municipio' => 36,
				'DC' => 2,
				'nombre' => 'San Miguel del Robledo',
			),
			207 => 
			array (
				'id' => 1708,
				'id_provincia' => 38,
				'cod_municipio' => 36,
				'DC' => 8,
				'nombre' => 'San Sebastián de la Gomera',
			),
			208 => 
			array (
				'id' => 1709,
				'id_provincia' => 39,
				'cod_municipio' => 36,
				'DC' => 1,
				'nombre' => 'Liendo',
			),
			209 => 
			array (
				'id' => 1710,
				'id_provincia' => 40,
				'cod_municipio' => 36,
				'DC' => 5,
				'nombre' => 'Cabezuela',
			),
			210 => 
			array (
				'id' => 1711,
				'id_provincia' => 41,
				'cod_municipio' => 36,
				'DC' => 2,
				'nombre' => 'Coronil, El',
			),
			211 => 
			array (
				'id' => 1712,
				'id_provincia' => 42,
				'cod_municipio' => 36,
				'DC' => 7,
				'nombre' => 'Blacos',
			),
			212 => 
			array (
				'id' => 1713,
				'id_provincia' => 43,
				'cod_municipio' => 36,
				'DC' => 3,
				'nombre' => 'Cabra del Camp',
			),
			213 => 
			array (
				'id' => 1714,
				'id_provincia' => 44,
				'cod_municipio' => 36,
				'DC' => 8,
				'nombre' => 'Bea',
			),
			214 => 
			array (
				'id' => 1715,
				'id_provincia' => 45,
				'cod_municipio' => 36,
				'DC' => 1,
				'nombre' => 'Carmena',
			),
			215 => 
			array (
				'id' => 1716,
				'id_provincia' => 46,
				'cod_municipio' => 36,
				'DC' => 4,
				'nombre' => 'Alpuente',
			),
			216 => 
			array (
				'id' => 1717,
				'id_provincia' => 47,
				'cod_municipio' => 36,
				'DC' => 0,
				'nombre' => 'Casasola de Arión',
			),
			217 => 
			array (
				'id' => 1718,
				'id_provincia' => 48,
				'cod_municipio' => 36,
				'DC' => 6,
				'nombre' => 'Galdakao',
			),
			218 => 
			array (
				'id' => 1719,
				'id_provincia' => 49,
				'cod_municipio' => 36,
				'DC' => 9,
				'nombre' => 'Carbajales de Alba',
			),
			219 => 
			array (
				'id' => 1720,
				'id_provincia' => 50,
				'cod_municipio' => 36,
				'DC' => 2,
				'nombre' => 'Asín',
			),
			220 => 
			array (
				'id' => 1721,
				'id_provincia' => 1,
				'cod_municipio' => 37,
				'DC' => 6,
				'nombre' => 'Arraia-Maeztu',
			),
			221 => 
			array (
				'id' => 1722,
				'id_provincia' => 2,
				'cod_municipio' => 37,
				'DC' => 1,
				'nombre' => 'Hellín',
			),
			222 => 
			array (
				'id' => 1723,
				'id_provincia' => 3,
				'cod_municipio' => 37,
				'DC' => 7,
				'nombre' => 'Benimantell',
			),
			223 => 
			array (
				'id' => 1724,
				'id_provincia' => 4,
				'cod_municipio' => 37,
				'DC' => 2,
				'nombre' => 'Chirivel',
			),
			224 => 
			array (
				'id' => 1725,
				'id_provincia' => 5,
				'cod_municipio' => 37,
				'DC' => 5,
				'nombre' => 'Bohoyo',
			),
			225 => 
			array (
				'id' => 1726,
				'id_provincia' => 6,
				'cod_municipio' => 37,
				'DC' => 8,
				'nombre' => 'Codosera, La',
			),
			226 => 
			array (
				'id' => 1727,
				'id_provincia' => 7,
				'cod_municipio' => 37,
				'DC' => 4,
				'nombre' => 'Mercadal, Es',
			),
			227 => 
			array (
				'id' => 1728,
				'id_provincia' => 8,
				'cod_municipio' => 37,
				'DC' => 0,
				'nombre' => 'Calldetenes',
			),
			228 => 
			array (
				'id' => 1729,
				'id_provincia' => 9,
				'cod_municipio' => 37,
				'DC' => 3,
				'nombre' => 'Barbadillo de Herreros',
			),
			229 => 
			array (
				'id' => 1730,
				'id_provincia' => 10,
				'cod_municipio' => 37,
				'DC' => 7,
				'nombre' => 'Cáceres',
			),
			230 => 
			array (
				'id' => 1731,
				'id_provincia' => 11,
				'cod_municipio' => 37,
				'DC' => 4,
				'nombre' => 'Trebujena',
			),
			231 => 
			array (
				'id' => 1732,
				'id_provincia' => 12,
				'cod_municipio' => 37,
				'DC' => 9,
				'nombre' => 'Castell de Cabres',
			),
			232 => 
			array (
				'id' => 1733,
				'id_provincia' => 13,
				'cod_municipio' => 37,
				'DC' => 5,
				'nombre' => 'Cózar',
			),
			233 => 
			array (
				'id' => 1734,
				'id_provincia' => 14,
				'cod_municipio' => 37,
				'DC' => 0,
				'nombre' => 'Iznájar',
			),
			234 => 
			array (
				'id' => 1735,
				'id_provincia' => 15,
				'cod_municipio' => 37,
				'DC' => 3,
				'nombre' => 'Fisterra',
			),
			235 => 
			array (
				'id' => 1736,
				'id_provincia' => 17,
				'cod_municipio' => 37,
				'DC' => 2,
				'nombre' => 'Campelles',
			),
			236 => 
			array (
				'id' => 1737,
				'id_provincia' => 18,
				'cod_municipio' => 37,
				'DC' => 8,
				'nombre' => 'Calicasas',
			),
			237 => 
			array (
				'id' => 1738,
				'id_provincia' => 19,
				'cod_municipio' => 37,
				'DC' => 1,
				'nombre' => 'Arbancón',
			),
			238 => 
			array (
				'id' => 1739,
				'id_provincia' => 20,
				'cod_municipio' => 37,
				'DC' => 5,
				'nombre' => 'Gaintza',
			),
			239 => 
			array (
				'id' => 1740,
				'id_provincia' => 21,
				'cod_municipio' => 37,
				'DC' => 2,
				'nombre' => 'Granado, El',
			),
			240 => 
			array (
				'id' => 1741,
				'id_provincia' => 22,
				'cod_municipio' => 37,
				'DC' => 7,
				'nombre' => 'Arguis',
			),
			241 => 
			array (
				'id' => 1742,
				'id_provincia' => 23,
				'cod_municipio' => 37,
				'DC' => 3,
				'nombre' => 'Génave',
			),
			242 => 
			array (
				'id' => 1743,
				'id_provincia' => 24,
				'cod_municipio' => 37,
				'DC' => 8,
				'nombre' => 'Cármenes',
			),
			243 => 
			array (
				'id' => 1744,
				'id_provincia' => 25,
				'cod_municipio' => 37,
				'DC' => 1,
				'nombre' => 'Avellanes i Santa Linya, Les',
			),
			244 => 
			array (
				'id' => 1745,
				'id_provincia' => 26,
				'cod_municipio' => 37,
				'DC' => 4,
				'nombre' => 'Camprovín',
			),
			245 => 
			array (
				'id' => 1746,
				'id_provincia' => 27,
				'cod_municipio' => 37,
				'DC' => 0,
				'nombre' => 'Nogais, As',
			),
			246 => 
			array (
				'id' => 1747,
				'id_provincia' => 28,
				'cod_municipio' => 37,
				'DC' => 6,
				'nombre' => 'Cenicientos',
			),
			247 => 
			array (
				'id' => 1748,
				'id_provincia' => 29,
				'cod_municipio' => 37,
				'DC' => 9,
				'nombre' => 'Cartajima',
			),
			248 => 
			array (
				'id' => 1749,
				'id_provincia' => 30,
				'cod_municipio' => 37,
				'DC' => 3,
				'nombre' => 'Torre-Pacheco',
			),
			249 => 
			array (
				'id' => 1750,
				'id_provincia' => 31,
				'cod_municipio' => 37,
				'DC' => 0,
				'nombre' => 'Arruazu',
			),
			250 => 
			array (
				'id' => 1751,
				'id_provincia' => 32,
				'cod_municipio' => 37,
				'DC' => 5,
				'nombre' => 'Xunqueira de Espadanedo',
			),
			251 => 
			array (
				'id' => 1752,
				'id_provincia' => 33,
				'cod_municipio' => 37,
				'DC' => 1,
				'nombre' => 'Mieres',
			),
			252 => 
			array (
				'id' => 1753,
				'id_provincia' => 34,
				'cod_municipio' => 37,
				'DC' => 6,
				'nombre' => 'Buenavista de Valdavia',
			),
			253 => 
			array (
				'id' => 1754,
				'id_provincia' => 36,
				'cod_municipio' => 37,
				'DC' => 2,
				'nombre' => 'Pazos de Borbén',
			),
			254 => 
			array (
				'id' => 1755,
				'id_provincia' => 37,
				'cod_municipio' => 37,
				'DC' => 8,
				'nombre' => 'Atalaya, La',
			),
			255 => 
			array (
				'id' => 1756,
				'id_provincia' => 38,
				'cod_municipio' => 37,
				'DC' => 4,
				'nombre' => 'Santa Cruz de la Palma',
			),
			256 => 
			array (
				'id' => 1757,
				'id_provincia' => 39,
				'cod_municipio' => 37,
				'DC' => 7,
				'nombre' => 'Liérganes',
			),
			257 => 
			array (
				'id' => 1758,
				'id_provincia' => 40,
				'cod_municipio' => 37,
				'DC' => 1,
				'nombre' => 'Calabazas de Fuentidueña',
			),
			258 => 
			array (
				'id' => 1759,
				'id_provincia' => 41,
				'cod_municipio' => 37,
				'DC' => 8,
				'nombre' => 'Corrales, Los',
			),
			259 => 
			array (
				'id' => 1760,
				'id_provincia' => 42,
				'cod_municipio' => 37,
				'DC' => 3,
				'nombre' => 'Bliecos',
			),
			260 => 
			array (
				'id' => 1761,
				'id_provincia' => 43,
				'cod_municipio' => 37,
				'DC' => 9,
				'nombre' => 'Calafell',
			),
			261 => 
			array (
				'id' => 1762,
				'id_provincia' => 44,
				'cod_municipio' => 37,
				'DC' => 4,
				'nombre' => 'Beceite',
			),
			262 => 
			array (
				'id' => 1763,
				'id_provincia' => 45,
				'cod_municipio' => 37,
				'DC' => 7,
				'nombre' => 'Carpio de Tajo, El',
			),
			263 => 
			array (
				'id' => 1764,
				'id_provincia' => 46,
				'cod_municipio' => 37,
				'DC' => 0,
				'nombre' => 'Alqueria de la Comtessa, l\'',
			),
			264 => 
			array (
				'id' => 1765,
				'id_provincia' => 47,
				'cod_municipio' => 37,
				'DC' => 6,
				'nombre' => 'Castrejón de Trabancos',
			),
			265 => 
			array (
				'id' => 1766,
				'id_provincia' => 48,
				'cod_municipio' => 37,
				'DC' => 2,
				'nombre' => 'Galdames',
			),
			266 => 
			array (
				'id' => 1767,
				'id_provincia' => 49,
				'cod_municipio' => 37,
				'DC' => 5,
				'nombre' => 'Carbellino',
			),
			267 => 
			array (
				'id' => 1768,
				'id_provincia' => 50,
				'cod_municipio' => 37,
				'DC' => 8,
				'nombre' => 'Atea',
			),
			268 => 
			array (
				'id' => 1769,
				'id_provincia' => 2,
				'cod_municipio' => 38,
				'DC' => 7,
				'nombre' => 'Herrera, La',
			),
			269 => 
			array (
				'id' => 1770,
				'id_provincia' => 3,
				'cod_municipio' => 38,
				'DC' => 3,
				'nombre' => 'Benimarfull',
			),
			270 => 
			array (
				'id' => 1771,
				'id_provincia' => 4,
				'cod_municipio' => 38,
				'DC' => 8,
				'nombre' => 'Dalías',
			),
			271 => 
			array (
				'id' => 1772,
				'id_provincia' => 5,
				'cod_municipio' => 38,
				'DC' => 1,
				'nombre' => 'Bonilla de la Sierra',
			),
			272 => 
			array (
				'id' => 1773,
				'id_provincia' => 6,
				'cod_municipio' => 38,
				'DC' => 4,
				'nombre' => 'Cordobilla de Lácara',
			),
			273 => 
			array (
				'id' => 1774,
				'id_provincia' => 7,
				'cod_municipio' => 38,
				'DC' => 0,
				'nombre' => 'Montuïri',
			),
			274 => 
			array (
				'id' => 1775,
				'id_provincia' => 8,
				'cod_municipio' => 38,
				'DC' => 6,
				'nombre' => 'Callús',
			),
			275 => 
			array (
				'id' => 1776,
				'id_provincia' => 9,
				'cod_municipio' => 38,
				'DC' => 9,
				'nombre' => 'Barbadillo del Mercado',
			),
			276 => 
			array (
				'id' => 1777,
				'id_provincia' => 10,
				'cod_municipio' => 38,
				'DC' => 3,
				'nombre' => 'Cachorrilla',
			),
			277 => 
			array (
				'id' => 1778,
				'id_provincia' => 11,
				'cod_municipio' => 38,
				'DC' => 0,
				'nombre' => 'Ubrique',
			),
			278 => 
			array (
				'id' => 1779,
				'id_provincia' => 12,
				'cod_municipio' => 38,
				'DC' => 5,
				'nombre' => 'Castellfort',
			),
			279 => 
			array (
				'id' => 1780,
				'id_provincia' => 13,
				'cod_municipio' => 38,
				'DC' => 1,
				'nombre' => 'Chillón',
			),
			280 => 
			array (
				'id' => 1781,
				'id_provincia' => 14,
				'cod_municipio' => 38,
				'DC' => 6,
				'nombre' => 'Lucena',
			),
			281 => 
			array (
				'id' => 1782,
				'id_provincia' => 15,
				'cod_municipio' => 38,
				'DC' => 9,
				'nombre' => 'Frades',
			),
			282 => 
			array (
				'id' => 1783,
				'id_provincia' => 16,
				'cod_municipio' => 38,
				'DC' => 2,
				'nombre' => 'Buciegas',
			),
			283 => 
			array (
				'id' => 1784,
				'id_provincia' => 17,
				'cod_municipio' => 38,
				'DC' => 8,
				'nombre' => 'Campllong',
			),
			284 => 
			array (
				'id' => 1785,
				'id_provincia' => 18,
				'cod_municipio' => 38,
				'DC' => 4,
				'nombre' => 'Campotéjar',
			),
			285 => 
			array (
				'id' => 1786,
				'id_provincia' => 19,
				'cod_municipio' => 38,
				'DC' => 7,
				'nombre' => 'Arbeteta',
			),
			286 => 
			array (
				'id' => 1787,
				'id_provincia' => 20,
				'cod_municipio' => 38,
				'DC' => 1,
				'nombre' => 'Gabiria',
			),
			287 => 
			array (
				'id' => 1788,
				'id_provincia' => 21,
				'cod_municipio' => 38,
				'DC' => 8,
				'nombre' => 'Higuera de la Sierra',
			),
			288 => 
			array (
				'id' => 1789,
				'id_provincia' => 23,
				'cod_municipio' => 38,
				'DC' => 9,
				'nombre' => 'Guardia de Jaén, La',
			),
			289 => 
			array (
				'id' => 1790,
				'id_provincia' => 24,
				'cod_municipio' => 38,
				'DC' => 4,
				'nombre' => 'Carracedelo',
			),
			290 => 
			array (
				'id' => 1791,
				'id_provincia' => 25,
				'cod_municipio' => 38,
				'DC' => 7,
				'nombre' => 'Aitona',
			),
			291 => 
			array (
				'id' => 1792,
				'id_provincia' => 26,
				'cod_municipio' => 38,
				'DC' => 0,
				'nombre' => 'Canales de la Sierra',
			),
			292 => 
			array (
				'id' => 1793,
				'id_provincia' => 27,
				'cod_municipio' => 38,
				'DC' => 6,
				'nombre' => 'Ourol',
			),
			293 => 
			array (
				'id' => 1794,
				'id_provincia' => 28,
				'cod_municipio' => 38,
				'DC' => 2,
				'nombre' => 'Cercedilla',
			),
			294 => 
			array (
				'id' => 1795,
				'id_provincia' => 29,
				'cod_municipio' => 38,
				'DC' => 5,
				'nombre' => 'Cártama',
			),
			295 => 
			array (
				'id' => 1796,
				'id_provincia' => 30,
				'cod_municipio' => 38,
				'DC' => 9,
				'nombre' => 'Torres de Cotillas, Las',
			),
			296 => 
			array (
				'id' => 1797,
				'id_provincia' => 31,
				'cod_municipio' => 38,
				'DC' => 6,
				'nombre' => 'Artajona',
			),
			297 => 
			array (
				'id' => 1798,
				'id_provincia' => 32,
				'cod_municipio' => 38,
				'DC' => 1,
				'nombre' => 'Larouco',
			),
			298 => 
			array (
				'id' => 1799,
				'id_provincia' => 33,
				'cod_municipio' => 38,
				'DC' => 7,
				'nombre' => 'Morcín',
			),
			299 => 
			array (
				'id' => 1800,
				'id_provincia' => 34,
				'cod_municipio' => 38,
				'DC' => 2,
				'nombre' => 'Bustillo de la Vega',
			),
			300 => 
			array (
				'id' => 1801,
				'id_provincia' => 36,
				'cod_municipio' => 38,
				'DC' => 8,
				'nombre' => 'Pontevedra',
			),
			301 => 
			array (
				'id' => 1802,
				'id_provincia' => 37,
				'cod_municipio' => 38,
				'DC' => 4,
				'nombre' => 'Babilafuente',
			),
			302 => 
			array (
				'id' => 1803,
				'id_provincia' => 38,
				'cod_municipio' => 38,
				'DC' => 0,
				'nombre' => 'Santa Cruz de Tenerife',
			),
			303 => 
			array (
				'id' => 1804,
				'id_provincia' => 39,
				'cod_municipio' => 38,
				'DC' => 3,
				'nombre' => 'Limpias',
			),
			304 => 
			array (
				'id' => 1805,
				'id_provincia' => 41,
				'cod_municipio' => 38,
				'DC' => 4,
				'nombre' => 'Dos Hermanas',
			),
			305 => 
			array (
				'id' => 1806,
				'id_provincia' => 42,
				'cod_municipio' => 38,
				'DC' => 9,
				'nombre' => 'Borjabad',
			),
			306 => 
			array (
				'id' => 1807,
				'id_provincia' => 43,
				'cod_municipio' => 38,
				'DC' => 5,
				'nombre' => 'Cambrils',
			),
			307 => 
			array (
				'id' => 1808,
				'id_provincia' => 44,
				'cod_municipio' => 38,
				'DC' => 0,
				'nombre' => 'Belmonte de San José',
			),
			308 => 
			array (
				'id' => 1809,
				'id_provincia' => 45,
				'cod_municipio' => 38,
				'DC' => 3,
				'nombre' => 'Carranque',
			),
			309 => 
			array (
				'id' => 1810,
				'id_provincia' => 46,
				'cod_municipio' => 38,
				'DC' => 6,
				'nombre' => 'Andilla',
			),
			310 => 
			array (
				'id' => 1811,
				'id_provincia' => 47,
				'cod_municipio' => 38,
				'DC' => 2,
				'nombre' => 'Castrillo de Duero',
			),
			311 => 
			array (
				'id' => 1812,
				'id_provincia' => 48,
				'cod_municipio' => 38,
				'DC' => 8,
				'nombre' => 'Gamiz-Fika',
			),
			312 => 
			array (
				'id' => 1813,
				'id_provincia' => 49,
				'cod_municipio' => 38,
				'DC' => 1,
				'nombre' => 'Casaseca de Campeán',
			),
			313 => 
			array (
				'id' => 1814,
				'id_provincia' => 50,
				'cod_municipio' => 38,
				'DC' => 4,
				'nombre' => 'Ateca',
			),
			314 => 
			array (
				'id' => 1815,
				'id_provincia' => 1,
				'cod_municipio' => 39,
				'DC' => 5,
				'nombre' => 'Moreda de Álava/Moreda Araba',
			),
			315 => 
			array (
				'id' => 1816,
				'id_provincia' => 2,
				'cod_municipio' => 39,
				'DC' => 0,
				'nombre' => 'Higueruela',
			),
			316 => 
			array (
				'id' => 1817,
				'id_provincia' => 3,
				'cod_municipio' => 39,
				'DC' => 6,
				'nombre' => 'Benimassot',
			),
			317 => 
			array (
				'id' => 1818,
				'id_provincia' => 5,
				'cod_municipio' => 39,
				'DC' => 4,
				'nombre' => 'Brabos',
			),
			318 => 
			array (
				'id' => 1819,
				'id_provincia' => 6,
				'cod_municipio' => 39,
				'DC' => 7,
				'nombre' => 'Coronada, La',
			),
			319 => 
			array (
				'id' => 1820,
				'id_provincia' => 7,
				'cod_municipio' => 39,
				'DC' => 3,
				'nombre' => 'Muro',
			),
			320 => 
			array (
				'id' => 1821,
				'id_provincia' => 8,
				'cod_municipio' => 39,
				'DC' => 9,
				'nombre' => 'Campins',
			),
			321 => 
			array (
				'id' => 1822,
				'id_provincia' => 9,
				'cod_municipio' => 39,
				'DC' => 2,
				'nombre' => 'Barbadillo del Pez',
			),
			322 => 
			array (
				'id' => 1823,
				'id_provincia' => 10,
				'cod_municipio' => 39,
				'DC' => 6,
				'nombre' => 'Cadalso',
			),
			323 => 
			array (
				'id' => 1824,
				'id_provincia' => 11,
				'cod_municipio' => 39,
				'DC' => 3,
				'nombre' => 'Vejer de la Frontera',
			),
			324 => 
			array (
				'id' => 1825,
				'id_provincia' => 12,
				'cod_municipio' => 39,
				'DC' => 8,
				'nombre' => 'Castellnovo',
			),
			325 => 
			array (
				'id' => 1826,
				'id_provincia' => 13,
				'cod_municipio' => 39,
				'DC' => 4,
				'nombre' => 'Daimiel',
			),
			326 => 
			array (
				'id' => 1827,
				'id_provincia' => 14,
				'cod_municipio' => 39,
				'DC' => 9,
				'nombre' => 'Luque',
			),
			327 => 
			array (
				'id' => 1828,
				'id_provincia' => 15,
				'cod_municipio' => 39,
				'DC' => 2,
				'nombre' => 'Irixoa',
			),
			328 => 
			array (
				'id' => 1829,
				'id_provincia' => 16,
				'cod_municipio' => 39,
				'DC' => 5,
				'nombre' => 'Buenache de Alarcón',
			),
			329 => 
			array (
				'id' => 1830,
				'id_provincia' => 17,
				'cod_municipio' => 39,
				'DC' => 1,
				'nombre' => 'Camprodon',
			),
			330 => 
			array (
				'id' => 1831,
				'id_provincia' => 18,
				'cod_municipio' => 39,
				'DC' => 7,
				'nombre' => 'Caniles',
			),
			331 => 
			array (
				'id' => 1832,
				'id_provincia' => 19,
				'cod_municipio' => 39,
				'DC' => 0,
				'nombre' => 'Argecilla',
			),
			332 => 
			array (
				'id' => 1833,
				'id_provincia' => 20,
				'cod_municipio' => 39,
				'DC' => 4,
				'nombre' => 'Getaria',
			),
			333 => 
			array (
				'id' => 1834,
				'id_provincia' => 21,
				'cod_municipio' => 39,
				'DC' => 1,
				'nombre' => 'Hinojales',
			),
			334 => 
			array (
				'id' => 1835,
				'id_provincia' => 22,
				'cod_municipio' => 39,
				'DC' => 6,
				'nombre' => 'Ayerbe',
			),
			335 => 
			array (
				'id' => 1836,
				'id_provincia' => 23,
				'cod_municipio' => 39,
				'DC' => 2,
				'nombre' => 'Guarromán',
			),
			336 => 
			array (
				'id' => 1837,
				'id_provincia' => 24,
				'cod_municipio' => 39,
				'DC' => 7,
				'nombre' => 'Carrizo',
			),
			337 => 
			array (
				'id' => 1838,
				'id_provincia' => 25,
				'cod_municipio' => 39,
				'DC' => 0,
				'nombre' => 'Baix Pallars',
			),
			338 => 
			array (
				'id' => 1839,
				'id_provincia' => 26,
				'cod_municipio' => 39,
				'DC' => 3,
				'nombre' => 'Canillas de Río Tuerto',
			),
			339 => 
			array (
				'id' => 1840,
				'id_provincia' => 27,
				'cod_municipio' => 39,
				'DC' => 9,
				'nombre' => 'Outeiro de Rei',
			),
			340 => 
			array (
				'id' => 1841,
				'id_provincia' => 28,
				'cod_municipio' => 39,
				'DC' => 5,
				'nombre' => 'Cervera de Buitrago',
			),
			341 => 
			array (
				'id' => 1842,
				'id_provincia' => 29,
				'cod_municipio' => 39,
				'DC' => 8,
				'nombre' => 'Casabermeja',
			),
			342 => 
			array (
				'id' => 1843,
				'id_provincia' => 30,
				'cod_municipio' => 39,
				'DC' => 2,
				'nombre' => 'Totana',
			),
			343 => 
			array (
				'id' => 1844,
				'id_provincia' => 31,
				'cod_municipio' => 39,
				'DC' => 9,
				'nombre' => 'Artazu',
			),
			344 => 
			array (
				'id' => 1845,
				'id_provincia' => 32,
				'cod_municipio' => 39,
				'DC' => 4,
				'nombre' => 'Laza',
			),
			345 => 
			array (
				'id' => 1846,
				'id_provincia' => 33,
				'cod_municipio' => 39,
				'DC' => 0,
				'nombre' => 'Muros de Nalón',
			),
			346 => 
			array (
				'id' => 1847,
				'id_provincia' => 34,
				'cod_municipio' => 39,
				'DC' => 5,
				'nombre' => 'Bustillo del Páramo de Carrión',
			),
			347 => 
			array (
				'id' => 1848,
				'id_provincia' => 36,
				'cod_municipio' => 39,
				'DC' => 1,
				'nombre' => 'Porriño, O',
			),
			348 => 
			array (
				'id' => 1849,
				'id_provincia' => 37,
				'cod_municipio' => 39,
				'DC' => 7,
				'nombre' => 'Bañobárez',
			),
			349 => 
			array (
				'id' => 1850,
				'id_provincia' => 38,
				'cod_municipio' => 39,
				'DC' => 3,
				'nombre' => 'Santa Úrsula',
			),
			350 => 
			array (
				'id' => 1851,
				'id_provincia' => 39,
				'cod_municipio' => 39,
				'DC' => 6,
				'nombre' => 'Luena',
			),
			351 => 
			array (
				'id' => 1852,
				'id_provincia' => 40,
				'cod_municipio' => 39,
				'DC' => 0,
				'nombre' => 'Campo de San Pedro',
			),
			352 => 
			array (
				'id' => 1853,
				'id_provincia' => 41,
				'cod_municipio' => 39,
				'DC' => 7,
				'nombre' => 'Écija',
			),
			353 => 
			array (
				'id' => 1854,
				'id_provincia' => 42,
				'cod_municipio' => 39,
				'DC' => 2,
				'nombre' => 'Borobia',
			),
			354 => 
			array (
				'id' => 1855,
				'id_provincia' => 43,
				'cod_municipio' => 39,
				'DC' => 8,
				'nombre' => 'Capafonts',
			),
			355 => 
			array (
				'id' => 1856,
				'id_provincia' => 44,
				'cod_municipio' => 39,
				'DC' => 3,
				'nombre' => 'Bello',
			),
			356 => 
			array (
				'id' => 1857,
				'id_provincia' => 45,
				'cod_municipio' => 39,
				'DC' => 6,
				'nombre' => 'Carriches',
			),
			357 => 
			array (
				'id' => 1858,
				'id_provincia' => 46,
				'cod_municipio' => 39,
				'DC' => 9,
				'nombre' => 'Anna',
			),
			358 => 
			array (
				'id' => 1859,
				'id_provincia' => 47,
				'cod_municipio' => 39,
				'DC' => 5,
				'nombre' => 'Castrillo-Tejeriego',
			),
			359 => 
			array (
				'id' => 1860,
				'id_provincia' => 48,
				'cod_municipio' => 39,
				'DC' => 1,
				'nombre' => 'Garai',
			),
			360 => 
			array (
				'id' => 1861,
				'id_provincia' => 49,
				'cod_municipio' => 39,
				'DC' => 4,
				'nombre' => 'Casaseca de las Chanas',
			),
			361 => 
			array (
				'id' => 1862,
				'id_provincia' => 50,
				'cod_municipio' => 39,
				'DC' => 7,
				'nombre' => 'Azuara',
			),
			362 => 
			array (
				'id' => 1863,
				'id_provincia' => 2,
				'cod_municipio' => 40,
				'DC' => 4,
				'nombre' => 'Hoya-Gonzalo',
			),
			363 => 
			array (
				'id' => 1864,
				'id_provincia' => 3,
				'cod_municipio' => 40,
				'DC' => 0,
				'nombre' => 'Benimeli',
			),
			364 => 
			array (
				'id' => 1865,
				'id_provincia' => 5,
				'cod_municipio' => 40,
				'DC' => 8,
				'nombre' => 'Bularros',
			),
			365 => 
			array (
				'id' => 1866,
				'id_provincia' => 6,
				'cod_municipio' => 40,
				'DC' => 1,
				'nombre' => 'Corte de Peleas',
			),
			366 => 
			array (
				'id' => 1867,
				'id_provincia' => 7,
				'cod_municipio' => 40,
				'DC' => 7,
				'nombre' => 'Palma',
			),
			367 => 
			array (
				'id' => 1868,
				'id_provincia' => 8,
				'cod_municipio' => 40,
				'DC' => 3,
				'nombre' => 'Canet de Mar',
			),
			368 => 
			array (
				'id' => 1869,
				'id_provincia' => 10,
				'cod_municipio' => 40,
				'DC' => 0,
				'nombre' => 'Calzadilla',
			),
			369 => 
			array (
				'id' => 1870,
				'id_provincia' => 11,
				'cod_municipio' => 40,
				'DC' => 7,
				'nombre' => 'Villaluenga del Rosario',
			),
			370 => 
			array (
				'id' => 1871,
				'id_provincia' => 12,
				'cod_municipio' => 40,
				'DC' => 2,
				'nombre' => 'Castellón de la Plana/Castelló de la Plana',
			),
			371 => 
			array (
				'id' => 1872,
				'id_provincia' => 13,
				'cod_municipio' => 40,
				'DC' => 8,
				'nombre' => 'Fernán Caballero',
			),
			372 => 
			array (
				'id' => 1873,
				'id_provincia' => 14,
				'cod_municipio' => 40,
				'DC' => 3,
				'nombre' => 'Montalbán de Córdoba',
			),
			373 => 
			array (
				'id' => 1874,
				'id_provincia' => 15,
				'cod_municipio' => 40,
				'DC' => 6,
				'nombre' => 'Laxe',
			),
			374 => 
			array (
				'id' => 1875,
				'id_provincia' => 16,
				'cod_municipio' => 40,
				'DC' => 9,
				'nombre' => 'Buenache de la Sierra',
			),
			375 => 
			array (
				'id' => 1876,
				'id_provincia' => 17,
				'cod_municipio' => 40,
				'DC' => 5,
				'nombre' => 'Canet d\'Adri',
			),
			376 => 
			array (
				'id' => 1877,
				'id_provincia' => 18,
				'cod_municipio' => 40,
				'DC' => 1,
				'nombre' => 'Cáñar',
			),
			377 => 
			array (
				'id' => 1878,
				'id_provincia' => 19,
				'cod_municipio' => 40,
				'DC' => 4,
				'nombre' => 'Armallones',
			),
			378 => 
			array (
				'id' => 1879,
				'id_provincia' => 20,
				'cod_municipio' => 40,
				'DC' => 8,
				'nombre' => 'Hernani',
			),
			379 => 
			array (
				'id' => 1880,
				'id_provincia' => 21,
				'cod_municipio' => 40,
				'DC' => 5,
				'nombre' => 'Hinojos',
			),
			380 => 
			array (
				'id' => 1881,
				'id_provincia' => 22,
				'cod_municipio' => 40,
				'DC' => 0,
				'nombre' => 'Azanuy-Alins',
			),
			381 => 
			array (
				'id' => 1882,
				'id_provincia' => 23,
				'cod_municipio' => 40,
				'DC' => 6,
				'nombre' => 'Lahiguera',
			),
			382 => 
			array (
				'id' => 1883,
				'id_provincia' => 24,
				'cod_municipio' => 40,
				'DC' => 1,
				'nombre' => 'Carrocera',
			),
			383 => 
			array (
				'id' => 1884,
				'id_provincia' => 25,
				'cod_municipio' => 40,
				'DC' => 4,
				'nombre' => 'Balaguer',
			),
			384 => 
			array (
				'id' => 1885,
				'id_provincia' => 26,
				'cod_municipio' => 40,
				'DC' => 7,
				'nombre' => 'Cañas',
			),
			385 => 
			array (
				'id' => 1886,
				'id_provincia' => 27,
				'cod_municipio' => 40,
				'DC' => 3,
				'nombre' => 'Palas de Rei',
			),
			386 => 
			array (
				'id' => 1887,
				'id_provincia' => 28,
				'cod_municipio' => 40,
				'DC' => 9,
				'nombre' => 'Ciempozuelos',
			),
			387 => 
			array (
				'id' => 1888,
				'id_provincia' => 29,
				'cod_municipio' => 40,
				'DC' => 2,
				'nombre' => 'Casarabonela',
			),
			388 => 
			array (
				'id' => 1889,
				'id_provincia' => 30,
				'cod_municipio' => 40,
				'DC' => 6,
				'nombre' => 'Ulea',
			),
			389 => 
			array (
				'id' => 1890,
				'id_provincia' => 31,
				'cod_municipio' => 40,
				'DC' => 3,
				'nombre' => 'Atez',
			),
			390 => 
			array (
				'id' => 1891,
				'id_provincia' => 32,
				'cod_municipio' => 40,
				'DC' => 8,
				'nombre' => 'Leiro',
			),
			391 => 
			array (
				'id' => 1892,
				'id_provincia' => 33,
				'cod_municipio' => 40,
				'DC' => 4,
				'nombre' => 'Nava',
			),
			392 => 
			array (
				'id' => 1893,
				'id_provincia' => 36,
				'cod_municipio' => 40,
				'DC' => 5,
				'nombre' => 'Portas',
			),
			393 => 
			array (
				'id' => 1894,
				'id_provincia' => 37,
				'cod_municipio' => 40,
				'DC' => 1,
				'nombre' => 'Barbadillo',
			),
			394 => 
			array (
				'id' => 1895,
				'id_provincia' => 38,
				'cod_municipio' => 40,
				'DC' => 7,
				'nombre' => 'Santiago del Teide',
			),
			395 => 
			array (
				'id' => 1896,
				'id_provincia' => 39,
				'cod_municipio' => 40,
				'DC' => 0,
				'nombre' => 'Marina de Cudeyo',
			),
			396 => 
			array (
				'id' => 1897,
				'id_provincia' => 40,
				'cod_municipio' => 40,
				'DC' => 4,
				'nombre' => 'Cantalejo',
			),
			397 => 
			array (
				'id' => 1898,
				'id_provincia' => 41,
				'cod_municipio' => 40,
				'DC' => 1,
				'nombre' => 'Espartinas',
			),
			398 => 
			array (
				'id' => 1899,
				'id_provincia' => 43,
				'cod_municipio' => 40,
				'DC' => 2,
				'nombre' => 'Capçanes',
			),
			399 => 
			array (
				'id' => 1900,
				'id_provincia' => 44,
				'cod_municipio' => 40,
				'DC' => 7,
				'nombre' => 'Berge',
			),
			400 => 
			array (
				'id' => 1901,
				'id_provincia' => 45,
				'cod_municipio' => 40,
				'DC' => 0,
				'nombre' => 'Casar de Escalona, El',
			),
			401 => 
			array (
				'id' => 1902,
				'id_provincia' => 46,
				'cod_municipio' => 40,
				'DC' => 3,
				'nombre' => 'Antella',
			),
			402 => 
			array (
				'id' => 1903,
				'id_provincia' => 47,
				'cod_municipio' => 40,
				'DC' => 9,
				'nombre' => 'Castrobol',
			),
			403 => 
			array (
				'id' => 1904,
				'id_provincia' => 48,
				'cod_municipio' => 40,
				'DC' => 5,
				'nombre' => 'Gatika',
			),
			404 => 
			array (
				'id' => 1905,
				'id_provincia' => 49,
				'cod_municipio' => 40,
				'DC' => 8,
				'nombre' => 'Castrillo de la Guareña',
			),
			405 => 
			array (
				'id' => 1906,
				'id_provincia' => 50,
				'cod_municipio' => 40,
				'DC' => 1,
				'nombre' => 'Badules',
			),
			406 => 
			array (
				'id' => 1907,
				'id_provincia' => 1,
				'cod_municipio' => 41,
				'DC' => 6,
				'nombre' => 'Navaridas',
			),
			407 => 
			array (
				'id' => 1908,
				'id_provincia' => 2,
				'cod_municipio' => 41,
				'DC' => 1,
				'nombre' => 'Jorquera',
			),
			408 => 
			array (
				'id' => 1909,
				'id_provincia' => 3,
				'cod_municipio' => 41,
				'DC' => 7,
				'nombre' => 'Benissa',
			),
			409 => 
			array (
				'id' => 1910,
				'id_provincia' => 4,
				'cod_municipio' => 41,
				'DC' => 2,
				'nombre' => 'Enix',
			),
			410 => 
			array (
				'id' => 1911,
				'id_provincia' => 5,
				'cod_municipio' => 41,
				'DC' => 5,
				'nombre' => 'Burgohondo',
			),
			411 => 
			array (
				'id' => 1912,
				'id_provincia' => 6,
				'cod_municipio' => 41,
				'DC' => 8,
				'nombre' => 'Cristina',
			),
			412 => 
			array (
				'id' => 1913,
				'id_provincia' => 7,
				'cod_municipio' => 41,
				'DC' => 4,
				'nombre' => 'Petra',
			),
			413 => 
			array (
				'id' => 1914,
				'id_provincia' => 8,
				'cod_municipio' => 41,
				'DC' => 0,
				'nombre' => 'Canovelles',
			),
			414 => 
			array (
				'id' => 1915,
				'id_provincia' => 9,
				'cod_municipio' => 41,
				'DC' => 3,
				'nombre' => 'Barrio de Muñó',
			),
			415 => 
			array (
				'id' => 1916,
				'id_provincia' => 10,
				'cod_municipio' => 41,
				'DC' => 7,
				'nombre' => 'Caminomorisco',
			),
			416 => 
			array (
				'id' => 1917,
				'id_provincia' => 11,
				'cod_municipio' => 41,
				'DC' => 4,
				'nombre' => 'Villamartín',
			),
			417 => 
			array (
				'id' => 1918,
				'id_provincia' => 12,
				'cod_municipio' => 41,
				'DC' => 9,
				'nombre' => 'Castillo de Villamalefa',
			),
			418 => 
			array (
				'id' => 1919,
				'id_provincia' => 13,
				'cod_municipio' => 41,
				'DC' => 5,
				'nombre' => 'Fontanarejo',
			),
			419 => 
			array (
				'id' => 1920,
				'id_provincia' => 14,
				'cod_municipio' => 41,
				'DC' => 0,
				'nombre' => 'Montemayor',
			),
			420 => 
			array (
				'id' => 1921,
				'id_provincia' => 15,
				'cod_municipio' => 41,
				'DC' => 3,
				'nombre' => 'Laracha, A',
			),
			421 => 
			array (
				'id' => 1922,
				'id_provincia' => 16,
				'cod_municipio' => 41,
				'DC' => 6,
				'nombre' => 'Buendía',
			),
			422 => 
			array (
				'id' => 1923,
				'id_provincia' => 17,
				'cod_municipio' => 41,
				'DC' => 2,
				'nombre' => 'Cantallops',
			),
			423 => 
			array (
				'id' => 1924,
				'id_provincia' => 19,
				'cod_municipio' => 41,
				'DC' => 1,
				'nombre' => 'Armuña de Tajuña',
			),
			424 => 
			array (
				'id' => 1925,
				'id_provincia' => 20,
				'cod_municipio' => 41,
				'DC' => 5,
				'nombre' => 'Hernialde',
			),
			425 => 
			array (
				'id' => 1926,
				'id_provincia' => 21,
				'cod_municipio' => 41,
				'DC' => 2,
				'nombre' => 'Huelva',
			),
			426 => 
			array (
				'id' => 1927,
				'id_provincia' => 22,
				'cod_municipio' => 41,
				'DC' => 7,
				'nombre' => 'Azara',
			),
			427 => 
			array (
				'id' => 1928,
				'id_provincia' => 23,
				'cod_municipio' => 41,
				'DC' => 3,
				'nombre' => 'Higuera de Calatrava',
			),
			428 => 
			array (
				'id' => 1929,
				'id_provincia' => 24,
				'cod_municipio' => 41,
				'DC' => 8,
				'nombre' => 'Carucedo',
			),
			429 => 
			array (
				'id' => 1930,
				'id_provincia' => 25,
				'cod_municipio' => 41,
				'DC' => 1,
				'nombre' => 'Barbens',
			),
			430 => 
			array (
				'id' => 1931,
				'id_provincia' => 26,
				'cod_municipio' => 41,
				'DC' => 4,
				'nombre' => 'Cárdenas',
			),
			431 => 
			array (
				'id' => 1932,
				'id_provincia' => 27,
				'cod_municipio' => 41,
				'DC' => 0,
				'nombre' => 'Pantón',
			),
			432 => 
			array (
				'id' => 1933,
				'id_provincia' => 28,
				'cod_municipio' => 41,
				'DC' => 6,
				'nombre' => 'Cobeña',
			),
			433 => 
			array (
				'id' => 1934,
				'id_provincia' => 29,
				'cod_municipio' => 41,
				'DC' => 9,
				'nombre' => 'Casares',
			),
			434 => 
			array (
				'id' => 1935,
				'id_provincia' => 30,
				'cod_municipio' => 41,
				'DC' => 3,
				'nombre' => 'Unión, La',
			),
			435 => 
			array (
				'id' => 1936,
				'id_provincia' => 31,
				'cod_municipio' => 41,
				'DC' => 0,
				'nombre' => 'Ayegui/Aiegi',
			),
			436 => 
			array (
				'id' => 1937,
				'id_provincia' => 32,
				'cod_municipio' => 41,
				'DC' => 5,
				'nombre' => 'Lobeira',
			),
			437 => 
			array (
				'id' => 1938,
				'id_provincia' => 33,
				'cod_municipio' => 41,
				'DC' => 1,
				'nombre' => 'Navia',
			),
			438 => 
			array (
				'id' => 1939,
				'id_provincia' => 34,
				'cod_municipio' => 41,
				'DC' => 6,
				'nombre' => 'Calahorra de Boedo',
			),
			439 => 
			array (
				'id' => 1940,
				'id_provincia' => 36,
				'cod_municipio' => 41,
				'DC' => 2,
				'nombre' => 'Poio',
			),
			440 => 
			array (
				'id' => 1941,
				'id_provincia' => 37,
				'cod_municipio' => 41,
				'DC' => 8,
				'nombre' => 'Barbalos',
			),
			441 => 
			array (
				'id' => 1942,
				'id_provincia' => 38,
				'cod_municipio' => 41,
				'DC' => 4,
				'nombre' => 'Sauzal, El',
			),
			442 => 
			array (
				'id' => 1943,
				'id_provincia' => 39,
				'cod_municipio' => 41,
				'DC' => 7,
				'nombre' => 'Mazcuerras',
			),
			443 => 
			array (
				'id' => 1944,
				'id_provincia' => 40,
				'cod_municipio' => 41,
				'DC' => 1,
				'nombre' => 'Cantimpalos',
			),
			444 => 
			array (
				'id' => 1945,
				'id_provincia' => 41,
				'cod_municipio' => 41,
				'DC' => 8,
				'nombre' => 'Estepa',
			),
			445 => 
			array (
				'id' => 1946,
				'id_provincia' => 42,
				'cod_municipio' => 41,
				'DC' => 3,
				'nombre' => 'Buberos',
			),
			446 => 
			array (
				'id' => 1947,
				'id_provincia' => 43,
				'cod_municipio' => 41,
				'DC' => 9,
				'nombre' => 'Caseres',
			),
			447 => 
			array (
				'id' => 1948,
				'id_provincia' => 44,
				'cod_municipio' => 41,
				'DC' => 4,
				'nombre' => 'Bezas',
			),
			448 => 
			array (
				'id' => 1949,
				'id_provincia' => 45,
				'cod_municipio' => 41,
				'DC' => 7,
				'nombre' => 'Casarrubios del Monte',
			),
			449 => 
			array (
				'id' => 1950,
				'id_provincia' => 46,
				'cod_municipio' => 41,
				'DC' => 0,
				'nombre' => 'Aras de los Olmos',
			),
			450 => 
			array (
				'id' => 1951,
				'id_provincia' => 47,
				'cod_municipio' => 41,
				'DC' => 6,
				'nombre' => 'Castrodeza',
			),
			451 => 
			array (
				'id' => 1952,
				'id_provincia' => 48,
				'cod_municipio' => 41,
				'DC' => 2,
				'nombre' => 'Gautegiz Arteaga',
			),
			452 => 
			array (
				'id' => 1953,
				'id_provincia' => 49,
				'cod_municipio' => 41,
				'DC' => 5,
				'nombre' => 'Castrogonzalo',
			),
			453 => 
			array (
				'id' => 1954,
				'id_provincia' => 50,
				'cod_municipio' => 41,
				'DC' => 8,
				'nombre' => 'Bagüés',
			),
			454 => 
			array (
				'id' => 1955,
				'id_provincia' => 1,
				'cod_municipio' => 42,
				'DC' => 1,
				'nombre' => 'Okondo',
			),
			455 => 
			array (
				'id' => 1956,
				'id_provincia' => 2,
				'cod_municipio' => 42,
				'DC' => 6,
				'nombre' => 'Letur',
			),
			456 => 
			array (
				'id' => 1957,
				'id_provincia' => 3,
				'cod_municipio' => 42,
				'DC' => 2,
				'nombre' => 'Benitachell/Poble Nou de Benitatxell, el',
			),
			457 => 
			array (
				'id' => 1958,
				'id_provincia' => 5,
				'cod_municipio' => 42,
				'DC' => 0,
				'nombre' => 'Cabezas de Alambre',
			),
			458 => 
			array (
				'id' => 1959,
				'id_provincia' => 6,
				'cod_municipio' => 42,
				'DC' => 3,
				'nombre' => 'Cheles',
			),
			459 => 
			array (
				'id' => 1960,
				'id_provincia' => 7,
				'cod_municipio' => 42,
				'DC' => 9,
				'nombre' => 'Pollença',
			),
			460 => 
			array (
				'id' => 1961,
				'id_provincia' => 8,
				'cod_municipio' => 42,
				'DC' => 5,
				'nombre' => 'Cànoves i Samalús',
			),
			461 => 
			array (
				'id' => 1962,
				'id_provincia' => 10,
				'cod_municipio' => 42,
				'DC' => 2,
				'nombre' => 'Campillo de Deleitosa',
			),
			462 => 
			array (
				'id' => 1963,
				'id_provincia' => 11,
				'cod_municipio' => 42,
				'DC' => 9,
				'nombre' => 'Zahara',
			),
			463 => 
			array (
				'id' => 1964,
				'id_provincia' => 12,
				'cod_municipio' => 42,
				'DC' => 4,
				'nombre' => 'Catí',
			),
			464 => 
			array (
				'id' => 1965,
				'id_provincia' => 13,
				'cod_municipio' => 42,
				'DC' => 0,
				'nombre' => 'Fuencaliente',
			),
			465 => 
			array (
				'id' => 1966,
				'id_provincia' => 14,
				'cod_municipio' => 42,
				'DC' => 5,
				'nombre' => 'Montilla',
			),
			466 => 
			array (
				'id' => 1967,
				'id_provincia' => 15,
				'cod_municipio' => 42,
				'DC' => 8,
				'nombre' => 'Lousame',
			),
			467 => 
			array (
				'id' => 1968,
				'id_provincia' => 16,
				'cod_municipio' => 42,
				'DC' => 1,
				'nombre' => 'Campillo de Altobuey',
			),
			468 => 
			array (
				'id' => 1969,
				'id_provincia' => 17,
				'cod_municipio' => 42,
				'DC' => 7,
				'nombre' => 'Capmany',
			),
			469 => 
			array (
				'id' => 1970,
				'id_provincia' => 18,
				'cod_municipio' => 42,
				'DC' => 3,
				'nombre' => 'Capileira',
			),
			470 => 
			array (
				'id' => 1971,
				'id_provincia' => 19,
				'cod_municipio' => 42,
				'DC' => 6,
				'nombre' => 'Arroyo de las Fraguas',
			),
			471 => 
			array (
				'id' => 1972,
				'id_provincia' => 20,
				'cod_municipio' => 42,
				'DC' => 0,
				'nombre' => 'Ibarra',
			),
			472 => 
			array (
				'id' => 1973,
				'id_provincia' => 21,
				'cod_municipio' => 42,
				'DC' => 7,
				'nombre' => 'Isla Cristina',
			),
			473 => 
			array (
				'id' => 1974,
				'id_provincia' => 22,
				'cod_municipio' => 42,
				'DC' => 2,
				'nombre' => 'Azlor',
			),
			474 => 
			array (
				'id' => 1975,
				'id_provincia' => 23,
				'cod_municipio' => 42,
				'DC' => 8,
				'nombre' => 'Hinojares',
			),
			475 => 
			array (
				'id' => 1976,
				'id_provincia' => 24,
				'cod_municipio' => 42,
				'DC' => 3,
				'nombre' => 'Castilfalé',
			),
			476 => 
			array (
				'id' => 1977,
				'id_provincia' => 25,
				'cod_municipio' => 42,
				'DC' => 6,
				'nombre' => 'Baronia de Rialb, La',
			),
			477 => 
			array (
				'id' => 1978,
				'id_provincia' => 26,
				'cod_municipio' => 42,
				'DC' => 9,
				'nombre' => 'Casalarreina',
			),
			478 => 
			array (
				'id' => 1979,
				'id_provincia' => 27,
				'cod_municipio' => 42,
				'DC' => 5,
				'nombre' => 'Paradela',
			),
			479 => 
			array (
				'id' => 1980,
				'id_provincia' => 28,
				'cod_municipio' => 42,
				'DC' => 1,
				'nombre' => 'Colmenar del Arroyo',
			),
			480 => 
			array (
				'id' => 1981,
				'id_provincia' => 29,
				'cod_municipio' => 42,
				'DC' => 4,
				'nombre' => 'Coín',
			),
			481 => 
			array (
				'id' => 1982,
				'id_provincia' => 30,
				'cod_municipio' => 42,
				'DC' => 8,
				'nombre' => 'Villanueva del Río Segura',
			),
			482 => 
			array (
				'id' => 1983,
				'id_provincia' => 31,
				'cod_municipio' => 42,
				'DC' => 5,
				'nombre' => 'Azagra',
			),
			483 => 
			array (
				'id' => 1984,
				'id_provincia' => 32,
				'cod_municipio' => 42,
				'DC' => 0,
				'nombre' => 'Lobios',
			),
			484 => 
			array (
				'id' => 1985,
				'id_provincia' => 33,
				'cod_municipio' => 42,
				'DC' => 6,
				'nombre' => 'Noreña',
			),
			485 => 
			array (
				'id' => 1986,
				'id_provincia' => 34,
				'cod_municipio' => 42,
				'DC' => 1,
				'nombre' => 'Calzada de los Molinos',
			),
			486 => 
			array (
				'id' => 1987,
				'id_provincia' => 36,
				'cod_municipio' => 42,
				'DC' => 7,
				'nombre' => 'Ponteareas',
			),
			487 => 
			array (
				'id' => 1988,
				'id_provincia' => 37,
				'cod_municipio' => 42,
				'DC' => 3,
				'nombre' => 'Barceo',
			),
			488 => 
			array (
				'id' => 1989,
				'id_provincia' => 38,
				'cod_municipio' => 42,
				'DC' => 9,
				'nombre' => 'Silos, Los',
			),
			489 => 
			array (
				'id' => 1990,
				'id_provincia' => 39,
				'cod_municipio' => 42,
				'DC' => 2,
				'nombre' => 'Medio Cudeyo',
			),
			490 => 
			array (
				'id' => 1991,
				'id_provincia' => 41,
				'cod_municipio' => 42,
				'DC' => 3,
				'nombre' => 'Fuentes de Andalucía',
			),
			491 => 
			array (
				'id' => 1992,
				'id_provincia' => 42,
				'cod_municipio' => 42,
				'DC' => 8,
				'nombre' => 'Buitrago',
			),
			492 => 
			array (
				'id' => 1993,
				'id_provincia' => 43,
				'cod_municipio' => 42,
				'DC' => 4,
				'nombre' => 'Castellvell del Camp',
			),
			493 => 
			array (
				'id' => 1994,
				'id_provincia' => 44,
				'cod_municipio' => 42,
				'DC' => 9,
				'nombre' => 'Blancas',
			),
			494 => 
			array (
				'id' => 1995,
				'id_provincia' => 45,
				'cod_municipio' => 42,
				'DC' => 2,
				'nombre' => 'Casasbuenas',
			),
			495 => 
			array (
				'id' => 1996,
				'id_provincia' => 46,
				'cod_municipio' => 42,
				'DC' => 5,
				'nombre' => 'Aielo de Malferit',
			),
			496 => 
			array (
				'id' => 1997,
				'id_provincia' => 47,
				'cod_municipio' => 42,
				'DC' => 1,
				'nombre' => 'Castromembibre',
			),
			497 => 
			array (
				'id' => 1998,
				'id_provincia' => 48,
				'cod_municipio' => 42,
				'DC' => 7,
				'nombre' => 'Gordexola',
			),
			498 => 
			array (
				'id' => 1999,
				'id_provincia' => 49,
				'cod_municipio' => 42,
				'DC' => 0,
				'nombre' => 'Castronuevo',
			),
			499 => 
			array (
				'id' => 2000,
				'id_provincia' => 50,
				'cod_municipio' => 42,
				'DC' => 3,
				'nombre' => 'Balconchán',
			),
		));
		\DB::table('municipios')->insert(array (
			0 => 
			array (
				'id' => 2001,
				'id_provincia' => 1,
				'cod_municipio' => 43,
				'DC' => 7,
				'nombre' => 'Oyón-Oion',
			),
			1 => 
			array (
				'id' => 2002,
				'id_provincia' => 2,
				'cod_municipio' => 43,
				'DC' => 2,
				'nombre' => 'Lezuza',
			),
			2 => 
			array (
				'id' => 2003,
				'id_provincia' => 3,
				'cod_municipio' => 43,
				'DC' => 8,
				'nombre' => 'Biar',
			),
			3 => 
			array (
				'id' => 2004,
				'id_provincia' => 4,
				'cod_municipio' => 43,
				'DC' => 3,
				'nombre' => 'Felix',
			),
			4 => 
			array (
				'id' => 2005,
				'id_provincia' => 5,
				'cod_municipio' => 43,
				'DC' => 6,
				'nombre' => 'Cabezas del Pozo',
			),
			5 => 
			array (
				'id' => 2006,
				'id_provincia' => 6,
				'cod_municipio' => 43,
				'DC' => 9,
				'nombre' => 'Don Álvaro',
			),
			6 => 
			array (
				'id' => 2007,
				'id_provincia' => 7,
				'cod_municipio' => 43,
				'DC' => 5,
				'nombre' => 'Porreres',
			),
			7 => 
			array (
				'id' => 2008,
				'id_provincia' => 8,
				'cod_municipio' => 43,
				'DC' => 1,
				'nombre' => 'Canyelles',
			),
			8 => 
			array (
				'id' => 2009,
				'id_provincia' => 9,
				'cod_municipio' => 43,
				'DC' => 4,
				'nombre' => 'Barrios de Bureba, Los',
			),
			9 => 
			array (
				'id' => 2010,
				'id_provincia' => 10,
				'cod_municipio' => 43,
				'DC' => 8,
				'nombre' => 'Campo Lugar',
			),
			10 => 
			array (
				'id' => 2011,
				'id_provincia' => 12,
				'cod_municipio' => 43,
				'DC' => 0,
				'nombre' => 'Caudiel',
			),
			11 => 
			array (
				'id' => 2012,
				'id_provincia' => 13,
				'cod_municipio' => 43,
				'DC' => 6,
				'nombre' => 'Fuenllana',
			),
			12 => 
			array (
				'id' => 2013,
				'id_provincia' => 14,
				'cod_municipio' => 43,
				'DC' => 1,
				'nombre' => 'Montoro',
			),
			13 => 
			array (
				'id' => 2014,
				'id_provincia' => 15,
				'cod_municipio' => 43,
				'DC' => 4,
				'nombre' => 'Malpica de Bergantiños',
			),
			14 => 
			array (
				'id' => 2015,
				'id_provincia' => 16,
				'cod_municipio' => 43,
				'DC' => 7,
				'nombre' => 'Campillos-Paravientos',
			),
			15 => 
			array (
				'id' => 2016,
				'id_provincia' => 17,
				'cod_municipio' => 43,
				'DC' => 3,
				'nombre' => 'Queralbs',
			),
			16 => 
			array (
				'id' => 2017,
				'id_provincia' => 18,
				'cod_municipio' => 43,
				'DC' => 9,
				'nombre' => 'Carataunas',
			),
			17 => 
			array (
				'id' => 2018,
				'id_provincia' => 19,
				'cod_municipio' => 43,
				'DC' => 2,
				'nombre' => 'Atanzón',
			),
			18 => 
			array (
				'id' => 2019,
				'id_provincia' => 20,
				'cod_municipio' => 43,
				'DC' => 6,
				'nombre' => 'Idiazabal',
			),
			19 => 
			array (
				'id' => 2020,
				'id_provincia' => 21,
				'cod_municipio' => 43,
				'DC' => 3,
				'nombre' => 'Jabugo',
			),
			20 => 
			array (
				'id' => 2021,
				'id_provincia' => 22,
				'cod_municipio' => 43,
				'DC' => 8,
				'nombre' => 'Baélls',
			),
			21 => 
			array (
				'id' => 2022,
				'id_provincia' => 23,
				'cod_municipio' => 43,
				'DC' => 4,
				'nombre' => 'Hornos',
			),
			22 => 
			array (
				'id' => 2023,
				'id_provincia' => 24,
				'cod_municipio' => 43,
				'DC' => 9,
				'nombre' => 'Castrillo de Cabrera',
			),
			23 => 
			array (
				'id' => 2024,
				'id_provincia' => 25,
				'cod_municipio' => 43,
				'DC' => 2,
				'nombre' => 'Vall de Boí, La',
			),
			24 => 
			array (
				'id' => 2025,
				'id_provincia' => 26,
				'cod_municipio' => 43,
				'DC' => 5,
				'nombre' => 'Castañares de Rioja',
			),
			25 => 
			array (
				'id' => 2026,
				'id_provincia' => 27,
				'cod_municipio' => 43,
				'DC' => 1,
				'nombre' => 'Páramo, O',
			),
			26 => 
			array (
				'id' => 2027,
				'id_provincia' => 28,
				'cod_municipio' => 43,
				'DC' => 7,
				'nombre' => 'Colmenar de Oreja',
			),
			27 => 
			array (
				'id' => 2028,
				'id_provincia' => 29,
				'cod_municipio' => 43,
				'DC' => 0,
				'nombre' => 'Colmenar',
			),
			28 => 
			array (
				'id' => 2029,
				'id_provincia' => 30,
				'cod_municipio' => 43,
				'DC' => 4,
				'nombre' => 'Yecla',
			),
			29 => 
			array (
				'id' => 2030,
				'id_provincia' => 31,
				'cod_municipio' => 43,
				'DC' => 1,
				'nombre' => 'Azuelo',
			),
			30 => 
			array (
				'id' => 2031,
				'id_provincia' => 32,
				'cod_municipio' => 43,
				'DC' => 6,
				'nombre' => 'Maceda',
			),
			31 => 
			array (
				'id' => 2032,
				'id_provincia' => 33,
				'cod_municipio' => 43,
				'DC' => 2,
				'nombre' => 'Onís',
			),
			32 => 
			array (
				'id' => 2033,
				'id_provincia' => 36,
				'cod_municipio' => 43,
				'DC' => 3,
				'nombre' => 'Ponte Caldelas',
			),
			33 => 
			array (
				'id' => 2034,
				'id_provincia' => 38,
				'cod_municipio' => 43,
				'DC' => 5,
				'nombre' => 'Tacoronte',
			),
			34 => 
			array (
				'id' => 2035,
				'id_provincia' => 39,
				'cod_municipio' => 43,
				'DC' => 8,
				'nombre' => 'Meruelo',
			),
			35 => 
			array (
				'id' => 2036,
				'id_provincia' => 40,
				'cod_municipio' => 43,
				'DC' => 2,
				'nombre' => 'Carbonero el Mayor',
			),
			36 => 
			array (
				'id' => 2037,
				'id_provincia' => 41,
				'cod_municipio' => 43,
				'DC' => 9,
				'nombre' => 'Garrobo, El',
			),
			37 => 
			array (
				'id' => 2038,
				'id_provincia' => 42,
				'cod_municipio' => 43,
				'DC' => 4,
				'nombre' => 'Burgo de Osma-Ciudad de Osma',
			),
			38 => 
			array (
				'id' => 2039,
				'id_provincia' => 43,
				'cod_municipio' => 43,
				'DC' => 0,
				'nombre' => 'Catllar, El',
			),
			39 => 
			array (
				'id' => 2040,
				'id_provincia' => 44,
				'cod_municipio' => 43,
				'DC' => 5,
				'nombre' => 'Blesa',
			),
			40 => 
			array (
				'id' => 2041,
				'id_provincia' => 45,
				'cod_municipio' => 43,
				'DC' => 8,
				'nombre' => 'Castillo de Bayuela',
			),
			41 => 
			array (
				'id' => 2042,
				'id_provincia' => 46,
				'cod_municipio' => 43,
				'DC' => 1,
				'nombre' => 'Aielo de Rugat',
			),
			42 => 
			array (
				'id' => 2043,
				'id_provincia' => 47,
				'cod_municipio' => 43,
				'DC' => 7,
				'nombre' => 'Castromonte',
			),
			43 => 
			array (
				'id' => 2044,
				'id_provincia' => 48,
				'cod_municipio' => 43,
				'DC' => 3,
				'nombre' => 'Gorliz',
			),
			44 => 
			array (
				'id' => 2045,
				'id_provincia' => 49,
				'cod_municipio' => 43,
				'DC' => 6,
				'nombre' => 'Castroverde de Campos',
			),
			45 => 
			array (
				'id' => 2046,
				'id_provincia' => 50,
				'cod_municipio' => 43,
				'DC' => 9,
				'nombre' => 'Bárboles',
			),
			46 => 
			array (
				'id' => 2047,
				'id_provincia' => 1,
				'cod_municipio' => 44,
				'DC' => 2,
				'nombre' => 'Peñacerrada-Urizaharra',
			),
			47 => 
			array (
				'id' => 2048,
				'id_provincia' => 2,
				'cod_municipio' => 44,
				'DC' => 7,
				'nombre' => 'Liétor',
			),
			48 => 
			array (
				'id' => 2049,
				'id_provincia' => 3,
				'cod_municipio' => 44,
				'DC' => 3,
				'nombre' => 'Bigastro',
			),
			49 => 
			array (
				'id' => 2050,
				'id_provincia' => 4,
				'cod_municipio' => 44,
				'DC' => 8,
				'nombre' => 'Fines',
			),
			50 => 
			array (
				'id' => 2051,
				'id_provincia' => 5,
				'cod_municipio' => 44,
				'DC' => 1,
				'nombre' => 'Cabezas del Villar',
			),
			51 => 
			array (
				'id' => 2052,
				'id_provincia' => 6,
				'cod_municipio' => 44,
				'DC' => 4,
				'nombre' => 'Don Benito',
			),
			52 => 
			array (
				'id' => 2053,
				'id_provincia' => 7,
				'cod_municipio' => 44,
				'DC' => 0,
				'nombre' => 'Pobla, Sa',
			),
			53 => 
			array (
				'id' => 2054,
				'id_provincia' => 8,
				'cod_municipio' => 44,
				'DC' => 6,
				'nombre' => 'Capellades',
			),
			54 => 
			array (
				'id' => 2055,
				'id_provincia' => 9,
				'cod_municipio' => 44,
				'DC' => 9,
				'nombre' => 'Barrios de Colina',
			),
			55 => 
			array (
				'id' => 2056,
				'id_provincia' => 10,
				'cod_municipio' => 44,
				'DC' => 3,
				'nombre' => 'Cañamero',
			),
			56 => 
			array (
				'id' => 2057,
				'id_provincia' => 12,
				'cod_municipio' => 44,
				'DC' => 5,
				'nombre' => 'Cervera del Maestre',
			),
			57 => 
			array (
				'id' => 2058,
				'id_provincia' => 13,
				'cod_municipio' => 44,
				'DC' => 1,
				'nombre' => 'Fuente el Fresno',
			),
			58 => 
			array (
				'id' => 2059,
				'id_provincia' => 14,
				'cod_municipio' => 44,
				'DC' => 6,
				'nombre' => 'Monturque',
			),
			59 => 
			array (
				'id' => 2060,
				'id_provincia' => 15,
				'cod_municipio' => 44,
				'DC' => 9,
				'nombre' => 'Mañón',
			),
			60 => 
			array (
				'id' => 2061,
				'id_provincia' => 16,
				'cod_municipio' => 44,
				'DC' => 2,
				'nombre' => 'Campillos-Sierra',
			),
			61 => 
			array (
				'id' => 2062,
				'id_provincia' => 17,
				'cod_municipio' => 44,
				'DC' => 8,
				'nombre' => 'Cassà de la Selva',
			),
			62 => 
			array (
				'id' => 2063,
				'id_provincia' => 18,
				'cod_municipio' => 44,
				'DC' => 4,
				'nombre' => 'Cástaras',
			),
			63 => 
			array (
				'id' => 2064,
				'id_provincia' => 19,
				'cod_municipio' => 44,
				'DC' => 7,
				'nombre' => 'Atienza',
			),
			64 => 
			array (
				'id' => 2065,
				'id_provincia' => 20,
				'cod_municipio' => 44,
				'DC' => 1,
				'nombre' => 'Ikaztegieta',
			),
			65 => 
			array (
				'id' => 2066,
				'id_provincia' => 21,
				'cod_municipio' => 44,
				'DC' => 8,
				'nombre' => 'Lepe',
			),
			66 => 
			array (
				'id' => 2067,
				'id_provincia' => 22,
				'cod_municipio' => 44,
				'DC' => 3,
				'nombre' => 'Bailo',
			),
			67 => 
			array (
				'id' => 2068,
				'id_provincia' => 23,
				'cod_municipio' => 44,
				'DC' => 9,
				'nombre' => 'Huelma',
			),
			68 => 
			array (
				'id' => 2069,
				'id_provincia' => 24,
				'cod_municipio' => 44,
				'DC' => 4,
				'nombre' => 'Castrillo de la Valduerna',
			),
			69 => 
			array (
				'id' => 2070,
				'id_provincia' => 25,
				'cod_municipio' => 44,
				'DC' => 7,
				'nombre' => 'Bassella',
			),
			70 => 
			array (
				'id' => 2071,
				'id_provincia' => 26,
				'cod_municipio' => 44,
				'DC' => 0,
				'nombre' => 'Castroviejo',
			),
			71 => 
			array (
				'id' => 2072,
				'id_provincia' => 27,
				'cod_municipio' => 44,
				'DC' => 6,
				'nombre' => 'Pastoriza, A',
			),
			72 => 
			array (
				'id' => 2073,
				'id_provincia' => 28,
				'cod_municipio' => 44,
				'DC' => 2,
				'nombre' => 'Colmenarejo',
			),
			73 => 
			array (
				'id' => 2074,
				'id_provincia' => 29,
				'cod_municipio' => 44,
				'DC' => 5,
				'nombre' => 'Comares',
			),
			74 => 
			array (
				'id' => 2075,
				'id_provincia' => 31,
				'cod_municipio' => 44,
				'DC' => 6,
				'nombre' => 'Bakaiku',
			),
			75 => 
			array (
				'id' => 2076,
				'id_provincia' => 32,
				'cod_municipio' => 44,
				'DC' => 1,
				'nombre' => 'Manzaneda',
			),
			76 => 
			array (
				'id' => 2077,
				'id_provincia' => 33,
				'cod_municipio' => 44,
				'DC' => 7,
				'nombre' => 'Oviedo',
			),
			77 => 
			array (
				'id' => 2078,
				'id_provincia' => 36,
				'cod_municipio' => 44,
				'DC' => 8,
				'nombre' => 'Pontecesures',
			),
			78 => 
			array (
				'id' => 2079,
				'id_provincia' => 37,
				'cod_municipio' => 44,
				'DC' => 4,
				'nombre' => 'Barruecopardo',
			),
			79 => 
			array (
				'id' => 2080,
				'id_provincia' => 38,
				'cod_municipio' => 44,
				'DC' => 0,
				'nombre' => 'Tanque, El',
			),
			80 => 
			array (
				'id' => 2081,
				'id_provincia' => 39,
				'cod_municipio' => 44,
				'DC' => 3,
				'nombre' => 'Miengo',
			),
			81 => 
			array (
				'id' => 2082,
				'id_provincia' => 40,
				'cod_municipio' => 44,
				'DC' => 7,
				'nombre' => 'Carrascal del Río',
			),
			82 => 
			array (
				'id' => 2083,
				'id_provincia' => 41,
				'cod_municipio' => 44,
				'DC' => 4,
				'nombre' => 'Gelves',
			),
			83 => 
			array (
				'id' => 2084,
				'id_provincia' => 42,
				'cod_municipio' => 44,
				'DC' => 9,
				'nombre' => 'Cabrejas del Campo',
			),
			84 => 
			array (
				'id' => 2085,
				'id_provincia' => 43,
				'cod_municipio' => 44,
				'DC' => 5,
				'nombre' => 'Sénia, La',
			),
			85 => 
			array (
				'id' => 2086,
				'id_provincia' => 44,
				'cod_municipio' => 44,
				'DC' => 0,
				'nombre' => 'Bordón',
			),
			86 => 
			array (
				'id' => 2087,
				'id_provincia' => 46,
				'cod_municipio' => 44,
				'DC' => 6,
				'nombre' => 'Ayora',
			),
			87 => 
			array (
				'id' => 2088,
				'id_provincia' => 47,
				'cod_municipio' => 44,
				'DC' => 2,
				'nombre' => 'Castronuevo de Esgueva',
			),
			88 => 
			array (
				'id' => 2089,
				'id_provincia' => 48,
				'cod_municipio' => 44,
				'DC' => 8,
				'nombre' => 'Getxo',
			),
			89 => 
			array (
				'id' => 2090,
				'id_provincia' => 49,
				'cod_municipio' => 44,
				'DC' => 1,
				'nombre' => 'Cazurra',
			),
			90 => 
			array (
				'id' => 2091,
				'id_provincia' => 50,
				'cod_municipio' => 44,
				'DC' => 4,
				'nombre' => 'Bardallur',
			),
			91 => 
			array (
				'id' => 2092,
				'id_provincia' => 2,
				'cod_municipio' => 45,
				'DC' => 0,
				'nombre' => 'Madrigueras',
			),
			92 => 
			array (
				'id' => 2093,
				'id_provincia' => 3,
				'cod_municipio' => 45,
				'DC' => 6,
				'nombre' => 'Bolulla',
			),
			93 => 
			array (
				'id' => 2094,
				'id_provincia' => 4,
				'cod_municipio' => 45,
				'DC' => 1,
				'nombre' => 'Fiñana',
			),
			94 => 
			array (
				'id' => 2095,
				'id_provincia' => 5,
				'cod_municipio' => 45,
				'DC' => 4,
				'nombre' => 'Cabizuela',
			),
			95 => 
			array (
				'id' => 2096,
				'id_provincia' => 6,
				'cod_municipio' => 45,
				'DC' => 7,
				'nombre' => 'Entrín Bajo',
			),
			96 => 
			array (
				'id' => 2097,
				'id_provincia' => 7,
				'cod_municipio' => 45,
				'DC' => 3,
				'nombre' => 'Puigpunyent',
			),
			97 => 
			array (
				'id' => 2098,
				'id_provincia' => 8,
				'cod_municipio' => 45,
				'DC' => 9,
				'nombre' => 'Capolat',
			),
			98 => 
			array (
				'id' => 2099,
				'id_provincia' => 9,
				'cod_municipio' => 45,
				'DC' => 2,
				'nombre' => 'Basconcillos del Tozo',
			),
			99 => 
			array (
				'id' => 2100,
				'id_provincia' => 10,
				'cod_municipio' => 45,
				'DC' => 6,
				'nombre' => 'Cañaveral',
			),
			100 => 
			array (
				'id' => 2101,
				'id_provincia' => 12,
				'cod_municipio' => 45,
				'DC' => 8,
				'nombre' => 'Cinctorres',
			),
			101 => 
			array (
				'id' => 2102,
				'id_provincia' => 13,
				'cod_municipio' => 45,
				'DC' => 4,
				'nombre' => 'Granátula de Calatrava',
			),
			102 => 
			array (
				'id' => 2103,
				'id_provincia' => 14,
				'cod_municipio' => 45,
				'DC' => 9,
				'nombre' => 'Moriles',
			),
			103 => 
			array (
				'id' => 2104,
				'id_provincia' => 15,
				'cod_municipio' => 45,
				'DC' => 2,
				'nombre' => 'Mazaricos',
			),
			104 => 
			array (
				'id' => 2105,
				'id_provincia' => 16,
				'cod_municipio' => 45,
				'DC' => 5,
				'nombre' => 'Canalejas del Arroyo',
			),
			105 => 
			array (
				'id' => 2106,
				'id_provincia' => 18,
				'cod_municipio' => 45,
				'DC' => 7,
				'nombre' => 'Castilléjar',
			),
			106 => 
			array (
				'id' => 2107,
				'id_provincia' => 19,
				'cod_municipio' => 45,
				'DC' => 0,
				'nombre' => 'Auñón',
			),
			107 => 
			array (
				'id' => 2108,
				'id_provincia' => 20,
				'cod_municipio' => 45,
				'DC' => 4,
				'nombre' => 'Irun',
			),
			108 => 
			array (
				'id' => 2109,
				'id_provincia' => 21,
				'cod_municipio' => 45,
				'DC' => 1,
				'nombre' => 'Linares de la Sierra',
			),
			109 => 
			array (
				'id' => 2110,
				'id_provincia' => 22,
				'cod_municipio' => 45,
				'DC' => 6,
				'nombre' => 'Baldellou',
			),
			110 => 
			array (
				'id' => 2111,
				'id_provincia' => 23,
				'cod_municipio' => 45,
				'DC' => 2,
				'nombre' => 'Huesa',
			),
			111 => 
			array (
				'id' => 2112,
				'id_provincia' => 25,
				'cod_municipio' => 45,
				'DC' => 0,
				'nombre' => 'Bausen',
			),
			112 => 
			array (
				'id' => 2113,
				'id_provincia' => 26,
				'cod_municipio' => 45,
				'DC' => 3,
				'nombre' => 'Cellorigo',
			),
			113 => 
			array (
				'id' => 2114,
				'id_provincia' => 27,
				'cod_municipio' => 45,
				'DC' => 9,
				'nombre' => 'Pedrafita do Cebreiro',
			),
			114 => 
			array (
				'id' => 2115,
				'id_provincia' => 28,
				'cod_municipio' => 45,
				'DC' => 5,
				'nombre' => 'Colmenar Viejo',
			),
			115 => 
			array (
				'id' => 2116,
				'id_provincia' => 29,
				'cod_municipio' => 45,
				'DC' => 8,
				'nombre' => 'Cómpeta',
			),
			116 => 
			array (
				'id' => 2117,
				'id_provincia' => 31,
				'cod_municipio' => 45,
				'DC' => 9,
				'nombre' => 'Barásoain',
			),
			117 => 
			array (
				'id' => 2118,
				'id_provincia' => 32,
				'cod_municipio' => 45,
				'DC' => 4,
				'nombre' => 'Maside',
			),
			118 => 
			array (
				'id' => 2119,
				'id_provincia' => 33,
				'cod_municipio' => 45,
				'DC' => 0,
				'nombre' => 'Parres',
			),
			119 => 
			array (
				'id' => 2120,
				'id_provincia' => 34,
				'cod_municipio' => 45,
				'DC' => 5,
				'nombre' => 'Capillas',
			),
			120 => 
			array (
				'id' => 2121,
				'id_provincia' => 36,
				'cod_municipio' => 45,
				'DC' => 1,
				'nombre' => 'Redondela',
			),
			121 => 
			array (
				'id' => 2122,
				'id_provincia' => 37,
				'cod_municipio' => 45,
				'DC' => 7,
				'nombre' => 'Bastida, La',
			),
			122 => 
			array (
				'id' => 2123,
				'id_provincia' => 38,
				'cod_municipio' => 45,
				'DC' => 3,
				'nombre' => 'Tazacorte',
			),
			123 => 
			array (
				'id' => 2124,
				'id_provincia' => 39,
				'cod_municipio' => 45,
				'DC' => 6,
				'nombre' => 'Miera',
			),
			124 => 
			array (
				'id' => 2125,
				'id_provincia' => 40,
				'cod_municipio' => 45,
				'DC' => 0,
				'nombre' => 'Casla',
			),
			125 => 
			array (
				'id' => 2126,
				'id_provincia' => 41,
				'cod_municipio' => 45,
				'DC' => 7,
				'nombre' => 'Gerena',
			),
			126 => 
			array (
				'id' => 2127,
				'id_provincia' => 42,
				'cod_municipio' => 45,
				'DC' => 2,
				'nombre' => 'Cabrejas del Pinar',
			),
			127 => 
			array (
				'id' => 2128,
				'id_provincia' => 43,
				'cod_municipio' => 45,
				'DC' => 8,
				'nombre' => 'Colldejou',
			),
			128 => 
			array (
				'id' => 2129,
				'id_provincia' => 44,
				'cod_municipio' => 45,
				'DC' => 3,
				'nombre' => 'Bronchales',
			),
			129 => 
			array (
				'id' => 2130,
				'id_provincia' => 45,
				'cod_municipio' => 45,
				'DC' => 6,
				'nombre' => 'Cazalegas',
			),
			130 => 
			array (
				'id' => 2131,
				'id_provincia' => 46,
				'cod_municipio' => 45,
				'DC' => 9,
				'nombre' => 'Barxeta',
			),
			131 => 
			array (
				'id' => 2132,
				'id_provincia' => 47,
				'cod_municipio' => 45,
				'DC' => 5,
				'nombre' => 'Castronuño',
			),
			132 => 
			array (
				'id' => 2133,
				'id_provincia' => 48,
				'cod_municipio' => 45,
				'DC' => 1,
				'nombre' => 'Güeñes',
			),
			133 => 
			array (
				'id' => 2134,
				'id_provincia' => 50,
				'cod_municipio' => 45,
				'DC' => 7,
				'nombre' => 'Belchite',
			),
			134 => 
			array (
				'id' => 2135,
				'id_provincia' => 1,
				'cod_municipio' => 46,
				'DC' => 8,
				'nombre' => 'Erriberagoitia/Ribera Alta',
			),
			135 => 
			array (
				'id' => 2136,
				'id_provincia' => 2,
				'cod_municipio' => 46,
				'DC' => 3,
				'nombre' => 'Mahora',
			),
			136 => 
			array (
				'id' => 2137,
				'id_provincia' => 3,
				'cod_municipio' => 46,
				'DC' => 9,
				'nombre' => 'Busot',
			),
			137 => 
			array (
				'id' => 2138,
				'id_provincia' => 4,
				'cod_municipio' => 46,
				'DC' => 4,
				'nombre' => 'Fondón',
			),
			138 => 
			array (
				'id' => 2139,
				'id_provincia' => 5,
				'cod_municipio' => 46,
				'DC' => 7,
				'nombre' => 'Canales',
			),
			139 => 
			array (
				'id' => 2140,
				'id_provincia' => 6,
				'cod_municipio' => 46,
				'DC' => 0,
				'nombre' => 'Esparragalejo',
			),
			140 => 
			array (
				'id' => 2141,
				'id_provincia' => 7,
				'cod_municipio' => 46,
				'DC' => 6,
				'nombre' => 'Sant Antoni de Portmany',
			),
			141 => 
			array (
				'id' => 2142,
				'id_provincia' => 8,
				'cod_municipio' => 46,
				'DC' => 2,
				'nombre' => 'Cardedeu',
			),
			142 => 
			array (
				'id' => 2143,
				'id_provincia' => 9,
				'cod_municipio' => 46,
				'DC' => 5,
				'nombre' => 'Bascuñana',
			),
			143 => 
			array (
				'id' => 2144,
				'id_provincia' => 10,
				'cod_municipio' => 46,
				'DC' => 9,
				'nombre' => 'Carbajo',
			),
			144 => 
			array (
				'id' => 2145,
				'id_provincia' => 12,
				'cod_municipio' => 46,
				'DC' => 1,
				'nombre' => 'Cirat',
			),
			145 => 
			array (
				'id' => 2146,
				'id_provincia' => 13,
				'cod_municipio' => 46,
				'DC' => 7,
				'nombre' => 'Guadalmez',
			),
			146 => 
			array (
				'id' => 2147,
				'id_provincia' => 14,
				'cod_municipio' => 46,
				'DC' => 2,
				'nombre' => 'Nueva Carteya',
			),
			147 => 
			array (
				'id' => 2148,
				'id_provincia' => 15,
				'cod_municipio' => 46,
				'DC' => 5,
				'nombre' => 'Melide',
			),
			148 => 
			array (
				'id' => 2149,
				'id_provincia' => 16,
				'cod_municipio' => 46,
				'DC' => 8,
				'nombre' => 'Cañada del Hoyo',
			),
			149 => 
			array (
				'id' => 2150,
				'id_provincia' => 17,
				'cod_municipio' => 46,
				'DC' => 4,
				'nombre' => 'Castellfollit de la Roca',
			),
			150 => 
			array (
				'id' => 2151,
				'id_provincia' => 18,
				'cod_municipio' => 46,
				'DC' => 0,
				'nombre' => 'Castril',
			),
			151 => 
			array (
				'id' => 2152,
				'id_provincia' => 19,
				'cod_municipio' => 46,
				'DC' => 3,
				'nombre' => 'Azuqueca de Henares',
			),
			152 => 
			array (
				'id' => 2153,
				'id_provincia' => 20,
				'cod_municipio' => 46,
				'DC' => 7,
				'nombre' => 'Irura',
			),
			153 => 
			array (
				'id' => 2154,
				'id_provincia' => 21,
				'cod_municipio' => 46,
				'DC' => 4,
				'nombre' => 'Lucena del Puerto',
			),
			154 => 
			array (
				'id' => 2155,
				'id_provincia' => 22,
				'cod_municipio' => 46,
				'DC' => 9,
				'nombre' => 'Ballobar',
			),
			155 => 
			array (
				'id' => 2156,
				'id_provincia' => 23,
				'cod_municipio' => 46,
				'DC' => 5,
				'nombre' => 'Ibros',
			),
			156 => 
			array (
				'id' => 2157,
				'id_provincia' => 24,
				'cod_municipio' => 46,
				'DC' => 0,
				'nombre' => 'Castrocalbón',
			),
			157 => 
			array (
				'id' => 2158,
				'id_provincia' => 25,
				'cod_municipio' => 46,
				'DC' => 3,
				'nombre' => 'Belianes',
			),
			158 => 
			array (
				'id' => 2159,
				'id_provincia' => 26,
				'cod_municipio' => 46,
				'DC' => 6,
				'nombre' => 'Cenicero',
			),
			159 => 
			array (
				'id' => 2160,
				'id_provincia' => 27,
				'cod_municipio' => 46,
				'DC' => 2,
				'nombre' => 'Pol',
			),
			160 => 
			array (
				'id' => 2161,
				'id_provincia' => 28,
				'cod_municipio' => 46,
				'DC' => 8,
				'nombre' => 'Collado Mediano',
			),
			161 => 
			array (
				'id' => 2162,
				'id_provincia' => 29,
				'cod_municipio' => 46,
				'DC' => 1,
				'nombre' => 'Cortes de la Frontera',
			),
			162 => 
			array (
				'id' => 2163,
				'id_provincia' => 31,
				'cod_municipio' => 46,
				'DC' => 2,
				'nombre' => 'Barbarin',
			),
			163 => 
			array (
				'id' => 2164,
				'id_provincia' => 32,
				'cod_municipio' => 46,
				'DC' => 7,
				'nombre' => 'Melón',
			),
			164 => 
			array (
				'id' => 2165,
				'id_provincia' => 33,
				'cod_municipio' => 46,
				'DC' => 3,
				'nombre' => 'Peñamellera Alta',
			),
			165 => 
			array (
				'id' => 2166,
				'id_provincia' => 34,
				'cod_municipio' => 46,
				'DC' => 8,
				'nombre' => 'Cardeñosa de Volpejera',
			),
			166 => 
			array (
				'id' => 2167,
				'id_provincia' => 36,
				'cod_municipio' => 46,
				'DC' => 4,
				'nombre' => 'Ribadumia',
			),
			167 => 
			array (
				'id' => 2168,
				'id_provincia' => 37,
				'cod_municipio' => 46,
				'DC' => 0,
				'nombre' => 'Béjar',
			),
			168 => 
			array (
				'id' => 2169,
				'id_provincia' => 38,
				'cod_municipio' => 46,
				'DC' => 6,
				'nombre' => 'Tegueste',
			),
			169 => 
			array (
				'id' => 2170,
				'id_provincia' => 39,
				'cod_municipio' => 46,
				'DC' => 9,
				'nombre' => 'Molledo',
			),
			170 => 
			array (
				'id' => 2171,
				'id_provincia' => 40,
				'cod_municipio' => 46,
				'DC' => 3,
				'nombre' => 'Castillejo de Mesleón',
			),
			171 => 
			array (
				'id' => 2172,
				'id_provincia' => 41,
				'cod_municipio' => 46,
				'DC' => 0,
				'nombre' => 'Gilena',
			),
			172 => 
			array (
				'id' => 2173,
				'id_provincia' => 42,
				'cod_municipio' => 46,
				'DC' => 5,
				'nombre' => 'Calatañazor',
			),
			173 => 
			array (
				'id' => 2174,
				'id_provincia' => 43,
				'cod_municipio' => 46,
				'DC' => 1,
				'nombre' => 'Conesa',
			),
			174 => 
			array (
				'id' => 2175,
				'id_provincia' => 44,
				'cod_municipio' => 46,
				'DC' => 6,
				'nombre' => 'Bueña',
			),
			175 => 
			array (
				'id' => 2176,
				'id_provincia' => 45,
				'cod_municipio' => 46,
				'DC' => 9,
				'nombre' => 'Cebolla',
			),
			176 => 
			array (
				'id' => 2177,
				'id_provincia' => 46,
				'cod_municipio' => 46,
				'DC' => 2,
				'nombre' => 'Barx',
			),
			177 => 
			array (
				'id' => 2178,
				'id_provincia' => 47,
				'cod_municipio' => 46,
				'DC' => 8,
				'nombre' => 'Castroponce',
			),
			178 => 
			array (
				'id' => 2179,
				'id_provincia' => 48,
				'cod_municipio' => 46,
				'DC' => 4,
				'nombre' => 'Gernika-Lumo',
			),
			179 => 
			array (
				'id' => 2180,
				'id_provincia' => 49,
				'cod_municipio' => 46,
				'DC' => 7,
				'nombre' => 'Cerecinos de Campos',
			),
			180 => 
			array (
				'id' => 2181,
				'id_provincia' => 50,
				'cod_municipio' => 46,
				'DC' => 0,
				'nombre' => 'Belmonte de Gracián',
			),
			181 => 
			array (
				'id' => 2182,
				'id_provincia' => 1,
				'cod_municipio' => 47,
				'DC' => 4,
				'nombre' => 'Ribera Baja/Erribera Beitia',
			),
			182 => 
			array (
				'id' => 2183,
				'id_provincia' => 2,
				'cod_municipio' => 47,
				'DC' => 9,
				'nombre' => 'Masegoso',
			),
			183 => 
			array (
				'id' => 2184,
				'id_provincia' => 3,
				'cod_municipio' => 47,
				'DC' => 5,
				'nombre' => 'Calp',
			),
			184 => 
			array (
				'id' => 2185,
				'id_provincia' => 4,
				'cod_municipio' => 47,
				'DC' => 0,
				'nombre' => 'Gádor',
			),
			185 => 
			array (
				'id' => 2186,
				'id_provincia' => 5,
				'cod_municipio' => 47,
				'DC' => 3,
				'nombre' => 'Candeleda',
			),
			186 => 
			array (
				'id' => 2187,
				'id_provincia' => 6,
				'cod_municipio' => 47,
				'DC' => 6,
				'nombre' => 'Esparragosa de la Serena',
			),
			187 => 
			array (
				'id' => 2188,
				'id_provincia' => 7,
				'cod_municipio' => 47,
				'DC' => 2,
				'nombre' => 'Sencelles',
			),
			188 => 
			array (
				'id' => 2189,
				'id_provincia' => 8,
				'cod_municipio' => 47,
				'DC' => 8,
				'nombre' => 'Cardona',
			),
			189 => 
			array (
				'id' => 2190,
				'id_provincia' => 9,
				'cod_municipio' => 47,
				'DC' => 1,
				'nombre' => 'Belbimbre',
			),
			190 => 
			array (
				'id' => 2191,
				'id_provincia' => 10,
				'cod_municipio' => 47,
				'DC' => 5,
				'nombre' => 'Carcaboso',
			),
			191 => 
			array (
				'id' => 2192,
				'id_provincia' => 13,
				'cod_municipio' => 47,
				'DC' => 3,
				'nombre' => 'Herencia',
			),
			192 => 
			array (
				'id' => 2193,
				'id_provincia' => 14,
				'cod_municipio' => 47,
				'DC' => 8,
				'nombre' => 'Obejo',
			),
			193 => 
			array (
				'id' => 2194,
				'id_provincia' => 15,
				'cod_municipio' => 47,
				'DC' => 1,
				'nombre' => 'Mesía',
			),
			194 => 
			array (
				'id' => 2195,
				'id_provincia' => 16,
				'cod_municipio' => 47,
				'DC' => 4,
				'nombre' => 'Cañada Juncosa',
			),
			195 => 
			array (
				'id' => 2196,
				'id_provincia' => 17,
				'cod_municipio' => 47,
				'DC' => 0,
				'nombre' => 'Castelló d\'Empúries',
			),
			196 => 
			array (
				'id' => 2197,
				'id_provincia' => 18,
				'cod_municipio' => 47,
				'DC' => 6,
				'nombre' => 'Cenes de la Vega',
			),
			197 => 
			array (
				'id' => 2198,
				'id_provincia' => 19,
				'cod_municipio' => 47,
				'DC' => 9,
				'nombre' => 'Baides',
			),
			198 => 
			array (
				'id' => 2199,
				'id_provincia' => 20,
				'cod_municipio' => 47,
				'DC' => 3,
				'nombre' => 'Itsasondo',
			),
			199 => 
			array (
				'id' => 2200,
				'id_provincia' => 21,
				'cod_municipio' => 47,
				'DC' => 0,
				'nombre' => 'Manzanilla',
			),
			200 => 
			array (
				'id' => 2201,
				'id_provincia' => 22,
				'cod_municipio' => 47,
				'DC' => 5,
				'nombre' => 'Banastás',
			),
			201 => 
			array (
				'id' => 2202,
				'id_provincia' => 23,
				'cod_municipio' => 47,
				'DC' => 1,
				'nombre' => 'Iruela, La',
			),
			202 => 
			array (
				'id' => 2203,
				'id_provincia' => 24,
				'cod_municipio' => 47,
				'DC' => 6,
				'nombre' => 'Castrocontrigo',
			),
			203 => 
			array (
				'id' => 2204,
				'id_provincia' => 25,
				'cod_municipio' => 47,
				'DC' => 9,
				'nombre' => 'Bellcaire d\'Urgell',
			),
			204 => 
			array (
				'id' => 2205,
				'id_provincia' => 26,
				'cod_municipio' => 47,
				'DC' => 2,
				'nombre' => 'Cervera del Río Alhama',
			),
			205 => 
			array (
				'id' => 2206,
				'id_provincia' => 27,
				'cod_municipio' => 47,
				'DC' => 8,
				'nombre' => 'Pobra do Brollón, A',
			),
			206 => 
			array (
				'id' => 2207,
				'id_provincia' => 28,
				'cod_municipio' => 47,
				'DC' => 4,
				'nombre' => 'Collado Villalba',
			),
			207 => 
			array (
				'id' => 2208,
				'id_provincia' => 29,
				'cod_municipio' => 47,
				'DC' => 7,
				'nombre' => 'Cuevas Bajas',
			),
			208 => 
			array (
				'id' => 2209,
				'id_provincia' => 31,
				'cod_municipio' => 47,
				'DC' => 8,
				'nombre' => 'Bargota',
			),
			209 => 
			array (
				'id' => 2210,
				'id_provincia' => 32,
				'cod_municipio' => 47,
				'DC' => 3,
				'nombre' => 'Merca, A',
			),
			210 => 
			array (
				'id' => 2211,
				'id_provincia' => 33,
				'cod_municipio' => 47,
				'DC' => 9,
				'nombre' => 'Peñamellera Baja',
			),
			211 => 
			array (
				'id' => 2212,
				'id_provincia' => 34,
				'cod_municipio' => 47,
				'DC' => 4,
				'nombre' => 'Carrión de los Condes',
			),
			212 => 
			array (
				'id' => 2213,
				'id_provincia' => 36,
				'cod_municipio' => 47,
				'DC' => 0,
				'nombre' => 'Rodeiro',
			),
			213 => 
			array (
				'id' => 2214,
				'id_provincia' => 37,
				'cod_municipio' => 47,
				'DC' => 6,
				'nombre' => 'Beleña',
			),
			214 => 
			array (
				'id' => 2215,
				'id_provincia' => 38,
				'cod_municipio' => 47,
				'DC' => 2,
				'nombre' => 'Tijarafe',
			),
			215 => 
			array (
				'id' => 2216,
				'id_provincia' => 39,
				'cod_municipio' => 47,
				'DC' => 5,
				'nombre' => 'Noja',
			),
			216 => 
			array (
				'id' => 2217,
				'id_provincia' => 40,
				'cod_municipio' => 47,
				'DC' => 9,
				'nombre' => 'Castro de Fuentidueña',
			),
			217 => 
			array (
				'id' => 2218,
				'id_provincia' => 41,
				'cod_municipio' => 47,
				'DC' => 6,
				'nombre' => 'Gines',
			),
			218 => 
			array (
				'id' => 2219,
				'id_provincia' => 43,
				'cod_municipio' => 47,
				'DC' => 7,
				'nombre' => 'Constantí',
			),
			219 => 
			array (
				'id' => 2220,
				'id_provincia' => 44,
				'cod_municipio' => 47,
				'DC' => 2,
				'nombre' => 'Burbáguena',
			),
			220 => 
			array (
				'id' => 2221,
				'id_provincia' => 45,
				'cod_municipio' => 47,
				'DC' => 5,
				'nombre' => 'Cedillo del Condado',
			),
			221 => 
			array (
				'id' => 2222,
				'id_provincia' => 46,
				'cod_municipio' => 47,
				'DC' => 8,
				'nombre' => 'Bèlgida',
			),
			222 => 
			array (
				'id' => 2223,
				'id_provincia' => 47,
				'cod_municipio' => 47,
				'DC' => 4,
				'nombre' => 'Castroverde de Cerrato',
			),
			223 => 
			array (
				'id' => 2224,
				'id_provincia' => 48,
				'cod_municipio' => 47,
				'DC' => 0,
				'nombre' => 'Gizaburuaga',
			),
			224 => 
			array (
				'id' => 2225,
				'id_provincia' => 49,
				'cod_municipio' => 47,
				'DC' => 3,
				'nombre' => 'Cerecinos del Carrizal',
			),
			225 => 
			array (
				'id' => 2226,
				'id_provincia' => 50,
				'cod_municipio' => 47,
				'DC' => 6,
				'nombre' => 'Berdejo',
			),
			226 => 
			array (
				'id' => 2227,
				'id_provincia' => 2,
				'cod_municipio' => 48,
				'DC' => 5,
				'nombre' => 'Minaya',
			),
			227 => 
			array (
				'id' => 2228,
				'id_provincia' => 3,
				'cod_municipio' => 48,
				'DC' => 1,
				'nombre' => 'Callosa d\'En Sarrià',
			),
			228 => 
			array (
				'id' => 2229,
				'id_provincia' => 4,
				'cod_municipio' => 48,
				'DC' => 6,
				'nombre' => 'Gallardos, Los',
			),
			229 => 
			array (
				'id' => 2230,
				'id_provincia' => 5,
				'cod_municipio' => 48,
				'DC' => 9,
				'nombre' => 'Cantiveros',
			),
			230 => 
			array (
				'id' => 2231,
				'id_provincia' => 6,
				'cod_municipio' => 48,
				'DC' => 2,
				'nombre' => 'Esparragosa de Lares',
			),
			231 => 
			array (
				'id' => 2232,
				'id_provincia' => 7,
				'cod_municipio' => 48,
				'DC' => 8,
				'nombre' => 'Sant Josep de sa Talaia',
			),
			232 => 
			array (
				'id' => 2233,
				'id_provincia' => 8,
				'cod_municipio' => 48,
				'DC' => 4,
				'nombre' => 'Carme',
			),
			233 => 
			array (
				'id' => 2234,
				'id_provincia' => 9,
				'cod_municipio' => 48,
				'DC' => 7,
				'nombre' => 'Belorado',
			),
			234 => 
			array (
				'id' => 2235,
				'id_provincia' => 10,
				'cod_municipio' => 48,
				'DC' => 1,
				'nombre' => 'Carrascalejo',
			),
			235 => 
			array (
				'id' => 2236,
				'id_provincia' => 12,
				'cod_municipio' => 48,
				'DC' => 3,
				'nombre' => 'Cortes de Arenoso',
			),
			236 => 
			array (
				'id' => 2237,
				'id_provincia' => 13,
				'cod_municipio' => 48,
				'DC' => 9,
				'nombre' => 'Hinojosas de Calatrava',
			),
			237 => 
			array (
				'id' => 2238,
				'id_provincia' => 14,
				'cod_municipio' => 48,
				'DC' => 4,
				'nombre' => 'Palenciana',
			),
			238 => 
			array (
				'id' => 2239,
				'id_provincia' => 15,
				'cod_municipio' => 48,
				'DC' => 7,
				'nombre' => 'Miño',
			),
			239 => 
			array (
				'id' => 2240,
				'id_provincia' => 16,
				'cod_municipio' => 48,
				'DC' => 0,
				'nombre' => 'Cañamares',
			),
			240 => 
			array (
				'id' => 2241,
				'id_provincia' => 17,
				'cod_municipio' => 48,
				'DC' => 6,
				'nombre' => 'Castell-Platja d\'Aro',
			),
			241 => 
			array (
				'id' => 2242,
				'id_provincia' => 18,
				'cod_municipio' => 48,
				'DC' => 2,
				'nombre' => 'Cijuela',
			),
			242 => 
			array (
				'id' => 2243,
				'id_provincia' => 19,
				'cod_municipio' => 48,
				'DC' => 5,
				'nombre' => 'Baños de Tajo',
			),
			243 => 
			array (
				'id' => 2244,
				'id_provincia' => 20,
				'cod_municipio' => 48,
				'DC' => 9,
				'nombre' => 'Larraul',
			),
			244 => 
			array (
				'id' => 2245,
				'id_provincia' => 21,
				'cod_municipio' => 48,
				'DC' => 6,
				'nombre' => 'Marines, Los',
			),
			245 => 
			array (
				'id' => 2246,
				'id_provincia' => 22,
				'cod_municipio' => 48,
				'DC' => 1,
				'nombre' => 'Barbastro',
			),
			246 => 
			array (
				'id' => 2247,
				'id_provincia' => 23,
				'cod_municipio' => 48,
				'DC' => 7,
				'nombre' => 'Iznatoraf',
			),
			247 => 
			array (
				'id' => 2248,
				'id_provincia' => 25,
				'cod_municipio' => 48,
				'DC' => 5,
				'nombre' => 'Bell-lloc d\'Urgell',
			),
			248 => 
			array (
				'id' => 2249,
				'id_provincia' => 26,
				'cod_municipio' => 48,
				'DC' => 8,
				'nombre' => 'Cidamón',
			),
			249 => 
			array (
				'id' => 2250,
				'id_provincia' => 27,
				'cod_municipio' => 48,
				'DC' => 4,
				'nombre' => 'Pontenova, A',
			),
			250 => 
			array (
				'id' => 2251,
				'id_provincia' => 28,
				'cod_municipio' => 48,
				'DC' => 0,
				'nombre' => 'Corpa',
			),
			251 => 
			array (
				'id' => 2252,
				'id_provincia' => 29,
				'cod_municipio' => 48,
				'DC' => 3,
				'nombre' => 'Cuevas del Becerro',
			),
			252 => 
			array (
				'id' => 2253,
				'id_provincia' => 31,
				'cod_municipio' => 48,
				'DC' => 4,
				'nombre' => 'Barillas',
			),
			253 => 
			array (
				'id' => 2254,
				'id_provincia' => 32,
				'cod_municipio' => 48,
				'DC' => 9,
				'nombre' => 'Mezquita, A',
			),
			254 => 
			array (
				'id' => 2255,
				'id_provincia' => 33,
				'cod_municipio' => 48,
				'DC' => 5,
				'nombre' => 'Pesoz',
			),
			255 => 
			array (
				'id' => 2256,
				'id_provincia' => 34,
				'cod_municipio' => 48,
				'DC' => 0,
				'nombre' => 'Castil de Vela',
			),
			256 => 
			array (
				'id' => 2257,
				'id_provincia' => 36,
				'cod_municipio' => 48,
				'DC' => 6,
				'nombre' => 'Rosal, O',
			),
			257 => 
			array (
				'id' => 2258,
				'id_provincia' => 38,
				'cod_municipio' => 48,
				'DC' => 8,
				'nombre' => 'Valverde',
			),
			258 => 
			array (
				'id' => 2259,
				'id_provincia' => 39,
				'cod_municipio' => 48,
				'DC' => 1,
				'nombre' => 'Penagos',
			),
			259 => 
			array (
				'id' => 2260,
				'id_provincia' => 40,
				'cod_municipio' => 48,
				'DC' => 5,
				'nombre' => 'Castrojimeno',
			),
			260 => 
			array (
				'id' => 2261,
				'id_provincia' => 41,
				'cod_municipio' => 48,
				'DC' => 2,
				'nombre' => 'Guadalcanal',
			),
			261 => 
			array (
				'id' => 2262,
				'id_provincia' => 42,
				'cod_municipio' => 48,
				'DC' => 7,
				'nombre' => 'Caltojar',
			),
			262 => 
			array (
				'id' => 2263,
				'id_provincia' => 43,
				'cod_municipio' => 48,
				'DC' => 3,
				'nombre' => 'Corbera d\'Ebre',
			),
			263 => 
			array (
				'id' => 2264,
				'id_provincia' => 44,
				'cod_municipio' => 48,
				'DC' => 8,
				'nombre' => 'Cabra de Mora',
			),
			264 => 
			array (
				'id' => 2265,
				'id_provincia' => 45,
				'cod_municipio' => 48,
				'DC' => 1,
				'nombre' => 'Cerralbos, Los',
			),
			265 => 
			array (
				'id' => 2266,
				'id_provincia' => 46,
				'cod_municipio' => 48,
				'DC' => 4,
				'nombre' => 'Bellreguard',
			),
			266 => 
			array (
				'id' => 2267,
				'id_provincia' => 47,
				'cod_municipio' => 48,
				'DC' => 0,
				'nombre' => 'Ceinos de Campos',
			),
			267 => 
			array (
				'id' => 2268,
				'id_provincia' => 48,
				'cod_municipio' => 48,
				'DC' => 6,
				'nombre' => 'Ibarrangelu',
			),
			268 => 
			array (
				'id' => 2269,
				'id_provincia' => 49,
				'cod_municipio' => 48,
				'DC' => 9,
				'nombre' => 'Cernadilla',
			),
			269 => 
			array (
				'id' => 2270,
				'id_provincia' => 50,
				'cod_municipio' => 48,
				'DC' => 2,
				'nombre' => 'Berrueco',
			),
			270 => 
			array (
				'id' => 2271,
				'id_provincia' => 1,
				'cod_municipio' => 49,
				'DC' => 3,
				'nombre' => 'Añana',
			),
			271 => 
			array (
				'id' => 2272,
				'id_provincia' => 2,
				'cod_municipio' => 49,
				'DC' => 8,
				'nombre' => 'Molinicos',
			),
			272 => 
			array (
				'id' => 2273,
				'id_provincia' => 3,
				'cod_municipio' => 49,
				'DC' => 4,
				'nombre' => 'Callosa de Segura',
			),
			273 => 
			array (
				'id' => 2274,
				'id_provincia' => 4,
				'cod_municipio' => 49,
				'DC' => 9,
				'nombre' => 'Garrucha',
			),
			274 => 
			array (
				'id' => 2275,
				'id_provincia' => 5,
				'cod_municipio' => 49,
				'DC' => 2,
				'nombre' => 'Cardeñosa',
			),
			275 => 
			array (
				'id' => 2276,
				'id_provincia' => 6,
				'cod_municipio' => 49,
				'DC' => 5,
				'nombre' => 'Feria',
			),
			276 => 
			array (
				'id' => 2277,
				'id_provincia' => 7,
				'cod_municipio' => 49,
				'DC' => 1,
				'nombre' => 'Sant Joan',
			),
			277 => 
			array (
				'id' => 2278,
				'id_provincia' => 8,
				'cod_municipio' => 49,
				'DC' => 7,
				'nombre' => 'Casserres',
			),
			278 => 
			array (
				'id' => 2279,
				'id_provincia' => 10,
				'cod_municipio' => 49,
				'DC' => 4,
				'nombre' => 'Casar de Cáceres',
			),
			279 => 
			array (
				'id' => 2280,
				'id_provincia' => 12,
				'cod_municipio' => 49,
				'DC' => 6,
				'nombre' => 'Costur',
			),
			280 => 
			array (
				'id' => 2281,
				'id_provincia' => 13,
				'cod_municipio' => 49,
				'DC' => 2,
				'nombre' => 'Horcajo de los Montes',
			),
			281 => 
			array (
				'id' => 2282,
				'id_provincia' => 14,
				'cod_municipio' => 49,
				'DC' => 7,
				'nombre' => 'Palma del Río',
			),
			282 => 
			array (
				'id' => 2283,
				'id_provincia' => 15,
				'cod_municipio' => 49,
				'DC' => 0,
				'nombre' => 'Moeche',
			),
			283 => 
			array (
				'id' => 2284,
				'id_provincia' => 16,
				'cod_municipio' => 49,
				'DC' => 3,
				'nombre' => 'Cañavate, El',
			),
			284 => 
			array (
				'id' => 2285,
				'id_provincia' => 17,
				'cod_municipio' => 49,
				'DC' => 9,
				'nombre' => 'Celrà',
			),
			285 => 
			array (
				'id' => 2286,
				'id_provincia' => 18,
				'cod_municipio' => 49,
				'DC' => 5,
				'nombre' => 'Cogollos de Guadix',
			),
			286 => 
			array (
				'id' => 2287,
				'id_provincia' => 19,
				'cod_municipio' => 49,
				'DC' => 8,
				'nombre' => 'Bañuelos',
			),
			287 => 
			array (
				'id' => 2288,
				'id_provincia' => 20,
				'cod_municipio' => 49,
				'DC' => 2,
				'nombre' => 'Lazkao',
			),
			288 => 
			array (
				'id' => 2289,
				'id_provincia' => 21,
				'cod_municipio' => 49,
				'DC' => 9,
				'nombre' => 'Minas de Riotinto',
			),
			289 => 
			array (
				'id' => 2290,
				'id_provincia' => 22,
				'cod_municipio' => 49,
				'DC' => 4,
				'nombre' => 'Barbués',
			),
			290 => 
			array (
				'id' => 2291,
				'id_provincia' => 23,
				'cod_municipio' => 49,
				'DC' => 0,
				'nombre' => 'Jabalquinto',
			),
			291 => 
			array (
				'id' => 2292,
				'id_provincia' => 24,
				'cod_municipio' => 49,
				'DC' => 5,
				'nombre' => 'Castropodame',
			),
			292 => 
			array (
				'id' => 2293,
				'id_provincia' => 25,
				'cod_municipio' => 49,
				'DC' => 8,
				'nombre' => 'Bellmunt d\'Urgell',
			),
			293 => 
			array (
				'id' => 2294,
				'id_provincia' => 26,
				'cod_municipio' => 49,
				'DC' => 1,
				'nombre' => 'Cihuri',
			),
			294 => 
			array (
				'id' => 2295,
				'id_provincia' => 27,
				'cod_municipio' => 49,
				'DC' => 7,
				'nombre' => 'Portomarín',
			),
			295 => 
			array (
				'id' => 2296,
				'id_provincia' => 28,
				'cod_municipio' => 49,
				'DC' => 3,
				'nombre' => 'Coslada',
			),
			296 => 
			array (
				'id' => 2297,
				'id_provincia' => 29,
				'cod_municipio' => 49,
				'DC' => 6,
				'nombre' => 'Cuevas de San Marcos',
			),
			297 => 
			array (
				'id' => 2298,
				'id_provincia' => 31,
				'cod_municipio' => 49,
				'DC' => 7,
				'nombre' => 'Basaburua',
			),
			298 => 
			array (
				'id' => 2299,
				'id_provincia' => 32,
				'cod_municipio' => 49,
				'DC' => 2,
				'nombre' => 'Montederramo',
			),
			299 => 
			array (
				'id' => 2300,
				'id_provincia' => 33,
				'cod_municipio' => 49,
				'DC' => 8,
				'nombre' => 'Piloña',
			),
			300 => 
			array (
				'id' => 2301,
				'id_provincia' => 34,
				'cod_municipio' => 49,
				'DC' => 3,
				'nombre' => 'Castrejón de la Peña',
			),
			301 => 
			array (
				'id' => 2302,
				'id_provincia' => 36,
				'cod_municipio' => 49,
				'DC' => 9,
				'nombre' => 'Salceda de Caselas',
			),
			302 => 
			array (
				'id' => 2303,
				'id_provincia' => 37,
				'cod_municipio' => 49,
				'DC' => 5,
				'nombre' => 'Bermellar',
			),
			303 => 
			array (
				'id' => 2304,
				'id_provincia' => 38,
				'cod_municipio' => 49,
				'DC' => 1,
				'nombre' => 'Valle Gran Rey',
			),
			304 => 
			array (
				'id' => 2305,
				'id_provincia' => 39,
				'cod_municipio' => 49,
				'DC' => 4,
				'nombre' => 'Peñarrubia',
			),
			305 => 
			array (
				'id' => 2306,
				'id_provincia' => 40,
				'cod_municipio' => 49,
				'DC' => 8,
				'nombre' => 'Castroserna de Abajo',
			),
			306 => 
			array (
				'id' => 2307,
				'id_provincia' => 41,
				'cod_municipio' => 49,
				'DC' => 5,
				'nombre' => 'Guillena',
			),
			307 => 
			array (
				'id' => 2308,
				'id_provincia' => 42,
				'cod_municipio' => 49,
				'DC' => 0,
				'nombre' => 'Candilichera',
			),
			308 => 
			array (
				'id' => 2309,
				'id_provincia' => 43,
				'cod_municipio' => 49,
				'DC' => 6,
				'nombre' => 'Cornudella de Montsant',
			),
			309 => 
			array (
				'id' => 2310,
				'id_provincia' => 44,
				'cod_municipio' => 49,
				'DC' => 1,
				'nombre' => 'Calaceite',
			),
			310 => 
			array (
				'id' => 2311,
				'id_provincia' => 45,
				'cod_municipio' => 49,
				'DC' => 4,
				'nombre' => 'Cervera de los Montes',
			),
			311 => 
			array (
				'id' => 2312,
				'id_provincia' => 46,
				'cod_municipio' => 49,
				'DC' => 7,
				'nombre' => 'Bellús',
			),
			312 => 
			array (
				'id' => 2313,
				'id_provincia' => 47,
				'cod_municipio' => 49,
				'DC' => 3,
				'nombre' => 'Cervillego de la Cruz',
			),
			313 => 
			array (
				'id' => 2314,
				'id_provincia' => 48,
				'cod_municipio' => 49,
				'DC' => 9,
				'nombre' => 'Ispaster',
			),
			314 => 
			array (
				'id' => 2315,
				'id_provincia' => 2,
				'cod_municipio' => 50,
				'DC' => 1,
				'nombre' => 'Montalvos',
			),
			315 => 
			array (
				'id' => 2316,
				'id_provincia' => 3,
				'cod_municipio' => 50,
				'DC' => 7,
				'nombre' => 'Campello, el',
			),
			316 => 
			array (
				'id' => 2317,
				'id_provincia' => 4,
				'cod_municipio' => 50,
				'DC' => 2,
				'nombre' => 'Gérgal',
			),
			317 => 
			array (
				'id' => 2318,
				'id_provincia' => 6,
				'cod_municipio' => 50,
				'DC' => 8,
				'nombre' => 'Fregenal de la Sierra',
			),
			318 => 
			array (
				'id' => 2319,
				'id_provincia' => 7,
				'cod_municipio' => 50,
				'DC' => 4,
				'nombre' => 'Sant Joan de Labritja',
			),
			319 => 
			array (
				'id' => 2320,
				'id_provincia' => 8,
				'cod_municipio' => 50,
				'DC' => 0,
				'nombre' => 'Castellar del Riu',
			),
			320 => 
			array (
				'id' => 2321,
				'id_provincia' => 9,
				'cod_municipio' => 50,
				'DC' => 3,
				'nombre' => 'Berberana',
			),
			321 => 
			array (
				'id' => 2322,
				'id_provincia' => 10,
				'cod_municipio' => 50,
				'DC' => 7,
				'nombre' => 'Casar de Palomero',
			),
			322 => 
			array (
				'id' => 2323,
				'id_provincia' => 12,
				'cod_municipio' => 50,
				'DC' => 9,
				'nombre' => 'Coves de Vinromà, les',
			),
			323 => 
			array (
				'id' => 2324,
				'id_provincia' => 13,
				'cod_municipio' => 50,
				'DC' => 5,
				'nombre' => 'Labores, Las',
			),
			324 => 
			array (
				'id' => 2325,
				'id_provincia' => 14,
				'cod_municipio' => 50,
				'DC' => 0,
				'nombre' => 'Pedro Abad',
			),
			325 => 
			array (
				'id' => 2326,
				'id_provincia' => 15,
				'cod_municipio' => 50,
				'DC' => 3,
				'nombre' => 'Monfero',
			),
			326 => 
			array (
				'id' => 2327,
				'id_provincia' => 16,
				'cod_municipio' => 50,
				'DC' => 6,
				'nombre' => 'Cañaveras',
			),
			327 => 
			array (
				'id' => 2328,
				'id_provincia' => 17,
				'cod_municipio' => 50,
				'DC' => 2,
				'nombre' => 'Cervià de Ter',
			),
			328 => 
			array (
				'id' => 2329,
				'id_provincia' => 18,
				'cod_municipio' => 50,
				'DC' => 8,
				'nombre' => 'Cogollos de la Vega',
			),
			329 => 
			array (
				'id' => 2330,
				'id_provincia' => 19,
				'cod_municipio' => 50,
				'DC' => 1,
				'nombre' => 'Barriopedro',
			),
			330 => 
			array (
				'id' => 2331,
				'id_provincia' => 20,
				'cod_municipio' => 50,
				'DC' => 5,
				'nombre' => 'Leaburu',
			),
			331 => 
			array (
				'id' => 2332,
				'id_provincia' => 21,
				'cod_municipio' => 50,
				'DC' => 2,
				'nombre' => 'Moguer',
			),
			332 => 
			array (
				'id' => 2333,
				'id_provincia' => 22,
				'cod_municipio' => 50,
				'DC' => 7,
				'nombre' => 'Barbuñales',
			),
			333 => 
			array (
				'id' => 2334,
				'id_provincia' => 23,
				'cod_municipio' => 50,
				'DC' => 3,
				'nombre' => 'Jaén',
			),
			334 => 
			array (
				'id' => 2335,
				'id_provincia' => 24,
				'cod_municipio' => 50,
				'DC' => 8,
				'nombre' => 'Castrotierra de Valmadrigal',
			),
			335 => 
			array (
				'id' => 2336,
				'id_provincia' => 25,
				'cod_municipio' => 50,
				'DC' => 1,
				'nombre' => 'Bellpuig',
			),
			336 => 
			array (
				'id' => 2337,
				'id_provincia' => 26,
				'cod_municipio' => 50,
				'DC' => 4,
				'nombre' => 'Cirueña',
			),
			337 => 
			array (
				'id' => 2338,
				'id_provincia' => 27,
				'cod_municipio' => 50,
				'DC' => 0,
				'nombre' => 'Quiroga',
			),
			338 => 
			array (
				'id' => 2339,
				'id_provincia' => 28,
				'cod_municipio' => 50,
				'DC' => 6,
				'nombre' => 'Cubas de la Sagra',
			),
			339 => 
			array (
				'id' => 2340,
				'id_provincia' => 29,
				'cod_municipio' => 50,
				'DC' => 9,
				'nombre' => 'Cútar',
			),
			340 => 
			array (
				'id' => 2341,
				'id_provincia' => 31,
				'cod_municipio' => 50,
				'DC' => 0,
				'nombre' => 'Baztan',
			),
			341 => 
			array (
				'id' => 2342,
				'id_provincia' => 32,
				'cod_municipio' => 50,
				'DC' => 5,
				'nombre' => 'Monterrei',
			),
			342 => 
			array (
				'id' => 2343,
				'id_provincia' => 33,
				'cod_municipio' => 50,
				'DC' => 1,
				'nombre' => 'Ponga',
			),
			343 => 
			array (
				'id' => 2344,
				'id_provincia' => 34,
				'cod_municipio' => 50,
				'DC' => 6,
				'nombre' => 'Castrillo de Don Juan',
			),
			344 => 
			array (
				'id' => 2345,
				'id_provincia' => 36,
				'cod_municipio' => 50,
				'DC' => 2,
				'nombre' => 'Salvaterra de Miño',
			),
			345 => 
			array (
				'id' => 2346,
				'id_provincia' => 37,
				'cod_municipio' => 50,
				'DC' => 8,
				'nombre' => 'Berrocal de Huebra',
			),
			346 => 
			array (
				'id' => 2347,
				'id_provincia' => 38,
				'cod_municipio' => 50,
				'DC' => 4,
				'nombre' => 'Vallehermoso',
			),
			347 => 
			array (
				'id' => 2348,
				'id_provincia' => 39,
				'cod_municipio' => 50,
				'DC' => 7,
				'nombre' => 'Pesaguero',
			),
			348 => 
			array (
				'id' => 2349,
				'id_provincia' => 41,
				'cod_municipio' => 50,
				'DC' => 8,
				'nombre' => 'Herrera',
			),
			349 => 
			array (
				'id' => 2350,
				'id_provincia' => 42,
				'cod_municipio' => 50,
				'DC' => 3,
				'nombre' => 'Cañamaque',
			),
			350 => 
			array (
				'id' => 2351,
				'id_provincia' => 43,
				'cod_municipio' => 50,
				'DC' => 9,
				'nombre' => 'Creixell',
			),
			351 => 
			array (
				'id' => 2352,
				'id_provincia' => 44,
				'cod_municipio' => 50,
				'DC' => 4,
				'nombre' => 'Calamocha',
			),
			352 => 
			array (
				'id' => 2353,
				'id_provincia' => 45,
				'cod_municipio' => 50,
				'DC' => 7,
				'nombre' => 'Ciruelos',
			),
			353 => 
			array (
				'id' => 2354,
				'id_provincia' => 46,
				'cod_municipio' => 50,
				'DC' => 0,
				'nombre' => 'Benagéber',
			),
			354 => 
			array (
				'id' => 2355,
				'id_provincia' => 47,
				'cod_municipio' => 50,
				'DC' => 6,
				'nombre' => 'Cigales',
			),
			355 => 
			array (
				'id' => 2356,
				'id_provincia' => 48,
				'cod_municipio' => 50,
				'DC' => 2,
				'nombre' => 'Izurtza',
			),
			356 => 
			array (
				'id' => 2357,
				'id_provincia' => 49,
				'cod_municipio' => 50,
				'DC' => 5,
				'nombre' => 'Cobreros',
			),
			357 => 
			array (
				'id' => 2358,
				'id_provincia' => 50,
				'cod_municipio' => 50,
				'DC' => 8,
				'nombre' => 'Bijuesca',
			),
			358 => 
			array (
				'id' => 2359,
				'id_provincia' => 1,
				'cod_municipio' => 51,
				'DC' => 3,
				'nombre' => 'Salvatierra/Agurain',
			),
			359 => 
			array (
				'id' => 2360,
				'id_provincia' => 2,
				'cod_municipio' => 51,
				'DC' => 8,
				'nombre' => 'Montealegre del Castillo',
			),
			360 => 
			array (
				'id' => 2361,
				'id_provincia' => 3,
				'cod_municipio' => 51,
				'DC' => 4,
				'nombre' => 'Campo de Mirra/Camp de Mirra, el',
			),
			361 => 
			array (
				'id' => 2362,
				'id_provincia' => 4,
				'cod_municipio' => 51,
				'DC' => 9,
				'nombre' => 'Huécija',
			),
			362 => 
			array (
				'id' => 2363,
				'id_provincia' => 5,
				'cod_municipio' => 51,
				'DC' => 2,
				'nombre' => 'Carrera, La',
			),
			363 => 
			array (
				'id' => 2364,
				'id_provincia' => 6,
				'cod_municipio' => 51,
				'DC' => 5,
				'nombre' => 'Fuenlabrada de los Montes',
			),
			364 => 
			array (
				'id' => 2365,
				'id_provincia' => 7,
				'cod_municipio' => 51,
				'DC' => 1,
				'nombre' => 'Sant Llorenç des Cardassar',
			),
			365 => 
			array (
				'id' => 2366,
				'id_provincia' => 8,
				'cod_municipio' => 51,
				'DC' => 7,
				'nombre' => 'Castellar del Vallès',
			),
			366 => 
			array (
				'id' => 2367,
				'id_provincia' => 9,
				'cod_municipio' => 51,
				'DC' => 0,
				'nombre' => 'Berlangas de Roa',
			),
			367 => 
			array (
				'id' => 2368,
				'id_provincia' => 10,
				'cod_municipio' => 51,
				'DC' => 4,
				'nombre' => 'Casares de las Hurdes',
			),
			368 => 
			array (
				'id' => 2369,
				'id_provincia' => 12,
				'cod_municipio' => 51,
				'DC' => 6,
				'nombre' => 'Culla',
			),
			369 => 
			array (
				'id' => 2370,
				'id_provincia' => 13,
				'cod_municipio' => 51,
				'DC' => 2,
				'nombre' => 'Luciana',
			),
			370 => 
			array (
				'id' => 2371,
				'id_provincia' => 14,
				'cod_municipio' => 51,
				'DC' => 7,
				'nombre' => 'Pedroche',
			),
			371 => 
			array (
				'id' => 2372,
				'id_provincia' => 15,
				'cod_municipio' => 51,
				'DC' => 0,
				'nombre' => 'Mugardos',
			),
			372 => 
			array (
				'id' => 2373,
				'id_provincia' => 16,
				'cod_municipio' => 51,
				'DC' => 3,
				'nombre' => 'Cañaveruelas',
			),
			373 => 
			array (
				'id' => 2374,
				'id_provincia' => 17,
				'cod_municipio' => 51,
				'DC' => 9,
				'nombre' => 'Cistella',
			),
			374 => 
			array (
				'id' => 2375,
				'id_provincia' => 18,
				'cod_municipio' => 51,
				'DC' => 5,
				'nombre' => 'Colomera',
			),
			375 => 
			array (
				'id' => 2376,
				'id_provincia' => 19,
				'cod_municipio' => 51,
				'DC' => 8,
				'nombre' => 'Berninches',
			),
			376 => 
			array (
				'id' => 2377,
				'id_provincia' => 20,
				'cod_municipio' => 51,
				'DC' => 2,
				'nombre' => 'Legazpi',
			),
			377 => 
			array (
				'id' => 2378,
				'id_provincia' => 21,
				'cod_municipio' => 51,
				'DC' => 9,
				'nombre' => 'Nava, La',
			),
			378 => 
			array (
				'id' => 2379,
				'id_provincia' => 22,
				'cod_municipio' => 51,
				'DC' => 4,
				'nombre' => 'Bárcabo',
			),
			379 => 
			array (
				'id' => 2380,
				'id_provincia' => 23,
				'cod_municipio' => 51,
				'DC' => 0,
				'nombre' => 'Jamilena',
			),
			380 => 
			array (
				'id' => 2381,
				'id_provincia' => 24,
				'cod_municipio' => 51,
				'DC' => 5,
				'nombre' => 'Cea',
			),
			381 => 
			array (
				'id' => 2382,
				'id_provincia' => 25,
				'cod_municipio' => 51,
				'DC' => 8,
				'nombre' => 'Bellver de Cerdanya',
			),
			382 => 
			array (
				'id' => 2383,
				'id_provincia' => 26,
				'cod_municipio' => 51,
				'DC' => 1,
				'nombre' => 'Clavijo',
			),
			383 => 
			array (
				'id' => 2384,
				'id_provincia' => 27,
				'cod_municipio' => 51,
				'DC' => 7,
				'nombre' => 'Ribadeo',
			),
			384 => 
			array (
				'id' => 2385,
				'id_provincia' => 28,
				'cod_municipio' => 51,
				'DC' => 3,
				'nombre' => 'Chapinería',
			),
			385 => 
			array (
				'id' => 2386,
				'id_provincia' => 29,
				'cod_municipio' => 51,
				'DC' => 6,
				'nombre' => 'Estepona',
			),
			386 => 
			array (
				'id' => 2387,
				'id_provincia' => 31,
				'cod_municipio' => 51,
				'DC' => 7,
				'nombre' => 'Beire',
			),
			387 => 
			array (
				'id' => 2388,
				'id_provincia' => 32,
				'cod_municipio' => 51,
				'DC' => 2,
				'nombre' => 'Muíños',
			),
			388 => 
			array (
				'id' => 2389,
				'id_provincia' => 33,
				'cod_municipio' => 51,
				'DC' => 8,
				'nombre' => 'Pravia',
			),
			389 => 
			array (
				'id' => 2390,
				'id_provincia' => 34,
				'cod_municipio' => 51,
				'DC' => 3,
				'nombre' => 'Castrillo de Onielo',
			),
			390 => 
			array (
				'id' => 2391,
				'id_provincia' => 36,
				'cod_municipio' => 51,
				'DC' => 9,
				'nombre' => 'Sanxenxo',
			),
			391 => 
			array (
				'id' => 2392,
				'id_provincia' => 37,
				'cod_municipio' => 51,
				'DC' => 5,
				'nombre' => 'Berrocal de Salvatierra',
			),
			392 => 
			array (
				'id' => 2393,
				'id_provincia' => 38,
				'cod_municipio' => 51,
				'DC' => 1,
				'nombre' => 'Victoria de Acentejo, La',
			),
			393 => 
			array (
				'id' => 2394,
				'id_provincia' => 39,
				'cod_municipio' => 51,
				'DC' => 4,
				'nombre' => 'Pesquera',
			),
			394 => 
			array (
				'id' => 2395,
				'id_provincia' => 40,
				'cod_municipio' => 51,
				'DC' => 8,
				'nombre' => 'Castroserracín',
			),
			395 => 
			array (
				'id' => 2396,
				'id_provincia' => 41,
				'cod_municipio' => 51,
				'DC' => 5,
				'nombre' => 'Huévar del Aljarafe',
			),
			396 => 
			array (
				'id' => 2397,
				'id_provincia' => 42,
				'cod_municipio' => 51,
				'DC' => 0,
				'nombre' => 'Carabantes',
			),
			397 => 
			array (
				'id' => 2398,
				'id_provincia' => 43,
				'cod_municipio' => 51,
				'DC' => 6,
				'nombre' => 'Cunit',
			),
			398 => 
			array (
				'id' => 2399,
				'id_provincia' => 44,
				'cod_municipio' => 51,
				'DC' => 1,
				'nombre' => 'Calanda',
			),
			399 => 
			array (
				'id' => 2400,
				'id_provincia' => 45,
				'cod_municipio' => 51,
				'DC' => 4,
				'nombre' => 'Cobeja',
			),
			400 => 
			array (
				'id' => 2401,
				'id_provincia' => 46,
				'cod_municipio' => 51,
				'DC' => 7,
				'nombre' => 'Benaguasil',
			),
			401 => 
			array (
				'id' => 2402,
				'id_provincia' => 47,
				'cod_municipio' => 51,
				'DC' => 3,
				'nombre' => 'Ciguñuela',
			),
			402 => 
			array (
				'id' => 2403,
				'id_provincia' => 48,
				'cod_municipio' => 51,
				'DC' => 9,
				'nombre' => 'Lanestosa',
			),
			403 => 
			array (
				'id' => 2404,
				'id_provincia' => 50,
				'cod_municipio' => 51,
				'DC' => 5,
				'nombre' => 'Biota',
			),
			404 => 
			array (
				'id' => 2405,
				'id_provincia' => 1,
				'cod_municipio' => 52,
				'DC' => 8,
				'nombre' => 'Samaniego',
			),
			405 => 
			array (
				'id' => 2406,
				'id_provincia' => 2,
				'cod_municipio' => 52,
				'DC' => 3,
				'nombre' => 'Motilleja',
			),
			406 => 
			array (
				'id' => 2407,
				'id_provincia' => 3,
				'cod_municipio' => 52,
				'DC' => 9,
				'nombre' => 'Cañada',
			),
			407 => 
			array (
				'id' => 2408,
				'id_provincia' => 4,
				'cod_municipio' => 52,
				'DC' => 4,
				'nombre' => 'Huércal de Almería',
			),
			408 => 
			array (
				'id' => 2409,
				'id_provincia' => 5,
				'cod_municipio' => 52,
				'DC' => 7,
				'nombre' => 'Casas del Puerto',
			),
			409 => 
			array (
				'id' => 2410,
				'id_provincia' => 6,
				'cod_municipio' => 52,
				'DC' => 0,
				'nombre' => 'Fuente de Cantos',
			),
			410 => 
			array (
				'id' => 2411,
				'id_provincia' => 7,
				'cod_municipio' => 52,
				'DC' => 6,
				'nombre' => 'Sant Lluís',
			),
			411 => 
			array (
				'id' => 2412,
				'id_provincia' => 8,
				'cod_municipio' => 52,
				'DC' => 2,
				'nombre' => 'Castellar de n\'Hug',
			),
			412 => 
			array (
				'id' => 2413,
				'id_provincia' => 9,
				'cod_municipio' => 52,
				'DC' => 5,
				'nombre' => 'Berzosa de Bureba',
			),
			413 => 
			array (
				'id' => 2414,
				'id_provincia' => 10,
				'cod_municipio' => 52,
				'DC' => 9,
				'nombre' => 'Casas de Don Antonio',
			),
			414 => 
			array (
				'id' => 2415,
				'id_provincia' => 12,
				'cod_municipio' => 52,
				'DC' => 1,
				'nombre' => 'Chert/Xert',
			),
			415 => 
			array (
				'id' => 2416,
				'id_provincia' => 13,
				'cod_municipio' => 52,
				'DC' => 7,
				'nombre' => 'Malagón',
			),
			416 => 
			array (
				'id' => 2417,
				'id_provincia' => 14,
				'cod_municipio' => 52,
				'DC' => 2,
				'nombre' => 'Peñarroya-Pueblonuevo',
			),
			417 => 
			array (
				'id' => 2418,
				'id_provincia' => 15,
				'cod_municipio' => 52,
				'DC' => 5,
				'nombre' => 'Muxía',
			),
			418 => 
			array (
				'id' => 2419,
				'id_provincia' => 16,
				'cod_municipio' => 52,
				'DC' => 8,
				'nombre' => 'Cañete',
			),
			419 => 
			array (
				'id' => 2420,
				'id_provincia' => 17,
				'cod_municipio' => 52,
				'DC' => 4,
				'nombre' => 'Siurana',
			),
			420 => 
			array (
				'id' => 2421,
				'id_provincia' => 19,
				'cod_municipio' => 52,
				'DC' => 3,
				'nombre' => 'Bodera, La',
			),
			421 => 
			array (
				'id' => 2422,
				'id_provincia' => 20,
				'cod_municipio' => 52,
				'DC' => 7,
				'nombre' => 'Legorreta',
			),
			422 => 
			array (
				'id' => 2423,
				'id_provincia' => 21,
				'cod_municipio' => 52,
				'DC' => 4,
				'nombre' => 'Nerva',
			),
			423 => 
			array (
				'id' => 2424,
				'id_provincia' => 22,
				'cod_municipio' => 52,
				'DC' => 9,
				'nombre' => 'Belver de Cinca',
			),
			424 => 
			array (
				'id' => 2425,
				'id_provincia' => 23,
				'cod_municipio' => 52,
				'DC' => 5,
				'nombre' => 'Jimena',
			),
			425 => 
			array (
				'id' => 2426,
				'id_provincia' => 24,
				'cod_municipio' => 52,
				'DC' => 0,
				'nombre' => 'Cebanico',
			),
			426 => 
			array (
				'id' => 2427,
				'id_provincia' => 25,
				'cod_municipio' => 52,
				'DC' => 3,
				'nombre' => 'Bellvís',
			),
			427 => 
			array (
				'id' => 2428,
				'id_provincia' => 26,
				'cod_municipio' => 52,
				'DC' => 6,
				'nombre' => 'Cordovín',
			),
			428 => 
			array (
				'id' => 2429,
				'id_provincia' => 27,
				'cod_municipio' => 52,
				'DC' => 2,
				'nombre' => 'Ribas de Sil',
			),
			429 => 
			array (
				'id' => 2430,
				'id_provincia' => 28,
				'cod_municipio' => 52,
				'DC' => 8,
				'nombre' => 'Chinchón',
			),
			430 => 
			array (
				'id' => 2431,
				'id_provincia' => 29,
				'cod_municipio' => 52,
				'DC' => 1,
				'nombre' => 'Faraján',
			),
			431 => 
			array (
				'id' => 2432,
				'id_provincia' => 31,
				'cod_municipio' => 52,
				'DC' => 2,
				'nombre' => 'Belascoáin',
			),
			432 => 
			array (
				'id' => 2433,
				'id_provincia' => 32,
				'cod_municipio' => 52,
				'DC' => 7,
				'nombre' => 'Nogueira de Ramuín',
			),
			433 => 
			array (
				'id' => 2434,
				'id_provincia' => 33,
				'cod_municipio' => 52,
				'DC' => 3,
				'nombre' => 'Proaza',
			),
			434 => 
			array (
				'id' => 2435,
				'id_provincia' => 34,
				'cod_municipio' => 52,
				'DC' => 8,
				'nombre' => 'Castrillo de Villavega',
			),
			435 => 
			array (
				'id' => 2436,
				'id_provincia' => 36,
				'cod_municipio' => 52,
				'DC' => 4,
				'nombre' => 'Silleda',
			),
			436 => 
			array (
				'id' => 2437,
				'id_provincia' => 37,
				'cod_municipio' => 52,
				'DC' => 0,
				'nombre' => 'Boada',
			),
			437 => 
			array (
				'id' => 2438,
				'id_provincia' => 38,
				'cod_municipio' => 52,
				'DC' => 6,
				'nombre' => 'Vilaflor',
			),
			438 => 
			array (
				'id' => 2439,
				'id_provincia' => 39,
				'cod_municipio' => 52,
				'DC' => 9,
				'nombre' => 'Piélagos',
			),
			439 => 
			array (
				'id' => 2440,
				'id_provincia' => 40,
				'cod_municipio' => 52,
				'DC' => 3,
				'nombre' => 'Cedillo de la Torre',
			),
			440 => 
			array (
				'id' => 2441,
				'id_provincia' => 41,
				'cod_municipio' => 52,
				'DC' => 0,
				'nombre' => 'Lantejuela, La',
			),
			441 => 
			array (
				'id' => 2442,
				'id_provincia' => 42,
				'cod_municipio' => 52,
				'DC' => 5,
				'nombre' => 'Caracena',
			),
			442 => 
			array (
				'id' => 2443,
				'id_provincia' => 43,
				'cod_municipio' => 52,
				'DC' => 1,
				'nombre' => 'Xerta',
			),
			443 => 
			array (
				'id' => 2444,
				'id_provincia' => 44,
				'cod_municipio' => 52,
				'DC' => 6,
				'nombre' => 'Calomarde',
			),
			444 => 
			array (
				'id' => 2445,
				'id_provincia' => 45,
				'cod_municipio' => 52,
				'DC' => 9,
				'nombre' => 'Cobisa',
			),
			445 => 
			array (
				'id' => 2446,
				'id_provincia' => 46,
				'cod_municipio' => 52,
				'DC' => 2,
				'nombre' => 'Benavites',
			),
			446 => 
			array (
				'id' => 2447,
				'id_provincia' => 47,
				'cod_municipio' => 52,
				'DC' => 8,
				'nombre' => 'Cistérniga',
			),
			447 => 
			array (
				'id' => 2448,
				'id_provincia' => 48,
				'cod_municipio' => 52,
				'DC' => 4,
				'nombre' => 'Larrabetzu',
			),
			448 => 
			array (
				'id' => 2449,
				'id_provincia' => 49,
				'cod_municipio' => 52,
				'DC' => 7,
				'nombre' => 'Coomonte',
			),
			449 => 
			array (
				'id' => 2450,
				'id_provincia' => 50,
				'cod_municipio' => 52,
				'DC' => 0,
				'nombre' => 'Bisimbre',
			),
			450 => 
			array (
				'id' => 2451,
				'id_provincia' => 1,
				'cod_municipio' => 53,
				'DC' => 4,
				'nombre' => 'San Millán/Donemiliaga',
			),
			451 => 
			array (
				'id' => 2452,
				'id_provincia' => 2,
				'cod_municipio' => 53,
				'DC' => 9,
				'nombre' => 'Munera',
			),
			452 => 
			array (
				'id' => 2453,
				'id_provincia' => 3,
				'cod_municipio' => 53,
				'DC' => 5,
				'nombre' => 'Castalla',
			),
			453 => 
			array (
				'id' => 2454,
				'id_provincia' => 4,
				'cod_municipio' => 53,
				'DC' => 0,
				'nombre' => 'Huércal-Overa',
			),
			454 => 
			array (
				'id' => 2455,
				'id_provincia' => 5,
				'cod_municipio' => 53,
				'DC' => 3,
				'nombre' => 'Casasola',
			),
			455 => 
			array (
				'id' => 2456,
				'id_provincia' => 6,
				'cod_municipio' => 53,
				'DC' => 6,
				'nombre' => 'Fuente del Arco',
			),
			456 => 
			array (
				'id' => 2457,
				'id_provincia' => 7,
				'cod_municipio' => 53,
				'DC' => 2,
				'nombre' => 'Santa Eugènia',
			),
			457 => 
			array (
				'id' => 2458,
				'id_provincia' => 8,
				'cod_municipio' => 53,
				'DC' => 8,
				'nombre' => 'Castellbell i el Vilar',
			),
			458 => 
			array (
				'id' => 2459,
				'id_provincia' => 10,
				'cod_municipio' => 53,
				'DC' => 5,
				'nombre' => 'Casas de Don Gómez',
			),
			459 => 
			array (
				'id' => 2460,
				'id_provincia' => 12,
				'cod_municipio' => 53,
				'DC' => 7,
				'nombre' => 'Chilches/Xilxes',
			),
			460 => 
			array (
				'id' => 2461,
				'id_provincia' => 13,
				'cod_municipio' => 53,
				'DC' => 3,
				'nombre' => 'Manzanares',
			),
			461 => 
			array (
				'id' => 2462,
				'id_provincia' => 14,
				'cod_municipio' => 53,
				'DC' => 8,
				'nombre' => 'Posadas',
			),
			462 => 
			array (
				'id' => 2463,
				'id_provincia' => 15,
				'cod_municipio' => 53,
				'DC' => 1,
				'nombre' => 'Muros',
			),
			463 => 
			array (
				'id' => 2464,
				'id_provincia' => 16,
				'cod_municipio' => 53,
				'DC' => 4,
				'nombre' => 'Cañizares',
			),
			464 => 
			array (
				'id' => 2465,
				'id_provincia' => 18,
				'cod_municipio' => 53,
				'DC' => 6,
				'nombre' => 'Cortes de Baza',
			),
			465 => 
			array (
				'id' => 2466,
				'id_provincia' => 19,
				'cod_municipio' => 53,
				'DC' => 9,
				'nombre' => 'Brihuega',
			),
			466 => 
			array (
				'id' => 2467,
				'id_provincia' => 20,
				'cod_municipio' => 53,
				'DC' => 3,
				'nombre' => 'Lezo',
			),
			467 => 
			array (
				'id' => 2468,
				'id_provincia' => 21,
				'cod_municipio' => 53,
				'DC' => 0,
				'nombre' => 'Niebla',
			),
			468 => 
			array (
				'id' => 2469,
				'id_provincia' => 22,
				'cod_municipio' => 53,
				'DC' => 5,
				'nombre' => 'Benabarre',
			),
			469 => 
			array (
				'id' => 2470,
				'id_provincia' => 23,
				'cod_municipio' => 53,
				'DC' => 1,
				'nombre' => 'Jódar',
			),
			470 => 
			array (
				'id' => 2471,
				'id_provincia' => 24,
				'cod_municipio' => 53,
				'DC' => 6,
				'nombre' => 'Cebrones del Río',
			),
			471 => 
			array (
				'id' => 2472,
				'id_provincia' => 25,
				'cod_municipio' => 53,
				'DC' => 9,
				'nombre' => 'Benavent de Segrià',
			),
			472 => 
			array (
				'id' => 2473,
				'id_provincia' => 26,
				'cod_municipio' => 53,
				'DC' => 2,
				'nombre' => 'Corera',
			),
			473 => 
			array (
				'id' => 2474,
				'id_provincia' => 27,
				'cod_municipio' => 53,
				'DC' => 8,
				'nombre' => 'Ribeira de Piquín',
			),
			474 => 
			array (
				'id' => 2475,
				'id_provincia' => 28,
				'cod_municipio' => 53,
				'DC' => 4,
				'nombre' => 'Daganzo de Arriba',
			),
			475 => 
			array (
				'id' => 2476,
				'id_provincia' => 29,
				'cod_municipio' => 53,
				'DC' => 7,
				'nombre' => 'Frigiliana',
			),
			476 => 
			array (
				'id' => 2477,
				'id_provincia' => 31,
				'cod_municipio' => 53,
				'DC' => 8,
				'nombre' => 'Berbinzana',
			),
			477 => 
			array (
				'id' => 2478,
				'id_provincia' => 32,
				'cod_municipio' => 53,
				'DC' => 3,
				'nombre' => 'Oímbra',
			),
			478 => 
			array (
				'id' => 2479,
				'id_provincia' => 33,
				'cod_municipio' => 53,
				'DC' => 9,
				'nombre' => 'Quirós',
			),
			479 => 
			array (
				'id' => 2480,
				'id_provincia' => 34,
				'cod_municipio' => 53,
				'DC' => 4,
				'nombre' => 'Castromocho',
			),
			480 => 
			array (
				'id' => 2481,
				'id_provincia' => 36,
				'cod_municipio' => 53,
				'DC' => 0,
				'nombre' => 'Soutomaior',
			),
			481 => 
			array (
				'id' => 2482,
				'id_provincia' => 38,
				'cod_municipio' => 53,
				'DC' => 2,
				'nombre' => 'Villa de Mazo',
			),
			482 => 
			array (
				'id' => 2483,
				'id_provincia' => 39,
				'cod_municipio' => 53,
				'DC' => 5,
				'nombre' => 'Polaciones',
			),
			483 => 
			array (
				'id' => 2484,
				'id_provincia' => 40,
				'cod_municipio' => 53,
				'DC' => 9,
				'nombre' => 'Cerezo de Abajo',
			),
			484 => 
			array (
				'id' => 2485,
				'id_provincia' => 41,
				'cod_municipio' => 53,
				'DC' => 6,
				'nombre' => 'Lebrija',
			),
			485 => 
			array (
				'id' => 2486,
				'id_provincia' => 42,
				'cod_municipio' => 53,
				'DC' => 1,
				'nombre' => 'Carrascosa de Abajo',
			),
			486 => 
			array (
				'id' => 2487,
				'id_provincia' => 43,
				'cod_municipio' => 53,
				'DC' => 7,
				'nombre' => 'Duesaigües',
			),
			487 => 
			array (
				'id' => 2488,
				'id_provincia' => 44,
				'cod_municipio' => 53,
				'DC' => 2,
				'nombre' => 'Camañas',
			),
			488 => 
			array (
				'id' => 2489,
				'id_provincia' => 45,
				'cod_municipio' => 53,
				'DC' => 5,
				'nombre' => 'Consuegra',
			),
			489 => 
			array (
				'id' => 2490,
				'id_provincia' => 46,
				'cod_municipio' => 53,
				'DC' => 8,
				'nombre' => 'Beneixida',
			),
			490 => 
			array (
				'id' => 2491,
				'id_provincia' => 47,
				'cod_municipio' => 53,
				'DC' => 4,
				'nombre' => 'Cogeces de Íscar',
			),
			491 => 
			array (
				'id' => 2492,
				'id_provincia' => 48,
				'cod_municipio' => 53,
				'DC' => 0,
				'nombre' => 'Laukiz',
			),
			492 => 
			array (
				'id' => 2493,
				'id_provincia' => 49,
				'cod_municipio' => 53,
				'DC' => 3,
				'nombre' => 'Coreses',
			),
			493 => 
			array (
				'id' => 2494,
				'id_provincia' => 50,
				'cod_municipio' => 53,
				'DC' => 6,
				'nombre' => 'Boquiñeni',
			),
			494 => 
			array (
				'id' => 2495,
				'id_provincia' => 1,
				'cod_municipio' => 54,
				'DC' => 9,
				'nombre' => 'Urkabustaiz',
			),
			495 => 
			array (
				'id' => 2496,
				'id_provincia' => 2,
				'cod_municipio' => 54,
				'DC' => 4,
				'nombre' => 'Navas de Jorquera',
			),
			496 => 
			array (
				'id' => 2497,
				'id_provincia' => 3,
				'cod_municipio' => 54,
				'DC' => 0,
				'nombre' => 'Castell de Castells',
			),
			497 => 
			array (
				'id' => 2498,
				'id_provincia' => 4,
				'cod_municipio' => 54,
				'DC' => 5,
				'nombre' => 'Illar',
			),
			498 => 
			array (
				'id' => 2499,
				'id_provincia' => 5,
				'cod_municipio' => 54,
				'DC' => 8,
				'nombre' => 'Casavieja',
			),
			499 => 
			array (
				'id' => 2500,
				'id_provincia' => 6,
				'cod_municipio' => 54,
				'DC' => 1,
				'nombre' => 'Fuente del Maestre',
			),
		));
		\DB::table('municipios')->insert(array (
			0 => 
			array (
				'id' => 2501,
				'id_provincia' => 7,
				'cod_municipio' => 54,
				'DC' => 7,
				'nombre' => 'Santa Eulalia del Río',
			),
			1 => 
			array (
				'id' => 2502,
				'id_provincia' => 8,
				'cod_municipio' => 54,
				'DC' => 3,
				'nombre' => 'Castellbisbal',
			),
			2 => 
			array (
				'id' => 2503,
				'id_provincia' => 9,
				'cod_municipio' => 54,
				'DC' => 6,
				'nombre' => 'Bozoó',
			),
			3 => 
			array (
				'id' => 2504,
				'id_provincia' => 10,
				'cod_municipio' => 54,
				'DC' => 0,
				'nombre' => 'Casas del Castañar',
			),
			4 => 
			array (
				'id' => 2505,
				'id_provincia' => 13,
				'cod_municipio' => 54,
				'DC' => 8,
				'nombre' => 'Membrilla',
			),
			5 => 
			array (
				'id' => 2506,
				'id_provincia' => 14,
				'cod_municipio' => 54,
				'DC' => 3,
				'nombre' => 'Pozoblanco',
			),
			6 => 
			array (
				'id' => 2507,
				'id_provincia' => 15,
				'cod_municipio' => 54,
				'DC' => 6,
				'nombre' => 'Narón',
			),
			7 => 
			array (
				'id' => 2508,
				'id_provincia' => 17,
				'cod_municipio' => 54,
				'DC' => 5,
				'nombre' => 'Colera',
			),
			8 => 
			array (
				'id' => 2509,
				'id_provincia' => 18,
				'cod_municipio' => 54,
				'DC' => 1,
				'nombre' => 'Cortes y Graena',
			),
			9 => 
			array (
				'id' => 2510,
				'id_provincia' => 19,
				'cod_municipio' => 54,
				'DC' => 4,
				'nombre' => 'Budia',
			),
			10 => 
			array (
				'id' => 2511,
				'id_provincia' => 20,
				'cod_municipio' => 54,
				'DC' => 8,
				'nombre' => 'Lizartza',
			),
			11 => 
			array (
				'id' => 2512,
				'id_provincia' => 21,
				'cod_municipio' => 54,
				'DC' => 5,
				'nombre' => 'Palma del Condado, La',
			),
			12 => 
			array (
				'id' => 2513,
				'id_provincia' => 22,
				'cod_municipio' => 54,
				'DC' => 0,
				'nombre' => 'Benasque',
			),
			13 => 
			array (
				'id' => 2514,
				'id_provincia' => 23,
				'cod_municipio' => 54,
				'DC' => 6,
				'nombre' => 'Larva',
			),
			14 => 
			array (
				'id' => 2515,
				'id_provincia' => 24,
				'cod_municipio' => 54,
				'DC' => 1,
				'nombre' => 'Cimanes de la Vega',
			),
			15 => 
			array (
				'id' => 2516,
				'id_provincia' => 26,
				'cod_municipio' => 54,
				'DC' => 7,
				'nombre' => 'Cornago',
			),
			16 => 
			array (
				'id' => 2517,
				'id_provincia' => 27,
				'cod_municipio' => 54,
				'DC' => 3,
				'nombre' => 'Riotorto',
			),
			17 => 
			array (
				'id' => 2518,
				'id_provincia' => 28,
				'cod_municipio' => 54,
				'DC' => 9,
				'nombre' => 'Escorial, El',
			),
			18 => 
			array (
				'id' => 2519,
				'id_provincia' => 29,
				'cod_municipio' => 54,
				'DC' => 2,
				'nombre' => 'Fuengirola',
			),
			19 => 
			array (
				'id' => 2520,
				'id_provincia' => 31,
				'cod_municipio' => 54,
				'DC' => 3,
				'nombre' => 'Bertizarana',
			),
			20 => 
			array (
				'id' => 2521,
				'id_provincia' => 32,
				'cod_municipio' => 54,
				'DC' => 8,
				'nombre' => 'Ourense',
			),
			21 => 
			array (
				'id' => 2522,
				'id_provincia' => 33,
				'cod_municipio' => 54,
				'DC' => 4,
				'nombre' => 'Regueras, Las',
			),
			22 => 
			array (
				'id' => 2523,
				'id_provincia' => 36,
				'cod_municipio' => 54,
				'DC' => 5,
				'nombre' => 'Tomiño',
			),
			23 => 
			array (
				'id' => 2524,
				'id_provincia' => 37,
				'cod_municipio' => 54,
				'DC' => 1,
				'nombre' => 'Bodón, El',
			),
			24 => 
			array (
				'id' => 2525,
				'id_provincia' => 39,
				'cod_municipio' => 54,
				'DC' => 0,
				'nombre' => 'Polanco',
			),
			25 => 
			array (
				'id' => 2526,
				'id_provincia' => 40,
				'cod_municipio' => 54,
				'DC' => 4,
				'nombre' => 'Cerezo de Arriba',
			),
			26 => 
			array (
				'id' => 2527,
				'id_provincia' => 41,
				'cod_municipio' => 54,
				'DC' => 1,
				'nombre' => 'Lora de Estepa',
			),
			27 => 
			array (
				'id' => 2528,
				'id_provincia' => 42,
				'cod_municipio' => 54,
				'DC' => 6,
				'nombre' => 'Carrascosa de la Sierra',
			),
			28 => 
			array (
				'id' => 2529,
				'id_provincia' => 43,
				'cod_municipio' => 54,
				'DC' => 2,
				'nombre' => 'Espluga de Francolí, L\'',
			),
			29 => 
			array (
				'id' => 2530,
				'id_provincia' => 44,
				'cod_municipio' => 54,
				'DC' => 7,
				'nombre' => 'Camarena de la Sierra',
			),
			30 => 
			array (
				'id' => 2531,
				'id_provincia' => 45,
				'cod_municipio' => 54,
				'DC' => 0,
				'nombre' => 'Corral de Almaguer',
			),
			31 => 
			array (
				'id' => 2532,
				'id_provincia' => 46,
				'cod_municipio' => 54,
				'DC' => 3,
				'nombre' => 'Benetússer',
			),
			32 => 
			array (
				'id' => 2533,
				'id_provincia' => 47,
				'cod_municipio' => 54,
				'DC' => 9,
				'nombre' => 'Cogeces del Monte',
			),
			33 => 
			array (
				'id' => 2534,
				'id_provincia' => 48,
				'cod_municipio' => 54,
				'DC' => 5,
				'nombre' => 'Leioa',
			),
			34 => 
			array (
				'id' => 2535,
				'id_provincia' => 49,
				'cod_municipio' => 54,
				'DC' => 8,
				'nombre' => 'Corrales del Vino',
			),
			35 => 
			array (
				'id' => 2536,
				'id_provincia' => 50,
				'cod_municipio' => 54,
				'DC' => 1,
				'nombre' => 'Bordalba',
			),
			36 => 
			array (
				'id' => 2537,
				'id_provincia' => 1,
				'cod_municipio' => 55,
				'DC' => 2,
				'nombre' => 'Valdegovía/Gaubea',
			),
			37 => 
			array (
				'id' => 2538,
				'id_provincia' => 2,
				'cod_municipio' => 55,
				'DC' => 7,
				'nombre' => 'Nerpio',
			),
			38 => 
			array (
				'id' => 2539,
				'id_provincia' => 3,
				'cod_municipio' => 55,
				'DC' => 3,
				'nombre' => 'Catral',
			),
			39 => 
			array (
				'id' => 2540,
				'id_provincia' => 4,
				'cod_municipio' => 55,
				'DC' => 8,
				'nombre' => 'Instinción',
			),
			40 => 
			array (
				'id' => 2541,
				'id_provincia' => 5,
				'cod_municipio' => 55,
				'DC' => 1,
				'nombre' => 'Casillas',
			),
			41 => 
			array (
				'id' => 2542,
				'id_provincia' => 6,
				'cod_municipio' => 55,
				'DC' => 4,
				'nombre' => 'Fuentes de León',
			),
			42 => 
			array (
				'id' => 2543,
				'id_provincia' => 7,
				'cod_municipio' => 55,
				'DC' => 0,
				'nombre' => 'Santa Margalida',
			),
			43 => 
			array (
				'id' => 2544,
				'id_provincia' => 8,
				'cod_municipio' => 55,
				'DC' => 6,
				'nombre' => 'Castellcir',
			),
			44 => 
			array (
				'id' => 2545,
				'id_provincia' => 9,
				'cod_municipio' => 55,
				'DC' => 9,
				'nombre' => 'Brazacorta',
			),
			45 => 
			array (
				'id' => 2546,
				'id_provincia' => 10,
				'cod_municipio' => 55,
				'DC' => 3,
				'nombre' => 'Casas del Monte',
			),
			46 => 
			array (
				'id' => 2547,
				'id_provincia' => 12,
				'cod_municipio' => 55,
				'DC' => 5,
				'nombre' => 'Chodos/Xodos',
			),
			47 => 
			array (
				'id' => 2548,
				'id_provincia' => 13,
				'cod_municipio' => 55,
				'DC' => 1,
				'nombre' => 'Mestanza',
			),
			48 => 
			array (
				'id' => 2549,
				'id_provincia' => 14,
				'cod_municipio' => 55,
				'DC' => 6,
				'nombre' => 'Priego de Córdoba',
			),
			49 => 
			array (
				'id' => 2550,
				'id_provincia' => 15,
				'cod_municipio' => 55,
				'DC' => 9,
				'nombre' => 'Neda',
			),
			50 => 
			array (
				'id' => 2551,
				'id_provincia' => 16,
				'cod_municipio' => 55,
				'DC' => 2,
				'nombre' => 'Carboneras de Guadazaón',
			),
			51 => 
			array (
				'id' => 2552,
				'id_provincia' => 17,
				'cod_municipio' => 55,
				'DC' => 8,
				'nombre' => 'Colomers',
			),
			52 => 
			array (
				'id' => 2553,
				'id_provincia' => 19,
				'cod_municipio' => 55,
				'DC' => 7,
				'nombre' => 'Bujalaro',
			),
			53 => 
			array (
				'id' => 2554,
				'id_provincia' => 20,
				'cod_municipio' => 55,
				'DC' => 1,
				'nombre' => 'Arrasate/Mondragón',
			),
			54 => 
			array (
				'id' => 2555,
				'id_provincia' => 21,
				'cod_municipio' => 55,
				'DC' => 8,
				'nombre' => 'Palos de la Frontera',
			),
			55 => 
			array (
				'id' => 2556,
				'id_provincia' => 22,
				'cod_municipio' => 55,
				'DC' => 3,
				'nombre' => 'Berbegal',
			),
			56 => 
			array (
				'id' => 2557,
				'id_provincia' => 23,
				'cod_municipio' => 55,
				'DC' => 9,
				'nombre' => 'Linares',
			),
			57 => 
			array (
				'id' => 2558,
				'id_provincia' => 24,
				'cod_municipio' => 55,
				'DC' => 4,
				'nombre' => 'Cimanes del Tejar',
			),
			58 => 
			array (
				'id' => 2559,
				'id_provincia' => 25,
				'cod_municipio' => 55,
				'DC' => 7,
				'nombre' => 'Biosca',
			),
			59 => 
			array (
				'id' => 2560,
				'id_provincia' => 26,
				'cod_municipio' => 55,
				'DC' => 0,
				'nombre' => 'Corporales',
			),
			60 => 
			array (
				'id' => 2561,
				'id_provincia' => 27,
				'cod_municipio' => 55,
				'DC' => 6,
				'nombre' => 'Samos',
			),
			61 => 
			array (
				'id' => 2562,
				'id_provincia' => 28,
				'cod_municipio' => 55,
				'DC' => 2,
				'nombre' => 'Estremera',
			),
			62 => 
			array (
				'id' => 2563,
				'id_provincia' => 29,
				'cod_municipio' => 55,
				'DC' => 5,
				'nombre' => 'Fuente de Piedra',
			),
			63 => 
			array (
				'id' => 2564,
				'id_provincia' => 31,
				'cod_municipio' => 55,
				'DC' => 6,
				'nombre' => 'Betelu',
			),
			64 => 
			array (
				'id' => 2565,
				'id_provincia' => 32,
				'cod_municipio' => 55,
				'DC' => 1,
				'nombre' => 'Paderne de Allariz',
			),
			65 => 
			array (
				'id' => 2566,
				'id_provincia' => 33,
				'cod_municipio' => 55,
				'DC' => 7,
				'nombre' => 'Ribadedeva',
			),
			66 => 
			array (
				'id' => 2567,
				'id_provincia' => 34,
				'cod_municipio' => 55,
				'DC' => 2,
				'nombre' => 'Cervatos de la Cueza',
			),
			67 => 
			array (
				'id' => 2568,
				'id_provincia' => 36,
				'cod_municipio' => 55,
				'DC' => 8,
				'nombre' => 'Tui',
			),
			68 => 
			array (
				'id' => 2569,
				'id_provincia' => 37,
				'cod_municipio' => 55,
				'DC' => 4,
				'nombre' => 'Bogajo',
			),
			69 => 
			array (
				'id' => 2570,
				'id_provincia' => 39,
				'cod_municipio' => 55,
				'DC' => 3,
				'nombre' => 'Potes',
			),
			70 => 
			array (
				'id' => 2571,
				'id_provincia' => 40,
				'cod_municipio' => 55,
				'DC' => 7,
				'nombre' => 'Cilleruelo de San Mamés',
			),
			71 => 
			array (
				'id' => 2572,
				'id_provincia' => 41,
				'cod_municipio' => 55,
				'DC' => 4,
				'nombre' => 'Lora del Río',
			),
			72 => 
			array (
				'id' => 2573,
				'id_provincia' => 42,
				'cod_municipio' => 55,
				'DC' => 9,
				'nombre' => 'Casarejos',
			),
			73 => 
			array (
				'id' => 2574,
				'id_provincia' => 43,
				'cod_municipio' => 55,
				'DC' => 5,
				'nombre' => 'Falset',
			),
			74 => 
			array (
				'id' => 2575,
				'id_provincia' => 44,
				'cod_municipio' => 55,
				'DC' => 0,
				'nombre' => 'Camarillas',
			),
			75 => 
			array (
				'id' => 2576,
				'id_provincia' => 45,
				'cod_municipio' => 55,
				'DC' => 3,
				'nombre' => 'Cuerva',
			),
			76 => 
			array (
				'id' => 2577,
				'id_provincia' => 46,
				'cod_municipio' => 55,
				'DC' => 6,
				'nombre' => 'Beniarjó',
			),
			77 => 
			array (
				'id' => 2578,
				'id_provincia' => 47,
				'cod_municipio' => 55,
				'DC' => 2,
				'nombre' => 'Corcos',
			),
			78 => 
			array (
				'id' => 2579,
				'id_provincia' => 48,
				'cod_municipio' => 55,
				'DC' => 8,
				'nombre' => 'Lemoa',
			),
			79 => 
			array (
				'id' => 2580,
				'id_provincia' => 49,
				'cod_municipio' => 55,
				'DC' => 1,
				'nombre' => 'Cotanes del Monte',
			),
			80 => 
			array (
				'id' => 2581,
				'id_provincia' => 50,
				'cod_municipio' => 55,
				'DC' => 4,
				'nombre' => 'Borja',
			),
			81 => 
			array (
				'id' => 2582,
				'id_provincia' => 1,
				'cod_municipio' => 56,
				'DC' => 5,
				'nombre' => 'Harana/Valle de Arana',
			),
			82 => 
			array (
				'id' => 2583,
				'id_provincia' => 2,
				'cod_municipio' => 56,
				'DC' => 0,
				'nombre' => 'Ontur',
			),
			83 => 
			array (
				'id' => 2584,
				'id_provincia' => 3,
				'cod_municipio' => 56,
				'DC' => 6,
				'nombre' => 'Cocentaina',
			),
			84 => 
			array (
				'id' => 2585,
				'id_provincia' => 4,
				'cod_municipio' => 56,
				'DC' => 1,
				'nombre' => 'Laroya',
			),
			85 => 
			array (
				'id' => 2586,
				'id_provincia' => 5,
				'cod_municipio' => 56,
				'DC' => 4,
				'nombre' => 'Castellanos de Zapardiel',
			),
			86 => 
			array (
				'id' => 2587,
				'id_provincia' => 6,
				'cod_municipio' => 56,
				'DC' => 7,
				'nombre' => 'Garbayuela',
			),
			87 => 
			array (
				'id' => 2588,
				'id_provincia' => 7,
				'cod_municipio' => 56,
				'DC' => 3,
				'nombre' => 'Santa María del Camí',
			),
			88 => 
			array (
				'id' => 2589,
				'id_provincia' => 8,
				'cod_municipio' => 56,
				'DC' => 9,
				'nombre' => 'Castelldefels',
			),
			89 => 
			array (
				'id' => 2590,
				'id_provincia' => 9,
				'cod_municipio' => 56,
				'DC' => 2,
				'nombre' => 'Briviesca',
			),
			90 => 
			array (
				'id' => 2591,
				'id_provincia' => 10,
				'cod_municipio' => 56,
				'DC' => 6,
				'nombre' => 'Casas de Millán',
			),
			91 => 
			array (
				'id' => 2592,
				'id_provincia' => 12,
				'cod_municipio' => 56,
				'DC' => 8,
				'nombre' => 'Chóvar',
			),
			92 => 
			array (
				'id' => 2593,
				'id_provincia' => 13,
				'cod_municipio' => 56,
				'DC' => 4,
				'nombre' => 'Miguelturra',
			),
			93 => 
			array (
				'id' => 2594,
				'id_provincia' => 14,
				'cod_municipio' => 56,
				'DC' => 9,
				'nombre' => 'Puente Genil',
			),
			94 => 
			array (
				'id' => 2595,
				'id_provincia' => 15,
				'cod_municipio' => 56,
				'DC' => 2,
				'nombre' => 'Negreira',
			),
			95 => 
			array (
				'id' => 2596,
				'id_provincia' => 16,
				'cod_municipio' => 56,
				'DC' => 5,
				'nombre' => 'Cardenete',
			),
			96 => 
			array (
				'id' => 2597,
				'id_provincia' => 17,
				'cod_municipio' => 56,
				'DC' => 1,
				'nombre' => 'Cornellà del Terri',
			),
			97 => 
			array (
				'id' => 2598,
				'id_provincia' => 18,
				'cod_municipio' => 56,
				'DC' => 7,
				'nombre' => 'Cúllar',
			),
			98 => 
			array (
				'id' => 2599,
				'id_provincia' => 20,
				'cod_municipio' => 56,
				'DC' => 4,
				'nombre' => 'Mutriku',
			),
			99 => 
			array (
				'id' => 2600,
				'id_provincia' => 21,
				'cod_municipio' => 56,
				'DC' => 1,
				'nombre' => 'Paterna del Campo',
			),
			100 => 
			array (
				'id' => 2601,
				'id_provincia' => 23,
				'cod_municipio' => 56,
				'DC' => 2,
				'nombre' => 'Lopera',
			),
			101 => 
			array (
				'id' => 2602,
				'id_provincia' => 24,
				'cod_municipio' => 56,
				'DC' => 7,
				'nombre' => 'Cistierna',
			),
			102 => 
			array (
				'id' => 2603,
				'id_provincia' => 25,
				'cod_municipio' => 56,
				'DC' => 0,
				'nombre' => 'Bovera',
			),
			103 => 
			array (
				'id' => 2604,
				'id_provincia' => 26,
				'cod_municipio' => 56,
				'DC' => 3,
				'nombre' => 'Cuzcurrita de Río Tirón',
			),
			104 => 
			array (
				'id' => 2605,
				'id_provincia' => 27,
				'cod_municipio' => 56,
				'DC' => 9,
				'nombre' => 'Rábade',
			),
			105 => 
			array (
				'id' => 2606,
				'id_provincia' => 28,
				'cod_municipio' => 56,
				'DC' => 5,
				'nombre' => 'Fresnedillas de la Oliva',
			),
			106 => 
			array (
				'id' => 2607,
				'id_provincia' => 29,
				'cod_municipio' => 56,
				'DC' => 8,
				'nombre' => 'Gaucín',
			),
			107 => 
			array (
				'id' => 2608,
				'id_provincia' => 31,
				'cod_municipio' => 56,
				'DC' => 9,
				'nombre' => 'Biurrun-Olcoz',
			),
			108 => 
			array (
				'id' => 2609,
				'id_provincia' => 32,
				'cod_municipio' => 56,
				'DC' => 4,
				'nombre' => 'Padrenda',
			),
			109 => 
			array (
				'id' => 2610,
				'id_provincia' => 33,
				'cod_municipio' => 56,
				'DC' => 0,
				'nombre' => 'Ribadesella',
			),
			110 => 
			array (
				'id' => 2611,
				'id_provincia' => 34,
				'cod_municipio' => 56,
				'DC' => 5,
				'nombre' => 'Cervera de Pisuerga',
			),
			111 => 
			array (
				'id' => 2612,
				'id_provincia' => 36,
				'cod_municipio' => 56,
				'DC' => 1,
				'nombre' => 'Valga',
			),
			112 => 
			array (
				'id' => 2613,
				'id_provincia' => 37,
				'cod_municipio' => 56,
				'DC' => 7,
				'nombre' => 'Bouza, La',
			),
			113 => 
			array (
				'id' => 2614,
				'id_provincia' => 39,
				'cod_municipio' => 56,
				'DC' => 6,
				'nombre' => 'Puente Viesgo',
			),
			114 => 
			array (
				'id' => 2615,
				'id_provincia' => 40,
				'cod_municipio' => 56,
				'DC' => 0,
				'nombre' => 'Cobos de Fuentidueña',
			),
			115 => 
			array (
				'id' => 2616,
				'id_provincia' => 41,
				'cod_municipio' => 56,
				'DC' => 7,
				'nombre' => 'Luisiana, La',
			),
			116 => 
			array (
				'id' => 2617,
				'id_provincia' => 42,
				'cod_municipio' => 56,
				'DC' => 2,
				'nombre' => 'Castilfrío de la Sierra',
			),
			117 => 
			array (
				'id' => 2618,
				'id_provincia' => 43,
				'cod_municipio' => 56,
				'DC' => 8,
				'nombre' => 'Fatarella, La',
			),
			118 => 
			array (
				'id' => 2619,
				'id_provincia' => 44,
				'cod_municipio' => 56,
				'DC' => 3,
				'nombre' => 'Caminreal',
			),
			119 => 
			array (
				'id' => 2620,
				'id_provincia' => 45,
				'cod_municipio' => 56,
				'DC' => 6,
				'nombre' => 'Chozas de Canales',
			),
			120 => 
			array (
				'id' => 2621,
				'id_provincia' => 46,
				'cod_municipio' => 56,
				'DC' => 9,
				'nombre' => 'Beniatjar',
			),
			121 => 
			array (
				'id' => 2622,
				'id_provincia' => 47,
				'cod_municipio' => 56,
				'DC' => 5,
				'nombre' => 'Corrales de Duero',
			),
			122 => 
			array (
				'id' => 2623,
				'id_provincia' => 48,
				'cod_municipio' => 56,
				'DC' => 1,
				'nombre' => 'Lemoiz',
			),
			123 => 
			array (
				'id' => 2624,
				'id_provincia' => 49,
				'cod_municipio' => 56,
				'DC' => 4,
				'nombre' => 'Cubillos',
			),
			124 => 
			array (
				'id' => 2625,
				'id_provincia' => 50,
				'cod_municipio' => 56,
				'DC' => 7,
				'nombre' => 'Botorrita',
			),
			125 => 
			array (
				'id' => 2626,
				'id_provincia' => 1,
				'cod_municipio' => 57,
				'DC' => 1,
				'nombre' => 'Villabuena de Álava/Eskuernaga',
			),
			126 => 
			array (
				'id' => 2627,
				'id_provincia' => 2,
				'cod_municipio' => 57,
				'DC' => 6,
				'nombre' => 'Ossa de Montiel',
			),
			127 => 
			array (
				'id' => 2628,
				'id_provincia' => 3,
				'cod_municipio' => 57,
				'DC' => 2,
				'nombre' => 'Confrides',
			),
			128 => 
			array (
				'id' => 2629,
				'id_provincia' => 4,
				'cod_municipio' => 57,
				'DC' => 7,
				'nombre' => 'Láujar de Andarax',
			),
			129 => 
			array (
				'id' => 2630,
				'id_provincia' => 5,
				'cod_municipio' => 57,
				'DC' => 0,
				'nombre' => 'Cebreros',
			),
			130 => 
			array (
				'id' => 2631,
				'id_provincia' => 6,
				'cod_municipio' => 57,
				'DC' => 3,
				'nombre' => 'Garlitos',
			),
			131 => 
			array (
				'id' => 2632,
				'id_provincia' => 7,
				'cod_municipio' => 57,
				'DC' => 9,
				'nombre' => 'Santanyí',
			),
			132 => 
			array (
				'id' => 2633,
				'id_provincia' => 8,
				'cod_municipio' => 57,
				'DC' => 5,
				'nombre' => 'Castell de l\'Areny',
			),
			133 => 
			array (
				'id' => 2634,
				'id_provincia' => 9,
				'cod_municipio' => 57,
				'DC' => 8,
				'nombre' => 'Bugedo',
			),
			134 => 
			array (
				'id' => 2635,
				'id_provincia' => 10,
				'cod_municipio' => 57,
				'DC' => 2,
				'nombre' => 'Casas de Miravete',
			),
			135 => 
			array (
				'id' => 2636,
				'id_provincia' => 12,
				'cod_municipio' => 57,
				'DC' => 4,
				'nombre' => 'Eslida',
			),
			136 => 
			array (
				'id' => 2637,
				'id_provincia' => 13,
				'cod_municipio' => 57,
				'DC' => 0,
				'nombre' => 'Montiel',
			),
			137 => 
			array (
				'id' => 2638,
				'id_provincia' => 14,
				'cod_municipio' => 57,
				'DC' => 5,
				'nombre' => 'Rambla, La',
			),
			138 => 
			array (
				'id' => 2639,
				'id_provincia' => 15,
				'cod_municipio' => 57,
				'DC' => 8,
				'nombre' => 'Noia',
			),
			139 => 
			array (
				'id' => 2640,
				'id_provincia' => 16,
				'cod_municipio' => 57,
				'DC' => 1,
				'nombre' => 'Carrascosa',
			),
			140 => 
			array (
				'id' => 2641,
				'id_provincia' => 17,
				'cod_municipio' => 57,
				'DC' => 7,
				'nombre' => 'Corçà',
			),
			141 => 
			array (
				'id' => 2642,
				'id_provincia' => 18,
				'cod_municipio' => 57,
				'DC' => 3,
				'nombre' => 'Cúllar Vega',
			),
			142 => 
			array (
				'id' => 2643,
				'id_provincia' => 19,
				'cod_municipio' => 57,
				'DC' => 6,
				'nombre' => 'Bustares',
			),
			143 => 
			array (
				'id' => 2644,
				'id_provincia' => 20,
				'cod_municipio' => 57,
				'DC' => 0,
				'nombre' => 'Mutiloa',
			),
			144 => 
			array (
				'id' => 2645,
				'id_provincia' => 21,
				'cod_municipio' => 57,
				'DC' => 7,
				'nombre' => 'Paymogo',
			),
			145 => 
			array (
				'id' => 2646,
				'id_provincia' => 22,
				'cod_municipio' => 57,
				'DC' => 2,
				'nombre' => 'Bielsa',
			),
			146 => 
			array (
				'id' => 2647,
				'id_provincia' => 23,
				'cod_municipio' => 57,
				'DC' => 8,
				'nombre' => 'Lupión',
			),
			147 => 
			array (
				'id' => 2648,
				'id_provincia' => 24,
				'cod_municipio' => 57,
				'DC' => 3,
				'nombre' => 'Congosto',
			),
			148 => 
			array (
				'id' => 2649,
				'id_provincia' => 25,
				'cod_municipio' => 57,
				'DC' => 6,
				'nombre' => 'Bòrdes, Es',
			),
			149 => 
			array (
				'id' => 2650,
				'id_provincia' => 26,
				'cod_municipio' => 57,
				'DC' => 9,
				'nombre' => 'Daroca de Rioja',
			),
			150 => 
			array (
				'id' => 2651,
				'id_provincia' => 27,
				'cod_municipio' => 57,
				'DC' => 5,
				'nombre' => 'Sarria',
			),
			151 => 
			array (
				'id' => 2652,
				'id_provincia' => 28,
				'cod_municipio' => 57,
				'DC' => 1,
				'nombre' => 'Fresno de Torote',
			),
			152 => 
			array (
				'id' => 2653,
				'id_provincia' => 29,
				'cod_municipio' => 57,
				'DC' => 4,
				'nombre' => 'Genalguacil',
			),
			153 => 
			array (
				'id' => 2654,
				'id_provincia' => 31,
				'cod_municipio' => 57,
				'DC' => 5,
				'nombre' => 'Buñuel',
			),
			154 => 
			array (
				'id' => 2655,
				'id_provincia' => 32,
				'cod_municipio' => 57,
				'DC' => 0,
				'nombre' => 'Parada de Sil',
			),
			155 => 
			array (
				'id' => 2656,
				'id_provincia' => 33,
				'cod_municipio' => 57,
				'DC' => 6,
				'nombre' => 'Ribera de Arriba',
			),
			156 => 
			array (
				'id' => 2657,
				'id_provincia' => 34,
				'cod_municipio' => 57,
				'DC' => 1,
				'nombre' => 'Cevico de la Torre',
			),
			157 => 
			array (
				'id' => 2658,
				'id_provincia' => 36,
				'cod_municipio' => 57,
				'DC' => 7,
				'nombre' => 'Vigo',
			),
			158 => 
			array (
				'id' => 2659,
				'id_provincia' => 37,
				'cod_municipio' => 57,
				'DC' => 3,
				'nombre' => 'Bóveda del Río Almar',
			),
			159 => 
			array (
				'id' => 2660,
				'id_provincia' => 39,
				'cod_municipio' => 57,
				'DC' => 2,
				'nombre' => 'Ramales de la Victoria',
			),
			160 => 
			array (
				'id' => 2661,
				'id_provincia' => 40,
				'cod_municipio' => 57,
				'DC' => 6,
				'nombre' => 'Coca',
			),
			161 => 
			array (
				'id' => 2662,
				'id_provincia' => 41,
				'cod_municipio' => 57,
				'DC' => 3,
				'nombre' => 'Madroño, El',
			),
			162 => 
			array (
				'id' => 2663,
				'id_provincia' => 42,
				'cod_municipio' => 57,
				'DC' => 8,
				'nombre' => 'Castilruiz',
			),
			163 => 
			array (
				'id' => 2664,
				'id_provincia' => 43,
				'cod_municipio' => 57,
				'DC' => 4,
				'nombre' => 'Febró, La',
			),
			164 => 
			array (
				'id' => 2665,
				'id_provincia' => 45,
				'cod_municipio' => 57,
				'DC' => 2,
				'nombre' => 'Chueca',
			),
			165 => 
			array (
				'id' => 2666,
				'id_provincia' => 46,
				'cod_municipio' => 57,
				'DC' => 5,
				'nombre' => 'Benicolet',
			),
			166 => 
			array (
				'id' => 2667,
				'id_provincia' => 47,
				'cod_municipio' => 57,
				'DC' => 1,
				'nombre' => 'Cubillas de Santa Marta',
			),
			167 => 
			array (
				'id' => 2668,
				'id_provincia' => 48,
				'cod_municipio' => 57,
				'DC' => 7,
				'nombre' => 'Lekeitio',
			),
			168 => 
			array (
				'id' => 2669,
				'id_provincia' => 49,
				'cod_municipio' => 57,
				'DC' => 0,
				'nombre' => 'Cubo de Benavente',
			),
			169 => 
			array (
				'id' => 2670,
				'id_provincia' => 50,
				'cod_municipio' => 57,
				'DC' => 3,
				'nombre' => 'Brea de Aragón',
			),
			170 => 
			array (
				'id' => 2671,
				'id_provincia' => 1,
				'cod_municipio' => 58,
				'DC' => 7,
				'nombre' => 'Legutio',
			),
			171 => 
			array (
				'id' => 2672,
				'id_provincia' => 2,
				'cod_municipio' => 58,
				'DC' => 2,
				'nombre' => 'Paterna del Madera',
			),
			172 => 
			array (
				'id' => 2673,
				'id_provincia' => 3,
				'cod_municipio' => 58,
				'DC' => 8,
				'nombre' => 'Cox',
			),
			173 => 
			array (
				'id' => 2674,
				'id_provincia' => 4,
				'cod_municipio' => 58,
				'DC' => 3,
				'nombre' => 'Líjar',
			),
			174 => 
			array (
				'id' => 2675,
				'id_provincia' => 5,
				'cod_municipio' => 58,
				'DC' => 6,
				'nombre' => 'Cepeda la Mora',
			),
			175 => 
			array (
				'id' => 2676,
				'id_provincia' => 6,
				'cod_municipio' => 58,
				'DC' => 9,
				'nombre' => 'Garrovilla, La',
			),
			176 => 
			array (
				'id' => 2677,
				'id_provincia' => 7,
				'cod_municipio' => 58,
				'DC' => 5,
				'nombre' => 'Selva',
			),
			177 => 
			array (
				'id' => 2678,
				'id_provincia' => 8,
				'cod_municipio' => 58,
				'DC' => 1,
				'nombre' => 'Castellet i la Gornal',
			),
			178 => 
			array (
				'id' => 2679,
				'id_provincia' => 9,
				'cod_municipio' => 58,
				'DC' => 4,
				'nombre' => 'Buniel',
			),
			179 => 
			array (
				'id' => 2680,
				'id_provincia' => 10,
				'cod_municipio' => 58,
				'DC' => 8,
				'nombre' => 'Casatejada',
			),
			180 => 
			array (
				'id' => 2681,
				'id_provincia' => 12,
				'cod_municipio' => 58,
				'DC' => 0,
				'nombre' => 'Espadilla',
			),
			181 => 
			array (
				'id' => 2682,
				'id_provincia' => 13,
				'cod_municipio' => 58,
				'DC' => 6,
				'nombre' => 'Moral de Calatrava',
			),
			182 => 
			array (
				'id' => 2683,
				'id_provincia' => 14,
				'cod_municipio' => 58,
				'DC' => 1,
				'nombre' => 'Rute',
			),
			183 => 
			array (
				'id' => 2684,
				'id_provincia' => 15,
				'cod_municipio' => 58,
				'DC' => 4,
				'nombre' => 'Oleiros',
			),
			184 => 
			array (
				'id' => 2685,
				'id_provincia' => 16,
				'cod_municipio' => 58,
				'DC' => 7,
				'nombre' => 'Carrascosa de Haro',
			),
			185 => 
			array (
				'id' => 2686,
				'id_provincia' => 17,
				'cod_municipio' => 58,
				'DC' => 3,
				'nombre' => 'Crespià',
			),
			186 => 
			array (
				'id' => 2687,
				'id_provincia' => 19,
				'cod_municipio' => 58,
				'DC' => 2,
				'nombre' => 'Cabanillas del Campo',
			),
			187 => 
			array (
				'id' => 2688,
				'id_provincia' => 20,
				'cod_municipio' => 58,
				'DC' => 6,
				'nombre' => 'Olaberria',
			),
			188 => 
			array (
				'id' => 2689,
				'id_provincia' => 21,
				'cod_municipio' => 58,
				'DC' => 3,
				'nombre' => 'Puebla de Guzmán',
			),
			189 => 
			array (
				'id' => 2690,
				'id_provincia' => 22,
				'cod_municipio' => 58,
				'DC' => 8,
				'nombre' => 'Bierge',
			),
			190 => 
			array (
				'id' => 2691,
				'id_provincia' => 23,
				'cod_municipio' => 58,
				'DC' => 4,
				'nombre' => 'Mancha Real',
			),
			191 => 
			array (
				'id' => 2692,
				'id_provincia' => 24,
				'cod_municipio' => 58,
				'DC' => 9,
				'nombre' => 'Corbillos de los Oteros',
			),
			192 => 
			array (
				'id' => 2693,
				'id_provincia' => 25,
				'cod_municipio' => 58,
				'DC' => 2,
				'nombre' => 'Borges Blanques, Les',
			),
			193 => 
			array (
				'id' => 2694,
				'id_provincia' => 26,
				'cod_municipio' => 58,
				'DC' => 5,
				'nombre' => 'Enciso',
			),
			194 => 
			array (
				'id' => 2695,
				'id_provincia' => 27,
				'cod_municipio' => 58,
				'DC' => 1,
				'nombre' => 'Saviñao, O',
			),
			195 => 
			array (
				'id' => 2696,
				'id_provincia' => 28,
				'cod_municipio' => 58,
				'DC' => 7,
				'nombre' => 'Fuenlabrada',
			),
			196 => 
			array (
				'id' => 2697,
				'id_provincia' => 29,
				'cod_municipio' => 58,
				'DC' => 0,
				'nombre' => 'Guaro',
			),
			197 => 
			array (
				'id' => 2698,
				'id_provincia' => 31,
				'cod_municipio' => 58,
				'DC' => 1,
				'nombre' => 'Auritz/Burguete',
			),
			198 => 
			array (
				'id' => 2699,
				'id_provincia' => 32,
				'cod_municipio' => 58,
				'DC' => 6,
				'nombre' => 'Pereiro de Aguiar, O',
			),
			199 => 
			array (
				'id' => 2700,
				'id_provincia' => 33,
				'cod_municipio' => 58,
				'DC' => 2,
				'nombre' => 'Riosa',
			),
			200 => 
			array (
				'id' => 2701,
				'id_provincia' => 34,
				'cod_municipio' => 58,
				'DC' => 7,
				'nombre' => 'Cevico Navero',
			),
			201 => 
			array (
				'id' => 2702,
				'id_provincia' => 36,
				'cod_municipio' => 58,
				'DC' => 3,
				'nombre' => 'Vilaboa',
			),
			202 => 
			array (
				'id' => 2703,
				'id_provincia' => 37,
				'cod_municipio' => 58,
				'DC' => 9,
				'nombre' => 'Brincones',
			),
			203 => 
			array (
				'id' => 2704,
				'id_provincia' => 39,
				'cod_municipio' => 58,
				'DC' => 8,
				'nombre' => 'Rasines',
			),
			204 => 
			array (
				'id' => 2705,
				'id_provincia' => 40,
				'cod_municipio' => 58,
				'DC' => 2,
				'nombre' => 'Codorniz',
			),
			205 => 
			array (
				'id' => 2706,
				'id_provincia' => 41,
				'cod_municipio' => 58,
				'DC' => 9,
				'nombre' => 'Mairena del Alcor',
			),
			206 => 
			array (
				'id' => 2707,
				'id_provincia' => 42,
				'cod_municipio' => 58,
				'DC' => 4,
				'nombre' => 'Castillejo de Robledo',
			),
			207 => 
			array (
				'id' => 2708,
				'id_provincia' => 43,
				'cod_municipio' => 58,
				'DC' => 0,
				'nombre' => 'Figuera, La',
			),
			208 => 
			array (
				'id' => 2709,
				'id_provincia' => 45,
				'cod_municipio' => 58,
				'DC' => 8,
				'nombre' => 'Domingo Pérez',
			),
			209 => 
			array (
				'id' => 2710,
				'id_provincia' => 46,
				'cod_municipio' => 58,
				'DC' => 1,
				'nombre' => 'Benifairó de les Valls',
			),
			210 => 
			array (
				'id' => 2711,
				'id_provincia' => 47,
				'cod_municipio' => 58,
				'DC' => 7,
				'nombre' => 'Cuenca de Campos',
			),
			211 => 
			array (
				'id' => 2712,
				'id_provincia' => 48,
				'cod_municipio' => 58,
				'DC' => 3,
				'nombre' => 'Mallabia',
			),
			212 => 
			array (
				'id' => 2713,
				'id_provincia' => 49,
				'cod_municipio' => 58,
				'DC' => 6,
				'nombre' => 'Cubo de Tierra del Vino, El',
			),
			213 => 
			array (
				'id' => 2714,
				'id_provincia' => 50,
				'cod_municipio' => 58,
				'DC' => 9,
				'nombre' => 'Bubierca',
			),
			214 => 
			array (
				'id' => 2715,
				'id_provincia' => 1,
				'cod_municipio' => 59,
				'DC' => 0,
				'nombre' => 'Vitoria-Gasteiz',
			),
			215 => 
			array (
				'id' => 2716,
				'id_provincia' => 2,
				'cod_municipio' => 59,
				'DC' => 5,
				'nombre' => 'Peñascosa',
			),
			216 => 
			array (
				'id' => 2717,
				'id_provincia' => 3,
				'cod_municipio' => 59,
				'DC' => 1,
				'nombre' => 'Crevillent',
			),
			217 => 
			array (
				'id' => 2718,
				'id_provincia' => 4,
				'cod_municipio' => 59,
				'DC' => 6,
				'nombre' => 'Lubrín',
			),
			218 => 
			array (
				'id' => 2719,
				'id_provincia' => 5,
				'cod_municipio' => 59,
				'DC' => 9,
				'nombre' => 'Cillán',
			),
			219 => 
			array (
				'id' => 2720,
				'id_provincia' => 6,
				'cod_municipio' => 59,
				'DC' => 2,
				'nombre' => 'Granja de Torrehermosa',
			),
			220 => 
			array (
				'id' => 2721,
				'id_provincia' => 7,
				'cod_municipio' => 59,
				'DC' => 8,
				'nombre' => 'Salines, Ses',
			),
			221 => 
			array (
				'id' => 2722,
				'id_provincia' => 8,
				'cod_municipio' => 59,
				'DC' => 4,
				'nombre' => 'Castellfollit del Boix',
			),
			222 => 
			array (
				'id' => 2723,
				'id_provincia' => 9,
				'cod_municipio' => 59,
				'DC' => 7,
				'nombre' => 'Burgos',
			),
			223 => 
			array (
				'id' => 2724,
				'id_provincia' => 10,
				'cod_municipio' => 59,
				'DC' => 1,
				'nombre' => 'Casillas de Coria',
			),
			224 => 
			array (
				'id' => 2725,
				'id_provincia' => 12,
				'cod_municipio' => 59,
				'DC' => 3,
				'nombre' => 'Fanzara',
			),
			225 => 
			array (
				'id' => 2726,
				'id_provincia' => 13,
				'cod_municipio' => 59,
				'DC' => 9,
				'nombre' => 'Navalpino',
			),
			226 => 
			array (
				'id' => 2727,
				'id_provincia' => 14,
				'cod_municipio' => 59,
				'DC' => 4,
				'nombre' => 'San Sebastián de los Ballesteros',
			),
			227 => 
			array (
				'id' => 2728,
				'id_provincia' => 15,
				'cod_municipio' => 59,
				'DC' => 7,
				'nombre' => 'Ordes',
			),
			228 => 
			array (
				'id' => 2729,
				'id_provincia' => 18,
				'cod_municipio' => 59,
				'DC' => 2,
				'nombre' => 'Chauchina',
			),
			229 => 
			array (
				'id' => 2730,
				'id_provincia' => 19,
				'cod_municipio' => 59,
				'DC' => 5,
				'nombre' => 'Campillo de Dueñas',
			),
			230 => 
			array (
				'id' => 2731,
				'id_provincia' => 20,
				'cod_municipio' => 59,
				'DC' => 9,
				'nombre' => 'Oñati',
			),
			231 => 
			array (
				'id' => 2732,
				'id_provincia' => 21,
				'cod_municipio' => 59,
				'DC' => 6,
				'nombre' => 'Puerto Moral',
			),
			232 => 
			array (
				'id' => 2733,
				'id_provincia' => 22,
				'cod_municipio' => 59,
				'DC' => 1,
				'nombre' => 'Biescas',
			),
			233 => 
			array (
				'id' => 2734,
				'id_provincia' => 23,
				'cod_municipio' => 59,
				'DC' => 7,
				'nombre' => 'Marmolejo',
			),
			234 => 
			array (
				'id' => 2735,
				'id_provincia' => 24,
				'cod_municipio' => 59,
				'DC' => 2,
				'nombre' => 'Corullón',
			),
			235 => 
			array (
				'id' => 2736,
				'id_provincia' => 25,
				'cod_municipio' => 59,
				'DC' => 5,
				'nombre' => 'Bossòst',
			),
			236 => 
			array (
				'id' => 2737,
				'id_provincia' => 26,
				'cod_municipio' => 59,
				'DC' => 8,
				'nombre' => 'Entrena',
			),
			237 => 
			array (
				'id' => 2738,
				'id_provincia' => 27,
				'cod_municipio' => 59,
				'DC' => 4,
				'nombre' => 'Sober',
			),
			238 => 
			array (
				'id' => 2739,
				'id_provincia' => 28,
				'cod_municipio' => 59,
				'DC' => 0,
				'nombre' => 'Fuente el Saz de Jarama',
			),
			239 => 
			array (
				'id' => 2740,
				'id_provincia' => 29,
				'cod_municipio' => 59,
				'DC' => 3,
				'nombre' => 'Humilladero',
			),
			240 => 
			array (
				'id' => 2741,
				'id_provincia' => 31,
				'cod_municipio' => 59,
				'DC' => 4,
				'nombre' => 'Burgui/Burgi',
			),
			241 => 
			array (
				'id' => 2742,
				'id_provincia' => 32,
				'cod_municipio' => 59,
				'DC' => 9,
				'nombre' => 'Peroxa, A',
			),
			242 => 
			array (
				'id' => 2743,
				'id_provincia' => 33,
				'cod_municipio' => 59,
				'DC' => 5,
				'nombre' => 'Salas',
			),
			243 => 
			array (
				'id' => 2744,
				'id_provincia' => 34,
				'cod_municipio' => 59,
				'DC' => 0,
				'nombre' => 'Cisneros',
			),
			244 => 
			array (
				'id' => 2745,
				'id_provincia' => 36,
				'cod_municipio' => 59,
				'DC' => 6,
				'nombre' => 'Vila de Cruces',
			),
			245 => 
			array (
				'id' => 2746,
				'id_provincia' => 37,
				'cod_municipio' => 59,
				'DC' => 2,
				'nombre' => 'Buenamadre',
			),
			246 => 
			array (
				'id' => 2747,
				'id_provincia' => 39,
				'cod_municipio' => 59,
				'DC' => 1,
				'nombre' => 'Reinosa',
			),
			247 => 
			array (
				'id' => 2748,
				'id_provincia' => 40,
				'cod_municipio' => 59,
				'DC' => 5,
				'nombre' => 'Collado Hermoso',
			),
			248 => 
			array (
				'id' => 2749,
				'id_provincia' => 41,
				'cod_municipio' => 59,
				'DC' => 2,
				'nombre' => 'Mairena del Aljarafe',
			),
			249 => 
			array (
				'id' => 2750,
				'id_provincia' => 42,
				'cod_municipio' => 59,
				'DC' => 7,
				'nombre' => 'Centenera de Andaluz',
			),
			250 => 
			array (
				'id' => 2751,
				'id_provincia' => 43,
				'cod_municipio' => 59,
				'DC' => 3,
				'nombre' => 'Figuerola del Camp',
			),
			251 => 
			array (
				'id' => 2752,
				'id_provincia' => 44,
				'cod_municipio' => 59,
				'DC' => 8,
				'nombre' => 'Cantavieja',
			),
			252 => 
			array (
				'id' => 2753,
				'id_provincia' => 45,
				'cod_municipio' => 59,
				'DC' => 1,
				'nombre' => 'Dosbarrios',
			),
			253 => 
			array (
				'id' => 2754,
				'id_provincia' => 46,
				'cod_municipio' => 59,
				'DC' => 4,
				'nombre' => 'Benifairó de la Valldigna',
			),
			254 => 
			array (
				'id' => 2755,
				'id_provincia' => 47,
				'cod_municipio' => 59,
				'DC' => 0,
				'nombre' => 'Curiel de Duero',
			),
			255 => 
			array (
				'id' => 2756,
				'id_provincia' => 48,
				'cod_municipio' => 59,
				'DC' => 6,
				'nombre' => 'Mañaria',
			),
			256 => 
			array (
				'id' => 2757,
				'id_provincia' => 49,
				'cod_municipio' => 59,
				'DC' => 9,
				'nombre' => 'Cuelgamures',
			),
			257 => 
			array (
				'id' => 2758,
				'id_provincia' => 50,
				'cod_municipio' => 59,
				'DC' => 2,
				'nombre' => 'Bujaraloz',
			),
			258 => 
			array (
				'id' => 2759,
				'id_provincia' => 1,
				'cod_municipio' => 60,
				'DC' => 4,
				'nombre' => 'Yécora/Iekora',
			),
			259 => 
			array (
				'id' => 2760,
				'id_provincia' => 2,
				'cod_municipio' => 60,
				'DC' => 9,
				'nombre' => 'Peñas de San Pedro',
			),
			260 => 
			array (
				'id' => 2761,
				'id_provincia' => 3,
				'cod_municipio' => 60,
				'DC' => 5,
				'nombre' => 'Quatretondeta',
			),
			261 => 
			array (
				'id' => 2762,
				'id_provincia' => 4,
				'cod_municipio' => 60,
				'DC' => 0,
				'nombre' => 'Lucainena de las Torres',
			),
			262 => 
			array (
				'id' => 2763,
				'id_provincia' => 5,
				'cod_municipio' => 60,
				'DC' => 3,
				'nombre' => 'Cisla',
			),
			263 => 
			array (
				'id' => 2764,
				'id_provincia' => 6,
				'cod_municipio' => 60,
				'DC' => 6,
				'nombre' => 'Guareña',
			),
			264 => 
			array (
				'id' => 2765,
				'id_provincia' => 7,
				'cod_municipio' => 60,
				'DC' => 2,
				'nombre' => 'Sineu',
			),
			265 => 
			array (
				'id' => 2766,
				'id_provincia' => 8,
				'cod_municipio' => 60,
				'DC' => 8,
				'nombre' => 'Castellfollit de Riubregós',
			),
			266 => 
			array (
				'id' => 2767,
				'id_provincia' => 9,
				'cod_municipio' => 60,
				'DC' => 1,
				'nombre' => 'Busto de Bureba',
			),
			267 => 
			array (
				'id' => 2768,
				'id_provincia' => 10,
				'cod_municipio' => 60,
				'DC' => 5,
				'nombre' => 'Castañar de Ibor',
			),
			268 => 
			array (
				'id' => 2769,
				'id_provincia' => 12,
				'cod_municipio' => 60,
				'DC' => 7,
				'nombre' => 'Figueroles',
			),
			269 => 
			array (
				'id' => 2770,
				'id_provincia' => 13,
				'cod_municipio' => 60,
				'DC' => 3,
				'nombre' => 'Navas de Estena',
			),
			270 => 
			array (
				'id' => 2771,
				'id_provincia' => 14,
				'cod_municipio' => 60,
				'DC' => 8,
				'nombre' => 'Santaella',
			),
			271 => 
			array (
				'id' => 2772,
				'id_provincia' => 15,
				'cod_municipio' => 60,
				'DC' => 1,
				'nombre' => 'Oroso',
			),
			272 => 
			array (
				'id' => 2773,
				'id_provincia' => 16,
				'cod_municipio' => 60,
				'DC' => 4,
				'nombre' => 'Casas de Benítez',
			),
			273 => 
			array (
				'id' => 2774,
				'id_provincia' => 17,
				'cod_municipio' => 60,
				'DC' => 0,
				'nombre' => 'Darnius',
			),
			274 => 
			array (
				'id' => 2775,
				'id_provincia' => 19,
				'cod_municipio' => 60,
				'DC' => 9,
				'nombre' => 'Campillo de Ranas',
			),
			275 => 
			array (
				'id' => 2776,
				'id_provincia' => 20,
				'cod_municipio' => 60,
				'DC' => 3,
				'nombre' => 'Orexa',
			),
			276 => 
			array (
				'id' => 2777,
				'id_provincia' => 21,
				'cod_municipio' => 60,
				'DC' => 0,
				'nombre' => 'Punta Umbría',
			),
			277 => 
			array (
				'id' => 2778,
				'id_provincia' => 22,
				'cod_municipio' => 60,
				'DC' => 5,
				'nombre' => 'Binaced',
			),
			278 => 
			array (
				'id' => 2779,
				'id_provincia' => 23,
				'cod_municipio' => 60,
				'DC' => 1,
				'nombre' => 'Martos',
			),
			279 => 
			array (
				'id' => 2780,
				'id_provincia' => 24,
				'cod_municipio' => 60,
				'DC' => 6,
				'nombre' => 'Crémenes',
			),
			280 => 
			array (
				'id' => 2781,
				'id_provincia' => 25,
				'cod_municipio' => 60,
				'DC' => 9,
				'nombre' => 'Cabanabona',
			),
			281 => 
			array (
				'id' => 2782,
				'id_provincia' => 26,
				'cod_municipio' => 60,
				'DC' => 2,
				'nombre' => 'Estollo',
			),
			282 => 
			array (
				'id' => 2783,
				'id_provincia' => 27,
				'cod_municipio' => 60,
				'DC' => 8,
				'nombre' => 'Taboada',
			),
			283 => 
			array (
				'id' => 2784,
				'id_provincia' => 28,
				'cod_municipio' => 60,
				'DC' => 4,
				'nombre' => 'Fuentidueña de Tajo',
			),
			284 => 
			array (
				'id' => 2785,
				'id_provincia' => 29,
				'cod_municipio' => 60,
				'DC' => 7,
				'nombre' => 'Igualeja',
			),
			285 => 
			array (
				'id' => 2786,
				'id_provincia' => 31,
				'cod_municipio' => 60,
				'DC' => 8,
				'nombre' => 'Burlada/Burlata',
			),
			286 => 
			array (
				'id' => 2787,
				'id_provincia' => 32,
				'cod_municipio' => 60,
				'DC' => 3,
				'nombre' => 'Petín',
			),
			287 => 
			array (
				'id' => 2788,
				'id_provincia' => 33,
				'cod_municipio' => 60,
				'DC' => 9,
				'nombre' => 'San Martín del Rey Aurelio',
			),
			288 => 
			array (
				'id' => 2789,
				'id_provincia' => 34,
				'cod_municipio' => 60,
				'DC' => 4,
				'nombre' => 'Cobos de Cerrato',
			),
			289 => 
			array (
				'id' => 2790,
				'id_provincia' => 36,
				'cod_municipio' => 60,
				'DC' => 0,
				'nombre' => 'Vilagarcía de Arousa',
			),
			290 => 
			array (
				'id' => 2791,
				'id_provincia' => 37,
				'cod_municipio' => 60,
				'DC' => 6,
				'nombre' => 'Buenavista',
			),
			291 => 
			array (
				'id' => 2792,
				'id_provincia' => 39,
				'cod_municipio' => 60,
				'DC' => 5,
				'nombre' => 'Reocín',
			),
			292 => 
			array (
				'id' => 2793,
				'id_provincia' => 40,
				'cod_municipio' => 60,
				'DC' => 9,
				'nombre' => 'Condado de Castilnovo',
			),
			293 => 
			array (
				'id' => 2794,
				'id_provincia' => 41,
				'cod_municipio' => 60,
				'DC' => 6,
				'nombre' => 'Marchena',
			),
			294 => 
			array (
				'id' => 2795,
				'id_provincia' => 42,
				'cod_municipio' => 60,
				'DC' => 1,
				'nombre' => 'Cerbón',
			),
			295 => 
			array (
				'id' => 2796,
				'id_provincia' => 43,
				'cod_municipio' => 60,
				'DC' => 7,
				'nombre' => 'Flix',
			),
			296 => 
			array (
				'id' => 2797,
				'id_provincia' => 44,
				'cod_municipio' => 60,
				'DC' => 2,
				'nombre' => 'Cañada de Benatanduz',
			),
			297 => 
			array (
				'id' => 2798,
				'id_provincia' => 45,
				'cod_municipio' => 60,
				'DC' => 5,
				'nombre' => 'Erustes',
			),
			298 => 
			array (
				'id' => 2799,
				'id_provincia' => 46,
				'cod_municipio' => 60,
				'DC' => 8,
				'nombre' => 'Benifaió',
			),
			299 => 
			array (
				'id' => 2800,
				'id_provincia' => 47,
				'cod_municipio' => 60,
				'DC' => 4,
				'nombre' => 'Encinas de Esgueva',
			),
			300 => 
			array (
				'id' => 2801,
				'id_provincia' => 48,
				'cod_municipio' => 60,
				'DC' => 0,
				'nombre' => 'Markina-Xemein',
			),
			301 => 
			array (
				'id' => 2802,
				'id_provincia' => 50,
				'cod_municipio' => 60,
				'DC' => 6,
				'nombre' => 'Bulbuente',
			),
			302 => 
			array (
				'id' => 2803,
				'id_provincia' => 1,
				'cod_municipio' => 61,
				'DC' => 1,
				'nombre' => 'Zalduondo',
			),
			303 => 
			array (
				'id' => 2804,
				'id_provincia' => 2,
				'cod_municipio' => 61,
				'DC' => 6,
				'nombre' => 'Pétrola',
			),
			304 => 
			array (
				'id' => 2805,
				'id_provincia' => 3,
				'cod_municipio' => 61,
				'DC' => 2,
				'nombre' => 'Daya Nueva',
			),
			305 => 
			array (
				'id' => 2806,
				'id_provincia' => 4,
				'cod_municipio' => 61,
				'DC' => 7,
				'nombre' => 'Lúcar',
			),
			306 => 
			array (
				'id' => 2807,
				'id_provincia' => 5,
				'cod_municipio' => 61,
				'DC' => 0,
				'nombre' => 'Colilla, La',
			),
			307 => 
			array (
				'id' => 2808,
				'id_provincia' => 6,
				'cod_municipio' => 61,
				'DC' => 3,
				'nombre' => 'Haba, La',
			),
			308 => 
			array (
				'id' => 2809,
				'id_provincia' => 7,
				'cod_municipio' => 61,
				'DC' => 9,
				'nombre' => 'Sóller',
			),
			309 => 
			array (
				'id' => 2810,
				'id_provincia' => 8,
				'cod_municipio' => 61,
				'DC' => 5,
				'nombre' => 'Castellgalí',
			),
			310 => 
			array (
				'id' => 2811,
				'id_provincia' => 9,
				'cod_municipio' => 61,
				'DC' => 8,
				'nombre' => 'Cabañes de Esgueva',
			),
			311 => 
			array (
				'id' => 2812,
				'id_provincia' => 10,
				'cod_municipio' => 61,
				'DC' => 2,
				'nombre' => 'Ceclavín',
			),
			312 => 
			array (
				'id' => 2813,
				'id_provincia' => 12,
				'cod_municipio' => 61,
				'DC' => 4,
				'nombre' => 'Forcall',
			),
			313 => 
			array (
				'id' => 2814,
				'id_provincia' => 13,
				'cod_municipio' => 61,
				'DC' => 0,
				'nombre' => 'Pedro Muñoz',
			),
			314 => 
			array (
				'id' => 2815,
				'id_provincia' => 14,
				'cod_municipio' => 61,
				'DC' => 5,
				'nombre' => 'Santa Eufemia',
			),
			315 => 
			array (
				'id' => 2816,
				'id_provincia' => 15,
				'cod_municipio' => 61,
				'DC' => 8,
				'nombre' => 'Ortigueira',
			),
			316 => 
			array (
				'id' => 2817,
				'id_provincia' => 16,
				'cod_municipio' => 61,
				'DC' => 1,
				'nombre' => 'Casas de Fernando Alonso',
			),
			317 => 
			array (
				'id' => 2818,
				'id_provincia' => 17,
				'cod_municipio' => 61,
				'DC' => 7,
				'nombre' => 'Das',
			),
			318 => 
			array (
				'id' => 2819,
				'id_provincia' => 18,
				'cod_municipio' => 61,
				'DC' => 3,
				'nombre' => 'Chimeneas',
			),
			319 => 
			array (
				'id' => 2820,
				'id_provincia' => 19,
				'cod_municipio' => 61,
				'DC' => 6,
				'nombre' => 'Campisábalos',
			),
			320 => 
			array (
				'id' => 2821,
				'id_provincia' => 20,
				'cod_municipio' => 61,
				'DC' => 0,
				'nombre' => 'Orio',
			),
			321 => 
			array (
				'id' => 2822,
				'id_provincia' => 21,
				'cod_municipio' => 61,
				'DC' => 7,
				'nombre' => 'Rociana del Condado',
			),
			322 => 
			array (
				'id' => 2823,
				'id_provincia' => 22,
				'cod_municipio' => 61,
				'DC' => 2,
				'nombre' => 'Binéfar',
			),
			323 => 
			array (
				'id' => 2824,
				'id_provincia' => 23,
				'cod_municipio' => 61,
				'DC' => 8,
				'nombre' => 'Mengíbar',
			),
			324 => 
			array (
				'id' => 2825,
				'id_provincia' => 24,
				'cod_municipio' => 61,
				'DC' => 3,
				'nombre' => 'Cuadros',
			),
			325 => 
			array (
				'id' => 2826,
				'id_provincia' => 25,
				'cod_municipio' => 61,
				'DC' => 6,
				'nombre' => 'Cabó',
			),
			326 => 
			array (
				'id' => 2827,
				'id_provincia' => 26,
				'cod_municipio' => 61,
				'DC' => 9,
				'nombre' => 'Ezcaray',
			),
			327 => 
			array (
				'id' => 2828,
				'id_provincia' => 27,
				'cod_municipio' => 61,
				'DC' => 5,
				'nombre' => 'Trabada',
			),
			328 => 
			array (
				'id' => 2829,
				'id_provincia' => 28,
				'cod_municipio' => 61,
				'DC' => 1,
				'nombre' => 'Galapagar',
			),
			329 => 
			array (
				'id' => 2830,
				'id_provincia' => 29,
				'cod_municipio' => 61,
				'DC' => 4,
				'nombre' => 'Istán',
			),
			330 => 
			array (
				'id' => 2831,
				'id_provincia' => 31,
				'cod_municipio' => 61,
				'DC' => 5,
				'nombre' => 'Busto, El',
			),
			331 => 
			array (
				'id' => 2832,
				'id_provincia' => 32,
				'cod_municipio' => 61,
				'DC' => 0,
				'nombre' => 'Piñor',
			),
			332 => 
			array (
				'id' => 2833,
				'id_provincia' => 33,
				'cod_municipio' => 61,
				'DC' => 6,
				'nombre' => 'San Martín de Oscos',
			),
			333 => 
			array (
				'id' => 2834,
				'id_provincia' => 34,
				'cod_municipio' => 61,
				'DC' => 1,
				'nombre' => 'Collazos de Boedo',
			),
			334 => 
			array (
				'id' => 2835,
				'id_provincia' => 36,
				'cod_municipio' => 61,
				'DC' => 7,
				'nombre' => 'Vilanova de Arousa',
			),
			335 => 
			array (
				'id' => 2836,
				'id_provincia' => 37,
				'cod_municipio' => 61,
				'DC' => 3,
				'nombre' => 'Cabaco, El',
			),
			336 => 
			array (
				'id' => 2837,
				'id_provincia' => 39,
				'cod_municipio' => 61,
				'DC' => 2,
				'nombre' => 'Ribamontán al Mar',
			),
			337 => 
			array (
				'id' => 2838,
				'id_provincia' => 40,
				'cod_municipio' => 61,
				'DC' => 6,
				'nombre' => 'Corral de Ayllón',
			),
			338 => 
			array (
				'id' => 2839,
				'id_provincia' => 41,
				'cod_municipio' => 61,
				'DC' => 3,
				'nombre' => 'Marinaleda',
			),
			339 => 
			array (
				'id' => 2840,
				'id_provincia' => 42,
				'cod_municipio' => 61,
				'DC' => 8,
				'nombre' => 'Cidones',
			),
			340 => 
			array (
				'id' => 2841,
				'id_provincia' => 43,
				'cod_municipio' => 61,
				'DC' => 4,
				'nombre' => 'Forès',
			),
			341 => 
			array (
				'id' => 2842,
				'id_provincia' => 44,
				'cod_municipio' => 61,
				'DC' => 9,
				'nombre' => 'Cañada de Verich, La',
			),
			342 => 
			array (
				'id' => 2843,
				'id_provincia' => 45,
				'cod_municipio' => 61,
				'DC' => 2,
				'nombre' => 'Escalona',
			),
			343 => 
			array (
				'id' => 2844,
				'id_provincia' => 46,
				'cod_municipio' => 61,
				'DC' => 5,
				'nombre' => 'Beniflá',
			),
			344 => 
			array (
				'id' => 2845,
				'id_provincia' => 47,
				'cod_municipio' => 61,
				'DC' => 1,
				'nombre' => 'Esguevillas de Esgueva',
			),
			345 => 
			array (
				'id' => 2846,
				'id_provincia' => 48,
				'cod_municipio' => 61,
				'DC' => 7,
				'nombre' => 'Maruri-Jatabe',
			),
			346 => 
			array (
				'id' => 2847,
				'id_provincia' => 49,
				'cod_municipio' => 61,
				'DC' => 0,
				'nombre' => 'Entrala',
			),
			347 => 
			array (
				'id' => 2848,
				'id_provincia' => 50,
				'cod_municipio' => 61,
				'DC' => 3,
				'nombre' => 'Bureta',
			),
			348 => 
			array (
				'id' => 2849,
				'id_provincia' => 1,
				'cod_municipio' => 62,
				'DC' => 6,
				'nombre' => 'Zambrana',
			),
			349 => 
			array (
				'id' => 2850,
				'id_provincia' => 2,
				'cod_municipio' => 62,
				'DC' => 1,
				'nombre' => 'Povedilla',
			),
			350 => 
			array (
				'id' => 2851,
				'id_provincia' => 3,
				'cod_municipio' => 62,
				'DC' => 7,
				'nombre' => 'Daya Vieja',
			),
			351 => 
			array (
				'id' => 2852,
				'id_provincia' => 4,
				'cod_municipio' => 62,
				'DC' => 2,
				'nombre' => 'Macael',
			),
			352 => 
			array (
				'id' => 2853,
				'id_provincia' => 5,
				'cod_municipio' => 62,
				'DC' => 5,
				'nombre' => 'Collado de Contreras',
			),
			353 => 
			array (
				'id' => 2854,
				'id_provincia' => 6,
				'cod_municipio' => 62,
				'DC' => 8,
				'nombre' => 'Helechosa de los Montes',
			),
			354 => 
			array (
				'id' => 2855,
				'id_provincia' => 7,
				'cod_municipio' => 62,
				'DC' => 4,
				'nombre' => 'Son Servera',
			),
			355 => 
			array (
				'id' => 2856,
				'id_provincia' => 8,
				'cod_municipio' => 62,
				'DC' => 0,
				'nombre' => 'Castellnou de Bages',
			),
			356 => 
			array (
				'id' => 2857,
				'id_provincia' => 9,
				'cod_municipio' => 62,
				'DC' => 3,
				'nombre' => 'Cabezón de la Sierra',
			),
			357 => 
			array (
				'id' => 2858,
				'id_provincia' => 10,
				'cod_municipio' => 62,
				'DC' => 7,
				'nombre' => 'Cedillo',
			),
			358 => 
			array (
				'id' => 2859,
				'id_provincia' => 13,
				'cod_municipio' => 62,
				'DC' => 5,
				'nombre' => 'Picón',
			),
			359 => 
			array (
				'id' => 2860,
				'id_provincia' => 14,
				'cod_municipio' => 62,
				'DC' => 0,
				'nombre' => 'Torrecampo',
			),
			360 => 
			array (
				'id' => 2861,
				'id_provincia' => 15,
				'cod_municipio' => 62,
				'DC' => 3,
				'nombre' => 'Outes',
			),
			361 => 
			array (
				'id' => 2862,
				'id_provincia' => 16,
				'cod_municipio' => 62,
				'DC' => 6,
				'nombre' => 'Casas de Garcimolina',
			),
			362 => 
			array (
				'id' => 2863,
				'id_provincia' => 17,
				'cod_municipio' => 62,
				'DC' => 2,
				'nombre' => 'Escala, L\'',
			),
			363 => 
			array (
				'id' => 2864,
				'id_provincia' => 18,
				'cod_municipio' => 62,
				'DC' => 8,
				'nombre' => 'Churriana de la Vega',
			),
			364 => 
			array (
				'id' => 2865,
				'id_provincia' => 20,
				'cod_municipio' => 62,
				'DC' => 5,
				'nombre' => 'Ormaiztegi',
			),
			365 => 
			array (
				'id' => 2866,
				'id_provincia' => 21,
				'cod_municipio' => 62,
				'DC' => 2,
				'nombre' => 'Rosal de la Frontera',
			),
			366 => 
			array (
				'id' => 2867,
				'id_provincia' => 22,
				'cod_municipio' => 62,
				'DC' => 7,
				'nombre' => 'Bisaurri',
			),
			367 => 
			array (
				'id' => 2868,
				'id_provincia' => 23,
				'cod_municipio' => 62,
				'DC' => 3,
				'nombre' => 'Montizón',
			),
			368 => 
			array (
				'id' => 2869,
				'id_provincia' => 24,
				'cod_municipio' => 62,
				'DC' => 8,
				'nombre' => 'Cubillas de los Oteros',
			),
			369 => 
			array (
				'id' => 2870,
				'id_provincia' => 25,
				'cod_municipio' => 62,
				'DC' => 1,
				'nombre' => 'Camarasa',
			),
			370 => 
			array (
				'id' => 2871,
				'id_provincia' => 26,
				'cod_municipio' => 62,
				'DC' => 4,
				'nombre' => 'Foncea',
			),
			371 => 
			array (
				'id' => 2872,
				'id_provincia' => 27,
				'cod_municipio' => 62,
				'DC' => 0,
				'nombre' => 'Triacastela',
			),
			372 => 
			array (
				'id' => 2873,
				'id_provincia' => 28,
				'cod_municipio' => 62,
				'DC' => 6,
				'nombre' => 'Garganta de los Montes',
			),
			373 => 
			array (
				'id' => 2874,
				'id_provincia' => 29,
				'cod_municipio' => 62,
				'DC' => 9,
				'nombre' => 'Iznate',
			),
			374 => 
			array (
				'id' => 2875,
				'id_provincia' => 31,
				'cod_municipio' => 62,
				'DC' => 0,
				'nombre' => 'Cabanillas',
			),
			375 => 
			array (
				'id' => 2876,
				'id_provincia' => 32,
				'cod_municipio' => 62,
				'DC' => 5,
				'nombre' => 'Porqueira',
			),
			376 => 
			array (
				'id' => 2877,
				'id_provincia' => 33,
				'cod_municipio' => 62,
				'DC' => 1,
				'nombre' => 'Santa Eulalia de Oscos',
			),
			377 => 
			array (
				'id' => 2878,
				'id_provincia' => 34,
				'cod_municipio' => 62,
				'DC' => 6,
				'nombre' => 'Congosto de Valdavia',
			),
			378 => 
			array (
				'id' => 2879,
				'id_provincia' => 37,
				'cod_municipio' => 62,
				'DC' => 8,
				'nombre' => 'Cabezabellosa de la Calzada',
			),
			379 => 
			array (
				'id' => 2880,
				'id_provincia' => 39,
				'cod_municipio' => 62,
				'DC' => 7,
				'nombre' => 'Ribamontán al Monte',
			),
			380 => 
			array (
				'id' => 2881,
				'id_provincia' => 40,
				'cod_municipio' => 62,
				'DC' => 1,
				'nombre' => 'Cubillo',
			),
			381 => 
			array (
				'id' => 2882,
				'id_provincia' => 41,
				'cod_municipio' => 62,
				'DC' => 8,
				'nombre' => 'Martín de la Jara',
			),
			382 => 
			array (
				'id' => 2883,
				'id_provincia' => 42,
				'cod_municipio' => 62,
				'DC' => 3,
				'nombre' => 'Cigudosa',
			),
			383 => 
			array (
				'id' => 2884,
				'id_provincia' => 43,
				'cod_municipio' => 62,
				'DC' => 9,
				'nombre' => 'Freginals',
			),
			384 => 
			array (
				'id' => 2885,
				'id_provincia' => 44,
				'cod_municipio' => 62,
				'DC' => 4,
				'nombre' => 'Cañada Vellida',
			),
			385 => 
			array (
				'id' => 2886,
				'id_provincia' => 45,
				'cod_municipio' => 62,
				'DC' => 7,
				'nombre' => 'Escalonilla',
			),
			386 => 
			array (
				'id' => 2887,
				'id_provincia' => 46,
				'cod_municipio' => 62,
				'DC' => 0,
				'nombre' => 'Benigánim',
			),
			387 => 
			array (
				'id' => 2888,
				'id_provincia' => 47,
				'cod_municipio' => 62,
				'DC' => 6,
				'nombre' => 'Fombellida',
			),
			388 => 
			array (
				'id' => 2889,
				'id_provincia' => 48,
				'cod_municipio' => 62,
				'DC' => 2,
				'nombre' => 'Mendata',
			),
			389 => 
			array (
				'id' => 2890,
				'id_provincia' => 49,
				'cod_municipio' => 62,
				'DC' => 5,
				'nombre' => 'Espadañedo',
			),
			390 => 
			array (
				'id' => 2891,
				'id_provincia' => 50,
				'cod_municipio' => 62,
				'DC' => 8,
				'nombre' => 'Burgo de Ebro, El',
			),
			391 => 
			array (
				'id' => 2892,
				'id_provincia' => 1,
				'cod_municipio' => 63,
				'DC' => 2,
				'nombre' => 'Zuia',
			),
			392 => 
			array (
				'id' => 2893,
				'id_provincia' => 2,
				'cod_municipio' => 63,
				'DC' => 7,
				'nombre' => 'Pozohondo',
			),
			393 => 
			array (
				'id' => 2894,
				'id_provincia' => 3,
				'cod_municipio' => 63,
				'DC' => 3,
				'nombre' => 'Dénia',
			),
			394 => 
			array (
				'id' => 2895,
				'id_provincia' => 4,
				'cod_municipio' => 63,
				'DC' => 8,
				'nombre' => 'María',
			),
			395 => 
			array (
				'id' => 2896,
				'id_provincia' => 5,
				'cod_municipio' => 63,
				'DC' => 1,
				'nombre' => 'Collado del Mirón',
			),
			396 => 
			array (
				'id' => 2897,
				'id_provincia' => 6,
				'cod_municipio' => 63,
				'DC' => 4,
				'nombre' => 'Herrera del Duque',
			),
			397 => 
			array (
				'id' => 2898,
				'id_provincia' => 7,
				'cod_municipio' => 63,
				'DC' => 0,
				'nombre' => 'Valldemossa',
			),
			398 => 
			array (
				'id' => 2899,
				'id_provincia' => 8,
				'cod_municipio' => 63,
				'DC' => 6,
				'nombre' => 'Castellolí',
			),
			399 => 
			array (
				'id' => 2900,
				'id_provincia' => 9,
				'cod_municipio' => 63,
				'DC' => 9,
				'nombre' => 'Cavia',
			),
			400 => 
			array (
				'id' => 2901,
				'id_provincia' => 10,
				'cod_municipio' => 63,
				'DC' => 3,
				'nombre' => 'Cerezo',
			),
			401 => 
			array (
				'id' => 2902,
				'id_provincia' => 12,
				'cod_municipio' => 63,
				'DC' => 5,
				'nombre' => 'Fuente la Reina',
			),
			402 => 
			array (
				'id' => 2903,
				'id_provincia' => 13,
				'cod_municipio' => 63,
				'DC' => 1,
				'nombre' => 'Piedrabuena',
			),
			403 => 
			array (
				'id' => 2904,
				'id_provincia' => 14,
				'cod_municipio' => 63,
				'DC' => 6,
				'nombre' => 'Valenzuela',
			),
			404 => 
			array (
				'id' => 2905,
				'id_provincia' => 15,
				'cod_municipio' => 63,
				'DC' => 9,
				'nombre' => 'Oza dos Ríos',
			),
			405 => 
			array (
				'id' => 2906,
				'id_provincia' => 16,
				'cod_municipio' => 63,
				'DC' => 2,
				'nombre' => 'Casas de Guijarro',
			),
			406 => 
			array (
				'id' => 2907,
				'id_provincia' => 17,
				'cod_municipio' => 63,
				'DC' => 8,
				'nombre' => 'Espinelves',
			),
			407 => 
			array (
				'id' => 2908,
				'id_provincia' => 18,
				'cod_municipio' => 63,
				'DC' => 4,
				'nombre' => 'Darro',
			),
			408 => 
			array (
				'id' => 2909,
				'id_provincia' => 20,
				'cod_municipio' => 63,
				'DC' => 1,
				'nombre' => 'Oiartzun',
			),
			409 => 
			array (
				'id' => 2910,
				'id_provincia' => 21,
				'cod_municipio' => 63,
				'DC' => 8,
				'nombre' => 'San Bartolomé de la Torre',
			),
			410 => 
			array (
				'id' => 2911,
				'id_provincia' => 22,
				'cod_municipio' => 63,
				'DC' => 3,
				'nombre' => 'Biscarrués',
			),
			411 => 
			array (
				'id' => 2912,
				'id_provincia' => 23,
				'cod_municipio' => 63,
				'DC' => 9,
				'nombre' => 'Navas de San Juan',
			),
			412 => 
			array (
				'id' => 2913,
				'id_provincia' => 24,
				'cod_municipio' => 63,
				'DC' => 4,
				'nombre' => 'Cubillas de Rueda',
			),
			413 => 
			array (
				'id' => 2914,
				'id_provincia' => 25,
				'cod_municipio' => 63,
				'DC' => 7,
				'nombre' => 'Canejan',
			),
			414 => 
			array (
				'id' => 2915,
				'id_provincia' => 26,
				'cod_municipio' => 63,
				'DC' => 0,
				'nombre' => 'Fonzaleche',
			),
			415 => 
			array (
				'id' => 2916,
				'id_provincia' => 27,
				'cod_municipio' => 63,
				'DC' => 6,
				'nombre' => 'Valadouro, O',
			),
			416 => 
			array (
				'id' => 2917,
				'id_provincia' => 28,
				'cod_municipio' => 63,
				'DC' => 2,
				'nombre' => 'Gargantilla del Lozoya y Pinilla de Buitrago',
			),
			417 => 
			array (
				'id' => 2918,
				'id_provincia' => 29,
				'cod_municipio' => 63,
				'DC' => 5,
				'nombre' => 'Jimera de Líbar',
			),
			418 => 
			array (
				'id' => 2919,
				'id_provincia' => 31,
				'cod_municipio' => 63,
				'DC' => 6,
				'nombre' => 'Cabredo',
			),
			419 => 
			array (
				'id' => 2920,
				'id_provincia' => 32,
				'cod_municipio' => 63,
				'DC' => 1,
				'nombre' => 'Pobra de Trives, A',
			),
			420 => 
			array (
				'id' => 2921,
				'id_provincia' => 33,
				'cod_municipio' => 63,
				'DC' => 7,
				'nombre' => 'San Tirso de Abres',
			),
			421 => 
			array (
				'id' => 2922,
				'id_provincia' => 34,
				'cod_municipio' => 63,
				'DC' => 2,
				'nombre' => 'Cordovilla la Real',
			),
			422 => 
			array (
				'id' => 2923,
				'id_provincia' => 37,
				'cod_municipio' => 63,
				'DC' => 4,
				'nombre' => 'Cabeza de Béjar, La',
			),
			423 => 
			array (
				'id' => 2924,
				'id_provincia' => 39,
				'cod_municipio' => 63,
				'DC' => 3,
				'nombre' => 'Rionansa',
			),
			424 => 
			array (
				'id' => 2925,
				'id_provincia' => 40,
				'cod_municipio' => 63,
				'DC' => 7,
				'nombre' => 'Cuéllar',
			),
			425 => 
			array (
				'id' => 2926,
				'id_provincia' => 41,
				'cod_municipio' => 63,
				'DC' => 4,
				'nombre' => 'Molares, Los',
			),
			426 => 
			array (
				'id' => 2927,
				'id_provincia' => 42,
				'cod_municipio' => 63,
				'DC' => 9,
				'nombre' => 'Cihuela',
			),
			427 => 
			array (
				'id' => 2928,
				'id_provincia' => 43,
				'cod_municipio' => 63,
				'DC' => 5,
				'nombre' => 'Galera, La',
			),
			428 => 
			array (
				'id' => 2929,
				'id_provincia' => 44,
				'cod_municipio' => 63,
				'DC' => 0,
				'nombre' => 'Cañizar del Olivar',
			),
			429 => 
			array (
				'id' => 2930,
				'id_provincia' => 45,
				'cod_municipio' => 63,
				'DC' => 3,
				'nombre' => 'Espinoso del Rey',
			),
			430 => 
			array (
				'id' => 2931,
				'id_provincia' => 46,
				'cod_municipio' => 63,
				'DC' => 6,
				'nombre' => 'Benimodo',
			),
			431 => 
			array (
				'id' => 2932,
				'id_provincia' => 47,
				'cod_municipio' => 63,
				'DC' => 2,
				'nombre' => 'Fompedraza',
			),
			432 => 
			array (
				'id' => 2933,
				'id_provincia' => 48,
				'cod_municipio' => 63,
				'DC' => 8,
				'nombre' => 'Mendexa',
			),
			433 => 
			array (
				'id' => 2934,
				'id_provincia' => 49,
				'cod_municipio' => 63,
				'DC' => 1,
				'nombre' => 'Faramontanos de Tábara',
			),
			434 => 
			array (
				'id' => 2935,
				'id_provincia' => 50,
				'cod_municipio' => 63,
				'DC' => 4,
				'nombre' => 'Buste, El',
			),
			435 => 
			array (
				'id' => 2936,
				'id_provincia' => 2,
				'cod_municipio' => 64,
				'DC' => 2,
				'nombre' => 'Pozo-Lorente',
			),
			436 => 
			array (
				'id' => 2937,
				'id_provincia' => 3,
				'cod_municipio' => 64,
				'DC' => 8,
				'nombre' => 'Dolores',
			),
			437 => 
			array (
				'id' => 2938,
				'id_provincia' => 4,
				'cod_municipio' => 64,
				'DC' => 3,
				'nombre' => 'Mojácar',
			),
			438 => 
			array (
				'id' => 2939,
				'id_provincia' => 5,
				'cod_municipio' => 64,
				'DC' => 6,
				'nombre' => 'Constanzana',
			),
			439 => 
			array (
				'id' => 2940,
				'id_provincia' => 6,
				'cod_municipio' => 64,
				'DC' => 9,
				'nombre' => 'Higuera de la Serena',
			),
			440 => 
			array (
				'id' => 2941,
				'id_provincia' => 7,
				'cod_municipio' => 64,
				'DC' => 5,
				'nombre' => 'Castell, Es',
			),
			441 => 
			array (
				'id' => 2942,
				'id_provincia' => 8,
				'cod_municipio' => 64,
				'DC' => 1,
				'nombre' => 'Castellterçol',
			),
			442 => 
			array (
				'id' => 2943,
				'id_provincia' => 9,
				'cod_municipio' => 64,
				'DC' => 4,
				'nombre' => 'Caleruega',
			),
			443 => 
			array (
				'id' => 2944,
				'id_provincia' => 10,
				'cod_municipio' => 64,
				'DC' => 8,
				'nombre' => 'Cilleros',
			),
			444 => 
			array (
				'id' => 2945,
				'id_provincia' => 12,
				'cod_municipio' => 64,
				'DC' => 0,
				'nombre' => 'Fuentes de Ayódar',
			),
			445 => 
			array (
				'id' => 2946,
				'id_provincia' => 13,
				'cod_municipio' => 64,
				'DC' => 6,
				'nombre' => 'Poblete',
			),
			446 => 
			array (
				'id' => 2947,
				'id_provincia' => 14,
				'cod_municipio' => 64,
				'DC' => 1,
				'nombre' => 'Valsequillo',
			),
			447 => 
			array (
				'id' => 2948,
				'id_provincia' => 15,
				'cod_municipio' => 64,
				'DC' => 4,
				'nombre' => 'Paderne',
			),
			448 => 
			array (
				'id' => 2949,
				'id_provincia' => 16,
				'cod_municipio' => 64,
				'DC' => 7,
				'nombre' => 'Casas de Haro',
			),
			449 => 
			array (
				'id' => 2950,
				'id_provincia' => 17,
				'cod_municipio' => 64,
				'DC' => 3,
				'nombre' => 'Espolla',
			),
			450 => 
			array (
				'id' => 2951,
				'id_provincia' => 18,
				'cod_municipio' => 64,
				'DC' => 9,
				'nombre' => 'Dehesas de Guadix',
			),
			451 => 
			array (
				'id' => 2952,
				'id_provincia' => 19,
				'cod_municipio' => 64,
				'DC' => 2,
				'nombre' => 'Canredondo',
			),
			452 => 
			array (
				'id' => 2953,
				'id_provincia' => 20,
				'cod_municipio' => 64,
				'DC' => 6,
				'nombre' => 'Pasaia',
			),
			453 => 
			array (
				'id' => 2954,
				'id_provincia' => 21,
				'cod_municipio' => 64,
				'DC' => 3,
				'nombre' => 'San Juan del Puerto',
			),
			454 => 
			array (
				'id' => 2955,
				'id_provincia' => 22,
				'cod_municipio' => 64,
				'DC' => 8,
				'nombre' => 'Blecua y Torres',
			),
			455 => 
			array (
				'id' => 2956,
				'id_provincia' => 23,
				'cod_municipio' => 64,
				'DC' => 4,
				'nombre' => 'Noalejo',
			),
			456 => 
			array (
				'id' => 2957,
				'id_provincia' => 24,
				'cod_municipio' => 64,
				'DC' => 9,
				'nombre' => 'Cubillos del Sil',
			),
			457 => 
			array (
				'id' => 2958,
				'id_provincia' => 25,
				'cod_municipio' => 64,
				'DC' => 2,
				'nombre' => 'Castellar de la Ribera',
			),
			458 => 
			array (
				'id' => 2959,
				'id_provincia' => 26,
				'cod_municipio' => 64,
				'DC' => 5,
				'nombre' => 'Fuenmayor',
			),
			459 => 
			array (
				'id' => 2960,
				'id_provincia' => 27,
				'cod_municipio' => 64,
				'DC' => 1,
				'nombre' => 'Vicedo, O',
			),
			460 => 
			array (
				'id' => 2961,
				'id_provincia' => 28,
				'cod_municipio' => 64,
				'DC' => 7,
				'nombre' => 'Gascones',
			),
			461 => 
			array (
				'id' => 2962,
				'id_provincia' => 29,
				'cod_municipio' => 64,
				'DC' => 0,
				'nombre' => 'Jubrique',
			),
			462 => 
			array (
				'id' => 2963,
				'id_provincia' => 31,
				'cod_municipio' => 64,
				'DC' => 1,
				'nombre' => 'Cadreita',
			),
			463 => 
			array (
				'id' => 2964,
				'id_provincia' => 32,
				'cod_municipio' => 64,
				'DC' => 6,
				'nombre' => 'Pontedeva',
			),
			464 => 
			array (
				'id' => 2965,
				'id_provincia' => 33,
				'cod_municipio' => 64,
				'DC' => 2,
				'nombre' => 'Santo Adriano',
			),
			465 => 
			array (
				'id' => 2966,
				'id_provincia' => 39,
				'cod_municipio' => 64,
				'DC' => 8,
				'nombre' => 'Riotuerto',
			),
			466 => 
			array (
				'id' => 2967,
				'id_provincia' => 41,
				'cod_municipio' => 64,
				'DC' => 9,
				'nombre' => 'Montellano',
			),
			467 => 
			array (
				'id' => 2968,
				'id_provincia' => 42,
				'cod_municipio' => 64,
				'DC' => 4,
				'nombre' => 'Ciria',
			),
			468 => 
			array (
				'id' => 2969,
				'id_provincia' => 43,
				'cod_municipio' => 64,
				'DC' => 0,
				'nombre' => 'Gandesa',
			),
			469 => 
			array (
				'id' => 2970,
				'id_provincia' => 44,
				'cod_municipio' => 64,
				'DC' => 5,
				'nombre' => 'Cascante del Río',
			),
			470 => 
			array (
				'id' => 2971,
				'id_provincia' => 45,
				'cod_municipio' => 64,
				'DC' => 8,
				'nombre' => 'Esquivias',
			),
			471 => 
			array (
				'id' => 2972,
				'id_provincia' => 46,
				'cod_municipio' => 64,
				'DC' => 1,
				'nombre' => 'Benimuslem',
			),
			472 => 
			array (
				'id' => 2973,
				'id_provincia' => 47,
				'cod_municipio' => 64,
				'DC' => 7,
				'nombre' => 'Fontihoyuelo',
			),
			473 => 
			array (
				'id' => 2974,
				'id_provincia' => 48,
				'cod_municipio' => 64,
				'DC' => 3,
				'nombre' => 'Meñaka',
			),
			474 => 
			array (
				'id' => 2975,
				'id_provincia' => 49,
				'cod_municipio' => 64,
				'DC' => 6,
				'nombre' => 'Fariza',
			),
			475 => 
			array (
				'id' => 2976,
				'id_provincia' => 50,
				'cod_municipio' => 64,
				'DC' => 9,
				'nombre' => 'Cabañas de Ebro',
			),
			476 => 
			array (
				'id' => 2977,
				'id_provincia' => 2,
				'cod_municipio' => 65,
				'DC' => 5,
				'nombre' => 'Pozuelo',
			),
			477 => 
			array (
				'id' => 2978,
				'id_provincia' => 3,
				'cod_municipio' => 65,
				'DC' => 1,
				'nombre' => 'Elche/Elx',
			),
			478 => 
			array (
				'id' => 2979,
				'id_provincia' => 4,
				'cod_municipio' => 65,
				'DC' => 6,
				'nombre' => 'Nacimiento',
			),
			479 => 
			array (
				'id' => 2980,
				'id_provincia' => 5,
				'cod_municipio' => 65,
				'DC' => 9,
				'nombre' => 'Crespos',
			),
			480 => 
			array (
				'id' => 2981,
				'id_provincia' => 6,
				'cod_municipio' => 65,
				'DC' => 2,
				'nombre' => 'Higuera de Llerena',
			),
			481 => 
			array (
				'id' => 2982,
				'id_provincia' => 7,
				'cod_municipio' => 65,
				'DC' => 8,
				'nombre' => 'Vilafranca de Bonany',
			),
			482 => 
			array (
				'id' => 2983,
				'id_provincia' => 8,
				'cod_municipio' => 65,
				'DC' => 4,
				'nombre' => 'Castellví de la Marca',
			),
			483 => 
			array (
				'id' => 2984,
				'id_provincia' => 9,
				'cod_municipio' => 65,
				'DC' => 7,
				'nombre' => 'Campillo de Aranda',
			),
			484 => 
			array (
				'id' => 2985,
				'id_provincia' => 10,
				'cod_municipio' => 65,
				'DC' => 1,
				'nombre' => 'Collado',
			),
			485 => 
			array (
				'id' => 2986,
				'id_provincia' => 12,
				'cod_municipio' => 65,
				'DC' => 3,
				'nombre' => 'Gaibiel',
			),
			486 => 
			array (
				'id' => 2987,
				'id_provincia' => 13,
				'cod_municipio' => 65,
				'DC' => 9,
				'nombre' => 'Porzuna',
			),
			487 => 
			array (
				'id' => 2988,
				'id_provincia' => 14,
				'cod_municipio' => 65,
				'DC' => 4,
				'nombre' => 'Victoria, La',
			),
			488 => 
			array (
				'id' => 2989,
				'id_provincia' => 15,
				'cod_municipio' => 65,
				'DC' => 7,
				'nombre' => 'Padrón',
			),
			489 => 
			array (
				'id' => 2990,
				'id_provincia' => 16,
				'cod_municipio' => 65,
				'DC' => 0,
				'nombre' => 'Casas de los Pinos',
			),
			490 => 
			array (
				'id' => 2991,
				'id_provincia' => 17,
				'cod_municipio' => 65,
				'DC' => 6,
				'nombre' => 'Esponellà',
			),
			491 => 
			array (
				'id' => 2992,
				'id_provincia' => 19,
				'cod_municipio' => 65,
				'DC' => 5,
				'nombre' => 'Cantalojas',
			),
			492 => 
			array (
				'id' => 2993,
				'id_provincia' => 20,
				'cod_municipio' => 65,
				'DC' => 9,
				'nombre' => 'Soraluze/Placencia de las Armas',
			),
			493 => 
			array (
				'id' => 2994,
				'id_provincia' => 21,
				'cod_municipio' => 65,
				'DC' => 6,
				'nombre' => 'Sanlúcar de Guadiana',
			),
			494 => 
			array (
				'id' => 2995,
				'id_provincia' => 23,
				'cod_municipio' => 65,
				'DC' => 7,
				'nombre' => 'Orcera',
			),
			495 => 
			array (
				'id' => 2996,
				'id_provincia' => 24,
				'cod_municipio' => 65,
				'DC' => 2,
				'nombre' => 'Chozas de Abajo',
			),
			496 => 
			array (
				'id' => 2997,
				'id_provincia' => 26,
				'cod_municipio' => 65,
				'DC' => 8,
				'nombre' => 'Galbárruli',
			),
			497 => 
			array (
				'id' => 2998,
				'id_provincia' => 27,
				'cod_municipio' => 65,
				'DC' => 4,
				'nombre' => 'Vilalba',
			),
			498 => 
			array (
				'id' => 2999,
				'id_provincia' => 28,
				'cod_municipio' => 65,
				'DC' => 0,
				'nombre' => 'Getafe',
			),
			499 => 
			array (
				'id' => 3000,
				'id_provincia' => 29,
				'cod_municipio' => 65,
				'DC' => 3,
				'nombre' => 'Júzcar',
			),
		));
		\DB::table('municipios')->insert(array (
			0 => 
			array (
				'id' => 3001,
				'id_provincia' => 31,
				'cod_municipio' => 65,
				'DC' => 4,
				'nombre' => 'Caparroso',
			),
			1 => 
			array (
				'id' => 3002,
				'id_provincia' => 32,
				'cod_municipio' => 65,
				'DC' => 9,
				'nombre' => 'Punxín',
			),
			2 => 
			array (
				'id' => 3003,
				'id_provincia' => 33,
				'cod_municipio' => 65,
				'DC' => 5,
				'nombre' => 'Sariego',
			),
			3 => 
			array (
				'id' => 3004,
				'id_provincia' => 37,
				'cod_municipio' => 65,
				'DC' => 2,
				'nombre' => 'Cabeza del Caballo',
			),
			4 => 
			array (
				'id' => 3005,
				'id_provincia' => 39,
				'cod_municipio' => 65,
				'DC' => 1,
				'nombre' => 'Rozas de Valdearroyo, Las',
			),
			5 => 
			array (
				'id' => 3006,
				'id_provincia' => 40,
				'cod_municipio' => 65,
				'DC' => 5,
				'nombre' => 'Chañe',
			),
			6 => 
			array (
				'id' => 3007,
				'id_provincia' => 41,
				'cod_municipio' => 65,
				'DC' => 2,
				'nombre' => 'Morón de la Frontera',
			),
			7 => 
			array (
				'id' => 3008,
				'id_provincia' => 42,
				'cod_municipio' => 65,
				'DC' => 7,
				'nombre' => 'Cirujales del Río',
			),
			8 => 
			array (
				'id' => 3009,
				'id_provincia' => 43,
				'cod_municipio' => 65,
				'DC' => 3,
				'nombre' => 'Garcia',
			),
			9 => 
			array (
				'id' => 3010,
				'id_provincia' => 44,
				'cod_municipio' => 65,
				'DC' => 8,
				'nombre' => 'Castejón de Tornos',
			),
			10 => 
			array (
				'id' => 3011,
				'id_provincia' => 45,
				'cod_municipio' => 65,
				'DC' => 1,
				'nombre' => 'Estrella, La',
			),
			11 => 
			array (
				'id' => 3012,
				'id_provincia' => 46,
				'cod_municipio' => 65,
				'DC' => 4,
				'nombre' => 'Beniparrell',
			),
			12 => 
			array (
				'id' => 3013,
				'id_provincia' => 47,
				'cod_municipio' => 65,
				'DC' => 0,
				'nombre' => 'Fresno el Viejo',
			),
			13 => 
			array (
				'id' => 3014,
				'id_provincia' => 48,
				'cod_municipio' => 65,
				'DC' => 6,
				'nombre' => 'Ugao-Miraballes',
			),
			14 => 
			array (
				'id' => 3015,
				'id_provincia' => 49,
				'cod_municipio' => 65,
				'DC' => 9,
				'nombre' => 'Fermoselle',
			),
			15 => 
			array (
				'id' => 3016,
				'id_provincia' => 50,
				'cod_municipio' => 65,
				'DC' => 2,
				'nombre' => 'Cabolafuente',
			),
			16 => 
			array (
				'id' => 3017,
				'id_provincia' => 2,
				'cod_municipio' => 66,
				'DC' => 8,
				'nombre' => 'Recueja, La',
			),
			17 => 
			array (
				'id' => 3018,
				'id_provincia' => 3,
				'cod_municipio' => 66,
				'DC' => 4,
				'nombre' => 'Elda',
			),
			18 => 
			array (
				'id' => 3019,
				'id_provincia' => 4,
				'cod_municipio' => 66,
				'DC' => 9,
				'nombre' => 'Níjar',
			),
			19 => 
			array (
				'id' => 3020,
				'id_provincia' => 5,
				'cod_municipio' => 66,
				'DC' => 2,
				'nombre' => 'Cuevas del Valle',
			),
			20 => 
			array (
				'id' => 3021,
				'id_provincia' => 6,
				'cod_municipio' => 66,
				'DC' => 5,
				'nombre' => 'Higuera de Vargas',
			),
			21 => 
			array (
				'id' => 3022,
				'id_provincia' => 8,
				'cod_municipio' => 66,
				'DC' => 7,
				'nombre' => 'Castellví de Rosanes',
			),
			22 => 
			array (
				'id' => 3023,
				'id_provincia' => 9,
				'cod_municipio' => 66,
				'DC' => 0,
				'nombre' => 'Campolara',
			),
			23 => 
			array (
				'id' => 3024,
				'id_provincia' => 10,
				'cod_municipio' => 66,
				'DC' => 4,
				'nombre' => 'Conquista de la Sierra',
			),
			24 => 
			array (
				'id' => 3025,
				'id_provincia' => 13,
				'cod_municipio' => 66,
				'DC' => 2,
				'nombre' => 'Pozuelo de Calatrava',
			),
			25 => 
			array (
				'id' => 3026,
				'id_provincia' => 14,
				'cod_municipio' => 66,
				'DC' => 7,
				'nombre' => 'Villa del Río',
			),
			26 => 
			array (
				'id' => 3027,
				'id_provincia' => 15,
				'cod_municipio' => 66,
				'DC' => 0,
				'nombre' => 'Pino, O',
			),
			27 => 
			array (
				'id' => 3028,
				'id_provincia' => 16,
				'cod_municipio' => 66,
				'DC' => 3,
				'nombre' => 'Casasimarro',
			),
			28 => 
			array (
				'id' => 3029,
				'id_provincia' => 17,
				'cod_municipio' => 66,
				'DC' => 9,
				'nombre' => 'Figueres',
			),
			29 => 
			array (
				'id' => 3030,
				'id_provincia' => 18,
				'cod_municipio' => 66,
				'DC' => 5,
				'nombre' => 'Deifontes',
			),
			30 => 
			array (
				'id' => 3031,
				'id_provincia' => 19,
				'cod_municipio' => 66,
				'DC' => 8,
				'nombre' => 'Cañizar',
			),
			31 => 
			array (
				'id' => 3032,
				'id_provincia' => 20,
				'cod_municipio' => 66,
				'DC' => 2,
				'nombre' => 'Errezil',
			),
			32 => 
			array (
				'id' => 3033,
				'id_provincia' => 21,
				'cod_municipio' => 66,
				'DC' => 9,
				'nombre' => 'San Silvestre de Guzmán',
			),
			33 => 
			array (
				'id' => 3034,
				'id_provincia' => 22,
				'cod_municipio' => 66,
				'DC' => 4,
				'nombre' => 'Boltaña',
			),
			34 => 
			array (
				'id' => 3035,
				'id_provincia' => 23,
				'cod_municipio' => 66,
				'DC' => 0,
				'nombre' => 'Peal de Becerro',
			),
			35 => 
			array (
				'id' => 3036,
				'id_provincia' => 24,
				'cod_municipio' => 66,
				'DC' => 5,
				'nombre' => 'Destriana',
			),
			36 => 
			array (
				'id' => 3037,
				'id_provincia' => 26,
				'cod_municipio' => 66,
				'DC' => 1,
				'nombre' => 'Galilea',
			),
			37 => 
			array (
				'id' => 3038,
				'id_provincia' => 27,
				'cod_municipio' => 66,
				'DC' => 7,
				'nombre' => 'Viveiro',
			),
			38 => 
			array (
				'id' => 3039,
				'id_provincia' => 28,
				'cod_municipio' => 66,
				'DC' => 3,
				'nombre' => 'Griñón',
			),
			39 => 
			array (
				'id' => 3040,
				'id_provincia' => 29,
				'cod_municipio' => 66,
				'DC' => 6,
				'nombre' => 'Macharaviaya',
			),
			40 => 
			array (
				'id' => 3041,
				'id_provincia' => 31,
				'cod_municipio' => 66,
				'DC' => 7,
				'nombre' => 'Cárcar',
			),
			41 => 
			array (
				'id' => 3042,
				'id_provincia' => 32,
				'cod_municipio' => 66,
				'DC' => 2,
				'nombre' => 'Quintela de Leirado',
			),
			42 => 
			array (
				'id' => 3043,
				'id_provincia' => 33,
				'cod_municipio' => 66,
				'DC' => 8,
				'nombre' => 'Siero',
			),
			43 => 
			array (
				'id' => 3044,
				'id_provincia' => 34,
				'cod_municipio' => 66,
				'DC' => 3,
				'nombre' => 'Cubillas de Cerrato',
			),
			44 => 
			array (
				'id' => 3045,
				'id_provincia' => 39,
				'cod_municipio' => 66,
				'DC' => 4,
				'nombre' => 'Ruente',
			),
			45 => 
			array (
				'id' => 3046,
				'id_provincia' => 41,
				'cod_municipio' => 66,
				'DC' => 5,
				'nombre' => 'Navas de la Concepción, Las',
			),
			46 => 
			array (
				'id' => 3047,
				'id_provincia' => 43,
				'cod_municipio' => 66,
				'DC' => 6,
				'nombre' => 'Garidells, Els',
			),
			47 => 
			array (
				'id' => 3048,
				'id_provincia' => 44,
				'cod_municipio' => 66,
				'DC' => 1,
				'nombre' => 'Castel de Cabra',
			),
			48 => 
			array (
				'id' => 3049,
				'id_provincia' => 45,
				'cod_municipio' => 66,
				'DC' => 4,
				'nombre' => 'Fuensalida',
			),
			49 => 
			array (
				'id' => 3050,
				'id_provincia' => 46,
				'cod_municipio' => 66,
				'DC' => 7,
				'nombre' => 'Benirredrà',
			),
			50 => 
			array (
				'id' => 3051,
				'id_provincia' => 47,
				'cod_municipio' => 66,
				'DC' => 3,
				'nombre' => 'Fuensaldaña',
			),
			51 => 
			array (
				'id' => 3052,
				'id_provincia' => 48,
				'cod_municipio' => 66,
				'DC' => 9,
				'nombre' => 'Morga',
			),
			52 => 
			array (
				'id' => 3053,
				'id_provincia' => 49,
				'cod_municipio' => 66,
				'DC' => 2,
				'nombre' => 'Ferreras de Abajo',
			),
			53 => 
			array (
				'id' => 3054,
				'id_provincia' => 50,
				'cod_municipio' => 66,
				'DC' => 5,
				'nombre' => 'Cadrete',
			),
			54 => 
			array (
				'id' => 3055,
				'id_provincia' => 2,
				'cod_municipio' => 67,
				'DC' => 4,
				'nombre' => 'Riópar',
			),
			55 => 
			array (
				'id' => 3056,
				'id_provincia' => 3,
				'cod_municipio' => 67,
				'DC' => 0,
				'nombre' => 'Facheca',
			),
			56 => 
			array (
				'id' => 3057,
				'id_provincia' => 4,
				'cod_municipio' => 67,
				'DC' => 5,
				'nombre' => 'Ohanes',
			),
			57 => 
			array (
				'id' => 3058,
				'id_provincia' => 5,
				'cod_municipio' => 67,
				'DC' => 8,
				'nombre' => 'Chamartín',
			),
			58 => 
			array (
				'id' => 3059,
				'id_provincia' => 6,
				'cod_municipio' => 67,
				'DC' => 1,
				'nombre' => 'Higuera la Real',
			),
			59 => 
			array (
				'id' => 3060,
				'id_provincia' => 8,
				'cod_municipio' => 67,
				'DC' => 3,
				'nombre' => 'Centelles',
			),
			60 => 
			array (
				'id' => 3061,
				'id_provincia' => 9,
				'cod_municipio' => 67,
				'DC' => 6,
				'nombre' => 'Canicosa de la Sierra',
			),
			61 => 
			array (
				'id' => 3062,
				'id_provincia' => 10,
				'cod_municipio' => 67,
				'DC' => 0,
				'nombre' => 'Coria',
			),
			62 => 
			array (
				'id' => 3063,
				'id_provincia' => 12,
				'cod_municipio' => 67,
				'DC' => 2,
				'nombre' => 'Geldo',
			),
			63 => 
			array (
				'id' => 3064,
				'id_provincia' => 13,
				'cod_municipio' => 67,
				'DC' => 8,
				'nombre' => 'Pozuelos de Calatrava, Los',
			),
			64 => 
			array (
				'id' => 3065,
				'id_provincia' => 14,
				'cod_municipio' => 67,
				'DC' => 3,
				'nombre' => 'Villafranca de Córdoba',
			),
			65 => 
			array (
				'id' => 3066,
				'id_provincia' => 15,
				'cod_municipio' => 67,
				'DC' => 6,
				'nombre' => 'Pobra do Caramiñal, A',
			),
			66 => 
			array (
				'id' => 3067,
				'id_provincia' => 16,
				'cod_municipio' => 67,
				'DC' => 9,
				'nombre' => 'Castejón',
			),
			67 => 
			array (
				'id' => 3068,
				'id_provincia' => 17,
				'cod_municipio' => 67,
				'DC' => 5,
				'nombre' => 'Flaçà',
			),
			68 => 
			array (
				'id' => 3069,
				'id_provincia' => 18,
				'cod_municipio' => 67,
				'DC' => 1,
				'nombre' => 'Diezma',
			),
			69 => 
			array (
				'id' => 3070,
				'id_provincia' => 19,
				'cod_municipio' => 67,
				'DC' => 4,
				'nombre' => 'Cardoso de la Sierra, El',
			),
			70 => 
			array (
				'id' => 3071,
				'id_provincia' => 20,
				'cod_municipio' => 67,
				'DC' => 8,
				'nombre' => 'Errenteria',
			),
			71 => 
			array (
				'id' => 3072,
				'id_provincia' => 21,
				'cod_municipio' => 67,
				'DC' => 5,
				'nombre' => 'Santa Ana la Real',
			),
			72 => 
			array (
				'id' => 3073,
				'id_provincia' => 22,
				'cod_municipio' => 67,
				'DC' => 0,
				'nombre' => 'Bonansa',
			),
			73 => 
			array (
				'id' => 3074,
				'id_provincia' => 23,
				'cod_municipio' => 67,
				'DC' => 6,
				'nombre' => 'Pegalajar',
			),
			74 => 
			array (
				'id' => 3075,
				'id_provincia' => 24,
				'cod_municipio' => 67,
				'DC' => 1,
				'nombre' => 'Encinedo',
			),
			75 => 
			array (
				'id' => 3076,
				'id_provincia' => 25,
				'cod_municipio' => 67,
				'DC' => 4,
				'nombre' => 'Castelldans',
			),
			76 => 
			array (
				'id' => 3077,
				'id_provincia' => 26,
				'cod_municipio' => 67,
				'DC' => 7,
				'nombre' => 'Gallinero de Cameros',
			),
			77 => 
			array (
				'id' => 3078,
				'id_provincia' => 28,
				'cod_municipio' => 67,
				'DC' => 9,
				'nombre' => 'Guadalix de la Sierra',
			),
			78 => 
			array (
				'id' => 3079,
				'id_provincia' => 29,
				'cod_municipio' => 67,
				'DC' => 2,
				'nombre' => 'Málaga',
			),
			79 => 
			array (
				'id' => 3080,
				'id_provincia' => 31,
				'cod_municipio' => 67,
				'DC' => 3,
				'nombre' => 'Carcastillo',
			),
			80 => 
			array (
				'id' => 3081,
				'id_provincia' => 32,
				'cod_municipio' => 67,
				'DC' => 8,
				'nombre' => 'Rairiz de Veiga',
			),
			81 => 
			array (
				'id' => 3082,
				'id_provincia' => 33,
				'cod_municipio' => 67,
				'DC' => 4,
				'nombre' => 'Sobrescobio',
			),
			82 => 
			array (
				'id' => 3083,
				'id_provincia' => 34,
				'cod_municipio' => 67,
				'DC' => 9,
				'nombre' => 'Dehesa de Montejo',
			),
			83 => 
			array (
				'id' => 3084,
				'id_provincia' => 37,
				'cod_municipio' => 67,
				'DC' => 1,
				'nombre' => 'Cabrerizos',
			),
			84 => 
			array (
				'id' => 3085,
				'id_provincia' => 39,
				'cod_municipio' => 67,
				'DC' => 0,
				'nombre' => 'Ruesga',
			),
			85 => 
			array (
				'id' => 3086,
				'id_provincia' => 41,
				'cod_municipio' => 67,
				'DC' => 1,
				'nombre' => 'Olivares',
			),
			86 => 
			array (
				'id' => 3087,
				'id_provincia' => 43,
				'cod_municipio' => 67,
				'DC' => 2,
				'nombre' => 'Ginestar',
			),
			87 => 
			array (
				'id' => 3088,
				'id_provincia' => 44,
				'cod_municipio' => 67,
				'DC' => 7,
				'nombre' => 'Castelnou',
			),
			88 => 
			array (
				'id' => 3089,
				'id_provincia' => 45,
				'cod_municipio' => 67,
				'DC' => 0,
				'nombre' => 'Gálvez',
			),
			89 => 
			array (
				'id' => 3090,
				'id_provincia' => 46,
				'cod_municipio' => 67,
				'DC' => 3,
				'nombre' => 'Benisanó',
			),
			90 => 
			array (
				'id' => 3091,
				'id_provincia' => 47,
				'cod_municipio' => 67,
				'DC' => 9,
				'nombre' => 'Fuente el Sol',
			),
			91 => 
			array (
				'id' => 3092,
				'id_provincia' => 48,
				'cod_municipio' => 67,
				'DC' => 5,
				'nombre' => 'Muxika',
			),
			92 => 
			array (
				'id' => 3093,
				'id_provincia' => 49,
				'cod_municipio' => 67,
				'DC' => 8,
				'nombre' => 'Ferreras de Arriba',
			),
			93 => 
			array (
				'id' => 3094,
				'id_provincia' => 50,
				'cod_municipio' => 67,
				'DC' => 1,
				'nombre' => 'Calatayud',
			),
			94 => 
			array (
				'id' => 3095,
				'id_provincia' => 2,
				'cod_municipio' => 68,
				'DC' => 0,
				'nombre' => 'Robledo',
			),
			95 => 
			array (
				'id' => 3096,
				'id_provincia' => 3,
				'cod_municipio' => 68,
				'DC' => 6,
				'nombre' => 'Famorca',
			),
			96 => 
			array (
				'id' => 3097,
				'id_provincia' => 4,
				'cod_municipio' => 68,
				'DC' => 1,
				'nombre' => 'Olula de Castro',
			),
			97 => 
			array (
				'id' => 3098,
				'id_provincia' => 6,
				'cod_municipio' => 68,
				'DC' => 7,
				'nombre' => 'Hinojosa del Valle',
			),
			98 => 
			array (
				'id' => 3099,
				'id_provincia' => 8,
				'cod_municipio' => 68,
				'DC' => 9,
				'nombre' => 'Cervelló',
			),
			99 => 
			array (
				'id' => 3100,
				'id_provincia' => 9,
				'cod_municipio' => 68,
				'DC' => 2,
				'nombre' => 'Cantabrana',
			),
			100 => 
			array (
				'id' => 3101,
				'id_provincia' => 10,
				'cod_municipio' => 68,
				'DC' => 6,
				'nombre' => 'Cuacos de Yuste',
			),
			101 => 
			array (
				'id' => 3102,
				'id_provincia' => 12,
				'cod_municipio' => 68,
				'DC' => 8,
				'nombre' => 'Herbés',
			),
			102 => 
			array (
				'id' => 3103,
				'id_provincia' => 13,
				'cod_municipio' => 68,
				'DC' => 4,
				'nombre' => 'Puebla de Don Rodrigo',
			),
			103 => 
			array (
				'id' => 3104,
				'id_provincia' => 14,
				'cod_municipio' => 68,
				'DC' => 9,
				'nombre' => 'Villaharta',
			),
			104 => 
			array (
				'id' => 3105,
				'id_provincia' => 15,
				'cod_municipio' => 68,
				'DC' => 2,
				'nombre' => 'Ponteceso',
			),
			105 => 
			array (
				'id' => 3106,
				'id_provincia' => 16,
				'cod_municipio' => 68,
				'DC' => 5,
				'nombre' => 'Castillejo de Iniesta',
			),
			106 => 
			array (
				'id' => 3107,
				'id_provincia' => 17,
				'cod_municipio' => 68,
				'DC' => 1,
				'nombre' => 'Foixà',
			),
			107 => 
			array (
				'id' => 3108,
				'id_provincia' => 18,
				'cod_municipio' => 68,
				'DC' => 7,
				'nombre' => 'Dílar',
			),
			108 => 
			array (
				'id' => 3109,
				'id_provincia' => 20,
				'cod_municipio' => 68,
				'DC' => 4,
				'nombre' => 'Leintz-Gatzaga',
			),
			109 => 
			array (
				'id' => 3110,
				'id_provincia' => 21,
				'cod_municipio' => 68,
				'DC' => 1,
				'nombre' => 'Santa Bárbara de Casa',
			),
			110 => 
			array (
				'id' => 3111,
				'id_provincia' => 22,
				'cod_municipio' => 68,
				'DC' => 6,
				'nombre' => 'Borau',
			),
			111 => 
			array (
				'id' => 3112,
				'id_provincia' => 24,
				'cod_municipio' => 68,
				'DC' => 7,
				'nombre' => 'Ercina, La',
			),
			112 => 
			array (
				'id' => 3113,
				'id_provincia' => 25,
				'cod_municipio' => 68,
				'DC' => 0,
				'nombre' => 'Castellnou de Seana',
			),
			113 => 
			array (
				'id' => 3114,
				'id_provincia' => 26,
				'cod_municipio' => 68,
				'DC' => 3,
				'nombre' => 'Gimileo',
			),
			114 => 
			array (
				'id' => 3115,
				'id_provincia' => 28,
				'cod_municipio' => 68,
				'DC' => 5,
				'nombre' => 'Guadarrama',
			),
			115 => 
			array (
				'id' => 3116,
				'id_provincia' => 29,
				'cod_municipio' => 68,
				'DC' => 8,
				'nombre' => 'Manilva',
			),
			116 => 
			array (
				'id' => 3117,
				'id_provincia' => 31,
				'cod_municipio' => 68,
				'DC' => 9,
				'nombre' => 'Cascante',
			),
			117 => 
			array (
				'id' => 3118,
				'id_provincia' => 32,
				'cod_municipio' => 68,
				'DC' => 4,
				'nombre' => 'Ramirás',
			),
			118 => 
			array (
				'id' => 3119,
				'id_provincia' => 33,
				'cod_municipio' => 68,
				'DC' => 0,
				'nombre' => 'Somiedo',
			),
			119 => 
			array (
				'id' => 3120,
				'id_provincia' => 34,
				'cod_municipio' => 68,
				'DC' => 5,
				'nombre' => 'Dehesa de Romanos',
			),
			120 => 
			array (
				'id' => 3121,
				'id_provincia' => 37,
				'cod_municipio' => 68,
				'DC' => 7,
				'nombre' => 'Cabrillas',
			),
			121 => 
			array (
				'id' => 3122,
				'id_provincia' => 39,
				'cod_municipio' => 68,
				'DC' => 6,
				'nombre' => 'Ruiloba',
			),
			122 => 
			array (
				'id' => 3123,
				'id_provincia' => 40,
				'cod_municipio' => 68,
				'DC' => 0,
				'nombre' => 'Domingo García',
			),
			123 => 
			array (
				'id' => 3124,
				'id_provincia' => 41,
				'cod_municipio' => 68,
				'DC' => 7,
				'nombre' => 'Osuna',
			),
			124 => 
			array (
				'id' => 3125,
				'id_provincia' => 42,
				'cod_municipio' => 68,
				'DC' => 2,
				'nombre' => 'Coscurita',
			),
			125 => 
			array (
				'id' => 3126,
				'id_provincia' => 43,
				'cod_municipio' => 68,
				'DC' => 8,
				'nombre' => 'Godall',
			),
			126 => 
			array (
				'id' => 3127,
				'id_provincia' => 44,
				'cod_municipio' => 68,
				'DC' => 3,
				'nombre' => 'Castelserás',
			),
			127 => 
			array (
				'id' => 3128,
				'id_provincia' => 45,
				'cod_municipio' => 68,
				'DC' => 6,
				'nombre' => 'Garciotum',
			),
			128 => 
			array (
				'id' => 3129,
				'id_provincia' => 46,
				'cod_municipio' => 68,
				'DC' => 9,
				'nombre' => 'Benissoda',
			),
			129 => 
			array (
				'id' => 3130,
				'id_provincia' => 47,
				'cod_municipio' => 68,
				'DC' => 5,
				'nombre' => 'Fuente-Olmedo',
			),
			130 => 
			array (
				'id' => 3131,
				'id_provincia' => 48,
				'cod_municipio' => 68,
				'DC' => 1,
				'nombre' => 'Mundaka',
			),
			131 => 
			array (
				'id' => 3132,
				'id_provincia' => 49,
				'cod_municipio' => 68,
				'DC' => 4,
				'nombre' => 'Ferreruela',
			),
			132 => 
			array (
				'id' => 3133,
				'id_provincia' => 50,
				'cod_municipio' => 68,
				'DC' => 7,
				'nombre' => 'Calatorao',
			),
			133 => 
			array (
				'id' => 3134,
				'id_provincia' => 2,
				'cod_municipio' => 69,
				'DC' => 3,
				'nombre' => 'Roda, La',
			),
			134 => 
			array (
				'id' => 3135,
				'id_provincia' => 3,
				'cod_municipio' => 69,
				'DC' => 9,
				'nombre' => 'Finestrat',
			),
			135 => 
			array (
				'id' => 3136,
				'id_provincia' => 4,
				'cod_municipio' => 69,
				'DC' => 4,
				'nombre' => 'Olula del Río',
			),
			136 => 
			array (
				'id' => 3137,
				'id_provincia' => 5,
				'cod_municipio' => 69,
				'DC' => 7,
				'nombre' => 'Donjimeno',
			),
			137 => 
			array (
				'id' => 3138,
				'id_provincia' => 6,
				'cod_municipio' => 69,
				'DC' => 0,
				'nombre' => 'Hornachos',
			),
			138 => 
			array (
				'id' => 3139,
				'id_provincia' => 8,
				'cod_municipio' => 69,
				'DC' => 2,
				'nombre' => 'Collbató',
			),
			139 => 
			array (
				'id' => 3140,
				'id_provincia' => 10,
				'cod_municipio' => 69,
				'DC' => 9,
				'nombre' => 'Cumbre, La',
			),
			140 => 
			array (
				'id' => 3141,
				'id_provincia' => 12,
				'cod_municipio' => 69,
				'DC' => 1,
				'nombre' => 'Higueras',
			),
			141 => 
			array (
				'id' => 3142,
				'id_provincia' => 13,
				'cod_municipio' => 69,
				'DC' => 7,
				'nombre' => 'Puebla del Príncipe',
			),
			142 => 
			array (
				'id' => 3143,
				'id_provincia' => 14,
				'cod_municipio' => 69,
				'DC' => 2,
				'nombre' => 'Villanueva de Córdoba',
			),
			143 => 
			array (
				'id' => 3144,
				'id_provincia' => 15,
				'cod_municipio' => 69,
				'DC' => 5,
				'nombre' => 'Pontedeume',
			),
			144 => 
			array (
				'id' => 3145,
				'id_provincia' => 17,
				'cod_municipio' => 69,
				'DC' => 4,
				'nombre' => 'Fontanals de Cerdanya',
			),
			145 => 
			array (
				'id' => 3146,
				'id_provincia' => 18,
				'cod_municipio' => 69,
				'DC' => 0,
				'nombre' => 'Dólar',
			),
			146 => 
			array (
				'id' => 3147,
				'id_provincia' => 20,
				'cod_municipio' => 69,
				'DC' => 7,
				'nombre' => 'Donostia-San Sebastián',
			),
			147 => 
			array (
				'id' => 3148,
				'id_provincia' => 21,
				'cod_municipio' => 69,
				'DC' => 4,
				'nombre' => 'Santa Olalla del Cala',
			),
			148 => 
			array (
				'id' => 3149,
				'id_provincia' => 22,
				'cod_municipio' => 69,
				'DC' => 9,
				'nombre' => 'Broto',
			),
			149 => 
			array (
				'id' => 3150,
				'id_provincia' => 23,
				'cod_municipio' => 69,
				'DC' => 5,
				'nombre' => 'Porcuna',
			),
			150 => 
			array (
				'id' => 3151,
				'id_provincia' => 24,
				'cod_municipio' => 69,
				'DC' => 0,
				'nombre' => 'Escobar de Campos',
			),
			151 => 
			array (
				'id' => 3152,
				'id_provincia' => 25,
				'cod_municipio' => 69,
				'DC' => 3,
				'nombre' => 'Castelló de Farfanya',
			),
			152 => 
			array (
				'id' => 3153,
				'id_provincia' => 26,
				'cod_municipio' => 69,
				'DC' => 6,
				'nombre' => 'Grañón',
			),
			153 => 
			array (
				'id' => 3154,
				'id_provincia' => 28,
				'cod_municipio' => 69,
				'DC' => 8,
				'nombre' => 'Hiruela, La',
			),
			154 => 
			array (
				'id' => 3155,
				'id_provincia' => 29,
				'cod_municipio' => 69,
				'DC' => 1,
				'nombre' => 'Marbella',
			),
			155 => 
			array (
				'id' => 3156,
				'id_provincia' => 31,
				'cod_municipio' => 69,
				'DC' => 2,
				'nombre' => 'Cáseda',
			),
			156 => 
			array (
				'id' => 3157,
				'id_provincia' => 32,
				'cod_municipio' => 69,
				'DC' => 7,
				'nombre' => 'Ribadavia',
			),
			157 => 
			array (
				'id' => 3158,
				'id_provincia' => 33,
				'cod_municipio' => 69,
				'DC' => 3,
				'nombre' => 'Soto del Barco',
			),
			158 => 
			array (
				'id' => 3159,
				'id_provincia' => 34,
				'cod_municipio' => 69,
				'DC' => 8,
				'nombre' => 'Dueñas',
			),
			159 => 
			array (
				'id' => 3160,
				'id_provincia' => 37,
				'cod_municipio' => 69,
				'DC' => 0,
				'nombre' => 'Calvarrasa de Abajo',
			),
			160 => 
			array (
				'id' => 3161,
				'id_provincia' => 39,
				'cod_municipio' => 69,
				'DC' => 9,
				'nombre' => 'San Felices de Buelna',
			),
			161 => 
			array (
				'id' => 3162,
				'id_provincia' => 40,
				'cod_municipio' => 69,
				'DC' => 3,
				'nombre' => 'Donhierro',
			),
			162 => 
			array (
				'id' => 3163,
				'id_provincia' => 41,
				'cod_municipio' => 69,
				'DC' => 0,
				'nombre' => 'Palacios y Villafranca, Los',
			),
			163 => 
			array (
				'id' => 3164,
				'id_provincia' => 42,
				'cod_municipio' => 69,
				'DC' => 5,
				'nombre' => 'Covaleda',
			),
			164 => 
			array (
				'id' => 3165,
				'id_provincia' => 43,
				'cod_municipio' => 69,
				'DC' => 1,
				'nombre' => 'Gratallops',
			),
			165 => 
			array (
				'id' => 3166,
				'id_provincia' => 45,
				'cod_municipio' => 69,
				'DC' => 9,
				'nombre' => 'Gerindote',
			),
			166 => 
			array (
				'id' => 3167,
				'id_provincia' => 46,
				'cod_municipio' => 69,
				'DC' => 2,
				'nombre' => 'Benisuera',
			),
			167 => 
			array (
				'id' => 3168,
				'id_provincia' => 47,
				'cod_municipio' => 69,
				'DC' => 8,
				'nombre' => 'Gallegos de Hornija',
			),
			168 => 
			array (
				'id' => 3169,
				'id_provincia' => 48,
				'cod_municipio' => 69,
				'DC' => 4,
				'nombre' => 'Mungia',
			),
			169 => 
			array (
				'id' => 3170,
				'id_provincia' => 49,
				'cod_municipio' => 69,
				'DC' => 7,
				'nombre' => 'Figueruela de Arriba',
			),
			170 => 
			array (
				'id' => 3171,
				'id_provincia' => 50,
				'cod_municipio' => 69,
				'DC' => 0,
				'nombre' => 'Calcena',
			),
			171 => 
			array (
				'id' => 3172,
				'id_provincia' => 2,
				'cod_municipio' => 70,
				'DC' => 7,
				'nombre' => 'Salobre',
			),
			172 => 
			array (
				'id' => 3173,
				'id_provincia' => 3,
				'cod_municipio' => 70,
				'DC' => 3,
				'nombre' => 'Formentera del Segura',
			),
			173 => 
			array (
				'id' => 3174,
				'id_provincia' => 4,
				'cod_municipio' => 70,
				'DC' => 8,
				'nombre' => 'Oria',
			),
			174 => 
			array (
				'id' => 3175,
				'id_provincia' => 5,
				'cod_municipio' => 70,
				'DC' => 1,
				'nombre' => 'Donvidas',
			),
			175 => 
			array (
				'id' => 3176,
				'id_provincia' => 6,
				'cod_municipio' => 70,
				'DC' => 4,
				'nombre' => 'Jerez de los Caballeros',
			),
			176 => 
			array (
				'id' => 3177,
				'id_provincia' => 8,
				'cod_municipio' => 70,
				'DC' => 6,
				'nombre' => 'Collsuspina',
			),
			177 => 
			array (
				'id' => 3178,
				'id_provincia' => 9,
				'cod_municipio' => 70,
				'DC' => 9,
				'nombre' => 'Carazo',
			),
			178 => 
			array (
				'id' => 3179,
				'id_provincia' => 10,
				'cod_municipio' => 70,
				'DC' => 3,
				'nombre' => 'Deleitosa',
			),
			179 => 
			array (
				'id' => 3180,
				'id_provincia' => 12,
				'cod_municipio' => 70,
				'DC' => 5,
				'nombre' => 'Jana, la',
			),
			180 => 
			array (
				'id' => 3181,
				'id_provincia' => 13,
				'cod_municipio' => 70,
				'DC' => 1,
				'nombre' => 'Puerto Lápice',
			),
			181 => 
			array (
				'id' => 3182,
				'id_provincia' => 14,
				'cod_municipio' => 70,
				'DC' => 6,
				'nombre' => 'Villanueva del Duque',
			),
			182 => 
			array (
				'id' => 3183,
				'id_provincia' => 15,
				'cod_municipio' => 70,
				'DC' => 9,
				'nombre' => 'Pontes de García Rodríguez, As',
			),
			183 => 
			array (
				'id' => 3184,
				'id_provincia' => 16,
				'cod_municipio' => 70,
				'DC' => 2,
				'nombre' => 'Castillejo-Sierra',
			),
			184 => 
			array (
				'id' => 3185,
				'id_provincia' => 17,
				'cod_municipio' => 70,
				'DC' => 8,
				'nombre' => 'Fontanilles',
			),
			185 => 
			array (
				'id' => 3186,
				'id_provincia' => 18,
				'cod_municipio' => 70,
				'DC' => 4,
				'nombre' => 'Dúdar',
			),
			186 => 
			array (
				'id' => 3187,
				'id_provincia' => 19,
				'cod_municipio' => 70,
				'DC' => 7,
				'nombre' => 'Casa de Uceda',
			),
			187 => 
			array (
				'id' => 3188,
				'id_provincia' => 20,
				'cod_municipio' => 70,
				'DC' => 1,
				'nombre' => 'Segura',
			),
			188 => 
			array (
				'id' => 3189,
				'id_provincia' => 21,
				'cod_municipio' => 70,
				'DC' => 8,
				'nombre' => 'Trigueros',
			),
			189 => 
			array (
				'id' => 3190,
				'id_provincia' => 23,
				'cod_municipio' => 70,
				'DC' => 9,
				'nombre' => 'Pozo Alcón',
			),
			190 => 
			array (
				'id' => 3191,
				'id_provincia' => 24,
				'cod_municipio' => 70,
				'DC' => 4,
				'nombre' => 'Fabero',
			),
			191 => 
			array (
				'id' => 3192,
				'id_provincia' => 25,
				'cod_municipio' => 70,
				'DC' => 7,
				'nombre' => 'Castellserà',
			),
			192 => 
			array (
				'id' => 3193,
				'id_provincia' => 26,
				'cod_municipio' => 70,
				'DC' => 0,
				'nombre' => 'Grávalos',
			),
			193 => 
			array (
				'id' => 3194,
				'id_provincia' => 28,
				'cod_municipio' => 70,
				'DC' => 2,
				'nombre' => 'Horcajo de la Sierra-Aoslos',
			),
			194 => 
			array (
				'id' => 3195,
				'id_provincia' => 29,
				'cod_municipio' => 70,
				'DC' => 5,
				'nombre' => 'Mijas',
			),
			195 => 
			array (
				'id' => 3196,
				'id_provincia' => 31,
				'cod_municipio' => 70,
				'DC' => 6,
				'nombre' => 'Castejón',
			),
			196 => 
			array (
				'id' => 3197,
				'id_provincia' => 32,
				'cod_municipio' => 70,
				'DC' => 1,
				'nombre' => 'San Xoán de Río',
			),
			197 => 
			array (
				'id' => 3198,
				'id_provincia' => 33,
				'cod_municipio' => 70,
				'DC' => 7,
				'nombre' => 'Tapia de Casariego',
			),
			198 => 
			array (
				'id' => 3199,
				'id_provincia' => 34,
				'cod_municipio' => 70,
				'DC' => 2,
				'nombre' => 'Espinosa de Cerrato',
			),
			199 => 
			array (
				'id' => 3200,
				'id_provincia' => 37,
				'cod_municipio' => 70,
				'DC' => 4,
				'nombre' => 'Calvarrasa de Arriba',
			),
			200 => 
			array (
				'id' => 3201,
				'id_provincia' => 39,
				'cod_municipio' => 70,
				'DC' => 3,
				'nombre' => 'San Miguel de Aguayo',
			),
			201 => 
			array (
				'id' => 3202,
				'id_provincia' => 40,
				'cod_municipio' => 70,
				'DC' => 7,
				'nombre' => 'Duruelo',
			),
			202 => 
			array (
				'id' => 3203,
				'id_provincia' => 41,
				'cod_municipio' => 70,
				'DC' => 4,
				'nombre' => 'Palomares del Río',
			),
			203 => 
			array (
				'id' => 3204,
				'id_provincia' => 42,
				'cod_municipio' => 70,
				'DC' => 9,
				'nombre' => 'Cubilla',
			),
			204 => 
			array (
				'id' => 3205,
				'id_provincia' => 43,
				'cod_municipio' => 70,
				'DC' => 5,
				'nombre' => 'Guiamets, Els',
			),
			205 => 
			array (
				'id' => 3206,
				'id_provincia' => 44,
				'cod_municipio' => 70,
				'DC' => 0,
				'nombre' => 'Castellar, El',
			),
			206 => 
			array (
				'id' => 3207,
				'id_provincia' => 45,
				'cod_municipio' => 70,
				'DC' => 3,
				'nombre' => 'Guadamur',
			),
			207 => 
			array (
				'id' => 3208,
				'id_provincia' => 46,
				'cod_municipio' => 70,
				'DC' => 6,
				'nombre' => 'Bétera',
			),
			208 => 
			array (
				'id' => 3209,
				'id_provincia' => 47,
				'cod_municipio' => 70,
				'DC' => 2,
				'nombre' => 'Gatón de Campos',
			),
			209 => 
			array (
				'id' => 3210,
				'id_provincia' => 48,
				'cod_municipio' => 70,
				'DC' => 8,
				'nombre' => 'Aulesti',
			),
			210 => 
			array (
				'id' => 3211,
				'id_provincia' => 50,
				'cod_municipio' => 70,
				'DC' => 4,
				'nombre' => 'Calmarza',
			),
			211 => 
			array (
				'id' => 3212,
				'id_provincia' => 2,
				'cod_municipio' => 71,
				'DC' => 4,
				'nombre' => 'San Pedro',
			),
			212 => 
			array (
				'id' => 3213,
				'id_provincia' => 3,
				'cod_municipio' => 71,
				'DC' => 0,
				'nombre' => 'Gata de Gorgos',
			),
			213 => 
			array (
				'id' => 3214,
				'id_provincia' => 4,
				'cod_municipio' => 71,
				'DC' => 5,
				'nombre' => 'Padules',
			),
			214 => 
			array (
				'id' => 3215,
				'id_provincia' => 6,
				'cod_municipio' => 71,
				'DC' => 1,
				'nombre' => 'Lapa, La',
			),
			215 => 
			array (
				'id' => 3216,
				'id_provincia' => 8,
				'cod_municipio' => 71,
				'DC' => 3,
				'nombre' => 'Copons',
			),
			216 => 
			array (
				'id' => 3217,
				'id_provincia' => 9,
				'cod_municipio' => 71,
				'DC' => 6,
				'nombre' => 'Carcedo de Bureba',
			),
			217 => 
			array (
				'id' => 3218,
				'id_provincia' => 10,
				'cod_municipio' => 71,
				'DC' => 0,
				'nombre' => 'Descargamaría',
			),
			218 => 
			array (
				'id' => 3219,
				'id_provincia' => 12,
				'cod_municipio' => 71,
				'DC' => 2,
				'nombre' => 'Jérica',
			),
			219 => 
			array (
				'id' => 3220,
				'id_provincia' => 13,
				'cod_municipio' => 71,
				'DC' => 8,
				'nombre' => 'Puertollano',
			),
			220 => 
			array (
				'id' => 3221,
				'id_provincia' => 14,
				'cod_municipio' => 71,
				'DC' => 3,
				'nombre' => 'Villanueva del Rey',
			),
			221 => 
			array (
				'id' => 3222,
				'id_provincia' => 15,
				'cod_municipio' => 71,
				'DC' => 6,
				'nombre' => 'Porto do Son',
			),
			222 => 
			array (
				'id' => 3223,
				'id_provincia' => 16,
				'cod_municipio' => 71,
				'DC' => 9,
				'nombre' => 'Castillo-Albaráñez',
			),
			223 => 
			array (
				'id' => 3224,
				'id_provincia' => 17,
				'cod_municipio' => 71,
				'DC' => 5,
				'nombre' => 'Fontcoberta',
			),
			224 => 
			array (
				'id' => 3225,
				'id_provincia' => 18,
				'cod_municipio' => 71,
				'DC' => 1,
				'nombre' => 'Dúrcal',
			),
			225 => 
			array (
				'id' => 3226,
				'id_provincia' => 19,
				'cod_municipio' => 71,
				'DC' => 4,
				'nombre' => 'Casar, El',
			),
			226 => 
			array (
				'id' => 3227,
				'id_provincia' => 20,
				'cod_municipio' => 71,
				'DC' => 8,
				'nombre' => 'Tolosa',
			),
			227 => 
			array (
				'id' => 3228,
				'id_provincia' => 21,
				'cod_municipio' => 71,
				'DC' => 5,
				'nombre' => 'Valdelarco',
			),
			228 => 
			array (
				'id' => 3229,
				'id_provincia' => 23,
				'cod_municipio' => 71,
				'DC' => 6,
				'nombre' => 'Puente de Génave',
			),
			229 => 
			array (
				'id' => 3230,
				'id_provincia' => 24,
				'cod_municipio' => 71,
				'DC' => 1,
				'nombre' => 'Folgoso de la Ribera',
			),
			230 => 
			array (
				'id' => 3231,
				'id_provincia' => 25,
				'cod_municipio' => 71,
				'DC' => 4,
				'nombre' => 'Cava',
			),
			231 => 
			array (
				'id' => 3232,
				'id_provincia' => 26,
				'cod_municipio' => 71,
				'DC' => 7,
				'nombre' => 'Haro',
			),
			232 => 
			array (
				'id' => 3233,
				'id_provincia' => 28,
				'cod_municipio' => 71,
				'DC' => 9,
				'nombre' => 'Horcajuelo de la Sierra',
			),
			233 => 
			array (
				'id' => 3234,
				'id_provincia' => 29,
				'cod_municipio' => 71,
				'DC' => 2,
				'nombre' => 'Moclinejo',
			),
			234 => 
			array (
				'id' => 3235,
				'id_provincia' => 31,
				'cod_municipio' => 71,
				'DC' => 3,
				'nombre' => 'Castillonuevo',
			),
			235 => 
			array (
				'id' => 3236,
				'id_provincia' => 32,
				'cod_municipio' => 71,
				'DC' => 8,
				'nombre' => 'Riós',
			),
			236 => 
			array (
				'id' => 3237,
				'id_provincia' => 33,
				'cod_municipio' => 71,
				'DC' => 4,
				'nombre' => 'Taramundi',
			),
			237 => 
			array (
				'id' => 3238,
				'id_provincia' => 34,
				'cod_municipio' => 71,
				'DC' => 9,
				'nombre' => 'Espinosa de Villagonzalo',
			),
			238 => 
			array (
				'id' => 3239,
				'id_provincia' => 37,
				'cod_municipio' => 71,
				'DC' => 1,
				'nombre' => 'Calzada de Béjar, La',
			),
			239 => 
			array (
				'id' => 3240,
				'id_provincia' => 39,
				'cod_municipio' => 71,
				'DC' => 0,
				'nombre' => 'San Pedro del Romeral',
			),
			240 => 
			array (
				'id' => 3241,
				'id_provincia' => 40,
				'cod_municipio' => 71,
				'DC' => 4,
				'nombre' => 'Encinas',
			),
			241 => 
			array (
				'id' => 3242,
				'id_provincia' => 41,
				'cod_municipio' => 71,
				'DC' => 1,
				'nombre' => 'Paradas',
			),
			242 => 
			array (
				'id' => 3243,
				'id_provincia' => 42,
				'cod_municipio' => 71,
				'DC' => 6,
				'nombre' => 'Cubo de la Solana',
			),
			243 => 
			array (
				'id' => 3244,
				'id_provincia' => 43,
				'cod_municipio' => 71,
				'DC' => 2,
				'nombre' => 'Horta de Sant Joan',
			),
			244 => 
			array (
				'id' => 3245,
				'id_provincia' => 44,
				'cod_municipio' => 71,
				'DC' => 7,
				'nombre' => 'Castellote',
			),
			245 => 
			array (
				'id' => 3246,
				'id_provincia' => 45,
				'cod_municipio' => 71,
				'DC' => 0,
				'nombre' => 'Guardia, La',
			),
			246 => 
			array (
				'id' => 3247,
				'id_provincia' => 46,
				'cod_municipio' => 71,
				'DC' => 3,
				'nombre' => 'Bicorp',
			),
			247 => 
			array (
				'id' => 3248,
				'id_provincia' => 47,
				'cod_municipio' => 71,
				'DC' => 9,
				'nombre' => 'Geria',
			),
			248 => 
			array (
				'id' => 3249,
				'id_provincia' => 48,
				'cod_municipio' => 71,
				'DC' => 5,
				'nombre' => 'Muskiz',
			),
			249 => 
			array (
				'id' => 3250,
				'id_provincia' => 49,
				'cod_municipio' => 71,
				'DC' => 8,
				'nombre' => 'Fonfría',
			),
			250 => 
			array (
				'id' => 3251,
				'id_provincia' => 50,
				'cod_municipio' => 71,
				'DC' => 1,
				'nombre' => 'Campillo de Aragón',
			),
			251 => 
			array (
				'id' => 3252,
				'id_provincia' => 2,
				'cod_municipio' => 72,
				'DC' => 9,
				'nombre' => 'Socovos',
			),
			252 => 
			array (
				'id' => 3253,
				'id_provincia' => 3,
				'cod_municipio' => 72,
				'DC' => 5,
				'nombre' => 'Gaianes',
			),
			253 => 
			array (
				'id' => 3254,
				'id_provincia' => 4,
				'cod_municipio' => 72,
				'DC' => 0,
				'nombre' => 'Partaloa',
			),
			254 => 
			array (
				'id' => 3255,
				'id_provincia' => 5,
				'cod_municipio' => 72,
				'DC' => 3,
				'nombre' => 'Espinosa de los Caballeros',
			),
			255 => 
			array (
				'id' => 3256,
				'id_provincia' => 6,
				'cod_municipio' => 72,
				'DC' => 6,
				'nombre' => 'Lobón',
			),
			256 => 
			array (
				'id' => 3257,
				'id_provincia' => 8,
				'cod_municipio' => 72,
				'DC' => 8,
				'nombre' => 'Corbera de Llobregat',
			),
			257 => 
			array (
				'id' => 3258,
				'id_provincia' => 9,
				'cod_municipio' => 72,
				'DC' => 1,
				'nombre' => 'Carcedo de Burgos',
			),
			258 => 
			array (
				'id' => 3259,
				'id_provincia' => 10,
				'cod_municipio' => 72,
				'DC' => 5,
				'nombre' => 'Eljas',
			),
			259 => 
			array (
				'id' => 3260,
				'id_provincia' => 12,
				'cod_municipio' => 72,
				'DC' => 7,
				'nombre' => 'Lucena del Cid',
			),
			260 => 
			array (
				'id' => 3261,
				'id_provincia' => 13,
				'cod_municipio' => 72,
				'DC' => 3,
				'nombre' => 'Retuerta del Bullaque',
			),
			261 => 
			array (
				'id' => 3262,
				'id_provincia' => 14,
				'cod_municipio' => 72,
				'DC' => 8,
				'nombre' => 'Villaralto',
			),
			262 => 
			array (
				'id' => 3263,
				'id_provincia' => 15,
				'cod_municipio' => 72,
				'DC' => 1,
				'nombre' => 'Rianxo',
			),
			263 => 
			array (
				'id' => 3264,
				'id_provincia' => 16,
				'cod_municipio' => 72,
				'DC' => 4,
				'nombre' => 'Castillo de Garcimuñoz',
			),
			264 => 
			array (
				'id' => 3265,
				'id_provincia' => 18,
				'cod_municipio' => 72,
				'DC' => 6,
				'nombre' => 'Escúzar',
			),
			265 => 
			array (
				'id' => 3266,
				'id_provincia' => 20,
				'cod_municipio' => 72,
				'DC' => 3,
				'nombre' => 'Urnieta',
			),
			266 => 
			array (
				'id' => 3267,
				'id_provincia' => 21,
				'cod_municipio' => 72,
				'DC' => 0,
				'nombre' => 'Valverde del Camino',
			),
			267 => 
			array (
				'id' => 3268,
				'id_provincia' => 22,
				'cod_municipio' => 72,
				'DC' => 5,
				'nombre' => 'Caldearenas',
			),
			268 => 
			array (
				'id' => 3269,
				'id_provincia' => 23,
				'cod_municipio' => 72,
				'DC' => 1,
				'nombre' => 'Puerta de Segura, La',
			),
			269 => 
			array (
				'id' => 3270,
				'id_provincia' => 25,
				'cod_municipio' => 72,
				'DC' => 9,
				'nombre' => 'Cervera',
			),
			270 => 
			array (
				'id' => 3271,
				'id_provincia' => 26,
				'cod_municipio' => 72,
				'DC' => 2,
				'nombre' => 'Herce',
			),
			271 => 
			array (
				'id' => 3272,
				'id_provincia' => 28,
				'cod_municipio' => 72,
				'DC' => 4,
				'nombre' => 'Hoyo de Manzanares',
			),
			272 => 
			array (
				'id' => 3273,
				'id_provincia' => 29,
				'cod_municipio' => 72,
				'DC' => 7,
				'nombre' => 'Mollina',
			),
			273 => 
			array (
				'id' => 3274,
				'id_provincia' => 31,
				'cod_municipio' => 72,
				'DC' => 8,
				'nombre' => 'Cintruénigo',
			),
			274 => 
			array (
				'id' => 3275,
				'id_provincia' => 32,
				'cod_municipio' => 72,
				'DC' => 3,
				'nombre' => 'Rúa, A',
			),
			275 => 
			array (
				'id' => 3276,
				'id_provincia' => 33,
				'cod_municipio' => 72,
				'DC' => 9,
				'nombre' => 'Teverga',
			),
			276 => 
			array (
				'id' => 3277,
				'id_provincia' => 34,
				'cod_municipio' => 72,
				'DC' => 4,
				'nombre' => 'Frechilla',
			),
			277 => 
			array (
				'id' => 3278,
				'id_provincia' => 37,
				'cod_municipio' => 72,
				'DC' => 6,
				'nombre' => 'Calzada de Don Diego',
			),
			278 => 
			array (
				'id' => 3279,
				'id_provincia' => 39,
				'cod_municipio' => 72,
				'DC' => 5,
				'nombre' => 'San Roque de Riomiera',
			),
			279 => 
			array (
				'id' => 3280,
				'id_provincia' => 40,
				'cod_municipio' => 72,
				'DC' => 9,
				'nombre' => 'Encinillas',
			),
			280 => 
			array (
				'id' => 3281,
				'id_provincia' => 41,
				'cod_municipio' => 72,
				'DC' => 6,
				'nombre' => 'Pedrera',
			),
			281 => 
			array (
				'id' => 3282,
				'id_provincia' => 43,
				'cod_municipio' => 72,
				'DC' => 7,
				'nombre' => 'Lloar, El',
			),
			282 => 
			array (
				'id' => 3283,
				'id_provincia' => 45,
				'cod_municipio' => 72,
				'DC' => 5,
				'nombre' => 'Herencias, Las',
			),
			283 => 
			array (
				'id' => 3284,
				'id_provincia' => 46,
				'cod_municipio' => 72,
				'DC' => 8,
				'nombre' => 'Bocairent',
			),
			284 => 
			array (
				'id' => 3285,
				'id_provincia' => 48,
				'cod_municipio' => 72,
				'DC' => 0,
				'nombre' => 'Otxandio',
			),
			285 => 
			array (
				'id' => 3286,
				'id_provincia' => 50,
				'cod_municipio' => 72,
				'DC' => 6,
				'nombre' => 'Carenas',
			),
			286 => 
			array (
				'id' => 3287,
				'id_provincia' => 2,
				'cod_municipio' => 73,
				'DC' => 5,
				'nombre' => 'Tarazona de la Mancha',
			),
			287 => 
			array (
				'id' => 3288,
				'id_provincia' => 3,
				'cod_municipio' => 73,
				'DC' => 1,
				'nombre' => 'Gorga',
			),
			288 => 
			array (
				'id' => 3289,
				'id_provincia' => 4,
				'cod_municipio' => 73,
				'DC' => 6,
				'nombre' => 'Paterna del Río',
			),
			289 => 
			array (
				'id' => 3290,
				'id_provincia' => 5,
				'cod_municipio' => 73,
				'DC' => 9,
				'nombre' => 'Flores de Ávila',
			),
			290 => 
			array (
				'id' => 3291,
				'id_provincia' => 6,
				'cod_municipio' => 73,
				'DC' => 2,
				'nombre' => 'Llera',
			),
			291 => 
			array (
				'id' => 3292,
				'id_provincia' => 8,
				'cod_municipio' => 73,
				'DC' => 4,
				'nombre' => 'Cornellà de Llobregat',
			),
			292 => 
			array (
				'id' => 3293,
				'id_provincia' => 9,
				'cod_municipio' => 73,
				'DC' => 7,
				'nombre' => 'Cardeñadijo',
			),
			293 => 
			array (
				'id' => 3294,
				'id_provincia' => 10,
				'cod_municipio' => 73,
				'DC' => 1,
				'nombre' => 'Escurial',
			),
			294 => 
			array (
				'id' => 3295,
				'id_provincia' => 12,
				'cod_municipio' => 73,
				'DC' => 3,
				'nombre' => 'Ludiente',
			),
			295 => 
			array (
				'id' => 3296,
				'id_provincia' => 13,
				'cod_municipio' => 73,
				'DC' => 9,
				'nombre' => 'Saceruela',
			),
			296 => 
			array (
				'id' => 3297,
				'id_provincia' => 14,
				'cod_municipio' => 73,
				'DC' => 4,
				'nombre' => 'Villaviciosa de Córdoba',
			),
			297 => 
			array (
				'id' => 3298,
				'id_provincia' => 15,
				'cod_municipio' => 73,
				'DC' => 7,
				'nombre' => 'Ribeira',
			),
			298 => 
			array (
				'id' => 3299,
				'id_provincia' => 16,
				'cod_municipio' => 73,
				'DC' => 0,
				'nombre' => 'Cervera del Llano',
			),
			299 => 
			array (
				'id' => 3300,
				'id_provincia' => 17,
				'cod_municipio' => 73,
				'DC' => 6,
				'nombre' => 'Fornells de la Selva',
			),
			300 => 
			array (
				'id' => 3301,
				'id_provincia' => 19,
				'cod_municipio' => 73,
				'DC' => 5,
				'nombre' => 'Casas de San Galindo',
			),
			301 => 
			array (
				'id' => 3302,
				'id_provincia' => 20,
				'cod_municipio' => 73,
				'DC' => 9,
				'nombre' => 'Usurbil',
			),
			302 => 
			array (
				'id' => 3303,
				'id_provincia' => 21,
				'cod_municipio' => 73,
				'DC' => 6,
				'nombre' => 'Villablanca',
			),
			303 => 
			array (
				'id' => 3304,
				'id_provincia' => 23,
				'cod_municipio' => 73,
				'DC' => 7,
				'nombre' => 'Quesada',
			),
			304 => 
			array (
				'id' => 3305,
				'id_provincia' => 24,
				'cod_municipio' => 73,
				'DC' => 2,
				'nombre' => 'Fresno de la Vega',
			),
			305 => 
			array (
				'id' => 3306,
				'id_provincia' => 25,
				'cod_municipio' => 73,
				'DC' => 5,
				'nombre' => 'Cervià de les Garrigues',
			),
			306 => 
			array (
				'id' => 3307,
				'id_provincia' => 26,
				'cod_municipio' => 73,
				'DC' => 8,
				'nombre' => 'Herramélluri',
			),
			307 => 
			array (
				'id' => 3308,
				'id_provincia' => 28,
				'cod_municipio' => 73,
				'DC' => 0,
				'nombre' => 'Humanes de Madrid',
			),
			308 => 
			array (
				'id' => 3309,
				'id_provincia' => 29,
				'cod_municipio' => 73,
				'DC' => 3,
				'nombre' => 'Monda',
			),
			309 => 
			array (
				'id' => 3310,
				'id_provincia' => 31,
				'cod_municipio' => 73,
				'DC' => 4,
				'nombre' => 'Ziordia',
			),
			310 => 
			array (
				'id' => 3311,
				'id_provincia' => 32,
				'cod_municipio' => 73,
				'DC' => 9,
				'nombre' => 'Rubiá',
			),
			311 => 
			array (
				'id' => 3312,
				'id_provincia' => 33,
				'cod_municipio' => 73,
				'DC' => 5,
				'nombre' => 'Tineo',
			),
			312 => 
			array (
				'id' => 3313,
				'id_provincia' => 34,
				'cod_municipio' => 73,
				'DC' => 0,
				'nombre' => 'Fresno del Río',
			),
			313 => 
			array (
				'id' => 3314,
				'id_provincia' => 37,
				'cod_municipio' => 73,
				'DC' => 2,
				'nombre' => 'Calzada de Valdunciel',
			),
			314 => 
			array (
				'id' => 3315,
				'id_provincia' => 39,
				'cod_municipio' => 73,
				'DC' => 1,
				'nombre' => 'Santa Cruz de Bezana',
			),
			315 => 
			array (
				'id' => 3316,
				'id_provincia' => 40,
				'cod_municipio' => 73,
				'DC' => 5,
				'nombre' => 'Escalona del Prado',
			),
			316 => 
			array (
				'id' => 3317,
				'id_provincia' => 41,
				'cod_municipio' => 73,
				'DC' => 2,
				'nombre' => 'Pedroso, El',
			),
			317 => 
			array (
				'id' => 3318,
				'id_provincia' => 42,
				'cod_municipio' => 73,
				'DC' => 7,
				'nombre' => 'Cueva de Ágreda',
			),
			318 => 
			array (
				'id' => 3319,
				'id_provincia' => 43,
				'cod_municipio' => 73,
				'DC' => 3,
				'nombre' => 'Llorac',
			),
			319 => 
			array (
				'id' => 3320,
				'id_provincia' => 45,
				'cod_municipio' => 73,
				'DC' => 1,
				'nombre' => 'Herreruela de Oropesa',
			),
			320 => 
			array (
				'id' => 3321,
				'id_provincia' => 46,
				'cod_municipio' => 73,
				'DC' => 4,
				'nombre' => 'Bolbaite',
			),
			321 => 
			array (
				'id' => 3322,
				'id_provincia' => 47,
				'cod_municipio' => 73,
				'DC' => 0,
				'nombre' => 'Herrín de Campos',
			),
			322 => 
			array (
				'id' => 3323,
				'id_provincia' => 48,
				'cod_municipio' => 73,
				'DC' => 6,
				'nombre' => 'Ondarroa',
			),
			323 => 
			array (
				'id' => 3324,
				'id_provincia' => 50,
				'cod_municipio' => 73,
				'DC' => 2,
				'nombre' => 'Cariñena',
			),
			324 => 
			array (
				'id' => 3325,
				'id_provincia' => 2,
				'cod_municipio' => 74,
				'DC' => 0,
				'nombre' => 'Tobarra',
			),
			325 => 
			array (
				'id' => 3326,
				'id_provincia' => 3,
				'cod_municipio' => 74,
				'DC' => 6,
				'nombre' => 'Granja de Rocamora',
			),
			326 => 
			array (
				'id' => 3327,
				'id_provincia' => 4,
				'cod_municipio' => 74,
				'DC' => 1,
				'nombre' => 'Pechina',
			),
			327 => 
			array (
				'id' => 3328,
				'id_provincia' => 5,
				'cod_municipio' => 74,
				'DC' => 4,
				'nombre' => 'Fontiveros',
			),
			328 => 
			array (
				'id' => 3329,
				'id_provincia' => 6,
				'cod_municipio' => 74,
				'DC' => 7,
				'nombre' => 'Llerena',
			),
			329 => 
			array (
				'id' => 3330,
				'id_provincia' => 8,
				'cod_municipio' => 74,
				'DC' => 9,
				'nombre' => 'Cubelles',
			),
			330 => 
			array (
				'id' => 3331,
				'id_provincia' => 9,
				'cod_municipio' => 74,
				'DC' => 2,
				'nombre' => 'Cardeñajimeno',
			),
			331 => 
			array (
				'id' => 3332,
				'id_provincia' => 12,
				'cod_municipio' => 74,
				'DC' => 8,
				'nombre' => 'Llosa, la',
			),
			332 => 
			array (
				'id' => 3333,
				'id_provincia' => 13,
				'cod_municipio' => 74,
				'DC' => 4,
				'nombre' => 'San Carlos del Valle',
			),
			333 => 
			array (
				'id' => 3334,
				'id_provincia' => 14,
				'cod_municipio' => 74,
				'DC' => 9,
				'nombre' => 'Viso, El',
			),
			334 => 
			array (
				'id' => 3335,
				'id_provincia' => 15,
				'cod_municipio' => 74,
				'DC' => 2,
				'nombre' => 'Rois',
			),
			335 => 
			array (
				'id' => 3336,
				'id_provincia' => 16,
				'cod_municipio' => 74,
				'DC' => 5,
				'nombre' => 'Cierva, La',
			),
			336 => 
			array (
				'id' => 3337,
				'id_provincia' => 17,
				'cod_municipio' => 74,
				'DC' => 1,
				'nombre' => 'Fortià',
			),
			337 => 
			array (
				'id' => 3338,
				'id_provincia' => 18,
				'cod_municipio' => 74,
				'DC' => 7,
				'nombre' => 'Ferreira',
			),
			338 => 
			array (
				'id' => 3339,
				'id_provincia' => 19,
				'cod_municipio' => 74,
				'DC' => 0,
				'nombre' => 'Caspueñas',
			),
			339 => 
			array (
				'id' => 3340,
				'id_provincia' => 20,
				'cod_municipio' => 74,
				'DC' => 4,
				'nombre' => 'Bergara',
			),
			340 => 
			array (
				'id' => 3341,
				'id_provincia' => 21,
				'cod_municipio' => 74,
				'DC' => 1,
				'nombre' => 'Villalba del Alcor',
			),
			341 => 
			array (
				'id' => 3342,
				'id_provincia' => 22,
				'cod_municipio' => 74,
				'DC' => 6,
				'nombre' => 'Campo',
			),
			342 => 
			array (
				'id' => 3343,
				'id_provincia' => 23,
				'cod_municipio' => 74,
				'DC' => 2,
				'nombre' => 'Rus',
			),
			343 => 
			array (
				'id' => 3344,
				'id_provincia' => 24,
				'cod_municipio' => 74,
				'DC' => 7,
				'nombre' => 'Fuentes de Carbajal',
			),
			344 => 
			array (
				'id' => 3345,
				'id_provincia' => 25,
				'cod_municipio' => 74,
				'DC' => 0,
				'nombre' => 'Ciutadilla',
			),
			345 => 
			array (
				'id' => 3346,
				'id_provincia' => 26,
				'cod_municipio' => 74,
				'DC' => 3,
				'nombre' => 'Hervías',
			),
			346 => 
			array (
				'id' => 3347,
				'id_provincia' => 28,
				'cod_municipio' => 74,
				'DC' => 5,
				'nombre' => 'Leganés',
			),
			347 => 
			array (
				'id' => 3348,
				'id_provincia' => 29,
				'cod_municipio' => 74,
				'DC' => 8,
				'nombre' => 'Montejaque',
			),
			348 => 
			array (
				'id' => 3349,
				'id_provincia' => 31,
				'cod_municipio' => 74,
				'DC' => 9,
				'nombre' => 'Cirauqui/Zirauki',
			),
			349 => 
			array (
				'id' => 3350,
				'id_provincia' => 32,
				'cod_municipio' => 74,
				'DC' => 4,
				'nombre' => 'San Amaro',
			),
			350 => 
			array (
				'id' => 3351,
				'id_provincia' => 33,
				'cod_municipio' => 74,
				'DC' => 0,
				'nombre' => 'Vegadeo',
			),
			351 => 
			array (
				'id' => 3352,
				'id_provincia' => 34,
				'cod_municipio' => 74,
				'DC' => 5,
				'nombre' => 'Frómista',
			),
			352 => 
			array (
				'id' => 3353,
				'id_provincia' => 37,
				'cod_municipio' => 74,
				'DC' => 7,
				'nombre' => 'Campillo de Azaba',
			),
			353 => 
			array (
				'id' => 3354,
				'id_provincia' => 39,
				'cod_municipio' => 74,
				'DC' => 6,
				'nombre' => 'Santa María de Cayón',
			),
			354 => 
			array (
				'id' => 3355,
				'id_provincia' => 40,
				'cod_municipio' => 74,
				'DC' => 0,
				'nombre' => 'Escarabajosa de Cabezas',
			),
			355 => 
			array (
				'id' => 3356,
				'id_provincia' => 41,
				'cod_municipio' => 74,
				'DC' => 7,
				'nombre' => 'Peñaflor',
			),
			356 => 
			array (
				'id' => 3357,
				'id_provincia' => 43,
				'cod_municipio' => 74,
				'DC' => 8,
				'nombre' => 'Llorenç del Penedès',
			),
			357 => 
			array (
				'id' => 3358,
				'id_provincia' => 44,
				'cod_municipio' => 74,
				'DC' => 3,
				'nombre' => 'Cedrillas',
			),
			358 => 
			array (
				'id' => 3359,
				'id_provincia' => 45,
				'cod_municipio' => 74,
				'DC' => 6,
				'nombre' => 'Hinojosa de San Vicente',
			),
			359 => 
			array (
				'id' => 3360,
				'id_provincia' => 46,
				'cod_municipio' => 74,
				'DC' => 9,
				'nombre' => 'Bonrepòs i Mirambell',
			),
			360 => 
			array (
				'id' => 3361,
				'id_provincia' => 47,
				'cod_municipio' => 74,
				'DC' => 5,
				'nombre' => 'Hornillos de Eresma',
			),
			361 => 
			array (
				'id' => 3362,
				'id_provincia' => 48,
				'cod_municipio' => 74,
				'DC' => 1,
				'nombre' => 'Urduña/Orduña',
			),
			362 => 
			array (
				'id' => 3363,
				'id_provincia' => 50,
				'cod_municipio' => 74,
				'DC' => 7,
				'nombre' => 'Caspe',
			),
			363 => 
			array (
				'id' => 3364,
				'id_provincia' => 2,
				'cod_municipio' => 75,
				'DC' => 3,
				'nombre' => 'Valdeganga',
			),
			364 => 
			array (
				'id' => 3365,
				'id_provincia' => 3,
				'cod_municipio' => 75,
				'DC' => 9,
				'nombre' => 'Castell de Guadalest, el',
			),
			365 => 
			array (
				'id' => 3366,
				'id_provincia' => 4,
				'cod_municipio' => 75,
				'DC' => 4,
				'nombre' => 'Pulpí',
			),
			366 => 
			array (
				'id' => 3367,
				'id_provincia' => 5,
				'cod_municipio' => 75,
				'DC' => 7,
				'nombre' => 'Fresnedilla',
			),
			367 => 
			array (
				'id' => 3368,
				'id_provincia' => 6,
				'cod_municipio' => 75,
				'DC' => 0,
				'nombre' => 'Magacela',
			),
			368 => 
			array (
				'id' => 3369,
				'id_provincia' => 8,
				'cod_municipio' => 75,
				'DC' => 2,
				'nombre' => 'Dosrius',
			),
			369 => 
			array (
				'id' => 3370,
				'id_provincia' => 9,
				'cod_municipio' => 75,
				'DC' => 5,
				'nombre' => 'Cardeñuela Riopico',
			),
			370 => 
			array (
				'id' => 3371,
				'id_provincia' => 10,
				'cod_municipio' => 75,
				'DC' => 9,
				'nombre' => 'Fresnedoso de Ibor',
			),
			371 => 
			array (
				'id' => 3372,
				'id_provincia' => 12,
				'cod_municipio' => 75,
				'DC' => 1,
				'nombre' => 'Mata de Morella, la',
			),
			372 => 
			array (
				'id' => 3373,
				'id_provincia' => 13,
				'cod_municipio' => 75,
				'DC' => 7,
				'nombre' => 'San Lorenzo de Calatrava',
			),
			373 => 
			array (
				'id' => 3374,
				'id_provincia' => 14,
				'cod_municipio' => 75,
				'DC' => 2,
				'nombre' => 'Zuheros',
			),
			374 => 
			array (
				'id' => 3375,
				'id_provincia' => 15,
				'cod_municipio' => 75,
				'DC' => 5,
				'nombre' => 'Sada',
			),
			375 => 
			array (
				'id' => 3376,
				'id_provincia' => 17,
				'cod_municipio' => 75,
				'DC' => 4,
				'nombre' => 'Garrigàs',
			),
			376 => 
			array (
				'id' => 3377,
				'id_provincia' => 19,
				'cod_municipio' => 75,
				'DC' => 3,
				'nombre' => 'Castejón de Henares',
			),
			377 => 
			array (
				'id' => 3378,
				'id_provincia' => 20,
				'cod_municipio' => 75,
				'DC' => 7,
				'nombre' => 'Villabona',
			),
			378 => 
			array (
				'id' => 3379,
				'id_provincia' => 21,
				'cod_municipio' => 75,
				'DC' => 4,
				'nombre' => 'Villanueva de las Cruces',
			),
			379 => 
			array (
				'id' => 3380,
				'id_provincia' => 22,
				'cod_municipio' => 75,
				'DC' => 9,
				'nombre' => 'Camporrélls',
			),
			380 => 
			array (
				'id' => 3381,
				'id_provincia' => 23,
				'cod_municipio' => 75,
				'DC' => 5,
				'nombre' => 'Sabiote',
			),
			381 => 
			array (
				'id' => 3382,
				'id_provincia' => 25,
				'cod_municipio' => 75,
				'DC' => 3,
				'nombre' => 'Clariana de Cardener',
			),
			382 => 
			array (
				'id' => 3383,
				'id_provincia' => 26,
				'cod_municipio' => 75,
				'DC' => 6,
				'nombre' => 'Hormilla',
			),
			383 => 
			array (
				'id' => 3384,
				'id_provincia' => 28,
				'cod_municipio' => 75,
				'DC' => 8,
				'nombre' => 'Loeches',
			),
			384 => 
			array (
				'id' => 3385,
				'id_provincia' => 29,
				'cod_municipio' => 75,
				'DC' => 1,
				'nombre' => 'Nerja',
			),
			385 => 
			array (
				'id' => 3386,
				'id_provincia' => 31,
				'cod_municipio' => 75,
				'DC' => 2,
				'nombre' => 'Ciriza/Ziritza',
			),
			386 => 
			array (
				'id' => 3387,
				'id_provincia' => 32,
				'cod_municipio' => 75,
				'DC' => 7,
				'nombre' => 'San Cibrao das Viñas',
			),
			387 => 
			array (
				'id' => 3388,
				'id_provincia' => 33,
				'cod_municipio' => 75,
				'DC' => 3,
				'nombre' => 'Villanueva de Oscos',
			),
			388 => 
			array (
				'id' => 3389,
				'id_provincia' => 39,
				'cod_municipio' => 75,
				'DC' => 9,
				'nombre' => 'Santander',
			),
			389 => 
			array (
				'id' => 3390,
				'id_provincia' => 40,
				'cod_municipio' => 75,
				'DC' => 3,
				'nombre' => 'Escobar de Polendos',
			),
			390 => 
			array (
				'id' => 3391,
				'id_provincia' => 41,
				'cod_municipio' => 75,
				'DC' => 0,
				'nombre' => 'Pilas',
			),
			391 => 
			array (
				'id' => 3392,
				'id_provincia' => 42,
				'cod_municipio' => 75,
				'DC' => 5,
				'nombre' => 'Dévanos',
			),
			392 => 
			array (
				'id' => 3393,
				'id_provincia' => 43,
				'cod_municipio' => 75,
				'DC' => 1,
				'nombre' => 'Margalef',
			),
			393 => 
			array (
				'id' => 3394,
				'id_provincia' => 44,
				'cod_municipio' => 75,
				'DC' => 6,
				'nombre' => 'Celadas',
			),
			394 => 
			array (
				'id' => 3395,
				'id_provincia' => 45,
				'cod_municipio' => 75,
				'DC' => 9,
				'nombre' => 'Hontanar',
			),
			395 => 
			array (
				'id' => 3396,
				'id_provincia' => 46,
				'cod_municipio' => 75,
				'DC' => 2,
				'nombre' => 'Bufali',
			),
			396 => 
			array (
				'id' => 3397,
				'id_provincia' => 47,
				'cod_municipio' => 75,
				'DC' => 8,
				'nombre' => 'Íscar',
			),
			397 => 
			array (
				'id' => 3398,
				'id_provincia' => 48,
				'cod_municipio' => 75,
				'DC' => 4,
				'nombre' => 'Orozko',
			),
			398 => 
			array (
				'id' => 3399,
				'id_provincia' => 49,
				'cod_municipio' => 75,
				'DC' => 7,
				'nombre' => 'Fresno de la Polvorosa',
			),
			399 => 
			array (
				'id' => 3400,
				'id_provincia' => 50,
				'cod_municipio' => 75,
				'DC' => 0,
				'nombre' => 'Castejón de Alarba',
			),
			400 => 
			array (
				'id' => 3401,
				'id_provincia' => 2,
				'cod_municipio' => 76,
				'DC' => 6,
				'nombre' => 'Vianos',
			),
			401 => 
			array (
				'id' => 3402,
				'id_provincia' => 3,
				'cod_municipio' => 76,
				'DC' => 2,
				'nombre' => 'Guardamar del Segura',
			),
			402 => 
			array (
				'id' => 3403,
				'id_provincia' => 4,
				'cod_municipio' => 76,
				'DC' => 7,
				'nombre' => 'Purchena',
			),
			403 => 
			array (
				'id' => 3404,
				'id_provincia' => 5,
				'cod_municipio' => 76,
				'DC' => 0,
				'nombre' => 'Fresno, El',
			),
			404 => 
			array (
				'id' => 3405,
				'id_provincia' => 6,
				'cod_municipio' => 76,
				'DC' => 3,
				'nombre' => 'Maguilla',
			),
			405 => 
			array (
				'id' => 3406,
				'id_provincia' => 8,
				'cod_municipio' => 76,
				'DC' => 5,
				'nombre' => 'Esparreguera',
			),
			406 => 
			array (
				'id' => 3407,
				'id_provincia' => 9,
				'cod_municipio' => 76,
				'DC' => 8,
				'nombre' => 'Carrias',
			),
			407 => 
			array (
				'id' => 3408,
				'id_provincia' => 10,
				'cod_municipio' => 76,
				'DC' => 2,
				'nombre' => 'Galisteo',
			),
			408 => 
			array (
				'id' => 3409,
				'id_provincia' => 12,
				'cod_municipio' => 76,
				'DC' => 4,
				'nombre' => 'Matet',
			),
			409 => 
			array (
				'id' => 3410,
				'id_provincia' => 13,
				'cod_municipio' => 76,
				'DC' => 0,
				'nombre' => 'Santa Cruz de los Cáñamos',
			),
			410 => 
			array (
				'id' => 3411,
				'id_provincia' => 15,
				'cod_municipio' => 76,
				'DC' => 8,
				'nombre' => 'San Sadurniño',
			),
			411 => 
			array (
				'id' => 3412,
				'id_provincia' => 17,
				'cod_municipio' => 76,
				'DC' => 7,
				'nombre' => 'Garrigoles',
			),
			412 => 
			array (
				'id' => 3413,
				'id_provincia' => 18,
				'cod_municipio' => 76,
				'DC' => 3,
				'nombre' => 'Fonelas',
			),
			413 => 
			array (
				'id' => 3414,
				'id_provincia' => 19,
				'cod_municipio' => 76,
				'DC' => 6,
				'nombre' => 'Castellar de la Muela',
			),
			414 => 
			array (
				'id' => 3415,
				'id_provincia' => 20,
				'cod_municipio' => 76,
				'DC' => 0,
				'nombre' => 'Ordizia',
			),
			415 => 
			array (
				'id' => 3416,
				'id_provincia' => 21,
				'cod_municipio' => 76,
				'DC' => 7,
				'nombre' => 'Villanueva de los Castillejos',
			),
			416 => 
			array (
				'id' => 3417,
				'id_provincia' => 22,
				'cod_municipio' => 76,
				'DC' => 2,
				'nombre' => 'Canal de Berdún',
			),
			417 => 
			array (
				'id' => 3418,
				'id_provincia' => 23,
				'cod_municipio' => 76,
				'DC' => 8,
				'nombre' => 'Santa Elena',
			),
			418 => 
			array (
				'id' => 3419,
				'id_provincia' => 24,
				'cod_municipio' => 76,
				'DC' => 3,
				'nombre' => 'Garrafe de Torío',
			),
			419 => 
			array (
				'id' => 3420,
				'id_provincia' => 25,
				'cod_municipio' => 76,
				'DC' => 6,
				'nombre' => 'Cogul, El',
			),
			420 => 
			array (
				'id' => 3421,
				'id_provincia' => 26,
				'cod_municipio' => 76,
				'DC' => 9,
				'nombre' => 'Hormilleja',
			),
			421 => 
			array (
				'id' => 3422,
				'id_provincia' => 28,
				'cod_municipio' => 76,
				'DC' => 1,
				'nombre' => 'Lozoya',
			),
			422 => 
			array (
				'id' => 3423,
				'id_provincia' => 29,
				'cod_municipio' => 76,
				'DC' => 4,
				'nombre' => 'Ojén',
			),
			423 => 
			array (
				'id' => 3424,
				'id_provincia' => 31,
				'cod_municipio' => 76,
				'DC' => 5,
				'nombre' => 'Cizur',
			),
			424 => 
			array (
				'id' => 3425,
				'id_provincia' => 32,
				'cod_municipio' => 76,
				'DC' => 0,
				'nombre' => 'San Cristovo de Cea',
			),
			425 => 
			array (
				'id' => 3426,
				'id_provincia' => 33,
				'cod_municipio' => 76,
				'DC' => 6,
				'nombre' => 'Villaviciosa',
			),
			426 => 
			array (
				'id' => 3427,
				'id_provincia' => 34,
				'cod_municipio' => 76,
				'DC' => 1,
				'nombre' => 'Fuentes de Nava',
			),
			427 => 
			array (
				'id' => 3428,
				'id_provincia' => 39,
				'cod_municipio' => 76,
				'DC' => 2,
				'nombre' => 'Santillana del Mar',
			),
			428 => 
			array (
				'id' => 3429,
				'id_provincia' => 40,
				'cod_municipio' => 76,
				'DC' => 6,
				'nombre' => 'Espinar, El',
			),
			429 => 
			array (
				'id' => 3430,
				'id_provincia' => 41,
				'cod_municipio' => 76,
				'DC' => 3,
				'nombre' => 'Pruna',
			),
			430 => 
			array (
				'id' => 3431,
				'id_provincia' => 42,
				'cod_municipio' => 76,
				'DC' => 8,
				'nombre' => 'Deza',
			),
			431 => 
			array (
				'id' => 3432,
				'id_provincia' => 43,
				'cod_municipio' => 76,
				'DC' => 4,
				'nombre' => 'Marçà',
			),
			432 => 
			array (
				'id' => 3433,
				'id_provincia' => 44,
				'cod_municipio' => 76,
				'DC' => 9,
				'nombre' => 'Cella',
			),
			433 => 
			array (
				'id' => 3434,
				'id_provincia' => 45,
				'cod_municipio' => 76,
				'DC' => 2,
				'nombre' => 'Hormigos',
			),
			434 => 
			array (
				'id' => 3435,
				'id_provincia' => 46,
				'cod_municipio' => 76,
				'DC' => 5,
				'nombre' => 'Bugarra',
			),
			435 => 
			array (
				'id' => 3436,
				'id_provincia' => 47,
				'cod_municipio' => 76,
				'DC' => 1,
				'nombre' => 'Laguna de Duero',
			),
			436 => 
			array (
				'id' => 3437,
				'id_provincia' => 48,
				'cod_municipio' => 76,
				'DC' => 7,
				'nombre' => 'Sukarrieta',
			),
			437 => 
			array (
				'id' => 3438,
				'id_provincia' => 49,
				'cod_municipio' => 76,
				'DC' => 0,
				'nombre' => 'Fresno de la Ribera',
			),
			438 => 
			array (
				'id' => 3439,
				'id_provincia' => 50,
				'cod_municipio' => 76,
				'DC' => 3,
				'nombre' => 'Castejón de las Armas',
			),
			439 => 
			array (
				'id' => 3440,
				'id_provincia' => 2,
				'cod_municipio' => 77,
				'DC' => 2,
				'nombre' => 'Villa de Ves',
			),
			440 => 
			array (
				'id' => 3441,
				'id_provincia' => 3,
				'cod_municipio' => 77,
				'DC' => 8,
				'nombre' => 'Fondó de les Neus, el/Hondón de las Nieves',
			),
			441 => 
			array (
				'id' => 3442,
				'id_provincia' => 4,
				'cod_municipio' => 77,
				'DC' => 3,
				'nombre' => 'Rágol',
			),
			442 => 
			array (
				'id' => 3443,
				'id_provincia' => 5,
				'cod_municipio' => 77,
				'DC' => 6,
				'nombre' => 'Fuente el Saúz',
			),
			443 => 
			array (
				'id' => 3444,
				'id_provincia' => 6,
				'cod_municipio' => 77,
				'DC' => 9,
				'nombre' => 'Malcocinado',
			),
			444 => 
			array (
				'id' => 3445,
				'id_provincia' => 8,
				'cod_municipio' => 77,
				'DC' => 1,
				'nombre' => 'Esplugues de Llobregat',
			),
			445 => 
			array (
				'id' => 3446,
				'id_provincia' => 9,
				'cod_municipio' => 77,
				'DC' => 4,
				'nombre' => 'Cascajares de Bureba',
			),
			446 => 
			array (
				'id' => 3447,
				'id_provincia' => 10,
				'cod_municipio' => 77,
				'DC' => 8,
				'nombre' => 'Garciaz',
			),
			447 => 
			array (
				'id' => 3448,
				'id_provincia' => 12,
				'cod_municipio' => 77,
				'DC' => 0,
				'nombre' => 'Moncofa',
			),
			448 => 
			array (
				'id' => 3449,
				'id_provincia' => 13,
				'cod_municipio' => 77,
				'DC' => 6,
				'nombre' => 'Santa Cruz de Mudela',
			),
			449 => 
			array (
				'id' => 3450,
				'id_provincia' => 15,
				'cod_municipio' => 77,
				'DC' => 4,
				'nombre' => 'Santa Comba',
			),
			450 => 
			array (
				'id' => 3451,
				'id_provincia' => 17,
				'cod_municipio' => 77,
				'DC' => 3,
				'nombre' => 'Garriguella',
			),
			451 => 
			array (
				'id' => 3452,
				'id_provincia' => 20,
				'cod_municipio' => 77,
				'DC' => 6,
				'nombre' => 'Urretxu',
			),
			452 => 
			array (
				'id' => 3453,
				'id_provincia' => 21,
				'cod_municipio' => 77,
				'DC' => 3,
				'nombre' => 'Villarrasa',
			),
			453 => 
			array (
				'id' => 3454,
				'id_provincia' => 22,
				'cod_municipio' => 77,
				'DC' => 8,
				'nombre' => 'Candasnos',
			),
			454 => 
			array (
				'id' => 3455,
				'id_provincia' => 23,
				'cod_municipio' => 77,
				'DC' => 4,
				'nombre' => 'Santiago de Calatrava',
			),
			455 => 
			array (
				'id' => 3456,
				'id_provincia' => 24,
				'cod_municipio' => 77,
				'DC' => 9,
				'nombre' => 'Gordaliza del Pino',
			),
			456 => 
			array (
				'id' => 3457,
				'id_provincia' => 25,
				'cod_municipio' => 77,
				'DC' => 2,
				'nombre' => 'Coll de Nargó',
			),
			457 => 
			array (
				'id' => 3458,
				'id_provincia' => 26,
				'cod_municipio' => 77,
				'DC' => 5,
				'nombre' => 'Hornillos de Cameros',
			),
			458 => 
			array (
				'id' => 3459,
				'id_provincia' => 29,
				'cod_municipio' => 77,
				'DC' => 0,
				'nombre' => 'Parauta',
			),
			459 => 
			array (
				'id' => 3460,
				'id_provincia' => 31,
				'cod_municipio' => 77,
				'DC' => 1,
				'nombre' => 'Corella',
			),
			460 => 
			array (
				'id' => 3461,
				'id_provincia' => 32,
				'cod_municipio' => 77,
				'DC' => 6,
				'nombre' => 'Sandiás',
			),
			461 => 
			array (
				'id' => 3462,
				'id_provincia' => 33,
				'cod_municipio' => 77,
				'DC' => 2,
				'nombre' => 'Villayón',
			),
			462 => 
			array (
				'id' => 3463,
				'id_provincia' => 34,
				'cod_municipio' => 77,
				'DC' => 7,
				'nombre' => 'Fuentes de Valdepero',
			),
			463 => 
			array (
				'id' => 3464,
				'id_provincia' => 37,
				'cod_municipio' => 77,
				'DC' => 9,
				'nombre' => 'Campo de Peñaranda, El',
			),
			464 => 
			array (
				'id' => 3465,
				'id_provincia' => 39,
				'cod_municipio' => 77,
				'DC' => 8,
				'nombre' => 'Santiurde de Reinosa',
			),
			465 => 
			array (
				'id' => 3466,
				'id_provincia' => 40,
				'cod_municipio' => 77,
				'DC' => 2,
				'nombre' => 'Espirdo',
			),
			466 => 
			array (
				'id' => 3467,
				'id_provincia' => 41,
				'cod_municipio' => 77,
				'DC' => 9,
				'nombre' => 'Puebla de Cazalla, La',
			),
			467 => 
			array (
				'id' => 3468,
				'id_provincia' => 43,
				'cod_municipio' => 77,
				'DC' => 0,
				'nombre' => 'Mas de Barberans',
			),
			468 => 
			array (
				'id' => 3469,
				'id_provincia' => 44,
				'cod_municipio' => 77,
				'DC' => 5,
				'nombre' => 'Cerollera, La',
			),
			469 => 
			array (
				'id' => 3470,
				'id_provincia' => 45,
				'cod_municipio' => 77,
				'DC' => 8,
				'nombre' => 'Huecas',
			),
			470 => 
			array (
				'id' => 3471,
				'id_provincia' => 46,
				'cod_municipio' => 77,
				'DC' => 1,
				'nombre' => 'Buñol',
			),
			471 => 
			array (
				'id' => 3472,
				'id_provincia' => 47,
				'cod_municipio' => 77,
				'DC' => 7,
				'nombre' => 'Langayo',
			),
			472 => 
			array (
				'id' => 3473,
				'id_provincia' => 48,
				'cod_municipio' => 77,
				'DC' => 3,
				'nombre' => 'Plentzia',
			),
			473 => 
			array (
				'id' => 3474,
				'id_provincia' => 49,
				'cod_municipio' => 77,
				'DC' => 6,
				'nombre' => 'Fresno de Sayago',
			),
			474 => 
			array (
				'id' => 3475,
				'id_provincia' => 50,
				'cod_municipio' => 77,
				'DC' => 9,
				'nombre' => 'Castejón de Valdejasa',
			),
			475 => 
			array (
				'id' => 3476,
				'id_provincia' => 2,
				'cod_municipio' => 78,
				'DC' => 8,
				'nombre' => 'Villalgordo del Júcar',
			),
			476 => 
			array (
				'id' => 3477,
				'id_provincia' => 3,
				'cod_municipio' => 78,
				'DC' => 4,
				'nombre' => 'Hondón de los Frailes',
			),
			477 => 
			array (
				'id' => 3478,
				'id_provincia' => 4,
				'cod_municipio' => 78,
				'DC' => 9,
				'nombre' => 'Rioja',
			),
			478 => 
			array (
				'id' => 3479,
				'id_provincia' => 5,
				'cod_municipio' => 78,
				'DC' => 2,
				'nombre' => 'Fuentes de Año',
			),
			479 => 
			array (
				'id' => 3480,
				'id_provincia' => 6,
				'cod_municipio' => 78,
				'DC' => 5,
				'nombre' => 'Malpartida de la Serena',
			),
			480 => 
			array (
				'id' => 3481,
				'id_provincia' => 8,
				'cod_municipio' => 78,
				'DC' => 7,
				'nombre' => 'Espunyola, L\'',
			),
			481 => 
			array (
				'id' => 3482,
				'id_provincia' => 9,
				'cod_municipio' => 78,
				'DC' => 0,
				'nombre' => 'Cascajares de la Sierra',
			),
			482 => 
			array (
				'id' => 3483,
				'id_provincia' => 10,
				'cod_municipio' => 78,
				'DC' => 4,
				'nombre' => 'Garganta, La',
			),
			483 => 
			array (
				'id' => 3484,
				'id_provincia' => 12,
				'cod_municipio' => 78,
				'DC' => 6,
				'nombre' => 'Montán',
			),
			484 => 
			array (
				'id' => 3485,
				'id_provincia' => 13,
				'cod_municipio' => 78,
				'DC' => 2,
				'nombre' => 'Socuéllamos',
			),
			485 => 
			array (
				'id' => 3486,
				'id_provincia' => 15,
				'cod_municipio' => 78,
				'DC' => 0,
				'nombre' => 'Santiago de Compostela',
			),
			486 => 
			array (
				'id' => 3487,
				'id_provincia' => 16,
				'cod_municipio' => 78,
				'DC' => 3,
				'nombre' => 'Cuenca',
			),
			487 => 
			array (
				'id' => 3488,
				'id_provincia' => 17,
				'cod_municipio' => 78,
				'DC' => 9,
				'nombre' => 'Ger',
			),
			488 => 
			array (
				'id' => 3489,
				'id_provincia' => 18,
				'cod_municipio' => 78,
				'DC' => 5,
				'nombre' => 'Freila',
			),
			489 => 
			array (
				'id' => 3490,
				'id_provincia' => 19,
				'cod_municipio' => 78,
				'DC' => 8,
				'nombre' => 'Castilforte',
			),
			490 => 
			array (
				'id' => 3491,
				'id_provincia' => 20,
				'cod_municipio' => 78,
				'DC' => 2,
				'nombre' => 'Zaldibia',
			),
			491 => 
			array (
				'id' => 3492,
				'id_provincia' => 21,
				'cod_municipio' => 78,
				'DC' => 9,
				'nombre' => 'Zalamea la Real',
			),
			492 => 
			array (
				'id' => 3493,
				'id_provincia' => 22,
				'cod_municipio' => 78,
				'DC' => 4,
				'nombre' => 'Canfranc',
			),
			493 => 
			array (
				'id' => 3494,
				'id_provincia' => 24,
				'cod_municipio' => 78,
				'DC' => 5,
				'nombre' => 'Gordoncillo',
			),
			494 => 
			array (
				'id' => 3495,
				'id_provincia' => 25,
				'cod_municipio' => 78,
				'DC' => 8,
				'nombre' => 'Corbins',
			),
			495 => 
			array (
				'id' => 3496,
				'id_provincia' => 26,
				'cod_municipio' => 78,
				'DC' => 1,
				'nombre' => 'Hornos de Moncalvillo',
			),
			496 => 
			array (
				'id' => 3497,
				'id_provincia' => 28,
				'cod_municipio' => 78,
				'DC' => 3,
				'nombre' => 'Madarcos',
			),
			497 => 
			array (
				'id' => 3498,
				'id_provincia' => 31,
				'cod_municipio' => 78,
				'DC' => 7,
				'nombre' => 'Cortes',
			),
			498 => 
			array (
				'id' => 3499,
				'id_provincia' => 32,
				'cod_municipio' => 78,
				'DC' => 2,
				'nombre' => 'Sarreaus',
			),
			499 => 
			array (
				'id' => 3500,
				'id_provincia' => 33,
				'cod_municipio' => 78,
				'DC' => 8,
				'nombre' => 'Yernes y Tameza',
			),
		));
		\DB::table('municipios')->insert(array (
			0 => 
			array (
				'id' => 3501,
				'id_provincia' => 37,
				'cod_municipio' => 78,
				'DC' => 5,
				'nombre' => 'Candelario',
			),
			1 => 
			array (
				'id' => 3502,
				'id_provincia' => 39,
				'cod_municipio' => 78,
				'DC' => 4,
				'nombre' => 'Santiurde de Toranzo',
			),
			2 => 
			array (
				'id' => 3503,
				'id_provincia' => 40,
				'cod_municipio' => 78,
				'DC' => 8,
				'nombre' => 'Fresneda de Cuéllar',
			),
			3 => 
			array (
				'id' => 3504,
				'id_provincia' => 41,
				'cod_municipio' => 78,
				'DC' => 5,
				'nombre' => 'Puebla de los Infantes, La',
			),
			4 => 
			array (
				'id' => 3505,
				'id_provincia' => 42,
				'cod_municipio' => 78,
				'DC' => 0,
				'nombre' => 'Duruelo de la Sierra',
			),
			5 => 
			array (
				'id' => 3506,
				'id_provincia' => 43,
				'cod_municipio' => 78,
				'DC' => 6,
				'nombre' => 'Masdenverge',
			),
			6 => 
			array (
				'id' => 3507,
				'id_provincia' => 45,
				'cod_municipio' => 78,
				'DC' => 4,
				'nombre' => 'Huerta de Valdecarábanos',
			),
			7 => 
			array (
				'id' => 3508,
				'id_provincia' => 46,
				'cod_municipio' => 78,
				'DC' => 7,
				'nombre' => 'Burjassot',
			),
			8 => 
			array (
				'id' => 3509,
				'id_provincia' => 47,
				'cod_municipio' => 78,
				'DC' => 3,
				'nombre' => 'Lomoviejo',
			),
			9 => 
			array (
				'id' => 3510,
				'id_provincia' => 48,
				'cod_municipio' => 78,
				'DC' => 9,
				'nombre' => 'Portugalete',
			),
			10 => 
			array (
				'id' => 3511,
				'id_provincia' => 49,
				'cod_municipio' => 78,
				'DC' => 2,
				'nombre' => 'Friera de Valverde',
			),
			11 => 
			array (
				'id' => 3512,
				'id_provincia' => 50,
				'cod_municipio' => 78,
				'DC' => 5,
				'nombre' => 'Castiliscar',
			),
			12 => 
			array (
				'id' => 3513,
				'id_provincia' => 2,
				'cod_municipio' => 79,
				'DC' => 1,
				'nombre' => 'Villamalea',
			),
			13 => 
			array (
				'id' => 3514,
				'id_provincia' => 3,
				'cod_municipio' => 79,
				'DC' => 7,
				'nombre' => 'Ibi',
			),
			14 => 
			array (
				'id' => 3515,
				'id_provincia' => 4,
				'cod_municipio' => 79,
				'DC' => 2,
				'nombre' => 'Roquetas de Mar',
			),
			15 => 
			array (
				'id' => 3516,
				'id_provincia' => 5,
				'cod_municipio' => 79,
				'DC' => 5,
				'nombre' => 'Gallegos de Altamiros',
			),
			16 => 
			array (
				'id' => 3517,
				'id_provincia' => 6,
				'cod_municipio' => 79,
				'DC' => 8,
				'nombre' => 'Manchita',
			),
			17 => 
			array (
				'id' => 3518,
				'id_provincia' => 8,
				'cod_municipio' => 79,
				'DC' => 0,
				'nombre' => 'Estany, L\'',
			),
			18 => 
			array (
				'id' => 3519,
				'id_provincia' => 9,
				'cod_municipio' => 79,
				'DC' => 3,
				'nombre' => 'Castellanos de Castro',
			),
			19 => 
			array (
				'id' => 3520,
				'id_provincia' => 10,
				'cod_municipio' => 79,
				'DC' => 7,
				'nombre' => 'Garganta la Olla',
			),
			20 => 
			array (
				'id' => 3521,
				'id_provincia' => 12,
				'cod_municipio' => 79,
				'DC' => 9,
				'nombre' => 'Montanejos',
			),
			21 => 
			array (
				'id' => 3522,
				'id_provincia' => 13,
				'cod_municipio' => 79,
				'DC' => 5,
				'nombre' => 'Solana, La',
			),
			22 => 
			array (
				'id' => 3523,
				'id_provincia' => 15,
				'cod_municipio' => 79,
				'DC' => 3,
				'nombre' => 'Santiso',
			),
			23 => 
			array (
				'id' => 3524,
				'id_provincia' => 16,
				'cod_municipio' => 79,
				'DC' => 6,
				'nombre' => 'Cueva del Hierro',
			),
			24 => 
			array (
				'id' => 3525,
				'id_provincia' => 17,
				'cod_municipio' => 79,
				'DC' => 2,
				'nombre' => 'Girona',
			),
			25 => 
			array (
				'id' => 3526,
				'id_provincia' => 18,
				'cod_municipio' => 79,
				'DC' => 8,
				'nombre' => 'Fuente Vaqueros',
			),
			26 => 
			array (
				'id' => 3527,
				'id_provincia' => 19,
				'cod_municipio' => 79,
				'DC' => 1,
				'nombre' => 'Castilnuevo',
			),
			27 => 
			array (
				'id' => 3528,
				'id_provincia' => 20,
				'cod_municipio' => 79,
				'DC' => 5,
				'nombre' => 'Zarautz',
			),
			28 => 
			array (
				'id' => 3529,
				'id_provincia' => 21,
				'cod_municipio' => 79,
				'DC' => 2,
				'nombre' => 'Zufre',
			),
			29 => 
			array (
				'id' => 3530,
				'id_provincia' => 22,
				'cod_municipio' => 79,
				'DC' => 7,
				'nombre' => 'Capdesaso',
			),
			30 => 
			array (
				'id' => 3531,
				'id_provincia' => 23,
				'cod_municipio' => 79,
				'DC' => 3,
				'nombre' => 'Santisteban del Puerto',
			),
			31 => 
			array (
				'id' => 3532,
				'id_provincia' => 24,
				'cod_municipio' => 79,
				'DC' => 8,
				'nombre' => 'Gradefes',
			),
			32 => 
			array (
				'id' => 3533,
				'id_provincia' => 25,
				'cod_municipio' => 79,
				'DC' => 1,
				'nombre' => 'Cubells',
			),
			33 => 
			array (
				'id' => 3534,
				'id_provincia' => 26,
				'cod_municipio' => 79,
				'DC' => 4,
				'nombre' => 'Huércanos',
			),
			34 => 
			array (
				'id' => 3535,
				'id_provincia' => 28,
				'cod_municipio' => 79,
				'DC' => 6,
				'nombre' => 'Madrid',
			),
			35 => 
			array (
				'id' => 3536,
				'id_provincia' => 29,
				'cod_municipio' => 79,
				'DC' => 9,
				'nombre' => 'Periana',
			),
			36 => 
			array (
				'id' => 3537,
				'id_provincia' => 31,
				'cod_municipio' => 79,
				'DC' => 0,
				'nombre' => 'Desojo',
			),
			37 => 
			array (
				'id' => 3538,
				'id_provincia' => 32,
				'cod_municipio' => 79,
				'DC' => 5,
				'nombre' => 'Taboadela',
			),
			38 => 
			array (
				'id' => 3539,
				'id_provincia' => 34,
				'cod_municipio' => 79,
				'DC' => 6,
				'nombre' => 'Grijota',
			),
			39 => 
			array (
				'id' => 3540,
				'id_provincia' => 37,
				'cod_municipio' => 79,
				'DC' => 8,
				'nombre' => 'Canillas de Abajo',
			),
			40 => 
			array (
				'id' => 3541,
				'id_provincia' => 39,
				'cod_municipio' => 79,
				'DC' => 7,
				'nombre' => 'Santoña',
			),
			41 => 
			array (
				'id' => 3542,
				'id_provincia' => 40,
				'cod_municipio' => 79,
				'DC' => 1,
				'nombre' => 'Fresno de Cantespino',
			),
			42 => 
			array (
				'id' => 3543,
				'id_provincia' => 41,
				'cod_municipio' => 79,
				'DC' => 8,
				'nombre' => 'Puebla del Río, La',
			),
			43 => 
			array (
				'id' => 3544,
				'id_provincia' => 42,
				'cod_municipio' => 79,
				'DC' => 3,
				'nombre' => 'Escobosa de Almazán',
			),
			44 => 
			array (
				'id' => 3545,
				'id_provincia' => 43,
				'cod_municipio' => 79,
				'DC' => 9,
				'nombre' => 'Masllorenç',
			),
			45 => 
			array (
				'id' => 3546,
				'id_provincia' => 45,
				'cod_municipio' => 79,
				'DC' => 7,
				'nombre' => 'Iglesuela, La',
			),
			46 => 
			array (
				'id' => 3547,
				'id_provincia' => 46,
				'cod_municipio' => 79,
				'DC' => 0,
				'nombre' => 'Calles',
			),
			47 => 
			array (
				'id' => 3548,
				'id_provincia' => 47,
				'cod_municipio' => 79,
				'DC' => 6,
				'nombre' => 'Llano de Olmedo',
			),
			48 => 
			array (
				'id' => 3549,
				'id_provincia' => 48,
				'cod_municipio' => 79,
				'DC' => 2,
				'nombre' => 'Errigoiti',
			),
			49 => 
			array (
				'id' => 3550,
				'id_provincia' => 49,
				'cod_municipio' => 79,
				'DC' => 5,
				'nombre' => 'Fuente Encalada',
			),
			50 => 
			array (
				'id' => 3551,
				'id_provincia' => 50,
				'cod_municipio' => 79,
				'DC' => 8,
				'nombre' => 'Cervera de la Cañada',
			),
			51 => 
			array (
				'id' => 3552,
				'id_provincia' => 2,
				'cod_municipio' => 80,
				'DC' => 5,
				'nombre' => 'Villapalacios',
			),
			52 => 
			array (
				'id' => 3553,
				'id_provincia' => 3,
				'cod_municipio' => 80,
				'DC' => 1,
				'nombre' => 'Jacarilla',
			),
			53 => 
			array (
				'id' => 3554,
				'id_provincia' => 4,
				'cod_municipio' => 80,
				'DC' => 6,
				'nombre' => 'Santa Cruz de Marchena',
			),
			54 => 
			array (
				'id' => 3555,
				'id_provincia' => 5,
				'cod_municipio' => 80,
				'DC' => 9,
				'nombre' => 'Gallegos de Sobrinos',
			),
			55 => 
			array (
				'id' => 3556,
				'id_provincia' => 6,
				'cod_municipio' => 80,
				'DC' => 2,
				'nombre' => 'Medellín',
			),
			56 => 
			array (
				'id' => 3557,
				'id_provincia' => 8,
				'cod_municipio' => 80,
				'DC' => 4,
				'nombre' => 'Fígols',
			),
			57 => 
			array (
				'id' => 3558,
				'id_provincia' => 10,
				'cod_municipio' => 80,
				'DC' => 1,
				'nombre' => 'Gargantilla',
			),
			58 => 
			array (
				'id' => 3559,
				'id_provincia' => 12,
				'cod_municipio' => 80,
				'DC' => 3,
				'nombre' => 'Morella',
			),
			59 => 
			array (
				'id' => 3560,
				'id_provincia' => 13,
				'cod_municipio' => 80,
				'DC' => 9,
				'nombre' => 'Solana del Pino',
			),
			60 => 
			array (
				'id' => 3561,
				'id_provincia' => 15,
				'cod_municipio' => 80,
				'DC' => 7,
				'nombre' => 'Sobrado',
			),
			61 => 
			array (
				'id' => 3562,
				'id_provincia' => 17,
				'cod_municipio' => 80,
				'DC' => 6,
				'nombre' => 'Gombrèn',
			),
			62 => 
			array (
				'id' => 3563,
				'id_provincia' => 19,
				'cod_municipio' => 80,
				'DC' => 5,
				'nombre' => 'Cendejas de Enmedio',
			),
			63 => 
			array (
				'id' => 3564,
				'id_provincia' => 20,
				'cod_municipio' => 80,
				'DC' => 9,
				'nombre' => 'Zumarraga',
			),
			64 => 
			array (
				'id' => 3565,
				'id_provincia' => 22,
				'cod_municipio' => 80,
				'DC' => 1,
				'nombre' => 'Capella',
			),
			65 => 
			array (
				'id' => 3566,
				'id_provincia' => 23,
				'cod_municipio' => 80,
				'DC' => 7,
				'nombre' => 'Santo Tomé',
			),
			66 => 
			array (
				'id' => 3567,
				'id_provincia' => 24,
				'cod_municipio' => 80,
				'DC' => 2,
				'nombre' => 'Grajal de Campos',
			),
			67 => 
			array (
				'id' => 3568,
				'id_provincia' => 26,
				'cod_municipio' => 80,
				'DC' => 8,
				'nombre' => 'Igea',
			),
			68 => 
			array (
				'id' => 3569,
				'id_provincia' => 28,
				'cod_municipio' => 80,
				'DC' => 0,
				'nombre' => 'Majadahonda',
			),
			69 => 
			array (
				'id' => 3570,
				'id_provincia' => 29,
				'cod_municipio' => 80,
				'DC' => 3,
				'nombre' => 'Pizarra',
			),
			70 => 
			array (
				'id' => 3571,
				'id_provincia' => 31,
				'cod_municipio' => 80,
				'DC' => 4,
				'nombre' => 'Dicastillo',
			),
			71 => 
			array (
				'id' => 3572,
				'id_provincia' => 32,
				'cod_municipio' => 80,
				'DC' => 9,
				'nombre' => 'Teixeira, A',
			),
			72 => 
			array (
				'id' => 3573,
				'id_provincia' => 34,
				'cod_municipio' => 80,
				'DC' => 0,
				'nombre' => 'Guardo',
			),
			73 => 
			array (
				'id' => 3574,
				'id_provincia' => 37,
				'cod_municipio' => 80,
				'DC' => 2,
				'nombre' => 'Cantagallo',
			),
			74 => 
			array (
				'id' => 3575,
				'id_provincia' => 39,
				'cod_municipio' => 80,
				'DC' => 1,
				'nombre' => 'San Vicente de la Barquera',
			),
			75 => 
			array (
				'id' => 3576,
				'id_provincia' => 40,
				'cod_municipio' => 80,
				'DC' => 5,
				'nombre' => 'Fresno de la Fuente',
			),
			76 => 
			array (
				'id' => 3577,
				'id_provincia' => 41,
				'cod_municipio' => 80,
				'DC' => 2,
				'nombre' => 'Real de la Jara, El',
			),
			77 => 
			array (
				'id' => 3578,
				'id_provincia' => 42,
				'cod_municipio' => 80,
				'DC' => 7,
				'nombre' => 'Espeja de San Marcelino',
			),
			78 => 
			array (
				'id' => 3579,
				'id_provincia' => 43,
				'cod_municipio' => 80,
				'DC' => 3,
				'nombre' => 'Masó, La',
			),
			79 => 
			array (
				'id' => 3580,
				'id_provincia' => 44,
				'cod_municipio' => 80,
				'DC' => 8,
				'nombre' => 'Codoñera, La',
			),
			80 => 
			array (
				'id' => 3581,
				'id_provincia' => 45,
				'cod_municipio' => 80,
				'DC' => 1,
				'nombre' => 'Illán de Vacas',
			),
			81 => 
			array (
				'id' => 3582,
				'id_provincia' => 46,
				'cod_municipio' => 80,
				'DC' => 4,
				'nombre' => 'Camporrobles',
			),
			82 => 
			array (
				'id' => 3583,
				'id_provincia' => 47,
				'cod_municipio' => 80,
				'DC' => 0,
				'nombre' => 'Manzanillo',
			),
			83 => 
			array (
				'id' => 3584,
				'id_provincia' => 48,
				'cod_municipio' => 80,
				'DC' => 6,
				'nombre' => 'Valle de Trápaga-Trapagaran',
			),
			84 => 
			array (
				'id' => 3585,
				'id_provincia' => 49,
				'cod_municipio' => 80,
				'DC' => 9,
				'nombre' => 'Fuentelapeña',
			),
			85 => 
			array (
				'id' => 3586,
				'id_provincia' => 50,
				'cod_municipio' => 80,
				'DC' => 2,
				'nombre' => 'Cerveruela',
			),
			86 => 
			array (
				'id' => 3587,
				'id_provincia' => 2,
				'cod_municipio' => 81,
				'DC' => 2,
				'nombre' => 'Villarrobledo',
			),
			87 => 
			array (
				'id' => 3588,
				'id_provincia' => 3,
				'cod_municipio' => 81,
				'DC' => 8,
				'nombre' => 'Xaló',
			),
			88 => 
			array (
				'id' => 3589,
				'id_provincia' => 4,
				'cod_municipio' => 81,
				'DC' => 3,
				'nombre' => 'Santa Fe de Mondújar',
			),
			89 => 
			array (
				'id' => 3590,
				'id_provincia' => 5,
				'cod_municipio' => 81,
				'DC' => 6,
				'nombre' => 'Garganta del Villar',
			),
			90 => 
			array (
				'id' => 3591,
				'id_provincia' => 6,
				'cod_municipio' => 81,
				'DC' => 9,
				'nombre' => 'Medina de las Torres',
			),
			91 => 
			array (
				'id' => 3592,
				'id_provincia' => 8,
				'cod_municipio' => 81,
				'DC' => 1,
				'nombre' => 'Fogars de Montclús',
			),
			92 => 
			array (
				'id' => 3593,
				'id_provincia' => 10,
				'cod_municipio' => 81,
				'DC' => 8,
				'nombre' => 'Gargüera',
			),
			93 => 
			array (
				'id' => 3594,
				'id_provincia' => 12,
				'cod_municipio' => 81,
				'DC' => 0,
				'nombre' => 'Navajas',
			),
			94 => 
			array (
				'id' => 3595,
				'id_provincia' => 13,
				'cod_municipio' => 81,
				'DC' => 6,
				'nombre' => 'Terrinches',
			),
			95 => 
			array (
				'id' => 3596,
				'id_provincia' => 15,
				'cod_municipio' => 81,
				'DC' => 4,
				'nombre' => 'Somozas, As',
			),
			96 => 
			array (
				'id' => 3597,
				'id_provincia' => 16,
				'cod_municipio' => 81,
				'DC' => 7,
				'nombre' => 'Chumillas',
			),
			97 => 
			array (
				'id' => 3598,
				'id_provincia' => 17,
				'cod_municipio' => 81,
				'DC' => 3,
				'nombre' => 'Gualta',
			),
			98 => 
			array (
				'id' => 3599,
				'id_provincia' => 19,
				'cod_municipio' => 81,
				'DC' => 2,
				'nombre' => 'Cendejas de la Torre',
			),
			99 => 
			array (
				'id' => 3600,
				'id_provincia' => 20,
				'cod_municipio' => 81,
				'DC' => 6,
				'nombre' => 'Zumaia',
			),
			100 => 
			array (
				'id' => 3601,
				'id_provincia' => 22,
				'cod_municipio' => 81,
				'DC' => 8,
				'nombre' => 'Casbas de Huesca',
			),
			101 => 
			array (
				'id' => 3602,
				'id_provincia' => 23,
				'cod_municipio' => 81,
				'DC' => 4,
				'nombre' => 'Segura de la Sierra',
			),
			102 => 
			array (
				'id' => 3603,
				'id_provincia' => 24,
				'cod_municipio' => 81,
				'DC' => 9,
				'nombre' => 'Gusendos de los Oteros',
			),
			103 => 
			array (
				'id' => 3604,
				'id_provincia' => 25,
				'cod_municipio' => 81,
				'DC' => 2,
				'nombre' => 'Espluga Calba, L\'',
			),
			104 => 
			array (
				'id' => 3605,
				'id_provincia' => 26,
				'cod_municipio' => 81,
				'DC' => 5,
				'nombre' => 'Jalón de Cameros',
			),
			105 => 
			array (
				'id' => 3606,
				'id_provincia' => 29,
				'cod_municipio' => 81,
				'DC' => 0,
				'nombre' => 'Pujerra',
			),
			106 => 
			array (
				'id' => 3607,
				'id_provincia' => 31,
				'cod_municipio' => 81,
				'DC' => 1,
				'nombre' => 'Donamaria',
			),
			107 => 
			array (
				'id' => 3608,
				'id_provincia' => 32,
				'cod_municipio' => 81,
				'DC' => 6,
				'nombre' => 'Toén',
			),
			108 => 
			array (
				'id' => 3609,
				'id_provincia' => 34,
				'cod_municipio' => 81,
				'DC' => 7,
				'nombre' => 'Guaza de Campos',
			),
			109 => 
			array (
				'id' => 3610,
				'id_provincia' => 37,
				'cod_municipio' => 81,
				'DC' => 9,
				'nombre' => 'Cantalapiedra',
			),
			110 => 
			array (
				'id' => 3611,
				'id_provincia' => 39,
				'cod_municipio' => 81,
				'DC' => 8,
				'nombre' => 'Saro',
			),
			111 => 
			array (
				'id' => 3612,
				'id_provincia' => 40,
				'cod_municipio' => 81,
				'DC' => 2,
				'nombre' => 'Frumales',
			),
			112 => 
			array (
				'id' => 3613,
				'id_provincia' => 41,
				'cod_municipio' => 81,
				'DC' => 9,
				'nombre' => 'Rinconada, La',
			),
			113 => 
			array (
				'id' => 3614,
				'id_provincia' => 42,
				'cod_municipio' => 81,
				'DC' => 4,
				'nombre' => 'Espejón',
			),
			114 => 
			array (
				'id' => 3615,
				'id_provincia' => 43,
				'cod_municipio' => 81,
				'DC' => 0,
				'nombre' => 'Maspujols',
			),
			115 => 
			array (
				'id' => 3616,
				'id_provincia' => 45,
				'cod_municipio' => 81,
				'DC' => 8,
				'nombre' => 'Illescas',
			),
			116 => 
			array (
				'id' => 3617,
				'id_provincia' => 46,
				'cod_municipio' => 81,
				'DC' => 1,
				'nombre' => 'Canals',
			),
			117 => 
			array (
				'id' => 3618,
				'id_provincia' => 47,
				'cod_municipio' => 81,
				'DC' => 7,
				'nombre' => 'Marzales',
			),
			118 => 
			array (
				'id' => 3619,
				'id_provincia' => 48,
				'cod_municipio' => 81,
				'DC' => 3,
				'nombre' => 'Lezama',
			),
			119 => 
			array (
				'id' => 3620,
				'id_provincia' => 49,
				'cod_municipio' => 81,
				'DC' => 6,
				'nombre' => 'Fuentesaúco',
			),
			120 => 
			array (
				'id' => 3621,
				'id_provincia' => 50,
				'cod_municipio' => 81,
				'DC' => 9,
				'nombre' => 'Cetina',
			),
			121 => 
			array (
				'id' => 3622,
				'id_provincia' => 2,
				'cod_municipio' => 82,
				'DC' => 7,
				'nombre' => 'Villatoya',
			),
			122 => 
			array (
				'id' => 3623,
				'id_provincia' => 3,
				'cod_municipio' => 82,
				'DC' => 3,
				'nombre' => 'Jávea/Xàbia',
			),
			123 => 
			array (
				'id' => 3624,
				'id_provincia' => 4,
				'cod_municipio' => 82,
				'DC' => 8,
				'nombre' => 'Senés',
			),
			124 => 
			array (
				'id' => 3625,
				'id_provincia' => 5,
				'cod_municipio' => 82,
				'DC' => 1,
				'nombre' => 'Gavilanes',
			),
			125 => 
			array (
				'id' => 3626,
				'id_provincia' => 6,
				'cod_municipio' => 82,
				'DC' => 4,
				'nombre' => 'Mengabril',
			),
			126 => 
			array (
				'id' => 3627,
				'id_provincia' => 8,
				'cod_municipio' => 82,
				'DC' => 6,
				'nombre' => 'Fogars de la Selva',
			),
			127 => 
			array (
				'id' => 3628,
				'id_provincia' => 9,
				'cod_municipio' => 82,
				'DC' => 9,
				'nombre' => 'Castildelgado',
			),
			128 => 
			array (
				'id' => 3629,
				'id_provincia' => 10,
				'cod_municipio' => 82,
				'DC' => 3,
				'nombre' => 'Garrovillas de Alconétar',
			),
			129 => 
			array (
				'id' => 3630,
				'id_provincia' => 12,
				'cod_municipio' => 82,
				'DC' => 5,
				'nombre' => 'Nules',
			),
			130 => 
			array (
				'id' => 3631,
				'id_provincia' => 13,
				'cod_municipio' => 82,
				'DC' => 1,
				'nombre' => 'Tomelloso',
			),
			131 => 
			array (
				'id' => 3632,
				'id_provincia' => 15,
				'cod_municipio' => 82,
				'DC' => 9,
				'nombre' => 'Teo',
			),
			132 => 
			array (
				'id' => 3633,
				'id_provincia' => 16,
				'cod_municipio' => 82,
				'DC' => 2,
				'nombre' => 'Enguídanos',
			),
			133 => 
			array (
				'id' => 3634,
				'id_provincia' => 17,
				'cod_municipio' => 82,
				'DC' => 8,
				'nombre' => 'Guils de Cerdanya',
			),
			134 => 
			array (
				'id' => 3635,
				'id_provincia' => 18,
				'cod_municipio' => 82,
				'DC' => 4,
				'nombre' => 'Galera',
			),
			135 => 
			array (
				'id' => 3636,
				'id_provincia' => 19,
				'cod_municipio' => 82,
				'DC' => 7,
				'nombre' => 'Centenera',
			),
			136 => 
			array (
				'id' => 3637,
				'id_provincia' => 22,
				'cod_municipio' => 82,
				'DC' => 3,
				'nombre' => 'Castejón del Puente',
			),
			137 => 
			array (
				'id' => 3638,
				'id_provincia' => 23,
				'cod_municipio' => 82,
				'DC' => 9,
				'nombre' => 'Siles',
			),
			138 => 
			array (
				'id' => 3639,
				'id_provincia' => 24,
				'cod_municipio' => 82,
				'DC' => 4,
				'nombre' => 'Hospital de Órbigo',
			),
			139 => 
			array (
				'id' => 3640,
				'id_provincia' => 25,
				'cod_municipio' => 82,
				'DC' => 7,
				'nombre' => 'Espot',
			),
			140 => 
			array (
				'id' => 3641,
				'id_provincia' => 26,
				'cod_municipio' => 82,
				'DC' => 0,
				'nombre' => 'Laguna de Cameros',
			),
			141 => 
			array (
				'id' => 3642,
				'id_provincia' => 28,
				'cod_municipio' => 82,
				'DC' => 2,
				'nombre' => 'Manzanares el Real',
			),
			142 => 
			array (
				'id' => 3643,
				'id_provincia' => 29,
				'cod_municipio' => 82,
				'DC' => 5,
				'nombre' => 'Rincón de la Victoria',
			),
			143 => 
			array (
				'id' => 3644,
				'id_provincia' => 31,
				'cod_municipio' => 82,
				'DC' => 6,
				'nombre' => 'Etxalar',
			),
			144 => 
			array (
				'id' => 3645,
				'id_provincia' => 32,
				'cod_municipio' => 82,
				'DC' => 1,
				'nombre' => 'Trasmiras',
			),
			145 => 
			array (
				'id' => 3646,
				'id_provincia' => 34,
				'cod_municipio' => 82,
				'DC' => 2,
				'nombre' => 'Hérmedes de Cerrato',
			),
			146 => 
			array (
				'id' => 3647,
				'id_provincia' => 37,
				'cod_municipio' => 82,
				'DC' => 4,
				'nombre' => 'Cantalpino',
			),
			147 => 
			array (
				'id' => 3648,
				'id_provincia' => 39,
				'cod_municipio' => 82,
				'DC' => 3,
				'nombre' => 'Selaya',
			),
			148 => 
			array (
				'id' => 3649,
				'id_provincia' => 40,
				'cod_municipio' => 82,
				'DC' => 7,
				'nombre' => 'Fuente de Santa Cruz',
			),
			149 => 
			array (
				'id' => 3650,
				'id_provincia' => 41,
				'cod_municipio' => 82,
				'DC' => 4,
				'nombre' => 'Roda de Andalucía, La',
			),
			150 => 
			array (
				'id' => 3651,
				'id_provincia' => 42,
				'cod_municipio' => 82,
				'DC' => 9,
				'nombre' => 'Estepa de San Juan',
			),
			151 => 
			array (
				'id' => 3652,
				'id_provincia' => 43,
				'cod_municipio' => 82,
				'DC' => 5,
				'nombre' => 'Masroig, El',
			),
			152 => 
			array (
				'id' => 3653,
				'id_provincia' => 44,
				'cod_municipio' => 82,
				'DC' => 0,
				'nombre' => 'Corbalán',
			),
			153 => 
			array (
				'id' => 3654,
				'id_provincia' => 45,
				'cod_municipio' => 82,
				'DC' => 3,
				'nombre' => 'Lagartera',
			),
			154 => 
			array (
				'id' => 3655,
				'id_provincia' => 46,
				'cod_municipio' => 82,
				'DC' => 6,
				'nombre' => 'Canet d\'En Berenguer',
			),
			155 => 
			array (
				'id' => 3656,
				'id_provincia' => 47,
				'cod_municipio' => 82,
				'DC' => 2,
				'nombre' => 'Matapozuelos',
			),
			156 => 
			array (
				'id' => 3657,
				'id_provincia' => 48,
				'cod_municipio' => 82,
				'DC' => 8,
				'nombre' => 'Santurtzi',
			),
			157 => 
			array (
				'id' => 3658,
				'id_provincia' => 49,
				'cod_municipio' => 82,
				'DC' => 1,
				'nombre' => 'Fuentes de Ropel',
			),
			158 => 
			array (
				'id' => 3659,
				'id_provincia' => 50,
				'cod_municipio' => 82,
				'DC' => 4,
				'nombre' => 'Cimballa',
			),
			159 => 
			array (
				'id' => 3660,
				'id_provincia' => 2,
				'cod_municipio' => 83,
				'DC' => 3,
				'nombre' => 'Villavaliente',
			),
			160 => 
			array (
				'id' => 3661,
				'id_provincia' => 3,
				'cod_municipio' => 83,
				'DC' => 9,
				'nombre' => 'Jijona/Xixona',
			),
			161 => 
			array (
				'id' => 3662,
				'id_provincia' => 4,
				'cod_municipio' => 83,
				'DC' => 4,
				'nombre' => 'Serón',
			),
			162 => 
			array (
				'id' => 3663,
				'id_provincia' => 5,
				'cod_municipio' => 83,
				'DC' => 7,
				'nombre' => 'Gemuño',
			),
			163 => 
			array (
				'id' => 3664,
				'id_provincia' => 6,
				'cod_municipio' => 83,
				'DC' => 0,
				'nombre' => 'Mérida',
			),
			164 => 
			array (
				'id' => 3665,
				'id_provincia' => 8,
				'cod_municipio' => 83,
				'DC' => 2,
				'nombre' => 'Folgueroles',
			),
			165 => 
			array (
				'id' => 3666,
				'id_provincia' => 9,
				'cod_municipio' => 83,
				'DC' => 5,
				'nombre' => 'Castil de Peones',
			),
			166 => 
			array (
				'id' => 3667,
				'id_provincia' => 10,
				'cod_municipio' => 83,
				'DC' => 9,
				'nombre' => 'Garvín',
			),
			167 => 
			array (
				'id' => 3668,
				'id_provincia' => 12,
				'cod_municipio' => 83,
				'DC' => 1,
				'nombre' => 'Olocau del Rey',
			),
			168 => 
			array (
				'id' => 3669,
				'id_provincia' => 13,
				'cod_municipio' => 83,
				'DC' => 7,
				'nombre' => 'Torralba de Calatrava',
			),
			169 => 
			array (
				'id' => 3670,
				'id_provincia' => 15,
				'cod_municipio' => 83,
				'DC' => 5,
				'nombre' => 'Toques',
			),
			170 => 
			array (
				'id' => 3671,
				'id_provincia' => 16,
				'cod_municipio' => 83,
				'DC' => 8,
				'nombre' => 'Fresneda de Altarejos',
			),
			171 => 
			array (
				'id' => 3672,
				'id_provincia' => 17,
				'cod_municipio' => 83,
				'DC' => 4,
				'nombre' => 'Hostalric',
			),
			172 => 
			array (
				'id' => 3673,
				'id_provincia' => 18,
				'cod_municipio' => 83,
				'DC' => 0,
				'nombre' => 'Gobernador',
			),
			173 => 
			array (
				'id' => 3674,
				'id_provincia' => 22,
				'cod_municipio' => 83,
				'DC' => 9,
				'nombre' => 'Castejón de Monegros',
			),
			174 => 
			array (
				'id' => 3675,
				'id_provincia' => 24,
				'cod_municipio' => 83,
				'DC' => 0,
				'nombre' => 'Igüeña',
			),
			175 => 
			array (
				'id' => 3676,
				'id_provincia' => 26,
				'cod_municipio' => 83,
				'DC' => 6,
				'nombre' => 'Lagunilla del Jubera',
			),
			176 => 
			array (
				'id' => 3677,
				'id_provincia' => 28,
				'cod_municipio' => 83,
				'DC' => 8,
				'nombre' => 'Meco',
			),
			177 => 
			array (
				'id' => 3678,
				'id_provincia' => 29,
				'cod_municipio' => 83,
				'DC' => 1,
				'nombre' => 'Riogordo',
			),
			178 => 
			array (
				'id' => 3679,
				'id_provincia' => 31,
				'cod_municipio' => 83,
				'DC' => 2,
				'nombre' => 'Echarri',
			),
			179 => 
			array (
				'id' => 3680,
				'id_provincia' => 32,
				'cod_municipio' => 83,
				'DC' => 7,
				'nombre' => 'Veiga, A',
			),
			180 => 
			array (
				'id' => 3681,
				'id_provincia' => 34,
				'cod_municipio' => 83,
				'DC' => 8,
				'nombre' => 'Herrera de Pisuerga',
			),
			181 => 
			array (
				'id' => 3682,
				'id_provincia' => 37,
				'cod_municipio' => 83,
				'DC' => 0,
				'nombre' => 'Cantaracillo',
			),
			182 => 
			array (
				'id' => 3683,
				'id_provincia' => 39,
				'cod_municipio' => 83,
				'DC' => 9,
				'nombre' => 'Soba',
			),
			183 => 
			array (
				'id' => 3684,
				'id_provincia' => 40,
				'cod_municipio' => 83,
				'DC' => 3,
				'nombre' => 'Fuente el Olmo de Fuentidueña',
			),
			184 => 
			array (
				'id' => 3685,
				'id_provincia' => 41,
				'cod_municipio' => 83,
				'DC' => 0,
				'nombre' => 'Ronquillo, El',
			),
			185 => 
			array (
				'id' => 3686,
				'id_provincia' => 42,
				'cod_municipio' => 83,
				'DC' => 5,
				'nombre' => 'Frechilla de Almazán',
			),
			186 => 
			array (
				'id' => 3687,
				'id_provincia' => 43,
				'cod_municipio' => 83,
				'DC' => 1,
				'nombre' => 'Milà, El',
			),
			187 => 
			array (
				'id' => 3688,
				'id_provincia' => 45,
				'cod_municipio' => 83,
				'DC' => 9,
				'nombre' => 'Layos',
			),
			188 => 
			array (
				'id' => 3689,
				'id_provincia' => 46,
				'cod_municipio' => 83,
				'DC' => 2,
				'nombre' => 'Carcaixent',
			),
			189 => 
			array (
				'id' => 3690,
				'id_provincia' => 47,
				'cod_municipio' => 83,
				'DC' => 8,
				'nombre' => 'Matilla de los Caños',
			),
			190 => 
			array (
				'id' => 3691,
				'id_provincia' => 48,
				'cod_municipio' => 83,
				'DC' => 4,
				'nombre' => 'Ortuella',
			),
			191 => 
			array (
				'id' => 3692,
				'id_provincia' => 49,
				'cod_municipio' => 83,
				'DC' => 7,
				'nombre' => 'Fuentesecas',
			),
			192 => 
			array (
				'id' => 3693,
				'id_provincia' => 50,
				'cod_municipio' => 83,
				'DC' => 0,
				'nombre' => 'Cinco Olivas',
			),
			193 => 
			array (
				'id' => 3694,
				'id_provincia' => 2,
				'cod_municipio' => 84,
				'DC' => 8,
				'nombre' => 'Villaverde de Guadalimar',
			),
			194 => 
			array (
				'id' => 3695,
				'id_provincia' => 3,
				'cod_municipio' => 84,
				'DC' => 4,
				'nombre' => 'Lorcha/Orxa, l\'',
			),
			195 => 
			array (
				'id' => 3696,
				'id_provincia' => 4,
				'cod_municipio' => 84,
				'DC' => 9,
				'nombre' => 'Sierro',
			),
			196 => 
			array (
				'id' => 3697,
				'id_provincia' => 5,
				'cod_municipio' => 84,
				'DC' => 2,
				'nombre' => 'Gilbuena',
			),
			197 => 
			array (
				'id' => 3698,
				'id_provincia' => 6,
				'cod_municipio' => 84,
				'DC' => 5,
				'nombre' => 'Mirandilla',
			),
			198 => 
			array (
				'id' => 3699,
				'id_provincia' => 8,
				'cod_municipio' => 84,
				'DC' => 7,
				'nombre' => 'Fonollosa',
			),
			199 => 
			array (
				'id' => 3700,
				'id_provincia' => 9,
				'cod_municipio' => 84,
				'DC' => 0,
				'nombre' => 'Castrillo de la Reina',
			),
			200 => 
			array (
				'id' => 3701,
				'id_provincia' => 10,
				'cod_municipio' => 84,
				'DC' => 4,
				'nombre' => 'Gata',
			),
			201 => 
			array (
				'id' => 3702,
				'id_provincia' => 12,
				'cod_municipio' => 84,
				'DC' => 6,
				'nombre' => 'Onda',
			),
			202 => 
			array (
				'id' => 3703,
				'id_provincia' => 13,
				'cod_municipio' => 84,
				'DC' => 2,
				'nombre' => 'Torre de Juan Abad',
			),
			203 => 
			array (
				'id' => 3704,
				'id_provincia' => 15,
				'cod_municipio' => 84,
				'DC' => 0,
				'nombre' => 'Tordoia',
			),
			204 => 
			array (
				'id' => 3705,
				'id_provincia' => 16,
				'cod_municipio' => 84,
				'DC' => 3,
				'nombre' => 'Fresneda de la Sierra',
			),
			205 => 
			array (
				'id' => 3706,
				'id_provincia' => 17,
				'cod_municipio' => 84,
				'DC' => 9,
				'nombre' => 'Isòvol',
			),
			206 => 
			array (
				'id' => 3707,
				'id_provincia' => 18,
				'cod_municipio' => 84,
				'DC' => 5,
				'nombre' => 'Gójar',
			),
			207 => 
			array (
				'id' => 3708,
				'id_provincia' => 22,
				'cod_municipio' => 84,
				'DC' => 4,
				'nombre' => 'Castejón de Sos',
			),
			208 => 
			array (
				'id' => 3709,
				'id_provincia' => 23,
				'cod_municipio' => 84,
				'DC' => 0,
				'nombre' => 'Sorihuela del Guadalimar',
			),
			209 => 
			array (
				'id' => 3710,
				'id_provincia' => 24,
				'cod_municipio' => 84,
				'DC' => 5,
				'nombre' => 'Izagre',
			),
			210 => 
			array (
				'id' => 3711,
				'id_provincia' => 26,
				'cod_municipio' => 84,
				'DC' => 1,
				'nombre' => 'Lardero',
			),
			211 => 
			array (
				'id' => 3712,
				'id_provincia' => 28,
				'cod_municipio' => 84,
				'DC' => 3,
				'nombre' => 'Mejorada del Campo',
			),
			212 => 
			array (
				'id' => 3713,
				'id_provincia' => 29,
				'cod_municipio' => 84,
				'DC' => 6,
				'nombre' => 'Ronda',
			),
			213 => 
			array (
				'id' => 3714,
				'id_provincia' => 31,
				'cod_municipio' => 84,
				'DC' => 7,
				'nombre' => 'Etxarri-Aranatz',
			),
			214 => 
			array (
				'id' => 3715,
				'id_provincia' => 32,
				'cod_municipio' => 84,
				'DC' => 2,
				'nombre' => 'Verea',
			),
			215 => 
			array (
				'id' => 3716,
				'id_provincia' => 34,
				'cod_municipio' => 84,
				'DC' => 3,
				'nombre' => 'Herrera de Valdecañas',
			),
			216 => 
			array (
				'id' => 3717,
				'id_provincia' => 39,
				'cod_municipio' => 84,
				'DC' => 4,
				'nombre' => 'Solórzano',
			),
			217 => 
			array (
				'id' => 3718,
				'id_provincia' => 40,
				'cod_municipio' => 84,
				'DC' => 8,
				'nombre' => 'Fuente el Olmo de Íscar',
			),
			218 => 
			array (
				'id' => 3719,
				'id_provincia' => 41,
				'cod_municipio' => 84,
				'DC' => 5,
				'nombre' => 'Rubio, El',
			),
			219 => 
			array (
				'id' => 3720,
				'id_provincia' => 42,
				'cod_municipio' => 84,
				'DC' => 0,
				'nombre' => 'Fresno de Caracena',
			),
			220 => 
			array (
				'id' => 3721,
				'id_provincia' => 43,
				'cod_municipio' => 84,
				'DC' => 6,
				'nombre' => 'Miravet',
			),
			221 => 
			array (
				'id' => 3722,
				'id_provincia' => 44,
				'cod_municipio' => 84,
				'DC' => 1,
				'nombre' => 'Cortes de Aragón',
			),
			222 => 
			array (
				'id' => 3723,
				'id_provincia' => 45,
				'cod_municipio' => 84,
				'DC' => 4,
				'nombre' => 'Lillo',
			),
			223 => 
			array (
				'id' => 3724,
				'id_provincia' => 46,
				'cod_municipio' => 84,
				'DC' => 7,
				'nombre' => 'Càrcer',
			),
			224 => 
			array (
				'id' => 3725,
				'id_provincia' => 47,
				'cod_municipio' => 84,
				'DC' => 3,
				'nombre' => 'Mayorga',
			),
			225 => 
			array (
				'id' => 3726,
				'id_provincia' => 48,
				'cod_municipio' => 84,
				'DC' => 9,
				'nombre' => 'Sestao',
			),
			226 => 
			array (
				'id' => 3727,
				'id_provincia' => 49,
				'cod_municipio' => 84,
				'DC' => 2,
				'nombre' => 'Fuentespreadas',
			),
			227 => 
			array (
				'id' => 3728,
				'id_provincia' => 50,
				'cod_municipio' => 84,
				'DC' => 5,
				'nombre' => 'Clarés de Ribota',
			),
			228 => 
			array (
				'id' => 3729,
				'id_provincia' => 2,
				'cod_municipio' => 85,
				'DC' => 1,
				'nombre' => 'Viveros',
			),
			229 => 
			array (
				'id' => 3730,
				'id_provincia' => 3,
				'cod_municipio' => 85,
				'DC' => 7,
				'nombre' => 'Llíber',
			),
			230 => 
			array (
				'id' => 3731,
				'id_provincia' => 4,
				'cod_municipio' => 85,
				'DC' => 2,
				'nombre' => 'Somontín',
			),
			231 => 
			array (
				'id' => 3732,
				'id_provincia' => 5,
				'cod_municipio' => 85,
				'DC' => 5,
				'nombre' => 'Gil García',
			),
			232 => 
			array (
				'id' => 3733,
				'id_provincia' => 6,
				'cod_municipio' => 85,
				'DC' => 8,
				'nombre' => 'Monesterio',
			),
			233 => 
			array (
				'id' => 3734,
				'id_provincia' => 8,
				'cod_municipio' => 85,
				'DC' => 0,
				'nombre' => 'Font-rubí',
			),
			234 => 
			array (
				'id' => 3735,
				'id_provincia' => 9,
				'cod_municipio' => 85,
				'DC' => 3,
				'nombre' => 'Castrillo de la Vega',
			),
			235 => 
			array (
				'id' => 3736,
				'id_provincia' => 10,
				'cod_municipio' => 85,
				'DC' => 7,
				'nombre' => 'Gordo, El',
			),
			236 => 
			array (
				'id' => 3737,
				'id_provincia' => 12,
				'cod_municipio' => 85,
				'DC' => 9,
				'nombre' => 'Oropesa del Mar/Orpesa',
			),
			237 => 
			array (
				'id' => 3738,
				'id_provincia' => 13,
				'cod_municipio' => 85,
				'DC' => 5,
				'nombre' => 'Torrenueva',
			),
			238 => 
			array (
				'id' => 3739,
				'id_provincia' => 15,
				'cod_municipio' => 85,
				'DC' => 3,
				'nombre' => 'Touro',
			),
			239 => 
			array (
				'id' => 3740,
				'id_provincia' => 16,
				'cod_municipio' => 85,
				'DC' => 6,
				'nombre' => 'Frontera, La',
			),
			240 => 
			array (
				'id' => 3741,
				'id_provincia' => 17,
				'cod_municipio' => 85,
				'DC' => 2,
				'nombre' => 'Jafre',
			),
			241 => 
			array (
				'id' => 3742,
				'id_provincia' => 18,
				'cod_municipio' => 85,
				'DC' => 8,
				'nombre' => 'Gor',
			),
			242 => 
			array (
				'id' => 3743,
				'id_provincia' => 22,
				'cod_municipio' => 85,
				'DC' => 7,
				'nombre' => 'Castelflorite',
			),
			243 => 
			array (
				'id' => 3744,
				'id_provincia' => 23,
				'cod_municipio' => 85,
				'DC' => 3,
				'nombre' => 'Torreblascopedro',
			),
			244 => 
			array (
				'id' => 3745,
				'id_provincia' => 25,
				'cod_municipio' => 85,
				'DC' => 1,
				'nombre' => 'Estaràs',
			),
			245 => 
			array (
				'id' => 3746,
				'id_provincia' => 28,
				'cod_municipio' => 85,
				'DC' => 6,
				'nombre' => 'Miraflores de la Sierra',
			),
			246 => 
			array (
				'id' => 3747,
				'id_provincia' => 29,
				'cod_municipio' => 85,
				'DC' => 9,
				'nombre' => 'Salares',
			),
			247 => 
			array (
				'id' => 3748,
				'id_provincia' => 31,
				'cod_municipio' => 85,
				'DC' => 0,
				'nombre' => 'Etxauri',
			),
			248 => 
			array (
				'id' => 3749,
				'id_provincia' => 32,
				'cod_municipio' => 85,
				'DC' => 5,
				'nombre' => 'Verín',
			),
			249 => 
			array (
				'id' => 3750,
				'id_provincia' => 37,
				'cod_municipio' => 85,
				'DC' => 8,
				'nombre' => 'Carbajosa de la Sagrada',
			),
			250 => 
			array (
				'id' => 3751,
				'id_provincia' => 39,
				'cod_municipio' => 85,
				'DC' => 7,
				'nombre' => 'Suances',
			),
			251 => 
			array (
				'id' => 3752,
				'id_provincia' => 41,
				'cod_municipio' => 85,
				'DC' => 8,
				'nombre' => 'Salteras',
			),
			252 => 
			array (
				'id' => 3753,
				'id_provincia' => 42,
				'cod_municipio' => 85,
				'DC' => 3,
				'nombre' => 'Fuentearmegil',
			),
			253 => 
			array (
				'id' => 3754,
				'id_provincia' => 43,
				'cod_municipio' => 85,
				'DC' => 9,
				'nombre' => 'Molar, El',
			),
			254 => 
			array (
				'id' => 3755,
				'id_provincia' => 44,
				'cod_municipio' => 85,
				'DC' => 4,
				'nombre' => 'Cosa',
			),
			255 => 
			array (
				'id' => 3756,
				'id_provincia' => 45,
				'cod_municipio' => 85,
				'DC' => 7,
				'nombre' => 'Lominchar',
			),
			256 => 
			array (
				'id' => 3757,
				'id_provincia' => 46,
				'cod_municipio' => 85,
				'DC' => 0,
				'nombre' => 'Carlet',
			),
			257 => 
			array (
				'id' => 3758,
				'id_provincia' => 47,
				'cod_municipio' => 85,
				'DC' => 6,
				'nombre' => 'Medina del Campo',
			),
			258 => 
			array (
				'id' => 3759,
				'id_provincia' => 48,
				'cod_municipio' => 85,
				'DC' => 2,
				'nombre' => 'Sopelana',
			),
			259 => 
			array (
				'id' => 3760,
				'id_provincia' => 49,
				'cod_municipio' => 85,
				'DC' => 5,
				'nombre' => 'Galende',
			),
			260 => 
			array (
				'id' => 3761,
				'id_provincia' => 50,
				'cod_municipio' => 85,
				'DC' => 8,
				'nombre' => 'Codo',
			),
			261 => 
			array (
				'id' => 3762,
				'id_provincia' => 2,
				'cod_municipio' => 86,
				'DC' => 4,
				'nombre' => 'Yeste',
			),
			262 => 
			array (
				'id' => 3763,
				'id_provincia' => 3,
				'cod_municipio' => 86,
				'DC' => 0,
				'nombre' => 'Millena',
			),
			263 => 
			array (
				'id' => 3764,
				'id_provincia' => 4,
				'cod_municipio' => 86,
				'DC' => 5,
				'nombre' => 'Sorbas',
			),
			264 => 
			array (
				'id' => 3765,
				'id_provincia' => 5,
				'cod_municipio' => 86,
				'DC' => 8,
				'nombre' => 'Gimialcón',
			),
			265 => 
			array (
				'id' => 3766,
				'id_provincia' => 6,
				'cod_municipio' => 86,
				'DC' => 1,
				'nombre' => 'Montemolín',
			),
			266 => 
			array (
				'id' => 3767,
				'id_provincia' => 8,
				'cod_municipio' => 86,
				'DC' => 3,
				'nombre' => 'Franqueses del Vallès, Les',
			),
			267 => 
			array (
				'id' => 3768,
				'id_provincia' => 9,
				'cod_municipio' => 86,
				'DC' => 6,
				'nombre' => 'Castrillo del Val',
			),
			268 => 
			array (
				'id' => 3769,
				'id_provincia' => 10,
				'cod_municipio' => 86,
				'DC' => 0,
				'nombre' => 'Granja, La',
			),
			269 => 
			array (
				'id' => 3770,
				'id_provincia' => 13,
				'cod_municipio' => 86,
				'DC' => 8,
				'nombre' => 'Valdemanco del Esteras',
			),
			270 => 
			array (
				'id' => 3771,
				'id_provincia' => 15,
				'cod_municipio' => 86,
				'DC' => 6,
				'nombre' => 'Trazo',
			),
			271 => 
			array (
				'id' => 3772,
				'id_provincia' => 16,
				'cod_municipio' => 86,
				'DC' => 9,
				'nombre' => 'Fuente de Pedro Naharro',
			),
			272 => 
			array (
				'id' => 3773,
				'id_provincia' => 17,
				'cod_municipio' => 86,
				'DC' => 5,
				'nombre' => 'Jonquera, La',
			),
			273 => 
			array (
				'id' => 3774,
				'id_provincia' => 18,
				'cod_municipio' => 86,
				'DC' => 1,
				'nombre' => 'Gorafe',
			),
			274 => 
			array (
				'id' => 3775,
				'id_provincia' => 19,
				'cod_municipio' => 86,
				'DC' => 4,
				'nombre' => 'Cifuentes',
			),
			275 => 
			array (
				'id' => 3776,
				'id_provincia' => 22,
				'cod_municipio' => 86,
				'DC' => 0,
				'nombre' => 'Castiello de Jaca',
			),
			276 => 
			array (
				'id' => 3777,
				'id_provincia' => 23,
				'cod_municipio' => 86,
				'DC' => 6,
				'nombre' => 'Torre del Campo',
			),
			277 => 
			array (
				'id' => 3778,
				'id_provincia' => 24,
				'cod_municipio' => 86,
				'DC' => 1,
				'nombre' => 'Joarilla de las Matas',
			),
			278 => 
			array (
				'id' => 3779,
				'id_provincia' => 25,
				'cod_municipio' => 86,
				'DC' => 4,
				'nombre' => 'Esterri d\'Àneu',
			),
			279 => 
			array (
				'id' => 3780,
				'id_provincia' => 26,
				'cod_municipio' => 86,
				'DC' => 7,
				'nombre' => 'Ledesma de la Cogolla',
			),
			280 => 
			array (
				'id' => 3781,
				'id_provincia' => 28,
				'cod_municipio' => 86,
				'DC' => 9,
				'nombre' => 'Molar, El',
			),
			281 => 
			array (
				'id' => 3782,
				'id_provincia' => 29,
				'cod_municipio' => 86,
				'DC' => 2,
				'nombre' => 'Sayalonga',
			),
			282 => 
			array (
				'id' => 3783,
				'id_provincia' => 31,
				'cod_municipio' => 86,
				'DC' => 3,
				'nombre' => 'Egüés',
			),
			283 => 
			array (
				'id' => 3784,
				'id_provincia' => 32,
				'cod_municipio' => 86,
				'DC' => 8,
				'nombre' => 'Viana do Bolo',
			),
			284 => 
			array (
				'id' => 3785,
				'id_provincia' => 34,
				'cod_municipio' => 86,
				'DC' => 9,
				'nombre' => 'Hontoria de Cerrato',
			),
			285 => 
			array (
				'id' => 3786,
				'id_provincia' => 37,
				'cod_municipio' => 86,
				'DC' => 1,
				'nombre' => 'Carpio de Azaba',
			),
			286 => 
			array (
				'id' => 3787,
				'id_provincia' => 39,
				'cod_municipio' => 86,
				'DC' => 0,
				'nombre' => 'Tojos, Los',
			),
			287 => 
			array (
				'id' => 3788,
				'id_provincia' => 40,
				'cod_municipio' => 86,
				'DC' => 4,
				'nombre' => 'Fuentepelayo',
			),
			288 => 
			array (
				'id' => 3789,
				'id_provincia' => 41,
				'cod_municipio' => 86,
				'DC' => 1,
				'nombre' => 'San Juan de Aznalfarache',
			),
			289 => 
			array (
				'id' => 3790,
				'id_provincia' => 42,
				'cod_municipio' => 86,
				'DC' => 6,
				'nombre' => 'Fuentecambrón',
			),
			290 => 
			array (
				'id' => 3791,
				'id_provincia' => 43,
				'cod_municipio' => 86,
				'DC' => 2,
				'nombre' => 'Montblanc',
			),
			291 => 
			array (
				'id' => 3792,
				'id_provincia' => 44,
				'cod_municipio' => 86,
				'DC' => 7,
				'nombre' => 'Cretas',
			),
			292 => 
			array (
				'id' => 3793,
				'id_provincia' => 45,
				'cod_municipio' => 86,
				'DC' => 0,
				'nombre' => 'Lucillos',
			),
			293 => 
			array (
				'id' => 3794,
				'id_provincia' => 46,
				'cod_municipio' => 86,
				'DC' => 3,
				'nombre' => 'Carrícola',
			),
			294 => 
			array (
				'id' => 3795,
				'id_provincia' => 47,
				'cod_municipio' => 86,
				'DC' => 9,
				'nombre' => 'Medina de Rioseco',
			),
			295 => 
			array (
				'id' => 3796,
				'id_provincia' => 48,
				'cod_municipio' => 86,
				'DC' => 5,
				'nombre' => 'Sopuerta',
			),
			296 => 
			array (
				'id' => 3797,
				'id_provincia' => 49,
				'cod_municipio' => 86,
				'DC' => 8,
				'nombre' => 'Gallegos del Pan',
			),
			297 => 
			array (
				'id' => 3798,
				'id_provincia' => 50,
				'cod_municipio' => 86,
				'DC' => 1,
				'nombre' => 'Codos',
			),
			298 => 
			array (
				'id' => 3799,
				'id_provincia' => 4,
				'cod_municipio' => 87,
				'DC' => 1,
				'nombre' => 'Suflí',
			),
			299 => 
			array (
				'id' => 3800,
				'id_provincia' => 5,
				'cod_municipio' => 87,
				'DC' => 4,
				'nombre' => 'Gotarrendura',
			),
			300 => 
			array (
				'id' => 3801,
				'id_provincia' => 6,
				'cod_municipio' => 87,
				'DC' => 7,
				'nombre' => 'Monterrubio de la Serena',
			),
			301 => 
			array (
				'id' => 3802,
				'id_provincia' => 8,
				'cod_municipio' => 87,
				'DC' => 9,
				'nombre' => 'Gallifa',
			),
			302 => 
			array (
				'id' => 3803,
				'id_provincia' => 10,
				'cod_municipio' => 87,
				'DC' => 6,
				'nombre' => 'Guadalupe',
			),
			303 => 
			array (
				'id' => 3804,
				'id_provincia' => 12,
				'cod_municipio' => 87,
				'DC' => 8,
				'nombre' => 'Palanques',
			),
			304 => 
			array (
				'id' => 3805,
				'id_provincia' => 13,
				'cod_municipio' => 87,
				'DC' => 4,
				'nombre' => 'Valdepeñas',
			),
			305 => 
			array (
				'id' => 3806,
				'id_provincia' => 15,
				'cod_municipio' => 87,
				'DC' => 2,
				'nombre' => 'Valdoviño',
			),
			306 => 
			array (
				'id' => 3807,
				'id_provincia' => 16,
				'cod_municipio' => 87,
				'DC' => 5,
				'nombre' => 'Fuentelespino de Haro',
			),
			307 => 
			array (
				'id' => 3808,
				'id_provincia' => 17,
				'cod_municipio' => 87,
				'DC' => 1,
				'nombre' => 'Juià',
			),
			308 => 
			array (
				'id' => 3809,
				'id_provincia' => 18,
				'cod_municipio' => 87,
				'DC' => 7,
				'nombre' => 'Granada',
			),
			309 => 
			array (
				'id' => 3810,
				'id_provincia' => 19,
				'cod_municipio' => 87,
				'DC' => 0,
				'nombre' => 'Cincovillas',
			),
			310 => 
			array (
				'id' => 3811,
				'id_provincia' => 22,
				'cod_municipio' => 87,
				'DC' => 6,
				'nombre' => 'Castigaleu',
			),
			311 => 
			array (
				'id' => 3812,
				'id_provincia' => 23,
				'cod_municipio' => 87,
				'DC' => 2,
				'nombre' => 'Torredonjimeno',
			),
			312 => 
			array (
				'id' => 3813,
				'id_provincia' => 24,
				'cod_municipio' => 87,
				'DC' => 7,
				'nombre' => 'Laguna Dalga',
			),
			313 => 
			array (
				'id' => 3814,
				'id_provincia' => 25,
				'cod_municipio' => 87,
				'DC' => 0,
				'nombre' => 'Esterri de Cardós',
			),
			314 => 
			array (
				'id' => 3815,
				'id_provincia' => 26,
				'cod_municipio' => 87,
				'DC' => 3,
				'nombre' => 'Leiva',
			),
			315 => 
			array (
				'id' => 3816,
				'id_provincia' => 28,
				'cod_municipio' => 87,
				'DC' => 5,
				'nombre' => 'Molinos, Los',
			),
			316 => 
			array (
				'id' => 3817,
				'id_provincia' => 29,
				'cod_municipio' => 87,
				'DC' => 8,
				'nombre' => 'Sedella',
			),
			317 => 
			array (
				'id' => 3818,
				'id_provincia' => 31,
				'cod_municipio' => 87,
				'DC' => 9,
				'nombre' => 'Elgorriaga',
			),
			318 => 
			array (
				'id' => 3819,
				'id_provincia' => 32,
				'cod_municipio' => 87,
				'DC' => 4,
				'nombre' => 'Vilamarín',
			),
			319 => 
			array (
				'id' => 3820,
				'id_provincia' => 34,
				'cod_municipio' => 87,
				'DC' => 5,
				'nombre' => 'Hornillos de Cerrato',
			),
			320 => 
			array (
				'id' => 3821,
				'id_provincia' => 37,
				'cod_municipio' => 87,
				'DC' => 7,
				'nombre' => 'Carrascal de Barregas',
			),
			321 => 
			array (
				'id' => 3822,
				'id_provincia' => 39,
				'cod_municipio' => 87,
				'DC' => 6,
				'nombre' => 'Torrelavega',
			),
			322 => 
			array (
				'id' => 3823,
				'id_provincia' => 40,
				'cod_municipio' => 87,
				'DC' => 0,
				'nombre' => 'Fuentepiñel',
			),
			323 => 
			array (
				'id' => 3824,
				'id_provincia' => 41,
				'cod_municipio' => 87,
				'DC' => 7,
				'nombre' => 'Sanlúcar la Mayor',
			),
			324 => 
			array (
				'id' => 3825,
				'id_provincia' => 42,
				'cod_municipio' => 87,
				'DC' => 2,
				'nombre' => 'Fuentecantos',
			),
			325 => 
			array (
				'id' => 3826,
				'id_provincia' => 44,
				'cod_municipio' => 87,
				'DC' => 3,
				'nombre' => 'Crivillén',
			),
			326 => 
			array (
				'id' => 3827,
				'id_provincia' => 45,
				'cod_municipio' => 87,
				'DC' => 6,
				'nombre' => 'Madridejos',
			),
			327 => 
			array (
				'id' => 3828,
				'id_provincia' => 46,
				'cod_municipio' => 87,
				'DC' => 9,
				'nombre' => 'Casas Altas',
			),
			328 => 
			array (
				'id' => 3829,
				'id_provincia' => 47,
				'cod_municipio' => 87,
				'DC' => 5,
				'nombre' => 'Megeces',
			),
			329 => 
			array (
				'id' => 3830,
				'id_provincia' => 48,
				'cod_municipio' => 87,
				'DC' => 1,
				'nombre' => 'Trucios-Turtzioz',
			),
			330 => 
			array (
				'id' => 3831,
				'id_provincia' => 49,
				'cod_municipio' => 87,
				'DC' => 4,
				'nombre' => 'Gallegos del Río',
			),
			331 => 
			array (
				'id' => 3832,
				'id_provincia' => 50,
				'cod_municipio' => 87,
				'DC' => 7,
				'nombre' => 'Contamina',
			),
			332 => 
			array (
				'id' => 3833,
				'id_provincia' => 3,
				'cod_municipio' => 88,
				'DC' => 2,
				'nombre' => 'Monforte del Cid',
			),
			333 => 
			array (
				'id' => 3834,
				'id_provincia' => 4,
				'cod_municipio' => 88,
				'DC' => 7,
				'nombre' => 'Tabernas',
			),
			334 => 
			array (
				'id' => 3835,
				'id_provincia' => 5,
				'cod_municipio' => 88,
				'DC' => 0,
				'nombre' => 'Grandes y San Martín',
			),
			335 => 
			array (
				'id' => 3836,
				'id_provincia' => 6,
				'cod_municipio' => 88,
				'DC' => 3,
				'nombre' => 'Montijo',
			),
			336 => 
			array (
				'id' => 3837,
				'id_provincia' => 8,
				'cod_municipio' => 88,
				'DC' => 5,
				'nombre' => 'Garriga, La',
			),
			337 => 
			array (
				'id' => 3838,
				'id_provincia' => 9,
				'cod_municipio' => 88,
				'DC' => 8,
				'nombre' => 'Castrillo de Riopisuerga',
			),
			338 => 
			array (
				'id' => 3839,
				'id_provincia' => 10,
				'cod_municipio' => 88,
				'DC' => 2,
				'nombre' => 'Guijo de Coria',
			),
			339 => 
			array (
				'id' => 3840,
				'id_provincia' => 12,
				'cod_municipio' => 88,
				'DC' => 4,
				'nombre' => 'Pavías',
			),
			340 => 
			array (
				'id' => 3841,
				'id_provincia' => 13,
				'cod_municipio' => 88,
				'DC' => 0,
				'nombre' => 'Valenzuela de Calatrava',
			),
			341 => 
			array (
				'id' => 3842,
				'id_provincia' => 15,
				'cod_municipio' => 88,
				'DC' => 8,
				'nombre' => 'Val do Dubra',
			),
			342 => 
			array (
				'id' => 3843,
				'id_provincia' => 16,
				'cod_municipio' => 88,
				'DC' => 1,
				'nombre' => 'Fuentelespino de Moya',
			),
			343 => 
			array (
				'id' => 3844,
				'id_provincia' => 17,
				'cod_municipio' => 88,
				'DC' => 7,
				'nombre' => 'Lladó',
			),
			344 => 
			array (
				'id' => 3845,
				'id_provincia' => 18,
				'cod_municipio' => 88,
				'DC' => 3,
				'nombre' => 'Guadahortuna',
			),
			345 => 
			array (
				'id' => 3846,
				'id_provincia' => 19,
				'cod_municipio' => 88,
				'DC' => 6,
				'nombre' => 'Ciruelas',
			),
			346 => 
			array (
				'id' => 3847,
				'id_provincia' => 22,
				'cod_municipio' => 88,
				'DC' => 2,
				'nombre' => 'Castillazuelo',
			),
			347 => 
			array (
				'id' => 3848,
				'id_provincia' => 23,
				'cod_municipio' => 88,
				'DC' => 8,
				'nombre' => 'Torreperogil',
			),
			348 => 
			array (
				'id' => 3849,
				'id_provincia' => 24,
				'cod_municipio' => 88,
				'DC' => 3,
				'nombre' => 'Laguna de Negrillos',
			),
			349 => 
			array (
				'id' => 3850,
				'id_provincia' => 25,
				'cod_municipio' => 88,
				'DC' => 6,
				'nombre' => 'Estamariu',
			),
			350 => 
			array (
				'id' => 3851,
				'id_provincia' => 26,
				'cod_municipio' => 88,
				'DC' => 9,
				'nombre' => 'Leza de Río Leza',
			),
			351 => 
			array (
				'id' => 3852,
				'id_provincia' => 28,
				'cod_municipio' => 88,
				'DC' => 1,
				'nombre' => 'Montejo de la Sierra',
			),
			352 => 
			array (
				'id' => 3853,
				'id_provincia' => 29,
				'cod_municipio' => 88,
				'DC' => 4,
				'nombre' => 'Sierra de Yeguas',
			),
			353 => 
			array (
				'id' => 3854,
				'id_provincia' => 31,
				'cod_municipio' => 88,
				'DC' => 5,
			'nombre' => 'Noáin (Valle de Elorz)/Noain (Elortzibar)',
			),
			354 => 
			array (
				'id' => 3855,
				'id_provincia' => 32,
				'cod_municipio' => 88,
				'DC' => 0,
				'nombre' => 'Vilamartín de Valdeorras',
			),
			355 => 
			array (
				'id' => 3856,
				'id_provincia' => 34,
				'cod_municipio' => 88,
				'DC' => 1,
				'nombre' => 'Husillos',
			),
			356 => 
			array (
				'id' => 3857,
				'id_provincia' => 37,
				'cod_municipio' => 88,
				'DC' => 3,
				'nombre' => 'Carrascal del Obispo',
			),
			357 => 
			array (
				'id' => 3858,
				'id_provincia' => 39,
				'cod_municipio' => 88,
				'DC' => 2,
				'nombre' => 'Tresviso',
			),
			358 => 
			array (
				'id' => 3859,
				'id_provincia' => 40,
				'cod_municipio' => 88,
				'DC' => 6,
				'nombre' => 'Fuenterrebollo',
			),
			359 => 
			array (
				'id' => 3860,
				'id_provincia' => 41,
				'cod_municipio' => 88,
				'DC' => 3,
				'nombre' => 'San Nicolás del Puerto',
			),
			360 => 
			array (
				'id' => 3861,
				'id_provincia' => 42,
				'cod_municipio' => 88,
				'DC' => 8,
				'nombre' => 'Fuentelmonge',
			),
			361 => 
			array (
				'id' => 3862,
				'id_provincia' => 43,
				'cod_municipio' => 88,
				'DC' => 4,
				'nombre' => 'Montbrió del Camp',
			),
			362 => 
			array (
				'id' => 3863,
				'id_provincia' => 44,
				'cod_municipio' => 88,
				'DC' => 9,
				'nombre' => 'Cuba, La',
			),
			363 => 
			array (
				'id' => 3864,
				'id_provincia' => 45,
				'cod_municipio' => 88,
				'DC' => 2,
				'nombre' => 'Magán',
			),
			364 => 
			array (
				'id' => 3865,
				'id_provincia' => 46,
				'cod_municipio' => 88,
				'DC' => 5,
				'nombre' => 'Casas Bajas',
			),
			365 => 
			array (
				'id' => 3866,
				'id_provincia' => 47,
				'cod_municipio' => 88,
				'DC' => 1,
				'nombre' => 'Melgar de Abajo',
			),
			366 => 
			array (
				'id' => 3867,
				'id_provincia' => 48,
				'cod_municipio' => 88,
				'DC' => 7,
				'nombre' => 'Ubide',
			),
			367 => 
			array (
				'id' => 3868,
				'id_provincia' => 49,
				'cod_municipio' => 88,
				'DC' => 0,
				'nombre' => 'Gamones',
			),
			368 => 
			array (
				'id' => 3869,
				'id_provincia' => 50,
				'cod_municipio' => 88,
				'DC' => 3,
				'nombre' => 'Cosuenda',
			),
			369 => 
			array (
				'id' => 3870,
				'id_provincia' => 3,
				'cod_municipio' => 89,
				'DC' => 5,
				'nombre' => 'Monóvar/Monòver',
			),
			370 => 
			array (
				'id' => 3871,
				'id_provincia' => 4,
				'cod_municipio' => 89,
				'DC' => 0,
				'nombre' => 'Taberno',
			),
			371 => 
			array (
				'id' => 3872,
				'id_provincia' => 5,
				'cod_municipio' => 89,
				'DC' => 3,
				'nombre' => 'Guisando',
			),
			372 => 
			array (
				'id' => 3873,
				'id_provincia' => 6,
				'cod_municipio' => 89,
				'DC' => 6,
				'nombre' => 'Morera, La',
			),
			373 => 
			array (
				'id' => 3874,
				'id_provincia' => 8,
				'cod_municipio' => 89,
				'DC' => 8,
				'nombre' => 'Gavà',
			),
			374 => 
			array (
				'id' => 3875,
				'id_provincia' => 10,
				'cod_municipio' => 89,
				'DC' => 5,
				'nombre' => 'Guijo de Galisteo',
			),
			375 => 
			array (
				'id' => 3876,
				'id_provincia' => 12,
				'cod_municipio' => 89,
				'DC' => 7,
				'nombre' => 'Peníscola/Peñíscola',
			),
			376 => 
			array (
				'id' => 3877,
				'id_provincia' => 13,
				'cod_municipio' => 89,
				'DC' => 3,
				'nombre' => 'Villahermosa',
			),
			377 => 
			array (
				'id' => 3878,
				'id_provincia' => 15,
				'cod_municipio' => 89,
				'DC' => 1,
				'nombre' => 'Vedra',
			),
			378 => 
			array (
				'id' => 3879,
				'id_provincia' => 16,
				'cod_municipio' => 89,
				'DC' => 4,
				'nombre' => 'Fuentes',
			),
			379 => 
			array (
				'id' => 3880,
				'id_provincia' => 17,
				'cod_municipio' => 89,
				'DC' => 0,
				'nombre' => 'Llagostera',
			),
			380 => 
			array (
				'id' => 3881,
				'id_provincia' => 18,
				'cod_municipio' => 89,
				'DC' => 6,
				'nombre' => 'Guadix',
			),
			381 => 
			array (
				'id' => 3882,
				'id_provincia' => 19,
				'cod_municipio' => 89,
				'DC' => 9,
				'nombre' => 'Ciruelos del Pinar',
			),
			382 => 
			array (
				'id' => 3883,
				'id_provincia' => 22,
				'cod_municipio' => 89,
				'DC' => 5,
				'nombre' => 'Castillonroy',
			),
			383 => 
			array (
				'id' => 3884,
				'id_provincia' => 24,
				'cod_municipio' => 89,
				'DC' => 6,
				'nombre' => 'León',
			),
			384 => 
			array (
				'id' => 3885,
				'id_provincia' => 25,
				'cod_municipio' => 89,
				'DC' => 9,
				'nombre' => 'Farrera',
			),
			385 => 
			array (
				'id' => 3886,
				'id_provincia' => 26,
				'cod_municipio' => 89,
				'DC' => 2,
				'nombre' => 'Logroño',
			),
			386 => 
			array (
				'id' => 3887,
				'id_provincia' => 28,
				'cod_municipio' => 89,
				'DC' => 4,
				'nombre' => 'Moraleja de Enmedio',
			),
			387 => 
			array (
				'id' => 3888,
				'id_provincia' => 29,
				'cod_municipio' => 89,
				'DC' => 7,
				'nombre' => 'Teba',
			),
			388 => 
			array (
				'id' => 3889,
				'id_provincia' => 31,
				'cod_municipio' => 89,
				'DC' => 8,
				'nombre' => 'Enériz/Eneritz',
			),
			389 => 
			array (
				'id' => 3890,
				'id_provincia' => 32,
				'cod_municipio' => 89,
				'DC' => 3,
				'nombre' => 'Vilar de Barrio',
			),
			390 => 
			array (
				'id' => 3891,
				'id_provincia' => 34,
				'cod_municipio' => 89,
				'DC' => 4,
				'nombre' => 'Itero de la Vega',
			),
			391 => 
			array (
				'id' => 3892,
				'id_provincia' => 37,
				'cod_municipio' => 89,
				'DC' => 6,
				'nombre' => 'Casafranca',
			),
			392 => 
			array (
				'id' => 3893,
				'id_provincia' => 39,
				'cod_municipio' => 89,
				'DC' => 5,
				'nombre' => 'Tudanca',
			),
			393 => 
			array (
				'id' => 3894,
				'id_provincia' => 40,
				'cod_municipio' => 89,
				'DC' => 9,
				'nombre' => 'Fuentesaúco de Fuentidueña',
			),
			394 => 
			array (
				'id' => 3895,
				'id_provincia' => 41,
				'cod_municipio' => 89,
				'DC' => 6,
				'nombre' => 'Santiponce',
			),
			395 => 
			array (
				'id' => 3896,
				'id_provincia' => 42,
				'cod_municipio' => 89,
				'DC' => 1,
				'nombre' => 'Fuentelsaz de Soria',
			),
			396 => 
			array (
				'id' => 3897,
				'id_provincia' => 43,
				'cod_municipio' => 89,
				'DC' => 7,
				'nombre' => 'Montferri',
			),
			397 => 
			array (
				'id' => 3898,
				'id_provincia' => 44,
				'cod_municipio' => 89,
				'DC' => 2,
				'nombre' => 'Cubla',
			),
			398 => 
			array (
				'id' => 3899,
				'id_provincia' => 45,
				'cod_municipio' => 89,
				'DC' => 5,
				'nombre' => 'Malpica de Tajo',
			),
			399 => 
			array (
				'id' => 3900,
				'id_provincia' => 46,
				'cod_municipio' => 89,
				'DC' => 8,
				'nombre' => 'Casinos',
			),
			400 => 
			array (
				'id' => 3901,
				'id_provincia' => 47,
				'cod_municipio' => 89,
				'DC' => 4,
				'nombre' => 'Melgar de Arriba',
			),
			401 => 
			array (
				'id' => 3902,
				'id_provincia' => 48,
				'cod_municipio' => 89,
				'DC' => 0,
				'nombre' => 'Urduliz',
			),
			402 => 
			array (
				'id' => 3903,
				'id_provincia' => 50,
				'cod_municipio' => 89,
				'DC' => 6,
				'nombre' => 'Cuarte de Huerva',
			),
			403 => 
			array (
				'id' => 3904,
				'id_provincia' => 3,
				'cod_municipio' => 90,
				'DC' => 9,
				'nombre' => 'Mutxamel',
			),
			404 => 
			array (
				'id' => 3905,
				'id_provincia' => 4,
				'cod_municipio' => 90,
				'DC' => 4,
				'nombre' => 'Tahal',
			),
			405 => 
			array (
				'id' => 3906,
				'id_provincia' => 5,
				'cod_municipio' => 90,
				'DC' => 7,
				'nombre' => 'Gutierre-Muñoz',
			),
			406 => 
			array (
				'id' => 3907,
				'id_provincia' => 6,
				'cod_municipio' => 90,
				'DC' => 0,
				'nombre' => 'Nava de Santiago, La',
			),
			407 => 
			array (
				'id' => 3908,
				'id_provincia' => 8,
				'cod_municipio' => 90,
				'DC' => 2,
				'nombre' => 'Gaià',
			),
			408 => 
			array (
				'id' => 3909,
				'id_provincia' => 9,
				'cod_municipio' => 90,
				'DC' => 5,
				'nombre' => 'Castrillo Matajudíos',
			),
			409 => 
			array (
				'id' => 3910,
				'id_provincia' => 10,
				'cod_municipio' => 90,
				'DC' => 9,
				'nombre' => 'Guijo de Granadilla',
			),
			410 => 
			array (
				'id' => 3911,
				'id_provincia' => 12,
				'cod_municipio' => 90,
				'DC' => 1,
				'nombre' => 'Pina de Montalgrao',
			),
			411 => 
			array (
				'id' => 3912,
				'id_provincia' => 13,
				'cod_municipio' => 90,
				'DC' => 7,
				'nombre' => 'Villamanrique',
			),
			412 => 
			array (
				'id' => 3913,
				'id_provincia' => 15,
				'cod_municipio' => 90,
				'DC' => 5,
				'nombre' => 'Vilasantar',
			),
			413 => 
			array (
				'id' => 3914,
				'id_provincia' => 17,
				'cod_municipio' => 90,
				'DC' => 4,
				'nombre' => 'Llambilles',
			),
			414 => 
			array (
				'id' => 3915,
				'id_provincia' => 19,
				'cod_municipio' => 90,
				'DC' => 3,
				'nombre' => 'Cobeta',
			),
			415 => 
			array (
				'id' => 3916,
				'id_provincia' => 22,
				'cod_municipio' => 90,
				'DC' => 9,
				'nombre' => 'Colungo',
			),
			416 => 
			array (
				'id' => 3917,
				'id_provincia' => 23,
				'cod_municipio' => 90,
				'DC' => 5,
				'nombre' => 'Torres',
			),
			417 => 
			array (
				'id' => 3918,
				'id_provincia' => 24,
				'cod_municipio' => 90,
				'DC' => 0,
				'nombre' => 'Lucillo',
			),
			418 => 
			array (
				'id' => 3919,
				'id_provincia' => 28,
				'cod_municipio' => 90,
				'DC' => 8,
				'nombre' => 'Moralzarzal',
			),
			419 => 
			array (
				'id' => 3920,
				'id_provincia' => 29,
				'cod_municipio' => 90,
				'DC' => 1,
				'nombre' => 'Tolox',
			),
			420 => 
			array (
				'id' => 3921,
				'id_provincia' => 31,
				'cod_municipio' => 90,
				'DC' => 2,
				'nombre' => 'Eratsun',
			),
			421 => 
			array (
				'id' => 3922,
				'id_provincia' => 32,
				'cod_municipio' => 90,
				'DC' => 7,
				'nombre' => 'Vilar de Santos',
			),
			422 => 
			array (
				'id' => 3923,
				'id_provincia' => 37,
				'cod_municipio' => 90,
				'DC' => 0,
				'nombre' => 'Casas del Conde, Las',
			),
			423 => 
			array (
				'id' => 3924,
				'id_provincia' => 39,
				'cod_municipio' => 90,
				'DC' => 9,
				'nombre' => 'Udías',
			),
			424 => 
			array (
				'id' => 3925,
				'id_provincia' => 41,
				'cod_municipio' => 90,
				'DC' => 0,
				'nombre' => 'Saucejo, El',
			),
			425 => 
			array (
				'id' => 3926,
				'id_provincia' => 42,
				'cod_municipio' => 90,
				'DC' => 5,
				'nombre' => 'Fuentepinilla',
			),
			426 => 
			array (
				'id' => 3927,
				'id_provincia' => 43,
				'cod_municipio' => 90,
				'DC' => 1,
				'nombre' => 'Montmell, El',
			),
			427 => 
			array (
				'id' => 3928,
				'id_provincia' => 44,
				'cod_municipio' => 90,
				'DC' => 6,
				'nombre' => 'Cucalón',
			),
			428 => 
			array (
				'id' => 3929,
				'id_provincia' => 45,
				'cod_municipio' => 90,
				'DC' => 9,
				'nombre' => 'Manzaneque',
			),
			429 => 
			array (
				'id' => 3930,
				'id_provincia' => 46,
				'cod_municipio' => 90,
				'DC' => 2,
				'nombre' => 'Castelló de Rugat',
			),
			430 => 
			array (
				'id' => 3931,
				'id_provincia' => 47,
				'cod_municipio' => 90,
				'DC' => 8,
				'nombre' => 'Mojados',
			),
			431 => 
			array (
				'id' => 3932,
				'id_provincia' => 48,
				'cod_municipio' => 90,
				'DC' => 4,
				'nombre' => 'Balmaseda',
			),
			432 => 
			array (
				'id' => 3933,
				'id_provincia' => 49,
				'cod_municipio' => 90,
				'DC' => 7,
				'nombre' => 'Gema',
			),
			433 => 
			array (
				'id' => 3934,
				'id_provincia' => 50,
				'cod_municipio' => 90,
				'DC' => 0,
				'nombre' => 'Cubel',
			),
			434 => 
			array (
				'id' => 3935,
				'id_provincia' => 3,
				'cod_municipio' => 91,
				'DC' => 6,
				'nombre' => 'Murla',
			),
			435 => 
			array (
				'id' => 3936,
				'id_provincia' => 4,
				'cod_municipio' => 91,
				'DC' => 1,
				'nombre' => 'Terque',
			),
			436 => 
			array (
				'id' => 3937,
				'id_provincia' => 6,
				'cod_municipio' => 91,
				'DC' => 7,
				'nombre' => 'Navalvillar de Pela',
			),
			437 => 
			array (
				'id' => 3938,
				'id_provincia' => 8,
				'cod_municipio' => 91,
				'DC' => 9,
				'nombre' => 'Gelida',
			),
			438 => 
			array (
				'id' => 3939,
				'id_provincia' => 9,
				'cod_municipio' => 91,
				'DC' => 2,
				'nombre' => 'Castrojeriz',
			),
			439 => 
			array (
				'id' => 3940,
				'id_provincia' => 10,
				'cod_municipio' => 91,
				'DC' => 6,
				'nombre' => 'Guijo de Santa Bárbara',
			),
			440 => 
			array (
				'id' => 3941,
				'id_provincia' => 12,
				'cod_municipio' => 91,
				'DC' => 8,
				'nombre' => 'Portell de Morella',
			),
			441 => 
			array (
				'id' => 3942,
				'id_provincia' => 13,
				'cod_municipio' => 91,
				'DC' => 4,
				'nombre' => 'Villamayor de Calatrava',
			),
			442 => 
			array (
				'id' => 3943,
				'id_provincia' => 15,
				'cod_municipio' => 91,
				'DC' => 2,
				'nombre' => 'Vilarmaior',
			),
			443 => 
			array (
				'id' => 3944,
				'id_provincia' => 16,
				'cod_municipio' => 91,
				'DC' => 5,
				'nombre' => 'Fuertescusa',
			),
			444 => 
			array (
				'id' => 3945,
				'id_provincia' => 17,
				'cod_municipio' => 91,
				'DC' => 1,
				'nombre' => 'Llanars',
			),
			445 => 
			array (
				'id' => 3946,
				'id_provincia' => 19,
				'cod_municipio' => 91,
				'DC' => 0,
				'nombre' => 'Cogollor',
			),
			446 => 
			array (
				'id' => 3947,
				'id_provincia' => 23,
				'cod_municipio' => 91,
				'DC' => 2,
				'nombre' => 'Torres de Albánchez',
			),
			447 => 
			array (
				'id' => 3948,
				'id_provincia' => 24,
				'cod_municipio' => 91,
				'DC' => 7,
				'nombre' => 'Luyego',
			),
			448 => 
			array (
				'id' => 3949,
				'id_provincia' => 26,
				'cod_municipio' => 91,
				'DC' => 3,
				'nombre' => 'Lumbreras',
			),
			449 => 
			array (
				'id' => 3950,
				'id_provincia' => 28,
				'cod_municipio' => 91,
				'DC' => 5,
				'nombre' => 'Morata de Tajuña',
			),
			450 => 
			array (
				'id' => 3951,
				'id_provincia' => 29,
				'cod_municipio' => 91,
				'DC' => 8,
				'nombre' => 'Torrox',
			),
			451 => 
			array (
				'id' => 3952,
				'id_provincia' => 31,
				'cod_municipio' => 91,
				'DC' => 9,
				'nombre' => 'Ergoiena',
			),
			452 => 
			array (
				'id' => 3953,
				'id_provincia' => 32,
				'cod_municipio' => 91,
				'DC' => 4,
				'nombre' => 'Vilardevós',
			),
			453 => 
			array (
				'id' => 3954,
				'id_provincia' => 34,
				'cod_municipio' => 91,
				'DC' => 5,
				'nombre' => 'Lagartos',
			),
			454 => 
			array (
				'id' => 3955,
				'id_provincia' => 37,
				'cod_municipio' => 91,
				'DC' => 7,
				'nombre' => 'Casillas de Flores',
			),
			455 => 
			array (
				'id' => 3956,
				'id_provincia' => 39,
				'cod_municipio' => 91,
				'DC' => 6,
				'nombre' => 'Valdáliga',
			),
			456 => 
			array (
				'id' => 3957,
				'id_provincia' => 40,
				'cod_municipio' => 91,
				'DC' => 0,
				'nombre' => 'Fuentesoto',
			),
			457 => 
			array (
				'id' => 3958,
				'id_provincia' => 41,
				'cod_municipio' => 91,
				'DC' => 7,
				'nombre' => 'Sevilla',
			),
			458 => 
			array (
				'id' => 3959,
				'id_provincia' => 43,
				'cod_municipio' => 91,
				'DC' => 8,
				'nombre' => 'Mont-ral',
			),
			459 => 
			array (
				'id' => 3960,
				'id_provincia' => 45,
				'cod_municipio' => 91,
				'DC' => 6,
				'nombre' => 'Maqueda',
			),
			460 => 
			array (
				'id' => 3961,
				'id_provincia' => 46,
				'cod_municipio' => 91,
				'DC' => 9,
				'nombre' => 'Castellonet de la Conquesta',
			),
			461 => 
			array (
				'id' => 3962,
				'id_provincia' => 47,
				'cod_municipio' => 91,
				'DC' => 5,
				'nombre' => 'Monasterio de Vega',
			),
			462 => 
			array (
				'id' => 3963,
				'id_provincia' => 48,
				'cod_municipio' => 91,
				'DC' => 1,
				'nombre' => 'Atxondo',
			),
			463 => 
			array (
				'id' => 3964,
				'id_provincia' => 49,
				'cod_municipio' => 91,
				'DC' => 4,
				'nombre' => 'Granja de Moreruela',
			),
			464 => 
			array (
				'id' => 3965,
				'id_provincia' => 50,
				'cod_municipio' => 91,
				'DC' => 7,
				'nombre' => 'Cuerlas, Las',
			),
			465 => 
			array (
				'id' => 3966,
				'id_provincia' => 3,
				'cod_municipio' => 92,
				'DC' => 1,
				'nombre' => 'Muro de Alcoy',
			),
			466 => 
			array (
				'id' => 3967,
				'id_provincia' => 4,
				'cod_municipio' => 92,
				'DC' => 6,
				'nombre' => 'Tíjola',
			),
			467 => 
			array (
				'id' => 3968,
				'id_provincia' => 5,
				'cod_municipio' => 92,
				'DC' => 9,
				'nombre' => 'Hernansancho',
			),
			468 => 
			array (
				'id' => 3969,
				'id_provincia' => 6,
				'cod_municipio' => 92,
				'DC' => 2,
				'nombre' => 'Nogales',
			),
			469 => 
			array (
				'id' => 3970,
				'id_provincia' => 8,
				'cod_municipio' => 92,
				'DC' => 4,
				'nombre' => 'Gironella',
			),
			470 => 
			array (
				'id' => 3971,
				'id_provincia' => 10,
				'cod_municipio' => 92,
				'DC' => 1,
				'nombre' => 'Herguijuela',
			),
			471 => 
			array (
				'id' => 3972,
				'id_provincia' => 12,
				'cod_municipio' => 92,
				'DC' => 3,
				'nombre' => 'Puebla de Arenoso',
			),
			472 => 
			array (
				'id' => 3973,
				'id_provincia' => 13,
				'cod_municipio' => 92,
				'DC' => 9,
				'nombre' => 'Villanueva de la Fuente',
			),
			473 => 
			array (
				'id' => 3974,
				'id_provincia' => 15,
				'cod_municipio' => 92,
				'DC' => 7,
				'nombre' => 'Vimianzo',
			),
			474 => 
			array (
				'id' => 3975,
				'id_provincia' => 16,
				'cod_municipio' => 92,
				'DC' => 0,
				'nombre' => 'Gabaldón',
			),
			475 => 
			array (
				'id' => 3976,
				'id_provincia' => 17,
				'cod_municipio' => 92,
				'DC' => 6,
				'nombre' => 'Llançà',
			),
			476 => 
			array (
				'id' => 3977,
				'id_provincia' => 19,
				'cod_municipio' => 92,
				'DC' => 5,
				'nombre' => 'Cogolludo',
			),
			477 => 
			array (
				'id' => 3978,
				'id_provincia' => 23,
				'cod_municipio' => 92,
				'DC' => 7,
				'nombre' => 'Úbeda',
			),
			478 => 
			array (
				'id' => 3979,
				'id_provincia' => 24,
				'cod_municipio' => 92,
				'DC' => 2,
				'nombre' => 'Llamas de la Ribera',
			),
			479 => 
			array (
				'id' => 3980,
				'id_provincia' => 25,
				'cod_municipio' => 92,
				'DC' => 5,
				'nombre' => 'Floresta, La',
			),
			480 => 
			array (
				'id' => 3981,
				'id_provincia' => 26,
				'cod_municipio' => 92,
				'DC' => 8,
				'nombre' => 'Manjarrés',
			),
			481 => 
			array (
				'id' => 3982,
				'id_provincia' => 28,
				'cod_municipio' => 92,
				'DC' => 0,
				'nombre' => 'Móstoles',
			),
			482 => 
			array (
				'id' => 3983,
				'id_provincia' => 29,
				'cod_municipio' => 92,
				'DC' => 3,
				'nombre' => 'Totalán',
			),
			483 => 
			array (
				'id' => 3984,
				'id_provincia' => 31,
				'cod_municipio' => 92,
				'DC' => 4,
				'nombre' => 'Erro',
			),
			484 => 
			array (
				'id' => 3985,
				'id_provincia' => 32,
				'cod_municipio' => 92,
				'DC' => 9,
				'nombre' => 'Vilariño de Conso',
			),
			485 => 
			array (
				'id' => 3986,
				'id_provincia' => 34,
				'cod_municipio' => 92,
				'DC' => 0,
				'nombre' => 'Lantadilla',
			),
			486 => 
			array (
				'id' => 3987,
				'id_provincia' => 37,
				'cod_municipio' => 92,
				'DC' => 2,
				'nombre' => 'Castellanos de Moriscos',
			),
			487 => 
			array (
				'id' => 3988,
				'id_provincia' => 39,
				'cod_municipio' => 92,
				'DC' => 1,
				'nombre' => 'Valdeolea',
			),
			488 => 
			array (
				'id' => 3989,
				'id_provincia' => 40,
				'cod_municipio' => 92,
				'DC' => 5,
				'nombre' => 'Fuentidueña',
			),
			489 => 
			array (
				'id' => 3990,
				'id_provincia' => 41,
				'cod_municipio' => 92,
				'DC' => 2,
				'nombre' => 'Tocina',
			),
			490 => 
			array (
				'id' => 3991,
				'id_provincia' => 42,
				'cod_municipio' => 92,
				'DC' => 7,
				'nombre' => 'Fuentes de Magaña',
			),
			491 => 
			array (
				'id' => 3992,
				'id_provincia' => 43,
				'cod_municipio' => 92,
				'DC' => 3,
				'nombre' => 'Mont-roig del Camp',
			),
			492 => 
			array (
				'id' => 3993,
				'id_provincia' => 44,
				'cod_municipio' => 92,
				'DC' => 8,
				'nombre' => 'Cuervo, El',
			),
			493 => 
			array (
				'id' => 3994,
				'id_provincia' => 45,
				'cod_municipio' => 92,
				'DC' => 1,
				'nombre' => 'Marjaliza',
			),
			494 => 
			array (
				'id' => 3995,
				'id_provincia' => 46,
				'cod_municipio' => 92,
				'DC' => 4,
				'nombre' => 'Castielfabib',
			),
			495 => 
			array (
				'id' => 3996,
				'id_provincia' => 47,
				'cod_municipio' => 92,
				'DC' => 0,
				'nombre' => 'Montealegre de Campos',
			),
			496 => 
			array (
				'id' => 3997,
				'id_provincia' => 48,
				'cod_municipio' => 92,
				'DC' => 6,
				'nombre' => 'Bedia',
			),
			497 => 
			array (
				'id' => 3998,
				'id_provincia' => 49,
				'cod_municipio' => 92,
				'DC' => 9,
				'nombre' => 'Granucillo',
			),
			498 => 
			array (
				'id' => 3999,
				'id_provincia' => 50,
				'cod_municipio' => 92,
				'DC' => 2,
				'nombre' => 'Chiprana',
			),
			499 => 
			array (
				'id' => 4000,
				'id_provincia' => 3,
				'cod_municipio' => 93,
				'DC' => 7,
				'nombre' => 'Novelda',
			),
		));
		\DB::table('municipios')->insert(array (
			0 => 
			array (
				'id' => 4001,
				'id_provincia' => 4,
				'cod_municipio' => 93,
				'DC' => 2,
				'nombre' => 'Turre',
			),
			1 => 
			array (
				'id' => 4002,
				'id_provincia' => 5,
				'cod_municipio' => 93,
				'DC' => 5,
				'nombre' => 'Herradón de Pinares',
			),
			2 => 
			array (
				'id' => 4003,
				'id_provincia' => 6,
				'cod_municipio' => 93,
				'DC' => 8,
				'nombre' => 'Oliva de la Frontera',
			),
			3 => 
			array (
				'id' => 4004,
				'id_provincia' => 8,
				'cod_municipio' => 93,
				'DC' => 0,
				'nombre' => 'Gisclareny',
			),
			4 => 
			array (
				'id' => 4005,
				'id_provincia' => 9,
				'cod_municipio' => 93,
				'DC' => 3,
				'nombre' => 'Cayuela',
			),
			5 => 
			array (
				'id' => 4006,
				'id_provincia' => 10,
				'cod_municipio' => 93,
				'DC' => 7,
				'nombre' => 'Hernán-Pérez',
			),
			6 => 
			array (
				'id' => 4007,
				'id_provincia' => 12,
				'cod_municipio' => 93,
				'DC' => 9,
				'nombre' => 'Pobla de Benifassà, la',
			),
			7 => 
			array (
				'id' => 4008,
				'id_provincia' => 13,
				'cod_municipio' => 93,
				'DC' => 5,
				'nombre' => 'Villanueva de los Infantes',
			),
			8 => 
			array (
				'id' => 4009,
				'id_provincia' => 15,
				'cod_municipio' => 93,
				'DC' => 3,
				'nombre' => 'Zas',
			),
			9 => 
			array (
				'id' => 4010,
				'id_provincia' => 16,
				'cod_municipio' => 93,
				'DC' => 6,
				'nombre' => 'Garaballa',
			),
			10 => 
			array (
				'id' => 4011,
				'id_provincia' => 17,
				'cod_municipio' => 93,
				'DC' => 2,
				'nombre' => 'Llers',
			),
			11 => 
			array (
				'id' => 4012,
				'id_provincia' => 18,
				'cod_municipio' => 93,
				'DC' => 8,
				'nombre' => 'Gualchos',
			),
			12 => 
			array (
				'id' => 4013,
				'id_provincia' => 23,
				'cod_municipio' => 93,
				'DC' => 3,
				'nombre' => 'Valdepeñas de Jaén',
			),
			13 => 
			array (
				'id' => 4014,
				'id_provincia' => 24,
				'cod_municipio' => 93,
				'DC' => 8,
				'nombre' => 'Magaz de Cepeda',
			),
			14 => 
			array (
				'id' => 4015,
				'id_provincia' => 25,
				'cod_municipio' => 93,
				'DC' => 1,
				'nombre' => 'Fondarella',
			),
			15 => 
			array (
				'id' => 4016,
				'id_provincia' => 26,
				'cod_municipio' => 93,
				'DC' => 4,
				'nombre' => 'Mansilla de la Sierra',
			),
			16 => 
			array (
				'id' => 4017,
				'id_provincia' => 28,
				'cod_municipio' => 93,
				'DC' => 6,
				'nombre' => 'Navacerrada',
			),
			17 => 
			array (
				'id' => 4018,
				'id_provincia' => 29,
				'cod_municipio' => 93,
				'DC' => 9,
				'nombre' => 'Valle de Abdalajís',
			),
			18 => 
			array (
				'id' => 4019,
				'id_provincia' => 31,
				'cod_municipio' => 93,
				'DC' => 0,
				'nombre' => 'Ezcároz/Ezkaroze',
			),
			19 => 
			array (
				'id' => 4020,
				'id_provincia' => 34,
				'cod_municipio' => 93,
				'DC' => 6,
				'nombre' => 'Vid de Ojeda, La',
			),
			20 => 
			array (
				'id' => 4021,
				'id_provincia' => 39,
				'cod_municipio' => 93,
				'DC' => 7,
				'nombre' => 'Valdeprado del Río',
			),
			21 => 
			array (
				'id' => 4022,
				'id_provincia' => 40,
				'cod_municipio' => 93,
				'DC' => 1,
				'nombre' => 'Gallegos',
			),
			22 => 
			array (
				'id' => 4023,
				'id_provincia' => 41,
				'cod_municipio' => 93,
				'DC' => 8,
				'nombre' => 'Tomares',
			),
			23 => 
			array (
				'id' => 4024,
				'id_provincia' => 42,
				'cod_municipio' => 93,
				'DC' => 3,
				'nombre' => 'Fuentestrún',
			),
			24 => 
			array (
				'id' => 4025,
				'id_provincia' => 43,
				'cod_municipio' => 93,
				'DC' => 9,
				'nombre' => 'Móra d\'Ebre',
			),
			25 => 
			array (
				'id' => 4026,
				'id_provincia' => 44,
				'cod_municipio' => 93,
				'DC' => 4,
				'nombre' => 'Cuevas de Almudén',
			),
			26 => 
			array (
				'id' => 4027,
				'id_provincia' => 45,
				'cod_municipio' => 93,
				'DC' => 7,
				'nombre' => 'Marrupe',
			),
			27 => 
			array (
				'id' => 4028,
				'id_provincia' => 46,
				'cod_municipio' => 93,
				'DC' => 0,
				'nombre' => 'Catadau',
			),
			28 => 
			array (
				'id' => 4029,
				'id_provincia' => 47,
				'cod_municipio' => 93,
				'DC' => 6,
				'nombre' => 'Montemayor de Pililla',
			),
			29 => 
			array (
				'id' => 4030,
				'id_provincia' => 48,
				'cod_municipio' => 93,
				'DC' => 2,
				'nombre' => 'Areatza',
			),
			30 => 
			array (
				'id' => 4031,
				'id_provincia' => 49,
				'cod_municipio' => 93,
				'DC' => 5,
				'nombre' => 'Guarrate',
			),
			31 => 
			array (
				'id' => 4032,
				'id_provincia' => 50,
				'cod_municipio' => 93,
				'DC' => 8,
				'nombre' => 'Chodes',
			),
			32 => 
			array (
				'id' => 4033,
				'id_provincia' => 3,
				'cod_municipio' => 94,
				'DC' => 2,
				'nombre' => 'Nucia, la',
			),
			33 => 
			array (
				'id' => 4034,
				'id_provincia' => 4,
				'cod_municipio' => 94,
				'DC' => 7,
				'nombre' => 'Turrillas',
			),
			34 => 
			array (
				'id' => 4035,
				'id_provincia' => 5,
				'cod_municipio' => 94,
				'DC' => 0,
				'nombre' => 'Herreros de Suso',
			),
			35 => 
			array (
				'id' => 4036,
				'id_provincia' => 6,
				'cod_municipio' => 94,
				'DC' => 3,
				'nombre' => 'Oliva de Mérida',
			),
			36 => 
			array (
				'id' => 4037,
				'id_provincia' => 8,
				'cod_municipio' => 94,
				'DC' => 5,
				'nombre' => 'Granada, La',
			),
			37 => 
			array (
				'id' => 4038,
				'id_provincia' => 9,
				'cod_municipio' => 94,
				'DC' => 8,
				'nombre' => 'Cebrecos',
			),
			38 => 
			array (
				'id' => 4039,
				'id_provincia' => 10,
				'cod_municipio' => 94,
				'DC' => 2,
				'nombre' => 'Herrera de Alcántara',
			),
			39 => 
			array (
				'id' => 4040,
				'id_provincia' => 12,
				'cod_municipio' => 94,
				'DC' => 4,
				'nombre' => 'Pobla Tornesa, la',
			),
			40 => 
			array (
				'id' => 4041,
				'id_provincia' => 13,
				'cod_municipio' => 94,
				'DC' => 0,
				'nombre' => 'Villanueva de San Carlos',
			),
			41 => 
			array (
				'id' => 4042,
				'id_provincia' => 16,
				'cod_municipio' => 94,
				'DC' => 1,
				'nombre' => 'Gascueña',
			),
			42 => 
			array (
				'id' => 4043,
				'id_provincia' => 17,
				'cod_municipio' => 94,
				'DC' => 7,
				'nombre' => 'Llívia',
			),
			43 => 
			array (
				'id' => 4044,
				'id_provincia' => 18,
				'cod_municipio' => 94,
				'DC' => 3,
				'nombre' => 'Güejar Sierra',
			),
			44 => 
			array (
				'id' => 4045,
				'id_provincia' => 22,
				'cod_municipio' => 94,
				'DC' => 2,
				'nombre' => 'Chalamera',
			),
			45 => 
			array (
				'id' => 4046,
				'id_provincia' => 23,
				'cod_municipio' => 94,
				'DC' => 8,
				'nombre' => 'Vilches',
			),
			46 => 
			array (
				'id' => 4047,
				'id_provincia' => 24,
				'cod_municipio' => 94,
				'DC' => 3,
				'nombre' => 'Mansilla de las Mulas',
			),
			47 => 
			array (
				'id' => 4048,
				'id_provincia' => 25,
				'cod_municipio' => 94,
				'DC' => 6,
				'nombre' => 'Foradada',
			),
			48 => 
			array (
				'id' => 4049,
				'id_provincia' => 26,
				'cod_municipio' => 94,
				'DC' => 9,
				'nombre' => 'Manzanares de Rioja',
			),
			49 => 
			array (
				'id' => 4050,
				'id_provincia' => 28,
				'cod_municipio' => 94,
				'DC' => 1,
				'nombre' => 'Navalafuente',
			),
			50 => 
			array (
				'id' => 4051,
				'id_provincia' => 29,
				'cod_municipio' => 94,
				'DC' => 4,
				'nombre' => 'Vélez-Málaga',
			),
			51 => 
			array (
				'id' => 4052,
				'id_provincia' => 31,
				'cod_municipio' => 94,
				'DC' => 5,
				'nombre' => 'Eslava',
			),
			52 => 
			array (
				'id' => 4053,
				'id_provincia' => 34,
				'cod_municipio' => 94,
				'DC' => 1,
				'nombre' => 'Ledigos',
			),
			53 => 
			array (
				'id' => 4054,
				'id_provincia' => 39,
				'cod_municipio' => 94,
				'DC' => 2,
				'nombre' => 'Valderredible',
			),
			54 => 
			array (
				'id' => 4055,
				'id_provincia' => 40,
				'cod_municipio' => 94,
				'DC' => 6,
				'nombre' => 'Garcillán',
			),
			55 => 
			array (
				'id' => 4056,
				'id_provincia' => 41,
				'cod_municipio' => 94,
				'DC' => 3,
				'nombre' => 'Umbrete',
			),
			56 => 
			array (
				'id' => 4057,
				'id_provincia' => 42,
				'cod_municipio' => 94,
				'DC' => 8,
				'nombre' => 'Garray',
			),
			57 => 
			array (
				'id' => 4058,
				'id_provincia' => 43,
				'cod_municipio' => 94,
				'DC' => 4,
				'nombre' => 'Móra la Nova',
			),
			58 => 
			array (
				'id' => 4059,
				'id_provincia' => 44,
				'cod_municipio' => 94,
				'DC' => 9,
				'nombre' => 'Cuevas Labradas',
			),
			59 => 
			array (
				'id' => 4060,
				'id_provincia' => 45,
				'cod_municipio' => 94,
				'DC' => 2,
				'nombre' => 'Mascaraque',
			),
			60 => 
			array (
				'id' => 4061,
				'id_provincia' => 46,
				'cod_municipio' => 94,
				'DC' => 5,
				'nombre' => 'Catarroja',
			),
			61 => 
			array (
				'id' => 4062,
				'id_provincia' => 47,
				'cod_municipio' => 94,
				'DC' => 1,
				'nombre' => 'Moral de la Reina',
			),
			62 => 
			array (
				'id' => 4063,
				'id_provincia' => 48,
				'cod_municipio' => 94,
				'DC' => 7,
				'nombre' => 'Igorre',
			),
			63 => 
			array (
				'id' => 4064,
				'id_provincia' => 49,
				'cod_municipio' => 94,
				'DC' => 0,
				'nombre' => 'Hermisende',
			),
			64 => 
			array (
				'id' => 4065,
				'id_provincia' => 50,
				'cod_municipio' => 94,
				'DC' => 3,
				'nombre' => 'Daroca',
			),
			65 => 
			array (
				'id' => 4066,
				'id_provincia' => 3,
				'cod_municipio' => 95,
				'DC' => 5,
				'nombre' => 'Ondara',
			),
			66 => 
			array (
				'id' => 4067,
				'id_provincia' => 4,
				'cod_municipio' => 95,
				'DC' => 0,
				'nombre' => 'Uleila del Campo',
			),
			67 => 
			array (
				'id' => 4068,
				'id_provincia' => 5,
				'cod_municipio' => 95,
				'DC' => 3,
				'nombre' => 'Higuera de las Dueñas',
			),
			68 => 
			array (
				'id' => 4069,
				'id_provincia' => 6,
				'cod_municipio' => 95,
				'DC' => 6,
				'nombre' => 'Olivenza',
			),
			69 => 
			array (
				'id' => 4070,
				'id_provincia' => 8,
				'cod_municipio' => 95,
				'DC' => 8,
				'nombre' => 'Granera',
			),
			70 => 
			array (
				'id' => 4071,
				'id_provincia' => 9,
				'cod_municipio' => 95,
				'DC' => 1,
				'nombre' => 'Celada del Camino',
			),
			71 => 
			array (
				'id' => 4072,
				'id_provincia' => 10,
				'cod_municipio' => 95,
				'DC' => 5,
				'nombre' => 'Herreruela',
			),
			72 => 
			array (
				'id' => 4073,
				'id_provincia' => 12,
				'cod_municipio' => 95,
				'DC' => 7,
				'nombre' => 'Ribesalbes',
			),
			73 => 
			array (
				'id' => 4074,
				'id_provincia' => 13,
				'cod_municipio' => 95,
				'DC' => 3,
				'nombre' => 'Villar del Pozo',
			),
			74 => 
			array (
				'id' => 4075,
				'id_provincia' => 16,
				'cod_municipio' => 95,
				'DC' => 4,
				'nombre' => 'Graja de Campalbo',
			),
			75 => 
			array (
				'id' => 4076,
				'id_provincia' => 17,
				'cod_municipio' => 95,
				'DC' => 0,
				'nombre' => 'Lloret de Mar',
			),
			76 => 
			array (
				'id' => 4077,
				'id_provincia' => 18,
				'cod_municipio' => 95,
				'DC' => 6,
				'nombre' => 'Güevéjar',
			),
			77 => 
			array (
				'id' => 4078,
				'id_provincia' => 19,
				'cod_municipio' => 95,
				'DC' => 9,
				'nombre' => 'Condemios de Abajo',
			),
			78 => 
			array (
				'id' => 4079,
				'id_provincia' => 22,
				'cod_municipio' => 95,
				'DC' => 5,
				'nombre' => 'Chía',
			),
			79 => 
			array (
				'id' => 4080,
				'id_provincia' => 23,
				'cod_municipio' => 95,
				'DC' => 1,
				'nombre' => 'Villacarrillo',
			),
			80 => 
			array (
				'id' => 4081,
				'id_provincia' => 24,
				'cod_municipio' => 95,
				'DC' => 6,
				'nombre' => 'Mansilla Mayor',
			),
			81 => 
			array (
				'id' => 4082,
				'id_provincia' => 26,
				'cod_municipio' => 95,
				'DC' => 2,
				'nombre' => 'Matute',
			),
			82 => 
			array (
				'id' => 4083,
				'id_provincia' => 28,
				'cod_municipio' => 95,
				'DC' => 4,
				'nombre' => 'Navalagamella',
			),
			83 => 
			array (
				'id' => 4084,
				'id_provincia' => 29,
				'cod_municipio' => 95,
				'DC' => 7,
				'nombre' => 'Villanueva de Algaidas',
			),
			84 => 
			array (
				'id' => 4085,
				'id_provincia' => 31,
				'cod_municipio' => 95,
				'DC' => 8,
				'nombre' => 'Esparza de Salazar/Espartza Zaraitzu',
			),
			85 => 
			array (
				'id' => 4086,
				'id_provincia' => 39,
				'cod_municipio' => 95,
				'DC' => 5,
				'nombre' => 'Val de San Vicente',
			),
			86 => 
			array (
				'id' => 4087,
				'id_provincia' => 40,
				'cod_municipio' => 95,
				'DC' => 9,
				'nombre' => 'Gomezserracín',
			),
			87 => 
			array (
				'id' => 4088,
				'id_provincia' => 41,
				'cod_municipio' => 95,
				'DC' => 6,
				'nombre' => 'Utrera',
			),
			88 => 
			array (
				'id' => 4089,
				'id_provincia' => 42,
				'cod_municipio' => 95,
				'DC' => 1,
				'nombre' => 'Golmayo',
			),
			89 => 
			array (
				'id' => 4090,
				'id_provincia' => 43,
				'cod_municipio' => 95,
				'DC' => 7,
				'nombre' => 'Morell, El',
			),
			90 => 
			array (
				'id' => 4091,
				'id_provincia' => 45,
				'cod_municipio' => 95,
				'DC' => 5,
				'nombre' => 'Mata, La',
			),
			91 => 
			array (
				'id' => 4092,
				'id_provincia' => 46,
				'cod_municipio' => 95,
				'DC' => 8,
				'nombre' => 'Caudete de las Fuentes',
			),
			92 => 
			array (
				'id' => 4093,
				'id_provincia' => 47,
				'cod_municipio' => 95,
				'DC' => 4,
				'nombre' => 'Moraleja de las Panaderas',
			),
			93 => 
			array (
				'id' => 4094,
				'id_provincia' => 48,
				'cod_municipio' => 95,
				'DC' => 0,
				'nombre' => 'Zaldibar',
			),
			94 => 
			array (
				'id' => 4095,
				'id_provincia' => 49,
				'cod_municipio' => 95,
				'DC' => 3,
				'nombre' => 'Hiniesta, La',
			),
			95 => 
			array (
				'id' => 4096,
				'id_provincia' => 50,
				'cod_municipio' => 95,
				'DC' => 6,
				'nombre' => 'Ejea de los Caballeros',
			),
			96 => 
			array (
				'id' => 4097,
				'id_provincia' => 3,
				'cod_municipio' => 96,
				'DC' => 8,
				'nombre' => 'Onil',
			),
			97 => 
			array (
				'id' => 4098,
				'id_provincia' => 4,
				'cod_municipio' => 96,
				'DC' => 3,
				'nombre' => 'Urrácal',
			),
			98 => 
			array (
				'id' => 4099,
				'id_provincia' => 5,
				'cod_municipio' => 96,
				'DC' => 6,
				'nombre' => 'Hija de Dios, La',
			),
			99 => 
			array (
				'id' => 4100,
				'id_provincia' => 6,
				'cod_municipio' => 96,
				'DC' => 9,
				'nombre' => 'Orellana de la Sierra',
			),
			100 => 
			array (
				'id' => 4101,
				'id_provincia' => 8,
				'cod_municipio' => 96,
				'DC' => 1,
				'nombre' => 'Granollers',
			),
			101 => 
			array (
				'id' => 4102,
				'id_provincia' => 10,
				'cod_municipio' => 96,
				'DC' => 8,
				'nombre' => 'Hervás',
			),
			102 => 
			array (
				'id' => 4103,
				'id_provincia' => 12,
				'cod_municipio' => 96,
				'DC' => 0,
				'nombre' => 'Rossell',
			),
			103 => 
			array (
				'id' => 4104,
				'id_provincia' => 13,
				'cod_municipio' => 96,
				'DC' => 6,
				'nombre' => 'Villarrubia de los Ojos',
			),
			104 => 
			array (
				'id' => 4105,
				'id_provincia' => 16,
				'cod_municipio' => 96,
				'DC' => 7,
				'nombre' => 'Graja de Iniesta',
			),
			105 => 
			array (
				'id' => 4106,
				'id_provincia' => 17,
				'cod_municipio' => 96,
				'DC' => 3,
				'nombre' => 'Llosses, Les',
			),
			106 => 
			array (
				'id' => 4107,
				'id_provincia' => 18,
				'cod_municipio' => 96,
				'DC' => 9,
				'nombre' => 'Huélago',
			),
			107 => 
			array (
				'id' => 4108,
				'id_provincia' => 19,
				'cod_municipio' => 96,
				'DC' => 2,
				'nombre' => 'Condemios de Arriba',
			),
			108 => 
			array (
				'id' => 4109,
				'id_provincia' => 22,
				'cod_municipio' => 96,
				'DC' => 8,
				'nombre' => 'Chimillas',
			),
			109 => 
			array (
				'id' => 4110,
				'id_provincia' => 23,
				'cod_municipio' => 96,
				'DC' => 4,
				'nombre' => 'Villanueva de la Reina',
			),
			110 => 
			array (
				'id' => 4111,
				'id_provincia' => 24,
				'cod_municipio' => 96,
				'DC' => 9,
				'nombre' => 'Maraña',
			),
			111 => 
			array (
				'id' => 4112,
				'id_provincia' => 25,
				'cod_municipio' => 96,
				'DC' => 2,
				'nombre' => 'Fuliola, La',
			),
			112 => 
			array (
				'id' => 4113,
				'id_provincia' => 26,
				'cod_municipio' => 96,
				'DC' => 5,
				'nombre' => 'Medrano',
			),
			113 => 
			array (
				'id' => 4114,
				'id_provincia' => 28,
				'cod_municipio' => 96,
				'DC' => 7,
				'nombre' => 'Navalcarnero',
			),
			114 => 
			array (
				'id' => 4115,
				'id_provincia' => 29,
				'cod_municipio' => 96,
				'DC' => 0,
				'nombre' => 'Villanueva del Rosario',
			),
			115 => 
			array (
				'id' => 4116,
				'id_provincia' => 31,
				'cod_municipio' => 96,
				'DC' => 1,
				'nombre' => 'Espronceda',
			),
			116 => 
			array (
				'id' => 4117,
				'id_provincia' => 34,
				'cod_municipio' => 96,
				'DC' => 7,
				'nombre' => 'Lomas',
			),
			117 => 
			array (
				'id' => 4118,
				'id_provincia' => 37,
				'cod_municipio' => 96,
				'DC' => 9,
				'nombre' => 'Castillejo de Martín Viejo',
			),
			118 => 
			array (
				'id' => 4119,
				'id_provincia' => 39,
				'cod_municipio' => 96,
				'DC' => 8,
				'nombre' => 'Vega de Liébana',
			),
			119 => 
			array (
				'id' => 4120,
				'id_provincia' => 41,
				'cod_municipio' => 96,
				'DC' => 9,
				'nombre' => 'Valencina de la Concepción',
			),
			120 => 
			array (
				'id' => 4121,
				'id_provincia' => 42,
				'cod_municipio' => 96,
				'DC' => 4,
				'nombre' => 'Gómara',
			),
			121 => 
			array (
				'id' => 4122,
				'id_provincia' => 43,
				'cod_municipio' => 96,
				'DC' => 0,
				'nombre' => 'Morera de Montsant, La',
			),
			122 => 
			array (
				'id' => 4123,
				'id_provincia' => 44,
				'cod_municipio' => 96,
				'DC' => 5,
				'nombre' => 'Ejulve',
			),
			123 => 
			array (
				'id' => 4124,
				'id_provincia' => 45,
				'cod_municipio' => 96,
				'DC' => 8,
				'nombre' => 'Mazarambroz',
			),
			124 => 
			array (
				'id' => 4125,
				'id_provincia' => 46,
				'cod_municipio' => 96,
				'DC' => 1,
				'nombre' => 'Cerdà',
			),
			125 => 
			array (
				'id' => 4126,
				'id_provincia' => 47,
				'cod_municipio' => 96,
				'DC' => 7,
				'nombre' => 'Morales de Campos',
			),
			126 => 
			array (
				'id' => 4127,
				'id_provincia' => 48,
				'cod_municipio' => 96,
				'DC' => 3,
				'nombre' => 'Zalla',
			),
			127 => 
			array (
				'id' => 4128,
				'id_provincia' => 49,
				'cod_municipio' => 96,
				'DC' => 6,
				'nombre' => 'Jambrina',
			),
			128 => 
			array (
				'id' => 4129,
				'id_provincia' => 50,
				'cod_municipio' => 96,
				'DC' => 9,
				'nombre' => 'Embid de Ariza',
			),
			129 => 
			array (
				'id' => 4130,
				'id_provincia' => 3,
				'cod_municipio' => 97,
				'DC' => 4,
				'nombre' => 'Orba',
			),
			130 => 
			array (
				'id' => 4131,
				'id_provincia' => 4,
				'cod_municipio' => 97,
				'DC' => 9,
				'nombre' => 'Velefique',
			),
			131 => 
			array (
				'id' => 4132,
				'id_provincia' => 5,
				'cod_municipio' => 97,
				'DC' => 2,
				'nombre' => 'Horcajada, La',
			),
			132 => 
			array (
				'id' => 4133,
				'id_provincia' => 6,
				'cod_municipio' => 97,
				'DC' => 5,
				'nombre' => 'Orellana la Vieja',
			),
			133 => 
			array (
				'id' => 4134,
				'id_provincia' => 8,
				'cod_municipio' => 97,
				'DC' => 7,
				'nombre' => 'Gualba',
			),
			134 => 
			array (
				'id' => 4135,
				'id_provincia' => 10,
				'cod_municipio' => 97,
				'DC' => 4,
				'nombre' => 'Higuera',
			),
			135 => 
			array (
				'id' => 4136,
				'id_provincia' => 12,
				'cod_municipio' => 97,
				'DC' => 6,
				'nombre' => 'Sacañet',
			),
			136 => 
			array (
				'id' => 4137,
				'id_provincia' => 13,
				'cod_municipio' => 97,
				'DC' => 2,
				'nombre' => 'Villarta de San Juan',
			),
			137 => 
			array (
				'id' => 4138,
				'id_provincia' => 16,
				'cod_municipio' => 97,
				'DC' => 3,
				'nombre' => 'Henarejos',
			),
			138 => 
			array (
				'id' => 4139,
				'id_provincia' => 17,
				'cod_municipio' => 97,
				'DC' => 9,
				'nombre' => 'Madremanya',
			),
			139 => 
			array (
				'id' => 4140,
				'id_provincia' => 18,
				'cod_municipio' => 97,
				'DC' => 5,
				'nombre' => 'Huéneja',
			),
			140 => 
			array (
				'id' => 4141,
				'id_provincia' => 19,
				'cod_municipio' => 97,
				'DC' => 8,
				'nombre' => 'Congostrina',
			),
			141 => 
			array (
				'id' => 4142,
				'id_provincia' => 23,
				'cod_municipio' => 97,
				'DC' => 0,
				'nombre' => 'Villanueva del Arzobispo',
			),
			142 => 
			array (
				'id' => 4143,
				'id_provincia' => 24,
				'cod_municipio' => 97,
				'DC' => 5,
				'nombre' => 'Matadeón de los Oteros',
			),
			143 => 
			array (
				'id' => 4144,
				'id_provincia' => 25,
				'cod_municipio' => 97,
				'DC' => 8,
				'nombre' => 'Fulleda',
			),
			144 => 
			array (
				'id' => 4145,
				'id_provincia' => 28,
				'cod_municipio' => 97,
				'DC' => 3,
				'nombre' => 'Navarredonda y San Mamés',
			),
			145 => 
			array (
				'id' => 4146,
				'id_provincia' => 29,
				'cod_municipio' => 97,
				'DC' => 6,
				'nombre' => 'Villanueva del Trabuco',
			),
			146 => 
			array (
				'id' => 4147,
				'id_provincia' => 31,
				'cod_municipio' => 97,
				'DC' => 7,
				'nombre' => 'Estella-Lizarra',
			),
			147 => 
			array (
				'id' => 4148,
				'id_provincia' => 37,
				'cod_municipio' => 97,
				'DC' => 5,
				'nombre' => 'Castraz',
			),
			148 => 
			array (
				'id' => 4149,
				'id_provincia' => 39,
				'cod_municipio' => 97,
				'DC' => 4,
				'nombre' => 'Vega de Pas',
			),
			149 => 
			array (
				'id' => 4150,
				'id_provincia' => 40,
				'cod_municipio' => 97,
				'DC' => 8,
				'nombre' => 'Grajera',
			),
			150 => 
			array (
				'id' => 4151,
				'id_provincia' => 41,
				'cod_municipio' => 97,
				'DC' => 5,
				'nombre' => 'Villamanrique de la Condesa',
			),
			151 => 
			array (
				'id' => 4152,
				'id_provincia' => 42,
				'cod_municipio' => 97,
				'DC' => 0,
				'nombre' => 'Gormaz',
			),
			152 => 
			array (
				'id' => 4153,
				'id_provincia' => 43,
				'cod_municipio' => 97,
				'DC' => 6,
				'nombre' => 'Nou de Gaià, La',
			),
			153 => 
			array (
				'id' => 4154,
				'id_provincia' => 44,
				'cod_municipio' => 97,
				'DC' => 1,
				'nombre' => 'Escorihuela',
			),
			154 => 
			array (
				'id' => 4155,
				'id_provincia' => 45,
				'cod_municipio' => 97,
				'DC' => 4,
				'nombre' => 'Mejorada',
			),
			155 => 
			array (
				'id' => 4156,
				'id_provincia' => 46,
				'cod_municipio' => 97,
				'DC' => 7,
				'nombre' => 'Cofrentes',
			),
			156 => 
			array (
				'id' => 4157,
				'id_provincia' => 47,
				'cod_municipio' => 97,
				'DC' => 3,
				'nombre' => 'Mota del Marqués',
			),
			157 => 
			array (
				'id' => 4158,
				'id_provincia' => 48,
				'cod_municipio' => 97,
				'DC' => 9,
				'nombre' => 'Zaratamo',
			),
			158 => 
			array (
				'id' => 4159,
				'id_provincia' => 49,
				'cod_municipio' => 97,
				'DC' => 2,
				'nombre' => 'Justel',
			),
			159 => 
			array (
				'id' => 4160,
				'id_provincia' => 3,
				'cod_municipio' => 98,
				'DC' => 0,
				'nombre' => 'Orxeta',
			),
			160 => 
			array (
				'id' => 4161,
				'id_provincia' => 4,
				'cod_municipio' => 98,
				'DC' => 5,
				'nombre' => 'Vélez-Blanco',
			),
			161 => 
			array (
				'id' => 4162,
				'id_provincia' => 6,
				'cod_municipio' => 98,
				'DC' => 1,
				'nombre' => 'Palomas',
			),
			162 => 
			array (
				'id' => 4163,
				'id_provincia' => 8,
				'cod_municipio' => 98,
				'DC' => 3,
				'nombre' => 'Sant Salvador de Guardiola',
			),
			163 => 
			array (
				'id' => 4164,
				'id_provincia' => 9,
				'cod_municipio' => 98,
				'DC' => 6,
				'nombre' => 'Cerezo de Río Tirón',
			),
			164 => 
			array (
				'id' => 4165,
				'id_provincia' => 10,
				'cod_municipio' => 98,
				'DC' => 0,
				'nombre' => 'Hinojal',
			),
			165 => 
			array (
				'id' => 4166,
				'id_provincia' => 12,
				'cod_municipio' => 98,
				'DC' => 2,
				'nombre' => 'Salzadella, la',
			),
			166 => 
			array (
				'id' => 4167,
				'id_provincia' => 13,
				'cod_municipio' => 98,
				'DC' => 8,
				'nombre' => 'Viso del Marqués',
			),
			167 => 
			array (
				'id' => 4168,
				'id_provincia' => 16,
				'cod_municipio' => 98,
				'DC' => 9,
				'nombre' => 'Herrumblar, El',
			),
			168 => 
			array (
				'id' => 4169,
				'id_provincia' => 17,
				'cod_municipio' => 98,
				'DC' => 5,
				'nombre' => 'Maià de Montcal',
			),
			169 => 
			array (
				'id' => 4170,
				'id_provincia' => 18,
				'cod_municipio' => 98,
				'DC' => 1,
				'nombre' => 'Huéscar',
			),
			170 => 
			array (
				'id' => 4171,
				'id_provincia' => 19,
				'cod_municipio' => 98,
				'DC' => 4,
				'nombre' => 'Copernal',
			),
			171 => 
			array (
				'id' => 4172,
				'id_provincia' => 23,
				'cod_municipio' => 98,
				'DC' => 6,
				'nombre' => 'Villardompardo',
			),
			172 => 
			array (
				'id' => 4173,
				'id_provincia' => 24,
				'cod_municipio' => 98,
				'DC' => 1,
				'nombre' => 'Matallana de Torío',
			),
			173 => 
			array (
				'id' => 4174,
				'id_provincia' => 25,
				'cod_municipio' => 98,
				'DC' => 4,
				'nombre' => 'Gavet de la Conca',
			),
			174 => 
			array (
				'id' => 4175,
				'id_provincia' => 26,
				'cod_municipio' => 98,
				'DC' => 7,
				'nombre' => 'Munilla',
			),
			175 => 
			array (
				'id' => 4176,
				'id_provincia' => 29,
				'cod_municipio' => 98,
				'DC' => 2,
				'nombre' => 'Villanueva de Tapia',
			),
			176 => 
			array (
				'id' => 4177,
				'id_provincia' => 31,
				'cod_municipio' => 98,
				'DC' => 3,
				'nombre' => 'Esteribar',
			),
			177 => 
			array (
				'id' => 4178,
				'id_provincia' => 34,
				'cod_municipio' => 98,
				'DC' => 9,
				'nombre' => 'Magaz de Pisuerga',
			),
			178 => 
			array (
				'id' => 4179,
				'id_provincia' => 37,
				'cod_municipio' => 98,
				'DC' => 1,
				'nombre' => 'Cepeda',
			),
			179 => 
			array (
				'id' => 4180,
				'id_provincia' => 39,
				'cod_municipio' => 98,
				'DC' => 0,
				'nombre' => 'Villacarriedo',
			),
			180 => 
			array (
				'id' => 4181,
				'id_provincia' => 41,
				'cod_municipio' => 98,
				'DC' => 1,
				'nombre' => 'Villanueva del Ariscal',
			),
			181 => 
			array (
				'id' => 4182,
				'id_provincia' => 42,
				'cod_municipio' => 98,
				'DC' => 6,
				'nombre' => 'Herrera de Soria',
			),
			182 => 
			array (
				'id' => 4183,
				'id_provincia' => 43,
				'cod_municipio' => 98,
				'DC' => 2,
				'nombre' => 'Nulles',
			),
			183 => 
			array (
				'id' => 4184,
				'id_provincia' => 45,
				'cod_municipio' => 98,
				'DC' => 0,
				'nombre' => 'Menasalbas',
			),
			184 => 
			array (
				'id' => 4185,
				'id_provincia' => 46,
				'cod_municipio' => 98,
				'DC' => 3,
				'nombre' => 'Corbera',
			),
			185 => 
			array (
				'id' => 4186,
				'id_provincia' => 47,
				'cod_municipio' => 98,
				'DC' => 9,
				'nombre' => 'Mucientes',
			),
			186 => 
			array (
				'id' => 4187,
				'id_provincia' => 49,
				'cod_municipio' => 98,
				'DC' => 8,
				'nombre' => 'Losacino',
			),
			187 => 
			array (
				'id' => 4188,
				'id_provincia' => 50,
				'cod_municipio' => 98,
				'DC' => 1,
				'nombre' => 'Encinacorba',
			),
			188 => 
			array (
				'id' => 4189,
				'id_provincia' => 3,
				'cod_municipio' => 99,
				'DC' => 3,
				'nombre' => 'Orihuela',
			),
			189 => 
			array (
				'id' => 4190,
				'id_provincia' => 4,
				'cod_municipio' => 99,
				'DC' => 8,
				'nombre' => 'Vélez-Rubio',
			),
			190 => 
			array (
				'id' => 4191,
				'id_provincia' => 5,
				'cod_municipio' => 99,
				'DC' => 1,
				'nombre' => 'Horcajo de las Torres',
			),
			191 => 
			array (
				'id' => 4192,
				'id_provincia' => 6,
				'cod_municipio' => 99,
				'DC' => 4,
				'nombre' => 'Parra, La',
			),
			192 => 
			array (
				'id' => 4193,
				'id_provincia' => 8,
				'cod_municipio' => 99,
				'DC' => 6,
				'nombre' => 'Guardiola de Berguedà',
			),
			193 => 
			array (
				'id' => 4194,
				'id_provincia' => 10,
				'cod_municipio' => 99,
				'DC' => 3,
				'nombre' => 'Holguera',
			),
			194 => 
			array (
				'id' => 4195,
				'id_provincia' => 12,
				'cod_municipio' => 99,
				'DC' => 5,
				'nombre' => 'Sant Jordi/San Jorge',
			),
			195 => 
			array (
				'id' => 4196,
				'id_provincia' => 16,
				'cod_municipio' => 99,
				'DC' => 2,
				'nombre' => 'Hinojosa, La',
			),
			196 => 
			array (
				'id' => 4197,
				'id_provincia' => 17,
				'cod_municipio' => 99,
				'DC' => 8,
				'nombre' => 'Meranges',
			),
			197 => 
			array (
				'id' => 4198,
				'id_provincia' => 18,
				'cod_municipio' => 99,
				'DC' => 4,
				'nombre' => 'Huétor de Santillán',
			),
			198 => 
			array (
				'id' => 4199,
				'id_provincia' => 19,
				'cod_municipio' => 99,
				'DC' => 7,
				'nombre' => 'Corduente',
			),
			199 => 
			array (
				'id' => 4200,
				'id_provincia' => 22,
				'cod_municipio' => 99,
				'DC' => 3,
				'nombre' => 'Esplús',
			),
			200 => 
			array (
				'id' => 4201,
				'id_provincia' => 23,
				'cod_municipio' => 99,
				'DC' => 9,
				'nombre' => 'Villares, Los',
			),
			201 => 
			array (
				'id' => 4202,
				'id_provincia' => 24,
				'cod_municipio' => 99,
				'DC' => 4,
				'nombre' => 'Matanza',
			),
			202 => 
			array (
				'id' => 4203,
				'id_provincia' => 25,
				'cod_municipio' => 99,
				'DC' => 7,
				'nombre' => 'Golmés',
			),
			203 => 
			array (
				'id' => 4204,
				'id_provincia' => 26,
				'cod_municipio' => 99,
				'DC' => 0,
				'nombre' => 'Murillo de Río Leza',
			),
			204 => 
			array (
				'id' => 4205,
				'id_provincia' => 28,
				'cod_municipio' => 99,
				'DC' => 2,
				'nombre' => 'Navas del Rey',
			),
			205 => 
			array (
				'id' => 4206,
				'id_provincia' => 29,
				'cod_municipio' => 99,
				'DC' => 5,
				'nombre' => 'Viñuela',
			),
			206 => 
			array (
				'id' => 4207,
				'id_provincia' => 31,
				'cod_municipio' => 99,
				'DC' => 6,
				'nombre' => 'Etayo',
			),
			207 => 
			array (
				'id' => 4208,
				'id_provincia' => 34,
				'cod_municipio' => 99,
				'DC' => 2,
				'nombre' => 'Manquillos',
			),
			208 => 
			array (
				'id' => 4209,
				'id_provincia' => 37,
				'cod_municipio' => 99,
				'DC' => 4,
				'nombre' => 'Cereceda de la Sierra',
			),
			209 => 
			array (
				'id' => 4210,
				'id_provincia' => 39,
				'cod_municipio' => 99,
				'DC' => 3,
				'nombre' => 'Villaescusa',
			),
			210 => 
			array (
				'id' => 4211,
				'id_provincia' => 40,
				'cod_municipio' => 99,
				'DC' => 7,
				'nombre' => 'Honrubia de la Cuesta',
			),
			211 => 
			array (
				'id' => 4212,
				'id_provincia' => 41,
				'cod_municipio' => 99,
				'DC' => 4,
				'nombre' => 'Villanueva del Río y Minas',
			),
			212 => 
			array (
				'id' => 4213,
				'id_provincia' => 43,
				'cod_municipio' => 99,
				'DC' => 5,
				'nombre' => 'Palma d\'Ebre, La',
			),
			213 => 
			array (
				'id' => 4214,
				'id_provincia' => 44,
				'cod_municipio' => 99,
				'DC' => 0,
				'nombre' => 'Escucha',
			),
			214 => 
			array (
				'id' => 4215,
				'id_provincia' => 45,
				'cod_municipio' => 99,
				'DC' => 3,
				'nombre' => 'Méntrida',
			),
			215 => 
			array (
				'id' => 4216,
				'id_provincia' => 46,
				'cod_municipio' => 99,
				'DC' => 6,
				'nombre' => 'Cortes de Pallás',
			),
			216 => 
			array (
				'id' => 4217,
				'id_provincia' => 47,
				'cod_municipio' => 99,
				'DC' => 2,
				'nombre' => 'Mudarra, La',
			),
			217 => 
			array (
				'id' => 4218,
				'id_provincia' => 49,
				'cod_municipio' => 99,
				'DC' => 1,
				'nombre' => 'Losacio',
			),
			218 => 
			array (
				'id' => 4219,
				'id_provincia' => 50,
				'cod_municipio' => 99,
				'DC' => 4,
				'nombre' => 'Épila',
			),
			219 => 
			array (
				'id' => 4220,
				'id_provincia' => 3,
				'cod_municipio' => 100,
				'DC' => 7,
				'nombre' => 'Parcent',
			),
			220 => 
			array (
				'id' => 4221,
				'id_provincia' => 4,
				'cod_municipio' => 100,
				'DC' => 2,
				'nombre' => 'Vera',
			),
			221 => 
			array (
				'id' => 4222,
				'id_provincia' => 5,
				'cod_municipio' => 100,
				'DC' => 5,
				'nombre' => 'Hornillo, El',
			),
			222 => 
			array (
				'id' => 4223,
				'id_provincia' => 6,
				'cod_municipio' => 100,
				'DC' => 8,
				'nombre' => 'Peñalsordo',
			),
			223 => 
			array (
				'id' => 4224,
				'id_provincia' => 8,
				'cod_municipio' => 100,
				'DC' => 0,
				'nombre' => 'Gurb',
			),
			224 => 
			array (
				'id' => 4225,
				'id_provincia' => 9,
				'cod_municipio' => 100,
				'DC' => 3,
				'nombre' => 'Cerratón de Juarros',
			),
			225 => 
			array (
				'id' => 4226,
				'id_provincia' => 10,
				'cod_municipio' => 100,
				'DC' => 7,
				'nombre' => 'Hoyos',
			),
			226 => 
			array (
				'id' => 4227,
				'id_provincia' => 12,
				'cod_municipio' => 100,
				'DC' => 9,
				'nombre' => 'Sant Mateu',
			),
			227 => 
			array (
				'id' => 4228,
				'id_provincia' => 16,
				'cod_municipio' => 100,
				'DC' => 6,
				'nombre' => 'Hinojosos, Los',
			),
			228 => 
			array (
				'id' => 4229,
				'id_provincia' => 17,
				'cod_municipio' => 100,
				'DC' => 2,
				'nombre' => 'Masarac',
			),
			229 => 
			array (
				'id' => 4230,
				'id_provincia' => 18,
				'cod_municipio' => 100,
				'DC' => 8,
				'nombre' => 'Huétor Tájar',
			),
			230 => 
			array (
				'id' => 4231,
				'id_provincia' => 24,
				'cod_municipio' => 100,
				'DC' => 8,
				'nombre' => 'Molinaseca',
			),
			231 => 
			array (
				'id' => 4232,
				'id_provincia' => 25,
				'cod_municipio' => 100,
				'DC' => 1,
				'nombre' => 'Gósol',
			),
			232 => 
			array (
				'id' => 4233,
				'id_provincia' => 26,
				'cod_municipio' => 100,
				'DC' => 4,
				'nombre' => 'Muro de Aguas',
			),
			233 => 
			array (
				'id' => 4234,
				'id_provincia' => 28,
				'cod_municipio' => 100,
				'DC' => 6,
				'nombre' => 'Nuevo Baztán',
			),
			234 => 
			array (
				'id' => 4235,
				'id_provincia' => 29,
				'cod_municipio' => 100,
				'DC' => 9,
				'nombre' => 'Yunquera',
			),
			235 => 
			array (
				'id' => 4236,
				'id_provincia' => 31,
				'cod_municipio' => 100,
				'DC' => 0,
				'nombre' => 'Eulate',
			),
			236 => 
			array (
				'id' => 4237,
				'id_provincia' => 34,
				'cod_municipio' => 100,
				'DC' => 6,
				'nombre' => 'Mantinos',
			),
			237 => 
			array (
				'id' => 4238,
				'id_provincia' => 37,
				'cod_municipio' => 100,
				'DC' => 8,
				'nombre' => 'Cerezal de Peñahorcada',
			),
			238 => 
			array (
				'id' => 4239,
				'id_provincia' => 39,
				'cod_municipio' => 100,
				'DC' => 7,
				'nombre' => 'Villafufre',
			),
			239 => 
			array (
				'id' => 4240,
				'id_provincia' => 40,
				'cod_municipio' => 100,
				'DC' => 1,
				'nombre' => 'Hontalbilla',
			),
			240 => 
			array (
				'id' => 4241,
				'id_provincia' => 41,
				'cod_municipio' => 100,
				'DC' => 8,
				'nombre' => 'Villanueva de San Juan',
			),
			241 => 
			array (
				'id' => 4242,
				'id_provincia' => 42,
				'cod_municipio' => 100,
				'DC' => 3,
				'nombre' => 'Hinojosa del Campo',
			),
			242 => 
			array (
				'id' => 4243,
				'id_provincia' => 43,
				'cod_municipio' => 100,
				'DC' => 9,
				'nombre' => 'Pallaresos, Els',
			),
			243 => 
			array (
				'id' => 4244,
				'id_provincia' => 44,
				'cod_municipio' => 100,
				'DC' => 4,
				'nombre' => 'Estercuel',
			),
			244 => 
			array (
				'id' => 4245,
				'id_provincia' => 45,
				'cod_municipio' => 100,
				'DC' => 7,
				'nombre' => 'Mesegar de Tajo',
			),
			245 => 
			array (
				'id' => 4246,
				'id_provincia' => 46,
				'cod_municipio' => 100,
				'DC' => 0,
				'nombre' => 'Cotes',
			),
			246 => 
			array (
				'id' => 4247,
				'id_provincia' => 47,
				'cod_municipio' => 100,
				'DC' => 6,
				'nombre' => 'Muriel',
			),
			247 => 
			array (
				'id' => 4248,
				'id_provincia' => 49,
				'cod_municipio' => 100,
				'DC' => 5,
				'nombre' => 'Lubián',
			),
			248 => 
			array (
				'id' => 4249,
				'id_provincia' => 50,
				'cod_municipio' => 100,
				'DC' => 8,
				'nombre' => 'Erla',
			),
			249 => 
			array (
				'id' => 4250,
				'id_provincia' => 3,
				'cod_municipio' => 101,
				'DC' => 4,
				'nombre' => 'Pedreguer',
			),
			250 => 
			array (
				'id' => 4251,
				'id_provincia' => 4,
				'cod_municipio' => 101,
				'DC' => 9,
				'nombre' => 'Viator',
			),
			251 => 
			array (
				'id' => 4252,
				'id_provincia' => 5,
				'cod_municipio' => 101,
				'DC' => 2,
				'nombre' => 'Hoyocasero',
			),
			252 => 
			array (
				'id' => 4253,
				'id_provincia' => 6,
				'cod_municipio' => 101,
				'DC' => 5,
				'nombre' => 'Peraleda del Zaucejo',
			),
			253 => 
			array (
				'id' => 4254,
				'id_provincia' => 8,
				'cod_municipio' => 101,
				'DC' => 7,
				'nombre' => 'Hospitalet de Llobregat, L\'',
			),
			254 => 
			array (
				'id' => 4255,
				'id_provincia' => 9,
				'cod_municipio' => 101,
				'DC' => 0,
				'nombre' => 'Ciadoncha',
			),
			255 => 
			array (
				'id' => 4256,
				'id_provincia' => 10,
				'cod_municipio' => 101,
				'DC' => 4,
				'nombre' => 'Huélaga',
			),
			256 => 
			array (
				'id' => 4257,
				'id_provincia' => 12,
				'cod_municipio' => 101,
				'DC' => 6,
				'nombre' => 'San Rafael del Río',
			),
			257 => 
			array (
				'id' => 4258,
				'id_provincia' => 16,
				'cod_municipio' => 101,
				'DC' => 3,
				'nombre' => 'Hito, El',
			),
			258 => 
			array (
				'id' => 4259,
				'id_provincia' => 17,
				'cod_municipio' => 101,
				'DC' => 9,
				'nombre' => 'Massanes',
			),
			259 => 
			array (
				'id' => 4260,
				'id_provincia' => 18,
				'cod_municipio' => 101,
				'DC' => 5,
				'nombre' => 'Huétor Vega',
			),
			260 => 
			array (
				'id' => 4261,
				'id_provincia' => 23,
				'cod_municipio' => 101,
				'DC' => 0,
				'nombre' => 'Villarrodrigo',
			),
			261 => 
			array (
				'id' => 4262,
				'id_provincia' => 24,
				'cod_municipio' => 101,
				'DC' => 5,
				'nombre' => 'Murias de Paredes',
			),
			262 => 
			array (
				'id' => 4263,
				'id_provincia' => 25,
				'cod_municipio' => 101,
				'DC' => 8,
				'nombre' => 'Granadella, La',
			),
			263 => 
			array (
				'id' => 4264,
				'id_provincia' => 26,
				'cod_municipio' => 101,
				'DC' => 1,
				'nombre' => 'Muro en Cameros',
			),
			264 => 
			array (
				'id' => 4265,
				'id_provincia' => 28,
				'cod_municipio' => 101,
				'DC' => 3,
				'nombre' => 'Olmeda de las Fuentes',
			),
			265 => 
			array (
				'id' => 4266,
				'id_provincia' => 31,
				'cod_municipio' => 101,
				'DC' => 7,
				'nombre' => 'Ezcabarte',
			),
			266 => 
			array (
				'id' => 4267,
				'id_provincia' => 34,
				'cod_municipio' => 101,
				'DC' => 3,
				'nombre' => 'Marcilla de Campos',
			),
			267 => 
			array (
				'id' => 4268,
				'id_provincia' => 37,
				'cod_municipio' => 101,
				'DC' => 5,
				'nombre' => 'Cerralbo',
			),
			268 => 
			array (
				'id' => 4269,
				'id_provincia' => 39,
				'cod_municipio' => 101,
				'DC' => 4,
				'nombre' => 'Valle de Villaverde',
			),
			269 => 
			array (
				'id' => 4270,
				'id_provincia' => 40,
				'cod_municipio' => 101,
				'DC' => 8,
				'nombre' => 'Hontanares de Eresma',
			),
			270 => 
			array (
				'id' => 4271,
				'id_provincia' => 41,
				'cod_municipio' => 101,
				'DC' => 5,
				'nombre' => 'Villaverde del Río',
			),
			271 => 
			array (
				'id' => 4272,
				'id_provincia' => 43,
				'cod_municipio' => 101,
				'DC' => 6,
				'nombre' => 'Passanant i Belltall',
			),
			272 => 
			array (
				'id' => 4273,
				'id_provincia' => 44,
				'cod_municipio' => 101,
				'DC' => 1,
				'nombre' => 'Ferreruela de Huerva',
			),
			273 => 
			array (
				'id' => 4274,
				'id_provincia' => 45,
				'cod_municipio' => 101,
				'DC' => 4,
				'nombre' => 'Miguel Esteban',
			),
			274 => 
			array (
				'id' => 4275,
				'id_provincia' => 46,
				'cod_municipio' => 101,
				'DC' => 7,
				'nombre' => 'Quart de les Valls',
			),
			275 => 
			array (
				'id' => 4276,
				'id_provincia' => 47,
				'cod_municipio' => 101,
				'DC' => 3,
				'nombre' => 'Nava del Rey',
			),
			276 => 
			array (
				'id' => 4277,
				'id_provincia' => 49,
				'cod_municipio' => 101,
				'DC' => 2,
				'nombre' => 'Luelmo',
			),
			277 => 
			array (
				'id' => 4278,
				'id_provincia' => 50,
				'cod_municipio' => 101,
				'DC' => 5,
				'nombre' => 'Escatrón',
			),
			278 => 
			array (
				'id' => 4279,
				'id_provincia' => 3,
				'cod_municipio' => 102,
				'DC' => 9,
				'nombre' => 'Pego',
			),
			279 => 
			array (
				'id' => 4280,
				'id_provincia' => 4,
				'cod_municipio' => 102,
				'DC' => 4,
				'nombre' => 'Vícar',
			),
			280 => 
			array (
				'id' => 4281,
				'id_provincia' => 5,
				'cod_municipio' => 102,
				'DC' => 7,
				'nombre' => 'Hoyo de Pinares, El',
			),
			281 => 
			array (
				'id' => 4282,
				'id_provincia' => 6,
				'cod_municipio' => 102,
				'DC' => 0,
				'nombre' => 'Puebla de Alcocer',
			),
			282 => 
			array (
				'id' => 4283,
				'id_provincia' => 8,
				'cod_municipio' => 102,
				'DC' => 2,
				'nombre' => 'Igualada',
			),
			283 => 
			array (
				'id' => 4284,
				'id_provincia' => 9,
				'cod_municipio' => 102,
				'DC' => 5,
				'nombre' => 'Cillaperlata',
			),
			284 => 
			array (
				'id' => 4285,
				'id_provincia' => 10,
				'cod_municipio' => 102,
				'DC' => 9,
				'nombre' => 'Ibahernando',
			),
			285 => 
			array (
				'id' => 4286,
				'id_provincia' => 12,
				'cod_municipio' => 102,
				'DC' => 1,
				'nombre' => 'Santa Magdalena de Pulpis',
			),
			286 => 
			array (
				'id' => 4287,
				'id_provincia' => 16,
				'cod_municipio' => 102,
				'DC' => 8,
				'nombre' => 'Honrubia',
			),
			287 => 
			array (
				'id' => 4288,
				'id_provincia' => 17,
				'cod_municipio' => 102,
				'DC' => 4,
				'nombre' => 'Maçanet de Cabrenys',
			),
			288 => 
			array (
				'id' => 4289,
				'id_provincia' => 18,
				'cod_municipio' => 102,
				'DC' => 0,
				'nombre' => 'Illora',
			),
			289 => 
			array (
				'id' => 4290,
				'id_provincia' => 19,
				'cod_municipio' => 102,
				'DC' => 3,
				'nombre' => 'Cubillo de Uceda, El',
			),
			290 => 
			array (
				'id' => 4291,
				'id_provincia' => 22,
				'cod_municipio' => 102,
				'DC' => 9,
				'nombre' => 'Estada',
			),
			291 => 
			array (
				'id' => 4292,
				'id_provincia' => 24,
				'cod_municipio' => 102,
				'DC' => 0,
				'nombre' => 'Noceda del Bierzo',
			),
			292 => 
			array (
				'id' => 4293,
				'id_provincia' => 25,
				'cod_municipio' => 102,
				'DC' => 3,
				'nombre' => 'Granja d\'Escarp, La',
			),
			293 => 
			array (
				'id' => 4294,
				'id_provincia' => 26,
				'cod_municipio' => 102,
				'DC' => 6,
				'nombre' => 'Nájera',
			),
			294 => 
			array (
				'id' => 4295,
				'id_provincia' => 28,
				'cod_municipio' => 102,
				'DC' => 8,
				'nombre' => 'Orusco de Tajuña',
			),
			295 => 
			array (
				'id' => 4296,
				'id_provincia' => 31,
				'cod_municipio' => 102,
				'DC' => 2,
				'nombre' => 'Ezkurra',
			),
			296 => 
			array (
				'id' => 4297,
				'id_provincia' => 34,
				'cod_municipio' => 102,
				'DC' => 8,
				'nombre' => 'Mazariegos',
			),
			297 => 
			array (
				'id' => 4298,
				'id_provincia' => 37,
				'cod_municipio' => 102,
				'DC' => 0,
				'nombre' => 'Cerro, El',
			),
			298 => 
			array (
				'id' => 4299,
				'id_provincia' => 39,
				'cod_municipio' => 102,
				'DC' => 9,
				'nombre' => 'Voto',
			),
			299 => 
			array (
				'id' => 4300,
				'id_provincia' => 41,
				'cod_municipio' => 102,
				'DC' => 0,
				'nombre' => 'Viso del Alcor, El',
			),
			300 => 
			array (
				'id' => 4301,
				'id_provincia' => 43,
				'cod_municipio' => 102,
				'DC' => 1,
				'nombre' => 'Paüls',
			),
			301 => 
			array (
				'id' => 4302,
				'id_provincia' => 44,
				'cod_municipio' => 102,
				'DC' => 6,
				'nombre' => 'Fonfría',
			),
			302 => 
			array (
				'id' => 4303,
				'id_provincia' => 45,
				'cod_municipio' => 102,
				'DC' => 9,
				'nombre' => 'Mocejón',
			),
			303 => 
			array (
				'id' => 4304,
				'id_provincia' => 46,
				'cod_municipio' => 102,
				'DC' => 2,
				'nombre' => 'Quart de Poblet',
			),
			304 => 
			array (
				'id' => 4305,
				'id_provincia' => 47,
				'cod_municipio' => 102,
				'DC' => 8,
				'nombre' => 'Nueva Villa de las Torres',
			),
			305 => 
			array (
				'id' => 4306,
				'id_provincia' => 49,
				'cod_municipio' => 102,
				'DC' => 7,
				'nombre' => 'Maderal, El',
			),
			306 => 
			array (
				'id' => 4307,
				'id_provincia' => 50,
				'cod_municipio' => 102,
				'DC' => 0,
				'nombre' => 'Fabara',
			),
			307 => 
			array (
				'id' => 4308,
				'id_provincia' => 3,
				'cod_municipio' => 103,
				'DC' => 5,
				'nombre' => 'Penàguila',
			),
			308 => 
			array (
				'id' => 4309,
				'id_provincia' => 4,
				'cod_municipio' => 103,
				'DC' => 0,
				'nombre' => 'Zurgena',
			),
			309 => 
			array (
				'id' => 4310,
				'id_provincia' => 5,
				'cod_municipio' => 103,
				'DC' => 3,
				'nombre' => 'Hoyorredondo',
			),
			310 => 
			array (
				'id' => 4311,
				'id_provincia' => 6,
				'cod_municipio' => 103,
				'DC' => 6,
				'nombre' => 'Puebla de la Calzada',
			),
			311 => 
			array (
				'id' => 4312,
				'id_provincia' => 8,
				'cod_municipio' => 103,
				'DC' => 8,
				'nombre' => 'Jorba',
			),
			312 => 
			array (
				'id' => 4313,
				'id_provincia' => 9,
				'cod_municipio' => 103,
				'DC' => 1,
				'nombre' => 'Cilleruelo de Abajo',
			),
			313 => 
			array (
				'id' => 4314,
				'id_provincia' => 10,
				'cod_municipio' => 103,
				'DC' => 5,
				'nombre' => 'Jaraicejo',
			),
			314 => 
			array (
				'id' => 4315,
				'id_provincia' => 12,
				'cod_municipio' => 103,
				'DC' => 7,
				'nombre' => 'Sarratella',
			),
			315 => 
			array (
				'id' => 4316,
				'id_provincia' => 16,
				'cod_municipio' => 103,
				'DC' => 4,
				'nombre' => 'Hontanaya',
			),
			316 => 
			array (
				'id' => 4317,
				'id_provincia' => 17,
				'cod_municipio' => 103,
				'DC' => 0,
				'nombre' => 'Maçanet de la Selva',
			),
			317 => 
			array (
				'id' => 4318,
				'id_provincia' => 18,
				'cod_municipio' => 103,
				'DC' => 6,
				'nombre' => 'Itrabo',
			),
			318 => 
			array (
				'id' => 4319,
				'id_provincia' => 19,
				'cod_municipio' => 103,
				'DC' => 9,
				'nombre' => 'Checa',
			),
			319 => 
			array (
				'id' => 4320,
				'id_provincia' => 22,
				'cod_municipio' => 103,
				'DC' => 5,
				'nombre' => 'Estadilla',
			),
			320 => 
			array (
				'id' => 4321,
				'id_provincia' => 24,
				'cod_municipio' => 103,
				'DC' => 6,
				'nombre' => 'Oencia',
			),
			321 => 
			array (
				'id' => 4322,
				'id_provincia' => 25,
				'cod_municipio' => 103,
				'DC' => 9,
				'nombre' => 'Granyanella',
			),
			322 => 
			array (
				'id' => 4323,
				'id_provincia' => 26,
				'cod_municipio' => 103,
				'DC' => 2,
				'nombre' => 'Nalda',
			),
			323 => 
			array (
				'id' => 4324,
				'id_provincia' => 31,
				'cod_municipio' => 103,
				'DC' => 8,
				'nombre' => 'Ezprogui',
			),
			324 => 
			array (
				'id' => 4325,
				'id_provincia' => 34,
				'cod_municipio' => 103,
				'DC' => 4,
				'nombre' => 'Mazuecos de Valdeginate',
			),
			325 => 
			array (
				'id' => 4326,
				'id_provincia' => 37,
				'cod_municipio' => 103,
				'DC' => 6,
				'nombre' => 'Cespedosa de Tormes',
			),
			326 => 
			array (
				'id' => 4327,
				'id_provincia' => 40,
				'cod_municipio' => 103,
				'DC' => 9,
				'nombre' => 'Huertos, Los',
			),
			327 => 
			array (
				'id' => 4328,
				'id_provincia' => 42,
				'cod_municipio' => 103,
				'DC' => 1,
				'nombre' => 'Langa de Duero',
			),
			328 => 
			array (
				'id' => 4329,
				'id_provincia' => 43,
				'cod_municipio' => 103,
				'DC' => 7,
				'nombre' => 'Perafort',
			),
			329 => 
			array (
				'id' => 4330,
				'id_provincia' => 44,
				'cod_municipio' => 103,
				'DC' => 2,
				'nombre' => 'Formiche Alto',
			),
			330 => 
			array (
				'id' => 4331,
				'id_provincia' => 45,
				'cod_municipio' => 103,
				'DC' => 5,
				'nombre' => 'Mohedas de la Jara',
			),
			331 => 
			array (
				'id' => 4332,
				'id_provincia' => 46,
				'cod_municipio' => 103,
				'DC' => 8,
				'nombre' => 'Quartell',
			),
			332 => 
			array (
				'id' => 4333,
				'id_provincia' => 47,
				'cod_municipio' => 103,
				'DC' => 4,
				'nombre' => 'Olivares de Duero',
			),
			333 => 
			array (
				'id' => 4334,
				'id_provincia' => 49,
				'cod_municipio' => 103,
				'DC' => 3,
				'nombre' => 'Madridanos',
			),
			334 => 
			array (
				'id' => 4335,
				'id_provincia' => 3,
				'cod_municipio' => 104,
				'DC' => 0,
				'nombre' => 'Petrer',
			),
			335 => 
			array (
				'id' => 4336,
				'id_provincia' => 5,
				'cod_municipio' => 104,
				'DC' => 8,
				'nombre' => 'Hoyos del Collado',
			),
			336 => 
			array (
				'id' => 4337,
				'id_provincia' => 6,
				'cod_municipio' => 104,
				'DC' => 1,
				'nombre' => 'Puebla de la Reina',
			),
			337 => 
			array (
				'id' => 4338,
				'id_provincia' => 8,
				'cod_municipio' => 104,
				'DC' => 3,
				'nombre' => 'Llacuna, La',
			),
			338 => 
			array (
				'id' => 4339,
				'id_provincia' => 9,
				'cod_municipio' => 104,
				'DC' => 6,
				'nombre' => 'Cilleruelo de Arriba',
			),
			339 => 
			array (
				'id' => 4340,
				'id_provincia' => 10,
				'cod_municipio' => 104,
				'DC' => 0,
				'nombre' => 'Jaraíz de la Vera',
			),
			340 => 
			array (
				'id' => 4341,
				'id_provincia' => 12,
				'cod_municipio' => 104,
				'DC' => 2,
				'nombre' => 'Segorbe',
			),
			341 => 
			array (
				'id' => 4342,
				'id_provincia' => 16,
				'cod_municipio' => 104,
				'DC' => 9,
				'nombre' => 'Hontecillas',
			),
			342 => 
			array (
				'id' => 4343,
				'id_provincia' => 19,
				'cod_municipio' => 104,
				'DC' => 4,
				'nombre' => 'Chequilla',
			),
			343 => 
			array (
				'id' => 4344,
				'id_provincia' => 24,
				'cod_municipio' => 104,
				'DC' => 1,
				'nombre' => 'Omañas, Las',
			),
			344 => 
			array (
				'id' => 4345,
				'id_provincia' => 25,
				'cod_municipio' => 104,
				'DC' => 4,
				'nombre' => 'Granyena de Segarra',
			),
			345 => 
			array (
				'id' => 4346,
				'id_provincia' => 26,
				'cod_municipio' => 104,
				'DC' => 7,
				'nombre' => 'Navajún',
			),
			346 => 
			array (
				'id' => 4347,
				'id_provincia' => 28,
				'cod_municipio' => 104,
				'DC' => 9,
				'nombre' => 'Paracuellos de Jarama',
			),
			347 => 
			array (
				'id' => 4348,
				'id_provincia' => 31,
				'cod_municipio' => 104,
				'DC' => 3,
				'nombre' => 'Falces',
			),
			348 => 
			array (
				'id' => 4349,
				'id_provincia' => 34,
				'cod_municipio' => 104,
				'DC' => 9,
				'nombre' => 'Melgar de Yuso',
			),
			349 => 
			array (
				'id' => 4350,
				'id_provincia' => 37,
				'cod_municipio' => 104,
				'DC' => 1,
				'nombre' => 'Cilleros de la Bastida',
			),
			350 => 
			array (
				'id' => 4351,
				'id_provincia' => 40,
				'cod_municipio' => 104,
				'DC' => 4,
				'nombre' => 'Ituero y Lama',
			),
			351 => 
			array (
				'id' => 4352,
				'id_provincia' => 43,
				'cod_municipio' => 104,
				'DC' => 2,
				'nombre' => 'Perelló, El',
			),
			352 => 
			array (
				'id' => 4353,
				'id_provincia' => 45,
				'cod_municipio' => 104,
				'DC' => 0,
				'nombre' => 'Montearagón',
			),
			353 => 
			array (
				'id' => 4354,
				'id_provincia' => 46,
				'cod_municipio' => 104,
				'DC' => 3,
				'nombre' => 'Quatretonda',
			),
			354 => 
			array (
				'id' => 4355,
				'id_provincia' => 47,
				'cod_municipio' => 104,
				'DC' => 9,
				'nombre' => 'Olmedo',
			),
			355 => 
			array (
				'id' => 4356,
				'id_provincia' => 49,
				'cod_municipio' => 104,
				'DC' => 8,
				'nombre' => 'Mahide',
			),
			356 => 
			array (
				'id' => 4357,
				'id_provincia' => 50,
				'cod_municipio' => 104,
				'DC' => 1,
				'nombre' => 'Farlete',
			),
			357 => 
			array (
				'id' => 4358,
				'id_provincia' => 3,
				'cod_municipio' => 105,
				'DC' => 3,
				'nombre' => 'Pinós, el/Pinoso',
			),
			358 => 
			array (
				'id' => 4359,
				'id_provincia' => 5,
				'cod_municipio' => 105,
				'DC' => 1,
				'nombre' => 'Hoyos del Espino',
			),
			359 => 
			array (
				'id' => 4360,
				'id_provincia' => 6,
				'cod_municipio' => 105,
				'DC' => 4,
				'nombre' => 'Puebla del Maestre',
			),
			360 => 
			array (
				'id' => 4361,
				'id_provincia' => 8,
				'cod_municipio' => 105,
				'DC' => 6,
				'nombre' => 'Llagosta, La',
			),
			361 => 
			array (
				'id' => 4362,
				'id_provincia' => 9,
				'cod_municipio' => 105,
				'DC' => 9,
				'nombre' => 'Ciruelos de Cervera',
			),
			362 => 
			array (
				'id' => 4363,
				'id_provincia' => 10,
				'cod_municipio' => 105,
				'DC' => 3,
				'nombre' => 'Jarandilla de la Vera',
			),
			363 => 
			array (
				'id' => 4364,
				'id_provincia' => 12,
				'cod_municipio' => 105,
				'DC' => 5,
				'nombre' => 'Sierra Engarcerán',
			),
			364 => 
			array (
				'id' => 4365,
				'id_provincia' => 17,
				'cod_municipio' => 105,
				'DC' => 8,
				'nombre' => 'Mieres',
			),
			365 => 
			array (
				'id' => 4366,
				'id_provincia' => 18,
				'cod_municipio' => 105,
				'DC' => 4,
				'nombre' => 'Iznalloz',
			),
			366 => 
			array (
				'id' => 4367,
				'id_provincia' => 19,
				'cod_municipio' => 105,
				'DC' => 7,
				'nombre' => 'Chiloeches',
			),
			367 => 
			array (
				'id' => 4368,
				'id_provincia' => 22,
				'cod_municipio' => 105,
				'DC' => 3,
				'nombre' => 'Estopiñán del Castillo',
			),
			368 => 
			array (
				'id' => 4369,
				'id_provincia' => 24,
				'cod_municipio' => 105,
				'DC' => 4,
				'nombre' => 'Onzonilla',
			),
			369 => 
			array (
				'id' => 4370,
				'id_provincia' => 25,
				'cod_municipio' => 105,
				'DC' => 7,
				'nombre' => 'Granyena de les Garrigues',
			),
			370 => 
			array (
				'id' => 4371,
				'id_provincia' => 26,
				'cod_municipio' => 105,
				'DC' => 0,
				'nombre' => 'Navarrete',
			),
			371 => 
			array (
				'id' => 4372,
				'id_provincia' => 31,
				'cod_municipio' => 105,
				'DC' => 6,
				'nombre' => 'Fitero',
			),
			372 => 
			array (
				'id' => 4373,
				'id_provincia' => 40,
				'cod_municipio' => 105,
				'DC' => 7,
				'nombre' => 'Juarros de Riomoros',
			),
			373 => 
			array (
				'id' => 4374,
				'id_provincia' => 42,
				'cod_municipio' => 105,
				'DC' => 9,
				'nombre' => 'Liceras',
			),
			374 => 
			array (
				'id' => 4375,
				'id_provincia' => 43,
				'cod_municipio' => 105,
				'DC' => 5,
				'nombre' => 'Piles, Les',
			),
			375 => 
			array (
				'id' => 4376,
				'id_provincia' => 44,
				'cod_municipio' => 105,
				'DC' => 0,
				'nombre' => 'Fórnoles',
			),
			376 => 
			array (
				'id' => 4377,
				'id_provincia' => 45,
				'cod_municipio' => 105,
				'DC' => 3,
				'nombre' => 'Montesclaros',
			),
			377 => 
			array (
				'id' => 4378,
				'id_provincia' => 46,
				'cod_municipio' => 105,
				'DC' => 6,
				'nombre' => 'Cullera',
			),
			378 => 
			array (
				'id' => 4379,
				'id_provincia' => 47,
				'cod_municipio' => 105,
				'DC' => 2,
				'nombre' => 'Olmos de Esgueva',
			),
			379 => 
			array (
				'id' => 4380,
				'id_provincia' => 49,
				'cod_municipio' => 105,
				'DC' => 1,
				'nombre' => 'Maire de Castroponce',
			),
			380 => 
			array (
				'id' => 4381,
				'id_provincia' => 50,
				'cod_municipio' => 105,
				'DC' => 4,
				'nombre' => 'Fayón',
			),
			381 => 
			array (
				'id' => 4382,
				'id_provincia' => 3,
				'cod_municipio' => 106,
				'DC' => 6,
				'nombre' => 'Planes',
			),
			382 => 
			array (
				'id' => 4383,
				'id_provincia' => 5,
				'cod_municipio' => 106,
				'DC' => 4,
				'nombre' => 'Hoyos de Miguel Muñoz',
			),
			383 => 
			array (
				'id' => 4384,
				'id_provincia' => 6,
				'cod_municipio' => 106,
				'DC' => 7,
				'nombre' => 'Puebla del Prior',
			),
			384 => 
			array (
				'id' => 4385,
				'id_provincia' => 8,
				'cod_municipio' => 106,
				'DC' => 9,
				'nombre' => 'Llinars del Vallès',
			),
			385 => 
			array (
				'id' => 4386,
				'id_provincia' => 10,
				'cod_municipio' => 106,
				'DC' => 6,
				'nombre' => 'Jarilla',
			),
			386 => 
			array (
				'id' => 4387,
				'id_provincia' => 12,
				'cod_municipio' => 106,
				'DC' => 8,
				'nombre' => 'Soneja',
			),
			387 => 
			array (
				'id' => 4388,
				'id_provincia' => 16,
				'cod_municipio' => 106,
				'DC' => 5,
				'nombre' => 'Horcajo de Santiago',
			),
			388 => 
			array (
				'id' => 4389,
				'id_provincia' => 17,
				'cod_municipio' => 106,
				'DC' => 1,
				'nombre' => 'Mollet de Peralada',
			),
			389 => 
			array (
				'id' => 4390,
				'id_provincia' => 19,
				'cod_municipio' => 106,
				'DC' => 0,
				'nombre' => 'Chillarón del Rey',
			),
			390 => 
			array (
				'id' => 4391,
				'id_provincia' => 22,
				'cod_municipio' => 106,
				'DC' => 6,
				'nombre' => 'Fago',
			),
			391 => 
			array (
				'id' => 4392,
				'id_provincia' => 24,
				'cod_municipio' => 106,
				'DC' => 7,
				'nombre' => 'Oseja de Sajambre',
			),
			392 => 
			array (
				'id' => 4393,
				'id_provincia' => 26,
				'cod_municipio' => 106,
				'DC' => 3,
				'nombre' => 'Nestares',
			),
			393 => 
			array (
				'id' => 4394,
				'id_provincia' => 28,
				'cod_municipio' => 106,
				'DC' => 5,
				'nombre' => 'Parla',
			),
			394 => 
			array (
				'id' => 4395,
				'id_provincia' => 31,
				'cod_municipio' => 106,
				'DC' => 9,
				'nombre' => 'Fontellas',
			),
			395 => 
			array (
				'id' => 4396,
				'id_provincia' => 34,
				'cod_municipio' => 106,
				'DC' => 5,
				'nombre' => 'Meneses de Campos',
			),
			396 => 
			array (
				'id' => 4397,
				'id_provincia' => 37,
				'cod_municipio' => 106,
				'DC' => 7,
				'nombre' => 'Cipérez',
			),
			397 => 
			array (
				'id' => 4398,
				'id_provincia' => 40,
				'cod_municipio' => 106,
				'DC' => 0,
				'nombre' => 'Juarros de Voltoya',
			),
			398 => 
			array (
				'id' => 4399,
				'id_provincia' => 42,
				'cod_municipio' => 106,
				'DC' => 2,
				'nombre' => 'Losilla, La',
			),
			399 => 
			array (
				'id' => 4400,
				'id_provincia' => 43,
				'cod_municipio' => 106,
				'DC' => 8,
				'nombre' => 'Pinell de Brai, El',
			),
			400 => 
			array (
				'id' => 4401,
				'id_provincia' => 44,
				'cod_municipio' => 106,
				'DC' => 3,
				'nombre' => 'Fortanete',
			),
			401 => 
			array (
				'id' => 4402,
				'id_provincia' => 45,
				'cod_municipio' => 106,
				'DC' => 6,
				'nombre' => 'Mora',
			),
			402 => 
			array (
				'id' => 4403,
				'id_provincia' => 46,
				'cod_municipio' => 106,
				'DC' => 9,
				'nombre' => 'Chelva',
			),
			403 => 
			array (
				'id' => 4404,
				'id_provincia' => 47,
				'cod_municipio' => 106,
				'DC' => 5,
				'nombre' => 'Olmos de Peñafiel',
			),
			404 => 
			array (
				'id' => 4405,
				'id_provincia' => 50,
				'cod_municipio' => 106,
				'DC' => 7,
				'nombre' => 'Fayos, Los',
			),
			405 => 
			array (
				'id' => 4406,
				'id_provincia' => 3,
				'cod_municipio' => 107,
				'DC' => 2,
				'nombre' => 'Polop',
			),
			406 => 
			array (
				'id' => 4407,
				'id_provincia' => 5,
				'cod_municipio' => 107,
				'DC' => 0,
				'nombre' => 'Hurtumpascual',
			),
			407 => 
			array (
				'id' => 4408,
				'id_provincia' => 6,
				'cod_municipio' => 107,
				'DC' => 3,
				'nombre' => 'Puebla de Obando',
			),
			408 => 
			array (
				'id' => 4409,
				'id_provincia' => 8,
				'cod_municipio' => 107,
				'DC' => 5,
				'nombre' => 'Lliçà d\'Amunt',
			),
			409 => 
			array (
				'id' => 4410,
				'id_provincia' => 10,
				'cod_municipio' => 107,
				'DC' => 2,
				'nombre' => 'Jerte',
			),
			410 => 
			array (
				'id' => 4411,
				'id_provincia' => 12,
				'cod_municipio' => 107,
				'DC' => 4,
				'nombre' => 'Sot de Ferrer',
			),
			411 => 
			array (
				'id' => 4412,
				'id_provincia' => 16,
				'cod_municipio' => 107,
				'DC' => 1,
				'nombre' => 'Huélamo',
			),
			412 => 
			array (
				'id' => 4413,
				'id_provincia' => 17,
				'cod_municipio' => 107,
				'DC' => 7,
				'nombre' => 'Molló',
			),
			413 => 
			array (
				'id' => 4414,
				'id_provincia' => 18,
				'cod_municipio' => 107,
				'DC' => 3,
				'nombre' => 'Jayena',
			),
			414 => 
			array (
				'id' => 4415,
				'id_provincia' => 19,
				'cod_municipio' => 107,
				'DC' => 6,
				'nombre' => 'Driebes',
			),
			415 => 
			array (
				'id' => 4416,
				'id_provincia' => 22,
				'cod_municipio' => 107,
				'DC' => 2,
				'nombre' => 'Fanlo',
			),
			416 => 
			array (
				'id' => 4417,
				'id_provincia' => 24,
				'cod_municipio' => 107,
				'DC' => 3,
				'nombre' => 'Pajares de los Oteros',
			),
			417 => 
			array (
				'id' => 4418,
				'id_provincia' => 26,
				'cod_municipio' => 107,
				'DC' => 9,
				'nombre' => 'Nieva de Cameros',
			),
			418 => 
			array (
				'id' => 4419,
				'id_provincia' => 28,
				'cod_municipio' => 107,
				'DC' => 1,
				'nombre' => 'Patones',
			),
			419 => 
			array (
				'id' => 4420,
				'id_provincia' => 31,
				'cod_municipio' => 107,
				'DC' => 5,
				'nombre' => 'Funes',
			),
			420 => 
			array (
				'id' => 4421,
				'id_provincia' => 34,
				'cod_municipio' => 107,
				'DC' => 1,
				'nombre' => 'Micieces de Ojeda',
			),
			421 => 
			array (
				'id' => 4422,
				'id_provincia' => 37,
				'cod_municipio' => 107,
				'DC' => 3,
				'nombre' => 'Ciudad Rodrigo',
			),
			422 => 
			array (
				'id' => 4423,
				'id_provincia' => 40,
				'cod_municipio' => 107,
				'DC' => 6,
				'nombre' => 'Labajos',
			),
			423 => 
			array (
				'id' => 4424,
				'id_provincia' => 42,
				'cod_municipio' => 107,
				'DC' => 8,
				'nombre' => 'Magaña',
			),
			424 => 
			array (
				'id' => 4425,
				'id_provincia' => 43,
				'cod_municipio' => 107,
				'DC' => 4,
				'nombre' => 'Pira',
			),
			425 => 
			array (
				'id' => 4426,
				'id_provincia' => 44,
				'cod_municipio' => 107,
				'DC' => 9,
				'nombre' => 'Foz-Calanda',
			),
			426 => 
			array (
				'id' => 4427,
				'id_provincia' => 45,
				'cod_municipio' => 107,
				'DC' => 2,
				'nombre' => 'Nambroca',
			),
			427 => 
			array (
				'id' => 4428,
				'id_provincia' => 46,
				'cod_municipio' => 107,
				'DC' => 5,
				'nombre' => 'Chella',
			),
			428 => 
			array (
				'id' => 4429,
				'id_provincia' => 49,
				'cod_municipio' => 107,
				'DC' => 0,
				'nombre' => 'Malva',
			),
			429 => 
			array (
				'id' => 4430,
				'id_provincia' => 50,
				'cod_municipio' => 107,
				'DC' => 3,
				'nombre' => 'Figueruelas',
			),
			430 => 
			array (
				'id' => 4431,
				'id_provincia' => 5,
				'cod_municipio' => 108,
				'DC' => 6,
				'nombre' => 'Junciana',
			),
			431 => 
			array (
				'id' => 4432,
				'id_provincia' => 6,
				'cod_municipio' => 108,
				'DC' => 9,
				'nombre' => 'Puebla de Sancho Pérez',
			),
			432 => 
			array (
				'id' => 4433,
				'id_provincia' => 8,
				'cod_municipio' => 108,
				'DC' => 1,
				'nombre' => 'Lliçà de Vall',
			),
			433 => 
			array (
				'id' => 4434,
				'id_provincia' => 9,
				'cod_municipio' => 108,
				'DC' => 4,
				'nombre' => 'Cogollos',
			),
			434 => 
			array (
				'id' => 4435,
				'id_provincia' => 10,
				'cod_municipio' => 108,
				'DC' => 8,
				'nombre' => 'Ladrillar',
			),
			435 => 
			array (
				'id' => 4436,
				'id_provincia' => 12,
				'cod_municipio' => 108,
				'DC' => 0,
				'nombre' => 'Sueras/Suera',
			),
			436 => 
			array (
				'id' => 4437,
				'id_provincia' => 16,
				'cod_municipio' => 108,
				'DC' => 7,
				'nombre' => 'Huelves',
			),
			437 => 
			array (
				'id' => 4438,
				'id_provincia' => 18,
				'cod_municipio' => 108,
				'DC' => 9,
				'nombre' => 'Jerez del Marquesado',
			),
			438 => 
			array (
				'id' => 4439,
				'id_provincia' => 19,
				'cod_municipio' => 108,
				'DC' => 2,
				'nombre' => 'Durón',
			),
			439 => 
			array (
				'id' => 4440,
				'id_provincia' => 24,
				'cod_municipio' => 108,
				'DC' => 9,
				'nombre' => 'Palacios de la Valduerna',
			),
			440 => 
			array (
				'id' => 4441,
				'id_provincia' => 26,
				'cod_municipio' => 108,
				'DC' => 5,
				'nombre' => 'Ocón',
			),
			441 => 
			array (
				'id' => 4442,
				'id_provincia' => 28,
				'cod_municipio' => 108,
				'DC' => 7,
				'nombre' => 'Pedrezuela',
			),
			442 => 
			array (
				'id' => 4443,
				'id_provincia' => 31,
				'cod_municipio' => 108,
				'DC' => 1,
				'nombre' => 'Fustiñana',
			),
			443 => 
			array (
				'id' => 4444,
				'id_provincia' => 34,
				'cod_municipio' => 108,
				'DC' => 7,
				'nombre' => 'Monzón de Campos',
			),
			444 => 
			array (
				'id' => 4445,
				'id_provincia' => 37,
				'cod_municipio' => 108,
				'DC' => 9,
				'nombre' => 'Coca de Alba',
			),
			445 => 
			array (
				'id' => 4446,
				'id_provincia' => 40,
				'cod_municipio' => 108,
				'DC' => 2,
				'nombre' => 'Laguna de Contreras',
			),
			446 => 
			array (
				'id' => 4447,
				'id_provincia' => 42,
				'cod_municipio' => 108,
				'DC' => 4,
				'nombre' => 'Maján',
			),
			447 => 
			array (
				'id' => 4448,
				'id_provincia' => 43,
				'cod_municipio' => 108,
				'DC' => 0,
				'nombre' => 'Pla de Santa Maria, El',
			),
			448 => 
			array (
				'id' => 4449,
				'id_provincia' => 44,
				'cod_municipio' => 108,
				'DC' => 5,
				'nombre' => 'Fresneda, La',
			),
			449 => 
			array (
				'id' => 4450,
				'id_provincia' => 45,
				'cod_municipio' => 108,
				'DC' => 8,
				'nombre' => 'Nava de Ricomalillo, La',
			),
			450 => 
			array (
				'id' => 4451,
				'id_provincia' => 46,
				'cod_municipio' => 108,
				'DC' => 1,
				'nombre' => 'Chera',
			),
			451 => 
			array (
				'id' => 4452,
				'id_provincia' => 49,
				'cod_municipio' => 108,
				'DC' => 6,
				'nombre' => 'Manganeses de la Lampreana',
			),
			452 => 
			array (
				'id' => 4453,
				'id_provincia' => 50,
				'cod_municipio' => 108,
				'DC' => 9,
				'nombre' => 'Fombuena',
			),
			453 => 
			array (
				'id' => 4454,
				'id_provincia' => 3,
				'cod_municipio' => 109,
				'DC' => 1,
				'nombre' => 'Rafal',
			),
			454 => 
			array (
				'id' => 4455,
				'id_provincia' => 5,
				'cod_municipio' => 109,
				'DC' => 9,
				'nombre' => 'Langa',
			),
			455 => 
			array (
				'id' => 4456,
				'id_provincia' => 6,
				'cod_municipio' => 109,
				'DC' => 2,
				'nombre' => 'Quintana de la Serena',
			),
			456 => 
			array (
				'id' => 4457,
				'id_provincia' => 8,
				'cod_municipio' => 109,
				'DC' => 4,
				'nombre' => 'Lluçà',
			),
			457 => 
			array (
				'id' => 4458,
				'id_provincia' => 9,
				'cod_municipio' => 109,
				'DC' => 7,
				'nombre' => 'Condado de Treviño',
			),
			458 => 
			array (
				'id' => 4459,
				'id_provincia' => 10,
				'cod_municipio' => 109,
				'DC' => 1,
				'nombre' => 'Logrosán',
			),
			459 => 
			array (
				'id' => 4460,
				'id_provincia' => 12,
				'cod_municipio' => 109,
				'DC' => 3,
				'nombre' => 'Tales',
			),
			460 => 
			array (
				'id' => 4461,
				'id_provincia' => 16,
				'cod_municipio' => 109,
				'DC' => 0,
				'nombre' => 'Huérguina',
			),
			461 => 
			array (
				'id' => 4462,
				'id_provincia' => 17,
				'cod_municipio' => 109,
				'DC' => 6,
				'nombre' => 'Montagut i Oix',
			),
			462 => 
			array (
				'id' => 4463,
				'id_provincia' => 18,
				'cod_municipio' => 109,
				'DC' => 2,
				'nombre' => 'Jete',
			),
			463 => 
			array (
				'id' => 4464,
				'id_provincia' => 19,
				'cod_municipio' => 109,
				'DC' => 5,
				'nombre' => 'Embid',
			),
			464 => 
			array (
				'id' => 4465,
				'id_provincia' => 22,
				'cod_municipio' => 109,
				'DC' => 1,
				'nombre' => 'Fiscal',
			),
			465 => 
			array (
				'id' => 4466,
				'id_provincia' => 24,
				'cod_municipio' => 109,
				'DC' => 2,
				'nombre' => 'Palacios del Sil',
			),
			466 => 
			array (
				'id' => 4467,
				'id_provincia' => 25,
				'cod_municipio' => 109,
				'DC' => 5,
				'nombre' => 'Guimerà',
			),
			467 => 
			array (
				'id' => 4468,
				'id_provincia' => 26,
				'cod_municipio' => 109,
				'DC' => 8,
				'nombre' => 'Ochánduri',
			),
			468 => 
			array (
				'id' => 4469,
				'id_provincia' => 28,
				'cod_municipio' => 109,
				'DC' => 0,
				'nombre' => 'Pelayos de la Presa',
			),
			469 => 
			array (
				'id' => 4470,
				'id_provincia' => 31,
				'cod_municipio' => 109,
				'DC' => 4,
				'nombre' => 'Galar',
			),
			470 => 
			array (
				'id' => 4471,
				'id_provincia' => 34,
				'cod_municipio' => 109,
				'DC' => 0,
				'nombre' => 'Moratinos',
			),
			471 => 
			array (
				'id' => 4472,
				'id_provincia' => 37,
				'cod_municipio' => 109,
				'DC' => 2,
				'nombre' => 'Colmenar de Montemayor',
			),
			472 => 
			array (
				'id' => 4473,
				'id_provincia' => 40,
				'cod_municipio' => 109,
				'DC' => 5,
				'nombre' => 'Languilla',
			),
			473 => 
			array (
				'id' => 4474,
				'id_provincia' => 43,
				'cod_municipio' => 109,
				'DC' => 3,
				'nombre' => 'Pobla de Mafumet, La',
			),
			474 => 
			array (
				'id' => 4475,
				'id_provincia' => 44,
				'cod_municipio' => 109,
				'DC' => 8,
				'nombre' => 'Frías de Albarracín',
			),
			475 => 
			array (
				'id' => 4476,
				'id_provincia' => 45,
				'cod_municipio' => 109,
				'DC' => 1,
				'nombre' => 'Navahermosa',
			),
			476 => 
			array (
				'id' => 4477,
				'id_provincia' => 46,
				'cod_municipio' => 109,
				'DC' => 4,
				'nombre' => 'Cheste',
			),
			477 => 
			array (
				'id' => 4478,
				'id_provincia' => 47,
				'cod_municipio' => 109,
				'DC' => 0,
				'nombre' => 'Palazuelo de Vedija',
			),
			478 => 
			array (
				'id' => 4479,
				'id_provincia' => 49,
				'cod_municipio' => 109,
				'DC' => 9,
				'nombre' => 'Manganeses de la Polvorosa',
			),
			479 => 
			array (
				'id' => 4480,
				'id_provincia' => 50,
				'cod_municipio' => 109,
				'DC' => 2,
				'nombre' => 'Frago, El',
			),
			480 => 
			array (
				'id' => 4481,
				'id_provincia' => 3,
				'cod_municipio' => 110,
				'DC' => 5,
				'nombre' => 'Ràfol d\'Almúnia, El',
			),
			481 => 
			array (
				'id' => 4482,
				'id_provincia' => 5,
				'cod_municipio' => 110,
				'DC' => 3,
				'nombre' => 'Lanzahíta',
			),
			482 => 
			array (
				'id' => 4483,
				'id_provincia' => 6,
				'cod_municipio' => 110,
				'DC' => 6,
				'nombre' => 'Reina',
			),
			483 => 
			array (
				'id' => 4484,
				'id_provincia' => 8,
				'cod_municipio' => 110,
				'DC' => 8,
				'nombre' => 'Malgrat de Mar',
			),
			484 => 
			array (
				'id' => 4485,
				'id_provincia' => 9,
				'cod_municipio' => 110,
				'DC' => 1,
				'nombre' => 'Contreras',
			),
			485 => 
			array (
				'id' => 4486,
				'id_provincia' => 10,
				'cod_municipio' => 110,
				'DC' => 5,
				'nombre' => 'Losar de la Vera',
			),
			486 => 
			array (
				'id' => 4487,
				'id_provincia' => 12,
				'cod_municipio' => 110,
				'DC' => 7,
				'nombre' => 'Teresa',
			),
			487 => 
			array (
				'id' => 4488,
				'id_provincia' => 16,
				'cod_municipio' => 110,
				'DC' => 4,
				'nombre' => 'Huerta de la Obispalía',
			),
			488 => 
			array (
				'id' => 4489,
				'id_provincia' => 17,
				'cod_municipio' => 110,
				'DC' => 0,
				'nombre' => 'Mont-ras',
			),
			489 => 
			array (
				'id' => 4490,
				'id_provincia' => 19,
				'cod_municipio' => 110,
				'DC' => 9,
				'nombre' => 'Escamilla',
			),
			490 => 
			array (
				'id' => 4491,
				'id_provincia' => 22,
				'cod_municipio' => 110,
				'DC' => 5,
				'nombre' => 'Fonz',
			),
			491 => 
			array (
				'id' => 4492,
				'id_provincia' => 24,
				'cod_municipio' => 110,
				'DC' => 6,
				'nombre' => 'Páramo del Sil',
			),
			492 => 
			array (
				'id' => 4493,
				'id_provincia' => 25,
				'cod_municipio' => 110,
				'DC' => 9,
				'nombre' => 'Guissona',
			),
			493 => 
			array (
				'id' => 4494,
				'id_provincia' => 26,
				'cod_municipio' => 110,
				'DC' => 2,
				'nombre' => 'Ojacastro',
			),
			494 => 
			array (
				'id' => 4495,
				'id_provincia' => 28,
				'cod_municipio' => 110,
				'DC' => 4,
				'nombre' => 'Perales de Tajuña',
			),
			495 => 
			array (
				'id' => 4496,
				'id_provincia' => 31,
				'cod_municipio' => 110,
				'DC' => 8,
				'nombre' => 'Gallipienzo/Galipentzu',
			),
			496 => 
			array (
				'id' => 4497,
				'id_provincia' => 34,
				'cod_municipio' => 110,
				'DC' => 4,
				'nombre' => 'Mudá',
			),
			497 => 
			array (
				'id' => 4498,
				'id_provincia' => 37,
				'cod_municipio' => 110,
				'DC' => 6,
				'nombre' => 'Cordovilla',
			),
			498 => 
			array (
				'id' => 4499,
				'id_provincia' => 40,
				'cod_municipio' => 110,
				'DC' => 9,
				'nombre' => 'Lastras de Cuéllar',
			),
			499 => 
			array (
				'id' => 4500,
				'id_provincia' => 42,
				'cod_municipio' => 110,
				'DC' => 1,
				'nombre' => 'Matalebreras',
			),
		));
		\DB::table('municipios')->insert(array (
			0 => 
			array (
				'id' => 4501,
				'id_provincia' => 43,
				'cod_municipio' => 110,
				'DC' => 7,
				'nombre' => 'Pobla de Massaluca, La',
			),
			1 => 
			array (
				'id' => 4502,
				'id_provincia' => 44,
				'cod_municipio' => 110,
				'DC' => 2,
				'nombre' => 'Fuenferrada',
			),
			2 => 
			array (
				'id' => 4503,
				'id_provincia' => 45,
				'cod_municipio' => 110,
				'DC' => 5,
				'nombre' => 'Navalcán',
			),
			3 => 
			array (
				'id' => 4504,
				'id_provincia' => 46,
				'cod_municipio' => 110,
				'DC' => 8,
				'nombre' => 'Xirivella',
			),
			4 => 
			array (
				'id' => 4505,
				'id_provincia' => 47,
				'cod_municipio' => 110,
				'DC' => 4,
				'nombre' => 'Parrilla, La',
			),
			5 => 
			array (
				'id' => 4506,
				'id_provincia' => 49,
				'cod_municipio' => 110,
				'DC' => 3,
				'nombre' => 'Manzanal de Arriba',
			),
			6 => 
			array (
				'id' => 4507,
				'id_provincia' => 50,
				'cod_municipio' => 110,
				'DC' => 6,
				'nombre' => 'Frasno, El',
			),
			7 => 
			array (
				'id' => 4508,
				'id_provincia' => 3,
				'cod_municipio' => 111,
				'DC' => 2,
				'nombre' => 'Redován',
			),
			8 => 
			array (
				'id' => 4509,
				'id_provincia' => 6,
				'cod_municipio' => 111,
				'DC' => 3,
				'nombre' => 'Rena',
			),
			9 => 
			array (
				'id' => 4510,
				'id_provincia' => 8,
				'cod_municipio' => 111,
				'DC' => 5,
				'nombre' => 'Malla',
			),
			10 => 
			array (
				'id' => 4511,
				'id_provincia' => 10,
				'cod_municipio' => 111,
				'DC' => 2,
				'nombre' => 'Madrigal de la Vera',
			),
			11 => 
			array (
				'id' => 4512,
				'id_provincia' => 12,
				'cod_municipio' => 111,
				'DC' => 4,
				'nombre' => 'Tírig',
			),
			12 => 
			array (
				'id' => 4513,
				'id_provincia' => 16,
				'cod_municipio' => 111,
				'DC' => 1,
				'nombre' => 'Huerta del Marquesado',
			),
			13 => 
			array (
				'id' => 4514,
				'id_provincia' => 17,
				'cod_municipio' => 111,
				'DC' => 7,
				'nombre' => 'Navata',
			),
			14 => 
			array (
				'id' => 4515,
				'id_provincia' => 18,
				'cod_municipio' => 111,
				'DC' => 3,
				'nombre' => 'Jun',
			),
			15 => 
			array (
				'id' => 4516,
				'id_provincia' => 19,
				'cod_municipio' => 111,
				'DC' => 6,
				'nombre' => 'Escariche',
			),
			16 => 
			array (
				'id' => 4517,
				'id_provincia' => 22,
				'cod_municipio' => 111,
				'DC' => 2,
				'nombre' => 'Foradada del Toscar',
			),
			17 => 
			array (
				'id' => 4518,
				'id_provincia' => 25,
				'cod_municipio' => 111,
				'DC' => 6,
				'nombre' => 'Guixers',
			),
			18 => 
			array (
				'id' => 4519,
				'id_provincia' => 26,
				'cod_municipio' => 111,
				'DC' => 9,
				'nombre' => 'Ollauri',
			),
			19 => 
			array (
				'id' => 4520,
				'id_provincia' => 28,
				'cod_municipio' => 111,
				'DC' => 1,
				'nombre' => 'Pezuela de las Torres',
			),
			20 => 
			array (
				'id' => 4521,
				'id_provincia' => 31,
				'cod_municipio' => 111,
				'DC' => 5,
				'nombre' => 'Gallués/Galoze',
			),
			21 => 
			array (
				'id' => 4522,
				'id_provincia' => 40,
				'cod_municipio' => 111,
				'DC' => 6,
				'nombre' => 'Lastras del Pozo',
			),
			22 => 
			array (
				'id' => 4523,
				'id_provincia' => 42,
				'cod_municipio' => 111,
				'DC' => 8,
				'nombre' => 'Matamala de Almazán',
			),
			23 => 
			array (
				'id' => 4524,
				'id_provincia' => 43,
				'cod_municipio' => 111,
				'DC' => 4,
				'nombre' => 'Pobla de Montornès, La',
			),
			24 => 
			array (
				'id' => 4525,
				'id_provincia' => 44,
				'cod_municipio' => 111,
				'DC' => 9,
				'nombre' => 'Fuentes Calientes',
			),
			25 => 
			array (
				'id' => 4526,
				'id_provincia' => 45,
				'cod_municipio' => 111,
				'DC' => 2,
				'nombre' => 'Navalmoralejo',
			),
			26 => 
			array (
				'id' => 4527,
				'id_provincia' => 46,
				'cod_municipio' => 111,
				'DC' => 5,
				'nombre' => 'Chiva',
			),
			27 => 
			array (
				'id' => 4528,
				'id_provincia' => 47,
				'cod_municipio' => 111,
				'DC' => 1,
				'nombre' => 'Pedraja de Portillo, La',
			),
			28 => 
			array (
				'id' => 4529,
				'id_provincia' => 49,
				'cod_municipio' => 111,
				'DC' => 0,
				'nombre' => 'Manzanal del Barco',
			),
			29 => 
			array (
				'id' => 4530,
				'id_provincia' => 50,
				'cod_municipio' => 111,
				'DC' => 3,
				'nombre' => 'Fréscano',
			),
			30 => 
			array (
				'id' => 4531,
				'id_provincia' => 3,
				'cod_municipio' => 112,
				'DC' => 7,
				'nombre' => 'Relleu',
			),
			31 => 
			array (
				'id' => 4532,
				'id_provincia' => 5,
				'cod_municipio' => 112,
				'DC' => 5,
				'nombre' => 'Losar del Barco, El',
			),
			32 => 
			array (
				'id' => 4533,
				'id_provincia' => 6,
				'cod_municipio' => 112,
				'DC' => 8,
				'nombre' => 'Retamal de Llerena',
			),
			33 => 
			array (
				'id' => 4534,
				'id_provincia' => 8,
				'cod_municipio' => 112,
				'DC' => 0,
				'nombre' => 'Manlleu',
			),
			34 => 
			array (
				'id' => 4535,
				'id_provincia' => 9,
				'cod_municipio' => 112,
				'DC' => 3,
				'nombre' => 'Coruña del Conde',
			),
			35 => 
			array (
				'id' => 4536,
				'id_provincia' => 10,
				'cod_municipio' => 112,
				'DC' => 7,
				'nombre' => 'Madrigalejo',
			),
			36 => 
			array (
				'id' => 4537,
				'id_provincia' => 12,
				'cod_municipio' => 112,
				'DC' => 9,
				'nombre' => 'Todolella',
			),
			37 => 
			array (
				'id' => 4538,
				'id_provincia' => 16,
				'cod_municipio' => 112,
				'DC' => 6,
				'nombre' => 'Huete',
			),
			38 => 
			array (
				'id' => 4539,
				'id_provincia' => 17,
				'cod_municipio' => 112,
				'DC' => 2,
				'nombre' => 'Ogassa',
			),
			39 => 
			array (
				'id' => 4540,
				'id_provincia' => 18,
				'cod_municipio' => 112,
				'DC' => 8,
				'nombre' => 'Juviles',
			),
			40 => 
			array (
				'id' => 4541,
				'id_provincia' => 19,
				'cod_municipio' => 112,
				'DC' => 1,
				'nombre' => 'Escopete',
			),
			41 => 
			array (
				'id' => 4542,
				'id_provincia' => 22,
				'cod_municipio' => 112,
				'DC' => 7,
				'nombre' => 'Fraga',
			),
			42 => 
			array (
				'id' => 4543,
				'id_provincia' => 24,
				'cod_municipio' => 112,
				'DC' => 8,
				'nombre' => 'Peranzanes',
			),
			43 => 
			array (
				'id' => 4544,
				'id_provincia' => 25,
				'cod_municipio' => 112,
				'DC' => 1,
				'nombre' => 'Ivars de Noguera',
			),
			44 => 
			array (
				'id' => 4545,
				'id_provincia' => 26,
				'cod_municipio' => 112,
				'DC' => 4,
				'nombre' => 'Ortigosa de Cameros',
			),
			45 => 
			array (
				'id' => 4546,
				'id_provincia' => 28,
				'cod_municipio' => 112,
				'DC' => 6,
				'nombre' => 'Pinilla del Valle',
			),
			46 => 
			array (
				'id' => 4547,
				'id_provincia' => 31,
				'cod_municipio' => 112,
				'DC' => 0,
				'nombre' => 'Garaioa',
			),
			47 => 
			array (
				'id' => 4548,
				'id_provincia' => 34,
				'cod_municipio' => 112,
				'DC' => 6,
				'nombre' => 'Nogal de las Huertas',
			),
			48 => 
			array (
				'id' => 4549,
				'id_provincia' => 37,
				'cod_municipio' => 112,
				'DC' => 8,
				'nombre' => 'Cristóbal',
			),
			49 => 
			array (
				'id' => 4550,
				'id_provincia' => 40,
				'cod_municipio' => 112,
				'DC' => 1,
				'nombre' => 'Lastrilla, La',
			),
			50 => 
			array (
				'id' => 4551,
				'id_provincia' => 43,
				'cod_municipio' => 112,
				'DC' => 9,
				'nombre' => 'Poboleda',
			),
			51 => 
			array (
				'id' => 4552,
				'id_provincia' => 44,
				'cod_municipio' => 112,
				'DC' => 4,
				'nombre' => 'Fuentes Claras',
			),
			52 => 
			array (
				'id' => 4553,
				'id_provincia' => 45,
				'cod_municipio' => 112,
				'DC' => 7,
				'nombre' => 'Navalmorales, Los',
			),
			53 => 
			array (
				'id' => 4554,
				'id_provincia' => 46,
				'cod_municipio' => 112,
				'DC' => 0,
				'nombre' => 'Chulilla',
			),
			54 => 
			array (
				'id' => 4555,
				'id_provincia' => 47,
				'cod_municipio' => 112,
				'DC' => 6,
				'nombre' => 'Pedrajas de San Esteban',
			),
			55 => 
			array (
				'id' => 4556,
				'id_provincia' => 49,
				'cod_municipio' => 112,
				'DC' => 5,
				'nombre' => 'Manzanal de los Infantes',
			),
			56 => 
			array (
				'id' => 4557,
				'id_provincia' => 3,
				'cod_municipio' => 113,
				'DC' => 3,
				'nombre' => 'Rojales',
			),
			57 => 
			array (
				'id' => 4558,
				'id_provincia' => 5,
				'cod_municipio' => 113,
				'DC' => 1,
				'nombre' => 'Llanos de Tormes, Los',
			),
			58 => 
			array (
				'id' => 4559,
				'id_provincia' => 6,
				'cod_municipio' => 113,
				'DC' => 4,
				'nombre' => 'Ribera del Fresno',
			),
			59 => 
			array (
				'id' => 4560,
				'id_provincia' => 8,
				'cod_municipio' => 113,
				'DC' => 6,
				'nombre' => 'Manresa',
			),
			60 => 
			array (
				'id' => 4561,
				'id_provincia' => 9,
				'cod_municipio' => 113,
				'DC' => 9,
				'nombre' => 'Covarrubias',
			),
			61 => 
			array (
				'id' => 4562,
				'id_provincia' => 10,
				'cod_municipio' => 113,
				'DC' => 3,
				'nombre' => 'Madroñera',
			),
			62 => 
			array (
				'id' => 4563,
				'id_provincia' => 12,
				'cod_municipio' => 113,
				'DC' => 5,
				'nombre' => 'Toga',
			),
			63 => 
			array (
				'id' => 4564,
				'id_provincia' => 16,
				'cod_municipio' => 113,
				'DC' => 2,
				'nombre' => 'Iniesta',
			),
			64 => 
			array (
				'id' => 4565,
				'id_provincia' => 19,
				'cod_municipio' => 113,
				'DC' => 7,
				'nombre' => 'Espinosa de Henares',
			),
			65 => 
			array (
				'id' => 4566,
				'id_provincia' => 22,
				'cod_municipio' => 113,
				'DC' => 3,
				'nombre' => 'Fueva, La',
			),
			66 => 
			array (
				'id' => 4567,
				'id_provincia' => 24,
				'cod_municipio' => 113,
				'DC' => 4,
				'nombre' => 'Pobladura de Pelayo García',
			),
			67 => 
			array (
				'id' => 4568,
				'id_provincia' => 25,
				'cod_municipio' => 113,
				'DC' => 7,
				'nombre' => 'Ivars d\'Urgell',
			),
			68 => 
			array (
				'id' => 4569,
				'id_provincia' => 26,
				'cod_municipio' => 113,
				'DC' => 0,
				'nombre' => 'Pazuengos',
			),
			69 => 
			array (
				'id' => 4570,
				'id_provincia' => 28,
				'cod_municipio' => 113,
				'DC' => 2,
				'nombre' => 'Pinto',
			),
			70 => 
			array (
				'id' => 4571,
				'id_provincia' => 31,
				'cod_municipio' => 113,
				'DC' => 6,
				'nombre' => 'Garde',
			),
			71 => 
			array (
				'id' => 4572,
				'id_provincia' => 34,
				'cod_municipio' => 113,
				'DC' => 2,
				'nombre' => 'Olea de Boedo',
			),
			72 => 
			array (
				'id' => 4573,
				'id_provincia' => 37,
				'cod_municipio' => 113,
				'DC' => 4,
				'nombre' => 'Cubo de Don Sancho, El',
			),
			73 => 
			array (
				'id' => 4574,
				'id_provincia' => 40,
				'cod_municipio' => 113,
				'DC' => 7,
				'nombre' => 'Losa, La',
			),
			74 => 
			array (
				'id' => 4575,
				'id_provincia' => 42,
				'cod_municipio' => 113,
				'DC' => 9,
				'nombre' => 'Medinaceli',
			),
			75 => 
			array (
				'id' => 4576,
				'id_provincia' => 43,
				'cod_municipio' => 113,
				'DC' => 5,
				'nombre' => 'Pont d\'Armentera, El',
			),
			76 => 
			array (
				'id' => 4577,
				'id_provincia' => 44,
				'cod_municipio' => 113,
				'DC' => 0,
				'nombre' => 'Fuentes de Rubielos',
			),
			77 => 
			array (
				'id' => 4578,
				'id_provincia' => 45,
				'cod_municipio' => 113,
				'DC' => 3,
				'nombre' => 'Navalucillos, Los',
			),
			78 => 
			array (
				'id' => 4579,
				'id_provincia' => 46,
				'cod_municipio' => 113,
				'DC' => 6,
				'nombre' => 'Daimús',
			),
			79 => 
			array (
				'id' => 4580,
				'id_provincia' => 47,
				'cod_municipio' => 113,
				'DC' => 2,
				'nombre' => 'Pedrosa del Rey',
			),
			80 => 
			array (
				'id' => 4581,
				'id_provincia' => 49,
				'cod_municipio' => 113,
				'DC' => 1,
				'nombre' => 'Matilla de Arzón',
			),
			81 => 
			array (
				'id' => 4582,
				'id_provincia' => 50,
				'cod_municipio' => 113,
				'DC' => 4,
				'nombre' => 'Fuendejalón',
			),
			82 => 
			array (
				'id' => 4583,
				'id_provincia' => 3,
				'cod_municipio' => 114,
				'DC' => 8,
				'nombre' => 'Romana, la',
			),
			83 => 
			array (
				'id' => 4584,
				'id_provincia' => 5,
				'cod_municipio' => 114,
				'DC' => 6,
				'nombre' => 'Madrigal de las Altas Torres',
			),
			84 => 
			array (
				'id' => 4585,
				'id_provincia' => 6,
				'cod_municipio' => 114,
				'DC' => 9,
				'nombre' => 'Risco',
			),
			85 => 
			array (
				'id' => 4586,
				'id_provincia' => 8,
				'cod_municipio' => 114,
				'DC' => 1,
				'nombre' => 'Martorell',
			),
			86 => 
			array (
				'id' => 4587,
				'id_provincia' => 9,
				'cod_municipio' => 114,
				'DC' => 4,
				'nombre' => 'Cubillo del Campo',
			),
			87 => 
			array (
				'id' => 4588,
				'id_provincia' => 10,
				'cod_municipio' => 114,
				'DC' => 8,
				'nombre' => 'Majadas',
			),
			88 => 
			array (
				'id' => 4589,
				'id_provincia' => 12,
				'cod_municipio' => 114,
				'DC' => 0,
				'nombre' => 'Torás',
			),
			89 => 
			array (
				'id' => 4590,
				'id_provincia' => 17,
				'cod_municipio' => 114,
				'DC' => 3,
				'nombre' => 'Olot',
			),
			90 => 
			array (
				'id' => 4591,
				'id_provincia' => 18,
				'cod_municipio' => 114,
				'DC' => 9,
				'nombre' => 'Calahorra, La',
			),
			91 => 
			array (
				'id' => 4592,
				'id_provincia' => 19,
				'cod_municipio' => 114,
				'DC' => 2,
				'nombre' => 'Esplegares',
			),
			92 => 
			array (
				'id' => 4593,
				'id_provincia' => 22,
				'cod_municipio' => 114,
				'DC' => 8,
				'nombre' => 'Gistaín',
			),
			93 => 
			array (
				'id' => 4594,
				'id_provincia' => 24,
				'cod_municipio' => 114,
				'DC' => 9,
				'nombre' => 'Pola de Gordón, La',
			),
			94 => 
			array (
				'id' => 4595,
				'id_provincia' => 25,
				'cod_municipio' => 114,
				'DC' => 2,
				'nombre' => 'Ivorra',
			),
			95 => 
			array (
				'id' => 4596,
				'id_provincia' => 26,
				'cod_municipio' => 114,
				'DC' => 5,
				'nombre' => 'Pedroso',
			),
			96 => 
			array (
				'id' => 4597,
				'id_provincia' => 28,
				'cod_municipio' => 114,
				'DC' => 7,
				'nombre' => 'Piñuécar-Gandullas',
			),
			97 => 
			array (
				'id' => 4598,
				'id_provincia' => 31,
				'cod_municipio' => 114,
				'DC' => 1,
				'nombre' => 'Garínoain',
			),
			98 => 
			array (
				'id' => 4599,
				'id_provincia' => 34,
				'cod_municipio' => 114,
				'DC' => 7,
				'nombre' => 'Olmos de Ojeda',
			),
			99 => 
			array (
				'id' => 4600,
				'id_provincia' => 37,
				'cod_municipio' => 114,
				'DC' => 9,
				'nombre' => 'Chagarcía Medianero',
			),
			100 => 
			array (
				'id' => 4601,
				'id_provincia' => 43,
				'cod_municipio' => 114,
				'DC' => 0,
				'nombre' => 'Porrera',
			),
			101 => 
			array (
				'id' => 4602,
				'id_provincia' => 44,
				'cod_municipio' => 114,
				'DC' => 5,
				'nombre' => 'Fuentespalda',
			),
			102 => 
			array (
				'id' => 4603,
				'id_provincia' => 45,
				'cod_municipio' => 114,
				'DC' => 8,
				'nombre' => 'Navamorcuende',
			),
			103 => 
			array (
				'id' => 4604,
				'id_provincia' => 46,
				'cod_municipio' => 114,
				'DC' => 1,
				'nombre' => 'Domeño',
			),
			104 => 
			array (
				'id' => 4605,
				'id_provincia' => 47,
				'cod_municipio' => 114,
				'DC' => 7,
				'nombre' => 'Peñafiel',
			),
			105 => 
			array (
				'id' => 4606,
				'id_provincia' => 49,
				'cod_municipio' => 114,
				'DC' => 6,
				'nombre' => 'Matilla la Seca',
			),
			106 => 
			array (
				'id' => 4607,
				'id_provincia' => 50,
				'cod_municipio' => 114,
				'DC' => 9,
				'nombre' => 'Fuendetodos',
			),
			107 => 
			array (
				'id' => 4608,
				'id_provincia' => 3,
				'cod_municipio' => 115,
				'DC' => 1,
				'nombre' => 'Sagra',
			),
			108 => 
			array (
				'id' => 4609,
				'id_provincia' => 5,
				'cod_municipio' => 115,
				'DC' => 9,
				'nombre' => 'Maello',
			),
			109 => 
			array (
				'id' => 4610,
				'id_provincia' => 6,
				'cod_municipio' => 115,
				'DC' => 2,
				'nombre' => 'Roca de la Sierra, La',
			),
			110 => 
			array (
				'id' => 4611,
				'id_provincia' => 8,
				'cod_municipio' => 115,
				'DC' => 4,
				'nombre' => 'Martorelles',
			),
			111 => 
			array (
				'id' => 4612,
				'id_provincia' => 9,
				'cod_municipio' => 115,
				'DC' => 7,
				'nombre' => 'Cubo de Bureba',
			),
			112 => 
			array (
				'id' => 4613,
				'id_provincia' => 10,
				'cod_municipio' => 115,
				'DC' => 1,
				'nombre' => 'Malpartida de Cáceres',
			),
			113 => 
			array (
				'id' => 4614,
				'id_provincia' => 12,
				'cod_municipio' => 115,
				'DC' => 3,
				'nombre' => 'Toro, El',
			),
			114 => 
			array (
				'id' => 4615,
				'id_provincia' => 16,
				'cod_municipio' => 115,
				'DC' => 0,
				'nombre' => 'Laguna del Marquesado',
			),
			115 => 
			array (
				'id' => 4616,
				'id_provincia' => 17,
				'cod_municipio' => 115,
				'DC' => 6,
				'nombre' => 'Ordis',
			),
			116 => 
			array (
				'id' => 4617,
				'id_provincia' => 18,
				'cod_municipio' => 115,
				'DC' => 2,
				'nombre' => 'Láchar',
			),
			117 => 
			array (
				'id' => 4618,
				'id_provincia' => 19,
				'cod_municipio' => 115,
				'DC' => 5,
				'nombre' => 'Establés',
			),
			118 => 
			array (
				'id' => 4619,
				'id_provincia' => 22,
				'cod_municipio' => 115,
				'DC' => 1,
				'nombre' => 'Grado, El',
			),
			119 => 
			array (
				'id' => 4620,
				'id_provincia' => 24,
				'cod_municipio' => 115,
				'DC' => 2,
				'nombre' => 'Ponferrada',
			),
			120 => 
			array (
				'id' => 4621,
				'id_provincia' => 25,
				'cod_municipio' => 115,
				'DC' => 5,
				'nombre' => 'Isona i Conca Dellà',
			),
			121 => 
			array (
				'id' => 4622,
				'id_provincia' => 26,
				'cod_municipio' => 115,
				'DC' => 8,
				'nombre' => 'Pinillos',
			),
			122 => 
			array (
				'id' => 4623,
				'id_provincia' => 28,
				'cod_municipio' => 115,
				'DC' => 0,
				'nombre' => 'Pozuelo de Alarcón',
			),
			123 => 
			array (
				'id' => 4624,
				'id_provincia' => 31,
				'cod_municipio' => 115,
				'DC' => 4,
				'nombre' => 'Garralda',
			),
			124 => 
			array (
				'id' => 4625,
				'id_provincia' => 37,
				'cod_municipio' => 115,
				'DC' => 2,
				'nombre' => 'Dios le Guarde',
			),
			125 => 
			array (
				'id' => 4626,
				'id_provincia' => 40,
				'cod_municipio' => 115,
				'DC' => 5,
				'nombre' => 'Maderuelo',
			),
			126 => 
			array (
				'id' => 4627,
				'id_provincia' => 42,
				'cod_municipio' => 115,
				'DC' => 7,
				'nombre' => 'Miño de Medinaceli',
			),
			127 => 
			array (
				'id' => 4628,
				'id_provincia' => 43,
				'cod_municipio' => 115,
				'DC' => 3,
				'nombre' => 'Pradell de la Teixeta',
			),
			128 => 
			array (
				'id' => 4629,
				'id_provincia' => 44,
				'cod_municipio' => 115,
				'DC' => 8,
				'nombre' => 'Galve',
			),
			129 => 
			array (
				'id' => 4630,
				'id_provincia' => 45,
				'cod_municipio' => 115,
				'DC' => 1,
				'nombre' => 'Noblejas',
			),
			130 => 
			array (
				'id' => 4631,
				'id_provincia' => 46,
				'cod_municipio' => 115,
				'DC' => 4,
				'nombre' => 'Dos Aguas',
			),
			131 => 
			array (
				'id' => 4632,
				'id_provincia' => 47,
				'cod_municipio' => 115,
				'DC' => 0,
				'nombre' => 'Peñaflor de Hornija',
			),
			132 => 
			array (
				'id' => 4633,
				'id_provincia' => 49,
				'cod_municipio' => 115,
				'DC' => 9,
				'nombre' => 'Mayalde',
			),
			133 => 
			array (
				'id' => 4634,
				'id_provincia' => 50,
				'cod_municipio' => 115,
				'DC' => 2,
				'nombre' => 'Fuentes de Ebro',
			),
			134 => 
			array (
				'id' => 4635,
				'id_provincia' => 3,
				'cod_municipio' => 116,
				'DC' => 4,
				'nombre' => 'Salinas',
			),
			135 => 
			array (
				'id' => 4636,
				'id_provincia' => 5,
				'cod_municipio' => 116,
				'DC' => 2,
				'nombre' => 'Malpartida de Corneja',
			),
			136 => 
			array (
				'id' => 4637,
				'id_provincia' => 6,
				'cod_municipio' => 116,
				'DC' => 5,
				'nombre' => 'Salvaleón',
			),
			137 => 
			array (
				'id' => 4638,
				'id_provincia' => 8,
				'cod_municipio' => 116,
				'DC' => 7,
				'nombre' => 'Masies de Roda, Les',
			),
			138 => 
			array (
				'id' => 4639,
				'id_provincia' => 10,
				'cod_municipio' => 116,
				'DC' => 4,
				'nombre' => 'Malpartida de Plasencia',
			),
			139 => 
			array (
				'id' => 4640,
				'id_provincia' => 12,
				'cod_municipio' => 116,
				'DC' => 6,
				'nombre' => 'Torralba del Pinar',
			),
			140 => 
			array (
				'id' => 4641,
				'id_provincia' => 16,
				'cod_municipio' => 116,
				'DC' => 3,
				'nombre' => 'Lagunaseca',
			),
			141 => 
			array (
				'id' => 4642,
				'id_provincia' => 17,
				'cod_municipio' => 116,
				'DC' => 9,
				'nombre' => 'Osor',
			),
			142 => 
			array (
				'id' => 4643,
				'id_provincia' => 18,
				'cod_municipio' => 116,
				'DC' => 5,
				'nombre' => 'Lanjarón',
			),
			143 => 
			array (
				'id' => 4644,
				'id_provincia' => 19,
				'cod_municipio' => 116,
				'DC' => 8,
				'nombre' => 'Estriégana',
			),
			144 => 
			array (
				'id' => 4645,
				'id_provincia' => 22,
				'cod_municipio' => 116,
				'DC' => 4,
				'nombre' => 'Grañén',
			),
			145 => 
			array (
				'id' => 4646,
				'id_provincia' => 24,
				'cod_municipio' => 116,
				'DC' => 5,
				'nombre' => 'Posada de Valdeón',
			),
			146 => 
			array (
				'id' => 4647,
				'id_provincia' => 28,
				'cod_municipio' => 116,
				'DC' => 3,
				'nombre' => 'Pozuelo del Rey',
			),
			147 => 
			array (
				'id' => 4648,
				'id_provincia' => 31,
				'cod_municipio' => 116,
				'DC' => 7,
				'nombre' => 'Genevilla',
			),
			148 => 
			array (
				'id' => 4649,
				'id_provincia' => 34,
				'cod_municipio' => 116,
				'DC' => 3,
				'nombre' => 'Osornillo',
			),
			149 => 
			array (
				'id' => 4650,
				'id_provincia' => 37,
				'cod_municipio' => 116,
				'DC' => 5,
				'nombre' => 'Doñinos de Ledesma',
			),
			150 => 
			array (
				'id' => 4651,
				'id_provincia' => 42,
				'cod_municipio' => 116,
				'DC' => 0,
				'nombre' => 'Miño de San Esteban',
			),
			151 => 
			array (
				'id' => 4652,
				'id_provincia' => 43,
				'cod_municipio' => 116,
				'DC' => 6,
				'nombre' => 'Prades',
			),
			152 => 
			array (
				'id' => 4653,
				'id_provincia' => 44,
				'cod_municipio' => 116,
				'DC' => 1,
				'nombre' => 'Gargallo',
			),
			153 => 
			array (
				'id' => 4654,
				'id_provincia' => 45,
				'cod_municipio' => 116,
				'DC' => 4,
				'nombre' => 'Noez',
			),
			154 => 
			array (
				'id' => 4655,
				'id_provincia' => 46,
				'cod_municipio' => 116,
				'DC' => 7,
				'nombre' => 'Eliana, l\'',
			),
			155 => 
			array (
				'id' => 4656,
				'id_provincia' => 47,
				'cod_municipio' => 116,
				'DC' => 3,
				'nombre' => 'Pesquera de Duero',
			),
			156 => 
			array (
				'id' => 4657,
				'id_provincia' => 49,
				'cod_municipio' => 116,
				'DC' => 2,
				'nombre' => 'Melgar de Tera',
			),
			157 => 
			array (
				'id' => 4658,
				'id_provincia' => 50,
				'cod_municipio' => 116,
				'DC' => 5,
				'nombre' => 'Fuentes de Jiloca',
			),
			158 => 
			array (
				'id' => 4659,
				'id_provincia' => 3,
				'cod_municipio' => 117,
				'DC' => 0,
				'nombre' => 'Sanet y Negrals',
			),
			159 => 
			array (
				'id' => 4660,
				'id_provincia' => 5,
				'cod_municipio' => 117,
				'DC' => 8,
				'nombre' => 'Mamblas',
			),
			160 => 
			array (
				'id' => 4661,
				'id_provincia' => 6,
				'cod_municipio' => 117,
				'DC' => 1,
				'nombre' => 'Salvatierra de los Barros',
			),
			161 => 
			array (
				'id' => 4662,
				'id_provincia' => 8,
				'cod_municipio' => 117,
				'DC' => 3,
				'nombre' => 'Masies de Voltregà, Les',
			),
			162 => 
			array (
				'id' => 4663,
				'id_provincia' => 9,
				'cod_municipio' => 117,
				'DC' => 6,
				'nombre' => 'Cueva de Roa, La',
			),
			163 => 
			array (
				'id' => 4664,
				'id_provincia' => 10,
				'cod_municipio' => 117,
				'DC' => 0,
				'nombre' => 'Marchagaz',
			),
			164 => 
			array (
				'id' => 4665,
				'id_provincia' => 12,
				'cod_municipio' => 117,
				'DC' => 2,
				'nombre' => 'Torreblanca',
			),
			165 => 
			array (
				'id' => 4666,
				'id_provincia' => 16,
				'cod_municipio' => 117,
				'DC' => 9,
				'nombre' => 'Landete',
			),
			166 => 
			array (
				'id' => 4667,
				'id_provincia' => 17,
				'cod_municipio' => 117,
				'DC' => 5,
				'nombre' => 'Palafrugell',
			),
			167 => 
			array (
				'id' => 4668,
				'id_provincia' => 18,
				'cod_municipio' => 117,
				'DC' => 1,
				'nombre' => 'Lanteira',
			),
			168 => 
			array (
				'id' => 4669,
				'id_provincia' => 19,
				'cod_municipio' => 117,
				'DC' => 4,
				'nombre' => 'Fontanar',
			),
			169 => 
			array (
				'id' => 4670,
				'id_provincia' => 22,
				'cod_municipio' => 117,
				'DC' => 0,
				'nombre' => 'Graus',
			),
			170 => 
			array (
				'id' => 4671,
				'id_provincia' => 24,
				'cod_municipio' => 117,
				'DC' => 1,
				'nombre' => 'Pozuelo del Páramo',
			),
			171 => 
			array (
				'id' => 4672,
				'id_provincia' => 26,
				'cod_municipio' => 117,
				'DC' => 7,
				'nombre' => 'Pradejón',
			),
			172 => 
			array (
				'id' => 4673,
				'id_provincia' => 28,
				'cod_municipio' => 117,
				'DC' => 9,
				'nombre' => 'Prádena del Rincón',
			),
			173 => 
			array (
				'id' => 4674,
				'id_provincia' => 31,
				'cod_municipio' => 117,
				'DC' => 3,
				'nombre' => 'Goizueta',
			),
			174 => 
			array (
				'id' => 4675,
				'id_provincia' => 37,
				'cod_municipio' => 117,
				'DC' => 1,
				'nombre' => 'Doñinos de Salamanca',
			),
			175 => 
			array (
				'id' => 4676,
				'id_provincia' => 42,
				'cod_municipio' => 117,
				'DC' => 6,
				'nombre' => 'Molinos de Duero',
			),
			176 => 
			array (
				'id' => 4677,
				'id_provincia' => 43,
				'cod_municipio' => 117,
				'DC' => 2,
				'nombre' => 'Prat de Comte',
			),
			177 => 
			array (
				'id' => 4678,
				'id_provincia' => 44,
				'cod_municipio' => 117,
				'DC' => 7,
				'nombre' => 'Gea de Albarracín',
			),
			178 => 
			array (
				'id' => 4679,
				'id_provincia' => 45,
				'cod_municipio' => 117,
				'DC' => 0,
				'nombre' => 'Nombela',
			),
			179 => 
			array (
				'id' => 4680,
				'id_provincia' => 46,
				'cod_municipio' => 117,
				'DC' => 3,
				'nombre' => 'Emperador',
			),
			180 => 
			array (
				'id' => 4681,
				'id_provincia' => 47,
				'cod_municipio' => 117,
				'DC' => 9,
				'nombre' => 'Piña de Esgueva',
			),
			181 => 
			array (
				'id' => 4682,
				'id_provincia' => 49,
				'cod_municipio' => 117,
				'DC' => 8,
				'nombre' => 'Micereces de Tera',
			),
			182 => 
			array (
				'id' => 4683,
				'id_provincia' => 50,
				'cod_municipio' => 117,
				'DC' => 1,
				'nombre' => 'Gallocanta',
			),
			183 => 
			array (
				'id' => 4684,
				'id_provincia' => 3,
				'cod_municipio' => 118,
				'DC' => 6,
				'nombre' => 'San Fulgencio',
			),
			184 => 
			array (
				'id' => 4685,
				'id_provincia' => 5,
				'cod_municipio' => 118,
				'DC' => 4,
				'nombre' => 'Mancera de Arriba',
			),
			185 => 
			array (
				'id' => 4686,
				'id_provincia' => 6,
				'cod_municipio' => 118,
				'DC' => 7,
				'nombre' => 'Sancti-Spíritus',
			),
			186 => 
			array (
				'id' => 4687,
				'id_provincia' => 8,
				'cod_municipio' => 118,
				'DC' => 9,
				'nombre' => 'Masnou, El',
			),
			187 => 
			array (
				'id' => 4688,
				'id_provincia' => 10,
				'cod_municipio' => 118,
				'DC' => 6,
				'nombre' => 'Mata de Alcántara',
			),
			188 => 
			array (
				'id' => 4689,
				'id_provincia' => 12,
				'cod_municipio' => 118,
				'DC' => 8,
				'nombre' => 'Torrechiva',
			),
			189 => 
			array (
				'id' => 4690,
				'id_provincia' => 16,
				'cod_municipio' => 118,
				'DC' => 5,
				'nombre' => 'Ledaña',
			),
			190 => 
			array (
				'id' => 4691,
				'id_provincia' => 17,
				'cod_municipio' => 118,
				'DC' => 1,
				'nombre' => 'Palamós',
			),
			191 => 
			array (
				'id' => 4692,
				'id_provincia' => 19,
				'cod_municipio' => 118,
				'DC' => 0,
				'nombre' => 'Fuembellida',
			),
			192 => 
			array (
				'id' => 4693,
				'id_provincia' => 24,
				'cod_municipio' => 118,
				'DC' => 7,
				'nombre' => 'Prado de la Guzpeña',
			),
			193 => 
			array (
				'id' => 4694,
				'id_provincia' => 25,
				'cod_municipio' => 118,
				'DC' => 0,
				'nombre' => 'Juncosa',
			),
			194 => 
			array (
				'id' => 4695,
				'id_provincia' => 26,
				'cod_municipio' => 118,
				'DC' => 3,
				'nombre' => 'Pradillo',
			),
			195 => 
			array (
				'id' => 4696,
				'id_provincia' => 28,
				'cod_municipio' => 118,
				'DC' => 5,
				'nombre' => 'Puebla de la Sierra',
			),
			196 => 
			array (
				'id' => 4697,
				'id_provincia' => 31,
				'cod_municipio' => 118,
				'DC' => 9,
				'nombre' => 'Goñi',
			),
			197 => 
			array (
				'id' => 4698,
				'id_provincia' => 37,
				'cod_municipio' => 118,
				'DC' => 7,
				'nombre' => 'Ejeme',
			),
			198 => 
			array (
				'id' => 4699,
				'id_provincia' => 40,
				'cod_municipio' => 118,
				'DC' => 0,
				'nombre' => 'Marazuela',
			),
			199 => 
			array (
				'id' => 4700,
				'id_provincia' => 42,
				'cod_municipio' => 118,
				'DC' => 2,
				'nombre' => 'Momblona',
			),
			200 => 
			array (
				'id' => 4701,
				'id_provincia' => 43,
				'cod_municipio' => 118,
				'DC' => 8,
				'nombre' => 'Pratdip',
			),
			201 => 
			array (
				'id' => 4702,
				'id_provincia' => 44,
				'cod_municipio' => 118,
				'DC' => 3,
				'nombre' => 'Ginebrosa, La',
			),
			202 => 
			array (
				'id' => 4703,
				'id_provincia' => 45,
				'cod_municipio' => 118,
				'DC' => 6,
				'nombre' => 'Novés',
			),
			203 => 
			array (
				'id' => 4704,
				'id_provincia' => 46,
				'cod_municipio' => 118,
				'DC' => 9,
				'nombre' => 'Enguera',
			),
			204 => 
			array (
				'id' => 4705,
				'id_provincia' => 47,
				'cod_municipio' => 118,
				'DC' => 5,
				'nombre' => 'Piñel de Abajo',
			),
			205 => 
			array (
				'id' => 4706,
				'id_provincia' => 49,
				'cod_municipio' => 118,
				'DC' => 4,
				'nombre' => 'Milles de la Polvorosa',
			),
			206 => 
			array (
				'id' => 4707,
				'id_provincia' => 50,
				'cod_municipio' => 118,
				'DC' => 7,
				'nombre' => 'Gallur',
			),
			207 => 
			array (
				'id' => 4708,
				'id_provincia' => 3,
				'cod_municipio' => 119,
				'DC' => 9,
				'nombre' => 'Sant Joan d\'Alacant',
			),
			208 => 
			array (
				'id' => 4709,
				'id_provincia' => 5,
				'cod_municipio' => 119,
				'DC' => 7,
				'nombre' => 'Manjabálago',
			),
			209 => 
			array (
				'id' => 4710,
				'id_provincia' => 6,
				'cod_municipio' => 119,
				'DC' => 0,
				'nombre' => 'San Pedro de Mérida',
			),
			210 => 
			array (
				'id' => 4711,
				'id_provincia' => 8,
				'cod_municipio' => 119,
				'DC' => 2,
				'nombre' => 'Masquefa',
			),
			211 => 
			array (
				'id' => 4712,
				'id_provincia' => 9,
				'cod_municipio' => 119,
				'DC' => 5,
				'nombre' => 'Cuevas de San Clemente',
			),
			212 => 
			array (
				'id' => 4713,
				'id_provincia' => 10,
				'cod_municipio' => 119,
				'DC' => 9,
				'nombre' => 'Membrío',
			),
			213 => 
			array (
				'id' => 4714,
				'id_provincia' => 12,
				'cod_municipio' => 119,
				'DC' => 1,
				'nombre' => 'Torre d\'En Besora, la',
			),
			214 => 
			array (
				'id' => 4715,
				'id_provincia' => 16,
				'cod_municipio' => 119,
				'DC' => 8,
				'nombre' => 'Leganiel',
			),
			215 => 
			array (
				'id' => 4716,
				'id_provincia' => 17,
				'cod_municipio' => 119,
				'DC' => 4,
				'nombre' => 'Palau de Santa Eulàlia',
			),
			216 => 
			array (
				'id' => 4717,
				'id_provincia' => 18,
				'cod_municipio' => 119,
				'DC' => 0,
				'nombre' => 'Lecrín',
			),
			217 => 
			array (
				'id' => 4718,
				'id_provincia' => 19,
				'cod_municipio' => 119,
				'DC' => 3,
				'nombre' => 'Fuencemillán',
			),
			218 => 
			array (
				'id' => 4719,
				'id_provincia' => 22,
				'cod_municipio' => 119,
				'DC' => 9,
				'nombre' => 'Gurrea de Gállego',
			),
			219 => 
			array (
				'id' => 4720,
				'id_provincia' => 24,
				'cod_municipio' => 119,
				'DC' => 0,
				'nombre' => 'Priaranza del Bierzo',
			),
			220 => 
			array (
				'id' => 4721,
				'id_provincia' => 25,
				'cod_municipio' => 119,
				'DC' => 3,
				'nombre' => 'Juneda',
			),
			221 => 
			array (
				'id' => 4722,
				'id_provincia' => 26,
				'cod_municipio' => 119,
				'DC' => 6,
				'nombre' => 'Préjano',
			),
			222 => 
			array (
				'id' => 4723,
				'id_provincia' => 28,
				'cod_municipio' => 119,
				'DC' => 8,
				'nombre' => 'Quijorna',
			),
			223 => 
			array (
				'id' => 4724,
				'id_provincia' => 31,
				'cod_municipio' => 119,
				'DC' => 2,
				'nombre' => 'Güesa/Gorza',
			),
			224 => 
			array (
				'id' => 4725,
				'id_provincia' => 37,
				'cod_municipio' => 119,
				'DC' => 0,
				'nombre' => 'Encina, La',
			),
			225 => 
			array (
				'id' => 4726,
				'id_provincia' => 40,
				'cod_municipio' => 119,
				'DC' => 3,
				'nombre' => 'Martín Miguel',
			),
			226 => 
			array (
				'id' => 4727,
				'id_provincia' => 42,
				'cod_municipio' => 119,
				'DC' => 5,
				'nombre' => 'Monteagudo de las Vicarías',
			),
			227 => 
			array (
				'id' => 4728,
				'id_provincia' => 43,
				'cod_municipio' => 119,
				'DC' => 1,
				'nombre' => 'Puigpelat',
			),
			228 => 
			array (
				'id' => 4729,
				'id_provincia' => 44,
				'cod_municipio' => 119,
				'DC' => 6,
				'nombre' => 'Griegos',
			),
			229 => 
			array (
				'id' => 4730,
				'id_provincia' => 45,
				'cod_municipio' => 119,
				'DC' => 9,
				'nombre' => 'Numancia de la Sagra',
			),
			230 => 
			array (
				'id' => 4731,
				'id_provincia' => 46,
				'cod_municipio' => 119,
				'DC' => 2,
				'nombre' => 'Ènova, l\'',
			),
			231 => 
			array (
				'id' => 4732,
				'id_provincia' => 47,
				'cod_municipio' => 119,
				'DC' => 8,
				'nombre' => 'Piñel de Arriba',
			),
			232 => 
			array (
				'id' => 4733,
				'id_provincia' => 49,
				'cod_municipio' => 119,
				'DC' => 7,
				'nombre' => 'Molacillos',
			),
			233 => 
			array (
				'id' => 4734,
				'id_provincia' => 50,
				'cod_municipio' => 119,
				'DC' => 0,
				'nombre' => 'Gelsa',
			),
			234 => 
			array (
				'id' => 4735,
				'id_provincia' => 3,
				'cod_municipio' => 120,
				'DC' => 3,
				'nombre' => 'San Miguel de Salinas',
			),
			235 => 
			array (
				'id' => 4736,
				'id_provincia' => 5,
				'cod_municipio' => 120,
				'DC' => 1,
				'nombre' => 'Marlín',
			),
			236 => 
			array (
				'id' => 4737,
				'id_provincia' => 6,
				'cod_municipio' => 120,
				'DC' => 4,
				'nombre' => 'Santa Amalia',
			),
			237 => 
			array (
				'id' => 4738,
				'id_provincia' => 8,
				'cod_municipio' => 120,
				'DC' => 6,
				'nombre' => 'Matadepera',
			),
			238 => 
			array (
				'id' => 4739,
				'id_provincia' => 9,
				'cod_municipio' => 120,
				'DC' => 9,
				'nombre' => 'Encío',
			),
			239 => 
			array (
				'id' => 4740,
				'id_provincia' => 10,
				'cod_municipio' => 120,
				'DC' => 3,
				'nombre' => 'Mesas de Ibor',
			),
			240 => 
			array (
				'id' => 4741,
				'id_provincia' => 12,
				'cod_municipio' => 120,
				'DC' => 5,
				'nombre' => 'Torre d\'en Doménec, la',
			),
			241 => 
			array (
				'id' => 4742,
				'id_provincia' => 17,
				'cod_municipio' => 120,
				'DC' => 8,
				'nombre' => 'Palau-saverdera',
			),
			242 => 
			array (
				'id' => 4743,
				'id_provincia' => 18,
				'cod_municipio' => 120,
				'DC' => 4,
				'nombre' => 'Lentegí',
			),
			243 => 
			array (
				'id' => 4744,
				'id_provincia' => 19,
				'cod_municipio' => 120,
				'DC' => 7,
				'nombre' => 'Fuentelahiguera de Albatages',
			),
			244 => 
			array (
				'id' => 4745,
				'id_provincia' => 24,
				'cod_municipio' => 120,
				'DC' => 4,
				'nombre' => 'Prioro',
			),
			245 => 
			array (
				'id' => 4746,
				'id_provincia' => 25,
				'cod_municipio' => 120,
				'DC' => 7,
				'nombre' => 'Lleida',
			),
			246 => 
			array (
				'id' => 4747,
				'id_provincia' => 26,
				'cod_municipio' => 120,
				'DC' => 0,
				'nombre' => 'Quel',
			),
			247 => 
			array (
				'id' => 4748,
				'id_provincia' => 28,
				'cod_municipio' => 120,
				'DC' => 2,
				'nombre' => 'Rascafría',
			),
			248 => 
			array (
				'id' => 4749,
				'id_provincia' => 31,
				'cod_municipio' => 120,
				'DC' => 6,
				'nombre' => 'Guesálaz/Gesalatz',
			),
			249 => 
			array (
				'id' => 4750,
				'id_provincia' => 34,
				'cod_municipio' => 120,
				'DC' => 2,
				'nombre' => 'Palencia',
			),
			250 => 
			array (
				'id' => 4751,
				'id_provincia' => 37,
				'cod_municipio' => 120,
				'DC' => 4,
				'nombre' => 'Encina de San Silvestre',
			),
			251 => 
			array (
				'id' => 4752,
				'id_provincia' => 40,
				'cod_municipio' => 120,
				'DC' => 7,
				'nombre' => 'Martín Muñoz de la Dehesa',
			),
			252 => 
			array (
				'id' => 4753,
				'id_provincia' => 42,
				'cod_municipio' => 120,
				'DC' => 9,
				'nombre' => 'Montejo de Tiermes',
			),
			253 => 
			array (
				'id' => 4754,
				'id_provincia' => 43,
				'cod_municipio' => 120,
				'DC' => 5,
				'nombre' => 'Querol',
			),
			254 => 
			array (
				'id' => 4755,
				'id_provincia' => 44,
				'cod_municipio' => 120,
				'DC' => 0,
				'nombre' => 'Guadalaviar',
			),
			255 => 
			array (
				'id' => 4756,
				'id_provincia' => 45,
				'cod_municipio' => 120,
				'DC' => 3,
				'nombre' => 'Nuño Gómez',
			),
			256 => 
			array (
				'id' => 4757,
				'id_provincia' => 46,
				'cod_municipio' => 120,
				'DC' => 6,
				'nombre' => 'Estivella',
			),
			257 => 
			array (
				'id' => 4758,
				'id_provincia' => 49,
				'cod_municipio' => 120,
				'DC' => 1,
				'nombre' => 'Molezuelas de la Carballeda',
			),
			258 => 
			array (
				'id' => 4759,
				'id_provincia' => 50,
				'cod_municipio' => 120,
				'DC' => 4,
				'nombre' => 'Godojos',
			),
			259 => 
			array (
				'id' => 4760,
				'id_provincia' => 3,
				'cod_municipio' => 121,
				'DC' => 0,
				'nombre' => 'Santa Pola',
			),
			260 => 
			array (
				'id' => 4761,
				'id_provincia' => 5,
				'cod_municipio' => 121,
				'DC' => 8,
				'nombre' => 'Martiherrero',
			),
			261 => 
			array (
				'id' => 4762,
				'id_provincia' => 6,
				'cod_municipio' => 121,
				'DC' => 1,
				'nombre' => 'Santa Marta',
			),
			262 => 
			array (
				'id' => 4763,
				'id_provincia' => 8,
				'cod_municipio' => 121,
				'DC' => 3,
				'nombre' => 'Mataró',
			),
			263 => 
			array (
				'id' => 4764,
				'id_provincia' => 10,
				'cod_municipio' => 121,
				'DC' => 0,
				'nombre' => 'Miajadas',
			),
			264 => 
			array (
				'id' => 4765,
				'id_provincia' => 12,
				'cod_municipio' => 121,
				'DC' => 2,
				'nombre' => 'Traiguera',
			),
			265 => 
			array (
				'id' => 4766,
				'id_provincia' => 16,
				'cod_municipio' => 121,
				'DC' => 9,
				'nombre' => 'Majadas, Las',
			),
			266 => 
			array (
				'id' => 4767,
				'id_provincia' => 17,
				'cod_municipio' => 121,
				'DC' => 5,
				'nombre' => 'Palau-sator',
			),
			267 => 
			array (
				'id' => 4768,
				'id_provincia' => 18,
				'cod_municipio' => 121,
				'DC' => 1,
				'nombre' => 'Lobras',
			),
			268 => 
			array (
				'id' => 4769,
				'id_provincia' => 19,
				'cod_municipio' => 121,
				'DC' => 4,
				'nombre' => 'Fuentelencina',
			),
			269 => 
			array (
				'id' => 4770,
				'id_provincia' => 24,
				'cod_municipio' => 121,
				'DC' => 1,
				'nombre' => 'Puebla de Lillo',
			),
			270 => 
			array (
				'id' => 4771,
				'id_provincia' => 25,
				'cod_municipio' => 121,
				'DC' => 4,
				'nombre' => 'Les',
			),
			271 => 
			array (
				'id' => 4772,
				'id_provincia' => 26,
				'cod_municipio' => 121,
				'DC' => 7,
				'nombre' => 'Rabanera',
			),
			272 => 
			array (
				'id' => 4773,
				'id_provincia' => 28,
				'cod_municipio' => 121,
				'DC' => 9,
				'nombre' => 'Redueña',
			),
			273 => 
			array (
				'id' => 4774,
				'id_provincia' => 31,
				'cod_municipio' => 121,
				'DC' => 3,
				'nombre' => 'Guirguillano',
			),
			274 => 
			array (
				'id' => 4775,
				'id_provincia' => 34,
				'cod_municipio' => 121,
				'DC' => 9,
				'nombre' => 'Palenzuela',
			),
			275 => 
			array (
				'id' => 4776,
				'id_provincia' => 37,
				'cod_municipio' => 121,
				'DC' => 1,
				'nombre' => 'Encinas de Abajo',
			),
			276 => 
			array (
				'id' => 4777,
				'id_provincia' => 40,
				'cod_municipio' => 121,
				'DC' => 4,
				'nombre' => 'Martín Muñoz de las Posadas',
			),
			277 => 
			array (
				'id' => 4778,
				'id_provincia' => 42,
				'cod_municipio' => 121,
				'DC' => 6,
				'nombre' => 'Montenegro de Cameros',
			),
			278 => 
			array (
				'id' => 4779,
				'id_provincia' => 43,
				'cod_municipio' => 121,
				'DC' => 2,
				'nombre' => 'Rasquera',
			),
			279 => 
			array (
				'id' => 4780,
				'id_provincia' => 44,
				'cod_municipio' => 121,
				'DC' => 7,
				'nombre' => 'Gúdar',
			),
			280 => 
			array (
				'id' => 4781,
				'id_provincia' => 45,
				'cod_municipio' => 121,
				'DC' => 0,
				'nombre' => 'Ocaña',
			),
			281 => 
			array (
				'id' => 4782,
				'id_provincia' => 46,
				'cod_municipio' => 121,
				'DC' => 3,
				'nombre' => 'Estubeny',
			),
			282 => 
			array (
				'id' => 4783,
				'id_provincia' => 47,
				'cod_municipio' => 121,
				'DC' => 9,
				'nombre' => 'Pollos',
			),
			283 => 
			array (
				'id' => 4784,
				'id_provincia' => 49,
				'cod_municipio' => 121,
				'DC' => 8,
				'nombre' => 'Mombuey',
			),
			284 => 
			array (
				'id' => 4785,
				'id_provincia' => 50,
				'cod_municipio' => 121,
				'DC' => 1,
				'nombre' => 'Gotor',
			),
			285 => 
			array (
				'id' => 4786,
				'id_provincia' => 3,
				'cod_municipio' => 122,
				'DC' => 5,
				'nombre' => 'San Vicente del Raspeig/Sant Vicent del Raspeig',
			),
			286 => 
			array (
				'id' => 4787,
				'id_provincia' => 5,
				'cod_municipio' => 122,
				'DC' => 3,
				'nombre' => 'Martínez',
			),
			287 => 
			array (
				'id' => 4788,
				'id_provincia' => 6,
				'cod_municipio' => 122,
				'DC' => 6,
				'nombre' => 'Santos de Maimona, Los',
			),
			288 => 
			array (
				'id' => 4789,
				'id_provincia' => 8,
				'cod_municipio' => 122,
				'DC' => 8,
				'nombre' => 'Mediona',
			),
			289 => 
			array (
				'id' => 4790,
				'id_provincia' => 9,
				'cod_municipio' => 122,
				'DC' => 1,
				'nombre' => 'Espinosa de Cervera',
			),
			290 => 
			array (
				'id' => 4791,
				'id_provincia' => 10,
				'cod_municipio' => 122,
				'DC' => 5,
				'nombre' => 'Millanes',
			),
			291 => 
			array (
				'id' => 4792,
				'id_provincia' => 12,
				'cod_municipio' => 122,
				'DC' => 7,
				'nombre' => 'Useras/Useres, les',
			),
			292 => 
			array (
				'id' => 4793,
				'id_provincia' => 16,
				'cod_municipio' => 122,
				'DC' => 4,
				'nombre' => 'Mariana',
			),
			293 => 
			array (
				'id' => 4794,
				'id_provincia' => 18,
				'cod_municipio' => 122,
				'DC' => 6,
				'nombre' => 'Loja',
			),
			294 => 
			array (
				'id' => 4795,
				'id_provincia' => 19,
				'cod_municipio' => 122,
				'DC' => 9,
				'nombre' => 'Fuentelsaz',
			),
			295 => 
			array (
				'id' => 4796,
				'id_provincia' => 22,
				'cod_municipio' => 122,
				'DC' => 5,
				'nombre' => 'Hoz de Jaca',
			),
			296 => 
			array (
				'id' => 4797,
				'id_provincia' => 24,
				'cod_municipio' => 122,
				'DC' => 6,
				'nombre' => 'Puente de Domingo Flórez',
			),
			297 => 
			array (
				'id' => 4798,
				'id_provincia' => 25,
				'cod_municipio' => 122,
				'DC' => 9,
				'nombre' => 'Linyola',
			),
			298 => 
			array (
				'id' => 4799,
				'id_provincia' => 26,
				'cod_municipio' => 122,
				'DC' => 2,
				'nombre' => 'Rasillo de Cameros, El',
			),
			299 => 
			array (
				'id' => 4800,
				'id_provincia' => 28,
				'cod_municipio' => 122,
				'DC' => 4,
				'nombre' => 'Ribatejada',
			),
			300 => 
			array (
				'id' => 4801,
				'id_provincia' => 31,
				'cod_municipio' => 122,
				'DC' => 8,
				'nombre' => 'Huarte/Uharte',
			),
			301 => 
			array (
				'id' => 4802,
				'id_provincia' => 34,
				'cod_municipio' => 122,
				'DC' => 4,
				'nombre' => 'Páramo de Boedo',
			),
			302 => 
			array (
				'id' => 4803,
				'id_provincia' => 37,
				'cod_municipio' => 122,
				'DC' => 6,
				'nombre' => 'Encinas de Arriba',
			),
			303 => 
			array (
				'id' => 4804,
				'id_provincia' => 40,
				'cod_municipio' => 122,
				'DC' => 9,
				'nombre' => 'Marugán',
			),
			304 => 
			array (
				'id' => 4805,
				'id_provincia' => 43,
				'cod_municipio' => 122,
				'DC' => 7,
				'nombre' => 'Renau',
			),
			305 => 
			array (
				'id' => 4806,
				'id_provincia' => 44,
				'cod_municipio' => 122,
				'DC' => 2,
				'nombre' => 'Híjar',
			),
			306 => 
			array (
				'id' => 4807,
				'id_provincia' => 45,
				'cod_municipio' => 122,
				'DC' => 5,
				'nombre' => 'Olías del Rey',
			),
			307 => 
			array (
				'id' => 4808,
				'id_provincia' => 46,
				'cod_municipio' => 122,
				'DC' => 8,
				'nombre' => 'Faura',
			),
			308 => 
			array (
				'id' => 4809,
				'id_provincia' => 47,
				'cod_municipio' => 122,
				'DC' => 4,
				'nombre' => 'Portillo',
			),
			309 => 
			array (
				'id' => 4810,
				'id_provincia' => 49,
				'cod_municipio' => 122,
				'DC' => 3,
				'nombre' => 'Monfarracinos',
			),
			310 => 
			array (
				'id' => 4811,
				'id_provincia' => 50,
				'cod_municipio' => 122,
				'DC' => 6,
				'nombre' => 'Grisel',
			),
			311 => 
			array (
				'id' => 4812,
				'id_provincia' => 3,
				'cod_municipio' => 123,
				'DC' => 1,
				'nombre' => 'Sax',
			),
			312 => 
			array (
				'id' => 4813,
				'id_provincia' => 5,
				'cod_municipio' => 123,
				'DC' => 9,
				'nombre' => 'Mediana de Voltoya',
			),
			313 => 
			array (
				'id' => 4814,
				'id_provincia' => 6,
				'cod_municipio' => 123,
				'DC' => 2,
				'nombre' => 'San Vicente de Alcántara',
			),
			314 => 
			array (
				'id' => 4815,
				'id_provincia' => 8,
				'cod_municipio' => 123,
				'DC' => 4,
				'nombre' => 'Molins de Rei',
			),
			315 => 
			array (
				'id' => 4816,
				'id_provincia' => 9,
				'cod_municipio' => 123,
				'DC' => 7,
				'nombre' => 'Espinosa del Camino',
			),
			316 => 
			array (
				'id' => 4817,
				'id_provincia' => 10,
				'cod_municipio' => 123,
				'DC' => 1,
				'nombre' => 'Mirabel',
			),
			317 => 
			array (
				'id' => 4818,
				'id_provincia' => 12,
				'cod_municipio' => 123,
				'DC' => 3,
				'nombre' => 'Vallat',
			),
			318 => 
			array (
				'id' => 4819,
				'id_provincia' => 16,
				'cod_municipio' => 123,
				'DC' => 0,
				'nombre' => 'Masegosa',
			),
			319 => 
			array (
				'id' => 4820,
				'id_provincia' => 17,
				'cod_municipio' => 123,
				'DC' => 6,
				'nombre' => 'Palol de Revardit',
			),
			320 => 
			array (
				'id' => 4821,
				'id_provincia' => 18,
				'cod_municipio' => 123,
				'DC' => 2,
				'nombre' => 'Lugros',
			),
			321 => 
			array (
				'id' => 4822,
				'id_provincia' => 19,
				'cod_municipio' => 123,
				'DC' => 5,
				'nombre' => 'Fuentelviejo',
			),
			322 => 
			array (
				'id' => 4823,
				'id_provincia' => 24,
				'cod_municipio' => 123,
				'DC' => 2,
				'nombre' => 'Quintana del Castillo',
			),
			323 => 
			array (
				'id' => 4824,
				'id_provincia' => 25,
				'cod_municipio' => 123,
				'DC' => 5,
				'nombre' => 'Lladorre',
			),
			324 => 
			array (
				'id' => 4825,
				'id_provincia' => 26,
				'cod_municipio' => 123,
				'DC' => 8,
				'nombre' => 'Redal, El',
			),
			325 => 
			array (
				'id' => 4826,
				'id_provincia' => 28,
				'cod_municipio' => 123,
				'DC' => 0,
				'nombre' => 'Rivas-Vaciamadrid',
			),
			326 => 
			array (
				'id' => 4827,
				'id_provincia' => 31,
				'cod_municipio' => 123,
				'DC' => 4,
				'nombre' => 'Uharte-Arakil',
			),
			327 => 
			array (
				'id' => 4828,
				'id_provincia' => 34,
				'cod_municipio' => 123,
				'DC' => 0,
				'nombre' => 'Paredes de Nava',
			),
			328 => 
			array (
				'id' => 4829,
				'id_provincia' => 37,
				'cod_municipio' => 123,
				'DC' => 2,
				'nombre' => 'Encinasola de los Comendadores',
			),
			329 => 
			array (
				'id' => 4830,
				'id_provincia' => 40,
				'cod_municipio' => 123,
				'DC' => 5,
				'nombre' => 'Matabuena',
			),
			330 => 
			array (
				'id' => 4831,
				'id_provincia' => 42,
				'cod_municipio' => 123,
				'DC' => 7,
				'nombre' => 'Morón de Almazán',
			),
			331 => 
			array (
				'id' => 4832,
				'id_provincia' => 43,
				'cod_municipio' => 123,
				'DC' => 3,
				'nombre' => 'Reus',
			),
			332 => 
			array (
				'id' => 4833,
				'id_provincia' => 44,
				'cod_municipio' => 123,
				'DC' => 8,
				'nombre' => 'Hinojosa de Jarque',
			),
			333 => 
			array (
				'id' => 4834,
				'id_provincia' => 45,
				'cod_municipio' => 123,
				'DC' => 1,
				'nombre' => 'Ontígola',
			),
			334 => 
			array (
				'id' => 4835,
				'id_provincia' => 46,
				'cod_municipio' => 123,
				'DC' => 4,
				'nombre' => 'Favara',
			),
			335 => 
			array (
				'id' => 4836,
				'id_provincia' => 47,
				'cod_municipio' => 123,
				'DC' => 0,
				'nombre' => 'Pozal de Gallinas',
			),
			336 => 
			array (
				'id' => 4837,
				'id_provincia' => 49,
				'cod_municipio' => 123,
				'DC' => 9,
				'nombre' => 'Montamarta',
			),
			337 => 
			array (
				'id' => 4838,
				'id_provincia' => 50,
				'cod_municipio' => 123,
				'DC' => 2,
				'nombre' => 'Grisén',
			),
			338 => 
			array (
				'id' => 4839,
				'id_provincia' => 3,
				'cod_municipio' => 124,
				'DC' => 6,
				'nombre' => 'Sella',
			),
			339 => 
			array (
				'id' => 4840,
				'id_provincia' => 5,
				'cod_municipio' => 124,
				'DC' => 4,
				'nombre' => 'Medinilla',
			),
			340 => 
			array (
				'id' => 4841,
				'id_provincia' => 6,
				'cod_municipio' => 124,
				'DC' => 7,
				'nombre' => 'Segura de León',
			),
			341 => 
			array (
				'id' => 4842,
				'id_provincia' => 8,
				'cod_municipio' => 124,
				'DC' => 9,
				'nombre' => 'Mollet del Vallès',
			),
			342 => 
			array (
				'id' => 4843,
				'id_provincia' => 9,
				'cod_municipio' => 124,
				'DC' => 2,
				'nombre' => 'Espinosa de los Monteros',
			),
			343 => 
			array (
				'id' => 4844,
				'id_provincia' => 10,
				'cod_municipio' => 124,
				'DC' => 6,
				'nombre' => 'Mohedas de Granadilla',
			),
			344 => 
			array (
				'id' => 4845,
				'id_provincia' => 12,
				'cod_municipio' => 124,
				'DC' => 8,
				'nombre' => 'Vall d\'Alba',
			),
			345 => 
			array (
				'id' => 4846,
				'id_provincia' => 16,
				'cod_municipio' => 124,
				'DC' => 5,
				'nombre' => 'Mesas, Las',
			),
			346 => 
			array (
				'id' => 4847,
				'id_provincia' => 17,
				'cod_municipio' => 124,
				'DC' => 1,
				'nombre' => 'Pals',
			),
			347 => 
			array (
				'id' => 4848,
				'id_provincia' => 18,
				'cod_municipio' => 124,
				'DC' => 7,
				'nombre' => 'Lújar',
			),
			348 => 
			array (
				'id' => 4849,
				'id_provincia' => 19,
				'cod_municipio' => 124,
				'DC' => 0,
				'nombre' => 'Fuentenovilla',
			),
			349 => 
			array (
				'id' => 4850,
				'id_provincia' => 22,
				'cod_municipio' => 124,
				'DC' => 6,
				'nombre' => 'Huerto',
			),
			350 => 
			array (
				'id' => 4851,
				'id_provincia' => 24,
				'cod_municipio' => 124,
				'DC' => 7,
				'nombre' => 'Quintana del Marco',
			),
			351 => 
			array (
				'id' => 4852,
				'id_provincia' => 25,
				'cod_municipio' => 124,
				'DC' => 0,
				'nombre' => 'Lladurs',
			),
			352 => 
			array (
				'id' => 4853,
				'id_provincia' => 26,
				'cod_municipio' => 124,
				'DC' => 3,
				'nombre' => 'Ribafrecha',
			),
			353 => 
			array (
				'id' => 4854,
				'id_provincia' => 28,
				'cod_municipio' => 124,
				'DC' => 5,
				'nombre' => 'Robledillo de la Jara',
			),
			354 => 
			array (
				'id' => 4855,
				'id_provincia' => 31,
				'cod_municipio' => 124,
				'DC' => 9,
				'nombre' => 'Ibargoiti',
			),
			355 => 
			array (
				'id' => 4856,
				'id_provincia' => 34,
				'cod_municipio' => 124,
				'DC' => 5,
				'nombre' => 'Payo de Ojeda',
			),
			356 => 
			array (
				'id' => 4857,
				'id_provincia' => 37,
				'cod_municipio' => 124,
				'DC' => 7,
				'nombre' => 'Endrinal',
			),
			357 => 
			array (
				'id' => 4858,
				'id_provincia' => 40,
				'cod_municipio' => 124,
				'DC' => 0,
				'nombre' => 'Mata de Cuéllar',
			),
			358 => 
			array (
				'id' => 4859,
				'id_provincia' => 42,
				'cod_municipio' => 124,
				'DC' => 2,
				'nombre' => 'Muriel de la Fuente',
			),
			359 => 
			array (
				'id' => 4860,
				'id_provincia' => 43,
				'cod_municipio' => 124,
				'DC' => 8,
				'nombre' => 'Riba, La',
			),
			360 => 
			array (
				'id' => 4861,
				'id_provincia' => 44,
				'cod_municipio' => 124,
				'DC' => 3,
				'nombre' => 'Hoz de la Vieja, La',
			),
			361 => 
			array (
				'id' => 4862,
				'id_provincia' => 45,
				'cod_municipio' => 124,
				'DC' => 6,
				'nombre' => 'Orgaz',
			),
			362 => 
			array (
				'id' => 4863,
				'id_provincia' => 46,
				'cod_municipio' => 124,
				'DC' => 9,
				'nombre' => 'Fontanars dels Alforins',
			),
			363 => 
			array (
				'id' => 4864,
				'id_provincia' => 47,
				'cod_municipio' => 124,
				'DC' => 5,
				'nombre' => 'Pozaldez',
			),
			364 => 
			array (
				'id' => 4865,
				'id_provincia' => 49,
				'cod_municipio' => 124,
				'DC' => 4,
				'nombre' => 'Moral de Sayago',
			),
			365 => 
			array (
				'id' => 4866,
				'id_provincia' => 50,
				'cod_municipio' => 124,
				'DC' => 7,
				'nombre' => 'Herrera de los Navarros',
			),
			366 => 
			array (
				'id' => 4867,
				'id_provincia' => 3,
				'cod_municipio' => 125,
				'DC' => 9,
				'nombre' => 'Senija',
			),
			367 => 
			array (
				'id' => 4868,
				'id_provincia' => 5,
				'cod_municipio' => 125,
				'DC' => 7,
				'nombre' => 'Mengamuñoz',
			),
			368 => 
			array (
				'id' => 4869,
				'id_provincia' => 6,
				'cod_municipio' => 125,
				'DC' => 0,
				'nombre' => 'Siruela',
			),
			369 => 
			array (
				'id' => 4870,
				'id_provincia' => 8,
				'cod_municipio' => 125,
				'DC' => 2,
				'nombre' => 'Montcada i Reixac',
			),
			370 => 
			array (
				'id' => 4871,
				'id_provincia' => 9,
				'cod_municipio' => 125,
				'DC' => 5,
				'nombre' => 'Estépar',
			),
			371 => 
			array (
				'id' => 4872,
				'id_provincia' => 10,
				'cod_municipio' => 125,
				'DC' => 9,
				'nombre' => 'Monroy',
			),
			372 => 
			array (
				'id' => 4873,
				'id_provincia' => 12,
				'cod_municipio' => 125,
				'DC' => 1,
				'nombre' => 'Vall de Almonacid',
			),
			373 => 
			array (
				'id' => 4874,
				'id_provincia' => 16,
				'cod_municipio' => 125,
				'DC' => 8,
				'nombre' => 'Minglanilla',
			),
			374 => 
			array (
				'id' => 4875,
				'id_provincia' => 17,
				'cod_municipio' => 125,
				'DC' => 4,
				'nombre' => 'Pardines',
			),
			375 => 
			array (
				'id' => 4876,
				'id_provincia' => 19,
				'cod_municipio' => 125,
				'DC' => 3,
				'nombre' => 'Gajanejos',
			),
			376 => 
			array (
				'id' => 4877,
				'id_provincia' => 22,
				'cod_municipio' => 125,
				'DC' => 9,
				'nombre' => 'Huesca',
			),
			377 => 
			array (
				'id' => 4878,
				'id_provincia' => 24,
				'cod_municipio' => 125,
				'DC' => 0,
				'nombre' => 'Quintana y Congosto',
			),
			378 => 
			array (
				'id' => 4879,
				'id_provincia' => 25,
				'cod_municipio' => 125,
				'DC' => 3,
				'nombre' => 'Llardecans',
			),
			379 => 
			array (
				'id' => 4880,
				'id_provincia' => 26,
				'cod_municipio' => 125,
				'DC' => 6,
				'nombre' => 'Rincón de Soto',
			),
			380 => 
			array (
				'id' => 4881,
				'id_provincia' => 28,
				'cod_municipio' => 125,
				'DC' => 8,
				'nombre' => 'Robledo de Chavela',
			),
			381 => 
			array (
				'id' => 4882,
				'id_provincia' => 31,
				'cod_municipio' => 125,
				'DC' => 2,
				'nombre' => 'Igúzquiza',
			),
			382 => 
			array (
				'id' => 4883,
				'id_provincia' => 34,
				'cod_municipio' => 125,
				'DC' => 8,
				'nombre' => 'Pedraza de Campos',
			),
			383 => 
			array (
				'id' => 4884,
				'id_provincia' => 37,
				'cod_municipio' => 125,
				'DC' => 0,
				'nombre' => 'Escurial de la Sierra',
			),
			384 => 
			array (
				'id' => 4885,
				'id_provincia' => 40,
				'cod_municipio' => 125,
				'DC' => 3,
				'nombre' => 'Matilla, La',
			),
			385 => 
			array (
				'id' => 4886,
				'id_provincia' => 42,
				'cod_municipio' => 125,
				'DC' => 5,
				'nombre' => 'Muriel Viejo',
			),
			386 => 
			array (
				'id' => 4887,
				'id_provincia' => 43,
				'cod_municipio' => 125,
				'DC' => 1,
				'nombre' => 'Riba-roja d\'Ebre',
			),
			387 => 
			array (
				'id' => 4888,
				'id_provincia' => 44,
				'cod_municipio' => 125,
				'DC' => 6,
				'nombre' => 'Huesa del Común',
			),
			388 => 
			array (
				'id' => 4889,
				'id_provincia' => 45,
				'cod_municipio' => 125,
				'DC' => 9,
				'nombre' => 'Oropesa',
			),
			389 => 
			array (
				'id' => 4890,
				'id_provincia' => 46,
				'cod_municipio' => 125,
				'DC' => 2,
				'nombre' => 'Fortaleny',
			),
			390 => 
			array (
				'id' => 4891,
				'id_provincia' => 47,
				'cod_municipio' => 125,
				'DC' => 8,
				'nombre' => 'Pozuelo de la Orden',
			),
			391 => 
			array (
				'id' => 4892,
				'id_provincia' => 49,
				'cod_municipio' => 125,
				'DC' => 7,
				'nombre' => 'Moraleja del Vino',
			),
			392 => 
			array (
				'id' => 4893,
				'id_provincia' => 50,
				'cod_municipio' => 125,
				'DC' => 0,
				'nombre' => 'Ibdes',
			),
			393 => 
			array (
				'id' => 4894,
				'id_provincia' => 5,
				'cod_municipio' => 126,
				'DC' => 0,
				'nombre' => 'Mesegar de Corneja',
			),
			394 => 
			array (
				'id' => 4895,
				'id_provincia' => 6,
				'cod_municipio' => 126,
				'DC' => 3,
				'nombre' => 'Solana de los Barros',
			),
			395 => 
			array (
				'id' => 4896,
				'id_provincia' => 8,
				'cod_municipio' => 126,
				'DC' => 5,
				'nombre' => 'Montgat',
			),
			396 => 
			array (
				'id' => 4897,
				'id_provincia' => 10,
				'cod_municipio' => 126,
				'DC' => 2,
				'nombre' => 'Montánchez',
			),
			397 => 
			array (
				'id' => 4898,
				'id_provincia' => 12,
				'cod_municipio' => 126,
				'DC' => 4,
				'nombre' => 'Vall d\'Uixó, la',
			),
			398 => 
			array (
				'id' => 4899,
				'id_provincia' => 16,
				'cod_municipio' => 126,
				'DC' => 1,
				'nombre' => 'Mira',
			),
			399 => 
			array (
				'id' => 4900,
				'id_provincia' => 17,
				'cod_municipio' => 126,
				'DC' => 7,
				'nombre' => 'Parlavà',
			),
			400 => 
			array (
				'id' => 4901,
				'id_provincia' => 18,
				'cod_municipio' => 126,
				'DC' => 3,
				'nombre' => 'Malahá, La',
			),
			401 => 
			array (
				'id' => 4902,
				'id_provincia' => 19,
				'cod_municipio' => 126,
				'DC' => 6,
				'nombre' => 'Galápagos',
			),
			402 => 
			array (
				'id' => 4903,
				'id_provincia' => 22,
				'cod_municipio' => 126,
				'DC' => 2,
				'nombre' => 'Ibieca',
			),
			403 => 
			array (
				'id' => 4904,
				'id_provincia' => 25,
				'cod_municipio' => 126,
				'DC' => 6,
				'nombre' => 'Llavorsí',
			),
			404 => 
			array (
				'id' => 4905,
				'id_provincia' => 26,
				'cod_municipio' => 126,
				'DC' => 9,
				'nombre' => 'Robres del Castillo',
			),
			405 => 
			array (
				'id' => 4906,
				'id_provincia' => 28,
				'cod_municipio' => 126,
				'DC' => 1,
				'nombre' => 'Robregordo',
			),
			406 => 
			array (
				'id' => 4907,
				'id_provincia' => 31,
				'cod_municipio' => 126,
				'DC' => 5,
				'nombre' => 'Imotz',
			),
			407 => 
			array (
				'id' => 4908,
				'id_provincia' => 34,
				'cod_municipio' => 126,
				'DC' => 1,
				'nombre' => 'Pedrosa de la Vega',
			),
			408 => 
			array (
				'id' => 4909,
				'id_provincia' => 37,
				'cod_municipio' => 126,
				'DC' => 3,
				'nombre' => 'Espadaña',
			),
			409 => 
			array (
				'id' => 4910,
				'id_provincia' => 40,
				'cod_municipio' => 126,
				'DC' => 6,
				'nombre' => 'Melque de Cercos',
			),
			410 => 
			array (
				'id' => 4911,
				'id_provincia' => 43,
				'cod_municipio' => 126,
				'DC' => 4,
				'nombre' => 'Riera de Gaià, La',
			),
			411 => 
			array (
				'id' => 4912,
				'id_provincia' => 44,
				'cod_municipio' => 126,
				'DC' => 9,
				'nombre' => 'Iglesuela del Cid, La',
			),
			412 => 
			array (
				'id' => 4913,
				'id_provincia' => 45,
				'cod_municipio' => 126,
				'DC' => 2,
				'nombre' => 'Otero',
			),
			413 => 
			array (
				'id' => 4914,
				'id_provincia' => 46,
				'cod_municipio' => 126,
				'DC' => 5,
				'nombre' => 'Foios',
			),
			414 => 
			array (
				'id' => 4915,
				'id_provincia' => 47,
				'cod_municipio' => 126,
				'DC' => 1,
				'nombre' => 'Puras',
			),
			415 => 
			array (
				'id' => 4916,
				'id_provincia' => 49,
				'cod_municipio' => 126,
				'DC' => 0,
				'nombre' => 'Moraleja de Sayago',
			),
			416 => 
			array (
				'id' => 4917,
				'id_provincia' => 50,
				'cod_municipio' => 126,
				'DC' => 3,
				'nombre' => 'Illueca',
			),
			417 => 
			array (
				'id' => 4918,
				'id_provincia' => 3,
				'cod_municipio' => 127,
				'DC' => 8,
				'nombre' => 'Tàrbena',
			),
			418 => 
			array (
				'id' => 4919,
				'id_provincia' => 5,
				'cod_municipio' => 127,
				'DC' => 6,
				'nombre' => 'Mijares',
			),
			419 => 
			array (
				'id' => 4920,
				'id_provincia' => 6,
				'cod_municipio' => 127,
				'DC' => 9,
				'nombre' => 'Talarrubias',
			),
			420 => 
			array (
				'id' => 4921,
				'id_provincia' => 8,
				'cod_municipio' => 127,
				'DC' => 1,
				'nombre' => 'Monistrol de Montserrat',
			),
			421 => 
			array (
				'id' => 4922,
				'id_provincia' => 9,
				'cod_municipio' => 127,
				'DC' => 4,
				'nombre' => 'Fontioso',
			),
			422 => 
			array (
				'id' => 4923,
				'id_provincia' => 10,
				'cod_municipio' => 127,
				'DC' => 8,
				'nombre' => 'Montehermoso',
			),
			423 => 
			array (
				'id' => 4924,
				'id_provincia' => 12,
				'cod_municipio' => 127,
				'DC' => 0,
				'nombre' => 'Vallibona',
			),
			424 => 
			array (
				'id' => 4925,
				'id_provincia' => 18,
				'cod_municipio' => 127,
				'DC' => 9,
				'nombre' => 'Maracena',
			),
			425 => 
			array (
				'id' => 4926,
				'id_provincia' => 19,
				'cod_municipio' => 127,
				'DC' => 2,
				'nombre' => 'Galve de Sorbe',
			),
			426 => 
			array (
				'id' => 4927,
				'id_provincia' => 22,
				'cod_municipio' => 127,
				'DC' => 8,
				'nombre' => 'Igriés',
			),
			427 => 
			array (
				'id' => 4928,
				'id_provincia' => 24,
				'cod_municipio' => 127,
				'DC' => 9,
				'nombre' => 'Regueras de Arriba',
			),
			428 => 
			array (
				'id' => 4929,
				'id_provincia' => 25,
				'cod_municipio' => 127,
				'DC' => 2,
				'nombre' => 'Lles de Cerdanya',
			),
			429 => 
			array (
				'id' => 4930,
				'id_provincia' => 26,
				'cod_municipio' => 127,
				'DC' => 5,
				'nombre' => 'Rodezno',
			),
			430 => 
			array (
				'id' => 4931,
				'id_provincia' => 28,
				'cod_municipio' => 127,
				'DC' => 7,
				'nombre' => 'Rozas de Madrid, Las',
			),
			431 => 
			array (
				'id' => 4932,
				'id_provincia' => 31,
				'cod_municipio' => 127,
				'DC' => 1,
				'nombre' => 'Irañeta',
			),
			432 => 
			array (
				'id' => 4933,
				'id_provincia' => 34,
				'cod_municipio' => 127,
				'DC' => 7,
				'nombre' => 'Perales',
			),
			433 => 
			array (
				'id' => 4934,
				'id_provincia' => 37,
				'cod_municipio' => 127,
				'DC' => 9,
				'nombre' => 'Espeja',
			),
			434 => 
			array (
				'id' => 4935,
				'id_provincia' => 40,
				'cod_municipio' => 127,
				'DC' => 2,
				'nombre' => 'Membibre de la Hoz',
			),
			435 => 
			array (
				'id' => 4936,
				'id_provincia' => 42,
				'cod_municipio' => 127,
				'DC' => 4,
				'nombre' => 'Nafría de Ucero',
			),
			436 => 
			array (
				'id' => 4937,
				'id_provincia' => 43,
				'cod_municipio' => 127,
				'DC' => 0,
				'nombre' => 'Riudecanyes',
			),
			437 => 
			array (
				'id' => 4938,
				'id_provincia' => 44,
				'cod_municipio' => 127,
				'DC' => 5,
				'nombre' => 'Jabaloyas',
			),
			438 => 
			array (
				'id' => 4939,
				'id_provincia' => 45,
				'cod_municipio' => 127,
				'DC' => 8,
				'nombre' => 'Palomeque',
			),
			439 => 
			array (
				'id' => 4940,
				'id_provincia' => 46,
				'cod_municipio' => 127,
				'DC' => 1,
				'nombre' => 'Font d\'En Carròs, la',
			),
			440 => 
			array (
				'id' => 4941,
				'id_provincia' => 47,
				'cod_municipio' => 127,
				'DC' => 7,
				'nombre' => 'Quintanilla de Arriba',
			),
			441 => 
			array (
				'id' => 4942,
				'id_provincia' => 49,
				'cod_municipio' => 127,
				'DC' => 6,
				'nombre' => 'Morales del Vino',
			),
			442 => 
			array (
				'id' => 4943,
				'id_provincia' => 3,
				'cod_municipio' => 128,
				'DC' => 4,
				'nombre' => 'Teulada',
			),
			443 => 
			array (
				'id' => 4944,
				'id_provincia' => 5,
				'cod_municipio' => 128,
				'DC' => 2,
				'nombre' => 'Mingorría',
			),
			444 => 
			array (
				'id' => 4945,
				'id_provincia' => 6,
				'cod_municipio' => 128,
				'DC' => 5,
				'nombre' => 'Talavera la Real',
			),
			445 => 
			array (
				'id' => 4946,
				'id_provincia' => 8,
				'cod_municipio' => 128,
				'DC' => 7,
				'nombre' => 'Monistrol de Calders',
			),
			446 => 
			array (
				'id' => 4947,
				'id_provincia' => 9,
				'cod_municipio' => 128,
				'DC' => 0,
				'nombre' => 'Frandovínez',
			),
			447 => 
			array (
				'id' => 4948,
				'id_provincia' => 10,
				'cod_municipio' => 128,
				'DC' => 4,
				'nombre' => 'Moraleja',
			),
			448 => 
			array (
				'id' => 4949,
				'id_provincia' => 12,
				'cod_municipio' => 128,
				'DC' => 6,
				'nombre' => 'Vilafamés',
			),
			449 => 
			array (
				'id' => 4950,
				'id_provincia' => 16,
				'cod_municipio' => 128,
				'DC' => 3,
				'nombre' => 'Monreal del Llano',
			),
			450 => 
			array (
				'id' => 4951,
				'id_provincia' => 17,
				'cod_municipio' => 128,
				'DC' => 9,
				'nombre' => 'Pau',
			),
			451 => 
			array (
				'id' => 4952,
				'id_provincia' => 18,
				'cod_municipio' => 128,
				'DC' => 5,
				'nombre' => 'Marchal',
			),
			452 => 
			array (
				'id' => 4953,
				'id_provincia' => 22,
				'cod_municipio' => 128,
				'DC' => 4,
				'nombre' => 'Ilche',
			),
			453 => 
			array (
				'id' => 4954,
				'id_provincia' => 25,
				'cod_municipio' => 128,
				'DC' => 8,
				'nombre' => 'Llimiana',
			),
			454 => 
			array (
				'id' => 4955,
				'id_provincia' => 26,
				'cod_municipio' => 128,
				'DC' => 1,
				'nombre' => 'Sajazarra',
			),
			455 => 
			array (
				'id' => 4956,
				'id_provincia' => 28,
				'cod_municipio' => 128,
				'DC' => 3,
				'nombre' => 'Rozas de Puerto Real',
			),
			456 => 
			array (
				'id' => 4957,
				'id_provincia' => 31,
				'cod_municipio' => 128,
				'DC' => 7,
				'nombre' => 'Isaba/Izaba',
			),
			457 => 
			array (
				'id' => 4958,
				'id_provincia' => 37,
				'cod_municipio' => 128,
				'DC' => 5,
				'nombre' => 'Espino de la Orbada',
			),
			458 => 
			array (
				'id' => 4959,
				'id_provincia' => 40,
				'cod_municipio' => 128,
				'DC' => 8,
				'nombre' => 'Migueláñez',
			),
			459 => 
			array (
				'id' => 4960,
				'id_provincia' => 42,
				'cod_municipio' => 128,
				'DC' => 0,
				'nombre' => 'Narros',
			),
			460 => 
			array (
				'id' => 4961,
				'id_provincia' => 43,
				'cod_municipio' => 128,
				'DC' => 6,
				'nombre' => 'Riudecols',
			),
			461 => 
			array (
				'id' => 4962,
				'id_provincia' => 44,
				'cod_municipio' => 128,
				'DC' => 1,
				'nombre' => 'Jarque de la Val',
			),
			462 => 
			array (
				'id' => 4963,
				'id_provincia' => 45,
				'cod_municipio' => 128,
				'DC' => 4,
				'nombre' => 'Pantoja',
			),
			463 => 
			array (
				'id' => 4964,
				'id_provincia' => 46,
				'cod_municipio' => 128,
				'DC' => 7,
				'nombre' => 'Font de la Figuera, la',
			),
			464 => 
			array (
				'id' => 4965,
				'id_provincia' => 47,
				'cod_municipio' => 128,
				'DC' => 3,
				'nombre' => 'Quintanilla del Molar',
			),
			465 => 
			array (
				'id' => 4966,
				'id_provincia' => 49,
				'cod_municipio' => 128,
				'DC' => 2,
				'nombre' => 'Morales de Rey',
			),
			466 => 
			array (
				'id' => 4967,
				'id_provincia' => 50,
				'cod_municipio' => 128,
				'DC' => 5,
				'nombre' => 'Isuerre',
			),
			467 => 
			array (
				'id' => 4968,
				'id_provincia' => 3,
				'cod_municipio' => 129,
				'DC' => 7,
				'nombre' => 'Tibi',
			),
			468 => 
			array (
				'id' => 4969,
				'id_provincia' => 5,
				'cod_municipio' => 129,
				'DC' => 5,
				'nombre' => 'Mirón, El',
			),
			469 => 
			array (
				'id' => 4970,
				'id_provincia' => 6,
				'cod_municipio' => 129,
				'DC' => 8,
				'nombre' => 'Táliga',
			),
			470 => 
			array (
				'id' => 4971,
				'id_provincia' => 8,
				'cod_municipio' => 129,
				'DC' => 0,
				'nombre' => 'Muntanyola',
			),
			471 => 
			array (
				'id' => 4972,
				'id_provincia' => 9,
				'cod_municipio' => 129,
				'DC' => 3,
				'nombre' => 'Fresneda de la Sierra Tirón',
			),
			472 => 
			array (
				'id' => 4973,
				'id_provincia' => 10,
				'cod_municipio' => 129,
				'DC' => 7,
				'nombre' => 'Morcillo',
			),
			473 => 
			array (
				'id' => 4974,
				'id_provincia' => 12,
				'cod_municipio' => 129,
				'DC' => 9,
				'nombre' => 'Villafranca del Cid/Vilafranca',
			),
			474 => 
			array (
				'id' => 4975,
				'id_provincia' => 16,
				'cod_municipio' => 129,
				'DC' => 6,
				'nombre' => 'Montalbanejo',
			),
			475 => 
			array (
				'id' => 4976,
				'id_provincia' => 17,
				'cod_municipio' => 129,
				'DC' => 2,
				'nombre' => 'Pedret i Marzà',
			),
			476 => 
			array (
				'id' => 4977,
				'id_provincia' => 19,
				'cod_municipio' => 129,
				'DC' => 1,
				'nombre' => 'Gascueña de Bornova',
			),
			477 => 
			array (
				'id' => 4978,
				'id_provincia' => 22,
				'cod_municipio' => 129,
				'DC' => 7,
				'nombre' => 'Isábena',
			),
			478 => 
			array (
				'id' => 4979,
				'id_provincia' => 24,
				'cod_municipio' => 129,
				'DC' => 8,
				'nombre' => 'Reyero',
			),
			479 => 
			array (
				'id' => 4980,
				'id_provincia' => 25,
				'cod_municipio' => 129,
				'DC' => 1,
				'nombre' => 'Llobera',
			),
			480 => 
			array (
				'id' => 4981,
				'id_provincia' => 26,
				'cod_municipio' => 129,
				'DC' => 4,
				'nombre' => 'San Asensio',
			),
			481 => 
			array (
				'id' => 4982,
				'id_provincia' => 28,
				'cod_municipio' => 129,
				'DC' => 6,
				'nombre' => 'San Agustín del Guadalix',
			),
			482 => 
			array (
				'id' => 4983,
				'id_provincia' => 31,
				'cod_municipio' => 129,
				'DC' => 0,
				'nombre' => 'Ituren',
			),
			483 => 
			array (
				'id' => 4984,
				'id_provincia' => 34,
				'cod_municipio' => 129,
				'DC' => 6,
				'nombre' => 'Pino del Río',
			),
			484 => 
			array (
				'id' => 4985,
				'id_provincia' => 37,
				'cod_municipio' => 129,
				'DC' => 8,
				'nombre' => 'Florida de Liébana',
			),
			485 => 
			array (
				'id' => 4986,
				'id_provincia' => 40,
				'cod_municipio' => 129,
				'DC' => 1,
				'nombre' => 'Montejo de Arévalo',
			),
			486 => 
			array (
				'id' => 4987,
				'id_provincia' => 42,
				'cod_municipio' => 129,
				'DC' => 3,
				'nombre' => 'Navaleno',
			),
			487 => 
			array (
				'id' => 4988,
				'id_provincia' => 43,
				'cod_municipio' => 129,
				'DC' => 9,
				'nombre' => 'Riudoms',
			),
			488 => 
			array (
				'id' => 4989,
				'id_provincia' => 44,
				'cod_municipio' => 129,
				'DC' => 4,
				'nombre' => 'Jatiel',
			),
			489 => 
			array (
				'id' => 4990,
				'id_provincia' => 45,
				'cod_municipio' => 129,
				'DC' => 7,
				'nombre' => 'Paredes de Escalona',
			),
			490 => 
			array (
				'id' => 4991,
				'id_provincia' => 46,
				'cod_municipio' => 129,
				'DC' => 0,
				'nombre' => 'Fuenterrobles',
			),
			491 => 
			array (
				'id' => 4992,
				'id_provincia' => 47,
				'cod_municipio' => 129,
				'DC' => 6,
				'nombre' => 'Quintanilla de Onésimo',
			),
			492 => 
			array (
				'id' => 4993,
				'id_provincia' => 49,
				'cod_municipio' => 129,
				'DC' => 5,
				'nombre' => 'Morales de Toro',
			),
			493 => 
			array (
				'id' => 4994,
				'id_provincia' => 50,
				'cod_municipio' => 129,
				'DC' => 8,
				'nombre' => 'Jaraba',
			),
			494 => 
			array (
				'id' => 4995,
				'id_provincia' => 3,
				'cod_municipio' => 130,
				'DC' => 1,
				'nombre' => 'Tollos',
			),
			495 => 
			array (
				'id' => 4996,
				'id_provincia' => 5,
				'cod_municipio' => 130,
				'DC' => 9,
				'nombre' => 'Mironcillo',
			),
			496 => 
			array (
				'id' => 4997,
				'id_provincia' => 6,
				'cod_municipio' => 130,
				'DC' => 2,
				'nombre' => 'Tamurejo',
			),
			497 => 
			array (
				'id' => 4998,
				'id_provincia' => 8,
				'cod_municipio' => 130,
				'DC' => 4,
				'nombre' => 'Montclar',
			),
			498 => 
			array (
				'id' => 4999,
				'id_provincia' => 9,
				'cod_municipio' => 130,
				'DC' => 7,
				'nombre' => 'Fresneña',
			),
			499 => 
			array (
				'id' => 5000,
				'id_provincia' => 10,
				'cod_municipio' => 130,
				'DC' => 1,
				'nombre' => 'Navaconcejo',
			),
		));
		\DB::table('municipios')->insert(array (
			0 => 
			array (
				'id' => 5001,
				'id_provincia' => 12,
				'cod_municipio' => 130,
				'DC' => 3,
				'nombre' => 'Villahermosa del Río',
			),
			1 => 
			array (
				'id' => 5002,
				'id_provincia' => 16,
				'cod_municipio' => 130,
				'DC' => 0,
				'nombre' => 'Montalbo',
			),
			2 => 
			array (
				'id' => 5003,
				'id_provincia' => 17,
				'cod_municipio' => 130,
				'DC' => 6,
				'nombre' => 'Pera, La',
			),
			3 => 
			array (
				'id' => 5004,
				'id_provincia' => 19,
				'cod_municipio' => 130,
				'DC' => 5,
				'nombre' => 'Guadalajara',
			),
			4 => 
			array (
				'id' => 5005,
				'id_provincia' => 22,
				'cod_municipio' => 130,
				'DC' => 1,
				'nombre' => 'Jaca',
			),
			5 => 
			array (
				'id' => 5006,
				'id_provincia' => 24,
				'cod_municipio' => 130,
				'DC' => 2,
				'nombre' => 'Riaño',
			),
			6 => 
			array (
				'id' => 5007,
				'id_provincia' => 25,
				'cod_municipio' => 130,
				'DC' => 5,
				'nombre' => 'Maldà',
			),
			7 => 
			array (
				'id' => 5008,
				'id_provincia' => 26,
				'cod_municipio' => 130,
				'DC' => 8,
				'nombre' => 'San Millán de la Cogolla',
			),
			8 => 
			array (
				'id' => 5009,
				'id_provincia' => 28,
				'cod_municipio' => 130,
				'DC' => 0,
				'nombre' => 'San Fernando de Henares',
			),
			9 => 
			array (
				'id' => 5010,
				'id_provincia' => 31,
				'cod_municipio' => 130,
				'DC' => 4,
				'nombre' => 'Iturmendi',
			),
			10 => 
			array (
				'id' => 5011,
				'id_provincia' => 34,
				'cod_municipio' => 130,
				'DC' => 0,
				'nombre' => 'Piña de Campos',
			),
			11 => 
			array (
				'id' => 5012,
				'id_provincia' => 37,
				'cod_municipio' => 130,
				'DC' => 2,
				'nombre' => 'Forfoleda',
			),
			12 => 
			array (
				'id' => 5013,
				'id_provincia' => 40,
				'cod_municipio' => 130,
				'DC' => 5,
				'nombre' => 'Montejo de la Vega de la Serrezuela',
			),
			13 => 
			array (
				'id' => 5014,
				'id_provincia' => 42,
				'cod_municipio' => 130,
				'DC' => 7,
				'nombre' => 'Nepas',
			),
			14 => 
			array (
				'id' => 5015,
				'id_provincia' => 43,
				'cod_municipio' => 130,
				'DC' => 3,
				'nombre' => 'Rocafort de Queralt',
			),
			15 => 
			array (
				'id' => 5016,
				'id_provincia' => 44,
				'cod_municipio' => 130,
				'DC' => 8,
				'nombre' => 'Jorcas',
			),
			16 => 
			array (
				'id' => 5017,
				'id_provincia' => 45,
				'cod_municipio' => 130,
				'DC' => 1,
				'nombre' => 'Parrillas',
			),
			17 => 
			array (
				'id' => 5018,
				'id_provincia' => 46,
				'cod_municipio' => 130,
				'DC' => 4,
				'nombre' => 'Gavarda',
			),
			18 => 
			array (
				'id' => 5019,
				'id_provincia' => 47,
				'cod_municipio' => 130,
				'DC' => 0,
				'nombre' => 'Quintanilla de Trigueros',
			),
			19 => 
			array (
				'id' => 5020,
				'id_provincia' => 49,
				'cod_municipio' => 130,
				'DC' => 9,
				'nombre' => 'Morales de Valverde',
			),
			20 => 
			array (
				'id' => 5021,
				'id_provincia' => 50,
				'cod_municipio' => 130,
				'DC' => 2,
				'nombre' => 'Jarque',
			),
			21 => 
			array (
				'id' => 5022,
				'id_provincia' => 3,
				'cod_municipio' => 131,
				'DC' => 8,
				'nombre' => 'Tormos',
			),
			22 => 
			array (
				'id' => 5023,
				'id_provincia' => 5,
				'cod_municipio' => 131,
				'DC' => 6,
				'nombre' => 'Mirueña de los Infanzones',
			),
			23 => 
			array (
				'id' => 5024,
				'id_provincia' => 6,
				'cod_municipio' => 131,
				'DC' => 9,
				'nombre' => 'Torre de Miguel Sesmero',
			),
			24 => 
			array (
				'id' => 5025,
				'id_provincia' => 8,
				'cod_municipio' => 131,
				'DC' => 1,
				'nombre' => 'Montesquiu',
			),
			25 => 
			array (
				'id' => 5026,
				'id_provincia' => 9,
				'cod_municipio' => 131,
				'DC' => 4,
				'nombre' => 'Fresnillo de las Dueñas',
			),
			26 => 
			array (
				'id' => 5027,
				'id_provincia' => 10,
				'cod_municipio' => 131,
				'DC' => 8,
				'nombre' => 'Navalmoral de la Mata',
			),
			27 => 
			array (
				'id' => 5028,
				'id_provincia' => 12,
				'cod_municipio' => 131,
				'DC' => 0,
				'nombre' => 'Villamalur',
			),
			28 => 
			array (
				'id' => 5029,
				'id_provincia' => 16,
				'cod_municipio' => 131,
				'DC' => 7,
				'nombre' => 'Monteagudo de las Salinas',
			),
			29 => 
			array (
				'id' => 5030,
				'id_provincia' => 22,
				'cod_municipio' => 131,
				'DC' => 8,
				'nombre' => 'Jasa',
			),
			30 => 
			array (
				'id' => 5031,
				'id_provincia' => 24,
				'cod_municipio' => 131,
				'DC' => 9,
				'nombre' => 'Riego de la Vega',
			),
			31 => 
			array (
				'id' => 5032,
				'id_provincia' => 25,
				'cod_municipio' => 131,
				'DC' => 2,
				'nombre' => 'Massalcoreig',
			),
			32 => 
			array (
				'id' => 5033,
				'id_provincia' => 26,
				'cod_municipio' => 131,
				'DC' => 5,
				'nombre' => 'San Millán de Yécora',
			),
			33 => 
			array (
				'id' => 5034,
				'id_provincia' => 28,
				'cod_municipio' => 131,
				'DC' => 7,
				'nombre' => 'San Lorenzo de El Escorial',
			),
			34 => 
			array (
				'id' => 5035,
				'id_provincia' => 31,
				'cod_municipio' => 131,
				'DC' => 1,
				'nombre' => 'Iza/Itza',
			),
			35 => 
			array (
				'id' => 5036,
				'id_provincia' => 34,
				'cod_municipio' => 131,
				'DC' => 7,
				'nombre' => 'Población de Arroyo',
			),
			36 => 
			array (
				'id' => 5037,
				'id_provincia' => 37,
				'cod_municipio' => 131,
				'DC' => 9,
				'nombre' => 'Frades de la Sierra',
			),
			37 => 
			array (
				'id' => 5038,
				'id_provincia' => 40,
				'cod_municipio' => 131,
				'DC' => 2,
				'nombre' => 'Monterrubio',
			),
			38 => 
			array (
				'id' => 5039,
				'id_provincia' => 42,
				'cod_municipio' => 131,
				'DC' => 4,
				'nombre' => 'Nolay',
			),
			39 => 
			array (
				'id' => 5040,
				'id_provincia' => 43,
				'cod_municipio' => 131,
				'DC' => 0,
				'nombre' => 'Roda de Barà',
			),
			40 => 
			array (
				'id' => 5041,
				'id_provincia' => 44,
				'cod_municipio' => 131,
				'DC' => 5,
				'nombre' => 'Josa',
			),
			41 => 
			array (
				'id' => 5042,
				'id_provincia' => 45,
				'cod_municipio' => 131,
				'DC' => 8,
				'nombre' => 'Pelahustán',
			),
			42 => 
			array (
				'id' => 5043,
				'id_provincia' => 46,
				'cod_municipio' => 131,
				'DC' => 1,
				'nombre' => 'Gandia',
			),
			43 => 
			array (
				'id' => 5044,
				'id_provincia' => 47,
				'cod_municipio' => 131,
				'DC' => 7,
				'nombre' => 'Rábano',
			),
			44 => 
			array (
				'id' => 5045,
				'id_provincia' => 49,
				'cod_municipio' => 131,
				'DC' => 6,
				'nombre' => 'Moralina',
			),
			45 => 
			array (
				'id' => 5046,
				'id_provincia' => 50,
				'cod_municipio' => 131,
				'DC' => 9,
				'nombre' => 'Jaulín',
			),
			46 => 
			array (
				'id' => 5047,
				'id_provincia' => 3,
				'cod_municipio' => 132,
				'DC' => 3,
				'nombre' => 'Torremanzanas/Torre de les Maçanes, la',
			),
			47 => 
			array (
				'id' => 5048,
				'id_provincia' => 5,
				'cod_municipio' => 132,
				'DC' => 1,
				'nombre' => 'Mombeltrán',
			),
			48 => 
			array (
				'id' => 5049,
				'id_provincia' => 6,
				'cod_municipio' => 132,
				'DC' => 4,
				'nombre' => 'Torremayor',
			),
			49 => 
			array (
				'id' => 5050,
				'id_provincia' => 8,
				'cod_municipio' => 132,
				'DC' => 6,
				'nombre' => 'Montmajor',
			),
			50 => 
			array (
				'id' => 5051,
				'id_provincia' => 9,
				'cod_municipio' => 132,
				'DC' => 9,
				'nombre' => 'Fresno de Río Tirón',
			),
			51 => 
			array (
				'id' => 5052,
				'id_provincia' => 10,
				'cod_municipio' => 132,
				'DC' => 3,
				'nombre' => 'Navalvillar de Ibor',
			),
			52 => 
			array (
				'id' => 5053,
				'id_provincia' => 12,
				'cod_municipio' => 132,
				'DC' => 5,
				'nombre' => 'Vilanova d\'Alcolea',
			),
			53 => 
			array (
				'id' => 5054,
				'id_provincia' => 16,
				'cod_municipio' => 132,
				'DC' => 2,
				'nombre' => 'Mota de Altarejos',
			),
			54 => 
			array (
				'id' => 5055,
				'id_provincia' => 17,
				'cod_municipio' => 132,
				'DC' => 8,
				'nombre' => 'Peralada',
			),
			55 => 
			array (
				'id' => 5056,
				'id_provincia' => 18,
				'cod_municipio' => 132,
				'DC' => 4,
				'nombre' => 'Moclín',
			),
			56 => 
			array (
				'id' => 5057,
				'id_provincia' => 19,
				'cod_municipio' => 132,
				'DC' => 7,
				'nombre' => 'Henche',
			),
			57 => 
			array (
				'id' => 5058,
				'id_provincia' => 24,
				'cod_municipio' => 132,
				'DC' => 4,
				'nombre' => 'Riello',
			),
			58 => 
			array (
				'id' => 5059,
				'id_provincia' => 25,
				'cod_municipio' => 132,
				'DC' => 7,
				'nombre' => 'Massoteres',
			),
			59 => 
			array (
				'id' => 5060,
				'id_provincia' => 26,
				'cod_municipio' => 132,
				'DC' => 0,
				'nombre' => 'San Román de Cameros',
			),
			60 => 
			array (
				'id' => 5061,
				'id_provincia' => 28,
				'cod_municipio' => 132,
				'DC' => 2,
				'nombre' => 'San Martín de la Vega',
			),
			61 => 
			array (
				'id' => 5062,
				'id_provincia' => 31,
				'cod_municipio' => 132,
				'DC' => 6,
				'nombre' => 'Izagaondoa',
			),
			62 => 
			array (
				'id' => 5063,
				'id_provincia' => 34,
				'cod_municipio' => 132,
				'DC' => 2,
				'nombre' => 'Población de Campos',
			),
			63 => 
			array (
				'id' => 5064,
				'id_provincia' => 37,
				'cod_municipio' => 132,
				'DC' => 4,
				'nombre' => 'Fregeneda, La',
			),
			64 => 
			array (
				'id' => 5065,
				'id_provincia' => 40,
				'cod_municipio' => 132,
				'DC' => 7,
				'nombre' => 'Moral de Hornuez',
			),
			65 => 
			array (
				'id' => 5066,
				'id_provincia' => 42,
				'cod_municipio' => 132,
				'DC' => 9,
				'nombre' => 'Noviercas',
			),
			66 => 
			array (
				'id' => 5067,
				'id_provincia' => 43,
				'cod_municipio' => 132,
				'DC' => 5,
				'nombre' => 'Rodonyà',
			),
			67 => 
			array (
				'id' => 5068,
				'id_provincia' => 44,
				'cod_municipio' => 132,
				'DC' => 0,
				'nombre' => 'Lagueruela',
			),
			68 => 
			array (
				'id' => 5069,
				'id_provincia' => 45,
				'cod_municipio' => 132,
				'DC' => 3,
				'nombre' => 'Pepino',
			),
			69 => 
			array (
				'id' => 5070,
				'id_provincia' => 46,
				'cod_municipio' => 132,
				'DC' => 6,
				'nombre' => 'Genovés',
			),
			70 => 
			array (
				'id' => 5071,
				'id_provincia' => 47,
				'cod_municipio' => 132,
				'DC' => 2,
				'nombre' => 'Ramiro',
			),
			71 => 
			array (
				'id' => 5072,
				'id_provincia' => 49,
				'cod_municipio' => 132,
				'DC' => 1,
				'nombre' => 'Moreruela de los Infanzones',
			),
			72 => 
			array (
				'id' => 5073,
				'id_provincia' => 50,
				'cod_municipio' => 132,
				'DC' => 4,
				'nombre' => 'Joyosa, La',
			),
			73 => 
			array (
				'id' => 5074,
				'id_provincia' => 3,
				'cod_municipio' => 133,
				'DC' => 9,
				'nombre' => 'Torrevieja',
			),
			74 => 
			array (
				'id' => 5075,
				'id_provincia' => 5,
				'cod_municipio' => 133,
				'DC' => 7,
				'nombre' => 'Monsalupe',
			),
			75 => 
			array (
				'id' => 5076,
				'id_provincia' => 6,
				'cod_municipio' => 133,
				'DC' => 0,
				'nombre' => 'Torremejía',
			),
			76 => 
			array (
				'id' => 5077,
				'id_provincia' => 8,
				'cod_municipio' => 133,
				'DC' => 2,
				'nombre' => 'Montmaneu',
			),
			77 => 
			array (
				'id' => 5078,
				'id_provincia' => 9,
				'cod_municipio' => 133,
				'DC' => 5,
				'nombre' => 'Fresno de Rodilla',
			),
			78 => 
			array (
				'id' => 5079,
				'id_provincia' => 10,
				'cod_municipio' => 133,
				'DC' => 9,
				'nombre' => 'Navas del Madroño',
			),
			79 => 
			array (
				'id' => 5080,
				'id_provincia' => 12,
				'cod_municipio' => 133,
				'DC' => 1,
				'nombre' => 'Villanueva de Viver',
			),
			80 => 
			array (
				'id' => 5081,
				'id_provincia' => 16,
				'cod_municipio' => 133,
				'DC' => 8,
				'nombre' => 'Mota del Cuervo',
			),
			81 => 
			array (
				'id' => 5082,
				'id_provincia' => 17,
				'cod_municipio' => 133,
				'DC' => 4,
				'nombre' => 'Planes d\'Hostoles, Les',
			),
			82 => 
			array (
				'id' => 5083,
				'id_provincia' => 18,
				'cod_municipio' => 133,
				'DC' => 0,
				'nombre' => 'Molvízar',
			),
			83 => 
			array (
				'id' => 5084,
				'id_provincia' => 19,
				'cod_municipio' => 133,
				'DC' => 3,
				'nombre' => 'Heras de Ayuso',
			),
			84 => 
			array (
				'id' => 5085,
				'id_provincia' => 22,
				'cod_municipio' => 133,
				'DC' => 9,
				'nombre' => 'Labuerda',
			),
			85 => 
			array (
				'id' => 5086,
				'id_provincia' => 24,
				'cod_municipio' => 133,
				'DC' => 0,
				'nombre' => 'Rioseco de Tapia',
			),
			86 => 
			array (
				'id' => 5087,
				'id_provincia' => 25,
				'cod_municipio' => 133,
				'DC' => 3,
				'nombre' => 'Maials',
			),
			87 => 
			array (
				'id' => 5088,
				'id_provincia' => 28,
				'cod_municipio' => 133,
				'DC' => 8,
				'nombre' => 'San Martín de Valdeiglesias',
			),
			88 => 
			array (
				'id' => 5089,
				'id_provincia' => 31,
				'cod_municipio' => 133,
				'DC' => 2,
				'nombre' => 'Izalzu/Itzaltzu',
			),
			89 => 
			array (
				'id' => 5090,
				'id_provincia' => 34,
				'cod_municipio' => 133,
				'DC' => 8,
				'nombre' => 'Población de Cerrato',
			),
			90 => 
			array (
				'id' => 5091,
				'id_provincia' => 37,
				'cod_municipio' => 133,
				'DC' => 0,
				'nombre' => 'Fresnedoso',
			),
			91 => 
			array (
				'id' => 5092,
				'id_provincia' => 43,
				'cod_municipio' => 133,
				'DC' => 1,
				'nombre' => 'Roquetes',
			),
			92 => 
			array (
				'id' => 5093,
				'id_provincia' => 44,
				'cod_municipio' => 133,
				'DC' => 6,
				'nombre' => 'Lanzuela',
			),
			93 => 
			array (
				'id' => 5094,
				'id_provincia' => 45,
				'cod_municipio' => 133,
				'DC' => 9,
				'nombre' => 'Polán',
			),
			94 => 
			array (
				'id' => 5095,
				'id_provincia' => 46,
				'cod_municipio' => 133,
				'DC' => 2,
				'nombre' => 'Gestalgar',
			),
			95 => 
			array (
				'id' => 5096,
				'id_provincia' => 47,
				'cod_municipio' => 133,
				'DC' => 8,
				'nombre' => 'Renedo de Esgueva',
			),
			96 => 
			array (
				'id' => 5097,
				'id_provincia' => 49,
				'cod_municipio' => 133,
				'DC' => 7,
				'nombre' => 'Moreruela de Tábara',
			),
			97 => 
			array (
				'id' => 5098,
				'id_provincia' => 50,
				'cod_municipio' => 133,
				'DC' => 0,
				'nombre' => 'Lagata',
			),
			98 => 
			array (
				'id' => 5099,
				'id_provincia' => 3,
				'cod_municipio' => 134,
				'DC' => 4,
				'nombre' => 'Vall d\'Alcalà, la',
			),
			99 => 
			array (
				'id' => 5100,
				'id_provincia' => 5,
				'cod_municipio' => 134,
				'DC' => 2,
				'nombre' => 'Moraleja de Matacabras',
			),
			100 => 
			array (
				'id' => 5101,
				'id_provincia' => 6,
				'cod_municipio' => 134,
				'DC' => 5,
				'nombre' => 'Trasierra',
			),
			101 => 
			array (
				'id' => 5102,
				'id_provincia' => 8,
				'cod_municipio' => 134,
				'DC' => 7,
				'nombre' => 'Figaró-Montmany',
			),
			102 => 
			array (
				'id' => 5103,
				'id_provincia' => 9,
				'cod_municipio' => 134,
				'DC' => 0,
				'nombre' => 'Frías',
			),
			103 => 
			array (
				'id' => 5104,
				'id_provincia' => 10,
				'cod_municipio' => 134,
				'DC' => 4,
				'nombre' => 'Navezuelas',
			),
			104 => 
			array (
				'id' => 5105,
				'id_provincia' => 12,
				'cod_municipio' => 134,
				'DC' => 6,
				'nombre' => 'Vilar de Canes',
			),
			105 => 
			array (
				'id' => 5106,
				'id_provincia' => 16,
				'cod_municipio' => 134,
				'DC' => 3,
				'nombre' => 'Motilla del Palancar',
			),
			106 => 
			array (
				'id' => 5107,
				'id_provincia' => 17,
				'cod_municipio' => 134,
				'DC' => 9,
				'nombre' => 'Planoles',
			),
			107 => 
			array (
				'id' => 5108,
				'id_provincia' => 18,
				'cod_municipio' => 134,
				'DC' => 5,
				'nombre' => 'Monachil',
			),
			108 => 
			array (
				'id' => 5109,
				'id_provincia' => 19,
				'cod_municipio' => 134,
				'DC' => 8,
				'nombre' => 'Herrería',
			),
			109 => 
			array (
				'id' => 5110,
				'id_provincia' => 24,
				'cod_municipio' => 134,
				'DC' => 5,
				'nombre' => 'Robla, La',
			),
			110 => 
			array (
				'id' => 5111,
				'id_provincia' => 25,
				'cod_municipio' => 134,
				'DC' => 8,
				'nombre' => 'Menàrguens',
			),
			111 => 
			array (
				'id' => 5112,
				'id_provincia' => 26,
				'cod_municipio' => 134,
				'DC' => 1,
				'nombre' => 'Santa Coloma',
			),
			112 => 
			array (
				'id' => 5113,
				'id_provincia' => 28,
				'cod_municipio' => 134,
				'DC' => 3,
				'nombre' => 'San Sebastián de los Reyes',
			),
			113 => 
			array (
				'id' => 5114,
				'id_provincia' => 31,
				'cod_municipio' => 134,
				'DC' => 7,
				'nombre' => 'Jaurrieta',
			),
			114 => 
			array (
				'id' => 5115,
				'id_provincia' => 34,
				'cod_municipio' => 134,
				'DC' => 3,
				'nombre' => 'Polentinos',
			),
			115 => 
			array (
				'id' => 5116,
				'id_provincia' => 37,
				'cod_municipio' => 134,
				'DC' => 5,
				'nombre' => 'Fresno Alhándiga',
			),
			116 => 
			array (
				'id' => 5117,
				'id_provincia' => 40,
				'cod_municipio' => 134,
				'DC' => 8,
				'nombre' => 'Mozoncillo',
			),
			117 => 
			array (
				'id' => 5118,
				'id_provincia' => 42,
				'cod_municipio' => 134,
				'DC' => 0,
				'nombre' => 'Ólvega',
			),
			118 => 
			array (
				'id' => 5119,
				'id_provincia' => 43,
				'cod_municipio' => 134,
				'DC' => 6,
				'nombre' => 'Rourell, El',
			),
			119 => 
			array (
				'id' => 5120,
				'id_provincia' => 45,
				'cod_municipio' => 134,
				'DC' => 4,
				'nombre' => 'Portillo de Toledo',
			),
			120 => 
			array (
				'id' => 5121,
				'id_provincia' => 46,
				'cod_municipio' => 134,
				'DC' => 7,
				'nombre' => 'Gilet',
			),
			121 => 
			array (
				'id' => 5122,
				'id_provincia' => 47,
				'cod_municipio' => 134,
				'DC' => 3,
				'nombre' => 'Roales de Campos',
			),
			122 => 
			array (
				'id' => 5123,
				'id_provincia' => 49,
				'cod_municipio' => 134,
				'DC' => 2,
				'nombre' => 'Muelas de los Caballeros',
			),
			123 => 
			array (
				'id' => 5124,
				'id_provincia' => 50,
				'cod_municipio' => 134,
				'DC' => 5,
				'nombre' => 'Langa del Castillo',
			),
			124 => 
			array (
				'id' => 5125,
				'id_provincia' => 3,
				'cod_municipio' => 135,
				'DC' => 7,
				'nombre' => 'Vall d\'Ebo, la',
			),
			125 => 
			array (
				'id' => 5126,
				'id_provincia' => 5,
				'cod_municipio' => 135,
				'DC' => 5,
				'nombre' => 'Muñana',
			),
			126 => 
			array (
				'id' => 5127,
				'id_provincia' => 6,
				'cod_municipio' => 135,
				'DC' => 8,
				'nombre' => 'Trujillanos',
			),
			127 => 
			array (
				'id' => 5128,
				'id_provincia' => 8,
				'cod_municipio' => 135,
				'DC' => 0,
				'nombre' => 'Montmeló',
			),
			128 => 
			array (
				'id' => 5129,
				'id_provincia' => 9,
				'cod_municipio' => 135,
				'DC' => 3,
				'nombre' => 'Fuentebureba',
			),
			129 => 
			array (
				'id' => 5130,
				'id_provincia' => 10,
				'cod_municipio' => 135,
				'DC' => 7,
				'nombre' => 'Nuñomoral',
			),
			130 => 
			array (
				'id' => 5131,
				'id_provincia' => 12,
				'cod_municipio' => 135,
				'DC' => 9,
				'nombre' => 'Vila-real',
			),
			131 => 
			array (
				'id' => 5132,
				'id_provincia' => 16,
				'cod_municipio' => 135,
				'DC' => 6,
				'nombre' => 'Moya',
			),
			132 => 
			array (
				'id' => 5133,
				'id_provincia' => 17,
				'cod_municipio' => 135,
				'DC' => 2,
				'nombre' => 'Pont de Molins',
			),
			133 => 
			array (
				'id' => 5134,
				'id_provincia' => 18,
				'cod_municipio' => 135,
				'DC' => 8,
				'nombre' => 'Montefrío',
			),
			134 => 
			array (
				'id' => 5135,
				'id_provincia' => 19,
				'cod_municipio' => 135,
				'DC' => 1,
				'nombre' => 'Hiendelaencina',
			),
			135 => 
			array (
				'id' => 5136,
				'id_provincia' => 22,
				'cod_municipio' => 135,
				'DC' => 7,
				'nombre' => 'Laluenga',
			),
			136 => 
			array (
				'id' => 5137,
				'id_provincia' => 25,
				'cod_municipio' => 135,
				'DC' => 1,
				'nombre' => 'Miralcamp',
			),
			137 => 
			array (
				'id' => 5138,
				'id_provincia' => 26,
				'cod_municipio' => 135,
				'DC' => 4,
				'nombre' => 'Santa Engracia del Jubera',
			),
			138 => 
			array (
				'id' => 5139,
				'id_provincia' => 28,
				'cod_municipio' => 135,
				'DC' => 6,
				'nombre' => 'Santa María de la Alameda',
			),
			139 => 
			array (
				'id' => 5140,
				'id_provincia' => 31,
				'cod_municipio' => 135,
				'DC' => 0,
				'nombre' => 'Javier',
			),
			140 => 
			array (
				'id' => 5141,
				'id_provincia' => 34,
				'cod_municipio' => 135,
				'DC' => 6,
				'nombre' => 'Pomar de Valdivia',
			),
			141 => 
			array (
				'id' => 5142,
				'id_provincia' => 37,
				'cod_municipio' => 135,
				'DC' => 8,
				'nombre' => 'Fuente de San Esteban, La',
			),
			142 => 
			array (
				'id' => 5143,
				'id_provincia' => 40,
				'cod_municipio' => 135,
				'DC' => 1,
				'nombre' => 'Muñopedro',
			),
			143 => 
			array (
				'id' => 5144,
				'id_provincia' => 42,
				'cod_municipio' => 135,
				'DC' => 3,
				'nombre' => 'Oncala',
			),
			144 => 
			array (
				'id' => 5145,
				'id_provincia' => 43,
				'cod_municipio' => 135,
				'DC' => 9,
				'nombre' => 'Salomó',
			),
			145 => 
			array (
				'id' => 5146,
				'id_provincia' => 44,
				'cod_municipio' => 135,
				'DC' => 4,
				'nombre' => 'Libros',
			),
			146 => 
			array (
				'id' => 5147,
				'id_provincia' => 45,
				'cod_municipio' => 135,
				'DC' => 7,
				'nombre' => 'Puebla de Almoradiel, La',
			),
			147 => 
			array (
				'id' => 5148,
				'id_provincia' => 46,
				'cod_municipio' => 135,
				'DC' => 0,
				'nombre' => 'Godella',
			),
			148 => 
			array (
				'id' => 5149,
				'id_provincia' => 47,
				'cod_municipio' => 135,
				'DC' => 6,
				'nombre' => 'Robladillo',
			),
			149 => 
			array (
				'id' => 5150,
				'id_provincia' => 49,
				'cod_municipio' => 135,
				'DC' => 5,
				'nombre' => 'Muelas del Pan',
			),
			150 => 
			array (
				'id' => 5151,
				'id_provincia' => 50,
				'cod_municipio' => 135,
				'DC' => 8,
				'nombre' => 'Layana',
			),
			151 => 
			array (
				'id' => 5152,
				'id_provincia' => 3,
				'cod_municipio' => 136,
				'DC' => 0,
				'nombre' => 'Vall de Gallinera',
			),
			152 => 
			array (
				'id' => 5153,
				'id_provincia' => 5,
				'cod_municipio' => 136,
				'DC' => 8,
				'nombre' => 'Muñico',
			),
			153 => 
			array (
				'id' => 5154,
				'id_provincia' => 6,
				'cod_municipio' => 136,
				'DC' => 1,
				'nombre' => 'Usagre',
			),
			154 => 
			array (
				'id' => 5155,
				'id_provincia' => 8,
				'cod_municipio' => 136,
				'DC' => 3,
				'nombre' => 'Montornès del Vallès',
			),
			155 => 
			array (
				'id' => 5156,
				'id_provincia' => 9,
				'cod_municipio' => 136,
				'DC' => 6,
				'nombre' => 'Fuentecén',
			),
			156 => 
			array (
				'id' => 5157,
				'id_provincia' => 10,
				'cod_municipio' => 136,
				'DC' => 0,
				'nombre' => 'Oliva de Plasencia',
			),
			157 => 
			array (
				'id' => 5158,
				'id_provincia' => 12,
				'cod_municipio' => 136,
				'DC' => 2,
				'nombre' => 'Vilavella, la',
			),
			158 => 
			array (
				'id' => 5159,
				'id_provincia' => 17,
				'cod_municipio' => 136,
				'DC' => 5,
				'nombre' => 'Pontós',
			),
			159 => 
			array (
				'id' => 5160,
				'id_provincia' => 18,
				'cod_municipio' => 136,
				'DC' => 1,
				'nombre' => 'Montejícar',
			),
			160 => 
			array (
				'id' => 5161,
				'id_provincia' => 19,
				'cod_municipio' => 136,
				'DC' => 4,
				'nombre' => 'Hijes',
			),
			161 => 
			array (
				'id' => 5162,
				'id_provincia' => 22,
				'cod_municipio' => 136,
				'DC' => 0,
				'nombre' => 'Lalueza',
			),
			162 => 
			array (
				'id' => 5163,
				'id_provincia' => 24,
				'cod_municipio' => 136,
				'DC' => 1,
				'nombre' => 'Roperuelos del Páramo',
			),
			163 => 
			array (
				'id' => 5164,
				'id_provincia' => 25,
				'cod_municipio' => 136,
				'DC' => 4,
				'nombre' => 'Molsosa, La',
			),
			164 => 
			array (
				'id' => 5165,
				'id_provincia' => 26,
				'cod_municipio' => 136,
				'DC' => 7,
				'nombre' => 'Santa Eulalia Bajera',
			),
			165 => 
			array (
				'id' => 5166,
				'id_provincia' => 28,
				'cod_municipio' => 136,
				'DC' => 9,
				'nombre' => 'Santorcaz',
			),
			166 => 
			array (
				'id' => 5167,
				'id_provincia' => 31,
				'cod_municipio' => 136,
				'DC' => 3,
				'nombre' => 'Juslapeña',
			),
			167 => 
			array (
				'id' => 5168,
				'id_provincia' => 34,
				'cod_municipio' => 136,
				'DC' => 9,
				'nombre' => 'Poza de la Vega',
			),
			168 => 
			array (
				'id' => 5169,
				'id_provincia' => 37,
				'cod_municipio' => 136,
				'DC' => 1,
				'nombre' => 'Fuenteguinaldo',
			),
			169 => 
			array (
				'id' => 5170,
				'id_provincia' => 40,
				'cod_municipio' => 136,
				'DC' => 4,
				'nombre' => 'Muñoveros',
			),
			170 => 
			array (
				'id' => 5171,
				'id_provincia' => 43,
				'cod_municipio' => 136,
				'DC' => 2,
				'nombre' => 'Sant Carles de la Ràpita',
			),
			171 => 
			array (
				'id' => 5172,
				'id_provincia' => 44,
				'cod_municipio' => 136,
				'DC' => 7,
				'nombre' => 'Lidón',
			),
			172 => 
			array (
				'id' => 5173,
				'id_provincia' => 45,
				'cod_municipio' => 136,
				'DC' => 0,
				'nombre' => 'Puebla de Montalbán, La',
			),
			173 => 
			array (
				'id' => 5174,
				'id_provincia' => 46,
				'cod_municipio' => 136,
				'DC' => 3,
				'nombre' => 'Godelleta',
			),
			174 => 
			array (
				'id' => 5175,
				'id_provincia' => 49,
				'cod_municipio' => 136,
				'DC' => 8,
				'nombre' => 'Muga de Sayago',
			),
			175 => 
			array (
				'id' => 5176,
				'id_provincia' => 50,
				'cod_municipio' => 136,
				'DC' => 1,
				'nombre' => 'Lécera',
			),
			176 => 
			array (
				'id' => 5177,
				'id_provincia' => 3,
				'cod_municipio' => 137,
				'DC' => 6,
				'nombre' => 'Vall de Laguar, la',
			),
			177 => 
			array (
				'id' => 5178,
				'id_provincia' => 6,
				'cod_municipio' => 137,
				'DC' => 7,
				'nombre' => 'Valdecaballeros',
			),
			178 => 
			array (
				'id' => 5179,
				'id_provincia' => 8,
				'cod_municipio' => 137,
				'DC' => 9,
				'nombre' => 'Montseny',
			),
			179 => 
			array (
				'id' => 5180,
				'id_provincia' => 9,
				'cod_municipio' => 137,
				'DC' => 2,
				'nombre' => 'Fuentelcésped',
			),
			180 => 
			array (
				'id' => 5181,
				'id_provincia' => 10,
				'cod_municipio' => 137,
				'DC' => 6,
				'nombre' => 'Palomero',
			),
			181 => 
			array (
				'id' => 5182,
				'id_provincia' => 12,
				'cod_municipio' => 137,
				'DC' => 8,
				'nombre' => 'Villores',
			),
			182 => 
			array (
				'id' => 5183,
				'id_provincia' => 16,
				'cod_municipio' => 137,
				'DC' => 5,
				'nombre' => 'Narboneta',
			),
			183 => 
			array (
				'id' => 5184,
				'id_provincia' => 17,
				'cod_municipio' => 137,
				'DC' => 1,
				'nombre' => 'Porqueres',
			),
			184 => 
			array (
				'id' => 5185,
				'id_provincia' => 18,
				'cod_municipio' => 137,
				'DC' => 7,
				'nombre' => 'Montillana',
			),
			185 => 
			array (
				'id' => 5186,
				'id_provincia' => 22,
				'cod_municipio' => 137,
				'DC' => 6,
				'nombre' => 'Lanaja',
			),
			186 => 
			array (
				'id' => 5187,
				'id_provincia' => 24,
				'cod_municipio' => 137,
				'DC' => 7,
				'nombre' => 'Sabero',
			),
			187 => 
			array (
				'id' => 5188,
				'id_provincia' => 25,
				'cod_municipio' => 137,
				'DC' => 0,
				'nombre' => 'Mollerussa',
			),
			188 => 
			array (
				'id' => 5189,
				'id_provincia' => 28,
				'cod_municipio' => 137,
				'DC' => 5,
				'nombre' => 'Santos de la Humosa, Los',
			),
			189 => 
			array (
				'id' => 5190,
				'id_provincia' => 31,
				'cod_municipio' => 137,
				'DC' => 9,
				'nombre' => 'Beintza-Labaien',
			),
			190 => 
			array (
				'id' => 5191,
				'id_provincia' => 34,
				'cod_municipio' => 137,
				'DC' => 5,
				'nombre' => 'Pozo de Urama',
			),
			191 => 
			array (
				'id' => 5192,
				'id_provincia' => 37,
				'cod_municipio' => 137,
				'DC' => 7,
				'nombre' => 'Fuenteliante',
			),
			192 => 
			array (
				'id' => 5193,
				'id_provincia' => 43,
				'cod_municipio' => 137,
				'DC' => 8,
				'nombre' => 'Sant Jaume dels Domenys',
			),
			193 => 
			array (
				'id' => 5194,
				'id_provincia' => 44,
				'cod_municipio' => 137,
				'DC' => 3,
				'nombre' => 'Linares de Mora',
			),
			194 => 
			array (
				'id' => 5195,
				'id_provincia' => 45,
				'cod_municipio' => 137,
				'DC' => 6,
				'nombre' => 'Pueblanueva, La',
			),
			195 => 
			array (
				'id' => 5196,
				'id_provincia' => 46,
				'cod_municipio' => 137,
				'DC' => 9,
				'nombre' => 'Granja de la Costera, la',
			),
			196 => 
			array (
				'id' => 5197,
				'id_provincia' => 47,
				'cod_municipio' => 137,
				'DC' => 5,
				'nombre' => 'Roturas',
			),
			197 => 
			array (
				'id' => 5198,
				'id_provincia' => 49,
				'cod_municipio' => 137,
				'DC' => 4,
				'nombre' => 'Navianos de Valverde',
			),
			198 => 
			array (
				'id' => 5199,
				'id_provincia' => 50,
				'cod_municipio' => 137,
				'DC' => 7,
				'nombre' => 'Leciñena',
			),
			199 => 
			array (
				'id' => 5200,
				'id_provincia' => 3,
				'cod_municipio' => 138,
				'DC' => 2,
				'nombre' => 'Verger, el',
			),
			200 => 
			array (
				'id' => 5201,
				'id_provincia' => 5,
				'cod_municipio' => 138,
				'DC' => 0,
				'nombre' => 'Muñogalindo',
			),
			201 => 
			array (
				'id' => 5202,
				'id_provincia' => 6,
				'cod_municipio' => 138,
				'DC' => 3,
				'nombre' => 'Valdetorres',
			),
			202 => 
			array (
				'id' => 5203,
				'id_provincia' => 8,
				'cod_municipio' => 138,
				'DC' => 5,
				'nombre' => 'Moià',
			),
			203 => 
			array (
				'id' => 5204,
				'id_provincia' => 9,
				'cod_municipio' => 138,
				'DC' => 8,
				'nombre' => 'Fuentelisendo',
			),
			204 => 
			array (
				'id' => 5205,
				'id_provincia' => 10,
				'cod_municipio' => 138,
				'DC' => 2,
				'nombre' => 'Pasarón de la Vera',
			),
			205 => 
			array (
				'id' => 5206,
				'id_provincia' => 12,
				'cod_municipio' => 138,
				'DC' => 4,
				'nombre' => 'Vinaròs',
			),
			206 => 
			array (
				'id' => 5207,
				'id_provincia' => 17,
				'cod_municipio' => 138,
				'DC' => 7,
				'nombre' => 'Portbou',
			),
			207 => 
			array (
				'id' => 5208,
				'id_provincia' => 18,
				'cod_municipio' => 138,
				'DC' => 3,
				'nombre' => 'Moraleda de Zafayona',
			),
			208 => 
			array (
				'id' => 5209,
				'id_provincia' => 19,
				'cod_municipio' => 138,
				'DC' => 6,
				'nombre' => 'Hita',
			),
			209 => 
			array (
				'id' => 5210,
				'id_provincia' => 25,
				'cod_municipio' => 138,
				'DC' => 6,
				'nombre' => 'Montgai',
			),
			210 => 
			array (
				'id' => 5211,
				'id_provincia' => 26,
				'cod_municipio' => 138,
				'DC' => 9,
				'nombre' => 'Santo Domingo de la Calzada',
			),
			211 => 
			array (
				'id' => 5212,
				'id_provincia' => 28,
				'cod_municipio' => 138,
				'DC' => 1,
				'nombre' => 'Serna del Monte, La',
			),
			212 => 
			array (
				'id' => 5213,
				'id_provincia' => 31,
				'cod_municipio' => 138,
				'DC' => 5,
				'nombre' => 'Lakuntza',
			),
			213 => 
			array (
				'id' => 5214,
				'id_provincia' => 37,
				'cod_municipio' => 138,
				'DC' => 3,
				'nombre' => 'Fuenterroble de Salvatierra',
			),
			214 => 
			array (
				'id' => 5215,
				'id_provincia' => 40,
				'cod_municipio' => 138,
				'DC' => 6,
				'nombre' => 'Nava de la Asunción',
			),
			215 => 
			array (
				'id' => 5216,
				'id_provincia' => 43,
				'cod_municipio' => 138,
				'DC' => 4,
				'nombre' => 'Santa Bàrbara',
			),
			216 => 
			array (
				'id' => 5217,
				'id_provincia' => 44,
				'cod_municipio' => 138,
				'DC' => 9,
				'nombre' => 'Loscos',
			),
			217 => 
			array (
				'id' => 5218,
				'id_provincia' => 45,
				'cod_municipio' => 138,
				'DC' => 2,
				'nombre' => 'Puente del Arzobispo, El',
			),
			218 => 
			array (
				'id' => 5219,
				'id_provincia' => 46,
				'cod_municipio' => 138,
				'DC' => 5,
				'nombre' => 'Guadasséquies',
			),
			219 => 
			array (
				'id' => 5220,
				'id_provincia' => 47,
				'cod_municipio' => 138,
				'DC' => 1,
				'nombre' => 'Rubí de Bracamonte',
			),
			220 => 
			array (
				'id' => 5221,
				'id_provincia' => 49,
				'cod_municipio' => 138,
				'DC' => 0,
				'nombre' => 'Olmillos de Castro',
			),
			221 => 
			array (
				'id' => 5222,
				'id_provincia' => 50,
				'cod_municipio' => 138,
				'DC' => 3,
				'nombre' => 'Lechón',
			),
			222 => 
			array (
				'id' => 5223,
				'id_provincia' => 3,
				'cod_municipio' => 139,
				'DC' => 5,
				'nombre' => 'Villajoyosa/Vila Joiosa, la',
			),
			223 => 
			array (
				'id' => 5224,
				'id_provincia' => 5,
				'cod_municipio' => 139,
				'DC' => 3,
				'nombre' => 'Muñogrande',
			),
			224 => 
			array (
				'id' => 5225,
				'id_provincia' => 6,
				'cod_municipio' => 139,
				'DC' => 6,
				'nombre' => 'Valencia de las Torres',
			),
			225 => 
			array (
				'id' => 5226,
				'id_provincia' => 8,
				'cod_municipio' => 139,
				'DC' => 8,
				'nombre' => 'Mura',
			),
			226 => 
			array (
				'id' => 5227,
				'id_provincia' => 9,
				'cod_municipio' => 139,
				'DC' => 1,
				'nombre' => 'Fuentemolinos',
			),
			227 => 
			array (
				'id' => 5228,
				'id_provincia' => 10,
				'cod_municipio' => 139,
				'DC' => 5,
				'nombre' => 'Pedroso de Acim',
			),
			228 => 
			array (
				'id' => 5229,
				'id_provincia' => 12,
				'cod_municipio' => 139,
				'DC' => 7,
				'nombre' => 'Vistabella del Maestrazgo',
			),
			229 => 
			array (
				'id' => 5230,
				'id_provincia' => 16,
				'cod_municipio' => 139,
				'DC' => 4,
				'nombre' => 'Olivares de Júcar',
			),
			230 => 
			array (
				'id' => 5231,
				'id_provincia' => 17,
				'cod_municipio' => 139,
				'DC' => 0,
				'nombre' => 'Preses, Les',
			),
			231 => 
			array (
				'id' => 5232,
				'id_provincia' => 19,
				'cod_municipio' => 139,
				'DC' => 9,
				'nombre' => 'Hombrados',
			),
			232 => 
			array (
				'id' => 5233,
				'id_provincia' => 22,
				'cod_municipio' => 139,
				'DC' => 5,
				'nombre' => 'Laperdiguera',
			),
			233 => 
			array (
				'id' => 5234,
				'id_provincia' => 24,
				'cod_municipio' => 139,
				'DC' => 6,
				'nombre' => 'Sahagún',
			),
			234 => 
			array (
				'id' => 5235,
				'id_provincia' => 25,
				'cod_municipio' => 139,
				'DC' => 9,
				'nombre' => 'Montellà i Martinet',
			),
			235 => 
			array (
				'id' => 5236,
				'id_provincia' => 26,
				'cod_municipio' => 139,
				'DC' => 2,
				'nombre' => 'San Torcuato',
			),
			236 => 
			array (
				'id' => 5237,
				'id_provincia' => 31,
				'cod_municipio' => 139,
				'DC' => 8,
				'nombre' => 'Lana',
			),
			237 => 
			array (
				'id' => 5238,
				'id_provincia' => 34,
				'cod_municipio' => 139,
				'DC' => 4,
				'nombre' => 'Prádanos de Ojeda',
			),
			238 => 
			array (
				'id' => 5239,
				'id_provincia' => 37,
				'cod_municipio' => 139,
				'DC' => 6,
				'nombre' => 'Fuentes de Béjar',
			),
			239 => 
			array (
				'id' => 5240,
				'id_provincia' => 40,
				'cod_municipio' => 139,
				'DC' => 9,
				'nombre' => 'Navafría',
			),
			240 => 
			array (
				'id' => 5241,
				'id_provincia' => 42,
				'cod_municipio' => 139,
				'DC' => 1,
				'nombre' => 'Pinilla del Campo',
			),
			241 => 
			array (
				'id' => 5242,
				'id_provincia' => 43,
				'cod_municipio' => 139,
				'DC' => 7,
				'nombre' => 'Santa Coloma de Queralt',
			),
			242 => 
			array (
				'id' => 5243,
				'id_provincia' => 45,
				'cod_municipio' => 139,
				'DC' => 5,
				'nombre' => 'Puerto de San Vicente',
			),
			243 => 
			array (
				'id' => 5244,
				'id_provincia' => 46,
				'cod_municipio' => 139,
				'DC' => 8,
				'nombre' => 'Guadassuar',
			),
			244 => 
			array (
				'id' => 5245,
				'id_provincia' => 47,
				'cod_municipio' => 139,
				'DC' => 4,
				'nombre' => 'Rueda',
			),
			245 => 
			array (
				'id' => 5246,
				'id_provincia' => 49,
				'cod_municipio' => 139,
				'DC' => 3,
				'nombre' => 'Otero de Bodas',
			),
			246 => 
			array (
				'id' => 5247,
				'id_provincia' => 50,
				'cod_municipio' => 139,
				'DC' => 6,
				'nombre' => 'Letux',
			),
			247 => 
			array (
				'id' => 5248,
				'id_provincia' => 3,
				'cod_municipio' => 140,
				'DC' => 9,
				'nombre' => 'Villena',
			),
			248 => 
			array (
				'id' => 5249,
				'id_provincia' => 5,
				'cod_municipio' => 140,
				'DC' => 7,
				'nombre' => 'Muñomer del Peco',
			),
			249 => 
			array (
				'id' => 5250,
				'id_provincia' => 6,
				'cod_municipio' => 140,
				'DC' => 0,
				'nombre' => 'Valencia del Mombuey',
			),
			250 => 
			array (
				'id' => 5251,
				'id_provincia' => 8,
				'cod_municipio' => 140,
				'DC' => 2,
				'nombre' => 'Navarcles',
			),
			251 => 
			array (
				'id' => 5252,
				'id_provincia' => 9,
				'cod_municipio' => 140,
				'DC' => 5,
				'nombre' => 'Fuentenebro',
			),
			252 => 
			array (
				'id' => 5253,
				'id_provincia' => 10,
				'cod_municipio' => 140,
				'DC' => 9,
				'nombre' => 'Peraleda de la Mata',
			),
			253 => 
			array (
				'id' => 5254,
				'id_provincia' => 12,
				'cod_municipio' => 140,
				'DC' => 1,
				'nombre' => 'Viver',
			),
			254 => 
			array (
				'id' => 5255,
				'id_provincia' => 16,
				'cod_municipio' => 140,
				'DC' => 8,
				'nombre' => 'Olmeda de la Cuesta',
			),
			255 => 
			array (
				'id' => 5256,
				'id_provincia' => 17,
				'cod_municipio' => 140,
				'DC' => 4,
				'nombre' => 'Port de la Selva, El',
			),
			256 => 
			array (
				'id' => 5257,
				'id_provincia' => 18,
				'cod_municipio' => 140,
				'DC' => 0,
				'nombre' => 'Motril',
			),
			257 => 
			array (
				'id' => 5258,
				'id_provincia' => 25,
				'cod_municipio' => 140,
				'DC' => 3,
				'nombre' => 'Montferrer i Castellbò',
			),
			258 => 
			array (
				'id' => 5259,
				'id_provincia' => 26,
				'cod_municipio' => 140,
				'DC' => 6,
				'nombre' => 'Santurde de Rioja',
			),
			259 => 
			array (
				'id' => 5260,
				'id_provincia' => 28,
				'cod_municipio' => 140,
				'DC' => 8,
				'nombre' => 'Serranillos del Valle',
			),
			260 => 
			array (
				'id' => 5261,
				'id_provincia' => 31,
				'cod_municipio' => 140,
				'DC' => 2,
				'nombre' => 'Lantz',
			),
			261 => 
			array (
				'id' => 5262,
				'id_provincia' => 34,
				'cod_municipio' => 140,
				'DC' => 8,
				'nombre' => 'Puebla de Valdavia, La',
			),
			262 => 
			array (
				'id' => 5263,
				'id_provincia' => 37,
				'cod_municipio' => 140,
				'DC' => 0,
				'nombre' => 'Fuentes de Oñoro',
			),
			263 => 
			array (
				'id' => 5264,
				'id_provincia' => 40,
				'cod_municipio' => 140,
				'DC' => 3,
				'nombre' => 'Navalilla',
			),
			264 => 
			array (
				'id' => 5265,
				'id_provincia' => 42,
				'cod_municipio' => 140,
				'DC' => 5,
				'nombre' => 'Portillo de Soria',
			),
			265 => 
			array (
				'id' => 5266,
				'id_provincia' => 43,
				'cod_municipio' => 140,
				'DC' => 1,
				'nombre' => 'Santa Oliva',
			),
			266 => 
			array (
				'id' => 5267,
				'id_provincia' => 45,
				'cod_municipio' => 140,
				'DC' => 9,
				'nombre' => 'Pulgar',
			),
			267 => 
			array (
				'id' => 5268,
				'id_provincia' => 46,
				'cod_municipio' => 140,
				'DC' => 2,
				'nombre' => 'Guardamar de la Safor',
			),
			268 => 
			array (
				'id' => 5269,
				'id_provincia' => 47,
				'cod_municipio' => 140,
				'DC' => 8,
				'nombre' => 'Saelices de Mayorga',
			),
			269 => 
			array (
				'id' => 5270,
				'id_provincia' => 50,
				'cod_municipio' => 140,
				'DC' => 0,
				'nombre' => 'Litago',
			),
			270 => 
			array (
				'id' => 5271,
				'id_provincia' => 5,
				'cod_municipio' => 141,
				'DC' => 4,
				'nombre' => 'Muñopepe',
			),
			271 => 
			array (
				'id' => 5272,
				'id_provincia' => 6,
				'cod_municipio' => 141,
				'DC' => 7,
				'nombre' => 'Valencia del Ventoso',
			),
			272 => 
			array (
				'id' => 5273,
				'id_provincia' => 8,
				'cod_municipio' => 141,
				'DC' => 9,
				'nombre' => 'Navàs',
			),
			273 => 
			array (
				'id' => 5274,
				'id_provincia' => 9,
				'cod_municipio' => 141,
				'DC' => 2,
				'nombre' => 'Fuentespina',
			),
			274 => 
			array (
				'id' => 5275,
				'id_provincia' => 10,
				'cod_municipio' => 141,
				'DC' => 6,
				'nombre' => 'Peraleda de San Román',
			),
			275 => 
			array (
				'id' => 5276,
				'id_provincia' => 12,
				'cod_municipio' => 141,
				'DC' => 8,
				'nombre' => 'Zorita del Maestrazgo',
			),
			276 => 
			array (
				'id' => 5277,
				'id_provincia' => 16,
				'cod_municipio' => 141,
				'DC' => 5,
				'nombre' => 'Olmeda del Rey',
			),
			277 => 
			array (
				'id' => 5278,
				'id_provincia' => 17,
				'cod_municipio' => 141,
				'DC' => 1,
				'nombre' => 'Puigcerdà',
			),
			278 => 
			array (
				'id' => 5279,
				'id_provincia' => 18,
				'cod_municipio' => 141,
				'DC' => 7,
				'nombre' => 'Murtas',
			),
			279 => 
			array (
				'id' => 5280,
				'id_provincia' => 22,
				'cod_municipio' => 141,
				'DC' => 6,
				'nombre' => 'Lascellas-Ponzano',
			),
			280 => 
			array (
				'id' => 5281,
				'id_provincia' => 24,
				'cod_municipio' => 141,
				'DC' => 7,
				'nombre' => 'San Adrián del Valle',
			),
			281 => 
			array (
				'id' => 5282,
				'id_provincia' => 25,
				'cod_municipio' => 141,
				'DC' => 0,
				'nombre' => 'Montoliu de Segarra',
			),
			282 => 
			array (
				'id' => 5283,
				'id_provincia' => 26,
				'cod_municipio' => 141,
				'DC' => 3,
				'nombre' => 'Santurdejo',
			),
			283 => 
			array (
				'id' => 5284,
				'id_provincia' => 28,
				'cod_municipio' => 141,
				'DC' => 5,
				'nombre' => 'Sevilla la Nueva',
			),
			284 => 
			array (
				'id' => 5285,
				'id_provincia' => 31,
				'cod_municipio' => 141,
				'DC' => 9,
				'nombre' => 'Lapoblación',
			),
			285 => 
			array (
				'id' => 5286,
				'id_provincia' => 34,
				'cod_municipio' => 141,
				'DC' => 5,
				'nombre' => 'Quintana del Puente',
			),
			286 => 
			array (
				'id' => 5287,
				'id_provincia' => 37,
				'cod_municipio' => 141,
				'DC' => 7,
				'nombre' => 'Gajates',
			),
			287 => 
			array (
				'id' => 5288,
				'id_provincia' => 40,
				'cod_municipio' => 141,
				'DC' => 0,
				'nombre' => 'Navalmanzano',
			),
			288 => 
			array (
				'id' => 5289,
				'id_provincia' => 42,
				'cod_municipio' => 141,
				'DC' => 2,
				'nombre' => 'Póveda de Soria, La',
			),
			289 => 
			array (
				'id' => 5290,
				'id_provincia' => 43,
				'cod_municipio' => 141,
				'DC' => 8,
				'nombre' => 'Pontils',
			),
			290 => 
			array (
				'id' => 5291,
				'id_provincia' => 44,
				'cod_municipio' => 141,
				'DC' => 3,
				'nombre' => 'Lledó',
			),
			291 => 
			array (
				'id' => 5292,
				'id_provincia' => 45,
				'cod_municipio' => 141,
				'DC' => 6,
				'nombre' => 'Quero',
			),
			292 => 
			array (
				'id' => 5293,
				'id_provincia' => 46,
				'cod_municipio' => 141,
				'DC' => 9,
				'nombre' => 'Higueruelas',
			),
			293 => 
			array (
				'id' => 5294,
				'id_provincia' => 47,
				'cod_municipio' => 141,
				'DC' => 5,
				'nombre' => 'Salvador de Zapardiel',
			),
			294 => 
			array (
				'id' => 5295,
				'id_provincia' => 49,
				'cod_municipio' => 141,
				'DC' => 4,
				'nombre' => 'Pajares de la Lampreana',
			),
			295 => 
			array (
				'id' => 5296,
				'id_provincia' => 50,
				'cod_municipio' => 141,
				'DC' => 7,
				'nombre' => 'Lituénigo',
			),
			296 => 
			array (
				'id' => 5297,
				'id_provincia' => 5,
				'cod_municipio' => 142,
				'DC' => 9,
				'nombre' => 'Muñosancho',
			),
			297 => 
			array (
				'id' => 5298,
				'id_provincia' => 6,
				'cod_municipio' => 142,
				'DC' => 2,
				'nombre' => 'Valverde de Burguillos',
			),
			298 => 
			array (
				'id' => 5299,
				'id_provincia' => 8,
				'cod_municipio' => 142,
				'DC' => 4,
				'nombre' => 'Nou de Berguedà, La',
			),
			299 => 
			array (
				'id' => 5300,
				'id_provincia' => 10,
				'cod_municipio' => 142,
				'DC' => 1,
				'nombre' => 'Perales del Puerto',
			),
			300 => 
			array (
				'id' => 5301,
				'id_provincia' => 12,
				'cod_municipio' => 142,
				'DC' => 3,
				'nombre' => 'Zucaina',
			),
			301 => 
			array (
				'id' => 5302,
				'id_provincia' => 16,
				'cod_municipio' => 142,
				'DC' => 0,
				'nombre' => 'Olmedilla de Alarcón',
			),
			302 => 
			array (
				'id' => 5303,
				'id_provincia' => 17,
				'cod_municipio' => 142,
				'DC' => 6,
				'nombre' => 'Quart',
			),
			303 => 
			array (
				'id' => 5304,
				'id_provincia' => 19,
				'cod_municipio' => 142,
				'DC' => 5,
				'nombre' => 'Hontoba',
			),
			304 => 
			array (
				'id' => 5305,
				'id_provincia' => 22,
				'cod_municipio' => 142,
				'DC' => 1,
				'nombre' => 'Lascuarre',
			),
			305 => 
			array (
				'id' => 5306,
				'id_provincia' => 24,
				'cod_municipio' => 142,
				'DC' => 2,
				'nombre' => 'San Andrés del Rabanedo',
			),
			306 => 
			array (
				'id' => 5307,
				'id_provincia' => 25,
				'cod_municipio' => 142,
				'DC' => 5,
				'nombre' => 'Montoliu de Lleida',
			),
			307 => 
			array (
				'id' => 5308,
				'id_provincia' => 26,
				'cod_municipio' => 142,
				'DC' => 8,
				'nombre' => 'San Vicente de la Sonsierra',
			),
			308 => 
			array (
				'id' => 5309,
				'id_provincia' => 31,
				'cod_municipio' => 142,
				'DC' => 4,
				'nombre' => 'Larraga',
			),
			309 => 
			array (
				'id' => 5310,
				'id_provincia' => 37,
				'cod_municipio' => 142,
				'DC' => 2,
				'nombre' => 'Galindo y Perahuy',
			),
			310 => 
			array (
				'id' => 5311,
				'id_provincia' => 40,
				'cod_municipio' => 142,
				'DC' => 5,
				'nombre' => 'Navares de Ayuso',
			),
			311 => 
			array (
				'id' => 5312,
				'id_provincia' => 42,
				'cod_municipio' => 142,
				'DC' => 7,
				'nombre' => 'Pozalmuro',
			),
			312 => 
			array (
				'id' => 5313,
				'id_provincia' => 43,
				'cod_municipio' => 142,
				'DC' => 3,
				'nombre' => 'Sarral',
			),
			313 => 
			array (
				'id' => 5314,
				'id_provincia' => 44,
				'cod_municipio' => 142,
				'DC' => 8,
				'nombre' => 'Maicas',
			),
			314 => 
			array (
				'id' => 5315,
				'id_provincia' => 45,
				'cod_municipio' => 142,
				'DC' => 1,
				'nombre' => 'Quintanar de la Orden',
			),
			315 => 
			array (
				'id' => 5316,
				'id_provincia' => 46,
				'cod_municipio' => 142,
				'DC' => 4,
				'nombre' => 'Jalance',
			),
			316 => 
			array (
				'id' => 5317,
				'id_provincia' => 47,
				'cod_municipio' => 142,
				'DC' => 0,
				'nombre' => 'San Cebrián de Mazote',
			),
			317 => 
			array (
				'id' => 5318,
				'id_provincia' => 49,
				'cod_municipio' => 142,
				'DC' => 9,
				'nombre' => 'Palacios del Pan',
			),
			318 => 
			array (
				'id' => 5319,
				'id_provincia' => 50,
				'cod_municipio' => 142,
				'DC' => 2,
				'nombre' => 'Lobera de Onsella',
			),
			319 => 
			array (
				'id' => 5320,
				'id_provincia' => 5,
				'cod_municipio' => 143,
				'DC' => 5,
				'nombre' => 'Muñotello',
			),
			320 => 
			array (
				'id' => 5321,
				'id_provincia' => 6,
				'cod_municipio' => 143,
				'DC' => 8,
				'nombre' => 'Valverde de Leganés',
			),
			321 => 
			array (
				'id' => 5322,
				'id_provincia' => 8,
				'cod_municipio' => 143,
				'DC' => 0,
				'nombre' => 'Òdena',
			),
			322 => 
			array (
				'id' => 5323,
				'id_provincia' => 9,
				'cod_municipio' => 143,
				'DC' => 3,
				'nombre' => 'Galbarros',
			),
			323 => 
			array (
				'id' => 5324,
				'id_provincia' => 10,
				'cod_municipio' => 143,
				'DC' => 7,
				'nombre' => 'Pescueza',
			),
			324 => 
			array (
				'id' => 5325,
				'id_provincia' => 16,
				'cod_municipio' => 143,
				'DC' => 6,
				'nombre' => 'Olmedilla de Eliz',
			),
			325 => 
			array (
				'id' => 5326,
				'id_provincia' => 17,
				'cod_municipio' => 143,
				'DC' => 2,
				'nombre' => 'Rabós',
			),
			326 => 
			array (
				'id' => 5327,
				'id_provincia' => 18,
				'cod_municipio' => 143,
				'DC' => 8,
				'nombre' => 'Nigüelas',
			),
			327 => 
			array (
				'id' => 5328,
				'id_provincia' => 19,
				'cod_municipio' => 143,
				'DC' => 1,
				'nombre' => 'Horche',
			),
			328 => 
			array (
				'id' => 5329,
				'id_provincia' => 22,
				'cod_municipio' => 143,
				'DC' => 7,
				'nombre' => 'Laspaúles',
			),
			329 => 
			array (
				'id' => 5330,
				'id_provincia' => 24,
				'cod_municipio' => 143,
				'DC' => 8,
				'nombre' => 'Sancedo',
			),
			330 => 
			array (
				'id' => 5331,
				'id_provincia' => 25,
				'cod_municipio' => 143,
				'DC' => 1,
				'nombre' => 'Montornès de Segarra',
			),
			331 => 
			array (
				'id' => 5332,
				'id_provincia' => 26,
				'cod_municipio' => 143,
				'DC' => 4,
				'nombre' => 'Sojuela',
			),
			332 => 
			array (
				'id' => 5333,
				'id_provincia' => 28,
				'cod_municipio' => 143,
				'DC' => 6,
				'nombre' => 'Somosierra',
			),
			333 => 
			array (
				'id' => 5334,
				'id_provincia' => 31,
				'cod_municipio' => 143,
				'DC' => 0,
				'nombre' => 'Larraona',
			),
			334 => 
			array (
				'id' => 5335,
				'id_provincia' => 34,
				'cod_municipio' => 143,
				'DC' => 6,
				'nombre' => 'Quintanilla de Onsoña',
			),
			335 => 
			array (
				'id' => 5336,
				'id_provincia' => 37,
				'cod_municipio' => 143,
				'DC' => 8,
				'nombre' => 'Galinduste',
			),
			336 => 
			array (
				'id' => 5337,
				'id_provincia' => 40,
				'cod_municipio' => 143,
				'DC' => 1,
				'nombre' => 'Navares de Enmedio',
			),
			337 => 
			array (
				'id' => 5338,
				'id_provincia' => 43,
				'cod_municipio' => 143,
				'DC' => 9,
				'nombre' => 'Savallà del Comtat',
			),
			338 => 
			array (
				'id' => 5339,
				'id_provincia' => 44,
				'cod_municipio' => 143,
				'DC' => 4,
				'nombre' => 'Manzanera',
			),
			339 => 
			array (
				'id' => 5340,
				'id_provincia' => 45,
				'cod_municipio' => 143,
				'DC' => 7,
				'nombre' => 'Quismondo',
			),
			340 => 
			array (
				'id' => 5341,
				'id_provincia' => 46,
				'cod_municipio' => 143,
				'DC' => 0,
				'nombre' => 'Xeraco',
			),
			341 => 
			array (
				'id' => 5342,
				'id_provincia' => 47,
				'cod_municipio' => 143,
				'DC' => 6,
				'nombre' => 'San Llorente',
			),
			342 => 
			array (
				'id' => 5343,
				'id_provincia' => 49,
				'cod_municipio' => 143,
				'DC' => 5,
				'nombre' => 'Palacios de Sanabria',
			),
			343 => 
			array (
				'id' => 5344,
				'id_provincia' => 50,
				'cod_municipio' => 143,
				'DC' => 8,
				'nombre' => 'Longares',
			),
			344 => 
			array (
				'id' => 5345,
				'id_provincia' => 5,
				'cod_municipio' => 144,
				'DC' => 0,
				'nombre' => 'Narrillos del Álamo',
			),
			345 => 
			array (
				'id' => 5346,
				'id_provincia' => 6,
				'cod_municipio' => 144,
				'DC' => 3,
				'nombre' => 'Valverde de Llerena',
			),
			346 => 
			array (
				'id' => 5347,
				'id_provincia' => 8,
				'cod_municipio' => 144,
				'DC' => 5,
				'nombre' => 'Olvan',
			),
			347 => 
			array (
				'id' => 5348,
				'id_provincia' => 9,
				'cod_municipio' => 144,
				'DC' => 8,
				'nombre' => 'Gallega, La',
			),
			348 => 
			array (
				'id' => 5349,
				'id_provincia' => 10,
				'cod_municipio' => 144,
				'DC' => 2,
				'nombre' => 'Pesga, La',
			),
			349 => 
			array (
				'id' => 5350,
				'id_provincia' => 17,
				'cod_municipio' => 144,
				'DC' => 7,
				'nombre' => 'Regencós',
			),
			350 => 
			array (
				'id' => 5351,
				'id_provincia' => 18,
				'cod_municipio' => 144,
				'DC' => 3,
				'nombre' => 'Nívar',
			),
			351 => 
			array (
				'id' => 5352,
				'id_provincia' => 22,
				'cod_municipio' => 144,
				'DC' => 2,
				'nombre' => 'Laspuña',
			),
			352 => 
			array (
				'id' => 5353,
				'id_provincia' => 24,
				'cod_municipio' => 144,
				'DC' => 3,
				'nombre' => 'San Cristóbal de la Polantera',
			),
			353 => 
			array (
				'id' => 5354,
				'id_provincia' => 26,
				'cod_municipio' => 144,
				'DC' => 9,
				'nombre' => 'Sorzano',
			),
			354 => 
			array (
				'id' => 5355,
				'id_provincia' => 28,
				'cod_municipio' => 144,
				'DC' => 1,
				'nombre' => 'Soto del Real',
			),
			355 => 
			array (
				'id' => 5356,
				'id_provincia' => 31,
				'cod_municipio' => 144,
				'DC' => 5,
				'nombre' => 'Larraun',
			),
			356 => 
			array (
				'id' => 5357,
				'id_provincia' => 37,
				'cod_municipio' => 144,
				'DC' => 3,
				'nombre' => 'Galisancho',
			),
			357 => 
			array (
				'id' => 5358,
				'id_provincia' => 40,
				'cod_municipio' => 144,
				'DC' => 6,
				'nombre' => 'Navares de las Cuevas',
			),
			358 => 
			array (
				'id' => 5359,
				'id_provincia' => 42,
				'cod_municipio' => 144,
				'DC' => 8,
				'nombre' => 'Quintana Redonda',
			),
			359 => 
			array (
				'id' => 5360,
				'id_provincia' => 43,
				'cod_municipio' => 144,
				'DC' => 4,
				'nombre' => 'Secuita, La',
			),
			360 => 
			array (
				'id' => 5361,
				'id_provincia' => 44,
				'cod_municipio' => 144,
				'DC' => 9,
				'nombre' => 'Martín del Río',
			),
			361 => 
			array (
				'id' => 5362,
				'id_provincia' => 45,
				'cod_municipio' => 144,
				'DC' => 2,
				'nombre' => 'Real de San Vicente, El',
			),
			362 => 
			array (
				'id' => 5363,
				'id_provincia' => 46,
				'cod_municipio' => 144,
				'DC' => 5,
				'nombre' => 'Jarafuel',
			),
			363 => 
			array (
				'id' => 5364,
				'id_provincia' => 47,
				'cod_municipio' => 144,
				'DC' => 1,
				'nombre' => 'San Martín de Valvení',
			),
			364 => 
			array (
				'id' => 5365,
				'id_provincia' => 50,
				'cod_municipio' => 144,
				'DC' => 3,
				'nombre' => 'Longás',
			),
			365 => 
			array (
				'id' => 5366,
				'id_provincia' => 5,
				'cod_municipio' => 145,
				'DC' => 3,
				'nombre' => 'Narrillos del Rebollar',
			),
			366 => 
			array (
				'id' => 5367,
				'id_provincia' => 6,
				'cod_municipio' => 145,
				'DC' => 6,
				'nombre' => 'Valverde de Mérida',
			),
			367 => 
			array (
				'id' => 5368,
				'id_provincia' => 8,
				'cod_municipio' => 145,
				'DC' => 8,
				'nombre' => 'Olèrdola',
			),
			368 => 
			array (
				'id' => 5369,
				'id_provincia' => 10,
				'cod_municipio' => 145,
				'DC' => 5,
				'nombre' => 'Piedras Albas',
			),
			369 => 
			array (
				'id' => 5370,
				'id_provincia' => 16,
				'cod_municipio' => 145,
				'DC' => 4,
				'nombre' => 'Osa de la Vega',
			),
			370 => 
			array (
				'id' => 5371,
				'id_provincia' => 17,
				'cod_municipio' => 145,
				'DC' => 0,
				'nombre' => 'Ribes de Freser',
			),
			371 => 
			array (
				'id' => 5372,
				'id_provincia' => 18,
				'cod_municipio' => 145,
				'DC' => 6,
				'nombre' => 'Ogíjares',
			),
			372 => 
			array (
				'id' => 5373,
				'id_provincia' => 19,
				'cod_municipio' => 145,
				'DC' => 9,
				'nombre' => 'Hortezuela de Océn',
			),
			373 => 
			array (
				'id' => 5374,
				'id_provincia' => 24,
				'cod_municipio' => 145,
				'DC' => 6,
				'nombre' => 'San Emiliano',
			),
			374 => 
			array (
				'id' => 5375,
				'id_provincia' => 25,
				'cod_municipio' => 145,
				'DC' => 9,
				'nombre' => 'Nalec',
			),
			375 => 
			array (
				'id' => 5376,
				'id_provincia' => 26,
				'cod_municipio' => 145,
				'DC' => 2,
				'nombre' => 'Sotés',
			),
			376 => 
			array (
				'id' => 5377,
				'id_provincia' => 28,
				'cod_municipio' => 145,
				'DC' => 4,
				'nombre' => 'Talamanca de Jarama',
			),
			377 => 
			array (
				'id' => 5378,
				'id_provincia' => 31,
				'cod_municipio' => 145,
				'DC' => 8,
				'nombre' => 'Lazagurría',
			),
			378 => 
			array (
				'id' => 5379,
				'id_provincia' => 37,
				'cod_municipio' => 145,
				'DC' => 6,
				'nombre' => 'Gallegos de Argañán',
			),
			379 => 
			array (
				'id' => 5380,
				'id_provincia' => 40,
				'cod_municipio' => 145,
				'DC' => 9,
				'nombre' => 'Navas de Oro',
			),
			380 => 
			array (
				'id' => 5381,
				'id_provincia' => 42,
				'cod_municipio' => 145,
				'DC' => 1,
				'nombre' => 'Quintanas de Gormaz',
			),
			381 => 
			array (
				'id' => 5382,
				'id_provincia' => 43,
				'cod_municipio' => 145,
				'DC' => 7,
				'nombre' => 'Selva del Camp, La',
			),
			382 => 
			array (
				'id' => 5383,
				'id_provincia' => 44,
				'cod_municipio' => 145,
				'DC' => 2,
				'nombre' => 'Mas de las Matas',
			),
			383 => 
			array (
				'id' => 5384,
				'id_provincia' => 45,
				'cod_municipio' => 145,
				'DC' => 5,
				'nombre' => 'Recas',
			),
			384 => 
			array (
				'id' => 5385,
				'id_provincia' => 46,
				'cod_municipio' => 145,
				'DC' => 8,
				'nombre' => 'Xàtiva',
			),
			385 => 
			array (
				'id' => 5386,
				'id_provincia' => 47,
				'cod_municipio' => 145,
				'DC' => 4,
				'nombre' => 'San Miguel del Arroyo',
			),
			386 => 
			array (
				'id' => 5387,
				'id_provincia' => 49,
				'cod_municipio' => 145,
				'DC' => 3,
				'nombre' => 'Pedralba de la Pradería',
			),
			387 => 
			array (
				'id' => 5388,
				'id_provincia' => 6,
				'cod_municipio' => 146,
				'DC' => 9,
				'nombre' => 'Valle de la Serena',
			),
			388 => 
			array (
				'id' => 5389,
				'id_provincia' => 8,
				'cod_municipio' => 146,
				'DC' => 1,
				'nombre' => 'Olesa de Bonesvalls',
			),
			389 => 
			array (
				'id' => 5390,
				'id_provincia' => 10,
				'cod_municipio' => 146,
				'DC' => 8,
				'nombre' => 'Pinofranqueado',
			),
			390 => 
			array (
				'id' => 5391,
				'id_provincia' => 16,
				'cod_municipio' => 146,
				'DC' => 7,
				'nombre' => 'Pajarón',
			),
			391 => 
			array (
				'id' => 5392,
				'id_provincia' => 17,
				'cod_municipio' => 146,
				'DC' => 3,
				'nombre' => 'Riells i Viabrea',
			),
			392 => 
			array (
				'id' => 5393,
				'id_provincia' => 18,
				'cod_municipio' => 146,
				'DC' => 9,
				'nombre' => 'Orce',
			),
			393 => 
			array (
				'id' => 5394,
				'id_provincia' => 19,
				'cod_municipio' => 146,
				'DC' => 2,
				'nombre' => 'Huerce, La',
			),
			394 => 
			array (
				'id' => 5395,
				'id_provincia' => 24,
				'cod_municipio' => 146,
				'DC' => 9,
				'nombre' => 'San Esteban de Nogales',
			),
			395 => 
			array (
				'id' => 5396,
				'id_provincia' => 25,
				'cod_municipio' => 146,
				'DC' => 2,
				'nombre' => 'Navès',
			),
			396 => 
			array (
				'id' => 5397,
				'id_provincia' => 26,
				'cod_municipio' => 146,
				'DC' => 5,
				'nombre' => 'Soto en Cameros',
			),
			397 => 
			array (
				'id' => 5398,
				'id_provincia' => 28,
				'cod_municipio' => 146,
				'DC' => 7,
				'nombre' => 'Tielmes',
			),
			398 => 
			array (
				'id' => 5399,
				'id_provincia' => 31,
				'cod_municipio' => 146,
				'DC' => 1,
				'nombre' => 'Leache',
			),
			399 => 
			array (
				'id' => 5400,
				'id_provincia' => 34,
				'cod_municipio' => 146,
				'DC' => 7,
				'nombre' => 'Reinoso de Cerrato',
			),
			400 => 
			array (
				'id' => 5401,
				'id_provincia' => 37,
				'cod_municipio' => 146,
				'DC' => 9,
				'nombre' => 'Gallegos de Solmirón',
			),
			401 => 
			array (
				'id' => 5402,
				'id_provincia' => 40,
				'cod_municipio' => 146,
				'DC' => 2,
				'nombre' => 'Navas de San Antonio',
			),
			402 => 
			array (
				'id' => 5403,
				'id_provincia' => 43,
				'cod_municipio' => 146,
				'DC' => 0,
				'nombre' => 'Senan',
			),
			403 => 
			array (
				'id' => 5404,
				'id_provincia' => 44,
				'cod_municipio' => 146,
				'DC' => 5,
				'nombre' => 'Mata de los Olmos, La',
			),
			404 => 
			array (
				'id' => 5405,
				'id_provincia' => 45,
				'cod_municipio' => 146,
				'DC' => 8,
				'nombre' => 'Retamoso de la Jara',
			),
			405 => 
			array (
				'id' => 5406,
				'id_provincia' => 46,
				'cod_municipio' => 146,
				'DC' => 1,
				'nombre' => 'Xeresa',
			),
			406 => 
			array (
				'id' => 5407,
				'id_provincia' => 47,
				'cod_municipio' => 146,
				'DC' => 7,
				'nombre' => 'San Miguel del Pino',
			),
			407 => 
			array (
				'id' => 5408,
				'id_provincia' => 49,
				'cod_municipio' => 146,
				'DC' => 6,
				'nombre' => 'Pego, El',
			),
			408 => 
			array (
				'id' => 5409,
				'id_provincia' => 50,
				'cod_municipio' => 146,
				'DC' => 9,
				'nombre' => 'Lucena de Jalón',
			),
			409 => 
			array (
				'id' => 5410,
				'id_provincia' => 5,
				'cod_municipio' => 147,
				'DC' => 2,
				'nombre' => 'Narros del Castillo',
			),
			410 => 
			array (
				'id' => 5411,
				'id_provincia' => 6,
				'cod_municipio' => 147,
				'DC' => 5,
				'nombre' => 'Valle de Matamoros',
			),
			411 => 
			array (
				'id' => 5412,
				'id_provincia' => 8,
				'cod_municipio' => 147,
				'DC' => 7,
				'nombre' => 'Olesa de Montserrat',
			),
			412 => 
			array (
				'id' => 5413,
				'id_provincia' => 10,
				'cod_municipio' => 147,
				'DC' => 4,
				'nombre' => 'Piornal',
			),
			413 => 
			array (
				'id' => 5414,
				'id_provincia' => 16,
				'cod_municipio' => 147,
				'DC' => 3,
				'nombre' => 'Pajaroncillo',
			),
			414 => 
			array (
				'id' => 5415,
				'id_provincia' => 17,
				'cod_municipio' => 147,
				'DC' => 9,
				'nombre' => 'Ripoll',
			),
			415 => 
			array (
				'id' => 5416,
				'id_provincia' => 18,
				'cod_municipio' => 147,
				'DC' => 5,
				'nombre' => 'Órgiva',
			),
			416 => 
			array (
				'id' => 5417,
				'id_provincia' => 19,
				'cod_municipio' => 147,
				'DC' => 8,
				'nombre' => 'Huérmeces del Cerro',
			),
			417 => 
			array (
				'id' => 5418,
				'id_provincia' => 26,
				'cod_municipio' => 147,
				'DC' => 1,
				'nombre' => 'Terroba',
			),
			418 => 
			array (
				'id' => 5419,
				'id_provincia' => 28,
				'cod_municipio' => 147,
				'DC' => 3,
				'nombre' => 'Titulcia',
			),
			419 => 
			array (
				'id' => 5420,
				'id_provincia' => 31,
				'cod_municipio' => 147,
				'DC' => 7,
				'nombre' => 'Legarda',
			),
			420 => 
			array (
				'id' => 5421,
				'id_provincia' => 34,
				'cod_municipio' => 147,
				'DC' => 3,
				'nombre' => 'Renedo de la Vega',
			),
			421 => 
			array (
				'id' => 5422,
				'id_provincia' => 37,
				'cod_municipio' => 147,
				'DC' => 5,
				'nombre' => 'Garcibuey',
			),
			422 => 
			array (
				'id' => 5423,
				'id_provincia' => 43,
				'cod_municipio' => 147,
				'DC' => 6,
				'nombre' => 'Solivella',
			),
			423 => 
			array (
				'id' => 5424,
				'id_provincia' => 44,
				'cod_municipio' => 147,
				'DC' => 1,
				'nombre' => 'Mazaleón',
			),
			424 => 
			array (
				'id' => 5425,
				'id_provincia' => 45,
				'cod_municipio' => 147,
				'DC' => 4,
				'nombre' => 'Rielves',
			),
			425 => 
			array (
				'id' => 5426,
				'id_provincia' => 46,
				'cod_municipio' => 147,
				'DC' => 7,
				'nombre' => 'Llíria',
			),
			426 => 
			array (
				'id' => 5427,
				'id_provincia' => 47,
				'cod_municipio' => 147,
				'DC' => 3,
				'nombre' => 'San Pablo de la Moraleja',
			),
			427 => 
			array (
				'id' => 5428,
				'id_provincia' => 49,
				'cod_municipio' => 147,
				'DC' => 2,
				'nombre' => 'Peleagonzalo',
			),
			428 => 
			array (
				'id' => 5429,
				'id_provincia' => 50,
				'cod_municipio' => 147,
				'DC' => 5,
				'nombre' => 'Luceni',
			),
			429 => 
			array (
				'id' => 5430,
				'id_provincia' => 5,
				'cod_municipio' => 148,
				'DC' => 8,
				'nombre' => 'Narros del Puerto',
			),
			430 => 
			array (
				'id' => 5431,
				'id_provincia' => 6,
				'cod_municipio' => 148,
				'DC' => 1,
				'nombre' => 'Valle de Santa Ana',
			),
			431 => 
			array (
				'id' => 5432,
				'id_provincia' => 8,
				'cod_municipio' => 148,
				'DC' => 3,
				'nombre' => 'Olivella',
			),
			432 => 
			array (
				'id' => 5433,
				'id_provincia' => 9,
				'cod_municipio' => 148,
				'DC' => 6,
				'nombre' => 'Grijalba',
			),
			433 => 
			array (
				'id' => 5434,
				'id_provincia' => 10,
				'cod_municipio' => 148,
				'DC' => 0,
				'nombre' => 'Plasencia',
			),
			434 => 
			array (
				'id' => 5435,
				'id_provincia' => 16,
				'cod_municipio' => 148,
				'DC' => 9,
				'nombre' => 'Palomares del Campo',
			),
			435 => 
			array (
				'id' => 5436,
				'id_provincia' => 17,
				'cod_municipio' => 148,
				'DC' => 5,
				'nombre' => 'Riudarenes',
			),
			436 => 
			array (
				'id' => 5437,
				'id_provincia' => 18,
				'cod_municipio' => 148,
				'DC' => 1,
				'nombre' => 'Otívar',
			),
			437 => 
			array (
				'id' => 5438,
				'id_provincia' => 19,
				'cod_municipio' => 148,
				'DC' => 4,
				'nombre' => 'Huertahernando',
			),
			438 => 
			array (
				'id' => 5439,
				'id_provincia' => 24,
				'cod_municipio' => 148,
				'DC' => 1,
				'nombre' => 'San Justo de la Vega',
			),
			439 => 
			array (
				'id' => 5440,
				'id_provincia' => 25,
				'cod_municipio' => 148,
				'DC' => 4,
				'nombre' => 'Odèn',
			),
			440 => 
			array (
				'id' => 5441,
				'id_provincia' => 26,
				'cod_municipio' => 148,
				'DC' => 7,
				'nombre' => 'Tirgo',
			),
			441 => 
			array (
				'id' => 5442,
				'id_provincia' => 28,
				'cod_municipio' => 148,
				'DC' => 9,
				'nombre' => 'Torrejón de Ardoz',
			),
			442 => 
			array (
				'id' => 5443,
				'id_provincia' => 31,
				'cod_municipio' => 148,
				'DC' => 3,
				'nombre' => 'Legaria',
			),
			443 => 
			array (
				'id' => 5444,
				'id_provincia' => 37,
				'cod_municipio' => 148,
				'DC' => 1,
				'nombre' => 'Garcihernández',
			),
			444 => 
			array (
				'id' => 5445,
				'id_provincia' => 40,
				'cod_municipio' => 148,
				'DC' => 4,
				'nombre' => 'Nieva',
			),
			445 => 
			array (
				'id' => 5446,
				'id_provincia' => 42,
				'cod_municipio' => 148,
				'DC' => 6,
				'nombre' => 'Quiñonería',
			),
			446 => 
			array (
				'id' => 5447,
				'id_provincia' => 43,
				'cod_municipio' => 148,
				'DC' => 2,
				'nombre' => 'Tarragona',
			),
			447 => 
			array (
				'id' => 5448,
				'id_provincia' => 44,
				'cod_municipio' => 148,
				'DC' => 7,
				'nombre' => 'Mezquita de Jarque',
			),
			448 => 
			array (
				'id' => 5449,
				'id_provincia' => 45,
				'cod_municipio' => 148,
				'DC' => 0,
				'nombre' => 'Robledo del Mazo',
			),
			449 => 
			array (
				'id' => 5450,
				'id_provincia' => 46,
				'cod_municipio' => 148,
				'DC' => 3,
				'nombre' => 'Loriguilla',
			),
			450 => 
			array (
				'id' => 5451,
				'id_provincia' => 47,
				'cod_municipio' => 148,
				'DC' => 9,
				'nombre' => 'San Pedro de Latarce',
			),
			451 => 
			array (
				'id' => 5452,
				'id_provincia' => 49,
				'cod_municipio' => 148,
				'DC' => 8,
				'nombre' => 'Peleas de Abajo',
			),
			452 => 
			array (
				'id' => 5453,
				'id_provincia' => 50,
				'cod_municipio' => 148,
				'DC' => 1,
				'nombre' => 'Luesia',
			),
			453 => 
			array (
				'id' => 5454,
				'id_provincia' => 5,
				'cod_municipio' => 149,
				'DC' => 1,
				'nombre' => 'Narros de Saldueña',
			),
			454 => 
			array (
				'id' => 5455,
				'id_provincia' => 6,
				'cod_municipio' => 149,
				'DC' => 4,
				'nombre' => 'Villafranca de los Barros',
			),
			455 => 
			array (
				'id' => 5456,
				'id_provincia' => 8,
				'cod_municipio' => 149,
				'DC' => 6,
				'nombre' => 'Olost',
			),
			456 => 
			array (
				'id' => 5457,
				'id_provincia' => 9,
				'cod_municipio' => 149,
				'DC' => 9,
				'nombre' => 'Grisaleña',
			),
			457 => 
			array (
				'id' => 5458,
				'id_provincia' => 10,
				'cod_municipio' => 149,
				'DC' => 3,
				'nombre' => 'Plasenzuela',
			),
			458 => 
			array (
				'id' => 5459,
				'id_provincia' => 16,
				'cod_municipio' => 149,
				'DC' => 2,
				'nombre' => 'Palomera',
			),
			459 => 
			array (
				'id' => 5460,
				'id_provincia' => 17,
				'cod_municipio' => 149,
				'DC' => 8,
				'nombre' => 'Riudaura',
			),
			460 => 
			array (
				'id' => 5461,
				'id_provincia' => 18,
				'cod_municipio' => 149,
				'DC' => 4,
				'nombre' => 'Otura',
			),
			461 => 
			array (
				'id' => 5462,
				'id_provincia' => 22,
				'cod_municipio' => 149,
				'DC' => 3,
				'nombre' => 'Loarre',
			),
			462 => 
			array (
				'id' => 5463,
				'id_provincia' => 24,
				'cod_municipio' => 149,
				'DC' => 4,
				'nombre' => 'San Millán de los Caballeros',
			),
			463 => 
			array (
				'id' => 5464,
				'id_provincia' => 25,
				'cod_municipio' => 149,
				'DC' => 7,
				'nombre' => 'Oliana',
			),
			464 => 
			array (
				'id' => 5465,
				'id_provincia' => 26,
				'cod_municipio' => 149,
				'DC' => 0,
				'nombre' => 'Tobía',
			),
			465 => 
			array (
				'id' => 5466,
				'id_provincia' => 28,
				'cod_municipio' => 149,
				'DC' => 2,
				'nombre' => 'Torrejón de la Calzada',
			),
			466 => 
			array (
				'id' => 5467,
				'id_provincia' => 31,
				'cod_municipio' => 149,
				'DC' => 6,
				'nombre' => 'Leitza',
			),
			467 => 
			array (
				'id' => 5468,
				'id_provincia' => 34,
				'cod_municipio' => 149,
				'DC' => 2,
				'nombre' => 'Requena de Campos',
			),
			468 => 
			array (
				'id' => 5469,
				'id_provincia' => 37,
				'cod_municipio' => 149,
				'DC' => 4,
				'nombre' => 'Garcirrey',
			),
			469 => 
			array (
				'id' => 5470,
				'id_provincia' => 40,
				'cod_municipio' => 149,
				'DC' => 7,
				'nombre' => 'Olombrada',
			),
			470 => 
			array (
				'id' => 5471,
				'id_provincia' => 42,
				'cod_municipio' => 149,
				'DC' => 9,
				'nombre' => 'Rábanos, Los',
			),
			471 => 
			array (
				'id' => 5472,
				'id_provincia' => 43,
				'cod_municipio' => 149,
				'DC' => 5,
				'nombre' => 'Tivenys',
			),
			472 => 
			array (
				'id' => 5473,
				'id_provincia' => 44,
				'cod_municipio' => 149,
				'DC' => 0,
				'nombre' => 'Mirambel',
			),
			473 => 
			array (
				'id' => 5474,
				'id_provincia' => 45,
				'cod_municipio' => 149,
				'DC' => 3,
				'nombre' => 'Romeral, El',
			),
			474 => 
			array (
				'id' => 5475,
				'id_provincia' => 46,
				'cod_municipio' => 149,
				'DC' => 6,
				'nombre' => 'Losa del Obispo',
			),
			475 => 
			array (
				'id' => 5476,
				'id_provincia' => 47,
				'cod_municipio' => 149,
				'DC' => 2,
				'nombre' => 'San Pelayo',
			),
			476 => 
			array (
				'id' => 5477,
				'id_provincia' => 49,
				'cod_municipio' => 149,
				'DC' => 1,
				'nombre' => 'Peñausende',
			),
			477 => 
			array (
				'id' => 5478,
				'id_provincia' => 50,
				'cod_municipio' => 149,
				'DC' => 4,
				'nombre' => 'Luesma',
			),
			478 => 
			array (
				'id' => 5479,
				'id_provincia' => 6,
				'cod_municipio' => 150,
				'DC' => 7,
				'nombre' => 'Villagarcía de la Torre',
			),
			479 => 
			array (
				'id' => 5480,
				'id_provincia' => 8,
				'cod_municipio' => 150,
				'DC' => 9,
				'nombre' => 'Orís',
			),
			480 => 
			array (
				'id' => 5481,
				'id_provincia' => 10,
				'cod_municipio' => 150,
				'DC' => 6,
				'nombre' => 'Portaje',
			),
			481 => 
			array (
				'id' => 5482,
				'id_provincia' => 16,
				'cod_municipio' => 150,
				'DC' => 5,
				'nombre' => 'Paracuellos',
			),
			482 => 
			array (
				'id' => 5483,
				'id_provincia' => 17,
				'cod_municipio' => 150,
				'DC' => 1,
				'nombre' => 'Riudellots de la Selva',
			),
			483 => 
			array (
				'id' => 5484,
				'id_provincia' => 18,
				'cod_municipio' => 150,
				'DC' => 7,
				'nombre' => 'Padul',
			),
			484 => 
			array (
				'id' => 5485,
				'id_provincia' => 19,
				'cod_municipio' => 150,
				'DC' => 0,
				'nombre' => 'Hueva',
			),
			485 => 
			array (
				'id' => 5486,
				'id_provincia' => 22,
				'cod_municipio' => 150,
				'DC' => 6,
				'nombre' => 'Loporzano',
			),
			486 => 
			array (
				'id' => 5487,
				'id_provincia' => 24,
				'cod_municipio' => 150,
				'DC' => 7,
				'nombre' => 'San Pedro Bercianos',
			),
			487 => 
			array (
				'id' => 5488,
				'id_provincia' => 25,
				'cod_municipio' => 150,
				'DC' => 0,
				'nombre' => 'Oliola',
			),
			488 => 
			array (
				'id' => 5489,
				'id_provincia' => 26,
				'cod_municipio' => 150,
				'DC' => 3,
				'nombre' => 'Tormantos',
			),
			489 => 
			array (
				'id' => 5490,
				'id_provincia' => 28,
				'cod_municipio' => 150,
				'DC' => 5,
				'nombre' => 'Torrejón de Velasco',
			),
			490 => 
			array (
				'id' => 5491,
				'id_provincia' => 31,
				'cod_municipio' => 150,
				'DC' => 9,
				'nombre' => 'Leoz/Leotz',
			),
			491 => 
			array (
				'id' => 5492,
				'id_provincia' => 37,
				'cod_municipio' => 150,
				'DC' => 7,
				'nombre' => 'Gejuelo del Barro',
			),
			492 => 
			array (
				'id' => 5493,
				'id_provincia' => 40,
				'cod_municipio' => 150,
				'DC' => 0,
				'nombre' => 'Orejana',
			),
			493 => 
			array (
				'id' => 5494,
				'id_provincia' => 43,
				'cod_municipio' => 150,
				'DC' => 8,
				'nombre' => 'Tivissa',
			),
			494 => 
			array (
				'id' => 5495,
				'id_provincia' => 44,
				'cod_municipio' => 150,
				'DC' => 3,
				'nombre' => 'Miravete de la Sierra',
			),
			495 => 
			array (
				'id' => 5496,
				'id_provincia' => 45,
				'cod_municipio' => 150,
				'DC' => 6,
				'nombre' => 'San Bartolomé de las Abiertas',
			),
			496 => 
			array (
				'id' => 5497,
				'id_provincia' => 46,
				'cod_municipio' => 150,
				'DC' => 9,
				'nombre' => 'Llutxent',
			),
			497 => 
			array (
				'id' => 5498,
				'id_provincia' => 47,
				'cod_municipio' => 150,
				'DC' => 5,
				'nombre' => 'San Román de Hornija',
			),
			498 => 
			array (
				'id' => 5499,
				'id_provincia' => 49,
				'cod_municipio' => 150,
				'DC' => 4,
				'nombre' => 'Peque',
			),
			499 => 
			array (
				'id' => 5500,
				'id_provincia' => 50,
				'cod_municipio' => 150,
				'DC' => 7,
				'nombre' => 'Lumpiaque',
			),
		));
		\DB::table('municipios')->insert(array (
			0 => 
			array (
				'id' => 5501,
				'id_provincia' => 5,
				'cod_municipio' => 151,
				'DC' => 1,
				'nombre' => 'Navacepedilla de Corneja',
			),
			1 => 
			array (
				'id' => 5502,
				'id_provincia' => 6,
				'cod_municipio' => 151,
				'DC' => 4,
				'nombre' => 'Villagonzalo',
			),
			2 => 
			array (
				'id' => 5503,
				'id_provincia' => 8,
				'cod_municipio' => 151,
				'DC' => 6,
				'nombre' => 'Oristà',
			),
			3 => 
			array (
				'id' => 5504,
				'id_provincia' => 9,
				'cod_municipio' => 151,
				'DC' => 9,
				'nombre' => 'Gumiel de Izán',
			),
			4 => 
			array (
				'id' => 5505,
				'id_provincia' => 10,
				'cod_municipio' => 151,
				'DC' => 3,
				'nombre' => 'Portezuelo',
			),
			5 => 
			array (
				'id' => 5506,
				'id_provincia' => 16,
				'cod_municipio' => 151,
				'DC' => 2,
				'nombre' => 'Paredes',
			),
			6 => 
			array (
				'id' => 5507,
				'id_provincia' => 17,
				'cod_municipio' => 151,
				'DC' => 8,
				'nombre' => 'Riumors',
			),
			7 => 
			array (
				'id' => 5508,
				'id_provincia' => 18,
				'cod_municipio' => 151,
				'DC' => 4,
				'nombre' => 'Pampaneira',
			),
			8 => 
			array (
				'id' => 5509,
				'id_provincia' => 19,
				'cod_municipio' => 151,
				'DC' => 7,
				'nombre' => 'Humanes',
			),
			9 => 
			array (
				'id' => 5510,
				'id_provincia' => 22,
				'cod_municipio' => 151,
				'DC' => 3,
				'nombre' => 'Loscorrales',
			),
			10 => 
			array (
				'id' => 5511,
				'id_provincia' => 24,
				'cod_municipio' => 151,
				'DC' => 4,
				'nombre' => 'Santa Colomba de Curueño',
			),
			11 => 
			array (
				'id' => 5512,
				'id_provincia' => 25,
				'cod_municipio' => 151,
				'DC' => 7,
				'nombre' => 'Olius',
			),
			12 => 
			array (
				'id' => 5513,
				'id_provincia' => 26,
				'cod_municipio' => 151,
				'DC' => 0,
				'nombre' => 'Torrecilla en Cameros',
			),
			13 => 
			array (
				'id' => 5514,
				'id_provincia' => 28,
				'cod_municipio' => 151,
				'DC' => 2,
				'nombre' => 'Torrelaguna',
			),
			14 => 
			array (
				'id' => 5515,
				'id_provincia' => 31,
				'cod_municipio' => 151,
				'DC' => 6,
				'nombre' => 'Lerga',
			),
			15 => 
			array (
				'id' => 5516,
				'id_provincia' => 34,
				'cod_municipio' => 151,
				'DC' => 2,
				'nombre' => 'Respenda de la Peña',
			),
			16 => 
			array (
				'id' => 5517,
				'id_provincia' => 37,
				'cod_municipio' => 151,
				'DC' => 4,
				'nombre' => 'Golpejas',
			),
			17 => 
			array (
				'id' => 5518,
				'id_provincia' => 40,
				'cod_municipio' => 151,
				'DC' => 7,
				'nombre' => 'Ortigosa de Pestaño',
			),
			18 => 
			array (
				'id' => 5519,
				'id_provincia' => 42,
				'cod_municipio' => 151,
				'DC' => 9,
				'nombre' => 'Rebollar',
			),
			19 => 
			array (
				'id' => 5520,
				'id_provincia' => 43,
				'cod_municipio' => 151,
				'DC' => 5,
				'nombre' => 'Torre de Fontaubella, La',
			),
			20 => 
			array (
				'id' => 5521,
				'id_provincia' => 44,
				'cod_municipio' => 151,
				'DC' => 0,
				'nombre' => 'Molinos',
			),
			21 => 
			array (
				'id' => 5522,
				'id_provincia' => 45,
				'cod_municipio' => 151,
				'DC' => 3,
				'nombre' => 'San Martín de Montalbán',
			),
			22 => 
			array (
				'id' => 5523,
				'id_provincia' => 46,
				'cod_municipio' => 151,
				'DC' => 6,
				'nombre' => 'Llocnou d\'En Fenollet',
			),
			23 => 
			array (
				'id' => 5524,
				'id_provincia' => 47,
				'cod_municipio' => 151,
				'DC' => 2,
				'nombre' => 'San Salvador',
			),
			24 => 
			array (
				'id' => 5525,
				'id_provincia' => 49,
				'cod_municipio' => 151,
				'DC' => 1,
				'nombre' => 'Perdigón, El',
			),
			25 => 
			array (
				'id' => 5526,
				'id_provincia' => 50,
				'cod_municipio' => 151,
				'DC' => 4,
				'nombre' => 'Luna',
			),
			26 => 
			array (
				'id' => 5527,
				'id_provincia' => 5,
				'cod_municipio' => 152,
				'DC' => 6,
				'nombre' => 'Nava de Arévalo',
			),
			27 => 
			array (
				'id' => 5528,
				'id_provincia' => 6,
				'cod_municipio' => 152,
				'DC' => 9,
				'nombre' => 'Villalba de los Barros',
			),
			28 => 
			array (
				'id' => 5529,
				'id_provincia' => 8,
				'cod_municipio' => 152,
				'DC' => 1,
				'nombre' => 'Orpí',
			),
			29 => 
			array (
				'id' => 5530,
				'id_provincia' => 9,
				'cod_municipio' => 152,
				'DC' => 4,
				'nombre' => 'Gumiel de Mercado',
			),
			30 => 
			array (
				'id' => 5531,
				'id_provincia' => 10,
				'cod_municipio' => 152,
				'DC' => 8,
				'nombre' => 'Pozuelo de Zarzón',
			),
			31 => 
			array (
				'id' => 5532,
				'id_provincia' => 16,
				'cod_municipio' => 152,
				'DC' => 7,
				'nombre' => 'Parra de las Vegas, La',
			),
			32 => 
			array (
				'id' => 5533,
				'id_provincia' => 17,
				'cod_municipio' => 152,
				'DC' => 3,
				'nombre' => 'Roses',
			),
			33 => 
			array (
				'id' => 5534,
				'id_provincia' => 18,
				'cod_municipio' => 152,
				'DC' => 9,
				'nombre' => 'Pedro Martínez',
			),
			34 => 
			array (
				'id' => 5535,
				'id_provincia' => 19,
				'cod_municipio' => 152,
				'DC' => 2,
				'nombre' => 'Illana',
			),
			35 => 
			array (
				'id' => 5536,
				'id_provincia' => 24,
				'cod_municipio' => 152,
				'DC' => 9,
				'nombre' => 'Santa Colomba de Somoza',
			),
			36 => 
			array (
				'id' => 5537,
				'id_provincia' => 25,
				'cod_municipio' => 152,
				'DC' => 2,
				'nombre' => 'Oluges, Les',
			),
			37 => 
			array (
				'id' => 5538,
				'id_provincia' => 26,
				'cod_municipio' => 152,
				'DC' => 5,
				'nombre' => 'Torrecilla sobre Alesanco',
			),
			38 => 
			array (
				'id' => 5539,
				'id_provincia' => 28,
				'cod_municipio' => 152,
				'DC' => 7,
				'nombre' => 'Torrelodones',
			),
			39 => 
			array (
				'id' => 5540,
				'id_provincia' => 31,
				'cod_municipio' => 152,
				'DC' => 1,
				'nombre' => 'Lerín',
			),
			40 => 
			array (
				'id' => 5541,
				'id_provincia' => 34,
				'cod_municipio' => 152,
				'DC' => 7,
				'nombre' => 'Revenga de Campos',
			),
			41 => 
			array (
				'id' => 5542,
				'id_provincia' => 37,
				'cod_municipio' => 152,
				'DC' => 9,
				'nombre' => 'Gomecello',
			),
			42 => 
			array (
				'id' => 5543,
				'id_provincia' => 40,
				'cod_municipio' => 152,
				'DC' => 2,
				'nombre' => 'Otero de Herreros',
			),
			43 => 
			array (
				'id' => 5544,
				'id_provincia' => 42,
				'cod_municipio' => 152,
				'DC' => 4,
				'nombre' => 'Recuerda',
			),
			44 => 
			array (
				'id' => 5545,
				'id_provincia' => 43,
				'cod_municipio' => 152,
				'DC' => 0,
				'nombre' => 'Torre de l\'Espanyol, La',
			),
			45 => 
			array (
				'id' => 5546,
				'id_provincia' => 44,
				'cod_municipio' => 152,
				'DC' => 5,
				'nombre' => 'Monforte de Moyuela',
			),
			46 => 
			array (
				'id' => 5547,
				'id_provincia' => 45,
				'cod_municipio' => 152,
				'DC' => 8,
				'nombre' => 'San Martín de Pusa',
			),
			47 => 
			array (
				'id' => 5548,
				'id_provincia' => 46,
				'cod_municipio' => 152,
				'DC' => 1,
				'nombre' => 'Llocnou de la Corona',
			),
			48 => 
			array (
				'id' => 5549,
				'id_provincia' => 47,
				'cod_municipio' => 152,
				'DC' => 7,
				'nombre' => 'Santa Eufemia del Arroyo',
			),
			49 => 
			array (
				'id' => 5550,
				'id_provincia' => 49,
				'cod_municipio' => 152,
				'DC' => 6,
				'nombre' => 'Pereruela',
			),
			50 => 
			array (
				'id' => 5551,
				'id_provincia' => 50,
				'cod_municipio' => 152,
				'DC' => 9,
				'nombre' => 'Maella',
			),
			51 => 
			array (
				'id' => 5552,
				'id_provincia' => 5,
				'cod_municipio' => 153,
				'DC' => 2,
				'nombre' => 'Nava del Barco',
			),
			52 => 
			array (
				'id' => 5553,
				'id_provincia' => 6,
				'cod_municipio' => 153,
				'DC' => 5,
				'nombre' => 'Villanueva de la Serena',
			),
			53 => 
			array (
				'id' => 5554,
				'id_provincia' => 8,
				'cod_municipio' => 153,
				'DC' => 7,
				'nombre' => 'Òrrius',
			),
			54 => 
			array (
				'id' => 5555,
				'id_provincia' => 10,
				'cod_municipio' => 153,
				'DC' => 4,
				'nombre' => 'Puerto de Santa Cruz',
			),
			55 => 
			array (
				'id' => 5556,
				'id_provincia' => 16,
				'cod_municipio' => 153,
				'DC' => 3,
				'nombre' => 'Pedernoso, El',
			),
			56 => 
			array (
				'id' => 5557,
				'id_provincia' => 17,
				'cod_municipio' => 153,
				'DC' => 9,
				'nombre' => 'Rupià',
			),
			57 => 
			array (
				'id' => 5558,
				'id_provincia' => 18,
				'cod_municipio' => 153,
				'DC' => 5,
				'nombre' => 'Peligros',
			),
			58 => 
			array (
				'id' => 5559,
				'id_provincia' => 19,
				'cod_municipio' => 153,
				'DC' => 8,
				'nombre' => 'Iniéstola',
			),
			59 => 
			array (
				'id' => 5560,
				'id_provincia' => 24,
				'cod_municipio' => 153,
				'DC' => 5,
				'nombre' => 'Santa Cristina de Valmadrigal',
			),
			60 => 
			array (
				'id' => 5561,
				'id_provincia' => 25,
				'cod_municipio' => 153,
				'DC' => 8,
				'nombre' => 'Omellons, Els',
			),
			61 => 
			array (
				'id' => 5562,
				'id_provincia' => 26,
				'cod_municipio' => 153,
				'DC' => 1,
				'nombre' => 'Torre en Cameros',
			),
			62 => 
			array (
				'id' => 5563,
				'id_provincia' => 28,
				'cod_municipio' => 153,
				'DC' => 3,
				'nombre' => 'Torremocha de Jarama',
			),
			63 => 
			array (
				'id' => 5564,
				'id_provincia' => 31,
				'cod_municipio' => 153,
				'DC' => 7,
				'nombre' => 'Lesaka',
			),
			64 => 
			array (
				'id' => 5565,
				'id_provincia' => 42,
				'cod_municipio' => 153,
				'DC' => 0,
				'nombre' => 'Rello',
			),
			65 => 
			array (
				'id' => 5566,
				'id_provincia' => 43,
				'cod_municipio' => 153,
				'DC' => 6,
				'nombre' => 'Torredembarra',
			),
			66 => 
			array (
				'id' => 5567,
				'id_provincia' => 44,
				'cod_municipio' => 153,
				'DC' => 1,
				'nombre' => 'Monreal del Campo',
			),
			67 => 
			array (
				'id' => 5568,
				'id_provincia' => 45,
				'cod_municipio' => 153,
				'DC' => 4,
				'nombre' => 'San Pablo de los Montes',
			),
			68 => 
			array (
				'id' => 5569,
				'id_provincia' => 46,
				'cod_municipio' => 153,
				'DC' => 7,
				'nombre' => 'Llocnou de Sant Jeroni',
			),
			69 => 
			array (
				'id' => 5570,
				'id_provincia' => 47,
				'cod_municipio' => 153,
				'DC' => 3,
				'nombre' => 'Santervás de Campos',
			),
			70 => 
			array (
				'id' => 5571,
				'id_provincia' => 49,
				'cod_municipio' => 153,
				'DC' => 2,
				'nombre' => 'Perilla de Castro',
			),
			71 => 
			array (
				'id' => 5572,
				'id_provincia' => 50,
				'cod_municipio' => 153,
				'DC' => 5,
				'nombre' => 'Magallón',
			),
			72 => 
			array (
				'id' => 5573,
				'id_provincia' => 5,
				'cod_municipio' => 154,
				'DC' => 7,
				'nombre' => 'Navadijos',
			),
			73 => 
			array (
				'id' => 5574,
				'id_provincia' => 6,
				'cod_municipio' => 154,
				'DC' => 0,
				'nombre' => 'Villanueva del Fresno',
			),
			74 => 
			array (
				'id' => 5575,
				'id_provincia' => 8,
				'cod_municipio' => 154,
				'DC' => 2,
				'nombre' => 'Pacs del Penedès',
			),
			75 => 
			array (
				'id' => 5576,
				'id_provincia' => 9,
				'cod_municipio' => 154,
				'DC' => 5,
				'nombre' => 'Hacinas',
			),
			76 => 
			array (
				'id' => 5577,
				'id_provincia' => 10,
				'cod_municipio' => 154,
				'DC' => 9,
				'nombre' => 'Rebollar',
			),
			77 => 
			array (
				'id' => 5578,
				'id_provincia' => 16,
				'cod_municipio' => 154,
				'DC' => 8,
				'nombre' => 'Pedroñeras, Las',
			),
			78 => 
			array (
				'id' => 5579,
				'id_provincia' => 17,
				'cod_municipio' => 154,
				'DC' => 4,
				'nombre' => 'Sales de Llierca',
			),
			79 => 
			array (
				'id' => 5580,
				'id_provincia' => 18,
				'cod_municipio' => 154,
				'DC' => 0,
				'nombre' => 'Peza, La',
			),
			80 => 
			array (
				'id' => 5581,
				'id_provincia' => 19,
				'cod_municipio' => 154,
				'DC' => 3,
				'nombre' => 'Inviernas, Las',
			),
			81 => 
			array (
				'id' => 5582,
				'id_provincia' => 24,
				'cod_municipio' => 154,
				'DC' => 0,
				'nombre' => 'Santa Elena de Jamuz',
			),
			82 => 
			array (
				'id' => 5583,
				'id_provincia' => 25,
				'cod_municipio' => 154,
				'DC' => 3,
				'nombre' => 'Omells de na Gaia, Els',
			),
			83 => 
			array (
				'id' => 5584,
				'id_provincia' => 26,
				'cod_municipio' => 154,
				'DC' => 6,
				'nombre' => 'Torremontalbo',
			),
			84 => 
			array (
				'id' => 5585,
				'id_provincia' => 28,
				'cod_municipio' => 154,
				'DC' => 8,
				'nombre' => 'Torres de la Alameda',
			),
			85 => 
			array (
				'id' => 5586,
				'id_provincia' => 31,
				'cod_municipio' => 154,
				'DC' => 2,
				'nombre' => 'Lezáun',
			),
			86 => 
			array (
				'id' => 5587,
				'id_provincia' => 34,
				'cod_municipio' => 154,
				'DC' => 8,
				'nombre' => 'Revilla de Collazos',
			),
			87 => 
			array (
				'id' => 5588,
				'id_provincia' => 37,
				'cod_municipio' => 154,
				'DC' => 0,
				'nombre' => 'Guadramiro',
			),
			88 => 
			array (
				'id' => 5589,
				'id_provincia' => 40,
				'cod_municipio' => 154,
				'DC' => 3,
				'nombre' => 'Pajarejos',
			),
			89 => 
			array (
				'id' => 5590,
				'id_provincia' => 42,
				'cod_municipio' => 154,
				'DC' => 5,
				'nombre' => 'Renieblas',
			),
			90 => 
			array (
				'id' => 5591,
				'id_provincia' => 43,
				'cod_municipio' => 154,
				'DC' => 1,
				'nombre' => 'Torroja del Priorat',
			),
			91 => 
			array (
				'id' => 5592,
				'id_provincia' => 44,
				'cod_municipio' => 154,
				'DC' => 6,
				'nombre' => 'Monroyo',
			),
			92 => 
			array (
				'id' => 5593,
				'id_provincia' => 45,
				'cod_municipio' => 154,
				'DC' => 9,
				'nombre' => 'San Román de los Montes',
			),
			93 => 
			array (
				'id' => 5594,
				'id_provincia' => 46,
				'cod_municipio' => 154,
				'DC' => 2,
				'nombre' => 'Llanera de Ranes',
			),
			94 => 
			array (
				'id' => 5595,
				'id_provincia' => 47,
				'cod_municipio' => 154,
				'DC' => 8,
				'nombre' => 'Santibáñez de Valcorba',
			),
			95 => 
			array (
				'id' => 5596,
				'id_provincia' => 49,
				'cod_municipio' => 154,
				'DC' => 7,
				'nombre' => 'Pías',
			),
			96 => 
			array (
				'id' => 5597,
				'id_provincia' => 50,
				'cod_municipio' => 154,
				'DC' => 0,
				'nombre' => 'Mainar',
			),
			97 => 
			array (
				'id' => 5598,
				'id_provincia' => 5,
				'cod_municipio' => 155,
				'DC' => 0,
				'nombre' => 'Navaescurial',
			),
			98 => 
			array (
				'id' => 5599,
				'id_provincia' => 6,
				'cod_municipio' => 155,
				'DC' => 3,
				'nombre' => 'Villar del Rey',
			),
			99 => 
			array (
				'id' => 5600,
				'id_provincia' => 8,
				'cod_municipio' => 155,
				'DC' => 5,
				'nombre' => 'Palafolls',
			),
			100 => 
			array (
				'id' => 5601,
				'id_provincia' => 9,
				'cod_municipio' => 155,
				'DC' => 8,
				'nombre' => 'Haza',
			),
			101 => 
			array (
				'id' => 5602,
				'id_provincia' => 10,
				'cod_municipio' => 155,
				'DC' => 2,
				'nombre' => 'Riolobos',
			),
			102 => 
			array (
				'id' => 5603,
				'id_provincia' => 16,
				'cod_municipio' => 155,
				'DC' => 1,
				'nombre' => 'Peral, El',
			),
			103 => 
			array (
				'id' => 5604,
				'id_provincia' => 17,
				'cod_municipio' => 155,
				'DC' => 7,
				'nombre' => 'Salt',
			),
			104 => 
			array (
				'id' => 5605,
				'id_provincia' => 19,
				'cod_municipio' => 155,
				'DC' => 6,
				'nombre' => 'Irueste',
			),
			105 => 
			array (
				'id' => 5606,
				'id_provincia' => 22,
				'cod_municipio' => 155,
				'DC' => 2,
				'nombre' => 'Monesma y Cajigar',
			),
			106 => 
			array (
				'id' => 5607,
				'id_provincia' => 24,
				'cod_municipio' => 155,
				'DC' => 3,
				'nombre' => 'Santa María de la Isla',
			),
			107 => 
			array (
				'id' => 5608,
				'id_provincia' => 25,
				'cod_municipio' => 155,
				'DC' => 6,
				'nombre' => 'Organyà',
			),
			108 => 
			array (
				'id' => 5609,
				'id_provincia' => 26,
				'cod_municipio' => 155,
				'DC' => 9,
				'nombre' => 'Treviana',
			),
			109 => 
			array (
				'id' => 5610,
				'id_provincia' => 28,
				'cod_municipio' => 155,
				'DC' => 1,
				'nombre' => 'Valdaracete',
			),
			110 => 
			array (
				'id' => 5611,
				'id_provincia' => 31,
				'cod_municipio' => 155,
				'DC' => 5,
				'nombre' => 'Liédena',
			),
			111 => 
			array (
				'id' => 5612,
				'id_provincia' => 34,
				'cod_municipio' => 155,
				'DC' => 1,
				'nombre' => 'Ribas de Campos',
			),
			112 => 
			array (
				'id' => 5613,
				'id_provincia' => 37,
				'cod_municipio' => 155,
				'DC' => 3,
				'nombre' => 'Guijo de Ávila',
			),
			113 => 
			array (
				'id' => 5614,
				'id_provincia' => 40,
				'cod_municipio' => 155,
				'DC' => 6,
				'nombre' => 'Palazuelos de Eresma',
			),
			114 => 
			array (
				'id' => 5615,
				'id_provincia' => 42,
				'cod_municipio' => 155,
				'DC' => 8,
				'nombre' => 'Retortillo de Soria',
			),
			115 => 
			array (
				'id' => 5616,
				'id_provincia' => 43,
				'cod_municipio' => 155,
				'DC' => 4,
				'nombre' => 'Tortosa',
			),
			116 => 
			array (
				'id' => 5617,
				'id_provincia' => 44,
				'cod_municipio' => 155,
				'DC' => 9,
				'nombre' => 'Montalbán',
			),
			117 => 
			array (
				'id' => 5618,
				'id_provincia' => 45,
				'cod_municipio' => 155,
				'DC' => 2,
				'nombre' => 'Santa Ana de Pusa',
			),
			118 => 
			array (
				'id' => 5619,
				'id_provincia' => 46,
				'cod_municipio' => 155,
				'DC' => 5,
				'nombre' => 'Llaurí',
			),
			119 => 
			array (
				'id' => 5620,
				'id_provincia' => 47,
				'cod_municipio' => 155,
				'DC' => 1,
				'nombre' => 'Santovenia de Pisuerga',
			),
			120 => 
			array (
				'id' => 5621,
				'id_provincia' => 49,
				'cod_municipio' => 155,
				'DC' => 0,
				'nombre' => 'Piedrahita de Castro',
			),
			121 => 
			array (
				'id' => 5622,
				'id_provincia' => 50,
				'cod_municipio' => 155,
				'DC' => 3,
				'nombre' => 'Malanquilla',
			),
			122 => 
			array (
				'id' => 5623,
				'id_provincia' => 5,
				'cod_municipio' => 156,
				'DC' => 3,
				'nombre' => 'Navahondilla',
			),
			123 => 
			array (
				'id' => 5624,
				'id_provincia' => 6,
				'cod_municipio' => 156,
				'DC' => 6,
				'nombre' => 'Villar de Rena',
			),
			124 => 
			array (
				'id' => 5625,
				'id_provincia' => 8,
				'cod_municipio' => 156,
				'DC' => 8,
				'nombre' => 'Palau-solità i Plegamans',
			),
			125 => 
			array (
				'id' => 5626,
				'id_provincia' => 10,
				'cod_municipio' => 156,
				'DC' => 5,
				'nombre' => 'Robledillo de Gata',
			),
			126 => 
			array (
				'id' => 5627,
				'id_provincia' => 16,
				'cod_municipio' => 156,
				'DC' => 4,
				'nombre' => 'Peraleja, La',
			),
			127 => 
			array (
				'id' => 5628,
				'id_provincia' => 19,
				'cod_municipio' => 156,
				'DC' => 9,
				'nombre' => 'Jadraque',
			),
			128 => 
			array (
				'id' => 5629,
				'id_provincia' => 22,
				'cod_municipio' => 156,
				'DC' => 5,
				'nombre' => 'Monflorite-Lascasas',
			),
			129 => 
			array (
				'id' => 5630,
				'id_provincia' => 24,
				'cod_municipio' => 156,
				'DC' => 6,
				'nombre' => 'Santa María del Monte de Cea',
			),
			130 => 
			array (
				'id' => 5631,
				'id_provincia' => 25,
				'cod_municipio' => 156,
				'DC' => 9,
				'nombre' => 'Os de Balaguer',
			),
			131 => 
			array (
				'id' => 5632,
				'id_provincia' => 28,
				'cod_municipio' => 156,
				'DC' => 4,
				'nombre' => 'Valdeavero',
			),
			132 => 
			array (
				'id' => 5633,
				'id_provincia' => 31,
				'cod_municipio' => 156,
				'DC' => 8,
				'nombre' => 'Lizoáin-Arriasgoiti',
			),
			133 => 
			array (
				'id' => 5634,
				'id_provincia' => 34,
				'cod_municipio' => 156,
				'DC' => 4,
				'nombre' => 'Riberos de la Cueza',
			),
			134 => 
			array (
				'id' => 5635,
				'id_provincia' => 37,
				'cod_municipio' => 156,
				'DC' => 6,
				'nombre' => 'Guijuelo',
			),
			135 => 
			array (
				'id' => 5636,
				'id_provincia' => 40,
				'cod_municipio' => 156,
				'DC' => 9,
				'nombre' => 'Pedraza',
			),
			136 => 
			array (
				'id' => 5637,
				'id_provincia' => 42,
				'cod_municipio' => 156,
				'DC' => 1,
				'nombre' => 'Reznos',
			),
			137 => 
			array (
				'id' => 5638,
				'id_provincia' => 43,
				'cod_municipio' => 156,
				'DC' => 7,
				'nombre' => 'Ulldecona',
			),
			138 => 
			array (
				'id' => 5639,
				'id_provincia' => 44,
				'cod_municipio' => 156,
				'DC' => 2,
				'nombre' => 'Monteagudo del Castillo',
			),
			139 => 
			array (
				'id' => 5640,
				'id_provincia' => 45,
				'cod_municipio' => 156,
				'DC' => 5,
				'nombre' => 'Santa Cruz de la Zarza',
			),
			140 => 
			array (
				'id' => 5641,
				'id_provincia' => 46,
				'cod_municipio' => 156,
				'DC' => 8,
				'nombre' => 'Llombai',
			),
			141 => 
			array (
				'id' => 5642,
				'id_provincia' => 47,
				'cod_municipio' => 156,
				'DC' => 4,
				'nombre' => 'San Vicente del Palacio',
			),
			142 => 
			array (
				'id' => 5643,
				'id_provincia' => 49,
				'cod_municipio' => 156,
				'DC' => 3,
				'nombre' => 'Pinilla de Toro',
			),
			143 => 
			array (
				'id' => 5644,
				'id_provincia' => 50,
				'cod_municipio' => 156,
				'DC' => 6,
				'nombre' => 'Maleján',
			),
			144 => 
			array (
				'id' => 5645,
				'id_provincia' => 5,
				'cod_municipio' => 157,
				'DC' => 9,
				'nombre' => 'Navalacruz',
			),
			145 => 
			array (
				'id' => 5646,
				'id_provincia' => 6,
				'cod_municipio' => 157,
				'DC' => 2,
				'nombre' => 'Villarta de los Montes',
			),
			146 => 
			array (
				'id' => 5647,
				'id_provincia' => 8,
				'cod_municipio' => 157,
				'DC' => 4,
				'nombre' => 'Pallejà',
			),
			147 => 
			array (
				'id' => 5648,
				'id_provincia' => 10,
				'cod_municipio' => 157,
				'DC' => 1,
				'nombre' => 'Robledillo de la Vera',
			),
			148 => 
			array (
				'id' => 5649,
				'id_provincia' => 16,
				'cod_municipio' => 157,
				'DC' => 0,
				'nombre' => 'Pesquera, La',
			),
			149 => 
			array (
				'id' => 5650,
				'id_provincia' => 17,
				'cod_municipio' => 157,
				'DC' => 6,
				'nombre' => 'Sant Andreu Salou',
			),
			150 => 
			array (
				'id' => 5651,
				'id_provincia' => 18,
				'cod_municipio' => 157,
				'DC' => 2,
				'nombre' => 'Pinos Genil',
			),
			151 => 
			array (
				'id' => 5652,
				'id_provincia' => 19,
				'cod_municipio' => 157,
				'DC' => 5,
				'nombre' => 'Jirueque',
			),
			152 => 
			array (
				'id' => 5653,
				'id_provincia' => 22,
				'cod_municipio' => 157,
				'DC' => 1,
				'nombre' => 'Montanuy',
			),
			153 => 
			array (
				'id' => 5654,
				'id_provincia' => 24,
				'cod_municipio' => 157,
				'DC' => 2,
				'nombre' => 'Santa María del Páramo',
			),
			154 => 
			array (
				'id' => 5655,
				'id_provincia' => 25,
				'cod_municipio' => 157,
				'DC' => 5,
				'nombre' => 'Ossó de Sió',
			),
			155 => 
			array (
				'id' => 5656,
				'id_provincia' => 26,
				'cod_municipio' => 157,
				'DC' => 8,
				'nombre' => 'Tricio',
			),
			156 => 
			array (
				'id' => 5657,
				'id_provincia' => 28,
				'cod_municipio' => 157,
				'DC' => 0,
				'nombre' => 'Valdelaguna',
			),
			157 => 
			array (
				'id' => 5658,
				'id_provincia' => 31,
				'cod_municipio' => 157,
				'DC' => 4,
				'nombre' => 'Lodosa',
			),
			158 => 
			array (
				'id' => 5659,
				'id_provincia' => 34,
				'cod_municipio' => 157,
				'DC' => 0,
				'nombre' => 'Saldaña',
			),
			159 => 
			array (
				'id' => 5660,
				'id_provincia' => 37,
				'cod_municipio' => 157,
				'DC' => 2,
				'nombre' => 'Herguijuela de Ciudad Rodrigo',
			),
			160 => 
			array (
				'id' => 5661,
				'id_provincia' => 40,
				'cod_municipio' => 157,
				'DC' => 5,
				'nombre' => 'Pelayos del Arroyo',
			),
			161 => 
			array (
				'id' => 5662,
				'id_provincia' => 42,
				'cod_municipio' => 157,
				'DC' => 7,
				'nombre' => 'Riba de Escalote, La',
			),
			162 => 
			array (
				'id' => 5663,
				'id_provincia' => 43,
				'cod_municipio' => 157,
				'DC' => 3,
				'nombre' => 'Ulldemolins',
			),
			163 => 
			array (
				'id' => 5664,
				'id_provincia' => 44,
				'cod_municipio' => 157,
				'DC' => 8,
				'nombre' => 'Monterde de Albarracín',
			),
			164 => 
			array (
				'id' => 5665,
				'id_provincia' => 45,
				'cod_municipio' => 157,
				'DC' => 1,
				'nombre' => 'Santa Cruz del Retamar',
			),
			165 => 
			array (
				'id' => 5666,
				'id_provincia' => 46,
				'cod_municipio' => 157,
				'DC' => 4,
				'nombre' => 'Llosa de Ranes, la',
			),
			166 => 
			array (
				'id' => 5667,
				'id_provincia' => 47,
				'cod_municipio' => 157,
				'DC' => 0,
				'nombre' => 'Sardón de Duero',
			),
			167 => 
			array (
				'id' => 5668,
				'id_provincia' => 49,
				'cod_municipio' => 157,
				'DC' => 9,
				'nombre' => 'Pino del Oro',
			),
			168 => 
			array (
				'id' => 5669,
				'id_provincia' => 50,
				'cod_municipio' => 157,
				'DC' => 2,
				'nombre' => 'Malón',
			),
			169 => 
			array (
				'id' => 5670,
				'id_provincia' => 5,
				'cod_municipio' => 158,
				'DC' => 5,
				'nombre' => 'Navalmoral',
			),
			170 => 
			array (
				'id' => 5671,
				'id_provincia' => 6,
				'cod_municipio' => 158,
				'DC' => 8,
				'nombre' => 'Zafra',
			),
			171 => 
			array (
				'id' => 5672,
				'id_provincia' => 8,
				'cod_municipio' => 158,
				'DC' => 0,
				'nombre' => 'Papiol, El',
			),
			172 => 
			array (
				'id' => 5673,
				'id_provincia' => 10,
				'cod_municipio' => 158,
				'DC' => 7,
				'nombre' => 'Robledillo de Trujillo',
			),
			173 => 
			array (
				'id' => 5674,
				'id_provincia' => 16,
				'cod_municipio' => 158,
				'DC' => 6,
				'nombre' => 'Picazo, El',
			),
			174 => 
			array (
				'id' => 5675,
				'id_provincia' => 17,
				'cod_municipio' => 158,
				'DC' => 2,
				'nombre' => 'Sant Climent Sescebes',
			),
			175 => 
			array (
				'id' => 5676,
				'id_provincia' => 18,
				'cod_municipio' => 158,
				'DC' => 8,
				'nombre' => 'Pinos Puente',
			),
			176 => 
			array (
				'id' => 5677,
				'id_provincia' => 22,
				'cod_municipio' => 158,
				'DC' => 7,
				'nombre' => 'Monzón',
			),
			177 => 
			array (
				'id' => 5678,
				'id_provincia' => 24,
				'cod_municipio' => 158,
				'DC' => 8,
				'nombre' => 'Santa María de Ordás',
			),
			178 => 
			array (
				'id' => 5679,
				'id_provincia' => 25,
				'cod_municipio' => 158,
				'DC' => 1,
				'nombre' => 'Palau d\'Anglesola, El',
			),
			179 => 
			array (
				'id' => 5680,
				'id_provincia' => 26,
				'cod_municipio' => 158,
				'DC' => 4,
				'nombre' => 'Tudelilla',
			),
			180 => 
			array (
				'id' => 5681,
				'id_provincia' => 28,
				'cod_municipio' => 158,
				'DC' => 6,
				'nombre' => 'Valdemanco',
			),
			181 => 
			array (
				'id' => 5682,
				'id_provincia' => 31,
				'cod_municipio' => 158,
				'DC' => 0,
				'nombre' => 'Lónguida/Longida',
			),
			182 => 
			array (
				'id' => 5683,
				'id_provincia' => 34,
				'cod_municipio' => 158,
				'DC' => 6,
				'nombre' => 'Salinas de Pisuerga',
			),
			183 => 
			array (
				'id' => 5684,
				'id_provincia' => 37,
				'cod_municipio' => 158,
				'DC' => 8,
				'nombre' => 'Herguijuela de la Sierra',
			),
			184 => 
			array (
				'id' => 5685,
				'id_provincia' => 40,
				'cod_municipio' => 158,
				'DC' => 1,
				'nombre' => 'Perosillo',
			),
			185 => 
			array (
				'id' => 5686,
				'id_provincia' => 42,
				'cod_municipio' => 158,
				'DC' => 3,
				'nombre' => 'Rioseco de Soria',
			),
			186 => 
			array (
				'id' => 5687,
				'id_provincia' => 43,
				'cod_municipio' => 158,
				'DC' => 9,
				'nombre' => 'Vallclara',
			),
			187 => 
			array (
				'id' => 5688,
				'id_provincia' => 44,
				'cod_municipio' => 158,
				'DC' => 4,
				'nombre' => 'Mora de Rubielos',
			),
			188 => 
			array (
				'id' => 5689,
				'id_provincia' => 45,
				'cod_municipio' => 158,
				'DC' => 7,
				'nombre' => 'Santa Olalla',
			),
			189 => 
			array (
				'id' => 5690,
				'id_provincia' => 46,
				'cod_municipio' => 158,
				'DC' => 0,
				'nombre' => 'Macastre',
			),
			190 => 
			array (
				'id' => 5691,
				'id_provincia' => 47,
				'cod_municipio' => 158,
				'DC' => 6,
				'nombre' => 'Seca, La',
			),
			191 => 
			array (
				'id' => 5692,
				'id_provincia' => 49,
				'cod_municipio' => 158,
				'DC' => 5,
				'nombre' => 'Piñero, El',
			),
			192 => 
			array (
				'id' => 5693,
				'id_provincia' => 5,
				'cod_municipio' => 159,
				'DC' => 8,
				'nombre' => 'Navalonguilla',
			),
			193 => 
			array (
				'id' => 5694,
				'id_provincia' => 6,
				'cod_municipio' => 159,
				'DC' => 1,
				'nombre' => 'Zahínos',
			),
			194 => 
			array (
				'id' => 5695,
				'id_provincia' => 8,
				'cod_municipio' => 159,
				'DC' => 3,
				'nombre' => 'Parets del Vallès',
			),
			195 => 
			array (
				'id' => 5696,
				'id_provincia' => 9,
				'cod_municipio' => 159,
				'DC' => 6,
				'nombre' => 'Hontanas',
			),
			196 => 
			array (
				'id' => 5697,
				'id_provincia' => 10,
				'cod_municipio' => 159,
				'DC' => 0,
				'nombre' => 'Robledollano',
			),
			197 => 
			array (
				'id' => 5698,
				'id_provincia' => 16,
				'cod_municipio' => 159,
				'DC' => 9,
				'nombre' => 'Pinarejo',
			),
			198 => 
			array (
				'id' => 5699,
				'id_provincia' => 17,
				'cod_municipio' => 159,
				'DC' => 5,
				'nombre' => 'Sant Feliu de Buixalleu',
			),
			199 => 
			array (
				'id' => 5700,
				'id_provincia' => 18,
				'cod_municipio' => 159,
				'DC' => 1,
				'nombre' => 'Píñar',
			),
			200 => 
			array (
				'id' => 5701,
				'id_provincia' => 19,
				'cod_municipio' => 159,
				'DC' => 4,
				'nombre' => 'Ledanca',
			),
			201 => 
			array (
				'id' => 5702,
				'id_provincia' => 24,
				'cod_municipio' => 159,
				'DC' => 1,
				'nombre' => 'Santa Marina del Rey',
			),
			202 => 
			array (
				'id' => 5703,
				'id_provincia' => 28,
				'cod_municipio' => 159,
				'DC' => 9,
				'nombre' => 'Valdemaqueda',
			),
			203 => 
			array (
				'id' => 5704,
				'id_provincia' => 31,
				'cod_municipio' => 159,
				'DC' => 3,
				'nombre' => 'Lumbier',
			),
			204 => 
			array (
				'id' => 5705,
				'id_provincia' => 34,
				'cod_municipio' => 159,
				'DC' => 9,
				'nombre' => 'San Cebrián de Campos',
			),
			205 => 
			array (
				'id' => 5706,
				'id_provincia' => 37,
				'cod_municipio' => 159,
				'DC' => 1,
				'nombre' => 'Herguijuela del Campo',
			),
			206 => 
			array (
				'id' => 5707,
				'id_provincia' => 40,
				'cod_municipio' => 159,
				'DC' => 4,
				'nombre' => 'Pinarejos',
			),
			207 => 
			array (
				'id' => 5708,
				'id_provincia' => 42,
				'cod_municipio' => 159,
				'DC' => 6,
				'nombre' => 'Rollamienta',
			),
			208 => 
			array (
				'id' => 5709,
				'id_provincia' => 43,
				'cod_municipio' => 159,
				'DC' => 2,
				'nombre' => 'Vallfogona de Riucorb',
			),
			209 => 
			array (
				'id' => 5710,
				'id_provincia' => 44,
				'cod_municipio' => 159,
				'DC' => 7,
				'nombre' => 'Moscardón',
			),
			210 => 
			array (
				'id' => 5711,
				'id_provincia' => 45,
				'cod_municipio' => 159,
				'DC' => 0,
				'nombre' => 'Sartajada',
			),
			211 => 
			array (
				'id' => 5712,
				'id_provincia' => 46,
				'cod_municipio' => 159,
				'DC' => 3,
				'nombre' => 'Manises',
			),
			212 => 
			array (
				'id' => 5713,
				'id_provincia' => 47,
				'cod_municipio' => 159,
				'DC' => 9,
				'nombre' => 'Serrada',
			),
			213 => 
			array (
				'id' => 5714,
				'id_provincia' => 49,
				'cod_municipio' => 159,
				'DC' => 8,
				'nombre' => 'Pobladura del Valle',
			),
			214 => 
			array (
				'id' => 5715,
				'id_provincia' => 50,
				'cod_municipio' => 159,
				'DC' => 1,
				'nombre' => 'Maluenda',
			),
			215 => 
			array (
				'id' => 5716,
				'id_provincia' => 5,
				'cod_municipio' => 160,
				'DC' => 2,
				'nombre' => 'Navalosa',
			),
			216 => 
			array (
				'id' => 5717,
				'id_provincia' => 6,
				'cod_municipio' => 160,
				'DC' => 5,
				'nombre' => 'Zalamea de la Serena',
			),
			217 => 
			array (
				'id' => 5718,
				'id_provincia' => 8,
				'cod_municipio' => 160,
				'DC' => 7,
				'nombre' => 'Perafita',
			),
			218 => 
			array (
				'id' => 5719,
				'id_provincia' => 9,
				'cod_municipio' => 160,
				'DC' => 0,
				'nombre' => 'Hontangas',
			),
			219 => 
			array (
				'id' => 5720,
				'id_provincia' => 10,
				'cod_municipio' => 160,
				'DC' => 4,
				'nombre' => 'Romangordo',
			),
			220 => 
			array (
				'id' => 5721,
				'id_provincia' => 16,
				'cod_municipio' => 160,
				'DC' => 3,
				'nombre' => 'Pineda de Gigüela',
			),
			221 => 
			array (
				'id' => 5722,
				'id_provincia' => 17,
				'cod_municipio' => 160,
				'DC' => 9,
				'nombre' => 'Sant Feliu de Guíxols',
			),
			222 => 
			array (
				'id' => 5723,
				'id_provincia' => 19,
				'cod_municipio' => 160,
				'DC' => 8,
				'nombre' => 'Loranca de Tajuña',
			),
			223 => 
			array (
				'id' => 5724,
				'id_provincia' => 22,
				'cod_municipio' => 160,
				'DC' => 4,
				'nombre' => 'Naval',
			),
			224 => 
			array (
				'id' => 5725,
				'id_provincia' => 24,
				'cod_municipio' => 160,
				'DC' => 5,
				'nombre' => 'Santas Martas',
			),
			225 => 
			array (
				'id' => 5726,
				'id_provincia' => 26,
				'cod_municipio' => 160,
				'DC' => 1,
				'nombre' => 'Uruñuela',
			),
			226 => 
			array (
				'id' => 5727,
				'id_provincia' => 28,
				'cod_municipio' => 160,
				'DC' => 3,
				'nombre' => 'Valdemorillo',
			),
			227 => 
			array (
				'id' => 5728,
				'id_provincia' => 31,
				'cod_municipio' => 160,
				'DC' => 7,
				'nombre' => 'Luquin',
			),
			228 => 
			array (
				'id' => 5729,
				'id_provincia' => 34,
				'cod_municipio' => 160,
				'DC' => 3,
				'nombre' => 'San Cebrián de Mudá',
			),
			229 => 
			array (
				'id' => 5730,
				'id_provincia' => 37,
				'cod_municipio' => 160,
				'DC' => 5,
				'nombre' => 'Hinojosa de Duero',
			),
			230 => 
			array (
				'id' => 5731,
				'id_provincia' => 40,
				'cod_municipio' => 160,
				'DC' => 8,
				'nombre' => 'Pinarnegrillo',
			),
			231 => 
			array (
				'id' => 5732,
				'id_provincia' => 42,
				'cod_municipio' => 160,
				'DC' => 0,
				'nombre' => 'Royo, El',
			),
			232 => 
			array (
				'id' => 5733,
				'id_provincia' => 43,
				'cod_municipio' => 160,
				'DC' => 6,
				'nombre' => 'Vallmoll',
			),
			233 => 
			array (
				'id' => 5734,
				'id_provincia' => 44,
				'cod_municipio' => 160,
				'DC' => 1,
				'nombre' => 'Mosqueruela',
			),
			234 => 
			array (
				'id' => 5735,
				'id_provincia' => 45,
				'cod_municipio' => 160,
				'DC' => 4,
				'nombre' => 'Segurilla',
			),
			235 => 
			array (
				'id' => 5736,
				'id_provincia' => 46,
				'cod_municipio' => 160,
				'DC' => 7,
				'nombre' => 'Manuel',
			),
			236 => 
			array (
				'id' => 5737,
				'id_provincia' => 47,
				'cod_municipio' => 160,
				'DC' => 3,
				'nombre' => 'Siete Iglesias de Trabancos',
			),
			237 => 
			array (
				'id' => 5738,
				'id_provincia' => 49,
				'cod_municipio' => 160,
				'DC' => 2,
				'nombre' => 'Pobladura de Valderaduey',
			),
			238 => 
			array (
				'id' => 5739,
				'id_provincia' => 50,
				'cod_municipio' => 160,
				'DC' => 5,
				'nombre' => 'Mallén',
			),
			239 => 
			array (
				'id' => 5740,
				'id_provincia' => 5,
				'cod_municipio' => 161,
				'DC' => 9,
				'nombre' => 'Navalperal de Pinares',
			),
			240 => 
			array (
				'id' => 5741,
				'id_provincia' => 6,
				'cod_municipio' => 161,
				'DC' => 2,
				'nombre' => 'Zarza-Capilla',
			),
			241 => 
			array (
				'id' => 5742,
				'id_provincia' => 8,
				'cod_municipio' => 161,
				'DC' => 4,
				'nombre' => 'Piera',
			),
			242 => 
			array (
				'id' => 5743,
				'id_provincia' => 10,
				'cod_municipio' => 161,
				'DC' => 1,
				'nombre' => 'Ruanes',
			),
			243 => 
			array (
				'id' => 5744,
				'id_provincia' => 16,
				'cod_municipio' => 161,
				'DC' => 0,
				'nombre' => 'Piqueras del Castillo',
			),
			244 => 
			array (
				'id' => 5745,
				'id_provincia' => 17,
				'cod_municipio' => 161,
				'DC' => 6,
				'nombre' => 'Sant Feliu de Pallerols',
			),
			245 => 
			array (
				'id' => 5746,
				'id_provincia' => 18,
				'cod_municipio' => 161,
				'DC' => 2,
				'nombre' => 'Polícar',
			),
			246 => 
			array (
				'id' => 5747,
				'id_provincia' => 19,
				'cod_municipio' => 161,
				'DC' => 5,
				'nombre' => 'Lupiana',
			),
			247 => 
			array (
				'id' => 5748,
				'id_provincia' => 24,
				'cod_municipio' => 161,
				'DC' => 2,
				'nombre' => 'Santiago Millas',
			),
			248 => 
			array (
				'id' => 5749,
				'id_provincia' => 25,
				'cod_municipio' => 161,
				'DC' => 5,
				'nombre' => 'Conca de Dalt',
			),
			249 => 
			array (
				'id' => 5750,
				'id_provincia' => 26,
				'cod_municipio' => 161,
				'DC' => 8,
				'nombre' => 'Valdemadera',
			),
			250 => 
			array (
				'id' => 5751,
				'id_provincia' => 28,
				'cod_municipio' => 161,
				'DC' => 0,
				'nombre' => 'Valdemoro',
			),
			251 => 
			array (
				'id' => 5752,
				'id_provincia' => 31,
				'cod_municipio' => 161,
				'DC' => 4,
				'nombre' => 'Mañeru',
			),
			252 => 
			array (
				'id' => 5753,
				'id_provincia' => 34,
				'cod_municipio' => 161,
				'DC' => 0,
				'nombre' => 'San Cristóbal de Boedo',
			),
			253 => 
			array (
				'id' => 5754,
				'id_provincia' => 37,
				'cod_municipio' => 161,
				'DC' => 2,
				'nombre' => 'Horcajo de Montemayor',
			),
			254 => 
			array (
				'id' => 5755,
				'id_provincia' => 40,
				'cod_municipio' => 161,
				'DC' => 5,
				'nombre' => 'Pradales',
			),
			255 => 
			array (
				'id' => 5756,
				'id_provincia' => 42,
				'cod_municipio' => 161,
				'DC' => 7,
				'nombre' => 'Salduero',
			),
			256 => 
			array (
				'id' => 5757,
				'id_provincia' => 43,
				'cod_municipio' => 161,
				'DC' => 3,
				'nombre' => 'Valls',
			),
			257 => 
			array (
				'id' => 5758,
				'id_provincia' => 44,
				'cod_municipio' => 161,
				'DC' => 8,
				'nombre' => 'Muniesa',
			),
			258 => 
			array (
				'id' => 5759,
				'id_provincia' => 45,
				'cod_municipio' => 161,
				'DC' => 1,
				'nombre' => 'Seseña',
			),
			259 => 
			array (
				'id' => 5760,
				'id_provincia' => 46,
				'cod_municipio' => 161,
				'DC' => 4,
				'nombre' => 'Marines',
			),
			260 => 
			array (
				'id' => 5761,
				'id_provincia' => 47,
				'cod_municipio' => 161,
				'DC' => 0,
				'nombre' => 'Simancas',
			),
			261 => 
			array (
				'id' => 5762,
				'id_provincia' => 50,
				'cod_municipio' => 161,
				'DC' => 2,
				'nombre' => 'Manchones',
			),
			262 => 
			array (
				'id' => 5763,
				'id_provincia' => 5,
				'cod_municipio' => 162,
				'DC' => 4,
				'nombre' => 'Navalperal de Tormes',
			),
			263 => 
			array (
				'id' => 5764,
				'id_provincia' => 6,
				'cod_municipio' => 162,
				'DC' => 7,
				'nombre' => 'Zarza, La',
			),
			264 => 
			array (
				'id' => 5765,
				'id_provincia' => 8,
				'cod_municipio' => 162,
				'DC' => 9,
				'nombre' => 'Hostalets de Pierola, Els',
			),
			265 => 
			array (
				'id' => 5766,
				'id_provincia' => 9,
				'cod_municipio' => 162,
				'DC' => 2,
				'nombre' => 'Hontoria de la Cantera',
			),
			266 => 
			array (
				'id' => 5767,
				'id_provincia' => 10,
				'cod_municipio' => 162,
				'DC' => 6,
				'nombre' => 'Salorino',
			),
			267 => 
			array (
				'id' => 5768,
				'id_provincia' => 16,
				'cod_municipio' => 162,
				'DC' => 5,
				'nombre' => 'Portalrubio de Guadamejud',
			),
			268 => 
			array (
				'id' => 5769,
				'id_provincia' => 17,
				'cod_municipio' => 162,
				'DC' => 1,
				'nombre' => 'Sant Ferriol',
			),
			269 => 
			array (
				'id' => 5770,
				'id_provincia' => 18,
				'cod_municipio' => 162,
				'DC' => 7,
				'nombre' => 'Polopos',
			),
			270 => 
			array (
				'id' => 5771,
				'id_provincia' => 19,
				'cod_municipio' => 162,
				'DC' => 0,
				'nombre' => 'Luzaga',
			),
			271 => 
			array (
				'id' => 5772,
				'id_provincia' => 22,
				'cod_municipio' => 162,
				'DC' => 6,
				'nombre' => 'Novales',
			),
			272 => 
			array (
				'id' => 5773,
				'id_provincia' => 24,
				'cod_municipio' => 162,
				'DC' => 7,
				'nombre' => 'Santovenia de la Valdoncina',
			),
			273 => 
			array (
				'id' => 5774,
				'id_provincia' => 26,
				'cod_municipio' => 162,
				'DC' => 3,
				'nombre' => 'Valgañón',
			),
			274 => 
			array (
				'id' => 5775,
				'id_provincia' => 28,
				'cod_municipio' => 162,
				'DC' => 5,
				'nombre' => 'Valdeolmos-Alalpardo',
			),
			275 => 
			array (
				'id' => 5776,
				'id_provincia' => 31,
				'cod_municipio' => 162,
				'DC' => 9,
				'nombre' => 'Marañón',
			),
			276 => 
			array (
				'id' => 5777,
				'id_provincia' => 37,
				'cod_municipio' => 162,
				'DC' => 7,
				'nombre' => 'Horcajo Medianero',
			),
			277 => 
			array (
				'id' => 5778,
				'id_provincia' => 40,
				'cod_municipio' => 162,
				'DC' => 0,
				'nombre' => 'Prádena',
			),
			278 => 
			array (
				'id' => 5779,
				'id_provincia' => 42,
				'cod_municipio' => 162,
				'DC' => 2,
				'nombre' => 'San Esteban de Gormaz',
			),
			279 => 
			array (
				'id' => 5780,
				'id_provincia' => 43,
				'cod_municipio' => 162,
				'DC' => 8,
				'nombre' => 'Vandellòs i l\'Hospitalet de l\'Infant',
			),
			280 => 
			array (
				'id' => 5781,
				'id_provincia' => 45,
				'cod_municipio' => 162,
				'DC' => 6,
				'nombre' => 'Sevilleja de la Jara',
			),
			281 => 
			array (
				'id' => 5782,
				'id_provincia' => 46,
				'cod_municipio' => 162,
				'DC' => 9,
				'nombre' => 'Massalavés',
			),
			282 => 
			array (
				'id' => 5783,
				'id_provincia' => 47,
				'cod_municipio' => 162,
				'DC' => 5,
				'nombre' => 'Tamariz de Campos',
			),
			283 => 
			array (
				'id' => 5784,
				'id_provincia' => 49,
				'cod_municipio' => 162,
				'DC' => 4,
				'nombre' => 'Porto',
			),
			284 => 
			array (
				'id' => 5785,
				'id_provincia' => 50,
				'cod_municipio' => 162,
				'DC' => 7,
				'nombre' => 'Mara',
			),
			285 => 
			array (
				'id' => 5786,
				'id_provincia' => 5,
				'cod_municipio' => 163,
				'DC' => 0,
				'nombre' => 'Navaluenga',
			),
			286 => 
			array (
				'id' => 5787,
				'id_provincia' => 8,
				'cod_municipio' => 163,
				'DC' => 5,
				'nombre' => 'Pineda de Mar',
			),
			287 => 
			array (
				'id' => 5788,
				'id_provincia' => 9,
				'cod_municipio' => 163,
				'DC' => 8,
				'nombre' => 'Hontoria del Pinar',
			),
			288 => 
			array (
				'id' => 5789,
				'id_provincia' => 10,
				'cod_municipio' => 163,
				'DC' => 2,
				'nombre' => 'Salvatierra de Santiago',
			),
			289 => 
			array (
				'id' => 5790,
				'id_provincia' => 16,
				'cod_municipio' => 163,
				'DC' => 1,
				'nombre' => 'Portilla',
			),
			290 => 
			array (
				'id' => 5791,
				'id_provincia' => 17,
				'cod_municipio' => 163,
				'DC' => 7,
				'nombre' => 'Sant Gregori',
			),
			291 => 
			array (
				'id' => 5792,
				'id_provincia' => 18,
				'cod_municipio' => 163,
				'DC' => 3,
				'nombre' => 'Pórtugos',
			),
			292 => 
			array (
				'id' => 5793,
				'id_provincia' => 19,
				'cod_municipio' => 163,
				'DC' => 6,
				'nombre' => 'Luzón',
			),
			293 => 
			array (
				'id' => 5794,
				'id_provincia' => 22,
				'cod_municipio' => 163,
				'DC' => 2,
				'nombre' => 'Nueno',
			),
			294 => 
			array (
				'id' => 5795,
				'id_provincia' => 24,
				'cod_municipio' => 163,
				'DC' => 3,
				'nombre' => 'Sariegos',
			),
			295 => 
			array (
				'id' => 5796,
				'id_provincia' => 25,
				'cod_municipio' => 163,
				'DC' => 6,
				'nombre' => 'Coma i la Pedra, La',
			),
			296 => 
			array (
				'id' => 5797,
				'id_provincia' => 26,
				'cod_municipio' => 163,
				'DC' => 9,
				'nombre' => 'Ventosa',
			),
			297 => 
			array (
				'id' => 5798,
				'id_provincia' => 28,
				'cod_municipio' => 163,
				'DC' => 1,
				'nombre' => 'Valdepiélagos',
			),
			298 => 
			array (
				'id' => 5799,
				'id_provincia' => 31,
				'cod_municipio' => 163,
				'DC' => 5,
				'nombre' => 'Marcilla',
			),
			299 => 
			array (
				'id' => 5800,
				'id_provincia' => 34,
				'cod_municipio' => 163,
				'DC' => 1,
				'nombre' => 'San Mamés de Campos',
			),
			300 => 
			array (
				'id' => 5801,
				'id_provincia' => 37,
				'cod_municipio' => 163,
				'DC' => 3,
				'nombre' => 'Hoya, La',
			),
			301 => 
			array (
				'id' => 5802,
				'id_provincia' => 40,
				'cod_municipio' => 163,
				'DC' => 6,
				'nombre' => 'Puebla de Pedraza',
			),
			302 => 
			array (
				'id' => 5803,
				'id_provincia' => 42,
				'cod_municipio' => 163,
				'DC' => 8,
				'nombre' => 'San Felices',
			),
			303 => 
			array (
				'id' => 5804,
				'id_provincia' => 43,
				'cod_municipio' => 163,
				'DC' => 4,
				'nombre' => 'Vendrell, El',
			),
			304 => 
			array (
				'id' => 5805,
				'id_provincia' => 44,
				'cod_municipio' => 163,
				'DC' => 9,
				'nombre' => 'Noguera de Albarracín',
			),
			305 => 
			array (
				'id' => 5806,
				'id_provincia' => 45,
				'cod_municipio' => 163,
				'DC' => 2,
				'nombre' => 'Sonseca',
			),
			306 => 
			array (
				'id' => 5807,
				'id_provincia' => 46,
				'cod_municipio' => 163,
				'DC' => 5,
				'nombre' => 'Massalfassar',
			),
			307 => 
			array (
				'id' => 5808,
				'id_provincia' => 47,
				'cod_municipio' => 163,
				'DC' => 1,
				'nombre' => 'Tiedra',
			),
			308 => 
			array (
				'id' => 5809,
				'id_provincia' => 49,
				'cod_municipio' => 163,
				'DC' => 0,
				'nombre' => 'Pozoantiguo',
			),
			309 => 
			array (
				'id' => 5810,
				'id_provincia' => 50,
				'cod_municipio' => 163,
				'DC' => 3,
				'nombre' => 'María de Huerva',
			),
			310 => 
			array (
				'id' => 5811,
				'id_provincia' => 5,
				'cod_municipio' => 164,
				'DC' => 5,
				'nombre' => 'Navaquesera',
			),
			311 => 
			array (
				'id' => 5812,
				'id_provincia' => 8,
				'cod_municipio' => 164,
				'DC' => 0,
				'nombre' => 'Pla del Penedès, El',
			),
			312 => 
			array (
				'id' => 5813,
				'id_provincia' => 9,
				'cod_municipio' => 164,
				'DC' => 3,
				'nombre' => 'Hontoria de Valdearados',
			),
			313 => 
			array (
				'id' => 5814,
				'id_provincia' => 10,
				'cod_municipio' => 164,
				'DC' => 7,
				'nombre' => 'San Martín de Trevejo',
			),
			314 => 
			array (
				'id' => 5815,
				'id_provincia' => 17,
				'cod_municipio' => 164,
				'DC' => 2,
				'nombre' => 'Sant Hilari Sacalm',
			),
			315 => 
			array (
				'id' => 5816,
				'id_provincia' => 18,
				'cod_municipio' => 164,
				'DC' => 8,
				'nombre' => 'Puebla de Don Fadrique',
			),
			316 => 
			array (
				'id' => 5817,
				'id_provincia' => 22,
				'cod_municipio' => 164,
				'DC' => 7,
				'nombre' => 'Olvena',
			),
			317 => 
			array (
				'id' => 5818,
				'id_provincia' => 24,
				'cod_municipio' => 164,
				'DC' => 8,
				'nombre' => 'Sena de Luna',
			),
			318 => 
			array (
				'id' => 5819,
				'id_provincia' => 25,
				'cod_municipio' => 164,
				'DC' => 1,
				'nombre' => 'Penelles',
			),
			319 => 
			array (
				'id' => 5820,
				'id_provincia' => 26,
				'cod_municipio' => 164,
				'DC' => 4,
				'nombre' => 'Ventrosa',
			),
			320 => 
			array (
				'id' => 5821,
				'id_provincia' => 28,
				'cod_municipio' => 164,
				'DC' => 6,
				'nombre' => 'Valdetorres de Jarama',
			),
			321 => 
			array (
				'id' => 5822,
				'id_provincia' => 31,
				'cod_municipio' => 164,
				'DC' => 0,
				'nombre' => 'Mélida',
			),
			322 => 
			array (
				'id' => 5823,
				'id_provincia' => 37,
				'cod_municipio' => 164,
				'DC' => 8,
				'nombre' => 'Huerta',
			),
			323 => 
			array (
				'id' => 5824,
				'id_provincia' => 40,
				'cod_municipio' => 164,
				'DC' => 1,
				'nombre' => 'Rapariegos',
			),
			324 => 
			array (
				'id' => 5825,
				'id_provincia' => 42,
				'cod_municipio' => 164,
				'DC' => 3,
				'nombre' => 'San Leonardo de Yagüe',
			),
			325 => 
			array (
				'id' => 5826,
				'id_provincia' => 43,
				'cod_municipio' => 164,
				'DC' => 9,
				'nombre' => 'Vespella de Gaià',
			),
			326 => 
			array (
				'id' => 5827,
				'id_provincia' => 44,
				'cod_municipio' => 164,
				'DC' => 4,
				'nombre' => 'Nogueras',
			),
			327 => 
			array (
				'id' => 5828,
				'id_provincia' => 45,
				'cod_municipio' => 164,
				'DC' => 7,
				'nombre' => 'Sotillo de las Palomas',
			),
			328 => 
			array (
				'id' => 5829,
				'id_provincia' => 46,
				'cod_municipio' => 164,
				'DC' => 0,
				'nombre' => 'Massamagrell',
			),
			329 => 
			array (
				'id' => 5830,
				'id_provincia' => 47,
				'cod_municipio' => 164,
				'DC' => 6,
				'nombre' => 'Tordehumos',
			),
			330 => 
			array (
				'id' => 5831,
				'id_provincia' => 49,
				'cod_municipio' => 164,
				'DC' => 5,
				'nombre' => 'Pozuelo de Tábara',
			),
			331 => 
			array (
				'id' => 5832,
				'id_provincia' => 50,
				'cod_municipio' => 164,
				'DC' => 8,
				'nombre' => 'Mediana de Aragón',
			),
			332 => 
			array (
				'id' => 5833,
				'id_provincia' => 5,
				'cod_municipio' => 165,
				'DC' => 8,
				'nombre' => 'Navarredonda de Gredos',
			),
			333 => 
			array (
				'id' => 5834,
				'id_provincia' => 8,
				'cod_municipio' => 165,
				'DC' => 3,
				'nombre' => 'Pobla de Claramunt, La',
			),
			334 => 
			array (
				'id' => 5835,
				'id_provincia' => 10,
				'cod_municipio' => 165,
				'DC' => 0,
				'nombre' => 'Santa Ana',
			),
			335 => 
			array (
				'id' => 5836,
				'id_provincia' => 16,
				'cod_municipio' => 165,
				'DC' => 9,
				'nombre' => 'Poyatos',
			),
			336 => 
			array (
				'id' => 5837,
				'id_provincia' => 17,
				'cod_municipio' => 165,
				'DC' => 5,
				'nombre' => 'Sant Jaume de Llierca',
			),
			337 => 
			array (
				'id' => 5838,
				'id_provincia' => 18,
				'cod_municipio' => 165,
				'DC' => 1,
				'nombre' => 'Pulianas',
			),
			338 => 
			array (
				'id' => 5839,
				'id_provincia' => 19,
				'cod_municipio' => 165,
				'DC' => 4,
				'nombre' => 'Majaelrayo',
			),
			339 => 
			array (
				'id' => 5840,
				'id_provincia' => 22,
				'cod_municipio' => 165,
				'DC' => 0,
				'nombre' => 'Ontiñena',
			),
			340 => 
			array (
				'id' => 5841,
				'id_provincia' => 24,
				'cod_municipio' => 165,
				'DC' => 1,
				'nombre' => 'Sobrado',
			),
			341 => 
			array (
				'id' => 5842,
				'id_provincia' => 25,
				'cod_municipio' => 165,
				'DC' => 4,
				'nombre' => 'Peramola',
			),
			342 => 
			array (
				'id' => 5843,
				'id_provincia' => 26,
				'cod_municipio' => 165,
				'DC' => 7,
				'nombre' => 'Viguera',
			),
			343 => 
			array (
				'id' => 5844,
				'id_provincia' => 28,
				'cod_municipio' => 165,
				'DC' => 9,
				'nombre' => 'Valdilecha',
			),
			344 => 
			array (
				'id' => 5845,
				'id_provincia' => 31,
				'cod_municipio' => 165,
				'DC' => 3,
				'nombre' => 'Mendavia',
			),
			345 => 
			array (
				'id' => 5846,
				'id_provincia' => 34,
				'cod_municipio' => 165,
				'DC' => 9,
				'nombre' => 'San Román de la Cuba',
			),
			346 => 
			array (
				'id' => 5847,
				'id_provincia' => 37,
				'cod_municipio' => 165,
				'DC' => 1,
				'nombre' => 'Iruelos',
			),
			347 => 
			array (
				'id' => 5848,
				'id_provincia' => 40,
				'cod_municipio' => 165,
				'DC' => 4,
				'nombre' => 'Rebollo',
			),
			348 => 
			array (
				'id' => 5849,
				'id_provincia' => 42,
				'cod_municipio' => 165,
				'DC' => 6,
				'nombre' => 'San Pedro Manrique',
			),
			349 => 
			array (
				'id' => 5850,
				'id_provincia' => 43,
				'cod_municipio' => 165,
				'DC' => 2,
				'nombre' => 'Vilabella',
			),
			350 => 
			array (
				'id' => 5851,
				'id_provincia' => 44,
				'cod_municipio' => 165,
				'DC' => 7,
				'nombre' => 'Nogueruelas',
			),
			351 => 
			array (
				'id' => 5852,
				'id_provincia' => 45,
				'cod_municipio' => 165,
				'DC' => 0,
				'nombre' => 'Talavera de la Reina',
			),
			352 => 
			array (
				'id' => 5853,
				'id_provincia' => 46,
				'cod_municipio' => 165,
				'DC' => 3,
				'nombre' => 'Massanassa',
			),
			353 => 
			array (
				'id' => 5854,
				'id_provincia' => 47,
				'cod_municipio' => 165,
				'DC' => 9,
				'nombre' => 'Tordesillas',
			),
			354 => 
			array (
				'id' => 5855,
				'id_provincia' => 49,
				'cod_municipio' => 165,
				'DC' => 8,
				'nombre' => 'Prado',
			),
			355 => 
			array (
				'id' => 5856,
				'id_provincia' => 50,
				'cod_municipio' => 165,
				'DC' => 1,
				'nombre' => 'Mequinenza',
			),
			356 => 
			array (
				'id' => 5857,
				'id_provincia' => 5,
				'cod_municipio' => 166,
				'DC' => 1,
				'nombre' => 'Navarredondilla',
			),
			357 => 
			array (
				'id' => 5858,
				'id_provincia' => 8,
				'cod_municipio' => 166,
				'DC' => 6,
				'nombre' => 'Pobla de Lillet, La',
			),
			358 => 
			array (
				'id' => 5859,
				'id_provincia' => 9,
				'cod_municipio' => 166,
				'DC' => 9,
				'nombre' => 'Hormazas, Las',
			),
			359 => 
			array (
				'id' => 5860,
				'id_provincia' => 10,
				'cod_municipio' => 166,
				'DC' => 3,
				'nombre' => 'Santa Cruz de la Sierra',
			),
			360 => 
			array (
				'id' => 5861,
				'id_provincia' => 16,
				'cod_municipio' => 166,
				'DC' => 2,
				'nombre' => 'Pozoamargo',
			),
			361 => 
			array (
				'id' => 5862,
				'id_provincia' => 17,
				'cod_municipio' => 166,
				'DC' => 8,
				'nombre' => 'Sant Jordi Desvalls',
			),
			362 => 
			array (
				'id' => 5863,
				'id_provincia' => 19,
				'cod_municipio' => 166,
				'DC' => 7,
				'nombre' => 'Málaga del Fresno',
			),
			363 => 
			array (
				'id' => 5864,
				'id_provincia' => 24,
				'cod_municipio' => 166,
				'DC' => 4,
				'nombre' => 'Soto de la Vega',
			),
			364 => 
			array (
				'id' => 5865,
				'id_provincia' => 25,
				'cod_municipio' => 166,
				'DC' => 7,
				'nombre' => 'Pinell de Solsonès',
			),
			365 => 
			array (
				'id' => 5866,
				'id_provincia' => 26,
				'cod_municipio' => 166,
				'DC' => 0,
				'nombre' => 'Villalba de Rioja',
			),
			366 => 
			array (
				'id' => 5867,
				'id_provincia' => 28,
				'cod_municipio' => 166,
				'DC' => 2,
				'nombre' => 'Valverde de Alcalá',
			),
			367 => 
			array (
				'id' => 5868,
				'id_provincia' => 31,
				'cod_municipio' => 166,
				'DC' => 6,
				'nombre' => 'Mendaza',
			),
			368 => 
			array (
				'id' => 5869,
				'id_provincia' => 37,
				'cod_municipio' => 166,
				'DC' => 4,
				'nombre' => 'Ituero de Azaba',
			),
			369 => 
			array (
				'id' => 5870,
				'id_provincia' => 40,
				'cod_municipio' => 166,
				'DC' => 7,
				'nombre' => 'Remondo',
			),
			370 => 
			array (
				'id' => 5871,
				'id_provincia' => 42,
				'cod_municipio' => 166,
				'DC' => 9,
				'nombre' => 'Santa Cruz de Yanguas',
			),
			371 => 
			array (
				'id' => 5872,
				'id_provincia' => 43,
				'cod_municipio' => 166,
				'DC' => 5,
				'nombre' => 'Vilallonga del Camp',
			),
			372 => 
			array (
				'id' => 5873,
				'id_provincia' => 45,
				'cod_municipio' => 166,
				'DC' => 3,
				'nombre' => 'Tembleque',
			),
			373 => 
			array (
				'id' => 5874,
				'id_provincia' => 46,
				'cod_municipio' => 166,
				'DC' => 6,
				'nombre' => 'Meliana',
			),
			374 => 
			array (
				'id' => 5875,
				'id_provincia' => 47,
				'cod_municipio' => 166,
				'DC' => 2,
				'nombre' => 'Torrecilla de la Abadesa',
			),
			375 => 
			array (
				'id' => 5876,
				'id_provincia' => 49,
				'cod_municipio' => 166,
				'DC' => 1,
				'nombre' => 'Puebla de Sanabria',
			),
			376 => 
			array (
				'id' => 5877,
				'id_provincia' => 50,
				'cod_municipio' => 166,
				'DC' => 4,
				'nombre' => 'Mesones de Isuela',
			),
			377 => 
			array (
				'id' => 5878,
				'id_provincia' => 5,
				'cod_municipio' => 167,
				'DC' => 7,
				'nombre' => 'Navarrevisca',
			),
			378 => 
			array (
				'id' => 5879,
				'id_provincia' => 8,
				'cod_municipio' => 167,
				'DC' => 2,
				'nombre' => 'Polinyà',
			),
			379 => 
			array (
				'id' => 5880,
				'id_provincia' => 9,
				'cod_municipio' => 167,
				'DC' => 5,
				'nombre' => 'Hornillos del Camino',
			),
			380 => 
			array (
				'id' => 5881,
				'id_provincia' => 10,
				'cod_municipio' => 167,
				'DC' => 9,
				'nombre' => 'Santa Cruz de Paniagua',
			),
			381 => 
			array (
				'id' => 5882,
				'id_provincia' => 16,
				'cod_municipio' => 167,
				'DC' => 8,
				'nombre' => 'Pozorrubio',
			),
			382 => 
			array (
				'id' => 5883,
				'id_provincia' => 17,
				'cod_municipio' => 167,
				'DC' => 4,
				'nombre' => 'Sant Joan de les Abadesses',
			),
			383 => 
			array (
				'id' => 5884,
				'id_provincia' => 18,
				'cod_municipio' => 167,
				'DC' => 0,
				'nombre' => 'Purullena',
			),
			384 => 
			array (
				'id' => 5885,
				'id_provincia' => 19,
				'cod_municipio' => 167,
				'DC' => 3,
				'nombre' => 'Malaguilla',
			),
			385 => 
			array (
				'id' => 5886,
				'id_provincia' => 22,
				'cod_municipio' => 167,
				'DC' => 9,
				'nombre' => 'Osso de Cinca',
			),
			386 => 
			array (
				'id' => 5887,
				'id_provincia' => 24,
				'cod_municipio' => 167,
				'DC' => 0,
				'nombre' => 'Soto y Amío',
			),
			387 => 
			array (
				'id' => 5888,
				'id_provincia' => 25,
				'cod_municipio' => 167,
				'DC' => 3,
				'nombre' => 'Pinós',
			),
			388 => 
			array (
				'id' => 5889,
				'id_provincia' => 26,
				'cod_municipio' => 167,
				'DC' => 6,
				'nombre' => 'Villalobar de Rioja',
			),
			389 => 
			array (
				'id' => 5890,
				'id_provincia' => 28,
				'cod_municipio' => 167,
				'DC' => 8,
				'nombre' => 'Velilla de San Antonio',
			),
			390 => 
			array (
				'id' => 5891,
				'id_provincia' => 31,
				'cod_municipio' => 167,
				'DC' => 2,
				'nombre' => 'Mendigorría',
			),
			391 => 
			array (
				'id' => 5892,
				'id_provincia' => 34,
				'cod_municipio' => 167,
				'DC' => 8,
				'nombre' => 'Santa Cecilia del Alcor',
			),
			392 => 
			array (
				'id' => 5893,
				'id_provincia' => 37,
				'cod_municipio' => 167,
				'DC' => 0,
				'nombre' => 'Juzbado',
			),
			393 => 
			array (
				'id' => 5894,
				'id_provincia' => 42,
				'cod_municipio' => 167,
				'DC' => 5,
				'nombre' => 'Santa María de Huerta',
			),
			394 => 
			array (
				'id' => 5895,
				'id_provincia' => 43,
				'cod_municipio' => 167,
				'DC' => 1,
				'nombre' => 'Vilanova d\'Escornalbou',
			),
			395 => 
			array (
				'id' => 5896,
				'id_provincia' => 44,
				'cod_municipio' => 167,
				'DC' => 6,
				'nombre' => 'Obón',
			),
			396 => 
			array (
				'id' => 5897,
				'id_provincia' => 45,
				'cod_municipio' => 167,
				'DC' => 9,
				'nombre' => 'Toboso, El',
			),
			397 => 
			array (
				'id' => 5898,
				'id_provincia' => 46,
				'cod_municipio' => 167,
				'DC' => 2,
				'nombre' => 'Millares',
			),
			398 => 
			array (
				'id' => 5899,
				'id_provincia' => 47,
				'cod_municipio' => 167,
				'DC' => 8,
				'nombre' => 'Torrecilla de la Orden',
			),
			399 => 
			array (
				'id' => 5900,
				'id_provincia' => 49,
				'cod_municipio' => 167,
				'DC' => 7,
				'nombre' => 'Pueblica de Valverde',
			),
			400 => 
			array (
				'id' => 5901,
				'id_provincia' => 50,
				'cod_municipio' => 167,
				'DC' => 0,
				'nombre' => 'Mezalocha',
			),
			401 => 
			array (
				'id' => 5902,
				'id_provincia' => 5,
				'cod_municipio' => 168,
				'DC' => 3,
				'nombre' => 'Navas del Marqués, Las',
			),
			402 => 
			array (
				'id' => 5903,
				'id_provincia' => 8,
				'cod_municipio' => 168,
				'DC' => 8,
				'nombre' => 'Pontons',
			),
			403 => 
			array (
				'id' => 5904,
				'id_provincia' => 9,
				'cod_municipio' => 168,
				'DC' => 1,
				'nombre' => 'Horra, La',
			),
			404 => 
			array (
				'id' => 5905,
				'id_provincia' => 10,
				'cod_municipio' => 168,
				'DC' => 5,
				'nombre' => 'Santa Marta de Magasca',
			),
			405 => 
			array (
				'id' => 5906,
				'id_provincia' => 17,
				'cod_municipio' => 168,
				'DC' => 0,
				'nombre' => 'Sant Joan de Mollet',
			),
			406 => 
			array (
				'id' => 5907,
				'id_provincia' => 18,
				'cod_municipio' => 168,
				'DC' => 6,
				'nombre' => 'Quéntar',
			),
			407 => 
			array (
				'id' => 5908,
				'id_provincia' => 19,
				'cod_municipio' => 168,
				'DC' => 9,
				'nombre' => 'Mandayona',
			),
			408 => 
			array (
				'id' => 5909,
				'id_provincia' => 22,
				'cod_municipio' => 168,
				'DC' => 5,
				'nombre' => 'Palo',
			),
			409 => 
			array (
				'id' => 5910,
				'id_provincia' => 24,
				'cod_municipio' => 168,
				'DC' => 6,
				'nombre' => 'Toral de los Guzmanes',
			),
			410 => 
			array (
				'id' => 5911,
				'id_provincia' => 25,
				'cod_municipio' => 168,
				'DC' => 9,
				'nombre' => 'Poal, El',
			),
			411 => 
			array (
				'id' => 5912,
				'id_provincia' => 26,
				'cod_municipio' => 168,
				'DC' => 2,
				'nombre' => 'Villamediana de Iregua',
			),
			412 => 
			array (
				'id' => 5913,
				'id_provincia' => 28,
				'cod_municipio' => 168,
				'DC' => 4,
				'nombre' => 'Vellón, El',
			),
			413 => 
			array (
				'id' => 5914,
				'id_provincia' => 31,
				'cod_municipio' => 168,
				'DC' => 8,
				'nombre' => 'Metauten',
			),
			414 => 
			array (
				'id' => 5915,
				'id_provincia' => 34,
				'cod_municipio' => 168,
				'DC' => 4,
				'nombre' => 'Santa Cruz de Boedo',
			),
			415 => 
			array (
				'id' => 5916,
				'id_provincia' => 37,
				'cod_municipio' => 168,
				'DC' => 6,
				'nombre' => 'Lagunilla',
			),
			416 => 
			array (
				'id' => 5917,
				'id_provincia' => 40,
				'cod_municipio' => 168,
				'DC' => 9,
				'nombre' => 'Riaguas de San Bartolomé',
			),
			417 => 
			array (
				'id' => 5918,
				'id_provincia' => 42,
				'cod_municipio' => 168,
				'DC' => 1,
				'nombre' => 'Santa María de las Hoyas',
			),
			418 => 
			array (
				'id' => 5919,
				'id_provincia' => 43,
				'cod_municipio' => 168,
				'DC' => 7,
				'nombre' => 'Vilanova de Prades',
			),
			419 => 
			array (
				'id' => 5920,
				'id_provincia' => 44,
				'cod_municipio' => 168,
				'DC' => 2,
				'nombre' => 'Odón',
			),
			420 => 
			array (
				'id' => 5921,
				'id_provincia' => 45,
				'cod_municipio' => 168,
				'DC' => 5,
				'nombre' => 'Toledo',
			),
			421 => 
			array (
				'id' => 5922,
				'id_provincia' => 46,
				'cod_municipio' => 168,
				'DC' => 8,
				'nombre' => 'Miramar',
			),
			422 => 
			array (
				'id' => 5923,
				'id_provincia' => 47,
				'cod_municipio' => 168,
				'DC' => 4,
				'nombre' => 'Torrecilla de la Torre',
			),
			423 => 
			array (
				'id' => 5924,
				'id_provincia' => 49,
				'cod_municipio' => 168,
				'DC' => 3,
				'nombre' => 'Quintanilla del Monte',
			),
			424 => 
			array (
				'id' => 5925,
				'id_provincia' => 50,
				'cod_municipio' => 168,
				'DC' => 6,
				'nombre' => 'Mianos',
			),
			425 => 
			array (
				'id' => 5926,
				'id_provincia' => 5,
				'cod_municipio' => 169,
				'DC' => 6,
				'nombre' => 'Navatalgordo',
			),
			426 => 
			array (
				'id' => 5927,
				'id_provincia' => 8,
				'cod_municipio' => 169,
				'DC' => 1,
				'nombre' => 'Prat de Llobregat, El',
			),
			427 => 
			array (
				'id' => 5928,
				'id_provincia' => 9,
				'cod_municipio' => 169,
				'DC' => 4,
				'nombre' => 'Hortigüela',
			),
			428 => 
			array (
				'id' => 5929,
				'id_provincia' => 10,
				'cod_municipio' => 169,
				'DC' => 8,
				'nombre' => 'Santiago de Alcántara',
			),
			429 => 
			array (
				'id' => 5930,
				'id_provincia' => 16,
				'cod_municipio' => 169,
				'DC' => 7,
				'nombre' => 'Pozuelo, El',
			),
			430 => 
			array (
				'id' => 5931,
				'id_provincia' => 17,
				'cod_municipio' => 169,
				'DC' => 3,
				'nombre' => 'Sant Julià de Ramis',
			),
			431 => 
			array (
				'id' => 5932,
				'id_provincia' => 19,
				'cod_municipio' => 169,
				'DC' => 2,
				'nombre' => 'Mantiel',
			),
			432 => 
			array (
				'id' => 5933,
				'id_provincia' => 24,
				'cod_municipio' => 169,
				'DC' => 9,
				'nombre' => 'Toreno',
			),
			433 => 
			array (
				'id' => 5934,
				'id_provincia' => 25,
				'cod_municipio' => 169,
				'DC' => 2,
				'nombre' => 'Pobla de Cérvoles, La',
			),
			434 => 
			array (
				'id' => 5935,
				'id_provincia' => 26,
				'cod_municipio' => 169,
				'DC' => 5,
				'nombre' => 'Villanueva de Cameros',
			),
			435 => 
			array (
				'id' => 5936,
				'id_provincia' => 28,
				'cod_municipio' => 169,
				'DC' => 7,
				'nombre' => 'Venturada',
			),
			436 => 
			array (
				'id' => 5937,
				'id_provincia' => 31,
				'cod_municipio' => 169,
				'DC' => 1,
				'nombre' => 'Milagro',
			),
			437 => 
			array (
				'id' => 5938,
				'id_provincia' => 34,
				'cod_municipio' => 169,
				'DC' => 7,
				'nombre' => 'Santervás de la Vega',
			),
			438 => 
			array (
				'id' => 5939,
				'id_provincia' => 37,
				'cod_municipio' => 169,
				'DC' => 9,
				'nombre' => 'Larrodrigo',
			),
			439 => 
			array (
				'id' => 5940,
				'id_provincia' => 43,
				'cod_municipio' => 169,
				'DC' => 0,
				'nombre' => 'Vilaplana',
			),
			440 => 
			array (
				'id' => 5941,
				'id_provincia' => 44,
				'cod_municipio' => 169,
				'DC' => 5,
				'nombre' => 'Ojos Negros',
			),
			441 => 
			array (
				'id' => 5942,
				'id_provincia' => 45,
				'cod_municipio' => 169,
				'DC' => 8,
				'nombre' => 'Torralba de Oropesa',
			),
			442 => 
			array (
				'id' => 5943,
				'id_provincia' => 46,
				'cod_municipio' => 169,
				'DC' => 1,
				'nombre' => 'Mislata',
			),
			443 => 
			array (
				'id' => 5944,
				'id_provincia' => 47,
				'cod_municipio' => 169,
				'DC' => 7,
				'nombre' => 'Torre de Esgueva',
			),
			444 => 
			array (
				'id' => 5945,
				'id_provincia' => 49,
				'cod_municipio' => 169,
				'DC' => 6,
				'nombre' => 'Quintanilla del Olmo',
			),
			445 => 
			array (
				'id' => 5946,
				'id_provincia' => 50,
				'cod_municipio' => 169,
				'DC' => 9,
				'nombre' => 'Miedes de Aragón',
			),
			446 => 
			array (
				'id' => 5947,
				'id_provincia' => 5,
				'cod_municipio' => 170,
				'DC' => 0,
				'nombre' => 'Navatejares',
			),
			447 => 
			array (
				'id' => 5948,
				'id_provincia' => 8,
				'cod_municipio' => 170,
				'DC' => 5,
				'nombre' => 'Prats de Rei, Els',
			),
			448 => 
			array (
				'id' => 5949,
				'id_provincia' => 9,
				'cod_municipio' => 170,
				'DC' => 8,
				'nombre' => 'Hoyales de Roa',
			),
			449 => 
			array (
				'id' => 5950,
				'id_provincia' => 10,
				'cod_municipio' => 170,
				'DC' => 2,
				'nombre' => 'Santiago del Campo',
			),
			450 => 
			array (
				'id' => 5951,
				'id_provincia' => 16,
				'cod_municipio' => 170,
				'DC' => 1,
				'nombre' => 'Priego',
			),
			451 => 
			array (
				'id' => 5952,
				'id_provincia' => 17,
				'cod_municipio' => 170,
				'DC' => 7,
				'nombre' => 'Vallfogona de Ripollès',
			),
			452 => 
			array (
				'id' => 5953,
				'id_provincia' => 18,
				'cod_municipio' => 170,
				'DC' => 3,
				'nombre' => 'Rubite',
			),
			453 => 
			array (
				'id' => 5954,
				'id_provincia' => 19,
				'cod_municipio' => 170,
				'DC' => 6,
				'nombre' => 'Maranchón',
			),
			454 => 
			array (
				'id' => 5955,
				'id_provincia' => 22,
				'cod_municipio' => 170,
				'DC' => 2,
				'nombre' => 'Panticosa',
			),
			455 => 
			array (
				'id' => 5956,
				'id_provincia' => 24,
				'cod_municipio' => 170,
				'DC' => 3,
				'nombre' => 'Torre del Bierzo',
			),
			456 => 
			array (
				'id' => 5957,
				'id_provincia' => 25,
				'cod_municipio' => 170,
				'DC' => 6,
				'nombre' => 'Bellaguarda',
			),
			457 => 
			array (
				'id' => 5958,
				'id_provincia' => 26,
				'cod_municipio' => 170,
				'DC' => 9,
				'nombre' => 'Villar de Arnedo, El',
			),
			458 => 
			array (
				'id' => 5959,
				'id_provincia' => 28,
				'cod_municipio' => 170,
				'DC' => 1,
				'nombre' => 'Villaconejos',
			),
			459 => 
			array (
				'id' => 5960,
				'id_provincia' => 31,
				'cod_municipio' => 170,
				'DC' => 5,
				'nombre' => 'Mirafuentes',
			),
			460 => 
			array (
				'id' => 5961,
				'id_provincia' => 34,
				'cod_municipio' => 170,
				'DC' => 1,
				'nombre' => 'Santibáñez de Ecla',
			),
			461 => 
			array (
				'id' => 5962,
				'id_provincia' => 37,
				'cod_municipio' => 170,
				'DC' => 3,
				'nombre' => 'Ledesma',
			),
			462 => 
			array (
				'id' => 5963,
				'id_provincia' => 40,
				'cod_municipio' => 170,
				'DC' => 6,
				'nombre' => 'Riaza',
			),
			463 => 
			array (
				'id' => 5964,
				'id_provincia' => 43,
				'cod_municipio' => 170,
				'DC' => 4,
				'nombre' => 'Vila-rodona',
			),
			464 => 
			array (
				'id' => 5965,
				'id_provincia' => 45,
				'cod_municipio' => 170,
				'DC' => 2,
				'nombre' => 'Torrecilla de la Jara',
			),
			465 => 
			array (
				'id' => 5966,
				'id_provincia' => 46,
				'cod_municipio' => 170,
				'DC' => 5,
				'nombre' => 'Mogente/Moixent',
			),
			466 => 
			array (
				'id' => 5967,
				'id_provincia' => 47,
				'cod_municipio' => 170,
				'DC' => 1,
				'nombre' => 'Torre de Peñafiel',
			),
			467 => 
			array (
				'id' => 5968,
				'id_provincia' => 49,
				'cod_municipio' => 170,
				'DC' => 0,
				'nombre' => 'Quintanilla de Urz',
			),
			468 => 
			array (
				'id' => 5969,
				'id_provincia' => 50,
				'cod_municipio' => 170,
				'DC' => 3,
				'nombre' => 'Monegrillo',
			),
			469 => 
			array (
				'id' => 5970,
				'id_provincia' => 5,
				'cod_municipio' => 171,
				'DC' => 7,
				'nombre' => 'Neila de San Miguel',
			),
			470 => 
			array (
				'id' => 5971,
				'id_provincia' => 8,
				'cod_municipio' => 171,
				'DC' => 2,
				'nombre' => 'Prats de Lluçanès',
			),
			471 => 
			array (
				'id' => 5972,
				'id_provincia' => 10,
				'cod_municipio' => 171,
				'DC' => 9,
				'nombre' => 'Santibáñez el Alto',
			),
			472 => 
			array (
				'id' => 5973,
				'id_provincia' => 16,
				'cod_municipio' => 171,
				'DC' => 8,
				'nombre' => 'Provencio, El',
			),
			473 => 
			array (
				'id' => 5974,
				'id_provincia' => 17,
				'cod_municipio' => 171,
				'DC' => 4,
				'nombre' => 'Sant Llorenç de la Muga',
			),
			474 => 
			array (
				'id' => 5975,
				'id_provincia' => 18,
				'cod_municipio' => 171,
				'DC' => 0,
				'nombre' => 'Salar',
			),
			475 => 
			array (
				'id' => 5976,
				'id_provincia' => 19,
				'cod_municipio' => 171,
				'DC' => 3,
				'nombre' => 'Marchamalo',
			),
			476 => 
			array (
				'id' => 5977,
				'id_provincia' => 24,
				'cod_municipio' => 171,
				'DC' => 0,
				'nombre' => 'Trabadelo',
			),
			477 => 
			array (
				'id' => 5978,
				'id_provincia' => 25,
				'cod_municipio' => 171,
				'DC' => 3,
				'nombre' => 'Pobla de Segur, La',
			),
			478 => 
			array (
				'id' => 5979,
				'id_provincia' => 26,
				'cod_municipio' => 171,
				'DC' => 6,
				'nombre' => 'Villar de Torre',
			),
			479 => 
			array (
				'id' => 5980,
				'id_provincia' => 28,
				'cod_municipio' => 171,
				'DC' => 8,
				'nombre' => 'Villa del Prado',
			),
			480 => 
			array (
				'id' => 5981,
				'id_provincia' => 31,
				'cod_municipio' => 171,
				'DC' => 2,
				'nombre' => 'Miranda de Arga',
			),
			481 => 
			array (
				'id' => 5982,
				'id_provincia' => 34,
				'cod_municipio' => 171,
				'DC' => 8,
				'nombre' => 'Santibáñez de la Peña',
			),
			482 => 
			array (
				'id' => 5983,
				'id_provincia' => 37,
				'cod_municipio' => 171,
				'DC' => 0,
				'nombre' => 'Ledrada',
			),
			483 => 
			array (
				'id' => 5984,
				'id_provincia' => 40,
				'cod_municipio' => 171,
				'DC' => 3,
				'nombre' => 'Ribota',
			),
			484 => 
			array (
				'id' => 5985,
				'id_provincia' => 42,
				'cod_municipio' => 171,
				'DC' => 5,
				'nombre' => 'Serón de Nágima',
			),
			485 => 
			array (
				'id' => 5986,
				'id_provincia' => 43,
				'cod_municipio' => 171,
				'DC' => 1,
				'nombre' => 'Vila-seca',
			),
			486 => 
			array (
				'id' => 5987,
				'id_provincia' => 44,
				'cod_municipio' => 171,
				'DC' => 6,
				'nombre' => 'Olba',
			),
			487 => 
			array (
				'id' => 5988,
				'id_provincia' => 45,
				'cod_municipio' => 171,
				'DC' => 9,
				'nombre' => 'Torre de Esteban Hambrán, La',
			),
			488 => 
			array (
				'id' => 5989,
				'id_provincia' => 46,
				'cod_municipio' => 171,
				'DC' => 2,
				'nombre' => 'Moncada',
			),
			489 => 
			array (
				'id' => 5990,
				'id_provincia' => 47,
				'cod_municipio' => 171,
				'DC' => 8,
				'nombre' => 'Torrelobatón',
			),
			490 => 
			array (
				'id' => 5991,
				'id_provincia' => 49,
				'cod_municipio' => 171,
				'DC' => 7,
				'nombre' => 'Quiruelas de Vidriales',
			),
			491 => 
			array (
				'id' => 5992,
				'id_provincia' => 50,
				'cod_municipio' => 171,
				'DC' => 0,
				'nombre' => 'Moneva',
			),
			492 => 
			array (
				'id' => 5993,
				'id_provincia' => 5,
				'cod_municipio' => 172,
				'DC' => 2,
				'nombre' => 'Niharra',
			),
			493 => 
			array (
				'id' => 5994,
				'id_provincia' => 8,
				'cod_municipio' => 172,
				'DC' => 7,
				'nombre' => 'Premià de Mar',
			),
			494 => 
			array (
				'id' => 5995,
				'id_provincia' => 9,
				'cod_municipio' => 172,
				'DC' => 0,
				'nombre' => 'Huérmeces',
			),
			495 => 
			array (
				'id' => 5996,
				'id_provincia' => 10,
				'cod_municipio' => 172,
				'DC' => 4,
				'nombre' => 'Santibáñez el Bajo',
			),
			496 => 
			array (
				'id' => 5997,
				'id_provincia' => 16,
				'cod_municipio' => 172,
				'DC' => 3,
				'nombre' => 'Puebla de Almenara',
			),
			497 => 
			array (
				'id' => 5998,
				'id_provincia' => 17,
				'cod_municipio' => 172,
				'DC' => 9,
				'nombre' => 'Sant Martí de Llémena',
			),
			498 => 
			array (
				'id' => 5999,
				'id_provincia' => 19,
				'cod_municipio' => 172,
				'DC' => 8,
				'nombre' => 'Masegoso de Tajuña',
			),
			499 => 
			array (
				'id' => 6000,
				'id_provincia' => 22,
				'cod_municipio' => 172,
				'DC' => 4,
				'nombre' => 'Peñalba',
			),
		));
		\DB::table('municipios')->insert(array (
			0 => 
			array (
				'id' => 6001,
				'id_provincia' => 24,
				'cod_municipio' => 172,
				'DC' => 5,
				'nombre' => 'Truchas',
			),
			1 => 
			array (
				'id' => 6002,
				'id_provincia' => 25,
				'cod_municipio' => 172,
				'DC' => 8,
				'nombre' => 'Ponts',
			),
			2 => 
			array (
				'id' => 6003,
				'id_provincia' => 26,
				'cod_municipio' => 172,
				'DC' => 1,
				'nombre' => 'Villarejo',
			),
			3 => 
			array (
				'id' => 6004,
				'id_provincia' => 28,
				'cod_municipio' => 172,
				'DC' => 3,
				'nombre' => 'Villalbilla',
			),
			4 => 
			array (
				'id' => 6005,
				'id_provincia' => 31,
				'cod_municipio' => 172,
				'DC' => 7,
				'nombre' => 'Monreal/Elo',
			),
			5 => 
			array (
				'id' => 6006,
				'id_provincia' => 37,
				'cod_municipio' => 172,
				'DC' => 5,
				'nombre' => 'Linares de Riofrío',
			),
			6 => 
			array (
				'id' => 6007,
				'id_provincia' => 40,
				'cod_municipio' => 172,
				'DC' => 8,
				'nombre' => 'Riofrío de Riaza',
			),
			7 => 
			array (
				'id' => 6008,
				'id_provincia' => 42,
				'cod_municipio' => 172,
				'DC' => 0,
				'nombre' => 'Soliedra',
			),
			8 => 
			array (
				'id' => 6009,
				'id_provincia' => 43,
				'cod_municipio' => 172,
				'DC' => 6,
				'nombre' => 'Vilaverd',
			),
			9 => 
			array (
				'id' => 6010,
				'id_provincia' => 44,
				'cod_municipio' => 172,
				'DC' => 1,
				'nombre' => 'Oliete',
			),
			10 => 
			array (
				'id' => 6011,
				'id_provincia' => 45,
				'cod_municipio' => 172,
				'DC' => 4,
				'nombre' => 'Torrico',
			),
			11 => 
			array (
				'id' => 6012,
				'id_provincia' => 46,
				'cod_municipio' => 172,
				'DC' => 7,
				'nombre' => 'Montserrat',
			),
			12 => 
			array (
				'id' => 6013,
				'id_provincia' => 47,
				'cod_municipio' => 172,
				'DC' => 3,
				'nombre' => 'Torrescárcela',
			),
			13 => 
			array (
				'id' => 6014,
				'id_provincia' => 49,
				'cod_municipio' => 172,
				'DC' => 2,
				'nombre' => 'Rabanales',
			),
			14 => 
			array (
				'id' => 6015,
				'id_provincia' => 50,
				'cod_municipio' => 172,
				'DC' => 5,
				'nombre' => 'Monreal de Ariza',
			),
			15 => 
			array (
				'id' => 6016,
				'id_provincia' => 5,
				'cod_municipio' => 173,
				'DC' => 8,
				'nombre' => 'Ojos-Albos',
			),
			16 => 
			array (
				'id' => 6017,
				'id_provincia' => 9,
				'cod_municipio' => 173,
				'DC' => 6,
				'nombre' => 'Huerta de Arriba',
			),
			17 => 
			array (
				'id' => 6018,
				'id_provincia' => 10,
				'cod_municipio' => 173,
				'DC' => 0,
				'nombre' => 'Saucedilla',
			),
			18 => 
			array (
				'id' => 6019,
				'id_provincia' => 16,
				'cod_municipio' => 173,
				'DC' => 9,
				'nombre' => 'Valle de Altomira, El',
			),
			19 => 
			array (
				'id' => 6020,
				'id_provincia' => 17,
				'cod_municipio' => 173,
				'DC' => 5,
				'nombre' => 'Sant Martí Vell',
			),
			20 => 
			array (
				'id' => 6021,
				'id_provincia' => 18,
				'cod_municipio' => 173,
				'DC' => 1,
				'nombre' => 'Salobreña',
			),
			21 => 
			array (
				'id' => 6022,
				'id_provincia' => 19,
				'cod_municipio' => 173,
				'DC' => 4,
				'nombre' => 'Matarrubia',
			),
			22 => 
			array (
				'id' => 6023,
				'id_provincia' => 22,
				'cod_municipio' => 173,
				'DC' => 0,
				'nombre' => 'Peñas de Riglos, Las',
			),
			23 => 
			array (
				'id' => 6024,
				'id_provincia' => 24,
				'cod_municipio' => 173,
				'DC' => 1,
				'nombre' => 'Turcia',
			),
			24 => 
			array (
				'id' => 6025,
				'id_provincia' => 25,
				'cod_municipio' => 173,
				'DC' => 4,
				'nombre' => 'Pont de Suert, El',
			),
			25 => 
			array (
				'id' => 6026,
				'id_provincia' => 26,
				'cod_municipio' => 173,
				'DC' => 7,
				'nombre' => 'Villarroya',
			),
			26 => 
			array (
				'id' => 6027,
				'id_provincia' => 28,
				'cod_municipio' => 173,
				'DC' => 9,
				'nombre' => 'Villamanrique de Tajo',
			),
			27 => 
			array (
				'id' => 6028,
				'id_provincia' => 31,
				'cod_municipio' => 173,
				'DC' => 3,
				'nombre' => 'Monteagudo',
			),
			28 => 
			array (
				'id' => 6029,
				'id_provincia' => 37,
				'cod_municipio' => 173,
				'DC' => 1,
				'nombre' => 'Lumbrales',
			),
			29 => 
			array (
				'id' => 6030,
				'id_provincia' => 40,
				'cod_municipio' => 173,
				'DC' => 4,
				'nombre' => 'Roda de Eresma',
			),
			30 => 
			array (
				'id' => 6031,
				'id_provincia' => 42,
				'cod_municipio' => 173,
				'DC' => 6,
				'nombre' => 'Soria',
			),
			31 => 
			array (
				'id' => 6032,
				'id_provincia' => 43,
				'cod_municipio' => 173,
				'DC' => 2,
				'nombre' => 'Vilella Alta, La',
			),
			32 => 
			array (
				'id' => 6033,
				'id_provincia' => 44,
				'cod_municipio' => 173,
				'DC' => 7,
				'nombre' => 'Olmos, Los',
			),
			33 => 
			array (
				'id' => 6034,
				'id_provincia' => 45,
				'cod_municipio' => 173,
				'DC' => 0,
				'nombre' => 'Torrijos',
			),
			34 => 
			array (
				'id' => 6035,
				'id_provincia' => 46,
				'cod_municipio' => 173,
				'DC' => 3,
				'nombre' => 'Montaverner',
			),
			35 => 
			array (
				'id' => 6036,
				'id_provincia' => 47,
				'cod_municipio' => 173,
				'DC' => 9,
				'nombre' => 'Traspinedo',
			),
			36 => 
			array (
				'id' => 6037,
				'id_provincia' => 49,
				'cod_municipio' => 173,
				'DC' => 8,
				'nombre' => 'Rábano de Aliste',
			),
			37 => 
			array (
				'id' => 6038,
				'id_provincia' => 50,
				'cod_municipio' => 173,
				'DC' => 1,
				'nombre' => 'Monterde',
			),
			38 => 
			array (
				'id' => 6039,
				'id_provincia' => 5,
				'cod_municipio' => 174,
				'DC' => 3,
				'nombre' => 'Orbita',
			),
			39 => 
			array (
				'id' => 6040,
				'id_provincia' => 8,
				'cod_municipio' => 174,
				'DC' => 8,
				'nombre' => 'Puigdàlber',
			),
			40 => 
			array (
				'id' => 6041,
				'id_provincia' => 9,
				'cod_municipio' => 174,
				'DC' => 1,
				'nombre' => 'Huerta de Rey',
			),
			41 => 
			array (
				'id' => 6042,
				'id_provincia' => 10,
				'cod_municipio' => 174,
				'DC' => 5,
				'nombre' => 'Segura de Toro',
			),
			42 => 
			array (
				'id' => 6043,
				'id_provincia' => 16,
				'cod_municipio' => 174,
				'DC' => 4,
				'nombre' => 'Puebla del Salvador',
			),
			43 => 
			array (
				'id' => 6044,
				'id_provincia' => 17,
				'cod_municipio' => 174,
				'DC' => 0,
				'nombre' => 'Sant Miquel de Campmajor',
			),
			44 => 
			array (
				'id' => 6045,
				'id_provincia' => 18,
				'cod_municipio' => 174,
				'DC' => 6,
				'nombre' => 'Santa Cruz del Comercio',
			),
			45 => 
			array (
				'id' => 6046,
				'id_provincia' => 19,
				'cod_municipio' => 174,
				'DC' => 9,
				'nombre' => 'Matillas',
			),
			46 => 
			array (
				'id' => 6047,
				'id_provincia' => 22,
				'cod_municipio' => 174,
				'DC' => 5,
				'nombre' => 'Peralta de Alcofea',
			),
			47 => 
			array (
				'id' => 6048,
				'id_provincia' => 24,
				'cod_municipio' => 174,
				'DC' => 6,
				'nombre' => 'Urdiales del Páramo',
			),
			48 => 
			array (
				'id' => 6049,
				'id_provincia' => 25,
				'cod_municipio' => 174,
				'DC' => 9,
				'nombre' => 'Portella, La',
			),
			49 => 
			array (
				'id' => 6050,
				'id_provincia' => 26,
				'cod_municipio' => 174,
				'DC' => 2,
				'nombre' => 'Villarta-Quintana',
			),
			50 => 
			array (
				'id' => 6051,
				'id_provincia' => 28,
				'cod_municipio' => 174,
				'DC' => 4,
				'nombre' => 'Villamanta',
			),
			51 => 
			array (
				'id' => 6052,
				'id_provincia' => 31,
				'cod_municipio' => 174,
				'DC' => 8,
				'nombre' => 'Morentin',
			),
			52 => 
			array (
				'id' => 6053,
				'id_provincia' => 34,
				'cod_municipio' => 174,
				'DC' => 4,
				'nombre' => 'Santoyo',
			),
			53 => 
			array (
				'id' => 6054,
				'id_provincia' => 37,
				'cod_municipio' => 174,
				'DC' => 6,
				'nombre' => 'Macotera',
			),
			54 => 
			array (
				'id' => 6055,
				'id_provincia' => 40,
				'cod_municipio' => 174,
				'DC' => 9,
				'nombre' => 'Sacramenia',
			),
			55 => 
			array (
				'id' => 6056,
				'id_provincia' => 42,
				'cod_municipio' => 174,
				'DC' => 1,
				'nombre' => 'Sotillo del Rincón',
			),
			56 => 
			array (
				'id' => 6057,
				'id_provincia' => 43,
				'cod_municipio' => 174,
				'DC' => 7,
				'nombre' => 'Vilella Baixa, La',
			),
			57 => 
			array (
				'id' => 6058,
				'id_provincia' => 44,
				'cod_municipio' => 174,
				'DC' => 2,
				'nombre' => 'Orihuela del Tremedal',
			),
			58 => 
			array (
				'id' => 6059,
				'id_provincia' => 45,
				'cod_municipio' => 174,
				'DC' => 5,
				'nombre' => 'Totanés',
			),
			59 => 
			array (
				'id' => 6060,
				'id_provincia' => 46,
				'cod_municipio' => 174,
				'DC' => 8,
				'nombre' => 'Montesa',
			),
			60 => 
			array (
				'id' => 6061,
				'id_provincia' => 47,
				'cod_municipio' => 174,
				'DC' => 4,
				'nombre' => 'Trigueros del Valle',
			),
			61 => 
			array (
				'id' => 6062,
				'id_provincia' => 49,
				'cod_municipio' => 174,
				'DC' => 3,
				'nombre' => 'Requejo',
			),
			62 => 
			array (
				'id' => 6063,
				'id_provincia' => 50,
				'cod_municipio' => 174,
				'DC' => 6,
				'nombre' => 'Montón',
			),
			63 => 
			array (
				'id' => 6064,
				'id_provincia' => 5,
				'cod_municipio' => 175,
				'DC' => 6,
				'nombre' => 'Oso, El',
			),
			64 => 
			array (
				'id' => 6065,
				'id_provincia' => 8,
				'cod_municipio' => 175,
				'DC' => 1,
				'nombre' => 'Puig-reig',
			),
			65 => 
			array (
				'id' => 6066,
				'id_provincia' => 9,
				'cod_municipio' => 175,
				'DC' => 4,
				'nombre' => 'Humada',
			),
			66 => 
			array (
				'id' => 6067,
				'id_provincia' => 10,
				'cod_municipio' => 175,
				'DC' => 8,
				'nombre' => 'Serradilla',
			),
			67 => 
			array (
				'id' => 6068,
				'id_provincia' => 16,
				'cod_municipio' => 175,
				'DC' => 7,
				'nombre' => 'Quintanar del Rey',
			),
			68 => 
			array (
				'id' => 6069,
				'id_provincia' => 17,
				'cod_municipio' => 175,
				'DC' => 3,
				'nombre' => 'Sant Miquel de Fluvià',
			),
			69 => 
			array (
				'id' => 6070,
				'id_provincia' => 18,
				'cod_municipio' => 175,
				'DC' => 9,
				'nombre' => 'Santa Fe',
			),
			70 => 
			array (
				'id' => 6071,
				'id_provincia' => 19,
				'cod_municipio' => 175,
				'DC' => 2,
				'nombre' => 'Mazarete',
			),
			71 => 
			array (
				'id' => 6072,
				'id_provincia' => 22,
				'cod_municipio' => 175,
				'DC' => 8,
				'nombre' => 'Peralta de Calasanz',
			),
			72 => 
			array (
				'id' => 6073,
				'id_provincia' => 24,
				'cod_municipio' => 175,
				'DC' => 9,
				'nombre' => 'Valdefresno',
			),
			73 => 
			array (
				'id' => 6074,
				'id_provincia' => 25,
				'cod_municipio' => 175,
				'DC' => 2,
				'nombre' => 'Prats i Sansor',
			),
			74 => 
			array (
				'id' => 6075,
				'id_provincia' => 26,
				'cod_municipio' => 175,
				'DC' => 5,
				'nombre' => 'Villavelayo',
			),
			75 => 
			array (
				'id' => 6076,
				'id_provincia' => 28,
				'cod_municipio' => 175,
				'DC' => 7,
				'nombre' => 'Villamantilla',
			),
			76 => 
			array (
				'id' => 6077,
				'id_provincia' => 31,
				'cod_municipio' => 175,
				'DC' => 1,
				'nombre' => 'Mues',
			),
			77 => 
			array (
				'id' => 6078,
				'id_provincia' => 34,
				'cod_municipio' => 175,
				'DC' => 7,
				'nombre' => 'Serna, La',
			),
			78 => 
			array (
				'id' => 6079,
				'id_provincia' => 37,
				'cod_municipio' => 175,
				'DC' => 9,
				'nombre' => 'Machacón',
			),
			79 => 
			array (
				'id' => 6080,
				'id_provincia' => 42,
				'cod_municipio' => 175,
				'DC' => 4,
				'nombre' => 'Suellacabras',
			),
			80 => 
			array (
				'id' => 6081,
				'id_provincia' => 43,
				'cod_municipio' => 175,
				'DC' => 0,
				'nombre' => 'Vilalba dels Arcs',
			),
			81 => 
			array (
				'id' => 6082,
				'id_provincia' => 44,
				'cod_municipio' => 175,
				'DC' => 5,
				'nombre' => 'Orrios',
			),
			82 => 
			array (
				'id' => 6083,
				'id_provincia' => 45,
				'cod_municipio' => 175,
				'DC' => 8,
				'nombre' => 'Turleque',
			),
			83 => 
			array (
				'id' => 6084,
				'id_provincia' => 46,
				'cod_municipio' => 175,
				'DC' => 1,
				'nombre' => 'Montitxelvo/Montichelvo',
			),
			84 => 
			array (
				'id' => 6085,
				'id_provincia' => 47,
				'cod_municipio' => 175,
				'DC' => 7,
				'nombre' => 'Tudela de Duero',
			),
			85 => 
			array (
				'id' => 6086,
				'id_provincia' => 49,
				'cod_municipio' => 175,
				'DC' => 6,
				'nombre' => 'Revellinos',
			),
			86 => 
			array (
				'id' => 6087,
				'id_provincia' => 50,
				'cod_municipio' => 175,
				'DC' => 9,
				'nombre' => 'Morata de Jalón',
			),
			87 => 
			array (
				'id' => 6088,
				'id_provincia' => 5,
				'cod_municipio' => 176,
				'DC' => 9,
				'nombre' => 'Padiernos',
			),
			88 => 
			array (
				'id' => 6089,
				'id_provincia' => 8,
				'cod_municipio' => 176,
				'DC' => 4,
				'nombre' => 'Pujalt',
			),
			89 => 
			array (
				'id' => 6090,
				'id_provincia' => 9,
				'cod_municipio' => 176,
				'DC' => 7,
				'nombre' => 'Hurones',
			),
			90 => 
			array (
				'id' => 6091,
				'id_provincia' => 10,
				'cod_municipio' => 176,
				'DC' => 1,
				'nombre' => 'Serrejón',
			),
			91 => 
			array (
				'id' => 6092,
				'id_provincia' => 16,
				'cod_municipio' => 176,
				'DC' => 0,
				'nombre' => 'Rada de Haro',
			),
			92 => 
			array (
				'id' => 6093,
				'id_provincia' => 17,
				'cod_municipio' => 176,
				'DC' => 6,
				'nombre' => 'Sant Mori',
			),
			93 => 
			array (
				'id' => 6094,
				'id_provincia' => 18,
				'cod_municipio' => 176,
				'DC' => 2,
				'nombre' => 'Soportújar',
			),
			94 => 
			array (
				'id' => 6095,
				'id_provincia' => 19,
				'cod_municipio' => 176,
				'DC' => 5,
				'nombre' => 'Mazuecos',
			),
			95 => 
			array (
				'id' => 6096,
				'id_provincia' => 22,
				'cod_municipio' => 176,
				'DC' => 1,
				'nombre' => 'Peraltilla',
			),
			96 => 
			array (
				'id' => 6097,
				'id_provincia' => 24,
				'cod_municipio' => 176,
				'DC' => 2,
				'nombre' => 'Valdefuentes del Páramo',
			),
			97 => 
			array (
				'id' => 6098,
				'id_provincia' => 25,
				'cod_municipio' => 176,
				'DC' => 5,
				'nombre' => 'Preixana',
			),
			98 => 
			array (
				'id' => 6099,
				'id_provincia' => 26,
				'cod_municipio' => 176,
				'DC' => 8,
				'nombre' => 'Villaverde de Rioja',
			),
			99 => 
			array (
				'id' => 6100,
				'id_provincia' => 28,
				'cod_municipio' => 176,
				'DC' => 0,
				'nombre' => 'Villanueva de la Cañada',
			),
			100 => 
			array (
				'id' => 6101,
				'id_provincia' => 31,
				'cod_municipio' => 176,
				'DC' => 4,
				'nombre' => 'Murchante',
			),
			101 => 
			array (
				'id' => 6102,
				'id_provincia' => 34,
				'cod_municipio' => 176,
				'DC' => 0,
				'nombre' => 'Sotobañado y Priorato',
			),
			102 => 
			array (
				'id' => 6103,
				'id_provincia' => 37,
				'cod_municipio' => 176,
				'DC' => 2,
				'nombre' => 'Madroñal',
			),
			103 => 
			array (
				'id' => 6104,
				'id_provincia' => 40,
				'cod_municipio' => 176,
				'DC' => 5,
				'nombre' => 'Samboal',
			),
			104 => 
			array (
				'id' => 6105,
				'id_provincia' => 42,
				'cod_municipio' => 176,
				'DC' => 7,
				'nombre' => 'Tajahuerce',
			),
			105 => 
			array (
				'id' => 6106,
				'id_provincia' => 43,
				'cod_municipio' => 176,
				'DC' => 3,
				'nombre' => 'Vimbodí i Poblet',
			),
			106 => 
			array (
				'id' => 6107,
				'id_provincia' => 44,
				'cod_municipio' => 176,
				'DC' => 8,
				'nombre' => 'Palomar de Arroyos',
			),
			107 => 
			array (
				'id' => 6108,
				'id_provincia' => 45,
				'cod_municipio' => 176,
				'DC' => 1,
				'nombre' => 'Ugena',
			),
			108 => 
			array (
				'id' => 6109,
				'id_provincia' => 46,
				'cod_municipio' => 176,
				'DC' => 4,
				'nombre' => 'Montroy',
			),
			109 => 
			array (
				'id' => 6110,
				'id_provincia' => 47,
				'cod_municipio' => 176,
				'DC' => 0,
				'nombre' => 'Unión de Campos, La',
			),
			110 => 
			array (
				'id' => 6111,
				'id_provincia' => 49,
				'cod_municipio' => 176,
				'DC' => 9,
				'nombre' => 'Riofrío de Aliste',
			),
			111 => 
			array (
				'id' => 6112,
				'id_provincia' => 50,
				'cod_municipio' => 176,
				'DC' => 2,
				'nombre' => 'Morata de Jiloca',
			),
			112 => 
			array (
				'id' => 6113,
				'id_provincia' => 5,
				'cod_municipio' => 177,
				'DC' => 5,
				'nombre' => 'Pajares de Adaja',
			),
			113 => 
			array (
				'id' => 6114,
				'id_provincia' => 8,
				'cod_municipio' => 177,
				'DC' => 0,
				'nombre' => 'Quar, La',
			),
			114 => 
			array (
				'id' => 6115,
				'id_provincia' => 9,
				'cod_municipio' => 177,
				'DC' => 3,
				'nombre' => 'Ibeas de Juarros',
			),
			115 => 
			array (
				'id' => 6116,
				'id_provincia' => 10,
				'cod_municipio' => 177,
				'DC' => 7,
				'nombre' => 'Sierra de Fuentes',
			),
			116 => 
			array (
				'id' => 6117,
				'id_provincia' => 16,
				'cod_municipio' => 177,
				'DC' => 6,
				'nombre' => 'Reíllo',
			),
			117 => 
			array (
				'id' => 6118,
				'id_provincia' => 17,
				'cod_municipio' => 177,
				'DC' => 2,
				'nombre' => 'Sant Pau de Segúries',
			),
			118 => 
			array (
				'id' => 6119,
				'id_provincia' => 18,
				'cod_municipio' => 177,
				'DC' => 8,
				'nombre' => 'Sorvilán',
			),
			119 => 
			array (
				'id' => 6120,
				'id_provincia' => 19,
				'cod_municipio' => 177,
				'DC' => 1,
				'nombre' => 'Medranda',
			),
			120 => 
			array (
				'id' => 6121,
				'id_provincia' => 22,
				'cod_municipio' => 177,
				'DC' => 7,
				'nombre' => 'Perarrúa',
			),
			121 => 
			array (
				'id' => 6122,
				'id_provincia' => 24,
				'cod_municipio' => 177,
				'DC' => 8,
				'nombre' => 'Valdelugueros',
			),
			122 => 
			array (
				'id' => 6123,
				'id_provincia' => 25,
				'cod_municipio' => 177,
				'DC' => 1,
				'nombre' => 'Preixens',
			),
			123 => 
			array (
				'id' => 6124,
				'id_provincia' => 26,
				'cod_municipio' => 177,
				'DC' => 4,
				'nombre' => 'Villoslada de Cameros',
			),
			124 => 
			array (
				'id' => 6125,
				'id_provincia' => 28,
				'cod_municipio' => 177,
				'DC' => 6,
				'nombre' => 'Villanueva del Pardillo',
			),
			125 => 
			array (
				'id' => 6126,
				'id_provincia' => 31,
				'cod_municipio' => 177,
				'DC' => 0,
				'nombre' => 'Murieta',
			),
			126 => 
			array (
				'id' => 6127,
				'id_provincia' => 34,
				'cod_municipio' => 177,
				'DC' => 6,
				'nombre' => 'Soto de Cerrato',
			),
			127 => 
			array (
				'id' => 6128,
				'id_provincia' => 37,
				'cod_municipio' => 177,
				'DC' => 8,
				'nombre' => 'Maíllo, El',
			),
			128 => 
			array (
				'id' => 6129,
				'id_provincia' => 40,
				'cod_municipio' => 177,
				'DC' => 1,
				'nombre' => 'San Cristóbal de Cuéllar',
			),
			129 => 
			array (
				'id' => 6130,
				'id_provincia' => 42,
				'cod_municipio' => 177,
				'DC' => 3,
				'nombre' => 'Tajueco',
			),
			130 => 
			array (
				'id' => 6131,
				'id_provincia' => 43,
				'cod_municipio' => 177,
				'DC' => 9,
				'nombre' => 'Vinebre',
			),
			131 => 
			array (
				'id' => 6132,
				'id_provincia' => 44,
				'cod_municipio' => 177,
				'DC' => 4,
				'nombre' => 'Pancrudo',
			),
			132 => 
			array (
				'id' => 6133,
				'id_provincia' => 45,
				'cod_municipio' => 177,
				'DC' => 7,
				'nombre' => 'Urda',
			),
			133 => 
			array (
				'id' => 6134,
				'id_provincia' => 46,
				'cod_municipio' => 177,
				'DC' => 0,
				'nombre' => 'Museros',
			),
			134 => 
			array (
				'id' => 6135,
				'id_provincia' => 47,
				'cod_municipio' => 177,
				'DC' => 6,
				'nombre' => 'Urones de Castroponce',
			),
			135 => 
			array (
				'id' => 6136,
				'id_provincia' => 49,
				'cod_municipio' => 177,
				'DC' => 5,
				'nombre' => 'Rionegro del Puente',
			),
			136 => 
			array (
				'id' => 6137,
				'id_provincia' => 50,
				'cod_municipio' => 177,
				'DC' => 8,
				'nombre' => 'Morés',
			),
			137 => 
			array (
				'id' => 6138,
				'id_provincia' => 5,
				'cod_municipio' => 178,
				'DC' => 1,
				'nombre' => 'Palacios de Goda',
			),
			138 => 
			array (
				'id' => 6139,
				'id_provincia' => 8,
				'cod_municipio' => 178,
				'DC' => 6,
				'nombre' => 'Rajadell',
			),
			139 => 
			array (
				'id' => 6140,
				'id_provincia' => 9,
				'cod_municipio' => 178,
				'DC' => 9,
				'nombre' => 'Ibrillos',
			),
			140 => 
			array (
				'id' => 6141,
				'id_provincia' => 10,
				'cod_municipio' => 178,
				'DC' => 3,
				'nombre' => 'Talaván',
			),
			141 => 
			array (
				'id' => 6142,
				'id_provincia' => 17,
				'cod_municipio' => 178,
				'DC' => 8,
				'nombre' => 'Sant Pere Pescador',
			),
			142 => 
			array (
				'id' => 6143,
				'id_provincia' => 18,
				'cod_municipio' => 178,
				'DC' => 4,
				'nombre' => 'Torre-Cardela',
			),
			143 => 
			array (
				'id' => 6144,
				'id_provincia' => 19,
				'cod_municipio' => 178,
				'DC' => 7,
				'nombre' => 'Megina',
			),
			144 => 
			array (
				'id' => 6145,
				'id_provincia' => 22,
				'cod_municipio' => 178,
				'DC' => 3,
				'nombre' => 'Pertusa',
			),
			145 => 
			array (
				'id' => 6146,
				'id_provincia' => 24,
				'cod_municipio' => 178,
				'DC' => 4,
				'nombre' => 'Valdemora',
			),
			146 => 
			array (
				'id' => 6147,
				'id_provincia' => 26,
				'cod_municipio' => 178,
				'DC' => 0,
				'nombre' => 'Viniegra de Abajo',
			),
			147 => 
			array (
				'id' => 6148,
				'id_provincia' => 28,
				'cod_municipio' => 178,
				'DC' => 2,
				'nombre' => 'Villanueva de Perales',
			),
			148 => 
			array (
				'id' => 6149,
				'id_provincia' => 31,
				'cod_municipio' => 178,
				'DC' => 6,
				'nombre' => 'Murillo el Cuende',
			),
			149 => 
			array (
				'id' => 6150,
				'id_provincia' => 34,
				'cod_municipio' => 178,
				'DC' => 2,
				'nombre' => 'Tabanera de Cerrato',
			),
			150 => 
			array (
				'id' => 6151,
				'id_provincia' => 37,
				'cod_municipio' => 178,
				'DC' => 4,
				'nombre' => 'Malpartida',
			),
			151 => 
			array (
				'id' => 6152,
				'id_provincia' => 40,
				'cod_municipio' => 178,
				'DC' => 7,
				'nombre' => 'San Cristóbal de la Vega',
			),
			152 => 
			array (
				'id' => 6153,
				'id_provincia' => 42,
				'cod_municipio' => 178,
				'DC' => 9,
				'nombre' => 'Talveila',
			),
			153 => 
			array (
				'id' => 6154,
				'id_provincia' => 43,
				'cod_municipio' => 178,
				'DC' => 5,
				'nombre' => 'Vinyols i els Arcs',
			),
			154 => 
			array (
				'id' => 6155,
				'id_provincia' => 44,
				'cod_municipio' => 178,
				'DC' => 0,
				'nombre' => 'Parras de Castellote, Las',
			),
			155 => 
			array (
				'id' => 6156,
				'id_provincia' => 46,
				'cod_municipio' => 178,
				'DC' => 6,
				'nombre' => 'Náquera',
			),
			156 => 
			array (
				'id' => 6157,
				'id_provincia' => 47,
				'cod_municipio' => 178,
				'DC' => 2,
				'nombre' => 'Urueña',
			),
			157 => 
			array (
				'id' => 6158,
				'id_provincia' => 49,
				'cod_municipio' => 178,
				'DC' => 1,
				'nombre' => 'Roales',
			),
			158 => 
			array (
				'id' => 6159,
				'id_provincia' => 50,
				'cod_municipio' => 178,
				'DC' => 4,
				'nombre' => 'Moros',
			),
			159 => 
			array (
				'id' => 6160,
				'id_provincia' => 5,
				'cod_municipio' => 179,
				'DC' => 4,
				'nombre' => 'Papatrigo',
			),
			160 => 
			array (
				'id' => 6161,
				'id_provincia' => 8,
				'cod_municipio' => 179,
				'DC' => 9,
				'nombre' => 'Rellinars',
			),
			161 => 
			array (
				'id' => 6162,
				'id_provincia' => 9,
				'cod_municipio' => 179,
				'DC' => 2,
				'nombre' => 'Iglesiarrubia',
			),
			162 => 
			array (
				'id' => 6163,
				'id_provincia' => 10,
				'cod_municipio' => 179,
				'DC' => 6,
				'nombre' => 'Talaveruela de la Vera',
			),
			163 => 
			array (
				'id' => 6164,
				'id_provincia' => 18,
				'cod_municipio' => 179,
				'DC' => 7,
				'nombre' => 'Torvizcón',
			),
			164 => 
			array (
				'id' => 6165,
				'id_provincia' => 19,
				'cod_municipio' => 179,
				'DC' => 0,
				'nombre' => 'Membrillera',
			),
			165 => 
			array (
				'id' => 6166,
				'id_provincia' => 24,
				'cod_municipio' => 179,
				'DC' => 7,
				'nombre' => 'Valdepiélago',
			),
			166 => 
			array (
				'id' => 6167,
				'id_provincia' => 25,
				'cod_municipio' => 179,
				'DC' => 0,
				'nombre' => 'Prullans',
			),
			167 => 
			array (
				'id' => 6168,
				'id_provincia' => 26,
				'cod_municipio' => 179,
				'DC' => 3,
				'nombre' => 'Viniegra de Arriba',
			),
			168 => 
			array (
				'id' => 6169,
				'id_provincia' => 28,
				'cod_municipio' => 179,
				'DC' => 5,
				'nombre' => 'Villar del Olmo',
			),
			169 => 
			array (
				'id' => 6170,
				'id_provincia' => 31,
				'cod_municipio' => 179,
				'DC' => 9,
				'nombre' => 'Murillo el Fruto',
			),
			170 => 
			array (
				'id' => 6171,
				'id_provincia' => 34,
				'cod_municipio' => 179,
				'DC' => 5,
				'nombre' => 'Tabanera de Valdavia',
			),
			171 => 
			array (
				'id' => 6172,
				'id_provincia' => 37,
				'cod_municipio' => 179,
				'DC' => 7,
				'nombre' => 'Mancera de Abajo',
			),
			172 => 
			array (
				'id' => 6173,
				'id_provincia' => 40,
				'cod_municipio' => 179,
				'DC' => 0,
				'nombre' => 'Sanchonuño',
			),
			173 => 
			array (
				'id' => 6174,
				'id_provincia' => 44,
				'cod_municipio' => 179,
				'DC' => 3,
				'nombre' => 'Peñarroya de Tastavins',
			),
			174 => 
			array (
				'id' => 6175,
				'id_provincia' => 45,
				'cod_municipio' => 179,
				'DC' => 6,
				'nombre' => 'Valdeverdeja',
			),
			175 => 
			array (
				'id' => 6176,
				'id_provincia' => 46,
				'cod_municipio' => 179,
				'DC' => 9,
				'nombre' => 'Navarrés',
			),
			176 => 
			array (
				'id' => 6177,
				'id_provincia' => 47,
				'cod_municipio' => 179,
				'DC' => 5,
				'nombre' => 'Valbuena de Duero',
			),
			177 => 
			array (
				'id' => 6178,
				'id_provincia' => 49,
				'cod_municipio' => 179,
				'DC' => 4,
				'nombre' => 'Robleda-Cervantes',
			),
			178 => 
			array (
				'id' => 6179,
				'id_provincia' => 50,
				'cod_municipio' => 179,
				'DC' => 7,
				'nombre' => 'Moyuela',
			),
			179 => 
			array (
				'id' => 6180,
				'id_provincia' => 5,
				'cod_municipio' => 180,
				'DC' => 8,
				'nombre' => 'Parral, El',
			),
			180 => 
			array (
				'id' => 6181,
				'id_provincia' => 8,
				'cod_municipio' => 180,
				'DC' => 3,
				'nombre' => 'Ripollet',
			),
			181 => 
			array (
				'id' => 6182,
				'id_provincia' => 9,
				'cod_municipio' => 180,
				'DC' => 6,
				'nombre' => 'Iglesias',
			),
			182 => 
			array (
				'id' => 6183,
				'id_provincia' => 10,
				'cod_municipio' => 180,
				'DC' => 0,
				'nombre' => 'Talayuela',
			),
			183 => 
			array (
				'id' => 6184,
				'id_provincia' => 17,
				'cod_municipio' => 180,
				'DC' => 5,
				'nombre' => 'Santa Coloma de Farners',
			),
			184 => 
			array (
				'id' => 6185,
				'id_provincia' => 18,
				'cod_municipio' => 180,
				'DC' => 1,
				'nombre' => 'Trevélez',
			),
			185 => 
			array (
				'id' => 6186,
				'id_provincia' => 24,
				'cod_municipio' => 180,
				'DC' => 1,
				'nombre' => 'Valdepolo',
			),
			186 => 
			array (
				'id' => 6187,
				'id_provincia' => 25,
				'cod_municipio' => 180,
				'DC' => 4,
				'nombre' => 'Puiggròs',
			),
			187 => 
			array (
				'id' => 6188,
				'id_provincia' => 26,
				'cod_municipio' => 180,
				'DC' => 7,
				'nombre' => 'Zarratón',
			),
			188 => 
			array (
				'id' => 6189,
				'id_provincia' => 28,
				'cod_municipio' => 180,
				'DC' => 9,
				'nombre' => 'Villarejo de Salvanés',
			),
			189 => 
			array (
				'id' => 6190,
				'id_provincia' => 31,
				'cod_municipio' => 180,
				'DC' => 3,
				'nombre' => 'Muruzábal',
			),
			190 => 
			array (
				'id' => 6191,
				'id_provincia' => 34,
				'cod_municipio' => 180,
				'DC' => 9,
				'nombre' => 'Támara de Campos',
			),
			191 => 
			array (
				'id' => 6192,
				'id_provincia' => 37,
				'cod_municipio' => 180,
				'DC' => 1,
				'nombre' => 'Manzano, El',
			),
			192 => 
			array (
				'id' => 6193,
				'id_provincia' => 40,
				'cod_municipio' => 180,
				'DC' => 4,
				'nombre' => 'Sangarcía',
			),
			193 => 
			array (
				'id' => 6194,
				'id_provincia' => 44,
				'cod_municipio' => 180,
				'DC' => 7,
				'nombre' => 'Peracense',
			),
			194 => 
			array (
				'id' => 6195,
				'id_provincia' => 45,
				'cod_municipio' => 180,
				'DC' => 0,
				'nombre' => 'Valmojado',
			),
			195 => 
			array (
				'id' => 6196,
				'id_provincia' => 46,
				'cod_municipio' => 180,
				'DC' => 3,
				'nombre' => 'Novelé/Novetlè',
			),
			196 => 
			array (
				'id' => 6197,
				'id_provincia' => 47,
				'cod_municipio' => 180,
				'DC' => 9,
				'nombre' => 'Valdearcos de la Vega',
			),
			197 => 
			array (
				'id' => 6198,
				'id_provincia' => 49,
				'cod_municipio' => 180,
				'DC' => 8,
				'nombre' => 'Roelos de Sayago',
			),
			198 => 
			array (
				'id' => 6199,
				'id_provincia' => 50,
				'cod_municipio' => 180,
				'DC' => 1,
				'nombre' => 'Mozota',
			),
			199 => 
			array (
				'id' => 6200,
				'id_provincia' => 5,
				'cod_municipio' => 181,
				'DC' => 5,
				'nombre' => 'Pascualcobo',
			),
			200 => 
			array (
				'id' => 6201,
				'id_provincia' => 8,
				'cod_municipio' => 181,
				'DC' => 0,
				'nombre' => 'Roca del Vallès, La',
			),
			201 => 
			array (
				'id' => 6202,
				'id_provincia' => 9,
				'cod_municipio' => 181,
				'DC' => 3,
				'nombre' => 'Isar',
			),
			202 => 
			array (
				'id' => 6203,
				'id_provincia' => 10,
				'cod_municipio' => 181,
				'DC' => 7,
				'nombre' => 'Tejeda de Tiétar',
			),
			203 => 
			array (
				'id' => 6204,
				'id_provincia' => 16,
				'cod_municipio' => 181,
				'DC' => 6,
				'nombre' => 'Rozalén del Monte',
			),
			204 => 
			array (
				'id' => 6205,
				'id_provincia' => 17,
				'cod_municipio' => 181,
				'DC' => 2,
				'nombre' => 'Santa Cristina d\'Aro',
			),
			205 => 
			array (
				'id' => 6206,
				'id_provincia' => 18,
				'cod_municipio' => 181,
				'DC' => 8,
				'nombre' => 'Turón',
			),
			206 => 
			array (
				'id' => 6207,
				'id_provincia' => 19,
				'cod_municipio' => 181,
				'DC' => 1,
				'nombre' => 'Miedes de Atienza',
			),
			207 => 
			array (
				'id' => 6208,
				'id_provincia' => 22,
				'cod_municipio' => 181,
				'DC' => 7,
				'nombre' => 'Piracés',
			),
			208 => 
			array (
				'id' => 6209,
				'id_provincia' => 24,
				'cod_municipio' => 181,
				'DC' => 8,
				'nombre' => 'Valderas',
			),
			209 => 
			array (
				'id' => 6210,
				'id_provincia' => 25,
				'cod_municipio' => 181,
				'DC' => 1,
				'nombre' => 'Puigverd d\'Agramunt',
			),
			210 => 
			array (
				'id' => 6211,
				'id_provincia' => 26,
				'cod_municipio' => 181,
				'DC' => 4,
				'nombre' => 'Zarzosa',
			),
			211 => 
			array (
				'id' => 6212,
				'id_provincia' => 28,
				'cod_municipio' => 181,
				'DC' => 6,
				'nombre' => 'Villaviciosa de Odón',
			),
			212 => 
			array (
				'id' => 6213,
				'id_provincia' => 31,
				'cod_municipio' => 181,
				'DC' => 0,
				'nombre' => 'Navascués/Nabaskoze',
			),
			213 => 
			array (
				'id' => 6214,
				'id_provincia' => 34,
				'cod_municipio' => 181,
				'DC' => 6,
				'nombre' => 'Tariego de Cerrato',
			),
			214 => 
			array (
				'id' => 6215,
				'id_provincia' => 37,
				'cod_municipio' => 181,
				'DC' => 8,
				'nombre' => 'Martiago',
			),
			215 => 
			array (
				'id' => 6216,
				'id_provincia' => 40,
				'cod_municipio' => 181,
				'DC' => 1,
				'nombre' => 'Real Sitio de San Ildefonso',
			),
			216 => 
			array (
				'id' => 6217,
				'id_provincia' => 42,
				'cod_municipio' => 181,
				'DC' => 3,
				'nombre' => 'Tardelcuende',
			),
			217 => 
			array (
				'id' => 6218,
				'id_provincia' => 44,
				'cod_municipio' => 181,
				'DC' => 4,
				'nombre' => 'Peralejos',
			),
			218 => 
			array (
				'id' => 6219,
				'id_provincia' => 45,
				'cod_municipio' => 181,
				'DC' => 7,
				'nombre' => 'Velada',
			),
			219 => 
			array (
				'id' => 6220,
				'id_provincia' => 46,
				'cod_municipio' => 181,
				'DC' => 0,
				'nombre' => 'Oliva',
			),
			220 => 
			array (
				'id' => 6221,
				'id_provincia' => 47,
				'cod_municipio' => 181,
				'DC' => 6,
				'nombre' => 'Valdenebro de los Valles',
			),
			221 => 
			array (
				'id' => 6222,
				'id_provincia' => 49,
				'cod_municipio' => 181,
				'DC' => 5,
				'nombre' => 'Rosinos de la Requejada',
			),
			222 => 
			array (
				'id' => 6223,
				'id_provincia' => 50,
				'cod_municipio' => 181,
				'DC' => 8,
				'nombre' => 'Muel',
			),
			223 => 
			array (
				'id' => 6224,
				'id_provincia' => 5,
				'cod_municipio' => 182,
				'DC' => 0,
				'nombre' => 'Pedro Bernardo',
			),
			224 => 
			array (
				'id' => 6225,
				'id_provincia' => 8,
				'cod_municipio' => 182,
				'DC' => 5,
				'nombre' => 'Pont de Vilomara i Rocafort, El',
			),
			225 => 
			array (
				'id' => 6226,
				'id_provincia' => 9,
				'cod_municipio' => 182,
				'DC' => 8,
				'nombre' => 'Itero del Castillo',
			),
			226 => 
			array (
				'id' => 6227,
				'id_provincia' => 10,
				'cod_municipio' => 182,
				'DC' => 2,
				'nombre' => 'Toril',
			),
			227 => 
			array (
				'id' => 6228,
				'id_provincia' => 17,
				'cod_municipio' => 182,
				'DC' => 7,
				'nombre' => 'Santa Llogaia d\'Àlguema',
			),
			228 => 
			array (
				'id' => 6229,
				'id_provincia' => 18,
				'cod_municipio' => 182,
				'DC' => 3,
				'nombre' => 'Ugíjar',
			),
			229 => 
			array (
				'id' => 6230,
				'id_provincia' => 19,
				'cod_municipio' => 182,
				'DC' => 6,
				'nombre' => 'Mierla, La',
			),
			230 => 
			array (
				'id' => 6231,
				'id_provincia' => 22,
				'cod_municipio' => 182,
				'DC' => 2,
				'nombre' => 'Plan',
			),
			231 => 
			array (
				'id' => 6232,
				'id_provincia' => 24,
				'cod_municipio' => 182,
				'DC' => 3,
				'nombre' => 'Valderrey',
			),
			232 => 
			array (
				'id' => 6233,
				'id_provincia' => 25,
				'cod_municipio' => 182,
				'DC' => 6,
				'nombre' => 'Puigverd de Lleida',
			),
			233 => 
			array (
				'id' => 6234,
				'id_provincia' => 28,
				'cod_municipio' => 182,
				'DC' => 1,
				'nombre' => 'Villavieja del Lozoya',
			),
			234 => 
			array (
				'id' => 6235,
				'id_provincia' => 31,
				'cod_municipio' => 182,
				'DC' => 5,
				'nombre' => 'Nazar',
			),
			235 => 
			array (
				'id' => 6236,
				'id_provincia' => 34,
				'cod_municipio' => 182,
				'DC' => 1,
				'nombre' => 'Torquemada',
			),
			236 => 
			array (
				'id' => 6237,
				'id_provincia' => 37,
				'cod_municipio' => 182,
				'DC' => 3,
				'nombre' => 'Martinamor',
			),
			237 => 
			array (
				'id' => 6238,
				'id_provincia' => 40,
				'cod_municipio' => 182,
				'DC' => 6,
				'nombre' => 'San Martín y Mudrián',
			),
			238 => 
			array (
				'id' => 6239,
				'id_provincia' => 42,
				'cod_municipio' => 182,
				'DC' => 8,
				'nombre' => 'Taroda',
			),
			239 => 
			array (
				'id' => 6240,
				'id_provincia' => 44,
				'cod_municipio' => 182,
				'DC' => 9,
				'nombre' => 'Perales del Alfambra',
			),
			240 => 
			array (
				'id' => 6241,
				'id_provincia' => 45,
				'cod_municipio' => 182,
				'DC' => 2,
				'nombre' => 'Ventas con Peña Aguilera, Las',
			),
			241 => 
			array (
				'id' => 6242,
				'id_provincia' => 46,
				'cod_municipio' => 182,
				'DC' => 5,
				'nombre' => 'Olocau',
			),
			242 => 
			array (
				'id' => 6243,
				'id_provincia' => 47,
				'cod_municipio' => 182,
				'DC' => 1,
				'nombre' => 'Valdestillas',
			),
			243 => 
			array (
				'id' => 6244,
				'id_provincia' => 50,
				'cod_municipio' => 182,
				'DC' => 3,
				'nombre' => 'Muela, La',
			),
			244 => 
			array (
				'id' => 6245,
				'id_provincia' => 5,
				'cod_municipio' => 183,
				'DC' => 6,
				'nombre' => 'Pedro-Rodríguez',
			),
			245 => 
			array (
				'id' => 6246,
				'id_provincia' => 8,
				'cod_municipio' => 183,
				'DC' => 1,
				'nombre' => 'Roda de Ter',
			),
			246 => 
			array (
				'id' => 6247,
				'id_provincia' => 9,
				'cod_municipio' => 183,
				'DC' => 4,
				'nombre' => 'Jaramillo de la Fuente',
			),
			247 => 
			array (
				'id' => 6248,
				'id_provincia' => 10,
				'cod_municipio' => 183,
				'DC' => 8,
				'nombre' => 'Tornavacas',
			),
			248 => 
			array (
				'id' => 6249,
				'id_provincia' => 17,
				'cod_municipio' => 183,
				'DC' => 3,
				'nombre' => 'Sant Aniol de Finestres',
			),
			249 => 
			array (
				'id' => 6250,
				'id_provincia' => 18,
				'cod_municipio' => 183,
				'DC' => 9,
				'nombre' => 'Válor',
			),
			250 => 
			array (
				'id' => 6251,
				'id_provincia' => 19,
				'cod_municipio' => 183,
				'DC' => 2,
				'nombre' => 'Milmarcos',
			),
			251 => 
			array (
				'id' => 6252,
				'id_provincia' => 24,
				'cod_municipio' => 183,
				'DC' => 9,
				'nombre' => 'Valderrueda',
			),
			252 => 
			array (
				'id' => 6253,
				'id_provincia' => 25,
				'cod_municipio' => 183,
				'DC' => 2,
				'nombre' => 'Rialp',
			),
			253 => 
			array (
				'id' => 6254,
				'id_provincia' => 26,
				'cod_municipio' => 183,
				'DC' => 5,
				'nombre' => 'Zorraquín',
			),
			254 => 
			array (
				'id' => 6255,
				'id_provincia' => 28,
				'cod_municipio' => 183,
				'DC' => 7,
				'nombre' => 'Zarzalejo',
			),
			255 => 
			array (
				'id' => 6256,
				'id_provincia' => 31,
				'cod_municipio' => 183,
				'DC' => 1,
				'nombre' => 'Obanos',
			),
			256 => 
			array (
				'id' => 6257,
				'id_provincia' => 37,
				'cod_municipio' => 183,
				'DC' => 9,
				'nombre' => 'Martín de Yeltes',
			),
			257 => 
			array (
				'id' => 6258,
				'id_provincia' => 40,
				'cod_municipio' => 183,
				'DC' => 2,
				'nombre' => 'San Miguel de Bernuy',
			),
			258 => 
			array (
				'id' => 6259,
				'id_provincia' => 42,
				'cod_municipio' => 183,
				'DC' => 4,
				'nombre' => 'Tejado',
			),
			259 => 
			array (
				'id' => 6260,
				'id_provincia' => 44,
				'cod_municipio' => 183,
				'DC' => 5,
				'nombre' => 'Pitarque',
			),
			260 => 
			array (
				'id' => 6261,
				'id_provincia' => 45,
				'cod_municipio' => 183,
				'DC' => 8,
				'nombre' => 'Ventas de Retamosa, Las',
			),
			261 => 
			array (
				'id' => 6262,
				'id_provincia' => 46,
				'cod_municipio' => 183,
				'DC' => 1,
				'nombre' => 'Olleria, l\'',
			),
			262 => 
			array (
				'id' => 6263,
				'id_provincia' => 47,
				'cod_municipio' => 183,
				'DC' => 7,
				'nombre' => 'Valdunquillo',
			),
			263 => 
			array (
				'id' => 6264,
				'id_provincia' => 49,
				'cod_municipio' => 183,
				'DC' => 6,
				'nombre' => 'Salce',
			),
			264 => 
			array (
				'id' => 6265,
				'id_provincia' => 50,
				'cod_municipio' => 183,
				'DC' => 9,
				'nombre' => 'Munébrega',
			),
			265 => 
			array (
				'id' => 6266,
				'id_provincia' => 5,
				'cod_municipio' => 184,
				'DC' => 1,
				'nombre' => 'Peguerinos',
			),
			266 => 
			array (
				'id' => 6267,
				'id_provincia' => 8,
				'cod_municipio' => 184,
				'DC' => 6,
				'nombre' => 'Rubí',
			),
			267 => 
			array (
				'id' => 6268,
				'id_provincia' => 9,
				'cod_municipio' => 184,
				'DC' => 9,
				'nombre' => 'Jaramillo Quemado',
			),
			268 => 
			array (
				'id' => 6269,
				'id_provincia' => 10,
				'cod_municipio' => 184,
				'DC' => 3,
				'nombre' => 'Torno, El',
			),
			269 => 
			array (
				'id' => 6270,
				'id_provincia' => 17,
				'cod_municipio' => 184,
				'DC' => 8,
				'nombre' => 'Santa Pau',
			),
			270 => 
			array (
				'id' => 6271,
				'id_provincia' => 18,
				'cod_municipio' => 184,
				'DC' => 4,
				'nombre' => 'Vélez de Benaudalla',
			),
			271 => 
			array (
				'id' => 6272,
				'id_provincia' => 19,
				'cod_municipio' => 184,
				'DC' => 7,
				'nombre' => 'Millana',
			),
			272 => 
			array (
				'id' => 6273,
				'id_provincia' => 22,
				'cod_municipio' => 184,
				'DC' => 3,
				'nombre' => 'Poleñino',
			),
			273 => 
			array (
				'id' => 6274,
				'id_provincia' => 24,
				'cod_municipio' => 184,
				'DC' => 4,
				'nombre' => 'Valdesamario',
			),
			274 => 
			array (
				'id' => 6275,
				'id_provincia' => 31,
				'cod_municipio' => 184,
				'DC' => 6,
				'nombre' => 'Oco',
			),
			275 => 
			array (
				'id' => 6276,
				'id_provincia' => 34,
				'cod_municipio' => 184,
				'DC' => 2,
				'nombre' => 'Torremormojón',
			),
			276 => 
			array (
				'id' => 6277,
				'id_provincia' => 37,
				'cod_municipio' => 184,
				'DC' => 4,
				'nombre' => 'Masueco',
			),
			277 => 
			array (
				'id' => 6278,
				'id_provincia' => 40,
				'cod_municipio' => 184,
				'DC' => 7,
				'nombre' => 'San Pedro de Gaíllos',
			),
			278 => 
			array (
				'id' => 6279,
				'id_provincia' => 42,
				'cod_municipio' => 184,
				'DC' => 9,
				'nombre' => 'Torlengua',
			),
			279 => 
			array (
				'id' => 6280,
				'id_provincia' => 44,
				'cod_municipio' => 184,
				'DC' => 0,
				'nombre' => 'Plou',
			),
			280 => 
			array (
				'id' => 6281,
				'id_provincia' => 45,
				'cod_municipio' => 184,
				'DC' => 3,
				'nombre' => 'Ventas de San Julián, Las',
			),
			281 => 
			array (
				'id' => 6282,
				'id_provincia' => 46,
				'cod_municipio' => 184,
				'DC' => 6,
				'nombre' => 'Ontinyent',
			),
			282 => 
			array (
				'id' => 6283,
				'id_provincia' => 47,
				'cod_municipio' => 184,
				'DC' => 2,
				'nombre' => 'Valoria la Buena',
			),
			283 => 
			array (
				'id' => 6284,
				'id_provincia' => 49,
				'cod_municipio' => 184,
				'DC' => 1,
				'nombre' => 'Samir de los Caños',
			),
			284 => 
			array (
				'id' => 6285,
				'id_provincia' => 50,
				'cod_municipio' => 184,
				'DC' => 4,
				'nombre' => 'Murero',
			),
			285 => 
			array (
				'id' => 6286,
				'id_provincia' => 5,
				'cod_municipio' => 185,
				'DC' => 4,
				'nombre' => 'Peñalba de Ávila',
			),
			286 => 
			array (
				'id' => 6287,
				'id_provincia' => 8,
				'cod_municipio' => 185,
				'DC' => 9,
				'nombre' => 'Rubió',
			),
			287 => 
			array (
				'id' => 6288,
				'id_provincia' => 10,
				'cod_municipio' => 185,
				'DC' => 6,
				'nombre' => 'Torrecilla de los Ángeles',
			),
			288 => 
			array (
				'id' => 6289,
				'id_provincia' => 16,
				'cod_municipio' => 185,
				'DC' => 5,
				'nombre' => 'Saceda-Trasierra',
			),
			289 => 
			array (
				'id' => 6290,
				'id_provincia' => 17,
				'cod_municipio' => 185,
				'DC' => 1,
				'nombre' => 'Sant Joan les Fonts',
			),
			290 => 
			array (
				'id' => 6291,
				'id_provincia' => 18,
				'cod_municipio' => 185,
				'DC' => 7,
				'nombre' => 'Ventas de Huelma',
			),
			291 => 
			array (
				'id' => 6292,
				'id_provincia' => 19,
				'cod_municipio' => 185,
				'DC' => 0,
				'nombre' => 'Miñosa, La',
			),
			292 => 
			array (
				'id' => 6293,
				'id_provincia' => 24,
				'cod_municipio' => 185,
				'DC' => 7,
				'nombre' => 'Val de San Lorenzo',
			),
			293 => 
			array (
				'id' => 6294,
				'id_provincia' => 25,
				'cod_municipio' => 185,
				'DC' => 0,
				'nombre' => 'Ribera d\'Urgellet',
			),
			294 => 
			array (
				'id' => 6295,
				'id_provincia' => 31,
				'cod_municipio' => 185,
				'DC' => 9,
				'nombre' => 'Ochagavía/Otsagabia',
			),
			295 => 
			array (
				'id' => 6296,
				'id_provincia' => 34,
				'cod_municipio' => 185,
				'DC' => 5,
				'nombre' => 'Triollo',
			),
			296 => 
			array (
				'id' => 6297,
				'id_provincia' => 37,
				'cod_municipio' => 185,
				'DC' => 7,
				'nombre' => 'Castellanos de Villiquera',
			),
			297 => 
			array (
				'id' => 6298,
				'id_provincia' => 40,
				'cod_municipio' => 185,
				'DC' => 0,
				'nombre' => 'Santa María la Real de Nieva',
			),
			298 => 
			array (
				'id' => 6299,
				'id_provincia' => 42,
				'cod_municipio' => 185,
				'DC' => 2,
				'nombre' => 'Torreblacos',
			),
			299 => 
			array (
				'id' => 6300,
				'id_provincia' => 44,
				'cod_municipio' => 185,
				'DC' => 3,
				'nombre' => 'Pobo, El',
			),
			300 => 
			array (
				'id' => 6301,
				'id_provincia' => 45,
				'cod_municipio' => 185,
				'DC' => 6,
				'nombre' => 'Villacañas',
			),
			301 => 
			array (
				'id' => 6302,
				'id_provincia' => 46,
				'cod_municipio' => 185,
				'DC' => 9,
				'nombre' => 'Otos',
			),
			302 => 
			array (
				'id' => 6303,
				'id_provincia' => 47,
				'cod_municipio' => 185,
				'DC' => 5,
				'nombre' => 'Valverde de Campos',
			),
			303 => 
			array (
				'id' => 6304,
				'id_provincia' => 49,
				'cod_municipio' => 185,
				'DC' => 4,
				'nombre' => 'San Agustín del Pozo',
			),
			304 => 
			array (
				'id' => 6305,
				'id_provincia' => 50,
				'cod_municipio' => 185,
				'DC' => 7,
				'nombre' => 'Murillo de Gállego',
			),
			305 => 
			array (
				'id' => 6306,
				'id_provincia' => 5,
				'cod_municipio' => 186,
				'DC' => 7,
				'nombre' => 'Piedrahíta',
			),
			306 => 
			array (
				'id' => 6307,
				'id_provincia' => 10,
				'cod_municipio' => 186,
				'DC' => 9,
				'nombre' => 'Torrecillas de la Tiesa',
			),
			307 => 
			array (
				'id' => 6308,
				'id_provincia' => 16,
				'cod_municipio' => 186,
				'DC' => 8,
				'nombre' => 'Saelices',
			),
			308 => 
			array (
				'id' => 6309,
				'id_provincia' => 17,
				'cod_municipio' => 186,
				'DC' => 4,
				'nombre' => 'Sarrià de Ter',
			),
			309 => 
			array (
				'id' => 6310,
				'id_provincia' => 19,
				'cod_municipio' => 186,
				'DC' => 3,
				'nombre' => 'Mirabueno',
			),
			310 => 
			array (
				'id' => 6311,
				'id_provincia' => 22,
				'cod_municipio' => 186,
				'DC' => 9,
				'nombre' => 'Pozán de Vero',
			),
			311 => 
			array (
				'id' => 6312,
				'id_provincia' => 25,
				'cod_municipio' => 186,
				'DC' => 3,
				'nombre' => 'Riner',
			),
			312 => 
			array (
				'id' => 6313,
				'id_provincia' => 31,
				'cod_municipio' => 186,
				'DC' => 2,
				'nombre' => 'Odieta',
			),
			313 => 
			array (
				'id' => 6314,
				'id_provincia' => 34,
				'cod_municipio' => 186,
				'DC' => 8,
				'nombre' => 'Valbuena de Pisuerga',
			),
			314 => 
			array (
				'id' => 6315,
				'id_provincia' => 37,
				'cod_municipio' => 186,
				'DC' => 0,
				'nombre' => 'Mata de Ledesma, La',
			),
			315 => 
			array (
				'id' => 6316,
				'id_provincia' => 40,
				'cod_municipio' => 186,
				'DC' => 3,
				'nombre' => 'Santa Marta del Cerro',
			),
			316 => 
			array (
				'id' => 6317,
				'id_provincia' => 45,
				'cod_municipio' => 186,
				'DC' => 9,
				'nombre' => 'Villa de Don Fadrique, La',
			),
			317 => 
			array (
				'id' => 6318,
				'id_provincia' => 46,
				'cod_municipio' => 186,
				'DC' => 2,
				'nombre' => 'Paiporta',
			),
			318 => 
			array (
				'id' => 6319,
				'id_provincia' => 47,
				'cod_municipio' => 186,
				'DC' => 8,
				'nombre' => 'Valladolid',
			),
			319 => 
			array (
				'id' => 6320,
				'id_provincia' => 49,
				'cod_municipio' => 186,
				'DC' => 7,
				'nombre' => 'San Cebrián de Castro',
			),
			320 => 
			array (
				'id' => 6321,
				'id_provincia' => 50,
				'cod_municipio' => 186,
				'DC' => 0,
				'nombre' => 'Navardún',
			),
			321 => 
			array (
				'id' => 6322,
				'id_provincia' => 5,
				'cod_municipio' => 187,
				'DC' => 3,
				'nombre' => 'Piedralaves',
			),
			322 => 
			array (
				'id' => 6323,
				'id_provincia' => 8,
				'cod_municipio' => 187,
				'DC' => 8,
				'nombre' => 'Sabadell',
			),
			323 => 
			array (
				'id' => 6324,
				'id_provincia' => 10,
				'cod_municipio' => 187,
				'DC' => 5,
				'nombre' => 'Torre de Don Miguel',
			),
			324 => 
			array (
				'id' => 6325,
				'id_provincia' => 16,
				'cod_municipio' => 187,
				'DC' => 4,
				'nombre' => 'Salinas del Manzano',
			),
			325 => 
			array (
				'id' => 6326,
				'id_provincia' => 17,
				'cod_municipio' => 187,
				'DC' => 0,
				'nombre' => 'Saus,  Camallera i Llampaies',
			),
			326 => 
			array (
				'id' => 6327,
				'id_provincia' => 18,
				'cod_municipio' => 187,
				'DC' => 6,
				'nombre' => 'Villanueva de las Torres',
			),
			327 => 
			array (
				'id' => 6328,
				'id_provincia' => 19,
				'cod_municipio' => 187,
				'DC' => 9,
				'nombre' => 'Miralrío',
			),
			328 => 
			array (
				'id' => 6329,
				'id_provincia' => 22,
				'cod_municipio' => 187,
				'DC' => 5,
				'nombre' => 'Puebla de Castro, La',
			),
			329 => 
			array (
				'id' => 6330,
				'id_provincia' => 24,
				'cod_municipio' => 187,
				'DC' => 6,
				'nombre' => 'Valdevimbre',
			),
			330 => 
			array (
				'id' => 6331,
				'id_provincia' => 31,
				'cod_municipio' => 187,
				'DC' => 8,
				'nombre' => 'Oitz',
			),
			331 => 
			array (
				'id' => 6332,
				'id_provincia' => 37,
				'cod_municipio' => 187,
				'DC' => 6,
				'nombre' => 'Matilla de los Caños del Río',
			),
			332 => 
			array (
				'id' => 6333,
				'id_provincia' => 42,
				'cod_municipio' => 187,
				'DC' => 1,
				'nombre' => 'Torrubia de Soria',
			),
			333 => 
			array (
				'id' => 6334,
				'id_provincia' => 44,
				'cod_municipio' => 187,
				'DC' => 2,
				'nombre' => 'Portellada, La',
			),
			334 => 
			array (
				'id' => 6335,
				'id_provincia' => 45,
				'cod_municipio' => 187,
				'DC' => 5,
				'nombre' => 'Villafranca de los Caballeros',
			),
			335 => 
			array (
				'id' => 6336,
				'id_provincia' => 46,
				'cod_municipio' => 187,
				'DC' => 8,
				'nombre' => 'Palma de Gandía',
			),
			336 => 
			array (
				'id' => 6337,
				'id_provincia' => 47,
				'cod_municipio' => 187,
				'DC' => 4,
				'nombre' => 'Vega de Ruiponce',
			),
			337 => 
			array (
				'id' => 6338,
				'id_provincia' => 49,
				'cod_municipio' => 187,
				'DC' => 3,
				'nombre' => 'San Cristóbal de Entreviñas',
			),
			338 => 
			array (
				'id' => 6339,
				'id_provincia' => 50,
				'cod_municipio' => 187,
				'DC' => 6,
				'nombre' => 'Nigüella',
			),
			339 => 
			array (
				'id' => 6340,
				'id_provincia' => 5,
				'cod_municipio' => 188,
				'DC' => 9,
				'nombre' => 'Poveda',
			),
			340 => 
			array (
				'id' => 6341,
				'id_provincia' => 8,
				'cod_municipio' => 188,
				'DC' => 4,
				'nombre' => 'Sagàs',
			),
			341 => 
			array (
				'id' => 6342,
				'id_provincia' => 10,
				'cod_municipio' => 188,
				'DC' => 1,
				'nombre' => 'Torre de Santa María',
			),
			342 => 
			array (
				'id' => 6343,
				'id_provincia' => 16,
				'cod_municipio' => 188,
				'DC' => 0,
				'nombre' => 'Salmeroncillos',
			),
			343 => 
			array (
				'id' => 6344,
				'id_provincia' => 17,
				'cod_municipio' => 188,
				'DC' => 6,
				'nombre' => 'Selva de Mar, La',
			),
			344 => 
			array (
				'id' => 6345,
				'id_provincia' => 18,
				'cod_municipio' => 188,
				'DC' => 2,
				'nombre' => 'Villanueva Mesía',
			),
			345 => 
			array (
				'id' => 6346,
				'id_provincia' => 19,
				'cod_municipio' => 188,
				'DC' => 5,
				'nombre' => 'Mochales',
			),
			346 => 
			array (
				'id' => 6347,
				'id_provincia' => 22,
				'cod_municipio' => 188,
				'DC' => 1,
				'nombre' => 'Puente de Montañana',
			),
			347 => 
			array (
				'id' => 6348,
				'id_provincia' => 24,
				'cod_municipio' => 188,
				'DC' => 2,
				'nombre' => 'Valencia de Don Juan',
			),
			348 => 
			array (
				'id' => 6349,
				'id_provincia' => 31,
				'cod_municipio' => 188,
				'DC' => 4,
				'nombre' => 'Olaibar',
			),
			349 => 
			array (
				'id' => 6350,
				'id_provincia' => 37,
				'cod_municipio' => 188,
				'DC' => 2,
				'nombre' => 'Maya, La',
			),
			350 => 
			array (
				'id' => 6351,
				'id_provincia' => 40,
				'cod_municipio' => 188,
				'DC' => 5,
				'nombre' => 'Santiuste de Pedraza',
			),
			351 => 
			array (
				'id' => 6352,
				'id_provincia' => 42,
				'cod_municipio' => 188,
				'DC' => 7,
				'nombre' => 'Trévago',
			),
			352 => 
			array (
				'id' => 6353,
				'id_provincia' => 45,
				'cod_municipio' => 188,
				'DC' => 1,
				'nombre' => 'Villaluenga de la Sagra',
			),
			353 => 
			array (
				'id' => 6354,
				'id_provincia' => 46,
				'cod_municipio' => 188,
				'DC' => 4,
				'nombre' => 'Palmera',
			),
			354 => 
			array (
				'id' => 6355,
				'id_provincia' => 47,
				'cod_municipio' => 188,
				'DC' => 0,
				'nombre' => 'Vega de Valdetronco',
			),
			355 => 
			array (
				'id' => 6356,
				'id_provincia' => 49,
				'cod_municipio' => 188,
				'DC' => 9,
				'nombre' => 'San Esteban del Molar',
			),
			356 => 
			array (
				'id' => 6357,
				'id_provincia' => 50,
				'cod_municipio' => 188,
				'DC' => 2,
				'nombre' => 'Nombrevilla',
			),
			357 => 
			array (
				'id' => 6358,
				'id_provincia' => 5,
				'cod_municipio' => 189,
				'DC' => 2,
				'nombre' => 'Poyales del Hoyo',
			),
			358 => 
			array (
				'id' => 6359,
				'id_provincia' => 8,
				'cod_municipio' => 189,
				'DC' => 7,
				'nombre' => 'Sant Pere Sallavinera',
			),
			359 => 
			array (
				'id' => 6360,
				'id_provincia' => 9,
				'cod_municipio' => 189,
				'DC' => 0,
				'nombre' => 'Junta de Traslaloma',
			),
			360 => 
			array (
				'id' => 6361,
				'id_provincia' => 10,
				'cod_municipio' => 189,
				'DC' => 4,
				'nombre' => 'Torrejoncillo',
			),
			361 => 
			array (
				'id' => 6362,
				'id_provincia' => 16,
				'cod_municipio' => 189,
				'DC' => 3,
				'nombre' => 'Salvacañete',
			),
			362 => 
			array (
				'id' => 6363,
				'id_provincia' => 17,
				'cod_municipio' => 189,
				'DC' => 9,
				'nombre' => 'Cellera de Ter, La',
			),
			363 => 
			array (
				'id' => 6364,
				'id_provincia' => 18,
				'cod_municipio' => 189,
				'DC' => 5,
				'nombre' => 'Víznar',
			),
			364 => 
			array (
				'id' => 6365,
				'id_provincia' => 19,
				'cod_municipio' => 189,
				'DC' => 8,
				'nombre' => 'Mohernando',
			),
			365 => 
			array (
				'id' => 6366,
				'id_provincia' => 22,
				'cod_municipio' => 189,
				'DC' => 4,
				'nombre' => 'Puértolas',
			),
			366 => 
			array (
				'id' => 6367,
				'id_provincia' => 24,
				'cod_municipio' => 189,
				'DC' => 5,
				'nombre' => 'Valverde de la Virgen',
			),
			367 => 
			array (
				'id' => 6368,
				'id_provincia' => 25,
				'cod_municipio' => 189,
				'DC' => 8,
				'nombre' => 'Rosselló',
			),
			368 => 
			array (
				'id' => 6369,
				'id_provincia' => 31,
				'cod_municipio' => 189,
				'DC' => 7,
				'nombre' => 'Olazti/Olazagutía',
			),
			369 => 
			array (
				'id' => 6370,
				'id_provincia' => 34,
				'cod_municipio' => 189,
				'DC' => 3,
				'nombre' => 'Valdeolmillos',
			),
			370 => 
			array (
				'id' => 6371,
				'id_provincia' => 37,
				'cod_municipio' => 189,
				'DC' => 5,
				'nombre' => 'Membribe de la Sierra',
			),
			371 => 
			array (
				'id' => 6372,
				'id_provincia' => 40,
				'cod_municipio' => 189,
				'DC' => 8,
				'nombre' => 'Santiuste de San Juan Bautista',
			),
			372 => 
			array (
				'id' => 6373,
				'id_provincia' => 42,
				'cod_municipio' => 189,
				'DC' => 0,
				'nombre' => 'Ucero',
			),
			373 => 
			array (
				'id' => 6374,
				'id_provincia' => 44,
				'cod_municipio' => 189,
				'DC' => 1,
				'nombre' => 'Pozondón',
			),
			374 => 
			array (
				'id' => 6375,
				'id_provincia' => 45,
				'cod_municipio' => 189,
				'DC' => 4,
				'nombre' => 'Villamiel de Toledo',
			),
			375 => 
			array (
				'id' => 6376,
				'id_provincia' => 46,
				'cod_municipio' => 189,
				'DC' => 7,
				'nombre' => 'Palomar, el',
			),
			376 => 
			array (
				'id' => 6377,
				'id_provincia' => 47,
				'cod_municipio' => 189,
				'DC' => 3,
				'nombre' => 'Velascálvaro',
			),
			377 => 
			array (
				'id' => 6378,
				'id_provincia' => 49,
				'cod_municipio' => 189,
				'DC' => 2,
				'nombre' => 'San Justo',
			),
			378 => 
			array (
				'id' => 6379,
				'id_provincia' => 50,
				'cod_municipio' => 189,
				'DC' => 5,
				'nombre' => 'Nonaspe',
			),
			379 => 
			array (
				'id' => 6380,
				'id_provincia' => 5,
				'cod_municipio' => 190,
				'DC' => 6,
				'nombre' => 'Pozanco',
			),
			380 => 
			array (
				'id' => 6381,
				'id_provincia' => 8,
				'cod_municipio' => 190,
				'DC' => 1,
				'nombre' => 'Saldes',
			),
			381 => 
			array (
				'id' => 6382,
				'id_provincia' => 9,
				'cod_municipio' => 190,
				'DC' => 4,
				'nombre' => 'Junta de Villalba de Losa',
			),
			382 => 
			array (
				'id' => 6383,
				'id_provincia' => 10,
				'cod_municipio' => 190,
				'DC' => 8,
				'nombre' => 'Torrejón el Rubio',
			),
			383 => 
			array (
				'id' => 6384,
				'id_provincia' => 16,
				'cod_municipio' => 190,
				'DC' => 7,
				'nombre' => 'San Clemente',
			),
			384 => 
			array (
				'id' => 6385,
				'id_provincia' => 17,
				'cod_municipio' => 190,
				'DC' => 3,
				'nombre' => 'Serinyà',
			),
			385 => 
			array (
				'id' => 6386,
				'id_provincia' => 19,
				'cod_municipio' => 190,
				'DC' => 2,
				'nombre' => 'Molina de Aragón',
			),
			386 => 
			array (
				'id' => 6387,
				'id_provincia' => 22,
				'cod_municipio' => 190,
				'DC' => 8,
				'nombre' => 'Pueyo de Araguás, El',
			),
			387 => 
			array (
				'id' => 6388,
				'id_provincia' => 24,
				'cod_municipio' => 190,
				'DC' => 9,
				'nombre' => 'Valverde-Enrique',
			),
			388 => 
			array (
				'id' => 6389,
				'id_provincia' => 25,
				'cod_municipio' => 190,
				'DC' => 2,
				'nombre' => 'Salàs de Pallars',
			),
			389 => 
			array (
				'id' => 6390,
				'id_provincia' => 31,
				'cod_municipio' => 190,
				'DC' => 1,
				'nombre' => 'Olejua',
			),
			390 => 
			array (
				'id' => 6391,
				'id_provincia' => 34,
				'cod_municipio' => 190,
				'DC' => 7,
				'nombre' => 'Valderrábano',
			),
			391 => 
			array (
				'id' => 6392,
				'id_provincia' => 37,
				'cod_municipio' => 190,
				'DC' => 9,
				'nombre' => 'Mieza',
			),
			392 => 
			array (
				'id' => 6393,
				'id_provincia' => 40,
				'cod_municipio' => 190,
				'DC' => 2,
				'nombre' => 'Santo Domingo de Pirón',
			),
			393 => 
			array (
				'id' => 6394,
				'id_provincia' => 42,
				'cod_municipio' => 190,
				'DC' => 4,
				'nombre' => 'Vadillo',
			),
			394 => 
			array (
				'id' => 6395,
				'id_provincia' => 44,
				'cod_municipio' => 190,
				'DC' => 5,
				'nombre' => 'Pozuel del Campo',
			),
			395 => 
			array (
				'id' => 6396,
				'id_provincia' => 45,
				'cod_municipio' => 190,
				'DC' => 8,
				'nombre' => 'Villaminaya',
			),
			396 => 
			array (
				'id' => 6397,
				'id_provincia' => 46,
				'cod_municipio' => 190,
				'DC' => 1,
				'nombre' => 'Paterna',
			),
			397 => 
			array (
				'id' => 6398,
				'id_provincia' => 47,
				'cod_municipio' => 190,
				'DC' => 7,
				'nombre' => 'Velilla',
			),
			398 => 
			array (
				'id' => 6399,
				'id_provincia' => 49,
				'cod_municipio' => 190,
				'DC' => 6,
				'nombre' => 'San Martín de Valderaduey',
			),
			399 => 
			array (
				'id' => 6400,
				'id_provincia' => 50,
				'cod_municipio' => 190,
				'DC' => 9,
				'nombre' => 'Novallas',
			),
			400 => 
			array (
				'id' => 6401,
				'id_provincia' => 5,
				'cod_municipio' => 191,
				'DC' => 3,
				'nombre' => 'Pradosegar',
			),
			401 => 
			array (
				'id' => 6402,
				'id_provincia' => 8,
				'cod_municipio' => 191,
				'DC' => 8,
				'nombre' => 'Sallent',
			),
			402 => 
			array (
				'id' => 6403,
				'id_provincia' => 9,
				'cod_municipio' => 191,
				'DC' => 1,
				'nombre' => 'Jurisdicción de Lara',
			),
			403 => 
			array (
				'id' => 6404,
				'id_provincia' => 10,
				'cod_municipio' => 191,
				'DC' => 5,
				'nombre' => 'Torremenga',
			),
			404 => 
			array (
				'id' => 6405,
				'id_provincia' => 16,
				'cod_municipio' => 191,
				'DC' => 4,
				'nombre' => 'San Lorenzo de la Parrilla',
			),
			405 => 
			array (
				'id' => 6406,
				'id_provincia' => 17,
				'cod_municipio' => 191,
				'DC' => 0,
				'nombre' => 'Serra de Daró',
			),
			406 => 
			array (
				'id' => 6407,
				'id_provincia' => 19,
				'cod_municipio' => 191,
				'DC' => 9,
				'nombre' => 'Monasterio',
			),
			407 => 
			array (
				'id' => 6408,
				'id_provincia' => 24,
				'cod_municipio' => 191,
				'DC' => 6,
				'nombre' => 'Vallecillo',
			),
			408 => 
			array (
				'id' => 6409,
				'id_provincia' => 25,
				'cod_municipio' => 191,
				'DC' => 9,
				'nombre' => 'Sanaüja',
			),
			409 => 
			array (
				'id' => 6410,
				'id_provincia' => 31,
				'cod_municipio' => 191,
				'DC' => 8,
				'nombre' => 'Olite/Erriberri',
			),
			410 => 
			array (
				'id' => 6411,
				'id_provincia' => 37,
				'cod_municipio' => 191,
				'DC' => 6,
				'nombre' => 'Milano, El',
			),
			411 => 
			array (
				'id' => 6412,
				'id_provincia' => 40,
				'cod_municipio' => 191,
				'DC' => 9,
				'nombre' => 'Santo Tomé del Puerto',
			),
			412 => 
			array (
				'id' => 6413,
				'id_provincia' => 42,
				'cod_municipio' => 191,
				'DC' => 1,
				'nombre' => 'Valdeavellano de Tera',
			),
			413 => 
			array (
				'id' => 6414,
				'id_provincia' => 44,
				'cod_municipio' => 191,
				'DC' => 2,
				'nombre' => 'Puebla de Híjar, La',
			),
			414 => 
			array (
				'id' => 6415,
				'id_provincia' => 45,
				'cod_municipio' => 191,
				'DC' => 5,
				'nombre' => 'Villamuelas',
			),
			415 => 
			array (
				'id' => 6416,
				'id_provincia' => 46,
				'cod_municipio' => 191,
				'DC' => 8,
				'nombre' => 'Pedralba',
			),
			416 => 
			array (
				'id' => 6417,
				'id_provincia' => 47,
				'cod_municipio' => 191,
				'DC' => 4,
				'nombre' => 'Velliza',
			),
			417 => 
			array (
				'id' => 6418,
				'id_provincia' => 49,
				'cod_municipio' => 191,
				'DC' => 3,
				'nombre' => 'San Miguel de la Ribera',
			),
			418 => 
			array (
				'id' => 6419,
				'id_provincia' => 50,
				'cod_municipio' => 191,
				'DC' => 6,
				'nombre' => 'Novillas',
			),
			419 => 
			array (
				'id' => 6420,
				'id_provincia' => 5,
				'cod_municipio' => 192,
				'DC' => 8,
				'nombre' => 'Puerto Castilla',
			),
			420 => 
			array (
				'id' => 6421,
				'id_provincia' => 8,
				'cod_municipio' => 192,
				'DC' => 3,
				'nombre' => 'Santpedor',
			),
			421 => 
			array (
				'id' => 6422,
				'id_provincia' => 9,
				'cod_municipio' => 192,
				'DC' => 6,
				'nombre' => 'Jurisdicción de San Zadornil',
			),
			422 => 
			array (
				'id' => 6423,
				'id_provincia' => 10,
				'cod_municipio' => 192,
				'DC' => 0,
				'nombre' => 'Torremocha',
			),
			423 => 
			array (
				'id' => 6424,
				'id_provincia' => 16,
				'cod_municipio' => 192,
				'DC' => 9,
				'nombre' => 'San Martín de Boniches',
			),
			424 => 
			array (
				'id' => 6425,
				'id_provincia' => 17,
				'cod_municipio' => 192,
				'DC' => 5,
				'nombre' => 'Setcases',
			),
			425 => 
			array (
				'id' => 6426,
				'id_provincia' => 18,
				'cod_municipio' => 192,
				'DC' => 1,
				'nombre' => 'Zafarraya',
			),
			426 => 
			array (
				'id' => 6427,
				'id_provincia' => 19,
				'cod_municipio' => 192,
				'DC' => 4,
				'nombre' => 'Mondéjar',
			),
			427 => 
			array (
				'id' => 6428,
				'id_provincia' => 25,
				'cod_municipio' => 192,
				'DC' => 4,
				'nombre' => 'Sant Guim de Freixenet',
			),
			428 => 
			array (
				'id' => 6429,
				'id_provincia' => 31,
				'cod_municipio' => 192,
				'DC' => 3,
				'nombre' => 'Olóriz/Oloritz',
			),
			429 => 
			array (
				'id' => 6430,
				'id_provincia' => 34,
				'cod_municipio' => 192,
				'DC' => 9,
				'nombre' => 'Valde-Ucieza',
			),
			430 => 
			array (
				'id' => 6431,
				'id_provincia' => 37,
				'cod_municipio' => 192,
				'DC' => 1,
				'nombre' => 'Miranda de Azán',
			),
			431 => 
			array (
				'id' => 6432,
				'id_provincia' => 40,
				'cod_municipio' => 192,
				'DC' => 4,
				'nombre' => 'Sauquillo de Cabezas',
			),
			432 => 
			array (
				'id' => 6433,
				'id_provincia' => 42,
				'cod_municipio' => 192,
				'DC' => 6,
				'nombre' => 'Valdegeña',
			),
			433 => 
			array (
				'id' => 6434,
				'id_provincia' => 44,
				'cod_municipio' => 192,
				'DC' => 7,
				'nombre' => 'Puebla de Valverde, La',
			),
			434 => 
			array (
				'id' => 6435,
				'id_provincia' => 45,
				'cod_municipio' => 192,
				'DC' => 0,
				'nombre' => 'Villanueva de Alcardete',
			),
			435 => 
			array (
				'id' => 6436,
				'id_provincia' => 46,
				'cod_municipio' => 192,
				'DC' => 3,
				'nombre' => 'Petrés',
			),
			436 => 
			array (
				'id' => 6437,
				'id_provincia' => 47,
				'cod_municipio' => 192,
				'DC' => 9,
				'nombre' => 'Ventosa de la Cuesta',
			),
			437 => 
			array (
				'id' => 6438,
				'id_provincia' => 49,
				'cod_municipio' => 192,
				'DC' => 8,
				'nombre' => 'San Miguel del Valle',
			),
			438 => 
			array (
				'id' => 6439,
				'id_provincia' => 50,
				'cod_municipio' => 192,
				'DC' => 1,
				'nombre' => 'Nuévalos',
			),
			439 => 
			array (
				'id' => 6440,
				'id_provincia' => 5,
				'cod_municipio' => 193,
				'DC' => 4,
				'nombre' => 'Rasueros',
			),
			440 => 
			array (
				'id' => 6441,
				'id_provincia' => 8,
				'cod_municipio' => 193,
				'DC' => 9,
				'nombre' => 'Sant Iscle de Vallalta',
			),
			441 => 
			array (
				'id' => 6442,
				'id_provincia' => 10,
				'cod_municipio' => 193,
				'DC' => 6,
				'nombre' => 'Torreorgaz',
			),
			442 => 
			array (
				'id' => 6443,
				'id_provincia' => 16,
				'cod_municipio' => 193,
				'DC' => 5,
				'nombre' => 'San Pedro Palmiches',
			),
			443 => 
			array (
				'id' => 6444,
				'id_provincia' => 17,
				'cod_municipio' => 193,
				'DC' => 1,
				'nombre' => 'Sils',
			),
			444 => 
			array (
				'id' => 6445,
				'id_provincia' => 18,
				'cod_municipio' => 193,
				'DC' => 7,
				'nombre' => 'Zubia, La',
			),
			445 => 
			array (
				'id' => 6446,
				'id_provincia' => 19,
				'cod_municipio' => 193,
				'DC' => 0,
				'nombre' => 'Montarrón',
			),
			446 => 
			array (
				'id' => 6447,
				'id_provincia' => 22,
				'cod_municipio' => 193,
				'DC' => 6,
				'nombre' => 'Pueyo de Santa Cruz',
			),
			447 => 
			array (
				'id' => 6448,
				'id_provincia' => 24,
				'cod_municipio' => 193,
				'DC' => 7,
				'nombre' => 'Vecilla, La',
			),
			448 => 
			array (
				'id' => 6449,
				'id_provincia' => 25,
				'cod_municipio' => 193,
				'DC' => 0,
				'nombre' => 'Sant Llorenç de Morunys',
			),
			449 => 
			array (
				'id' => 6450,
				'id_provincia' => 31,
				'cod_municipio' => 193,
				'DC' => 9,
				'nombre' => 'Cendea de Olza/Oltza Zendea',
			),
			450 => 
			array (
				'id' => 6451,
				'id_provincia' => 37,
				'cod_municipio' => 193,
				'DC' => 7,
				'nombre' => 'Miranda del Castañar',
			),
			451 => 
			array (
				'id' => 6452,
				'id_provincia' => 40,
				'cod_municipio' => 193,
				'DC' => 0,
				'nombre' => 'Sebúlcor',
			),
			452 => 
			array (
				'id' => 6453,
				'id_provincia' => 42,
				'cod_municipio' => 193,
				'DC' => 2,
				'nombre' => 'Valdelagua del Cerro',
			),
			453 => 
			array (
				'id' => 6454,
				'id_provincia' => 44,
				'cod_municipio' => 193,
				'DC' => 3,
				'nombre' => 'Puertomingalvo',
			),
			454 => 
			array (
				'id' => 6455,
				'id_provincia' => 45,
				'cod_municipio' => 193,
				'DC' => 6,
				'nombre' => 'Villanueva de Bogas',
			),
			455 => 
			array (
				'id' => 6456,
				'id_provincia' => 46,
				'cod_municipio' => 193,
				'DC' => 9,
				'nombre' => 'Picanya',
			),
			456 => 
			array (
				'id' => 6457,
				'id_provincia' => 47,
				'cod_municipio' => 193,
				'DC' => 5,
				'nombre' => 'Viana de Cega',
			),
			457 => 
			array (
				'id' => 6458,
				'id_provincia' => 49,
				'cod_municipio' => 193,
				'DC' => 4,
				'nombre' => 'San Pedro de Ceque',
			),
			458 => 
			array (
				'id' => 6459,
				'id_provincia' => 50,
				'cod_municipio' => 193,
				'DC' => 7,
				'nombre' => 'Nuez de Ebro',
			),
			459 => 
			array (
				'id' => 6460,
				'id_provincia' => 5,
				'cod_municipio' => 194,
				'DC' => 9,
				'nombre' => 'Riocabado',
			),
			460 => 
			array (
				'id' => 6461,
				'id_provincia' => 8,
				'cod_municipio' => 194,
				'DC' => 4,
				'nombre' => 'Sant Adrià de Besòs',
			),
			461 => 
			array (
				'id' => 6462,
				'id_provincia' => 9,
				'cod_municipio' => 194,
				'DC' => 7,
				'nombre' => 'Lerma',
			),
			462 => 
			array (
				'id' => 6463,
				'id_provincia' => 10,
				'cod_municipio' => 194,
				'DC' => 1,
				'nombre' => 'Torrequemada',
			),
			463 => 
			array (
				'id' => 6464,
				'id_provincia' => 16,
				'cod_municipio' => 194,
				'DC' => 0,
				'nombre' => 'Santa Cruz de Moya',
			),
			464 => 
			array (
				'id' => 6465,
				'id_provincia' => 17,
				'cod_municipio' => 194,
				'DC' => 6,
				'nombre' => 'Susqueda',
			),
			465 => 
			array (
				'id' => 6466,
				'id_provincia' => 18,
				'cod_municipio' => 194,
				'DC' => 2,
				'nombre' => 'Zújar',
			),
			466 => 
			array (
				'id' => 6467,
				'id_provincia' => 19,
				'cod_municipio' => 194,
				'DC' => 5,
				'nombre' => 'Moratilla de los Meleros',
			),
			467 => 
			array (
				'id' => 6468,
				'id_provincia' => 24,
				'cod_municipio' => 194,
				'DC' => 2,
				'nombre' => 'Vegacervera',
			),
			468 => 
			array (
				'id' => 6469,
				'id_provincia' => 25,
				'cod_municipio' => 194,
				'DC' => 5,
				'nombre' => 'Sant Ramon',
			),
			469 => 
			array (
				'id' => 6470,
				'id_provincia' => 31,
				'cod_municipio' => 194,
				'DC' => 4,
				'nombre' => 'Ollo',
			),
			470 => 
			array (
				'id' => 6471,
				'id_provincia' => 37,
				'cod_municipio' => 194,
				'DC' => 2,
				'nombre' => 'Mogarraz',
			),
			471 => 
			array (
				'id' => 6472,
				'id_provincia' => 40,
				'cod_municipio' => 194,
				'DC' => 5,
				'nombre' => 'Segovia',
			),
			472 => 
			array (
				'id' => 6473,
				'id_provincia' => 42,
				'cod_municipio' => 194,
				'DC' => 7,
				'nombre' => 'Valdemaluque',
			),
			473 => 
			array (
				'id' => 6474,
				'id_provincia' => 44,
				'cod_municipio' => 194,
				'DC' => 8,
				'nombre' => 'Ráfales',
			),
			474 => 
			array (
				'id' => 6475,
				'id_provincia' => 45,
				'cod_municipio' => 194,
				'DC' => 1,
				'nombre' => 'Villarejo de Montalbán',
			),
			475 => 
			array (
				'id' => 6476,
				'id_provincia' => 46,
				'cod_municipio' => 194,
				'DC' => 4,
				'nombre' => 'Picassent',
			),
			476 => 
			array (
				'id' => 6477,
				'id_provincia' => 47,
				'cod_municipio' => 194,
				'DC' => 0,
				'nombre' => 'Viloria',
			),
			477 => 
			array (
				'id' => 6478,
				'id_provincia' => 49,
				'cod_municipio' => 194,
				'DC' => 9,
				'nombre' => 'San Pedro de la Nave-Almendra',
			),
			478 => 
			array (
				'id' => 6479,
				'id_provincia' => 50,
				'cod_municipio' => 194,
				'DC' => 2,
				'nombre' => 'Olvés',
			),
			479 => 
			array (
				'id' => 6480,
				'id_provincia' => 5,
				'cod_municipio' => 195,
				'DC' => 2,
				'nombre' => 'Riofrío',
			),
			480 => 
			array (
				'id' => 6481,
				'id_provincia' => 8,
				'cod_municipio' => 195,
				'DC' => 7,
				'nombre' => 'Sant Agustí de Lluçanès',
			),
			481 => 
			array (
				'id' => 6482,
				'id_provincia' => 9,
				'cod_municipio' => 195,
				'DC' => 0,
				'nombre' => 'Llano de Bureba',
			),
			482 => 
			array (
				'id' => 6483,
				'id_provincia' => 10,
				'cod_municipio' => 195,
				'DC' => 4,
				'nombre' => 'Trujillo',
			),
			483 => 
			array (
				'id' => 6484,
				'id_provincia' => 16,
				'cod_municipio' => 195,
				'DC' => 3,
				'nombre' => 'Santa María del Campo Rus',
			),
			484 => 
			array (
				'id' => 6485,
				'id_provincia' => 17,
				'cod_municipio' => 195,
				'DC' => 9,
				'nombre' => 'Tallada d\'Empordà, La',
			),
			485 => 
			array (
				'id' => 6486,
				'id_provincia' => 19,
				'cod_municipio' => 195,
				'DC' => 8,
				'nombre' => 'Morenilla',
			),
			486 => 
			array (
				'id' => 6487,
				'id_provincia' => 22,
				'cod_municipio' => 195,
				'DC' => 4,
				'nombre' => 'Quicena',
			),
			487 => 
			array (
				'id' => 6488,
				'id_provincia' => 31,
				'cod_municipio' => 195,
				'DC' => 7,
				'nombre' => 'Orbaizeta',
			),
			488 => 
			array (
				'id' => 6489,
				'id_provincia' => 37,
				'cod_municipio' => 195,
				'DC' => 5,
				'nombre' => 'Molinillo',
			),
			489 => 
			array (
				'id' => 6490,
				'id_provincia' => 40,
				'cod_municipio' => 195,
				'DC' => 8,
				'nombre' => 'Sepúlveda',
			),
			490 => 
			array (
				'id' => 6491,
				'id_provincia' => 42,
				'cod_municipio' => 195,
				'DC' => 0,
				'nombre' => 'Valdenebro',
			),
			491 => 
			array (
				'id' => 6492,
				'id_provincia' => 44,
				'cod_municipio' => 195,
				'DC' => 1,
				'nombre' => 'Rillo',
			),
			492 => 
			array (
				'id' => 6493,
				'id_provincia' => 45,
				'cod_municipio' => 195,
				'DC' => 4,
				'nombre' => 'Villarrubia de Santiago',
			),
			493 => 
			array (
				'id' => 6494,
				'id_provincia' => 46,
				'cod_municipio' => 195,
				'DC' => 7,
				'nombre' => 'Piles',
			),
			494 => 
			array (
				'id' => 6495,
				'id_provincia' => 47,
				'cod_municipio' => 195,
				'DC' => 3,
				'nombre' => 'Villabáñez',
			),
			495 => 
			array (
				'id' => 6496,
				'id_provincia' => 50,
				'cod_municipio' => 195,
				'DC' => 5,
				'nombre' => 'Orcajo',
			),
			496 => 
			array (
				'id' => 6497,
				'id_provincia' => 5,
				'cod_municipio' => 196,
				'DC' => 5,
				'nombre' => 'Rivilla de Barajas',
			),
			497 => 
			array (
				'id' => 6498,
				'id_provincia' => 8,
				'cod_municipio' => 196,
				'DC' => 0,
				'nombre' => 'Sant Andreu de la Barca',
			),
			498 => 
			array (
				'id' => 6499,
				'id_provincia' => 9,
				'cod_municipio' => 196,
				'DC' => 3,
				'nombre' => 'Madrigal del Monte',
			),
			499 => 
			array (
				'id' => 6500,
				'id_provincia' => 10,
				'cod_municipio' => 196,
				'DC' => 7,
				'nombre' => 'Valdastillas',
			),
		));
		\DB::table('municipios')->insert(array (
			0 => 
			array (
				'id' => 6501,
				'id_provincia' => 16,
				'cod_municipio' => 196,
				'DC' => 6,
				'nombre' => 'Santa María de los Llanos',
			),
			1 => 
			array (
				'id' => 6502,
				'id_provincia' => 17,
				'cod_municipio' => 196,
				'DC' => 2,
				'nombre' => 'Terrades',
			),
			2 => 
			array (
				'id' => 6503,
				'id_provincia' => 19,
				'cod_municipio' => 196,
				'DC' => 1,
				'nombre' => 'Muduex',
			),
			3 => 
			array (
				'id' => 6504,
				'id_provincia' => 24,
				'cod_municipio' => 196,
				'DC' => 8,
				'nombre' => 'Vega de Espinareda',
			),
			4 => 
			array (
				'id' => 6505,
				'id_provincia' => 25,
				'cod_municipio' => 196,
				'DC' => 1,
				'nombre' => 'Sant Esteve de la Sarga',
			),
			5 => 
			array (
				'id' => 6506,
				'id_provincia' => 31,
				'cod_municipio' => 196,
				'DC' => 0,
				'nombre' => 'Orbara',
			),
			6 => 
			array (
				'id' => 6507,
				'id_provincia' => 34,
				'cod_municipio' => 196,
				'DC' => 6,
				'nombre' => 'Valle de Cerrato',
			),
			7 => 
			array (
				'id' => 6508,
				'id_provincia' => 37,
				'cod_municipio' => 196,
				'DC' => 8,
				'nombre' => 'Monforte de la Sierra',
			),
			8 => 
			array (
				'id' => 6509,
				'id_provincia' => 40,
				'cod_municipio' => 196,
				'DC' => 1,
				'nombre' => 'Sequera de Fresno',
			),
			9 => 
			array (
				'id' => 6510,
				'id_provincia' => 42,
				'cod_municipio' => 196,
				'DC' => 3,
				'nombre' => 'Valdeprado',
			),
			10 => 
			array (
				'id' => 6511,
				'id_provincia' => 44,
				'cod_municipio' => 196,
				'DC' => 4,
				'nombre' => 'Riodeva',
			),
			11 => 
			array (
				'id' => 6512,
				'id_provincia' => 45,
				'cod_municipio' => 196,
				'DC' => 7,
				'nombre' => 'Villaseca de la Sagra',
			),
			12 => 
			array (
				'id' => 6513,
				'id_provincia' => 46,
				'cod_municipio' => 196,
				'DC' => 0,
				'nombre' => 'Pinet',
			),
			13 => 
			array (
				'id' => 6514,
				'id_provincia' => 47,
				'cod_municipio' => 196,
				'DC' => 6,
				'nombre' => 'Villabaruz de Campos',
			),
			14 => 
			array (
				'id' => 6515,
				'id_provincia' => 50,
				'cod_municipio' => 196,
				'DC' => 8,
				'nombre' => 'Orera',
			),
			15 => 
			array (
				'id' => 6516,
				'id_provincia' => 5,
				'cod_municipio' => 197,
				'DC' => 1,
				'nombre' => 'Salobral',
			),
			16 => 
			array (
				'id' => 6517,
				'id_provincia' => 8,
				'cod_municipio' => 197,
				'DC' => 6,
				'nombre' => 'Sant Andreu de Llavaneres',
			),
			17 => 
			array (
				'id' => 6518,
				'id_provincia' => 9,
				'cod_municipio' => 197,
				'DC' => 9,
				'nombre' => 'Madrigalejo del Monte',
			),
			18 => 
			array (
				'id' => 6519,
				'id_provincia' => 10,
				'cod_municipio' => 197,
				'DC' => 3,
				'nombre' => 'Valdecañas de Tajo',
			),
			19 => 
			array (
				'id' => 6520,
				'id_provincia' => 16,
				'cod_municipio' => 197,
				'DC' => 2,
				'nombre' => 'Santa María del Val',
			),
			20 => 
			array (
				'id' => 6521,
				'id_provincia' => 17,
				'cod_municipio' => 197,
				'DC' => 8,
				'nombre' => 'Torrent',
			),
			21 => 
			array (
				'id' => 6522,
				'id_provincia' => 19,
				'cod_municipio' => 197,
				'DC' => 7,
				'nombre' => 'Navas de Jadraque, Las',
			),
			22 => 
			array (
				'id' => 6523,
				'id_provincia' => 22,
				'cod_municipio' => 197,
				'DC' => 3,
				'nombre' => 'Robres',
			),
			23 => 
			array (
				'id' => 6524,
				'id_provincia' => 24,
				'cod_municipio' => 197,
				'DC' => 4,
				'nombre' => 'Vega de Infanzones',
			),
			24 => 
			array (
				'id' => 6525,
				'id_provincia' => 25,
				'cod_municipio' => 197,
				'DC' => 7,
				'nombre' => 'Sant Guim de la Plana',
			),
			25 => 
			array (
				'id' => 6526,
				'id_provincia' => 31,
				'cod_municipio' => 197,
				'DC' => 6,
				'nombre' => 'Orísoain',
			),
			26 => 
			array (
				'id' => 6527,
				'id_provincia' => 37,
				'cod_municipio' => 197,
				'DC' => 4,
				'nombre' => 'Monleón',
			),
			27 => 
			array (
				'id' => 6528,
				'id_provincia' => 42,
				'cod_municipio' => 197,
				'DC' => 9,
				'nombre' => 'Valderrodilla',
			),
			28 => 
			array (
				'id' => 6529,
				'id_provincia' => 44,
				'cod_municipio' => 197,
				'DC' => 0,
				'nombre' => 'Ródenas',
			),
			29 => 
			array (
				'id' => 6530,
				'id_provincia' => 45,
				'cod_municipio' => 197,
				'DC' => 3,
				'nombre' => 'Villasequilla',
			),
			30 => 
			array (
				'id' => 6531,
				'id_provincia' => 46,
				'cod_municipio' => 197,
				'DC' => 6,
				'nombre' => 'Polinyà de Xúquer',
			),
			31 => 
			array (
				'id' => 6532,
				'id_provincia' => 47,
				'cod_municipio' => 197,
				'DC' => 2,
				'nombre' => 'Villabrágima',
			),
			32 => 
			array (
				'id' => 6533,
				'id_provincia' => 49,
				'cod_municipio' => 197,
				'DC' => 1,
				'nombre' => 'Santa Clara de Avedillo',
			),
			33 => 
			array (
				'id' => 6534,
				'id_provincia' => 50,
				'cod_municipio' => 197,
				'DC' => 4,
				'nombre' => 'Orés',
			),
			34 => 
			array (
				'id' => 6535,
				'id_provincia' => 5,
				'cod_municipio' => 198,
				'DC' => 7,
				'nombre' => 'Salvadiós',
			),
			35 => 
			array (
				'id' => 6536,
				'id_provincia' => 8,
				'cod_municipio' => 198,
				'DC' => 2,
				'nombre' => 'Sant Antoni de Vilamajor',
			),
			36 => 
			array (
				'id' => 6537,
				'id_provincia' => 9,
				'cod_municipio' => 198,
				'DC' => 5,
				'nombre' => 'Mahamud',
			),
			37 => 
			array (
				'id' => 6538,
				'id_provincia' => 10,
				'cod_municipio' => 198,
				'DC' => 9,
				'nombre' => 'Valdefuentes',
			),
			38 => 
			array (
				'id' => 6539,
				'id_provincia' => 16,
				'cod_municipio' => 198,
				'DC' => 8,
				'nombre' => 'Sisante',
			),
			39 => 
			array (
				'id' => 6540,
				'id_provincia' => 17,
				'cod_municipio' => 198,
				'DC' => 4,
				'nombre' => 'Torroella de Fluvià',
			),
			40 => 
			array (
				'id' => 6541,
				'id_provincia' => 19,
				'cod_municipio' => 198,
				'DC' => 3,
				'nombre' => 'Negredo',
			),
			41 => 
			array (
				'id' => 6542,
				'id_provincia' => 24,
				'cod_municipio' => 198,
				'DC' => 0,
				'nombre' => 'Vega de Valcarce',
			),
			42 => 
			array (
				'id' => 6543,
				'id_provincia' => 31,
				'cod_municipio' => 198,
				'DC' => 2,
				'nombre' => 'Oronz/Orontze',
			),
			43 => 
			array (
				'id' => 6544,
				'id_provincia' => 37,
				'cod_municipio' => 198,
				'DC' => 0,
				'nombre' => 'Monleras',
			),
			44 => 
			array (
				'id' => 6545,
				'id_provincia' => 40,
				'cod_municipio' => 198,
				'DC' => 3,
				'nombre' => 'Sotillo',
			),
			45 => 
			array (
				'id' => 6546,
				'id_provincia' => 42,
				'cod_municipio' => 198,
				'DC' => 5,
				'nombre' => 'Valtajeros',
			),
			46 => 
			array (
				'id' => 6547,
				'id_provincia' => 44,
				'cod_municipio' => 198,
				'DC' => 6,
				'nombre' => 'Royuela',
			),
			47 => 
			array (
				'id' => 6548,
				'id_provincia' => 45,
				'cod_municipio' => 198,
				'DC' => 9,
				'nombre' => 'Villatobas',
			),
			48 => 
			array (
				'id' => 6549,
				'id_provincia' => 46,
				'cod_municipio' => 198,
				'DC' => 2,
				'nombre' => 'Potríes',
			),
			49 => 
			array (
				'id' => 6550,
				'id_provincia' => 47,
				'cod_municipio' => 198,
				'DC' => 8,
				'nombre' => 'Villacarralón',
			),
			50 => 
			array (
				'id' => 6551,
				'id_provincia' => 50,
				'cod_municipio' => 198,
				'DC' => 0,
				'nombre' => 'Oseja',
			),
			51 => 
			array (
				'id' => 6552,
				'id_provincia' => 5,
				'cod_municipio' => 199,
				'DC' => 0,
				'nombre' => 'San Bartolomé de Béjar',
			),
			52 => 
			array (
				'id' => 6553,
				'id_provincia' => 8,
				'cod_municipio' => 199,
				'DC' => 5,
				'nombre' => 'Sant Bartomeu del Grau',
			),
			53 => 
			array (
				'id' => 6554,
				'id_provincia' => 9,
				'cod_municipio' => 199,
				'DC' => 8,
				'nombre' => 'Mambrilla de Castrejón',
			),
			54 => 
			array (
				'id' => 6555,
				'id_provincia' => 10,
				'cod_municipio' => 199,
				'DC' => 2,
				'nombre' => 'Valdehúncar',
			),
			55 => 
			array (
				'id' => 6556,
				'id_provincia' => 16,
				'cod_municipio' => 199,
				'DC' => 1,
				'nombre' => 'Solera de Gabaldón',
			),
			56 => 
			array (
				'id' => 6557,
				'id_provincia' => 17,
				'cod_municipio' => 199,
				'DC' => 7,
				'nombre' => 'Torroella de Montgrí',
			),
			57 => 
			array (
				'id' => 6558,
				'id_provincia' => 19,
				'cod_municipio' => 199,
				'DC' => 6,
				'nombre' => 'Ocentejo',
			),
			58 => 
			array (
				'id' => 6559,
				'id_provincia' => 22,
				'cod_municipio' => 199,
				'DC' => 2,
				'nombre' => 'Sabiñánigo',
			),
			59 => 
			array (
				'id' => 6560,
				'id_provincia' => 24,
				'cod_municipio' => 199,
				'DC' => 3,
				'nombre' => 'Vegaquemada',
			),
			60 => 
			array (
				'id' => 6561,
				'id_provincia' => 31,
				'cod_municipio' => 199,
				'DC' => 5,
				'nombre' => 'Oroz-Betelu/Orotz-Betelu',
			),
			61 => 
			array (
				'id' => 6562,
				'id_provincia' => 34,
				'cod_municipio' => 199,
				'DC' => 1,
				'nombre' => 'Velilla del Río Carrión',
			),
			62 => 
			array (
				'id' => 6563,
				'id_provincia' => 37,
				'cod_municipio' => 199,
				'DC' => 3,
				'nombre' => 'Monsagro',
			),
			63 => 
			array (
				'id' => 6564,
				'id_provincia' => 40,
				'cod_municipio' => 199,
				'DC' => 6,
				'nombre' => 'Sotosalbos',
			),
			64 => 
			array (
				'id' => 6565,
				'id_provincia' => 44,
				'cod_municipio' => 199,
				'DC' => 9,
				'nombre' => 'Rubiales',
			),
			65 => 
			array (
				'id' => 6566,
				'id_provincia' => 45,
				'cod_municipio' => 199,
				'DC' => 2,
				'nombre' => 'Viso de San Juan, El',
			),
			66 => 
			array (
				'id' => 6567,
				'id_provincia' => 46,
				'cod_municipio' => 199,
				'DC' => 5,
				'nombre' => 'Pobla de Farnals, la',
			),
			67 => 
			array (
				'id' => 6568,
				'id_provincia' => 47,
				'cod_municipio' => 199,
				'DC' => 1,
				'nombre' => 'Villacid de Campos',
			),
			68 => 
			array (
				'id' => 6569,
				'id_provincia' => 49,
				'cod_municipio' => 199,
				'DC' => 0,
				'nombre' => 'Santa Colomba de las Monjas',
			),
			69 => 
			array (
				'id' => 6570,
				'id_provincia' => 50,
				'cod_municipio' => 199,
				'DC' => 3,
				'nombre' => 'Osera de Ebro',
			),
			70 => 
			array (
				'id' => 6571,
				'id_provincia' => 5,
				'cod_municipio' => 200,
				'DC' => 4,
				'nombre' => 'San Bartolomé de Corneja',
			),
			71 => 
			array (
				'id' => 6572,
				'id_provincia' => 8,
				'cod_municipio' => 200,
				'DC' => 9,
				'nombre' => 'Sant Boi de Llobregat',
			),
			72 => 
			array (
				'id' => 6573,
				'id_provincia' => 9,
				'cod_municipio' => 200,
				'DC' => 2,
				'nombre' => 'Mambrillas de Lara',
			),
			73 => 
			array (
				'id' => 6574,
				'id_provincia' => 10,
				'cod_municipio' => 200,
				'DC' => 6,
				'nombre' => 'Valdelacasa de Tajo',
			),
			74 => 
			array (
				'id' => 6575,
				'id_provincia' => 17,
				'cod_municipio' => 200,
				'DC' => 1,
				'nombre' => 'Tortellà',
			),
			75 => 
			array (
				'id' => 6576,
				'id_provincia' => 19,
				'cod_municipio' => 200,
				'DC' => 0,
				'nombre' => 'Olivar, El',
			),
			76 => 
			array (
				'id' => 6577,
				'id_provincia' => 22,
				'cod_municipio' => 200,
				'DC' => 6,
				'nombre' => 'Sahún',
			),
			77 => 
			array (
				'id' => 6578,
				'id_provincia' => 25,
				'cod_municipio' => 200,
				'DC' => 0,
				'nombre' => 'Sarroca de Lleida',
			),
			78 => 
			array (
				'id' => 6579,
				'id_provincia' => 31,
				'cod_municipio' => 200,
				'DC' => 9,
				'nombre' => 'Oteiza',
			),
			79 => 
			array (
				'id' => 6580,
				'id_provincia' => 37,
				'cod_municipio' => 200,
				'DC' => 7,
				'nombre' => 'Montejo',
			),
			80 => 
			array (
				'id' => 6581,
				'id_provincia' => 40,
				'cod_municipio' => 200,
				'DC' => 0,
				'nombre' => 'Tabanera la Luenga',
			),
			81 => 
			array (
				'id' => 6582,
				'id_provincia' => 42,
				'cod_municipio' => 200,
				'DC' => 2,
				'nombre' => 'Velamazán',
			),
			82 => 
			array (
				'id' => 6583,
				'id_provincia' => 44,
				'cod_municipio' => 200,
				'DC' => 3,
				'nombre' => 'Rubielos de la Cérida',
			),
			83 => 
			array (
				'id' => 6584,
				'id_provincia' => 45,
				'cod_municipio' => 200,
				'DC' => 6,
				'nombre' => 'Yébenes, Los',
			),
			84 => 
			array (
				'id' => 6585,
				'id_provincia' => 46,
				'cod_municipio' => 200,
				'DC' => 9,
				'nombre' => 'Pobla del Duc, la',
			),
			85 => 
			array (
				'id' => 6586,
				'id_provincia' => 47,
				'cod_municipio' => 200,
				'DC' => 5,
				'nombre' => 'Villaco',
			),
			86 => 
			array (
				'id' => 6587,
				'id_provincia' => 49,
				'cod_municipio' => 200,
				'DC' => 4,
				'nombre' => 'Santa Cristina de la Polvorosa',
			),
			87 => 
			array (
				'id' => 6588,
				'id_provincia' => 50,
				'cod_municipio' => 200,
				'DC' => 7,
				'nombre' => 'Paniza',
			),
			88 => 
			array (
				'id' => 6589,
				'id_provincia' => 5,
				'cod_municipio' => 201,
				'DC' => 1,
				'nombre' => 'San Bartolomé de Pinares',
			),
			89 => 
			array (
				'id' => 6590,
				'id_provincia' => 8,
				'cod_municipio' => 201,
				'DC' => 6,
				'nombre' => 'Sant Boi de Lluçanès',
			),
			90 => 
			array (
				'id' => 6591,
				'id_provincia' => 9,
				'cod_municipio' => 201,
				'DC' => 9,
				'nombre' => 'Mamolar',
			),
			91 => 
			array (
				'id' => 6592,
				'id_provincia' => 10,
				'cod_municipio' => 201,
				'DC' => 3,
				'nombre' => 'Valdemorales',
			),
			92 => 
			array (
				'id' => 6593,
				'id_provincia' => 17,
				'cod_municipio' => 201,
				'DC' => 8,
				'nombre' => 'Toses',
			),
			93 => 
			array (
				'id' => 6594,
				'id_provincia' => 19,
				'cod_municipio' => 201,
				'DC' => 7,
				'nombre' => 'Olmeda de Cobeta',
			),
			94 => 
			array (
				'id' => 6595,
				'id_provincia' => 22,
				'cod_municipio' => 201,
				'DC' => 3,
				'nombre' => 'Salas Altas',
			),
			95 => 
			array (
				'id' => 6596,
				'id_provincia' => 24,
				'cod_municipio' => 201,
				'DC' => 4,
				'nombre' => 'Vegas del Condado',
			),
			96 => 
			array (
				'id' => 6597,
				'id_provincia' => 25,
				'cod_municipio' => 201,
				'DC' => 7,
				'nombre' => 'Sarroca de Bellera',
			),
			97 => 
			array (
				'id' => 6598,
				'id_provincia' => 31,
				'cod_municipio' => 201,
				'DC' => 6,
				'nombre' => 'Pamplona/Iruña',
			),
			98 => 
			array (
				'id' => 6599,
				'id_provincia' => 34,
				'cod_municipio' => 201,
				'DC' => 2,
				'nombre' => 'Vertavillo',
			),
			99 => 
			array (
				'id' => 6600,
				'id_provincia' => 37,
				'cod_municipio' => 201,
				'DC' => 4,
				'nombre' => 'Montemayor del Río',
			),
			100 => 
			array (
				'id' => 6601,
				'id_provincia' => 40,
				'cod_municipio' => 201,
				'DC' => 7,
				'nombre' => 'Tolocirio',
			),
			101 => 
			array (
				'id' => 6602,
				'id_provincia' => 42,
				'cod_municipio' => 201,
				'DC' => 9,
				'nombre' => 'Velilla de la Sierra',
			),
			102 => 
			array (
				'id' => 6603,
				'id_provincia' => 44,
				'cod_municipio' => 201,
				'DC' => 0,
				'nombre' => 'Rubielos de Mora',
			),
			103 => 
			array (
				'id' => 6604,
				'id_provincia' => 45,
				'cod_municipio' => 201,
				'DC' => 3,
				'nombre' => 'Yeles',
			),
			104 => 
			array (
				'id' => 6605,
				'id_provincia' => 46,
				'cod_municipio' => 201,
				'DC' => 6,
				'nombre' => 'Puebla de San Miguel',
			),
			105 => 
			array (
				'id' => 6606,
				'id_provincia' => 49,
				'cod_municipio' => 201,
				'DC' => 1,
				'nombre' => 'Santa Croya de Tera',
			),
			106 => 
			array (
				'id' => 6607,
				'id_provincia' => 50,
				'cod_municipio' => 201,
				'DC' => 4,
				'nombre' => 'Paracuellos de Jiloca',
			),
			107 => 
			array (
				'id' => 6608,
				'id_provincia' => 8,
				'cod_municipio' => 202,
				'DC' => 1,
				'nombre' => 'Sant Celoni',
			),
			108 => 
			array (
				'id' => 6609,
				'id_provincia' => 9,
				'cod_municipio' => 202,
				'DC' => 4,
				'nombre' => 'Manciles',
			),
			109 => 
			array (
				'id' => 6610,
				'id_provincia' => 10,
				'cod_municipio' => 202,
				'DC' => 8,
				'nombre' => 'Valdeobispo',
			),
			110 => 
			array (
				'id' => 6611,
				'id_provincia' => 16,
				'cod_municipio' => 202,
				'DC' => 7,
				'nombre' => 'Talayuelas',
			),
			111 => 
			array (
				'id' => 6612,
				'id_provincia' => 17,
				'cod_municipio' => 202,
				'DC' => 3,
				'nombre' => 'Tossa de Mar',
			),
			112 => 
			array (
				'id' => 6613,
				'id_provincia' => 19,
				'cod_municipio' => 202,
				'DC' => 2,
				'nombre' => 'Olmeda de Jadraque, La',
			),
			113 => 
			array (
				'id' => 6614,
				'id_provincia' => 22,
				'cod_municipio' => 202,
				'DC' => 8,
				'nombre' => 'Salas Bajas',
			),
			114 => 
			array (
				'id' => 6615,
				'id_provincia' => 24,
				'cod_municipio' => 202,
				'DC' => 9,
				'nombre' => 'Villablino',
			),
			115 => 
			array (
				'id' => 6616,
				'id_provincia' => 25,
				'cod_municipio' => 202,
				'DC' => 2,
				'nombre' => 'Senterada',
			),
			116 => 
			array (
				'id' => 6617,
				'id_provincia' => 31,
				'cod_municipio' => 202,
				'DC' => 1,
				'nombre' => 'Peralta/Azkoien',
			),
			117 => 
			array (
				'id' => 6618,
				'id_provincia' => 34,
				'cod_municipio' => 202,
				'DC' => 7,
				'nombre' => 'Villabasta de Valdavia',
			),
			118 => 
			array (
				'id' => 6619,
				'id_provincia' => 37,
				'cod_municipio' => 202,
				'DC' => 9,
				'nombre' => 'Monterrubio de Armuña',
			),
			119 => 
			array (
				'id' => 6620,
				'id_provincia' => 40,
				'cod_municipio' => 202,
				'DC' => 2,
				'nombre' => 'Torreadrada',
			),
			120 => 
			array (
				'id' => 6621,
				'id_provincia' => 42,
				'cod_municipio' => 202,
				'DC' => 4,
				'nombre' => 'Velilla de los Ajos',
			),
			121 => 
			array (
				'id' => 6622,
				'id_provincia' => 45,
				'cod_municipio' => 202,
				'DC' => 8,
				'nombre' => 'Yepes',
			),
			122 => 
			array (
				'id' => 6623,
				'id_provincia' => 46,
				'cod_municipio' => 202,
				'DC' => 1,
				'nombre' => 'Pobla de Vallbona, la',
			),
			123 => 
			array (
				'id' => 6624,
				'id_provincia' => 49,
				'cod_municipio' => 202,
				'DC' => 6,
				'nombre' => 'Santa Eufemia del Barco',
			),
			124 => 
			array (
				'id' => 6625,
				'id_provincia' => 50,
				'cod_municipio' => 202,
				'DC' => 9,
				'nombre' => 'Paracuellos de la Ribera',
			),
			125 => 
			array (
				'id' => 6626,
				'id_provincia' => 8,
				'cod_municipio' => 203,
				'DC' => 7,
				'nombre' => 'Sant Cebrià de Vallalta',
			),
			126 => 
			array (
				'id' => 6627,
				'id_provincia' => 10,
				'cod_municipio' => 203,
				'DC' => 4,
				'nombre' => 'Valencia de Alcántara',
			),
			127 => 
			array (
				'id' => 6628,
				'id_provincia' => 16,
				'cod_municipio' => 203,
				'DC' => 3,
				'nombre' => 'Tarancón',
			),
			128 => 
			array (
				'id' => 6629,
				'id_provincia' => 17,
				'cod_municipio' => 203,
				'DC' => 9,
				'nombre' => 'Ultramort',
			),
			129 => 
			array (
				'id' => 6630,
				'id_provincia' => 19,
				'cod_municipio' => 203,
				'DC' => 8,
				'nombre' => 'Ordial, El',
			),
			130 => 
			array (
				'id' => 6631,
				'id_provincia' => 22,
				'cod_municipio' => 203,
				'DC' => 4,
				'nombre' => 'Salillas',
			),
			131 => 
			array (
				'id' => 6632,
				'id_provincia' => 24,
				'cod_municipio' => 203,
				'DC' => 5,
				'nombre' => 'Villabraz',
			),
			132 => 
			array (
				'id' => 6633,
				'id_provincia' => 25,
				'cod_municipio' => 203,
				'DC' => 8,
				'nombre' => 'Seu d\'Urgell, La',
			),
			133 => 
			array (
				'id' => 6634,
				'id_provincia' => 31,
				'cod_municipio' => 203,
				'DC' => 7,
				'nombre' => 'Petilla de Aragón',
			),
			134 => 
			array (
				'id' => 6635,
				'id_provincia' => 37,
				'cod_municipio' => 203,
				'DC' => 5,
				'nombre' => 'Monterrubio de la Sierra',
			),
			135 => 
			array (
				'id' => 6636,
				'id_provincia' => 40,
				'cod_municipio' => 203,
				'DC' => 8,
				'nombre' => 'Torrecaballeros',
			),
			136 => 
			array (
				'id' => 6637,
				'id_provincia' => 44,
				'cod_municipio' => 203,
				'DC' => 1,
				'nombre' => 'Salcedillo',
			),
			137 => 
			array (
				'id' => 6638,
				'id_provincia' => 45,
				'cod_municipio' => 203,
				'DC' => 4,
				'nombre' => 'Yuncler',
			),
			138 => 
			array (
				'id' => 6639,
				'id_provincia' => 46,
				'cod_municipio' => 203,
				'DC' => 7,
				'nombre' => 'Pobla Llarga, la',
			),
			139 => 
			array (
				'id' => 6640,
				'id_provincia' => 47,
				'cod_municipio' => 203,
				'DC' => 3,
				'nombre' => 'Villafrades de Campos',
			),
			140 => 
			array (
				'id' => 6641,
				'id_provincia' => 49,
				'cod_municipio' => 203,
				'DC' => 2,
				'nombre' => 'Santa María de la Vega',
			),
			141 => 
			array (
				'id' => 6642,
				'id_provincia' => 50,
				'cod_municipio' => 203,
				'DC' => 5,
				'nombre' => 'Pastriz',
			),
			142 => 
			array (
				'id' => 6643,
				'id_provincia' => 5,
				'cod_municipio' => 204,
				'DC' => 7,
				'nombre' => 'Sanchidrián',
			),
			143 => 
			array (
				'id' => 6644,
				'id_provincia' => 8,
				'cod_municipio' => 204,
				'DC' => 2,
				'nombre' => 'Sant Climent de Llobregat',
			),
			144 => 
			array (
				'id' => 6645,
				'id_provincia' => 10,
				'cod_municipio' => 204,
				'DC' => 9,
				'nombre' => 'Valverde de la Vera',
			),
			145 => 
			array (
				'id' => 6646,
				'id_provincia' => 16,
				'cod_municipio' => 204,
				'DC' => 8,
				'nombre' => 'Tébar',
			),
			146 => 
			array (
				'id' => 6647,
				'id_provincia' => 17,
				'cod_municipio' => 204,
				'DC' => 4,
				'nombre' => 'Ullà',
			),
			147 => 
			array (
				'id' => 6648,
				'id_provincia' => 19,
				'cod_municipio' => 204,
				'DC' => 3,
				'nombre' => 'Orea',
			),
			148 => 
			array (
				'id' => 6649,
				'id_provincia' => 22,
				'cod_municipio' => 204,
				'DC' => 9,
				'nombre' => 'Sallent de Gállego',
			),
			149 => 
			array (
				'id' => 6650,
				'id_provincia' => 25,
				'cod_municipio' => 204,
				'DC' => 3,
				'nombre' => 'Seròs',
			),
			150 => 
			array (
				'id' => 6651,
				'id_provincia' => 31,
				'cod_municipio' => 204,
				'DC' => 2,
				'nombre' => 'Piedramillera',
			),
			151 => 
			array (
				'id' => 6652,
				'id_provincia' => 34,
				'cod_municipio' => 204,
				'DC' => 8,
				'nombre' => 'Villacidaler',
			),
			152 => 
			array (
				'id' => 6653,
				'id_provincia' => 37,
				'cod_municipio' => 204,
				'DC' => 0,
				'nombre' => 'Morasverdes',
			),
			153 => 
			array (
				'id' => 6654,
				'id_provincia' => 40,
				'cod_municipio' => 204,
				'DC' => 3,
				'nombre' => 'Torrecilla del Pinar',
			),
			154 => 
			array (
				'id' => 6655,
				'id_provincia' => 42,
				'cod_municipio' => 204,
				'DC' => 5,
				'nombre' => 'Viana de Duero',
			),
			155 => 
			array (
				'id' => 6656,
				'id_provincia' => 44,
				'cod_municipio' => 204,
				'DC' => 6,
				'nombre' => 'Saldón',
			),
			156 => 
			array (
				'id' => 6657,
				'id_provincia' => 45,
				'cod_municipio' => 204,
				'DC' => 9,
				'nombre' => 'Yunclillos',
			),
			157 => 
			array (
				'id' => 6658,
				'id_provincia' => 46,
				'cod_municipio' => 204,
				'DC' => 2,
				'nombre' => 'Puig',
			),
			158 => 
			array (
				'id' => 6659,
				'id_provincia' => 47,
				'cod_municipio' => 204,
				'DC' => 8,
				'nombre' => 'Villafranca de Duero',
			),
			159 => 
			array (
				'id' => 6660,
				'id_provincia' => 49,
				'cod_municipio' => 204,
				'DC' => 7,
				'nombre' => 'Santa María de Valverde',
			),
			160 => 
			array (
				'id' => 6661,
				'id_provincia' => 50,
				'cod_municipio' => 204,
				'DC' => 0,
				'nombre' => 'Pedrola',
			),
			161 => 
			array (
				'id' => 6662,
				'id_provincia' => 5,
				'cod_municipio' => 205,
				'DC' => 0,
				'nombre' => 'Sanchorreja',
			),
			162 => 
			array (
				'id' => 6663,
				'id_provincia' => 8,
				'cod_municipio' => 205,
				'DC' => 5,
				'nombre' => 'Sant Cugat del Vallès',
			),
			163 => 
			array (
				'id' => 6664,
				'id_provincia' => 10,
				'cod_municipio' => 205,
				'DC' => 2,
				'nombre' => 'Valverde del Fresno',
			),
			164 => 
			array (
				'id' => 6665,
				'id_provincia' => 16,
				'cod_municipio' => 205,
				'DC' => 1,
				'nombre' => 'Tejadillos',
			),
			165 => 
			array (
				'id' => 6666,
				'id_provincia' => 17,
				'cod_municipio' => 205,
				'DC' => 7,
				'nombre' => 'Ullastret',
			),
			166 => 
			array (
				'id' => 6667,
				'id_provincia' => 22,
				'cod_municipio' => 205,
				'DC' => 2,
				'nombre' => 'San Esteban de Litera',
			),
			167 => 
			array (
				'id' => 6668,
				'id_provincia' => 24,
				'cod_municipio' => 205,
				'DC' => 3,
				'nombre' => 'Villadangos del Páramo',
			),
			168 => 
			array (
				'id' => 6669,
				'id_provincia' => 25,
				'cod_municipio' => 205,
				'DC' => 6,
				'nombre' => 'Sidamon',
			),
			169 => 
			array (
				'id' => 6670,
				'id_provincia' => 31,
				'cod_municipio' => 205,
				'DC' => 5,
				'nombre' => 'Pitillas',
			),
			170 => 
			array (
				'id' => 6671,
				'id_provincia' => 34,
				'cod_municipio' => 205,
				'DC' => 1,
				'nombre' => 'Villaconancio',
			),
			171 => 
			array (
				'id' => 6672,
				'id_provincia' => 37,
				'cod_municipio' => 205,
				'DC' => 3,
				'nombre' => 'Morille',
			),
			172 => 
			array (
				'id' => 6673,
				'id_provincia' => 40,
				'cod_municipio' => 205,
				'DC' => 6,
				'nombre' => 'Torreiglesias',
			),
			173 => 
			array (
				'id' => 6674,
				'id_provincia' => 42,
				'cod_municipio' => 205,
				'DC' => 8,
				'nombre' => 'Villaciervos',
			),
			174 => 
			array (
				'id' => 6675,
				'id_provincia' => 44,
				'cod_municipio' => 205,
				'DC' => 9,
				'nombre' => 'Samper de Calanda',
			),
			175 => 
			array (
				'id' => 6676,
				'id_provincia' => 45,
				'cod_municipio' => 205,
				'DC' => 2,
				'nombre' => 'Yuncos',
			),
			176 => 
			array (
				'id' => 6677,
				'id_provincia' => 46,
				'cod_municipio' => 205,
				'DC' => 5,
				'nombre' => 'Puçol',
			),
			177 => 
			array (
				'id' => 6678,
				'id_provincia' => 47,
				'cod_municipio' => 205,
				'DC' => 1,
				'nombre' => 'Villafrechós',
			),
			178 => 
			array (
				'id' => 6679,
				'id_provincia' => 49,
				'cod_municipio' => 205,
				'DC' => 0,
				'nombre' => 'Santibáñez de Tera',
			),
			179 => 
			array (
				'id' => 6680,
				'id_provincia' => 50,
				'cod_municipio' => 205,
				'DC' => 3,
				'nombre' => 'Pedrosas, Las',
			),
			180 => 
			array (
				'id' => 6681,
				'id_provincia' => 5,
				'cod_municipio' => 206,
				'DC' => 3,
				'nombre' => 'San Esteban de los Patos',
			),
			181 => 
			array (
				'id' => 6682,
				'id_provincia' => 8,
				'cod_municipio' => 206,
				'DC' => 8,
				'nombre' => 'Sant Cugat Sesgarrigues',
			),
			182 => 
			array (
				'id' => 6683,
				'id_provincia' => 9,
				'cod_municipio' => 206,
				'DC' => 1,
				'nombre' => 'Mazuela',
			),
			183 => 
			array (
				'id' => 6684,
				'id_provincia' => 10,
				'cod_municipio' => 206,
				'DC' => 5,
				'nombre' => 'Viandar de la Vera',
			),
			184 => 
			array (
				'id' => 6685,
				'id_provincia' => 16,
				'cod_municipio' => 206,
				'DC' => 4,
				'nombre' => 'Tinajas',
			),
			185 => 
			array (
				'id' => 6686,
				'id_provincia' => 17,
				'cod_municipio' => 206,
				'DC' => 0,
				'nombre' => 'Urús',
			),
			186 => 
			array (
				'id' => 6687,
				'id_provincia' => 22,
				'cod_municipio' => 206,
				'DC' => 5,
				'nombre' => 'Sangarrén',
			),
			187 => 
			array (
				'id' => 6688,
				'id_provincia' => 24,
				'cod_municipio' => 206,
				'DC' => 6,
				'nombre' => 'Toral de los Vados',
			),
			188 => 
			array (
				'id' => 6689,
				'id_provincia' => 25,
				'cod_municipio' => 206,
				'DC' => 9,
				'nombre' => 'Soleràs, El',
			),
			189 => 
			array (
				'id' => 6690,
				'id_provincia' => 31,
				'cod_municipio' => 206,
				'DC' => 8,
				'nombre' => 'Puente la Reina/Gares',
			),
			190 => 
			array (
				'id' => 6691,
				'id_provincia' => 34,
				'cod_municipio' => 206,
				'DC' => 4,
				'nombre' => 'Villada',
			),
			191 => 
			array (
				'id' => 6692,
				'id_provincia' => 37,
				'cod_municipio' => 206,
				'DC' => 6,
				'nombre' => 'Moríñigo',
			),
			192 => 
			array (
				'id' => 6693,
				'id_provincia' => 40,
				'cod_municipio' => 206,
				'DC' => 9,
				'nombre' => 'Torre Val de San Pedro',
			),
			193 => 
			array (
				'id' => 6694,
				'id_provincia' => 42,
				'cod_municipio' => 206,
				'DC' => 1,
				'nombre' => 'Villanueva de Gormaz',
			),
			194 => 
			array (
				'id' => 6695,
				'id_provincia' => 44,
				'cod_municipio' => 206,
				'DC' => 2,
				'nombre' => 'San Agustín',
			),
			195 => 
			array (
				'id' => 6696,
				'id_provincia' => 46,
				'cod_municipio' => 206,
				'DC' => 8,
				'nombre' => 'Quesa',
			),
			196 => 
			array (
				'id' => 6697,
				'id_provincia' => 47,
				'cod_municipio' => 206,
				'DC' => 4,
				'nombre' => 'Villafuerte',
			),
			197 => 
			array (
				'id' => 6698,
				'id_provincia' => 49,
				'cod_municipio' => 206,
				'DC' => 3,
				'nombre' => 'Santibáñez de Vidriales',
			),
			198 => 
			array (
				'id' => 6699,
				'id_provincia' => 50,
				'cod_municipio' => 206,
				'DC' => 6,
				'nombre' => 'Perdiguera',
			),
			199 => 
			array (
				'id' => 6700,
				'id_provincia' => 5,
				'cod_municipio' => 207,
				'DC' => 9,
				'nombre' => 'San Esteban del Valle',
			),
			200 => 
			array (
				'id' => 6701,
				'id_provincia' => 8,
				'cod_municipio' => 207,
				'DC' => 4,
				'nombre' => 'Sant Esteve de Palautordera',
			),
			201 => 
			array (
				'id' => 6702,
				'id_provincia' => 10,
				'cod_municipio' => 207,
				'DC' => 1,
				'nombre' => 'Villa del Campo',
			),
			202 => 
			array (
				'id' => 6703,
				'id_provincia' => 17,
				'cod_municipio' => 207,
				'DC' => 6,
				'nombre' => 'Vall d\'en Bas, La',
			),
			203 => 
			array (
				'id' => 6704,
				'id_provincia' => 22,
				'cod_municipio' => 207,
				'DC' => 1,
				'nombre' => 'San Juan de Plan',
			),
			204 => 
			array (
				'id' => 6705,
				'id_provincia' => 24,
				'cod_municipio' => 207,
				'DC' => 2,
				'nombre' => 'Villademor de la Vega',
			),
			205 => 
			array (
				'id' => 6706,
				'id_provincia' => 25,
				'cod_municipio' => 207,
				'DC' => 5,
				'nombre' => 'Solsona',
			),
			206 => 
			array (
				'id' => 6707,
				'id_provincia' => 31,
				'cod_municipio' => 207,
				'DC' => 4,
				'nombre' => 'Pueyo',
			),
			207 => 
			array (
				'id' => 6708,
				'id_provincia' => 37,
				'cod_municipio' => 207,
				'DC' => 2,
				'nombre' => 'Moriscos',
			),
			208 => 
			array (
				'id' => 6709,
				'id_provincia' => 40,
				'cod_municipio' => 207,
				'DC' => 5,
				'nombre' => 'Trescasas',
			),
			209 => 
			array (
				'id' => 6710,
				'id_provincia' => 42,
				'cod_municipio' => 207,
				'DC' => 7,
				'nombre' => 'Villar del Ala',
			),
			210 => 
			array (
				'id' => 6711,
				'id_provincia' => 44,
				'cod_municipio' => 207,
				'DC' => 8,
				'nombre' => 'San Martín del Río',
			),
			211 => 
			array (
				'id' => 6712,
				'id_provincia' => 46,
				'cod_municipio' => 207,
				'DC' => 4,
				'nombre' => 'Rafelbuñol/Rafelbunyol',
			),
			212 => 
			array (
				'id' => 6713,
				'id_provincia' => 47,
				'cod_municipio' => 207,
				'DC' => 0,
				'nombre' => 'Villagarcía de Campos',
			),
			213 => 
			array (
				'id' => 6714,
				'id_provincia' => 49,
				'cod_municipio' => 207,
				'DC' => 9,
				'nombre' => 'Santovenia',
			),
			214 => 
			array (
				'id' => 6715,
				'id_provincia' => 50,
				'cod_municipio' => 207,
				'DC' => 2,
				'nombre' => 'Piedratajada',
			),
			215 => 
			array (
				'id' => 6716,
				'id_provincia' => 5,
				'cod_municipio' => 208,
				'DC' => 5,
				'nombre' => 'San Esteban de Zapardiel',
			),
			216 => 
			array (
				'id' => 6717,
				'id_provincia' => 8,
				'cod_municipio' => 208,
				'DC' => 0,
				'nombre' => 'Sant Esteve Sesrovires',
			),
			217 => 
			array (
				'id' => 6718,
				'id_provincia' => 9,
				'cod_municipio' => 208,
				'DC' => 3,
				'nombre' => 'Mecerreyes',
			),
			218 => 
			array (
				'id' => 6719,
				'id_provincia' => 10,
				'cod_municipio' => 208,
				'DC' => 7,
				'nombre' => 'Villa del Rey',
			),
			219 => 
			array (
				'id' => 6720,
				'id_provincia' => 17,
				'cod_municipio' => 208,
				'DC' => 2,
				'nombre' => 'Vall de Bianya, La',
			),
			220 => 
			array (
				'id' => 6721,
				'id_provincia' => 19,
				'cod_municipio' => 208,
				'DC' => 1,
				'nombre' => 'Pálmaces de Jadraque',
			),
			221 => 
			array (
				'id' => 6722,
				'id_provincia' => 22,
				'cod_municipio' => 208,
				'DC' => 7,
				'nombre' => 'Santa Cilia',
			),
			222 => 
			array (
				'id' => 6723,
				'id_provincia' => 25,
				'cod_municipio' => 208,
				'DC' => 1,
				'nombre' => 'Soriguera',
			),
			223 => 
			array (
				'id' => 6724,
				'id_provincia' => 31,
				'cod_municipio' => 208,
				'DC' => 0,
				'nombre' => 'Ribaforada',
			),
			224 => 
			array (
				'id' => 6725,
				'id_provincia' => 34,
				'cod_municipio' => 208,
				'DC' => 6,
				'nombre' => 'Villaeles de Valdavia',
			),
			225 => 
			array (
				'id' => 6726,
				'id_provincia' => 37,
				'cod_municipio' => 208,
				'DC' => 8,
				'nombre' => 'Moronta',
			),
			226 => 
			array (
				'id' => 6727,
				'id_provincia' => 40,
				'cod_municipio' => 208,
				'DC' => 1,
				'nombre' => 'Turégano',
			),
			227 => 
			array (
				'id' => 6728,
				'id_provincia' => 42,
				'cod_municipio' => 208,
				'DC' => 3,
				'nombre' => 'Villar del Campo',
			),
			228 => 
			array (
				'id' => 6729,
				'id_provincia' => 44,
				'cod_municipio' => 208,
				'DC' => 4,
				'nombre' => 'Santa Cruz de Nogueras',
			),
			229 => 
			array (
				'id' => 6730,
				'id_provincia' => 46,
				'cod_municipio' => 208,
				'DC' => 0,
				'nombre' => 'Rafelcofer',
			),
			230 => 
			array (
				'id' => 6731,
				'id_provincia' => 47,
				'cod_municipio' => 208,
				'DC' => 6,
				'nombre' => 'Villagómez la Nueva',
			),
			231 => 
			array (
				'id' => 6732,
				'id_provincia' => 49,
				'cod_municipio' => 208,
				'DC' => 5,
				'nombre' => 'San Vicente de la Cabeza',
			),
			232 => 
			array (
				'id' => 6733,
				'id_provincia' => 50,
				'cod_municipio' => 208,
				'DC' => 8,
				'nombre' => 'Pina de Ebro',
			),
			233 => 
			array (
				'id' => 6734,
				'id_provincia' => 5,
				'cod_municipio' => 209,
				'DC' => 8,
				'nombre' => 'San García de Ingelmos',
			),
			234 => 
			array (
				'id' => 6735,
				'id_provincia' => 8,
				'cod_municipio' => 209,
				'DC' => 3,
				'nombre' => 'Sant Fost de Campsentelles',
			),
			235 => 
			array (
				'id' => 6736,
				'id_provincia' => 9,
				'cod_municipio' => 209,
				'DC' => 6,
				'nombre' => 'Medina de Pomar',
			),
			236 => 
			array (
				'id' => 6737,
				'id_provincia' => 10,
				'cod_municipio' => 209,
				'DC' => 0,
				'nombre' => 'Villamesías',
			),
			237 => 
			array (
				'id' => 6738,
				'id_provincia' => 16,
				'cod_municipio' => 209,
				'DC' => 9,
				'nombre' => 'Torralba',
			),
			238 => 
			array (
				'id' => 6739,
				'id_provincia' => 17,
				'cod_municipio' => 209,
				'DC' => 5,
				'nombre' => 'Vall-llobrega',
			),
			239 => 
			array (
				'id' => 6740,
				'id_provincia' => 19,
				'cod_municipio' => 209,
				'DC' => 4,
				'nombre' => 'Pardos',
			),
			240 => 
			array (
				'id' => 6741,
				'id_provincia' => 22,
				'cod_municipio' => 209,
				'DC' => 0,
				'nombre' => 'Santa Cruz de la Serós',
			),
			241 => 
			array (
				'id' => 6742,
				'id_provincia' => 24,
				'cod_municipio' => 209,
				'DC' => 1,
				'nombre' => 'Villafranca del Bierzo',
			),
			242 => 
			array (
				'id' => 6743,
				'id_provincia' => 25,
				'cod_municipio' => 209,
				'DC' => 4,
				'nombre' => 'Sort',
			),
			243 => 
			array (
				'id' => 6744,
				'id_provincia' => 31,
				'cod_municipio' => 209,
				'DC' => 3,
				'nombre' => 'Romanzado',
			),
			244 => 
			array (
				'id' => 6745,
				'id_provincia' => 37,
				'cod_municipio' => 209,
				'DC' => 1,
				'nombre' => 'Mozárbez',
			),
			245 => 
			array (
				'id' => 6746,
				'id_provincia' => 42,
				'cod_municipio' => 209,
				'DC' => 6,
				'nombre' => 'Villar del Río',
			),
			246 => 
			array (
				'id' => 6747,
				'id_provincia' => 44,
				'cod_municipio' => 209,
				'DC' => 7,
				'nombre' => 'Santa Eulalia',
			),
			247 => 
			array (
				'id' => 6748,
				'id_provincia' => 46,
				'cod_municipio' => 209,
				'DC' => 3,
				'nombre' => 'Rafelguaraf',
			),
			248 => 
			array (
				'id' => 6749,
				'id_provincia' => 47,
				'cod_municipio' => 209,
				'DC' => 9,
				'nombre' => 'Villalán de Campos',
			),
			249 => 
			array (
				'id' => 6750,
				'id_provincia' => 49,
				'cod_municipio' => 209,
				'DC' => 8,
				'nombre' => 'San Vitero',
			),
			250 => 
			array (
				'id' => 6751,
				'id_provincia' => 50,
				'cod_municipio' => 209,
				'DC' => 1,
				'nombre' => 'Pinseque',
			),
			251 => 
			array (
				'id' => 6752,
				'id_provincia' => 5,
				'cod_municipio' => 210,
				'DC' => 2,
				'nombre' => 'San Juan de la Encinilla',
			),
			252 => 
			array (
				'id' => 6753,
				'id_provincia' => 8,
				'cod_municipio' => 210,
				'DC' => 7,
				'nombre' => 'Sant Feliu de Codines',
			),
			253 => 
			array (
				'id' => 6754,
				'id_provincia' => 10,
				'cod_municipio' => 210,
				'DC' => 4,
				'nombre' => 'Villamiel',
			),
			254 => 
			array (
				'id' => 6755,
				'id_provincia' => 17,
				'cod_municipio' => 210,
				'DC' => 9,
				'nombre' => 'Ventalló',
			),
			255 => 
			array (
				'id' => 6756,
				'id_provincia' => 19,
				'cod_municipio' => 210,
				'DC' => 8,
				'nombre' => 'Paredes de Sigüenza',
			),
			256 => 
			array (
				'id' => 6757,
				'id_provincia' => 24,
				'cod_municipio' => 210,
				'DC' => 5,
				'nombre' => 'Villagatón',
			),
			257 => 
			array (
				'id' => 6758,
				'id_provincia' => 25,
				'cod_municipio' => 210,
				'DC' => 8,
				'nombre' => 'Soses',
			),
			258 => 
			array (
				'id' => 6759,
				'id_provincia' => 31,
				'cod_municipio' => 210,
				'DC' => 7,
				'nombre' => 'Roncal/Erronkari',
			),
			259 => 
			array (
				'id' => 6760,
				'id_provincia' => 34,
				'cod_municipio' => 210,
				'DC' => 3,
				'nombre' => 'Villahán',
			),
			260 => 
			array (
				'id' => 6761,
				'id_provincia' => 40,
				'cod_municipio' => 210,
				'DC' => 8,
				'nombre' => 'Urueñas',
			),
			261 => 
			array (
				'id' => 6762,
				'id_provincia' => 44,
				'cod_municipio' => 210,
				'DC' => 1,
				'nombre' => 'Sarrión',
			),
			262 => 
			array (
				'id' => 6763,
				'id_provincia' => 46,
				'cod_municipio' => 210,
				'DC' => 7,
				'nombre' => 'Ráfol de Salem',
			),
			263 => 
			array (
				'id' => 6764,
				'id_provincia' => 47,
				'cod_municipio' => 210,
				'DC' => 3,
				'nombre' => 'Villalar de los Comuneros',
			),
			264 => 
			array (
				'id' => 6765,
				'id_provincia' => 49,
				'cod_municipio' => 210,
				'DC' => 2,
				'nombre' => 'Sanzoles',
			),
			265 => 
			array (
				'id' => 6766,
				'id_provincia' => 50,
				'cod_municipio' => 210,
				'DC' => 5,
				'nombre' => 'Pintanos, Los',
			),
			266 => 
			array (
				'id' => 6767,
				'id_provincia' => 5,
				'cod_municipio' => 211,
				'DC' => 9,
				'nombre' => 'San Juan de la Nava',
			),
			267 => 
			array (
				'id' => 6768,
				'id_provincia' => 8,
				'cod_municipio' => 211,
				'DC' => 4,
				'nombre' => 'Sant Feliu de Llobregat',
			),
			268 => 
			array (
				'id' => 6769,
				'id_provincia' => 9,
				'cod_municipio' => 211,
				'DC' => 7,
				'nombre' => 'Melgar de Fernamental',
			),
			269 => 
			array (
				'id' => 6770,
				'id_provincia' => 10,
				'cod_municipio' => 211,
				'DC' => 1,
				'nombre' => 'Villanueva de la Sierra',
			),
			270 => 
			array (
				'id' => 6771,
				'id_provincia' => 16,
				'cod_municipio' => 211,
				'DC' => 0,
				'nombre' => 'Torrejoncillo del Rey',
			),
			271 => 
			array (
				'id' => 6772,
				'id_provincia' => 17,
				'cod_municipio' => 211,
				'DC' => 6,
				'nombre' => 'Verges',
			),
			272 => 
			array (
				'id' => 6773,
				'id_provincia' => 19,
				'cod_municipio' => 211,
				'DC' => 5,
				'nombre' => 'Pareja',
			),
			273 => 
			array (
				'id' => 6774,
				'id_provincia' => 24,
				'cod_municipio' => 211,
				'DC' => 2,
				'nombre' => 'Villamandos',
			),
			274 => 
			array (
				'id' => 6775,
				'id_provincia' => 25,
				'cod_municipio' => 211,
				'DC' => 5,
				'nombre' => 'Sudanell',
			),
			275 => 
			array (
				'id' => 6776,
				'id_provincia' => 31,
				'cod_municipio' => 211,
				'DC' => 4,
				'nombre' => 'Orreaga/Roncesvalles',
			),
			276 => 
			array (
				'id' => 6777,
				'id_provincia' => 34,
				'cod_municipio' => 211,
				'DC' => 0,
				'nombre' => 'Villaherreros',
			),
			277 => 
			array (
				'id' => 6778,
				'id_provincia' => 37,
				'cod_municipio' => 211,
				'DC' => 2,
				'nombre' => 'Narros de Matalayegua',
			),
			278 => 
			array (
				'id' => 6779,
				'id_provincia' => 40,
				'cod_municipio' => 211,
				'DC' => 5,
				'nombre' => 'Valdeprados',
			),
			279 => 
			array (
				'id' => 6780,
				'id_provincia' => 42,
				'cod_municipio' => 211,
				'DC' => 7,
				'nombre' => 'Villares de Soria, Los',
			),
			280 => 
			array (
				'id' => 6781,
				'id_provincia' => 44,
				'cod_municipio' => 211,
				'DC' => 8,
				'nombre' => 'Segura de los Baños',
			),
			281 => 
			array (
				'id' => 6782,
				'id_provincia' => 46,
				'cod_municipio' => 211,
				'DC' => 4,
				'nombre' => 'Real de Gandía',
			),
			282 => 
			array (
				'id' => 6783,
				'id_provincia' => 47,
				'cod_municipio' => 211,
				'DC' => 0,
				'nombre' => 'Villalba de la Loma',
			),
			283 => 
			array (
				'id' => 6784,
				'id_provincia' => 50,
				'cod_municipio' => 211,
				'DC' => 2,
				'nombre' => 'Plasencia de Jalón',
			),
			284 => 
			array (
				'id' => 6785,
				'id_provincia' => 5,
				'cod_municipio' => 212,
				'DC' => 4,
				'nombre' => 'San Juan del Molinillo',
			),
			285 => 
			array (
				'id' => 6786,
				'id_provincia' => 8,
				'cod_municipio' => 212,
				'DC' => 9,
				'nombre' => 'Sant Feliu Sasserra',
			),
			286 => 
			array (
				'id' => 6787,
				'id_provincia' => 10,
				'cod_municipio' => 212,
				'DC' => 6,
				'nombre' => 'Villanueva de la Vera',
			),
			287 => 
			array (
				'id' => 6788,
				'id_provincia' => 16,
				'cod_municipio' => 212,
				'DC' => 5,
				'nombre' => 'Torrubia del Campo',
			),
			288 => 
			array (
				'id' => 6789,
				'id_provincia' => 17,
				'cod_municipio' => 212,
				'DC' => 1,
				'nombre' => 'Vidrà',
			),
			289 => 
			array (
				'id' => 6790,
				'id_provincia' => 19,
				'cod_municipio' => 212,
				'DC' => 0,
				'nombre' => 'Pastrana',
			),
			290 => 
			array (
				'id' => 6791,
				'id_provincia' => 22,
				'cod_municipio' => 212,
				'DC' => 6,
				'nombre' => 'Santaliestra y San Quílez',
			),
			291 => 
			array (
				'id' => 6792,
				'id_provincia' => 24,
				'cod_municipio' => 212,
				'DC' => 7,
				'nombre' => 'Villamañán',
			),
			292 => 
			array (
				'id' => 6793,
				'id_provincia' => 25,
				'cod_municipio' => 212,
				'DC' => 0,
				'nombre' => 'Sunyer',
			),
			293 => 
			array (
				'id' => 6794,
				'id_provincia' => 31,
				'cod_municipio' => 212,
				'DC' => 9,
				'nombre' => 'Sada',
			),
			294 => 
			array (
				'id' => 6795,
				'id_provincia' => 37,
				'cod_municipio' => 212,
				'DC' => 7,
				'nombre' => 'Navacarros',
			),
			295 => 
			array (
				'id' => 6796,
				'id_provincia' => 40,
				'cod_municipio' => 212,
				'DC' => 0,
				'nombre' => 'Valdevacas de Montejo',
			),
			296 => 
			array (
				'id' => 6797,
				'id_provincia' => 42,
				'cod_municipio' => 212,
				'DC' => 2,
				'nombre' => 'Villasayas',
			),
			297 => 
			array (
				'id' => 6798,
				'id_provincia' => 44,
				'cod_municipio' => 212,
				'DC' => 3,
				'nombre' => 'Seno',
			),
			298 => 
			array (
				'id' => 6799,
				'id_provincia' => 46,
				'cod_municipio' => 212,
				'DC' => 9,
				'nombre' => 'Real',
			),
			299 => 
			array (
				'id' => 6800,
				'id_provincia' => 47,
				'cod_municipio' => 212,
				'DC' => 5,
				'nombre' => 'Villalba de los Alcores',
			),
			300 => 
			array (
				'id' => 6801,
				'id_provincia' => 50,
				'cod_municipio' => 212,
				'DC' => 7,
				'nombre' => 'Pleitas',
			),
			301 => 
			array (
				'id' => 6802,
				'id_provincia' => 5,
				'cod_municipio' => 213,
				'DC' => 0,
				'nombre' => 'San Juan del Olmo',
			),
			302 => 
			array (
				'id' => 6803,
				'id_provincia' => 8,
				'cod_municipio' => 213,
				'DC' => 5,
				'nombre' => 'Sant Fruitós de Bages',
			),
			303 => 
			array (
				'id' => 6804,
				'id_provincia' => 9,
				'cod_municipio' => 213,
				'DC' => 8,
				'nombre' => 'Merindad de Cuesta-Urria',
			),
			304 => 
			array (
				'id' => 6805,
				'id_provincia' => 10,
				'cod_municipio' => 213,
				'DC' => 2,
				'nombre' => 'Villar del Pedroso',
			),
			305 => 
			array (
				'id' => 6806,
				'id_provincia' => 16,
				'cod_municipio' => 213,
				'DC' => 1,
				'nombre' => 'Torrubia del Castillo',
			),
			306 => 
			array (
				'id' => 6807,
				'id_provincia' => 17,
				'cod_municipio' => 213,
				'DC' => 7,
				'nombre' => 'Vidreres',
			),
			307 => 
			array (
				'id' => 6808,
				'id_provincia' => 19,
				'cod_municipio' => 213,
				'DC' => 6,
				'nombre' => 'Pedregal, El',
			),
			308 => 
			array (
				'id' => 6809,
				'id_provincia' => 22,
				'cod_municipio' => 213,
				'DC' => 2,
				'nombre' => 'Sariñena',
			),
			309 => 
			array (
				'id' => 6810,
				'id_provincia' => 24,
				'cod_municipio' => 213,
				'DC' => 3,
				'nombre' => 'Villamartín de Don Sancho',
			),
			310 => 
			array (
				'id' => 6811,
				'id_provincia' => 31,
				'cod_municipio' => 213,
				'DC' => 5,
				'nombre' => 'Saldías',
			),
			311 => 
			array (
				'id' => 6812,
				'id_provincia' => 34,
				'cod_municipio' => 213,
				'DC' => 1,
				'nombre' => 'Villalaco',
			),
			312 => 
			array (
				'id' => 6813,
				'id_provincia' => 37,
				'cod_municipio' => 213,
				'DC' => 3,
				'nombre' => 'Nava de Béjar',
			),
			313 => 
			array (
				'id' => 6814,
				'id_provincia' => 40,
				'cod_municipio' => 213,
				'DC' => 6,
				'nombre' => 'Valdevacas y Guijar',
			),
			314 => 
			array (
				'id' => 6815,
				'id_provincia' => 42,
				'cod_municipio' => 213,
				'DC' => 8,
				'nombre' => 'Villaseca de Arciel',
			),
			315 => 
			array (
			),
			),