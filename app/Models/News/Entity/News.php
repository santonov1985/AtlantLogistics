<?php

namespace App\Models\News\Entity;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property integer $id
 * @property string $title
 * @property string $img
 * @property string $description_min
 * @property string $description_max
 * @property string $source
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 */
class News extends Model
{
    use HasFactory;
    use SoftDeletes;
}
