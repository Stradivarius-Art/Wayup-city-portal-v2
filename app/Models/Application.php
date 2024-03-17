<?php

namespace App\Models;

use App\Models\User;
use App\Models\ApplicationImage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * 
 *
 * @property-read \Illuminate\Database\Eloquent\Collection<int, ApplicationImage> $images
 * @property-read int|null $images_count
 * @property-read User|null $user
 * @method static \Database\Factories\ApplicationFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Application newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Application newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Application query()
 * @mixin \Eloquent
 */
class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image',
    ];

    public function images(): HasMany
    {
        return $this->hasMany(ApplicationImage::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}