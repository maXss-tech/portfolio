<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/project.php';
require_once __DIR__ . '/Contact_handler.php';
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta name="description" content="<?= SITE_OWNER ?> — Web Developer based in <?= SITE_LOCATION ?>. Building clean, fast, and purposeful digital experiences.">
<meta name="author" content="<?= SITE_OWNER ?>">
<title><?= SITE_OWNER ?> — Web Developer</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;1,9..40,300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="cursor" id="cursor"></div>
<div class="cursor-ring" id="cursorRing"></div>

<!-- ─── NAV ──────────────────────────────────────── -->
<nav>
  <a href="#hero" class="nav-logo">ADC<span>.</span></a>
  <ul class="nav-links">
    <li><a href="#about">About</a></li>
    <li><a href="#skills">Skills</a></li>
    <li><a href="#projects">Projects</a></li>
    <li><a href="#services">Services</a></li>
    <li><a href="#contact">Contact</a></li>
  </ul>
  <a href="#contact" class="nav-cta">Hire Me →</a>
</nav>

<!-- ─── HERO ──────────────────────────────────────── -->
<section id="hero">
  <div class="hero-mesh"></div>
  <div class="hero-grid"></div>
  <div class="hero-content">
    <div class="hero-badge"><span class="dot"></span> Available for freelance work</div>
    <h1 class="hero-name">
      Angel Denzel<br>
      <span class="grad">Cordovez</span>
    </h1>
    <p class="hero-sub">
      Web Developer based in <strong>Manila, Philippines</strong> — building clean, fast, and purposeful digital experiences for businesses and brands.
    </p>
    <div class="hero-actions">
      <a href="#projects" class="btn-primary">View My Work →</a>
      <a href="#contact" class="btn-ghost">Get in Touch</a>
    </div>
  </div>
  <div class="hero-stats">
    <div class="stat">
      <div class="stat-num"><?= count($projects) ?>+</div>
      <div class="stat-label">Projects Done</div>
    </div>
    <div class="stat"><div class="stat-num">4</div><div class="stat-label">Services Offered</div></div>
    <div class="stat"><div class="stat-num">20</div><div class="stat-label">Years Old</div></div>
  </div>
  <div class="scroll-hint"><div class="scroll-line"></div><span>Scroll to explore</span></div>
</section>

<!-- ─── ABOUT ─────────────────────────────────────── -->
<section id="about">
  <div class="about-grid">
    <div class="about-img-wrap reveal">
      <img src="https://i.postimg.cc/vTtZvZM3/bce1d561-3267-41ff-bdf8-7915073b2caa.jpg"
           alt="<?= htmlspecialchars(SITE_OWNER) ?>"
           class="about-img"
           loading="lazy">
      <div class="about-frame"></div>
      <div class="about-glow"></div>
    </div>
    <div class="about-text">
      <div class="section-tag reveal">About Me</div>
      <h2 class="section-title reveal">I build things<br>for the web.</h2>
      <p class="reveal">Hi! I'm <?= SITE_OWNER ?> — a 20-year-old web developer and student at <?= SITE_SCHOOL ?>, Sampaloc, Manila. I'm passionate about creating websites and web applications that are not just functional, but genuinely enjoyable to use.</p>
      <p class="reveal">From simple landing pages to full-stack web systems, I bring ideas to life with clean code and intentional design.</p>
      <div class="about-details reveal">
        <div class="detail-item">
          <span class="detail-label">Location</span>
          <span class="detail-value"><?= SITE_LOCATION ?></span>
        </div>
        <div class="detail-item">
          <span class="detail-label">School</span>
          <span class="detail-value"><?= SITE_SCHOOL ?></span>
        </div>
        <div class="detail-item">
          <span class="detail-label">Status</span>
          <span class="detail-value">Open to Freelance</span>
        </div>
        <div class="detail-item">
          <span class="detail-label">Age</span>
          <span class="detail-value">20 years old</span>
        </div>
      </div>
      <div class="socials reveal">
        <a href="mailto:<?= SITE_EMAIL ?>" class="social-link" title="Email" aria-label="Email">
          <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="5" width="18" height="14" rx="2"/><polyline points="3,5 12,13 21,5"/></svg>
        </a>
        <a href="<?= SITE_FB ?>" target="_blank" rel="noopener" class="social-link" title="Facebook" aria-label="Facebook">
          <svg width="17" height="17" viewBox="0 0 24 24" fill="currentColor"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
        </a>
        <a href="<?= SITE_LI ?>" target="_blank" rel="noopener" class="social-link" title="LinkedIn" aria-label="LinkedIn">
          <svg width="17" height="17" viewBox="0 0 24 24" fill="currentColor"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-4 0v7H10V9h4v2a6 6 0 0 1 6-3z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- ─── SKILLS ─────────────────────────────────────── -->
