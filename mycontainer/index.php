<html>
<head>
<title>PHP Page</title>
<style>table { margin 10px; border: 2px solid; } table td {padding: 15px;}</styl                                                                                                                                   e>
</head>
<body>
<strong>Created By: </strong>

Your Name

<h2>Stats</h2>
<table>
<tr>
<th>PHP VERSION</th>
<th>HOSTNAME</th>
<th>SERVER IP:PORT</th>
<th>CLIENT IP</th>
</tr>
<tr>
<td><?php echo phpversion(); ?></td>
<td><?php echo gethostname(); ?></td>
<td><?php printf("%s:%s",$_SERVER['SERVER_ADDR'],$_SERVER['SERVER_PORT']); ?></t                                                                                                                                   d>
<td><?php echo $_SERVER['REMOTE_ADDR']?></td>

</tr>
</table>
</body>
</html>
