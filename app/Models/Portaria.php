<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use OwenIt\Auditing\Contracts\Auditable;

class Portaria extends Model
{
    use HasFactory;
    
    protected $guarded = ['id'];

    public function files()
    {
        return $this->hasMany(\App\Models\File::class);
    }

}
