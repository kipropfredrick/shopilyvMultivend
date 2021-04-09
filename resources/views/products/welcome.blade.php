<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="style.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

        <!-- Styles -->
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            .antialiased{
             float: center;
            }
            .navbar navbar-light bg-light{
            color:orange;
            position:fixed;

            }
            .search-1{
            width:500px;
            }
            .text{
            top:px;
            text-align:center;
            color:black;
            }
            .center{
            float:right;
            margin-top:-488px;
            margin-right:332px;

            }
            .shadow-sm p-3 mb-5 bg-white rounded{
              width:310px;
              height:500px;
            }
            .container{
              width: 300px;
              border: transparent;
              padding: 4px;
              margin: 20px;
            }
            .rightbar{
            float:right;
            margin-top:-513px;
            }
            .rightadv{
            margin-top:-10px;
            }
            p{
            font-family: 'Roboto', sans-serif;
            font-size: .70000rem;
            }
            .box {
             transition: box-shadow .3s;
             width: 2px;
             height: 50px;
             margin: 0px;
             border-radius:10px;
             border: 1px  ;
             background: #fff;

           }
           .box:hover {
            box-shadow: 0 0 11px rgba(33,33,33,.2);
           }
        </style>
    </head>

   <body class="antialiased">
   <nav class="navbar navbar-light bg-light fixed-top">
     <a class="navbar-brand"><strong>SHOPILYV</strong></a>

      <form class="form-inline">
       <input  class="form-control mr-sm-2 search-1" type="Search" placeholder="Search for orders" aria-label="Search">
       <button class="btn btn-outline-warning my-2 my-sm-5" type="submit">Search</button>
     </form>
            <div class="text" style="color:black:">

                @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    <button type="button" class="btn btn-info" data-toggle="dropdown">
                        <i class="fa fa-shopping-cart 5-px" aria-hidden="true"></i><span class="badge badge-pill badge-danger">{{Cart::getContent()->count()}}</span>
                       </button>
                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="width: 450px; padding: 0px; border-color: #9DA0A2">
                        <ul class="list-group" style="margin: 20px;">
                            @include('cart.cart-items')
                        </ul>
                   </div>
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline"style="color:black;"><strong>Home</strong></a>
                    @else

                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline"style="color:black;"><strong>Login</strong></a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline"style="color:black;"><strong>Register</strong></a>
                        @endif
                    @endauth
                </div>
            @endif

        </div>
  </nav>

            <!-- Section: Categories -->
                  <section>

            <div class ="outer">
            <div class ="inner">
            <div class="container">
            <div class="shadow-sm p-3 mb-5 bg-white rounded">
            <div class="text-muted small text-uppercase mb-5">
                <p class="mb-3"><a href="#!" class="card-link-secondary" style="color:black;">supermarket</a></p>
                <p class="mb-3"><a href="#!" class="card-link-secondary"style="color:black;">Health & Beauty</a></p>
                <p class="mb-3"><a href="#!" class="card-link-secondary"style="color:black;">Home & Office</a></p>
                <p class="mb-3"><a href="#!" class="card-link-secondary"style="color:black;">Phone & Tablets</a></p>
                <p class="mb-3"><a href="#!" class="card-link-secondary"style="color:black;">Computing</a></p>
                <p class="mb-3"><a href="#!" class="card-link-secondary"style="color:black;">Electronics</a></p>
                <p class="mb-3"><a href="#!" class="card-link-secondary"style="color:black;">Fashion</a></p>
                <p class="mb-3"><a href="#!" class="card-link-secondary"style="color:black;">Gaming</a></p>
                <p class="mb-3"><a href="#!" class="card-link-secondary"style="color:black;">Baby Products</a></p>
                <p class="mb-3"><a href="#!" class="card-link-secondary"style="color:black;">Sporting Goods</a></p>
                <p class="mb-3"><a href="#!" class="card-link-secondary"style="color:black;">Garden & Outdoors</a></p>
            </div>
            </div>
            </div><!-- end .inner -->
            </div><!-- end .outer -->
            </div>
              <!-- Section:  img aligned next to categories -->

       <div class ="center">
       <img src="https://image.freepik.com/free-photo/woman-sitting-table-with-paper-shopping-bags_171337-14712.jpg" alt="W3Schools.com" height:"700">
       </div>

         </section>
       <!-- Section: Categories -->


       <!-- Section: right side bar -->
      <div class="rightbar">
      <div class="container">
      <div class="shadow p-3 mb-5 bg-white rounded w-100 hover-shadow shadow">
           <p class="mb-3"><a href="#!" class="card-link-secondary"style="color:black;"><strong>HELP CENTER</strong><br>
           Guide to customer care</a></p>
           <p class="mb-3"><a href="#!" class="card-link-secondary"style="color:black;"><strong>EASY RETURNS</strong><br>
           Quick refund</a></p>
           <p class="mb-3"><a href="#!" class="card-link-secondary"style="color:black;"><strong>SELL ON SHOPILYV</strong><br>
           Milions of visitors</a></p>
      </div>
      </div>
      <div class="rightadv">
      <div class="container">
      <div class="shadow p-3 mb-5 bg-white rounded w-100 hover-shadow shadow">
           <p class="mb-3"><a href="#!" class="card-link-secondary"style="color:black;"><strong>HELP CENTER</strong><br>
           Guide to customer care</a></p>
           <p class="mb-3"><a href="#!" class="card-link-secondary"style="color:black;"><strong>EASY RETURNS</strong><br>
           Quick refund</a></p>
           <p class="mb-3"><a href="#!" class="card-link-secondary"style="color:black;"><strong>SELL ON SHOPILYV</strong><br>
           Milions of visitors</a></p>
      </div>
      </div>
      </div>
       </div>
       </div>



      <!-- Section:products display with style -->
      <style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
}
</style>
</head>
<body>
    <h5 style="font-family: 'Roboto', sans-serif; margin-left:100px;"><strong>Top Sales</strong></h5>
    <div class="container-row">
    <div class="row" style=";">
    <div class="shadow-sm p-3 mb-5 bg-white rounded " >
    @foreach ($products as $pro)
    <div class="column">

    <div class="card">
        <a href="{{route('product.details')}}"><img class="img-fluid w-100" src="/images/{{ $pro->image_path }}" alt="Sample"></a>
        <h4 class="mb-0"><span class="badge badge-primary badge-pill badge-news">Sale</span></h4>
        <a href="#!">
        </a>
      </div>

      <div class="card-body text-center">

        <h5>Fantasy T-shirt</h5>
        <p class="small text-muted text-uppercase mb-2">Shirts</p>
        <hr>
        <h6 class="mb-3">
          <span class="text-danger mr-1">$12.99</span>
          <span class="text-grey"><s>$36.99</s></span>
        </h6>
        <form action="{{ route('add') }}" method="POST">
            {{ csrf_field() }}
            <input type="hidden" value="{{ $pro->id }}" id="id" name="id">
            <input type="hidden" value="{{ $pro->name }}" id="name" name="name">
            <input type="hidden" value="{{ $pro->price }}" id="price" name="price">
            <input type="hidden" value="{{ $pro->image_path }}" id="img" name="img">
            <input type="hidden" value="{{ $pro->slug }}" id="slug" name="slug">
            <input type="hidden" value="1" id="quantity" name="quantity">
            <div class="card-footer" style="background-color: white;">
                  <div class="row">
                    <button class="btn btn-secondary btn-sm" class="tooltip-test" title="add to cart">
                        <i class="fa fa-shopping-cart"></i> add to cart
                    </button>
                </div>
            </div>
        </form>
        {{-- <button type="button" class="btn btn-primary btn-sm mr-1 mb-2">
         <i class="fa fa-shopping-cart 5-px"></i>Buy Now
        </button>
        <button type="button" class="btn btn-light btn-sm mr-1 mb-2">
          <i class="fa fa-info-circle pr-2"></i>Details --}}

      </div>
      </div>
      @endforeach
      </div>
      </div>

