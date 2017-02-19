<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */
    'title' => 'Bintics CMS',
    'logout' => 'Salir',
    'enter' => 'Entrar',
    'new' => 'Nuevo',
    'save' => 'Guardar',
    'edit' => 'Editar',
    'delete' => 'Eliminar',
    'update' => 'Actualizar',
    'actions' => 'Acciones',
    'details' => 'Detalles',
    'enable' => 'Habilitar',
    'back' => '< Regresar',
    'disable' => 'Deshabilitar',
    'no_results' => 'No se encontraron resultados',
    'created_at' => 'Fecha de alta',
    'updated_at' => 'Fecha de actualización',
    'preview' => 'Preview',
    'home' => ['title' => 'Inicio'],
    'catalogs' => 'Catalogos',
    'format_courses' => ['title' => 'Formatos de cursos',
                         'new' => 'Nuevo formato de curso',
                         'field' => ['name' => 'Nombre del formato del curso',
                                     'created' => 'Fecha de alta',
                                     'updated' => 'Fecha de ultima actualizacion']],
    'users' => ['title' => 'Control de usuarios',
                'field' => ['email' => 'E-mail',
                            'created' => 'Fecha de alta',
                            'updated' => 'Fecha de ultima actualizacion']],
    'courses' => ['title' => 'Control de cursos',
                  'new' => 'Nuevo curso',
                  'edit' => 'Editar curso',
                  'field' => ['name' => 'Nombre del curso',
                              'start_date' => 'Fecha de inicio',
                              'cost' => 'Costo',
                              'url_logo' => 'URL de logo',
                              'short_description' => 'Descripción corta',
                              'long_description' => 'Descripción larga',
                              'registered' => 'Alumnos registrados']
                  ],
    'currencies' => ['title' => 'Tipos de moneda',
                  'new' => 'Nueva moneda',
                  'edit' => 'Editar moneda',
                  'type' => 'Tipo de moneda',
                  'field' => ['name' => 'Nombre de la moneda',
                              'description' => 'Descripción']
                  ],
    'sections' => ['title' => 'Secciones de página',
                  'new' => 'Nueva sección',
                  'edit' => 'Editar sección',
                  'field' => ['name' => 'Nombre de la sección',
                              'description' => 'Descripción',
                              'foreign_url' => 'URL externa'],
                  'page' => ['title' => 'Páginas de sección',
                             'field' => ['title' => 'Titulo de la página',
                                         'subtitle' => 'Sub titulo de la página',
                                         'container' => 'Contenido'
                                        ],
                            ],
                  'sub' => ['title' => 'Secciones',
                            'add' => 'Agregar sub sección',
                            'add_title' => 'Sub Secciones de :name',
                            'list' => 'Ver sub secciones',
                            'field' => ['name' => 'Nombre de la subsección']
                          ]
                  ],
    'menu' =>  ['title' => 'Menús',
                'new' => 'Nueva menú',
                'edit' => 'Editar menú',
                'field' => ['name' => 'Nombre del menú',
                            'pages' => 'Páginas'
                            ]
                  ],
    'pages' => ['title' => 'Páginas',
                  'new' => 'Nueva página',
                  'edit' => 'Editar página',
                  'field' => ['title' => 'Título de la página',
                              'withouttitle' => 'Sin título',
                              'public' => 'Publicar',
                              'asurl' => 'Mostrar como URL',
                              'url' => 'URL',
                              'menu' => 'Menú al que pertenece',
                              'subtitle' => 'Sub título',
                              'content' => 'Descripción'],
                  'sub' => ['title' => 'Páginas',
                            'add' => 'Agregar página',
                            'list' => 'Lista páginas']
                  ],


];
