<?php

namespace App\Models\Service\Entity;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $main_description
 * @property string $icon
 * @property string $title
 * @property string $description
 * @property string $list
 */
class Service extends Model
{
    use HasFactory;
}

