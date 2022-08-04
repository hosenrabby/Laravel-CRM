<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class projectManagement extends Model
{
    use HasFactory;
    protected $table = 'project_management';
    protected $primaryKey = 'id';
    protected $fillable = [
        'projectName',
        'projectDuration',
        'projectFeature',
        'projectAmount',
        'StartDate',
        'EndDate',
        'projectDeliveryDate',
        'projectLogo',
        'projectStatus',
    ];
}
