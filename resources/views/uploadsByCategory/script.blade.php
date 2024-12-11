<x-layout>
  <x-slot:tittle></x-slot:tittle>
  <table border="1">
  <tr>
  <td>user-name</td>
  <td>name-script</td>
  <td>script-url</td>
  <td>caption</td>
  <td>description</td>
  </tr>
  @foreach ($scripts as $script)
  <tr>
  <td>{{$script->user->username}}</td>
  <td>{{$script->name_script}}</td>
  <td>{{$script->file}}</td>
  <td>{{$script->caption}}</td>
  <td>{{$script->description}}</td>
  </tr>
  @endforeach
    </table>  
</x-layout>