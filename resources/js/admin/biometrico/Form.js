import AppForm from '../app-components/Form/AppForm';

Vue.component('biometrico-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                codigo_bio:  '' ,
                fecha:  '' ,
                hora:  '' ,
                ubicacion:  '' ,
                estado:  false ,
                
            }
        }
    }

});