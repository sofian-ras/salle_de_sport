@extends('base')

@section('title', 'Tarifs')

@section('content')
    <!-- Section Tarifs -->
    <section id="tarifs" class="section">
        <h2>Nos Tarifs</h2>
        <div class="tarif-container">
            <div class="tarif">
                <h3>adhésion annuelle à l'association</h3>
                <p>15€</p>
                <button class="bouton">Choisir</button>
            </div>
            <div class="tarif">
                <h3>la séance</h3><br>
                <p>10€</p>
                <button class="bouton">Choisir</button>
            </div>
            <div class="tarif">
                <h3>le carnet de 10 séances</h3>
                <p>90€</p>
                <button class="bouton">Choisir</button>
            </div>
            <div class="tarif">
                <h3>abonnement mensuel illimité sans cours</h3>
                <p>30€</p>
                <button class="bouton">Choisir</button>
            </div>
            <div class="tarif">
                <h3>abonnement mensuel illimité avec cours</h3>
                <p>60€</p>
                <button class="bouton">Choisir</button>
            </div>
        </div>
    </section>
@endsection
