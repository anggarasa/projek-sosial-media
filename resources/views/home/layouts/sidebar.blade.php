<div class="navigation">
  <ul>
      <li>
          <a href="#">
              <span class="icon">
                  <img src="assets/imgs/mezzi-logo-2.svg" class=" h-14 my-6 ml-6" alt="">
              </span>
              {{-- <span class="title">Brand Name</span> --}}
          </a>
      </li>

      <li>
          <a href="/Home">
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
        <a href="#" data-modal-target="defaultModal" data-modal-toggle="defaultModal">
            <span class="icon">
                <ion-icon name="add-outline"></ion-icon>
            </span>
            <span class="title">Posting</span>
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
          <a href="/settings">
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
  </ul>
</div>
@include('home.posting.posting')