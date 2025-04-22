<?php
class Node {
    private $val;
    public $next;

    public function __construct(int $val) {
        $this->val = $val;
        $this->next = null;
    }

    public function insert(int $val) {
        $newNode = new Node($val);
        $current = &$this;

        while ($current->next != null) {
            $current = $current->next;
        }

        $current->next = $newNode;
        echo $newNode->val . "\n";
    }
    
    public function traverse(){
      $current = &$this;
      while($current != null){
        echo $current->val . "\n";
        $current = $current->next;
      }
      
    }
    
    public function findVal($val){
      $current = &$this;
      $iterator = 0;
      while($current!= null){
        $iterator++;
        if ($current->val == $val){
          echo "Found the value at position : " . $iterator . "\n";
        }
        $current = $current->next;
        
      }
    }
}

$node1 = new Node(5);
$node1->insert(8);
$node1->insert(10);
$node1->insert(25);
$node1->traverse();
$node1->findVal(10);
print_r($node1);
// this is for simple LinkedLists

?>
