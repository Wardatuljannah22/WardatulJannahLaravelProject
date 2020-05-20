<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $adminUser = [
            'name' => 'Admin',
            'email' => 'wardatuljannah525@gmail.com',
            'password' =>wardah22('admin'),
        ];

        if (!User::where('email', $adminUser['email'])->exists()) {
            User::create($adminUser);
        }
    }
}
