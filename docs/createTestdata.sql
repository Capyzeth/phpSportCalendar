DELETE FROM player;
DELETE FROM game;
DELETE FROM sportevent;
DELETE FROM category;
DELETE FROM team;

INSERT INTO sportevent VALUES (1,"Event1");
INSERT INTO sportevent VALUES (2,"Event2");
INSERT INTO sportevent VALUES (3,"Event3");
INSERT INTO sportevent VALUES (4,"Event4");
INSERT INTO sportevent VALUES (5,"Event5");

INSERT INTO category VALUES (1,"Fußball");
INSERT INTO category VALUES (2,"Basketball");
INSERT INTO category VALUES (3,"American Football");
INSERT INTO category VALUES (4,"Eishockey");
INSERT INTO category VALUES (5,"Handball");


INSERT INTO team VALUES (1,"Team1","","Fußballverein");
INSERT INTO team VALUES (2,"Team2","","Fußballverein");
INSERT INTO team VALUES (3,"Team3","","Basketball");
INSERT INTO team VALUES (4,"Team4","","Basketball");
INSERT INTO team VALUES (5,"Team5","","American Football");
INSERT INTO team VALUES (6,"Team6","","American Football");
INSERT INTO team VALUES (7,"Team7","","Eishockey");
INSERT INTO team VALUES (8,"Team8","","Eishockey");

INSERT INTO player VALUES(1,"Player 1","","plays games","","",1);
INSERT INTO player VALUES(2,"Player 2","","plays games","","",2);
INSERT INTO player VALUES(3,"Player 3","","plays games","","",3);
INSERT INTO player VALUES(4,"Player 4","","plays games","","",4);
INSERT INTO player VALUES(5,"Player 5","","plays games","","",5);
INSERT INTO player VALUES(6,"Player 6","","plays games","","",6);
INSERT INTO player VALUES(7,"Player 7","","plays games","","",7);
INSERT INTO player VALUES(8,"Player 8","","plays games","","",8);
INSERT INTO player VALUES(9,"Player 9","","plays games","","",2);
INSERT INTO player VALUES(10,"Player 10","","plays games","","",4);
INSERT INTO player VALUES(11,"Player 11","","plays games","","",6);
INSERT INTO player VALUES(12,"Player 12","","plays games","","",8);
INSERT INTO player VALUES(13,"Player 13","","plays games","","",1);

INSERT INTO game VALUES(1,"","2019-12-20 10:30:00",1,1,1,2);
INSERT INTO game VALUES(2,"","2019-12-21 11:30:00",2,2,3,4);
INSERT INTO game VALUES(3,"","2019-12-22 12:30:00",3,3,5,6);
INSERT INTO game VALUES(4,"","2019-12-23 13:30:00",4,4,7,8);
INSERT INTO game VALUES(5,"","2019-12-20 10:30:00",2,2,3,4);
INSERT INTO game VALUES(6,"","2019-12-21 11:30:00",3,3,5,6);

