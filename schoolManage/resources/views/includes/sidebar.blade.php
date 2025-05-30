<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
        <!--begin::Sidebar Brand-->
        <div class="sidebar-brand">
          <!--begin::Brand Link-->
          <a class='brand-link' href='/dist/pages/'>
            <!--begin::Brand Image-->
            <!--end::Brand Image-->
            <!--begin::Brand Text-->
            <span class="brand-text fw-light">SchoolManage</span>
            <!--end::Brand Text-->
          </a>
          <!--end::Brand Link-->
        </div>
        <!--end::Sidebar Brand-->
        <!--begin::Sidebar Wrapper-->
        <div class="sidebar-wrapper">
          <nav class="mt-2">
            <!--begin::Sidebar Menu-->
            <ul
              class="nav sidebar-menu flex-column"
              data-lte-toggle="treeview"
              role="menu"
              data-accordion="false"
            >
              <li class="nav-item">
                <a class='nav-link' href='{{route('etudiants.index')}}'>
                  <i class="nav-icon bi bi-palette"></i>
                  <p>Liste Etudiants</p>
                </a>
              </li>
              <li class="nav-item">
                <a class='nav-link' href='{{route('etudiants.create')}}'>
                  <i class="nav-icon bi bi-palette"></i>
                  <p>Ajouter un étudiant</p>
                </a>
              </li>
              <li class="nav-item">
                <a class='nav-link' href='{{route('evaluations.index')}}'>
                  <i class="nav-icon bi bi-palette"></i>
                  <p>Liste Evaluations</p>
                </a>
              </li>
              <li class="nav-item">
                <a class='nav-link' href='{{route('evaluations.create')}}'>
                  <i class="nav-icon bi bi-palette"></i>
                  <p>Ajouter une évaluation</p>
                </a>
              </li>
             
            </ul>
            <!--end::Sidebar Menu-->
          </nav>
        </div>
        <!--end::Sidebar Wrapper-->
      </aside>