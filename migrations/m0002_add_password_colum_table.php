<?php

class m0002_add_password_colum_table
{
    public function up()
    {
        $db = \App\Core\Application::$app->db;

        $db->pdo->exec("
            alter table users add column password varchar(512) not null after status
        ");
    }

    public function down()
    {
        $db = \App\Core\Application::$app->db;
        $db->pdo->exec("
            alter table users drop column password
        ");
    }
}
