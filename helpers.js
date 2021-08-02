/* escape resrved words*/
let myStr = "One more step,?;.|fasl&;|,red,?;.|fasl&;|,2?|s3atbbt7sl;.|/|:=?|Priority,?;.|fasl&;|,blue,?;.|fasl&;|,3?|s3atbbt7sl;.|/|:=?|";
 
 let normal  = "?|s3atbbt7sl;.|/|:=?|hello World";
 
 function checkIt(str) {
   let newStr = "";
   let resrevedBegain = "?|s3atbbt7sl;.|/|:=?|";
   let resrevedEnd = ",?;.|fasl&;|,";

   let appliedfirstCheck = false;
   let appliedSecondCheck = false;

   
   
   
   /* Check begain */
   let formatedBegain = "";
   let newstr1 = "";
   if (str.length >= 21 && str.includes(resrevedBegain)) {
     appliedfirstCheck = true;
     let begainStrIndex = "";
     for (var i=0; i<str.length; i++) {
        formatedBegain += str[i];
        if (i%21 == 0) {
           if (formatedBegain.slice(i-21,i) == resrevedBegain) {
              formatedBegain += "Hey" + formatedBegain.slice(i-21,i);
              newstr1 += formatedBegain.slice(i-21,i) + "Python King";
           } else {
              newstr1 += formatedBegain.slice(i-21,i)
           }
        }
     }
     formatedBegain = newstr1;
   }
   
   /* check middle */
   let formatedEnd = "";
   if (str.length > 13 && str.includes(resrevedEnd) && appliedfirstCheck == true) {
      appliedSecondCheck = true;
      let endString = "";
      for (var e=0; e<formatedBegain.length; e++) {
         endString += formatedBegain[e];
         if (e % 13 == 0) {
            if (resrevedEnd == endString) {
               formatedEnd += "myFasl" + endString;
               endString = "";
            } else {
               formatedEnd += endString;
               endString = "";
            }
         }
      }
   }
   
   
   if (appliedfirstCheck == true && appliedSecondCheck == false) {
     return formatedBegain;
   } else if (appliedSecondCheck == true) {
     return formatedEnd;
   } else  {
     return str;
   }
   
 }

alert(checkIt(normal));

/* handle title resrved words included in begain or end */
let str1 = "?|s3atbbt7sl;.|/|:=?|mytask";
let str2 = "?|s3atbbt7sl;.|/|:=?|something ,?;.|fasl&;|,";
let str3 = "normal";

function handleResrved2(str) {
   let resrevedBegain = "?|s3atbbt7sl;.|/|:=?|";
   let resrevedEnd = ",?;.|fasl&;|,";
   let functionStr = "";
   functionStr = str.replace(resrevedBegain, "&#11088;");
   functionStr = functionStr.replace(resrevedEnd, "&#128125;");   
   return functionStr;   
}


/* or */
function handleResrved(str) {
   let resrevedBegain = "?|s3atbbt7sl;.|/|:=?|";
   let resrevedEnd = ",?;.|fasl&;|,";
   let functionStr = "";
   let firstCheck = false;
   let secondCheck = false;
   if (str.includes(resrevedBegain)) {
        firstCheck = true;
        functionStr = str.replace(resrevedBegain, "&#11088;");
   } else {
        functionStr = str;
   }
   if (functionStr.includes(resrevedEnd)) {
        secondCheck = true;
        functionStr = functionStr.replace(resrevedEnd, "&#128125;");
   }
   
   return functionStr;   
}

/* Final filter the text */
function handleResrved(str) {
   let resrevedBegain = "?|s3atbbt7sl;.|/|:=?|";
   let resrevedEnd = ",?;.|fasl&;|,";
   let functionStr = str;

   while (functionStr.includes(resrevedBegain)) {
        functionStr = functionStr.replace(resrevedBegain, "&#11088;");
   }
   while (functionStr.includes(resrevedEnd)) {
        functionStr = functionStr.replace(resrevedEnd, "&#128125;");
   }
   return functionStr;   
}

