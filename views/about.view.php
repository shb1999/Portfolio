<?php
/** @var \App\Template $this */
/** @var string|null $success */
/** @var array<string, array<string>> $errors */

$this->extend('layout');
?>

<?php $this->start('title', 'About Me') ?>

<section class="page-header">
    <div class="container">
        <h1 class="page-heading">
            Om mig
        </h1>
        <p class="page-intro">
            Dyk ned i min verden af webudvikling, hvor kreativitet møder kode. Jeg brænder for at skabe elegante løsninger på komplekse udfordringer.
        </p>
    </div>
</section>

<section class="bio">
    <div class="container">
        <div class="about-content">
            <div class="about-text">
                <h2 class="section-heading">Om mig</h2>
                <p>
                    Jeg er en passioneret webudvikler med fokus på at bygge rene, effektive og brugervenlige applikationer.
                    Jeg har altid haft stor interesse for kodning og design. Jeg bruger meget af min fritid på at udvikle mig på det punkt,
                    og blive endnu bedre.
                </p>
                <p>
                    Jeg er interesseret i en masse sport, som jeg også bruger en del tid på i min fritid
                </p>

            </div>

            <div class="about-image">
                <img src="images/billede.png" alt="Headshot of Abigail looking suspicious" class="portrait-image">
            </div>
        </div>
    </div>
</section>

<section class="skills section-padding">
    <div class="container">
        <h2 class="section-heading">Skills</h2>
        <div class="skill-items">
            <span class="skill-tag">HTML</span>
            <span class="skill-tag">CSS</span>
            <span class="skill-tag">UX/UI design</span>
            <span class="skill-tag">After effects</span>
            <span class="skill-tag">Projekthåndtering og samarbejde</span>
            <span class="skill-tag">Kommunikation</span>
            <span class="skill-tag">Grafisk Design</span>
        </div>
    </div>
</section>
