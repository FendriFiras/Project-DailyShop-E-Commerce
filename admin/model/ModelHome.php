<?php

    class ModelHome{

       public static function getall($conn){
           $category = $conn->query("SELECT COUNT(*) as C FROM category");
           $category1=$category->fetch();
            $brand = $conn->query("SELECT COUNT(*) as B FROM brands");
            $brand1 = $brand->fetch();
            $products = $conn->query("SELECT COUNT(*) as P FROM products");
            $products1 = $products->fetch();
            $orders = $conn->query("SELECT COUNT(*) as O FROM orders");
            $orders1 = $orders->fetch();
            $customers =$conn->query("SELECT * FROM customers");
            $customers1=$customers->fetchall(PDO::FETCH_ASSOC);

            $data = array(
                'category' =>$category1['C'],
                'brand' =>$brand1['B'],
                'products' =>$products1['P'],
                'orders' =>$orders1['O'],
                'customers' =>$customers1
            );
            return $data;
       }

    }
