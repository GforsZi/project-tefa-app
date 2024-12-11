<x-layout>
  <x-slot:tittle></x-slot:tittle>
<style>
  .nav-link:hover {
    background-color: #212529;
    color: #adb5bd !important;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
    transition: all 0.3s ease;
  }

  .nav-link.active {
    background-color: #212529;
    color: #adb5bd !important;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
  }
</style>
    <!-- Navbar Search -->
  <div>
    <nav class="navbar navbar-light bg-light" style="background-color: #f8f9fa;">
      <div class="container-fluid">
        <form class="d-flex ms-auto">
          <input type="search" placeholder="Search" aria-label="Search"
            style="border-radius: 25px; padding: 10px 15px; border: 1px solid #ccc; font-size: 17px; width: 950px; transition: border-color 0.3s ease;">
          <button type="submit"
            style="border-radius: 25px; padding: 10px 20px; background-color: #344671; color: white; border: none; cursor: pointer; font-size: 14px; margin-left: 10px; transition: background-color 0.3s ease;">
            Search
          </button>
        </form>
      </div>
    </nav>
  </div>

  <!-- Sidebar -->
  <div class="sidebar"
    style="background-color: #343a40; color: white; width: 280px; padding: 15px; height: 100vh; position: fixed; top: 0; left: 0; z-index: 10;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none"
      style="font-size: 1.5rem; font-weight: bold; margin-bottom: 1rem;">
      <div class="profile-container" style="display: flex; align-items: center;">
        <span>Username</span>
      </div>
    </a>
    <hr style="border-color: rgba(255, 255, 255, 0.1);">
    <center>
      <ul class="nav flex-column mb-auto">
        <li class="nav-item">
          <a href="/home" class="nav-link active" aria-current="page"
            style="color: white; padding: 10px 15px; border-radius: 5px; margin-bottom: 80px; font-size: 20px;">
            Home
          </a>
        </li>
        <li>
          <a href="/uploads/insert/video" class="nav-link"
            style="color: white; padding: 10px 15px; border-radius: 5px; margin-bottom: 80px; font-size: 20px;">
            Upload
          </a>
        </li>
      </ul>
    </center>
    <hr style="border-color: rgba(255, 255, 255, 0.1);">
  </div>

  <!-- Main Content -->

  <!-- Content Area -->
  <div class="content-area" style="margin-left: -40px; padding: 20px; flex-grow: 1; top: 10px; position: relative;">
    <div class="card-container" style="display: flex; margin-left:350px; flex-wrap: wrap; gap: 20px; justify-content: flex-start;">
@foreach ($videos as $video)
      <div class="card"
        style="width: 18rem; border: 1px solid #ddd; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); transition: transform 0.3s, box-shadow 0.3s;">
        <video controls style="border-top-left-radius: 10px; border-top-right-radius: 10px; object-fit: cover; height: 200px; width: 100%;">
          <source src="{{asset('storage_ctm/uploads_video/' . $video->file)}}" alt="{{$video->file}}" type="video/mp4">
          Your browser does not support the video tag.
        </video>
        <div class="card-body" style="padding: 15px;">
          <h5 class="card-title" style="color: #333; font-size: 1.5rem; margin-bottom: 10px;">{{$video->user->username}}</h5>
          <p class="card-text" style="color: #666; font-size: 1rem; line-height: 1.5;">{{$video->caption}}</p>    
        </div>
      </div>
  @endforeach
    </div>
  </div>
</x-layout>