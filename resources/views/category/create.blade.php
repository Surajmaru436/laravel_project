
<form action="/category" method="post">
  @csrf
  <!-- {{-- cross site request forgery --}} -->
   name: <input type="text" name=name>
   <br>
   description: <textarea name="description"></textarea>
   <br>
  <button>GO</button>
</form>