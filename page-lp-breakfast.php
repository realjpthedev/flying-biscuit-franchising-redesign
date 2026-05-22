<?php
/**
 * Template Name: Breakfast & Brunch Franchise LP
 *
 * Built on the same theme codebase as lp-multi-unit-1 for visual parity.
 * Retargeted copy for single-unit / first-time franchise buyers (the
 * broad "breakfast / brunch franchise" Google Ads ad group).
 *
 * NO custom conversion script: GTM autoloads via wp_head()/wp_footer()
 * and handles Google Ads conversion tracking on its own.
 *
 * Deploy: upload to the active (child) theme, create a Page, then pick
 * "Breakfast & Brunch Franchise LP" under Page Attributes → Template.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta name="robots" content="noindex">
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?></title>
    <?php wp_head(); ?>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Outfit:wght@300;600;700&display=swap" rel="stylesheet">

<!-- Preload critical above-the-fold image -->
<link rel="preload" as="image" href="<?php echo get_theme_file_uri('/assets/img/thumbnails/franchisees/meet-our-franchisees.webp'); ?>" fetchpriority="high">
<style>
*, *::before, *::after { margin: 0; padding: 0; box-sizing: border-box; }
 
:root {
  --purple: #6A2C91;
  --purple-dark: #4A1D66;
  --purple-light: #8B4DB5;
  --orange: #F47B20;
  --orange-light: #FF9A4D;
  --gold: #EEB211;
  --gold-light: #F5C842;
  --cream: #FFF9F0;
  --warm-white: #FFFDF8;
  --charcoal: #1A1A1A;
  --dark-gray: #2D2D2D;
  --mid-gray: #6B6B6B;
  --light-gray: #E8E4DF;
  --font-display: 'DM Serif Display', Georgia, serif;
  --font-body: 'Outfit', sans-serif;
}
 
html { scroll-behavior: smooth; }

::selection { background: var(--purple); color: white; }
::-moz-selection { background: var(--purple); color: white; }
 
body {
  font-family: var(--font-body);
  color: var(--charcoal);
  background: var(--warm-white);
  overflow-x: hidden;
  -webkit-font-smoothing: antialiased;
}
 
/* ── Utility ── */
.container { max-width: 1200px; margin: 0 auto; padding: 0 40px; }
.container-narrow { max-width: 900px; margin: 0 auto; padding: 0 40px; }
 
/* ── Navigation ── */
nav {
  position: fixed; top: 0; left: 0; right: 0; z-index: 100;
  background: rgba(255, 253, 248, 0.92);
  backdrop-filter: blur(20px);
  border-bottom: 1px solid rgba(106, 44, 145, 0.08);
  transition: all 0.4s ease;
}
nav.scrolled { background: rgba(255, 253, 248, 0.97); box-shadow: 0 2px 40px rgba(106, 44, 145, 0.06); }
nav .nav-inner {
  max-width: 1200px; margin: 0 auto; padding: 0 40px;
  display: flex; align-items: center; justify-content: space-between;
  height: 104px;
}
nav .nav-logo { display: flex; align-items: center; text-decoration: none; }
nav .nav-logo img { height: 72px; width: auto; display: block; }
nav .nav-cta {
  background: var(--purple); color: white; padding: 10px 28px;
  border-radius: 6px; text-decoration: none; font-weight: 600;
  font-size: 0.875rem; letter-spacing: 0.02em; transition: all 0.3s ease;
}
nav .nav-cta:hover { background: var(--purple-dark); transform: translateY(-1px); }
 
/* ── Full-Width Breakout ── */
.hero, .stats-bar, .press-bar, .photo-strip-section,
.form-section, .section, footer {
  width: 100vw; position: relative; left: 50%; right: 50%;
  margin-left: -50vw; margin-right: -50vw;
}

/* ── Hero ── */
.hero { display: flex; align-items: center; position: relative; overflow: hidden; background: var(--charcoal); color: white; }
.hero::before {
  content: ''; position: absolute; inset: 0;
  background:
    radial-gradient(ellipse 60% 50% at 85% 40%, rgba(106, 44, 145, 0.2) 0%, transparent 70%),
    radial-gradient(ellipse 50% 50% at 20% 80%, rgba(244, 123, 32, 0.1) 0%, transparent 60%);
}
.hero::after {
  content: ''; position: absolute; top: -50%; right: -20%;
  width: 800px; height: 800px; border-radius: 50%;
  border: 1px solid rgba(238, 178, 17, 0.08);
  animation: hero-ring 25s linear infinite;
}
@keyframes hero-ring { from { transform: rotate(0deg); } to { transform: rotate(360deg); } }
 
.hero-content {
  position: relative; z-index: 2; max-width: 1200px; margin: 0 auto;
  padding: 140px 40px 80px; width: 100%; display: grid;
  grid-template-columns: 1.1fr 1fr; gap: 48px; align-items: start;
}
.hero-left { min-width: 0; }
.hero-eyebrow {
  display: inline-flex; align-items: center; gap: 10px;
  font-size: 0.8rem; font-weight: 600; letter-spacing: 0.15em;
  text-transform: uppercase; color: var(--gold); margin-bottom: 32px;
  opacity: 0; animation: fadeUp 0.8s ease 0.2s forwards;
}
.hero-eyebrow::before { content: ''; width: 32px; height: 1px; background: var(--gold); }
.hero h1 {
  font-family: var(--font-display);
  font-size: clamp(2.6rem, 4.5vw, 4.4rem);
  line-height: 1.05; letter-spacing: -0.03em; margin-bottom: 28px;
  opacity: 0; animation: fadeUp 0.8s ease 0.4s forwards; color: #a03edc;
}
.hero h1 em { font-style: italic; color: var(--orange); }
.hero-sub {
  font-size: 1.1rem; line-height: 1.7; color: rgba(255,255,255,0.72);
  font-weight: 300; margin-bottom: 0;
  opacity: 0; animation: fadeUp 0.8s ease 0.6s forwards;
}
.hero-video { margin-top: 32px; opacity: 0; animation: fadeUp 1s ease 0.5s forwards; }
.hero-video-card {
  border-radius: 14px; overflow: hidden; background: rgba(255,255,255,0.04);
  border: 1px solid rgba(255,255,255,0.1); cursor: pointer;
  transition: all 0.4s ease; box-shadow: 0 24px 80px rgba(0,0,0,0.4);
}
.hero-video-card:hover { transform: translateY(-4px); border-color: rgba(244, 123, 32, 0.4); box-shadow: 0 32px 100px rgba(244, 123, 32, 0.15); }
.hero-video-card .video-thumb { aspect-ratio: 16/9; background-size: cover; background-position: center; position: relative; display: flex; align-items: center; justify-content: center; }
.hero-video-card .video-thumb::before { content: ''; position: absolute; inset: 0; background: linear-gradient(180deg, rgba(0,0,0,0.1) 0%, rgba(0,0,0,0.4) 100%); transition: background 0.3s ease; }
.hero-video-card:hover .video-thumb::before { background: linear-gradient(180deg, rgba(106, 44, 145, 0.2) 0%, rgba(0,0,0,0.35) 100%); }
.hero-video-card .play-btn {
  width: 72px; height: 72px; border-radius: 50%;
  background: rgba(255,255,255,0.18); backdrop-filter: blur(12px);
  display: flex; align-items: center; justify-content: center;
  position: relative; z-index: 2; transition: all 0.3s ease;
  border: 1px solid rgba(255,255,255,0.25);
}
.hero-video-card:hover .play-btn { background: var(--orange); border-color: var(--orange); transform: scale(1.1); }
.hero-video-card .play-btn svg { margin-left: 4px; }
.hero-video-caption { display: flex; justify-content: center; align-items: center; padding: 16px 22px; background: rgba(0,0,0,0.3); border-top: 1px solid rgba(255,255,255,0.06); }
.hero-video-label { font-size: 0.85rem; font-weight: 600; color: white; letter-spacing: 0.04em; }
.hero-form { opacity: 0; animation: fadeUp 1s ease 0.6s forwards; }
.hero-form-card { background: white; border-radius: 16px; overflow: hidden; box-shadow: 0 24px 80px rgba(0, 0, 0, 0.4); border: 3px solid var(--orange); }
.hero-form-header { text-align: center; padding: 32px 28px 16px; }
.hero-form-photo { width: 72px; height: 72px; border-radius: 50%; overflow: hidden; margin: 0 auto 16px; border: 3px solid var(--purple); }
.hero-form-photo img { width: 100%; height: 100%; object-fit: cover; display: block; }
.hero-form-card h3 { font-family: var(--font-display); font-size: 1.5rem; color: var(--charcoal); margin-bottom: 4px; }
.hero-form-role { font-size: 0.8rem; font-weight: 700; letter-spacing: 0.06em; color: var(--orange); margin-bottom: 12px; }
.hero-form-intro { font-size: 0.9rem; line-height: 1.5; color: var(--mid-gray); font-weight: 300; }
.hero-form-card .wpforms-container { padding: 0 28px 28px; }
.btn-primary {
  display: inline-flex; align-items: center; gap: 8px;
  background: var(--orange); color: white; padding: 16px 36px;
  border-radius: 6px; text-decoration: none; font-weight: 600;
  font-size: 1rem; letter-spacing: 0.01em; transition: all 0.3s ease;
  border: none; cursor: pointer;
}
.btn-primary:hover { background: var(--orange-light); transform: translateY(-2px); box-shadow: 0 8px 30px rgba(244, 123, 32, 0.3); }
.btn-secondary {
  display: inline-flex; align-items: center; gap: 8px;
  background: transparent; color: white; padding: 16px 36px;
  border-radius: 6px; text-decoration: none; font-weight: 600;
  font-size: 1rem; border: 1px solid rgba(255,255,255,0.25);
  transition: all 0.3s ease; cursor: pointer;
}
.btn-secondary:hover { border-color: rgba(255,255,255,0.5); background: rgba(255,255,255,0.05); }
 
@keyframes fadeUp { from { opacity: 0; transform: translateY(24px); } to { opacity: 1; transform: translateY(0); } }
 
/* ── Stats Bar ── */
.stats-bar { background: var(--purple); padding: 0; position: relative; overflow: hidden; }
.stats-bar::before { content: ''; position: absolute; inset: 0; background: linear-gradient(135deg, rgba(255,255,255,0.03) 0%, transparent 50%, rgba(238,178,17,0.05) 100%); }
.stats-inner { max-width: 1200px; margin: 0 auto; display: grid; grid-template-columns: repeat(6, 1fr); position: relative; }
.stat-item { padding: 36px 20px; text-align: center; border-right: 1px solid rgba(255,255,255,0.08); transition: background 0.3s ease; }
.stat-item:last-child { border-right: none; }
.stat-item:hover { background: rgba(255,255,255,0.04); }
.stat-number { font-family: var(--font-display); font-size: 1.75rem; color: var(--gold); margin-bottom: 6px; }
.stat-label { font-size: 0.75rem; color: rgba(255,255,255,0.6); font-weight: 600; letter-spacing: 0.06em; text-transform: uppercase; line-height: 1.4; }
 
