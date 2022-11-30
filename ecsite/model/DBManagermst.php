<?php
class DBManagermst
{
    public function dbConnect()
    {
        $pdo = new PDO('mysql:host=localhost; dbname=webdb; charset=utf8', 'webuser', 'abccsd2');
        // $pdo = new PDO('mysql:host=mysql208.phy.lolipop.lan; dbname=LAA1418453-ecsite; charset=utf8', 'LAA1418453', 'ecsite');
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

    public function loginN($mail, $pass)
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
                if ($pass != $row['user_pass']) {
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
            $sqld = "INSERT INTO user (user_mail, user_pass, user_createdate) VALUE (?, ?, ?);";
            $ps = $pdo->prepare($sqld);
            $ps->bindValue(1, $mail, PDO::PARAM_STR);
            $ps->bindValue(2, password_hash($pass, PASSWORD_DEFAULT), PDO::PARAM_STR);
            $ps->bindValue(3, date("c"), PDO::PARAM_STR);
            $ps->execute();
        }
    }

    public function addInfo($id, $name)
    {
        $pdo = $this->dbConnect();
        $sql = "UPDATE user SET user_name=? WHERE user_id=?;";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(1, $name, PDO::PARAM_STR);
        $ps->bindValue(2, $id, PDO::PARAM_INT);
        $ps->execute();
    }

    public function changePass($id, $pass)
    {
        $pdo = $this->dbConnect();
        $sql = "UPDATE user SET user_pass=? WHERE user_id=?;";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(1, password_hash($pass, PASSWORD_DEFAULT), PDO::PARAM_STR);
        $ps->bindValue(2, $id, PDO::PARAM_INT);
        $ps->execute();
    }

    public function addAdress($id, $post, $ken, $shi, $ban, $dtl, $tel)
    {
        $pdo = $this->dbConnect();
        $sql = "INSERT INTO address (user_id, address_post, address_ken, address_shi, address_ban, address_detail, address_number, address_createdate, address_isdelete) VALUE (?, ?, ?, ?, ?, ?, ?, ?, 0);";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(1, $id, PDO::PARAM_INT);
        $ps->bindValue(2, $post, PDO::PARAM_STR);
        $ps->bindValue(3, $ken, PDO::PARAM_STR);
        $ps->bindValue(4, $shi, PDO::PARAM_STR);
        $ps->bindValue(5, $ban, PDO::PARAM_STR);
        $ps->bindValue(6, $dtl, PDO::PARAM_STR);
        $ps->bindValue(7, $tel, PDO::PARAM_STR);
        $ps->bindValue(8, date("c"), PDO::PARAM_STR);
        $ps->execute();
    }

    public function showInfo($id)
    {
        $pdo = $this->dbConnect();
        $sql = "SELECT * FROM user WHERE user_id=?;";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(1, $id, PDO::PARAM_INT);
        $ps->execute();
        $selectdata = $ps->fetchAll();
        if (count($selectdata) == 0) {
            throw new BadMethodCallException("只今エラー中、個人情報表示できません");
        } else {
            return $selectdata;
        }
    }

    public function showAddress($id)
    {
        $pdo = $this->dbConnect();
        $sql = "SELECT * FROM address WHERE user_id=?;";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(1, $id, PDO::PARAM_INT);
        $ps->execute();
        $selectdata = $ps->fetchAll();
        return $selectdata;
    }

    public function showGoods()
    {
        $pdo = $this->dbConnect();
        $sql = "SELECT * FROM goods ORDER BY rand();";
        $ps = $pdo->prepare($sql);
        $ps->execute();
        $selectdata = $ps->fetchAll();
        if (count($selectdata) == 0) {
            throw new BadMethodCallException("只今エラー中、商品表示できません");
        } else {
            return $selectdata;
        }
    }

    public function showGoodsByTag($tag)
    {
        $pdo = $this->dbConnect();
        $sql = "SELECT * FROM goods WHERE goods_tag=?;";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(1, $tag, PDO::PARAM_STR);
        $ps->execute();
        $selectdata = $ps->fetchAll();
        if (count($selectdata) == 0) {
            throw new BadMethodCallException("只今エラー中、商品表示できません");
        } else {
            return $selectdata;
        }
    }

    public function showGoodsBySearch($keyword)
    {
        $pdo = $this->dbConnect();
        $sql = "SELECT * FROM goods WHERE goods_tag LIKE ? OR goods_name LIKE ?;";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(1, '%' . $keyword . '%', PDO::PARAM_STR);
        $ps->bindValue(2, '%' . $keyword . '%', PDO::PARAM_STR);
        $ps->execute();
        $selectdata = $ps->fetchAll();
        if (count($selectdata) == 0) {
            throw new BadMethodCallException("検索結果はございません");
        } else {
            return $selectdata;
        }
    }

