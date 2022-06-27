<div class="form-group row align-items-center" :class="{'has-danger': errors.has('nic'), 'has-success': fields.nic && fields.nic.valid }">
    <label for="nic" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.empleado.columns.nic') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.nic" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('nic'), 'form-control-success': fields.nic && fields.nic.valid}" id="nic" name="nic" placeholder="{{ trans('admin.empleado.columns.nic') }}">
        <div v-if="errors.has('nic')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('nic') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('codigo_empleado'), 'has-success': fields.codigo_empleado && fields.codigo_empleado.valid }">
    <label for="codigo_empleado" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.empleado.columns.codigo_empleado') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.codigo_empleado" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('codigo_empleado'), 'form-control-success': fields.codigo_empleado && fields.codigo_empleado.valid}" id="codigo_empleado" name="codigo_empleado" placeholder="{{ trans('admin.empleado.columns.codigo_empleado') }}">
        <div v-if="errors.has('codigo_empleado')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('codigo_empleado') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('nombres'), 'has-success': fields.nombres && fields.nombres.valid }">
    <label for="nombres" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.empleado.columns.nombres') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.nombres" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('nombres'), 'form-control-success': fields.nombres && fields.nombres.valid}" id="nombres" name="nombres" placeholder="{{ trans('admin.empleado.columns.nombres') }}">
        <div v-if="errors.has('nombres')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('nombres') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('apellido_paterno'), 'has-success': fields.apellido_paterno && fields.apellido_paterno.valid }">
    <label for="apellido_paterno" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.empleado.columns.apellido_paterno') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.apellido_paterno" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('apellido_paterno'), 'form-control-success': fields.apellido_paterno && fields.apellido_paterno.valid}" id="apellido_paterno" name="apellido_paterno" placeholder="{{ trans('admin.empleado.columns.apellido_paterno') }}">
        <div v-if="errors.has('apellido_paterno')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('apellido_paterno') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('apellido_materno'), 'has-success': fields.apellido_materno && fields.apellido_materno.valid }">
    <label for="apellido_materno" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.empleado.columns.apellido_materno') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.apellido_materno" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('apellido_materno'), 'form-control-success': fields.apellido_materno && fields.apellido_materno.valid}" id="apellido_materno" name="apellido_materno" placeholder="{{ trans('admin.empleado.columns.apellido_materno') }}">
        <div v-if="errors.has('apellido_materno')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('apellido_materno') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('telefono'), 'has-success': fields.telefono && fields.telefono.valid }">
    <label for="telefono" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.empleado.columns.telefono') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.telefono" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('telefono'), 'form-control-success': fields.telefono && fields.telefono.valid}" id="telefono" name="telefono" placeholder="{{ trans('admin.empleado.columns.telefono') }}">
        <div v-if="errors.has('telefono')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('telefono') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('celular'), 'has-success': fields.celular && fields.celular.valid }">
    <label for="celular" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.empleado.columns.celular') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.celular" v-validate="'integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('celular'), 'form-control-success': fields.celular && fields.celular.valid}" id="celular" name="celular" placeholder="{{ trans('admin.empleado.columns.celular') }}">
        <div v-if="errors.has('celular')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('celular') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('email'), 'has-success': fields.email && fields.email.valid }">
    <label for="email" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.empleado.columns.email') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.email" v-validate="'email'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('email'), 'form-control-success': fields.email && fields.email.valid}" id="email" name="email" placeholder="{{ trans('admin.empleado.columns.email') }}">
        <div v-if="errors.has('email')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('email') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('profesión'), 'has-success': fields.profesión && fields.profesión.valid }">
    <label for="profesión" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.empleado.columns.profesión') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.profesión" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('profesión'), 'form-control-success': fields.profesión && fields.profesión.valid}" id="profesión" name="profesión" placeholder="{{ trans('admin.empleado.columns.profesión') }}">
        <div v-if="errors.has('profesión')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('profesión') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('puesto'), 'has-success': fields.puesto && fields.puesto.valid }">
    <label for="puesto" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.empleado.columns.puesto') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.puesto" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('puesto'), 'form-control-success': fields.puesto && fields.puesto.valid}" id="puesto" name="puesto" placeholder="{{ trans('admin.empleado.columns.puesto') }}">
        <div v-if="errors.has('puesto')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('puesto') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('id_departamento'), 'has-success': fields.id_departamento && fields.id_departamento.valid }">
    <label for="id_departamento" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.empleado.columns.id_departamento') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.id_departamento" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('id_departamento'), 'form-control-success': fields.id_departamento && fields.id_departamento.valid}" id="id_departamento" name="id_departamento" placeholder="{{ trans('admin.empleado.columns.id_departamento') }}">
        <div v-if="errors.has('id_departamento')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('id_departamento') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('id_turno'), 'has-success': fields.id_turno && fields.id_turno.valid }">
    <label for="id_turno" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.empleado.columns.id_turno') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.id_turno" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('id_turno'), 'form-control-success': fields.id_turno && fields.id_turno.valid}" id="id_turno" name="id_turno" placeholder="{{ trans('admin.empleado.columns.id_turno') }}">
        <div v-if="errors.has('id_turno')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('id_turno') }}</div>
    </div>
</div>


