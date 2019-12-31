<form name="incluirCadastro" id="incluirCadastro" method="POST" action="<?php echo DIRPAGE."cadastro/cadastrarCliente"; ?>">
	Nome:&nbsp;<input type="text" name="nome" id="nome"><br><br>
	Sexo:&nbsp;<select name="sexo" id="sexo">
		<option value="">Selecione</option>
		<option value="M">Masculino</option>
		<option value="F">Feminino</option>
	</select><br><br>
	Cidade:&nbsp;<input type="text" name="cidade" id="cidade"><br><br>
	<input type="submit" value="Cadastrar" name="cadastrar">
</form>

<br><br>
<hr>
<br><br>
<h1>Seleção de dados</h1>

<form name="consultarCadastro" id="consultarCadastro" method="POST" action="<?php echo DIRPAGE."cadastro/consultarCliente"; ?>">
	ID:&nbsp;<input type="text" name="id" id="id"><br><br>
	<input type="submit" value="Consultar" name="consultar">
</form>