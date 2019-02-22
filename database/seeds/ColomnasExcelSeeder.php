<?php

use Illuminate\Database\Seeder;
use App\Columnasexcel;

class ColomnasExcelSeeder extends Seeder
{
    /*
    'nombre',
    'descripcion',
    'orden',
    'seleccionada',
    'provincia_id',
    'slug'
    */
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Colomnasexcel::create([
          'nombre'          =>'Navegar Usuarios' ,
          'descripcion'     =>'Descripcion',
          'orden'           =>1,
          'seleccionada'    => 'SI',
          'provincia_id'    => 1,
          'slug'          => 'columnasexcel-1-1-0001',
        ]);

        Permission::create([
          'name'          =>'Ver detalle de Usuario' ,
          'slug'          => 'users.show',
          'description'   => 'Ver en detalle cada usuario del sistema',
        ]);
    }
}
