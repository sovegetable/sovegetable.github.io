echo "用POST提交Hello给var变量吧";

$var = $_POST['var']
if(isset($var))
{
     if($var == 'Hello')
     {
	echo "flag{y0uc_anpos_tNow}"      
     }
     else{	
	echo "sorry,you post wrong word"
}
}