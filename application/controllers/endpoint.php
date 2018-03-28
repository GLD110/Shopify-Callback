<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Endpoint extends MY_Controller {

  private $_shop = '';

  public function __construct() {
    parent::__construct();

    // Get the shop from the HTTP Header or private shop
    $this->_shop = isset( $_SERVER['HTTP_X_SHOPIFY_SHOP_DOMAIN'] ) ? $_SERVER['HTTP_X_SHOPIFY_SHOP_DOMAIN'] : $this->config->item('PRIVATE_SHOP');

    // Get the Input Stream
    $this->_inputInfo = json_decode( file_get_contents('php://input') );

    if( !isset($this->_inputInfo->id ) )
    {
      $strTemp = array(array());
      $this->_inputInfo = json_decode( $strTemp );
    }

  }

  public function index(){
  }

  /**
  * Checkout popup
  *
  */
  public function order_create( $method = 'Order Created' )
  {
    $this->load->model( 'Order_model' );
    $this->Order_model->rewriteParam( $this->_shop );
    $this->Order_model->add( $this->_inputInfo );
  }

  public function order_paid()
  {
    $this->order_create( 'Order Paid' );
  }

  public function product_create()
  {
    $this->load->model( 'Product_model' );
    $this->Product_model->rewriteParam( $this->_shop );
    $this->Product_model->addProduct( $this->_inputInfo );

  }

  public function product_update()
  {
    $this->load->model( 'Product_model' );
    $this->Product_model->rewriteParam( $this->_shop );
    $this->Product_model->addProduct( $this->_inputInfo );

  }

  // Request for when
  public function request( $shop, $handle  )
  {
    // Define a header
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: GET, POST");
    header('Content-Type: application/json');

    $this->_shop = $shop;

    // Load model
    $this->load->model( 'Product_model' );
    $this->Product_model->rewriteParam( $this->_shop );

    // Get the product
    $objProduct = $this->Product_model->getProductFromHandle( $handle );

    // Build the return
    $return = array(
      'status' => '0'
    );

    if( $objProduct != '' )
    {
      $objProduct->description = strip_tags($objProduct->body_html );
      $objProduct->url = 'http://' . $shop . '/products/' . $handle;
      for( $i = 0; $i < count($objProduct->variants); $i ++ )
      {
        $objProduct->variants[$i]->featured_image = $objProduct->image;
        $objProduct->variants[$i]->name = $objProduct->title . ' - ' . $objProduct->variants[$i]->title;
        $objProduct->variants[$i]->price *= 100;

        for( $j = 0; $j < count( $objProduct->images ); $j ++ )
        {
          if( in_array( $objProduct->variants[$i]->id, $objProduct->images[$j]->variant_ids ) )
          {
            $objProduct->variants[$i]->featured_image = $objProduct->images[$j];
            break;
          }
        }
      }
      $return['status'] = '1';
      $return['product'] = $objProduct;
    }

    echo json_encode( $return );
  }

  public function proxy()
  {
    $this->load->model( 'Shopify_model' );

  }
}
