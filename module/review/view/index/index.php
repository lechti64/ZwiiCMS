<?php echo template::formOpen('ratingsForm'); ?>
	<div class="row">
		<div class="col12"> 
			<?php
				echo template::hidden('ratingsDateHidden', [
					'value' => time()
				]); 
			?>
			<div class="row">
				<div class="col3">
						<?php echo template::select('ratingsGrades',[1,2,3,4,5], [
							'label' => 'Evaluation'
						]); ?>	
				</div>
			</div>
			<div class="row">
				<div class="col12">
					<?php echo template::textarea('ratingsComment', [
						'autocomplete' => 'off',
						'label' => 'Votre évaluation'
					]); ?>
				</div>
			</div>
			<div class="row">
				<div class="col4">
					<?php echo template::text('ratingsUserName', [
						'autocomplete' => 'off',
						'label' => 'Nom et Prénom'
					]); ?>
				</div>
				<div class="col2 offset10">
					<?php echo template::submit('formRatingsSubmit', [
						'value' => 'Envoyer'
					]); ?>
				</div>
			</div>
		</div>
	</div>
<?php echo template::formClose(); ?>
<!-- Liste des avis -->
<?php if($module::$ratings): ?>
	<div class="row">
		<div class="col12">
			<?php foreach($module::$ratings as $ratingId => $rating): ?>					
				<div class="row">
					<div class="col9">
						<h1 class="rateGrade">
							<a href="<?php echo helper::baseUrl() . $this->getUrl(0) . '/' . $articleId; ?>">
								<?php echo $rating['rateGrade']; ?>
							</a>
						</h1>
						<div class="commentReview">
							<a href="<?php echo helper::baseUrl() . $this->getUrl(0) . '/' . $articleId; ?>#comment">
								<?php echo count($rating['commentReview']); ?>
							</a>
							<?php echo template::ico('comment', 'left'); ?>
						</div>						
						<div class="publishedOn">
							<i class="far fa-calendar-alt"></i>
							<?php echo utf8_encode(strftime('%d %B %Y', $rating['publishedOn']));  ?>
						</div>
						<p class="reviewContent">
							<?php echo helper::subword(strip_tags($rating['content']), 0, 300); ?>...
							<a href="<?php echo helper::baseUrl() . $this->getUrl(0) . '/' . $ratingId; ?>">Lire la suite</a>
						</p>
					</div>
				</div>
				<hr />
			<?php endforeach; ?>
		</div>
	</div>
<?php else: ?>
	<?php echo template::speech('Soyez le premier à déposer un avis'); ?>
<?php endif; ?>
