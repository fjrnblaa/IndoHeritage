<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/dashboardStyle.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reviewStyle.css') }}">
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
          <a href="/dashboard" class="active">
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
      <div class="profile-details">
        <span class="admin_name">{{ auth()->user()->name }}</span>
      </div>
    </nav>

    <div class="home-content">
      <div class="containerr">
        <div class="content">
            <form action="{{ url('/cultures/store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="topic">Add Content</div>
                    <div class="input-box">
                        <input type="text" name="code" required>
                        <label>Enter content code</label>
                    </div>
                    <div class="input-box">
                        <input type="text" name="title" required>
                        <label>Enter title</label>
                    </div>
                    <div class="message-box">
                        <textarea rows="1" name="description" class="auto_height" oninput="auto_height(this)" required></textarea>
                        <label>Enter description</label>
                    </div>
                    <div class="input-img">
                        <label>Enter image</label>
                        <br>
                        <input type="file" name="image" required>
                    </div>
                    <div class="input-box">
                        <input type="submit" value="Upload Content">
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
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