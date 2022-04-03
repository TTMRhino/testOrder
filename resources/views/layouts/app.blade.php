<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- CSRF Token -->
     <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">

  <title>{{ config('app.name', 'Laravel') }}</title>
</head>

<body>

    <div class="container-fluid h-100">
        <div class="row  h-100">
            <!--left bar-side -->
            <div class="col-2  article-bar">
                <div class="warp-bar">
                    <div class="row pb-5">

                        <div class="col-6 logo">
                            <img src="" alt="logo">
                        </div>
    
                        <div class="col-6 label-menu">
                            <span>Enterprice Resource Planning </span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-center">
                            <span>
                                Продукты
                            </span>
                        </div>
    
                    </div> 
                </div>
               

            </div>

            <div class="col-10 main">
                <div class="row header-main ">
                    <div class="col-10 ">
                        <div class="label-header">
                            Продукты
                        </div>
                    </div>

                    <div class="col-2">
                        <a href=" {{ route('User.logout')}}"> 
                            <span class="user">{{ Auth::user()->name }} : {{ config('products.role') }}</span>: LogOut
                        </a>
                        
                    </div>
                </div>


              

                    <!-- main content begin -->
                  
                    @yield('content')
                    <!-- main content end -->
               
              


            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js " integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js " integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF " crossorigin="anonymous "></script>

</body>

</html>