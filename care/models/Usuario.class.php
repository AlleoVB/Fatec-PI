<?php

  class Usuario {
    public function __construct(
        private int $id = 0,
        private string $nome = '',
        private string $email = '',
        private string $senhaHash = '',
        private bool $isAdmin = false,
        private string $criacaoConta = ''
    ) {}

    public function getId(): int { return $this->id; }
    public function getNome(): string { return $this->nome; }
    public function getEmail(): string { return $this->email; }
    public function getSenhaHash(): string { return $this->senhaHash; }
    public function getIsAdmin(): bool { return $this->isAdmin; }
    public function getCriacaoConta(): string { return $this->criacaoConta; }

    public function setId(int $id): void { $this->id = $id; }
    public function setNome(string $nome): void { $this->nome = $nome; }
    public function setEmail(string $email): void { $this->email = $email; }
    public function setSenhaHash(string $senhaHash): void { $this->senhaHash = $senhaHash; }
    public function setIsAdmin(bool $isAdmin): void { $this->isAdmin = $isAdmin; }
}
