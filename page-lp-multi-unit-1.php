<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?></title>
    <?php wp_head(); ?>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
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
nav.scrolled {
  background: rgba(255, 253, 248, 0.97);
  box-shadow: 0 2px 40px rgba(106, 44, 145, 0.06);
}
nav .nav-inner {
  max-width: 1200px; margin: 0 auto; padding: 0 40px;
  display: flex; align-items: center; justify-content: space-between;
  height: 72px;
}
nav .nav-logo {
  font-family: var(--font-display);
  font-size: 1.25rem;
  color: var(--purple);
  text-decoration: none;
  letter-spacing: -0.02em;
}
nav .nav-logo span { color: var(--orange); }
nav .nav-cta {
  background: var(--purple);
  color: white;
  padding: 10px 28px;
  border-radius: 6px;
  text-decoration: none;
  font-weight: 600;
  font-size: 0.875rem;
  letter-spacing: 0.02em;
  transition: all 0.3s ease;
}
nav .nav-cta:hover { background: var(--purple-dark); transform: translateY(-1px); }
 
/* ── Hero ── */
.hero {
  min-height: 100vh;
  display: flex;
  align-items: center;
  position: relative;
  overflow: hidden;
  background: var(--charcoal);
  color: white;
}
.hero::before {
  content: '';
  position: absolute; inset: 0;
  background:
    radial-gradient(ellipse 60% 50% at 85% 40%, rgba(106, 44, 145, 0.2) 0%, transparent 70%),
    radial-gradient(ellipse 50% 50% at 20% 80%, rgba(244, 123, 32, 0.1) 0%, transparent 60%);
}
.hero::after {
  content: '';
  position: absolute; top: -50%; right: -20%;
  width: 800px; height: 800px;
  border-radius: 50%;
  border: 1px solid rgba(238, 178, 17, 0.08);
  animation: hero-ring 25s linear infinite;
}
@keyframes hero-ring { from { transform: rotate(0deg); } to { transform: rotate(360deg); } }
 
.hero-content {
  position: relative; z-index: 2;
  max-width: 1200px; margin: 0 auto;
  padding: 140px 40px 100px;
}
.hero-eyebrow {
  display: inline-flex; align-items: center; gap: 10px;
  font-size: 0.8rem; font-weight: 600;
  letter-spacing: 0.15em; text-transform: uppercase;
  color: var(--gold);
  margin-bottom: 32px;
  opacity: 0; animation: fadeUp 0.8s ease 0.2s forwards;
}
.hero-eyebrow::before {
  content: ''; width: 32px; height: 1px; background: var(--gold);
}
.hero h1 {
  font-family: var(--font-display);
  font-size: clamp(3rem, 6vw, 5.5rem);
  line-height: 1.05;
  letter-spacing: -0.03em;
  max-width: 800px;
  margin-bottom: 28px;
  opacity: 0; animation: fadeUp 0.8s ease 0.4s forwards;
}
.hero h1 em {
  font-style: italic;
  color: var(--orange);
}
.hero-sub {
  font-size: 1.2rem;
  line-height: 1.7;
  max-width: 600px;
  color: rgba(255,255,255,0.72);
  font-weight: 300;
  margin-bottom: 48px;
  opacity: 0; animation: fadeUp 0.8s ease 0.6s forwards;
}
.hero-ctas {
  display: flex; gap: 16px; flex-wrap: wrap;
  opacity: 0; animation: fadeUp 0.8s ease 0.8s forwards;
}
.btn-primary {
  display: inline-flex; align-items: center; gap: 8px;
  background: var(--orange);
  color: white;
  padding: 16px 36px;
  border-radius: 6px;
  text-decoration: none;
  font-weight: 600;
  font-size: 1rem;
  letter-spacing: 0.01em;
  transition: all 0.3s ease;
  border: none; cursor: pointer;
}
.btn-primary:hover { background: var(--orange-light); transform: translateY(-2px); box-shadow: 0 8px 30px rgba(244, 123, 32, 0.3); }
.btn-secondary {
  display: inline-flex; align-items: center; gap: 8px;
  background: transparent;
  color: white;
  padding: 16px 36px;
  border-radius: 6px;
  text-decoration: none;
  font-weight: 500;
  font-size: 1rem;
  border: 1px solid rgba(255,255,255,0.25);
  transition: all 0.3s ease;
  cursor: pointer;
}
.btn-secondary:hover { border-color: rgba(255,255,255,0.5); background: rgba(255,255,255,0.05); }
 
@keyframes fadeUp {
  from { opacity: 0; transform: translateY(24px); }
  to { opacity: 1; transform: translateY(0); }
}
 
/* ── Stats Bar ── */
.stats-bar {
  background: var(--purple);
  padding: 0;
  position: relative;
  overflow: hidden;
}
.stats-bar::before {
  content: '';
  position: absolute; inset: 0;
  background: linear-gradient(135deg, rgba(255,255,255,0.03) 0%, transparent 50%, rgba(238,178,17,0.05) 100%);
}
.stats-inner {
  max-width: 1200px; margin: 0 auto;
  display: grid;
  grid-template-columns: repeat(6, 1fr);
  position: relative;
}
.stat-item {
  padding: 36px 20px;
  text-align: center;
  border-right: 1px solid rgba(255,255,255,0.08);
  transition: background 0.3s ease;
}
.stat-item:last-child { border-right: none; }
.stat-item:hover { background: rgba(255,255,255,0.04); }
.stat-number {
  font-family: var(--font-display);
  font-size: 1.75rem;
  color: var(--gold);
  margin-bottom: 6px;
}
.stat-label {
  font-size: 0.75rem;
  color: rgba(255,255,255,0.6);
  font-weight: 500;
  letter-spacing: 0.06em;
  text-transform: uppercase;
  line-height: 1.4;
}
 
/* ── Section Styles ── */
.section {
  padding: 120px 0;
}
.section-dark {
  background: var(--charcoal);
  color: white;
}
.section-purple {
  background: var(--purple);
  color: white;
}
.section-cream {
  background: var(--cream);
}
.section-eyebrow {
  font-size: 0.75rem;
  font-weight: 700;
  letter-spacing: 0.18em;
  text-transform: uppercase;
  color: var(--orange);
  margin-bottom: 16px;
}
.section-dark .section-eyebrow,
.section-purple .section-eyebrow { color: var(--gold); }
 
.section-title {
  font-family: var(--font-display);
  font-size: clamp(2.2rem, 4vw, 3.2rem);
  line-height: 1.15;
  letter-spacing: -0.025em;
  margin-bottom: 20px;
}
.section-title em { font-style: italic; color: var(--orange); }
.section-dark .section-title em { color: var(--orange); }
 
.section-subtitle {
  font-size: 1.15rem;
  line-height: 1.7;
  color: var(--mid-gray);
  max-width: 640px;
  font-weight: 300;
}
.section-dark .section-subtitle { color: rgba(255,255,255,0.6); }
.section-purple .section-subtitle { color: rgba(255,255,255,0.7); }
 
