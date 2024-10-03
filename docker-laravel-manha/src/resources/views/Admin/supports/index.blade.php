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
                <td>{{$supoort->subject}}</td>
                <td>{{$supoort->status}}</td>
                <td>{{$supoort->body}}</td>
                <td>
                    <a href="{{route('supports.show', $support->id)}}">Ir</a>
                </td>
            </tr>
        @endforeach
    </body>
</table>
