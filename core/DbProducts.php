<?php
namespace App\Core;

class DbProducts {

    public $product_id;
    public $seller_id;
    public $product_name;
    public $product_description;
    public $product_price;
    public $available_quantity;
    public $product_image; 
    public $updated_date;

    //getting the time ago function
    // public function time_elapsed_string() {
    //     $full = false;
    //     $now = new \DateTime;
    //     $ago = new \DateTime($this->updated_date);
    //     $diff = $now->diff($ago);
    
    //     $diff->w = floor($diff->d / 7);
    //     $diff->d -= $diff->w * 7;
    
    //     $string = array(
    //          'y' => 'year',
    //          'm' => 'month',
    //          'w' => 'week',
    //          'd' => 'day',
    //          'h' => 'hour',
    //          'i' => 'minute',
    //          's' => 'second',
    //      );
    //      foreach ($string as $k => &$v) {
    //          if ($diff->$k) {
    //              $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
    //          } else {
    //              unset($string[$k]);
    //          }
    //      }
    
    //      if (!$full) $string = array_slice($string, 0, 1);
    //      return $string ? implode(', ', $string) . ' ago' : 'just now';
    //  }
 
     
}
