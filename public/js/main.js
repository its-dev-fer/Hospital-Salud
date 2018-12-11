
setTimeout(function (){
    var elem = document.getElementById("message_user");   
    elem.style.visibility = "visible"
}, 2000);

setTimeout(function(){
    var elem = document.getElementById("message_user");   
    var pos = 100;
    var id = setInterval(frame, 5);
    function frame() {
      if (pos == -300) {
        clearInterval(id);
        elem.style.visibility = "hidden";
      } else {
        pos = pos - 5; 
        elem.style.right = pos + 'px'; 
      }
    }
}, 6000);

function _onclick(id){
    let newObject =  document.getElementById(id).value;
    
    var all_row=document.getElementsByClassName("row_"+id);
    if(newObject === "show"){
        for(var i=0;i<all_row.length;i++){
            all_row[i].style.display="none";
        }
        document.getElementById("col_"+id).style.display="none";
        document.getElementById(id).value="hide";
    }else{
        for(var i=0;i<all_row.length;i++){
            all_row[i].style.display="table-cell";
        }
        document.getElementById("col_"+id).style.display="table-cell";
        document.getElementById(id).value="show";
    }
}



