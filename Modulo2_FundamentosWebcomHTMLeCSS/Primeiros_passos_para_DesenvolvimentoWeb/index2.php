<html>
<head>
<title> Meu primeiro Site em PHP! Woohoo! </title>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<style type="text/css">
.linha {
	 font-weight: bold;
	 color: blue;
	 padding-left: 12px;
	 line-height: 50px;
       }
	   </style>
	 
</head>
<body>


    <?php
     for ($i = 0 ; $i < 10 ; $i++) {
		 print ("<span class=\"Linha\">Linha numero " . $i . "</span><br />");
	 }
	 ?>
	 </body>
	 <script type="text/javascript">
	 $(document).ready(function() 
	 {
		 alert("Woohoo!");
	 }); 
	 </script>
</html>