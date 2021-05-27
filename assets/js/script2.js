// Live Serach
const tombolCari = document.querySelector('.tombol-cari');
const keyword = document.querySelector('.keyword');
const cards = document.querySelector('.cards');

// event ketika menulis keyword
keyword.addEventListener('keyup', function(){
  const xhr = new XMLHttpRequest();

  xhr.onreadystatechange = function (){
    if(xhr.readyState == 4 && xhr.status == 200){
      cards.innerHTML = xhr.responseText;
    }
  };
  xhr.open('get', '../assets/ajax/ajax.php?keyword=' + keyword.value);
  xhr.send();
});