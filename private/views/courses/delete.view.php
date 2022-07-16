<?php
$this->view('includes/header')
?> 
<div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">
	<?php $this->view('includes/crumbs', ['crumbs' => $crumbs]) ?>

	<?php if ($row) : ?>
		<div class="card-group justify-content-center">
			<form method="post">
				<h3>Estas seguro de eliminar el registro?!</h3>
				<input type="hidden" value=<?=$row[0]->Id_Curso?> name="hidden">
				<input disabled autofocus class="form-control" value="<?= get_var('numeracion', $row[0]->numeracion) ?>" type="text" name="numeracion"><br><br>

				<input class="btn btn-danger float-end" type="submit" value="Eliminar">

				<a href="<?= ROOT ?>/inmuebles">
					<input class="btn btn-success" type="button" value="Cancelar">
				</a>
			</form>

		</div>
	<?php else : ?>

		<div style="text-align: center;">
			<h3>No se encuentra el Condominio</h3>
			<div class="clearfix"></div>
			<br><br>
			<a href="<?= ROOT ?>/inmuebles">
				<input class="btn btn-danger" type="button" value="Cancel">
			</a>
		</div>
	<?php endif; ?>
</div>

<?php
$this->view('includes/footer')
?>