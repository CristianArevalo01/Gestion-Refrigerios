Create Database refrigerios;
USE refrigerios;
CREATE TABLE usuario (id int PRIMARY KEY AUTO_INCREMENT, 
		nombre varchar(40), contraseña varchar(20), 
		rol varchar(20), estado varchar(10));

CREATE TABLE coordinador (id int PRIMARY KEY AUTO_INCREMENT, 
		nombre varchar(40), apellido varchar(50), 
        correo varchar(50), telefono varchar(10), 
        estado varchar(10), id_usuario_fk int);

CREATE TABLE auxiliar (id int PRIMARY KEY AUTO_INCREMENT, 
		nombre varchar(40), apellido varchar(50), 
		telefono varchar(10), correo varchar(50), 
		estado varchar(10), id_usuario_fk int);

CREATE TABLE refrigerio (id int PRIMARY KEY AUTO_INCREMENT not null,fecha date,hora time, tipo varchar(10), 
        cantidad int, descripcion varchar(200), 
        estado varchar(10), id_coordinador_fk int,
		id_auxiliar_fk int);
CREATE TABLE curso (id varchar(20) primary key not null, 
		cantidad int, profesor varchar(50),
		estado varchar(10), jornada varchar(20));
        
CREATE TABLE refrigerio_curso (id int auto_increment primary key not null,
		fecha_entrega date,  hora_entrega time, 
        id_refrigerio_fk int,
		id_curso_fk varchar(20));
        
ALTER TABLE coordinador add constraint relacion1 FOREIGN KEY(id_usuario_fk)REFERENCES usuario (id);
ALTER TABLE auxiliar ADD constraint relacion2 FOREIGN KEY (id_usuario_fk) REFERENCES usuario (id);
ALTER TABLE refrigerio ADD constraint relacion3 FOREIGN KEY (id_auxiliar_fk) REFERENCES auxiliar (id);
ALTER TABLE refrigerio ADD constraint relacion4 FOREIGN KEY (id_coordinador_fk) REFERENCES coordinador (id);
ALTER TABLE refrigerio_curso ADD constraint relacion5 FOREIGN KEY (id_refrigerio_fk) REFERENCES refrigerio (id);
ALTER TABLE refrigerio_curso ADD constraint relacion6 FOREIGN KEY (id_curso_fk) REFERENCES curso (id);

INSERT INTO usuario VALUES (null,"santy01","123","auxiliar","activo");	
INSERT INTO usuario VALUES (null,"cristian02","456","coordinador","activo");
INSERT INTO usuario VALUES (null,"jaider03","789","auxiliar","activo");
INSERT INTO usuario VALUES (null,"fernanda04","1010","coordinador","activo");
INSERT INTO usuario VALUES (null,"michel05","1011","auxiliar","activo");
INSERT INTO usuario VALUES (null,"darwin06","1012","coordinador","activo");
INSERT INTO usuario VALUES (null,"paula07","1013","auxiliar","activo");
INSERT INTO usuario VALUES (null,"sofia08","1014","coordinador","activo");
INSERT INTO usuario VALUES (null,"maicol09","1015","auxiliar","activo");
INSERT INTO usuario VALUES (null,"daniel","1016","coordinador","activo");
INSERT INTO usuario VALUES (null,"carlos","1017","auxiliar","activo");
INSERT INTO usuario VALUES (null,"marta","1018","coordinador","activo");
INSERT INTO usuario VALUES (null,"fany","1019","auxiliar","activo");
INSERT INTO usuario VALUES (null,"Vannesa","1020","coordinador","activo");
INSERT INTO usuario VALUES (null,"Daniela","1021","auxiliar","activo");
INSERT INTO usuario VALUES (null,"Karol","1022","coordinador","activo");
INSERT INTO usuario VALUES (null,"Valery","1023","auxiliar","activo");
INSERT INTO usuario VALUES (null,"Esteban","1024","coordinador","activo");
INSERT INTO usuario VALUES (null,"Samuel","1025","auxiliar","activo");
INSERT INTO usuario VALUES (null,"Santiago","1026","coordinador","activo");



