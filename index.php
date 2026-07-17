<?php
require __DIR__ . '/includes/data.php';
$active = 'home';
$page_title = 'The Crescent Theater — Where the city comes to feel something';
$featured = $SHOWS[0];
require __DIR__ . '/includes/header.php';
?>

<section class="hero">
  <div class="wrap hero-grid">
    <div>
      <div class="hero-eyebrow">Est. 1976 · 50th Anniversary Season</div>
      <h1>Where the city comes to feel something.</h1>
      <p class="hero-lede">Four stages. One building. Live music, theatre, film and dance — half a century of unforgettable nights, and we’re just getting started.</p>
      <div class="hero-actions">
        <a class="btn btn-yellow" href="whats-on.php">Explore what’s on</a>
        <a class="btn btn-ghost-light" href="membership.php">Become a member</a>
      </div>
      <div class="hero-stats">
        <div><div class="num">4</div><div class="lbl">performance spaces</div></div>
        <div><div class="num">300+</div><div class="lbl">events a year</div></div>
        <div><div class="num">50</div><div class="lbl">years of live music</div></div>
      </div>
    </div>
    <div class="hero-media">
      <img src="<?php echo htmlspecialchars($featured['photo']); ?>" alt="<?php echo htmlspecialchars($featured['title']); ?>">
      <div class="scrim"></div>
      <div class="caption">
        <span class="chip" style="background:#F6C700;color:#09021A"><?php echo htmlspecialchars($featured['category']); ?> · Featured</span>
        <h3><?php echo htmlspecialchars($featured['title']); ?></h3>
        <div class="meta"><?php echo htmlspecialchars($featured['dateLabel']); ?> · <?php echo htmlspecialchars($featured['venue']); ?></div>
        <button class="btn btn-outline btn-sm" style="margin-top:16px" type="button" data-open-detail="<?php echo htmlspecialchars($featured['id']); ?>">View &amp; book →</button>
      </div>
    </div>
  </div>
</section>

<section class="wrap section">
  <div class="section-head">
    <div>
      <p class="eyebrow">On the calendar</p>
      <h2>Coming up this season</h2>
    </div>
    <a class="linkish" href="whats-on.php">See all events →</a>
  </div>
  <div class="card-grid">
    <?php foreach (array_slice($SHOWS, 0, 6) as $s) { render_card($s); } ?>
  </div>
</section>

<section class="wrap section">
  <div class="member-band">
    <div>
      <p class="eyebrow" style="color:var(--brand-ink)">Membership</p>
      <h2>Get closer to the work you love.</h2>
      <p>Priority booking, no fees, and invitations behind the curtain — from just £6 a month. Your membership keeps our stages lit and our tickets fair.</p>
      <a class="btn btn-primary" style="margin-top:24px" href="membership.php">Compare memberships →</a>
    </div>
    <div class="member-facts">
      <div class="member-fact"><span class="big">48h</span><span>early access to every on-sale</span></div>
      <div class="member-fact"><span class="big">£0</span><span>booking fees, ever</span></div>
      <div class="member-fact"><span class="big">20%</span><span>off the café &amp; bar</span></div>
    </div>
  </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
