<?php
/**
 * Template Name: Thank You — Lead Form
 * The Flying Biscuit Café — Franchising
 * v1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

get_header();
?>

<style>
  /* ─── CONFETTI CANVAS ─── */
  .thank-you__confetti {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 9999;
    pointer-events: none;
  }

  /* ─── HERO ─── */
  .thank-you__hero {
    background-color: #3d1a5c;
    padding: 96px 0 80px;
    text-align: center;
    position: relative;
    overflow: hidden;
    min-height: 50vh;
    display: flex;
    align-items: center;
  }

  .thank-you__hero::before {
    content: '';
    position: absolute;
    top: -30%;
    left: 50%;
    transform: translateX(-50%);
    width: 100%;
    height: 180%;
    background: radial-gradient(ellipse at center, rgba(244, 123, 32, 0.1) 0%, transparent 60%);
    pointer-events: none;
  }

  .thank-you__hero-inner {
    max-width: 620px;
    margin: 0 auto;
    padding: 0 40px;
    position: relative;
    z-index: 2;
  }

  /* ─── SUCCESS ICON ─── */
  .thank-you__icon {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 88px;
    height: 88px;
    border-radius: 50%;
    background: linear-gradient(135deg, #F47B20, #EEB211);
    margin-bottom: 28px;
    animation: iconPop 0.6s cubic-bezier(0.34, 1.56, 0.64, 1) 0.3s both;
    box-shadow: 0 8px 32px rgba(244, 123, 32, 0.35);
  }

  .thank-you__icon svg {
    width: 40px;
    height: 40px;
    color: #fff;
    stroke-dasharray: 60;
    stroke-dashoffset: 60;
    animation: checkDraw 0.5s ease 0.7s forwards;
  }

  @keyframes iconPop {
    from { opacity: 0; transform: scale(0.4); }
    to { opacity: 1; transform: scale(1); }
  }

  @keyframes checkDraw {
    to { stroke-dashoffset: 0; }
  }

  /* ─── EYEBROW ─── */
  .thank-you__eyebrow {
    font-family: 'Poppins', sans-serif;
    font-weight: 600;
    font-size: 12px;
    letter-spacing: 0.12em;
    text-transform: uppercase;
    color: #EEB211;
    margin-bottom: 12px;
    animation: fadeUp 0.6s ease 0.4s both;
  }

  /* ─── TITLE ─── */
  .thank-you__title {
    font-family: 'Playfair Display', serif;
    font-weight: 800;
    font-size: 44px;
    line-height: 1.15;
    letter-spacing: -0.02em;
    color: #fff;
    margin: 0 0 16px;
    animation: fadeUp 0.6s ease 0.5s both;
  }

  .thank-you__title-accent {
    background: linear-gradient(135deg, #F47B20, #EEB211);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
  }

  /* ─── DESCRIPTION ─── */
  .thank-you__desc {
    font-family: 'Poppins', sans-serif;
    font-weight: 400;
    font-size: 17px;
    line-height: 1.7;
    color: rgba(255, 255, 255, 0.55);
    margin: 0 auto 36px;
    max-width: 460px;
    animation: fadeUp 0.6s ease 0.6s both;
  }

  /* ─── BUTTONS ─── */
  .thank-you__actions {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 14px;
    animation: fadeUp 0.6s ease 0.7s both;
  }

  .thank-you__btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    font-family: 'Poppins', sans-serif;
    font-weight: 700;
    font-size: 13px;
    letter-spacing: 0.06em;
    text-transform: uppercase;
    text-decoration: none;
    padding: 16px 36px;
    border-radius: 999px;
    transition: transform 0.25s ease, box-shadow 0.25s ease;
    cursor: pointer;
    border: none;
  }

  .thank-you__btn:focus-visible {
    outline: 2px solid #EEB211;
    outline-offset: 3px;
  }

  .thank-you__btn--book {
    color: #fff;
    background: linear-gradient(135deg, #F47B20, #EEB211);
    box-shadow: 0 4px 20px rgba(244, 123, 32, 0.35);
    font-size: 14px;
    padding: 18px 40px;
  }

  .thank-you__btn--book:hover {
    color: #fff;
    transform: translateY(-2px);
    box-shadow: 0 8px 28px rgba(244, 123, 32, 0.45);
  }

  .thank-you__btn--home {
    color: rgba(255, 255, 255, 0.6);
    background: rgba(255, 255, 255, 0.06);
    border: 1px solid rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(8px);
    -webkit-backdrop-filter: blur(8px);
  }

  .thank-you__btn--home:hover {
    color: #fff;
    background: rgba(255, 255, 255, 0.12);
    border-color: rgba(255, 255, 255, 0.2);
    transform: translateY(-2px);
  }

  .thank-you__btn svg {
    flex-shrink: 0;
  }

  /* ─── DIVIDER ─── */
  .thank-you__divider {
    display: flex;
    align-items: center;
    gap: 12px;
    color: rgba(255, 255, 255, 0.2);
    font-family: 'Poppins', sans-serif;
    font-size: 12px;
    font-weight: 600;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    animation: fadeUp 0.6s ease 0.65s both;
    margin: 0 auto;
    max-width: 280px;
  }

  .thank-you__divider::before,
  .thank-you__divider::after {
    content: '';
    flex: 1;
    height: 1px;
    background: rgba(255, 255, 255, 0.1);
  }

  /* ─── BOOKING CARD ─── */
  .thank-you__book {
    background-color: #fff;
    padding: 80px 0;
  }

  .thank-you__book-inner {
    max-width: 680px;
    margin: 0 auto;
    padding: 0 40px;
  }

  .thank-you__book-card {
    background: #faf7f2;
    border-radius: 20px;
    padding: 48px 40px;
    text-align: center;
    position: relative;
    overflow: hidden;
    border: 1px solid rgba(0, 0, 0, 0.04);
  }

  .thank-you__book-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 32px;
    right: 32px;
    height: 4px;
    background: linear-gradient(135deg, #F47B20, #EEB211);
    border-radius: 0 0 4px 4px;
  }

  .thank-you__book-avatar {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 72px;
    height: 72px;
    border-radius: 50%;
    background: linear-gradient(135deg, rgba(106, 44, 145, 0.08), rgba(244, 123, 32, 0.08));
    color: #6A2C91;
    margin-bottom: 20px;
  }

  .thank-you__book-name {
    font-family: 'Playfair Display', serif;
    font-weight: 700;
    font-size: 24px;
    line-height: 1.25;
    color: #3d1a5c;
    margin: 0 0 4px;
  }

  .thank-you__book-role {
    font-family: 'Poppins', sans-serif;
    font-weight: 600;
    font-size: 13px;
    letter-spacing: 0.04em;
    color: #F47B20;
    margin: 0 0 16px;
  }

  .thank-you__book-desc {
    font-family: 'Poppins', sans-serif;
    font-weight: 400;
    font-size: 15px;
    line-height: 1.65;
    color: rgba(61, 26, 92, 0.65);
    margin: 0 auto 28px;
    max-width: 420px;
  }

  .thank-you__book-btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    font-family: 'Poppins', sans-serif;
    font-weight: 700;
    font-size: 13px;
    letter-spacing: 0.06em;
    text-transform: uppercase;
    text-decoration: none;
    color: #fff;
    background: linear-gradient(135deg, #F47B20, #EEB211);
    padding: 14px 32px;
    border-radius: 999px;
    transition: transform 0.25s ease, box-shadow 0.25s ease;
  }

  .thank-you__book-btn:hover {
    color: #fff;
    transform: translateY(-2px);
    box-shadow: 0 8px 24px rgba(244, 123, 32, 0.35);
  }

  .thank-you__book-btn:focus-visible {
    outline: 2px solid #6A2C91;
    outline-offset: 3px;
  }

  .thank-you__book-note {
    font-family: 'Poppins', sans-serif;
    font-weight: 400;
    font-size: 13px;
    color: rgba(61, 26, 92, 0.4);
    margin: 16px 0 0;
  }

  /* ─── FADE UP ─── */
  @keyframes fadeUp {
    from { opacity: 0; transform: translateY(16px); }
    to { opacity: 1; transform: translateY(0); }
  }

  /* ─── RESPONSIVE ─── */
  @media (max-width: 768px) {
    .thank-you__hero { padding: 96px 0 56px; min-height: auto; }
    .thank-you__hero-inner { padding: 0 24px; }
    .thank-you__title { font-size: 32px; }
    .thank-you__desc { font-size: 15px; }
    .thank-you__icon { width: 72px; height: 72px; }
    .thank-you__icon svg { width: 32px; height: 32px; }
    .thank-you__book { padding: 56px 0; }
    .thank-you__book-inner { padding: 0 24px; }
    .thank-you__book-card { padding: 36px 24px; }
    .thank-you__book-name { font-size: 20px; }
  }

  @media (max-width: 480px) {
    .thank-you__hero { padding: 96px 0 48px; }
    .thank-you__hero-inner { padding: 0 16px; }
    .thank-you__title { font-size: 28px; }
    .thank-you__btn { width: 100%; }
    .thank-you__book-inner { padding: 0 16px; }
  }
</style>

<div style="position:relative;">
<!-- Confetti canvas -->
<canvas class="thank-you__confetti" id="confetti-canvas"></canvas>

<main id="main-content">

  <!-- ─── HERO ─── -->
  <section class="thank-you__hero">
    <div class="thank-you__hero-inner">

      <div class="thank-you__icon">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
          <polyline points="20 6 9 17 4 12"/>
        </svg>
      </div>

      <p class="thank-you__eyebrow">Application Received</p>

      <h1 class="thank-you__title">
        You're One Step Closer to <span class="thank-you__title-accent">Owning a Biscuit!</span>
      </h1>

      <p class="thank-you__desc">
        Thank you for your interest in The Flying Biscuit Café. Our franchise team will review your application and reach out within 1–2 business days.
      </p>

      <div class="thank-you__actions">
        <a href="#book-section" class="thank-you__btn thank-you__btn--book">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
            <line x1="16" y1="2" x2="16" y2="6"/>
            <line x1="8" y1="2" x2="8" y2="6"/>
            <line x1="3" y1="10" x2="21" y2="10"/>
          </svg>
          Book a Call Now
        </a>

        <div class="thank-you__divider"><span>or</span></div>

        <a href="<?php echo esc_url( home_url() ); ?>" class="thank-you__btn thank-you__btn--home">
          Return to Homepage
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
            <line x1="5" y1="12" x2="19" y2="12"/>
            <polyline points="12 5 19 12 12 19"/>
          </svg>
        </a>
      </div>

    </div>
  </section>

  <!-- ─── BOOK A CALL ─── -->
  <section class="thank-you__book" id="book-section">
    <div class="thank-you__book-inner">
      <div class="thank-you__book-card">

        <div class="thank-you__book-avatar">
          <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
            <circle cx="12" cy="7" r="4"/>
          </svg>
        </div>

        <h2 class="thank-you__book-name">Schedule a Discovery Call</h2>
        <p class="thank-you__book-role">Director of Franchise Development</p>
        <p class="thank-you__book-desc">
          Skip the wait and book a one-on-one call with our franchise team. We'll walk you through the opportunity, answer your questions, and discuss available territories.
        </p>

        <a href="https://outlook.office.com/bookwithme/user/a93dee9c7c944eb7b750cc3a0c6f84d9@FlyingBiscuit.com?anonymous&ismsaljsauthenabled&ep=pcard" class="thank-you__book-btn" target="_blank" rel="noopener noreferrer">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
            <line x1="16" y1="2" x2="16" y2="6"/>
            <line x1="8" y1="2" x2="8" y2="6"/>
            <line x1="3" y1="10" x2="21" y2="10"/>
          </svg>
          Pick a Time
        </a>
        <p class="thank-you__book-note">30-minute call · No obligation</p>

      </div>
    </div>
  </section>

</main>
</div>

<script>
(function () {
  const canvas = document.getElementById('confetti-canvas');
  if (!canvas) return;
  const ctx = canvas.getContext('2d');
  let W, H;
  const particles = [];
  const colors = ['#F47B20', '#EEB211', '#6A2C91', '#fff', '#d4a017', '#ff9f43'];
  const total = 200;

  function resize() {
    W = canvas.width = canvas.parentElement.offsetWidth;
    H = canvas.height = canvas.parentElement.offsetHeight;
  }

  function Particle() {
    this.x = Math.random() * W;
    this.y = Math.random() * -H;
    this.w = 4 + Math.random() * 6;
    this.h = 3 + Math.random() * 4;
    this.color = colors[Math.floor(Math.random() * colors.length)];
    this.vy = 1.5 + Math.random() * 3;
    this.vx = (Math.random() - 0.5) * 2;
    this.rot = Math.random() * 360;
    this.rv = (Math.random() - 0.5) * 8;
    this.opacity = 1;
    this.fade = 0.0005 + Math.random() * 0.0015;
  }

  function init() {
    resize();
    for (let i = 0; i < total; i++) {
      particles.push(new Particle());
    }
    animate();
  }

  function animate() {
    ctx.clearRect(0, 0, W, H);
    let alive = false;

    particles.forEach(function (p) {
      if (p.opacity <= 0) return;
      alive = true;
      p.y += p.vy;
      p.x += p.vx;
      p.rot += p.rv;
      p.opacity -= p.fade;

      ctx.save();
      ctx.translate(p.x, p.y);
      ctx.rotate((p.rot * Math.PI) / 180);
      ctx.globalAlpha = Math.max(0, p.opacity);
      ctx.fillStyle = p.color;
      ctx.fillRect(-p.w / 2, -p.h / 2, p.w, p.h);
      ctx.restore();
    });

    if (alive) {
      requestAnimationFrame(animate);
    } else {
      canvas.style.display = 'none';
    }
  }

  window.addEventListener('resize', resize);
  init();
})();
</script>

<?php get_footer(); ?>