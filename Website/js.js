 //form 1


 function vfun(){
     var uname=document.forms["myform"]["uname"].value;
     var upswd=document.forms["myform"]["upswd"].value;


     if(uname==null || uname==""){
        document.getElementById("errorBox").innerHTML="enter,username??";
       return false;

     }


     if(upswd==null || upswd==""){
        document.getElementById("errorBox").innerHTML="enter,password??";
       return false;

    }

    
 }



 //form 2

 function vfun1(){
   var uname=document.forms["myform2"]["uname"].value;
   var email=document.forms["myform2"]["email"].value;
   var upswd1=document.forms["myform2"]["upswd1"].value;
   var upswd2=document.forms["myform2"]["upswd2"].value;
   var uph=document.forms["myform2"]["uph"].value;
   


   if(uname==null || uname==""){
      document.getElementById("errorBox").innerHTML="enter username??";
     return false;

   }

   if(email==null || email==""){
      document.getElementById("errorBox").innerHTML="enter,email??";
     return false;

   }


   if(upswd1==null || upswd1==""){
      document.getElementById("errorBox").innerHTML="enter,password??";
     return false;

  }

  if(upswd2==null || upswd2==""){
   document.getElementById("errorBox").innerHTML="enter,confirm password??";
  return false;

}

if(uph==null || uph==""){
   document.getElementById("errorBox").innerHTML="enter,phone number??";
  return false;

}

}


//join newletters

function vfun2(){
   var nmail=document.forms["myform3"]["nmail"].value;

   if(nmail==null || nmail==""){
      document.getElementById("errorBox").innerHTML="enter,email??";
     return false;

   }
}
