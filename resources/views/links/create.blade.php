<div>
    <h1>Criar um Link</h1>
    <form action="{{ route('links.create') }}" method="post">
        @csrf
        <div>
            <label for="link">Link</label><br>
            <input type="text" id="link" name="link" placeholder="link" value="{{ old('link') }}"/>
            @error('link')
                <span style="color: red;">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="name">Nome</label><br>
            <input type="text" id="name" name="name" value="{{ old('name') }}"/>
            @error('name')
                <span style="color: red;">{{ $message }}</span>
            @enderror
        </div>
        <br>
        <button type="submit">Registrar</button>
    </form>
</div>
