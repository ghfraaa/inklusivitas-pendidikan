<?php

namespace App\Policies;

use App\Models\Participant;
use App\Models\User;

class ParticipantPolicy
{
    public function view(User $user, Participant $participant)
    {
        return $user->isAdmin() || $participant->program->created_by === $user->id;
    }

    public function update(User $user, Participant $participant)
    {
        return $user->isAdmin() || $participant->program->created_by === $user->id;
    }

    public function delete(User $user, Participant $participant)
    {
        return $user->isAdmin() || $participant->program->created_by === $user->id;
    }
}
