<?php

use Illuminate\Database\Seeder;
use App\Department;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Department::create(['country_id' => 1, 'name' => 'Amazonas']);
        Department::create(['country_id' => 1, 'name' => 'Antioquia']);
        Department::create(['country_id' => 1, 'name' => 'Arauca']);
        Department::create(['country_id' => 1, 'name' => 'Atlántico']);
        Department::create(['country_id' => 1, 'name' => 'Bolivar']);
        Department::create(['country_id' => 1, 'name' => 'Boyacá']);
        Department::create(['country_id' => 1, 'name' => 'Caldas']);
        Department::create(['country_id' => 1, 'name' => 'Caquetá']);
        Department::create(['country_id' => 1, 'name' => 'Casanare']);
        Department::create(['country_id' => 1, 'name' => 'Cauca']);
        Department::create(['country_id' => 1, 'name' => 'Cesar']);
        Department::create(['country_id' => 1, 'name' => 'Chocó']);
        Department::create(['country_id' => 1, 'name' => 'Córdoba']);
        Department::create(['country_id' => 1, 'name' => 'Cundinamarca']);
        Department::create(['country_id' => 1, 'name' => 'Guainia']);
        Department::create(['country_id' => 1, 'name' => 'Guaviare']);
        Department::create(['country_id' => 1, 'name' => 'Huila']);
        Department::create(['country_id' => 1, 'name' => 'La Guajira']);
        Department::create(['country_id' => 1, 'name' => 'Magdalena']);
        Department::create(['country_id' => 1, 'name' => 'Meta']);
        Department::create(['country_id' => 1, 'name' => 'Ñariño']);
        Department::create(['country_id' => 1, 'name' => 'Norte de santander']);
        Department::create(['country_id' => 1, 'name' => 'Putumayo']);
        Department::create(['country_id' => 1, 'name' => 'Quindío']);
        Department::create(['country_id' => 1, 'name' => 'Risaralda']);
        Department::create(['country_id' => 1, 'name' => 'San Andrés y Providencia']);
        Department::create(['country_id' => 1, 'name' => 'Santander']);
        Department::create(['country_id' => 1, 'name' => 'Sucre']);
        Department::create(['country_id' => 1, 'name' => 'Tolima']);
        Department::create(['country_id' => 1, 'name' => 'Valle del cauca']);
        Department::create(['country_id' => 1, 'name' => 'Vaupés ']);
        Department::create(['country_id' => 1, 'name' => 'Vichada']);
    }
}
