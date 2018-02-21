@extends('layouts.master')

    @section('title')
        Bienvenue sur Seecretspot - Connectez-vous
        @stop


    @section('content')

        <div class="col-lg-offset-3 col-lg-6 col-lg-offset-3 col-md-offset-3 col-md-6 col-md-offset-3 col-sm-offset-3 col-sm-6 col-sm-offset-3">
            <h1 id="titre-inscription">Inscription</h1>
            <form method="post" action="{{route('signup')}}" class="well" id="font-inscription">
                <fieldset>
                    <label for="email"> Email </label>
                    <input id="email" type="text" name ="email" class="form-control" placeholder="Ex: jeanmicheldu74@gmail.com" required>
                    <label for="nom"> Prenom </label>
                    <input id="nom" type="text" name = "first_name" class="form-control" placeholder="Ex: Bob l'éponge">
                    <label for="nom"> Nom </label>
                    <input id="nom" type="text" name = "last_name" class="form-control" placeholder="Ex: Bob l'éponge">
                    <label for="nomutilisateur"> Nom d'utilisateur </label>
                    <input id="nomutilisateur" type="text" name = "login" class="form-control" placeholder="Ex: JeanKevin74" required>
                    <label for="listpays"> Pays d'origine </label>
                    <select class="form-control" id="listpays" name = "country" ></select>
                    <label for="password"> Mot de passe </label>
                    <input id="password" type="password" name= "password" class="form-control" required >
                    <br />
                    <input type="submit" value="Envoyer" id="bouton-inscription"/>

                    <input type="checkbox" required> J'accepte
                    {{ csrf_field() }}
                </fieldset>
            </form>

        </div>
        @stop

