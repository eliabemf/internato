<?php require_once 'config.php' ?>

<?php include(HEADER_TEMPLATE); ?>

    <div class="container-fluid">

        <div class="row justify-content-md-center content-wrapper ">
            <div class="col-6 border border-light p-5 " style="background-color: #fff">


                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                         aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"
                         style="width: 25%; background-color: #59d8ec;"></div>
                </div>

                <h5 class="info-color white-text text-center py-4">
                    <strong>
                        <h3>Seleção de Preceptores para o Internato do Curso de Medicina EMCM/UFRN</h3>
                    </strong>

                </h5>


                <!-- Default form register -->
                <form method="post">


                    <div class="form-row mb-2">
                        <div class="col-8 mb-2">
                            <!-- Nome Completo -->

                            <label for="nome">Nome Completo*</label>
                            <input id="nome" name="nome" type="text" class="form-control"
                                   placeholder="Ex.: Eliabe Felix">
                        </div>

                        <div class="col-4 mb-2">
                            <label for="email">E-mail*</label>
                            <input type="email" id="email" class="form-control" placeholder="Ex.: exemplo@gmail.com">
                        </div>

                    </div>

                    <div class="form-row mb-2">
                        <div class="col-4 mb-2">
                            <label for="cpf">CPF*</label>
                            <input type="text" id="cpf" name="cpf" class="form-control" placeholder="123.456.789-10">

                        </div>
                        <div class="col-4 mb-2">
                            <label for="crm">CRM/RN*</label>
                            <input type="text" id="crm" class="form-control" placeholder="Ex.: 123456789">

                        </div>

                        <div class="col-4 mb-2">
                            <label for="dtnasc">Data Nascimento*</label>
                            <input type="date" id="dtnasc" class="form-control">

                        </div>


                    </div>


                    <div class="form-row mb-2">
                        <div class="col-4 mb-2">
                            <label for="cartid">Carteira de Identidade*</label>
                            <input type="text" id="cartid" name="cartid" class="form-control"
                                   placeholder="Ex.: 123.123.123">

                        </div>
                        <div class="col-4 mb-2">
                            <label for="orgao">Orgão Emissor*</label>
                            <input type="text" id="orgao" class="form-control" placeholder="Ex.: 123456789">

                        </div>

                        <div class="col-4">
                            <label for="estadoEm">Estado Emissor*</label>
                            <select id="estadoEm" name="estadoEm" class="form-control">
                                <option value="">Selecionar Estado</option>

                                <option value="Acre">&#8227; Acre (AC)</option>
                                <option value="Alagoas">&#8227;Alagoas (AL)</option>
                                <option value="Amapá">&#8227;Amapá (AP)</option>
                                <option value="Amazonas">&#8227;Amazonas (AM)</option>
                                <option value="Bahia">&#8227;Bahia (BA)</option>
                                <option value="Ceará">&#8227;Ceará (CE)</option>
                                <option value="Distrito Federal">&#8227;Distrito Federal (DF)</option>
                                <option value="Espírito Santo">&#8227;Espírito Santo (ES)</option>
                                <option value="Goiás">&#8227;Goiás (GO)</option>
                                <option value="Maranhão">&#8227;Maranhão (MA)</option>
                                <option value="Mato Grosso">&#8227;Mato Grosso (MT)</option>
                                <option value="Mato Grosso do Sul">&#8227;Mato Grosso do Sul (MS)</option>
                                <option value="Minas Gerais">&#8227;Minas Gerais (MG)</option>
                                <option value="Pará">&#8227;Pará (PA)</option>
                                <option value="Paraíba">&#8227;Paraíba (PB)</option>
                                <option value="Paraná">&#8227;Paraná (PR)</option>
                                <option value="Pernambuco">&#8227;Pernambuco (PE)</option>
                                <option value="Piauí">&#8227;Piauí (PI)</option>
                                <option value="Rio de Janeiro">&#8227;Rio de Janeiro (RJ)</option>
                                <option value="Rio Grande do Norte">&#8227;Rio Grande do Norte (RN)</option>
                                <option value="Rio Grande do Sul">&#8227;Rio Grande do Sul (RS)</option>
                                <option value="Rondônia">&#8227;Rondônia (RO)</option>
                                <option value="Roraima">&#8227;Roraima (RR)</option>
                                <option value="Santa Catarina">&#8227;Santa Catarina (SC)</option>
                                <option value="São Paulo">&#8227;São Paulo (SP)</option>
                                <option value="Sergipe">&#8227;Sergipe (SE)</option>
                                <option value="Tocantins">&#8227;Tocantins (TO)</option>

                            </select>

                        </div>

                    </div>


                    <div class="form-row mb-2">


                        <div class="col-6 mb-2">
                            <label for="estadoMo">Estado*</label>
                            <select id="estadoMo" name="estadoMo" class="form-control">
                                <option value="">Selecionar Estado</option>

                                <option value="Acre">&#8227; Acre (AC)</option>
                                <option value="Alagoas">&#8227;Alagoas (AL)</option>
                                <option value="Amapá">&#8227;Amapá (AP)</option>
                                <option value="Amazonas">&#8227;Amazonas (AM)</option>
                                <option value="Bahia">&#8227;Bahia (BA)</option>
                                <option value="Ceará">&#8227;Ceará (CE)</option>
                                <option value="Distrito Federal">&#8227;Distrito Federal (DF)</option>
                                <option value="Espírito Santo">&#8227;Espírito Santo (ES)</option>
                                <option value="Goiás">&#8227;Goiás (GO)</option>
                                <option value="Maranhão">&#8227;Maranhão (MA)</option>
                                <option value="Mato Grosso">&#8227;Mato Grosso (MT)</option>
                                <option value="Mato Grosso do Sul">&#8227;Mato Grosso do Sul (MS)</option>
                                <option value="Minas Gerais">&#8227;Minas Gerais (MG)</option>
                                <option value="Pará">&#8227;Pará (PA)</option>
                                <option value="Paraíba">&#8227;Paraíba (PB)</option>
                                <option value="Paraná">&#8227;Paraná (PR)</option>
                                <option value="Pernambuco">&#8227;Pernambuco (PE)</option>
                                <option value="Piauí">&#8227;Piauí (PI)</option>
                                <option value="Rio de Janeiro">&#8227;Rio de Janeiro (RJ)</option>
                                <option value="Rio Grande do Norte">&#8227;Rio Grande do Norte (RN)</option>
                                <option value="Rio Grande do Sul">&#8227;Rio Grande do Sul (RS)</option>
                                <option value="Rondônia">&#8227;Rondônia (RO)</option>
                                <option value="Roraima">&#8227;Roraima (RR)</option>
                                <option value="Santa Catarina">&#8227;Santa Catarina (SC)</option>
                                <option value="São Paulo">&#8227;São Paulo (SP)</option>
                                <option value="Sergipe">&#8227;Sergipe (SE)</option>
                                <option value="Tocantins">&#8227;Tocantins (TO)</option>

                            </select>

                        </div>

                        <div class="col-6 mb-2">
                            <label for="cidade">Cidade*</label>
                            <input type="text" id=cidade name="cidade" class="form-control" placeholder="Ex.: Caicó">

                        </div>

                        <div class="col-6 mb-2">
                            <label for="cep">CEP*</label>
                            <input type="text" id="cep" name="cep" class="form-control" placeholder="Ex.: 59300000">

                        </div>

                        <div class="col-6 mb-2">
                            <label for="bairro">Bairro*</label>
                            <input type="text" id="bairro" name="bairro" class="form-control" placeholder="Ex.: Centro">

                        </div>

                        <div class="col-12 mb-2">
                            <label for="endereco">Endereço*</label>
                            <input type="text" id="endereco" name="endereco" class="form-control"
                                   placeholder="Ex.: Rua Coronel Martiniano, N°100">
                        </div>

                    </div>

                    <div class="form-row mb-2">
                        <div class="col-4 mb-2">
                            <label for="telefone">Telefone*</label>
                            <input type="text" id="telefone" name="telefone" class="form-control"
                                   placeholder="Ex.: (84) 01234-5678">

                        </div>

                        <div class="col-4 mb-2">
                            <label for="cel1">Celular 1</label>
                            <input type="text" id="cel1" name="cel1" class="form-control"
                                   placeholder="Ex.: (84) 01234-5678">

                        </div>

                        <div class="col-4 mb-2">
                            <label for="cel2">Celular 2</label>
                            <input type="text" id="cel2" name="cel2" class="form-control"
                                   placeholder="Ex.: (84) 01234-5678">

                        </div>
                    </div>


                    <div class=" row justify-content-end">
                        <!-- Sign up button -->
                        <div class="col-3  ">
                            <input class=" btn btn-info my-4 btn-block" onclick="proximoForm()" value="Próximo"
                                   type="button"/>
                        </div>
                    </div>

                </form>
            </div>

        </div>
    </div>


<?php include(FOOTER_TEMPLATE); ?>