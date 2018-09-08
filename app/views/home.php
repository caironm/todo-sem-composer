<?php
	require_once "app/views/templates/main-header.php";
?>

<h1>Tarefas</h1>

<?php

	echo "<ul>";

	foreach($tarefas as $data)
	{	
		if ($data["status"] == 0) {
			$status = 'Tarefa não realizado';
		}
		if ($data["status"] == 1) {
			$status = 'Tarefa realizada';
		}

		echo "
			<li><a href='./atualizar/status/{$data['id']}'>{$status}</a></li>
			<li>Nome: {$data['nome']}</li>
			<li>Detalhes: {$data['detalhes']}</li>
			<li>Editar: <a href='./editar/{$data['id']}'>Editar</a></li>
			<li>Deletar: <a href='./deletar/{$data['id']}'>Deletar</a></li></li>
			<br><br>
        ";
	}

	echo "
		</ul>
	";

?>

<form class="uk-form" method="post" action=".\nova">

	<fieldset data-uk-margin>
		
		<legend>Criar</legend>
		<div class="uk-form-row">
		    <input class="uk-width-1-1 uk-form-large" type="text" name="nome" placeholder="Nome da tarefa">
		</div>
		       
		<div class="uk-form-row">
		    <textarea class="uk-width-1-1" rows="4" name="detalhes" placeholder="Descrição"></textarea>
		</div>

		<input type="hidden" name="status" value="0"> <!-- Status 0 = uma tarefa que não foi concluida -->

		<div class="uk-form-row">
		    <button class="uk-button uk-button-large uk-button-primary" type="submit">Criar uma tarefa</button>
		</div>

	</fieldset>

</form>

<?php	

	require_once "app/views/templates/main-footer.php";
?>
