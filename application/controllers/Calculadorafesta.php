<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Calculadorafesta extends CI_Controller {

    public function index() {
        $dados = array(
            'tela' => 'convidados/calculadorafesta_view'
        );

        $this->load->view('principal_view', $dados);
    }

    public function recebeDados() {
        $dados = array(
            'tela' => 'convidados/calculadorafesta_view'
        );

        $adultos = $_POST['adultos'];
        $criancas = $_POST['criancas'];
        $bebida = $_POST['bebida'];
        $somaconvidados = $adultos + $criancas;

        $resultadodivisaoadultos = $adultos / 10;
        $salgadosporadultos = $resultadodivisaoadultos * 100;

        $resultadodivisaocriancas = $criancas / 2;
        $salgadosporcriancas = $resultadodivisaocriancas * 10;

        $resultadodivisaocriancasdoces = round(($criancas / 4) * 5);

        $resultadosomacarne = $somaconvidados;
        $resultadodivisaocarne = round(($resultadosomacarne / 6) * 1);

        $resultadosomarefrigerante = $somaconvidados;
        $resultadodivisaorefrigerante = round(($resultadosomarefrigerante / 4) * 2);

        //debug($refrigeranteconvidados);

        if ($bebida == 1) {
            $divisaocerveja = round(($adultos / 3) * 12);

            $divisaowisky = round(($adultos / 30) * 1);

            $divisaocriancacerveja = $criancas * 2;
            $subtracaocerveja = $divisaocerveja - $divisaocriancacerveja;
        } else {
            $divisaocerveja = 'Sem Bebidas';
            $divisaowisky = 'Sem Bebidas';
            $subtracaocerveja = 'Sem Bebidas';
        }

        $resultados = array(
            $salgadosporadultos,
            $salgadosporcriancas,
            $resultadodivisaocriancasdoces,
            $resultadodivisaocarne,
            $resultadodivisaorefrigerante,
            $divisaocerveja,
            $divisaowisky,
            $subtracaocerveja,
        );
        $dados['resultados'] = $resultados;

        $this->load->view('principal_view', $dados);
    }

}
