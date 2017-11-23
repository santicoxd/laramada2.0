CREATE TABLE IF NOT EXISTS public.users (
  id SERIAL PRIMARY KEY,
  email VARCHAR(100) NOT NULL,
  password VARCHAR(100) NOT NULL,
  name VARCHAR(100) NOT NULL,
  role VARCHAR(50) NOT NULL,
  created_at TIMESTAMP NULL DEFAULT NULL,
  updated_at TIMESTAMP NULL DEFAULT NULL,
  remember_token VARCHAR(60) NULL DEFAULT NULL
  );

﻿CREATE TABLE IF NOT EXISTS public.types (
  id SERIAL PRIMARY KEY,
  name VARCHAR(45) NOT NULL UNIQUE,
  description VARCHAR(200) DEFAULT NULL
  );

CREATE TABLE public.pollutants
(
  id SERIAL PRIMARY KEY,
  name character varying(45) NOT NULL UNIQUE,
  description text DEFAULT NULL::character varying,
  type_id integer NOT NULL,
  FOREIGN KEY (type_id) REFERENCES types(id)

  );
  
CREATE TABLE public.year_maps
(
  id SERIAL PRIMARY KEY,
  year integer NOT NULL,
  iframe character varying(1000) NOT NULL,
  description character varying(200) DEFAULT NULL::character varying,
  pollutant_id integer NOT NULL,
  FOREIGN KEY (pollutant_id) REFERENCES pollutants(id)
);

CREATE TABLE public.page_infos
(
  id SERIAL PRIMARY KEY,
  page_name VARCHAR(45) NOT NULL,
  page_title VARCHAR(100),
  page_subtitle VARCHAR(100),
  page_content text DEFAULT NULL::character varying,
  tab_name  VARCHAR(100),
  title1 VARCHAR(100) DEFAULT NULL::character varying,
  title2 VARCHAR(100) DEFAULT NULL::character varying,
  title3 VARCHAR(100) DEFAULT NULL::character varying,
  title4 VARCHAR(100) DEFAULT NULL::character varying,
  title5 VARCHAR(100) DEFAULT NULL::character varying
)

INSERT INTO page_infos (page_name , page_title, page_subtitle)
    VALUES ('home','La Ramada', 'Aplicación informativa');

update users set role = 'root' where email = 'emilbert05@hotmail.com' 
delete from users where email = 'u@u.u'; 