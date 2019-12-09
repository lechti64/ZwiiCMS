<?php if($module::$ratings): ?>
	<div class="row">
		<div class="col12">
			<?php foreach($module::$ratings as $ratingId => $rating): ?>					
				<div class="row">
					<div class="col9">
						<h1 class="rateGrade">
							<a href="<?php echo helper::baseUrl() . $this->getUrl(0) . '/' . $ratingId; ?>">
								<?php echo $rating['title']; ?>
							</a>
						</h1>
						<div class="commentReview">
							<a href="<?php echo helper::baseUrl() . $this->getUrl(0) . '/' . $ratingId; ?>#comment">
								<?php echo count($rating['comment']); ?>
							</a>
							<?php echo template::ico('comment', 'left'); ?>
						</div>						
						<div class="publishedOn">
							<i class="far fa-calendar-alt"></i>
							<?php echo utf8_encode(strftime('%d %B %Y', $rating['publishedOn']));  ?>
						</div>
					</div>
				</div>
				<hr />
			<?php endforeach; ?>
		</div>
	</div>
<?php else: ?>
	<?php echo template::speech('Aucun avis.'); ?>
<?php endif; ?>