<?

chdir('C:\APM_Setup\htdocs\transcad\WebTransCAD'); // 해당 경로로 이동

// CATScript(pre) test
exec("webtranscad.exe import C:/APM_Setup/htdocs/transcad/WebTransCAD/TEST/K1.CATScript");	
exec("webtranscad.exe export C:/APM_Setup/htdocs/transcad/WebTransCAD/TEST/K1_FromCATScript.CATScript");
exec("webtranscad.exe export C:/APM_Setup/htdocs/transcad/WebTransCAD/TEST/K1_FromCATScript.CATPart");
exec("webtranscad.exe export C:/APM_Setup/htdocs/transcad/WebTransCAD/TEST/K1_FromCATScript.prt");
exec("webtranscad.exe export C:/APM_Setup/htdocs/transcad/WebTransCAD/TEST/K1_FromCATScript.xml");
exec("webtranscad.exe export C:/APM_Setup/htdocs/transcad/WebTransCAD/TEST/K1_FromCATScript.x3d");

echo date("Y-m-d H:i:s");
echo "Translation is done!";
/*
echo $output."<br>bb".$output1;
while(list($key, $val) =each($output1)) { 
echo $key . "=". "$val". "<br>"; 
} */
?>