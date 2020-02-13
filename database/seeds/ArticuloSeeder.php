<?php
use App\Alumno;
use App\Articulo;
use Illuminate\Database\Seeder;

class ArticuloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articulos')->truncate();

        Articulo::create([
            'nombre' => 'Lavadora',
            'categoria' => 'Bazar',
            'precio' => '40',
            'stock' => '13',
        ]);

        Articulo::create([
            'nombre' => 'Armario',
            'categoria' => 'Hogar',
            'precio' => '24',
            'stock' => '55',
        ]);

        Articulo::create([
            'nombre' => 'Television',
            'categoria' => 'Electronica',
            'precio' => '89',
            'stock' => '40',
        ]);

        Articulo::create([
            'nombre' => 'Movil',
            'categoria' => 'Electronica',
            'precio' => '66',
            'stock' => '25',
        ]);

        Articulo::create([
            'nombre' => 'Camiseta',
            'categoria' => 'Bazar',
            'precio' => '30',
            'stock' => '78',
        ]);
    }
}
