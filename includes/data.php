<?php
/* Shared content data for The Crescent Theater */

$CATS = array(
  'Theatre' => array('bg' => '#FAEED7', 'fg' => '#09021A'),
  'Music'   => array('bg' => '#FAEED7', 'fg' => '#09021A'),
  'Film'    => array('bg' => '#09021A', 'fg' => '#FAEED7'),
  'Dance'   => array('bg' => '#FAEED7', 'fg' => '#09021A'),
  'Comedy'  => array('bg' => '#FAEED7', 'fg' => '#09021A'),
  'Family'  => array('bg' => '#09021A', 'fg' => '#FAEED7'),
  'Talks'   => array('bg' => '#FAEED7', 'fg' => '#09021A'),
);

$GENRES = array('All','Theatre','Music','Film','Dance','Comedy','Family','Talks');

$SHOWS = array(
  array(
    'id'=>'midsummer','title'=>"A Midsummer Night's Dream",'category'=>'Theatre',
    'dateLabel'=>'12–28 Nov','venue'=>'Main Stage','runtime'=>'2h 40m','priceFrom'=>24,
    'photo'=>'assets/photo-stage.jpg',
    'blurb'=>'Shakespeare’s wild midnight comedy of lovers, fairies and mischief, reimagined in a neon-lit forest.',
    'longBlurb'=>'Four lovers, one meddling fairy king, and a troupe of hopeless amateur actors collide in an enchanted wood. Our new production trades the Athenian forest for a shimmering neon dreamscape — playful, sensual and just a little unhinged. A perfect first Shakespeare, and a fresh one for those who think they know it.',
    'dates'=>array('Fri 14 Nov · 7:30pm','Sat 15 Nov · 2:30pm','Sat 15 Nov · 7:30pm','Wed 19 Nov · 7:30pm'),
  ),
  array(
    'id'=>'frahm','title'=>'Carey Kelly','category'=>'Music',
    'dateLabel'=>'15 Nov','venue'=>'Concert Hall','runtime'=>'2h','priceFrom'=>38,
    'photo'=>'assets/photo-venue.jpg',
    'blurb'=>'The pioneering composer returns with an evening of pianos, synths and quiet thunder.',
    'longBlurb'=>'Surrounded by a fortress of grand pianos, upright pianos, and vintage synthesisers, Carey Kelly builds the music in front of you — from a single held note to euphoric, room-shaking crescendos. An unrepeatable night for anyone who loves where classical meets electronic.',
    'dates'=>array('Sat 15 Nov · 8:00pm'),
  ),
  array(
    'id'=>'portrait','title'=>'Portrait of a Lady on Fire','category'=>'Film',
    'dateLabel'=>'18 Nov','venue'=>'Cinema','runtime'=>'2h 2m','priceFrom'=>12,
    'photo'=>'assets/photo-hero.jpg',
    'blurb'=>'Céline Sciamma’s luminous romance returns to the big screen in a new 4K restoration.',
    'longBlurb'=>'On an isolated Brittany island in 1770, a painter is commissioned to paint the wedding portrait of a reluctant bride. What follows is one of the great love stories of modern cinema — hushed, radiant and unforgettable. Presented in a new 4K restoration, in French with English subtitles.',
    'dates'=>array('Tue 18 Nov · 6:15pm','Tue 18 Nov · 8:45pm'),
  ),
  array(
    'id'=>'junglebook','title'=>'Jungle Book Reimagined','category'=>'Dance',
    'dateLabel'=>'21–22 Nov','venue'=>'Main Stage','runtime'=>'1h 45m','priceFrom'=>28,
    'photo'=>'assets/photo-live.jpg',
    'blurb'=>'Crescent Company turns Kipling’s classic into a breathtaking story of a world on the brink.',
    'longBlurb'=>'Renowned choreographer Crescent Company reimagines The Jungle Book for the climate age. A young girl, displaced by rising waters, finds herself among the animals of a flooded world. Fusing dance, animation and a thunderous score, it’s a spectacle for anyone aged 8 to 108.',
    'dates'=>array('Fri 21 Nov · 7:30pm','Sat 22 Nov · 7:30pm'),
  ),
  array(
    'id'=>'comedy','title'=>'Crescent Comedy Club','category'=>'Comedy',
    'dateLabel'=>'23 Nov','venue'=>'Studio','runtime'=>'2h','priceFrom'=>18,
    'photo'=>'assets/photo-crowd.jpg',
    'blurb'=>'Four of the sharpest names on the circuit and a rowdy late bar. Expect the unexpected.',
    'longBlurb'=>'Our monthly comedy night is back with a hand-picked line-up of touring headliners and rising stars — plus a compère who never lets the room settle. Over 18s only, late bar until 1am. Line-ups announced the week of the show.',
    'dates'=>array('Sun 23 Nov · 8:00pm'),
  ),
  array(
    'id'=>'puppet','title'=>'Puppet Kingdom','category'=>'Family',
    'dateLabel'=>'29 Nov','venue'=>'Studio','runtime'=>'55m','priceFrom'=>10,
    'photo'=>'assets/photo-stage.jpg',
    'blurb'=>'A hand-crafted adventure for ages 3+, with a make-your-own-puppet workshop after the show.',
    'longBlurb'=>'Meet Pip, the smallest puppet in the kingdom, on a big adventure to find where they belong. Told with handmade puppets, live music and a whole lot of heart. Stay after the show for a free workshop where every child builds a puppet to take home.',
    'dates'=>array('Sat 29 Nov · 11:00am','Sat 29 Nov · 2:00pm'),
  ),
  array(
    'id'=>'zadie','title'=>'In Conversation: Bobby Smith','category'=>'Talks',
    'dateLabel'=>'2 Dec','venue'=>'Concert Hall','runtime'=>'1h 30m','priceFrom'=>16,
    'photo'=>'assets/photo-venue.jpg',
    'blurb'=>'The award-winning novelist on fiction, the city, and writing at the edge of an era.',
    'longBlurb'=>'One of the defining voices of contemporary fiction joins us for an intimate evening of reading and conversation, followed by an audience Q&A and a signing. A rare chance to hear a modern master reflect on craft, place and the stories we tell now.',
    'dates'=>array('Tue 2 Dec · 7:00pm'),
  ),
  array(
    'id'=>'kronos','title'=>'Square Quartet','category'=>'Music',
    'dateLabel'=>'5 Dec','venue'=>'Concert Hall','runtime'=>'1h 50m','priceFrom'=>34,
    'photo'=>'assets/photo-hero.jpg',
    'blurb'=>'Five decades of fearless string music, from Reich to reinventions you’ve never heard.',
    'longBlurb'=>'For over fifty years the Square Quartet has redrawn the map of what a string quartet can be, commissioning more than a thousand works along the way. Tonight’s programme spans minimalist landmarks and brand-new premieres — restless, beautiful and utterly alive.',
    'dates'=>array('Fri 5 Dec · 7:30pm'),
  ),
  array(
    'id'=>'ghibli','title'=>'Spirited Away','category'=>'Film',
    'dateLabel'=>'7 Dec','venue'=>'Cinema','runtime'=>'2h 5m','priceFrom'=>12,
    'photo'=>'assets/photo-live.jpg',
    'blurb'=>'Studio Eliza on the big screen — a matinee for all ages, with English subtitles.',
    'longBlurb'=>'Ten-year-old Chihiro stumbles into a spirit world of bathhouses, dragons and a witch who steals names. Hayao Miyazaki’s Oscar-winning masterpiece is even more magical in a cinema. A family matinee presented in Japanese with English subtitles.',
    'dates'=>array('Sun 7 Dec · 3:00pm'),
  ),
);

