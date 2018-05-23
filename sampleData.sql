USE EUROPE_TRAVLE_PARTNER;

INSERT INTO user (name,age,address,tel,email)
VALUES ('김다영',23,'경기도 수원시','010-2004-1402','dy1dy2@gmail.com');
INSERT INTO user (name,age,address,tel,email)
VALUES ('김지연',22,'충청남도 천안시 동남구','010-3422-4317','noname@kut.ac.kr');

INSERT INTO traveltype (userID,photo,food,shopping,plan,walkorRide,naturalOrCity,silenceOrCrowd)
VALUES (1,true,true,true,true,false,false,true);
INSERT INTO traveltype (userID,photo,food,shopping,plan,walkorRide,naturalOrCity,silenceOrCrowd)
VALUES (2,true,false,true,false,true,false,true);

INSERT INTO EAST_PARTNER_BOARD (userID,subject,country,region,requiredPeople,engagedPeople,title,contents)
VALUES (1,'식사','CZECH','PRAHA',3,0,'같이 저녁먹어요','내용은 저녁먹을사람! ');

INSERT INTO EAST_REVIEW_BOARD (userID,subject,country,region,title,star,contents)
VALUES (1,'맛집','CZECH','PRAHA','프라하 꼴레뇨 맛집',5,'여기여기 맛있어요 짱짱 별점5');
