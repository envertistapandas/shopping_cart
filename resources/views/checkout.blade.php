@extends('welcome')

@section('checkout')

<div class="container">
    <div class="py-5 text-center">
        <!--<img class="d-block mx-auto mb-4" src="https://getbootstrap.com/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">-->
        <h2>Checkout form</h2>
        <p class="lead">Below is your checkout form controls. Fillup all details before going to your payment</p>
    </div>
    <div class="row">
        <?php $total = 0 ?>
         @if(session('cart'))
            @foreach(session('cart') as $id => $details)
                 <?php $total += $details['price'] * $details['quantity'] ?>
        <div class="col-md-3 order-md-2 mb-4">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Your cart</span>
                <span class="badge badge-secondary badge-pill">{{ count((array) session('cart')) }}</span>
            </h4>
            <ul class="list-group mb-3 sticky-top">
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Product name</h6>
                        <small class="text-muted">{{ $details['name'] }}</small>
                    </div>
                    <span class="text-muted">{{ $details['price'] }}</span>
                </li>
                <!--<li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Second product</h6>
                        <small class="text-muted">Brief description</small>
                    </div>
                    <span class="text-muted">$8</span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Third item</h6>
                        <small class="text-muted">Brief description</small>
                    </div>
                    <span class="text-muted">$5</span>
                </li>-->
               
                <li class="list-group-item d-flex justify-content-between">
                    <span>Total Rs-</span>
                    <strong>{{ $total }}</strong>
                </li>
            </ul>
            @endforeach
        @endif
        </div>
        <div class="col-md-4 order-md-1">
            <h4 class="mb-3">Billing address</h4>
            <form class="needs-validation" novalidate="" action="{{url('checkout_bill')}}" method="post">
                        {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" value="" required="">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="phone">Phone </label>
                    <input type="phone" class="form-control" id="phone" name="phone" placeholder="9736236954" required="">
                    
                </div>
                <div class="mb-3">
                    <label for="email">Email <span class="text-muted">(Optional)</span></label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com">
                    
                </div>
                <div class="mb-3">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St" required="">
                    
                </div>
                <div class="mb-3">
                    <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
                    <input type="text" class="form-control" id="address2" name="address2" placeholder="Apartment or suite">
                </div>
                <div class="row">
                    <div class="col-md-5 mb-3">
                        <label for="country">Country</label>
                        <select class="custom-select d-block w-100" id="country" required="">
                            <option value="">Choose...</option>
                            <option>India</option>
                            <option>Australia</option>
                            <option>Newzeland</option>
                            <option>South Africa</option>
                            <option>West Indies</option>
                        </select>
                        
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="state">State</label>
                        <select class="custom-select d-block w-100" id="state" required="">
                            <option value="">Choose...</option>
                            <option>W.B</option>
                            <option>M.P</option>
                            <option>U.P</option>
                            <option>Mumbai</option>
                        </select>
                       
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="pin">Pin</label>
                        <input type="text" class="form-control" id="pin" placeholder="" required="">
                    </div>
                </div>
               <!-- <hr class="mb-4">-->
                <!--<div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="same-address">
                    <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="save-info">
                    <label class="custom-control-label" for="save-info">Save this information for next time</label>
                </div>-->
                <hr class="mb-4">
                <h4 class="mb-3">Payment</h4>
                <div class="d-block my-3">
                    <div class="custom-control custom-radio">
                        <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked="" required="">
                        <label class="custom-control-label" for="credit">Credit card</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required="">
                        <label class="custom-control-label" for="debit">Debit card</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required="">
                        <label class="custom-control-label" for="paypal">PayPal</label>
                    </div>
                </div>
                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
            </form>
        </div>
    </div>
</div>
@endsection