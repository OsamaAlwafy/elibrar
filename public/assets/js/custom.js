document.getElementById('img').addEventListener('change', showImage);
function showImage(evt) {
 var files = evt.target.files;
 console.log(files);
 //alert(files);
 if (files.length === 0) {
 console.log('No files selected');
 return;
 }
 var reader = new FileReader();
 reader.onload = function(event) {
 var img = new Image();
 
///img.classList.add("img-upload" , "card-img-top");
 var p=document.createElement('p');
 p.innerHTML=files[0].name;
 var p2=document.createElement('p');
 p2.innerHTML=((files[0].size/1024)/1024).toFixed(4)+" MB";
 //p.classList.add('');

 //p2.classList.add('list-group-item');

 var div = document.createElement('div');
 div.id = 'container-img';
 div.style.width='18 rem;'
 div.className = 'container-img card';
 var btn = document.createElement("button");
btn.innerHTML = "Remove File";
btn.onclick = function (e) {
    div.style.display="none";
    document.getElementById('load-img').classList.toggle('load-img'); 
   
  
  e.preventDefault();
};

btn.classList.add("btn","btn-danger");
 img.width=150;
 img.onload = function() {
document.getElementById('imageupload').appendChild(div);
document.getElementById('load-img').classList.toggle('load-img'); 
 div.appendChild(img);
 div.appendChild(p);
 div.appendChild(p2);
 div.appendChild(btn);


 };
 img.src = event.target.result;
 };
 reader.readAsDataURL(files[0]);
}
