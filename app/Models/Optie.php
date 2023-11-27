<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Stelling;
use App\Models\Optie;

    class Optie extends Model
    {
        protected $table = 'opties';

        protected $fillable = [
            'S_id',
            'optie',
        ];

        public function stelling() {
            return $this->belongsTo(Stelling::class, 'S_id');
        }
    }
