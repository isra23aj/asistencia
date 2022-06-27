import AppForm from '../app-components/Form/AppForm';

Vue.component('horas-extra-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                fecha:  '' ,
                minutos:  '' ,
                id_empleado:  '' ,
                id_registro:  '' ,
                
            }
        }
    }

});