/* ── Section Styles ── */
.section { padding: 120px 0; }
.section-dark { background: var(--charcoal); color: white; }
.section-purple { background: var(--purple); color: white; }
.section-cream { background: var(--cream); }
.section-eyebrow { font-size: 0.75rem; font-weight: 700; letter-spacing: 0.18em; text-transform: uppercase; color: var(--orange); margin-bottom: 16px; }
.section-dark .section-eyebrow, .section-purple .section-eyebrow { color: var(--gold); }
.section-title { font-family: var(--font-display); font-size: clamp(2.2rem, 4vw, 3.2rem); line-height: 1.15; letter-spacing: -0.025em; margin-bottom: 20px; }
.section-title em { font-style: italic; color: var(--orange); }
.section-dark .section-title em { color: var(--orange); }
.section-subtitle { font-size: 1.15rem; line-height: 1.7; color: var(--mid-gray); max-width: 640px; font-weight: 300; }
.section-dark .section-subtitle { color: rgba(255,255,255,0.6); }
.section-purple .section-subtitle { color: rgba(255,255,255,0.7); }
 
/* ── Why Now Section ── */
.why-now-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 80px; align-items: start; margin-top: 64px; }
.why-now-text p { font-size: 1.1rem; line-height: 1.8; color: var(--dark-gray); margin-bottom: 24px; font-weight: 300; }
.why-now-text p strong { font-weight: 600; color: var(--charcoal); }
.why-now-highlights { display: flex; flex-direction: column; gap: 24px; }
.highlight-card { background: white; border-radius: 12px; padding: 32px; border: 1px solid var(--light-gray); transition: all 0.4s ease; position: relative; overflow: hidden; }
.highlight-card::before { content: ''; position: absolute; top: 0; left: 0; width: 4px; height: 100%; background: var(--purple); border-radius: 4px 0 0 4px; transform: scaleY(0); transition: transform 0.4s ease; }
.highlight-card:hover { border-color: var(--purple-light); transform: translateX(4px); box-shadow: 0 8px 40px rgba(106, 44, 145, 0.08); }
.highlight-card:hover::before { transform: scaleY(1); }
.highlight-card h4 { font-family: var(--font-display); font-size: 1.2rem; margin-bottom: 8px; color: var(--purple); }
.highlight-card p { font-size: 0.95rem; line-height: 1.65; color: var(--mid-gray); font-weight: 300; }
 
/* ── Model Section ── */
.model-features { display: grid; grid-template-columns: repeat(2, 1fr); gap: 32px; margin-top: 64px; }
.model-feature { padding: 40px; background: rgba(255,255,255,0.04); border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; transition: all 0.4s ease; }
.model-feature:hover { background: rgba(255,255,255,0.07); border-color: rgba(238, 178, 17, 0.2); transform: translateY(-4px); }
.model-feature-icon { width: 48px; height: 48px; background: rgba(238, 178, 17, 0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px; }
.model-feature h4 { font-family: var(--font-display); font-size: 1.2rem; margin-bottom: 10px; color: white; }
.model-feature p { font-size: 0.95rem; line-height: 1.7; color: rgba(255,255,255,0.6); font-weight: 300; }
 
/* ── Brand / Legacy Section ── */
.legacy-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 80px; align-items: center; margin-top: 64px; margin-bottom: 64px; }
.legacy-text p { font-size: 1.1rem; line-height: 1.8; color: var(--dark-gray); margin-bottom: 24px; font-weight: 300; }
.legacy-text p strong { font-weight: 600; color: var(--charcoal); }
.legacy-origin { display: flex; flex-direction: column; align-items: center; }
.legacy-origin-frame { width: 100%; max-width: 480px; border-radius: 4px; overflow: hidden; background: white; padding: 16px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.04), 0 20px 60px rgba(106, 44, 145, 0.12), 0 30px 80px rgba(0, 0, 0, 0.06); transform: rotate(-1.5deg); transition: transform 0.5s cubic-bezier(0.16, 1, 0.3, 1); }
.legacy-origin-frame:hover { transform: rotate(0deg) translateY(-4px); }
.legacy-origin-frame img { width: 100%; height: auto; display: block; border-radius: 2px; }
.legacy-origin-caption { margin-top: 28px; font-size: 0.78rem; font-weight: 600; letter-spacing: 0.12em; text-transform: uppercase; color: var(--mid-gray); text-align: center; font-style: italic; }
.legacy-stats { display: grid; grid-template-columns: repeat(4, 1fr); gap: 24px; }
.legacy-stat { background: var(--purple); border-radius: 12px; padding: 32px; text-align: center; transition: transform 0.3s ease; }
.legacy-stat:hover { transform: scale(1.03); }
.legacy-stat .number { font-family: var(--font-display); font-size: 2.2rem; color: var(--gold); margin-bottom: 4px; }
.legacy-stat .label { font-size: 0.8rem; color: rgba(255,255,255,0.65); font-weight: 600; text-transform: uppercase; letter-spacing: 0.08em; }
 
/* ── Competitive Differentiation ── */
.differentiators { margin-top: 64px; display: flex; flex-direction: column; gap: 0; }
.diff-item { display: grid; grid-template-columns: 48px 1fr; gap: 28px; align-items: start; padding: 36px 0; border-bottom: 1px solid var(--light-gray); }
.diff-item:last-child { border-bottom: none; }
.diff-number { font-family: var(--font-display); font-size: 1.5rem; color: var(--purple-light); opacity: 0.5; }
.diff-item h4 { font-family: var(--font-display); font-size: 1.2rem; margin-bottom: 8px; color: var(--charcoal); }
.diff-item p { font-size: 1rem; line-height: 1.75; color: var(--mid-gray); font-weight: 300; }
 
/* ── Territory Map ── */
.territory-section { position: relative; }
.territory-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 80px; align-items: start; margin-top: 64px; }
.priority-markets { display: grid; grid-template-columns: repeat(2, 1fr); gap: 24px; margin-top: 64px; margin-bottom: 96px; }
.priority-card { position: relative; background: linear-gradient(135deg, rgba(255,255,255,0.04) 0%, rgba(255,255,255,0.01) 100%); border: 1px solid rgba(238, 178, 17, 0.15); border-radius: 14px; padding: 36px; transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1); overflow: hidden; }
.priority-card::before { content: ''; position: absolute; top: 0; left: 0; width: 4px; height: 100%; background: linear-gradient(180deg, var(--orange), var(--gold)); transform: scaleY(0); transform-origin: top; transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1); }
.priority-card:hover { border-color: rgba(238, 178, 17, 0.4); background: linear-gradient(135deg, rgba(255,255,255,0.06) 0%, rgba(255,255,255,0.02) 100%); transform: translateY(-4px); box-shadow: 0 24px 60px rgba(0, 0, 0, 0.3); }
.priority-card:hover::before { transform: scaleY(1); }
.priority-card-state { font-family: var(--font-display); font-size: 1.6rem; color: white; margin-bottom: 12px; letter-spacing: -0.01em; }
.priority-card-tagline { font-size: 0.95rem; line-height: 1.6; color: var(--gold); margin-bottom: 20px; font-style: italic; }
.priority-card-cities { font-size: 0.9rem; line-height: 1.7; color: rgba(255, 255, 255, 0.7); font-weight: 300; margin-bottom: 20px; }
.priority-card-meta { display: flex; gap: 16px; padding-top: 18px; border-top: 1px solid rgba(255, 255, 255, 0.08); }
.priority-card-units { font-size: 0.7rem; font-weight: 700; letter-spacing: 0.14em; text-transform: uppercase; color: var(--orange); }

/* ── Investment Section ── */
.investment-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 48px; margin-top: 64px; }
.invest-card { background: white; border-radius: 12px; padding: 40px; border: 1px solid var(--light-gray); display: flex; flex-direction: column; gap: 8px; }
.invest-card .label { font-size: 0.75rem; text-transform: uppercase; letter-spacing: 0.12em; color: var(--mid-gray); font-weight: 600; }
.invest-card .value { font-family: var(--font-display); font-size: 1.75rem; color: var(--purple); }
.invest-card .note { font-size: 0.9rem; color: var(--mid-gray); font-weight: 300; line-height: 1.5; }
.invest-footnote { margin-top: 40px; font-size: 0.9rem; color: var(--mid-gray); font-weight: 300; line-height: 1.7; font-style: italic; }
 
/* ── Reassurance Tiers ── */
.tiers { display: grid; grid-template-columns: repeat(3, 1fr); gap: 28px; margin-top: 64px; }
.tier-card { background: rgba(255,255,255,0.04); border: 1px solid rgba(255,255,255,0.1); border-radius: 16px; padding: 44px 36px; transition: all 0.4s ease; position: relative; overflow: hidden; }
.tier-card::after { content: ''; position: absolute; bottom: 0; left: 0; right: 0; height: 3px; background: linear-gradient(90deg, var(--orange), var(--gold)); transform: scaleX(0); transition: transform 0.4s ease; }
.tier-card:hover { background: rgba(255,255,255,0.07); transform: translateY(-4px); }
.tier-card:hover::after { transform: scaleX(1); }
.tier-card h4 { font-family: var(--font-display); font-size: 1.25rem; color: var(--gold); margin-bottom: 16px; }
.tier-card p { font-size: 0.95rem; line-height: 1.75; color: rgba(255,255,255,0.6); font-weight: 300; }
 
/* ── Leadership ── */
.team-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 36px; margin-top: 64px; }
.team-card { text-align: center; }
.team-photo { width: 180px; height: 180px; border-radius: 50%; background: linear-gradient(135deg, var(--purple-light) 0%, var(--purple-dark) 100%); margin: 0 auto 24px; display: flex; align-items: center; justify-content: center; font-family: var(--font-display); font-size: 2.5rem; color: rgba(255,255,255,0.3); position: relative; overflow: hidden; }
.team-photo img { width: 100%; height: 100%; object-fit: cover; }
.team-photo::after { content: ''; position: absolute; inset: 0; border-radius: 50%; border: 2px solid rgba(238, 178, 17, 0.2); transition: border-color 0.3s ease; }
.team-card:hover .team-photo::after { border-color: var(--gold); }
.team-card h4 { font-family: var(--font-display); font-size: 1.15rem; margin-bottom: 4px; }
.team-card .role { font-size: 0.85rem; color: var(--orange); font-weight: 600; letter-spacing: 0.04em; margin-bottom: 12px; }
.team-card p { font-size: 0.9rem; line-height: 1.7; color: var(--mid-gray); font-weight: 300; max-width: 300px; margin: 0 auto; }
 
