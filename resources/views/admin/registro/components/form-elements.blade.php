<div class="form-group row align-items-center" :class="{'has-danger': errors.has('fecha'), 'has-success': fields.fecha && fields.fecha.valid }">
    <label for="fecha" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.registro.columns.fecha') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-sm-8'">
        <div class="input-group input-group--custom">
            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
            <datetime v-model="form.fecha" :config="datePickerConfig" v-validate="'required|date_format:yyyy-MM-dd HH:mm:ss'" class="flatpickr" :class="{'form-control-danger': errors.has('fecha'), 'form-control-success': fields.fecha && fields.fecha.valid}" id="fecha" name="fecha" placeholder="{{ trans('brackets/admin-ui::admin.forms.select_a_date') }}"></datetime>
        </div>
        <div v-if="errors.has('fecha')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('fecha') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('hora_entrada_am'), 'has-success': fields.hora_entrada_am && fields.hora_entrada_am.valid }">
    <label for="hora_entrada_am" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.registro.columns.hora_entrada_am') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div class="input-group input-group--custom">
            <div class="input-group-addon"><i class="fa fa-clock-o"></i></div>
            <datetime v-model="form.hora_entrada_am" :config="timePickerConfig" v-validate="'date_format:HH:mm:ss'" class="flatpickr" :class="{'form-control-danger': errors.has('hora_entrada_am'), 'form-control-success': fields.hora_entrada_am && fields.hora_entrada_am.valid}" id="hora_entrada_am" name="hora_entrada_am" placeholder="{{ trans('brackets/admin-ui::admin.forms.select_a_time') }}"></datetime>
        </div>
        <div v-if="errors.has('hora_entrada_am')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('hora_entrada_am') }}</div>
    </div>
</div>


<div class="form-group row align-items-center" :class="{'has-danger': errors.has('hora_salida_am'), 'has-success': fields.hora_salida_am && fields.hora_salida_am.valid }">
    <label for="hora_salida_am" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.registro.columns.hora_salida_am') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div class="input-group input-group--custom">
            <div class="input-group-addon"><i class="fa fa-clock-o"></i></div>
            <datetime v-model="form.hora_salida_am" :config="timePickerConfig" v-validate="'date_format:HH:mm:ss'" class="flatpickr" :class="{'form-control-danger': errors.has('hora_salida_am'), 'form-control-success': fields.hora_salida_am && fields.hora_salida_am.valid}" id="hora_salida_am" name="hora_salida_am" placeholder="{{ trans('brackets/admin-ui::admin.forms.select_a_time') }}"></datetime>
        </div>
        <div v-if="errors.has('hora_salida_am')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('hora_salida_am') }}</div>
    </div>
</div>


<div class="form-group row align-items-center" :class="{'has-danger': errors.has('hora_entrada_pm'), 'has-success': fields.hora_entrada_pm && fields.hora_entrada_pm.valid }">
    <label for="hora_entrada_pm" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.registro.columns.hora_entrada_pm') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div class="input-group input-group--custom">
            <div class="input-group-addon"><i class="fa fa-clock-o"></i></div>
            <datetime v-model="form.hora_entrada_pm" :config="timePickerConfig" v-validate="'date_format:HH:mm:ss'" class="flatpickr" :class="{'form-control-danger': errors.has('hora_entrada_pm'), 'form-control-success': fields.hora_entrada_pm && fields.hora_entrada_pm.valid}" id="hora_entrada_pm" name="hora_entrada_pm" placeholder="{{ trans('brackets/admin-ui::admin.forms.select_a_time') }}"></datetime>
        </div>
        <div v-if="errors.has('hora_entrada_pm')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('hora_entrada_pm') }}</div>
    </div>
</div>


<div class="form-group row align-items-center" :class="{'has-danger': errors.has('hora_salida_pm'), 'has-success': fields.hora_salida_pm && fields.hora_salida_pm.valid }">
    <label for="hora_salida_pm" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.registro.columns.hora_salida_pm') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div class="input-group input-group--custom">
            <div class="input-group-addon"><i class="fa fa-clock-o"></i></div>
            <datetime v-model="form.hora_salida_pm" :config="timePickerConfig" v-validate="'date_format:HH:mm:ss'" class="flatpickr" :class="{'form-control-danger': errors.has('hora_salida_pm'), 'form-control-success': fields.hora_salida_pm && fields.hora_salida_pm.valid}" id="hora_salida_pm" name="hora_salida_pm" placeholder="{{ trans('brackets/admin-ui::admin.forms.select_a_time') }}"></datetime>
        </div>
        <div v-if="errors.has('hora_salida_pm')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('hora_salida_pm') }}</div>
    </div>
</div>


<div class="form-group row align-items-center" :class="{'has-danger': errors.has('codigo_empleado'), 'has-success': fields.codigo_empleado && fields.codigo_empleado.valid }">
    <label for="codigo_empleado" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.registro.columns.codigo_empleado') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.codigo_empleado" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('codigo_empleado'), 'form-control-success': fields.codigo_empleado && fields.codigo_empleado.valid}" id="codigo_empleado" name="codigo_empleado" placeholder="{{ trans('admin.registro.columns.codigo_empleado') }}">
        <div v-if="errors.has('codigo_empleado')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('codigo_empleado') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('id_biometrico'), 'has-success': fields.id_biometrico && fields.id_biometrico.valid }">
    <label for="id_biometrico" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.registro.columns.id_biometrico') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.id_biometrico" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('id_biometrico'), 'form-control-success': fields.id_biometrico && fields.id_biometrico.valid}" id="id_biometrico" name="id_biometrico" placeholder="{{ trans('admin.registro.columns.id_biometrico') }}">
        <div v-if="errors.has('id_biometrico')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('id_biometrico') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('id_empleado'), 'has-success': fields.id_empleado && fields.id_empleado.valid }">
    <label for="id_empleado" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.registro.columns.id_empleado') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.id_empleado" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('id_empleado'), 'form-control-success': fields.id_empleado && fields.id_empleado.valid}" id="id_empleado" name="id_empleado" placeholder="{{ trans('admin.registro.columns.id_empleado') }}">
        <div v-if="errors.has('id_empleado')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('id_empleado') }}</div>
    </div>
</div>


