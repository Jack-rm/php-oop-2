<!-- 
    Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online;
ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
Strutturare le classi gestendo l'ereditarietà dove necessario;
ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
Provate a far interagire tra di loro gli oggetti: ad esempio, l'utente dello shop inserisce una carta di credito...
 $c = new CreditCard(..); 
$user->insertCreditCard($c);

-->

<?php 

    class Customer {

        protected $id;
        protected $name;
        protected $surname;
        protected $email;
        protected $address;

        use PremiumUser;

       public function __construct($id, $name, $surname, $email, $address, $discount, $subDate, $expirationDate){
            
            $this->id = $id;
            $this->name = $name;
            $this->surname = $surname;
            $this->email = $email;
            $this->address = $address;

            $this->discount = $discount;
            $this->subDate = getPremium();
            $this->expirationDate = getExpirationDate();
        }

        protected function getId(){
            return $this->id;
        }

        protected function getAddress(){
            return $this->address;
        }

    };

    trait PremiumUser {

        protected $discount;
        
        protected $subDate;
        protected $expirationDate;

        protected function getPremium(){
            
            $today = date("Y/m/d");
            return $this->subDate = $today;
        }

        public function getExpirationDate(){
            return $this->expirationDate = date('Y-m-d', strtotime("+1 months", strtotime($this->subDate)));;
        }

        /*
        public function noDeliveryCost(){

            $today = date("Y/m/d");
            if ($subExpritationDate != $today ){

            }
        }

        Mi serve l'informazione deliveryCost da prodotto (o da Shop in caso) ..

        */
    };
    
    /*

    Messing around with today date to build up "Premium" functions

    function getToday(){
        $today = date("Y/m/d");

        if ($today = date("Y/m/d")){
            return "true";
        } return "false";
    }

    echo getToday();

    $today = date("Y/m/d");
    $expirationDate = date('Y-m-d', strtotime("+1 months", strtotime($today)));

    echo $expirationDate;
    */
     
    class Product {

        protected $id;
        protected $name;
        protected $thumb;
        protected $description;
        protected $price;
        // protected $seller;        ? sono una classe diversa?
        // protected $manufacturer;  ? Shop ?
        protected $brand;
        protected $deliveryCost;

        protected function __construct($id, $name, $thumb, $description, $price, $brand){

            $this->id = $id;
            $this->name = $name;
            $this->thumb = $thumb;
            $this->description = $description;
            $this->price = $price;
            $this->brand = $brand;
        }
    };

    class SSD extends Product {

        protected $capacity;
        protected $speed;

        public function __construct($capacity, $speed, $id, $name, $thumb, $description, $price, $brand ){

            $this->capacity = $capacity;
            $this->speed = $speed;
            parent::__construct($id, $name, $thumb, $description, $price, $brand);
        }
    
        protected function getCapacity(){
            $this->capacity . " GB";
        }

        protected function getSpeed(){
            $this->speed . " MB/s";
        }
    };


?>