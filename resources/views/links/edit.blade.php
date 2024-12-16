<div>
    @if ($message = session()->get('message'))
        <span class="success-message">
            {{ $message }}
        </span>
    @endif

    <h1>Editar um Link</h1>

    <form action="{{ route('links.edit', $link)}}" method="POST">
        @csrf
        @method('put')
        <div>
            <label for="link">Link</label><br>
            <input 
                type="text" 
                id="link" 
                name="link" 
                placeholder="Insira o link completo"
                value="{{ old('link', $link->link) }}"
            />
            @error('link')
                <span class="error-message" style="color: red;">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <div>
            <label for="name">Nome</label><br>
            <input 
                type="text" 
                id="name" 
                name="name" 
                placeholder="Insira o nome do link"
                value="{{ old('name', $link->name) }}"
            />
            @error('name')
                <span class="error-message" style="color: red;">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <br>
        <button type="submit">Editar</button>
    </form>
</div>
