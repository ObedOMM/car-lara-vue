require('./bootstrap');

window.Vue = require('vue');

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

const app = new Vue({
    el: '#app',
    

        e_id: '',
        e_make: '',
        e_model: '',

        setVal(val_id, val_make, val_model) {
            this.e_id = val_id;
            this.e_make = val_make;
            this.e_model = val_model;
          },




    createCar: function createCar() {
        var input = this.newCar;
        var _this = this;
        if(input['make'] == '' || input['model'] == '') {
            this.hasError = false;
        }
        else {
            this.hasError= true;
            axios.post('/storeCar', input).then(function(response){
                _this.newCar = {'make': '', 'model': ''}
                _this.getCars();
            }).catch(error=>{
                console.log("Insert: "+error);
            });
        }
    },

    getCars: function getCars(){
        var _this = this;
        axios.get('/getCars').then(function(response){
            _this.cars = response.data;
        }).catch(error=>{
            console.log("Get All: "+error);
        });
    },


    mounted: function mounted(){
        this.getCars();
    },




    editCar: function(){
        var _this = this;
        var id_val_1 = document.getElementById('e_id');
        var make_val_1 = document.getElementById('e_make');
        var model_val_1 = document.getElementById('e_model');
        var model = document.getElementById('myModal').value;
         axios.post('/editCars/' + id_val_1.value, {val_1: make_val_1.value, val_2: model_val_1.value})
           .then(response => {
             _this.getCars();
           });
    },



    deleteCar: function deleteCar(car) {
        var _this = this;
        axios.post('/deleteCar/' + car.id).then(function(response){
         _this.getCars();
            }).catch(error=>{
                  console.log("Delete car: "+error);
                  });
    },

              
});


