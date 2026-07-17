/* The Crescent Theater — filtering + booking modals (vanilla JS, no framework) */
(function () {
  var SHOWS = window.CRESCENT_SHOWS || [];
  var byId = {};
  SHOWS.forEach(function (s) { byId[s.id] = s; });

  var CATS = {
    Theatre: { bg: '#FAEED7', fg: '#09021A' }, Music: { bg: '#FAEED7', fg: '#09021A' },
    Film: { bg: '#09021A', fg: '#FAEED7' }, Dance: { bg: '#FAEED7', fg: '#09021A' },
    Comedy: { bg: '#FAEED7', fg: '#09021A' }, Family: { bg: '#09021A', fg: '#FAEED7' },
    Talks: { bg: '#FAEED7', fg: '#09021A' }
  };
  function chip(cat) { return CATS[cat] || CATS.Theatre; }
  function esc(s) { var d = document.createElement('div'); d.textContent = s == null ? '' : s; return d.innerHTML; }

  /* ---------- What's-on: search + genre filter ---------- */
  var grid = document.getElementById('event-grid');
  var search = document.getElementById('event-search');
  var genreRow = document.getElementById('genre-row');
  var countEl = document.getElementById('event-count');
  var emptyNote = document.getElementById('empty-note');
  var activeGenre = 'All';

  function applyFilter() {
    if (!grid) return;
    var q = (search && search.value ? search.value : '').trim().toLowerCase();
    var shown = 0;
    Array.prototype.forEach.call(grid.querySelectorAll('.event-card'), function (card) {
      var okGenre = activeGenre === 'All' || card.getAttribute('data-category') === activeGenre;
      var okSearch = !q || card.getAttribute('data-search').indexOf(q) !== -1;
      var vis = okGenre && okSearch;
      card.style.display = vis ? '' : 'none';
      if (vis) shown++;
    });
    if (countEl) countEl.textContent = shown;
    if (emptyNote) emptyNote.hidden = shown !== 0;
  }
  if (search) search.addEventListener('input', applyFilter);
  if (genreRow) {
    genreRow.addEventListener('click', function (e) {
      var btn = e.target.closest('.genre');
      if (!btn) return;
      activeGenre = btn.getAttribute('data-genre');
      Array.prototype.forEach.call(genreRow.querySelectorAll('.genre'), function (b) {
        b.classList.toggle('active', b === btn);
      });
      applyFilter();
    });
  }

  /* ---------- Modal open/close plumbing ---------- */
  var detailScrim = document.getElementById('detail-scrim');
  var bookingScrim = document.getElementById('booking-scrim');

  function openScrim(el) { if (el) { el.classList.add('open'); document.body.style.overflow = 'hidden'; } }
  function closeScrim(el) { if (el) { el.classList.remove('open'); } if (!anyOpen()) document.body.style.overflow = ''; }
  function anyOpen() {
    return (detailScrim && detailScrim.classList.contains('open')) || (bookingScrim && bookingScrim.classList.contains('open'));
  }

  document.addEventListener('click', function (e) {
    if (e.target.closest('[data-close]')) {
      closeScrim(detailScrim); closeScrim(bookingScrim); return;
    }
    var scrim = e.target.classList && e.target.classList.contains('modal-scrim') ? e.target : null;
    if (scrim) closeScrim(scrim);
  });
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') { closeScrim(detailScrim); closeScrim(bookingScrim); }
  });

  /* ---------- Detail modal ---------- */
  var dImg = document.getElementById('detail-img');
  var dChip = document.getElementById('detail-chip');
  var dTitle = document.getElementById('detail-title');
  var dMeta = document.getElementById('detail-meta');
  var dBlurb = document.getElementById('detail-blurb');
  var dDates = document.getElementById('detail-dates');
  var dBook = document.getElementById('detail-book');
  var currentDetailId = null;

  function openDetail(id) {
    var s = byId[id];
    if (!s) return;
    currentDetailId = id;
    dImg.src = s.photo; dImg.alt = s.title;
    var c = chip(s.category);
    dChip.textContent = s.category; dChip.style.background = c.bg; dChip.style.color = c.fg;
    dTitle.textContent = s.title;
    var meta = [s.dateLabel, s.venue, s.runtime, 'From £' + s.priceFrom];
    dMeta.innerHTML = meta.map(function (m) { return '<span>' + esc(m) + '</span>'; }).join('<span class="sep">·</span>');
    dBlurb.textContent = s.longBlurb;
    dDates.innerHTML = s.dates.map(function (d) { return '<span class="date-pill">' + esc(d) + '</span>'; }).join('');
    closeScrim(bookingScrim);
    openScrim(detailScrim);
  }

  document.addEventListener('click', function (e) {
    var opener = e.target.closest('[data-open-detail]');
    if (opener) { openDetail(opener.getAttribute('data-open-detail')); return; }
    var card = e.target.closest('.event-card');
    if (card && card.getAttribute('data-id')) { openDetail(card.getAttribute('data-id')); }
  });

  if (dBook) dBook.addEventListener('click', function () {
    if (currentDetailId) openBooking(currentDetailId);
  });

  /* ---------- Booking modal ---------- */
  var bTitle = document.getElementById('booking-title');
  var bDates = document.getElementById('booking-dates');
  var bTickets = document.getElementById('booking-tickets');
  var bTotal = document.getElementById('booking-total');
  var bConfirm = document.getElementById('booking-confirm');
  var bFormView = document.getElementById('booking-form-view');
  var bConfirmView = document.getElementById('booking-confirm-view');
  var confirmLine = document.getElementById('confirm-line');
  var confirmMeta = document.getElementById('confirm-meta');

  var TICKET_TYPES = [{ key: 'adult', label: 'Adult' }, { key: 'concession', label: 'Concession' }, { key: 'child', label: 'Under 16' }];
  var bState = null;

  function priceFor(base) { return { adult: base, concession: Math.max(0, base - 6), child: Math.round(base / 2) }; }

  function openBooking(id) {
    var s = byId[id];
    if (!s) return;
    bState = { show: s, dateIdx: 0, qty: { adult: 2, concession: 0, child: 0 }, prices: priceFor(s.priceFrom) };
    bTitle.textContent = s.title;
    renderBookingDates();
    renderTickets();
    updateTotal();
    bConfirmView.hidden = true;
    bFormView.hidden = false;
    closeScrim(detailScrim);
    openScrim(bookingScrim);
  }

  function renderBookingDates() {
    bDates.innerHTML = '';
    bState.show.dates.forEach(function (d, i) {
      var btn = document.createElement('button');
      btn.type = 'button';
      btn.className = 'date-choice' + (i === bState.dateIdx ? ' active' : '');
      btn.textContent = d;
      btn.addEventListener('click', function () {
        bState.dateIdx = i;
        Array.prototype.forEach.call(bDates.children, function (c, ci) { c.classList.toggle('active', ci === i); });
      });
      bDates.appendChild(btn);
    });
  }

  function renderTickets() {
    bTickets.innerHTML = '';
    TICKET_TYPES.forEach(function (t) {
      var row = document.createElement('div');
      row.className = 'ticket-row';
      row.innerHTML =
        '<div><div class="lbl">' + esc(t.label) + '</div><div class="sub">£' + bState.prices[t.key] + '.00</div></div>' +
        '<div class="stepper">' +
          '<button type="button" data-dec aria-label="Decrease">−</button>' +
          '<span class="qty">' + bState.qty[t.key] + '</span>' +
          '<button type="button" data-inc aria-label="Increase">+</button>' +
        '</div>';
      var qtyEl = row.querySelector('.qty');
      row.querySelector('[data-dec]').addEventListener('click', function () {
        bState.qty[t.key] = Math.max(0, bState.qty[t.key] - 1); qtyEl.textContent = bState.qty[t.key]; updateTotal();
      });
      row.querySelector('[data-inc]').addEventListener('click', function () {
        bState.qty[t.key] += 1; qtyEl.textContent = bState.qty[t.key]; updateTotal();
      });
      bTickets.appendChild(row);
    });
  }

  function totals() {
    var total = 0, count = 0;
    TICKET_TYPES.forEach(function (t) { total += bState.prices[t.key] * bState.qty[t.key]; count += bState.qty[t.key]; });
    return { total: total, count: count };
  }
  function updateTotal() {
    var t = totals();
    bTotal.textContent = '£' + t.total + '.00';
    bConfirm.textContent = 'Confirm booking · £' + t.total + '.00';
    bConfirm.disabled = t.count === 0;
    bConfirm.style.opacity = t.count === 0 ? '0.5' : '';
  }

  if (bConfirm) bConfirm.addEventListener('click', function () {
    var t = totals();
    if (t.count === 0) return;
    confirmLine.textContent = t.count + ' × ' + bState.show.title;
    confirmMeta.textContent = bState.show.dates[bState.dateIdx] + ' · £' + t.total + '.00';
    bFormView.hidden = true;
    bConfirmView.hidden = false;
  });

  /* ---------- Newsletter (demo) ---------- */
  var newsForm = document.getElementById('news-form');
  var newsDone = document.getElementById('news-done');
  if (newsForm) newsForm.addEventListener('submit', function (e) {
    e.preventDefault();
    newsForm.hidden = true;
    if (newsDone) newsDone.hidden = false;
  });
})();