/* ── Video Wall ── */
.video-wall { display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; margin-top: 64px; }
.video-card { border-radius: 12px; overflow: hidden; background: rgba(255,255,255,0.04); border: 1px solid rgba(255,255,255,0.08); transition: all 0.4s ease; cursor: pointer; }
.video-card:hover { transform: translateY(-6px); border-color: rgba(244, 123, 32, 0.3); box-shadow: 0 20px 60px rgba(0,0,0,0.3); }
.video-thumb { aspect-ratio: 16/9; background: linear-gradient(135deg, var(--purple-dark) 0%, var(--charcoal) 100%); background-size: cover; background-position: center; position: relative; display: flex; align-items: center; justify-content: center; overflow: hidden; }
.video-thumb::before { content: ''; position: absolute; inset: 0; background: rgba(0,0,0,0.2); transition: background 0.3s ease; }
.video-card:hover .video-thumb::before { background: rgba(106, 44, 145, 0.3); }
.play-btn { width: 56px; height: 56px; border-radius: 50%; background: rgba(255,255,255,0.15); backdrop-filter: blur(10px); display: flex; align-items: center; justify-content: center; position: relative; z-index: 2; transition: all 0.3s ease; border: 1px solid rgba(255,255,255,0.2); }
.video-card:hover .play-btn { background: var(--orange); border-color: var(--orange); transform: scale(1.1); }
.play-btn svg { fill: white; margin-left: 3px; }
.video-info { padding: 20px 24px; }
.video-info h4 { font-family: var(--font-display); font-size: 1.05rem; color: white; margin-bottom: 2px; }
.video-info .meta { font-size: 0.8rem; color: var(--gold); font-weight: 600; letter-spacing: 0.04em; margin-bottom: 8px; }
.video-info .teaser { font-size: 0.9rem; color: rgba(255,255,255,0.55); font-weight: 300; font-style: italic; line-height: 1.5; }
 
/* ── Support Infrastructure ── */
.support-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 28px; margin-top: 64px; }
.support-card { padding: 36px; border-radius: 12px; background: white; border: 1px solid var(--light-gray); transition: all 0.4s ease; }
.support-card:hover { border-color: var(--purple-light); box-shadow: 0 12px 40px rgba(106, 44, 145, 0.08); transform: translateY(-3px); }
.support-icon { width: 44px; height: 44px; border-radius: 10px; background: linear-gradient(135deg, var(--purple) 0%, var(--purple-light) 100%); display: flex; align-items: center; justify-content: center; margin-bottom: 20px; }
.support-card h4 { font-family: var(--font-display); font-size: 1.1rem; margin-bottom: 10px; color: var(--charcoal); }
.support-card p { font-size: 0.9rem; line-height: 1.7; color: var(--mid-gray); font-weight: 300; }
 
/* ── Fit Section ── */
.fit-list { margin-top: 48px; display: flex; flex-direction: column; gap: 0; }
.fit-item { display: flex; gap: 20px; align-items: start; padding: 28px 0; border-bottom: 1px solid rgba(255,255,255,0.08); }
.fit-item:last-child { border-bottom: none; }
.fit-check { width: 28px; height: 28px; border-radius: 50%; background: rgba(238, 178, 17, 0.12); display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 2px; color: var(--gold); font-size: 0.8rem; font-weight: 700; }
.fit-item p { font-size: 1.05rem; line-height: 1.7; color: rgba(255,255,255,0.75); font-weight: 300; }
.fit-item p strong { color: white; font-weight: 600; }
 
/* ── Process ── */
.process-steps { display: grid; grid-template-columns: repeat(5, 1fr); gap: 0; margin-top: 64px; position: relative; }
.process-steps::before { content: ''; position: absolute; top: 32px; left: 10%; right: 10%; height: 2px; background: linear-gradient(90deg, var(--purple-light), var(--orange), var(--gold)); opacity: 0.3; }
.step { text-align: center; position: relative; padding: 0 12px; }
.step-number { width: 64px; height: 64px; border-radius: 50%; background: var(--purple); display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; font-family: var(--font-display); font-size: 1.3rem; color: var(--gold); position: relative; z-index: 2; border: 3px solid var(--cream); }
.step h4 { font-family: var(--font-display); font-size: 1rem; margin-bottom: 8px; }
.step p { font-size: 0.85rem; line-height: 1.6; color: var(--mid-gray); font-weight: 300; }
 
/* ── Press Bar ── */
.press-bar { padding: 48px 0; background: var(--dark-gray); position: relative; }
.press-bar::before { content: ''; position: absolute; inset: 0; background: linear-gradient(135deg, rgba(106, 44, 145, 0.06) 0%, transparent 50%, rgba(238, 178, 17, 0.04) 100%); }
.press-inner { max-width: 1200px; margin: 0 auto; padding: 0 40px; text-align: center; position: relative; }
.press-label { font-size: 0.7rem; font-weight: 700; letter-spacing: 0.2em; text-transform: uppercase; color: rgba(255,255,255,0.35); margin-bottom: 28px; }
.press-logos { display: flex; justify-content: center; align-items: center; gap: 48px; flex-wrap: wrap; }
.press-logo-img { height: 24px; width: auto; opacity: 0.5; filter: brightness(0) invert(1); transition: opacity 0.3s ease; }
.press-logo-img.press-logo-tall { height: 32px; }
.press-logo-img:hover { opacity: 0.85; }
@media (max-width: 768px) { .press-logos { gap: 32px; } .press-logo-img { height: 20px; } .press-logo-img.press-logo-tall { height: 26px; } }
 
/* ── Video Lightbox Modal ── */
.video-modal { display: none; position: fixed; inset: 0; z-index: 9999; align-items: center; justify-content: center; }
.video-modal.active { display: flex; }
.video-modal-backdrop { position: absolute; inset: 0; background: rgba(0, 0, 0, 0.85); backdrop-filter: blur(8px); animation: modalFadeIn 0.3s ease; }
.video-modal-content { position: relative; width: 90%; max-width: 960px; z-index: 2; animation: modalSlideUp 0.4s cubic-bezier(0.16, 1, 0.3, 1); }
.video-modal-close { position: absolute; top: -48px; right: 0; width: 40px; height: 40px; border: none; background: rgba(255,255,255,0.1); color: white; font-size: 1.5rem; border-radius: 50%; cursor: pointer; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease; line-height: 1; }
.video-modal-close:hover { background: rgba(255,255,255,0.2); transform: scale(1.1); }
.video-modal-player { position: relative; padding-bottom: 56.25%; height: 0; border-radius: 12px; overflow: hidden; background: #000; box-shadow: 0 24px 80px rgba(0,0,0,0.5); }
.video-modal-player iframe { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }
@keyframes modalFadeIn { from { opacity: 0; } to { opacity: 1; } }
@keyframes modalSlideUp { from { opacity: 0; transform: translateY(24px) scale(0.96); } to { opacity: 1; transform: translateY(0) scale(1); } }

/* ── Brand Atmosphere Layer ── */
.section-dark { position: relative; overflow: hidden; }
.section-dark > .container, .section-dark > .container-narrow { position: relative; z-index: 2; }
.section-dark::before { content: ''; position: absolute; inset: 0; background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 300 300' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='3' seed='7' stitchTiles='stitch'/%3E%3CfeColorMatrix values='0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.9 0'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)'/%3E%3C/svg%3E"); background-size: 220px 220px; opacity: 0.12; pointer-events: none; mix-blend-mode: screen; z-index: 1; }
.section-cream { position: relative; overflow: hidden; }
.section-cream > .container, .section-cream > .container-narrow { position: relative; z-index: 2; }
.section-cream::before { content: ''; position: absolute; inset: 0; background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 300 300' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='3' seed='3' stitchTiles='stitch'/%3E%3CfeColorMatrix values='0 0 0 0 0.3 0 0 0 0 0.18 0 0 0 0 0.04 0 0 0 1 0'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)'/%3E%3C/svg%3E"); background-size: 240px 240px; opacity: 0.18; pointer-events: none; mix-blend-mode: multiply; z-index: 1; }
.section-bg-photo { background-image: linear-gradient(135deg, rgba(26, 26, 26, 0.92) 0%, rgba(26, 26, 26, 0.88) 50%, rgba(26, 26, 26, 0.94) 100%), url('<?php echo get_theme_file_uri('/assets/img/brand-strip/model-background.jpg'); ?>'); background-size: cover; background-position: center; }
.section-bg-watermark { position: absolute; top: -120px; right: -180px; width: 700px; height: 700px; background-image: url('<?php echo get_theme_file_uri('/assets/img/fb-logo-cherub-white.svg'); ?>'); background-repeat: no-repeat; background-position: center; background-size: contain; opacity: 0.05; pointer-events: none; z-index: 0; transform: rotate(-12deg); }
.territory-section .section-bg-watermark { top: auto; bottom: -120px; right: auto; left: -180px; transform: rotate(8deg); }

/* ── Edge-to-Edge Photo Strip ── */
.photo-strip-section { background: var(--cream); padding: 0; position: relative; }
.photo-strip { display: grid; grid-template-columns: repeat(4, 1fr); gap: 0; width: 100%; }
.photo-strip-img { aspect-ratio: 4/5; background-size: cover; background-position: center; background-color: var(--purple-dark); position: relative; transition: all 0.6s cubic-bezier(0.16, 1, 0.3, 1); }
.photo-strip-img::after { content: ''; position: absolute; inset: 0; background: linear-gradient(180deg, transparent 50%, rgba(0, 0, 0, 0.3) 100%); transition: background 0.4s ease; }
.photo-strip-img:hover::after { background: linear-gradient(180deg, rgba(106, 44, 145, 0.1) 0%, rgba(0, 0, 0, 0.15) 100%); }

/* ── Competitive Diff with Image ── */
.diff-item-with-image { grid-template-columns: 48px 1fr 200px; gap: 28px; align-items: center; }
.diff-image { width: 200px; height: 200px; border-radius: 12px; overflow: hidden; box-shadow: 0 12px 40px rgba(106, 44, 145, 0.12); border: 1px solid var(--light-gray); }
.diff-image img { width: 100%; height: 100%; object-fit: cover; display: block; transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1); }
.diff-item-with-image:hover .diff-image img { transform: scale(1.05); }

/* ── Menu Section: Asymmetric Mosaic ── */
.menu-section .section-subtitle { text-align: center; }
.menu-mosaic { display: grid; grid-template-columns: 1.5fr 1fr; grid-template-rows: 200px 200px 200px; gap: 16px; margin-top: 64px; }
.menu-tile { position: relative; border-radius: 12px; overflow: hidden; background-size: cover; background-position: center; background-color: var(--purple-dark); cursor: default; transition: all 0.5s cubic-bezier(0.16, 1, 0.3, 1); box-shadow: 0 8px 30px rgba(0, 0, 0, 0.06); }
.menu-tile:hover { transform: translateY(-4px); box-shadow: 0 24px 60px rgba(106, 44, 145, 0.18); }
.menu-tile-feature { grid-column: 1 / 2; grid-row: 1 / 4; }
.menu-tile-tall { grid-column: 2 / 3; grid-row: 1 / 2; }
.menu-tile-wide { grid-column: 2 / 3; grid-row: 2 / 3; }
.menu-tile-small { grid-column: 2 / 3; grid-row: 3 / 4; }
.menu-tile::before { content: ''; position: absolute; inset: 0; background: linear-gradient(180deg, transparent 30%, rgba(0, 0, 0, 0.85) 100%); transition: background 0.4s ease; z-index: 1; }
.menu-tile:hover::before { background: linear-gradient(180deg, rgba(106, 44, 145, 0.1) 0%, rgba(0, 0, 0, 0.9) 100%); }
.menu-tile-overlay { position: absolute; bottom: 0; left: 0; right: 0; padding: 28px; z-index: 2; color: white; }
.menu-tile-eyebrow { font-size: 0.65rem; font-weight: 700; letter-spacing: 0.18em; text-transform: uppercase; color: var(--gold); margin-bottom: 8px; }
.menu-tile h4 { font-family: var(--font-display); font-size: 1.4rem; color: white; margin-bottom: 8px; line-height: 1.15; }
.menu-tile-feature h4 { font-size: 1.75rem; }
.menu-tile p { font-size: 0.88rem; line-height: 1.55; color: rgba(255, 255, 255, 0.85); font-weight: 300; max-width: 420px; }
.menu-tile-small h4 { font-size: 1.15rem; }

/* ── See It Sizzle - Portrait Videos ── */
.sizzle-row { margin-top: 80px; }
.sizzle-row-intro { text-align: center; margin-bottom: 32px; }
.sizzle-row-intro span { font-family: var(--font-body); font-size: 0.72rem; font-weight: 700; letter-spacing: 0.22em; text-transform: uppercase; color: var(--purple); }
.sizzle-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 16px; }
.sizzle-card { border-radius: 12px; overflow: hidden; background: var(--charcoal); border: 1px solid var(--light-gray); transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1); cursor: pointer; }
.sizzle-card:hover { transform: translateY(-4px); box-shadow: 0 20px 50px rgba(106, 44, 145, 0.18); border-color: var(--purple-light); }
.sizzle-thumb { aspect-ratio: 9/16; background-size: cover; background-position: center; position: relative; display: flex; align-items: center; justify-content: center; }
.sizzle-thumb::before { content: ''; position: absolute; inset: 0; background: linear-gradient(180deg, rgba(0,0,0,0.05) 0%, rgba(0,0,0,0.35) 100%); transition: background 0.3s ease; }
.sizzle-card:hover .sizzle-thumb::before { background: linear-gradient(180deg, rgba(106, 44, 145, 0.15) 0%, rgba(0,0,0,0.4) 100%); }
.sizzle-card .play-btn { width: 60px; height: 60px; position: relative; z-index: 2; background: rgba(255, 255, 255, 0.18); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.25); border-radius: 50%; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease; }
.sizzle-card:hover .play-btn { background: var(--orange); border-color: var(--orange); transform: scale(1.1); }
.sizzle-card .play-btn svg { margin-left: 3px; }
.sizzle-thumb iframe { position: absolute; inset: 0; width: 100%; height: 100%; border: none; z-index: 3; }
.sizzle-card.playing { cursor: default; }
.sizzle-card.playing:hover { transform: none; }
.sizzle-card.playing .sizzle-thumb::before { display: none; }

