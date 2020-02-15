<?php
namespace Step\Model;

use Illuminate\Database\Eloquent\Model;
use Step\Model\Todos;

class User extends Model
{
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password'
    ];

    /*
    * Get Todo of User
    *
    */
    public function todo()
    {
        return $this->hasMany(Todos::class);
    }
}