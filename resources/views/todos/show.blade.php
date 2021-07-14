<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous">

    <title>Todo Item</title>
</head>

<body>
    <div class="conatiner">

        <h1 class="text-center my-5">
            {{$todo->name}}
        </h1>


        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card card-default">
                    <div class="card-header">
                        Details
                    </div>

                    <div class="card-body">
                        {{ $todo->description }}
                    </div>
                </div>
            </div>
        </div>

    </div>


</body>

</html>