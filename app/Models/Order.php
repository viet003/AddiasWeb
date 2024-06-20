<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'product_id',
        'size',
        'color',
        'bill',
        'state',
        'quantity'
    ];

    protected $attributes = [
        'state' => 0, // Default value
    ];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->setDefaultState();
    }

    private function setDefaultState()
    {
        if (!array_key_exists('state', $this->attributes)) {
            $this->attributes['state'] = 0;
        }
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
