<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\HelpingCenter;

class HelpingCentersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Create five helping centers with user_id 1
        for ($i = 1; $i <= 5; $i++) {
            HelpingCenter::create([
                'name' => "Helping Center $i",
                'address' => "Address $i",
                'phone' => "555-123-456$i",
                'description' => "This is Helping Center $i description.",
                'user_id' => 1,
            ]);
        }
    }
}
