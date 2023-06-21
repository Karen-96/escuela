<?php

namespace Database\Seeders;

use App\Models\Estado;
use App\Models\Filial;
use App\Models\Rol;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Estado::firstOrCreate([
            'nombre' => 'ACTIVO',
        ]);

         // ESTADO de un usuario
        Estado::firstOrCreate([
            'nombre' => 'DESACTIVADO',
        ]);

        // ROL de un usuario
        Rol::firstOrCreate([
            'nombre' => 'ADMINISTRADOR',
        ]);

        // ROL de un usuario
        Rol::firstOrCreate([
            'nombre' => 'ALUMNO',
        ]);

        // ROL de un usuario
        Rol::firstOrCreate([
            'nombre' => 'INSTRUCTOR',
        ]);

        // Filial
        Filial::firstOrCreate([
            'pais' => 'ARGENTINA',
            'provincia' => 'CHUBUT',
            'localidad' => 'PUERTO MADRYN',
            'codigo_postal' => '9120',
            'direccion' => 'Josefa del pino 943',
        ]);

         /*Usuario karen*/
        $clave = Hash::make('123456789');
        User::firstOrCreate([
            'username' => '39867234',
            'nombre' => 'Karen',
            'apellido' => 'Apablaza',
            'email' => 'apablazakaren8@gmail.com',
            'fecha_nacimiento' => '1996-12-20',
            'documento' => '39867234',
            'genero' => 'F',
            'estado_civil' => 'soltera',
            'telefono' => '2804848399',
            'instrumento_estudio' => 'clarinete',
            'reglamento'=>'SI',
            'password' => $clave,
            'id_estado'=>1,
            'id_rol' => 2,
            'id_filial'=>1,
        ]);
    }
}
