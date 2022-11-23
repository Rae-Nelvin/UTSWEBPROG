<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Book extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'books';

    protected $fillable = [
        'publisher_id',
        'title',
        'author',
        'year',
        'synopsis',
        'image'
    ];

    /**
     * Get all of the bookCategories for the Book
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function bookCategories(): HasMany
    {
        return $this->hasMany(BookCategory::class, 'book_id', 'id');
    }
}
