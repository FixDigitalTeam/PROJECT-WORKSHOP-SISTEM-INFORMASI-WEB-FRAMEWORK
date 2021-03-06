<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_transaction';

    protected $fillable = [
        'user_id', 'id_package', 'phone_number',
        'payment_method', 'payment_total', 'payment_status', 'project_desc',
        'deadline', 'working_status', 'persentase', 'process_desc', 'id_product' 
    ];

    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function package() {
        return $this->belongsTo(Package::class, 'id_package', 'id_package');
    }

    public function product() {
        return $this->belongsTo(Product::class, 'id_product', 'id_product');
    }
}
