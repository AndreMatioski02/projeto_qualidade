<!-- IMPORTANDO O HEADER -->
<?php 
  require_once('../config.php');
  include(HEADER_TEMPLATE2); 
?>

  <br/>
  <hr/>
  <header>
    <div class="container">
      <div class="row justify-content-center align-items-center">
        <div class="col-md-10">
          <h1 class="display-4">Forma e Aprovação do Pagamento</h1>
        </div>
      </div>
      <br></br>
    </div>    
  </header>

  <body>
    <div class="container">
      <div class="form-row justify-content-center align-items-center">
        <div class="card-body">
          <div class="container-titulo">
            <p class="card-text text-left" style="color: white;"><strong>Escolha a forma de pagamento desejada</strong></p>
          </div>  
          <ul class="list-group list-group-flush text-left">
            <li class="list-group-item">
              <figure>
                <img src="/crudSimulacao/imagens/boleto.png" alt="boletoBancario">
                <br><br>
                <p>
                  <button class="btn btn-outline-success col-md-3" type="button" data-toggle="collapse" data-target="#boleto" aria-expanded="false" aria-controls="boleto">
                    Boleto bancário
                  </button>
                </p>
              </figure>
                
              <div class="collapse" id="boleto">
                <div class="card card-body">
                  <ul class="list-group list-group-flush text-left">
                    <li class="list-group-item"><strong>Pague com Boleto: <span style="color: green">R$389,33</span></strong> com desconto (10%) à vista</li>
                    <li class="list-group-item"><strong>Instruções:</strong> Você terá até <strong>12/11/2021</strong> para realizar o pagamento.</li>
                    <a href="/crudSimulacao/simulacoes/boletoAguardando.php" role="button" class="btn btn-success">Escolher</a>
                  </ul>
                </div>
              </div>
            </li>

            <li class="list-group-item">
              <figure>
                <img src="/crudSimulacao/imagens/pix.png" alt="pix">
                <br><br>
                <p>
                  <button class="btn btn-outline-success col-md-3" type="button" data-toggle="collapse" data-target="#pix" aria-expanded="false" aria-controls="pix">
                    PIX
                  </button>
                </p>
              </figure>
                

              <div class="collapse" id="pix">
                <div class="card card-body">
                  <ul class="list-group list-group-flush text-left">
                    <li class="list-group-item"><strong>Pague com PIX: 
                      <span style="color: green">R$389,33</span></strong> com desconto (10%) à vista
                    </li>
                    <li class="list-group-item"><strong>Instruções:</strong> Ao escolher esta opção, um QR Code será gerado para pagamento. Este QR Code vencerá em <strong>11/11/2021</strong>, e será cancelado após seu vencimento, caso não ocorra nenhum pagamento.</li>
                    <a href="#" role="button" class="btn btn-success">Escolher</a>
                  </ul>
                 </div>
              </div>
            </li>

            <li class="list-group-item">
              <figure>
                <img src="/crudSimulacao/imagens/pagseguro.jpg" alt="cartaoPagSeguro">
                <br><br>
                <p>
                  <button class="btn btn-outline-success col-md-3" type="button" data-toggle="collapse" data-target="#cartaoPagSeg" aria-expanded="false" aria-controls="cartaoPagSeg">
                    Cartão de Crédito (PagSeguro)
                  </button>
                </p>
              </figure>
                
              <div class="collapse" id="cartaoPagSeg">
                <div class="card card-body">
                  <ul class="list-group list-group-flush text-left">
                    <figure class="cartoes">
                      <img src="/crudSimulacao/imagens/cartoes.png" alt="cartoes">
                    </figure>
                    <li class="list-group-item"><strong>Com o PagSeguro, pague em até:</strong> 12x de <strong><span style="color: green">R$36,04 </span></strong>s/ juros</li>
                    <div class="form-row justify-content-center align-items-center">
                      <div class="container" style="width: 50%;">
                        <div class="form-group">
                          <label for="numCartao">Número do cartão</label>
                          <input type="text" class="form-control" id="numCartao" 
                            placeholder="**** **** **** ****" data-mask="0000 0000 0000 0000" data-mask-selectonfocus="true">
                          <br>
                          <label for="nomeTitular">Nome do titular</label>
                          <input type="text" class="form-control" id="nomeTitular"
                            placeholder="Nome completo (impresso no cartão)">
                          <br>
                          <label for="validadeCartao">Validade do Cartão</label>
                          <div class="form-row">
                            <input type="text" class="form-control col-md-2 validadeCartao"
                              placeholder="MM" data-mask="00" data-mask-selectonfocus="true">
                            <div class="col-md-1"></div>
                            <input type="text" class="form-control col-md-2 validadeCartao"
                              placeholder="AAAA" data-mask="0000" data-mask-selectonfocus="true">
                          </div>                              
                        </div>
                      </div>
                      <div class="container" style="width: 50%;">
                        <div class="form-group">
                          <label for="cpfTitular">CPF do titular do cartão</label>
                          <input type="text" class="form-control" id="cpfTitular" 
                              placeholder="000.000.000-00" data-mask="000.000.000-00" data-mask-selectonfocus="true">
                          <br>
                          <label for="nascTitular">Data de nascimento</label>
                          <input type="text" class="form-control" id="nascTitular"
                            placeholder="Ex.: 01/01/2001" data-mask="00/00/0000" data-mask-selectonfocus="true">
                          <br>
                          <label for="selectParcela">Parcelas</label>
                          <select type="text" class="form-control" id="selectParcela">
                              <option>Selecione</option>
                              <option>1x de R$432,58 s/ juros</option>
                              <option>2x de R$216,29 s/ juros</option>
                              <option>3x de R$144,19 s/ juros</option>
                              <option>4x de R$108,14 s/ juros</option>
                              <option>5x de R$86,51 s/ juros</option>
                              <option>6x de R$72,09 s/ juros</option>
                              <option>7x de R$61,79 s/ juros</option>
                              <option>8x de R$54,07 s/ juros</option>
                              <option>9x de R$48,06 s/ juros</option>
                              <option>10x de R$43,25 s/ juros</option>
                              <option>11x de R$39,32 s/ juros</option>
                              <option>12x de R$36,04 s/ juros</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <a href="#" role="button" class="btn btn-success">Finalizar</a>
                  </ul>
                </div>
              </div>
            </li>

            <li class="list-group-item">
              <figure>
                <img src="/crudSimulacao/imagens/mercadopago.jpg" alt="mercadoPago">
                <br><br>
                <p>
                  <button class="btn btn-outline-success col-md-4" type="button" data-toggle="collapse" data-target="#cartaoMercadoP" aria-expanded="false" aria-controls="cartaoMercadoP">
                    Cartão de Crédito (Mercado Pago)
                  </button>
                </p>
              </figure>
                
              <div class="collapse" id="cartaoMercadoP">
                <div class="card card-body">
                  <ul class="list-group list-group-flush text-left">
                    <figure class="cartoes">
                      <img src="/crudSimulacao/imagens/cartoes.png" alt="cartoes">
                    </figure>
                    <li class="list-group-item"><strong>Com o Mercado Pago, pague em até:</strong> 12x de <strong><span style="color: green">R$36,04 </span></strong>s/ juros</li>
                    <div class="form-row justify-content-center align-items-center">
                      <div class="container" style="width: 50%;">
                        <div class="form-group">
                          <label for="numCartao">Número do cartão</label>
                          <input type="text" class="form-control" id="numCartao" 
                            placeholder="**** **** **** ****" data-mask="0000 0000 0000 0000" data-mask-selectonfocus="true">
                          <br>
                          <label for="nomeTitular">Nome do titular</label>
                          <input type="text" class="form-control" id="nomeTitular"
                            placeholder="Nome completo (impresso no cartão)">
                          <br>
                          <label for="validadeCartao">Validade do Cartão</label>
                          <div class="form-row">
                            <input type="text" class="form-control col-md-2 validadeCartao"
                              placeholder="MM" data-mask="00" data-mask-selectonfocus="true">
                            <div class="col-md-1"></div>
                            <input type="text" class="form-control col-md-2 validadeCartao"
                              placeholder="AAAA" data-mask="0000" data-mask-selectonfocus="true">
                          </div>                              
                        </div>
                      </div>
                      <div class="container" style="width: 50%;">
                        <div class="form-group">
                          <label for="cpfTitular">CPF do titular do cartão</label>
                          <input type="text" class="form-control" id="cpfTitular" 
                              placeholder="000.000.000-00" data-mask="000.000.000-00" data-mask-selectonfocus="true">
                          <br>
                          <label for="nascTitular">Data de nascimento</label>
                          <input type="text" class="form-control" id="nascTitular"
                            placeholder="Ex.: 01/01/2001" data-mask="00/00/0000" data-mask-selectonfocus="true">
                          <br>
                          <label for="selectParcela">Parcelas</label>
                          <select type="text" class="form-control" id="selectParcela">
                              <option>Selecione</option>
                              <option>1x de R$432,58 s/ juros</option>
                              <option>2x de R$216,29 s/ juros</option>
                              <option>3x de R$144,19 s/ juros</option>
                              <option>4x de R$108,14 s/ juros</option>
                              <option>5x de R$86,51 s/ juros</option>
                              <option>6x de R$72,09 s/ juros</option>
                              <option>7x de R$61,79 s/ juros</option>
                              <option>8x de R$54,07 s/ juros</option>
                              <option>9x de R$48,06 s/ juros</option>
                              <option>10x de R$43,25 s/ juros</option>
                              <option>11x de R$39,32 s/ juros</option>
                              <option>12x de R$36,04 s/ juros</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <a href="#" role="button" class="btn btn-success">Finalizar</a>
                  </ul>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <br><br>
        <br><br>
      </div>
    </div>
  </body>

  <style type="text/css">
    .container-titulo{
        background-color: #44245E;
        height: 9vh;
        padding-left: 2ch;
        padding-top: 2vh;
    }
  </style>

<?php
    include(FOOTER_TEMPLATE);
?>