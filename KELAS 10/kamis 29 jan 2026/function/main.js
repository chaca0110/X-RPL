// 1. Function Declaration
// Function Declaration adalah function yang dibuat menggunakan keyword function dan dapat dipanggil sebelum dideklarasikan karena bersifat hoisting.
function sapa() {
  console.log("Halo");
}
sapa();

function tambah(a, b) {
  return a + b;
}
console.log(tambah(2, 8));

function kurang(a, b) {
  return a - b;
}
console.log(kurang(7, 2));

function kali(a, b) {
  return a * b;
}
console.log(kali(2, 5));

function bagi(a, b) {
  return a / b;
}
console.log(bagi(25, 5));



// 2. Function Expression
// function expression adalah cara mendefinisikan fungsi dengan menyimpan fungsi ke dalam variabel
const sapa_penonton = function () {
  console.log("Hellow");
};
sapa_penonton();

const tambahin = function (a, b) {
  return a + b;
};
console.log(tambahin(5, 9)); 


const angkaGenap = function (n) {
  return n % 2 === 0;
};
console.log(angkaGenap(10));

const LPersegi = function (s) {
  return s * s;
};
console.log(LPersegi(6));

const pajak = function (h) {
  return h * 0.1;
};
console.log(pajak(1000000));



// 3. Arrow Function
// arrow function adalah cara mendefinisikan fungsi dengan sintaks yang lebih singkat menggunakan tanda panah (=>)
const sapa1 = () => {
  console.log("Belajar function JS");
};
sapa1();

const tambah1 = (a, b) => a + b;
console.log(tambah1(14, 11));

const kuadrat = (x) => x * x;
console.log(kuadrat(7));

const diskon = (h) => h * 0.5;
console.log(diskon(450000));

const cekUmur = (u) => u >= 16;
console.log(cekUmur(22));

const luasSegitiga = (a, t) => 0.5 * a * t;
console.log(luasSegitiga(8, 5));



// 4. Anonymous Function
// anonymous function adalah fungsi yang tidak memiliki nama dan biasanya digunakan sebagai argumen dalam fungsi lain
setTimeout(function () {
  console.log("Anonymous function dijalankan setelah 2 detik");
}, 2000);

document.getElementById("btn");
btn.onclick = function () {
  console.log("Klik");
};

[1, 2, 3, 4, 5].forEach(function (n) {
  console.log(n);
});

document.addEventListener("click", function () {
  console.log("Di Klik");
});

(function () {
  console.log("Anonim");
})();




// 5. Callback Function
// callback function adalah fungsi yang diteruskan sebagai argumen ke fungsi lain dan dipanggil di dalam fungsi tersebut

function proses(data, callback) {
  console.log("Memproses data: " + data);
  callback();
}

proses("Data 1", selesai);

function selesai() {
  console.log("Proses selesai");
}




// 6.IIFE (Immediately Invoked Function Expression)
// IIFE adalah fungsi yang langsung dipanggil setelah didefinisikan
(function () {
  console.log("Mulai");
})();
(() => {
  console.log("Start");
})();

(function(n){ 
  console.log(n); 
})(5);
(()=> { 
  let x=10; console.log(x); 
})();
(function(n){ console.log(n); })(5);
(function(){ alert('IIFE'); })();



// 7. konstruktor Function
// konstruktor function adalah cara mendefinisikan fungsi menggunakan objek Function
function User(n) {
  this.nama = n;
}
const user = new User("Aku");
const user1 = new User("Budi");
console.log(user.nama);
console.log(user1.nama);

function Mobil(m){ 
  this.merk=m; 
}
const mobil = new Mobil('Honda');
function Produk(n,h){ 
    this.nama=n; this.harga=h; 
}

// 8. Async Function
// async function adalah fungsi yang menangani operasi asynchronous menggunakan kata kunci async dan await
async function getData() {
  return "OK";
}

const cek = async () => "Siap";

async function delay(){ 
    await new Promise(r=>setTimeout(r,1000)); 
}

async function hitung(x){ 
    return x*2; 
}

async function tampil(){ 
    console.log(await getData()); 
}