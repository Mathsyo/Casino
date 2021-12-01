<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CasinoController extends Controller {

    public function index() {
        
        $games = [
            [
                'name' => 'Black Jack',
                'description' => 'Black Jack is a casino game that is played by two or more players, who take turns dealing cards to each other until one player or both players have 21 points or more.',
                'image' => 'https://clipground.com/images/blackjack-png-19.png',
            ],
            [
                'name' => 'Poker',
                'description' => 'Poker is a card game where players compete against one another by betting money on a card.',
                'image' => 'https://clipground.com/images/poker-png-1.png',
            ],
            [
                'name' => 'Roulette',
                'description' => 'Roulette is a casino game in which a player places a bet on a wheel of a roulette wheel and is paid out according to the result of the spin.',
                'image' => 'https://clipground.com/images/roulette-png-1.png',
            ],
            [
                'name' => 'Baccarat',
                'description' => 'Baccarat is a casino game where players bet on a pair of dice and the outcome is decided by the sum of the dice.',
                'image' => 'http://jqk96kh.com/wp-content/uploads/2020/03/baccarat.png',
            ],
            [
                'name' => 'Pai Gow',
                'description' => 'Pai Gow is a casino game in which players bet on a card and the outcome is decided by the rank of the card.',
                'image' => 'http://www.luckyeagle.com/sites/default/files/empchal-feature.png',
            ],
            [
                'name' => 'Wheel of Fortune',
                'description' => 'Wheel of Fortune is a casino game where players bet on a prize and the outcome is decided by the spin of the wheel.',
                'image' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ffree-spins.net%2Fwp-content%2Fuploads%2F2015%2F11%2FWheel-Of-Fortune.png&f=1&nofb=1',
            ],
            [
                'name' => 'Craps',
                'description' => 'Craps is a game where players bet on the outcome of a roll of the dice.',
                'image' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.feedbackcasino.com%2Fimages%2Fgames%2Fbetsoft%2Fcraps%2Fcraps_logo.png&f=1&nofb=1',
            ],
            [
                'name' => 'Chess',
                'description' => 'Chess is a game played by two players on a board with 64 squares arranged in a 8x8 grid.',
                'image' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fcdn1.iconfinder.com%2Fdata%2Ficons%2Fgaming-game-and-casino-gambling-vol-15%2F48%2Fcasino_gaming_chess_gambling_roulette_games_-_27-512.png&f=1&nofb=1',
            ],
            [
                'name' => 'Monopoly',
                'description' => 'Monopoly is a casino game in which players bet on the outcome of a game of Monopoly.',
                'image' => 'https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fmonopoly-slot.com%2Fwp-content%2Fuploads%2F2017%2F03%2Flogo-monopoly.png&f=1&nofb=1',
            ],
            [
                'name' => 'Tombola',
                'description' => 'Tombola is a game where players bet on a prize and the outcome is decided by a random draw of a prize.',
                'image' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fcasinofia.se%2Fwp-content%2Fuploads%2Fbethard-logo.png&f=1&nofb=1',
            ],
            [
                'name' => 'Scratch Cards',
                'description' => 'Scratch Cards is a game where players scratch cards',
                'image' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fcasinogames.guide%2Fwp-content%2Fuploads%2F2019%2F03%2FScratchcards.png%3F7221df%267221df&f=1&nofb=1',
            ]

        ];
        return view('casino.index', compact('games'));

    }

}