/* ── Why Now Section ── */
.why-now-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 80px;
  align-items: start;
  margin-top: 64px;
}
.why-now-text p {
  font-size: 1.1rem;
  line-height: 1.8;
  color: var(--dark-gray);
  margin-bottom: 24px;
  font-weight: 300;
}
.why-now-text p strong { font-weight: 600; color: var(--charcoal); }
.why-now-highlights {
  display: flex; flex-direction: column; gap: 24px;
}
.highlight-card {
  background: white;
  border-radius: 12px;
  padding: 32px;
  border: 1px solid var(--light-gray);
  transition: all 0.4s ease;
  position: relative;
  overflow: hidden;
}
.highlight-card::before {
  content: '';
  position: absolute; top: 0; left: 0;
  width: 4px; height: 100%;
  background: var(--purple);
  border-radius: 4px 0 0 4px;
  transform: scaleY(0);
  transition: transform 0.4s ease;
}
.highlight-card:hover { border-color: var(--purple-light); transform: translateX(4px); box-shadow: 0 8px 40px rgba(106, 44, 145, 0.08); }
.highlight-card:hover::before { transform: scaleY(1); }
.highlight-card h4 {
  font-family: var(--font-display);
  font-size: 1.2rem;
  margin-bottom: 8px;
  color: var(--purple);
}
.highlight-card p {
  font-size: 0.95rem;
  line-height: 1.65;
  color: var(--mid-gray);
  font-weight: 300;
}
 
/* ── Model Section ── */
.model-features {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 32px;
  margin-top: 64px;
}
.model-feature {
  padding: 40px;
  background: rgba(255,255,255,0.04);
  border: 1px solid rgba(255,255,255,0.08);
  border-radius: 12px;
  transition: all 0.4s ease;
}
.model-feature:hover {
  background: rgba(255,255,255,0.07);
  border-color: rgba(238, 178, 17, 0.2);
  transform: translateY(-4px);
}
.model-feature-icon {
  width: 48px; height: 48px;
  background: rgba(238, 178, 17, 0.1);
  border-radius: 10px;
  display: flex; align-items: center; justify-content: center;
  margin-bottom: 20px;
  font-size: 1.4rem;
}
.model-feature h4 {
  font-family: var(--font-display);
  font-size: 1.2rem;
  margin-bottom: 10px;
  color: white;
}
.model-feature p {
  font-size: 0.95rem;
  line-height: 1.7;
  color: rgba(255,255,255,0.6);
  font-weight: 300;
}
 
/* ── Brand / Legacy Section ── */
.legacy-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 80px;
  align-items: center;
  margin-top: 64px;
}
.legacy-text p {
  font-size: 1.1rem;
  line-height: 1.8;
  color: var(--dark-gray);
  margin-bottom: 24px;
  font-weight: 300;
}
.legacy-stats {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 24px;
}
.legacy-stat {
  background: var(--purple);
  border-radius: 12px;
  padding: 32px;
  text-align: center;
  transition: transform 0.3s ease;
}
.legacy-stat:hover { transform: scale(1.03); }
.legacy-stat .number {
  font-family: var(--font-display);
  font-size: 2.2rem;
  color: var(--gold);
  margin-bottom: 4px;
}
.legacy-stat .label {
  font-size: 0.8rem;
  color: rgba(255,255,255,0.65);
  font-weight: 500;
  text-transform: uppercase;
  letter-spacing: 0.08em;
}
 
/* ── Competitive Differentiation ── */
.differentiators {
  margin-top: 64px;
  display: flex;
  flex-direction: column;
  gap: 0;
}
.diff-item {
  display: grid;
  grid-template-columns: 48px 1fr;
  gap: 28px;
  align-items: start;
  padding: 36px 0;
  border-bottom: 1px solid var(--light-gray);
}
.diff-item:last-child { border-bottom: none; }
.diff-number {
  font-family: var(--font-display);
  font-size: 1.5rem;
  color: var(--purple-light);
  opacity: 0.5;
}
.diff-item h4 {
  font-family: var(--font-display);
  font-size: 1.2rem;
  margin-bottom: 8px;
  color: var(--charcoal);
}
.diff-item p {
  font-size: 1rem;
  line-height: 1.75;
  color: var(--mid-gray);
  font-weight: 300;
}
 
/* ── Territory Map ── */
.territory-section { position: relative; }
.territory-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 80px;
  align-items: start;
  margin-top: 64px;
}
.territory-markets {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 16px;
}
.market-tag {
  background: rgba(255,255,255,0.06);
  border: 1px solid rgba(255,255,255,0.1);
  border-radius: 8px;
  padding: 16px 20px;
  font-size: 0.9rem;
  font-weight: 500;
  color: rgba(255,255,255,0.85);
  transition: all 0.3s ease;
  cursor: default;
}
.market-tag:hover {
  border-color: var(--gold);
  background: rgba(238, 178, 17, 0.08);
  color: white;
}
.market-tag .state {
  display: block;
  font-size: 0.7rem;
  color: var(--gold);
  text-transform: uppercase;
  letter-spacing: 0.1em;
  margin-bottom: 4px;
}
.territory-note {
  margin-top: 32px;
  padding: 24px;
  background: rgba(244, 123, 32, 0.08);
  border-left: 3px solid var(--orange);
  border-radius: 0 8px 8px 0;
  font-size: 0.9rem;
  color: rgba(255,255,255,0.7);
  font-weight: 300;
  line-height: 1.6;
}
.territory-search {
  position: relative;
  margin-bottom: 24px;
}
.territory-search-icon {
  position: absolute;
  left: 16px;
  top: 50%;
  transform: translateY(-50%);
  pointer-events: none;
}
.territory-search input {
  width: 100%;
  background: rgba(255,255,255,0.06);
  border: 1px solid rgba(255,255,255,0.12);
  border-radius: 10px;
  padding: 14px 16px 14px 44px;
  color: white;
  font-family: var(--font-body);
  font-size: 0.95rem;
  font-weight: 400;
  outline: none;
  transition: all 0.3s ease;
}
.territory-search input::placeholder {
  color: rgba(255,255,255,0.3);
}
.territory-search input:focus {
  border-color: var(--gold);
  background: rgba(255,255,255,0.08);
  box-shadow: 0 0 0 2px rgba(238, 178, 17, 0.12);
}
.market-tag.hidden {
  display: none;
}
.market-tag.highlight {
  border-color: var(--gold);
  background: rgba(238, 178, 17, 0.1);
  color: white;
}
.territory-no-results {
  display: none;
  padding: 32px 24px;
  text-align: center;
  color: rgba(255,255,255,0.5);
  font-size: 0.95rem;
  font-weight: 300;
  line-height: 1.6;
}
.territory-no-results.visible {
  display: block;
}
.territory-no-results a {
  color: var(--gold);
  text-decoration: none;
  font-weight: 500;
  transition: color 0.2s ease;
}
.territory-no-results a:hover {
  color: var(--orange);
}
 
