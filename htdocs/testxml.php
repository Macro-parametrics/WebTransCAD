<?

chdir('C:\APM_Setup\htdocs\transcad\WebTransCAD'); // 해당 경로로 이동
/*
// CATScript(pre) test
exec("webtranscad.exe import C:/APM_Setup/htdocs/transcad/WebTransCAD/TEST/K1.CATScript");	
exec("webtranscad.exe export C:/APM_Setup/htdocs/transcad/WebTransCAD/TEST/K1_FromCATScript.CATScript");
exec("webtranscad.exe export C:/APM_Setup/htdocs/transcad/WebTransCAD/TEST/K1_FromCATScript.CATPart");
exec("webtranscad.exe export C:/APM_Setup/htdocs/transcad/WebTransCAD/TEST/K1_FromCATScript.prt");
exec("webtranscad.exe export C:/APM_Setup/htdocs/transcad/WebTransCAD/TEST/K1_FromCATScript.xml");
exec("webtranscad.exe export C:/APM_Setup/htdocs/transcad/WebTransCAD/TEST/K1_FromCATScript.x3d");
*/

/*
sleep(0.5);
//exec("webtranscad.exe exit");
// XML(pre) test
exec("webtranscad.exe import C:/APM_Setup/htdocs/transcad/WebTransCAD/TEST/K1.xml");
exec("webtranscad.exe export C:/APM_Setup/htdocs/transcad/WebTransCAD/TEST/K1_FromXML.CATScript");
exec("webtranscad.exe export C:/APM_Setup/htdocs/transcad/WebTransCAD/TEST/K1_FromXML.CATPart");
exec("webtranscad.exe export C:/APM_Setup/htdocs/transcad/WebTransCAD/TEST/K1_FromXML.prt");
exec("webtranscad.exe export C:/APM_Setup/htdocs/transcad/WebTransCAD/TEST/K1_FromXML.xml");
exec("webtranscad.exe export C:/APM_Setup/htdocs/transcad/WebTransCAD/TEST/K1_FromXML.x3d");
*/

sleep(0.5);
//exec("webtranscad.exe exit");
// NX(pre) test
exec("webtranscad.exe import C:/APM_Setup/htdocs/transcad/WebTransCAD/TEST/K1.prt");
exec("webtranscad.exe export C:/APM_Setup/htdocs/transcad/WebTransCAD/TEST/K1_FromNX.CATScript");
exec("webtranscad.exe export C:/APM_Setup/htdocs/transcad/WebTransCAD/TEST/K1_FromNX.CATPart");
exec("webtranscad.exe export C:/APM_Setup/htdocs/transcad/WebTransCAD/TEST/K1_FromNX.prt");
exec("webtranscad.exe export C:/APM_Setup/htdocs/transcad/WebTransCAD/TEST/K1_FromNX.xml");
exec("webtranscad.exe export C:/APM_Setup/htdocs/transcad/WebTransCAD/TEST/K1_FromNX.x3d");
/*
sleep(0.5);
//exec("webtranscad.exe exit");
// CATPart(pre) test
exec("webtranscad.exe import C:/APM_Setup/htdocs/transcad/WebTransCAD/TEST/K1.CATPart");
exec("webtranscad.exe export C:/APM_Setup/htdocs/transcad/WebTransCAD/TEST/K1_FromCATPart.CATScript");
exec("webtranscad.exe export C:/APM_Setup/htdocs/transcad/WebTransCAD/TEST/K1_FromCATPart.CATPart");
exec("webtranscad.exe export C:/APM_Setup/htdocs/transcad/WebTransCAD/TEST/K1_FromCATPart.prt");
exec("webtranscad.exe export C:/APM_Setup/htdocs/transcad/WebTransCAD/TEST/K1_FromCATPart.xml");
exec("webtranscad.exe export C:/APM_Setup/htdocs/transcad/WebTransCAD/TEST/K1_FromCATPart.x3d");
*/
echo date("Y-m-d H:i:s");
echo "Translation is done!";
/*
echo $output."<br>bb".$output1;
while(list($key, $val) =each($output1)) { 
echo $key . "=". "$val". "<br>"; 
} */
?>