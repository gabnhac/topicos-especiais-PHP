<?php

class RosquinhaRepository
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getRosquinhas()
    {
        require 'src/banco/bd_connection.php';
        require 'src/model/Rosquinha.php';

        $consulta = "SELECT * FROM Rosquinhas";
        $statement = $connection->query($consulta);
        $resultado = $statement->fetchAll(PDO::FETCH_ASSOC);
        $rosquinhas_array = array_map(function ($rosquinha) {
            return new Rosquinha(
                $rosquinha['sabor'],
                $rosquinha['valor_unitario'],
                $rosquinha['marca'],
                $rosquinha['id_rosquinha']

            );
        }, $resultado);

        return $rosquinhas_array;
    }


    public function listRosquinhasLink()
    {
        $rosquinha_list = $this->getRosquinhas();
        foreach ($rosquinha_list as $r) {
            echo "<div class='rosquinha-item'>";
            echo "<h2>" . $r->getMarca() . "</h2>";
            echo "<form action='listByFlavor.php' method='post'>";
            echo "<input type='hidden' name='sabor' value='" . $r->getSabor() . "'>";
            echo "<button type='submit' id='btn-sabor'>" . $r->getSabor() . "</button>";
            echo "</form>";

            echo "<p> R$" . $r->getValorUnitario() . "</p>";
            echo "<div class='options'>";
            echo "<form action='deleteConfirm.php' method='post'>";
            echo "<input type='hidden' name='id_rosquinha' value='" . $r->getIdRosquinha() . "'>";
            echo "<button type='submit'>Deletar</button>";
            echo "</form>";

            echo "<form action='editRosquinha.php' method='post'>";
            echo "<input type='hidden' name='id_rosquinha' value='" . $r->getIdRosquinha() . "'>";
            echo "<button type='submit'>Editar</button>";
            echo "</form>";
            echo "</div>";
            echo "</div>";

        }
    }

    public function listRosquinhasByFlavor(string $sabor)
    {
        $rosquinha_list = $this->getByFlavor($sabor);
        foreach ($rosquinha_list as $r) {
            echo "<div class='rosquinha-item'>";
            echo "<h2>" . $r->getMarca() . "</h2>";
            echo "<p>" . $r->getSabor() . "</p>";
            echo "<p> R$" . $r->getValorUnitario() . "</p>";
            echo "<div class='options'>";
            echo "<form action='deleteConfirm.php' method='post'>";
            echo "<input type='hidden' name='id_rosquinha' value='" . $r->getIdRosquinha() . "'>";
            echo "<button type='submit'>Deletar</button>";
            echo "</form>";

            echo "<form action='editRosquinha.php' method='post'>";
            echo "<input type='hidden' name='id_rosquinha' value='" . $r->getIdRosquinha() . "'>";
            echo "<button type='submit'>Editar</button>";
            echo "</form>";
            echo "</div>";
            echo "</div>";

        }
    }

    public function buscarRosquinha(int $id)
    {
        require 'src/model/Rosquinha.php';
        $sql = 'SELECT * FROM Rosquinhas WHERE id_rosquinha = ?';
        $statement = $this->pdo->prepare($sql);
        $statement->bindValue(1, $id);
        $statement->execute();

        $rosquinha = $statement->fetch(PDO::FETCH_ASSOC);

        $rosquinhaObj = new Rosquinha(
            $rosquinha['sabor'],
            $rosquinha['valor_unitario'],
            $rosquinha['marca'],
            $rosquinha['id_rosquinha']
        );

        echo "<div class='rosquinha-item'>";
        echo "<h2>" . $rosquinhaObj->getMarca() . "</h2>";
        echo "<p>" . $r->getSabor() . "</p>";
        echo "<p> R$" . $rosquinhaObj->getValorUnitario() . "</p>";
        echo "</div>";
    }

    public function getByFlavor(string $sabor)
    {
        require 'src/model/Rosquinha.php';

        $sql = "SELECT * FROM Rosquinhas WHERE sabor = ?";
        $statement = $this->pdo->prepare($sql);
        $statement->bindValue(1, $sabor);
        $statement->execute();

        $resultado = $statement->fetchAll(PDO::FETCH_ASSOC);

        $rosquinhas_array = array_map(function ($rosquinha) {
            return new Rosquinha(
                $rosquinha['sabor'],
                $rosquinha['valor_unitario'],
                $rosquinha['marca'],
                $rosquinha['id_rosquinha']

            );
        }, $resultado);

        return $rosquinhas_array;
    }


    public function deletaRosquinha(int $id)
    {
        $sql = "DELETE FROM Rosquinhas WHERE id_rosquinha = ?";
        $statement = $this->pdo->prepare($sql);
        $statement->bindValue(1, $id);
        $statement->execute();
    }

    public function editRosquinha(Rosquinha $rosquinha)
    {
        $sql = "UPDATE Rosquinhas SET marca = ?, sabor = ?, valor_unitario = ? WHERE id_rosquinha = ?";
        $statement = $this->pdo->prepare($sql);
        $statement->bindValue(1, $rosquinha->getMarca());
        $statement->bindValue(2, $rosquinha->getSabor());
        $statement->bindValue(3, $rosquinha->getValorUnitario());
        $statement->bindValue(4, $rosquinha->getIdRosquinha());
        $statement->execute();
    }

    public function criaRosquinha(string $sabor, string $marca, float $valor_unitario)
    {
        $sql = "INSERT INTO Rosquinhas (sabor, marca, valor_unitario) VALUES (?, ?, ?)";
        $statement = $this->pdo->prepare($sql);
        $statement->bindValue(1, $sabor);
        $statement->bindValue(2, $marca);
        $statement->bindValue(3, $valor_unitario);
        $statement->execute();
    }


}

?>