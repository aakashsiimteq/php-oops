<?php

// Pass Lambda to function
function shout ($message){
  echo $message();
}

// Call function
shout(function(){
  return "Hello world";
});
