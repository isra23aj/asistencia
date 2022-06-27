<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Biometrico\BulkDestroyBiometrico;
use App\Http\Requests\Admin\Biometrico\DestroyBiometrico;
use App\Http\Requests\Admin\Biometrico\IndexBiometrico;
use App\Http\Requests\Admin\Biometrico\StoreBiometrico;
use App\Http\Requests\Admin\Biometrico\UpdateBiometrico;
use App\Models\Biometrico;
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

class BiometricosController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexBiometrico $request
     * @return array|Factory|View
     */
    public function index(IndexBiometrico $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Biometrico::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'codigo_bio', 'fecha', 'hora', 'ubicacion', 'estado'],

            // set columns to searchIn
            ['id', 'codigo_bio', 'ubicacion']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.biometrico.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.biometrico.create');

        return view('admin.biometrico.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreBiometrico $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreBiometrico $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Biometrico
        $biometrico = Biometrico::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/biometricos'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/biometricos');
    }

    /**
     * Display the specified resource.
     *
     * @param Biometrico $biometrico
     * @throws AuthorizationException
     * @return void
     */
    public function show(Biometrico $biometrico)
    {
        $this->authorize('admin.biometrico.show', $biometrico);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Biometrico $biometrico
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Biometrico $biometrico)
    {
        $this->authorize('admin.biometrico.edit', $biometrico);


        return view('admin.biometrico.edit', [
            'biometrico' => $biometrico,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateBiometrico $request
     * @param Biometrico $biometrico
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateBiometrico $request, Biometrico $biometrico)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Biometrico
        $biometrico->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/biometricos'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/biometricos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyBiometrico $request
     * @param Biometrico $biometrico
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyBiometrico $request, Biometrico $biometrico)
    {
        $biometrico->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyBiometrico $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyBiometrico $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Biometrico::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
