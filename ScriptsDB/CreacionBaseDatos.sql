/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     01-11-2016 22:20:19                          */
/*==============================================================*/


drop table if exists ABILITY;

drop table if exists COMMUNE;

drop table if exists COMPLAIN;

drop table if exists DOCUMENT;

drop table if exists EMERGENCY;

drop table if exists GENERATE;

drop table if exists MISION;

drop table if exists NEED;

drop table if exists POSESS;

drop table if exists PROVINCE;

drop table if exists REALLIZE;

drop table if exists REGION;

drop table if exists REQUEST;

drop table if exists ROLE;

drop table if exists SCORE;

drop table if exists SUPERVISE;

drop table if exists TASK;

drop table if exists USER;

drop table if exists USER_ROLE;

drop table if exists WORK;

drop table if exists WORK_FIELD;

/*==============================================================*/
/* Table: ABILITY                                               */
/*==============================================================*/
create table ABILITY
(
   ID_ABILITY           int not null auto_increment,
   NAME_ABILITY         varchar(100),
   primary key (ID_ABILITY)
);

/*==============================================================*/
/* Table: COMMUNE                                               */
/*==============================================================*/
create table COMMUNE
(
   ID_COMMUNE           int not null auto_increment,
   ID_PROVINCE          int not null,
   NAME_COMMUNE         varchar(100),
   primary key (ID_COMMUNE)
);

/*==============================================================*/
/* Table: COMPLAIN                                              */
/*==============================================================*/
create table COMPLAIN
(
   ID_COMPLAIN          int not null auto_increment,
   ID_TASK              int not null,
   ID_USER_ROLE         int not null,
   DETAIL_COMPLAIN      varchar(1024),
   SEVERITY_COMPLAIN    int,
   primary key (ID_COMPLAIN)
);

/*==============================================================*/
/* Table: DOCUMENT                                              */
/*==============================================================*/
create table DOCUMENT
(
   ID_DOCUMENT          int not null auto_increment,
   LINK_DOCUMENT        varchar(1024),
   primary key (ID_DOCUMENT)
);

/*==============================================================*/
/* Table: EMERGENCY                                             */
/*==============================================================*/
create table EMERGENCY
(
   ID_EMERGENCY         int not null auto_increment,
   ID_COMMUNE           int not null,
   ID_USER_ROLE         int not null,
   PLACE_EMERGENCY      varchar(100) not null,
   NAME_EMERGENCY       varchar(100) not null,
   DATEDECLARED_EMERGENCY date not null,
   CONDITION_EMERGENCY  int not null,
   DESCRIPTION_EMERGENCY text,
   PRIORITY_EMERGENCY   int not null,
   DATEFINISHED_EMERGENCY date,
   primary key (ID_EMERGENCY)
);

/*==============================================================*/
/* Table: GENERATE                                              */
/*==============================================================*/
create table GENERATE
(
   ID_DOCUMENT          int not null,
   ID_REQUEST           int not null,
   CONFIRM              bool,
   primary key (ID_DOCUMENT, ID_REQUEST)
);

/*==============================================================*/
/* Table: MISION                                                */
/*==============================================================*/
create table MISION
(
   ID_MISION            int not null auto_increment,
   ID_EMERGENCY         int not null,
   ID_USER_ROLE         int not null,
   ACTUALCAPACITY_MISION int,
   MAXCAPACITY_MISION   int not null,
   NAME_MISION          varchar(1024) not null,
   INITIALDATE_MISION   date not null,
   FINALDATE_MISION     date,
   CONDITION_MISION     int not null,
   primary key (ID_MISION)
);

/*==============================================================*/
/* Table: NEED                                                  */
/*==============================================================*/
create table NEED
(
   ID_ABILITY           int not null,
   ID_WORKFIELD         int not null,
   primary key (ID_ABILITY, ID_WORKFIELD)
);

/*==============================================================*/
/* Table: POSESS                                                */
/*==============================================================*/
create table POSESS
(
   ID_USER_ROLE         int not null,
   ID_ABILITY           int not null,
   MASTERY_ABILITY      int,
   primary key (ID_USER_ROLE, ID_ABILITY)
);

/*==============================================================*/
/* Table: PROVINCE                                              */
/*==============================================================*/
create table PROVINCE
(
   ID_PROVINCE          int not null auto_increment,
   ID_REGION            int not null,
   NAME_PROVINCE        varchar(100),
   primary key (ID_PROVINCE)
);

