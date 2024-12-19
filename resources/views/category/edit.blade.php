
<form action="/category/{{ $info['id']}}" method="post">
  @csrf
@method('put')
   name: <input type="text" name=name value="{{ $info['name']}}">
   <br>
   description: <textarea name="description">  {{ $info['description']}}</textarea>
   <br>
  <button>GO</button>
</form>