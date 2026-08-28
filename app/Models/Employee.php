<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Employee extends Model
{
    protected $table = 'employees';

    protected $primaryKey = 'employee_id';

    public $incrementing = true;

    protected $keyType = 'int';

    protected $fillable = [
        'employee_name',
        'department_id',
    ];

    public function department(): BelongsTo
    {
        return $this->belongsTo(
            Department::class,
            'department_id',
            'department_id'
        );
    }

    public function spendings(): HasMany
    {
        return $this->hasMany(
            Spending::class,
            'employee_id',
            'employee_id'
        );
    }
}