/*==============================================================*/
/* Table: REALLIZE                                              */
/*==============================================================*/
create table REALLIZE
(
   ID_TASK              int not null,
   ID_USER_ROLE         int not null,
   primary key (ID_TASK, ID_USER_ROLE)
);

/*==============================================================*/
/* Table: REGION                                                */
/*==============================================================*/
create table REGION
(
   ID_REGION            int not null auto_increment,
   NAME_REGION          varchar(100),
   primary key (ID_REGION)
);

/*==============================================================*/
/* Table: REQUEST                                               */
/*==============================================================*/
create table REQUEST
(
   ID_REQUEST           int not null auto_increment,
   ID_USER_ROLE         int not null,
   USE_ID_USER_ROLE     int not null,
   ID_MISION            int not null,
   ID_WORKFIELD         int not null,
   DATESENDED_REQUEST   date,
   DATEREWIED_REQUEST   date,
   primary key (ID_REQUEST)
);

/*==============================================================*/
/* Table: ROLE                                                  */
/*==============================================================*/
create table ROLE
(
   ID_ROLE              int not null auto_increment,
   NAME_ROLE            varchar(100),
   primary key (ID_ROLE)
);

/*==============================================================*/
/* Table: SCORE                                                 */
/*==============================================================*/
create table SCORE
(
   ID_SCORE             int not null auto_increment,
   ID_USER              int not null,
   ID_EMERGENCY         int not null,
   USE_ID_USER          int not null,
   POINTS               int,
   primary key (ID_SCORE)
);

/*==============================================================*/
/* Table: SUPERVISE                                             */
/*==============================================================*/
create table SUPERVISE
(
   ID_EMERGENCY         int not null,
   ID_USER_ROLE         int not null,
   primary key (ID_EMERGENCY, ID_USER_ROLE)
);

/*==============================================================*/
/* Table: TASK                                                  */
/*==============================================================*/
create table TASK
(
   ID_TASK              int not null auto_increment,
   ID_MISION            int not null,
   NAME_TASK            varchar(100),
   STARTDATE_TASK       date,
   ENDDATE_TASK         date,
   CONDITION_TASK       int,
   primary key (ID_TASK)
);

/*==============================================================*/
/* Table: USER                                                  */
/*==============================================================*/
create table USER
(
   ID_USER              int not null auto_increment,
   ID_COMMUNE           int not null,
   USERNAME             varchar(100) not null,
   PASSWORD             varchar(100) not null,
   EMAIL                varchar(100) not null,
   PHONE                varchar(20),
   FIRSTNAME            varchar(100),
   LASTNAME             varchar(100),
   RUT                  varchar(20),
   primary key (ID_USER)
);

/*==============================================================*/
/* Table: USER_ROLE                                             */
/*==============================================================*/
create table USER_ROLE
(
   ID_USER_ROLE         int not null auto_increment,
   ID_USER              int not null,
   ID_ROLE              int not null,
   primary key (ID_USER_ROLE)
);

/*==============================================================*/
/* Table: WORK                                                  */
/*==============================================================*/
create table WORK
(
   ID_WORKFIELD         int not null,
   ID_USER_ROLE         int not null,
   primary key (ID_WORKFIELD, ID_USER_ROLE)
);

/*==============================================================*/
/* Table: WORK_FIELD                                            */
/*==============================================================*/
create table WORK_FIELD
(
   ID_WORKFIELD         int not null auto_increment,
   NAME_WORKFIELD       varchar(1024),
   primary key (ID_WORKFIELD)
);

alter table COMMUNE add constraint FK_PROVINCE_COMMUNE foreign key (ID_PROVINCE)
      references PROVINCE (ID_PROVINCE) on delete restrict on update restrict;

alter table COMPLAIN add constraint FK_GENERATE foreign key (ID_USER_ROLE)
      references USER_ROLE (ID_USER_ROLE) on delete restrict on update restrict;

alter table COMPLAIN add constraint FK_PRODUCES foreign key (ID_TASK)
      references TASK (ID_TASK) on delete restrict on update restrict;

alter table EMERGENCY add constraint FK_DEFINES foreign key (ID_USER_ROLE)
      references USER_ROLE (ID_USER_ROLE) on delete restrict on update restrict;

alter table EMERGENCY add constraint FK_OCCURES foreign key (ID_COMMUNE)
      references COMMUNE (ID_COMMUNE) on delete restrict on update restrict;

alter table GENERATE add constraint FK_GENERATE2 foreign key (ID_DOCUMENT)
      references DOCUMENT (ID_DOCUMENT) on delete restrict on update restrict;

