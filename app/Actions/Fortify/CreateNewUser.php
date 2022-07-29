<?php

namespace App\Actions\Fortify;

use App\Events\NewUserCreatedEvent;
use App\Models\User;
use App\Notifications\NewUserCreatedNotification;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;
    use Notifiable;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

        /* if(request()->hasFile('image')) {
            dd(request()->file('image'));
            
        } */
        $user = User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);

        if(request()->hasFile('image')) {
            $imageName = time() . '.' . request()->file('image')->getClientOriginalExtension();
            request()->file('image')->storeAs('profile-photos',$imageName);
            $user->update(['profile_photo_path' => 'profile-photos/'.$imageName]);
        }
        $user->assignRole('user');
        //$user->notify(new NewUserCreatedNotification());
        return $user;
    }
}
