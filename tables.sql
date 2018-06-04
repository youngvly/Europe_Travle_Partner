USE EUROPE_TRAVEL_PARTNER;

create table if not exists user (
    id varchar(15) not null,
    pass varchar(255) not null,
    name varchar(10) not null,
    age int,
    gender enum('F','M'),
    address varchar(30),
    tel char(13),
    email char(30),
    intro text ,
    
    Primary Key(id)
);

create table if not exists travelType(
    userID varchar(15) not null,
    foreign key (userID) References user(id),
    primary key (userID), 

    photo boolean comment'who like takes photo' DEFAULT 0,  /*사진찍는걸좋아한다*/
    food boolean comment'who like eat national food' DEFAULT 0,   /*먹방여행을 좋아한다*/
    shopping boolean comment'who like shopping' DEFAULT 0, /*쇼핑하는것을 좋아한다.*/
    plan boolean comment 'who like hard planning' DEFAULT 0,   /*계획을 철저히 세운다*/
    ride boolean comment 'who like use transport' DEFAULT 0,
    walk boolean DEFAULT 0 ,
    naturals boolean DEFAULT 0,
    city boolean DEFAULT 0,
    crowd boolean DEFAULT 0,
    silence boolean DEFAULT 0
);

create table if not exists  East_Review_Board (
    boardID int not null AUTO_INCREMENT PRIMARY KEY,
    board_pid int(10) DEFAULT 0 comment '원글번호',
    userID varchar(15) not null ,
    FOREIGN KEY (userID) REFERENCES user(id),
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
    userID varchar(15) not null ,
    subject varchar(10) comment '머릿말',   --
    country varchar(20) comment '국가' not null,
    region varchar(20) comment '지역' not null,
    requiredPeople int comment '예상 필요인원',
    engagedPeople int comment '현재 참가인원',
    title varchar(50) NOT NULL comment '게시글 제목',
    contents text NOT NULL comment '게시글 내용',
    hits int (10) NOT NULL DEFAULT 0 COMMENT '조회수',
    reg_date datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '등록일',
    reg_date datetime  COMMENT '약속일',   
    INDEX board_pid(board_pid),
    FOREIGN KEY (userID) REFERENCES user(id)
);

create table if not exists East_Partner_Ripple (
    ripID int not null AUTO_INCREMENT primary key,
    boardID int not null comment '메인글의 일련번호',
    userID varchar(15) not null,
    contents text NOT NULL,
    reg_date datetime NOT NULL DEFAULT CURRENT_TIMESTAMP comment '등록일',
    FOREIGN KEY (userID) REFERENCES user(id),
    FOREIGN KEY (boardID) REFERENCES East_Partner_Board(boardID)
)