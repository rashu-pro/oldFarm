<x-app-layout>

  <!-- page title -->
  {{--<div class="page-title" style="background-image: url(images/marketplace-page-title.jpg)">--}}
  {{--<div class="container">--}}
  {{--<div class="page-title-inner text-center">--}}
  {{--<h2>Checkout</h2>--}}
  {{--<ul class="nav justify-content-center">--}}
  {{--<li class="nav-item"><a href="#" class="nav-link">Home</a> </li>--}}
  {{--<li class="nav-item"><a href="#" class="nav-link">Checkout</a> </li>--}}
  {{--</ul>--}}
  {{--</div>--}}
  {{--</div>--}}
  {{--</div>--}}

  <!-- main wrapper -->
  <div class="main-wrapper">
    <div class="container">
      <form id="checkout-form" method="post" action="{{route('add-subscription')}}">
        @csrf
        <div class="grid grid-cols-2 gap-4 bg-white rounded-lg border border-gray-300">
          <div class="form-div px-12 py-8">
            <div class="form-group pb-6">
              <h2 class="mb-2">Contact Information</h2>
              <div class="field-group">
                <x-input-label for="contact-email" class="" value="Email"/>
                <x-text-input id="contact-email"
                              class="field-required block mt-1 w-full"
                              data-validation="email"
                              type="email" name="EmailBilling" value="{{$hasPaymentMethod['email']}}"/>
              </div>

            </div>

            <div class="form-group pb-4">
              <h2 class="mb-2">Payment Details</h2>

              @if($hasPaymentMethod['status'])

                <div class="">
                  <p class="m-0">Last 4 digit of your card: {{$hasPaymentMethod['last4']}}</p>
                </div>

                @else
                <div class="field-group mb-4">
                  <x-input-label for="card-holder-name" value="Name on Card"/>
                  <x-text-input id="card-holder-name"
                                class="field-required block mt-1 w-full"
                                data-validation="required"
                                type="text" name="nameOnCard" required/>
                </div>

                <div class="field-group mb-4">
                  <x-input-label for="card-number" value="Card Number"/>
                  <x-text-input id="card-number" class="block mt-1 w-full"
                                type="text"
                                name="cardNumber" required/>
                </div>

                <div class="">
                  <div class="flex flex-row">
                    <div class="basis-1/3 pr-3">
                      <div class="field-group mb-4">
                        <x-input-label for="exp-month" value="Expiry Month"/>
                        <select name="expMonth"
                                class="select-required w-full py-1 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                          <option value="">Exp. Month</option>
                          <option value="01">01</option>
                          <option value="02">02</option>
                          <option value="03">03</option>
                          <option value="04">04</option>
                          <option value="05">05</option>
                          <option value="06">06</option>
                          <option value="07">07</option>
                          <option value="08">08</option>
                          <option value="09">09</option>
                          <option value="10">10</option>
                          <option value="11">11</option>
                          <option value="12">12</option>
                        </select>
                      </div>
                    </div>

                    <div class="basis-1/3 pr-3">
                      <div class="field-group mb-4">
                        <x-input-label for="exp-year" value="Expiry Year"/>

                        <select name="expYear"
                                class="select-required w-full py-1 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                          <option value="">Exp. Year</option>
                          <option value="2023">2023</option>
                          <option value="2024">2024</option>
                          <option value="2025">2025</option>
                          <option value="2026">2026</option>
                          <option value="2027">2028</option>
                          <option value="2028">2028</option>
                          <option value="2029">2029</option>
                          <option value="2030">2030</option>
                          <option value="2031">2031</option>
                          <option value="2032">2032</option>
                        </select>
                      </div>
                    </div>

                    <div class="basis-1/3">
                      <div class="field-group mb-4">
                        <x-input-label for="cvc" value="CVV"/>
                        <x-text-input id="cvc"
                                      class="field-required block mt-1 w-full"
                                      data-validation="cvc"
                                      type="number" name="cvc" required/>
                      </div>
                    </div>
                  </div>

                </div>
              @endif
            </div>

            <div class="form-group pb-4">
              <h2 class="mb-2">Shipping Address</h2>

              <div class="field-group mb-4">
                <x-input-label for="address" value="Address"/>
                <x-text-input id="address" class="field-required block mt-1 w-full"
                              type="text"
                              data-validation="required"
                              name="address" value="{{$hasPaymentMethod['address']}}" required/>
              </div>

              <div class="field-group mb-4">
                <x-input-label for="appartment" value="Appartment, suit, etc."/>
                <x-text-input id="appartment"
                              class="block mt-1 w-full"
                              type="text" name="appartment" required/>
              </div>

              <div class="">
                <div class="flex flex-row">
                  <div class="basis-1/3 pr-3">
                    <div class="field-group mb-4">
                      <x-input-label for="city" value="City"/>
                      <x-text-input id="city"
                                    class="field-required block mt-1 w-full"
                                    data-validation="required"
                                    type="text" name="city" required/>
                    </div>
                  </div>

                  <div class="basis-1/3 pr-3">
                    <div class="field-group mb-4">
                      <x-input-label for="State" value="State"/>
                      <x-text-input id="state" class="field-required block mt-1 w-full"
                                    type="text"
                                    data-validation="required"
                                    name="state" required/>
                    </div>
                  </div>

                  <div class="basis-1/3">
                    <div class="field-group mb-4">
                      <x-input-label for="post-code" value="Post Code"/>
                      <x-text-input id="cvv" class="field-required block mt-1 w-full"
                                    type="text"
                                    data-validation="required"
                                    name="postCode" required/>
                    </div>
                  </div>
                </div>

              </div>

            </div>

