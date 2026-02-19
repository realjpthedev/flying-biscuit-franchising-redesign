<?php

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
  .hero{background:linear-gradient(180deg, rgba(106,44,145,.08), rgba(106,44,145,0) 60%), radial-gradient(1200px 600px at 85% -20%, rgba(244,123,32,.08), transparent 60%); min-height: 50vh; padding-top: 2rem; padding-bottom: 2rem;}
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


    /* Card row */
    .proof-cards{display:grid;grid-template-columns:repeat(2,1fr);gap:16px;margin-top:22px}
    @media (max-width:900px){.proof-cards{grid-template-columns:1fr;}}
    .card{background:var(--card);border-radius:var(--radius);box-shadow:var(--shadow);padding:16px}
    .kpi{font-size:28px;font-weight:800;color:var(--brand-primary); text-align: center;}
    .kpi small{font-size:12px;font-weight:700;color:var(--muted); text-align: center;}
    .quote{font-style:italic;color:#4a3f61; text-align: center;}

    /* Florida Map */
    .map-wrap{background:#fff;border-radius:var(--radius);box-shadow:var(--shadow);padding:18px}
    .map-header{display:flex;justify-content:space-between;align-items:center;margin-bottom:10px}
    .legend{display:flex;gap:12px;align-items:center}
    .key{display:flex;gap:8px;align-items:center;font-size:14px}
    .dot{width:12px;height:12px;border-radius:50%}
    .dot-open{background:var(--success)}
    .dot-taken{background:var(--brand-secondary)}

    svg#florida{width:100%;height:auto}

    .marker{transform-box:fill-box;transform-origin:center;}
    .marker.open{fill:var(--success)}
    .marker.taken{fill:var(--brand-secondary)}

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
    .auv-chart__label { position:absolute; bottom:-24px; left:50%; transform:translateX(-50%); color:#6b6282; font-size:.9rem; text-align:center; width:120px; }
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
  .team__eyebrow{display:inline-flex;gap:8px;align-items:center;background:#fff;border:1.5px solid #efe7f6;padding:6px 12px;border-radius:999px;color:var(--brand-primary);font-weight:800}
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


  <div class="hero">
    <div class="container hero-inner">
      <div>
        <span class="badge" aria-label="Franchise opportunity badge"><span class="dot" aria-hidden="true"></span> Now Awarding Territories in Florida</span>
        <h1>Bring <span style="color:var(--brand-secondary)">Flying Biscuit Café</span> to Your Florida Market</h1>
        <h2 style="font-size: 1.25rem">From the Founders of Moe's Southwest Grill</h2>
        <p class="sub">Breakfast every day + neighborhood vibes. Proven unit economics, craveable unique menu, and a raving fan base built over 30 years.</p>

        <div class="cta-row" role="group" aria-label="Primary Calls to Action">
          <a class="btn btn-primary" href="#lead-form">Claim My Territory</a>
          <!-- <a class="btn btn-secondary" href="#map">See Available Territories</a> -->
        </div>

        <div class="trustbar" aria-label="Social Proof">
          <div class="stars" aria-label="Rated 4.7 out of 5">
            <span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span><span class="star" style="opacity:.6"></span>
          </div>
          <div style="font-weight:700;color:#463466">4.7/5 from 10,000+ Guest Reviews</div>
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

      <div class="map-wrap" id="map" aria-labelledby="map-title">
        <div class="map-header">
          <h3 id="map-title" style="margin:0;color:var(--brand-primary)">Florida Territories</h3>
          <div class="legend">
            <div class="key"><span class="dot dot-open"></span> In Development</div>
            <div class="key"><span class="dot dot-taken"></span> Taken</div>
          </div>
        </div>

        <!-- Simplified, stylized SVG silhouette of Florida (not to scale) -->
        <svg id="Layer_2" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 6939.93 6920.11">
          <defs>
            <style>
              .cls-1 {
                stroke: #000;
                stroke-miterlimit: 10;
                stroke-width: 4.72px;
              }

              .cls-1, .cls-2 {
                fill: #210f2d;
              }

              .cls-3 {
                fill: #f4e7f5;
                font-family: Poppins-Regular, Poppins;
                font-size: 120.06px;
              }

              /* Beacon styles */
              .beacon { 
                fill: currentColor;
                opacity: 0.9;
                pointer-events: none; /* don't block clicks */
              }

              .beacon-ring {
                fill: none;
                stroke: currentColor;
                stroke-width: 12px;
                opacity: 0.7;
                transform-box: fill-box;   /* ensure origin works in SVG */
                transform-origin: center;
                animation: pulse 2.5s infinite;
                pointer-events: none;
              }

              .beacon-ring.delay {
                animation-delay: 1.2s;
                opacity: 0.4;
              }

              .orange { color: #FF7A00; }
              .green  { color: #16A34A; }

              @keyframes pulse {
                0%   { r: 0;   opacity: 0.9; }
                60%  { r: 200; opacity: 0.2; }
                100% { r: 260; opacity: 0;   }
              }
            </style>

          </defs>
          <g id="svg2">
            <path id="rect9518" class="cls-1" d="M42.26,2.58l1.42,3.31,1.51,3.48.94,5.79,1.8,10.57,1.8,7.73.35,6.26-.56,5.19-1.51,6.7-2.92,5.28-3.69,5.58-5.2,7.64-4.9,8.59-2.48,4.81-1.98,5.2-1.12,5.2-1.15,2.83-1.51,3.31-1.59,2.36-2.92,2.27-1.54,1.89-.56,2.66v3.31l.38,3.39-.94,2.83-2.45,2.36-2.45,1.42-1.89,2.36-.59,2.92-1.03,3.78-1.42,2.57-.94,1.59-1.51,2.54-.94,2.27,1.33,1.89,3.31,2.18,1.89,1.89,1.68,3.39.38,3.39.38,4.34.3,3.69,1.42,2.1,1.42,1.03,2.24,1.51,1.54,2.75.65.74,1.51,2.01.94.94,2.83,1.59,2.36,1.03,2.36,1.51,1.51,4.93.21.74.86,2.57,1.68,4.43,3.78,3.04,3.78,2.45,5.19,2.15,3.31,2.57,1.8,3.39,2.54,3.13,3.42,3.78,5.46,6.41,2.27,3.13,1.98,2.63,1.8,1.24,1.33.77.56.27,1.24,2.1,1.77,2.92.59,1.8,1.89,1.51,1.89,1.03,1.3,2.45.12,2.36.18,2.83v1.03l.3.86,1.21,3.51,1.51,2.54,3.69,4.43,1.51,3.78-.09.77.3,2.66-.09.74-.29,4.07.77,3.78.27.65,1.8,3.31.47.56,3.22,3.42.56.47,5.02,3.96.65.47,3.96,2.27,2.27,1.03,2.83,2.27,1.51,3.1.38.59,1.51,2.36.38.47,2.27,2.45.56.47,1.33,1.03.65.18,4.37,1.53.83.18,3.04.86,4.63,1.33,1.59.47,2.36,1.51,1.8,3.48v1.42l-.56,1.42-.12,1.42,1.89,1.03.47,1.42.38,1.24.77.94,2.27,1.03,1.51-.56,1.12,1.03.94,1.89.94,1.51,2.36.59h1.89l1.89,1.03,1.98.09,2.36,1.03,2.83-.38,2.01.59,2.15,1.68,2.36,2.45,1.89,1.89,2.45,2.36.59.38,4.04,2.75,2.83.18,2.36,1.53,2.83,1.98,2.27,2.54,1.42.47,1.89,2.45,2.74,2.1,2.45.56,3.78,2.07,1.8,2.01.94,1.89.74,2.92,1.33,3.87.86,2.92.94,1.98.3,2.74,1.12,1.33,3.22,3.6.47,2.45-.09,3.31-.47,2.45.94,2.83-.12,1.89-.94,1.98v3.04l-.09,2.63.47,4.34.86,2.95-.47,2.83-1.51,2.83-.94,3.87-.56,3.31v3.87l-.59,1.89-2.45,3.31-1.42,1.42-1.98.47-1.98,1.51-1.89,1.33-.21.86.47,1.42.86,1.98-.56,2.83-1.03,1.89-1.15,4.25-.18,3.39-.56,2.83-.56,1.89-2.01,2.83-1.21,2.66-.47,2.36-.94,1.89-2.45,1.42-1.53,1.89-.94.94.94,2.45.47,1.89-1.51,2.36-1.42.94-2.27-.09-2.92.38-1.51,1.89-.09,1.89-.56,2.36-.47,2.15-1.06.68-1.98,1.42-2.36,1.68-1.42,2.36-1.12,2.83-.86,2.36-1.51,1.89-2.45,2.92-.59,1.8v1.89l.12,1.51-2.66.38.47,1.42,1.8,1.51-.94.94-1.98.86-2.01.47v1.42l.86,1.98-.56,1.8-.94,3.13.3,2.15.83,2.01,1.42,1.51.38,1.89-1.03,2.36.38,1.98,1.42,1.42,2.36,1.03,1.89,2.1-.47,2.36.94,1.42,1.33.83,1.98,1.15.47,2.36-.09,1.89.47,2.45,1.42,1.42,1.42,1.51-1.89.94-1.89-.56-1.54.47-.47,1.89,3.78,1.98,4.25,11.16,7.08,9.15,6.26,1.98,2.83,2.48,6.23,2.45,4.25,1.51,2.92,1.89,4.25,2.92,4.81.09,2.45-1.89,3.42-.94,3.31-.94,4.34,1.06,4.81,1.98,4.25,4.34,4.25,8.21,2.74,5.31,2.83,4.34.94,4.81-1.03,5.28-13.52,6.52-4.9,1.89-5.79,1.42-6.23,2.27h-3.87l-3.39-.09-3.78.47-2.92,1.89-2.01,3.78-1.03,2.83-2.83,1.42-3.39.94h-1.98l-3.78-.59-4.34-.94-6.73-2.54-1.89.94-1.12,7.65-1.98,4.34-1.42,2.36,1.89,4.84.86,4.81-1.06,3.31-.47,1.42-2.92,3.87-4.34,2.36-7.17.86-.09,1.42,3.31,6.23,2.36,3.39,3.31,2.45h2.92l1.98-2.83,1.51-5.76,3.39-6.61,6.35-2.36,1.89,1.51,1.42,3.31-1.03,2.01-2.83.35-2.48,1.42-2.45,2.83.94,3.42-.09,3.87,1.89,4.34.94,3.31-1.98,2.83-13.05,6.61-8.29,9.45-.47,3.39,10.57.09,2.83.12.94,1.89-1.51,2.36-3.31.47-5.28-.59-3.9-.94-4.34-.56-4.34,3.31-7.17,1.8-5.28-.47-7.76-1.59-7.17-2.01-6.7-1.98-6.23-1.03-4.37,2.36-2.45,3.31,1.42,2.45,6.7,1.03,12.1.59,4.72,1.51,7.73.56,4.84.09,2.36.94,2.36.56,1.42.94,1.42,1.42.94,1.53.94,1.89v2.92l-1.06,3.31-1.89,2.83-3.39.47-2.92.94-5.76,1.8-5.76.47-7.29,1.77-9.15,1.8-13.05,3.22-7.17,1.42-10.57,2.27-5.4,1.33h-4.81l.47,3.78,31.35-6.35,15.88-3.1,7.73-1.89,9.18-1.33,7.65.09,12.1-.86,9.53-1.33,7.26-1.3,5.28-1.42,10.12-1.33,17.86-3.13,10.57-2.27,7.73-2.24,6.26-1.89,5.37-1.89,6.23-1.33,5.87-2.36,11.98.65,4.81-1.42,4.81-2.27,2.01-2.45,1.89-2.36-.38-3.78-4.81-.09-5.4,3.31-10.09,1.8-8.24,2.75-7.17-1.53-4.81.94-8.21,3.22-8.24,3.31-12.46,3.22-12.1,2.27-8.21,1.33-6.7-3.98,4.43-2.83,9.06.68,5.87-6.73,4.9-4.25,7.17-2.24,10.69-.86,10.09-1.8,5.76-1.89,3.78,1.98,10.21-5.67,1.42.56,3.87.47,1.42.59,6.7,2.45,5.31-.94,3.01-6.61,4.9-6.23,3.78-1.42,7.76,1.12,7.64.56,6.23-1.42,5.28.56,5.31,1.06,4.81,1.03,1.89-.94.56-2.92-1.42-3.31.09-2.95,1.98-5.2.12-6.79-1.89-3.31-2.95-1.03-3.39.94-3.78-.56-2.92-.47-2.36.94-1.98-.12-2.83-1.89-2.36-.56-2.92,1.89-2.95.94-1.42-.94.59-3.39-3.42-1.89-5.76,2.27-6.23.38-6.32,3.31-.47-2.36,5.37-4.25,7.26-3.78,6.26-2.83,3.39.09,3.87,1.51,4.25,1.42,4.34,2.45,2.83-.38-.86-5.28.94-3.87,2.48,1.03,1.3,5.76,1.89,2.83,2.95,1.53,2.36-1.42-.38-3.9,3.87-3.78,3.39-1.42,9.74-8.03,5.76-4.25,5.37-1.77,3.9-1.42,2.83-2.36,2.92-3.78,3.48-2.83,4.25,1.03,2.36,8.12,2.36-3.31h2.45l2.83,2.45,1.54-1.42.47-4.81,5.37-5.2,7.73-3.22,1.06-4.81.56-6.7,1.51-4.81.94-2.83-1.33-3.9.56-6.23-3.87-3.87-5.67-3.39-2.83-7.76,2.45.12,4.25,3.87,7.67,5.84,3.31,3.39.35,5.31,2.36,5.28-3.96,6.61-1.03,4.81.47,4.34,4.34.94,5.28-1.8,4.46-8.12,1.03-4.25,1.03-7.73,2.54-9.06,3.9-4.72,4.43-8.15,1.03-8.59.21-8.59,4.9-7.65,4.34-2.83-.47-2.36-4.72-2.92-.94-7.2-.86-5.28-.35-5.28.47-4.34-1.42-1.42-2.36-3.39-1.8-5.31-2.36-5.76-3.31-6.32-4.25-5.28-5.76-2.95-.38-2.45-2.45-1.42-2.83-1.98,4.34-.94,4.81,1.03.47-2.36-1.89-3.39-3.78-6.23,1.12-6.7-1.42-2.01-.94-1.89.47-4.81,3.42-.38,3.39-2.83-.94-1.98-2.36-1.98-.94-1.42-.94-1.89,3.87.47,3.31,2.45,2.45,1.51,2.83.94,2.83-.35,4.34,1.42,4.37.56,4.25,1.98,2.83,4.34,1.89,5.28,3.31,4.37,1.89,2.45-1.54,5.67-1.03,4.34h3.87l4.84,1.98,3.78,1.98,1.51-1.42,1.98-4.25-.47-2.92,1.98-3.31,3.31.47.47,1.98.94,2.83.94,3.9-.56,3.39-.56,2.83-2.36,1.89-1.98,4.25-3.42-1.42-4.25-1.03-1.12,6.7.94,5.76,9.06,3.01,4.81,2.48,3.78.94,2.95,1.98,1.89.47,1.42-.94,1.51-1.42,1.89-1.42,1.98.09.47.94-.09,3.31-.94,2.36.86,3.87,2.36,4.81.94,3.9h1.42l-.47,2.92-3.42,2.27-1.03,4.34-1.03,7.17.38,5.28.94,3.39,1.8,4.37v4.72l-.59,5.76-1.59,7.65-.47,3.39,1.42,4.25-.09,4.34,1.42,3.42,2.36,1.42,4.34,1.03h2.36l1.42-.94.09-1.89,2.92-2.36,1.89-.47,3.9.09,3.31.47,3.39.09,1.98-2.83-2.36-2.45,1.03-4.81,1.98-5.67,1.42-2.45-.47-1.42,2.48-3.78,1.51-1.89,1.98-3.9,1.51-5.2,3.51-6.7,1.42-3.31,3.96-5.67.56-3.87-.94-2.45v-1.89l-.47-2.36v-1.98l3.04-3.78.94-.94.94-.47,1.03-1.89.47-2.36.94-1.89,1.98-3.9.56-2.36v-4.34l-.38-1.89-.47-.94-.47-2.45,3.9-2.27,2.45-2.45.94.09,1.98-.94,3.78-.94,7.73-1.33,1.06-1.42.47-5.28,1.51-1.42,1.89-1.42.56-1.89v-2.92l.56-1.89,2.36-1.89,2.45-1.89,1.06-2.36-.47-2.36-2.36-2.92-2.95-.56h-1.89l-1.42-2.48.12-3.78v-.94l-1.42-1.03-1.89-3.78-1.89-1.03-1.54-1.42-1.3-2.45-1.54-1.42-1.89-1.51-.47-1.89.59-2.36,2.36-.47.56-3.42,1.03-2.83-1.98-1.42-1.42-1.03-.47-1.89,6.7,2.45,2.92,1.06,1.89,1.42,1.42,2.45-.56,3.31,1.42,2.45,1.42,3.31,1.42,1.98,1.89,2.92,2.83,5.79,3.31,3.39.94-1.42,1.98-2.83,7.17,4.34,2.36,3.87.94,1.98-.09,2.36-1.42,1.89v.94l-.56.94-1.42,1.89-1.98,2.48-1.51,2.83-2.83.94-1.54,3.78,1.42,1.89,4.37,1.98-4.84.47-1.98-.09-1.98,3.39-.94,2.83-.56,1.42.94,1.51.94.94,3.39,1.51,6.23-.47-1.51,3.39-3.87,1.33-4.25-.94-2.45-1.51-.47,2.36.94,2.92,2.36,3.87,3.31,2.95.47,3.78-1.54,2.92-3.39-.56-5.76-2.01-2.83-2.45h-2.36l-1.03,3.78-.47,1.98,1.42,2.36,1.89,2.48.38,3.31-2.48,2.36-3.39,2.83-3.87.94-1.89,1.89v.94l1.42,1.51,2.36,2.36,4.72,2.92,4.34,2.92,5.67,3.98,4.81,3.39,5.67,3.87,6.73,3.48,10.01,7.29,2.83,2.45,3.87,2.45,1.89,1.42,5.2,3.04,3.87,2.45,4.72,1.89,4.81,1.03,4.37,1.03,5.28,1.03,3.78,3.42,2.83,2.45,1.89,3.31,2.36,2.45,1.89,3.39,3.31,1.03,5.76,1.06,4.34.47,3.87.56,4.25,1.98,4.84.47,4.81.09,1.89,4.34-2.92,1.42-3.42-.09-4.25.47-3.39-1.03-2.83-.94-2.92-1.03-1.42-.47h-2.36l-2.45.86-3.39.47-2.83-.47-2.95-.59-2.83-2.45-1.89-2.83-2.83-2.45-2.36-3.39-2.83-3.39-4.34-1.53-1.89-.94-1.89,1.42-1.51,2.36,1.42,2.48-.47,1.42-5.76-1.06-1.51.47-5.87,5.2-10.66,7.47-10.21,9.53-9.74,8.03-13.49,6.05-6.35,2.75-7.26,2.36-6.7,2.75-9.18,2.27-8.68.35-7.73.38-9.09-1.51-13.02-1.12-10.95-1.62-4.93,2.36-7.17,2.36-11.63,3.22-9.15,4.16-4.81,1.42-4.46,1.8-3.31,2.36-2.45,2.83-1.51,3.87-1.98,4.25-2.92.94-3.9.94-4.25-.09h-3.87l-5.76-.59-5.28-2.45-2.83-3.39-1.89-2.45-2.36-.47-1.51.47-.47,1.42.47.94.94,1.98,1.42,1.89-.12,3.39-1.89.86-1.89-1.42h-2.92l-2.83-2.45-1.98,1.42-1.42,1.89-2.45,2.36-2.92,1.42-3.31-.09-2.48-.47-2.36,1.42.47,1.42,11.45,8.29,4.6,8.24,2.95,1.51,2.92-4.81,4.81-1.89,6.23-1.33,4.81,1.03,5.87-2.83,7.26-3.22,9.65-2.83,4.34-1.33,3.39-.94,7.17-1.77,3.39-2.83,2.95.94,3.31-.38,6.32-2.83,10.1-.86,3.42-.94,2.83-.86,2.92-.47,3.39-.47,4.34-2.83,4.34.09,6.26.59,2.92-1.42,6.7-.38,4.81-.94,3.87-.86,3.42-.94,4.72.09,2.92-.47,3.87.56,20.22-2.63,11.04.56,7.76-2.27,5.76-.38,3.87-.94,2.83-.94,3.39.59,3.87-.47,8.71-2.75,7.64-.38,6.79-.86h5.31l6.23,1.03,6.23.59,6.23-1.8,7.29-.86,4.34-.47,3.78.56,3.87,1.51,3.87-.47,5.28-.35,5.79-.47,4.81.09,4.81.56,3.87-.47,3.31-.38,3.87-1.42,2.95-.94,2.83-.38,2.92-.47,6.7,2.95,2.36-1.42,2.92-1.89,3.39-.86,3.42-.94,3.39-.47,2.83.56h2.92l4.25,1.51,3.87.56,2.92-.47,3.31.59,3.42,1.42,1.89.09,1.98-2.36,3.31-1.42,2.92-.94,3.39-.47,4.34.56,3.78,1.03,5.79,1.98,4.34,2.01h3.78l2.45-.38,4.81-.94,5.28-.86,6.26-.94,4.81-1.33h2.45l3.31,1.03h2.92l2.83,1.06h1.98l2.83.56,2.95-.47,1.42.47,5.28.56,3.87-.47,3.31.56,2.45-.47,2.83-.38,2.92.47h2.83l2.01.12,4.81-.47,2.83.09,4.34,1.03,11.04,1.98,5.31,1.03,11.42,2.1,12.07,1.12,12.96,2.1,8.59-.86,7.26-3.22,2.48-2.83-.86-5.28-.38-5.76-1.89-3.9-1.42-.47-2.45.94-2.45.86-3.31,1.42-3.9-.56-4.34-1.89-2.83-1.51-3.78-1.03-3.87-1.06-3.39-.94-1.89-1.03-1.42-.47-3.31-.94-.94-1.51,1.42-1.42,1.98-1.89,2.36-.47,2.45.56,1.89,1.89,2.36,1.98,1.42-.47-.38-2.36.94-2.45,1.89.56,1.42,1.42.94,1.53,1.42,1.42,2.95.56,1.42,1.42,1.89,3.87,3.39-2.36,4.9-7.65,1.98-3.78v-2.83l-1.89-2.92-2.83-2.01-3.31-.94-2.92-1.03,1.51-1.42,2.83-.94,2.01-3.31-.47-1.42-2.83-3.39-1.89-2.92,1.51-.94,3.31,1.98h2.92l.47-2.36v-.94l1.03-3.31.94-.94.56-2.45-.47-2.83v-1.51l.59-1.89-.94-1.89,1.89-2.36,1.89,3.39,1.42,1.42,1.98.94-.56,5.28-2.57,6.23-.47.94-2.45,4.72-2.45,5.76,1.42,1.42,1.89-2.36,1.51-1.42h2.36l.47,2.01,1.42,1.89,3.87-.38,3.39-.47-2.92,3.31-2.92,2.83-1.59,8.12.83,4.81,3.9.56,5.76,1.06,7.64,2.92,6.7,1.59,2.92-3.39,3.04-6.61.94-3.31,1.98-1.98,1.51-1.89,1.42-1.42,4.93-4.25,3.87-1.8,4.81-1.89,6.23.56,10.12,1.62,9.62-2.75,7.73-4.25,7.76-4.63,3.48-4.34,2.45-3.31.47-4.25-.83-2.45-2.95-1.53-.83-2.36v-2.36l.47-1.03.56-2.36-.94-2.36-1.42-2.45-1.89-1.89-.47-2.92,1.03-1.89,2.45-2.83-1.98-1.51-1.89-1.89-.47-1.06-1.42-1.42.56-1.89-.94-.94-.94-1.98-.47-1.42-1.89-1.98v-3.31l1.98-.47,3.31.56,1.42,1.42,2.48,1.51,1.89,1.89,1.42,2.48,1.89,2.83.83,4.81-.56,4.34,1.42,4.34.86,5.28,1.89,3.9,2.92-2.83h1.89l.94,3.87.94,3.78,4.25.09,3.87-2.83,3.04-3.78.09-6.7.94-1.42-1.42-.56-.47-.94-.47-1.42.56-4.37,1.51-2.83,2.36-1.42,2.01.59,1.89,1.89,1.89,1.03.94-.47,2.36.47,3.39.09,2.45.47,3.78-.38,4.81-.47,4.34,1.03h2.36l2.01,1.06-3.04,6.61-7.17.83-7.17-2.92-8.24-.09-1.98,4.72-1.03,5.28,2.74,9.65,5.58,10.57,5.19,11.16,6.61,7.73,1.89,4.34,5.28-2.83,2.92-2.83,1.98-3.31,3.78.56v4.25l4.72,2.48,3.87.56h2.48l7.73-4.63,5.76-4.25,6.35-1.33,10.57-.86,8.21-.83,8.24-2.27.47-.47,10.66-8.5,5.31-.38h.94l6.79.56,7.08,3.98,6.7,1.98,9.27-4.16,10.09-3.69,5.87-.94,2.36-.86,8.21-.83,8.68-4.72,4.93-4.72,4.9-5.2,3.31,4.34-6.88,8.59.83,5.28,8.15,6.82,16.8-2.18,9.83-11.33,4.43-5.2,1.53-7.17,1.98-.94,2.36,2.92,1.33,6.7.35,4.81-6.32,5.2-3.87,2.83,1.33,8.62,7.91,13.96,6.26,5.4,8.12-.86,7.73-.38,5.28.56,2.01-4.72,1.03-3.87,1.42-2.83,3.87-1.89,4.43-1.33,4.37-2.83,2.92-5.19,2.54-6.23,3.87-2.83.38,4.34-.65,12.96-6.82,5.2-8.68,3.66-2.54,4.72,4.81.59,7.73-1.8,1.89,3.39-4.43,4.72-6.23-.56-6.26-1.98-3.87,3.31.38,5.67,1.33,11.51,5.67,3.01,8.21,1.53,4.81-.38,9.56,1.12,2.36,2.83-5.31,1.89.94,2.83-3.39.47-2.92.94.47,1.89,2.36,1.51,3.87.47,3.31,2.01-.47,1.89,4.25,4.9.38,6.7,6.23,1.98-1.03,2.83-1.89.94-1.98.47-3.87,1.89,1.42.94,6.23.59.47,1.42,4.72,3.96-5.76,2.75-1.53,4.81-1.03,2.36-1.42.94-2.92.94-2.83-1.03-7.73-1.03-11.07-.21-14.82-4.04-7.08-4.93,1.51-8.12-5.76-1.98-3.39,5.2-12.96-4.93-10.01-5.46-5.67-6.23-5.67-7.29-6.14-7.26-1.42-2.92-3.31-1.06-2.92-.47-2.83-.56-2.36-1.42-1.89-2.92-3.39-2.45-2.36-1.51-2.36.94-2.01.94-.94,1.89-2.45-.47-2.36-.59-2.45.47-1.89,1.89-1.51,2.36-1.03,2.36-1.89,2.95-.12,2.36,1.89,2.45-1.98,4.25,2.36,1.51,2.45-1.42,2.01-2.83,5.76,3.39,4.25.56,4.81,2.48,4.25,1.98,3.39,1.98,2.36,1.89-.09,2.45-4.34,1.8-5.28,2.36-4.84,1.33-5.76-1.98-3.31-4.37-2.36-1.03-3.87-.47-7.64-.09-6.23-2.54-6.35,1.42-1.98,4.25-1.89.47-.94-4.37-.38-2.36-2.92-.56-1.42-1.42-1.89-.56-1.42-.47-.94-2.45-.47-3.31.56-2.36-.47-3.39-.38-2.95-1.42-2.36-1.42-3.39-2.36-2.92-2.36-2.36-2.36-.56-3.87,2.36-4.99,10.95-2.1,6.7-.56,5.67-.94,4.34-.09,2.36-.47,2.48-2.1,7.08-6.23,1.89-20.69-2.75-17.65-5.02-15.29-7.82-2.36-1.06-7.2-2.45-8.68-.65-11.51-1.15-4.72-2.92-1.89-3.39-1.42-1.42-2.95,1.89-1.42.94-3.39.38-.56,2.92-.94,2.36-1.51.94-2.83-2.45-1.42-3.39-5.19-1.53-7.17-2.45-7.67-6.32-3.78-2.45-3.87-.59-2.36.47-.09,6.73-1.03,1.89-3.31-4.37-4.81-.56-10.21,5.67-8.21,8.03.83,4.81,4.25,6.26.86,7.26,9.65-.38,10.1.09,6.7,2.57,12.01-.38.94.09,16.8,1.15,18.24,2.63,25.98,3.22,7.65,1.12,45.99,8.32,29.28,7.56,34.48,10.57,35.33,13.43,47.91,17,37.19,15.38,29.67,11.45,47.32,19.92,26.74,12.37,19.54,8.88.47.47,22.96,11.42,23.79,12.28,36.28,21.16,14.64,11.72,7.64,3.48,19.57,12.28,34.65,25.98,20.87,15.11,16.26,12.28,11.33,10.69,9.45,12.63,13.22,12.19,8.21-3.69,2.45-2.36-.47-2.45-8.03-5.84-17.09-16.53-14.26-11.25-3.22-5.37,4.34-.86,13.34,8.29,6.14,4.93,3.78,3.39,4.34,1.03,3.31.56,4.34,2.01,1.33,8.59,4.72,4.9,5.28-3.31,3.39-3.31,2.57-3.78-3.78-6.79-4.25-3.87-1.42-4.84-1.42-1.98-3.78-.94-4.84-.56-7.17-.56-2.36-3.39-5.28,1.77-1.42-5.76-.86-4.34.56-3.78v-4.81l.59-2.92.09-3.31,5.37-7.08,1.51-5.31.12-7.17,1.98-5.28-.86-2.36-4.81-1.98-5.76.38-3.31-4.84-3.78-2.92-5.79-1.03,1.06-5.76,9.15-3.69,2.45-2.36-.86-3.39-8.12-4.93-8.12-1.12-5.28-1.03-4.25-3.39-14.38-4.07-6.32,2.83-3.01,6.61-9.74,6.61.47,4.81.86,5.28-12.01.3-9.06-3.48-5.67-8.71-1.59-22.58,2.63-11.04,5.31-4.63-.86-4.34-9.83-17.47-8.97-12.1.09-5.28,1.89-.38,6.23,4.84,4.72,6.79,3.69,7.73,3.31,2.95,7.17,4.43,10.12.09,2.83-.86,6.23,2.48,2.92-1.89,2.92-4.72,2.57-4.72,5.67,1.98,3.31,4.81,1.42,1.42,15.38,2.66,8.24-6.05,3.96-6.7-.38-6.73-1.42-3.39,1.06-4.72,3.96-8.12,3.31,5.84-.47,2.36.38,2.36-.47,2.48,1.42,1.42,1.8,3.87-.59,6.23-.56,4.81,5.28,4.34,2.66,11.07,6.79-.86,3.42-1.42,2.36,2.45,4.25,1.03.47,1.89-8.24,1.33-.47,3.39,1.8,4.84-.56,6.23,4.81,1.98,4.34-.47,1.89-.38.47,1.42-1.12,7.65-.56,8.15,1.77,9.15,5.79.09,3.87-2.36.56-3.31,3.78-.94,1.03-3.31,1.03-3.87,1.53-3.31,1.98-2.83,1.03-4.81-2.83-4.34,1.42-1.89,5.76,2.45,9.18-1.71,4.34-3.31,2.83,4.34,3.01-7.64,2.45.09,2.36,2.36,6.73,1.62,2.45-5.28,3.87-.86,4.9-6.7,1.89.56,4.46-5.2,1.42-1.42,2.36,4.34-.47,2.36-4.93,4.72-3.39,3.31-2.54,4.25,2.83,4.34,8.68.21,6.82-3.78,3.48-6.14,1.42-2.83,1.98-2.83,2.83.94v3.39l1.89,2.36,4.81-2.75,1.42,2.36-3.39,4.34,7.17-.86,5.87-4.25,4.04-12.93,1.15-9.53,1.03-8.12-.38-5.31-1.42-2.92.56-1.89.47-1.89,4.37-2.83,1.51-.94,2.92-4.72.56-3.31-4.16-8.68-2.36-7.29-4.25-5.28.12-.94,3.31.47,3.78,2.92,2.83,6.82,3.78,2.92,1.3,5.28,1.42,1.89,2.01.09,4.34-2.36,2.92-4.25,2.07-5.76,4.84-4.25,1.98-5.2,1.12-7.17.94-1.89,1.98-1.89,2.36,3.87-1.12,8.59-3.48,8.62-1.06,6.7,1.33,2.83,4.81,1.51,7.2.65,4.81,2.48,4.72,3.87,7.17,2.54,2.36,1.42,1.42,2.45-3.87,1.89-8.12-1.59-7.67-3.01-8.12-4.46-6.7-1.98-4.34.38-6.82,4.72-4.34,4.72-4.43,3.78-3.39,5.2.47.94.35,1.51,5.79,2.45,4.25,2.45,4.25,5.87,2.83,3.39,3.78,5.76,3.31,3.39-3.42,1.42-4.25-2.45-3.78-6.32-4.25-5.28-2.36-3.42-2.83-1.98-1.42.47-.56,6.23-1.03,3.78-4.43,7.08-2.01,3.9-.09,3.78-3.96,6.23,2.83,3.87,2.83,5.28-1.98,2.36-2.83-2.92-3.78-3.39-3.9-1.51-4.34.94-.94,2.36.86,3.87,2.36,4.34,1.89,4.81-2.07,4.72-2.83-2.92-2.83-3.39h-3.78l-3.98,3.78-7.17,2.27-1.89-2.48-1.33-7.65-2.36-1.51-5.84,2.27-6.23-.09-8.71-1.53-3.31-1.03-1.98,2.83-.56,5.76-2.83-.56-6.7-1.03-7.29.38,1.89,5.28,2.36,3.39,4.16,4.93-3.31,1.3-3.87-1.51h-4.81l-1.89,2.36.27,8.59,2.36,3.42-1.03,2.83-3.31.94-3.87-1.06-2.36-1.42-2.45,1.8-.94,1.98-.12,2.36-.94,2.36-1.03.94-1.98,2.83-1.51,3.9.38,7.17-13.9-.21-6.79.86-2.92,2.83-.59,6.23v4.25l-1.98,2.83,2.83,2.01,5.76-1.33,5.79,2.45,4.25,2.92,5.67,6.82,1.42,3.39,12.93,2.07,7.17,2.1,9.06,3.48,3.78,4.34,3.9,1.03,5.19.12,1.89,5.76.83,3.87,4.72,10.09,2.36,1.54,2.95-1.89v-4.37l-.38-3.78-2.75-7.26-.47-3.39v-1.42l4.81,1.03,4.72,3.96,3.39,1.42,1.89,1.53,1.89,1.89-1.12,6.7.47,2.45,3.31,2.45h4.34l1.89,3.39.94,2.01,10.01,3.48,5.19,3.39,4.25,4.93,4.37,2.92,5.19,1.51,5.76,1.03,2.92-.38,1.89-1.42,2.45-2.36-.86-4.81-1.3-5.28-1.42-3.87,3.96-6.7,3.39-2.75.94.47,3.31,4.34.38,7.65.38,5.28,1.89,3.42,3.87-2.36,3.39-2.36,3.78.09,4.34,2.92,2.83,3.39,2.83,1.03,3.42-4.25,4.9-6.7,12.19-6.52,6.23.68,3.31,1.42.47,2.45v1.89l-2.45,2.36-4.81.86-6.35.38-1.51,4.34,1.8,7.65-4.34,1.42-2.48,3.78,2.83,4.81-1.51,2.92-1.51,5.2,7.65,3.98,9.06,3.96,1.89-.94,4.93-2.75,3.39-1.42,1.33,2.48.94,4.81,3.31,2.92-1.15,7.65-5.76,1.33-2.45,3.31-1.12,11.04,2.83,4.84,1.68,11.51,3.31,5.76,1.24,9.65,5.2,4.9,10.09.65,4.81,2.48,3.31-1.42,5.02-8.03,4.9-7.2,2.48-2.83-.86-6.23,1.98-7.64,2.54-6.61,2.48-3.39,4.81-3.22,1.42,3.31-1.51,7.17-1.62,5.76,3.78,3.42,6.23,2.07,7.2,5.37,9.15-1.77,9.53,2.07-.09,2.83-4.81,2.83.47,1.89,6.14,5.37,1.42,4.37-1.62,6.7-3.31-3.39-2.24-4.84-4.37-3.01-3.87.94-4.81,3.31-5.28-1.03-4.25-3.04-3.31-6.23-2.36-.09-3.87,2.36-2.48,2.83-.56,5.28-3.87,1.42-1.98,2.36.47,3.31,4.25,2.92,6.23-.83,3.39.56-.56,2.36-5.28,3.31-7.29,1.8-6.23-1.06-2.36-.56-8.12-1.51-5.37,3.22h-4.37l-2.36-1.51-.83-3.9-4.84-1.98-4.81-.56-6.14-5.84-6.23-1.06-2.36-.94-1.42-1.51-.94-2.83-2.36-1.98-3.31-.56-.38-5.76.47-1.89.56-4.37-.83-6.23-9.09-7.73-6.7-.68-6.7-.09-3.78-2.92,1.03-3.31,3.39-4.25.59-7.17-2.27-5.4-5.76-1.98-4.84-.09-2.83-3.39-2.24-4.81-9.56-6.82-5.76-2.54-2.92,2.36-2.92,2.83-5.76.86-1.42-.94-.94-.94-8.71,2.72-9.15.77-3.78-3.39-7.56-9.74-3.69-6.7,1.03-5.28,1.98-7.65-4.72-1.53-3.39,3.78-8.21,1.33-10.01-3.96-1.53-.47-5.19-2.57,1.53-3.31-2.83-3.39-2.48-1.03-1.89,3.39-2.92,2.83v-3.87l2.45-4.25-1.3-5.76-2.83-2.92-2.48,1.89-3.87,5.19-3.96,3.31-3.39,2.36-1.54,4.72,1.42,5.76,4.16,6.32,6.14,6.82,4.34,1.98,5.67,2.92,4.84,1.51,3.78,2.45,4.72,5.4,6.14,6.32,1.42,2.45,3.87,2.48,3.31,2.45,3.78.94,3.31,2.92,4.25,4.9,3.39,2.48,3.31,1.98,6.23,2.45,5.19,3.87-.56,2.45-8.5-3.96-1.98-.09.47,3.39,7.08,3.48-.94,2.36-5.28-2.45-8.03-8.29-4.72-4.84-2.95,2.83,9.92,10.69,7.2,4.43,10.01,1.62,6.79-2.83,1.42,1.03,7.56,6.32,3.78,5.31,4.72,5.84,11.9,8.8,7.67,3.96,2.72,3.39,4.72,8.24,3.31,3.96,1.42,2.36,8.97,6.91,4.84,2.92,3.31,2.92,4.13,6.32,5.2,6.35,5.31,3.39,3.78,3.39,11.33,8.32.94,1.51-2.83.38-10.04-4.93-7.64-6.32-1.89,1.42,1.42,2.83,5.67,4.43,6.61,3.98,9.53,3.96,11.54,2.1,2.36,2.45-1.42,1.42-14.94-2.18-10.01-2.54-8.03-5.87-6.23-6.32-2.27-5.84-5.28-1.53-5.28-.09-2.83,1.42.35,2.92,7.67,6.35,13.31,8.29,4.72,3.98,10.48,6.41,7.17.12,5.28-2.36,5.79.09,7.73.65,5.67,3.87,9.06,3.04,6.7,2.54,7.08,4.93,7.67,4.9,10.95,6.91,8.41,11.13,2.36,3.87,1.42,1.42,6.14,3.51,9.53,9.71,7.94,14.55,2.24,3.39,2.83,4.84,5.58,11.13,2.74,9.65,3.22,9.62,2.27,6.23,3.78,5.4,6.23,2.45,4.25,3.01,3.78,5.28,2.74,7.29.74,9.06.94,4.34,1.89,3.87,3.78,3.42,1.33,3.87.94,4.81-2.07,5.28,1.77,10.6,1.33,5.28-1.51,4.72-.94,1.42-.09,2.92-2.45,6.7-1.06,3.78-.65,6.7,2.83,3.42-.94,3.87-.56,4.72,1.33,3.39-2.1,12.46.86,8.62-1.59,9.62-2.01,1.42-.94,1.42.86,5.76-4.16,16.74-1.89.47-4.34-.12-6.7-.09-9.15,1.33-2.36.86-5.87.94-6.14-1.62-3.96,2.36-.94.47-3.78-.09-.94-4.81.56-3.78-2.36-1.51-2.92-.47-3.6-11.16-3.31-7.73-3.1-12.01-5.2-7.73-.86-5.76,1.12-9.65-1.8-7.64-2.24-7.73-6.05-12.1-1.33-8.21-1.89-3.87.18-12.96-4.04-13.96,1.68-13.43-2.72-10.09,2.54-8.12,4.43-6.61,3.04-9.56,2.07-9.06,1.51-3.87,3.9-4.25-.38-6.23-5.76,1.8-6.35,3.31-5.37,8.5-5.58,15.29-3.13,16.71.59,22.11,3.19,11.54,3.42,23.61,1.3,7.17,2.66,13.96,2.74,12.1,3.57,13.52,3.69,10.57,2.75,10.57,3.22,9.18,2.27,6.79,5.08,9.65,5.19,7.73,11.25,17.47.94.47,2.92-.38,5.79-4.72,7.26-3.69,3.39-1.89,11.16-3.19,13.4-2.66,11.54-.77,11.6-.35,11.9,1.68,11.54,1.62,12.46,2.54,5.67,1.59,5.76.12,4.93-2.83,2.45-4.72-2.83-.12-2.92,1.42-11.07.77-13.4-3.13v-1.89l1.51-.94,5.76.12,6.26.56,9.15-1.71,4.81-2.83,2.92-.94,3.78-.38,2.48-.47,12.54-3.1,2.83,1.89,4.34-.38,4.37-2.83,11.04-2.18,5.28,1.53,5.76-3.31,11.16-2.66,13.05-4.16,29.37-7.17,9.62-.77,8.12.59,6.73-.38,8.68,1.12,9.53,1.62,9.18.56,5.67,2.54,3.87,1.51,2.83,2.48,4.25,2.45,8.21-2.27,5.28-1.33,15.41.68,7.65-2.27,11.72-8.41-.38-4.81-1.98-1.03,1.51-3.31,4.81,1.03.59-3.31-9.09-7.38-1.77-6.79,9.62,2.07,4.72,4.46.47.47,5.2,1.51,1.98-2.83-6.61-4.93-4.72-4.81-1.8-8.21,3.9-1.42,3.78,1.51.47,4.34.83,4.34,2.83,2.48,4.84,1.98,2.83-.94.56-3.78.47-2.36,1.98.47,1.33,2.45,2.92,2.45,1.33,3.78,4.34-1.8-.86-2.92.47-1.89,1.98-3.78,3.42-2.83,2.45-.94,1.42-2.36,1.03-2.83,1.51-2.45,4.34-1.33,2.01-6.23,2.92.56,2.83-1.42-.86-3.31-2.83-3.48-3.31-1.89-3.39-.56-3.78-1.06-4.81-1.98-3.31-4.34,2.54-3.39,1.42-3.78,3.87.56,2.36,1.98,3.31,4.81,7.08,5.87,6.7,1.59,5.79-1.89,5.76-.86,5.76.12,4.81,2.45,13.14-10.77v-2.36l-2.27-3.87-4.25-3.04-1.89-2.36v-2.45l1.98-2.36,5.2,2.45,4.84,2.57,4.25,3.87,5.28-.38,3.48-6.14,2.92-4.34,1.42-.38,1.42,2.36,1.33,4.81-1.03,5.31,2.36,2.45,1.42,1.89.94,2.92-3.39,3.31-7.29-1.12-4.25.47-8.21,2.24-.56,3.31-1.15,7.67-1.89,3.31-1.03,1.42-2.45,2.83-2.45,2.36-3.31.94-3.51,4.25-1.03,4.81-1.03,5.67-3.48,6.23-2.48,2.36-2.83,1.89-3.48,3.31-12.46,2.18,1.77,8.68,12.96-.77,4.25,3.42,1.8,6.79,4.34-.47,4.43-7.08,12.66-10.86,12.19-7.94,10.1-2.75,7.29-4.13,7.17-.38,9.24-3.69,10.6-5.11,12.19-5.58,6.79-6.02,8.68-2.27,3.9-2.36,8.77-5.58,9.65-2.27,15.59-13.14,6.32-4.72,10.69-6.02,8.21-6.61,11.72-6.52,13.02-6.91,10.21-5.67,5.28-.86,2.45-2.83,10.69-4.13,9.62-4.07,7.38-4.72,7.26-5.58,5.4-3.78,5.28-3.78,3.87-.38,9.27-8.97,6.32-4.72,22.29-9.15,17.47-9.74,9.27-7.08,12.57-6.49,14.99-3.04,9.56,1.15,6.23,1.98,3.78,3.87,7.73-6.52,2.45-2.83,13.14-7.47,5.87-2.24,4.81-.86,8.12-.38,8.59,2.54,10.95,3.6,12.96,2.54,11.51,2.18,9.53,4.43,6.14,3.51,5.79.09,3.31,2.45,3.87,2.45,2.27,3.42-3.31,1.89-3.51,2.83-2.36,1.89-5.37,1.3-8.03-3.48-4.34-1.03-6.73-1.15-9.06-2.07-17.18-4.63-2.45.94.83,3.39,2.95,1.53,7.64,2.45,10.95,1.68,8.12,2.1,6.7,1.98,4.84,1.98,3.31,2.92,3.31,1.06,2.92-.38,4.81-2.83,5.76-1.8,4.81-.86,5.79,1.03,3.87-.83,7.35-6.61,3.51-8.15,1.59-9.53,1.03-5.28-1.21-8.12-.38-5.28-1.89-6.82-3.22-3.39-7.26-1.03-7.56-4.93-4.25-1.59-3.51,2.36-5.76.38-6.61-4.93-5.2-5.37-3.31-.94-7.26.77-8.59.83-3.42-2.92-4.72-1.98-3.87-.09-1.89,2.36-1.51,2.83-5.28.86-4.34-.59-7.2-1.98-3.31-3.48.12-6.23.09-4.25,2.92-1.89,1.98-2.36.94-1.42,2.57-4.25v-4.84l-3.22-7.26-3.78-1.98-3.39-1.03-2.36-.47-.94-.47.09-2.95,2.36-1.42,3.87.59,3.39.09,3.31,1.98,2.75,4.81,1.89,4.34.86,3.42,1.89,2.92,2.83,2.45,6.23,1.03h2.45l2.83-.38,6.23.59,2.83,1.03,4.37,1.03,5.28,2.45,4.25,1.98,5.76,1.62,5.19,1.03,6.7,1.03,6.7,3.51,7.67,2.54,5.76.56,3.39-2.83,2.07-7.65-.94-3.78-.35-1.03-.94-.94-3.42-1.03-4.81.35-.56,5.31-2.83-2.48-3.31-2.92-1.42-3.87-1.33-3.87-1.8-8.59-1.77-3.42-1.89-3.39-2.36-3.39-2.36.38-2.01,1.89-.56,3.39,2.36,3.87,2.36,2.45v1.42l.86,2.95-3.87,2.72-1.89-.47-2.27-7.26-2.92-.47-1.89,1.33-2.45-1.42-1.33-3.39.56-7.2,1.59-7.17,1.53-3.78-1.89-1.98-1.42-3.87.56-3.78.56-4.81,1.03-2.83,1.98-.94,1.42.94,1.42.56,3.78,2.92.94,1.89-1.98,3.39-1.03,3.31-.09,6.7,2.36.59,3.78,1.42,4.34-.86-2.74-5.76.68-8.71,1.03-4.25,1.51-4.25,1.51-4.34,1.03-3.78,1.06-6.23-.38-4.81.94-1.42,3.01-2.83,8.24-3.69,3.78.09,1.98-2.36,1.59-8.12,5.28,1.03.38,4.81,2.36.47,6.82-2.27-2.36-3.87-.38-3.31,2.92-1.42,1.42,1.98.86,2.83,4.25,3.51,4.9-1.89,1.42,1.98,2.27,3.87,4.34,1.98,3.31,3.9,1.8,4.34,5.28-.38,2.45-2.36-.35-4.34,2.36.56,2.45-1.89,2.92-5.19.94,1.89.38,4.34-.94,3.87h3.31l1.51-1.89,2.45-3.78.68-8.12-3.78-6.79,1.68-11.42,2.45-5.79,2.57-5.2.94-2.36h1.03l3.78,2.01,3.87-1.89,6.23,1.12,2.48-1.89-.47-1.98,5.28.09-.56,3.87-.12,5.28-1.03,5.19,5.2,4.46,2.83,1.98,3.31,1.51,3.51-3.78,1.98-4.25,3.39-1.42,3.78,1.03,1.03-2.83.56-3.87,3.9.09,4.34-4.25-.38-5.28-.38-2.83v-1.98l1.03-2.36,2.01-1.89,1.89-.94,2.45-1.8,2.83,3.39.38,6.73-.12,4.25,2.75,6.79,2.36,2.45,2.36,3.39,3.78,2.01,6.35-5.2,3.87-.86,1.89,2.45-1.62,5.2-3.39,6.23-3.01,7.08-.56,5.28,4.13,4.37,4.93-1.33,3.31,1.51,3.87.09,2.92-2.36,4.25.09,7.38-4.72,9.62-2.63.56-4.34,1.53-3.31,1.98-2.83,2.36-.47,4.81.09,1.03-3.31,5.76-1.33,3.31,2.92,1.89,2.92,4.25,2.48,4.46-2.36,2.92-2.27-4.25-3.04-2.36-2.36-.94-1.98.56-3.31,2.83-1.42,7.17,4.93,10.39,9.8,7.76-4.13,1.42-.47,11.6-4.16,13.52-2.1,7.17,2.48,8.24-2.18,7.65.56,4.81,1.51,5.2,3.51,7.26-4.16,2.48-4.25,1.51-2.92,1.89,2.92,2.54,15.41.38,5.76,2.92-.38.94-.47.68-5.76,5.37-9.45,1.51-.47,1.89,1.42-.56,2.45-1.03,3.31-.94,3.31-.68,6.7-1.03,4.34.38,3.31,3.39,2.01,5.2,1.59,1.89,3.31,6.23,3.01.86,5.79,3.78-.38,6.23,3.01,2.36,3.87.86,4.37,4.34-1.42.38,4.34,2.92.56,3.31,1.42,2.83,1.03,2.36,1.51-.47,3.31,1.8,3.9,7.38-7.47,3.87-3.31h1.98l1.89,1.03-1.98,4.72-3.01,4.25v2.45l2.36,1.89.35,3.39,4.37,1.53-.12,4.81,5.31.09,3.78,2.92,7.08,4.46,4.81,1.51,8.5,3.57v2.83l5.28.12,3.31,1.98,4.34,1.03,3.31,1.51,2.36,3.87,2.92-2.83,2.83.12.38,4.81,5.2,5.37,4.72,3.87,5.67,4.93,2.83,2.92.86,4.34,5.37-4.25,6.26-.27,5.28,3.39,5.2,3.48,4.81.09,3.31,1.53,1.51-.94,4.34-1.89,2.48-5.2,2.92-2.83,1.98-2.36,2.45-1.89,1.89,2.45.86,2.92-1.98,3.78-1.51,3.31-1.06,5.28,1.89,3.87,10.39,7.85,5.67,5.37,2.36,2.95,2.83,1.98,3.31.09,1.53-4.34,3.48-1.8,1.33,2.83,4.25,6.32,4.16,4.46,6.61,8.77,4.81,1.06,1.98-6.73,2.45-.94,3.31,1.53-.65,9.62,8.59,5.37,4.25,3.98,7.56,3.48,5.76.09,6.82-.83,3.31.56,1.42,2.92.94.94-5.4,3.78,2.75,7.17,12.28,8.41,7.56,6.43,6.14,7.73,5.2,3.48,4.25,5.4-2.07,4.72,3.78,3.39.94,4.34,2.24,3.39v3.9l.86,2.36,2.83,4.9,3.22,4.34,2.36,5.76-.09,5.31,2.83,2.45,6.14,2.07,4.25,2.92,5.2,4.46,2.36,3.87,2.27,7.26,2.45-.94,2.36.12,2.27,4.81-.59,5.28-1.03,4.25-1.51,5.76,4.72,2.45,1.89,3.42,3.31,1.51,1.8,7.17-2.92,1.89-2.95,3.78.86,2.45.94,1.42,3.87.56.86,2.95-1.89.94-2.45,1.77-1.51,3.9-.56,4.72,1.3,3.39,2.95.56,2.83-1.42,4.34-1.33,2.45.47,3.78,4.46,1.71,6.7,7.35,17,4.63,8.68,8.59,4.55,3.31,3.39,5.28-2.83,3.31,3.48,2.83,2.95,6.73,1.51,3.78,3.48h2.36l2.36.56h2.45l4.34.12,1.33,1.51-.47,1.89,2.36,2.92,7.94,9.27,2.24,9.62,8.62,2.54,7.56,4.07,5.76,1.03,2.27,4.34,6.7,3.04,8.68-4.16,3.87-1.33,8.62,2.57,3.31,3.87,6.23-.3,2.83,1.42,6.14,4.93,4.25,5.37,3.22,4.9.35,9.56-3.01,4.81-2.45,1.8-2.1,6.7-.09,5.76,2.83,1.03-.09,5.28-3.39,1.8-1.03,4.81,2.83,4.84.35,3.87.77,7.65,3.39,1.51,4.72,3.51,4.25,3.87-7.73.38-8.12-1.62-2.1,8.59.86,6.26,2.83,3.39,4.72,2.07-.47.94-5.28.86-5.4,3.69-.56,2.36,4.34,1.12,3.78,1.03-1.03,6.61.38,3.9,1.33,6.79,2.83,1.89-3.39.94-.47,1.42-.59,1.89-.56,2.92,9.65,2.57-1.06,3.31-1.12,6.7.38,6.79-3.87.86-1.53,1.89-.56,3.78,5.28.18,2.36,1.42,6.73,2.1,3.87-2.83,1.51.56-.18,5.28.35,8.12,5.2,2.57,5.79,1.98,3.48-6.61,2.36.47,2.75,6.32,4.25,2.01,2.27,6.79,2.36,3.87,2.36-.94,1.03-1.42,4.34.09,1.89,1.06-2.45,2.36v1.42l3.31,1.98,2.75,3.87,1.42,4.34,5.76-.38,1.42-1.42,2.92-.83,3.31,1.98,1.89,2.45,2.36.47,2.36,1.98.86,6.23.38,5.31,3.31,3.96,2.24,5.28,2.75,5.4,1.89,2.92,5.76.56,1.89.94-1.51,2.92-.09,2.83,3.87-.38,4.34.59,1.42,1.42,4.25,2.07-.09,5.2.94,1.51,3.87-2.83,2.01-4.25-1.33-7.26,1.51-1.42,4.72,4.9,7.56,4.55,9.62.18,7.67.56,2.83,2.01.27,7.26,2.36,1.98,2.45-.94,3.42-4.25,2.83,2.45-.59,6.26,2.36,1.03,1.53-.47,3.87-4.72,1.42,3.87-3.04,4.25-1.03,3.31,1.89,3.39,1.33,4.81-.56,3.9.94,2.36,3.22,4.9.94,3.39,2.83-.47,3.39-.38,3.87-.35,3.31-.47,1.89,1.51-1.03,3.31-4.34,1.42-8.71,3.57-.56,4.37,3.31,2.45,1.42.56h3.39l5.28-1.8,1.42,1.98-.09,2.83-.18,8.71,1.89,4.81,6.79-5.2,3.87.09,1.89,1.03,2.27,3.42-1.89,1.42-3.39.83-1.51,1.89-2.92,1.89-2.48,3.31,1.89,3.9,3.78,1.51,2.95-1.89,3.78,1.59,1.42,2.36,3.31,1.98,2.36,1.06,2.36,1.98.35,4.81,2.83,1.98,2.48.94.83,3.87-1.98,3.78-2.54,4.37-3.87,2.72,2.24,6.35,3.31,1.51,3.42-.47,5.37-4.63,1.51-3.78.47-1.51,1.03-2.36,2.01-3.31,3.39-1.89,4.81.09,4.25.56,5.37-1.77,1.89.09,1.42-.47,3.42-.38h1.89l1.68.77-.86,4.04-1.51,6.23-3.39,2.27-6.23-1.03-6.23-1.12-3.31-.47-5.4,3.19-4.43,4.72-4.93,6.14-5.84,5.67-2.45,4.25.86,3.9,2.83,1.51,3.39-.94,3.39-.38,2.83,1.03,2.92-1.42,2.36-.94,1.89.56.94,4.84,1.8,1.98,3.87.56,2.92-1.42,3.31.56-.09,4.81,1.42,2.36,4.81.12,2.83-.86,2.01-.47-.12,2.92.47,2.36,4.25,2.45,5.79-.27,3.87-1.89,2.83-.86.47,3.31.38,2.45,3.31,1.98,3.31,2.45,4.34,2.48,3.31,1.51,4.25,1.03-.47,1.98-3.39,1.8-1.06,2.92-1.03,2.83.94,3.39,1.8,3.9.38,4.34,8.59,2.54,1.89,2.45,4.25,2.01.94.94.38,3.87-3.39,1.42-3.78-1.03-4.25-.59-3.42,1.33-1.03,2.83.94,2.45,2.83,1.53.38,2.83.86,4.81-1.98,5.76-.59,3.87,1.33,5.28,2.83.59,3.87-2.83,2.57-3.78,3.31-.94,4.81,1.12,2.36,1.89,1.33,3.87-1.98,2.36-2.83.47-.94-1.03-2.36-.94-3.9,2.27-1.03,2.45.94,2.36,2.75,4.34,3.87-.38,1.89,1.06-.09,4.81.86,4.34,1.89.47,3.31,1.51.94,3.87-.09,3.42h2.83l6.32-.86,2.83.56,3.78,1.51.94-.47,2.92.09,1.98-1.89,4.84-1.3,4.25,1.03,3.31,2.45.94,2.45,1.89,2.45,1.89-1.89.09-1.98v-1.42l.56-3.31-.94-2.92,7.26-.86,3.9-2.27,4.34.12,1.33,5.28.83,3.87,2.83,1.03,4.37-1.42,1.03-4.72,2.45-2.83,1.03-2.36,1.89.47,3.87-1.33,4.37-1.42,1.89,1.06,1.89,1.98,3.31,2.45,11.04-1.24,2.92-1.42,3.31,2.1,1.89,2.83-1.51,3.39.38,5.28,8.12-.38,7.65,2.66,4.72,1.03,7.29-3.69,8.5,7.85,4.34-.38,5.67,1.98,3.87-.35,4.43-5.67.38,3.87,3.39-.38,3.42-1.42,4.34-2.27,3.87-2.83,2.36,1.51,3.22,5.31,2.83,3.48,5.67,2.45,7.26.68,6.7-3.69,2.57-2.83,6.14.09,3.01-4.72,4.34-2.75h3.42l-2.57,4.81-2.45,3.31-1.98,4.25.38,2.95.94,2.83,2.36,3.48-.12,1.42-3.39.86,3.31,4.43.38,3.31,2.36,3.51-5.76,1.21,2.27,5.87.83,5.76,2.27,5.84,6.23-.38,7.67-1.77,4.34.09,2.83,3.01.94.94-.09,2.83-2.95,2.83-2.36.47-5.76-1.59-4.34,1.89-1.51,2.83,3.22,5.84-2.48,4.25v1.42l-1.12,4.81,3.31,3.42,3.31,2.45,2.75,4.9,3.87,1.98,7,5.96-2.83.86-3.87,2.36-1.53,2.36,1.42,1.42.47,1.03,3.31,1.98,2.27,3.87,4.25,2.01,7.76-3.22,5.37-2.75,3.31-.38,1.89,2.92-.56,2.83-1.89,1.89-2.92,1.42-.94.86-.12,1.51,1.89,3.9-2.15,8.59,2.92,1.03,2.83,2.45-.56,3.78.86,2.45.94,2.95,1.77,2.45.47.94-.94,2.36-1.51.47-2.36-1.51-3.31-.59-1.51,2.36-.09,4.37,1.33,4.34.47,3.87-.12,2.36-1.03,4.34-2.63,9.06,1.42,4.84,1.42,1.03,3.31.47,4.34-.86,2.36-.86,2.92-1.42,6.23,2.1,4.25,3.39,1.8,3.39v2.45l-2.92-.09-4.34,2.83-2.1,8.59,2.27,4.34.38,4.84,4.25,3.48,4.04,10.57,3.78,2.57,4.37,1.51,2.36,1.51,1.3,1.98,1.33,5.79.94,3.87,3.22,3.87,6.23.65,3.31,1.53,5.2,3.39,4.72,4.43,2.36,1.03,3.31,2.48,1.89,1.03,3.78,3.39-3.39,2.36-3.39-.56-4.25.86-2.92,2.83-2.95.94-1.03,1.42,1.89,2.92,2.83,1.51h2.45l3.78-1.33,2.48.47,1.89,1.03,2.36.59,6.7,1.51,2.92-3.22,3.31,1.98,7.08,3.51-.09,5.28,1.89,2.92,3.31.09,5.76,1.03,2.36-1.42,2.92-.83,2.36,1.51-.09,3.31-1.51,3.31-1.89,1.42-.56,4.34-.12,3.39.38,2.83.94,3.39,2.83,2.01.94.47.94,1.51-1.03,3.31-2.92,3.31-1.03,1.42.35,3.87-.09,3.87.94,3.31.38,3.39-.09,2.95-1.42,2.36-2.45,2.83-4.46,3.19-2.45,1.42-.94.94-.94,1.42.38,2.48v1.42h.94l1.89-.47,2.45.56,1.42.56.38,2.83-1.98,3.78-1.06,2.92-.09,3.31v3.39l.86,3.42.38,3.87,1.33,4.34,3.31,4.34.94,2.45.35,2.36.38,4.37-1.51,2.92-4.25-1.15-1.89-2.92-2.75-2.92-1.42-4.34-2.27-5.28-.83-2.95.09-3.87-1.42-5.28-.86-2.92-1.42-1.98-2.83-1.42-3.78-.12-3.87.38-4.34-.09-3.31-.09-2.95.94-2.45,1.8-1.51,2.92-.47,1.42-2.83-1.51-.94-2.48-1.42-.94-1.42-.09-1.89.47-.65,5.28.35,6.26.94,3.39,7.08,1.12,4.84.09,3.31,1.06,2.83,1.51,1.89,1.42.47,2.92-1.53,1.89-3.31-.09-2.45-.47v3.31l-.09,2.45.86,3.39,1.42,2.83,2.36,2.92,5.2,2.57,5.28.09,1.42.09,1.42.94.47,1.98-.09.94-2.45,2.36-1.89,1.89-.59,2.36-.09,2.83.94,4.37,2.83,1.98,3.78-.86,1.03-.47,1.42-1.42,2.48-2.83,1.98-3.78,1.03-.94.86,5.28,5.2,1.15h1.89l.47,2.45-1.51,2.36-3.31.38.35,2.92,4.25,4.9.38.94-.47,2.36-1.98.94-1.89.47-.56,3.78-.47.94-.56,4.81-.59.94-1.03,2.83-2.36-.47-2.36-2.92-.86-3.39-1.42-.56-1.98,2.36.86,6.79-.56,2.36.94,1.51,2.36.94,1.42,2.95.86,3.87.35,4.81.86,2.92,2.36,4.34.94,2.01,1.24,5.76.94,2.45.94,1.42.38,1.98,2.36,4.34.35,2.01-2.92,3.31-.94,1.89.86,3.87v.94l-.56.94-2.36.94-2.36-1.03-2.36-2.01-1.98.47-2.01,2.83,4.63,10.21,5.67,1.98,2.83,1.51h.94l2.45.59.47.94.38,1.98-3.39.86-.47.47h-2.83l-1.03,1.42-3.98,6.61-2.36.47-1.42-2.95-3.31-.09-3.39,1.33-1.12,8.21v2.36l1.89.12,1.98-2.36,3.78-.94,2.36,1.98-2.07,9.06,1.3,3.39.94,2.92-1.03,2.36-1.98,1.89-1.98,4.37-1.03,3.31-6.82,6.14-2.45,1.89-.47,1.89.94.47,4.25,1.98,2.75,3.96v3.87l-1.15,4.25,4.84,1.53,5.76-2.75,1.42.09,1.89,1.42v2.45l-3.39,1.33-.59,2.92.94,3.87-.09.94-2.36,1.89-2.45-.09-2.83.38-3.96,4.72-.47,1.98-.12,3.31.38,2.45,2.92.59,2.27,1.98.47,4.25-.09,2.92-.09,1.89-.94,1.98v1.42l-.68,4.81,2.83,3.9-2.07,5.28,2.27,8.68-.47.94-6.82.3-2.83.47-1.89.38-1.98.47-.94.47,1.33,3.87,1.89,3.39,1.8,3.39-1.42,1.42,1.33,2.92-6.26,1.33-2.83-.09-1.03,2.36-.09,5.28-1.98,4.81,2.27,2.95,2.36,1.98-1.06,2.83-.94,1.89,2.27,3.48.47,3.31-.56,2.92-2.07,5.2-1.06,4.37-3.01,6.61-3.78.94-1.51,2.36-1.98,2.83.83,2.92,2.83,2.45,7.2,3.01.35,4.84-1.03,3.39-3.01,4.25.38,4.34,4.25,4.34-1.06,2.92-3.31-2.45-3.31-.56-2.45,3.78-1.51,2.83-3.39.38-1.42,2.92-1.03,1.42-3.9,1.33-4.72-1.51-2.92,3.78-1.12,4.81v2.36l2.83,1.51,2.36.56,6.14,3.04-3.39,1.77-4.37,3.31-3.39,2.83-2.36.38-1.42-2.45-1.98,2.83-1.42.94-1.51,3.39.38,4.81,2.15,7.29.38,3.78.38,5.37-1.62,8.12-3.48,9.09-3.96,7.08-4.46,3.31.38,4.34,1.42,2.45,2.83,2.45,2.75,4.34-1.98,2.36-5.79,1.8h-3.31l-3.87,2.75-3.48,3.31-1.42.94-.56,5.76-.59,3.87-.09,3.78-1.98,1.89v1.53l-.56,4.25-.56,1.51,1.42,2.83,1.89,1.03,2.45-1.89,5.84-6.61,4.25,1.03.47,1.98-2.45,3.78-4.81,2.27-2.57,6.23,2.83,1.53-2.45,2.83-4.81.35-1.42,2.36-.56,2.95-1.42-1.53-2.45,2.36-2.83-.56-.12,1.51.47,3.31,1.8,4.46-.56,6.7,1.24,5.76,1.42,2.45v1.89l-.59,1.06-1.89,1.3-2.45.47-1.42-1.03-6.23,1.33.86,5.37,5.2,3.9,4.25,2.54.38,3.39-2.36-1.03-1.89-1.03-3.31-1.51-5.79,1.77,2.27,2.95.86,5.37-1.42,3.31-1.59,7.17.35,2.92.38,3.42-2.36.35-2.83-2.92.56-3.39-.94-1.89-2.83.86-1.03,3.39.38,2.83-1.42,1.98-.56,1.42-.47,1.89-1.03,1.42-1.89.94.35,2.36.47,1.51-2.92,2.36-3.78-2.07-2.36-2.45h-3.78l-1.98,4.25-.56,4.81-7,10.86-5.76,2.83-.56,4.25,7.56,3.6,4.6,6.79,6.05,6.91,7.08,5.46,5.76,1.03,5.79-.83,4.25.09,2.83,1.51.94,1.51.47,1.42-6.73.86-4.34.86-1.51,1.89-2.07,11.51-2.01.38-2.54-12.57-8.03-5.93-3.31-3.39-4.25-3.98-3.22-3.39-5.2-3.48-4.34,2.83,2.75,4.34,4.99,14.08,4.93,13.58,5.28,23.26,1.8,5.28,3.31,2.45-1.03,4.34-1.62,6.23-4.43,8.15-2.1,4.72.94,3.87,4.72-.38,3.78,3.01-.09,4.84-4.81,2.24-5.02,9.09,2.83,4.34,1.33,4.9-3.39,4.25-3.01,7.08-2.57,3.87-.09,5.31-4.9,9.06.83,4.81-2.72,16.23,1.59,15.02,2.75,4.93-5.28,2.24-1.53,3.31-2.15,11.07-2.57,9.06-1.12,6.7-4.07,10.6-1.98,6.23-4.04,10.48-6.43,7.56-.09,7.73-2.57,5.67-3.96,5.31-.18,9.06-2.95,4.34-2.45,2.36-1.98,1.89-2.36,2.36-1.42-1.03-.86-5.76,1.03-5.79,2.1-7.64,1.21-9.62,1.06-7.76,2.07-8.12,2.66-8.59,2.45-6.7,2.54-5.2,5.87-7.65-2.36-2.48-5.67-1.03-2.1,9.06-8.88,11.93-2.07,7.17-3.13,11.98-2.15,11.54-1.03,7.65-1.71,12.46-2.27,13.99-.18,11.04,1.68,8.24,3.13,10.66,7.85,14.17,4.6,7.29,3.69,7.26,5.58,7.85,9.83,10.39,15.97,13.31,5.67,5.93,6.97,7.38,6.05,6.32,6.52,10.77,6.91,10.77,7.82,15.59,6.43,11.72,3.69,8.21,2.15,8.32.3,8.68-.21,8.59-.65,10.12.38,2.45,6.61,3.96,3.39-3.31,4.9-3.19,4.84-1.89v-2.83l-.86-1.53-5.28-1.98-3.31-1.51.09-2.92.56-5.76-.38-4.37,1.98-4.34-.35-3.78-2.75-3.01-3.31-3.87-1.71-11.16-4.16-3.48-3.78-2.95-1.89-3.39-1.21-8.68-2.27-3.98-3.31-4.34-1.8-4.43-1.8-5.76-5.2-5.02-1.89-1.42-1.77-4.43-2.27-5.79-2.75-3.48-2.92-.47-3.78-2.54-2.27-2.48-2.27-5.84-4.25-3.87-2.36-3.04-2.75-2.92-5.28.38-3.78-4.43-3.78-2.01-3.69-4.43-1.42-1.89-4.25-2.07-2.24-4.37-2.36-4.43-6.43-10.69.47-1.98,7.65,2.66,9.45,4.99,4.72,3.98,5.58,7.26,5.58,6.91,5.93,10.77,4.93-4.72,1.42-.47,1.42,2.45,2.27,3.39,3.31,3.48,7.17,1.06,1.59-11.07.68-6.7-3.78-4.43-4.16-5.4-2.27-5.28.56-4.34,1.42.47,4.25,3.96,1.8,3.87,5.2,5.49,1.98-4.34,1.51-5.76,3.51-5.2,3.87-3.31.3,10.09-1.71,10.57-2.45,6.26-5.96,6.14,2.74,9.15,3.6,8.8,4.43,15.47,2.75,7.29,3.78,4.43,1.68,9.27,1.33,5.28,3.31,2.45,5.28-2.27,6.05,9.74,4.16,3.48,6.14,2.57,6.23,2.54,8.12-1.33,4.37.12,2.15,7.26,1.33,4.43-1.51,3.31-3.39,2.83,1.42,4.37,8.86,8.86,1.24,10.12,8.5,1.21.18-7.26,8.97,3.13,9.65.18,3.31-.38,3.78.56,6.79-1.3,3.87-3.78,2.1-7.2-1.42-1.51-4.25-1.98-.94-2.45-2.75-3.87.77-12.57.09-5.76,4.34-2.83,3.39-2.27,1.51-3.87-.83-3.39-4.25-2.01-2.95-.56.21-6.23,5.28-1.8,4.72,1.03,5.28-1.3-.38-2.48-5.2-2.54-3.78-1.03-.35-5.76,2.45-2.83,2.92-2.36v-3.42l-1.8-2.45-3.31-3.87-.86-3.87,2.01-2.83,4.72,2.45,6.14,4.07,6.23-.38,4.34-3.31.09-4.81-2.83-3.9-3.31-1.98-5.2-.65-1.8-6.35,1.06-3.78-1.33-3.39.56-3.87,4.34-1.33,6.14,2.1,3.22,4.81-.09,4.81,4.34.09,5.37-9.45.12-3.87-2.75-2.92-10.6-1.24-.74-5.28-.86-5.84-3.31-1.06-3.87,1.42-4.93,4.25-5.19-3.96,8.32-6.61,1.51-3.31-2.36-2.45-9.53.74,1.03-5.28,3.87-2.36,4.72,1.03,3.31,2.1,3.42-.47,7.17-1.71,2.75,5.28,1.77,5.87.94,3.87,4.16,3.96,3.87-2.36,1.62-6.23-3.22-6.79-6.05-8.32-3.22-4.43-2.83-1.98-2.36-3.42,2.48-2.36,6.7-1.3,11.04-1.24,12.01-2.07,10.1-1.71,5.28-5.2,2.1-7.17-.86-4.93-7.17,1.24-1.89-.38-7.76,5.11-9.15,4.63-13.9-1.8-5.28,2.36-10.48-2.18-4.25-3.01-9.92-5.96-5.2-.65-4.25-5.37-3.69-3.42-4.25-5.84-2.75-3.96-6.61-3.51-7.64-.18-7.08-4.46-2.36-.56-4.34-.56-2.27-4.34-2.36-1.03-5.84,4.72-2.83-2.57-2.27-2.92-2.83-1.98-6.14-3.98-5.58-6.41-3.87,2.36-3.78-2.45,4.55-12.01,3.96-6.61,7.17.09,10.01-1.21,14.94-3.51,15.76-.65,13.43-1.59,2.45-.47,13.87-2.1,2.1-7.65-1.33-3.87-5.2-2.57-9.15.68-11.93.38-14.91,2.54-6.23.86-3.31-.56,1.03-3.9-.94-1.89-5.28,2.27-2.48,2.36-3.39,1.8-.94-1.42.56-2.83,3.51-5.76,2.83.09,1.51-2.92,3.87-1.8,3.39-2.36,2.48-4.72,3.48-6.7,1.12-6.23-2.83-4.37-2.72-5.84-4.16-6.79-4.16-4.93-2.27-4.9-2.83-3.87-1.89-2.01-2.27-5.84,6.26,1.59,1.89.94,2.83,2.01,1.77,2.92,2.36,1.51,2.36,2.45,5.31.68,5.67.56,4.25,2.45,1.89,3.01-2.66,9.09,2.83,3.87-1.24,11.51,5.79,1.62,2.54-8.15.56-5.76,2.92-3.31,2.48-1.42,1.42-.94.94,2.92,2.45-1.89,3.78-.83,3.57,13.96,5.11,4.55,1.62-8.24.56-4.81,4.34-.38,3.78,2.1,1.89,2.36.86,2.92-.47,2.92-.09,2.83,4.13,6.43,6.14,3.48,3.31,3.39,4.72,1.06,7.2,1.12,4.34-.86,7.56,1.62,4.72,2.54,6.23,1.98,3.31,2.57.86,3.87-2.92.86-4.72-1.06-6.73-1.59-7.08-1.59-9.06-1.15-10.57.3-6.7.27-4.25.86-3.98,4.25.3,10.69,7.65-1.33,11.04-1.71,9.56.21,7.17.65,6.7,1.15,1.8,3.87,6.7.65,3.48-7.17,3.31-.86,5.2,2.92,3.31,4.93,2.75,3.96,3.31,4.34,1.8,4.46,1.8,3.87,2.36,3.87,3.22,3.98,4.72,3.48-1.06,4.72,2.75,4.43-2.45,4.72-2.54,6.26.35,4.34.86,5.76.86,6.79-3.48,5.2-8.71,3.22,1.33,6.35,6.7-.86,4.25,2.45-.18,6.79-1.98,5.2-5.4,5.2-7.73,3.69-5.76,3.31.83,2.92,8.62,1.15.35,2.83-3.78.47,1.8,5.28,2.75,3.96,5.2,5.4.86,3.87-1.03,5.28,3.66,2.92,4.46-4.72,3.39-1.3,3.22,3.87,5.76,1.12,6.79-3.69,6.05,3.98,4.72,4.9,6.14,3.04,6.14,1.59,6.23,1.03,2.48-2.83,1.03-4.72,2.75-14.91-2.75-6.35-4.16-5.37-6.05-7.85-1.8-4.81-1.89-3.96,2.1-6.73,3.48-5.67.68-7.73-1.42-3.87-3.69-3.39-1.8-7.76.65-6.23-.47-3.87-.83-3.87,2.45-4.37,4.43-3.66,11.25-9.92,3.39-3.31.47-1.89,1.51-4.37,3.9-.35,5.76.09,4.81-.86,2.36.09,1.8,2.92,1.89,3.9.86,5.37,1.3,1.89,3.42.56,2.92-3.31,1.03-2.83-.38-6.32,1.03-4.72,8.71-3.69,3.87-2.83,3.31,1.98.94,4.34,4.25-.35,4.34-.86-1.03,4.34-9.27,6.05.38,5.76-.56,4.81-3.31-1.51-4.72-1.98-3.39-.56-.94,1.42.86,2.92,3.31,3.87,2.72,2.92,3.78,3.51,1.8,3.87-2.92,2.83-5.28,3.31-2.45,1.33.94,1.98,7.17.18,2.36,2.45,1.8,2.95,1.89,3.87,2.24,4.81,1.33,4.43,3.78,3.9,2.75,2.54v1.89l-1.98,2.83.38,3.87-.59,2.36-.09,5.87.38,3.31-.56,4.34,4.25,3.01,4.72,1.51-.56,5.31,1.3,7.73,2.27,2.92.86,4.34-1.12,7.76-.59,5.28-3.96,6.14-5.28,3.22-.68,8.68,1.71,8.71-6.79,5.2-2.95,1.42-2.92,2.24-6.79,5.67-4.46,7.67-2.92,2.24-4.9,5.2-2.45,3.42-3.42,2.72-2.92,2.83-3.87,1.89-5.76,2.75-3.39,2.36-3.51,4.25-2.83,1.42-1.89-2.45-.94-2.45-3.78-.09-5.28,3.78,1.33,3.39,3.78,2.45.38,2.92-2.01,5.67-1.51,3.87-.09,3.42.38,2.36,3.78,1.51,6.23.18,5.76-.38,4.34-.35,4.25,2.54,2.27,1.98.86,6.23.38,7.29-.68,4.25-1.03,3.87.94,3.87.86,4.81-2.45,2.83h-2.92l-1.33-3.87-1.62-12.66-2.24-4.81-3.78-3.48-5.2-1.98-3.78-1.62-5.87,2.36-4.81,1.8-3.78-1.51-4.34,1.33-4.81,3.31-5.31,3.66-5.84,3.31-3.87,2.27-1.98,2.83-4.84,4.25,1.33,3.87,4.63,4.46,10.09-1.71,3.31,2.57-4.34,2.72-9.71,6.52-2.01,2.36-2.83.47-1.3-7.26-3.31-.56-2.48,2.83h-2.36l-2.83-3.04-4.81,2.36-1.98,2.36-3.96,9.53.83,3.9-1.98,2.83-4.81,2.36-5.96,7.56-5.37,4.25-.94,5.2-1.59,6.32-.59,4.72-3.39,3.78.86,3.87-.09,3.39.38,4.84,1.89,1.51h1.42l2.45-2.83,1.33,5.37h2.83l2.83,1.03.47,2.01,1.89.47,1.42,1.03-3.9,2.36-1.03,3.78-2.83-.09-2.36-.47-2.83-3.51-5.2-1.51-2.83-1.51-2.36-.56-2.45.94-1.98,2.36-1.42,2.36,2.36,1.51-.09,3.39-3.42-.56-1.42,2.36,5.02,8.77-3.31,1.42-1.89-1.51-1.89-1.98-2.83-1.51-4.34,2.36-4.81,2.27-2.48.94-12.84-2.27-.56,4.34,12.28,7.56,4.25,3.39-.56,3.87-2.57,5.79,1.89,3.39,7.67-2.75,5.46-7.56,8.12-.86,1.89-1.42,3.9.56,1.77,3.42-6.88,8.59,1.33,8.68-4.37,1.8h-3.39l-3.87,2.75-1.51,4.34-1.51,3.78-3.9,1.89-1.03,2.36-2.83,1.42-1.98,2.83-1.03,3.39-3.39,2.27-5.2-2.45-.86-4.46.94-1.42,1.03-1.89-.86-3.39-5.76.86-3.87-.56-2.36-1.03-3.78-1.06-5.2-1.03-5.28-.56-3.31.38-2.95,2.83.77,6.32,5.76.56,4.72.59,3.78,1.98,6.14,6.41,4.72-.35,5.76,1.59,3.22,3.39,4.72,2.1,3.39.09,2.36-.94,3.78,3.96,8.03,2.57,2.95-.38,3.78,1.03,4.81-1.42,9.53-1.24,11.42.3,6.23,1.12,6.26.12,4.34-4.25,7.17-.77,5.28-1.89,3.39-3.31,3.99-3.78,4.72-.38,8.21-2.63,7.65.09,4.37-1.33,3.87-2.83,4.25-.38,4.34,1.15,4.72.09,6.23.09,3.31-.38,4.81-.86h2.83v3.42l-1.51,2.36-2.83.47-2.92.83-.09,2.95,2.83,1.98,2.83.56,5.76.09,3.39-.86,2.83-.47,2.83,1.53-.94,1.42-2.92,2.83-4.9,3.31-6.61-1.62-4.72-4.43-6.61-.68-3.42.47-5.67-1.59-3.87,1.8-7.17,2.27-4.9,3.31-7.2,2.72.59-4.34,2.45-1.89v-1.89l-2.83-1.51-4.25-1.03-2.92.86-4.37,2.36-1.03,4.72-.94,1.51-3.87.38-1.42.47-2.45.35-1.42.94-1.89.47-1.03,1.89.94,2.95.83,4.81,2.27,3.39,3.31,3.01,3.22,3.42,5.2,4.43,4.72,3.48,2.75,3.42.86,4.9-2.48,5.2-2.36-3.87-2.24-3.87-3.31-2.57-5.2-1.98-4.25-3.01-5.67-1.15-1.89-3.39-2.27-4.34-1.8-5.87-1.33-4.81-2.83-1.51-6.14-1.12-5.84,2.24-4.25.94-2.45.38-3.31-.09-3.78-.09-5.31-.09-6.23.83-8.12-.18-6.14-2.07-6.7-1.06-7.56-1.12-4.34-.09-4.72-1.15-5.2-3.48-3.78-2.92-5.67-2.1-10.39-6.49-5.2-2.95-4.25-2.07-7.2-.65-5.76.83-7.08.38-6.23.86-.94-.09-2.45.47-2.45,1.89-1.53,3.78,5.67,4.99-.09,4.84-3.78-.59-2.36-3.96-2.83-.47-2.45,3.78-.65,9.15-1.15,7.67,1.71,8.21,3.78,1.59,6.79-3.31,6.14,1.15,1.62-6.23,3.31,1.98,1.89-.47,2.45-.86,2.45-4.81,2.45-3.31,2.45-3.78,3.9-1.89,3.31,1.51,3.31,1.03,1.42,2.92-2.57,5.31-.47,3.87-.27,9.62.94,2.36.74,6.82-3.39,3.31-4.34,4.25-3.87-.12-4.72-2.45-6.52-5.46-7.08-3.04-6.7-.65-3.78-.09-3.42,1.89-.56,1.89,2.75,5.37,7.56,5.02,11.81,5.55,17,8.97,13.61,12.87,12.19,11.33,8.59.74,10.48,2.57,7,4.04,4.25,4.46,6.7,1.12,2.27,4.81,5.11,7.38,4.04,9.24.86,5.79.86,2.45.47,2.45.38,6.23-.21,5.4,6.05,6.79,4.63,7.85,3.22,7.35,1.3,5.76-.65,6.26-2.45,3.87.38,3.39.47,1.42,4.25,3.48.47-1.42,3.39-1.89,3.31,3.9.86,4.9-2.1,4.25-1.98,5.28,3.31,2.92-.65,7.29-.12,4.34.38,6.7-1.12,4.34.38,5.31-.94,2.92-2.01,2.36-3.78-1.03-3.31-3.98.68-9.15.56-5.28-2.27-3.42-5.2-.56-5.37,4.16-3.69,13.99-2.45,4.72-1.51,4.34,1.77,3.87,6.14,3.96,3.31,3.04,5.67,3.01,4.63,6.35,5.58,7.82,4.63,6.43,4.63,5.37,4.13,5.4,2.36,4.9,1.71,6.79,2.27,6.35,2.75,6.79,3.19,4.46,4.37-2.36.56-4.37-1.8-4.34-1.8-6.79-2.27-6.35-1.77-4.34-1.8-3.48-3.31-3.87-2.27-3.98-2.36-3.39-9.74-12.75-2.15-8.68,11.33,7.44,5.11,3.98,5.55,6.88,4.63,9.74,4.63,6.91,3.13,7.26,1.3,6.79,1.8,6.82.38,4.34,2.27,4.34,1.33,2.92,3.78,5.4,1.3,4.43.86,4.81-.09,4.37-.56,1.42-.94,1.42-3.31-2.95-3.13-7.35-1.33-4.81-2.83-4.46-1.42-1.42-3.78-1.03-3.31-.09.38,3.87,3.22,6.79,2.75,6.82,6.32,16.06,6.35,12.75,8.77,17.09,4.46,11.63,3.19,9.71,2.1,11.16,1.89,3.96,4.63,6.82,1.21,7.26,1.33,6.79,1.71,7.76,5.08,9.36,4.93,12.63,5.93,11.72,5.11,8.8,5.96,9.83,4.16,7.73,10.1,16.71,6.79,15.59,4.55,10.21,7.85,14.17,6.41,11.81,5.96,10.21,2.75,5.84,1.42,2.45,3.19,6.91,3.6,9.71,8.8,12.28,3.19,5.87,2.75,4.43,5.58,8.8,4.81-3.78,1.98-3.78-2.72-5.87-4.25-3.01-4.72-2.07-2.27-2.48-1.42-4.34-.38-3.39,1.03-3.31.56-3.39-1.77-5.87-5.58-4.43-3.31-2.07-1.42-2.36-.47-2.01-2.18-7.73-2.83-2.54-4.16-2.95-3.78-3.01-1.42-1.98-1.77-6.23-2.27-4.46-3.22-3.48-3.78-3.87-1.8-4.46-.94-2.92.21-4.34v-3.87l.56-1.42,3.31,2.54,3.22,5.84,4.52,8.32,2.75,4.81,5.11,6.91,2.83,1.98,3.31-.38,3.78,1.98,3.31,3.51,1.33,2.92,2.83,1.98,2.72,5.87.86,7.26.86,1.51,3.31,4.34,1.33,4.93h2.83l6.23-2.75,3.39.56,2.27,2.92-1.98,2.95-4.34,3.19-1.06,2.95,2.36,1.03,3.31.47,3.31,4.9-1.51,2.45-1.98,3.31.38,3.42,4.63,8.29.94,1.42,3.1,7.38,4.25,5.37,4.55,7.38,3.22,4.9,1.42,2.45-.59,2.83-4.25-1.03-3.78-2.92-2.72-3.96-2.75-5.87-2.75-5.37-2.75-3.39-3.39-1.06-1.89-.09-5.28,4.72,6.88,8.88,3.31,4.34,3.69,3.98,1.8,4.43,3.22,5.37,5.11,8.32,6.88,9.83,5.11,9.71,5.58,6.91,4.63,6.43,3.66,3.96,4.16,7.85,2.36-1.42-.74-7.76-3.31-3.48-2.75-5.4-2.27-3.87-2.75-5.37-2.83-3.04-2.27-3.87-2.72-2.92-4.25-3.48-1.89-2.01-.86-1.98.47-2.83,4.34-1.42,3.31,1.62,3.22,4.34,1.8,4.43,2.36,3.87,1.77,3.42,1.89.09,3.42-1.42-.86-4.81-.86-2.95-1.8-5.37-1.8-8.21.21-5.79-.38-4.34,1.51-3.39,1.51-2.83,4.72-1.8,4.37-1.89,2.92-.86,3.31-1.42,3.39-1.42,3.31.59,1.42,1.51v2.45l-3.87,1.8-6.35,3.22-5.28,2.83-2.92,3.31-1.59,6.7.83,6.32,2.66,9.74,1.33,4.81,1.42,2.92,2.27,2.45,1.42,1.53,2.83,2.45,2.72,4.43,3.31,3.04,3.69,4.34,2.83,3.01,4.16,3.98,2.45-4.84.68-7.64,2.54-4.34,3.31-.38,2.75,3.87,1.33,5.87-.12,3.87-4.34,1.8,1.33,4.9.94,3.39,3.69,4.46,3.31-.94,5.28.65,5.67,3.04,2.83-.47,1.59-5.31,1.53-7.17,1.51-3.31,1.51-2.45,1.98-2.36,2.36,1.03.86,1.98-1.03,6.26-1.15,5.28.47,2.45,3.31,1.03,4.72,3.04,1.42,1.42,5.2,1.59,4.25-1.33,4.93-3.78,3.01-8.68,2.57-6.14,3.87-4.81,2.45-.38,5.2,2.54,3.69,2.45,1.89,3.98,1.8,4.81-2.01,3.31h-2.92l-4.25-1.12-2.36.94.38,5.84.38,2.36-1.98,1.89-2.01,3.39,2.27,7.29,2.27,4.34,2.36,3.01,5.2-.38,8.21-2.24,4.37-4.72.65-8.24-1.33-6.23-1.21-7.38-.77-6.7-.94-3.39.09-3.39-.38-4.34-.83-2.95-.47-3.39-.77-6.32.09-5.76-1.8-3.9-.74-8.77-2.27-4.34-2.36-3.98-2.75-5.37-1.33-4.81-.74-7.76-1.24-10.18-.38-2.95-1.77-5.28-4.07-9.36-3.69-5.84-3.78-4.43-2.75-4.37-1.3-3.96-.86-5.76-.38-3.39-3.31-3.98-5.2-1.03-3.31-.09-3.31-2.45-4.16-5.49-2.27-4.34-6.23-2.1-8.03-3.1-6.61-1.62-5.2-3.48-2.75-5.37-.74-6.73.56-4.34.09-3.87-2.27-4.9-6.61-5.02-1.89-1.42-3.31-2.07-8.5-3.51-3.66-3.01-1.42-1.98.47-1.89.56-2.48-.47-1.89-.86-2.45-.94-2.45-.38-3.39.09-2.36v-2.45l3.9-2.75,3.31,2.45.83,3.87,2.75,4.93,2.27,8.21,2.75,4.9,2.83.59,6.7.09,4.72,1.12,4.25,3.98,2.27,4.34,2.75,5.84,1.77,4.46-1.51,3.78-.56,3.39.38,3.87.47,2.45,4.25,1.03,5.67,3.51,5.2,2.54,5.11,2.57,4.81.56,6.23-1.33,4.34-3.31.56-5.76.68-5.28.56-3.42,2.36-1.3,5.2,3.48,5.11,4.9,2.36,1.06,1.42,2.92-1.98,3.78-5.31-.09-2.45,3.31.3,7.26,1.42,2.45,2.83,2.92,5.67-.35,2.83.09,2.36,1.51-.56,4.34-3.42,3.78-1.03,4.81,2.75,3.98,5.2,3.48,5.67,1.98,6.61,1.62,4.25,1.59,4.81.56,4.34-1.3.94-2.95-1.77-3.87-3.78-.56-4.84.86-3.78-.09-1.42-2.48.12-3.87,1.98-1.89,4.25.09,4.81.59,6.7-1.24,7.17-1.8,7.2-3.22,1.03-.94-1.42-4.34-.86-4.9-.3-4.81.47-2.36,3.31.56,6.26-1.33,3.87.09,1.33,4.34.83,2.95,1.89,1.51,9.09-1.24,5.28-.86,5.2.59,6.61,3.01,11.04-.65,3.87-3.31,1.06-3.42,1.51-4.25,1.98-2.83,5.67,1.54,5.2,1.12,3.87-.94,5.28-1.33,7.08,2.18,3.9-1.42,1.98-2.36,1.51-3.31,1.42-2.92,2.45-1.33,4.81-2.83,2.95-1.89,2.92-2.83,1.03-3.78,1.51-5.28,2.45-1.89,2.57-5.79,1.98-6.23,2.07-5.2,1.53-4.34-.38-3.87-1.8-7.76-1.33-2.45-1.8-4.9-.94-1.42-.35-2.45,1.89-2.36,2.92-2.36,1.98-1.89,2.45-5.2h3.39l2.27,4.43-.18,8.68-.68,8.71-2.07,7.17-.18,6.79-1.06,4.25,1.89.59,6.26-1.8,3.31,2.45-1.06,3.87-4.81,3.78-3.39,2.27-2.54,3.87v3.31l-.12,2.92-3.39.94-1.89.86-4.81,2.83-2.92,2.36,2.27,4.81,2.24,3.51,2.75,6.79-1.51,5.28-4.43,3.78-6.82,5.11-13.4,5.49-8.59-.68-8.62.3-4.81,2.27-4.34,2.83-11.98,4.04-2.48.94-6.79,5.11-10.57,4.16-12.01,5.49-5.37,4.25-1.51,6.23.65,12.54,1.71,6.82v1.03l2.72,4.81,4.72,4.46,6.52,4.04,7.56,2.57,12.37,1.77,6.61,5.49,2.18,7.73.38,6.35-1.15,8.12-1.98,3.87-3.01,6.14-.68,8.24.86,3.39,2.27,3.96.94,2.92,1.33,5.31-.21,5.84-.09,5.28-1.59,7.64-1.15,6.82-3.48,6.14-3.39,5.76-1.62,4.81-1.42,2.83-1.68,9.65-2.18,11.51-2.75,16.91-3.01,8.59-3.48,5.76-2.57,6.7-1.03,5.31,1.8,2.45,2.36,3.87,1.33,5.84.74,6.35-1.51,3.31-2.45,1.89-4.34,3.31,1.77,4.81,4.25,1.59-.94,2.36,1.8,3.42,1.33,3.39,1.33,4.43-1.51,4.25-2.36.94-1.53,2.36-.09,3.39,2.75,4.93,7.94,9.83,1.8,2.45,4.72,4.99,4.6,5.4.86,4.81.38,4.9.86,3.9,2.27,3.87,2.24,6.32-.18,8.24-.09,5.37,2.27,3.39-1.06,3.87-1.98,4.25-2.54,5.31-2.92,5.28-2.48,2.83-5.76.86-2.36,1.89-1.03,2.83,2.27,5.37,3.22,3.96,2.63,8.24.86,5.37.47,3.39,1.42.47,4.72-1.3,2.92-2.36,2.45-1.42,3.78,1.12,2.75,4.81-.09,4.34.86,3.98-1.03,2.36-1.53,4.34-.09,2.83,1.42,1.51,4.34-.38,4.37-2.24,2.36-2.48,3.39.12,2.45-1.89,4.72-1.33,3.39-.38,1.89-2.36,5.28-1.8,8.15-.86,1.98-1.89,1.51-5.28-.38-3.87.47-.94,3.39.09,1.71,6.35-2.45,5.76-2.45,2.36-.47,1.89,3.78,1.03,8.03.77,5.76.09,1.98-5.76,1.03-3.9,3.39-1.77,4.84-.38,6.14,1.12,4.25,1.51,4.25.12,2.92-2.36,1.51-4.37.65-6.7,2.01-4.81,2.92-3.78,2.45-3.31,1.12-4.81.12-4.81,1.03-3.42,1.51-4.34,2.45-4.25,1.03-1.42v-1.98l1.06-4.81,1.98-2.83,4.81-3.22,4.9-4.72,2.01-5.28-2.27-3.98-3.69-4.9-.77-6.79v-3.9l1.15-4.25,1.42-2.92,2.92.09,2.83-.94,2.45-3.31.68-6.23,1.51-3.39,2.36-.86,3.39-1.89,3.87-3.31-.38-1.89v-1.98l-.94-1.89.12-1.03-.47-1.89.56-2.92,4.72,1.59,3.31.56,4.81-1.42,6.23-3.69,2.92-3.78,3.98-3.31,3.39-3.31,4.81-2.24,11.16-8.03,2.45-4.25,4.34-1.8,6.23-.86,6.26-1.8,4.25-.38,3.87-1.77,4.81-2.36,5.28-2.27,4.34-.38,1.42-.47,1.42-.94,9.65-1.24,6.23-4.6,4.25,2.45,7.65.18-4.43,5.2-6.7,2.75-9.65,2.27-4.25,1.33-4.9,2.72-2.83.94-2.92.86-2.83,2.36-3.51,3.78-8.12,2.75-3.39,2.36-11.72,10.3-6.79,6.14-6.26,4.25-7.26,4.16-6.32,4.13-4.84,4.25-6.32,5.67-3.01,7.2-3.98,5.2-1.51,6.32-1.71,11.51-1.3,13.05-2.57,10.1-2.54,7.2-4.07,8.12-5.84,7.56-7.76,4.72-4.81,2.27-1.98,4.81-2.54,7.17-.59,3.87-.09,2.83,1.89,2.45.38,3.98-2.92,4.25-3.87-.56-6.14-1.15-3.9,1.89-2.92,4.25-3.39,3.31-7.64,3.22-8.32,5.58-4.81,4.72-3.87,3.78-3.87,2.83-2.83-1.51-3.78-3.98-4.16-4.9-3.69-3.98-3.78-1.03-7.26,2.27-2.95,3.31-1.98,4.72.86,2.92,1.89,2.45,2.36,1.53,1.89,1.98,1.33,1.03,3.31,1.03v3.39l2.83,1.54.86,3.87-2.95,2.83-5.76-.09-.86-4.93-3.78-.09-1.98,1.89-1.51,3.87v1.89l1.33,2.92,3.31,1.06,4.34.09,4.25,1.59,5.67.09,4.34.59,5.67.18,4.72,1.51,11.33,5.67,9.45,1.62,4.81-1.33,4.37-2.83,1.77,3.96v2.92l.86,2.36,2.83,2.1,2.36-1.89,3.39-1.42,1.42,1.98-.65,5.28-1.03,3.87,1.42,3.42,3.69,3.96,5.2,2.54,2.36.59,1.42.47.56-1.42v-1.53l-1.42-2.92-.77-6.23.09-3.87,2.36-1.89,5.31.09,4.99,8.32.86,6.79.86,2.92,4.25,3.98,4.25,1.12,4.72,1.98,2.83,1.51,4.72,1.15,1.03-3.39,1.98-3.78,6.7-4.25,2.01-1.89-.86-3.42-4.63-5.37-2.36-2.54-3.78-3.42-2.75-4.43-.74-6.32,1.12-10.12.56-1.42,1.42-1.89,4.25,2.92.77,8.8,1.8,4.34,4.13,6.43,2.75,2.92,1.42,3.39.77,5.87,2.36,3.96,3.78.56,2.36-.47,3.87-.86,1.42-.47,1.89,1.53-1.51,2.83-1.51,4.34-.21,5.28,1.33,5.84,1.8,4.46,2.36,3.39,2.75,3.01,1.42,1.89-2.01,2.95-1.98,3.31-.56,1.89.47,2.92,1.89,1.51-1.03,3.39-.56,4.25,3.57,6.91,1.33,5.84.86,5.87,1.21,6.79,1.33,5.76.86,5.4.86,3.39.38,4.34-.59,3.39,1.8,3.39-1.03,6.35-3.87.86-4.72-1.62.09-1.42-.94-1.51-1.42-1.42-.38-2.45-.47-2.92-1.42-1.53-.38-.94h-1.42l-3.39,1.33-3.39,2.83.38,2.45,1.42,3.42,2.75,5.84,2.15,4.9,4.55,11.72.47,1.98,1.21,5.79,1.8,6.88,6.35,14.17,1.21,9.65,3.22,4.43,4.34-2.27,4.72.09,8.03,4.07,5.67,2.07-3.39,2.83-5.2-2.07-4.72-2.07-4.72-.59-3.39,2.83,5.84,14.17.86,2.95,2.54,16.06,3.13,7.73-.77,13.14.3,5.76.38,5.37,2.27,5.4,2.72,5.37-2.45,4.25-.56,3.39-.18,6.26-.21,9.24.38,6.23.38,4.46.86,3.87,1.42,1.51,4.72,1.51-.12,2.48-3.87,2.83-.09,2.36.86,5.37.18,12.57,1.71,8.77,1.33,4.81,1.59,14.08,1.24,8.32,1.42,20.4,2.45-.94,2.45-4.34,3.78.09,2.92-1.33,1.03-5.84-.83-4.34-3.51-11.25.09-5.76-2.36-3.04,1.62-5.76,1.98-2.36,3.31-.86,2.36,2.92-.86,14.55,1.89.94,1.42.56,1.8,6.35-.56,3.87-.68,4.81.86,6.35.86,4.34-1.51,2.92.38,3.87-.12,3.39-1.03,5.79-2.45,1.42-3.78-1.15-.38-1.42,1.15-8.21-.38-4.34-1.42-1.53-4.34,1.8-6.26,3.78,2.18,7.76,4.16,7.35,2.63,5.96,4.55,11.72,3.13,10.18,14.99,28.43,8.03,22.49,3.78,3.01,2.36-1.42-1.3-4.81-3.13-8.29-2.75-4.46.94-1.42,6.14,1.62,8.59.65,3.69,3.48,4.25,2.48,3.13,7.82,1.33,4.93,2.83,2.45,7.08,1.12,2.36,1.03-1.53,2.95-5.28,3.66-4.9,5.79-.56,3.31,6.23,1.12,3.78.09-.47-.94-3.22-3.96v-1.51l3.39-2.27,6.7-.86,5.2,1.12,2.75,4.46-1.03,2.83-6.7,1.8-.94,2.36,5.58,4.99,3.31.09,2.92-1.89,2.54-7.17,2.45-3.31,2.83,1.03,1.33,2.48-3.01,5.67,1.89,3.01,13.31-.65,3.78-.38,1.98-3.39-1.21-4.93,2.36-.86,5.67,2.57.47-2.92,2.45-1.89,6.61,4.52.86,3.98-1.62,4.72-3.78,1.89-3.01,6.23-.09,2.92-1.42,1.42-2.01-.09-2.72-3.51-4.63-4.9-2.83-.56-6.23,1.33-8.5-1.15-3.9,1.8-.47,1.89,1.33,1.51,5.2,2.57,1.89,1.98,1.71,7.35-2.83.38-4.25-2.54-8.88-7.94-5.11-5.49-5.11-3.01-2.45-.09-3.39,2.83-1.89-.47-.86-1.98,1.03-4.84-1.3-1.98h-2.01l-2.83,1.33-1.42-.47-1.89-1.03-5.37,4.25-5.76,5.67-3.98,3.78.38,4.34,1.42,3.39,7,6.05,6.05,5.96,2.63,8.29,1.71,7.76,1.71,7.82-.12,7.76,2.27,1.51,13.43-1.62.56-5.37,4.25.65.47,1.42,2.27,2.48,4.34,1.12,7.08-.38,5.84-5.67-3.31-2.92-4.72,1.33-2.63-7.85,1.03-4.34,1.51-4.34,3.78-1.33,5.76-.38,2.75,3.51-.56,4.81-.56,3.39,2.83,3.39,3.1,8.32-2.07,4.81-7.65,2.74-.47,1.89,5.67,1.12,7.08.21,10.09-3.6,6.14.09,2.83,2.45-1.51,4.37,3.69,5.93,2.83,1.03,1.51-3.39,3.78-1.8,1.12-6.32,1.98-4.72-1.77-4.9-.86-4.93h-2.36l-3.87,3.31-2.83-.56-2.83.38-5.87,4.25-8.5.27-1.42-1.51.56-3.87-2.24-6.79,2.54-5.79,4.25.59,2.75,3.96,2.36,2.92,2.83,1.03,2.83.12,5.28-2.27,4.81-1.89.09-3.87-4.72-3.04-3.31-.56-1.77-4.81,2.92-2.36,1.89-.47,6.61.65,5.28-1.33,2.27,4.93-4.46,7.65-1.03,4.25,2.66,6.91,2.45-.94,3.48-9.09,3.31,2.48,3.78.56-.56,3.87-4.34,2.83-2.45,3.78-1.51,3.87-1.06,3.87,1.8,4.37,4.25,1.12,2.92-3.87,2.48-3.78,1.03-5.28,2.07-4.84,2.45-4.25,5.79-.83,11.33,2.15.56-2.36-9.45-3.69-2.83-3.39,1.03-2.92,5.76.65,4.34-3.31,3.31.59-1.03,3.39.86,5.28,7.08-.3,3.31,1.53,3.39-2.83,6.23-1.24,1.89,1.51-1.03,1.89-1.51,2.83-.56,4.34.38,3.42,1.89,3.48,1.3,3.39-1.51,3.78-3.31-1.03-3.31-2.45-2.27-2.45-3.39-.12-3.22-3.96-2.83-1.51-3.31,1.33-3.31-.59-2.92,1.42h-.94l-1.89-1.51-3.31-.09-1.51,1.89.47,2.45,1.42,1.51-.18,5.79-2.57,6.23.94,1.98,2.83,1.51,3.69,3.04,4.81-1.33,1.51-2.45-2.36-2.48-.35-1.98,3.78-1.33,2.83,3.51,2.24,3.39,4.84-1.33,4.6,2.57,2.83,1.03,6.82-3.22,2.75,1.51,1.42,3.39,1.89,1.06,1.89-2.83-.86-3.98-4.16-2.45-1.42-1.03.56-4.34,2.36-1.89,3.31,1.03,4.25,3.48.38,4.34-1.12,7.29,3.78,2.07-.59,3.78.38,3.39-4.72-.09-1.03,3.39-3.39,2.36-1.03,2.83.83,3.9,3.22,5.46,4.25,3.51,2.83.56,1.89-.94.56-2.45-2.36-2.95-2.24-1.98-.47-1.98,2.45-1.89,2.83-2.36,1.03-2.83.09-3.39,2.45-3.31,1.89-.94,1.42,1.03,2.36,1.51,3.78.09.94,1.42-.56,2.48-1.89,1.89-.56,1.42-1.42.47-2.83-2.1h-1.42l-.94,2.92-1.98,2.83.38,2.01.94.94,1.89.56v.94l-.12,4.34-1.98,3.87-1.51,2.36-.09,2.92.47,1.42,1.89,1.53,2.36-1.42,4.43-4.25,3.31-2.36,3.87-.38.94-1.42-.83-2.45-2.83-2.48-1.33-1.98.94-1.89,1.03-2.92,1.03-4.81,1.98-2.83,1.89-.47.94.56-.56,3.31-1.03,3.39.47,1.98,2.36,2.01,1.33,1.51.47,1.89-.56,3.87-2.48,4.81-1.03,2.36.47,1.51,1.89.47,2.92-2.83,1.06-5.76,1.89-.94.94,1.51-.59,4.37-.09,4.81-1.98,2.83-1.51,1.98.94,2.36,2.27,3.01,2.36,1.53,2.36-.94,1.98-1.42-.38-4.37.56-2.45,1.42-.38,1.8,2.48.86,4.34-.56,3.39-2.36,2.36-2.01,1.89-.56,2.45,3.31.56,3.87-.47,2.48-3.31.09-3.39-.38-4.81-3.22-4.9-.86-3.98.59-2.83,2.36-2.83,2.45-.94.94,1.03.86,4.37-1.06,1.89-1.03,2.45,1.89,3.87,1.33,1.98.38,4.81.47,1.53,2.36,1.03,2.83-1.89,1.03-2.92-.86-2.36-1.42-2.01-.38-2.45.47-2.92.12-3.39,1.03-2.36,1.42-1.89,1.03-2.36,2.45-.94h1.89l.86,2.92-1.03,3.39-1.51,3.87-1.53,2.36v.94l.47,1.53,2.36.47,1.89-.38.94-1.42.59-.94.94-1.51,1.89.09,2.36.56,2.36,1.98.47,1.42-1.06,1.98-.94,1.42.86,1.89,5.2,4.07,2.27,1.98.47,1.98-1.03,1.89-2.83,1.89-.09,1.42.47,2.01-.12,2.36-1.42,1.89-2.45,2.36-.09,1.51,1.42.47,3.87.09,1.89.56,1.42-.47.56-2.36-.94-3.39,1.53-3.87h1.42l1.42,1.51.35,3.87,1.42,1.98,3.31.12,4.37-2.83,1.03-1.42v-1.89l2.45-1.89,2.36-2.36.56-2.01-1.89-1.51-2.83.47-1.89-.56-1.89-1.98-2.75-1.98-3.31-1.06-3.39-.09-3.22-1.98-.47-2.45.59-2.45,2.83-.86,2.83,1.98,2.72,3.48,3.42-.47,3.78-.83,4.25,1.59,1.42,1.42.83,1.98.94.56,2.1-4.81,5.28-4.72,4.34-2.83,3.87-.38,2.83.59,1.8,1.98.94,1.98-.56,2.83-3.39,2.83-1.98,3.39-2.01,2.83-2.36.94-1.42-1.51,2.48-2.83,1.51-3.87-.94-1.51-2.83.47-2.45,2.36-2.83,2.36-1.06,3.31,1.33,2.92,3.78,1.59,5.2.09,2.92-2.36,1.53-3.31,3.39-1.42,4.25,1.15,3.31,1.03,2.75,2.45,3.31,2.57,1.89-.94-.38-4.37-.86-2.92-4.25-2.54-4.16-5.96-3.69-3.48-.35-4.34-2.75-2.48-6.7-1.59-7.56.77-3.42,1.89-1.51,2.36-1.42.47-3.31-2.1-4.25.38-2.83-1.98-2.83-1.51-.86-3.42-.35-2.45-2.36-1.98-1.33-1.98-1.98-.09-2.27-1.53-1.89-2.45-5.11-3.48-1.51.47-.94,1.89-.56,2.36-1.42.94-2.95.94-.47,1.42-.09,1.98-3.78-.09-.86-1.98.94-2.95.59-2.83-1.8-1.98-2.36-.56-1.98.47-1.89.38-2.36-1.98-3.31-1.53-6.05-3.57-4.72-.56-.94-1.53,1.03-1.89.47-2.36-1.33-3.01-1.89-.94-2.36-1.03-.86-2.45-2.36-2.48-3.31-.56-2.36.86-3.48,3.78-2.36,2.45-2.92,3.31-2.92.38-2.36-1.98-1.33-3.39-3.31-1.06-4.63-5.46.09-2.45.56-2.83-1.3-4.46-4.25-3.48-2.75-2.92-1.33-4.46.47-2.83,2.45-1.42,6.61.68,3.39-.47,4.25,1.59,2.75,2.92-.09,3.87-2.54,6.73-1.06,4.81.86,2.45,1.98.56,2.36-2.36,4.93-4.72,5.28-1.8,1.89,1.06,2.27,2.92,3.31.09,6.7-.38,4.25,1.15,2.27,2.45-.09,4.81-1.53,2.92-.47,2.36,1.8,2.92,2.36.59,3.39-2.36,2.83-.86,8.62.18,2.92-1.89,2.36-1.8,5.28.12,2.75,1.51,3.22,5.37,2.72,4.93,1.33,3.96,3.78,1.03,1.42,2.92,2.75,3.98,3.78.09,2.83.09,2.83,3.39,2.83,1.06,2.83-.38,1.98-1.89,8.12-1.24,8.03,1.15,5.2,1.59,4.16,3.96,2.75,3.98,3.31,1.03,3.39-.94,3.31.09,6.14,1.62,2.66,8.29,3.69,7.38,7.35,7.94,7.94,7.44,5.58,4.55.47,1.89-.09,4.43-.21,3.9,1.89,1.51h2.83l1.51-1.89.59-3.39.56-3.78-.38-2.48,1.42-.47,2.83,1.06,2.36.09,1.42-.47.94,1.51-.09,3.87.74,7.29,2.75,6.32.38,1.51,4.16,7.38,4.52,5.84,6.14,3.13,4.72,1.03.94,1.03-2.36.94-5.28.77-2.92,2.36-3.31-.09-3.31-1.06-5.67.38-3.39.86-2.36,1.42-6.23-1.12-2.36.94-2.01,2.36-3.39,2.83-2.92,2.83-.56,3.87,4.81.56,4.34-3.78,3.39-1.8,2.27,1.98,2.75,6.35,1.42-1.89,5.84-4.72,1.33,2.92,1.89,3.48,3.22,2.95,2.75,3.01-1.62,8.21-4.72-1.12-3.39,2.36-2.45,5.76,4.25,1.51,1.33,4.46-1.62,5.28,1.89,1.98,4.37-2.83,1.89.56-.12,1.42-1.51,5.31-1.51,2.45-3.78-.56-3.22-3.04-3.39,2.36,3.22,3.98,6.14,1.59,3.78,1.03,3.78,2.57,5.2-.86,4.81-.38,3.69,3.01.38,4.37,2.24,6.32,6.61,1.59,1.24,5.87,2.36,1.51,1.8,4.43,4.34-4.25.65-4.34,1.89-2.83,1.15-3.87,2.36.09,2.36-2.36,1.12-7.26-2.75-3.98-2.24-3.48.09-4.81,3.01-4.72,4.93-6.7,6.79-5.67,2.36-1.8-.86-3.51-3.31-2.45-2.75-2.54-2.36.47-3.48,3.31-2.36.38-.38-4.37-.38-3.39,1.06-3.39,3.39-4.25,3.87-1.33,3.31,1.98,6.32,10.86,3.31,3.51,2.83-.47,5.2.18,1.06-1.42-1.89-3.01-2.66-4.93v-1.89l-4.16-5.93-.86-2.92,2.01-5.31,2.45-1.89,1.89.59,4.25,1.03,1.42,1.51.27,7.73.3,7.29-.09,2.45.94.94.94-.38,1.03-1.98,2.83.09,4.25,1.62,1.89,1.42.77,5.84.94,1.03,3.78,1.98,3.66,2.57,2.01-.94.56-3.39,1.89-.38,4.63,3.48,1.3,4.93,1.89,1.51h1.89l2.36,1.03,1.89,2.45,1.8,4.46,3.22,2.92.38,2.45-1.89,2.36-.09,1.98,4.72,2.1,4.25,2.45.94-.94.56-2.83,2.45-2.83,3.31.09,1.8,2.45v2.92l-3.98,3.78-.47,1.42.38,1.89.94,1.06,3.31.09,2.92-1.42.94.56.94,1.89-.18,4.43.86,4.37,3.22,3.96,2.36,2.45.35,2.92-1.89,1.89-1.98.47-3.78,1.33-2.45.94-.47,1.42,2.27,2.92,1.89,2.57v1.42l-1.98.47-6.52-2.66-6.14-2.54.56-5.28,1.59-5.87-1.42-2.92-6.61-1.12-2.24-3.42.09-5.84-1.8-4.43-2.27-3.9-3.22-2.07-2.92-.09-4.25,1.42-5.28,2.27-6.23,2.24-5.4,4.72-2.36,1.89-1.51.94-8.21,5.58-7.65,3.69-7.2,2.27-3.87,2.27-1.03,3.39-1.51,3.39-4.93,4.72-3.87,4.25,7.17-.38,2.27,1.62,1.42,2.92-5.37,4.72-.56,3.31,1.89,1.03,7.26-4.63,6.61-.86.86,7.29-1.98,2.45-3.98,5.67-1.51,3.39-.56,2.83.47,2.45,3.31.59,3.87-2.36,2.45-2.83,1.89-.38,3.22,2.92,4.72,3.01,1.33,3.98,1.33,2.92,3.66,4.43,2.36,2.01.86,3.48-.56,5.28-1.98,2.83.94,1.98,4.16,3.04,1.42,2.45,1.77,2.92,2.36,1.98-.09,2.95.86,4.9-3.87,2.75.27,4.9,3.42-.38,3.78.59,3.66,4.9-2.92,3.31-.09,1.51,3.78,2.45,5.11,4.07,2.36,2.45-.09,2.92-5.67-.65-3.31-.09-2.95.47-3.31.38.86,4.9,3.78,1.51-.18,4.81,3.31,1.62-1.03,6.23,5.67,1.12,3.66,2.57,5.4-7.17,2.45.09h2.83l3.31.09,5.28-2.27,4.72-.86,8.12.68,10.98-1.62,6.7-3.66,2.54-5.31,1.51-4.81,1.53-1.42,5.67-1.33,3.48-5.28,1.12-7.65,1.53-4.81,2.07-4.34.94-2.95,2.66-8.12,10.01-3.57,6.7-2.75,6.61,1.59,6.7.21,1.33,2.45-4.81,3.22-1.98,2.36-4.72.35h-.94l-5.67-1.59-2.01,1.42-1.42,1.42.38,3.39,5.76.09,8.5.77,8.88,5.11-.94,1.89-3.87,1.33-3.39,1.42,2.27,6.79.35,3.96-8.68,4.55-4.72-2.45-3.78-1.15.09-2.36-1.42-1.98,1.98-1.89,3.78.56,3.9-.83,2.36-1.89-.38-1.53-5.28-.09-11.25-4.16-2.92,1.8,1.21,8.32.3,9.24,1.21,5.87-.56,2.36h-1.89l-2.75-2.1-8.03-1.12-2.54,5.28-.09,3.87.38,4.37-9.56,1.68-8.59-1.21-8.03,1.3-7.82,8.03-1.53,4.84-1.98,3.31-3.87.83-.47,1.53-2.07,6.23-4.72-.68-1.06,2.95-1.03,4.81-6.41,8.59,4.43,12.66,1.42,1.51,7.85,10.39,7.35,10.39,7.29,9.92,11.51-3.6,2.45-3.87,3.04-4.25,1.89-.47.94,1.03,1.21,5.87,4.25,1.03,4.25,1.59-4.9,5.2-4.72-1.12-3.78.38-1.42,1.51-3.22,11.04,3.78,4.46,1.71,4.9,4.13,6.43,5.67,1.12,2.36,2.45-2.45,1.42-3.31.38-.09,1.89,3.22,5.96,3.22,4.9,2.72,4.46-.18,5.84,5.2,3.96,4.72.21-.09,1.42,1.8,4.43-6.14,1.24-2.01,2.92-.65,7.26-.65,7.2,2.63,8.86,6.61,1.62,5.67.09,5.2.65,3.98-4.25,7.08,1.15,4.72,1.59,4.25.56,5.2.12,4.25.65,2.36,2.45,2.72,1.98,5.2,2.57-3.87,2.83-1.51,3.39,3.22,3.48,11.9.3,4.25,1.51,3.69,4.07,5.58,3.01,4.72,2.57,4.6,4.43,1.8,3.48,1.89,2.95.86,4.43,6.52,3.01,7.64-.27,2.36-.86,1.98-1.89,1.8,1.98,1.33,4.93,1.89,1.98,5.28-4.25,3.39-3.31,5.76-.86,3.78-1.33,1.53-3.87,3.48-3.78,2.83.56,4.25,1.03,8.5,1.71,3.31,1.03-.18,4.93-.68,7.73,4.72.56,4.34-.38,5.58,2.1,1.8,4.43-2.54,8.24-3.13,9.06,3.87.09,7.56.77,1.42,1.51,2.1,8.21,1.3,5.4,2.27,3.01,3.31,3.96,1.8,3.42,1.42.09,3.78.09,1.98-2.36,2.92-3.31,2.36.47.38,3.39-1.51,4.81.38,2.95-.09,3.39,3.66,4.52,3.69,4.46,4.81-2.83,4.84-4.25,2.83,1.59.83,3.87-1.98,2.83v2.95l3.22,1.03,2.36,2.54,1.33,4.34-.56,4.37-.68,5.37-3.01,6.7-4.81,1.8-4.37,4.25-3.01,8.21.3,5.79-3.9,3.31-6.7,2.72-7.65,1.33-8.03-.74-5.2-1.15-4.34,2.83-1.03,5.76-3.9.47-5.08-4.52-8.5-.3-4.72-3.01-2.27-1.98-7.65,1.21-8.03-1.59-2.75-3.98-2.75-4.43-3.31-2.54-6.05-3.51-10.39-2.74-12.84-.27-5.11-5.02-7.47-4.16-4.6-3.96-5.11-3.48-3.69-5.49-2.18-9.27,2.18-11.13-7-5.02-4.81,2.83-4.34,1.33-2.75-4.43,1.03-3.9,6.82-4.13-1.71-6.91-10.21-12.84-5.67-1.15-7.44-5.55,1.59-5.79-6.14-2.54-3.69-2.07-1.42-3.42-1.8-3.96-2.72-1.98-5.31-.68-6.14.86-5.76,1.8-4.34,2.27-3.48,6.7-2.18,10.69-6.91,11.42-.94,1.98-1.12,5.76-.77,9.74,3.31,1.51.38,4.34-3.39,2.36-3.78.86-1.59,8.21-1.71,8.71-2.07,7.26-.59,6.82-.65,6.23.18,10.18,1.33,4.46,2.83,2.92,2.75,2.54,17.3,32.5,2.36-.94,1.98-4.34,5.11,7.47,3.57,7.35,9.36,4.63,4.63,5.96,24.74,16.62,6.14,2.66,2.27,2.92-.56,3.87-1.51,1.89-2.83.47-7.56-1.71-8.41-4.52-6.52-6.52-6.43-7.94-13.22-5.19-6.32-9.45-.3-8.21-1.89-1.03-2.45,3.39.94,20.87.86,1.98,4.72,1.51,6.14.21,6.61,2.63,10.21,8.5,6.02,6.91,4.16,4.07,4.63,4.43,1.8,4.9,8.29,9.45,7.08-.27,13.05-7.47,11.9-3.6,14.38-3.48,6.7-.77,10.3,3.13,9.45,2.27,10.86,2.15,8.21-4.13,9.15-5.58,8.15-2.18,8.03.68,4.81-1.8,10.39,1.68,6.7-3.19,8.5.74,3.39-3.39,10.12-3.6,14.17.86,2.92-1.33.09-4.9-.77-7.73,1.15-5.87v-2.83l2.92-2.36,4.81-1.33,5.67,1.06,2.92-2.83,8.32-9.45,8.5-.77,5.76-.3,2.83-.47,16.06,2.83,4.63,4.07,4.16,3.96,5.11,7,9.06-3.69,4.04-8.12-1.3-3.96-2.75-3.98-2.36-2.45-.38-2.45,1.89-.94,8.03,2.18,9.45.74,1.89.09-1.51,4.25-3.98,5.79-.09,6.79-.38,12.66,1.89,2.92,4.37-4.72,2.45-4.81,3.39-3.31,5.28-.38,6.52,3.13,1.33,4.9-2.1,7.17-1.51,3.87,2.27,3.51,3.87-1.89,2.92-4.25,2.1-5.28-1.8-5.4.56-3.87.56-1.98,4.25.18,5.2,2.1.21,8.68,5.2,2.07,3.69,5.02,4.13,4.43,8.97.3,9.09-2.18,1.12-4.34-3.78-1.59-6.14-2.57-6.14.3-1.8-4.43-3.78-2.01-.38-4.9,2.95-1.89,8.38,4.16,2.95-2.36,3.39-3.78,4.72,1.59-.56,4.81,1.77,2.48,10.77,5.67,1.8,4.43.47,2.36,1.8,2.54,2.83,1.06,1.98-4.37-1.24-6.32,2.83-1.42,3.42-2.27-1.8-4.9-.86-2.45.56-1.53,4.72-2.24,4.81-1.8,2.57-5.76,3.31-.86,1.89.47.65,10.18,1.51.12,4.46-8.62,5.67,2.57,2.27,2.45,6.61,1.71-2.1,6.23-5.84,7.08-6.23,2.75-2.95,3.87-.09,3.39,8.12-1.8,7.08.77,3.31-.94,2.1-4.81.56-6.26.65-6.79,3.51-6.23,5.37-3.78,5.2-.77,3.39-2.83-1.77-5.37-4.25-.68-3.78,1.42-5.31,2.75-5.76.38-3.78-1.12-3.31-.12-.38-4.34,1.06-3.39,6.32-4.16,1.98-3.39,2.83-.86,5.2,2.1,11.42-1.15,8.15-3.69,4.34-3.31,5.84-5.67,3.87-1.77,3.9-.86,1.77,3.39-.65,5.84-1.51,4.25-4.34,2.36-4.84,2.27-2.92,1.42-1.51,3.87,4.25,3.04,6.7-2.75,4.81-1.89,6.26-4.16,4.81-2.75,3.48-5.28,3.87-2.83,3.42-3.78.56-3.87,1.51-2.36,5.67.18,4.25,1.06,1.8,3.48-2.92,2.27-3.31-.09-.94,1.98-.59,2.36.38,1.98,3.78,2.54,4.72.59,3.78-.38,4.46-3.78,3.87-3.22.94-1.98-3.22-3.04-1.8-4.34.56-1.98,3.31.09,6.43,7.94,3.69,3.48,3.78,2.57,4.72.18,1.51-4.34-3.6-5.49-.94-1.98,1.06-2.36.47-2.45-5.58-2.54-3.78-.59-2.83-2.07.09-3.87-1.33-2.92-2.92,1.89-3.78,1.77-3.31-3.01-1.89-.47-3.96,5.67-3.9,2.83-5.2.38-4.25-.21-2.36-2.45.21-4.81,1.03-4.81,7.26-6.61-1.77-4.46,1.51-2.83,5.28-.83,3.78-.86,6.14,2.07,5.58,3.6,4.72,2.07,3.78.56,2.45-2.83-.86-4.9,3.87-.86,3.22,2.45.38,6.35-1.03,3.39,1.33,1.03,4.34-1.89,4.34-2.75,1.51-4.34,2.92-.38,5.11,3.98,4.72.18,3.39-2.36,3.42-1.33,3.31-.94,1.3,5.4-1.59,6.32.18,8.24-8.38-2.66-4.72-2.54-7.67,1.21-5.67-1.12-2.45,3.78-1.03,2.92,5.76-1.33,6.61-.27,6.14,1.59,3.22,5.02,2.27,3.39,1.8,6.88,2.24,2.95,2.01-3.31.94-1.42,2.92-.47,4.16,2.07,1.03-1.42,2.92-5.28,3.39-2.27,3.31.09,5.2.56,4.34-1.77,1.89,1.03-.18,6.32,2.36,2.92,3.69,3.98,11.98,13.02-1.98,3.31-1.03,3.9.27,3.87,1.89,1.51,5.31-.38,4.72-1.8,2.07-4.25-1.8-3.96-.47-2.45.56-1.89,2.01-4.34.56-2.95-.38-3.87-3.78-.56-4.81,2.27-1.8-1.98-3.31-2.57-2.27-1.98-1.89-2.45-1.33-4.46-.27-7.73-2.27-1.51-3.31-.56-6.23-.21-5.2.3-5.67-1.62-3.39,3.78-2.48,1.42-3.19-1.51-1.8-3.96-.47-2.92,5.28-.3,4.72,1.03,3.39-2.83,7.64-2.63,5.2.56.59-3.31,1.03-5.4,3.87.68,5.2-2.27,5.84-3.31,3.31.09,1.89.56,2.83,1.06-.56,3.39-3.01,3.78-4.25,1.33-2.92,2.36.35,2.45,4.25,1.59,6.14.68,5.2,1.03,1.8,5.37,1.33,4.46,4.16,3.01,3.31,2.07,1.21,6.35,1.8,5.37,1.71,5.87,3.22,3.01,4.72,1.59,5.76-.83,2.27,1.98,4.72,2.07.94,1.03,2.92-3.31,1.03-3.87,1.98-4.34.56-3.87.12-2.92-1.89-.94-4.25,2.24-4.84,1.33-4.72-1.59-4.13-2.1-2.36-2.45-1.33-3.39-1.33-4.9-.77-5.4-.35-5.37-1.33-1.89-3.39,1.8-3.42,1.42-2.24-2.57-.47-1.42-.38-1.98.56-2.92,1.42-1.42,2.92-1.33,1.51-3.39-1.89-1.51-6.14-.68-3.66-4.43,1.98-3.87,1.12-4.84,2.57-6.7,4.81-3.78.47-1.89,2.45-1.42,1.98-3.31,2.36-.47,1.42,2.45,3.22,1.15,2.92-.94,3.31-1.33,3.87-2.83,1.62-4.34-1.33-3.39-3.31-2.1-.77-5.76,2.01-2.92,3.39-3.78,2.83-1.89,4.81.18,3.78.09h.94l3.39-2.24.94-1.53,1.03-3.78-.35-2.45,1.03-1.89-.38-4.43,1.03-4.81.56-2.36,2.48-2.36,2.54-5.79,3.31-1.89,2.92-1.89,4.81-1.77,5.31-1.8,6.61-1.71,4.34.09,1.98-5.28,3.48-4.25.47-2.45,2.01-1.89,1.51-3.78,1.51-2.92,1.51-4.81,3.04-4.72,9.71-8.5,1.98-2.83.12-2.48,1.03-3.78.56-3.39.56-3.87,1.51-4.34-1.3-1.98-1.42-1.06h-1.42l-.68,7.29-4.25-1.15-3.78-2.54-3.22-4.9-3.19-2.01-2.75-4.43,1.98-2.92-.86-3.87.56-3.42,2.48-3.78-1.8-3.01.47-2.36.09-.94.56-3.39-.47-2.45-1.33-2.01-1.77-3.39,1.89-.94.94-.94h1.89l1.98-2.36,2.45-1.8-.38-3.48-4.25-.09-2.83-1.51-1.8-3.51-.47-2.36-.83-3.96-4.93-11.72,1.51-1.98-2.24-4.34-3.22-3.51-.38-4.43.65-4.81.59-4.84-.86-4.9.18-5.28.56-3.87-.83-2.48,3.48-7.17,1.89-.47.94-.94-.38-2.36-.86-3.48,1.06-2.36.94-1.89,1.51-2.36.09-3.98.56-3.78.56-3.39,1.06-1.89,1.98-2.45,1.42-.86,1.51-1.98.94-.86,4.25.56,2.36,1.06,1.89-.94.56-2.83-.38-2.95-.83-3.96,1.51-4.81,1.51-2.36,1.59-4.81.59-5.31,1.51-3.87,3.01-3.78.09-3.39-1.3-3.39-2.75-5.96-1.71-8.21-.74-5.87.18-7.73,1.03-3.39,1.51-4.34.68-4.37.94-1.89,1.98-.94,1.89-2.36,1.51-1.42-.38-4.81,1.53-2.36,2.36-.47,2.45-.86,1.42-.94.56-1.51.47-2.83,1.03-2.45,1.98-1.33,1.8.94,2.36,2.57.38,2.92.38,2.45,1.42.47.56-2.92,1.98-3.31,2.1-5.76,2.45-3.31,1.51-3.42,1.12-4.81,1.06-4.34.56-4.81,8.03-15.79,4.04-6.61,2.48-3.87,1.03-3.78-1.42-.56-4.81.86-5.67.27-1.89.47-1.89-.56-.47-1.42.09-2.92,1.42-.94,2.45-.94,5.67.18,3.31,1.06,3.78.09,1.98-1.33,1.62-6.32.09-3.9-.38-3.87.09-3.39.09-3.87,1.53-4.34,2.07-4.72,5.28-4.25,6.7-1.71,1.15-5.28,2.45-2.36,1.98-4.34,3.78-.38,3.31,1.03,2.92.09,3.78-2.27.59-2.92.09-.94,4.9-6.7,6.82-4.63,4.34-2.83,1.98-3.31.56-4.81,1.15-4.34,1.42-2.36.56-1.42.94-1.98-1.24-7.29-.27-4.34.09-20.87,1.98-5.28,3.13-8.15.56-4.81-1.24-7.82,1.15-7.2,5.55-11.98,2.1-4.81-.3-8.24,3.6-11.04,4.52-9.53,6.35-3.69,3.39-3.78,2.18-7.73,10.18-7.94,2.45-2.83,1.06-4.34.56-4.84-.21-8.68.12-3.87.09-4.93.18-6.23,1.15-4.81,2.45-4.81,2.92-1.33.86,2.45.38,3.87-.12,3.42-.56,4.34-.09,3.87-.18,4.81-.21,6.82.77,9.71-.09,3.31-1.15,4.34-1.51,4.84,1.12,9.24.38,4.34-1.12,5.87-1.98,5.67,5.84,12.37-1.12,3.78,1.77,4.9,2.75,6.43-1.03,1.89-1.89-.56-3.31.38-3.96,4.72-.59,2.92-.56,2.45.86,3.87-.56,2.36-.94,2.45-1.98,2.36-1.06,3.31-.56,2.48-.94,1.89.38,1.51.86,4.34.38,4.81-3.04,3.31-1.03,3.39-.56,3.9-1.51,4.81-.21,7.26,2.27,3.87-.65,5.87,3.1,6.32,2.36,2.57,3.31,1.03,1.42-1.42,2.1-6.7.09-2.95.56-3.87.09-1.42,1.15-5.76v-1.03l.09-2.36,1.51-3.87,2.45-4.72,2.1-6.26,2.07-5.76,1.59-7.26.12-3.87.65-4.37.09-3.87-.38-4.81-1.59-9.83-.38-3.87.09-5.28-.27-3.87,1.12-6.82.09-3.39-.35-4.34-1.24-9.27-.3-5.76-.83-4.43-.38-4.84,1.21-8.68.47-18.42-.09-12.1.3-11.13.18-8.24.68-3.87.09-5.37.56-3.78.3-10.21.09-1.98.65-7.64.56-3.87,1.33-13.05.77-9.74.27-11.6.59-22.2.94-14.08-.21-12.57-.38-3.87.21-6.32.18-5.28-.86-4.46.59-4.34,1.03-2.83-2.83-1.03-3.87,3.22-.12,3.39-1.98,1.42-1.42-.47-1.8-2.57-.94-1.42-.94-1.03.12-.94-.47-1.98-.38-2.36-.86-4.43-1.33-3.42.47-1.42,1.03-1.98,1.89-.86,2.36,2.01,2.18,8.77,3.78,1.51,5.2-.27,2.66-10.6,1.21-8.21-.86-4.34,1.33-13.05,1.42-16.91,2.18-9.62.18-9.27.3-8.21,1.12-7.64,1.71-11.16.65-6.7,1.71-9.62.65-5.87,1.15-5.28.18-7.26,1.12-6.73,1.06-4.81,1.12-6.7,1.59-7.73,2.27-10.6,1.51-3.78,1.06-4.34.65-5.84.65-7.2.12-4.34.65-6.79.09-3.87-.27-4.37.65-8.21-.86-4.34-.38-4.46.68-3.78,1.51-3.87v-1.42l.65-5.84.12-4.34-.86-3.42-.94-1.42.09-1.51.09-2.36,3.78-.94,1.98-3.78.21-3.87.09-4.81-.38-4.81.09-3.9.12-3.39.65-3.87-.38-3.87.56-4.81.68-5.31.56-4.81,1.12-7.26.86-11.63.86-13.96.09-5.31.21-4.34,1.77-13.96.12-4.84.56-3.39.09-2.92,1.03-4.81.68-3.87,1.03-6.26.18-3.87.56-4.34.68-6.7,1.68-10.12.68-6.79,1.33-12.46,3.48-8.71.77-7.17-.38-4.9.09-4.37.56-2.83.56-2.92,1.15-6.7.65-5.28-5.28-.68-4.34,4.25-3.69-5.93-.38-4.34,1.15-5.31,1.12-7.17,1.42-16.91.65-5.28-.83-5.37-.77-5.28-.38-3.9.56-3.87.12-4.34-.38-4.34,1.03-3.39.18-4.84.12-4.81-.77-7.26v-15.5l.09-5.84.68-5.79-1.24-6.32.09-4.81.56-4.34.21-4.84-.86-6.32-.77-5.76-.65-9.27.3-10.57-.38-4.34.09-2.95-.38-4.81-.27-5.37.74-10.6.09-5.28-.74-6.79-1.24-6.82-.27-7.26.18-8.68.38-12.57.56-3.87-.09-14.55-3.04-11.63-.83-2.45-.47-1.98-1.8-3.87-.3-4.34.09-6.35.59-2.36,1.12-5.28-1.8-3.48-.94-2.36.09-2.01.47-1.42.59-2.36-.38-2.92.56-4.34,1.89,1.51.86,3.39,1.8,4.37,1.3,3.48,1.33,5.76,2.27,3.98,1.71,5.37,1.77,6.79,3.6,5.96.86,3.87.38,4.81-.68,5.79-1.59,6.7.38,4.43-.77,9.65.38,3.87,7.08.65,1.59-4.34.68-7.17.56-4.81-.3-4.37,1.03-6.32.21-4.81-.86-4.34-3.6-6.91-1.77-6.32-.3-5.79-3.6-10.27-2.07-8.71-2.18-9.24-1.68-7.85-1.62-9.74-3.39-14.52-2.63-7.85-1.8-6.32-2.57-9.27-3.57-8.8-4.93-13.58-4.04-8.88-1.8-2.92-2.83-1.53-5.67-1.12-2.83-.09-12.37-1.8-3.87.86-7.67-.21-5.76,2.75-7.08-1.12,2.92-2.36,5.79-2.75v-1.98l-1.33-2.92-2.36-1.53-4.72-1.03-2.66-8.29-8.88-8.03-3.19-4.46-8.41-4.99.27-9.18,21.46,18.89.86,1.03,4.25,3.51,2.24,3.96,3.22,3.87,3.78,3.04,3.31,1.59-1.89-3.96.68-5.28-1.33-2.48.09-4.34,4.25,2.1,2.75,3.87-.68,6.32,2.27,4.34,2.83,2.57,12.75,2.75,7.56,3.1,2.92-.38-2.15-9.24-2.18-8.24-.74-8.29.09-.94-4.55-9.27-3.96-11.72-4.16-23.79-.38-3.87-.86-2.92-1.77-3.42-2.27-6.41-1.8-3.39-1.33-4.84-2.15-5.84-2.75-6.43-1.71-5.28-2.27-5.37-1.42-2.92-3.1-5.96-3.22-6.79-2.27-3.98-.38-1.42-1.89-3.48-2.24-3.39-3.22-5.4-2.75-3.96-3.96-10.3-1.42-2.45-1.33-2.45-1.33-3.42-.47-2.92.09-1.89-.86-2.92-1.3-5.84-1.8-4.37-1.8-3.39-9.06-17.65-.86-2.92-1.24-9.74-15.2.09,9.65,13.78.65,8.71-1.42,1.42-3.39.86-5.11-6.43-4.55-6.32-3.19-4.46-3.22-5.46-1.89-2.01-3.87,1.42-3.31-.09-2.75-4.43-1.8-3.98-2.83-3.39-3.22-3.96-3.22-3.51-2.24-3.39-1.89-3.96-1.71-7.76-2.27-3.39-2.75-4.9-7.56-1.71-2.54,4.25-5.67-.09-4.34-.65-3.31.94-4.34,2.24-2.01,2.36-5.76.3-3.01,4.81.86,3.87v2.83l-.12,3.9,1.71,4.9,2.27,4.9,2.75,5.4,1.3,4.81-4.52,7.17-2.75-3.96-2.18-6.82-3.19-7.35-1.24-5.4-1.33-4.34-.86-3.39-4.72-2.07.59-2.36,2.45-3.31,1.51-3.42-3.13-7.73-10.01-.3-1.42-1.51-.94-1.51-2.15-5.28-2.36-3.98-3.22-3.96-3.22-3.48-3.31-3.9-3.69-3.01-4.72-2.07-4.25-1.06-3.78-3.48-3.78-1.59-2.75-3.42-2.36-3.01-1.77-3.87.56-1.42,5.28-.86,6.52,5.49,3.78,2.54,4.72-.86,4.34.09,5.2,1.15,3.31,1.03,1.8,3.48,3.69,4.93,2.83,1.98,4.13,4.9,1.24,8.8,10.39,5.11,1.59,9.15,3.9-1.33,1.03-3.78,2.07-3.87.94-1.89,3.87-1.33,3.78.12,9.09-.21,5.84-1.33,4.81-2.72,4.72,1.03,4.25,1.59,3.78,1.51,1.8,4.46,2.27,5.37,2.75,4.34,2.24,4.93,1.71,5.84,3.22,4.46,3.69,4.9,1.3,4.43,1.8,4.37,2.92.09,1.06-3.87-.86-3.9-1.33-3.87-1.33-3.39-1.42-2.45-3.69-5.96-3.19-4.34-3.6-7.85-3.69-5.46-1.8-5.28-1.77-3.98-1.24-5.28-1.89-2.45-2.75-2.57-.47-2.92-1.8-4.34-2.72-3.96-3.69-5.4-1.71-4.9-2.75-5.87-1.77-3.39-.94-1.51-1.89-1.98-2.27-4.81-2.27-4.46-1.33-3.87-1.8-3.48-1.77-4.84-2.75-4.43-3.6-6.43-1.8-4.34-1.77-4.9-2.27-5.87-2.27-3.87-2.27-5.37-1.8-4.46-2.24-4.34-2.27-4.9-2.75-4.93-1.8-4.34-2.15-6.32-3.22-6.43-2.27-3.87-.86-4.43-2.27-4.84-2.63-6.32-1.42-3.01-2.27-4.37-5.37-11.69-3.6-7.38-1.8-4.43-2.75-6.35-1.77-4.81-1.33-2.92-2.75-4.46-4.07-10.74-2.63-7.76-1.71-5.37-1.8-4.34-3.57-8.8-1.8-4.43-1.33-4.37-1.8-5.37-1.3-5.28.09-3.87.09-3.42-.38-4.34-.86-3.87-1.3-3.87-2.27-4.46-2.18-5.37-2.75-5.37-.83-3.9-.38-3.87-.86-3.87-1.33-3.87-.86-4.34-1.3-4.93-.86-4.34-2.75-4.9.09-4.37-.27-4.81-2.83-2.92-.38-3.39-.3-2.92-.09-1.42-1.71-6.82-1.77-5.37-1.33-4.34-2.27-5.4-1.33-4.34-1.21-4.9.09-3.42,1.03-4.72-2.66-7.82-3.19-6.82-.38-1.03v-1.89l-.38-1.89-1.8-4.9-1.33-4.34-1.3-5.4-1.71-8.68-.77-4.93-.35-4.34-1.33-4.81-2.1-11.63-1.3-4.9-3.13-9.15-3.13-6.43-8.21-15.11-3.22-6.43-.47-1.42-3.22-3.96-1.77-4.34-2.27-3.98-1.33-3.87-2.27-3.87-3.31-3.96-2.27-4.46-2.24-4.34.09-4.34-1.8-4.46-2.75-4.34-2.75-4.43-2.72-3.98-1.8-3.87-2.83-4.43-1.8-4.34-2.18-5.4-4.6-8.77-2.75-3.51-1.8-3.87-3.69-5.37-2.75-3.98-2.72-5.37-4.55-9.74-1.33-3.39-1.42-2.92-4.04-9.27-5.4-11.72-1.8-3.96-2.36-3.87-3.66-2.57-3.98,2.36-1.98,3.78-1.51,3.78-2.57,4.37-2.45,3.78-1.98,3.78-3.01,3.78-3.31-1.15-1.42-.94.56-3.78.56-1.03,1.51-2.36,4.93-7.56,2.54-3.78,7-10.86,1.51-4.81-.86-4.81-3.1-7.38-1.33-3.39-1.8-5.28-2.27-3.51-2.27-5.28-2.72-4.9-1.8-4.46-2.75-4.81-1.89-3.48-2.18-6.35-2.24-4.81-1.8-4.9-3.22-5.4-1.8-3.39-3.57-8.8-2.36-3.87-1.33-4.9-1.8-3.39-1.8-4.84-2.15-8.29-1.8-4.81-5.49-9.36-3.1-7.76-5.49-10.74-5.11-6.91-3.22-5.84-3.1-6.35-2.27-6.79-4.63-5.4-1.8-2.54-3.78-4.9-1.42-.94-.74-4.84-2.75-7.82-1.33-3.87-2.27-4.37-2.24-4.43-2.27-3.87-1.8-5.4-2.27-3.87-1.8-4.43-1.77-4.34-4.07-8.8-2.36-3.96-.86-3.9-2.27-4.34-1.77-3.87-1.33-4.43-2.27-5.31-1.8-3.48-2.27-4.34-1.42-3.87-1.77-4.46-.77-5.76-.86-2.92-1.89-4.34-2.27-4.46-5.37-13.14-2.75-3.96-2.27-4.34-1.77-3.87-2.36-4.46-1.8-3.87-2.27-3.96-1.8-3.9-1.33-4.34-2.24-4.43-1.89-3.87-.86-3.9-.38-3.87-1.8-3.87v-.94l-3.57-8.32-1.33-4.34-2.18-7.73-2.27-4.46-1.3-3.87-1.8-4.81v-1.98l-1.33-4.34-1.33-3.42-1.8-3.39-2.72-4.9-1.89-3.39-1.33-4.93-1.33-3.39-1.8-5.28-.86-3.87-1.3-5.4-1.8-3.87-2.66-6.32-2.75-5.87-1.77-5.28-2.75-4.9-2.75-5.87-2.27-4.34-1.8-5.37-1.3-5.31-2.75-3.96-2.75-4.43-1.33-5.31-2.27-5.37-1.3-4.81-1.24-5.87-.86-3.87-2.83-2.92-2.75-4.34-1.77-3.98-1.33-5.76-1.33-5.84-.86-1.89-1.89-3.51-1.8-2.92-1.77-3.87-.86-4.81-2.27-4.46-2.27-6.23-1.33-3.39-.94-2.92-.27-4.34.09-3.9-1.33-4.34-1.89-3.87-4.99-9.83-2.18-6.79-.86-4.34-.38-4.84-.35-4.34.09-4.81-.3-6.23-.86-3.87-3.66-5.4-3.22-5.37-2.27-5.28-1.33-3.98-1.8-4.34-2.36-4.34-.83-3.87-2.75-3.98-1.8-4.81,1.03-4.34,1.71-7.65,1.03-3.78.09-3.42.09-3.87-.35-4.81-2.75-5.37-4.25-3.42-4.25-3.01-3.22-5.37-1.71-5.31-.35-5.84.09-4.81-.77-5.76-.86-5.79-.83-4.34-1.33-3.87-2.27-3.96-1.33-3.9-.86-4.34-.83-3.87-1.33-4.34,1.03-4.34,1.03-3.78,1.98-3.78-2.72-3.98-3.78-1.98-4.25-3.48-2.75-3.9-1.8-3.96-6.43-13.14-1.77-4.81-1.71-7.73-.38-4.37-.27-7.73-.86-3.87-.77-7.65-1.21-8.71-.68-11.6-.86-4.37-.35-3.87.09-4.25-.38-4.81-1.24-5.37-.47-3.9-1.21-4.81-1.89-4.34-1.8-3.87-.86-4.34-1.33-4.93-.83-4.34-.38-4.34-.3-4.34.09-4.25-.74-7.76-.38-4.34-.86-4.81-.38-3.87-1.3-3.9-1.42-3.39-.38-.94-2.83-4.9-2.27-3.87,1.51-3.9,3.87.12,4.72,2.07,3.31,1.98,3.78,3.04,2.75,3.87.94,1.98,1.42,1.98,3.22,4.34,3.31,3.04,4.25,1.98,7.56,3.6,4.72,1.59,3.78,1.51,4.25,3.04-2.45,3.78-3.87-.12-3.69-2.54-3.98,2.36,1.89,3.87,4.25,1.98,4.25,2.57,3.78.56,3.98-3.22,4.81-1.89,4.25,2.1-1.98,3.78-.21,4.34,1.8,7.73,4.25.09,4.34-.35,3.78.56,3.78,2.54,3.78,3.39,5.11,7.85.38,1.51,2.75,4.81,1.89,2.95,3.69,3.96.47,3.39-.21,5.76,1.8,3.42,1.98-.38,2.92-1.42,2.83-1.33,2.83,1.98,2.36,2.92-.56,2.83-1.98,1.89-4.81,1.33-4.81.86-3.31-.09-3.31-3.51-3.42.94-.47,2.83-.09,2.48-.09,3.78-.65,4.81-.59,3.87-2.72-3.01-.86-4.37-4.34.38-.68,5.28-1.03,3.78-1.42.47-4.25-4.43-.3-5.28-6.32,3.22-3.13,9.06.3,9.15,2.27,2.45,3.39-1.42,3.01-3.19,4.25-.38,3.9,1.51-2.57,4.72-1.98,2.36-3.48,5.67-3.9.86-2.92,1.89-1.03,5.28,1.8,2.92v1.42l-1.98,1.42-.59,2.83,1.71,10.12-1.12,5.28-2.01,4.81,4.72,1.03,1.89,1.03-.09,1.89.47,1.42,1.89,2.01,1.89.09,3.87-.86,2.36,2.92,1.33,2.92,1.8,4.84,3.31,3.01,5.2,2.07,6.14,2.1,5.76,1.03,2.36,1.03,1.98-1.42,1.06-3.31,5.76-.74,4.72,2.92,2.27,4.9,4.25,1.03,4.34.12,3.78,1.12,1.42-.94,1.51-2.83,3.39.56,3.22,4.46,1.33,4.34,3.78,1.03,5.28,1.12,8.59-.27,5.28,1.03,7.67-.18,3.87-2.36.09-2.83-2.27-3.98-2.83-3.39-1.33-4.81,1.62-4.81,2.92-3.31,4.9-3.69.59-3.39,6.49,5.93,2.36,2.92,4.37-4.13,2.45-1.89,3.78,3.01,4.25,3.48,4.63,4.93,4.72,2.54,3.87.09,4.81-1.3-.47-2.48-1.8-2.92-2.83-2.92-3.69-3.48-2.72-5.87,1.89-.86,3.78,2.01,6.61,4.04,6.61,4.46,7.44,7.44,4.63,6.82.38,3.39-.47.47-2.45.38-3.31-.56-2.45.94.47,3.39,4.72,2.45,1.89,1.03,1.77,1.98,3.22,5.4,4.63,6.32.38,3.87.47,1.53-.47,1.42-4.93,3.66.86,2.95,2.83,1.03,3.87.09,1.89,1.98.86,3.87,1.8,4.84-5.2,33.53-4.16,28.34-1.8,13.87-2.54,8.59-6.91,7.56-.65,4.25,1.89,3.39,1.33,3.42-2.1,6.23-.56,4.81-1.21,10.1-1.62,5.67-4.9,3.78-3.31-.09-2.92-.09-3.9,2.27-.09,2.92-1.03,4.25-.09,2.45.27,9.65,4.25,2.45,2.83.56.86,2.92-.47,2.36-1.03.94-1.42.47-5.2-1.12-2.45.47-1.03,1.89.35,4.81,3.9.09,4.25.56,1.42,2.48,1.68,7.73,1.24,7.73-1.03,3.42-1.53,1.77-3.01,5.31v2.36l1.89,1.03,2.36.56.86,2.83-.09,2.92,1.42,3.39-.21,5.31-2.45,1.89-4.25-.68-2.83-.47-3.31-2.54-1.98.94-1.42,1.89-1.98,2.83-.12,2.36,1.89,1.98,3.31,1.51,4.25,2.57,2.27,2.45,2.83,3.48,1.33,2.92-.47,1.89-2.54,3.78-2.01,1.89-.47,2.83.86,1.06,3.78,2.45,1.89,2.92.38,3.39.47.94-2.54,5.28.27,5.79,2.27,4.9,2.27,6.79-.09,4.72.74,5.87-.09,3.87-1.03,4.72-1.51,2.36-1.06,2.36-1.03,1.98v2.36l-1.59,3.31-.94,2.45-.09,3.31,1.21,6.82-.65,7.17-.09,3.39-.12,4.34-.56,4.72-.18,4.37v1.51l-.09,2.36.94,1.98,1.3,2.92.38,3.87.94,3.31.38,2.95.38,4.81,1.12,8.21-.09,6.23.86,4.46-1.62,7.17-2.36-3.01-2.72-5.87-2.18-6.79-4.07-11.63-10.01-19.54-9.53-20.4-9.74-28.25-.47-1.42-7.44-27.69-3.04-12.54-2.54-10.69-3.13-8.21,1.03-4.84.12-2.45-1.8-6.7-.77-6.32-.38-4.84-.27-7.17,2.45-2.36,2.83,1.03.94,2.36,2.27,5.4,1.21,4.81,1.33,7.26.77,6.82,1.68,7.26.77,8.71,1.24,7.73.56-1.51,1.03-4.25.3-10.12-.77-8.21-2.07-13.52-1.06-14.43.21-8.24-1.33-4.81-.65-9.62-2.95-17.95,4.37-20.6.65-7.17.86-11.51.94-19.66,6.23-20.6,4.55-8.03,2.15-8.12,3.69-12.46,1.24-12.96,4.34-.35,5.28-1.8,3.96-3.69,3.98-6.14,1.21-8.68,3.69-12.4,3.6-10.01,1.68-10.57.21-7.65-.86-5.31-.3-7.26-1.21-6.23-1.42-.09-4.93,3.31-1.51,1.3-1.33-3.39-.83-4.81-.38-4.34-1.71-5.76-1.42-1.53-3.87,1.8-4.34.86-.94-1.89-2.27-4.43-2.83-1.53-4.34,2.83-5.28-1.59-3.22-2.54-1.98,1.42-.59,2.36,1.8,4.43-.65,8.12-3.98,4.72-4.34,1.8-7.17.3-.56,4.34-1.62,4.72-3.31.47-1.89-1.03-.94-3.42-3.19-5.37-3.31-2.45-3.78.38-2.01,3.31-1.98,1.42-2.83-.59-.56,2.83-1.98,2.83-1.03,3.9-.21,3.78.94,2.45-.09,3.87-.09,3.31.86,4.9.35,4.25.38,4.37-.09,3.39-2.07,6.7-3.98,4.72-.94-1.98.09-2.36.59-3.87,1.03-4.37.09-3.78-1.33-2.45-1.98.38-2.45,1.89-.47,2.36-.56,2.92-.12,2.83-.56,3.39-2.83-1.03-.86-3.87.12-5.76.65-3.87,1.03-5.2.09-2.95-2.36-2.45-1.98,2.83-1.98,3.31-1.98,3.78-1.62,3.87-.09,5.79-.18,6.23-.21,7.64.38,5.28-.65,4.81-.09,5.31-1.06,2.36-.09,3.39-2.07,6.23-1.24,10.01,1.42,3.87,2.27,3.98,1.8,3.39,1.42.94.94.56,2.83,1.98,2.27,3.42.94,2.92-.12,4.34.77,6.23-.56,3.87-.09,3.9-1.62,4.25-.56,5.28-.86,13.87,3.87,17.47-.74,8.59-1.62,10.12,1.15,10.09,3.22,6.35,3.57,6.88,4.16,9.27.77,5.76,1.77,4.81,2.27,6.35.3,7.26,3.69,6.32,4.13,4.93,2.75,5.84,2.66,8.24,3.57,9.71.86,3.87,1.71,6.35,6.7,19.92,4.55,9.74,4.43,11.69,3.48,13.52,3.13,9.27,6.32,14.64,6.91,12.16,5.84,11.72,5.58,9.83,4.46,10.69,4.9,13.11,3.22,7.29,5.58,6.88,3.19,4.93,3.31,3.48,2.36-.94,1.06-1.42,3.19,3.04-.09,3.78-.56,4.34,1.8,2.92,3.31,2.07,2.36,3.42.86,2.45.83,4.81,2.66,6.79,2.75,5.87,1.68,9.62,2.75,3.04,4.63,7.82.3,7.17,1.77,5.4,4.07,6.79,2.27,4.93,1.8,5.37,2.24,5.28,2.75,3.51,3.78,3.96,2.18,6.32,3.22,7.29,2.72,4.43,2.75,5.28,3.69,5.49,2.18,7.73,2.24,4.37,4.16,4.99,3.22,6.35,6.05,5.93-1.03,6.23-2.57,4.25,4.16,4.93,4.25,1.03,3.69,8.32.18,9.15,5.11,6.43,5.11,7.35-1.51,1.42-2.36-.56-2.27-2.92-1.98,1.33-1.06,1.42,1.8,4.43,1.8,6.79,7.65.68,1.33,2.92-4.34,1.33-.56,2.92,4.34.56,1.12,8.71,4.25,2.54,2.1-6.23,6.49,6.41,3.31,1.53,11.93,22.46-.68,6.82-1.12,5.2,3.69,5.46,3.19,5.87,2.48-2.83,3.78,1.03-.77,13.02,1.8,3.9,5.28-3.69,5.37-3.78-9.92-21.93-4.13-6.32-8.24-13.31-7.26-16.06-17.3-32.32-15.67-39.38-10.69-14.73-13.96-32.68-1.33-2.95-16.62-42.3-10.48-36.37-11.07-36.45-6.88-28.16-3.69-25.59-3.39-15.97-3.69-23.23-3.78-19.84-2.83-20.31-2.36-20.22-.09-16.91-2.66-25.03,1.51-23.14,4.46-23.41,4.25-15.79,2.63-9.06-3.31-1.51-7.65-1.24-6.14-3.48-.38-2.36,4.34-3.31,3.9.56,3.78,2.07,10.01,1.24,1.51-3.87,4.55-7.08,6.41-8.5,8.41-9.83,11.16-6.52,9.15-1.59,13.05-5.02,4.04-6.61-1.68-8.21-3.22-5.87-3.31-4.43-2.27-3.87-5.37-11.72-5.96-13.14-5.37-11.72-4.07-10.18-7.08-21.81-4.25-21.37-1.33-6.23-1.68-7.73-5.87-13.61-7.26-13.7-10.77-12.28-7.38-9.83-8.5-6.52-6.41-10.18-4.16-6.43-5.84-11.72-8.8-12.63-9.27-12.75-8.77-12.75-12.49-19.1-14.82-19.63-9.15-14.17-12.49-20.04-6.88-10.77-9.18-17.09-8.29-12.66-7.76-15.11-6.41-10.74-9.65-15.7-7.82-14.05-4.16-6.91-13.78-22.96-14.64-25.77-10.12-18.51-1.8-3.98-8.68-16.06-11.98-19.54-14.94-15.79-6.43-11.13-7.17-18.51-13.78-23.91-9.15-17.95-4.93-12.66-4.04-10.66-3.31-3.42-5.31,2.75-.09,2.36,1.33,2.45,1.89,1.53,6.91,13.58,2.63,9.65.3,7.73-7.94,9.36.77,7.73.83,3.9,6.05,8.29,2.83,1.51,15.67,4.72-1.98,3.31-5.28.38-1.98,3.78.38,3.39,2.24,3.9,3.78,3.48-4.9,3.22-4.34,3.22-1.42-2.36-2.27-3.04-3.69-7.73-3.57-8.24-1.8-4.9-2.27-4.81-1.42-3.87-2.75-3.51-3.01-13.02,1.51-2.83,7.26-5.11,2.57-3.31-3.13-11.63-7.82-13.14-3.31-.09-2.36-.56-1.89-3.87-.38-2.45-.86-3.9-4.72-5.37-2.27-2.92-3.69-5.87-2.83-2.92-3.78-3.01-8.21,3.22-3.87,1.3-3.87,2.75-3.9,1.42-3.78-1.59-3.31-2.92v-.94l1.06-2.83,3.48-3.78,3.78.09,3.87,1.03,3.78.56,1.03-3.78.59-3.87-.86-3.87-.38-4.34-3.78-.59-2.54,3.78-3.78-.09-1.42-2.92,1.59-3.78.56-4.81.21-6.23-2.83-3.9-2.27-4.43-3.78-3.39-2.27-3.87-1.33-3.9-2.36-3.96-1.33-4.34-3.57-7.76-.86-3.87-1.33-4.81-.86-3.87-1.89-3.87-3.19-3.98-1.89-3.87-1.33-3.87-2.75-5.87-.38-3.39-1.33-3.39-.35-3.78-5.11-5.96-1.89-3.87-3.22-3.39-1.89-3.48-.38-4.25-2.27-3.98-2.72-4.81-2.27-5.84-1.42-3.42-.86-4.34-2.66-5.84-3.19-7.29-1.8-3.87-2.27-5.76-3.69-6.91-1.33-4.34-2.72-7.26-1.8-4.34-1.8-3.9-4.16-8.77-2.27-3.87-.47-1.42-2.24-5.4-1.8-4.34-1.33-3.87-.86-3.87-1.8-3.9-2.72-8.68-2.27-4.43-1.33-3.9-1.8-4.81-1.33-3.87-1.77-4.81-3.78-2.57-3.51,3.31-2.45,1.33-3.78-1.51-.38-1.42.47-3.39,2.57-2.83.94-2.36.56-2.83.09-.94-.94-1.98.56-2.36,1.89-1.42,1.98.09.94-2.83,2.48-1.89,3.31,1.98,3.78,4.9,1.77,3.9.3,7.17,2.27,7.73,6.41,11.25,6.26,17.95,5.84,16.91,5.02,11.13,6.32,15.59,7.26,15.5,3.6,8.32,6.05,10.18,2.27,4.93,2.24,5.76,3.13,7.26,1.8,6.35,4.16,5.37,1.3,2.92.94,2.95,2.27,6.23,1.8,3.39,2.66,8.32,4.13,8.21,4.55,9.27,3.22,6.32,1.8,4.81,6.41,11.72,3.69,7.73,3.69,6.35,3.22,4.9,3.1,6.82,4.63,6.88,3.78,3.87.86,3.9-2.36.94-2.92-1.53-2.36-.56.47,1.42,2.72,3.98,3.31,4.43,1.8,3.39,2.75,5.28,5.2,5.49,1.8,2.92,1.42,2.36,2.36,1.51,2.27,4.46,3.66,6.32,8.97,3.6,2.95-2.83-1.62-9.18-3.31-2.92-2.36-2.45-2.75-3.96-4.6-5.87-5.11-8.77-7.85-12.66-4.99-10.3-6.91-12.66-8.68-16.06-6.73-19.36-14.17-27.78-5.46-12.54-6.35-13.61-4.13-7.85-2.27-6.32-3.22-4.34-3.22-6.82-1.8-5.37-1.77-4.81-1.33-3.87-3.6-8.24-1.89-2.92-3.57-7.85-3.6-11.13-4.55-10.69-7.82-14.08-3.98-13.02-8.59-19.92-4.52-10.21-11.72-31.55-12.28-29.07-2.18-6.26-15.38-40.23-17.21-38.82-12.28-28.72-14.55-32.97-1.89-3.87-2.24-4.34-2.75-4.43-4.55-10.21-2.75-7.73-3.57-10.12-2.18-8.21-3.1-8.8-3.22-6.23-2.27-7.26-7.64-19.84-4.93-13.61-2.15-9.18-2.66-13.02-2.07-10.12-6.05-9.71-6.14-3.04-5.76-1.12-1.8-3.87,3.78.56,3.48-3.78,1.06-3.78-2.27-4.9-3.69-7.76-4.43-12.55-3.6-13.52-4.55-10.69-6.32-15.94-1.8-4.93-1.59-10.57-1.33-6.7-1.71-9.18-2.07-12.07.3-12.49.18-8.12-1.51-15.88-.68-10.57-.74-9.53-2.75-4.46-2.75-5.76-5.2-6.88-1.8-2.95-1.3-4.34-3.6-11.13-7.73.35-3.9,1.8,1.89,2.92,1.33,3.42-.09,4.72,13.61,14.26-.56,1.89,2.36,2.45-.59,3.39-18.21-21.05-6.05-7.38-1.59,8.12,4.13,5.87,1.33,4.81-2.15,8.12-2.1,7.08-2.63,10.48,9.06,3.6,1.33,5.28-.21,7.26-.65,8.15-1.15,3.78,2.36,4.81,1.8,2.92,3.31,4.43,3.69,3.42,3.87-1.33,3.39.56,1.33,5.28-1.03,3.39,1.8,4.37,2.27,3.87,2.24,6.32,2.75,7.29,1.33,3.87,2.27,6.7,2.15,8.21-2.07,5.79-4.81-.21-3.31-1.03.09-3.31.09-4.34-3.31-1.98-2.83-3.42-1.68-6.32-3.13-10.1-2.75-7.76-5.67-3.01-3.78-2.57-1.89-2.92-2.27-6.23-2.63-6.79-5.28-1.62-4.72-1.03-2.36-3.39,2.92-2.83,2.92-2.27,2.07-3.31.59-3.87-.86-4.81-1.33-4.84-2.36-3.87-1.33-2.92-.38-3.39,1.53-3.78-.47-1.89-3.78-2.57-2.83-2.92-1.33-2.92-.47-2.36,3.01-2.36,1.42.56,1.89.47,4.81.56,1.53-4.25.09-3.78-2.66-11.6-.86-4.34-.35-3.9,5.08-10.39.12-2.36-.47-2.92-.86-3.87-4.72-3.48-3.78-2.48.56-3.78,3.6-8.12-1.8-4.34-2.36-3.87-3.78-3.51-1.33-4.34-2.75-3.87-3.87-1.51-3.78-3.04-2.66-8.21-1.77-3.87-3.31-3.87,3.87-1.89,4.43-1.8-.38-4.25-2.36-3.98-2.72-4.81-2.36-3.87-2.75-3.96-1.33-3.9-.94-3.78-3.78-1.59-4.25-1.98-4.34-1.03.09-4.37,1.12-4.25-2.36-4.43-2.72-3.87-3.31-4.46-.86-3.31-.47-1.03-.3-5.76-2.27-7.17-.35-2.92,1.51-3.78-.86-4.37-1.33-4.81-.38-5.28.59-3.78,1.03-4.34-.38-3.87-1.8-4.37-.86-3.78,2.95-3.78,1.12-3.87-2.36-4.34-2.27-4.34-1.89-3.39.09-3.9-.83-3.87-1.33-3.87-1.8-4.81-1.8-3.87,1.98-5.19,4.84,1.51,2.72,5.84,3.22,6.82,2.27,3.39,1.89,1.98,1.8,3.87,1.89,4.81,2.63,6.82,1.71,8.68-.09,6.7-1.15,5.67-1.51,2.36v1.42l1.8,3.42,2.83,2.54,2.83,3.39-.09,4.25-1.03,2.92-2.95,1.33-.56,1.42.94,4.34.3,7.2,1.8,3.87,1.42,2.45,2.72,3.39,3.31,4.93,1.33,5.28.38,3.39.86,2.36,6.61,6.43,5.11,7.82,4.13,8.71,3.13,6.79,1.33,7.17,1.51,14.94,2.75,6.79,2.75,4.34,3.31,5.4,2.72,3.39,4.16,10.21.3,5.76,3.01,12.54.38,5.31,2.27,5.76,2.83,1.03,3.39-.86,2.45-3.31-1.68-6.79-2.27-6.23-2.27-5.87-1.8-5.28-1.8-3.87-1.77-5.28-1.33-5.4-1.33-5.76-1.8-6.23-1.59-10.12-1.24-9.62-.74-7.73-1.33-5.79-.86-4.81-2.75-7.26-1.8-5.28-1.21-5.79-1.33-4.81-1.33-4.34-.38-5.76-1.3-5.4-1.33-4.81-1.8-4.81-1.33-4.34-.86-6.7-1.21-7.29-1.62-13.4-3.57-11.63-3.39-17.27-3.04-15.02-3.96-14.94-2.57-10.57-.35-6.7-3.13-9.74-2.18-10.09-1.21-7.67-3.13-10.66-5.28-19.75-1.71-8.68-1.68-7.76-1.8-7.17-3.13-9.15-1.68-10.12-1.33-5.28-2.18-7.73-1.77-7.76-1.71-6.7-1.8-7.26-.74-6.73-1.71-9.62-1.71-9.15-2.15-8.71-2.27-5.76-1.8-5.76-.38-4.81-.35-4.37.09-3.87-.38-5.2.65-5.76.21-7.64.09-6.23-.65-10.12v-1.42l.18-7.64.18-6.7,3.22-12.37-17.39,1.03-.47-.56-2.45.47-3.87,1.3-6.32,3.22-2.95,2.36-1.98,2.75-2.92,2.36-1.51,1.89-.94.47-1.03,1.42-1.89,1.42-4.46,1.33.47,2.83.86,1.98,1.42,1.89.47,1.51.47,1.42,1.33,3.39,1.42,2.95.38,1.89,1.42,3.39.83,3.87,2.75,4.34.38,5.76-.65,5.31-.68,10.01-.09,2.36v1.51l-.09,1.89,2.83,2.92.47.47,3.31,2.45,3.31,3.51,1.8,3.87.83,3.39v1.42l-.09,4.25-.09,1.98.47,1.42.94,2.01.86,2.83.47.94.94,1.98.94,1.89.38,2.92-4.46,5.2-2.83-4.43-.86-4.37-1.77-4.34v-.94l-.77-6.23-.38-4.81-2.83-4.34-3.78-3.04-3.78-1.51-4.25-3.39-.86-5.28.3-8.71-1.42-3.87.09-3.78,1.15-4.81.56-4.25-1.24-8.71-2.36-3.87-1.8-3.39-2.36-3.87-1.42-1.51-2.24-2.48-4.37-1.51-3.87.38-3.39,2.36-.47.94-1.03,2.36-3.39,2.27-1.33-4.81,2.07-9.09-2.75-3.87-1.77-4.34,1.42-1.42,2.92,1.03,1.33,1.98.47.47,1.42.94,5.67,5.02,1.51-.47v-1.89l-1.42-1.51-6.05-6.35-3.31-3.01-3.87-.56-4.34-.09-4.84,1.77-7.35,4.63-4.81.38-1.42-.56-2.83-.94-6.14-3.51-4.37-2.07-2.83-2.45-4.72-1.98-1.89-.59-1.98.47-1.51,1.89.94,3.78.38,2.48,2.75,4.81,2.36,1.98,2.83,1.98,1.42,1.98-.59,2.83-.47,2.83-.56,3.9-.09,3.31-.56,1.89-1.03,3.39-.94.94-2.01,1.8-2.92,1.42-4.81.35-2.83-1.03-3.39-1.51-2.83-2.45-3.78-3.04-3.31-2.45-4.72-3.48-4.72-2.45-3.31-1.06-2.92-.09-4.37-.09-2.83-1.03-4.34-1.03-6.61-3.98-2.83-2.45-4.25-1.59-3.39-1.06-1.89-1.42-2.36-1.03-1.89-1.51-1.89-.47-4.34-.09-3.87,3.22-.12,2.36.86,5.28,1.33,3.87,1.89,3.39,1.8,5.87-.09,2.36.83,4.34.86,6.23,1.33,4.34.86,3.87-.09,2.83-.12,3.9-.56,3.78-.56,4.34-1.03,3.31-.09,4.34,1.3,3.31,1.42,1.03,3.42.56,1.98-.94,2.36-1.77,1.51-1.42,2.92-.94,2.83.56,2.36,1.98.94,1.89.47,1.98-1.12,3.78-1.03,3.31-.59,4.34.47,2.83,1.33,3.42,1.42,2.45.38,2.45-1.42-.09-2.36-.56h-1.98l-1.89-2.01-.94-.47-.86-3.39-.38-2.83.09-3.87,1.06-4.72-.47-1.98-.94-.94-4.37,1.8-.94.94-2.92.35-1.89.47-4.34-.09-1.42-.09-2.92-.47-2.36-1.03-2.45-.09-1.42,1.89-2.95,1.42-1.42-.12-3.87-.56-3.31-1.03-4.81-2.92-3.31-.56-2.83-1.53-4.34-.56-2.92,3.22-.21,4.81,2.36,5.4,1.8,5.28.38,3.78-.56,3.39-2.1,3.78-2.92,3.31-1.51,3.78-1.03,4.25,1.3,2.92,2.36,1.51,2.83,1.53,1.89,1.98,2.36,2.45.47.47.47,1.42.94.94,2.83,1.51,1.42,1.51.38,3.42,1.33,4.81,1.33,4.34,2.83,2.92,5.2,3.51,5.2,3.87,5.2,4.99,1.8,3.9-.12,3.31.38,5.76.38,5.28-2.07,5.67-1.53,3.87-3.48,4.16-2.45,2.36-3.87,2.83-3.51,2.27-.47,1.89,1.89,2.45,1.89,1.98,1.33,1.42.94,1.98-.47,1.89-1.03,2.36-2.57,4.72-1.51,4.37-2.07,6.61-.56,2.36-2.48,3.31-1.98.94-2.92,2.36-6.32,2.63-4.84.86-2.45,1.42-1.51,3.78-.09,3.87-.09,4.72.35,4.34,3.69,4.93,5.28,3.01,5.67,2.45,3.78,1.62,2.48-.47,2.45-.86,2.83-1.42,4.43-1.33,2.92-1.89,6.26-2.63,4.9-1.33,5.2,1.03,4.34,1.03,2.83,1.98,1.42,2.01-1.03,3.78-1.51,1.42-3.39.83-3.42.47-4.34.86-3.87,1.33-3.87,2.75-5.87,2.74-3.87,2.83-3.39,1.77-.56,3.9-.09,2.36,1.77,3.39,1.33,7.26.3,6.7-1.03,3.78-2.48,2.83-4.9,3.69-3.87,3.78-3.98,3.22-2.54,5.28-1.51,4.72-2.1,5.67-1.59,6.23-.65,7.2.83,4.81,1.33,5.28.86,5.28,2.36,3.39,1.42.59h3.31l3.87-.86,2.92.09,2.36,1.51.94,2.36,2.27,2.92.94,1.53,1.89,1.51,4.25,1.03h1.51l5.2,1.12,4.84,1.53,4.25,3.48,3.31,3.87,2.24,4.81,1.33,3.42-.09,3.87,1.33,4.81,1.42,3.39.38,1.89,2.83,1.51,4.34.59,5.28.65,4.25,1.03,5.76,2.57,2.83,2.45,2.75,2.92,3.31,2.45,2.45-.86,1.03-1.42.94-1.42.12-1.89.47-2.45.56-4.25,1.03-2.36,1.51-2.36,2.36,1.98.47,2.36-.09,2.36.47,1.53.38,2.83,1.33,3.87,1.77,4.81,6.14,5.02.47,1.89.38,1.98-.47,3.31-1.51,1.42-1.42.47-1.03-.09h-1.42l-2.83-.59-2.92-.56-2.36-.94-3.31-1.03-2.95.86-1.89.94-1.03,1.89-1.51,3.31-1.51,1.89-.56,2.36v1.42l1.42,1.98.94.94,2.36,1.98.83,2.92.94,2.48-1.03,2.83-1.12,3.78-1.98,3.31-1.42,1.42-2.01,1.42-1.98.83-3.39,1.89-2.92,1.33-1.42.94-1.98,2.83-1.06,2.36-1.03,2.83-.56,3.39-1.03,3.31v2.95l1.33,3.87,1.89,2.83,1.3,3.87,1.33,2.92,1.33,4.81,1.89,3.9,1.33,2.92,1.89,1.03,1.42.47,2.92,1.03,1.8,2.92.94,1.53.94,1.89.38,1.98,1.42,4.34,2.83,1.98,1.89,1.42,1.89.56h1.89l4.34,1.62h2.36l1.42,1.51.94,1.42-1.03,1.42-.59,2.45-.94,1.89-1.98,2.83-2.45,2.27-1.03,2.36-.56,2.92.35,3.87.38,3.31.94,3.42,1.33,3.87,1.33,4.34,1.33,5.28.35,2.92.47,2.36.38,3.9.86,4.34.47,1.89,1.33,4.81.86,1.98,1.42,1.98,3.31,2.48,1.89.47,3.39,1.03,3.69,3.48,1.42,2.92,2.24,4.37,1.89,2.92,2.27,3.87,2.27,4.9,2.36,4.37.38,2.36-1.98,3.31-2.48.94-2.36.35-2.45.47-2.07.3-2.75.56-1.42.38-1.42.47-2.45,2.36-2.1,3.31-.56,3.31v2.45l-.09,3.31.86,3.87,1.89,2.48,1.42,1.51.86,1.89-.47,1.42-2.01,1.89-1.51,3.78-.09,2.92.94,2.36.47,1.51-.09,1.89-1.51,3.78-1.53.94-3.39,1.33h-3.31l-2.45.38-1.98,2.83-2.45,3.31-3.42,3.31-4.43,2.75-.47.47-2.45,1.42-5.28.74-4.37.38-3.31-.47-3.87-1.12-3.78-.59-2.92,1.42-1.51.94-3.39,2.27-3.42,2.36-.94-.09h-2.45l-2.36-.56h-2.36l-3.31-1.62-2.45-.47-4.34.38-2.92,1.8-.94,1.89-.12,3.87.86,5.76,1.33,4.37,1.33,4.81,3.1,7.73,1.89,4.46,4.63,5.84,4.25,2.45,2.36,1.98,1.89,2.01-.56,2.83-3.01,4.25-1.42,1.89-2.01,2.83-.09,2.92.94,1.42,2.36.09,2.36.47,1.98-.38,3.78.56,3.42.12,1.89.94,1.42,1.98.83,2.92.47,2.83-.09,3.87.86,3.39.38,4.37-1.03,4.25-2.01,2.83-1.51,1.89-.56,2.36.47.94.94,1.98-.56,2.83-1.03,1.89-4.37,2.83-10.74,8.41-3.42,2.72-3.87.86-3.39.47-1.42-1.98-1.89-1.51h-2.36l-2.45,1.33-5.76-.12-2.36-1.98-2.27-2.45-2.92-1.98-3.22-2.45-2.92-.12-2.48,2.83-2.45,2.27-4.34,1.89-2.45.38-2.36.94-3.39-.09h-1.42l-1.06.86.47,1.51-.09,2.36.47,2.45-.56,3.31-.56,3.87-1.51,4.25-2.1,6.23-3.01,3.22-2.45,2.36-2.48,6.23-1.51,2.36-1.03,2.36-.09,3.78.94,2.48.38,1.89,2.36,2.45,1.89,2.92,2.72,3.96,3.22,4.84,2.36,3.39,2.27,3.96.94,3.87.3,6.26-.59,3.78-1.98,2.83-.56,3.87-1.03,3.78-.09,1.89.47,2.45,1.77,3.39,1.42,1.98,1.33,3.42,1.42,3.87-.18,6.23-.47,1.42-1.51,2.83-2.01,3.31-.56,3.31.38,1.98,1.42.47,2.92.09,3.31,1.06,1.89,1.03-.09,3.31-2.45,3.31-3.87,2.27-2.01,2.36-.09,2.45-.56,3.78v1.98l-1.51,1.89-.56,3.78,1.42,1.98h2.36l1.89.56,2.92.12,2.36.94,2.83,1.51,4.25,2.07,4.81,1.98,3.78,1.62,1.89,1.42.86,2.45-1.03,3.78-1.53,3.87-1.98,4.25-1.59,4.72-1.51,4.34.35,3.31,2.36,4.46,12.75,7.47,8.97,4.04,4.25,4.46,2.27,5.28,1.8,5.37,4.72,2.45,6.43-5.08,6.7-2.27,11.33,10.39,12.46,18.04,12.49,21.43,5.46,11.16,3.78,4.43,8.97,4.55,4.72,1.51,2.36,1.51,2.83,5.4-2.15,7.65-6.43,9.45-3.01,4.25-.59,4.72,3.22,5.84,5.11,7.38,1.89,1.98,3.22,6.35,1.12,10.09,1.71,10.57-2.57,5.67-8.77,6.05-12.19,7.38-10.09,4.63-4.84,1.3-1.03,2.36,8.97,4.07,4.81,1.03,3.31,1.98-.18,5.79,1.89,3.39,1.33,3.87-.56,4.34-4.37-.09-4.72-2.54-3.19-4.84-2.48.38-3.39.86-3.31-1.51-.27-5.76-1.89-4.37-1.89-1.03-3.31.47-7.76,1.24-17.18-2.36-9.36-9.83-.38-6.23,1.71-9.06.56-3.42-3.78-3.39-15.67-7.08-4.72-3.96.65-4.81,2.92-2.36,2.48-2.75,1.51-3.39-.38-3.31-.86-4.37-2.36-3.96-4.63-6.32-2.72-4.37-2.36-4.43-5.4-13.99-4.72-2.54-6.7-2.07-7.47-7.85-3.22-7.73-2.63-7.29v-1.98l.18-9.06.21-6.23,3.87-2.36,7.17.65,7.65,1.59.56-2.36.12-5.28-2.66-9.15-4.72-4.93-10.77-10.39-1.42-1.42-4.99-12.07,2.24-11.54,4.37-1.77,9.53,2.15.09-2.92-.94-3.39-1.33-2.92-.94-2.83-.38-2.48,1.06-2.83,1.51-2.36,1.42-2.36-.38-2.92-.86-3.31-1.89-1.51-2.36-1.51-4.34-.56-4.72-2.1-7.17-3.01-1.42-1.51-1.33-1.42-2.83-2.95-.86-3.87.09-4.34,2.57-5.67,1.03-3.87-.38-3.78-.94-3.87-1.8-3.42-.35-4.34-.38-5.28v-.94l4.9-3.78,1.51-.94,2.01-2.27.47-1.51,1.03-1.42,1.03-4.25-.47-2.92-.38-2.83-.38-2.45-1.42-1.89-.35-3.42,1.51-4.25,1.03-2.45,1.51-2.83-.47-3.31-.38-3.87.59-3.87-1.33-3.87-.86-2.83-1.33-5.4-5.67-5.84-2.36-2.92-1.8-3.42-.83-3.39v-2.83l-.38-4.81,1.12-6.23.56-2.36-.83-3.39,1.03-3.31.56-3.9.47-2.83,1.51-2.36,1.98-1.89,2.95-1.89,1.51-1.89.09-3.31-.38-4.34.09-5.28,1.53-1.89,2.83-.86,2.92.56h2.36l2.92-.35,2.92-1.42,1.89-1.33,2.92-2.83,6.35-.38,5.76-1.24,5.2,2.48,5.28,1.12,3.78,1.03,5.76,1.03,2.36.12,3.42-.38,3.39.09,2.36-.47,1.98-1.42,2.45-3.22,1.03-2.45,2.48-1.33,3.31-.94,2.45-.86,1.03-1.89.47-1.89-.86-3.39.09-3.39.59-3.31,1.03-3.87,1.51-2.83-.38-3.31v-1.51l-.94-1.42-.94-.47-1.89-.59-2.92.94-3.39.86-2.83.38-7.17-.18-3.9-.59-2.36-1.98-1.3-3.31-.38-3.87,1.03-4.34,3.01-5.67.12-3.31-.38-4.34-.47-2.48.09-2.83-1.89-2.45-3.31-2.92-3.31-3.01-4.16-3.42-2.36-1.98-2.83-1.98-.94-2.92-.38-2.83,1.06-2.92-.38-4.84-.94-2.83-.38-1.98-.94-2.83.56-1.98-.47-2.36.56-3.39,1.53-1.33,2.45-2.36,3.87-3.31,6.79-1.71,8.24-1.77,6.7-.3,8.68.18,6.73.21,7.17.18h2.92l3.39-1.33,4.34-1.3,2.95-4.25,2.54-5.2,4.16-11.45,2.54-8.12,2.1-5.67,2.54-5.76,2.45-4.72,3.04-3.31,2.36-1.33.56-3.39-.77-5.28-2.83-4.81-2.27-2.95-5.28-1.12-3.31-1.51-2.83-1.98-1.42-2.95,1.15-5.67-.38-3.87-.47-2.36-2.83-1.51-3.78-2.07-2.83-1.06-1.89-3.39.56-3.78.09-2.83-1.89-2.92-5.58-8.32-3.66-6.32-3.22-3.96-2.36-3.9-1.42-1.42-1.33-3.87-.86-5.28-.38-5.28,1.15-3.39.09-4.25-1.89-3.42-2.75-4.9-.47-1.89.3-9.62,1.51-3.31.56-4.25-1.42-2.95-3.78-1.98-2.83-2.54-2.83-1.98-1.8-3.42.94-1.89,2.01-.83,2.45-.47,1.42-.94,1.51-1.8.56-4.34.68-6.26-2.27-8.68,1.12-4.25,1.42-2.36,2.57-2.36,3.87-1.8,1.89-1.89.56-2.83-.38-3.39-2.36-2.45-1.33-2.92v-1.89l.12-3.9-.38-3.31-.86-3.39-1.89-3.87-3.31-3.01-3.22-3.9-2.36-1.98-5.28-1.98-5.2-1.59-4.81-1.06-4.25-2.07-4.72-2.92-2.36-2.45-2.83-3.04-3.31-1.03-4.81-.09-3.9.38-3.78-.12-1.89-1.89-1.42-3.87-.74-5.76-2.27-5.37-4.72-5.4-4.25-4.43-1.89-1.89-2.75-2.45v-3.42l1.03-3.31.12-3.39.09-4.72-1.8-3.96-4.25-3.39-4.72-3.04-5.2-1.98-2.45-1.51-2.83-1.51-2.83-2.01.56-2.36,1.51-2.36,2.45-1.42,2.36-1.42,2.57-2.72,1.42-2.36,3.01-2.83,1.89-1.89,1.98-2.36,2.01-2.83,2.07-2.83.94-2.36,1.12-5.79v-2.36l1.15-4.72.56-3.87.56-2.36v-2.36l-.38-2.45.68-7.17-.47-3.39,1.42-17.21-.86-4.81-.38-3.31-.94-2.92-1.8-3.39-.94-2.48-1.77-2.92-1.42-2.36-4.72-3.48-4.37-.56-3.39.35-1.42,2.36-1.51,2.83-1.98,2.83-2.45,2.36-.59,2.83-.09,1.89-1.03,4.84-2.45,2.36-5.76.74-2.95.94-2.45.38-1.51,2.36-2.54,8.59-.12,2.36-.47,2.45-.09,2.36-.09,2.83.47,2.48-.09,2.83.38,2.92-.94,2.36-2.48.38-1.89-3.42-2.24-3.87.09-2.36-2.36-2.92-2.83-.56-1.89-2.45-2.83-1.06-2.92-1.98-1.33-2.36,1.98-2.83,1.03-2.36,1.98-2.36,2.48-2.36,1.98-2.36.94-2.36.56-1.89-.38-3.39.47-1.89,1.98-2.36,1.06-2.36,2.45-2.83,2.45-1.89,1.98-2.27,2.92-2.36,2.48-.94,2.83,1.03,2.45-.83,2.45-2.36,2.45-2.83,2.92-2.83,2.48-1.8,2.45-.47,2.83.09,2.36.56,2.36,1.42,2.92,1.51,2.36,2.01,2.83.56,2.92-1.33,1.98-2.36.59-2.92-1.33-7.17-.38-3.42-.47-2.36-.38-3.39.09-2.36v-2.36l1.06-2.92.56-2.36,1.98-2.36,1.51-2.83.38-.94,1.59-1.42,2.48-1.33,2.92-1.89,2.45-3.31,1.51-2.83,2.1-5.67,2.92-4.72,2.45-1.89,1.03-2.36,1.98-3.31,2.01-2.36.18-8.59-.38-2.45.56-2.83-.47-2.36-2.24-2.45-2.95.35-2.45-.09-2.36-.47-2.36-1.51-3.31-2.45-2.36-1.98-.47-.47-1.89-2.01-1.8-2.92-2.36-2.92-2.36-1.98-1.42-2.92-1.3-2.95-.47-2.83-.86-2.45-1.42-2.83-.38-2.45.56-2.36.09-7.17-2.36.38-2.45,1.89-2.45,2.36-2.45.83h-2.83l-2.36-4.43-.86-1.89,1.03-3.87-1.89-3.39-1.89-1.89-.86-3.9,1.06-2.36,5.84-2.72,6.7-.38,1.42-.38,3.04-5.2,4.43-4.72,9.74-3.6,4.43-5.67,4.55-6.14,4.34-3.66,3.87-.86,11.51.74,8.62,2.57,4.34.09,3.39-2.27,3.48-2.83-.74-9.06,3.01-7.64,1.71-9.06.18-8.15.09-3.87-1.77-5.28-3.31-1.98-2.01-.47-2.83-1.03-1.42-2.48.77-9.53-2.83-3.48-3.31-1.51-5.76-2.01-7.65-2.07-5.67-1.59-5.31-2.57-4.25-1.98-3.87-.09-1.98,1.89-4.81,1.8.56-3.9,3.01-5.67,2.57-4.72,1.51-3.78-.94-1.98-5.2-2.92-9.15,1.71-8.24-.68-8.12-.18-5.76-.21-5.28-.09-3.9-.09-3.31-.56-2.36-1.98.59-2.83,4.81-.86,11.04.74,13.9.3,6.79-1.24,7.73-.83,6.14,1.12,5.31,2.07,1.89,2.36,1.68,7.29-.09,4.81,2.36,2.45,3.31,2.45,13.4,3.69,6.73.09,4.81.21,7.73-3.69,5.87-4.63,3.96-3.31,4.81-.86,3.39-1.77.12-4.37-2.83-1.51-2.36-.94-1.42-1.03-1.89-1.51-2.36-2.92-2.27-5.79-2.75-3.87-8.68-2.15-4.25-2.01,1.03-3.31,8.21.68,7.64-.3,4.84,1.03,2.83.59.83,6.23,3.22,7.26,1.8,3.39,5.2,4.46,4.25,2.45,3.48-3.78-.83-6.7,1.21-8.59,1.51-4.25,2.48-1.89,1.89,1.98-.59,4.72-.18,4.81,2.75,5.84,2.45.94,5.67,1.62-.94,1.89-2.54,3.31-2.01,3.31-.56,2.83,2.83,4.43,2.27,3.87,5.2,4.93,2.83,1.98,3.39.56,2.45-1.89,2.66-10.48,2.07-6.14,4.46-5.19,1.89-.86,3.48-1.89,1.89-1.42,1.98-1.33,2.95-1.89,3.87-2.24,4.9-.86,2.83-.94,2.45.56,3.31,1.51,1.33,2.92-.94,1.42-3.39.38-3.39-.09-4.34.86-1.89,1.42-.59.47-1.42,1.89.86,3.87,4.72,1.51,3.78,2.92,2.92,1.53,1.89.09,3.42.09.94-1.42,1.03-2.36.18-6.23.47-1.42.56-2.92.47-1.89,1.15-4.25.56-3.31-1.89-2.95-4.81-1.59-3.31-1.98-2.27-2.92-2.36-5.31.09-3.39,2.92-.86,4.72,2.95,1.89,1.03.47,2.36,1.89,1.98,5.31-2.27,3.48-2.27,2.92-1.42,3.31-.83,2.92-.38.94,1.89.38,1.51-.94,1.33-4.34,1.89-1.98.86-1.51,2.83,2.83,1.03,2.92-.86,2.92.09-.09,3.78-2.1,3.31-.47,2.36,1.42,1.98,3.9-1.3,3.31.09,4.81.56,3.31,1.51,2.83,2.45,1.42,2.48.47.94.38,1.89.47,1.98-.12,2.36v2.36l-.56,2.45-1.03,1.42-1.89,1.33h-1.51l-.94-.94.09-1.98,1.03-2.83-.38-2.83-2.92-1.53-.47-1.03-.86-2.83-1.42-1.98-2.92.94-2.45,2.27-5.28,3.22-4.55,6.61-7.17.27-1.98,2.83-1.03,2.45-.59,3.78.86,3.42,1.42.94,1.89,1.03,5.4-1.8,5.28-3.22,6.32-.38,4.72,1.62,2.83,2.45,3.31,1.51,2.45-.47,2.48-1.33,1.03-3.87,1.03-3.78.09-4.25,2.1-4.81-1.33-4.81.09-2.83-1.8-6.82-.38-5.76,1.06-3.78,3.01-3.78,3.01-4.25,1.53-4.25.56-3.31-1.89-3.39-2.27-5.28-2.75-4.93-3.31-4.34-1.8-3.39-1.68-7.73.09-3.78.56-4.84-2.83-3.39-2.75-4.9-1.77-4.81-1.89-3.42-.38-4.81.65-5.67,1.62-6.23,1.59-5.67-1.42-2.92-6.14-3.04-3.78-2.92-3.78-3.48-1.42-1.89-1.89-1.98-2.75-4.93-3.69-8.68-8.59-3.6-4.16-4.34-5.28-.18,1.24,7.73-.09,1.89,1.89,3.39,3.39-1.8,3.87-.35,3.78,1.51,3.31,2.92,3.22,8.68-1.15,5.79.38,2.36.47,2.45,1.89,2.36.86,2.45,1.42,2.45-1.98,2.83-1.03,2.36-.12,2.36,1.42,2.45,7.08,4.93,1.42,2.45,2.83,2.45.86,2.92-.47,1.89-.56,2.83-.56,2.36v2.48l-1.03,2.36-.12,2.36,1.8,5.28-.94,1.89-4.25-5.76-4.34-.21-1.42-.47-.94-.94,3.96-3.31.59-3.31-.38-3.39-1.89-3.39-2.83-1.03-2.36-.94-4.81-.21-2.48.47-2.92,1.33-1.98,2.36-2.92.38-2.36-.94-1.33-2.92-2.92-1.06-2.36-1.03-4.72-1.03-2.45-.09-2.48,1.42-1.98,2.36-2.45,1.89-2.36.38-2.36-1.53-2.36-2.92-.94-2.36-1.33-2.45-1.89-2.45-2.36-1.51-4.81-2.01-1.42-.09-3.31-1.98-2.83-2.45,1.51-2.83,3.39.09,1.89-.94,2.01-.38,1.98-1.42,2.92-1.33,2.83-.94,1.03-1.89-5.11-9.71.21-7.17-2.36-1.42-13.14,6.79-4.34-1.03-3.78-1.98-.47-.94-6.61-5.02-2.27-5.28.65-6.23v-.94l2.1-8.15-2.83-.47-3.87,2.27,1.03-5.76,2.54-3.78,4.81.18,2.75,2.48,1.8,8.12-3.01,5.2.35,5.76,1.8,3.39,2.83,2.92,2.83,3.04,2.36-.47,2.45-1.42,2.48-2.75,1.51-2.36,5.37-3.78,2.92-.86,2.36.09,2.48.47,1.42,1.53,1.42.94.35,4.81.86,2.45.47,2.36,2.66,8.68,1.42.59,6.79-1.33,3.39-2.27,3.04-5.67,2.45-3.31,1.98-2.83-1.33-3.39-4.25-4.46-.27-5.28,1.03-4.25,2.45-4.72,3.04-3.31,3.87-.86,14.91-.56-.35-5.28-2.27-5.84,2.54-7.08,3.6-6.14,9.24-4.07-1.3-5.84-6.73-3.04-.83-3.31.56-3.87,4.34-.86,2.83,3.87,6.14,2.57,3.31,4.9.3,7.65,3.78,1.53,6.23,2.54,3.69,3.96.94,2.83.35,4.84-.65,5.76-4.43,5.2-2.48,2.75,2.66,10.1,2.18,10.69,2.24,4.81.86,2.36.47,2.45,1.42,1.98,1.33,1.89,1.89,1.98,2.83,3.42,2.36,3.39,2.75,4.43,5.11,6.82,3.87,1.03,4.34-2.27-.77-6.7-2.24-4.93-.38-6.7-2.75-5.28-.65-13.4-2.18-8.71-.77-7.26-.83-7.64.65-6.26,1.33-12.84.56-4.81,1.59-6.14.12-5.28,2.07-5.67.09-4.34,1.03-4.25.68-6.26,1.21-9.06,1.15-9.06,1.68-9.06,2.18-32.97,1.12-6.7,1.06-3.78.09-2.92-1.42-1.89-2.83-.12-3.39-.09-2.83-1.03-2.36-.94-.94-1.03-1.42-.47-2.01-.09-1.42.47-2.92.83-3.87,1.89-2.45.86-1.51,1.42v1.89l.35,3.39.94,2.95-1.12,4.25v2.36l-1.98,2.83-3.04,3.31-1.51,3.31-1.03,2.36-1.03,3.31-1.51,3.31-2.01,2.36-2.92,3.31-3.39.35-3.87.38-.47.47.27,7.17-2.15,10.51-4.46,3.78-2.45,1.77-5.84,3.22-5.76-.56,2.54-2.83,5.28-1.8,3.98-6.61,2.83-15.67,1.21-9.53.47-2.92-9.24,4.6-2.48,3.22-7.26,3.69-3.87,1.33-4.46,1.42-2.45,4.25-2.07,4.72-4.34.86-.38-5.31.18-5.28,1.51-5.2,2.95-.94,4.34-.38,4.43-1.77,3.87-1.8,17.47-7.76,2.95.12.09-5.79-1.8-2.92-4.43.86-4.46,5.2-13.61,5.84-2.45,1.42-3.87.86-4.16-6.32-1.42-2.45-5.28-.59-4.72-1.03-3.78-3.48-3.78-2.92-2.83-3.9-4.81,2.27-3.87-1.51-.3-4.81-1.33-6.7-6.23.27-5.84.86-3.31-.56-3.42-.09-4.34-.59-.86-1.98-.94-2.36,2.18-9.06,10.1-1.71-8.12-1.59-5.76.38-6.32,3.1-3.42-1.51-2.24-5.76-1.89.94-1.53,1.12-.27,2.01-1.51,1.42-1.42.47-2.18-.86-1.12-1.62-1.62-1.89-1.42-1.89-4.81-2.54-1.8-2.45.09-5.2-.35-2.45-.94-1.42-1.42-.59-2.48,1.42-1.03.94-.47,1.89-1.98.94-.94.47-1.98-.09-.86-.94-2.45-.09-1.98,1.42-2.01,1.89-2.24,1.12-5.31-2.92-1.42-3.39.12-1.89.47-3.39,1.03-2.83v-1.89l-1.89-1.51-2.45.47-1.42.94-2.01.94-1.89-.59-1.42-1.42,2.95-4.72,1.03-2.45-.94-1.89-2.92-.94-2.36-.09-3.42,1.42-2.92,1.42-2.27.38-2.83.86-2.45,1.89-.56,1.89.47,1.51,1.42.47h1.42l1.51-.38,1.42-.94,2.45-.94,1.89.56.86,1.42.94,1.98v1.42l-1.03,1.42-1.42.94-2.36.38-2.92-.56-5.2-2.45-1.98-.56h-1.89l-3.78-3.04-2.48-1.21-3.39-1.06-1.12.47-1.24.47-1.42.68-2.45.27-3.87-.56-2.36-.94-2.92.86-4.25.47-5.67-2.07-1.89-1.42-1.89-2.48-1.89-2.92-2.36-2.45-4.93-3.31-.18-2.07v-1.42l-.77-1.33-2.07-1.15-3.69-.35-1.89-.94-2.92-.94-4.72-3.51-2.36-2.83-1.98-.56-1.89-.94-2.36.47-2.01.94-.94,2.36-.56,3.31-1.21,3.31-1.53,2.83-1.89.94-2.45.47-1.89-1.51-.86-1.98-.47-1.89-1.42-2.48.12-2.83-.38-2.92-1.42-2.83-3.78-4.9-2.36-1.98h-2.36l-.94.83-1.51.77-.94-.94-2.36-3.39-2.83-2.92-2.83-1.53-4.84-.47-4.34-.09-1.98.94-1.42,1.42h-1.42l-1.42-.56-.94-1.42-1.42-1.51-2.36.47-1.51,1.42-3.04,1.89-1.89-.47-1.3-1.62-.47-.94-2.83-1.51-1.53.94-1.42.38-1.51-.18-7.17-3.98-3.87-.56-2.92.47-1.89.94h-2.48l-1.21-.94-4.25-4.43-1.89-1.06-1.03.47-1.89-.47-1.15-.94-2.54-7.26-.38-2.45-.94-1.89-1.89-1.03-1.42-1.42-1.24-2.27-.56-3.13-.38-2.36-.94-1.21-1.89-1.71-2.83-.77-1.42-1.98-1.98-.94-1.89-.09-2.45,2.36.47,2.45.94,1.42.94,2.45-.09,1.89-.94.94-1.89.94-2.92.38-7.85-.94-7.17-1.59-5.2-1.62-1.89-1.77-.47-2.1-.38-1.89-1.42-1.51h-2.45l-1.89.86-2.45.47-2.95-.09-2.83.94-3.39,2.07-3.39,3.31-2.45,2.83-1.03,2.36-.94,5.28-.12,2.83v2.45l1.42,2.36.86,4.84-3.87,5.19-1.51,3.39-1.51,2.83-.47,3.31-1.53,2.83-1.42,1.89-2.92,2.36-3.48.47-2.92-.09-4.72-1.62-4.25-3.87-2.83-3.39-2.36-1.8-2.36-2.36-2.95-1.03-3.31-.94-2.92-.09-3.39.94-3.78,1.89-2.92,2.83-1.51,1.89v2.36l1.3,4.34,1.89,3.39,2.48,2.36,2.36,3.39.83,2.36-.47,2.92-1.03,2.36-3.39,4.25-.94,2.36-1.03,1.42-1.89,1.42h-3.31l-3.13,1.62-1.21.65-1.42-.47-.94-1.03-1.42-1.42-1.42-.09-1.53,1.42-1.51,2.36-.27,11.98-2.1,5.67-.56,4.34-.09,2.83,2.36,3.42,1.42,3.39.86,4.34,1.21,8.59-.56,2.36-1.51,2.36-1.98,2.1-2.48,4.72.47,1.3.86,1.42.94,2.01-.47,1.42-7.08,11.81-1.51,5.2,2.66,6.49.47,2.66-.47,1.89-.12,2.45-1.03,4.72,1.33,3.87,5.2,6.35,2.75,5.84-.09,3.78.83,3.87.94,2.36,2.83,3.04.86,1.42.47,2.92.38,2.36.94,1.89,1.42,2.45,2.83,2.92.38,4.37.38,2.36.94,2.92.94,1.42,1.89,1.51,1.98.94,4.25,5.28,3.22,10.6,2.36,5.76.35,7.26.94,4.72-.18,8.71-.47,2.36-.94,2.36-1.03,2.83-.77,5.93-1.8,6.05-.56,2.36-3.39,9.53-1.12,8.59.94,5.79.94,1.89,1.42,2.45.35,2.36-1.51,5.76v4.81l-.09,1.42-.47,2.83v5.87l.38,3.31-.09,2.36-.47,2.36v1.98l-1.06,1.89v1.89l.47,1.42v1.42l-.56,2.92-.94,2.36-.94.94-1.03,1.42-1.42,2.83-1.03,5.76-1.98,2.36-.94,1.89-2.1,5.28-.47,1.89v1.89l-1.03,2.48-.38,2.36-1.98,2.36-3.96,3.66-.12,2.95,2.36,4.34,1.24,6.23-.47,2.83-.09,1.51-1.51,2.83-2.01,1.8-2.15,1.51-1.24,1.8-.56,2.83.47,1.98-.09,2.83.94,2.92.86,3.9.47.47.83,4.34,1.8,4.81.86,4.34,1.33,4.81.47,2.83-.09,3.42-2.1,4.72-1.42,1.89-4.43,4.13-1.98,2.36-2.01,1.89-.94.47-5.37,2.75-4.34-.09-.94.47-1.42.47-1.51.77-2.01.35-.83-1.21-.59-.68-1.42-1.98h-1.42l-1.98.47-2.83.94h-1.98l-2.27-.56-1.42-.47-9.15-.18-4.72-3.04-.94-.65-1.42-1.8-2.83-1.03-3.04.18-2.07-.27-1.8-.21-1.98,1.42-2.27.56-2.07.3-3.78-1.42-2.92-.09h-1.42l-2.01.94-1.89.47-2.24.86-4.84-1.06h-1.89l-1.98.86-1.98,1.89-2.36.47-2.92.38-3.39.86-1.89.94-3.42.86-3.87-.68-1.98-.56-1.8-.86-1.51-1.03-1.89-1.98-1.98-.47-1.42-.09-.47-1.42v-1.89l-.38-1.89-1.98-1.06-2.1-2.83-.94-1.51-.94-2.36-1.42-1.03h-1.89l-1.42-.56-.94-1.42-.47-3.39.12-1.42-.94-2.95-1.89-1.42-1.42-.56-1.8-1.33v-2.07l-.47-2.83-.86-2.45-1.42-2.45-1.42-2.83-.38-1.53-1.03-1.68-.77-4.55-.47-2.92-1.51-4.07-.38-6.23-.09-4.99.56-4.37,1.06-4.25,1.51-5.28,1.12-4.72.09-4.34-.47-6.52-.74-4.99.09-4.72.56-3.42,1.03-3.78,1.62-3.78.09-5.28-.86-3.69-4.25-11.04-4.25-4.81-4.25-4.34-3.31-2.95-3.39-2.92-2.83-3.87-1.89-4.34.09-6.7-.94-2.83-1.42-1.53-1.8-2.92-2.36-1.89-.94-1.51-1.42-2.92-.83-3.31.56-2.92,1.03-3.31,1.98-5.2,1.03-3.78,1.62-4.37,1.59-2.83,1.98-2.83,5.31-4.25,1.98-1.89-72.08-5.67-106.74-8.38-37.4-2.66-11.63-.86-29.84-2.27-71.58-5.46-94.93-7.38-3.9-.27-269.94-20.13-131.21-10.09-142.63-11.07-1.98-.09-1.89-.47h-2.57l-6.14-.47-43.33-3.69-94.28-7.56-137.14-11.25-88.32-7.56-30.82-2.63-175.87-15.41-12.57-1.12-49.86-3.6-68.86-5.11-87.55-6.49-91.06-6.91-90.21-6.43-14.46-1.03-157.27-11.42-209.22-15.59-52.33-3.96-2.92-.38-2.83-.21-5.58-11.6-2.54-3.22-8.12-7.73-2.92-3.42-1.89-5.2-.47-3.87-1.89-3.87-2.83-2.83-1.89-1.51-2.95-.47-6.23,1.42-2.36.38-2.36-.47-1.89-3.42-3.57-14.43.09-3.78.47-2.92-.38-3.78-3.22-7.08-2.83-4.55-1.89-5.76-.86-1.98.12-5.67,1.03-4.84-.47-3.87-1.62-4.04-1.89-3.9-1.42-2.83-.47-3.87-.47-3.31.47-3.39.59-2.83,1.98-3.13,2.36-2.63,2.45-2.83,1.51-1.15.56-1.89-.65-2.24-3.6-4.55-2.07-2.18-.94-3.31-.18-2.63,1.51-2.92.47-2.36.09-2.83-2.75-2.66-1.51-2.27.56-3.31.94-3.1,1.51-3.78v-4.84l-.47-2.36-.74-1.21-3.51-3.13-2.45-2.92-3.78-4.25-6.32-9.15-8.41-13.52-2.83-5.28-.86-2.92-1.89-2.95-2.07-1.3-4.16-2.1-2.36-1.98-.86-5.28.56-6.23,1.62-5.67.94-2.83,1.03-4.37-.38-4.34-.94-2.83-2.92-3.22-2.83-2.36-4.34-1.51-7.17-1.98-1.89-2.36-.94-2.92v-4.72l1.51-4.81.94-5.31-.38-4.72-1.42-5.76-154.82-3.48-183.16-4.46-99.06.59h-2.48l-1.12.09-6.14-.21-277.23-6.97-207.04-7-75.95-2.92-60.54-2.36-182.6-6.91-41.18-1.59-98.62-4.46-129.88-6.23-11.98-.47-63.29-7.26-12.49-.47-9.24-.38-52.9-2.45-37.04-1.71-240.57-11.33-45.16-2.07L111.6,5.98l-56.32-2.63-13.02-.77ZM5544.51,425.57l-7.73,2.15-13.99.68-2.92,1.77.38,3.9-1.62,5.2-6.32,3.19-4.72-1.03-6.61-6.41-5.37,1.3-8.15-.65-4.34-1.51-9.15.74-.56,3.31,2.92,1.53,3.87-.86,3.87-.38,8.59-.3h.94l4.37,2.48,1.3,3.39,3.31,4.43,3.78,1.03,5.4-2.24,4.34-2.36,2.92-.38,4.34-.86,5.4-1.8,1.03-5.67,2.92-2.36,5.28.09,2.95-1.3,2.07-3.78,1.51-3.31ZM5550.73,427.07l-2.92.47-2.07,6.61-1.98,3.31-3.42,1.89-4.34-.09-2.54,3.19-1.51,3.9-3.98,4.13-2.92.94-1.42.38-5.37,2.27-5.2-1.51-4.37,1.33,1.33,2.45,1.89,1.89,4.25,2.54,3.87.09,4.84,1.53,4.25,1.98,3.31,3.96,5.76-1.33,3.96-2.24,1.89-1.42,3.98-2.75.09-6.7,1.12-5.79.56-3.31,1.53-2.83,5.93-7.08-2.27-4.34-2.36-2.45-1.89-1.03ZM5559.53,440.3l-3.48,3.69-1.53,5.28,2.27,6.7,2.36-.38,1.89.94,1.89,1.03,1.89,1.53,1.42,3.31.38,3.87-1.59,5.76h3.39l2.45-.38,2.36-1.42,1.98-2.83,1.62-4.72.09-4.25-2.27-4.43-3.31-1.98-2.36-2.95-2.83-3.87-2.75-3.87-3.87-1.03ZM5561.89,561.47l-9.27,4.07-2.45,4.72,1.24,6.7-.68,6.23,2.27,6.82,1.89,4.34,2.75,5.28,3.22,4.93,4.25,4.9,3.69,4.81,3.78,2.57.27-8.71-1.68-9.06v-2.45l-.3-5.28-5.2-6.82,1.59-6.14,8.88-8.41-4.25-5.37-10.01-3.13ZM5533.85,586.14l-1.42,1.42v.94l-.12,1.03,1.42.94,2.48.09,1.89,1.89,3.66,4.43,6.26.68.56-.94.47-1.42-.94-1.98-.86-2.01-1.89-1.42-5.28-2.54-2.36-1.03-3.87-.09ZM5539.61,609.29l-4.34.83-3.9.86-3.48,3.31-3.48,7.56-4.07,6.14-5.37,3.69-2.95,3.78-2.45,3.31-1.03,2.83,1.42,1.51,1.89.94,1.42,1.51.38,1.89,2.45.12,1.42-1.42,2.45-2.83,7.64,2.63,1.89,2.36,3.9.68,4.34-.38,2.83-1.42,2.92-.86,1.51-2.83.56-3.87,3.04-2.27-1.8-6.32-4.81-2.48-.3-7.73,3.04-3.22-1.33-5.76-3.78-2.54ZM5579.93,633.25l-3.1,8.03-.21,7.67.47,1.98,1.33,3.39.94,2.36,1.8,2.45,1.42,2.45,2.83,4.37,2.75,5.37,2.83,2.92-.12,2.83-1.59,4.25-.56,6.23,2.27,4.37.94,2.45,1.3,2.45,2.36,3.87,1.33,2.92,2.36,4.37,2.75,3.87,3.31,1.51,5.28,2.54,2.92-.35.59-4.37-.38-5.28,2.45-1.89,2.36,1.51,1.89,1.53,1.33,4.34-1.03,4.25-2.57,4.72-1.03,3.39.47,2.83,1.71,6.79,2.15,9.18,2.27,6.23,1.89,1.03,9.74-5.58-1.15-9.06-3.69-7.26-1.77-8.24-1.24-5.76-.38-4.34.21-10.48,2.83-15.79-.38-5.76-1.24-7.17-6.79.3-3.39,3.78-6.43,6.97-4.43,3.22-2.36-1.42,2.54-4.72,3.96-4.25,2.95-2.83-8.62-4.99-1.3-2.83-4.25-4.93-4.63-4.9-1.89-1.98-5.67-4.93,1.59-5.67-2.36-4.43-3.78-2.45-3.78-1.06ZM5611.48,658.96l-1.42.86-1.03.94,4.34,2.54.86,4.34,3.39-2.36.09-3.78-2.36-1.98-3.87-.56ZM801.13,664.42l-4.37.94-4.9,1.33-3.78.47-3.87-.56-5.28-.09-4.84.94-5.84,2.27-4.72.47-4.81-.12-3.87.47-3.42-1.03h-1.89l-2.92,1.42-1.89.86-5.28-.94-2.92.18-1.89-.27-4.34.38-3.9.94-4.25-1.53-3.39.94-3.87,1.42-4.81-.09-4.34-.09-3.42,1.42-5.76,1.33-6.23-.47-.94.38-3.87,1.89-5.4,1.42-5.28.35-5.76.38-4.34.47-5.28.86-8.15-.09-7.26.38-6.23,1.42-5.76.83-7.29.86-5.76.94-6.23.38-7.76,1.8-8.68,1.33-7.64.83-7.29,1.33-5.28-.94-4.34.38-4.34.94-4.34,1.8-6.73,1.42-9.15,1.33-6.23-.59-4.34,1.33-7.76,1.89-5.76.86-5.84,2.36-1.89-.56-1.42-1.89.56-3.87-1.98-.47-5.79,3.31-4.43,4.25-7.17,1.3-6.82.86-5.19-1.51-3.39,1.42-3.39,3.31-3.87.94-6.82,1.8-5.28.94-5.76.86h-3.39l-3.78-1.06h-3.87l-4.37,1.33-5.76,1.89-4.34.86-6.23-1.98-4.25-6.7-1.42-.59-5.4,2.83,2.36,5.79,1.42,3.39-1.51,1.89-2.36-1.89-.38-3.39-3.39.94-6.32,4.25-13.52,2.63-9.62-.09-8.12.38-6.82,1.89-6.7,1.8-6.23-.59-4.81-1.03h-3.42l-3.87,1.42-10.09,1.8-6.23-.09-9.65-1.62-9.53-2.92-10.48-5.46-9.18-3.42-5.2-.56-2.45.47-.56,3.31,2.36,4.34,3.39,2.95,4.72,2.92,4.81,2.45,6.26,1.51,5.67,1.98,5.28,1.53,4.81.56,5.76.09,5.28-.47,5.31-.38,4.81-.47,4.81.09,3.87.59,4.34-.94,4.37-.47,7.65-.38,3.39-.38,6.7-.47,7.29-1.33,6.23-.38,11.51-.35,10.6-1.8,12.07-.77,3.87-1.42,3.31-1.42,2.95-.86,4.34-.94,5.28-.35,5.28-.47,6.23-.38,5.31-.86,4.81-.94,3.96-1.89,4.25-.86,5.87-1.42,5.28-1.33,4.34-.94,4.34-.35,6.23-.94,5.31-.86,7.26-1.42,11.51-.77,6.82-1.33,5.28-1.42,4.81-.94,5.28-.83,4.84-1.42,6.23-.38,5.76-.86,4.81-.47,4.34-.86,5.31-.47,5.84-1.33,3.78.12,3.87-.47,4.34-.38,4.37-.47,5.76-.86,5.28-.94,5.76-.38,4.93-1.42,4.81-.38,4.81-1.42,3.31-.35,4.34-.47,4.34-.38,7.76-.38,5.76-.94,8.68-1.33,4.84-.38,3.78-.94,4.9-.83,5.28-1.42,5.76-.38,6.73-.86h1.51l4.25-.47,5.37-.38,5.76-.86,5.31-.94,6.23.59,5.28-.86,6.7-.38,4.81-.47,2.01.09,2.36-.47,5.84-.38,3.78-.94,3.39-.47,3.87-.35,4.37-.47,3.31-.38h4.34l4.81-.86h3.87l3.87.09,3.78.56h4.84l5.84-.83,5.28.09,3.78-.94,4.34.56,5.79-.94,4.81.09h2.45l2.36.09,4.34-.47,5.76.59,2.95.09,6.23-.47,8.68-1.33,7.64.09,6.26.09,4.81-.35,4.81.56,7.73.09,10.04,3.01,6.7.59,6.23.56,4.81.47,4.81.56,3.31,1.03,2.01.47,2.36.56,1.89.47,4.34.12,4.81.94,5.76.56,4.81.56,5.79,1.03,6.23.09,6.23,1.53,7.64,1.51,5.28.56,5.79.56,6.23,1.03,4.9-3.78-2.36-5.28-6.7-1.51-34.57-4.34-6.7-.56-4.84-1.53-2.83-1.42-3.87-.56-4.81-.56-3.78.47-4.9.86-7.2.38-6.7-1.06-6.23-1.03h-4.34l-4.81-.09-4.37-.56-5.76-.09h-4.34l-3.31-2.48-1.89-1.51h-3.87l-7.64.38-4.84.38h-3.87l-5.76.86-4.81-.12-6.23-1.03-5.79-.56h-4.81l-4.81.38h-4.81l-4.81-.09-4.72-1.06ZM5600.91,719.5l-3.42.86-2.92,2.36-2.45,3.31-.56,1.42-.47,2.36-.21,5.76,1.24,9.62-.09,4.72-1.62,6.26-1.59,6.14-1.59,4.81-2.57,6.14.94,1.89,1.42,1.51,2.92.09,4.72.09,4.46-2.72,3.87-2.83,3.48-4.25,2.01-2.27,1.98-1.89,5.84-4.63,6.43-4.63.94-.47-2.83-2.45-1.89-2.92-1.33-2.45-1.8-4.84-2.15-9.15-2.83-5.37-4.25-2.95-5.67-3.48ZM5514.1,750.5l-3.98,3.19-1.98,2.36-1.59,5.79-.56,5.67-2.57,5.28-6.32,4.16-9.18-2.18-6.61-3.96-2.83-2.01-3.31-.09-.56.94.47,1.42,1.89,1.98,2.36,2.48,2.75,2.92,5.76,2.54,3.31,1.03,1.42.94,1.42.59,2.45.56h3.31l8.8-2.18,2.45-2.36,1.51-4.72,1.15-5.67.09-3.87.56-2.83,1.03-3.39,4.84-.77,4.72,1.98,4.81.12.94-.47.56-1.42-1.42-2.36-7.08-4.07-4.34-1.51-4.25-.09ZM1706.28,989.94l-2.36,1.42-7.26,5.2,2.27,3.39,9.53,6.32,10.95,8.8,10.01,5.46,8.97,5.87,10.01,5.46,9.56,4.93,9.53,5.37,9.06,6.43,4.34-3.31-7.08-5.4-11.42-6.88-2.83-3.87-3.87-1.53-4.25-2.45-5.76-1.98-5.19-3.01-5.2-5.79-5.67-5.84-2.01-.56h-1.89l-6.23-1.51-2.27-7.76-2.36-3.39-.94-1.42-1.42-1.51-2.83-.47-.94-1.42-2.45-.56ZM1823.79,1067.96l-1.42,1.89.38,5.28,7.47,12.66,8.38,13.49,14.64,16.06,3.42,1.53.56-7.67-1.42-3.39-8.12-3.01-7.08-8.24-3.6-11.6-3.87-2.92-1.33-4.84-5.67-8.68-2.36-.56ZM3431.14,1180.15l-1.03,2.36.94,2.01h1.89l4.81.09.59-2.83-1.42-1.51-5.79-.12ZM3439.64,1184.61l-.94,2.45,2.36,1.89,1.89,1.03,3.42-.47.47-2.83-1.42-1.89-5.79-.18ZM2623.45,1394.3l-4.34,1.33-2.54,9.06-5.4,4.25-4.34,3.78-3.87,3.78-3.98,2.83-2.45,2.83-4.34,2.75-3.87,2.36-9.74,7.56-8.77,5.55-3.9,3.78-5.28,1.33-3.39,1.42-3.39,2.83-2.92,4.72,1.77,3.39h3.42l2.92-2.24h2.36l-1.03,3.78-4.84,3.31-5.37,2.83-5.28.83-5.2-2.45-4.34-.56v1.89l1.89,2.45,1.3,2.36-4.81,1.42-4.34,2.74-7.17.86-.56,3.39-27.98,5.28-9.15,2.27-12.1,4.07-10.1,3.19-18.42,10.69-5.76,2.83-1.51,3.31-9.65-1.12-1.42,1.89-4.81-.59-.56,2.48,1.89,3.39-6.23-1.62-2.01,2.83.94,4.84-6.79,3.78-12.19,7.44-13.49,5.11-13.05,5.02-7.73,3.22-7.76,2.83-6.23,1.77-7.73,3.22-8.71,2.75-7.17,1.33-10.57-2.1-12.87-4.52-11.9-5.49-8.5-7.35-12.84-9.83-4.25-1.51-3.39-.47-1.98,2.36,1.42,2.36,3.31,3.48,5.2,3.39,7.17,5.4,6.14,4.43,3.31,1.98,3.78,2.92,2.83,2.95,3.78,5.84,2.27,7.17,1.89,1.98,5.28.59,7.65-.86,17.39-4.07,17.86-5.93,14.99-5.96,27.04-10.57,9.71-3.69,7.76-3.69,10.66-7.08,9.18-6.05,5.37-2.36,12.57-6.52,12.07-6.97,13.14-6.43,13.52-5.58,15.94-4.04,18.8-4.93,12.01-3.22,11.69-6.49,9.65-5.11,11.72-7.94,11.6-8.97,3.98-6.14,4.9-5.2,6.32-5.67,7.85-6.52,5.37-5.67,6.82-6.14,5.84-5.2,5.87-6.61,4.9-3.78,1.98-3.31-.47-3.87-1.8-2.92-2.45-.47ZM3644.99,1394.87l-3.87.86-.47,2.36,2.75,5.84,1.98-.94-.47-3.31.56-2.45-.47-2.36ZM2247.25,1462.4l-8.62.77h-3.87l-3.39-.59-3.31.86-3.39,1.42-2.92,1.42-3.42,2.36-1.42,1.89.86,1.89,3.31,2.45,4.34,1.06,3.42.56,2.83,1.98,2.83.47,5.76,1.03,4.34.09,1.42,1.06-1.03,1.89-4.34.35-7.2-.09-7.17-1.59-8.59-2.1-4.25-2.45-3.31-4.34-4.25-2.45-4.34-1.51-7.17-1.62-8.62-.56-8.12-1.12-7.73-.12-9.06.86-7.76,1.33-5.76,1.8-.56,1.89,2.36,2.92,6.23,2.45,9.06,3.04,11.9,6.97,9.45,6.35,10.98,8.88,10.39,9.24,10.39,8.32,9.53,4.52,11.9,3.51,8.68-2.27,9.74-2.75,3.87-2.75,2.92-6.7,1.15-6.23,2.92-4.72,3.48-5.76.94-3.78,2.01-2.83,2.45-2.36,3.39-3.31,2.92-3.31-.86-2.45-3.87.47-2.83-2.01-3.78-3.87-5.2-4.9-3.87-1.03-5.28-1.06-5.2-1.98-5.28-1.51ZM3793.85,1515.77l-2.92.47-.94.94-1.42.47-2.92.86-.56,2.36,5.28,1.59h2.36l3.39-.86,2.45-1.89-.35-2.92-.94-.47-3.42-.56ZM3780.36,1517.95l-4.34,1.3-1.89.47.83,4.37h2.36l2.95-1.33.56-2.92-.47-1.89ZM3800.46,1521.73l-1.03,2.36.94,3.87,2.83,2.45,3.39-2.36,2.48-2.83-3.31-3.39-5.31-.09ZM3805.01,1532.86l-.94,2.36.86,3.87h2.45l2.83-.83.56-2.95-.47-2.36-5.28-.09ZM3809.64,1687.5l-1.03,2.36,2.36,2.45.94,1.42,2.92-.86.47-2.92-.38-1.89-5.28-.56ZM3822.01,1691.55l-.94,1.42,4.16,3.87,5.28,1.62,3.39-.94-.47-2.36-2.83-1.98-8.59-1.62ZM3833.82,1700.9l-1.03,2.36.94,3.87h2.36l2.45-1.33,1.03-2.45-.47-2.36-5.28-.09ZM3913.63,1766.37l-1.03,2.36,1.33,3.87h1.98l2.83-.86,1.03-2.92-.38-2.36-5.76-.09ZM5400.55,1822.46l-3.87,1.42-2.92.86-.47.94.38,2.92.94,2.36,1.42.59,2.36,1.03,2.83,1.51,2.83,2.92,1.89.47,1.98-.38.47-3.39-1.33-3.87-2.75-4.81-3.78-2.57ZM5419.18,1827.77l-3.39.35-1.06,1.42-.09,4.37.38,5.28-.47,2.36-.56,1.42-1.98,2.36.35,6.23.86,4.34,2.27,4.93,3.22,7.26,2.83,1.03.94-.94.09-1.51v-3.31l.18-5.76.47-.94,1.06-1.42,4.34-3.31,2.45-2.27,2.07-4.81-.35-5.28-1.33-3.42-3.78-4.81-2.83-2.45-5.67-1.12ZM4018.57,1864.96l-1.51,2.36,1.42,3.9h1.89l2.92-1.33,1.03-2.36-.47-2.45-5.28-.12ZM4026.13,1871.4l-1.42,1.89,1.33,4.34h2.36l2.45-1.33,1.03-2.92-.47-1.89-5.28-.09ZM4020.93,1889.05l-1.42,2.36,1.33,3.9h1.89l2.92-.86,1.03-2.92-.47-1.89-5.28-.59ZM4028.49,1897.84l-2.45.38h-1.89l-1.51,1.42-.47,2.83-1.03,3.39.94,1.42,2.36.56.94-.47,2.45-1.89,1.51-2.83.56-2.45-.47-.94-.94-1.42ZM4021.96,1912.57l-1.51,2.36,1.33,3.87h1.98l2.83-1.3,1.03-2.36-.47-2.48-5.2-.09ZM4096.02,1970.75l-.94,2.36,1.33,3.9,1.89.09,2.92-1.42,1.03-2.36-.47-2.45-5.76-.12ZM4093.87,1983.71l-.94.94-2.1,5.67,1.42,3.39.86,1.98,4.72,2.92,5.37-2.72.59-3.9-1.89-3.87-.86-1.42-1.42-1.98h-1.42l-1.03-.47-1.42-.09-1.89-.47ZM4099.71,2004.49l-1.51,2.36,1.33,3.87h1.89l2.92-.86,1.03-2.92-.47-2.36-5.2-.09ZM4115.3,2012.99l-6.32,6.52,6.02,7.35h1.89l2.95-.86.56-2.92v-1.89l-5.11-8.21ZM4092.63,2020.16l-1.03,2.36.94,3.87,2.36.09,2.92-1.42.47-2.36-.38-2.45-5.28-.09ZM4119.25,2029.79l-1.03,2.48.94,3.78,2.36.09,2.92-.94.59-2.83-.47-2.36-5.31-.21ZM4209.93,2030.26l-1.03,2.36,1.42,3.9,1.89.09,2.92-.94.94-2.83-.35-2.45-5.79-.12ZM4231.39,2036.04l-1.51,1.89,1.42,3.87,1.89.47,2.92-1.33,1.03-2.92-.47-1.89-5.28-.09ZM4126.81,2036.69l-2.92.47-1.42,1.89.38,2.36.47,1.98-.56,1.89-.94,1.89-.09,1.89,1.42,1.98,1.89,1.06,2.45-.47,1.03-3.78,1.51-4.37-.94-2.92-2.27-3.87ZM4219.85,2037.73l-1.51,2.36,1.33,3.87h2.45l2.45-1.42.94-2.36-.35-2.36-5.31-.09ZM4203.53,2038.76l-1.51,2.36,1.42,3.9,1.89.09,2.92-1.42.94-2.83-.38-1.98-5.28-.12ZM4162.7,2040.38l-1.42.86-1.51,2.45-.09,2.83.47,1.42.38,2.92-.47,2.83,3.31-.86h1.98l.94-.38,1.89-.47,1.12-4.81-.94-1.89-.94-1.98-.47-1.42-1.89-1.51h-2.36ZM4134.84,2043.6l-1.51,2.36,1.33,3.87,2.45.09,2.36-.94,1.03-2.83-.35-2.45-5.31-.09ZM4306.01,2047.17l-1.51,2.36,1.3,3.87,2.01.12,2.83-1.42,1.03-2.36-.38-2.48-5.28-.09ZM4148.06,2051.04l-.94,2.48.86,3.78,2.36.09,2.92-1.42.59-2.36-.47-2.36-5.31-.21ZM4110.19,2053.7l-1.03,2.36,1.33,3.87h1.98l2.83-.86.56-2.92.09-2.36-5.76-.09ZM4129.76,2057.95l-2.95.38-2.36,1.42-2.45.38-2.92,2.83.86,6.32,2.36,2.36,4.81-1.33,2.36.09,1.89,2.01-.56,3.31-3.87,2.36-3.9,3.19-.09,2.95,1.89-.47,8.8-4.63,6.7.18,3.39-1.42-1.89-4.34-2.36-1.03-1.8-4.81-.35-3.9-3.78-3.39-1.89-1.98-1.89-.47ZM4150.72,2064.56l-1.03,2.45.86,3.78,2.45.09,2.36-1.42,1.03-2.36-.38-2.45-5.28-.09ZM4087.61,2078.64l-1.51.94-1.03,2.83.94,2.92,2.83,1.03.94,1.89-.56,2.45-.47,1.89-.09,2.95,1.42.94.47.47.94-.94,1.51-1.89.47-.94,1.03-3.31.09-2.48-.47-2.36-.86-2.45-.94-1.42-2.36-1.98-2.36-.56ZM4133.42,2086.84l-1.42,2.36,1.33,3.87h1.89l2.92-.83,1.06-2.95-.47-1.89-5.31-.56ZM4143.81,2093.75l-.94,2.36.86,3.87,2.36.09,2.92-1.42.59-2.36-.47-2.45-5.31-.09ZM4350.67,2112.55l-4.34.35-2.45.38-2.92,1.89-1.89.94-.56,2.36-.47,2.83.35,1.98.94,1.89.94,1.53,1.42,1.42,2.36.09,2.36-.47,2.95-1.33,2.45-1.42,2.92-2.83.56-2.83-.47-2.92-2.36-2.45-1.8-1.42ZM4112.29,2113.29l-1.42.94-2.01.38h-3.31l-1.89-.56h-1.03l-.47,2.36.47.94.38,1.51.94,1.89,2.83,1.51,2.92.56,2.36-.94,2.92-2.83,1.06-3.78-.94-.47-.47-1.03-.94-.47h-1.42ZM4139.47,2118.69l-2.36,1.3,1.33,3.9,2.36.09,4.34-1.33.56-2.45-2.83-1.03-3.39-.47ZM4356.07,2129.44l-1.98.94-1.42.38h-2.48l-2.36,1.89,2.18,6.7,2.92,1.53,1.8,1.98,3.39.09,3.87-2.83,1.06-4.81-2.27-3.39-3.31-2.01-1.42-.47ZM4342.94,2137.76l-1.03,2.45.86,3.78,2.45.09,2.36-.94,1.03-2.83-.47-2.36-5.2-.18ZM4346.07,2148.92l-1.06,2.36,1.33,3.87,1.98.09,2.83-.94.59-2.83v-1.98l-5.67-.56ZM4369.86,2155.71l-1.03,2.36,1.42,3.87h1.89l2.92-1.33.47-2.45.09-2.36-5.76-.09ZM4356.34,2157.3l-.47.94h-.94l-1.42-.56-1.98.94h-1.42l-1.89-.09-1.51.94-.47.94,2.36,1.98,2.92.09h2.36l2.36-.83.56-2.48-.47-1.89ZM4360.23,2157.42l-1.53,2.36,1.42,3.87h1.89l2.95-.86.94-2.92-.38-2.36-5.28-.09ZM4385.62,2223.72l-.94,2.45,1.33,3.87h1.89l2.92-1.42.59-2.36v-2.36l-5.79-.18ZM4403.68,2232.78l-1.53,2.36,1.42,3.87,2.36.12,2.48-1.42,1.03-2.36-.47-2.48-5.28-.09ZM4400.17,2240.42l-1.03,2.36.94,3.9h2.36l2.45-1.33.94-2.45-.38-2.36-5.28-.12ZM4404.24,2252.53l-1.51,2.36,1.3,3.87h2.48l2.45-1.33.94-2.45-.38-2.36-5.28-.09ZM4449.11,2304.39l-3.78.86-1.03,1.42.47,1.98,1.42,1.51,3.78-1.42.56-2.83-1.42-1.51ZM4454.87,2306.45l-1.03,2.36.86,3.87h2.45l2.83-1.3.56-2.36-.38-2.48-5.28-.09ZM4473.58,2328.95l-1.06,2.36,1.33,3.87,1.98.09,2.83-1.42.59-2.36.09-2.45-5.76-.09ZM4463.84,2334.05l-1.03,2.36.94,3.87,2.36.09,2.92-1.42.47-2.36-.38-2.45-5.28-.09ZM4483.03,2334.88l-1.53,2.36,1.33,3.9,1.98.09,2.83-1.42,1.06-2.36-.38-2.36-5.28-.21ZM4490.47,2341.79l-.94,2.36,1.33,3.96h1.89l2.92-1.42,1.06-2.36-.47-2.36-5.79-.18ZM4465.08,2343.2l-1.06,2.36.94,3.87h2.36l2.48-.86.94-2.83-.38-2.45-5.28-.09ZM4451.65,2345.27l-1.03,2.36.86,3.9,2.45.09,2.83-.94.56-2.83-.47-2.45-5.2-.12ZM4487.93,2349.9l-.47,1.42-.56,3.39.47,1.42,2.36.12,2.36.94v1.98l-1.15,7.17.86,3.87,2.92.56,1.42-3.39.68-4.25,1.59-7.65-.94-3.87-2.36-.56-3.78-1.06-3.39-.09ZM4475.82,2355.96l-2.92.86-.94,2.36.38,3.87,1.42,1.51,2.36,1.51h4.25l.09-1.89-.94-2.92-1.33-4.34-2.36-.94ZM4458.56,2358.88l-3.87,1.89-2.01,1.89.86,3.31v2.92l2.36-1.42,2.92-1.3h3.42l1.89,1.03,3.31.09.47-.94.09-1.51-1.89-2.36-1.42-1.51-2.36-1.06-3.78-1.03ZM4438.9,2358.97l-1.03,1.89.86,4.37,2.36.09,2.92-1.42.56-2.83-.47-1.98-5.2-.12ZM4429.19,2364.55l-1.06,2.36.86,3.87h2.45l2.95-1.3.47-2.48-.38-2.36-5.28-.09ZM4476.98,2368.88l-1.42,1.89,1.33,3.9,1.89.09,2.92-.94,1.03-2.83-.47-1.98-5.28-.12ZM4441.47,2370.12l-1.89,1.33-2.48,2.83-3.39.94-3.78-.56-3.87-.12-.94,1.42-.56,2.36-.09,3.42,1.42,2.45,1.89-.47,1.51-1.89,2.92-.94,2.36.09,4.81.56,2.36-1.42,2.45-3.31.59-3.31.09-2.92-3.39-.47ZM4470.63,2372.1l-.94,1.98-.94.38-4.34-.09-3.78-1.98-2.92.47.47,2.83,1.42,1.51.38,3.39-1.51,3.78-1.06,2.83-1.51,1.89-2.36-.94-1.8-3.39-.47-2.92-1.3-2.92-2.48.47-.94,1.42-1.03,2.36-1.51,3.78-2.92,2.83-5.28.83-5.31-.09-3.39.86-2.45,2.83.47,4.34.86,4.34,2.74,3.9,4.9-2.27,1.89-2.36,1.03-.94,1.51-2.83,1.89-.94,1.89,1.03,1.42.94.94,1.98.47,1.42-.56,1.98-.94.86-1.03,4.34,1.42,1.06,1.89-.94,3.39-1.42,3.87.09,2.36.09,3.42-1.89,2.45-2.36,1.89-2.36,3.39.09,1.89,1.51,2.83-.47,1.51-2.36-.38-3.39-.35-2.83-2.48-1.03-2.24-2.92.47-1.42,2.92-1.89,2.92-1.33,1.98-2.83v-3.39l-.86-2.92-1.77-3.9-2.01-1.03ZM4415.02,2377.21l-1.06,2.36.86,3.87,2.45.09,2.83-1.42.59-2.36-.38-2.45-5.28-.09ZM4480.67,2377.68l-1.06,2.36.86,3.87h2.45l2.83-1.33.59-2.45-.38-2.36-5.28-.09ZM4493.98,2382.31l-2.45.86-2.36.94-3.9,1.3-3.39,1.89-3.87,1.33-1.03,2.36.94,2.45.38,3.42.83,3.39,2.01.94,2.36-1.42,1.03-2.36,1.51-4.72,1.51-1.42,2.92-1.89,5.31-2.75,1.51-1.89-1.42-1.03-.47-.94-1.42-.47ZM4418.12,2388.84l-3.87.83-.56,1.42.47,2.01,1.42,1.42,3.39-1.33.56-2.92-1.42-1.42ZM4411.71,2394.39l-3.78.94-1.06,1.89.47,1.89,1.42,1.06,3.78-.94.59-2.83-1.42-2.01ZM4412.54,2402.15l-3.39.86-.94,1.98.38,1.89,1.42.94,3.87-.86.56-2.83-1.89-1.98ZM4416.23,2408.94l-3.87.38-.94,1.89.38,1.98,1.42.94,3.87-.86.56-2.83-1.42-1.51ZM4393.56,2417.18l-1.51,2.36.86,2.83,1.98.56,3.31-1.42,1.98-2.36-1.42-1.89-5.2-.09ZM4421.81,2418.21l-1.51,2.36,1.33,3.87,1.98.09,2.83-.94,1.03-2.83-.47-2.45-5.2-.09ZM4439.46,2419.54l-.94,1.89-.09,4.34,2.36.56,4.81-2.36.59-2.83-1.42-1.51-5.31-.09ZM4440.7,2429.63l-1.51,2.45-.09,4.25,2.92.56,4.81-2.24.56-2.95-1.42-1.89-5.28-.18ZM4428.71,2430.4l-1.06,1.89-.09,4.34,2.45.47,5.31-2.27.56-2.83-1.89-1.51-5.28-.09ZM4393.29,2430.58l-1.06,2.36.86,2.92,2.45.56,4.25-.94.59-3.31-1.89-1.51-5.2-.09ZM4404.72,2430.87l-1.42,2.36,1.33,2.36,3.78,2.54,3.39-1.42-1.42-2.36-2.36-1.98-3.31-1.51ZM4403.57,2439.46l-1.03,2.36.94,2.92,1.42,1.98,4.81-2.36.59-2.83-1.42-1.98-5.31-.09ZM4411.59,2443.98l-.94,2.36,1.33,3.9h1.89l2.92-1.33.59-2.45v-2.36l-5.79-.12ZM4459.5,2445.51l-1.42,2.36-4.63,11.9,1.42,2.92.86,1.89,3.87-.86,4.81.09-6.79,5.67-2.45,2.83-2.95.38-1.42,1.89.86,3.39,3.31,1.53,6.7-1.33,5.31-1.33,4.9-3.22,3.87-2.83,1.03-3.87-1.3-4.34-2.36-1.42-4.37-.68-1.77-3.87-1.33-3.87-2.36-3.87-3.78-3.39ZM4402.92,2448.05l-3.87.94-.94,1.89.38,1.89,1.98,1.03,3.31-.86.56-2.92-1.42-1.98ZM4402.74,2456.26l-.94,2.36.83,2.48,2.36.94,4.37-.86.56-2.83-1.89-1.98-5.28-.12ZM4469.8,2479.78l-5.31.86-1.42,1.42-.56,3.39,3.31,1.51,3.87-.35,2.36-1.89.59-3.9-1.89-1.03h-.94ZM4455.43,2481.41l-4.81.83-1.98,1.89-.56,2.95,3.31,1.98,4.34-.86,1.98-1.89.56-3.87-1.42-.94-1.42-.09ZM4486.04,2483.56l-5.28.86-1.51,1.42-.59,3.31,3.42,1.98,3.78-.86,2.45-1.89.56-3.87-1.89-.94h-.94ZM4463.84,2490.26l-4.81.86-1.98,1.89-.47,2.83,3.78,2.1,3.78-.47,2.45-2.36.09-4.25-1.42-.59h-1.42ZM4475.18,2498.2l-1.12,6.23-2.83,1.33-4.25-2.45-3.42.86-.47-2.36-1.89-.09-2.92.94-3.31.35-1.98,1.42v1.89l3.31,1.53,3.78.09.94,1.03h2.92l3.31.56,3.31,1.51v2.01l-1.98.83-3.31.47-3.01,3.78,1.89,2.95-.59,2.83,3.42,1.51,4.72.09,4.43-3.69,5.2,1.51,1.03-4.34-.47-.94-2.36-1.51.09-1.89v-1.42l-.94-.56,1.62-5.2,2.36-1.89-3.22-5.4-4.25-1.98ZM4454.31,2511.25l-4.81.86-2.01,1.89-.56,2.83,3.87,1.98,3.78-.86,2.48-1.89.09-3.78-1.42-1.03h-1.42ZM4440.32,2512.84l-4.81.86-1.89,1.42-.09,3.31,3.31,2.07,3.87-.94,2.45-1.89.09-3.78-1.42-1.03h-1.51ZM4457.7,2531.94l-4.81.83-1.98,1.89-.12,2.95,3.42,1.98,3.78-.86,2.45-1.89.09-3.87-2.83-1.03ZM4475.35,2533.83l-4.81.83-1.98,1.42-.47,3.31,3.78,1.53,3.87-.38,2.36-1.89.09-3.87-1.42-.94h-1.42ZM4488.4,2549.97l-.94,2.36-.09,4.34,2.36.47,4.81-2.27.56-2.92-1.42-1.89-5.28-.09ZM4478.78,2551.66l-4.72.86-2.01,1.42-.56,3.31,3.31,1.98,4.34-.83,2.01-1.89.56-3.78-1.42-1.06h-1.51ZM4469.89,2563.94l-1.42,1.42-.56,4.37.83,3.87,2.83,2.92h2.83l1.53-4.25-2.27-3.39-1.89-2.45.09-1.89-1.98-.59ZM4457.79,2571.4l-1.98,2.83,1.8,6.82,1.89.94,1.42.56h2.83l1.59-5.2-.94-2.92-1.42-2.01-3.31-1.03h-1.89ZM4486.98,2573.97l-4.34.35-3.87,2.83-4.93,3.22-1.42,2.36-3.96,6.14,2.36,1.03,2.36.12,2.92-3.78,12.19-8.41-1.33-3.87ZM4467.71,2599l-.94,2.45-.09,4.25,2.83.56,4.81-2.27.56-2.92-1.42-1.89-5.76-.18ZM4481.96,2606.09l-1.03.94-.47.94-.47,1.89-.09,1.42v2.45l.38,2.83.94,1.98,2.83.09,1.98-2.83-.38-2.45-1.33-5.28-2.36-1.98ZM4468.95,2609.1l-1.03,2.45-.12,4.25,2.48.56,5.28-2.24.56-2.95-1.42-1.89-5.76-.18ZM4478.19,2648.3l-4.81.86-1.98,1.42-.56,3.31,3.39,1.51,3.78-.38,2.45-1.89.56-3.78-1.42-1.03h-1.42ZM6268.42,2655.29l-1.51,2.36,2.75,6.79.83,4.81.86,3.9,2.27,4.81,3.78,2.07,1.42-.47,1.03-1.42,1.51-2.83.59-3.87,1.03-3.31,1.51-3.78v-1.98l-1.33-2.36-3.31-2.1-3.31-.56-3.87-1.51-4.25-.56ZM4303.74,3063.25l-4.34,2.72-1.03,4.37-.3,10.57-.56,4.34.94,2.92.47.94,2.27,5.31,4.25,1.59,5.28-2.83-.38-3.87v-1.42l.18-4.81-.47-3.9-.83-3.87.09-3.78-1.89-3.96-3.69-4.34ZM4322.81,3180.17l-3.87,2.27-6.52,14.82,8.32,13.61,2.36-.38-.86-4.81-2.27-5.37-.83-5.28.09-4.84,1.51-3.87,4.81-2.27,1.03-3.31-3.78-.56ZM4325.46,3215.33l-1.51,1.89.38,5.84-.12,3.31-.09,3.87-.56,5.28-1.98,4.84-2.57,7.65.86,5.28,2.27,1.98,1.89,2.45,3.31,2.95,3.31,1.03.56-4.34-.74-8.24v-2.36l.09-3.87,1.59-5.76-1.33-4.81-.94-3.42-1.3-4.81-.38-4.34-.86-3.87-1.89-.56ZM4319.71,3259.99l-1.51,3.39,1.3,5.31-.09,3.87-.56,4.34-.09,5.76-.09,4.34-1.06,3.31-.09,3.9-1.03,4.81.86,4.34,5.28,1.03,5.76-3.22-.38-3.39-1.3-7.26,1.59-8.59-2.27-3.98.56-5.76.12-3.31-2.27-3.96-.47-3.31-4.25-1.62ZM4664.18,3343.11l-1.03.94v1.89l-.09,3.39-1.51,1.89-.59,4.84-.56,5.76.38,4.81,4.81-3.31,2.92-.86.86,3.39,1.89.94,1.89,1.53,1.42,1.03,2.36-.47,2.57-7.65-.38-3.42-3.78-1.98-.38-1.98-1.42-2.36-2.27-3.96-3.87-1.53-2.27-1.98-.94-.94ZM6537.24,3413.48l-8.21,5.02-2.45,4.34.83,2.36,7.2.18,2.63,7.38,1.8,4.34,4.16,7.38,4.52,7.35.86,4.84-3.39,1.3-3.31.38-.09,1.98-.56,5.79-1.15,4.81,5.58,5.37,8.59,2.66,3.22,3.96.3,6.23,3.66,5.49,3.69,6.32-.74,9.18,7.44,6.88,6.73,1.71,2.07,12.57,4.63,5.84,1.68,6.79.77,7.76,5.58,4.04,1.68,8.71.77,6.79-2.36,1.33-4.25-2.45,1.71,6.79,4.25,4.46,1.21,7.26,1.71,6.79,3.22,4.93,5.2,2.54,2.24,2.92.38,6.26-.74,10.09.74,8.68,1.24,4.93,1.42,2.92,2.83.56,1.33,3.87-.12,5.31,1.71,5.84,2.54,11.16-1.03,3.87,1.8,6.23,5.67-.3,4.25,2.57,2.75,5.84-.86,12.96,2.27,4.9,2.36,2.45,3.69,3.04-3.04,7.17.38,5.28,2.66,6.32,1.77,3.98,3.22,5.84-.09,3.31-3.87.38-.94,1.42.38,3.87,1.3,2.45,4.25,3.04,4.25,2.07,3.31,1.98,2.75,5.4-4.81.86-2.92,1.42.86,4.34,1.3,4.81,1.24,6.79-1.59,8.15.27,4.9,3.22,6.32,2.36,2.48,3.31-.38,3.31.56-7.85,9.92,2.75,4.43,9.74-6.49.38,2.45-.12,3.87.86,2.83,12.57-3.48-.86-6.26-3.01-10.74-4.93-13.14-3.96-13.14-6.23-16.06-4.37-14.64-2.63-9.27-1.8-5.28-8.03-39.29-11.98-15.29-6.91-12.28-3.96-13.14.27-7.65-5.28-17-.18-12.1-6.43-9.83-1.12-11.6-4.84-15.02-6.14-20.99-4.81-18.89-22.76-43.07-8.12-18.04-10.95-20.01-4.84-14.08-3.66-7.85-2.66-5.84-4.63-9.27ZM4617.42,3448.52l-3.39,2.36.38,1.89,1.89,1.53,3.31,1.03,3.87,1.03,2.36.56.94-1.42-.38-1.51-3.31-2.45-3.78-2.45-1.89-.59ZM4510.21,3541.67l-3.39,2.24-2.45,3.9-1.03,3.78.83,3.87,2.36,3.96,3.31,1.51,3.42-3.78,1.03-3.87.65-6.7-1.42-3.87-3.31-1.03ZM4630.85,3556.32l-2.48,2.36-.47.94-1.03,2.36-1.51,3.39.47,1.89,1.42,1.51,1.89.56,2.36-.94,1.51-1.42,1.03-3.39-.47-2.83-.83-1.98-1.89-2.45ZM4619.52,3571.52l-3.42,1.33-.94.94.94,2.92,1.89,1.03,1.89-1.42,1.53-2.36-.47-1.98-1.42-.47ZM4612.23,3575.68l-1.03,2.83-.47,2.92,1.89,1.51,2.36-.47,1.98-2.36-1.89-2.45-1.42-1.51-1.42-.47ZM4451.09,3578.87l-.94.47h-3.78l-2.92.38-2.83,1.89-1.51,1.89,1.3,3.39,2.95,1.06,1.42-.94,3.39-2.36,2.36-.94,1.98-1.89.09-2.83-1.51-.12ZM4609.69,3582.38l-.94.47-1.51,2.83-.47,2.92,1.42,1.42.94-.94,1.98-2.83v-2.92l-1.42-.94ZM4604.76,3589.94l-1.42,1.42-3.01,4.34-1.03,3.31,1.42,1.51,1.98-.47,1.98-2.83,1.98-3.78v-2.45l-1.89-1.03ZM4457.41,3598.82l-1.03,1.42-.47,1.98-.56,3.78-.56,3.87-1.51,3.78.35,3.39,5.31.68,1.98-2.95,1.03-3.31-.47-2.45.56-2.36v-1.98l-1.8-5.28-2.83-.56ZM4421.04,3601.92l-3.39.86-1.98,3.87-1.03,4.72-1.62,7.76.38,3.87,4.25,3.39,3.78,1.51,4.34-1.8-.74-7.73-1.42-3.87-1.33-4.34,1.03-3.42,1.03-4.25-3.31-.56ZM4454.01,3624.8l-.65,7.73.74,5.28.12,1.42,1.3,3.87.38,2.01,2.27,5.84,4.81.56,1.42-1.89-.74-5.37-.47-.94-1.89-4.34v-1.53l-.77-5.28-.38-7.26h-2.83l-3.31-.09ZM4395.36,3638.49l-1.89,2.36.86,3.39,1.42,2.92,3.69,4.9,2.63,8.24.38,5.28v3.87l-1.12,4.81,4.81.59,7.73-4.16,2.83-.94,5.76-.3,5.31-2.83,3.87-2.83,2.92-1.33,2.45-3.78,2.45-3.87,2.1-5.2-1.89-1.98-3.87.38-2.48,4.25-2.92,3.78-3.39,1.89-1.42-1.42-.3-6.35-.74-10.09-4.81-1.12-1.06,6.79.21,13.52-1.03,4.25-6.73,1.3-2.83-1.98-.35-7.73-2.18-7.76,2.45-3.31-.47-1.98-5.67-1.51-6.7-2.07ZM4382.05,3684.48l-3.87,1.8-1.06,3.39.38,3.87.38,4.34,1.33,4.37,3.31,4.43,3.22,3.87,1.98.09.09-3.87-.38-7.73.56-4.81.12-3.78-2.27-3.98-3.78-1.98ZM4530.99,3688.17l-3.39,1.89-.47,1.42v.94l1.8,3.39.47.94.94.56,2.83-.94,3.39-1.8,2.45-1.89,1.51-2.36.94-.94-2.83-.56-3.39-.09-4.25-.56ZM4513.99,3723.5l-4.81,4.25-5.37,3.66-2.48,5.31.38,2.92,1.42.47,2.36-.47,4.81-.86,5.79-.86,5.28-2.27,2.92-1.89,1.51-3.78-1.89-1.03-3.78-.56-4.25-1.51-.47-2.45-1.42-.94ZM4396.3,3731.53l-2.45,1.89.47,3.39,1.33,2.45,2.45.56,2.36-1.89.56-2.92-1.89-2.92-2.83-.56ZM4520.69,3747.21l-6.23.86,3.22,3.48,4.34-.86,1.98-1.42-1.42-1.98-1.89-.09ZM4398.28,3752.78l-1.51.47-.47,1.89-.09,2.92,1.89,3.87,1.33,2.92,3.78,3.98,2.72,2.45,3.78,4.9,4.63,7.38,4.63,6.32,4.63,8.32,4.52,10.66,3.51,15.02,3.1,11.72,2.27,5.84,1.24,7.67,8.59-.77-.86-5.28-2.27-2.92-.35-4.37-.47-3.39.09-4.34-3.69-6.79-.38-1.06-5.58-11.69-2.63-8.24-1.33-6.32-3.22-4.81-2.27-5.87,1.15-7.26,1.51-6.7-2.75-3.42-7.56-4.52-.94-.94-1.42-1.03-2.83-1.53-3.31-1.03-4.25-2.45-5.2-1.59ZM6683.38,3816.63l-9.65,2.63-8.21,3.69-6.82,3.13,2.27,5.37,17.47-9.15-1.12,5.76,5.76.18,1.24,5.31-3.98,6.7-3.48,3.78-.21,7.17,2.27,4.9,4.16,6.35,4.72.65,4.81-.38,1.8,3.51.86,5.76,2.27,3.96.74,6.73,3.13,8.77,5.67,1.15.86,5.28,1.3,5.37,3.13,6.82,1.8,4.9.86,5.84-.77,8.62.38,5.37,2.63,5.37,5.31,1.53,6.23-2.18-.56,3.31-2.48,2.83-5.28,1.8-2.36-1.51-2.92,1.89,3.69,4.9,4.16,3.48,3.87,1.06,7.17-2.18,2.27,5.84,1.12,8.71,2.83,3.48,4.16,3.04,3.01,11.6.3,7.29-2.07,6.23-.47,3.31,2.24,1.51,3.42.09,3.19,3.04,2.75,3.96,2.66,8.21,2.27,5.87-.21,5.28-.56,3.87v1.42l-.09,3.39,1.8,3.98,7.17.65,2.75,1.98.83,3.9,1.8,4.9-1.03,2.83,7.94,6.52,3.57,8.29.38,5.79-1.59,6.23-2.92,2.36.35,2.92,4.84-.38,4.13,3.04,5.31.65,6.41,9.83,1.8,3.87.86,3.87-2.1,5.28-4.81,3.22.77,5.87.47,1.89.38,1.98.94.47,14.26.94-2.1-8.8-2.72-4.43-1.71-8.24-2.18-7.35-5.08-7.38-1.24-6.32-7.26-14.17-10.39-23.44-5.49-7.94-3.6-7.73-9.45-21.55-5.76-17.56-9.83-25.77-6.61-18.54-8.59-20.01-12.19-26.92-8.86-23.44-2.27-5.37-10.48-17.09-4.07-11.72-4.9-11.72-3.13-9.24-3.96-10.77ZM4471.31,3844.11l-2.92,1.33v1.51l.47,1.89,1.3,1.98,3.31,2.45,3.42.59,6.23-1.33-.94-1.89v-1.03l-1.89-1.89-2.83-1.53-3.31-1.59-2.83-.47ZM4454.48,3850.43l-1.03,2.01.94,2.83,1.8,2.45,1.42,1.51.94-.47,1.03-1.42-.38-3.39-1.42-2.45-1.89-.94-1.42-.12ZM4448.17,3853.26l-9.53,1.24,5.55,7.85,5.58,6.32,5.67,3.48,4.72,3.51,5.11,5.46,7.47,8.8,4.16,6.43,5.08,8.29,2.27,3.87.94,2.01,2.27,4.81,3.22,5.37,5.2,6.43,5.93,8.29,5.2,5.87,4.16,5.46,4.16,5.4,2.83,3.39,3.22,5.37,4.63,4.46,6.14,5.93,3.87-1.42.94-3.31,6.79-4.25-4.72-1.98-7.56-4.99-4.63-4.93-4.6-6.41-1.42-2.95-4.25-2.45-2.75-5.84.65-6.7,1.51-4.84-3.78-3.48-2.83-1.03-4.72-2.45-1.89-.59-2.36.94-1.98,1.42-1.8-1.98-.94-3.87-.83-3.39-5.58-8.32-6.52-6.88-3.69-7.85-.38-4.34-3.19-3.87-4.72-3.04-6.26-2.07-3.66-3.98-3.31-1.98-2.36-2.45-1.8-2.92-5.2-5.87ZM4463.84,3856.95l-1.42.47-.47.47-1.03,1.89.94,2.45,1.89,2.95,1.33,1.42,3.31,2.07h2.92l2.36-.86.47-1.51.09-2.36-.94-1.51-1.8-2.45-2.45-.47-1.42.94-1.89-.59-.47-1.42-1.42-1.51ZM4499.65,3903.06l-.47,1.89.38,2.45,1.89,2.45,3.31-.38-.38-3.39-1.33-2.45-1.98-.47-1.42-.09ZM4548.38,3968.79l-5.28,3.22-8.24,5.2,1.8,5.28,6.14,4.55,3.22,4.34,3.69,4.43,2.75,6.35,1.89,1.51,5.37-4.72,1.51-3.31-2.36-3.51-2.75-4.34-1.3-3.87-2.36-3.48-1.33-3.42-.94-2.36.09-2.45.47-2.92-2.36-.47ZM4564.52,3971.54l-1.42.47v.47l-1.42,1.42.38,2.45.94,2.36.38,2.45v1.89l-.09,1.51h.56l.94.47.47-.47.94-2.36.09-3.39.09-2.36.94-1.98.56-1.42-.47-.94-.94-.47-1.98-.09ZM4555.85,3976.17l-.94,1.89.86,2.92,1.89,2.45,1.89,1.51.94-.47.47-1.42-.38-3.39-.86-2.45-1.89-.47-1.98-.56ZM6210.42,4098.85l9.53,1.24,11.72,8.97,7.56,4.07,4.25,1.03,23.53,13.7,9.74,10.39,15.94,9.62,3.31,2.92,2.27,3.51,5.11,5.37,4.63,4.46,4.25,4.04,2.27,3.39,4.13,6.91,4.07,9.27,5.11,4.99,5.67,2.57,3.22,2.92,2.83,3.48,1.77,2.92,1.42,2.48-.56,3.39.68,11.04,1.3,4.46,1.62,10.66,2.75,2.92.83,4.37,2.27,5.37,4.07,9.36,2.63,9.71,4.93,11.25,4.52,10.21,3.13,6.41,5.37,15.11,7.2,16.06,3.78,21.93,1.12,12.07-1.8,12.49.3,6.32-2.66,12.49-.18,5.28,1.21,8.29-.47,19.75-4.04,9.06-10.48,18.15-3.04,4.72-7.94,12.84-6.97,12.84-2.01,1.42-9.71,8.88-7.29,5.11-8.29,5.11-6.82,6.14-4.43,6.14-2.45,4.34-1.71,9.53,1.15,11.16,2.54,11.69,2.27,5.87,2.63,5.84.86,5.4-1.03,1.89-8.12,3.57-3.13,7.17-4.34,2.83-1.03,2.83h-1.42l-1.89-.56-5.58-4.99-2.27-3.42-1.33-5.84-2.24-4.9-1.33-3.9.56-2.83,1.03-3.87-1.33-3.87-2.36-2.54-4.72-2.01-2.83-.09-1.89,1.89-1.12,4.81-.56,1.89-3.39,2.83-3.31.86-1.53,1.89-.56,3.39,1.8,3.9,3.31,3.48,3.78,1.51,1.33,2.45-1.03,5.31.27,5.37.47,1.42,1.89.56,3.78-.38,1.42,2.01-.09,2.83-1.98,5.28-.09,1.42,3.66,6.41-.74,11.54,2.15,6.41,2.75,3.9-.56,3.39-3.31-.56-2.36,1.42-.09,2.83-4.93,4.72-4.81,2.72-8.5-2.07-8.5-3.69-3.31-1.51-3.22-4.43-1.77-3.42-4.84.38-4.72-3.01-3.78-.21-3.87,2.36-10.48.21-9.53.74-2.92.86-4.72-1.03-6.61-3.6-5.11-5.46-7.38-8.88-4.63-5.96-1.3-2.45-7.08-4.99-9.36-4.55-8.03-4.16-12.75-6.05-11.33-3.66-4.63-5.02-6.61-1.59-7.56-4.07-15.59-7.17-9.36-7.47-13.02-11.98,2.45-3.78-.38-1.42-1.42-1.06-2.36-1.51-1.33-3.39-.38-4.34.12-4.34-1.42-1.53-2.83-.56-1.42.94-.59,3.39.86,3.42-1.42.83-1.89-.94-5.58-4.99-4.72-3.51-3.31-.56-1.42-1.51-.94-1.42,1.06-.94,1.89-.47,25.68,2.07,3.31.12,1.03-.94-.47-1.42-1.89-1.06-32.38-2.24-3.78,1.3-7.67.77-6.7-1.12-8.03-2.1-4.25-1.12-5.76.86-5.67-.21-21.81-5.37-7.56-2.57-3.31-2.54-6.43-7.85-4.72-3.57-4.25-2.92-4.72-1.62-2.36-1.98-1.33-1.51-2.83-3.39-3.19-3.04-.86-3.39,2.83-.38,2.36-.47,2.07-3.78-1.42-2.45-2.36-1.03-3.31-1.03-.94-1.53.09-1.89-.35-3.39,1.03-3.87-.47-.94-1.42-1.51-.38-1.89-1.42-1.98-1.42-1.06-2.83-.56h-2.36l-1.89-.56-.94-1.51-1.42-.94-1.89-1.03-6.61-.68,3.87-5.67,1.03-1.89.12-2.45.09-3.39.94-2.83,2.45-1.89,3.39-.38.94-.94,2.1-5.76v-2.36l-1.33-1.51-.38-3.42v-2.45l-1.42-1.42-3.31-2.07-4.72-.56-3.31-2.57,5.28-.74,3.87-1.89,4.84-2.75,4.34-2.36,6.7-1.24h1.98l1.33,1.51.47,1.53.47.94,2.83.56,2.36,1.03,4.16,4.9,1.89.12.56-1.06-.94-2.36-1.89-1.98-2.27-3.48-1.33-1.98,1.53-6.26,1.98-1.89,1.89.12h1.89l1.51.09,1.42-1.42,1.51-4.34.56-1.42-1.42-.47-7.65.74-9.15,1.24-4.72-.21,2.45-4.72,2.92-2.36,1.51-2.83,2.95-.94,2.45-1.77.47-2.01-1.33-3.39-3.31-2.45-8.97-3.69.09-1.42,2.92-2.36,6.26-1.68,1.89-1.42,1.03-1.42.47-.94,3.01-5.31.94-1.89,3.39-1.3,3.78.56,3.9-1.89,3.01-4.72,1.98-4.34,2.92-1.33,7.2-2.27,6.23-2.75,7.26-2.63,5.76-3.31,4.46-4.72,2.92-3.78,5.28-.3,3.87-1.42,4.84-3.69,3.01-4.25,2.45-2.83,3.87-2.83,4.37-2.27.56-5.84,4.43-5.67,3.98-2.75,1.51-4.34,4.9-6.61,2.92-.47,4.16,5.49,3.98,9.71-.94,2.36.35,2.92,4.72,1.62,6.35-4.16,4.16,2.92,4.81.21,8.21-3.22,1.03-4.81,4.93-5.2-5.11-5.87,1.59-6.23-3.19-4.9-4.37,1.77-6.41,6.14-5.67-1.59-.38-3.39,5.76-2.27-2.15-7.85-3.31-1.03-5.4,4.72-2.36,1.89-2.36-1.98,13.7-13.7,3.87-2.27,6.73.21,1.3,2.36,3.42-.38,4.34-1.8.94-3.39.09-3.31-3.78-1.62-.38-1.89,1.51-3.39,3.78-.38,7.29-2.63,3.39-2.36.18-5.76-1.98-.12-.86-1.42,5.4-6.61,1.51-2.92,3.87-2.27,1.42.47,3.78,2.1,2.36-.94,4.93-3.22,3.87-4.25,5.37-3.78,2.45-4.72,3.04-6.23,5.84-5.11,13.61-25.21,4.43-6.73,4.93-6.14,4.43-5.67,1.51-4.25,2.48-3.39,7.35-6.05,7.76-3.19,5.2-.77,12.55-5.02ZM6181.14,4198.5l-2.45,1.89-1.03,6.26-.21,5.76,1.33,4.43,1.33,3.87,4.72,1.53,1.51-.38.94-.94.94-1.42,1.51-3.39,1.15-6.73.09-3.87-.86-1.89-1.89-1.98-2.75-2.54-4.34-.59ZM6050.05,4478.21l-2.36,1.3-1.06,2.36,1.8,3.51,1.42,2.45.38,1.89-1.89,1.42-5.37,3.78-.47,1.89,1.89,1.03,7.56.68,4.34.09,3.78,1.51,4.63,4.07,2.83,2.45,3.31-.38.09-2.92-3.69-6.91.56-3.78.21-5.84-1.42-2.45h-.94l-2.36,1.42-1.89-.12-4.25-4.43-4.16-2.54-2.92-.47ZM4832.87,4514.93l-2.92.86h-2.36l-2.83-.56-2.45,1.42-3.87,3.78.38,4.81,3.66,6.35,2.75,3.96,2.27,4.81.94,1.51,1.33,6.35,1.8,5.37,1.3,4.34,1.33,3.9.86,4.9.3,6.7-1.15,7.76-1.03,5.28-1.12,7.17v1.98l-.59,5.28.38,2.48.38,4.81.94,1.98,1.33,1.89,1.89,1.03,2.36.56,2.92-.47,1.89-1.42-.38-1.89.09-4.34-.94-1.03.59-3.31,1.89-.94,1.03-2.92.09-5.76-.38-4.37.56-4.34.59-3.39-.21-13.52-1.8-4.9-2.36-2.45-1.3-2.45-1.89-2.48.18-5.28.56-4.34v-1.89l-.38-4.34-.83-5.4-.86-3.39-1.89-2.45-1.8-2.92v-3.39l.56-2.83-.38-2.01-1.42-.47ZM4860.85,4520.89l-2.83.38-1.06,1.89-.56,2.92,2.83,1.51,3.31,1.03,1.98-1.42,1.06-3.39-2.36-2.45-2.36-.47ZM4888.42,4522.96l-2.83.38-1.98,1.42-.94,2.36.38,2.45,1.42,1.53,3.78,1.51,2.83.09,1.98-.94,2.36-.47,1.89,1.03,1.89-.94.09-3.39-3.31-2.45-4.16-2.57h-3.39ZM4913.63,4525.43l-3.31.94-2.92,2.24-1.03,2.48.47,2.92,1.33,2.36,1.89,2.45,2.36,1.03,1.42-.47v-1.42l-.86-1.98v-1.42l.94-.94,1.51-1.42.47-1.89-.86-2.92-1.42-1.98ZM5025.2,4526.56l-1.89.38-.94.94-1.15,5.84.38,3.31,2.83,2.57,1.98-1.42.94-.94,1.03-2.36.94-2.95.59-2.36-1.42-1.51-2.36-1.03-.94-.47ZM4881.99,4533.46l-2.36.35-.56,1.89v2.48l3.22,3.48,1.42,1.42,2.83,1.98,1.89.56,1.03-2.36-1.89-2.45-1.89-1.98-.38-1.98-.47-1.89-2.83-1.51ZM4898.63,4535.23l-2.83.86-1.06,2.92,1.42,2.01,1.42.94,1.89-.94,1.42.09,2.36,1.51,2.36,1.03,1.53-1.98-2.83-2.92-2.27-2.45-3.39-1.06ZM4859.05,4536.77l-1.42.94-1.51,3.31-1.06,2.45v1.42l-.09,2.92.47,1.89h.94l1.42.09,3.39-1.42,1.89-1.89,1.53-2.83.09-2.92-.47-1.42-1.42-1.98-3.78-.56ZM4874.72,4539.01l-1.89.94-1.51,2.83-.47.94.38,2.48.94,1.51.47.94,3.66,3.96,4.16,4.93,3.31,1.98,1.03-.47,2.83-.38,1.89-1.42-1.77-3.87-1.89-1.03-1.8-2.95-1.33-4.9-2.83-2.45-1.89-2.45-3.31-.59ZM4894.09,4546.22l-1.89,1.42v1.51l1.8,1.51,1.89,1.42,1.89.56,1.51-.94-.47-2.45-1.89-1.42-1.42-1.03-1.42-.56ZM4904.57,4546.48l-1.89,1.42-1.51,2.83v1.51l.86,1.89,1.89.59,1.98-.94,1.51-2.36.94-2.95-.47-.94-.38-.94-2.92-.09ZM6930.86,4550.26l-4.37.38-1.59,5.76.56,13.61.38,6.23,1.24,6.82.09,12.07-.21,8.71.12,12.07,2.92,16.53-1.33,12.1-.3,13.02v14.46l.21,12.66-.38,11.98.65,13.61.59,13.05-.59,20.31-1.68,26.54.27,6.32,1.42,1.03,2.95.12.94-1.42.18-5.4,1.51-5.76,1.71-7.65-.09-15.5.56-21.25-.3-21.81-1.03-15.5.56-19.75-.47-17.47.77-12.07.74-10.12.38-13.02-3.96-13.61-.3-6.35,1.71-9.15-.68-10.69-.83-3.39-.86-3.87-.38-4.81-1.33-2.92.56-2.01-.35-3.87ZM6206.38,4594.39l-2.83,1.3-2.01,1.42-.09,3.42-.09,2.92.77,9.62,1.3,4.93,1.33,1.89,3.87.18,3.31-1.89,3.51-3.78-.38-4.81-1.71-7.38-2.72-6.79-4.25-1.03ZM4937.24,4620.72l-3.78.38-2.36-.09-4.34.38-4.25-.09-2.45,2.36-1.51,3.87-1.03,1.42,1.89,3.39,2.83,1.51,2.83.56,2.36,1.06,1.98-2.83,3.39-3.31,3.87-1.42,3.39-3.31-2.83-3.9ZM4849.99,4623.08l-3.31,1.8-2.01,2.92-.65,8.15.38,4.43-.09,2.83-1.53,3.39-.47,2.36,3.22,4.93,3.22,5.37.86,4.34,2.75,4.93.83,5.84.38,4.34-.09,2.92,1.89,3.42,1.8,3.87,4.16,5.46,3.19,3.9,2.83,3.01,1.33,6.32,2.18,7.76,1.8,5.84,1.77,4.34,3.9-1.3.94-1.89,1.59-8.71-1.8-3.87-.86-3.96-.35-4.37-.47-2.36-2.27-2.54-1.42-2.36-2.27-3.48-1.89-3.42-.86-4.34-1.8-2.45-2.36-1.03-1.89-1.98.12-2.95-.38-3.87-2.83-1.51-.47-1.89.56-3.39-.47-2.92.09-3.9-.38-2.92-1.77-2.92-2.83-2.45-.86-3.87-1.42-2.95.56-2.45,2.45-2.36,1.42-2.36.56-2.92-.83-3.39-2.36-2.92-1.89-1.06-1.89-1.42ZM5004.42,4624.61l-2.48.94-.94,1.89-1.03,3.87-.09,4.81,2.83,1.03h.94l.94.09,1.51-1.98.47-1.89,1.03-2.36.12-3.39-.94-1.98-2.36-1.03ZM4915.99,4635.65l-3.87.38-.94,2.92-.09,3.39,1.33,2.45.47,1.89,2.83.12,2.45-1.42.94-1.89-.38-2.48.94-1.42-.38-1.42-2.36-1.98-.94-.56ZM4863.01,4637.84l-3.87,1.42-.47,1.89-1.51,1.89,1.42,2.45,1.33,2.92,3.78,3.01,1.42,2.48,1.3,1.89,1.89.56,3.9-.38,6.23-.86-1.33-4.81-8.5-5.11-2.75-3.87-2.83-3.48ZM4941.7,4638.19l-3.87.38-3.78,1.33-4.84,2.36-2.54,3.78-.94,3.39-3.87,2.36-3.78-2.54-4.34,2.36-.12,4.34,1.33,2.92,3.78,1.51,7.65-1.77,3.78,1.51-1.51,4.34-1.98,3.87.86,3.87,3.31,3.98,4.16,2.92,8.03,7,3.66,2.45,6.26,1.59,3.78.59,1.77,3.96-.56,3.78,1.8,3.96-.65,8.71,1.3,8.21.86,4.34,1.33,3.98,3.22,3.87,1.8,3.96-1.53,4.25-1.51,3.9-3.87,2.36-3.87,2.24,3.78,3.98,3.78,2.07,3.22,3.87,2.24,4.46,4.93,15.59,1.33,4.34,1.77,3.96,1.42,3.9,1.8,3.87,1.24,8.29.86,3.9,1.3,3.87.94,3.87,1.33,4.43,1.33,3.9,1.8,3.87.86,3.96,1.77,7.76-.09,3.87.38,4.34,1.33,3.87,3.78,1.62,7.17.09,8.97.74,3.39-.47,3.78-1.77,1.62-3.9-2.36-3.87-3.22-3.48-2.83-3.39-.94-1.06-3.69-3.96-1.33-3.87-.86-3.87.59-3.9,1.03-3.87-.47-3.87-2.27-4.34,1.12-7.76.12-3.87-3.22-3.96.09-3.87.56-3.78-.47-3.9-.86-3.96-1.3-3.87-2.75-3.98-2.83-3.87-3.69-2.54-2.27-4.34-.94-3.42-1.8-3.96-4.04-11.72-.77-8.68-1.33-4.34-.83-4.46-3.6-7.73.09-4.34.56-4.84,2.01-3.87.09-3.87-.86-4.34-1.8-3.87-.94-3.98-.38-3.87,1.06-3.78,2.45-3.87-.86-3.87-3.87,2.36-4.25-1.62.09-3.87,1.03-3.78-1.33-3.87-3.57-8.32-.94-4.43-.86-3.87-3.78-1.53-4.25-1.03-3.87,1.33-4.25.38-3.78-1.51-3.78-.59ZM4897.31,4640.08l-2.83.38-2.45,1.42-1.89.94-2.48,3.31-.56,1.89.94,1.98-.09,1.42,2.36,3.04,5.2,1.03.56-1.42-1.42-3.39.09-2.45,2.36-1.42,2.1-4.25-.47-.94-1.42-1.53ZM4882.84,4647.46l-.94.47-1.51,1.89.86,5.84,2.75,3.42,1.98-.86.56-4.34-1.33-4.46-2.36-1.98ZM4828.91,4648.23l-1.89.47-1.42,1.42-.56,2.83,1.42,2.45,2.27,1.98,4.25,4.43,2.83,1.53,2.83.09,1.42-1.42.09-1.51-1.42-1.89-.94-.59-3.31-.56-2.36-2.92-.86-2.92-1.42-2.45-.94-.94ZM5005.16,4654.63l-3.87.86-1.03,3.39.94,2.92,2.75,3.42,3.78,3.48,2.36-.94.56-2.36.47-1.89-1.8-3.96-1.33-2.48-2.83-2.45ZM4886.24,4664.46l-.94,2.45-.09,1.42-2.36-.09-1.89.94-.56,2.45,1.89,2.45,1.8,2.95-.09,2.83.47,1.98,1.89,1.03,1.42-1.42-.38-2.92-.38-2.45.47-2.36,1.98-2.36,1.03-3.42-.94-2.92-.94-.47-2.36-.09ZM4900.05,4667.68l-1.42.47-.59,1.42-.47,2.92.38,3.39,1.33,2.45,2.36,2.95,1.89,1.51,5.2,1.03.56-2.36.94-.94-1.42-2.92-.86-2.45-2.36-3.42-2.24-2.54-3.31-1.51ZM4869.82,4676.18l-1.06,2.45.94,2.36.86,2.45.47,1.98,2.83,1.06,6.23-.86.94-2.36-.83-1.03-2.83-3.98-3.78-1.98-3.78-.09ZM5000.73,4682.59l-2.45,1.33.47,3.39,3.66,4.93,2.75,3.48,3.31,2.45,1.51-1.42-.94-3.87-2.24-2.45-3.78-4.43-2.27-3.42ZM4907.22,4688.64l-.56,2.92,1.3,2.48,2.36,3.39,3.31.09,2.48-1.42,2.45-2.83-.94-1.51-1.42-.47-1.42-.09-1.42-.47-3.31-1.06-2.83-1.03ZM4921.86,4695.25l-1.51,1.42-2.01,2.36-1.98,3.39-2.36-.09-1.42,1.42.38,3.87,1.8,2.01h1.98l1.42-1.42,3.39-3.78,2.92-2.83,2.95-2.36,1.89-.86.09-1.51-2.83-1.53-4.72-.09ZM4945.57,4699.71l-.94.47-.56.94-1.98,2.36-.47,1.89-2.48,2.36-.94,1.89.38,3.87.47,1.51,2.83-.38,3.31-.47.56-3.31-1.3-3.96,2.92-5.2-.38-1.51-1.42-.47ZM4932.17,4702.72l-2.01.94-.94,1.89-.56,3.39,2.36,1.51,1.89-.94,1.51-2.36,1.06-2.36-1.42-1.51-1.89-.56ZM4994.51,4703.66l-3.31.94-2.95,3.78,6.05,26.27,3.6,9.24,3.22,7.85,2.24,3.87,6.61,1.59,5.2,2.1,2.36.56h2.48l1.98-3.31.09-5.28-1.8-3.98-1.42-2.45,1.15-8.12,1.98-3.87,1.12-6.23-1.33-6.82-2.72-4.43-2.75-5.4-2.36-2.92-3.69-2.54-3.87.47-2.92,2.27-3.31-1.06-2.83-1.51-2.83-1.03ZM4929.42,4718.13l-2.45.94-1.42,1.89-.12,2.45,2.36,1.51,2.95-.47,1.42-2.83-.86-2.45-1.89-1.03ZM4953.03,4725.95l-1.42.47-1.89.38-2.45,1.42-1.06,3.87,2.83,1.98,3.78.59,2.95-2.83.56-2.95-3.31-2.92ZM4878.59,4730.02l-5.2.86-1.03,2.92-.56,3.87.38,2.36,1.3,6.32,5.11,6.43,4.16,8.32,10.86,23.41,2.83.56,1.03-1.42-6.79-17.09-.86-6.32,3.48-3.78-5.67-6.35-1.68-4.9-.38-4.34v-3.39l-1.33-2.01-.47-2.45-1.89-1.42-3.31-1.59ZM5027.09,4738.79l-1.89,1.89-.59,2.83.38,2.95.94,1.98,2.36,1.51,4.25-1.42,2.1-6.23-1.89-.94-5.67-2.57ZM5007.52,4760.04l-2.45,2.83v3.42l3.22,3.96,5.2.56,2.45-1.33,1.51-4.34-.86-2.45-3.78-1.98-5.28-.68ZM4898.25,4790.47l-.94,1.42-.56,1.42v2.45l.35,4.34,1.71,6.82.86,6.32,3.01,13.61,2.18,8.77,2.27,8.24,1.68,8.77,3.51,12.19,3.19,5.87,5.2,3.96,10.3,6.05,4.72,3.01,8.03,3.6,8.88,7.94,5.11,5.37,4.16,3.96,4.72,4.55,8.03,2.54,6.97,4.55,8.5,5.02,8.97,3.57,7.56,1.15,4.37-1.33,5.28-1.8,9.53-2.75,6.79-4.16,7.29-4.13,8.59-3.69,7.26-4.16,5.4-6.23,10.57-6.05-13.31.65-1.42-1.98-4.63-2.92-4.25-3.01-11.33-4.16-1.89-.56-7.56-3.04-4.34-.09-.94,2.83-.56,3.39,2.36,1.03,4.25.12,1.89,1.98.86,2.45-3.42,4.25-7.08-2.54-1.98,1.3-2.45,3.9-3.78,1.77-2.45,1.42-7.65-.18-3.78-1.51.65-4.81,2.92-3.31-.47-2.48-3.78-1.03-5.67-1.59-4.72-1.98-1.03,2.36,1.42,3.87-2.07,4.81-4.72,1.33-9.56-1.71-3.31-1.98-1.3-2.45v-3.39l-3.22-2.48-4.25-1.51-7.08-3.1-1.89-2.95-1.8-4.43-1.8-2.92-3.78-1.51-1.98.94-2.83,1.89-2.92-.12-.38-2.45-1.33-4.81-1.8-3.48-5.2-2.01-3.39-.09-2.75-2.45-.94-2.92-1.3-4.93-1.24-6.79,1.12-9.15-1.77-2.95-5.31.38-.94-2.45-.83-2.45,1.51-4.81-2.75-4.37-2.36-2.54-1.71-6.79.47-2.83,1.53-3.9-.38-1.42-2.36-3.48-4.72-1.03ZM5018.47,4802.84l-3.87,2.83-1.03,3.87.94,3.39,2.75,2.48,3.39-.38,1.51-4.34-.38-5.31-1.42-1.51-1.89-1.03ZM5019.07,4821.73l-2.01,1.89-.56,5.84,2.27,2.95,4.25,1.51.56-2.83-.38-4.46-2.72-4.81-1.42-.09ZM4983.35,4822.38l-1.51.94-1.51,3.78,1.3,3.98h2.95l1.89-1.89-1.33-4.81-1.8-2.01ZM4973.73,4823.62l-.94,1.42-1.53,2.83-.09,5.37,1.33,2.48,2.36,1.51,1.03-1.51.56-3.78-.35-4.93-.94-1.89-1.42-1.51ZM5041.62,4832.89l-1.03,3.39-1.42,2.83-1.03,2.45.86,3.87,3.31,1.51,2.92-1.42.09-4.34-1.33-5.76-1.42-1.98-.94-.56ZM4965.4,4835.04l-2.45.86-.94,2.92,1.8,2.92,3.31,2.57,4.72,2.92,2.83-.86-.38-3.39-3.69-4.43-3.78-2.57-1.42-.94ZM5057.79,4837.14l-1.06,1.42-3.31.94-1.98,3.78-.56,3.39,2.36,1.03,4.81-1.8,4.34-4.81-1.3-2.92-3.31-1.03ZM4986.27,4838.44l-.94.38-.56,3.87,1.33,3.42,2.36,1.51.94-1.42-.77-6.23-2.36-1.53ZM5066.09,4847.53l-3.31.35-1.51.94-4.25,1.89-3.87-.09v1.89l2.27,2.45,6.23,2.1,4.25-1.8,2.54-4.81-2.36-2.92ZM4987.42,4852.43l-2.48,1.89-1.03,3.39.47,1.42.47,1.03,1.89.47,4.25-.35,5.76.65,2.95-2.36v-2.45l-1.42-1.42-3.31-.09-3.31-1.06-4.25-1.12ZM4957.55,4863.85l-1.42.47-3.31,1.89-.56,2.36,1.8,4.46h2.83l3.39-2.83,2.45-4.25-2.24-2.01-2.95-.09ZM4969.36,4869.43l-4.25.38-2.45,2.36-1.03,4.81,2.83.56,3.78-.86,3.39-2.36,2.45-2.83-1.89-1.51-1.42-.47-1.42-.09ZM5114.55,4873.77l-1.51,4.34.47,3.42,2.24,3.39,3.31,2.54,3.69,2.45,2.83,3.04,4.72,2.92,3.69,2.07,6.61,3.04,4.25,2.07,3.78,2.45,4.16,3.51,7.56,4.52,4.25,3.04,7.47,5.93,2.24,3.98,1.33,3.87-.09,4.34,1.89,3.98,5.58,4.9,5.67,2.07,4.43-7.17-5.58-7.35-.83-3.9-1.33-3.87-2.27-4.43-2.27-3.98-3.31-3.87-3.78-2.54-4.63-3.04-4.25-2.45-4.25-2.07-3.78-2.45-3.78-1.62-4.25-1.51-7.44-4.55-3.78-1.51-11.33-7.08-4.16-3.48-3.78-2.92-3.78-2.1ZM4978.8,4874.54l-2.92.86-.94,2.92.86,4.34,4.72,1.12,2.45-2.92.09-3.87-2.36-2.45h-1.89ZM5016.88,4875.87l-1.42.94-3.39,1.89-3.98,4.72-1.89,2.83,1.33,2.45,2.92-.38,3.42-3.78,4.34-4.81.09-2.83-1.42-1.03ZM5132.59,4877.08l-2.36.47-.56,2.36.47,1.51,1.42,2.01,2.27,1.51,3.39.47,4.25,1.12,2.92-1.89v-1.89l-.47-1.98-1.89-1.03-2.83-.56-2.83-.94-3.78-1.15ZM5215.15,4914.86l-3.39.38-2.36,1.89-1.06,2.83.38,3.39,1.42,1.98,1.42.59,3.31.09,2.92-2.36,2.01-5.28-.47-1.06-1.8-2.45h-2.36ZM5201.63,4940.66l-3.78,1.33.21,9.24,1.77,7.29,3.31.56,1.33,2.45,6.14,5.96,2.83-2.83-2.15-5.87-.38-5.37-1.8-4.81-2.27-3.51-5.2-4.43ZM5218.07,4970.59l-4.25.86-2.45,1.33-1.42,1.42-.56,4.34.83,3.39,3.69,6.91,9.06-2.66,2.57-6.7-.47-1.98-.38-.94-2.36-2.57-2.27-2.92-1.98-.47ZM5318.28,5354.38l-2.36.47-1.03,2.36,1.8,5.37,2.75,5.87,1.21,6.79-.18,6.79-.56,4.84.35,3.39,1.89,2.45,2.36.09,2.36-.94,3.04-3.31.94-1.89,2.36-.47,1.98-3.31,2.92-1.89.47-1.89-1.33-1.51-2.36-1.03-2.36-1.51-1.77-3.9-2.83-2.07.09-1.89-.86-3.87-1.42-1.51-3.78-1.06-.94-1.03.56-3.39-.47-.94-2.83-1.03ZM6854.35,5467.72l-2.36,1.42.27,5.76v1.51l1.8,2.45,2.45-1.89-1.33-4.9-.83-4.34ZM5354.65,5468.11l-2.83.94-3.39,1.77,2.66,7.85.47,2.45,1.77,4.93,3.69,4.9,4.63,3.48,4.63,3.98,3.78,3.48,1.33,4.46,1.3,4.34,4.07,8.88,6.91,9.33,6.7-1.77,1.51-4.37.09-3.39,1.98-3.78,2.1-4.81.56-4.81-.38-3.87-.38-3.42-1.77-5.84-3.31-1.59-3.31.47-2.01.83-1.3-2.45-.47-2.83-1.8-2.54-1.8-3.39-5.2-1.06-1.03,3.31-.56,3.9-.59,1.42-1.89.47-.94-1.53-1.3-1.98-.86-3.87-3.31-2.45-2.36-1.03-2.36-1.53-2.27-2.45-2.75-6.41ZM6850.57,5468.58l-1.42.47-2.01,1.89.3,5.28,2.36.56,1.03-.94-.27-7.26ZM5404.06,5470.73l-6.7,3.22-7.76,3.78-3.87,3.78.38,2.83,2.36,3.01,4.72,1.53,4.25.18,4.81-1.89,3.39-2.83v-2.36l-1.89.38-1.42-.94.56-.94,2.83-1.89-1.68-7.85ZM5376.37,5473.01l-2.83.94-.47,1.89,3.22,1.51,4.34.56,4.25-.83.94-1.42-.86-2.01-4.25-.56-4.34-.09ZM6846.02,5478.59l-1.51.94-.94,1.89-.68,6.32,3.22,3.04,4.34-2.83,1.15-5.31-.47-1.98-5.11-2.07ZM6846.79,5500.96l-2.36,1.33-2.57,4.34-.09,3.39,2.83,3.42,4.72,1.12,7.26-4.63.47-2.45-2.24-3.87-1.8-1.51-.94-.59-1.89-.47-3.39-.09ZM6829.79,5514.01l-1.06,5.28,4.25,1.12,6.26-1.3.47-2.36-1.33-2.01-8.59-.74ZM5571.43,5533.93l-1.98.94-.47,1.98,1.33,2.45.47.94-.47,1.42-1.98,1.42-3.31-1.03-1.42.47-.94.94,1.3,3.87.38,3.9,1.42,1.98,2.36.09,2.36-.94,2.83,1.03,1.89,1.03,1.42-.94,1.51-1.89-.47-2.45.59-2.36,1.03-2.45.47-2.36-1.8-3.01-4.16-3.98-2.36-1.03ZM5631.97,5545.18l-1.42,1.89-1.98,1.89-4.34,1.33-6.61-.12-3.78.38-1.03.94-.47,1.89.94,1.03.86.94,2.92-1.89,2.83-.35,3.78,1.51,2.83,3.96.86,4.46.35,1.89,1.42.56,2.01-1.89.56-3.39,1.42-.94,1.89.56-.09,2.36.47,2.92-.21,4.34,1.42,1.98,1.89,1.53,2.36,1.03,2.75,1.98,1.89,3.01.94.47.94-.47,1.12-6.23v-2.45l.59-1.89-1.89-1.51-1.42-.09-1.53,1.98-2.36.38-1.89-.59-1.3-3.39.94-2.36,3.39-3.31,2.92-1.89,2.83-.38,2.36,1.53,1.42,1.42.86,2.92-.09,4.43-1.53,3.78v1.51l-1.03,1.42.47,2.36.86,2.95.94,2.45,1.33,1.03h1.89l1.98-.38h1.89l.47-1.89-2.27-2.92-.38-2.92-.47-1.98-.47-1.42.59-2.95,1.89,1.06,1.42,2.45.47.56,3.78.09,2.72,1.89.94,1.51-.94,1.89-.09,3.9.86,2.45-1.51,2.36.47,1.03,4.72,1.98,5.2,1.15,2.36,1.51,2.83.56,1.42-1.42,2.45.09,2.27.47,4.34-1.8,3.39-.35,4.72,1.51,2.83.56,2.36-1.42,1.51-1.89-.94-2.92-1.77-2.92-2.36-.59-2.36-2.45-1.33-.47-3.39,1.33-2.36-.09-2.36-1.98-1.89.47-2.01.94-2.83-.59-2.83-.09-1.51,3.31-1.89,2.45-3.39.86-1.42-1.51-.86-2.92.56-2.83,2.36-1.42.12-4.34,1.98-1.89h2.83l1.42-.38.09-2.45-1.33-3.42-3.31-2.07-3.22-2.45-2.36-2.45-1.42-.59-2.36.47-1.42.38-1.42-2.45-.94-.94-1.89-.09h-1.42l-1.42-1.51-1.77-2.95-2.36-2.45-2.36-.09-3.9,3.31-3.78.38-3.31-.56-2.36-2.01-2.36-1.03-2.83-1.98-2.36-.56ZM5619.81,5557.93l-2.36,1.42-.59,2.92-1.42.94-1.03.38-1.42-.47-.38-2.92-2.83-2.01-4.25-.09-1.42,1.42.38,2.92-2.45,2.36v.94l1.42,1.53,3.78.56,3.31,1.03,3.78-.86h2.36l2.45-.86,1.33,2.48-.47,1.89-3.87,1.3h-.94l-1.89,1.89.86,1.53,5.67.56,3.87-1.8.56-2.45.47-1.42-.38-4.81-1.21-5.4-1.42-2.45-1.89-.56ZM5599.59,5569.53l-3.39,2.36v.94l-1.06,2.48.86,2.92,5.28,1.03,1.89-.38.94-1.42-.35-2.45-1.89-2.45-.86-2.45-1.42-.59ZM5631.7,5578.15l-5.76,3.66-2.48,2.83.86,2.01,1.42,1.03,1.42-.94,1.98-.47,1.42,1.51,3.22,3.48,2.83,2.01,2.36-.38.47-1.51-1.33-2.01-1.89-1.98-.35-2.83-.38-3.96-1.42-1.89-2.36-.56ZM6844.52,5601.64l-4.25.38v1.98l2.27,1.53.94.94,1.42,1.51,3.19,1.59,2.48-.94,1.98-2.83-.47-1.98-.86-1.51-2.83-.56-3.87-.12ZM6827.69,5608.46l-.47.94-1.12,6.32-2.83.86-4.81,2.83-6.35,2.66-.47,2.45,2.74,1.51,2.36,1.51,2.36,2.57,2.27,3.39,1.33,2.45,4.81-.86,9.06-4.04,8.8-6.05.09-4.81-2.75-3.04-1.89-2.45-1.33-1.98-1.89-1.98-1.33-1.06-2.92.38-1.89,1.42-1.98.94-1.8-3.96ZM5676.95,5615.07l-1.89.47h-.94l-2.95,1.89-1.03,2.83.86,3.87,3.78,3.01,3.31.59,2.45-3.31,1.51-4.37-2.72-2.92-2.36-2.07ZM6802.28,5616.49l-1.89.47-1.89.86-3.39.94-2.83.83-.56,2.95,2.36,1.51h1.89l1.89-.38,2.83-.47,2.45-.86,2.36-1.89.09-2.92-.94-.94-2.36-.09ZM5700.65,5618.09l-4.34,1.42-3.42,2.83-5.67-.18.3,5.37-.56,3.78,3.31,1.62,3.39-2.83,5.28-.86,2.45-3.78,2.01-3.87-.38-2.95-2.36-.56ZM5783.48,5631.4l-4.72.3-1.51,1.42-1.98,3.87-3.39,2.83-4.37,2.75-2.92,3.39-4.34,5.2-1.51,2.83,1.33,2.92,3.19,5.49-.56,4.81-1.12,4.81,1.42,2.01,4.63,3.01,1.42,2.45,1.89,1.03,2.83-.47,3.39-2.83,4.25.68,3.87-.94,4.81-5.67,2.92-2.36,4.37-.86,1.89-1.89,2.45-3.31,5.84-2.75,5.28-4.25,1.06-2.92-.47-2.92-2.27-2.45-2.36-1.53-1.33-1.98-.47-2.36-.86-4.43-1.33-1.98-2.36-1.06-2.92.94-2.45,2.83-1.51,5.31-1.42,1.42-.94-1.06.09-3.87-.47-2.36-1.8-3.01-2.36-1.98-5.2-1.06ZM6836.4,5638.78l-3.31.38-1.53,1.89-.94,2.45-2.07,6.23-3.96,4.25-7.2,1.24-4.25,1.33-1.51,1.42-.56,3.39,1.42,1.98,1.98-2.83,2.83-1.42,3.31,2.54,1.8,3.42-1.12,4.81-1.06,3.39-2.92,2.83-8.12,3.6,2.27,3.01,3.78,2.07,2.36.47,5.11,4.07,5.93,9.36,2.75,3.96,3.87-5.2-1.12-10.18-2.66-6.43.56-4.34,1.06-3.87,1.59-3.78,1.03-5.79,3.04-5.76,2.15-8.68.09-5.28-.83-2.01-.94-1.51-2.83-1.03ZM5709.33,5669.77l-1.42.94-1.03,1.89.47,1.98-.56,2.83-.09,2.92-1.06,3.87v2.36l1.89,1.51,1.8,1.06,1.51-1.42v-1.89l-.35-2.48.47-1.51,1.98-3.31.65-5.76-1.42-2.45-2.83-.56ZM5695.93,5674.2l-2.36.94-1.03,3.87-.68,5.28.86,3.9,2.36,3.01,2.36.56,2.83-.94,1.98-1.42v-1.42l-.94-1.51-3.78-1.03-1.33-1.98.59-2.36,1.03-3.9v-1.51l-1.89-1.51ZM5755.35,5676.18l-1.53.94v1.98l2.75,2.48,3.78,3.48,1.89.09,1.42-1.42.09-1.98-3.66-3.48-2.83-1.53-1.89-.56ZM5752.69,5685.83l-1.42.47-.94.94-.09,2.45,2.27,3.87,2.36.56,3.87-.86,1.42-1.42v-.94l-1.33-1.51-3.31-1.98-2.83-1.59ZM5835.64,5832.5l-2.48,2.83.38,3.39,1.8,3.9,1.89,2.45,1.89.09,2.36-.94,1.03-1.42-.86-3.39-3.19-3.98-1.89-2.45-.94-.47ZM6815.41,5854.05l-2.45.38-.09,2.92.47,1.98-.09,3.31-1.53,1.98-1.42,1.89-1.51,1.42-2.36,1.33-1.59,4.34,3.22,6.91,4.72.09,1.98-4.72.56-2.92,1.51-3.39,1.03-3.78.21-5.87-1.33-4.9-1.33-.94ZM6813.61,5885.01l-1.03.94-1.51,3.31-1.03,3.9-1.98,3.87-2.95,3.31-2.07,7.17-2.75,11.63-2.07,5.76-2.1,7.65-1.03,3.87-3.01,4.25-.56,5.87-3.51,5.2-4.34,3.78.77,7.26,1.77,3.48-.56,2.83-1.98,2.95-2.92,3.78-2.45,1.42-3.31-.12-2.36.86-3.98,6.7-.18,3.42,1.42,2.92,2.36-.86,3.87-3.78,3.48-5.28,4.37-3.78,3.96-3.22,2.45-2.92,1.89-17.39,4.34-4.72,1.15-6.79,3.01-4.72,2.57-7.2,1.77-12.07,2.48-2.83,1.51-6.35,4.99-9.06,1.62-5.76-.3-6.79-1.8-2.48ZM6762.61,5997.15l-1.98.38-.94,2.45-1.59,5.28-1.62,8.21-3.48,4.25-2.45,2.36-2.27-1.03-1.89-1.03-1.98.94-1.89,1.42-1.03,1.89-.12,4.81,3.31,1.62,4.16,3.01,6.14,2.54,2.83-1.3,1.62-7.76,2.07-3.39,2.45-5.2,1.62-6.32,1.59-7.67-.86-2.92-1.33-2.54h-2.36ZM6747.32,6000.07l-2.45,1.89-1.03,2.83-1.06,5.37,4.16,4.46,1.89-.94,1.98-4.25,1.06-2.92,1.03-3.31-3.69-2.57-1.89-.56ZM5930.27,6021.24l-8.5.18-3.87.94.94,2.45,3.22,2.48,10.39,3.19,8.97,2.18,5.76-1.33-.94-2.92-2.75-2.54-6.61-2.57-6.61-2.07ZM6741.18,6034.84l-3.39.94-3.78.35-3.87,2.75-2.95,1.89-.56,5.28-2.07,5.31-3.51,5.28-2.92,3.31-2.92,2.36-2.92,2.27-.09,5.37-.59,3.39-4.34,2.75-2.54,5.76-4.81,2.27-4.46,6.7-2.36,1.42-6.32,5.11-8.71,6.14-2.92,1.33-3.78.38-5.11-4.55-3.87.38-4.81,5.28-7.17.3-7.08-.77-3.31-.56-.56,3.39,5.08,2.54,4.72,3.13,8.03,1.12,2.36.12,1.42,1.51,1.33,3.87,1.33,3.96,2.27,2.48,5.28-1.8.47,1.51.38,3.39.74,5.87-2.15,10.09-1.24,9.15-2.07,8.24-3.51,7.17-4.43,6.23-2.07,4.25-2.95,4.34-1.03,4.37-1.03,1.89-2.36-.12-2.74-3.48-4.25-.09-6.7,1.33-4.34,2.24-2.92,3.31-2.83.94-1.53,1.42-1.03,3.31,1.42,1.06,2.36.09,1.89.94,1.33,2.54.38,3.39-.56,3.31-.47,2.95-3.51,4.25-1.98,4.34-1.98,2.83-.56,1.98-2.83,1.33-1.53,2.45-.56,2.83-2.83,1.42-.09,3.39-1.03,3.87-2.1,6.26-6.41,9.53-7.65,2.15-7.08-4.04-1.42.94-.94.47-1.42,1.42.35,1.89,1.89,1.51,2.75,3.01-.18,8.32-3.51,6.14-3.39,3.31-11.25-6.61-5.28.86,4.63,5.46,3.31,1.53.3,5.37-2.01,5.76-5.37,6.61-3.01,5.28-7.76,4.63-3.69-4.9-3.19-2.1-2.83-1.51-1.89-1.03-1.8-3.39-3.78-.21-1.89-1.98-4.34,2.83,2.72,5.4,2.83,1.03,4.72,2.07,5.49,7-1.12,6.32-2.95,3.78-3.39,3.78-4.9,3.78-4.93,8.62-4.43,5.2-5.84,5.67-6.73,4.13-3.87,3.31-.18,5.87-3.39,1.33-3.98,6.7-4.72.86.38,3.87-2.07,5.84-1.53,4.81-5.28,1.24-2.36-1.03.09-1.42-5.2-1.62-4.81,3.31-3.31-.09-2.36-1.03-1.89-.56-1.42.47-.09,1.42v.94l.38,2.45,1.33,4.43-.12,3.42-.56,5.84-3.57,7.17-2.1,8.12-5.37,7.67-1.62,5.84-6.23,3.69-1.51,2.83-6.23,3.22-5.2-1.53-5.2.3-2.45,1.89-2.83.38-1.06,2.92,1.42,1.03,1.8,1.98,3.31,2.01,3.22,4.99,4.72-.86,3.87-2.36,3.87-2.24,5.79-3.31,4.9-7.2,6.32-7.08,3.51-5.76,7.35-9.45,3.51-4.81,2.45-5.28,6.32-6.14,2.95-1.8,4.81-4.25,1.51-1.89,1.89-1.89,1.98-2.45,3.39-4.25,2.48-1.42,5.2-.3,2.92-2.83,3.96-5.28,2.45-4.25.12-3.87-1.8-3.51.56-2.92,3.39-2.75,3.39-2.83,3.98-5.28,3.87-5.2,6.43-7.65,5.84-5.67,2.92-5.2,3.39-2.83,1.42-.47,3.31,1.59,2.95-1.42,3.31.12,6.32-7.56,2.54-6.82,2.1-4.81,2.45-4.25,2.45-4.34,1.51-2.83,2.95-3.78,3.87-2.83,2.45-2.83,3.48-3.78,2.95-3.31,2.83-.94-.59,4.34-1.51,3.87-3.48,3.78-3.39,3.31-2.95,2.83-.56,3.87,3.31-.35,3.98-3.31,3.31-.86,2.92-2.83,2.36-.94,2.45-1.42,5.37-6.14,4.46-5.2,5.76-2.75,7.73-5.67,4.55-9.53.56-6.82,1.15-5.28,3.39-3.78,4.81-1.8,3.87-1.89,1.03-6.23,3.98-4.34-1.33-3.87-7.65,2.15-2.83.47-2.75-3.96.09-3.87,2.83-.47,3.39-2.27,4.84-3.31,2.07-5.28,1.51-3.87,2.92-4.25,5.4-7.08,2.15-7.29,5.4-8.12,4.43-5.67,4.46-7.65,4.52-9.06,3.87-1.89,3.04-7.2,4.04-10.57,3.51-4.25,3.96-8.59,5.02-10.12,12.37-17.09,1.59-5.76,2.18-11.16,1.03-4.81,3.04-4.25,1.98-4.81,10.66-5.58,1.53-5.76-.38-3.87-2.27-2.57,1.98-2.36,4.81-2.72,1.62-5.79-1.42-1.51-.94-1.98-2.27-1.98-1.89-.09ZM5924.22,6035.11l-3.31,1.89.86,3.87,5.11,1.62,8.12.18,5.2.68.09-2.95-3.31-1.59-5.2-2.54-7.56-1.15ZM5969.77,6037.29l-4.25.38-2.48,1.89-4.81,3.66,1.89,2.01,5.2-.3,5.28-1.33,1.06-3.39-1.89-2.92ZM5934.43,6046.06l-9.53.68-1.53,2.45,1.89,2.45,5.67-.38,4.84.21,3.78,1.03,3.19,1.98,3.78,1.62,3.9-.86.94-2.92-.86-3.42-4.25,1.33-3.87.86-2.36-1.98-5.58-3.04ZM5901.55,6048.63l-4.34,3.78-.47.94-3.39,4.25-.56,3.87,4.25.09,4.25.68,3.78.56,3.78-.38,3.87-.94,3.78-1.8,3.87-.86,7,5.49,3.22,2.07,3.87-.47,4.25-1.77-.86-2.01-3.31-1.51-3.22-2.54-3.78-.56-3.78-3.04-3.31-1.03-3.69-2.54-3.78-1.06-3.78-.56-7.65-.65ZM5979.39,6054l-1.03.47-6.61.3-2.92,2.36v1.98l2.24,3.39,3.31,1.03,1.89-1.89,3.42-1.77,5.2-.38-.86-1.98-4.63-3.51ZM6047.22,6055.8l-1.89,1.42-2.48,1.33-3.31.47-3.39.86-.47,1.89-.56,2.45-.09,2.45-.47,1.89-.94,1.42-1.98,1.89-1.06,2.92.94.94.94,1.03h2.36l2.83-1.3,3.42-2.83,1.98-3.31,3.96-6.26.56-1.98,2.01-5.28h-2.36ZM5943.97,6064.3l-1.51,3.31.86,4.9,3.19,2.01,2.48-2.36-.86-4.84-4.16-3.01ZM5981.84,6069.59l-1.03,1.89,1.33,2.57,5.58,4.9,3.31,1.59,1.03-2.92-2.75-3.48-2.36-1.51-5.11-3.04ZM5975.05,6075.25l-1.51,3.39.35,2.83,4.72,2.57,5.2,1.12,2.01-3.31-.94-2.92-3.78-1.12-6.05-2.57ZM5941.69,6079.24l-3.87,1.89.86,3.87,4.63,3.48,7.08,2.66,1.98-1.89-.38-3.87-2.36-2.1-5.2-2.54-2.75-1.51ZM5979.3,6093.29l-3.39,2.83-8.03-1.12-4.37,5.19,2.27,4.43,5.67.68,7.76-5.67,4.34-4.72-4.25-1.62ZM5987.24,6101.79l-2.95.86-2.83.94-3.87,1.8-3.87,3.31-2.92,3.87,1.8,3.87-.12,3.9.86,3.96,3.78,1.03,1.03-3.87,2.01-3.87,2.92-3.78,3.87-.86,3.31-.38.56-3.87-2.27-3.48-1.3-3.42ZM6068.18,6110.67l-1.89.47-2.92,1.33-2.92,1.89-.47.94-.59,3.39.38,2.92,1.89,2.95,2.36,1.03,3.78-.38,1.03-2.36,1.53-3.87v-1.89l.18-5.4-2.36-1.03ZM6038.13,6116.72l-2.92.38-4.81,4.25-5.76,3.78-4.93,5.19-3.96,5.67-1.98,3.87-1.03,3.87-.12,4.81-3.87.86-3.87,3.78-3.39,3.87-.09,3.9,3.78,1.98,3.78.56,8.38,3.22,3.78,1.51,4.16,3.48,3.78,1.06,3.78,2.54,3.69,3.96,3.78,2.1,4.16,2.07,4.34-.38,3.87-2.83,4.25-1.77,3.78,1.03,4.25.09,3.87-1.8.59-3.87-2.75-3.96-4.25,1.3-3.87.86-3.78-1.51-1.8-3.96.09-3.9-1.33-4.43-4.25,1.89-2.07,3.78-3.78,1.42-.38-3.87-4.25-2.1-7.56-.18,2.92-3.87,3.87-1.8,2.01-3.87-3.78-2.45-8.03-.77-3.42,3.78-3.87,1.42,1.03-3.87,1.15-5.28,2.45-3.42,1.98-2.83,3.87-3.31,5.31-3.66,3.96-5.79,1.03-4.81-1.8-1.98ZM6096.9,6121.15l-3.39.38-4.25-.09-5.2-.09-2.48,2.83-.56,3.87.94,1.42,1.89-.38,2.83,1.51,2.27,1.53,1.89,1.98,1.42-.47,1.98-2.36.56-3.87.59-2.83,2.83-1.89-.38-1.53h-.94ZM6097.64,6128.44l-1.03,1.42-1.51,2.92-2.36,2.36-1.98,2.83-3.87,2.36-1.06,3.87,3.78-.38,3.78.12,4.25,3.01-.56,3.87,2.27,3.87,4.81-1.77,3.22,2.07,3.87-.94,1.03-3.78-2.72-3.96-4.25-3.04-3.22-3.96-.38-3.98-1.33-3.39-2.75-3.48ZM6003.09,6131.84l-3.87.86-3.87,3.78-2.45,3.31-2.01,4.34-4.81-.09-3.69-1.62-2.36-.56-2.45.47-2.83,1.89-1.51,2.36,3.69,3.51,3.78,2.07,3.78,1.51,4.25,1.03,3.78-.35,3.87-2.27,2.92-3.87.09-4.37,1.53-3.87,3.96-4.25.09-3.87h-1.89ZM6062.42,6131.93l-4.81,2.75-.59,3.39,1.8,2.92-1.98,4.37-2.45,3.87.94.94,1.89.56,1.42-.47,1.03-2.92,3.31-2.27,3.39-.47,3.78.18.56-2.45-.47-2.92-3.78-1.03-2.72-2.57,1.51-2.36-.94-1.03-1.89-.47ZM6090.55,6162.24l-4.25.86-2.45,3.31-1.51,3.87-3.78.38-2.45,2.36-.09,2.45-.59,4.37,3.78,1.59,3.78.09.47-1.98-.83-3.39,2.45-2.83,4.81-.38,2.36-.94,1.98-1.89-.47-3.39-.38-2.92-.94-.94-1.89-.59ZM6413.24,6224.32l-3.31.86,2.63,5.93.38,3.39,1.89,2.48,6.61,1.68,6.23-1.33,2.36-2.36-2.27-3.96-2.72-3.48-11.81-3.22ZM6549.9,6225.17l-.94,2.45-.56,2.83.38,4.43-.21,5.76-1.03,4.84-1.03,3.87-.68,5.37.38,4.81,2.83,1.06,1.42-2.36.09-3.9,1.15-4.81,2.45-2.83,4.25.09,3.69,2.57,1.89,2.92,1.33,3.39,1.3,2.57,2.75,3.87,3.78,2.07,3.78-1.33.21-4.9.09-3.31,1.03-5.37-.86-2.01-1.89-.47-3.78-2.07-3.31-.56-2.27-1.98-3.78-1.62-3.31-1.03-3.19-3.96-1.33-2.95-1.33-4.43-1.33-2.92-1.98-.09ZM6450.72,6243.3l-2.36.47-2.45,1.89-1.03,2.36,1.42,1.98.35,2.45,1.42,2.48,4.25,1.03,2.83-.86,1.89-.94-1.3-2.45-1.8-2.45-.47-2.48-.38-1.98-2.36-1.51ZM6308.95,6255.49l-.94,1.89-.09,1.51v1.42l.83,1.98.94,1.98,2.36,1.53,4.25.56,3.78.65-.47-1.51-.35-1.51-2.83-2.45-1.89-1.53-1.8-2.92-1.89-1.51-1.89-.09ZM6233.3,6265.58l-1.06,2.45-1.42-.56-.47,1.42,1.33,3.04,1.89,1.42,3.69,3.57,2.75,1.98,4.34-1.3-.38-3.42-.94-1.51-3.22-3.48-1.77-2.45-4.72-1.15ZM6378.38,6268.03l-1.89,1.42-1.42,1.42-.09,1.42.94,1.53,2.36.56,2.24,1.98v1.51l-1.51,2.36-1.89,2.36-.09,2.45.38,1.42,3.31,2.1,1.89-.47,1.03-1.42,1.98-2.83,1.98-4.81.59-4.84-1.33-2.45-2.83-2.07-5.67-1.62ZM6335.58,6273.23l-1.51,1.89-.56,3.9-.56,4.81.83,1.51,2.48-1.42,4.81-2.27,1.51-2.45-1.42-3.39-2.27-1.98-3.31-.59ZM6197.4,6273.91l-1.89.38-1.89,1.89-.12,1.98.38,2.45.94,1.42,2.83.56,1.89,1.51,4.25,1.15,1.42-1.89-.38-1.98-2.36-2.01-2.24-2.54-2.83-2.92ZM6531.57,6274.64l-1.51,1.42-.94.94-1.03,2.48-.47,2.36-.56,2.92-1.53,3.87-5.37,3.69-5.37,5.67-1.42,2.45,1.77,2.45,2.83.56,4.37-2.36,4.9-7.08,7.65-2.72,2.45-1.89-.83-2.95-1.89-1.03-.86-2.45.56-3.31.94-2.92-.86-1.51-.94.47-1.89-1.06ZM6149.79,6281.85l-1.51,2.36-1.53,2.45-1.03,3.78,1.42,1.51,3.78-.38,2.45-1.42,2.48-3.78-1.8-2.92-1.89-1.51-2.36-.09ZM6356.09,6285.89l-4.25.86.47,1.51.35,2.45,1.42,1.42.38,1.06,2.83,1.03,3.78.09,3.31,2.54,2.27,2.48,1.42,2.92,2.27,1.03,4.81-.86.56-2.36-3.69-6.41-4.6-4.55-6.05-3.01-5.28-.21ZM6433.9,6288.55l-4.81,1.8-3.87,2.36-2.45,4.25-.09,2.92,1.42,1.98,4.72-1.33,4.34-3.78,2.07-3.87.09-4.34h-1.42ZM6300.36,6297.05l-2.48.86-1.89,1.42-1.51,2.45-1.03,4.81.38.94,1.42,2.45,3.31-.86,1.51-2.92,1.98-2.83,1.51-3.31-.47-1.03-.94-.47-.35-1.51h-1.42ZM6374.98,6308.77l-2.36,1.42-1.06,2.83-1.51,2.92-1.98,2.83.94,1.98,4.25,1.03,5.11,2.66,1.51-1.42,1.89-.47,1.03-2.83-1.42-1.51-2.36-1.53-1.8-3.01-.35-1.89-.47-1.98-1.42-1.03ZM6287.14,6328.78l-1.89,1.89.35,1.89,2.36,1.98.94.56,1.8,1.53,2.36,3.39,2.36.56,1.98-3.31.47-2.92-2.24-3.39-2.83-1.15-3.31-.56-2.36-.47ZM6326.81,6337.58l-2.01,1.89-1.98,2.83-1.42,3.39-1.98,2.83,1.8,2.54,4.72.09,3.87-1.89,3.87-2.72-.38-2.48-.94-1.03-2.24-3.39-3.31-2.07ZM6560.47,6345.96l-6.23,3.69.47,1.98,2.83.59,4.72.09,7.17-2.75,1.06-2.36-2.83-1.03-7.2-.21ZM6019.36,6356.08l-2.95.47v2.36l1.24,4.9.86,4.93,1.33,3.87,2.36,1.51,5.28-.77,1.42-2.45-.38-1.42-2.83-3.48-.86-2.45-3.22-6.43-2.24-1.03ZM6266.36,6363.17l-1.89,1.42-.59,2.83.38,4.43.38,2.45,2.75,2.48,4.72.65,1.51-1.89.56-4.9-1.33-3.42-1.77-2.45-1.89.38-2.83-1.98ZM6298.18,6397.08l-2.36,1.42-1.51,1.89-1.98,4.81-1.06,3.31,2.27,2.54,3.31,1.51-.38-2.92,2.48-3.78,2.45-4.34-.86-2.92-2.36-1.51ZM6424.84,6453.46l-3.87,4.72-3.39,2.36-3.87.86-2.27-1.03-1.51.94.94,1.98-.59,2.92.86,4.34,3.31-.38,2.83-.35,5.4-3.78,5.76-3.22.56-2.92-.94-2.01-3.22-4.43ZM6200.59,6465.83l-3.31,1.89-1.51,2.83-1.51,2.92-.56,4.84.86,1.51,4.72,1.51,1.42.09,1.42-.94.56-2.92-.38-2.92,1.03-2.36,2.45-2.83-.47-1.98-1.42-1.06-3.31-.56ZM6399.81,6467.33l-5.28,2.27-1.98,5.76-1.62,4.37-2.45,3.87-5.28,5.19-4.43,5.2-4.84,4.25-3.96,4.72-4.81,3.31-2.92,3.78-.59,2.92,1.33,3.96,3.31.59,8.71-6.61,4.34-2.83,4.34-3.69,3.87-3.78,2.92-2.83,2.48-3.39,4.43-5.19,2.92-4.37,3.04-3.78,3.87-3.31-3.69-7.35-3.69-3.04ZM6321.61,6502.19l-1.42,1.42-2.48,2.83.38,2.92,1.8,3.9,2.75,3.01,4.25.09,3.96-3.31-1.42-2.92-2.27-3.96-1.3-2.48-1.42-.94-2.83-.56ZM6328.02,6529.59l-3.31.86-2.92.38-2.36,1.42-3.87,2.36-2.92,4.25-2.1,4.34-2.92,3.78-3.78,1.89-4.34,1.33-7.65,3.22-4.37,3.19-1.98,3.42-1.51,2.83-.09,3.87-1.03,3.87.94.09,2.83.56,3.78-1.89,3.39-2.36,8.21-4.13,4.34-2.27,4.25-2.36,3.9-3.31,3.96-3.78,3.39-4.25,6.82-5.67,3.87-4.25,2.07-4.81-1.89-2.01-4.72-.56ZM6233.95,6572.18l-12.57,8.41-2.83,1.89-4.34,2.83-3.87,3.78-2.92,3.31-3.04,4.34-2.92,3.78-3.39,4.25-3.87,1.89-3.78,2.27-9.18,5.67-.09,3.39,3.22,2.01,9.53-1.71,8.24-4.63,3.31-1.89,4.34-1.33,3.87-1.3,3.78-.86,8.03.65,3.78.56,3.78.12,3.87-3.31,3.04-4.25,2.45-5.79-1.33-4.43-5.2.38-2.45,2.36-1.98,3.78-7.08-.21.09-4.81,4.43-4.25,5.28-4.72,11.93-2.07.56-4.34.65-4.93-13.31-.86ZM6267.66,6573.12l-2.45.86-1.42,1.51-1.12,5.79.86,2.45,1.42.56h.94l4.34-.38,4.81-2.83-.47-1.89-.86-1.98-.94-1.98-1.8-1.51-3.31-.59ZM5760.55,6638.12l-2.48,1.89-.94,1.89.38,3.39.38,1.51,3.69,4.93,2.83,2.54,2.36.47,2.83-.38.56-2.92-.94-2.45-1.33-2.45-2.75-3.39-2.24-3.51-2.36-1.51ZM6096.51,6643.88l-4.34,2.36-3.87,3.78-3.9,2.83-2.45,3.31-3.31.86-2.92,2.36-6.23,4.72-4.34,2.83-2.95,3.78-3.87,1.89-5.67-1.12-3.78,1.77-3.39,1.89-3.87,1.33-4.25,1.42-3.87.86-7.56,1.71-3.78.35-3.98,3.31-.09,3.9,2.36,3.96,3.78-.86,3.87-2.83,3.78-1.8,3.78,1.06-7.73,6.61-3.78,1.89-3.87,1.3-3.78.38-3.9,2.83,1.33,3.87,3.31.12,8.12-1.71,3.9-1.89,4.25-1.8,3.87-1.8,3.87-3.87,3.39-3.78,3.87-3.78,4.37-2.83,4.34-1.33,1.89.12,2.36-1.89,3.87-.86,1.42-1.98,2.92-1.33,2.36-1.42,3.87-2.36,4.84-3.22,3.39-2.83,3.87-3.31,4.34-2.83,4.34-2.36,2.95-3.31,1.59-7.17-.94-2.45-3.78-.68ZM6124.94,6644.65l-3.31.94-2.92,3.31-1.98,4.81-2.92,1.33.35,1.98,8.15,1.24,5.76-3.31-.47-2.95.09-2.36-.38-2.45-2.36-2.54ZM5604.69,6651.64l-.59,2.92-2.54,7.73,2.36.56,4.25.12,1.42.94.86,3.48.86,3.39,3.31,1.98,3.39-1.3,1.03-4.37-1.33-4.9-2.27-4.9-4.72-2.57-6.02-3.1ZM5666.56,6660.5l-4.37,3.31.38,3.9,3.78,3.48,3.69,2.07,3.31,3.04,3.22,1.51,3.78,2.54v-1.03l1.98-2.83.09-3.87-1.8-3.96-3.19-3.98-3.78-1.03-3.78-2.07-3.31-1.06ZM5630.93,6665.99l-3.39.38-.56,3.87-1.51,3.39-.12,3.87,3.9.12,3.66,1.98,2.75,3.96,3.78,1.62,3.78.56,4.25,1.98,3.87-3.31,1.06-3.78-2.75-3.96-.38-3.98-3.78-1.98-7.56-.18-3.31-1.62-3.69-2.92ZM5568.68,6668.73l-3.31,1.42-1.98,3.39-.09,3.87,1.8,2.92,2.83,1.53,3.22,3.96,4.25,1.12.47-1.51-.3-7.73-1.8-4.46-2.27-2.92-2.83-1.59ZM5729.38,6673.72l-3.9.47-.47,1.42,1.33,3.9,1.8,3.96,2.75,3.96-.09,3.9,2.24,3.96,3.31,1.03,3.78.09,2.75,4.46,1.8,3.96,3.69,3.51,3.87.09,1.98-3.87-.38-3.9-2.15-7.82-2.83-3.99-3.69-3.48-4.25-1.51-3.69-2.57-4.16-4.99-3.66-2.57ZM5611.1,6679.59l-3.78.38-.09,4.34,1.33,4.43,1.33,2.45.47,1.42.83,3.98-2.45,3.78,3.22,3.96,3.78.68,4.55,8.29,2.72,3.98,3.22,4.43.86,3.96,2.75,4.46,3.78,1.03,1.51-4.34,1.03-3.87-.86-3.9-1.77-3.96-3.22-3.96-1.33-3.42-1.42-1.51-2.27-2.45-3.22-4.55-1.3-3.87-.86-4.43.09-3.87-1.33-3.9-3.78-2.54-3.78-1.03ZM5663.73,6681.4l-3.78.83-.59,3.9-1.12,4.34-1.03,3.87,2.36,2.92,3.22,5.02,2.24,3.96.86,3.87-.09,3.9,1.33,3.96,3.1,7.85,3.22,3.96,5.02,7.47.47.94,2.75,4.43,5.46,7.94,1.33,4.9.86,3.9-1.51,4.81-1.53,3.87,2.27,3.96,3.78.12,8.12-3.69,3.78,1.98,3.78.09,3.78,3.04,1.71,4.9-3.39,3.31-4.72,1.89-3.87,3.31-4.84,2.27-.09,4.43.38,1.89,3.78.09,3.87-.83,4.34-3.31,3.78-1.8,3.9-.94,4.25-.38,3.87-2.27v-2.45l.09-1.98-2.75-3.98-3.22-3.96-.83-3.87-.38-4.46-.38-3.87.09-4.34-1.8-4.43-5.46-7.94-3.78-3.51-3.69-3.48-.86-3.87,3.39-3.31.59-3.99-1.8-3.87-3.78-2.07-3.78,1.89-3.78-.56-1.89-2.01-1.33-1.98-4.25-3.57-.38-3.9,1.03-3.87-7.56-1.12-3.66-3.99-2.27-4.43-.38-4.43-1.33-1.42-1.42-2.57-1.8-3.87-3.66-3.48ZM6009.61,6686.86l-11.42,3.6-3.78-.09-4.72-.68-3.87,1.89-3.9,2.83-4.25,1.8-3.87.38h-.94l-3.78.86-4.25.35-3.87.86-3.87,3.31-4.34,3.78-3.78.94-3.9.86-8.03.29-4.72.35-5.28,1.33-3.78,1.33-4.34,2.36-3.48,6.14,6.14,1.71,4.81-1.42,3.78-.86,4.25,1.12,4.25-.38,8.12-1.21,3.78.09,3.78-.47,3.87-1.33,3.22,3.98-.56,3.87-2.45,3.87-3.9,3.31-.09,3.87,3.69,3.51,3.87-3.31,2.92-3.78,1.06-3.9,3.01-7.73,1.03-4.34,2.45-3.78,3.9-2.36,3.87-1.42,4.25-1.33,7.64-2.75,4.34-1.8,3.78-1.77,7.76-6.14,2.45-3.9-.86-3.87ZM5481.69,6698.66l-3.78,2.36-2.45,3.87-1.51,3.78-.09,3.98,1.3,3.87,4.25-1.33,3.9-1.89,2.92-3.31,2.92-3.78,1.03-3.87-4.25-3.01-4.25-.68ZM5602.21,6713.86l-1.98,3.78-1.03,3.9,3.22,3.96.94,3.01,2.75,3.9,5.28-1.8,1.03-3.87.09-3.9v-3.87l-2.75-3.96-3.78-1.03-3.78-.12ZM5579.46,6714.25l-1.89,1.89.38,3.39,3.22,2.57.94.47.38,3.96-3.42,3.78.86,3.87,3.78,2.1,3.22,4.43,3.78.56,2.45-3.78,1.03-3.87,1.53-3.87-3.22-3.96-5.49-8.41-7.56-3.13ZM5545.66,6720.21l-2.01,7.73,2.27,3.98,4.16,2.54-1.51,2.83-4.93,9.15-1.03,3.9,3.69,3.48,8.21,12.37,2.83,3.87,3.31-1.77,2.48-3.9,6.7-.74,4.72.56,3.22,1.51,2.24,4.46,1.42,3.48.86,3.87,2.75,4.46.94-1.42.56-3.9,1.03-3.87,1.15-7.26-.86-3.87-1.8-3.98-.86-3.87-1.3-4.43-2.75-3.98-3.78-3.96-4.16-3.04-6.52-3.1-3.31-1.98-2.75-3.98-3.31-3.01-2.83.38h-.94l-2.72-2.01-1.33-3.96-3.87-.56ZM5644.25,6721.24l-3.78.86-1.03,3.39.86,3.39.86,3.98,3.78,1.51,3.22,5.46,3.57,7.85,1.8,4.43,2.75,3.99.56-3.87-.38-3.98-1.68-7.82-1.33-4.37-3.13-7.82-2.27-3.99-3.78-3.01ZM5713.02,6721.54l-.09,4.34,1.33,2.45,3.31,2.07,3.66,4.46,1.33,1.98,2.66,7.38,1.98-.47,1.98-4.37,3.31-.35-.56,3.87.86,4.43,3.31,1.51,4.04,5.49,2.95-3.31-.3-4.9-2.83-1.53-.77-8.29-2.54-10.3-2.83-1.51-4.25-.56-3.78-.59-3.78-1.12-8.97-.65ZM5948.51,6724.64l-3.78.86-3.9,2.36-3.78-1.03-3.78-1.62-3.78-.09-2.92,3.78,1.8,3.98,3.78,1.59h3.31l4.25,1.12,3.78-.35,3.39-3.78,1.03-3.9.59-2.92ZM5395.35,6724.84l-4.34,3.19,3.22,4.07,4.16,2.92-.09,2.92,1.89,3.51,3.31.09,2.83-1.89.09-3.87-.86-3.98-2.27-4.43-3.69-2.45-4.25-.09ZM5508.82,6736.83l-1.53,2.36-3.78.38-2.83.47-2.45,1.89,1.71,7.82-1.51,4.37,2.36,1.98,6.14,1.59,4.72,1.03,3.31-1.3.83,4.34,2.36,1.03,3.78.09,1.8,2.45.47,1.06,2.75,3.96.38,4.34,1.8,4.46,1.51-2.36,1.98-3.9,2.45-3.87,3.78,1.15,2.27,3.96-.56,3.87-1.51,3.78-2.48,3.87.86,3.9,4.25.65,1.8,3.87-1.51,4.34-3.87,1.89-3.78,2.36-4.37,1.8-3.78-2.07-.83-3.87-3.78-1.06-5.58-2.07-5.11-5.49-1.8-3.96-3.69-3.48-5.2-1.15-2.07,4.81-.47,3.42,3.22,3.96,4.16,4.55,4.6,4.43-1.12,4.81-5.58-2.07-3.39.94-.09,7.26-3.87,1.89-3.9,3.31-3.78-2.07-3.66-3.51-.94-.94-2.83,1.8,1.3,3.98-1.51,2.36-1.42,1.42-4.25-1.53-3.69-3.01-3.87,3.31-2.36-1.98-1.42-1.03-2.75-4.46-1.77-1.98-.94-1.98,1.03-3.87,3.78.09,3.78,2.54,2.45-3.87,3.69,3.01,3.87-.35-.38-4.93-1.33-4.34.12-3.87,1.03-3.87,2.45-3.9.56-3.87-1.8-4.43,2.95-3.78-1.33-3.98-3.87,3.31-4.37,1.42-3.78.86-2.83-.56h-1.42l-3.87,1.33-3.39,3.78-3.78.47-1.98,3.78,8.03,1.21,5.76-1.3,2.75,4.43-2.45,3.78-3.9.94-3.78-.09-3.78.38-3.87,2.36-1.89.83-1.42.94-2.92,1.42,5.58,5.96-.56,2.45-4.25,2.27,1.77,3.96,3.78,1.06,3.78.65,1.8,3.39-1.03,3.87-2.45,3.9-3.87,3.78-7.76,3.66-3.78,1.33-2.45,3.87,1.33,3.99,4.25,1.03,3.78,2.07,3.78-2.83,2.92-3.87,1.51-2.36.94-1.42,3.39-3.39,3.9-.38,8.03.77-.12,3.87-8.12,3.22-3.39,1.33-4.34,2.83.86,3.87,3.87.09,3.78-.86,3.31-1.33,3.87-2.36,3.87-3.31,4.81-3.78,9.65-4.6,3.78-1.42,4.34-1.33,4.25-1.33,6.14,2.07,1.03-3.87,2.45-2.83,2.83-1.89,4.84-.86,4.25-2.83,4.34-.83,7.17-2.75,3.78-.86,4.25-.94,4.81-2.27,3.87-2.36,6.14-.86,1.62-4.81.56-5.28-.38-4.9-.38-3.9-.35-1.98-.47-2.92-1.33-3.39-2.75-3.99-1.8-3.96-2.83-2.92-.86-1.98-1.89-1.06-3.19-3.01-2.36-2.92-5.58-4.07-3.69-1.98-3.78-2.54-4.16-3.99-3.69-4.04-6.49-5.96ZM5661.37,6739.66l-1.06,2.92.38,3.87.94,3.9.38,3.96.38,3.87-.68,4.34-.56,3.9.38,4.34,3.78,1.59,2.75,3.98,3.87-1.89.56-3.9-1.68-7.82.09-3.87-.38-3.9-1.8-4.43-1.8-3.96-1.77-4.37-3.78-2.54ZM5611.01,6742.79l-3.39,3.78-1.51,4.34-2.48,3.87-3.87,4.25-3.78-.56-1.98,3.78,1.8,3.96,3.69,3.04,7.56,3.1,3.19,3.98.86,3.87,1.33,4.43,3.78-.38,4.34-3.78,2.92-3.87,1.53-3.78-.3-4.43-1.42-3.87-.77-4.46-1.3-4.43-.86-3.87-1.8-3.98-3.78-3.96-3.78-1.03ZM5412.83,6744.68l-5.2.35,1.33,3.9,4.63,4.04,3.78,3.04,3.78,1.51,7.56.65,4.25,1.15,4.34-3.78.94-.47-2.27-3.98-4.25-1.59-4.25.38-3.78-.12-3.78-1.03-7.08-4.04ZM5808.51,6750.7l-5.2.3-8.59,1.8-7.17,4.16-6.35,6.61-5.76,2.36-2.45,4.25-2.45,3.39,4.16,1.98,5.76-3.22,7.73-3.69,5.28-3.31,10.6-6.49,4.34-5.19.09-2.95ZM5642.95,6755.72l-3.78,1.33-2.48,3.87-1.51,3.87-.56,3.87.38,4.37-2.45,3.87-.12,3.87,3.69,3.96,4.25.12,1.42-.38,2.92-1.89,3.31,1.03,4.72-2.36,1.53-4.25,1.12-3.87-.47-3.98-1.8-3.87-2.75-3.96-7.44-5.58ZM4309.97,6769.12l-4.34.86-.47,1.51,1.33,2.48.94,1.98,2.83-.47,1.98-2.36,1.03-3.39-3.31-.59ZM5756.86,6770.27l-4.72.86-3.87,1.42-3.78-.68-4.25.94-3.9,2.74-.56,4.43,3.69,2.01,4.34-1.33,3.78-1.33,3.87-.47,4.25-.86,3.9-3.78-2.75-3.96ZM4284.29,6773.49l-4.34.83-.94,1.42,1.42,2.57,1.3,1.42,2.83.09,2.01-2.36,1.03-3.39-3.31-.56ZM4267.08,6780.37l-4.34.94-.47,1.42,1.42,2.45,1.33,2.01,2.83-.47,1.98-2.36.56-3.42-3.31-.56ZM4202.49,6788.31l-3.9.38-4.34,4.34-5.76,8.12.38,1.42,2.36,1.03,5.76-2.72,3.87-3.9,3.39-4.81-.35-3.39-1.42-.47ZM4243.46,6796.9l-3.78,1.89-.56,4.34,1.33,2.95,4.72.65,2.92-2.36.47-2.45-.86-3.39-4.25-1.62ZM4228.17,6806.34l-1.51,2.83.38,3.51.94,1.42,2.36,1.03,2.36-1.42.09-4.34-1.33-2.95-3.31-.09ZM5585.8,6807.76l-3.78,2.36-1.06,3.39.86,4.37,7.47,4.13,7.56,1.15-.47-1.03-1.8-3.42-1.8-3.48-6.97-7.47ZM5401.49,6827.12l-2.36.86-2.45.47,2.36,3.39,3.69,2.57-1.51,3.87-3.78-1.62-3.69-1.51-4.81.38-3.78.86-2.1,6.32-.94.47-2.92,2.83-2.27-1.98-2.36-1.51-.47-1.03-2.24-4.46-1.71-5.37-3.87.86-4.46,7.73-1.51,4.34-1.51,3.78,2.75,3.98,3.78,1.59-.56,4.81-3.9,2.36-3.39,2.83-1.98,3.31-1.03,3.87-.56,4.46,4.72,2.54,4.72,1.03,5.2-.83,4.81-1.8,8.03.18,6.61-.38,5.76-3.66,1.98-1.89,4.25-1.42,2.1-5.79,3.87-3.31,3.78-1.42,3.87-2.72,4.34-2.36,3.87-2.83.12-4.84-3.9,1.33-4.25.38-3.78.86-4.34,3.31-3.78.38-3.78-.59-3.31-2.45,1.98-3.87,4.25.09,7.67-2.74,3.87-3.31,4.34-1.3,4.25-2.36.56-3.9-3.22-3.96-12.75-.29-1.89-.09-2.36-.47ZM5157.92,6827.51l-2.83.47-1.42.47-.59,1.42,1.42,2.45,1.33,1.98,2.92-.35,1.42-2.48,1.06-3.39-3.31-.56ZM4961.15,6834.12l-6.23,1.33-6.23,2.75-3.9,5.76-1.03,3.87,2.83.09,2.92-3.31,2.36-2.92,5.79-1.8,3.78,1.51-3.42,1.42-.94,1.89,2.83,1.62,3.31-.94,2.36.56,4.72,2.54,7.94,2.1,4.25,3.01.77,6.35v1.98l-1.51,4.34-2.01,3.87-1.51,3.31-2.92,3.87-6.7,4.72-.56,4.37,2.72,1.03,3.9-.38,4.34-3.31,2.45-3.39,3.39-4.25,1.42-1.89.56-1.98.94-2.36,2.1-5.87v-2.92l.09-3.39-.38-4.34-.86-2.95-.94-3.48-2.72-3.39-4.63-3.04-15.11-5.28-4.16-1.03ZM5275.69,6837.6l-.09,2.95-.21,8.29-.56,4.34.38,3.9,1.8,3.96,3.78,1.51,3.87-2.75-.38-4.43.21-8.8-1.33-4.34-3.78-2.54-3.69-2.1ZM5130.88,6849.79l-4.34.86-.47,1.89,1.33,2.54.94,1.42,2.83-.35,1.51-1.89,1.51-3.42-3.31-1.03ZM5331.24,6852.15l-4.25.86-7.76,6.61-7.56-.18-2.45,3.39-2.45,3.78-3.87,2.36-3.78.86-4.84,2.36-3.78-2.1-.35-3.87-3.69-1.03-4.34.38-3.31,1.3-3.9,2.83-1.51,3.9-3.39,3.78-3.78.94-3.39,2.36-.09,2.83,1.3,3.96,3.78,1.03,2.83,1.03,3.31.12,4.84-1.33,3.78-1.42,3.78.09,5.28-.86,4.72-.86,5.67-1.3,3.87.56,5.2-.3,5.67,1.03,3.96-9.62.59-3.87.09-3.87,2.45-3.78,3.78-.94,3.78,1.12,2.75,3.87-3.78,3.39-.09,3.9,3.66,1.03,3.9-.38,3.78-.94,3.87-3.78,1.98-4.34-1.8-3.87-3.69-3.98-3.19-4.52-3.78-1.06-3.78-1.51ZM5162.52,6852.92l-4.25.94-.56,1.42.94,2.92,1.33,1.51,2.92-.47,1.89-2.36,1.03-3.39-3.31-.56ZM4941.61,6857.56l-1.42.47-1.42-.12-.94.94-1.06,2.48-.47,3.39.86.94.94-.47,1.98-1.42,2.36-.86,1.06-1.51v-1.89l-1.42-1.03-.47-.94ZM4931.96,6868.51l-1.51,2.36-2.45,4.81-.56,3.87.83,3.98,1.89,1.51,1.33,1.42,3.78,2.54,3.78.09,1.03-3.87-.35-3.87-3.78-2.07,1.51-4.37-1.33-3.87-4.16-2.54ZM5214.29,6869.24l-.94.94-1.03,2.95-.09,2.92.94.94,2.92-1.33,1.89-1.42,1.42-1.51.09-1.89-1.89-1.03-1.89-.59h-1.42ZM5188.7,6869.63l-.94.94-1.03,2.92-.59,2.83.94,1.06h.94l2.48-1.42,1.89-1.42,1.42-1.42-.38-1.89-1.42-1.06-1.89-.56h-1.42ZM4944.92,6880.96l-1.42.47-.94,1.42-.59,2.92.94.94.94-.47,1.89-1.42,2.01-3.31-1.42-.56h-1.42ZM4961.92,6882.76l-2.83.94-1.42.94-1.42.47-.12,2.92.94.94,2.83-1.42,1.89-1.42,1.53-1.42v-1.89l-1.42-.09ZM5158.95,6886.93l-1.42.47-.94.94-1.03,2.36-.59,2.92v.94l.94.56.94-.47,1.89-1.42,2.48-.94.94-1.42.09-2.45-1.42-.94-1.89-.56ZM5074.32,6898.53l.35,4.46.94,2.45v.94l1.8,1.51,2.83.09,1.98-1.42,1.42-2.45.12-1.89-.94-1.98-2.27-1.51-1.51-.09-.94.47-3.78-.59ZM5162.34,6903.54l-4.25.86-1.03,1.98,1.42,2.45,1.33,1.51,2.92-.47,1.89-2.36,1.03-2.92-3.31-1.03ZM5107.85,6907.15l-1.06,1.42-1.03,2.45-.47,2.83.47,1.03h1.42l2.36-1.42,1.89-.86,1.51-1.98-.47-1.89-1.42-1.03-1.77-.56h-1.42ZM5151.86,6908.18l-4.34.38-.94,1.89,1.3,2.45,1.42,1.51,2.83.09,2.01-2.36,1.03-3.39-3.31-.56ZM5120.49,6912.34l-1.03,1.42-.94,2.36,1.89,1.03.86.47,2.45.09,1.42-1.42v-2.45l-1.33-.94-.94-.56h-2.36Z"/>
            <path id="_5292" data-name="5292" class="cls-2" d="M2702.7,1150.84l1.5,2.1-2.6,2.5-1.5,2.5-3.1-.6-1.4-4.1,4.1-3.5,3,1.1Z"/>
            <path id="_5306" data-name="5306" class="cls-2" d="M2691,1211.04l4,2.7-1.2,9.6-1.6,6-2.1,3.6-5.2,3.9-5.6,2.5-20.5,7.2-10.8,8-4.1,3-14.3,3.3-7.2,1.9-11.7,2.8-9.6-2.2-5.1-3.6-.9-4.1,2-1,4.1.6,5.5,3.6,3.1,1.1,3.5.1,3.1-1.5,4.1-2.5,3.1-2.5,2.1-1.4,10.6,1.7,5.6-2.5,5.7-3.4,9.9-12.6,6.2-6.4,5.1-2.5,3.6-1.5,2.6-.4,2.5,1,1,2.1,1.5,2,2,.1.5-2-.9-4.1.6-4.6,2.1-5,6.7-3Z"/>
            <path id="_5324" data-name="5324" class="cls-2" d="M2546.6,1293.94l.5,2.5.5,2.6-5.2,2.4-2.5-2.6-.4-2.5,2.5-1.5,4.6-.9Z"/>
            <path id="_5332" data-name="5332" class="cls-2" d="M2321.6,1308.94l1,6.1-5.7,1.4-4-.1-7.1-.1,2.1-5.5,3-.5,10.7-1.3Z"/>
            <path id="_5342" data-name="5342" class="cls-2" d="M2483.2,1342.64l.5,2.5.5,2.6-5.2,2.4-2-2.5-.4-2.6,2-1.5,4.6-.9Z"/>
            <path id="_5343" data-name="5343" class="cls-2" d="M2400.1,1357.44l-7.1,1.9-2-3-2.5-2.1-3.5-4.6-1.5-4.1.6-4.1,7.1.1.5,4.6,1.4,3.1,4,4.1,3,4.1Z"/>
            <path id="_5207" data-name="5207" class="cls-2" d="M3059.8,929.84l-1,3-1.1,1-2,.5-2.6-.1-3.5-1.1-1.5-3-.4-5.1,1.1-4.1v-2.5l1.1-2,1.5.5,2,2.1,1,1v2.6l-.1,1.5,1,1,2.6-.9h1.5l1,1.5-.6,4.1Z"/>
            <path id="_5212" data-name="5212" class="cls-2" d="M3043.1,926.44l1.5,2.1-.6,3-5.1,2.5-3.1-.6.1-4.6,1.6-2.5,5.6.1Z"/>
            <path id="_5213" data-name="5213" class="cls-2" d="M3009.5,929.94l1.4,1.5-.5,3.1-4.1.9-2.5-1.1-1.5-2.5,1.6-2,5.6.1Z"/>
            <path id="_5216" data-name="5216" class="cls-2" d="M3013.9,938.64l.4,2-1.5,2-2.1,1-1.5-1-2-2.1,1.1-2,5.6.1Z"/>
            <path id="_5222" data-name="5222" class="cls-2" d="M2948.4,957.74l3,2.1-2.6,3-3.1-.1-2.5-.5.1-4.6,2-.5,3.1.6Z"/>
            <path id="_5223" data-name="5223" class="cls-2" d="M2935.6,959.04l2,2.1-1,3-5.2,2.4-1-1.5-.4-2.1,1.5-2.5,4.1-1.4Z"/>
            <path id="_5225" data-name="5225" class="cls-2" d="M2946.7,965.84l2,2-.6,3.1-4,.4-3.1-.5-1-2.6,1.1-2.5,5.6.1Z"/>
            <path id="_5230" data-name="5230" class="cls-2" d="M2924.9,986.74l.5,2,1.5,4.1-5.1-1.1-2.5.5-4.6.4,1.9,3.6-.5,4.1-3.7,4-4.1,2.4-3.5-5.1-1.9-3.6,4.1-2-1.5-2v-2.1l.6-3,2.1-2,3.6-3.5.6-5-2.5-3.6,2.1-2.5,4.1-2,.5-2,1.6-1.5,2.5.5,1.5,1.6,1,2,2.5,2.1.5,2.1-.6,2,2.6,1,4.5-.4.5,1.5-2.5,1.5-5.8,6Z"/>
            <text class="cls-3" transform="translate(5492.86 2933.19) scale(1.25 1)"><tspan x="0" y="0">Kissimmee</tspan></text>
            <text class="cls-3" transform="translate(4946.22 2531.94) scale(1.25 1)"><tspan x="0" y="0">The Villages</tspan></text>
            <text class="cls-3" transform="translate(4527.13 1616.99) scale(1.25 1)"><tspan x="0" y="0">Gainesville</tspan></text>
            <text class="cls-3" transform="translate(2918.05 629.12) scale(1.25 1)"><tspan x="0" y="0">Tallahassee</tspan></text>
          
          <g id="beacons">

            <g id="beacon-kissimmee" transform="translate(5432.86 2913.19)">
              <circle class="beacon-ring orange" cx="0" cy="0" r="0"></circle>
              <circle class="beacon-ring delay orange" cx="0" cy="0" r="0"></circle>
              <circle class="beacon orange" cx="0" cy="0" r="60"></circle>
            </g>
            
            <g id="beacon-the-villages" transform="translate(4886.22 2511.94)">
              <circle class="beacon-ring orange" cx="0" cy="0" r="0"></circle>
              <circle class="beacon-ring delay orange" cx="0" cy="0" r="0"></circle>
              <circle class="beacon orange" cx="0" cy="0" r="60"></circle>
            </g>
            
            <g id="beacon-gainesville" transform="translate(4467.13 1596.99)">
              <circle class="beacon-ring green" cx="0" cy="0" r="0"></circle>
              <circle class="beacon-ring delay green" cx="0" cy="0" r="0"></circle>
              <circle class="beacon green" cx="0" cy="0" r="60"></circle>
            </g>
            
            <g id="beacon-tallahassee" transform="translate(2858.05 609.12)">
              <circle class="beacon-ring green" cx="0" cy="0" r="0"></circle>
              <circle class="beacon-ring delay green" cx="0" cy="0" r="0"></circle>
              <circle class="beacon green" cx="0" cy="0" r="60"></circle>
            </g>
              </g>
        </g>
        </svg>
        <p style="margin:.4rem 0 0;color:#7a6a95;font-size:.9rem">Note: Map is illustrative; final territories set during development process.</p>
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

<!-- ===== Dummy Announcements Section (HTML + CSS only) ===== -->
<section class="announcements" id="announcements" aria-labelledby="announcementsTitle">
  <div class="announcements__container">
    <header class="announcements__header">
      <span class="announcements__eyebrow">
        <span class="announcements__dot" aria-hidden="true"></span>
        Announcements
      </span>
      <h2 id="announcementsTitle" class="announcements__heading">Latest from Flying Biscuit</h2>
      <p class="announcements__sub">
        Menu updates, franchise milestones, events, and what’s new across the system.
      </p>
    </header>

    <div class="announcements__grid" role="list">
      <!-- Pinned -->
      <article class="announcement-card announcement-card--pinned" role="listitem">
        <a class="announcement-card__media" href="#" aria-label="New Appetizer: Biscuit Board launches system-wide">
          <img
            class="announcement-card__img"
            src="https://images.unsplash.com/photo-1529692236671-f1f6cf9683ba?auto=format&fit=crop&w=1200&q=70"
            alt="Shareable brunch board appetizer"
            loading="lazy"
          />
        </a>

        <div class="announcement-card__content">
          <div class="announcement-card__top">
            <div class="announcement-card__badges">
              <span class="announcement-card__badge">Menu</span>
              <span class="announcement-card__badge announcement-card__badge--pinned">Pinned</span>
            </div>
            <time class="announcement-card__date" datetime="2026-01-25">Jan 25, 2026</time>
          </div>

          <h3 class="announcement-card__title">
            <a href="#">New Appetizer: “Biscuit Board” launches system-wide</a>
          </h3>

          <p class="announcement-card__body">
            A shareable starter built for brunch parties. Rollout kit includes recipe card, prep notes, and plating guide.
          </p>

          <a class="announcement-card__cta" href="#">
            Read more <span aria-hidden="true">→</span>
          </a>
        </div>
      </article>

      <article class="announcement-card" role="listitem">
        <a class="announcement-card__media" href="#" aria-label="Franchisee Conference: dates + hotel block announced">
          <img
            class="announcement-card__img"
            src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?auto=format&fit=crop&w=1200&q=70"
            alt="Team meeting at a conference"
            loading="lazy"
          />
        </a>

        <div class="announcement-card__content">
          <div class="announcement-card__top">
            <div class="announcement-card__badges">
              <span class="announcement-card__badge">Events</span>
            </div>
            <time class="announcement-card__date" datetime="2026-02-12">Feb 12, 2026</time>
          </div>

          <h3 class="announcement-card__title">
            <a href="#">Franchisee Conference: dates + hotel block announced</a>
          </h3>

          <p class="announcement-card__body">
            Registration opens next week. Hotel block pricing ends March 1 — reserve early to lock in the discount.
          </p>

          <a class="announcement-card__cta" href="#">
            Read more <span aria-hidden="true">→</span>
          </a>
        </div>
      </article>

      <article class="announcement-card" role="listitem">
        <a class="announcement-card__media" href="#" aria-label="Welcome our newest franchise partners in Florida">
          <img
            class="announcement-card__img"
            src="https://images.unsplash.com/photo-1521791136064-7986c2920216?auto=format&fit=crop&w=1200&q=70"
            alt="Handshake celebrating a partnership"
            loading="lazy"
          />
        </a>

        <div class="announcement-card__content">
          <div class="announcement-card__top">
            <div class="announcement-card__badges">
              <span class="announcement-card__badge">Franchise</span>
            </div>
            <time class="announcement-card__date" datetime="2026-01-18">Jan 18, 2026</time>
          </div>

          <h3 class="announcement-card__title">
            <a href="#">Welcome our newest franchise partners in Florida</a>
          </h3>

          <p class="announcement-card__body">
            Congrats to the new ownership group. Onboarding begins this month with site search and market planning.
          </p>

          <a class="announcement-card__cta" href="#">
            Read more <span aria-hidden="true">→</span>
          </a>
        </div>
      </article>

      <article class="announcement-card" role="listitem">
        <a class="announcement-card__media" href="#" aria-label="Construction begins: Gainesville breaks ground">
          <img
            class="announcement-card__img"
            src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?auto=format&fit=crop&w=1200&q=70"
            alt="Construction site and tools"
            loading="lazy"
          />
        </a>

        <div class="announcement-card__content">
          <div class="announcement-card__top">
            <div class="announcement-card__badges">
              <span class="announcement-card__badge">Development</span>
            </div>
            <time class="announcement-card__date" datetime="2026-01-10">Jan 10, 2026</time>
          </div>

          <h3 class="announcement-card__title">
            <a href="#">Construction begins: Gainesville location breaks ground</a>
          </h3>

          <p class="announcement-card__body">
            Permits cleared and buildout is underway. Estimated opening window is late spring (more details inside).
          </p>

          <a class="announcement-card__cta" href="#">
            Read more <span aria-hidden="true">→</span>
          </a>
        </div>
      </article>

      <article class="announcement-card" role="listitem">
        <a class="announcement-card__media" href="#" aria-label="New seasonal creative pack is live">
          <img
            class="announcement-card__img"
            src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?auto=format&fit=crop&w=1200&q=70"
            alt="Marketing assets on a desk"
            loading="lazy"
          />
        </a>

        <div class="announcement-card__content">
          <div class="announcement-card__top">
            <div class="announcement-card__badges">
              <span class="announcement-card__badge">Marketing</span>
            </div>
            <time class="announcement-card__date" datetime="2026-01-05">Jan 5, 2026</time>
          </div>

          <h3 class="announcement-card__title">
            <a href="#">New seasonal creative pack is live</a>
          </h3>

          <p class="announcement-card__body">
            Social + in-store assets for the next promo window. Includes captions, story frames, and print files.
          </p>

          <a class="announcement-card__cta" href="#">
            Read more <span aria-hidden="true">→</span>
          </a>
        </div>
      </article>

      <article class="announcement-card" role="listitem">
        <a class="announcement-card__media" href="#" aria-label="Updated catering packaging standards">
          <img
            class="announcement-card__img"
            src="https://images.unsplash.com/photo-1550547660-d9450f859349?auto=format&fit=crop&w=1200&q=70"
            alt="Packaged food ready for catering"
            loading="lazy"
          />
        </a>

        <div class="announcement-card__content">
          <div class="announcement-card__top">
            <div class="announcement-card__badges">
              <span class="announcement-card__badge">Operations</span>
            </div>
            <time class="announcement-card__date" datetime="2025-12-20">Dec 20, 2025</time>
          </div>

          <h3 class="announcement-card__title">
            <a href="#">Updated catering packaging standards</a>
          </h3>

          <p class="announcement-card__body">
            Small changes that improve consistency and guest experience. Please review before your next large order.
          </p>

          <a class="announcement-card__cta" href="#">
            Read more <span aria-hidden="true">→</span>
          </a>
        </div>
      </article>
    </div>

    <div class="announcements__footer">
      <a class="announcements__all" href="#">View all announcements →</a>
    </div>
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
        <a class="announcements__all" href="<?php echo esc_url(get_category_link(get_cat_ID('Announcements'))); ?>">
          View all announcements →
        </a>
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
        The Menu
      </span>
      <h2 id="menuHypeTitle" class="menu-hype__heading">Craveable. Differentiated. Built to Sell.</h2>
      <p class="menu-hype__sub">
        The Flying Biscuit menu hits the sweet spot: <strong>homemade taste</strong> with <strong>ease of execution</strong>—so teams deliver consistently,
        and guests rave every visit.
      </p>
    </header>

    <div class="menu-hype__grid">
      <!-- Left: Copy + proof -->
      <div class="menu-hype__left">
        <div class="menu-hype__accolades" aria-label="Accolades and recognition">
          <span class="menu-hype__award">🏆 Award-Winning Brunch Favorite</span>
          <span class="menu-hype__award">⭐ 4.7★ Guest Love (10,000+ Reviews)</span>
          <span class="menu-hype__award">🔥 Cult-Following Signature Items</span>
        </div>

        <div class="menu-hype__copy">
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
          <a class="menu-hype__btn menu-hype__btn--primary" href="/menu">View Full Menu</a>
          <a class="menu-hype__btn menu-hype__btn--secondary" href="/catering">Explore Catering</a>
        </div>

        <p class="menu-hype__fineprint">
          *Items vary by location. Always refer to your market’s approved menu and rollouts.
        </p>
      </div>

      <!-- Right: Vertical “social” video -->
      <div class="menu-hype__right" aria-label="Vertical social-style video">
        <div class="reel" id="menuReel" data-video-id="pwApTviidHw">
          <div class="reel__frame">
            <!-- Poster image -->
            <img
              class="reel__poster"
              src="https://images.unsplash.com/photo-1551218808-94e220e084d2?auto=format&fit=crop&w=1200&q=70"
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
            15–30s vertical clip works best here (Reels / Shorts / TikTok).
          </div>
        </div>
      </div>
    </div>

    <!-- Featured items: less “cerebral”, more hype -->
    <section class="menu-hype__featured" aria-labelledby="featuredMenuTitle">
      <header class="menu-hype__featured-head">
        <h3 id="featuredMenuTitle" class="menu-hype__featured-title">The 5 Everyone Comes Back For</h3>
        <p class="menu-hype__featured-sub">
          Instant “I need this” energy. Great photos. Big cravings. Easy to fall in love with.
        </p>
      </header>

      <div class="bites" role="list">
        <article class="bite bite--1" role="listitem">
          <a class="bite__link" href="/menu" aria-label="View menu: Famous Biscuits">
            <img
              class="bite__img"
              src="https://images.unsplash.com/photo-1525351484163-7529414344d8?auto=format&fit=crop&w=1200&q=70"
              alt="Fresh baked biscuits"
              loading="lazy"
            />
            <div class="bite__shade" aria-hidden="true"></div>
            <div class="bite__text">
              <div class="bite__name">Famous Biscuits</div>
              <div class="bite__wow">The legend. Warm. Buttery. Addictive.</div>
            </div>
          </a>
        </article>

        <article class="bite bite--2" role="listitem">
          <a class="bite__link" href="/menu" aria-label="View menu: Shrimp and Grits">
            <img
              class="bite__img"
              src="https://images.unsplash.com/photo-1604909052743-94e8383a81cf?auto=format&fit=crop&w=1200&q=70"
              alt="Shrimp and grits plated for brunch"
              loading="lazy"
            />
            <div class="bite__shade" aria-hidden="true"></div>
            <div class="bite__text">
              <div class="bite__name">Shrimp &amp; Grits</div>
              <div class="bite__wow">Comfort food that makes people talk.</div>
            </div>
          </a>
        </article>

        <article class="bite bite--3" role="listitem">
          <a class="bite__link" href="/menu" aria-label="View menu: Eggs Benedict">
            <img
              class="bite__img"
              src="https://images.unsplash.com/photo-1551183053-bf91a1d81141?auto=format&fit=crop&w=1200&q=70"
              alt="Eggs benedict with hollandaise"
              loading="lazy"
            />
            <div class="bite__shade" aria-hidden="true"></div>
            <div class="bite__text">
              <div class="bite__name">Eggs Benedict</div>
              <div class="bite__wow">Classic brunch done the Flying Biscuit way.</div>
            </div>
          </a>
        </article>

        <article class="bite bite--4" role="listitem">
          <a class="bite__link" href="/menu" aria-label="View menu: Lunch favorites">
            <img
              class="bite__img"
              src="https://images.unsplash.com/photo-1550547660-d9450f859349?auto=format&fit=crop&w=1200&q=70"
              alt="Lunch sandwich with sides"
              loading="lazy"
            />
            <div class="bite__shade" aria-hidden="true"></div>
            <div class="bite__text">
              <div class="bite__name">Lunch Favorites</div>
              <div class="bite__wow">Not just breakfast—lunch hits too.</div>
            </div>
          </a>
        </article>

        <article class="bite bite--5" role="listitem">
          <a class="bite__link" href="/menu" aria-label="View menu: Brunch cocktails">
            <img
              class="bite__img"
              src="https://images.unsplash.com/photo-1514361892635-6b07e31e75f9?auto=format&fit=crop&w=1200&q=70"
              alt="Brunch cocktails at a bar"
              loading="lazy"
            />
            <div class="bite__shade" aria-hidden="true"></div>
            <div class="bite__text">
              <div class="bite__name">Brunch Cocktails</div>
              <div class="bite__wow">The differentiator. The ticket booster.</div>
            </div>
          </a>
        </article>
      </div>

      <div class="menu-hype__featured-cta">
        <a class="menu-hype__btn menu-hype__btn--primary" href="/menu">See Everything on the Menu</a>
      </div>
    </section>
  </div>
</section>

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
      <span class="team__eyebrow"><span class="dot" style="width:8px;height:8px;border-radius:50%;background:var(--brand-secondary)"></span> Marketing Support</span>
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
      <span class="team__eyebrow"><span class="dot" style="width:8px;height:8px;border-radius:50%;background:var(--brand-primary)"></span> Meet the Team</span>
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

<section class="markets" id="target-markets">
  <div class="markets__container">
    <h2 class="markets__heading">Target Florida Markets</h2>

    <p class="markets__sub">
      <strong style="color:#F47B20;">Kissimmee & The Villages are TAKEN.</strong><br>
      <strong style="color:#6A2C91;">Gainesville & Tallahassee are IN DEVELOPMENT.</strong><br>
      Currently awarding markets listed below.
    </p>

    <div class="markets__controls" role="tablist" aria-label="Filter markets by status">
      <button type="button" class="markets__filter" data-filter="all" aria-pressed="true">All</button>
      <button type="button" class="markets__filter" data-filter="available" aria-pressed="false">Available</button>
      <button type="button" class="markets__filter" data-filter="development" aria-pressed="false">In Development</button>
      <button type="button" class="markets__filter" data-filter="taken" aria-pressed="false">Taken</button>
    </div>

    <div class="markets__legend">
      <span class="legend-chip"><span class="legend-available"></span>Available</span>
      <span class="legend-chip"><span class="legend-dev"></span>In Development</span>
      <span class="legend-chip"><span class="legend-taken"></span>Taken</span>
    </div>

    <!-- Search -->
    <div class="markets__search" role="search" aria-label="Search Florida market cards">
      <input id="marketsSearch" class="markets__search-input" type="search" inputmode="search"
            placeholder="Search cities (e.g., ‘Jupiter’, ‘Tampa’)" aria-controls="marketsGrid" aria-describedby="marketsCount" />
      <button id="marketsSearchClear" class="markets__search-clear" type="button" aria-label="Clear search">Clear</button>
    </div>
    <div id="marketsCount" class="sr-only" aria-live="polite"></div>

    <div class="markets__grid" id="marketsGrid">
      <!-- TAKEN (list first) -->
      <article class="market-card" data-status="taken">
        <div class="market-card__top">
          <div class="market-card__title">Kissimmee</div>
          <span class="market-card__badge is-taken">Taken</span>
        </div>
        <div class="market-card__meta"><span>Orlando metro</span><span class="market-card__dot"></span><span>Strong tourism</span></div>
        <a href="#lead-form" class="market-card__cta" aria-disabled="true" style="pointer-events:auto;opacity:.85">Explore Nearby</a>
      </article>

      <article class="market-card" data-status="taken">
        <div class="market-card__top">
          <div class="market-card__title">The Villages</div>
          <span class="market-card__badge is-taken">Taken</span>
        </div>
        <div class="market-card__meta"><span>Retirement hub</span><span class="market-card__dot"></span><span>High daytime traffic</span></div>
        <a href="#lead-form" class="market-card__cta" aria-disabled="true" style="pointer-events:auto;opacity:.85">Explore Nearby</a>
      </article>

      <!-- IN DEVELOPMENT -->
      <article class="market-card" data-status="development">
        <div class="market-card__top">
          <div class="market-card__title">Gainesville</div>
          <span class="market-card__badge is-dev">In Development</span>
        </div>
        <div class="market-card__meta"><span>University market</span><span class="market-card__dot"></span><span>Young demos</span></div>
        <a href="#lead-form" class="market-card__cta">Request This Market</a>
      </article>

      <article class="market-card" data-status="development">
        <div class="market-card__top">
          <div class="market-card__title">Tallahassee</div>
          <span class="market-card__badge is-dev">In Development</span>
        </div>
        <div class="market-card__meta"><span>Capitol city</span><span class="market-card__dot"></span><span>Stable base</span></div>
        <a href="#lead-form" class="market-card__cta">Request This Market</a>
      </article>

      <!-- AVAILABLE (from your list) -->
      <article class="market-card" data-status="available">
        <div class="market-card__top">
          <div class="market-card__title">Tampa</div>
          <span class="market-card__badge is-available">Available</span>
        </div>
        <div class="market-card__meta"><span>Cluster potential</span><span class="market-card__dot"></span><span>High growth</span></div>
        <a href="#lead-form" class="market-card__cta">Request This Market</a>
      </article>

      <article class="market-card" data-status="available">
        <div class="market-card__top">
          <div class="market-card__title">Orlando</div>
          <span class="market-card__badge is-available">Available</span>
        </div>
        <div class="market-card__meta"><span>Tourism engine</span><span class="market-card__dot"></span><span>Suburb demand</span></div>
        <a href="#lead-form" class="market-card__cta">Request This Market</a>
      </article>

      <article class="market-card" data-status="available">
        <div class="market-card__top">
          <div class="market-card__title">Jacksonville</div>
          <span class="market-card__badge is-available">Available</span>
        </div>
        <div class="market-card__meta"><span>Metro pop ~1.7M</span><span class="market-card__dot"></span><span>Daypart growth</span></div>
        <a href="#lead-form" class="market-card__cta">Request This Market</a>
      </article>

      <article class="market-card" data-status="available">
        <div class="market-card__top">
          <div class="market-card__title">Sarasota</div>
          <span class="market-card__badge is-available">Available</span>
        </div>
        <div class="market-card__meta"><span>Coastal growth</span><span class="market-card__dot"></span><span>Daytime ops</span></div>
        <a href="#lead-form" class="market-card__cta">Request This Market</a>
      </article>

      <article class="market-card" data-status="available">
        <div class="market-card__top">
          <div class="market-card__title">Fort Lauderdale</div>
          <span class="market-card__badge is-available">Available</span>
        </div>
        <div class="market-card__meta"><span>South FL cluster</span><span class="market-card__dot"></span><span>Affluent subs</span></div>
        <a href="#lead-form" class="market-card__cta">Request This Market</a>
      </article>

      <article class="market-card" data-status="available">
        <div class="market-card__top">
          <div class="market-card__title">St. Petersburg</div>
          <span class="market-card__badge is-available">Available</span>
        </div>
        <div class="market-card__meta"><span>Arts district</span><span class="market-card__dot"></span><span>Weekend lines</span></div>
        <a href="#lead-form" class="market-card__cta">Request This Market</a>
      </article>

      <article class="market-card" data-status="available">
        <div class="market-card__top">
          <div class="market-card__title">Boca Raton</div>
          <span class="market-card__badge is-available">Available</span>
        </div>
        <div class="market-card__meta"><span>Affluent market</span><span class="market-card__dot"></span><span>Brunch culture</span></div>
        <a href="#lead-form" class="market-card__cta">Request This Market</a>
      </article>

      <article class="market-card" data-status="available">
        <div class="market-card__top">
          <div class="market-card__title">West Palm Beach</div>
          <span class="market-card__badge is-available">Available</span>
        </div>
        <div class="market-card__meta"><span>Visitor volume</span><span class="market-card__dot"></span><span>Year‑round</span></div>
        <a href="#lead-form" class="market-card__cta">Request This Market</a>
      </article>

      <article class="market-card" data-status="available">
        <div class="market-card__top">
          <div class="market-card__title">Palm Beach Gardens</div>
          <span class="market-card__badge is-available">Available</span>
        </div>
        <div class="market-card__meta"><span>North PBC</span><span class="market-card__dot"></span><span>Golf corridor</span></div>
        <a href="#lead-form" class="market-card__cta">Request This Market</a>
      </article>

      <article class="market-card" data-status="available">
        <div class="market-card__top">
          <div class="market-card__title">Boynton Beach</div>
          <span class="market-card__badge is-available">Available</span>
        </div>
        <div class="market-card__meta"><span>Growing suburbs</span><span class="market-card__dot"></span><span>Steady traffic</span></div>
        <a href="#lead-form" class="market-card__cta">Request This Market</a>
      </article>

      <article class="market-card" data-status="available">
        <div class="market-card__top">
          <div class="market-card__title">Delray Beach</div>
          <span class="market-card__badge is-available">Available</span>
        </div>
        <div class="market-card__meta"><span>Atlantic Ave</span><span class="market-card__dot"></span><span>Night-to-brunch</span></div>
        <a href="#lead-form" class="market-card__cta">Request This Market</a>
      </article>

      <article class="market-card" data-status="available">
        <div class="market-card__top">
          <div class="market-card__title">Wellington</div>
          <span class="market-card__badge is-available">Available</span>
        </div>
        <div class="market-card__meta"><span>Equestrian hub</span><span class="market-card__dot"></span><span>Seasonal spikes</span></div>
        <a href="#lead-form" class="market-card__cta">Request This Market</a>
      </article>

      <article class="market-card" data-status="available">
        <div class="market-card__top">
          <div class="market-card__title">Lake Worth Beach</div>
          <span class="market-card__badge is-available">Available</span>
        </div>
        <div class="market-card__meta"><span>Historic core</span><span class="market-card__dot"></span><span>Local vibes</span></div>
        <a href="#lead-form" class="market-card__cta">Request This Market</a>
      </article>

      <article class="market-card" data-status="available">
        <div class="market-card__top">
          <div class="market-card__title">Jupiter</div>
          <span class="market-card__badge is-available">Available</span>
        </div>
        <div class="market-card__meta"><span>North Palm</span><span class="market-card__dot"></span><span>High income</span></div>
        <a href="#lead-form" class="market-card__cta">Request This Market</a>
      </article>

      <article class="market-card" data-status="available">
        <div class="market-card__top">
          <div class="market-card__title">Royal Palm Beach</div>
          <span class="market-card__badge is-available">Available</span>
        </div>
        <div class="market-card__meta"><span>Family suburbs</span><span class="market-card__dot"></span><span>Brunch demand</span></div>
        <a href="#lead-form" class="market-card__cta">Request This Market</a>
      </article>

    </div>
  </div>
</section>



  <section id="lead-form" class="form-section" aria-labelledby="formTitle">
    <div class="form-section__container">
      <div class="form-section__left">
        <h2 id="formTitle" class="form-section__heading text-center">Don’t Miss Out on Your Florida Territory</h2>
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
            <div class="form-section__label">Guest Rating from 10,000+ Reviews</div>
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
    <h2 id="faqTitle" class="faq__heading">Florida Franchise FAQ</h2>
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

  <button id="stickyCta" class="sticky-cta">Claim My Territory</button>


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

  // Markets search (combines with status filter)
  (function () {
    const grid = document.getElementById('marketsGrid');
    if (!grid) return;

    const cards    = Array.from(grid.querySelectorAll('.market-card'));
    const controls = Array.from(document.querySelectorAll('.markets__filter'));

    // Optional search elements (works even if you don't have them)
    const input    = document.getElementById('marketsSearch');
    const clearBtn = document.getElementById('marketsSearchClear');
    const countEl  = document.getElementById('marketsCount');

    function normalize(str){
      return (str||'').toString().toLowerCase()
        .normalize('NFD').replace(/[\u0300-\u036f]/g,'') // strip diacritics
        .replace(/[^a-z0-9\s-]/g,'').replace(/\s+/g,' ').trim();
    }

    function activeFilter(){
      const pressed = controls.find(b => b.getAttribute('aria-pressed') === 'true');
      return pressed ? pressed.dataset.filter : 'all';
    }

    function apply(){
      const f = activeFilter();
      const q = input ? normalize(input.value) : '';
      let shown = 0;

      cards.forEach(card => {
        const statusOK = (f === 'all') || (card.dataset.status === f);
        if (!statusOK) { card.style.display = 'none'; return; }

        if (q) {
          const title = normalize(card.querySelector('.market-card__title')?.textContent);
          const meta  = normalize(card.querySelector('.market-card__meta')?.textContent);
          const match = title.includes(q) || meta.includes(q);
          card.style.display = match ? '' : 'none';
          if (match) shown++;
        } else {
          card.style.display = '';
          shown++;
        }
      });

      if (countEl) countEl.textContent = shown + ' markets shown';
    }

    // Event delegation for filter clicks (robust even if DOM changes)
    document.addEventListener('click', (e) => {
      const btn = e.target.closest('.markets__filter');
      if (!btn) return;
      e.preventDefault();
      controls.forEach(b => b.setAttribute('aria-pressed','false'));
      btn.setAttribute('aria-pressed','true');
      apply();
    });

    // Optional search handlers
    if (input) {
      let t; input.addEventListener('input', () => {
        clearTimeout(t); t = setTimeout(apply, 120);
      });
    }
    if (clearBtn) {
      clearBtn.addEventListener('click', () => {
        if (input) { input.value = ''; input.focus(); }
        apply();
      });
    }

    // Initial render
    apply();
  })();

  // steps to ownership
  (function(){
  const section = document.getElementById('steps-to-ownership');
  const fill = document.getElementById('ownStepsFill');
  if(!section || !fill) return;
  const io = new IntersectionObserver((entries)=>{
    entries.forEach(e=>{
      if(e.isIntersecting){
        fill.style.width = '100%';
        io.disconnect();
      }
    });
  },{ threshold:.35 });
  io.observe(section);
})();

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

<?php
get_template_part('templates/exit-intent-modal');
get_footer();
?>