INSERT INTO auxiliar VALUES (null,"Santiago","Soledad","3215648963","dsoleda@misena.edu.co","activo","1");
INSERT INTO auxiliar VALUES (null,"Jaider","Alfonso","3215648993","jaider@misena.edu.co","activo","3");
INSERT INTO auxiliar VALUES (null,"Michel","Cardenas","3215644569","michelcar@misena.edu.co","activo","5");
INSERT INTO auxiliar VALUES (null,"Paula","Florez","3215689657","paulaflor@misena.edu.co","activo","7");
INSERT INTO auxiliar VALUES (null,"Maicol","Bernal","3215523145","bernalmai@misena.edu.co","activo","9");
INSERT INTO auxiliar VALUES (null,"Carlos","Peña","3252659874","carlos01@misena.edu.co","activo","11");
INSERT INTO auxiliar VALUES (null,"Fany","Ostoz","3165478963","fany03@misena.edu.co","activo","13");
INSERT INTO auxiliar VALUES (null,"Daniela","Lozano","3248963521","danyloz@misena.edu.co","activo","15");
INSERT INTO auxiliar VALUES (null,"Valery","Ortiz","3874569325","valery@misena.edu.co","activo","17");
INSERT INTO auxiliar VALUES (null,"Samuel","Cañon","3546325698","samu@misena.edu.co","activo","19");


INSERT INTO coordinador VALUES (null,"Cristian","Arevalo","cris@gmail.com","3158974236","activo","2");
INSERT INTO coordinador VALUES (null,"Fernanda","Bermudes","fer@gmail.com","3158923658","activo","4");
INSERT INTO coordinador VALUES (null,"Darwin","Perez","darwin@gmail.com","3158658963","activo","6");
INSERT INTO coordinador VALUES (null,"Sofia","Sanchez","sofisanchez@gmil.com","3658974526","activo","8");
INSERT INTO coordinador VALUES (null,"Daniel","gonzales","danigonzales@gmail.com","3654785966","activo","10");
INSERT INTO coordinador VALUES (null,"Marta","Perez","marta02@gmail.com","3125698725","activo","12");
INSERT INTO coordinador VALUES (null,"Vannesa","Ruiz","vaner@gmail.com","31789635","activo","14");
INSERT INTO coordinador VALUES (null,"Karen","Arevalo","karen@gmail.com","3187456987","activo","16");
INSERT INTO coordinador VALUES (null,"Esteban","Perdomo","estanp@gmail.com","3125698742","activo","18");
INSERT INTO coordinador VALUES (null,"Santiago","Gil","santyg@gmail.com","3256985471","activo","20");


INSERT INTO curso VALUES ("601","40","Jairo Bravo","activo","mañana");
INSERT INTO curso VALUES ("602","42","Jenny Gomez","activo","mañana");
INSERT INTO curso VALUES ("701","41","Milena Beltran","activo","mañana");
INSERT INTO curso VALUES ("702","43","Leonardo Salamanca","activo","mañana");
INSERT INTO curso VALUES ("801","39","Maria Yolanda","activo","mañana");
INSERT INTO curso VALUES ("802","37","Gerardo Mayorga","activo","mañana");
INSERT INTO curso VALUES ("901","38","Miguel Caro","activo","mañana");
INSERT INTO curso VALUES ("902","36","Richard Gutierrez","activo","mañana");
INSERT INTO curso VALUES ("1001","35","Mayra Leal","activo","mañana");
INSERT INTO curso VALUES ("1002","34","Adriana Tafur","activo","mañana");
INSERT INTO curso VALUES ("1101","35","Carlos Caro","activo","mañana");
INSERT INTO curso VALUES ("1102","36","Jefferson Torres","activo","mañana"); 


INSERT INTO refrigerio VALUES(null,"2022-09-08","9:00:00","B","380","leche,galletas,banano","activo","1","2");
INSERT INTO refrigerio VALUES(null,"2022-09-08","9:00:00","C","207","croisant, yogurt_fresa y manzana","activo","3","4");
INSERT INTO refrigerio VALUES(null,"2022-09-08","9:15:00","B","380","pan_arroz,leche_saborisada y compota","activo","5","5");
INSERT INTO refrigerio VALUES(null,"2022-09-08","9:15:00","C","207","achiras, yogurt_melocoton y manzana","activo","4","1");
INSERT INTO refrigerio VALUES(null,"2022-09-08","9:30:00","B","380","Bonyurt, naranja y galletas_avena","activo","2","3");
INSERT INTO refrigerio VALUES (null,"2022-09-08","9:35:00","B","270","Yogurt, pan y uvas","activo","3","5");
INSERT INTO refrigerio VALUES (null,"2022-09-08","9:50:00","C","250","jugo, croasant y pera","activo","1","1");
INSERT INTO refrigerio VALUES (null,"2022-09-08","10:20:00","A","400","Yogurt Griego, palito de queso y panelita","activo","5","5");
INSERT INTO refrigerio VALUES (null,"2022-09-08","8:35:00","B","100","leche,pandebonos y Queso ","activo","2","3");
INSERT INTO refrigerio VALUES (null,"2022-09-08","7:35:00","C","80","Yogurt de mora, pan y bocadillo","activo","3","2");

