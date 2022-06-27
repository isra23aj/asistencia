<div class="form-group row align-items-center" :class="{'has-danger': errors.has('codigo_area'), 'has-success': fields.codigo_area && fields.codigo_area.valid }">
    <label for="codigo_area" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.area.columns.codigo_area') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.codigo_area" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('codigo_area'), 'form-control-success': fields.codigo_area && fields.codigo_area.valid}" id="codigo_area" name="codigo_area" placeholder="{{ trans('admin.area.columns.codigo_area') }}">
        <div v-if="errors.has('codigo_area')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('codigo_area') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('nombre_area'), 'has-success': fields.nombre_area && fields.nombre_area.valid }">
    <label for="nombre_area" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.area.columns.nombre_area') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.nombre_area" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('nombre_area'), 'form-control-success': fields.nombre_area && fields.nombre_area.valid}" id="nombre_area" name="nombre_area" placeholder="{{ trans('admin.area.columns.nombre_area') }}">
        <div v-if="errors.has('nombre_area')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('nombre_area') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('descripcion'), 'has-success': fields.descripcion && fields.descripcion.valid }">
    <label for="descripcion" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.area.columns.descripcion') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.descripcion" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('descripcion'), 'form-control-success': fields.descripcion && fields.descripcion.valid}" id="descripcion" name="descripcion" placeholder="{{ trans('admin.area.columns.descripcion') }}">
        <div v-if="errors.has('descripcion')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('descripcion') }}</div>
    </div>
</div>


