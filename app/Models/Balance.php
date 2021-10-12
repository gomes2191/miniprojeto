<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Balance extends Model
{
    use HasFactory;

    // Disabele timestamp
    public $timestamps = false;


    public function deposit($value)
    {
        # code...
        //dd($value);
        $this->amount += number_format($value, 2, '.', '');
        $deposit =  $this->save();

        if ($deposit)

            return [
                'success' => true,
                'message' => 'Depósito realizado com sucesso.',
            ];

        return [
            'success' => false,
            'message' => 'Falha no depósito.',
        ];
    }
}