/* ── The Business Case ── */
.business-case { margin-top: 96px; padding-top: 64px; border-top: 1px solid var(--light-gray); }
.business-case-header { text-align: center; max-width: 720px; margin: 0 auto 56px; }
.business-case-title { font-family: var(--font-display); font-size: clamp(1.8rem, 3vw, 2.4rem); line-height: 1.2; letter-spacing: -0.02em; color: var(--charcoal); margin-bottom: 16px; }
.business-case-title em { font-style: italic; color: var(--orange); }
.business-case-sub { font-size: 1.05rem; line-height: 1.65; color: var(--mid-gray); font-weight: 300; }
.business-case-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 24px; }
.business-card { background: var(--cream); border-radius: 12px; padding: 32px 28px; border: 1px solid var(--light-gray); transition: all 0.4s ease; }
.business-card:hover { border-color: var(--orange); transform: translateY(-3px); box-shadow: 0 16px 40px rgba(244, 123, 32, 0.1); }
.business-icon { width: 44px; height: 44px; border-radius: 10px; background: rgba(244, 123, 32, 0.1); display: flex; align-items: center; justify-content: center; margin-bottom: 20px; }
.business-card h4 { font-family: var(--font-display); font-size: 1.1rem; color: var(--charcoal); margin-bottom: 10px; line-height: 1.2; }
.business-card p { font-size: 0.88rem; line-height: 1.65; color: var(--mid-gray); font-weight: 300; }

/* ── Sticky CTA ── */
.mu-sticky-cta { position: fixed; bottom: 24px; right: 24px; z-index: 90; opacity: 0; transform: translateY(20px); pointer-events: none; transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1); }
.mu-sticky-cta.is-shown { opacity: 1; transform: translateY(0); pointer-events: auto; }
.mu-sticky-cta-inner { display: flex; align-items: center; gap: 12px; background: var(--purple); color: white; padding: 12px 24px 12px 12px; border-radius: 100px; text-decoration: none; box-shadow: 0 8px 32px rgba(106, 44, 145, 0.4), 0 2px 8px rgba(0, 0, 0, 0.15); transition: all 0.3s ease; border: 1px solid rgba(255, 255, 255, 0.1); }
.mu-sticky-cta-inner:hover { background: var(--purple-dark); transform: translateY(-2px); box-shadow: 0 12px 40px rgba(106, 44, 145, 0.5), 0 4px 12px rgba(0, 0, 0, 0.2); }
.mu-sticky-cta-photo { width: 36px; height: 36px; border-radius: 50%; overflow: hidden; border: 2px solid rgba(238, 178, 17, 0.5); flex-shrink: 0; }
.mu-sticky-cta-photo img { width: 100%; height: 100%; object-fit: cover; display: block; }
.mu-sticky-cta-text { font-size: 0.9rem; font-weight: 600; letter-spacing: 0.01em; white-space: nowrap; }
.mu-sticky-cta-arrow { flex-shrink: 0; opacity: 0.7; }
@media (max-width: 768px) { .mu-sticky-cta { bottom: 16px; right: 16px; left: 16px; } .mu-sticky-cta-inner { justify-content: center; width: 100%; } }

/* ── Footer ── */
footer { background: var(--charcoal); border-top: 1px solid rgba(255,255,255,0.06); padding: 40px 0; text-align: center; }
footer p { font-size: 0.8rem; color: rgba(255,255,255,0.3); font-weight: 300; }
 
/* ── Scroll Animations ── */
.reveal { opacity: 0; transform: translateY(32px); transition: all 0.8s cubic-bezier(0.16, 1, 0.3, 1); }
.reveal.visible { opacity: 1; transform: translateY(0); }
 
/* ── Responsive ── */
@media (max-width: 1024px) {
  .stats-inner { grid-template-columns: repeat(3, 1fr); }
  .stat-item:nth-child(3) { border-right: none; }
  .why-now-grid, .legacy-grid { grid-template-columns: 1fr; gap: 48px; }
  .territory-grid { grid-template-columns: 1fr; gap: 64px; }
  .priority-markets { grid-template-columns: 1fr; gap: 16px; margin-bottom: 64px; }
  .tiers, .support-grid, .video-wall { grid-template-columns: repeat(2, 1fr); }
  .team-grid { grid-template-columns: repeat(2, 1fr); }
  .process-steps { grid-template-columns: repeat(3, 1fr); gap: 28px; }
  .process-steps::before { display: none; }
  .hero-content { grid-template-columns: 1fr; gap: 48px; }
  .hero-left { max-width: 100%; }
  .hero-form { max-width: 480px; }
  .photo-strip { grid-template-columns: repeat(2, 1fr); }
  .diff-item-with-image { grid-template-columns: 48px 1fr; }
  .diff-item-with-image .diff-image { display: none; }
  .section-bg-watermark { width: 480px; height: 480px; top: -80px; right: -120px; }
  .territory-section .section-bg-watermark { bottom: -80px; left: -120px; }
  .legacy-stats { grid-template-columns: repeat(2, 1fr); }
  .menu-mosaic { grid-template-columns: 1fr 1fr; grid-template-rows: 240px 240px 240px; }
  .menu-tile-feature { grid-row: 1 / 3; }
  .menu-tile-tall { grid-row: 1 / 2; }
  .menu-tile-wide { grid-row: 2 / 3; }
  .menu-tile-small { grid-column: 1 / 3; grid-row: 3 / 4; }
  .business-case-grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 768px) {
  .container, .container-narrow { padding: 0 24px; }
  .section { padding: 80px 0; }
  .hero-content { padding: 160px 24px 80px; }
  .stats-inner { grid-template-columns: repeat(2, 1fr); }
  .stat-item:nth-child(2n) { border-right: none; }
  .model-features { grid-template-columns: 1fr; }
  .tiers, .support-grid, .video-wall { grid-template-columns: 1fr; }
  .team-grid { grid-template-columns: 1fr; }
  .team-photo { width: 140px; height: 140px; }
  .investment-grid { grid-template-columns: 1fr; }
  .process-steps { grid-template-columns: 1fr; gap: 20px; }
  .legacy-stats { grid-template-columns: 1fr 1fr; }
  nav .nav-inner { padding: 0 24px; }
  .photo-strip { grid-template-columns: 1fr 1fr; }
  .photo-strip-section { padding: 0; }
  .menu-mosaic { grid-template-columns: 1fr; grid-template-rows: repeat(4, 220px); }
  .menu-tile-feature, .menu-tile-tall, .menu-tile-wide, .menu-tile-small { grid-row: auto; grid-column: auto; }
  .menu-tile-feature h4 { font-size: 1.4rem; }
  .business-case-grid { grid-template-columns: 1fr; }
  .business-case { margin-top: 64px; padding-top: 48px; }
  .sizzle-grid { grid-template-columns: 1fr; max-width: 320px; margin-left: auto; margin-right: auto; }
  .sizzle-row { margin-top: 56px; }
}

