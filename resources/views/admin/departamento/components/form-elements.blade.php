<div class="form-group row align-items-center" :class="{'has-danger': errors.has('codigo_departamento'), 'has-success': fields.codigo_departamento && fields.codigo_departamento.valid }">
    <label for="codigo_departamento" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.departamento.columns.codigo_departamento') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.codigo_departamento" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('codigo_departamento'), 'form-control-success': fields.codigo_departamento && fields.codigo_departamento.valid}" id="codigo_departamento" name="codigo_departamento" placeholder="{{ trans('admin.departamento.columns.codigo_departamento') }}">
        <div v-if="errors.has('codigo_departamento')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('codigo_departamento') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('nombre_departamento'), 'has-success': fields.nombre_departamento && fields.nombre_departamento.valid }">
    <label for="nombre_departamento" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.departamento.columns.nombre_departamento') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.nombre_departamento" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('nombre_departamento'), 'form-control-success': fields.nombre_departamento && fields.nombre_departamento.valid}" id="nombre_departamento" name="nombre_departamento" placeholder="{{ trans('admin.departamento.columns.nombre_departamento') }}">
        <div v-if="errors.has('nombre_departamento')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('nombre_departamento') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('descripcion'), 'has-success': fields.descripcion && fields.descripcion.valid }">
    <label for="descripcion" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.departamento.columns.descripcion') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.descripcion" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('descripcion'), 'form-control-success': fields.descripcion && fields.descripcion.valid}" id="descripcion" name="descripcion" placeholder="{{ trans('admin.departamento.columns.descripcion') }}">
        <div v-if="errors.has('descripcion')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('descripcion') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('id_area'), 'has-success': fields.id_area && fields.id_area.valid }">
    <label for="id_area" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.departamento.columns.id_area') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.id_area" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('id_area'), 'form-control-success': fields.id_area && fields.id_area.valid}" id="id_area" name="id_area" placeholder="{{ trans('admin.departamento.columns.id_area') }}">
        <div v-if="errors.has('id_area')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('id_area') }}</div>
    </div>
</div>


