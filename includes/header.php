<!doctype html>
<html lang="en" data-theme="dark">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Activian guild information website for MU: Dark Epoch on Gravity 21.">
  <title><?php echo htmlspecialchars($pageTitle ?? 'Activian Guild', ENT_QUOTES, 'UTF-8'); ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600;700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <header class="site-header">
    <a class="brand" href="#home" aria-label="Activian home"><span class="brand__mark">A</span><span>Activian</span></a>
    <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="site-nav">☰</button>
    <nav id="site-nav" class="site-nav" aria-label="Main navigation">
      <a href="#about" data-i18n="nav.about">About</a>
      <a href="#rules" data-i18n="nav.rules">Rules</a>
      <a href="#events" data-i18n="nav.events">Events</a>
      <a href="#auction" data-i18n="nav.auction">Auction</a>
      <a href="#activity" data-i18n="nav.activity">Activity</a>
      <a href="#join" data-i18n="nav.join">Join</a>
    </nav>
    <div class="toolbar" aria-label="Site preferences">
      <button class="chip" type="button" data-lang-toggle>EN</button>
      <button class="chip" type="button" data-theme-toggle>🌙</button>
    </div>
  </header>
