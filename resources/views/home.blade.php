@extends('base')

@section('content')
    <!-- Section Bannière -->
    <section id="banniere" class="banniere">
        <div class="contenu-banniere">
            <h1>Transformez votre corps, dépassez vos limites !</h1>
            <p>Rejoignez-nous pour atteindre vos objectifs et révéler votre plein potentiel.</p>
            <a href="{{ route('tarifs') }}" class="bouton">Voir les Tarifs</a>
        </div>
    </section>

    <!-- Section Messages Motivants -->
    <section id="motivation" class="section-motivation">
        <h2>Motivation du Jour</h2>
        <div class="cartes-motivation">
            <div class="carte-motivation">
                <img src="/images/sportif3.jpg" alt="Force et Persévérance" class="image-motivation">
                <h3>La Force est en Vous</h3>
                <p>Atteindre vos objectifs demande de la persévérance. Chaque entraînement vous rapproche un peu plus de la meilleure version de vous-même.</p>
            </div>
            <div class="carte-motivation">
                <img src="/images/sportif1.jpg" alt="Endurance" class="image-motivation">
                <h3>Repoussez vos Limites</h3>
                <p>Chaque jour est une nouvelle opportunité pour tester vos limites et repousser les barrières. Votre endurance est sans limites !</p>
            </div>
            <div class="carte-motivation">
                <img src="/images/sportif2.jpg" alt="Focus et Discipline" class="image-motivation">
                <h3>Focus et Discipline</h3>
                <p>La discipline est la clé du succès. Restez concentré sur votre objectif, et vous accomplirez des choses incroyables.</p>
            </div>
        </div>
    </section>

    <!-- Section Aperçu des Cours -->
    <section id="aperçu-cours" class="section-apercu">
        <h2>Nos Cours Populaires</h2>
        <div class="cartes-apercu">
            <div class="carte-apercu">
                <img src="/images/yoga.jpg" alt="Fitness et Bien-être" class="image-apercu">
                <h3>Fitness et Bien-être</h3>
                <p>Des exercices adaptés pour tonifier votre corps et retrouver la forme.</p>
                <a href="{{ route('tarifs') }}" class="bouton">Voir les Tarifs</a>
            </div>
            <div class="carte-apercu">
                <img src="/images/yoga_femme.jpg" alt="Yoga et Relaxation" class="image-apercu">
                <h3>Yoga et Relaxation</h3>
                <p>Améliorez votre souplesse et apaisez votre esprit avec nos séances de yoga.</p>
                <a href="{{ route('tarifs') }}" class="bouton">Voir les Tarifs</a>
            </div>
        </div>
    </section>
@endsection
