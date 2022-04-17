<form action="{{route('login')}}" class="log-form" method="post">
    @csrf
    <div class="errors">
        <ul>
            @if ($errors->any())
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
            @endif
        </ul>
    </div>
    <div class="inpt">
        <i class="fas fa-envelope"></i>
        <input type="email" name="email" id="email" placeholder="Ton Email" required>
        <i class="fas fa-check i"></i>
    </div>
    <div class="inpt">
        <i class="fas fa-lock"></i>
        <input type="password" name="password" id="password" placeholder="Ton Password" required>
        <i class="fas fa-check i"></i>
    </div>
    <div class="already">
        tu n'a pas un conte? <a href="{{route('register')}}">inscrire</a>
    </div>
    <div class="sub">
        <button type="submit">
            connexion
        </button>
    </div>
</form>