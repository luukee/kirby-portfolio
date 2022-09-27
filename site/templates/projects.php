<?php snippet('header') ?>
<style>
#home article.grid-x .project-section:first-of-type .project-info {
    right: 0;
}
.project-title {
display: none;
}
.small-12.large-12.intro-text.align-center {
    flex-direction: column;
    align-items: center;
}
.capabilities li {
    font-size: 13px;
    margin-right: 10px;
}
.small-12.large-12.intro-title.align-center.flex-dir-column {
    height: 100vh;
}

header.hero.grid-container {
    position: relative;
}
#home .hero>section {
    position: static;
}
.capabilities {
	list-style: none;
	display: flex; 
    list-style: none;
    display: flex; 
    justify-content: center;
    animation-duration: 40s;
    animation-name: slidein;
    animation-iteration-count: infinite;
    animation-direction: alternate;
    animation-timing-function: linear;
    position: absolute;
    bottom: 10px;
    color: #c3c3c3;
}


@keyframes slidein {
  from {
    width: 150%; 
  }

  to {
    width: 0%;
  }
}
.capabilities li:after {
    content: "|";
    padding-left: 10px;
}
@media screen and (max-width: 30em) {
.project-section:not(:first-child) {
    height: auto;
    max-height: 400px;
}
.project-section:first-child, .hero {
    height: auto;
    margin-top: 0;
}
.effect li {
    top: -140px;
}
}

</style>
	<main class="projects" role="main">

		<header class="hero grid-container">
			<!-- header image -->
			<div class="img-cover">
				<picture class="hero-img">

					<?php
                    $image = $page->coverimage()->toFile();
                    if ($image):
                    ?>
					<source media="(max-width: 768px)" srcset="<?= $image->url() ?>">
					<img src="<?= $image->url() ?>" alt="<?= $page->title()->html() ?>">
					<?php endif ?>

				</picture>
			</div>
			<h1 class="hidden"><?= $page->title()->html() ?></h1>

			<section class="grid-x align-center-middle text-center">

				<div class="small-12 large-12 intro-title align-center flex-dir-column">
					<h2><?= $page->introTitle()->html() ?></h2>
					<?= $page->introtext()->kirbytext() ?>
				</div>

			</section>

	
		</header>

		<article class="grid-x">
			<?php snippet('showcase') ?>
		</article>

	</main>

<?php snippet('footer') ?>
