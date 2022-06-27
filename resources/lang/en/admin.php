<?php

return [
    'admin-user' => [
        'title' => 'Users',

        'actions' => [
            'index' => 'Users',
            'create' => 'New User',
            'edit' => 'Edit :name',
            'edit_profile' => 'Edit Profile',
            'edit_password' => 'Edit Password',
        ],

        'columns' => [
            'id' => 'ID',
            'last_login_at' => 'Last login',
            'first_name' => 'First name',
            'last_name' => 'Last name',
            'email' => 'Email',
            'password' => 'Password',
            'password_repeat' => 'Password Confirmation',
            'activated' => 'Activated',
            'forbidden' => 'Forbidden',
            'language' => 'Language',
                
            //Belongs to many relations
            'roles' => 'Roles',
                
        ],
    ],

    'area' => [
        'title' => 'Areas',

        'actions' => [
            'index' => 'Areas',
            'create' => 'New Area',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'codigo_area' => 'Codigo area',
            'nombre_area' => 'Nombre area',
            'descripcion' => 'Descripcion',
            
        ],
    ],

    'turno' => [
        'title' => 'Turnos',

        'actions' => [
            'index' => 'Turnos',
            'create' => 'New Turno',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'codigo_turno' => 'Codigo turno',
            'nombre_turno' => 'Nombre turno',
            'descripcion' => 'Descripcion',
            'horas_trabajo' => 'Horas trabajo',
            'hora_entrada_am' => 'Hora entrada am',
            'hora_salida_am' => 'Hora salida am',
            'hora_entrada_pm' => 'Hora entrada pm',
            'hora_salida_pm' => 'Hora salida pm',
            
        ],
    ],

    'biometrico' => [
        'title' => 'Biometricos',

        'actions' => [
            'index' => 'Biometricos',
            'create' => 'New Biometrico',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'codigo_bio' => 'Codigo bio',
            'fecha' => 'Fecha',
            'hora' => 'Hora',
            'ubicacion' => 'Ubicacion',
            'estado' => 'Estado',
            
        ],
    ],

    'departamento' => [
        'title' => 'Departamentos',

        'actions' => [
            'index' => 'Departamentos',
            'create' => 'New Departamento',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'codigo_departamento' => 'Codigo departamento',
            'nombre_departamento' => 'Nombre departamento',
            'descripcion' => 'Descripcion',
            'id_area' => 'Id area',
            
        ],
    ],

    'empleado' => [
        'title' => 'Empleados',

        'actions' => [
            'index' => 'Empleados',
            'create' => 'New Empleado',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'nic' => 'Nic',
            'codigo_empleado' => 'Codigo empleado',
            'nombres' => 'Nombres',
            'apellido_paterno' => 'Apellido paterno',
            'apellido_materno' => 'Apellido materno',
            'telefono' => 'Telefono',
            'celular' => 'Celular',
            'email' => 'Email',
            'profesión' => 'Profesión',
            'puesto' => 'Puesto',
            'id_departamento' => 'Id departamento',
            'id_turno' => 'Id turno',
            
        ],
    ],

    'permiso' => [
        'title' => 'Permisos',

        'actions' => [
            'index' => 'Permisos',
            'create' => 'New Permiso',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'fecha_pedido' => 'Fecha pedido',
            'fecha_inicio' => 'Fecha inicio',
            'fecha_fin' => 'Fecha fin',
            'nro_dias' => 'Nro dias',
            'motivo' => 'Motivo',
            'tipo_permiso' => 'Tipo permiso',
            'autoriza' => 'Autoriza',
            'id_empleado' => 'Id empleado',
            
        ],
    ],

    'registro' => [
        'title' => 'Registros',

        'actions' => [
            'index' => 'Registros',
            'create' => 'New Registro',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'fecha' => 'Fecha',
            'hora_entrada_am' => 'Hora entrada am',
            'hora_salida_am' => 'Hora salida am',
            'hora_entrada_pm' => 'Hora entrada pm',
            'hora_salida_pm' => 'Hora salida pm',
            'codigo_empleado' => 'Codigo empleado',
            'id_biometrico' => 'Id biometrico',
            'id_empleado' => 'Id empleado',
            
        ],
    ],

    'retraso' => [
        'title' => 'Retrasos',

        'actions' => [
            'index' => 'Retrasos',
            'create' => 'New Retraso',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'fecha' => 'Fecha',
            'minutos' => 'Minutos',
            'horas' => 'Horas',
            'id_empleado' => 'Id empleado',
            'id_registro' => 'Id registro',
            
        ],
    ],

    'multa' => [
        'title' => 'Multas',

        'actions' => [
            'index' => 'Multas',
            'create' => 'New Multa',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'fecha' => 'Fecha',
            'id_empleado' => 'Id empleado',
            'id_registro' => 'Id registro',
            
        ],
    ],

    'horas-extra' => [
        'title' => 'Horas Extras',

        'actions' => [
            'index' => 'Horas Extras',
            'create' => 'New Horas Extra',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'fecha' => 'Fecha',
            'minutos' => 'Minutos',
            'id_empleado' => 'Id empleado',
            'id_registro' => 'Id registro',
            
        ],
    ],

    // Do not delete me :) I'm used for auto-generation
];