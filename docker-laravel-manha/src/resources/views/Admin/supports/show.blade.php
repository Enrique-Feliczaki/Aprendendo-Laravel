<h1>Detalhes da Duvida {{$support->id}}</h1>

<ul>
    <li>Assunto: {{$support->subject}}</li>
    <li>Status: {{$support->status}}</li>
    <li>Descriação: {{$support->body}}</li>
</ul>

<form action="{{route('supports.destroy', $support->id)}}" method="post">
    @csrf()
    @method('DELETE')
    <button type="submit">Deletar</button>
</form>
