<x-app-layout>
    <div class="container">
        <div class="profile">
            @auth
            <div class="psuedo"><p>Bonjour {{ Auth::user()->username }}</div>
            <form action="/signout" method="POST"></p>
            @csrf
            <button class="btn-message btn-rouge">Se déconnecter</button>
            </form>
            @endauth
        </div>
        <div class="blockMessage">
            <div class="textDeMessage">

            </div>
            <form id="messagerie" method="POST">
                @csrf
                <input type="text" class="chat" name="messagerie" placeholder="commencez à écrire" required>
                <button class="btn-message btn-1" type="submit">Envoyer</button>
            </form>
        </div>
    </div>
</x-app-layout>