<?php

use Illuminate\Database\Seeder;
use App\Videogames;

class VideogamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrVideogames = [
            [
                "title" => "Lost Ark",
                "description" => "Lost Ark is a top-down 2.5D fantasy massively multiplayer online action role-playing game (MMOARPG). It is co-developed by Tripod Studio and Smilegate's game development subsidiary Smilegate RPG. It was fully released in the South Korean region on December 4, 2019. The game was also released in North America, South America, and Europe on February 11, 2022, where it is published by Amazon Games. Within twenty-four hours of release, it became the second most played game on Steam. Lost Ark won six game awards in various categories at the Korea Game Awards 2019. Developing the game cost about $85.4 million.",
                "type" => "RPG",
                "price" => "9.99",
                "series" => "Action Comics",
            ], 
            [
                "title" => "Lost Ark",
                "description" => "Lost Ark is a top-down 2.5D fantasy massively multiplayer online action role-playing game (MMOARPG). It is co-developed by Tripod Studio and Smilegate's game development subsidiary Smilegate RPG. It was fully released in the South Korean region on December 4, 2019. The game was also released in North America, South America, and Europe on February 11, 2022, where it is published by Amazon Games. Within twenty-four hours of release, it became the second most played game on Steam. Lost Ark won six game awards in various categories at the Korea Game Awards 2019. Developing the game cost about $85.4 million.",
                "type" => "RPG",
                "price" => "9.99",
                "series" => "Action Comics",
            ], 
            [
                "title" => "Lost Ark",
                "description" => "Lost Ark is a top-down 2.5D fantasy massively multiplayer online action role-playing game (MMOARPG). It is co-developed by Tripod Studio and Smilegate's game development subsidiary Smilegate RPG. It was fully released in the South Korean region on December 4, 2019. The game was also released in North America, South America, and Europe on February 11, 2022, where it is published by Amazon Games. Within twenty-four hours of release, it became the second most played game on Steam. Lost Ark won six game awards in various categories at the Korea Game Awards 2019. Developing the game cost about $85.4 million.",
                "type" => "RPG",
                "price" => "9.99",
                "series" => "Action Comics",
            ], 
            [
                "title" => "Lost Ark",
                "description" => "Lost Ark is a top-down 2.5D fantasy massively multiplayer online action role-playing game (MMOARPG). It is co-developed by Tripod Studio and Smilegate's game development subsidiary Smilegate RPG. It was fully released in the South Korean region on December 4, 2019. The game was also released in North America, South America, and Europe on February 11, 2022, where it is published by Amazon Games. Within twenty-four hours of release, it became the second most played game on Steam. Lost Ark won six game awards in various categories at the Korea Game Awards 2019. Developing the game cost about $85.4 million.",
                "type" => "RPG",
                "price" => "9.99",
                "series" => "Action Comics",
            ], 
            [
                "title" => "Lost Ark",
                "description" => "Lost Ark is a top-down 2.5D fantasy massively multiplayer online action role-playing game (MMOARPG). It is co-developed by Tripod Studio and Smilegate's game development subsidiary Smilegate RPG. It was fully released in the South Korean region on December 4, 2019. The game was also released in North America, South America, and Europe on February 11, 2022, where it is published by Amazon Games. Within twenty-four hours of release, it became the second most played game on Steam. Lost Ark won six game awards in various categories at the Korea Game Awards 2019. Developing the game cost about $85.4 million.",
                "type" => "RPG",
                "price" => "9.99",
                "series" => "Action Comics",
            ], 
        ];    


        foreach($arrVideogames as $videogamesData){
            Videogames::create($videogamesData);
        }
    }
}
