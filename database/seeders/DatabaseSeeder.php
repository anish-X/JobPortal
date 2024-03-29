<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Company;
use App\Models\CompanyCategory;
use App\Models\Subscription;
use Illuminate\Database\Seeder;
use Mockery\Matcher\Subset;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        CompanyCategory::factory(10)->create();
        Company::factory(10)->create();

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Subscription::factory()->count(15)->create();

        Subscription::factory()->count(10)->create();
    }

}
