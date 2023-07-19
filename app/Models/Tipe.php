<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tipe extends Model
{
    use HasFactory;
    protected $table = "tb_tipe";
    protected $primaryKey = "id_tipe";
    protected $guarded = [];

    public function r_baju(): HasMany
    {
        return $this->hasMany(Baju::class, 'id_type_baju', 'id_tipe');
    }
}
