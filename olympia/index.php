<?php
$pageTitle = 'Olympia 2028 | Ergebnisse & Medaillenspiegel';
$activePage = 'home';
require __DIR__ . '/includes/header.php';
?>
<main>
  <section class="hero" id="start">
    <div class="hero__inner">
      <p class="eyebrow">LOS ANGELES · 14.–30. JULI 2028</p>
      <h1>Die Welt.<br><span>Im Wettkampf.</span></h1>
      <p class="hero__copy">Erlebe die größten Momente des Sports. Entdecke Ergebnisse, Athletinnen und Athleten sowie den aktuellen Medaillenspiegel.</p>
      <a class="button button--gold" href="#ergebnisse">Ergebnisse entdecken <span aria-hidden="true">↘</span></a>
      <div class="hero__facts">
        <div><strong>5</strong><span>Sportarten</span></div>
        <div><strong>15</strong><span>Beispiel-Ergebnisse</span></div>
        <div><strong>12</strong><span>Nationen</span></div>
      </div>
    </div>
    <div class="hero__rings" aria-hidden="true"><span></span><span></span><span></span><span></span><span></span></div>
    <div class="hero__side-note">FASTER · HIGHER · STRONGER</div>
  </section>

  <section class="content-section" id="ergebnisse">
    <div class="section-heading">
      <div><p class="eyebrow eyebrow--blue">DIE ENTSCHEIDUNGEN</p><h2>Wettkampf-Ergebnisse</h2><p class="section-subtitle">Fiktive Athletinnen und Athleten – erstellt für den Frontend-Prototyp.</p></div>
      <span class="demo-label"><i></i> DEMO-DATEN</span>
    </div>
    <div class="filter-bar">
      <label class="search-box"><span aria-hidden="true">⌕</span><input id="athleteSearch" type="search" placeholder="Athlet oder Land suchen …" aria-label="Athlet oder Land suchen"></label>
      <select id="sportFilter" aria-label="Sportart filtern"><option value="all">Alle Sportarten</option><option>Leichtathletik</option><option>Schwimmen</option><option>Turnen</option><option>Radsport</option><option>Judo</option></select>
      <select id="medalFilter" aria-label="Medaille filtern"><option value="all">Alle Platzierungen</option><option value="Gold">Gold</option><option value="Silber">Silber</option><option value="Bronze">Bronze</option></select>
    </div>
    <div class="results-grid" id="resultsGrid">
      <article class="result-card" data-sport="Leichtathletik" data-medal="Gold" data-search="elena berger deutschland 100 meter sprint"><div class="result-card__top"><span class="sport-tag">LEICHTATHLETIK</span><span class="medal medal--gold">🥇 GOLD</span></div><div class="result-card__event">100 m Sprint · Frauen</div><div class="result-card__athlete"><div class="avatar avatar--rose">EB</div><div><h3>Elena Berger</h3><p>🇩🇪 Deutschland</p></div></div><div class="result-card__score"><strong>10,92 s</strong><span>1. Platz</span></div></article>
      <article class="result-card" data-sport="Schwimmen" data-medal="Silber" data-search="noah williams usa schwimmen freestyle"><div class="result-card__top"><span class="sport-tag">SCHWIMMEN</span><span class="medal medal--silver">🥈 SILBER</span></div><div class="result-card__event">200 m Freistil · Männer</div><div class="result-card__athlete"><div class="avatar avatar--blue">NW</div><div><h3>Noah Williams</h3><p>🇺🇸 USA</p></div></div><div class="result-card__score"><strong>1:44,38 min</strong><span>2. Platz</span></div></article>
      <article class="result-card" data-sport="Turnen" data-medal="Bronze" data-search="mei tan japan turnen boden"><div class="result-card__top"><span class="sport-tag">TURNEN</span><span class="medal medal--bronze">🥉 BRONZE</span></div><div class="result-card__event">Boden · Frauen</div><div class="result-card__athlete"><div class="avatar avatar--lilac">MT</div><div><h3>Mei Tan</h3><p>🇯🇵 Japan</p></div></div><div class="result-card__score"><strong>14,200 Pkt.</strong><span>3. Platz</span></div></article>
      <article class="result-card" data-sport="Radsport" data-medal="Gold" data-search="lucas moreau frankreich radsport zeitfahren"><div class="result-card__top"><span class="sport-tag">RADSPORT</span><span class="medal medal--gold">🥇 GOLD</span></div><div class="result-card__event">Zeitfahren · Männer</div><div class="result-card__athlete"><div class="avatar avatar--green">LM</div><div><h3>Lucas Moreau</h3><p>🇫🇷 Frankreich</p></div></div><div class="result-card__score"><strong>48:21 min</strong><span>1. Platz</span></div></article>
      <article class="result-card" data-sport="Judo" data-medal="Silber" data-search="amina el amrani marokko judo"><div class="result-card__top"><span class="sport-tag">JUDO</span><span class="medal medal--silver">🥈 SILBER</span></div><div class="result-card__event">Halbmittelgewicht · Frauen</div><div class="result-card__athlete"><div class="avatar avatar--gold">AE</div><div><h3>Amina El Amrani</h3><p>🇲🇦 Marokko</p></div></div><div class="result-card__score"><strong>Ippon</strong><span>2. Platz</span></div></article>
      <article class="result-card" data-sport="Leichtathletik" data-medal="Bronze" data-search="kwame mensah ghana weitsprung"><div class="result-card__top"><span class="sport-tag">LEICHTATHLETIK</span><span class="medal medal--bronze">🥉 BRONZE</span></div><div class="result-card__event">Weitsprung · Männer</div><div class="result-card__athlete"><div class="avatar avatar--orange">KM</div><div><h3>Kwame Mensah</h3><p>🇬🇭 Ghana</p></div></div><div class="result-card__score"><strong>8,31 m</strong><span>3. Platz</span></div></article>
    </div>
    <p class="empty-state" id="emptyState" hidden>Keine passenden Ergebnisse gefunden. Ändere deine Filter.</p>
  </section>

  <section class="medal-section" id="medaillenspiegel">
    <div class="section-heading section-heading--light"><div><p class="eyebrow">NATIONEN IM VERGLEICH</p><h2>Der Medaillenspiegel</h2><p class="section-subtitle">Ein beispielhafter Zwischenstand für unser Schulprojekt.</p></div><span class="demo-label demo-label--dark">FIKTIVE WERTE</span></div>
    <div class="medal-table-wrap"><table class="medal-table"><thead><tr><th>Rang</th><th>Nation</th><th>🥇 Gold</th><th>🥈 Silber</th><th>🥉 Bronze</th><th>Gesamt</th></tr></thead><tbody>
      <tr><td class="rank">01</td><td><span class="flag">🇩🇪</span> Deutschland</td><td>4</td><td>2</td><td>3</td><td class="total">9</td></tr>
      <tr><td class="rank">02</td><td><span class="flag">🇺🇸</span> USA</td><td>3</td><td>4</td><td>1</td><td class="total">8</td></tr>
      <tr><td class="rank">03</td><td><span class="flag">🇫🇷</span> Frankreich</td><td>3</td><td>1</td><td>2</td><td class="total">6</td></tr>
      <tr><td class="rank">04</td><td><span class="flag">🇯🇵</span> Japan</td><td>2</td><td>2</td><td>3</td><td class="total">7</td></tr>
      <tr><td class="rank">05</td><td><span class="flag">🇬🇧</span> Großbritannien</td><td>1</td><td>2</td><td>1</td><td class="total">4</td></tr>
    </tbody></table></div>
  </section>

  <section class="sports-section" id="sportarten">
    <div class="section-heading"><div><p class="eyebrow eyebrow--blue">VIELFALT DES SPORTS</p><h2>Im Fokus: Sportarten</h2><p class="section-subtitle">Ein kleiner Einblick in die Wettbewerbe der Demo-Seite.</p></div></div>
    <div class="sports-grid">
      <a class="sport-tile sport-tile--track" href="#ergebnisse"><span>01 / SPEED</span><strong>Leichtathletik</strong><small>Sprint · Weitsprung · Wurf</small></a>
      <a class="sport-tile sport-tile--swim" href="#ergebnisse"><span>02 / WATER</span><strong>Schwimmen</strong><small>Freistil · Lagen · Rücken</small></a>
      <a class="sport-tile sport-tile--gym" href="#ergebnisse"><span>03 / POWER</span><strong>Turnen</strong><small>Boden · Sprung · Barren</small></a>
      <a class="sport-tile sport-tile--bike" href="#ergebnisse"><span>04 / ENDURANCE</span><strong>Radsport</strong><small>Straße · Bahn · Zeitfahren</small></a>
    </div>
  </section>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>