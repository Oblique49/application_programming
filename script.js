let a=[4,9,16];
let b=a.map(elem=>Math.sqrt(elem));
alert(b)
//121.1
let c=[4,9,16];
let d=c.map(elem=>elem+'!');
alert(d)
//121.2
let e=['aye','yf'];
let f {}=e.map(elem=>elem.split('').reverse().join(''))
alert(f)
//121.3
let g = ['123', '456', '789'];
let h=g.map(function(elem){
return elem.split('');
});console.log(h)
//121.4
let i = [1,2,3,4,5];
let j=i.map(function(elem,index){
return elem*index;
});console.log(j)
//121.5