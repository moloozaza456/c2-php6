let personal = () => {
	return "Hello"
}

console.log(personal());
let personal2 = () => {
	return "Hello World";
}
console.log(personal2());

let student = function (x, y) {
	return x + y
}
console.log(student(10, 20));

let student2 = (x, y) => {
	return x+y
}
console.log(student2(10, 5));