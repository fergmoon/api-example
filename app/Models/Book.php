<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table="books"; //mismo nombre que en migracion create_books_table
    protected $primaryKey = "id"; 
    protected $fillable = ["name","isbn","author","edition"];
}