/* ── Investment Section ── */
.investment-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 48px;
  margin-top: 64px;
}
.invest-card {
  background: white;
  border-radius: 12px;
  padding: 40px;
  border: 1px solid var(--light-gray);
  display: flex;
  flex-direction: column;
  gap: 8px;
}
.invest-card .label {
  font-size: 0.75rem;
  text-transform: uppercase;
  letter-spacing: 0.12em;
  color: var(--mid-gray);
  font-weight: 600;
}
.invest-card .value {
  font-family: var(--font-display);
  font-size: 1.75rem;
  color: var(--purple);
}
.invest-card .note {
  font-size: 0.9rem;
  color: var(--mid-gray);
  font-weight: 300;
  line-height: 1.5;
}
.invest-footnote {
  margin-top: 40px;
  font-size: 0.9rem;
  color: var(--mid-gray);
  font-weight: 300;
  line-height: 1.7;
  font-style: italic;
}
 
/* ── Partnership Tiers ── */
.tiers {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 28px;
  margin-top: 64px;
}
.tier-card {
  background: rgba(255,255,255,0.04);
  border: 1px solid rgba(255,255,255,0.1);
  border-radius: 16px;
  padding: 44px 36px;
  transition: all 0.4s ease;
  position: relative;
  overflow: hidden;
}
.tier-card::after {
  content: '';
  position: absolute; bottom: 0; left: 0; right: 0;
  height: 3px;
  background: linear-gradient(90deg, var(--orange), var(--gold));
  transform: scaleX(0);
  transition: transform 0.4s ease;
}
.tier-card:hover { background: rgba(255,255,255,0.07); transform: translateY(-4px); }
.tier-card:hover::after { transform: scaleX(1); }
.tier-card h4 {
  font-family: var(--font-display);
  font-size: 1.25rem;
  color: var(--gold);
  margin-bottom: 16px;
}
.tier-card p {
  font-size: 0.95rem;
  line-height: 1.75;
  color: rgba(255,255,255,0.6);
  font-weight: 300;
}
 
/* ── Leadership ── */
.team-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 36px;
  margin-top: 64px;
}
.team-card {
  text-align: center;
}
.team-photo {
  width: 180px; height: 180px;
  border-radius: 50%;
  background: linear-gradient(135deg, var(--purple-light) 0%, var(--purple-dark) 100%);
  margin: 0 auto 24px;
  display: flex; align-items: center; justify-content: center;
  font-family: var(--font-display);
  font-size: 2.5rem;
  color: rgba(255,255,255,0.3);
  position: relative;
  overflow: hidden;
}
.team-photo::after {
  content: '';
  position: absolute; inset: 0;
  border-radius: 50%;
  border: 2px solid rgba(238, 178, 17, 0.2);
  transition: border-color 0.3s ease;
}
.team-card:hover .team-photo::after { border-color: var(--gold); }
.team-card h4 {
  font-family: var(--font-display);
  font-size: 1.15rem;
  margin-bottom: 4px;
}
.team-card .role {
  font-size: 0.85rem;
  color: var(--orange);
  font-weight: 600;
  letter-spacing: 0.04em;
  margin-bottom: 12px;
}
.team-card p {
  font-size: 0.9rem;
  line-height: 1.7;
  color: var(--mid-gray);
  font-weight: 300;
  max-width: 300px;
  margin: 0 auto;
}
 
/* ── Video Wall ── */
.video-wall {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 24px;
  margin-top: 64px;
}
.video-card {
  border-radius: 12px;
  overflow: hidden;
  background: rgba(255,255,255,0.04);
  border: 1px solid rgba(255,255,255,0.08);
  transition: all 0.4s ease;
  cursor: pointer;
}
.video-card:hover {
  transform: translateY(-6px);
  border-color: rgba(244, 123, 32, 0.3);
  box-shadow: 0 20px 60px rgba(0,0,0,0.3);
}
.video-thumb {
  aspect-ratio: 16/9;
  background: linear-gradient(135deg, var(--purple-dark) 0%, var(--charcoal) 100%);
  background-size: cover;
  background-position: center;
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
}
.video-thumb::before {
  content: '';
  position: absolute; inset: 0;
  background: rgba(0,0,0,0.2);
  transition: background 0.3s ease;
}
.video-card:hover .video-thumb::before { background: rgba(106, 44, 145, 0.3); }
.play-btn {
  width: 56px; height: 56px;
  border-radius: 50%;
  background: rgba(255,255,255,0.15);
  backdrop-filter: blur(10px);
  display: flex; align-items: center; justify-content: center;
  position: relative; z-index: 2;
  transition: all 0.3s ease;
  border: 1px solid rgba(255,255,255,0.2);
}
.video-card:hover .play-btn { background: var(--orange); border-color: var(--orange); transform: scale(1.1); }
.play-btn svg { fill: white; margin-left: 3px; }
.video-info { padding: 20px 24px; }
.video-info h4 {
  font-family: var(--font-display);
  font-size: 1.05rem;
  color: white;
  margin-bottom: 2px;
}
.video-info .meta {
  font-size: 0.8rem;
  color: var(--gold);
  font-weight: 600;
  letter-spacing: 0.04em;
  margin-bottom: 8px;
}
.video-info .teaser {
  font-size: 0.9rem;
  color: rgba(255,255,255,0.55);
  font-weight: 300;
  font-style: italic;
  line-height: 1.5;
}
 
/* ── Support Infrastructure ── */
.support-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 28px;
  margin-top: 64px;
}
.support-card {
  padding: 36px;
  border-radius: 12px;
  background: white;
  border: 1px solid var(--light-gray);
  transition: all 0.4s ease;
}
.support-card:hover {
  border-color: var(--purple-light);
  box-shadow: 0 12px 40px rgba(106, 44, 145, 0.08);
  transform: translateY(-3px);
}
.support-icon {
  width: 44px; height: 44px;
  border-radius: 10px;
  background: linear-gradient(135deg, var(--purple) 0%, var(--purple-light) 100%);
  display: flex; align-items: center; justify-content: center;
  margin-bottom: 20px;
  font-size: 1.2rem;
}
.support-card h4 {
  font-family: var(--font-display);
  font-size: 1.1rem;
  margin-bottom: 10px;
  color: var(--charcoal);
}
.support-card p {
  font-size: 0.9rem;
  line-height: 1.7;
  color: var(--mid-gray);
  font-weight: 300;
}
 
/* ── Fit Section ── */
.fit-list {
  margin-top: 48px;
  display: flex;
  flex-direction: column;
  gap: 0;
}
.fit-item {
  display: flex;
  gap: 20px;
  align-items: start;
  padding: 28px 0;
  border-bottom: 1px solid rgba(255,255,255,0.08);
}
.fit-item:last-child { border-bottom: none; }
.fit-check {
  width: 28px; height: 28px;
  border-radius: 50%;
  background: rgba(238, 178, 17, 0.12);
  display: flex; align-items: center; justify-content: center;
  flex-shrink: 0;
  margin-top: 2px;
  color: var(--gold);
  font-size: 0.8rem;
  font-weight: 700;
}
.fit-item p {
  font-size: 1.05rem;
  line-height: 1.7;
  color: rgba(255,255,255,0.75);
  font-weight: 300;
}
.fit-item p strong { color: white; font-weight: 600; }
 
