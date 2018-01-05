<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public $timestamps = false;
    protected $table = 'role';
    protected $primaryKey = 'id';
    protected $fillable = ['title','rules','status','note'];
    
   
}


// CREATE TABLE `role` (
//     `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '角色(用户组)id',
//     `title` char(100) NOT NULL DEFAULT '' COMMENT '角色(用户组)中文名称',
//     `rules` varchar(512) NOT NULL DEFAULT '' COMMENT '角色(用户组)拥有的规则id，多个规则","隔开',
//     `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '角色(用户组)状态：1正常，0禁用',
//     `note` text NOT NULL COMMENT '角色(用户组)描述',
//     PRIMARY KEY (`id`)
//   ) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='用户角色表';
  
  
  
