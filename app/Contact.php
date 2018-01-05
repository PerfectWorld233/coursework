<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contact';
    protected $primaryKey = 'id';
    protected $fillable = [
        'recordType',
        'recordStatus',
        'email',
        'instruction',
        'title',
        'fname',
        'lname',
        'jobtitle',
        'personType',
        'twitter',
        'linkedln',
        'professionalInterest',
        'professionalWeb',
        'telephone',
        'telephone2',
        'mobile',
        'organisation',
        'departmentLevel1',
        'departmentLevel2',
        'biographyText',
        'notes',
    ];
}

    // `id` int(11) NOT NULL AUTO_INCREMENT,
    // `recordType` text,
    // `recordStatus` text,
    // `email` varchar(45) DEFAULT NULL,
    // `instruction` varchar(45) DEFAULT NULL,
    // `title` varchar(45) DEFAULT NULL,
    // `fname` varchar(45) DEFAULT NULL,
    // `lname` varchar(45) DEFAULT NULL,
    // `jobtitle` varchar(45) DEFAULT NULL,
    // `personType` text,
    // `twitter` varchar(45) DEFAULT NULL,
    // `linkedln` varchar(45) DEFAULT NULL,
    // `professionalInterest` varchar(45) DEFAULT NULL,
    // `professionalWeb` varchar(45) DEFAULT NULL,
    // `telephone` varchar(45) DEFAULT NULL,
    // `telephone2` varchar(45) DEFAULT NULL,
    // `mobile` varchar(45) DEFAULT NULL,
    // `organisation` varchar(45) DEFAULT NULL,
    // `departmentLevel1` varchar(45) DEFAULT NULL,
    // `dapartmentLevel2` varchar(45) DEFAULT NULL,
    // `biographyText` varchar(45) DEFAULT NULL,
    // `notes` varchar(45) DEFAULT NULL,
    // `created_at` datetime DEFAULT NULL,
    // `updated_at` datetime DEFAULT NULL,
    // `entry_time` datetime DEFAULT NULL,
