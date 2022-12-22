<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanyCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $company_categories=[
            [
                'name' => 'IT Department',
                'is_active' => 1
            ],
            [
                'name' => 'Health',
                'is_active' => 1
            ],
            [
            'name' => 'Marketing',
            'is_active' => 1
        ]
        ];

        DB::table('company_categories')->insert($company_categories);
    }
}
