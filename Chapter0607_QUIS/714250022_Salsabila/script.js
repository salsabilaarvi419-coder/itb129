document.getElementById('year').textContent = new Date().getFullYear();

// Parallax hero
window.addEventListener('scroll', () => { // Perbaikan 1: Gunakan '=>'
  const sc = window.scrollY;
  // Perbaikan 1: Gunakan backticks (`)
  document.getElementById('heroBg').style.transform = `translateY(${sc * 0.25}px)`; 
});

// Slider
const slides = document.getElementById('slides');
const dots = document.getElementById('dots');
let idx = 0;
for(let i=0;i<slides.children.length;i++){
  const d = document.createElement('div');
  d.className = 'dot';
  d.onclick = ()=>go(i);
  dots.appendChild(d);
}
// Perbaikan 2: Gunakan backticks (`)
function go(i){
    idx=i;
    slides.style.transform = `translateX(-${idx*100}%)`; 
    update();
}

function update(){
    dots.querySelectorAll('.dot').forEach((d,i)=>d.classList.toggle('active',i===idx));
}

setInterval(()=>{
    idx=(idx+1)%slides.children.length;
    go(idx);
},4000);

go(0);

// Form validation
const form = document.getElementById('contactForm');
form.addEventListener('submit',e=>{
  e.preventDefault();
  const name=form.name.value.trim();
  const email=form.email.value.trim();
  const msg=form.message.value.trim();
  if(name.length<2 || !email.includes('@') || msg.length<10){
      alert('Mohon isi data dengan benar');
      return;
  }
  document.getElementById('formSuccess').style.display='block';
  form.reset();
});