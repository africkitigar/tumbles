<?php include 'header.php'; ?>
<?php include 'template-parts/hero-section.php'; ?>

<div class="container my-account">
	<div class="row">
		<div class="col4">
			<?php include 'template-parts/my-account-sidebar.php'; ?>
		</div>

		<div class="col6">
			<div class="my-profile-nav">
				<?php include 'template-parts/my-profile-section.php'; ?>
				<?php include 'template-parts/change-password.php'; ?>
				<?php include 'template-parts/payment-method.php'; ?>
				<?php include 'template-parts/my-account-students.php'; ?>
			</div>
		</div>

		<div class="col2"></div>
	</div>
</div>

<?php include 'footer.php';?>
