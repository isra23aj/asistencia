<div class="form-group row align-items-center" :class="{'has-danger': errors.has('fecha'), 'has-success': fields.fecha && fields.fecha.valid }">
    <label for="fecha" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.retraso.columns.fecha') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-sm-8'">
        <div class="input-group input-group--custom">
            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
            <datetime v-model="form.fecha" :config="datePickerConfig" v-validate="'date_format:yyyy-MM-dd HH:mm:ss'" class="flatpickr" :class="{'form-control-danger': errors.has('fecha'), 'form-control-success': fields.fecha && fields.fecha.valid}" id="fecha" name="fecha" placeholder="{{ trans('brackets/admin-ui::admin.forms.select_a_date') }}"></datetime>
        </div>
        <div v-if="errors.has('fecha')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('fecha') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('minutos'), 'has-success': fields.minutos && fields.minutos.valid }">
    <label for="minutos" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.retraso.columns.minutos') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.minutos" v-validate="'integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('minutos'), 'form-control-success': fields.minutos && fields.minutos.valid}" id="minutos" name="minutos" placeholder="{{ trans('admin.retraso.columns.minutos') }}">
        <div v-if="errors.has('minutos')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('minutos') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('horas'), 'has-success': fields.horas && fields.horas.valid }">
    <label for="horas" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.retraso.columns.horas') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.horas" v-validate="'integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('horas'), 'form-control-success': fields.horas && fields.horas.valid}" id="horas" name="horas" placeholder="{{ trans('admin.retraso.columns.horas') }}">
        <div v-if="errors.has('horas')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('horas') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('id_empleado'), 'has-success': fields.id_empleado && fields.id_empleado.valid }">
    <label for="id_empleado" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.retraso.columns.id_empleado') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.id_empleado" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('id_empleado'), 'form-control-success': fields.id_empleado && fields.id_empleado.valid}" id="id_empleado" name="id_empleado" placeholder="{{ trans('admin.retraso.columns.id_empleado') }}">
        <div v-if="errors.has('id_empleado')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('id_empleado') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('id_registro'), 'has-success': fields.id_registro && fields.id_registro.valid }">
    <label for="id_registro" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.retraso.columns.id_registro') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.id_registro" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('id_registro'), 'form-control-success': fields.id_registro && fields.id_registro.valid}" id="id_registro" name="id_registro" placeholder="{{ trans('admin.retraso.columns.id_registro') }}">
        <div v-if="errors.has('id_registro')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('id_registro') }}</div>
    </div>
</div>


