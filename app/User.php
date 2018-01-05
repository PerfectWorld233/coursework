<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    //laravel会默认维护created_at,updated_at 两个字段，这两个字段都是存储时间戳，整型11位的，因此使用时需要在数据库添加这两个字段。
    //如果不需要这个功能，只需要在模型里加一个属性
    public $timestamps=false;
    //表名不加s 
    protected $table = 'user';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fname','lname', 'email', 'password','active','submission','role_id','type'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    

}
