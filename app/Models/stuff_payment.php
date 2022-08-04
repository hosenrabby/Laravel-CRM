<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stuff_payment extends Model
{
    use HasFactory;
    protected $table = 'stuff_payment';
    protected $primaryKey ='id';
    protected $fillable=[
        'stuffName',
        'paymentAmount',
        'paymentDate',
        'paymentNote'
    ];
}
