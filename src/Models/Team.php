<?php

namespace Models;

use Facades\DB;
use PDO;

class Team
{
    const TABLE = "teams";

    public static function all()
    {
        return DB::query('SELECT * FROM teams ' . self::TABLE)->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    public static function getById($id)
    {
        $sql = DB::prepare('SELECT * FROM teams ' . self::TABLE . ' WHERE id = :id');
        $sql->execute([':id' => $id]);

        return $sql->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    public static function create($data){
        $sql = DB::prepare('INSERT INTO teams(name) VALUES (:name)');
        $sql->execute([':name'=>$data['name'] ]);
    }

    public function update($data){
        $sql = DB:: prepare('UPDATE teams SET name = :name');
        $sql->execute([...$data, $id]);
    }
    
    public function delete($id){
        $sql = DB::prepare(('DELETE FROM teams WHERE id = ?'));
        $sql->execute($id);
    }
}
