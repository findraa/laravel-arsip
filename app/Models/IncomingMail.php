<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IncomingMail extends Model
{
    use HasFactory;

    protected $guarded = [];

     /**
     * Search query in multiple whereOr
     *
     * @var mixed
     * @return mixed
     */
    public static function search($query)
    {
        return empty($query) ? static::query()
            : static::where('file_number', 'like', '%' . $query . '%')
            ->orWhere('sender', 'like', '%' . $query . '%');
    }
}
