@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.horas-extra.actions.edit', ['name' => $horasExtra->id]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <horas-extra-form
                :action="'{{ $horasExtra->resource_url }}'"
                :data="{{ $horasExtra->toJson() }}"
                v-cloak
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.horas-extra.actions.edit', ['name' => $horasExtra->id]) }}
                    </div>

                    <div class="card-body">
                        @include('admin.horas-extra.components.form-elements')
                    </div>
                    
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>
                    
                </form>

        </horas-extra-form>

        </div>
    
</div>

@endsection