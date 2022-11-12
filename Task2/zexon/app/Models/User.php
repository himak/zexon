<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
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
    ];

    /**
     * Define Users
     *
     * @var array|array[]
     */
    protected array $users = [
        [ 'id' => 5, 'name' => 'Richard', 'score' => 505, 'active' => true],
        [ 'id' => 8, 'name' => 'Peter', 'score' => 704, 'active' => false],
        [ 'id' => 9, 'name' => 'Tomáš', 'score' => 104, 'active' => true],
        [ 'id' => 10, 'name' => 'Adam', 'score' => 557, 'active' => true],
    ];

    /**
     * Get all Users
     * @return array|array[]
     */
    public function getUsers(): array
    {
        return $this->users;
    }
}
