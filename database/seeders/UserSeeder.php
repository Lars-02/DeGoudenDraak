<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Database\Factories\UserFactory;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::factory()
            ->create([
                'firstname' => 'Super',
                'lastname' => 'Admin',
                'email' => 'admin@admin.com']);
        $admin->roles()->sync(Role::all()->where('name','Admin'));

        User::factory()->count(40)->create();
    }
}
