<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Data dummy
        $admin1 = User::create([
            'name'      => 'Wahyu',
            'email'     => 'wahyu@gmail.com',
            'password'  => bcrypt('wahyu123'),
            'role'    => 'admin',
        ]);

        $admin1->assignRole('admin');
    }
}
