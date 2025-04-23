const dropZone=document.getElementById("drop-zone");
const fileInput=document.getElementById("upload");
const preview=document.getElementById("preview");
// click to open file dialog
dropZone.addEventListener("click",()=>
{
    fileInput.click();
});
dropZone.addEventListener("dragover",(e)=>{
    e.preventDefault();
    dropZone.classList.add("border-orange-500", "bg-orange-50");
});
dropZone.addEventListener("dragleave",()=>{
    dropZone.classList.remove("border-orange-500","bg-orange-50");
});
dropZone.addEventListener("drop",(e)=>{
    e.preventDefault();
    dropZone.classList.remove("border-orange-500","bg-orange-50");
    const file=e.dataTransfer.files[0];
    if(file)
    {
        fileInput.files=e.dataTransfer.files;
        if(file.type.startsWith("image/"))
            {
                const reader=new FileReader();
                reader.onload=function (event)
                {
                    preview.innerHTML=`<img src="${event.target.result}" class="w-48 h-48 object-cover  rounded shadow-lg" alt="Preview">`;
                    const ptag=preview.querySelector("p");
                    ptag.remove();
                };
                reader.readAsDataURL(file);
            }
            else
            {
                preview.innerHTML=`<p class="text-red-500 rounder">selected file is not an image.</p>`;
            }
    }
    
});