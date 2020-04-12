<?php

return [
    'userManagement'  => [
        'title'          => 'Gestión de usuarios',
        'title_singular' => 'Gestión de usuarios',
    ],
    'permission'      => [
        'title'          => 'Permisos',
        'title_singular' => 'Permiso',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'title'             => 'Título',
            'title_helper'      => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'role'            => [
        'title'          => 'Roles',
        'title_singular' => 'Rol',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'title'              => 'Título',
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
    'user'            => [
        'title'          => 'Usuarios',
        'title_singular' => 'Usuario',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => '',
            'name'                     => 'Nombre',
            'name_helper'              => '',
            'email'                    => 'Email',
            'email_helper'             => '',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => '',
            'password'                 => 'Password',
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
    'assetManagement' => [
        'title'          => 'Gestión de Activos',
        'title_singular' => 'Gestión de Activo',
    ],
    'assetCategory'   => [
        'title'          => 'Categorías',
        'title_singular' => 'Categoría',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Nombre',
            'name_helper'       => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => '',
        ],
    ],
    'assetLocation'   => [
        'title'          => 'Localizaciones',
        'title_singular' => 'Localizacione',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Nombre',
            'name_helper'       => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => '',
        ],
    ],
    'assetStatus'     => [
        'title'          => 'Estados',
        'title_singular' => 'Estado',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Nombre',
            'name_helper'       => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => '',
        ],
    ],
    'asset'           => [
        'title'          => 'Bienes',
        'title_singular' => 'Biene',
        'fields'         => [
            'id'                   => 'ID',
            'id_helper'            => '',
            'category'             => 'Categoría',
            'category_helper'      => '',
            'serial_number'        => 'Número de Serie',
            'serial_number_helper' => '',
            'name'                 => 'Nombre',
            'name_helper'          => '',
            'photos'               => 'Fotos',
            'photos_helper'        => '',
            'status'               => 'Estado',
            'status_helper'        => '',
            'location'             => 'Ubicación',
            'location_helper'      => '',
            'notes'                => 'Observación',
            'notes_helper'         => '',
            'assigned_to'          => 'Asignado A',
            'assigned_to_helper'   => '',
            'created_at'           => 'Created at',
            'created_at_helper'    => '',
            'updated_at'           => 'Updated At',
            'updated_at_helper'    => '',
            'deleted_at'           => 'Deleted At',
            'deleted_at_helper'    => '',
        ],
    ],
    'assetsHistory'   => [
        'title'          => 'Historial',
        'title_singular' => 'Historial',
        'fields'         => [
            'id'                   => 'ID',
            'id_helper'            => '',
            'asset'                => 'Bien',
            'asset_helper'         => '',
            'status'               => 'Estado',
            'status_helper'        => '',
            'location'             => 'Ubicación',
            'location_helper'      => '',
            'assigned_user'        => 'Usuario Asignado',
            'assigned_user_helper' => '',
            'created_at'           => 'Created at',
            'created_at_helper'    => '',
            'updated_at'           => 'Updated At',
            'updated_at_helper'    => '',
        ],
    ],
    'taskManagement'  => [
        'title'          => 'Gestión de Tareas',
        'title_singular' => 'Gestión de Tarea',
    ],
    'taskStatus'      => [
        'title'          => 'Estados',
        'title_singular' => 'Estado',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Nombre',
            'name_helper'       => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => '',
        ],
    ],
    'taskTag'         => [
        'title'          => 'Tags',
        'title_singular' => 'Tag',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Nombre',
            'name_helper'       => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => '',
        ],
    ],
    'task'            => [
        'title'          => 'Tareas',
        'title_singular' => 'Tarea',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'name'               => 'Nombre',
            'name_helper'        => '',
            'description'        => 'Descripción',
            'description_helper' => '',
            'status'             => 'Estado',
            'status_helper'      => '',
            'tag'                => 'Tags',
            'tag_helper'         => '',
            'attachment'         => 'Adjunto',
            'attachment_helper'  => '',
            'due_date'           => 'Fecha Límite',
            'due_date_helper'    => '',
            'assigned_to'        => 'Asignado A',
            'assigned_to_helper' => '',
            'created_at'         => 'Created at',
            'created_at_helper'  => '',
            'updated_at'         => 'Updated At',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Deleted At',
            'deleted_at_helper'  => '',
        ],
    ],
    'tasksCalendar'   => [
        'title'          => 'Calendario',
        'title_singular' => 'Calendario',
    ],
];