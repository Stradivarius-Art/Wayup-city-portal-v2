<?php

namespace App\Models;

use App\Models\Application;
use App\Enum\ApplicationColor;
use Illuminate\Database\Eloquent\Model;
use App\Enum\ApplicationBackgroundColor;
use App\Enum\ApplicationStatus;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * 
 *
 * @property ApplicationColor $color
 * @property ApplicationBackgroundColor $background
 * @property ApplicationStatus $status
 * @property-read Application|null $application
 * @method static \Database\Factories\ApplicationImageFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationImage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationImage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationImage query()
 * @mixin \Eloquent
 */
class ApplicationImage extends Model
{
    use HasFactory;

    protected $fillable =  [
        'color',
        'background',
        'status'
    ];

    protected $casts = [
        'color' => ApplicationColor::class,
        'background' => ApplicationBackgroundColor::class,
        'status' => ApplicationStatus::class
    ];

    public function application(): BelongsTo
    {
        return $this->belongsTo(Application::class);
    }
}