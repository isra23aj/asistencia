<div class="form-group row align-items-center" :class="{'has-danger': errors.has('fecha_pedido'), 'has-success': fields.fecha_pedido && fields.fecha_pedido.valid }">
    <label for="fecha_pedido" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.permiso.columns.fecha_pedido') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-sm-8'">
        <div class="input-group input-group--custom">
            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
            <datetime v-model="form.fecha_pedido" :config="datePickerConfig" v-validate="'required|date_format:yyyy-MM-dd HH:mm:ss'" class="flatpickr" :class="{'form-control-danger': errors.has('fecha_pedido'), 'form-control-success': fields.fecha_pedido && fields.fecha_pedido.valid}" id="fecha_pedido" name="fecha_pedido" placeholder="{{ trans('brackets/admin-ui::admin.forms.select_a_date') }}"></datetime>
        </div>
        <div v-if="errors.has('fecha_pedido')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('fecha_pedido') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('fecha_inicio'), 'has-success': fields.fecha_inicio && fields.fecha_inicio.valid }">
    <label for="fecha_inicio" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.permiso.columns.fecha_inicio') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-sm-8'">
        <div class="input-group input-group--custom">
            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
            <datetime v-model="form.fecha_inicio" :config="datePickerConfig" v-validate="'required|date_format:yyyy-MM-dd HH:mm:ss'" class="flatpickr" :class="{'form-control-danger': errors.has('fecha_inicio'), 'form-control-success': fields.fecha_inicio && fields.fecha_inicio.valid}" id="fecha_inicio" name="fecha_inicio" placeholder="{{ trans('brackets/admin-ui::admin.forms.select_a_date') }}"></datetime>
        </div>
        <div v-if="errors.has('fecha_inicio')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('fecha_inicio') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('fecha_fin'), 'has-success': fields.fecha_fin && fields.fecha_fin.valid }">
    <label for="fecha_fin" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.permiso.columns.fecha_fin') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-sm-8'">
        <div class="input-group input-group--custom">
            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
            <datetime v-model="form.fecha_fin" :config="datePickerConfig" v-validate="'required|date_format:yyyy-MM-dd HH:mm:ss'" class="flatpickr" :class="{'form-control-danger': errors.has('fecha_fin'), 'form-control-success': fields.fecha_fin && fields.fecha_fin.valid}" id="fecha_fin" name="fecha_fin" placeholder="{{ trans('brackets/admin-ui::admin.forms.select_a_date') }}"></datetime>
        </div>
        <div v-if="errors.has('fecha_fin')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('fecha_fin') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('nro_dias'), 'has-success': fields.nro_dias && fields.nro_dias.valid }">
    <label for="nro_dias" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.permiso.columns.nro_dias') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.nro_dias" v-validate="'integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('nro_dias'), 'form-control-success': fields.nro_dias && fields.nro_dias.valid}" id="nro_dias" name="nro_dias" placeholder="{{ trans('admin.permiso.columns.nro_dias') }}">
        <div v-if="errors.has('nro_dias')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('nro_dias') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('motivo'), 'has-success': fields.motivo && fields.motivo.valid }">
    <label for="motivo" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.permiso.columns.motivo') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.motivo" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('motivo'), 'form-control-success': fields.motivo && fields.motivo.valid}" id="motivo" name="motivo" placeholder="{{ trans('admin.permiso.columns.motivo') }}">
        <div v-if="errors.has('motivo')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('motivo') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('tipo_permiso'), 'has-success': fields.tipo_permiso && fields.tipo_permiso.valid }">
    <label for="tipo_permiso" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.permiso.columns.tipo_permiso') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.tipo_permiso" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('tipo_permiso'), 'form-control-success': fields.tipo_permiso && fields.tipo_permiso.valid}" id="tipo_permiso" name="tipo_permiso" placeholder="{{ trans('admin.permiso.columns.tipo_permiso') }}">
        <div v-if="errors.has('tipo_permiso')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('tipo_permiso') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('autoriza'), 'has-success': fields.autoriza && fields.autoriza.valid }">
    <label for="autoriza" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.permiso.columns.autoriza') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.autoriza" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('autoriza'), 'form-control-success': fields.autoriza && fields.autoriza.valid}" id="autoriza" name="autoriza" placeholder="{{ trans('admin.permiso.columns.autoriza') }}">
        <div v-if="errors.has('autoriza')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('autoriza') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('id_empleado'), 'has-success': fields.id_empleado && fields.id_empleado.valid }">
    <label for="id_empleado" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.permiso.columns.id_empleado') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.id_empleado" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('id_empleado'), 'form-control-success': fields.id_empleado && fields.id_empleado.valid}" id="id_empleado" name="id_empleado" placeholder="{{ trans('admin.permiso.columns.id_empleado') }}">
        <div v-if="errors.has('id_empleado')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('id_empleado') }}</div>
    </div>
</div>


