<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <div id="app">

            <div class="title m-b-md">
                Car
            </div>
            <div class="alert alert-danger" role="alert" v-bind:class="{hidden: hasError}">
                All fields are required!
            </div>
            <div class="form-group">
                <label for="make">Make</label>
                <input type="text" class="form-control" id="make" required placeholder="Make" name="make" v-model="newCar.make">
            </div>
                                                    
            <div class="form-group">
                <label for="model">Model</label>
                <input type="text" class="form-control" id="model" required placeholder="Model" name="model" v-model="newCar.model">
            </div>
            
            <button class="btn btn-primary" @click.prevent="createCar()">
                Add Car
            </button>


            <script>
                data: {
                    newCar: {'make': '', 'model': ''},
                    hasError: true,
                    cars: [],
                }

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
            </script>

        </div>   
    </body>
</html>
