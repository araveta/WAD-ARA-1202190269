<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaccine extends Model
{
    use HasFactory;
    protected $table="vaccines";
    protected $primarykey="id";
    protected $fillable=["id", "name", "price", "description", "image"];
}