/* ── Process ── */
.process-steps {
  display: grid;
  grid-template-columns: repeat(5, 1fr);
  gap: 0;
  margin-top: 64px;
  position: relative;
}
.process-steps::before {
  content: '';
  position: absolute;
  top: 32px;
  left: 10%;
  right: 10%;
  height: 2px;
  background: linear-gradient(90deg, var(--purple-light), var(--orange), var(--gold));
  opacity: 0.3;
}
.step {
  text-align: center;
  position: relative;
  padding: 0 12px;
}
.step-number {
  width: 64px; height: 64px;
  border-radius: 50%;
  background: var(--purple);
  display: flex; align-items: center; justify-content: center;
  margin: 0 auto 20px;
  font-family: var(--font-display);
  font-size: 1.3rem;
  color: var(--gold);
  position: relative;
  z-index: 2;
  border: 3px solid var(--cream);
}
.step h4 {
  font-family: var(--font-display);
  font-size: 1rem;
  margin-bottom: 8px;
}
.step p {
  font-size: 0.85rem;
  line-height: 1.6;
  color: var(--mid-gray);
  font-weight: 300;
}
 
/* ── Press Bar ── */
.press-bar {
  padding: 48px 0;
  background: var(--dark-gray);
  position: relative;
}
.press-bar::before {
  content: '';
  position: absolute; inset: 0;
  background: linear-gradient(135deg, rgba(106, 44, 145, 0.06) 0%, transparent 50%, rgba(238, 178, 17, 0.04) 100%);
}
.press-inner {
  max-width: 1200px; margin: 0 auto; padding: 0 40px;
  text-align: center;
  position: relative;
}
.press-label {
  font-size: 0.7rem;
  font-weight: 700;
  letter-spacing: 0.2em;
  text-transform: uppercase;
  color: rgba(255,255,255,0.35);
  margin-bottom: 28px;
}
.press-logos {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 48px;
  flex-wrap: wrap;
}
.press-logo-img {
  height: 28px;
  width: auto;
  opacity: 0.5;
  filter: brightness(0) invert(1);
  transition: opacity 0.3s ease;
}
.press-logo-img:hover {
  opacity: 0.85;
}
/* Fallback text logos if images aren't ready yet */
.press-logo {
  font-family: var(--font-display);
  font-size: 1.1rem;
  color: rgba(255,255,255,0.35);
  font-style: italic;
  transition: color 0.3s ease;
  white-space: nowrap;
}
.press-logo:hover { color: rgba(255,255,255,0.7); }

@media (max-width: 768px) {
  .press-logos { gap: 32px; }
  .press-logo-img { height: 22px; }
}
 
/* ── Lead Form Section ── */
.form-section {
  padding: 120px 0;
  background: var(--charcoal);
  color: white;
  position: relative;
  overflow: hidden;
}
.form-section::before {
  content: '';
  position: absolute;
  top: -200px; right: -200px;
  width: 600px; height: 600px;
  border-radius: 50%;
  background: radial-gradient(circle, rgba(106, 44, 145, 0.2) 0%, transparent 70%);
}
.form-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 80px;
  align-items: start;
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 40px;
  position: relative;
}
.form-left h2 {
  font-family: var(--font-display);
  font-size: clamp(2.2rem, 4vw, 3rem);
  line-height: 1.15;
  letter-spacing: -0.025em;
  margin-bottom: 20px;
  color: white;
}
.form-left h2 em { font-style: italic; color: var(--orange); }
.form-left p {
  font-size: 1.05rem;
  line-height: 1.7;
  color: rgba(255,255,255,0.6);
  font-weight: 300;
  margin-bottom: 16px;
}
.form-reassurance {
  margin-top: 32px;
  padding: 20px 24px;
  border-left: 2px solid var(--gold);
  font-size: 0.9rem;
  color: rgba(255,255,255,0.5);
  font-weight: 300;
  line-height: 1.6;
  font-style: italic;
}
.form-right-wrapper {
  background: white;
  border-radius: 16px;
}
 
/* ── Video Lightbox Modal ── */
.video-modal {
  display: none;
  position: fixed;
  inset: 0;
  z-index: 9999;
  align-items: center;
  justify-content: center;
}
.video-modal.active {
  display: flex;
}
.video-modal-backdrop {
  position: absolute;
  inset: 0;
  background: rgba(0, 0, 0, 0.85);
  backdrop-filter: blur(8px);
  animation: modalFadeIn 0.3s ease;
}
.video-modal-content {
  position: relative;
  width: 90%;
  max-width: 960px;
  z-index: 2;
  animation: modalSlideUp 0.4s cubic-bezier(0.16, 1, 0.3, 1);
}
.video-modal-close {
  position: absolute;
  top: -48px;
  right: 0;
  width: 40px;
  height: 40px;
  border: none;
  background: rgba(255,255,255,0.1);
  color: white;
  font-size: 1.5rem;
  border-radius: 50%;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: all 0.3s ease;
  line-height: 1;
}
.video-modal-close:hover {
  background: rgba(255,255,255,0.2);
  transform: scale(1.1);
}
.video-modal-player {
  position: relative;
  padding-bottom: 56.25%; /* 16:9 */
  height: 0;
  border-radius: 12px;
  overflow: hidden;
  background: #000;
  box-shadow: 0 24px 80px rgba(0,0,0,0.5);
}
.video-modal-player iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
@keyframes modalFadeIn {
  from { opacity: 0; }
  to { opacity: 1; }
}
@keyframes modalSlideUp {
  from { opacity: 0; transform: translateY(24px) scale(0.96); }
  to { opacity: 1; transform: translateY(0) scale(1); }
}

/* ── Footer ── */
footer {
  background: var(--charcoal);
  border-top: 1px solid rgba(255,255,255,0.06);
  padding: 40px 0;
  text-align: center;
}
footer p {
  font-size: 0.8rem;
  color: rgba(255,255,255,0.3);
  font-weight: 300;
}
 
/* ── Scroll Animations ── */
.reveal {
  opacity: 0;
  transform: translateY(32px);
  transition: all 0.8s cubic-bezier(0.16, 1, 0.3, 1);
}
.reveal.visible {
  opacity: 1;
  transform: translateY(0);
}
 
/* ── Responsive ── */
@media (max-width: 1024px) {
  .stats-inner { grid-template-columns: repeat(3, 1fr); }
  .stat-item:nth-child(3) { border-right: none; }
  .why-now-grid, .legacy-grid, .territory-grid, .form-grid { grid-template-columns: 1fr; gap: 48px; }
  .tiers, .team-grid, .support-grid, .video-wall { grid-template-columns: repeat(2, 1fr); }
  .process-steps { grid-template-columns: repeat(3, 1fr); gap: 28px; }
  .process-steps::before { display: none; }
}
@media (max-width: 768px) {
  .container, .container-narrow { padding: 0 24px; }
  .section { padding: 80px 0; }
  .hero-content { padding: 120px 24px 80px; }
  .stats-inner { grid-template-columns: repeat(2, 1fr); }
  .stat-item:nth-child(2n) { border-right: none; }
  .model-features { grid-template-columns: 1fr; }
  .tiers, .team-grid, .support-grid, .video-wall { grid-template-columns: 1fr; }
  .investment-grid { grid-template-columns: 1fr; }
  .territory-markets { grid-template-columns: 1fr; }
  .process-steps { grid-template-columns: 1fr; gap: 20px; }
  .form-grid { grid-template-columns: 1fr; padding: 0 24px; }
  .hero-ctas { flex-direction: column; }
  .legacy-stats { grid-template-columns: 1fr 1fr; }
  nav .nav-inner { padding: 0 24px; }
}
</style>
</head>
<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <a href="#main-content" class="skip-link">Skip to content</a>
 
