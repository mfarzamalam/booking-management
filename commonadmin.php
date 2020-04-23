<%
 Server.ScriptTimeout = 10000000  


set ht402 = Server.CreateObject("ADODB.Connection")
ht402.Open "DRIVER={MySQL ODBC 3.51 Driver};SERVER=localhost;PORT=3306;Database=XXXXXXXX;Uid=XXXXXXXX;Pwd=XXXXXXX;OPTION=3;adOpenDynamic;adLockOptimistic"



%>