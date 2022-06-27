import AppForm from '../app-components/Form/AppForm';

Vue.component('departamento-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                codigo_departamento:  '' ,
                nombre_departamento:  '' ,
                descripcion:  '' ,
                id_area:  '' ,
                
            }
        }
    }

});