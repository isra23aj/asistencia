import AppForm from '../app-components/Form/AppForm';

Vue.component('retraso-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                fecha:  '' ,
                minutos:  '' ,
                horas:  '' ,
                id_empleado:  '' ,
                id_registro:  '' ,
                
            }
        }
    }

});