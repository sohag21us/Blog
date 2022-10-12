<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link collapsed" href="index.html">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-menu-button-wide"></i><span>Category & Post</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="{{ route('create.category') }}">
            <i class="bi bi-postcard"></i><span>Creat Category</span>
          </a>
        </li>
        <li>
          <a href="{{ route('category.all') }}">
            <i class="bi bi-circle"></i><span>View Category</span>
          </a>
        </li>
        <li>
          <a href="{{ route('create.post') }}">
            <i class="bi bi-circle"></i><span>Create Post</span>
          </a>
        </li>
        <li>
          <a href="{{ route('post.all') }}">
            <i class="bi bi-circle"></i><span>View Post</span>
          </a>
        </li>
      </ul>
    </li><!-- End Components Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-journal-text"></i><span>Visitors & Home SEO</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="{{ route('all.visitor') }}">
            <i class="bi bi-circle"></i><span>All Visitor</span>
          </a>
        </li>
        <li>
          <a href="{{ route('create.seo') }}">
            <i class="bi bi-circle"></i><span>Create SEO Home</span>
          </a>
        </li>
      </ul>
    </li><!-- End Forms Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-layout-text-window-reverse"></i><span>About Me</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="{{ route('create.about') }}">
            <i class="bi bi-circle"></i><span>Create About Me</span>
          </a>
        </li>
      </ul>
    </li><!-- End Tables Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-tools"></i><span>Recommend Tolls</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="{{ route('create.tolls') }}">
            <i class="bi bi-circle"></i><span>Create Tolls</span>
          </a>
        </li>
        <li>
          <a href="{{ route('all.tolls') }}">
            <i class="bi bi-circle"></i><span>View Tolls</span>
          </a>
        </li>

      </ul>
    </li><!-- End Charts Nav -->


    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-gem"></i><span>Ads Image</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="{{ route('create-image') }}">
            <i class="bi bi-circle"></i><span>Create Ads</span>
          </a>
        </li>
        <li>
          <a href="{{ route('ads-all') }}">
            <i class="bi bi-circle"></i><span>View Ads</span>
          </a>
        </li>

      </ul>
    </li><!-- End Icons Nav -->

    <li class="nav-heading">Pages</li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="{{ route('privacy') }}">
        <i class="bi bi-lock"></i>
        <span>Create Privacy</span>
      </a>
    </li><!-- End Profile Page Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="{{ route('terms') }}">
        <i class="bi bi-question-circle"></i>
        <span>Terms & Condition</span>
      </a>
    </li><!-- End F.A.Q Page Nav -->



    <li class="nav-item">
      <a class="nav-link " href="{{ route('list.subscribe') }}">
        <i class="bi bi-file-earmark"></i>
        <span>All Subscriber List</span>
      </a>
    </li><!-- End Blank Page Nav -->

    <li class="nav-item">
      <a class="nav-link " href="{{ url('/') }}">
        <i class="bi bi-globe"></i>
        <span>Visite Site</span>
      </a>
    </li><!-- End Blank Page Nav -->

  </ul>

</aside><!-- End Sidebar-->
