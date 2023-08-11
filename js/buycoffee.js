const buyCoffeButton = document.querySelector(".buyCoffe");

const QR = document.querySelector("#QR");

buyCoffeButton.addEventListener("click", () => {
  if (QR.style.display === 'none') {
    QR.style.display = 'flex'
  } else if (QR.style.display === 'flex') {
    QR.style.display = 'none'
  }
})