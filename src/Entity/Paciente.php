<?php

namespace JoaoBittencourt\PacientAnalysis\Entity;

use \stdClass;

class Paciente {

    private $data_extracao;
    private $id_usuario;
    private $situacao;
    private $central_regulacao_origem;
    private $data_solicitacao;
    private $sexo;
    private $idade;
    private $municipio_residencia;
    private $solicitante;
    private $municipio_solicitante;
    private $codigo_cid;
    private $carater;
    private $tipo_internacao;
    private $tipo_leito;
    private $data_autorizacao;
    private $data_internacao;
    private $data_alta;
    private $executante;
    private $horas_na_fila;
    
    private $total_paciente_municipio;
    private $total_paciente_idade;
    private $media_paciente_idade_genero;

    public function __construct(\stdClass $std) {

        foreach ($std as $key => $value) {

            $this->$key = $value;
        }
        $this->monta_total_paciente_municipio($std);
    }

    protected function monta_total_paciente_municipio(\stdClass $std) {

        if (isset($std->municipio_residencia)) {
            $this->total_paciente_municipio[$std->municipio_residencia]['count'] = 
                $this->total_paciente_municipio[$std->municipio_residencia]['count'] ?? 0;
                    
            $this->total_paciente_municipio[$std->municipio_residencia]['count']++;
        }
    }
    
    public function calcula_media_paciente_idade($param) {
        
    }
    
    public function calcula_media_paciente_idade_genero($param) {
        
    }

}
