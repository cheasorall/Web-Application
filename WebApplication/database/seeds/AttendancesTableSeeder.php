<?php

use Illuminate\Database\Seeder;

class AttendancesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('Attendances')->insert([
            'attendance_date' => '2019-7-9',
            'attendance_time' => '6',
            'student_id' => 1,
            'course_id' => 1,
        ]);

        DB::table('Attendances')->insert([
            'attendance_date' => '2019-7-6',
            'attendance_time' => '7',
            'student_id' => 2,
            'course_id' => 2,
        ]);

        DB::table('Attendances')->insert([
            'attendance_date' => '2019-7-5',
            'attendance_time' => '8',
            'student_id' => 3,
            'course_id' => 1,
        ]);
    }
}
