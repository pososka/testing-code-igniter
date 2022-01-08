<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<article id="post-<?php $post->id; ?>" class="">
	<header class="entry-header">
		<h1 class="entry-title"><?php echo $post->title; ?></h1>

		<a href="#">
			<span class="edit-link">Редактировать</span>
		</a>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
		echo $post->content;
		?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php $post->id; ?> -->