/* Disclaimer */
.disclaimer { margin-top: 0px; text-align: center; }
.disclaimer__toggle { background: none; border: none; cursor: pointer; font-family: var(--font-body); font-size: 0.8rem; font-weight: 600; color: rgba(255,255,255,0.4); display: inline-flex; align-items: center; gap: 6px; padding: 8px 0; transition: color 0.2s ease; }
.disclaimer__toggle:hover { color: rgba(255,255,255,0.6); }
.disclaimer__toggle-arrow { display: inline-block; width: 0; height: 0; border-left: 4px solid transparent; border-right: 4px solid transparent; border-top: 5px solid currentColor; transition: transform 0.2s ease; }
.disclaimer__toggle[aria-expanded="true"] .disclaimer__toggle-arrow { transform: rotate(180deg); }
.disclaimer__body { display: none; }
.disclaimer__content { text-align: left; max-width: 900px; margin: 12px auto 0; padding: 20px 24px; background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.06); border-radius: 8px; }
.disclaimer__content p { font-size: 0.78rem; line-height: 1.6; color: rgba(255,255,255,0.35); margin: 0 0 10px; font-weight: 300; }
.disclaimer__content p:last-child { margin-bottom: 0; }
.disclaimer__content strong { color: rgba(255,255,255,0.5); }
.section-dark .disclaimer__toggle-text { color: rgba(255,255,255,0.4) !important; }
.section-dark .disclaimer__toggle-arrow { border-top-color: rgba(255,255,255,0.4) !important; }
.section-dark .disclaimer__content p { color: rgba(255,255,255,0.35) !important; }
.section-dark .disclaimer__content strong { color: rgba(255,255,255,0.5) !important; }
.section-cream .disclaimer__toggle-text { color: var(--mid-gray) !important; }
.section-cream .disclaimer__content p { color: var(--mid-gray) !important; }
.section-cream .disclaimer__content strong { color: var(--dark-gray) !important; }
.section:not(.section-dark):not(.section-cream):not(.section-purple) .disclaimer__toggle-text { color: var(--mid-gray) !important; }
.section:not(.section-dark):not(.section-cream):not(.section-purple) .disclaimer__content p { color: var(--mid-gray) !important; }
</style>
</head>
<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <a href="#main-content" class="skip-link">Skip to content</a>
 
<!-- Navigation -->
<nav id="nav">
  <div class="nav-inner">
    <a href="#" class="nav-logo"><img src="<?php echo get_theme_file_uri('/assets/img/logo-long.svg'); ?>" alt="Flying Biscuit Café"></a>
    <a href="#contact" class="nav-cta">Let's Talk</a>
  </div>
</nav>
 
<!-- Hero -->
<section class="hero" id="main-content">
  <div class="hero-content">
    <div class="hero-left">
      <div class="hero-eyebrow">Breakfast &amp; Brunch Franchise</div>
      <h1>Own a <em>Breakfast &amp; Brunch</em> Franchise People Drive Across Town For</h1>
      <p class="hero-sub">A 30-year Southern breakfast &amp; brunch concept — biscuits, shrimp &amp; grits, mimosa towers. ~$2M average unit volume, and you're home by 3pm. Built by the team that scaled Moe's Southwest Grill to 345 locations. No dinner shift. No late nights.</p>
      <div class="hero-video">
        <div class="video-card hero-video-card" data-video-id="-Rn9OIflfB0">
          <div class="video-thumb" style="background-image: url('<?php echo get_theme_file_uri('/assets/img/thumbnails/franchisees/meet-our-franchisees.webp'); ?>');">
            <div class="play-btn">
              <svg width="22" height="22" viewBox="0 0 18 18"><polygon points="5,3 15,9 5,15" fill="white"/></svg>
            </div>
          </div>
          <div class="hero-video-caption">
            <span class="hero-video-label">Hear from our franchisees</span>
          </div>
        </div>
      </div>
    </div>
    <div class="hero-form" id="contact">
      <div class="hero-form-card">
        <div class="hero-form-header">
          <div class="hero-form-photo">
            <img src="<?php echo get_theme_file_uri('/assets/img/team/andrew-scherzer-tight.jpg'); ?>" alt="Andrew Scherzer">
          </div>
          <h3>Talk with Andrew</h3>
          <div class="hero-form-role">Partner, Director of Franchise Development</div>
          <p class="hero-form-intro">Tell us a little about yourself and Andrew will be in touch.</p>
        </div>
        <?php echo do_shortcode('[wpforms id="310"]'); ?>
      </div>
    </div>
  </div>
</section>
 
<!-- Stats Bar -->
<div class="stats-bar">
  <div class="stats-inner">
    <div class="stat-item"><div class="stat-number">1993</div><div class="stat-label">Founded in Atlanta</div></div>
    <div class="stat-item"><div class="stat-number">42</div><div class="stat-label">Locations</div></div>
    <div class="stat-item"><div class="stat-number">~$2M*</div><div class="stat-label">Avg. Unit Volume</div></div>
    <div class="stat-item"><div class="stat-number">3pm</div><div class="stat-label">Doors Closed Daily</div></div>
    <div class="stat-item"><div class="stat-number">100K+</div><div class="stat-label">Positive Guest Reviews</div></div>
    <div class="stat-item"><div class="stat-number">345</div><div class="stat-label">Locations Built at Moe's</div></div>
  </div>
</div>

<div class="section-dark" style="background: var(--purple); padding: 0 40px 24px; text-align: center;">
  <?php $disclaimer_id = 'stats-disclaimer'; include( get_theme_file_path( '/templates/disclaimer.php' ) ); ?>
</div>

<!-- Press / Recognition Bar -->
<div class="press-bar">
  <div class="press-inner">
    <div class="press-label">As Featured In</div>
    <div class="press-logos">
      <img class="press-logo-img press-logo-tall" loading="lazy" src="<?php echo get_theme_file_uri('assets/img/featured-logos/franchise-times-logo.png'); ?>" alt="Franchise Times">
      <img class="press-logo-img press-logo-tall" loading="lazy" src="<?php echo get_theme_file_uri('assets/img/featured-logos/entrepreneur-logo.png'); ?>" alt="Entrepreneur">
      <img class="press-logo-img" loading="lazy" src="<?php echo get_theme_file_uri('assets/img/featured-logos/qsr-logo-dark.svg'); ?>" alt="QSR Magazine">
      <img class="press-logo-img" loading="lazy" src="<?php echo get_theme_file_uri('assets/img/featured-logos/nrn-logo.svg'); ?>" alt="Nation's Restaurant News">
      <img class="press-logo-img" loading="lazy" src="<?php echo get_theme_file_uri('assets/img/featured-logos/fsr-logo.svg'); ?>" alt="FSR Magazine">
    </div>
  </div>
</div>
 
<!-- Why a Breakfast & Brunch Franchise -->
<section class="section section-cream">
  <div class="container">
    <div class="reveal">
      <div class="section-eyebrow">Why a Breakfast &amp; Brunch Franchise</div>
      <div class="section-title">The Daypart That <em>Works in Your Favor</em></div>
    </div>
    <div class="why-now-grid">
      <div class="why-now-text reveal">
        <p>Breakfast and brunch is the strongest daypart in the restaurant business — and the one with the friendliest economics. Eggs, flour, butter, and produce cost a fraction of dinner proteins, so the margins work in your favor from day one.</p>
        <p>And there's no dinner rush. No 2am close. Flying Biscuit serves one beloved daypart, exceptionally well, then <strong>closes by mid-afternoon</strong> — so you can earn like a full-service restaurant and still have your evenings.</p>
        <p>This isn't a startup or a trend. It's a 30-year brand with ~$2M average unit volume, over 100,000 positive guest reviews, and a leadership team that already scaled Moe's Southwest Grill into a 345-unit, 36-state system. The concept is proven — the territory is what's still open.</p>
      </div>
      <div class="why-now-highlights reveal">
        <div class="highlight-card">
          <h4>Home By 3pm</h4>
          <p>Breakfast &amp; lunch only. No dinner shift, no late nights. The work–life balance is built into the model — not something you have to fight for.</p>
        </div>
        <div class="highlight-card">
          <h4>A Cult Following, Not Just Customers</h4>
          <p>Over 100,000 positive reviews and guests who plan their weekends around it. That kind of organic affection lowers your marketing costs and powers a strong grand opening.</p>
        </div>
        <div class="highlight-card">
          <h4>Proven Leadership</h4>
          <p>The team behind this growth built Moe's Southwest Grill from a single location into a 345-unit system. You're not anyone's first attempt.</p>
        </div>
      </div>
    </div>
  </div>
</section>
 
<!-- The Model Section -->
<section class="section section-dark section-bg-photo section-model">
  <div class="section-bg-watermark"></div>
  <div class="container">
    <div class="reveal">
      <div class="section-eyebrow">The Model</div>
      <div class="section-title">A Simpler, Stronger <em>Restaurant Model</em></div>
      <p class="section-subtitle">Built for predictability and designed to avoid the operational headaches of a full-service dinner concept.</p>
    </div>
    <div class="model-features">
      <div class="model-feature reveal">
        <div class="model-feature-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--gold)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg></div>
        <h4>~$2M Average Unit Volume</h4>
        <p>Consistent, system-wide top-line performance — the kind of revenue most full-service restaurants work nights and weekends to reach.</p>
      </div>
      <div class="model-feature reveal">
        <div class="model-feature-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--gold)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M17 18a5 5 0 0 0-10 0"/><line x1="12" y1="9" x2="12" y2="2"/><line x1="4.22" y1="10.22" x2="5.64" y2="11.64"/><line x1="1" y1="18" x2="3" y2="18"/><line x1="21" y1="18" x2="23" y2="18"/><line x1="18.36" y1="11.64" x2="19.78" y2="10.22"/><line x1="23" y1="22" x2="1" y2="22"/><polyline points="8 6 12 2 16 6"/></svg></div>
        <h4>Breakfast &amp; Brunch Daypart Only</h4>
        <p>No late nights. A streamlined beverage program built for the daypart — brunch cocktails and specialty coffee that lift check averages without full-bar complexity. Open, profitable, and closed by mid-afternoon.</p>
      </div>
      <div class="model-feature reveal">
        <div class="model-feature-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--gold)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg></div>
        <h4>Streamlined Menu, Contained Complexity</h4>
        <p>A lower SKU count means tighter food costs, faster ticket times, and a labor model that's far easier to staff and manage than a dinner concept.</p>
      </div>
      <div class="model-feature reveal">
        <div class="model-feature-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--gold)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg></div>
        <h4>National Vendor Agreements</h4>
        <p>A centralized purchasing program leveraging 42 locations of buying power. You're not negotiating with suppliers solo — you buy through a system optimized over three decades.</p>
      </div>
      <div class="model-feature reveal">
        <div class="model-feature-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--gold)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg></div>
        <h4>Marketing That Drives Traffic</h4>
        <p>National marketing plus a local store toolkit and built-in grand opening programs — focused on putting guests through your door, not vanity awareness.</p>
      </div>
    </div>
  </div>
</section>
 
