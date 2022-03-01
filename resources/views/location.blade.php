<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add location</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 

</head>
<body>
    <div class="container">

        @foreach($errors->all() as $error)
               <div class="alert alert-danger" role="alert">
                  {{$error}}
               </div>
        @endforeach

        <form method="post" action="/savetask" >
        {{csrf_field()}}
           
            <h1 class="text-center">Add Locations</h1>
                <hr>

                    <label for="name"><b>Location Name</b></label>
                    <input type="text" class="form-control" placeholder="Enter Hotel name" name="Lname" ></br>

                    <label for="Desc"><b>Description</b></label>
                    <textarea class="form-control" placeholder="Enter Description" name="Ldesc" style="height:20px;"></textarea></br>

                    <label for="img"><b>Nearest Hotels</b></label>
                    <input type="text" class="form-control" placeholder="Enter hotels" name="NBH"></br>

                    <label for="img"><b>upload related images</b></label>
                    <input type="file" id="myFile" class="form-control" name="filename" multiple></br>
                
                <hr>

                    <button type="submit" class="btn btn-success btn-lg" value='SAVE' >SAVE</button>
                    <button type="reset" class="btn btn-warning btn-lg" >Reset</button>  

        </form>
        </br>
                    <table class="table table-dark">
                        <th>ID</th>
                        <th>LocationName</th>
                        <th>Description</th>
                        <th>NearbyHotels</th>
                        <th>Gallery</th>
                        <th>Actions</th>

                        @foreach($locations as $location)
                        
                        <tr>
                            <td>{{$location->id}}</td>
                            <td>{{$location->LocationName}}</td>
                            <td>{{$location->Description}}</td>
                            <td>{{$location->NearbyHotels}}</td>
                            <td>{{$location->Gallery}}</td>
                            <td>
                            <a href="/deletelocation/{{$location->id}}" class="btn btn-danger">Delete</a>
                            <a href="/updatelocation/{{$location->id}}" class="btn btn-warning">Update</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                        


    </div>
</body>
</html>