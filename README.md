# selfphp8.2

Composer: 以下のサイトより提供されるパッケージが確認できる。
https://packagist.org/

◇ guzzle
composer require guzzlehttp/guzzle "~7.3.0"

◇ 開発向けライブラリをイントールしない
composer install --no-dev

◇ memberテーブルの作成
CREATE TABLE member( 
    id INT PRIMARY KEY AUTO_INCREMENT
    , nam VARCHAR (255) NOT NULL
    , sex CHAR (1) DEFAULT '男'
    , old INT NOT NULL
    , enter DATE NOT NULL
    , memo VARCHAR (255) DEFAULT NULL
);

【追加】
INSERT 
INTO member(id, nam, sex, old, enter, memo) 
VALUES (1, '山田太郎', '男', 20, '2021-04-01', NULL);

INSERT 
INTO member(nam, sex, old, enter, memo) 
VALUES ('斉藤花子', '女', 22, '2021-04-10', '紹介割引適用');

INSERT 
INTO member(nam, old, enter, memo) 
VALUES ('鈴木次郎', 30, '2021-04-21', '再入会');

INSERT 
INTO member(nam, old, enter) 
VALUES ('佐藤和夫', 40, '2021-05-07');

INSERT 
INTO member  
VALUES (5, '山本和美', '女', 22, '2021-05-11', NULL);

【照会】
SELECT * FROM member;

【更新】
UPDATE member SET old = 21 WHERE id = 1;

【削除】
DELETE FROM member WHERE id = 1;

【練習問題】
CREATE TABLE product( 
    pid INT PRIMARY KEY AUTO_INCREMENT
    , pname VARCHAR (255) NOT NULL
    , price INT
    , category VARCHAR (255) DEFAULT '文房具'
);

INSERT 
INTO product(pname, price, category) 
VALUES ('メロン', 500, '食物'); 

INSERT 
INTO product(pname, price, category) 
VALUES ('マンゴー', 120, '食物'); 

INSERT 
INTO product(pname, price, category) 
VALUES ('シャープペンシル', 100, '文房具'); 

INSERT 
INTO product(pname, price, category) 
VALUES ('消しゴム', 50, '文房具');
