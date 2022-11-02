<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'OldFarm') }}</title>

        <link rel="icon" href="{{ url('favicon.png') }}">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        
        <link rel="stylesheet" href="public/build/assets/app.75fc4406.css">
        
        <script src="public/build/assets/app.7a8de59d.js"></script>
        

    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>


    <script>
        //=== custom script
        setTimeout(() => {
            document.querySelector('.dashboard-loader-wrapper').classList.add('d-none');
            document.querySelector('.dashboard-items').classList.remove('d-none');
        }, 1000);

        document.querySelectorAll('.choose-item-js').forEach(element=>{
            element.addEventListener('change', function(){
                let self = this,
                    selectedItemCategory = this.options[this.selectedIndex],
                    itemName = selectedItemCategory.getAttribute('data-name'),
                    imageName = selectedItemCategory.getAttribute('data-image-name'),
                    unitPrice = selectedItemCategory.getAttribute('data-unitprice');

                if(!itemName){
                    self.closest('.dashboard-box').querySelector('.image-holder img').setAttribute('src', '/images/placeholder_image_cropped.jpg');
                    self.closest('.dashboard-box').querySelector('.not-item-selected').classList.remove('d-none');
                    self.closest('.dashboard-box').querySelector('.dashboard-box-content-content').classList.add('d-none');
                    return;
                }

                self.closest('.dashboard-box').querySelector('.image-holder img').setAttribute('src', '/images/'+imageName);
                self.closest('.dashboard-box').querySelector('.name-item-js').innerText = itemName;
                self.closest('.dashboard-box').querySelector('.unit-price-js').innerText = unitPrice;
                self.closest('.dashboard-box').querySelector('.not-item-selected').classList.add('d-none');
                self.closest('.dashboard-box').querySelector('.dashboard-box-content-content').classList.remove('d-none');

            });
        });
    </script>
    </body>
</html>
