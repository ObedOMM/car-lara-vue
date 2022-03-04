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





            <table class="table table-striped" id="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Make</th>
                    <th scope="col">Model</th>
                    <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for ="car in cars">
                    <th scope="row">@{{car.id}}</th>
                    <td>@{{car.make}}</td>
                    <td>@{{car.model}}</td>

                    <td @click="setVal(car.id, car.make, car.model)"  class="btn btn-info" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil"></i>
                    </td>
                    <td  @click.prevent="deleteCar(car)" class="btn btn-danger"> 
                    <i class="fa fa-trash"></i>
                    </td>
                    </tr>
                </tbody>
            </table>


            


            <script>
                data: {
                    newCar: {'make': '', 'model': ''},
                    hasError: true,
                    cars: [],
                }


            </script>

        </div>   
    </body>
</html>
