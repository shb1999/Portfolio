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
                title: 'Digital Guestbook',
                description: 'An interactive guestbook application that allows visitors to leave messages and engage with the community. Features user-friendly forms with validation, spam protection, and a clean interface. Messages are stored securely and displayed in a paginated format.',
                technologies: 'PHP, MySQL, CSS Grid/Flexbox, Form Validation',
                image: 'images/projects/guestbook.jpg',
                code: 'https://github.com/madh-zealand/tba',
                link: 'https://guestbook.sb98.dk/',
            ),
            new ProjectDto(
                title: 'Style switcher',
                description: 'A fun and engaging browser-based game built with vanilla JavaScript. Implements game mechanics using the requestAnimationFrame API, features smooth animations, collision detection, and a scoring system. Demonstrates strong understanding of DOM manipulation and event handling.',
                technologies: 'JavaScript, HTML Canvas, CSS Animations',
                image: 'images/projects/styleswitcher.png',
                code: 'https://github.com/madh-zealand/tba',
                link: 'https://styleswitcher.sb98.dk/',
            ),
             new ProjectDto(
                 title: 'A/B test',
                 description: 'A fun and engaging browser-based game built with vanilla JavaScript. Implements game mechanics using the requestAnimationFrame API, features smooth animations, collision detection, and a scoring system. Demonstrates strong understanding of DOM manipulation and event handling.',
                 technologies: 'JavaScript, HTML Canvas, CSS Animations',
                 image: 'images/projects/styleswitcher.png',
                 code: 'https://github.com/madh-zealand/tba',
                 link: 'https://abtest.sb98.dk/',
             ),
             new ProjectDto(
                 title: 'Projectpræsentation',
                 description: 'A fun and engaging browser-based game built with vanilla JavaScript. Implements game mechanics using the requestAnimationFrame API, features smooth animations, collision detection, and a scoring system. Demonstrates strong understanding of DOM manipulation and event handling.',
                 technologies: 'JavaScript, HTML Canvas, CSS Animations',
                 image: 'images/projects/styleswitcher.png',
                 code: 'https://github.com/madh-zealand/tba',
                 link: 'https://presentation.sb98.dk/',
             ),

             new ProjectDto(
                 title: 'MiniCRM',
                 description: 'A fun and engaging browser-based game built with vanilla JavaScript. Implements game mechanics using the requestAnimationFrame API, features smooth animations, collision detection, and a scoring system. Demonstrates strong understanding of DOM manipulation and event handling.',
                 technologies: 'JavaScript, HTML Canvas, CSS Animations',
                 image: 'images/projects/styleswitcher.png',
                 code: 'https://github.com/madh-zealand/tba',
                 link: 'https://mini-crm.sb98.dk/login',
             ),

             new ProjectDto(
                 title: 'UI-widget',
                 description: 'A fun and engaging browser-based game built with vanilla JavaScript. Implements game mechanics using the requestAnimationFrame API, features smooth animations, collision detection, and a scoring system. Demonstrates strong understanding of DOM manipulation and event handling.',
                 technologies: 'JavaScript, HTML Canvas, CSS Animations',
                 image: 'images/projects/styleswitcher.png',
                 code: 'https://github.com/madh-zealand/tba',
                 link: 'https://widget.sb98.dk/',
             ),

            new ProjectDto(
                title: 'Webspil',
                description: 'A fun and engaging browser-based game built with vanilla JavaScript. Implements game mechanics using the requestAnimationFrame API, features smooth animations, collision detection, and a scoring system. Demonstrates strong understanding of DOM manipulation and event handling.',
                technologies: 'JavaScript, HTML Canvas, CSS Animations',
                image: 'images/projects/styleswitcher.png',
                code: 'https://github.com/madh-zealand/tba',
                link: 'https://webspil.sb98.dk/',
            ),

            new ProjectDto(
                title: 'Storyboard fremviser',
                description: 'A fun and engaging browser-based game built with vanilla JavaScript. Implements game mechanics using the requestAnimationFrame API, features smooth animations, collision detection, and a scoring system. Demonstrates strong understanding of DOM manipulation and event handling.',
                technologies: 'JavaScript, HTML Canvas, CSS Animations',
                image: 'images/projects/styleswitcher.png',
                code: 'https://github.com/madh-zealand/tba',
                link: 'https://storyboard-fremviser.sb98.dk/',
            )



        ];
    }
}
