<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
* @property integer $id
* @property integer $categories_id
* @property string $name
* @property string $created_at
* @property string $updated_at
* @property Category $category
*/
class Slang extends Model
{
    /**
    * The table associated with the model.
    * 
    * @var string
    */
    protected $table = 'Slang';
    
    /**
    * The "type" of the auto-incrementing ID.
    * 
    * @var string
    */
    protected $keyType = 'integer';
    
    /**
    * @var array
    */
    protected $fillable = ['categories_id', 'name', 'created_at', 'updated_at'];
    
    /**
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function categories()
    {
        return $this->hasMany('App\Models\Categories', 'id');
    }
    public function sounds()
    {
        return $this->hasMany('App\Models\Sounds', 'id');
    }
    public function translations()
    {
        return $this->hasMany('App\Models\Translations', 'slang_id');
    }
    public function examples()
    {
        return $this->hasMany('App\Models\Categories', 'id');
    }
    
}
