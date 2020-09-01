<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <base href="{{asset('')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="backend/css/bootstrap.min.css">
    <link rel="stylesheet" href="backend/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Bai+Jamjuree:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <title>Login</title>
</head>

<body class="bg-best">

    <div class="container">
        <div class="row vh-100">
            <div class="col-md-4 col-6 bg-dark m-auto py-4">
                <h1 class="text-center text-hover font-weight-bold mb-3">SIGN UP</h1>
                @include('error.note')
                <form action="{{route('postSignUp')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label class="text-uppercase text-hover font-weight-bold" for="exampleInputEmail1">
                            Email
                        </label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                        <label class="text-uppercase text-hover font-weight-bold" for="exampleInputEmail1">
                            Name
                        </label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <label class="text-uppercase text-hover font-weight-bold" for="exampleInputPassword1">
                            Password
                        </label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="form-group">
                        <label class="text-uppercase text-hover font-weight-bold" for="exampleInputPassword1">
                            Address
                        </label>
                        <input type="text" class="form-control" name="address">
                    </div>
                    <div class="form-group">
                        <label class="text-uppercase text-hover font-weight-bold" for="exampleInputPassword1">
                            Phone number
                        </label>
                        <input type="text" class="form-control" name="phone">
                    </div>
                    <button type="submit" class="btn btn-best btn-block font-weight-bold text-uppercase mt-4">
                        Submit
                    </button>
                </form>
                <p class="m-0 mt-3 text-white text-center">
                    <a class="text-uppercase text-hover text-decoration-none font-weight-bold"
                        href="{{route('getLogin')}}">
                        Back
                    </a>
                </p>
            </div>
        </div>
    </div>

    <!-- Link JavaScript -->
    <script src="assets/js/jquery-3.5.1.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>