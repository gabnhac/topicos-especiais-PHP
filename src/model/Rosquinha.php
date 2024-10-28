<?php 

class Rosquinha{
    private string $sabor;
    private float $valor_unitario;
    private string $marca;
    private int $id_rosquinha;
    
    public function __construct(string $sabor, float $valor_unitario, string $marca, int $id_rosquinha){
        $this->sabor = $sabor;
        $this->valor_unitario = $valor_unitario;
        $this->marca = $marca;
        $this->id_rosquinha = $id_rosquinha;
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
    public function getIdRosquinha(): int{
        return $this->id_rosquinha;
    }
}


?>