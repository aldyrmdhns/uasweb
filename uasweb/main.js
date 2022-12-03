var body = document.getElementsByTagName('body')[0];
var head = document.getElementsByClassName('head')[0];
var darktheme = document.getElementById('theme-change');

// untuk alert box
var button = document.getElementById('btn');
// untuk nampil & hilangkan isi judul
var judul = document.getElementById('title');

darktheme.addEventListener('click', function(){
    darktheme.classList.toggle('active');
    body.classList.toggle('night');
    head.classList.toggle('night');
})

button.addEventListener('click', function(){
    alert("Mohon maaf, menu ini belum tersedia! ! !");
})

judul.addEventListener('click', function showInfo(){
    const x = document.getElementById('isi');
    if (x.style.display == 'none') {
        x.style.display = 'block';
    } else {
        x.style.display = 'none';
    }
})