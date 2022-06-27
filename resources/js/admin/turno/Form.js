import AppForm from '../app-components/Form/AppForm';

Vue.component('turno-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                codigo_turno:  '' ,
                nombre_turno:  '' ,
                descripcion:  '' ,
                horas_trabajo:  '' ,
                hora_entrada_am:  '' ,
                hora_salida_am:  '' ,
                hora_entrada_pm:  '' ,
                hora_salida_pm:  '' ,
                
            }
        }
    }

});