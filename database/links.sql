-- Purpose: Create the links table in the database if it doesn't exist. This table will store the short code, the URL, and the date the link was created.
-- DATABASE: Postgres
-- TABLE: links
-- COLUMNS: id, short_code, url, created_at (timestamp). 
-- id: Primary key, auto-incrementing integer.
-- short_code: The short code for the URL. This will be a random string of 6 characters.
-- url: The URL that the short code will redirect to.
-- created_at: The date the link was created.
CREATE TABLE links (
  id SERIAL PRIMARY KEY,
  short_code VARCHAR(6) NOT NULL,
  url TEXT NOT NULL,
  created_at TIMESTAMP WITHOUT TIME ZONE NOT NULL
);