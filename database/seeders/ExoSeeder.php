<?php

namespace Database\Seeders;

use App\Models\Exo;
use App\Models\Pdffile;
use App\Models\Video;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Exo::factory(50)->create();
        Pdffile::factory(50)->create();
        Video::factory(50)->create();
    }
}
