CREATE TABLE tx_recipesntel_domain_model_recipe (
	name varchar(255) NOT NULL DEFAULT '',
	difficulty double(11,2) NOT NULL DEFAULT '0.00',
	prepare_time double(11,2) NOT NULL DEFAULT '0.00',
	cooking_time double(11,2) NOT NULL DEFAULT '0.00',
	dish_type int(11) DEFAULT '0' NOT NULL,
	description text,
	nb_person int(11) NOT NULL DEFAULT '0',
	pictures int(11) unsigned NOT NULL DEFAULT '0',
	avg_score double(11,2) NOT NULL DEFAULT '0.00',
	ingredients int(11) unsigned NOT NULL DEFAULT '0',
	themes int(11) unsigned NOT NULL DEFAULT '0',
	ustensils int(11) unsigned NOT NULL DEFAULT '0',
	origin int(11) unsigned NOT NULL DEFAULT '0',
	reviews int(11) unsigned NOT NULL DEFAULT '0'
);

CREATE TABLE tx_recipesntel_domain_model_ingredient (
	name varchar(255) NOT NULL DEFAULT ''
);

CREATE TABLE tx_recipesntel_domain_model_ustensil (
	name varchar(255) NOT NULL DEFAULT ''
);

CREATE TABLE tx_recipesntel_domain_model_theme (
	name varchar(255) NOT NULL DEFAULT ''
);

CREATE TABLE tx_recipesntel_domain_model_origin (
	recipe int(11) unsigned DEFAULT '0' NOT NULL,
	name varchar(255) NOT NULL DEFAULT ''
);

CREATE TABLE tx_recipesntel_domain_model_ingredientinrecipe (
	recipe int(11) unsigned DEFAULT '0' NOT NULL,
	quantity text NOT NULL DEFAULT '',
	ingredient int(11) unsigned DEFAULT '0'
);

CREATE TABLE tx_recipesntel_domain_model_review (
	recipe int(11) unsigned DEFAULT '0' NOT NULL,
	title varchar(255) NOT NULL DEFAULT '',
	content text NOT NULL DEFAULT '',
	score int(11) NOT NULL DEFAULT '0',
	author varchar(255) NOT NULL DEFAULT '',
	date date DEFAULT NULL
);
