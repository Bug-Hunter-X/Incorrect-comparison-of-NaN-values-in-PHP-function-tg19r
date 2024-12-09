function foo(a, b) {
  if (is_nan(a) || is_nan(b)) {
    return false; //Or handle NaN values according to specific needs
  } else if (a === b) {
    return true;
  } else {
    return false;
  }
}

//This function will work as expected if the inputs are of different types like NaN and 0
console.log(foo(NaN, 0)); //false
console.log(foo(0, NaN)); //false
console.log(foo(NaN, NaN)); //false