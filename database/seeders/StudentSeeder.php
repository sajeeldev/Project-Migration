<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\student;
use Illuminate\Support\Facades\File;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   

        for( $i = 0; $i < 100; $i++ ) {
        student::create([
            'name'=> fake()->name(),
            'email'=> fake()->unique()->email(),
         ]);
        }

        // the collect method is used for multiple values to add in database through seeders
        // $json = File::get(path:"database/json/student.json");
        // $students = collect(json_decode($json));

        // $students->each(function ($value){
        //     student::create([
        //         'name'=> $value->name,
        //         'email'=> $value->email
        //     ]);
        // });
        

        // this function will run for each value of the student array

        // $students->each(function($value){
        //     student::insert($value);
        // });

        // to pass single value with the help of seeder

        
        // student::create([
        //     'name' => 'SajeelurRehman',
        //     'email' => 'sajeelurrehman@gmail.com'
        // ]);
    }
}
