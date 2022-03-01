<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 
</head>
<body>
<div class="container">
<form action="/adminlog" method="post" >
{{csrf_field()}}
                                <h1 class="text-center">Admin Login</h1>

                                <label for="email"><b>Email</b></label>
                                <input type="text" class="form-control" placeholder="Enter Email" name="email" required>
                                </br>
                                <label for="psw"><b>Password</b></label>
                                <input type="password" class="form-control" placeholder="Enter Password" name="psw" required>
                                </br>
                                </br>
                                <button type="submit" class="btn btn-primary" >Login</button>
                                <button type="Reset"class="btn btn-primary" >clear</button>
                            </form>
    </div>
</body>
</html>