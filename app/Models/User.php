<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

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
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    /**
     * Get the user's full name.
     *
     * @return string
     */
    public function getFullNameAttribute(): string

    {
        return "{$this->first_name} {$this->last_name}";
    }

    /**
     * Get the user's first name.
     *
     * @return string
     */
    public function getFirstNameAttribute(): string{
            return "{$this->first_name}";
    }

    public function createToken($name = "test", array $abilities = ['*'], DateTimeInterface $expiresAt = null){
        return $this->tokens()->create([
            'name' => $name,
            'tokenable_id' => $this->id,
            'tokenable_type' => get_class($this),
            'abilities' => $abilities,
            'expires_at' => $expiresAt,
        ]);
    }


}
