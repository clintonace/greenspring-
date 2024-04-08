<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Purchase extends Model
{
    use HasFactory;

    public function product(): HasOne
    {
        return $this->hasOne(Product::class, 'id', 'product_id');
    }


    public function trnx(): HasOne
    {
        return $this->hasOne(Transaction::class, 'id', 'transaction_id');
    }
}
