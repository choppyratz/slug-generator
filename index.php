<?php 
function slug_generator($str)
{
	$forbidden_symbols = array('/',',','<','>','.','"',
							   '\'','|','{','}','`',
							   ']','[','=','+','(',')',
							   '*','&',':',';','^','%',
							   '$','#','№','@','!','~',
							   '\\','ь','ъ','?','«','»');


	$slug_map_key = array('-','a','b','v','g','d','e','yo','zh','z','i','y','k','l','m','n','o','p','r','c','t','u','f','h','c','ch','sh','sh','y','e','yu','ya');


	$slug_map_letter = array(' ','а','б','в','г','д','е','ё','ж','з','и','й','к','л','м','н','о','п','р','с','т','у','ф','х','ц','ч','ш','щ','ы','э','ю','я');

	
	$edited_str = mb_strtolower(str_replace($forbidden_symbols,"",$str),'UTF-8');
	$slug = str_replace($slug_map_letter, $slug_map_key, $edited_str);
    return $slug;
	
}
 ?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>slug-generator</title>
</head>
<body>
	<form action="" method="POST">
		<input type="text" name="slug">
		<input type="submit">	
	</form>
	
	<p>slug: <?php echo slug_generator($_POST["slug"]); ?></p>
</body>
</html>
