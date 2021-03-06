<?php
    namespace App;
    
    use Laravel\Passport\HasApiTokens;
    use Illuminate\Notifications\Notifiable;
    use Illuminate\Foundation\Auth\User as Authenticatable;
    
    class User extends Authenticatable
    {
        use HasApiTokens, Notifiable;
        
        protected $fillable = ['name', 'email', 'password', 'chatkit_id'];
        
        protected $hidden = ['password', 'remember_token'];
        
        public function setPasswordAttribute($value)
        {
            $this->attributes['password'] = bcrypt($value);
        }
        }