    public function goodsDetail($id)
    {
        $pdo = $this->dbConnect();
        $sql = "SELECT * FROM goods WHERE goods_id=? LIMIT 1;";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(1, $id, PDO::PARAM_INT);
        $ps->execute();
        $selectdata = $ps->fetchAll();
        if (count($selectdata) == 0) {
            throw new BadMethodCallException("只今エラー中、商品表示できません");
        } else {
            return $selectdata;
        }
    }

    public function goodsDetailWishlist($iduser, $idgoods)
    {
        $pdo = $this->dbConnect();
        $sqls = "SELECT * FROM wishlist WHERE user_id=? AND goods_id=? AND wishlist_isdelete=0;";
        $ps = $pdo->prepare($sqls);
        $ps->bindValue(1, $iduser, PDO::PARAM_INT);
        $ps->bindValue(2, $idgoods, PDO::PARAM_INT);
        $ps->execute();
        $selectdata = $ps->fetchAll();
        if (count($selectdata) == 0) {
            return true;
        } else {
            return false;
        }
    }

    public function goodsDetailCart($iduser, $idgoods)
    {
        $pdo = $this->dbConnect();
        $sqls = "SELECT * FROM cart WHERE user_id=? AND goods_id=? AND cart_isdelete=0;";
        $ps = $pdo->prepare($sqls);
        $ps->bindValue(1, $iduser, PDO::PARAM_INT);
        $ps->bindValue(2, $idgoods, PDO::PARAM_INT);
        $ps->execute();
        $selectdata = $ps->fetchAll();
        if (count($selectdata) == 0) {
            return true;
        } else {
            return false;
        }
    }

    public function showWishlist($iduser)
    {
        $pdo = $this->dbConnect();
        $sql = "SELECT * FROM wishlist WHERE user_id=? AND wishlist_isdelete=0;";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(1, $iduser, PDO::PARAM_INT);
        $ps->execute();
        $selectdata = $ps->fetchAll();
        if (count($selectdata) == 0) {
            throw new BadMethodCallException("お気に入りはまだございません");
        } else {
            return $selectdata;
        }
    }

    public function showCart($iduser)
    {
        $pdo = $this->dbConnect();
        $sql = "SELECT * FROM cart WHERE user_id=? AND cart_isdelete=0;";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(1, $iduser, PDO::PARAM_INT);
        $ps->execute();
        $selectdata = $ps->fetchAll();
        if (count($selectdata) == 0) {
            throw new BadMethodCallException("買い物カートはまだございません");
        } else {
            return $selectdata;
        }
    }

    public function addNewWishlist($iduser, $idgoods)
    {
        $pdo = $this->dbConnect();
        $sqli = "INSERT INTO wishlist (user_id, goods_id, wishlist_createdate, wishlist_isdelete) VALUE (?, ?, ?, 0);";
        $ps = $pdo->prepare($sqli);
        $ps->bindValue(1, $iduser, PDO::PARAM_INT);
        $ps->bindValue(2, $idgoods, PDO::PARAM_INT);
        $ps->bindValue(3, date("c"), PDO::PARAM_STR);
        $ps->execute();
    }

    public function addNewCart($iduser, $idgoods)
    {
        $pdo = $this->dbConnect();
        $sqli = "INSERT INTO cart (user_id, goods_id, cart_createdate, cart_isdelete) VALUE (?, ?, ?, 0);";
        $ps = $pdo->prepare($sqli);
        $ps->bindValue(1, $iduser, PDO::PARAM_INT);
        $ps->bindValue(2, $idgoods, PDO::PARAM_INT);
        $ps->bindValue(3, date("c"), PDO::PARAM_STR);
        $ps->execute();
    }
    
    public function deleteWishlist($iduser, $idgoods)
    {
        $pdo = $this->dbConnect();
        $sqli = "UPDATE wishlist SET wishlist_isdelete=1, wishlist_changedate=? WHERE user_id=? AND goods_id=?;";
        $ps = $pdo->prepare($sqli);
        $ps->bindValue(1, date("c"), PDO::PARAM_STR);
        $ps->bindValue(2, $iduser, PDO::PARAM_INT);
        $ps->bindValue(3, $idgoods, PDO::PARAM_INT);
        $ps->execute();
    }

