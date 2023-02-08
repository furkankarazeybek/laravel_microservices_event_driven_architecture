<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductUser extends Model
{

    protected $guarded = ['id'];

    protected $table = 'product_user';

    use HasFactory;
}
