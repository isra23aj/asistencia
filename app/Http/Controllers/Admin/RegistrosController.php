<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Registro\BulkDestroyRegistro;
use App\Http\Requests\Admin\Registro\DestroyRegistro;
use App\Http\Requests\Admin\Registro\IndexRegistro;
use App\Http\Requests\Admin\Registro\StoreRegistro;
use App\Http\Requests\Admin\Registro\UpdateRegistro;
use App\Models\Registro;
use Brackets\AdminListing\Facades\AdminListing;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class RegistrosController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexRegistro $request
     * @return array|Factory|View
     */
    public function index(IndexRegistro $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Registro::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'fecha', 'hora_entrada_am', 'hora_salida_am', 'hora_entrada_pm', 'hora_salida_pm', 'codigo_empleado', 'id_biometrico', 'id_empleado'],

            // set columns to searchIn
            ['id', 'codigo_empleado']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.registro.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.registro.create');

        return view('admin.registro.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreRegistro $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreRegistro $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Registro
        $registro = Registro::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/registros'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/registros');
    }

    /**
     * Display the specified resource.
     *
     * @param Registro $registro
     * @throws AuthorizationException
     * @return void
     */
    public function show(Registro $registro)
    {
        $this->authorize('admin.registro.show', $registro);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Registro $registro
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Registro $registro)
    {
        $this->authorize('admin.registro.edit', $registro);


        return view('admin.registro.edit', [
            'registro' => $registro,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateRegistro $request
     * @param Registro $registro
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateRegistro $request, Registro $registro)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Registro
        $registro->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/registros'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/registros');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyRegistro $request
     * @param Registro $registro
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyRegistro $request, Registro $registro)
    {
        $registro->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyRegistro $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyRegistro $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Registro::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
