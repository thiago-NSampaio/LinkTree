<div>
    <h1>Dashboard</h1>

    <ul>
        @foreach($links as $link)
        <li>
            <a href="/links/{{$link->id}}/edit">{{$link->name}}</a>
        </li>
        @endforeach
    </ul>
</div>