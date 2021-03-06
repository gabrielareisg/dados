@extends('laravel-usp-theme::master')

@section('content')

<div class="card">
    <div class="card-header"><b>Dados gerais do portal: 9</b></div>
    <div class="card-body">

        <ul class="list-group">
            <li class="list-group-item"><a href="{{ config('app.url') }}/ativos">Totais de pessoas com vínculos ativos.</a></li>
            <li class="list-group-item"><a href="{{ config('app.url') }}/ativosMicrosNotes">Totais de microcomputadores e notebooks.</a></li>
            <li class="list-group-item"><a href="{{ config('app.url') }}/conveniosAtivos">Totais de convênios ativos.</a></li>
            <li class="list-group-item"><a href="{{ config('app.url') }}/ativosDocentesPorFuncao">Totais de docentes contabilizados por função.</a></li>
            <li class="list-group-item"><a href="{{ config('app.url') }}/ativosFuncionariosDepartamento">Totais de funcionários contabilizados por departamento.</a></li>
            <li class="list-group-item"><a href="{{ config('app.url') }}/ativosProfAssociadoDpto">Totais de Professores Associados contabilizados por departamento.</a></li>
            <li class="list-group-item"><a href="{{ config('app.url') }}/ativosProfDoutorDpto">Totais de Professores Doutores contabilizados por departamento.</a></li>
            <li class="list-group-item"><a href="{{ config('app.url') }}/ativosProfTitularDpto">Totais de Professores Titulares contabilizados por departamento.</a></li>
            <li class="list-group-item"><a href="{{ config('app.url') }}/exAlunos">Total de Ex Alunos da Graduação e da Pós Graduação.</a></li>
        </ul>

    </div>
</div>

<br>

<div class="card">
    <div class="card-header"><b>Dados por gênero: 14</b></div>
    <div class="card-body">

        <ul class="list-group">
            <li class="list-group-item"><a href="{{ config('app.url') }}/ativosPGGrad">Totais de pessoas da Graduação contabilizadas por
                    gênero.</a>
            </li>
            <li class="list-group-item"><a href="{{ config('app.url') }}/ativosPGPos">Totais de pessoas da Pós Graduação contabilizadas por
                    gênero.</a>
            </li>
            <li class="list-group-item"><a href="{{ config('app.url') }}/ativosPGDocentes">Totais de docentes contabilizados por gênero.</a>
            </li>
            <li class="list-group-item"><a href="{{ config('app.url') }}/ativosEstagiarios">Totais de estagiários contabilizados por
                    gênero.</a></li>
            <li class="list-group-item"><a href="{{ config('app.url') }}/ativosFuncionarios">Totais de funcionários contabilizados por
                    gênero.</a></li>
            <li class="list-group-item"><a href="{{ config('app.url') }}/ativosGradSociais">Totais de alunos da Graduação em Ciências Sociais
                    contabilizados por gênero.</a></li>
            <li class="list-group-item"><a href="{{ config('app.url') }}/ativosGradFilosofia">Totais de alunos da Graduação em Filosofia
                    contabilizados
                    por gênero.</a></li>
            <li class="list-group-item"><a href="{{ config('app.url') }}/ativosGradGeografia">Totais de alunos da Graduação em Geografia
                    contabilizados
                    por gênero.</a></li>
            <li class="list-group-item"><a href="{{ config('app.url') }}/ativosGradHistoria">Totais de alunos da Graduação em História
                    contabilizados
                    por
                    gênero.</a></li>
            <li class="list-group-item"><a href="{{ config('app.url') }}/ativosGradLetras">Totais de alunos da Graduação em Letras
                    contabilizados por
                    gênero.</a></li>
            <li class="list-group-item"><a href="{{ config('app.url') }}/ativosCulturaExtensao">Totais de alunos de Cultura e Extensão
                    contabilizados
                    por
                    gênero.</a></li>
            <li class="list-group-item"><a href="{{ config('app.url') }}/ativosPosDoutorado">Totais de alunos de Pós Doutorado contabilizados
                    por
                    gênero.</a></li>
            <li class="list-group-item"><a href="{{ config('app.url') }}/ativosChefesAdministrativos">Totais de chefes administrativos
                    contabilizados
                    por
                    gênero.</a></li>
            <li class="list-group-item"><a href="{{ config('app.url') }}/coordCursosGrad">Totais de coordenadores de cursos de Graduação, contabilizados por gênero.</a></li>
        </ul>

    </div>
</div>

<br>

