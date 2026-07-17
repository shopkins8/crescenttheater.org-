<?php
require __DIR__ . '/includes/data.php';
$active = 'membership';
$page_title = 'Membership — The Crescent Theater';
require __DIR__ . '/includes/header.php';
?>

<section class="wrap" style="max-width:1120px;padding-top:56px;padding-bottom:96px">
  <div style="text-align:center;max-width:36em;margin:0 auto 44px">
    <p class="eyebrow" style="color:var(--brand-ink)">Membership</p>
    <h1 class="serif" style="margin:0 0 12px;font-weight:700;font-size:clamp(34px,4.5vw,52px)">Join the Crescent</h1>
    <p style="margin:0;font-size:17px;line-height:26px;color:var(--text-supportive)">Members make everything we do possible — and get first dibs, fewer fees, and a warmer welcome every visit.</p>
  </div>

  <div class="tier-grid">
    <?php foreach ($TIERS as $tier): ?>
      <div class="tier<?php echo $tier['featured'] ? ' featured' : ''; ?>">
        <div>
          <?php if ($tier['featured']): ?><span class="badge">Most popular</span><?php endif; ?>
          <div class="tname"><?php echo htmlspecialchars($tier['name']); ?></div>
          <div class="price-line">
            <span class="amt"><?php echo htmlspecialchars($tier['price']); ?></span><span class="per"><?php echo htmlspecialchars($tier['period']); ?></span>
          </div>
        </div>
        <ul class="perks">
          <?php foreach ($tier['perks'] as $perk): ?>
            <li>
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="<?php echo $tier['featured'] ? '#09021A' : '#368141'; ?>" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"></path></svg>
              <span><?php echo htmlspecialchars($perk); ?></span>
            </li>
          <?php endforeach; ?>
        </ul>
        <button type="button" class="btn <?php echo $tier['featured'] ? 'btn-primary' : 'btn-outline'; ?> btn-block">Join as <?php echo htmlspecialchars($tier['name']); ?></button>
      </div>
    <?php endforeach; ?>
  </div>
  <p style="text-align:center;margin:32px 0 0;font-size:13px;color:var(--text-muted)">Cancel anytime. Concessions and student rates available at the box office.</p>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
