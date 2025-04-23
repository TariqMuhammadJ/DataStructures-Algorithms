<?php 


class Node{
  private $val;
  private $next;
  private $back;
  private $tail;
  
  
  public function __construct($val){
    $this->val = $val;
    $this->next = null;
    $this->back = null;
  }
  
  
  public function insertNode($val){
    $newNode = new Node($val);
    $current = &$this;
    
    while($current->next != null){
      $current = $current->next;
    }
    
    $current->next = $newNode;
    $newNode->back = $current;
    $this->tail = $newNode;
    
  }
  
  public function travserseBack(){
    $tail = $this->tail;
    
    while ($tail->back != null){
      echo $tail->val . "\n";
      $tail = $tail->back;
    }
    echo $tail->val;
  }
  
  public function traverse(){
    $current = &$this;
    
    while($current->next != null){
      echo "<-" . $current->val . "->";
      $current = $current->next;
    }
    echo "<-" .  $current->val . "->";
  }
  
  public function findNode($val){
    $current = &$this;
    $position = 0;
    while($current->next != null){
      $position++;
      if ($current->val == $val){
        echo "Found the Node at " . $position . "\n";
        echo "The back node is " . $current->back->val . "\n";
      }
      $current = $current->next;
    }
  }
}



$node = new Node(22);
$node->insertNode(33);
$node->insertNode(44);
$node->insertNode(55);
$node->traverse();
$node->findNode(33);
$node->travserseBack();

?>
