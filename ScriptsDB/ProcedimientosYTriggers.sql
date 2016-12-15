/*========================================*/
/*mostrar los datos y roles de un usuario:*/
/*========================================*/

DROP PROCEDURE IF EXISTS show_info_user;
DELIMITER //
CREATE PROCEDURE show_info_user(`usern` VARCHAR(100))
BEGIN
	SELECT u.*, r.`NAME_ROLE` 
		FROM `USER` u
		INNER JOIN `USER_ROLE` ur
		ON ur.`ID_USER` = u.`ID_USER`
		INNER JOIN `ROLE` r
		ON r.`ID_ROLE` = ur.`ID_ROLE`
		WHERE u.`USERNAME`=`usern`;
END	//
DELIMITER ;

/*==================================*/
/*mostrar los datos y rol de un rut:*/
/*==================================*/

DROP PROCEDURE IF EXISTS show_info_rut;
DELIMITER //
CREATE PROCEDURE show_info_rut(`RUN` VARCHAR(20))
BEGIN
	SELECT u.*, r.`NAME_ROLE` 
		FROM `USER` u
		INNER JOIN `USER_ROLE` ur
		ON ur.`ID_USER` = u.`ID_USER`
		INNER JOIN `ROLE` r
		ON r.`ID_ROLE` = ur.`ID_ROLE`
		WHERE u.`RUT`=`RUN`;
END	//
DELIMITER ;

/*========================================*/
/*Mostrar las emergencias segun condicion:*/
/*========================================*/

DROP PROCEDURE IF EXISTS show_emergency_condition;
DELIMITER //
CREATE PROCEDURE show_emergency_condition(`num_condition` INT(11))
BEGIN
	SELECT *
		FROM `EMERGENCY` e
		WHERE e.`CONDITION_EMERGENCY` = `num_condition`;
END	//
DELIMITER ;

/*======================================*/
/*Mostrar las emergencias en una comuna:*/
/*======================================*/

DROP PROCEDURE IF EXISTS show_emergency_comunne;
DELIMITER //
CREATE PROCEDURE show_emergency_comunne(`name_comm` VARCHAR(100))
BEGIN
	SELECT e.*
		FROM `EMERGENCY` e
		INNER JOIN `COMMUNE` c
		ON e.`ID_COMMUNE` = c.`ID_COMMUNE`
		WHERE c.`NAME_COMMUNE`= `name_comm`;
END	//
DELIMITER ;

/*=================================*/
/*Mostrar las Tareas de una mision:*/
/*=================================*/

DROP PROCEDURE IF EXISTS tasks_from_mision;
DELIMITER //
CREATE PROCEDURE tasks_from_mision(`name_mis` VARCHAR(1024))
BEGIN
	SELECT t.*
		FROM `TASK` t
		INNER JOIN `MISION` m
		ON m.`ID_MISION` = t.`ID_MISION`
		WHERE m.`NAME_MISION` = `name_mis`;
END	//
DELIMITER ;

/*====================================*/
/*Mostrar los problemas de una mision:*/
/*====================================*/

DROP PROCEDURE IF EXISTS complains_from_mision;
DELIMITER //
CREATE PROCEDURE complains_from_mision(`name_mis` VARCHAR(1024))
BEGIN
	SELECT c.*
		FROM `COMPLAIN` c
		INNER JOIN `TASK` t
		ON c.`ID_TASK` = t.`ID_TASK`
		INNER JOIN `MISION` m
		ON m.`ID_MISION` = t.`ID_MISION`
		WHERE m.`NAME_MISION` = `name_mis`;
END	//
DELIMITER ;

/*===============================================================*/
/*Mostrar los voluntarios convocados para una mision determinada:*/
/*===============================================================*/

DROP PROCEDURE IF EXISTS mision_volunteers;
DELIMITER //
CREATE PROCEDURE mision_volunteers(`name_mis` VARCHAR(1024))
BEGIN
	SELECT u.*
		FROM `REQUEST` r
		INNER JOIN `USER_ROLE` ur
		ON ur.`ID_USER_ROLE` = r.`ID_USER_ROLE`
		INNER JOIN `USER` u
		ON ur.`ID_USER` = u.`ID_USER`
		INNER JOIN `MISION` m
		ON r.`ID_MISION` = m.`ID_MISION`
		WHERE m.`NAME_MISION`= `name_mis`;
END	//
DELIMITER ;

/*================================================*/
/*Mostrar el o las personas a cargo de una mision:*/
/*================================================*/

