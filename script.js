// dark mode
const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle"),
      searchBtn = body.querySelector(".search-box"),
      modeSwitch = body.querySelector(".toggle-switch"),
      modeText = body.querySelector(".mode-text");


toggle.addEventListener("click" , () =>{
    sidebar.classList.toggle("close");
})

searchBtn.addEventListener("click" , () =>{
    sidebar.classList.remove("close");
})

modeSwitch.addEventListener("click" , () =>{
    body.classList.toggle("dark");
    
    if(body.classList.contains("dark")){
        modeText.innerText = "Light mode";
    }else{
        modeText.innerText = "Dark mode";
        
    }
});

// code for working with tabs
const tabs = document.querySelectorAll('[data-tab-target]')
const tabContents = document.querySelectorAll('[data-tab-content]')

tabs.forEach(tab => {
  tab.addEventListener('click', () => {
    const target = document.querySelector(tab.dataset.tabTarget)

    tabContents.forEach(tabContent  => {tabContent.classList.remove('active')})

    tabs.forEach(tab  => {tab.classList.remove('active')})

    tab.classList.add('active')
    target.classList.add('active')
  })
})



// code for alert popup form
function message(){
    var text = document.getElementById('sec');
    var text = document.getElementById('subj');
    var time = document.getElementById('time');
    var date = document.getElementById('date');
    var popup_textarea = document.getElementById('popup_textarea');
    const success = document.getElementById('success');
    const danger = document.getElementById('danger');

    if(sec.value === '' || subj.value === '' || time.value === '' || date.value === '' || popup_textarea.value === ''){
        danger.style.display = 'block';
            }
    else{
        setTimeout(() => {
            sec.value = '';
            subj.value = '';
            time.value ='';
            date.value = '';
            popup_textarea.value = '';
        }, 2000);

        success.style.display = 'block';
    }


    setTimeout(() => {
        danger.style.display = 'none';
        success.style.display = 'none';
    }, 4000);

}


// update image

document.getElementById("fileImg").onchange = function(){
    document.getElementById("image").src = URL.createObjectURL(fileImg.files[0]); // Preview new image

    document.getElementById("cancel").style.display = "block";
    document.getElementById("confirm").style.display = "block";

    document.getElementById("upload").style.display = "none";
}

var userImage = document.getElementById('image').src;
document.getElementById("cancel").onclick = function(){
    document.getElementById("image").src = userImage; // Back to previous image

    document.getElementById("cancel").style.display = "none";
    document.getElementById("confirm").style.display = "none";

    document.getElementById("upload").style.display = "block";
}





document.getElementById("open-popup-btn").addEventListener("click",function(){
    document.getElementsByClassName("popup")[0].classList.add("active");
});

document.getElementById("dismiss-popup-btn").addEventListener("click",function(){
    document.getElementsByClassName("popup")[0].classList.remove("active");
});


// function showForm() {
//     document.getElementById("form-popup").style.display = "block";
//   }








