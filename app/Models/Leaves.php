<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leaves extends Model
{
    use HasFactory;

    protected $table = 'leaves';

    protected $fillable = [
        'leave_type',
        'fromDate',
        'toDate',
        'number_of_days',
        'leave_reason',
        'created_by'
    ];

    public function created_by_username()
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }
}
