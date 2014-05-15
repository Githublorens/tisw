CREATE TABLE `cruge_system` (
  `idsystem` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(45) NULL ,
  `largename` VARCHAR(45) NULL ,
  `sessionmaxdurationmins` INT(11) NULL DEFAULT 30 ,
  `sessionmaxsameipconnections` INT(11) NULL DEFAULT 10 ,
  `sessionreusesessions` INT(11) NULL DEFAULT 1 COMMENT '1yes 0no' ,
  `sessionmaxsessionsperday` INT(11) NULL DEFAULT -1 ,
  `sessionmaxsessionsperuser` INT(11) NULL DEFAULT -1 ,
  `systemnonewsessions` INT(11) NULL DEFAULT 0 COMMENT '1yes 0no' ,
  `systemdown` INT(11) NULL DEFAULT 0 ,
  `registerusingcaptcha` INT(11) NULL DEFAULT 0 ,
  `registerusingterms` INT(11) NULL DEFAULT 0 ,
  `terms` BLOB NULL ,
  `registerusingactivation` INT(11) NULL DEFAULT 1 ,
  `defaultroleforregistration` VARCHAR(64) NULL ,
  `registerusingtermslabel` VARCHAR(100) NULL ,
  `registrationonlogin` INT(11) NULL DEFAULT 1 ,
  PRIMARY KEY (`idsystem`) )
ENGINE = InnoDB;


CREATE TABLE `cruge_session` (
  `idsession` INT NOT NULL AUTO_INCREMENT ,
  `iduser` INT NOT NULL ,
  `created` BIGINT(30) NULL ,
  `expire` BIGINT(30) NULL ,
  `status` INT(11) NULL DEFAULT 0 ,
  `ipaddress` VARCHAR(45) NULL ,
  `usagecount` INT(11) NULL DEFAULT 0 ,
  `lastusage` BIGINT(30) NULL ,
  `logoutdate` BIGINT(30) NULL ,
  `ipaddressout` VARCHAR(45) NULL ,
  PRIMARY KEY (`idsession`) ,
  INDEX `crugesession_iduser` (`iduser` ASC) )
ENGINE = InnoDB;

CREATE  TABLE `cruge_user` (
  `iduser` INT NOT NULL AUTO_INCREMENT ,
  `regdate` BIGINT(30) NULL ,
  `actdate` BIGINT(30) NULL ,
  `logondate` BIGINT(30) NULL ,
  `username` VARCHAR(64) NULL ,
  `email` VARCHAR(45) NULL ,
  `password` VARCHAR(64) NULL COMMENT 'Hashed password' ,
  `authkey` VARCHAR(100) NULL COMMENT 'llave de autentificacion' ,
  `state` INT(11) NULL DEFAULT 0 ,
  `totalsessioncounter` INT(11) NULL DEFAULT 0 ,
  `currentsessioncounter` INT(11) NULL DEFAULT 0 ,
  PRIMARY KEY (`iduser`) )
ENGINE = InnoDB;

delete from `cruge_user`;
ALTER TABLE `cruge_user` AUTO_INCREMENT = 1;
insert into `cruge_user`(username, email, password, state) values
 ('admin', 'admin@tucorreo.com','admin',1)
 ,('invitado', 'invitado','nopassword',1)
;
ALTER TABLE `cruge_user` AUTO_INCREMENT = 10;
delete from `cruge_system`;
INSERT INTO `cruge_system` (`idsystem`,`name`,`largename`,`sessionmaxdurationmins`,`sessionmaxsameipconnections`,`sessionreusesessions`,`sessionmaxsessionsperday`,`sessionmaxsessionsperuser`,`systemnonewsessions`,`systemdown`,`registerusingcaptcha`,`registerusingterms`,`terms`,`registerusingactivation`,`defaultroleforregistration`,`registerusingtermslabel`,`registrationonlogin`) VALUES
 (1,'default',NULL,30,10,1,-1,-1,0,0,0,0,'',0,'','',1);



CREATE  TABLE `cruge_field` (
  `idfield` INT NOT NULL AUTO_INCREMENT ,
  `fieldname` VARCHAR(20) NOT NULL ,
  `longname` VARCHAR(50) NULL ,
  `position` INT(11) NULL DEFAULT 0 ,
  `required` INT(11) NULL DEFAULT 0 ,
  `fieldtype` INT(11) NULL DEFAULT 0 ,
  `fieldsize` INT(11) NULL DEFAULT 20 ,
  `maxlength` INT(11) NULL DEFAULT 45 ,
  `showinreports` INT(11) NULL DEFAULT 0 ,
  `useregexp` VARCHAR(512) NULL ,
  `useregexpmsg` VARCHAR(512) NULL ,
  `predetvalue` MEDIUMBLOB NULL ,
  PRIMARY KEY (`idfield`) )