<!-- Competitive Differentiation -->
<section class="section">
  <div class="container-narrow">
    <div class="reveal">
      <div class="section-eyebrow">Competitive Edge</div>
      <div class="section-title">Why Flying Biscuit — and Not the Other Breakfast Concepts <em>on Your List</em></div>
      <p class="section-subtitle">You're comparing breakfast franchise opportunities. We know we're not the only brand on your radar. Here's what separates us.</p>
    </div>
    <div class="differentiators">
      <div class="diff-item reveal">
        <div class="diff-number">01</div>
        <div>
          <h4>30 Years of Brand Equity That Money Can't Replicate</h4>
          <p>Most breakfast franchises are less than a decade old. Flying Biscuit has been building a loyal, emotionally connected guest base since 1993. That means lower customer acquisition costs, stronger grand opening performance, and a brand that doesn't need to explain itself to the consumer.</p>
        </div>
      </div>
      <div class="diff-item reveal">
        <div class="diff-number">02</div>
        <div>
          <h4>A Leadership Team That's Already Built a National Brand</h4>
          <p>This is not a first-time franchisor learning on your dime. Flying Biscuit's growth is led by the team behind Moe's Southwest Grill — a brand they built from a single unit into a 345-location, 36-state system.</p>
        </div>
      </div>
      <div class="diff-item diff-item-with-image reveal">
        <div class="diff-number">03</div>
        <div>
          <h4>A True Breakfast &amp; Brunch Model Without Daypart Creep</h4>
          <p>Some competitors are drifting into dinner, full-bar operations, and late hours — the exact complexity you're trying to avoid. Flying Biscuit does the opposite: a focused brunch cocktail program, a growing specialty espresso menu with premium drinks like the Pistachio Latte, and none of the late-night inventory of a full liquor operation. Higher check averages, contained complexity.</p>
        </div>
        <div class="diff-image">
          <img loading="lazy" src="<?php echo get_theme_file_uri('/assets/img/food/pistachio-latte.jpg'); ?>" alt="Pistachio Latte">
        </div>
      </div>
      <div class="diff-item reveal">
        <div class="diff-number">04</div>
        <div>
          <h4>Cult-Level Brand Affection</h4>
          <p>This isn't a generic breakfast chain. Flying Biscuit has the kind of passionate, organic following that drives repeat visits, word-of-mouth marketing, and built-in buzz the day you open in a new market.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- The Menu Is the Moat -->
<section class="section menu-section">
  <div class="container">
    <div class="reveal" style="text-align: center;">
      <div class="section-eyebrow">The Product</div>
      <div class="section-title">The Menu Is <em>the Moat</em></div>
      <p class="section-subtitle" style="margin: 0 auto;">30 years of menu development. A handful of signature items you can't get anywhere else. Built for repeat visits, optimized for kitchen execution.</p>
    </div>

    <div class="menu-mosaic reveal">
      <div class="menu-tile menu-tile-feature" data-bg="<?php echo get_theme_file_uri('/assets/img/food/biscuits.jpg'); ?>">
        <div class="menu-tile-overlay">
          <div class="menu-tile-eyebrow">Est. 1993</div>
          <h4>The Famous Flying Biscuit</h4>
          <p>The dish that named the brand. 30 years of consistency — the anchor item people drive across town for.</p>
        </div>
      </div>
      <div class="menu-tile menu-tile-tall" data-bg="<?php echo get_theme_file_uri('/assets/img/food/shrimp-n-grits-our-menu.jpg'); ?>">
        <div class="menu-tile-overlay">
          <div class="menu-tile-eyebrow">Award Winning</div>
          <h4>Shrimp &amp; Grits</h4>
          <p>The signature plate that proves breakfast can be a destination.</p>
        </div>
      </div>
      <div class="menu-tile menu-tile-wide" data-bg="<?php echo get_theme_file_uri('/assets/img/food/stuffed-french-toast-square.jpg'); ?>">
        <div class="menu-tile-overlay">
          <div class="menu-tile-eyebrow">Visual Showpiece</div>
          <h4>Stuffed French Toast</h4>
          <p>The plate that lives on social. Built to be photographed, built to be ordered again.</p>
        </div>
      </div>
      <div class="menu-tile menu-tile-small" data-bg="<?php echo get_theme_file_uri('/assets/img/food/mimosa-tower.jpg'); ?>">
        <div class="menu-tile-overlay">
          <div class="menu-tile-eyebrow">Check Average</div>
          <h4>Mimosa Towers</h4>
        </div>
      </div>
    </div>

    <div class="sizzle-row reveal">
      <div class="sizzle-row-intro">
        <span>See It Sizzle</span>
      </div>
      <div class="sizzle-grid">
        <div class="video-card sizzle-card" data-video-id="k3YD-mX62Os">
          <div class="sizzle-thumb" data-bg="<?php echo get_theme_file_uri('/assets/img/thumbnails/beignet-doughnuts-thumbnail.jpg'); ?>">
            <div class="play-btn"><svg width="20" height="20" viewBox="0 0 18 18"><polygon points="5,3 15,9 5,15" fill="white"/></svg></div>
          </div>
        </div>
        <div class="video-card sizzle-card" data-video-id="JD2KWZShMzg">
          <div class="sizzle-thumb" data-bg="<?php echo get_theme_file_uri('/assets/img/thumbnails/chicken-waffles-3-ways-thumbnail.jpg'); ?>">
            <div class="play-btn"><svg width="20" height="20" viewBox="0 0 18 18"><polygon points="5,3 15,9 5,15" fill="white"/></svg></div>
          </div>
        </div>
        <div class="video-card sizzle-card" data-video-id="qAATQV9jBWY">
          <div class="sizzle-thumb" data-bg="<?php echo get_theme_file_uri('/assets/img/thumbnails/stuffed-french-toast-thumbnail.jpg'); ?>">
            <div class="play-btn"><svg width="20" height="20" viewBox="0 0 18 18"><polygon points="5,3 15,9 5,15" fill="white"/></svg></div>
          </div>
        </div>
      </div>
    </div>

    <div class="business-case reveal">
      <div class="business-case-header">
        <div class="section-eyebrow">The Business Case</div>
        <h3 class="business-case-title">A Menu Built <em>for Profitability</em></h3>
        <p class="business-case-sub">Great food is just the start. Our menu is engineered to drive margins, simplify operations, and keep your team focused.</p>
      </div>
      <div class="business-case-grid">
        <div class="business-card">
          <div class="business-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg></div>
          <h4>Lower Food Costs</h4>
          <p>Breakfast and brunch ingredients — eggs, flour, butter, produce — cost a fraction of dinner proteins. The menu is designed around high-margin, low-waste items.</p>
        </div>
        <div class="business-card">
          <div class="business-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
          <h4>Simpler Operations</h4>
          <p>A focused menu means streamlined prep, faster ticket times, and less kitchen complexity. Your team can master it quickly and execute it consistently.</p>
        </div>
        <div class="business-card">
          <div class="business-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 0 1-8 0"/></svg></div>
          <h4>National Buying Power</h4>
          <p>Our collective purchasing program — one of the best in America — means lower ingredient costs and vendor relationships already negotiated for you.</p>
        </div>
        <div class="business-card">
          <div class="business-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg></div>
          <h4>Check-Average Boosters</h4>
          <p>Mimosa towers, Bloody Marys, and craft coffee aren't just crowd favorites — they're high-margin add-ons that drive revenue per guest.</p>
        </div>
      </div>
    </div>
  </div>
</section>
 
<!-- Brand Legacy -->
<section class="section section-cream">
  <div class="container">
    <div class="reveal">
      <div class="section-eyebrow">The Brand</div>
      <div class="section-title">30 Years of Brand Equity. A Team That's <em>Scaled Before.</em></div>
    </div>
    <div class="legacy-grid">
      <div class="legacy-text reveal">
        <p>Flying Biscuit Café was born in Atlanta's Candler Park neighborhood in 1993 and has built a loyal, almost cult-like following across the Southeast. The brand carries the kind of organic consumer affection that marketing dollars can't manufacture.</p>
        <p>But what makes this a franchise opportunity — not just a beloved restaurant — is the team behind the growth. 30 years refining the menu, the operations, and the unit economics. <strong>8 corporate-owned locations, so we're not managing your business from a boardroom — we're in the trenches with you.</strong> When food costs spike or labor gets tight, we feel it the same morning you do.</p>
      </div>
      <div class="legacy-origin reveal">
        <div class="legacy-origin-frame">
          <img loading="lazy" src="<?php echo get_theme_file_uri('/assets/img/flying-biscuit-candler-park-drawing.jpg'); ?>" alt="The original Flying Biscuit Café in Candler Park, Atlanta, 1993">
        </div>
        <div class="legacy-origin-caption">The original Flying Biscuit Café — Candler Park, Atlanta, 1993</div>
      </div>
    </div>
    <div class="legacy-stats reveal">
      <div class="legacy-stat"><div class="number">1993</div><div class="label">Founded</div></div>
      <div class="legacy-stat"><div class="number">42</div><div class="label">Locations</div></div>
      <div class="legacy-stat"><div class="number">345</div><div class="label">Built at Moe's</div></div>
      <div class="legacy-stat"><div class="number">~$2M*</div><div class="label">Average Unit Volume</div></div>
    </div>
      <?php $disclaimer_id = 'legacy-disclaimer'; include( get_theme_file_path( '/templates/disclaimer.php' ) ); ?>
  </div>
</section>

<!-- Edge-to-Edge Photo Strip -->
<section class="photo-strip-section">
  <div class="photo-strip">
    <div class="photo-strip-img" data-bg="<?php echo get_theme_file_uri('/assets/img/brand-strip/buford-interior.webp'); ?>"></div>
    <div class="photo-strip-img" data-bg="<?php echo get_theme_file_uri('/assets/img/brand-strip/kingwood-interior.webp'); ?>"></div>
    <div class="photo-strip-img" data-bg="<?php echo get_theme_file_uri('/assets/img/brand-strip/macon-interior.webp'); ?>"></div>
    <div class="photo-strip-img" data-bg="<?php echo get_theme_file_uri('/assets/img/brand-strip/terminus-inside.webp'); ?>"></div>
  </div>
</section>
 
