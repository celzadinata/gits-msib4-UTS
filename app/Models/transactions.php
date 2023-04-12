<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transactions extends Model
{
    use HasFactory;
    protected $fillable = [
        'id', 'date', 'payment', 'total'
    ];

    public function detail_transactions()
    {
        return $this->hasMany(detail_transactions::class);
    }
    public function users()
    {
        return $this->belongsTo(users::class);
    }
}