    public function deleteCart($iduser, $idgoods)
    {
        $pdo = $this->dbConnect();
        $sqli = "UPDATE cart SET cart_isdelete=1, cart_changedate=? WHERE user_id=? AND goods_id=?;";
        $ps = $pdo->prepare($sqli);
        $ps->bindValue(1, date("c"), PDO::PARAM_STR);
        $ps->bindValue(2, $iduser, PDO::PARAM_INT);
        $ps->bindValue(3, $idgoods, PDO::PARAM_INT);
        $ps->execute();
    }

    public function showPurchase($iduser)
    {
        $pdo = $this->dbConnect();
        $sql = "SELECT * FROM purchaseH AS H LEFT JOIN purchaseP AS P ON H.purchaseH_id = P.purchaseH_id WHERE user_id=?;";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(1, $iduser, PDO::PARAM_INT);
        $ps->execute();
        $selectdata = $ps->fetchAll();
        if (count($selectdata) == 0) {
            throw new BadMethodCallException("購入履歴はまだございません");
        } else {
            return $selectdata;
        }
    }

    public function userInfoChange($pass, $name, $id, $post, $ken, $shi, $ban, $detail, $number)
    {
        $pdo = $this->dbConnect();
        $sqln = "UPDATE user SET user_pass=?, user_name=? WHERE user_mail=? AND user_pass=?;";
        $ps = $pdo->prepare($sqln);
        $ps->bindValue(1, password_hash($pass, PASSWORD_DEFAULT), PDO::PARAM_STR);
        $ps->bindValue(2, $name, PDO::PARAM_STR);
        $ps->execute();

        $sqla = "INSERT INTO address (user_id, address_post, address_ken, address_shi, address_ban, address_detail, address_number) VALUE (?, ?, ?, ?, ?, ?, ?);";
        $ps = $pdo->prepare($sqla);
        $ps->bindValue(1, $id, PDO::PARAM_INT);
        $ps->bindValue(2, $post, PDO::PARAM_STR);
        $ps->bindValue(3, $ken, PDO::PARAM_STR);
        $ps->bindValue(4, $shi, PDO::PARAM_STR);
        $ps->bindValue(5, $ban, PDO::PARAM_STR);
        $ps->bindValue(6, $detail, PDO::PARAM_STR);
        $ps->bindValue(7, $number, PDO::PARAM_STR);
        $ps->execute();
    }

    // public function userInfoBuy($id)
    // {
    //     $pdo = $this->dbConnect();
    //     $sqln = "SELECT * FROM user AS U LEFT JOIN address AS A ON U.user_id = A.user_id WHERE user_id=? LIMIT 1;";
    //     $ps = $pdo->prepare($sqln);
    //     $ps->bindValue(1, $id, PDO::PARAM_INT);
    //     $ps->execute();
    //     $selectdata = $ps->fetchAll();
    //     return $selectdata;
    // }

    public function buyGoods($id, $name, $post, $addr, $tel, $goods)
    {
        $pdo = $this->dbConnect();
        $sqlh = "INSERT INTO perchaseH (user_id, purchaseH_name, purchaseH_post, purchaseH_address, purchaseH_number, purchaseH_createdate) VALUE (?, ?, ?, ?, ?, ?);";
        $psh = $pdo->prepare($sqlh);
        $psh->bindValue(1, $id, PDO::PARAM_INT);
        $psh->bindValue(2, $name, PDO::PARAM_STR);
        $psh->bindValue(3, $post, PDO::PARAM_STR);
        $psh->bindValue(4, $addr, PDO::PARAM_STR);
        $psh->bindValue(5, $tel, PDO::PARAM_STR);
        $psh->bindValue(6, date("c"), PDO::PARAM_STR);
        $psh->execute();
        $sqls = "SELECT purchaseH_id FROM purchaseH WHERE user_id=? ORDER BY purchaseH_createdate DESC LIMIT 1";
        $pss = $pdo->prepare($sqls);
        $pss->bindValue(1, $id, PDO::PARAM_INT);
        $pss->execute();
        $selectdata = $pss->fetch();
        foreach ($goods as $good) {
            $sqlp = "INSERT INTO purchaseP (purchaseH_id, goods_id, purchaseP_createdate) VALUE (?, ?, ?);
            UPDATE goods SET goods_flg=0 WHERE goods_id=?;";
            $psp = $pdo->prepare($sqlp);
            $psp->bindValue(1, $selectdata['purchaseH_id'], PDO::PARAM_INT);
            $psp->bindValue(2, $good['goods_id'], PDO::PARAM_INT);
            $psp->bindValue(3, date("c"), PDO::PARAM_STR);
            $psp->bindValue(3, $good['goods_id'], PDO::PARAM_INT);
            $psp->execute();
        }
    }
}
?>
