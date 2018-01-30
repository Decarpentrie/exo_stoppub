<?php 

	//instantiate the class
	class Publicitaire{
		private $_idPublicitaire;
		private $_nomPublicitaire;
		private $_typePublicite;
		private $_produit;
		private $_mailEnvoi;
		private $_adresseEnvoi;
		private $_numeroPublicitaire;
		private $_dateReception;



		//hydration
		public function hydrate(array $donnee){
  			if (isset($donnee['idPublicitaire'])){
    			$this->setIdPublicitaire($donnee['idPublicitaire']);
  			}
  			if (isset($donnee['nomPublicitaire'])){
    			$this->setNomPublicitaire($donnee['nomPublicitaire']);
  			}
			if (isset($donnee['typePublicite'])){
    			$this->setTypePublicite($donnee['typePublicite']);
  			}
  			if (isset($donnee['produit'])){
    			$this->setProduit($donnee['produit']);
  			}
  			if (isset($donnee['mailEnvoi'])){
    			$this->setMailEnvoi($donnee['mailEnvoi']);
  			}  
  			if (isset($donnee['adresseEnvoi'])){
    			$this->setAdresseEnvoi($donnee['adresseEnvoi']);
  			}
  			if (isset($donnee['numeroPublicitaire'])){
    			$this->setNumeroPublicitaire($donnee['numeroPublicitaire']);
  			}
  			if (isset($donnee['dateReception'])){
    			$this->setDateReception($donnee['dateReception']);
  			}
		}






		//getter
		public function idPublicitaire(){
			return $this->_idPublicitaire;
		}
		public function nomPublicitaire(){
			return $this->_nomPublicitaire;
		}
		public function typePublicite(){
			return $this->_typePublicite;
		}
		public function produit(){
			return $this->_produit;
		}
		public function mailEnvoi(){
			return $this->_mailEnvoi;
		}
		public function adresseEnvoi(){
			return $this->_adresseEnvoi;
		}
		public function numeroPublicitaire(){
			return $this->_numeroPublicitaire;
		}
		public function dateReception(){
			return $this->_dateReception;
		}

		//setter
		public function setIdPublicitaire($idPublicitaire){
			$idPublicitaire = (int) $idPublicitaire;
    		if ($id > 0){
      			$this->_idPublicitaire = $idPublicitaire;
    		}
		}
		public function setNomPublicitaire($nomPublicitaire){
			if (is_string($nomPublicitaire)){
     			$this->_nomPublicitaire = $nomPublicitaire;
    		}
		}
		public function setTypePublicite($typePublicite){
			if (is_string($typePublicite)){
     			$this->_typePublicite = $typePublicite;
    		}
		}
		public function setProduit($produit){
			if (is_string($produit)){
     			$this->_produit = $produit;
    		}
		}
		public function setMailEnvoi($mailEnvoi){
			if (is_string($mailEnvoi)){
     			$this->_mailEnvoi = $mailEnvoi;
    		}
		}
		public function setAdresseEnvoi($adresseEnvoi){
			if (is_string($adresselEnvoi)){
     			$this->_adresseEnvoi = $adresseEnvoi;
    		}
		}
		public function setNumeroPublicitaire($numeroPublicitaire){
			if (is_string($numeroPublicitaire)){
     			$this->_numeroPublicitaire = $numeroPublicitaire;
    		}
		}
		public function setDateReception($dateReception){
			if (is_string($dateReception)){
     			$this->_dateReception = $dateReception;
    		}
		}
	}
	
	$publicite = $db->query('SELECT nomPublicitaire, typePublicite, produit, mailEnvoi, adresseEnvoi, numeroPublicitaire, dateReception FROM publicite');

	//Each entry will be retrieved and placed in an array
	while ($donnee=$publicite->fetch(PDO::FETCH_ASSOC)){
		$pub= new Publicitaire ($donnee);
		echo $pub->nomPublicitaire();
	}

 ?>