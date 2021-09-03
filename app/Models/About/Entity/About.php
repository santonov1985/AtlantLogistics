<?php

namespace App\Models\About\Entity;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $title
 * @property string $description
 */
class About extends Model
{
    use HasFactory;
}
