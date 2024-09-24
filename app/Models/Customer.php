<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = "customers";

    protected $fillable = [
        'customer_id',
        'first_name',
        'last_name',
        'birth_date',
        'phone',
        'address',
        'city',
        'state',
        'points'
    ];

    protected $primaryKey = "customer_id";
    public $timestamps = false;

    public function goldMember(){
        return $this->points > 2000;
    }
}
