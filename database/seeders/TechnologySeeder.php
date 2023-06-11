<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tencologies = [
            'Php',
            'Html',
            'Css',
            'JavaScript',
            'Python',
            'Java',
            'C++',
            'Ruby',
            'Swift',
        ];

        foreach($tencologies as $tencology){
            $newTecnology = new Technology();
            $newTecnology->name = $tencology;
            $newTecnology->slug = Str::slug($tencology, '-');
            $newTecnology->save();
        }
    }
}