INSERT INTO refrigerio_curso VALUES (null,"2022-09-12","11:00:00","1","601");
INSERT INTO refrigerio_curso VALUES(null,"2022-09-12","11:05:00","1","602");
INSERT INTO refrigerio_curso VALUES(null,"2022-09-12","11:10:00","1","701");
INSERT INTO refrigerio_curso VALUES(null,"22-09-12","11:15:00","1","702");
INSERT INTO refrigerio_curso VALUES(null,"2022-09-12","11:20:00","1","801");
INSERT INTO refrigerio_curso VALUES(null,"2022-09-12","11:25:00","1","802");
INSERT INTO refrigerio_curso VALUES(null,"2022-09-12","10:00:00","1","901");
INSERT INTO refrigerio_curso VALUES(null,"2022-09-12","10:05:00","1","902");
INSERT INTO refrigerio_curso VALUES(null,"2022-09-12","10:10:00","1","1001");
INSERT INTO refrigerio_curso VALUES(null,"2022-09-12","10:15:00","1","1002");
INSERT INTO refrigerio_curso VALUES(null,"2022-09-12","10:20:00","1","1101");
INSERT INTO refrigerio_curso VALUES(null,"2022-09-12","10:25:00","1","1102");
INSERT INTO refrigerio_curso VALUES(null,"2022-09-13","08:05:00","2","601");
INSERT INTO refrigerio_curso VALUES(null,"2022-09-13","08:10:00","2","602");
INSERT INTO refrigerio_curso VALUES(null,"2022-09-13","08:15:00","2","701");
INSERT INTO refrigerio_curso VALUES(null,"2022-09-13","08:20:00","2","702");
INSERT INTO refrigerio_curso VALUES(null,"2022-09-13","08:25:00","2","801");
INSERT INTO refrigerio_curso VALUES(null,"2022-09-13","08:30:00","2","802");
INSERT INTO refrigerio_curso VALUES(null,"2022-09-13","07:35:00","2","901");
INSERT INTO refrigerio_curso VALUES(null,"2022-09-13","07:40:00","2","902");
INSERT INTO refrigerio_curso VALUES(null,"2022-09-13","07:45:00","2","1001");
INSERT INTO refrigerio_curso VALUES(null,"2022-09-13","07:50:00","2","1002");
INSERT INTO refrigerio_curso VALUES(null,"2022-09-13","07:55:00","2","1101");
INSERT INTO refrigerio_curso VALUES(null,"2022-09-13","08:00:00","2","1102");
INSERT INTO refrigerio_curso VALUES(null,"2022-09-14","09:35:00","3","601");
INSERT INTO refrigerio_curso VALUES(null,"2022-09-14","09:40:00","3","602");
INSERT INTO refrigerio_curso VALUES(null,"2022-09-14","09:45:00","3","701");
INSERT INTO refrigerio_curso VALUES(null,"2022-09-14","09:50:00","3","702");
INSERT INTO refrigerio_curso VALUES(null,"2022-09-14","09:55:00","3","801");
INSERT INTO refrigerio_curso VALUES(null,"2022-09-14","10:00:00","3","802");
INSERT INTO refrigerio_curso VALUES(null,"2022-09-14","10:05:00","3","901");
INSERT INTO refrigerio_curso VALUES(null,"2022-09-14","10:10:00","3","902");
INSERT INTO refrigerio_curso VALUES(null,"2022-09-14","10:15:00","3","1001");
INSERT INTO refrigerio_curso VALUES(null,"2022-09-14","10:20:00","3","1002");
INSERT INTO refrigerio_curso VALUES(null,"2022-09-14","10:25:00","3","1101");
INSERT INTO refrigerio_curso VALUES(null,"2022-09-14","10:30:00","3","1102");

 select * from usuario;
 select * from auxiliar;
 select * from coordinador;
 select * from curso;
 select * from refrigerio;
 select * from refrigerio_curso;
 
