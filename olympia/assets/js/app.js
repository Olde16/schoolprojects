document.addEventListener('DOMContentLoaded', () => {
  const search = document.getElementById('athleteSearch');
  const sport = document.getElementById('sportFilter');
  const discipline = document.getElementById('disciplineFilter');
  const medal = document.getElementById('medalFilter');
  const genderButtons = [...document.querySelectorAll('.gender-btn')];
  const rows = [...document.querySelectorAll('.result-row')];
  const empty = document.getElementById('emptyState');
  const count = document.getElementById('visibleCount');
  let selectedGender = 'all';

  function filterResults() {
    const query = (search?.value || '').trim().toLocaleLowerCase('de');
    let visible = 0;
    rows.forEach(row => {
      const matches = (selectedGender === 'all' || row.dataset.gender === selectedGender)
        && ((sport?.value || 'all') === 'all' || row.dataset.sport === sport.value)
        && ((discipline?.value || 'all') === 'all' || row.dataset.discipline === discipline.value)
        && ((medal?.value || 'all') === 'all' || row.dataset.medal?.toLowerCase() === medal.value.toLowerCase())
        && (row.dataset.search || '').toLocaleLowerCase('de').includes(query);
      row.hidden = !matches;
      if (matches) visible++;
    });
    if (empty) empty.hidden = visible > 0;
    if (count) count.textContent = visible;
  }
  [search, sport, discipline, medal].forEach(el => el?.addEventListener(el === search ? 'input' : 'change', filterResults));
  genderButtons.forEach(button => button.addEventListener('click', () => {
    selectedGender = button.dataset.gender;
    genderButtons.forEach(item => item.classList.toggle('is-active', item === button));
    filterResults();
  }));

  document.querySelectorAll('[data-sport-link]').forEach(link => link.addEventListener('click', () => {
    if (sport) sport.value = link.dataset.sportLink;
    if (discipline) discipline.value = 'all';
    if (medal) medal.value = 'all';
    selectedGender = 'all';
    genderButtons.forEach(item => item.classList.toggle('is-active', item.dataset.gender === 'all'));
    filterResults();
  }));

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
  filterResults();
});