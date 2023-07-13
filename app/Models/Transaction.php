<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    public function deposit(){
        return $this->hasOne(Deposit::class, 'tran_id');
    }

    public function transfer(){
        return $this->hasOne(Transfer::class, 'tran_id');
    }

    public function withdraw(){
        return $this->hasOne(Withdrawal::class, 'tran_id');
    }
}
