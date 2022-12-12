  <nav class="navbar navbar-expand-lg main-navbar sticky">
    <div class="form-inline mr-auto">
      <ul class="navbar-nav mr-3">
        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
                                collapse-btn"> <i data-feather="align-justify"></i></a></li>
        <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
            <i data-feather="maximize"></i>
          </a></li>
        <li>
          <form class="form-inline mr-auto">
            <div class="search-element">
              <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="200">
              <button class="btn" type="submit">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </form>
        </li>
      </ul>
    </div>
    <ul class="navbar-nav navbar-right">
      <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
          class="nav-link nav-link-lg message-toggle"><i data-feather="mail"></i>
          <span class="badge headerBadge1">
            6 </span> </a>
        <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
          <div class="dropdown-header">
            Messages
            <div class="float-right">
              <a href="#">Mark All As Read</a>
            </div>
          </div>
          <div class="dropdown-list-content dropdown-list-message">
           <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                <img alt="image" src="{{ URL::to('admin/assets/img/users/user-2.png')}}" class="rounded-circle">
              </span> <span class="dropdown-item-desc"> <span class="message-user">Sarah
                  Smith</span> <span class="time messege-text">Request for leave
                  application</span>
                <span class="time">5 Min Ago</span>
              </span>
            </a> 
          </div>
          <div class="dropdown-footer text-center">
            <a href="#">View All <i class="fas fa-chevron-right"></i></a>
          </div>
        </div>
      </li>
      <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
          class="nav-link notification-toggle nav-link-lg"><i data-feather="bell" class="bell"></i>
        </a>
        <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
          <div class="dropdown-header">
            Notifications
            <div class="float-right">
              <a href="#">Mark All As Read</a>
            </div>
          </div>
          <div class="dropdown-list-content dropdown-list-icons">
            <a href="#" class="dropdown-item dropdown-item-unread"> <span
                class="dropdown-item-icon bg-primary text-white"> <i class="fas
                                            fa-code"></i>
              </span> <span class="dropdown-item-desc"> Template update is
                available now! <span class="time">2 Min
                  Ago</span>
              </span>
            </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-info text-white"> <i class="far
                                            fa-user"></i>
              </span> <span class="dropdown-item-desc"> <b>You</b> and <b>Dedik
                  Sugiharto</b> are now friends <span class="time">10 Hours
                  Ago</span>
              </span>
            </a> 
          </div>
          <div class="dropdown-footer text-center">
            <a href="#">View All <i class="fas fa-chevron-right"></i></a>
          </div>
        </div>
      </li>
      <li class="dropdown"><a href="#" data-toggle="dropdown"
          class="nav-link dropdown-toggle nav-link-lg nav-link-user"> 
            @php
              $id = Auth::user()->id;
              $adminData = App\Models\User::find($id);
            @endphp 
          <img alt="image" src="{{ (!empty($adminData->image))? url('upload/admin/'.$adminData->image):url('upload/no_image.jpg') }}" class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
        <div class="dropdown-menu dropdown-menu-right pullDown">
          <div class="dropdown-title">{{ $adminData->name }}</div>

         
          <a href="{{ route('view.profile') }}" class="dropdown-item has-icon"> <i class="far
                                    fa-user"></i> Profile
          </a> <a href="{{ route('change.password') }}" class="dropdown-item has-icon"> <i class="fas fa-bolt"></i>
            Change Password
          </a> <a href="#" class="dropdown-item has-icon"> <i class="fas fa-cog"></i>
            Settings
          </a>
          <div class="dropdown-divider"></div>
          <a href="{{ route('admin.logout') }}" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i>
            Logout
          </a>
        </div>
      </li>
    </ul>
  </nav>