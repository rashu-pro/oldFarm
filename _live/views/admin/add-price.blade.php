<x-app-layout>
  <div class="py-14">
    <div class="sm:container mx-auto border-round bg-white pt-5 pb-5 px-4  sm:px-8">
      <h2 class='text-center text-2xl'>Add Product</h2>
      <hr />

      <div class="form-wrapper">
        <form action="{{url('/save-product')}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="sm:columns-2 gap-6">
            <div class="mb-4">
              <x-input-label for="product-name" value="Product name"/>
              <x-text-input id="product-name" class="block mt-1 w-full"
                            type="text" name="name"/>
            </div>

            <div class="mb-4">
              <x-input-label for="product-unitprice" value="Unit Price"/>
              <x-text-input id="product-unitprice" class="block mt-1 w-full"
                            type="text" name="unit_price"/>
            </div>
          </div>

          <div class="sm:columns-2 gap-6">
            <div class="mb-4">
              <x-input-label for="product-category" value="Category"/>
              <select id="product-category"
                      name="productCategory"
                      class="w-full form-select rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                <option>Select a Category</option>
                @foreach($categories as $category)
                  <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
              </select>
            </div>

            <div class="mb-4">
              <x-input-label for="product-image" value="Image"/>
              <x-text-input id="product-image" class="block mt-1 w-full form-file"
                            type="file" name="image_url" required/>
            </div>
          </div>

          <div class="sm:columns-3 gap-6">
            <div class="mb-4">
              <x-input-label for="recurring" value="Recurring Type"/>
              <select id="recurring"
                      name="recurring"
                      class="w-full form-select rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                <option>Select an Option</option>
                <option value="weekly">Weekly</option>
                <option value="monthly">Monthly</option>
                <option value="once">Not Recurring</option>
              </select>
            </div>

            <div class="mb-4">
              <x-input-label for="recurring-interval" value="Interval"/>
              <select id="recurring-interval"
                      name="recurringInterval"
                      class="w-full form-select rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                <option>Select an Option</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
              </select>
            </div>

            <div class="mb-4">
              <x-input-label for="recurring-duration" value="Recurring Duration"/>
              <select id="recurring-duration"
                      name="recurringDuration"
                      class="w-full form-select rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                <option>Select an Option</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
              </select>
            </div>
          </div>

          <div class="mb-4">
            <x-input-label for="product-excerpt" value="Excerpt"/>
            <x-textarea id="product-excerpt"
                        class="block mt-1 w-full"
                        name="excerpt"/>
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
