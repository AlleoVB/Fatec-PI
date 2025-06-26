<?php

class Conteudo {
    public function __construct(
        private int $id = 0,
        private string $titulo = '',
        private string $descricao = '',
        private string $tipo = '',
        private string $periodico = '',
        private string $url = '',
        private int $usuarioId = 0,
        private string $dataCriacao = ''
    ) {}

    public function getId(): int { return $this->id; }
    public function getTitulo(): string { return $this->titulo; }
    public function getDescricao(): string { return $this->descricao; }
    public function getTipo(): string { return $this->tipo; }
    public function getPeriodico(): string { return $this->periodico; }
    public function getUrl(): string { return $this->url; }
    public function getUsuarioId(): int { return $this->usuarioId; }
    public function getDataCriacao(): string { return $this->dataCriacao; }
}
