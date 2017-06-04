<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Certificado de fiscalização</title>
<style>
@page landscape {
	size: landscape;
}
body {
	font-family: Arial;
	font-size: 22px;
	text-align: justify;
	padding: 0;
  width: 595px;
  height: 842px;
}
h1 {
	font-size: 50px;
	text-transform: uppercase;
}
#certificado {
	border: 1px solid #000;
	border-radius: 5px;
	margin: auto;
	padding: 20px 40px;
	width: 920px;
}
p.texto {
	margin: 70px 0;
}
p.assinatura {
	display: inline-block;
	font-size: 18px;
	margin: 0 30px 0 200px;
	position: relative;
	width: 300px;
  text-align: center;
}
p.validacao {
	display: inline-block;
	font-size: 19px;
	text-align: center;
	width: 380px;
}
</style>
</head>
<body>
<div id="certificado">
	@foreach ($quest as $q)
	<div class="logo"><img src="/img/logo_ronda_2.png"/></div>
	<div style="font-weight:bold;">POLÍCIA MILITAR DA BAHIA<br>
		COMANDO DE POLICIAMENTO ESPECIALIZADO<br>
		OPERAÇÃO RONDA MARIA DA PENHA<br>
    </div>
  <h4>CERTIDÃO DE FISCALIZAÇÃO DE MEDIDA PROTETIVA</h4>
	<p class="texto">Certificamos que no dia {{$q->data_visita}}  a
		guarnição comandada pelo(a) Maria , Matrícula: 14587 compareceu ao endereço {{$q->end_residencial}} , {{$q->bairro}} , onde reside a Sra. {{$q->nome}} ,
		que solicitou Medida Protetiva de Urgência, conforme ocorrência ou Medida Protetiva
		, onde foi constatado que ela sofreu violência física. <br>
		Telefones de contato da atendida: {{$q->telefone}}<br><br>
		Grau de Risco: Grave<br>
		O acusado voltou a importunar a vítima? </p>
	<p class="validacao">____________________________<br>
      Atendida
  </p>
	<p class="assinatura">
	____________________________<br>
     Testemunha
  </p>
  <p class="validacao">____________________________<br>
   Comandante da Guarnição<br>
   Matrícula: 14587
  </p>
	<p class="assinatura">
	____________________________<br>
    Patrulheiro<br>
    Matrícula: 14587
  </p>
	@endforeach
</div>
</body>
</html>
