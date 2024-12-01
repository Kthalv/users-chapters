<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable; // Make sure this is imported

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Authenticatable
{
    use HasFactory;

    // Specify the table name if it's different from the plural form of the model name
    protected $table = 'admins';
    protected $fillable = ['name', 'email', 'password', 'role'];  // Make sure password is fillable
    protected $hidden = ['password', 'remember_token'];  // Hide sensitive data

      // Check if the user is an admin
      public function isAdmin()
      {
          return $this->role === 'admin';
      }
}
    