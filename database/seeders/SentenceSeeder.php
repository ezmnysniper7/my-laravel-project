<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sentence;

class SentenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Sentence::insert([
            ['text' => 'Borong.com', 'row' => 1, 'column' => 2, 'color' => '#FF0000', 'styling' => null],
            ['text' => 'B2B Marketplace', 'row' => 3, 'column' => 1, 'color' => '#000000', 'styling' => null],
            ['text' => 'SaaS enabled marketplace', 'row' => 2, 'column' => 3, 'color' => '#000000', 'styling' => null],
            ['text' => 'Provide Transparency', 'row' => 4, 'column' => 4, 'color' => '#000000', 'styling' => null],
            ['text' => 'Build Trust', 'row' => 1, 'column' => 4, 'color' => '#000000', 'styling' => null],
        ]);
    }
    
}
