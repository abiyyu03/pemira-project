<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = [
            [
                "name" => "Admin",
                "guard_name" => "web"
            ],
            [
                "name" => "User",
                "guard_name" => "web"
            ],
        ];

        Role::insert($role);
    }
}