DROP PROCEDURE IF EXISTS mision_chief;
DELIMITER //
CREATE PROCEDURE mision_chief(`name_mis` VARCHAR(1024))
BEGIN
	SELECT u.*
		FROM `USER` u
		INNER JOIN `USER_ROLE` ur
		ON ur.`ID_USER` = u.`ID_USER`
		INNER JOIN `MISION` m
		ON m.`ID_USER_ROLE` = ur.`ID_USER_ROLE`
		WHERE m.`NAME_MISION` = `name_mis`;
END	//
DELIMITER ;

/*==================================================*/
/*Mostrar los puntajes generados por una emergencia:*/
/*==================================================*/

DROP PROCEDURE IF EXISTS emergency_score;
DELIMITER //
CREATE PROCEDURE emergency_score(`name_emer` VARCHAR(1024))
BEGIN
	SELECT s.*
		FROM `SCORE` s
		INNER JOIN `EMERGENCY` e
		ON e.`ID_EMERGENCY` = s.`ID_EMERGENCY`
		WHERE e.`NAME_EMERGENCY` = `name_emer`;
END	//
DELIMITER ;

/*===========================================================================================*/
/*Calcular el puntaje de un usuario (promedio de todos los puntajes en los que fue evaluado):*/
/*===========================================================================================*/

DROP PROCEDURE IF EXISTS user_score;
DELIMITER //
CREATE PROCEDURE user_score(`usern` VARCHAR(100))
BEGIN
	SELECT u.`USERNAME` ,AVG(s.`POINTS`)
		FROM `SCORE` s
		INNER JOIN `USER` u
		ON u.`ID_USER` = s.`USE_ID_USER`
		WHERE u.`USERNAME` = `usern`
		GROUP BY u.`USERNAME`;
END	//
DELIMITER ;

/*===========================================================================*/
/*Mostrar todas las habilidades que posee una persona y su nivel de maestria:*/
/*===========================================================================*/

DROP PROCEDURE IF EXISTS user_abilities;
DELIMITER //
CREATE PROCEDURE user_abilities(`usern` VARCHAR(100))
BEGIN
	SELECT a.`NAME_ABILITY`, p.`MASTERY_ABILITY`
		FROM `ABILITY` a
		INNER JOIN `POSESS` p
		ON a.`ID_ABILITY` = p.`ID_ABILITY`
		INNER JOIN `USER_ROLE` ur
		ON ur.`ID_USER_ROLE` = p.`ID_USER_ROLE`
		INNER JOIN `USER` u
		ON ur.`ID_USER` = u.`ID_USER`
		WHERE u.`USERNAME` =  `usern`;
END	//
DELIMITER ;

/*===========================================================================*/
/*Mostrar las solicitudes que fueron revisadas por una persona en especifico:*/
/*===========================================================================*/

DROP PROCEDURE IF EXISTS user_request;
DELIMITER //
CREATE PROCEDURE user_request(`usern` VARCHAR(100))
BEGIN
	SELECT r.*
		FROM `REQUEST` r
		INNER JOIN `USER_ROLE` ur
		ON ur.`ID_USER_ROLE` = r.`ID_USER_ROLE`
		INNER JOIN `USER` u
		ON ur.`ID_USER` = u.`ID_USER`
		WHERE u.`USERNAME`= `usern`;
END	//
DELIMITER ;

/*=======================================*/
/*Mostrar las misiones de una emergencia:*/
/*=======================================*/

DROP PROCEDURE IF EXISTS emergency_misions;
DELIMITER //
CREATE PROCEDURE emergency_misions(`name_emer` VARCHAR(1024))
BEGIN
	SELECT m.*
		FROM `MISION` m
		INNER JOIN `EMERGENCY` e
		ON m.`ID_EMERGENCY` = e.`ID_EMERGENCY`
		WHERE `NAME_EMERGENCY` = `name_emer`;
END	//
DELIMITER ;

/*======================================================================================*/
/*Mostrar las habilidades necesarias para realizar un trabajo (se considera que el nivel*/ 
/* de maestria mínimo necesario es de 4 de 1 a 10 en cada una de las habilidades )     :*/
/*======================================================================================*/

DROP PROCEDURE IF EXISTS work_required_abilities;
DELIMITER //
CREATE PROCEDURE work_required_abilities(`name_work` VARCHAR(1024))
BEGIN
	SELECT a.*
		FROM `ABILITY` a
		INNER JOIN `NEED` n
		ON n.`ID_ABILITY` = a.`ID_ABILITY`
		INNER JOIN `WORK_FIELD` w
		ON w.`ID_WORKFIELD` = n.`ID_WORKFIELD`
		INNER JOIN `POSESS` p
		ON p.`ID_ABILITY` = a.`ID_ABILITY`
		WHERE p.`MASTERY_ABILITY` >= 4 AND
		w.`NAME_WORKFIELD` = `name_work`;
