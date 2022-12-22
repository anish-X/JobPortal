<?php

namespace Database\Seeders;

use App\Models\CompanyCategory;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $company_categories = CompanyCategory::select('id')->get();

        $companies = [
            [
                'name' => 'Blue Fox',
                'registration_number' => '23422',
                'email' => 'fox@mail.com',
                'address' => 'Itahari-4, Sunsari',
                'description' => 'this is seeder',
                'logo' => 'null',
                'is_active' => 1,
                'company_categories_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Blue Cat',
                'registration_number' => '34556',
                'email' => 'cat@mail.com',
                'address' => 'Itahari-4, Sunsari',
                'description' => 'this is catseeder',
                'logo' => 'null',
                'is_active' => 1,
                'company_categories_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'white Fox',
                'registration_number' => '34336',
                'email' => 'white@mail.com',
                'address' => 'dharab-4, Sunsari',
                'description' => 'this is whiteseeder',
                'logo' => 'null',
                'is_active' => 1,
                'company_categories_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'name' => 'Blue dog',
                'registration_number' => '3453',
                'email' => 'dog@mail.com',
                'address' => 'dharan-3, Sunsari',
                'description' => 'this is dogseeder',
                'logo' => 'logo',
                'is_active' => 1,
                'company_categories_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

            ]
        ];
        DB::table('companies')->insert($companies);
    }
}
