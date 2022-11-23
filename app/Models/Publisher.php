<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Publisher extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'publishers';

    protected $fillable = [
        'name',
        'address',
        'phone',
        'email',
        'image'
    ];

    /**
     * Get all of the books for the Publisher
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function books(): HasMany
    {
        return $this->hasMany(Book::class, 'publisher_id', 'id');
    }
}
