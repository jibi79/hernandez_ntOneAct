	<main>
		<!-- Welcome area. -->
		<section class="hero" aria-labelledby="hero-title"><div class="container hero-content"><p class="eyebrow">Built for the road ahead</p><p class="eyebrow welcome-message" aria-live="polite">Welcome, <?= htmlspecialchars((string) ($_SESSION['driveCraftUsername'] ?? 'driver'), ENT_QUOTES, 'UTF-8') ?>!</p><h1 id="hero-title">Drive<br>your Dream.</h1><p>Great performance begins with the courage to question what’s possible.</p><a class="btn btn-lime rounded-pill px-4 py-3" href="#featured">Explore models <span aria-hidden="true">→</span></a></div></section>
		<section class="page-title" aria-labelledby="page-title"><p class="eyebrow ">DriveCraft</p><h1 id="page-title">My Dream Cars</h1><p>We don&apos;t pray for love, we just pray for cars.</p></section>
