<?php
// app/Models/Book.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Book extends Model
{
    use HasFactory;

    // Define the table if necessary (optional)
    protected $table = 'books';

    // Disable auto-incrementing ID since we are using ULID
    public $incrementing = false;

    // Specify the primary key data type
    protected $keyType = 'string';

    // Mass assignable attributes
    protected $fillable = ['id', 'title', 'author_name', 'publishing_date'];

    // Boot method to automatically generate ULID
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            // Generate ULID for 'id' if it's not set
            if (empty($model->id)) {
                $model->id = (string) Str::ulid();
            }
        });
    }
}
