<div class="col-md-3">
    <div class="form-group ">
        <label for="vc_nomeUtilizador">{{ __('Nome') }}</label>
        <input value="{{ isset($user->vc_nomeUtilizador) ? $user->vc_nomeUtilizador : '' }}" id="vc_nomeUtilizador"
            type="text" class="form-control @error('vc_nomeUtilizador') is-invalid @enderror border-secondary"
            name="vc_nomeUtilizador" placeholder="Utilizador" value="{{ old('vc_nomeUtilizador') }}" required
            autocomplete="vc_nomeUtilizador" autofocus>

        @error('vc_nomeUtilizador')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="col-md-4">
    <label for="vc_tipoUtilizador">{{ __('Nivel') }}</label>
    <select type="text" class="form-control border-secondary" name="vc_tipoUtilizador" required>
        @isset($user)
            <option value="{{ isset($user->vc_tipoUtilizador) ? $user->vc_tipoUtilizador : '' }}">
                {{ $user->vc_tipoUtilizador }}</option>
        @else
            <option disabled value="" selected>selecione o nível de acesso</option>
        @endisset
        @if (Auth::user()->vc_tipoUtilizador == 'Administrador')
            @foreach (['Administrador', 'Supervisor', 'Suplente'] as $item)
                @if (isset($user->vc_tipoUtilizador))
                    @if ($user->vc_tipoUtilizador != $item)
                        <option value="{{ $item }}">{{ $item }}</option>
                    @endif
                @else
                    <option value="{{ $item }}">{{ $item }}</option>
                @endif
            @endforeach
        @endif
    </select>
</div>

<div class="col-md-2">
    <div class="form-group ">
        <label for="vc_telefone">{{ __('Telefone') }}</label>
        <input value="{{ isset($user->vc_telefone) ? $user->vc_telefone : '' }}" id="vc_tipoUtilizador"
            id="vc_telefone" placeholder="Telefone" type="number" min="900000000"
            class="form-control @error('vc_telefone') is-invalid @enderror border-secondary" name="vc_telefone"
            value="{{ old('vc_telefone') }}" required autocomplete="vc_telefone" autofocus>

        @error('vc_telefone')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
<div class="col-md-2">
    <label for="vc_genero">{{ __('Genero') }}</label>
    <select type="text" class="form-control border-secondary" name="vc_genero" required>
        @isset($user)
            <option value="{{ isset($user->vc_genero) ? $user->vc_genero : '' }}">{{ $user->vc_genero }}</option>
        @else
            <option disabled value="" selected>selecione o gênero</option>
        @endisset
        @foreach (['Masculino', 'Feminino'] as $item)
            @if (isset($user->vc_genero))
                @if ($user->vc_genero != $item)
                    <option value="{{ $item }}">{{ $item }}</option>
                @endif
            @else
                <option value="{{ $item }}">{{ $item }}</option>
            @endif
        @endforeach
        {{-- <option value="Feminino">Feminino</option> --}}
    </select>
</div>

<div class="col-md-4">
    <div class="form-group ">
        <label for="email">{{ __('Email') }}</label>
        <input value="{{ isset($user->vc_email) ? $user->vc_email : '' }}" id="email" type="email"
            placeholder="Email@gmail.com" class="form-control @error('email') is-invalid @enderror border-secondary"
            name="vc_email" value="{{ old('vc_email') }}" required autocomplete="vc_email">

        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="col-md-2">
    <div class="form-group ">
        <label for="password">{{ __('Senha') }}</label>
        <input id="password" type="password"
            class="form-control @error('password') is-invalid @enderror border-secondary" placeholder="Senha"
            name="password" required autocomplete="new-password">

        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="col-md-2">
    <div class="form-group ">
        <label for="password-confirm">{{ __('Confirmar a senha') }}</label>
        <input id="password-confirm" type="password" class="form-control border-secondary" name="password_confirmation"
            required placeholder="Confirmar a senha" autocomplete="new-password">
    </div>
</div>
