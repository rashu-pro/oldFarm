<x-app-layout class="">
  <div class="dashboard-home">
    <!-- main wrapper -->
    <div class="main-wrapper">
      <div class="dashboard-wrapper">
        <div class="container">
          <div class="row justify-content-center">

            <!-- dashboard content -->
            <div class="col-md-9">

              <div class="dashboard-content main-dashboard">

                @if(session('paymentError'))
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

                <div class="dashboard-main position-relative">
                  <div class="image-map position-relative">
                    <h3 class="mb-3 title-dashboard-main">Choose and build your farm</h3>
                    <div class="">
                      <img src="{{'images/bg-home-v2.min.jpg'}}" usemap="#image-map">
                    </div>

                    <map name="image-map">
                      <area
                        alt="animals"
                        title="animals"
                        href="{{route('dashboard-animals')}}"
                        coords="111,796,388,752,452,735,460,700,460,648,451,597,443,542,432,499,379,483,307,481,262,507,202,527,146,547,116,587,80,636,60,665" shape="poly">
                      <area alt="fruits"
                            title="fruits"
                            href="{{route('dashboard-fruits')}}"
                            coords="450,422,546,408,649,398,711,410,765,431,788,463,800,500,800,608,799,659,795,719,721,748,629,750,547,739,516,699,489,648,459,584" shape="poly">
                      <area alt="vegetables"
                            title="vegetables"
                            href="{{route('dashboard-vegetables')}}"
                            coords="272,857,444,871,534,861,609,843,650,815,605,772,568,759,518,739,465,738,395,757,349,785" shape="poly">
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
</x-app-layout>
