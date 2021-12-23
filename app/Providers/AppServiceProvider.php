<?php

namespace App\Providers;
use App\Models\Cabecalho;
use Illuminate\Support\ServiceProvider;
// use App\Models\PermissaoNota;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
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
        
       
        view()->composer('*', function ($view) {
            $response['cabecalho'] = Cabecalho::orderby('id', 'desc')->first();
            $cabecalhos=$response['cabecalho'];
            $cabe=session()->get('cabecalhos', $cabecalhos);     
            $cab = $cabe; 
            session()->has('cabecalhos') ? session()->get('cabecalhos'):[''];
            $view->with('cab', $cab);

            // $response['permissao_nota'] = PermissaoNota::find(1);
            // $estadoPermissaoNota=$response['permissao_nota']->estado;
            // $view->with('estado_permissao_nota', $estadoPermissaoNota);
            
        });
    }
}