<!-- Territory Section -->
<section class="section section-dark territory-section">
  <div class="section-bg-watermark"></div>
  <div class="container">
    <div class="reveal" style="text-align: center;">
      <div class="section-eyebrow">Available Territories</div>
      <div class="section-title">Find Your <em>Market</em></div>
      <p class="section-subtitle" style="margin: 0 auto;">Prime territories are open across the Southeast and beyond. With breakfast and brunch demand surging nationwide, now is the time to claim yours.</p>
    </div>

    <div class="priority-markets reveal">
      <div class="priority-card">
        <div class="priority-card-state">Texas</div>
        <div class="priority-card-tagline">Major metros, high disposable income, and a breakfast culture already proven by the brands that came before us.</div>
        <div class="priority-card-cities">Houston · Dallas · Fort Worth · Austin · San Antonio</div>
        <div class="priority-card-meta">
          <span class="priority-card-units">Territory Available</span>
        </div>
      </div>
      <div class="priority-card">
        <div class="priority-card-state">Florida</div>
        <div class="priority-card-tagline">Our brand DNA travels well here — year-round patio weather, dense brunch culture, and guests who already drive across town for breakfast.</div>
        <div class="priority-card-cities">Tampa · Orlando · Jacksonville · Miami · St. Petersburg</div>
        <div class="priority-card-meta">
          <span class="priority-card-units">Territory Available</span>
        </div>
      </div>
      <div class="priority-card">
        <div class="priority-card-state">Ohio</div>
        <div class="priority-card-tagline">A Midwest entry point with proven brunch demand, strong daypart culture, and lower real estate costs than coastal markets.</div>
        <div class="priority-card-cities">Columbus · Cleveland · Cincinnati · Toledo · Akron · Dayton</div>
        <div class="priority-card-meta">
          <span class="priority-card-units">Territory Available</span>
        </div>
      </div>
      <div class="priority-card">
        <div class="priority-card-state">Kentucky</div>
        <div class="priority-card-tagline">True white space next to our Southeast footprint — a clean first-mover opportunity where premium breakfast is underserved.</div>
        <div class="priority-card-cities">Louisville · Lexington · Bowling Green · Owensboro · Covington</div>
        <div class="priority-card-meta">
          <span class="priority-card-units">Territory Available</span>
        </div>
      </div>
    </div>

    <div class="reveal" style="text-align: center; margin-top: 64px;">
      <p style="font-size: 0.95rem; line-height: 1.65; color: rgba(255,255,255,0.55); font-weight: 300; max-width: 560px; margin: 0 auto 28px;">
        Targeting a market outside these four? We're expanding across the Southeast and Midwest — reach out to check availability in your area.
      </p>
      <a href="#contact" class="btn-primary">Check Market Availability</a>
    </div>
  </div>
</section>
 
<!-- Investment Section -->
<section class="section">
  <div class="container">
    <div class="reveal">
      <div class="section-eyebrow">The Investment</div>
      <div class="section-title">The Numbers <em>at a Glance</em></div>
      <p class="section-subtitle">A proven concept with a clear financial picture. Here's what to expect for a single café.</p>
    </div>
    <div class="investment-grid reveal">
      <div class="invest-card">
        <div class="label">Total Investment</div>
        <div class="value">$467,900 – $1,171,350*</div>
        <div class="note">Includes build-out, equipment, and working capital. Complete details in our FDD.</div>
      </div>
      <div class="invest-card">
        <div class="label">Franchise Fee</div>
        <div class="value">$50,000</div>
        <div class="note">Single-unit initial franchise fee</div>
      </div>
      <div class="invest-card">
        <div class="label">Liquid Capital Required</div>
        <div class="value">$200,000+</div>
        <div class="note">Minimum liquid assets to qualify</div>
      </div>
      <div class="invest-card">
        <div class="label">Time to Open</div>
        <div class="value">3 – 18 Months</div>
        <div class="note">From signed franchise agreement to opening day</div>
      </div>
    </div>
    <p class="invest-footnote reveal">*These figures are for planning purposes. Complete investment details, including all assumptions and ranges, are provided in our Franchise Disclosure Document.</p>
    <?php $disclaimer_id = 'invest-disclaimer'; include( get_theme_file_path( '/templates/disclaimer.php' ) ); ?>
  </div>
</section>
 
<!-- First-Time Owners Welcome -->
<section class="section section-purple">
  <div class="container">
    <div class="reveal">
      <div class="section-eyebrow">You Don't Have to Be a Restaurateur</div>
      <div class="section-title">Built for <em>First-Time Owners</em></div>
      <p class="section-subtitle">You bring the drive and the local knowledge. We bring 30 years of systems, training, and a brand guests already love.</p>
    </div>
    <div class="tiers">
      <div class="tier-card reveal">
        <h4>No Restaurant Experience Required</h4>
        <p>Previous foodservice experience is a plus, not a prerequisite. Our training program and field team are built to get first-time owners open with confidence.</p>
      </div>
      <div class="tier-card reveal">
        <h4>Comprehensive 4-Week Training</h4>
        <p>Hands-on training for you and your team at our Atlanta headquarters and in your own café before you open — then ongoing support after.</p>
      </div>
      <div class="tier-card reveal">
        <h4>We Have Skin in the Game</h4>
        <p>8 corporate-owned cafés mean we run the same playbook you do. When costs spike or labor gets tight, we feel it the same morning you do.</p>
      </div>
    </div>
  </div>
</section>
 
<!-- Leadership Team -->
<section class="section">
  <div class="container">
    <div class="reveal" style="text-align: center;">
      <div class="section-eyebrow">Leadership</div>
      <div class="section-title">The Team Behind <em>the Growth</em></div>
      <p class="section-subtitle" style="margin: 0 auto;">A franchise leadership team with a proven track record of scaling restaurant brands from a single location to national platforms.</p>
    </div>
    <div class="team-grid">
      <div class="team-card reveal">
        <div class="team-photo"><img loading="lazy" src="<?php echo get_theme_file_uri('/assets/img/team/martin-sprock.jpg'); ?>" alt="Martin Sprock"></div>
        <h4>Martin Sprock</h4>
        <div class="role">Partner, Founder</div>
        <p>Founded Moe's Southwest Grill and scaled it to 345 locations across 36 states. Now applying the same playbook to Flying Biscuit Café's next phase of growth.</p>
      </div>
      <div class="team-card reveal">
        <div class="team-photo"><img loading="lazy" src="<?php echo get_theme_file_uri('/assets/img/team/daryl-dollinger.jpg'); ?>" alt="Daryl Dollinger"></div>
        <h4>Daryl Dollinger</h4>
        <div class="role">Partner, President</div>
        <p>Helped scale Moe's Southwest Grill alongside Martin into a 345-unit, 36-state system. Now leads Flying Biscuit's brand strategy and franchise growth.</p>
      </div>
      <div class="team-card reveal">
        <div class="team-photo"><img loading="lazy" src="<?php echo get_theme_file_uri('/assets/img/team/andrew-scherzer-tight.jpg'); ?>" alt="Andrew Scherzer"></div>
        <h4>Andrew Scherzer</h4>
        <div class="role">Partner, Director of Franchise Development</div>
        <p>Your first point of contact. Andrew walks you through the opportunity with a real conversation, not a script.</p>
      </div>
      <div class="team-card reveal">
        <div class="team-photo"><img loading="lazy" src="<?php echo get_theme_file_uri('/assets/img/team/sohail-kaiser.jpg'); ?>" alt="Sohail Khizer"></div>
        <h4>Sohail Khizer</h4>
        <div class="role">Partner, Operations</div>
        <p>Oversees the operational infrastructure that supports franchisees from pre-opening through stabilization — built to support your very first location.</p>
      </div>
    </div>
  </div>
</section>
 
<!-- Video Wall -->
<section class="section section-dark">
  <div class="container">
    <div class="reveal" style="text-align: center;">
      <div class="section-eyebrow">Franchisee Stories</div>
      <div class="section-title">Hear It Directly from <em>Our Owners</em></div>
      <p class="section-subtitle" style="margin: 0 auto;">We could tell you the model works. They'll show you.</p>
    </div>
    <div class="video-wall">
      <div class="video-card reveal" data-video-id="URvlocRXXYE">
        <div class="video-thumb" data-bg="<?php echo get_theme_file_uri('/assets/img/thumbnails/franchisees/tahir-rafiq.webp'); ?>">
          <div class="play-btn"><svg width="18" height="18" viewBox="0 0 18 18"><polygon points="5,3 15,9 5,15" fill="white"/></svg></div>
        </div>
        <div class="video-info">
          <h4>Tahir Rafiq</h4>
          <div class="meta">Franchisee · Research Triangle, NC</div>
          <div class="teaser">"The corporate team gives you 100% support — they've got you covered on everything."</div>
        </div>
      </div>
      <div class="video-card reveal" data-video-id="0d_Y2HFF5ww">
        <div class="video-thumb" data-bg="<?php echo get_theme_file_uri('/assets/img/thumbnails/franchisees/mandy-rubenstein.webp'); ?>">
          <div class="play-btn"><svg width="18" height="18" viewBox="0 0 18 18"><polygon points="5,3 15,9 5,15" fill="white"/></svg></div>
        </div>
        <div class="video-info">
          <h4>Mandy Rubenstein</h4>
          <div class="meta">Franchisee · Atlanta, GA</div>
          <div class="teaser">"It still feels like your local breakfast restaurant. That community connection never goes away."</div>
        </div>
      </div>
      <div class="video-card reveal" data-video-id="-3Pa9CUq7kc">
        <div class="video-thumb" data-bg="<?php echo get_theme_file_uri('/assets/img/thumbnails/franchisees/joseph-hsiao.webp'); ?>">
          <div class="play-btn"><svg width="18" height="18" viewBox="0 0 18 18"><polygon points="5,3 15,9 5,15" fill="white"/></svg></div>
        </div>
        <div class="video-info">
          <h4>Joseph Hsiao</h4>
          <div class="meta">Franchisee · Atlanta, GA</div>
          <div class="teaser">"The royalties and marketing fees are very reasonable compared to other franchises."</div>
        </div>
      </div>
      <div class="video-card reveal" data-video-id="S-Mz1TClY5U">
        <div class="video-thumb" data-bg="<?php echo get_theme_file_uri('/assets/img/thumbnails/franchisees/ariel-esteves.webp'); ?>">
          <div class="play-btn"><svg width="18" height="18" viewBox="0 0 18 18"><polygon points="5,3 15,9 5,15" fill="white"/></svg></div>
        </div>
        <div class="video-info">
          <h4>Ariel Esteves</h4>
          <div class="meta">Franchisee · Macon &amp; Columbus, GA</div>
          <div class="teaser">"They give you the tools to be successful. The training is phenomenal."</div>
        </div>
      </div>
      <div class="video-card reveal" data-video-id="HvDTJNh0ukU">
        <div class="video-thumb" data-bg="<?php echo get_theme_file_uri('/assets/img/thumbnails/franchisees/nick-panici.webp'); ?>">
          <div class="play-btn"><svg width="18" height="18" viewBox="0 0 18 18"><polygon points="5,3 15,9 5,15" fill="white"/></svg></div>
        </div>
        <div class="video-info">
          <h4>Nick Panici</h4>
          <div class="meta">Franchisee · Mobile, AL</div>
          <div class="teaser">"We get everything we need. There's not much more we could ask for."</div>
        </div>
      </div>
      <div class="video-card reveal" data-video-id="9MJqsLvSs3Q">
        <div class="video-thumb" data-bg="<?php echo get_theme_file_uri('/assets/img/thumbnails/franchisees/larry-bell.webp'); ?>">
          <div class="play-btn"><svg width="18" height="18" viewBox="0 0 18 18"><polygon points="5,3 15,9 5,15" fill="white"/></svg></div>
        </div>
        <div class="video-info">
          <h4>Larry Bell</h4>
          <div class="meta">New Franchisee · Johnson City, TN</div>
          <div class="teaser">"I've had several businesses in the past. I just really like the concept and the team."</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Video Lightbox Modal -->
