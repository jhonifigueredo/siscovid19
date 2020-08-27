@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title text-center">{{ config('app.cadastro') }}</h3>
                </div>

                <form role="form">
                    <div class="card-body form-group">
                        <div class="card-title">
                            <h4 class="card-header text-center">Identificação do Auto</h4>
                        </div>
                            <div class="form-group">
                                <label for="">Nº do AIA:</label>
                                <input type="text" class="form-control" id="aiaNumber" name="aiaNumber">
                            </div>
                            <div class="form-group">
                                <label for="">Protocolo:</label>
                                <input type="text" class="form-control" id="protocoloOcorencia" name="protocoloOcorencia">
                            </div>
                        <div class="card-title">
                            <h4 class="card-header text-center">Motivo da Infração</h4>
                        </div>
                            <div class="form-group">
                                <label for="">Informe o motivo:</label>
                                <select class="form-control select2" style="width: 100%;">
                                    <option selected="selected">--Selecione--</option>
                                    <option>Descumprimento de medida de saúde - Coronavírus - Pessoa Física</option>
                                    <option>Descumprimento de medida de saúde - Coronavírus - Pessoa Jurídica</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Descrição da infração:</label>
                                <input type="text" class="form-control" id="aiaDescricao" name="aiaDescricao">
                            </div>
                            <div class="form-group">
                                <label for="">Amparo legal:</label>
                                <input type="text" class="form-control" id="aiaAmparo" name="aiaAmparo">
                            </div>
                        <div class="card-title">
                            <h4 class="card-header text-center">Identificação do Infrator</h4>
                        </div>
                            <div class="form-group">
                                <label for="">Nome do infrator:</label>
                                <input type="text" class="form-control" id="pfNome" name="pfNome">
                            </div>
                            <div class="form-group">
                                <label for="">RG do infrator:</label>
                                <input type="text" class="form-control" id="pfRg" name="pfRg">
                            </div>
                            <div class="form-group">
                                <label for="">UF do órgão expedidor:</label>
                                <input type="text" class="form-control" id="pfUfOrgao" name="pfUfOrgao">
                            </div>
                            <div class="form-group">
                                <label for="">Órgão expedidor do RG:</label>
                                <input type="text" class="form-control" id="pfExpedidor" name="pfExpedidor">
                            </div>
                            <div class="form-group">
                                <label for="">CPF do infrator:</label>
                                <input type="text" class="form-control" id="pfCpf" name="pfCpf">
                            </div>
                            <div class="form-group">
                                <label for="">Nome fantasia da empresa:</label>
                                <input type="text" class="form-control" id="pjNome" name="pjNome">
                            </div>
                            <div class="form-group">
                                <label for="">CNPJ da empresa:</label>
                                <input type="text" class="form-control" id="pjCnpj" name="pjCnpj">
                            </div>
                            <div class="form-group">
                                <label for="">Nome do responsável:</label>
                                <input type="text" class="form-control" id="pjNomeResponsavel" name="pjNomeResponsavel">
                            </div>
                            <div class="form-group">
                                <label for="">Endereço do Infrator:</label>
                                <input type="text" class="form-control" id="endInfrator" name="endInfrator">
                            </div>
                            <div class="form-group">
                                <label for="">Número:</label>
                                <input type="number" class="form-control" id="endNumero" name="endNumero">
                            </div>
                            <div class="form-group">
                                <label for="">Complemento:</label>
                                <input type="text" class="form-control" id="endComplemento" name="endComplemento">
                            </div>
                            <div class="form-group">
                                <label for="">Bairro:</label>
                                <input type="text" class="form-control" id="endBairro" name="endBairro">
                            </div>
                            <div class="form-group">
                                <label for="">UF:</label>
                                <input type="text" class="form-control" id="endUf" name="endUf">
                            </div>
                            <div class="form-group">
                                <label for="">Município:</label>
                                <input type="text" class="form-control" id="endMunicipio" name="endMunicipio">
                            </div>
                        <div class="card-title">
                            <h4 class="card-header text-center">Local da Infração</h4>
                        </div>
                            <div class="form-group">
                                <label for="">Endereço:</label>
                                <input type="text" class="form-control" id="localEndereco" name="localEndereco">
                            </div>
                            <div class="form-group">
                                <label for="">Número:</label>
                                <input type="number" class="form-control" id="localNumero" name="localNumero">
                            </div>
                            <div class="form-group">
                                <label for="">Complemento:</label>
                                <input type="text" class="form-control" id="localComplemento" name="localComplemento">
                            </div>
                            <div class="form-group">
                                <label for="">Bairro:</label>
                                <input type="text" class="form-control" id="localBairro" name="localBairro">
                            </div>
                            <div class="form-group">
                                <label for="">UF:</label>
                                <input type="text" class="form-control" id="localUf" name="localUf">
                            </div>
                            <div class="form-group">
                                <label for="">Município:</label>
                                <input type="text" class="form-control" id="localMunicipio" name="localMunicipio">
                            </div>
                            <div class="form-group">
                                <label for="">Data:</label>
                                <input type="date" class="form-control" id="localData" name="localData">
                            </div>
                            <div class="form-group">
                                <label for="">Hora:</label>
                                <input type="time" class="form-control" id="localHora" name="localHora">
                            </div>
                        <div class="card-title">
                            <h4 class="card-header text-center">Observações</h4>
                        </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="aiaObservacoes" name="aiaObservacoes">
                            </div>
                    
                        <button type="submit" class="btn btn-success">Salvar</button>
                        <button type="reset" class="btn btn-warning float-right">Limpar</button>

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
