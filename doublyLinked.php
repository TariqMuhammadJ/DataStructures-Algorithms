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
    
    public function remove($val){
        if($val == self::$head->val){
            self::$head = self::$head->next;
            self::$head->back = null;
            echo "Value successfully removed from head" . "\n";
            return;
        }
        if($val == self::$tail->val ){
            self::$tail = self::$tail->back;
            self::$tail->next = null;
            echo "Value successfully removed from tail" . "\n";
            return;
        }
    }
    
    public function findNumber($n){
        $current = self::$head;
        while($current != null){
            if($current->val == $n){
                echo $current->back->val . "<-" . $current->val . "->" . $current->next->val . "\n";
                return true;
                
            }
            else{
                $current = $current->next;
            }
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
$new->traverse();

?>
