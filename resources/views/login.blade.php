<x-app-layout>
<div class="formdiv">
  @if(session('success'))
    <h4 id="success">
    {{session('success')}}
    </h4>
  @endif
  @if($errors->any())
  <div class="alert">
      <ul>@foreach($errors->all() as $error)
      <li>{{ $error}}</li>
      @endforeach
      </ul>
  </div>
  @endif
</div>
  <form class="box" action="/login" method="POST">
    <h1>Se connecter</h1>
    @csrf
    <input id="username" name="username" value="{{ old('username') }}" required  placeholder="Nom d'utilisateur"/>
    <input id="password" name="password" type="password" placeholder="Mot de passe"/>
    <button>Se connecter</button>
    <div class="">
      <p>Vous n'avez pas encore de compte ?</p>
    <div><a href="/signup">Créez vous un compte</a></div>
    </div>
  </form>
</x-app-layout>