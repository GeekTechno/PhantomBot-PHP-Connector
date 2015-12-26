#PhantomBot PHP Connector#

This PHP script is made to simplify using PhantomBot's data on your website or any other PHP driven application

##Usage##
1. Include PhantomBotConnector.class.php in your PHP application.
2. Initialize a new PhantomBotConnector object with the following parameters:
  - **Address**: This would be a string containing the direct IP address of the machine running PhantomBot.
  - **oauth**: This would be the oauth token used when installing Phantombot.  
  *You can find the token in botlogin.txt within the folder of your PhantomBot installation.*
  - **port**: This would be the port on wich PhantomBot is listening for incomming HTTP requests.  
  *Generally this will be 25000, you can ommit this parameter if you have not changed this setting in PhantomBot.*
3. You can now use the "getTable" or "getAddonFile" method, with the filename/tablename and this will return an array containing the following:
  - **0**: An array containing the information retrieved from PhantomBot.
  - **1**: An array containing cUrl's information about the request.
  - **2**: The cUrl status number of the request.
  - **3**: The cUrl error message if an error has occurred. If no error has occured this element will be an empty string.
  
See example.php an example on how to use this class.