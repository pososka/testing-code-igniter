<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="row">

	<?php foreach ($posts as $key => $post) : ?>

		<article id="post-<?php echo $post->id; ?>" class="col-sm-4 col-xl-3 mb-3">
			<a class="card quiz" href="<?php echo base_url("post/{$post->slug}"); ?>">
				<div class="quiz__img-wrapper">
					<img class="card-img-top quiz__img" src="<?php echo base_url($post->image); ?>" alt="">
				</div>

				<div class="card-body quiz__body">
					<h5 class="card-title"><?php echo $post->title; ?></h5>
				</div>

				<div class="quiz__preview">
					<div class="card-body quiz__body-preview">
						<h5 class="card-title text-center"><?php echo $post->title; ?></h5>
						<p class="card-text"><?php echo substr($post->content, 0, 250) . '...'; ?></p>
					</div>
				</div>
			</a>
		</article><!-- #post-<?php echo $post->id; ?> -->
	
	<?php endforeach; ?>

</div>
