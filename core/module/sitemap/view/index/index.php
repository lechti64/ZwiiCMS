<ul>
	<?php foreach($this->getHierarchy(null,true,null) as $parentId => $childIds): ?>
		<li>
			<?php 			
			if ($this->getData(['page', $parentId, 'disable']) === false  && $this->getUser('group') >= $this->getData(['page', $parentId, 'group']))
			{ ?>	
				<a href="<?php echo helper::baseUrl() . $parentId; ?>"><?php echo $this->getData(['page', $parentId, 'title']); ?></a>
				<?php 
			} else { 
				echo $this->getData(['page', $parentId, 'title']); 
			} ?>
			<ul>
				<?php foreach($childIds as $childId): ?>
					<li>
					<?php if ($this->getData(['page', $childId, 'disable']) === false && $this->getUser('group') >= $this->getData(['page', $parentId, 'group'])) 
					{ ?>	
						<a href="<?php echo helper::baseUrl() . $childId; ?>"><?php echo $this->getData(['page', $childId, 'title']); ?></a>
					<?php } else { ?>
							<?php echo $this->getData(['page', $childId, 'title']); }?>						
					</li>
				<?php endforeach; ?>
			</ul>
		</li>
	<?php endforeach; ?>
</ul>