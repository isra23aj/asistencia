<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Empleado\BulkDestroyEmpleado;
use App\Http\Requests\Admin\Empleado\DestroyEmpleado;
use App\Http\Requests\Admin\Empleado\IndexEmpleado;
use App\Http\Requests\Admin\Empleado\StoreEmpleado;
use App\Http\Requests\Admin\Empleado\UpdateEmpleado;
use App\Models\Empleado;
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

class EmpleadosController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexEmpleado $request
     * @return array|Factory|View
     */
    public function index(IndexEmpleado $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Empleado::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'nic', 'codigo_empleado', 'nombres', 'apellido_paterno', 'apellido_materno', 'telefono', 'celular', 'email', 'profesión', 'puesto', 'id_departamento', 'id_turno'],

            // set columns to searchIn
            ['id', 'nic', 'codigo_empleado', 'nombres', 'apellido_paterno', 'apellido_materno', 'telefono', 'email', 'profesión', 'puesto']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.empleado.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.empleado.create');

        return view('admin.empleado.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreEmpleado $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreEmpleado $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Empleado
        $empleado = Empleado::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/empleados'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/empleados');
    }

    /**
     * Display the specified resource.
     *
     * @param Empleado $empleado
     * @throws AuthorizationException
     * @return void
     */
    public function show(Empleado $empleado)
    {
        $this->authorize('admin.empleado.show', $empleado);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Empleado $empleado
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Empleado $empleado)
    {
        $this->authorize('admin.empleado.edit', $empleado);


        return view('admin.empleado.edit', [
            'empleado' => $empleado,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateEmpleado $request
     * @param Empleado $empleado
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateEmpleado $request, Empleado $empleado)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Empleado
        $empleado->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/empleados'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/empleados');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyEmpleado $request
     * @param Empleado $empleado
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyEmpleado $request, Empleado $empleado)
    {
        $empleado->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyEmpleado $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyEmpleado $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Empleado::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
