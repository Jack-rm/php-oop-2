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

        protected function __construct($id, $name, $surname, $email, $address){
            
            $this->id = $id;
            $this->name = $name;
            $this->surname = $surname;
            $this->email = $email;
            $this->address = $address;
            
        }

    };

    class Product {

        protected $id;
        protected $name;
        protected $thumb;
        protected $description;
        protected $price;
        // protected $seller;        ? sono una classe diversa?
        // protected $manufacturer;  ? Shop ?
        protected $brand;

        protected function __construct($id, $name, $thumb, $description, $price, $brand){

            $this->id = $id;
            $this->name = $name;
            $this->thumb = $thumb;
            $this->description = $description;
            $this->price = $price;
            $this->brand = $brand;
        }
    };

?>