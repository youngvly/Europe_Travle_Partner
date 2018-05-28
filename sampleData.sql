USE EUROPE_TRAVEL_PARTNER;

INSERT INTO user (id,pass,name,age,gender,address,tel,email)
VALUES ('id1',password('123456'),'김다영',23,'F','경기도 수원시','010-2004-1402','dy1dy2@gmail.com');
INSERT INTO user (id,pass,name,age,gender,address,tel,email)
VALUES ('id2',password('123456'),'김지연',22,'F','충청남도 천안시 동남구','010-3422-4317','noname@kut.ac.kr');

INSERT INTO traveltype (userID,photo,food,shopping,plan,walk,Ride,naturals,City,silence,Crowd)
VALUES ('id1',true,true,true,true,false,false,true,true,true,true);
INSERT INTO traveltype (userID,photo,food,shopping,plan,walk,Ride,naturals,City,silence,Crowd)
VALUES ('id2',true,false,true,false,true,false,true,false,false,true);

INSERT INTO EAST_PARTNER_BOARD (userID,subject,country,region,requiredPeople,engagedPeople,title,contents)
VALUES ('id1','식사','CZECH','PRAHA',3,0,'같이 저녁먹어요','내용은 저녁먹을사람! ');
INSERT INTO EAST_PARTNER_BOARD (userID,subject,country,region,requiredPeople,engagedPeople,title,contents)
VALUES ('id2','여행','CZECH','PRAHA',5,0,'야경보러가요 ','비셰흐라드 갈사람!');

INSERT INTO EAST_REVIEW_BOARD (userID,subject,country,region,title,star,contents)
VALUES ('id1','맛집','CZECH','PRAHA','프라하 꼴레뇨 맛집',5,'여기여기 맛있어요 짱짱 별점5');

INSERT INTO EAST_PARTNER_RIPPLE (boardID,userID,contents)
VALUES (1,'id2','저요저요!');
INSERT INTO EAST_PARTNER_RIPPLE (boardID,userID,contents)
VALUES (1,'id1','22222');