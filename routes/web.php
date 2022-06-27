<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('Registro', [RegistroController::class, 'index']);

//Route::post('guardar', [RegistroController::class, 'guardar']);
//Route::post('/{registro}','RegistrosController@update')->name('update');
//Route::post('/','RegistrosController@store')->name('store');
Route::post('store', [RegistroController::class, 'store']);





/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('admin-users')->name('admin-users/')->group(static function() {
            Route::get('/',                                             'AdminUsersController@index')->name('index');
            Route::get('/create',                                       'AdminUsersController@create')->name('create');
            Route::post('/',                                            'AdminUsersController@store')->name('store');
            Route::get('/{adminUser}/impersonal-login',                 'AdminUsersController@impersonalLogin')->name('impersonal-login');
            Route::get('/{adminUser}/edit',                             'AdminUsersController@edit')->name('edit');
            Route::post('/{adminUser}',                                 'AdminUsersController@update')->name('update');
            Route::delete('/{adminUser}',                               'AdminUsersController@destroy')->name('destroy');
            Route::get('/{adminUser}/resend-activation',                'AdminUsersController@resendActivationEmail')->name('resendActivationEmail');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::get('/profile',                                      'ProfileController@editProfile')->name('edit-profile');
        Route::post('/profile',                                     'ProfileController@updateProfile')->name('update-profile');
        Route::get('/password',                                     'ProfileController@editPassword')->name('edit-password');
        Route::post('/password',                                    'ProfileController@updatePassword')->name('update-password');
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('areas')->name('areas/')->group(static function() {
            Route::get('/',                                             'AreasController@index')->name('index');
            Route::get('/create',                                       'AreasController@create')->name('create');
            Route::post('/',                                            'AreasController@store')->name('store');
            Route::get('/{area}/edit',                                  'AreasController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'AreasController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{area}',                                      'AreasController@update')->name('update');
            Route::delete('/{area}',                                    'AreasController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('turnos')->name('turnos/')->group(static function() {
            Route::get('/',                                             'TurnosController@index')->name('index');
            Route::get('/create',                                       'TurnosController@create')->name('create');
            Route::post('/',                                            'TurnosController@store')->name('store');
            Route::get('/{turno}/edit',                                 'TurnosController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'TurnosController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{turno}',                                     'TurnosController@update')->name('update');
            Route::delete('/{turno}',                                   'TurnosController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('biometricos')->name('biometricos/')->group(static function() {
            Route::get('/',                                             'BiometricosController@index')->name('index');
            Route::get('/create',                                       'BiometricosController@create')->name('create');
            Route::post('/',                                            'BiometricosController@store')->name('store');
            Route::get('/{biometrico}/edit',                            'BiometricosController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'BiometricosController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{biometrico}',                                'BiometricosController@update')->name('update');
            Route::delete('/{biometrico}',                              'BiometricosController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('departamentos')->name('departamentos/')->group(static function() {
            Route::get('/',                                             'DepartamentosController@index')->name('index');
            Route::get('/create',                                       'DepartamentosController@create')->name('create');
            Route::post('/',                                            'DepartamentosController@store')->name('store');
            Route::get('/{departamento}/edit',                          'DepartamentosController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'DepartamentosController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{departamento}',                              'DepartamentosController@update')->name('update');
            Route::delete('/{departamento}',                            'DepartamentosController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('empleados')->name('empleados/')->group(static function() {
            Route::get('/',                                             'EmpleadosController@index')->name('index');
            Route::get('/create',                                       'EmpleadosController@create')->name('create');
            Route::post('/',                                            'EmpleadosController@store')->name('store');
            Route::get('/{empleado}/edit',                              'EmpleadosController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'EmpleadosController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{empleado}',                                  'EmpleadosController@update')->name('update');
            Route::delete('/{empleado}',                                'EmpleadosController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('permisos')->name('permisos/')->group(static function() {
            Route::get('/',                                             'PermisosController@index')->name('index');
            Route::get('/create',                                       'PermisosController@create')->name('create');
            Route::post('/',                                            'PermisosController@store')->name('store');
            Route::get('/{permiso}/edit',                               'PermisosController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'PermisosController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{permiso}',                                   'PermisosController@update')->name('update');
            Route::delete('/{permiso}',                                 'PermisosController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('registros')->name('registros/')->group(static function() {
            Route::get('/',                                             'RegistrosController@index')->name('index');
            Route::get('/create',                                       'RegistrosController@create')->name('create');
            Route::post('/',                                            'RegistrosController@store')->name('store');
            Route::get('/{registro}/edit',                              'RegistrosController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'RegistrosController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{registro}',                                  'RegistrosController@update')->name('update');
            Route::delete('/{registro}',                                'RegistrosController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('retrasos')->name('retrasos/')->group(static function() {
            Route::get('/',                                             'RetrasosController@index')->name('index');
            Route::get('/create',                                       'RetrasosController@create')->name('create');
            Route::post('/',                                            'RetrasosController@store')->name('store');
            Route::get('/{retraso}/edit',                               'RetrasosController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'RetrasosController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{retraso}',                                   'RetrasosController@update')->name('update');
            Route::delete('/{retraso}',                                 'RetrasosController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('multas')->name('multas/')->group(static function() {
            Route::get('/',                                             'MultasController@index')->name('index');
            Route::get('/create',                                       'MultasController@create')->name('create');
            Route::post('/',                                            'MultasController@store')->name('store');
            Route::get('/{multum}/edit',                                'MultasController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'MultasController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{multum}',                                    'MultasController@update')->name('update');
            Route::delete('/{multum}',                                  'MultasController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('horas-extras')->name('horas-extras/')->group(static function() {
            Route::get('/',                                             'HorasExtrasController@index')->name('index');
            Route::get('/create',                                       'HorasExtrasController@create')->name('create');
            Route::post('/',                                            'HorasExtrasController@store')->name('store');
            Route::get('/{horasExtra}/edit',                            'HorasExtrasController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'HorasExtrasController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{horasExtra}',                                'HorasExtrasController@update')->name('update');
            Route::delete('/{horasExtra}',                              'HorasExtrasController@destroy')->name('destroy');
        });
    });
});