<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrayData = [
            [
                'name' => 'Super Admin',
                'email' => 'super@admin.com',
                'password' => Hash::make("12345678"),
                'phone' => "083840399512",
                'level' => 84,
            ],
            [
                'name' => 'Ahmad Al Fatih Budiman',
                'email' => 'muribudiman@gmail.com',
                'password' => Hash::make("123456"),
                'level' => 85,
            ],
            [
                'name' => 'Hawa Inshira Budiman',
                'email' => 'muri.budiman@amscloud.co.id',
                'password' => Hash::make("123456"),
                'level' => 85,
            ],
            [
                'name' => 'Skala',
                'email' => 'test@skala.dev',
                'password' => Hash::make("123456")
            ],
            [
                'name' => 'Zohan Nazarudin S.Kom, M.Kom',
                'email' => 'zohan69@gmail.com',
                'password' => Hash::make("123456")
            ],
        ];
        
        foreach($arrayData as $key => $value) {
            User::create($value);
        }
    }
}