END	//
DELIMITER ;

/*================================================================================*/
/*Procedimiento auxiliar que ayuda al trigger a insertar los valores actualizados:*/
/*================================================================================*/

DROP PROCEDURE IF EXISTS insert_work_field_user;
DELIMITER //
CREATE PROCEDURE insert_work_field_user(`id_userna` int(11))
	BEGIN
		DECLARE id_usern INT(11);
		DECLARE bool INT(11);
		DECLARE i INT(11);
		DECLARE f INT(11);
		SET id_usern = `id_userna`;
		SET i=0;
		SELECT MAX(wf.`ID_WORKFIELD`) INTO f 
				FROM `WORK_FIELD` wf;
		SET f=f+1;
		label1: LOOP
			SET i = i + 1;
			SELECT COUNT(wf.`ID_WORKFIELD`) INTO bool 
				FROM `WORK_FIELD` wf
				where wf.`ID_WORKFIELD`= i;
    		IF i >= f+1 
    		THEN
    			LEAVE label1;
    		END IF;
    		IF bool = 0
    		THEN 
    			ITERATE label1;
    		END IF;
    		IF count_abilities_workfield_user(id_usern,i) = count_abilities_workfield(i)
			THEN 
    			INSERT IGNORE INTO `WORK` (`ID_WORKFIELD`,`ID_USER_ROLE`) VALUES (i,id_usern);	
    		END IF;
      		ITERATE label1;
  		END LOOP label1;
	END //
DELIMITER ;

/*=====================================================================*/
/*Funcion que cuenta las habilidades de un workfield a partir de un id:*/
/*=====================================================================*/

DROP FUNCTION IF EXISTS count_abilities_workfield;
DELIMITER //
CREATE FUNCTION count_abilities_workfield(`id_workf` INT) 
	RETURNS INT(11)
	BEGIN
		DECLARE num INT(11);
  		SET num = 0;
		SELECT COUNT(n.`ID_ABILITY`) INTO num
			FROM `NEED` n
			WHERE n.`ID_WORKFIELD` = `id_workf`;
		RETURN num;
	END //
DELIMITER ;

/*================================================================================================*/
/*Funcion que cuenta las habilidades de un usuario en un determinado workfield a partir de los id:*/
/*================================================================================================*/

DROP FUNCTION IF EXISTS count_abilities_workfield_user;
DELIMITER //
CREATE FUNCTION count_abilities_workfield_user(`id_usern` INT ,`id_workf` INT) 
	RETURNS INT(11)
	BEGIN
		DECLARE num INT(11);
  		SET num = 0;
		SELECT COUNT(p.`ID_ABILITY`) INTO num
			FROM `POSESS` p 
			INNER JOIN `NEED` n
			ON p.`ID_ABILITY`= n.`ID_ABILITY`
			WHERE p.`ID_USER_ROLE` = `id_usern` 
			AND n.`ID_WORKFIELD` = `id_workf`;
		RETURN num;
	END //
DELIMITER ;

/*============================================================================================================================*/
/*Trigger que actualiza automaticamente el workfield en el que puede trabajar un voluntario luego de ingresar sus habilidades:*/
/*============================================================================================================================*/

DROP TRIGGER IF EXISTS newWork;
CREATE TRIGGER newWork AFTER INSERT ON `POSESS`
	FOR EACH ROW
		CALL insert_work_field_user(NEW.`ID_USER_ROLE`);


/*
testeo del trigger

INSERT IGNORE INTO `work_field` (`NAME_WORKFIELD`) VALUES (test1);
INSERT IGNORE INTO `NEED` (`ID_ABILITY`,`ID_WORKFIELD`) VALUES (1,101);	
INSERT IGNORE INTO `NEED` (`ID_ABILITY`,`ID_WORKFIELD`) VALUES (2,101);
INSERT IGNORE INTO `POSESS` (`ID_USER_ROLE`,`ID_ABILITY`,`MASTERY_ABILITY`) VALUES (1,1,5);
INSERT IGNORE INTO `POSESS` (`ID_USER_ROLE`,`ID_ABILITY`,`MASTERY_ABILITY`) VALUES (1,2,5);

*/
