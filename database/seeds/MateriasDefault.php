<?php

use Illuminate\Database\Seeder;

class MateriasDefault extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $materias = [
            [
                'nombre' => 'PROGRAMACIÓN BÁSICA'
            ],
            [
                'nombre' => 'ESTRUCTURAS DE DATOS'
            ],
            [
                'nombre' => 'PROGRAMACIÓN ORIENTADA A OBJETOS'
            ],
            [
                'nombre' => 'PROGRAMACIO WEB'
            ],
            [
                'nombre' => 'INGENIERÍA DE SOFTWARE'
            ],
            [
                'nombre' => 'BASE DE DATOS'
            ],
            [
                'nombre' => 'ARQUITECTURA DE DATOS'
            ],
            [
                'nombre' => 'ESTRUCTURA DE INTERNET SERVICIOS Y SERVIDORES'
            ],
            [
                'nombre' => 'DISEÑO DE ALGORITMOS'
            ],
            [
                'nombre' => 'INGENIERÍA ECONÓMICA'
            ],
            [
                'nombre' => 'SISTEMAS DISTRIBUIDOS'
            ]
        ];


        foreach ($materias as $materia){
            \App\Materia::create($materia);

        }
    }
}
