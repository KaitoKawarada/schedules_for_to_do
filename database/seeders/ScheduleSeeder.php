<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('schedules')->insert([
            'event_title' => 'レバテック発表日',
            'event_body' => 'スライドを用意すること',
            'start_date' => '2023-12-27',
            'end_date' => '2023-12-28',
            'event_color' => 'green',
            'event_border_color' => 'green',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