SELECT * FROM usuario WHERE nombre="santy01";
select nombre, contraseña FROM usuario WHERE nombre="cristian02";
SELECT * FROM usuario WHERE id="3";
SELECT nombre, contraseña FROM usuario WHERE nombre="fernanda04";

SELECT * FROM auxiliar WHERE correo="danyloz@misena.edu.co";
SELECT nombre, correo FROM auxiliar WHERE id="4";
SELECT * FROM auxiliar WHERE telefono="3215644569";
SELECT nombre, telefono FROM auxiliar WHERE id="9";

SELECT * FROM coordinador WHERE correo="marta02@gmail.com";
SELECT nombre, correo FROM coordinador WHERE id="7";
SELECT * FROM coordinador WHERE telefono="3158658963";
SELECT nombre, telefono FROM coordinador WHERE id="10";

SELECT * FROM curso WHERE ubicacion="Salon tecnologia";
SELECT ubicacion, cantidad FROM curso WHERE id="1102";
SELECT * FROM curso WHERE profesor="Leonardo Salamanca";
SELECT ubicacion, cantidad FROM curso WHERE id="1002";

SELECT * FROM refrigerio WHERE id="6";
SELECT cantidad, descripcion FROM refrigerio WHERE id="3";
SELECT * FROM refrigerio WHERE id="5";
SELECT fecha, hora FROM refrigerio WHERE id="9";

SELECT * FROM refrigerio_curso WHERE id="15";
SELECT fecha_entrega, hora_entrega FROM refrigerio_curso WHERE id="4";
SELECT * FROM refrigerio_curso WHERE id_curso_fk="1102";
SELECT fecha_entrega, hora_entrega FROM refrigerio_curso WHERE id="10";

SELECT * FROM refrigerio WHERE hora BETWEEN '09:00:00' AND '09:30:00';

SELECT * FROM usuario WHERE nombre like '____';
SELECT * FROM auxiliar WHERE nombre like 'S%';
SELECT * FROM coordinador WHERE apellido like '%o';
SELECT * FROM curso WHERE ubicacion like '%1%';
SELECT * FROM refrigerio WHERE tipo like '%A%';
SELECT * FROM refrigerio_curso WHERE id_curso_fk like '6%';

SELECT c.id,c.profesor,c.jornada,r.descripcion,r.cantidad,r.tipo,r_c.fecha_entrega,r_c.hora_entrega FROM refrigerio AS r 
INNER JOIN refrigerio_curso AS r_c ON r.id= r_c.id_refrigerio_fk 
inner join curso as c on c.id = id_curso_fk;
SELECT * FROM usuario AS u LEFT JOIN auxiliar AS a ON u.id=a.id_usuario_fk;
SELECT * FROM coordinador AS c RIGHT JOIN refrigerio AS r ON c.id= r.id_coordinador_fk;

create view vista_usuario as select nombre, rol from usuario;
select * from vista_usuario;
create view vis_usu as select id, contraseña from usuario;
select * from vis_usu;

create view vista_auxiliar as select nombre, id_usuario_fk from auxiliar;
select * from vista_auxiliar;
create view vis_aux as select id, correo from auxiliar;
select * from vis_aux;

create view vista_coordinador as select nombre, id_usuario_fk from coordinador;
select * from vista_coordinador;
create view vis_coor as select id, correo from coordinador;
select * from vis_coor;

create view vista_curso as select id, ubicacion from curso;
select * from vista_curso;
create view vis_cur as select cantidad, profesor from curso;
select * from vis_cur;

create view vista_refrigerio as select id, tipo, cantidad from refrigerio;
select * from vista_refrigerio;
create view vis_refri as select id, fecha, hora from refrigerio;
select * from vis_refri;

create view vista_refricur as select id, id_refrigerio_fk, id_curso_fk from refrigerio_curso;
select * from vista_refricur;
create view vis_refricur as select id, fecha_entrega, hora_entrega from refrigerio_curso;
select * from vis_refricur;

#usuario
#BuscarTodos
DELIMITER $$
CREATE PROCEDURE sp_buscaTodoU ()
BEGIN
SELECT * FROM usuario;
END $$
CALL sp_buscaTodoU();

