<x-layout>
  <x-slot:tittle></x-slot:tittle>
    <div class="container-fluid">
      <div class="row">
        <nav
          class="col-2 navbar navbar-expand-lg flex-column vh-100"
          style="background-color: #6c8ac9"
        >
          <a href="/profile" class="navbar-brand rounded text-center mb-4 fw-normal" style="width: 150px; height: 50px; background-color: #2285d0">Profile</a
          >

          <div class="position-absolute top-50 start-50 translate-middle">
          </div>
        </nav>
        <!-- Page Utama -->
        <main class="col-10 p-4" style="background-color: #1f2b45">
          <!-- Notifikasi -->
          <div class="mb-4">
            <div class="d-flex justify-content-between align-items-center">
              <div
                class="bg-white rounded-pill"
                style="height: 24px; width: 100%; margin-right: 20px"
              ></div>
              <div
                class="rounded-circle bg-light d-flex justify-content-center align-items-center"
                style="width: 28px; height: 28px"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="16"
                  height="16"
                  fill="currentColor"
                  class="bi bi-bell"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2M8 1.918l-.797.161A4 4 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4 4 0 0 0-3.203-3.92zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5 5 0 0 1 13 6c0 .88.32 4.2 1.22 6"
                  />
                </svg>
              </div>
            </div>
          </div>

          <!-- content -->
          <div class="mt-5 mb-4">
            <div
              class="d-grid p-4 h-auto w-auto justify-content-center align-items-center rounded-5"
              style="
                background-color: #335294;
                grid-template-columns: repeat(auto-fit, 250px);
              "
            >
              <div class="mx-5 my-3">
                 <a href="/uploads/by/img"
                  class="rounded btn d-flex justify-content-center align-items-center"
                  style="width: 150px; height: 50px; background-color: #2285d0"
                >
                  Picture
                </a>
              </div>
              <div class="mx-5 my-3">
                <a href="/uploads/by/video"
                  class="rounded btn d-flex justify-content-center align-items-center"
                  style="width: 150px; height: 50px; background-color: #2285d0"
                >
                  Video
                </a>
              </div>
              <div class="mx-5 my-3">
                <a href="/uploads/by/web"
                  class="rounded btn d-flex justify-content-center align-items-center"
                  style="width: 150px; height: 50px; background-color: #2285d0"
                >
                  Web
                </a>
              </div>
            </div>
          </div>
        </main>
      </div>
    </div>
</x-layout>