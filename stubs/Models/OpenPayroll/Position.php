<?php

namespace App\Models\OpenPayroll;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $guarded = ['id'];

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'user_id');
    }
}
