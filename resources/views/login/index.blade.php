<x-layout>
  <x-slot:tittle></x-slot:tittle>
      <style>
      body {
        background: linear-gradient(
          to bottom,
          #1c2947,
          #54699c
        ); /* Gradasi biru */
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
      }
      .login-container {
        background-color: rgba(255, 255, 255, 0.1);
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
        width: 100%;
        max-width: 400px;
      }
      .login-header {
        text-align: center;
        color: white;
        font-family: "Arial", sans-serif;
        margin-bottom: 20px;
        font-size: 1.5rem;
      }
      .btn-login {
        background-color: grey;
        border: none;
      }
      .btn-submit {
        background-color: #457b9d;
        border: none;
      }
      .btn-submit:hover {
        background-color: #1d3557;
      }
    </style>
    <div class="login-container">
      <div class="login-header">
        <h2>UNI-MEDIA</h2>
      </div>
      <div class="d-flex justify-content-center mb-3">
        <button type="submit" class="btn btn-login px-5 py-2 text-white">
          Login
        </button>
      </div>
      <form action="/login" method="post">
        @csrf
        <div class="mb-3">
          <label for="username" class="form-label text-white">
            <i class="bi bi-person"></i> Username:
          </label>
          <input
          name="username" autocomplete="off" required
            type="text"
            class="form-control"
            id="username"
            placeholder="Enter your username"
          />
        </div>
        <div class="mb-3">
          <label for="password" class="form-label text-white">
            <i class="bi bi-lock"></i> Password:
          </label>
          <input
            type="password"
            maxlength="30" autocomplete="off" required name="password"
            class="form-control"
            id="password"
            placeholder="Enter your password"
          />
        </div>
        <div class="d-flex justify-content-center mb-3">
          <button type="submit" class="btn btn-submit px-5 py-2 text-white">
            Submit
          </button>
        </div>
        <p class="mt-5 mb-3 text-body-secondary">Dont have account? <a href="register">sign up now!</a></p>
        <p class="mt-5 mb-3 text-body-secondary">Project TEFA © 2024</p>
      </form>
    </div>
</x-layout>