import AppForm from '../app-components/Form/AppForm';

Vue.component('area-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                codigo_area:  '' ,
                nombre_area:  '' ,
                descripcion:  '' ,
                
            }
        }
    }

});