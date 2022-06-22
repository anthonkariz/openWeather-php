<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <title>Open Weather</title>
</head>

<body>
    <div class="container_fluid">

        <div class="row  p-2">
            <h3>Open Weather </h3>
        </div>
        <div class="row bg-dark p-4"> </div>
    </div>

    <div class="container">
        <form  class="row  gy-2 gx-2 align-items-center pt-4" method="POST" action="result.php">
            <div class="col-md-10">
             
                <input type="text" name="city" id="city" class="form-control" placeholder="Enter city name ">
               
            </div>
            <div class="col-auto">
                <button class="btn btn-primary">Search</button>
            </div>

        </form>

    </div>
</body>

</html>