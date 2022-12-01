<aside class="dashboard-sidebar h-100 bg-slate-800 text-white pt-3 pt-sm-5 pb-1 pb-sm-4 px-3">
  <h3 class="pb-3 border-b border-gray-600 mb-3 d-none d-md-block">My Account</h3>
  <ul class="flex flex-col">
    <li class="mb-1 bg-slate-900 rounded-md active">
      <a href="{{ route('dashboard') }}"
         class="text-white block py-2 px-3">My Farm
      </a>
    </li>

    <li class="bg-slate-800 hover:bg-slate-900 hover:rounded-md">
      <a href="{{ route('dashboard-animals') }}"
         class="text-white block py-2 px-2 rounded-md hover:px-3">Animals
      </a>
    </li>

    <li class="bg-slate-800 hover:bg-slate-900 hover:rounded-md">
      <a href="{{ route('dashboard-fruits') }}"
         class="text-white block py-2 px-2 rounded-md hover:px-3">Fruits
      </a>
    </li>

    <li class="bg-slate-800 hover:bg-slate-900 hover:rounded-md">
      <a href="{{ route('dashboard-vegetables') }}"
         class="text-white block py-2 px-2 rounded-md hover:px-3">Vegetables
      </a>
    </li>

    <li class="bg-slate-800 hover:bg-slate-900 hover:rounded-md">
      <a href="#"
         class="text-white block py-2 px-2 rounded-md hover:px-3">My Subscriptions
      </a>
    </li>

    <li class="bg-slate-800 hover:bg-slate-900 hover:rounded-md">
      <a href="#"
         class="text-white block py-2 px-2 rounded-md hover:px-3">Billing Method
      </a>
    </li>

    <li class="bg-slate-800 hover:bg-slate-900 hover:rounded-md">
      <a href="{{ route('logout') }}"
         class="text-white block py-2 px-2 rounded-md hover:px-3">Logout
      </a>
    </li>
  </ul>
</aside>
