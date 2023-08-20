<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">


  <title>Edit profile page - Bootdey.com</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <style type="text/css">
    body {
      margin-top: 20px;
      background: #f5f5f5;
    }

    /**
  * Panels
  */
    /*** General styles ***/
    .panel {
      box-shadow: none;
    }

    .panel-heading {
      border-bottom: 0;
    }

    .panel-title {
      font-size: 17px;
    }

    .panel-title>small {
      font-size: .75em;
      color: #999999;
    }

    .panel-body *:first-child {
      margin-top: 0;
    }

    .panel-footer {
      border-top: 0;
    }

    .panel-default>.panel-heading {
      color: #333333;
      background-color: transparent;
      border-color: rgba(0, 0, 0, 0.07);
    }

    form label {
      color: #999999;
      font-weight: 400;
    }

    .form-horizontal .form-group {
      margin-left: -15px;
      margin-right: -15px;
    }

    @media (min-width: 768px) {
      .form-horizontal .control-label {
        text-align: right;
        margin-bottom: 0;
        padding-top: 7px;
      }
    }

    .profile__contact-info-icon {
      float: left;
      font-size: 18px;
      color: #999999;
    }

    .profile__contact-info-body {
      overflow: hidden;
      padding-left: 20px;
      color: #999999;
    }

    .profile-avatar {
      width: 200px;
      position: relative;
      margin: 0px auto;
      margin-top: 196px;
      border: 4px solid #f3f3f3;
    }
  </style>
</head>

<body>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
  <div class="container bootstrap snippets bootdeys">
    <div class="row">
      <div class="col-xs-12 col-sm-9">
          <form class="form-horizontal" method = "POST" action="{{ route('users.update', $user->id) }}">
          @csrf
          @method('PUT')
          <div class="panel panel-default">
            <div class="panel-body text-center">
              <img src="https://bootdey.com/img/Content/avatar/avatar6.png" class="img-circle profile-avatar"
                alt="User avatar">
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">User info</h4>
            </div>
            <div class="panel-body">
              <div class="form-group">
                <label class="col-sm-2 control-label">Name</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="exampleInputEmail1" name="name" value="{{$user -> name}}">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="exampleInputPassword1" name="email" value="{{$user -> email}}">   
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Password</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="exampleInputPassword1" name="password"  value="{{$user -> password}}" disabled>
                </div>
              </div>
            </div>
          </div>

          <button type="submit" class="btn btn-primary" name="update" style="margin-left: 45%;">Submit</button>
          <a href="{{route('home')}}" class="btn btn-primary">Back to home</a>
        </form>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
  <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript">

  </script>
</body>

</html>