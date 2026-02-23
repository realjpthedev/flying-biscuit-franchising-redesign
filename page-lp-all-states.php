<?php

// Prevent direct file access
if ( ! defined( 'ABSPATH' ) ) {
  exit;
}


get_header();
?>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
</style>

<style>
  :root{
    --brand-primary:#6A2C91; /* Purple */
    --brand-primary-dark: #511F70;
    --brand-secondary:#F47B20; /* Orange */
    --brand-tertiary:#EEB211; /* Yellow */
    --ink:#1b1033;
    --muted:#6b6282;
    --bg:#fff;
    --card:#ffffff;
    --success:#12b886;
    --warning:#ffc53d;
    --danger:#ef4444;
    --radius:18px;
    --shadow:0 10px 24px rgba(106,44,145,.15);
  }
  *{box-sizing:border-box}
  html,body{margin:0;background:var(--bg);color:var(--ink);font-family:Inter,system-ui,-apple-system,Segoe UI,Roboto,Arial,sans-serif;}
  a{color:inherit}

  /* Layout */
  .container{max-width:1120px;margin-inline:auto;padding:24px}

  /* Hero */
  .hero{background:linear-gradient(180deg, rgba(106,44,145,.08), rgba(106,44,145,0) 60%), radial-gradient(1200px 600px at 85% -20%, rgba(244,123,32,.08), transparent 60%); min-height: 50vh; padding-top: 3rem; padding-bottom: 2rem;}
  .hero-inner{display:grid;grid-template-columns:1.05fr .95fr;gap:28px;align-items:center}
  @media (max-width:980px){.hero-inner{grid-template-columns:1fr;}}

  .badge{display:inline-flex;gap:8px;align-items:center;background:#fff;border:2px solid #f2e8ff;padding:6px 10px;border-radius:999px;font-weight:700;font-size:.86rem;color:var(--brand-primary);box-shadow:var(--shadow)}
  .badge .dot{width:9px;height:9px;border-radius:50%;background:var(--success);box-shadow:0 0 0 6px rgba(18,184,134,.15)}

  h1{font-size:clamp(28px,3.2vw,44px);line-height:1.05;margin:14px 0 10px;color:var(--brand-primary)}
  .sub{font-size:clamp(15px,1.6vw,18px);color:#3b2a58}

  .cta-row{display:flex;gap:14px;flex-wrap:wrap;margin:18px 0 6px}
  .btn{appearance:none;border:none;cursor:pointer;padding:14px 18px;border-radius:14px;font-weight:800;letter-spacing:.2px}
  .btn-primary{background:var(--brand-secondary);color:#fff;box-shadow:0 10px 24px rgba(244,123,32,.3)}
  .btn-secondary{background:#fff;color:var(--brand-primary);border:2px solid #efe7f6}

  .trustbar{display:flex;gap:18px;flex-wrap:wrap;align-items:center;margin-top:14px}
  .stars{display:inline-flex;gap:3px}
  .star{width:18px;height:18px;clip-path:polygon(50% 0%,61% 35%,98% 35%,68% 57%,79% 91%,50% 70%,21% 91%,32% 57%,2% 35%,39% 35%);background:var(--brand-tertiary)}
  .trust-logos{display:flex;gap:16px;opacity:.85;flex-wrap:wrap}
  .logo{height:28px;width:auto;border-radius:6px;background:linear-gradient(180deg,#fff, #f5f2ff);border:1px solid #eee;padding:4px 10px;font-weight:700;color:#6d6d6d}

  /* Hero Callouts */
.hero__callouts {
  display: flex;
  flex-wrap: wrap;
  gap: 10px;
  margin: 16px 0 0;
}

.hero__callout {
  font-weight: 900;
  font-size: .85rem;
  background: #f1e9fb;
  color: #3b2a58;
  border: 1px solid #e6d8f7;
  border-radius: 999px;
  padding: 6px 12px;
  display: inline-flex;
  align-items: center;
  gap: 6px;
}

/* Optional: add a subtle icon/dot before each */
.hero__callout::before {
  content: '✓';
  color: var(--brand-secondary);
  font-size: .75rem;
}

/* Hover effect */
.hero__callout {
  transition: background .2s ease, border-color .2s ease, transform .2s ease;
}

.hero__callout:hover {
  background: #e6d8f7;
  border-color: var(--brand-primary);
  transform: translateY(-2px);
}

@media (max-width: 600px) {
  .hero__callout {
    font-size: .8rem;
    padding: 5px 10px;
  }
}

/* ===== Hero Reel (Vertical Video) ===== */
.hero__reel {
  background: #fff;
  border: 1.5px solid #efe7f6;
  border-radius: var(--radius);
  box-shadow: var(--shadow);
  padding: 12px;
  max-width: 340px;
  margin-left: auto;
}

@media (max-width: 980px) {
  .hero__reel {
    margin: 0 auto;
    max-width: 320px;
  }
}

.hero__reel-frame {
  position: relative;
  border-radius: 16px;
  overflow: hidden;
  background: #120a22;
  aspect-ratio: 9 / 16;
}

.hero__reel-poster {
  position: absolute;
  inset: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  filter: brightness(.88);
}

.hero__reel-overlay {
  position: absolute;
  inset: 0;
  pointer-events: none;
}

.hero__reel-pill {
  position: absolute;
  top: 10px;
  left: 10px;
  background: rgba(255,255,255,.92);
  border: 1px solid #efe7f6;
  border-radius: 999px;
  padding: 6px 10px;
  font-weight: 900;
  color: #3b2a58;
  font-size: .85rem;
}

.hero__reel-play {
  position: absolute;
  inset: 0;
  display: grid;
  place-items: center;
}

.hero__reel-play::before {
  content: "";
  width: 74px;
  height: 74px;
  border-radius: 50%;
  background: rgba(0,0,0,.55);
  box-shadow: 0 10px 24px rgba(0,0,0,.25);
  position: absolute;
  transition: transform .2s ease, background .2s ease;
}

.hero__reel-frame:hover .hero__reel-play::before {
  transform: scale(1.06);
  background: rgba(0,0,0,.7);
}

.hero__reel-play svg {
  position: relative;
  z-index: 1;
}

.hero__reel-actions {
  position: absolute;
  right: 10px;
  bottom: 62px;
  display: grid;
  gap: 10px;
}

.hero__reel-action {
  pointer-events: auto;
  width: 56px;
  border: none;
  background: rgba(0,0,0,.45);
  color: #fff;
  border-radius: 14px;
  padding: 10px 8px;
  font-weight: 900;
  cursor: default;
  display: grid;
  place-items: center;
  gap: 4px;
}

.hero__reel-action small {
  font-weight: 800;
  font-size: .75rem;
  opacity: .9;
}

.hero__reel-caption {
  position: absolute;
  left: 10px;
  right: 78px;
  bottom: 12px;
  background: rgba(0,0,0,.45);
  color: #fff;
  border-radius: 14px;
  padding: 10px 10px;
  line-height: 1.35;
  font-size: .88rem;
}

.hero__reel-hit {
  position: absolute;
  inset: 0;
  border: none;
  background: transparent;
  cursor: pointer;
}

.hero__reel-note {
  margin: 10px 4px 2px;
  color: #7a6a95;
  font-size: .85rem;
  text-align: center;
}

/* ===== Outlined Gradient Border Proof Cards ===== */
.proof-cards {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 16px;
  margin-top: 22px;
}
@media (max-width: 600px) {
  .proof-cards {
    grid-template-columns: 1fr;
  }
}

.proof-cards .card {
  position: relative;
  background: #fff;
  border-radius: var(--radius);
  padding: 28px 24px;
  text-align: center;
  box-shadow: 0 8px 24px rgba(106,44,145,.1);
  transition: transform .3s ease, box-shadow .3s ease;
}

/* Gradient border - always visible */
.proof-cards .card::before {
  content: '';
  position: absolute;
  inset: 0;
  border-radius: var(--radius);
  padding: 2.5px;
  background: linear-gradient(135deg, var(--brand-primary), var(--brand-secondary), var(--brand-tertiary));
  -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
  -webkit-mask-composite: xor;
  mask-composite: exclude;
  opacity: 1;
  transition: padding .3s ease;
}

.proof-cards .card:hover {
  transform: translateY(-6px);
  box-shadow: 0 20px 48px rgba(106,44,145,.18);
}

.proof-cards .card:hover::before {
  padding: 3.5px;
}

/* Large icon badge */
.proof-cards .card__badge {
  width: 64px;
  height: 64px;
  margin: 0 auto 14px;
  border-radius: 50%;
  display: grid;
  place-items: center;
  font-size: 1.8rem;
  background: linear-gradient(135deg, rgba(106,44,145,.08), rgba(244,123,32,.08));
  border: 2px solid #efe7f6;
  transition: transform .3s ease, border-color .3s ease, background .3s ease;
}

.proof-cards .card:hover .card__badge {
  transform: scale(1.1) rotate(-5deg);
  border-color: var(--brand-secondary);
  background: linear-gradient(135deg, rgba(106,44,145,.12), rgba(244,123,32,.12));
}

.proof-cards .card .kpi {
  font-size: 1.9rem;
  font-weight: 900;
  background: linear-gradient(135deg, var(--brand-primary) 0%, var(--brand-secondary) 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  line-height: 1.1;
  margin-bottom: 6px;
}

.proof-cards .card .quote {
  color: #4a3f61;
  font-size: .95rem;
  font-weight: 500;
  line-height: 1.5;
}

.proof-cards .card small {
  color: #7a6a95;
  font-size: .8rem;
}

/* Reduce motion */
@media (prefers-reduced-motion: reduce) {
  .proof-cards .card,
  .proof-cards .card::before,
  .proof-cards .card__badge {
    transition: none;
  }
}

    /* Franchisee Success Stories */
     .stories {
      background:#fff;
      padding:40px 0;
    }

    .stories__container {
      max-width:1120px;
      margin:auto;
      padding:0 24px;
    }

    .stories__heading {
      text-align:center;
      margin-bottom:28px;
      color: var(--brand-primary)
    }

    .stories__grid {
      display:grid;
      grid-template-columns:repeat(auto-fit,minmax(300px,1fr));
      gap:24px;
    }

    .stories__card {
      background:#fff;
      border-radius:var(--radius);
      box-shadow:var(--shadow);
      overflow:hidden;
      position:relative;
      display:flex;
      flex-direction:column;
    }

    .stories__thumb {
      position:relative;
      width:100%;
      padding-top:56.25%;
      overflow:hidden;
      cursor:pointer;
    }

    .stories__thumb img {
      position:absolute;
      inset:0;
      width:100%;
      height:100%;
      object-fit:cover;
      filter:brightness(.85);
    }

    .stories__play-overlay {
      position:absolute;
      inset:0;
      display:grid;
      place-items:center;
      transition:background .3s ease;
    }

    .stories__play-btn {
      width:64px;
      height:64px;
      border-radius:50%;
      background:rgba(0,0,0,.55);
      display:grid;
      place-items:center;
      transition:transform .2s ease, background .2s ease;
    }

    .stories__play-btn svg {
      width:28px;
      height:28px;
      fill:#fff;
      margin-left:2px;
    }

    .stories__thumb:hover .stories__play-btn {
      transform:scale(1.1);
      background:rgba(0,0,0,.7);
    }

    .stories__content {
      padding:16px;
    }

    .stories__quote {
      font-style:italic;
      color:#4a3f61;
      margin-bottom:8px;
    }

    /* AUV Chart */
      .auv-chart { background:#fff; padding:40px 0; }
    .auv-chart__container { max-width:1120px; margin:auto; padding:0 24px; }
    .auv-chart__heading { text-align:center; margin-bottom:8px; }
    .auv-chart__sub { text-align:center; color:#6b6282; margin-bottom:24px; }
    .auv-chart__wrap { position:relative; max-width:860px; margin:0 auto; height:320px; border-left:3px solid #efe7f6; border-bottom:3px solid #efe7f6; padding:12px 12px 0 12px; }
    .auv-chart__grid { position:absolute; inset:0 0 28px 40px; display:grid; grid-template-columns:repeat(3,1fr); align-items:end; gap:24px; }
    .auv-chart__bar { position:relative; height:0; border-radius:12px 12px 0 0; overflow:visible; transition:height 1.2s ease-in-out; }
    .auv-chart__bar--flying { background:linear-gradient(180deg,var(--brand-secondary),var(--brand-tertiary)); box-shadow:0 8px 18px rgba(244,123,32,.25); }
    .auv-chart__bar--eggs { background:#d8c9f0; }
    .auv-chart__bar--abec { background:#c7bed9; }
    .auv-chart__value { position:absolute; bottom:100%; left:50%; transform:translate(-50%,-8px); background:#fff; color:#3b2a58; padding:6px 8px; border-radius:8px; box-shadow:var(--shadow); font-weight:800; font-size:.95rem; opacity:0; transition:opacity .5s ease .9s; white-space:nowrap; }
    .auv-chart__label { position:absolute; bottom:-24px; left:50%; transform:translateX(-50%); color:#6b6282; font-size:.9rem; text-align:center; width:120px; font-weight: bold }
    .auv-chart__y { position:absolute; left:0; top:0; bottom:28px; width:40px; color:#6b6282; font-size:.8rem; display:flex; flex-direction:column; justify-content:space-between; align-items:flex-end; padding:6px 6px 0 0; }
    @media(max-width:720px){ .auv-chart__grid{ gap:16px } .auv-chart__label{ width:90px;font-size:.85rem } }

    /* Form Section */
    .form-section { background:#fff7ff; padding:60px 0; }
    .form-section__container { max-width:1120px; margin:auto; padding:0 24px; display:grid; grid-template-columns:1fr 1fr; gap:40px; align-items:start; }
    @media(max-width:900px){ .form-section__container{ grid-template-columns:1fr; } }

    .form-section__left { background:#fff; border-radius:var(--radius); box-shadow:var(--shadow); padding:1rem; }
    .form-section__heading { font-size:1.75rem; margin-bottom:8px; }
    .form-section__sub { color:#4a3f61; margin-bottom:24px; }

    .form-section__body { display:grid; gap:16px; }
    .form-section__field label { font-weight:600; display:block; margin-bottom:4px; }
    .form-section__input, .form-section__select { width:100%; padding:12px; border:1px solid #ddd; border-radius:var(--radius); font-size:1rem; }
    .form-section__submit { background:var(--brand-secondary); color:#fff; font-weight:700; border:none; border-radius:var(--radius); padding:14px 20px; font-size:1rem; cursor:pointer; transition:background .3s ease; }
    .form-section__submit:hover { background:#d96900; }

    .form-section__right { text-align:center; display:flex; flex-direction:column; gap:20px; justify-content:center; }
    /* Reorder right-column blocks: video on top, then carousel, then proof cards */
    .form-section__video { order: 0; }
    .form-section__carousel { order: 1; }
    .form-section__proof-cards { display:grid; grid-template-columns:repeat(3, minmax(0, 1fr)); gap:16px; align-items:stretch; }
    @media (max-width:900px){ .form-section__proof-cards{ grid-template-columns:repeat(2, minmax(0, 1fr)); } }
    @media (max-width:560px){ .form-section__proof-cards{ grid-template-columns:1fr; } }
    .form-section__proof-title { font-size:1.4rem; font-weight:800; color:var(--brand-primary); margin-bottom:20px; }
    .form-section__proof-cards { display:grid; grid-template-columns:repeat(3, minmax(0, 1fr)); gap:16px; align-items:stretch; }
    @media (max-width:900px){ .form-section__proof-cards{ grid-template-columns:repeat(2, minmax(0, 1fr)); } }
    @media (max-width:560px){ .form-section__proof-cards{ grid-template-columns:1fr; } }
    .form-section__card { background:#fff; border-radius:var(--radius); box-shadow:var(--shadow); padding:20px 24px; transition:transform .2s ease; }
    .form-section__card:hover { transform:translateY(-3px); }
    .form-section__value { font-size:1.6rem; font-weight:800; color:var(--brand-secondary); }
    .form-section__label { color:#4a3f61; font-size:.9rem; }

    .form-section__note { grid-column:1 / -1; text-align:center; color:#7a6a95; font-size:.85rem; margin-top:24px; }
  .form-section { background:#fff7ff; padding:60px 0; }
    .form-section__container { max-width:1120px; margin:auto; padding:0 24px; display:grid; grid-template-columns:1fr 1fr; gap:40px; align-items:start; }
    @media(max-width:900px){ .form-section__container{ grid-template-columns:1fr; } }

    .form-section__left { background:#fff; border-radius:var(--radius); box-shadow:var(--shadow); padding:1rem; }
    .form-section__heading { font-size:1.75rem; margin-bottom:8px; }
    .form-section__sub { color:#4a3f61; margin-bottom:24px; }

    .form-section__body { display:grid; gap:16px; }
    .form-section__field label { font-weight:600; display:block; margin-bottom:4px; }
    .form-section__input, .form-section__select { width:100%; padding:12px; border:1px solid #ddd; border-radius:var(--radius); font-size:1rem; }
    .form-section__submit { background:var(--brand-secondary); color:#fff; font-weight:700; border:none; border-radius:var(--radius); padding:14px 20px; font-size:1rem; cursor:pointer; transition:background .3s ease; }
    .form-section__submit:hover { background:#d96900; }

    .form-section__right { text-align:center; display:flex; flex-direction:column; gap:20px; justify-content:center; }
    .form-section__proof-title { font-size:1.4rem; font-weight:800; color:var(--brand-primary); }
    .form-section__proof-cards { display:grid; grid-template-columns:repeat(3, minmax(0, 1fr)); gap:16px; align-items:stretch; }
    @media (max-width:900px){ .form-section__proof-cards{ grid-template-columns:repeat(2, minmax(0, 1fr)); } }
    @media (max-width:560px){ .form-section__proof-cards{ grid-template-columns:1fr; } }
    .form-section__card { background:#fff; border-radius:var(--radius); box-shadow:var(--shadow); padding:16px 20px; transition:transform .2s ease; }
    .form-section__card:hover { transform:translateY(-3px); }
    .form-section__value { font-size:1.6rem; font-weight:800; color:var(--brand-secondary); }
    .form-section__label { color:#4a3f61; font-size:.9rem; }


    /* Video clip */
    .form-section__video { background:#fff; border-radius:var(--radius); box-shadow:var(--shadow); overflow:hidden; }
    .form-section__thumb { position:relative; padding-top:56.25%; cursor:pointer; }
    .form-section__thumb img { position:absolute; inset:0; width:100%; height:100%; object-fit:cover; filter:brightness(.85); }
    .form-section__play { position:absolute; inset:0; display:grid; place-items:center; }
    .form-section__play-btn { width:60px; height:60px; border-radius:50%; background:rgba(0,0,0,.55); display:grid; place-items:center; }
    .form-section__play-btn svg { width:26px; height:26px; fill:#fff; margin-left:2px; }

    .form-section__note { grid-column:1 / -1; text-align:center; color:#7a6a95; font-size:.85rem; margin-top:24px; }


    /* FAQ Section */
    .faq { background:#fff; padding:60px 0; }
    .faq__container { max-width:1120px; margin:auto; padding:0 24px; }
    .faq__heading { text-align:center; margin:0 0 8px; color:var(--brand-primary); }
    .faq__sub { text-align:center; color:#4a3f61; margin:0 0 24px; }
    .faq__list { display:grid; gap:12px; }
    .faq__item { background:#fff; border:1.5px solid #efe7f6; border-radius:14px; box-shadow:var(--shadow); overflow:hidden; }
    .faq__summary { list-style:none; cursor:pointer; padding:16px 18px; font-weight:800; color:#3b2a58; display:flex; justify-content:space-between; align-items:center; }
    .faq__summary::-webkit-details-marker { display:none; }
    .faq__chev { width:16px; height:16px; transition:transform .2s ease; }
    details[open] .faq__chev { transform:rotate(180deg); }
    .faq__content { padding:0 18px 18px; color:#4a3f61; }

    /* About Flying Biscuit Section */
    .about {
    background:#fff;
    padding:60px 0;
  }
  .about__container {
    max-width:1120px;
    margin:auto;
    padding:0 24px;
    display:grid;
    gap:40px;
    align-items:center;
    grid-template-columns:repeat(auto-fit,minmax(300px,1fr));
  }
  .about__heading {
    color:#6A2C91;
    font-size:2rem;
    margin-bottom:16px;
  }
  .about__intro,
  .about__mission,
  .about__cult {
    color:#4a3f61;
    font-size:1.1rem;
    line-height:1.6;
    margin-bottom:16px;
  }
  .about__cult {
    color:#6A2C91;
    font-weight:600;
    font-size:1.15rem;
  }
  .about__image img {
    width:100%;
    border-radius:18px;
    box-shadow:0 10px 24px rgba(106,44,145,.15);
  }

    /* Sticky CTA */
      .sticky-cta {
    position:fixed;
    bottom:20px;
    right:75px;
    background:var(--brand-secondary);
    color:#fff;
    font-weight:700;
    border:none;
    border-radius:var(--radius);
    padding:16px 24px;
    font-size:1rem;
    cursor:pointer;
    box-shadow:var(--shadow);
    opacity:0;
    pointer-events:none;
    transition:opacity .3s ease;
    z-index:999;
  }
  .sticky-cta.visible {
    opacity:1;
    pointer-events:auto;
  }

  /* Awards */
  .awards { background:#fff; padding:40px 0; }
  .awards__container { max-width:1120px; margin:auto; padding:0 24px; }

  /* Mobile-first: horizontal rail */
  .awards__rail {
    white-space: nowrap;          /* keep items on one line */
    overflow-x: auto;             /* horizontal scroll */
    overflow-y: hidden;
    -webkit-overflow-scrolling: touch;
    padding-bottom: 8px;
  }
  .awards__item {
    display:inline-block;         /* respect no-wrap */
    width: clamp(260px, 70vw, 360px);
    margin-right:14px;
    overflow:hidden;
    box-shadow:0 10px 24px rgba(106,44,145,.12);
  }

  /* Mobile styles */
@media (max-width: 768px) {
  .awards__item {
    width: clamp(180px, 60vw, 260px);  /* Smaller on mobile */
    margin-right: 10px;  /* Slightly reduced margin */
  }
}

/* Even smaller screens */
@media (max-width: 480px) {
  .awards__item {
    width: clamp(150px, 55vw, 200px);  /* Even smaller for very small screens */
    margin-right: 8px;
  }
}

  .awards__img { width:100%; height:100%; object-fit:cover; display:block; }
  .awards__rail::-webkit-scrollbar { height:10px; }
  .awards__rail::-webkit-scrollbar-thumb { background:#e6d8f7; border-radius:999px; }

  /* Desktop: show all 6 at once in a single row (no scroll) */
  @media (min-width: 992px) {
    .awards__rail { white-space: normal; overflow: visible; display:grid; grid-template-columns: repeat(6, 1fr); gap:14px; }
    .awards__item { display:block; width:auto; margin-right:0;}
  }


  /* Franchisee Testimonials */
 .testimonials {
    background:#FFF7FF;
    padding:60px 0;
  }
  .testimonials__container {
    max-width:1120px;
    margin:auto;
    padding:0 24px;
  }
  .testimonials__heading {
    text-align:center;
    margin:0 0 40px;
    color:#6A2C91;
  }
  .testimonials__grid {
    display:flex;
    flex-direction:column;
    gap:40px;
  }
  .testimonials__card {
    background:#fff;
    border:1.5px solid #efe7f6;
    border-radius:18px;
    box-shadow:0 10px 24px rgba(106,44,145,.08);
    padding:32px;
    display:flex;
    align-items:center;
    gap:24px;
  }
  .testimonials__media {
    flex-shrink:0;
    width:100px;
    height:100px;
    border-radius:50%;
    overflow:hidden;
    box-shadow:0 6px 14px rgba(106,44,145,.12);
  }
  .testimonials__img {
    width:100%;
    height:100%;
    object-fit:cover;
    display:block;
  }
  .testimonials__body {
    flex:1;
  }
  .testimonials__quote {
    font-style:italic;
    color:#4a3f61;
    margin:0 0 10px;
    font-size:1.05rem;
    line-height:1.6;
  }
  .testimonials__author {
    font-weight:800;
    color:#3b2a58;
    font-size:1rem;
    display:flex;
    align-items:center;
    gap:10px;
  }
  @media (max-width: 768px) {
    .testimonials__card {
      flex-direction:column;
      align-items:flex-start;
      gap:16px;
      padding:24px;
    }
    .testimonials__media {
      width:50px;
      height:50px;
      order:2;
      margin-top:8px;
    }
    .testimonials__author {
      order:1;
      flex-direction:row;
      align-items:center;
    }
    .testimonials__author img {
      width:50px;
      height:50px;
      border-radius:50%;
    }
  }

  /* Support Section */
  .support {
    padding:80px 0;
  }
  .support__container {
    max-width:1120px;
    margin:auto;
    padding:0 24px;
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(300px,1fr));
    gap:40px;
    align-items:center;
  }
  .support__content h2 {
    color:#6A2C91;
    font-size:2rem;
    margin-bottom:16px;
  }
  .support__content p {
    color:#4a3f61;
    line-height:1.7;
    margin-bottom:14px;
  }
  .support__list {
    list-style:none;
    padding:0;
    margin:24px 0 0 0;
  }
  .support__list li {
    position:relative;
    padding-left:28px;
    margin-bottom:10px;
    color:#3b2a58;
    font-weight:500;
  }
  .support__list li::before {
    content:'✔';
    color:#F47B20;
    position:absolute;
    left:0;
    top:0;
  }
  .support__image img {
    width:100%;
    border-radius:18px;
    box-shadow:0 10px 24px rgba(106,44,145,.1);
  }
  /* Generic video thumb */
  .video { position:relative; border-radius:18px; box-shadow:0 10px 24px rgba(106,44,145,.1); overflow:hidden; background:#000; }
  .video__thumb { position:relative; padding-top:56.25%; cursor:pointer; }
  .video__thumb img { position:absolute; inset:0; width:100%; height:100%; object-fit:cover; filter:brightness(.88); }
  .video__play {
    position:absolute; inset:0; display:grid; place-items:center;
  }
  .video__play::before{
    content:""; position:absolute; width:74px; height:74px; border-radius:50%;
    background:rgba(0,0,0,.55); transition:transform .2s ease, background .2s ease;
  }
  .video__play svg{ width:30px; height:30px; position:relative; z-index:1; }
  .video__thumb:hover .video__play::before { transform:scale(1.06); background:rgba(0,0,0,.7); }


  /***** Search UI *****/
.markets__search { max-width:640px; margin:0 auto 24px; display:flex; gap:10px; align-items:center; }
.markets__search-input { flex:1; padding:12px 14px; border:1.5px solid #efe7f6; border-radius:12px; font-size:1rem; }
.markets__search-clear { background:#eee3fb; border:none; border-radius:10px; padding:10px 12px; font-weight:700; color:#3b2a58; cursor:pointer; }
.markets__search-clear:hover { background:#e1d5f7; }

/* Markets Section */
  .markets { background:#fff; padding:70px 0; }
  .markets__container { max-width:1120px; margin:auto; padding:0 24px; }
  .markets__heading { color:#6A2C91; text-align:center; margin:0 0 8px; }
  .markets__sub { color:#4a3f61; text-align:center; margin:0 0 24px; }

  .markets__controls { display:flex; gap:10px; justify-content:center; flex-wrap:wrap; margin:0 0 24px; }
  .markets__filter { background:#f1e9fb; color:#3b2a58; border:none; border-radius:999px; padding:8px 14px; font-weight:700; cursor:pointer; }
  .markets__filter[aria-pressed="true"] { background:#6A2C91; color:#fff; }

  .markets__grid { display:grid; grid-template-columns:repeat(auto-fit, minmax(260px, 1fr)); gap:16px; }
  .market-card { background:#fff; border:1.5px solid #efe7f6; border-radius:16px; box-shadow:0 10px 24px rgba(106,44,145,.08); padding:16px; display:flex; flex-direction:column; gap:10px; }
  .market-card__top { display:flex; justify-content:space-between; align-items:center; gap:10px; }
  .market-card__title { font-weight:800; color:#3b2a58; font-size:1.05rem; }
  .market-card__badge { font-size:.8rem; font-weight:800; border-radius:999px; padding:4px 10px; }
  .is-available { background:#e9f8ef; color:#1f6f3f; border:1px solid #c9f0d8; }
  .is-dev { background:#fff6e6; color:#8b5a00; border:1px solid #ffe1ad; }
  .is-taken { background:#fde7ea; color:#8c1b2a; border:1px solid #f7c6cf; }
  .market-card__meta { display:flex; gap:14px; flex-wrap:wrap; color:#6b6282; font-size:.9rem; }
  .market-card__dot { width:6px; height:6px; background:#d9c9f6; border-radius:50%; align-self:center; }
  .market-card__cta { margin-top:6px; align-self:flex-start; background:#F47B20; color:#fff; font-weight:800; border:none; border-radius:12px; padding:10px 14px; cursor:pointer; }
  .market-card__cta:hover { background:#d96900; }

  .markets__legend { display:flex; gap:10px; justify-content:center; align-items:center; margin:18px 0 28px; color:#6b6282; font-size:.9rem; }
  .legend-chip { display:inline-flex; align-items:center; gap:8px; }
  .legend-chip span { display:inline-block; width:12px; height:12px; border-radius:4px; }
  .legend-available { background:#e9f8ef; border:1px solid #c9f0d8; }
  .legend-dev { background:#fff6e6; border:1px solid #ffe1ad; }
  .legend-taken { background:#fde7ea; border:1px solid #f7c6cf; }


    /* Steps to Ownership (namespaced) */
  .own-steps { background:#fff; padding:70px 0; }
  .own-steps__container { max-width:1120px; margin:auto; padding:0 24px; }

  .own-steps__header { text-align:center; margin:0 0 28px; }
  .own-steps__eyebrow {
    display:inline-flex; gap:8px; align-items:center;
    background:#fff; border:1.5px solid #efe7f6; padding:6px 12px; border-radius:999px;
    color:var(--brand-primary); font-weight:800;
  }
  .own-steps__heading { color:var(--brand-primary); margin:12px 0 8px; }
  .own-steps__sub { color:#4a3f61; max-width:760px; margin:0 auto; }

  /* Layout */
  .own-steps__grid { display:grid; grid-template-columns:1fr 320px; gap:28px; align-items:start; }
  @media (max-width: 980px){ .own-steps__grid { grid-template-columns:1fr; } }

  /* Timeline */
  .own-steps__rail {
    position:relative; background:#fff; border:1.5px solid #efe7f6;
    border-radius:18px; box-shadow:var(--shadow); padding:8px 8px 2px 8px;
  }
  .own-steps__list { list-style:none; margin:0; padding:8px 8px 8px 22px; position:relative; }
  .own-steps__list::before {
    content:""; position:absolute; left:44px; top:12px; bottom:12px; width:3px; background:#efe7f6;
  }
  .own-steps__item {
    position:relative; display:grid; grid-template-columns:56px 1fr; gap:14px; padding:16px 8px 22px 8px;
  }
  .own-steps__dot {
    position:absolute; left:36px; top:22px; width:20px; height:20px; border-radius:50%; background:#fff; border:3px solid #e6d8f7;
  }
  .own-steps__num {
    width:36px; height:36px; border-radius:50%; display:grid; place-items:center;
    font-weight:900; color:#fff; background:var(--brand-secondary);
    box-shadow:0 8px 18px rgba(244,123,32,.25); z-index:1; margin-left:8px; margin-top:6px;
  }
  .own-steps__card {
    background:#fff; border:1.5px solid #efe7f6; border-radius:14px; padding:14px 16px;
  }
  .own-steps__title { margin:0 0 6px; color:#3b2a58; font-weight:800; }
  .own-steps__body { color:#4a3f61; margin:0; line-height:1.6; }

  /* Optional expand/collapse per step */
  .own-steps details { margin-top:8px; }
  .own-steps summary {
    list-style:none; cursor:pointer; padding:6px 0; font-weight:800; color:#3b2a58;
    display:flex; justify-content:space-between; align-items:center;
  }
  .own-steps summary::-webkit-details-marker { display:none; }
  .own-steps__chev { width:16px; height:16px; transition:transform .2s ease; }
  .own-steps details[open] .own-steps__chev { transform:rotate(180deg); }
  .own-steps details div { color:#4a3f61; padding:0 0 6px; }

  /* Right column: “Cheat sheet” + CTA */
  .own-steps__aside { position:sticky; top:20px; align-self:start; }
  .own-steps__box {
    background:#fff; border:1.5px solid #efe7f6; border-radius:18px; box-shadow:var(--shadow); padding:18px;
  }
  .own-steps__box h3 { color:var(--brand-primary); margin:0 0 8px; }
  .own-steps__mini { display:grid; gap:8px; margin:10px 0 16px; }
  .own-steps__mini-row { display:flex; align-items:center; gap:10px; }
  .own-steps__mini-num {
    width:28px; height:28px; border-radius:50%; display:grid; place-items:center;
    font-weight:900; color:#fff; background:#d8c9f0;
  }
  .own-steps__cta {
    display:inline-block; background:var(--brand-secondary); color:#fff; font-weight:800;
    border:none; border-radius:12px; padding:12px 16px; text-decoration:none;
  }
  .own-steps__cta:hover { background:#d96900; }

  /* Progress bar (auto-fills when section enters viewport) */
  .own-steps__progress { height:10px; background:#f3ecff; border-radius:999px; overflow:hidden; margin-top:12px; }
  .own-steps__fill { height:100%; width:0%; background:linear-gradient(90deg,var(--brand-secondary),var(--brand-tertiary)); transition:width 1s ease; }

  /* Make Steps to Ownership breathe on mobile */
@media (max-width: 768px) {
  /* Tighten section padding a bit */
  .own-steps {
    padding: 48px 0;
  }

  .own-steps__grid {
    gap: 20px;
  }

  /* Turn the timeline into simple stacked cards */
  .own-steps__rail {
    padding: 8px 0;
    box-shadow: none;              /* optional: flatter on mobile */
    border-radius: 0;
    border: none;
  }

  .own-steps__list {
    padding: 0;
  }

  .own-steps__list::before {
    display: none;                 /* remove vertical line */
  }

  .own-steps__item {
    grid-template-columns: 1fr;    /* no side-by-side number/card */
    padding: 10px 0 16px 0;
  }

  .own-steps__num {
    margin: 0 auto 10px auto;      /* center the number above the card */
    width: 40px;
    height: 40px;
  }

  .own-steps__card {
    padding: 14px 16px;
  }

  .own-steps__title {
    font-size: 1rem;
  }

  .own-steps__body {
    font-size: 0.94rem;
  }

  /* Sidebar: remove sticky and just stack under the steps */
  .own-steps__aside {
    position: static;
    margin-top: 12px;
  }

  .own-steps__box {
    padding: 16px;
  }
}

/* Extra-tight layout on very small screens */
@media (max-width: 480px) {
  .own-steps__heading {
    font-size: 1.4rem;
  }

  .own-steps__sub {
    font-size: 0.95rem;
  }

  .own-steps__card {
    padding: 12px 14px;
  }
}



  /* Team Section */
  .team{background:#fff;padding:70px 0}
  .team__header{text-align:center;margin-bottom:24px}
.team__eyebrow {
  display: inline-flex;
  gap: 8px;
  align-items: center;
  background: #fff;
  border: 1.5px solid #efe7f6;
  padding: 6px 12px;
  border-radius: 999px;
  color: var(--brand-primary);
  font-weight: 900;
}

.team__dot {
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background: var(--brand-secondary);
  box-shadow: 0 0 0 6px rgba(244,123,32,.15);
}
  .team__heading{color:var(--brand-primary);margin:12px 0 8px}
  .team__sub{color:#4a3f61;max-width:760px;margin:0 auto}
  .team__grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:16px}
  .team-card{background:var(--card);border:1.5px solid #efe7f6;border-radius:16px;box-shadow:var(--shadow);overflow:hidden;display:flex;flex-direction:column}
  .team-card__media{position:relative;width:100%;padding-top:350px;overflow:hidden}
  .team-card__img{position:absolute;inset:0;width:100%;height:100%;object-fit:cover;}
  .team-card__body{padding:14px 16px}
  .team-card__name{font-weight:900;color:#3b2a58;margin:0}
  .team-card__role{color:#6b6282;font-size:.95rem;margin:2px 0 8px}
  .team-card__meta{display:flex;gap:12px;flex-wrap:wrap;color:#6b6282;font-size:.85rem}
  .team-card__dot{width:6px;height:6px;background:#d9c9f6;border-radius:50%;align-self:center}
  .team-card__cta{margin-top:10px;align-self:flex-start;background:var(--brand-secondary);color:#fff;font-weight:800;border:none;border-radius:12px;padding:10px 14px;cursor:pointer}
  .team-card__cta:hover{background:#d96900}

  /* Marketing */
  .marketing {
    padding-top: 2rem;
    padding-bottom: 2rem;
    background-color: #FFF7FF;
  }



 /* ===== Announcements (with image) ===== */
.announcements { background:#fff; padding:70px 0; }
.announcements__container { max-width:1120px; margin:auto; padding:0 24px; }

.announcements__header { text-align:center; margin:0 0 28px; }
.announcements__eyebrow{
  display:inline-flex; gap:8px; align-items:center;
  background:#fff; border:1.5px solid #efe7f6; padding:6px 12px; border-radius:999px;
  color:var(--brand-primary); font-weight:900;
}
.announcements__dot{
  width:8px; height:8px; border-radius:50%;
  background:var(--brand-secondary);
  box-shadow:0 0 0 6px rgba(244,123,32,.15);
}
.announcements__heading{ color:var(--brand-primary); margin:12px 0 8px; }
.announcements__sub{ color:#4a3f61; max-width:760px; margin:0 auto; line-height:1.6; }

.announcements__grid{
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(260px,1fr));
  gap:16px;
}

.announcement-card{
  background:#fff;
  border:1.5px solid #efe7f6;
  border-radius:16px;
  box-shadow:var(--shadow);
  overflow:hidden;
  display:flex;
  flex-direction:column;
  transition:transform .2s ease, box-shadow .2s ease, border-color .2s ease;
}
.announcement-card:hover{
  transform:translateY(-3px);
  border-color:#e6d8f7;
  box-shadow:0 14px 30px rgba(106,44,145,.18);
}

/* Pinned treatment */
.announcement-card--pinned{
  border-color: rgba(244,123,32,.35);
  box-shadow: 0 12px 28px rgba(244,123,32,.12), var(--shadow);
}

/* Image */
.announcement-card__media{
  display:block;
  position:relative;
  aspect-ratio: 16 / 9;
  background:#1b1033;
  overflow:hidden;
}
.announcement-card__img{
  width:100%;
  height:100%;
  object-fit:cover;
  display:block;
  filter:brightness(.92);
  transition:transform .25s ease, filter .25s ease;
}
.announcement-card:hover .announcement-card__img{
  transform:scale(1.03);
  filter:brightness(.98);
}

/* Content */
.announcement-card__content{
  padding:14px 16px 14px;
  display:flex;
  flex-direction:column;
  gap:10px;
  min-height: 210px;
}

.announcement-card__top{
  display:flex;
  justify-content:space-between;
  align-items:flex-start;
  gap:12px;
}
.announcement-card__badges{ display:flex; gap:8px; flex-wrap:wrap; }
.announcement-card__badge{
  font-size:.78rem;
  font-weight:900;
  border-radius:999px;
  padding:4px 10px;
  background:#f1e9fb;
  color:#3b2a58;
  border:1px solid #e6d8f7;
}
.announcement-card__badge--pinned{
  background:#fff6e6;
  border-color:#ffe1ad;
  color:#8b5a00;
}
.announcement-card__date{ color:#6b6282; font-size:.85rem; white-space:nowrap; margin-top:2px; }

.announcement-card__title{ margin:0; font-weight:700; color:#3b2a58; font-size:1.05rem; line-height:1.25; }
.announcement-card__title a{ color:inherit; text-decoration:none; }
.announcement-card__title a:hover{ text-decoration:underline; }

.announcement-card__body p{ margin:0; color:#4a3f61; line-height:1.6; }

.announcement-card__cta{
  margin-top:auto;
  align-self:flex-start;
  font-weight:900;
  color:var(--brand-secondary);
  text-decoration:none;
  padding-top:6px;
}
.announcement-card__cta:hover{ text-decoration:underline; }

.announcements__footer{ text-align:center; margin-top:18px; }
.announcements__all{
  display:inline-block;
  font-weight:900;
  color:var(--brand-primary);
  text-decoration:none;
}
.announcements__all:hover{ text-decoration:underline; }

.announcements__empty{
  text-align:center;
  color:#6b6282;
  background:#fff;
  border:1.5px dashed #efe7f6;
  border-radius:16px;
  padding:18px;
}



 /* ===== Section ===== */
  .menu-hype{ background:#fff; padding:70px 0; }
  .menu-hype__container{ max-width:1120px; margin:auto; padding:0 24px; }

  .menu-hype__header{ text-align:center; margin:0 0 28px; }
  .menu-hype__eyebrow{
    display:inline-flex; gap:8px; align-items:center;
    background:#fff; border:1.5px solid #efe7f6; padding:6px 12px; border-radius:999px;
    color:var(--brand-primary); font-weight:900;
  }
  .menu-hype__dot{
    width:8px; height:8px; border-radius:50%;
    background:var(--brand-secondary);
    box-shadow:0 0 0 6px rgba(244,123,32,.15);
  }
  .menu-hype__heading{ color:var(--brand-primary); margin:12px 0 8px; font-size:clamp(22px,2.4vw,34px); }
  .menu-hype__sub{ color:#4a3f61; max-width:860px; margin:0 auto; line-height:1.65; }

  /* ===== Layout ===== */
  .menu-hype__grid{ display:grid; grid-template-columns:1.1fr .9fr; gap:22px; align-items:start; margin-top:20px; }
  @media (max-width: 980px){ .menu-hype__grid{ grid-template-columns:1fr; } }

  .menu-hype__accolades{ display:flex; flex-wrap:wrap; gap:10px; margin:0 0 14px; }
  .menu-hype__award{
    font-weight:900; font-size:.85rem;
    background:#f1e9fb; color:#3b2a58;
    border:1px solid #e6d8f7; border-radius:999px;
    padding:6px 10px;
  }
  .menu-hype__copy p{ margin:0 0 10px; color:#4a3f61; line-height:1.7; }

  .menu-hype__cta-row{ display:flex; gap:12px; flex-wrap:wrap; margin-top:16px; }
  .menu-hype__btn{
    display:inline-block; text-decoration:none; font-weight:900;
    padding:12px 16px; border-radius:14px;
  }
  .menu-hype__btn--primary{ background:var(--brand-secondary); color:#fff; box-shadow:0 10px 24px rgba(244,123,32,.25); }
  .menu-hype__btn--secondary{ background:#fff; color:var(--brand-primary); border:2px solid #efe7f6; }
  .menu-hype__btn:hover{ transform:translateY(-1px); }

  .menu-hype__fineprint{ margin-top:10px; color:#7a6a95; font-size:.85rem; }

  /* ===== Vertical Reel ===== */
  .reel{
    background:#fff;
    border:1.5px solid #efe7f6;
    border-radius:18px;
    box-shadow:var(--shadow);
    padding:12px;
    max-width: 360px;
    margin-left:auto;
  }
  @media (max-width: 980px){ .reel{ margin:0 auto; max-width:420px; } }

  .reel__frame{
    position:relative;
    border-radius:16px;
    overflow:hidden;
    background:#120a22;
    aspect-ratio: 9 / 16;          /* vertical video */
  }
  .reel__poster{
    position:absolute; inset:0;
    width:100%; height:100%;
    object-fit:cover;
    filter:brightness(.88);
  }

  .reel__overlay{ position:absolute; inset:0; pointer-events:none; }
  .reel__pill{
    position:absolute; top:10px; left:10px;
    background:rgba(255,255,255,.92);
    border:1px solid #efe7f6;
    border-radius:999px;
    padding:6px 10px;
    font-weight:900;
    color:#3b2a58;
    font-size:.85rem;
  }
  .reel__play{
    position:absolute; inset:0;
    display:grid; place-items:center;
  }
  .reel__play::before{
    content:"";
    width:74px; height:74px; border-radius:50%;
    background:rgba(0,0,0,.55);
    box-shadow:0 10px 24px rgba(0,0,0,.25);
    position:absolute;
  }
  .reel__play svg{ position:relative; z-index:1; }

  .reel__actions{
    position:absolute; right:10px; bottom:62px;
    display:grid; gap:10px;
  }
  .reel__action{
    pointer-events:auto;
    width:56px;
    border:none;
    background:rgba(0,0,0,.45);
    color:#fff;
    border-radius:14px;
    padding:10px 8px;
    font-weight:900;
    cursor:default;
    display:grid;
    place-items:center;
    gap:4px;
  }
  .reel__action small{ font-weight:800; font-size:.75rem; opacity:.9; }

  .reel__caption{
    position:absolute; left:10px; right:78px; bottom:12px;
    background:rgba(0,0,0,.45);
    color:#fff;
    border-radius:14px;
    padding:10px 10px;
    line-height:1.35;
    font-size:.92rem;
  }

  .reel__hit{
    position:absolute; inset:0;
    border:none; background:transparent;
    cursor:pointer;
  }

  .reel__note{ margin:10px 4px 2px; color:#7a6a95; font-size:.85rem; }

  /* ===== Featured items (simple, fun, bold) ===== */
  .menu-hype__featured{ margin-top:34px; }
  .menu-hype__featured-head{ text-align:center; margin:0 0 14px; }
  .menu-hype__featured-title{ color:var(--brand-primary); margin:0 0 6px; font-size:1.45rem; }
  .menu-hype__featured-sub{ color:#4a3f61; max-width:760px; margin:0 auto; line-height:1.6; }

  .bites{
    display:grid;
    grid-template-columns:repeat(5, minmax(0, 1fr));
    gap:12px;
  }
  @media (max-width: 1100px){ .bites{ grid-template-columns:repeat(3, minmax(0,1fr)); } }
  @media (max-width: 760px){ .bites{ grid-template-columns:repeat(2, minmax(0,1fr)); } }
  @media (max-width: 520px){ .bites{ grid-template-columns:1fr; } }

  .bite{
    border-radius:18px;
    overflow:hidden;
    box-shadow:var(--shadow);
    border:1.5px solid #efe7f6;
    background:#120a22;
    position:relative;
    min-height: 220px;
  }
  .bite__link{
    display:block;
    height:100%;
    position:relative;
    text-decoration:none;
    color:#fff;
  }
  .bite__img{
    position:absolute; inset:0;
    width:100%; height:100%;
    object-fit:cover;
    filter:brightness(.82);
    transform:scale(1.01);
    transition:transform .25s ease, filter .25s ease;
  }
  .bite__shade{
    position:absolute; inset:0;
    background:
      radial-gradient(700px 300px at 30% -10%, rgba(244,123,32,.22), transparent 60%),
      linear-gradient(180deg, rgba(0,0,0,.05), rgba(0,0,0,.55));
  }
  .bite__text{
    position:absolute;
    left:12px; right:12px; bottom:12px;
    display:grid; gap:4px;
  }
  .bite__name{
    font-weight:1000;
    font-size:1.05rem;
    letter-spacing:.2px;
    text-shadow:0 8px 18px rgba(0,0,0,.35);
  }
  .bite__wow{
    font-weight:800;
    font-size:.92rem;
    opacity:.95;
    text-shadow:0 8px 18px rgba(0,0,0,.35);
  }
  .bite:hover .bite__img{ transform:scale(1.06); filter:brightness(.9); }

  .menu-hype__featured-cta{
    text-align:center;
    margin-top:16px;
  }
</style>

    <style>
/* ===== Alternating Menu Highlights (Option A: aspect-ratio media, shorter cards) ===== */
.menu-highlights{ background:#fff; padding:70px 0; }
.menu-highlights__container{ max-width:1120px; margin:auto;}

/* Header */
.menu-highlights__header{ text-align:center; margin:0 0 26px; }
.menu-highlights__eyebrow{
  display:inline-flex; gap:8px; align-items:center;
  background:#fff; border:1.5px solid #efe7f6; padding:6px 12px; border-radius:999px;
  color:var(--brand-primary); font-weight:900;
}
.menu-highlights__dot{
  width:8px; height:8px; border-radius:50%;
  background:var(--brand-secondary);
  box-shadow:0 0 0 6px rgba(244,123,32,.15);
}
.menu-highlights__title{
  color:var(--brand-primary);
  margin:12px 0 8px;
  font-size:clamp(1.35rem, 1.2vw + 1rem, 1.8rem);
}
.menu-highlights__sub{
  color:#4a3f61;
  max-width:760px;
  margin:0 auto;
  line-height:1.65;
}

/* List */
.menu-highlights__list{ display:grid; gap:18px; margin-top:22px; }

/* Card */
.menu-highlights__row{
  display:grid;
  grid-template-columns: 1.05fr .95fr;
  gap:18px;
  align-items:stretch;
  background:#fff;
  border:1.5px solid #efe7f6;
  border-radius:18px;
  box-shadow:var(--shadow);
  overflow:hidden;
}

/* Reverse layout */
.menu-highlights__row--reverse{ grid-template-columns: .95fr 1.05fr; }
.menu-highlights__row--reverse .menu-highlights__media{ order:2; }
.menu-highlights__row--reverse .menu-highlights__content{ order:1; }

/* Media (Option A): aspect-ratio drives height, no forced min-height */
.menu-highlights__media{
  background:#120a22;
  aspect-ratio: 16 / 10;   /* try 16/9 if you want taller images */
  min-height: 0;
  overflow:hidden;
}
.menu-highlights__media img{
  width:100%;
  height:100%;
  display:block;
  object-fit:cover;
  filter:brightness(.93);
  transform:scale(1.01);
  transition:transform .25s ease, filter .25s ease;
}
.menu-highlights__row:hover .menu-highlights__media img{
  transform:scale(1.05);
  filter:brightness(.98);
}

/* Content */
.menu-highlights__content{
  padding:20px 20px 22px;
  display:flex;
  flex-direction:column;
  gap:8px;                 /* tighter rhythm than grid-gap */
}
.menu-highlights__heading{
  margin:0;
  font-weight:1000;
  color:#3b2a58;
  letter-spacing:.2px;
  line-height:1.15;
  font-size:clamp(1.15rem, 1.15vw + .75rem, 1.5rem);
}
.menu-highlights__text{
  margin:0;
  color:#4a3f61;
  line-height:1.7;
  font-size:1rem;
}

/* CTA */
.menu-highlights__actions{
  margin-top:10px;
  display:flex;
}
.menu-highlights__btn{
  display:inline-flex;
  align-items:center;
  justify-content:center;
  text-decoration:none;
  font-weight:900;
  padding:12px 16px;          /* shorter button */
  border-radius:12px;
  border:2px solid transparent;
  /* line-height:1;          */
}
.menu-highlights__btn--primary{
  background:var(--brand-secondary);
  color:#fff;
  box-shadow:0 10px 24px rgba(244,123,32,.25);
}

/* Fine-tune the “981px” feel: heading slightly larger + less gap */
@media (max-width: 981px){
  .menu-highlights__content{ gap:6px; }
  .menu-highlights__heading{ font-size:clamp(1.25rem, 2.2vw, 1.5rem); }
}

/* Stack on mobile */
@media (max-width: 980px){
  .menu-highlights__row,
  .menu-highlights__row--reverse{
    grid-template-columns: 1fr;
  }
  .menu-highlights__row--reverse .menu-highlights__media{ order:0; }
  .menu-highlights__row--reverse .menu-highlights__content{ order:1; }

  .menu-highlights__media{
    aspect-ratio: 16 / 9;    /* a bit taller feels better stacked */
  }

  .menu-highlights__content{
    padding:16px 16px 18px;
  }
}

/* Small screens: slightly tighter button */
@media (max-width: 560px){
  .menu-highlights__btn{ padding:9px 12px; }
}


    </style>

    <style>
  /* ===== Interior Gallery Section ===== */
.interiors {
  background: #FFF7FF;
  padding: 70px 0;
}
.interiors__container {
  max-width: 1120px;
  margin: auto;
  padding: 0 24px;
}

/* Header */
.interiors__header {
  text-align: center;
  margin: 0 0 32px;
}
.interiors__eyebrow {
  display: inline-flex;
  gap: 8px;
  align-items: center;
  background: #fff;
  border: 1.5px solid #efe7f6;
  padding: 6px 12px;
  border-radius: 999px;
  color: var(--brand-primary);
  font-weight: 900;
}
.interiors__dot {
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background: var(--brand-secondary);
  box-shadow: 0 0 0 6px rgba(244,123,32,.15);
}
.interiors__heading {
  color: var(--brand-primary);
  margin: 12px 0 8px;
  font-size: clamp(1.4rem, 2.2vw, 2rem);
}
.interiors__sub {
  color: #4a3f61;
  max-width: 820px;
  margin: 0 auto;
  line-height: 1.7;
  font-size: 1.05rem;
}

/* ===== Featured Collage Grid ===== */
.interiors__collage {
  display: grid;
  gap: 12px;
  margin-bottom: 28px;
}

/* Desktop: 3 columns with first tile spanning 2 rows */
@media (min-width: 901px) {
  .interiors__collage {
    grid-template-columns: 1fr 1fr 1fr;
    grid-template-rows: 180px 180px;
    grid-template-areas:
      "tile1 tile2 tile3"
      "tile1 tile4 tile5";
  }
  .interiors__tile:nth-child(1) { grid-area: tile1; }
  .interiors__tile:nth-child(2) { grid-area: tile2; }
  .interiors__tile:nth-child(3) { grid-area: tile3; }
  .interiors__tile:nth-child(4) { grid-area: tile4; }
  .interiors__tile:nth-child(5) { grid-area: tile5; }
  .interiors__tile:nth-child(6) { display: none; }
}

/* Tablet: 3 equal columns, 2 rows */
@media (min-width: 601px) and (max-width: 900px) {
  .interiors__collage {
    grid-template-columns: repeat(3, 1fr);
    grid-auto-rows: 160px;
  }
  .interiors__tile:nth-child(6) { display: none; }
}

/* Mobile: 2 equal columns, 3 rows */
@media (max-width: 600px) {
  .interiors__collage {
    grid-template-columns: repeat(2, 1fr);
    grid-auto-rows: 140px;
  }
  .interiors__tile:nth-child(6) { display: block; }
}

.interiors__tile {
  position: relative;
  border: none;
  padding: 0;
  border-radius: 16px;
  overflow: hidden;
  cursor: pointer;
  background: #120a22;
  box-shadow: var(--shadow);
}
.interiors__tile:focus-visible {
  outline: 3px solid var(--brand-secondary);
  outline-offset: 2px;
}
.interiors__tile img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  filter: brightness(.88);
  transition: transform .3s ease, filter .3s ease;
}
.interiors__tile:hover img,
.interiors__tile:focus img {
  transform: scale(1.05);
  filter: brightness(.95);
}

.interiors__tile-label {
  position: absolute;
  bottom: 10px;
  left: 10px;
  background: rgba(0,0,0,.6);
  color: #fff;
  font-weight: 700;
  font-size: .85rem;
  padding: 6px 10px;
  border-radius: 8px;
  pointer-events: none;
}

/* ===== Scrollable Gallery Rail ===== */
.interiors__rail-wrap {
  margin-top: 8px;
}
.interiors__rail-title {
  color: var(--brand-primary);
  font-size: 1.15rem;
  margin: 0 0 12px;
  text-align: center;
}
.interiors__rail {
  display: flex;
  gap: 12px;
  overflow-x: auto;
  overflow-y: hidden;
  padding-bottom: 12px;
  scroll-snap-type: x mandatory;
  -webkit-overflow-scrolling: touch;
}
.interiors__rail:focus {
  outline: 2px solid var(--brand-primary);
  outline-offset: 4px;
}
.interiors__rail::-webkit-scrollbar {
  height: 10px;
}
.interiors__rail::-webkit-scrollbar-thumb {
  background: #e6d8f7;
  border-radius: 999px;
}

.interiors__thumb {
  flex: 0 0 auto;
  width: 180px;
  height: 120px;
  border: none;
  padding: 0;
  border-radius: 12px;
  overflow: hidden;
  cursor: pointer;
  background: #120a22;
  position: relative;
  scroll-snap-align: start;
  box-shadow: 0 6px 16px rgba(106,44,145,.1);
  transition: transform .2s ease, box-shadow .2s ease;
}
.interiors__thumb:hover,
.interiors__thumb:focus {
  transform: translateY(-3px);
  box-shadow: 0 10px 24px rgba(106,44,145,.18);
}
.interiors__thumb:focus-visible {
  outline: 3px solid var(--brand-secondary);
  outline-offset: 2px;
}
.interiors__thumb img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  filter: brightness(.9);
  transition: filter .2s ease;
}
.interiors__thumb:hover img {
  filter: brightness(1);
}
.interiors__thumb-label {
  position: absolute;
  bottom: 6px;
  left: 6px;
  background: rgba(0,0,0,.55);
  color: #fff;
  font-weight: 600;
  font-size: .75rem;
  padding: 4px 8px;
  border-radius: 6px;
  pointer-events: none;
}

.interiors__rail-hint {
  text-align: center;
  color: #7a6a95;
  font-size: .85rem;
  margin-top: 8px;
}

/* ===== CTA ===== */
.interiors__cta {
  text-align: center;
  margin-top: 28px;
}
.interiors__btn {
  display: inline-block;
  background: var(--brand-secondary);
  color: #fff;
  font-weight: 800;
  padding: 14px 22px;
  border-radius: 14px;
  text-decoration: none;
  box-shadow: 0 10px 24px rgba(244,123,32,.25);
  transition: background .2s ease, transform .2s ease;
}
.interiors__btn:hover {
  background: #d96900;
  transform: translateY(-2px);
}

/* ===== Lightbox Modal ===== */
.lightbox {
  position: fixed;
  inset: 0;
  z-index: 9999;
  display: flex;
  align-items: center;
  justify-content: center;
  opacity: 0;
  visibility: hidden;
  transition: opacity .3s ease, visibility .3s ease;
}
.lightbox.is-active {
  opacity: 1;
  visibility: visible;
}
.lightbox[hidden] {
  display: flex; /* Override hidden to allow animation */
}

.lightbox__backdrop {
  position: absolute;
  inset: 0;
  background: rgba(0,0,0,.92);
  opacity: 0;
  transition: opacity .4s ease;
}
.lightbox.is-active .lightbox__backdrop {
  opacity: 1;
}

.lightbox__container {
  position: relative;
  width: 100%;
  max-width: 1000px;
  max-height: 90vh;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 60px 80px 40px;
}

/* Close button - fixed to viewport top-right */
.lightbox__close {
  position: fixed;
  top: 20px;
  right: 20px;
  width: 48px;
  height: 48px;
  border: none;
  background: rgba(255,255,255,.15);
  border-radius: 50%;
  cursor: pointer;
  color: #fff;
  display: grid;
  place-items: center;
  z-index: 10;
  opacity: 0;
  transform: translateY(-20px);
  transition: opacity .3s ease .2s, transform .3s ease .2s, background .2s ease;
}
.lightbox.is-active .lightbox__close {
  opacity: 1;
  transform: translateY(0);
}
.lightbox__close:hover,
.lightbox__close:focus {
  background: rgba(255,255,255,.3);
}
.lightbox__close:focus-visible {
  outline: 3px solid var(--brand-secondary);
  outline-offset: 2px;
}
.lightbox__close svg {
  width: 24px;
  height: 24px;
}

/* Nav buttons - fixed to viewport sides */
.lightbox__nav {
  position: fixed;
  top: 50%;
  width: 56px;
  height: 56px;
  border: none;
  background: rgba(255,255,255,.15);
  border-radius: 50%;
  cursor: pointer;
  color: #fff;
  display: grid;
  place-items: center;
  z-index: 10;
  opacity: 0;
  transition: opacity .3s ease .25s, transform .3s ease .25s, background .2s ease;
}
.lightbox.is-active .lightbox__nav {
  opacity: 1;
  transform: translateY(-50%);
}
.lightbox__nav:hover,
.lightbox__nav:focus {
  background: rgba(255,255,255,.3);
}
.lightbox__nav:focus-visible {
  outline: 3px solid var(--brand-secondary);
  outline-offset: 2px;
}
.lightbox__nav svg {
  width: 28px;
  height: 28px;
}
.lightbox__nav--prev {
  left: 20px;
  transform: translateY(-50%) translateX(-30px);
}
.lightbox__nav--next {
  right: 20px;
  transform: translateY(-50%) translateX(30px);
}
.lightbox.is-active .lightbox__nav--prev {
  transform: translateY(-50%) translateX(0);
}
.lightbox.is-active .lightbox__nav--next {
  transform: translateY(-50%) translateX(0);
}

.lightbox__figure {
  margin: 0;
  text-align: center;
  max-width: 100%;
  opacity: 0;
  transform: scale(0.85);
  transition: opacity .35s ease .1s, transform .4s cubic-bezier(0.34, 1.56, 0.64, 1) .1s;
}
.lightbox.is-active .lightbox__figure {
  opacity: 1;
  transform: scale(1);
}

.lightbox__img {
  max-width: 100%;
  max-height: 75vh;
  border-radius: 12px;
  box-shadow: 0 20px 60px rgba(0,0,0,.5);
  transition: opacity .25s ease, transform .25s ease;
}
.lightbox__img.is-changing {
  opacity: 0;
  transform: scale(0.95);
}

.lightbox__caption {
  color: #fff;
  margin-top: 12px;
  font-size: 1rem;
  font-weight: 600;
  opacity: 0;
  transform: translateY(10px);
  transition: opacity .3s ease .2s, transform .3s ease .2s;
}
.lightbox.is-active .lightbox__caption {
  opacity: 1;
  transform: translateY(0);
}
.lightbox__caption.is-changing {
  opacity: 0;
  transform: translateY(10px);
  transition: opacity .15s ease, transform .15s ease;
}

.lightbox__counter {
  position: fixed;
  bottom: 20px;
  left: 50%;
  transform: translateX(-50%) translateY(20px);
  color: rgba(255,255,255,.7);
  font-size: .9rem;
  font-weight: 600;
  opacity: 0;
  transition: opacity .3s ease .3s, transform .3s ease .3s;
}
.lightbox.is-active .lightbox__counter {
  opacity: 1;
  transform: translateX(-50%) translateY(0);
}

/* Mobile adjustments for lightbox */
@media (max-width: 600px) {
  .lightbox__container {
    padding: 70px 20px 60px;
  }
  .lightbox__close {
    top: 15px;
    right: 15px;
    width: 44px;
    height: 44px;
  }
  .lightbox__nav {
    width: 44px;
    height: 44px;
  }
  .lightbox__nav--prev {
    left: 10px;
  }
  .lightbox__nav--next {
    right: 10px;
  }
  .lightbox__nav svg {
    width: 22px;
    height: 22px;
  }
}

/* Reduce motion */
@media (prefers-reduced-motion: reduce) {
  .lightbox,
  .lightbox__backdrop,
  .lightbox__close,
  .lightbox__nav,
  .lightbox__figure,
  .lightbox__img,
  .lightbox__caption,
  .lightbox__counter {
    transition: none;
  }
}

/* Reduce motion */
@media (prefers-reduced-motion: reduce) {
  .interiors__tile img,
  .interiors__thumb,
  .interiors__btn {
    transition: none;
  }
}
    </style>

  <div id="top" class="hero">
    <div class="container hero-inner">
      <div>
        <span class="badge" aria-label="Franchise opportunity badge"><span class="dot" aria-hidden="true"></span> Now Awarding Territories in Select Markets</span>
        <h1><span style="color:var(--brand-secondary)">Join Flying Biscuit Café</span> <br> A Breakfast Icon, Made for You</h1>
        <h2 style="font-size: 1.25rem">From the Founders of Moe's Southwest Grill</h2>
        <p class="sub">Join the Breakfast Brand That Franchisees and Guest’s Love. Inherit 30+ Years of Cult Loyalty delivered to you by the industry’s Best Support Team.</p>

        <div class="hero__callouts">
          <span class="hero__callout">A 30 Year Track Record of Success</span>
          <span class="hero__callout">Industry's Best Food Purchasing Program</span>
          <span class="hero__callout">Strong Corporate Presence w/ Operating Experience</span>
        </div>

        <div class="cta-row" role="group" aria-label="Primary Calls to Action">
          <a class="btn btn-primary" href="#lead-form">Talk to Us</a>
          <!-- <a class="btn btn-secondary" href="#map">See Available Territories</a> -->
        </div>

        <div class="trustbar" aria-label="Social Proof">

          <div class="trust-logos" aria-label="As seen in">
            <div class="logo">Franchise Times</div>
            <div class="logo">QSR</div>
            <div class="logo">FSR</div>
          </div>
        </div>

        <div class="proof-cards" role="list">
          <div class="card" role="listitem">
            <div class="kpi">$2 Million</small></div>
            <div class="quote">System-Wide Average Sales (*2024 FDD)</strong></div>
          </div>
          <div class="card" role="listitem">
            <div class="kpi">Home By 3pm</small></div>
            <div style="color:#544372" class="text-center">Work–life balance built into every shift</div>
          </div>
          <!-- <div class="card" role="listitem">
            <div class="kpi">Cult Following</small></div>
            <div style="color:#544372" class="text-center">30+ years of creating raving fans across America.</div>
          </div> -->
        </div>
      </div>

      <!-- Vertical Video Reel -->
      <div class="hero__reel" id="heroReel" data-video-id="HrIkyyMyIu8">
        <div class="hero__reel-frame">
          <!-- Poster image (YouTube auto-generates thumbnails) -->
          <img
            class="hero__reel-poster"
            src="https://i.ytimg.com/vi/HrIkyyMyIu8/oar2.jpg"
            alt="Watch why franchisees love Flying Biscuit"
            loading="eager"
          />
          <!-- UI overlay -->
          <div class="hero__reel-overlay" aria-hidden="true">
            <div class="hero__reel-pill">🎬 Why Flying Biscuit?</div>
            <div class="hero__reel-play">
              <svg viewBox="0 0 24 24" width="28" height="28" aria-hidden="true">
                <path d="M8 5v14l11-7z" fill="#fff"></path>
              </svg>
            </div>

            <!-- Social-style UI -->
            <div class="hero__reel-actions">
              <button class="hero__reel-action" type="button" aria-label="Like">
                ♥
                <small>8.2k</small>
              </button>
              <button class="hero__reel-action" type="button" aria-label="Comment">
                💬
                <small>312</small>
              </button>
              <button class="hero__reel-action" type="button" aria-label="Share">
                ↗
                <small>Share</small>
              </button>
            </div>

            <div class="hero__reel-caption">
              <strong>Flying Biscuit Café</strong> • 30 years of breakfast magic ✨
            </div>
          </div>

          <!-- Clickable layer -->
          <button class="hero__reel-hit" type="button" aria-label="Play franchisee story video"></button>
        </div>

        <div class="hero__reel-note">
          See why owners are joining the Flying Biscuit family
        </div>
      </div>
    </div>
  </div>

<!-- Awards Section -->
<section class="awards" id="awards">
  <div class="awards__container">
    <div class="awards__rail" aria-label="Awards and recognitions logos">
      <div class="awards__item">
        <img src="<?php echo esc_attr(get_theme_file_uri('assets/img/brands/01.svg')); ?>" class="awards__img" alt="The Flying Biscuit Cafe Best of Atlanta - Insite - Atlanta Edition November 2017 Award" />
      </div>
      <div class="awards__item">
        <img src="<?php echo esc_attr(get_theme_file_uri('assets/img/brands/02.svg')); ?>" class="awards__img" alt="The Flying Biscuit Cafe - Best Restaurants in Atlanta - Zomato 2018" />
      </div>
      <div class="awards__item">
        <img src="<?php echo esc_attr(get_theme_file_uri('assets/img/brands/03.svg')); ?>" class="awards__img" alt="Entreprenuer - Franchises of the Future 2019" />
      </div>
      <div class="awards__item">
        <img src="<?php echo esc_attr(get_theme_file_uri('assets/img/brands/04.svg')); ?>" class="awards__img" alt="The Flying Biscuit Cafe - Top 50 Emerging Restaurant Chains - FSR Magazine - August 2018" />
      </div>
      <div class="awards__item">
        <img src="<?php echo esc_attr(get_theme_file_uri('assets/img/brands/05.svg')); ?>" class="awards__img" alt="Entreprenuer - Top 200 Food Based Franchises 2017" />
      </div>
      <div class="awards__item">
        <img src="<?php echo esc_attr(get_theme_file_uri('assets/img/brands/06.svg')); ?>" class="awards__img" alt="Entreprenuer - Top 200 Food Based Franchises 2018" />
      </div>
    </div>
  </div>
</section>

    <!-- AUV Comparison (Animated) -->
  <section class="auv-chart" aria-labelledby="auvChartTitle">
    <div class="auv-chart__container">
      <h2 id="auvChartTitle" class="auv-chart__heading">Average Unit Volume (AUV *2024)</h2>
      <p class="auv-chart__sub">Flying Biscuit vs. comparable breakfast brands</p>
      <div class="auv-chart__wrap">
        <div class="auv-chart__y" aria-hidden="true">
          <span>$2.0M</span>
          <span>$1.5M</span>
          <span>$1.0M</span>
          <span>$0.5M</span>
          <span>$0</span>
        </div>
        <div class="auv-chart__grid" id="auvBars">
          <div class="auv-chart__col">
            <div class="auv-chart__bar auv-chart__bar--flying" data-value="2000000">
              <div class="auv-chart__value">$0</div>
              <div class="auv-chart__label">Flying Biscuit Café</div>
            </div>
          </div>
          <div class="auv-chart__col">
            <div class="auv-chart__bar auv-chart__bar--eggs" data-value="1347000">
              <div class="auv-chart__value">$0</div>
              <div class="auv-chart__label">Eggs Up Grill</div>
            </div>
          </div>
          <div class="auv-chart__col">
            <div class="auv-chart__bar auv-chart__bar--abec" data-value="1855185">
              <div class="auv-chart__value">$0</div>
              <div class="auv-chart__label">Another Broken Egg Café</div>
            </div>
          </div>
        </div>
      </div>
      <p class="auv-chart__sub" style="margin-top:10px;font-size:.9rem;">Illustrative comparison. Always refer to each brand's latest FDD for definitions and details.</p>
    </div>
  </section>

<!-- ===== Announcements (pulls from BLOG POSTS in category: Announcements) ===== -->
<section class="announcements" id="announcements" aria-labelledby="announcementsTitle">
  <div class="announcements__container">
    <header class="announcements__header">
      <span class="announcements__eyebrow">
        <span class="announcements__dot" aria-hidden="true"></span>
        Announcements
      </span>
      <h2 id="announcementsTitle" class="announcements__heading">Latest from Flying Biscuit</h2>
      <p class="announcements__sub">Menu updates, franchise milestones, events, and what’s new across the system.</p>
    </header>

    <?php
      // Use the category slug (recommended). Make sure your category slug is: "announcements"
      $q = new WP_Query([
        'post_type'           => 'post',
        'post_status'         => 'publish',
        'posts_per_page'      => 6,
        'ignore_sticky_posts' => false,  // sticky posts will float to top
        'category_name'       => 'announcements',
      ]);
    ?>

    <?php if ($q->have_posts()) : ?>
      <div class="announcements__grid" role="list">
        <?php while ($q->have_posts()) : $q->the_post(); ?>
          <?php
            $is_sticky = is_sticky(get_the_ID());
            $img_id    = get_post_thumbnail_id(get_the_ID());
            $img_alt   = $img_id ? get_post_meta($img_id, '_wp_attachment_image_alt', true) : '';
            if (!$img_alt) $img_alt = get_the_title();
          ?>
          <article class="announcement-card <?php echo $is_sticky ? 'announcement-card--pinned' : ''; ?>" role="listitem">

            <a class="announcement-card__media" href="<?php the_permalink(); ?>" aria-label="<?php echo esc_attr(get_the_title()); ?>">
              <?php if (has_post_thumbnail()) : ?>
                <?php
                  echo get_the_post_thumbnail(
                    get_the_ID(),
                    'large',
                    [
                      'class'   => 'announcement-card__img',
                      'alt'     => esc_attr($img_alt),
                      'loading' => 'lazy',
                    ]
                  );
                ?>
              <?php else : ?>
                <img
                  class="announcement-card__img"
                  src="<?php echo esc_url(get_theme_file_uri('/assets/img/placeholders/announcement-placeholder.jpg')); ?>"
                  alt="<?php echo esc_attr(get_the_title()); ?>"
                  loading="lazy"
                />
              <?php endif; ?>
            </a>

            <div class="announcement-card__content">
              <div class="announcement-card__top">
                <div class="announcement-card__badges">
                  <?php
                    // Optional: show all categories EXCEPT "Announcements" as badges
                    $cats = get_the_category();
                    if (!empty($cats)) :
                      foreach ($cats as $c) :
                        if (strtolower($c->slug) === 'announcements') continue;
                  ?>
                        <span class="announcement-card__badge"><?php echo esc_html($c->name); ?></span>
                  <?php
                      endforeach;
                    endif;
                  ?>

                  <?php if ($is_sticky) : ?>
                    <span class="announcement-card__badge announcement-card__badge--pinned">Pinned</span>
                  <?php endif; ?>
                </div>

                <time class="announcement-card__date" datetime="<?php echo esc_attr(get_the_date('c')); ?>">
                  <?php echo esc_html(get_the_date('M j, Y')); ?>
                </time>
              </div>

              <h3 class="announcement-card__title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </h3>

              <div class="announcement-card__body">
                <?php if (has_excerpt()) : ?>
                  <p><?php echo esc_html(get_the_excerpt()); ?></p>
                <?php else : ?>
                  <p><?php echo esc_html(wp_trim_words(wp_strip_all_tags(get_the_content()), 22)); ?></p>
                <?php endif; ?>
              </div>

              <a class="announcement-card__cta" href="<?php the_permalink(); ?>">
                Read more <span aria-hidden="true">→</span>
              </a>
            </div>

          </article>
        <?php endwhile; wp_reset_postdata(); ?>
      </div>

      <div class="announcements__footer">
      </div>
    <?php else : ?>
      <div class="announcements__empty">No announcements yet — check back soon.</div>
    <?php endif; ?>
  </div>
</section>

<!-- ===== Menu Hype Section (Updated: vertical social video, no influencer rail, simpler featured items) ===== -->
<section class="menu-hype" id="menu-hype" aria-labelledby="menuHypeTitle">
  <div class="menu-hype__container">
    <header class="menu-hype__header">
      <span class="menu-hype__eyebrow">
        <span class="menu-hype__dot" aria-hidden="true"></span>
        A Menu Designed for Profit
      </span>
      <h2 id="menuHypeTitle" class="menu-hype__heading">Craveable Menu. Differentiated. Built to Sell.</h2>
      <p class="menu-hype__sub">
        
      </p>
    </header>

    <div class="menu-hype__grid">
      <!-- Left: Copy + proof -->
      <div class="menu-hype__left">
        <div class="menu-hype__accolades" aria-label="Accolades and recognition">
          <span class="menu-hype__award">🏆 Award-Winning Brunch Favorite</span>
          <span class="menu-hype__award">💵 Engineered for Execution and Profit</span>
          <span class="menu-hype__award">🔥 Cult-Following Signature Items</span>
        </div>

        <div class="menu-hype__copy">
          <p>The Flying Biscuit menu hits the sweet spot: <strong>homemade taste</strong> with <strong>ease of execution</strong>—so teams deliver consistently,
        and guests rave every visit.</p>
          <p>
            Guests come for the biscuits, stay for the full experience: iconic breakfast classics, <strong>lunch items</strong> that extend daypart appeal,
            and a <strong>bar program</strong> most breakfast concepts don’t have.
          </p>
          <p>
            The bar isn’t just a vibe—it’s a profit lever. <strong>Brunch cocktails</strong> lift average ticket, fuel weekend demand, and add margin power
            that many competitors simply can’t match.
          </p>
          <p>
            And catering is a key part of the business model: big orders, predictable revenue, and community-driven demand that grows beyond dine-in.
            It’s built for offices, events, schools, and weekend gatherings.
          </p>
        </div>

        <div class="menu-hype__cta-row" role="group" aria-label="Menu calls to action">
          <a class="menu-hype__btn menu-hype__btn--primary" href="https://flyingbiscuitfranchising.com/wp-content/uploads/2026/02/village-commons-menu.pdf">View Full Menu</a>
          <a class="menu-hype__btn menu-hype__btn--secondary" href="https://flyingbiscuitfranchising.com/wp-content/uploads/2026/02/village-commons-catering-menu.pdf">View Catering Menu</a>
        </div>

        <p class="menu-hype__fineprint">
          *Items vary by location. Always refer to your market’s approved menu and rollouts.
        </p>
      </div>

      <!-- Right: Vertical “social” video -->
      <div class="menu-hype__right" aria-label="Vertical social-style video">
        <div class="reel" id="menuReel" data-video-id="fglxCo0KC24">
          <div class="reel__frame">
            <!-- Poster image -->
            <img
              class="reel__poster"
              src="<?php echo get_theme_file_uri('/assets/img/thumbnails/fb-columbia-influencer-thumbnail.jpg'); ?>"
              alt="Watch a quick menu highlight reel"
              loading="lazy"
            />
            <!-- UI overlay -->
            <div class="reel__overlay" aria-hidden="true">
              <div class="reel__pill">Menu Highlights</div>
              <div class="reel__play">
                <svg viewBox="0 0 24 24" width="28" height="28" aria-hidden="true">
                  <path d="M8 5v14l11-7z" fill="#fff"></path>
                </svg>
              </div>

              <!-- fake social UI -->
              <div class="reel__actions">
                <button class="reel__action" type="button" aria-label="Like">
                  ♥
                  <small>12.4k</small>
                </button>
                <button class="reel__action" type="button" aria-label="Comment">
                  💬
                  <small>482</small>
                </button>
                <button class="reel__action" type="button" aria-label="Share">
                  ↗
                  <small>Share</small>
                </button>
              </div>

              <div class="reel__caption">
                <strong>Flying Biscuit Café</strong> • biscuits, brunch cocktails, and comfort classics ✨
              </div>
            </div>

            <!-- clickable layer -->
            <button class="reel__hit" type="button" aria-label="Play menu highlight video"></button>
          </div>

          <div class="reel__note">
            This is the kind of short-form content that drives buzz, traffic, and first-time visits.
          </div>
        </div>
      </div>
    </div>


    <!-- ===== Menu Highlights (Alternating Image + Text) ===== -->
    <section class="menu-highlights" id="menu-highlights" aria-labelledby="menuHighlightsTitle">
      <div class="menu-highlights__container">
        <header class="menu-highlights__header">
          <!-- <span class="menu-highlights__eyebrow">
            <span class="menu-highlights__dot" aria-hidden="true"></span>
            Fan Favorites
          </span> -->
          <h3 id="menuHighlightsTitle" class="menu-highlights__title">A Menu Guests & Operators Love</h3>
          <p class="menu-highlights__sub">Refined over 30 years, these fan favorites strike the perfect balance between made-from-scratch flavor
      and smart, profitable and scalable execution—so guests keep coming back.</p>
        </header>

        <div class="menu-highlights__list">

          <!-- 1) Shrimp & Grits (image left) -->
          <article class="menu-highlights__row">
            <div class="menu-highlights__media">
              <img
                src="<?php echo esc_url(get_theme_file_uri('/assets/img/food/shrimp-n-grits-our-menu-square.jpg')); ?>"
                alt="Award-winning Shrimp &amp; Grits"
                loading="lazy"
              />
            </div>

            <div class="menu-highlights__content">
              <h4 class="menu-highlights__heading">AWARD WINNING SHRIMP &amp; GRITS</h4>
              <p class="menu-highlights__text">
                Our homemade creamy dreamy shrimp and grits are award winning. We’ve won “Best Grits” in cities from Atlanta to
                Huntsville, Alabama. Guests rave about a southern staple done the Flying Biscuit way—blackened shrimp, homemade
                tomato coulis, fresh chopped basil with our signature Creamy Dreamy Grits.
              </p>
              <div class="menu-highlights__actions">
                <a class="menu-highlights__btn menu-highlights__btn--primary" href="https://flyingbiscuitfranchising.com/wp-content/uploads/2026/02/village-commons-menu.pdf">View Full Menu</a>
              </div>
            </div>
          </article>

          <!-- 2) Flying Biscuit Breakfast (image right) -->
          <article class="menu-highlights__row menu-highlights__row--reverse">
            <div class="menu-highlights__media">
              <img
                src="<?php echo esc_url(get_theme_file_uri('/assets/img/food/flying-biscuit-breakfast.jpg')); ?>"
                alt="Flying Biscuit Breakfast"
                loading="lazy"
              />
            </div>

            <div class="menu-highlights__content">
              <h4 class="menu-highlights__heading">FLYING BISCUIT BREAKFAST</h4>
              <p class="menu-highlights__text">
                Our Flying Biscuit Breakfast embodies what Flying Biscuit is about—playing with tradition to deliver memorable
                flavors everyone craves. Our eggs are cooked to order, our bacon is nitrate-free, our sausage is Chicken Sage
                sausage and our grits are homemade with white cheddar. The Flying Biscuit Breakfast is the all-American breakfast
                done the Flying Biscuit way.
              </p>
              <div class="menu-highlights__actions">
                <a class="menu-highlights__btn menu-highlights__btn--primary" href="https://flyingbiscuitfranchising.com/wp-content/uploads/2026/02/village-commons-menu.pdf">View Full Menu</a>
              </div>
            </div>
          </article>

          <!-- 3) Stage 5 Clinger (image left) -->
          <article class="menu-highlights__row">
            <div class="menu-highlights__media">
              <img
                src="<?php echo esc_url(get_theme_file_uri('/assets/img/food/stage-5-clinger-square.jpg')); ?>"
                alt="Stage 5 Clinger Bloody Mary"
                loading="lazy"
              />
            </div>

            <div class="menu-highlights__content">
              <h4 class="menu-highlights__heading">STAGE 5 CLINGER</h4>
              <p class="menu-highlights__text">
                Every day is a holiday at Flying Biscuit! And no celebration is complete without a Bloody Mary! Central to every
                Flying Biscuit is our full-service bar serving our signature Stage 5 Clinger—Bloody Mary juice, blackened shrimp
                skewer, celery, a Tajín rim and a double shot!
              </p>
              <div class="menu-highlights__actions">
                <a class="menu-highlights__btn menu-highlights__btn--primary" href="https://flyingbiscuitfranchising.com/wp-content/uploads/2026/02/village-commons-menu.pdf">View Full Menu</a>
              </div>
            </div>
          </article>

          <!-- 4) Stuffed French Toast (image right) -->
          <article class="menu-highlights__row menu-highlights__row--reverse">
            <div class="menu-highlights__media">
              <img
                src="<?php echo esc_url(get_theme_file_uri('/assets/img/food/stuffed-french-toast-square.jpg')); ?>"
                alt="Stuffed French Toast"
                loading="lazy"
              />
            </div>

            <div class="menu-highlights__content">
              <h4 class="menu-highlights__heading">STUFFED FRENCH TOAST</h4>
              <p class="menu-highlights__text">
                In every city we’ve opened, the stuffed French toast is always a top seller! Never frozen, made from scratch but
                fine tuned for ease of prep and execution, our stuffed French toast comes in fresh, never frozen, our strawberry
                cream cheese filling is made in house to add depth to the French toast and it’s all topped off with cream anglaise
                that’ll make your guest want more.
              </p>
              <div class="menu-highlights__actions">
                <a class="menu-highlights__btn menu-highlights__btn--primary" href="https://flyingbiscuitfranchising.com/wp-content/uploads/2026/02/village-commons-menu.pdf">View Full Menu</a>
              </div>
            </div>
          </article>

        </div>
      </div>
    </section>
  </section>



<!-- ===== Interior Gallery Section ===== -->
<section class="interiors" id="unique-interiors" aria-labelledby="interiorsTitle">
  <div class="interiors__container">
    <header class="interiors__header">
      <span class="interiors__eyebrow">
        <span class="interiors__dot" aria-hidden="true"></span>
        Interiors as Unique as Our Partners
      </span>
      <h2 id="interiorsTitle" class="interiors__heading">Your Vision. Your Community. Your Flying Biscuit.</h2>
      <p class="interiors__sub">
        At Flying Biscuit, you get the power, know-how, and support of a 30-year-old brand without sacrificing your individuality. 
        Guests love our interiors because they're a reflection of our community. Each Flying Biscuit is as unique as our partners 
        and the cities they're in. Our resident artist, lovingly known as <strong>Gordo</strong>, works with each franchise partner 
        to create an interior that reflects your passion, your city, and you.
      </p>
    </header>

    <!-- Featured Collage Grid (6 hero images) -->
    <div class="interiors__collage" role="list" aria-label="Featured interior photos">
      <button type="button" class="interiors__tile" data-index="0" role="listitem" aria-label="View Columbia SC interior, image 1 of 40">
        <img src="<?php echo get_theme_file_uri('/assets/img/locations/interiors/columbia-sc.webp'); ?>" alt="Flying Biscuit Cafe interior at Columbia, South Carolina" loading="lazy" />
        <span class="interiors__tile-label">Columbia, SC</span>
      </button>
      <button type="button" class="interiors__tile" data-index="1" role="listitem" aria-label="View Brookhaven interior, image 2 of 40">
        <img src="<?php echo get_theme_file_uri('/assets/img/locations/interiors/brookhaven.webp'); ?>" alt="Flying Biscuit Cafe interior at Brookhaven, Georgia" loading="lazy" />
        <span class="interiors__tile-label">Brookhaven, GA</span>
      </button>
      <button type="button" class="interiors__tile" data-index="2" role="listitem" aria-label="View Wake Forest interior, image 3 of 40">
        <img src="<?php echo get_theme_file_uri('/assets/img/locations/interiors/wake-forest-nc.webp'); ?>" alt="Flying Biscuit Cafe interior at Wake Forest, North Carolina" loading="lazy" />
        <span class="interiors__tile-label">Wake Forest, NC</span>
      </button>
      <button type="button" class="interiors__tile" data-index="3" role="listitem" aria-label="View Candler Park interior, image 4 of 40">
        <img src="<?php echo get_theme_file_uri('/assets/img/locations/interiors/candler-park.webp'); ?>" alt="Flying Biscuit Cafe interior at Candler Park, Georgia" loading="lazy" />
        <span class="interiors__tile-label">Candler Park, GA</span>
      </button>
      <button type="button" class="interiors__tile" data-index="4" role="listitem" aria-label="View Huntsville interior, image 5 of 40">
        <img src="<?php echo get_theme_file_uri('/assets/img/locations/interiors/huntsville-al.jpg'); ?>" alt="Flying Biscuit Cafe interior at Huntsville, Alabama" loading="lazy" />
        <span class="interiors__tile-label">Huntsville, AL</span>
      </button>
      <button type="button" class="interiors__tile" data-index="5" role="listitem" aria-label="View Midtown Atlanta interior, image 6 of 40">
        <img src="<?php echo get_theme_file_uri('/assets/img/locations/interiors/midtown-atl.webp'); ?>" alt="Flying Biscuit Cafe interior at Midtown Atlanta, Georgia" loading="lazy" />
        <span class="interiors__tile-label">Midtown, GA</span>
      </button>
    </div>

    <!-- Scrollable Gallery Rail (all 40 photos) -->
    <div class="interiors__rail-wrap">
      <h3 class="interiors__rail-title">Explore All Locations</h3>
      <div class="interiors__rail" role="list" aria-label="All interior photos gallery" tabindex="0">

        <button type="button" class="interiors__thumb" data-index="0" role="listitem" aria-label="View Athens Epps Bridge interior, image 1 of 40">
          <img src="<?php echo get_theme_file_uri('/assets/img/locations/interiors/athens-epps-bridge.webp'); ?>" alt="Flying Biscuit Cafe interior at Athens Epps Bridge, Georgia" loading="lazy" />
          <span class="interiors__thumb-label">Athens, GA</span>
        </button>

        <button type="button" class="interiors__thumb" data-index="1" role="listitem" aria-label="View Birmingham interior, image 2 of 40">
          <img src="<?php echo get_theme_file_uri('/assets/img/locations/interiors/birmingham.jpeg'); ?>" alt="Flying Biscuit Cafe interior at Birmingham, Alabama" loading="lazy" />
          <span class="interiors__thumb-label">Birmingham, AL</span>
        </button>

        <button type="button" class="interiors__thumb" data-index="2" role="listitem" aria-label="View Brier Creek interior, image 3 of 40">
          <img src="<?php echo get_theme_file_uri('/assets/img/locations/interiors/brier-creek.webp'); ?>" alt="Flying Biscuit Cafe interior at Brier Creek, North Carolina" loading="lazy" />
          <span class="interiors__thumb-label">Brier Creek, NC</span>
        </button>

        <button type="button" class="interiors__thumb" data-index="3" role="listitem" aria-label="View Brookhaven interior, image 4 of 40">
          <img src="<?php echo get_theme_file_uri('/assets/img/locations/interiors/brookhaven.webp'); ?>" alt="Flying Biscuit Cafe interior at Brookhaven, Georgia" loading="lazy" />
          <span class="interiors__thumb-label">Brookhaven, GA</span>
        </button>

        <button type="button" class="interiors__thumb" data-index="4" role="listitem" aria-label="View Buckhead Howell Mill interior, image 5 of 40">
          <img src="<?php echo get_theme_file_uri('/assets/img/locations/interiors/buckhead-howell-mill.webp'); ?>" alt="Flying Biscuit Cafe interior at Buckhead Howell Mill, Georgia" loading="lazy" />
          <span class="interiors__thumb-label">Buckhead, GA</span>
        </button>

        <button type="button" class="interiors__thumb" data-index="5" role="listitem" aria-label="View Buckhead Terminus interior, image 6 of 40">
          <img src="<?php echo get_theme_file_uri('/assets/img/locations/interiors/buckhead-terminus.webp'); ?>" alt="Flying Biscuit Cafe interior at Buckhead Terminus, Georgia" loading="lazy" />
          <span class="interiors__thumb-label">Buckhead, GA</span>
        </button>

        <button type="button" class="interiors__thumb" data-index="6" role="listitem" aria-label="View Buford interior, image 7 of 40">
          <img src="<?php echo get_theme_file_uri('/assets/img/locations/interiors/buford.jpg'); ?>" alt="Flying Biscuit Cafe interior at Buford, Georgia" loading="lazy" />
          <span class="interiors__thumb-label">Buford, GA</span>
        </button>

        <button type="button" class="interiors__thumb" data-index="7" role="listitem" aria-label="View Candler Park interior, image 8 of 40">
          <img src="<?php echo get_theme_file_uri('/assets/img/locations/interiors/candler-park.webp'); ?>" alt="Flying Biscuit Cafe interior at Candler Park, Georgia" loading="lazy" />
          <span class="interiors__thumb-label">Candler Park, GA</span>
        </button>

        <button type="button" class="interiors__thumb" data-index="8" role="listitem" aria-label="View Cary interior, image 9 of 40">
          <img src="<?php echo get_theme_file_uri('/assets/img/locations/interiors/cary.jpg'); ?>" alt="Flying Biscuit Cafe interior at Cary, North Carolina" loading="lazy" />
          <span class="interiors__thumb-label">Cary, NC</span>
        </button>

        <button type="button" class="interiors__thumb" data-index="9" role="listitem" aria-label="View Chapel Hill interior, image 10 of 40">
          <img src="<?php echo get_theme_file_uri('/assets/img/locations/interiors/chapel-hill.webp'); ?>" alt="Flying Biscuit Cafe interior at Chapel Hill, North Carolina" loading="lazy" />
          <span class="interiors__thumb-label">Chapel Hill, NC</span>
        </button>

        <button type="button" class="interiors__thumb" data-index="10" role="listitem" aria-label="View Columbia SC interior, image 11 of 40">
          <img src="<?php echo get_theme_file_uri('/assets/img/locations/interiors/columbia-sc.webp'); ?>" alt="Flying Biscuit Cafe interior at Columbia, South Carolina" loading="lazy" />
          <span class="interiors__thumb-label">Columbia, SC</span>
        </button>

        <button type="button" class="interiors__thumb" data-index="11" role="listitem" aria-label="View Columbus GA interior, image 12 of 40">
          <img src="<?php echo get_theme_file_uri('/assets/img/locations/interiors/columbus-ga.webp'); ?>" alt="Flying Biscuit Cafe interior at Columbus, Georgia" loading="lazy" />
          <span class="interiors__thumb-label">Columbus, GA</span>
        </button>

        <button type="button" class="interiors__thumb" data-index="12" role="listitem" aria-label="View Cypress TX interior, image 13 of 40">
          <img src="<?php echo get_theme_file_uri('/assets/img/locations/interiors/cypress-tx.jpg'); ?>" alt="Flying Biscuit Cafe interior at Cypress, Texas" loading="lazy" />
          <span class="interiors__thumb-label">Cypress, TX</span>
        </button>

        <button type="button" class="interiors__thumb" data-index="13" role="listitem" aria-label="View Gainesville interior, image 14 of 40">
          <img src="<?php echo get_theme_file_uri('/assets/img/locations/interiors/gainesville.webp'); ?>" alt="Flying Biscuit Cafe interior at Gainesville, Georgia" loading="lazy" />
          <span class="interiors__thumb-label">Gainesville, GA</span>
        </button>

        <button type="button" class="interiors__thumb" data-index="14" role="listitem" aria-label="View Greenville wall mural, image 15 of 40">
          <img src="<?php echo get_theme_file_uri('/assets/img/locations/interiors/greenville-wall.webp'); ?>" alt="Flying Biscuit Cafe wall mural at Greenville, South Carolina" loading="lazy" />
          <span class="interiors__thumb-label">Greenville, SC</span>
        </button>

        <button type="button" class="interiors__thumb" data-index="15" role="listitem" aria-label="View Greenville interior, image 16 of 40">
          <img src="<?php echo get_theme_file_uri('/assets/img/locations/interiors/greenville.webp'); ?>" alt="Flying Biscuit Cafe interior at Greenville, South Carolina" loading="lazy" />
          <span class="interiors__thumb-label">Greenville, SC</span>
        </button>

        <button type="button" class="interiors__thumb" data-index="16" role="listitem" aria-label="View Houston TX interior, image 17 of 40">
          <img src="<?php echo get_theme_file_uri('/assets/img/locations/interiors/houston-tx.jpg'); ?>" alt="Flying Biscuit Cafe interior at Houston, Texas" loading="lazy" />
          <span class="interiors__thumb-label">Houston, TX</span>
        </button>

        <button type="button" class="interiors__thumb" data-index="17" role="listitem" aria-label="View Huntsville AL interior, image 18 of 40">
          <img src="<?php echo get_theme_file_uri('/assets/img/locations/interiors/huntsville-al.jpg'); ?>" alt="Flying Biscuit Cafe interior at Huntsville, Alabama" loading="lazy" />
          <span class="interiors__thumb-label">Huntsville, AL</span>
        </button>

        <button type="button" class="interiors__thumb" data-index="18" role="listitem" aria-label="View Kennesaw GA interior, image 19 of 40">
          <img src="<?php echo get_theme_file_uri('/assets/img/locations/interiors/kennesaw-ga.webp'); ?>" alt="Flying Biscuit Cafe interior at Kennesaw, Georgia" loading="lazy" />
          <span class="interiors__thumb-label">Kennesaw, GA</span>
        </button>

        <button type="button" class="interiors__thumb" data-index="19" role="listitem" aria-label="View Kingwood TX interior, image 20 of 40">
          <img src="<?php echo get_theme_file_uri('/assets/img/locations/interiors/kingwood-tx.webp'); ?>" alt="Flying Biscuit Cafe interior at Kingwood, Texas" loading="lazy" />
          <span class="interiors__thumb-label">Kingwood, TX</span>
        </button>

        <button type="button" class="interiors__thumb" data-index="20" role="listitem" aria-label="View Knoxville TN interior, image 21 of 40">
          <img src="<?php echo get_theme_file_uri('/assets/img/locations/interiors/knoxville-tn.webp'); ?>" alt="Flying Biscuit Cafe interior at Knoxville, Tennessee" loading="lazy" />
          <span class="interiors__thumb-label">Knoxville, TN</span>
        </button>

        <button type="button" class="interiors__thumb" data-index="21" role="listitem" aria-label="View Knoxville TN second interior, image 22 of 40">
          <img src="<?php echo get_theme_file_uri('/assets/img/locations/interiors/knoxville-tn-2.webp'); ?>" alt="Flying Biscuit Cafe second interior view at Knoxville, Tennessee" loading="lazy" />
          <span class="interiors__thumb-label">Knoxville, TN</span>
        </button>

        <button type="button" class="interiors__thumb" data-index="22" role="listitem" aria-label="View Macon GA interior, image 23 of 40">
          <img src="<?php echo get_theme_file_uri('/assets/img/locations/interiors/macon-ga.png'); ?>" alt="Flying Biscuit Cafe interior at Macon, Georgia" loading="lazy" />
          <span class="interiors__thumb-label">Macon, GA</span>
        </button>

        <button type="button" class="interiors__thumb" data-index="23" role="listitem" aria-label="View Matthews NC interior, image 24 of 40">
          <img src="<?php echo get_theme_file_uri('/assets/img/locations/interiors/matthews-nc.webp'); ?>" alt="Flying Biscuit Cafe interior at Matthews, North Carolina" loading="lazy" />
          <span class="interiors__thumb-label">Matthews, NC</span>
        </button>

        <button type="button" class="interiors__thumb" data-index="24" role="listitem" aria-label="View Memorial City TX interior, image 25 of 40">
          <img src="<?php echo get_theme_file_uri('/assets/img/locations/interiors/memorial-city-tx.webp'); ?>" alt="Flying Biscuit Cafe interior at Memorial City, Texas" loading="lazy" />
          <span class="interiors__thumb-label">Memorial City, TX</span>
        </button>

        <button type="button" class="interiors__thumb" data-index="25" role="listitem" aria-label="View Midtown Atlanta interior, image 26 of 40">
          <img src="<?php echo get_theme_file_uri('/assets/img/locations/interiors/midtown-atl.webp'); ?>" alt="Flying Biscuit Cafe interior at Midtown Atlanta, Georgia" loading="lazy" />
          <span class="interiors__thumb-label">Midtown, GA</span>
        </button>

        <button type="button" class="interiors__thumb" data-index="26" role="listitem" aria-label="View Mobile AL interior, image 27 of 40">
          <img src="<?php echo get_theme_file_uri('/assets/img/locations/interiors/mobile-al.webp'); ?>" alt="Flying Biscuit Cafe interior at Mobile, Alabama" loading="lazy" />
          <span class="interiors__thumb-label">Mobile, AL</span>
        </button>

        <button type="button" class="interiors__thumb" data-index="27" role="listitem" aria-label="View Opelika interior, image 28 of 40">
          <img src="<?php echo get_theme_file_uri('/assets/img/locations/interiors/opelika.webp'); ?>" alt="Flying Biscuit Cafe interior at Opelika, Alabama" loading="lazy" />
          <span class="interiors__thumb-label">Opelika, AL</span>
        </button>

        <button type="button" class="interiors__thumb" data-index="28" role="listitem" aria-label="View Park Rd Charlotte NC interior, image 29 of 40">
          <img src="<?php echo get_theme_file_uri('/assets/img/locations/interiors/park-rd-charlotte-nc.jpg'); ?>" alt="Flying Biscuit Cafe interior at Park Road Charlotte, North Carolina" loading="lazy" />
          <span class="interiors__thumb-label">Charlotte, NC</span>
        </button>

        <button type="button" class="interiors__thumb" data-index="29" role="listitem" aria-label="View Peachtree City GA interior, image 30 of 40">
          <img src="<?php echo get_theme_file_uri('/assets/img/locations/interiors/peachtree-city-ga.webp'); ?>" alt="Flying Biscuit Cafe interior at Peachtree City, Georgia" loading="lazy" />
          <span class="interiors__thumb-label">Peachtree City, GA</span>
        </button>

        <button type="button" class="interiors__thumb" data-index="30" role="listitem" aria-label="View Peachtree Corners GA interior, image 31 of 40">
          <img src="<?php echo get_theme_file_uri('/assets/img/locations/interiors/peachtree-corners-ga.jpg'); ?>" alt="Flying Biscuit Cafe interior at Peachtree Corners, Georgia" loading="lazy" />
          <span class="interiors__thumb-label">Peachtree Corners, GA</span>
        </button>

        <button type="button" class="interiors__thumb" data-index="31" role="listitem" aria-label="View Raleigh Clark Ave interior, image 32 of 40">
          <img src="<?php echo get_theme_file_uri('/assets/img/locations/interiors/raleigh-clark-ave.webp'); ?>" alt="Flying Biscuit Cafe interior at Raleigh Clark Ave, North Carolina" loading="lazy" />
          <span class="interiors__thumb-label">Raleigh, NC</span>
        </button>

        <button type="button" class="interiors__thumb" data-index="32" role="listitem" aria-label="View Rea Rd Charlotte NC interior, image 33 of 40">
          <img src="<?php echo get_theme_file_uri('/assets/img/locations/interiors/rea-rd-charlotte-nc.webp'); ?>" alt="Flying Biscuit Cafe interior at Rea Road Charlotte, North Carolina" loading="lazy" />
          <span class="interiors__thumb-label">Charlotte, NC</span>
        </button>

        <button type="button" class="interiors__thumb" data-index="33" role="listitem" aria-label="View Richmond TX interior, image 34 of 40">
          <img src="<?php echo get_theme_file_uri('/assets/img/locations/interiors/richmond-tx.webp'); ?>" alt="Flying Biscuit Cafe interior at Richmond, Texas" loading="lazy" />
          <span class="interiors__thumb-label">Richmond, TX</span>
        </button>

        <button type="button" class="interiors__thumb" data-index="34" role="listitem" aria-label="View Roswell GA interior, image 35 of 40">
          <img src="<?php echo get_theme_file_uri('/assets/img/locations/interiors/roswell-ga.webp'); ?>" alt="Flying Biscuit Cafe interior at Roswell, Georgia" loading="lazy" />
          <span class="interiors__thumb-label">Roswell, GA</span>
        </button>

        <button type="button" class="interiors__thumb" data-index="35" role="listitem" aria-label="View Sandy Springs interior, image 36 of 40">
          <img src="<?php echo get_theme_file_uri('/assets/img/locations/interiors/sandy-springs.webp'); ?>" alt="Flying Biscuit Cafe interior at Sandy Springs, Georgia" loading="lazy" />
          <span class="interiors__thumb-label">Sandy Springs, GA</span>
        </button>

        <button type="button" class="interiors__thumb" data-index="36" role="listitem" aria-label="View Spartanburg SC interior, image 37 of 40">
          <img src="<?php echo get_theme_file_uri('/assets/img/locations/interiors/spartanburg-sc.jpg'); ?>" alt="Flying Biscuit Cafe interior at Spartanburg, South Carolina" loading="lazy" />
          <span class="interiors__thumb-label">Spartanburg, SC</span>
        </button>

        <button type="button" class="interiors__thumb" data-index="37" role="listitem" aria-label="View The Villages FL interior, image 38 of 40">
          <img src="<?php echo get_theme_file_uri('/assets/img/locations/interiors/the-villages-fl.webp'); ?>" alt="Flying Biscuit Cafe interior at The Villages, Florida" loading="lazy" />
          <span class="interiors__thumb-label">The Villages, FL</span>
        </button>

        <button type="button" class="interiors__thumb" data-index="38" role="listitem" aria-label="View Wake Forest NC interior, image 39 of 40">
          <img src="<?php echo get_theme_file_uri('/assets/img/locations/interiors/wake-forest-nc.webp'); ?>" alt="Flying Biscuit Cafe interior at Wake Forest, North Carolina" loading="lazy" />
          <span class="interiors__thumb-label">Wake Forest, NC</span>
        </button>

        <button type="button" class="interiors__thumb" data-index="39" role="listitem" aria-label="View West Ashley Charleston interior, image 40 of 40">
          <img src="<?php echo get_theme_file_uri('/assets/img/locations/interiors/west-ashley-charleston.jpg'); ?>" alt="Flying Biscuit Cafe interior at West Ashley Charleston, South Carolina" loading="lazy" />
          <span class="interiors__thumb-label">Charleston, SC</span>
        </button>

      </div>
      <div class="interiors__rail-hint" aria-hidden="true">
        <span>← Scroll to explore →</span>
      </div>
    </div>

    <!-- CTA -->
    <div class="interiors__cta">
      <a href="#lead-form" class="interiors__btn">Start Designing Your Flying Biscuit</a>
    </div>
  </div>
</section>

<!-- Lightbox Modal (accessible, keyboard-navigable) -->
<div class="lightbox" id="interiorsLightbox" role="dialog" aria-modal="true" aria-label="Interior photo gallery" hidden>
  <div class="lightbox__backdrop"></div>
  <div class="lightbox__container">
    <button type="button" class="lightbox__close" aria-label="Close gallery">
      <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M18 6L6 18M6 6l12 12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
    </button>
    <button type="button" class="lightbox__nav lightbox__nav--prev" aria-label="Previous image">
      <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M15 18l-6-6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
    </button>
    <figure class="lightbox__figure">
      <img class="lightbox__img" src="" alt="" />
      <figcaption class="lightbox__caption"></figcaption>
    </figure>
    <button type="button" class="lightbox__nav lightbox__nav--next" aria-label="Next image">
      <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M9 18l6-6-6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
    </button>
    <div class="lightbox__counter" aria-live="polite"></div>
  </div>
</div>

  <section class="about" id="about">
    <div class="about__container">
      <div class="about__content">
        <h2 class="about__heading">An Icon with a Cult Following</h2>
        <p class="about__intro">Born in Atlanta in 1993, The Flying Biscuit Café is a breakfast staple — serving a unique menu that blends honest ingredients with a drink menu guests crave with simplicity of execution that franchisees love. Flying Biscuit’s success is built on systems created over the course of 30 years of execution, a guest experience refined by serving over 30,000,000 meals, and a brand that owns and operates company-owned stores across 3 states by a leadership team with over 100 combined years of experience opening over 300 restaurants. This has resulted in a consistent brand with a loyal following that keeps guests coming back year after year.</p>
        <p class="about__mission">Flying Biscuit evolved from a single neighborhood café with lines out the door into a thriving franchise brand with more than 40 locations. Our mission is simple — make franchisees so profitable they open more locations.</p>
        <p class="about__cult">Our guests are our greatest marketing resource. We don’t just have customers; we have raving fans! Our cult following spans geography and generations of brunch lovers who line up for our award-winning shrimp & grits, famous biscuits and Stage 5 Clinger Bloody Mary. When you open your Flying Biscuit, you inherit this cult following.</p>
      </div>
      <div class="about__image">
        <img src="<?php echo get_theme_file_uri('/assets/img/wake-forest-interior.jpg'); ?>" alt="Flying Biscuit Café interior with happy guests">
      </div>
    </div>
  </section>

  <!-- Franchisee Testimonials (Text + Image) -->
<section class="testimonials" id="franchisee-testimonials">
  <div class="testimonials__container">
    <h2 class="testimonials__heading">What Our Franchisees Say</h2>
    <div class="testimonials__grid">

      <article class="testimonials__card">
        <div class="testimonials__body">
          <p class="testimonials__quote">“What we love about being Flying Biscuit operators is the training that was provided prior to opening, the incredible support from Corporate and honestly it feels like we are a part of a family. Best decision we ever made.”</p>
          <div class="testimonials__author">
            <div class="testimonials__media">
              <img class="testimonials__img" src="<?php echo esc_attr(get_theme_file_uri('assets/img/franchisees/kevin-white.webp')); ?>" alt="Franchisee Kevin White">
            </div>
            Kevin White — Columbia, SC
          </div>
        </div>
      </article>

      <article class="testimonials__card">
        <div class="testimonials__body">
          <p class="testimonials__quote">“Every day, our team experiences insurmountable joy when our fresh ingredients and inclusive menu options bring a smile to our guests' faces. Due to the dynamic environment of our Brookhaven location, we proudly stay current with market trends.”</p>
          <div class="testimonials__author">
            <div class="testimonials__media">
              <img class="testimonials__img" src="<?php echo esc_attr(get_theme_file_uri('assets/img/franchisees/samra-malik.jpg')); ?>" alt="Franchisee Samra Malik in Atlanta, GA">
            </div>
            Samra Malik — Atlanta, GA
          </div>
        </div>
      </article>

      <article class="testimonials__card">
        <div class="testimonials__body">
          <p class="testimonials__quote">“They set you up with all the vendors and relationships, so you don't have to search for which baker or produce company to use. They guide you through the entire process, so extensive knowledge of the restaurant business isn't necessary to get involved, but a passion for the industry is essential.”</p>
          <div class="testimonials__author">
            <div class="testimonials__media">
              <img class="testimonials__img" src="<?php echo esc_attr(get_theme_file_uri('assets/img/franchisees/brad-rubenstein.jpg')); ?>" alt="Franchisee Brad Rubenstein in Atlanta, GA">
            </div>
            Brad Rubenstein — Atlanta, GA
          </div>
        </div>
      </article>

    </div>
  </div>
</section>

  <!-- <section class="stories">
    <div class="stories__container">
      <h2 class="stories__heading">Franchisee Success Stories</h2>
      <div class="stories__grid">
        <div class="stories__card" data-video="ScMzIvxBSi4">
          <div class="stories__thumb">
            <img src="https://img.youtube.com/vi/ScMzIvxBSi4/hqdefault.jpg" alt="Orlando Franchisee Story" class="stories__thumb-image">
            <div class="stories__play-overlay">
              <div class="stories__play-btn" aria-label="Play video">
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M8 5v14l11-7z"/></svg>
              </div>
            </div>
          </div>
          <div class="stories__content">
            <p class="stories__quote">“Within six months we built a loyal breakfast crowd and doubled our weekend sales. The support team helped us at every step.”</p>
            <p><strong>Maria & José — Orlando, FL</strong></p>
          </div>
        </div>

        <div class="stories__card" data-video="dQw4w9WgXcQ">
          <div class="stories__thumb">
            <img src="https://img.youtube.com/vi/dQw4w9WgXcQ/hqdefault.jpg" alt="Tampa Franchisee Story" class="stories__thumb-image">
            <div class="stories__play-overlay">
              <div class="stories__play-btn" aria-label="Play video">
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M8 5v14l11-7z"/></svg>
              </div>
            </div>
          </div>
          <div class="stories__content">
            <p class="stories__quote">“I’ve owned other franchises, but Flying Biscuit stands out for its community connection and brand power. We’re already opening our second location.”</p>
            <p><strong>Kevin L. — Tampa, FL</strong></p>
          </div>
        </div>

        <div class="stories__card" data-video="tgbNymZ7vqY">
          <div class="stories__thumb">
            <img src="https://img.youtube.com/vi/tgbNymZ7vqY/hqdefault.jpg" alt="Atlanta Franchisee Story" class="stories__thumb-image">
            <div class="stories__play-overlay">
              <div class="stories__play-btn" aria-label="Play video">
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M8 5v14l11-7z"/></svg>
              </div>
            </div>
          </div>
          <div class="stories__content">
            <p class="stories__quote">“Corporate training was top‑notch. Our grand opening weekend set a new record for the region.”</p>
            <p><strong>Priya & Daniel — Atlanta, GA</strong></p>
          </div>
        </div>
      </div>
    </div>
  </section> -->



  <section class="support" id="world-class-support">
    <div class="support__container">
      <div class="support__content">
        <h2>Over 200 Years of Experience at Your Disposal</h2>
        <h3 style="color: var(--brand-primary-dark); font-size: 1.5rem;">Systems Built with a Century of Experience</h3>
        <p>Success requires systems. We’ve spent 30 years building the backend so you can focus on the front end: the guest.</p>
        <ul class="support__list">
          <li><strong>Real Estate. Real Estate. Real Estate.</strong> — We leverage national relationships to help you secure prime real estate that independent owners can't access. The Flying Biscuit brand carries weight. Guests Rave about us, and landlords love our 30-year track-record of success!</li>
          <li><strong>Collective Purchasing Agreements</strong> — You tap into our collective buying power immediately. We work with one of the nation’s best food purchasers to increase your profitability. We worry about the cost of eggs so you can focus on delivering amazing experiences to guests.
</li>
          <li><strong>Talent Training</strong> — We don't just train you on cooking and service; we help you turn your staff into a sales generating team with bottom line thinking. From management training in Atlanta to on-site culture building during your Grand Opening, our goal is to make success the main ingredient of your culture.</li>
          <li><strong>Demand Generation and Marketing</strong> — Our goal isn’t simply “branding”, its to get butts in your seats. We utilize hyper-local digital marketing to get new customers, provide hospitality training and a crave-worthy menu to help retain raving fans, and focus on intelligent top of mind marketing to close the gap between visits.</li>
        </ul>
      </div>
      <div class="support__image">
        <!-- Set your YouTube ID below -->
        <div class="video" id="supportVideo" data-video-id="mhoSf8bJ1A4">
          <div class="video__thumb" role="button" tabindex="0" aria-label="Play video: World-Class Support">
            <!-- Use your own poster image if you prefer -->
            <img
              src="<?php echo get_theme_file_uri('/assets/img/thumbnails/sohail-khizer.jpg'); ?>"
              alt="Watch how Flying Biscuit supports franchisees"
              loading="lazy"
            />
            <span class="video__play" aria-hidden="true">
              <svg viewBox="0 0 24 24"><path d="M8 5v14l11-7z" fill="#fff"/></svg>
            </span>
          </div>
        </div>
      </div>
    </div>
  </section>

<section class="marketing" id="marketing-support" aria-labelledby="marketingTitle">
  <div class="container">
    <header class="marketing__header" style="text-align:center;margin-bottom:32px">
      <span class="team__eyebrow"><span class="team__dot"></span> Marketing Support</span>
      <h2 id="marketingTitle" class="team__heading">Effective Marketing that Drives Sales to Your Flying Biscuit</h2>
      <p class="team__sub" style="max-width:760px;margin:0 auto">From national promotions to custom tailored neighborhood campaigns, Flying Biscuit Café’s marketing team does the heavy lifting so you can focus on your team and your guests. You benefit from proven strategies, creative assets, and a marketing team focused on your success who leverage the power of a brand with 30 years of raving fans to keep your guests coming back week after week.</p>
    </header>

    <div class="marketing__grid" style="display:grid;grid-template-columns:repeat(auto-fit,minmax(300px,1fr));gap:24px;align-items:start">
      <div class="marketing__card" style="background:#fff;border:1.5px solid #efe7f6;border-radius:16px;box-shadow:var(--shadow);padding:24px">
        <h3 style="color:var(--brand-primary);margin-top:0">National Brand Campaigns</h3>
        <p style="color:var(--muted)">Our corporate team manages regional and national marketing campaigns that elevate brand awareness across social media, Google, and local publications—keeping Flying Biscuit top of mind for brunch lovers everywhere.</p>
      </div>

      <div class="marketing__card" style="background:#fff;border:1.5px solid #efe7f6;border-radius:16px;box-shadow:var(--shadow);padding:24px">
        <h3 style="color:var(--brand-primary);margin-top:0">Done‑For‑You Local Store Marketing</h3>
        <p style="color:var(--muted)">Access turnkey digital ad kits, in‑store promo templates, and seasonal content calendars that make marketing simple. We’ll help you attract your local community from day one with ready‑to‑launch assets.</p>
      </div>

      <div class="marketing__card" style="background:#fff;border:1.5px solid #efe7f6;border-radius:16px;box-shadow:var(--shadow);padding:24px">
        <h3 style="color:var(--brand-primary);margin-top:0">Data‑Driven Strategy & Support</h3>
        <p style="color:var(--muted)">Our marketing specialists track every campaign through advanced analytics, giving you insights into ROI, customer loyalty, and peak performance times—so every dollar you spend moves you closer to your growth goals.</p>
      </div>
    </div>
  </div>
</section>

<section class="team" id="meet-the-team" aria-labelledby="teamTitle">
  <div class="container">
    <header class="team__header">
      <span class="team__eyebrow"><span class="team__dot"></span> A Team With Over 200 Years Experience</span>
      <h2 id="teamTitle" class="team__heading">The Experts Behind the Flying Biscuit System</h2>
      <p class="team__sub">When you invest in a Flying Biscuit Café, you’re not just buying a restaurant—you’re joining a proven system built by the same leadership group that founded <strong>Moe’s Southwest Grill</strong>. Backed by decades of franchise growth, award‑winning hospitality, and a culture of innovation, this team has perfected how to launch, grow, and support profitable franchise owners. From signing day to grand opening and beyond, you’ll have seasoned experts guiding your success every step of the way.</p>
    </header>
    <div class="team__grid" id="teamGrid">
      <article class="team-card">
        <div class="team-card__media">
          <img class="team-card__img" src="<?php echo get_theme_file_uri('/assets/img/team/martin-sprock.jpg'); ?>" alt="Portrait of Martin Sprock, Founder" loading="lazy" />
        </div>
        <div class="team-card__body">
          <h3 class="team-card__name">Martin Sprock</h3>
          <div class="team-card__role">Partner, Founder</div>
          <div class="team-card__meta"><span>Founder of Moe's Southwest Grill</span><span class="team-card__dot"></span><span>Branding</span></div>
        </div>
      </article>

      <article class="team-card">
        <div class="team-card__media">
          <img class="team-card__img" src="<?php echo get_theme_file_uri('/assets/img/team/daryl-dollinger.jpg'); ?>" alt="Portrait of Daryl Dollinger, President & CEO" loading="lazy" />
        </div>
        <div class="team-card__body">
          <h3 class="team-card__name">Daryl Dollinger</h3>
          <div class="team-card__role">Partner, President</div>
          <div class="team-card__meta"><span>30+ yrs growth</span><span class="team-card__dot"></span><span>Unit economics</span></div>
        </div>
      </article>

      <article class="team-card">
        <div class="team-card__media">
          <img class="team-card__img" src="<?php echo get_theme_file_uri('/assets/img/team/andrew-scherzer.jpg'); ?>" alt="Portrait of Andrew Scherzer Franchise Development Director" loading="lazy" />
        </div>
        <div class="team-card__body">
          <h3 class="team-card__name">Andrew Scherzer</h3>
          <div class="team-card__role">Partner, Franchise Development</div>
          <div class="team-card__meta"><span>Franchisee Relations</span><span class="team-card__dot"></span><span>FDD</span></div>
        </div>
      </article>

      <article class="team-card">
        <div class="team-card__media">
          <img class="team-card__img" src="<?php echo get_theme_file_uri('/assets/img/team/alan.jpg'); ?>" alt="Portrait of Field Support Manager" loading="lazy" />
        </div>
        <div class="team-card__body">
          <h3 class="team-card__name">Alan Gonzalez</h3>
          <div class="team-card__role">Partner, Culinary</div>
          <div class="team-card__meta"><span>Menu Development</span><span class="team-card__dot"></span><span>Kitchen Training</span></div>
        </div>
      </article>

      <article class="team-card">
        <div class="team-card__media">
          <img class="team-card__img" src="<?php echo get_theme_file_uri('/assets/img/team/omar-graham.jpg'); ?>" alt="Portrait of Chief Technology Officer" loading="lazy" />
        </div>
        <div class="team-card__body">
          <h3 class="team-card__name">Omar Graham</h3>
          <div class="team-card__role">Partner, Technology</div>
          <div class="team-card__meta"><span>POS</span><span class="team-card__dot"></span><span>Integrations</span></div>
        </div>
      </article>

      <article class="team-card">
        <div class="team-card__media">
          <img class="team-card__img" src="<?php echo get_theme_file_uri('/assets/img/team/sohail-kaiser.jpg'); ?>" alt="Portrait of VP Operations" loading="lazy" />
        </div>
        <div class="team-card__body">
          <h3 class="team-card__name">Sohail Khizer</h3>
          <div class="team-card__role">Partner, Operations</div>
          <div class="team-card__meta"><span>Corporate Operations</span><span class="team-card__dot"></span><span>Vendor Relations</span></div>
        </div>
      </article>

      <article class="team-card">
        <div class="team-card__media">
          <img class="team-card__img" src="<?php echo get_theme_file_uri('/assets/img/team/chris-mcintyre.jpg'); ?>" alt="Portrait of Director, Franchisee Operations" loading="lazy" />
        </div>
        <div class="team-card__body">
          <h3 class="team-card__name">Chris Mcintyre</h3>
          <div class="team-card__role">Partner, Franchisee Operations</div>
          <div class="team-card__meta"><span>Store Openings</span><span class="team-card__dot"></span><span>Franchisee Support</span></div>
        </div>
      </article>

      <article class="team-card">
        <div class="team-card__media">
          <img class="team-card__img" src="<?php echo get_theme_file_uri('/assets/img/team/jack-deluca.jpg'); ?>" alt="Portrait of Marketing Lead" loading="lazy" />
        </div>
        <div class="team-card__body">
          <h3 class="team-card__name">Jack Deluca</h3>
          <div class="team-card__role">Partner, Marketing</div>
          <div class="team-card__meta"><span>Sales Growth</span><span class="team-card__dot"></span><span>Brand Development</span></div>
        </div>
      </article>

      <article class="team-card">
        <div class="team-card__media">
          <img class="team-card__img" src="<?php echo get_theme_file_uri('/assets/img/team/joshua-puckett.jpg'); ?>" alt="Portrait of Field Support Manager" loading="lazy" />
        </div>
        <div class="team-card__body">
          <h3 class="team-card__name">Joshua Puckett</h3>
          <div class="team-card__role">Director, IT</div>
          <div class="team-card__meta"><span>Website</span><span class="team-card__dot"></span><span>IT Infrastructure</span></div>
        </div>
      </article>

      <article class="team-card">
        <div class="team-card__media">
          <img class="team-card__img" src="<?php echo get_theme_file_uri('/assets/img/team/sharlene-horne.jpg'); ?>" alt="Portrait of Field Support Manager" loading="lazy" />
        </div>
        <div class="team-card__body">
          <h3 class="team-card__name">Sharlene Horne</h3>
          <div class="team-card__role">Franchisee Trainer</div>
          <div class="team-card__meta"><span>Catering</span><span class="team-card__dot"></span><span>Franchisee Onboarding</span></div>
        </div>
      </article>

      <article class="team-card">
        <div class="team-card__media">
          <img class="team-card__img" src="<?php echo get_theme_file_uri('/assets/img/team/andrew-guise.jpg'); ?>" alt="Portrait of Field Support Manager" loading="lazy" />
        </div>
        <div class="team-card__body">
          <h3 class="team-card__name">Andrew Guise</h3>
          <div class="team-card__role">Director, Texas Operations</div>
          <div class="team-card__meta"><span>Area Management</span><span class="team-card__dot"></span><span>Leadership Development</span></div>
        </div>
      </article>

      <article class="team-card">
        <div class="team-card__media">
          <img class="team-card__img" src="<?php echo get_theme_file_uri('/assets/img/team/mila-mailed.jpg'); ?>" alt="Portrait of Field Support Manager" loading="lazy" />
        </div>
        <div class="team-card__body">
          <h3 class="team-card__name">Mila Mailed</h3>
          <div class="team-card__role">Executive Assistant</div>
          <div class="team-card__meta"><span>Franchisee Onboarding</span><span class="team-card__dot"></span><span>Compliance</span></div>
        </div>
      </article>

      <article class="team-card">
        <div class="team-card__media">
          <img class="team-card__img" src="<?php echo get_theme_file_uri('/assets/img/team/gordo.jpg'); ?>" alt="Portrait of Field Support Manager" loading="lazy" />
        </div>
        <div class="team-card__body">
          <h3 class="team-card__name">Gordo</h3>
          <div class="team-card__role">Artist</div>
          <div class="team-card__meta"><span>Murals</span><span class="team-card__dot"></span><span>Inspiration</span></div>
        </div>
      </article>

    </div>
  </div>
</section>

<section class="own-steps" id="steps-to-ownership" aria-labelledby="ownStepsTitle">
  <div class="own-steps__container">
    <header class="own-steps__header">
      <span class="own-steps__eyebrow">
        <span class="dot" style="width:8px;height:8px;border-radius:50%;background:var(--success);box-shadow:0 0 0 6px rgba(18,184,134,.15)"></span>
        Steps to Ownership
      </span>
      <h2 id="ownStepsTitle" class="own-steps__heading">Path to Owning Your Flying Biscuit</h2>
      <p class="own-steps__sub">We are protective of our brand and our partners. Our process to awarding you a franchise ensures we’re a good fit for you, and you’re a good fit for the brand.</p>
    </header>

    <div class="own-steps__grid">
      <div class="own-steps__rail">
        <ul class="own-steps__list">

          <li class="own-steps__item">
            <!-- <span class="own-steps__dot"></span> -->
            <div class="own-steps__num">1</div>
            <div class="own-steps__card">
              <h3 class="own-steps__title">No Obligation Introductory Call — See If You’re a Fit</h3>
              <p class="own-steps__body">
                In one quick conversation, we’ll confirm if your goals, background, and capital align with the Flying Biscuit opportunity. No guesswork — you’ll know immediately if you’re positioned to move forward.
              </p>
            </div>
          </li>

          <li class="own-steps__item">
            <!-- <span class="own-steps__dot"></span> -->
            <div class="own-steps__num">2</div>
            <div class="own-steps__card">
              <h3 class="own-steps__title">Full Transparency, Zero Surprises — The FDD</h3>
              <p class="own-steps__body">
                You’ll get our <strong>Franchise Disclosure Document</strong> — the exact playbook behind our 30-year success story. We’ll walk you through key numbers, obligations, and what winning franchisees are earning right now.
              </p>
            </div>
          </li>

          <li class="own-steps__item">
            <!-- <span class="own-steps__dot"></span> -->
            <div class="own-steps__num">3</div>
            <div class="own-steps__card">
              <h3 class="own-steps__title">Custom Growth Plan — Steps to Success</h3>
              <p class="own-steps__body">
                You’ll speak directly with our Franchise Development Director to design a roadmap for your market — including real territory options, build-out timelines, and profit-driving local marketing strategies.
              </p>
            </div>
          </li>

          <li class="own-steps__item">
            <!-- <span class="own-steps__dot"></span> -->
            <div class="own-steps__num">4</div>
            <div class="own-steps__card">
              <h3 class="own-steps__title">Investment Ready— We’ll help ensure you’re Capital Ready</h3>
              <p class="own-steps__body">
                Whether it’s SBA loans or preferred lenders, our financing partners streamline approval — so you can lock in funding faster and keep your momentum strong.
              </p>
            </div>
          </li>

          <li class="own-steps__item">
            <!-- <span class="own-steps__dot"></span> -->
            <div class="own-steps__num">5</div>
            <div class="own-steps__card">
              <h3 class="own-steps__title">Behind the Scenes — Meet the Team, Taste the Vision</h3>
              <p class="own-steps__body">
                Visit our headquarters in Atlanta. Sit down with leadership, see operations in action, and experience firsthand why Flying Biscuit owners rave about our support and culture.
              </p>
            </div>
          </li>

          <li class="own-steps__item">
            <!-- <span class="own-steps__dot"></span> -->
            <div class="own-steps__num">6</div>
            <div class="own-steps__card">
              <h3 class="own-steps__title">Ownership — You’re Officially a Flying Biscuit Owner</h3>
              <p class="own-steps__body">
                Once you sign your ,<strong>Franchise Agreement</strong> and invest in the $45K franchise fee, our onboarding team kicks in. From site selection to grand opening — we help you open doors, hire your team, and serve your first biscuit.
              </p>
            </div>
          </li>

        </ul>
      </div>

      <aside class="own-steps__aside">
        <div class="own-steps__box">
          <h3>Your Fast-Track Overview</h3>
          <div class="own-steps__mini">
            <div class="own-steps__mini-row"><span class="own-steps__mini-num">1</span><span class="own-steps__mini-label">Fit Call</span></div>
            <div class="own-steps__mini-row"><span class="own-steps__mini-num">2</span><span class="own-steps__mini-label">FDD Review</span></div>
            <div class="own-steps__mini-row"><span class="own-steps__mini-num">3</span><span class="own-steps__mini-label">Custom Plan</span></div>
            <div class="own-steps__mini-row"><span class="own-steps__mini-num">4</span><span class="own-steps__mini-label">Funding</span></div>
            <div class="own-steps__mini-row"><span class="own-steps__mini-num">5</span><span class="own-steps__mini-label">Discovery Day</span></div>
            <div class="own-steps__mini-row"><span class="own-steps__mini-num">6</span><span class="own-steps__mini-label">Sign & Launch</span></div>
          </div>
          <a class="own-steps__cta" href="#lead-form">Start My Franchise Journey</a>
          <div class="own-steps__progress"><div class="own-steps__fill" id="ownStepsFill"></div></div>
        </div>
      </aside>
    </div>
  </div>
</section>



  <section id="lead-form" class="form-section" aria-labelledby="formTitle">
    <div class="form-section__container">
      <div class="form-section__left">
        <h2 id="formTitle" class="form-section__heading text-center">Don’t Miss Out on Your Territory</h2>
        <p class="form-section__sub text-center">Flying Biscuit Café territories are going fast. Secure your market today and join one of the South’s most beloved brunch brands.</p>
        <?php echo do_shortcode('[wpforms id="310"]'); ?>
      </div>

      <div class="form-section__right">
        <h3 class="form-section__proof-title">Why Franchisees Love Flying Biscuit</h3>
        <div class="form-section__proof-cards">
          <div class="form-section__card">
            <div class="form-section__value">$2M</div>
            <div class="form-section__label">Average Unit Volume (*2024 FDD)</div>
          </div>
          <div class="form-section__card">
            <div class="form-section__value">30+</div>
            <div class="form-section__label">Years of Proven Success</div>
          </div>
          <div class="form-section__card">
            <div class="form-section__value">4.7★</div>
            <div class="form-section__label">Guest Rating from 20,000+ Reviews</div>
          </div>
        </div>

        <!-- Short Video Clip -->
        <div class="form-section__video" id="proofVideo" data-video-id="pwApTviidHw">
          <div class="form-section__thumb">
            <img src="<?php echo get_theme_file_uri('/assets/img/thumbnails/andrew-scherzer-thumbnail.jpg'); ?>" alt="Meet Andrew Scherzer, Director of Franchise Development for Flying Biscuit Cafe">
            <div class="form-section__play">
              <div class="form-section__play-btn" aria-label="Play video">
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M8 5v14l11-7z"/></svg>
              </div>
            </div>
          </div>
        </div>
      </div>

      <p class="form-section__note">By submitting this form, you agree to receive updates and franchise materials from Flying Biscuit Café.</p>
    </div>
  </section>

<!-- FAQ Section -->
<section class="faq" aria-labelledby="faqTitle">
  <div class="faq__container">
    <h2 id="faqTitle" class="faq__heading">Franchise FAQ</h2>
    <p class="faq__sub">Answers to the most common questions we hear from prospective owners.</p>
    <div class="faq__list">

      <details class="faq__item" open>
        <summary class="faq__summary">How Much Does It Cost to Open a The Flying Biscuit Café Franchise? <svg class="faq__chev" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 10l5 5 5-5" fill="none" stroke="#6A2C91" stroke-width="2" stroke-linecap="round"/></svg></summary>
        <div class="faq__content">There are many factors that determine your initial investment—location, size, and proximity to affluent areas, to name a few. You can expect a range of <strong>$766,750 to $1,171,350</strong>. This includes the franchise fee, working capital, and what you’ll need to open your doors (see FDD for details).</div>
      </details>

      <details class="faq__item">
        <summary class="faq__summary">What Kind of Financial Performance Can I Expect? <svg class="faq__chev" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 10l5 5 5-5" fill="none" stroke="#6A2C91" stroke-width="2" stroke-linecap="round"/></svg></summary>
        <div class="faq__content">While specific earnings cannot be promised, we’re happy to discuss the financial information published in our FDD. Later in the process, we encourage you to speak with existing franchisees to complete due diligence.</div>
      </details>

      <details class="faq__item">
        <summary class="faq__summary">What Type of Training and Support Do You Provide? <svg class="faq__chev" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 10l5 5 5-5" fill="none" stroke="#6A2C91" stroke-width="2" stroke-linecap="round"/></svg></summary>
        <div class="faq__content">Comprehensive <strong>4‑week training</strong> is required for two members of your team (held in the Atlanta area). You’ll also receive ongoing training and support from our corporate team.</div>
      </details>

      <details class="faq__item">
        <summary class="faq__summary">What is the Ideal Location for a The Flying Biscuit Café? <svg class="faq__chev" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 10l5 5 5-5" fill="none" stroke="#6A2C91" stroke-width="2" stroke-linecap="round"/></svg></summary>
        <div class="faq__content">We collaborate on site selection, including demographic targets, site criteria, and market analysis. Expect hands‑on guidance with our Franchise Development Team.</div>
      </details>

      <details class="faq__item">
        <summary class="faq__summary">Are There Territories Available in My Area? <svg class="faq__chev" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 10l5 5 5-5" fill="none" stroke="#6A2C91" stroke-width="2" stroke-linecap="round"/></svg></summary>
        <div class="faq__content">We’re expanding across the Southeast: <strong>GA, FL, SC, NC, TX, LA, MS, AL, VA, KY, TN, WV, MD, and DE</strong>. Tell us your target city and we’ll confirm availability.</div>
      </details>

      <details class="faq__item">
        <summary class="faq__summary">How Long Does the Process Take from Application to Opening? <svg class="faq__chev" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 10l5 5 5-5" fill="none" stroke="#6A2C91" stroke-width="2" stroke-linecap="round"/></svg></summary>
        <div class="faq__content">From signing a franchise agreement, the process typically takes <strong>3–18 months</strong>, depending on site selection and buildout timelines.</div>
      </details>

      <details class="faq__item">
        <summary class="faq__summary">Do I Need Prior Experience in Foodservice or Franchising? <svg class="faq__chev" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 10l5 5 5-5" fill="none" stroke="#6A2C91" stroke-width="2" stroke-linecap="round"/></svg></summary>
        <div class="faq__content">Prior restaurant experience is not required, though it’s recommended. We provide training, playbooks, and vendor relationships to help you launch successfully.</div>
      </details>

      <details class="faq__item">
        <summary class="faq__summary">How Do I Get Started with the Franchise Process? <svg class="faq__chev" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 10l5 5 5-5" fill="none" stroke="#6A2C91" stroke-width="2" stroke-linecap="round"/></svg></summary>
        <div class="faq__content">Schedule a call or email us at <a href="mailto:franchise@flyingbiscuit.com">franchise@flyingbiscuit.com</a>. We’ll share the Franchise Kit and guide you through Discovery.</div>
      </details>

    </div>
  </div>
</section>

  <button id="stickyCta" class="sticky-cta">Talk To Us</button>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.2.0/glide.min.js" integrity="sha512-IkLiryZhI6G4pnA3bBZzYCT9Ewk87U4DGEOz+TnRD3MrKqaUitt+ssHgn2X/sxoM7FxCP/ROUp6wcxjH/GcI5Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

 <script>
    document.querySelectorAll('.stories__card').forEach(card => {
      const videoId = card.dataset.video;
      const thumb = card.querySelector('.stories__thumb');
      thumb.addEventListener('click', () => {
        const iframe = document.createElement('iframe');
        iframe.src = `https://www.youtube.com/embed/${videoId}?autoplay=1&rel=0&modestbranding=1`;
        iframe.allowFullscreen = true;
        iframe.style.position = 'absolute';
        iframe.style.top = '0';
        iframe.style.left = '0';
        iframe.style.width = '100%';
        iframe.style.height = '100%';
        thumb.innerHTML = '';
        thumb.appendChild(iframe);
      });
    });
  // Animated AUV bars
    (function(){
      const container = document.getElementById('auvBars');
      if(!container) return;
      const bars = Array.from(container.querySelectorAll('.auv-chart__bar'));
      const max = Math.max(...bars.map(b=>Number(b.dataset.value||0)));
      const maxHeight = 240; // px allocated for the tallest bar
      function fmt(n){return '$'+Number(n).toLocaleString();}
      const io = new IntersectionObserver((entries)=>{
        entries.forEach(e=>{
          if(e.isIntersecting){
            bars.forEach(b=>{
              const v = Number(b.dataset.value||0);
              const h = Math.round((v/max)*maxHeight);
              b.style.height = h + 'px';
              // count up
              const label = b.querySelector('.auv-chart__value');
              let cur = 0; const step = Math.max(10000, Math.round(v/120));
              const timer = setInterval(()=>{
                cur += step; if(cur>=v){cur=v; clearInterval(timer);} 
                label.textContent = fmt(cur);
              }, 16);
              requestAnimationFrame(()=>{ label.style.opacity = 1; });
            });
            io.disconnect();
          }
        });
      },{threshold:.35});
      io.observe(container);
    })();

    // Testimonial carousel logic
  (function(){
    const slides = document.getElementById('testimonialSlides');
    if(!slides) return;
    const dotsWrap = document.getElementById('testimonialDots');
    const total = slides.children.length;
    let idx = 0; let timer;
    function renderDots(){
      dotsWrap.innerHTML='';
      for(let i=0;i<total;i++){
        const b=document.createElement('button');
        b.className='form-section__dot'+(i===idx?' form-section__dot--active':'');
        b.setAttribute('aria-label','Go to testimonial '+(i+1));
        b.addEventListener('click',()=>{ idx=i; update(true); });
        dotsWrap.appendChild(b);
      }
    }
    function update(reset){
      slides.style.transform=`translateX(-${idx*100}%)`;
      Array.from(dotsWrap.children).forEach((d,i)=>{
        d.classList.toggle('form-section__dot--active', i===idx);
      });
      if(reset){ clearInterval(timer); timer=setInterval(next, 6000); }
    }
    function next(){ idx=(idx+1)%total; update(false); }
    renderDots(); update(false); timer=setInterval(next, 6000);
  })();

  // Proof video play overlay
  (function(){
    const box = document.getElementById('proofVideo');
    if(!box) return;
    const id = box.dataset.videoId;
    const thumb = box.querySelector('.form-section__thumb');
    thumb.addEventListener('click', ()=>{
      const iframe=document.createElement('iframe');
      iframe.src=`https://www.youtube.com/embed/${id}?autoplay=1&rel=0&modestbranding=1`;
      iframe.allowFullscreen=true;
      iframe.style.position='absolute';
      iframe.style.inset='0';
      iframe.style.width='100%';
      iframe.style.height='100%';
      thumb.innerHTML='';
      thumb.appendChild(iframe);
    });
  })();

  (function(){
    const cta = document.getElementById('stickyCta');
    const hero = document.querySelector('.hero');
    const form = document.querySelector('.form-section');
    if(!cta || !hero || !form) return;
    window.addEventListener('scroll',()=>{
      const heroBottom = hero.getBoundingClientRect().bottom;
      if(heroBottom < 0){
        cta.classList.add('visible');
      } else {
        cta.classList.remove('visible');
      }
    });
    cta.addEventListener('click',()=>{
      form.scrollIntoView({behavior:'smooth'});
    });
  })();

    // Dynamic smooth scroll for any anchor links with hash
  document.addEventListener('click', function(e) {
    const anchor = e.target.closest('a[href^="#"]');
    if (anchor && anchor.getAttribute('href').length > 1) {
      e.preventDefault();
      const id = anchor.getAttribute('href').substring(1);
      const section = document.getElementById(id);
      if (section) {
        section.scrollIntoView({ behavior: 'smooth' });
      }
    }
  });


// Marketing Support Video
(function(){
  const box = document.getElementById('supportVideo');
  if(!box) return;
  const id = box.dataset.videoId;
  const thumb = box.querySelector('.video__thumb');

  function load(){
    const iframe = document.createElement('iframe');
    iframe.src = `https://www.youtube.com/embed/${id}?autoplay=1&rel=0&modestbranding=1`;
    iframe.allow = 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share';
    iframe.allowFullscreen = true;
    iframe.style.position = 'absolute';
    iframe.style.inset = '0';
    iframe.style.width = '100%';
    iframe.style.height = '100%';

    // 🔑 Keep the .video__thumb (with padding-top) and just replace its contents
    thumb.innerHTML = '';
    thumb.appendChild(iframe);
  }

  thumb.addEventListener('click', load);
  thumb.addEventListener('keydown', (e)=>{
    if(e.key === 'Enter' || e.key === ' ') {
      e.preventDefault();
      load();
    }
  });
})();
  </script>

  <script>
// Interior Gallery Lightbox (accessible, keyboard-navigable, animated)
(function(){
  var lightbox = document.getElementById('interiorsLightbox');
  if (!lightbox) return;

  var backdrop = lightbox.querySelector('.lightbox__backdrop');
  var closeBtn = lightbox.querySelector('.lightbox__close');
  var prevBtn = lightbox.querySelector('.lightbox__nav--prev');
  var nextBtn = lightbox.querySelector('.lightbox__nav--next');
  var img = lightbox.querySelector('.lightbox__img');
  var caption = lightbox.querySelector('.lightbox__caption');
  var counter = lightbox.querySelector('.lightbox__counter');

  // Collect all gallery images (collage + rail)
  var tiles = Array.from(document.querySelectorAll('.interiors__tile, .interiors__thumb'));
  var currentIndex = 0;
  var previouslyFocused = null;
  var isAnimating = false;

  // Build image data array
  var images = tiles.map(function(tile, i) {
    var imgEl = tile.querySelector('img');
    var labelEl = tile.querySelector('.interiors__tile-label, .interiors__thumb-label');
    return {
      src: imgEl ? imgEl.src : '',
      alt: imgEl ? imgEl.alt : '',
      label: labelEl ? labelEl.textContent : 'Image ' + (i + 1)
    };
  });

  function open(index) {
    if (isAnimating) return;
    isAnimating = true;
    
    previouslyFocused = document.activeElement;
    currentIndex = index;
    
    // Set initial image
    var data = images[currentIndex];
    img.src = data.src;
    img.alt = data.alt;
    caption.textContent = data.label;
    counter.textContent = (currentIndex + 1) + ' of ' + images.length;
    
    // Remove hidden and trigger animation
    lightbox.hidden = false;
    document.body.style.overflow = 'hidden';
    
    // Force reflow before adding class
    lightbox.offsetHeight;
    
    lightbox.classList.add('is-active');
    lightbox.addEventListener('keydown', trapFocus);
    
    setTimeout(function() {
      closeBtn.focus();
      isAnimating = false;
    }, 400);
  }

  function close() {
    if (isAnimating) return;
    isAnimating = true;
    
    lightbox.classList.remove('is-active');
    lightbox.removeEventListener('keydown', trapFocus);
    
    setTimeout(function() {
      lightbox.hidden = true;
      document.body.style.overflow = '';
      if (previouslyFocused) previouslyFocused.focus();
      isAnimating = false;
    }, 350);
  }

  function update(direction) {
    if (isAnimating) return;
    isAnimating = true;
    
    // Animate out
    img.classList.add('is-changing');
    caption.classList.add('is-changing');
    
    setTimeout(function() {
      // Update content
      var data = images[currentIndex];
      img.src = data.src;
      img.alt = data.alt;
      caption.textContent = data.label;
      counter.textContent = (currentIndex + 1) + ' of ' + images.length;
      
      // Wait for image to load then animate in
      if (img.complete) {
        animateIn();
      } else {
        img.onload = animateIn;
      }
    }, 200);
    
    function animateIn() {
      img.classList.remove('is-changing');
      caption.classList.remove('is-changing');
      img.onload = null;
      
      setTimeout(function() {
        isAnimating = false;
      }, 250);
    }
  }

  function next() {
    currentIndex = (currentIndex + 1) % images.length;
    update('next');
  }

  function prev() {
    currentIndex = (currentIndex - 1 + images.length) % images.length;
    update('prev');
  }

  // Focus trap
  function trapFocus(e) {
    var focusable = lightbox.querySelectorAll('button:not([hidden])');
    var first = focusable[0];
    var last = focusable[focusable.length - 1];

    if (e.key === 'Tab') {
      if (e.shiftKey && document.activeElement === first) {
        e.preventDefault();
        last.focus();
      } else if (!e.shiftKey && document.activeElement === last) {
        e.preventDefault();
        first.focus();
      }
    }
  }

  // Event listeners for tiles
  tiles.forEach(function(tile, i) {
    tile.addEventListener('click', function() { open(i); });
    tile.addEventListener('keydown', function(e) {
      if (e.key === 'Enter' || e.key === ' ') {
        e.preventDefault();
        open(i);
      }
    });
  });

  closeBtn.addEventListener('click', close);
  backdrop.addEventListener('click', close);
  prevBtn.addEventListener('click', prev);
  nextBtn.addEventListener('click', next);

  // Keyboard navigation
  lightbox.addEventListener('keydown', function(e) {
    if (isAnimating) return;
    
    switch (e.key) {
      case 'Escape':
        close();
        break;
      case 'ArrowLeft':
        prev();
        break;
      case 'ArrowRight':
        next();
        break;
    }
  });

  // Swipe support for touch devices
  var touchStartX = 0;
  var touchStartY = 0;
  
  lightbox.addEventListener('touchstart', function(e) {
    touchStartX = e.changedTouches[0].screenX;
    touchStartY = e.changedTouches[0].screenY;
  }, { passive: true });

  lightbox.addEventListener('touchend', function(e) {
    if (isAnimating) return;
    
    var diffX = e.changedTouches[0].screenX - touchStartX;
    var diffY = e.changedTouches[0].screenY - touchStartY;
    
    // Only trigger if horizontal swipe is greater than vertical
    if (Math.abs(diffX) > Math.abs(diffY) && Math.abs(diffX) > 50) {
      diffX > 0 ? prev() : next();
    }
  }, { passive: true });
})();
</script>

<script>
  // Vertical reel click-to-play (swap poster for YouTube iframe)
  (function(){
    const reel = document.getElementById('menuReel');
    if(!reel) return;
    const id = reel.dataset.videoId;
    const frame = reel.querySelector('.reel__frame');
    const hit = reel.querySelector('.reel__hit');
    if(!id || !frame || !hit) return;

    function play(){
      const iframe = document.createElement('iframe');
      iframe.src = `https://www.youtube.com/embed/${id}?autoplay=1&rel=0&modestbranding=1`;
      iframe.allow = 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share';
      iframe.allowFullscreen = true;
      iframe.style.position = 'absolute';
      iframe.style.inset = '0';
      iframe.style.width = '100%';
      iframe.style.height = '100%';
      frame.innerHTML = '';
      frame.appendChild(iframe);
    }

    hit.addEventListener('click', play);
  })();
</script>

  <script>
    // Hero Reel click-to-play
(function(){
  const reel = document.getElementById('heroReel');
  if(!reel) return;
  const id = reel.dataset.videoId;
  const frame = reel.querySelector('.hero__reel-frame');
  const hit = reel.querySelector('.hero__reel-hit');
  if(!id || !frame || !hit) return;

  function play(){
    const iframe = document.createElement('iframe');
    iframe.src = `https://www.youtube.com/embed/${id}?autoplay=1&rel=0&modestbranding=1`;
    iframe.allow = 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share';
    iframe.allowFullscreen = true;
    iframe.style.position = 'absolute';
    iframe.style.inset = '0';
    iframe.style.width = '100%';
    iframe.style.height = '100%';
    frame.innerHTML = '';
    frame.appendChild(iframe);
  }

  hit.addEventListener('click', play);
})();
  </script>

<?php
get_template_part('templates/exit-intent-modal');
get_footer();
?>