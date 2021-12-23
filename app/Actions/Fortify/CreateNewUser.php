<?php

namespace App\Actions\Fortify;

use App\Models\Team;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;

use App\Repositories\Eloquent\UtilizadorRepository;



class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */

    protected $user;
    public function __construct(UtilizadorRepository $user){
        $this->user=$user;
    }
    public function create(array $input)
    {

        // dd($input);
        Validator::make($input, [
            'vc_nomeUtilizador' => ['required', 'string', 'max:255'],
            'vc_email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
        ])->validate();
        return $this->user->store($input);

        // Validator::make($input, [
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        //     'password' => $this->passwordRules(),
        // ])->validate();

        // return DB::transaction(function () use ($input) {
        //     return tap(User::create([
        //         'name' => $input['name'],
        //         'email' => $input['email'],
        //         'password' => Hash::make($input['password']),
        //     ]), function (User $user) {
        //         $this->createTeam($user);
        //     });
        // });
    }

    /**
     * Create a personal team for the user.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
   
}
