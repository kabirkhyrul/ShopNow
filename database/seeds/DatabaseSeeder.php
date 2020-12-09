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
        // Adding an admin user
        $user = factory(App\Models\User::class, 1)->create([
            'email' => 'admin@admin.com',
            'password' => \Hash::make('123456'),
        ]);
        $this->call(PermissionsSeeder::class);

        // $this->call(BannerSeeder::class);
        // $this->call(CategorySeeder::class);
        // $this->call(UserSeeder::class);
        // $this->call(ReviewSeeder::class);
        // $this->call(OrderSeeder::class);
        // $this->call(GeneralSettingSeeder::class);
        // $this->call(ProductSeeder::class);
        // $this->call(CouponSeeder::class);
        // $this->call(OrderDetailSeeder::class);
    }
}
