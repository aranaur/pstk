<?php
class Inimene {
	public function setEesnimi($eesnimi){
		$this-> eesnimi=$eesnimi;
		
	}
	public function setPerenimi ($perenimi){
		$this-> perenimi=($perenimi);
	}
	public function setS�nniaeg ($s�nniaeg){
		$this-> s�nniaeg=($s�nniaeg);
	}
	public function setS�nnikoht ($s�nnikoht){
		$this-> s�nniaeg=($s�nnikoht);
	}
	public function setidInimene ($setidInimene){
		$this-> idInimene=($setidInimene);
		
		
	}
	
	public function getEesnimi(){
	return $this-> $eesnimi;
	
	}
	public function getPerenimi (){
		return $this-> perenimi;
	}
	public function getS�nniaeg (){
		return $this-> s�nniaeg;
	}
	public function getS�nnikoht (){
		return $this-> s�nnikoht;
	}
	public function getidInimene (){
		return $this-> idInimene;
	}
	public static  function getAll ()
	{
		$inimene=new Inimene;
		$inimene-> setEesnimi('Ants');
		$inimene-> setPerenimi('Kivisaar');
		$inimene-> setS�nniaeg('02.12.1982');
		$inimene-> setS�nnikoht('Antsla');
		$inimene-> setidInimene('1');
		
		$inimene2=new Inimene;
		$inimene2-> setEesnimi('Anu');
		$inimene2-> setPerenimi('Kiivikas');
		$inimene2-> setS�nniaeg('08.02.1987');
		$inimene2-> setS�nnikoht('Narva');
		$inimene2-> setidInimene('2');
		
		$inimene3=new Inimene;
		$inimene3-> setEesnimi('�lle');
		$inimene3-> setPerenimi('Suurjalg');
		$inimene3-> setS�nniaeg('09.09.1976');
		$inimene3-> setS�nnikoht('Antsla');
		$inimene3-> setidInimene('3');
		return array (
				1=> $inimene,
				2=> $inimene2,
				3=> $inimene3
				
		);
	}
	private  $eesnimi;
	private  $perenimi;
	private  $s�nniaeg;
	private  $s�nnikoht;
	private  $idInimene;
}

