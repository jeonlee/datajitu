<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <script src="https://use.fontawesome.com/2c7fae0dc7.js"></script>


    <link rel="stylesheet" type="text/css" href="/style/style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Datajitu.com</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <!--<li><a href="#">Dashboard</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>-->
            <li><a href="{{ url('/logout') }}">Logout</a></li>
          </ul>
          <!--<form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>-->
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Menu <span class="sr-only">(current)</span></a></li>
            <li><a href="#" data-toggle="collapse" data-target="#users" aria-expanded="false" aria-controls="users">User <span class="pull-right"><i class="fa fa-caret-down" aria-hidden="true"></i></span></a></li>
              <!--<div class="collapse" id="users">
                <ol>
                  <li><a href="{{ url('/groups') }}">List Groups</a></li>
                  <li><a href="{{ url('/users') }}">List Users</a></li>
                </ol>
              </div>
            <li><a href="#" data-toggle="collapse" data-target="#reports" aria-expanded="false" aria-controls="reports">List Reports <span class="pull-right"><i class="fa fa-caret-down" aria-hidden="true"></i></span></a></li>
              <div class="collapse" id="reports">
                <ol>
                  <li><a href="{{ url('/categories') }}">List Kategori</a></li>
                  <li><a href="{{ url('/reports') }}">List Report</a></li>
                </ol>
              </div>-->
            <li><a href="#" data-toggle="collapse" data-target="#results" aria-expanded="false" aria-controls="results">Hasil Keluaran Togel <span class="pull-right"><i class="fa fa-caret-down" aria-hidden="true"></i></span></a></li>
              <div class="collapse" id="results">
                <ol>
                  <li><a href="{{ url('/admin/singapura') }}">Togel Singapore</a></li>
                  <li><a href="{{ url('/admin/sydney') }}">Togel Sydney</a></li>
                  <li><a href="{{ url('/admin/cambodia') }}">Togel Cambodia</a></li>
                  <li><a href="{{ url('/admin/taiwan') }}">Togel Taiwan</a></li>
                  <li><a href="{{ url('/admin/china') }}">Togel China</a></li>
                  <li><a href="{{ url('/admin/hongkong') }}">Togel Hongkong</a></li>

                </ol>
              </div>
          </ul>
          
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            @yield('content')

            @yield('footer')
        </div>
      </div>

    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  </body>
</html>
