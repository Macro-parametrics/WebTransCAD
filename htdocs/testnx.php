<?

chdir('C:\APM_Setup\htdocs\transcad\WebTransCAD'); // 해당 경로로 이동

// NX(pre) test
exec("webtranscad.exe reset");
//exec("webtranscad.exe import C:/APM_Setup/htdocs/transcad/WebTransCAD/TEST/K1.prt");
exec("webtranscad.exe export C:/APM_Setup/htdocs/transcad/WebTransCAD/TEST/K1_FromNX.CATScript");
exec("webtranscad.exe export C:/APM_Setup/htdocs/transcad/WebTransCAD/TEST/K1_FromNX.CATPart");
exec("webtranscad.exe export C:/APM_Setup/htdocs/transcad/WebTransCAD/TEST/K1_FromNX.prt");
exec("webtranscad.exe export C:/APM_Setup/htdocs/transcad/WebTransCAD/TEST/K1_FromNX.xml");
exec("webtranscad.exe export C:/APM_Setup/htdocs/transcad/WebTransCAD/TEST/K1_FromNX.x3d");

echo date("Y-m-d H:i:s");

echo "<br />\n<br />\n Translation is done!";
/*
echo $output."<br>bb".$output1;
while(list($key, $val) =each($output1)) { 
echo $key . "=". "$val". "<br>"; 
} */
?>