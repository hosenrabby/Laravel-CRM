<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class collectionManagement extends Model
{
    use HasFactory;
    protected $table = 'collection_management';
    protected $primaryKey = 'id';
    protected $fillable = [
        'projectId',
        'customerId',
        'collectionAmount',
        'collectionDate',
        'collectionNote'
    ];
}
