function calculateSum(numbers) {
  let sum = 0;
  for (let i = 0; i < numbers.length; i++) {
    sum += numbers[i];
  }
  return sum;
}

let numbers = [1, 2, 3, 4, 5];
let sum = calculateSum(numbers);
console.log(sum); // Output: 15

//This function has a potential error. if the input is not an array of numbers. It will throw an error.
//To solve this error, we should add an error handling mechanism. For example: if the input is not an array of numbers, then return an error message.
//This function has a potential error. If the input array is empty, it will return 0. This may not be desirable in all cases. 
//To solve this, we can add a check to handle the case where the input array is empty. 