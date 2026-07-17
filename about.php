<?php
require __DIR__ . '/includes/data.php';
$active = 'about';
$page_title = 'About — The Crescent Theater';
require __DIR__ . '/includes/header.php';
?>

<section>
  <div class="wrap" style="padding-top:56px">
    <p class="eyebrow">About</p>
    <h1 class="serif" style="margin:0;font-weight:700;font-size:clamp(34px,4.5vw,52px);max-width:16em">A grand old building with a restless spirit.</h1>
    <p style="margin:20px 0 0;font-size:18px;line-height:28px;color:var(--text-supportive);max-width:44em">The Crescent opened in 1976 as a single live-music room on the corner of Moon Street. Fifty years on it’s a four-stage arts centre where a symphony, a midnight comedy set, a Studio Eliza matinee and a first-time playwright can all share the same week — and the same bar afterwards.</p>
  </div>

  <div class="wrap" style="margin-top:32px">
    <div class="about-photos">
      <div class="p a"><img src="assets/photo-hero.jpg" alt="On the Main Stage"></div>
      <div class="p b"><img src="assets/photo-live.jpg" alt="A performance at the Crescent"></div>
    </div>
  </div>

  <div class="wrap" style="padding-top:48px;padding-bottom:48px">
    <div class="stat-row">
      <div><div class="n">1976</div><div class="l">Year we opened</div></div>
      <div><div class="n">4</div><div class="l">Performance spaces</div></div>
      <div><div class="n">1,200</div><div class="l">Seats on the Main Stage</div></div>
      <div><div class="n">300+</div><div class="l">Events every year</div></div>
    </div>
  </div>

  <div class="wrap" style="padding-bottom:32px">
    <h2 class="serif" style="font-weight:700;font-size:28px;margin:0 0 20px">Plan your visit</h2>
    <div class="visit-grid">
      <div class="visit-card"><div class="h">Find us</div><p>In the heart of the Riverside district<br>Two minutes from Crescent Bridge station</p></div>
      <div class="visit-card"><div class="h">Box office</div><p>Open Mon–Sat, 10am–8pm<br>Book online anytime</p></div>
      <div class="visit-card"><div class="h">Access</div><p>Step-free throughout, captioned &amp; relaxed performances, and a free companion ticket for every booking.</p></div>
    </div>
  </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
