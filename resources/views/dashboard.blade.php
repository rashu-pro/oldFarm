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

                                @if (session('status'))
                                    @if(session('status')=='success')
                                        <div class="alert-div" role="alert">
                                            <div class="relative bg-blue-500 text-white font-bold rounded-t px-4 py-2">
                                                Success:

                                                <span class="alert-close absolute top-0 bottom-0 right-0 pt-2 pr-2">
                                                    <svg class="fill-current h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
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
                                                    <svg class="fill-current h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                                                </span>
                                            </div>
                                            <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                                                <p class="m-0">Something went wrong! Please try again.</p>
                                            </div>
                                        </div>
                                    @endif
                                @endif

                                <div class="dashboard-main">
                                    <h3 class="mb-3">Choose and build your farm</h3>
                                    <div class="image-map">
                                        <!-- Image Map Generated by http://www.image-map.net/ -->
                                        <div class="">
                                            <img src="{{'images/image-home.jpeg'}}" usemap="#image-map">
                                        </div>


                                        <map name="image-map">
                                            <area alt=""
                                                  title="Animals"
                                                  href="{{route('dashboard-animals')}}"
                                                  x-tooltip="tooltip"
                                                  coords="-1,498,1,425,48,404,126,370,164,358,180,353,194,355,211,365,250,389,307,423,359,452,398,479,419,497,340,500,204,499,173,501" shape="poly">
                                            <area class="image-fruits" alt="Fruits" title="Fruits" href="{{route('dashboard-fruits')}}" coords="421,342,467,297,492,289,525,297,572,314,595,328,622,323,647,314,666,326,689,327,720,317,757,321,777,331,802,341,815,346,826,370,838,393,834,427,818,463,807,487,769,502,670,501,587,498" shape="poly">
                                            <area class="image-vegetables" alt="vegetables" title="vegetables" href="{{route('dashboard-vegetables')}}" coords="503,74,542,94,586,118,609,130,699,186,868,180,946,133,952,59,950,0,807,2,703,0,556,6" shape="poly">
                                            <area class="image-animals" alt="animals" title="animals" href="{{route('dashboard-animals')}}" coords="66,306,147,347,223,321,229,260,226,235,201,203,186,180,131,159,94,143,83,151" shape="poly">
                                            <area class="image-fruits" alt="fruits" title="fruits" href="{{route('dashboard-fruits')}}" coords="328,2,410,3,410,94,390,115,353,111,322,95" shape="poly">
                                            <area class="image-animals" alt="animals" title="animals" href="{{route('dashboard-animals')}}" coords="650,315,698,339,722,331,770,332,806,343,850,338,871,339,906,327,894,291,848,262,811,230,786,211,764,207,661,291" shape="poly">
                                        </map>
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
