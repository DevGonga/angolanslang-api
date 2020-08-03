<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $email
 * @property string $password
 * @property string $username
 * @property string $api_key
 * @property string $type
 * @property string $created_at
 * @property string $updated_at
 */
class Users extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'Users';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['email', 'password', 'username', 'api_key', 'type', 'created_at', 'updated_at'];

}
