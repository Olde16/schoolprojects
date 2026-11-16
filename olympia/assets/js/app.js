document.addEventListener('DOMContentLoaded', () => {
  const search = document.getElementById('athleteSearch');
  const sport = document.getElementById('sportFilter');
  const medal = document.getElementById('medalFilter');
  const cards = [...document.querySelectorAll('.result-card')];
  const empty = document.getElementById('emptyState');

  function filterResults() {
    const query = (search?.value || '').trim().toLocaleLowerCase('de');
    const selectedSport = sport?.value || 'all';
    const selectedMedal = medal?.value || 'all';
    let visible = 0;

    cards.forEach(card => {
      const matchesQuery = (card.dataset.search || '').toLocaleLowerCase('de').includes(query);
      const matchesSport = selectedSport === 'all' || card.dataset.sport === selectedSport;
      const matchesMedal = selectedMedal === 'all' || card.dataset.medal === selectedMedal;
      const show = matchesQuery && matchesSport && matchesMedal;
      card.hidden = !show;
      if (show) visible++;
    });
    if (empty) empty.hidden = visible !== 0;
  }

  [search, sport, medal].forEach(control => control?.addEventListener(control === search ? 'input' : 'change', filterResults));

  const toggle = document.getElementById('menuToggle');
  const nav = document.getElementById('mainNav');
  toggle?.addEventListener('click', () => {
    const open = nav.classList.toggle('is-open');
    toggle.setAttribute('aria-expanded', String(open));
    toggle.setAttribute('aria-label', open ? 'Navigation schließen' : 'Navigation öffnen');
  });
  nav?.querySelectorAll('a').forEach(link => link.addEventListener('click', () => {
    nav.classList.remove('is-open');
    toggle?.setAttribute('aria-expanded', 'false');
  }));
});