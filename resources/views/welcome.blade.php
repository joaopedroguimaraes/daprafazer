<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Dá pra fazer!</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- Icons -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- Styles -->
        <style>
        html, body {
        background-color: #fff;
        /*color: #636b6f;*/
        color: #222;
        font-family: 'Raleway', sans-serif;
        font-weight: 100;
        height: 100vh;
        margin: 0;
        }
        .full-height {
        height: 100vh;
        }
        .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
        }
        .position-ref {
        position: relative;
        }
        .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
        }
        .content {
        text-align: center;
        }
        .title {
        font-size: 84px;
        }
        .links > a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
        }
        .m-b-md {
        margin-bottom: 30px;
        }
        #parallaxBar{
        min-height: 600px;
        background-color:#004c82;
        background: url(imgs\\brooke-lark-385507-unsplash-small.jpg);
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
        }
        .header-text {
        position: absolute;
        margin-top: 35%;
        text-align: center;
        left:0%;
        padding: 10%;
        }
        .page-title {
        font-size: 70px;
        }
        .page-subtitle {
        font-size: 25px;
        font-weight: 600;
        margin-top: 3%;
        }
        .arrow {
        font-size: 30px;
        margin-top: 6%;
        }
        .bounce {
        -moz-animation: bounce 2s infinite;
        -webkit-animation: bounce 2s infinite;
        animation: bounce 2s infinite;
        }
        @keyframes bounce {
        0%, 20%, 50%, 80%, 100% {
        transform: translateY(0);
        }
        40% {
        transform: translateY(-15px);
        }
        60% {
        transform: translateY(-15px);
        }
        }
        .footer {
        background-color: #222;
        min-height: 300px;
        }
        .section-light {
        background-color: #eee;
        min-height: 400px;
        }
        .section-light > h1 {
        font-size: 44px;
        text-align: center;
        margin: 0px;
        padding-top: 40px;
        padding-left: 20px;
        padding-right: 20px;
        }
        .section-dark {
        background-color: #222;
        min-height: 400px;
        }
        .section-dark > h1 {
        color:#eee;
        font-size: 44px;
        text-align: center;
        margin: 0px;
        padding-top: 40px;
        padding-left: 20px;
        padding-right: 20px;
        }
        @media(min-height: 700px) {
        #parallaxBar {
        background: url(imgs\\brooke-lark-385507-unsplash.jpg);
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
        }
        .header-text {
        position: absolute;
        margin-top: 5%;
        text-align: center;
        }
        .page-title {
        font-size: 90px;
        }
        .page-subtitle {
        font-size: 24px;
        margin-top: 3%;
        }
        .arrow {
        margin-top: 15%;
        }
        }
        </style>
    </head>
    <body>
        <section id="parallaxBar" class="full-height" data-speed="6" data-type="background">
            <div class="container">
                <div class="row">
                    <div class="col-sm header-text">
                        <div class="page-title">
                            dá pra fazer
                        </div>
                        <div class="page-subtitle">
                            o que dá pra cozinhar com o que você tem aí?
                        </div>
                        <div class="arrow bounce">
                            <i class="fas fa-arrow-down"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- <div class="flex-center position-ref full-height"> -->
        <!--  @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Home</a>
            @else
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Register</a>
            @endauth
        </div>
        @endif -->
        <!--   <div class="content">
            <img src="{{ asset('/imgs/icon_main.png') }}">
            <div class="title m-b-md">
                dá pra fazer
            </div>
            <div class="col-lg-10">
                <form action="{{ url('task') }}" method="POST" class="form-horizontal"> -->
                    <!-- Task Name -->
                    <!--  <div class="form-group">
                        <label for="task" class="col-sm-3 control-label">Task</label>
                        <div class="col-sm-6">
                            <input type="text" name="name" id="task-name" class="form-control">
                        </div>
                    </div> -->
                    <!-- Add Task Button -->
                    <!-- <div class="form-group">
                        <div <center></center>lass="col-sm-offset-3 col-sm-6">
                            <button type="submit" class="btn btn-default">
                            <i class="fa fa-plus"></i> Add Task
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div> -->
 

     <!--    <section>
            <div class="row section-light">
                <h1>o que você já tem?</h1>
                <div class="row">
                    <div class="col-md">
                        a
                    </div>
                    <div class="col-md">
                        a
                    </div>
                    <div class="col-md">
                        a
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="row section-dark">
                <h1>título dark</h1>
            </div>
        </section>
        <section>
            <div class="row section-light">
                <h1>título light</h1>
                
            </div>
        </section>
        <section>
            <div class="row footer">
                aaaa
            </div>
        </section> -->
        <!-- </div> -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>