<div class="block">
	<h2 class="submit"><a href="<?php echo url::site()."mobile/reports/submit/" ?>">Submit A Report</a></h2>
</div>
<div class="block">
	<h2 class="other">Find a Report</h2>
	<div class="collapse shown">
		<?php
			echo '<form action="'.url::site().'mobile/reports/search" method="get">';
		?>
			<label for="town">Your Area</label>
				<input type="text" name="town" value="">
				<input type="submit" value="Search &rarr;">
  		</form>
		
	</div>
</div>
<div class="block">
	<h2 class="other"><a href="<?php echo url::site()."mobile/categories/" ?>">Or browse by category</a></h2>
</div>
