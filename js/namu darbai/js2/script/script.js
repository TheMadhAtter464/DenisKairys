function val(val){
  firstVal = document.getElementById('display').value;
  newVal = firstVal + val;
  document.getElementById('display').value=newVal;
}

function equal(){
  aCtions=document.getElementById('display').value;
  result = eval(aCtions);
  document.getElementById('display').value = result;
}

function clear(){
  document.getElementById('display').value = "";
}
