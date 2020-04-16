<?php

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
        // $this->call(UsersTableSeeder::class);
        $this->call(type_productsTableSeeder::class);

        $this->call(ProductTableSeeder::class);

        $this->call(QuanCfNgonTableSeeder::class);

        $this->call(BaiVietTableSeeder::class);

        $this->call(UsersTableSeeder::class);


    }
}
