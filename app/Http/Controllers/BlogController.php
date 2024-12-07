<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function sport()
    {
        $sports = [
            [
                'id' => 1,
                'title' => 'FULL DRAW: 2025 FIFA Club World Cup teams, groups unveiled',
                'image' => 'https://www.francsjeux.com/wp-content/uploads/2024/12/mail-47-e1733279451172.png',
                'description' => 'The stage is set for the 2025 FIFA Club World Cup, a groundbreaking tournament that marks the dawn of a new era in global club football.

                                The draw, held in Miami, Florida, on Thursday, revealed the fate of the 32 participating teams, showcasing an expanded format that promises to be the most competitive edition yet.

                                This was disclosed on the tournament’s website and social media pages.

                                The tournament will take place across 12 iconic stadiums in the United States from June 15 to July 13, 2025, with 63 matches culminating in the grand finale at MetLife Stadium.',
                'author' => 'Tosin Oyediran',
                'authoravatar' => 'https://media.istockphoto.com/id/637911792/photo/successful-man.jpg?s=612x612&w=0&k=20&c=IoVK9GT1NQnOzYbPO59m3JBG7rAGqRfE2BNmxrIaKZg=',
                'date' => '12/7/2024'
            ],
            [
                'id' => 2,
                'title' => 'Pourquoi le Wydad Casablanca a-t-il été invité à participer à la Coupe du Monde des Clubs de la FIFA 2022 ?',
                'image' => 'https://www.newarab.com/sites/default/files/1241009493.jpeg',
                'description' => 'Le Wydad Casablanca (Wydad AC), un club de football marocain, a participé à la Coupe du Monde des Clubs de la FIFA en 2022 en raison de sa victoire en Ligue des champions de la CAF (Confédération Africaine de Football).
                                    Voici les étapes qui ont conduit le Wydad à participer à cet événement prestigieux :
                                    Victoire en Ligue des champions de la CAF : En mai 2022, le Wydad Casablanca a remporté la Ligue des champions de la CAF (l équivalent de la Ligue des champions en Afrique) en battant l Ahly SC d Égypte en finale. Cette victoire leur a permis de se qualifier automatiquement pour la Coupe du Monde des Clubs de la FIFA 2022.
                                    Qualification pour la Coupe du Monde des Clubs : En vertu du système de qualification mis en place par la FIFA, les champions continentaux (les vainqueurs des compétitions de clubs les plus importantes de chaque confédération régionale) sont invités à participer à la Coupe du Monde des Clubs. Comme le Wydad était le champion de la CAF, il a eu sa place dans ce tournoi.
                                    Le tournoi de la Coupe du Monde des Clubs de la FIFA 2022 : Cette édition s est déroulée au Maroc en 2023, et le Wydad, en tant qu hôte et champion africain, a pu participer à cette compétition internationale aux côtés des meilleurs clubs du monde.
                                    Ainsi, la qualification du Wydad Casablanca à la Coupe du Monde des Clubs de la FIFA était due à sa performance exceptionnelle en Ligue des champions de la CAF.',
                'author' => 'Chemseddine Bouzidy',
                'authoravatar' => 'https://media.istockphoto.com/id/637911792/photo/successful-man.jpg?s=612x612&w=0&k=20&c=IoVK9GT1NQnOzYbPO59m3JBG7rAGqRfE2BNmxrIaKZg=',

                'date' => '12/7/2024'
            ],

        ];
        return view("sport", compact("sports"));
    }
}
