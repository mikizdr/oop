
<?php
    // create a Person object - class
    class Person{
        private $name;
        private $email;

        // create a constructor
        public function __construct($name, $email){
            $this->name = $name;
            $this->email = $email;
            echo '<h6>'.__CLASS__.'</h6> created';
        }

        // destroy class
        public function __destruct(){
            echo __CLASS__.' destroyed';
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
        public function setEmail($name) {
            $this->email = $name;
        }
        
        // getters for email variable
        public function getEmail(){
            return $this->email;
        }
    }

    // instantiate class Person and make a new object person1
    $person1 = new Person('Леа Здравковић', 'lea.zdravkovic@gmail.com');
    
    //$person1->setName('Леа Здравковић');

    //$person1->setEmail('lea.zdravkovic@gmail.com');

    //$person1->name = 'Леа Здравковић';

    


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
                <div class="title m-b-md">
                    Hello <?php echo $person1->getName(); ?>!
                    <h6>Your email address is: <strong><?php echo $person1->getEmail(); ?></strong></h6>
                </div>
            </div>
        </div>
    
</body>
</html>