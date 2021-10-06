<?php
	// realizando a importação do arquivo que contem a função para inserir os usuários no banco
    require_once('funcoes.php');
    // executando a função para obter os usuários e livros e popular os respectivos 'comboboxes'
    index();
?>

<?php
	include(HEADER_TEMPLATE);
?>
            <br/>
            <h1 class="text-center">Autorias</h1>
			<hr/>
            <!-- Iniciando o formulário -->
            <!-- como estamos utilizando o 'ajax' para fazer o insert no banco, o formulário perde o atributo 'action' -->
			<form method="post" id="formCadastrarAutoria">
                <div class="form-row">
					<div class="form-group col-md-3"></div>
					<div class="form-group col-md-5">
						<label for="selectLivro">Livros</label>
						<select type="text" class="form-control" id="selectlivro" name="livro">
							<?php if($livros) : ?>
								<?php foreach($livros as $livro) :?>
									<option value="<?php echo $livro[0];?>"><?php echo $livro[2]?></option>
								<?php endforeach;?>
							<?php else : ?>
								<option>Não foi possível obter os dados do banco!</option>	
							<?php endif; ?>
						</select>
					</div>
                </div>
                <hr>
				<div class="form-row">
					<div class="form-group col-md-3"></div>
					<div class="form-group col-md-5">
						<label for="selectAutor">Autores</label>
						<select type="text" class="form-control" id="selectAutor" name="autor">
							<?php if($autores) : ?>
								<?php foreach($autores as $autor) :?>
									<option value="<?php echo $autor[0];?>"><?php echo $autor[1]?></option>
								<?php endforeach;?>
							<?php else : ?>
								<option>Não foi possível obter os dados do banco!</option>	
							<?php endif; ?>
						</select>
					</div>
                </div>
                <hr>
                
                <div class="form-row">
                    <button type="button" name="add" id="add" class="btn btn-info">Adicionar</button>
                </div>
                <hr />
                <div class="form-row">
                    <div class="form-group col-md-2"></div>
                    <div class="form-group col-md-8">
                        <table class="table table-striped" id="dados_autoria">
                            <thead>
                                <tr>
                                <th style="width: 50%">Autor</th>
                                <th style="width: 50%">Livro</th>
                                <th style="width: 20%">Remover</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    <div class="form-group col-md-2"></div>
                </div>
                
                
				
				<hr />				
                <input type="submit" name="insert" id="insert" class="btn btn-primary" value="Salvar">
                <a class="btn btn-secondary" href="index.php">Voltar</a>
			</form>
			<!-- Finalizando o formulário -->

            <hr/>

		
			<br/>

<br/>

<?php include(FOOTER_TEMPLATE); ?>

<!-- adicionando o script para pegar os dados do livro e adicionar na tabela -->
<script>  
    // vai executar somente depois da página ter sido carregada completamente
    $(document).ready(function(){ 
        var count = 0;
        var livro = '';
        var autor = '';
        // # = id       . = class
        $('#add').click(function(){
            livro = $('#selectLivro :selected').text();
            autor = $('#selectAutor :selected').text();
            // a linha abaixo serve para evitar problemas de cópias de codigo fonte
            if($('#add').text() == 'Adicionar') {
                count = count + 1;
                // gerando dinâmicamente uma nova linha na tabela para cada livro que for inserido
                output = '<tr id="row_'+count+'">';
                output += '<td>'+livro+' <input type="hidden" name="hidden_livro[]" id="livro'+count+'" class="livro" value="'+livro+'" /></td>';
                output += '<td>'+autor+' <input type="hidden" name="hidden_autor[]" id="autor'+count+'" class="autor" value="'+autor+'" /></td>';
                output += '<td><button type="button" name="remover" class="btn btn-danger btn-xs remover" id="'+count+'">Remover</button></td>';
                // fechando a tag 'tr', ou seja, finalizando a linha dinâmica
                output += '</tr>';
                // adicionado a linha gerada via código na tabela do formulário
                $('#dados_autoria').append(output);
            }
            // o laço de else abaixo só irá funcionar caso exista mais de um botão que possua a 'id' "add"
            else {
                var row_id = $('#hidden_row_id').val();
                output += '<td>'+livro+' <input type="hidden" name="hidden_livro[]" id="livro'+count+'" class="livro" value="'+livro+'" /></td>';
                output += '<td>'+autor+' <input type="hidden" name="hidden_autor[]" id="autor'+count+'" class="autor" value="'+autor+'" /></td>';
                output += '<td><button type="button" name="remover" class="btn btn-danger btn-xs remover" id="'+count+'">Remover</button></td>';
                $('#row_'+row_id+'').html(output);                
            }
        });
        // a função abaixo será executada se for clicado no botão 'Remover' de alguma linha da tabela
        $(document).on('click', '.remover', function(){
            var row_id = $(this).attr("id");
            if(confirm("Você realmente quer remover este registro?")) {
                $('#row_'+row_id+'').remove();
            }
            else {
                return false;
            }
        });
        // a função abaixo será executada quando for realizado o 'submit' do formulário
        $('#formCadastrarAutoria').on('submit', function(event){
            event.preventDefault();
            // a variável 'count_data' servirá para contar/obter o número de linhas da tabela de livros
            var count_data = 0;
            // a função abaixo irá ser executada para cada ocorrência em componentes que pertençam à classe
            // 'idLivro'
            $('.livro').each(function(){
                count_data = count_data + 1;
            });
            // verificando se existem livros
            if(count_data > 0) {
                // a variável 'form_data' irá receber (serialize()) todos os dados da tela (table)
                var form_data = $(this).serialize();
                // acionando o método 'Ajax' para enviar os dados para o banco
                $.ajax({
                    // a propriedade 'url' serve para indicar qual arquivo irá receber os dados via 'ajax'
                    // e dar continuidade ao processo
                    url:"insereAutoria.php",
                    // url: 'funcoes.php' index() adicionar() alterar('id')
                    // qual o método que será utilizado para o envio do formulário
                    method:"POST",
                    // quais dados serão enviados
                    data:form_data,
                    // data: {'usuario':'01', 'data_emprestimo':'2020-07-01'}
                }).done(function(response) {
                    // o método ,done() serve para indicar a ação que será tomada após a execução do método 'ajax'
                    // redirecionando para uma página específica
                    window.location.href='../home.php'
                });

            }
            else {
                alert('Por favor adicione pelo menos um livro!');
            }
        });
 
    });
</script>



