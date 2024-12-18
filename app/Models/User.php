<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class User extends Authenticatable
{
    use HasFactory;

    protected $table = 'users'; // Nama tabel jika berbeda dengan konvensi

    protected $fillable = [
        'name', 
        'email', 
        'password', 
        'is_admin'
    ];

    protected $hidden = [
        'password'
    ];

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }


    // public function orders()
    // {
    //     return $this->hasMany(Order::class, 'customer_id');
    // }

    // public function setPasswordAttribute($value)
    // {
    //     $this->attributes['password'] = bcrypt($value);
    // }

    protected static function boot()
    {
    parent::boot();

    // static::created(function ($user) {
    //     \Log::info('User berhasil disimpan ke database:', $user->toArray());
    // });
    }


    /**
     * Atribut yang harus dikonversi ke tipe data tertentu.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'is_admin' => 'boolean'
    ];

        /**
     * Set the user's password.
     *
     * @param  string  $value
     * @return void
     */
    
    // public function setPasswordAttribute($value)
    // {
    //     $this->attributes['password'] = bcrypt($value);
    // }

}
