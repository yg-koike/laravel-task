<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChannelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = ['HIKAKIN', 'シバター', 'マックスむらい', '瀬戸弘司'];

        foreach ($names as $name) {
            DB::table('channels')->insert([
                'name' => $name,
                'time' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
