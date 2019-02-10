<?php

namespace App\Policies;

use App\User;
use App\Post;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    public function view(User $user, Post $post)
    {

     return $user->can('view-post') && $user->id === $post->user_id;

    }


}