<div class="card">
    <div class="card-header"><b>Dados por curso: 8</b></div>
    <div class="card-body">

        <ul class="list-group">
            <li class="list-group-item"><a href="{{ config('app.url') }}/ativosPCGrad">Totais de pessoas da Graduação com vínculos ativos,
                    separadas
                    por
                    curso.</a></li>
            <li class="list-group-item"><a href="{{ route('ativosposdoutoradocurso') }}">Totais de alunos Pós-doutorando
                    ativos
                    por curso.</a></li>
            <li class="list-group-item"><a href="{{ config('app.url') }}/concluintesGradPorCurso/{{date('Y')}}">Total de concluintes da Graduação por
                    curso.
                        </a></li>
            <li class="list-group-item"><a href="{{ config('app.url') }}/trancamentosCursoPorSemestre/Letras">Total de trancamentos por semestre dos cursos.
                        </a></li>
            <li class="list-group-item"><a href="{{ config('app.url') }}/trancamentosSociaisPorSemestre">Total de trancamentos por semestre do
                    curso de
                    Ciências Sociais.</a></li>
            <li class="list-group-item"><a href="{{ config('app.url') }}/trancamentosFilosofiaPorSemestre">Total de trancamentos por semestre
                    do curso
                    de
                    Filosofia.</a></li>
            <li class="list-group-item"><a href="{{ config('app.url') }}/trancamentosGeografiaPorSemestre">Total de trancamentos por semestre
                    do curso
                    de
                    Geografia.</a></li>
            <li class="list-group-item"><a href="{{ config('app.url') }}/trancamentosHistoriaPorSemestre">Total de trancamentos por semestre do
                    curso
                    de
                    História.</a></li>
            <li class="list-group-item"><a href="{{ config('app.url') }}/trancamentosLetrasPorSemestre">Total de trancamentos por semestre do
                    curso de
                    Letras.</a></li>
        </ul>
    </div>
</div>

<br>

<div class="card">
    <div class="card-header"><b>Dados pós graduação: 4</b></div>
    <div class="card-body">
    <ul class="list-group">
        <li class="list-group-item"><a href="{{ config('app.url') }}/ativosPorProgramaPos">Totais de pessoas da Pós-Graduação, separadas por programa.</a></li>
        <li class="list-group-item"><a href="{{ config('app.url') }}/ativosPosNivelPgm">Quantidade de alunos ativos da pós-graduação por nível de programa.</a></li>
        <li class="list-group-item"><a href="{{ config('app.url') }}/orientadoresPosGR">Quantidade de orientadores credenciados na área de concentração do programa de pós graduação.</a></li>
        <li class="list-group-item"><a href="{{ config('app.url') }}/alunosEspeciaisPosGrDpto">Quantidade de alunos especiais 
            de pós-graduação ativos por departamento</a></li>
    </ul>
    </div>
</div>

<br>

<div class="card">
    <div class="card-header"><b>Dados por ano: 9</b></div>
    <div class="card-body">
        <ul class="list-group">
            <li class="list-group-item"><a href="{{ config('app.url') }}/ativosBeneficiosConHist">Série histórica de benefícios concedidos por
                    ano a
                    partir de 2014.</a></li>
            <li class="list-group-item"><a href="{{ config('app.url') }}/beneficiados">Série histórica: quantidade de alunos com benefícios
                    2010-2020.</a></li>
            <li class="list-group-item"><a href="{{ config('app.url') }}/concluintesGradPorAno">Série histórica de concluintes da Graduação por
                    ano a
                    partir de 2010.</a></li>
            <li class="list-group-item"><a href="{{ config('app.url') }}/concluintesPosPorAno">Série histórica de concluintes da Pós-Graduação
                    por ano
                    a
                    partir de 2010.</a></li>
            <li class="list-group-item"><a href="{{ config('app.url') }}/Benef2019Prog">Quantidade de benefícios concedidos em 2019 separados
                    por
                    programa.</a></li>
            <li class="list-group-item"><a href="{{ config('app.url') }}/beneficiosAtivosGraduacao2020">Quantidade de alunos de Graduação com
                    benefícios
                    (ativos) em 2020.</a></li>
            <li class="list-group-item"><a href="{{ config('app.url') }}/ativosBolsaLivro">Quantidade de alunos com o benefício Bolsa Livro
                    ativo em
                    2020.</a></li>
            <li class="list-group-item"><a href="{{ config('app.url') }}/alunosEspeciaisPosGrAno">Série histórica: quantidade de alunos especiais 
            de pós-graduação (2010-2020)</a></li>
            <li class="list-group-item"><a href="{{ config('app.url') }}/alunosEspeciaisGrAno">Série histórica: quantidade de alunos especiais 
            de graduação (2010-2020)</a></li>
        </ul>
    </div>
</div>

<br>

