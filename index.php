<?php
   //Open the file that stores the counter value in "read and write" mode
   $file = fopen("./data/access_counter.txt", "r+");

   //Read the current value of the counter from the file
   $count = fgets($file);

   //Increment the counter value by 1 to reflect the new visitor
   $count++;

   //Prepare to write the updated counter back to the file
   fseek($file,-1,SEEK_END); //Move to he end of the file
   rewind($file); //Go back to the start of  the file to overwrite the old counter value

   //Write the new counter value to the file
   fputs($file, $count); 

   //Close the file after writing the updated counter value
   fclose($file);

   //Convert the integer counter value to a string for further processing
   $string = strval($count);

   //Get the length of the counter value (number of digits)
   $string_num = strlen($string); 
?>  

<!DOCTYPE html>
<html>
   <head>
      <!-- Metadata links for the document head-->
      <meta charset="utf-8"> 
      <title>Visitor Counter</title> <!-- Title pf the web page -->
      <link rel="stylesheet" href="style.css"> <!-- Link to the external CSS file for styling the page -->
      <link rel="preconnect" href="https://fonts.googleapis.com"> <!-- Preconnect to Google's fron service for faster loading of web fonts-->
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> <!-- Preconnect to Google's font CDN, allowing cross-origin requests -->
      <link href="https://fonts.googleapis.com/css2?family=Limelight&display=swap" rel="stylesheet"> <!-- Link to import "Limelight" font from Google Fonts -->
   </head>   
   <body>
      <section class="main_wrapper">

         <!-- Top border decoration for the page -->
         <div class="top_border"></div>


         <!-- Display a message to the user -->
         <div class="visitor_text">
            <p>This site has</p>
         </div><!-- ./visitor_message -->
         
         <!-- Container for displaying the visitor counter as images -->
         <div class="visitor_display"> 
            <?php
            //Loop to display placeholder image used for unused digits, ensuring a consistent 7-digit display
            //For example, if the counter is "123", it will the four leading "0"images before the actual digits
            for ($total = 7 - $string_num; $total > 0 ;$total--) {
               print '<img src="images/0.png">'; //Display an image displaying "0" 
            }
            
            //Loop through each digit of the counter and display an image that corresponds to that digit
            for ($num=0; $num < $string_num; $num++) {
               print '<img src="images/'.$string[$num].'.png">'; //Display the image for the corresponding digit
            } 
            ?>
         </div><!-- ./visitor_display -->

         <!-- Display a message to the user -->
         <div class="visitor_text bottom">
            <p>page visits</p>
         </div><!-- ./visitor_message -->

         <!-- Bottom border decoration for the page -->
         <div class="bottom_border"></div>

      </section><!-- ./main_wrapper -->
   </body>
</html>