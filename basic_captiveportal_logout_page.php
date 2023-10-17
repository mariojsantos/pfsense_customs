<html>
  <head>
	    <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width">
      <title>Your page title here</title>
  </head>
  <body>
    <header></header>
    <section>
      <h2>Click on button below to logoff</h2>
      <form method="POST" action="<?=$logouturl;?>">
			  <input name="logout_id" type="hidden" value="<?=$sessionid;?>" />
			  <input name="zone" type="hidden" value="<?=$cpzone;?>" />
			  <input name="logout" type="submit" value="Logout" />
			</form>
    </section>  
  </body>
</html>
