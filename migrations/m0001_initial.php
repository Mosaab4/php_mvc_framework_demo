<?php


use Mosaab\MVC\Application;

class m0001_initial
{
    public function up()
    {
        $db = Application::$app->db;

        $sql = "CREATE TABLE users (
            id int auto_increment primary key,
            email varchar(255) not null ,
            firstname varchar(255) not null ,
            lastname varchar(255) not null ,
            status tinyint not null default 0,
            created_at timestamp default current_timestamp
        ) engine=INNODB;";

        $db->pdo->exec($sql);
    }

    public function down()
    {
        $db = Application::$app->db;

        $sql = "drop table users";

        $db->pdo->exec($sql);

    }
}