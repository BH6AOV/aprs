<html><head><meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
        <title>APRS ͼ��</title>

APRSͼ���������ַ����ƣ��ֱ��table��symbol��<p>
һ����˵��table����Ϊ/���ɡ�<br>
symbol���԰����±�����ַ�����:

<?php

$table="/\\2DEGIRY";

echo "<table>";
echo "<tr>";
echo "<th>table</th>";
for ($i=0;$i<strlen($table);$i++) {
	echo "<th>".substr($table,$i,1)."</th>\n";
}
echo"</tr>";

for($j=0;$j<94;$j++) {
	echo "<tr>";
	echo "<td>".chr($j+33)."</td>";
	for ($i=0;$i<strlen($table);$i++) {
		echo "<td><img src=".bin2hex(substr($table,$i,1).chr($j+33)).".png></td>\n";
	}
	echo "</tr>";
}

echo "</table>\n";

?>
