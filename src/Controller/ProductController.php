<?php 

namespace Controller;
    //affiche les erreurs
ini_set('error_reporting', E_ALL);

session_start();
 
use Model\Product;
 
class ProductController extends AbstractBaseController {

    public function listProductsAction($request) {
        //create connection from parent AbstractBaseController
        $conn = AbstractBaseController::createConn();

        $productModel = new Product($conn); // new Model for accessing db
        $product = $productModel->listProducts();
        //you can return a Response object
        return [
            'view' => 'product/listProducts.html.twig', // should be Twig : 'WebSite/View/product/listproduct.html.twig'
            'products' => $product
        ]; //return views and views parameter
    }

    public function showProductAction($request) {
        if ( isset($request['request']['id']) ){ //chk for id from post else input's view
            $id = $request['request']['id'];
            $conn = AbstractBaseController::createConn();
            $productModel = new Product($conn); // new Model for accessing db
            $product = $productModel->getProductById($id);
            if( isset($product['name'])){
                return  [
                            'view' => 'product/notify.html.twig',
                            'product' => $product['name'],
                            'methode' => 'showProduct',
                            'message' => $product['name'].' actually in DB with ID : '.$id.' Table products'
                        ];
            }else{ return  [
                            'view' => 'product/notify.html.twig',
                            'product' => $product['name'],
                            'methode' => 'showProduct',
                            'message' => 'No product registered with id : '.$id.' Table products'
                        ];
                }
        }else{return ['view' => 'product/form_showProduct.html.twig'];}
    }

    /**
     * Add product and redirect on listproduct after
     */
    public function addProduct($request) {
            if( isset( $request['request']['name']) && isset ($request['request']['price']) ) { 
                $product = array(
                            'name' => $request['request']['name'],
                            'price' => $request['request']['price'],
                            'cal' => '',
                            )
                ;
                if(Validator\stringValidator::strBetween($product['name'], '1', '15' )) {
                    if(Validator\stringValidator::isPrice($product['price'])){
                        if( isset( $request['request']['cal'])){
                            if(Validator\stringValidator::strBetween( $request['request']['cal'], '1', '4' )){
                                $product['cal'] = $request['request']['cal'];
                            }else{return [
                            'view' => 'product/notify.html.twig',
                            'product' => $product['name'],
                            'methode' => 'addProduct',
                            'message' => 'Number of kcal too short (1 number min.) or too long (4 number max.)'
                            ];
                            }
                        }
                    


                        $conn = AbstractBaseController::createConn();
                        $productModel = new product($conn); // new Model for accessing db
                        $productExist = $productModel->chkproductByName($product['name']); 
                        if( $productExist == '0'){ //then we can create it
                            
                            $productAdd = $productModel->addproduct($product['name'], $product['price'], $product['cal']); 
                            
                            return [
                            'view' => 'product/notify.html.twig',
                            'product' => $product['name'],
                            'methode' => 'addProduct',
                            'message' => 'product : '.$product['name'].' registered Table products'
                        ];
                        }else{return [
                            'view' => 'product/notify.html.twig',
                            'product' => $product['name'],
                            'methode' => 'addProduct',
                            'message' => 'product : '.$product['name'].' already used Table products'
                            ];
                            }
                        }else{return [
                            'view' => 'product/notify.html.twig',
                            'product' => $product['name'],
                            'methode' => 'addProduct',
                            'message' => 'bad syntax for a Price '
                        ];

                        }
                    }else{ return [
                        'view' => 'product/notify.html.twig',
                        'product' => $product['name'],
                        'methode' => 'addProduct',
                        'message' => 'product : '.$product['name'].' too short (1 char. min.) or too long (15 char. max.) Table products'
                    ];
                    }
                }else{ return [
                        'view' => 'product/form_addProduct.html.twig'
                    ];
                }
            }

    public function deleteproduct($request) {
        //check request content else show input view
        if(isset($request['request']['name']) ) { 

            $product =  $request['request']['name'];
            $conn = AbstractBaseController::createConn();
            $productModel = new product($conn); // new Model for accessing db
            $productExist = $productModel->chkproductByName($product); //chk in db if product exist
            if( $productExist >= 1){ 
                $productDel= $productModel->deleteProduct($product); // if exist delete it
                return [
                    'view' => 'product/notify.html.twig',
                    'product' => $product,
                    'methode' => 'delProduct',
                    'message' => 'product : '.$product.' deleted Table products'
                ];
            }else{ return [
                'view' => 'product/notify.html.twig',
                'product' => $product,
                'methode' => 'delProduct',
                'message' => 'productname : '.$product.' dont exist Table products'
                
                ];
            }
        }else {return ['view' => 'product/form_delProduct.html.twig']; // 
        }
    }
}
