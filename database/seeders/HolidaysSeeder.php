<?php

namespace Database\Seeders;

use App\Models\Holiday;
use Illuminate\Database\Seeder;

class HolidaysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $array = [
            ['holiday_name' => 'New Year', 'holiday_date' => '2023-01-01', 'holiday_special_note' => 'New Year Break for Everyone', 'created_by' => '1'],
            ['holiday_name' => 'Eid al Fitr', 'holiday_date' => '2023-04-20', 'holiday_special_note' => 'New Year Break for Everyone', 'created_by' => '1'],
            ['holiday_name' => 'Eid al Fitr', 'holiday_date' => '2023-04-21', 'holiday_special_note' => 'New Year Break for Everyone', 'created_by' => '1'],
            ['holiday_name' => 'Eid al Fitr', 'holiday_date' => '2023-04-22', 'holiday_special_note' => 'New Year Break for Everyone', 'created_by' => '1'],
            ['holiday_name' => 'Eid al Fitr', 'holiday_date' => '2023-04-23', 'holiday_special_note' => 'New Year Break for Everyone', 'created_by' => '1'],
            ['holiday_name' => 'Arafat Day', 'holiday_date' => '2023-06-27', 'holiday_special_note' => 'New Year Break for Everyone', 'created_by' => '1'],
            ['holiday_name' => 'Eid al Adha', 'holiday_date' => '2023-06-28', 'holiday_special_note' => 'New Year Break for Everyone', 'created_by' => '1'],
            ['holiday_name' => 'Eid al Adha', 'holiday_date' => '2023-06-29', 'holiday_special_note' => 'New Year Break for Everyone', 'created_by' => '1'],
            ['holiday_name' => 'Eid al Adha', 'holiday_date' => '2023-06-30', 'holiday_special_note' => 'New Year Break for Everyone', 'created_by' => '1'],
            ['holiday_name' => 'Isalamic New Year', 'holiday_date' => '2023-07-19', 'holiday_special_note' => 'New Year Break for Everyone', 'created_by' => '1'],
            ['holiday_name' => 'The Prophet Muhammad’s (PBUH) birthday', 'holiday_date' => '2023-09-27', 'holiday_special_note' => 'New Year Break for Everyone', 'created_by' => '1'],
            ['holiday_name' => 'Commemoration Day', 'holiday_date' => '2023-12-01', 'holiday_special_note' => 'New Year Break for Everyone', 'created_by' => '1'],
            ['holiday_name' => 'National Day', 'holiday_date' => '2023-12-02', 'holiday_special_note' => 'New Year Break for Everyone', 'created_by' => '1'],
            ['holiday_name' => 'National Day', 'holiday_date' => '2023-12-03', 'holiday_special_note' => 'New Year Break for Everyone', 'created_by' => '1'],
            ['holiday_name' => 'Christmas Day', 'holiday_date' => '2023-12-25', 'holiday_special_note' => 'New Year Break for Everyone', 'created_by' => '1'],
        ];

        foreach ($array as $value) {
            Holiday::create($value);
        }
    }
}
