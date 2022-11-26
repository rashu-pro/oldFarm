<x-app-layout>
  <div class="py-8">
    <div class="max-w-xl mx-auto border-round-sm bg-white p-5">
      <h2 class='text-center text-2xl'>Add Category</h2>
      <hr />

      <div class="form-wrapper">
        <div class="alert-wrapper">
          @if (session('status'))
            @if(session('status')=='success')
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
                  <p class="m-0">Category has been added successfully!</p>
                </div>
              </div>
            @endif
          @endif

            @if ($errors->any())
              <div class="alert alert-danger">
                <ul class="m-0">
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif
        </div>


        <form id="add-category-form" action="{{url('/insert-category')}}" method="post">
          @csrf
          <div class="mb-4">
            <x-input-label for="category-name" value="Category"/>
            <x-text-input id="category-name" class="block mt-1 w-full"
                          type="text" name="name" :value="old('name')" required/>
          </div>

          <div class="mb-4">
            <x-input-label for="category-slug" value="Slug" />
            <x-text-input id="category-slug" class="block mt-1 w-full"
                          type="text" name="slug" :value="old('slug')" required/>
          </div>

          <div class="mb-4">
            <x-input-label for="category-excerpt" value="Excerpt"/>
            <x-textarea id="category-excerpt" class="block mt-1 w-full"
                          type="text" name="excerpt" :value="old('excerpt')" />
          </div>

          <div class="mb-4">
            <x-input-label for="category-description" value="Description"/>
            <x-textarea id="category-description" class="block mt-1 w-full"
                        type="text" name="description" :value="old('description')"/>
          </div>

          <div>
            <x-primary-button class="add-category-js">Add Category</x-primary-button>
          </div>
        </form>
      </div>
    </div>
  </div>
</x-app-layout>
