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
        $sqlr = "SELECT * FROM user WHERE user_mail=?;";
        $ps = $pdo->prepare($sqlr);
        $ps->bindValue(1, $mail, PDO::PARAM_STR);
        $ps->execute();
        $result = $ps->fetchAll();
        if (count($result) != 0) {
            throw new BadMethodCallException("メールアドレスは既に登録しました");
        } else {
            $sqld = "INSERT INTO user (user_mail, user_pass) VALUE (?, ?);";
            $ps = $pdo->prepare($sqld);
            $ps->bindValue(1, $mail, PDO::PARAM_STR);
            $ps->bindValue(2, password_hash($pass, PASSWORD_DEFAULT), PDO::PARAM_STR);
            $ps->execute();
        }
    }

    // public function signinAddName($mail, $pass, $name)
    // {
    //     $pdo = $this->dbConnect();
    //     $sql = "UPDATE user (user_name) SET user_name=? WHERE user_mail=? AND user_pass=?;";
    //     $ps = $pdo->prepare($sql);
    //     $ps->bindValue(1, $name, PDO::PARAM_STR);
    //     $ps->bindValue(2, $mail, PDO::PARAM_STR);
    //     $ps->bindValue(3, password_hash($pass, PASSWORD_DEFAULT), PDO::PARAM_STR);
    //     $ps->execute();
    // }

    public function showGoodsByTag($tag)
    {
        $pdo = $this->dbConnect();
        $sql = "SELECT * FROM goods WHERE goods_tag=? LIMIT 16;";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(1, $tag, PDO::PARAM_STR);
        $ps->execute();
        $selectdata = $ps->fetchAll();
        return $selectdata;
    }

    public function showGoodsBySearch($keyword)
    {
        $pdo = $this->dbConnect();
        $sql = "SELECT * FROM goods WHERE goods_tag LIKE ? OR goods_name LIKE ? LIMIT 16;";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(1, '%' . $keyword . '%', PDO::PARAM_STR);
        $ps->bindValue(2, '%' . $keyword . '%', PDO::PARAM_STR);
        $ps->execute();
        $selectdata = $ps->fetchAll();
        return $selectdata;
    }

    public function goodsDetail($id)
    {
        $pdo = $this->dbConnect();
        $sql = "SELECT * FROM goods WHERE goods_id=?;";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(1, $id, PDO::PARAM_INT);
        $ps->execute();
        $selectdata = $ps->fetchAll();
        return $selectdata;
    }

    public function mypage($iduser)
    {
        $pdo = $this->dbConnect();
        $sql = "SELECT * FROM user WHERE user_id=?;";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(1, $iduser, PDO::PARAM_INT);
        $ps->execute();
        $selectdata = $ps->fetchAll();
        return $selectdata;
    }

    public function mypageWishlist($iduser)
    {
        $pdo = $this->dbConnect();
        $sql = "SELECT * FROM wishlist WHERE user_id=?;";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(1, $iduser, PDO::PARAM_INT);
        $ps->execute();
        $selectdata = $ps->fetchAll();
        return $selectdata;
    }

    public function addNewWishlist($iduser, $idgoods)
    {
        $pdo = $this->dbConnect();
        $sql = "INSERT INTO wishlist (user_id, goods_id, wishlist_date) VALUE (?, ?, ?);";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(1, $iduser, PDO::PARAM_INT);
        $ps->bindValue(2, $idgoods, PDO::PARAM_INT);
        $ps->bindValue(3, date("c"), PDO::PARAM_STR);
        $ps->execute();
        $selectdata = $ps->fetchAll();
        return $selectdata;
    }

    public function mypagePurchase($iduser)
    {
        $pdo = $this->dbConnect();
        $sql = "SELECT * FROM purchaseH AS H LEFT JOIN purchaseP AS P ON H.purchaseH_id = P.purchaseH_id WHERE user_id=?;";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(1, $iduser, PDO::PARAM_INT);
        $ps->execute();
        $selectdata = $ps->fetchAll();
        return $selectdata;
    }

    public function userInfoChange($list)
    {
        # code...
    }

    public function buyGoods($list)
    {
        # code...
    }

}
?>
