let inputan1 = document.getElementById('inputanku');
let tabelnya = document.getElementById('tabelku');
  inputan1.addEventListener('keyup', function() {
      var xhr = new XMLHttpRequest();

      xhr.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
      tabelnya.innerHTML = this.responseText;
      }
    };
    xhr.open('GET', 'ajax/ajaxCategory.blade.php?kunci=' + inputan1.value, true);
    xhr.send();
})



function editkana() {
    var tombol = document.getElementById("editkan");
    var bodyTabel = document.getElementById("body-tabel")
    var spannya = document.getElementsByClassName("parent-td");
    for(j=0;j<bodyTabel.length;j++) {
        let body = bodyTabel[j];
        let anakspannya = spannya[0];

        for( i=0; i< spannya.length - 1; i++ )
        {   
            var anakSpannya = spannya[i];
            // console.log(anakSpannya.getAttribute('id'));
            console.log(anakSpannya.textContent);
            // if(anakSpannya.getAttribute('id') == anakSpannya.textContent) {
            //     anakSpannya.style.display = "none";
            // } else {
            //     anakSpannya.style.display = "inline-block";
            // }
        }
    }
}

