<x-layout>
  <x-slot:tittle></x-slot:tittle>
    <h1>Upload File</h1>

    <form action="/uploads/insert/img" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file" required>
        <input type="text" name="name_script" placeholder="name" required>
        <input type="text" name="caption" placeholder="cap" required>
        <input type="text" name="description" placeholder="des" required>
        <button type="submit">Upload</button>
    </form>
</x-layout>