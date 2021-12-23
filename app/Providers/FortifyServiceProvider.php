<?php

namespace App\Providers;

use App\Actions\Fortify\CreateNewUser;
use App\Actions\Fortify\ResetUserPassword;
use App\Actions\Fortify\UpdateUserPassword;
use App\Actions\Fortify\UpdateUserProfileInformation;
use Illuminate\Support\ServiceProvider;
use Laravel\Fortify\Fortify;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Logger;



class FortifyServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    private $Logger;
    public function __construct()
    {
        $this->Logger = new Logger();
    }
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Fortify::createUsersUsing(CreateNewUser::class);
        Fortify::updateUserProfileInformationUsing(UpdateUserProfileInformation::class);
        Fortify::updateUserPasswordsUsing(UpdateUserPassword::class);
        Fortify::resetUserPasswordsUsing(ResetUserPassword::class);

        // Fortify::loginView(function(){   
        //     return view('auth.login');
        // });

        Fortify::loginView(fn () => view('auth.login'));

        Fortify::authenticateUsing(function (Request $request) {
            $user = User::where('vc_email', $request->vc_email)->first();
    
            if ($user &&
                Hash::check($request->password, $user->password)) {
                return $user;
            }
        });

        Fortify::registerView(fn () => view('auth.register'));

        Fortify::requestPasswordResetLinkView(function () {
            return view('auth.passwords.email');
        });
        Fortify::resetPasswordView(function ($request) {
            return view('auth.passwords.reset-password', ['request' => $request]);
        });

    }

   
}