alter table GENERATE add constraint FK_GENERATE3 foreign key (ID_REQUEST)
      references REQUEST (ID_REQUEST) on delete restrict on update restrict;

alter table MISION add constraint FK_COMMANDS foreign key (ID_USER_ROLE)
      references USER_ROLE (ID_USER_ROLE) on delete restrict on update restrict;

alter table MISION add constraint FK_ITDIVIDE foreign key (ID_EMERGENCY)
      references EMERGENCY (ID_EMERGENCY) on delete restrict on update restrict;

alter table NEED add constraint FK_NEED foreign key (ID_ABILITY)
      references ABILITY (ID_ABILITY) on delete restrict on update restrict;

alter table NEED add constraint FK_NEED2 foreign key (ID_WORKFIELD)
      references WORK_FIELD (ID_WORKFIELD) on delete restrict on update restrict;

alter table POSESS add constraint FK_POSESS foreign key (ID_ABILITY)
      references ABILITY (ID_ABILITY) on delete restrict on update restrict;

alter table POSESS add constraint FK_POSESS2 foreign key (ID_USER_ROLE)
      references USER_ROLE (ID_USER_ROLE) on delete restrict on update restrict;

alter table PROVINCE add constraint FK_REGION_PROVINCE foreign key (ID_REGION)
      references REGION (ID_REGION) on delete restrict on update restrict;

alter table REALLIZE add constraint FK_REALLIZE foreign key (ID_TASK)
      references TASK (ID_TASK) on delete restrict on update restrict;

alter table REALLIZE add constraint FK_REALLIZE2 foreign key (ID_USER_ROLE)
      references USER_ROLE (ID_USER_ROLE) on delete restrict on update restrict;

alter table REQUEST add constraint FK_RECIEVED_BY foreign key (USE_ID_USER_ROLE)
      references USER_ROLE (ID_USER_ROLE) on delete restrict on update restrict;

alter table REQUEST add constraint FK_REQUESTED foreign key (ID_MISION)
      references MISION (ID_MISION) on delete restrict on update restrict;

alter table REQUEST add constraint FK_REQUESTED_BY foreign key (ID_USER_ROLE)
      references USER_ROLE (ID_USER_ROLE) on delete restrict on update restrict;

alter table REQUEST add constraint FK_REQUIRE foreign key (ID_WORKFIELD)
      references WORK_FIELD (ID_WORKFIELD) on delete restrict on update restrict;

alter table SCORE add constraint FK_EVALUATES foreign key (USE_ID_USER)
      references USER (ID_USER) on delete restrict on update restrict;

alter table SCORE add constraint FK_GENERATES foreign key (ID_EMERGENCY)
      references EMERGENCY (ID_EMERGENCY) on delete restrict on update restrict;

alter table SCORE add constraint FK_IS_EVALUATED_BY foreign key (ID_USER)
      references USER (ID_USER) on delete restrict on update restrict;

alter table SUPERVISE add constraint FK_SUPERVISE foreign key (ID_EMERGENCY)
      references EMERGENCY (ID_EMERGENCY) on delete restrict on update restrict;

alter table SUPERVISE add constraint FK_SUPERVISE2 foreign key (ID_USER_ROLE)
      references USER_ROLE (ID_USER_ROLE) on delete restrict on update restrict;

alter table TASK add constraint FK_COMPOSE foreign key (ID_MISION)
      references MISION (ID_MISION) on delete restrict on update restrict;

alter table USER add constraint FK_LIVES foreign key (ID_COMMUNE)
      references COMMUNE (ID_COMMUNE) on delete restrict on update restrict;

alter table USER_ROLE add constraint FK_HAS foreign key (ID_ROLE)
      references ROLE (ID_ROLE) on delete restrict on update restrict;

alter table USER_ROLE add constraint FK_IS foreign key (ID_USER)
      references USER (ID_USER) on delete restrict on update restrict;

alter table WORK add constraint FK_WORK foreign key (ID_WORKFIELD)
      references WORK_FIELD (ID_WORKFIELD) on delete restrict on update restrict;

alter table WORK add constraint FK_WORK2 foreign key (ID_USER_ROLE)
      references USER_ROLE (ID_USER_ROLE) on delete restrict on update restrict;

ALTER TABLE `USER` ADD UNIQUE(`RUT`); 
ALTER TABLE `USER` ADD UNIQUE(`EMAIL`);
ALTER TABLE `USER` ADD `remember_token` VARCHAR(400) NULL DEFAULT NULL AFTER `RUT`;

