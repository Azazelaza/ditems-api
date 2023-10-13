<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        City::firstOrCreate([
            'name' =>  'Aguascalientes',
            'state_id' => '01',
            'number' =>  '001',
        ]);
        City::firstOrCreate([
            'name' =>  'Asientos',
            'state_id' => '01',
            'number' =>  '002',
        ]);
        City::firstOrCreate([
            'name' =>  'Calvillo',
            'state_id' => '01',
            'number' =>  '003',
        ]);
        City::firstOrCreate([
            'name' =>  'Cosío',
            'state_id' => '01',
            'number' =>  '004',
        ]);
        City::firstOrCreate([
            'name' =>  'Jesús María',
            'state_id' => '01',
            'number' =>  '005',
        ]);
        City::firstOrCreate([
            'name' =>  'Pabellón de Arteaga',
            'state_id' => '01',
            'number' =>  '006',
        ]);
        City::firstOrCreate([
            'name' =>  'Rincón de Romos',
            'state_id' => '01',
            'number' =>  '007',
        ]);
        City::firstOrCreate([
            'name' =>  'San José de Gracia',
            'state_id' => '01',
            'number' =>  '008',
        ]);
        City::firstOrCreate([
            'name' =>  'Tepezalá',
            'state_id' => '01',
            'number' =>  '009',
        ]);
        City::firstOrCreate([
            'name' =>  'El Llano',
            'state_id' => '01',
            'number' =>  '010',
        ]);
        City::firstOrCreate([
            'name' =>  'San Francisco de los Romo',
            'state_id' => '01',
            'number' =>  '011',
        ]);
        City::firstOrCreate([
            'name' =>  'Ensenada',
            'state_id' => '02',
            'number' =>  '001',
        ]);
        City::firstOrCreate([
            'name' =>  'Mexicali',
            'state_id' => '02',
            'number' =>  '002',
        ]);
        City::firstOrCreate([
            'name' =>  'Tecate',
            'state_id' => '02',
            'number' =>  '003',
        ]);
        City::firstOrCreate([
            'name' =>  'Tijuana',
            'state_id' => '02',
            'number' =>  '004',
        ]);
        City::firstOrCreate([
            'name' =>  'Playas de Rosarito',
            'state_id' => '02',
            'number' =>  '005',
        ]);
        City::firstOrCreate([
            'name' =>  'Comondú',
            'state_id' => '03',
            'number' =>  '001',
        ]);
        City::firstOrCreate([
            'name' =>  'Mulegé',
            'state_id' => '03',
            'number' =>  '002',
        ]);
        City::firstOrCreate([
            'name' =>  'La Paz',
            'state_id' => '03',
            'number' =>  '003',
        ]);
        City::firstOrCreate([
            'name' =>  'Los Cabos',
            'state_id' => '03',
            'number' =>  '008',
        ]);
        City::firstOrCreate([
            'name' =>  'Loreto',
            'state_id' => '03',
            'number' =>  '009',
        ]);
        City::firstOrCreate([
            'name' =>  'Calkiní',
            'state_id' => '04',
            'number' =>  '001',
        ]);
        City::firstOrCreate([
            'name' =>  'Campeche',
            'state_id' => '04',
            'number' =>  '002',
        ]);
        City::firstOrCreate([
            'name' =>  'Carmen',
            'state_id' => '04',
            'number' =>  '003',
        ]);
        City::firstOrCreate([
            'name' =>  'Champotón',
            'state_id' => '04',
            'number' =>  '004',
        ]);
        City::firstOrCreate([
            'name' =>  'Hecelchakán',
            'state_id' => '04',
            'number' =>  '005',
        ]);
        City::firstOrCreate([
            'name' =>  'Hopelchén',
            'state_id' => '04',
            'number' =>  '006',
        ]);
        City::firstOrCreate([
            'name' =>  'Palizada',
            'state_id' => '04',
            'number' =>  '007',
        ]);
        City::firstOrCreate([
            'name' =>  'Tenabo',
            'state_id' => '04',
            'number' =>  '008',
        ]);
        City::firstOrCreate([
            'name' =>  'Escárcega',
            'state_id' => '04',
            'number' =>  '009',
        ]);
        City::firstOrCreate([
            'name' =>  'Calakmul',
            'state_id' => '04',
            'number' =>  '010',
        ]);
        City::firstOrCreate([
            'name' =>  'Candelaria',
            'state_id' => '04',
            'number' =>  '011',
        ]);
        City::firstOrCreate([
            'name' =>  'Abasolo',
            'state_id' => '05',
            'number' =>  '001',
        ]);
        City::firstOrCreate([
            'name' =>  'Acuña',
            'state_id' => '05',
            'number' =>  '002',
        ]);
        City::firstOrCreate([
            'name' =>  'Allende',
            'state_id' => '05',
            'number' =>  '003',
        ]);
        City::firstOrCreate([
            'name' =>  'Arteaga',
            'state_id' => '05',
            'number' =>  '004',
        ]);
        City::firstOrCreate([
            'name' =>  'Candela',
            'state_id' => '05',
            'number' =>  '005',
        ]);
        City::firstOrCreate([
            'name' =>  'Castaños',
            'state_id' => '05',
            'number' =>  '006',
        ]);
        City::firstOrCreate([
            'name' =>  'Cuatro Ciénegas',
            'state_id' => '05',
            'number' =>  '007',
        ]);
        City::firstOrCreate([
            'name' =>  'Escobedo',
            'state_id' => '05',
            'number' =>  '008',
        ]);
        City::firstOrCreate([
            'name' =>  'Francisco I. Madero',
            'state_id' => '05',
            'number' =>  '009',
        ]);
        City::firstOrCreate([
            'name' =>  'Frontera',
            'state_id' => '05',
            'number' =>  '010',
        ]);
        City::firstOrCreate([
            'name' =>  'General Cepeda',
            'state_id' => '05',
            'number' =>  '011',
        ]);
        City::firstOrCreate([
            'name' =>  'Guerrero',
            'state_id' => '05',
            'number' =>  '012',
        ]);
        City::firstOrCreate([
            'name' =>  'Hidalgo',
            'state_id' => '05',
            'number' =>  '013',
        ]);
        City::firstOrCreate([
            'name' =>  'Jiménez',
            'state_id' => '05',
            'number' =>  '014',
        ]);
        City::firstOrCreate([
            'name' =>  'Juárez',
            'state_id' => '05',
            'number' =>  '015',
        ]);
        City::firstOrCreate([
            'name' =>  'Lamadrid',
            'state_id' => '05',
            'number' =>  '016',
        ]);
        City::firstOrCreate([
            'name' =>  'Matamoros',
            'state_id' => '05',
            'number' =>  '017',
        ]);
        City::firstOrCreate([
            'name' =>  'Monclova',
            'state_id' => '05',
            'number' =>  '018',
        ]);
        City::firstOrCreate([
            'name' =>  'Morelos',
            'state_id' => '05',
            'number' =>  '019',
        ]);
        City::firstOrCreate([
            'name' =>  'Múzquiz',
            'state_id' => '05',
            'number' =>  '020',
        ]);
        City::firstOrCreate([
            'name' =>  'Nadadores',
            'state_id' => '05',
            'number' =>  '021',
        ]);
        City::firstOrCreate([
            'name' =>  'Nava',
            'state_id' => '05',
            'number' =>  '022',
        ]);
        City::firstOrCreate([
            'name' =>  'Ocampo',
            'state_id' => '05',
            'number' =>  '023',
        ]);
        City::firstOrCreate([
            'name' =>  'Parras',
            'state_id' => '05',
            'number' =>  '024',
        ]);
        City::firstOrCreate([
            'name' =>  'Piedras Negras',
            'state_id' => '05',
            'number' =>  '025',
        ]);
        City::firstOrCreate([
            'name' =>  'Progreso',
            'state_id' => '05',
            'number' =>  '026',
        ]);
        City::firstOrCreate([
            'name' =>  'Ramos Arizpe',
            'state_id' => '05',
            'number' =>  '027',
        ]);
        City::firstOrCreate([
            'name' =>  'Sabinas',
            'state_id' => '05',
            'number' =>  '028',
        ]);
        City::firstOrCreate([
            'name' =>  'Sacramento',
            'state_id' => '05',
            'number' =>  '029',
        ]);
        City::firstOrCreate([
            'name' =>  'Saltillo',
            'state_id' => '05',
            'number' =>  '030',
        ]);
        City::firstOrCreate([
            'name' =>  'San Buenaventura',
            'state_id' => '05',
            'number' =>  '031',
        ]);
        City::firstOrCreate([
            'name' =>  'San Juan de Sabinas',
            'state_id' => '05',
            'number' =>  '032',
        ]);
        City::firstOrCreate([
            'name' =>  'San Pedro',
            'state_id' => '05',
            'number' =>  '033',
        ]);
        City::firstOrCreate([
            'name' =>  'Sierra Mojada',
            'state_id' => '05',
            'number' =>  '034',
        ]);
        City::firstOrCreate([
            'name' =>  'Torreón',
            'state_id' => '05',
            'number' =>  '035',
        ]);
        City::firstOrCreate([
            'name' =>  'Viesca',
            'state_id' => '05',
            'number' =>  '036',
        ]);
        City::firstOrCreate([
            'name' =>  'Villa Unión',
            'state_id' => '05',
            'number' =>  '037',
        ]);
        City::firstOrCreate([
            'name' =>  'Zaragoza',
            'state_id' => '05',
            'number' =>  '038',
        ]);
        City::firstOrCreate([
            'name' =>  'Armería',
            'state_id' => '06',
            'number' =>  '001',
        ]);
        City::firstOrCreate([
            'name' =>  'Colima',
            'state_id' => '06',
            'number' =>  '002',
        ]);
        City::firstOrCreate([
            'name' =>  'Comala',
            'state_id' => '06',
            'number' =>  '003',
        ]);
        City::firstOrCreate([
            'name' =>  'Coquimatlán',
            'state_id' => '06',
            'number' =>  '004',
        ]);
        City::firstOrCreate([
            'name' =>  'Cuauhtémoc',
            'state_id' => '06',
            'number' =>  '005',
        ]);
        City::firstOrCreate([
            'name' =>  'Ixtlahuacán',
            'state_id' => '06',
            'number' =>  '006',
        ]);
        City::firstOrCreate([
            'name' =>  'Manzanillo',
            'state_id' => '06',
            'number' =>  '007',
        ]);
        City::firstOrCreate([
            'name' =>  'Minatitlán',
            'state_id' => '06',
            'number' =>  '008',
        ]);
        City::firstOrCreate([
            'name' =>  'Tecomán',
            'state_id' => '06',
            'number' =>  '009',
        ]);
        City::firstOrCreate([
            'name' =>  'Villa de Álvarez',
            'state_id' => '06',
            'number' =>  '010',
        ]);
        City::firstOrCreate([
            'name' =>  'Acacoyagua',
            'state_id' => '07',
            'number' =>  '001',
        ]);
        City::firstOrCreate([
            'name' =>  'Acala',
            'state_id' => '07',
            'number' =>  '002',
        ]);
        City::firstOrCreate([
            'name' =>  'Acapetahua',
            'state_id' => '07',
            'number' =>  '003',
        ]);
        City::firstOrCreate([
            'name' =>  'Altamirano',
            'state_id' => '07',
            'number' =>  '004',
        ]);
        City::firstOrCreate([
            'name' =>  'Amatán',
            'state_id' => '07',
            'number' =>  '005',
        ]);
        City::firstOrCreate([
            'name' =>  'Amatenango de la Frontera',
            'state_id' => '07',
            'number' =>  '006',
        ]);
        City::firstOrCreate([
            'name' =>  'Amatenango del Valle',
            'state_id' => '07',
            'number' =>  '007',
        ]);
        City::firstOrCreate([
            'name' =>  'Angel Albino Corzo',
            'state_id' => '07',
            'number' =>  '008',
        ]);
        City::firstOrCreate([
            'name' =>  'Arriaga',
            'state_id' => '07',
            'number' =>  '009',
        ]);
        City::firstOrCreate([
            'name' =>  'Bejucal de Ocampo',
            'state_id' => '07',
            'number' =>  '010',
        ]);
        City::firstOrCreate([
            'name' =>  'Bella Vista',
            'state_id' => '07',
            'number' =>  '011',
        ]);
        City::firstOrCreate([
            'name' =>  'Berriozábal',
            'state_id' => '07',
            'number' =>  '012',
        ]);
        City::firstOrCreate([
            'name' =>  'Bochil',
            'state_id' => '07',
            'number' =>  '013',
        ]);
        City::firstOrCreate([
            'name' =>  'El Bosque',
            'state_id' => '07',
            'number' =>  '014',
        ]);
        City::firstOrCreate([
            'name' =>  'Cacahoatán',
            'state_id' => '07',
            'number' =>  '015',
        ]);
        City::firstOrCreate([
            'name' =>  'Catazajá',
            'state_id' => '07',
            'number' =>  '016',
        ]);
        City::firstOrCreate([
            'name' =>  'Cintalapa',
            'state_id' => '07',
            'number' =>  '017',
        ]);
        City::firstOrCreate([
            'name' =>  'Coapilla',
            'state_id' => '07',
            'number' =>  '018',
        ]);
        City::firstOrCreate([
            'name' =>  'Comitán de Domínguez',
            'state_id' => '07',
            'number' =>  '019',
        ]);
        City::firstOrCreate([
            'name' =>  'La Concordia',
            'state_id' => '07',
            'number' =>  '020',
        ]);
        City::firstOrCreate([
            'name' =>  'Copainalá',
            'state_id' => '07',
            'number' =>  '021',
        ]);
        City::firstOrCreate([
            'name' =>  'Chalchihuitán',
            'state_id' => '07',
            'number' =>  '022',
        ]);
        City::firstOrCreate([
            'name' =>  'Chamula',
            'state_id' => '07',
            'number' =>  '023',
        ]);
        City::firstOrCreate([
            'name' =>  'Chanal',
            'state_id' => '07',
            'number' =>  '024',
        ]);
        City::firstOrCreate([
            'name' =>  'Chapultenango',
            'state_id' => '07',
            'number' =>  '025',
        ]);
        City::firstOrCreate([
            'name' =>  'Chenalhó',
            'state_id' => '07',
            'number' =>  '026',
        ]);
        City::firstOrCreate([
            'name' =>  'Chiapa de Corzo',
            'state_id' => '07',
            'number' =>  '027',
        ]);
        City::firstOrCreate([
            'name' =>  'Chiapilla',
            'state_id' => '07',
            'number' =>  '028',
        ]);
        City::firstOrCreate([
            'name' =>  'Chicoasén',
            'state_id' => '07',
            'number' =>  '029',
        ]);
        City::firstOrCreate([
            'name' =>  'Chicomuselo',
            'state_id' => '07',
            'number' =>  '030',
        ]);
        City::firstOrCreate([
            'name' =>  'Chilón',
            'state_id' => '07',
            'number' =>  '031',
        ]);
        City::firstOrCreate([
            'name' =>  'Escuintla',
            'state_id' => '07',
            'number' =>  '032',
        ]);
        City::firstOrCreate([
            'name' =>  'Francisco León',
            'state_id' => '07',
            'number' =>  '033',
        ]);
        City::firstOrCreate([
            'name' =>  'Frontera Comalapa',
            'state_id' => '07',
            'number' =>  '034',
        ]);
        City::firstOrCreate([
            'name' =>  'Frontera Hidalgo',
            'state_id' => '07',
            'number' =>  '035',
        ]);
        City::firstOrCreate([
            'name' =>  'La Grandeza',
            'state_id' => '07',
            'number' =>  '036',
        ]);
        City::firstOrCreate([
            'name' =>  'Huehuetán',
            'state_id' => '07',
            'number' =>  '037',
        ]);
        City::firstOrCreate([
            'name' =>  'Huixtán',
            'state_id' => '07',
            'number' =>  '038',
        ]);
        City::firstOrCreate([
            'name' =>  'Huitiupán',
            'state_id' => '07',
            'number' =>  '039',
        ]);
        City::firstOrCreate([
            'name' =>  'Huixtla',
            'state_id' => '07',
            'number' =>  '040',
        ]);
        City::firstOrCreate([
            'name' =>  'La Independencia',
            'state_id' => '07',
            'number' =>  '041',
        ]);
        City::firstOrCreate([
            'name' =>  'Ixhuatán',
            'state_id' => '07',
            'number' =>  '042',
        ]);
        City::firstOrCreate([
            'name' =>  'Ixtacomitán',
            'state_id' => '07',
            'number' =>  '043',
        ]);
        City::firstOrCreate([
            'name' =>  'Ixtapa',
            'state_id' => '07',
            'number' =>  '044',
        ]);
        City::firstOrCreate([
            'name' =>  'Ixtapangajoya',
            'state_id' => '07',
            'number' =>  '045',
        ]);
        City::firstOrCreate([
            'name' =>  'Jiquipilas',
            'state_id' => '07',
            'number' =>  '046',
        ]);
        City::firstOrCreate([
            'name' =>  'Jitotol',
            'state_id' => '07',
            'number' =>  '047',
        ]);
        City::firstOrCreate([
            'name' =>  'Juárez',
            'state_id' => '07',
            'number' =>  '048',
        ]);
        City::firstOrCreate([
            'name' =>  'Larráinzar',
            'state_id' => '07',
            'number' =>  '049',
        ]);
        City::firstOrCreate([
            'name' =>  'La Libertad',
            'state_id' => '07',
            'number' =>  '050',
        ]);
        City::firstOrCreate([
            'name' =>  'Mapastepec',
            'state_id' => '07',
            'number' =>  '051',
        ]);
        City::firstOrCreate([
            'name' =>  'Las Margaritas',
            'state_id' => '07',
            'number' =>  '052',
        ]);
        City::firstOrCreate([
            'name' =>  'Mazapa de Madero',
            'state_id' => '07',
            'number' =>  '053',
        ]);
        City::firstOrCreate([
            'name' =>  'Mazatán',
            'state_id' => '07',
            'number' =>  '054',
        ]);
        City::firstOrCreate([
            'name' =>  'Metapa',
            'state_id' => '07',
            'number' =>  '055',
        ]);
        City::firstOrCreate([
            'name' =>  'Mitontic',
            'state_id' => '07',
            'number' =>  '056',
        ]);
        City::firstOrCreate([
            'name' =>  'Motozintla',
            'state_id' => '07',
            'number' =>  '057',
        ]);
        City::firstOrCreate([
            'name' =>  'Nicolás Ruíz',
            'state_id' => '07',
            'number' =>  '058',
        ]);
        City::firstOrCreate([
            'name' =>  'Ocosingo',
            'state_id' => '07',
            'number' =>  '059',
        ]);
        City::firstOrCreate([
            'name' =>  'Ocotepec',
            'state_id' => '07',
            'number' =>  '060',
        ]);
        City::firstOrCreate([
            'name' =>  'Ocozocoautla de Espinosa',
            'state_id' => '07',
            'number' =>  '061',
        ]);
        City::firstOrCreate([
            'name' =>  'Ostuacán',
            'state_id' => '07',
            'number' =>  '062',
        ]);
        City::firstOrCreate([
            'name' =>  'Osumacinta',
            'state_id' => '07',
            'number' =>  '063',
        ]);
        City::firstOrCreate([
            'name' =>  'Oxchuc',
            'state_id' => '07',
            'number' =>  '064',
        ]);
        City::firstOrCreate([
            'name' =>  'Palenque',
            'state_id' => '07',
            'number' =>  '065',
        ]);
        City::firstOrCreate([
            'name' =>  'Pantelhó',
            'state_id' => '07',
            'number' =>  '066',
        ]);
        City::firstOrCreate([
            'name' =>  'Pantepec',
            'state_id' => '07',
            'number' =>  '067',
        ]);
        City::firstOrCreate([
            'name' =>  'Pichucalco',
            'state_id' => '07',
            'number' =>  '068',
        ]);
        City::firstOrCreate([
            'name' =>  'Pijijiapan',
            'state_id' => '07',
            'number' =>  '069',
        ]);
        City::firstOrCreate([
            'name' =>  'El Porvenir',
            'state_id' => '07',
            'number' =>  '070',
        ]);
        City::firstOrCreate([
            'name' =>  'Villa Comaltitlán',
            'state_id' => '07',
            'number' =>  '071',
        ]);
        City::firstOrCreate([
            'name' =>  'Pueblo Nuevo Solistahuacán',
            'state_id' => '07',
            'number' =>  '072',
        ]);
        City::firstOrCreate([
            'name' =>  'Rayón',
            'state_id' => '07',
            'number' =>  '073',
        ]);
        City::firstOrCreate([
            'name' =>  'Reforma',
            'state_id' => '07',
            'number' =>  '074',
        ]);
        City::firstOrCreate([
            'name' =>  'Las Rosas',
            'state_id' => '07',
            'number' =>  '075',
        ]);
        City::firstOrCreate([
            'name' =>  'Sabanilla',
            'state_id' => '07',
            'number' =>  '076',
        ]);
        City::firstOrCreate([
            'name' =>  'Salto de Agua',
            'state_id' => '07',
            'number' =>  '077',
        ]);
        City::firstOrCreate([
            'name' =>  'San Cristóbal de las Casas',
            'state_id' => '07',
            'number' =>  '078',
        ]);
        City::firstOrCreate([
            'name' =>  'San Fernando',
            'state_id' => '07',
            'number' =>  '079',
        ]);
        City::firstOrCreate([
            'name' =>  'Siltepec',
            'state_id' => '07',
            'number' =>  '080',
        ]);
        City::firstOrCreate([
            'name' =>  'Simojovel',
            'state_id' => '07',
            'number' =>  '081',
        ]);
        City::firstOrCreate([
            'name' =>  'Sitalá',
            'state_id' => '07',
            'number' =>  '082',
        ]);
        City::firstOrCreate([
            'name' =>  'Socoltenango',
            'state_id' => '07',
            'number' =>  '083',
        ]);
        City::firstOrCreate([
            'name' =>  'Solosuchiapa',
            'state_id' => '07',
            'number' =>  '084',
        ]);
        City::firstOrCreate([
            'name' =>  'Soyaló',
            'state_id' => '07',
            'number' =>  '085',
        ]);
        City::firstOrCreate([
            'name' =>  'Suchiapa',
            'state_id' => '07',
            'number' =>  '086',
        ]);
        City::firstOrCreate([
            'name' =>  'Suchiate',
            'state_id' => '07',
            'number' =>  '087',
        ]);
        City::firstOrCreate([
            'name' =>  'Sunuapa',
            'state_id' => '07',
            'number' =>  '088',
        ]);
        City::firstOrCreate([
            'name' =>  'Tapachula',
            'state_id' => '07',
            'number' =>  '089',
        ]);
        City::firstOrCreate([
            'name' =>  'Tapalapa',
            'state_id' => '07',
            'number' =>  '090',
        ]);
        City::firstOrCreate([
            'name' =>  'Tapilula',
            'state_id' => '07',
            'number' =>  '091',
        ]);
        City::firstOrCreate([
            'name' =>  'Tecpatán',
            'state_id' => '07',
            'number' =>  '092',
        ]);
        City::firstOrCreate([
            'name' =>  'Tenejapa',
            'state_id' => '07',
            'number' =>  '093',
        ]);
        City::firstOrCreate([
            'name' =>  'Teopisca',
            'state_id' => '07',
            'number' =>  '094',
        ]);
        City::firstOrCreate([
            'name' =>  'Tila',
            'state_id' => '07',
            'number' =>  '096',
        ]);
        City::firstOrCreate([
            'name' =>  'Tonalá',
            'state_id' => '07',
            'number' =>  '097',
        ]);
        City::firstOrCreate([
            'name' =>  'Totolapa',
            'state_id' => '07',
            'number' =>  '098',
        ]);
        City::firstOrCreate([
            'name' =>  'La Trinitaria',
            'state_id' => '07',
            'number' =>  '099',
        ]);
        City::firstOrCreate([
            'name' =>  'Tumbalá',
            'state_id' => '07',
            'number' =>  '100',
        ]);
        City::firstOrCreate([
            'name' =>  'Tuxtla Gutiérrez',
            'state_id' => '07',
            'number' =>  '101',
        ]);
        City::firstOrCreate([
            'name' =>  'Tuxtla Chico',
            'state_id' => '07',
            'number' =>  '102',
        ]);
        City::firstOrCreate([
            'name' =>  'Tuzantán',
            'state_id' => '07',
            'number' =>  '103',
        ]);
        City::firstOrCreate([
            'name' =>  'Tzimol',
            'state_id' => '07',
            'number' =>  '104',
        ]);
        City::firstOrCreate([
            'name' =>  'Unión Juárez',
            'state_id' => '07',
            'number' =>  '105',
        ]);
        City::firstOrCreate([
            'name' =>  'Venustiano Carranza',
            'state_id' => '07',
            'number' =>  '106',
        ]);
        City::firstOrCreate([
            'name' =>  'Villa Corzo',
            'state_id' => '07',
            'number' =>  '107',
        ]);
        City::firstOrCreate([
            'name' =>  'Villaflores',
            'state_id' => '07',
            'number' =>  '108',
        ]);
        City::firstOrCreate([
            'name' =>  'Yajalón',
            'state_id' => '07',
            'number' =>  '109',
        ]);
        City::firstOrCreate([
            'name' =>  'San Lucas',
            'state_id' => '07',
            'number' =>  '110',
        ]);
        City::firstOrCreate([
            'name' =>  'Zinacantán',
            'state_id' => '07',
            'number' =>  '111',
        ]);
        City::firstOrCreate([
            'name' =>  'San Juan Cancuc',
            'state_id' => '07',
            'number' =>  '112',
        ]);
        City::firstOrCreate([
            'name' =>  'Aldama',
            'state_id' => '07',
            'number' =>  '113',
        ]);
        City::firstOrCreate([
            'name' =>  'Benemérito de las Américas',
            'state_id' => '07',
            'number' =>  '114',
        ]);
        City::firstOrCreate([
            'name' =>  'Maravilla Tenejapa',
            'state_id' => '07',
            'number' =>  '115',
        ]);
        City::firstOrCreate([
            'name' =>  'Marqués de Comillas',
            'state_id' => '07',
            'number' =>  '116',
        ]);
        City::firstOrCreate([
            'name' =>  'Montecristo de Guerrero',
            'state_id' => '07',
            'number' =>  '117',
        ]);
        City::firstOrCreate([
            'name' =>  'San Andrés Duraznal',
            'state_id' => '07',
            'number' =>  '118',
        ]);
        City::firstOrCreate([
            'name' =>  'Santiago el Pinar',
            'state_id' => '07',
            'number' =>  '119',
        ]);
        City::firstOrCreate([
            'name' =>  'Ahumada',
            'state_id' => '08',
            'number' =>  '001',
        ]);
        City::firstOrCreate([
            'name' =>  'Aldama',
            'state_id' => '08',
            'number' =>  '002',
        ]);
        City::firstOrCreate([
            'name' =>  'Allende',
            'state_id' => '08',
            'number' =>  '003',
        ]);
        City::firstOrCreate([
            'name' =>  'Aquiles Serdán',
            'state_id' => '08',
            'number' =>  '004',
        ]);
        City::firstOrCreate([
            'name' =>  'Ascensión',
            'state_id' => '08',
            'number' =>  '005',
        ]);
        City::firstOrCreate([
            'name' =>  'Bachíniva',
            'state_id' => '08',
            'number' =>  '006',
        ]);
        City::firstOrCreate([
            'name' =>  'Balleza',
            'state_id' => '08',
            'number' =>  '007',
        ]);
        City::firstOrCreate([
            'name' =>  'Batopilas',
            'state_id' => '08',
            'number' =>  '008',
        ]);
        City::firstOrCreate([
            'name' =>  'Bocoyna',
            'state_id' => '08',
            'number' =>  '009',
        ]);
        City::firstOrCreate([
            'name' =>  'Buenaventura',
            'state_id' => '08',
            'number' =>  '010',
        ]);
        City::firstOrCreate([
            'name' =>  'Camargo',
            'state_id' => '08',
            'number' =>  '011',
        ]);
        City::firstOrCreate([
            'name' =>  'Carichí',
            'state_id' => '08',
            'number' =>  '012',
        ]);
        City::firstOrCreate([
            'name' =>  'Casas Grandes',
            'state_id' => '08',
            'number' =>  '013',
        ]);
        City::firstOrCreate([
            'name' =>  'Coronado',
            'state_id' => '08',
            'number' =>  '014',
        ]);
        City::firstOrCreate([
            'name' =>  'Coyame del Sotol',
            'state_id' => '08',
            'number' =>  '015',
        ]);
        City::firstOrCreate([
            'name' =>  'La Cruz',
            'state_id' => '08',
            'number' =>  '016',
        ]);
        City::firstOrCreate([
            'name' =>  'Cuauhtémoc',
            'state_id' => '08',
            'number' =>  '017',
        ]);
        City::firstOrCreate([
            'name' =>  'Cusihuiriachi',
            'state_id' => '08',
            'number' =>  '018',
        ]);
        City::firstOrCreate([
            'name' =>  'Chihuahua',
            'state_id' => '08',
            'number' =>  '019',
        ]);
        City::firstOrCreate([
            'name' =>  'Chínipas',
            'state_id' => '08',
            'number' =>  '020',
        ]);
        City::firstOrCreate([
            'name' =>  'Delicias',
            'state_id' => '08',
            'number' =>  '021',
        ]);
        City::firstOrCreate([
            'name' =>  'Dr. Belisario Domínguez',
            'state_id' => '08',
            'number' =>  '022',
        ]);
        City::firstOrCreate([
            'name' =>  'Galeana',
            'state_id' => '08',
            'number' =>  '023',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa Isabel',
            'state_id' => '08',
            'number' =>  '024',
        ]);
        City::firstOrCreate([
            'name' =>  'Gómez Farías',
            'state_id' => '08',
            'number' =>  '025',
        ]);
        City::firstOrCreate([
            'name' =>  'Gran Morelos',
            'state_id' => '08',
            'number' =>  '026',
        ]);
        City::firstOrCreate([
            'name' =>  'Guachochi',
            'state_id' => '08',
            'number' =>  '027',
        ]);
        City::firstOrCreate([
            'name' =>  'Guadalupe',
            'state_id' => '08',
            'number' =>  '028',
        ]);
        City::firstOrCreate([
            'name' =>  'Guadalupe y Calvo',
            'state_id' => '08',
            'number' =>  '029',
        ]);
        City::firstOrCreate([
            'name' =>  'Guazapares',
            'state_id' => '08',
            'number' =>  '030',
        ]);
        City::firstOrCreate([
            'name' =>  'Guerrero',
            'state_id' => '08',
            'number' =>  '031',
        ]);
        City::firstOrCreate([
            'name' =>  'Hidalgo del Parral',
            'state_id' => '08',
            'number' =>  '032',
        ]);
        City::firstOrCreate([
            'name' =>  'Huejotitán',
            'state_id' => '08',
            'number' =>  '033',
        ]);
        City::firstOrCreate([
            'name' =>  'Ignacio Zaragoza',
            'state_id' => '08',
            'number' =>  '034',
        ]);
        City::firstOrCreate([
            'name' =>  'Janos',
            'state_id' => '08',
            'number' =>  '035',
        ]);
        City::firstOrCreate([
            'name' =>  'Jiménez',
            'state_id' => '08',
            'number' =>  '036',
        ]);
        City::firstOrCreate([
            'name' =>  'Juárez',
            'state_id' => '08',
            'number' =>  '037',
        ]);
        City::firstOrCreate([
            'name' =>  'Julimes',
            'state_id' => '08',
            'number' =>  '038',
        ]);
        City::firstOrCreate([
            'name' =>  'López',
            'state_id' => '08',
            'number' =>  '039',
        ]);
        City::firstOrCreate([
            'name' =>  'Madera',
            'state_id' => '08',
            'number' =>  '040',
        ]);
        City::firstOrCreate([
            'name' =>  'Maguarichi',
            'state_id' => '08',
            'number' =>  '041',
        ]);
        City::firstOrCreate([
            'name' =>  'Manuel Benavides',
            'state_id' => '08',
            'number' =>  '042',
        ]);
        City::firstOrCreate([
            'name' =>  'Matachí',
            'state_id' => '08',
            'number' =>  '043',
        ]);
        City::firstOrCreate([
            'name' =>  'Matamoros',
            'state_id' => '08',
            'number' =>  '044',
        ]);
        City::firstOrCreate([
            'name' =>  'Meoqui',
            'state_id' => '08',
            'number' =>  '045',
        ]);
        City::firstOrCreate([
            'name' =>  'Morelos',
            'state_id' => '08',
            'number' =>  '046',
        ]);
        City::firstOrCreate([
            'name' =>  'Moris',
            'state_id' => '08',
            'number' =>  '047',
        ]);
        City::firstOrCreate([
            'name' =>  'Namiquipa',
            'state_id' => '08',
            'number' =>  '048',
        ]);
        City::firstOrCreate([
            'name' =>  'Nonoava',
            'state_id' => '08',
            'number' =>  '049',
        ]);
        City::firstOrCreate([
            'name' =>  'Nuevo Casas Grandes',
            'state_id' => '08',
            'number' =>  '050',
        ]);
        City::firstOrCreate([
            'name' =>  'Ocampo',
            'state_id' => '08',
            'number' =>  '051',
        ]);
        City::firstOrCreate([
            'name' =>  'Ojinaga',
            'state_id' => '08',
            'number' =>  '052',
        ]);
        City::firstOrCreate([
            'name' =>  'Praxedis G. Guerrero',
            'state_id' => '08',
            'number' =>  '053',
        ]);
        City::firstOrCreate([
            'name' =>  'Riva Palacio',
            'state_id' => '08',
            'number' =>  '054',
        ]);
        City::firstOrCreate([
            'name' =>  'Rosales',
            'state_id' => '08',
            'number' =>  '055',
        ]);
        City::firstOrCreate([
            'name' =>  'Rosario',
            'state_id' => '08',
            'number' =>  '056',
        ]);
        City::firstOrCreate([
            'name' =>  'San Francisco de Borja',
            'state_id' => '08',
            'number' =>  '057',
        ]);
        City::firstOrCreate([
            'name' =>  'San Francisco de Conchos',
            'state_id' => '08',
            'number' =>  '058',
        ]);
        City::firstOrCreate([
            'name' =>  'San Francisco del Oro',
            'state_id' => '08',
            'number' =>  '059',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa Bárbara',
            'state_id' => '08',
            'number' =>  '060',
        ]);
        City::firstOrCreate([
            'name' =>  'Satevó',
            'state_id' => '08',
            'number' =>  '061',
        ]);
        City::firstOrCreate([
            'name' =>  'Saucillo',
            'state_id' => '08',
            'number' =>  '062',
        ]);
        City::firstOrCreate([
            'name' =>  'Temósachic',
            'state_id' => '08',
            'number' =>  '063',
        ]);
        City::firstOrCreate([
            'name' =>  'El Tule',
            'state_id' => '08',
            'number' =>  '064',
        ]);
        City::firstOrCreate([
            'name' =>  'Urique',
            'state_id' => '08',
            'number' =>  '065',
        ]);
        City::firstOrCreate([
            'name' =>  'Uruachi',
            'state_id' => '08',
            'number' =>  '066',
        ]);
        City::firstOrCreate([
            'name' =>  'Valle de Zaragoza',
            'state_id' => '08',
            'number' =>  '067',
        ]);
        City::firstOrCreate([
            'name' =>  'Azcapotzalco',
            'state_id' => '09',
            'number' =>  '002',
        ]);
        City::firstOrCreate([
            'name' =>  'Coyoacán',
            'state_id' => '09',
            'number' =>  '003',
        ]);
        City::firstOrCreate([
            'name' =>  'Cuajimalpa de Morelos',
            'state_id' => '09',
            'number' =>  '004',
        ]);
        City::firstOrCreate([
            'name' =>  'Gustavo A. Madero',
            'state_id' => '09',
            'number' =>  '005',
        ]);
        City::firstOrCreate([
            'name' =>  'Iztacalco',
            'state_id' => '09',
            'number' =>  '006',
        ]);
        City::firstOrCreate([
            'name' =>  'Iztapalapa',
            'state_id' => '09',
            'number' =>  '007',
        ]);
        City::firstOrCreate([
            'name' =>  'La Magdalena Contreras',
            'state_id' => '09',
            'number' =>  '008',
        ]);
        City::firstOrCreate([
            'name' =>  'Milpa Alta',
            'state_id' => '09',
            'number' =>  '009',
        ]);
        City::firstOrCreate([
            'name' =>  'Álvaro Obregón',
            'state_id' => '09',
            'number' =>  '010',
        ]);
        City::firstOrCreate([
            'name' =>  'Tláhuac',
            'state_id' => '09',
            'number' =>  '011',
        ]);
        City::firstOrCreate([
            'name' =>  'Tlalpan',
            'state_id' => '09',
            'number' =>  '012',
        ]);
        City::firstOrCreate([
            'name' =>  'Xochimilco',
            'state_id' => '09',
            'number' =>  '013',
        ]);
        City::firstOrCreate([
            'name' =>  'Benito Juárez',
            'state_id' => '09',
            'number' =>  '014',
        ]);
        City::firstOrCreate([
            'name' =>  'Cuauhtémoc',
            'state_id' => '09',
            'number' =>  '015',
        ]);
        City::firstOrCreate([
            'name' =>  'Miguel Hidalgo',
            'state_id' => '09',
            'number' =>  '016',
        ]);
        City::firstOrCreate([
            'name' =>  'Venustiano Carranza',
            'state_id' => '09',
            'number' =>  '017',
        ]);
        City::firstOrCreate([
            'name' =>  'Canatlán',
            'state_id' => '10',
            'number' =>  '001',
        ]);
        City::firstOrCreate([
            'name' =>  'Canelas',
            'state_id' => '10',
            'number' =>  '002',
        ]);
        City::firstOrCreate([
            'name' =>  'Coneto de Comonfort',
            'state_id' => '10',
            'number' =>  '003',
        ]);
        City::firstOrCreate([
            'name' =>  'Cuencamé',
            'state_id' => '10',
            'number' =>  '004',
        ]);
        City::firstOrCreate([
            'name' =>  'Durango',
            'state_id' => '10',
            'number' =>  '005',
        ]);
        City::firstOrCreate([
            'name' =>  'General Simón Bolívar',
            'state_id' => '10',
            'number' =>  '006',
        ]);
        City::firstOrCreate([
            'name' =>  'Gómez Palacio',
            'state_id' => '10',
            'number' =>  '007',
        ]);
        City::firstOrCreate([
            'name' =>  'Guadalupe Victoria',
            'state_id' => '10',
            'number' =>  '008',
        ]);
        City::firstOrCreate([
            'name' =>  'Guanaceví',
            'state_id' => '10',
            'number' =>  '009',
        ]);
        City::firstOrCreate([
            'name' =>  'Hidalgo',
            'state_id' => '10',
            'number' =>  '010',
        ]);
        City::firstOrCreate([
            'name' =>  'Indé',
            'state_id' => '10',
            'number' =>  '011',
        ]);
        City::firstOrCreate([
            'name' =>  'Lerdo',
            'state_id' => '10',
            'number' =>  '012',
        ]);
        City::firstOrCreate([
            'name' =>  'Mapimí',
            'state_id' => '10',
            'number' =>  '013',
        ]);
        City::firstOrCreate([
            'name' =>  'Mezquital',
            'state_id' => '10',
            'number' =>  '014',
        ]);
        City::firstOrCreate([
            'name' =>  'Nazas',
            'state_id' => '10',
            'number' =>  '015',
        ]);
        City::firstOrCreate([
            'name' =>  'Nombre de Dios',
            'state_id' => '10',
            'number' =>  '016',
        ]);
        City::firstOrCreate([
            'name' =>  'Ocampo',
            'state_id' => '10',
            'number' =>  '017',
        ]);
        City::firstOrCreate([
            'name' =>  'El Oro',
            'state_id' => '10',
            'number' =>  '018',
        ]);
        City::firstOrCreate([
            'name' =>  'Otáez',
            'state_id' => '10',
            'number' =>  '019',
        ]);
        City::firstOrCreate([
            'name' =>  'Pánuco de Coronado',
            'state_id' => '10',
            'number' =>  '020',
        ]);
        City::firstOrCreate([
            'name' =>  'Peñón Blanco',
            'state_id' => '10',
            'number' =>  '021',
        ]);
        City::firstOrCreate([
            'name' =>  'Poanas',
            'state_id' => '10',
            'number' =>  '022',
        ]);
        City::firstOrCreate([
            'name' =>  'Pueblo Nuevo',
            'state_id' => '10',
            'number' =>  '023',
        ]);
        City::firstOrCreate([
            'name' =>  'Rodeo',
            'state_id' => '10',
            'number' =>  '024',
        ]);
        City::firstOrCreate([
            'name' =>  'San Bernardo',
            'state_id' => '10',
            'number' =>  '025',
        ]);
        City::firstOrCreate([
            'name' =>  'San Dimas',
            'state_id' => '10',
            'number' =>  '026',
        ]);
        City::firstOrCreate([
            'name' =>  'San Juan de Guadalupe',
            'state_id' => '10',
            'number' =>  '027',
        ]);
        City::firstOrCreate([
            'name' =>  'San Juan del Río',
            'state_id' => '10',
            'number' =>  '028',
        ]);
        City::firstOrCreate([
            'name' =>  'San Luis del Cordero',
            'state_id' => '10',
            'number' =>  '029',
        ]);
        City::firstOrCreate([
            'name' =>  'San Pedro del Gallo',
            'state_id' => '10',
            'number' =>  '030',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa Clara',
            'state_id' => '10',
            'number' =>  '031',
        ]);
        City::firstOrCreate([
            'name' =>  'Santiago Papasquiaro',
            'state_id' => '10',
            'number' =>  '032',
        ]);
        City::firstOrCreate([
            'name' =>  'Súchil',
            'state_id' => '10',
            'number' =>  '033',
        ]);
        City::firstOrCreate([
            'name' =>  'Tamazula',
            'state_id' => '10',
            'number' =>  '034',
        ]);
        City::firstOrCreate([
            'name' =>  'Tepehuanes',
            'state_id' => '10',
            'number' =>  '035',
        ]);
        City::firstOrCreate([
            'name' =>  'Tlahualilo',
            'state_id' => '10',
            'number' =>  '036',
        ]);
        City::firstOrCreate([
            'name' =>  'Topia',
            'state_id' => '10',
            'number' =>  '037',
        ]);
        City::firstOrCreate([
            'name' =>  'Vicente Guerrero',
            'state_id' => '10',
            'number' =>  '038',
        ]);
        City::firstOrCreate([
            'name' =>  'Nuevo Ideal',
            'state_id' => '10',
            'number' =>  '039',
        ]);
        City::firstOrCreate([
            'name' =>  'Abasolo',
            'state_id' => '11',
            'number' =>  '001',
        ]);
        City::firstOrCreate([
            'name' =>  'Acámbaro',
            'state_id' => '11',
            'number' =>  '002',
        ]);
        City::firstOrCreate([
            'name' =>  'San Miguel de Allende',
            'state_id' => '11',
            'number' =>  '003',
        ]);
        City::firstOrCreate([
            'name' =>  'Apaseo el Alto',
            'state_id' => '11',
            'number' =>  '004',
        ]);
        City::firstOrCreate([
            'name' =>  'Apaseo el Grande',
            'state_id' => '11',
            'number' =>  '005',
        ]);
        City::firstOrCreate([
            'name' =>  'Atarjea',
            'state_id' => '11',
            'number' =>  '006',
        ]);
        City::firstOrCreate([
            'name' =>  'Celaya',
            'state_id' => '11',
            'number' =>  '007',
        ]);
        City::firstOrCreate([
            'name' =>  'Manuel Doblado',
            'state_id' => '11',
            'number' =>  '008',
        ]);
        City::firstOrCreate([
            'name' =>  'Comonfort',
            'state_id' => '11',
            'number' =>  '009',
        ]);
        City::firstOrCreate([
            'name' =>  'Coroneo',
            'state_id' => '11',
            'number' =>  '010',
        ]);
        City::firstOrCreate([
            'name' =>  'Cortazar',
            'state_id' => '11',
            'number' =>  '011',
        ]);
        City::firstOrCreate([
            'name' =>  'Cuerámaro',
            'state_id' => '11',
            'number' =>  '012',
        ]);
        City::firstOrCreate([
            'name' =>  'Doctor Mora',
            'state_id' => '11',
            'number' =>  '013',
        ]);
        City::firstOrCreate([
            'name' =>  'Dolores Hidalgo Cuna de la Independencia Nacional',
            'state_id' => '11',
            'number' =>  '014',
        ]);
        City::firstOrCreate([
            'name' =>  'Guanajuato',
            'state_id' => '11',
            'number' =>  '015',
        ]);
        City::firstOrCreate([
            'name' =>  'Huanímaro',
            'state_id' => '11',
            'number' =>  '016',
        ]);
        City::firstOrCreate([
            'name' =>  'Irapuato',
            'state_id' => '11',
            'number' =>  '017',
        ]);
        City::firstOrCreate([
            'name' =>  'Jaral del Progreso',
            'state_id' => '11',
            'number' =>  '018',
        ]);
        City::firstOrCreate([
            'name' =>  'Jerécuaro',
            'state_id' => '11',
            'number' =>  '019',
        ]);
        City::firstOrCreate([
            'name' =>  'León',
            'state_id' => '11',
            'number' =>  '020',
        ]);
        City::firstOrCreate([
            'name' =>  'Moroleón',
            'state_id' => '11',
            'number' =>  '021',
        ]);
        City::firstOrCreate([
            'name' =>  'Ocampo',
            'state_id' => '11',
            'number' =>  '022',
        ]);
        City::firstOrCreate([
            'name' =>  'Pénjamo',
            'state_id' => '11',
            'number' =>  '023',
        ]);
        City::firstOrCreate([
            'name' =>  'Pueblo Nuevo',
            'state_id' => '11',
            'number' =>  '024',
        ]);
        City::firstOrCreate([
            'name' =>  'Purísima del Rincón',
            'state_id' => '11',
            'number' =>  '025',
        ]);
        City::firstOrCreate([
            'name' =>  'Romita',
            'state_id' => '11',
            'number' =>  '026',
        ]);
        City::firstOrCreate([
            'name' =>  'Salamanca',
            'state_id' => '11',
            'number' =>  '027',
        ]);
        City::firstOrCreate([
            'name' =>  'Salvatierra',
            'state_id' => '11',
            'number' =>  '028',
        ]);
        City::firstOrCreate([
            'name' =>  'San Diego de la Unión',
            'state_id' => '11',
            'number' =>  '029',
        ]);
        City::firstOrCreate([
            'name' =>  'San Felipe',
            'state_id' => '11',
            'number' =>  '030',
        ]);
        City::firstOrCreate([
            'name' =>  'San Francisco del Rincón',
            'state_id' => '11',
            'number' =>  '031',
        ]);
        City::firstOrCreate([
            'name' =>  'San José Iturbide',
            'state_id' => '11',
            'number' =>  '032',
        ]);
        City::firstOrCreate([
            'name' =>  'San Luis de la Paz',
            'state_id' => '11',
            'number' =>  '033',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa Catarina',
            'state_id' => '11',
            'number' =>  '034',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa Cruz de Juventino Rosas',
            'state_id' => '11',
            'number' =>  '035',
        ]);
        City::firstOrCreate([
            'name' =>  'Santiago Maravatío',
            'state_id' => '11',
            'number' =>  '036',
        ]);
        City::firstOrCreate([
            'name' =>  'Silao de la Victoria',
            'state_id' => '11',
            'number' =>  '037',
        ]);
        City::firstOrCreate([
            'name' =>  'Tarandacuao',
            'state_id' => '11',
            'number' =>  '038',
        ]);
        City::firstOrCreate([
            'name' =>  'Tarimoro',
            'state_id' => '11',
            'number' =>  '039',
        ]);
        City::firstOrCreate([
            'name' =>  'Tierra Blanca',
            'state_id' => '11',
            'number' =>  '040',
        ]);
        City::firstOrCreate([
            'name' =>  'Uriangato',
            'state_id' => '11',
            'number' =>  '041',
        ]);
        City::firstOrCreate([
            'name' =>  'Valle de Santiago',
            'state_id' => '11',
            'number' =>  '042',
        ]);
        City::firstOrCreate([
            'name' =>  'Victoria',
            'state_id' => '11',
            'number' =>  '043',
        ]);
        City::firstOrCreate([
            'name' =>  'Villagrán',
            'state_id' => '11',
            'number' =>  '044',
        ]);
        City::firstOrCreate([
            'name' =>  'Xichú',
            'state_id' => '11',
            'number' =>  '045',
        ]);
        City::firstOrCreate([
            'name' =>  'Yuriria',
            'state_id' => '11',
            'number' =>  '046',
        ]);
        City::firstOrCreate([
            'name' =>  'Acapulco de Juárez',
            'state_id' => '12',
            'number' =>  '001',
        ]);
        City::firstOrCreate([
            'name' =>  'Ahuacuotzingo',
            'state_id' => '12',
            'number' =>  '002',
        ]);
        City::firstOrCreate([
            'name' =>  'Ajuchitlán del Progreso',
            'state_id' => '12',
            'number' =>  '003',
        ]);
        City::firstOrCreate([
            'name' =>  'Alcozauca de Guerrero',
            'state_id' => '12',
            'number' =>  '004',
        ]);
        City::firstOrCreate([
            'name' =>  'Alpoyeca',
            'state_id' => '12',
            'number' =>  '005',
        ]);
        City::firstOrCreate([
            'name' =>  'Apaxtla',
            'state_id' => '12',
            'number' =>  '006',
        ]);
        City::firstOrCreate([
            'name' =>  'Arcelia',
            'state_id' => '12',
            'number' =>  '007',
        ]);
        City::firstOrCreate([
            'name' =>  'Atenango del Río',
            'state_id' => '12',
            'number' =>  '008',
        ]);
        City::firstOrCreate([
            'name' =>  'Atlamajalcingo del Monte',
            'state_id' => '12',
            'number' =>  '009',
        ]);
        City::firstOrCreate([
            'name' =>  'Atlixtac',
            'state_id' => '12',
            'number' =>  '010',
        ]);
        City::firstOrCreate([
            'name' =>  'Atoyac de Álvarez',
            'state_id' => '12',
            'number' =>  '011',
        ]);
        City::firstOrCreate([
            'name' =>  'Ayutla de los Libres',
            'state_id' => '12',
            'number' =>  '012',
        ]);
        City::firstOrCreate([
            'name' =>  'Azoyú',
            'state_id' => '12',
            'number' =>  '013',
        ]);
        City::firstOrCreate([
            'name' =>  'Benito Juárez',
            'state_id' => '12',
            'number' =>  '014',
        ]);
        City::firstOrCreate([
            'name' =>  'Buenavista de Cuéllar',
            'state_id' => '12',
            'number' =>  '015',
        ]);
        City::firstOrCreate([
            'name' =>  'Coahuayutla de José María Izazaga',
            'state_id' => '12',
            'number' =>  '016',
        ]);
        City::firstOrCreate([
            'name' =>  'Cocula',
            'state_id' => '12',
            'number' =>  '017',
        ]);
        City::firstOrCreate([
            'name' =>  'Copala',
            'state_id' => '12',
            'number' =>  '018',
        ]);
        City::firstOrCreate([
            'name' =>  'Copalillo',
            'state_id' => '12',
            'number' =>  '019',
        ]);
        City::firstOrCreate([
            'name' =>  'Copanatoyac',
            'state_id' => '12',
            'number' =>  '020',
        ]);
        City::firstOrCreate([
            'name' =>  'Coyuca de Benítez',
            'state_id' => '12',
            'number' =>  '021',
        ]);
        City::firstOrCreate([
            'name' =>  'Coyuca de Catalán',
            'state_id' => '12',
            'number' =>  '022',
        ]);
        City::firstOrCreate([
            'name' =>  'Cuajinicuilapa',
            'state_id' => '12',
            'number' =>  '023',
        ]);
        City::firstOrCreate([
            'name' =>  'Cualác',
            'state_id' => '12',
            'number' =>  '024',
        ]);
        City::firstOrCreate([
            'name' =>  'Cuautepec',
            'state_id' => '12',
            'number' =>  '025',
        ]);
        City::firstOrCreate([
            'name' =>  'Cuetzala del Progreso',
            'state_id' => '12',
            'number' =>  '026',
        ]);
        City::firstOrCreate([
            'name' =>  'Cutzamala de Pinzón',
            'state_id' => '12',
            'number' =>  '027',
        ]);
        City::firstOrCreate([
            'name' =>  'Chilapa de Álvarez',
            'state_id' => '12',
            'number' =>  '028',
        ]);
        City::firstOrCreate([
            'name' =>  'Chilpancingo de los Bravo',
            'state_id' => '12',
            'number' =>  '029',
        ]);
        City::firstOrCreate([
            'name' =>  'Florencio Villarreal',
            'state_id' => '12',
            'number' =>  '030',
        ]);
        City::firstOrCreate([
            'name' =>  'General Canuto A. Neri',
            'state_id' => '12',
            'number' =>  '031',
        ]);
        City::firstOrCreate([
            'name' =>  'General Heliodoro Castillo',
            'state_id' => '12',
            'number' =>  '032',
        ]);
        City::firstOrCreate([
            'name' =>  'Huamuxtitlán',
            'state_id' => '12',
            'number' =>  '033',
        ]);
        City::firstOrCreate([
            'name' =>  'Huitzuco de los Figueroa',
            'state_id' => '12',
            'number' =>  '034',
        ]);
        City::firstOrCreate([
            'name' =>  'Iguala de la Independencia',
            'state_id' => '12',
            'number' =>  '035',
        ]);
        City::firstOrCreate([
            'name' =>  'Igualapa',
            'state_id' => '12',
            'number' =>  '036',
        ]);
        City::firstOrCreate([
            'name' =>  'Ixcateopan de Cuauhtémoc',
            'state_id' => '12',
            'number' =>  '037',
        ]);
        City::firstOrCreate([
            'name' =>  'Zihuatanejo de Azueta',
            'state_id' => '12',
            'number' =>  '038',
        ]);
        City::firstOrCreate([
            'name' =>  'Juan R. Escudero',
            'state_id' => '12',
            'number' =>  '039',
        ]);
        City::firstOrCreate([
            'name' =>  'Leonardo Bravo',
            'state_id' => '12',
            'number' =>  '040',
        ]);
        City::firstOrCreate([
            'name' =>  'Malinaltepec',
            'state_id' => '12',
            'number' =>  '041',
        ]);
        City::firstOrCreate([
            'name' =>  'Mártir de Cuilapan',
            'state_id' => '12',
            'number' =>  '042',
        ]);
        City::firstOrCreate([
            'name' =>  'Metlatónoc',
            'state_id' => '12',
            'number' =>  '043',
        ]);
        City::firstOrCreate([
            'name' =>  'Mochitlán',
            'state_id' => '12',
            'number' =>  '044',
        ]);
        City::firstOrCreate([
            'name' =>  'Olinalá',
            'state_id' => '12',
            'number' =>  '045',
        ]);
        City::firstOrCreate([
            'name' =>  'Ometepec',
            'state_id' => '12',
            'number' =>  '046',
        ]);
        City::firstOrCreate([
            'name' =>  'Pedro Ascencio Alquisiras',
            'state_id' => '12',
            'number' =>  '047',
        ]);
        City::firstOrCreate([
            'name' =>  'Petatlán',
            'state_id' => '12',
            'number' =>  '048',
        ]);
        City::firstOrCreate([
            'name' =>  'Pilcaya',
            'state_id' => '12',
            'number' =>  '049',
        ]);
        City::firstOrCreate([
            'name' =>  'Pungarabato',
            'state_id' => '12',
            'number' =>  '050',
        ]);
        City::firstOrCreate([
            'name' =>  'Quechultenango',
            'state_id' => '12',
            'number' =>  '051',
        ]);
        City::firstOrCreate([
            'name' =>  'San Luis Acatlán',
            'state_id' => '12',
            'number' =>  '052',
        ]);
        City::firstOrCreate([
            'name' =>  'San Marcos',
            'state_id' => '12',
            'number' =>  '053',
        ]);
        City::firstOrCreate([
            'name' =>  'San Miguel Totolapan',
            'state_id' => '12',
            'number' =>  '054',
        ]);
        City::firstOrCreate([
            'name' =>  'Taxco de Alarcón',
            'state_id' => '12',
            'number' =>  '055',
        ]);
        City::firstOrCreate([
            'name' =>  'Tecoanapa',
            'state_id' => '12',
            'number' =>  '056',
        ]);
        City::firstOrCreate([
            'name' =>  'Técpan de Galeana',
            'state_id' => '12',
            'number' =>  '057',
        ]);
        City::firstOrCreate([
            'name' =>  'Teloloapan',
            'state_id' => '12',
            'number' =>  '058',
        ]);
        City::firstOrCreate([
            'name' =>  'Tepecoacuilco de Trujano',
            'state_id' => '12',
            'number' =>  '059',
        ]);
        City::firstOrCreate([
            'name' =>  'Tetipac',
            'state_id' => '12',
            'number' =>  '060',
        ]);
        City::firstOrCreate([
            'name' =>  'Tixtla de Guerrero',
            'state_id' => '12',
            'number' =>  '061',
        ]);
        City::firstOrCreate([
            'name' =>  'Tlacoachistlahuaca',
            'state_id' => '12',
            'number' =>  '062',
        ]);
        City::firstOrCreate([
            'name' =>  'Tlacoapa',
            'state_id' => '12',
            'number' =>  '063',
        ]);
        City::firstOrCreate([
            'name' =>  'Tlalchapa',
            'state_id' => '12',
            'number' =>  '064',
        ]);
        City::firstOrCreate([
            'name' =>  'Tlalixtaquilla de Maldonado',
            'state_id' => '12',
            'number' =>  '065',
        ]);
        City::firstOrCreate([
            'name' =>  'Tlapa de Comonfort',
            'state_id' => '12',
            'number' =>  '066',
        ]);
        City::firstOrCreate([
            'name' =>  'Tlapehuala',
            'state_id' => '12',
            'number' =>  '067',
        ]);
        City::firstOrCreate([
            'name' =>  'La Unión de Isidoro Montes de Oca',
            'state_id' => '12',
            'number' =>  '068',
        ]);
        City::firstOrCreate([
            'name' =>  'Xalpatláhuac',
            'state_id' => '12',
            'number' =>  '069',
        ]);
        City::firstOrCreate([
            'name' =>  'Xochihuehuetlán',
            'state_id' => '12',
            'number' =>  '070',
        ]);
        City::firstOrCreate([
            'name' =>  'Xochistlahuaca',
            'state_id' => '12',
            'number' =>  '071',
        ]);
        City::firstOrCreate([
            'name' =>  'Zapotitlán Tablas',
            'state_id' => '12',
            'number' =>  '072',
        ]);
        City::firstOrCreate([
            'name' =>  'Zirándaro',
            'state_id' => '12',
            'number' =>  '073',
        ]);
        City::firstOrCreate([
            'name' =>  'Zitlala',
            'state_id' => '12',
            'number' =>  '074',
        ]);
        City::firstOrCreate([
            'name' =>  'Eduardo Neri',
            'state_id' => '12',
            'number' =>  '075',
        ]);
        City::firstOrCreate([
            'name' =>  'Acatepec',
            'state_id' => '12',
            'number' =>  '076',
        ]);
        City::firstOrCreate([
            'name' =>  'Marquelia',
            'state_id' => '12',
            'number' =>  '077',
        ]);
        City::firstOrCreate([
            'name' =>  'Cochoapa el Grande',
            'state_id' => '12',
            'number' =>  '078',
        ]);
        City::firstOrCreate([
            'name' =>  'José Joaquín de Herrera',
            'state_id' => '12',
            'number' =>  '079',
        ]);
        City::firstOrCreate([
            'name' =>  'Juchitán',
            'state_id' => '12',
            'number' =>  '080',
        ]);
        City::firstOrCreate([
            'name' =>  'Iliatenco',
            'state_id' => '12',
            'number' =>  '081',
        ]);
        City::firstOrCreate([
            'name' =>  'Acatlán',
            'state_id' => '13',
            'number' =>  '001',
        ]);
        City::firstOrCreate([
            'name' =>  'Acaxochitlán',
            'state_id' => '13',
            'number' =>  '002',
        ]);
        City::firstOrCreate([
            'name' =>  'Actopan',
            'state_id' => '13',
            'number' =>  '003',
        ]);
        City::firstOrCreate([
            'name' =>  'Agua Blanca de Iturbide',
            'state_id' => '13',
            'number' =>  '004',
        ]);
        City::firstOrCreate([
            'name' =>  'Ajacuba',
            'state_id' => '13',
            'number' =>  '005',
        ]);
        City::firstOrCreate([
            'name' =>  'Alfajayucan',
            'state_id' => '13',
            'number' =>  '006',
        ]);
        City::firstOrCreate([
            'name' =>  'Almoloya',
            'state_id' => '13',
            'number' =>  '007',
        ]);
        City::firstOrCreate([
            'name' =>  'Apan',
            'state_id' => '13',
            'number' =>  '008',
        ]);
        City::firstOrCreate([
            'name' =>  'El Arenal',
            'state_id' => '13',
            'number' =>  '009',
        ]);
        City::firstOrCreate([
            'name' =>  'Atitalaquia',
            'state_id' => '13',
            'number' =>  '010',
        ]);
        City::firstOrCreate([
            'name' =>  'Atlapexco',
            'state_id' => '13',
            'number' =>  '011',
        ]);
        City::firstOrCreate([
            'name' =>  'Atotonilco el Grande',
            'state_id' => '13',
            'number' =>  '012',
        ]);
        City::firstOrCreate([
            'name' =>  'Atotonilco de Tula',
            'state_id' => '13',
            'number' =>  '013',
        ]);
        City::firstOrCreate([
            'name' =>  'Calnali',
            'state_id' => '13',
            'number' =>  '014',
        ]);
        City::firstOrCreate([
            'name' =>  'Cardonal',
            'state_id' => '13',
            'number' =>  '015',
        ]);
        City::firstOrCreate([
            'name' =>  'Cuautepec de Hinojosa',
            'state_id' => '13',
            'number' =>  '016',
        ]);
        City::firstOrCreate([
            'name' =>  'Chapantongo',
            'state_id' => '13',
            'number' =>  '017',
        ]);
        City::firstOrCreate([
            'name' =>  'Chapulhuacán',
            'state_id' => '13',
            'number' =>  '018',
        ]);
        City::firstOrCreate([
            'name' =>  'Chilcuautla',
            'state_id' => '13',
            'number' =>  '019',
        ]);
        City::firstOrCreate([
            'name' =>  'Eloxochitlán',
            'state_id' => '13',
            'number' =>  '020',
        ]);
        City::firstOrCreate([
            'name' =>  'Emiliano Zapata',
            'state_id' => '13',
            'number' =>  '021',
        ]);
        City::firstOrCreate([
            'name' =>  'Epazoyucan',
            'state_id' => '13',
            'number' =>  '022',
        ]);
        City::firstOrCreate([
            'name' =>  'Francisco I. Madero',
            'state_id' => '13',
            'number' =>  '023',
        ]);
        City::firstOrCreate([
            'name' =>  'Huasca de Ocampo',
            'state_id' => '13',
            'number' =>  '024',
        ]);
        City::firstOrCreate([
            'name' =>  'Huautla',
            'state_id' => '13',
            'number' =>  '025',
        ]);
        City::firstOrCreate([
            'name' =>  'Huazalingo',
            'state_id' => '13',
            'number' =>  '026',
        ]);
        City::firstOrCreate([
            'name' =>  'Huehuetla',
            'state_id' => '13',
            'number' =>  '027',
        ]);
        City::firstOrCreate([
            'name' =>  'Huejutla de Reyes',
            'state_id' => '13',
            'number' =>  '028',
        ]);
        City::firstOrCreate([
            'name' =>  'Huichapan',
            'state_id' => '13',
            'number' =>  '029',
        ]);
        City::firstOrCreate([
            'name' =>  'Ixmiquilpan',
            'state_id' => '13',
            'number' =>  '030',
        ]);
        City::firstOrCreate([
            'name' =>  'Jacala de Ledezma',
            'state_id' => '13',
            'number' =>  '031',
        ]);
        City::firstOrCreate([
            'name' =>  'Jaltocán',
            'state_id' => '13',
            'number' =>  '032',
        ]);
        City::firstOrCreate([
            'name' =>  'Juárez Hidalgo',
            'state_id' => '13',
            'number' =>  '033',
        ]);
        City::firstOrCreate([
            'name' =>  'Lolotla',
            'state_id' => '13',
            'number' =>  '034',
        ]);
        City::firstOrCreate([
            'name' =>  'Metepec',
            'state_id' => '13',
            'number' =>  '035',
        ]);
        City::firstOrCreate([
            'name' =>  'San Agustín Metzquititlán',
            'state_id' => '13',
            'number' =>  '036',
        ]);
        City::firstOrCreate([
            'name' =>  'Metztitlán',
            'state_id' => '13',
            'number' =>  '037',
        ]);
        City::firstOrCreate([
            'name' =>  'Mineral del Chico',
            'state_id' => '13',
            'number' =>  '038',
        ]);
        City::firstOrCreate([
            'name' =>  'Mineral del Monte',
            'state_id' => '13',
            'number' =>  '039',
        ]);
        City::firstOrCreate([
            'name' =>  'La Misión',
            'state_id' => '13',
            'number' =>  '040',
        ]);
        City::firstOrCreate([
            'name' =>  'Mixquiahuala de Juárez',
            'state_id' => '13',
            'number' =>  '041',
        ]);
        City::firstOrCreate([
            'name' =>  'Molango de Escamilla',
            'state_id' => '13',
            'number' =>  '042',
        ]);
        City::firstOrCreate([
            'name' =>  'Nicolás Flores',
            'state_id' => '13',
            'number' =>  '043',
        ]);
        City::firstOrCreate([
            'name' =>  'Nopala de Villagrán',
            'state_id' => '13',
            'number' =>  '044',
        ]);
        City::firstOrCreate([
            'name' =>  'Omitlán de Juárez',
            'state_id' => '13',
            'number' =>  '045',
        ]);
        City::firstOrCreate([
            'name' =>  'San Felipe Orizatlán',
            'state_id' => '13',
            'number' =>  '046',
        ]);
        City::firstOrCreate([
            'name' =>  'Pacula',
            'state_id' => '13',
            'number' =>  '047',
        ]);
        City::firstOrCreate([
            'name' =>  'Pachuca de Soto',
            'state_id' => '13',
            'number' =>  '048',
        ]);
        City::firstOrCreate([
            'name' =>  'Pisaflores',
            'state_id' => '13',
            'number' =>  '049',
        ]);
        City::firstOrCreate([
            'name' =>  'Progreso de Obregón',
            'state_id' => '13',
            'number' =>  '050',
        ]);
        City::firstOrCreate([
            'name' =>  'Mineral de la Reforma',
            'state_id' => '13',
            'number' =>  '051',
        ]);
        City::firstOrCreate([
            'name' =>  'San Agustín Tlaxiaca',
            'state_id' => '13',
            'number' =>  '052',
        ]);
        City::firstOrCreate([
            'name' =>  'San Bartolo Tutotepec',
            'state_id' => '13',
            'number' =>  '053',
        ]);
        City::firstOrCreate([
            'name' =>  'San Salvador',
            'state_id' => '13',
            'number' =>  '054',
        ]);
        City::firstOrCreate([
            'name' =>  'Santiago de Anaya',
            'state_id' => '13',
            'number' =>  '055',
        ]);
        City::firstOrCreate([
            'name' =>  'Santiago Tulantepec de Lugo Guerrero',
            'state_id' => '13',
            'number' =>  '056',
        ]);
        City::firstOrCreate([
            'name' =>  'Singuilucan',
            'state_id' => '13',
            'number' =>  '057',
        ]);
        City::firstOrCreate([
            'name' =>  'Tasquillo',
            'state_id' => '13',
            'number' =>  '058',
        ]);
        City::firstOrCreate([
            'name' =>  'Tecozautla',
            'state_id' => '13',
            'number' =>  '059',
        ]);
        City::firstOrCreate([
            'name' =>  'Tenango de Doria',
            'state_id' => '13',
            'number' =>  '060',
        ]);
        City::firstOrCreate([
            'name' =>  'Tepeapulco',
            'state_id' => '13',
            'number' =>  '061',
        ]);
        City::firstOrCreate([
            'name' =>  'Tepehuacán de Guerrero',
            'state_id' => '13',
            'number' =>  '062',
        ]);
        City::firstOrCreate([
            'name' =>  'Tepeji del Río de Ocampo',
            'state_id' => '13',
            'number' =>  '063',
        ]);
        City::firstOrCreate([
            'name' =>  'Tepetitlán',
            'state_id' => '13',
            'number' =>  '064',
        ]);
        City::firstOrCreate([
            'name' =>  'Tetepango',
            'state_id' => '13',
            'number' =>  '065',
        ]);
        City::firstOrCreate([
            'name' =>  'Villa de Tezontepec',
            'state_id' => '13',
            'number' =>  '066',
        ]);
        City::firstOrCreate([
            'name' =>  'Tezontepec de Aldama',
            'state_id' => '13',
            'number' =>  '067',
        ]);
        City::firstOrCreate([
            'name' =>  'Tianguistengo',
            'state_id' => '13',
            'number' =>  '068',
        ]);
        City::firstOrCreate([
            'name' =>  'Tizayuca',
            'state_id' => '13',
            'number' =>  '069',
        ]);
        City::firstOrCreate([
            'name' =>  'Tlahuelilpan',
            'state_id' => '13',
            'number' =>  '070',
        ]);
        City::firstOrCreate([
            'name' =>  'Tlahuiltepa',
            'state_id' => '13',
            'number' =>  '071',
        ]);
        City::firstOrCreate([
            'name' =>  'Tlanalapa',
            'state_id' => '13',
            'number' =>  '072',
        ]);
        City::firstOrCreate([
            'name' =>  'Tlanchinol',
            'state_id' => '13',
            'number' =>  '073',
        ]);
        City::firstOrCreate([
            'name' =>  'Tlaxcoapan',
            'state_id' => '13',
            'number' =>  '074',
        ]);
        City::firstOrCreate([
            'name' =>  'Tolcayuca',
            'state_id' => '13',
            'number' =>  '075',
        ]);
        City::firstOrCreate([
            'name' =>  'Tula de Allende',
            'state_id' => '13',
            'number' =>  '076',
        ]);
        City::firstOrCreate([
            'name' =>  'Tulancingo de Bravo',
            'state_id' => '13',
            'number' =>  '077',
        ]);
        City::firstOrCreate([
            'name' =>  'Xochiatipan',
            'state_id' => '13',
            'number' =>  '078',
        ]);
        City::firstOrCreate([
            'name' =>  'Xochicoatlán',
            'state_id' => '13',
            'number' =>  '079',
        ]);
        City::firstOrCreate([
            'name' =>  'Yahualica',
            'state_id' => '13',
            'number' =>  '080',
        ]);
        City::firstOrCreate([
            'name' =>  'Zacualtipán de Ángeles',
            'state_id' => '13',
            'number' =>  '081',
        ]);
        City::firstOrCreate([
            'name' =>  'Zapotlán de Juárez',
            'state_id' => '13',
            'number' =>  '082',
        ]);
        City::firstOrCreate([
            'name' =>  'Zempoala',
            'state_id' => '13',
            'number' =>  '083',
        ]);
        City::firstOrCreate([
            'name' =>  'Zimapán',
            'state_id' => '13',
            'number' =>  '084',
        ]);
        City::firstOrCreate([
            'name' =>  'Acatic',
            'state_id' => '14',
            'number' =>  '001',
        ]);
        City::firstOrCreate([
            'name' =>  'Acatlán de Juárez',
            'state_id' => '14',
            'number' =>  '002',
        ]);
        City::firstOrCreate([
            'name' =>  'Ahualulco de Mercado',
            'state_id' => '14',
            'number' =>  '003',
        ]);
        City::firstOrCreate([
            'name' =>  'Amacueca',
            'state_id' => '14',
            'number' =>  '004',
        ]);
        City::firstOrCreate([
            'name' =>  'Amatitán',
            'state_id' => '14',
            'number' =>  '005',
        ]);
        City::firstOrCreate([
            'name' =>  'Ameca',
            'state_id' => '14',
            'number' =>  '006',
        ]);
        City::firstOrCreate([
            'name' =>  'San Juanito de Escobedo',
            'state_id' => '14',
            'number' =>  '007',
        ]);
        City::firstOrCreate([
            'name' =>  'Arandas',
            'state_id' => '14',
            'number' =>  '008',
        ]);
        City::firstOrCreate([
            'name' =>  'El Arenal',
            'state_id' => '14',
            'number' =>  '009',
        ]);
        City::firstOrCreate([
            'name' =>  'Atemajac de Brizuela',
            'state_id' => '14',
            'number' =>  '010',
        ]);
        City::firstOrCreate([
            'name' =>  'Atengo',
            'state_id' => '14',
            'number' =>  '011',
        ]);
        City::firstOrCreate([
            'name' =>  'Atenguillo',
            'state_id' => '14',
            'number' =>  '012',
        ]);
        City::firstOrCreate([
            'name' =>  'Atotonilco el Alto',
            'state_id' => '14',
            'number' =>  '013',
        ]);
        City::firstOrCreate([
            'name' =>  'Atoyac',
            'state_id' => '14',
            'number' =>  '014',
        ]);
        City::firstOrCreate([
            'name' =>  'Autlán de Navarro',
            'state_id' => '14',
            'number' =>  '015',
        ]);
        City::firstOrCreate([
            'name' =>  'Ayotlán',
            'state_id' => '14',
            'number' =>  '016',
        ]);
        City::firstOrCreate([
            'name' =>  'Ayutla',
            'state_id' => '14',
            'number' =>  '017',
        ]);
        City::firstOrCreate([
            'name' =>  'La Barca',
            'state_id' => '14',
            'number' =>  '018',
        ]);
        City::firstOrCreate([
            'name' =>  'Bolaños',
            'state_id' => '14',
            'number' =>  '019',
        ]);
        City::firstOrCreate([
            'name' =>  'Cabo Corrientes',
            'state_id' => '14',
            'number' =>  '020',
        ]);
        City::firstOrCreate([
            'name' =>  'Casimiro Castillo',
            'state_id' => '14',
            'number' =>  '021',
        ]);
        City::firstOrCreate([
            'name' =>  'Cihuatlán',
            'state_id' => '14',
            'number' =>  '022',
        ]);
        City::firstOrCreate([
            'name' =>  'Zapotlán el Grande',
            'state_id' => '14',
            'number' =>  '023',
        ]);
        City::firstOrCreate([
            'name' =>  'Cocula',
            'state_id' => '14',
            'number' =>  '024',
        ]);
        City::firstOrCreate([
            'name' =>  'Colotlán',
            'state_id' => '14',
            'number' =>  '025',
        ]);
        City::firstOrCreate([
            'name' =>  'Concepción de Buenos Aires',
            'state_id' => '14',
            'number' =>  '026',
        ]);
        City::firstOrCreate([
            'name' =>  'Cuautitlán de García Barragán',
            'state_id' => '14',
            'number' =>  '027',
        ]);
        City::firstOrCreate([
            'name' =>  'Cuautla',
            'state_id' => '14',
            'number' =>  '028',
        ]);
        City::firstOrCreate([
            'name' =>  'Cuquío',
            'state_id' => '14',
            'number' =>  '029',
        ]);
        City::firstOrCreate([
            'name' =>  'Chapala',
            'state_id' => '14',
            'number' =>  '030',
        ]);
        City::firstOrCreate([
            'name' =>  'Chimaltitán',
            'state_id' => '14',
            'number' =>  '031',
        ]);
        City::firstOrCreate([
            'name' =>  'Chiquilistlán',
            'state_id' => '14',
            'number' =>  '032',
        ]);
        City::firstOrCreate([
            'name' =>  'Degollado',
            'state_id' => '14',
            'number' =>  '033',
        ]);
        City::firstOrCreate([
            'name' =>  'Ejutla',
            'state_id' => '14',
            'number' =>  '034',
        ]);
        City::firstOrCreate([
            'name' =>  'Encarnación de Díaz',
            'state_id' => '14',
            'number' =>  '035',
        ]);
        City::firstOrCreate([
            'name' =>  'Etzatlán',
            'state_id' => '14',
            'number' =>  '036',
        ]);
        City::firstOrCreate([
            'name' =>  'El Grullo',
            'state_id' => '14',
            'number' =>  '037',
        ]);
        City::firstOrCreate([
            'name' =>  'Guachinango',
            'state_id' => '14',
            'number' =>  '038',
        ]);
        City::firstOrCreate([
            'name' =>  'Guadalajara',
            'state_id' => '14',
            'number' =>  '039',
        ]);
        City::firstOrCreate([
            'name' =>  'Hostotipaquillo',
            'state_id' => '14',
            'number' =>  '040',
        ]);
        City::firstOrCreate([
            'name' =>  'Huejúcar',
            'state_id' => '14',
            'number' =>  '041',
        ]);
        City::firstOrCreate([
            'name' =>  'Huejuquilla el Alto',
            'state_id' => '14',
            'number' =>  '042',
        ]);
        City::firstOrCreate([
            'name' =>  'La Huerta',
            'state_id' => '14',
            'number' =>  '043',
        ]);
        City::firstOrCreate([
            'name' =>  'Ixtlahuacán de los Membrillos',
            'state_id' => '14',
            'number' =>  '044',
        ]);
        City::firstOrCreate([
            'name' =>  'Ixtlahuacán del Río',
            'state_id' => '14',
            'number' =>  '045',
        ]);
        City::firstOrCreate([
            'name' =>  'Jalostotitlán',
            'state_id' => '14',
            'number' =>  '046',
        ]);
        City::firstOrCreate([
            'name' =>  'Jamay',
            'state_id' => '14',
            'number' =>  '047',
        ]);
        City::firstOrCreate([
            'name' =>  'Jesús María',
            'state_id' => '14',
            'number' =>  '048',
        ]);
        City::firstOrCreate([
            'name' =>  'Jilotlán de los Dolores',
            'state_id' => '14',
            'number' =>  '049',
        ]);
        City::firstOrCreate([
            'name' =>  'Jocotepec',
            'state_id' => '14',
            'number' =>  '050',
        ]);
        City::firstOrCreate([
            'name' =>  'Juanacatlán',
            'state_id' => '14',
            'number' =>  '051',
        ]);
        City::firstOrCreate([
            'name' =>  'Juchitlán',
            'state_id' => '14',
            'number' =>  '052',
        ]);
        City::firstOrCreate([
            'name' =>  'Lagos de Moreno',
            'state_id' => '14',
            'number' =>  '053',
        ]);
        City::firstOrCreate([
            'name' =>  'El Limón',
            'state_id' => '14',
            'number' =>  '054',
        ]);
        City::firstOrCreate([
            'name' =>  'Magdalena',
            'state_id' => '14',
            'number' =>  '055',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa María del Oro',
            'state_id' => '14',
            'number' =>  '056',
        ]);
        City::firstOrCreate([
            'name' =>  'La Manzanilla de la Paz',
            'state_id' => '14',
            'number' =>  '057',
        ]);
        City::firstOrCreate([
            'name' =>  'Mascota',
            'state_id' => '14',
            'number' =>  '058',
        ]);
        City::firstOrCreate([
            'name' =>  'Mazamitla',
            'state_id' => '14',
            'number' =>  '059',
        ]);
        City::firstOrCreate([
            'name' =>  'Mexticacán',
            'state_id' => '14',
            'number' =>  '060',
        ]);
        City::firstOrCreate([
            'name' =>  'Mezquitic',
            'state_id' => '14',
            'number' =>  '061',
        ]);
        City::firstOrCreate([
            'name' =>  'Mixtlán',
            'state_id' => '14',
            'number' =>  '062',
        ]);
        City::firstOrCreate([
            'name' =>  'Ocotlán',
            'state_id' => '14',
            'number' =>  '063',
        ]);
        City::firstOrCreate([
            'name' =>  'Ojuelos de Jalisco',
            'state_id' => '14',
            'number' =>  '064',
        ]);
        City::firstOrCreate([
            'name' =>  'Pihuamo',
            'state_id' => '14',
            'number' =>  '065',
        ]);
        City::firstOrCreate([
            'name' =>  'Poncitlán',
            'state_id' => '14',
            'number' =>  '066',
        ]);
        City::firstOrCreate([
            'name' =>  'Puerto Vallarta',
            'state_id' => '14',
            'number' =>  '067',
        ]);
        City::firstOrCreate([
            'name' =>  'Villa Purificación',
            'state_id' => '14',
            'number' =>  '068',
        ]);
        City::firstOrCreate([
            'name' =>  'Quitupan',
            'state_id' => '14',
            'number' =>  '069',
        ]);
        City::firstOrCreate([
            'name' =>  'El Salto',
            'state_id' => '14',
            'number' =>  '070',
        ]);
        City::firstOrCreate([
            'name' =>  'San Cristóbal de la Barranca',
            'state_id' => '14',
            'number' =>  '071',
        ]);
        City::firstOrCreate([
            'name' =>  'San Diego de Alejandría',
            'state_id' => '14',
            'number' =>  '072',
        ]);
        City::firstOrCreate([
            'name' =>  'San Juan de los Lagos',
            'state_id' => '14',
            'number' =>  '073',
        ]);
        City::firstOrCreate([
            'name' =>  'San Julián',
            'state_id' => '14',
            'number' =>  '074',
        ]);
        City::firstOrCreate([
            'name' =>  'San Marcos',
            'state_id' => '14',
            'number' =>  '075',
        ]);
        City::firstOrCreate([
            'name' =>  'San Martín de Bolaños',
            'state_id' => '14',
            'number' =>  '076',
        ]);
        City::firstOrCreate([
            'name' =>  'San Martín Hidalgo',
            'state_id' => '14',
            'number' =>  '077',
        ]);
        City::firstOrCreate([
            'name' =>  'San Miguel el Alto',
            'state_id' => '14',
            'number' =>  '078',
        ]);
        City::firstOrCreate([
            'name' =>  'Gómez Farías',
            'state_id' => '14',
            'number' =>  '079',
        ]);
        City::firstOrCreate([
            'name' =>  'San Sebastián del Oeste',
            'state_id' => '14',
            'number' =>  '080',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa María de los Ángeles',
            'state_id' => '14',
            'number' =>  '081',
        ]);
        City::firstOrCreate([
            'name' =>  'Sayula',
            'state_id' => '14',
            'number' =>  '082',
        ]);
        City::firstOrCreate([
            'name' =>  'Tala',
            'state_id' => '14',
            'number' =>  '083',
        ]);
        City::firstOrCreate([
            'name' =>  'Talpa de Allende',
            'state_id' => '14',
            'number' =>  '084',
        ]);
        City::firstOrCreate([
            'name' =>  'Tamazula de Gordiano',
            'state_id' => '14',
            'number' =>  '085',
        ]);
        City::firstOrCreate([
            'name' =>  'Tapalpa',
            'state_id' => '14',
            'number' =>  '086',
        ]);
        City::firstOrCreate([
            'name' =>  'Tecalitlán',
            'state_id' => '14',
            'number' =>  '087',
        ]);
        City::firstOrCreate([
            'name' =>  'Tecolotlán',
            'state_id' => '14',
            'number' =>  '088',
        ]);
        City::firstOrCreate([
            'name' =>  'Techaluta de Montenegro',
            'state_id' => '14',
            'number' =>  '089',
        ]);
        City::firstOrCreate([
            'name' =>  'Tenamaxtlán',
            'state_id' => '14',
            'number' =>  '090',
        ]);
        City::firstOrCreate([
            'name' =>  'Teocaltiche',
            'state_id' => '14',
            'number' =>  '091',
        ]);
        City::firstOrCreate([
            'name' =>  'Teocuitatlán de Corona',
            'state_id' => '14',
            'number' =>  '092',
        ]);
        City::firstOrCreate([
            'name' =>  'Tepatitlán de Morelos',
            'state_id' => '14',
            'number' =>  '093',
        ]);
        City::firstOrCreate([
            'name' =>  'Tequila',
            'state_id' => '14',
            'number' =>  '094',
        ]);
        City::firstOrCreate([
            'name' =>  'Teuchitlán',
            'state_id' => '14',
            'number' =>  '095',
        ]);
        City::firstOrCreate([
            'name' =>  'Tizapán el Alto',
            'state_id' => '14',
            'number' =>  '096',
        ]);
        City::firstOrCreate([
            'name' =>  'Tlajomulco de Zúñiga',
            'state_id' => '14',
            'number' =>  '097',
        ]);
        City::firstOrCreate([
            'name' =>  'San Pedro Tlaquepaque',
            'state_id' => '14',
            'number' =>  '098',
        ]);
        City::firstOrCreate([
            'name' =>  'Tolimán',
            'state_id' => '14',
            'number' =>  '099',
        ]);
        City::firstOrCreate([
            'name' =>  'Tomatlán',
            'state_id' => '14',
            'number' =>  '100',
        ]);
        City::firstOrCreate([
            'name' =>  'Tonalá',
            'state_id' => '14',
            'number' =>  '101',
        ]);
        City::firstOrCreate([
            'name' =>  'Tonaya',
            'state_id' => '14',
            'number' =>  '102',
        ]);
        City::firstOrCreate([
            'name' =>  'Tonila',
            'state_id' => '14',
            'number' =>  '103',
        ]);
        City::firstOrCreate([
            'name' =>  'Totatiche',
            'state_id' => '14',
            'number' =>  '104',
        ]);
        City::firstOrCreate([
            'name' =>  'Tototlán',
            'state_id' => '14',
            'number' =>  '105',
        ]);
        City::firstOrCreate([
            'name' =>  'Tuxcacuesco',
            'state_id' => '14',
            'number' =>  '106',
        ]);
        City::firstOrCreate([
            'name' =>  'Tuxcueca',
            'state_id' => '14',
            'number' =>  '107',
        ]);
        City::firstOrCreate([
            'name' =>  'Tuxpan',
            'state_id' => '14',
            'number' =>  '108',
        ]);
        City::firstOrCreate([
            'name' =>  'Unión de San Antonio',
            'state_id' => '14',
            'number' =>  '109',
        ]);
        City::firstOrCreate([
            'name' =>  'Unión de Tula',
            'state_id' => '14',
            'number' =>  '110',
        ]);
        City::firstOrCreate([
            'name' =>  'Valle de Guadalupe',
            'state_id' => '14',
            'number' =>  '111',
        ]);
        City::firstOrCreate([
            'name' =>  'Valle de Juárez',
            'state_id' => '14',
            'number' =>  '112',
        ]);
        City::firstOrCreate([
            'name' =>  'San Gabriel',
            'state_id' => '14',
            'number' =>  '113',
        ]);
        City::firstOrCreate([
            'name' =>  'Villa Corona',
            'state_id' => '14',
            'number' =>  '114',
        ]);
        City::firstOrCreate([
            'name' =>  'Villa Guerrero',
            'state_id' => '14',
            'number' =>  '115',
        ]);
        City::firstOrCreate([
            'name' =>  'Villa Hidalgo',
            'state_id' => '14',
            'number' =>  '116',
        ]);
        City::firstOrCreate([
            'name' =>  'Cañadas de Obregón',
            'state_id' => '14',
            'number' =>  '117',
        ]);
        City::firstOrCreate([
            'name' =>  'Yahualica de González Gallo',
            'state_id' => '14',
            'number' =>  '118',
        ]);
        City::firstOrCreate([
            'name' =>  'Zacoalco de Torres',
            'state_id' => '14',
            'number' =>  '119',
        ]);
        City::firstOrCreate([
            'name' =>  'Zapopan',
            'state_id' => '14',
            'number' =>  '120',
        ]);
        City::firstOrCreate([
            'name' =>  'Zapotiltic',
            'state_id' => '14',
            'number' =>  '121',
        ]);
        City::firstOrCreate([
            'name' =>  'Zapotitlán de Vadillo',
            'state_id' => '14',
            'number' =>  '122',
        ]);
        City::firstOrCreate([
            'name' =>  'Zapotlán del Rey',
            'state_id' => '14',
            'number' =>  '123',
        ]);
        City::firstOrCreate([
            'name' =>  'Zapotlanejo',
            'state_id' => '14',
            'number' =>  '124',
        ]);
        City::firstOrCreate([
            'name' =>  'San Ignacio Cerro Gordo',
            'state_id' => '14',
            'number' =>  '125',
        ]);
        City::firstOrCreate([
            'name' =>  'Acambay de Ruíz Castañeda',
            'state_id' => '15',
            'number' =>  '001',
        ]);
        City::firstOrCreate([
            'name' =>  'Acolman',
            'state_id' => '15',
            'number' =>  '002',
        ]);
        City::firstOrCreate([
            'name' =>  'Aculco',
            'state_id' => '15',
            'number' =>  '003',
        ]);
        City::firstOrCreate([
            'name' =>  'Almoloya de Alquisiras',
            'state_id' => '15',
            'number' =>  '004',
        ]);
        City::firstOrCreate([
            'name' =>  'Almoloya de Juárez',
            'state_id' => '15',
            'number' =>  '005',
        ]);
        City::firstOrCreate([
            'name' =>  'Almoloya del Río',
            'state_id' => '15',
            'number' =>  '006',
        ]);
        City::firstOrCreate([
            'name' =>  'Amanalco',
            'state_id' => '15',
            'number' =>  '007',
        ]);
        City::firstOrCreate([
            'name' =>  'Amatepec',
            'state_id' => '15',
            'number' =>  '008',
        ]);
        City::firstOrCreate([
            'name' =>  'Amecameca',
            'state_id' => '15',
            'number' =>  '009',
        ]);
        City::firstOrCreate([
            'name' =>  'Apaxco',
            'state_id' => '15',
            'number' =>  '010',
        ]);
        City::firstOrCreate([
            'name' =>  'Atenco',
            'state_id' => '15',
            'number' =>  '011',
        ]);
        City::firstOrCreate([
            'name' =>  'Atizapán',
            'state_id' => '15',
            'number' =>  '012',
        ]);
        City::firstOrCreate([
            'name' =>  'Atizapán de Zaragoza',
            'state_id' => '15',
            'number' =>  '013',
        ]);
        City::firstOrCreate([
            'name' =>  'Atlacomulco',
            'state_id' => '15',
            'number' =>  '014',
        ]);
        City::firstOrCreate([
            'name' =>  'Atlautla',
            'state_id' => '15',
            'number' =>  '015',
        ]);
        City::firstOrCreate([
            'name' =>  'Axapusco',
            'state_id' => '15',
            'number' =>  '016',
        ]);
        City::firstOrCreate([
            'name' =>  'Ayapango',
            'state_id' => '15',
            'number' =>  '017',
        ]);
        City::firstOrCreate([
            'name' =>  'Calimaya',
            'state_id' => '15',
            'number' =>  '018',
        ]);
        City::firstOrCreate([
            'name' =>  'Capulhuac',
            'state_id' => '15',
            'number' =>  '019',
        ]);
        City::firstOrCreate([
            'name' =>  'Coacalco de Berriozábal',
            'state_id' => '15',
            'number' =>  '020',
        ]);
        City::firstOrCreate([
            'name' =>  'Coatepec Harinas',
            'state_id' => '15',
            'number' =>  '021',
        ]);
        City::firstOrCreate([
            'name' =>  'Cocotitlán',
            'state_id' => '15',
            'number' =>  '022',
        ]);
        City::firstOrCreate([
            'name' =>  'Coyotepec',
            'state_id' => '15',
            'number' =>  '023',
        ]);
        City::firstOrCreate([
            'name' =>  'Cuautitlán',
            'state_id' => '15',
            'number' =>  '024',
        ]);
        City::firstOrCreate([
            'name' =>  'Chalco',
            'state_id' => '15',
            'number' =>  '025',
        ]);
        City::firstOrCreate([
            'name' =>  'Chapa de Mota',
            'state_id' => '15',
            'number' =>  '026',
        ]);
        City::firstOrCreate([
            'name' =>  'Chapultepec',
            'state_id' => '15',
            'number' =>  '027',
        ]);
        City::firstOrCreate([
            'name' =>  'Chiautla',
            'state_id' => '15',
            'number' =>  '028',
        ]);
        City::firstOrCreate([
            'name' =>  'Chicoloapan',
            'state_id' => '15',
            'number' =>  '029',
        ]);
        City::firstOrCreate([
            'name' =>  'Chiconcuac',
            'state_id' => '15',
            'number' =>  '030',
        ]);
        City::firstOrCreate([
            'name' =>  'Chimalhuacán',
            'state_id' => '15',
            'number' =>  '031',
        ]);
        City::firstOrCreate([
            'name' =>  'Donato Guerra',
            'state_id' => '15',
            'number' =>  '032',
        ]);
        City::firstOrCreate([
            'name' =>  'Ecatepec de Morelos',
            'state_id' => '15',
            'number' =>  '033',
        ]);
        City::firstOrCreate([
            'name' =>  'Ecatzingo',
            'state_id' => '15',
            'number' =>  '034',
        ]);
        City::firstOrCreate([
            'name' =>  'Huehuetoca',
            'state_id' => '15',
            'number' =>  '035',
        ]);
        City::firstOrCreate([
            'name' =>  'Hueypoxtla',
            'state_id' => '15',
            'number' =>  '036',
        ]);
        City::firstOrCreate([
            'name' =>  'Huixquilucan',
            'state_id' => '15',
            'number' =>  '037',
        ]);
        City::firstOrCreate([
            'name' =>  'Isidro Fabela',
            'state_id' => '15',
            'number' =>  '038',
        ]);
        City::firstOrCreate([
            'name' =>  'Ixtapaluca',
            'state_id' => '15',
            'number' =>  '039',
        ]);
        City::firstOrCreate([
            'name' =>  'Ixtapan de la Sal',
            'state_id' => '15',
            'number' =>  '040',
        ]);
        City::firstOrCreate([
            'name' =>  'Ixtapan del Oro',
            'state_id' => '15',
            'number' =>  '041',
        ]);
        City::firstOrCreate([
            'name' =>  'Ixtlahuaca',
            'state_id' => '15',
            'number' =>  '042',
        ]);
        City::firstOrCreate([
            'name' =>  'Xalatlaco',
            'state_id' => '15',
            'number' =>  '043',
        ]);
        City::firstOrCreate([
            'name' =>  'Jaltenco',
            'state_id' => '15',
            'number' =>  '044',
        ]);
        City::firstOrCreate([
            'name' =>  'Jilotepec',
            'state_id' => '15',
            'number' =>  '045',
        ]);
        City::firstOrCreate([
            'name' =>  'Jilotzingo',
            'state_id' => '15',
            'number' =>  '046',
        ]);
        City::firstOrCreate([
            'name' =>  'Jiquipilco',
            'state_id' => '15',
            'number' =>  '047',
        ]);
        City::firstOrCreate([
            'name' =>  'Jocotitlán',
            'state_id' => '15',
            'number' =>  '048',
        ]);
        City::firstOrCreate([
            'name' =>  'Joquicingo',
            'state_id' => '15',
            'number' =>  '049',
        ]);
        City::firstOrCreate([
            'name' =>  'Juchitepec',
            'state_id' => '15',
            'number' =>  '050',
        ]);
        City::firstOrCreate([
            'name' =>  'Lerma',
            'state_id' => '15',
            'number' =>  '051',
        ]);
        City::firstOrCreate([
            'name' =>  'Malinalco',
            'state_id' => '15',
            'number' =>  '052',
        ]);
        City::firstOrCreate([
            'name' =>  'Melchor Ocampo',
            'state_id' => '15',
            'number' =>  '053',
        ]);
        City::firstOrCreate([
            'name' =>  'Metepec',
            'state_id' => '15',
            'number' =>  '054',
        ]);
        City::firstOrCreate([
            'name' =>  'Mexicaltzingo',
            'state_id' => '15',
            'number' =>  '055',
        ]);
        City::firstOrCreate([
            'name' =>  'Morelos',
            'state_id' => '15',
            'number' =>  '056',
        ]);
        City::firstOrCreate([
            'name' =>  'Naucalpan de Juárez',
            'state_id' => '15',
            'number' =>  '057',
        ]);
        City::firstOrCreate([
            'name' =>  'Nezahualcóyotl',
            'state_id' => '15',
            'number' =>  '058',
        ]);
        City::firstOrCreate([
            'name' =>  'Nextlalpan',
            'state_id' => '15',
            'number' =>  '059',
        ]);
        City::firstOrCreate([
            'name' =>  'Nicolás Romero',
            'state_id' => '15',
            'number' =>  '060',
        ]);
        City::firstOrCreate([
            'name' =>  'Nopaltepec',
            'state_id' => '15',
            'number' =>  '061',
        ]);
        City::firstOrCreate([
            'name' =>  'Ocoyoacac',
            'state_id' => '15',
            'number' =>  '062',
        ]);
        City::firstOrCreate([
            'name' =>  'Ocuilan',
            'state_id' => '15',
            'number' =>  '063',
        ]);
        City::firstOrCreate([
            'name' =>  'El Oro',
            'state_id' => '15',
            'number' =>  '064',
        ]);
        City::firstOrCreate([
            'name' =>  'Otumba',
            'state_id' => '15',
            'number' =>  '065',
        ]);
        City::firstOrCreate([
            'name' =>  'Otzoloapan',
            'state_id' => '15',
            'number' =>  '066',
        ]);
        City::firstOrCreate([
            'name' =>  'Otzolotepec',
            'state_id' => '15',
            'number' =>  '067',
        ]);
        City::firstOrCreate([
            'name' =>  'Ozumba',
            'state_id' => '15',
            'number' =>  '068',
        ]);
        City::firstOrCreate([
            'name' =>  'Papalotla',
            'state_id' => '15',
            'number' =>  '069',
        ]);
        City::firstOrCreate([
            'name' =>  'La Paz',
            'state_id' => '15',
            'number' =>  '070',
        ]);
        City::firstOrCreate([
            'name' =>  'Polotitlán',
            'state_id' => '15',
            'number' =>  '071',
        ]);
        City::firstOrCreate([
            'name' =>  'Rayón',
            'state_id' => '15',
            'number' =>  '072',
        ]);
        City::firstOrCreate([
            'name' =>  'San Antonio la Isla',
            'state_id' => '15',
            'number' =>  '073',
        ]);
        City::firstOrCreate([
            'name' =>  'San Felipe del Progreso',
            'state_id' => '15',
            'number' =>  '074',
        ]);
        City::firstOrCreate([
            'name' =>  'San Martín de las Pirámides',
            'state_id' => '15',
            'number' =>  '075',
        ]);
        City::firstOrCreate([
            'name' =>  'San Mateo Atenco',
            'state_id' => '15',
            'number' =>  '076',
        ]);
        City::firstOrCreate([
            'name' =>  'San Simón de Guerrero',
            'state_id' => '15',
            'number' =>  '077',
        ]);
        City::firstOrCreate([
            'name' =>  'Santo Tomás',
            'state_id' => '15',
            'number' =>  '078',
        ]);
        City::firstOrCreate([
            'name' =>  'Soyaniquilpan de Juárez',
            'state_id' => '15',
            'number' =>  '079',
        ]);
        City::firstOrCreate([
            'name' =>  'Sultepec',
            'state_id' => '15',
            'number' =>  '080',
        ]);
        City::firstOrCreate([
            'name' =>  'Tecámac',
            'state_id' => '15',
            'number' =>  '081',
        ]);
        City::firstOrCreate([
            'name' =>  'Tejupilco',
            'state_id' => '15',
            'number' =>  '082',
        ]);
        City::firstOrCreate([
            'name' =>  'Temamatla',
            'state_id' => '15',
            'number' =>  '083',
        ]);
        City::firstOrCreate([
            'name' =>  'Temascalapa',
            'state_id' => '15',
            'number' =>  '084',
        ]);
        City::firstOrCreate([
            'name' =>  'Temascalcingo',
            'state_id' => '15',
            'number' =>  '085',
        ]);
        City::firstOrCreate([
            'name' =>  'Temascaltepec',
            'state_id' => '15',
            'number' =>  '086',
        ]);
        City::firstOrCreate([
            'name' =>  'Temoaya',
            'state_id' => '15',
            'number' =>  '087',
        ]);
        City::firstOrCreate([
            'name' =>  'Tenancingo',
            'state_id' => '15',
            'number' =>  '088',
        ]);
        City::firstOrCreate([
            'name' =>  'Tenango del Aire',
            'state_id' => '15',
            'number' =>  '089',
        ]);
        City::firstOrCreate([
            'name' =>  'Tenango del Valle',
            'state_id' => '15',
            'number' =>  '090',
        ]);
        City::firstOrCreate([
            'name' =>  'Teoloyucan',
            'state_id' => '15',
            'number' =>  '091',
        ]);
        City::firstOrCreate([
            'name' =>  'Teotihuacán',
            'state_id' => '15',
            'number' =>  '092',
        ]);
        City::firstOrCreate([
            'name' =>  'Tepetlaoxtoc',
            'state_id' => '15',
            'number' =>  '093',
        ]);
        City::firstOrCreate([
            'name' =>  'Tepetlixpa',
            'state_id' => '15',
            'number' =>  '094',
        ]);
        City::firstOrCreate([
            'name' =>  'Tepotzotlán',
            'state_id' => '15',
            'number' =>  '095',
        ]);
        City::firstOrCreate([
            'name' =>  'Tequixquiac',
            'state_id' => '15',
            'number' =>  '096',
        ]);
        City::firstOrCreate([
            'name' =>  'Texcaltitlán',
            'state_id' => '15',
            'number' =>  '097',
        ]);
        City::firstOrCreate([
            'name' =>  'Texcalyacac',
            'state_id' => '15',
            'number' =>  '098',
        ]);
        City::firstOrCreate([
            'name' =>  'Texcoco',
            'state_id' => '15',
            'number' =>  '099',
        ]);
        City::firstOrCreate([
            'name' =>  'Tezoyuca',
            'state_id' => '15',
            'number' =>  '100',
        ]);
        City::firstOrCreate([
            'name' =>  'Tianguistenco',
            'state_id' => '15',
            'number' =>  '101',
        ]);
        City::firstOrCreate([
            'name' =>  'Timilpan',
            'state_id' => '15',
            'number' =>  '102',
        ]);
        City::firstOrCreate([
            'name' =>  'Tlalmanalco',
            'state_id' => '15',
            'number' =>  '103',
        ]);
        City::firstOrCreate([
            'name' =>  'Tlalnepantla de Baz',
            'state_id' => '15',
            'number' =>  '104',
        ]);
        City::firstOrCreate([
            'name' =>  'Tlatlaya',
            'state_id' => '15',
            'number' =>  '105',
        ]);
        City::firstOrCreate([
            'name' =>  'Toluca',
            'state_id' => '15',
            'number' =>  '106',
        ]);
        City::firstOrCreate([
            'name' =>  'Tonatico',
            'state_id' => '15',
            'number' =>  '107',
        ]);
        City::firstOrCreate([
            'name' =>  'Tultepec',
            'state_id' => '15',
            'number' =>  '108',
        ]);
        City::firstOrCreate([
            'name' =>  'Tultitlán',
            'state_id' => '15',
            'number' =>  '109',
        ]);
        City::firstOrCreate([
            'name' =>  'Valle de Bravo',
            'state_id' => '15',
            'number' =>  '110',
        ]);
        City::firstOrCreate([
            'name' =>  'Villa de Allende',
            'state_id' => '15',
            'number' =>  '111',
        ]);
        City::firstOrCreate([
            'name' =>  'Villa del Carbón',
            'state_id' => '15',
            'number' =>  '112',
        ]);
        City::firstOrCreate([
            'name' =>  'Villa Guerrero',
            'state_id' => '15',
            'number' =>  '113',
        ]);
        City::firstOrCreate([
            'name' =>  'Villa Victoria',
            'state_id' => '15',
            'number' =>  '114',
        ]);
        City::firstOrCreate([
            'name' =>  'Xonacatlán',
            'state_id' => '15',
            'number' =>  '115',
        ]);
        City::firstOrCreate([
            'name' =>  'Zacazonapan',
            'state_id' => '15',
            'number' =>  '116',
        ]);
        City::firstOrCreate([
            'name' =>  'Zacualpan',
            'state_id' => '15',
            'number' =>  '117',
        ]);
        City::firstOrCreate([
            'name' =>  'Zinacantepec',
            'state_id' => '15',
            'number' =>  '118',
        ]);
        City::firstOrCreate([
            'name' =>  'Zumpahuacán',
            'state_id' => '15',
            'number' =>  '119',
        ]);
        City::firstOrCreate([
            'name' =>  'Zumpango',
            'state_id' => '15',
            'number' =>  '120',
        ]);
        City::firstOrCreate([
            'name' =>  'Cuautitlán Izcalli',
            'state_id' => '15',
            'number' =>  '121',
        ]);
        City::firstOrCreate([
            'name' =>  'Valle de Chalco Solidaridad',
            'state_id' => '15',
            'number' =>  '122',
        ]);
        City::firstOrCreate([
            'name' =>  'Luvianos',
            'state_id' => '15',
            'number' =>  '123',
        ]);
        City::firstOrCreate([
            'name' =>  'San José del Rincón',
            'state_id' => '15',
            'number' =>  '124',
        ]);
        City::firstOrCreate([
            'name' =>  'Tonanitla',
            'state_id' => '15',
            'number' =>  '125',
        ]);
        City::firstOrCreate([
            'name' =>  'Acuitzio',
            'state_id' => '16',
            'number' =>  '001',
        ]);
        City::firstOrCreate([
            'name' =>  'Aguililla',
            'state_id' => '16',
            'number' =>  '002',
        ]);
        City::firstOrCreate([
            'name' =>  'Álvaro Obregón',
            'state_id' => '16',
            'number' =>  '003',
        ]);
        City::firstOrCreate([
            'name' =>  'Angamacutiro',
            'state_id' => '16',
            'number' =>  '004',
        ]);
        City::firstOrCreate([
            'name' =>  'Angangueo',
            'state_id' => '16',
            'number' =>  '005',
        ]);
        City::firstOrCreate([
            'name' =>  'Apatzingán',
            'state_id' => '16',
            'number' =>  '006',
        ]);
        City::firstOrCreate([
            'name' =>  'Aporo',
            'state_id' => '16',
            'number' =>  '007',
        ]);
        City::firstOrCreate([
            'name' =>  'Aquila',
            'state_id' => '16',
            'number' =>  '008',
        ]);
        City::firstOrCreate([
            'name' =>  'Ario',
            'state_id' => '16',
            'number' =>  '009',
        ]);
        City::firstOrCreate([
            'name' =>  'Arteaga',
            'state_id' => '16',
            'number' =>  '010',
        ]);
        City::firstOrCreate([
            'name' =>  'Briseñas',
            'state_id' => '16',
            'number' =>  '011',
        ]);
        City::firstOrCreate([
            'name' =>  'Buenavista',
            'state_id' => '16',
            'number' =>  '012',
        ]);
        City::firstOrCreate([
            'name' =>  'Carácuaro',
            'state_id' => '16',
            'number' =>  '013',
        ]);
        City::firstOrCreate([
            'name' =>  'Coahuayana',
            'state_id' => '16',
            'number' =>  '014',
        ]);
        City::firstOrCreate([
            'name' =>  'Coalcomán de Vázquez Pallares',
            'state_id' => '16',
            'number' =>  '015',
        ]);
        City::firstOrCreate([
            'name' =>  'Coeneo',
            'state_id' => '16',
            'number' =>  '016',
        ]);
        City::firstOrCreate([
            'name' =>  'Contepec',
            'state_id' => '16',
            'number' =>  '017',
        ]);
        City::firstOrCreate([
            'name' =>  'Copándaro',
            'state_id' => '16',
            'number' =>  '018',
        ]);
        City::firstOrCreate([
            'name' =>  'Cotija',
            'state_id' => '16',
            'number' =>  '019',
        ]);
        City::firstOrCreate([
            'name' =>  'Cuitzeo',
            'state_id' => '16',
            'number' =>  '020',
        ]);
        City::firstOrCreate([
            'name' =>  'Charapan',
            'state_id' => '16',
            'number' =>  '021',
        ]);
        City::firstOrCreate([
            'name' =>  'Charo',
            'state_id' => '16',
            'number' =>  '022',
        ]);
        City::firstOrCreate([
            'name' =>  'Chavinda',
            'state_id' => '16',
            'number' =>  '023',
        ]);
        City::firstOrCreate([
            'name' =>  'Cherán',
            'state_id' => '16',
            'number' =>  '024',
        ]);
        City::firstOrCreate([
            'name' =>  'Chilchota',
            'state_id' => '16',
            'number' =>  '025',
        ]);
        City::firstOrCreate([
            'name' =>  'Chinicuila',
            'state_id' => '16',
            'number' =>  '026',
        ]);
        City::firstOrCreate([
            'name' =>  'Chucándiro',
            'state_id' => '16',
            'number' =>  '027',
        ]);
        City::firstOrCreate([
            'name' =>  'Churintzio',
            'state_id' => '16',
            'number' =>  '028',
        ]);
        City::firstOrCreate([
            'name' =>  'Churumuco',
            'state_id' => '16',
            'number' =>  '029',
        ]);
        City::firstOrCreate([
            'name' =>  'Ecuandureo',
            'state_id' => '16',
            'number' =>  '030',
        ]);
        City::firstOrCreate([
            'name' =>  'Epitacio Huerta',
            'state_id' => '16',
            'number' =>  '031',
        ]);
        City::firstOrCreate([
            'name' =>  'Erongarícuaro',
            'state_id' => '16',
            'number' =>  '032',
        ]);
        City::firstOrCreate([
            'name' =>  'Gabriel Zamora',
            'state_id' => '16',
            'number' =>  '033',
        ]);
        City::firstOrCreate([
            'name' =>  'Hidalgo',
            'state_id' => '16',
            'number' =>  '034',
        ]);
        City::firstOrCreate([
            'name' =>  'La Huacana',
            'state_id' => '16',
            'number' =>  '035',
        ]);
        City::firstOrCreate([
            'name' =>  'Huandacareo',
            'state_id' => '16',
            'number' =>  '036',
        ]);
        City::firstOrCreate([
            'name' =>  'Huaniqueo',
            'state_id' => '16',
            'number' =>  '037',
        ]);
        City::firstOrCreate([
            'name' =>  'Huetamo',
            'state_id' => '16',
            'number' =>  '038',
        ]);
        City::firstOrCreate([
            'name' =>  'Huiramba',
            'state_id' => '16',
            'number' =>  '039',
        ]);
        City::firstOrCreate([
            'name' =>  'Indaparapeo',
            'state_id' => '16',
            'number' =>  '040',
        ]);
        City::firstOrCreate([
            'name' =>  'Irimbo',
            'state_id' => '16',
            'number' =>  '041',
        ]);
        City::firstOrCreate([
            'name' =>  'Ixtlán',
            'state_id' => '16',
            'number' =>  '042',
        ]);
        City::firstOrCreate([
            'name' =>  'Jacona',
            'state_id' => '16',
            'number' =>  '043',
        ]);
        City::firstOrCreate([
            'name' =>  'Jiménez',
            'state_id' => '16',
            'number' =>  '044',
        ]);
        City::firstOrCreate([
            'name' =>  'Jiquilpan',
            'state_id' => '16',
            'number' =>  '045',
        ]);
        City::firstOrCreate([
            'name' =>  'Juárez',
            'state_id' => '16',
            'number' =>  '046',
        ]);
        City::firstOrCreate([
            'name' =>  'Jungapeo',
            'state_id' => '16',
            'number' =>  '047',
        ]);
        City::firstOrCreate([
            'name' =>  'Lagunillas',
            'state_id' => '16',
            'number' =>  '048',
        ]);
        City::firstOrCreate([
            'name' =>  'Madero',
            'state_id' => '16',
            'number' =>  '049',
        ]);
        City::firstOrCreate([
            'name' =>  'Maravatío',
            'state_id' => '16',
            'number' =>  '050',
        ]);
        City::firstOrCreate([
            'name' =>  'Marcos Castellanos',
            'state_id' => '16',
            'number' =>  '051',
        ]);
        City::firstOrCreate([
            'name' =>  'Lázaro Cárdenas',
            'state_id' => '16',
            'number' =>  '052',
        ]);
        City::firstOrCreate([
            'name' =>  'Morelia',
            'state_id' => '16',
            'number' =>  '053',
        ]);
        City::firstOrCreate([
            'name' =>  'Morelos',
            'state_id' => '16',
            'number' =>  '054',
        ]);
        City::firstOrCreate([
            'name' =>  'Múgica',
            'state_id' => '16',
            'number' =>  '055',
        ]);
        City::firstOrCreate([
            'name' =>  'Nahuatzen',
            'state_id' => '16',
            'number' =>  '056',
        ]);
        City::firstOrCreate([
            'name' =>  'Nocupétaro',
            'state_id' => '16',
            'number' =>  '057',
        ]);
        City::firstOrCreate([
            'name' =>  'Nuevo Parangaricutiro',
            'state_id' => '16',
            'number' =>  '058',
        ]);
        City::firstOrCreate([
            'name' =>  'Nuevo Urecho',
            'state_id' => '16',
            'number' =>  '059',
        ]);
        City::firstOrCreate([
            'name' =>  'Numarán',
            'state_id' => '16',
            'number' =>  '060',
        ]);
        City::firstOrCreate([
            'name' =>  'Ocampo',
            'state_id' => '16',
            'number' =>  '061',
        ]);
        City::firstOrCreate([
            'name' =>  'Pajacuarán',
            'state_id' => '16',
            'number' =>  '062',
        ]);
        City::firstOrCreate([
            'name' =>  'Panindícuaro',
            'state_id' => '16',
            'number' =>  '063',
        ]);
        City::firstOrCreate([
            'name' =>  'Parácuaro',
            'state_id' => '16',
            'number' =>  '064',
        ]);
        City::firstOrCreate([
            'name' =>  'Paracho',
            'state_id' => '16',
            'number' =>  '065',
        ]);
        City::firstOrCreate([
            'name' =>  'Pátzcuaro',
            'state_id' => '16',
            'number' =>  '066',
        ]);
        City::firstOrCreate([
            'name' =>  'Penjamillo',
            'state_id' => '16',
            'number' =>  '067',
        ]);
        City::firstOrCreate([
            'name' =>  'Peribán',
            'state_id' => '16',
            'number' =>  '068',
        ]);
        City::firstOrCreate([
            'name' =>  'La Piedad',
            'state_id' => '16',
            'number' =>  '069',
        ]);
        City::firstOrCreate([
            'name' =>  'Purépero',
            'state_id' => '16',
            'number' =>  '070',
        ]);
        City::firstOrCreate([
            'name' =>  'Puruándiro',
            'state_id' => '16',
            'number' =>  '071',
        ]);
        City::firstOrCreate([
            'name' =>  'Queréndaro',
            'state_id' => '16',
            'number' =>  '072',
        ]);
        City::firstOrCreate([
            'name' =>  'Quiroga',
            'state_id' => '16',
            'number' =>  '073',
        ]);
        City::firstOrCreate([
            'name' =>  'Cojumatlán de Régules',
            'state_id' => '16',
            'number' =>  '074',
        ]);
        City::firstOrCreate([
            'name' =>  'Los Reyes',
            'state_id' => '16',
            'number' =>  '075',
        ]);
        City::firstOrCreate([
            'name' =>  'Sahuayo',
            'state_id' => '16',
            'number' =>  '076',
        ]);
        City::firstOrCreate([
            'name' =>  'San Lucas',
            'state_id' => '16',
            'number' =>  '077',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa Ana Maya',
            'state_id' => '16',
            'number' =>  '078',
        ]);
        City::firstOrCreate([
            'name' =>  'Salvador Escalante',
            'state_id' => '16',
            'number' =>  '079',
        ]);
        City::firstOrCreate([
            'name' =>  'Senguio',
            'state_id' => '16',
            'number' =>  '080',
        ]);
        City::firstOrCreate([
            'name' =>  'Susupuato',
            'state_id' => '16',
            'number' =>  '081',
        ]);
        City::firstOrCreate([
            'name' =>  'Tacámbaro',
            'state_id' => '16',
            'number' =>  '082',
        ]);
        City::firstOrCreate([
            'name' =>  'Tancítaro',
            'state_id' => '16',
            'number' =>  '083',
        ]);
        City::firstOrCreate([
            'name' =>  'Tangamandapio',
            'state_id' => '16',
            'number' =>  '084',
        ]);
        City::firstOrCreate([
            'name' =>  'Tangancícuaro',
            'state_id' => '16',
            'number' =>  '085',
        ]);
        City::firstOrCreate([
            'name' =>  'Tanhuato',
            'state_id' => '16',
            'number' =>  '086',
        ]);
        City::firstOrCreate([
            'name' =>  'Taretan',
            'state_id' => '16',
            'number' =>  '087',
        ]);
        City::firstOrCreate([
            'name' =>  'Tarímbaro',
            'state_id' => '16',
            'number' =>  '088',
        ]);
        City::firstOrCreate([
            'name' =>  'Tepalcatepec',
            'state_id' => '16',
            'number' =>  '089',
        ]);
        City::firstOrCreate([
            'name' =>  'Tingambato',
            'state_id' => '16',
            'number' =>  '090',
        ]);
        City::firstOrCreate([
            'name' =>  'Tingüindín',
            'state_id' => '16',
            'number' =>  '091',
        ]);
        City::firstOrCreate([
            'name' =>  'Tiquicheo de Nicolás Romero',
            'state_id' => '16',
            'number' =>  '092',
        ]);
        City::firstOrCreate([
            'name' =>  'Tlalpujahua',
            'state_id' => '16',
            'number' =>  '093',
        ]);
        City::firstOrCreate([
            'name' =>  'Tlazazalca',
            'state_id' => '16',
            'number' =>  '094',
        ]);
        City::firstOrCreate([
            'name' =>  'Tocumbo',
            'state_id' => '16',
            'number' =>  '095',
        ]);
        City::firstOrCreate([
            'name' =>  'Tumbiscatío',
            'state_id' => '16',
            'number' =>  '096',
        ]);
        City::firstOrCreate([
            'name' =>  'Turicato',
            'state_id' => '16',
            'number' =>  '097',
        ]);
        City::firstOrCreate([
            'name' =>  'Tuxpan',
            'state_id' => '16',
            'number' =>  '098',
        ]);
        City::firstOrCreate([
            'name' =>  'Tuzantla',
            'state_id' => '16',
            'number' =>  '099',
        ]);
        City::firstOrCreate([
            'name' =>  'Tzintzuntzan',
            'state_id' => '16',
            'number' =>  '100',
        ]);
        City::firstOrCreate([
            'name' =>  'Tzitzio',
            'state_id' => '16',
            'number' =>  '101',
        ]);
        City::firstOrCreate([
            'name' =>  'Uruapan',
            'state_id' => '16',
            'number' =>  '102',
        ]);
        City::firstOrCreate([
            'name' =>  'Venustiano Carranza',
            'state_id' => '16',
            'number' =>  '103',
        ]);
        City::firstOrCreate([
            'name' =>  'Villamar',
            'state_id' => '16',
            'number' =>  '104',
        ]);
        City::firstOrCreate([
            'name' =>  'Vista Hermosa',
            'state_id' => '16',
            'number' =>  '105',
        ]);
        City::firstOrCreate([
            'name' =>  'Yurécuaro',
            'state_id' => '16',
            'number' =>  '106',
        ]);
        City::firstOrCreate([
            'name' =>  'Zacapu',
            'state_id' => '16',
            'number' =>  '107',
        ]);
        City::firstOrCreate([
            'name' =>  'Zamora',
            'state_id' => '16',
            'number' =>  '108',
        ]);
        City::firstOrCreate([
            'name' =>  'Zináparo',
            'state_id' => '16',
            'number' =>  '109',
        ]);
        City::firstOrCreate([
            'name' =>  'Zinapécuaro',
            'state_id' => '16',
            'number' =>  '110',
        ]);
        City::firstOrCreate([
            'name' =>  'Ziracuaretiro',
            'state_id' => '16',
            'number' =>  '111',
        ]);
        City::firstOrCreate([
            'name' =>  'Zitácuaro',
            'state_id' => '16',
            'number' =>  '112',
        ]);
        City::firstOrCreate([
            'name' =>  'José Sixto Verduzco',
            'state_id' => '16',
            'number' =>  '113',
        ]);
        City::firstOrCreate([
            'name' =>  'Amacuzac',
            'state_id' => '17',
            'number' =>  '001',
        ]);
        City::firstOrCreate([
            'name' =>  'Atlatlahucan',
            'state_id' => '17',
            'number' =>  '002',
        ]);
        City::firstOrCreate([
            'name' =>  'Axochiapan',
            'state_id' => '17',
            'number' =>  '003',
        ]);
        City::firstOrCreate([
            'name' =>  'Ayala',
            'state_id' => '17',
            'number' =>  '004',
        ]);
        City::firstOrCreate([
            'name' =>  'Coatlán del Río',
            'state_id' => '17',
            'number' =>  '005',
        ]);
        City::firstOrCreate([
            'name' =>  'Cuautla',
            'state_id' => '17',
            'number' =>  '006',
        ]);
        City::firstOrCreate([
            'name' =>  'Cuernavaca',
            'state_id' => '17',
            'number' =>  '007',
        ]);
        City::firstOrCreate([
            'name' =>  'Emiliano Zapata',
            'state_id' => '17',
            'number' =>  '008',
        ]);
        City::firstOrCreate([
            'name' =>  'Huitzilac',
            'state_id' => '17',
            'number' =>  '009',
        ]);
        City::firstOrCreate([
            'name' =>  'Jantetelco',
            'state_id' => '17',
            'number' =>  '010',
        ]);
        City::firstOrCreate([
            'name' =>  'Jiutepec',
            'state_id' => '17',
            'number' =>  '011',
        ]);
        City::firstOrCreate([
            'name' =>  'Jojutla',
            'state_id' => '17',
            'number' =>  '012',
        ]);
        City::firstOrCreate([
            'name' =>  'Jonacatepec',
            'state_id' => '17',
            'number' =>  '013',
        ]);
        City::firstOrCreate([
            'name' =>  'Mazatepec',
            'state_id' => '17',
            'number' =>  '014',
        ]);
        City::firstOrCreate([
            'name' =>  'Miacatlán',
            'state_id' => '17',
            'number' =>  '015',
        ]);
        City::firstOrCreate([
            'name' =>  'Ocuituco',
            'state_id' => '17',
            'number' =>  '016',
        ]);
        City::firstOrCreate([
            'name' =>  'Puente de Ixtla',
            'state_id' => '17',
            'number' =>  '017',
        ]);
        City::firstOrCreate([
            'name' =>  'Temixco',
            'state_id' => '17',
            'number' =>  '018',
        ]);
        City::firstOrCreate([
            'name' =>  'Tepalcingo',
            'state_id' => '17',
            'number' =>  '019',
        ]);
        City::firstOrCreate([
            'name' =>  'Tepoztlán',
            'state_id' => '17',
            'number' =>  '020',
        ]);
        City::firstOrCreate([
            'name' =>  'Tetecala',
            'state_id' => '17',
            'number' =>  '021',
        ]);
        City::firstOrCreate([
            'name' =>  'Tetela del Volcán',
            'state_id' => '17',
            'number' =>  '022',
        ]);
        City::firstOrCreate([
            'name' =>  'Tlalnepantla',
            'state_id' => '17',
            'number' =>  '023',
        ]);
        City::firstOrCreate([
            'name' =>  'Tlaltizapán de Zapata',
            'state_id' => '17',
            'number' =>  '024',
        ]);
        City::firstOrCreate([
            'name' =>  'Tlaquiltenango',
            'state_id' => '17',
            'number' =>  '025',
        ]);
        City::firstOrCreate([
            'name' =>  'Tlayacapan',
            'state_id' => '17',
            'number' =>  '026',
        ]);
        City::firstOrCreate([
            'name' =>  'Totolapan',
            'state_id' => '17',
            'number' =>  '027',
        ]);
        City::firstOrCreate([
            'name' =>  'Xochitepec',
            'state_id' => '17',
            'number' =>  '028',
        ]);
        City::firstOrCreate([
            'name' =>  'Yautepec',
            'state_id' => '17',
            'number' =>  '029',
        ]);
        City::firstOrCreate([
            'name' =>  'Yecapixtla',
            'state_id' => '17',
            'number' =>  '030',
        ]);
        City::firstOrCreate([
            'name' =>  'Zacatepec',
            'state_id' => '17',
            'number' =>  '031',
        ]);
        City::firstOrCreate([
            'name' =>  'Zacualpan de Amilpas',
            'state_id' => '17',
            'number' =>  '032',
        ]);
        City::firstOrCreate([
            'name' =>  'Temoac',
            'state_id' => '17',
            'number' =>  '033',
        ]);
        City::firstOrCreate([
            'name' =>  'Acaponeta',
            'state_id' => '18',
            'number' =>  '001',
        ]);
        City::firstOrCreate([
            'name' =>  'Ahuacatlán',
            'state_id' => '18',
            'number' =>  '002',
        ]);
        City::firstOrCreate([
            'name' =>  'Amatlán de Cañas',
            'state_id' => '18',
            'number' =>  '003',
        ]);
        City::firstOrCreate([
            'name' =>  'Compostela',
            'state_id' => '18',
            'number' =>  '004',
        ]);
        City::firstOrCreate([
            'name' =>  'Huajicori',
            'state_id' => '18',
            'number' =>  '005',
        ]);
        City::firstOrCreate([
            'name' =>  'Ixtlán del Río',
            'state_id' => '18',
            'number' =>  '006',
        ]);
        City::firstOrCreate([
            'name' =>  'Jala',
            'state_id' => '18',
            'number' =>  '007',
        ]);
        City::firstOrCreate([
            'name' =>  'Xalisco',
            'state_id' => '18',
            'number' =>  '008',
        ]);
        City::firstOrCreate([
            'name' =>  'Del Nayar',
            'state_id' => '18',
            'number' =>  '009',
        ]);
        City::firstOrCreate([
            'name' =>  'Rosamorada',
            'state_id' => '18',
            'number' =>  '010',
        ]);
        City::firstOrCreate([
            'name' =>  'Ruíz',
            'state_id' => '18',
            'number' =>  '011',
        ]);
        City::firstOrCreate([
            'name' =>  'San Blas',
            'state_id' => '18',
            'number' =>  '012',
        ]);
        City::firstOrCreate([
            'name' =>  'San Pedro Lagunillas',
            'state_id' => '18',
            'number' =>  '013',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa María del Oro',
            'state_id' => '18',
            'number' =>  '014',
        ]);
        City::firstOrCreate([
            'name' =>  'Santiago Ixcuintla',
            'state_id' => '18',
            'number' =>  '015',
        ]);
        City::firstOrCreate([
            'name' =>  'Tecuala',
            'state_id' => '18',
            'number' =>  '016',
        ]);
        City::firstOrCreate([
            'name' =>  'Tepic',
            'state_id' => '18',
            'number' =>  '017',
        ]);
        City::firstOrCreate([
            'name' =>  'Tuxpan',
            'state_id' => '18',
            'number' =>  '018',
        ]);
        City::firstOrCreate([
            'name' =>  'La Yesca',
            'state_id' => '18',
            'number' =>  '019',
        ]);
        City::firstOrCreate([
            'name' =>  'Bahía de Banderas',
            'state_id' => '18',
            'number' =>  '020',
        ]);
        City::firstOrCreate([
            'name' =>  'Abasolo',
            'state_id' => '19',
            'number' =>  '001',
        ]);
        City::firstOrCreate([
            'name' =>  'Agualeguas',
            'state_id' => '19',
            'number' =>  '002',
        ]);
        City::firstOrCreate([
            'name' =>  'Los Aldamas',
            'state_id' => '19',
            'number' =>  '003',
        ]);
        City::firstOrCreate([
            'name' =>  'Allende',
            'state_id' => '19',
            'number' =>  '004',
        ]);
        City::firstOrCreate([
            'name' =>  'Anáhuac',
            'state_id' => '19',
            'number' =>  '005',
        ]);
        City::firstOrCreate([
            'name' =>  'Apodaca',
            'state_id' => '19',
            'number' =>  '006',
        ]);
        City::firstOrCreate([
            'name' =>  'Aramberri',
            'state_id' => '19',
            'number' =>  '007',
        ]);
        City::firstOrCreate([
            'name' =>  'Bustamante',
            'state_id' => '19',
            'number' =>  '008',
        ]);
        City::firstOrCreate([
            'name' =>  'Cadereyta Jiménez',
            'state_id' => '19',
            'number' =>  '009',
        ]);
        City::firstOrCreate([
            'name' =>  'El Carmen',
            'state_id' => '19',
            'number' =>  '010',
        ]);
        City::firstOrCreate([
            'name' =>  'Cerralvo',
            'state_id' => '19',
            'number' =>  '011',
        ]);
        City::firstOrCreate([
            'name' =>  'Ciénega de Flores',
            'state_id' => '19',
            'number' =>  '012',
        ]);
        City::firstOrCreate([
            'name' =>  'China',
            'state_id' => '19',
            'number' =>  '013',
        ]);
        City::firstOrCreate([
            'name' =>  'Doctor Arroyo',
            'state_id' => '19',
            'number' =>  '014',
        ]);
        City::firstOrCreate([
            'name' =>  'Doctor Coss',
            'state_id' => '19',
            'number' =>  '015',
        ]);
        City::firstOrCreate([
            'name' =>  'Doctor González',
            'state_id' => '19',
            'number' =>  '016',
        ]);
        City::firstOrCreate([
            'name' =>  'Galeana',
            'state_id' => '19',
            'number' =>  '017',
        ]);
        City::firstOrCreate([
            'name' =>  'García',
            'state_id' => '19',
            'number' =>  '018',
        ]);
        City::firstOrCreate([
            'name' =>  'San Pedro Garza García',
            'state_id' => '19',
            'number' =>  '019',
        ]);
        City::firstOrCreate([
            'name' =>  'General Bravo',
            'state_id' => '19',
            'number' =>  '020',
        ]);
        City::firstOrCreate([
            'name' =>  'General Escobedo',
            'state_id' => '19',
            'number' =>  '021',
        ]);
        City::firstOrCreate([
            'name' =>  'General Terán',
            'state_id' => '19',
            'number' =>  '022',
        ]);
        City::firstOrCreate([
            'name' =>  'General Treviño',
            'state_id' => '19',
            'number' =>  '023',
        ]);
        City::firstOrCreate([
            'name' =>  'General Zaragoza',
            'state_id' => '19',
            'number' =>  '024',
        ]);
        City::firstOrCreate([
            'name' =>  'General Zuazua',
            'state_id' => '19',
            'number' =>  '025',
        ]);
        City::firstOrCreate([
            'name' =>  'Guadalupe',
            'state_id' => '19',
            'number' =>  '026',
        ]);
        City::firstOrCreate([
            'name' =>  'Los Herreras',
            'state_id' => '19',
            'number' =>  '027',
        ]);
        City::firstOrCreate([
            'name' =>  'Higueras',
            'state_id' => '19',
            'number' =>  '028',
        ]);
        City::firstOrCreate([
            'name' =>  'Hualahuises',
            'state_id' => '19',
            'number' =>  '029',
        ]);
        City::firstOrCreate([
            'name' =>  'Iturbide',
            'state_id' => '19',
            'number' =>  '030',
        ]);
        City::firstOrCreate([
            'name' =>  'Juárez',
            'state_id' => '19',
            'number' =>  '031',
        ]);
        City::firstOrCreate([
            'name' =>  'Lampazos de Naranjo',
            'state_id' => '19',
            'number' =>  '032',
        ]);
        City::firstOrCreate([
            'name' =>  'Linares',
            'state_id' => '19',
            'number' =>  '033',
        ]);
        City::firstOrCreate([
            'name' =>  'Marín',
            'state_id' => '19',
            'number' =>  '034',
        ]);
        City::firstOrCreate([
            'name' =>  'Melchor Ocampo',
            'state_id' => '19',
            'number' =>  '035',
        ]);
        City::firstOrCreate([
            'name' =>  'Mier y Noriega',
            'state_id' => '19',
            'number' =>  '036',
        ]);
        City::firstOrCreate([
            'name' =>  'Mina',
            'state_id' => '19',
            'number' =>  '037',
        ]);
        City::firstOrCreate([
            'name' =>  'Montemorelos',
            'state_id' => '19',
            'number' =>  '038',
        ]);
        City::firstOrCreate([
            'name' =>  'Monterrey',
            'state_id' => '19',
            'number' =>  '039',
        ]);
        City::firstOrCreate([
            'name' =>  'Parás',
            'state_id' => '19',
            'number' =>  '040',
        ]);
        City::firstOrCreate([
            'name' =>  'Pesquería',
            'state_id' => '19',
            'number' =>  '041',
        ]);
        City::firstOrCreate([
            'name' =>  'Los Ramones',
            'state_id' => '19',
            'number' =>  '042',
        ]);
        City::firstOrCreate([
            'name' =>  'Rayones',
            'state_id' => '19',
            'number' =>  '043',
        ]);
        City::firstOrCreate([
            'name' =>  'Sabinas Hidalgo',
            'state_id' => '19',
            'number' =>  '044',
        ]);
        City::firstOrCreate([
            'name' =>  'Salinas Victoria',
            'state_id' => '19',
            'number' =>  '045',
        ]);
        City::firstOrCreate([
            'name' =>  'San Nicolás de los Garza',
            'state_id' => '19',
            'number' =>  '046',
        ]);
        City::firstOrCreate([
            'name' =>  'Hidalgo',
            'state_id' => '19',
            'number' =>  '047',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa Catarina',
            'state_id' => '19',
            'number' =>  '048',
        ]);
        City::firstOrCreate([
            'name' =>  'Santiago',
            'state_id' => '19',
            'number' =>  '049',
        ]);
        City::firstOrCreate([
            'name' =>  'Vallecillo',
            'state_id' => '19',
            'number' =>  '050',
        ]);
        City::firstOrCreate([
            'name' =>  'Villaldama',
            'state_id' => '19',
            'number' =>  '051',
        ]);
        City::firstOrCreate([
            'name' =>  'Abejones',
            'state_id' => '20',
            'number' =>  '001',
        ]);
        City::firstOrCreate([
            'name' =>  'Acatlán de Pérez Figueroa',
            'state_id' => '20',
            'number' =>  '002',
        ]);
        City::firstOrCreate([
            'name' =>  'Asunción Cacalotepec',
            'state_id' => '20',
            'number' =>  '003',
        ]);
        City::firstOrCreate([
            'name' =>  'Asunción Cuyotepeji',
            'state_id' => '20',
            'number' =>  '004',
        ]);
        City::firstOrCreate([
            'name' =>  'Asunción Ixtaltepec',
            'state_id' => '20',
            'number' =>  '005',
        ]);
        City::firstOrCreate([
            'name' =>  'Asunción Nochixtlán',
            'state_id' => '20',
            'number' =>  '006',
        ]);
        City::firstOrCreate([
            'name' =>  'Asunción Ocotlán',
            'state_id' => '20',
            'number' =>  '007',
        ]);
        City::firstOrCreate([
            'name' =>  'Asunción Tlacolulita',
            'state_id' => '20',
            'number' =>  '008',
        ]);
        City::firstOrCreate([
            'name' =>  'Ayotzintepec',
            'state_id' => '20',
            'number' =>  '009',
        ]);
        City::firstOrCreate([
            'name' =>  'El Barrio de la Soledad',
            'state_id' => '20',
            'number' =>  '010',
        ]);
        City::firstOrCreate([
            'name' =>  'Calihualá',
            'state_id' => '20',
            'number' =>  '011',
        ]);
        City::firstOrCreate([
            'name' =>  'Candelaria Loxicha',
            'state_id' => '20',
            'number' =>  '012',
        ]);
        City::firstOrCreate([
            'name' =>  'Ciénega de Zimatlán',
            'state_id' => '20',
            'number' =>  '013',
        ]);
        City::firstOrCreate([
            'name' =>  'Ciudad Ixtepec',
            'state_id' => '20',
            'number' =>  '014',
        ]);
        City::firstOrCreate([
            'name' =>  'Coatecas Altas',
            'state_id' => '20',
            'number' =>  '015',
        ]);
        City::firstOrCreate([
            'name' =>  'Coicoyán de las Flores',
            'state_id' => '20',
            'number' =>  '016',
        ]);
        City::firstOrCreate([
            'name' =>  'La Compañía',
            'state_id' => '20',
            'number' =>  '017',
        ]);
        City::firstOrCreate([
            'name' =>  'Concepción Buenavista',
            'state_id' => '20',
            'number' =>  '018',
        ]);
        City::firstOrCreate([
            'name' =>  'Concepción Pápalo',
            'state_id' => '20',
            'number' =>  '019',
        ]);
        City::firstOrCreate([
            'name' =>  'Constancia del Rosario',
            'state_id' => '20',
            'number' =>  '020',
        ]);
        City::firstOrCreate([
            'name' =>  'Cosolapa',
            'state_id' => '20',
            'number' =>  '021',
        ]);
        City::firstOrCreate([
            'name' =>  'Cosoltepec',
            'state_id' => '20',
            'number' =>  '022',
        ]);
        City::firstOrCreate([
            'name' =>  'Cuilápam de Guerrero',
            'state_id' => '20',
            'number' =>  '023',
        ]);
        City::firstOrCreate([
            'name' =>  'Cuyamecalco Villa de Zaragoza',
            'state_id' => '20',
            'number' =>  '024',
        ]);
        City::firstOrCreate([
            'name' =>  'Chahuites',
            'state_id' => '20',
            'number' =>  '025',
        ]);
        City::firstOrCreate([
            'name' =>  'Chalcatongo de Hidalgo',
            'state_id' => '20',
            'number' =>  '026',
        ]);
        City::firstOrCreate([
            'name' =>  'Chiquihuitlán de Benito Juárez',
            'state_id' => '20',
            'number' =>  '027',
        ]);
        City::firstOrCreate([
            'name' =>  'Heroica Ciudad de Ejutla de Crespo',
            'state_id' => '20',
            'number' =>  '028',
        ]);
        City::firstOrCreate([
            'name' =>  'Eloxochitlán de Flores Magón',
            'state_id' => '20',
            'number' =>  '029',
        ]);
        City::firstOrCreate([
            'name' =>  'El Espinal',
            'state_id' => '20',
            'number' =>  '030',
        ]);
        City::firstOrCreate([
            'name' =>  'Tamazulápam del Espíritu Santo',
            'state_id' => '20',
            'number' =>  '031',
        ]);
        City::firstOrCreate([
            'name' =>  'Fresnillo de Trujano',
            'state_id' => '20',
            'number' =>  '032',
        ]);
        City::firstOrCreate([
            'name' =>  'Guadalupe Etla',
            'state_id' => '20',
            'number' =>  '033',
        ]);
        City::firstOrCreate([
            'name' =>  'Guadalupe de Ramírez',
            'state_id' => '20',
            'number' =>  '034',
        ]);
        City::firstOrCreate([
            'name' =>  'Guelatao de Juárez',
            'state_id' => '20',
            'number' =>  '035',
        ]);
        City::firstOrCreate([
            'name' =>  'Guevea de Humboldt',
            'state_id' => '20',
            'number' =>  '036',
        ]);
        City::firstOrCreate([
            'name' =>  'Mesones Hidalgo',
            'state_id' => '20',
            'number' =>  '037',
        ]);
        City::firstOrCreate([
            'name' =>  'Villa Hidalgo',
            'state_id' => '20',
            'number' =>  '038',
        ]);
        City::firstOrCreate([
            'name' =>  'Heroica Ciudad de Huajuapan de León',
            'state_id' => '20',
            'number' =>  '039',
        ]);
        City::firstOrCreate([
            'name' =>  'Huautepec',
            'state_id' => '20',
            'number' =>  '040',
        ]);
        City::firstOrCreate([
            'name' =>  'Huautla de Jiménez',
            'state_id' => '20',
            'number' =>  '041',
        ]);
        City::firstOrCreate([
            'name' =>  'Ixtlán de Juárez',
            'state_id' => '20',
            'number' =>  '042',
        ]);
        City::firstOrCreate([
            'name' =>  'Heroica Ciudad de Juchitán de Zaragoza',
            'state_id' => '20',
            'number' =>  '043',
        ]);
        City::firstOrCreate([
            'name' =>  'Loma Bonita',
            'state_id' => '20',
            'number' =>  '044',
        ]);
        City::firstOrCreate([
            'name' =>  'Magdalena Apasco',
            'state_id' => '20',
            'number' =>  '045',
        ]);
        City::firstOrCreate([
            'name' =>  'Magdalena Jaltepec',
            'state_id' => '20',
            'number' =>  '046',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa Magdalena Jicotlán',
            'state_id' => '20',
            'number' =>  '047',
        ]);
        City::firstOrCreate([
            'name' =>  'Magdalena Mixtepec',
            'state_id' => '20',
            'number' =>  '048',
        ]);
        City::firstOrCreate([
            'name' =>  'Magdalena Ocotlán',
            'state_id' => '20',
            'number' =>  '049',
        ]);
        City::firstOrCreate([
            'name' =>  'Magdalena Peñasco',
            'state_id' => '20',
            'number' =>  '050',
        ]);
        City::firstOrCreate([
            'name' =>  'Magdalena Teitipac',
            'state_id' => '20',
            'number' =>  '051',
        ]);
        City::firstOrCreate([
            'name' =>  'Magdalena Tequisistlán',
            'state_id' => '20',
            'number' =>  '052',
        ]);
        City::firstOrCreate([
            'name' =>  'Magdalena Tlacotepec',
            'state_id' => '20',
            'number' =>  '053',
        ]);
        City::firstOrCreate([
            'name' =>  'Magdalena Zahuatlán',
            'state_id' => '20',
            'number' =>  '054',
        ]);
        City::firstOrCreate([
            'name' =>  'Mariscala de Juárez',
            'state_id' => '20',
            'number' =>  '055',
        ]);
        City::firstOrCreate([
            'name' =>  'Mártires de Tacubaya',
            'state_id' => '20',
            'number' =>  '056',
        ]);
        City::firstOrCreate([
            'name' =>  'Matías Romero Avendaño',
            'state_id' => '20',
            'number' =>  '057',
        ]);
        City::firstOrCreate([
            'name' =>  'Mazatlán Villa de Flores',
            'state_id' => '20',
            'number' =>  '058',
        ]);
        City::firstOrCreate([
            'name' =>  'Miahuatlán de Porfirio Díaz',
            'state_id' => '20',
            'number' =>  '059',
        ]);
        City::firstOrCreate([
            'name' =>  'Mixistlán de la Reforma',
            'state_id' => '20',
            'number' =>  '060',
        ]);
        City::firstOrCreate([
            'name' =>  'Monjas',
            'state_id' => '20',
            'number' =>  '061',
        ]);
        City::firstOrCreate([
            'name' =>  'Natividad',
            'state_id' => '20',
            'number' =>  '062',
        ]);
        City::firstOrCreate([
            'name' =>  'Nazareno Etla',
            'state_id' => '20',
            'number' =>  '063',
        ]);
        City::firstOrCreate([
            'name' =>  'Nejapa de Madero',
            'state_id' => '20',
            'number' =>  '064',
        ]);
        City::firstOrCreate([
            'name' =>  'Ixpantepec Nieves',
            'state_id' => '20',
            'number' =>  '065',
        ]);
        City::firstOrCreate([
            'name' =>  'Santiago Niltepec',
            'state_id' => '20',
            'number' =>  '066',
        ]);
        City::firstOrCreate([
            'name' =>  'Oaxaca de Juárez',
            'state_id' => '20',
            'number' =>  '067',
        ]);
        City::firstOrCreate([
            'name' =>  'Ocotlán de Morelos',
            'state_id' => '20',
            'number' =>  '068',
        ]);
        City::firstOrCreate([
            'name' =>  'La Pe',
            'state_id' => '20',
            'number' =>  '069',
        ]);
        City::firstOrCreate([
            'name' =>  'Pinotepa de Don Luis',
            'state_id' => '20',
            'number' =>  '070',
        ]);
        City::firstOrCreate([
            'name' =>  'Pluma Hidalgo',
            'state_id' => '20',
            'number' =>  '071',
        ]);
        City::firstOrCreate([
            'name' =>  'San José del Progreso',
            'state_id' => '20',
            'number' =>  '072',
        ]);
        City::firstOrCreate([
            'name' =>  'Putla Villa de Guerrero',
            'state_id' => '20',
            'number' =>  '073',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa Catarina Quioquitani',
            'state_id' => '20',
            'number' =>  '074',
        ]);
        City::firstOrCreate([
            'name' =>  'Reforma de Pineda',
            'state_id' => '20',
            'number' =>  '075',
        ]);
        City::firstOrCreate([
            'name' =>  'La Reforma',
            'state_id' => '20',
            'number' =>  '076',
        ]);
        City::firstOrCreate([
            'name' =>  'Reyes Etla',
            'state_id' => '20',
            'number' =>  '077',
        ]);
        City::firstOrCreate([
            'name' =>  'Rojas de Cuauhtémoc',
            'state_id' => '20',
            'number' =>  '078',
        ]);
        City::firstOrCreate([
            'name' =>  'Salina Cruz',
            'state_id' => '20',
            'number' =>  '079',
        ]);
        City::firstOrCreate([
            'name' =>  'San Agustín Amatengo',
            'state_id' => '20',
            'number' =>  '080',
        ]);
        City::firstOrCreate([
            'name' =>  'San Agustín Atenango',
            'state_id' => '20',
            'number' =>  '081',
        ]);
        City::firstOrCreate([
            'name' =>  'San Agustín Chayuco',
            'state_id' => '20',
            'number' =>  '082',
        ]);
        City::firstOrCreate([
            'name' =>  'San Agustín de las Juntas',
            'state_id' => '20',
            'number' =>  '083',
        ]);
        City::firstOrCreate([
            'name' =>  'San Agustín Etla',
            'state_id' => '20',
            'number' =>  '084',
        ]);
        City::firstOrCreate([
            'name' =>  'San Agustín Loxicha',
            'state_id' => '20',
            'number' =>  '085',
        ]);
        City::firstOrCreate([
            'name' =>  'San Agustín Tlacotepec',
            'state_id' => '20',
            'number' =>  '086',
        ]);
        City::firstOrCreate([
            'name' =>  'San Agustín Yatareni',
            'state_id' => '20',
            'number' =>  '087',
        ]);
        City::firstOrCreate([
            'name' =>  'San Andrés Cabecera Nueva',
            'state_id' => '20',
            'number' =>  '088',
        ]);
        City::firstOrCreate([
            'name' =>  'San Andrés Dinicuiti',
            'state_id' => '20',
            'number' =>  '089',
        ]);
        City::firstOrCreate([
            'name' =>  'San Andrés Huaxpaltepec',
            'state_id' => '20',
            'number' =>  '090',
        ]);
        City::firstOrCreate([
            'name' =>  'San Andrés Huayápam',
            'state_id' => '20',
            'number' =>  '091',
        ]);
        City::firstOrCreate([
            'name' =>  'San Andrés Ixtlahuaca',
            'state_id' => '20',
            'number' =>  '092',
        ]);
        City::firstOrCreate([
            'name' =>  'San Andrés Lagunas',
            'state_id' => '20',
            'number' =>  '093',
        ]);
        City::firstOrCreate([
            'name' =>  'San Andrés Nuxiño',
            'state_id' => '20',
            'number' =>  '094',
        ]);
        City::firstOrCreate([
            'name' =>  'San Andrés Paxtlán',
            'state_id' => '20',
            'number' =>  '095',
        ]);
        City::firstOrCreate([
            'name' =>  'San Andrés Sinaxtla',
            'state_id' => '20',
            'number' =>  '096',
        ]);
        City::firstOrCreate([
            'name' =>  'San Andrés Solaga',
            'state_id' => '20',
            'number' =>  '097',
        ]);
        City::firstOrCreate([
            'name' =>  'San Andrés Teotilálpam',
            'state_id' => '20',
            'number' =>  '098',
        ]);
        City::firstOrCreate([
            'name' =>  'San Andrés Tepetlapa',
            'state_id' => '20',
            'number' =>  '099',
        ]);
        City::firstOrCreate([
            'name' =>  'San Andrés Yaá',
            'state_id' => '20',
            'number' =>  '100',
        ]);
        City::firstOrCreate([
            'name' =>  'San Andrés Zabache',
            'state_id' => '20',
            'number' =>  '101',
        ]);
        City::firstOrCreate([
            'name' =>  'San Andrés Zautla',
            'state_id' => '20',
            'number' =>  '102',
        ]);
        City::firstOrCreate([
            'name' =>  'San Antonino Castillo Velasco',
            'state_id' => '20',
            'number' =>  '103',
        ]);
        City::firstOrCreate([
            'name' =>  'San Antonino el Alto',
            'state_id' => '20',
            'number' =>  '104',
        ]);
        City::firstOrCreate([
            'name' =>  'San Antonino Monte Verde',
            'state_id' => '20',
            'number' =>  '105',
        ]);
        City::firstOrCreate([
            'name' =>  'San Antonio Acutla',
            'state_id' => '20',
            'number' =>  '106',
        ]);
        City::firstOrCreate([
            'name' =>  'San Antonio de la Cal',
            'state_id' => '20',
            'number' =>  '107',
        ]);
        City::firstOrCreate([
            'name' =>  'San Antonio Huitepec',
            'state_id' => '20',
            'number' =>  '108',
        ]);
        City::firstOrCreate([
            'name' =>  'San Antonio Nanahuatípam',
            'state_id' => '20',
            'number' =>  '109',
        ]);
        City::firstOrCreate([
            'name' =>  'San Antonio Sinicahua',
            'state_id' => '20',
            'number' =>  '110',
        ]);
        City::firstOrCreate([
            'name' =>  'San Antonio Tepetlapa',
            'state_id' => '20',
            'number' =>  '111',
        ]);
        City::firstOrCreate([
            'name' =>  'San Baltazar Chichicápam',
            'state_id' => '20',
            'number' =>  '112',
        ]);
        City::firstOrCreate([
            'name' =>  'San Baltazar Loxicha',
            'state_id' => '20',
            'number' =>  '113',
        ]);
        City::firstOrCreate([
            'name' =>  'San Baltazar Yatzachi el Bajo',
            'state_id' => '20',
            'number' =>  '114',
        ]);
        City::firstOrCreate([
            'name' =>  'San Bartolo Coyotepec',
            'state_id' => '20',
            'number' =>  '115',
        ]);
        City::firstOrCreate([
            'name' =>  'San Bartolomé Ayautla',
            'state_id' => '20',
            'number' =>  '116',
        ]);
        City::firstOrCreate([
            'name' =>  'San Bartolomé Loxicha',
            'state_id' => '20',
            'number' =>  '117',
        ]);
        City::firstOrCreate([
            'name' =>  'San Bartolomé Quialana',
            'state_id' => '20',
            'number' =>  '118',
        ]);
        City::firstOrCreate([
            'name' =>  'San Bartolomé Yucuañe',
            'state_id' => '20',
            'number' =>  '119',
        ]);
        City::firstOrCreate([
            'name' =>  'San Bartolomé Zoogocho',
            'state_id' => '20',
            'number' =>  '120',
        ]);
        City::firstOrCreate([
            'name' =>  'San Bartolo Soyaltepec',
            'state_id' => '20',
            'number' =>  '121',
        ]);
        City::firstOrCreate([
            'name' =>  'San Bartolo Yautepec',
            'state_id' => '20',
            'number' =>  '122',
        ]);
        City::firstOrCreate([
            'name' =>  'San Bernardo Mixtepec',
            'state_id' => '20',
            'number' =>  '123',
        ]);
        City::firstOrCreate([
            'name' =>  'San Blas Atempa',
            'state_id' => '20',
            'number' =>  '124',
        ]);
        City::firstOrCreate([
            'name' =>  'San Carlos Yautepec',
            'state_id' => '20',
            'number' =>  '125',
        ]);
        City::firstOrCreate([
            'name' =>  'San Cristóbal Amatlán',
            'state_id' => '20',
            'number' =>  '126',
        ]);
        City::firstOrCreate([
            'name' =>  'San Cristóbal Amoltepec',
            'state_id' => '20',
            'number' =>  '127',
        ]);
        City::firstOrCreate([
            'name' =>  'San Cristóbal Lachirioag',
            'state_id' => '20',
            'number' =>  '128',
        ]);
        City::firstOrCreate([
            'name' =>  'San Cristóbal Suchixtlahuaca',
            'state_id' => '20',
            'number' =>  '129',
        ]);
        City::firstOrCreate([
            'name' =>  'San Dionisio del Mar',
            'state_id' => '20',
            'number' =>  '130',
        ]);
        City::firstOrCreate([
            'name' =>  'San Dionisio Ocotepec',
            'state_id' => '20',
            'number' =>  '131',
        ]);
        City::firstOrCreate([
            'name' =>  'San Dionisio Ocotlán',
            'state_id' => '20',
            'number' =>  '132',
        ]);
        City::firstOrCreate([
            'name' =>  'San Esteban Atatlahuca',
            'state_id' => '20',
            'number' =>  '133',
        ]);
        City::firstOrCreate([
            'name' =>  'San Felipe Jalapa de Díaz',
            'state_id' => '20',
            'number' =>  '134',
        ]);
        City::firstOrCreate([
            'name' =>  'San Felipe Tejalápam',
            'state_id' => '20',
            'number' =>  '135',
        ]);
        City::firstOrCreate([
            'name' =>  'San Felipe Usila',
            'state_id' => '20',
            'number' =>  '136',
        ]);
        City::firstOrCreate([
            'name' =>  'San Francisco Cahuacuá',
            'state_id' => '20',
            'number' =>  '137',
        ]);
        City::firstOrCreate([
            'name' =>  'San Francisco Cajonos',
            'state_id' => '20',
            'number' =>  '138',
        ]);
        City::firstOrCreate([
            'name' =>  'San Francisco Chapulapa',
            'state_id' => '20',
            'number' =>  '139',
        ]);
        City::firstOrCreate([
            'name' =>  'San Francisco Chindúa',
            'state_id' => '20',
            'number' =>  '140',
        ]);
        City::firstOrCreate([
            'name' =>  'San Francisco del Mar',
            'state_id' => '20',
            'number' =>  '141',
        ]);
        City::firstOrCreate([
            'name' =>  'San Francisco Huehuetlán',
            'state_id' => '20',
            'number' =>  '142',
        ]);
        City::firstOrCreate([
            'name' =>  'San Francisco Ixhuatán',
            'state_id' => '20',
            'number' =>  '143',
        ]);
        City::firstOrCreate([
            'name' =>  'San Francisco Jaltepetongo',
            'state_id' => '20',
            'number' =>  '144',
        ]);
        City::firstOrCreate([
            'name' =>  'San Francisco Lachigoló',
            'state_id' => '20',
            'number' =>  '145',
        ]);
        City::firstOrCreate([
            'name' =>  'San Francisco Logueche',
            'state_id' => '20',
            'number' =>  '146',
        ]);
        City::firstOrCreate([
            'name' =>  'San Francisco Nuxaño',
            'state_id' => '20',
            'number' =>  '147',
        ]);
        City::firstOrCreate([
            'name' =>  'San Francisco Ozolotepec',
            'state_id' => '20',
            'number' =>  '148',
        ]);
        City::firstOrCreate([
            'name' =>  'San Francisco Sola',
            'state_id' => '20',
            'number' =>  '149',
        ]);
        City::firstOrCreate([
            'name' =>  'San Francisco Telixtlahuaca',
            'state_id' => '20',
            'number' =>  '150',
        ]);
        City::firstOrCreate([
            'name' =>  'San Francisco Teopan',
            'state_id' => '20',
            'number' =>  '151',
        ]);
        City::firstOrCreate([
            'name' =>  'San Francisco Tlapancingo',
            'state_id' => '20',
            'number' =>  '152',
        ]);
        City::firstOrCreate([
            'name' =>  'San Gabriel Mixtepec',
            'state_id' => '20',
            'number' =>  '153',
        ]);
        City::firstOrCreate([
            'name' =>  'San Ildefonso Amatlán',
            'state_id' => '20',
            'number' =>  '154',
        ]);
        City::firstOrCreate([
            'name' =>  'San Ildefonso Sola',
            'state_id' => '20',
            'number' =>  '155',
        ]);
        City::firstOrCreate([
            'name' =>  'San Ildefonso Villa Alta',
            'state_id' => '20',
            'number' =>  '156',
        ]);
        City::firstOrCreate([
            'name' =>  'San Jacinto Amilpas',
            'state_id' => '20',
            'number' =>  '157',
        ]);
        City::firstOrCreate([
            'name' =>  'San Jacinto Tlacotepec',
            'state_id' => '20',
            'number' =>  '158',
        ]);
        City::firstOrCreate([
            'name' =>  'San Jerónimo Coatlán',
            'state_id' => '20',
            'number' =>  '159',
        ]);
        City::firstOrCreate([
            'name' =>  'San Jerónimo Silacayoapilla',
            'state_id' => '20',
            'number' =>  '160',
        ]);
        City::firstOrCreate([
            'name' =>  'San Jerónimo Sosola',
            'state_id' => '20',
            'number' =>  '161',
        ]);
        City::firstOrCreate([
            'name' =>  'San Jerónimo Taviche',
            'state_id' => '20',
            'number' =>  '162',
        ]);
        City::firstOrCreate([
            'name' =>  'San Jerónimo Tecóatl',
            'state_id' => '20',
            'number' =>  '163',
        ]);
        City::firstOrCreate([
            'name' =>  'San Jorge Nuchita',
            'state_id' => '20',
            'number' =>  '164',
        ]);
        City::firstOrCreate([
            'name' =>  'San José Ayuquila',
            'state_id' => '20',
            'number' =>  '165',
        ]);
        City::firstOrCreate([
            'name' =>  'San José Chiltepec',
            'state_id' => '20',
            'number' =>  '166',
        ]);
        City::firstOrCreate([
            'name' =>  'San José del Peñasco',
            'state_id' => '20',
            'number' =>  '167',
        ]);
        City::firstOrCreate([
            'name' =>  'San José Estancia Grande',
            'state_id' => '20',
            'number' =>  '168',
        ]);
        City::firstOrCreate([
            'name' =>  'San José Independencia',
            'state_id' => '20',
            'number' =>  '169',
        ]);
        City::firstOrCreate([
            'name' =>  'San José Lachiguiri',
            'state_id' => '20',
            'number' =>  '170',
        ]);
        City::firstOrCreate([
            'name' =>  'San José Tenango',
            'state_id' => '20',
            'number' =>  '171',
        ]);
        City::firstOrCreate([
            'name' =>  'San Juan Achiutla',
            'state_id' => '20',
            'number' =>  '172',
        ]);
        City::firstOrCreate([
            'name' =>  'San Juan Atepec',
            'state_id' => '20',
            'number' =>  '173',
        ]);
        City::firstOrCreate([
            'name' =>  'Ánimas Trujano',
            'state_id' => '20',
            'number' =>  '174',
        ]);
        City::firstOrCreate([
            'name' =>  'San Juan Bautista Atatlahuca',
            'state_id' => '20',
            'number' =>  '175',
        ]);
        City::firstOrCreate([
            'name' =>  'San Juan Bautista Coixtlahuaca',
            'state_id' => '20',
            'number' =>  '176',
        ]);
        City::firstOrCreate([
            'name' =>  'San Juan Bautista Cuicatlán',
            'state_id' => '20',
            'number' =>  '177',
        ]);
        City::firstOrCreate([
            'name' =>  'San Juan Bautista Guelache',
            'state_id' => '20',
            'number' =>  '178',
        ]);
        City::firstOrCreate([
            'name' =>  'San Juan Bautista Jayacatlán',
            'state_id' => '20',
            'number' =>  '179',
        ]);
        City::firstOrCreate([
            'name' =>  'San Juan Bautista Lo de Soto',
            'state_id' => '20',
            'number' =>  '180',
        ]);
        City::firstOrCreate([
            'name' =>  'San Juan Bautista Suchitepec',
            'state_id' => '20',
            'number' =>  '181',
        ]);
        City::firstOrCreate([
            'name' =>  'San Juan Bautista Tlacoatzintepec',
            'state_id' => '20',
            'number' =>  '182',
        ]);
        City::firstOrCreate([
            'name' =>  'San Juan Bautista Tlachichilco',
            'state_id' => '20',
            'number' =>  '183',
        ]);
        City::firstOrCreate([
            'name' =>  'San Juan Bautista Tuxtepec',
            'state_id' => '20',
            'number' =>  '184',
        ]);
        City::firstOrCreate([
            'name' =>  'San Juan Cacahuatepec',
            'state_id' => '20',
            'number' =>  '185',
        ]);
        City::firstOrCreate([
            'name' =>  'San Juan Cieneguilla',
            'state_id' => '20',
            'number' =>  '186',
        ]);
        City::firstOrCreate([
            'name' =>  'San Juan Coatzóspam',
            'state_id' => '20',
            'number' =>  '187',
        ]);
        City::firstOrCreate([
            'name' =>  'San Juan Colorado',
            'state_id' => '20',
            'number' =>  '188',
        ]);
        City::firstOrCreate([
            'name' =>  'San Juan Comaltepec',
            'state_id' => '20',
            'number' =>  '189',
        ]);
        City::firstOrCreate([
            'name' =>  'San Juan Cotzocón',
            'state_id' => '20',
            'number' =>  '190',
        ]);
        City::firstOrCreate([
            'name' =>  'San Juan Chicomezúchil',
            'state_id' => '20',
            'number' =>  '191',
        ]);
        City::firstOrCreate([
            'name' =>  'San Juan Chilateca',
            'state_id' => '20',
            'number' =>  '192',
        ]);
        City::firstOrCreate([
            'name' =>  'San Juan del Estado',
            'state_id' => '20',
            'number' =>  '193',
        ]);
        City::firstOrCreate([
            'name' =>  'San Juan del Río',
            'state_id' => '20',
            'number' =>  '194',
        ]);
        City::firstOrCreate([
            'name' =>  'San Juan Diuxi',
            'state_id' => '20',
            'number' =>  '195',
        ]);
        City::firstOrCreate([
            'name' =>  'San Juan Evangelista Analco',
            'state_id' => '20',
            'number' =>  '196',
        ]);
        City::firstOrCreate([
            'name' =>  'San Juan Guelavía',
            'state_id' => '20',
            'number' =>  '197',
        ]);
        City::firstOrCreate([
            'name' =>  'San Juan Guichicovi',
            'state_id' => '20',
            'number' =>  '198',
        ]);
        City::firstOrCreate([
            'name' =>  'San Juan Ihualtepec',
            'state_id' => '20',
            'number' =>  '199',
        ]);
        City::firstOrCreate([
            'name' =>  'San Juan Juquila Mixes',
            'state_id' => '20',
            'number' =>  '200',
        ]);
        City::firstOrCreate([
            'name' =>  'San Juan Juquila Vijanos',
            'state_id' => '20',
            'number' =>  '201',
        ]);
        City::firstOrCreate([
            'name' =>  'San Juan Lachao',
            'state_id' => '20',
            'number' =>  '202',
        ]);
        City::firstOrCreate([
            'name' =>  'San Juan Lachigalla',
            'state_id' => '20',
            'number' =>  '203',
        ]);
        City::firstOrCreate([
            'name' =>  'San Juan Lajarcia',
            'state_id' => '20',
            'number' =>  '204',
        ]);
        City::firstOrCreate([
            'name' =>  'San Juan Lalana',
            'state_id' => '20',
            'number' =>  '205',
        ]);
        City::firstOrCreate([
            'name' =>  'San Juan de los Cués',
            'state_id' => '20',
            'number' =>  '206',
        ]);
        City::firstOrCreate([
            'name' =>  'San Juan Mazatlán',
            'state_id' => '20',
            'number' =>  '207',
        ]);
        City::firstOrCreate([
            'name' =>  'San Juan Mixtepec',
            'state_id' => '20',
            'number' =>  '208',
        ]);
        City::firstOrCreate([
            'name' =>  'San Juan Mixtepec',
            'state_id' => '20',
            'number' =>  '209',
        ]);
        City::firstOrCreate([
            'name' =>  'San Juan Ñumí',
            'state_id' => '20',
            'number' =>  '210',
        ]);
        City::firstOrCreate([
            'name' =>  'San Juan Ozolotepec',
            'state_id' => '20',
            'number' =>  '211',
        ]);
        City::firstOrCreate([
            'name' =>  'San Juan Petlapa',
            'state_id' => '20',
            'number' =>  '212',
        ]);
        City::firstOrCreate([
            'name' =>  'San Juan Quiahije',
            'state_id' => '20',
            'number' =>  '213',
        ]);
        City::firstOrCreate([
            'name' =>  'San Juan Quiotepec',
            'state_id' => '20',
            'number' =>  '214',
        ]);
        City::firstOrCreate([
            'name' =>  'San Juan Sayultepec',
            'state_id' => '20',
            'number' =>  '215',
        ]);
        City::firstOrCreate([
            'name' =>  'San Juan Tabaá',
            'state_id' => '20',
            'number' =>  '216',
        ]);
        City::firstOrCreate([
            'name' =>  'San Juan Tamazola',
            'state_id' => '20',
            'number' =>  '217',
        ]);
        City::firstOrCreate([
            'name' =>  'San Juan Teita',
            'state_id' => '20',
            'number' =>  '218',
        ]);
        City::firstOrCreate([
            'name' =>  'San Juan Teitipac',
            'state_id' => '20',
            'number' =>  '219',
        ]);
        City::firstOrCreate([
            'name' =>  'San Juan Tepeuxila',
            'state_id' => '20',
            'number' =>  '220',
        ]);
        City::firstOrCreate([
            'name' =>  'San Juan Teposcolula',
            'state_id' => '20',
            'number' =>  '221',
        ]);
        City::firstOrCreate([
            'name' =>  'San Juan Yaeé',
            'state_id' => '20',
            'number' =>  '222',
        ]);
        City::firstOrCreate([
            'name' =>  'San Juan Yatzona',
            'state_id' => '20',
            'number' =>  '223',
        ]);
        City::firstOrCreate([
            'name' =>  'San Juan Yucuita',
            'state_id' => '20',
            'number' =>  '224',
        ]);
        City::firstOrCreate([
            'name' =>  'San Lorenzo',
            'state_id' => '20',
            'number' =>  '225',
        ]);
        City::firstOrCreate([
            'name' =>  'San Lorenzo Albarradas',
            'state_id' => '20',
            'number' =>  '226',
        ]);
        City::firstOrCreate([
            'name' =>  'San Lorenzo Cacaotepec',
            'state_id' => '20',
            'number' =>  '227',
        ]);
        City::firstOrCreate([
            'name' =>  'San Lorenzo Cuaunecuiltitla',
            'state_id' => '20',
            'number' =>  '228',
        ]);
        City::firstOrCreate([
            'name' =>  'San Lorenzo Texmelúcan',
            'state_id' => '20',
            'number' =>  '229',
        ]);
        City::firstOrCreate([
            'name' =>  'San Lorenzo Victoria',
            'state_id' => '20',
            'number' =>  '230',
        ]);
        City::firstOrCreate([
            'name' =>  'San Lucas Camotlán',
            'state_id' => '20',
            'number' =>  '231',
        ]);
        City::firstOrCreate([
            'name' =>  'San Lucas Ojitlán',
            'state_id' => '20',
            'number' =>  '232',
        ]);
        City::firstOrCreate([
            'name' =>  'San Lucas Quiaviní',
            'state_id' => '20',
            'number' =>  '233',
        ]);
        City::firstOrCreate([
            'name' =>  'San Lucas Zoquiápam',
            'state_id' => '20',
            'number' =>  '234',
        ]);
        City::firstOrCreate([
            'name' =>  'San Luis Amatlán',
            'state_id' => '20',
            'number' =>  '235',
        ]);
        City::firstOrCreate([
            'name' =>  'San Marcial Ozolotepec',
            'state_id' => '20',
            'number' =>  '236',
        ]);
        City::firstOrCreate([
            'name' =>  'San Marcos Arteaga',
            'state_id' => '20',
            'number' =>  '237',
        ]);
        City::firstOrCreate([
            'name' =>  'San Martín de los Cansecos',
            'state_id' => '20',
            'number' =>  '238',
        ]);
        City::firstOrCreate([
            'name' =>  'San Martín Huamelúlpam',
            'state_id' => '20',
            'number' =>  '239',
        ]);
        City::firstOrCreate([
            'name' =>  'San Martín Itunyoso',
            'state_id' => '20',
            'number' =>  '240',
        ]);
        City::firstOrCreate([
            'name' =>  'San Martín Lachilá',
            'state_id' => '20',
            'number' =>  '241',
        ]);
        City::firstOrCreate([
            'name' =>  'San Martín Peras',
            'state_id' => '20',
            'number' =>  '242',
        ]);
        City::firstOrCreate([
            'name' =>  'San Martín Tilcajete',
            'state_id' => '20',
            'number' =>  '243',
        ]);
        City::firstOrCreate([
            'name' =>  'San Martín Toxpalan',
            'state_id' => '20',
            'number' =>  '244',
        ]);
        City::firstOrCreate([
            'name' =>  'San Martín Zacatepec',
            'state_id' => '20',
            'number' =>  '245',
        ]);
        City::firstOrCreate([
            'name' =>  'San Mateo Cajonos',
            'state_id' => '20',
            'number' =>  '246',
        ]);
        City::firstOrCreate([
            'name' =>  'Capulálpam de Méndez',
            'state_id' => '20',
            'number' =>  '247',
        ]);
        City::firstOrCreate([
            'name' =>  'San Mateo del Mar',
            'state_id' => '20',
            'number' =>  '248',
        ]);
        City::firstOrCreate([
            'name' =>  'San Mateo Yoloxochitlán',
            'state_id' => '20',
            'number' =>  '249',
        ]);
        City::firstOrCreate([
            'name' =>  'San Mateo Etlatongo',
            'state_id' => '20',
            'number' =>  '250',
        ]);
        City::firstOrCreate([
            'name' =>  'San Mateo Nejápam',
            'state_id' => '20',
            'number' =>  '251',
        ]);
        City::firstOrCreate([
            'name' =>  'San Mateo Peñasco',
            'state_id' => '20',
            'number' =>  '252',
        ]);
        City::firstOrCreate([
            'name' =>  'San Mateo Piñas',
            'state_id' => '20',
            'number' =>  '253',
        ]);
        City::firstOrCreate([
            'name' =>  'San Mateo Río Hondo',
            'state_id' => '20',
            'number' =>  '254',
        ]);
        City::firstOrCreate([
            'name' =>  'San Mateo Sindihui',
            'state_id' => '20',
            'number' =>  '255',
        ]);
        City::firstOrCreate([
            'name' =>  'San Mateo Tlapiltepec',
            'state_id' => '20',
            'number' =>  '256',
        ]);
        City::firstOrCreate([
            'name' =>  'San Melchor Betaza',
            'state_id' => '20',
            'number' =>  '257',
        ]);
        City::firstOrCreate([
            'name' =>  'San Miguel Achiutla',
            'state_id' => '20',
            'number' =>  '258',
        ]);
        City::firstOrCreate([
            'name' =>  'San Miguel Ahuehuetitlán',
            'state_id' => '20',
            'number' =>  '259',
        ]);
        City::firstOrCreate([
            'name' =>  'San Miguel Aloápam',
            'state_id' => '20',
            'number' =>  '260',
        ]);
        City::firstOrCreate([
            'name' =>  'San Miguel Amatitlán',
            'state_id' => '20',
            'number' =>  '261',
        ]);
        City::firstOrCreate([
            'name' =>  'San Miguel Amatlán',
            'state_id' => '20',
            'number' =>  '262',
        ]);
        City::firstOrCreate([
            'name' =>  'San Miguel Coatlán',
            'state_id' => '20',
            'number' =>  '263',
        ]);
        City::firstOrCreate([
            'name' =>  'San Miguel Chicahua',
            'state_id' => '20',
            'number' =>  '264',
        ]);
        City::firstOrCreate([
            'name' =>  'San Miguel Chimalapa',
            'state_id' => '20',
            'number' =>  '265',
        ]);
        City::firstOrCreate([
            'name' =>  'San Miguel del Puerto',
            'state_id' => '20',
            'number' =>  '266',
        ]);
        City::firstOrCreate([
            'name' =>  'San Miguel del Río',
            'state_id' => '20',
            'number' =>  '267',
        ]);
        City::firstOrCreate([
            'name' =>  'San Miguel Ejutla',
            'state_id' => '20',
            'number' =>  '268',
        ]);
        City::firstOrCreate([
            'name' =>  'San Miguel el Grande',
            'state_id' => '20',
            'number' =>  '269',
        ]);
        City::firstOrCreate([
            'name' =>  'San Miguel Huautla',
            'state_id' => '20',
            'number' =>  '270',
        ]);
        City::firstOrCreate([
            'name' =>  'San Miguel Mixtepec',
            'state_id' => '20',
            'number' =>  '271',
        ]);
        City::firstOrCreate([
            'name' =>  'San Miguel Panixtlahuaca',
            'state_id' => '20',
            'number' =>  '272',
        ]);
        City::firstOrCreate([
            'name' =>  'San Miguel Peras',
            'state_id' => '20',
            'number' =>  '273',
        ]);
        City::firstOrCreate([
            'name' =>  'San Miguel Piedras',
            'state_id' => '20',
            'number' =>  '274',
        ]);
        City::firstOrCreate([
            'name' =>  'San Miguel Quetzaltepec',
            'state_id' => '20',
            'number' =>  '275',
        ]);
        City::firstOrCreate([
            'name' =>  'San Miguel Santa Flor',
            'state_id' => '20',
            'number' =>  '276',
        ]);
        City::firstOrCreate([
            'name' =>  'Villa Sola de Vega',
            'state_id' => '20',
            'number' =>  '277',
        ]);
        City::firstOrCreate([
            'name' =>  'San Miguel Soyaltepec',
            'state_id' => '20',
            'number' =>  '278',
        ]);
        City::firstOrCreate([
            'name' =>  'San Miguel Suchixtepec',
            'state_id' => '20',
            'number' =>  '279',
        ]);
        City::firstOrCreate([
            'name' =>  'Villa Talea de Castro',
            'state_id' => '20',
            'number' =>  '280',
        ]);
        City::firstOrCreate([
            'name' =>  'San Miguel Tecomatlán',
            'state_id' => '20',
            'number' =>  '281',
        ]);
        City::firstOrCreate([
            'name' =>  'San Miguel Tenango',
            'state_id' => '20',
            'number' =>  '282',
        ]);
        City::firstOrCreate([
            'name' =>  'San Miguel Tequixtepec',
            'state_id' => '20',
            'number' =>  '283',
        ]);
        City::firstOrCreate([
            'name' =>  'San Miguel Tilquiápam',
            'state_id' => '20',
            'number' =>  '284',
        ]);
        City::firstOrCreate([
            'name' =>  'San Miguel Tlacamama',
            'state_id' => '20',
            'number' =>  '285',
        ]);
        City::firstOrCreate([
            'name' =>  'San Miguel Tlacotepec',
            'state_id' => '20',
            'number' =>  '286',
        ]);
        City::firstOrCreate([
            'name' =>  'San Miguel Tulancingo',
            'state_id' => '20',
            'number' =>  '287',
        ]);
        City::firstOrCreate([
            'name' =>  'San Miguel Yotao',
            'state_id' => '20',
            'number' =>  '288',
        ]);
        City::firstOrCreate([
            'name' =>  'San Nicolás',
            'state_id' => '20',
            'number' =>  '289',
        ]);
        City::firstOrCreate([
            'name' =>  'San Nicolás Hidalgo',
            'state_id' => '20',
            'number' =>  '290',
        ]);
        City::firstOrCreate([
            'name' =>  'San Pablo Coatlán',
            'state_id' => '20',
            'number' =>  '291',
        ]);
        City::firstOrCreate([
            'name' =>  'San Pablo Cuatro Venados',
            'state_id' => '20',
            'number' =>  '292',
        ]);
        City::firstOrCreate([
            'name' =>  'San Pablo Etla',
            'state_id' => '20',
            'number' =>  '293',
        ]);
        City::firstOrCreate([
            'name' =>  'San Pablo Huitzo',
            'state_id' => '20',
            'number' =>  '294',
        ]);
        City::firstOrCreate([
            'name' =>  'San Pablo Huixtepec',
            'state_id' => '20',
            'number' =>  '295',
        ]);
        City::firstOrCreate([
            'name' =>  'San Pablo Macuiltianguis',
            'state_id' => '20',
            'number' =>  '296',
        ]);
        City::firstOrCreate([
            'name' =>  'San Pablo Tijaltepec',
            'state_id' => '20',
            'number' =>  '297',
        ]);
        City::firstOrCreate([
            'name' =>  'San Pablo Villa de Mitla',
            'state_id' => '20',
            'number' =>  '298',
        ]);
        City::firstOrCreate([
            'name' =>  'San Pablo Yaganiza',
            'state_id' => '20',
            'number' =>  '299',
        ]);
        City::firstOrCreate([
            'name' =>  'San Pedro Amuzgos',
            'state_id' => '20',
            'number' =>  '300',
        ]);
        City::firstOrCreate([
            'name' =>  'San Pedro Apóstol',
            'state_id' => '20',
            'number' =>  '301',
        ]);
        City::firstOrCreate([
            'name' =>  'San Pedro Atoyac',
            'state_id' => '20',
            'number' =>  '302',
        ]);
        City::firstOrCreate([
            'name' =>  'San Pedro Cajonos',
            'state_id' => '20',
            'number' =>  '303',
        ]);
        City::firstOrCreate([
            'name' =>  'San Pedro Coxcaltepec Cántaros',
            'state_id' => '20',
            'number' =>  '304',
        ]);
        City::firstOrCreate([
            'name' =>  'San Pedro Comitancillo',
            'state_id' => '20',
            'number' =>  '305',
        ]);
        City::firstOrCreate([
            'name' =>  'San Pedro el Alto',
            'state_id' => '20',
            'number' =>  '306',
        ]);
        City::firstOrCreate([
            'name' =>  'San Pedro Huamelula',
            'state_id' => '20',
            'number' =>  '307',
        ]);
        City::firstOrCreate([
            'name' =>  'San Pedro Huilotepec',
            'state_id' => '20',
            'number' =>  '308',
        ]);
        City::firstOrCreate([
            'name' =>  'San Pedro Ixcatlán',
            'state_id' => '20',
            'number' =>  '309',
        ]);
        City::firstOrCreate([
            'name' =>  'San Pedro Ixtlahuaca',
            'state_id' => '20',
            'number' =>  '310',
        ]);
        City::firstOrCreate([
            'name' =>  'San Pedro Jaltepetongo',
            'state_id' => '20',
            'number' =>  '311',
        ]);
        City::firstOrCreate([
            'name' =>  'San Pedro Jicayán',
            'state_id' => '20',
            'number' =>  '312',
        ]);
        City::firstOrCreate([
            'name' =>  'San Pedro Jocotipac',
            'state_id' => '20',
            'number' =>  '313',
        ]);
        City::firstOrCreate([
            'name' =>  'San Pedro Juchatengo',
            'state_id' => '20',
            'number' =>  '314',
        ]);
        City::firstOrCreate([
            'name' =>  'San Pedro Mártir',
            'state_id' => '20',
            'number' =>  '315',
        ]);
        City::firstOrCreate([
            'name' =>  'San Pedro Mártir Quiechapa',
            'state_id' => '20',
            'number' =>  '316',
        ]);
        City::firstOrCreate([
            'name' =>  'San Pedro Mártir Yucuxaco',
            'state_id' => '20',
            'number' =>  '317',
        ]);
        City::firstOrCreate([
            'name' =>  'San Pedro Mixtepec',
            'state_id' => '20',
            'number' =>  '318',
        ]);
        City::firstOrCreate([
            'name' =>  'San Pedro Mixtepec',
            'state_id' => '20',
            'number' =>  '319',
        ]);
        City::firstOrCreate([
            'name' =>  'San Pedro Molinos',
            'state_id' => '20',
            'number' =>  '320',
        ]);
        City::firstOrCreate([
            'name' =>  'San Pedro Nopala',
            'state_id' => '20',
            'number' =>  '321',
        ]);
        City::firstOrCreate([
            'name' =>  'San Pedro Ocopetatillo',
            'state_id' => '20',
            'number' =>  '322',
        ]);
        City::firstOrCreate([
            'name' =>  'San Pedro Ocotepec',
            'state_id' => '20',
            'number' =>  '323',
        ]);
        City::firstOrCreate([
            'name' =>  'San Pedro Pochutla',
            'state_id' => '20',
            'number' =>  '324',
        ]);
        City::firstOrCreate([
            'name' =>  'San Pedro Quiatoni',
            'state_id' => '20',
            'number' =>  '325',
        ]);
        City::firstOrCreate([
            'name' =>  'San Pedro Sochiápam',
            'state_id' => '20',
            'number' =>  '326',
        ]);
        City::firstOrCreate([
            'name' =>  'San Pedro Tapanatepec',
            'state_id' => '20',
            'number' =>  '327',
        ]);
        City::firstOrCreate([
            'name' =>  'San Pedro Taviche',
            'state_id' => '20',
            'number' =>  '328',
        ]);
        City::firstOrCreate([
            'name' =>  'San Pedro Teozacoalco',
            'state_id' => '20',
            'number' =>  '329',
        ]);
        City::firstOrCreate([
            'name' =>  'San Pedro Teutila',
            'state_id' => '20',
            'number' =>  '330',
        ]);
        City::firstOrCreate([
            'name' =>  'San Pedro Tidaá',
            'state_id' => '20',
            'number' =>  '331',
        ]);
        City::firstOrCreate([
            'name' =>  'San Pedro Topiltepec',
            'state_id' => '20',
            'number' =>  '332',
        ]);
        City::firstOrCreate([
            'name' =>  'San Pedro Totolápam',
            'state_id' => '20',
            'number' =>  '333',
        ]);
        City::firstOrCreate([
            'name' =>  'Villa de Tututepec de Melchor Ocampo',
            'state_id' => '20',
            'number' =>  '334',
        ]);
        City::firstOrCreate([
            'name' =>  'San Pedro Yaneri',
            'state_id' => '20',
            'number' =>  '335',
        ]);
        City::firstOrCreate([
            'name' =>  'San Pedro Yólox',
            'state_id' => '20',
            'number' =>  '336',
        ]);
        City::firstOrCreate([
            'name' =>  'San Pedro y San Pablo Ayutla',
            'state_id' => '20',
            'number' =>  '337',
        ]);
        City::firstOrCreate([
            'name' =>  'Villa de Etla',
            'state_id' => '20',
            'number' =>  '338',
        ]);
        City::firstOrCreate([
            'name' =>  'San Pedro y San Pablo Teposcolula',
            'state_id' => '20',
            'number' =>  '339',
        ]);
        City::firstOrCreate([
            'name' =>  'San Pedro y San Pablo Tequixtepec',
            'state_id' => '20',
            'number' =>  '340',
        ]);
        City::firstOrCreate([
            'name' =>  'San Pedro Yucunama',
            'state_id' => '20',
            'number' =>  '341',
        ]);
        City::firstOrCreate([
            'name' =>  'San Raymundo Jalpan',
            'state_id' => '20',
            'number' =>  '342',
        ]);
        City::firstOrCreate([
            'name' =>  'San Sebastián Abasolo',
            'state_id' => '20',
            'number' =>  '343',
        ]);
        City::firstOrCreate([
            'name' =>  'San Sebastián Coatlán',
            'state_id' => '20',
            'number' =>  '344',
        ]);
        City::firstOrCreate([
            'name' =>  'San Sebastián Ixcapa',
            'state_id' => '20',
            'number' =>  '345',
        ]);
        City::firstOrCreate([
            'name' =>  'San Sebastián Nicananduta',
            'state_id' => '20',
            'number' =>  '346',
        ]);
        City::firstOrCreate([
            'name' =>  'San Sebastián Río Hondo',
            'state_id' => '20',
            'number' =>  '347',
        ]);
        City::firstOrCreate([
            'name' =>  'San Sebastián Tecomaxtlahuaca',
            'state_id' => '20',
            'number' =>  '348',
        ]);
        City::firstOrCreate([
            'name' =>  'San Sebastián Teitipac',
            'state_id' => '20',
            'number' =>  '349',
        ]);
        City::firstOrCreate([
            'name' =>  'San Sebastián Tutla',
            'state_id' => '20',
            'number' =>  '350',
        ]);
        City::firstOrCreate([
            'name' =>  'San Simón Almolongas',
            'state_id' => '20',
            'number' =>  '351',
        ]);
        City::firstOrCreate([
            'name' =>  'San Simón Zahuatlán',
            'state_id' => '20',
            'number' =>  '352',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa Ana',
            'state_id' => '20',
            'number' =>  '353',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa Ana Ateixtlahuaca',
            'state_id' => '20',
            'number' =>  '354',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa Ana Cuauhtémoc',
            'state_id' => '20',
            'number' =>  '355',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa Ana del Valle',
            'state_id' => '20',
            'number' =>  '356',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa Ana Tavela',
            'state_id' => '20',
            'number' =>  '357',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa Ana Tlapacoyan',
            'state_id' => '20',
            'number' =>  '358',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa Ana Yareni',
            'state_id' => '20',
            'number' =>  '359',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa Ana Zegache',
            'state_id' => '20',
            'number' =>  '360',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa Catalina Quierí',
            'state_id' => '20',
            'number' =>  '361',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa Catarina Cuixtla',
            'state_id' => '20',
            'number' =>  '362',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa Catarina Ixtepeji',
            'state_id' => '20',
            'number' =>  '363',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa Catarina Juquila',
            'state_id' => '20',
            'number' =>  '364',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa Catarina Lachatao',
            'state_id' => '20',
            'number' =>  '365',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa Catarina Loxicha',
            'state_id' => '20',
            'number' =>  '366',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa Catarina Mechoacán',
            'state_id' => '20',
            'number' =>  '367',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa Catarina Minas',
            'state_id' => '20',
            'number' =>  '368',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa Catarina Quiané',
            'state_id' => '20',
            'number' =>  '369',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa Catarina Tayata',
            'state_id' => '20',
            'number' =>  '370',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa Catarina Ticuá',
            'state_id' => '20',
            'number' =>  '371',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa Catarina Yosonotú',
            'state_id' => '20',
            'number' =>  '372',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa Catarina Zapoquila',
            'state_id' => '20',
            'number' =>  '373',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa Cruz Acatepec',
            'state_id' => '20',
            'number' =>  '374',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa Cruz Amilpas',
            'state_id' => '20',
            'number' =>  '375',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa Cruz de Bravo',
            'state_id' => '20',
            'number' =>  '376',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa Cruz Itundujia',
            'state_id' => '20',
            'number' =>  '377',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa Cruz Mixtepec',
            'state_id' => '20',
            'number' =>  '378',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa Cruz Nundaco',
            'state_id' => '20',
            'number' =>  '379',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa Cruz Papalutla',
            'state_id' => '20',
            'number' =>  '380',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa Cruz Tacache de Mina',
            'state_id' => '20',
            'number' =>  '381',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa Cruz Tacahua',
            'state_id' => '20',
            'number' =>  '382',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa Cruz Tayata',
            'state_id' => '20',
            'number' =>  '383',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa Cruz Xitla',
            'state_id' => '20',
            'number' =>  '384',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa Cruz Xoxocotlán',
            'state_id' => '20',
            'number' =>  '385',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa Cruz Zenzontepec',
            'state_id' => '20',
            'number' =>  '386',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa Gertrudis',
            'state_id' => '20',
            'number' =>  '387',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa Inés del Monte',
            'state_id' => '20',
            'number' =>  '388',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa Inés Yatzeche',
            'state_id' => '20',
            'number' =>  '389',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa Lucía del Camino',
            'state_id' => '20',
            'number' =>  '390',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa Lucía Miahuatlán',
            'state_id' => '20',
            'number' =>  '391',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa Lucía Monteverde',
            'state_id' => '20',
            'number' =>  '392',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa Lucía Ocotlán',
            'state_id' => '20',
            'number' =>  '393',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa María Alotepec',
            'state_id' => '20',
            'number' =>  '394',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa María Apazco',
            'state_id' => '20',
            'number' =>  '395',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa María la Asunción',
            'state_id' => '20',
            'number' =>  '396',
        ]);
        City::firstOrCreate([
            'name' =>  'Heroica Ciudad de Tlaxiaco',
            'state_id' => '20',
            'number' =>  '397',
        ]);
        City::firstOrCreate([
            'name' =>  'Ayoquezco de Aldama',
            'state_id' => '20',
            'number' =>  '398',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa María Atzompa',
            'state_id' => '20',
            'number' =>  '399',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa María Camotlán',
            'state_id' => '20',
            'number' =>  '400',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa María Colotepec',
            'state_id' => '20',
            'number' =>  '401',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa María Cortijo',
            'state_id' => '20',
            'number' =>  '402',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa María Coyotepec',
            'state_id' => '20',
            'number' =>  '403',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa María Chachoápam',
            'state_id' => '20',
            'number' =>  '404',
        ]);
        City::firstOrCreate([
            'name' =>  'Villa de Chilapa de Díaz',
            'state_id' => '20',
            'number' =>  '405',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa María Chilchotla',
            'state_id' => '20',
            'number' =>  '406',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa María Chimalapa',
            'state_id' => '20',
            'number' =>  '407',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa María del Rosario',
            'state_id' => '20',
            'number' =>  '408',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa María del Tule',
            'state_id' => '20',
            'number' =>  '409',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa María Ecatepec',
            'state_id' => '20',
            'number' =>  '410',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa María Guelacé',
            'state_id' => '20',
            'number' =>  '411',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa María Guienagati',
            'state_id' => '20',
            'number' =>  '412',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa María Huatulco',
            'state_id' => '20',
            'number' =>  '413',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa María Huazolotitlán',
            'state_id' => '20',
            'number' =>  '414',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa María Ipalapa',
            'state_id' => '20',
            'number' =>  '415',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa María Ixcatlán',
            'state_id' => '20',
            'number' =>  '416',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa María Jacatepec',
            'state_id' => '20',
            'number' =>  '417',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa María Jalapa del Marqués',
            'state_id' => '20',
            'number' =>  '418',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa María Jaltianguis',
            'state_id' => '20',
            'number' =>  '419',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa María Lachixío',
            'state_id' => '20',
            'number' =>  '420',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa María Mixtequilla',
            'state_id' => '20',
            'number' =>  '421',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa María Nativitas',
            'state_id' => '20',
            'number' =>  '422',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa María Nduayaco',
            'state_id' => '20',
            'number' =>  '423',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa María Ozolotepec',
            'state_id' => '20',
            'number' =>  '424',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa María Pápalo',
            'state_id' => '20',
            'number' =>  '425',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa María Peñoles',
            'state_id' => '20',
            'number' =>  '426',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa María Petapa',
            'state_id' => '20',
            'number' =>  '427',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa María Quiegolani',
            'state_id' => '20',
            'number' =>  '428',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa María Sola',
            'state_id' => '20',
            'number' =>  '429',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa María Tataltepec',
            'state_id' => '20',
            'number' =>  '430',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa María Tecomavaca',
            'state_id' => '20',
            'number' =>  '431',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa María Temaxcalapa',
            'state_id' => '20',
            'number' =>  '432',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa María Temaxcaltepec',
            'state_id' => '20',
            'number' =>  '433',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa María Teopoxco',
            'state_id' => '20',
            'number' =>  '434',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa María Tepantlali',
            'state_id' => '20',
            'number' =>  '435',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa María Texcatitlán',
            'state_id' => '20',
            'number' =>  '436',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa María Tlahuitoltepec',
            'state_id' => '20',
            'number' =>  '437',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa María Tlalixtac',
            'state_id' => '20',
            'number' =>  '438',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa María Tonameca',
            'state_id' => '20',
            'number' =>  '439',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa María Totolapilla',
            'state_id' => '20',
            'number' =>  '440',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa María Xadani',
            'state_id' => '20',
            'number' =>  '441',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa María Yalina',
            'state_id' => '20',
            'number' =>  '442',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa María Yavesía',
            'state_id' => '20',
            'number' =>  '443',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa María Yolotepec',
            'state_id' => '20',
            'number' =>  '444',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa María Yosoyúa',
            'state_id' => '20',
            'number' =>  '445',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa María Yucuhiti',
            'state_id' => '20',
            'number' =>  '446',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa María Zacatepec',
            'state_id' => '20',
            'number' =>  '447',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa María Zaniza',
            'state_id' => '20',
            'number' =>  '448',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa María Zoquitlán',
            'state_id' => '20',
            'number' =>  '449',
        ]);
        City::firstOrCreate([
            'name' =>  'Santiago Amoltepec',
            'state_id' => '20',
            'number' =>  '450',
        ]);
        City::firstOrCreate([
            'name' =>  'Santiago Apoala',
            'state_id' => '20',
            'number' =>  '451',
        ]);
        City::firstOrCreate([
            'name' =>  'Santiago Apóstol',
            'state_id' => '20',
            'number' =>  '452',
        ]);
        City::firstOrCreate([
            'name' =>  'Santiago Astata',
            'state_id' => '20',
            'number' =>  '453',
        ]);
        City::firstOrCreate([
            'name' =>  'Santiago Atitlán',
            'state_id' => '20',
            'number' =>  '454',
        ]);
        City::firstOrCreate([
            'name' =>  'Santiago Ayuquililla',
            'state_id' => '20',
            'number' =>  '455',
        ]);
        City::firstOrCreate([
            'name' =>  'Santiago Cacaloxtepec',
            'state_id' => '20',
            'number' =>  '456',
        ]);
        City::firstOrCreate([
            'name' =>  'Santiago Camotlán',
            'state_id' => '20',
            'number' =>  '457',
        ]);
        City::firstOrCreate([
            'name' =>  'Santiago Comaltepec',
            'state_id' => '20',
            'number' =>  '458',
        ]);
        City::firstOrCreate([
            'name' =>  'Santiago Chazumba',
            'state_id' => '20',
            'number' =>  '459',
        ]);
        City::firstOrCreate([
            'name' =>  'Santiago Choápam',
            'state_id' => '20',
            'number' =>  '460',
        ]);
        City::firstOrCreate([
            'name' =>  'Santiago del Río',
            'state_id' => '20',
            'number' =>  '461',
        ]);
        City::firstOrCreate([
            'name' =>  'Santiago Huajolotitlán',
            'state_id' => '20',
            'number' =>  '462',
        ]);
        City::firstOrCreate([
            'name' =>  'Santiago Huauclilla',
            'state_id' => '20',
            'number' =>  '463',
        ]);
        City::firstOrCreate([
            'name' =>  'Santiago Ihuitlán Plumas',
            'state_id' => '20',
            'number' =>  '464',
        ]);
        City::firstOrCreate([
            'name' =>  'Santiago Ixcuintepec',
            'state_id' => '20',
            'number' =>  '465',
        ]);
        City::firstOrCreate([
            'name' =>  'Santiago Ixtayutla',
            'state_id' => '20',
            'number' =>  '466',
        ]);
        City::firstOrCreate([
            'name' =>  'Santiago Jamiltepec',
            'state_id' => '20',
            'number' =>  '467',
        ]);
        City::firstOrCreate([
            'name' =>  'Santiago Jocotepec',
            'state_id' => '20',
            'number' =>  '468',
        ]);
        City::firstOrCreate([
            'name' =>  'Santiago Juxtlahuaca',
            'state_id' => '20',
            'number' =>  '469',
        ]);
        City::firstOrCreate([
            'name' =>  'Santiago Lachiguiri',
            'state_id' => '20',
            'number' =>  '470',
        ]);
        City::firstOrCreate([
            'name' =>  'Santiago Lalopa',
            'state_id' => '20',
            'number' =>  '471',
        ]);
        City::firstOrCreate([
            'name' =>  'Santiago Laollaga',
            'state_id' => '20',
            'number' =>  '472',
        ]);
        City::firstOrCreate([
            'name' =>  'Santiago Laxopa',
            'state_id' => '20',
            'number' =>  '473',
        ]);
        City::firstOrCreate([
            'name' =>  'Santiago Llano Grande',
            'state_id' => '20',
            'number' =>  '474',
        ]);
        City::firstOrCreate([
            'name' =>  'Santiago Matatlán',
            'state_id' => '20',
            'number' =>  '475',
        ]);
        City::firstOrCreate([
            'name' =>  'Santiago Miltepec',
            'state_id' => '20',
            'number' =>  '476',
        ]);
        City::firstOrCreate([
            'name' =>  'Santiago Minas',
            'state_id' => '20',
            'number' =>  '477',
        ]);
        City::firstOrCreate([
            'name' =>  'Santiago Nacaltepec',
            'state_id' => '20',
            'number' =>  '478',
        ]);
        City::firstOrCreate([
            'name' =>  'Santiago Nejapilla',
            'state_id' => '20',
            'number' =>  '479',
        ]);
        City::firstOrCreate([
            'name' =>  'Santiago Nundiche',
            'state_id' => '20',
            'number' =>  '480',
        ]);
        City::firstOrCreate([
            'name' =>  'Santiago Nuyoó',
            'state_id' => '20',
            'number' =>  '481',
        ]);
        City::firstOrCreate([
            'name' =>  'Santiago Pinotepa Nacional',
            'state_id' => '20',
            'number' =>  '482',
        ]);
        City::firstOrCreate([
            'name' =>  'Santiago Suchilquitongo',
            'state_id' => '20',
            'number' =>  '483',
        ]);
        City::firstOrCreate([
            'name' =>  'Santiago Tamazola',
            'state_id' => '20',
            'number' =>  '484',
        ]);
        City::firstOrCreate([
            'name' =>  'Santiago Tapextla',
            'state_id' => '20',
            'number' =>  '485',
        ]);
        City::firstOrCreate([
            'name' =>  'Villa Tejúpam de la Unión',
            'state_id' => '20',
            'number' =>  '486',
        ]);
        City::firstOrCreate([
            'name' =>  'Santiago Tenango',
            'state_id' => '20',
            'number' =>  '487',
        ]);
        City::firstOrCreate([
            'name' =>  'Santiago Tepetlapa',
            'state_id' => '20',
            'number' =>  '488',
        ]);
        City::firstOrCreate([
            'name' =>  'Santiago Tetepec',
            'state_id' => '20',
            'number' =>  '489',
        ]);
        City::firstOrCreate([
            'name' =>  'Santiago Texcalcingo',
            'state_id' => '20',
            'number' =>  '490',
        ]);
        City::firstOrCreate([
            'name' =>  'Santiago Textitlán',
            'state_id' => '20',
            'number' =>  '491',
        ]);
        City::firstOrCreate([
            'name' =>  'Santiago Tilantongo',
            'state_id' => '20',
            'number' =>  '492',
        ]);
        City::firstOrCreate([
            'name' =>  'Santiago Tillo',
            'state_id' => '20',
            'number' =>  '493',
        ]);
        City::firstOrCreate([
            'name' =>  'Santiago Tlazoyaltepec',
            'state_id' => '20',
            'number' =>  '494',
        ]);
        City::firstOrCreate([
            'name' =>  'Santiago Xanica',
            'state_id' => '20',
            'number' =>  '495',
        ]);
        City::firstOrCreate([
            'name' =>  'Santiago Xiacuí',
            'state_id' => '20',
            'number' =>  '496',
        ]);
        City::firstOrCreate([
            'name' =>  'Santiago Yaitepec',
            'state_id' => '20',
            'number' =>  '497',
        ]);
        City::firstOrCreate([
            'name' =>  'Santiago Yaveo',
            'state_id' => '20',
            'number' =>  '498',
        ]);
        City::firstOrCreate([
            'name' =>  'Santiago Yolomécatl',
            'state_id' => '20',
            'number' =>  '499',
        ]);
        City::firstOrCreate([
            'name' =>  'Santiago Yosondúa',
            'state_id' => '20',
            'number' =>  '500',
        ]);
        City::firstOrCreate([
            'name' =>  'Santiago Yucuyachi',
            'state_id' => '20',
            'number' =>  '501',
        ]);
        City::firstOrCreate([
            'name' =>  'Santiago Zacatepec',
            'state_id' => '20',
            'number' =>  '502',
        ]);
        City::firstOrCreate([
            'name' =>  'Santiago Zoochila',
            'state_id' => '20',
            'number' =>  '503',
        ]);
        City::firstOrCreate([
            'name' =>  'Nuevo Zoquiápam',
            'state_id' => '20',
            'number' =>  '504',
        ]);
        City::firstOrCreate([
            'name' =>  'Santo Domingo Ingenio',
            'state_id' => '20',
            'number' =>  '505',
        ]);
        City::firstOrCreate([
            'name' =>  'Santo Domingo Albarradas',
            'state_id' => '20',
            'number' =>  '506',
        ]);
        City::firstOrCreate([
            'name' =>  'Santo Domingo Armenta',
            'state_id' => '20',
            'number' =>  '507',
        ]);
        City::firstOrCreate([
            'name' =>  'Santo Domingo Chihuitán',
            'state_id' => '20',
            'number' =>  '508',
        ]);
        City::firstOrCreate([
            'name' =>  'Santo Domingo de Morelos',
            'state_id' => '20',
            'number' =>  '509',
        ]);
        City::firstOrCreate([
            'name' =>  'Santo Domingo Ixcatlán',
            'state_id' => '20',
            'number' =>  '510',
        ]);
        City::firstOrCreate([
            'name' =>  'Santo Domingo Nuxaá',
            'state_id' => '20',
            'number' =>  '511',
        ]);
        City::firstOrCreate([
            'name' =>  'Santo Domingo Ozolotepec',
            'state_id' => '20',
            'number' =>  '512',
        ]);
        City::firstOrCreate([
            'name' =>  'Santo Domingo Petapa',
            'state_id' => '20',
            'number' =>  '513',
        ]);
        City::firstOrCreate([
            'name' =>  'Santo Domingo Roayaga',
            'state_id' => '20',
            'number' =>  '514',
        ]);
        City::firstOrCreate([
            'name' =>  'Santo Domingo Tehuantepec',
            'state_id' => '20',
            'number' =>  '515',
        ]);
        City::firstOrCreate([
            'name' =>  'Santo Domingo Teojomulco',
            'state_id' => '20',
            'number' =>  '516',
        ]);
        City::firstOrCreate([
            'name' =>  'Santo Domingo Tepuxtepec',
            'state_id' => '20',
            'number' =>  '517',
        ]);
        City::firstOrCreate([
            'name' =>  'Santo Domingo Tlatayápam',
            'state_id' => '20',
            'number' =>  '518',
        ]);
        City::firstOrCreate([
            'name' =>  'Santo Domingo Tomaltepec',
            'state_id' => '20',
            'number' =>  '519',
        ]);
        City::firstOrCreate([
            'name' =>  'Santo Domingo Tonalá',
            'state_id' => '20',
            'number' =>  '520',
        ]);
        City::firstOrCreate([
            'name' =>  'Santo Domingo Tonaltepec',
            'state_id' => '20',
            'number' =>  '521',
        ]);
        City::firstOrCreate([
            'name' =>  'Santo Domingo Xagacía',
            'state_id' => '20',
            'number' =>  '522',
        ]);
        City::firstOrCreate([
            'name' =>  'Santo Domingo Yanhuitlán',
            'state_id' => '20',
            'number' =>  '523',
        ]);
        City::firstOrCreate([
            'name' =>  'Santo Domingo Yodohino',
            'state_id' => '20',
            'number' =>  '524',
        ]);
        City::firstOrCreate([
            'name' =>  'Santo Domingo Zanatepec',
            'state_id' => '20',
            'number' =>  '525',
        ]);
        City::firstOrCreate([
            'name' =>  'Santos Reyes Nopala',
            'state_id' => '20',
            'number' =>  '526',
        ]);
        City::firstOrCreate([
            'name' =>  'Santos Reyes Pápalo',
            'state_id' => '20',
            'number' =>  '527',
        ]);
        City::firstOrCreate([
            'name' =>  'Santos Reyes Tepejillo',
            'state_id' => '20',
            'number' =>  '528',
        ]);
        City::firstOrCreate([
            'name' =>  'Santos Reyes Yucuná',
            'state_id' => '20',
            'number' =>  '529',
        ]);
        City::firstOrCreate([
            'name' =>  'Santo Tomás Jalieza',
            'state_id' => '20',
            'number' =>  '530',
        ]);
        City::firstOrCreate([
            'name' =>  'Santo Tomás Mazaltepec',
            'state_id' => '20',
            'number' =>  '531',
        ]);
        City::firstOrCreate([
            'name' =>  'Santo Tomás Ocotepec',
            'state_id' => '20',
            'number' =>  '532',
        ]);
        City::firstOrCreate([
            'name' =>  'Santo Tomás Tamazulapan',
            'state_id' => '20',
            'number' =>  '533',
        ]);
        City::firstOrCreate([
            'name' =>  'San Vicente Coatlán',
            'state_id' => '20',
            'number' =>  '534',
        ]);
        City::firstOrCreate([
            'name' =>  'San Vicente Lachixío',
            'state_id' => '20',
            'number' =>  '535',
        ]);
        City::firstOrCreate([
            'name' =>  'San Vicente Nuñú',
            'state_id' => '20',
            'number' =>  '536',
        ]);
        City::firstOrCreate([
            'name' =>  'Silacayoápam',
            'state_id' => '20',
            'number' =>  '537',
        ]);
        City::firstOrCreate([
            'name' =>  'Sitio de Xitlapehua',
            'state_id' => '20',
            'number' =>  '538',
        ]);
        City::firstOrCreate([
            'name' =>  'Soledad Etla',
            'state_id' => '20',
            'number' =>  '539',
        ]);
        City::firstOrCreate([
            'name' =>  'Villa de Tamazulápam del Progreso',
            'state_id' => '20',
            'number' =>  '540',
        ]);
        City::firstOrCreate([
            'name' =>  'Tanetze de Zaragoza',
            'state_id' => '20',
            'number' =>  '541',
        ]);
        City::firstOrCreate([
            'name' =>  'Taniche',
            'state_id' => '20',
            'number' =>  '542',
        ]);
        City::firstOrCreate([
            'name' =>  'Tataltepec de Valdés',
            'state_id' => '20',
            'number' =>  '543',
        ]);
        City::firstOrCreate([
            'name' =>  'Teococuilco de Marcos Pérez',
            'state_id' => '20',
            'number' =>  '544',
        ]);
        City::firstOrCreate([
            'name' =>  'Teotitlán de Flores Magón',
            'state_id' => '20',
            'number' =>  '545',
        ]);
        City::firstOrCreate([
            'name' =>  'Teotitlán del Valle',
            'state_id' => '20',
            'number' =>  '546',
        ]);
        City::firstOrCreate([
            'name' =>  'Teotongo',
            'state_id' => '20',
            'number' =>  '547',
        ]);
        City::firstOrCreate([
            'name' =>  'Tepelmeme Villa de Morelos',
            'state_id' => '20',
            'number' =>  '548',
        ]);
        City::firstOrCreate([
            'name' =>  'Heroica Villa Tezoatlán de Segura y Luna. Cuna de la Independencia de Oaxaca',
            'state_id' => '20',
            'number' =>  '549',
        ]);
        City::firstOrCreate([
            'name' =>  'San Jerónimo Tlacochahuaya',
            'state_id' => '20',
            'number' =>  '550',
        ]);
        City::firstOrCreate([
            'name' =>  'Tlacolula de Matamoros',
            'state_id' => '20',
            'number' =>  '551',
        ]);
        City::firstOrCreate([
            'name' =>  'Tlacotepec Plumas',
            'state_id' => '20',
            'number' =>  '552',
        ]);
        City::firstOrCreate([
            'name' =>  'Tlalixtac de Cabrera',
            'state_id' => '20',
            'number' =>  '553',
        ]);
        City::firstOrCreate([
            'name' =>  'Totontepec Villa de Morelos',
            'state_id' => '20',
            'number' =>  '554',
        ]);
        City::firstOrCreate([
            'name' =>  'Trinidad Zaachila',
            'state_id' => '20',
            'number' =>  '555',
        ]);
        City::firstOrCreate([
            'name' =>  'La Trinidad Vista Hermosa',
            'state_id' => '20',
            'number' =>  '556',
        ]);
        City::firstOrCreate([
            'name' =>  'Unión Hidalgo',
            'state_id' => '20',
            'number' =>  '557',
        ]);
        City::firstOrCreate([
            'name' =>  'Valerio Trujano',
            'state_id' => '20',
            'number' =>  '558',
        ]);
        City::firstOrCreate([
            'name' =>  'San Juan Bautista Valle Nacional',
            'state_id' => '20',
            'number' =>  '559',
        ]);
        City::firstOrCreate([
            'name' =>  'Villa Díaz Ordaz',
            'state_id' => '20',
            'number' =>  '560',
        ]);
        City::firstOrCreate([
            'name' =>  'Yaxe',
            'state_id' => '20',
            'number' =>  '561',
        ]);
        City::firstOrCreate([
            'name' =>  'Magdalena Yodocono de Porfirio Díaz',
            'state_id' => '20',
            'number' =>  '562',
        ]);
        City::firstOrCreate([
            'name' =>  'Yogana',
            'state_id' => '20',
            'number' =>  '563',
        ]);
        City::firstOrCreate([
            'name' =>  'Yutanduchi de Guerrero',
            'state_id' => '20',
            'number' =>  '564',
        ]);
        City::firstOrCreate([
            'name' =>  'Villa de Zaachila',
            'state_id' => '20',
            'number' =>  '565',
        ]);
        City::firstOrCreate([
            'name' =>  'San Mateo Yucutindoo',
            'state_id' => '20',
            'number' =>  '566',
        ]);
        City::firstOrCreate([
            'name' =>  'Zapotitlán Lagunas',
            'state_id' => '20',
            'number' =>  '567',
        ]);
        City::firstOrCreate([
            'name' =>  'Zapotitlán Palmas',
            'state_id' => '20',
            'number' =>  '568',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa Inés de Zaragoza',
            'state_id' => '20',
            'number' =>  '569',
        ]);
        City::firstOrCreate([
            'name' =>  'Zimatlán de Álvarez',
            'state_id' => '20',
            'number' =>  '570',
        ]);
        City::firstOrCreate([
            'name' =>  'Acajete',
            'state_id' => '21',
            'number' =>  '001',
        ]);
        City::firstOrCreate([
            'name' =>  'Acateno',
            'state_id' => '21',
            'number' =>  '002',
        ]);
        City::firstOrCreate([
            'name' =>  'Acatlán',
            'state_id' => '21',
            'number' =>  '003',
        ]);
        City::firstOrCreate([
            'name' =>  'Acatzingo',
            'state_id' => '21',
            'number' =>  '004',
        ]);
        City::firstOrCreate([
            'name' =>  'Acteopan',
            'state_id' => '21',
            'number' =>  '005',
        ]);
        City::firstOrCreate([
            'name' =>  'Ahuacatlán',
            'state_id' => '21',
            'number' =>  '006',
        ]);
        City::firstOrCreate([
            'name' =>  'Ahuatlán',
            'state_id' => '21',
            'number' =>  '007',
        ]);
        City::firstOrCreate([
            'name' =>  'Ahuazotepec',
            'state_id' => '21',
            'number' =>  '008',
        ]);
        City::firstOrCreate([
            'name' =>  'Ahuehuetitla',
            'state_id' => '21',
            'number' =>  '009',
        ]);
        City::firstOrCreate([
            'name' =>  'Ajalpan',
            'state_id' => '21',
            'number' =>  '010',
        ]);
        City::firstOrCreate([
            'name' =>  'Albino Zertuche',
            'state_id' => '21',
            'number' =>  '011',
        ]);
        City::firstOrCreate([
            'name' =>  'Aljojuca',
            'state_id' => '21',
            'number' =>  '012',
        ]);
        City::firstOrCreate([
            'name' =>  'Altepexi',
            'state_id' => '21',
            'number' =>  '013',
        ]);
        City::firstOrCreate([
            'name' =>  'Amixtlán',
            'state_id' => '21',
            'number' =>  '014',
        ]);
        City::firstOrCreate([
            'name' =>  'Amozoc',
            'state_id' => '21',
            'number' =>  '015',
        ]);
        City::firstOrCreate([
            'name' =>  'Aquixtla',
            'state_id' => '21',
            'number' =>  '016',
        ]);
        City::firstOrCreate([
            'name' =>  'Atempan',
            'state_id' => '21',
            'number' =>  '017',
        ]);
        City::firstOrCreate([
            'name' =>  'Atexcal',
            'state_id' => '21',
            'number' =>  '018',
        ]);
        City::firstOrCreate([
            'name' =>  'Atlixco',
            'state_id' => '21',
            'number' =>  '019',
        ]);
        City::firstOrCreate([
            'name' =>  'Atoyatempan',
            'state_id' => '21',
            'number' =>  '020',
        ]);
        City::firstOrCreate([
            'name' =>  'Atzala',
            'state_id' => '21',
            'number' =>  '021',
        ]);
        City::firstOrCreate([
            'name' =>  'Atzitzihuacán',
            'state_id' => '21',
            'number' =>  '022',
        ]);
        City::firstOrCreate([
            'name' =>  'Atzitzintla',
            'state_id' => '21',
            'number' =>  '023',
        ]);
        City::firstOrCreate([
            'name' =>  'Axutla',
            'state_id' => '21',
            'number' =>  '024',
        ]);
        City::firstOrCreate([
            'name' =>  'Ayotoxco de Guerrero',
            'state_id' => '21',
            'number' =>  '025',
        ]);
        City::firstOrCreate([
            'name' =>  'Calpan',
            'state_id' => '21',
            'number' =>  '026',
        ]);
        City::firstOrCreate([
            'name' =>  'Caltepec',
            'state_id' => '21',
            'number' =>  '027',
        ]);
        City::firstOrCreate([
            'name' =>  'Camocuautla',
            'state_id' => '21',
            'number' =>  '028',
        ]);
        City::firstOrCreate([
            'name' =>  'Caxhuacan',
            'state_id' => '21',
            'number' =>  '029',
        ]);
        City::firstOrCreate([
            'name' =>  'Coatepec',
            'state_id' => '21',
            'number' =>  '030',
        ]);
        City::firstOrCreate([
            'name' =>  'Coatzingo',
            'state_id' => '21',
            'number' =>  '031',
        ]);
        City::firstOrCreate([
            'name' =>  'Cohetzala',
            'state_id' => '21',
            'number' =>  '032',
        ]);
        City::firstOrCreate([
            'name' =>  'Cohuecan',
            'state_id' => '21',
            'number' =>  '033',
        ]);
        City::firstOrCreate([
            'name' =>  'Coronango',
            'state_id' => '21',
            'number' =>  '034',
        ]);
        City::firstOrCreate([
            'name' =>  'Coxcatlán',
            'state_id' => '21',
            'number' =>  '035',
        ]);
        City::firstOrCreate([
            'name' =>  'Coyomeapan',
            'state_id' => '21',
            'number' =>  '036',
        ]);
        City::firstOrCreate([
            'name' =>  'Coyotepec',
            'state_id' => '21',
            'number' =>  '037',
        ]);
        City::firstOrCreate([
            'name' =>  'Cuapiaxtla de Madero',
            'state_id' => '21',
            'number' =>  '038',
        ]);
        City::firstOrCreate([
            'name' =>  'Cuautempan',
            'state_id' => '21',
            'number' =>  '039',
        ]);
        City::firstOrCreate([
            'name' =>  'Cuautinchán',
            'state_id' => '21',
            'number' =>  '040',
        ]);
        City::firstOrCreate([
            'name' =>  'Cuautlancingo',
            'state_id' => '21',
            'number' =>  '041',
        ]);
        City::firstOrCreate([
            'name' =>  'Cuayuca de Andrade',
            'state_id' => '21',
            'number' =>  '042',
        ]);
        City::firstOrCreate([
            'name' =>  'Cuetzalan del Progreso',
            'state_id' => '21',
            'number' =>  '043',
        ]);
        City::firstOrCreate([
            'name' =>  'Cuyoaco',
            'state_id' => '21',
            'number' =>  '044',
        ]);
        City::firstOrCreate([
            'name' =>  'Chalchicomula de Sesma',
            'state_id' => '21',
            'number' =>  '045',
        ]);
        City::firstOrCreate([
            'name' =>  'Chapulco',
            'state_id' => '21',
            'number' =>  '046',
        ]);
        City::firstOrCreate([
            'name' =>  'Chiautla',
            'state_id' => '21',
            'number' =>  '047',
        ]);
        City::firstOrCreate([
            'name' =>  'Chiautzingo',
            'state_id' => '21',
            'number' =>  '048',
        ]);
        City::firstOrCreate([
            'name' =>  'Chiconcuautla',
            'state_id' => '21',
            'number' =>  '049',
        ]);
        City::firstOrCreate([
            'name' =>  'Chichiquila',
            'state_id' => '21',
            'number' =>  '050',
        ]);
        City::firstOrCreate([
            'name' =>  'Chietla',
            'state_id' => '21',
            'number' =>  '051',
        ]);
        City::firstOrCreate([
            'name' =>  'Chigmecatitlán',
            'state_id' => '21',
            'number' =>  '052',
        ]);
        City::firstOrCreate([
            'name' =>  'Chignahuapan',
            'state_id' => '21',
            'number' =>  '053',
        ]);
        City::firstOrCreate([
            'name' =>  'Chignautla',
            'state_id' => '21',
            'number' =>  '054',
        ]);
        City::firstOrCreate([
            'name' =>  'Chila',
            'state_id' => '21',
            'number' =>  '055',
        ]);
        City::firstOrCreate([
            'name' =>  'Chila de la Sal',
            'state_id' => '21',
            'number' =>  '056',
        ]);
        City::firstOrCreate([
            'name' =>  'Honey',
            'state_id' => '21',
            'number' =>  '057',
        ]);
        City::firstOrCreate([
            'name' =>  'Chilchotla',
            'state_id' => '21',
            'number' =>  '058',
        ]);
        City::firstOrCreate([
            'name' =>  'Chinantla',
            'state_id' => '21',
            'number' =>  '059',
        ]);
        City::firstOrCreate([
            'name' =>  'Domingo Arenas',
            'state_id' => '21',
            'number' =>  '060',
        ]);
        City::firstOrCreate([
            'name' =>  'Eloxochitlán',
            'state_id' => '21',
            'number' =>  '061',
        ]);
        City::firstOrCreate([
            'name' =>  'Epatlán',
            'state_id' => '21',
            'number' =>  '062',
        ]);
        City::firstOrCreate([
            'name' =>  'Esperanza',
            'state_id' => '21',
            'number' =>  '063',
        ]);
        City::firstOrCreate([
            'name' =>  'Francisco Z. Mena',
            'state_id' => '21',
            'number' =>  '064',
        ]);
        City::firstOrCreate([
            'name' =>  'General Felipe Ángeles',
            'state_id' => '21',
            'number' =>  '065',
        ]);
        City::firstOrCreate([
            'name' =>  'Guadalupe',
            'state_id' => '21',
            'number' =>  '066',
        ]);
        City::firstOrCreate([
            'name' =>  'Guadalupe Victoria',
            'state_id' => '21',
            'number' =>  '067',
        ]);
        City::firstOrCreate([
            'name' =>  'Hermenegildo Galeana',
            'state_id' => '21',
            'number' =>  '068',
        ]);
        City::firstOrCreate([
            'name' =>  'Huaquechula',
            'state_id' => '21',
            'number' =>  '069',
        ]);
        City::firstOrCreate([
            'name' =>  'Huatlatlauca',
            'state_id' => '21',
            'number' =>  '070',
        ]);
        City::firstOrCreate([
            'name' =>  'Huauchinango',
            'state_id' => '21',
            'number' =>  '071',
        ]);
        City::firstOrCreate([
            'name' =>  'Huehuetla',
            'state_id' => '21',
            'number' =>  '072',
        ]);
        City::firstOrCreate([
            'name' =>  'Huehuetlán el Chico',
            'state_id' => '21',
            'number' =>  '073',
        ]);
        City::firstOrCreate([
            'name' =>  'Huejotzingo',
            'state_id' => '21',
            'number' =>  '074',
        ]);
        City::firstOrCreate([
            'name' =>  'Hueyapan',
            'state_id' => '21',
            'number' =>  '075',
        ]);
        City::firstOrCreate([
            'name' =>  'Hueytamalco',
            'state_id' => '21',
            'number' =>  '076',
        ]);
        City::firstOrCreate([
            'name' =>  'Hueytlalpan',
            'state_id' => '21',
            'number' =>  '077',
        ]);
        City::firstOrCreate([
            'name' =>  'Huitzilan de Serdán',
            'state_id' => '21',
            'number' =>  '078',
        ]);
        City::firstOrCreate([
            'name' =>  'Huitziltepec',
            'state_id' => '21',
            'number' =>  '079',
        ]);
        City::firstOrCreate([
            'name' =>  'Atlequizayan',
            'state_id' => '21',
            'number' =>  '080',
        ]);
        City::firstOrCreate([
            'name' =>  'Ixcamilpa de Guerrero',
            'state_id' => '21',
            'number' =>  '081',
        ]);
        City::firstOrCreate([
            'name' =>  'Ixcaquixtla',
            'state_id' => '21',
            'number' =>  '082',
        ]);
        City::firstOrCreate([
            'name' =>  'Ixtacamaxtitlán',
            'state_id' => '21',
            'number' =>  '083',
        ]);
        City::firstOrCreate([
            'name' =>  'Ixtepec',
            'state_id' => '21',
            'number' =>  '084',
        ]);
        City::firstOrCreate([
            'name' =>  'Izúcar de Matamoros',
            'state_id' => '21',
            'number' =>  '085',
        ]);
        City::firstOrCreate([
            'name' =>  'Jalpan',
            'state_id' => '21',
            'number' =>  '086',
        ]);
        City::firstOrCreate([
            'name' =>  'Jolalpan',
            'state_id' => '21',
            'number' =>  '087',
        ]);
        City::firstOrCreate([
            'name' =>  'Jonotla',
            'state_id' => '21',
            'number' =>  '088',
        ]);
        City::firstOrCreate([
            'name' =>  'Jopala',
            'state_id' => '21',
            'number' =>  '089',
        ]);
        City::firstOrCreate([
            'name' =>  'Juan C. Bonilla',
            'state_id' => '21',
            'number' =>  '090',
        ]);
        City::firstOrCreate([
            'name' =>  'Juan Galindo',
            'state_id' => '21',
            'number' =>  '091',
        ]);
        City::firstOrCreate([
            'name' =>  'Juan N. Méndez',
            'state_id' => '21',
            'number' =>  '092',
        ]);
        City::firstOrCreate([
            'name' =>  'Lafragua',
            'state_id' => '21',
            'number' =>  '093',
        ]);
        City::firstOrCreate([
            'name' =>  'Libres',
            'state_id' => '21',
            'number' =>  '094',
        ]);
        City::firstOrCreate([
            'name' =>  'La Magdalena Tlatlauquitepec',
            'state_id' => '21',
            'number' =>  '095',
        ]);
        City::firstOrCreate([
            'name' =>  'Mazapiltepec de Juárez',
            'state_id' => '21',
            'number' =>  '096',
        ]);
        City::firstOrCreate([
            'name' =>  'Mixtla',
            'state_id' => '21',
            'number' =>  '097',
        ]);
        City::firstOrCreate([
            'name' =>  'Molcaxac',
            'state_id' => '21',
            'number' =>  '098',
        ]);
        City::firstOrCreate([
            'name' =>  'Cañada Morelos',
            'state_id' => '21',
            'number' =>  '099',
        ]);
        City::firstOrCreate([
            'name' =>  'Naupan',
            'state_id' => '21',
            'number' =>  '100',
        ]);
        City::firstOrCreate([
            'name' =>  'Nauzontla',
            'state_id' => '21',
            'number' =>  '101',
        ]);
        City::firstOrCreate([
            'name' =>  'Nealtican',
            'state_id' => '21',
            'number' =>  '102',
        ]);
        City::firstOrCreate([
            'name' =>  'Nicolás Bravo',
            'state_id' => '21',
            'number' =>  '103',
        ]);
        City::firstOrCreate([
            'name' =>  'Nopalucan',
            'state_id' => '21',
            'number' =>  '104',
        ]);
        City::firstOrCreate([
            'name' =>  'Ocotepec',
            'state_id' => '21',
            'number' =>  '105',
        ]);
        City::firstOrCreate([
            'name' =>  'Ocoyucan',
            'state_id' => '21',
            'number' =>  '106',
        ]);
        City::firstOrCreate([
            'name' =>  'Olintla',
            'state_id' => '21',
            'number' =>  '107',
        ]);
        City::firstOrCreate([
            'name' =>  'Oriental',
            'state_id' => '21',
            'number' =>  '108',
        ]);
        City::firstOrCreate([
            'name' =>  'Pahuatlán',
            'state_id' => '21',
            'number' =>  '109',
        ]);
        City::firstOrCreate([
            'name' =>  'Palmar de Bravo',
            'state_id' => '21',
            'number' =>  '110',
        ]);
        City::firstOrCreate([
            'name' =>  'Pantepec',
            'state_id' => '21',
            'number' =>  '111',
        ]);
        City::firstOrCreate([
            'name' =>  'Petlalcingo',
            'state_id' => '21',
            'number' =>  '112',
        ]);
        City::firstOrCreate([
            'name' =>  'Piaxtla',
            'state_id' => '21',
            'number' =>  '113',
        ]);
        City::firstOrCreate([
            'name' =>  'Puebla',
            'state_id' => '21',
            'number' =>  '114',
        ]);
        City::firstOrCreate([
            'name' =>  'Quecholac',
            'state_id' => '21',
            'number' =>  '115',
        ]);
        City::firstOrCreate([
            'name' =>  'Quimixtlán',
            'state_id' => '21',
            'number' =>  '116',
        ]);
        City::firstOrCreate([
            'name' =>  'Rafael Lara Grajales',
            'state_id' => '21',
            'number' =>  '117',
        ]);
        City::firstOrCreate([
            'name' =>  'Los Reyes de Juárez',
            'state_id' => '21',
            'number' =>  '118',
        ]);
        City::firstOrCreate([
            'name' =>  'San Andrés Cholula',
            'state_id' => '21',
            'number' =>  '119',
        ]);
        City::firstOrCreate([
            'name' =>  'San Antonio Cañada',
            'state_id' => '21',
            'number' =>  '120',
        ]);
        City::firstOrCreate([
            'name' =>  'San Diego la Mesa Tochimiltzingo',
            'state_id' => '21',
            'number' =>  '121',
        ]);
        City::firstOrCreate([
            'name' =>  'San Felipe Teotlalcingo',
            'state_id' => '21',
            'number' =>  '122',
        ]);
        City::firstOrCreate([
            'name' =>  'San Felipe Tepatlán',
            'state_id' => '21',
            'number' =>  '123',
        ]);
        City::firstOrCreate([
            'name' =>  'San Gabriel Chilac',
            'state_id' => '21',
            'number' =>  '124',
        ]);
        City::firstOrCreate([
            'name' =>  'San Gregorio Atzompa',
            'state_id' => '21',
            'number' =>  '125',
        ]);
        City::firstOrCreate([
            'name' =>  'San Jerónimo Tecuanipan',
            'state_id' => '21',
            'number' =>  '126',
        ]);
        City::firstOrCreate([
            'name' =>  'San Jerónimo Xayacatlán',
            'state_id' => '21',
            'number' =>  '127',
        ]);
        City::firstOrCreate([
            'name' =>  'San José Chiapa',
            'state_id' => '21',
            'number' =>  '128',
        ]);
        City::firstOrCreate([
            'name' =>  'San José Miahuatlán',
            'state_id' => '21',
            'number' =>  '129',
        ]);
        City::firstOrCreate([
            'name' =>  'San Juan Atenco',
            'state_id' => '21',
            'number' =>  '130',
        ]);
        City::firstOrCreate([
            'name' =>  'San Juan Atzompa',
            'state_id' => '21',
            'number' =>  '131',
        ]);
        City::firstOrCreate([
            'name' =>  'San Martín Texmelucan',
            'state_id' => '21',
            'number' =>  '132',
        ]);
        City::firstOrCreate([
            'name' =>  'San Martín Totoltepec',
            'state_id' => '21',
            'number' =>  '133',
        ]);
        City::firstOrCreate([
            'name' =>  'San Matías Tlalancaleca',
            'state_id' => '21',
            'number' =>  '134',
        ]);
        City::firstOrCreate([
            'name' =>  'San Miguel Ixitlán',
            'state_id' => '21',
            'number' =>  '135',
        ]);
        City::firstOrCreate([
            'name' =>  'San Miguel Xoxtla',
            'state_id' => '21',
            'number' =>  '136',
        ]);
        City::firstOrCreate([
            'name' =>  'San Nicolás Buenos Aires',
            'state_id' => '21',
            'number' =>  '137',
        ]);
        City::firstOrCreate([
            'name' =>  'San Nicolás de los Ranchos',
            'state_id' => '21',
            'number' =>  '138',
        ]);
        City::firstOrCreate([
            'name' =>  'San Pablo Anicano',
            'state_id' => '21',
            'number' =>  '139',
        ]);
        City::firstOrCreate([
            'name' =>  'San Pedro Cholula',
            'state_id' => '21',
            'number' =>  '140',
        ]);
        City::firstOrCreate([
            'name' =>  'San Pedro Yeloixtlahuaca',
            'state_id' => '21',
            'number' =>  '141',
        ]);
        City::firstOrCreate([
            'name' =>  'San Salvador el Seco',
            'state_id' => '21',
            'number' =>  '142',
        ]);
        City::firstOrCreate([
            'name' =>  'San Salvador el Verde',
            'state_id' => '21',
            'number' =>  '143',
        ]);
        City::firstOrCreate([
            'name' =>  'San Salvador Huixcolotla',
            'state_id' => '21',
            'number' =>  '144',
        ]);
        City::firstOrCreate([
            'name' =>  'San Sebastián Tlacotepec',
            'state_id' => '21',
            'number' =>  '145',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa Catarina Tlaltempan',
            'state_id' => '21',
            'number' =>  '146',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa Inés Ahuatempan',
            'state_id' => '21',
            'number' =>  '147',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa Isabel Cholula',
            'state_id' => '21',
            'number' =>  '148',
        ]);
        City::firstOrCreate([
            'name' =>  'Santiago Miahuatlán',
            'state_id' => '21',
            'number' =>  '149',
        ]);
        City::firstOrCreate([
            'name' =>  'Huehuetlán el Grande',
            'state_id' => '21',
            'number' =>  '150',
        ]);
        City::firstOrCreate([
            'name' =>  'Santo Tomás Hueyotlipan',
            'state_id' => '21',
            'number' =>  '151',
        ]);
        City::firstOrCreate([
            'name' =>  'Soltepec',
            'state_id' => '21',
            'number' =>  '152',
        ]);
        City::firstOrCreate([
            'name' =>  'Tecali de Herrera',
            'state_id' => '21',
            'number' =>  '153',
        ]);
        City::firstOrCreate([
            'name' =>  'Tecamachalco',
            'state_id' => '21',
            'number' =>  '154',
        ]);
        City::firstOrCreate([
            'name' =>  'Tecomatlán',
            'state_id' => '21',
            'number' =>  '155',
        ]);
        City::firstOrCreate([
            'name' =>  'Tehuacán',
            'state_id' => '21',
            'number' =>  '156',
        ]);
        City::firstOrCreate([
            'name' =>  'Tehuitzingo',
            'state_id' => '21',
            'number' =>  '157',
        ]);
        City::firstOrCreate([
            'name' =>  'Tenampulco',
            'state_id' => '21',
            'number' =>  '158',
        ]);
        City::firstOrCreate([
            'name' =>  'Teopantlán',
            'state_id' => '21',
            'number' =>  '159',
        ]);
        City::firstOrCreate([
            'name' =>  'Teotlalco',
            'state_id' => '21',
            'number' =>  '160',
        ]);
        City::firstOrCreate([
            'name' =>  'Tepanco de López',
            'state_id' => '21',
            'number' =>  '161',
        ]);
        City::firstOrCreate([
            'name' =>  'Tepango de Rodríguez',
            'state_id' => '21',
            'number' =>  '162',
        ]);
        City::firstOrCreate([
            'name' =>  'Tepatlaxco de Hidalgo',
            'state_id' => '21',
            'number' =>  '163',
        ]);
        City::firstOrCreate([
            'name' =>  'Tepeaca',
            'state_id' => '21',
            'number' =>  '164',
        ]);
        City::firstOrCreate([
            'name' =>  'Tepemaxalco',
            'state_id' => '21',
            'number' =>  '165',
        ]);
        City::firstOrCreate([
            'name' =>  'Tepeojuma',
            'state_id' => '21',
            'number' =>  '166',
        ]);
        City::firstOrCreate([
            'name' =>  'Tepetzintla',
            'state_id' => '21',
            'number' =>  '167',
        ]);
        City::firstOrCreate([
            'name' =>  'Tepexco',
            'state_id' => '21',
            'number' =>  '168',
        ]);
        City::firstOrCreate([
            'name' =>  'Tepexi de Rodríguez',
            'state_id' => '21',
            'number' =>  '169',
        ]);
        City::firstOrCreate([
            'name' =>  'Tepeyahualco',
            'state_id' => '21',
            'number' =>  '170',
        ]);
        City::firstOrCreate([
            'name' =>  'Tepeyahualco de Cuauhtémoc',
            'state_id' => '21',
            'number' =>  '171',
        ]);
        City::firstOrCreate([
            'name' =>  'Tetela de Ocampo',
            'state_id' => '21',
            'number' =>  '172',
        ]);
        City::firstOrCreate([
            'name' =>  'Teteles de Avila Castillo',
            'state_id' => '21',
            'number' =>  '173',
        ]);
        City::firstOrCreate([
            'name' =>  'Teziutlán',
            'state_id' => '21',
            'number' =>  '174',
        ]);
        City::firstOrCreate([
            'name' =>  'Tianguismanalco',
            'state_id' => '21',
            'number' =>  '175',
        ]);
        City::firstOrCreate([
            'name' =>  'Tilapa',
            'state_id' => '21',
            'number' =>  '176',
        ]);
        City::firstOrCreate([
            'name' =>  'Tlacotepec de Benito Juárez',
            'state_id' => '21',
            'number' =>  '177',
        ]);
        City::firstOrCreate([
            'name' =>  'Tlacuilotepec',
            'state_id' => '21',
            'number' =>  '178',
        ]);
        City::firstOrCreate([
            'name' =>  'Tlachichuca',
            'state_id' => '21',
            'number' =>  '179',
        ]);
        City::firstOrCreate([
            'name' =>  'Tlahuapan',
            'state_id' => '21',
            'number' =>  '180',
        ]);
        City::firstOrCreate([
            'name' =>  'Tlaltenango',
            'state_id' => '21',
            'number' =>  '181',
        ]);
        City::firstOrCreate([
            'name' =>  'Tlanepantla',
            'state_id' => '21',
            'number' =>  '182',
        ]);
        City::firstOrCreate([
            'name' =>  'Tlaola',
            'state_id' => '21',
            'number' =>  '183',
        ]);
        City::firstOrCreate([
            'name' =>  'Tlapacoya',
            'state_id' => '21',
            'number' =>  '184',
        ]);
        City::firstOrCreate([
            'name' =>  'Tlapanalá',
            'state_id' => '21',
            'number' =>  '185',
        ]);
        City::firstOrCreate([
            'name' =>  'Tlatlauquitepec',
            'state_id' => '21',
            'number' =>  '186',
        ]);
        City::firstOrCreate([
            'name' =>  'Tlaxco',
            'state_id' => '21',
            'number' =>  '187',
        ]);
        City::firstOrCreate([
            'name' =>  'Tochimilco',
            'state_id' => '21',
            'number' =>  '188',
        ]);
        City::firstOrCreate([
            'name' =>  'Tochtepec',
            'state_id' => '21',
            'number' =>  '189',
        ]);
        City::firstOrCreate([
            'name' =>  'Totoltepec de Guerrero',
            'state_id' => '21',
            'number' =>  '190',
        ]);
        City::firstOrCreate([
            'name' =>  'Tulcingo',
            'state_id' => '21',
            'number' =>  '191',
        ]);
        City::firstOrCreate([
            'name' =>  'Tuzamapan de Galeana',
            'state_id' => '21',
            'number' =>  '192',
        ]);
        City::firstOrCreate([
            'name' =>  'Tzicatlacoyan',
            'state_id' => '21',
            'number' =>  '193',
        ]);
        City::firstOrCreate([
            'name' =>  'Venustiano Carranza',
            'state_id' => '21',
            'number' =>  '194',
        ]);
        City::firstOrCreate([
            'name' =>  'Vicente Guerrero',
            'state_id' => '21',
            'number' =>  '195',
        ]);
        City::firstOrCreate([
            'name' =>  'Xayacatlán de Bravo',
            'state_id' => '21',
            'number' =>  '196',
        ]);
        City::firstOrCreate([
            'name' =>  'Xicotepec',
            'state_id' => '21',
            'number' =>  '197',
        ]);
        City::firstOrCreate([
            'name' =>  'Xicotlán',
            'state_id' => '21',
            'number' =>  '198',
        ]);
        City::firstOrCreate([
            'name' =>  'Xiutetelco',
            'state_id' => '21',
            'number' =>  '199',
        ]);
        City::firstOrCreate([
            'name' =>  'Xochiapulco',
            'state_id' => '21',
            'number' =>  '200',
        ]);
        City::firstOrCreate([
            'name' =>  'Xochiltepec',
            'state_id' => '21',
            'number' =>  '201',
        ]);
        City::firstOrCreate([
            'name' =>  'Xochitlán de Vicente Suárez',
            'state_id' => '21',
            'number' =>  '202',
        ]);
        City::firstOrCreate([
            'name' =>  'Xochitlán Todos Santos',
            'state_id' => '21',
            'number' =>  '203',
        ]);
        City::firstOrCreate([
            'name' =>  'Yaonáhuac',
            'state_id' => '21',
            'number' =>  '204',
        ]);
        City::firstOrCreate([
            'name' =>  'Yehualtepec',
            'state_id' => '21',
            'number' =>  '205',
        ]);
        City::firstOrCreate([
            'name' =>  'Zacapala',
            'state_id' => '21',
            'number' =>  '206',
        ]);
        City::firstOrCreate([
            'name' =>  'Zacapoaxtla',
            'state_id' => '21',
            'number' =>  '207',
        ]);
        City::firstOrCreate([
            'name' =>  'Zacatlán',
            'state_id' => '21',
            'number' =>  '208',
        ]);
        City::firstOrCreate([
            'name' =>  'Zapotitlán',
            'state_id' => '21',
            'number' =>  '209',
        ]);
        City::firstOrCreate([
            'name' =>  'Zapotitlán de Méndez',
            'state_id' => '21',
            'number' =>  '210',
        ]);
        City::firstOrCreate([
            'name' =>  'Zaragoza',
            'state_id' => '21',
            'number' =>  '211',
        ]);
        City::firstOrCreate([
            'name' =>  'Zautla',
            'state_id' => '21',
            'number' =>  '212',
        ]);
        City::firstOrCreate([
            'name' =>  'Zihuateutla',
            'state_id' => '21',
            'number' =>  '213',
        ]);
        City::firstOrCreate([
            'name' =>  'Zinacatepec',
            'state_id' => '21',
            'number' =>  '214',
        ]);
        City::firstOrCreate([
            'name' =>  'Zongozotla',
            'state_id' => '21',
            'number' =>  '215',
        ]);
        City::firstOrCreate([
            'name' =>  'Zoquiapan',
            'state_id' => '21',
            'number' =>  '216',
        ]);
        City::firstOrCreate([
            'name' =>  'Zoquitlán',
            'state_id' => '21',
            'number' =>  '217',
        ]);
        City::firstOrCreate([
            'name' =>  'Amealco de Bonfil',
            'state_id' => '22',
            'number' =>  '001',
        ]);
        City::firstOrCreate([
            'name' =>  'Pinal de Amoles',
            'state_id' => '22',
            'number' =>  '002',
        ]);
        City::firstOrCreate([
            'name' =>  'Arroyo Seco',
            'state_id' => '22',
            'number' =>  '003',
        ]);
        City::firstOrCreate([
            'name' =>  'Cadereyta de Montes',
            'state_id' => '22',
            'number' =>  '004',
        ]);
        City::firstOrCreate([
            'name' =>  'Colón',
            'state_id' => '22',
            'number' =>  '005',
        ]);
        City::firstOrCreate([
            'name' =>  'Corregidora',
            'state_id' => '22',
            'number' =>  '006',
        ]);
        City::firstOrCreate([
            'name' =>  'Ezequiel Montes',
            'state_id' => '22',
            'number' =>  '007',
        ]);
        City::firstOrCreate([
            'name' =>  'Huimilpan',
            'state_id' => '22',
            'number' =>  '008',
        ]);
        City::firstOrCreate([
            'name' =>  'Jalpan de Serra',
            'state_id' => '22',
            'number' =>  '009',
        ]);
        City::firstOrCreate([
            'name' =>  'Landa de Matamoros',
            'state_id' => '22',
            'number' =>  '010',
        ]);
        City::firstOrCreate([
            'name' =>  'El Marqués',
            'state_id' => '22',
            'number' =>  '011',
        ]);
        City::firstOrCreate([
            'name' =>  'Pedro Escobedo',
            'state_id' => '22',
            'number' =>  '012',
        ]);
        City::firstOrCreate([
            'name' =>  'Peñamiller',
            'state_id' => '22',
            'number' =>  '013',
        ]);
        City::firstOrCreate([
            'name' =>  'Querétaro',
            'state_id' => '22',
            'number' =>  '014',
        ]);
        City::firstOrCreate([
            'name' =>  'San Joaquín',
            'state_id' => '22',
            'number' =>  '015',
        ]);
        City::firstOrCreate([
            'name' =>  'San Juan del Río',
            'state_id' => '22',
            'number' =>  '016',
        ]);
        City::firstOrCreate([
            'name' =>  'Tequisquiapan',
            'state_id' => '22',
            'number' =>  '017',
        ]);
        City::firstOrCreate([
            'name' =>  'Tolimán',
            'state_id' => '22',
            'number' =>  '018',
        ]);
        City::firstOrCreate([
            'name' =>  'Cozumel',
            'state_id' => '23',
            'number' =>  '001',
        ]);
        City::firstOrCreate([
            'name' =>  'Felipe Carrillo Puerto',
            'state_id' => '23',
            'number' =>  '002',
        ]);
        City::firstOrCreate([
            'name' =>  'Isla Mujeres',
            'state_id' => '23',
            'number' =>  '003',
        ]);
        City::firstOrCreate([
            'name' =>  'Othón P. Blanco',
            'state_id' => '23',
            'number' =>  '004',
        ]);
        City::firstOrCreate([
            'name' =>  'Benito Juárez',
            'state_id' => '23',
            'number' =>  '005',
        ]);
        City::firstOrCreate([
            'name' =>  'José María Morelos',
            'state_id' => '23',
            'number' =>  '006',
        ]);
        City::firstOrCreate([
            'name' =>  'Lázaro Cárdenas',
            'state_id' => '23',
            'number' =>  '007',
        ]);
        City::firstOrCreate([
            'name' =>  'Solidaridad',
            'state_id' => '23',
            'number' =>  '008',
        ]);
        City::firstOrCreate([
            'name' =>  'Tulum',
            'state_id' => '23',
            'number' =>  '009',
        ]);
        City::firstOrCreate([
            'name' =>  'Bacalar',
            'state_id' => '23',
            'number' =>  '010',
        ]);
        City::firstOrCreate([
            'name' =>  'Ahualulco',
            'state_id' => '24',
            'number' =>  '001',
        ]);
        City::firstOrCreate([
            'name' =>  'Alaquines',
            'state_id' => '24',
            'number' =>  '002',
        ]);
        City::firstOrCreate([
            'name' =>  'Aquismón',
            'state_id' => '24',
            'number' =>  '003',
        ]);
        City::firstOrCreate([
            'name' =>  'Armadillo de los Infante',
            'state_id' => '24',
            'number' =>  '004',
        ]);
        City::firstOrCreate([
            'name' =>  'Cárdenas',
            'state_id' => '24',
            'number' =>  '005',
        ]);
        City::firstOrCreate([
            'name' =>  'Catorce',
            'state_id' => '24',
            'number' =>  '006',
        ]);
        City::firstOrCreate([
            'name' =>  'Cedral',
            'state_id' => '24',
            'number' =>  '007',
        ]);
        City::firstOrCreate([
            'name' =>  'Cerritos',
            'state_id' => '24',
            'number' =>  '008',
        ]);
        City::firstOrCreate([
            'name' =>  'Cerro de San Pedro',
            'state_id' => '24',
            'number' =>  '009',
        ]);
        City::firstOrCreate([
            'name' =>  'Ciudad del Maíz',
            'state_id' => '24',
            'number' =>  '010',
        ]);
        City::firstOrCreate([
            'name' =>  'Ciudad Fernández',
            'state_id' => '24',
            'number' =>  '011',
        ]);
        City::firstOrCreate([
            'name' =>  'Tancanhuitz',
            'state_id' => '24',
            'number' =>  '012',
        ]);
        City::firstOrCreate([
            'name' =>  'Ciudad Valles',
            'state_id' => '24',
            'number' =>  '013',
        ]);
        City::firstOrCreate([
            'name' =>  'Coxcatlán',
            'state_id' => '24',
            'number' =>  '014',
        ]);
        City::firstOrCreate([
            'name' =>  'Charcas',
            'state_id' => '24',
            'number' =>  '015',
        ]);
        City::firstOrCreate([
            'name' =>  'Ebano',
            'state_id' => '24',
            'number' =>  '016',
        ]);
        City::firstOrCreate([
            'name' =>  'Guadalcázar',
            'state_id' => '24',
            'number' =>  '017',
        ]);
        City::firstOrCreate([
            'name' =>  'Huehuetlán',
            'state_id' => '24',
            'number' =>  '018',
        ]);
        City::firstOrCreate([
            'name' =>  'Lagunillas',
            'state_id' => '24',
            'number' =>  '019',
        ]);
        City::firstOrCreate([
            'name' =>  'Matehuala',
            'state_id' => '24',
            'number' =>  '020',
        ]);
        City::firstOrCreate([
            'name' =>  'Mexquitic de Carmona',
            'state_id' => '24',
            'number' =>  '021',
        ]);
        City::firstOrCreate([
            'name' =>  'Moctezuma',
            'state_id' => '24',
            'number' =>  '022',
        ]);
        City::firstOrCreate([
            'name' =>  'Rayón',
            'state_id' => '24',
            'number' =>  '023',
        ]);
        City::firstOrCreate([
            'name' =>  'Rioverde',
            'state_id' => '24',
            'number' =>  '024',
        ]);
        City::firstOrCreate([
            'name' =>  'Salinas',
            'state_id' => '24',
            'number' =>  '025',
        ]);
        City::firstOrCreate([
            'name' =>  'San Antonio',
            'state_id' => '24',
            'number' =>  '026',
        ]);
        City::firstOrCreate([
            'name' =>  'San Ciro de Acosta',
            'state_id' => '24',
            'number' =>  '027',
        ]);
        City::firstOrCreate([
            'name' =>  'San Luis Potosí',
            'state_id' => '24',
            'number' =>  '028',
        ]);
        City::firstOrCreate([
            'name' =>  'San Martín Chalchicuautla',
            'state_id' => '24',
            'number' =>  '029',
        ]);
        City::firstOrCreate([
            'name' =>  'San Nicolás Tolentino',
            'state_id' => '24',
            'number' =>  '030',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa Catarina',
            'state_id' => '24',
            'number' =>  '031',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa María del Río',
            'state_id' => '24',
            'number' =>  '032',
        ]);
        City::firstOrCreate([
            'name' =>  'Santo Domingo',
            'state_id' => '24',
            'number' =>  '033',
        ]);
        City::firstOrCreate([
            'name' =>  'San Vicente Tancuayalab',
            'state_id' => '24',
            'number' =>  '034',
        ]);
        City::firstOrCreate([
            'name' =>  'Soledad de Graciano Sánchez',
            'state_id' => '24',
            'number' =>  '035',
        ]);
        City::firstOrCreate([
            'name' =>  'Tamasopo',
            'state_id' => '24',
            'number' =>  '036',
        ]);
        City::firstOrCreate([
            'name' =>  'Tamazunchale',
            'state_id' => '24',
            'number' =>  '037',
        ]);
        City::firstOrCreate([
            'name' =>  'Tampacán',
            'state_id' => '24',
            'number' =>  '038',
        ]);
        City::firstOrCreate([
            'name' =>  'Tampamolón Corona',
            'state_id' => '24',
            'number' =>  '039',
        ]);
        City::firstOrCreate([
            'name' =>  'Tamuín',
            'state_id' => '24',
            'number' =>  '040',
        ]);
        City::firstOrCreate([
            'name' =>  'Tanlajás',
            'state_id' => '24',
            'number' =>  '041',
        ]);
        City::firstOrCreate([
            'name' =>  'Tanquián de Escobedo',
            'state_id' => '24',
            'number' =>  '042',
        ]);
        City::firstOrCreate([
            'name' =>  'Tierra Nueva',
            'state_id' => '24',
            'number' =>  '043',
        ]);
        City::firstOrCreate([
            'name' =>  'Vanegas',
            'state_id' => '24',
            'number' =>  '044',
        ]);
        City::firstOrCreate([
            'name' =>  'Venado',
            'state_id' => '24',
            'number' =>  '045',
        ]);
        City::firstOrCreate([
            'name' =>  'Villa de Arriaga',
            'state_id' => '24',
            'number' =>  '046',
        ]);
        City::firstOrCreate([
            'name' =>  'Villa de Guadalupe',
            'state_id' => '24',
            'number' =>  '047',
        ]);
        City::firstOrCreate([
            'name' =>  'Villa de la Paz',
            'state_id' => '24',
            'number' =>  '048',
        ]);
        City::firstOrCreate([
            'name' =>  'Villa de Ramos',
            'state_id' => '24',
            'number' =>  '049',
        ]);
        City::firstOrCreate([
            'name' =>  'Villa de Reyes',
            'state_id' => '24',
            'number' =>  '050',
        ]);
        City::firstOrCreate([
            'name' =>  'Villa Hidalgo',
            'state_id' => '24',
            'number' =>  '051',
        ]);
        City::firstOrCreate([
            'name' =>  'Villa Juárez',
            'state_id' => '24',
            'number' =>  '052',
        ]);
        City::firstOrCreate([
            'name' =>  'Axtla de Terrazas',
            'state_id' => '24',
            'number' =>  '053',
        ]);
        City::firstOrCreate([
            'name' =>  'Xilitla',
            'state_id' => '24',
            'number' =>  '054',
        ]);
        City::firstOrCreate([
            'name' =>  'Zaragoza',
            'state_id' => '24',
            'number' =>  '055',
        ]);
        City::firstOrCreate([
            'name' =>  'Villa de Arista',
            'state_id' => '24',
            'number' =>  '056',
        ]);
        City::firstOrCreate([
            'name' =>  'Matlapa',
            'state_id' => '24',
            'number' =>  '057',
        ]);
        City::firstOrCreate([
            'name' =>  'El Naranjo',
            'state_id' => '24',
            'number' =>  '058',
        ]);
        City::firstOrCreate([
            'name' =>  'Ahome',
            'state_id' => '25',
            'number' =>  '001',
        ]);
        City::firstOrCreate([
            'name' =>  'Angostura',
            'state_id' => '25',
            'number' =>  '002',
        ]);
        City::firstOrCreate([
            'name' =>  'Badiraguato',
            'state_id' => '25',
            'number' =>  '003',
        ]);
        City::firstOrCreate([
            'name' =>  'Concordia',
            'state_id' => '25',
            'number' =>  '004',
        ]);
        City::firstOrCreate([
            'name' =>  'Cosalá',
            'state_id' => '25',
            'number' =>  '005',
        ]);
        City::firstOrCreate([
            'name' =>  'Culiacán',
            'state_id' => '25',
            'number' =>  '006',
        ]);
        City::firstOrCreate([
            'name' =>  'Choix',
            'state_id' => '25',
            'number' =>  '007',
        ]);
        City::firstOrCreate([
            'name' =>  'Elota',
            'state_id' => '25',
            'number' =>  '008',
        ]);
        City::firstOrCreate([
            'name' =>  'Escuinapa',
            'state_id' => '25',
            'number' =>  '009',
        ]);
        City::firstOrCreate([
            'name' =>  'El Fuerte',
            'state_id' => '25',
            'number' =>  '010',
        ]);
        City::firstOrCreate([
            'name' =>  'Guasave',
            'state_id' => '25',
            'number' =>  '011',
        ]);
        City::firstOrCreate([
            'name' =>  'Mazatlán',
            'state_id' => '25',
            'number' =>  '012',
        ]);
        City::firstOrCreate([
            'name' =>  'Mocorito',
            'state_id' => '25',
            'number' =>  '013',
        ]);
        City::firstOrCreate([
            'name' =>  'Rosario',
            'state_id' => '25',
            'number' =>  '014',
        ]);
        City::firstOrCreate([
            'name' =>  'Salvador Alvarado',
            'state_id' => '25',
            'number' =>  '015',
        ]);
        City::firstOrCreate([
            'name' =>  'San Ignacio',
            'state_id' => '25',
            'number' =>  '016',
        ]);
        City::firstOrCreate([
            'name' =>  'Sinaloa',
            'state_id' => '25',
            'number' =>  '017',
        ]);
        City::firstOrCreate([
            'name' =>  'Navolato',
            'state_id' => '25',
            'number' =>  '018',
        ]);
        City::firstOrCreate([
            'name' =>  'Aconchi',
            'state_id' => '26',
            'number' =>  '001',
        ]);
        City::firstOrCreate([
            'name' =>  'Agua Prieta',
            'state_id' => '26',
            'number' =>  '002',
        ]);
        City::firstOrCreate([
            'name' =>  'Alamos',
            'state_id' => '26',
            'number' =>  '003',
        ]);
        City::firstOrCreate([
            'name' =>  'Altar',
            'state_id' => '26',
            'number' =>  '004',
        ]);
        City::firstOrCreate([
            'name' =>  'Arivechi',
            'state_id' => '26',
            'number' =>  '005',
        ]);
        City::firstOrCreate([
            'name' =>  'Arizpe',
            'state_id' => '26',
            'number' =>  '006',
        ]);
        City::firstOrCreate([
            'name' =>  'Atil',
            'state_id' => '26',
            'number' =>  '007',
        ]);
        City::firstOrCreate([
            'name' =>  'Bacadéhuachi',
            'state_id' => '26',
            'number' =>  '008',
        ]);
        City::firstOrCreate([
            'name' =>  'Bacanora',
            'state_id' => '26',
            'number' =>  '009',
        ]);
        City::firstOrCreate([
            'name' =>  'Bacerac',
            'state_id' => '26',
            'number' =>  '010',
        ]);
        City::firstOrCreate([
            'name' =>  'Bacoachi',
            'state_id' => '26',
            'number' =>  '011',
        ]);
        City::firstOrCreate([
            'name' =>  'Bácum',
            'state_id' => '26',
            'number' =>  '012',
        ]);
        City::firstOrCreate([
            'name' =>  'Banámichi',
            'state_id' => '26',
            'number' =>  '013',
        ]);
        City::firstOrCreate([
            'name' =>  'Baviácora',
            'state_id' => '26',
            'number' =>  '014',
        ]);
        City::firstOrCreate([
            'name' =>  'Bavispe',
            'state_id' => '26',
            'number' =>  '015',
        ]);
        City::firstOrCreate([
            'name' =>  'Benjamín Hill',
            'state_id' => '26',
            'number' =>  '016',
        ]);
        City::firstOrCreate([
            'name' =>  'Caborca',
            'state_id' => '26',
            'number' =>  '017',
        ]);
        City::firstOrCreate([
            'name' =>  'Cajeme',
            'state_id' => '26',
            'number' =>  '018',
        ]);
        City::firstOrCreate([
            'name' =>  'Cananea',
            'state_id' => '26',
            'number' =>  '019',
        ]);
        City::firstOrCreate([
            'name' =>  'Carbó',
            'state_id' => '26',
            'number' =>  '020',
        ]);
        City::firstOrCreate([
            'name' =>  'La Colorada',
            'state_id' => '26',
            'number' =>  '021',
        ]);
        City::firstOrCreate([
            'name' =>  'Cucurpe',
            'state_id' => '26',
            'number' =>  '022',
        ]);
        City::firstOrCreate([
            'name' =>  'Cumpas',
            'state_id' => '26',
            'number' =>  '023',
        ]);
        City::firstOrCreate([
            'name' =>  'Divisaderos',
            'state_id' => '26',
            'number' =>  '024',
        ]);
        City::firstOrCreate([
            'name' =>  'Empalme',
            'state_id' => '26',
            'number' =>  '025',
        ]);
        City::firstOrCreate([
            'name' =>  'Etchojoa',
            'state_id' => '26',
            'number' =>  '026',
        ]);
        City::firstOrCreate([
            'name' =>  'Fronteras',
            'state_id' => '26',
            'number' =>  '027',
        ]);
        City::firstOrCreate([
            'name' =>  'Granados',
            'state_id' => '26',
            'number' =>  '028',
        ]);
        City::firstOrCreate([
            'name' =>  'Guaymas',
            'state_id' => '26',
            'number' =>  '029',
        ]);
        City::firstOrCreate([
            'name' =>  'Hermosillo',
            'state_id' => '26',
            'number' =>  '030',
        ]);
        City::firstOrCreate([
            'name' =>  'Huachinera',
            'state_id' => '26',
            'number' =>  '031',
        ]);
        City::firstOrCreate([
            'name' =>  'Huásabas',
            'state_id' => '26',
            'number' =>  '032',
        ]);
        City::firstOrCreate([
            'name' =>  'Huatabampo',
            'state_id' => '26',
            'number' =>  '033',
        ]);
        City::firstOrCreate([
            'name' =>  'Huépac',
            'state_id' => '26',
            'number' =>  '034',
        ]);
        City::firstOrCreate([
            'name' =>  'Imuris',
            'state_id' => '26',
            'number' =>  '035',
        ]);
        City::firstOrCreate([
            'name' =>  'Magdalena',
            'state_id' => '26',
            'number' =>  '036',
        ]);
        City::firstOrCreate([
            'name' =>  'Mazatán',
            'state_id' => '26',
            'number' =>  '037',
        ]);
        City::firstOrCreate([
            'name' =>  'Moctezuma',
            'state_id' => '26',
            'number' =>  '038',
        ]);
        City::firstOrCreate([
            'name' =>  'Naco',
            'state_id' => '26',
            'number' =>  '039',
        ]);
        City::firstOrCreate([
            'name' =>  'Nácori Chico',
            'state_id' => '26',
            'number' =>  '040',
        ]);
        City::firstOrCreate([
            'name' =>  'Nacozari de García',
            'state_id' => '26',
            'number' =>  '041',
        ]);
        City::firstOrCreate([
            'name' =>  'Navojoa',
            'state_id' => '26',
            'number' =>  '042',
        ]);
        City::firstOrCreate([
            'name' =>  'Nogales',
            'state_id' => '26',
            'number' =>  '043',
        ]);
        City::firstOrCreate([
            'name' =>  'Onavas',
            'state_id' => '26',
            'number' =>  '044',
        ]);
        City::firstOrCreate([
            'name' =>  'Opodepe',
            'state_id' => '26',
            'number' =>  '045',
        ]);
        City::firstOrCreate([
            'name' =>  'Oquitoa',
            'state_id' => '26',
            'number' =>  '046',
        ]);
        City::firstOrCreate([
            'name' =>  'Pitiquito',
            'state_id' => '26',
            'number' =>  '047',
        ]);
        City::firstOrCreate([
            'name' =>  'Puerto Peñasco',
            'state_id' => '26',
            'number' =>  '048',
        ]);
        City::firstOrCreate([
            'name' =>  'Quiriego',
            'state_id' => '26',
            'number' =>  '049',
        ]);
        City::firstOrCreate([
            'name' =>  'Rayón',
            'state_id' => '26',
            'number' =>  '050',
        ]);
        City::firstOrCreate([
            'name' =>  'Rosario',
            'state_id' => '26',
            'number' =>  '051',
        ]);
        City::firstOrCreate([
            'name' =>  'Sahuaripa',
            'state_id' => '26',
            'number' =>  '052',
        ]);
        City::firstOrCreate([
            'name' =>  'San Felipe de Jesús',
            'state_id' => '26',
            'number' =>  '053',
        ]);
        City::firstOrCreate([
            'name' =>  'San Javier',
            'state_id' => '26',
            'number' =>  '054',
        ]);
        City::firstOrCreate([
            'name' =>  'San Luis Río Colorado',
            'state_id' => '26',
            'number' =>  '055',
        ]);
        City::firstOrCreate([
            'name' =>  'San Miguel de Horcasitas',
            'state_id' => '26',
            'number' =>  '056',
        ]);
        City::firstOrCreate([
            'name' =>  'San Pedro de la Cueva',
            'state_id' => '26',
            'number' =>  '057',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa Ana',
            'state_id' => '26',
            'number' =>  '058',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa Cruz',
            'state_id' => '26',
            'number' =>  '059',
        ]);
        City::firstOrCreate([
            'name' =>  'Sáric',
            'state_id' => '26',
            'number' =>  '060',
        ]);
        City::firstOrCreate([
            'name' =>  'Soyopa',
            'state_id' => '26',
            'number' =>  '061',
        ]);
        City::firstOrCreate([
            'name' =>  'Suaqui Grande',
            'state_id' => '26',
            'number' =>  '062',
        ]);
        City::firstOrCreate([
            'name' =>  'Tepache',
            'state_id' => '26',
            'number' =>  '063',
        ]);
        City::firstOrCreate([
            'name' =>  'Trincheras',
            'state_id' => '26',
            'number' =>  '064',
        ]);
        City::firstOrCreate([
            'name' =>  'Tubutama',
            'state_id' => '26',
            'number' =>  '065',
        ]);
        City::firstOrCreate([
            'name' =>  'Ures',
            'state_id' => '26',
            'number' =>  '066',
        ]);
        City::firstOrCreate([
            'name' =>  'Villa Hidalgo',
            'state_id' => '26',
            'number' =>  '067',
        ]);
        City::firstOrCreate([
            'name' =>  'Villa Pesqueira',
            'state_id' => '26',
            'number' =>  '068',
        ]);
        City::firstOrCreate([
            'name' =>  'Yécora',
            'state_id' => '26',
            'number' =>  '069',
        ]);
        City::firstOrCreate([
            'name' =>  'General Plutarco Elías Calles',
            'state_id' => '26',
            'number' =>  '070',
        ]);
        City::firstOrCreate([
            'name' =>  'Benito Juárez',
            'state_id' => '26',
            'number' =>  '071',
        ]);
        City::firstOrCreate([
            'name' =>  'San Ignacio Río Muerto',
            'state_id' => '26',
            'number' =>  '072',
        ]);
        City::firstOrCreate([
            'name' =>  'Balancán',
            'state_id' => '27',
            'number' =>  '001',
        ]);
        City::firstOrCreate([
            'name' =>  'Cárdenas',
            'state_id' => '27',
            'number' =>  '002',
        ]);
        City::firstOrCreate([
            'name' =>  'Centla',
            'state_id' => '27',
            'number' =>  '003',
        ]);
        City::firstOrCreate([
            'name' =>  'Centro',
            'state_id' => '27',
            'number' =>  '004',
        ]);
        City::firstOrCreate([
            'name' =>  'Comalcalco',
            'state_id' => '27',
            'number' =>  '005',
        ]);
        City::firstOrCreate([
            'name' =>  'Cunduacán',
            'state_id' => '27',
            'number' =>  '006',
        ]);
        City::firstOrCreate([
            'name' =>  'Emiliano Zapata',
            'state_id' => '27',
            'number' =>  '007',
        ]);
        City::firstOrCreate([
            'name' =>  'Huimanguillo',
            'state_id' => '27',
            'number' =>  '008',
        ]);
        City::firstOrCreate([
            'name' =>  'Jalapa',
            'state_id' => '27',
            'number' =>  '009',
        ]);
        City::firstOrCreate([
            'name' =>  'Jalpa de Méndez',
            'state_id' => '27',
            'number' =>  '010',
        ]);
        City::firstOrCreate([
            'name' =>  'Jonuta',
            'state_id' => '27',
            'number' =>  '011',
        ]);
        City::firstOrCreate([
            'name' =>  'Macuspana',
            'state_id' => '27',
            'number' =>  '012',
        ]);
        City::firstOrCreate([
            'name' =>  'Nacajuca',
            'state_id' => '27',
            'number' =>  '013',
        ]);
        City::firstOrCreate([
            'name' =>  'Paraíso',
            'state_id' => '27',
            'number' =>  '014',
        ]);
        City::firstOrCreate([
            'name' =>  'Tacotalpa',
            'state_id' => '27',
            'number' =>  '015',
        ]);
        City::firstOrCreate([
            'name' =>  'Teapa',
            'state_id' => '27',
            'number' =>  '016',
        ]);
        City::firstOrCreate([
            'name' =>  'Tenosique',
            'state_id' => '27',
            'number' =>  '017',
        ]);
        City::firstOrCreate([
            'name' =>  'Abasolo',
            'state_id' => '28',
            'number' =>  '001',
        ]);
        City::firstOrCreate([
            'name' =>  'Aldama',
            'state_id' => '28',
            'number' =>  '002',
        ]);
        City::firstOrCreate([
            'name' =>  'Altamira',
            'state_id' => '28',
            'number' =>  '003',
        ]);
        City::firstOrCreate([
            'name' =>  'Antiguo Morelos',
            'state_id' => '28',
            'number' =>  '004',
        ]);
        City::firstOrCreate([
            'name' =>  'Burgos',
            'state_id' => '28',
            'number' =>  '005',
        ]);
        City::firstOrCreate([
            'name' =>  'Bustamante',
            'state_id' => '28',
            'number' =>  '006',
        ]);
        City::firstOrCreate([
            'name' =>  'Camargo',
            'state_id' => '28',
            'number' =>  '007',
        ]);
        City::firstOrCreate([
            'name' =>  'Casas',
            'state_id' => '28',
            'number' =>  '008',
        ]);
        City::firstOrCreate([
            'name' =>  'Ciudad Madero',
            'state_id' => '28',
            'number' =>  '009',
        ]);
        City::firstOrCreate([
            'name' =>  'Cruillas',
            'state_id' => '28',
            'number' =>  '010',
        ]);
        City::firstOrCreate([
            'name' =>  'Gómez Farías',
            'state_id' => '28',
            'number' =>  '011',
        ]);
        City::firstOrCreate([
            'name' =>  'González',
            'state_id' => '28',
            'number' =>  '012',
        ]);
        City::firstOrCreate([
            'name' =>  'Güémez',
            'state_id' => '28',
            'number' =>  '013',
        ]);
        City::firstOrCreate([
            'name' =>  'Guerrero',
            'state_id' => '28',
            'number' =>  '014',
        ]);
        City::firstOrCreate([
            'name' =>  'Gustavo Díaz Ordaz',
            'state_id' => '28',
            'number' =>  '015',
        ]);
        City::firstOrCreate([
            'name' =>  'Hidalgo',
            'state_id' => '28',
            'number' =>  '016',
        ]);
        City::firstOrCreate([
            'name' =>  'Jaumave',
            'state_id' => '28',
            'number' =>  '017',
        ]);
        City::firstOrCreate([
            'name' =>  'Jiménez',
            'state_id' => '28',
            'number' =>  '018',
        ]);
        City::firstOrCreate([
            'name' =>  'Llera',
            'state_id' => '28',
            'number' =>  '019',
        ]);
        City::firstOrCreate([
            'name' =>  'Mainero',
            'state_id' => '28',
            'number' =>  '020',
        ]);
        City::firstOrCreate([
            'name' =>  'El Mante',
            'state_id' => '28',
            'number' =>  '021',
        ]);
        City::firstOrCreate([
            'name' =>  'Matamoros',
            'state_id' => '28',
            'number' =>  '022',
        ]);
        City::firstOrCreate([
            'name' =>  'Méndez',
            'state_id' => '28',
            'number' =>  '023',
        ]);
        City::firstOrCreate([
            'name' =>  'Mier',
            'state_id' => '28',
            'number' =>  '024',
        ]);
        City::firstOrCreate([
            'name' =>  'Miguel Alemán',
            'state_id' => '28',
            'number' =>  '025',
        ]);
        City::firstOrCreate([
            'name' =>  'Miquihuana',
            'state_id' => '28',
            'number' =>  '026',
        ]);
        City::firstOrCreate([
            'name' =>  'Nuevo Laredo',
            'state_id' => '28',
            'number' =>  '027',
        ]);
        City::firstOrCreate([
            'name' =>  'Nuevo Morelos',
            'state_id' => '28',
            'number' =>  '028',
        ]);
        City::firstOrCreate([
            'name' =>  'Ocampo',
            'state_id' => '28',
            'number' =>  '029',
        ]);
        City::firstOrCreate([
            'name' =>  'Padilla',
            'state_id' => '28',
            'number' =>  '030',
        ]);
        City::firstOrCreate([
            'name' =>  'Palmillas',
            'state_id' => '28',
            'number' =>  '031',
        ]);
        City::firstOrCreate([
            'name' =>  'Reynosa',
            'state_id' => '28',
            'number' =>  '032',
        ]);
        City::firstOrCreate([
            'name' =>  'Río Bravo',
            'state_id' => '28',
            'number' =>  '033',
        ]);
        City::firstOrCreate([
            'name' =>  'San Carlos',
            'state_id' => '28',
            'number' =>  '034',
        ]);
        City::firstOrCreate([
            'name' =>  'San Fernando',
            'state_id' => '28',
            'number' =>  '035',
        ]);
        City::firstOrCreate([
            'name' =>  'San Nicolás',
            'state_id' => '28',
            'number' =>  '036',
        ]);
        City::firstOrCreate([
            'name' =>  'Soto la Marina',
            'state_id' => '28',
            'number' =>  '037',
        ]);
        City::firstOrCreate([
            'name' =>  'Tampico',
            'state_id' => '28',
            'number' =>  '038',
        ]);
        City::firstOrCreate([
            'name' =>  'Tula',
            'state_id' => '28',
            'number' =>  '039',
        ]);
        City::firstOrCreate([
            'name' =>  'Valle Hermoso',
            'state_id' => '28',
            'number' =>  '040',
        ]);
        City::firstOrCreate([
            'name' =>  'Victoria',
            'state_id' => '28',
            'number' =>  '041',
        ]);
        City::firstOrCreate([
            'name' =>  'Villagrán',
            'state_id' => '28',
            'number' =>  '042',
        ]);
        City::firstOrCreate([
            'name' =>  'Xicoténcatl',
            'state_id' => '28',
            'number' =>  '043',
        ]);
        City::firstOrCreate([
            'name' =>  'Amaxac de Guerrero',
            'state_id' => '29',
            'number' =>  '001',
        ]);
        City::firstOrCreate([
            'name' =>  'Apetatitlán de Antonio Carvajal',
            'state_id' => '29',
            'number' =>  '002',
        ]);
        City::firstOrCreate([
            'name' =>  'Atlangatepec',
            'state_id' => '29',
            'number' =>  '003',
        ]);
        City::firstOrCreate([
            'name' =>  'Atltzayanca',
            'state_id' => '29',
            'number' =>  '004',
        ]);
        City::firstOrCreate([
            'name' =>  'Apizaco',
            'state_id' => '29',
            'number' =>  '005',
        ]);
        City::firstOrCreate([
            'name' =>  'Calpulalpan',
            'state_id' => '29',
            'number' =>  '006',
        ]);
        City::firstOrCreate([
            'name' =>  'El Carmen Tequexquitla',
            'state_id' => '29',
            'number' =>  '007',
        ]);
        City::firstOrCreate([
            'name' =>  'Cuapiaxtla',
            'state_id' => '29',
            'number' =>  '008',
        ]);
        City::firstOrCreate([
            'name' =>  'Cuaxomulco',
            'state_id' => '29',
            'number' =>  '009',
        ]);
        City::firstOrCreate([
            'name' =>  'Chiautempan',
            'state_id' => '29',
            'number' =>  '010',
        ]);
        City::firstOrCreate([
            'name' =>  'Muñoz de Domingo Arenas',
            'state_id' => '29',
            'number' =>  '011',
        ]);
        City::firstOrCreate([
            'name' =>  'Españita',
            'state_id' => '29',
            'number' =>  '012',
        ]);
        City::firstOrCreate([
            'name' =>  'Huamantla',
            'state_id' => '29',
            'number' =>  '013',
        ]);
        City::firstOrCreate([
            'name' =>  'Hueyotlipan',
            'state_id' => '29',
            'number' =>  '014',
        ]);
        City::firstOrCreate([
            'name' =>  'Ixtacuixtla de Mariano Matamoros',
            'state_id' => '29',
            'number' =>  '015',
        ]);
        City::firstOrCreate([
            'name' =>  'Ixtenco',
            'state_id' => '29',
            'number' =>  '016',
        ]);
        City::firstOrCreate([
            'name' =>  'Mazatecochco de José María Morelos',
            'state_id' => '29',
            'number' =>  '017',
        ]);
        City::firstOrCreate([
            'name' =>  'Contla de Juan Cuamatzi',
            'state_id' => '29',
            'number' =>  '018',
        ]);
        City::firstOrCreate([
            'name' =>  'Tepetitla de Lardizábal',
            'state_id' => '29',
            'number' =>  '019',
        ]);
        City::firstOrCreate([
            'name' =>  'Sanctórum de Lázaro Cárdenas',
            'state_id' => '29',
            'number' =>  '020',
        ]);
        City::firstOrCreate([
            'name' =>  'Nanacamilpa de Mariano Arista',
            'state_id' => '29',
            'number' =>  '021',
        ]);
        City::firstOrCreate([
            'name' =>  'Acuamanala de Miguel Hidalgo',
            'state_id' => '29',
            'number' =>  '022',
        ]);
        City::firstOrCreate([
            'name' =>  'Natívitas',
            'state_id' => '29',
            'number' =>  '023',
        ]);
        City::firstOrCreate([
            'name' =>  'Panotla',
            'state_id' => '29',
            'number' =>  '024',
        ]);
        City::firstOrCreate([
            'name' =>  'San Pablo del Monte',
            'state_id' => '29',
            'number' =>  '025',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa Cruz Tlaxcala',
            'state_id' => '29',
            'number' =>  '026',
        ]);
        City::firstOrCreate([
            'name' =>  'Tenancingo',
            'state_id' => '29',
            'number' =>  '027',
        ]);
        City::firstOrCreate([
            'name' =>  'Teolocholco',
            'state_id' => '29',
            'number' =>  '028',
        ]);
        City::firstOrCreate([
            'name' =>  'Tepeyanco',
            'state_id' => '29',
            'number' =>  '029',
        ]);
        City::firstOrCreate([
            'name' =>  'Terrenate',
            'state_id' => '29',
            'number' =>  '030',
        ]);
        City::firstOrCreate([
            'name' =>  'Tetla de la Solidaridad',
            'state_id' => '29',
            'number' =>  '031',
        ]);
        City::firstOrCreate([
            'name' =>  'Tetlatlahuca',
            'state_id' => '29',
            'number' =>  '032',
        ]);
        City::firstOrCreate([
            'name' =>  'Tlaxcala',
            'state_id' => '29',
            'number' =>  '033',
        ]);
        City::firstOrCreate([
            'name' =>  'Tlaxco',
            'state_id' => '29',
            'number' =>  '034',
        ]);
        City::firstOrCreate([
            'name' =>  'Tocatlán',
            'state_id' => '29',
            'number' =>  '035',
        ]);
        City::firstOrCreate([
            'name' =>  'Totolac',
            'state_id' => '29',
            'number' =>  '036',
        ]);
        City::firstOrCreate([
            'name' =>  'Ziltlaltépec de Trinidad Sánchez Santos',
            'state_id' => '29',
            'number' =>  '037',
        ]);
        City::firstOrCreate([
            'name' =>  'Tzompantepec',
            'state_id' => '29',
            'number' =>  '038',
        ]);
        City::firstOrCreate([
            'name' =>  'Xaloztoc',
            'state_id' => '29',
            'number' =>  '039',
        ]);
        City::firstOrCreate([
            'name' =>  'Xaltocan',
            'state_id' => '29',
            'number' =>  '040',
        ]);
        City::firstOrCreate([
            'name' =>  'Papalotla de Xicohténcatl',
            'state_id' => '29',
            'number' =>  '041',
        ]);
        City::firstOrCreate([
            'name' =>  'Xicohtzinco',
            'state_id' => '29',
            'number' =>  '042',
        ]);
        City::firstOrCreate([
            'name' =>  'Yauhquemehcan',
            'state_id' => '29',
            'number' =>  '043',
        ]);
        City::firstOrCreate([
            'name' =>  'Zacatelco',
            'state_id' => '29',
            'number' =>  '044',
        ]);
        City::firstOrCreate([
            'name' =>  'Benito Juárez',
            'state_id' => '29',
            'number' =>  '045',
        ]);
        City::firstOrCreate([
            'name' =>  'Emiliano Zapata',
            'state_id' => '29',
            'number' =>  '046',
        ]);
        City::firstOrCreate([
            'name' =>  'Lázaro Cárdenas',
            'state_id' => '29',
            'number' =>  '047',
        ]);
        City::firstOrCreate([
            'name' =>  'La Magdalena Tlaltelulco',
            'state_id' => '29',
            'number' =>  '048',
        ]);
        City::firstOrCreate([
            'name' =>  'San Damián Texóloc',
            'state_id' => '29',
            'number' =>  '049',
        ]);
        City::firstOrCreate([
            'name' =>  'San Francisco Tetlanohcan',
            'state_id' => '29',
            'number' =>  '050',
        ]);
        City::firstOrCreate([
            'name' =>  'San Jerónimo Zacualpan',
            'state_id' => '29',
            'number' =>  '051',
        ]);
        City::firstOrCreate([
            'name' =>  'San José Teacalco',
            'state_id' => '29',
            'number' =>  '052',
        ]);
        City::firstOrCreate([
            'name' =>  'San Juan Huactzinco',
            'state_id' => '29',
            'number' =>  '053',
        ]);
        City::firstOrCreate([
            'name' =>  'San Lorenzo Axocomanitla',
            'state_id' => '29',
            'number' =>  '054',
        ]);
        City::firstOrCreate([
            'name' =>  'San Lucas Tecopilco',
            'state_id' => '29',
            'number' =>  '055',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa Ana Nopalucan',
            'state_id' => '29',
            'number' =>  '056',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa Apolonia Teacalco',
            'state_id' => '29',
            'number' =>  '057',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa Catarina Ayometla',
            'state_id' => '29',
            'number' =>  '058',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa Cruz Quilehtla',
            'state_id' => '29',
            'number' =>  '059',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa Isabel Xiloxoxtla',
            'state_id' => '29',
            'number' =>  '060',
        ]);
        City::firstOrCreate([
            'name' =>  'Acajete',
            'state_id' => '30',
            'number' =>  '001',
        ]);
        City::firstOrCreate([
            'name' =>  'Acatlán',
            'state_id' => '30',
            'number' =>  '002',
        ]);
        City::firstOrCreate([
            'name' =>  'Acayucan',
            'state_id' => '30',
            'number' =>  '003',
        ]);
        City::firstOrCreate([
            'name' =>  'Actopan',
            'state_id' => '30',
            'number' =>  '004',
        ]);
        City::firstOrCreate([
            'name' =>  'Acula',
            'state_id' => '30',
            'number' =>  '005',
        ]);
        City::firstOrCreate([
            'name' =>  'Acultzingo',
            'state_id' => '30',
            'number' =>  '006',
        ]);
        City::firstOrCreate([
            'name' =>  'Camarón de Tejeda',
            'state_id' => '30',
            'number' =>  '007',
        ]);
        City::firstOrCreate([
            'name' =>  'Alpatláhuac',
            'state_id' => '30',
            'number' =>  '008',
        ]);
        City::firstOrCreate([
            'name' =>  'Alto Lucero de Gutiérrez Barrios',
            'state_id' => '30',
            'number' =>  '009',
        ]);
        City::firstOrCreate([
            'name' =>  'Altotonga',
            'state_id' => '30',
            'number' =>  '010',
        ]);
        City::firstOrCreate([
            'name' =>  'Alvarado',
            'state_id' => '30',
            'number' =>  '011',
        ]);
        City::firstOrCreate([
            'name' =>  'Amatitlán',
            'state_id' => '30',
            'number' =>  '012',
        ]);
        City::firstOrCreate([
            'name' =>  'Naranjos Amatlán',
            'state_id' => '30',
            'number' =>  '013',
        ]);
        City::firstOrCreate([
            'name' =>  'Amatlán de los Reyes',
            'state_id' => '30',
            'number' =>  '014',
        ]);
        City::firstOrCreate([
            'name' =>  'Angel R. Cabada',
            'state_id' => '30',
            'number' =>  '015',
        ]);
        City::firstOrCreate([
            'name' =>  'La Antigua',
            'state_id' => '30',
            'number' =>  '016',
        ]);
        City::firstOrCreate([
            'name' =>  'Apazapan',
            'state_id' => '30',
            'number' =>  '017',
        ]);
        City::firstOrCreate([
            'name' =>  'Aquila',
            'state_id' => '30',
            'number' =>  '018',
        ]);
        City::firstOrCreate([
            'name' =>  'Astacinga',
            'state_id' => '30',
            'number' =>  '019',
        ]);
        City::firstOrCreate([
            'name' =>  'Atlahuilco',
            'state_id' => '30',
            'number' =>  '020',
        ]);
        City::firstOrCreate([
            'name' =>  'Atoyac',
            'state_id' => '30',
            'number' =>  '021',
        ]);
        City::firstOrCreate([
            'name' =>  'Atzacan',
            'state_id' => '30',
            'number' =>  '022',
        ]);
        City::firstOrCreate([
            'name' =>  'Atzalan',
            'state_id' => '30',
            'number' =>  '023',
        ]);
        City::firstOrCreate([
            'name' =>  'Tlaltetela',
            'state_id' => '30',
            'number' =>  '024',
        ]);
        City::firstOrCreate([
            'name' =>  'Ayahualulco',
            'state_id' => '30',
            'number' =>  '025',
        ]);
        City::firstOrCreate([
            'name' =>  'Banderilla',
            'state_id' => '30',
            'number' =>  '026',
        ]);
        City::firstOrCreate([
            'name' =>  'Benito Juárez',
            'state_id' => '30',
            'number' =>  '027',
        ]);
        City::firstOrCreate([
            'name' =>  'Boca del Río',
            'state_id' => '30',
            'number' =>  '028',
        ]);
        City::firstOrCreate([
            'name' =>  'Calcahualco',
            'state_id' => '30',
            'number' =>  '029',
        ]);
        City::firstOrCreate([
            'name' =>  'Camerino Z. Mendoza',
            'state_id' => '30',
            'number' =>  '030',
        ]);
        City::firstOrCreate([
            'name' =>  'Carrillo Puerto',
            'state_id' => '30',
            'number' =>  '031',
        ]);
        City::firstOrCreate([
            'name' =>  'Catemaco',
            'state_id' => '30',
            'number' =>  '032',
        ]);
        City::firstOrCreate([
            'name' =>  'Cazones de Herrera',
            'state_id' => '30',
            'number' =>  '033',
        ]);
        City::firstOrCreate([
            'name' =>  'Cerro Azul',
            'state_id' => '30',
            'number' =>  '034',
        ]);
        City::firstOrCreate([
            'name' =>  'Citlaltépetl',
            'state_id' => '30',
            'number' =>  '035',
        ]);
        City::firstOrCreate([
            'name' =>  'Coacoatzintla',
            'state_id' => '30',
            'number' =>  '036',
        ]);
        City::firstOrCreate([
            'name' =>  'Coahuitlán',
            'state_id' => '30',
            'number' =>  '037',
        ]);
        City::firstOrCreate([
            'name' =>  'Coatepec',
            'state_id' => '30',
            'number' =>  '038',
        ]);
        City::firstOrCreate([
            'name' =>  'Coatzacoalcos',
            'state_id' => '30',
            'number' =>  '039',
        ]);
        City::firstOrCreate([
            'name' =>  'Coatzintla',
            'state_id' => '30',
            'number' =>  '040',
        ]);
        City::firstOrCreate([
            'name' =>  'Coetzala',
            'state_id' => '30',
            'number' =>  '041',
        ]);
        City::firstOrCreate([
            'name' =>  'Colipa',
            'state_id' => '30',
            'number' =>  '042',
        ]);
        City::firstOrCreate([
            'name' =>  'Comapa',
            'state_id' => '30',
            'number' =>  '043',
        ]);
        City::firstOrCreate([
            'name' =>  'Córdoba',
            'state_id' => '30',
            'number' =>  '044',
        ]);
        City::firstOrCreate([
            'name' =>  'Cosamaloapan de Carpio',
            'state_id' => '30',
            'number' =>  '045',
        ]);
        City::firstOrCreate([
            'name' =>  'Cosautlán de Carvajal',
            'state_id' => '30',
            'number' =>  '046',
        ]);
        City::firstOrCreate([
            'name' =>  'Coscomatepec',
            'state_id' => '30',
            'number' =>  '047',
        ]);
        City::firstOrCreate([
            'name' =>  'Cosoleacaque',
            'state_id' => '30',
            'number' =>  '048',
        ]);
        City::firstOrCreate([
            'name' =>  'Cotaxtla',
            'state_id' => '30',
            'number' =>  '049',
        ]);
        City::firstOrCreate([
            'name' =>  'Coxquihui',
            'state_id' => '30',
            'number' =>  '050',
        ]);
        City::firstOrCreate([
            'name' =>  'Coyutla',
            'state_id' => '30',
            'number' =>  '051',
        ]);
        City::firstOrCreate([
            'name' =>  'Cuichapa',
            'state_id' => '30',
            'number' =>  '052',
        ]);
        City::firstOrCreate([
            'name' =>  'Cuitláhuac',
            'state_id' => '30',
            'number' =>  '053',
        ]);
        City::firstOrCreate([
            'name' =>  'Chacaltianguis',
            'state_id' => '30',
            'number' =>  '054',
        ]);
        City::firstOrCreate([
            'name' =>  'Chalma',
            'state_id' => '30',
            'number' =>  '055',
        ]);
        City::firstOrCreate([
            'name' =>  'Chiconamel',
            'state_id' => '30',
            'number' =>  '056',
        ]);
        City::firstOrCreate([
            'name' =>  'Chiconquiaco',
            'state_id' => '30',
            'number' =>  '057',
        ]);
        City::firstOrCreate([
            'name' =>  'Chicontepec',
            'state_id' => '30',
            'number' =>  '058',
        ]);
        City::firstOrCreate([
            'name' =>  'Chinameca',
            'state_id' => '30',
            'number' =>  '059',
        ]);
        City::firstOrCreate([
            'name' =>  'Chinampa de Gorostiza',
            'state_id' => '30',
            'number' =>  '060',
        ]);
        City::firstOrCreate([
            'name' =>  'Las Choapas',
            'state_id' => '30',
            'number' =>  '061',
        ]);
        City::firstOrCreate([
            'name' =>  'Chocamán',
            'state_id' => '30',
            'number' =>  '062',
        ]);
        City::firstOrCreate([
            'name' =>  'Chontla',
            'state_id' => '30',
            'number' =>  '063',
        ]);
        City::firstOrCreate([
            'name' =>  'Chumatlán',
            'state_id' => '30',
            'number' =>  '064',
        ]);
        City::firstOrCreate([
            'name' =>  'Emiliano Zapata',
            'state_id' => '30',
            'number' =>  '065',
        ]);
        City::firstOrCreate([
            'name' =>  'Espinal',
            'state_id' => '30',
            'number' =>  '066',
        ]);
        City::firstOrCreate([
            'name' =>  'Filomeno Mata',
            'state_id' => '30',
            'number' =>  '067',
        ]);
        City::firstOrCreate([
            'name' =>  'Fortín',
            'state_id' => '30',
            'number' =>  '068',
        ]);
        City::firstOrCreate([
            'name' =>  'Gutiérrez Zamora',
            'state_id' => '30',
            'number' =>  '069',
        ]);
        City::firstOrCreate([
            'name' =>  'Hidalgotitlán',
            'state_id' => '30',
            'number' =>  '070',
        ]);
        City::firstOrCreate([
            'name' =>  'Huatusco',
            'state_id' => '30',
            'number' =>  '071',
        ]);
        City::firstOrCreate([
            'name' =>  'Huayacocotla',
            'state_id' => '30',
            'number' =>  '072',
        ]);
        City::firstOrCreate([
            'name' =>  'Hueyapan de Ocampo',
            'state_id' => '30',
            'number' =>  '073',
        ]);
        City::firstOrCreate([
            'name' =>  'Huiloapan de Cuauhtémoc',
            'state_id' => '30',
            'number' =>  '074',
        ]);
        City::firstOrCreate([
            'name' =>  'Ignacio de la Llave',
            'state_id' => '30',
            'number' =>  '075',
        ]);
        City::firstOrCreate([
            'name' =>  'Ilamatlán',
            'state_id' => '30',
            'number' =>  '076',
        ]);
        City::firstOrCreate([
            'name' =>  'Isla',
            'state_id' => '30',
            'number' =>  '077',
        ]);
        City::firstOrCreate([
            'name' =>  'Ixcatepec',
            'state_id' => '30',
            'number' =>  '078',
        ]);
        City::firstOrCreate([
            'name' =>  'Ixhuacán de los Reyes',
            'state_id' => '30',
            'number' =>  '079',
        ]);
        City::firstOrCreate([
            'name' =>  'Ixhuatlán del Café',
            'state_id' => '30',
            'number' =>  '080',
        ]);
        City::firstOrCreate([
            'name' =>  'Ixhuatlancillo',
            'state_id' => '30',
            'number' =>  '081',
        ]);
        City::firstOrCreate([
            'name' =>  'Ixhuatlán del Sureste',
            'state_id' => '30',
            'number' =>  '082',
        ]);
        City::firstOrCreate([
            'name' =>  'Ixhuatlán de Madero',
            'state_id' => '30',
            'number' =>  '083',
        ]);
        City::firstOrCreate([
            'name' =>  'Ixmatlahuacan',
            'state_id' => '30',
            'number' =>  '084',
        ]);
        City::firstOrCreate([
            'name' =>  'Ixtaczoquitlán',
            'state_id' => '30',
            'number' =>  '085',
        ]);
        City::firstOrCreate([
            'name' =>  'Jalacingo',
            'state_id' => '30',
            'number' =>  '086',
        ]);
        City::firstOrCreate([
            'name' =>  'Xalapa',
            'state_id' => '30',
            'number' =>  '087',
        ]);
        City::firstOrCreate([
            'name' =>  'Jalcomulco',
            'state_id' => '30',
            'number' =>  '088',
        ]);
        City::firstOrCreate([
            'name' =>  'Jáltipan',
            'state_id' => '30',
            'number' =>  '089',
        ]);
        City::firstOrCreate([
            'name' =>  'Jamapa',
            'state_id' => '30',
            'number' =>  '090',
        ]);
        City::firstOrCreate([
            'name' =>  'Jesús Carranza',
            'state_id' => '30',
            'number' =>  '091',
        ]);
        City::firstOrCreate([
            'name' =>  'Xico',
            'state_id' => '30',
            'number' =>  '092',
        ]);
        City::firstOrCreate([
            'name' =>  'Jilotepec',
            'state_id' => '30',
            'number' =>  '093',
        ]);
        City::firstOrCreate([
            'name' =>  'Juan Rodríguez Clara',
            'state_id' => '30',
            'number' =>  '094',
        ]);
        City::firstOrCreate([
            'name' =>  'Juchique de Ferrer',
            'state_id' => '30',
            'number' =>  '095',
        ]);
        City::firstOrCreate([
            'name' =>  'Landero y Coss',
            'state_id' => '30',
            'number' =>  '096',
        ]);
        City::firstOrCreate([
            'name' =>  'Lerdo de Tejada',
            'state_id' => '30',
            'number' =>  '097',
        ]);
        City::firstOrCreate([
            'name' =>  'Magdalena',
            'state_id' => '30',
            'number' =>  '098',
        ]);
        City::firstOrCreate([
            'name' =>  'Maltrata',
            'state_id' => '30',
            'number' =>  '099',
        ]);
        City::firstOrCreate([
            'name' =>  'Manlio Fabio Altamirano',
            'state_id' => '30',
            'number' =>  '100',
        ]);
        City::firstOrCreate([
            'name' =>  'Mariano Escobedo',
            'state_id' => '30',
            'number' =>  '101',
        ]);
        City::firstOrCreate([
            'name' =>  'Martínez de la Torre',
            'state_id' => '30',
            'number' =>  '102',
        ]);
        City::firstOrCreate([
            'name' =>  'Mecatlán',
            'state_id' => '30',
            'number' =>  '103',
        ]);
        City::firstOrCreate([
            'name' =>  'Mecayapan',
            'state_id' => '30',
            'number' =>  '104',
        ]);
        City::firstOrCreate([
            'name' =>  'Medellín de Bravo',
            'state_id' => '30',
            'number' =>  '105',
        ]);
        City::firstOrCreate([
            'name' =>  'Miahuatlán',
            'state_id' => '30',
            'number' =>  '106',
        ]);
        City::firstOrCreate([
            'name' =>  'Las Minas',
            'state_id' => '30',
            'number' =>  '107',
        ]);
        City::firstOrCreate([
            'name' =>  'Minatitlán',
            'state_id' => '30',
            'number' =>  '108',
        ]);
        City::firstOrCreate([
            'name' =>  'Misantla',
            'state_id' => '30',
            'number' =>  '109',
        ]);
        City::firstOrCreate([
            'name' =>  'Mixtla de Altamirano',
            'state_id' => '30',
            'number' =>  '110',
        ]);
        City::firstOrCreate([
            'name' =>  'Moloacán',
            'state_id' => '30',
            'number' =>  '111',
        ]);
        City::firstOrCreate([
            'name' =>  'Naolinco',
            'state_id' => '30',
            'number' =>  '112',
        ]);
        City::firstOrCreate([
            'name' =>  'Naranjal',
            'state_id' => '30',
            'number' =>  '113',
        ]);
        City::firstOrCreate([
            'name' =>  'Nautla',
            'state_id' => '30',
            'number' =>  '114',
        ]);
        City::firstOrCreate([
            'name' =>  'Nogales',
            'state_id' => '30',
            'number' =>  '115',
        ]);
        City::firstOrCreate([
            'name' =>  'Oluta',
            'state_id' => '30',
            'number' =>  '116',
        ]);
        City::firstOrCreate([
            'name' =>  'Omealca',
            'state_id' => '30',
            'number' =>  '117',
        ]);
        City::firstOrCreate([
            'name' =>  'Orizaba',
            'state_id' => '30',
            'number' =>  '118',
        ]);
        City::firstOrCreate([
            'name' =>  'Otatitlán',
            'state_id' => '30',
            'number' =>  '119',
        ]);
        City::firstOrCreate([
            'name' =>  'Oteapan',
            'state_id' => '30',
            'number' =>  '120',
        ]);
        City::firstOrCreate([
            'name' =>  'Ozuluama de Mascareñas',
            'state_id' => '30',
            'number' =>  '121',
        ]);
        City::firstOrCreate([
            'name' =>  'Pajapan',
            'state_id' => '30',
            'number' =>  '122',
        ]);
        City::firstOrCreate([
            'name' =>  'Pánuco',
            'state_id' => '30',
            'number' =>  '123',
        ]);
        City::firstOrCreate([
            'name' =>  'Papantla',
            'state_id' => '30',
            'number' =>  '124',
        ]);
        City::firstOrCreate([
            'name' =>  'Paso del Macho',
            'state_id' => '30',
            'number' =>  '125',
        ]);
        City::firstOrCreate([
            'name' =>  'Paso de Ovejas',
            'state_id' => '30',
            'number' =>  '126',
        ]);
        City::firstOrCreate([
            'name' =>  'La Perla',
            'state_id' => '30',
            'number' =>  '127',
        ]);
        City::firstOrCreate([
            'name' =>  'Perote',
            'state_id' => '30',
            'number' =>  '128',
        ]);
        City::firstOrCreate([
            'name' =>  'Platón Sánchez',
            'state_id' => '30',
            'number' =>  '129',
        ]);
        City::firstOrCreate([
            'name' =>  'Playa Vicente',
            'state_id' => '30',
            'number' =>  '130',
        ]);
        City::firstOrCreate([
            'name' =>  'Poza Rica de Hidalgo',
            'state_id' => '30',
            'number' =>  '131',
        ]);
        City::firstOrCreate([
            'name' =>  'Las Vigas de Ramírez',
            'state_id' => '30',
            'number' =>  '132',
        ]);
        City::firstOrCreate([
            'name' =>  'Pueblo Viejo',
            'state_id' => '30',
            'number' =>  '133',
        ]);
        City::firstOrCreate([
            'name' =>  'Puente Nacional',
            'state_id' => '30',
            'number' =>  '134',
        ]);
        City::firstOrCreate([
            'name' =>  'Rafael Delgado',
            'state_id' => '30',
            'number' =>  '135',
        ]);
        City::firstOrCreate([
            'name' =>  'Rafael Lucio',
            'state_id' => '30',
            'number' =>  '136',
        ]);
        City::firstOrCreate([
            'name' =>  'Los Reyes',
            'state_id' => '30',
            'number' =>  '137',
        ]);
        City::firstOrCreate([
            'name' =>  'Río Blanco',
            'state_id' => '30',
            'number' =>  '138',
        ]);
        City::firstOrCreate([
            'name' =>  'Saltabarranca',
            'state_id' => '30',
            'number' =>  '139',
        ]);
        City::firstOrCreate([
            'name' =>  'San Andrés Tenejapan',
            'state_id' => '30',
            'number' =>  '140',
        ]);
        City::firstOrCreate([
            'name' =>  'San Andrés Tuxtla',
            'state_id' => '30',
            'number' =>  '141',
        ]);
        City::firstOrCreate([
            'name' =>  'San Juan Evangelista',
            'state_id' => '30',
            'number' =>  '142',
        ]);
        City::firstOrCreate([
            'name' =>  'Santiago Tuxtla',
            'state_id' => '30',
            'number' =>  '143',
        ]);
        City::firstOrCreate([
            'name' =>  'Sayula de Alemán',
            'state_id' => '30',
            'number' =>  '144',
        ]);
        City::firstOrCreate([
            'name' =>  'Soconusco',
            'state_id' => '30',
            'number' =>  '145',
        ]);
        City::firstOrCreate([
            'name' =>  'Sochiapa',
            'state_id' => '30',
            'number' =>  '146',
        ]);
        City::firstOrCreate([
            'name' =>  'Soledad Atzompa',
            'state_id' => '30',
            'number' =>  '147',
        ]);
        City::firstOrCreate([
            'name' =>  'Soledad de Doblado',
            'state_id' => '30',
            'number' =>  '148',
        ]);
        City::firstOrCreate([
            'name' =>  'Soteapan',
            'state_id' => '30',
            'number' =>  '149',
        ]);
        City::firstOrCreate([
            'name' =>  'Tamalín',
            'state_id' => '30',
            'number' =>  '150',
        ]);
        City::firstOrCreate([
            'name' =>  'Tamiahua',
            'state_id' => '30',
            'number' =>  '151',
        ]);
        City::firstOrCreate([
            'name' =>  'Tampico Alto',
            'state_id' => '30',
            'number' =>  '152',
        ]);
        City::firstOrCreate([
            'name' =>  'Tancoco',
            'state_id' => '30',
            'number' =>  '153',
        ]);
        City::firstOrCreate([
            'name' =>  'Tantima',
            'state_id' => '30',
            'number' =>  '154',
        ]);
        City::firstOrCreate([
            'name' =>  'Tantoyuca',
            'state_id' => '30',
            'number' =>  '155',
        ]);
        City::firstOrCreate([
            'name' =>  'Tatatila',
            'state_id' => '30',
            'number' =>  '156',
        ]);
        City::firstOrCreate([
            'name' =>  'Castillo de Teayo',
            'state_id' => '30',
            'number' =>  '157',
        ]);
        City::firstOrCreate([
            'name' =>  'Tecolutla',
            'state_id' => '30',
            'number' =>  '158',
        ]);
        City::firstOrCreate([
            'name' =>  'Tehuipango',
            'state_id' => '30',
            'number' =>  '159',
        ]);
        City::firstOrCreate([
            'name' =>  'Álamo Temapache',
            'state_id' => '30',
            'number' =>  '160',
        ]);
        City::firstOrCreate([
            'name' =>  'Tempoal',
            'state_id' => '30',
            'number' =>  '161',
        ]);
        City::firstOrCreate([
            'name' =>  'Tenampa',
            'state_id' => '30',
            'number' =>  '162',
        ]);
        City::firstOrCreate([
            'name' =>  'Tenochtitlán',
            'state_id' => '30',
            'number' =>  '163',
        ]);
        City::firstOrCreate([
            'name' =>  'Teocelo',
            'state_id' => '30',
            'number' =>  '164',
        ]);
        City::firstOrCreate([
            'name' =>  'Tepatlaxco',
            'state_id' => '30',
            'number' =>  '165',
        ]);
        City::firstOrCreate([
            'name' =>  'Tepetlán',
            'state_id' => '30',
            'number' =>  '166',
        ]);
        City::firstOrCreate([
            'name' =>  'Tepetzintla',
            'state_id' => '30',
            'number' =>  '167',
        ]);
        City::firstOrCreate([
            'name' =>  'Tequila',
            'state_id' => '30',
            'number' =>  '168',
        ]);
        City::firstOrCreate([
            'name' =>  'José Azueta',
            'state_id' => '30',
            'number' =>  '169',
        ]);
        City::firstOrCreate([
            'name' =>  'Texcatepec',
            'state_id' => '30',
            'number' =>  '170',
        ]);
        City::firstOrCreate([
            'name' =>  'Texhuacán',
            'state_id' => '30',
            'number' =>  '171',
        ]);
        City::firstOrCreate([
            'name' =>  'Texistepec',
            'state_id' => '30',
            'number' =>  '172',
        ]);
        City::firstOrCreate([
            'name' =>  'Tezonapa',
            'state_id' => '30',
            'number' =>  '173',
        ]);
        City::firstOrCreate([
            'name' =>  'Tierra Blanca',
            'state_id' => '30',
            'number' =>  '174',
        ]);
        City::firstOrCreate([
            'name' =>  'Tihuatlán',
            'state_id' => '30',
            'number' =>  '175',
        ]);
        City::firstOrCreate([
            'name' =>  'Tlacojalpan',
            'state_id' => '30',
            'number' =>  '176',
        ]);
        City::firstOrCreate([
            'name' =>  'Tlacolulan',
            'state_id' => '30',
            'number' =>  '177',
        ]);
        City::firstOrCreate([
            'name' =>  'Tlacotalpan',
            'state_id' => '30',
            'number' =>  '178',
        ]);
        City::firstOrCreate([
            'name' =>  'Tlacotepec de Mejía',
            'state_id' => '30',
            'number' =>  '179',
        ]);
        City::firstOrCreate([
            'name' =>  'Tlachichilco',
            'state_id' => '30',
            'number' =>  '180',
        ]);
        City::firstOrCreate([
            'name' =>  'Tlalixcoyan',
            'state_id' => '30',
            'number' =>  '181',
        ]);
        City::firstOrCreate([
            'name' =>  'Tlalnelhuayocan',
            'state_id' => '30',
            'number' =>  '182',
        ]);
        City::firstOrCreate([
            'name' =>  'Tlapacoyan',
            'state_id' => '30',
            'number' =>  '183',
        ]);
        City::firstOrCreate([
            'name' =>  'Tlaquilpa',
            'state_id' => '30',
            'number' =>  '184',
        ]);
        City::firstOrCreate([
            'name' =>  'Tlilapan',
            'state_id' => '30',
            'number' =>  '185',
        ]);
        City::firstOrCreate([
            'name' =>  'Tomatlán',
            'state_id' => '30',
            'number' =>  '186',
        ]);
        City::firstOrCreate([
            'name' =>  'Tonayán',
            'state_id' => '30',
            'number' =>  '187',
        ]);
        City::firstOrCreate([
            'name' =>  'Totutla',
            'state_id' => '30',
            'number' =>  '188',
        ]);
        City::firstOrCreate([
            'name' =>  'Tuxpan',
            'state_id' => '30',
            'number' =>  '189',
        ]);
        City::firstOrCreate([
            'name' =>  'Tuxtilla',
            'state_id' => '30',
            'number' =>  '190',
        ]);
        City::firstOrCreate([
            'name' =>  'Ursulo Galván',
            'state_id' => '30',
            'number' =>  '191',
        ]);
        City::firstOrCreate([
            'name' =>  'Vega de Alatorre',
            'state_id' => '30',
            'number' =>  '192',
        ]);
        City::firstOrCreate([
            'name' =>  'Veracruz',
            'state_id' => '30',
            'number' =>  '193',
        ]);
        City::firstOrCreate([
            'name' =>  'Villa Aldama',
            'state_id' => '30',
            'number' =>  '194',
        ]);
        City::firstOrCreate([
            'name' =>  'Xoxocotla',
            'state_id' => '30',
            'number' =>  '195',
        ]);
        City::firstOrCreate([
            'name' =>  'Yanga',
            'state_id' => '30',
            'number' =>  '196',
        ]);
        City::firstOrCreate([
            'name' =>  'Yecuatla',
            'state_id' => '30',
            'number' =>  '197',
        ]);
        City::firstOrCreate([
            'name' =>  'Zacualpan',
            'state_id' => '30',
            'number' =>  '198',
        ]);
        City::firstOrCreate([
            'name' =>  'Zaragoza',
            'state_id' => '30',
            'number' =>  '199',
        ]);
        City::firstOrCreate([
            'name' =>  'Zentla',
            'state_id' => '30',
            'number' =>  '200',
        ]);
        City::firstOrCreate([
            'name' =>  'Zongolica',
            'state_id' => '30',
            'number' =>  '201',
        ]);
        City::firstOrCreate([
            'name' =>  'Zontecomatlán de López y Fuentes',
            'state_id' => '30',
            'number' =>  '202',
        ]);
        City::firstOrCreate([
            'name' =>  'Zozocolco de Hidalgo',
            'state_id' => '30',
            'number' =>  '203',
        ]);
        City::firstOrCreate([
            'name' =>  'Agua Dulce',
            'state_id' => '30',
            'number' =>  '204',
        ]);
        City::firstOrCreate([
            'name' =>  'El Higo',
            'state_id' => '30',
            'number' =>  '205',
        ]);
        City::firstOrCreate([
            'name' =>  'Nanchital de Lázaro Cárdenas del Río',
            'state_id' => '30',
            'number' =>  '206',
        ]);
        City::firstOrCreate([
            'name' =>  'Tres Valles',
            'state_id' => '30',
            'number' =>  '207',
        ]);
        City::firstOrCreate([
            'name' =>  'Carlos A. Carrillo',
            'state_id' => '30',
            'number' =>  '208',
        ]);
        City::firstOrCreate([
            'name' =>  'Tatahuicapan de Juárez',
            'state_id' => '30',
            'number' =>  '209',
        ]);
        City::firstOrCreate([
            'name' =>  'Uxpanapa',
            'state_id' => '30',
            'number' =>  '210',
        ]);
        City::firstOrCreate([
            'name' =>  'San Rafael',
            'state_id' => '30',
            'number' =>  '211',
        ]);
        City::firstOrCreate([
            'name' =>  'Santiago Sochiapan',
            'state_id' => '30',
            'number' =>  '212',
        ]);
        City::firstOrCreate([
            'name' =>  'Abalá',
            'state_id' => '31',
            'number' =>  '001',
        ]);
        City::firstOrCreate([
            'name' =>  'Acanceh',
            'state_id' => '31',
            'number' =>  '002',
        ]);
        City::firstOrCreate([
            'name' =>  'Akil',
            'state_id' => '31',
            'number' =>  '003',
        ]);
        City::firstOrCreate([
            'name' =>  'Baca',
            'state_id' => '31',
            'number' =>  '004',
        ]);
        City::firstOrCreate([
            'name' =>  'Bokobá',
            'state_id' => '31',
            'number' =>  '005',
        ]);
        City::firstOrCreate([
            'name' =>  'Buctzotz',
            'state_id' => '31',
            'number' =>  '006',
        ]);
        City::firstOrCreate([
            'name' =>  'Cacalchén',
            'state_id' => '31',
            'number' =>  '007',
        ]);
        City::firstOrCreate([
            'name' =>  'Calotmul',
            'state_id' => '31',
            'number' =>  '008',
        ]);
        City::firstOrCreate([
            'name' =>  'Cansahcab',
            'state_id' => '31',
            'number' =>  '009',
        ]);
        City::firstOrCreate([
            'name' =>  'Cantamayec',
            'state_id' => '31',
            'number' =>  '010',
        ]);
        City::firstOrCreate([
            'name' =>  'Celestún',
            'state_id' => '31',
            'number' =>  '011',
        ]);
        City::firstOrCreate([
            'name' =>  'Cenotillo',
            'state_id' => '31',
            'number' =>  '012',
        ]);
        City::firstOrCreate([
            'name' =>  'Conkal',
            'state_id' => '31',
            'number' =>  '013',
        ]);
        City::firstOrCreate([
            'name' =>  'Cuncunul',
            'state_id' => '31',
            'number' =>  '014',
        ]);
        City::firstOrCreate([
            'name' =>  'Cuzamá',
            'state_id' => '31',
            'number' =>  '015',
        ]);
        City::firstOrCreate([
            'name' =>  'Chacsinkín',
            'state_id' => '31',
            'number' =>  '016',
        ]);
        City::firstOrCreate([
            'name' =>  'Chankom',
            'state_id' => '31',
            'number' =>  '017',
        ]);
        City::firstOrCreate([
            'name' =>  'Chapab',
            'state_id' => '31',
            'number' =>  '018',
        ]);
        City::firstOrCreate([
            'name' =>  'Chemax',
            'state_id' => '31',
            'number' =>  '019',
        ]);
        City::firstOrCreate([
            'name' =>  'Chicxulub Pueblo',
            'state_id' => '31',
            'number' =>  '020',
        ]);
        City::firstOrCreate([
            'name' =>  'Chichimilá',
            'state_id' => '31',
            'number' =>  '021',
        ]);
        City::firstOrCreate([
            'name' =>  'Chikindzonot',
            'state_id' => '31',
            'number' =>  '022',
        ]);
        City::firstOrCreate([
            'name' =>  'Chocholá',
            'state_id' => '31',
            'number' =>  '023',
        ]);
        City::firstOrCreate([
            'name' =>  'Chumayel',
            'state_id' => '31',
            'number' =>  '024',
        ]);
        City::firstOrCreate([
            'name' =>  'Dzán',
            'state_id' => '31',
            'number' =>  '025',
        ]);
        City::firstOrCreate([
            'name' =>  'Dzemul',
            'state_id' => '31',
            'number' =>  '026',
        ]);
        City::firstOrCreate([
            'name' =>  'Dzidzantún',
            'state_id' => '31',
            'number' =>  '027',
        ]);
        City::firstOrCreate([
            'name' =>  'Dzilam de Bravo',
            'state_id' => '31',
            'number' =>  '028',
        ]);
        City::firstOrCreate([
            'name' =>  'Dzilam González',
            'state_id' => '31',
            'number' =>  '029',
        ]);
        City::firstOrCreate([
            'name' =>  'Dzitás',
            'state_id' => '31',
            'number' =>  '030',
        ]);
        City::firstOrCreate([
            'name' =>  'Dzoncauich',
            'state_id' => '31',
            'number' =>  '031',
        ]);
        City::firstOrCreate([
            'name' =>  'Espita',
            'state_id' => '31',
            'number' =>  '032',
        ]);
        City::firstOrCreate([
            'name' =>  'Halachó',
            'state_id' => '31',
            'number' =>  '033',
        ]);
        City::firstOrCreate([
            'name' =>  'Hocabá',
            'state_id' => '31',
            'number' =>  '034',
        ]);
        City::firstOrCreate([
            'name' =>  'Hoctún',
            'state_id' => '31',
            'number' =>  '035',
        ]);
        City::firstOrCreate([
            'name' =>  'Homún',
            'state_id' => '31',
            'number' =>  '036',
        ]);
        City::firstOrCreate([
            'name' =>  'Huhí',
            'state_id' => '31',
            'number' =>  '037',
        ]);
        City::firstOrCreate([
            'name' =>  'Hunucmá',
            'state_id' => '31',
            'number' =>  '038',
        ]);
        City::firstOrCreate([
            'name' =>  'Ixil',
            'state_id' => '31',
            'number' =>  '039',
        ]);
        City::firstOrCreate([
            'name' =>  'Izamal',
            'state_id' => '31',
            'number' =>  '040',
        ]);
        City::firstOrCreate([
            'name' =>  'Kanasín',
            'state_id' => '31',
            'number' =>  '041',
        ]);
        City::firstOrCreate([
            'name' =>  'Kantunil',
            'state_id' => '31',
            'number' =>  '042',
        ]);
        City::firstOrCreate([
            'name' =>  'Kaua',
            'state_id' => '31',
            'number' =>  '043',
        ]);
        City::firstOrCreate([
            'name' =>  'Kinchil',
            'state_id' => '31',
            'number' =>  '044',
        ]);
        City::firstOrCreate([
            'name' =>  'Kopomá',
            'state_id' => '31',
            'number' =>  '045',
        ]);
        City::firstOrCreate([
            'name' =>  'Mama',
            'state_id' => '31',
            'number' =>  '046',
        ]);
        City::firstOrCreate([
            'name' =>  'Maní',
            'state_id' => '31',
            'number' =>  '047',
        ]);
        City::firstOrCreate([
            'name' =>  'Maxcanú',
            'state_id' => '31',
            'number' =>  '048',
        ]);
        City::firstOrCreate([
            'name' =>  'Mayapán',
            'state_id' => '31',
            'number' =>  '049',
        ]);
        City::firstOrCreate([
            'name' =>  'Mérida',
            'state_id' => '31',
            'number' =>  '050',
        ]);
        City::firstOrCreate([
            'name' =>  'Mocochá',
            'state_id' => '31',
            'number' =>  '051',
        ]);
        City::firstOrCreate([
            'name' =>  'Motul',
            'state_id' => '31',
            'number' =>  '052',
        ]);
        City::firstOrCreate([
            'name' =>  'Muna',
            'state_id' => '31',
            'number' =>  '053',
        ]);
        City::firstOrCreate([
            'name' =>  'Muxupip',
            'state_id' => '31',
            'number' =>  '054',
        ]);
        City::firstOrCreate([
            'name' =>  'Opichén',
            'state_id' => '31',
            'number' =>  '055',
        ]);
        City::firstOrCreate([
            'name' =>  'Oxkutzcab',
            'state_id' => '31',
            'number' =>  '056',
        ]);
        City::firstOrCreate([
            'name' =>  'Panabá',
            'state_id' => '31',
            'number' =>  '057',
        ]);
        City::firstOrCreate([
            'name' =>  'Peto',
            'state_id' => '31',
            'number' =>  '058',
        ]);
        City::firstOrCreate([
            'name' =>  'Progreso',
            'state_id' => '31',
            'number' =>  '059',
        ]);
        City::firstOrCreate([
            'name' =>  'Quintana Roo',
            'state_id' => '31',
            'number' =>  '060',
        ]);
        City::firstOrCreate([
            'name' =>  'Río Lagartos',
            'state_id' => '31',
            'number' =>  '061',
        ]);
        City::firstOrCreate([
            'name' =>  'Sacalum',
            'state_id' => '31',
            'number' =>  '062',
        ]);
        City::firstOrCreate([
            'name' =>  'Samahil',
            'state_id' => '31',
            'number' =>  '063',
        ]);
        City::firstOrCreate([
            'name' =>  'Sanahcat',
            'state_id' => '31',
            'number' =>  '064',
        ]);
        City::firstOrCreate([
            'name' =>  'San Felipe',
            'state_id' => '31',
            'number' =>  '065',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa Elena',
            'state_id' => '31',
            'number' =>  '066',
        ]);
        City::firstOrCreate([
            'name' =>  'Seyé',
            'state_id' => '31',
            'number' =>  '067',
        ]);
        City::firstOrCreate([
            'name' =>  'Sinanché',
            'state_id' => '31',
            'number' =>  '068',
        ]);
        City::firstOrCreate([
            'name' =>  'Sotuta',
            'state_id' => '31',
            'number' =>  '069',
        ]);
        City::firstOrCreate([
            'name' =>  'Sucilá',
            'state_id' => '31',
            'number' =>  '070',
        ]);
        City::firstOrCreate([
            'name' =>  'Sudzal',
            'state_id' => '31',
            'number' =>  '071',
        ]);
        City::firstOrCreate([
            'name' =>  'Suma',
            'state_id' => '31',
            'number' =>  '072',
        ]);
        City::firstOrCreate([
            'name' =>  'Tahdziú',
            'state_id' => '31',
            'number' =>  '073',
        ]);
        City::firstOrCreate([
            'name' =>  'Tahmek',
            'state_id' => '31',
            'number' =>  '074',
        ]);
        City::firstOrCreate([
            'name' =>  'Teabo',
            'state_id' => '31',
            'number' =>  '075',
        ]);
        City::firstOrCreate([
            'name' =>  'Tecoh',
            'state_id' => '31',
            'number' =>  '076',
        ]);
        City::firstOrCreate([
            'name' =>  'Tekal de Venegas',
            'state_id' => '31',
            'number' =>  '077',
        ]);
        City::firstOrCreate([
            'name' =>  'Tekantó',
            'state_id' => '31',
            'number' =>  '078',
        ]);
        City::firstOrCreate([
            'name' =>  'Tekax',
            'state_id' => '31',
            'number' =>  '079',
        ]);
        City::firstOrCreate([
            'name' =>  'Tekit',
            'state_id' => '31',
            'number' =>  '080',
        ]);
        City::firstOrCreate([
            'name' =>  'Tekom',
            'state_id' => '31',
            'number' =>  '081',
        ]);
        City::firstOrCreate([
            'name' =>  'Telchac Pueblo',
            'state_id' => '31',
            'number' =>  '082',
        ]);
        City::firstOrCreate([
            'name' =>  'Telchac Puerto',
            'state_id' => '31',
            'number' =>  '083',
        ]);
        City::firstOrCreate([
            'name' =>  'Temax',
            'state_id' => '31',
            'number' =>  '084',
        ]);
        City::firstOrCreate([
            'name' =>  'Temozón',
            'state_id' => '31',
            'number' =>  '085',
        ]);
        City::firstOrCreate([
            'name' =>  'Tepakán',
            'state_id' => '31',
            'number' =>  '086',
        ]);
        City::firstOrCreate([
            'name' =>  'Tetiz',
            'state_id' => '31',
            'number' =>  '087',
        ]);
        City::firstOrCreate([
            'name' =>  'Teya',
            'state_id' => '31',
            'number' =>  '088',
        ]);
        City::firstOrCreate([
            'name' =>  'Ticul',
            'state_id' => '31',
            'number' =>  '089',
        ]);
        City::firstOrCreate([
            'name' =>  'Timucuy',
            'state_id' => '31',
            'number' =>  '090',
        ]);
        City::firstOrCreate([
            'name' =>  'Tinum',
            'state_id' => '31',
            'number' =>  '091',
        ]);
        City::firstOrCreate([
            'name' =>  'Tixcacalcupul',
            'state_id' => '31',
            'number' =>  '092',
        ]);
        City::firstOrCreate([
            'name' =>  'Tixkokob',
            'state_id' => '31',
            'number' =>  '093',
        ]);
        City::firstOrCreate([
            'name' =>  'Tixmehuac',
            'state_id' => '31',
            'number' =>  '094',
        ]);
        City::firstOrCreate([
            'name' =>  'Tixpéhual',
            'state_id' => '31',
            'number' =>  '095',
        ]);
        City::firstOrCreate([
            'name' =>  'Tizimín',
            'state_id' => '31',
            'number' =>  '096',
        ]);
        City::firstOrCreate([
            'name' =>  'Tunkás',
            'state_id' => '31',
            'number' =>  '097',
        ]);
        City::firstOrCreate([
            'name' =>  'Tzucacab',
            'state_id' => '31',
            'number' =>  '098',
        ]);
        City::firstOrCreate([
            'name' =>  'Uayma',
            'state_id' => '31',
            'number' =>  '099',
        ]);
        City::firstOrCreate([
            'name' =>  'Ucú',
            'state_id' => '31',
            'number' =>  '100',
        ]);
        City::firstOrCreate([
            'name' =>  'Umán',
            'state_id' => '31',
            'number' =>  '101',
        ]);
        City::firstOrCreate([
            'name' =>  'Valladolid',
            'state_id' => '31',
            'number' =>  '102',
        ]);
        City::firstOrCreate([
            'name' =>  'Xocchel',
            'state_id' => '31',
            'number' =>  '103',
        ]);
        City::firstOrCreate([
            'name' =>  'Yaxcabá',
            'state_id' => '31',
            'number' =>  '104',
        ]);
        City::firstOrCreate([
            'name' =>  'Yaxkukul',
            'state_id' => '31',
            'number' =>  '105',
        ]);
        City::firstOrCreate([
            'name' =>  'Yobaín',
            'state_id' => '31',
            'number' =>  '106',
        ]);
        City::firstOrCreate([
            'name' =>  'Apozol',
            'state_id' => '32',
            'number' =>  '001',
        ]);
        City::firstOrCreate([
            'name' =>  'Apulco',
            'state_id' => '32',
            'number' =>  '002',
        ]);
        City::firstOrCreate([
            'name' =>  'Atolinga',
            'state_id' => '32',
            'number' =>  '003',
        ]);
        City::firstOrCreate([
            'name' =>  'Benito Juárez',
            'state_id' => '32',
            'number' =>  '004',
        ]);
        City::firstOrCreate([
            'name' =>  'Calera',
            'state_id' => '32',
            'number' =>  '005',
        ]);
        City::firstOrCreate([
            'name' =>  'Cañitas de Felipe Pescador',
            'state_id' => '32',
            'number' =>  '006',
        ]);
        City::firstOrCreate([
            'name' =>  'Concepción del Oro',
            'state_id' => '32',
            'number' =>  '007',
        ]);
        City::firstOrCreate([
            'name' =>  'Cuauhtémoc',
            'state_id' => '32',
            'number' =>  '008',
        ]);
        City::firstOrCreate([
            'name' =>  'Chalchihuites',
            'state_id' => '32',
            'number' =>  '009',
        ]);
        City::firstOrCreate([
            'name' =>  'Fresnillo',
            'state_id' => '32',
            'number' =>  '010',
        ]);
        City::firstOrCreate([
            'name' =>  'Trinidad García de la Cadena',
            'state_id' => '32',
            'number' =>  '011',
        ]);
        City::firstOrCreate([
            'name' =>  'Genaro Codina',
            'state_id' => '32',
            'number' =>  '012',
        ]);
        City::firstOrCreate([
            'name' =>  'General Enrique Estrada',
            'state_id' => '32',
            'number' =>  '013',
        ]);
        City::firstOrCreate([
            'name' =>  'General Francisco R. Murguía',
            'state_id' => '32',
            'number' =>  '014',
        ]);
        City::firstOrCreate([
            'name' =>  'El Plateado de Joaquín Amaro',
            'state_id' => '32',
            'number' =>  '015',
        ]);
        City::firstOrCreate([
            'name' =>  'General Pánfilo Natera',
            'state_id' => '32',
            'number' =>  '016',
        ]);
        City::firstOrCreate([
            'name' =>  'Guadalupe',
            'state_id' => '32',
            'number' =>  '017',
        ]);
        City::firstOrCreate([
            'name' =>  'Huanusco',
            'state_id' => '32',
            'number' =>  '018',
        ]);
        City::firstOrCreate([
            'name' =>  'Jalpa',
            'state_id' => '32',
            'number' =>  '019',
        ]);
        City::firstOrCreate([
            'name' =>  'Jerez',
            'state_id' => '32',
            'number' =>  '020',
        ]);
        City::firstOrCreate([
            'name' =>  'Jiménez del Teul',
            'state_id' => '32',
            'number' =>  '021',
        ]);
        City::firstOrCreate([
            'name' =>  'Juan Aldama',
            'state_id' => '32',
            'number' =>  '022',
        ]);
        City::firstOrCreate([
            'name' =>  'Juchipila',
            'state_id' => '32',
            'number' =>  '023',
        ]);
        City::firstOrCreate([
            'name' =>  'Loreto',
            'state_id' => '32',
            'number' =>  '024',
        ]);
        City::firstOrCreate([
            'name' =>  'Luis Moya',
            'state_id' => '32',
            'number' =>  '025',
        ]);
        City::firstOrCreate([
            'name' =>  'Mazapil',
            'state_id' => '32',
            'number' =>  '026',
        ]);
        City::firstOrCreate([
            'name' =>  'Melchor Ocampo',
            'state_id' => '32',
            'number' =>  '027',
        ]);
        City::firstOrCreate([
            'name' =>  'Mezquital del Oro',
            'state_id' => '32',
            'number' =>  '028',
        ]);
        City::firstOrCreate([
            'name' =>  'Miguel Auza',
            'state_id' => '32',
            'number' =>  '029',
        ]);
        City::firstOrCreate([
            'name' =>  'Momax',
            'state_id' => '32',
            'number' =>  '030',
        ]);
        City::firstOrCreate([
            'name' =>  'Monte Escobedo',
            'state_id' => '32',
            'number' =>  '031',
        ]);
        City::firstOrCreate([
            'name' =>  'Morelos',
            'state_id' => '32',
            'number' =>  '032',
        ]);
        City::firstOrCreate([
            'name' =>  'Moyahua de Estrada',
            'state_id' => '32',
            'number' =>  '033',
        ]);
        City::firstOrCreate([
            'name' =>  'Nochistlán de Mejía',
            'state_id' => '32',
            'number' =>  '034',
        ]);
        City::firstOrCreate([
            'name' =>  'Noria de Ángeles',
            'state_id' => '32',
            'number' =>  '035',
        ]);
        City::firstOrCreate([
            'name' =>  'Ojocaliente',
            'state_id' => '32',
            'number' =>  '036',
        ]);
        City::firstOrCreate([
            'name' =>  'Pánuco',
            'state_id' => '32',
            'number' =>  '037',
        ]);
        City::firstOrCreate([
            'name' =>  'Pinos',
            'state_id' => '32',
            'number' =>  '038',
        ]);
        City::firstOrCreate([
            'name' =>  'Río Grande',
            'state_id' => '32',
            'number' =>  '039',
        ]);
        City::firstOrCreate([
            'name' =>  'Sain Alto',
            'state_id' => '32',
            'number' =>  '040',
        ]);
        City::firstOrCreate([
            'name' =>  'El Salvador',
            'state_id' => '32',
            'number' =>  '041',
        ]);
        City::firstOrCreate([
            'name' =>  'Sombrerete',
            'state_id' => '32',
            'number' =>  '042',
        ]);
        City::firstOrCreate([
            'name' =>  'Susticacán',
            'state_id' => '32',
            'number' =>  '043',
        ]);
        City::firstOrCreate([
            'name' =>  'Tabasco',
            'state_id' => '32',
            'number' =>  '044',
        ]);
        City::firstOrCreate([
            'name' =>  'Tepechitlán',
            'state_id' => '32',
            'number' =>  '045',
        ]);
        City::firstOrCreate([
            'name' =>  'Tepetongo',
            'state_id' => '32',
            'number' =>  '046',
        ]);
        City::firstOrCreate([
            'name' =>  'Teúl de González Ortega',
            'state_id' => '32',
            'number' =>  '047',
        ]);
        City::firstOrCreate([
            'name' =>  'Tlaltenango de Sánchez Román',
            'state_id' => '32',
            'number' =>  '048',
        ]);
        City::firstOrCreate([
            'name' =>  'Valparaíso',
            'state_id' => '32',
            'number' =>  '049',
        ]);
        City::firstOrCreate([
            'name' =>  'Vetagrande',
            'state_id' => '32',
            'number' =>  '050',
        ]);
        City::firstOrCreate([
            'name' =>  'Villa de Cos',
            'state_id' => '32',
            'number' =>  '051',
        ]);
        City::firstOrCreate([
            'name' =>  'Villa García',
            'state_id' => '32',
            'number' =>  '052',
        ]);
        City::firstOrCreate([
            'name' =>  'Villa González Ortega',
            'state_id' => '32',
            'number' =>  '053',
        ]);
        City::firstOrCreate([
            'name' =>  'Villa Hidalgo',
            'state_id' => '32',
            'number' =>  '054',
        ]);
        City::firstOrCreate([
            'name' =>  'Villanueva',
            'state_id' => '32',
            'number' =>  '055',
        ]);
        City::firstOrCreate([
            'name' =>  'Zacatecas',
            'state_id' => '32',
            'number' =>  '056',
        ]);
        City::firstOrCreate([
            'name' =>  'Trancoso',
            'state_id' => '32',
            'number' =>  '057',
        ]);
        City::firstOrCreate([
            'name' =>  'Santa María de la Paz',
            'state_id' => '32',
            'number' =>  '058',
        ]);
    }
}
