<div class="form-group row align-items-center" :class="{'has-danger': errors.has('codigo_bio'), 'has-success': fields.codigo_bio && fields.codigo_bio.valid }">
    <label for="codigo_bio" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.biometrico.columns.codigo_bio') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.codigo_bio" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('codigo_bio'), 'form-control-success': fields.codigo_bio && fields.codigo_bio.valid}" id="codigo_bio" name="codigo_bio" placeholder="{{ trans('admin.biometrico.columns.codigo_bio') }}">
        <div v-if="errors.has('codigo_bio')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('codigo_bio') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('fecha'), 'has-success': fields.fecha && fields.fecha.valid }">
    <label for="fecha" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.biometrico.columns.fecha') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-sm-8'">
        <div class="input-group input-group--custom">
            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
            <datetime v-model="form.fecha" :config="datePickerConfig" v-validate="'date_format:yyyy-MM-dd HH:mm:ss'" class="flatpickr" :class="{'form-control-danger': errors.has('fecha'), 'form-control-success': fields.fecha && fields.fecha.valid}" id="fecha" name="fecha" placeholder="{{ trans('brackets/admin-ui::admin.forms.select_a_date') }}"></datetime>
        </div>
        <div v-if="errors.has('fecha')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('fecha') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('hora'), 'has-success': fields.hora && fields.hora.valid }">
    <label for="hora" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.biometrico.columns.hora') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div class="input-group input-group--custom">
            <div class="input-group-addon"><i class="fa fa-clock-o"></i></div>
            <datetime v-model="form.hora" :config="timePickerConfig" v-validate="'date_format:HH:mm:ss'" class="flatpickr" :class="{'form-control-danger': errors.has('hora'), 'form-control-success': fields.hora && fields.hora.valid}" id="hora" name="hora" placeholder="{{ trans('brackets/admin-ui::admin.forms.select_a_time') }}"></datetime>
        </div>
        <div v-if="errors.has('hora')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('hora') }}</div>
    </div>
</div>


<div class="form-group row align-items-center" :class="{'has-danger': errors.has('ubicacion'), 'has-success': fields.ubicacion && fields.ubicacion.valid }">
    <label for="ubicacion" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.biometrico.columns.ubicacion') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.ubicacion" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('ubicacion'), 'form-control-success': fields.ubicacion && fields.ubicacion.valid}" id="ubicacion" name="ubicacion" placeholder="{{ trans('admin.biometrico.columns.ubicacion') }}">
        <div v-if="errors.has('ubicacion')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('ubicacion') }}</div>
    </div>
</div>

<div class="form-check row" :class="{'has-danger': errors.has('estado'), 'has-success': fields.estado && fields.estado.valid }">
    <div class="ml-md-auto" :class="isFormLocalized ? 'col-md-8' : 'col-md-10'">
        <input class="form-check-input" id="estado" type="checkbox" v-model="form.estado" v-validate="''" data-vv-name="estado"  name="estado_fake_element">
        <label class="form-check-label" for="estado">
            {{ trans('admin.biometrico.columns.estado') }}
        </label>
        <input type="hidden" name="estado" :value="form.estado">
        <div v-if="errors.has('estado')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('estado') }}</div>
    </div>
</div>