<section id="skills">
  <div class="section-tag reveal">Skills & Tools</div>
  <h2 class="section-title reveal">What I work with</h2>
  <p class="section-desc reveal">My technical toolkit built through coursework, personal projects, and hands-on freelance experience.</p>
  <div class="skills-grid">
    <?php foreach ($skills as $i => $s): ?>
    <div class="skill-card reveal reveal-d<?= ($i % 3) + 1 ?>">
      <div class="skill-icon"><?= $s['icon'] ?></div>
      <div class="skill-name"><?= htmlspecialchars($s['name']) ?></div>
      <div class="skill-desc"><?= htmlspecialchars($s['desc']) ?></div>
      <div class="skill-bar-wrap">
        <div class="skill-bar" data-width="<?= $s['pct'] ?>%"></div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- ─── PROJECTS ───────────────────────────────────── -->
<section id="projects">
  <div class="section-tag reveal">Portfolio</div>
  <h2 class="section-title reveal">Featured Projects</h2>
  <p class="section-desc reveal">A selection of web work I've built — from concept to deployment.</p>
  <div class="projects-grid">
    <?php foreach ($projects as $p): ?>
    <div class="project-card reveal">
      <?php if (!empty($p['img'])): ?>
        <img src="<?= htmlspecialchars($p['img']) ?>"
             alt="<?= htmlspecialchars($p['title']) ?>"
             class="proj-thumb"
             loading="lazy">
      <?php else: ?>
        <div class="proj-placeholder">
          <div class="proj-placeholder-inner" style="background:linear-gradient(135deg,#f0c060,#ff6b6b);"></div>
          <span class="proj-placeholder-label">Coming Soon</span>
        </div>
      <?php endif; ?>
      <div class="project-body">
        <div class="project-tags">
          <?php foreach ($p['tags'] as $tag): ?>
          <span class="tag"><?= htmlspecialchars($tag) ?></span>
          <?php endforeach; ?>
        </div>
        <div class="project-title"><?= htmlspecialchars($p['title']) ?></div>
        <p class="project-desc"><?= htmlspecialchars($p['desc']) ?></p>
        <?php if ($p['live']): ?>
          <a href="<?= htmlspecialchars($p['url']) ?>" class="project-link" target="_blank" rel="noopener">View Project →</a>
        <?php else: ?>
          <span class="project-link disabled">Work in Progress…</span>
        <?php endif; ?>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- ─── SERVICES ──────────────────────────────────── -->
<section id="services">
  <div class="section-tag reveal">What I Offer</div>
  <h2 class="section-title reveal">Services & Pricing</h2>
  <p class="section-desc reveal">Transparent, fair rates for quality web work — designed for local businesses and entrepreneurs.</p>
  <div class="services-grid">
    <?php foreach ($services as $i => $sv): ?>
    <div class="service-card reveal reveal-d<?= ($i % 2) + 1 ?>">
      <div class="service-num"><?= $sv['num'] ?></div>
      <div class="service-icon"><?= $sv['icon'] ?></div>
      <div class="service-name"><?= htmlspecialchars($sv['name']) ?></div>
      <div class="service-target"><?= htmlspecialchars($sv['target']) ?></div>
      <ul class="service-features">
        <?php foreach ($sv['features'] as $f): ?>
        <li><?= htmlspecialchars($f) ?></li>
        <?php endforeach; ?>
      </ul>
      <div class="service-price"><?= htmlspecialchars($sv['price']) ?></div>
    </div>
    <?php endforeach; ?>
  </div>
  <div class="hosting-note reveal">
    <span style="font-size:1.2rem;flex-shrink:0;margin-top:1px;">🌐</span>
    <div><strong style="color:var(--text);">Need hosting?</strong> If you can't provide hosting, I can manage it for an additional fee — domain setup, server configuration, and full deployment included.</div>
  </div>
