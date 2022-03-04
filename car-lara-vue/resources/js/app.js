require('./bootstrap');

window.Vue = require('vue');

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

const app = new Vue({
    el: '#app',

    getCars: function getCars(){
        var _this = this;
        axios.get('/getCars').then(function(response){
            _this.cars = response.data;
        }).catch(error=>{
            console.log("Get All: "+error);
        });
    },
});


