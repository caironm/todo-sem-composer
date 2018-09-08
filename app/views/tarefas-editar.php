<?php
	require_once "app/views/templates/main-header.php";
?>

<h1>Editar tarefas</h1>

<form class="uk-form" method="post" action="./../editar">

	<fieldset data-uk-margin>
		
		<legend>Editar</legend>
		<div class="uk-form-row"> 
		    <input class="uk-width-1-1 uk-form-large" type="text" name="nome" placeholder="Nome da tarefa" value="<?php echo $datas[0]['nome']; ?>">
		</div>
		       
		<div class="uk-form-row">
		    <textarea class="uk-width-1-1" rows="4" name="detalhes" placeholder="Descrição"><?php echo $datas[0]['detalhes']; ?></textarea>
		</div>

		<input type="hidden" name="id" value="<?php echo $datas[0]['id']; ?>"> <!-- Status 0 = uma tarefa que não foi concluida -->
		<input type="hidden" name="status" value="<?php echo $datas[0]['status']; ?>">

		<div class="uk-form-row">
		    <button class="uk-button uk-button-large uk-button-primary" type="submit">Editar tarefa</button>
		</div>

	</fieldset>

</form>

<?php	

	require_once "app/views/templates/main-footer.php";
?>