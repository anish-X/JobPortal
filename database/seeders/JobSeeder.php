<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\JobCategory;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $jobs=[
          [
              'title' => 'Senior Back-End Developer',
              'description' => 'https://recruitee.com/articles/job-description-examples#23',
              'job_category_id' => 1,
              'company_id' => 1,
              'gender' => 'male',
              'salary_type' => 'Monthly',
              'min_salary' => 1000,
              'max_salary' => 3500,
              'experience' => 5,
              'qualification' => 'Bachelor Degree',
              'deadline' => Carbon::createFromDate(2022,12,28),
              'vacancy' => 8,
              'location' => 'Itahari-4, Sunsari',
              'is_active' => 1,
              'deleted_at' => null,
              'created_at' => Carbon::now(),
              'updated_at' => Carbon::now(),

          ],
            [
                'title' => 'Front-End Developer',
                'description' => 'https://recruitee.com/articles/job-description-examples#23',
                'job_category_id' => 1,
                'company_id' => 3,
                'gender' => 'Female',
                'salary_type' => 'Weekly',
                'min_salary' => 500,
                'max_salary' => 675,
                'experience' => 5,
                'qualification' => 'Certificate',
                'deadline' => Carbon::createFromDate(2022,12,28),
                'vacancy' => 8,
                'location' => 'Itahari-4, Sunsari',
                'is_active' => 1,
                'deleted_at' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),

            ],
            [
                'title' => 'Sales Manager',
                'description' => 'https://recruitee.com/articles/job-description-examples#23',
                'job_category_id' => 3,
                'company_id' => 2,
                'gender' => 'male',
                'salary_type' => 'Monthly',
                'min_salary' => 5000,
                'max_salary' => 5500,
                'experience' => 10,
                'qualification' => 'Master Degree',
                'deadline' => Carbon::createFromDate(2022,12,28),
                'vacancy' => 2,
                'location' => 'Itahari-4, Sunsari',
                'is_active' => 1,
                'deleted_at' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),

            ],
            [
                'title' => 'Full Stack Developer',
                'description' => 'https://recruitee.com/articles/job-description-examples#23',
                'job_category_id' => 1,
                'company_id' => 3,
                'gender' => 'male',
                'salary_type' => 'Monthly',
                'min_salary' => 5000,
                'max_salary' => 7780,
                'experience' => 7,
                'qualification' => 'Bachelor Degree',
                'deadline' => Carbon::createFromDate(2022,12,28),
                'vacancy' => 5,
                'location' => 'dharan-4, Sunsari',
                'is_active' => 1,
                'deleted_at' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),

            ],

        ];
        DB::table('jobs')->insert($jobs);
    }
}
