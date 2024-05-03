CREATE DATABASE IF NOT EXISTS banco_sync360;
USE banco_sync360;
CREATE TABLE usuario(
    id_usuario int not null AUTO_INCREMENT,
    nome_usuario varchar(40) not null,
    idade_usuario smallint not null,
    estado_usuario varchar(50) not null,
    cidade_usuario varchar(80) not null,
    bairro_usuario varchar(80) not null,
    endereco_usuario varchar(80) not null,
    biografia_usuario varchar(300) not null,
    data_atualizacao datetime not null,
    PRIMARY KEY (id_usuario)
);