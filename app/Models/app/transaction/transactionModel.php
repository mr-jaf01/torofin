<?php

namespace App\Models\app\transaction;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transactionModel extends Model
{
    use HasFactory;

    protected $table = 'tlb_transaction';
}
