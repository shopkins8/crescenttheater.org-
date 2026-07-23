  </main>

  <footer class="site-footer">
    <div class="wrap footer-grid">
      <div>
        <div class="footer-brand">
          <img src="assets/logo-white.svg" alt="The Crescent Theater" width="188" height="27" class="brand-logo">
        </div>
        <p>In the heart of the Riverside district<br>Two minutes from Crescent Bridge station</p>
      </div>
      <div class="footer-col">
        <div class="h">Explore</div>
        <div class="footer-links">
          <a href="index.php">Home</a>
          <a href="whats-on.php">What’s on</a>
          <a href="about.php">About</a>
          <a href="membership.php">Membership</a>
        </div>
      </div>
      <div class="footer-col">
        <div class="h">Stay in the loop</div>
        <p style="margin-bottom:12px">Season announcements and pay-what-you-can drops, monthly.</p>
        <form class="news-form" id="news-form" action="#" method="post">
          <input type="email" name="email" placeholder="you@email.com" aria-label="Email address" required>
          <button type="submit" class="btn btn-yellow btn-sm">Sign up</button>
        </form>
        <div class="news-done" id="news-done" hidden>Thanks — you’re on the list.</div>
      </div>
    </div>
    <div class="footer-legal">
      <div class="wrap row">
        <span>© <?php echo date('Y'); ?> Crescent Arts Centre. A registered charity.</span>
        <span>Privacy · Terms · Accessibility</span>
      </div>
    </div>
  </footer>

  <!-- Detail modal -->
  <div class="modal-scrim" id="detail-scrim" role="dialog" aria-modal="true" aria-labelledby="detail-title">
    <div class="modal detail">
      <div class="hero-img">
        <img id="detail-img" src="" alt="">
        <button class="icon-close" type="button" data-close aria-label="Close">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M18 6 6 18M6 6l12 12"></path></svg>
        </button>
        <span class="chip bottom" id="detail-chip"></span>
      </div>
      <div class="content">
        <h2 id="detail-title"></h2>
        <div class="metarow" id="detail-meta"></div>
        <p class="long" id="detail-blurb"></p>
        <div class="subhead">Upcoming performances</div>
        <div class="date-pills" id="detail-dates"></div>
        <div class="modal-actions">
          <button class="btn btn-primary" type="button" id="detail-book">Book tickets</button>
          <button class="btn btn-outline" type="button" data-close>Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Booking modal -->
  <div class="modal-scrim" id="booking-scrim" role="dialog" aria-modal="true" aria-labelledby="booking-title">
    <div class="modal booking">
      <div id="booking-form-view">
        <div class="booking-head">
          <div>
            <div class="eyebrow" style="margin-bottom:4px">Book tickets</div>
            <h2 id="booking-title"></h2>
          </div>
          <button class="icon-close-light" type="button" data-close aria-label="Close">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M18 6 6 18M6 6l12 12"></path></svg>
          </button>
        </div>
        <div class="booking-body">
          <div class="subhead">Choose a performance</div>
          <div class="date-choices" id="booking-dates"></div>
          <div class="subhead">Tickets</div>
          <div class="tickets" id="booking-tickets"></div>
          <div class="total-row">
            <span style="font-size:15px;color:var(--text-muted)">Total</span>
            <span class="t" id="booking-total">£0.00</span>
          </div>
          <button class="btn btn-primary btn-block" type="button" id="booking-confirm">Confirm booking</button>
          <p class="fineprint">Members pay no booking fee. This is a demo checkout.</p>
        </div>
      </div>
      <div class="confirm-panel" id="booking-confirm-view" hidden>
        <div class="confirm-check">
          <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#368141" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"></path></svg>
        </div>
        <h2>You’re booked in!</h2>
        <p style="margin:0 0 4px;font-size:15px;color:var(--text-supportive)" id="confirm-line"></p>
        <p class="mono" style="margin:0 0 24px;font-size:13px;color:var(--text-muted)" id="confirm-meta"></p>
        <p style="margin:0 0 24px;font-size:14px;color:var(--text-muted)">A confirmation and your tickets are on the way to your inbox.</p>
        <button class="btn btn-primary" type="button" data-close>Done</button>
      </div>
    </div>
  </div>

  <script>window.CRESCENT_SHOWS = <?php echo json_encode($SHOWS, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); ?>;</script>
  <script src="assets/app.js"></script>
</body>
</html>
