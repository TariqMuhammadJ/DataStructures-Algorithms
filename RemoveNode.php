<?php

class Node {
    private $val;
    private $next;
    private $back;
    static $head = null;
    static $count = 0;
    static $tail = null;
    
    public function __construct($val) {
        $this->val = $val;
        $this->next = null;
        $this->back = null;
        if (self::$head === null) {
            self::$head = $this; // First node
        }
        if (self::$tail === null) {
            self::$tail = $this; // First node is also the tail
        }
        self::$count++;
    }
    
    public function insert($val) {
        $new = new Node($val);
        $current = self::$head;
        
        while ($current->next !== null) {
            $current = $current->next;
        }
        
        $current->next = $new;
        $new->back = $current;
        self::$tail = $new; // Update the tail
        self::$count++;
        echo "Inserted: " . $new->val . "\n";
    }
    
    public function removeNode($n) {
        if ($n <= 0 || $n > self::$count) {
            return "Please enter a valid index.";
        }
        
        $current = self::$head;
        $index = 1; // Node index starts from 1
        
        // Traverse to the nth node
        while ($current !== null && $index < $n) {
            $current = $current->next;
            $index++;
        }
        
        if ($current === null) {
            return "Node not found.";
        }
        
        // If it's the head node
        if ($current === self::$head) {
            self::$head = $current->next;
            if (self::$head !== null) {
                self::$head->back = null;
            }
        } 
        // If it's the tail node
        elseif ($current === self::$tail) {
            self::$tail = $current->back;
            if (self::$tail !== null) {
                self::$tail->next = null;
            }
        } 
        // Node in the middle
        else {
            $current->back->next = $current->next;
            if ($current->next !== null) {
                $current->next->back = $current->back;
            }
        }
        
        $current->next = $current->back = null; // Disconnect the node completely
        self::$count--;
        echo "Removed: " . $current->val . "\n";
    }
}

$node1 = new Node(44);
$node1->insert(55);
$node1->insert(66);
$node1->insert(77);

?>
