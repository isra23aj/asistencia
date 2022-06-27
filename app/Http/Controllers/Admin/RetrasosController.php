<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Retraso\BulkDestroyRetraso;
use App\Http\Requests\Admin\Retraso\DestroyRetraso;
use App\Http\Requests\Admin\Retraso\IndexRetraso;
use App\Http\Requests\Admin\Retraso\StoreRetraso;
use App\Http\Requests\Admin\Retraso\UpdateRetraso;
use App\Models\Retraso;
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

class RetrasosController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexRetraso $request
     * @return array|Factory|View
     */
    public function index(IndexRetraso $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Retraso::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'fecha', 'minutos', 'horas', 'id_empleado', 'id_registro'],

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

        return view('admin.retraso.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.retraso.create');

        return view('admin.retraso.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreRetraso $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreRetraso $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Retraso
        $retraso = Retraso::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/retrasos'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/retrasos');
    }

    /**
     * Display the specified resource.
     *
     * @param Retraso $retraso
     * @throws AuthorizationException
     * @return void
     */
    public function show(Retraso $retraso)
    {
        $this->authorize('admin.retraso.show', $retraso);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Retraso $retraso
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Retraso $retraso)
    {
        $this->authorize('admin.retraso.edit', $retraso);


        return view('admin.retraso.edit', [
            'retraso' => $retraso,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateRetraso $request
     * @param Retraso $retraso
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateRetraso $request, Retraso $retraso)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Retraso
        $retraso->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/retrasos'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/retrasos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyRetraso $request
     * @param Retraso $retraso
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyRetraso $request, Retraso $retraso)
    {
        $retraso->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyRetraso $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyRetraso $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Retraso::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