{{--            <div class="form-group pb-6">--}}
{{--              <h2 class="mb-3">Billing Information</h2>--}}

{{--              <div class="block m-0">--}}
{{--                <label for="is-same-shipping" class="inline-flex items-center">--}}
{{--                  <input id="is-same-shipping" type="checkbox" checked--}}
{{--                         class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"--}}
{{--                         name="isSameShipping">--}}
{{--                  <span class="ml-2 text-sm text-lg font-medium">{{ __('Same as shipping information') }}</span>--}}
{{--                </label>--}}
{{--              </div>--}}

{{--            </div>--}}

          </div>

          <div class="cart-summary px-12 py-8 bg-slate-200">
            <h2 class="mb-4">Order Summary</h2>

            <div class="cart-items">

              @php
                $count = 0;
                $items = 0;
                $total = array_sum(request()->post()['PickedProductPriceTotal']);
              @endphp

              @foreach(request()->post()['PickedProductName'] as $item)
                @if($item)
                  <div class="cart-item-single">
                    <div class="row">
                      <div class="col-sm-8">
                        <div class="row">
                          <div class="col-4 pr-0">
                            <div
                              class="image-holder bg-white rounded-md shadow-sm border border-gray-200 text-center p-3">
                              <img src="uploads/{{request()->post()['PickedProductImageUrl'][$count]}}" alt="apple"
                                   class="w-14 h-14 object-contain">
                            </div>
                          </div>
                          <div class="col-8">
                            <p
                              class="mb-2 font-medium text-semibold text-gray-800">{{request()->post()['PickedProductName'][$count]}}
                              - Qty:
                              {{request()->post()['PickedProductQuantity'][$count]}}</p>
                            <p class="mb-0 text-gray-500">Lorem ipsum dolor sit amet, consectetur.</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <p class="m-0 font-medium text-right">&euro; <span
                            class="amount">{{request()->post()['PickedProductUnitPrice'][$count]}}</span></p>
                      </div>

                    </div>

                    <input type="hidden" name="productName[]"
                           value="{{request()->post()['PickedProductName'][$count]}}">
                    <input type="hidden"
                           name="stripe_id[]"
                           value="{{request()->post()['pick-item'][$count]}}"
                    >
                    <input type="hidden" name="productQuantity[]"
                           value="{{request()->post()['PickedProductQuantity'][$count]}}">
                    <input type="hidden" name="productUnitPrice[]"
                           value="{{request()->post()['PickedProductUnitPrice'][$count]}}">
                    <hr>
                  </div>
                  @php
                    $items++;
                  @endphp
                @endif

                @php
                  $count++;
                @endphp
              @endforeach
            </div>


            <div class="flex">
              <h2 class="text-sm">ITEMS {{$items}}</h2>
            </div>

            <div
              class="flex items-center justify-between w-full py-4 font-semibold border-b border-gray-300 lg:py-5 lg:px-3 text-heading last:border-b-0 last:text-base last:pb-0">
              Subtotal<span class="ml-2">&euro;{{$total}}</span></div>
            {{--                        <div--}}
            {{--                            class="flex items-center justify-between w-full py-4 font-semibold border-b border-gray-300 lg:py-5 lg:px-3 text-heading last:border-b-0 last:text-base last:pb-0">--}}
            {{--                            Shipping Tax<span class="ml-2">&euro;140</span>--}}
            {{--                        </div>--}}
            <div
              class="flex items-center justify-between w-full py-4 text-lg font-semibold lg:py-5 lg:px-3 text-heading last:border-b-0 last:text-base last:pb-0">
              Total<span class="ml-2">&euro;{{$total}}</span>
            </div>

            <input type="hidden" name="TotalPrice" value="{{$total}}">


            <div class="mt-4">
              <x-primary-button type="submit" class="bg-black btn-checkout-form-js">
{{--                Subscribe (total- &euro;{{ $total }})--}}
                Order Now
              </x-primary-button>
              <div class="mt-1">
{{--                <p class="text-success font-medium">Automatic monthly payment</p>--}}
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>

</x-app-layout>
