<html>
    <head>
	<meta charset="utf-8">
	<title>Magalu Finder</title>
    	<link rel="icon" href="imagens/lu2-natal.png" type="image/png" sizes="16x16">
	<link rel="stylesheet" type="text/css" href="assets/css/proa.css">	
	<link rel="stylesheet" type="text/css" href="assets/css/estilos.css">
</head>

<body style="background-color: #E8E8E8">
	<div class="strips">
        <span class="strips__strip -yellow"></span>
        <span class="strips__strip -orange"></span>
        <span class="strips__strip -red"></span>
        <span class="strips__strip -pink"></span>
        <span class="strips__strip -purple"></span>
        <span class="strips__strip -purple-dark"></span>
        <span class="strips__strip -blue"></span>
        <span class="strips__strip -cyan"></span>
        <span class="strips__strip -green-light"></span>
        <span class="strips__strip -green"></span>
    </div>
    
        <nav class="navbar -header">
            <div class="container">
                <ul class="navbar__nav">
                    <li class="navbar__nav__item">
                        <a href="home.html" title="" class="navbar__nav__link">Voltar</a>
                    </li>
                </ul>
            </div>
        </nav>
   
</body>
</html>
<?php

	include_once("./model/dao.php");
	include_once("./controller/controller.loja.php");
?>
	<h2 style="color:black" align="center">Filiais</h2>
		<table class="table -striped">
			<thead class="table__head" >
				<tr class="table__row">
					<th style="color:black" class="table__cell">ID</th>
					<th style="color:black" class="table__cell">Filial</th>
					<th style="color:black" class="table__cell">Descrição</th>
					<th style="color:black" class="table__cell">Endereço</th>
					<th style="color:black" class="table__cell">Bairro</th>
					<th style="color:black" class="table__cell">CEP</th>
					<th style="color:black" class="table__cell">Cidade</th>
				</tr>
			</thead>
			<tbody  class="table__body">
			<?php
				//Cria um objeto do tipo Loja Controller
				$usuario = new LojaController();
				
				//Resgatam todos lojas cadastrados e armazena em um array $listagem
				$listagem = $usuario->listarTodos();
				
				//Se existir pelo menos 1 loja no array entra no IF
				if (count($listagem) > 0) {
					$i = 0;
		        foreach($listagem as $dados) {
					
			?>
				<tr class="table__row"><?php echo $linha ?>
					<td class="table__cell"><?php echo $dados->id ?></td>
					<td class="table__cell"><?php echo $dados->filial ?></td>
					<td class="table__cell"><?php echo $dados->descricao ?></td>
					<td class="table__cell"><?php echo $dados->endereco ?></td>
					<td class="table__cell"><?php echo $dados->bairro ?></td>
					<td class="table__cell"><?php echo $dados->cep ?></td>
					<td class="table__cell"><?php echo $dados->cidade ?></td>
				</tr>
			<?php		$i++;
					}
				}
			?>
			</tbody>
		</table>
		<br/><br/>
	
