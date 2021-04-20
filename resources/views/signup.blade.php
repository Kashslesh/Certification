<x-app-layout>
  <div class="formdiv">
    @if($errors->any())
    <div class="alert">
      <ul>@foreach($errors->all() as $error)
        <li>{{ $error}}</li>
        @endforeach
      </ul>
    </div>
    @endif
  </div>
  <form class="box" action="/signup" method="POST" >
    <h1>S'inscrire</h1>
    @csrf
    <input id="username" name="username" value="{{ old('username') }}" required  placeholder="Nom d'utilisateur"/>
    <input id="email" name="email" type="email" required placeholder="Email" />
    <input id="password" name="password" type="password" required placeholder="Mot de passe"/>
    <input id="password_confirmation" name="password_confirmation" type="password" required placeholder="Confirmez votre mot de passe"/>
    <button type="submit">S'enregistrer</button>
  </form>
</x-app-layout>