<div class="video-modal" id="videoModal">
  <div class="video-modal-backdrop"></div>
  <div class="video-modal-content">
    <button class="video-modal-close" aria-label="Close video">&times;</button>
    <div class="video-modal-player">
      <iframe id="videoFrame" src="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  </div>
</div>
 
<!-- Support Infrastructure -->
<section class="section">
  <div class="container">
    <div class="reveal" style="text-align: center;">
      <div class="section-eyebrow">Infrastructure</div>
      <div class="section-title">You're Never <em>On Your Own</em></div>
      <p class="section-subtitle" style="margin: 0 auto;">From site selection to opening day and well beyond, you have a team behind you. 42 openings have refined this playbook.</p>
    </div>
    <div class="support-grid">
      <div class="support-card reveal">
        <div class="support-icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="6" width="20" height="12" rx="2"/><path d="M6 6V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2"/><line x1="12" y1="10" x2="12" y2="14"/></svg></div>
        <h4>Pre-Opening Support</h4>
        <p>Dedicated guidance from site selection through construction, permitting, and pre-opening marketing.</p>
      </div>
      <div class="support-card reveal">
        <div class="support-icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c0 1.1 2.7 3 6 3s6-1.9 6-3v-5"/></svg></div>
        <h4>Training Program</h4>
        <p>Comprehensive 4-week training for you and your team — structured to get a first-time owner fully operational.</p>
      </div>
      <div class="support-card reveal">
        <div class="support-icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/></svg></div>
        <h4>Ongoing Field Support</h4>
        <p>A franchise business consultant reviewing performance, coaching improvements, and keeping the brand consistent.</p>
      </div>
      <div class="support-card reveal">
        <div class="support-icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"/><line x1="2" y1="20" x2="22" y2="20"/></svg></div>
        <h4>Technology &amp; Systems</h4>
        <p>Standardized POS, inventory management, and reporting that give you real-time visibility into your café.</p>
      </div>
      <div class="support-card reveal">
        <div class="support-icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg></div>
        <h4>Marketing Playbook</h4>
        <p>National brand marketing plus a local store toolkit and built-in grand opening programs to maximize your launch.</p>
      </div>
      <div class="support-card reveal">
        <div class="support-icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg></div>
        <h4>Supply Chain</h4>
        <p>National vendor agreements and centralized purchasing leveraging 42 locations of buying power.</p>
      </div>
    </div>
  </div>
</section>
 
<!-- Is This the Right Fit? -->
<section class="section section-dark">
  <div class="container-narrow">
    <div class="reveal">
      <div class="section-eyebrow">Ideal Owners</div>
      <div class="section-title">Is This the <em>Right Fit?</em></div>
    </div>
    <div class="fit-list">
      <div class="fit-item reveal">
        <div class="fit-check"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="var(--gold)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>
        <p><strong>You love hospitality and your community.</strong> You want to run a place neighbors line up for on weekends — not a faceless box.</p>
      </div>
      <div class="fit-item reveal">
        <div class="fit-check"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="var(--gold)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>
        <p><strong>You meet the financial basics.</strong> Roughly $200K+ in liquid capital and the ability to fund a $467,900–$1,171,350 total investment, typically with financing.</p>
      </div>
      <div class="fit-item reveal">
        <div class="fit-check"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="var(--gold)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>
        <p><strong>You'll be hands-on — or hire someone who is.</strong> Owner-operators thrive here, but a committed owner with a strong general manager works too.</p>
      </div>
      <div class="fit-item reveal">
        <div class="fit-check"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="var(--gold)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>
        <p><strong>You don't need prior restaurant experience.</strong> Foodservice background helps, but our training and field support are built to get first-time owners open with confidence.</p>
      </div>
    </div>
  </div>
</section>
 
<!-- Process -->
<section class="section section-cream" id="process">
  <div class="container">
    <div class="reveal" style="text-align: center;">
      <div class="section-eyebrow">The Process</div>
      <div class="section-title">How This <em>Works</em></div>
    </div>
    <div class="process-steps">
      <div class="step reveal">
        <div class="step-number">1</div>
        <h4>Initial Call with Andrew</h4>
        <p>Andrew Scherzer walks you through the opportunity and assesses mutual fit. A real conversation, not a script.</p>
      </div>
      <div class="step reveal">
        <div class="step-number">2</div>
        <h4>Complete Application</h4>
        <p>We review your financials, target market, and background to make sure the partnership is right for both sides.</p>
      </div>
      <div class="step reveal">
        <div class="step-number">3</div>
        <h4>FDD Review via Zoom</h4>
        <p>We walk through the Franchise Disclosure Document, answer your questions, and get to know you personally.</p>
      </div>
      <div class="step reveal">
        <div class="step-number">4</div>
        <h4>Discovery Day</h4>
        <p>Meet the team. Visit a high-performing café. Review POS data. Talk to operators. See the brand in person.</p>
      </div>
      <div class="step reveal">
        <div class="step-number">5</div>
        <h4>Signed Agreement</h4>
        <p>We move quickly for owners who are ready. Clear timelines, mutual accountability.</p>
      </div>
    </div>
  </div>
</section>
 
<!-- Bottom CTA -->
<section class="section section-dark" style="padding: 80px 0;">
  <div class="container">
    <div class="reveal" style="text-align: center; max-width: 600px; margin: 0 auto;">
      <div class="section-eyebrow">Ready?</div>
      <div class="section-title" style="color: white;">Breakfast &amp; Brunch Territories Are Open. <em>Let's&nbsp;Talk.</em></div>
      <p style="font-size: 1.05rem; line-height: 1.7; color: rgba(255,255,255,0.6); font-weight: 300; margin-bottom: 32px;">Tell us a little about yourself and where you'd like to own. Andrew will be in touch.</p>
      <a href="#contact" class="btn-primary">
        Start the Conversation
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10m0 0L9 4m4 4L9 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
      </a>
    </div>
  </div>
</section>
 
<!-- Sticky CTA -->
<div class="mu-sticky-cta" id="muStickyCta">
  <a href="#contact" class="mu-sticky-cta-inner">
    <div class="mu-sticky-cta-photo">
      <img src="<?php echo get_theme_file_uri('/assets/img/team/andrew-scherzer-tight.jpg'); ?>" alt="Andrew Scherzer">
    </div>
    <span class="mu-sticky-cta-text">Talk with Andrew</span>
    <svg class="mu-sticky-cta-arrow" width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10m0 0L9 4m4 4L9 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
  </a>
</div>

<!-- Footer -->
<footer>
  <div class="container">
    <p>© 2026 Flying Biscuit Café. All rights reserved. This is not an offer to sell a franchise. An offer can only be made through the delivery of a Franchise Disclosure Document.</p>
  </div>
</footer>
 
<script>
// Lazy load background images via IntersectionObserver
const lazyBgEls = document.querySelectorAll('[data-bg]');
if ('IntersectionObserver' in window && lazyBgEls.length) {
  const bgObserver = new IntersectionObserver((entries, obs) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const el = entry.target;
        const bg = el.getAttribute('data-bg');
        if (bg) {
          el.style.backgroundImage = `url('${bg}')`;
          el.removeAttribute('data-bg');
        }
        obs.unobserve(el);
      }
    });
  }, { rootMargin: '300px 0px' });
  lazyBgEls.forEach(el => bgObserver.observe(el));
} else {
  lazyBgEls.forEach(el => {
    const bg = el.getAttribute('data-bg');
    if (bg) el.style.backgroundImage = `url('${bg}')`;
  });
}

// Smooth scroll without hash in URL
document.querySelectorAll('a[href="#contact"], a[href="#process"]').forEach(link => {
  link.addEventListener('click', (e) => {
    e.preventDefault();
    const target = document.querySelector(link.getAttribute('href'));
    if (target) target.scrollIntoView({ behavior: 'smooth' });
  });
});

// Nav scroll effect
const nav = document.getElementById('nav');
const muStickyCta = document.getElementById('muStickyCta');
const heroForm = document.getElementById('contact');

window.addEventListener('scroll', () => {
  nav.classList.toggle('scrolled', window.scrollY > 50);
  if (heroForm) {
    const formRect = heroForm.getBoundingClientRect();
    const formHidden = formRect.top < -200;
    muStickyCta.classList.toggle('is-shown', formHidden);
  }
});
 
// Scroll reveal
const revealElements = document.querySelectorAll('.reveal');
const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('visible');
    }
  });
}, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });
 
revealElements.forEach(el => observer.observe(el));
 
// Stagger animations for grid children
document.querySelectorAll('.model-features, .tiers, .support-grid, .video-wall, .investment-grid').forEach(grid => {
  const children = grid.querySelectorAll('.reveal');
  children.forEach((child, i) => {
    child.style.transitionDelay = `${i * 0.1}s`;
  });
});

// Video lightbox
const videoModal = document.getElementById('videoModal');
const videoFrame = document.getElementById('videoFrame');
const modalBackdrop = videoModal.querySelector('.video-modal-backdrop');
const modalClose = videoModal.querySelector('.video-modal-close');

document.querySelectorAll('.video-card[data-video-id]').forEach(card => {
  card.addEventListener('click', () => {
    const videoId = card.getAttribute('data-video-id');
    if (!videoId || videoId.startsWith('YOUR_')) return;

    if (card.classList.contains('sizzle-card')) {
      const thumb = card.querySelector('.sizzle-thumb');
      if (!thumb || thumb.querySelector('iframe')) return;
      thumb.innerHTML = `<iframe src="https://www.youtube.com/embed/${videoId}?autoplay=1&rel=0&playsinline=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>`;
      card.classList.add('playing');
      return;
    }

    videoFrame.src = `https://www.youtube.com/embed/${videoId}?autoplay=1&rel=0`;
    videoModal.classList.add('active');
    document.body.style.overflow = 'hidden';
  });
});

function closeVideoModal() {
  videoModal.classList.remove('active');
  videoFrame.src = '';
  document.body.style.overflow = '';
}

modalBackdrop.addEventListener('click', closeVideoModal);
modalClose.addEventListener('click', closeVideoModal);
document.addEventListener('keydown', (e) => {
  if (e.key === 'Escape' && videoModal.classList.contains('active')) {
    closeVideoModal();
  }
});
</script>

<script>
document.addEventListener('click', function(e) {
  var btn = e.target.closest('.disclaimer__toggle');
  if (!btn) return;
  var body = document.getElementById(btn.getAttribute('aria-controls'));
  if (!body) return;
  var isOpen = body.style.display === 'block';
  body.style.display = isOpen ? 'none' : 'block';
  btn.setAttribute('aria-expanded', isOpen ? 'false' : 'true');
});
</script>
 
<?php wp_footer(); ?>
</body>
</html>