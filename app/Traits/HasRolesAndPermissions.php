<?php 

namespace App\Traits;

use App\Role;
use App\Permission;
trait HasRolesAndPermissions

{

    /**
     * @param mixed ...$roles
     * @return bool
     */
                                    //Check if a current logged in user has a role
public function hasRole(... $roles ) {
    foreach ($roles as $role) {
        if ($this->roles->contains('slug', $role)) {
            return true;
        }
    }
    return false;
}

    /**
     * @param $permission
     * @return bool
     */

protected function hasPermission($permission) {
                                    //Checking the permission for a current user
    return (bool) $this->permissions->where('slug', $permission->slug)->count();

}

    /**
     * @param $permission
     * @return bool
     */

protected function hasPermissionTo($permission) {
                                //Checking the permission for a current user
    return $this->hasPermissionThroughRole($permission) || $this->hasPermission($permission);

}

/**
 * @param $permission
 * @return bool
 */
                                //Check if a user has permission through its role
public function hasPermissionThroughRole($permission) {
    foreach ($permission->roles as $role){
        if($this->roles->contains($role)) {
            return true;
        }
    }
    return false;
}

    /**
     * @param array $permissions
     * @return mixed
     */
protected function getAllPermissions(array $permissions) {

    return Permission::whereIn('slug',$permissions)->get();

}

    /**
     * @param mixed ...$permissions
     * @return $this
     */

public function givePermissionsTo(... $permissions) {
    $permissions = $this->getAllPermissions($permissions);
    if($permissions === null) {
        return $this;
    }
    $this->permissions()->saveMany($permissions);
    return $this;
}

    /**
     * @param mixed ...$permissions
     * @return $this
     */

public function deletePermissions(... $permissions ) {
    $permissions = $this->getAllPermissions($permissions);
    $this->permissions()->detach($permissions);
    return $this;
}

    /**
     * @param mixed ...$permissions
     * @return HasRolesAndPermissions
     */

 public function refreshPermissions(... $permissions ) {
    $this->permissions()->detach();
    return $this->givePermissionsTo($permissions);
}

    /**
     * @return mixed
     */

    public function roles() {

        return $this->belongsToMany(Role::class, 'user_roles');

    }

    /**
     * @return mixed
     */

    public function permissions() {

        return $this->belongsToMany(Permission::class, 'user_permissions');

    }
}