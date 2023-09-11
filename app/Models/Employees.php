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
        'image',
        'department',
        'designation',
        'join_date',
        'special_note',
        'year_leaves',
        'status',
        'created_by',
    ];

    public function created_by_username()
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }

    public function department_name()
    {
        return $this->belongsTo(Departments::class, 'department', 'id');
    }

    public function designation_name()
    {
        return $this->belongsTo(Designations::class, 'designation', 'id');
    }

    public function country_name()
    {
        return $this->belongsTo(Country::class, 'resident_country', 'id');
    }
}
