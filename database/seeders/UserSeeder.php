<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name'=> 'Arjun Regmi',
                'username'=> 'arjun2056',
                'password'=> Hash::make('12345678'),
                'email'=> 'arjun2056@gmail.com',
                'mobile_num'=>'9842148105',
                'address'=>null,
                'company_id'=>null,
                'role'=>'super_admin',
                'is_active'=>true,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
            [
                'name'=> 'Arjun Regmi',
                'username'=> 'arjun2057',
                'password'=> Hash::make('12345678'),
                'email'=> 'arjun2057@gmail.com',
                'mobile_num'=>'9842148101',
                'address'=>null,
                'company_id'=>null,
                'role'=>'company_admin',
                'is_active'=>true,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
            [
                'name'=> 'Arjun Regmi',
                'username'=> 'arjun2043',
                'password'=> Hash::make('12345678'),
                'email'=> 'arjun209@gmail.com',
                'mobile_num'=>'9842148115',
                'address'=>null,
                'company_id'=>null,
                'role'=>'recruiter',
                'is_active'=>1,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
            [
                'name'=> 'Arjun Regmi',
                'username'=> 'arjun2067',
                'password'=> Hash::make('12345678'),
                'email'=> 'arjun2067@gmail.com',
                'mobile_num'=>'9842148135',
                'address'=>null,
                'company_id'=>null,
                'role'=>'manager',
                'is_active'=>1,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
            [
                'name'=> 'Arjun Regmi',
                'username'=> 'arjun2050',
                'password'=> Hash::make('12345678'),
                'email'=> 'arjun2059@gmail.com',
                'mobile_num'=>'9842148605',
                'address'=>null,
                'company_id'=>null,
                'role'=>'user',
                'is_active'=>1,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ]
            ];
        DB::table('users')->insert($users);
    }
}
