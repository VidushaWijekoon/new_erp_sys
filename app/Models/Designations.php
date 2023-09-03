<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Designations extends Model
{
    use HasFactory;

    protected $table = 'designations';

    protected $fillable = [
        'designation_name',
        'description',
        'status',
        'created_by'
    ];

    public function created_by_username()
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }
}
