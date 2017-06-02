<?php 
// get data
include("inc/data.php"); 
$title = 'Index';
include("inc/header.php"); 

?>
		<div class="section catalog random">

			<div class="wrapper">

				<h2>May we suggest something?</h2>

				<?php 
					$random = array_rand($catalog, 4); 
				?>
					
				<ul class="items">

					<?php foreach ($random as $id) : ?>

						<li>
							<a href="#">
								<img 
									src="<?php echo $catalog[$id]['img']; ?> " 
									alt="<?php echo $catalog[$id]['title']; ?>"
								>
								<p>View info</p>
							</a>
						</li>

					<?php endforeach; ?>

				</ul>

			</div>

		</div>

	</div>
<!--get footer-->
<?php include("inc/footer.php"); ?>