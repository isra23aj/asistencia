import AppForm from '../app-components/Form/AppForm';

Vue.component('empleado-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                nic:  '' ,
                codigo_empleado:  '' ,
                nombres:  '' ,
                apellido_paterno:  '' ,
                apellido_materno:  '' ,
                telefono:  '' ,
                celular:  '' ,
                email:  '' ,
                profesión:  '' ,
                puesto:  '' ,
                id_departamento:  '' ,
                id_turno:  '' ,
                
            }
        }
    }

});