@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.horas-extra.actions.create'))

@section('body')

    <div class="container-xl">

                <div class="card">
        
        <horas-extra-form
            :action="'{{ url('admin/horas-extras') }}'"
            v-cloak
            inline-template>

            <form class="form-horizontal form-create" method="post" @submit.prevent="onSubmit" :action="action" novalidate>
                
                <div class="card-header">
                    <i class="fa fa-plus"></i> {{ trans('admin.horas-extra.actions.create') }}
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