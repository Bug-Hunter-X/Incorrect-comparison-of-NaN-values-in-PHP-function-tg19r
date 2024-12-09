function foo(a, b) {
  if (a === b) {
    return true; 
  }
  return false;
}

//This function will not work as expected if the inputs are of different types like NaN and 0
console.log(foo(NaN, 0)); //false
console.log(foo(0, NaN)); //false
console.log(foo(NaN, NaN)); //false