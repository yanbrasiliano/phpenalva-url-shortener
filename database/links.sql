-- public.links definition
-- Drop table
-- DROP TABLE public.links;
CREATE TABLE public.links (
  id serial4 NOT NULL,
  short_url text NOT NULL,
  url text NOT NULL,
  created_at timestamp NOT NULL,
  CONSTRAINT links_pkey PRIMARY KEY (id)
);