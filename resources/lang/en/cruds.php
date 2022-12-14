<?php

return [
    'userManagement' => [
        'title'          => 'Administrador de usuarios',
        'title_singular' => 'Administrador de usuario',
    ],
    'permission'     => [
        'title'          => 'Permisos',
        'title_singular' => 'Permiso',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'title'             => 'Titutlo',
            'title_helper'      => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    
    'university'     => [
        'title'          => 'Universidades',
        'title_singular' => 'Universidad',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'title'             => 'Nombre',
            'title_helper'      => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'career'     => [
        'title'          => 'Carreras',
        'title_singular' => 'Carrera',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'title'             => 'Nombre',
            'title_helper'      => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'course'     => [
        'title'          => 'Cursos',
        'title_singular' => 'Curso',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'title'             => 'Nombre',
            'title_helper'      => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'role'           => [
        'title'          => 'Roles',
        'title_singular' => 'Rol',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'title'              => 'Titutlo',
            'title_helper'       => '',
            'permissions'        => 'Permisos',
            'permissions_helper' => '',
            'created_at'         => 'Created at',
            'created_at_helper'  => '',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => '',
        ],
    ],
    'user'           => [
        'title'          => 'Usuarios',
        'title_singular' => 'Usuario',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => '',
            'name'                     => 'Nombre',
            'name_helper'              => '',
            'email'                    => 'Correo',
            'email_helper'             => '',
            'email_verified_at'        => 'Correo electr??nico verificado en',
            'email_verified_at_helper' => '',
            'password'                 => 'Contrase??a',
            'password_helper'          => '',
            'roles'                    => 'Roles',
            'roles_helper'             => '',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => '',
            'created_at'               => 'Created at',
            'created_at_helper'        => '',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => '',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => '',
        ],
    ],
    'appointment'           => [
        'title'          => 'Citas',
        'title_singular' => 'Cita',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => '',
            'name'                     => 'Nombre',
            'name_helper'              => '',
            'email'                    => 'Correo',
            'email_helper'             => '',
            'email_verified_at'        => 'Correo electr??nico verificado en',
            'email_verified_at_helper' => '',
            'password'                 => 'Contrase??a',
            'password_helper'          => '',
            'roles'                    => 'Roles',
            'roles_helper'             => '',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => '',
            'created_at'               => 'Created at',
            'created_at_helper'        => '',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => '',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => '',
            'date'        => 'Fecha',
            'date_available'        => 'Fecha disponible',
            'time_available'        => 'Hora disponible',
            'tutor'        => 'Tutor',
            'university'        => 'Universidad',
            'career'        => 'Carrera',
            'course'        => 'Materia',
            'start_time'        => 'Fecha y hora',
        ],
    ],
    'event'          => [
        'title'          => 'Todos los eventos',
        'title_singular' => 'Evento',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Nombre Evento',
            'name_helper'       => '',
            'start_time'        => 'Fecha y hora Inicio',
            'start_time_helper' => '',
            'end_time'          => 'Fecha y hora Final',
            'end_time_helper'   => '',
            'recurrence'        => 'Recurrencia',
            'recurrence_helper' => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
            'event'             => 'Evento',
            'course'             => 'Materia',
            'event_helper'      => '',
            'tutor_id'        => 'Tutor',
        ],
    ],
];
