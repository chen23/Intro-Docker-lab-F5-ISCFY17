<html>
<head>
<title>PHP Page</title>
</head>
<body>
<strong>Created By: </strong> 

Your Name



<h3>Stats</h3>
<table cellpadding="3" border="2">
 <tr>
   <th>PHP Version</th>
   <th>HOSTNAME</th>
   <th>SERVER IP:PORT</th>
   <th>CLIENT IP</th>
 </tr>
 <tr>
   <td><?php echo phpversion(); ?></td>
   <td><?php echo gethostname(); ?></td>
   <td><?php echo $_SERVER['SERVER_ADDR'],":",$_SERVER['SERVER_PORT']; ?></td>
   <td><?php echo $_SERVER['REMOTE_ADDR']; ?></td>
 </tr>
</table>
</body>
</html>
