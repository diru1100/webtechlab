
function keepvalue(b){
 document.getElementById("output").value +=b;
}

function basicop(value){
  var expp =value;
  var sexp =expp.split("");
  var sign=sexp[1];
  var num1 = parseInt(sexp[0]);
  var num2 = parseInt(sexp[2]);
  sum=num1+num2;
  diff=num1-num2;
  prod=num1*num2;
  div=num1/num2;
  switch(sign){
    case +:
      document.(getElementById("output").value= sum.toString());
      break;
    case -:
      document.(getElementById("output").value= diff.toString());
      break;
    case *:
      document.(getElementById("output").value= prod.toString());
      break;     
    default:
      document.(getElementById("output").value= div.toString());
      break;       
  }

}
