<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        /*return [
            'vc_nome' => $this->faker->name,
            'vc_email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];*/
        return [
            'vc_nomeUtilizador' => "Kaila System Solutions",
            'vc_email' => "geral@kaila.co.ao",
            'email_verified_at' => now(),
            'password' => bcrypt("12345678"), // password
            'vc_telefone' => "",
            'vc_tipoUtilizador' => "Administrador",
            'vc_genero' => "M",
            'remember_token' => Str::random(10),
        ];
    }
}
