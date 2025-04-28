<?php

class Node{
    private $val;
    private $next;
    private $back;
    static $head;
    static $tail;
    static $count;
    
    public function __construct($val){
        $this->val = $val;
        $this->next = null;
        $this->back = null;
        if(self::$head == null){
            self::$head = $this;
            
        }
        if(self::$tail == null){
            self::$tail = $this;
        }
    }
    
    public function insert($val){
        $newNode = new Node($val);
        $current = self::$head;
        while($current->next != null){
            $current = $current->next;
        }
        $current->next = $newNode;
        $newNode->back = $current;
        self::$tail = $newNode;
        
    }
    public function traverse(){
        self::$count = 0;
        $current = self::$head;
        while($current != null){
            echo $current->val . "\n";
            self::$count++;
            $current = $current->next;
        }
        
    }
    
    public function traverseBack(){
        $current = self::$tail;
        while($current != null){
            echo $current->val . "\n";
            $current = $current->back;
        }
        
    }
    
    public function findNumber($n){
        $current = self::$head;
        while($current != null){
            if($current->val == $n){
                echo $this->nullCheck($current->back) . "<-" . $this->nullCheck($current) . "->" . $this->nullCheck($current->next) . "\n";
                return;
                
            }
            else{
                $current = $current->next;
            }
        }
        echo "Value not found" . "\n";
        return;
        
    }
    private function nullCheck($val){
        if($val == null){
            return "null";
        }
        else{
            return $val->val;
        }
    }
    
    public function removeNode($val){
        $current = self::$head;
        $step = $current->next;
        $stepback = $current->back;
        
        while($current != null){
            if($val == self::$head->val && self::$head == self::$tail){
                self::$head->next = null;
                self::$head = null;
                self::$tail->back = null;
                self::$tail = null;
                echo "Destroyed the LinkedList" . "\n";
                return;
            }
            if($val == self::$head->val){
                self::$head = self::$head->next;
                self::$head->back = null;
                echo "Removed from head" . "\n";
                return;
            }
            if($val == self::$tail->val){
                self::$tail = self::$tail->back;
                self::$tail->next = null;
                echo "Removed from tail" . "\n";
                return;
            }
             if ($val == $current->val) {
            // Removing a middle node
            $step = $current->next;
            $stepback = $current->back;
            $stepback->next = $step;
            if ($step != null) {
                $step->back = $stepback;
            }
            echo "Value removed" . "\n";
            return;
                 }
                $current = $current->next; // move forward
                
            }
        }
        
}
$new = new Node(44);
$new->insert(55);
$new->insert(88);
$new->insert(99);
$new->findNumber(55);
$new->remove(44);
$new->remove(99);
$new->remove(55);
$new->findNumber(88);
$new->remove(88);
$new->traverse();
$new->findNumber(88);

$new = new Node('a');
$new->insert('b');
$new->insert('c');
$new->insert('d');
$new->traverse();
$new->findNumber('c');
$new->findNumber('c');
$new->removeNode("b");
$new->traverse();


?>
