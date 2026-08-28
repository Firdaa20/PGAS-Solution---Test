<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        /*
        |--------------------------------------------------------------------------
        | USERS
        |--------------------------------------------------------------------------
        */

        DB::table('users')->insert([
            [
                'name' => 'Administrator',
                'email' => 'admin@spending.test',
                'password' => Hash::make('password'),
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'User',
                'email' => 'user@spending.test',
                'password' => Hash::make('password'),
                'role' => 'user',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);


        /*
        |--------------------------------------------------------------------------
        | DEPARTMENTS
        |--------------------------------------------------------------------------
        */

        DB::table('departments')->insert([
            [
                'department_name' => 'Finance',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'department_name' => 'Human Resources',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'department_name' => 'Information Technology',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'department_name' => 'Marketing',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'department_name' => 'Operations',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);


        /*
        |--------------------------------------------------------------------------
        | EMPLOYEES
        |--------------------------------------------------------------------------
        |
        | department_id:
        | 1 = Finance
        | 2 = Human Resources
        | 3 = Information Technology
        | 4 = Marketing
        | 5 = Operations
        |
        */

        DB::table('employees')->insert([
            [
                'employee_name' => 'Andi Pratama',
                'department_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'employee_name' => 'Budi Santoso',
                'department_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'employee_name' => 'Citra Lestari',
                'department_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'employee_name' => 'Dimas Saputra',
                'department_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'employee_name' => 'Eka Putri',
                'department_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'employee_name' => 'Fajar Ramadhan',
                'department_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'employee_name' => 'Gita Maharani',
                'department_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'employee_name' => 'Hendra Wijaya',
                'department_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'employee_name' => 'Intan Permata',
                'department_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'employee_name' => 'Joko Susanto',
                'department_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);


        /*
        |--------------------------------------------------------------------------
        | SPENDINGS
        |--------------------------------------------------------------------------
        |
        | Data dibuat dari tahun 2020 sampai 2025.
        |
        */

        DB::table('spendings')->insert([

            // 2020
            [
                'employee_id' => 1,
                'spending_date' => '2020-01-15',
                'value' => 750000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'employee_id' => 2,
                'spending_date' => '2020-03-20',
                'value' => 1250000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'employee_id' => 3,
                'spending_date' => '2020-07-10',
                'value' => 500000,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // 2021
            [
                'employee_id' => 4,
                'spending_date' => '2021-02-12',
                'value' => 1750000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'employee_id' => 5,
                'spending_date' => '2021-05-25',
                'value' => 950000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'employee_id' => 6,
                'spending_date' => '2021-09-18',
                'value' => 2250000,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // 2022
            [
                'employee_id' => 7,
                'spending_date' => '2022-01-20',
                'value' => 850000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'employee_id' => 8,
                'spending_date' => '2022-04-14',
                'value' => 3100000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'employee_id' => 9,
                'spending_date' => '2022-08-22',
                'value' => 1250000,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // 2023
            [
                'employee_id' => 10,
                'spending_date' => '2023-02-17',
                'value' => 4500000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'employee_id' => 1,
                'spending_date' => '2023-06-11',
                'value' => 1500000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'employee_id' => 2,
                'spending_date' => '2023-11-05',
                'value' => 2750000,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // 2024
            [
                'employee_id' => 3,
                'spending_date' => '2024-01-10',
                'value' => 650000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'employee_id' => 4,
                'spending_date' => '2024-05-19',
                'value' => 3750000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'employee_id' => 5,
                'spending_date' => '2024-10-27',
                'value' => 2100000,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // 2025
            [
                'employee_id' => 6,
                'spending_date' => '2025-01-15',
                'value' => 1500000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'employee_id' => 7,
                'spending_date' => '2025-03-22',
                'value' => 2800000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'employee_id' => 8,
                'spending_date' => '2025-06-21',
                'value' => 3750000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'employee_id' => 9,
                'spending_date' => '2025-09-13',
                'value' => 1200000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'employee_id' => 10,
                'spending_date' => '2025-12-05',
                'value' => 5200000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}