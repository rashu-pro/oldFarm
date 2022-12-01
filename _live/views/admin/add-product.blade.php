<x-app-layout>
  <div class="py-14">
    <div class="container mx-auto border-round bg-white pt-5 pb-5 px-4  sm:px-8">
      <h2 class='text-center text-2xl'>Add Product</h2>
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

        <form action="{{url('/save-product')}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="sm:columns-2 gap-6">
            <div class="mb-4">
              <x-input-label for="product-name" value="Product name"/>
              <x-text-input id="product-name" class="block mt-1 w-full"
                            type="text" name="name" required/>
            </div>

            <div class="mb-4">
              <x-input-label for="product-unitprice" value="Unit Price"/>
              <x-text-input id="product-unitprice" class="block mt-1 w-full"
                            type="text" name="unit_price" required/>
            </div>
          </div>

          <div class="sm:columns-2 gap-6">
            <div class="mb-4">
              <x-input-label for="product-category" value="Category"/>
              <select id="product-category"
                      name="productCategory"
                      class="w-full form-select rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
              required>
                <option>Select a Category</option>
                @foreach($categories as $category)
                  <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
              </select>
            </div>

            <div class="mb-4">
              <x-input-label for="product-image" value="Image"/>
              <x-text-input id="product-image" class="block mt-1 w-full form-file @error('image_url') is-invalid @enderror"
                            type="file" name="image_url"/>
              @error('image_url')
              <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
          </div>

          <div class="mb-4">
            <x-input-label for="product-excerpt" value="Excerpt"/>
            <x-textarea id="product-excerpt"
                        class="block mt-1 w-full"
                        name="excerpt" required/>
          </div>

          <div class="mb-4">
            <x-input-label for="product-description" value="Description"/>
            <x-textarea id="product-description"
                        class="block mt-1 w-full"
                        rows="4"
                        name="description"/>
          </div>

          <div class="sm:w-48">
            <x-primary-button class="add-product-js">Save Product</x-primary-button>
          </div>

        </form>
      </div>
    </div>
  </div>
</x-app-layout>
