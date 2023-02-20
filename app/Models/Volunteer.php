<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Volunteer
 *
 * @property $id
 * @property $fullname
 * @property $firstname
 * @property $lastname
 * @property $dni
 * @property $cellphone
 * @property $profession
 * @property $age
 * @property $gender
 * @property $city
 * @property $leader_id
 * @property $created_at
 * @property $updated_at
 *
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Volunteer extends Model
{
    
    static $rules = [
		'fullname' => 'required',
		'firstname' => 'required',
		'lastname' => 'required',
		'dni' => 'required',
		'cellphone' => 'required',
		'profession_id' => 'required',
		'age' => 'required',
		'gender' => 'required',
		'city' => 'required',
		'leader_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fullname','firstname','lastname','dni','cellphone','profession_id','age','gender','city','leader_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'leader_id');
    }

    public function profession()
    {
        return $this->hasOne('App\Models\Profession', 'id', 'profession_id');
    }
    

}
