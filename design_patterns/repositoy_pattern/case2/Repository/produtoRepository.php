<?php 

namespace Repository{

    require 'baseRepository.php';
    require 'Contracts\baseRepositoryInterface.php';

    use Entity\BaseEntity;
    use \PDO;
    use Repository\BaseRepository;
    use Repository\Contracts\BaseRepositoryInterface;

    class ProdutoRepository  extends BaseRepository implements BaseRepositoryInterface
    {    

        public function find($id)
        {
            $stmt = $this->connection->prepare('
                SELECT 
                    id_produto as id, 
                    nome, 
                    descricao,
                    data 
                    
                FROM produto 
                WHERE id_produto = :id_produto
            ');
            $stmt->bindParam(':id_produto', $id);
            $stmt->execute();
                    
            $stmt->setFetchMode(PDO::FETCH_INTO, new Produto());
            return $stmt->fetch();
        }

        public function findAll()
        {
            $stmt = $this->connection->prepare('
                SELECT id_produto as id, nome, descricao, data FROM produto
            ');
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_INTO, new stdClass());
            
            return $stmt->fetchAll();
        }

        public function save(BaseEntity $produto)
        {
            // Se existir Id, é uma alteração
            if (!empty($produto->id)) {
                return $this->update($produto);
            }

            $stmt = $this->connection->prepare('
                INSERT INTO produto 
                    (nome, descricao, data) 
                VALUES 
                    (:nome , :descricao, :data)
            ');        
            $stmt->bindParam(':nome', $produto->nome);
            $stmt->bindParam(':descricao', $produto->descricao);
            $stmt->bindParam(':data', $produto->data);
            $stmt->execute();
            $id = $this->connection->lastInsertId();
            return $id;

        }

        public function update(BaseEntity $produto)
        {
            if (!isset($produto->id)) {
                // We can't update a record unless it exists...
                throw new \LogicException(
                    'Usuário não existe.'
                );
            }
            $stmt = $this->connection->prepare('
                UPDATE produto
                SET nome = :nome,
                    descricao = :descricao,
                    data = :data,
                    
                WHERE id_produto = :id_produto
            ');
            
            $stmt->bindParam(':nome', $produto->nome);
            $stmt->bindParam(':descricao', $produto->descricao);
            $stmt->bindParam(':data', $produto->data);
            $stmt->bindParam(':id_produto', $produto->id);

            $stmt->execute();
            return $descricao->id;
        }
    }
}

?>