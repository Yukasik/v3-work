<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Zone;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Zone::create([
            'name'=>'VR-Пространство',
            'price'=>'500 руб/час',
            'type'=>'VR-аттракционы'
        ]);

        Zone::create([
            'name'=>'PlayStation Lounge',
            'price'=>'300 руб/час',
            'type'=>'игры на консолях'
        ]);
        
        Zone::create([
            'name'=>'Настольный мир',
            'price'=>'200 руб/час',
            'type'=>'настольные игры'
        ]);        
    }
}
