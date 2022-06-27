<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Multa\BulkDestroyMulta;
use App\Http\Requests\Admin\Multa\DestroyMulta;
use App\Http\Requests\Admin\Multa\IndexMulta;
use App\Http\Requests\Admin\Multa\StoreMulta;
use App\Http\Requests\Admin\Multa\UpdateMulta;
use App\Models\Multa;
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

class MultasController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexMulta $request
     * @return array|Factory|View
     */
    public function index(IndexMulta $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Multa::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'fecha', 'id_empleado', 'id_registro'],

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

        return view('admin.multa.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.multa.create');

        return view('admin.multa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreMulta $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreMulta $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Multa
        $multum = Multa::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/multas'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/multas');
    }

    /**
     * Display the specified resource.
     *
     * @param Multa $multum
     * @throws AuthorizationException
     * @return void
     */
    public function show(Multa $multum)
    {
        $this->authorize('admin.multa.show', $multum);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Multa $multum
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Multa $multum)
    {
        $this->authorize('admin.multa.edit', $multum);


        return view('admin.multa.edit', [
            'multum' => $multum,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateMulta $request
     * @param Multa $multum
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateMulta $request, Multa $multum)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Multa
        $multum->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/multas'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/multas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyMulta $request
     * @param Multa $multum
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyMulta $request, Multa $multum)
    {
        $multum->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyMulta $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyMulta $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Multa::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
