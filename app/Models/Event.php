<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    // Define the table name if it doesn't follow Laravel's naming convention
    protected $table = 'events';

    // Define the fillable attributes
    protected $fillable = [
        'name',
        'Host',
        'duration',
        'location',
        'time',
        'description',
        'image',
    ];
}
