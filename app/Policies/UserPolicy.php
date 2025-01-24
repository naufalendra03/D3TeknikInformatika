<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    public function create(User $user)
    {
        return $user->role === 'admin'; // Hanya admin yang bisa membuat user baru
    }

    public function update(User $user, User $model)
    {
        return $user->role === 'admin'; // Hanya admin yang bisa mengedit user
    }

    public function delete(User $user, User $model)
    {
        return $user->role === 'admin'; // Hanya admin yang bisa menghapus user
    }
}