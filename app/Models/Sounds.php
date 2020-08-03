<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $slang_id
 * @property string $created_at
 * @property string $updated_at
 * @property Slang $slang
 */
class Sounds extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'Sounds';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['slang_id', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function slang()
    {
        return $this->belongsTo('App\Slang');
    }
}
