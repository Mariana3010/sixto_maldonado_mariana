<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class codigos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
            DB::table('codigos_postales')->insert([
                [
               'codigo' => '20000',
               'asentamiento' => 'Aguascalientes Centro',
               'tipo_asenta' => 'Colonia',
               'municipio' => 'Aguascalientes',
               'estado' => 'Aguascalientes',
               'ciudad' => 'Aguascalientes',
               'created_at'=>date('Y-m-d H:i:s'),
               'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '20000',
                'asentamiento' => 'Colinas del  Rio',
                'tipo_asenta' => 'Fraccionamiento',
                'municipio' => 'Aguascalientes',
                'estado' => 'Aguascalientes',
                'ciudad' => 'Aguascalientes',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
               'codigo' => '20010',
               'asentamiento' => 'Olivares Santana',
               'tipo_asenta' => 'Colonia',
               'municipio' => 'Aguascalientes',
               'estado' => 'Aguascalientes',
               'ciudad' => 'Aguascalientes',
               'created_at'=>date('Y-m-d H:i:s'),
               'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
               'codigo' => '20010',
               'asentamiento' => 'Las Brisas',
               'tipo_asenta' => 'Fraccionamiento',
               'municipio' => 'Aguascalientes',
               'estado' => 'Aguascalientes',
               'ciudad' => 'Aguascalientes',
               'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
               'codigo' => '20010',
               'asentamiento' => 'Ramon Romo Franco',
               'tipo_asenta' => 'Fraccionamiento',
               'municipio' => 'Aguascalientes',
               'estado' => 'Aguascalientes',
               'ciudad' => 'Aguascalientes',
               'created_at'=>date('Y-m-d H:i:s'),
               'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
               'codigo' => '20010',
               'asentamiento' => 'San Cayetano',
               'tipo_asenta' => 'Fraccionamiento',
               'municipio' => 'Aguascalientes',
               'estado' => 'Aguascalientes',
               'ciudad' => 'Aguascalientes',
               'created_at'=>date('Y-m-d H:i:s'),
               'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
               'codigo' => '20016',
               'asentamiento' => 'Colinas de San Ignacio',
               'tipo_asenta' => 'Fraccionamiento',
               'municipio' => 'Aguascalientes',
               'estado' => 'Aguascalientes',
               'ciudad' => 'Aguascalientes',
               'created_at'=>date('Y-m-d H:i:s'),
               'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
               'codigo' => '20016',
               'asentamiento' => 'La Fundición',
               'tipo_asenta' => 'Fraccionamiento',
               'municipio' => 'Aguascalientes',
               'estado' => 'Aguascalientes',
               'ciudad' => 'Aguascalientes',
               'created_at'=>date('Y-m-d H:i:s'),
               'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
               'codigo' => '20016',
               'asentamiento' => 'Fundición II',
               'tipo_asenta' => 'Fraccionamiento',
               'municipio' => 'Aguascalientes',
               'estado' => 'Aguascalientes',
               'ciudad' => 'Aguascalientes',
               'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
               'codigo' => '20016',
               'asentamiento' => 'Los Sauces',
               'tipo_asenta' => 'Fraccionamiento',
               'municipio' => 'Aguascalientes',
               'estado' => 'Aguascalientes',
               'ciudad' => 'Aguascalientes',
               'created_at'=>date('Y-m-d H:i:s'),
               'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
               'codigo' => '20018',
               'asentamiento' => 'Línea de Fuego',
               'tipo_asenta' => 'Colonia',
               'municipio' => 'Aguascalientes',
               'estado' => 'Aguascalientes',
               'ciudad' => 'Aguascalientes',
               'created_at'=>date('Y-m-d H:i:s'),
               'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
               'codigo' => '20020',
               'asentamiento' => 'Buenos Aires',
               'tipo_asenta' => 'Colonia',
               'municipio' => 'Aguascalientes',
               'estado' => 'Aguascalientes',
               'ciudad' => 'Aguascalientes',
               'created_at'=>date('Y-m-d H:i:s'),
               'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '20020',
                'asentamiento' => 'Circunvalación Norte',
                'tipo_asenta' => 'Fraccionamiento',
                'municipio' => 'Aguascalientes',
                'estado' => 'Aguascalientes',
                'ciudad' => 'Aguascalientes',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '20020',
                'asentamiento' => 'Las Arboledas',
                'tipo_asenta' => 'Fraccionamiento',
                'municipio' => 'Aguascalientes',
                'estado' => 'Aguascalientes',
                'ciudad' => 'Aguascalientes',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '20020',
                'asentamiento' => 'Villas de San Francisco',
                'tipo_asenta' => 'Fraccionamiento',
                'municipio' => 'Aguascalientes',
                'estado' => 'Aguascalientes',
                'ciudad' => 'Aguascalientes',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '20029',
                'asentamiento' => 'Villas de La Universidad',
                'tipo_asenta' => 'Fraccionamiento',
                'municipio' => 'Aguascalientes',
                'estado' => 'Aguascalientes',
                'ciudad' => 'Aguascalientes',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '20030',
                'asentamiento' => 'El Sol',
                'tipo_asenta' => 'Fraccionamiento',
                'municipio' => 'Aguascalientes',
                'estado' => 'Aguascalientes',
                'ciudad' => 'Aguascalientes',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '20030',
                'asentamiento' => 'Gremial',
                'tipo_asenta' => 'Colonia',
                'municipio' => 'Aguascalientes',
                'estado' => 'Aguascalientes',
                'ciudad' => 'Aguascalientes',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '20030',
                'asentamiento' => 'Industrial',
                'tipo_asenta' => 'Colonia',
                'municipio' => 'Aguascalientes',
                'estado' => 'Aguascalientes',
                'ciudad' => 'Aguascalientes',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '20040',
                'asentamiento' => 'Altavista',
                'tipo_asenta' => 'Colonia',
                'municipio' => 'Aguascalientes',
                'estado' => 'Aguascalientes',
                'ciudad' => 'Aguascalientes',
                'created_at'=>date('Y-m-d H:i:s'),
               'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '20040',
                'asentamiento' => 'Curtidores',
                'tipo_asenta' => 'Colonia',
                'municipio' => 'Aguascalientes',
                'estado' => 'Aguascalientes',
                'ciudad' => 'Aguascalientes',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '20040',
                'asentamiento' => 'La Concordia',
                'tipo_asenta' => 'Fraccionamiento',
                'municipio' => 'Aguascalientes',
                'estado' => 'Aguascalientes',
                'ciudad' => 'Aguascalientes',
                'created_at'=>date('Y-m-d H:i:s'),
               'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                    'codigo' => '20040',
                    'asentamiento' => 'Miravalle',
                    'tipo_asenta' => 'Colonia',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                   'updated_at'=>date('Y-m-d H:i:s')
                    ],
                [
                    'codigo' => '20040',
                'asentamiento' => 'Panorama',
                'tipo_asenta' => 'Fraccionamiento',
                'municipio' => 'Aguascalientes',
                'estado' => 'Aguascalientes',
                'ciudad' => 'Aguascalientes',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                    'codigo' =>'20040',
                'asentamiento' => 'Residencial Guadalupe',
                'tipo_asenta' => 'Fraccionamiento',
                'municipio' => 'Aguascalientes',
                'estado' => 'Aguascalientes',
                'ciudad' => 'Aguascalientes',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                    'codigo' => '20049',
                'asentamiento' => 'Colinas del Poniente',
                'tipo_asenta' => 'Fraccionamiento',
                'municipio' => 'Aguascalientes',
                'estado' => 'Aguascalientes',
                'ciudad' => 'Aguascalientes',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '20050',
                'asentamiento' => 'Bugambilias',
                'tipo_asenta' => 'Condominio',
                'municipio' => 'Aguascalientes',
                'estado' => 'Aguascalientes',
                'ciudad' => 'Aguascalientes',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '20050',
                'asentamiento' => 'Del Carmen',
                'tipo_asenta' => 'Colonia',
                'municipio' => 'Aguascalientes',
                'estado' => 'Aguascalientes',
                'ciudad' => 'Aguascalientes',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '20050',
                'asentamiento' => 'La Fe',
                'tipo_asenta' => 'Colonia',
                'municipio' => 'Aguascalientes',
                'estado' => 'Aguascalientes',
                'ciudad' => 'Aguascalientes',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '20050',
                'asentamiento' => 'México',
                'tipo_asenta' => 'Colonia',
                'municipio' => 'Aguascalientes',
                'estado' => 'Aguascalientes',
                'ciudad' => 'Aguascalientes',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '20050',
                'asentamiento' => 'Primavera',
                'tipo_asenta' => 'Colonia',
                'municipio' => 'Aguascalientes',
                'estado' => 'Aguascalientes',
                'ciudad' => 'Aguascalientes',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '20050',
                'asentamiento' => 'San Pablo',
                'tipo_asenta' => 'Colonia',
                'municipio' => 'Aguascalientes',
                'estado' => 'Aguascalientes',
                'ciudad' => 'Aguascalientes',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '20059',
                'asentamiento' => 'Guadalupe',
                'tipo_asenta' => 'Colonia',
                'municipio' => 'Aguascalientes',
                'estado' => 'Aguascalientes',
                'ciudad' => 'Aguascalientes',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '20059',
                'asentamiento' => 'Heliodoro Garcia',
                'tipo_asenta' => 'Colonia',
                'municipio' => 'Aguascalientes',
                'estado' => 'Aguascalientes',
                'ciudad' => 'Aguascalientes',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '20064',
                'asentamiento' => 'Valle del Rio San Pedro',
                'tipo_asenta' => 'Fraccionamiento',
                'municipio' => 'Aguascalientes',
                'estado' => 'Aguascalientes',
                'ciudad' => 'Aguascalientes',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '20070',
                'asentamiento' => 'Guadalupe Posada',
                'tipo_asenta' => 'Unidad habitacional',
                'municipio' => 'Aguascalientes',
                'estado' => 'Aguascalientes',
                'ciudad' => 'Aguascalientes',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '20070',
                'asentamiento' => 'San Marcos',
                'tipo_asenta' => 'Colonia',
                'municipio' => 'Aguascalientes',
                'estado' => 'Aguascalientes',
                'ciudad' => 'Aguascalientes',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '20070',
                'asentamiento' => 'San Marcos',
                'tipo_asenta' => 'Barrio',
                'municipio' => 'Aguascalientes',
                'estado' => 'Aguascalientes',
                'ciudad' => 'Aguascalientes',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '20078',
                'asentamiento' => 'San Marcos',
                'tipo_asenta' => 'Fraccionamiento',
                'municipio' => 'Aguascalientes',
                'estado' => 'Aguascalientes',
                'ciudad' => 'Aguascalientes',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '20080',
                'asentamiento' => 'Modelo',
                'tipo_asenta' => 'Fraccionamiento',
                'municipio' => 'Aguascalientes',
                'estado' => 'Aguascalientes',
                'ciudad' => 'Aguascalientes',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '20080',
                'asentamiento' => 'Residencial del Valle I',
                'tipo_asenta' => 'Fraccionamiento',
                'municipio' => 'Aguascalientes',
                'estado' => 'Aguascalientes',
                'ciudad' => 'Aguascalientes',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '20089',
                'asentamiento' => 'Residencial del Valle II',
                'tipo_asenta' => 'Fraccionamiento',
                'municipio' => 'Aguascalientes',
                'estado' => 'Aguascalientes',
                'ciudad' => 'Aguascalientes',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '20100',
                'asentamiento' => 'La Herradura',
                'tipo_asenta' => 'Fraccionamiento',
                'municipio' => 'Aguascalientes',
                'estado' => 'Aguascalientes',
                'ciudad' => 'Aguascalientes',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '20100',
                'asentamiento' => 'Club Campestre',
                'tipo_asenta' => 'Fraccionamiento',
                'municipio' => 'Aguascalientes',
                'estado' => 'Aguascalientes',
                'ciudad' => 'Aguascalientes',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '20100',
                'asentamiento' => 'Jardines del Campestre',
                'tipo_asenta' => 'Condominio',
                'municipio' => 'Aguascalientes',
                'estado' => 'Aguascalientes',
                'ciudad' => 'Aguascalientes',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '20100',
                'asentamiento' => 'Los Vergeles',
                'tipo_asenta' => 'Fraccionamiento',
                'municipio' => 'Aguascalientes',
                'estado' => 'Aguascalientes',
                'ciudad' => 'Aguascalientes',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '20100',
                'asentamiento' => 'Ciudad Universitaria',
                'tipo_asenta' => 'Equipamiento',
                'municipio' => 'Aguascalientes',
                'estado' => 'Aguascalientes',
                'ciudad' => 'Aguascalientes',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '20100',
                'asentamiento' => 'Rancho San Antonio',
                'tipo_asenta' => 'Condominio',
                'municipio' => 'Aguascalientes',
                'estado' => 'Aguascalientes',
                'ciudad' => 'Aguascalientes',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '20110',
                'asentamiento' => 'Villas de Montenegro',
                'tipo_asenta' => 'Fraccionamiento',
                'municipio' => 'Aguascalientes',
                'estado' => 'Aguascalientes',
                'ciudad' => 'Aguascalientes',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '20110',
                'asentamiento' => 'Las Cavas',
                'tipo_asenta' => 'Fraccionamiento',
                'municipio' => 'Aguascalientes',
                'estado' => 'Aguascalientes',
                'ciudad' => 'Aguascalientes',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '20110',
                'asentamiento' => 'La Enramada',
                'tipo_asenta' => 'Fraccionamiento',
                'municipio' => 'Aguascalientes',
                'estado' => 'Aguascalientes',
                'ciudad' => 'Aguascalientes',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [ 
                'codigo' => '20110',
                'asentamiento' => 'Talamantes Ponce',
                'tipo_asenta' => 'Colonia',
                'municipio' => 'Aguascalientes',
                'estado' => 'Aguascalientes',
                'ciudad' => 'Aguascalientes',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                    'codigo' => '20110',
                'asentamiento' => 'Granjas del Campestre',
                'tipo_asenta' => 'Fraccionamiento',
                'municipio' => 'Aguascalientes',
                'estado' => 'Aguascalientes',
                'ciudad' => 'Aguascalientes',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '20110',
                'asentamiento' => 'Puerto las Hadas',
                'tipo_asenta' => 'Condominio',
                'municipio' => 'Aguascalientes',
                'estado' => 'Aguascalientes',
                'ciudad' => 'Aguascalientes',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '20110',
                'asentamiento' => 'Valle del Campestre',
                'tipo_asenta' => 'Fraccionamiento',
                'municipio' => 'Aguascalientes',
                'estado' => 'Aguascalientes',
                'ciudad' => 'Aguascalientes',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '20115',
                'asentamiento' => 'Trojes de Oriente',
                'tipo_asenta' => 'Fraccionamiento',
                'municipio' => 'Aguascalientes',
                'estado' => 'Aguascalientes',
                'ciudad' => 'Aguascalientes',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [ 
                'codigo' => '20115',
                'asentamiento' => 'Valle de las Trojes',
                'tipo_asenta' => 'Fraccionamiento',
                'municipio' => 'Aguascalientes',
                'estado' => 'Aguascalientes',
                'ciudad' => 'Aguascalientes',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '20115',
                'asentamiento' => 'Villas de San Nicolás',
                'tipo_asenta' => 'Fraccionamiento',
                'municipio' => 'Aguascalientes',
                'estado' => 'Aguascalientes',
                'ciudad' => 'Aguascalientes',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '20115',
                'asentamiento' => 'San Telmo',
                'tipo_asenta' => 'Fraccionamiento',
                'municipio' => 'Aguascalientes',
                'estado' => 'Aguascalientes',
                'ciudad' => 'Aguascalientes',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '20115',
                'asentamiento' => 'La Paloma',
                'tipo_asenta' => 'Condominio',
                'municipio' => 'Aguascalientes',
                'estado' => 'Aguascalientes',
                'ciudad' => 'Aguascalientes',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '20115',
                'asentamiento' => 'Barrio de Santiago',
                'tipo_asenta' => 'Fraccionamiento',
                'municipio' => 'Aguascalientes',
                'estado' => 'Aguascalientes',
                'ciudad' => 'Aguascalientes',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '20115',
                'asentamiento' => 'Villa de las Trojes',
                'tipo_asenta' => 'Fraccionamiento',
                'municipio' => 'Aguascalientes',
                'estado' => 'Aguascalientes',
                'ciudad' => 'Aguascalientes',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '20115',
                'asentamiento' => 'Valle de Santa Teresa',
                'tipo_asenta' => 'Fraccionamiento',
                'municipio' => 'Aguascalientes',
                'estado' => 'Aguascalientes',
                'ciudad' => 'Aguascalientes',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '20116',
                'asentamiento' => 'La Troje',
                'tipo_asenta' => 'Fraccionamiento',
                'municipio' => 'Aguascalientes',
                'estado' => 'Aguascalientes',
                'ciudad' => 'Aguascalientes',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                       
                 'codigo' => '20116',
                 'asentamiento' => 'La Troje',
                 'tipo_asenta' => 'Fraccionamiento',
                 'municipio' => 'Aguascalientes',
                 'estado' => 'Aguascalientes',
                 'ciudad' => 'Aguascalientes',
                 'created_at'=>date('Y-m-d H:i:s'),
                 'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                    'codigo' => '20116',
                    'asentamiento' => 'Santa Fe',
                    'tipo_asenta' => 'Condominio',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20117',
                    'asentamiento' => 'Aguascalientes 2000',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20118',
                    'asentamiento' => 'Las Trojes',
                    'tipo_asenta' => 'Condominio',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20118',
                    'asentamiento' => 'Misión del Campanario',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20118',
                    'asentamiento' => 'Trojes de Cristal',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20118',
                    'asentamiento' => 'Trojes del Sol',
                    'tipo_asenta' => 'Condominio',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20118',
                    'asentamiento' => 'Residencial Santa Clara',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20118',
                    'asentamiento' => 'Misión de Santiago',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20118',
                    'asentamiento' => 'Valle del Campanario',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20118',
                    'asentamiento' => 'Las Misiones',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20118',
                    'asentamiento' => 'Los Jarales',
                    'tipo_asenta' => 'Condominio',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20118',
                    'asentamiento' => 'Cerrada El Molino',
                    'tipo_asenta' => 'Condominio',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20118',
                    'asentamiento' => 'Valle Real',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20118',
                    'asentamiento' => 'Terzetto',
                    'tipo_asenta' => 'Condominio',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20118',
                    'asentamiento' => 'Cerrada de La Misión',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20118',
                    'asentamiento' => 'Cerrada del Valle',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                        'codigo' => '20118',
                        'asentamiento' => 'Cerrada de la Mezquitera',
                        'tipo_asenta' => 'Fraccionamiento',
                        'municipio' => 'Aguascalientes',
                        'estado' => 'Aguascalientes',
                        'ciudad' => 'Aguascalientes',
                        'created_at'=>date('Y-m-d H:i:s'),
                        'updated_at'=>date('Y-m-d H:i:s')
                        ],
                        [
                        'codigo' => '20119',
                        'asentamiento' => 'Lomas del Campestre 2a Sección',
                        'tipo_asenta' => 'Fraccionamiento',
                        'municipio' => 'Aguascalientes',
                        'estado' => 'Aguascalientes',
                        'ciudad' => 'Aguascalientes',
                        'created_at'=>date('Y-m-d H:i:s'),
                        'updated_at'=>date('Y-m-d H:i:s')
                        ],
                        [
                        'codigo' => '20119',
                        'asentamiento' => 'Villas del Campestre',
                        'tipo_asenta' => 'Fraccionamiento',
                        'municipio' => 'Aguascalientes',
                        'estado' => 'Aguascalientes',
                        'ciudad' => 'Aguascalientes',
                        'created_at'=>date('Y-m-d H:i:s'),
                        'updated_at'=>date('Y-m-d H:i:s')
                        ],
                        [
                        'codigo' => '20119',
                        'asentamiento' => 'Los Calicantos',
                        'tipo_asenta' => 'Fraccionamiento',
                        'municipio' => 'Aguascalientes',
                        'estado' => 'Aguascalientes',
                        'ciudad' => 'Aguascalientes',
                        'created_at'=>date('Y-m-d H:i:s'),
                        'updated_at'=>date('Y-m-d H:i:s')
                        ],
                        [
                        'codigo' => '20120',
                        'asentamiento' => 'Jardines de la Concepción',
                        'tipo_asenta' => 'Fraccionamiento',
                        'municipio' => 'Aguascalientes',
                        'estado' => 'Aguascalientes',
                        'ciudad' => 'Aguascalientes',
                        'created_at'=>date('Y-m-d H:i:s'),
                        'updated_at'=>date('Y-m-d H:i:s')
                        ],
                        [
                        'codigo' => '20120',
                        'asentamiento' => 'Los Bosques',
                        'tipo_asenta' => 'Fraccionamiento',
                        'municipio' => 'Aguascalientes',
                        'estado' => 'Aguascalientes',
                        'ciudad' => 'Aguascalientes',
                        'created_at'=>date('Y-m-d H:i:s'),
                        'updated_at'=>date('Y-m-d H:i:s')
                        ],
                        [
                        'codigo' => '20120',
                        'asentamiento' => 'Rinconada los Bosques',
                        'tipo_asenta' => 'Condominio',
                        'municipio' => 'Aguascalientes',
                        'estado' => 'Aguascalientes',
                        'ciudad' => 'Aguascalientes',
                        'created_at'=>date('Y-m-d H:i:s'),
                        'updated_at'=>date('Y-m-d H:i:s')
                        ],
                        [
                        'codigo' => '20123',
                        'asentamiento' => 'La Perla Norte',
                        'tipo_asenta' => 'Condominio',
                        'municipio' => 'Aguascalientes',
                        'estado' => 'Aguascalientes',
                        'ciudad' => 'Aguascalientes',
                        'created_at'=>date('Y-m-d H:i:s'),
                        'updated_at'=>date('Y-m-d H:i:s')
                        ],
                        [
                        'codigo' => '20123',
                        'asentamiento' => 'Arroyo El Molino',
                        'tipo_asenta' => 'Fraccionamiento',
                        'municipio' => 'Aguascalientes',
                        'estado' => 'Aguascalientes',
                        'ciudad' => 'Aguascalientes',
                        'created_at'=>date('Y-m-d H:i:s'),
                       'updated_at'=>date('Y-m-d H:i:s')
                        ],
                        [
                        'codigo' => '20124',
                        'asentamiento' => 'Galerías',
                        'tipo_asenta' => 'Zona comercial',
                        'municipio' => 'Aguascalientes',
                        'estado' => 'Aguascalientes',
                        'ciudad' => 'Aguascalientes',
                        'created_at'=>date('Y-m-d H:i:s'),
                        'updated_at'=>date('Y-m-d H:i:s')
                        ],
                        [
                        'codigo' => '20124',
                        'asentamiento' => 'Residencial Altaria',
                        'tipo_asenta' => 'Fraccionamiento',
                        'municipio' => 'Aguascalientes',
                        'estado' => 'Aguascalientes',
                        'ciudad' => 'Aguascalientes',
                        'created_at'=>date('Y-m-d H:i:s'),
                        'updated_at'=>date('Y-m-d H:i:s')
                        ],
                        [
                        'codigo' => '20126',
                        'asentamiento' => 'Villas de La Convención',
                        'tipo_asenta' => 'Fraccionamiento',
                        'municipio' => 'Aguascalientes',
                        'estado' => 'Aguascalientes',
                        'ciudad' => 'Aguascalientes',
                        'created_at'=>date('Y-m-d H:i:s'),
                        'updated_at'=>date('Y-m-d H:i:s')
                        ],
                        [
                        'codigo' => '20126',
                        'asentamiento' => 'Lomas de La Asunción',
                        'tipo_asenta' => 'Fraccionamiento',
                        'municipio' => 'Aguascalientes',
                        'estado' => 'Aguascalientes',
                        'ciudad' => 'Aguascalientes',
                        'created_at'=>date('Y-m-d H:i:s'),
                        'updated_at'=>date('Y-m-d H:i:s')
                        ],
                        [
                        'codigo' => '20126',
                        'asentamiento' => 'Villa de Nuestra Señora de La Asunción Sector Encino',
                        'tipo_asenta' => 'Fraccionamiento',
                        'municipio' => 'Aguascalientes',
                        'estado' => 'Aguascalientes',
                        'ciudad' => 'Aguascalientes',
                        'created_at'=>date('Y-m-d H:i:s'),
                        'updated_at'=>date('Y-m-d H:i:s')
                        ],
                        [
                        'codigo' => '20126',
                        'asentamiento' => 'Villa de Nuestra Señora de La Asunción Sector Alameda',
                        'tipo_asenta' => 'Fraccionamiento',
                        'municipio' => 'Aguascalientes',
                        'estado' => 'Aguascalientes',
                        'ciudad' => 'Aguascalientes',
                        'created_at'=>date('Y-m-d H:i:s'),
                        'updated_at'=>date('Y-m-d H:i:s')
                        ],
                        [
                        'codigo' => '20126',
                        'asentamiento' => 'San José de Pozo Bravo',
                        'tipo_asenta' => 'Fraccionamiento',
                        'municipio' => 'Aguascalientes',
                        'estado' => 'Aguascalientes',
                        'ciudad' => 'Aguascalientes',
                        'created_at'=>date('Y-m-d H:i:s'),
                        'updated_at'=>date('Y-m-d H:i:s')
                        ],      
                        [
                            'codigo' => '20118',
                    'asentamiento' => 'Cerrada de la Mezquitera',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20119',
                    'asentamiento' => 'Lomas del Campestre 2a Sección',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20119',
                    'asentamiento' => 'Villas del Campestre',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20119',
                    'asentamiento' => 'Los Calicantos',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20120',
                    'asentamiento' => 'Jardines de la Concepción',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20120',
                    'asentamiento' => 'Los Bosques',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20120',
                    'asentamiento' => 'Rinconada los Bosques',
                    'tipo_asenta' => 'Condominio',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20123',
                    'asentamiento' => 'La Perla Norte',
                    'tipo_asenta' => 'Condominio',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20123',
                    'asentamiento' => 'Arroyo El Molino',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                   'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20124',
                    'asentamiento' => 'Galerías',
                    'tipo_asenta' => 'Zona comercial',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20124',
                    'asentamiento' => 'Residencial Altaria',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20126',
                    'asentamiento' => 'Villas de La Convención',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20126',
                    'asentamiento' => 'Lomas de La Asunción',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20126',
                    'asentamiento' => 'Villa de Nuestra Señora de La Asunción Sector Encino',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20126',
                    'asentamiento' => 'Villa de Nuestra Señora de La Asunción Sector Alameda',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20126',
                    'asentamiento' => 'San José de Pozo Bravo',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                        'codigo' => '20118',
                    'asentamiento' => 'Cerrada de la Mezquitera',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20119',
                    'asentamiento' => 'Lomas del Campestre 2a Sección',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20119',
                    'asentamiento' => 'Villas del Campestre',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20119',
                    'asentamiento' => 'Los Calicantos',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20120',
                    'asentamiento' => 'Jardines de la Concepción',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20120',
                    'asentamiento' => 'Los Bosques',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20120',
                    'asentamiento' => 'Rinconada los Bosques',
                    'tipo_asenta' => 'Condominio',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20123',
                    'asentamiento' => 'La Perla Norte',
                    'tipo_asenta' => 'Condominio',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20123',
                    'asentamiento' => 'Arroyo El Molino',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                   'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20124',
                    'asentamiento' => 'Galerías',
                    'tipo_asenta' => 'Zona comercial',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20124',
                    'asentamiento' => 'Residencial Altaria',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20126',
                    'asentamiento' => 'Villas de La Convención',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20126',
                    'asentamiento' => 'Lomas de La Asunción',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20126',
                    'asentamiento' => 'Villa de Nuestra Señora de La Asunción Sector Encino',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20126',
                    'asentamiento' => 'Villa de Nuestra Señora de La Asunción Sector Alameda',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20126',
                    'asentamiento' => 'San José de Pozo Bravo',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                        'codigo' => '20118',
                    'asentamiento' => 'Cerrada de la Mezquitera',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20119',
                    'asentamiento' => 'Lomas del Campestre 2a Sección',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20119',
                    'asentamiento' => 'Villas del Campestre',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20119',
                    'asentamiento' => 'Los Calicantos',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20120',
                    'asentamiento' => 'Jardines de la Concepción',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20120',
                    'asentamiento' => 'Los Bosques',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20120',
                    'asentamiento' => 'Rinconada los Bosques',
                    'tipo_asenta' => 'Condominio',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20123',
                    'asentamiento' => 'La Perla Norte',
                    'tipo_asenta' => 'Condominio',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20123',
                    'asentamiento' => 'Arroyo El Molino',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                   'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20124',
                    'asentamiento' => 'Galerías',
                    'tipo_asenta' => 'Zona comercial',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20124',
                    'asentamiento' => 'Residencial Altaria',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20126',
                    'asentamiento' => 'Villas de La Convención',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20126',
                    'asentamiento' => 'Lomas de La Asunción',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20126',
                    'asentamiento' => 'Villa de Nuestra Señora de La Asunción Sector Encino',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20126',
                    'asentamiento' => 'Villa de Nuestra Señora de La Asunción Sector Alameda',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20126',
                    'asentamiento' => 'San José de Pozo Bravo',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                        'codigo' => '20118',
                    'asentamiento' => 'Cerrada de la Mezquitera',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20119',
                    'asentamiento' => 'Lomas del Campestre 2a Sección',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20119',
                    'asentamiento' => 'Villas del Campestre',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20119',
                    'asentamiento' => 'Los Calicantos',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20120',
                    'asentamiento' => 'Jardines de la Concepción',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20120',
                    'asentamiento' => 'Los Bosques',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20120',
                    'asentamiento' => 'Rinconada los Bosques',
                    'tipo_asenta' => 'Condominio',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20123',
                    'asentamiento' => 'La Perla Norte',
                    'tipo_asenta' => 'Condominio',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20123',
                    'asentamiento' => 'Arroyo El Molino',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                   'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20124',
                    'asentamiento' => 'Galerías',
                    'tipo_asenta' => 'Zona comercial',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20124',
                    'asentamiento' => 'Residencial Altaria',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20126',
                    'asentamiento' => 'Villas de La Convención',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20126',
                    'asentamiento' => 'Lomas de La Asunción',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20126',
                    'asentamiento' => 'Villa de Nuestra Señora de La Asunción Sector Encino',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20126',
                    'asentamiento' => 'Villa de Nuestra Señora de La Asunción Sector Alameda',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20126',
                    'asentamiento' => 'San José de Pozo Bravo',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                        'codigo' => '20118',
                    'asentamiento' => 'Cerrada de la Mezquitera',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20119',
                    'asentamiento' => 'Lomas del Campestre 2a Sección',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20119',
                    'asentamiento' => 'Villas del Campestre',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20119',
                    'asentamiento' => 'Los Calicantos',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20120',
                    'asentamiento' => 'Jardines de la Concepción',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20120',
                    'asentamiento' => 'Los Bosques',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20120',
                    'asentamiento' => 'Rinconada los Bosques',
                    'tipo_asenta' => 'Condominio',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20123',
                    'asentamiento' => 'La Perla Norte',
                    'tipo_asenta' => 'Condominio',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20123',
                    'asentamiento' => 'Arroyo El Molino',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                   'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20124',
                    'asentamiento' => 'Galerías',
                    'tipo_asenta' => 'Zona comercial',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20124',
                    'asentamiento' => 'Residencial Altaria',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20126',
                    'asentamiento' => 'Villas de La Convención',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20126',
                    'asentamiento' => 'Lomas de La Asunción',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20126',
                    'asentamiento' => 'Villa de Nuestra Señora de La Asunción Sector Encino',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20126',
                    'asentamiento' => 'Villa de Nuestra Señora de La Asunción Sector Alameda',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20126',
                    'asentamiento' => 'San José de Pozo Bravo',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                        'codigo' => '20118',
                    'asentamiento' => 'Cerrada de la Mezquitera',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20119',
                    'asentamiento' => 'Lomas del Campestre 2a Sección',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20119',
                    'asentamiento' => 'Villas del Campestre',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20119',
                    'asentamiento' => 'Los Calicantos',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20120',
                    'asentamiento' => 'Jardines de la Concepción',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20120',
                    'asentamiento' => 'Los Bosques',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20120',
                    'asentamiento' => 'Rinconada los Bosques',
                    'tipo_asenta' => 'Condominio',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20123',
                    'asentamiento' => 'La Perla Norte',
                    'tipo_asenta' => 'Condominio',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20123',
                    'asentamiento' => 'Arroyo El Molino',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                   'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20124',
                    'asentamiento' => 'Galerías',
                    'tipo_asenta' => 'Zona comercial',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20124',
                    'asentamiento' => 'Residencial Altaria',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20126',
                    'asentamiento' => 'Villas de La Convención',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20126',
                    'asentamiento' => 'Lomas de La Asunción',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20126',
                    'asentamiento' => 'Villa de Nuestra Señora de La Asunción Sector Encino',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20126',
                    'asentamiento' => 'Villa de Nuestra Señora de La Asunción Sector Alameda',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20126',
                    'asentamiento' => 'San José de Pozo Bravo',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                        'codigo' => '20118',
                    'asentamiento' => 'Cerrada de la Mezquitera',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20119',
                    'asentamiento' => 'Lomas del Campestre 2a Sección',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20119',
                    'asentamiento' => 'Villas del Campestre',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20119',
                    'asentamiento' => 'Los Calicantos',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20120',
                    'asentamiento' => 'Jardines de la Concepción',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20120',
                    'asentamiento' => 'Los Bosques',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20120',
                    'asentamiento' => 'Rinconada los Bosques',
                    'tipo_asenta' => 'Condominio',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20123',
                    'asentamiento' => 'La Perla Norte',
                    'tipo_asenta' => 'Condominio',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20123',
                    'asentamiento' => 'Arroyo El Molino',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                   'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20124',
                    'asentamiento' => 'Galerías',
                    'tipo_asenta' => 'Zona comercial',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20124',
                    'asentamiento' => 'Residencial Altaria',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20126',
                    'asentamiento' => 'Villas de La Convención',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20126',
                    'asentamiento' => 'Lomas de La Asunción',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20126',
                    'asentamiento' => 'Villa de Nuestra Señora de La Asunción Sector Encino',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20126',
                    'asentamiento' => 'Villa de Nuestra Señora de La Asunción Sector Alameda',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20126',
                    'asentamiento' => 'San José de Pozo Bravo',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                        'codigo' => '20118',
                    'asentamiento' => 'Cerrada de la Mezquitera',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20119',
                    'asentamiento' => 'Lomas del Campestre 2a Sección',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20119',
                    'asentamiento' => 'Villas del Campestre',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20119',
                    'asentamiento' => 'Los Calicantos',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20120',
                    'asentamiento' => 'Jardines de la Concepción',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20120',
                    'asentamiento' => 'Los Bosques',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20120',
                    'asentamiento' => 'Rinconada los Bosques',
                    'tipo_asenta' => 'Condominio',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20123',
                    'asentamiento' => 'La Perla Norte',
                    'tipo_asenta' => 'Condominio',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20123',
                    'asentamiento' => 'Arroyo El Molino',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                   'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20124',
                    'asentamiento' => 'Galerías',
                    'tipo_asenta' => 'Zona comercial',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20124',
                    'asentamiento' => 'Residencial Altaria',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20126',
                    'asentamiento' => 'Villas de La Convención',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20126',
                    'asentamiento' => 'Lomas de La Asunción',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20126',
                    'asentamiento' => 'Villa de Nuestra Señora de La Asunción Sector Encino',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20126',
                    'asentamiento' => 'Villa de Nuestra Señora de La Asunción Sector Alameda',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20126',
                    'asentamiento' => 'San José de Pozo Bravo',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                        'codigo' => '20118',
                    'asentamiento' => 'Cerrada de la Mezquitera',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20119',
                    'asentamiento' => 'Lomas del Campestre 2a Sección',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20119',
                    'asentamiento' => 'Villas del Campestre',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20119',
                    'asentamiento' => 'Los Calicantos',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20120',
                    'asentamiento' => 'Jardines de la Concepción',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20120',
                    'asentamiento' => 'Los Bosques',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20120',
                    'asentamiento' => 'Rinconada los Bosques',
                    'tipo_asenta' => 'Condominio',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20123',
                    'asentamiento' => 'La Perla Norte',
                    'tipo_asenta' => 'Condominio',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20123',
                    'asentamiento' => 'Arroyo El Molino',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                   'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20124',
                    'asentamiento' => 'Galerías',
                    'tipo_asenta' => 'Zona comercial',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20124',
                    'asentamiento' => 'Residencial Altaria',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20126',
                    'asentamiento' => 'Villas de La Convención',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20126',
                    'asentamiento' => 'Lomas de La Asunción',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20126',
                    'asentamiento' => 'Villa de Nuestra Señora de La Asunción Sector Encino',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20126',
                    'asentamiento' => 'Villa de Nuestra Señora de La Asunción Sector Alameda',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20126',
                    'asentamiento' => 'San José de Pozo Bravo',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                        'codigo' => '20118',
                    'asentamiento' => 'Cerrada de la Mezquitera',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20119',
                    'asentamiento' => 'Lomas del Campestre 2a Sección',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20119',
                    'asentamiento' => 'Villas del Campestre',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20119',
                    'asentamiento' => 'Los Calicantos',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20120',
                    'asentamiento' => 'Jardines de la Concepción',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20120',
                    'asentamiento' => 'Los Bosques',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20120',
                    'asentamiento' => 'Rinconada los Bosques',
                    'tipo_asenta' => 'Condominio',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20123',
                    'asentamiento' => 'La Perla Norte',
                    'tipo_asenta' => 'Condominio',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20123',
                    'asentamiento' => 'Arroyo El Molino',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                   'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20124',
                    'asentamiento' => 'Galerías',
                    'tipo_asenta' => 'Zona comercial',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20124',
                    'asentamiento' => 'Residencial Altaria',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20126',
                    'asentamiento' => 'Villas de La Convención',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20126',
                    'asentamiento' => 'Lomas de La Asunción',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20126',
                    'asentamiento' => 'Villa de Nuestra Señora de La Asunción Sector Encino',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20126',
                    'asentamiento' => 'Villa de Nuestra Señora de La Asunción Sector Alameda',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20126',
                    'asentamiento' => 'San José de Pozo Bravo',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                        'codigo' => '20118',
                    'asentamiento' => 'Cerrada de la Mezquitera',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20119',
                    'asentamiento' => 'Lomas del Campestre 2a Sección',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20119',
                    'asentamiento' => 'Villas del Campestre',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20119',
                    'asentamiento' => 'Los Calicantos',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20120',
                    'asentamiento' => 'Jardines de la Concepción',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20120',
                    'asentamiento' => 'Los Bosques',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20120',
                    'asentamiento' => 'Rinconada los Bosques',
                    'tipo_asenta' => 'Condominio',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20123',
                    'asentamiento' => 'La Perla Norte',
                    'tipo_asenta' => 'Condominio',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20123',
                    'asentamiento' => 'Arroyo El Molino',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                   'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20124',
                    'asentamiento' => 'Galerías',
                    'tipo_asenta' => 'Zona comercial',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20124',
                    'asentamiento' => 'Residencial Altaria',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20126',
                    'asentamiento' => 'Villas de La Convención',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20126',
                    'asentamiento' => 'Lomas de La Asunción',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20126',
                    'asentamiento' => 'Villa de Nuestra Señora de La Asunción Sector Encino',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20126',
                    'asentamiento' => 'Villa de Nuestra Señora de La Asunción Sector Alameda',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20126',
                    'asentamiento' => 'San José de Pozo Bravo',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20000',
                    'asentamiento' => 'Aguascalientes Centro',
                    'tipo_asenta' => 'Colonia',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                     ],
                     [
                    'codigo' => '20000',
                    'asentamiento' => 'Colinas del  Rio',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                     ],
                     [
                    'codigo' => '20010',
                    'asentamiento' => 'Olivares Santana',
                    'tipo_asenta' => 'Colonia',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20010',
                    'asentamiento' => 'Las Brisas',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                     ],
                     [
                    'codigo' => '20010',
                    'asentamiento' => 'Ramon Romo Franco',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                     [
                     'codigo' => '20010',
                    'asentamiento' => 'San Cayetano',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20016',
                    'asentamiento' => 'Colinas de San Ignacio',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20016',
                    'asentamiento' => 'La Fundición',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20016',
                    'asentamiento' => 'Fundición II',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20016',
                    'asentamiento' => 'Los Sauces',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20018',
                    'asentamiento' => 'Línea de Fuego',
                    'tipo_asenta' => 'Colonia',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20020',
                    'asentamiento' => 'Buenos Aires',
                    'tipo_asenta' => 'Colonia',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20020',
                    'asentamiento' => 'Circunvalación Norte',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20020',
                    'asentamiento' => 'Las Arboledas',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20020',
                    'asentamiento' => 'Villas de San Francisco',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20029',
                    'asentamiento' => 'Villas de La Universidad',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                     ],
                    [
                    'codigo' => '20030',
                    'asentamiento' => 'El Sol',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20030',
                    'asentamiento' => 'Gremial',
                    'tipo_asenta' => 'Colonia',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20030',
                    'asentamiento' => 'Industrial',
                    'tipo_asenta' => 'Colonia',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20040',
                    'asentamiento' => 'Altavista',
                    'tipo_asenta' => 'Colonia',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20040',
                    'asentamiento' => 'Curtidores',
                    'tipo_asenta' => 'Colonia',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20040',
                    'asentamiento' => 'La Concordia',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20000',
                    'asentamiento' => 'Aguascalientes Centro',
                    'tipo_asenta' => 'Colonia',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                     ],
                     [
                    'codigo' => '20000',
                    'asentamiento' => 'Colinas del  Rio',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                   'codigo' => '20010',
                   'asentamiento' => 'Olivares Santana',
                   'tipo_asenta' => 'Colonia',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20010',
                    'asentamiento' => 'Las Brisas',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20010',
                    'asentamiento' => 'Ramon Romo Franco',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20010',
                    'asentamiento' => 'San Cayetano',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20016',
                    'asentamiento' => 'Colinas de San Ignacio',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                     ],
                    [
                    'codigo' => '20016',
                    'asentamiento' => 'La Fundición',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20016',
                    'asentamiento' => 'Fundición II',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20016',
                    'asentamiento' => 'Los Sauces',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20018',
                    'asentamiento' => 'Línea de Fuego',
                    'tipo_asenta' => 'Colonia',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20020',
                    'asentamiento' => 'Buenos Aires',
                    'tipo_asenta' => 'Colonia',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20020',
                    'asentamiento' => 'Circunvalación Norte',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20020',
                    'asentamiento' => 'Las Arboledas',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20020',
                    'asentamiento' => 'Villas de San Francisco',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20029',
                    'asentamiento' => 'Villas de La Universidad',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20030',
                    'asentamiento' => 'El Sol',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20030',
                    'asentamiento' => 'Gremial',
                    'tipo_asenta' => 'Colonia',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20030',
                    'asentamiento' => 'Industrial',
                    'tipo_asenta' => 'Colonia',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20040',
                    'asentamiento' => 'Altavista',
                    'tipo_asenta' => 'Colonia',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20040',
                    'asentamiento' => 'Curtidores',
                    'tipo_asenta' => 'Colonia',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20040',
                    'asentamiento' => 'La Concordia',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                        'codigo' => '20124',
                        'asentamiento' => 'Residencial Altaria',
                        'tipo_asenta' => 'Fraccionamiento',
                        'municipio' => 'Aguascalientes',
                        'estado' => 'Aguascalientes',
                        'ciudad' => 'Aguascalientes',
                        'created_at'=>date('Y-m-d H:i:s'),
                        'updated_at'=>date('Y-m-d H:i:s')
                        ],
                        [
                        'codigo' => '20126',
                        'asentamiento' => 'Villas de La Convención',
                        'tipo_asenta' => 'Fraccionamiento',
                        'municipio' => 'Aguascalientes',
                        'estado' => 'Aguascalientes',
                        'ciudad' => 'Aguascalientes',
                        'created_at'=>date('Y-m-d H:i:s'),
                        'updated_at'=>date('Y-m-d H:i:s')
                        ],
                        [
                        'codigo' => '20126',
                        'asentamiento' => 'Lomas de La Asunción',
                        'tipo_asenta' => 'Fraccionamiento',
                        'municipio' => 'Aguascalientes',
                        'estado' => 'Aguascalientes',
                        'ciudad' => 'Aguascalientes',
                        'created_at'=>date('Y-m-d H:i:s'),
                        'updated_at'=>date('Y-m-d H:i:s')
                        ],
                        [
                        'codigo' => '20126',
                        'asentamiento' => 'Villa de Nuestra Señora de La Asunción Sector Encino',
                        'tipo_asenta' => 'Fraccionamiento',
                        'municipio' => 'Aguascalientes',
                        'estado' => 'Aguascalientes',
                        'ciudad' => 'Aguascalientes',
                        'created_at'=>date('Y-m-d H:i:s'),
                        'updated_at'=>date('Y-m-d H:i:s')
                        ],
                        [
                        'codigo' => '20126',
                        'asentamiento' => 'Villa de Nuestra Señora de La Asunción Sector Alameda',
                        'tipo_asenta' => 'Fraccionamiento',
                        'municipio' => 'Aguascalientes',
                        'estado' => 'Aguascalientes',
                        'ciudad' => 'Aguascalientes',
                        'created_at'=>date('Y-m-d H:i:s'),
                        'updated_at'=>date('Y-m-d H:i:s')
                        ],
                        [
                        'codigo' => '20126',
                        'asentamiento' => 'San José de Pozo Bravo',
                        'tipo_asenta' => 'Fraccionamiento',
                        'municipio' => 'Aguascalientes',
                        'estado' => 'Aguascalientes',
                        'ciudad' => 'Aguascalientes',
                        'created_at'=>date('Y-m-d H:i:s'),
                        'updated_at'=>date('Y-m-d H:i:s')
                        ],      
                        [
                            'codigo' => '20118',
                    'asentamiento' => 'Cerrada de la Mezquitera',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20119',
                    'asentamiento' => 'Lomas del Campestre 2a Sección',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20119',
                    'asentamiento' => 'Villas del Campestre',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20119',
                    'asentamiento' => 'Los Calicantos',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20120',
                    'asentamiento' => 'Jardines de la Concepción',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20120',
                    'asentamiento' => 'Los Bosques',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20120',
                    'asentamiento' => 'Rinconada los Bosques',
                    'tipo_asenta' => 'Condominio',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20123',
                    'asentamiento' => 'La Perla Norte',
                    'tipo_asenta' => 'Condominio',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20123',
                    'asentamiento' => 'Arroyo El Molino',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                   'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20124',
                    'asentamiento' => 'Galerías',
                    'tipo_asenta' => 'Zona comercial',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20124',
                    'asentamiento' => 'Residencial Altaria',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20126',
                    'asentamiento' => 'Villas de La Convención',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                        'codigo' => '20124',
                        'asentamiento' => 'Residencial Altaria',
                        'tipo_asenta' => 'Fraccionamiento',
                        'municipio' => 'Aguascalientes',
                        'estado' => 'Aguascalientes',
                        'ciudad' => 'Aguascalientes',
                        'created_at'=>date('Y-m-d H:i:s'),
                        'updated_at'=>date('Y-m-d H:i:s')
                        ],
                        [
                        'codigo' => '20126',
                        'asentamiento' => 'Villas de La Convención',
                        'tipo_asenta' => 'Fraccionamiento',
                        'municipio' => 'Aguascalientes',
                        'estado' => 'Aguascalientes',
                        'ciudad' => 'Aguascalientes',
                        'created_at'=>date('Y-m-d H:i:s'),
                        'updated_at'=>date('Y-m-d H:i:s')
                        ],
                        [
                        'codigo' => '20126',
                        'asentamiento' => 'Lomas de La Asunción',
                        'tipo_asenta' => 'Fraccionamiento',
                        'municipio' => 'Aguascalientes',
                        'estado' => 'Aguascalientes',
                        'ciudad' => 'Aguascalientes',
                        'created_at'=>date('Y-m-d H:i:s'),
                        'updated_at'=>date('Y-m-d H:i:s')
                        ],
                        [
                        'codigo' => '20126',
                        'asentamiento' => 'Villa de Nuestra Señora de La Asunción Sector Encino',
                        'tipo_asenta' => 'Fraccionamiento',
                        'municipio' => 'Aguascalientes',
                        'estado' => 'Aguascalientes',
                        'ciudad' => 'Aguascalientes',
                        'created_at'=>date('Y-m-d H:i:s'),
                        'updated_at'=>date('Y-m-d H:i:s')
                        ],
                        [
                        'codigo' => '20126',
                        'asentamiento' => 'Villa de Nuestra Señora de La Asunción Sector Alameda',
                        'tipo_asenta' => 'Fraccionamiento',
                        'municipio' => 'Aguascalientes',
                        'estado' => 'Aguascalientes',
                        'ciudad' => 'Aguascalientes',
                        'created_at'=>date('Y-m-d H:i:s'),
                        'updated_at'=>date('Y-m-d H:i:s')
                        ],
                        [
                        'codigo' => '20126',
                        'asentamiento' => 'San José de Pozo Bravo',
                        'tipo_asenta' => 'Fraccionamiento',
                        'municipio' => 'Aguascalientes',
                        'estado' => 'Aguascalientes',
                        'ciudad' => 'Aguascalientes',
                        'created_at'=>date('Y-m-d H:i:s'),
                        'updated_at'=>date('Y-m-d H:i:s')
                        ],      
                        [
                            'codigo' => '20118',
                    'asentamiento' => 'Cerrada de la Mezquitera',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20119',
                    'asentamiento' => 'Lomas del Campestre 2a Sección',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20119',
                    'asentamiento' => 'Villas del Campestre',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20119',
                    'asentamiento' => 'Los Calicantos',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20120',
                    'asentamiento' => 'Jardines de la Concepción',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20120',
                    'asentamiento' => 'Los Bosques',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20120',
                    'asentamiento' => 'Rinconada los Bosques',
                    'tipo_asenta' => 'Condominio',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20123',
                    'asentamiento' => 'La Perla Norte',
                    'tipo_asenta' => 'Condominio',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20123',
                    'asentamiento' => 'Arroyo El Molino',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                   'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20124',
                    'asentamiento' => 'Galerías',
                    'tipo_asenta' => 'Zona comercial',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20124',
                    'asentamiento' => 'Residencial Altaria',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20126',
                    'asentamiento' => 'Villas de La Convención',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                        'codigo' => '20124',
                        'asentamiento' => 'Residencial Altaria',
                        'tipo_asenta' => 'Fraccionamiento',
                        'municipio' => 'Aguascalientes',
                        'estado' => 'Aguascalientes',
                        'ciudad' => 'Aguascalientes',
                        'created_at'=>date('Y-m-d H:i:s'),
                        'updated_at'=>date('Y-m-d H:i:s')
                        ],
                        [
                        'codigo' => '20126',
                        'asentamiento' => 'Villas de La Convención',
                        'tipo_asenta' => 'Fraccionamiento',
                        'municipio' => 'Aguascalientes',
                        'estado' => 'Aguascalientes',
                        'ciudad' => 'Aguascalientes',
                        'created_at'=>date('Y-m-d H:i:s'),
                        'updated_at'=>date('Y-m-d H:i:s')
                        ],
                        [
                        'codigo' => '20126',
                        'asentamiento' => 'Lomas de La Asunción',
                        'tipo_asenta' => 'Fraccionamiento',
                        'municipio' => 'Aguascalientes',
                        'estado' => 'Aguascalientes',
                        'ciudad' => 'Aguascalientes',
                        'created_at'=>date('Y-m-d H:i:s'),
                        'updated_at'=>date('Y-m-d H:i:s')
                        ],
                        [
                        'codigo' => '20126',
                        'asentamiento' => 'Villa de Nuestra Señora de La Asunción Sector Encino',
                        'tipo_asenta' => 'Fraccionamiento',
                        'municipio' => 'Aguascalientes',
                        'estado' => 'Aguascalientes',
                        'ciudad' => 'Aguascalientes',
                        'created_at'=>date('Y-m-d H:i:s'),
                        'updated_at'=>date('Y-m-d H:i:s')
                        ],
                        [
                        'codigo' => '20126',
                        'asentamiento' => 'Villa de Nuestra Señora de La Asunción Sector Alameda',
                        'tipo_asenta' => 'Fraccionamiento',
                        'municipio' => 'Aguascalientes',
                        'estado' => 'Aguascalientes',
                        'ciudad' => 'Aguascalientes',
                        'created_at'=>date('Y-m-d H:i:s'),
                        'updated_at'=>date('Y-m-d H:i:s')
                        ],
                        [
                        'codigo' => '20126',
                        'asentamiento' => 'San José de Pozo Bravo',
                        'tipo_asenta' => 'Fraccionamiento',
                        'municipio' => 'Aguascalientes',
                        'estado' => 'Aguascalientes',
                        'ciudad' => 'Aguascalientes',
                        'created_at'=>date('Y-m-d H:i:s'),
                        'updated_at'=>date('Y-m-d H:i:s')
                        ],      
                        [
                            'codigo' => '20118',
                    'asentamiento' => 'Cerrada de la Mezquitera',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20119',
                    'asentamiento' => 'Lomas del Campestre 2a Sección',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20119',
                    'asentamiento' => 'Villas del Campestre',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20119',
                    'asentamiento' => 'Los Calicantos',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20120',
                    'asentamiento' => 'Jardines de la Concepción',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20120',
                    'asentamiento' => 'Los Bosques',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20120',
                    'asentamiento' => 'Rinconada los Bosques',
                    'tipo_asenta' => 'Condominio',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20123',
                    'asentamiento' => 'La Perla Norte',
                    'tipo_asenta' => 'Condominio',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20123',
                    'asentamiento' => 'Arroyo El Molino',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                   'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20124',
                    'asentamiento' => 'Galerías',
                    'tipo_asenta' => 'Zona comercial',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20124',
                    'asentamiento' => 'Residencial Altaria',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20126',
                    'asentamiento' => 'Villas de La Convención',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                        'codigo' => '20124',
                        'asentamiento' => 'Residencial Altaria',
                        'tipo_asenta' => 'Fraccionamiento',
                        'municipio' => 'Aguascalientes',
                        'estado' => 'Aguascalientes',
                        'ciudad' => 'Aguascalientes',
                        'created_at'=>date('Y-m-d H:i:s'),
                        'updated_at'=>date('Y-m-d H:i:s')
                        ],
                        [
                        'codigo' => '20126',
                        'asentamiento' => 'Villas de La Convención',
                        'tipo_asenta' => 'Fraccionamiento',
                        'municipio' => 'Aguascalientes',
                        'estado' => 'Aguascalientes',
                        'ciudad' => 'Aguascalientes',
                        'created_at'=>date('Y-m-d H:i:s'),
                        'updated_at'=>date('Y-m-d H:i:s')
                        ],
                        [
                        'codigo' => '20126',
                        'asentamiento' => 'Lomas de La Asunción',
                        'tipo_asenta' => 'Fraccionamiento',
                        'municipio' => 'Aguascalientes',
                        'estado' => 'Aguascalientes',
                        'ciudad' => 'Aguascalientes',
                        'created_at'=>date('Y-m-d H:i:s'),
                        'updated_at'=>date('Y-m-d H:i:s')
                        ],
                        [
                        'codigo' => '20126',
                        'asentamiento' => 'Villa de Nuestra Señora de La Asunción Sector Encino',
                        'tipo_asenta' => 'Fraccionamiento',
                        'municipio' => 'Aguascalientes',
                        'estado' => 'Aguascalientes',
                        'ciudad' => 'Aguascalientes',
                        'created_at'=>date('Y-m-d H:i:s'),
                        'updated_at'=>date('Y-m-d H:i:s')
                        ],
                        [
                        'codigo' => '20126',
                        'asentamiento' => 'Villa de Nuestra Señora de La Asunción Sector Alameda',
                        'tipo_asenta' => 'Fraccionamiento',
                        'municipio' => 'Aguascalientes',
                        'estado' => 'Aguascalientes',
                        'ciudad' => 'Aguascalientes',
                        'created_at'=>date('Y-m-d H:i:s'),
                        'updated_at'=>date('Y-m-d H:i:s')
                        ],
                        [
                        'codigo' => '20126',
                        'asentamiento' => 'San José de Pozo Bravo',
                        'tipo_asenta' => 'Fraccionamiento',
                        'municipio' => 'Aguascalientes',
                        'estado' => 'Aguascalientes',
                        'ciudad' => 'Aguascalientes',
                        'created_at'=>date('Y-m-d H:i:s'),
                        'updated_at'=>date('Y-m-d H:i:s')
                        ],      
                        [
                            'codigo' => '20118',
                    'asentamiento' => 'Cerrada de la Mezquitera',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20119',
                    'asentamiento' => 'Lomas del Campestre 2a Sección',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20119',
                    'asentamiento' => 'Villas del Campestre',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20119',
                    'asentamiento' => 'Los Calicantos',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20120',
                    'asentamiento' => 'Jardines de la Concepción',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20120',
                    'asentamiento' => 'Los Bosques',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20120',
                    'asentamiento' => 'Rinconada los Bosques',
                    'tipo_asenta' => 'Condominio',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20123',
                    'asentamiento' => 'La Perla Norte',
                    'tipo_asenta' => 'Condominio',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20123',
                    'asentamiento' => 'Arroyo El Molino',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                   'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20124',
                    'asentamiento' => 'Galerías',
                    'tipo_asenta' => 'Zona comercial',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20124',
                    'asentamiento' => 'Residencial Altaria',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20126',
                    'asentamiento' => 'Villas de La Convención',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                        'codigo' => '20124',
                        'asentamiento' => 'Residencial Altaria',
                        'tipo_asenta' => 'Fraccionamiento',
                        'municipio' => 'Aguascalientes',
                        'estado' => 'Aguascalientes',
                        'ciudad' => 'Aguascalientes',
                        'created_at'=>date('Y-m-d H:i:s'),
                        'updated_at'=>date('Y-m-d H:i:s')
                        ],
                        [
                        'codigo' => '20126',
                        'asentamiento' => 'Villas de La Convención',
                        'tipo_asenta' => 'Fraccionamiento',
                        'municipio' => 'Aguascalientes',
                        'estado' => 'Aguascalientes',
                        'ciudad' => 'Aguascalientes',
                        'created_at'=>date('Y-m-d H:i:s'),
                        'updated_at'=>date('Y-m-d H:i:s')
                        ],
                        [
                        'codigo' => '20126',
                        'asentamiento' => 'Lomas de La Asunción',
                        'tipo_asenta' => 'Fraccionamiento',
                        'municipio' => 'Aguascalientes',
                        'estado' => 'Aguascalientes',
                        'ciudad' => 'Aguascalientes',
                        'created_at'=>date('Y-m-d H:i:s'),
                        'updated_at'=>date('Y-m-d H:i:s')
                        ],
                        [
                        'codigo' => '20126',
                        'asentamiento' => 'Villa de Nuestra Señora de La Asunción Sector Encino',
                        'tipo_asenta' => 'Fraccionamiento',
                        'municipio' => 'Aguascalientes',
                        'estado' => 'Aguascalientes',
                        'ciudad' => 'Aguascalientes',
                        'created_at'=>date('Y-m-d H:i:s'),
                        'updated_at'=>date('Y-m-d H:i:s')
                        ],
                        [
                        'codigo' => '20126',
                        'asentamiento' => 'Villa de Nuestra Señora de La Asunción Sector Alameda',
                        'tipo_asenta' => 'Fraccionamiento',
                        'municipio' => 'Aguascalientes',
                        'estado' => 'Aguascalientes',
                        'ciudad' => 'Aguascalientes',
                        'created_at'=>date('Y-m-d H:i:s'),
                        'updated_at'=>date('Y-m-d H:i:s')
                        ],
                        [
                        'codigo' => '20126',
                        'asentamiento' => 'San José de Pozo Bravo',
                        'tipo_asenta' => 'Fraccionamiento',
                        'municipio' => 'Aguascalientes',
                        'estado' => 'Aguascalientes',
                        'ciudad' => 'Aguascalientes',
                        'created_at'=>date('Y-m-d H:i:s'),
                        'updated_at'=>date('Y-m-d H:i:s')
                        ],      
                        [
                            'codigo' => '20118',
                    'asentamiento' => 'Cerrada de la Mezquitera',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20119',
                    'asentamiento' => 'Lomas del Campestre 2a Sección',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20119',
                    'asentamiento' => 'Villas del Campestre',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20119',
                    'asentamiento' => 'Los Calicantos',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20120',
                    'asentamiento' => 'Jardines de la Concepción',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20120',
                    'asentamiento' => 'Los Bosques',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20120',
                    'asentamiento' => 'Rinconada los Bosques',
                    'tipo_asenta' => 'Condominio',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20123',
                    'asentamiento' => 'La Perla Norte',
                    'tipo_asenta' => 'Condominio',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20123',
                    'asentamiento' => 'Arroyo El Molino',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                   'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20124',
                    'asentamiento' => 'Galerías',
                    'tipo_asenta' => 'Zona comercial',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20124',
                    'asentamiento' => 'Residencial Altaria',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20126',
                    'asentamiento' => 'Villas de La Convención',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                        'codigo' => '20050',
                        'asentamiento' => 'Primavera',
                        'tipo_asenta' => 'Colonia',
                        'municipio' => 'Aguascalientes',
                        'estado' => 'Aguascalientes',
                        'ciudad' => 'Aguascalientes',
                        'created_at'=>date('Y-m-d H:i:s'),
                        'updated_at'=>date('Y-m-d H:i:s')
                        ],
                        [
                        'codigo' => '20050',
                        'asentamiento' => 'San Pablo',
                        'tipo_asenta' => 'Colonia',
                        'municipio' => 'Aguascalientes',
                        'estado' => 'Aguascalientes',
                        'ciudad' => 'Aguascalientes',
                        'created_at'=>date('Y-m-d H:i:s'),
                        'updated_at'=>date('Y-m-d H:i:s')
                        ],
                        [
                        'codigo' => '20059',
                        'asentamiento' => 'Guadalupe',
                        'tipo_asenta' => 'Colonia',
                        'municipio' => 'Aguascalientes',
                        'estado' => 'Aguascalientes',
                        'ciudad' => 'Aguascalientes',
                        'created_at'=>date('Y-m-d H:i:s'),
                        'updated_at'=>date('Y-m-d H:i:s')
                        ],
                        [
                        'codigo' => '20059',
                        'asentamiento' => 'Heliodoro Garcia',
                        'tipo_asenta' => 'Colonia',
                        'municipio' => 'Aguascalientes',
                        'estado' => 'Aguascalientes',
                        'ciudad' => 'Aguascalientes',
                        'created_at'=>date('Y-m-d H:i:s'),
                        'updated_at'=>date('Y-m-d H:i:s')
                        ],
                        [
                        'codigo' => '20064',
                        'asentamiento' => 'Valle del Rio San Pedro',
                        'tipo_asenta' => 'Fraccionamiento',
                        'municipio' => 'Aguascalientes',
                        'estado' => 'Aguascalientes',
                        'ciudad' => 'Aguascalientes',
                        'created_at'=>date('Y-m-d H:i:s'),
                        'updated_at'=>date('Y-m-d H:i:s')
                        ],
                        [
                        'codigo' => '20070',
                        'asentamiento' => 'Guadalupe Posada',
                        'tipo_asenta' => 'Unidad habitacional',
                        'municipio' => 'Aguascalientes',
                        'estado' => 'Aguascalientes',
                        'ciudad' => 'Aguascalientes',
                        'created_at'=>date('Y-m-d H:i:s'),
                        'updated_at'=>date('Y-m-d H:i:s')
                        ],
                        [
                        'codigo' => '20070',
                        'asentamiento' => 'San Marcos',
                        'tipo_asenta' => 'Colonia',
                        'municipio' => 'Aguascalientes',
                        'estado' => 'Aguascalientes',
                        'ciudad' => 'Aguascalientes',
                        'created_at'=>date('Y-m-d H:i:s'),
                        'updated_at'=>date('Y-m-d H:i:s')
                        ],
                        [
                        'codigo' => '20070',
                        'asentamiento' => 'San Marcos',
                        'tipo_asenta' => 'Barrio',
                        'municipio' => 'Aguascalientes',
                        'estado' => 'Aguascalientes',
                        'ciudad' => 'Aguascalientes',
                        'created_at'=>date('Y-m-d H:i:s'),
                        'updated_at'=>date('Y-m-d H:i:s')
                        ],
                        [
                        'codigo' => '20078',
                        'asentamiento' => 'San Marcos',
                        'tipo_asenta' => 'Fraccionamiento',
                        'municipio' => 'Aguascalientes',
                        'estado' => 'Aguascalientes',
                        'ciudad' => 'Aguascalientes',
                        'created_at'=>date('Y-m-d H:i:s'),
                        'updated_at'=>date('Y-m-d H:i:s')
                        ],
                        [
                        'codigo' => '20080',
                        'asentamiento' => 'Modelo',
                        'tipo_asenta' => 'Fraccionamiento',
                        'municipio' => 'Aguascalientes',
                        'estado' => 'Aguascalientes',
                        'ciudad' => 'Aguascalientes',
                        'created_at'=>date('Y-m-d H:i:s'),
                        'updated_at'=>date('Y-m-d H:i:s')
                        ],
                        [
                        'codigo' => '20080',
                        'asentamiento' => 'Residencial del Valle I',
                        'tipo_asenta' => 'Fraccionamiento',
                        'municipio' => 'Aguascalientes',
                        'estado' => 'Aguascalientes',
                        'ciudad' => 'Aguascalientes',
                        'created_at'=>date('Y-m-d H:i:s'),
                        'updated_at'=>date('Y-m-d H:i:s')
                        ],
             [
                'codigo' => '20050',
                'asentamiento' => 'Primavera',
                'tipo_asenta' => 'Colonia',
                'municipio' => 'Aguascalientes',
                'estado' => 'Aguascalientes',
                'ciudad' => 'Aguascalientes',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '20050',
                'asentamiento' => 'San Pablo',
                'tipo_asenta' => 'Colonia',
                'municipio' => 'Aguascalientes',
                'estado' => 'Aguascalientes',
                'ciudad' => 'Aguascalientes',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '20059',
                'asentamiento' => 'Guadalupe',
                'tipo_asenta' => 'Colonia',
                'municipio' => 'Aguascalientes',
                'estado' => 'Aguascalientes',
                'ciudad' => 'Aguascalientes',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '20059',
                'asentamiento' => 'Heliodoro Garcia',
                'tipo_asenta' => 'Colonia',
                'municipio' => 'Aguascalientes',
                'estado' => 'Aguascalientes',
                'ciudad' => 'Aguascalientes',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '20064',
                'asentamiento' => 'Valle del Rio San Pedro',
                'tipo_asenta' => 'Fraccionamiento',
                'municipio' => 'Aguascalientes',
                'estado' => 'Aguascalientes',
                'ciudad' => 'Aguascalientes',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '20070',
                'asentamiento' => 'Guadalupe Posada',
                'tipo_asenta' => 'Unidad habitacional',
                'municipio' => 'Aguascalientes',
                'estado' => 'Aguascalientes',
                'ciudad' => 'Aguascalientes',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '20070',
                'asentamiento' => 'San Marcos',
                'tipo_asenta' => 'Colonia',
                'municipio' => 'Aguascalientes',
                'estado' => 'Aguascalientes',
                'ciudad' => 'Aguascalientes',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '20070',
                'asentamiento' => 'San Marcos',
                'tipo_asenta' => 'Barrio',
                'municipio' => 'Aguascalientes',
                'estado' => 'Aguascalientes',
                'ciudad' => 'Aguascalientes',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '20078',
                'asentamiento' => 'San Marcos',
                'tipo_asenta' => 'Fraccionamiento',
                'municipio' => 'Aguascalientes',
                'estado' => 'Aguascalientes',
                'ciudad' => 'Aguascalientes',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '20080',
                'asentamiento' => 'Modelo',
                'tipo_asenta' => 'Fraccionamiento',
                'municipio' => 'Aguascalientes',
                'estado' => 'Aguascalientes',
                'ciudad' => 'Aguascalientes',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '20080',
                'asentamiento' => 'Residencial del Valle I',
                'tipo_asenta' => 'Fraccionamiento',
                'municipio' => 'Aguascalientes',
                'estado' => 'Aguascalientes',
                'ciudad' => 'Aguascalientes',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                    'codigo' => '20050',
                    'asentamiento' => 'Primavera',
                    'tipo_asenta' => 'Colonia',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20050',
                    'asentamiento' => 'San Pablo',
                    'tipo_asenta' => 'Colonia',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20059',
                    'asentamiento' => 'Guadalupe',
                    'tipo_asenta' => 'Colonia',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20059',
                    'asentamiento' => 'Heliodoro Garcia',
                    'tipo_asenta' => 'Colonia',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20064',
                    'asentamiento' => 'Valle del Rio San Pedro',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20070',
                    'asentamiento' => 'Guadalupe Posada',
                    'tipo_asenta' => 'Unidad habitacional',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20070',
                    'asentamiento' => 'San Marcos',
                    'tipo_asenta' => 'Colonia',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20070',
                    'asentamiento' => 'San Marcos',
                    'tipo_asenta' => 'Barrio',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20078',
                    'asentamiento' => 'San Marcos',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20080',
                    'asentamiento' => 'Modelo',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                    [
                    'codigo' => '20080',
                    'asentamiento' => 'Residencial del Valle I',
                    'tipo_asenta' => 'Fraccionamiento',
                    'municipio' => 'Aguascalientes',
                    'estado' => 'Aguascalientes',
                    'ciudad' => 'Aguascalientes',
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s')
                    ],
                     [
                'codigo' => '20050',
                'asentamiento' => 'Primavera',
                'tipo_asenta' => 'Colonia',
                'municipio' => 'Aguascalientes',
                'estado' => 'Aguascalientes',
                'ciudad' => 'Aguascalientes',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '20050',
                'asentamiento' => 'San Pablo',
                'tipo_asenta' => 'Colonia',
                'municipio' => 'Aguascalientes',
                'estado' => 'Aguascalientes',
                'ciudad' => 'Aguascalientes',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '20059',
                'asentamiento' => 'Guadalupe',
                'tipo_asenta' => 'Colonia',
                'municipio' => 'Aguascalientes',
                'estado' => 'Aguascalientes',
                'ciudad' => 'Aguascalientes',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '20059',
                'asentamiento' => 'Heliodoro Garcia',
                'tipo_asenta' => 'Colonia',
                'municipio' => 'Aguascalientes',
                'estado' => 'Aguascalientes',
                'ciudad' => 'Aguascalientes',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '20064',
                'asentamiento' => 'Valle del Rio San Pedro',
                'tipo_asenta' => 'Fraccionamiento',
                'municipio' => 'Aguascalientes',
                'estado' => 'Aguascalientes',
                'ciudad' => 'Aguascalientes',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '20070',
                'asentamiento' => 'Guadalupe Posada',
                'tipo_asenta' => 'Unidad habitacional',
                'municipio' => 'Aguascalientes',
                'estado' => 'Aguascalientes',
                'ciudad' => 'Aguascalientes',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '20070',
                'asentamiento' => 'San Marcos',
                'tipo_asenta' => 'Colonia',
                'municipio' => 'Aguascalientes',
                'estado' => 'Aguascalientes',
                'ciudad' => 'Aguascalientes',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '20070',
                'asentamiento' => 'San Marcos',
                'tipo_asenta' => 'Barrio',
                'municipio' => 'Aguascalientes',
                'estado' => 'Aguascalientes',
                'ciudad' => 'Aguascalientes',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '20078',
                'asentamiento' => 'San Marcos',
                'tipo_asenta' => 'Fraccionamiento',
                'municipio' => 'Aguascalientes',
                'estado' => 'Aguascalientes',
                'ciudad' => 'Aguascalientes',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '20080',
                'asentamiento' => 'Modelo',
                'tipo_asenta' => 'Fraccionamiento',
                'municipio' => 'Aguascalientes',
                'estado' => 'Aguascalientes',
                'ciudad' => 'Aguascalientes',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '20080',
                'asentamiento' => 'Residencial del Valle I',
                'tipo_asenta' => 'Fraccionamiento',
                'municipio' => 'Aguascalientes',
                'estado' => 'Aguascalientes',
                'ciudad' => 'Aguascalientes',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '20050',
                'asentamiento' => 'Primavera',
                'tipo_asenta' => 'Colonia',
                'municipio' => 'Aguascalientes',
                'estado' => 'Aguascalientes',
                'ciudad' => 'Aguascalientes',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '20050',
                'asentamiento' => 'San Pablo',
                'tipo_asenta' => 'Colonia',
                'municipio' => 'Aguascalientes',
                'estado' => 'Aguascalientes',
                'ciudad' => 'Aguascalientes',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '20059',
                'asentamiento' => 'Guadalupe',
                'tipo_asenta' => 'Colonia',
                'municipio' => 'Aguascalientes',
                'estado' => 'Aguascalientes',
                'ciudad' => 'Aguascalientes',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '20059',
                'asentamiento' => 'Heliodoro Garcia',
                'tipo_asenta' => 'Colonia',
                'municipio' => 'Aguascalientes',
                'estado' => 'Aguascalientes',
                'ciudad' => 'Aguascalientes',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '20064',
                'asentamiento' => 'Valle del Rio San Pedro',
                'tipo_asenta' => 'Fraccionamiento',
                'municipio' => 'Aguascalientes',
                'estado' => 'Aguascalientes',
                'ciudad' => 'Aguascalientes',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '20070',
                'asentamiento' => 'Guadalupe Posada',
                'tipo_asenta' => 'Unidad habitacional',
                'municipio' => 'Aguascalientes',
                'estado' => 'Aguascalientes',
                'ciudad' => 'Aguascalientes',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '20070',
                'asentamiento' => 'San Marcos',
                'tipo_asenta' => 'Colonia',
                'municipio' => 'Aguascalientes',
                'estado' => 'Aguascalientes',
                'ciudad' => 'Aguascalientes',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '20070',
                'asentamiento' => 'San Marcos',
                'tipo_asenta' => 'Barrio',
                'municipio' => 'Aguascalientes',
                'estado' => 'Aguascalientes',
                'ciudad' => 'Aguascalientes',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '20078',
                'asentamiento' => 'San Marcos',
                'tipo_asenta' => 'Fraccionamiento',
                'municipio' => 'Aguascalientes',
                'estado' => 'Aguascalientes',
                'ciudad' => 'Aguascalientes',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '20080',
                'asentamiento' => 'Modelo',
                'tipo_asenta' => 'Fraccionamiento',
                'municipio' => 'Aguascalientes',
                'estado' => 'Aguascalientes',
                'ciudad' => 'Aguascalientes',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '20080',
                'asentamiento' => 'Residencial del Valle I',
                'tipo_asenta' => 'Fraccionamiento',
                'municipio' => 'Aguascalientes',
                'estado' => 'Aguascalientes',
                'ciudad' => 'Aguascalientes',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '30526',
                'asentamiento' => 'El Paraíso',
                'tipo_asenta' => 'Colonia',
                'municipio' => 'Villa Corzo',
                'estado' => 'Chiapas',
                'ciudad' => '',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '30526',
                'asentamiento' => 'Michoacán',
                'tipo_asenta' => 'Colonia',
                'municipio' => 'Villa Corzo',
                'estado' => 'Chiapas',
                'ciudad' => '',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '30527',
                'asentamiento' => 'Monterrey',
                'tipo_asenta' => 'Ejido',
                'municipio' => 'Villa Corzo',
                'estado' => 'Chiapas',
                'ciudad' => '',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '30527',
                'asentamiento' => 'La Sierrita',
                'tipo_asenta' => 'Colonia',
                'municipio' => 'Villa Corzo',
                'estado' => 'Chiapas',
                'ciudad' => '',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '30527',
                'asentamiento' => 'Los Amates',
                'tipo_asenta' => 'Colonia',
                'municipio' => 'Villa Corzo',
                'estado' => 'Chiapas',
                'ciudad' => '',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '30527',
                'asentamiento' => 'El Palomar',
                'tipo_asenta' => 'Ranchería',
                'municipio' => 'Villa Corzo',
                'estado' => 'Chiapas',
                'ciudad' => '',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '30527',
                'asentamiento' => 'El Carmen',
                'tipo_asenta' => 'Colonia',
                'municipio' => 'Villa Corzo',
                'estado' => 'Chiapas',
                'ciudad' => '',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '30527',
                'asentamiento' => 'Sierra Morena',
                'tipo_asenta' => 'Colonia',
                'municipio' => 'Villa Corzo',
                'estado' => 'Chiapas',
                'ciudad' => '',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '30527',
                'asentamiento' => 'Francisco I. Madero',
                'tipo_asenta' => 'Ranchería',
                'municipio' => 'Villa Corzo',
                'estado' => 'Chiapas','ciudad' => '',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '40771',
                'asentamiento' => 'La Ordeña',
                'tipo_asenta' => 'Ranchería',
                'municipio' => 'Zirándaro',
                'estado' => 'Guerrero',
                'ciudad' => '',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [      
                'codigo' => '40772',
                'asentamiento' => 'Ziritzicuaro',
                'tipo_asenta' => 'Ranchería',
                'municipio' => 'Zirándaro',
                'estado' => 'Guerrero',
                'ciudad' => '',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '40773',
                'asentamiento' => 'La Barranca Honda',
                'tipo_asenta' => 'Ranchería',
                'municipio' => 'Zirándaro',
                'estado' => 'Guerrero',
                'ciudad' => '',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '40775',
                'asentamiento' => 'Huitzátaro',
                'tipo_asenta' => 'Ranchería',
                'municipio' => 'Zirándaro',
                'estado' => 'Guerrero',
                'ciudad' => '',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '40775',
                'asentamiento' => 'Carachurio (Carachurio el Nuevo)',
                'tipo_asenta' => 'Ranchería','municipio' => 'Zirándaro',
                'estado' => 'Guerrero',
                'ciudad' => '',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '49595',
                'asentamiento' => 'Las Ánimas',
                'tipo_asenta' => 'Ranchería',
                'municipio' => 'Quitupan',
                'estado' => 'Jalisco',
                'ciudad' => '',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '49595',
                'asentamiento' => 'Loma Blanca (Los Capulines)',
                'tipo_asenta' => 'Ranchería',
                'municipio' => 'Quitupan',
                'estado' => 'Jalisco',
                'ciudad' => '',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '49597',
                'asentamiento' => 'San José de la Majada',
                'tipo_asenta' => 'Ranchería',
                'municipio' => 'Quitupan',
                'estado' => 'Jalisco',
                'ciudad' => '',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '49597',
                'asentamiento' => 'El Fiscalejo',
                'tipo_asenta' => 'Poblado comunal',
                'municipio' => 'Quitupan',
                'estado' => 'Jalisco',
                'ciudad' => '',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '49598',
                'asentamiento' => 'El Salitrillo',
                'tipo_asenta' => 'Ranchería',
                'municipio' => 'Quitupan',
                'estado' => 'Jalisco',
                'ciudad' => '',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '49600',
                'asentamiento' => 'Zapotiltic Centro',
                'tipo_asenta' => 'Colonia',
                'municipio' => 'Zapotiltic',
                'estado' => 'Jalisco',
                'ciudad' => 'Zapotiltic',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '49602',
                'asentamiento' => 'Chavez Pulido',
                'tipo_asenta' => 'Colonia',
                'municipio' => 'Zapotiltic',
                'estado' => 'Jalisco',
                'ciudad' => 'Zapotiltic',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '49602',
                'asentamiento' => 'La Cruz',
                'tipo_asenta' => 'Fraccionamiento',
                'municipio' => 'Zapotiltic',
                'estado' => 'Jalisco',
                'ciudad' => 'Zapotiltic',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '49602',
                'asentamiento' => 'Lázaro Cárdenas',
                'tipo_asenta' => 'Colonia',
                'municipio' => 'Zapotiltic',
                'estado' => 'Jalisco',
                'ciudad' => 'Zapotiltic',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '49602',
                'asentamiento' => 'La Presa',
                'tipo_asenta' => 'Colonia',
                'municipio' => 'Zapotiltic',
                'estado' => 'Jalisco',
                'ciudad' => 'Zapotiltic',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '49603',
                'asentamiento' => 'Guadalupana',
                'tipo_asenta' => 'Colonia',
                'municipio' => 'Zapotiltic',
                'estado' => 'Jalisco',
                'ciudad' => 'Zapotiltic',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '49603',
                'asentamiento' => 'Colinde',
                'tipo_asenta' => 'Colonia',
                'municipio' => 'Zapotiltic',
                'estado' => 'Jalisco',
                'ciudad' => 'Zapotiltic',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '49604',
                'asentamiento' => 'Tolteca',
                'tipo_asenta' => 'Colonia',
                'municipio' => 'Zapotiltic',
                'estado' => 'Jalisco',
                'ciudad' => 'Zapotiltic',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '49604',
                'asentamiento' => 'Marentes',
                'tipo_asenta' => 'Fraccionamiento',
                'municipio' => 'Zapotiltic',
                'estado' => 'Jalisco',
                'ciudad' => 'Zapotiltic',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '49604',
                'asentamiento' => '5 de Noviembre',
                'tipo_asenta' => 'Colonia',
                'municipio' => 'Zapotiltic',
                'estado' => 'Jalisco',
                'ciudad' => 'Zapotiltic',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '49605',
                'asentamiento' => 'Primavera',
                'tipo_asenta' => 'Colonia',
                'municipio' => 'Zapotiltic',
                'estado' => 'Jalisco',
                'ciudad' => 'Zapotiltic',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '49953',
                'asentamiento' => 'El Maríz',
                'tipo_asenta' => 'Poblado comunal',
                'municipio' => 'Jilotlán de los Dolores',
                'estado' => 'Jalisco',
                'ciudad' => '',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '49953',
                'asentamiento' => 'Salatito Uno (Santa Inés)',
                'tipo_asenta' => 'Ranchería',
                'municipio' => 'Jilotlán de los Dolores',
                'estado' => 'Jalisco',
                'ciudad' => '',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '49955',
                'asentamiento' => 'Villa Doctor Gómez (Las Lomas)',
                'tipo_asenta' => 'Pueblo',
                'municipio' => 'Jilotlán de los Dolores',
                'estado' => 'Jalisco',
                'ciudad' => '',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '49956',
                'asentamiento' => 'Atravesaño y Anexas',
                'tipo_asenta' => 'Congregación',
                'municipio' => 'Jilotlán de los Dolores',
                'estado' => 'Jalisco',
                'ciudad' => '',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '49957',
                'asentamiento' => 'Tachinola',
                'tipo_asenta' => 'Hacienda',
                'municipio' => 'Jilotlán de los Dolores',
                'estado' => 'Jalisco',
                'ciudad' => '',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '49959',
                'asentamiento' => 'Tazumbos',
                'tipo_asenta' => 'Congregación',
                'municipio' => 'Jilotlán de los Dolores',
                'estado' => 'Jalisco',
                'ciudad' => '',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '49960',
                'asentamiento' => 'Canchol',
                'tipo_asenta' => 'Congregación',
                'municipio' => 'Jilotlán de los Dolores',
                'estado' => 'Jalisco',
                'ciudad' => '',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '49963',
                'asentamiento' => 'El Limón (La Limonera)',
                'tipo_asenta' => 'Poblado comunal',
                'municipio' => 'Jilotlán de los Dolores',
                'estado' => 'Jalisco',
                'ciudad' => '',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '49968',
                'asentamiento' => 'Corongoros',
                'tipo_asenta' => 'Congregación',
                'municipio' => 'Jilotlán de los Dolores',
                'estado' => 'Jalisco',
                'ciudad' => '',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '49968',
                'asentamiento' => 'Los Olivos',
                'tipo_asenta' => 'Ranchería',
                'municipio' => 'Jilotlán de los Dolores',
                'estado' => 'Jalisco',
                'ciudad' => '',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '49970',
                'asentamiento' => 'Santa Maria Del Oro',
                'tipo_asenta' => 'Pueblo',
                'municipio' => 'Santa María del Oro',
                'estado' => 'Jalisco',
                'ciudad' => '',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '49977',
                'asentamiento' => 'La Aurora',
                'tipo_asenta' => 'Ranchería',
                'municipio' => 'Santa María del Oro',
                'estado' => 'Jalisco',
                'ciudad' => '',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '49979',
                'asentamiento' => 'El Tepeguaje',
                'tipo_asenta' => 'Ranchería',
                'municipio' => 'Santa María del Oro',
                'estado' => 'Jalisco',
                'ciudad' => '',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '49990',
                'asentamiento' => 'Los Plátanos',
                'tipo_asenta' => 'Colonia',
                'municipio' => 'Santa María del Oro',
                'estado' => 'Jalisco',
                'ciudad' => '',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '49994',
                'asentamiento' => 'Zipoco',
                'tipo_asenta' => 'Ranchería',
                'municipio' => 'Santa María del Oro',
                'estado' => 'Jalisco',
                'ciudad' => '',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '49994',
                'asentamiento' => 'Las Parotas',
                'tipo_asenta' => 'Ranchería',
                'municipio' => 'Santa María del Oro',
                'estado' => 'Jalisco',
                'ciudad' => '',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '50000',
                'asentamiento' => 'Toluca de Lerdo Centro',
                'tipo_asenta' => 'Colonia',
                'municipio' => 'Toluca',
                'estado' => 'México',
                'ciudad' => 'Toluca de Lerdo',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '50010',
                'asentamiento' => 'Celanese',
                'tipo_asenta' => 'Colonia',
                'municipio' => 'Toluca',
                'estado' => 'México',
                'ciudad' => 'Toluca de Lerdo',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '50010',
                'asentamiento' => 'Club Jardín',
                'tipo_asenta' => 'Colonia',
                'municipio' => 'Toluca',
                'estado' => 'México',
                'ciudad' => 'Toluca de Lerdo',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '50010',
                'asentamiento' => 'Guadalupe',
                'tipo_asenta' => 'Colonia',
                'municipio' => 'Toluca',
                'estado' => 'México',
                'ciudad' => 'Toluca de Lerdo',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '50010',
                'asentamiento' => 'La Cruz Comalco',
                'tipo_asenta' => 'Colonia',
                'municipio' => 'Toluca',
                'estado' => 'México',
                'ciudad' => 'Toluca de Lerdo',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '50010',
                'asentamiento' => 'La Magdalena',
                'tipo_asenta' => 'Colonia',
                'municipio' => 'Toluca',
                'estado' => 'México',
                'ciudad' => 'Toluca de Lerdo',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '51350',
                'asentamiento' => 'San Miguel Zinacantepec',
                'tipo_asenta' => 'Pueblo',
                'municipio' => 'Zinacantepec',
                'estado' => 'México',
                'ciudad' => '',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '51354',
                'asentamiento' => 'La Joya',
                'tipo_asenta' => 'Colonia',
                'municipio' => 'Zinacantepec',
                'estado' => 'México',
                'ciudad' => '',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '51354',
                'asentamiento' => 'De San Miguel',
                'tipo_asenta' => 'Barrio',
                'municipio' => 'Zinacantepec',
                'estado' => 'México',
                'ciudad' => '',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                [
                'codigo' => '51354',
                'asentamiento' => 'Del Calvario',
                'tipo_asenta' => 'Barrio',
                'municipio' => 'Zinacantepec',
                'estado' => 'México',
                'ciudad' => '',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ],
                ]);
         }
}