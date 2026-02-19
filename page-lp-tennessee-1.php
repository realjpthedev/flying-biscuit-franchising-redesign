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

    /* svg#tennessee{width:100%;height:auto} */

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

</style>


  <div class="hero">
    <div class="container hero-inner">
      <div>
        <span class="badge" aria-label="Franchise opportunity badge"><span class="dot" aria-hidden="true"></span> Now Awarding Territories in Tennessee</span>
        <h1>Bring <span style="color:var(--brand-secondary)">Flying Biscuit Café</span> to Your Tennessee Market</h1>
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
          <h3 id="map-title" style="margin:0;color:var(--brand-primary)">Tennessee Territories</h3>
          <div class="legend">
            <div class="key"><span class="dot dot-open"></span> In Development</div>
            <div class="key"><span class="dot dot-taken"></span> Taken</div>
          </div>
        </div>

        <!-- Simplified, stylized SVG silhouette of Tennesee (not to scale) -->

          <svg id="tennessee" width="1052.3622" height="425" viewBox="0 0 1052.3622 744.09448" viewBox="0 0 1052.3622 744.09448"
  preserveAspectRatio="xMidYMid meet">
              <title id="title4295">Outline of Tennessee</title>
              <defs>
                <style type="text/css">
                .city-dot { fill: #FF7A00; }
                .city-beacon {
                  fill: none;
                  stroke: #FF7A00;
                  stroke-width: 2;
                  opacity: 0.85;
                  transform-box: fill-box;
                  transform-origin: center;
                  animation: cityPulse 2.2s ease-out infinite;
                }
                @keyframes cityPulse {
                  0%   { transform: scale(0.6); opacity: 0.9; }
                  70%  { transform: scale(2.4); opacity: 0; }
                  100% { transform: scale(2.4); opacity: 0; }
                }

                .city-label {
                    fill: #191919;
                    font-size: 1.25rem;
                    font-family: Arial, sans-serif;
                    dominant-baseline: middle;
                    pointer-events: none;
                }
                
              </style>
              </defs>
              <g ns1:label="Layer 1" ns1:groupmode="layer" id="layer1" transform="translate(0,-308.2677)">
                <path id="path7041" ns2:nodetypes="csssssssssssssssssssssssssssscccsssssscssssscsssssscscsssssssssssscsscscc" style="fill:none;stroke:#000000;stroke-width:5.56308651;stroke-miterlimit:4;stroke-dasharray:none" ns1:connector-curvature="0" d="m 260.05717,798.9248 c -11.72881,-0.72695 -63.4655,-1.91872 -114.97041,-2.64841 -83.01794,-1.17613 -113.485054,-2.59683 -116.312999,-5.42383 -1.714188,-1.71412 1.670798,-8.54789 4.23407,-8.54789 1.453115,0 4.108887,-3.09546 5.901674,-6.87874 2.088704,-4.40763 4.921491,-7.26801 7.885915,-7.96227 6.314069,-1.47903 6.700142,-6.00367 1.034214,-12.11732 -5.57441,-6.01498 -5.590692,-6.10775 -1.800837,-10.29543 2.688468,-2.97068 2.611321,-3.56127 -0.92716,-7.09977 -2.122918,-2.1229 -3.859698,-4.54399 -3.859698,-5.38005 0,-0.83632 3.638285,-4.80007 8.084998,-8.80825 4.44678,-4.0082 8.65958,-9.11532 9.361621,-11.34926 0.888417,-2.82659 3.024895,-4.23609 7.02653,-4.6359 7.908703,-0.79005 10.751791,-5.65951 6.22475,-10.66184 -5.551818,-6.13461 -1.798638,-11.45941 11.209042,-15.90244 8.925169,-3.04858 10.834658,-4.416 10.358087,-7.41746 -1.557971,-9.81219 -1.237683,-11.10189 2.90229,-11.6899 4.839893,-0.68738 4.941833,-1.00713 1.883311,-5.90467 -1.923376,-3.07991 -1.563154,-4.99434 2.254682,-11.98344 2.49915,-4.57489 5.61541,-8.72922 6.92486,-9.23175 3.64646,-1.39928 2.89645,-3.79513 -3.2477,-10.37218 -6.913438,-7.40076 -6.309813,-9.95738 2.52693,-10.70414 7.33518,-0.61985 8.43891,-2.25491 4.00621,-5.93375 -3.1667,-2.62821 -0.61432,-7.39855 3.95871,-7.39855 1.72681,0 2.55458,-2.31015 2.55458,-7.13002 0,-8.58514 5.15697,-14.29158 11.4323,-12.65065 2.27535,0.595 5.01477,0.42157 6.08767,-0.38536 1.07295,-0.80692 25.31578,-0.75434 53.87296,0.11689 28.55716,0.8712 62.77009,1.35772 76.02875,1.08116 l 24.10677,-0.50283 -0.63492,-10.66258 -0.63492,-10.66258 h 13.85205 c 10.05063,0 14.48551,0.76332 16.16035,2.78153 2.03727,2.45463 43.69249,2.78156 354.40571,2.78156 215.43988,0 352.10634,0.66831 352.10634,1.72189 0,0.94706 -1.2582,2.98034 -2.7965,4.51816 -1.8942,1.89442 -3.0381,7.76867 -3.5459,18.21243 -0.4124,8.47888 -0.823,16.04209 -0.9126,16.80702 -0.089,0.76491 -4.1953,1.39078 -9.1242,1.39078 -8.13192,0 -9.48074,0.6462 -14.57132,6.98074 -3.08547,3.83945 -6.15942,8.63762 -6.83128,10.66258 -0.67186,2.02496 -2.75379,5.66841 -4.6267,8.09651 -3.05981,3.96686 -5.16741,4.49683 -20.77251,5.22393 l -17.36635,0.80915 -10.73194,11.00174 c -10.91099,11.18552 -12.14803,11.80858 -19.52081,9.83295 -2.88128,-0.77218 -4.17225,-2.51803 -4.17225,-5.64282 0,-4.22537 -0.25772,-4.3444 -3.89188,-1.7989 -4.20825,2.94769 -9.08874,11.17029 -9.08874,15.31277 0,2.94157 -6.61806,3.50882 -8.34463,0.71519 -2.02422,-3.27535 -4.63456,-1.98157 -4.6771,2.31796 -0.0222,2.29478 -1.67303,6.25848 -3.66754,8.80822 -1.99437,2.54975 -3.64476,5.67899 -3.66753,6.95386 -0.0275,1.56012 -3.28194,2.31796 -9.95275,2.31796 -7.55654,0 -10.70916,0.8812 -13.26793,3.70873 -1.84607,2.03979 -4.92225,3.70871 -6.83599,3.70871 -1.91375,0 -3.95733,1.24536 -4.54149,2.76745 -0.58404,1.52208 -6.80432,6.58502 -13.82304,11.2508 -12.44738,8.2749 -13.07761,8.47053 -25.6551,7.95706 -12.67971,-0.51767 -13.00235,-0.41396 -19.48193,6.25809 -5.20249,5.35691 -8.24332,6.90471 -14.45052,7.35551 -6.93076,0.50335 -8.05641,1.2297 -9.50497,6.13404 -0.90393,3.05973 -2.3199,6.91643 -3.14673,8.57035 -0.82683,1.65392 -0.72317,3.78733 0.23037,4.74081 3.51112,3.5111 -8.00563,11.55085 -18.74581,13.08589 l -10.1428,1.44986 -0.44503,7.4017 c -0.24489,4.07087 -1.42133,11.78263 -2.61413,17.13709 l -2.16911,9.7354 -219.90874,-0.30089 c -120.95074,-0.16539 -229.51441,-0.8956 -241.23398,-1.62255 z" />
              </g>
            <g id="city-markers">
              <g class="city" data-name="Knoxville" transform="translate(763.53,352.52)">
                <circle class="city-beacon" r="10" />
                <circle class="city-dot" r="8.5" />
                <text x="14" y="4" class="city-label">Knoxville</text>
              </g>

              <g class="city" data-name="Murfreesboro" transform="translate(478.07,369.23)">
                <circle class="city-beacon" r="10" />
                <circle class="city-dot" r="8.5" />
                <text x="14" y="4" class="city-label">Murfreesboro</text>
              </g>

              <g class="city" data-name="Collierville" transform="translate(99.61,460.99)">
                <circle class="city-beacon" r="10" />
                <circle class="city-dot" r="8.5" />
                <text x="14" y="4" class="city-label">Collierville</text>
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
    <h2 class="markets__heading">Target Tennessee Markets</h2>

    <p class="markets__sub">
      <strong style="color:#F47B20;">Knoxville, Collierville & Murfreesboro are TAKEN.</strong><br>
      Currently awarding markets listed below.
    </p>

    <div class="markets__controls" role="tablist" aria-label="Filter markets by status">
      <button type="button" class="markets__filter" data-filter="all" aria-pressed="true">All</button>
      <button type="button" class="markets__filter" data-filter="available" aria-pressed="false">Available</button>
      <button type="button" class="markets__filter" data-filter="taken" aria-pressed="false">Taken</button>
    </div>

    <div class="markets__legend">
      <span class="legend-chip"><span class="legend-available"></span>Available</span>
      <span class="legend-chip"><span class="legend-taken"></span>Taken</span>
    </div>

    <!-- Search -->
    <div class="markets__search" role="search" aria-label="Search Tennessee market cards">
      <input
        id="marketsSearch"
        class="markets__search-input"
        type="search"
        placeholder="Search cities (e.g., ‘Memphis’, ‘Chattanooga’)"
        aria-controls="marketsGrid"
        aria-describedby="marketsCount"
      />
      <button id="marketsSearchClear" class="markets__search-clear" type="button">Clear</button>
    </div>
    <div id="marketsCount" class="sr-only" aria-live="polite"></div>

    <div class="markets__grid" id="marketsGrid">

      <!-- TAKEN -->
      <article class="market-card" data-status="taken">
        <div class="market-card__top">
          <div class="market-card__title">Knoxville</div>
          <span class="market-card__badge is-taken">Taken</span>
        </div>
        <div class="market-card__meta">
          <span>East TN hub</span><span class="market-card__dot"></span><span>University & tourism</span>
        </div>
        <a href="#lead-form" class="market-card__cta" aria-disabled="true" style="opacity:.85">Explore Nearby</a>
      </article>

      <article class="market-card" data-status="taken">
        <div class="market-card__top">
          <div class="market-card__title">Murfreesboro</div>
          <span class="market-card__badge is-taken">Taken</span>
        </div>
        <div class="market-card__meta">
          <span>Fast growth</span><span class="market-card__dot"></span><span>Nashville spillover</span>
        </div>
        <a href="#lead-form" class="market-card__cta" aria-disabled="true" style="opacity:.85">Explore Nearby</a>
      </article>

      <article class="market-card" data-status="taken">
        <div class="market-card__top">
          <div class="market-card__title">Collierville</div>
          <span class="market-card__badge is-taken">Taken</span>
        </div>
        <div class="market-card__meta">
          <span>Affluent suburb</span><span class="market-card__dot"></span><span>Daytime demand</span>
        </div>
        <a href="#lead-form" class="market-card__cta" aria-disabled="true" style="opacity:.85">Explore Nearby</a>
      </article>

      <!-- AVAILABLE / OPEN -->
      <article class="market-card" data-status="available">
        <div class="market-card__top">
          <div class="market-card__title">Nashville</div>
          <span class="market-card__badge is-available">Available</span>
        </div>
        <div class="market-card__meta">
          <span>State capital</span><span class="market-card__dot"></span><span>Top-tier visibility</span>
        </div>
        <a href="#lead-form" class="market-card__cta">Request This Market</a>
      </article>

      <article class="market-card" data-status="available">
        <div class="market-card__top">
          <div class="market-card__title">Memphis</div>
          <span class="market-card__badge is-available">Available</span>
        </div>
        <div class="market-card__meta">
          <span>Major metro</span><span class="market-card__dot"></span><span>Regional demand</span>
        </div>
        <a href="#lead-form" class="market-card__cta">Request This Market</a>
      </article>

      <article class="market-card" data-status="available">
        <div class="market-card__top">
          <div class="market-card__title">Chattanooga</div>
          <span class="market-card__badge is-available">Available</span>
        </div>
        <div class="market-card__meta">
          <span>Tourism hub</span><span class="market-card__dot"></span><span>Strong weekend traffic</span>
        </div>
        <a href="#lead-form" class="market-card__cta">Request This Market</a>
      </article>

      <article class="market-card" data-status="available">
        <div class="market-card__top">
          <div class="market-card__title">Clarksville</div>
          <span class="market-card__badge is-available">Available</span>
        </div>
        <div class="market-card__meta">
          <span>Military base</span><span class="market-card__dot"></span><span>Weekday volume</span>
        </div>
        <a href="#lead-form" class="market-card__cta">Request This Market</a>
      </article>

      <article class="market-card" data-status="available">
        <div class="market-card__top">
          <div class="market-card__title">Franklin</div>
          <span class="market-card__badge is-available">Available</span>
        </div>
        <div class="market-card__meta">
          <span>Affluent market</span><span class="market-card__dot"></span><span>Brunch-driven</span>
        </div>
        <a href="#lead-form" class="market-card__cta">Request This Market</a>
      </article>

      <article class="market-card" data-status="available">
        <div class="market-card__top">
          <div class="market-card__title">Hendersonville</div>
          <span class="market-card__badge is-available">Available</span>
        </div>
        <div class="market-card__meta">
          <span>Lake corridor</span><span class="market-card__dot"></span><span>Family density</span>
        </div>
        <a href="#lead-form" class="market-card__cta">Request This Market</a>
      </article>

      <article class="market-card" data-status="available">
        <div class="market-card__top">
          <div class="market-card__title">Jackson</div>
          <span class="market-card__badge is-available">Available</span>
        </div>
        <div class="market-card__meta">
          <span>Regional hub</span><span class="market-card__dot"></span><span>Low competition</span>
        </div>
        <a href="#lead-form" class="market-card__cta">Request This Market</a>
      </article>

      <article class="market-card" data-status="available">
        <div class="market-card__top">
          <div class="market-card__title">Johnson City</div>
          <span class="market-card__badge is-available">Available</span>
        </div>
        <div class="market-card__meta">
          <span>Tri-Cities core</span><span class="market-card__dot"></span><span>Healthcare + college</span>
        </div>
        <a href="#lead-form" class="market-card__cta">Request This Market</a>
      </article>

    </div>
  </div>
</section>




  <section id="lead-form" class="form-section" aria-labelledby="formTitle">
    <div class="form-section__container">
      <div class="form-section__left">
        <h2 id="formTitle" class="form-section__heading text-center">Don’t Miss Out on Your Tennessee Territory</h2>
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
    <h2 id="faqTitle" class="faq__heading">Tennessee Franchise FAQ</h2>
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