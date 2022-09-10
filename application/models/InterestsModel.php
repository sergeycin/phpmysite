<?php

namespace application\models;
use application\core\Model;

class InterestsModel extends Model {
    static function getData() {	
        return [
            [
                'id' => 'favourite',
                'title' => 'My favourite',
                'picture' => 'films.jpeg',
                'desc' => 'All about my favourites. Enjoy! '
            ],
            [
                'id' => 'books',
                'title' => 'My favourite books',
                'picture' => 'book.jpeg',
                'desc' => 'Extremly enjoy reading. For a long time I was fond of foreign authors, but right now prefer to read our native, russian authors. Extremly enjoy reading. For a long time I was fond of foreign authors, but right now prefer to read our native, russian authorsExtremly enjoy reading. For a long time I was fond of foreign authors, but right now prefer to read our native, russian authors'
            ],
            [
                'id' => 'films',
                'title' => 'My favourite films',
                'picture' => 'film.jpeg',
                'desc' => 'I am obsessed with films. Too much time I spent watching all types of this kinda event. I am obsessed with films. Too much time I spent watching all types of this kinda event I am obsessed with films. Too much time I spent watching all types of this kinda event'
            ],
            [
                'id' => 'music',
                'title' => 'Music',
                'picture' => 'music.jpeg',
                'desc' => 'I am crazy about rock. Half of my life was rock.... The time of metal endurance and pshycological challenges. I am crazy about swimming. Half of my life was swimming.... The time of metal endurance and pshycological challenges.I am crazy about swimming. Half of my life was swimming.... The time of metal endurance and pshycological challenges.I am crazy about swimming. Half of my life was swimming.... The time of metal endurance and pshycological challenges.'
            ],
            [
                'id' => 'games',
                'title' => 'My favourite games',
                'picture' => 'images.jpeg',
                'desc' => 'Who plays videogames? Just a waste of time. Who plays videogames? Just a waste of time. Who plays videogames? Just a waste of time. Who plays videogames? Just a waste of time. vWho plays videogames? Just a waste of time.Who plays videogames? Just a waste of time.Who plays videogames? Just a waste of time.Who plays videogames? Just a waste of time.Who plays videogames? Just a waste of time.Who plays videogames? Just a waste of time.'
            ]
        ];
    }
   
}

?>