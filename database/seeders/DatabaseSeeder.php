<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // User::create([
        //     'id' => Str::uuid(),
        //     'name' => 'Sarah Nurhasna',
        //     'email' => 'sarah2501.snk@gmail.com',
        //     'password' => bcrypt('Sarah123'),
        //     'privatekey' => bcrypt('12345'),
        //     'publickey' => bcrypt('98765'),
        //     'symkey' => bcrypt('1234567890'),
        //     'phone' => '0818647999',
        //     'dateofbirth' => '2004-01-25',
        //     'gender' => 'female',
        //     'address' => 'surabaya',
        //     'picture' => 'this is pic',
        //     'pdf' => 'this is pdf',
        //     'video' => 'this is vid'
        // ]);

        User::create([
            'id' => Str::uuid(),
            'name' => 'Test',
            'email' => 'tes@gmail.com',
            'password' => bcrypt('tes'),
            'privatekey' => bcrypt('tes'),
            'publickey' => bcrypt('set'),
            'symkey' => bcrypt('tse'),
            'phone' => '08186436634',
            'dateofbirth' => '2002-01-02',
            'gender' => 'male',
            'address' => 'surabaya',
            'picture' => 'this is pic',
            'pdf' => 'this is pdf',
            'video' => 'this is vid'
        ]);
    }
}
