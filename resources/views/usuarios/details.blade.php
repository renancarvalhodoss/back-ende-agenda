<h1>details..</h1>
<a href="/usuarios">back to users</a>

 @if($id != null)
 <p> id: {{$usuarios[$id-1]->id}}</p>
 <p> nome: {{$usuarios[$id-1]->name}}</p>
 <p> email: {{$usuarios[$id-1]->email}}</p>
 @else
 <p> usuario não encontrado</p>

 @endif

