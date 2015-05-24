<?php 

namespace Controller;
 
use Model\Card;
use Model\Product;
 
class CardController extends AbstractBaseController {
    protected $total_price;
    protected $card;
  
    public function addToCard($request){ // chk if session user is set or /else display the error as 'message'
        if (isset($_SESSION['email_address'])) {
        
            $conn = AbstractBaseController::createConn();
            $productModel = new product($conn);

            if (isset($request['request']['id'])) {
                $product  = $productModel->getProductById($request['request']['id']);
            }
            if(( in_array('Envoyer' , $request['request']) && !empty($request['request']['daychoice'])) or isset($_SESSION['remove']) ) {  

                if (isset($_SESSION['remove'])) {
                    $subscribeid = $_SESSION['remove'];
                    unset($_SESSION['remove']);
                }else{
                $subscribeid = array_keys($request['request'], 'Envoyer');
                }
                $dayz = explode(',',$request['request']['daychoice']);
                
                if ($subscribeid['0'] == 1) {
                    $dayNumber = 1;
                } else if ($subscribeid['0'] == 2) {
                    $dayNumber = 3;
                } else if ($subscribeid['0'] == 3) {
                    $dayNumber = 5;
                }
                $product  = $productModel->getProductById($subscribeid['0']);
                if (count($dayz) == $dayNumber) { 

                     if(empty($_SESSION['card']['3'])) {
                           


                            if (!isset($_SESSION['card'])) {
                                $_SESSION['card'] = array();
                            }
                            if (count($_SESSION['card']) <= 1) {
                                 $message = "L'abonnement à été ajouté au panier";
                            if(!isset($_SESSION['card'][$subscribeid['0']])){
                                $_SESSION['card'][$subscribeid['0']] = array ('subscription' => $product);
                            }   
                            foreach ($_SESSION['card'] as $key => $value) {
                                if(!isset($_SESSION['card'][$key]['days'])){
                                    $_SESSION['card'][$key]['days'] = array();
                                }
                                foreach ($_SESSION['card'][$key]['days'] as $k => $v) {    
                                    foreach ($dayz as $sub => $day) {
                                        if($day == $k){
                                            unset($_SESSION['card'][$key]['days'][$k]);

                                        }
                                        if (isset( $_SESSION['card'][$key]['days'])) {
                                            if(isset($_SESSION['remove'])){
                                                  unset($_SESSION['card'][$key]['days']);
                                                  unset($_SESSION['remove']);
                                                
                                            }
                                        }
                                        if (empty($_SESSION['card'][$key]['days'])) {
                                            unset($_SESSION['card'][$key]['days']);
                                        }
                                    }
                                }
                            }
                            foreach ($dayz as $key => $value) {
                                         $_SESSION['card'][$subscribeid['0']]['days'][$value] = $request['request']['timepikr'.$key];

                            }
                       }else{
                                    $message ="Deux abonnements maximum";
                                
                        }
                           
                    }else{
                        $message = "Déja un abonnement de 5 jours est dans le panier";
                          
                     }

                    //$_SESSION[]
                    $tot = $this->setTotalCardPrice();

                   
                    return [
                            'view' => 'index.html.twig',
                            'product' => $product,
                            'methode' => 'showProductPage',
                            'message' => $message,
                            'id' => $product['id'],        
                            ];
                        }else{ 
                    return [
                'view' => 'index.html.twig',
                'product' => $product,
                'methode' => 'showProductPage',
                'message' => "Veuillez selectionner ".$dayNumber." jours d'abonnement",
                'id' => $product['id'],
                
                ];
                }
                }else{
                    return [
                'view' => 'index.html.twig',
                'product' => $product,
                'methode' => 'showProductPage',
                'message' => "Veuillez selectionner les jours d'abonnement",
                'id' => $request['request']['id'],
                ];
                }
            }else{
                    return [
                'view' => 'index.html.twig',
                'methode' => 'loggedUser',
                'message' => "Veuillez vous connecter",
                ];
            }
    }

    public function listCard($request){
        if(isset($_SESSION['card'])){
            $tot = $this->setTotalCardPrice();
            return [
                    'view' => 'index/listCard.html.twig',
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
                if(array_key_exists( $request['request']['id'], $_SESSION['card'])){
                    unset($_SESSION['card'][$request['request']['id']]);
                }
            $tot = $this->setTotalCardPrice();
            
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
    public function setCalendar($request){

    }


    public function setTotalCardPrice(){
    $this->total_price = '0';
        foreach ($_SESSION['card'] as $key => $value) {
            if (isset($_SESSION['card'][$key['price']])) {
                $this->total_price = $this->total_price + $_SESSION['card'][$key]['price'];
        
            }
                # code...
        }
            
    return $this->total_price;
    }
}
