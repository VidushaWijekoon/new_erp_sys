<?php

namespace Database\Seeders;

use App\Models\Departments;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $array = [
            ['department_name' => 'Finance', 'description' => 'Finance', 'status' => '1', 'created_by' => '1'],
            ['department_name' => 'Computers and information technology', 'description' => 'Computers and information technology', 'status' => '1', 'created_by' => '1'],
            ['department_name' => 'Marketing', 'description' => 'Marketing', 'status' => '1', 'created_by' => '1'],
            ['department_name' => 'Sales', 'description' => 'Sales', 'status' => '1', 'created_by' => '1'],
            ['department_name' => 'Human Resources', 'description' => 'Human Resources', 'status' => '1', 'created_by' => '1'],
            ['department_name' => 'Operations management', 'description' => 'Operations management', 'status' => '1', 'created_by' => '1'],
            ['department_name' => 'Engineering', 'description' => 'Engineering', 'status' => '1', 'created_by' => '1'],
            ['department_name' => 'Production', 'description' => 'Production', 'status' => '1', 'created_by' => '1'],
            ['department_name' => 'Quality Assurance', 'description' => 'Quality Assurance', 'status' => '1', 'created_by' => '1'],
            ['department_name' => 'Purchasing', 'description' => 'Purchasing', 'status' => '1', 'created_by' => '1'],
        ];

        foreach ($array as $value) {
            Departments::create($value);
        }
    }
}