</section>

<!-- ─── CONTACT ───────────────────────────────────── -->
<section id="contact">
  <div class="contact-wrap">
    <div>
      <div class="section-tag reveal">Let's Work Together</div>
      <h2 class="section-title reveal">Have a project<br>in mind?</h2>
      <p class="section-desc reveal" style="margin-bottom:40px;">Whether you need a simple landing page or a full web system — I'd love to hear about it. Send me a message and let's build something great.</p>
      <div class="contact-info-list reveal">
        <div class="contact-item">
          <span class="contact-item-label">Email</span>
          <div class="contact-item-value"><a href="mailto:<?= SITE_EMAIL ?>"><?= SITE_EMAIL ?></a></div>
        </div>
        <div class="contact-item">
          <span class="contact-item-label">Facebook</span>
          <div class="contact-item-value"><a href="<?= SITE_FB ?>" target="_blank" rel="noopener">facebook.com/denzelcordovez26</a></div>
        </div>
        <div class="contact-item">
          <span class="contact-item-label">LinkedIn</span>
          <div class="contact-item-value"><a href="<?= SITE_LI ?>" target="_blank" rel="noopener">linkedin.com/in/denzel-cordovez</a></div>
        </div>
        <div class="contact-item">
          <span class="contact-item-label">Location</span>
          <div class="contact-item-value"><?= SITE_LOCATION ?></div>
        </div>
      </div>
    </div>

    <div class="reveal">
      <div class="form-status" id="formStatus"></div>
      <form class="contact-form" id="contactForm" method="POST" action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" novalidate>
        <input type="hidden" name="ajax" value="1">
        <div class="hp-field" aria-hidden="true">
          <label for="website">Website (leave blank)</label>
          <input type="text" id="website" name="website" tabindex="-1" autocomplete="off">
        </div>
        <div class="form-group">
          <label for="name">Your Name</label>
          <input type="text" id="name" name="name"
                 placeholder="Juan dela Cruz"
                 value="<?= htmlspecialchars($_POST['name'] ?? '') ?>" required>
        </div>
        <div class="form-group">
          <label for="email">Email Address</label>
          <input type="email" id="email" name="email"
                 placeholder="juan@email.com"
                 value="<?= htmlspecialchars($_POST['email'] ?? '') ?>" required>
        </div>
        <div class="form-group">
          <label for="service">Service Interested In</label>
          <select id="service" name="service">
            <option value="">Select a service…</option>
            <?php
            $serviceOptions = [
              'Single-Page Landing Site (₱3,500 – ₱6,000)',
              'Standard Multi-Page Site (₱7,000 – ₱15,000)',
              'Basic E-Commerce Store (₱16,000 – ₱30,000)',
              'Custom Web App / System (₱25,000 – ₱45,000)',
              'Other / Not Sure Yet',
            ];
            foreach ($serviceOptions as $opt):
              $sel = (($_POST['service'] ?? '') === $opt) ? 'selected' : '';
            ?>
            <option value="<?= htmlspecialchars($opt) ?>" <?= $sel ?>><?= htmlspecialchars($opt) ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="form-group">
          <label for="message">Message</label>
          <textarea id="message" name="message" placeholder="Tell me about your project…" required><?= htmlspecialchars($_POST['message'] ?? '') ?></textarea>
        </div>
        <button type="submit" class="btn-primary btn-submit" id="submitBtn">Send Message →</button>
      </form>
    </div>
  </div>