<div class="card">
    <div class="card-header"><b>Dados por cor/raça: 3</b></div>
    <div class="card-body">
        <ul class="list-group">
            <li class="list-group-item"><a href="{{ config('app.url') }}/autodeclaradosGradAtivos">Totais de alunos autodeclarados da Graduação
                    contabilizados por raça/cor.</a></li>
            <li class="list-group-item"><a href="{{ config('app.url') }}/autodeclaradosPosAtivos">Totais de alunos autodeclarados da
                    Pós-Graduação
                    contabilizados por raça/cor.</a></li>
            <li class="list-group-item"><a href="{{ config('app.url') }}/autodeclaradosCeuAtivos">Totais de alunos autodeclarados da Cultura e
                    Extensão
                    Universitária contabilizados por raça/cor.</a></li>
        </ul>
    </div>
</div>

<br>

<div class="card">
    <div class="card-header"><b>Dados por nacionalidade/localidade: 8</b></div>
    <div class="card-body">
        <ul class="list-group">
                <li class="list-group-item"><a href="{{ config('app.url') }}/ativosGradPaisNasc">Totais de alunos brasileiros e estrangeiros da Graduação.</a></li>
                <li class="list-group-item"><a href="{{ config('app.url') }}/ativosPosPaisNasc">Totais de alunos brasileiros e estrangeiros da Pós Graduação.</a></li>
                <li class="list-group-item"><a href="{{ config('app.url') }}/ativosPDPaisNasc">Totais de alunos brasileiros e estrangeiros de Pós Doutorado.</a></li>
                <li class="list-group-item"><a href="{{ config('app.url') }}/ativosDocentesPaisNasc">Totais de docentes brasileiros e estrangeiros da FFLCH.</a></li>
                <li class="list-group-item"><a href="{{ config('app.url') }}/ativosCeuPaisNasc">Totais de alunos brasileiros e estrangeiros de Cultura e Extensão Universitária.</a></li>
                <li class="list-group-item"><a href="{{ config('app.url') }}/ativosAlunosEstado">Totais de alunos contabilizados por estados.</a></li>
                <li class="list-group-item"><a href="{{ config('app.url') }}/ativosDocentesPorFuncao">Totais de docentes contabilizados por função.</a></li>
                <li class="list-group-item"><a href="{{ config('app.url') }}/ativosAlunosAutodeclarados">Totais de alunos autodeclarados.</a></li>
        </ul>
    </div>
</div>

<br>

<div class="card">
    <div class="card-header"><b>Dados por ingresso: 11</b></div>
    <div class="card-body">
        <ul class="list-group">
            <li class="list-group-item"><a href="{{ config('app.url') }}/ativosAlunosGradTipoIngresso">Totais de alunos da Graduação por tipo de ingresso.</a></li>
            <li class="list-group-item"><a href="{{ config('app.url') }}/ingressantesGeoMasculino">Série histórica: Ingressantes do gênero masculino no curso de Geografia 2010-2020</a></li>
            <li class="list-group-item"><a href="{{ config('app.url') }}/ingressantesGeoFeminino">Série histórica: Ingressantes do gênero feminino no curso de Geografia 2010-2020</a></li>
            <li class="list-group-item"><a href="{{ config('app.url') }}/ingressantesLetrasMasculino">Série histórica: Ingressantes do gênero masculino no curso de Letras 2010-2020</a></li>
            <li class="list-group-item"><a href="{{ config('app.url') }}/ingressantesLetrasFeminino">Série histórica: Ingressantes do gênero feminino no curso de Letras 2010-2020</a></li>
            <li class="list-group-item"><a href="{{ config('app.url') }}/ingressantesFilosofiaMasculino">Série histórica: Ingressantes do gênero masculino no curso de Filosofia 2010-2020</a></li>
            <li class="list-group-item"><a href="{{ config('app.url') }}/ingressantesFilosofiaFeminino">Série histórica: Ingressantes do gênero feminino no curso de Filosofia 2010-2020</a></li>
            <li class="list-group-item"><a href="{{ config('app.url') }}/ingressantesHistoriaMasculino">Série histórica: Ingressantes do gênero masculino no curso de História 2010-2020</a></li>
            <li class="list-group-item"><a href="{{ config('app.url') }}/ingressantesHistoriaFeminino">Série histórica: Ingressantes do gênero feminino no curso de História 2010-2020</a></li>
            <li class="list-group-item"><a href="{{ config('app.url') }}/ingressantesSociaisMasculino">Série histórica: Ingressantes do gênero masculino no curso de Ciências Sociais 2010-2020</a></li>
            <li class="list-group-item"><a href="{{ config('app.url') }}/ingressantesSociaisFeminino">Série histórica: Ingressantes do gênero feminino no curso de Ciências Sociais 2010-2020</a></li>
        </ul>
    </div>
    
</div>

<br>
<div class="card">
    <div class="card-header"><b>Exportando dados</b></div>
    <div class="card-body">
        <ul class="list-group">
            <li class="list-group-item"><a href="{{ config('app.url') }}/programas">Exportar produção dos programas</a></li>
            <li class="list-group-item"><a href="{{ config('app.url') }}/defesas">Defesas</a></li>
       </ul>
    </div>
</div>


@endsection