#Buscarid
DELIMITER $$
CREATE PROCEDURE sp_busporidU(IN idU int)
BEGIN
SELECT * FROM usuario WHERE id = idU;
END $$
CALL sp_busporidU(7);

#InSentar
DELIMITER $$
CREATE PROCEDURE sp_insertarusuario (
IN nombreU varchar (40),
IN rolU varchar (10), 	
IN estadoU varchar (11),
IN contrasenaU varchar (20))
BEGIN
INSERT into usuario (nombre,rol,estado,contraseña) VALUES ( nombreU, rolU, estadoU, contrasenaU);
END $$

CALL sp_insertarusuario (22,"Wilmer11","963","auxiliar","activo")
select * from usuario where id = 22;
#"Eliminar Estado"

DELIMITER $$ 
CREATE PROCEDURE sp_actualizarEstadoU(IN idU int,
IN  estadoU varchar(10))
BEGIN
if estadoU= "activo" then 
update usuario set estado= "inactivo" WHERE id = idU;
else update usuario set estado ="activo" where id=idU;
end if;
SELECT * FROM usuario;
END $$
CALL sp_actualizarEstadoU();
drop procedure sp_insertarusuario;
#Actualizar
DELIMITER $$
CREATE PROCEDURE sp_actualizarusuario (IN idU INt,
IN nombreU varchar (40),
IN contrasenaU varchar(20),
IN rolU varchar (11),
IN estadoU varchar (10))
BEGIN
UPDATE usuario SET nombre= nombreU, contraseña= contraseñaU, rol= rolU,estado= estadoU
WHERE id= idU;
END $$
CALL sp_actualizarusuario ('22', 'santy01', '659', 'auxiliar', 'activo');

#CRUD cordi
#BUscarTODOC
DELIMITER $$
CREATE PROCEDURE sp_buscaTodoC ()
BEGIN
SELECT * FROM coordinador;
END $$
CALL sp_buscaTodoC;

#BUscarIDC
DELIMITER $$
CREATE PROCEDURE sp_buscaridC(IN idC int)
BEGIN
SELECT * FROM auxiliar WHERE id = idC;
END $$
CALL sp_buscarid(6);

#InserC
DELIMITER $$
CREATE PROCEDURE sp_insertarC (
IN Cnombre varchar (40),
IN Capellido varchar (50),
IN Ctelefono varchar (10),
IN Ccorreo varchar (50),
IN Cestado varchar (10),
IN Cid_usuario_fk int (11))
BEGIN
INSERT into auxiliar (nombre, apellido, telefono, correo, estado, id_usuario_fk) VALUES (Cnombre, Capellido, Ctelefono, Ccorreo, Cestado, Cid_usuario_fk);
END $$ 
CALL sp_insertarC ("Paco","Cardozo","3116542042","paco@gmail.com","activo",24);

#"Eliminar EstadoC"
DELIMITER $$
CREATE PROCEDURE sp_actualizarEstadoC(IN idC int,
IN  estadoC  varchar(10))
BEGIN
update coordinador set estado = estadoA WHERE id = idC;
SELECT * FROM coordinador;
END $$
CALL sp_actualizarEstadoC('2','Inactivo' );

#ActualizarC
DELIMITER $$
CREATE PROCEDURE sp_actualizarC (IN idC INt,
IN nombreC varchar (40),
IN contrasenaC varchar(20),
IN rolC varchar (11),
IN estadoC varchar (10))
BEGIN
UPDATE coordinador SET nombre= nombreC, contraseña= contraseñaC, rol= rolC, estado= estadoC
WHERE id= idC;
END $$
CALL sp_actualizarC ('1', 'santy05', '657', 'auxiliar', 'activo');

#CRUD auxiliar
#BUscarTODOA
DELIMITER $$
CREATE PROCEDURE sp_buscaTodoA ()
BEGIN
SELECT * FROM auxiliar;
END $$
CALL sp_buscaTodoA;

#BUscarIDA
DELIMITER $$
CREATE PROCEDURE sp_buscaridA(IN idA int)
BEGIN
SELECT * FROM auxiliar WHERE id = idA;
END $$
CALL sp_buscaridA(4);

