import AppForm from '../app-components/Form/AppForm';

Vue.component('multa-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                fecha:  '' ,
                id_empleado:  '' ,
                id_registro:  '' ,
                
            }
        }
    }

});