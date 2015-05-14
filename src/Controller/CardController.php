<?php 

namespace Controller;
 
use Model\Card;
use Model\Product;
 
class CardController extends AbstractBaseController {
    protected $total_price;
  
    public function addToCard($request){
        if(isset($_SESSION['username'])){ // chk if session user is set or /else display the error as 'message'

            $conn = AbstractBaseController::createConn();
            $productModel = new product($conn); //init model\ProductModel
            if(isset($_SESSION['productid']) && !isset($request['query']['id'])) {  
               $_SESSION['product'] = $productModel->getProductById($_SESSION['productid']); //get id via Model

               
                if(isset($request['request']['nbrproduct'])){ 
                    if(!empty($_SESSION['card'][$_SESSION['product']['id']]['quantite']) ){ //if item exist in card add quantite choosen to quantite in card /else create item in card
                        $_SESSION['card'][$_SESSION['product']['id']]['quantite'] = $_SESSION['card'][$_SESSION['product']['id']]['quantite'] + $request['request']['nbrproduct'];
                    }else{
                        $_SESSION['card'][$_SESSION['product']['id']] = array('name' =>$_SESSION['product']['name'],
                                                        'price' =>$_SESSION['product']['price'],
                                                        'quantite' =>$request['request']['nbrproduct'],
                                                        'path_image' =>$_SESSION['product']['path_image']
                                                        );
                    }
                }
                $tot = $this->setTotalCardPrice(); //update total card price
                return [
                        'total_price' => $tot,
                        'view' => 'card/listCard.html.twig',
                        'products' => $_SESSION['card'],
                        'methode' => 'addedToCard',
                        'message' => 'Product added to card'
                        
                        ];
            }else{ //when i ask the addToCard funct i have no quantite then i show the product view and ask quantite to user
                    $_SESSION['productid'] = $request['query']['id'];
                
                return [
                    'view' => 'product/product_page.html.twig',
                    'methode' => 'showProductPage',
                    ];

            }
        }else{return [ //user not logged can't add smth to card
                    'view' => 'product/notify.html.twig',
                    'methode' => 'addToCard',
                    'message' => 'Not logged in :"/'
                    
                    ];

        }
    }

    public function listCard($request){
        if(isset($_SESSION['card'])){ //if i've got a card in session 
            $tot = $this->setTotalCardPrice();// update the addToCard propertie of total price
            return [ //then i list card with params in session
                    'view' => 'card/listCard.html.twig',
                    'products' => $_SESSION['card'],
                    'methode' => 'addedToCard',
                    'message' => '',
                    'total_price' => $tot
                    
                    ];

        }else{
            return [ //explicit.. card is empty
                    'view' => 'card/notify.html.twig',
                    'methode' => 'listCard',
                    'message' => 'Your card is empty'
                    
                    ];

        }
        
    }

    public function deleteProductCard($request){ //delete the entiere product from card
        if(isset($_SESSION['card'])){ 
                if(array_key_exists( $request['query']['id'], $_SESSION['card'])){ //if GET 'id' value exist in array card 
                    unset($_SESSION['card'][$request['query']['id']]); //then i unset it
                }
            $tot = $this->setTotalCardPrice(); //update the addToCard propertie of total price
            return [//return card with updated array card
                    'view' => 'card/listCard.html.twig',
                    'products' => $_SESSION['card'],
                    'methode' => 'addedToCard',
                    'message' => 'removed from card',
                    'total_price' => $tot
                    
                    ];

        }else{
            return [  //explicit
                    'view' => 'card/notify.html.twig',
                    'methode' => 'listCard',
                    'message' => 'Your card is empty'
                    
                    ];

        }
        
    }

    public function deleteItem($request){ //ask for a quantite to remove of the card
        if(isset($_SESSION['card'])){ 

            $conn = AbstractBaseController::createConn();
            $productModel = new product($conn);
            if(isset($_SESSION['productid']) && !isset($request['query']['id'])) {  
               $_SESSION['product'] = $productModel->getProductById($_SESSION['productid']);

               
                if(isset($request['request']['nbrproduct'])){ 
                    if(!empty($_SESSION['card'][$_SESSION['product']['id']]['quantite']) ){
                        $_SESSION['card'][$_SESSION['product']['id']]['quantite'] = $_SESSION['card'][$_SESSION['product']['id']]['quantite'] - $request['request']['nbrproduct'];
                    var_dump($_SESSION['card'][$_SESSION['product']['id']]['quantite'],$_SESSION['card']);

                    }
                }
                $tot = $this->setTotalCardPrice();
                return [
                        'total_price' => $tot,
                        'view' => 'card/listCard.html.twig',
                        'products' => $_SESSION['card'],
                        'methode' => 'addedToCard',
                        'message' => 'Product added to card'
                        
                        ];
            }else{

                    $_SESSION['productid'] = $request['query']['id'];
                
                return [
                    'view' => 'product/product_page.html.twig',
                    'methode' => 'showDelProductPage',
                    ];

            }
            $tot = $this->setTotalCardPrice();
            return [
                    'view' => 'card/listCard.html.twig',
                    'products' => $_SESSION['card'],
                    'methode' => 'addedToCard',
                    'message' => '',
                    'total_price' => $tot
                    
                    ];

        }else{
            return [
                    'view' => 'card/notify.html.twig',
                    'methode' => 'listCard',
                    'message' => 'Your card is empty'
                    
                    ];

        }
        
    }

    public function setTotalCardPrice(){ // update the total price property of $this (CardController)
    $this->total_price = '0';
        foreach ($_SESSION['card'] as $key => $value) {
            $this->total_price = $this->total_price + ($_SESSION['card'][$key]['price'] * $_SESSION['card'][$key]['quantite'] );
        }
    return $this->total_price;
    }
}
