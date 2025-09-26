const hargaElement = document.querySelector(".price");
const updateTimeElement = document.querySelector("#harga small");
const beliButtons = document.querySelectorAll(".btn-small");
const produkItems = document.querySelectorAll(".product-item");

const darkModeBtn = document.createElement("button");
darkModeBtn.textContent = "🌙 Dark Mode";
darkModeBtn.classList.add("btn-secondary");
document.querySelector("header .container").appendChild(darkModeBtn);

darkModeBtn.addEventListener("click", () => {
  document.body.classList.toggle("dark-mode");
  darkModeBtn.textContent = document.body.classList.contains("dark-mode")
    ? "☀️ Light Mode"
    : "🌙 Dark Mode";
});

function updateHargaProduk(hargaPerGram) {
  produkItems.forEach(item => {
    const gram = parseInt(item.getAttribute("data-gram"));
    const totalHarga = gram * hargaPerGram;
    item.querySelector(".harga-produk").textContent =
      `Rp ${totalHarga.toLocaleString("id-ID")}`;
  });
}

function updateHarga() {
  const hargaBaru = 950000 + Math.floor(Math.random() * 100000);
  hargaElement.textContent = `Rp ${hargaBaru.toLocaleString("id-ID")} / gram`;

  const waktu = new Date().toLocaleString("id-ID", {
    dateStyle: "long",
    timeStyle: "short",
  });
  updateTimeElement.textContent = `Update terakhir: ${waktu}`;
  
  updateHargaProduk(hargaBaru);
}

updateHarga();
setInterval(updateHarga, 10000);

beliButtons.forEach((btn) => {
  btn.addEventListener("click", (e) => {
    e.preventDefault();
    const produk = btn.parentElement.querySelector("h3").textContent;
    alert(`Anda memilih untuk membeli: ${produk}`);
  });
});

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener("click", function (e) {
    e.preventDefault();
    const target = document.querySelector(this.getAttribute("href"));
    if (target) {
      target.scrollIntoView({
        behavior: "smooth",
        block: "start"
      });
    }
  });
});