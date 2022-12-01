<x-app-layout>
  <div class="">
    <!-- main wrapper -->
    <div class="main-wrapper">
      <div class="dashboard-wrapper">
        <div class="container">
          <div class="row">

            <!-- sidebar -->
            <div class="col-md-3">
              @include('layouts.sidebar')
            </div>

            <!-- dashboard content -->
            <div class="col-md-9">
              <div class="dashboard-content">

                @if (session('status'))
                  @if(session('status')=='success')
                    <div class="alert-div" role="alert">
                      <div class="relative bg-blue-500 text-white font-bold rounded-t px-4 py-2">
                        Success:

                        <span class="alert-close absolute top-0 bottom-0 right-0 pt-2 pr-2">
                                                    <svg class="fill-current h-6 w-6 text-white"
                                                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path
                                                        d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                                                </span>
                      </div>
                      <div class="border border-t-0 border-blue-400 rounded-b bg-blue-100 px-4 py-3 text-blue-700">
                        <p class="m-0">Products has been added to your farm successfully!</p>
                      </div>
                    </div>
                  @else
                    <div class="alert-div" role="alert">
                      <div class="relative bg-red-500 text-white font-bold rounded-t px-4 py-2">
                        Alert:

                        <span class="alert-close absolute top-0 bottom-0 right-0 pt-2 pr-2">
                                                    <svg class="fill-current h-6 w-6 text-white"
                                                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path
                                                        d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                                                </span>
                      </div>
                      <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                        <p class="m-0">Something went wrong! Please try again.</p>
                      </div>
                    </div>
                  @endif
                @endif

                <div class="dashboard-content-box bg-white rounded-md border-2 border-gray-300 border-solid shadow-sm">
                  <div class="farm-banner">
                    <div class="farm-banner-layer">
                      <h2
                        class="farm-banner-title text-xl font-bold leading-7 text-white sm:text-3xl sm:tracking-tight">
                        Choose the animals you want to grow in your farm
                      </h2>
                    </div>


                    <img class="farm-banner-image" src="{{url('images/image-animal-banner.png')}}" alt="vegetables">
                  </div>

                  <div class="py-4 pb-5 px-3">

                    <form action="{{url('checkout')}}" method="post">
                      @csrf
                      <div class="dashboard-loader-wrapper min-h-full flex align-middle justify-center">
                        <div class="spinner">
                          <svg aria-hidden="true"
                               class="mr-2 w-8 h-8 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600"
                               viewBox="0 0 100 101" fill="none"
                               xmlns="http://www.w3.org/2000/svg">
                            <path
                              d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                              fill="currentColor"/>
                            <path
                              d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                              fill="currentFill"/>
                          </svg>
                        </div>
                      </div>

                      <div class="dashboard-items d-none">
                        <div class="row">
                          <div class="col-md-4">
                            <div class="dashboard-box item-box rounded-md bg-white border border-gray-200">
                              <div class="dashboard-box-head pt-3 pb-2 px-2">
                                <select name="pick-item"
                                        class="choose-item-js w-full py-1 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                  <option>Choose item</option>
                                  <option value="chicken" data-name="Chicken - Autumn" data-image-name="chicken.png"
                                          data-unitprice="150">Chicken
                                  </option>
                                  <option value="pork" data-name="Pork - winter" data-image-name="pork.png"
                                          data-unitprice="650">Pork
                                  </option>
                                  <option value="lamb" data-name="Lamb - winter" data-image-name="lamb.png"
                                          data-unitprice="800">Lamb
                                  </option>
                                </select>
                              </div>

                              <div class="image-holder px-2">
                                <img src="{{ url('images/placeholder_image_cropped.jpg') }}"
                                     class="rounded-md">
                              </div>

                              <div class="dashboard-box-content pt-2 pb-3 px-3">
                                <div class="not-item-selected">
                                  <div class="">
                                    <div class="flex space-x-4">
                                      <div class="flex-1 space-y-6 py-1">
                                        <div class="h-2 bg-slate-200 rounded"></div>
                                        <div class="space-y-3">
                                          <div class="grid grid-cols-3 gap-4">
                                            <div class="h-2 bg-slate-200 rounded col-span-2"></div>
                                            <div class="h-2 bg-slate-200 rounded col-span-1"></div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                <div class="dashboard-box-content-content d-none">
                                  <h4 class="name-item-js text-blue-700 text-base m-0"></h4>
                                  <p class="font-medium text-gray-900 m-0">
                                    <span class="icon-currency">&euro;</span>
                                    <span class="unit-price unit-price-js"></span>/<span class="unit"
                                                                                         style="font-size: 13px">kg</span>
                                    X <span class="item-quantity">1</span>
                                    = <span class="icon-currency">&euro;</span> <span
                                      class="item-total-price-js"></span>
                                  </p>
                                  <!-- quantity selector -->
                                  <div class="quantity-wrapper">
                                    <div class="custom-number-input">
                                      <div class="flex flex-row h-10 w-full rounded-lg relative bg-transparent mt-2">
                                        <button type="button" data-action="decrement"
                                                class=" bg-slate-300 text-gray-600 hover:text-gray-700 hover:bg-slate-400 h-full w-20 rounded-l cursor-pointer outline-none">
                                          <span class="m-auto text-2xl font-thin">−</span>
                                        </button>
                                        <input type="number"
                                               class="product-quantity outline-none focus:outline-none text-center w-full font-semibold border-slate-300 text-md hover:text-black focus:text-black  md:text-basecursor-default flex items-center text-gray-700  outline-none"
                                               name="Quantity" value="1">
                                        <button type="button" data-action="increment"
                                                class="bg-slate-300 text-gray-600 hover:text-gray-700 hover:bg-slate-400 h-full w-20 rounded-r cursor-pointer">
                                          <span class="m-auto text-2xl font-thin">+</span>
                                        </button>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                              </div>

                              <div class="item-value-box">
                                <input type="hidden" name="PickedProductName[]" class="item-name" value="">
                                <input type="hidden" name="PickedProductQuantity[]" class="itempicked-quantity"
                                       value="">
                                <input type="hidden" name="PickedProductUnitPrice[]" class="item-unitprice" value="">
                                <input type="hidden" name="PickedProductPriceTotal[]" class="item-totalprice" value="">
                                <input type="hidden" name="PickedProductImageUrl[]" class="item-image" value="">
                              </div>
                            </div>

                          </div>

                          <div class="col-md-4">
                            <div class="dashboard-box item-box rounded-md bg-white border border-gray-200">
                              <div class="dashboard-box-head pt-3 pb-2 px-2">
                                <select name="pick-item"
                                        class="choose-item-js w-full py-1 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                  <option>Choose item</option>
                                  <option value="chicken" data-name="Chicken - Autumn" data-image-name="chicken.png"
                                          data-unitprice="150">Chicken
                                  </option>
                                  <option value="pork" data-name="Pork - winter" data-image-name="pork.png"
                                          data-unitprice="650">Pork
                                  </option>
                                  <option value="lamb" data-name="Lamb - winter" data-image-name="lamb.png"
                                          data-unitprice="800">Lamb
                                  </option>
                                </select>
                              </div>

                              <div class="image-holder px-2">
                                <img src="{{ url('images/placeholder_image_cropped.jpg') }}"
                                     class="rounded-md">
                              </div>

                              <div class="dashboard-box-content pt-2 pb-3 px-3">
                                <div class="not-item-selected">
                                  <div class="">
                                    <div class="flex space-x-4">
                                      <div class="flex-1 space-y-6 py-1">
                                        <div class="h-2 bg-slate-200 rounded"></div>
                                        <div class="space-y-3">
                                          <div class="grid grid-cols-3 gap-4">
                                            <div class="h-2 bg-slate-200 rounded col-span-2"></div>
                                            <div class="h-2 bg-slate-200 rounded col-span-1"></div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                <div class="dashboard-box-content-content d-none">
                                  <h4 class="name-item-js text-blue-700 text-base m-0"></h4>
                                  <p class="font-medium text-gray-900 m-0">
                                    <span class="icon-currency">&euro;</span>
                                    <span class="unit-price unit-price-js"></span>/<span class="unit"
                                                                                         style="font-size: 13px">kg</span>
                                    X <span class="item-quantity">1</span>
                                    = <span class="icon-currency">&euro;</span> <span
                                      class="item-total-price-js"></span>
                                  </p>
                                  <!-- quantity selector -->
                                  <div class="quantity-wrapper">
                                    <div class="custom-number-input">
                                      <div class="flex flex-row h-10 w-full rounded-lg relative bg-transparent mt-2">
                                        <button type="button" data-action="decrement"
                                                class=" bg-slate-300 text-gray-600 hover:text-gray-700 hover:bg-slate-400 h-full w-20 rounded-l cursor-pointer outline-none">
                                          <span class="m-auto text-2xl font-thin">−</span>
                                        </button>
                                        <input type="number"
                                               class="product-quantity outline-none focus:outline-none text-center w-full font-semibold border-slate-300 text-md hover:text-black focus:text-black  md:text-basecursor-default flex items-center text-gray-700  outline-none"
                                               name="Quantity" value="1">
                                        <button type="button" data-action="increment"
                                                class="bg-slate-300 text-gray-600 hover:text-gray-700 hover:bg-slate-400 h-full w-20 rounded-r cursor-pointer">
                                          <span class="m-auto text-2xl font-thin">+</span>
                                        </button>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                              </div>

                              <div class="item-value-box">
                                <input type="hidden" name="PickedProductName[]" class="item-name" value="">
                                <input type="hidden" name="PickedProductQuantity[]" class="itempicked-quantity"
                                       value="">
                                <input type="hidden" name="PickedProductUnitPrice[]" class="item-unitprice" value="">
                                <input type="hidden" name="PickedProductPriceTotal[]" class="item-totalprice" value="">
                                <input type="hidden" name="PickedProductImageUrl[]" class="item-image" value="">
                              </div>
                            </div>

                          </div>

                          <div class="col-md-4">
                            <div class="dashboard-box item-box rounded-md bg-white border border-gray-200">
                              <div class="dashboard-box-head pt-3 pb-2 px-2">
                                <select name="pick-item"
                                        class="choose-item-js w-full py-1 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                  <option>Choose item</option>
                                  <option value="chicken" data-name="Chicken - Autumn" data-image-name="chicken.png"
                                          data-unitprice="150">Chicken
                                  </option>
                                  <option value="pork" data-name="Pork - winter" data-image-name="pork.png"
                                          data-unitprice="650">Pork
                                  </option>
                                  <option value="lamb" data-name="Lamb - winter" data-image-name="lamb.png"
                                          data-unitprice="800">Lamb
                                  </option>
                                </select>
                              </div>

                              <div class="image-holder px-2">
                                <img src="{{ url('images/placeholder_image_cropped.jpg') }}"
                                     class="rounded-md">
                              </div>

                              <div class="dashboard-box-content pt-2 pb-3 px-3">
                                <div class="not-item-selected">
                                  <div class="">
                                    <div class="flex space-x-4">
                                      <div class="flex-1 space-y-6 py-1">
                                        <div class="h-2 bg-slate-200 rounded"></div>
                                        <div class="space-y-3">
                                          <div class="grid grid-cols-3 gap-4">
                                            <div class="h-2 bg-slate-200 rounded col-span-2"></div>
                                            <div class="h-2 bg-slate-200 rounded col-span-1"></div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                <div class="dashboard-box-content-content d-none">
                                  <h4 class="name-item-js text-blue-700 text-base m-0"></h4>
                                  <p class="font-medium text-gray-900 m-0">
                                    <span class="icon-currency">&euro;</span>
                                    <span class="unit-price unit-price-js"></span>/<span class="unit"
                                                                                         style="font-size: 13px">kg</span>
                                    X <span class="item-quantity">1</span>
                                    = <span class="icon-currency">&euro;</span> <span
                                      class="item-total-price-js"></span>
                                  </p>
                                  <!-- quantity selector -->
                                  <div class="quantity-wrapper">
                                    <div class="custom-number-input">
                                      <div class="flex flex-row h-10 w-full rounded-lg relative bg-transparent mt-2">
                                        <button type="button" data-action="decrement"
                                                class=" bg-slate-300 text-gray-600 hover:text-gray-700 hover:bg-slate-400 h-full w-20 rounded-l cursor-pointer outline-none">
                                          <span class="m-auto text-2xl font-thin">−</span>
                                        </button>
                                        <input type="number"
                                               class="product-quantity outline-none focus:outline-none text-center w-full font-semibold border-slate-300 text-md hover:text-black focus:text-black  md:text-basecursor-default flex items-center text-gray-700  outline-none"
                                               name="Quantity" value="1">
                                        <button type="button" data-action="increment"
                                                class="bg-slate-300 text-gray-600 hover:text-gray-700 hover:bg-slate-400 h-full w-20 rounded-r cursor-pointer">
                                          <span class="m-auto text-2xl font-thin">+</span>
                                        </button>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                              </div>

                              <div class="item-value-box">
                                <input type="hidden" name="PickedProductName[]" class="item-name" value="">
                                <input type="hidden" name="PickedProductQuantity[]" class="itempicked-quantity"
                                       value="">
                                <input type="hidden" name="PickedProductUnitPrice[]" class="item-unitprice" value="">
                                <input type="hidden" name="PickedProductPriceTotal[]" class="item-totalprice" value="">
                                <input type="hidden" name="PickedProductImageUrl[]" class="item-image" value="">
                              </div>
                            </div>

                          </div>

                        </div>

                        <div class="mt-4 text-center checkout-btn-holder d-none">
                          <x-primary-button class="bg-black d-inline-block btn-long" style="width:auto;">
                            {{ __('Checkout') }}
                          </x-primary-button>
                        </div>
                      </div>
                    </form>

                  </div>
                </div>

              </div>
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>
</x-app-layout>
