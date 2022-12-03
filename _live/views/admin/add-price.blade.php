<x-app-layout>
  <div class="py-14">
    <div class="sm:w-2/4 mx-auto border-round bg-white pt-5 pb-5 px-4  sm:px-8">
      <h2 class='text-center text-2xl'>Create Item Subscription Ready</h2>
      <hr />

      <div class="form-wrapper">

        @if(session('error'))
          <div class="alert-div mt-2 mb-3" role="alert">
            <div class="relative bg-red-500 text-white font-bold rounded-t px-4 py-2">
              Error:

              <span class="alert-close absolute top-0 bottom-0 right-0 pt-2 pr-2">
                                                    <svg class="fill-current h-6 w-6 text-white"
                                                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path
                                                        d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                                                </span>
            </div>
            <div class="border border-t-0 border-blue-400 rounded-b bg-blue-100 px-4 py-3 text-blue-700">
              <p class="m-0">{{session('error')}}</p>
            </div>
          </div>
        @endif

        @if(session('success'))
          <div class="alert-div mt-2 mb-3" role="alert">
            <div class="relative bg-blue-500 text-white font-bold rounded-t px-4 py-2">
              Success:

              <span class="alert-close absolute top-0 bottom-0 right-0 pt-2 pr-2">
                                                    <svg class="fill-current h-6 w-6 text-white"
                                                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path
                                                        d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                                                </span>
            </div>
            <div class="border border-t-0 border-blue-400 rounded-b bg-blue-100 px-4 py-3 text-blue-700">
              <p class="m-0">{{session('success')}}</p>
            </div>
          </div>
        @endif

        <form action="{{url('/admin/save-price')}}" method="post" enctype="multipart/form-data">
          @csrf

          <div class="sm:columns-2 gap-6">
            <div class="mb-4">
              <x-input-label for="select-product" value="Select Product"/>
              <select id="select-product"
                      name="stripe_product"
                      class="w-full form-select rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                <option>Select a Product</option>
                @foreach($products as $product)
                  <option value="{{$product->stripe_id}}">{{$product->name}}</option>
                @endforeach
              </select>
            </div>

            <div class="mb-4">
              <x-input-label for="recurring-interval" value="Recurring Interval"/>
              <select id="recurring-interval"
                      name="recurring_interval"
                      class="w-full form-select rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                <option>Recurring Interval</option>
                <option value="week"> Week </option>
                <option value="month"> Month </option>
                <option value="year"> Year </option>
              </select>
            </div>
          </div>

          <div class="sm:columns-2 gap-6">
            <div class="pb-4">
              <x-input-label for="interval-count" value="Interval Count"/>
              <select id="interval-count"
                      name="interval_count"
                      class="w-full form-select rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                <option value="1"> 1 </option>
                <option value="2"> 2 </option>
                <option value="3"> 3 </option>
              </select>
            </div>

            <div class="pb-4">
              <x-input-label for="recurring-iteration" value="Recurring Iteration"/>
              <select id="recurring-iteration"
                      name="recurring_iteration"
                      class="w-full form-select rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                <option>Select Iteration</option>
                <option value="1"> 1 </option>
                <option value="2"> 2 </option>
                <option value="3"> 3 </option>
                <option value="4"> 4 </option>
                <option value="5"> 5 </option>
                <option value="6"> 6 </option>
                <option value="7"> 7 </option>
                <option value="8"> 8 </option>
                <option value="9"> 9 </option>
                <option value="10"> 10 </option>
                <option value="11"> 11 </option>
                <option value="12"> 12 </option>
              </select>
            </div>
          </div>

          <div class="sm:w-48">
            <x-primary-button class="add-product-js">Save Price</x-primary-button>
          </div>

        </form>
      </div>
    </div>
  </div>
</x-app-layout>
