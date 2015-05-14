<?php 

namespace Controller;
 
use Model\Card;
use Model\Product;
 
class CardController extends AbstractBaseController {

  
    public function addToCard($request){
        if(isset($_SESSION['username'])){ // chk if session user is set or /else display the error as 'message'

            $conn = AbstractBaseController::createConn();
            $productModel = new product($conn);
            if(isset($_SESSION['productid']) && !isset($request['query']['id'])) {  
               $_SESSION['product'] = $productModel->getProductById($_SESSION['productid']);
               unset($_SESSION['productid']);
               
                if(isset($request['request']['nbrproduct'])){ 
                    if(!empty($_SESSION['card'][$_SESSION['product']['id']]['quantite']) ){
                        $_SESSION['card'][$_SESSION['product']['id']]['quantite'] = $_SESSION['card'][$_SESSION['product']['id']]['quantite'] + $request['request']['nbrproduct'];
                    }else{
                        $_SESSION['card'][$_SESSION['product']['id']] = array('name' =>$_SESSION['product']['name'],
                                                        'price' =>$_SESSION['product']['price'],
                                                        'quantite' =>$request['request']['nbrproduct'],
                                                        'path_image' =>$_SESSION['product']['path_image']
                                                        );
                    }
                }
                
                return [
                        'view' => 'card/listCard.html.twig',
                        'products' => $_SESSION['card'],
                        'methode' => 'addedToCard',
                        'message' => 'Product added to card'
                        
                        ];
               // }else{
                 //   return [
                   //     'view' => 'product/notify.html.twig',
                     //   'product' => $_SESSION['product'],
                       // 'methode' => 'showProductPage',
                        //'message' => 'please enter quantite'
                        
                        //];
                //}

                //////
            }else{
                    $_SESSION['productid'] = $request['query']['id'];
                
                return [
                    'view' => 'product/product_page.html.twig',
                   //'product' => $_SESSION['product'],
                    'methode' => 'showProductPage',
                    //'message' => 'productname : '.$product.' dont exist Table products'
                    
                    ];

            }
        }else{return [
                    'view' => 'product/notify.html.twig',
                    //'product' => $product,
                    'methode' => 'addToCard',
                    'message' => 'Not logged in :"/'
                    
                    ];

        }
    }

    public function listCard($request){
        if(isset($_SESSION['card'])){
            return [
                    'view' => 'card/listCard.html.twig',
                    'products' => $_SESSION['card'],
                    'methode' => 'addedToCard',
                    'message' => ''
                    
                    ];

        }else{
            return [
                    'view' => 'card/notify.html.twig',
                    //'product' => $product,
                    'methode' => 'listCard',
                    'message' => 'Your card is empty'
                    
                    ];

        }
        
    }
}
