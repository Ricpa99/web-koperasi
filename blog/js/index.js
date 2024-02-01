const menu = document.querySelector('.menu')
const btn = document.querySelector('.btn')
const btnAdd = document.querySelector('.plus')
const sidebar = document.querySelector('.daftar-cicilan')

btn.addEventListener('click', ()=>{
   menu.classList.toggle('animate')
})

btnAdd.addEventListener("click", ()=>{
   sidebar.classList.toggle("animate-cicilan")
})


