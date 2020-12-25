<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'password', 'email',
        'role', 'isCompleted',
        'isActive', 'super_admin',
        'security_question_id', 'security_answer'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function detail() {
        $model = 'App\\'.$this->role;
        return $this->hasOne($model);
    }


    public function fullName() {
        if(!$this->detail) return 'ABC';
        if($this->role != 'Company')
            return $this->detail->first_name.' '.$this->detail->last_name;
        else
            return $this->detail->manager_name;
    }
}