<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;
    protected $table='customers';
    protected $primarykey='id';
    protected $fillable=[
        'customerName',
        'companyName',
        'contactNo',
        'emailId',
        'locationCity',
        'officeAddress',
        'businessType',
        'lastStatus'
    ];
}
