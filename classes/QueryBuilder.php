<?php
class QueryBuilder
{

    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo  = $pdo;
    }

    public function selectAll($table, $intoClass)
    {
        $statement = $this->pdo->prepare("SELECT * FROM {$table}");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS, $intoClass);
    }

    // public function addUser(User $user)
    // {
    //     $statement = $this->pdo->prepare("INSERT INTO user values(NULL, :name)");
    //     $statement->bindParam(':name', $user->name);
    //     if ($statement->execute()) {
    //         return $this->pdo->lastInsertId();
    //     }
    //     return 0;
    // }

    public function insert($table, $parameters)
    {
        $sql = sprintf(
            'INSERT INTO %s (%s) VALUES(%s)',
            $table,
            implode(', ', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
        );
        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($parameters);
        } catch (PDOException $e) {
            die('Whoops, something went wrong. Please try again.');
        }
    }
}
