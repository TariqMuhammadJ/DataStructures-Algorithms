<?php 

class Tree{
    private $val;
    public static $root;
    private $left;
    private $right;
    
    public function __construct($val){
        $this->val = $val;
        $this->left = null;
        $this->right = null;
        if(self::$root == null){
            self::$root = $this;
        }
    }
    
    public function insert($val, $root){
        if($val < $root->val){
            if($root->left == null){
                $root->left = new Tree($val);
                echo "Inserted $val to the left of {$root->val} \n";
            }
            else{
                $this->insert($val, $root->left);
            }
        } elseif($val > $root->val){
            if($root->right === null){
                $root->right = new Tree($val);
                echo "Inserted $val to the right of {$root->val}\n";
            }
            else{
                $this->insert($val, $root->right);
            }
        }
    }
    
    public function traverse($root){
        if($root === null) return;
        $this->traverse($root->left);
        echo $root->val . "\n";
        $this->traverse($root->right);
    }
    
}

$tree = new Tree(55);

$tree->insert(40, Tree::$root);
$tree->insert(66, Tree::$root);
$tree->insert(50, Tree::$root);


echo "In order traversal : \n";

$tree->traverse(Tree::$root);

?>
