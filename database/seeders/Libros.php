<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Libros extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $libros =[
            [
                'ISBN' => '00982',
                'titulo' => 'Cien años de Soledad',		
                'precio' =>80200,
                'editorial_fk'=>1
            ],
            [
                'ISBN' => '12335',
                'titulo' => '¿Quien se ha llevado mi Queso?',		
                'precio' => 25000,
                'editorial_fk'=> 2
            ]
        ];
        DB::table('libro')->insert($libros);
    }
}
