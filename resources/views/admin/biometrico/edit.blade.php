@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.biometrico.actions.edit', ['name' => $biometrico->id]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <biometrico-form
                :action="'{{ $biometrico->resource_url }}'"
                :data="{{ $biometrico->toJson() }}"
                v-cloak
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.biometrico.actions.edit', ['name' => $biometrico->id]) }}
                    </div>

                    <div class="card-body">
                        @include('admin.biometrico.components.form-elements')
                    </div>
                    
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>
                    
                </form>

        </biometrico-form>

        </div>
    
</div>

@endsection