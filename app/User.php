<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Cashier\Billable;
use Laravel\Passport\HasApiTokens;
use Laravel\Scout\Searchable;
use App\Traits\HasRolesAndPermissions;

class User extends Authenticatable
{
    use HasApiTokens, Billable, Notifiable, HasRolesAndPermissions, Searchable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function profiles() {
      //A User has one Profile
      return $this->hasOne(Profile::class);
      
    }

    public function projects() {
        //A User has many Projects
        return $this->hasMany(Project::class);
      
      }
  
      public function tasks() {
        //A User has many Tasks
        return $this->hasMany(Task::class);
  
      }
  
      public function workOrders() {
        //A User has many Work Orders
        return $this->hasMany(WorkOrder::class);
  
      }
  
      public function customers() {
        //A User has many Customers and a Customer belongs to many Users
        return $this->hasMany(Customer::class);
  
      }
  
      public function locations() {
        //A User has many Locations
        return $this->hasMany(Location::class);
  
      }
  
      public function quotes() {
        //A User has many Quotes
        return $this->hasMany(Quote::class);
        
      }
  
      public function employees() {
        //A User has many Employees
        return $this->hasMany(Employee::class);
        
      }
  
      public function assets() {
        //A User has many Assets
        return $this->hasMany(Asset::class);
        
      }

      public function roles() {
        //A User belongs to many Roles
        return $this->belongsToMany(Role::class);

      }

      public function departments() {
        //A User belongs to a Department
        return $this->belongsTo(Department::class);

      }
}
