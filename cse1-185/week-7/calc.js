function keepvalue(b){
 document.getElementById('output').value+=b;

}

function evaluate1(){
  var result = document.getElementById('output').value ;
  document.getElementById('output').value=eval( result);

}

