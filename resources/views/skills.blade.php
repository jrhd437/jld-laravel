<x-header title="Jared Leach Online"></x-header>

<div class="container">
    <main>
        <article>
            <h1>Skills</h1>

            <?php
            $card_deck = [
                [
                    'image' => 'php.png',
                    'alt' => 'PHP',
                    'title' => 'PHP 8',
                    'body' => '
                    <p>
                    I have written tens-of-thousands of lines of PHP code, starting with PHP5, and carrying on to present-day.
                    These days, I frequently write statically-typed, object-oriented PHP. On LinkedIn, my PHP knowledge was
                    tested in the top 5%.
                    </p>',
                ],
                [
                    'image' => 'laravel.png',
                    'alt' => 'Laravel',
                    'title' => 'Laravel 8',
                    'body' => '<p>
                        Laravel is a great PHP MVC framework that can help speed-up development and easily handle more complex
                        aspects of software development - like authentication and payment processing.
                    </p>'
                ],
                [
                    'image' => 'vuejs.png',
                    'alt' => 'Vue',
                    'title' => 'Vue',
                    'body' => '<p>
                        I have used Vue 2 and now, Vue 3 via CDN and CLI, for small interactive pieces of a website, as well as
                        more complex client-side applications.
                    </p>'
                ],
                [
                    'image' => 'node.png',
                    'alt' => 'NodeJS',
                    'title' => 'NodeJS',
                    'body' => '<p>
                        I have used JavaScript on the NodeJS runtime to create web applications, twitter bots, cross-platform
                        mobile applications, and more.
                    </p>'
                ],
                [
                    'image' => 'express.png',
                    'alt' => 'ExpressJS',
                    'title' => 'ExpressJS',
                    'body' => '<p>
                        I have used Express to create web applications and APIs, using JavaScript on the server for database
                        queries, routing, server-side logic, and more.
                    </p>'
                ],
                [
                    'image' => 'html5.png',
                    'alt' => 'HTML5',
                    'title' => 'HTML5',
                    'body' => '<p>
                        HTML is an fundamental technology for all web applications. I have used it extensively, starting with HTML4
                        back in the early 2000s.
                    </p>'
                ],
                [
                    'image' => 'css3.png',
                    'alt' => 'CSS3',
                    'title' => 'CSS3',
                    'body' => '<p>
                        CSS is another fundamental technology for web applications. I have used CSS since the early 2000s when float-
                        and-clear were the norm. On LinkedIn, my CSS knowledge was tested in the top 5%.
                    </p>'
                ],
                [
                    'image' => 'sass.png',
                    'alt' => 'Sass',
                    'title' => 'Sass',
                    'body' => '<p>
                        I frequently use Sass for both custom CSS and for customizing CSS frameworks like Bootstrap.
                    </p>'
                ],
                [
                    'image' => 'sql.png',
                    'alt' => 'MySQL',
                    'title' => 'Relational Database and SQL',
                    'body' => '<p>
                        Whether for MySQL, MariaDB, PostgreSQL, MDB files, or SQLite, SQL is used extensively is modern web applications
                        and I have used it for many years.
                    </p>'
                ],
                [
                    'image' => 'git.png',
                    'alt' => 'Git',
                    'title' => 'Git',
                    'body' => '<p>
                        Git, for version control, is something I use for nearly every project.
                    </p>'
                ],
                [
                    'image' => 'linux.png',
                    'alt' => 'Linux',
                    'title' => 'Linux',
                    'body' => '<p>
                        I have used Linux extensively on the server/VM and the desktop.
                    </p>'
                ],
            ];
            ?>

            @foreach($card_deck as $card)
            <x-card :info="$card" />
            @endforeach




        </article>
    </main>

    <x-footer></x-footer>