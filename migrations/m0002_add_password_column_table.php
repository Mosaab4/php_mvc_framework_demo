<?php

use App\Core\Application;

class m0002_add_password_column_table
{
    public function up()
    {
        $db = Application::$app->db;

        $db->pdo->exec("
            alter table users add column password varchar(512) not null after status
        ");
    }

    public function down()
    {
        $db = Application::$app->db;
        $db->pdo->exec("
            alter table users drop column password
        ");
    }
}
