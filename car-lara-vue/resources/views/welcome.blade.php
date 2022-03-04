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



            <div class="modal-body">
                <input type="hidden" disabled class="form-control" id="e_id" name="id" required :value="this.e_id">
                    Make: <input type="text" class="form-control" id="e_make" name="make" required :value="this.e_make">
                    Model: <input type="text" class="form-control" id="e_model" name="model" required  :value="this.e_model">
            </div>    
                                    
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" @click="editCar()">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>



        </div>   
    </body>
</html>
