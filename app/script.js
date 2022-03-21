let btn = document.querySelector("#btn");
let sidebarLeft = document.querySelector(".sidebar-left");
let searchBtn = document.querySelector(".bx-search");

btn.onclick = () => {
    sidebarLeft.classList.toggle('active');
}

searchBtn.onclick = () => {
    sidebarLeft.classList.toggle('active');
}

// menghitung jumlah terbesar sebuah array;
 function largestOfFour(arr) {

  const hiks = [];
  for( let i = 0; i < arr.length; i++) {
    let larger = 0;
    for(let j = 0; j < arr[i].length; j++) {
      if(arr[i][j] > larger) {
        larger = arr[i][j];
      }
    }
    hiks.push(larger);
  }
  
  return hiks;
}

console.log(largestOfFour([[4, 5, 1, 3], [13, 27, 18, 26], [32, 35, 37, 39], [1000, 1001, 857, 1]]));



