<?php 

namespace Controller;
 
use Model\Card;
use Model\Product;
 
class CardController extends AbstractBaseController {
    protected $total_price;
  
    public function addToCard($request){ // chk if session user is set or /else display the error as 'message'
            $conn = AbstractBaseController::createConn();
            $productModel = new product($conn);
                if(isset($_SESSION['productid']) && !empty($request['request']['daychoice'])) {  
                    $dayz = explode(',',$request['request']['daychoice']);
                    if (count($dayz) <= 3) { 

                         $_SESSION['card'][$_SESSION['productid']] = $_SESSION['product'][$_SESSION['productid']];

                        foreach ($dayz as $key => $value) {
                            $_SESSION['card'][$_SESSION['productid']]['days'][$value] = $request['request']['timepikr'.$key];
                        }

                        $_SESSION['product'] = array();
                        //$_SESSION[]
                       var_dump($_SESSION['card']);die;
                        $tot = $this->setTotalCardPrice();


                        return [
                                'total_price' => $tot,
                                'view' => 'card/listCard.html.twig',
                                'products' => $_SESSION['card'],
                                'methode' => 'addedToCard',
                                'message' => 'Product added to card',
                                'id' => $_SESSION['productid'],             
                                ];
                    }else{
                        return [
                    'view' => 'index.html.twig',
                    'product' => $_SESSION['product'][$_SESSION['productid']],
                    'methode' => 'showProductPage',
                    'message' => "Trop de jours sont séléctionné",
                    'id' => $_SESSION['productid'],
                    
                    ];
                    }
                }else{
                     return [
                    'view' => 'index.html.twig',
                    'product' => $_SESSION['product'][$_SESSION['productid']],
                    'methode' => 'showProductPage',
                    'message' => "Veuillez selectionner les jours d'abonnement",
                    'id' => $_SESSION['productid'],        
                    ];
                }
    }

    public function listCard($request){
        if(isset($_SESSION['card'])){
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
                    //'product' => $product,
                    'methode' => 'listCard',
                    'message' => 'Your card is empty'
                    
                    ];

        }
        
    }

    public function deleteProductCard($request){
        if(isset($_SESSION['card'])){
                if(array_key_exists( $request['query']['id'], $_SESSION['card'])){
                    unset($_SESSION['card'][$request['query']['id']]);
                }
            $tot = $this->setTotalCardPrice();
            return [
                    'view' => 'card/listCard.html.twig',
                    'products' => $_SESSION['card'],
                    'methode' => 'addedToCard',
                    'message' => 'removed from card',
                    'total_price' => $tot
                    
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

    public function deleteItem($request){
        if(isset($_SESSION['card'])){

            $conn = AbstractBaseController::createConn();
            $productModel = new product($conn);
            if(isset($_SESSION['productid']) && !isset($request['query']['id'])) {  
               $_SESSION['product'] = $productModel->getProductById($_SESSION['productid']);

               
                if(isset($request['request']['nbrproduct'])){ 
                    if(!empty($_SESSION['card'][$_SESSION['product']['id']]['quantite']) ){
                        $_SESSION['card'][$_SESSION['product']['id']]['quantite'] = $_SESSION['card'][$_SESSION['product']['id']]['quantite'] - $request['request']['nbrproduct'];
                }
                $tot = $this->setTotalCardPrice();
                return [
                        'total_price' => $tot,
                        'view' => 'card/listCard.html.twig',
                        'products' => $_SESSION['card'],
                        'methode' => 'addedToCard',
                        'message' => 'Product added to card'
                        
                        ];
                }
            }else{

                    $_SESSION['productid'] = $request['query']['id'];
                
                return [
                    'view' => 'product/product_page.html.twig',
                   //'product' => $_SESSION['product'],
                    'methode' => 'showDelProductPage',
                    //'message' => 'productname : '.$product.' dont exist Table products'
                    
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
                    //'product' => $product,
                    'methode' => 'listCard',
                    'message' => 'Your card is empty'
                    
                    ];

        }
        
    }

    public function setTotalCardPrice(){
    $this->total_price = '0';
        foreach ($_SESSION['card'] as $key => $value) {
            $this->total_price = $this->total_price + ($_SESSION['card'][$key]['price'] * $_SESSION['card'][$key]['quantite'] );
        }
    return $this->total_price;
    }
}
