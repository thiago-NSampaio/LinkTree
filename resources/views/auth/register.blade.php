<div>
{{auth()->id()}}

    <form action="/register" method="post">
        @csrf
        <div>
            <label for="name">Nome</label><br>
            <input type="text" id="name" name="name" value="{{ old('name') }}"/>
            @error('name')
                <span style="color: red;">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="email">Email</label><br>
            <input type="text" id="email" name="email" placeholder="Email" value="{{ old('email') }}"/>
            @error('email')
                <span style="color: red;">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="email_confirmation">Confirmação de Email</label><br>
            <input type="text" id="email_confirmation" name="email_confirmation" value="{{ old('email_confirmation') }}"/>
            @error('email_confirmation')
                <span style="color: red;">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="password">Senha</label><br>
            <input type="password" id="password" name="password" placeholder="Senha">
            @error('password')
                <span style="color: red;">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="password_confirmation">Confirmação de Senha</label><br>
            <input type="password" id="password_confirmation" name="password_confirmation"/>
            @error('password_confirmation')
                <span style="color: red;">{{ $message }}</span>
            @enderror
        </div>

        <br>
        <button type="submit">Registrar</button>
    </form>
</div>
