 
var dealbtn = document.getElementById("showdeal");
var deals = document.getElementById("moredeal");

var x = dealbtn.onclick=function first(){
    deals.style.display="block";
    dealbtn.onclick=function second(){
        deals.style.display="none";
        dealbtn.onclick=x;
    }
    
}
