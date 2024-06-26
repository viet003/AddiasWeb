<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id', 
        'user_name', 
        'email', 
        'password', 
        'role', 
        'accesToken'
    ];

    protected $attributes = [
        'accesToken' => 0, // Default value
    ];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->setDefaultState();
    }

    private function setDefaultState()
    {
        if (!array_key_exists('accesToken', $this->attributes)) {
            $this->attributes['accesToken'] = 0;
        }
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Get the carts for the user.
     */
    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    public function customer()
    {
        return $this->hasOne(Customer::class, 'user_id', 'id');
    }    

}
