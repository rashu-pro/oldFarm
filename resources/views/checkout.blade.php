<x-guest-layout>

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
            <div class="grid grid-cols-2 gap-4 my-14 bg-white rounded-lg border border-gray-300">

                <div class="form-div px-12 py-8">
                    <div class="form-group pb-6">
                        <h2 class="mb-2">Contact Information</h2>
                        <x-input-label for="contact-email" class="" value="Email" />
                        <x-text-input id="contact-email" class="block mt-1 w-full"
                                      type="email" name="email" required />
                    </div>

                    <div class="form-group pb-4">
                        <h2 class="mb-2">Payment Details</h2>
                        <div class="mb-4">
                            <x-input-label for="name-on-card" value="Name on Card" />
                            <x-text-input id="name-on-card" class="block mt-1 w-full"
                                          type="text" name="nameOnCard" required />
                        </div>

                        <div class="mb-4">
                            <x-input-label for="card-number" value="Card Number" />
                            <x-text-input id="card-number" class="block mt-1 w-full"
                                          type="text" name="cardNumber" required />
                        </div>

                        <div class="">
                            <div class="flex flex-row">
                                <div class="basis-1/3 pr-3">
                                    <div class="mb-4">
                                        <x-input-label for="exp-month" value="Expiry Month" />
                                        <x-text-input id="exp-month" class="block mt-1 w-full"
                                                      type="text" name="expiryMonth" required />
                                    </div>
                                </div>

                                <div class="basis-1/3 pr-3">
                                    <div class="mb-4">
                                        <x-input-label for="exp-year" value="Expiry Year" />
                                        <x-text-input id="exp-year" class="block mt-1 w-full"
                                                      type="text" name="expiryYear" required />
                                    </div>
                                </div>

                                <div class="basis-1/3">
                                    <div class="mb-4">
                                        <x-input-label for="cvv" value="CVV" />
                                        <x-text-input id="cvv" class="block mt-1 w-full"
                                                      type="text" name="cvv" required />
                                    </div>
                                </div>
                            </div>
                            
                        </div>

                    </div>

                    <div class="form-group pb-4">
                        <h2 class="mb-2">Shipping Address</h2>
                        <div class="mb-4">
                            <x-input-label for="company" value="Company" />
                            <x-text-input id="company" class="block mt-1 w-full"
                                          type="text" name="company" required />
                        </div>

                        <div class="mb-4">
                            <x-input-label for="address" value="Address" />
                            <x-text-input id="address" class="block mt-1 w-full"
                                          type="text" name="address" required />
                        </div>

                        <div class="mb-4">
                            <x-input-label for="appartment" value="Appartment, suit, etc." />
                            <x-text-input id="appartment" class="block mt-1 w-full"
                                          type="text" name="appartment" required />
                        </div>

                        <div class="">
                            <div class="flex flex-row">
                                <div class="basis-1/3 pr-3">
                                    <div class="mb-4">
                                        <x-input-label for="city" value="City" />
                                        <x-text-input id="city" class="block mt-1 w-full"
                                                      type="text" name="city" required />
                                    </div>
                                </div>

                                <div class="basis-1/3 pr-3">
                                    <div class="mb-4">
                                        <x-input-label for="State" value="State" />
                                        <x-text-input id="state" class="block mt-1 w-full"
                                                      type="text" name="state" required />
                                    </div>
                                </div>

                                <div class="basis-1/3">
                                    <div class="mb-4">
                                        <x-input-label for="post-code" value="Post Code" />
                                        <x-text-input id="cvv" class="block mt-1 w-full"
                                                      type="text" name="postCode" required />
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="form-group pb-6">
                        <h2 class="mb-3">Billing Information</h2>

                        <div class="block m-0">
                            <label for="is-same-shipping" class="inline-flex items-center">
                                <input id="is-same-shipping" type="checkbox" checked class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="isSameShipping">
                                <span class="ml-2 text-sm text-lg font-medium">{{ __('Same as shipping information') }}</span>
                            </label>
                        </div>

                    </div>

                </div>
                
                <div class="cart-summary px-12 py-8 bg-slate-200">
                    <h2 class="mb-4">Order Summary</h2>

                    <div class="cart-items">
                        <div class="cart-item-single">
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="image-holder bg-white rounded-md shadow-sm border border-gray-200 text-center p-3">
                                                <img src="{{'images/apple.png'}}" alt="apple" class="w-14 h-14 object-contain">
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <p>Apple - Summer</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <p>&euro; <span class="amount">300.00</span> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>