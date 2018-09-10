array1 = [19,29,39,49]

console.log(array1.map(
    (i,j,k) => {
        console.log(i,j,k)
        return i+1
    }
))

console.log(array1.some(i => {
    console.log(i)
    i >= 49
}))

array1.forEach(
    (i,j,k) => {
        console.log(i,j,k)
    }
)

console.log(array1.findIndex(
    i => i > 30
))