<!-- Navigation -->
<nav id="nav">
  <div class="nav-inner">
    <a href="#" class="nav-logo">Flying Biscuit <span>Café</span></a>
    <a href="#contact" class="nav-cta">Request the FDD</a>
  </div>
</nav>
 
<!-- Hero -->
<section class="hero" id="main-content">
  <div class="hero-content">
    <div class="hero-eyebrow">Franchise Development</div>
    <h1>The Breakfast Franchise Built for <em>Empire Builders</em></h1>
    <p class="hero-sub">40+ locations. ~$2M AUV. Prime territories available. From the creators of Moe's Southwest Grill — Flying Biscuit Café is entering its next phase of national growth, and we're looking for the right partners to own it.</p>
    <div class="hero-ctas">
      <a href="#contact" class="btn-primary">
        Request the FDD
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10m0 0L9 4m4 4L9 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
      </a>
      <a href="#contact" class="btn-secondary">Schedule a Call with Andrew</a>
    </div>
  </div>
</section>
 
<!-- Stats Bar -->
<div class="stats-bar">
  <div class="stats-inner">
    <div class="stat-item"><div class="stat-number">30+</div><div class="stat-label">Years of Brand History</div></div>
    <div class="stat-item"><div class="stat-number">40+</div><div class="stat-label">Locations</div></div>
    <div class="stat-item"><div class="stat-number">~$2M</div><div class="stat-label">Avg. Unit Volume</div></div>
    <div class="stat-item"><div class="stat-number">700+</div><div class="stat-label">Units Scaled at Moe's</div></div>
    <div class="stat-item"><div class="stat-number">B&L</div><div class="stat-label">Breakfast &amp; Lunch Daypart</div></div>
    <div class="stat-item"><div class="stat-number">Now</div><div class="stat-label">Prime Territories Open</div></div>
  </div>
</div>

<!-- Press / Recognition Bar -->
<div class="press-bar">
  <div class="press-inner">
    <div class="press-label">As Featured In</div>
    <div class="press-logos">
      <!-- Replace each src with your actual logo image paths -->
      <img class="press-logo-img" src="<?php echo get_theme_file_uri('images/press/southern-living.png'); ?>" alt="Southern Living">
      <img class="press-logo-img" src="<?php echo get_theme_file_uri('images/press/franchise-times.png'); ?>" alt="Franchise Times">
      <img class="press-logo-img" src="<?php echo get_theme_file_uri('images/press/entrepreneur.png'); ?>" alt="Entrepreneur">
      <img class="press-logo-img" src="<?php echo get_theme_file_uri('images/press/qsr-magazine.png'); ?>" alt="QSR Magazine">
      <img class="press-logo-img" src="<?php echo get_theme_file_uri('images/press/nrn.png'); ?>" alt="Nation's Restaurant News">
    </div>
  </div>
</div>
 
<!-- Why Now Section -->
<section class="section section-cream">
  <div class="container">
    <div class="reveal">
      <div class="section-eyebrow">The Opportunity</div>
      <div class="section-title">You Know What the 40-to-150 <em>Phase Means</em></div>
    </div>
    <div class="why-now-grid">
      <div class="why-now-text reveal">
        <p>If you've built a multi-unit portfolio before, you already know — the real wealth in franchising isn't made at unit 500. It's made when you get in during the growth phase, lock down a region, and build before the territory map fills up.</p>
        <p>Flying Biscuit Café is in that phase right now. With 40+ units, three decades of brand equity, and an aggressive Southeast expansion strategy, <strong>the window is open for operators and investors who move decisively.</strong></p>
        <p>This is not an unproven concept. It's not a startup dressed up in franchise clothing. It's a 30-year brand with the unit economics, the leadership team, and the macro tailwinds to scale — and you can still get the territory you want.</p>
      </div>
      <div class="why-now-highlights reveal">
        <div class="highlight-card">
          <h4>$14.4 Billion Market</h4>
          <p>The breakfast restaurant and diner segment posted 5.2% growth in a single year — even against inflationary pressure. This is the macro thesis institutional capital is building around.</p>
        </div>
        <div class="highlight-card">
          <h4>Growth Phase Window</h4>
          <p>The 40-to-150 location phase is where generational franchise wealth is created. Once the territory map fills, the opportunity shifts from builder to buyer — at a premium.</p>
        </div>
        <div class="highlight-card">
          <h4>Proven Leadership</h4>
          <p>The team behind this expansion built Moe's Southwest Grill from a single location to 700+ units. They've navigated this exact growth phase before.</p>
        </div>
      </div>
    </div>
  </div>
</section>
 
<!-- The Model Section -->
<section class="section section-dark">
  <div class="container">
    <div class="reveal">
      <div class="section-eyebrow">The Model</div>
      <div class="section-title">A Simpler, Stronger <em>Restaurant Model</em></div>
      <p class="section-subtitle">Built for predictability, optimized for scale, and designed to avoid every operational headache you've experienced in full-service concepts.</p>
    </div>
    <div class="model-features">
      <div class="model-feature reveal">
        <div class="model-feature-icon">📈</div>
        <h4>~$2M Average Unit Volume</h4>
        <p>Consistent, underwritable performance across the system. The kind of top-line revenue that makes multi-unit economics work at scale.</p>
      </div>
      <div class="model-feature reveal">
        <div class="model-feature-icon">🌅</div>
        <h4>Breakfast & Lunch Daypart Only</h4>
        <p>No late nights. No 2am closing shifts. A streamlined beverage program built for the daypart — brunch cocktails, specialty coffee drinks, and a growing espresso menu driving higher check averages without full-bar complexity. Your units are open, profitable, and closed by mid-afternoon.</p>
      </div>
      <div class="model-feature reveal">
        <div class="model-feature-icon">🎯</div>
        <h4>Streamlined Menu, Contained Complexity</h4>
        <p>Lower SKU count means tighter food costs, faster ticket times, and a labor model that's easier to staff and manage than any full-service dinner concept.</p>
      </div>
      <div class="model-feature reveal">
        <div class="model-feature-icon">🔗</div>
        <h4>National Vendor Agreements</h4>
        <p>A centralized purchasing program leveraging 40+ locations of buying power. You're not negotiating with suppliers solo — you're buying through a system optimized over three decades.</p>
      </div>
    </div>
  </div>
</section>
 
