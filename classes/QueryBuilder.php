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

    public function addUser(User $user)
    {
        $statement = $this->pdo->prepare("INSERT INTO user values(NULL, :name)");
        $statement->bindParam(':name', $user->name);
        if ($statement->execute()) {
            return $this->pdo->lastInsertId();
        }
        return 0;
    }

    public function users()
    {
        $statement = $this->pdo->prepare("SELECT * FROM user");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS, 'User');
    }
}
