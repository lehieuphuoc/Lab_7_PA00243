<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();
        // \DB::table('users')->insert([
        //     'name' => 'Lê Hiểu Phước',
        //     'email' => 'lehieuphuoc35205@gmail.com',
        //     'password' => bcrypt('admin2005'),
        //     'idgroup' => 1,
        //     'diachi' => 'Thanh Hóa'
        // ]);

        \Illuminate\Support\Facades\DB::table('users')->insert([
            'name' => 'Lê Hiểu Phước',
            'email' => 'lehieuphuoc35205@gmail.com',
            'password' => bcrypt('admin2005'),
            'idgroup' => 1,
            'diachi' => 'Thanh Hóa'
        ]);
        \Illuminate\Support\Facades\DB::table('users')->insert([
            'name' => 'Phước Hiểu Lê',
            'email' => 'lhp35205@gmail.com',
            'password' => bcrypt('admin2005'),
            'idgroup' => 1,
            'diachi' => 'Thanh Hóa'
        ]);
        \Illuminate\Support\Facades\DB::table('users')->insert([
            'name' => 'Trịnh Văn A',
            'email' => 'trinhvana205@gmail.com',
            'password' => bcrypt('admin2005'),
            'idgroup' => 0,
            'diachi' => 'Hà Nội'
        ]);

        
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
