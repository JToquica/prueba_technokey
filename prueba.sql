PGDMP                         {            prueba    15.3    15.3                0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false                       0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false                       0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false                       1262    16412    prueba    DATABASE     |   CREATE DATABASE prueba WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE_PROVIDER = libc LOCALE = 'Spanish_Colombia.1252';
    DROP DATABASE prueba;
                postgres    false            �            1259    16414    usuarios    TABLE     �   CREATE TABLE public.usuarios (
    id bigint NOT NULL,
    name character varying(25) NOT NULL,
    username character varying(50) NOT NULL,
    password character varying(50) NOT NULL
);
    DROP TABLE public.usuarios;
       public         heap    postgres    false            �            1259    16413    usuarios_id_seq    SEQUENCE     x   CREATE SEQUENCE public.usuarios_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.usuarios_id_seq;
       public          postgres    false    215                       0    0    usuarios_id_seq    SEQUENCE OWNED BY     C   ALTER SEQUENCE public.usuarios_id_seq OWNED BY public.usuarios.id;
          public          postgres    false    214            �            1259    16421    vuelos    TABLE     3  CREATE TABLE public.vuelos (
    id bigint NOT NULL,
    fecha_vuelo date NOT NULL,
    hora_salida time without time zone NOT NULL,
    hora_llegada time without time zone NOT NULL,
    tipo_trayecto character varying(50) NOT NULL,
    costo bigint NOT NULL,
    duracion_trayecto character varying(50)
);
    DROP TABLE public.vuelos;
       public         heap    postgres    false            �            1259    16420    vuelos_id_seq    SEQUENCE     v   CREATE SEQUENCE public.vuelos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 $   DROP SEQUENCE public.vuelos_id_seq;
       public          postgres    false    217            	           0    0    vuelos_id_seq    SEQUENCE OWNED BY     ?   ALTER SEQUENCE public.vuelos_id_seq OWNED BY public.vuelos.id;
          public          postgres    false    216            j           2604    16417    usuarios id    DEFAULT     j   ALTER TABLE ONLY public.usuarios ALTER COLUMN id SET DEFAULT nextval('public.usuarios_id_seq'::regclass);
 :   ALTER TABLE public.usuarios ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    215    214    215            k           2604    16424 	   vuelos id    DEFAULT     f   ALTER TABLE ONLY public.vuelos ALTER COLUMN id SET DEFAULT nextval('public.vuelos_id_seq'::regclass);
 8   ALTER TABLE public.vuelos ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    216    217    217            �          0    16414    usuarios 
   TABLE DATA           @   COPY public.usuarios (id, name, username, password) FROM stdin;
    public          postgres    false    215   �                 0    16421    vuelos 
   TABLE DATA           u   COPY public.vuelos (id, fecha_vuelo, hora_salida, hora_llegada, tipo_trayecto, costo, duracion_trayecto) FROM stdin;
    public          postgres    false    217   �       
           0    0    usuarios_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.usuarios_id_seq', 1, true);
          public          postgres    false    214                       0    0    vuelos_id_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('public.vuelos_id_seq', 2, true);
          public          postgres    false    216            m           2606    16419    usuarios usuarios_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.usuarios
    ADD CONSTRAINT usuarios_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.usuarios DROP CONSTRAINT usuarios_pkey;
       public            postgres    false    215            o           2606    16426    vuelos vuelos_pkey 
   CONSTRAINT     P   ALTER TABLE ONLY public.vuelos
    ADD CONSTRAINT vuelos_pkey PRIMARY KEY (id);
 <   ALTER TABLE ONLY public.vuelos DROP CONSTRAINT vuelos_pkey;
       public            postgres    false    217            �   $   x�3���/N��
�/,�LN�442615����� r�         ?   x�3�4202�50�54�44�2��20�44�261R2�R�K�9�@������(����� z!     