<?php
/* Shared site header: logo image + primary navigation. Included on every page. */
if (!isset($active)) { $active = ''; }
if (!isset($page_title)) { $page_title = 'The Crescent Theater'; }

$NAV = array(
  array('href' => 'index.php',      'key' => 'home',       'label' => 'Home'),
  array('href' => 'whats-on.php',   'key' => 'whatson',    'label' => 'What’s on'),
  array('href' => 'about.php',      'key' => 'about',      'label' => 'About'),
  array('href' => 'membership.php', 'key' => 'membership', 'label' => 'Membership'),
);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo htmlspecialchars($page_title); ?></title>
  <link rel="icon" type="image/svg+xml" href="assets/crescent-mark-yellow.svg">
  <link rel="stylesheet" href="assets/site.css">
</head>
<body>
  <header class="site-header">
    <div class="wrap header-inner">
      <a class="brand" href="index.php">
        <img src="assets/crescent-mark-black.svg" alt="The Crescent Theater" width="27" height="21">
        <span class="brand-name">The Crescent Theater</span>
      </a>
      <nav class="main-nav" aria-label="Primary">
        <?php foreach ($NAV as $item): ?>
          <a class="nav-link<?php echo $active === $item['key'] ? ' active' : ''; ?>"
             href="<?php echo $item['href']; ?>"<?php echo $active === $item['key'] ? ' aria-current="page"' : ''; ?>><?php echo $item['label']; ?></a>
        <?php endforeach; ?>
      </nav>
      <a class="btn btn-primary btn-sm" href="whats-on.php">Book tickets</a>
    </div>
  </header>
  <main>
