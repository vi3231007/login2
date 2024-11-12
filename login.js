
const log =document.querySelector('.log')
const reg =document.querySelector('.reg')
const sbtn2 =document.querySelector('.sbtn2')
const lbtn2 =document.querySelector('.lbtn2')

sbtn2.addEventListener('click',()=>{
    log.classList.add('active')
})

lbtn2.addEventListener('click',()=>{
    log.classList.remove('active')
})

