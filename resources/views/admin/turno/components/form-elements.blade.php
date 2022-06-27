<div class="form-group row align-items-center" :class="{'has-danger': errors.has('codigo_turno'), 'has-success': fields.codigo_turno && fields.codigo_turno.valid }">
    <label for="codigo_turno" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.turno.columns.codigo_turno') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.codigo_turno" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('codigo_turno'), 'form-control-success': fields.codigo_turno && fields.codigo_turno.valid}" id="codigo_turno" name="codigo_turno" placeholder="{{ trans('admin.turno.columns.codigo_turno') }}">
        <div v-if="errors.has('codigo_turno')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('codigo_turno') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('nombre_turno'), 'has-success': fields.nombre_turno && fields.nombre_turno.valid }">
    <label for="nombre_turno" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.turno.columns.nombre_turno') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.nombre_turno" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('nombre_turno'), 'form-control-success': fields.nombre_turno && fields.nombre_turno.valid}" id="nombre_turno" name="nombre_turno" placeholder="{{ trans('admin.turno.columns.nombre_turno') }}">
        <div v-if="errors.has('nombre_turno')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('nombre_turno') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('descripcion'), 'has-success': fields.descripcion && fields.descripcion.valid }">
    <label for="descripcion" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.turno.columns.descripcion') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.descripcion" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('descripcion'), 'form-control-success': fields.descripcion && fields.descripcion.valid}" id="descripcion" name="descripcion" placeholder="{{ trans('admin.turno.columns.descripcion') }}">
        <div v-if="errors.has('descripcion')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('descripcion') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('horas_trabajo'), 'has-success': fields.horas_trabajo && fields.horas_trabajo.valid }">
    <label for="horas_trabajo" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.turno.columns.horas_trabajo') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.horas_trabajo" v-validate="'integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('horas_trabajo'), 'form-control-success': fields.horas_trabajo && fields.horas_trabajo.valid}" id="horas_trabajo" name="horas_trabajo" placeholder="{{ trans('admin.turno.columns.horas_trabajo') }}">
        <div v-if="errors.has('horas_trabajo')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('horas_trabajo') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('hora_entrada_am'), 'has-success': fields.hora_entrada_am && fields.hora_entrada_am.valid }">
    <label for="hora_entrada_am" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.turno.columns.hora_entrada_am') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.hora_entrada_am" v-validate="'integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('hora_entrada_am'), 'form-control-success': fields.hora_entrada_am && fields.hora_entrada_am.valid}" id="hora_entrada_am" name="hora_entrada_am" placeholder="{{ trans('admin.turno.columns.hora_entrada_am') }}">
        <div v-if="errors.has('hora_entrada_am')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('hora_entrada_am') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('hora_salida_am'), 'has-success': fields.hora_salida_am && fields.hora_salida_am.valid }">
    <label for="hora_salida_am" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.turno.columns.hora_salida_am') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.hora_salida_am" v-validate="'integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('hora_salida_am'), 'form-control-success': fields.hora_salida_am && fields.hora_salida_am.valid}" id="hora_salida_am" name="hora_salida_am" placeholder="{{ trans('admin.turno.columns.hora_salida_am') }}">
        <div v-if="errors.has('hora_salida_am')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('hora_salida_am') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('hora_entrada_pm'), 'has-success': fields.hora_entrada_pm && fields.hora_entrada_pm.valid }">
    <label for="hora_entrada_pm" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.turno.columns.hora_entrada_pm') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.hora_entrada_pm" v-validate="'integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('hora_entrada_pm'), 'form-control-success': fields.hora_entrada_pm && fields.hora_entrada_pm.valid}" id="hora_entrada_pm" name="hora_entrada_pm" placeholder="{{ trans('admin.turno.columns.hora_entrada_pm') }}">
        <div v-if="errors.has('hora_entrada_pm')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('hora_entrada_pm') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('hora_salida_pm'), 'has-success': fields.hora_salida_pm && fields.hora_salida_pm.valid }">
    <label for="hora_salida_pm" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.turno.columns.hora_salida_pm') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.hora_salida_pm" v-validate="'integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('hora_salida_pm'), 'form-control-success': fields.hora_salida_pm && fields.hora_salida_pm.valid}" id="hora_salida_pm" name="hora_salida_pm" placeholder="{{ trans('admin.turno.columns.hora_salida_pm') }}">
        <div v-if="errors.has('hora_salida_pm')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('hora_salida_pm') }}</div>
    </div>
</div>


