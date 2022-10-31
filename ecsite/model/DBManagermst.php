<?php
class DBManagermst
{
    public function dbConnect()
    {
        $pdo = new PDO('mysql:host=localhost; dbname=webdb; charset=utf8', 'webuser', 'abccsd2');
        return $pdo;
    }

    public function login($mail, $pass)
    {
        $pdo = $this->dbConnect();
        $sql = "SELECT * FROM user WHERE user_mail=?;";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(1, $mail, PDO::PARAM_STR);
        $ps->execute();
        $result = $ps->fetchAll();
        if (count($result) == 0) {
            throw new BadMethodCallException("アカウントが存在しません");
        } else {
            foreach ($result as $row) {
                if (password_verify($pass, $row['user_pass']) == false) {
                    throw new LogicException("パスワードが一致しません");
                }
            }
            return $result;
        }
    }

    public function signin($mail, $pass)
    {
        $pdo = $this->dbConnect();
        $sql = "INSERT INTO user (user_mail, user_pass) VALUE (?, ?);";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(1, $mail, PDO::PARAM_STR);
        $ps->bindValue(2, password_hash($pass, PASSWORD_DEFAULT), PDO::PARAM_STR);
        $ps->execute();
    }

    public function signinName($mail, $pass, $name)
    {
        $pdo = $this->dbConnect();
        $sql = "UPDATE user (user_name) SET user_name=? WHERE user_mail=? AND user_pass=?;";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(1, $name, PDO::PARAM_STR);
        $ps->bindValue(2, $mail, PDO::PARAM_STR);
        $ps->bindValue(3, password_hash($pass, PASSWORD_DEFAULT), PDO::PARAM_STR);
        $ps->execute();
    }
}
?>