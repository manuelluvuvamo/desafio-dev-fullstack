<?php

namespace App\Repositories\Eloquent;

use App\Models\User;

use App\Models\Team;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Hash;

class  UtilizadorRepository implements UtilizadorInterface
// interface UtilizadorRepository extends UtilizadorInterface
{

    // use PasswordValidationRules;

    /**
     * Create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     * @param mixed $id
     */


    // public function get($id){

    // }

    // public function get($id){

    // }

    public function store(array $input)
    {

        return DB::transaction(function () use ($input) {
            return tap(
                User::create([
                    'vc_nomeUtilizador' => $input['vc_nomeUtilizador'],
                    'vc_email' => $input['vc_email'],
                    'vc_tipoUtilizador' => $input['vc_tipoUtilizador'],
                    'vc_telefone' => $input['vc_telefone'],
                    'vc_genero' => $input['vc_genero'],
                    'password' => Hash::make($input['password']),
                ]),
                function (User $user) {

                    return $this->createTeam($user);
                }
            );
        });
    }

    /**
     * Create a personal team for the user.
     *
     * @param  \App\Models\User  $user
     * @return void
     */

    protected function createTeam(User $user)
    {
        $user->ownedTeams()->save(Team::forceCreate([
            'user_id' => $user->id,
            'name' => explode(' ', $user->vc_nome, 2)[0] . "'s Team",
            'personal_team' => true,
        ]));
    }

    public function update(array $input, $id)
    {

        $dados = $input[0];
        User::find($id)->update([
            'vc_nomeUtilizador' => $dados['vc_nomeUtilizador'],
            'vc_email' => $dados['vc_email'],
            'vc_telefone' => $dados['vc_telefone'],
            'vc_genero' => $dados['vc_genero'],
            'password' => Hash::make($dados['password']),
        ]);

      
    }
}
