<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stuff_type_mng extends Model
{
    use HasFactory;
    protected $table = 'stuff_type_mng';
    protected $primaryKey ='id';
    protected $fillable=[
        'stuffType',
        'stuffTypeCode',
        'basicSalary',
        'workingCommission'];
}
