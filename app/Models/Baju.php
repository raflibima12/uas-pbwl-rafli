<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Baju extends Model
{
    use HasFactory;
    protected $table = "tb_baju";
    protected $primaryKey = "id_baju";
    protected $guarded = [];

    public function r_tipe(): BelongsTo
    {
        return $this->belongsTo(Tipe::class, 'id_type_baju', 'id_tipe');
    }
}
