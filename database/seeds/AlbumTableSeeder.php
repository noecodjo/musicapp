<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model as Eloquent;
use App\Models\Album;
use App\Models\Artist;

class AlbumTableSeeder extends Seeder {

  public function run()
  {
    // Allow mass assignment.
    Eloquent::unguard();
    // Delete all data.
    DB::table('albums')->delete();
    // Get all Aritsts
    $artists = Artist::all();

    foreach ($artists as $artist) {
      switch ($artist->slug) {
        case 'dr_dre':
          // Create the following.
          Album::create(array('name' => 'The Chronic', 'year' => '1994', 'label' => 'Def Jam', 'picture' => '', 'artist_id' => $artist->id, 'slug' => 'the_chronic'));
          Album::create(array('name' => '2001', 'year' => '2001', 'label' => 'Def Jam', 'picture' => '', 'artist_id' => $artist->id, 'slug' => '2001'));
          break;
        case 'snoop_dogg':
          // Create the following.
          Album::create(array('name' => 'Doggystyle', 'year' => '1993', 'label' => 'Death Row', 'picture' => '', 'artist_id' => $artist->id, 'slug' => 'doggystyle'));
          Album::create(array('name' => 'Tha Doggfather', 'year' => '1996', 'label' => 'Death Row', 'picture' => '', 'artist_id' => $artist->id, 'slug' => 'tha_doggfather'));
          break;
        case 'nas':
          // Create the following.
          Album::create(array('name' => 'Illmatic', 'year' => '1994', 'label' => 'Columbia', 'picture' => '', 'artist_id' => $artist->id, 'slug' => 'illmatic'));
          Album::create(array('name' => 'It Was Written', 'year' => '1996', 'label' => 'Columbia', 'picture' => '', 'artist_id' => $artist->id, 'slug' => 'it_was_written'));
          break;
        case 'eminem':
          // Create the following.
          Album::create(array('name' => 'Slim Shady LP', 'year' => '1999', 'label' => 'Aftermath', 'picture' => '', 'artist_id' => $artist->id, 'slug' => 'slim_shady_lp'));
          Album::create(array('name' => 'Marshall Mathers LP', 'year' => '2000', 'label' => 'Aftermath', 'picture' => '', 'artist_id' => $artist->id, 'slug' => 'marshall_mathers'));
          break;
        case 'living_legends':
          // Create the following.
          Album::create(array('name' => 'Almost Famous', 'year' => '2001', 'label' => 'Legendary Music', 'picture' => '', 'artist_id' => $artist->id, 'slug' => 'almost_famous'));
          Album::create(array('name' => 'Creative Differences', 'year' => '2004', 'label' => 'Legendary Music', 'picture' => '', 'artist_id' => $artist->id, 'slug' => 'creative_differences'));
          break;
        case 'souls_of_mischief':
          // Create the following.
          Album::create(array('name' => '93 Till Infinity', 'year' => '1993', 'label' => 'Jive', 'picture' => '', 'artist_id' => $artist->id, 'slug' => '93_till_infinity'));
          Album::create(array('name' => 'Focus', 'year' => '1999', 'label' => 'Hieroglyphics Imperium', 'picture' => '', 'artist_id' => $artist->id, 'slug' => 'focus'));
          break;
        case 'hieroglyphics':
          // Create the following.
          Album::create(array('name' => '3rd Eye Vision', 'year' => '1998', 'label' => 'Hieroglyphics Imperium', 'picture' => '', 'artist_id' => $artist->id, 'slug' => '3rd_eye_vision'));
          Album::create(array('name' => 'Full Circle', 'year' => '2003', 'label' => 'Hieroglyphics Imperium', 'picture' => '', 'artist_id' => $artist->id, 'slug' => 'full_circle'));
          break;
        case 'optimus_rhymes':
          // Create the following.
          Album::create(array('name' => 'Fourcast', 'year' => '1998', 'label' => 'JKC Music', 'picture' => '', 'artist_id' => $artist->id, 'slug' => 'fourcast'));
          Album::create(array('name' => 'State of the Art', 'year' => '2004', 'label' => 'JKC Music', 'picture' => '', 'artist_id' => $artist->id, 'slug' => 'state_of_the_art'));
          break;
        case 'system_of_a_down':
          // Create the following.
          Album::create(array('name' => 'Toxicity', 'year' => '2001', 'label' => 'American', 'picture' => '', 'artist_id' => $artist->id, 'slug' => 'toxicity'));
          Album::create(array('name' => 'Mezmerize', 'year' => '2005', 'label' => 'American', 'picture' => '', 'artist_id' => $artist->id, 'slug' => 'mezmerize'));
          break;
        case 'serj_tankian':
          // Create the following.
          Album::create(array('name' => 'Elect the Dead', 'year' => '2007', 'label' => 'Serjical Strike', 'picture' => '', 'artist_id' => $artist->id, 'slug' => 'elect_the_dead'));
          Album::create(array('name' => 'Imperfect Harmonies', 'year' => '2010', 'label' => 'Serjical Strike', 'picture' => '', 'artist_id' => $artist->id, 'slug' => 'imperfect_harmonies'));
          break;

      }
    }
  }

}