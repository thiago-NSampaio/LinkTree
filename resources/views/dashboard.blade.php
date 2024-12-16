<div>
    <h1>Dashboard</h1>
    <a href="/links/create">Criar</a>
<br>
    <ul>
        @foreach($links as $link)
        <li>
            <a href="/links/{{$link->id}}/edit">{{$link->name}}</a>
            <form action="{{route('links.destroy', $link)}}" method="POST" onsubmit="return confirm('Tem certeza?')">
            @csrf
            @method('DELETE')
                <button>deletar</button>
            </form>
        </li>
        @endforeach
    </ul>
</div>