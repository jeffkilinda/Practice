<?php

use Illuminate\Database\Seeder;
use App\Tip;
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

        factory(Tip::class,5)->create();
    }
}
