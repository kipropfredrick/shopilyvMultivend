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