#InserA
DELIMITER $$
CREATE PROCEDURE sp_insertarauxiliar (
IN pnombre varchar (40),
IN papellido varchar (50),
IN ptelefono varchar (10),
IN pcorreo varchar (50),
IN pestado varchar (10),
IN pid_usuario_fk int (11))
BEGIN
INSERT into auxiliar (nombre, apellido, telefono, correo, estado, id_usuario_fk) VALUES (pnombre, papellido, ptelefono, pcorreo, pestado, pid_usuario_fk);
END $$ 
CALL sp_insertarauxiliar ("Wilmer","Cardozo","3116542032","will@gmail.com","activo",22);

#"Eliminar Estado"
DELIMITER $$
CREATE PROCEDURE sp_actualizarEstadoA(IN idA int,
IN  estadoA  varchar(10))
BEGIN
update auxiliar set estado = estadoA WHERE id = idA;
SELECT * FROM auxiliar;
END $$
CALL sp_actualizarEstadoA("1","Inactivo" );
#DROP PROCEDURE IF EXISTS sp_actualizarEstadoA

#Actualizar 
DELIMITER $$
CREATE PROCEDURE sp_actualizarauxiliar (IN idA INt,
IN nombreA varchar (40),
IN contrasenaA varchar(20))
begin
UPDATE auxiliar SET nombre= nombreA, contraseña= contrasenaA
WHERE id= idA;
END $$
CALL sp_actualizarauxiliar ('1', 'santy05', '657', 'auxiliar', 'activo');

drop procedure sp_actualizarauxiliar;

DELIMITER $$
CREATE PROCEDURE sp_actualizarauxiliar (IN idA INt,
IN nombreA varchar (40),
IN contrasenaA varchar(20))
begin
UPDATE usuarios SET nombre= nombreA, contraseña= contrasenaA
WHERE id= idA;
END $$

#CRUD Curso
#BUscarTODOA
DELIMITER $$
CREATE PROCEDURE sp_buscaTodoCur ()
BEGIN
SELECT * FROM curso;
END $$
CALL sp_buscaTodoCur;

#BUscarIDCur
DELIMITER $$
CREATE PROCEDURE sp_buscaridCr(IN idCr varchar(20))
BEGIN
SELECT * FROM curso WHERE id = idCr;
END $$
CALL sp_buscarid(601);

#InserCr
DELIMITER $$
CREATE PROCEDURE sp_insertarCr (IN idC varchar(20),
IN cantidadC int (11),
IN profesorC varchar (50),
IN estadoC varchar (10),
IN jornadaC varchar (20))
BEGIN
INSERT into curso (id, cantidad, profesor,estado,jornada) VALUES (idC, cantidadC, profesorC,estadoC,jornadaC);
END $$ 
CALL sp_insertarCr ("12001","36","MIguel","Sociales_1","Tarde","activo");
drop procedure sp_insertarCr;
#"Eliminar Estado"
DELIMITER $$ 
CREATE PROCEDURE sp_actualizarEstadoC(IN idC varchar(20),
IN  estadoC varchar(10))
BEGIN
if estadoc= "activo" then 
update curso set estado= "inactivo" WHERE id = idC;
else update curso set estado ="activo" where id=idC;
end if;
SELECT * FROM usuario;
END $$
CALL sp_actualizarEstadoU();

#Actualizar 
DELIMITER $$
CREATE PROCEDURE sp_actualizarCr (IN idCr varchar(20),
IN cantidadC int (11),
IN profesorC varchar (50),
IN estadoC varchar (10),
IN jornadaC varchar (20))
BEGIN
UPDATE curso SET cantidad = cantidadC,profesor = profesorC, jornada = jornadaC, estado = estadoC
WHERE id= idCR;
END $$


#CRUD Refrigerio
#BUscarTODOR
DELIMITER $$
CREATE PROCEDURE sp_buscaTodoR ()
BEGIN
SELECT * FROM refrigerio;
END $$
CALL sp_buscaTodoR;

drop procedure sp_buscaTodoR

#BUscarIDR
DELIMITER $$
CREATE PROCEDURE sp_buscaridR(IN idR int)
BEGIN
SELECT * FROM refrigerio WHERE id = idR;
END $$
CALL sp_buscaridR(5);

#InserR
DELIMITER $$
CREATE PROCEDURE sp_insertarR (
IN fechaR date,
IN horaR time,
IN tipoR varchar (10),
IN descripcionR varchar (200),
IN cantidadR int (11),
IN estadoR varchar (10),
IN id_auxiliar_fkR int (11),
iN id_coordinador_fkR int (11))
BEGIN
INSERT into refrigerio (fecha, hora, tipo, cantidad, descripcion, estado,id_coordinador_fk,id_auxiliar_fk ) VALUES (fechaR, horaR, tipoR, cantidadR, descripcionR, estadoR,id_coordinador_fkR,id_auxiliar_fkR);
END $$
CALL sp_insertarR ("2022-09-09","09:00:00","D",380,"leche,mantecada,manzana","activo",4,1);
drop procedure sp_actualizarEstadoR;

