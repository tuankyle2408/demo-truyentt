
<div class="container">
 <!-- Navbar trang home -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
 <!--  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button> -->

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
      @role('admin')
        <a class="nav-link" href="{{route('home')}}">Admin<span class="sr-only">(current)</span></a>
      </li>


      <!-- <li class="nav-item">
        <a class="nav-link" href="#">Quản Lý Danh Mục</a>
      </li> -->

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Quản Lý User
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{route('user.create')}}">Thêm</a>
          <a class="dropdown-item" href="{{route('user.index')}}">Danh Sách Người Dùng</a>

        </div>

      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Quản Lý Website
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{route('danhmuc.create')}}">Web</a>
          <a class="dropdown-item" href="{{route('danhmuc.index')}}">Liệt Kê Web</a>

        </div>
</li>

 @endrole


      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Quản Lý Danh Mục
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{route('danhmuc.create')}}">Thêm Danh Mục</a>
          <a class="dropdown-item" href="{{route('danhmuc.index')}}">Liệt Kê Danh Mục</a>

        </div>
</li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Thể Loại
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{route('theloai.create')}}">Thêm Thể Loại</a>
          <a class="dropdown-item" href="{{route('theloai.index')}}">Liệt Kê Thể Loại</a>

        </div>

      </li>



        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Truyện Sách
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

          <a class="dropdown-item" href="{{route('truyen.create')}}">Thêm Sách Truyện</a>

          <a class="dropdown-item" href="{{route('truyen.index')}}">Liệt Kê Sách Truyện</a>

        </div>

      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Chapter
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{route('chapter.create')}}">Thêm Chapter</a>
          <a class="dropdown-item" href="{{route('chapter.index')}}">Liệt Kê Chapter</a>

        </div>

      </li>






     <!--  <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li> -->
    </ul>

    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Tìm Kiếm" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm Kiếm</button>
    </form>
  </div>
</nav>
 </div>


