function _onclick(id){
    console.log(id);
    let newObject =  document.getElementById(id).value;
    
    var all_row=document.getElementsByClassName("row_"+id);
    console.log("Entre")
    console.log(newObject)
    if(newObject === "show"){
        console.log("A")
        for(var i=0;i<all_row.length;i++){
            all_row[i].style.display="none";
        }
        document.getElementById("col_"+id).style.display="none";
        document.getElementById(id).value="hide";
    }else{
        console.log("B")
        for(var i=0;i<all_row.length;i++){
            all_row[i].style.display="table-cell";
        }
        document.getElementById("col_"+id).style.display="table-cell";
        document.getElementById(id).value="show";
    }
}

