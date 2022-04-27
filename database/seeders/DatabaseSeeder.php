<?php
namespace Database\Seeders;
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
        $this->call([
            RoleSeeder::class,
            categories::class,
            subcategories::class,
            Statuses::class,
            sizes::class,
            discounts::class,
            tax::class,
            users::class
        ]);
    }
}
