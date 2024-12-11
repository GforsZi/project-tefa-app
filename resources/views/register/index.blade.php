<x-layout>
  <x-slot:tittle></x-slot:tittle>
      <style>
      body {
        background-color: #1F2B45;
        color: white;
      }
    </style>
    <h1 class="text-center">UNI-MEDIA</h1>
    <br>

    <div class="d-grid gap-2 col-6 mx-auto" style="height: 50px; width: 200px; border-radius: 50px;">
      <button type="button" class="btn btn-secondary">Register</button>
    </div>
    <br>

    <div class="container">
      <div class="border border-primary p-4 rounded" style="max-width: 400px; margin: auto;">
        <form action="/register" method="post">
          @csrf
          <div class="mb-3">
            <label for="name" class="form-label"></label>
            <div class="input-group">
              <span class="input-group-text bg-primary text-white">
                <i class='bx bx-user'></i>
              </span>
              <input type="text" id="name" name="name" placeholder="Name" class="form-control">
            </div>
          </div>
          <div class="mb-3">
            <label for="username" class="form-label"></label>
            <div class="input-group">
              <span class="input-group-text bg-primary text-white">
                <i class='bx bxs-user'></i>
              </span>
              <input type="text" name="username" placeholder="Username" class="form-control">
            </div>
          </div>
          <div class="mb-3">
            <label for="department" class="form-label"></label>
            <div class="input-group">
              <span class="input-group-text bg-primary text-white">
                <i class='bx bx-user-plus'></i>
              </span>
              <select id="department" name="major" class="form-select">
                <option value="Desain Komunikasi Visual">DKV</option>
                <option value="Pengembangan Prangkat lunak dan Gim">PPLG</option>
              </select>
            </div>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label"></label>
            <div class="input-group">
              <span class="input-group-text bg-primary text-white">
                <i class='bx bxs-lock-alt'></i>
              </span>
              <input type="password" id="password" name="password" placeholder="Password" class="form-control">
            </div>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label"></label>
            <div class="input-group">
              <span class="input-group-text bg-primary text-white">
                <i class='bx bxs-lock-alt'></i>
              </span>
              <input type="password" name="frim-pass" id="password" placeholder="confirm Password" class="form-control">
            </div>
          </div>
          <div class="d-grid gap-2 col-6 mx-auto">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
</x-layout>