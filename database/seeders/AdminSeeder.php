<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'Admin KPR',
            'email' => 'kprsttnf@nurulfikri.ac.id',
            'nim' => '69696969',
            'year' => 2021,
            'status' => 1,
            'major' => '-',
            'password' => bcrypt('kprsttnf!@#'),
        ]);

        $user->assignRole('admin');
    }
}
