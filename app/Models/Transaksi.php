<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Alfa6661\AutoNumber\AutoNumberTrait;
class Transaksi extends Model
{
    use AutoNumberTrait;
    
    /**
     * Return the autonumber configuration array for this model.
     *
     *  
     */
    public function getAutoNumberOptions()
    {
        return [
            'id_transaksi' => [
                'format' => 'Trx?', // autonumber format. '?' will be replaced with the generated number.
                'length' => 3 // The number of digits in an autonumber
            ]
        ];
    }
    
    use HasFactory;
    protected $table = 'transaksi';
    protected $guarded=[];
}
