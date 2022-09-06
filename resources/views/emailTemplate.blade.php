
<!Doctype html>
<html lang="en">
<head>
<title>Joomdev</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="{{ asset('css/login-css.css') }}">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<!------ Include the above in your HEAD tag ---------->
</head>
<body>
    <div id="login">
        <h3 class="text-center text-white pt-5">JoomDev</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if(session()->has('message'))
                        <p class="alert alert-success"> {{ session()->get('message') }}</p>
                        @endif
                        <form id="login-form" class="form" action="{{route('user.createTemplate')}}" method="POST">
                            @csrf
                            <h3 class="text-center text-info">Create your Template</h3>
                            <div class="form-group">
                                <textarea id="emailtext" name="template" rows="4" cols="50"></textarea>
                            </div>
                        
                            <div class="form-group">
                                <input type="submit" name="Save Template" class="btn btn-info btn-md" value="Save Template">
                               
                            </div>
                           
                        </form>
                        <a href="{{asset('/templates')}}" class="btn btn-info btn-md">View All Template</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>