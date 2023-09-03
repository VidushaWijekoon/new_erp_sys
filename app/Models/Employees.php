<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;

    protected $table = 'employees';

    protected $fillable = [
        'fullname',
        'email',
        'birthday',
        'passport_number',
        'visa_type',
        'visa_expiring',
        'contact_number',
        'current_address',
        'resident_country',
        'emergency_number',
        'department',
        'designation',
        'join_date',
        'special_note',
        'status',
        'created_by',
        'department',
        'designation'
    ];

    public function department_name()
    {
        return $this->belongsTo(Departments::class, 'department', 'id');
    }

    public function desgination_name()
    {
        return $this->belongsTo(Designations::class, 'designation', 'id');
    }
}