$TIERS = array(
  array('name'=>'Friend','price'=>'£6','period'=>'/month','featured'=>false,
    'perks'=>array('Priority booking, 48 hours early','No booking fees, ever','10% off the café & bar')),
  array('name'=>'Supporter','price'=>'£15','period'=>'/month','featured'=>true,
    'perks'=>array('Everything in Friend','Two guest passes a year','Invitations to dress rehearsals','20% off the café & bar')),
  array('name'=>'Patron','price'=>'£40','period'=>'/month','featured'=>false,
    'perks'=>array('Everything in Supporter','A named seat on the Main Stage','The annual patrons’ dinner','Backstage tours & first nights')),
);

function chip_style($category) {
  global $CATS;
  $c = isset($CATS[$category]) ? $CATS[$category] : $CATS['Theatre'];
  return 'background:' . $c['bg'] . ';color:' . $c['fg'];
}

/* Renders a bookable event card. Detail data travels in data-id for the JS modal. */
function render_card($s) {
  $chip = chip_style($s['category']);
  echo '<article class="event-card" data-id="' . htmlspecialchars($s['id']) . '" data-category="' . htmlspecialchars($s['category']) . '" data-search="' . htmlspecialchars(strtolower($s['title'] . ' ' . $s['blurb'])) . '">';
  echo   '<div class="thumb">';
  echo     '<img src="' . htmlspecialchars($s['photo']) . '" alt="' . htmlspecialchars($s['title']) . '">';
  echo     '<span class="chip" style="' . $chip . '">' . htmlspecialchars($s['category']) . '</span>';
  echo   '</div>';
  echo   '<div class="body">';
  echo     '<div class="datev">' . htmlspecialchars($s['dateLabel']) . ' · ' . htmlspecialchars($s['venue']) . '</div>';
  echo     '<h3>' . htmlspecialchars($s['title']) . '</h3>';
  echo     '<p>' . htmlspecialchars($s['blurb']) . '</p>';
  echo     '<div class="foot">';
  echo       '<span class="price">From £' . intval($s['priceFrom']) . '</span>';
  echo       '<span class="book-cue">View &amp; book →</span>';
  echo     '</div>';
  echo   '</div>';
  echo '</article>';
}
?>
