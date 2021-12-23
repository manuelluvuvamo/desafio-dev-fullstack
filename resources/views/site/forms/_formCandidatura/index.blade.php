<div class="panel panel-default active">
    <div class="panel-heading" id="headingOne">
        <h3>
            <a href="#collapseOne" data-toggle="collapse" data-parent="#accordion">
                Dados Biográficos
            </a>
        </h3>
    </div>

    <div id="collapseOne" class="panel-collapse collapse in">
        <div class="panel-body">

            <fieldset>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="vc_primeiroNome" class="form-label">Primeiro Nome *</label>
                        <input type="text" class="border-secondary" name="vc_primeiroNome" class="border-secondary"
                            id="vc_primeiroNome" autocomplete="off" placeholder="Primeiro Nome" required />
                    </div>
                    <div class="form-group col-md-4">
                        <label for="vc_nomedoMeio" class="form-label">Nomes do Meio</label>
                        <input type="text" class="border-secondary" name="vc_nomedoMeio" class="border-secondary"
                            id="vc_nomedoMeio" autocomplete="off" placeholder="Nomes do Meio" />
                    </div>
                    <div class="form-group col-md-4">
                        <label for="vc_apelido" class="form-label">Último Nome *</label>
                        <input type="text" class="border-secondary" name="vc_apelido" id="vc_apelido"
                            class="border-secondary" autocomplete="off" placeholder="Ultimo Nome" required />
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="vc_nomePai" class="form-label">Nome do Pai <small>(deixar em
                                branco se não tiver)</small></label>
                        <input type="text" class="border-secondary" name="vc_nomePai" class="border-secondary"
                            id="vc_nomePai" autocomplete="off" placeholder="Nome do Pai" />
                    </div>
                    <div class="form-group col-md-6">
                        <label for="vc_nomeMae" class="form-label">Nome da Mãe <small>(deixar em
                                branco se não tiver)</small></label>
                        <input type="text" class="border-secondary" name="vc_nomeMae" class="border-secondary"
                            id="vc_nomeMae" autocomplete="off" placeholder="Nome da Mãe" />
                    </div>

                </div>

                <div class="form-row">
                    <div class="form-group-flex">
                        <div class="form-radio">
                            <label for="gender">Gênero *</label>
                          <!--  <div class="form-flex">
                                <input type="radio" class="border-secondary" name="vc_genero" class="border-secondary"
                                    value="Masculino" id="male" checked="checked" />
                                <label for="male">
                                    <img src="/images/icon-male.png" alt="Male">
                                </label>
                                <input type="radio" class="border-secondary" name="vc_genero" class="border-secondary"
                                    value="Feminino" id="female" />
                                <label for="female">
                                    <img src="/images/icon-female.png" alt="Female">
                                </label>
                            </div>

                            -->

                            <div class="select-group" class="border-secondary" id="vc_genero">
                            <select class="border-secondary" name="vc_genero" required>
                                <option value="" selected disabled>Selecione o Gênero</option>
                                <option value="Masculino">Masculino</option>
                                <option value="Feminino">Feminino</option>
                            </select>
                        </div>

                        </div>
                        @if ($idadesdecandidaturas)
                            <div class="form-date">
                                <label for="dt_dataNascimento" class="form-label">Data de Nascimento *</label>
                                <input type="date" class="border-secondary" name="dt_dataNascimento"
                                    id="dt_dataNascimento"
                                    max="<?php echo date('Y-m-d', strtotime($idadesdecandidaturas->dt_limiteaesquerda)); ?>"
                                    min="<?php echo date('Y-m-d', strtotime($idadesdecandidaturas->dt_limitemaxima)); ?>"
                                    required />
                            </div>
                        @endif
                    </div>


                    <div class="form-select col-md-3">
                        <label for="vc_estadoCivil" class="form-label">Estado Civil *</label>
                        <div class="select-group" class="border-secondary" id="vc_estadoCivil">
                            <select class="border-secondary" name="vc_estadoCivil" required>
                                <option value="" selected disabled>Selecione uma opção</option>
                                <option value="Casado(a)">Casado(a)</option>
                                <option value="Solteiro(a)">Solteiro(a)</option>
                                <option value="Viuvo(a)">Viuvo(a)</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-select col-md-3">
                        <label for="vc_dificiencia" class="form-label">Portador de Deficiêcia Física? *</label>
                        <div class="select-group">
                            <select class="border-secondary" name="vc_dificiencia" class="border-secondary" required>
                                <option value="" selected disabled>Selecione uma opção</option>
                                <option value="Não">Não</option>
                                <option value="Sim">Sim</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="vc_bi" class="form-label">Bilhete de Identidade *</label>
                        <input type="text" class="border-secondary" class="border-secondary" name="vc_bi" id="vc_bi"
                            minlength="14" maxlength="14" min="14" max="14" placeholder="Nº do Bilhete de Identidade" required
                            autocomplete="off" />
                    </div>
                    <div class="form-group col-md-4">
                        <label for="dt_emissao" class="form-label">Data de Emissão do Bilhete de
                            Identidade *</label>
                        <input type="date" class="border-secondary" class="border-secondary" name="dt_emissao"
                            id="dt_emissao" max="<?php echo date('Y-m-d'); ?>"
                            required />
                    </div>
                    <div class="form-select col-md-4">
                        <label for="vc_localEmissao" class="form-label">Local Emissão do Bilhete de Identidade *</label>
                        <div class="select-group">
                            <select class="border-secondary" name="vc_localEmissao" class="border-secondary"
                                id="vc_localEmissao" required>
                                <option value="" selected disabled>Selecione uma provincia</option>
                                @foreach ($provincias as $provincia)
                                    <option value="{{ $provincia['nome'] }}">{{ $provincia['nome'] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="vc_residencia" class="form-label">Residência *</label>
                        <input type="text" class="border-secondary" class="border-secondary" name="vc_residencia"
                            id="vc_residencia" placeholder="Residência" autocomplete="off" required />
                    </div>
                    <div class="form-group col-md-4">
                        <label for="vc_naturalidade" class="form-label">Natural de *</label>
                        <input type="text" class="border-secondary" class="border-secondary" name="vc_naturalidade"
                            id="vc_naturalidade" placeholder="Natural de" autocomplete="off" required />
                    </div>

                    <div class="form-select col-md-4">
                        <label for="vc_provincia" class="form-label">Provincia de *</label>
                        <div class="select-group">
                            <select class="border-secondary" name="vc_provincia" class="border-secondary"
                                id="vc_provincia" required>
                                <option value="" selected disabled>Selecione uma provincia</option>
                                @foreach ($provincias as $provincia)
                                    <option value="{{ $provincia['nome'] }}">{{ $provincia['nome'] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="el_email" class="form-label">E-mail</label>
                        <input type="email" class="border-secondary" class="border-secondary" name="vc_email"
                            id="vc_email" placeholder="E-mail" autocomplete="off" />
                    </div>
                    <div class="form-group col-md-6">
                        <label for="it_telefone" class="form-label">Telefone *</label>
                        <input type="number" class="border-secondary" name="it_telefone" id="it_telefone"
                            placeholder="Telefone" min="900000000" max="1000000000" maxlength="9" autocomplete="off"
                            required />
                    </div>
                </div>
            </fieldset>

        </div>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading" id="headingTwo">
        <h3>
            <a href="#collapseTwo" data-toggle="collapse" data-parent="#accordion">Dados
                Académicos</a>
        </h3>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse">
        <div class="panel-body">
            <fieldset>
                <div class="form-row">
                    <div class="form-group col-md-8">
                        <label for="vc_EscolaAnterior" class="form-label">Escola Anterior *</label>
                        <input type="text" class="border-secondary" name="vc_EscolaAnterior" id="vc_EscolaAnterior"
                            placeholder="Nome da Escola Anterior" autocomplete="off" required />
                    </div>

                    <div class="form-group col-md-4">
                        <label for="ya_anoConclusao" class="form-label">Ano de Conclusão *</label>
                        <input type="number" min="1900" max="2100" class="border-secondary" name="ya_anoConclusao"
                            id="ya_anoConclusao" placeholder="Ano de Conclusão na escola Anterior" required />
                    </div>
                </div>


            </fieldset>
            <fieldset>
                <div class="container shadow-none">

                    <div class="row">
                        <!--Informe a nota de língua portuguesa-->
                        <div class=" col-md-4">
                            <div class="form-group">
                                <label>Informe a nota de:</label>
                                <input disabled value="Língua Portuguesa" type="text" class="form-control border-secondary" id="inp22">
                            </div>
                        </div>
                        <div class="col-4 col-md-2">
                            <div class="form-group">
                                <label>7ª classe:</label>
                                <input required type="number" min="0" max="20" class="form-control border-secondary " id="inp23"
                                    name="LP_S">
                            </div>
                        </div>
                        <div class="col-4 col-md-2">
                            <div class="form-group">
                                <label>8ª classe:</label>
                                <input required type="number" min="0" max="20" class="form-control border-secondary" id="inp24"
                                    name="LP_O">
                            </div>
                        </div>
                        <div class="col-4 col-md-2">
                            <div class="form-group">
                                <label>9ª classe:</label>
                                <input required type="number" min="0" max="20" class="form-control border-secondary" id="inp25"
                                    name="LP_N">
                            </div>
                        </div>
                        <!--informe a nota de matemática-->
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Informe a nota de:</label>
                                <input disabled value="Matemática" type="text" class="form-control border-secondary" id="inp26">
                            </div>
                        </div>
                        <div class="col-4 col-md-2">
                            <div class="form-group">
                                <label>7ª classe:</label>
                                <input required type="number" min="0" max="20" class="form-control border-secondary" id="inp27"
                                    name="MAT_S">
                            </div>
                        </div>

                        <div class="col-4 col-md-2">
                            <div class="form-group">
                                <label>8ª classe:</label>
                                <input required type="number" min="0" max="20" class="form-control border-secondary" id="inp28"
                                    name="MAT_O">
                            </div>
                        </div>
                        <div class="col-4 col-md-2">
                            <div class="form-group">
                                <label>9ª classe:</label>
                                <input required type="number" min="0" max="20" class="form-control border-secondary" id="inp29"
                                    name="MAT_N">
                            </div>
                        </div>
                        <!--informe a nota de física-->
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Informe a nota de:</label>
                                <input disabled value="Física" type="text" class="form-control border-secondary" id="inp30">
                            </div>
                        </div>
                        <div class="col-4 col-md-2">
                            <div class="form-group">
                                <label>7ª classe:</label>
                                <input required type="number" min="0" max="20" class="form-control border-secondary" id="inp31"
                                    name="FIS_S">
                            </div>
                        </div>
                        <div class="col-4 col-md-2">
                            <div class="form-group">
                                <label>8ª classe:</label>
                                <input required type="number" min="0" max="20" class="form-control border-secondary" id="inp32"
                                    name="FIS_O">
                            </div>
                        </div>
                        <div class="col-4 col-md-2">
                            <div class="form-group">
                                <label>9ª classe:</label>
                                <input required type="number" min="0" max="20" class="form-control border-secondary" id="inp33"
                                    name="FIS_N">
                            </div>
                        </div>
                        <!--informe a nota de Quimica-->
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Informe a nota de:</label>
                                <input disabled value="Quimica" type="text" class="form-control border-secondary" id="inp34">
                            </div>
                        </div>
                        <div class="col-4 col-md-2">
                            <div class="form-group">
                                <label>7ª classe:</label>
                                <input required type="number" min="0" max="20" class="form-control border-secondary p-3" id="inp35"
                                    name="QUIM_S">
                            </div>
                        </div>
                        <div class="col-4 col-md-2">
                            <div class="form-group">
                                <label>8ª classe:</label>
                                <input required type="number" min="0" max="20" class="form-control border-secondary" id="inp36"
                                    name="QUIM_O">
                            </div>
                        </div>
                        <div class="col-4 col-md-2">
                            <div class="form-group">
                                <label>9ª classe:</label>
                                <input required type="number" min="0" max="20" class="form-control border-secondary" id="inp37"
                                    name="QUIM_N">
                            </div>
                        </div>
                    </div>

                </div>
            </fieldset>



        </div>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading" id="headingThree">
        <h3>
            <a href="#collapseThree" data-toggle="panel-collapse" data-parent="#accordion">Dados
                da nova Escola
            </a>
        </h3>
    </div>
    <div id="collapseThree" class="panel-collapse collapse">
        <div class="panel-body">
            <fieldset>
                <div class="form-select col-md-5">
                    <label for="vc_nomeCurso" class="form-label">Curso à se Candidatar *</label>
                    <div class="select-group">
                        <select class="border-secondary" name="vc_nomeCurso" id="vc_nomeCurso" required>
                            <option value="" selected disabled>Selecione um curso</option>
                            @foreach ($cursos as $curso)
                                <option value="{{ $curso->vc_nomeCurso }}">{{ $curso->vc_nomeCurso }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group col-md-3">
                    <label for="vc_anoLectivo" class="form-label">Ano Lectivo #</label>
                    @isset($anoLectivo)
                        <input type="text" class="border-secondary" name="vc_anoLectivo"
                            value="{{ $anoLectivo->ya_inicio . '-' . $anoLectivo->ya_fim }}" id="vc_anoLectivo"
                            readonly />
                    @endisset
                </div>
                <div class="form-select col-md-4">
                    <label for="vc_classe" class="form-label">Classe à se Candidatar *</label>
                    <div class="select-group">
                        <select class="border-secondary" name="vc_classe" id="vc_classe" required>
                            <option value="" selected disabled>Selecione uma classe</option>
                            @foreach ($classes as $classe)
                                <option value="{{ $classe->vc_classe }}">{{ $classe->vc_classe }}ªclasse</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </fieldset>



            <div class="form-submit mt-5">
                <input type="submit" value="Submeter" class="au-btn">
            </div>
        </div>
    </div>
</div>
