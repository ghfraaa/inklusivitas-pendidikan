<?php

namespace App\Policies;

use App\Models\Program;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class ProgramPolicy
{
    // app/Policies/ProgramPolicy.php

    public function view(User $user, Program $program)
    {
        return $user->isAdmin() || $program->created_by === $user->id;
    }

    public function update(User $user, Program $program)
    {
        return $user->isAdmin() || $program->created_by === $user->id;
    }

    public function delete(User $user, Program $program)
    {
        return $user->isAdmin() || $program->created_by === $user->id;
    }



}
