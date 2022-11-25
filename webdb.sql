CREATE TABLE `address` (
  `address_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `address_post` varchar(10) NOT NULL,
  `address_ken` varchar(10) NOT NULL,
  `address_shi` varchar(50) NOT NULL,
  `address_ban` varchar(50) NOT NULL,
  `address_detail` varchar(100) NOT NULL,
  `address_number` varchar(20) NOT NULL,
  `address_createdate` date NOT NULL,
  `address_changedate` date DEFAULT NULL,
  `address_isdelete` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `goods` (
  `goods_id` int(11) NOT NULL,
  `goods_name` varchar(100) NOT NULL,
  `goods_tag` varchar(20) NOT NULL,
  `goods_price` int(11) NOT NULL,
  `goods_flg` tinyint(1) NOT NULL,
  `goods_imgurl1` varchar(100) NOT NULL,
  `goods_imgurl2` varchar(100) NOT NULL,
  `goods_imgurl3` varchar(100) NOT NULL,
  `goods_imgurl4` varchar(100) NOT NULL,
  `goods_detail` mediumtext NOT NULL,
  `goods_createdate` date NOT NULL,
  `goods_changedate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `purchaseh` (
  `purchaseH_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `purchaseH_address` int(11) NOT NULL,
  `purchaseH_createdate` date NOT NULL,
  `purchaseH_changedate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `purchasep` (
  `purchaseP_id` int(11) NOT NULL,
  `purchaseH_id` int(11) NOT NULL,
  `goods_id` int(11) NOT NULL,
  `purchaseP_createdate` date NOT NULL,
  `purchaseP_changedate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_mail` varchar(50) NOT NULL,
  `user_pass` varchar(50) NOT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `user_createdate` date NOT NULL,
  `user_changedate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `wishlist` (
  `wishlist_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `goods_id` int(11) NOT NULL,
  `wishlist_createdate` date NOT NULL,
  `wishlist_changedate` date DEFAULT NULL,
  `wishlist_isdelete` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `address`
  ADD PRIMARY KEY (`address_id`);

ALTER TABLE `goods`
  ADD PRIMARY KEY (`goods_id`);

ALTER TABLE `purchaseh`
  ADD PRIMARY KEY (`purchaseH_id`);

ALTER TABLE `purchasep`
  ADD PRIMARY KEY (`purchaseP_id`);

ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`wishlist_id`);

ALTER TABLE `goods`
  MODIFY `goods_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000000000;

ALTER TABLE `purchaseh`
  MODIFY `purchaseH_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10000000;

ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000008;