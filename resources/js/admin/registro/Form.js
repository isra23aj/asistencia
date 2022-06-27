import AppForm from '../app-components/Form/AppForm';

Vue.component('registro-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                fecha:  '' ,
                hora_entrada_am:  '' ,
                hora_salida_am:  '' ,
                hora_entrada_pm:  '' ,
                hora_salida_pm:  '' ,
                codigo_empleado:  '' ,
                id_biometrico:  '' ,
                id_empleado:  '' ,
                
            }
        }
    }

});