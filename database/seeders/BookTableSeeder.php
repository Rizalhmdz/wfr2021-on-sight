<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $books = [
        //     [
        //         'title' => "The Last Professional",
        //         'slug' => "the-last-professional",
        //         'cover' => "The Last Professional.jpg",
        //         'author' => "Ed Davis",
        //         'category' => "literary",
        //         'price' => 150000,
        //         'description' => "Returning to the rails fifteen years after the childhood trauma that haunts him, young Lynden Hoover gets help from The Duke, an old hobo who calls America's landscape his home, adheres to an honor code, but is fleeing Short Arm, his merciless enemy. The Duke mentors Lynden, enlisting old Knights of the Road to keep himself and his apprentice safe. When Short Arm murders two of them, the stakes suddenly escalate to life or death.",
        //         'publisher' => "Artemesia Publishing, LLC",
        //         'publish_date' => Carbon::parse('25-01-2022'),
        //         'pages' => 250,
        //         'language' => "English"

        //     ],
        //     [
        //         'title' => "The Overstory",
        //         'slug' => "the-overstory",
        //         'cover' => "The Overstory.jpg",
        //         'author' => "Powers, Richard",
        //         'category' => "literary",
        //         'price' => 344000,
        //         'description' => "The Overstory, winner of the 2019 Pulitzer Prize in Fiction, is a sweeping, impassioned work of activism and resistance that is also a stunning evocation of--and paean to--the natural world. From the roots to the crown and back to the seeds, Richard Powers's twelfth novel unfolds in concentric rings of interlocking fables that range from antebellum New York to the late twentieth-century Timber Wars of the Pacific Northwest and beyond. There is a world alongside ours--vast, slow, interconnected, resourceful, magnificently inventive, and almost invisible to us. This is the story of a handful of people who learn how to see that world and who are drawn up into its unfolding catastrophe.",
        //         'publisher' => "W W NORTON & CO",
        //         'publish_date' => Carbon::parse('04-02-2019'),
        //         'pages' => 512,
        //         'language' => "English"

        //     ],
        //     [
        //         'title' => "The Alchemist",
        //         'slug' => "the-alchemist",
        //         'cover' => "The Alchemist.jpg",
        //         'author' => "Coelho, Paulo",
        //         'category' => "literary",
        //         'price' => 311000,
        //         'description' => "Paulo Coelho's enchanting novel has inspired a devoted following around the world. This story, dazzling in its powerful simplicity and soul-stirring wisdom, is about an Andalusian shepherd boy named Santiago who travels from his homeland in Spain to the Egyptian desert in search of a treasure buried near the Pyramids. Along the way he meets a Gypsy woman, a man who calls himself king, and an alchemist, all of whom point Santiago in the direction of his quest. No one knows what the treasure is, or if Santiago will be able to surmount the obstacles in his path. But what starts out as a journey to find worldly goods turns into a discovery of the treasure found within. Lush, evocative, and deeply humane, the story of Santiago is an eternal testament to the transforming power of our dreams and the importance of listening to our hearts.",                
        //         'publisher' => "HARPER ONE",
        //         'publish_date' => Carbon::parse('14-04-2014'),
        //         'pages' => 208,
        //         'language' => "English"

        //     ],
        //     [
        //         'title' => "Anxious People",
        //         'slug' => "anxious-people",
        //         'cover' => "Anxious People.jpg",
        //         'author' => "Backman, Fredrik",
        //         'category' => "literary",
        //         'price' => 528000,
        //         'description' => "Looking at real estate isn't usually a life-or-death situation, but an apartment open house becomes just that when a failed bank robber bursts in and takes a group of strangers hostage. The captives include a recently retired couple who relentlessly hunt down fixer-uppers to avoid the painful truth that they can't fix their own marriage. There's a wealthy bank director who has been too busy to care about anyone else and a young couple who are about to have their first child but can't seem to agree on anything, from where they want to live to how they met in the first place. Add to the mix an eighty-seven-year-old woman who has lived long enough not to be afraid of someone waving a gun in her face, a flustered but still-ready-to-make-a-deal real estate agent, and a mystery man who has locked himself in the apartment's only bathroom, and you've got the worst group of hostages in the world.",
        //         'publisher' => "ATRIA",
        //         'publish_date' => Carbon::parse('09-08-2014'),
        //         'pages' => 352,
        //         'language' => "English"

        //     ],
        // ];

        // \DB::table('books')->insert($books);
    }
}
