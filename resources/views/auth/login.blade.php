<div>
    {{auth()->id()}}
    <h1>
        Login
    </h1>

    @if($message = session()->get('message'))
        <span>
            {{$message}}
        </span>
    @endif

    <form action="/login" method="post">
        @csrf
        <div>
            @error('email')
                <span>{{$message}}</span>
            @enderror
            <input type="text" name="email" placeholder="Email" />

        </div>
        <br>
        <div>
            @error('password')
            <span>{{$message}}</span>
            @enderror
            <input type="password" name="password" placeholder="Senha">

        </div>

        <button type="submit">Logar</button>
    </form>
</div>