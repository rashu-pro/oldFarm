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
                                <li class="mb-1 bg-slate-900 rounded-md active"><a href="#" class="text-white block py-2 px-3">Dashboard</a> </li>
                                <li class="bg-slate-800 hover:bg-slate-900 hover:rounded-md"><a href="#" class="text-white block py-2 px-2 rounded-md hover:px-3">Vegetables</a> </li>
                                <li class="bg-slate-800 hover:bg-slate-900 hover:rounded-md"><a href="#" class="text-white block py-2 px-2 rounded-md hover:px-3">My Profile</a> </li>
                                <li class="bg-slate-800 hover:bg-slate-900 hover:rounded-md"><a href="#" class="text-white block py-2 px-2 rounded-md hover:px-3">Seasonal</a> </li>
                                <li class="bg-slate-800 hover:bg-slate-900 hover:rounded-md"><a href="#" class="text-white block py-2 px-2 rounded-md hover:px-3">Logout</a> </li>
                            </ul>
                        </aside>
                    </div>

                    <!-- dashboard content -->
                    <div class="col-md-9">
                        <div class="dashboard-content">

                            <div class="dashboard-item-box pb-2">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="dashboard-item border-2 border-solid border-blue-800 rounded-md">
                                            <img src="images/fruit.png">
                                            <h2>Fruits</h2>
                                        </div>

                                        <div class="text-center pt-2">
                                            <img src="images/down-arrow_64.png" alt="" class="inline-block w-12">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="dashboard-item border-2 border-gray-400 rounded-md">
                                            <img src="images/vegetable.png">
                                            <h2>Vegetables</h2>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="dashboard-item border-2 border-gray-400 rounded-md">
                                            <img src="images/cow.png">
                                            <h2>Animal</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="dashboard-content-box bg-white rounded-md border-2 border-gray-300 border-solid shadow-sm">
                                <div class="bg-white border-b border-gray-200 py-3 px-4 flex justify-between">
                                     <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">Choose what you wnat to grow</h2>
                                    <button type="button" class="bg-black text-white px-3 py-2 rounded-md hover:bg-gray-800 hover:shadow-md">X</button>
                                </div>

                                <div class="py-4 px-3">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="dashboard-box rounded-md bg-white border border-gray-200">
                                            <div class="dashboard-box-head pt-3 pb-2 px-2">
                                            <select name="pick-item" class="w-full py-1 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                                <option>Choose item</option>
                                                <option>Carrot</option>
                                                <option>Onion</option>
                                                <option>Carrot</option>
                                                <option>Onion</option>
                                            </select>
                                            </div>
                                            
                                            <div class="image-holder px-2">
                                                <img src="images/placeholder_image_cropped.jpg" class="rounded-md">
                                            </div>

                                            <div class="dashboard-box-content pt-2 pb-3 px-3">
                                                <h4 class="text-blue-700 text-base m-0">Grape - Automan Season</h4>
                                                <p class="font-medium text-gray-900 m-0">$ 500.00</p>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-4">
                                        <div class="dashboard-box rounded-md bg-white border border-gray-200">
                                            <div class="dashboard-box-head pt-3 pb-2 px-2">
                                            <select name="pick-item" class="w-full py-1 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                                <option>Choose item</option>
                                                <option>Carrot</option>
                                                <option>Onion</option>
                                                <option>Carrot</option>
                                                <option>Onion</option>
                                            </select>
                                            </div>
                                            
                                            <div class="image-holder px-2">
                                                <img src="images/placeholder_image_cropped.jpg" class="rounded-md">
                                            </div>

                                            <div class="dashboard-box-content pt-2 pb-3 px-3">
                                                <h4 class="text-blue-700 text-base m-0">Grape - Automan Season</h4>
                                                <p class="font-medium text-gray-900 m-0">$ 500.00</p>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-4">
                                        <div class="dashboard-box rounded-md bg-white border border-gray-200">
                                            <div class="dashboard-box-head pt-3 pb-2 px-2">
                                            <select name="pick-item" class="w-full py-1 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                                <option>Choose item</option>
                                                <option>Carrot</option>
                                                <option>Onion</option>
                                                <option>Carrot</option>
                                                <option>Onion</option>
                                            </select>
                                            </div>
                                            
                                            <div class="image-holder px-2">
                                                <img src="images/placeholder_image_cropped.jpg" class="rounded-md">
                                            </div>

                                            <div class="dashboard-box-content pt-2 pb-3 px-3">
                                                <h4 class="text-blue-700 text-base m-0">Grape - Automan Season</h4>
                                                <p class="font-medium text-gray-900 m-0">$ 500.00</p>
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
                                <p><a href="tel:+39 06 183 6186">+39 06 183 6186</a> </p>
                                <p><a href="mailto:info@oldfarm.it">info@oldfarm.it</a> </p>
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
                                    <button type="button" class="btn btn-success" id="basic-addon2">Subscribe</button>
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
