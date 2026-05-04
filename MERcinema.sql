create database ticketcinema;

use ticketcinema;

create table atendente(
	codigo int not null primary key auto_increment,
    nome varchar(150) not null,
    CPF bigint(17) not null,
    turno varchar(7) not null,
    usuario varchar(100) not null,
    senha varchar(45) not null
)engine = InnoDB;

create table filme(
	codigo int not null primary key auto_increment,
    titulo varchar(250) not null,
    genero varchar(250) not null,
    sala int not null,
    horario datetime not null
)engine = InnoDB;

create table cliente(
	codigo int not null primary key auto_increment,
    nome varchar(150) not null,
    dtNascimento date not null,
    email varchar(150) not null
)engine = InnoDB;

create table compras(
	codigo int not null primary key auto_increment,
    diaEscolhido datetime not null,
    qtndIngresso int not null,
    valorTotal decimal(6,2) not null
)engine = InnoDB;

create table cartao(
	codigo int not null primary key auto_increment,
    totalPontos real not null,
    totalPromocoes real not null, 
    codigoCliente int not null
)engine = InnoDB;

create table ingresso(
	codigo int not null primary key auto_increment,
    assento varchar(4) not null,
    valor decimal(4,2) not null,
    codigoFilme int not null,
    codigoCliente int not null,
    codigoAtendente int not null
)engine = InnoDB;

create table efetuar(
	codigo int not null primary key auto_increment,
    codigoCompras int not null,
    codigoIngresso int not null
)engine = InnoDB;

alter table cartao add constraint cartaoCliente
foreign key(codigoCliente) references cliente(codigo);

alter table ingresso add constraint ingressoFilme
foreign key(codigoFilme) references filme(codigo);

alter table ingresso add constraint ingressoCliente
foreign key(codigoCliente) references cliente(codigo);

alter table ingresso add constraint ingressoAtendente
foreign key(codigoAtendente) references atendente(codigo);

alter table efetuar add constraint efetuarCompras
foreign key(codigoCompras) references compras(codigo);

alter table efetuar add constraint efetuarIngresso
foreign key(codigoIngresso) references ingresso(codigo);