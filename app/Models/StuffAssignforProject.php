<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StuffAssignforProject extends Model
{
    use HasFactory;
    protected $table = "stuffassignforprojects";
    protected $primaryKey = "id";
    protected $fillable = [
        'Projectid',
        'Stuffid',
        'WorkingCommission',
    ];
}
