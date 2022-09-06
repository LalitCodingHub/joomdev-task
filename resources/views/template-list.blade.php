
<!Doctype html>
<html lang="en">
<head>
<title>Joomdev</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

<!------ Include the above in your HEAD tag ---------->
</head>
<body>
        <h3 class="text-center text-white pt-5 text-primary">Template List</h3>
        <div class="container">
            <div id="login-row" class="">
                <div id="login-column" class="">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table style="width:100%" class="table table-bordered border-primary">
                              <thead>
                                <tr>
                                  <th scope="col">ID</th>
                                  <th scope="col">Updated By</th>
                                  <th scope="col">Message</th>                                  
                                </tr>
                              </thead>
                              <tbody>
                                @foreach ($templates as  $template)
                                <tr>
                                  <th style="font-size: 23px;" scope="row">{{$template->id}}</th>
                                  <td style="font-size: 23px;">{{$template->user_id}}</td>
                                  <td style="white-space: pre;font-size: 23px;">{{$template->template}}</td>
                                </tr>
                                @endforeach
                              </tbody>
                            </table>
                            <a href="{{asset('/generate-template')}}" class="btn btn-info btn-md">Create New Template</a>
                          </div>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>