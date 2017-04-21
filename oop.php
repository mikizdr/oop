
<?php
    // create a Person object - class
    class Person{
        private $name;
        private $email;
        private static $ageLimit = 50;

        // create a constructor
        public function __construct($name, $email){
            $this->name = $name;
            $this->email = $email;
            echo __CLASS__.' created<br>';
        }

        // destroy class
        public function __destruct(){
            echo __CLASS__.' destroyed<br>';
        }

        // setters for name variable
        public function setName($name) {
            $this->name = $name;
        }
        
        // getters for name variable
        public function getName(){
            return $this->name;
        }

        // setters for email variable
        public function setEmail($email) {
            $this->email = $email;
        }
        
        // getters for email variable
        public function getEmail(){
            return $this->email;
        }

        public static function getAgeLimit(){
            return self::$ageLimit;
        }
    }

    // instantiate class Person and make a new object person1
    // $person1 = new Person('Леа Здравковић', 'lea.zdravkovic@gmail.com');
    //$person1->setName('Леа Здравковић');
    //$person1->setEmail('lea.zdravkovic@gmail.com');
    //$person1->name = 'Леа Здравковић';

    // create class that inherites methods and properties from the parent class
    class Customer extends Person {
        private $balance;

        public function __construct($name, $email, $balance){
            parent::__construct($name, $email, $balance);
            $this->balance = $balance;
            echo 'A new'.__CLASS__.' has been created';
        }

        public function __destruct(){
            echo 'The class'.__CLASS__.' has been destroyed.';
        }

        // setters for balance variable
        public function setBalance($balance) {
            $this->balance = $balance;
        }
        
        // getters for balance variable
        public function getBalance(){
            return $this->balance;
        }

    }

    $customer1 = new Customer('Miroslav Zdravkovic', 'mikizdr@yahoo.com', 600000);
    $customer2 = new Customer('Lea Zdravkovic', 'lea.zdravkovic@yahoo.com', 10000000);

    


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OOP</title>

    <style>
        body{
            background: black;
            color: white;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }        
        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>

</head>
<body>

    <div class="flex-center position-ref full-height">
            
            <div class="content">

                <h1><?php 
                        // static properties and maethods
                        echo Person::getAgeLimit(); 
                    ?></h1>              
                <div class="title m-b-md">
                    Hello <?php echo $customer2->getName(); ?>!
                    <h6>Your email address is: <strong><?php echo $customer2->getEmail(); ?></strong></h6>
                    <h6>You have: $<strong><?php echo number_format($customer2->getBalance(), 2, ',', '.'); ?> on your account.</strong></h6>
                </div>
            </div>
        </div>
    
</body>
</html>