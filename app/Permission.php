<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    public $timestamps = false;
    protected $table = 'permission';
    protected $primaryKey = 'id';
    protected $fillable = [
        'pid',
        'name',
        'title',
        'status',
        'islink',
        'sort',
        'note',
    ];
}


// CREATE TABLE `permission` (
//     `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '表id',
//     `pid` int(11) NOT NULL COMMENT '父id',
//     `name` char(80) NOT NULL DEFAULT '' COMMENT '操作规则唯一标识（控制器/方法）',
//     `title` char(20) NOT NULL DEFAULT '' COMMENT '操作规则中文名称',
//     `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '状态：1正常，0禁用',
//     `islink` tinyint(1) NOT NULL DEFAULT '1' COMMENT '显示状态：1 显示，0 不显示',
//     `sort` int(11) NOT NULL DEFAULT '0' COMMENT '排序',
//     `note` text NOT NULL COMMENT '提示描述',
//     PRIMARY KEY (`id`)
//   ) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='操作权限表';