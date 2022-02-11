<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Notifications\RedefinirSenhaNotification;
use App\Notifications\VerificarEmailNotification;

// https://laravel.com/docs/8.x/verification
class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Send a password reset notification to the user.
     *
     * @param  string  $token
     * @return void
     * @see https://laravel.com/docs/8.x/passwords#reset-email-customization
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new RedefinirSenhaNotification($token, $this->email));
    }

    public function sendEmailVerificationNotification()
    {
        $this->notify(new VerificarEmailNotification());
    }

    public function tarefas(){
        // hasMany tem muitos
        // return $this->hasMany('App\Models\Tarefa');
        return $this->hasMany(Tarefa::class);
    }
}
