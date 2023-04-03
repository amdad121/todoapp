<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card w-50 ml-5 mx-auto">
                    <div class="card-body">
                        <form class="d-flex justify-content-center" method="POST" action="{{ url('/todo') }}">
                            @csrf
                            <div class="form-row align-items-center">
                                <div class="col-auto">
                                    <label class="sr-only" for="inlineFormInput">Todo</label>
                                    <input type="text" class="form-control mb-2" name="todo" id="inlineFormInput" placeholder="Add Todo">
                                </div>
                                <div class="col-auto">
                                    <button type="submit" class="btn btn-primary mb-2">Add Todo</button>
                                </div>
                            </div>
                        </form>
                        <hr>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between">
                                <a href="" class="p-1 d-block"><del>Lorem, ipsum dolor.</del></a>
                                <a href="" class="btn btn-sm btn-danger">Delete</a>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <a href="" class="p-1 d-block">Test Note number 1</a>
                                <a href="" class="btn btn-sm btn-danger">Delete</a>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <a href="" class="p-1 d-block"><del>Note no 02</del></a>
                                <a href="" class="btn btn-sm btn-danger">Delete</a>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <a href="" class="p-1 d-block"><del>Lorem, ipsum dolor.</del></a>
                                <a href="" class="btn btn-sm btn-danger">Delete</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>

</html>