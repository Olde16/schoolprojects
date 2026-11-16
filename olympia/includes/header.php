<!doctype html>
<html lang="de">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#171923">
  <meta name="description" content="Olympia 2028 – Wettkampfergebnisse, Disziplinen und Medaillenspiegel auf einen Blick.">
  <title><?= htmlspecialchars($pageTitle ?? 'Olympia 2028', ENT_QUOTES, 'UTF-8') ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<header class="site-header">
  <a class="brand" href="#start" aria-label="Olympia Startseite">
    <span class="brand__rings" aria-hidden="true"><i></i><i></i><i></i><i></i><i></i></span>
    <span class="brand__name">OLYMPIA<span>28</span><small>THE GAMES · LOS ANGELES</small></span>
  </a>
  <button class="menu-toggle" id="menuToggle" aria-label="Navigation öffnen" aria-expanded="false"><span></span><span></span><span></span></button>
  <nav class="main-nav" id="mainNav" aria-label="Hauptnavigation">
    <a class="is-active" href="#start">Start</a>
    <a href="#live-results">Ergebnisse</a>
    <a href="#medals">Medaillenspiegel</a>
    <a href="#sports">Sportarten</a>
  </nav>
  <a class="header-cta" href="#live-results">Live-Übersicht <span>↗</span></a>
</header>