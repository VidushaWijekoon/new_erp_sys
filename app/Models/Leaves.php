<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
