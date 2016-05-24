var clicks = 0; 

function clickME(){
  clicks ++;
  if (clicks == 1) {
  //function myFunctionRood() 
    //{
      document.body.style.backgroundColor = "red";
      //document.getElementById("clicks").innerHTML = clicks;
    //}
  }
  else if(clicks ==2 ) {
  // function myFunctionGroen() 
  //   {
      document.body.style.backgroundColor = "green";
  //   }
  }
else if (clicks ==3) {
  // function myFunctionBlauw() 
  //     {
      document.body.style.backgroundColor = "blue";
  //     }
}
else {
  // function myFunctionWit()
  //     {
     document.body.style.backgroundColor = "white";
  //     }
  }
}