<!-- Competitive Differentiation -->
<section class="section">
  <div class="container-narrow">
    <div class="reveal">
      <div class="section-eyebrow">Competitive Edge</div>
      <div class="section-title">Why Flying Biscuit — and Not the Other Concepts <em>on Your List</em></div>
      <p class="section-subtitle">You're evaluating breakfast franchise opportunities. We know we're not the only brand on your radar. Here's what separates us.</p>
    </div>
    <div class="differentiators">
      <div class="diff-item reveal">
        <div class="diff-number">01</div>
        <div>
          <h4>30 Years of Brand Equity That Money Can't Replicate</h4>
          <p>Most breakfast franchises are less than a decade old. Flying Biscuit has been building a loyal, emotionally connected guest base since 1993. That translates to lower customer acquisition costs, stronger grand opening performance, and a brand that doesn't need to explain itself to the consumer.</p>
        </div>
      </div>
      <div class="diff-item reveal">
        <div class="diff-number">02</div>
        <div>
          <h4>A Leadership Team That's Already Built a National Brand</h4>
          <p>This is not a first-time franchisor learning on your dime. Flying Biscuit's growth is led by the team behind Moe's Southwest Grill — a brand they scaled from a single unit to 700+ locations.</p>
        </div>
      </div>
      <div class="diff-item reveal">
        <div class="diff-number">03</div>
        <div>
          <h4>A True Breakfast-and-Lunch Model Without Daypart Creep</h4>
          <p>Some competitors have started expanding into dinner, adding full-bar operations, and extending hours — drifting toward the operational complexity you're trying to avoid. Flying Biscuit takes the opposite approach: a focused brunch cocktail program, a growing specialty espresso menu with premium drinks like the Pistachio Latte, and none of the late-night inventory management of a full liquor operation. Higher check averages, contained complexity.</p>
        </div>
      </div>
      <div class="diff-item reveal">
        <div class="diff-number">04</div>
        <div>
          <h4>Cult-Level Brand Affection</h4>
          <p>This isn't a generic breakfast chain. Flying Biscuit has the kind of passionate, organic consumer following that drives repeat visits, word-of-mouth marketing, and a built-in grand opening buzz when you enter a new market.</p>
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
        <p>But what makes this a franchise opportunity — not just a beloved restaurant — is the team behind the growth. Flying Biscuit's expansion is led by the same people who built Moe's Southwest Grill from a single location into a 700+ unit national brand. They've done this before. They know what the path from 40 to 150 looks like because they've already walked it.</p>
      </div>
      <div class="legacy-stats reveal">
        <div class="legacy-stat"><div class="number">1993</div><div class="label">Founded</div></div>
        <div class="legacy-stat"><div class="number">40+</div><div class="label">Locations</div></div>
        <div class="legacy-stat"><div class="number">700+</div><div class="label">Units at Moe's</div></div>
        <div class="legacy-stat"><div class="number">~$2M</div><div class="label">Average Unit Volume</div></div>
      </div>
    </div>
  </div>
</section>
 
<!-- Territory Section -->
<section class="section section-dark territory-section">
  <div class="container">
    <div class="reveal">
      <div class="section-eyebrow">Available Markets</div>
      <div class="section-title">Priority Markets Are Open. <em>Not for Long.</em></div>
      <p class="section-subtitle">Flying Biscuit Café is actively expanding across the Southeast and into select new regions. These are our highest-priority growth markets.</p>
    </div>
    <div class="territory-grid">
      <div class="reveal">
        <div class="territory-search">
          <svg class="territory-search-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><circle cx="7.5" cy="7.5" r="5.5" stroke="rgba(255,255,255,0.4)" stroke-width="1.5"/><path d="M12 12l4 4" stroke="rgba(255,255,255,0.4)" stroke-width="1.5" stroke-linecap="round"/></svg>
          <input type="text" id="marketSearch" placeholder="Search by city, state, or metro..." autocomplete="off">
        </div>
        <div class="territory-markets" id="territoryMarkets">
          <div class="market-tag"><span class="state">Florida</span>Tampa · Orlando · Jacksonville · South Florida</div>
          <div class="market-tag"><span class="state">Texas</span>Houston · DFW · Austin · San Antonio</div>
          <div class="market-tag"><span class="state">North Carolina</span>Raleigh-Durham · Charlotte · Triad</div>
          <div class="market-tag"><span class="state">Tennessee</span>Nashville · Memphis · Knoxville</div>
          <div class="market-tag"><span class="state">Virginia</span>Richmond · Hampton Roads · NoVA</div>
          <div class="market-tag"><span class="state">South Carolina</span>Charleston · Greenville · Columbia</div>
          <div class="market-tag"><span class="state">Alabama</span>Birmingham · Huntsville</div>
          <div class="market-tag"><span class="state">Louisiana</span>New Orleans · Baton Rouge</div>
          <div class="market-tag"><span class="state">Georgia</span>Additional ATL Metro · Savannah · Augusta</div>
        </div>
        <div class="territory-no-results" id="territoryNoResults">
          No markets match your search — but we may have opportunities in development. <a href="#contact">Reach out to Andrew</a> to discuss your target market.
        </div>
      </div>
      <div class="reveal">
        <div class="territory-note">This list reflects current availability and changes as agreements are signed. If your target market isn't listed, reach out — we may have opportunities in development.</div>
        <div style="margin-top: 32px;">
          <a href="#contact" class="btn-primary">Check Territory Availability</a>
        </div>
      </div>
    </div>
  </div>
</section>
 
<!-- Investment Section -->
<section class="section">
  <div class="container">
    <div class="reveal">
      <div class="section-eyebrow">The Investment</div>
      <div class="section-title">The Numbers <em>at a Glance</em></div>
      <p class="section-subtitle">We know you're running the math before you ever pick up the phone.</p>
    </div>
    <div class="investment-grid reveal">
      <div class="invest-card">
        <div class="label">Total Investment Per Unit</div>
        <div class="value">$XXX,XXX – $X,XXX,XXX*</div>
        <div class="note">Complete investment details in our FDD</div>
      </div>
      <div class="invest-card">
        <div class="label">Franchise Fee</div>
        <div class="value">$XX,XXX</div>
        <div class="note">Reduced fees for multi-unit commitments</div>
      </div>
      <div class="invest-card">
        <div class="label">Liquid Capital Requirement</div>
        <div class="value">$XXX,XXX+</div>
        <div class="note">Minimum liquid assets</div>
      </div>
      <div class="invest-card">
        <div class="label">Multi-Unit Agreements</div>
        <div class="value">3–10+ Units</div>
        <div class="note">Depending on market size and commitment</div>
      </div>
    </div>
    <p class="invest-footnote reveal">*These figures are for planning purposes. Complete investment details, including all assumptions and ranges, are provided in our Franchise Disclosure Document. For multi-unit area development commitments, we structure deals with scaled franchise fees and development timelines tailored to your market and build-out capacity.</p>
  </div>
</section>
 
