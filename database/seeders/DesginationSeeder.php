<?php

namespace Database\Seeders;

use App\Models\Designations;
use Illuminate\Database\Seeder;

class DesginationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $array = [
            ['designation_name' => 'Director', 'description' => 'Director', 'status' => '1', 'created_by' => '1'],
            ['designation_name' => 'Chairman', 'description' => 'Graphic Design', 'status' => '1', 'created_by' => '1'],
            ['designation_name' => 'Managing Director', 'description' => 'Managing Director', 'status' => '1', 'created_by' => '1'],
            ['designation_name' => 'Chief Executive Officer (CEO)', 'description' => 'Chief Executive Officer (CEO)', 'status' => '1', 'created_by' => '1'],
            ['designation_name' => 'Chief Financial Officer (CFO)', 'description' => 'Chief Financial Officer (CFO)', 'status' => '1', 'created_by' => '1'],
            ['designation_name' => 'Secretary', 'description' => 'Secretary', 'status' => '1', 'created_by' => '1'],
            ['designation_name' => 'Chief Operating Officer (COO)', 'description' => 'Chief Operating Officer (COO)', 'status' => '1', 'created_by' => '1'],
            ['designation_name' => 'Chief Technology Officer (CTO)', 'description' => 'Chief Technology Officer (CTO)', 'status' => '1', 'created_by' => '1'],
            ['designation_name' => 'Vice President', 'description' => 'Vice President', 'status' => '1', 'created_by' => '1'],
            ['designation_name' => 'Manager', 'description' => 'Manager', 'status' => '1', 'created_by' => '1'],
            ['designation_name' => 'Senior Software Engieer', 'description' => 'Senior Software Engieer', 'status' => '1', 'created_by' => '1'],
            ['designation_name' => 'Junior Software Engieer', 'description' => 'Junior Software Engieer', 'status' => '1', 'created_by' => '1'],
            ['designation_name' => 'QA Software Engieer', 'description' => 'QA Software Engieer', 'status' => '1', 'created_by' => '1'],
            ['designation_name' => 'Senior Graphic', 'description' => 'Senior Graphic', 'status' => '1', 'created_by' => '1'],
            ['designation_name' => 'Junior Graphic', 'description' => 'Junior Graphic', 'status' => '1', 'created_by' => '1'],
            ['designation_name' => 'Sales Executive', 'description' => 'Sales Executive', 'status' => '1', 'created_by' => '1'],
            ['designation_name' => 'Social Media Executive', 'description' => 'Social Media Executive', 'status' => '1', 'created_by' => '1'],
        ];

        foreach ($array as $value) {
            Designations::create($value);
        }
    }
}