ENGINE = InnoDB;

CREATE  TABLE `cruge_fieldvalue` (
  `idfieldvalue` INT NOT NULL AUTO_INCREMENT ,
  `iduser` INT NOT NULL ,
  `idfield` INT NOT NULL ,
  `value` BLOB NULL ,
  PRIMARY KEY (`idfieldvalue`) ,
  INDEX `fk_cruge_fieldvalue_cruge_user1` (`iduser` ASC) ,
  INDEX `fk_cruge_fieldvalue_cruge_field1` (`idfield` ASC) ,
  CONSTRAINT `fk_cruge_fieldvalue_cruge_user1`
    FOREIGN KEY (`iduser` )
    REFERENCES `cruge_user` (`iduser` )
    ON DELETE CASCADE
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_cruge_fieldvalue_cruge_field1`
    FOREIGN KEY (`idfield` )
    REFERENCES `cruge_field` (`idfield` )
    ON DELETE CASCADE
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE TABLE `cruge_authitem` (
  `name` VARCHAR(64) NOT NULL ,
  `type` INT(11) NOT NULL ,
  `description` TEXT NULL DEFAULT NULL ,
  `bizrule` TEXT NULL DEFAULT NULL ,
  `data` TEXT NULL DEFAULT NULL ,
  PRIMARY KEY (`name`) )
ENGINE = InnoDB;

CREATE TABLE `cruge_authassignment` (
  `userid` INT NOT NULL ,
  `bizrule` TEXT NULL DEFAULT NULL ,
  `data` TEXT NULL DEFAULT NULL ,
  `itemname` VARCHAR(64) NOT NULL ,
  PRIMARY KEY (`userid`, `itemname`) ,
  INDEX `fk_cruge_authassignment_cruge_authitem1` (`itemname` ASC) ,
  INDEX `fk_cruge_authassignment_user` (`userid` ASC) ,
  CONSTRAINT `fk_cruge_authassignment_cruge_authitem1`
    FOREIGN KEY (`itemname` )
    REFERENCES `cruge_authitem` (`name` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_cruge_authassignment_user`
    FOREIGN KEY (`userid` )
    REFERENCES `cruge_user` (`iduser` )
    ON DELETE CASCADE
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


CREATE TABLE `cruge_authitemchild` (
  `parent` VARCHAR(64) NOT NULL ,
  `child` VARCHAR(64) NOT NULL ,
  PRIMARY KEY (`parent`, `child`) ,
  INDEX `child` (`child` ASC) ,
  CONSTRAINT `crugeauthitemchild_ibfk_1`
    FOREIGN KEY (`parent` )
    REFERENCES `cruge_authitem` (`name` )
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `crugeauthitemchild_ibfk_2`
    FOREIGN KEY (`child` )
    REFERENCES `cruge_authitem` (`name` )
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;

create table `direccion`(
	`dir_id` int not null auto_increment ,
	`dir_calle` varchar(50) null,
	`dir_pasaje` varchar(50)null,
	`dir_numero` varchar(10) not null,
	`dir_poblacion` varchar(50)not null,
	`dir_comuna` varchar(50) not null,
	primary key(`dir_id`)
)ENGINE=InnoDB;

	create table `profesor`(
		`pro_rut` varchar(50) not null,
		`id_user` int(11) not null,
		`pro_nombre` varchar(50) not null,
		`pro_apellido_paterno` varchar(50) not null,
		`pro_apellido_materno` varchar(50) not null,
		`pro_fono` varchar(9) not null,
		`pro_email`varchar(50) not null,
		`dir_id` int not null,
		primary key(`pro_rut`),
		INDEX `fk_cruge_user_profesor` (`id_user` ASC) ,
		INDEX `fk_direccion_profesor` (`dir_id` ASC) ,
		constraint `fk_direccion_profesor`
		foreign key (`dir_id` )
		references  `direccion` (`dir_id` )
		ON DELETE CASCADE
		ON UPDATE NO ACTION,
		constraint `fk_cruge_user_profesor`
		foreign key (`id_user` )
		references `cruge_user` (`iduser` )
		ON DELETE CASCADE
		ON UPDATE NO ACTION)
	ENGINE=InnoDB;
create table `tesis`(
	`tesis_id` int not null auto_increment,
	`pro_rut_guia` varchar(50) not null,
	`tesis_titulo` varchar(100) not null,
	`tesis_descrpcion` varchar(200) null,
	`tesis_empresa` varchar(50) null,
	`informe_final_id` int null,
	primary key(`tesis_id`),
	index `fk_profesor_tesis` (`pro_rut_guia` asc),
	constraint `fk_profesor_tesis`
	foreign key (`pro_rut_guia` )
	references `profesor` (`pro_rut` )
	on delete cascade
	on update no action
)ENGINE=InnoDB;
create table `informe_final`(
	`informe_final_id` int not null auto_increment,
	`inf_ruta` varchar(50) not null,
	`inf_titulo` varchar(50) not null,
	`inf_descripcion` varchar(50) not null,
	`tesis_id` int not null,
	primary key(`informe_final_id`),
	index `fk_tesis_informe_final` (`tesis_id` asc),
	constraint `fk_tesis_informe_final`
	foreign key (`tesis_id` )
	references `tesis` (`tesis_id`)
	on delete cascade
	on update no action
)ENGINE=InnoDB;

ALTER TABLE `tesis` ADD CONSTRAINT `fk_informe_final_tesis` FOREIGN KEY (`informe_final_id`) REFERENCES `informe_final` (`informe_final_id`);

create table `alumno`(
	`al_rut` varchar(50) not null,
	`al_nombre`varchar(50) not null,
	`al_apellido_paterno` varchar(50) not null,
	`al_apellido_materno` varchar(50) not null,
	`al_email` varchar(50) not null,
	`dir_id` int not null,
	`al_fono_cel` varchar(9) not null,
	`al_fono_fijo` varchar(9) null,
	`id_user` int not null,
	`tesis_id` int not null,
	primary key(`al_rut`),
	constraint `fk_direccion_alumno`
	foreign key (`dir_id` )
	references  `direccion` (`dir_id` )
	ON DELETE CASCADE
	ON UPDATE NO ACTION,
	constraint `fk_cruge_user_alumno`
	foreign key (`id_user` )
	references `cruge_user` (`iduser` )
	ON DELETE CASCADE
	ON UPDATE NO ACTION,
	constraint `fk_tesis_alumno`
	foreign key (`tesis_id` )
	references `tesis` (`tesis_id` )
	ON DELETE CASCADE
	ON UPDATE NO ACTION
)ENGINE=InnoDB;
create table `jefe_carrera`(
	`pro_rut_jefe` varchar(50)not null,
	primary key(`pro_rut_jefe`),
	constraint `fk_profesor_jefe_carrera`
	foreign key (`pro_rut_jefe`)
	references `profesor` (`pro_rut`)
	ON DELETE CASCADE
	ON UPDATE NO ACTION
)ENGINE=InnoDB;
create table `avance`(
	`ava_id` int not null auto_increment,
	`ava_fecha` datetime not null,
	`ava_titulo` varchar(50) not null,
	`ava_descripcion` varchar(100) not null,
	`ava_ruta` varchar(50) not null,
	`tesis_id` int not null,
	primary key(`ava_id`),
	constraint `fk_tesis_avance`
	foreign key (`tesis_id`)
	references `tesis` (`tesis_id`)
	ON DELETE CASCADE
	ON UPDATE NO ACTION
)ENGINE=InnoDB; 
create table `observaciones`(
	`obs_id` int not null auto_increment,
	`ava_id` int not null,
	`observacion` text,
	`obs_fecha` datetime,
	primary key(obs_id),
	constraint `fk_avance_observacion`
	foreign key (`ava_id`)
	references `avance` (`ava_id`)
	on delete cascade	
	on update no action
)ENGINE=InnoDB;
create table `defensa`(
	`defensa_id` int not null auto_increment,
	`fecha` datetime not null,
	`tesis_id` int not null,
	primary key (`defensa_id`),
	constraint `fk_tesis_defensa`
	foreign key(`tesis_id`)
	references `tesis` (`tesis_id`)
	on delete cascade
	on update no action
)ENGINE=InnoDB;

create table `evalua_defensa`(
	`evalua_defensa_id` int not null auto_increment,
	`defensa_id` int not null,
	`evalua_defensa_obs` text not null,
	`calificacion` int not null,
	`pro_rut` varchar(50) not null,
	primary key(`evalua_defensa_id`),
	constraint `fk_defensa_evalua`
	foreign key (`defensa_id`)
	references `defensa` (`defensa_id`)
	on delete  cascade
	on update no action,
	constraint `fk_profesor_evalua`
	foreign key (`pro_rut`)
	references `profesor` (`pro_rut`)
	on delete  cascade
	on update no action
)ENGINE=InnoDB;
create table `evalua_informe`(
	`evalua_informe_id` int not null auto_increment,
	`evalua_informe_calificacion` int not null,
	`evalua_informe_obs` text not null,
	`informe_final_id` int not null,
	`pro_rut` varchar(50) not null,
	primary key(`evalua_informe_id`),
	constraint `fk_informe_evalua`
	foreign key (`informe_final_id`)
	references `informe_final` (`informe_final_id`)
	on delete cascade	
	on update no action,
	constraint `fk_profesor_evalua_final_inf`
	foreign key (`pro_rut`)
	references `profesor` (`pro_rut`)
	on delete cascade	
	on update no action
)ENGINE=InnoDB;