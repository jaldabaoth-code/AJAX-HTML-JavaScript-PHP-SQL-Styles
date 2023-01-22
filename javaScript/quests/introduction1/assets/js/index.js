console.log("Hello, World!");

// THis is a comment

/* This comment 
is on multiple lines */

/**
 * This comment
 * is used for
 * documentation
 */

1 + 1 // => 2
2 - 2 // => 0
2 * 3 // => 6
6 / 3 // => 2
6 % 2 // => 0
console.log(1 + 1);

const person = {
	name: "Bob", 
	age: 30,
	sayHello: function() {
		console.log("Hello " + this.name); // => Hello Bob
	}
}
console.log(person); // => {name: 'Bob', age: 30, sayHello: ƒ}
person.sayHello(); // => Hello Bob
