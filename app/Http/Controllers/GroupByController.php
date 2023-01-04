<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GroupByController extends Controller
{


    public function arrayGroupBy($array, $key) {
      $grouped = [];
      $_key = $key;

      if(!is_string($key)) {
        trigger_error("arrayGroupBy Function: The ${key} key should be a string");

        return null;
      }

      foreach ($array as $value) {
        $key = null;

        if(is_object($value) && property_exists($value, $_key)) {
          $key = $value->{$_key};
        }elseif (isset($value[$_key])) {
          $key = $value[$_key];
        }

        if ($key === null) {
          continue;
        }

        $grouped[$key][] = $value;

      } // EndLoop

      // If more parameters are provided, it will be built recursively.
      if(func_num_args() > 2) {
        $args = func_get_args();
        foreach ($grouped as $key => $value) {
          $params = array_merge([ $value ], array_slice($args, 2, func_num_args()));
          $grouped[$key] = call_user_func_array(array($this, 'arrayGroupBy'), $params);
        }
      }

      return $grouped;
    }

    public function getUniqueValue($parameter1, $parameter2) {
      $collection = [];
      foreach ($parameter1 as $value) {
        if(!in_array($value, $parameter2)) {
          array_push($collection, $value);
        }
      }

      return $collection;
    }

    public function mergeArray($parameter1, $parameter2) {
      if(is_array($parameter1) && is_array($parameter2)) {
        return array_merge($parameter1, $parameter2);
      }
    }
}