<!-- Partnership Tiers -->
<section class="section section-purple">
  <div class="container">
    <div class="reveal">
      <div class="section-eyebrow">Partnership Structure</div>
      <div class="section-title">We're Looking for Partners, <em>Not Passive Franchisees</em></div>
      <p class="section-subtitle">Our franchise development team operates more like a deal desk than a sales floor. We structure agreements to match the scale and sophistication of our partners.</p>
    </div>
    <div class="tiers">
      <div class="tier-card reveal">
        <h4>Multi-Unit Area Development</h4>
        <p>Commit to 5–10+ units across a defined market with a negotiated build-out schedule, reduced per-unit fees at scale, and exclusive territory protection.</p>
      </div>
      <div class="tier-card reveal">
        <h4>Flexible Ownership Structures</h4>
        <p>We work with LLCs, holding companies, family offices, and PE-backed operating groups. If you install a qualified operating partner, we'll have a real conversation about semi-absentee and absentee models.</p>
      </div>
      <div class="tier-card reveal">
        <h4>Strategic Market Partnerships</h4>
        <p>If you know your metro better than anyone — the real estate, the labor pool, the landlords — we want that expertise at the table. We bring the brand, the systems, and the menu. You bring the market knowledge and the speed.</p>
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
      <p class="section-subtitle" style="margin: 0 auto;">A franchise leadership team with a proven track record of scaling restaurant brands from regional concepts to national platforms.</p>
    </div>
    <div class="team-grid">
      <div class="team-card reveal">
        <div class="team-photo">CEO</div>
        <h4>[President/CEO Name]</h4>
        <div class="role">President & CEO</div>
        <p>Instrumental in building Moe's Southwest Grill from its founding into a 700+ unit national franchise system. Hands-on approach to brand development that franchise partners experience directly.</p>
      </div>
      <div class="team-card reveal">
        <div class="team-photo">AS</div>
        <h4>Andrew Scherzer</h4>
        <div class="role">Director of Franchise Development</div>
        <p>Your first point of contact. Andrew approaches franchise development as deal-making, not sales — speaking the language of unit economics, territory strategy, and portfolio-level thinking.</p>
      </div>
      <div class="team-card reveal">
        <div class="team-photo">VP</div>
        <h4>[VP of Operations Name]</h4>
        <div class="role">VP of Operations</div>
        <p>Oversees the operational infrastructure that supports franchisees from pre-opening through stabilization. Built to scale whether you're opening your first location or your tenth.</p>
      </div>
    </div>
  </div>
</section>
 
<!-- Video Wall -->
<section class="section section-dark">
  <div class="container">
    <div class="reveal" style="text-align: center;">
      <div class="section-eyebrow">Franchisee Stories</div>
      <div class="section-title">Hear It Directly from <em>Our Partners</em></div>
      <p class="section-subtitle" style="margin: 0 auto;">We could tell you the model works. They'll show you.</p>
    </div>
    <div class="video-wall">
      <!-- Replace each data-video-id with the actual YouTube video ID -->
      <!-- Replace each image filename (franchisee-1.jpg, etc.) with your actual image filenames in the theme's images folder -->
      <div class="video-card reveal" data-video-id="YOUR_YOUTUBE_ID_1">
        <div class="video-thumb" style="background-image: url('<?php echo get_theme_file_uri('images/franchisee-1.jpg'); ?>');">
          <div class="play-btn"><svg width="18" height="18" viewBox="0 0 18 18"><polygon points="5,3 15,9 5,15" fill="white"/></svg></div>
        </div>
        <div class="video-info">
          <h4>[Franchisee Name]</h4>
          <div class="meta">[X]-Unit Operator · [Market]</div>
          <div class="teaser">"I ran dinner-service restaurants for 15 years. This is a different life."</div>
        </div>
      </div>
      <div class="video-card reveal" data-video-id="YOUR_YOUTUBE_ID_2">
        <div class="video-thumb" style="background-image: url('<?php echo get_theme_file_uri('images/franchisee-2.jpg'); ?>');">
          <div class="play-btn"><svg width="18" height="18" viewBox="0 0 18 18"><polygon points="5,3 15,9 5,15" fill="white"/></svg></div>
        </div>
        <div class="video-info">
          <h4>[Franchisee Name]</h4>
          <div class="meta">[X]-Unit Operator · [Market]</div>
          <div class="teaser">"We opened our third location 14 months after signing the agreement."</div>
        </div>
      </div>
      <div class="video-card reveal" data-video-id="YOUR_YOUTUBE_ID_3">
        <div class="video-thumb" style="background-image: url('<?php echo get_theme_file_uri('images/franchisee-3.jpg'); ?>');">
          <div class="play-btn"><svg width="18" height="18" viewBox="0 0 18 18"><polygon points="5,3 15,9 5,15" fill="white"/></svg></div>
        </div>
        <div class="video-info">
          <h4>[Franchisee Name]</h4>
          <div class="meta">[X]-Unit Operator · [Market]</div>
          <div class="teaser">"I looked at every breakfast concept on the market. The economics here weren't close."</div>
        </div>
      </div>
      <div class="video-card reveal" data-video-id="YOUR_YOUTUBE_ID_4">
        <div class="video-thumb" style="background-image: url('<?php echo get_theme_file_uri('images/franchisee-4.jpg'); ?>');">
          <div class="play-btn"><svg width="18" height="18" viewBox="0 0 18 18"><polygon points="5,3 15,9 5,15" fill="white"/></svg></div>
        </div>
        <div class="video-info">
          <h4>[Franchisee Name]</h4>
          <div class="meta">[X]-Unit Operator · [Market]</div>
          <div class="teaser">"The brand already had a following before we even opened the doors."</div>
        </div>
      </div>
      <div class="video-card reveal" data-video-id="YOUR_YOUTUBE_ID_5">
        <div class="video-thumb" style="background-image: url('<?php echo get_theme_file_uri('images/franchisee-5.jpg'); ?>');">
          <div class="play-btn"><svg width="18" height="18" viewBox="0 0 18 18"><polygon points="5,3 15,9 5,15" fill="white"/></svg></div>
        </div>
        <div class="video-info">
          <h4>[Franchisee Name]</h4>
          <div class="meta">[X]-Unit Operator · [Market]</div>
          <div class="teaser">"My background is in private equity. The unit-level returns are why I'm here."</div>
        </div>
      </div>
      <div class="video-card reveal" data-video-id="YOUR_YOUTUBE_ID_6">
        <div class="video-thumb" style="background-image: url('<?php echo get_theme_file_uri('images/franchisee-6.jpg'); ?>');">
          <div class="play-btn"><svg width="18" height="18" viewBox="0 0 18 18"><polygon points="5,3 15,9 5,15" fill="white"/></svg></div>
        </div>
        <div class="video-info">
          <h4>[Franchisee Name]</h4>
          <div class="meta">[X]-Unit Operator · [Market]</div>
          <div class="teaser">"I own car washes, med spas, and now three Flying Biscuits. It fits the portfolio."</div>
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
      <div class="section-title">The Systems Behind <em>Every Unit</em></div>
      <p class="section-subtitle" style="margin: 0 auto;">Sophisticated operators don't need hand-holding. But they need to know the franchisor won't become a bottleneck when you're building out multiple units on a compressed timeline.</p>
    </div>
    <div class="support-grid">
      <div class="support-card reveal">
        <div class="support-icon">🏗</div>
        <h4>Pre-Opening Support</h4>
        <p>Dedicated support from site selection through construction, permitting, and pre-opening marketing. 40+ openings have refined this playbook.</p>
      </div>
      <div class="support-card reveal">
        <div class="support-icon">🎓</div>
        <h4>Training Program</h4>
        <p>Comprehensive training for owners, operating partners, and GMs. Structured to get your team operational without requiring you behind the line.</p>
      </div>
      <div class="support-card reveal">
        <div class="support-icon">📊</div>
        <h4>Ongoing Field Support</h4>
        <p>Dedicated franchise business consultants reviewing P&L performance, coaching improvements, and ensuring brand consistency as you scale.</p>
      </div>
      <div class="support-card reveal">
        <div class="support-icon">💻</div>
        <h4>Technology & Systems</h4>
        <p>Standardized POS, inventory management, and reporting that gives real-time visibility into unit-level performance across your portfolio.</p>
      </div>
      <div class="support-card reveal">
        <div class="support-icon">📣</div>
        <h4>Marketing Playbook</h4>
        <p>National brand marketing plus a local store marketing toolkit and built-in grand opening programs to maximize launch performance.</p>
      </div>
      <div class="support-card reveal">
        <div class="support-icon">🔗</div>
        <h4>Supply Chain</h4>
        <p>National vendor agreements and centralized purchasing leveraging 40+ locations. Optimized over three decades of operations.</p>
      </div>
    </div>
  </div>
