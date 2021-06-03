<x-header title="Jared Leach Online"></x-header>

<div class="container">
    <main>
        <article>
            <h1>Education</h1>

            <?php
            $card_deck = [
                [
                    'image' => 'rsc.png',
                    'alt' => 'Rose State College',
                    'title' => 'AAS, Web Development Technology',
                    'body' => '<p>
                    In 2011 I graduated from Rose State College with an Associate of Applied Science
                    degree in Web Development Technology. Classes included script programming,
                    advanced digital imaging, e-commerce, object-oriented programming, project management,
                    and more.</p>',
                ],
                [
                    'image' => 'lu.jpg',
                    'alt' => 'Liberty University',
                    'title' => 'BS, Computational Science and Business',
                    'body' => '<p>
                        In 2021 I graduated with a Bachelor of Science degree from Liberty University
                        in multidisciplinary studies with cognates in computational science and business.
                        Classes included PHP/MySQL, JavaScript/NodeJS, business communication, and more.
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