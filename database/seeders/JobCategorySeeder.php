<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $job_categories =[
            [
                'job_category' => 'Development',
                'position_type' => 'Full-time'
            ],
            [
                'job_category' => 'Full-Stack',
                'position_type' => 'Part-time'
            ],
            [
                'job_category' => 'Sales',
                'position_type' => 'Temporary'
            ],
        ];
        DB::table('job_categories')->insert($job_categories);

    }
}
