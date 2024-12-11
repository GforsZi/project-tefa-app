<x-layout>
  <x-slot:tittle></x-slot:tittle>
      <style>
      .card-bar {
        background-color: #4a5c8a;
        border-radius: 0%;
      }

      .card-subtitle {
        color: black;
      }

      .home {
        margin-top: 13rem;
      }

      .upload,
      .setting {
        margin-top: 2rem;
      }

      #main {
        background-color: #1c2237;
        min-height: 100vh;
        padding-left: 16rem;
      }

      .profile-pic {
        margin: 20px auto;
        display: block;
        width: 150px;
        height: 150px;
      }

      body {
        background-color: #1a2643;
        color: black;
      }

      .form-container {
        max-width: 400px;
        margin: 20px auto;
        padding: 20px;
      }

      .rounded-pill-input {
        border-radius: 50px;
      }

      .rounded-area {
        border-radius: 15px;
      }
    </style>
      <section id="sidebar">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="card-bar position-fixed top-0 start-0" style="width: 16rem; min-height: 100vh">
              <div class="card-body">
                <h4 class="card-title position-absolute top-0 start-0 ms-5 mt-4 ps-4">uni media</h4>
             <form action="/logout" style="margin-top: 100px;" method="post" class="col mb-1">
              @csrf
              <button class="btn btn-outline-dark w-100" type="submit">
                <p class="text-start m-0 p-0">Log-out</p>
              </button>
            </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End SideBar -->

    <!-- Main -->
    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col">
            <img src="{{asset('resource/profile_picture/' . auth()->user()->foto_profile)}}" alt="{{auth()->user()->foto_profile}}"  class="profile-pic rounded-circle" />
          </div>
        </div>
      </div>
      <div class="form-container">
          <!-- Name input -->
          <div class="mb-3">
            <input type="text" class="form-control rounded-pill-input p-3" placeholder="{{auth()->user()->name}}" readonly />
          </div>

          <!-- Username input -->
          <div class="mb-3">
            <input type="text" class="form-control rounded-pill-input p-3" placeholder="{{auth()->user()->info}}" readonly />
            
          </div>
          <div class="mb-3">
            <input type="text" class="form-control rounded-pill-input p-3" placeholder="{{auth()->user()->major}}" readonly />
          </div>

          <!-- Bio textarea -->
          <div class="mb-3">
            <textarea class="form-control rounded-area p-3" rows="4" placeholder="{{auth()->user()->bio}}" readonly>{{auth()->user()->bio}}</textarea>
          </div>
 
      </div>
    </section>
</x-layout>