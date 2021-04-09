<h5 style="font-family: 'Roboto', sans-serif; margin-left:100px;"><strong>Xiaomi Products</strong></h5>
    <div class="container-row">
    <div class="row" style=";">
    <div class="shadow-sm p-3 mb-5 bg-white rounded " >
    @foreach ($products as $pro)
    <div class="column">
    <div class="card">
        <img class="img-fluid w-100" src="/images/{{ $pro->image_path }}" alt="Sample">
        <h4 class="mb-0"><span class="badge badge-primary badge-pill badge-news">Sale</span></h4>
        <a href="#!">
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
