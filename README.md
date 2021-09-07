# api-php
API with PHP with two endpoints

The API has the following endpoints: 

1. Greeting
   Description: It returns a classic Hello Wordl in diferent languages
   
   https://domain.com/api/Greeting/<Language>
    
   Language      str      Originally es|en|fr||de|it 
   By default or omission of the parameter, the endpoit uses the default "es"
   
   
2. Photo
   Description: It retrieves photos based on search term
   
   https://domain.com/api/Photo/<search_term>
   
   Search_term   str      Any string. The endpoint uses the default "Mexico"
   
   
Additional notes:

You can edit the list of languages in /data/greetings.json
You can edit the default value for search of photos in /index.php 


   
   
   
   You cavalues for Languages could be 
   
   

