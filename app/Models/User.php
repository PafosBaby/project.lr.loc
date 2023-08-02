<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use PhpParser\Node\Expr\FuncCall;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

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

    public function getRoles()
    {
        $roleNames = [];
        foreach ($this->roles as $role) {
            $roleNames[] = $role->name;
        }

        return implode(', ', $roleNames);

    }

    public function getPermissions()
{
    $tmpPerms=[];
    if($this->getDirectPermissions()->count()){
        foreach($this->getDirectPermissions() as $perm){
            $tmpPerms[]= $perm->name;
        }
    }else{
        foreach($this->getAllPermissions() as $perm){
            $tmpPerms[]= $perm->name;
        }
    }
    return implode(', ', $tmpPerms);
}


}
