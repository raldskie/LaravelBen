<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

<div class="md:flex flex-col md:flex-row md:min-h-screen">

  <div @click.away="open = false" class="bg-dark flex flex-col w-full md:w-64 text-gray-700 dark-mode:text-gray-200 dark-mode:bg-gray-800 flex-shrink-0" x-data="{ open: false }">
    
    <div class="flex-shrink-0 px-6 py-4 flex flex-row items-center justify-between">
    <h4 class="primary font-weight-bold"><i class="fa fa-coffee" aria-hidden="true"></i> {{$team_name -> name}}</h4>
      <button class="rounded-lg md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
        <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
          <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
          <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
        </svg>
      </button>
    </div>

    <nav :class="{'block': open, 'hidden': !open}" class="flex-grow md:block px-3 pb-4 md:pb-0 md:overflow-y-auto">
      <p class="px-2 radius-10 white"><i class="fa fa-calendar-plus-o mr-2" aria-hidden="true"></i> Calendar</p>
      <p class="px-2 radius-10 white"><i class="fa fa-telegram mr-2" aria-hidden="true"></i> Chat</p>
      <a href="{{ url('/team') }}">
          <p class="{{ Route::current()->getName() == 'team.index' ? 'bg-primary dark font-weight-bold' : '' }} px-2 py-2 radius-15" >
              <i class="fa fa-users mr-2" aria-hidden="true"></i> Team</p></a>
    </nav>


    <div :class="{'block': open, 'hidden': !open}" class="bg-primary p-3 md:block">
        <h6 class="font-weight-bold t-20 dark"><i class="fa fa-user-circle" aria-hidden="true"></i> {{ Auth::user()->name }} {{ Auth::user()->last_name }}</h6>
        <a class="badge badge-primary font-weight-bold" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
    </div>
  </div>

  <div style="width:100%">

    <div class="white">
        @yield('content')
    </div>

  </div>
  
</div>