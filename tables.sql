
create table if not exists user (
    userID int not null AUTO_INCREMENT,
    name varchar(10) not null,
    age int,
    address varchar(30),
    tel char(13),
    email char(30),

    Primary Key(userID)
);

create table if not exists travelType(
    typeID int not null AUTO_INCREMENT,
    userID int not null,
    foreign key (userID) References user(userID),
    primary key (typeID),

    photo boolean comment'who like takes photo',  /*사진찍는걸좋아한다*/
    food boolean comment'who like eat national food',   /*먹방여행을 좋아한다*/
    shopping boolean comment'who like shopping', /*쇼핑하는것을 좋아한다.*/
    plan boolean comment 'who like hard planning',   /*계획을 철저히 세운다*/
    walkorRide boolean comment 'who like walk or use transport',   /*걷는것을 선호한다 T / 대중교통을 선호한다. F*/
    naturalOrCity boolean comment 'who like natural view or Modern', /*자연경관 구경을 선호한다 T .도시구경을 선호한다. F*/
    silenceOrCrowd boolean comment 'who prefer silence or crowd place' /*사람없는곳을 선호한다 T / 사람많은곳을 선호한다.*/

);

create table if not exists  East_Review_Board (
    boardID int not null AUTO_INCREMENT PRIMARY KEY,
    board_pid int(10) DEFAULT 0 comment '원글번호',
    userID int not null ,
    FOREIGN KEY (userID) REFERENCES user(userID),
    subject varchar(10) comment '머릿말' not null,   /*숙소 맛집 기타*/
    country varchar(20) comment '국가',
    region varchar(20) comment '지역',
    title varchar(50) NOT NULL comment '게시글 제목',
    star int comment '별점',
    contents text NOT NULL comment '게시글 내용',
    hits int (10) NOT NULL DEFAULT 0 COMMENT '조회수',
    reg_date datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '등록일',
    INDEX board_pid(board_pid)
);

create table if not exists East_Partner_Board (
    boardID int not null AUTO_INCREMENT PRIMARY KEY,
    board_pid int(10) DEFAULT 0 comment '원글번호',
    userID int not null ,
    subject varchar(10) comment '머릿말',   --
    country varchar(20) comment '국가' not null,
    region varchar(20) comment '지역' not null,
    requiredPeople int comment '예상 필요인원',
    engagedPeople int comment '현재 참가인원',
    title varchar(50) NOT NULL comment '게시글 제목',
    contents text NOT NULL comment '게시글 내용',
    hits int (10) NOT NULL DEFAULT 0 COMMENT '조회수',
    reg_date datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '등록일',
    INDEX board_pid(board_pid),
    FOREIGN KEY (userID) REFERENCES user(userID)
);
