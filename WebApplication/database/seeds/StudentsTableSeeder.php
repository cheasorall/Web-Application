<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Students')->insert([
            'student_name' => 'kim tepbuphata',
            'gender' => 'male',
            'contact' => '012345678',
            'course_id' => 1,
        ]);

        DB::table('Students')->insert([
            'student_name' => 'chea sorall',
            'gender' => 'male',
            'contact' => '012345673',
            'course_id' => 2,
        ]);

        DB::table('Students')->insert([
            'student_name' => 'khov manny',
            'gender' => 'male',
            'contact' => '012345671',
            'course_id' => 3,
        ]);
    }
}
