<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | Here you can change the default title of your admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#61-title
    |
     */

    'title' => 'Sistema de Gestão Escolar',
    'title_prefix' => '',
    'title_postfix' => '',

    /*
    |--------------------------------------------------------------------------
    | Favicon
    |--------------------------------------------------------------------------
    |
    | Here you can activate the favicon.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#62-favicon
    |
     */

    'use_ico_only' => true,
    'use_full_favicon' => true,

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | Here you can change the logo of your admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#63-logo
    |
     */

    'logo' => '<b>Gestão</b> de Escolas',
    'logo_img' => 'images/logotipo/logo.png',
    'logo_img_class' => 'brand-image img-circle elevation-3 bg-white',
    'logo_img_xl' => null,
    'logo_img_xl_class' => 'brand-image-xs',
    'logo_img_alt' => 'AdminLTE',

    /*
    |--------------------------------------------------------------------------
    | User Menu
    |--------------------------------------------------------------------------
    |
    | Here you can activate and change the user menu.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#64-user-menu
    |
     */

    'usermenu_enabled' => true,
    'usermenu_header' => true,
    'usermenu_header_class' => 'bg-primary',
    'usermenu_image' => false,
    'usermenu_desc' => false,
    'usermenu_profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Here we change the layout of your admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#71-layout
    |
     */

    'layout_topnav' => null,
    'layout_boxed' => null,
    'layout_fixed_sidebar' => null,
    'layout_fixed_navbar' => null,
    'layout_fixed_footer' => null,

    /*
    |--------------------------------------------------------------------------
    | Authentication Views Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the authentication views.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#721-authentication-views-classes
    |
     */

    'classes_auth_card' => 'card-outline card-primary',
    'classes_auth_header' => '',
    'classes_auth_body' => '',
    'classes_auth_footer' => '',
    'classes_auth_icon' => '',
    'classes_auth_btn' => 'btn-flat btn-primary',

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#722-admin-panel-classes
    |
     */

    'classes_body' => '',
    'classes_brand' => '',
    'classes_brand_text' => '',
    'classes_content_wrapper' => '',
    'classes_content_header' => '',
    'classes_content' => '',
    'classes_sidebar' => 'sidebar-dark-primary elevation-4',
    'classes_sidebar_nav' => '',
    'classes_topnav' => 'navbar-white navbar-light',
    'classes_topnav_nav' => 'navbar-expand',
    'classes_topnav_container' => 'container',

    /*
    |--------------------------------------------------------------------------
    | Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#73-sidebar
    |
     */

    'sidebar_mini' => true,
    'sidebar_collapse' => false,
    'sidebar_collapse_auto_size' => false,
    'sidebar_collapse_remember' => false,
    'sidebar_collapse_remember_no_transition' => true,
    'sidebar_scrollbar_theme' => 'os-theme-light',
    'sidebar_scrollbar_auto_hide' => 'l',
    'sidebar_nav_accordion' => true,
    'sidebar_nav_animation_speed' => 300,

    /*
    |--------------------------------------------------------------------------
    | Control Sidebar (Right Sidebar)
    |--------------------------------------------------------------------------
    |
    | Here we can modify the right sidebar aka control sidebar of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#74-control-sidebar-right-sidebar
    |
     */

    'right_sidebar' => false,
    'right_sidebar_icon' => 'fas fa-cogs',
    'right_sidebar_theme' => 'dark',
    'right_sidebar_slide' => true,
    'right_sidebar_push' => true,
    'right_sidebar_scrollbar_theme' => 'os-theme-light',
    'right_sidebar_scrollbar_auto_hide' => 'l',

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Here we can modify the url settings of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#65-urls
    |
     */

    'use_route_url' => false,

    'dashboard_url' => '/',

    'logout_url' => 'logout',

    'login_url' => 'login',

    'register_url' => 'register',

    'password_reset_url' => 'password/reset',

    'password_email_url' => 'password/email',

    'profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Laravel Mix
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Laravel Mix option for the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#92-laravel-mix
    |
     */

    'enabled_laravel_mix' => false,
    'laravel_mix_css_path' => 'css/app.css',
    'laravel_mix_js_path' => 'js/app.js',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar/top navigation of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#8-menu-configuration
    |
     */

    'menu' => [
        [
            'text' => 'search',
            'search' => false,
            'topnav' => true,
        ],
        [
            'text' => 'blog',
            'url' => 'admin/blog',
            'can' => 'manage-blog',
        ],

        ['header' => 'Candidatos'],
        [
            'text' => 'Candidatos',
            'url' => '#',
            'icon' => 'fas fa-fw fa-user-plus',
            'submenu' => [
                [
                    'text' => 'Lista de Candidatos',
                    'url'  => '/candidatos/pesquisar',
                ],
                [
                    'text' => 'Imprimir Lista dos Candidatos',
                    'url' =>  'Candidatos/pesquisarCandidatos',
                ]

            ],
        ],

        [
            'text' => 'Selecção de Candidatos',
            'url'  => "#",
            'icon' => 'fas fa-fw fa-users',
            'submenu' => [

                [
                    'text' => 'Selecionar candidato',
                    'url' => 'admin/alunos/cadastrar',
                ],
                [
                    'text' => 'Lista de Admitidos',
                    'url'  => 'admin/alunos/pesquisar',

                ],
                [
                    'text' => 'Imprimir Lista dos Admitidos',
                    'url' =>  'Admin/pesquisarSelecionados',
                ]
            ],
        ],
        //Matriculas
        [
            'text' => 'Matriculas',
            'url' => "#",
            'icon' => 'fas fa-fw fa-paste',
            'submenu' => [
                [
                    'text' => 'Matricular Aluno',
                    'url' => 'Admin/matriculas/cadastrar',
                ],
                [
                    'text' => 'Listar',
                    'url' => 'Admin/pesquisarMatriculados',
                ],
                [
                    'text' => 'Gerar Boletim',
                    'url' => 'admin/matriculas/pesquisar',
                    'icon' => 'fas fa-fw fa-file-pdf',
                ],

            ],
        ],

        ['header' => 'Relatórios'],
        [
            'text' => 'Relatórios',
            'url'  => "#",
            'icon' => 'fas fa-fw fa-info-circle',
            'submenu' => [

                [
                    'text' => 'Candidatura',
                    'url' => 'relatorios/candidatura/pesquisar',
                ],
                [
                    'text' => 'Selecção de Candidatos',
                    'url'  => 'relatorios/seleccao/pesquisar',

                ],
                [
                    'text' => 'Matricula',
                    'url'  => '#',

                ],

                [
                    'text' => 'Alunos',
                    'url'  => "#",
                    'icon' => 'fas fa-fw fa-circle',
                    'submenu' => [

                        [
                            'text' => 'Por ano Lectivo',
                            'url'  => '#',
                        ],
                        [

                            'text' => 'Por Classe',
                            'url'  => '#',

                        ],
                        [

                            'text' => 'Por Curso',
                            'url'  => '#',

                        ],
                        [
                            'text' => 'Com deficiência física',
                            'url'  => '#',

                        ],


                    ],

                ],
            ],
        ],




        //============================Configurações-Start=================================================//
        ['header' => 'Configurações'],
        //Ano Lectivo
        [
            'text' => 'Anos Lectivo',
            'url' => "#",
            'icon' => 'fas fa-fw fa-calendar-alt',
            'submenu' => [

                [
                    'text' => 'Cadastrar',
                    'url' => '/admin/anolectivo/cadastrar',
                ],

                [
                    'text' => 'Listar',
                    'url' => '/admin/anolectivo',
                ],
            ],
        ],
        [
            'text' => 'Cursos',
            'icon' => 'fas fa-fw fa-wallet',
            'submenu' => [
                [
                    'text' => 'Cadastrar',
                    'url' => 'Admin/cursos/create/index',
                ],
                [
                    'text' => 'Listar',
                    'url' => 'Admin/cursos/index/index',
                ],

            ],
        ],
        //Classe
        [
            'text' => 'Classes',
            'url' => "#",
            'icon' => 'fas fa-fw fa-graduation-cap',
            'submenu' => [

                [
                    'text' => 'Cadastrar',
                    'url' => '/admin/classes/cadastrar',
                ],

                [
                    'text' => 'Listar',
                    'url' => '/admin/classes',
                ],
            ],
        ],
        [
            'text' => 'Turmas',
            'url' => "#",
            'icon' => 'fas fa-fw fa-book',
            'submenu' => [

                [
                    'text' => 'Cadastrar',
                    'url' => 'turmas/cadastrarTurmas',
                ],
                [
                    'text' => 'Listar',
                    'url' => '/turmas/pesquisar',
                ],

            ],
        ],

        //Idade de Candidatura
        [
            'text' => 'Idades de Candidatura',
            'url' => "#",
            'icon' => 'fas fa-fw fa-calendar-day',
            'submenu' => [

                [
                    'text' => 'Cadastrar',
                    'url' => '/admin/idadedecandidatura/cadastrar',
                ],

                [
                    'text' => 'Listar',
                    'url' => '/admin/idadedecandidatura',
                ],
            ],
        ],
        [
            'text' => 'Disciplinas',
            'url' => "#",
            'icon' => 'fas fa-fw fa-poll-h',
            'submenu' => [
                [
                    'text' => 'Inserir Disciplina',
                    'url' => 'disciplina',
                ],
                [
                    'text' => 'Visualizar Disciplinas',
                    'url' => 'disciplina/ver',
                ],

            ],
        ],




        //============================Configurações-End=================================================//

        ['header' => 'Pautas'],

        [
            'text' => 'Pautas',
            'url' => "#",
            'icon' => 'fas fa-fw fa-calendar',
            'submenu' => [

                [
                    'text' => 'Adicionar Pauta',
                    'url' => '/pauta/pesquisar',
                ],


            ],
        ],
        [
            'text' => 'Notas',
            'url' => "#",
            'icon' => 'fas fa-fw fa-list-ol',
            'submenu' => [
                [
                    'text' => 'Inserir nota',
                    'url' => 'nota',
                ],

                [
                    'text' => 'Visualizar nota',
                    'url' => 'nota/pesquisar',
                ],

            ],
        ],



        ['header' => 'Declarações'],
        [
            'text' => 'Declarações Sem Notas',
            'url' => "#",
            'icon' => 'fas fa-fw fa-file-alt',
            'submenu' => [

                [
                    'text' => 'Criar Declaração',
                    'url' => 'Declaracoes/paginaCadastrar',
                ],

                [
                    'text' => 'Listar Declarações',
                    'url' => 'Declaracoes/paginaListar',
                ],
            ],
        ],
        [
            'text' => 'Declarações Com Notas',
            'url' => "#",
            'icon' => 'fas fa-fw fa-file-alt',
            'submenu' => [

                [
                    'text' => 'Buscar Aluno',
                    'url' => 'declaracaoComNotas/home',
                ],

                [
                    'text' => 'Declarações Geradas',
                    'url' => 'declaracaoComNotas/listar',
                ]


            ],
        ],


        ['header' => 'Emissão de Cartão'],
        [
            'text' => 'Emissão de Cartão',
            'url'  => "#",
            'icon' => 'fas fa-fw fa-id-badge',
            'submenu' => [

                [
                    'text' => 'Cartão de Aluno',
                    'url'  => '/admin/cartaoaluno',
                ],

                [
                    'text' => 'Cartão de Funcionario',
                    'url' => "#",
                    'icon' => 'fas fa-fw fa-circle',
                    'submenu' => [

                        [
                            'text' => 'Cadastrar',
                            'url'  => '/admin/cartaofuncionario/cadastrar',
                        ],

                        [
                            'text' => 'Visualizar',
                            'url'  => '/admin/cartaofuncionario',
                        ],

                    ],
                ],



            ],

        ],
        ['header' => 'Gestão de Patrimonio'],
        [
            'text' => 'Gestão de Patrimonio',
            'url' => "#",
            'icon' => 'fas fa-fw fa-university',
            'submenu' => [

                [
                    'text' => 'Cadastrar Patrimonio',
                    'url' => 'admin/patrimonios/cadastrar',
                ],

                [
                    'text' => 'visualizar Patrimonio',
                    'url' => 'admin/patrimonios/visualizar',
                ]


            ],
        ],
        ['header' => 'Configurações da Conta'],
        [
            'text' => 'Perfil',
            'url' => "user/profile",
            'icon' => 'fas fa-fw fa-user-cog',

        ],




    ],



    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Here we can modify the menu filters of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#83-custom-menu-filters
    |
     */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SearchFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\LangFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\DataFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Here we can modify the plugins used inside the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#91-plugins
    |
     */

    'plugins' => [
        'Datatables' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'js/datatables/jquery.dataTables.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'js/datatables/dataTables.bootstrap4.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => 'css/datatables/dataTables.bootstrap4.min.css',
                ],
            ],
        ],

        'Select2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css',
                ],
            ],
        ],
        'Chartjs' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js',
                ],
            ],
        ],
        'Sweetalert2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.jsdelivr.net/npm/sweetalert2@8',
                ],
            ],
        ],
        'Pace' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/blue/pace-theme-center-radar.min.css',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js',
                ],
            ],
        ],
    ],

    'livewire' => false,

];
