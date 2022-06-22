<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <title>open Weather</title>
</head>

<body>
    <div class="container_fluid">

        <div class="row  p-2">
            <h3>Open Weather </h3>
        </div>
        <div class="row bg-dark p-4"> </div>
    </div>

    <div class="container">
        <form class="row  gy-2 gx-2 align-items-center pt-4" method="POST" action="results.php">
            <div class="col-md-10">


                <input type="text" name="city" id="city" class="form-control" placeholder="Enter city name ">

            </div>
            <div class="col-auto">
                <button class="btn btn-primary">Search</button>
            </div>

        </form>


        <div class="row">
            <div class="col-md-12">

                <?php
                include('open_weather.php');
                $open_weather = new  open_weather($token);
                $result =   $open_weather->show(trim($_POST['city']));

                ?>
                <?php if($result['cod'] == 200): ?>
                <div class="card mt-5">
                    <div class="card-header">
                       <h4> <?= ucfirst($_POST['city'])?></h4>
                    </div>
                    <div class="card-body">
                        <p> Weather condition  <b> <?= $result['weather'][0]['description'] ?></b> </p>

                        <ul>

                            <li> temperature <b> <?= $result['main']['temp'] ?> <sup>o</sup> C</b></li>
                            <li> Feels like <b> <?= $result['main']['feels_like'] ?> <sup>o</sup> C</b></li>
                            <li> Humidity <b> <?= $result['main']['humidity'] ?>  % </b> </li>
                            <li> Minimum temperature <b> <?= $result['main']['temp_min'] ?> <sup>o</sup>C</b></li>
                            <li> Maximum temperature <b> <?= $result['main']['temp_max'] ?> <sup>o</sup> C</b></li>
                           
                            <li> Wind speed, <b> <?= $result['wind']['speed'] ?> hPa</b></li>                         

                        </ul>
                    </div>
                </div>
                <?php else: ?>
                    <p class="alert alert-warning mt-4"> Sorry we do not have weather information for that city please try another </p>
                    <?php endif; ?>

               

            </div>
        </div>
    </div>


</body>

</html>