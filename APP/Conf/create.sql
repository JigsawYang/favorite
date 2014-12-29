-- 管理员表
CREATE TABLE fw_aduser (
    `id` int unsigned not null primary key auto_increment,
    `username` varchar(20) not null unique,
    `password` varchar(32) not null,
    `logintime` int(10) unsigned not null,
    `loginip` char(20) not null
);

insert into fw_aduser set username = 'admin', password = md5('123asd'), logintime = unix_timestamp(now()), loginip = '127.0.0.1';

-- 分类表
CREATE TABLE fw_cate (
    `id` int unsigned not null primary key auto_increment,
    `name` varchar(40) not null unique,
    `pid` int unsigned not null,
    `sort` smallint(10) not null default 100
);

-- 网站信息
CREATE TABLE fw_webinfo (
    `id` int unsigned not null primary key auto_increment,
    `title` varchar(30) not null,
    `content` text,
    `address` varchar(100) not null,
    `time` int(10) unsigned not null,
    `cid` int unsigned not null,
    `del` tinyint(1) unsigned not null default 0
);

-- 用户表
CREATE TABLE fw_user (
    `id` int unsigned not null primary key auto_increment,
    `username` varchar(20) not null unique,
    `password` varchar(32) not null,
    `email` varchar(50) not null,
    `logintime` int(10) unsigned not null,
    `loginip` char(20) not null
);