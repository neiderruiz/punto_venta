<?php

use App\Models\Producto;
use App\Models\Vendedor;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        factory(Producto::class, 50)->create();
        factory(Vendedor::class, 50)->create();
    }
}
