<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Dashboard') }}
    </h2>
  </x-slot>

  <!-- page title -->
  <div class="page-title" style="background-image: url(images/marketplace-page-title.jpg)">
    <div class="container">
      <div class="page-title-inner text-center">
        <h2>My Farm</h2>
        <ul class="nav justify-content-center">
          <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="#" class="nav-link">My Farm</a></li>
        </ul>
      </div>
    </div>
  </div>

  <!-- main wrapper -->
  <div class="main-wrapper">
    <div class="dashboard-wrapper">
      <div class="container">
        <div class="row">

          <!-- sidebar -->
          <div class="col-md-3">
            <aside class="dashboard-sidebar">
              <h3 class="dashboard-sidebar-title">My Account</h3>
              <ul class="list-group">
                <li class="list-group-item active"><a href="#">Dashboard</a></li>
                <li class="list-group-item"><a href="#">Vegetables</a></li>
                <li class="list-group-item"><a href="#">Animals</a></li>
                <li class="list-group-item"><a href="#">My Pick</a></li>
                <li class="list-group-item"><a href="#">My Profile</a></li>
                <li class="list-group-item"><a href="#">Log Out</a></li>
              </ul>
            </aside>
          </div>

          <!-- dashboard content -->
          <div class="col-md-9">
            <div class="dashboard-content">

              <div class="dashboard-item-box pb-4">
                <div class="row">
                  <div class="col-md-4">
                    <div class="dashboard-item">
                      <img src="images/fruit.png">
                      <h2>Fruits</h2>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="dashboard-item">
                      <img src="images/vegetable.png">
                      <h2>Vegetables</h2>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="dashboard-item">
                      <img src="images/cow.png">
                      <h2>Animal</h2>
                    </div>
                  </div>
                </div>
              </div>

              <div class="dashboard-content-box shadow-sm">
                <div class="row">

                  <div class="col-md-4">
                    <div class="dashboard-box">
                      <select name="pick-item" class="form-control">
                        <option>Choose item</option>
                        <option>Carrot</option>
                        <option>Onion</option>
                        <option>Carrot</option>
                        <option>Onion</option>
                      </select>
                      <img src="images/fruit-1.jpg">
                      <p>Grapes are a non-climacteric type of fruit, generally occurring in clusters</p>
                    </div>

                  </div>

                  <div class="col-md-4">
                    <div class="dashboard-box">
                      <select name="pick-item" class="form-control">
                        <option>Choose item</option>
                        <option>Carrot</option>
                        <option>Onion</option>
                        <option>Carrot</option>
                        <option>Onion</option>
                      </select>
                      <img src="images/fruit-1.jpg">
                      <p>Grapes are a non-climacteric type of fruit, generally occurring in clusters</p>
                    </div>

                  </div>

                  <div class="col-md-4">
                    <div class="dashboard-box">
                      <select name="pick-item" class="form-control">
                        <option>Choose item</option>
                        <option>Carrot</option>
                        <option>Onion</option>
                        <option>Carrot</option>
                        <option>Onion</option>
                      </select>
                      <img src="images/fruit-1.jpg">
                      <p>Grapes are a non-climacteric type of fruit, generally occurring in clusters</p>
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
</x-app-layout>
