<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permissionrole extends Model
{
    public $timestamps = fales;
    protected $table = 'permission_role';
    protected $primaryKey = 'id';
    protected $fillable = ['role_id'];
}



// CREATE TABLE `permission_role` (
//     `id` mediumint(8) unsigned NOT NULL COMMENT '管理员用户id',
//     `role_id` mediumint(8) unsigned NOT NULL COMMENT '角色(用户组)id',
//     UNIQUE KEY `admin_id_group_id` (`id`,`role_id`),
//     KEY `id` (`id`),
//     KEY `role_id` (`role_id`)
//   ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用户权限组关联明细表';
  