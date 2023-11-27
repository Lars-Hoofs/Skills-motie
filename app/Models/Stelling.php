<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Stelling;
use App\Models\Optie;

class Stelling extends Model
{
    use HasFactory;

    protected $table = 'stelling';

    protected $fillable = [
        'title',
        'beschrijving',
    ];

    public function opties(){
        return $this->hasMany(Optie::class, 'S_id');
    }
}
