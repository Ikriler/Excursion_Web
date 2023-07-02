<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Excursion extends Model
{
    use HasFactory;

    protected $fillable = [
        "image",
        "description",
        "name",
        "active"
    ];

    public static function make(
        $imagePath,
        $description,
        $name,
        $active
    ): Excursion {
        return Excursion::query()->make([
            "image" => $imagePath,
            "description" => $description,
            "name" => $name,
            "active" => $active
        ]);
    }
}
