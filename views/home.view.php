<?php
/** @var \App\Template $this */
/** @var string|null $success */
/** @var array<string, array<string>> $errors */

$this->extend('layout');
?>

<?php $this->start('title', 'Welcome') ?>

<section class="hero section-padding">
    <div class="container">
        <h1>Velkommen til min Portfolio<span class="accent">Multimedia Designer</span></h1>
        <p class="tagline">Kreativ kode, design og idéudvikling alt samlet ét sted</p>
        <a href="/contact" class="button">Kontakt mig her</a>
    </div>
</section>

<section class="intro section-padding">
    <div class="container">
        <div class="intro-content">
            <div class="intro-text">
                <h2 class="section-heading">Om mig</h2>
                <p>Jeg er multimediedesignstuderende med en passion for at skabe digitale løsninger,
                    der kombinere funktionalitet, design samt brugeroplevelse.
                    Jeg har arbejdet med Adobe After Effects, hvor jeg skaber animationer og visuelle effekter.
                   jeg har også arbejdet med Figma, hvor jeg udvikler prototyper med fokus på brugervenlighed.
                    Med erfaring i HTML og CSS kan jeg føre projekter hele vejen fra idé til færdig, responsiv løsning.
                </p>

            </div>
            <div class="intro-image">
                <img src="images/billede.png" alt="Headshot of Abigail looking happy" class="profile-image">
            </div>
        </div>
    </div>
</section>

<section class="quick-links section-padding">
    <div class="container">
        <h2 class="section-heading">Se mere</h2>
        <div class="links-grid">
            <a href="/projects" class="link-card">
                <h3>Projects</h3>
                <p>Se eksempler på mine projekter</p>
            </a>
            <a href="/about" class="link-card">
                <h3>Om</h3>
                <p>Min baggrund og skills</p>
            </a>
            <a href="/contact" class="link-card">
                <h3>Kontakt</h3>
                <p>Book et møde, så kan vi sætte gang i dit projekt!</p>
            </a>
        </div>
    </div>
</section>
