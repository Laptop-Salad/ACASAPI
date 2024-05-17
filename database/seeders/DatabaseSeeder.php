<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Student;
use App\Models\Teacher;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    use WithFaker;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
      // Departments
        // Maths
        DB::table('departments')->insert([
            'name' => 'Maths'
        ]);

        Teacher::factory()->maths_department()->create([
            'special_role' => 'Head of Department'
        ]);

        // Science
        DB::table('departments')->insert([
            'name' => 'Science'
        ]);

        Teacher::factory()->science_department()->create([
            'special_role' => 'Head of Department'
        ]);

        // Art
        DB::table('departments')->insert([
            'name' => 'Art'
        ]);

        Teacher::factory()->art_department()->create([
            'special_role' => 'Head of Department'
        ]);

        // PE
        DB::table('departments')->insert([
            'name' => 'PE'
        ]);

        Teacher::factory()->pe_department()->create([
            'special_role' => 'Head of Department'
        ]);

        // Computer Science
        DB::table('departments')->insert([
            'name' => 'Computer Science'
        ]);

        Teacher::factory()->cs_department()->create([
            'special_role' => 'Head of Department'
        ]);

        // Social Studies
        DB::table('departments')->insert([
            'name' => 'Social Studies'
        ]);

        Teacher::factory()->socials_department()->create([
            'special_role' => 'Head of Department'
        ]);

        // Teachers x 24 from 6 departments
        $teachers = 0;

        while ($teachers < 24) {
            if ($teachers < 4) {
                $department = Department::where('name', 'Maths')->first();
            } else if ($teachers < 8) {
                $department = Department::where('name', 'Science')->first();
            } else if ($teachers < 12) {
                $department = Department::where('name', 'Art')->first();
            } else if ($teachers < 16) {
                $department = Department::where('name', 'PE')->first();
            } else if ($teachers < 20) {
                $department = Department::where('name', 'Computer Science')->first();
            } else {
                $department = Department::where('name', 'Social Studies')->first();
            }

            Teacher::factory()->art_department()->create([
                'department_id' => $department->id
            ]);

            $teachers++;
        }

        // Support teacher x4
        $support = 0;

        while ($support < 4) {
            Teacher::factory()->create([
                'special_role' => 'Support'
            ]);

            $support++;
        }

        // Vice principal x 1
        $vice_principal = Teacher::factory()->create([
            'special_role' => 'Vice Principal'
        ]);

        // Principal x 1
        Teacher::factory()->create([
            'special_role' => 'Principal'
        ]);

        // 5 Houses
        $house_crab = DB::table('houses')->insert([
            'name' => 'Crabs',
        ]);

        $house_gopher = DB::table('houses')->insert([
            'name' => 'Gophers',
        ]);

        $house_rats = DB::table('houses')->insert([
            'name' => 'Rats',
        ]);

        $house_elephants = DB::table('houses')->insert([
            'name' => 'Elephants',
        ]);

        $house_snakes = DB::table('houses')->insert([
            'name' => 'Snakes',
        ]);

        // Students x500
        $students = 0;

        while ($students < 100) {
            if ($students < 20) {
                $student = Student::factory()->house_crabs()->create();
            } else if ($students < 40) {
                $student = Student::factory()->house_gophers()->create();
            } else if ($students < 60) {
                $student = Student::factory()->house_rats()->create();
            } else if ($students < 80) {
                $student = Student::factory()->house_snakes()->create();
            } else {
                $student = Student::factory()->house_elephants()->create();
            }

            DB::table('card_entries')->insert([
                'student_id' => $student->id,
                'time' => Carbon::now(),
            ]);

            DB::table('points')->insert([
                'student_id' => $student->id,
                'teacher_id' => $vice_principal->id,
                'points' => 100,
                'type' => 'Grades',
                'comment' => 'First day points!',
            ]);

            DB::table('points')->insert([
                'student_id' => $student->id,
                'teacher_id' => $vice_principal->id,
                'points' => 100,
                'type' => 'Behaviour',
                'comment' => 'First day points!',
            ]);

            DB::table('points')->insert([
                'student_id' => $student->id,
                'teacher_id' => $vice_principal->id,
                'points' => 100,
                'type' => 'Attendance',
                'comment' => 'First day points!',
            ]);

            $students++;
        }
    }
}
