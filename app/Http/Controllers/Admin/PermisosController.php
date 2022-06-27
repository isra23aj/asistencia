<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Permiso\BulkDestroyPermiso;
use App\Http\Requests\Admin\Permiso\DestroyPermiso;
use App\Http\Requests\Admin\Permiso\IndexPermiso;
use App\Http\Requests\Admin\Permiso\StorePermiso;
use App\Http\Requests\Admin\Permiso\UpdatePermiso;
use App\Models\Permiso;
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

class PermisosController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexPermiso $request
     * @return array|Factory|View
     */
    public function index(IndexPermiso $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Permiso::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'fecha_pedido', 'fecha_inicio', 'fecha_fin', 'nro_dias', 'motivo', 'tipo_permiso', 'autoriza', 'id_empleado'],

            // set columns to searchIn
            ['id', 'motivo', 'tipo_permiso', 'autoriza']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.permiso.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.permiso.create');

        return view('admin.permiso.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StorePermiso $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StorePermiso $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Permiso
        $permiso = Permiso::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/permisos'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/permisos');
    }

    /**
     * Display the specified resource.
     *
     * @param Permiso $permiso
     * @throws AuthorizationException
     * @return void
     */
    public function show(Permiso $permiso)
    {
        $this->authorize('admin.permiso.show', $permiso);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Permiso $permiso
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Permiso $permiso)
    {
        $this->authorize('admin.permiso.edit', $permiso);


        return view('admin.permiso.edit', [
            'permiso' => $permiso,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdatePermiso $request
     * @param Permiso $permiso
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdatePermiso $request, Permiso $permiso)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Permiso
        $permiso->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/permisos'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/permisos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyPermiso $request
     * @param Permiso $permiso
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyPermiso $request, Permiso $permiso)
    {
        $permiso->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyPermiso $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyPermiso $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Permiso::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
