<?php 

class Rosquinha{
    private int $quantidade; 
    private string $sabor;
    private float $valor_unitario;
    private string $marca;
    private int $id_rosquinha;
    
    public function __construct(int $quantidade, string $sabor, float $valor_unitario, string $marca){
        $this->quantidade = $quantidade;
        $this->sabor = $sabor;
        $this->valor_unitario = $valor_unitario;
        $this->marca = $marca;
    }

    public function getQuantidade(): int{
        return $this->quantidade;
    }
    public function getSabor(): string{
        return $this->sabor;
    }
    public function getValorUnitario(): float{
        return $this->valor_unitario;
    }
    public function getMarca(): string{
        return $this->marca;
    }
}


?>