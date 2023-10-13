<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        State::firstOrCreate([
            'id' => 1,
            'code' => '001',
			'name' =>  'Aguascalientes',
			'abbrev' =>  'Ags.',
			'country' =>  'MX',
			'country_id' =>  1

		]);
		State::firstOrCreate([
            'id' => 2,
            'code' => '002',
			'name' =>  'Baja California',
			'abbrev' =>  'BC',
			'country' =>  'MX',
            'country_id'=> 1

		]);
		State::firstOrCreate([
            'id' => 3,
            'code' => '003',
			'name' =>  'Baja California Sur',
			'abbrev' =>  'BCS',
			'country' =>  'MX',
            'country_id'=> 1

		]);
		State::firstOrCreate([
            'id' => 4,
            'code' => '004',
			'name' =>  'Campeche',
			'abbrev' =>  'Camp.',
			'country' =>  'MX',
            'country_id'=> 1

		]);
		State::firstOrCreate([
            'id' => 5,
            'code' => '005',
			'name' =>  'Coahuila de Zaragoza',
			'abbrev' =>  'Coah.',
			'country' =>  'MX',
            'country_id'=> 1

		]);
		State::firstOrCreate([
            'id' => 6,
            'code' => '006',
			'name' =>  'Colima',
			'abbrev' =>  'Col.',
			'country' =>  'MX',
            'country_id'=> 1

		]);
		State::firstOrCreate([
            'id' => 7,
            'code' => '007',
			'name' =>  'Chiapas',
			'abbrev' =>  'Chis.',
			'country' =>  'MX',
            'country_id'=> 1

		]);
		State::firstOrCreate([
            'id' => 8,
            'code' => '008',
			'name' =>  'Chihuahua',
			'abbrev' =>  'Chih.',
			'country' =>  'MX',
            'country_id'=> 1

		]);
		State::firstOrCreate([
            'id' => 9,
            'code' => '009',
			'name' =>  'Distrito Federal',
			'abbrev' =>  'DF',
			'country' =>  'MX',
            'country_id'=> 1

		]);
		State::firstOrCreate([
            'id' => 10,
            'code' => '010',
			'name' =>  'Durango',
			'abbrev' =>  'Dgo.',
			'country' =>  'MX',
            'country_id'=> 1

		]);
		State::firstOrCreate([
            'id' => 11,
            'code' => '011',
			'name' =>  'Guanajuato',
			'abbrev' =>  'Gto.',
			'country' =>  'MX',
            'country_id'=> 1

		]);
		State::firstOrCreate([
            'id' => 12,
            'code' => '012',
			'name' =>  'Guerrero',
			'abbrev' =>  'Gro.',
			'country' =>  'MX',
            'country_id'=> 1

		]);
		State::firstOrCreate([
            'id' => 13,
            'code' => '013',
			'name' =>  'Hidalgo',
			'abbrev' =>  'Hgo.',
			'country' =>  'MX',
            'country_id'=> 1

		]);
		State::firstOrCreate([
            'id' => 14,
            'code' => '014',
			'name' =>  'Jalisco',
			'abbrev' =>  'Jal.',
			'country' =>  'MX',
            'country_id'=> 1

		]);
		State::firstOrCreate([
            'id' => 15,
            'code' => '015',
			'name' =>  'México',
			'abbrev' =>  'Mex.',
			'country' =>  'MX',
            'country_id'=> 1

		]);
		State::firstOrCreate([
            'id' => 16,
            'code' => '016',
			'name' =>  'Michoacán de Ocampo',
			'abbrev' =>  'Mich.',
			'country' =>  'MX',
            'country_id'=> 1

		]);
		State::firstOrCreate([
            'id' => 17,
            'code' => '017',
			'name' =>  'Morelos',
			'abbrev' =>  'Mor.',
			'country' =>  'MX',
            'country_id'=> 1

		]);
		State::firstOrCreate([
            'id' => 18,
            'code' => '018',
			'name' =>  'Nayarit',
			'abbrev' =>  'Nay.',
			'country' =>  'MX',
            'country_id'=> 1

		]);
		State::firstOrCreate([
            'id' => 19,
            'code' => '019',
			'name' =>  'Nuevo León',
			'abbrev' =>  'NL',
			'country' =>  'MX',
            'country_id'=> 1

		]);
		State::firstOrCreate([
            'id' => 20,
            'code' => '020',
			'name' =>  'Oaxaca',
			'abbrev' =>  'Oax.',
			'country' =>  'MX',
            'country_id'=> 1

		]);
		State::firstOrCreate([
            'id' => 21,
            'code' => '021',
			'name' =>  'Puebla',
			'abbrev' =>  'Pue.',
			'country' =>  'MX',
            'country_id'=> 1

		]);
		State::firstOrCreate([
            'id' => 22,
            'code' => '022',
			'name' =>  'Querétaro',
			'abbrev' =>  'Qro.',
			'country' =>  'MX',
            'country_id'=> 1

		]);
		State::firstOrCreate([
            'id' => 23,
            'code' => '023',
			'name' =>  'Quintana Roo',
			'abbrev' =>  'Q. Roo',
			'country' =>  'MX',
            'country_id'=> 1

		]);
		State::firstOrCreate([
            'id' => 24,
            'code' => '024',
			'name' =>  'San Luis Potosí',
			'abbrev' =>  'SLP',
			'country' =>  'MX',
            'country_id'=> 1

		]);
		State::firstOrCreate([
            'id' => 25,
            'code' => '025',
			'name' =>  'Sinaloa',
			'abbrev' =>  'Sin.',
			'country' =>  'MX',
            'country_id'=> 1

		]);
		State::firstOrCreate([
            'id' => 26,
            'code' => '026',
			'name' =>  'Sonora',
			'abbrev' =>  'Son.',
			'country' =>  'MX',
            'country_id'=> 1

		]);
		State::firstOrCreate([
            'id' => 27,
            'code' => '027',
			'name' =>  'Tabasco',
			'abbrev' =>  'Tab.',
			'country' =>  'MX',
            'country_id'=> 1

		]);
		State::firstOrCreate([
            'id' => 28,
            'code' => '028',
			'name' =>  'Tamaulipas',
			'abbrev' =>  'Tamps.',
			'country' =>  'MX',
            'country_id'=> 1

		]);
		State::firstOrCreate([
            'id' => 29,
            'code' => '029',
			'name' =>  'Tlaxcala',
			'abbrev' =>  'Tlax.',
			'country' =>  'MX',
            'country_id'=> 1

		]);
		State::firstOrCreate([
            'id' => 30,
            'code' => '030',
			'name' =>  'Veracruz de Ignacio de la Llave',
			'abbrev' =>  'Ver.',
			'country' =>  'MX',
            'country_id'=> 1

		]);
		State::firstOrCreate([
            'id' => 31,
            'code' => '031',
			'name' =>  'Yucatán',
			'abbrev' =>  'Yuc.',
			'country' =>  'MX',
            'country_id'=> 1

		]);
		State::firstOrCreate([
            'id' => 32,
            'code' => '032',
			'name' =>  'Zacatecas',
			'abbrev' =>  'Zac.',
			'country' =>  'MX',
            'country_id'=> 1
		]);
    }
}
