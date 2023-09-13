<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Boot - @yield('title')</title>
    
    <link rel="stylesheet" type="text/css" href="{{asset('de.css')}}">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid ">
        <div class="row">

            <div class="col-4 d-flex justify-content-center  pt-5   ">
                      
            <!-- <img src="../images1/logo.png" alt="" class="img-fluid "> -->
                   <img src="../images1/logo.png" alt="" class="img-fluid ">
            </div>

            <div class="col-8 d-flex justify-content-around pt-5">
               @section('allpages')
               <nav class="nav text-dark ">
                  <a class="nav-link text-dark active" aria-current="page" href="/">Home</a>
                  <a class="nav-link text-dark" href="/about">About</a>
                  <a class="nav-link text-dark" href="/post">Post</a>
                 
                  
              </nav>
               @show
            </div>

            <div class="col-5 hp">
                @yield('content')
            </div>


            <div class="col-7">
                <img src="../images1/header.png" alt="" class="img-fluid ">
            </div>


        </div>

        

           
          <div class="row">
            <div class="col-1"></div>
            <div class="col-10 bg-shadow">
              <button class="btn "></button>
            </div>
            <div class="col-1"></div>
          </div>


           


        









    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>