<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\HorasExtra\BulkDestroyHorasExtra;
use App\Http\Requests\Admin\HorasExtra\DestroyHorasExtra;
use App\Http\Requests\Admin\HorasExtra\IndexHorasExtra;
use App\Http\Requests\Admin\HorasExtra\StoreHorasExtra;
use App\Http\Requests\Admin\HorasExtra\UpdateHorasExtra;
use App\Models\HorasExtra;
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

class HorasExtrasController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexHorasExtra $request
     * @return array|Factory|View
     */
    public function index(IndexHorasExtra $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(HorasExtra::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'fecha', 'minutos', 'id_empleado', 'id_registro'],

            // set columns to searchIn
            ['id']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.horas-extra.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.horas-extra.create');

        return view('admin.horas-extra.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreHorasExtra $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreHorasExtra $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the HorasExtra
        $horasExtra = HorasExtra::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/horas-extras'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/horas-extras');
    }

    /**
     * Display the specified resource.
     *
     * @param HorasExtra $horasExtra
     * @throws AuthorizationException
     * @return void
     */
    public function show(HorasExtra $horasExtra)
    {
        $this->authorize('admin.horas-extra.show', $horasExtra);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param HorasExtra $horasExtra
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(HorasExtra $horasExtra)
    {
        $this->authorize('admin.horas-extra.edit', $horasExtra);


        return view('admin.horas-extra.edit', [
            'horasExtra' => $horasExtra,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateHorasExtra $request
     * @param HorasExtra $horasExtra
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateHorasExtra $request, HorasExtra $horasExtra)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values HorasExtra
        $horasExtra->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/horas-extras'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/horas-extras');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyHorasExtra $request
     * @param HorasExtra $horasExtra
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyHorasExtra $request, HorasExtra $horasExtra)
    {
        $horasExtra->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyHorasExtra $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyHorasExtra $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    HorasExtra::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
