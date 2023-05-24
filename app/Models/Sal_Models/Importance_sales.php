<?php

namespace App\Models\Sal_Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Importance_sales extends Model
{
    use HasFactory;

    public $fillable = ['name'];

    protected $table = "import_sales";
}
