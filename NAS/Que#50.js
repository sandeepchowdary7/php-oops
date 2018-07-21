
function foo(a, b, c){
    a++;
    b="new string";
    c["key"]="new value";
}
var a=1,
    b="old string",
    c={"key":"old value"};
 foo(a, b, c);


//2 , new string,  new value