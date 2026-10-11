	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Explore DriveCraft featured cars.">
	<title>DriveCraft | Featured Cars</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<style>
		/* Showroom colors. */
		:root { --navy: #13222c; --lime: #c8ef51; }
		body { min-width: 320px; color: var(--navy); background: #fff; font-family: Arial, sans-serif; }
		.hero { min-height: 36rem; color: #fff; background: linear-gradient(90deg, rgba(8, 18, 27, .9), rgba(8, 18, 27, .1)), url("https://a.storyblok.com/f/322327/1720x1232/ff2bcd1c00/911-gt3-rs-rear.jpg/m/900x675/smart/filters:format(avif)") center / cover; }
		.hero-content { padding-top: 7rem; padding-bottom: 5rem; }
		.hero h1 { max-width: 8ch; font-size: clamp(4rem, 10vw, 7rem); line-height: .8; text-transform: uppercase; }
		.hero p { max-width: 28rem; color: #d6e0e2; line-height: 1.7; }
		.btn-lime { color: var(--navy); background: var(--lime); border-color: var(--lime); font-weight: 700; }
		.btn-lime:hover, .btn-lime:focus { color: var(--navy); background: #e0ff80; border-color: #e0ff80; }
		/* Navigation and car cards. */
		.navbar { background: var(--navy); }
		.navbar-brand { display: inline-flex; align-items: center; gap: .45rem; color: #fff; font-weight: 700; letter-spacing: .12em; }
		.navbar-brand svg { width: 1.25rem; height: 1.25rem; }
		.navbar-brand:hover, .nav-link:hover { color: var(--lime); }
		.nav-link { color: #dce5e7; font-size: .75rem; font-weight: 700; letter-spacing: .1em; text-transform: uppercase; }
		.navbar .logout-link { color: var(--lime); }
		.hero .welcome-message { color: var(--lime); }
		.page-title { max-width: 900px; margin: 0 auto; padding: 3rem 1rem 2rem; text-align: center; }
		.page-title h1 { font-size: clamp(2.5rem, 6vw, 4.5rem); font-weight: 700; text-transform: uppercase; }
		.page-title p { max-width: 34rem; margin: 0 auto; color: #6f7d83; line-height: 1.6; }
		.feature-card { overflow: hidden; border: 0; border-radius: 0; box-shadow: 0 .6rem 1.8rem rgba(19, 34, 44, .15); }
		.feature-card + .feature-card { margin-top: 7rem; }
		.feature-card img { width: 100%; height: 19rem; object-fit: cover; }
		.feature-card .card-body { padding: 1.6rem; }
		.feature-card h2 { font-size: 2.2rem; font-weight: 700; text-transform: uppercase; }
		.feature-card p { color: #6f7d83; font-size: .88rem; line-height: 1.65; }
		.eyebrow { color: #739b20; font-size: .7rem; font-weight: 700; letter-spacing: .16em; text-transform: uppercase; }
		.btn-lime { color: var(--navy); background: var(--lime); border-color: var(--lime); font-weight: 700; }
		.btn-lime:hover, .btn-lime:focus { color: var(--navy); background: #e0ff80; border-color: #e0ff80; }
		footer { margin-top: 7rem; color: #c5d0d3; background: var(--navy); font-size: .8rem; }
		/* Responsive card layout. */
		@media (min-width: 768px) { .feature-card { width: min(76%, 900px); margin-right: auto; margin-left: auto; } .feature-card .card-body { max-width: 34rem; } }
		@media (max-width: 575.98px) { .page-title { padding-top: 2rem; } .feature-card { width: 78%; margin-right: auto; margin-left: auto; } .feature-card + .feature-card { margin-top: 4rem; } .feature-card img { height: 27rem; } .feature-card .card-body { padding: 1.1rem; } .feature-card h2 { font-size: 1.8rem; } footer { margin-top: 4rem; } }
	</style>