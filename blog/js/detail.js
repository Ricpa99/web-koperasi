
// tabel detail
const btnSetoran = document.querySelector('.btnSetoran')
const formTambah = document.querySelector('.formTambah')
const form = document.querySelector('.form')
const btnX = document.querySelector('.btn-x')

btnSetoran.addEventListener('click', () => {
   formTambah.classList.add('form')
})

btnX.addEventListener('click', () => {
   formTambah.classList.toggle('form')
})






