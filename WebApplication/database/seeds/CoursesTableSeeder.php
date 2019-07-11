<?php

use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('Courses')->insert([
            'course_name' => 'Web Development',
        ]);
        DB::table('Courses')->insert([
            'course_name' => 'OOP',
        ]);
        DB::table('Courses')->insert([
            'course_name' => 'Mobile Programming',
        ]);
    }
}