#"Eliminar Estado"
DELIMITER $$ 
CREATE PROCEDURE sp_actualizarEstadoR(IN idR int,
IN  estadoR varchar(10))
BEGIN
if estadoR= "activo" then 
update refrigerio set estado= "inactivo" WHERE id = idR;
else update refrigerio set estado ="activo" where id=idR;
end if;
SELECT * FROM usuario;
END $$
CALL sp_actualizarEstadoU();


drop procedure sp_actualizarR;
#ActualizarR
DELIMITER $$
CREATE PROCEDURE sp_actualizarR (IN idR INt,
IN fechaR date,
IN horaR time,
IN tipoR varchar (10),
IN descripcionR varchar (200),
IN cantidadR int,
IN estadoR varchar (10),
IN id_auxiliar_fkR int (11),
iN id_coordinador_fkR int (11))
BEGIN
UPDATE refrigerio SET fecha = fechaR, hora = horaR, tipo = tipoR, cantidad = cantidadR, descripcion = descripcionR, estado = estadoR,id_coordinador_fk = id_coordinador_fkR,id_auxiliar_fk = id_auxiliar_fkR
WHERE id= idR;
END $$
CALL sp_actualizarR (11, '2022-09-08', '09:00:01', 'A', 397,"leche mani, ponque pera","activo",2,3);


#CRUD refri_cur
#BUscarTODOR_C
DELIMITER $$
CREATE PROCEDURE sp_buscaTodoR_C ()
BEGIN
SELECT * FROM refrigerio_curso;
END $$
CALL sp_buscaTodoR_C;

#BUscarIDR_C
DELIMITER $$
CREATE PROCEDURE sp_buscaridR_C(IN idR_C int)
BEGIN
SELECT * FROM refrigerio_curso WHERE id = idR_C;
END $$
CALL sp_buscaridR_C(5);

#InserR_C
DELIMITER $$
CREATE PROCEDURE sp_insertarR_C (
IN fecha_entregaR_C date,
IN hora_entregaR_C time,
IN id_refrigerio_fkR_C int (11),
IN id_curso_fkR_C int(11))
BEGIN
INSERT into refrigerio_curso (fecha_entrega, hora_entrega,id_refrigerio_fk,id_curso_fk ) VALUES (fecha_entregaR_C, hora_entregaR_C,id_refrigerio_fkR_C,id_curso_fkR_C);
END $$ 
CALL sp_insertarR_C ("2022-09-13","11:01:00","1","1002");

#"Eliminar entrega"
DELIMITER $$
CREATE PROCEDURE sp_eliminarR_C(IN idR_C int (11))
begin
delete from refrigerio_curso WHERE id = idR_C;
SELECT * FROM refrigerio_curso;
END $$
CALL sp_eliminarR_C(11);
drop procedure sp_eliminarR_C;
#ActualizarR_C
DELIMITER $$
CREATE PROCEDURE sp_actualizarR_C (IN idR_C INt,
IN fecha_entregaR_C date,
IN hora_entregaR_C time,
IN id_refrigerio_fkR_C int (11),
IN id_curso_fkR_C int(11))
BEGIN
UPDATE refrigerio_curso SET fecha_entrega = fecha_entregaR_C,hora_entrega = hora_entregaR_C,id_refrigerio_fk = id_refrigerio_fkR_C,id_curso_fk = id_curso_fkR_C
WHERE id= idR_C;
END $$ delimiter ;
CALL sp_actualizarR_C  ("10","2022-09-12","11:00:00","2","1002");

#Disparador

Create TABLE clavesanteriores (id_usuario int, claveanterior varchar(20));

UPDATE usuario SET contraseña = "123" WHERE id = 1;
delimiter $$ 
create trigger guardar_clave_anterior before update on usuario for each
row BEGIN
insert into clavesanteriores values (old.id, old.contraseña);
END$$
delimiter ;
UPDATE usuario SET contraseña = "claveCliente123" WHERE id = 2;

drop database refrigerios;