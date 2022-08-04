<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer_dealling extends Model
{
    use HasFactory;
    protected $table = 'customer_deallings';
    protected $primaryKey = 'id';
    protected $fillable = [
        'customerId',
        'latestInformation',
        'updateDate',
        'stuffId'
    ];
}
