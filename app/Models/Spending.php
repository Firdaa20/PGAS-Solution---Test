<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Spending extends Model
{
    protected $table = 'spendings';

    protected $primaryKey = 'spending_id';

    public $incrementing = true;

    protected $keyType = 'int';

    protected $fillable = [
        'employee_id',
        'spending_date',
        'value',
    ];

    protected $casts = [
        'spending_date' => 'date',
        'value' => 'decimal:2',
    ];

    public function employee(): BelongsTo
    {
        return $this->belongsTo(
            Employee::class,
            'employee_id',
            'employee_id'
        );
    }
}