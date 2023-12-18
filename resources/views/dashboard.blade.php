<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Responsive Admin Dashboard</title>
    <link rel="stylesheet" href="css/dashboardStyle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <span class="logo_name">Indo Heritage</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="#" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li class="log_out">
          <a href="/logout">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="search-box">
        <form action="{{ url('/dashboard') }}" method="GET">
          <input class="form-control rounded-pill py-2" type="text" name="search" placeholder="Search...">
          <input type="submit" value="Search" class="bx-search rounded-pill">
        </form>        
      </div>
      <div class="profile-details">
        <span class="admin_name">{{ auth()->user()->name }}</span>
      </div>
    </nav>

    <div class="home-content">
      <div class="button">
        <a class="add" href="/dashboard/add">Add Content</a>
      </div>
      <br class="3">
      @foreach ($contents as $content)
        <div class="sales-boxes">
          <div class="recent-sales box">
            <div class="title">{{$content->title}}</div>
            <div class="button">
              <a class="show" href="/cultures/{{$content->code}}">Show</a>
              <a class="update" href="/dashboard/update/{{$content->code}}">Update</a>
              <a class="delete" href="/cultures/delete/{{$content->code}}">Delete</a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
    
    {{-- <div class="d-flex justify-content-center">
        {{ $contents->links() }}
    </div> --}}
  </section>

  <script>
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".sidebarBtn");
    sidebarBtn.onclick = function() {
      sidebar.classList.toggle("active");
      if(sidebar.classList.contains("active")){
      sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
    }else
      sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
    }
 </script>

</body>
</html>