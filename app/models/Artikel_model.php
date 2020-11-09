<?php

class Artikel_model {

	private $table = 'news_article';
	private $db;

	public function __construct()
	{
		$this->db = new database;
	}
	public function getArtikel()
	{
		$this->db->query('SELECT * FROM ' . $this->table);
		return $this->db->resultSet();
	}

	public function getArtikelById($id)
	{
		$this->db->query('SELECT * FROM ' . $this->table . 'WHERE id=:id');

		$this->db->bind('id', $id);
		return $this->db->single();
	}
}