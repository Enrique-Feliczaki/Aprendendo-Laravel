<h1>Listagem dos supports</h1>
<a href="{{route('supports.create')}}">Criar Duvida</a>
<table>
    <thead>
        <th>Assunto</th>
        <th>Status</th>
        <th>Descrição</th>
        <th></th>
    </thead>
    <body>
        @foreach ($supports as $support)
            <tr>
                <td>{{$support->subject}}</td>
                <td>{{$support->status}}</td>
                <td>{{$support->body}}</td>
                <td>
                     <a href="{{route('supports.show', $support->id)}}">Ir</a>
                     <a href="{{route('supports.edit', $support->id)}}">Editar</a>
                </td>
            </tr>
        @endforeach
    </body>
</table>
