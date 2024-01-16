<div id="layoutSidenav_nav">
        <nav class="sidenav shadow-right sidenav-light">
          <div class="sidenav-menu">
            <div class="nav accordion" id="accordionSidenav">
              <!-- Sidenav Menu Heading (Account)-->
              <div class="sidenav-menu-heading">Account</div>
              <!-- Sidenav Accordion (Dashboard)-->
              <a
                class="nav-link collapsed"
                href="javascript:void(0);"
                data-bs-toggle="collapse"
                data-bs-target="#collapsePages"
                aria-expanded="false"
                aria-controls="collapsePages"
              >
                <div class="nav-link-icon"><i data-feather="grid"></i></div>
                Account
                <div class="sidenav-collapse-arrow">
                  <i class="fas fa-angle-down"></i>
                </div>
              </a>

              <div
                class="collapse"
                id="collapsePages"
                data-bs-parent="#accordionSidenav"
              >
                <nav
                  class="sidenav-menu-nested nav accordion"
                  id="accordionSidenavPagesMenu"
                >
                  <a class="nav-link" href="{{ route('profile') }}">Profile</a>
                  <a class="nav-link" href="{{ route('settings') }}">Security</a>
                </nav>
              </div>
              <!-- Sidenav Heading (Admin Menu)-->
              <div class="sidenav-menu-heading">Admin Menu</div>
              <!-- Sidenav Accordion (Pages)-->
              <!-- Sidenav Accordion (Applications)-->
              <a
                class="nav-link collapsed"
                href="javascript:void(0);"
                data-bs-toggle="collapse"
                data-bs-target="#collapseApps"
                aria-expanded="false"
                aria-controls="collapseApps"
              >
                <div class="nav-link-icon"><i data-feather="book"></i></div>
                Article Management
                <div class="sidenav-collapse-arrow">
                  <i class="fas fa-angle-down"></i>
                </div>
              </a>
              <div
                class="collapse"
                id="collapseApps"
                data-bs-parent="#accordionSidenav"
              >
                <nav
                  class="sidenav-menu-nested nav accordion"
                  id="accordionSidenavAppsMenu"
                >
                  <a class="nav-link" href="{{ route('article.index') }}">Article List</a>
                  <a class="nav-link" href="{{ route('article.create') }}">Create Article</a>
                </nav>
              </div>
              <!-- Sidenav Accordion (Flows)-->
              <a
                class="nav-link collapsed"
                href="javascript:void(0);"
                data-bs-toggle="collapse"
                data-bs-target="#collapseFlows"
                aria-expanded="false"
                aria-controls="collapseFlows"
              >
                <div class="nav-link-icon"><i data-feather="users"></i></div>
                Anggota
                <div class="sidenav-collapse-arrow">
                  <i class="fas fa-angle-down"></i>
                </div>
              </a>
              <div
                class="collapse"
                id="collapseFlows"
                data-bs-parent="#accordionSidenav"
              >
                <nav class="sidenav-menu-nested nav">
                  <a class="nav-link" href="{{ route('anggota.index') }}">List Anggota</a>
                  <a class="nav-link" href="{{ route('anggota.create') }}">Add Anggota</a>
                </nav>
              </div>
            </div>
          </div>
          <!-- Sidenav Footer-->
        </nav>
      </div>