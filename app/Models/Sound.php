<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $sounds_id
 * @property string $sound_url
 * @property string $type
 * @property string $genre
 * @property string $created_at
 * @property string $updated_at
 * @property Sound $sound
 */
class Sound extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'Sound';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['sounds_id', 'sound_url', 'type', 'genre', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sound()
    {
        return $this->belongsTo('App\Sound', 'sounds_id');
    }
}
