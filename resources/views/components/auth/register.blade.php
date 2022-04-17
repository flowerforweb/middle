<form action="{{route('register')}}" class="reg-form" method="post">
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
    <input type="hidden" name="type">
    <div class="inpt">
        <i class="fas fa-user"></i>
        <input type="text" name="name" id="name" placeholder="Ton Nom" required>
        <span style="font-family : cursive">X</span>
    </div>
    <div class="inpt">
        <i class="fas fa-envelope"></i>
        <input type="email" name="email" id="email" placeholder="Ton Email" required>
        <i class="fas fa-check i"></i>
    </div>
    <select name="grade" style="background:none;border: none;outline:none">
        <option value="" selected disabled>chose a grade</option>
        <option value="2">2eme</option>
        <option value="3">3eme</option>
    </select>
    <div class="inpt">
        <i class="fas fa-lock"></i>
        <input type="password" name="password" id="password" placeholder="Ton Password" required>
        <i class="fas fa-check i"></i>
    </div>
    <div class="inpt">
        <i class="fas fa-lock"></i>
        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" required>
        <i class="fas fa-check i"></i>
    </div>
    <div class="already">
        tu a un conte? <a href="{{route('login')}}">connexion</a>
    </div>
    <div class="sub">
        <button type="submit">
            inscrire
        </button>
    </div>
</form>