-- Table: cendawan

-- DROP TABLE cendawan;

CREATE TABLE cendawan
(
  id_cendawan integer,
  no_cendawan integer,
  kode_cendawan character varying(20),
  nama_cendawan character varying(50),
  substrat_cendawan character varying(100),
  deskripsi_cendawan character varying(200),
  manfaat_cendawan character varying(200)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE cendawan
  OWNER TO postgres;
