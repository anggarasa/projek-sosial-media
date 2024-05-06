<div class="navigation">
  <ul>
      <li>
          <a href="#">
              <span class="icon">
                  <ion-icon name="logo-apple"></ion-icon>
              </span>
              <span class="title">Brand Name</span>
          </a>
      </li>

      <li>
          <a href="/home">
              <span class="icon">
                  <ion-icon name="home-outline"></ion-icon>
              </span>
              <span class="title">Beranda</span>
          </a>
      </li>

      <li>
          <a href="/cari">
              <span class="icon">
                <ion-icon name="search-outline"></ion-icon>
              </span>
              <span class="title">Cari</span>
          </a>
      </li>

      <li>
          <a href="#">
              <span class="icon">
                  <ion-icon name="chatbubble-outline"></ion-icon>
              </span>
              <span class="title">Messages</span>
          </a>
      </li>

      <li>
          <a href="/profile-user">
              <span class="icon">
                <ion-icon name="person-circle-outline"></ion-icon>
              </span>
              <span class="title">Profile</span>
          </a>
      </li>

      <li>
          <a href="/profile-edit">
              <span class="icon">
                  <ion-icon name="settings-outline"></ion-icon>
              </span>
              <span class="title">Settings</span>
          </a>
      </li>

      <li>
          <a href="/password">
              <span class="icon">
                  <ion-icon name="lock-closed-outline"></ion-icon>
              </span>
              <span class="title">Password</span>
          </a>
      </li>

      <li>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
          <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
              <span class="icon">
                  <ion-icon name="log-out-outline"></ion-icon>
              </span>
              <span class="title">Sign Out</span>
          </a>
        </form>
      </li>
  </ul>
</div>