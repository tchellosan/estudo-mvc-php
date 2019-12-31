<form name="cadastro" id="cadastro" method="POST" action="<?php echo DIRPAGE."cadastro/cadastrarCliente"; ?>">
	Nome:&nbsp;<input type="text" name="nome" id="nome"><br><br>
	Sexo:&nbsp;<select name="sexo" id="sexo">
		<option value="">Selecione</option>
		<option value="M">Masculino</option>
		<option value="F">Feminino</option>
	</select><br><br>
	Cidade:&nbsp;<input type="text" name="cidade" id="cidade"><br><br>
	<input type="submit" value="Cadastrar" name="cadastrar">
</form>