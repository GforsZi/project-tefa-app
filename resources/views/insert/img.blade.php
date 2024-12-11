<x-layout>
  <x-slot:tittle></x-slot:tittle>
        <div>
        <nav class="navbar navbar-light bg-light" style="background-color: #f8f9fa;">
            <div class="container-fluid">
                <form class="d-flex ms-auto">
                    <input type="search" placeholder="Search" aria-label="Search"
                        style="border-radius: 25px; padding: 10px 15px; font-size: 17px; width: 500px; transition: border-color 0.3s ease;">
                    <button type="submit"
                        style="border-radius: 25px; padding: 10px 20px; background-color: #344671; color: white; border: none; cursor: pointer; font-size: 14px; margin-left: 10px; transition: background-color 0.3s ease;">
                        Search
                    </button>
                </form>
            </div>
        </nav>
    </div>

    <!-- Sidebar -->
    <div
        style="background-color: #343a40; color: white; width: 280px; padding: 15px; height: 100vh; position: fixed; top: 0; left: 0; bottom: 0; z-index: 10;">
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
                    <a href="/home" class="nav-link" aria-current="page"
                        style="color: white; padding: 10px 15px; border-radius: 5px; margin-bottom: 80px; font-size: 20px;">
                        Home
                    </a>
                </li>

                <li>
                    <a href="/uploads/insert/img" class="nav-link"
                        style="color: white; padding: 10px 15px; border-radius: 5px; margin-bottom: 80px; font-size: 20px;">
                        upload
                    </a>
                </li>
            </ul>
        </center>
        <hr style="border-color: rgba(255, 255, 255, 0.1);">
    </div>

    <!-- Main Content -->
    <div style="margin-left: 300px; padding: 20px; width: calc(100% - 300px);">
        <form action="/uploads/insert/img" method="POST" enctype="multipart/form-data" style="display: flex; justify-content: center; align-items: center; height: 100vh; text-align: center;">
          @csrf
            <div>
                <label for="formFileLg" class="form-label"
                    style="cursor: pointer; width: 500px; height: 300px; display: flex; justify-content: center; align-items: center; background-color: #f0f0f0; text-align: center; line-height: 50px; border: 1px solid #ccc; border-radius: 10px; font-size: 20px; font-family: Arial, Helvetica, sans-serif; transition: background-color 0.3s ease, transform 0.3s ease;">
                    <img id="previewImage" src="" alt="Choose a file"
                        style="max-width: 100%; max-height: 100%; display: none;">
                    <span id="placeholderText">Choose a file</span>
                </label>
                <input class="form-control  form-control-lg" name="file" required id="formFileLg" type="file"
                    style="width: 500px; height: 3px; float: right; display: none;">

            </div>

            <div style="margin-left: 20px;">
                <input class="form-control" type="text" maxlength="30" name="name_foto"  placeholder="name picture" aria-label="default input example"
                    style="width: 450px; height: 50px; margin-bottom: 20px;">
                <input class="form-control" type="text" name="caption" maxlength="100" placeholder="Caption" aria-label="default input example"
                    style="width: 450px; height: 50px; margin-bottom: 20px;">
                <input class="form-control" type="text" maxlength="200" name="description" placeholder="Description" aria-label="default input example"
                    style="width: 450px; height: 50px; margin-bottom: 20px;">

                <button type="submit" class="btn btn-primary">Submit</button>
            </div>

        </form>
    </div>
</x-layout>