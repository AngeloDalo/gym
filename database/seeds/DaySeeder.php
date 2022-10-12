<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Day;

class DaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $days = [
            [
                'name' => 'Lunedì'
            ],
            [
                'name' => 'Martedì'
            ],
            [
                'name' => 'Mercoledì'
            ],
            [
                'name' => 'Giovedì'
            ],
            [
                'name' => 'Venerdì'
            ],
            [
                'name' => 'Sabato'
            ],
            [
                'name' => 'Domenica'
            ],
        ];

        foreach ($days as $day) {
            $newDay = new Day();
            $newDay->name = $day['name'];
            $newDay->save();
        }
    }
}
