<?php 

namespace Controller;
 
use Model\Product;
 
class ProductController extends AbstractBaseController {

    public function listProductsAction($request) {
        //create connection from parent AbstractBaseController
        $conn = AbstractBaseController::createConn();

        $productModel = new Product($conn); // new Model for accessing db
        $products = $productModel->getAllProducts();
        //you can return a Response object
        return [
            'view' => 'product/listProducts.html.twig', 
            'products' => $products
        ]; //return views and views parameter
    }



    public function showSubscribeMode($request){
        $conn = AbstractBaseController::createConn();
        $productModel = new product($conn);
        $product  = $productModel->getProductById($request['query']['id']);
            return [
                'view' => 'index.html.twig',
                'product' => $product,
                'methode' => 'showProductPage',
                //'message' => 'productname : '.$product.' dont exist Table products'
                'id' => $product['id'],
                ];
    }

    public function showProductAction($request) {
        if ( isset($request['request']['search']) ){ //chk for id from post else input's view
            $search = $request['request']['search'];
            $conn = AbstractBaseController::createConn();
            $productModel = new Product($conn); // new Model for accessing db
            $product = $productModel->getProductInfo($search);
            if( isset($product['name'])){
                return  [
                            'view' => 'product/product_page.html.twig',
                            'product' => $product,
                            'methode' => 'showProduct',
                            'message' => $product['name'].' actually in DB with ID : '.$product['id'].' Table products'
                        ];
            }else{ return  [
                            'view' => 'product/notify.html.twig',
                            'methode' => 'showProduct',
                            'message' => 'No product registered with name : '.$search.' Table products'
                        ];
                }
        }else{return ['view' => 'product/form_showProduct.html.twig'];}
    }

    public function addProduct($request) {
            if( isset( $request['request']['name']) && isset ($request['request']['price'])&& isset ($request['request']['id']) ) { 
                $product = array(
                            'id' => $request['request']['id'],
                            'name' => $request['request']['name'],
                            'price' => $request['request']['price'],
                            'cal' => '',
                            'desc' => '',
                            'path_image' => '',
                            )
                ;
                if(Validator\stringValidator::strBetween($product['name'], '1', '15' )) { //chk if the string is btw 1,15
                    if(Validator\stringValidator::isPrice($product['price'])){ //chk  with price regex
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
                        }if( isset( $request['request']['desc'])){
                            $product['desc'] = $request['request']['desc'];
                        }

                        $conn = AbstractBaseController::createConn();
                        $productModel = new product($conn); // new Model for accessing db
                        $productExist = $productModel->chkproductByName($product['name']);//chk if product already exist in db
                        if( $productExist == '0'){ //then we can create it
                            $productAdd = $productModel->addproduct($product['name'], $product['price'], $product['cal'],$product['desc']); 
                           
                            if (isset($_FILES['picture'])) {
                                $fichier = $_FILES['picture']['name'];
                                if((pathinfo($fichier, PATHINFO_EXTENSION) == 'jpeg') or (pathinfo($fichier, PATHINFO_EXTENSION) == 'bmp') or (pathinfo($fichier, PATHINFO_EXTENSION) == 'jpg') or (pathinfo($fichier, PATHINFO_EXTENSION) == 'png') or (pathinfo($fichier, PATHINFO_EXTENSION) == 'JPG')or (pathinfo($fichier, PATHINFO_EXTENSION) == 'PNG')){
                                    $upload = move_uploaded_file($_FILES['picture']['tmp_name'], $_SERVER["DOCUMENT_ROOT"]."/newproject/web/images/picture/".$product['name'].'.'.pathinfo($fichier, PATHINFO_EXTENSION));
                                    $pictureAdd = $productModel->addProductInfo('path_image', 'images/picture/'.$product['name'].'.'.pathinfo($fichier, PATHINFO_EXTENSION), $product['name']); 
                               }
                            }

                            
      
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
                }else{ return [ // inputs not set, i show view with them ( user & password input)
                        'view' => 'product/form_addProduct.html.twig'
                    ];
                }
            }

    public function deleteproduct($request) {
        if(isset($request['request']['name']) ) { //check request content else show input view

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
        }else {return ['view' => 'product/form_delProduct.html.twig']; // //input not set i show view with it
        }
    }

}
