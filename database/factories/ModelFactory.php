<?php

/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Brackets\AdminAuth\Models\AdminUser::class, function (Faker\Generator $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->email,
        'password' => bcrypt($faker->password),
        'remember_token' => null,
        'activated' => true,
        'forbidden' => $faker->boolean(),
        'language' => 'en',
        'deleted_at' => null,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        'last_login_at' => $faker->dateTime,
        
    ];
});/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Area::class, static function (Faker\Generator $faker) {
    return [
        'codigo_area' => $faker->sentence,
        'nombre_area' => $faker->sentence,
        'descripcion' => $faker->sentence,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Turno::class, static function (Faker\Generator $faker) {
    return [
        'codigo_turno' => $faker->sentence,
        'nombre_turno' => $faker->sentence,
        'descripcion' => $faker->sentence,
        'horas_trabajo' => $faker->randomNumber(5),
        'hora_entrada_am' => $faker->randomNumber(5),
        'hora_salida_am' => $faker->randomNumber(5),
        'hora_entrada_pm' => $faker->randomNumber(5),
        'hora_salida_pm' => $faker->randomNumber(5),
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Biometrico::class, static function (Faker\Generator $faker) {
    return [
        'codigo_bio' => $faker->sentence,
        'fecha' => $faker->date(),
        'hora' => $faker->time(),
        'ubicacion' => $faker->sentence,
        'estado' => $faker->boolean(),
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Departamento::class, static function (Faker\Generator $faker) {
    return [
        'codigo_departamento' => $faker->sentence,
        'nombre_departamento' => $faker->sentence,
        'descripcion' => $faker->sentence,
        'id_area' => $faker->sentence,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Empleado::class, static function (Faker\Generator $faker) {
    return [
        'nic' => $faker->sentence,
        'codigo_empleado' => $faker->sentence,
        'nombres' => $faker->sentence,
        'apellido_paterno' => $faker->sentence,
        'apellido_materno' => $faker->sentence,
        'telefono' => $faker->sentence,
        'celular' => $faker->randomNumber(5),
        'email' => $faker->email,
        'profesión' => $faker->sentence,
        'puesto' => $faker->sentence,
        'id_departamento' => $faker->sentence,
        'id_turno' => $faker->sentence,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Permiso::class, static function (Faker\Generator $faker) {
    return [
        'fecha_pedido' => $faker->date(),
        'fecha_inicio' => $faker->date(),
        'fecha_fin' => $faker->date(),
        'nro_dias' => $faker->randomNumber(5),
        'motivo' => $faker->sentence,
        'tipo_permiso' => $faker->sentence,
        'autoriza' => $faker->sentence,
        'id_empleado' => $faker->sentence,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Registro::class, static function (Faker\Generator $faker) {
    return [
        'fecha' => $faker->date(),
        'hora_entrada_am' => $faker->time(),
        'hora_salida_am' => $faker->time(),
        'hora_entrada_pm' => $faker->time(),
        'hora_salida_pm' => $faker->time(),
        'codigo_empleado' => $faker->sentence,
        'id_biometrico' => $faker->sentence,
        'id_empleado' => $faker->sentence,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Retraso::class, static function (Faker\Generator $faker) {
    return [
        'fecha' => $faker->date(),
        'minutos' => $faker->randomNumber(5),
        'horas' => $faker->randomNumber(5),
        'id_empleado' => $faker->sentence,
        'id_registro' => $faker->sentence,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Multa::class, static function (Faker\Generator $faker) {
    return [
        'fecha' => $faker->date(),
        'id_empleado' => $faker->sentence,
        'id_registro' => $faker->sentence,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\HorasExtra::class, static function (Faker\Generator $faker) {
    return [
        'fecha' => $faker->date(),
        'minutos' => $faker->randomNumber(5),
        'id_empleado' => $faker->sentence,
        'id_registro' => $faker->sentence,
        
        
    ];
});
