<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Questionario;
use DB;
use Barryvdh\DomPDF\Facade as PDF;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::table('questionario')->count();
        $risco_1 = DB::table('questionario')
                  ->where('risco', 1)
                  ->count();
        $risco_2 = DB::table('questionario')
                  ->where('risco', 2)
                  ->count();
        $risco_3 = DB::table('questionario')
                  ->where('risco', 3)
                  ->count();

        return view('admin.pages.index')->with('users',$users)->with('risco_1',$risco_1)->with('risco_2',$risco_2)->with('risco_3',$risco_3);
    }
    public function questionario()
    {
        return view('admin.pages.questionario');
    }

    public function cadastrar(Request $request){
    $questionario = new Questionario;
    $questionario->guarnicao = $request->guarnicao;
    $questionario->data_visita = $request->data;
    $questionario->mpu = $request->mpu;
    $questionario->origem_solicitacao = $request->origem_solicitacao;
    $questionario->nome = $request->nome;
    $questionario->end_residencial = $request->end_residencial;
    $questionario->ponto_referencia = $request->ponto_referencia;
    $questionario->bairro = $request->bairro;
    $questionario->end_visita = $request->end_visita;
    $questionario->ponto_referencia_v = $request->ponto_referencia_v;
    $questionario->bairro_end_v = $request->bairro_end_v;
    $questionario->telefone = $request->telefone;
    $questionario->melhor_turno = $request->turno;
    $questionario->estado_civil = $request->estado_civil;
    $questionario->filhos = $request->filhos;
    $questionario->faixa_filhos = $request->faixa_filhos;
    $questionario->filhos_agressor = $request->filhos_agressor;
    $questionario->escolaridade = $request->escolaridade;
    $questionario->etnia = $request->raca;
    $questionario->idade = $request->idade;
    $questionario->religiao = $request->religiao;
    $questionario->profissao = $request->profissao;
    $questionario->ultimo_emprego = $request->ultimo_emprego;
    $questionario->trabalha = $request->trabalha;
    $questionario->local_trabalho = $request->local;
    $questionario->renda = $request->renda;
    $questionario->risco = $request->risco;
    $questionario->responsavel_sustento = $request->responsavel_sustento;
    $questionario->save();

    return View('admin.pages.index');
  }

  public function listagem(){
    $quest = DB::table('questionario')
    ->select('questionario.*')->get();

    return view('admin.pages.listar')->with('quest', $quest);
  }

  public function visualizar(){
    $quest = DB::table('questionario')
    ->select('questionario.*')->get();

    return view('admin.pages.quest')->with('quest', $quest);
  }

  public function editar($id){
    $quest = DB::table('questionario')
    ->select('questionario.*')->where('questionario.id',$id)
    ->get();

    return view('admin.pages.editar')->with('quest', $quest);

  }

  public function update(Request $request,$id){

   $data = [
     'nome'=>$request->nome
     ,'end_residencial'=>$request->end_residencial
     ,'ponto_referencia'=>$request->ponto_referencia
     ,'bairro'=>$request->bairro
     ,'end_visita'=>$request->end_visita
     ,'ponto_referencia_v'=>$request->ponto_referencia_v
     ,'bairro_end_v'=>$request->bairro_end_v
     ,'telefone'=>$request->telefone
     ,'melhor_turno'=>$request->turno
     ,'estado_civil'=>$request->estado_civil
     ,'filhos'=>$request->filhos
     ,'faixa_filhos'=>$request->faixa_filhos
     ,'filhos_agressor'=>$request->filhos_agressor
     ,'escolaridade'=>$request->escolaridade
     ,'etnia'=>$request->raca
     ,'idade'=>$request->idade
     ,'religiao'=>$request->religiao
     ,'profissao'=>$request->profissao
     ,'ultimo_emprego'=>$request->ultimo_emprego
     ,'trabalha'=>$request->trabalha
     ,'local_trabalho'=>$request->local
     ,'renda'=>$request->renda
     ,'responsavel_sustento'=>$request->responsavel_sustento
     ,'origem_solicitacao'=>$request->origem_solicitacao
     ,'guarnicao'=>$request->guarnicao
     ,'mpu'=>$request->mpu
     ,'data_visita'=>$request->data
     ,'risco'=>$request->risco

   ];

    $quest = DB::table('questionario')
    ->select('questionario.*')->where('questionario.id',$id)
    ->update($data);


     return Redirect('listagem');
   }
   public function pdf($id){
     $quest = DB::table('questionario')
              ->select('questionario.*')->where('id','=',$id)->get();

     $pdf = PDF::loadView('admin.pages.certificado',['quest' => $quest]);
     return $pdf->download('certificado.pdf');
   }




}
