import AppForm from '../app-components/Form/AppForm';

Vue.component('permiso-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                fecha_pedido:  '' ,
                fecha_inicio:  '' ,
                fecha_fin:  '' ,
                nro_dias:  '' ,
                motivo:  '' ,
                tipo_permiso:  '' ,
                autoriza:  '' ,
                id_empleado:  '' ,
                
            }
        }
    }

});