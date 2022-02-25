<?php

namespace App\Observers;

use App\Models\User;

class UserObserver
{
    /**
     * Handle the User "created" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function created(User $user)
    {
        activity('user')
            ->performedOn($user)
            ->causedBy($user)
            //->withProperties(['customProperty' => 'customValue'])
            ->log( $user->first_name.' '.$user->last_name.' is new user registered');
    }

    /**
     * Handle the User "updated" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function updated(User $user)
    {
        $message = $user->first_name.' '.$user->last_name.' profile updated';
        if($user->isDirty('password')){
            $message = $user->first_name.' '.$user->last_name.' password updated';
        }

        activity('user')
            ->performedOn($user)
            ->causedBy($user)
            ->log( $message);
    }

    /**
     * Handle the User "deleted" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function deleted(User $user)
    {
        activity('user')
            ->performedOn($user)
            ->causedBy($user)
            //->withProperties(['customProperty' => 'customValue'])
            ->log( $user->first_name.' '.$user->last_name.' user deleted');
    }

    /**
     * Handle the User "restored" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function restored(User $user)
    {
        //
    }

    /**
     * Handle the User "force deleted" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function forceDeleted(User $user)
    {
        //
    }
}
