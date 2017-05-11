drop table if exists categorias cascade;
create table categorias (
    id bigserial constraint pk_categorias primary key,
    nombre_categoria varchar(20) not null
);

drop table if exists alertas cascade;
create table alertas (
    id bigserial constraint pk_alertas primary key,
    categoria_id bigint constraint fk_categoria_alerta references categorias (id)
                on delete no action on update cascade,
    usuario_id bigint constraint fk_usuario_alerta references public.user(id) on
                delete no action on update cascade
);

drop table if exists publicaciones cascade;
create table publicaciones(
    id bigserial constraint pk_publicaciones primary key,
    cuerpo text not null,
    url varchar(350),
    titulo varchar(50) not null,
    categoria_id bigint constraint fk_categoria_publicacion references categorias (id)
                on delete no action on update cascade,
    usuario_id bigint constraint fk_usuario_publicacion references public.user(id) on
                delete set null on update cascade

);

drop table if exists reportes cascade;
create table reportes(
    id bigserial constraint pk_reportes primary key,
    reportador_id bigint constraint fk_usuario_reportador references public.user(id) on
                delete set null on update cascade,
    reportado_id bigint constraint fk_usuario_reportado references public.user(id) on
                delete set null on update cascade,
    publicacion_id bigint constraint fk_publicacion_reportes references publicaciones(id) on
                delete no action on update cascade,
    cuerpo text not null
);

drop table if exists localizacion_publicaciones cascade;
create table localizacion_publicaciones(
    id bigserial constraint pk_localizacion_publicaciones primary key,
    publicacion_id bigint constraint fk_publicacion_localizacion_publicaciones references
                    publicaciones(id) on delete no action on update cascade,
    lat real not null,
    long real not null
);


insert into categorias (nombre_categoria) values ('ADOPCIÓN'),
                                                    ('ACOGIDA'),
                                                        ('APADRINAMIENTO');
