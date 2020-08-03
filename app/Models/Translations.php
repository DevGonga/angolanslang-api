<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $slang_id
 * @property string $translation
 * @property string $created_at
 * @property string $updated_at
 * @property Slang $slang
 */
class Translations extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'Translations';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['slang_id', 'translation', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function slang()
    {
        return $this->belongsTo('App\Slang');
    }
}
