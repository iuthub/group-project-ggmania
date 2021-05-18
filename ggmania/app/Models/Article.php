<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{   public $timestamps = ["created_at"];
    const UPDATED_AT = null;
    use HasFactory;
}


