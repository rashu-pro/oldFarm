<x-app-layout>


    <div class="">
        <!-- main wrapper -->
        <div class="main-wrapper">
            <div class="dashboard-wrapper">
                <div class="container">
                    <div class="row">

                        <!-- sidebar -->
                        <div class="col-md-3">
                            <aside class="dashboard-sidebar h-100 bg-slate-800 text-white pt-5 pb-4 px-3">
                                <h3 class="pb-3 border-b border-gray-600 mb-3">My Account</h3>
                                <ul class="flex flex-col">
                                    <li class="mb-1 bg-slate-900 rounded-md active"><a href="#"
                                                                                       class="text-white block py-2 px-3">Dashboard</a>
                                    </li>
                                    <li class="bg-slate-800 hover:bg-slate-900 hover:rounded-md"><a href="#"
                                                                                                    class="text-white block py-2 px-2 rounded-md hover:px-3">Vegetables</a>
                                    </li>
                                    <li class="bg-slate-800 hover:bg-slate-900 hover:rounded-md"><a href="#"
                                                                                                    class="text-white block py-2 px-2 rounded-md hover:px-3">My
                                            Profile</a></li>
                                    <li class="bg-slate-800 hover:bg-slate-900 hover:rounded-md"><a href="#"
                                                                                                    class="text-white block py-2 px-2 rounded-md hover:px-3">Seasonal</a>
                                    </li>
                                    <li class="bg-slate-800 hover:bg-slate-900 hover:rounded-md"><a href="#"
                                                                                                    class="text-white block py-2 px-2 rounded-md hover:px-3">Logout</a>
                                    </li>
                                </ul>
                            </aside>
                        </div>

                        <!-- dashboard content -->
                        <div class="col-md-9">
                            <div class="dashboard-content">

                                <div class="dashboard-item-box pb-2">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <a href="{{ route('dashboard') }}">
                                                <div class="dashboard-item border-2 border-gray-400 rounded-md">
                                                    <img src="images/fruit.png">
                                                    <h2 class="text-gray-600">Fruits</h2>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="dashboard-item border-2 border-solid border-blue-800 rounded-md">
                                                <img src="images/vegetable.png">
                                                <h2 class="text-blue-800">Vegetables</h2>
                                            </div>
                                            <div class="text-center pt-2">
                                                <img src="images/down-arrow_64.png" alt="" class="inline-block w-12">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <a href="{{ route('dashboard-animals') }}">
                                                <div class="dashboard-item border-2 border-gray-400 rounded-md">
                                                    <img src="images/cow.png">
                                                    <h2 class="text-gray-600">Animal</h2>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="dashboard-content-box bg-white rounded-md border-2 border-gray-300 border-solid shadow-sm">
                                    <div class="bg-white border-b border-gray-200 py-3 px-4 flex justify-between">
                                        <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">
                                            Choose what you wnat to grow</h2>
                                        <button type="button"
                                                class="bg-black text-white px-3 py-2 rounded-md hover:bg-gray-800 hover:shadow-md d-none">
                                            X
                                        </button>
                                    </div>

                                    <div class="py-4 pb-5 px-3">

                                        <div class="dashboard-loader-wrapper min-h-full flex align-middle justify-center">
                                            <div class="spinner">
                                                <svg aria-hidden="true"
                                                     class="mr-2 w-8 h-8 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600"
                                                     viewBox="0 0 100 101" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                                                          fill="currentColor"/>
                                                    <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                                                          fill="currentFill"/>
                                                </svg>
                                            </div>
                                        </div>

                                        <div class="dashboard-items d-none">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="dashboard-box rounded-md bg-white border border-gray-200">
                                                        <div class="dashboard-box-head pt-3 pb-2 px-2">
                                                            <select name="pick-item"
                                                                    class="choose-item-js w-full py-1 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                                                <option>Choose item</option>
                                                                <option value="carrots" data-name="Carrots - Autumn" data-image-name="carrots.png" data-unitprice="120">Carrots</option>
                                                                <option value="capsicum" data-name="Capsicum - winter" data-image-name="capsicum.png" data-unitprice="180">capsicum</option>
                                                                <option value="broccoli" data-name="Broccoli - winter" data-image-name="broccoli.png" data-unitprice="200">Broccoli</option>
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
                                                                <p class="font-medium text-gray-900 m-0"><span class="icon-currency">&euro;</span> <span class="unit-price unit-price-js"></span> </p>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-md-4">
                                                    <div class="dashboard-box rounded-md bg-white border border-gray-200">
                                                        <div class="dashboard-box-head pt-3 pb-2 px-2">
                                                            <select name="pick-item"
                                                                    class="choose-item-js w-full py-1 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                                                <option>Choose item</option>
                                                                <option value="carrots" data-name="Carrots - Autumn" data-image-name="carrots.png" data-unitprice="120">Carrots</option>
                                                                <option value="capsicum" data-name="Capsicum - winter" data-image-name="capsicum.png" data-unitprice="180">capsicum</option>
                                                                <option value="broccoli" data-name="Broccoli - winter" data-image-name="broccoli.png" data-unitprice="200">Broccoli</option>
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
                                                                <p class="font-medium text-gray-900 m-0"><span class="currency">&euro;</span> <span class="unit-price-js"></span> </p>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-md-4">
                                                    <div class="dashboard-box rounded-md bg-white border border-gray-200">
                                                        <div class="dashboard-box-head pt-3 pb-2 px-2">
                                                            <select name="pick-item"
                                                                    class="choose-item-js w-full py-1 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                                                <option>Choose item</option>
                                                                <option value="carrots" data-name="Carrots - Autumn" data-image-name="carrots.png" data-unitprice="120">Carrots</option>
                                                                <option value="capsicum" data-name="Capsicum - winter" data-image-name="capsicum.png" data-unitprice="180">capsicum</option>
                                                                <option value="broccoli" data-name="Broccoli - winter" data-image-name="broccoli.png" data-unitprice="200">Broccoli</option>
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
                                                                <p class="font-medium text-gray-900 m-0"><span class="currency">&euro;</span> <span class="unit-price-js"></span> </p>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <!-- footer -->
    <footer class="footer v2">

        <div class="footer-top">
            <div class="container">
                <div class="footer-top-top border-b-2 border-gray-300">
                    <div class="footer-logo">
                        <img src="images/logo_old_farm.min.png" class="img-fluid" alt="oldfarm">
                    </div>

                    <div class="social-media">
                        <ul>
                            <li><a href=""><i class="fa fa-facebook"></i></a></li>
                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                            <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                            <li><a href=""><i class="fa fa-instagram"></i></a></li>
                            <li><a href=""><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="footer-top-bottom">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="footer-column">
                                <h3 class="footer-column-title">Address</h3>
                                <div class="footer-column-details">
                                    <address>
                                        <p>Via del Viminale 92, Monteponi,
                                            Brescia, Italy</p>
                                        <p><a href="tel:+39 06 183 6186">+39 06 183 6186</a></p>
                                        <p><a href="mailto:info@oldfarm.it">info@oldfarm.it</a></p>
                                    </address>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="footer-column">
                                <h3 class="footer-column-title">Quick Links</h3>
                                <div class="footer-column-details">
                                    <ul class="menu-list">
                                        <li><a href="#">Terms & Conditions</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Blogs</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="footer-column">
                                <h3 class="footer-column-title">Subscribe to Newsletter</h3>
                                <div class="footer-column-details">
                                    <div class="input-group input-group-subscribe">
                                        <input type="email" class="form-control" placeholder="Your email...">
                                        <div class="input-group-append">
                                            <button type="button" class="btn btn-success" id="basic-addon2">Subscribe
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="footer-credit">
            <div class="container">
                <div class="d-sm-flex justify-content-center">
                    <p class="m-0 text-center">&copy; 2022, All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>
</x-app-layout>