<!-- Card 2 -->
<h5 style="font-family: 'Roboto', sans-serif; margin-left:100px;"><strong>Xiaomi Products</strong></h5>
    <div class="container-row">
    <div class="row" style=";">
    <div class="shadow-sm p-3 mb-5 bg-white rounded " >
    @foreach ($products as $pro)
    <div class="column">
    <div class="card">

        <a href="#!">
            <img class="img-fluid w-100" src="/images/{{ $pro->image_path }}" alt="Sample">
        <h4 class="mb-0"><span class="badge badge-primary badge-pill badge-news">Sale</span></h4>
        </a>
      </div>

      <div class="card-body text-center">

        <p>{{$pro->name}}</p>
        <p class="small text-muted text-uppercase mb-2">{{$pro->slug}}</p>
        <hr>
        <h6 class="mb-3">
          <span class="text-danger mr-1">${{$pro->price}}</span>
          <span class="text-grey"><s>${{$pro->oprice}}</s></span>
        </h6>
        <form action="{{ route('add') }}" method="POST">
            {{ csrf_field() }}
            <input type="hidden" value="{{ $pro->id }}" id="id" name="id">
            <input type="hidden" value="{{ $pro->name }}" id="name" name="name">
            <input type="hidden" value="{{ $pro->price }}" id="price" name="price">
            <input type="hidden" value="{{ $pro->image_path }}" id="img" name="img">
            <input type="hidden" value="{{ $pro->slug }}" id="slug" name="slug">
            <input type="hidden" value="1" id="quantity" name="quantity">
            <div class="card-footer" style="background-color: white;">
                  <div class="row">
                    <button class="btn btn-secondary btn-sm" class="tooltip-test" title="add to cart">
                        <i class="fa fa-shopping-cart"></i> add to cart
                    </button>
                </div>
            </div>
        </form>
        {{-- <button type="button" class="btn btn-light btn-sm mr-1 mb-2">
          <i class="fa fa-info-circle pr-2"></i>Details --}}

      </div>
      </div>
      @endforeach
      </div>
      </div>
    </body>
</html>
