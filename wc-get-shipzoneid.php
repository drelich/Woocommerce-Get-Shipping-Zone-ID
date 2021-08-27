<?php

  $order = new \WC_Order( $order_id );
  
  $ship_method =	$order->get_items( 'shipping' ); //get all shipping items for selected order

  foreach($ship_methods as $ship_method) { //grab the shipping method instance_id		
    $ship_method['instance_id']; 					
  }

  $zone_data = WC_Shipping_Zones::get_zone_by( 'instance_id', $ship_method['instance_id'][0] ); //get shipping zone data related to instance_id

  $zone_id = $zone_data->get_id(); //and, finally, get the shipping zone ID for the order

?>
