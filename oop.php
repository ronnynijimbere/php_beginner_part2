
<?php
//create a class
    class Person{
        private $name;
        private $email;
        //public static $ageLimit = 130;
        private static $ageLimit = 130;

        public function __construct($name, $email)
        {
            $this->name = $name;
            $this->email = $email;
            echo __CLASS__.' created <br>';
        }

        //deconstruct    
        public function __destruct()
        {
            echo __CLASS__.' destroyed <br>';
        }
        

        //create methods: getters and setters
        public function setName($name){
            $this->name = $name;
        }

        public function getName(){
            return $this->name . '<br>';
        }

        public function setEmail($email){
            $this->email = $email;
        }

        public function getEmail(){
            return $this->email .'<br>';
        }

        public static function getAgeLimit() {
            return self::$ageLimit;
        }
    }


    //public (static props & method)
    echo Person::$ageLimit;
    //private (static props & method)
    echo Person::getAgeLimit();

    //$person1 = new Person('Ronny Nijimbere', 'ron@gmail.com');
    //$person1->setName('Ronny Nijimbere');
   // echo $person1->getName();

    //$person1->name = 'Ronny Nijimbere';
    //echo $person1->name;


    class Customer extends Person{
        private $balance;

        public function __construct($name, $email, $balance)
        {
          
            parent::__construct($name, $email, $balance);
            $this->balance = $balance;
            echo 'A new ' . __CLASS__ . ' has been created <br>';
        }

        public function setBalance($balance){
            $this->balance = $balance;
        }

        public function getBalance(){
            return $this->balance .'<br>';
        }
    }

    //$customer1 = new Customer('Mike Smith', 'mike@gmail.com', 400);

    //echo $customer1->getBalance();
?>