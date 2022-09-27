<?php snippet('header') ?>
<style>
img.cms-logo {
    max-width: 50vh;
}
h1,h2,h3,h4,h5,h6 {color: #909090;}
</style>

	<main class="main article grid-container" role="main">

			<header class="grid-x grid-padding-x">

					<!-- banner image -->
					<div class="cell medium-12">

						<?php
                        $image = $page->coverimage()->toFile();
                        if ($image):
                        ?>
							<source media="(max-width: 768px)" srcset="<?= $image->url() ?>">
							<img src="<?= $image->url() ?>" alt="<?= $page->title()->html() ?>">
						<?php endif ?>

					</div>

					<!-- article info -->
					<div class="cell medium-12">

						<div class="grid-x">
							<!-- title -->
							<div class="cell small-6 align-self-bottom shrink">
								<h1><?= $page->title()->html() ?></h1>
							</div>
							<!-- date -->
							<div class="cell small-6 align-self-bottom">
								<time class="align-right dark">
									<?= $page->date('F jS, Y') ?>
								</time>
							</div>
						</div>
					</div>
			</header>
			<?php if ($page->text()->isEmpty()): ?>
			<?php else: ?>
			<div class="medium-12">
				<?= $page->text()->kirbytext() ?>
			</div>
			<?php endif ?>
			<div class="grid-x">
					<div class="cell medium-6">
						<?= $page->ltextarea()->kirbytext() ?>
					</div>
				<div class="cell medium-6">
					<?= $page->rtextarea()->kirbytext() ?>
				</div>
			</div>
			<hr>
			<div class="grid-x grid-padding-y">
				<div class="cell align-center">
						<a href="<?= url('blog') ?>">Back</a>
				</div>
			</div>
	</main>

<?php snippet('prevnext') ?>
<?php snippet('footer') ?>
