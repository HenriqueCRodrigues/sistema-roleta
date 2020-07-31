<?php 

namespace App\Repositories;

class SpinRepository
{

  public function spinRandom() {
    try {
      $discount = [
        0,
        1,
        2,
        5,
        10,
        15,
        20,
        30,
        50,
        100,
      ];

      $random = rand(0,count($discount)-1);

      return ['message' => ['discount' => $discount[$random]], 'status' => 200];
    } catch (\Exception $e) {
        return ['status' => 500, 'message' => $e->getMessage()];
    }
  }
}