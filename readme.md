


echo '<pre>';  
var_dump( $request->url() );    // url  
echo '</pre>';  
  
echo '<pre>';  
var_dump( $request->route( 'email' ) ); //获取路由参数  
echo '</pre>';  
  
echo '<pre>';  
var_dump( $request->method() ); // methed  
echo '</pre>';  
  
echo '<pre>';  
var_dump( $request->get( 'name' ) ); // query string param  
echo '</pre>';  
  
echo '<pre>';  
var_dump( Input::get() );   // query string  
echo '</pre>';  

# 用户名：admin   密码： test
