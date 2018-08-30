


<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

</head>
<body>




<div class="flex-center position-ref full-height">

    <div class="top-left">
        <div class="header mt-4 pl-4 pr-4">
            <div class="row">
                <div class="float-left">
                    <ul class="float-left">
                        <li data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent"><i class="fa fa-align-justify"></i></li>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                    </ul>
                    <ul class="float-left ml-4 list-suras">
                        <li data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                            @include('quran._sidebar')
                        </li>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                            @include('_sidebar')
                        </div>
                    </ul>
                    <ul class="float-left ml-4 list-ayats">
                        <li data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                            @include('quran.ayat._sidebar')

                        </li>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                            @yield('ayatmen')
                        </div>
                    </ul>

                </div>
                <div class="float-right"></div>
            </div>
        </div>
    </div>

    <div class="content  w-75 mx-75">


        <div class="d-md-none d-lg-none">
            <div class="mt-xs-5 pt-xs-5"></div>
        </div>

        @yield('content')


    </div>
</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>

