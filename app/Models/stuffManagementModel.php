<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stuffManagementModel extends Model
{
    use HasFactory;
    protected $table = 'stuff_management_models';
    protected $primaryKey ='id';
    protected $fillable=[
        'stuffType',
        'stuffName',
        'stuffCode',
        'stuffContactNo',
        'stuffEmailId',
        'gardianContactNo',
        'referanceContactNo',
        'stuffPresentAddress',
        'stuffPermanentAddress',
        'nidImageUrl',
        'logInid',
        'password'
    ];
}
