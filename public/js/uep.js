/*
new Vue({
    el: '#crud',
    'data':{
            movimientos: [],
            newFecha:'',
            newAnterior:'',
            newActual:'',
            newDescripcion:'',
            errors: []

    },
    'methods':{
        createMovimiento: funcion(){
            var url = 'movimiento';
            axios.post(url,{
                fecha: this.newFecha,
                valor_anterior: this.newAnterior,
                valor_actual: this.newActual,
                descripcion: this.newDescripcion
            }).then(response =>{
                this.newFecha: '';
                this.newAnterior:'',
                this.newActual: '',
                this.newDescripcion:'',
                this.errors: [];
                $('#create').modal('hide');
                //toastr.success('Movimiento creado satisfactoriamente');
            }).catch(error =>{
                this.errors = error.response.data
            });
        }
    }
});
*/
