function solve(input) {
    let nums = input.map(Number);
    nums.sort((a,b) => b-a);
    let count = Math.min(3, nums.length);
    for (let i = 0; i < count; i++) {
        console.log(nums[i]);
    }
}