</section>
 
<!-- Is This the Right Fit? -->
<section class="section section-dark">
  <div class="container-narrow">
    <div class="reveal">
      <div class="section-eyebrow">Ideal Partners</div>
      <div class="section-title">Is This the <em>Right Fit?</em></div>
    </div>
    <div class="fit-list">
      <div class="fit-item reveal">
        <div class="fit-check">✓</div>
        <p><strong>You've built and scaled businesses before</strong> — whether that's a multi-unit franchise portfolio in another brand, a portfolio of local businesses across a single metro, or a restaurant group you've recently exited.</p>
      </div>
      <div class="fit-item reveal">
        <div class="fit-check">✓</div>
        <p><strong>You think in terms of platforms, not single units.</strong> You're evaluating Flying Biscuit against the best franchise opportunities in the market and you expect us to show up with data, not just a pitch.</p>
      </div>
      <div class="fit-item reveal">
        <div class="fit-check">✓</div>
        <p><strong>You have the capital to commit meaningfully</strong> — typically $1M+ in liquid assets and the appetite for a 3–10 unit initial development agreement.</p>
      </div>
      <div class="fit-item reveal">
        <div class="fit-check">✓</div>
        <p><strong>You don't need to be taught how to run a business.</strong> You need a brand that can match your speed, your standards, and your ambition.</p>
      </div>
    </div>
  </div>
</section>
 
<!-- Process -->
<section class="section section-cream">
  <div class="container">
    <div class="reveal" style="text-align: center;">
      <div class="section-eyebrow">The Process</div>
      <div class="section-title">How This <em>Works</em></div>
    </div>
    <div class="process-steps">
      <div class="step reveal">
        <div class="step-number">1</div>
        <h4>Request the FDD</h4>
        <p>We send it promptly. No runaround, no six-week drip campaign.</p>
      </div>
      <div class="step reveal">
        <div class="step-number">2</div>
        <h4>Call with Andrew</h4>
        <p>Andrew Scherzer walks you through the opportunity and assesses mutual fit. A real conversation, not a script.</p>
      </div>
      <div class="step reveal">
        <div class="step-number">3</div>
        <h4>Financial Deep Dive</h4>
        <p>Item 19 unit-level economics, segmented and transparent. Territory mapping against your target market.</p>
      </div>
      <div class="step reveal">
        <div class="step-number">4</div>
        <h4>Discovery Day</h4>
        <p>Meet the president and executive team. Visit a high-performing unit. Review POS data. Talk to operators.</p>
      </div>
      <div class="step reveal">
        <div class="step-number">5</div>
        <h4>Agreement</h4>
        <p>We move quickly for partners who are ready. Clear timelines, mutual accountability.</p>
      </div>
    </div>
  </div>
</section>
 
<!-- Lead Form -->
<section class="form-section" id="contact">
  <div class="form-grid">
    <div class="form-left reveal">
      <div class="section-eyebrow" style="color: var(--gold);">Let's Talk</div>
      <h2>Territories Are Filling. <em>Let's Start the Conversation.</em></h2>
      <p>Tell us about your background and target market. Andrew Scherzer, our Director of Franchise Development, will personally review your inquiry and follow up to discuss next steps.</p>
      <p>The best franchise investments are made before the map is full. If you're ready to evaluate the opportunity, we're ready to have a serious conversation.</p>
      <div class="form-reassurance">Every inquiry is reviewed by our franchise development team. Qualified candidates will hear directly from Andrew Scherzer.</div>
    </div>
    <div class="reveal form-right-wrapper">
      <?php echo do_shortcode('[wpforms id="310"]'); ?>
    </div>
  </div>
</section>
 
<!-- Footer -->
<footer>
  <div class="container">
    <p>© 2026 Flying Biscuit Café. All rights reserved. This is not an offer to sell a franchise. An offer can only be made through the delivery of a Franchise Disclosure Document.</p>
  </div>
</footer>
 
<script>
// Nav scroll effect
const nav = document.getElementById('nav');
window.addEventListener('scroll', () => {
  nav.classList.toggle('scrolled', window.scrollY > 50);
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

// Territory market search
const marketSearch = document.getElementById('marketSearch');
const marketTags = document.querySelectorAll('#territoryMarkets .market-tag');
const noResults = document.getElementById('territoryNoResults');

marketSearch.addEventListener('input', () => {
  const query = marketSearch.value.toLowerCase().trim();
  let matchCount = 0;

  marketTags.forEach(tag => {
    const text = tag.textContent.toLowerCase();
    if (!query || text.includes(query)) {
      tag.classList.remove('hidden');
      tag.classList.toggle('highlight', query.length > 0);
      matchCount++;
    } else {
      tag.classList.add('hidden');
      tag.classList.remove('highlight');
    }
  });

  noResults.classList.toggle('visible', matchCount === 0 && query.length > 0);
});

// Video lightbox
const videoModal = document.getElementById('videoModal');
const videoFrame = document.getElementById('videoFrame');
const modalBackdrop = videoModal.querySelector('.video-modal-backdrop');
const modalClose = videoModal.querySelector('.video-modal-close');

document.querySelectorAll('.video-card[data-video-id]').forEach(card => {
  card.addEventListener('click', () => {
    const videoId = card.getAttribute('data-video-id');
    if (videoId && !videoId.startsWith('YOUR_')) {
      videoFrame.src = `https://www.youtube.com/embed/${videoId}?autoplay=1&rel=0`;
      videoModal.classList.add('active');
      document.body.style.overflow = 'hidden';
    }
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
 
<?php wp_footer(); ?>
</body>
</html>