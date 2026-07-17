<?php
require __DIR__ . '/includes/data.php';
$active = 'whatson';
$page_title = 'What’s on — The Crescent Theater';
require __DIR__ . '/includes/header.php';
?>

<section class="wrap" style="padding-top:56px;padding-bottom:96px">
  <p class="eyebrow">What’s on</p>
  <h1 class="serif" style="margin:0 0 8px;font-weight:700;font-size:clamp(34px,4.5vw,52px)">The 50th Anniversary Season</h1>
  <p style="margin:0 0 28px;font-size:16px;color:var(--text-muted)"><span id="event-count"><?php echo count($SHOWS); ?></span> events across all four spaces.</p>

  <div class="filters">
    <div class="searchbar">
      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#8a8598" stroke-width="2" stroke-linecap="round"><circle cx="11" cy="11" r="7"></circle><path d="m21 21-4.3-4.3"></path></svg>
      <input type="search" id="event-search" placeholder="Search events…" aria-label="Search events">
    </div>
  </div>

  <div class="genre-row" id="genre-row">
    <?php foreach ($GENRES as $g): ?>
      <button type="button" class="genre<?php echo $g === 'All' ? ' active' : ''; ?>" data-genre="<?php echo htmlspecialchars($g); ?>"><?php echo htmlspecialchars($g); ?></button>
    <?php endforeach; ?>
  </div>

  <div class="card-grid" id="event-grid">
    <?php foreach ($SHOWS as $s) { render_card($s); } ?>
  </div>
  <p class="empty-note" id="empty-note" hidden>No events match your search.</p>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
