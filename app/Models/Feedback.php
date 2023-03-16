<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\Feedback
 *
 * @property int $id
 * @property string $fio
 * @property string $email
 * @property string $comment
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Feedback newModelQuery()
 * @method static Builder|Feedback newQuery()
 * @method static Builder|Feedback query()
 * @method static Builder|Feedback whereComment($value)
 * @method static Builder|Feedback whereCreatedAt($value)
 * @method static Builder|Feedback whereEmail($value)
 * @method static Builder|Feedback whereFio($value)
 * @method static Builder|Feedback whereId($value)
 * @method static Builder|Feedback whereUpdatedAt($value)
 */
class Feedback extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fio',
        'email',
        'comment',
    ];
}
