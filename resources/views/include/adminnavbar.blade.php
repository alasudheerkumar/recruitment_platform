<!-- navbar image top bar-->
<nav class="navbar navbar-expand-md navbar-dark ">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">
        <img src="{{asset('img/logo.png')}}">
      </a>
      <form method="POST" class="btn btn-secondary" action="{{ route('logout') }}">
        @csrf
        <x-dropdown-link :href="route('logout')"
                onclick="event.preventDefault();
                            this.closest('form').submit();">
            {{ __('Log Out') }}
        </x-dropdown-link>
    </form>
    </div>
  </nav>
  <!-- navbar items list-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-afaak">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler bg-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse navbar-brand-center" id="navbarCollapse">
          <ul class="navbar-nav mx-auto mb-lg-0">
            <li class="nav-item pr-4 active">
              <a class="nav-link text-dark" href="/applicants">Home</a>
            </li>
            <li class="nav-item pr-4">
              <a class="nav-link text-dark" href="/admindetails">Personal Details</a>
            </li>
            <li class="nav-item pr-4">
                <a class="nav-link text-dark" href="/adminsettings">Settings</a>
              </li>
            <li class="nav-item color-me pr-4">
              <a class="nav-link text-dark" href="/interviews">Interviews</a>
            </li>
            <li class="nav-item color-me pr-4">
              <a class="nav-link text-dark" href="/newjob">New job</a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>