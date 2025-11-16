<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Controller;
use App\Dto\ProjectDto;
use App\Http\Request;
use App\Http\Response;

/**
 * Controller for handling requests to the projects page.
 *
 * Provides actions for rendering the projects page with a list of projects.
 */
class ProjectController extends Controller
{
    /**
     * Show the projects page.
     * Renders the 'projects' view with a list of projects.
     *
     * @param Request $request The current HTTP request instance.
     * @return Response
     */
    public function index(Request $request): Response
    {
        $response = new Response();
        $response->setTemplate($this->template, 'projects', [
            ...$this->pullFlash($response),
            'request' => $request,
            'projects' => $this->getProjects(),
        ]);
        return $response;
    }

    /**
     * Get list of projects to display.
     *
     * @return array<int, ProjectDto>
     */
    private function getProjects(): array
    {
        return [
            new ProjectDto(
                title: 'Portfolio Website',
                description: 'Denne hjemmeside er fra mit 1. semester eksamenprojekt. Det gik ud på at jeg skulle lave en hjemmeside til mennesker på 60+ som har til funktion at hjælpe dem med at spotte fake news.',
                technologies: 'HTML5, CSS, Responsive Design, Bootstrap, Javascript',
                image: 'images/Faktatjek.png',
                code: 'https://github.com/madh-zealand/2sem-codetrack-01-portfolio',
                link: 'https://testfaktatjek.sb98.dk/',
            ),
            new ProjectDto(
                title: 'Gæstebog',
                description: 'Jeg har personliggjort gæstebogen ved at opdatere teksterne og ændre designet, så den passer bedre til mig. Derudover har jeg tilføjet et ekstra felt, som både valideres, gemmes i databasen og huskes via en cookie. Jeg har også udvidet visningen, så det nye felt vises sammen med beskederne. Til sidst har jeg lavet en funktion, der automatisk konverterer tekstbaserede smileys til emojis, når beskederne vises.',
                technologies: 'PHP, MySQL, CSS Grid/Flexbox, Form Validation',
                image: 'images/projects/Guestbook.png',
                code: 'https://github.com/shb1999/Guestbook.git',
                link: 'https://guestbook.sb98.dk/',
            ),
            new ProjectDto(
                title: 'Style switcher',
                description: 'Jeg har tilføjet et nyt tema ved at oprette .theme-forest med egne farvevariabler og knap-styling samt registreret temaet i JavaScript. Derudover har jeg lavet et nyt HTML-element, som skifter farver efter det aktive tema ved hjælp af CSS-variablerne. Elementet følger således sidens tema og kan også indeholde sin egen custom styling. Til sidst har jeg tilføjet en tæller i JavaScript, som holder styr på, hvor mange gange temaet er blevet skiftet.',
                technologies: 'JavaScript, HTML Canvas, CSS Animations',
                image: 'images/projects/styleswitcher.png',
                code: 'https://github.com/shb1999/Style-Switcher',
                link: 'https://styleswitcher.sb98.dk/',
            ),
             new ProjectDto(
                 title: 'A/B test',
                 description: 'Jeg har lavet en A/B-test på knapperne, så de vises i forskellige udgaver med varieret farve og tekst. I en normal browser gemmes den viste udgave i en cookie, men i inkognito kan der vises en anden version, fordi der ikke lagres cookies.',
                 technologies: 'JavaScript, HTML Canvas, CSS Animations',
                 image: 'images/projects/ABtest.png',
                 code: 'https://github.com/shb1999/abtest.git',
                 link: 'https://abtest.sb98.dk/',
             ),
             new ProjectDto(
                 title: 'Projectpræsentation',
                 description: '',
                 technologies: 'JavaScript, HTML Canvas, CSS Animations',
                 image: 'images/projects/styleswitcher.png',
                 code: 'https://github.com/shb1999/presentation.git',
                 link: 'https://presentation.sb98.dk/',
             ),

             new ProjectDto(
                 title: 'MiniCRM',
                 description: '',
                 technologies: 'JavaScript, HTML Canvas, CSS Animations',
                 image: 'images/projects/Minicrm.png',
                 code: 'https://github.com/shb1999/mini-crm.git',
                 link: 'https://mini-crm.sb98.dk/login',
             ),

             new ProjectDto(
                 title: 'UI-widget',
                 description: '',
                 technologies: 'JavaScript, HTML Canvas, CSS Animations',
                 image: 'images/projects/styleswitcher.png',
                 code: 'https://github.com/shb1999/widget.git',
                 link: 'https://widget.sb98.dk/',
             ),

            new ProjectDto(
                title: 'Webspil',
                description: '',
                technologies: 'JavaScript, HTML Canvas, CSS Animations',
                image: 'images/projects/Webspil.png',
                code: 'https://github.com/shb1999/webspil',
                link: 'https://webspil.sb98.dk/',
            ),

            new ProjectDto(
                title: 'Storyboard fremviser',
                description: '',
                technologies: 'JavaScript, HTML Canvas, CSS Animations',
                image: 'images/projects/Storyboard.png',
                code: 'https://github.com/shb1999/Storyboard-fremviser.git',
                link: 'https://storyboard-fremviser.sb98.dk/',
            )



        ];
    }
}
