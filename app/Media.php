<?php

namespace App;

use Eloquent;
use Illuminate\Database\Eloquent\Collection;
use Optix\Media\Models\Media as BaseMedia;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Carbon;

/**
 * App\Media
 *
 * @property int $id
 * @property string $name
 * @property string $file_name
 * @property string $disk
 * @property string $mime_type
 * @property int $size
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read string $extension
 * @property-read string|null $type
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Event[] $petitions
 * @property-read int|null $petitions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Post[] $posts
 * @property-read int|null $posts_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Media newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Media newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Media notUsed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Media query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Media whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Media whereDisk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Media whereFileName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Media whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Media whereMimeType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Media whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Media whereSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Media whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Media extends BaseMedia
{
    public function petitions()
    {
        return $this->morphedByMany(Event::class, 'mediable');
    }

    public function posts()
    {
        return $this->morphedByMany(Post::class, 'mediable');
    }

    public function scopeNotUsed(Builder $builder)
    {
        return $builder
            ->whereDoesntHave('petitions')
            ->where('created_at', '<=', \Carbon\Carbon::now()->addHours(-1));
    }
}