</section>

<!-- ─── FOOTER ─────────────────────────────────────── -->
<footer>
  <div>© <?= SITE_YEAR ?> <strong><?= SITE_OWNER ?></strong>. All rights reserved.</div>
  <div>Built with ❤️ in <a href="#hero">Manila, PH</a></div>
</footer>

<script>
/* ─── CURSOR ─────────────────────────────────────── */
const cursor = document.getElementById('cursor');
const ring   = document.getElementById('cursorRing');
let mx=0, my=0, rx=0, ry=0;
document.addEventListener('mousemove', e => { mx=e.clientX; my=e.clientY; });
(function tick() {
  rx += (mx-rx) * .12; ry += (my-ry) * .12;
  cursor.style.cssText += `left:${mx}px;top:${my}px;`;
  ring.style.cssText   += `left:${rx}px;top:${ry}px;`;
  requestAnimationFrame(tick);
})();
document.querySelectorAll('a,button,.project-card,.service-card,.skill-card').forEach(el => {
  el.addEventListener('mouseenter', () => {
    cursor.style.width = cursor.style.height = '18px';
    ring.style.width = ring.style.height = '58px';
    ring.style.opacity = '.2';
    ring.style.borderColor = 'rgba(0,200,160,.6)';
  });
  el.addEventListener('mouseleave', () => {
    cursor.style.width = cursor.style.height = '8px';
    ring.style.width = ring.style.height = '34px';
    ring.style.opacity = '1';
    ring.style.borderColor = 'rgba(0,200,160,.5)';
  });
});

/* ─── SCROLL REVEAL ──────────────────────────────── */
const observer = new IntersectionObserver(entries => {
  entries.forEach((entry, i) => {
    if (entry.isIntersecting) {
      setTimeout(() => entry.target.classList.add('visible'), i * 55);
      observer.unobserve(entry.target);
    }
  });
}, { threshold: .1 });
document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

/* ─── SKILL BARS ─────────────────────────────────── */
const barObs = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.querySelectorAll('.skill-bar').forEach(b => { b.style.width = b.dataset.width; });
      barObs.unobserve(entry.target);
    }
  });
}, { threshold: .25 });
const grid = document.querySelector('.skills-grid');
if (grid) barObs.observe(grid);

/* ─── AJAX CONTACT FORM ───────────────────────────── */
const form      = document.getElementById('contactForm');
const submitBtn = document.getElementById('submitBtn');
const statusEl  = document.getElementById('formStatus');

function showStatus(msg, type) {
  statusEl.textContent = msg;
  statusEl.className   = 'form-status ' + type;
  statusEl.scrollIntoView({ behavior:'smooth', block:'nearest' });
}

form.addEventListener('submit', async e => {
  e.preventDefault();
  submitBtn.disabled    = true;
  submitBtn.textContent = 'Sending…';
  statusEl.className    = 'form-status';
  try {
    const data = new FormData(form);
    const res  = await fetch(window.location.pathname, { method:'POST', body:data });
    const json = await res.json();
    if (json.success) { showStatus('✓ ' + json.message, 'success'); form.reset(); }
    else              { showStatus('⚠ ' + json.message, 'error'); }
  } catch (err) {
    showStatus('⚠ Network error. Please try again or email me directly.', 'error');
  } finally {
    submitBtn.disabled    = false;
    submitBtn.textContent = 'Send Message →';
  }
});

/* ─── SMOOTH NAV HIGHLIGHT ───────────────────────── */
const sections = document.querySelectorAll('section[id]');
const navLinks = document.querySelectorAll('.nav-links a');
window.addEventListener('scroll', () => {
  let current = '';
  sections.forEach(s => { if (window.scrollY >= s.offsetTop - 120) current = s.id; });
  navLinks.forEach(a => {
    a.style.color = a.getAttribute('href') === '#' + current ? 'var(--text)' : '';
  });
}, { passive:true });
</script>
</body>
</html>