DROP SCHEMA IF EXISTS public CASCADE;

CREATE SCHEMA public AUTHORIZATION postgres;

-- Table Definition teams
DROP TABLE IF EXISTS public.teams;
-- This script only contains the table creation statements and does not fully represent the table in the database. It's still missing: indices, triggers. Do not use it as a backup.

-- Sequence and defined type
CREATE SEQUENCE IF NOT EXISTS teams_id_seq;

-- Table Definition
CREATE TABLE public.teams (
    "id" int4 NOT NULL DEFAULT nextval('teams_id_seq'::regclass),
    "name" varchar NOT NULL,
   
    PRIMARY KEY ("id")
);


DROP TABLE IF EXISTS public.players;
-- This script only contains the table creation statements and does not fully represent the table in the database. It's still missing: indices, triggers. Do not use it as a backup.

-- Sequence and defined type
CREATE SEQUENCE IF NOT EXISTS players_id_seq;

-- Table Definition
CREATE TABLE public.players (
    "id" int4 NOT NULL DEFAULT nextval('players_id_seq'::regclass),
    "name" varchar NOT NULL,
    "age" int NOT NULL,
	"team" int4 NULL,
    "created_at" timestamp DEFAULT now(),
    PRIMARY KEY ("id"),
	CONSTRAINT fk_team FOREIGN KEY(team) REFERENCES teams(id) ON DELETE SET NULL
	
);

