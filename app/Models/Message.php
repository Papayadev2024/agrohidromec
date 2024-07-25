<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'last_name', 'full_name', 'document', 'email', 'cellphone', 'monto', 'garantie', 'address', 'source', 'status', 'is_read'];


}