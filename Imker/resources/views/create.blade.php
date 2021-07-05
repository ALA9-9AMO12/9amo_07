<!DOCTYPE html>

<html>

<head>

    <title>Laravel 7 Form Validation</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha256-L/W5Wfqfa0sdBNIKN9cG6QA5F2qx4qICmU2VgLruv9Y=" crossorigin="anonymous" />

</head>

<body class="bg-dark">

<div class="container">

    <div class="row">

        <div class="col-md-6 offset-3 mt-5">

            <div class="card">

                <div class="card-header">

                    <h5>Laravel 7 Form Validation - NiceSnippets.com</h5>

                </div>

                <div class="card-body">

                    @if (count($errors) > 0)

                        <div class="alert alert-danger">

                            <ul>

                                @foreach ($errors->all() as $error)

                                    <li>{{ $error }}</li>

                                @endforeach

                            </ul>

                        </div>

                    @endif


                    @if ($message = Session::get('success'))

                        <div class="alert alert-success alert-block">

                            <button type="button" class="close" data-dismiss="alert">×</button>

                            <strong>{{ $message }}</strong>

                        </div>

                    @endif


                    <form action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">

                        @csrf

                        <div class="form-group">

                            <label><strong>Name : </strong></label>

                            <input type="text" name="name" class="form-control">

                        </div>

                        <div class="form-group">

                            <label><strong>Email : </strong></label>

                            <input type="email" name="email" class="form-control">

                        </div>

                        <div class="form-group">

                            <label><strong>Mobile No : </strong></label>

                            <input type="text" name="mobile_no" class="form-control">

                        </div>

                        <div class="form-group">

                            <label><strong>Password : </strong></label>

                            <input type="password" name="password" class="form-control">

                        </div>

                        <div class="form-group text-center">

                            <input type="submit" class="btn btn-success" name="submit" value="Save">

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

</body>

</html>
