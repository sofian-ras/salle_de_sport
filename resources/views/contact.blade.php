@extends('base')

@section('title', 'Contact')

@section('content')
    <!-- Section Contact -->
    <section id="contact" class="section">
        <h2>Contactez-nous</h2>

        <!-- Adresse -->
        <div class="contact-info">
            <h3>Notre adresse :</h3>
            <p>123 Rue de la Musculation, 75000 Paris, France</p>
        </div>

        <!-- Google Maps iframe -->
        <div class="map-container">
            <h3>Nous trouver :</h3>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.9984182764685!2d2.292292015674168!3d48.85884417928781!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e671d179d888ad%3A0x1b6db8c95fa5ed7!2sEiffel%20Tower!5e0!3m2!1sen!2sfr!4v1634517843489!5m2!1sen!2sfr"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </section>
@endsection
