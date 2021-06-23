@extends('layout.app', ['current' => 'teste'])
    <div id="principal" class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <div class="row">
                        <div class="col-md-12">
                            <label class="font-weight-bold" for="contratoInicial">Contrato Inicial:</label>
                            <input class="form-control" type="number" id="contratoInicial" placeholder="Digite o número do contrato">
                        </div>
                    </div>
                </div>        
                <div class="col-md-3">
                    <div class="row">
                        <div class="col-md-12">
                            <label class="font-weight-bold" for="contratoFinal">Contrato Final:</label>
                            <input class="form-control" type="number" max="99999" id="contratoFinal" placeholder="Digite o número do contrato">
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="row">
                        <div class="col-md-12">
                            <label class="font-weight-bold" for="dataEmissao">Data de Emissão do contrato:</label>
                            <input class="form-control" type="date" id="dataEmissao">
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="row">
                        <div class="col-md-12">
                            <label class="font-weight-bold" for="dataPagamento">Data de Pagamento:</label>
                            <input class="form-control" type="date" id="dataPagamento">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12">
                            <label class="font-weight-bold" for="tipoPessoa">Tipo de pessoa:</label>
                            <select class="form-control" name="tipoPessoa" id="tipoPessoa">
                                <option selected>Selecione...</option>
                                <option>Física</option>
                                <option>Jurídica</option>
                                <option>Todos</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12">
                            <label class="font-weight-bold" for="codEmpresa">Empresa:</label>
                            <select class="form-control" name="codEmpresa" id="codEmpresa">
                                <option selected>Selecione...</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12">
                            <button id="btn-pesquisar" class="btn btn-block btn-lg btn-icon btn-success btn-shadow font-weight-bold mt-4"><i class="pe-7s-search btn-icon-wrapper"></i> Pesquisar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>