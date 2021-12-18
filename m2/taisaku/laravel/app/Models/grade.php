<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\equipment;

class grade extends Model
{

    public function test() {
        return $this->hasOne(App\Modules\aaaa::class, "karamumei");
    }
    use HasFactory;
    protected $table = "class";
    public function get_equipment () {
        return $this->hasOne(equipment::class, "classId");
        // return $this->hasMany(equipment::class, "classId");
    }
}
