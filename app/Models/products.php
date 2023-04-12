<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_products';
    public $incrementing = false;
    protected $fillable = [
        'id_products',
        'name',
        'description',
        'price',
        'stock',
        'slug',
        'categories_id',
        'users_id',
        'image'
    ];

    public function categories()
    {
        return $this->belongsTo(categories::class);
    }
    public function users()
    {
        return $this->belongsTo(users::class);
    }
    public function detail_transactions()
    {
        return $this->hasMany(detail_transactions::class);
    }
}
