INSERT INTO gs_an_table(name, email, naiyou, indate)
 --IDはauto incrementで指定したので上に入れなくても勝手に入力してくれる大丈夫
VALUES
('大森', 'test@jp', '無いよ',sysdate());

INSERT INTO gs_an_table(name, email, naiyou, indate)
VALUES('おおもり', 'test1@jp', '無いよ',sysdate());
INSERT INTO gs_an_table(name, email, naiyou, indate)
VALUES('おもり', 'test2@jp', '無いよ',sysdate());
INSERT INTO gs_an_table(name, email, naiyou, indate)
VALUES('もり', 'test3@jp', '無いよ',sysdate());
INSERT INTO gs_an_table(name, email, naiyou, indate)
VALUES('こもり', 'test4@jp', '無いよ',sysdate());
INSERT INTO gs_an_table(name, email, naiyou, indate)
VALUES('なかもり', 'test5@jp', '無いよ',sysdate());

SELECT * FROM gs_an_table
SELECT name FROM gs_an_table
SELECT name, indate,email FROM gs_an_table
SELECT * FROM gs_an_table WHERE id=1 OR id=2
SELECT * FROM gs_an_table WHERE email LIKE '%3%'
SELECT * FROM gs_an_table ORDER BY id DESC
SELECT * FROM gs_an_table ORDER BY id DESC LIMIT 3;


//変数として入れたい場所だけ「:なんちゃらと入力する」
INSERT INTO gs_an_table(name, email, naiyou, indate)
VALUES(:name, :email, :naiyou, sysdate());