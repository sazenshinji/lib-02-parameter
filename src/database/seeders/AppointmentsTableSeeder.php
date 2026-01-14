<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class AppointmentsTableSeeder extends Seeder
{
    public function run()
    {
        $param = [
            'work_date' => '2026-1-13',
            'care_start' => Carbon::create(2026, 1, 13, 8, 0, 0),
            'person_no' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('appointments')->insert($param);
        $param = [
            'work_date' => '2026-1-13',
            'care_start' => Carbon::create(2026, 1, 13, 9, 0, 0),
            'person_no' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('appointments')->insert($param);
        $param = [
            'work_date' => '2026-1-13',
            'care_start' => Carbon::create(2026, 1, 13, 10, 0, 0),
            'person_no' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('appointments')->insert($param);
        $param = [
            'work_date' => '2026-1-13',
            'care_start' => Carbon::create(2026, 1, 13, 11, 0, 0),
            'person_no' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('appointments')->insert($param);

        $param = [
            'work_date' => '2026-1-14',
            'care_start' => Carbon::create(2026, 1, 14, 8, 0, 0),
            'person_no' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('appointments')->insert($param);
        $param = [
            'work_date' => '2026-1-14',
            'care_start' => Carbon::create(2026, 1, 14, 9, 0, 0),
            'person_no' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('appointments')->insert($param);
        $param = [
            'work_date' => '2026-1-14',
            'care_start' => Carbon::create(2026, 1, 14, 10, 0, 0),
            'person_no' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('appointments')->insert($param);
        $param = [
            'work_date' => '2026-1-14',
            'care_start' => Carbon::create(2026, 1, 14, 11, 0, 0),
            'person_no' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('appointments')->insert($param);

        $param = [
            'work_date' => '2026-1-15',
            'care_start' => Carbon::create(2026, 1, 15, 8, 0, 0),
            'person_no' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('appointments')->insert($param);
        $param = [
            'work_date' => '2026-1-15',
            'care_start' => Carbon::create(2026, 1, 15, 9, 0, 0),
            'person_no' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('appointments')->insert($param);
        $param = [
            'work_date' => '2026-1-15',
            'care_start' => Carbon::create(2026, 1, 15, 10, 0, 0),
            'person_no' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('appointments')->insert($param);
        $param = [
            'work_date' => '2026-1-15',
            'care_start' => Carbon::create(2026, 1, 15, 11, 0, 0),
            'person_no' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('appointments')->insert($param);

    }
}
